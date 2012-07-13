test("this", function () {
	function F() {
		this.foo = "bar";
	}

	F();

	assert(foo === "bar");

	var f = new F;
	assert(f.foo === "bar");

	var o = { f: F };
	o.f();
	assert(o.foo === "bar");
});
