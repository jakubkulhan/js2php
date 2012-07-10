function Number(value) {
	if (this === @@ $global @@) {
		if (value === undefined) {
			value = 0;
		}
		return @@ JS::toNumber(`value) @@;
	}

	var n = {};
	@@ `n->prototype = `Number->properties['prototype']; @@
	@@ `n->class = 'Number'; @@
	@@ `n->value = JS::toNumber(`value); @@
	@@ `n->extensible = TRUE; @@

	return n;
}

// FIXME
Number.MAX_VALUE = @@ PHP_INT_MAX @@;
Number.MIN_VALUE = @@ (int) PHP_INT_MAX + 1 @@;
Number.NaN = NaN;
Number.NEGATIVE_INFINITY = -Infinity;
Number.POSITIVE_INFINITY = Infinity;

Number.prototype = {};
@@ `Number->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `Number->properties['prototype']->class = 'Number'; @@
@@ `Number->properties['prototype']->extensible = TRUE; @@
Number.prototype.constructor = Number;

Number.prototype.toString = function (radix) {
	radix = radix || 10;

	if (radix < 2 || radix > 36) {
		throw new RangeError("Number.prototype.toString(): radix is not between 2 and 36.");
	}

	return @@ base_convert((string) $leThis->value, 10, `radix) @@;
};

Number.prototype.toLocaleString = Number.prototype.toString;

Number.prototype.valueOf = function () {
	return @@ $leThis->value @@;
};

Number.prototype.toFixed = function () {
	if (@@ is_nan($leThis->value) @@) {
		return "NaN";
	}

	return @@ sprintf('%f', $leThis->value) @@;
};

Number.prototype.toExponential = function () {
	if (@@ is_nan($leThis->value) @@) {
		return "NaN";
	}

	if (@@ $leThis->value === INF @@) {
		return "Infinity";
	}

	if (@@ $leThis->value === -INF @@) {
		return "-Infinity";
	}

	return @@ sprintf('%e', $leThis->value) @@;
};

Number.prototype.toPrecision = function (precision) {
	if (precision === undefined) {
		return this.toString();
	}

	return @@ sprintf('%' . JS::toString(precision) . 'e', $leThis->value) @@;
};
