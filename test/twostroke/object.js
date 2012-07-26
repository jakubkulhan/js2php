test("hasOwnProperty", function() {
	assertEqual(console.hasOwnProperty("log"), true);
	assertEqual("test".hasOwnProperty("length"), true);

	// not implemented
	//assertEqual("test".hasOwnProperty(0), true);
	//assertEqual("test".hasOwnProperty(99), false);
	assertEqual([1].hasOwnProperty(0), true);
	assertEqual([1].hasOwnProperty(99), false);
	assertEqual({ a: 1 }.hasOwnProperty("a"), true);
});

test("isPrototypeOf", function() {
	assertEqual(Object.prototype.isPrototypeOf(console), true);
	assertEqual(Object.isPrototypeOf(console), false);
	assertEqual(Number.prototype.isPrototypeOf(new Number(1)), true);
	assertEqual(Number.prototype.isPrototypeOf(1), false);
	assertEqual(String.prototype.isPrototypeOf(new String("hi")), true);
	assertEqual(String.prototype.isPrototypeOf("hi"), false);
});

test("propertyIsEnumerable", function() {
  assertEqual(true, ({a:1}).propertyIsEnumerable("a"));
  assertEqual(false, ({b:1}).propertyIsEnumerable("a"));
  assertEqual(false, Object.prototype.propertyIsEnumerable("propertyIsEnumerable"));
});

test("toString", function() {
  var to_s = Object.prototype.toString;
  assertEqual("[object Object]", to_s.call({}));
  assertEqual("[object Number]", to_s.call(123));
  assertEqual("[object Boolean]", to_s.call(true));
  assertEqual("[object String]", to_s.call("hi"));
  assertEqual("[object String]", to_s.call(new String("hi")));
});

test("typeof", function() {
  assertEqual("object", typeof null);
  assertEqual("object", typeof {});
  assertEqual("object", typeof new String("hi"));
});
