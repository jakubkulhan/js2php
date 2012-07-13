test("Number()", function () {
	assert(isNaN(Number(undefined)), "Number(): undefined");
	assert(Number(null) === 0, "Number(): null");
	assert(Number(true) === 1, "Number(): true");
	assert(Number(false) === 0, "Number(): false");
	assert(Number(42) === 42, "Number(): number");
	assert(Number("42") === 42, "Number(): string");
});

test("Number.prototype.toString()", function () {
	assert((42).toString() === "42", "Number.prototype.toString(): 1");
	assert((42).toString(16) === "2a", "Number.prototype.toString(): 2");
});

test("Number.prototype.valueOf()", function () {
	assert((new Number(42)).valueOf() === 42, "Number.prototype.valueOf(): 1");
});

test("Number.prototype.toFixed()", function () {
	assert((42).toFixed() === "42", "Number.prototype.toFixed(): 1");
	assert((42).toFixed(3) === "42.000", "Number.prototype.toFixed(): 2");
});

test("Number.prototype.toExponential()", function () {
	assert((42).toExponential() === "4.2e+1", "Number.prototype.toExponential(): 1");
	assert((42).toExponential(3) === "4.200e+1", "Number.prototype.toExponential(): 2");
});

test("Number.prototype.toPrecision()", function () {
	assert((42.42).toPrecision() === "42.42", "Number.prototype.toPrecision(): 1");
	assert((42.42).toPrecision(1) === "4e+1", "Number.prototype.toPrecision(): 2");
	assert((42.42).toPrecision(2) === "42", "Number.prototype.toPrecision(): 3");
	assert((42.42).toPrecision(3) === "42.4", "Number.prototype.toPrecision(): 4");
	assert((42.42).toPrecision(4) === "42.42", "Number.prototype.toPrecision(): 5");
});
