assert(JSON.parse("{}") instanceof Object, "JSON.parse(): 1");
assert(JSON.parse("[]") instanceof Array, "JSON.parse(): 2");
assert(JSON.parse("null") === null, "JSON.parse(): 3");
assert(JSON.parse("true") === true, "JSON.parse(): 4");
assert(JSON.parse("false") === false, "JSON.parse(): 5");
assert(JSON.parse("42") === 42, "JSON.parse(): 6");
assert(JSON.parse('"hello"') === "hello", "JSON.parse(): 7");

var o = JSON.parse('{ "a": "b", "c": "d" }');
assert(o.a === "b" && o.c === "d", "JSON.parse(): 8");

var a = JSON.parse('[1, 2, 3]');
assert(a.length === 3 && a[0] === 1 && a[1] === 2 && a[2] === 3, "JSON.parse(): 9");

var o = JSON.parse('{ "a": "b", "c": "d" }', function (k, v) {
	if (k !== "") {
		return undefined;
	}

	return v;
});

assert(o.a === undefined, "JSON.parse(): 10");
assert(o.b === undefined, "JSON.parse(): 11");


assert(JSON.stringify({}) === "{}", "JSON.stringify(): 1");
assert(JSON.stringify([]) === "[]", "JSON.stringify(): 2");
assert(JSON.stringify(null) === "null", "JSON.stringify(): 3");
assert(JSON.stringify(true) === "true", "JSON.stringify(): 4");
assert(JSON.stringify(false) === "false", "JSON.stringify(): 5");
assert(JSON.stringify(42) === "42", "JSON.stringify(): 6");
assert(JSON.stringify("hello") === '"hello"', "JSON.stringify(): 7");
assert(JSON.stringify({ a: "b", c: "d" }) === '{"a":"b","c":"d"}', "JSON.stringify(): 8");
assert(JSON.stringify([ 1, 2, 3, 4, 5 ]) === "[1,2,3,4,5]", "JSON.stringify(): 9");
