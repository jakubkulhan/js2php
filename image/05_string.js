function String(value) {
	if (this === @@ $global @@) {
		return @@ JS::toString(`value) @@;
	}

	var s = {};
	@@ `s->prototype = `String->properties['prototype']; @@
	@@ `s->class = 'String'; @@
	@@ `s->extensible = true; @@
	@@ `s->value = JS::toString(`value); @@

	return s;
}

String.fromCharCode = function (c) {
	var s = "";

	for (var i = 0, l = arguments.length, arg; i < l; ++i) {
		arg = arguments[i];
		s += @@ chr(JS::toNumber(`arg)) @@;
	}

	return s;
};

String.prototype = {};
@@ `String->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `String->properties['prototype']->class = 'String'; @@
@@ `String->properties['prototype']->extensible = TRUE; @@
String.prototype.constructor = String;

String.prototype.toString = function () {
	return @@ $leThis->value @@;
};

String.prototype.valueOf = String.prototype.toString;

String.prototype.charAt = function (pos) {
	return @@ (string) substr($leThis->value, `pos, 1) @@;
};

String.prototype.charCodeAt = function (pos) {
	if (pos < 0 || pos > @@ strlen($leThis->value) @@) {
		return NaN;
	}

	var c = this.charAt(pos);

	return @@ ord(`c) @@;
};

String.prototype.concat = function (string) {
	var returnString = @@ $leThis->value @@;

	for (var i = 0, l = arguments.length; i < l; ++i) {
		returnString += arguments[i];
	}

	return returnString;
};

String.prototype.indexOf = function (search, position) {
	var offset = Math.min(Math.max(position, 0), @@ strlen($leThis->value) @@),
		ret = @@ strpos($leThis->value, JS::toString(`search), `offset) @@;
	
	if (ret === false) {
		return -1;
	}

	return ret;
};

String.prototype.lastIndexOf = function (search, position) {
	var offset = Math.min(Math.max(position, 0), @@ strlen($leThis->value) @@),
		ret = @@ strrpos($leThis->value, JS::toString(`search), `offset) @@;
	
	if (ret === false) {
		return -1;
	}

	return ret;
};

String.prototype.localeCompare = function (that) {
	return @@ $leThis->value === JS::toString(`that) @@;
};

String.prototype.match = function (regexp) {
	if (!@@ is_object(`regexp) && isset(`regexp->class) && `regexp->class === 'RegExp' @@) {
		regexp = new RegExp(regexp);
	}

	if (!regexp.global) {
		return regexp.exec(@@ $leThis->value @@);
	}

	var returnArray = [], n = 0, match, currentLastIndex;

	regexp.lastIndex = 0;

	for (var previousLastIndex = 0, lastMatch = true; lastMatch; ++n) {
		match = regexp.exec(@@ $leThis->value @@);
		lastMatch = !!match;

		if (match) {
			if (regexp.lastIndex === previousLastIndex) {
				previousLastIndex = regexp.lastIndex = regexp.lastIndex + 1;
			} else {
				previousLastIndex = regexp.lastIndex;
			}

			returnArray.push(match[0]);
		}
	}

	if (n === 0) {
		return null;
	}

	return returnArray;
};

String.prototype.replace = function (search, replace) {
	// FIXME
	throw new NotImplementedError("String.prototype.replace(): not implemented yet.");
};

String.prototype.search = function (search) {
	// FIXME
	throw new NotImplementedError("String.prototype.search(): not implemented yet.");
};

String.prototype.slice = function (start, end) {
	var length = @@ strlen($leThis->value) @@;
	if (end === undefined) {
		end = length;
	}

	if (start < 0) {
		start = Math.max(start + length, 0);
	}

	if (end < 0) {
		end = Math.max(end + length, 0);
	}

	return @@ substr($leThis->value, `start, max(`end - `start, 0)) @@;
};

String.prototype.split = function (separator, limit) {
	if (@@ is_object(`separator) && isset(`separator->class) && `separator->class === 'RegExp' @@) {
		// FIXME
		throw new NotImplementedError("String.prototype.split() with regexp separator not implemented yet.");
	}

	if (limit !== undefined) {
		return @@ explode(JS::toString(`separator), $leThis->value, JS::toNumber(`limit)) @@;
	}

	return @@ explode(JS::toString(`separator), $leThis->value) @@;
};

String.prototype.substring = function (start, end) {
	var length = @@ strlen($leThis->value) @@;

	if (end === undefined) {
		end = length;
	}

	if (start < 0) {
		start = Math.max(start + length, 0);
	}

	if (end < 0) {
		end = Math.max(end + length, 0);
	}

	start = Math.min(start, length);
	end = Math.min(end, length);

	var from = Math.min(start, end), to = Math.max(start, end);

	return @@ substr($leThis->value, `from, `to - `from) @@;
};

String.prototype.toLowerCase = function () {
	return @@ strtolower($leThis->value) @@;
};

String.prototype.toLocaleLowerCase = String.prototype.toLowerCase;

String.prototype.toUpperCase = function () {
	return @@ strtoupper($leThis->value) @@;
};

String.prototype.toLocaleUpperCase = String.prototype.toUpperCase;

String.prototype.trim = function () {
	return @@ trim($leThis->value) @@;
};
