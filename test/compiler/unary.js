test("unary", function () {
	var theAnswerToLifeTheUniverseAndEverything = 42;

	assert(typeof undefined === "undefined");
	assert(typeof null === "object");
	assert(typeof true === "boolean");
	assert(typeof theAnswerToLifeTheUniverseAndEverything === "number");
	assert(typeof "foo" === "string");
	assert(typeof {} === "object");
	assert(typeof assert === "function");

	assert(void(theAnswerToLifeTheUniverseAndEverything) === undefined);

	assert(theAnswerToLifeTheUniverseAndEverything === 42);
	delete theAnswerToLifeTheUniverseAndEverything;
	try {
		assert(theAnswerToLifeTheUniverseAndEverything === undefined);
	} catch (e) {
		assert(e instanceof ReferenceError);
	}

	var n = 5;

	assert(++n === 6);
	assert(--n === 5);
	assert(n++ === 5);
	assert(n === 6);
	assert(n-- === 6);
	assert(n === 5);

	assert(+n === 5);
	assert(-n === -5);
	assert(!!n === true);
	assert(~0 === -1);
});
