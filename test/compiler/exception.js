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

	ok = false;
	try {
		@@ throw new Exception('foo'); @@

	} catch (e) {
		assert(!(e instanceof Error));
		assertEqual(Object.prototype.toString.call(e), "[object Exception]");
		assertEqual(e.message, "foo");
		ok = true;
	}

	assert(ok);
});

test("exception - rethrowing", function () {
	try {
		try {
			throw new Error; // line 39, column 4
		} catch (e) {
			throw e;
		}
	} catch (e) {
		assert(e.file, __filename);
		assert(e.line, 39);
		assert(e.column, 4);
	}
});
