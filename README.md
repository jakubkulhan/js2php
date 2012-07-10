# js2php

WARNING: highly experimental

js2php uses [PHPEG](http://github.com/jakubkulhan/phpeg) to parse Javascript and then translates
resulting AST to PHP code as closely as possible.

## `JavascriptInterpreter`

Interface to js2php.

### `__construct($code)`

Creates new instance with given `$code`.

### `compile()`

Returns compiled PHP code. Compiled code can't be run without *image*, be sure to
include `src/image.php` first if you want to run compiled code yourself.

### `run(array $vars = array())`

Compiles Javascript code and then runs it. If `$vars` argument is supplied, variables
from `$vars` are added to the global object of script.

    $interpreter = new JavascriptInterpreter('   return "hello, " + who + "!";   ');
    
    echo $interpreter->run(array('who' => 'world')); // prints: hello, world!

## Compiled code

Javascript has six types: undefined, null, boolean, string, number, and object.
Null, boolean, string and number values are represented as PHP null, boolean, string
and number values. There is no undefined equivalent in PHP, so undefined is
represented by instance of `JSUndefined` class (declared in `image/00_prologue.js`).

Javascript objects are lists of properties. There are two types of properties - data
properties, and accessor properties. A data property is simple mapping from key to
value. An accessor property is accessed by calling getter and setter. Every property
also has some attributes. In PHP objects are represented by instances of `stdClass`
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
			'theAnswer' => JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE,
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
code. Compiled functions are named `_<random string>_<counter>`. They have 4
parameters: reference to global object, reference to this, reference to function
itself, and array of arguments. Also for each Javascript function is created new
function object.

	Javascript:

	function sayHello() {
		console.log("hello, world!");
	}

	PHP:

	// sayHello
	function _a123456789_1($global, $leThis, $fn, $args) { ... }

	// global code is also compiled into an function; its names always end with "_0"
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
