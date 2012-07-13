test("toString", function() {
	assertEqual("foo", "foo".toString());
	assertEqual("", "".toString());
});

test("toString is not generic", function() {
	try {
		String.prototype.toString.call(123);
	} catch(e) {
		if(e instanceof TypeError) {
			assert(true);
			return;
		}
		assert(false, "exception not TypeError");
	}
	assert(false, "did not throw");
});

test("split", function() {
	assert("hello,world" == "hello world".split(" "));
	assert("this,is,a test" == "this is a test".split(" ", 3));
	assert("what" == "what".split("jjjj"));
	assert("w,h,a,t" == "what".split(""));
	assert("what" == "what".split());
});

test("slice", function() {
	assertEqual("hello", "hello".slice());
	assertEqual("llo", "hello".slice(2));
	assertEqual("el", "hello".slice(1,3));
	assertEqual("ell", "hello".slice(1,-1));
});

test("match", function() {
  assert("fo,ob,ar" == "foobar".match(/../g));
  assert("fo" == "foobar".match(/../));
  
  assert("fo,ob,ar" == "foobar".match(/.(.)/g));
  assert("fo,o" == "foobar".match(/.(.)/));
});

test("indexOf", function() {
  assertEqual(3, "foobar".indexOf("bar"));
  assertEqual(2, "bbaaaaa".indexOf("a"));
});

test("lastIndexOf", function() {
  assertEqual(3, "foobar".lastIndexOf("bar"));
  assertEqual(6, "bbaaaaa".lastIndexOf("a"));
});

// not implemented
/*
test("enumerable properties", function() {
  var i = 0;
  var s = "hello";
  for(var x in s) {
    if(s.hasOwnProperty(x)) {
      i++;
    }
  }
  assertEqual(5, i);
});

test("[]", function() {
  assertEqual("a", "abc"[0]);
  assertEqual("o", "zzo"[2]);
  assertEqual(undefined, "what"[-1]);
  assertEqual(undefined, "what"[4]);
});

test("in", function() {
  assert(0 in "hi");
  assert(1 in "hi");
  assert(!(2 in "hi"));
  assert("length" in "hi");
  assert(!("foo" in "hi"));
});

*/

test("charAt", function() {
  assertEqual("a", "abc".charAt(0));
  assertEqual("o", "zzo".charAt(2));
  assertEqual("", "what".charAt(-1));
  assertEqual("", "what".charAt(4));
});

test("charCodeAt", function() {
  assertEqual(97, "a".charCodeAt(0));
  assertEqual(111, "zzo".charCodeAt(2));
  assert(isNaN("what".charCodeAt(-1)));
  assert(isNaN("what".charCodeAt(4)));
});

test("toUpperCase", function() {
  assertEqual("FOO", "foo".toUpperCase());
  assertEqual("FOO", "FoO".toUpperCase());
  assertEqual("", "".toUpperCase());
});

test("toLowerCase", function() {
  assertEqual("foo", "FOO".toLowerCase());
  assertEqual("foo", "FoO".toLowerCase());
  assertEqual("", "".toLowerCase());
});

test("fromCharCode", function() {
  assertEqual("", String.fromCharCode());
  assertEqual("a", String.fromCharCode(97));
  assertEqual("abcd", String.fromCharCode(97,98,99,100));
});

test("primitive value", function() {
  assertEqual("foobar", String(new String("foobar")));
  assertEqual("", String(new String("")));
});

test("escape codes", function() {
  assertEqual(-1, "\b".indexOf("b"));
  assertEqual(-1, "\n".indexOf("n"));
  assertEqual(-1, "\f".indexOf("f"));
  assertEqual(-1, "\v".indexOf("v"));
  assertEqual(-1, "\r".indexOf("r"));
  assertEqual(-1, "\t".indexOf("t"));
  assertEqual("hi", "h\
i");

  // not implemented
  //assertEqual(" ", "\x20");
  //assertEqual(" ", "\u0020");
  //assertEqual(" ", "\40");
});

test("substring", function() {
    assertEqual("foobar", "foobar".substring());
    assertEqual("foobar", "foobar".substring(0, 6));
    assertEqual("ar", "foobar".substring(-2, 6));
    assertEqual("ob", "foobar".substring(2, 4));
    assertEqual("bar", "foobar".substring(3));
});

test("comparison", function() {
    assert("hello" > "a");
    assert("a" < "b");
    assert("a" <= "a");
    assert("A" < "a");
});
