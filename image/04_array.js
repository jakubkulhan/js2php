function Array() {
	var array = {};

	@@ `array->prototype = `Array->properties['prototype']; @@
	@@ `array->class = 'Array'; @@

	array.length = 0;

	@@ `array->attributes['length'] = JS::WRITABLE; @@

	if (arguments.length === 1 && typeof arguments[1] === "number") {
		var len = arguments[1];

		if (@@ intval(`len) !== `len && `len < 0 @@) {
			throw new RangeError("Array(): Given array length is not legal.");
		}

		array.length = len;

		return array;
	}

	for (var i = 0, l = arguments.length; i < l; ++i) {
		array.push(arguments[i]);
	}

	return array;
}

Array.isArray = function (arg) {
	if (typeof arg !== "object") {
		return false;
	}

	return @@ `arg->class === 'Array' @@;
};

Array.prototype = {};
@@ `Array->prototype = `Array->properties['prototype']; @@
@@ `Array->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `Array->properties['prototype']->class = 'Array'; @@
@@ `Array->properties['prototype']->extensible = TRUE; @@
Array.prototype.constructor = Array;
Array.prototype.length = 0;

Array.prototype.toString = function () {
	return this.join();
};

Array.prototype.toLocaleString = function () {
	return this.join();
};

Array.prototype.concat = function (item) {
	var newArray = @@ clone $leThis @@;

	for (var i = 0, l = arguments.length; i < l; ++i) {
		if (Array.isArray(arguments[i])) {
			for (var j = 0, m = arguments[i].length; j < m; ++j) {
				newArray.push(arguments[i][j]);
			}

		} else {
			newArray.push(arguments[i]);
		}
	}

	return newArray;
};

Array.prototype.join = function (separator) {
	separator = separator || ",";
	var string;

	for (var i = 0, l = this.length, item; i < l; ++i) {
		if (i !== 0) {
			string += separator;
		}

		item = this[i];

		string += @@ JS::toString(`item) @@;
	}

	return string;
};

Array.prototype.pop = function () {
	if (this.length < 1) {
		return undefined;
	}

	var item = this[this.length - 1];
	delete this[this.length - 1];
	--this.length;

	return item;
};

Array.prototype.push = function (item) {
	for (var i = 0, l = arguments.length; i < l; ++i) {
		this[this.length] = arguments[i];
		++this.length;
	}

	return this[this.length - 1];
};

Array.prototype.reverse = function () {
	var newArray = [];

	for (var i = this.length - 1; i >= 0; --i) {
		newArray.push(this[i]);
	}

	return newArray;
};

Array.prototype.shift = function () {
	if (this.length < 1) {
		return undefined;
	}

	var item = this[0];

	for (var i = 0, l = --this.length; i < l; ++i) {
		this[i] = this[i + 1];
	}

	return item;
};

Array.prototype.slice = function (start, end) {
	if (start < 0) {
		start = Math.max(length + start, 0);
	}

	if (end === undefined) {
		end = this.length;
	}

	if (end < 0) {
		end = length + end;
	}

	var newArray = [];

	for (; start < end; ++start) {
		newArray.push(this[start]);
	}

	return newArray;
};

Array.prototype.sort = function (compareFn) {
	// FIXME: basic quicksort, implement in-place quicksort in PHP

	if (this.length < 2) {
		return this;
	}

	var pivot, smaller, larger;

	pivot = this[0];

	for (var i = 1, l = this.length; i < l; ++i) {
		if (compareFn(this[i], pivot) < 0) {
			smaller.push(this[i]);
		} else {
			larger.push(this[i]);
		}
	}

	return smaller.sort().concat([pivot], larger.sort());
};

Array.prototype.splice = function (start, deleteCount) {
	if (start < 0) {
		start = Math.max(this.length + start, 0);
	} else {
		start = Math.min(start, this.length);
	}

	deleteCount = Math.min(Math.max(deleteCount, 0), this.length - start);

	var replaceArray = Array.prototype.slice.call(arguments, 2),
		returnArray = [],
		i, l;

	for (var k = 0; k < deleteCount; ++k) {
		returnArray.push(this[start + k]);
	}

	if (replaceArray.length < deleteCount) {
		for (k = start; k < (this.length - deleteCount); ++k) {
			if (this.hasOwnProperty(k + deleteCount)) {
				this[k + replaceArray.length] = this[k + deleteCount];
			} else {
				delete this[k + deleteCount];
			}
		}

		for (k = this.length; k > (this.length - deleteCount + replaceArray.length); --k) {
			delete this[k - 1];
		}

	} else {
		for (k = this.length - deleteCount; k > start; --k) {
			if (this.hasOwnProperty(k + deleteCount - 1)) {
				this[k + replaceArray.length - 1] = this[k + deleteCount - 1];
			} else {
				delete this[k + replaceArray.length - 1];
			}
		}
	}

	for (k = start, i = 0, l = replaceArray.length; i < l; ++k, ++i) {
		this[k] = replaceArray[i];
	}

	return returnArray;
};

Array.prototype.unshift = function (item) {
	for (var i = this.length - 1, l = arguments.length; i >= 0; --i) {
		this[i + l] = this[i];
	}

	for (i = 0; i < l; ++i) {
		this[i] = arguments[i];
	}

	this.length += l;

	return this.length;
};

Array.prototype.indexOf = function (search, from) {
	from = from || 0;

	if (from < 0) {
		from = Math.max(this.length + from, 0);
	}

	for (var i = from, l = this.length; i < l; ++i) {
		if (this[i] == search) {
			return i;
		}
	}

	return -1;
};

Array.prototype.lastIndexOf = function (search, from) {
	from = from || 0;

	if (from < 0) {
		from = Math.max(this.length + from, 0);
	}

	if (this.length < 1 || from >= this.length) {
		return -1;
	}

	for (var i = this.length - 1; i >= from; --i) {
		if (this[i] == search) {
			return i;
		}
	}

	return -1;
};

Array.prototype.every = function (callbackFn) {
	var thisArg;

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}
	
	for (var i = 0, l = this.length; i < l; ++i) {
		if (!callbackFn.call(thisArg, this[i], i, this)) {
			return false;
		}
	}

	return true;
};

Array.prototype.some = function (callbackFn) {
	var thisArg;

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		if (callbackFn.call(thisArg, this[i], i, this)) {
			return true;
		}
	}

	return false;
};

Array.prototype.forEach = function (callbackFn) {
	var thisArg;

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		callbackFn.call(thisArg, this[i], i, this);
	}
};

Array.prototype.map = function (callbackFn) {
	var thisArg, returnArray = [];

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		returnArray.push(callbackFn.call(thisArg, this[i], i, this));
	}

	return returnArray;
};

Array.prototype.filter = function (callbackFn) {
	var thisArg, returnArray = [];

	if (arguments.length > 1) {
		thisArg = arguments[1];
	}

	for (var i = 0, l = this.length; i < l; ++i) {
		if (callbackFn.call(thisArg, this[i], i, this)) {
			returnArray.push(this[i]);
		}
	}

	return returnArray;
};

Array.prototype.reduce = function (callbackFn) {
	if (this.length < 1 && arguments.length < 2) {
		throw new TypeError("Array.prototype.reduce(): Array empty, no initial value.");
	}

	var value, i;

	if (arguments.length > 1) {
		value = arguments[1];
		i = 0;

	} else {
		value = this[0];
		i = 1;
	}

	for (var l = this.length; i < l; ++i) {
		value = callbackFn(value, this[i], i, this);
	}

	return value;
};

Array.prototype.reduceRight = function (callbackFn) {
	if (this.length < 1 && arguments.length < 2) {
		throw new TypeError("Array.prototype.reduceRight(): Array empty, no initial value.");
	}

	var value, i;

	if (arguments.length > 1) {
		value = arguments[1];
		i = this.length - 1;

	} else {
		value = this[this.length - 1];
		i = this.length - 2;
	}

	for (; i >= 0; ++i) {
		value = callbackFn(value, this[i], i, this);
	}

	return value;
};
