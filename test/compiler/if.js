test("if", function () {
	var foo, bar;

	if (true) {
		foo = "foo";
	} else {
		foo = "bar";
	}

	if (false) {
		bar = "foo";
	} else {
		bar = "bar";
	}

	assert(foo === "foo");
	assert(bar === "bar");
});
