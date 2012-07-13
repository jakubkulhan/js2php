test("Error constructor works", function() {
  var e = new Error();
  assertEqual(e.name, "Error");
  assertEqual(e.message, "");
  
  var f = new Error("test");
  assertEqual(f.name, "Error");
  assertEqual(f.message, "test");
});

test("json parser works with simple values", function() {
    assertEqual(123, JSON.parse("123"));
    assertEqual(123.456, JSON.parse("123.456"));
    assertEqual(-123456, JSON.parse("-123.456e3"));
    assertEqual(true, JSON.parse("true"));
    assertEqual(false, JSON.parse("false"));
    assertEqual(null, JSON.parse("null"));
    assertEqual("foo", JSON.parse('"foo"'));
    assertEqual("", JSON.parse('""'));
});

test("json parser works with arrays", function() {
    var a = JSON.parse("[1,2,3]");
    assertEqual(3, a.length);
    assertEqual(1, a[0]);
    assertEqual(2, a[1]);
    assertEqual(3, a[2]);
    
    var a = JSON.parse("[[[[1]]]]");
    assertEqual(1, a.length);
    assertEqual(1, a[0][0][0][0]);
});

test("json parser works with object", function() {
    var o = JSON.parse('{ "a": 1, "b": [2] }');
    assertEqual(1, o.a);
    assertEqual(1, o.b.length);
    assertEqual(2, o.b[0]);
    
    var o = JSON.parse('{"a":{"b":{"a":{"b":123}}}}');
    assertEqual(123, o.a.b.a.b);
});

test("json stringifer", function() {
    assertEqual("123", JSON.stringify(123));
    assertEqual("123.456", JSON.stringify(123.456));
    assertEqual("-123456", JSON.stringify(-123.456e3));
    assertEqual("true", JSON.stringify(true));
    assertEqual("false", JSON.stringify(false));
    assertEqual("null", JSON.stringify(null));
    assertEqual('"foo"', JSON.stringify("foo"));
    assertEqual('""', JSON.stringify(""));
});

test("json parser works with arrays", function() {
    assertEqual("[1,2,3]", JSON.stringify([1,2,3]));
    assertEqual("[[[[1]]]]", JSON.stringify([[[[1]]]]));
});

test("json parser works with object", function() {
    assertEqual('{"a":1,"b":[2]}', JSON.stringify({ a: 1, b: [2] }));
    assertEqual('{"a":{"b":{"a":{"b":123}}}}', JSON.stringify({a:{b:{a:{b:123}}}}));
});
