var Math = {
	E: 2.7182818284590452354,
	LN10: 2.302585092994046,
	LN2: 0.6931471805599453,
	LOG2E: 1.4426950408889634,
	LOG10E: 0.4342944819032518,
	PI: 3.1415926535897932,
	SQRT1_2: 0.7071067811865476, 
	SQRT2: 1.4142135623730951,

	abs: function (x) {
		return @@ abs(JS::toNumber(`x, $global)) @@;
	},

	acos: function (x) {
		return @@ acos(JS::toNumber(`x, $global)) @@;
	},

	asin: function (x) {
		return @@ asin(JS::toNumber(`x, $global)) @@;
	},

	atan: function (x) {
		return @@ atan(JS::toNumber(`x, $global)) @@;
	},

	atan2: function (x) {
		return @@ atan2(JS::toNumber(`x, $global)) @@;
	},

	ceil: function (x) {
		return @@ ceil(JS::toNumber(`x, $global)) @@;
	},

	cos: function (x) {
		return @@ cos(JS::toNumber(`x, $global)) @@;
	},

	exp: function (x) {
		return @@ exp(JS::toNumber(`x, $global)) @@;
	},

	floor: function (x) {
		return @@ floor(JS::toNumber(`x, $global)) @@;
	},

	log: function (x) {
		return @@ log(JS::toNumber(`x, $global)) @@;
	},

	max: function (a, b) {
		for (var i = 0, l = arguments.length, max = -Infinity; i < l; ++i) {
			if (isNaN(arguments[i])) {
				return NaN;
			}

			if (arguments[i] > max) {
				max = arguments[i];
			}
		}

		return max;
	},

	min: function (a, b) {
		for (var i = 0, l = arguments.length, min = +Infinity; i < l; ++i) {
			if (isNaN(arguments[i])) {
				return NaN;
			}

			if (arguments[i] < min) {
				min = arguments[i];
			}
		}

		return min;
	},

	pow: function (x, y) {
		return @@ pow(JS::toNumber(`x, $global), JS::toNumber(`y, $global)) @@;
	},

	random: function () {
		return @@ mt_rand() / mt_getrandmax() @@;
	},

	round: function (x) {
		return @@ round(JS::toNumber(`x, $global)) @@;
	},

	sin: function (x) {
		return @@ sin(JS::toNumber(`x, $global)) @@;
	},

	sqrt: function (x) {
		return @@ sqrt(JS::toNumber(`x, $global)) @@;
	},

	tan: function (x) {
		return @@ tan(JS::toNumber(`x, $global)) @@;
	}
};

@@ `Math->class = "Math"; @@
