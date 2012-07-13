#!/usr/bin/php
<?php
require_once __DIR__ . '/shrink.php';

$code = '<?php ';

foreach (glob(__DIR__ . '/../src/*.php') as $file) {
	$code .= substr(file_get_contents($file), 5); // remove <?php
}

$code .= <<<'END'

if ($argc > 2 || ($argv === 2 && ($argv[1] === '-h' || $argv[1] === '--help'))) {
	die("usage: {$argv[0]} [ -h ] [ <file> ]");
}

$file = 'php://stdin';
if (isset($argv[1])) {
	$file = $argv[1];
}

$interpreter = new JavascriptInterpreter(file_get_contents($file), $file);
$interpreter->run();

END;

echo "#!/usr/bin/php\n";
echo shrink($code);
