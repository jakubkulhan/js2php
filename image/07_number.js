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
	if (@@ isset($leThis->class) && $leThis->class !== 'Number' @@) {
		throw new TypeError("Number.prototype.toString(): not generic");
	}

	if (isNaN(@@ $leThis->value @@)) {
		return "NaN";
	}

	if (@@ $leThis->value === INF @@) {
		return "Infinity";
	}

	if (@@ $leThis->value === -INF @@) {
		return "-Infinity";
	}

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
	if (fractionDigits !== undefined && (fractionDigits < 0 || fractionDigits > 20)) {
		throw new RangeError("Number.prototype.toFixed(): argument must be between 0 and 20");
	}

	if (@@ is_nan($leThis->value) @@) {
		return "NaN";
	}

	fractionDigits = @@ JS::toNumber(`fractionDigits, $global) @@;

	if (isNaN(fractionDigits)) {
		return @@ (string) intval(round($leThis->value)) @@;
	}

	return @@ sprintf('%.' . `fractionDigits . 'f', $leThis->value) @@;

	return @@ sprintf('%f', $leThis->value) @@;
};

Number.prototype.toExponential = function (fractionDigits) {
	if (fractionDigits !== undefined && (fractionDigits < 0 || fractionDigits > 20)) {
		throw new RangeError("Number.prototype.toExponential(): argument must be between 0 and 20");
	}

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
		var d = @@ JS::toNumber(`fractionDigits, $global) @@;

		if (isNaN(d)) {
			d = 0;
		}

		return @@ sprintf('%.' . `d . 'e', $leThis->value) @@;
	}

	return @@ preg_replace('/[.]?0+e/', 'e', sprintf('%e', $leThis->value)) @@;
};

Number.prototype.toPrecision = function (precision) {
	if (precision === undefined) {
		return this.toString();
	}

	if (precision !== undefined && (precision < 1 || precision > 21) || isNaN(precision)) {
		throw new RangeError("Number.prototype.toPrecision(): precision must be between 1 and 21");
	}

	if (@@ is_nan($leThis->value) @@) {
		return "NaN";
	}

	if (@@ $leThis->value === INF @@) {
		return "Infinity";
	}

	if (@@ $leThis->value === -INF @@) {
		return "-Infinity";
	}

	precision = @@ JS::toNumber(`precision, $global) @@;

	return @@ preg_replace('/[.]?0+e/', 'e', sprintf('%.' . JS::toString(`precision, $global) . 'g',
		round($leThis->value, `precision - strlen((string) intval($leThis->value))))) @@;
};
