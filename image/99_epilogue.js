(function () {
	@@
		foreach (array(
				`Object, `Object->properties['prototype'],
				`Function, `Function->properties['prototype'],
				`Array, `Array->properties['prototype'],
				`String, `String->properties['prototype'],
				`Boolean, `Boolean->properties['prototype'],
				`Number, `Number->properties['prototype'],
				`Math,
				`Date, `Date->properties['prototype'],
				`RegExp, `RegExp->properties['prototype'],
				`Error, `Error->properties['prototype'],
				`JSON
			) as $o)
		{
			foreach ($o->attributes as $k => $v) {
				$o->attributes[$k] = $v & ~JS::ENUMERABLE;
			}
		}

		JS::$objectTemplate = (object) array(
			'properties' => array(),
			'attributes' => array(),
			'getters' => array(),
			'setters' => array(),
			'prototype' => `Object->properties['prototype'],
			'extensible' => TRUE,
			'class' => 'Object',
		);

		JS::$functionTemplate = clone JS::$objectTemplate;
		JS::$functionTemplate->prototype = `Function->properties['prototype'];
		JS::$functionTemplate->class = 'Function';

		JS::$argumentsTemplate = clone JS::$objectTemplate;
		JS::$argumentsTemplate->class = 'Arguments';
		JS::$argumentsTemplate->attributes['length'] = JS::WRITABLE | JS::CONFIGURABLE;
	@@

	var a = new Array(),
		s = new String(),
		b = new Boolean(),
		n = new Number(),
		r = new RegExp(),
		x = {};

	@@
		JS::$arrayTemplate = `a;
		JS::$stringTemplate = `s;
		JS::$booleanTemplate = `b;
		JS::$numberTemplate = `n;
		JS::$regexpTemplate = `r;

		JS::$global = $global;
	@@
})();
