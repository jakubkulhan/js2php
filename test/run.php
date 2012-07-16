#!/usr/bin/php
<?php
require_once __DIR__ . '/../build/image.php';

class AssertException extends Exception
{
}

function compile($code, $file = NULL)
{
	$parser = new JSParser;
	list($ok, $result, $error) = $parser->__invoke($code, $file);

	if (!$ok) {
		return array(FALSE, NULL, $error);
	}

	$compiler = new JSCompiler;
	return array(TRUE, $compiler->__invoke($result), NULL);
}

list($ok, $assert_code, $error) = compile($code = '
(function (global) {
	var assertionsCount;

	function AssertionFailed(message) {
		var e = new Error(message);
		e.name = "AssertionFailed";
		@@ `e->prototype = `AssertionFailed->properties["prototype"]; @@
		return e;
	}

	@@ `AssertionFailed->properties["prototype"]->prototype = `Error->properties["prototype"]; @@

	function assert(assertion, message) {
		if (!assertion) {
			throw new AssertionFailed(message);
		}

		++assertionsCount;
	}

	function assertEqual(a, b, message) {
		if (a !== b) {
			var neq = "<" + a + "> !== <" + b + ">";
			if (message) {
				throw new AssertionFailed(message + ", " + neq);
			} else {
				throw new AssertionFailed(neq);
			}
		}

		++assertionsCount;
	}

	function test(name, callback) {
		try {
			assertionsCount = 1;
			callback();

		} catch (e) {
			if (!(e instanceof AssertionFailed)) {
				throw e;
			}

			var s = "\n>>>\n>>> FILE: " + global.file + ", TEST: " + name +
				"\n>>>\n>>>    assertion #" + assertionsCount + " failed: " + e.message +
				"\n>>>\n";

			@@ echo `s; @@

			@@ throw new AssertException; @@
		}
	}

	global.AssertionFailed = AssertionFailed;
	global.assert = assert;
	global.assertEqual = assertEqual;
	global.test = test;
})(@@ $global @@);
');

if (!$ok) {
	die('Cannot compile assert.');
}

$global = clone JS::$global;
$global->up = NULL;
call_user_func(eval($assert_code), $global);

if (!isset($_SERVER['argv'][1])) {
	$dir = __DIR__;
} else {
	$dir = $_SERVER['argv'][1];
}

if (is_dir($dir)) {
	$files = array_merge(
		array_merge(
			glob($dir . '/*.js'),
			glob($dir . '/*/*.js')),
		glob($dir . '/*/*/*.js'));
} else {
	$files = array($dir);
}

$passed = 0;
$failed_compile = 0;
$failed_compiled = 0;
$failed_assert = 0;

foreach ($files as $file) {
	list($ok, $code, $error) = compile(file_get_contents($file), $file);

	if (!$ok) {
		echo "\n>>>\n";
		echo ">>> $file failed to compile - expected ",
			implode(', ', $error->expected),
			" on {$error->line}:{$error->column}\n";
		echo ">>>\n";
		++$failed_compile;
		continue;
	}

	$globalClone = $global;
	$globalClone->properties['file'] = $file;

	file_put_contents('/tmp/js2php.last.php', $code);
	
	if (($call = eval($code)) === FALSE) {
		echo "\n>>>\n";
		echo ">>> $file compiled badly\n";
		echo ">>>\n\n";
		++$failed_compiled;
		continue;
	}

	try {
		$call($globalClone);

	} catch (AssertException $e) {
		echo 'F';
		++$failed_assert;
		continue;
	}

	++$passed;
	echo ".";
}

echo "\n>>>\n";
echo ">>> $passed passed, $failed_compile failed to compile, $failed_compiled compiled code failed, $failed_assert failed assert\n";
echo ">>>\n";
