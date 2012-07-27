require.modules.buffer = {
	exports: {
		Buffer: function Buffer(x) {
			var buf = Object.create(Buffer.prototype);
			@@ `buf->class = 'Buffer'; @@

			if (typeof x === "number") {
				@@ `buf->value = str_repeat(chr(0), `x); @@

			} else if (typeof x === "string") {
				@@ `buf->value = `x; @@

			} else if (Array.isArray(x)) {
				@@ `buf->value = ""; @@
				for (var i = 0, l = x.length, octet; i < l; ++i) {
					octet = x[i];
					@@ `buf->value .= chr(`octet); @@
				}

			} else {
				throw new TypeError("Given argument is not a number, a string, or an array");
			}

			buf.length = @@ strlen(`buf->value) @@;
			@@ `buf->attributes['length'] = 0; @@

			return buf;
		}
	}
};

require.modules.buffer.exports.Buffer.isBuffer = function isBuffer(buf) {
	return @@ isset(`buf->class) && `buf->class === 'Buffer' @@;
};

require.modules.buffer.exports.Buffer.byteLength = function byteLength(string) {
	return @@ strlen(JS::toString(`string, $global)) @@;
};

require.modules.buffer.exports.Buffer.concat = function concat(list, totalLength) {
	if (!Array.isArray(list)) {
		throw new TypeError("Given list is not an array");
	}

	if (list.length === 0 || totalLength === 0) {
		return new require.modules.buffer.exports.Buffer(0);

	} else if (list.length === 1) {
		return list[0];

	} else {
		if (totalLength === undefined) {
			totalLength = 0;
			for (var i = 0, l = list.length; i < l; ++i) {
				totalLength += list[i].length;
			}
		}

		var buf = new require.modules.buffer.exports.Buffer(totalLength);

		for (var i = 0, l = list.length, offset = 0; i < l; ++i) {
			list[i].copy(buf, offset);
			offset += list[i].length;
		}

		return buf;
	}
};

require.modules.buffer.exports.Buffer.prototype.write = function write(string, offset, length, encoding) {
	if (encoding !== undefined) {
		throw new NotImplementedError("encoding argument not implemented");
	}

	offset = offset || 0;
	length = length || this.length - offset;
	string = @@ JS::toString(`string, $global) @@;
	maxlen = this.length;

	@@ $leThis->value = substr(substr($leThis->value, 0, `offset) . substr(`string, 0, `length) .
		substr($leThis->value, `offset + `length), 0, `maxlen); @@
	
	return length;
};

require.modules.buffer.exports.Buffer.prototype.toString = function toString() {
	return @@ $leThis->value @@;
};

require.modules.buffer.exports.Buffer.prototype.copy = function copy(targetBuffer, targetStart, sourceStart, sourceEnd) {
	if (!require.modules.buffer.exports.Buffer.isBuffer(targetBuffer)) {
		throw new TypeError("Given first argument is not a buffer");
	}

	targetStart = targetStart || 0;
	sourceStart = sourceStart || 0;
	sourceEnd = sourceEnd || this.length;

	targetBuffer.write(@@ substr($leThis->value, `sourceStart, `sourceEnd - `sourceStart) @@, targetStart);
};

require.modules.buffer.exports.Buffer.prototype.slice = function slice(start, end) {
	// not the same as Node.JS', modification of new buffer does not modify the old
	start = @@ JS::toNumber(`start, $global) @@;
	end = @@ JS::toNumber(`end, $global) @@;
	return new require.modules.buffer.exports.Buffer(@@ substr($leThis->value, `start, `end - `start) @@);
};

// read* methods omitted

require.modules.buffer.exports.Buffer.prototype.fill = function fill(value, offset, end) {
	value = @@ JS::toString(`value, $global) @@;
	value = value.substring(0, 1);
	offset = offset || 0;
	end = end || this.length;

	for (var i = offset; i < end; ++i) {
		@@ $leThis->value[`i] = `value; @@
	}
};
