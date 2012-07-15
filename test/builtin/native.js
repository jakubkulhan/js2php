test("JS::fromNative()", function () {
	assertEqual(@@ JS::fromNative(NULL) @@, null);
	assertEqual(@@ JS::fromNative(TRUE) @@, true);
	assertEqual(@@ JS::fromNative(FALSE) @@, false);
	assertEqual(@@ JS::fromNative(42) @@, 42);
	assertEqual(@@ JS::fromNative(5.8) @@, 5.8);
	assertEqual(@@ JS::fromNative("abc") @@, "abc");

	var a = @@ JS::fromNative(array(1, 2, 3)) @@;
	assert(Array.isArray(a));
	assertEqual(a.toString(), "1,2,3");

	var o = @@ JS::fromNative(array("hello" => "JS")) @@;
	assert(!Array.isArray(o));
	assertEqual(o.toString(), "[object Object]");
	assertEqual(o.hello, "JS");

	var o = @@ JS::fromNative((object) array("hello" => "JS")) @@;
	assertEqual(Object(o), o);
	assertEqual(o.hello, "JS");


	var ok;

	@@
		class JSFromNativeTestAncestor
		{
			private $foo = NULL;

			public function getFoo()
			{
				return $this->foo;
			}

			public function setFoo($foo)
			{
				$this->foo = $foo;
				return $this;
			}

			public function __toString()
			{
				return "hello, world!";
			}
		}

		class JSFromNativeTest extends JSFromNativeTestAncestor
		{
			static $ok;

			public function doSomething()
			{
				self::$ok = TRUE;
				return TRUE;
			}

			static function staticMethod()
			{
			}

			protected function protectedMethod()
			{
			}

			private function privateMethod()
			{
			}
		}

		JSFromNativeTest::$ok =& `ok;
	@@

	var o = @@ JS::fromNative(new JSFromNativeTest) @@;

	assertEqual(Object.getOwnPropertyNames(o).sort().toString(), 'doSomething,foo,getFoo,setFoo,toString');
	assertEqual(o.getFoo(), null);
	assertEqual(o.setFoo("bar"), o);
	assertEqual(o.getFoo(), "bar");
	assertEqual(o.foo, "bar");
	o.foo = "FOO!!!";
	assertEqual(o.foo, "FOO!!!");
	assertEqual(o.toString(), "hello, world!");
	assertEqual("" + o, "hello, world!");

	ok = false;
	assertEqual(@@ JSFromNativeTest::$ok @@, false);
	o.doSomething();
	assert(ok);

	o.newProperty = "new";
	assertEqual(o.newProperty, undefined);
	assert(Object.isFrozen(o));


	var o = @@ JS::fromNative(stream_context_create()) @@;
	assertEqual(o.toString(), "[object Native]");

	o.newProperty = "new";
	assertEqual(o.newProperty, undefined);
	assert(Object.isFrozen(o));
});

test("JS::toNative()", function () {
	var u = undefined,
		n = null,
		t = true,
		f = false,
		theAnswerToLifeTheUniverseAndEverything = 42,
		d = 5.8,
		s = "hello",
		a = [1, 2, 3],
		o = { foo: "bar" };

	assert(@@ JS::toNative(`u) === NULL @@);
	assert(@@ JS::toNative(`n) === NULL @@);
	assert(@@ JS::toNative(`t) === TRUE @@);
	assert(@@ JS::toNative(`f) === FALSE @@);
	assert(@@ JS::toNative(`theAnswerToLifeTheUniverseAndEverything) === 42 @@);
	assert(@@ JS::toNative(`d) === 5.8 @@);
	assert(@@ JS::toNative(`s) === 'hello' @@);
	assert(@@ JS::toNative(`a) === array(1, 2, 3) @@);
	assert(@@ JS::toNative(`o) == ((object) array("foo" => "bar")) @@); // intentionally ==

	@@
		class JSToNativeTest {}
	@@

	@@ $o = new JSToNativeTest; @@;
	var o = @@ JS::fromNative($o) @@;
	assert(@@ JS::toNative(`o) === $o @@);
});
