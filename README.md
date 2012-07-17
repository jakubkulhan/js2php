# js2php

js2php uses [PHPEG](http://github.com/jakubkulhan/phpeg) to parse Javascript and then translates
resulting AST to PHP code as closely as possible.

## `JSInterpreter`

Interface to js2php.

### `__construct($code, $file = NULL)`

Creates new instance with given `$code`. Optional `$file` parameter tells compiler
from which Javascript file the code is.

### `compile()`

Returns compiled PHP code. Compiled code can't be run without *image*, be sure to
include `src/image.php` first if you want to run compiled code yourself. Throw
`Exception` if parsing failed.

### `run(array $vars = array())`

Compiles Javascript code using `compile()` and then runs it. If `$vars` argument
is supplied, variables from `$vars` are added to the global object of script.

    $interpreter = new JSInterpreter('   return "hello, " + who + "!";   ');
    
    echo $interpreter->run(array('who' => 'world')); // prints: hello, world!

## Compiled code

Javascript has six types: undefined, null, boolean, string, number, and object.
Null, boolean, string and number values are represented as PHP null, boolean, string,
and number values. There is no undefined equivalent in PHP, so undefined is
represented by instance of `JSUndefined` class (declared in `image/00_prologue.js`).

Javascript objects are lists of properties. There are two types of properties - data
properties, and accessor properties. A data property is simple mapping from key to
value. An accessor property is accessed by calling getter and setter. Every property
also has attributes. Javascript objects are represented by instances of `stdClass`
like this:

	Javascript:

    var object = {
		undef: undefined,
		null: null,
		t: true,
		f: false,
		one: 1,
		hello: "world"
	};

	Object.defineProperty(object, "theAnswer", {
		get: function () { return 42; },
		set: function () { throw Error("Nope!") }
	});

	PHP:

	$object = (object) array(
		'properties' => array(
			'undef' => JS::$undefined, // instance of JSUndefined
			'null' => NULL,
			't' => TRUE,
			'f' => FALSE,
			'one' => 1,
			'hello' => 'world',
		),

		'attributes' => array(
			'undef' => JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE,
			'null' => JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE,
			't' => JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE,
			'f' => JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE,
			'one' => JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE,
			'hello' => JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE,
			'theAnswer' => JS::HAS_GETTER | JS::HAS_SETTER,
		),

		'getters' => array(
			'theAnswer' => (object) array( ... 'call' => ... ),
		),

		'setters' => array(
			'theAnswer' => (object) array( ... 'call' => ... ),
		),

		'prototype' => (object) array( ... )
	);

Functions are objects too. They are different only that they have `call` property.

Eeach function declaration and expression results in new PHP function in compiled
code. Compiled functions are named `_<hash of AST>_<counter>`. They have 4
parameters: reference to global object, reference to this, reference to function
itself, and array of arguments. Also for each Javascript function a new function
object is created.

	Javascript:

	function sayHello() {
		console.log("hello, world!");
	}

	PHP:

	// sayHello
	function _a123456789_1($global, $leThis, $fn, $args) { ... }

	// global code is also compiled into an function; its name always ends with "_0"
	function _a123456789_0($global) 
	{
		// ...

		$_sayHello = (object) array(
			// ...
			'call' => '_a123456789_1',
			'prototype' => $_Function->properties['prototype'],
			// ...
		);

		// ...
	}

Code returned by `JSCompiler->__invoke($ast, $force = NULL)` is a string that consists of
generated function declarations joined together followed by `return "_a123456789_0";`,
thus returning a function name of global code. The string does not start with PHP
open tag and so it can be directly fed to `eval()`. To evaluate contents of
Javascript file `foo.js`:

	$parser = new JSParser;
	list(,$ast) = $parser(file_get_contents("foo.js"), "foo.js");

	$compiler = new JSCompiler;
	$code = $compiler($ast);

	$entryPoint = eval($code);

	$entryPoint(JS::$global);

`JSCompiler->__invoke()` makes hash of given AST and if main function of the tree `_<hash>_0`
already exists (`function_exists()`), JSCompiler won't compile AST again, it will just return
`return '_<hash>_0';`. If you want to even though get the code, just pass `TRUE` as
the second argument.

## Extensions to Javascript syntax

To be able to more easily interoperate with PHP, js2php added to Javascript syntax
PHP statement and expression. Both are delimited by `@@`.

	var foo = "foo",
		bar = @@ substr(`foo, 0, 1) @@; // `foo expands to foo Javascript variable
	
	@@ assert(`bar === "f"); @@ // `bar expands to bar Javascript variable

## The image

The image (`src/image.php`) is an pre-compiled Javascript code from `image/`
directory. Sources in `image/` initialise runtime environment - create Javascript
built-in objects etc.

## PHP interoperability

js2php can very well interoperate with PHP, `JS::fromNative()` and `JS::toNative()`
are here to help. In js2php vocabulary native language is PHP, host language is Javascript.
`JS::fromNative()` can translate any value from PHP world to Javascript. Null,
boolean, integer, float, and string types are left as they are. Arrays with numerical
indexes and empty arrays are converted to Javascript `Array` objects. Other arrays and `stdClass`
objects get converted to `Object` objects as if created by object literal.

For other PHP objects their Javascript counterparts are created. Only public object methods
get imported. Also for methods starting with `get` and `set` are created accessor properties.
`__toString` method is renamed to `toString`.

	Javascript:
	@@
		class Foo
		{
			public $propertyFoo;
			protected $propertyBar;
			private $secret = "my secret";

			static function doSomething() { ... }

			public function __construct() {}

			public function getSecret() { return $this->secret; }
			public function setSecret($newSecret) { $this->secret = $newSecret; return $this; }

			protected function getPropertyBar() { ... }

			private function doSomethingNobodyElseCanDo() { ... }

			public function __toString() { return "FOO!!!"; }
		}
	@@

	var o = @@ JS::fromNative(new Foo) @@;

	dump(typeof o.propertyFoo); // undefined
	dump(typeof o.propertyBar); // undefined

	dump(typeof o.secret); // string
	dump(o.secret); // my secret

	o.secret = "new secret";
	dump(o.secret); // new secret

	dump(o.setSecret("another secret").toString()); // [object Foo]
	dump(o.getSecret()); // another secret

	dump(typeof o.doSomething); // undefined
	dump(typeof o.__construct); // undefined
	dump(typeof o.getPropertyBar); // undefined
	dump(typeof o.doSomethingNobodyElseCanDo); // undefined

	dump("" + o); // FOO!!!

If PHP object is invokable (i.e. has mehod `__invoke`), instead of creating new object,
new function is created. Still other methods get added to the function object.

	@@
		class SayHello
		{
			public function __invoke($who) { return "Hello, $who!"; }
			public function bar() { return "bar"; }
		}
	@@

	var f = @@ JS::fromNative(new SayHello) @@;

	dump(typeof f); // function
	dump(f("world")); // Hello, world!
	dump(f.bar()); // bar

	var o = { f: f };

	// this is bound to native object
	dump(o.f("O")); // Hello, O!

Resources are converted to objects of class `Native`. Neither wrapped PHP objects,
nor resource objects are extensible. All properties are not configurable, too.

`JS::toNative()` takes Javascript value and converts to PHP. Undefined is converted
to NULL. So running `JS::fromNative(JS::toNative(JS::$undefined))` is NULL, not
undefined again. Booleans, ints, floats and strings are left as they are. `Array`
objects get converted to arrays. PHP wrapped objects and resources are unwrapped.
Other objects are converted to `stdClass` objects, all enumerables properties are
exported.

From Javascript, you can access PHP functions and classes through `PHP.fn()`,
respectively `PHP.cls()`. See `test/builtin/php.js` for examples.

## `jake` - build system (yet another make replacement)

js2php uses its own build system called jake. There are other systems called jake:

- https://github.com/isaacs/node-jake
- https://github.com/280north/jake

So, don't confuse them with js2php's.

jake looks for file named `Jakefile` in current directory and runs it. `Jakefile` is
just Javascript source file. In `Jakefile` you define tasks that can be run:

	task("hello", function () {
		dump("Hello, world!");
	});

Then if you run jake:

	$ ./util/jake
	/home/jakub/Jakefile defines following tasks:

	  $ jake hello

	$ ./util/jake hello
	"Hello, world!"

Tasks can have description and accept arguments from command line:

	Jakefile:

	task("echo", "print given arguments", function () {
		dump(Array.prototype.slice.call(arguments));
	});

	shell:

	$ ./util/jake
	/home/jakub/Jakefile defined following tasks:

	  $ jake echo  # print given arguments

	$ ./util/jake echo foo bar baz
	[ "foo", "bar", "baz" ]

Tasks can depend on each other:

	Jakefile:

	task("foo", "first string argument is always description, not dependency",
		"bar", "baz",
		function () {
			dump("running foo");
		});

	task("bar", "",
		"baz",
		function () {
			dump("running bar");
		});

	task("baz",
		function () {
			dump("running baz");
		});

	shell:

	$ ./util/jake foo
	=> bar
	==> baz
	"running baz"
	==> ok
	"running bar"
	=> ok
	"running foo"

If a task produces files as a result, it can depend on other files:

	Jakefile:

	task("build", "",

		// result() marks that these are resulting files
		// __dirname is an absolute path to the current directory
		result(__dirname + "/build/*.php"),

		// build task depends on these files
		__dirname + "/src/*.js",

		function () {
			PHP.fn("glob")(__dirname + "/src/*.js").forEach(function (file) {
				// run() executes given shell command
				run("compile " + file + " " +
					__dirname + "/build/" + PHP.fn("basename")(file, ".js") + ".php");
			});
		});

	shell:

	$ ./util/jake build
	compile /home/jakub/src/foo.js /home/jakub/build/foo.php
	compile /home/jakub/src/bar.js /home/jakub/build/bar.php

If a task proces files and has set result files, it is not run when the result files are
newer (within the meaning of `filemtime()`) than the dependant.

See js2php's `Jakefile` for examples.

## `jtest` - testing system

jtest runs js2php's tests and reports results. Tests are plain Javascript files that
define tests to run using the `test(name, callback)` function. Tests are realized by assertions.
There are two functions for assertions - `assert(test [, message])`, and
`assertEqual(a, b [, message])`:

	foo.js:

	test("foo", function () {
		assert(true);
	});

	bar.js:

	test("bar", function () {
		assertEqual(1, 2, "oh no!");
	});

	syntax-error.js:

	test("error

	shell:

	$ ./util/jtest foo.js
	.
	>>>
	>>> 1 passed, 0 failed to compile, 0 compiled code failed, 0 failed assert
	>>>
	$ ./util/jtest bar.js

	>>>
	>>> FILE: bar.js, TEST: bar
	>>>
	>>>   assertion #1 failed: oh no!, <1> !== <2>
	>>>
	>>>

	>>>
	>>> 0 passed, 0 failed to compile, 0 compiled code failed, 1 failed assert
	>>>
	$ ./util/jtest syntax-error.js
	>>>
	>>> syntax error in syntax-error.js@1:12, expected [\"], "\\b", "\\f", "\\n", "\\r",
	>>> "\\t", "\\v", "\\\\", "\\\"", "\\", "\\0", "\\x"
	>>>


	>>>
	>>> 0 passed, 1 failed to compile, 0 compiled code failed, 0 failed assert
	>>>


## License

The MIT license

    Copyright (c) 2012 Jakub Kulhan <jakub.kulhan@gmail.com>

    Permission is hereby granted, free of charge, to any person
    obtaining a copy of this software and associated documentation
    files (the "Software"), to deal in the Software without
    restriction, including without limitation the rights to use,
    copy, modify, merge, publish, distribute, sublicense, and/or sell
    copies of the Software, and to permit persons to whom the
    Software is furnished to do so, subject to the following
    conditions:

    The above copyright notice and this permission notice shall be
    included in all copies or substantial portions of the Software.

    THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND,
    EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES
    OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND
    NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT
    HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY,
    WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
    FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR
    OTHER DEALINGS IN THE SOFTWARE.
