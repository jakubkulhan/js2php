test("function", function () {
	assert(foo() === "foo");
	assert(undef() === undefined);
	assert(add(2, 3) === 5);

	function foo() {
		return "foo";
	}

	function undef() {}

	function add(a, b) {
		return a + b;
	}
});
