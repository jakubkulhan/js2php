function Number(value) {
	if (this === @@ $global @@) {
		return @@ JS::toNumber(`value, $global) @@;
	}

	var n = {};
	@@ `n->prototype = `Number->properties['prototype']; @@
	@@ `n->class = 'Number'; @@
	@@ `n->value = JS::toNumber(`value, $global); @@
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
	if (@@ is_float($leThis->value) @@) {
		return @@ (string) $leThis->value @@;
	}

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

Number.prototype.toFixed = function (fractionDigits) {
	if (@@ is_nan($leThis->value) @@) {
		return "NaN";
	}

	if (fractionDigits !== undefined) {
		return @@ sprintf('%.' . `fractionDigits . 'f', $leThis->value) @@;
	}

	if (fractionDigits === undefined && @@ is_int($leThis->value) @@) {
		return @@ (string) $leThis->value @@;
	}

	return @@ sprintf('%f', $leThis->value) @@;
};

Number.prototype.toExponential = function (fractionDigits) {
	if (@@ is_nan($leThis->value) @@) {
		return "NaN";
	}

	if (@@ $leThis->value === INF @@) {
		return "Infinity";
	}

	if (@@ $leThis->value === -INF @@) {
		return "-Infinity";
	}

	if (fractionDigits !== undefined) {
		return @@ sprintf('%.' . `fractionDigits . 'e', $leThis->value) @@;
	}

	return @@ preg_replace('/[.]?0+e/', 'e', sprintf('%e', $leThis->value)) @@;
};

Number.prototype.toPrecision = function (precision) {
	if (precision === undefined) {
		return this.toString();
	}

	if (precision < 1 || precision > 21) {
		throw new RangeError("Number.prototype.toPrecision(): precision must be between 1 and 21");
	}

	return @@ preg_replace('/[.]?0+e/', 'e', sprintf('%.' . JS::toString(`precision, $global) . 'g',
		round($leThis->value, `precision - strlen((string) intval($leThis->value))))) @@;
};
