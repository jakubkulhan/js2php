function _9273b0ff6f7baa815f4ec0ba04dfeffe_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/00_prologue.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/00_prologue.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;

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

// return fro try-catch-finally
class JSCatchReturn extends Exception
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

	const
		HINT_STRING = 0,
		HINT_NUMBER = 1;

	static $global;
	static $undefined;
	static $loader;
	static $emptyScope;
	static $objectTemplate;
	static $functionTemplate;
	static $booleanTemplate;
	static $numberTemplate;
	static $stringTemplate;
	static $argumentsTemplate;
	static $arrayTemplate;
	static $regexpTemplate;

	/** @var array class => wrapped object template */
	static $wrappedObjectTemplates = array();

	/** @var array object hash => object */
	static $wrappedObjects = array();

	static function toPrimitive($v, $global, $hint = JS::HINT_STRING)
	{
		if ($v === JS::$undefined || !is_object($v)) {
			return $v;

		} else if (isset($v->class) && $v->class === 'Date' && $hint === JS::HINT_NUMBER) {
			return $v->value * 1000;

		} else if (isset($v->value)) {
			return $v->value;

		} else {
			if (($f = JS::getProperty($v, 'toString')) !== NULL && isset($f->call)) {
				$c = $f->call;

				if (JS::$loader !== NULL && !$f->loaded) {
					$l = JS::$loader;
					$l($f, $global);
				}

				$r = $c($global, $v, $f, array());

			} else if (($f = JS::getProperty($v, 'valueOf')) !== NULL && isset($f->call)) {
				$c = $f->call;

				if (JS::$loader !== NULL && !$f->loaded) {
					$l = JS::$loader;
					$l($f, $global);
				}

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

			if (JS::$loader !== NULL && !$TypeError->loaded) {
				$l = JS::$loader;
				$l($TypeError, $global);
			}

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
			return JS::toNumber(JS::toPrimitive($v, $global), $global, JS::HINT_NUMBER);
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
			return JS::toString(JS::toPrimitive($v, $global), $global, JS::HINT_STRING);
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

		} else if ($native instanceof JSUndefined) {
			return JS::$undefined;

		} else if (is_array($native) || is_object($native) && $native instanceof stdClass) {
			$isArray = is_array($native) &&
				(!count($native) ||
				range(0, count($native) - 1) === array_keys($native));

			$ret = $isArray ? clone JS::$arrayTemplate : clone JS::$objectTemplate;

			foreach ((array) $native as $k => $v) {
				$ret->properties[(string) $k] = JS::fromNative($v);
				$ret->attributes[(string) $k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
			}

			if ($isArray) {
				$ret->properties['length'] = count($native);
			}

			return $ret;

		} else if (is_object($native)) {
			if (isset(JS::$wrappedObjects[spl_object_hash($native)])) {
				return JS::$wrappedObjects[spl_object_hash($native)];
			}

			if (!isset(JS::$wrappedObjectTemplates[get_class($native)])) {

				$reflection = new ReflectionClass($native);

				if (!$reflection->hasMethod('__invoke')) {
					$wrappedObjectTemplate = clone JS::$objectTemplate;

				} else {
					$wrappedObjectTemplate = clone JS::$functionTemplate;
					$invoke = $reflection->getMethod('__invoke');
					$wrappedObjectTemplate->call = 'JSWrappedObject';
					$wrappedObjectTemplate->parameters = array();

					foreach($invoke->getParameters() as $p) {
						$wrappedObjectTemplate->parameters[] = $p->getName();
					}

					$wrappedObjectTemplate->properties['prototype'] = clone JS::$objectTemplate;
					$wrappedObjectTemplate->attributes['prototype'] = 0;
					$wrappedObjectTemplate->properties['prototype']->properties['contructor'] =
						$wrappedObjectTemplate;
					$wrappedObjectTemplate->properties['prototype']->attributes['contructor'] =
						JS::WRITABLE | JS::CONFIGURABLE;
					$wrappedObjectTemplate->properties['length'] = count($wrappedObjectTemplate->parameters);
					$wrappedObjectTemplate->attributes['length'] = 0;
				}

				$wrappedObjectTemplate->class = $reflection->getName();

				foreach ($reflection->getMethods() as $method) {
					if ($method->isAbstract() || $method->isConstructor() || $method->isDestructor() ||
						$method->isProtected() || $method->isPrivate() || $method->isStatic() ||
						$method->getName() === '__invoke')
					{
						continue;
					}

					$name = $method->getName();

					if ($name === '__toString') {
						$name = 'toString';
					}

					$wrappedObjectTemplate->properties[$name] = clone JS::$functionTemplate;
					$wrappedObjectTemplate->attributes[$name] = 0;
					$wrappedObjectTemplate->properties[$name]->call = 'JSWrappedMethod';
					$wrappedObjectTemplate->properties[$name]->name = $method->getName();
					$wrappedObjectTemplate->properties[$name]->parameters = array();

					foreach ($method->getParameters() as $p) {
						$wrappedObjectTemplate->properties[$name]->parameters[] = $p->getName();
					}

					$wrappedObjectTemplate->properties[$name]->properties['prototype'] =
						clone JS::$objectTemplate;
					$wrappedObjectTemplate->properties[$name]->attributes['prototype'] = 0;
					$wrappedObjectTemplate->properties[$name]->properties['prototype']->properties['contructor'] =
						$wrappedObjectTemplate->properties[$name];
					$wrappedObjectTemplate->properties[$name]->properties['prototype']->attributes['contructor'] =
						JS::WRITABLE | JS::CONFIGURABLE;
					$wrappedObjectTemplate->properties[$name]->properties['length'] =
						count($wrappedObjectTemplate->properties[$name]->parameters);
					$wrappedObjectTemplate->properties[$name]->attributes['length'] = 0;

					if ((strncmp($name, 'get', 3) === 0 && $method->getNumberOfParameters() === 0 ||
						strncmp($name, 'set', 3) === 0 && $method->getNumberOfParameters() === 1) &&
						strlen($name) > 3)
					{
						$pname = strtolower(substr($name, 3, 1)) . (string) substr($name, 4);

						if (!isset($wrappedObjectTemplate->attributes[$pname])) {
							$wrappedObjectTemplate->attributes[$pname] = 0;
						}

						$wrappedObjectTemplate->attributes[$pname] |=
							$name[0] === 'g' ? JS::HAS_GETTER : JS::HAS_SETTER;

						if ($name[0] === 'g') {
							$wrappedObjectTemplate->getters[$pname] =
								$wrappedObjectTemplate->properties[$name];

						} else {
							$wrappedObjectTemplate->setters[$pname] = 
								$wrappedObjectTemplate->properties[$name];
						}
					}
				}

				JS::$wrappedObjectTemplates[get_class($native)] = $wrappedObjectTemplate;
			}

			$wrapped = clone JS::$wrappedObjectTemplates[get_class($native)];
			$wrapped->native = $native;
			$wrapped->extensible = FALSE;

			JS::$wrappedObjects[spl_object_hash($native)] = $wrapped;

			return $wrapped;

		} else {
			$ret = clone JS::$objectTemplate;
			$ret->class = 'Native';
			$ret->extensible = FALSE;
			$ret->native = $native;

			return $ret;
		}
	}

	static function toNative($value)
	{
		if (is_null($value) || is_bool($value) || is_int($value) ||
			is_float($value) || is_string($value))
		{
			return $value;

		} else if ($value === JS::$undefined) {
			return NULL;

		} else if (isset($value->class) && $value->class === 'Array') {
			$array = array();

			for ($i = 0, $l = $value->properties['length']; $i < $l; ++$i) {
				$array[$i] = JS::toNative($value->properties[$i]);
			}

			return $array;

		} else if (isset($value->native)) {
			return $value->native;

		} else {
			$object = array();

			for (; $value; $value = $value->prototype) {
				foreach ($value->properties as $k => $v) {
					if (!isset($value->attributes[$k]) || $value->attributes[$k] & JS::ENUMERABLE) {
						$object[$k] = JS::toNative($v);
					}
				}
			}

			return (object) $object;
		}
	}
}

function JSWrappedFunction($global, $leThis, $fn, array $args)
{
	$nativeArgs = array();

	foreach ($args as $arg) {
		if ($arg === JS::$undefined) { break; }
		$nativeArgs[] = JS::toNative($arg);
	}

	return JS::fromNative(call_user_func_array($fn->name, $nativeArgs));
}

function JSWrappedConstructor($global, $leThis, $fn, array $args)
{
	$nativeArgs = array();

	foreach ($args as $arg) {
		if ($arg === JS::$undefined) { break; }
		$nativeArgs[] = JS::toNative($arg);
	}

	if (count($fn->parameters)) {
		$reflection = new ReflectionClass($fn->name);
		return JS::fromNative($reflection->newInstanceArgs($nativeArgs));
	}

	$cls = $fn->name;

	return JS::fromNative(new $cls);
}

function JSWrappedMethod($global, $leThis, $fn, array $args)
{
	$nativeArgs = array();

	foreach ($args as $arg) {
		if ($arg === JS::$undefined) { break; }
		$nativeArgs[] = JS::toNative($arg);
	}

	return JS::fromNative(call_user_func_array(array($leThis->native, $fn->name), $nativeArgs));
}

function JSWrappedObject($global, $leThis, $fn, array $args)
{
	$nativeArgs = array();

	foreach ($args as $arg) {
		if ($arg === JS::$undefined) { break; }
		$nativeArgs[] = JS::toNative($arg);
	}

	return JS::fromNative(call_user_func_array($fn->native, $nativeArgs));
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
;
return JS::$undefined;
}
