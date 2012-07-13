test("Error()", function () {
	assert(Error() instanceof Error, "Error(): 1");
	assert((new Error) instanceof Error, "Error(): 2");
});

test("Error.name, Error.message", function () {
	var e = new Error("a message");
	assert(e.name === "Error", "Error(): wrong name");
	assert(e.message === "a message", "Error(): wrong message");
});

test("Error.prototype.toString()", function () {
	assert(Error().toString() === "Error", "Error.prototype.toString(): 1");
	assert(Error("a message").toString() === "Error: a message", "Error.prototype.toString(): 2");
	assert(TypeError("a message").toString() === "TypeError: a message", "Error.prototype.toString(): 3");
});
