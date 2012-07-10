#!/usr/bin/php
<?php
require_once __DIR__ . '/../src/JavascriptParser.php';
require_once __DIR__ . '/../src/JavascriptCompiler.php';
require_once __DIR__ . '/../src/image.php';

class AssertException extends Exception
{
}

function compile($code)
{
	$parser = new JavascriptParser;
	list($ok, $result, $error) = $parser->parse($code);

	if (!$ok) {
		return array(FALSE, NULL, $error);
	}

	$compiler = new JavascriptCompiler;
	return array(TRUE, $compiler->__invoke($result), NULL);
}

list($ok, $assert_code, $error) = compile('
function assert(assertion) {
	if (!assertion) {
		@@ throw new AssertException; @@
	}
}

function dump() {
	var x;

	for (var i = 0, l = arguments.length; i < l; i = i + 1) {
		x = arguments[i];
		@@ var_dump(`x); @@
	}
}
');

if (!$ok) {
	die('Cannot compile assert.');
}

$global = clone JS::$objectTemplate;
$global->up = NULL;
call_user_func(eval($assert_code), $global);

if (!isset($_SERVER['argv'][1])) {
	$dir = __DIR__;
} else {
	$dir = $_SERVER['argv'][1];
}

if (is_dir($dir)) {
	$files = glob($dir . '/*.js');
} else {
	$files = array($dir);
}

$passed = 0;
$failed_compile = 0;
$failed_compiled = 0;
$failed_assert = 0;

foreach ($files as $file) {
	list($ok, $code, $error) = compile(file_get_contents($file));

	if (!$ok) {
		echo "\n>>>\n";
		echo ">>> $file failed to compile - expected ",
			implode(', ', $error->expected),
			" on {$error->line}:{$error->column}\n";
		echo ">>>\n";
		++$failed_compile;
		continue;
	}

	$globalClone = clone $global;
	$print_compiled = FALSE;

	file_put_contents('/tmp/js2php.last.php', $code);
	
	if (($call = eval($code)) === FALSE) {
		echo "\n>>>\n";
		echo ">>> $file compiled badly\n";
		echo ">>>\n\n";
		++$failed_compiled;
		$print_compiled = TRUE;
	}

	try {
		$call($globalClone);

	} catch (AssertException $e) {
		$line = $e->getTrace();
		$line = $line[1]['line'];
		echo "\n>>>\n";
		echo ">>> $file: assert failed on {$line}\n";
		echo ">>>\n\n";
		++$failed_assert;
		$print_compiled = TRUE;
	}

	if ($print_compiled) {
		foreach (explode("\n", rtrim($code)) as $lineno => $line) {
			printf("% 5d: %s\n", $lineno + 1, $line);
		}
		echo "\n\n";
		continue;
	}

	++$passed;
	echo ".";
}

echo "\n>>>\n";
echo ">>> $passed passed, $failed_compile failed to compile, $failed_compiled compiled code failed, $failed_assert failed assert\n";
echo ">>>\n";
