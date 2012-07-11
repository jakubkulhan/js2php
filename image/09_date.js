function Date(year, month, date, hours, minutes, seconds, ms) {
	if (this === @@ $global @@) {
		return (new Date(year, month, date, hours, minutes, seconds, ms)).toString();
	}

	var d = {};
	@@ `d->prototype = `Date->properties['prototype']; @@
	@@ `d->class = 'Date'; @@
	@@ `d->extensible = TRUE; @@

	if (arguments.length === 1) {
		var value = arguments[0];
		value = @@ JS::toPrimitive(`value, $global) @@;

		if (typeof value === "string") {
			value = Date.parse(value);
		}

		@@ `d->value = JS::toNumber(`value, $global) / 1000; @@

	} else {
		if (year >= 0 && year <= 99) {
			year += 1900;
		}

		date = date || 1;
		hours = hours || 0;
		minutes = minutes || 0;
		seconds = seconds || 0;
		ms = ms || 0;

		@@ `d->value = mktime(`hours, `minutes, `seconds, `month, `date, `year) + `ms / 1000; @@
	}

	return d;
}

Date.parse = function (string) {
	return @@ strtotime(`string) * 1000 @@;
};

Date.UTC = function (year, month, date, hours, minutes, seconds, ms) {
	var d = new Date(year, month, date, hours, minutes, seconds, ms);
	return @@ `d->value @@;
};

Date.now = function () {
	return new Date(@@ time() * 1000 @@);
};

Date.prototype = {};
@@ `Date->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `Date->properties['prototype']->class = 'Date'; @@
@@ `Date->properties['prototype']->extensible = TRUE; @@
@@ `Date->properties['prototype']->value = NAN; @@
Date.prototype.constructor = Date;

Date.prototype.toString = function () {
	return @@ date('Y-m-d H:i:s', $leThis->value) @@;
};

Date.prototype.toDateString = function () {
	return @@ date('Y-m-d', $leThis->value) @@;
};

Date.prototype.toTimeString = function () {
	return @@ date('H:i:s', $leThis->value) @@;
};

Date.prototype.toLocaleString = Date.prototype.toString;
Date.prototype.toLocaleDateString = Date.prototype.toDateString;
Date.prototype.toLocaleTimeString = Date.prototype.toTimeString;

Date.prototype.valueOf = function () {
	return @@ $leThis->value * 1000 @@;
};

Date.prototype.getTime = Date.prototype.valueOf;

Date.prototype.getFullYear = function () {
	return @@ (int) date('Y', $leThis->value) @@;
};

Date.prototype.getUTCFullYear = Date.prototype.getFullYear;

Date.prototype.getMonth = function () {
	return @@ (int) date('n', $leThis->value) @@;
};

Date.prototype.getUTCMonth = Date.prototype.getMonth;

Date.prototype.getDate = function () {
	return @@ (int) date('j', $leThis->value) @@;
};

Date.prototype.getUTCDate = Date.prototype.getDate;

Date.prototype.getDay = function () {
	return @@ (int) date('w', $leThis->value) @@;
};

Date.prototype.getUTCDay = Date.prototype.getDay;

Date.prototype.getHours = function () {
	return @@ (int) date('G', $leThis->value) @@;
};

Date.prototype.getUTCHours = Date.prototype.getHours;

Date.prototype.getMinutes = function () {
	return @@ (int) date('i', $leThis->value) @@;
};

Date.prototype.getUTCMinutes = Date.prototype.getMinutes;

Date.prototype.getSeconds = function () {
	return @@ (int) date('s', $leThis->value) @@;
};

Date.prototype.getUTCSeconds = Date.prototype.getSeconds;

Date.prototype.getMilliseconds = function () {
	return @@ (int) (($leThis->value - (int) $leThis->value) * 1000) @@;
};

Date.prototype.getUTCMilliseconds = Date.prototype.getMilliseconds;

Date.prototype.getTimezoneOffset = function () {
	return @@ date('Z', $leThis->value) / 60 @@;
};

Date.prototype.setTime = function (time) {
	@@ $leThis->value = JS::toNumber(`time, $global); @@
	return @@ $leThis->value * 1000 @@;
};

Date.prototype.setMilliseconds = function (ms) {
	var newDate = new Date(
		this.getFullYear(), this.getMonth(), this.getDate(),
		this.getHours(), this.getMinutes(), this.getSeconds(), ms
	);

	@@ $leThis->value = `newDate->value; @@

	return @@ $leThis->value @@;
};

Date.prototype.setUTCMilliseconds = Date.prototype.setMilliseconds;

Date.prototype.setSeconds = function (seconds, ms) {
	if (ms === undefined) {
		ms = this.getMilliseconds();
	}

	var newDate = new Date(
		this.getFullYear(), this.getMonth(), this.getDate(),
		this.getHours(), this.getMinutes(), seconds, ms
	);

	@@ $leThis->value = `newDate->value; @@

	return @@ $leThis->value @@;
};

Date.prototype.setUTCSeconds = Date.prototype.setSeconds;

Date.prototype.setMinutes = function (minutes, seconds, ms) {
	if (seconds === undefined) {
		seconds = this.getSeconds();
	}

	if (ms === undefined) {
		ms = this.getMilliseconds();
	}

	var newDate = new Date(
		this.getFullYear(), this.getMonth(), this.getDate(),
		this.getHours(), minutes, seconds, ms
	);

	@@ $leThis->value = `newDate->value; @@

	return @@ $leThis->value @@;
};

Date.prototype.setUTCMinutes = Date.prototype.setMinutes;

Date.prototype.setHours = function (hours, minutes, seconds, ms) {
	if (minutes === undefined) {
		minutes = this.getMinutes();
	}

	if (seconds === undefined) {
		seconds = this.getSeconds();
	}

	if (ms === undefined) {
		ms = this.getMilliseconds();
	}

	var newDate = new Date(
		this.getFullYear(), this.getMonth(), this.getDate(),
		hours, minutes, seconds, ms
	);

	@@ $leThis->value = `newDate->value; @@

	return @@ $leThis->value @@;
};

Date.prototype.setUTCHours = Date.prototype.setHours;

Date.prototype.setDate = function (date) {
	var newDate = new Date(
		this.getFullYear(), this.getMonth(), date,
		this.getHours(), this.getMinutes(), this.getSeconds(), this.getMilliseconds()
	);

	@@ $leThis->value = `newDate->value; @@

	return @@ $leThis->value @@;
};

Date.prototype.setUTCDate = Date.prototype.setDate;

Date.prototype.setMonth = function (month, date) {
	if (date === undefined) {
		date = this.getDate();
	}

	var newDate = new Date(
		this.getFullYear(), month, date,
		this.getHours(), this.getMinutes(), this.getSeconds(), this.getMilliseconds()
	);

	@@ $leThis->value = `newDate->value; @@

	return @@ $leThis->value @@;
};

Date.prototype.setUTCMonth = Date.prototype.setMonth;

Date.prototype.setFullYear = function (year, month, date) {
	if (month === undefined) {
		month = this.getMonth();
	}

	if (date === undefined) {
		date = this.getDate();
	}

	var newDate = new Date(
		year, month, date,
		this.getHours(), this.getMinutes(), this.getSeconds(), this.getMilliseconds()
	);

	@@ $leThis->value = `newDate->value; @@

	return @@ $leThis->value @@;
};

Date.prototype.setUTCFullYear = Date.prototype.setFullYear;

Date.prototype.toUTCString = Date.prototype.toString;

Date.prototype.toISOString = function () {
	return @@ date('Y-m-d', $leThis->value) .
		'T' . date('H:i:s', $leThis->value) .
		'.' . ((int) (($leThis->value - (int) $leThis->value) * 1000)) .
		date('P', $leThis->value) @@;
};

Date.prototype.toJSON = function (key) {
	return this.toISOString();
};
