function Boolean(value) {
	if (this === @@ $global @@) {
		return @@ JS::toBoolean(`value, $global) @@;
	}

	var b = {};
	@@ `b->prototype = `Boolean->properties['prototype']; @@
	@@ `b->class = 'Boolean'; @@
	@@ `b->value = JS::toBoolean(`value, $global); @@
	@@ `b->extensible = TRUE; @@

	return b;
}

Boolean.prototype = {};
@@ `Boolean->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `Boolean->properties['prototype']->class = 'Boolean'; @@
@@ `Boolean->properties['prototype']->extensible = TRUE; @@
Boolean.prototype.constructor = Boolean;

Boolean.prototype.toString = function () {
	if (@@ !isset($leThis->class) || $leThis->class !== 'Boolean' @@) {
		throw new TypeError("Boolean.prototype.toString(): not generic");
	}

	if (@@ $leThis->value @@) {
		return "true";
	}

	return "false";
};

Boolean.prototype.valueOf = function () {
	if (@@ !isset($leThis->class) || $leThis->class !== 'Boolean' @@) {
		throw new TypeError("Boolean.prototype.valueOf(): not generic");
	}

	return @@ $leThis->value @@;
};
