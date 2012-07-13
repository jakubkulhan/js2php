test("for in", function () {
	var o = {a: "a", b: "b", c: "c"};

	for (var k in o) {
		assert(k === o[k]);
	}
});
