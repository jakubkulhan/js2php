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
	@@ `e->prototype = `RangeError->properties['prototype']; @@
	return e;
}

@@ `RangeError->properties['prototype']->prototype = `Error->properties['prototype']; @@

function ReferenceError(message) {
	var e = new Error(message);
	e.name = "ReferenceError";
	@@ `e->prototype = `ReferenceError->properties['prototype']; @@
	return e;
}

@@ `ReferenceError->properties['prototype']->prototype = `Error->properties['prototype']; @@

function SyntaxError(message) {
	var e = new Error(message);
	e.name = "SyntaxError";
	@@ `e->prototype = `SyntaxError->properties['prototype']; @@
	return e;
}

@@ `SyntaxError->properties['prototype']->prototype = `Error->properties['prototype']; @@

function TypeError(message) {
	var e = new Error(message);
	e.name = "TypeError";
	@@ `e->prototype = `TypeError->properties['prototype']; @@
	return e;
}

@@ `TypeError->properties['prototype']->prototype = `Error->properties['prototype']; @@

// non-standard
function NotImplementedError(message) {
	var e = new Error(message);
	e.name = "NotImplementedError";
	@@ `e->prototype = `NotImplementedError->properties['prototype']; @@
	return e;
}

@@ `NotImplementedError->properties['prototype']->prototype = `Error->properties['prototype']; @@
