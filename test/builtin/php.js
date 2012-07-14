test("PHP.fn()", function () {
	var substr = PHP.fn("substr");

	assertEqual(typeof substr, "function");
	assertEqual(substr("fooo!", 1), "ooo!");
	assertEqual(substr("fooo!", 1, 1), "o");
});

test("PHP.cls()", function () {
	var ReflectionClass = PHP.cls("ReflectionClass"),
		o = new ReflectionClass("ReflectionClass");
	
	assertEqual(typeof ReflectionClass, "function");
	assertEqual(typeof o, "object");

	assertEqual(o.name, "ReflectionClass");
	assertEqual(o.constructor.name, "__construct");
	assertEqual(o.constructor.numberOfParameters, 1);
});
