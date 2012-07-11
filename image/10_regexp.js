function RegExp(pattern, flags) {
	if (@@ is_object(`pattern) && isset(`pattern->class) && `pattern->class === 'RegExp' @@) {
		return pattern;
	}

	if (pattern === undefined) {
		pattern = "";
	}

	if (flags === undefined) {
		flags = "";
	}

	var r = {
			source: @@ JS::toString(`pattern) @@,
			global: false,
			ignoreCase: false,
			multiline: false,
			lastIndex: 0
		};

	@@ `r->class = 'RegExp'; @@
	@@ `r->prototype = `RegExp->properties['prototype']; @@

	r.source = @@ JS::toString(`pattern) @@;

	for (var i = 0, l = @@ strlen(`flags) @@, c; i < l; ++i) {
		@@ `c = substr(`flags, `i, 1); @@

		if (c === 'g') {
			r.global = true;
		} else if (c === 'i') {
			r.ignoreCase = true;
		} else if (c === 'm') {
			r.multiline = true;
		} else {
			throw new SyntaxError("RegExp(): Unknow regexp flag " + f.charAt(i) + ".");
		}
	}

	return r;
}

RegExp.prototype = {
	source: "",
	global: false,
	ignoreCase: false,
	multiline: false,
	lastIndex: 0
};
@@ `RegExp->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `RegExp->properties['prototype']->class = 'RegExp'; @@
@@ `RegExp->properties['prototype']->extensible = TRUE; @@
RegExp.prototype.constructor = RegExp;

RegExp.prototype.exec = function (string) {
	var length = string.length, i = this.lastIndex;

	if (!this.global) {
		i = 0;
	}

	if (i < 0 || i > length) {
		this.lastIndex = 0;
		return null;
	}

	var pattern = this.source, flags = "", result;

	if (this.ignoreCase) {
		flags += "i";
	}
	if (this.multiline) {
		flags += "m";
	}

	result = @@ preg_match(
		'/' . `pattern . '/' . `flags,
		JS::toString(`string),
		$matches,
		PREG_OFFSET_CAPTURE,
		`i
	) @@;

	if (!result) {
		this.lastIndex = 0;
		return null;
	}

	var returnArray = [];

	@@ foreach ($matches as $I => $match) { @@
	 	@@ if ($match[0] === '' && $I !== 0) { @@
			returnArray.push(undefined);
		@@ } else { @@
			returnArray.push(@@ $match[0] @@);
		@@ } @@
	@@ } @@

	if (this.global) {
		this.lastIndex = @@ $matches[0][1] + strlen($matches[0][0]) @@;
	}

	returnArray.index = @@ $matches[0][1] @@;
	returnArray.input = @@ JS::toString(`string) @@;

	return returnArray;
};

RegExp.prototype.test = function (string) {
	return this.exec(string) !== null;
};

RegExp.prototype.toString = function () {
	var flags = "";

	if (this.global) {
		flags += "g";
	}
	if (this.ignoreCase) {
		flags += "i";
	}
	if (this.multiline) {
		flags += "m";
	}
	return "/" + this.source + "/" + flags;
};
