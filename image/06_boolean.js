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
	if (@@ $leThis->value @@) {
		return "true";
	}

	return "false";
};

Boolean.prototype.valueOf = function () {
	return @@ $leThis->value @@;
};
