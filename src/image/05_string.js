function String(value) {
	if (this === @@ $global @@) {
		return @@ JS::toString(`value, $global) @@;
	}

	var s = {};

	@@ `s->prototype = `String->properties['prototype']; @@
	@@ `s->class = 'String'; @@
	@@ `s->extensible = true; @@
	@@ `s->value = JS::toString(`value, $global); @@

	return s;
}

String.fromCharCode = function (c) {
	var s = "";

	for (var i = 0, l = arguments.length, arg; i < l; ++i) {
		arg = arguments[i];
		s += @@ chr(JS::toNumber(`arg, $global)) @@;
	}

	return s;
};

String.prototype = {};
@@ `String->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `String->properties['prototype']->class = 'String'; @@
@@ `String->properties['prototype']->extensible = TRUE; @@
String.prototype.constructor = String;

String.prototype.toString = function () {
	if (@@ !isset($leThis->class) || $leThis->class !== 'String' @@) {
		throw new TypeError("String.prototype.toString(): not generic");
	}

	return @@ $leThis->value @@;
};

String.prototype.valueOf = String.prototype.toString;

String.prototype.charAt = function (pos) {
	pos = @@ JS::toNumber(`pos, $global) @@;

	if (pos < 0 || pos >= this.length) {
		return "";
	}

	return @@ (string) substr($leThis->value, `pos, 1) @@;
};

String.prototype.charCodeAt = function (pos) {
	pos = @@ JS::toNumber(`pos, $global) @@;

	if (pos < 0 || pos >= this.length) {
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
	if (position === undefined) {
		position = 0;
	}

	var offset = Math.min(Math.max(position, 0), @@ strlen($leThis->value) @@),
		ret = @@ strpos($leThis->value, JS::toString(`search, $global), `offset) @@;

	if (ret === false) {
		return -1;
	}

	return ret;
};

String.prototype.lastIndexOf = function (search, position) {
	if (position === undefined) {
		position = 0;
	}

	var offset = Math.min(Math.max(position, 0), @@ strlen($leThis->value) @@),
		ret = @@ strrpos($leThis->value, JS::toString(`search, $global), `offset) @@;
	
	if (ret === false) {
		return -1;
	}

	return ret;
};

String.prototype.localeCompare = function (that) {
	return @@ $leThis->value === JS::toString(`that, $global) @@;
};

String.prototype.match = function (regexp) {
	if (!@@ (is_object(`regexp) && isset(`regexp->class) && `regexp->class === 'RegExp') @@) {
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
	if (typeof search === "string") {
		search = new RegExp(@@ preg_quote(`search, '/') @@);
	}

	var match, index, lastIndex = 0,
		thisString = @@ $leThis->value @@, newString = "", s;

	while ((match = search.exec(thisString)) !== null) {
		index = match.index;
		newString += s = thisString.substring(lastIndex, index);
		lastIndex = index + match[0].length;

		if (typeof replace === "function") {
			match.push(match.index);
			match.push(match.input);
			delete match.index;
			delete match.input;

			newString += s = String(replace.apply(undefined, match));

		} else {
			newString += replace.replace(/\$([$&]|[0-9]|[0-9][0-9])/g, function (_, c) {
				if (c === "$") {
					return "$";

				} else if (c === "&") {
					return match[0];
				
				} else {
					return match[Number(c)];
				}
			});
		}

		if (!search.global) {
			break;
		}
	}

	newString += thisString.substring(lastIndex, thisString.length);

	return newString;
};

String.prototype.search = function (search) {
	if (!@@ (is_object(`search) && isset(`search->class) && `search->class === 'RegExp') @@) {
		search = new RegExp(search);
	}

	var savedLastIndex = search.lastIndex,
		match = search.exec(@@ $leThis->value @@);
	
	search.lastIndexOf = savedLastIndex;

	if (match) {
		return match.index;
	}

	return -1;
};

String.prototype.slice = function (start, end) {
	var length = @@ strlen($leThis->value) @@;

	if (start === undefined) {
		start = 0;
	}

	if (end === undefined) {
		end = length;
	}

	if (start < 0) {
		start = Math.max(start + length, 0);
	}

	if (end < 0) {
		end = Math.max(end + length, 0);
	}

	return @@ (string) substr($leThis->value, `start, max(`end - `start, 0)) @@;
};

String.prototype.split = function (separator, limit) {
	if (separator === undefined) {
		return [@@ $leThis->value @@];
	}

	if (separator === "") {
		var returnArray = [];

		for (var i = 0, l = this.length; i < l; ++i) {
			returnArray.push(@@ (string) substr($leThis->value, `i, 1) @@);
		}

		return returnArray;
	}

	if (typeof separator === "string") {
		separator = new RegExp(@@ preg_quote(JS::toString(`separator, $global), '/') @@, 'g');
	}

	var returnArray = [], match, lastIndex = 0, index, thisString = @@ $leThis->value @@,
		savedLastIndex = separator.lastIndex, savedGlobal = separator.global;

	@@ `separator->properties['global'] = TRUE; @@

	if (limit === undefined) {
		limit = Infinity;
	}

	while ((match = separator.exec(thisString)) && --limit > 0 && lastIndex < this.length) {
		if (match[0] === '' && match.index === lastIndex) {
			returnArray.push(this.substring(lastIndex, lastIndex + 1));
			++lastIndex;
			++separator.lastIndex;

		} else {
			returnArray.push(this.substring(lastIndex, match.index));

			for (var i = 1, l = match.length; i < l; ++i) {
				returnArray.push(match[i]);
			}

			lastIndex = match.index + match[0].length;
		}
	}

	if (lastIndex < this.length) {
		returnArray.push(this.substring(lastIndex, this.length));
	}

	@@ `separator->properties['global'] = `savedGlobal; @@
	separator.lastIndex = savedLastIndex;

	return returnArray;
};

String.prototype.substring = function (start, end) {
	var length = @@ strlen($leThis->value) @@;

	if (start === undefined) {
		start = 0;
	}

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

	return @@ (string) substr($leThis->value, `from, `to - `from) @@;
};

// non-standard
String.prototype.substr = function (start, length) {
	if (length === undefined) {
		return @@ substr($leThis->value, `start) @@;
	}

	return @@ (string) substr($leThis->value, `start, `length) @@;
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
