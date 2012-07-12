@@

// represents Javascript's undefined value
class JSUndefined
{
}

// wrapper for Javascript-thrown exceptions/errors
class JSException extends Exception
{
	public $value;

	public function __construct($value, $line = NULL, $column = NULL, $file = NULL)
	{
		$this->value = $value;

		if (is_object($this->value) &&
			isset($this->value->class) &&
			$this->value->class === "Error" &&
			isset($this->value->properties['name']) &&
			isset($this->value->properties['message']))
		{
			parent::__construct(
				$this->value->properties['name'] . ': ' .
				$this->value->properties['message'] . ' (' .
				$file . '@' . $line . ':' . $column . ')'
			);
		}
	}

	public function getNativeValue()
	{
		return JS::toNative($this->value);
	}
}

// thrown when cannot convert from Javascript value to native et vice versa
class JSSerializationException extends Exception
{
}

// utility class
class JS
{
	const
		WRITABLE = 1,
		ENUMERABLE = 2,
		CONFIGURABLE = 4,
		HAS_GETTER = 8,
		HAS_SETTER = 16;

	static $global;
	static $undefined;
	static $emptyScope;
	static $objectTemplate;
	static $functionTemplate;
	static $booleanTemplate;
	static $numberTemplate;
	static $stringTemplate;
	static $argumentsTemplate;
	static $arrayTemplate;
	static $regexpTemplate;

	static function toPrimitive($v, $global)
	{
		if ($v === JS::$undefined || !is_object($v)) {
			return $v;
		} else if (isset($v->value)) {
			return $v->value;
		} else {
			if (($f = JS::getProperty($v, 'toString')) !== NULL && isset($f->call)) {
				$c = $f->call;
				$r = $c($global, $v, $f, array());

			} else if (($f = JS::getProperty($v, 'valueOf')) !== NULL && isset($f->call)) {
				$c = $f->call;
				$r = $c($global, $v, $f, array());
			}

			if (isset($r) && (!is_object($r) || $r === JS::$undefined)) {
				return $r;
			}

			JS::throwTypeError($global, 'Cannot convert object to primitive.');
		}
	}

	static private function throwTypeError($global, $msg)
	{
		if (isset($global->properties['TypeError'])) {
			$TypeError = $global->properties['TypeError'];
			$c = $TypeError->call;
			throw new JSException($c($global, JS::$undefined, $TypeError, array($msg)));
		}

		throw new JSException(JS::$undefined);
	}

	static private function getProperty($o, $p)
	{
		for (; $o && !array_key_exists($p, $o->properties); $o = $o->prototype);

		if (!array_key_exists($p, $o->properties)) {
			return NULL;
		}

		return $o->properties[$p];
	}

	static function toBoolean($v, $global)
	{
		return !($v === JS::$undefined || $v === NULL || $v === FALSE || $v === 0 || $v === 0.0 ||
			(is_float($v) && is_nan($v)) || $v === '');
	}

	static function toNumber($v, $global)
	{
		if ($v === JS::$undefined) {
			return NAN;

		} else if ($v === NULL || is_bool($v)) {
			return (int) $v;

		} else if (is_int($v) || is_float($v)) {
			return $v;

		} else if (is_string($v)) {
			return ((string) intval($v)) === $v ? intval($v) : floatval($v);

		} else {
			return JS::toNumber(JS::toPrimitive($v, $global), $global);
		}
	}

	static function toString($v, $global)
	{
		if ($v === JS::$undefined) {
			return 'undefined';

		} else if ($v === NULL) {
			return 'null';

		} else if ($v === TRUE) {
			return 'true';

		} else if ($v === FALSE) {
			return 'false';

		} else if (is_int($v) || is_float($v)) {
			if (is_nan($v)) {
				return 'NaN';
			} else if ($v === INF) {
				return 'Infinity';
			} else if ($v === -INF) {
				return '-Infinity';
			} else {
				return (string) $v;
			}

		} else if (is_string($v)) {
			return $v;

		} else {
			return JS::toString(JS::toPrimitive($v, $global), $global);
		}
	}

	static function toObject($v, $global)
	{
		if (is_object($v) && $v !== JS::$undefined) {
			return $v;

		} else if ($v === JS::$undefined) {
			JS::throwTypeError($global, "Cannot convert undefined to object.");

		} else if ($v === NULL) {
			JS::throwTypeError($global, "Cannot convert null to object.");

		} else if (is_bool($v)) {
			$o = clone JS::$booleanTemplate;
			$o->value = $v;
			return $o;

		} else if (is_int($v) || is_float($v)) {
			$o = clone JS::$numberTemplate;
			$o->value = $v;
			return $o;

		} else if (is_string($v)) {
			$o = clone JS::$stringTemplate;
			$o->value = $v;
			$o->properties['length'] = strlen($v);
			$o->attributes['length'] = 0;
			return $o;
		}
	}

	static function fromNative($native)
	{
		if (is_null($native) || is_bool($native) || is_int($native) ||
			is_float($native) || is_string($native))
		{
			return $native;

		} else if (is_array($native)) {
			$array = clone JS::$arrayTemplate;

			foreach ($native as $k => $v) {
				$array->properties[(string) $k] = JS::fromNative($v);
				$array->attributes[(string) $k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
			}

			$array->properties['length'] = count($native);

			return $array;

		} else if (is_object($native)) {
			$object = clone JS::$objectTemplate;

			foreach ($native as $k => $v) {
				$object->properties[(string) $k] = JS::fromNative($v);
				$object->attributes[(string) $k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
			}

			return $object;
		}

		throw new JSSerializationException('Cannot convert value of type ' . gettype($native) . ' to JS.');
	}

	static function toNative($value)
	{
		if (is_null($value) || is_bool($value) || is_int($value) ||
			is_float($value) || is_string($value))
		{
			return $value;

		} else if (is_object($value) && $value === JS::$undefined) {
			return NULL;

		} else if (is_object($value) && isset($value->class) && $value->class === 'Array') {
			$array = array();

			for ($i = 0, $l = $value->properties['length']; $i < $l; ++$i) {
				$array[$i] = $value->properties[$i];
			}

			return $array;

		} else if (is_object($value)) {
			$object = array();

			foreach ($value->properties as $k => $v) {
				$object[$k] = JS::toNative($v);
			}

			return (object) $object;
		}

		throw new JSSerializationException('Cannot export value from JS.');
	}
}

JS::$undefined = new JSUndefined;

JS::$emptyScope = (object) array(
	'properties' => array(),
	'attributes' => array(),
	'up' => NULL,
);

JS::$objectTemplate = (object) array(
	'properties' => array(),
	'attributes' => array(),
	'getters' => array(),
	'setters' => array(),
	'prototype' => NULL
);

JS::$functionTemplate = clone JS::$objectTemplate;
JS::$functionTemplate->prototype = clone JS::$objectTemplate;
JS::$booleanTemplate = clone JS::$objectTemplate;
JS::$numberTemplate = clone JS::$objectTemplate;
JS::$stringTemplate = clone JS::$objectTemplate;
JS::$argumentsTemplate = clone JS::$objectTemplate;
JS::$arrayTemplate = clone JS::$objectTemplate;
JS::$regexpTemplate = clone JS::$objectTemplate;

@@
