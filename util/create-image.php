#!/usr/bin/php
<?php
require_once __DIR__ . '/../src/JSParser.php';
require_once __DIR__ . '/../src/JSCompiler.php';
require_once __DIR__ . '/shrink.php';

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

$code = '';

foreach (glob(__DIR__ . '/../image/*.js') as $file) {
	$code .= file_get_contents($file);
}

list($ok, $php, $error) = compile($code, '<image>');

if (!$ok) {
	die('Parse error: expected ' .
		implode(', ', $error->expected) .
		' on ' . $error->line . ':' . $error->column . '.');
}

file_put_contents('/tmp/js2php.last.php', $php);

$lines = explode("\n", $php);
$declaredClasses = get_declared_classes();
$definedFunctions = get_defined_functions();
$definedFunctions = $definedFunctions['user'];

$f = eval($php);
$f();

$image = "<?php\n";

foreach (array('JSParser', 'JSCompiler') as $file) {
	$image .= ltrim(substr(file_get_contents(__DIR__ . "/../src/$file.php"), 5)); // remove <?php
}

foreach (array_diff(get_declared_classes(), $declaredClasses) as $class) {
	$reflection = new ReflectionClass($class);
	$image .= implode("\n", array_slice(
		$lines,
		$reflection->getStartLine() - 1,
		$reflection->getEndLine() - $reflection->getStartLine() + 1)) . "\n";
}

$newDefinedFunctions = get_defined_functions();
$newDefinedFunctions = $newDefinedFunctions['user'];

foreach (array_diff($newDefinedFunctions, $definedFunctions) as $function) {
	if (substr($function, -2) === '_0') {
		// discard main function, not needed anymore
		continue;
	}

	$reflection = new ReflectionFunction($function);

	$image .= implode("\n", array_slice(
		$lines,
		$reflection->getStartLine() - 1,
		$reflection->getEndLine() - $reflection->getStartLine() + 1)) . "\n";
}

$reflection = new ReflectionClass('JS');

$image .= 'foreach (unserialize(' .
	var_export(serialize($reflection->getStaticProperties()), TRUE) . ') as $k => $v) {' .
	'JS::$$k = $v;' . "}\n";

echo shrink($image);
