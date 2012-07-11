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

list($ok, $assert_code, $error) = compile($code = '
function assert(assertion, message) {
	if (!assertion) {
		if (message) {
			@@ throw new AssertException(`message); @@
		} else {
			@@ throw new AssertException; @@
		}
	}
}

function dump() {
	var dumper = function dumper(v, indent) {
		indent = indent || "";
		if (v === undefined) {
			return { multiline: false, dump: "undefined" };

		} else if (v === null || typeof v === "boolean" || typeof v === "number") {
			return { multiline: false, dump: @@ json_encode(`v) @@ };

		} else if (typeof v === "string") {
			if (@@ strlen(`v) > 50 @@) {
				return { multiline: true, dump: @@ str_replace("\\/", "/", json_encode(substr(`v, 0, 32) . "...")) @@ };
			} else {
				return { multiline: false, dump: @@ str_replace("\\/", "/", json_encode(`v)) @@ };
			}

		} else if (@@ isset(`v->call) @@) {
			return { multiline: false,
			         dump: "[function" + @@ (isset(`v->name) ? " " . `v->name : "") @@ + "]" };

		} else {
			var multiline = false, i, k, d, isArray = @@ `v->class === "Array" @@;

			@@ $values = array(); @@

			if (isArray) {
				for (i = 0; i < v.length; ++i) {
					if ((d = dumper(v[i], indent)).multiline) {
						multiline = true;
					}

					d = d.dump;

					@@ $values[] = `d; @@
				}

			} else {
				for (k in v) {
					if ((d = dumper(v[k], indent)).multiline) {
						multiline = true;
					}

					d = d.dump;

					@@ $values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~", `k) ? `k : json_encode(`k)) . ": " . `d; @@
				}
			}

			if (@@ empty($values) @@) {
				return { multiline: false, dump: isArray ? "[]" : "{}" };
			}

			if (@@ count($values) > 5 @@) {
				multiline = true;
			}

			return { multiline: multiline,
				dump: (isArray ? "[ " : "{ ") +
					@@ implode(!`multiline ? ", " : ",\n" . `indent . "  ", $values) @@ +
					(isArray ? " ]" : " }") };
		}
	};

	for (var i = 0, l = arguments.length, arg; i < l; i = i + 1) {
		arg = dumper(arguments[i]).dump;
		@@ echo `arg . "\n"; @@
	}
}
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

	$globalClone = $global;
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
		$line = $line[0]['line'];
		echo "\n>>>\n";
		echo ">>> $file: assert failed on {$line}";
		if ($e->getMessage()) {
			echo ": {$e->getMessage()}";
		}
		echo "\n>>>\n\n";
		echo $e->getTraceAsString() . "\n\n";
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
