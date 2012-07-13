test("NaN, Infinity, undefined, parseInt, parseFloat, isNaN, isFinite", function () {
	assert(@@ is_nan(`NaN) @@, "NaN is not NaN");

	assert(@@ is_infinite(`Infinity) @@, "Infinity is finite");

	assert(undefined === undefined, "undefined is not undefined");

	assert(parseInt("42") === 42);
	assert(parseInt("-87") === -87);

	assert(parseFloat("5.8") === 5.8);
	assert(parseFloat("-9.3") === -9.3);

	assert(isNaN(NaN));
	assert(!isNaN(5));

	assert(isFinite(5));
	assert(!isFinite(Infinity));
});
