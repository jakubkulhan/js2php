function Error(message) {
	var e = {};

	if (message !== undefined) {
		e.message = message;
	}

	@@ `e->prototype = `Error->properties['prototype']; @@
	@@ `e->class = 'Error'; @@
	@@ `e->extensible = TRUE; @@

	return e;
}

Error.prototype = {};
@@ `Error->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `Error->properties['prototype']->class = 'Error'; @@
@@ `Error->properties['prototype']->extensible = TRUE; @@
Error.prototype.constructor = Error;

Error.prototype.name = "Error";

Error.prototype.message = "";

Error.prototype.toString = function () {
	var name = this.name, msg = this.message;

	if (name === undefined) {
		name = "";
	}

	if (msg === undefined) {
		msg = "";
	}

	if (name === "" && msg === "") {
		return "Error";
	}

	if (name === "") {
		return msg;
	}

	if (msg === "") {
		return name;
	}

	return name + ": " + msg;
};

function RangeError(message) {
	var e = new Error(message);
	e.name = "RangeError";
	return e;
}

function ReferenceError(message) {
	var e = new Error(message);
	e.name = "ReferenceError";
	return e;
}

function SyntaxError(message) {
	var e = new Error(message);
	e.name = "SyntaxError";
	return e;
}

function TypeError(message) {
	var e = new Error(message);
	e.name = "TypeError";
	return e;
}

function NativeError(message) {
	var e = new Error(message);
	e.name = "NativeError";
	return e;
}

// non-standard
function NotImplementedError(message) {
	var e = new Error(message);
	e.name = "NotImplementedError";
	return e;
}
