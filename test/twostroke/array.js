test("pop", function() {
	var x = [1,2];
	assertEqual(x.pop(), 2);
	assertEqual(x.pop(), 1);
	assertEqual(x.pop(), undefined);
});

test("shift", function() {
	var x = [1,2];
	assertEqual(x.shift(), 1);
	assertEqual(x.shift(), 2);
	assertEqual(x.shift(), undefined);
});

test("push", function() {
	var x = [1];
	assertEqual(x.push("foo"), 2);
	assertEqual(x[0], 1);
	assertEqual(x[1], "foo");
	assertEqual(x.push("bar"), 3);
	assertEqual(x[0], 1);
	assertEqual(x[1], "foo");
	assertEqual(x[2], "bar");
});

test("unshift", function() {
	var x = [1];
	assertEqual(x.unshift("foo"), 2);
	assertEqual(x[0], "foo");
	assertEqual(x[1], 1);
	assertEqual(x.unshift("bar"), 3);
	assertEqual(x[0], "bar");
	assertEqual(x[1], "foo");
	assertEqual(x[2], 1);
});

test("constructor", function() {
  assert("1,2,3,4" == new Array(1,2,3,4));
  assert("1,2,3,4" == Array(1,2,3,4));
  assert("" == new Array());
});

test("splice", function() {
  var a = [1,2,3,4,5];
  assert("2,3" == a.splice(1, 2, 7));
  assert("1,7,4,5" == a);
  assert("4,5" == a.splice(2));
  assert("1,7" == a);
});

test("length=", function() {
  var a = [1,2,3,4,5,6,7];
  a.length = 4;
  assert("1,2,3,4" == a);
});

test("join", function() {
    assertEqual("", [].join(""));
    assertEqual("", [].join(","));
    assertEqual("12", [1,2].join(""));
    assertEqual("1,2", [1,2].join(","));
    assertEqual("1,2", [1,2].join());
    assertEqual(",,,,", Array(5).join(), "join sparse array");
});

test("concat", function() {
  var a = [];
  
  assert(a.concat(1,2,3) == "1,2,3");
  assert(a == "", "concat mutated array");

  assert(a.concat([1,2,3],4,[5]) == "1,2,3,4,5");
  assert(a == "", "concat mutated array");
  
  var b = [1,2,3];
  assert(b.concat() == "1,2,3");
  
  assertNotEqual(b.concat(), b);
  
  assert(Array.prototype.concat.call({ length: 2, 0: 1, 1: 2 }, [3, 4]) == "1,2,3,4");
});
