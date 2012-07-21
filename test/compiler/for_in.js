test("for in", function () {
	var o = {a: "a", b: "b", c: "c"};

	for (var k in o) {
		assert(k === o[k]);
	}

	function F() {
		this.a = "F.a";
		this.b = "F.b";
	}

	F.prototype.a = "F.prototype.a";
	F.prototype.b = "F.prototype.b";
	F.prototype.c = "F.prototype.c";

	var o = new F, props = [], values = [];

	for (var k in o) {
		props.push(k);
		values.push(o[k]);
	}

	assertEqual(props.toString(), "a,b,c");
	assertEqual(values.toString(), "F.a,F.b,F.prototype.c");
});
