assert(Boolean(undefined) === false, "Boolean(): undefined");
assert(Boolean(null) === false, "Boolean(): null");
assert(Boolean(true) === true, "Boolean(): true");
assert(Boolean(false) === false, "Boolean(): false");
assert(Boolean("") === false, "Boolean(): empty string");
assert(Boolean("abc") === true, "Boolean(): string");
assert(Boolean({}) === true, "Boolean(): object");


assert(true.toString() === "true", "Boolean.prototype.toString(): 1");
assert(false.toString() === "false", "Boolean.prototype.toString(): 2");


assert((new Boolean(true)).valueOf() === true, "Boolean.prototype.valueOf(): 1");
assert((new Boolean(false)).valueOf() === false, "Boolean.prototype.valueOf(): 2");
