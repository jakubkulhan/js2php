test("simple regexps", function() {
	assertEqual(true, /hello/.test("hello world"));
	assertEqual(false, /goodbye/.test("hello world"));
});

test("exec", function() {
	assert("123,1,2,3" == /(\d)(\d)(\d)/.exec("123"));
	assert("123,123" == /(\d+)/.exec("123"));
	assert(null == /\s+/.exec("123"));
	assert("b,,b" == /(a)?(b)/.exec("b"));
});

test("exec additional attributes", function() {
	assertEqual("hello", /./.exec("hello").input);
	assertEqual(0, /./.exec("hello").index);
	assertEqual("hello", /l/.exec("hello").input);
	assertEqual(2, /l/.exec("hello").index);
});

test("toString", function() {
    assertEqual("/abc/i", /abc/i.toString());
});

test("\\c[A-Z]", function() {
    assert(/\cA/.test("\x01"));
    assert(/\ca/.test("\x01"));
    assert(/\cZ/.test(String.fromCharCode(26)));
    assert(/\cz/.test(String.fromCharCode(26)));
});
