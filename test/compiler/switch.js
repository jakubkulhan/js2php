test("switch", function () {
	function word(n) {
		var foo;

		switch (n) {
			case 1:
				foo = "one";
			break;

			case 2:
				foo = "two";
			break;

			case 3:
				foo = "three";
			break;

			default:
				foo = "more";
		}

		return foo;
	}

	assert(word(1) === "one");
	assert(word(2) === "two");
	assert(word(3) === "three");
	assert(word(4) === "more");
	assert(word(42) === "more");
});
