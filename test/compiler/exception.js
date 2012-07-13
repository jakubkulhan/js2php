test("exception", function () {
	var ok = false;

	try {
		throw "foo";
	} catch (e) {
		assert(e === "foo");
	} finally {
		ok = true;
	}

	assert(ok);

	try {
		ok = false;
	} finally {
		ok = true;
	}

	assert(ok);
});
