test("with", function () {
	try {
		with (undefined) {}
		assert(false, "did not throw on undefined");

	} catch (e) {
		assert(e instanceof TypeError, "TypeError should be thrown");
	}

	try {
		with (null) {}
		assert(false, "did not throw on null");

	} catch (e) {
		assert(e instanceof TypeError, "TypeError should be thrown");
	}

	var a = undefined;

	try {
		with (a || {}) {}
	} catch (e) {
		assert(false, "should not throw");
	}

	var o = { one: 1, two: 2 };

	with (o) {
		assertEqual(one, 1);
		assertEqual(two, 2);
		three = 3;
	}

	assertEqual(three, 3);
	assertEqual(o.three, undefined);
});
