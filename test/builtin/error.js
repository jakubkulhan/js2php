assert(Error() instanceof Error, "Error(): 1");
assert((new Error) instanceof Error, "Error(): 2");


var e = new Error("a message");
assert(e.name === "Error", "Error(): wrong name");
assert(e.message === "a message", "Error(): wrong message");


assert(Error().toString() === "Error", "Error.prototype.toString(): 1");
assert(Error("a message").toString() === "Error: a message", "Error.prototype.toString(): 2");
assert(TypeError("a message").toString() === "TypeError: a message", "Error.prototype.toString(): 3");
