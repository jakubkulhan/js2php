var buildDir = __dirname + "/build",
	srcDir = __dirname + "/src",
	testDir = __dirname + "/test";
	utilDir = __dirname + "/util";

task("all", "clean, build image, binary, jake, jtest, and run tests",
	"clean", "build", "build:binary", "build:jake", "build:jtest", "test");

task("build", "build parser, compiler and image",
	"build:image",
	result(buildDir + "/*.php"),
	srcDir + "/JSInterpreter.php",
	function () {
		run("cp " + srcDir + "/JSInterpreter.php " + buildDir + "/");
	});

task("build:parser", "build JSParser from phpeg source", 
	result(buildDir + "/JSParser.php"),
	srcDir + "/JSParser.phpeg",
	function () {
		run(utilDir + "/phpeg " + srcDir + "/JSParser.phpeg " + buildDir + "/JSParser.php");
	});

task("build:compiler", "build JSCompiler from phptw source",
	result(buildDir + "/JSCompiler.php"),
	srcDir + "/JSCompiler.phptw",
	function () {
		run(utilDir + "/phptwc " + srcDir + "/JSCompiler.phptw " + buildDir + "/JSCompiler.php");
	});

task("build:image", "build image.php from src/image/*.js",
	"build:parser", "build:compiler",
	result(buildDir + "/image.php"),
	srcDir + "/image/*.js",
	function () {
		run(utilDir + "/mkimage > " + buildDir + "/image.php");
	});

task("build:binary", "build interpreter",
	"build",
	result(utilDir + "/js2php-interpreter"),
	buildDir + "/*",
	__filename,
	function () {
		var code = "#!/usr/bin/php\n<?php\n";

		[ buildDir + "/image.php", buildDir + "/JSInterpreter.php" ].forEach(function (f) {
			code += PHP.fn("ltrim")(PHP.fn("file_get_contents")(f).substring(5)); // remove <?php
		});

		code += "if ($argc > 2 || ($argv === 2 && ($argv[1] === '-h' || $argv[1] === '--help'))) {\n" +
			"	die(\"usage: {$argv[0]} [ -h ] [ <file> ]\");\n" +
			"}\n" +
			"\n" +
			"$file = 'php://stdin';\n" +
			"if (isset($argv[1])) {\n" +
			"	$file = $argv[1];\n" +
			"}\n" +
			"\n" +
			"$interpreter = new JSInterpreter(file_get_contents($file), $file);\n" +
			"$interpreter->run();\n";

		PHP.fn("file_put_contents")(utilDir + "/js2php-interpreter", code);
		run("chmod +x " + utilDir + "/js2php-interpreter");
	});

task("build:jake", "build jake util binary",
	"build",
	result(utilDir + "/jake"),
	utilDir + "/jake.d/*.js",
	buildDir + "/*.php",
	__filename,
	function () {
		var code = "#!/usr/bin/php\n<?php\n";

		[ buildDir + "/image.php", buildDir + "/JSInterpreter.php" ].forEach(function (f) {
			code += PHP.fn("ltrim")(PHP.fn("file_get_contents")(f).substring(5)); // remove <?php
		});

		code += "try {\n";

		var parse = PHP.cls("JSParser")(), compile = PHP.cls("JSCompiler")(), ast;
		ast = parse(PHP.fn("file_get_contents")(utilDir + "/jake.d/prelude.js"), "<jake>/prelude.js");
		if (!ast[0]) {
			fail("syntax error in prelude.js@" + ast[2].line + ":" + ast[2].column +
				", expected " + ast[2].expected.join(", "));
		}
		code += "function prelude() {" + compile(ast[1], true) + "} call_user_func(prelude(), JS::$global);";

		code += "$i = new JSInterpreter(file_get_contents(getcwd() . '/Jakefile'), getcwd() . '/Jakefile'); $i->run();\n"

		ast = parse(PHP.fn("file_get_contents")(utilDir + "/jake.d/main.js"), "<jake>/main.js");
		if (!ast[0]) {
			fail("syntax error in main.js@" + ast[2].line + ":" + ast[2].column +
				", expected " + ast[2].expected.join(", "));
		}
		code += "function main() {" + compile(ast[1], true) + "} call_user_func(main(), JS::$global);";

		code += "} catch (JSException $e) {\n" +
			"echo $e->value->properties['name'], \": \", $e->value->properties['message'], ' in ', $e->value->properties['file'], '@', $e->value->properties['line'], ':', $e->value->properties['column'], \"\\n\";\n" +
			"echo implode(\"\\n\", array_map(function ($t) { return '  ' . $t[0] . '@' . $t[1] . ':' . $t[2]; }, array_reverse(JS::$global->trace))), \"\\n\";\n" +
			"}\n";

		PHP.fn("file_put_contents")(utilDir + "/jake", code);
		run("chmod +x " + utilDir + "/jake");
	});

task("build:jtest", "build jtest util binary",
	"build",
	result(utilDir + "/jtest"),
	utilDir + "/jtest.d/*.js",
	buildDir + "/*.php",
	__filename,
	function () {
		var code = "#!/usr/bin/php\n<?php\n";

		[ buildDir + "/image.php", buildDir + "/JSInterpreter.php" ].forEach(function (f) {
			code += PHP.fn("ltrim")(PHP.fn("file_get_contents")(f).substring(5)); // remove <?php
		});

		var parse = PHP.cls("JSParser")(), compile = PHP.cls("JSCompiler")(), ast;
		ast = parse(PHP.fn("file_get_contents")(utilDir + "/jtest.d/main.js"), "<jtest>/main.js");
		if (!ast[0]) {
			fail("syntax error in main.js@" + ast[2].line + ":" + ast[2].column +
				", expected " + ast[2].expected.join(", "));
		}

		code += "JS::$global->trace = array(array('<jtest>/main.js', NULL, NULL)); JS::$global->trace_sp = 0;";
		code += "function main() {" + compile(ast[1], true) + "} call_user_func(main(), JS::$global);";

		PHP.fn("file_put_contents")(utilDir + "/jtest", code);
		run("chmod +x " + utilDir + "/jtest");
	});

task("clean", "clean build/",
	function () {
		PHP.fn("glob")(buildDir + "/*.php").forEach(function (f) {
			run("rm " + f);
		});
	});

task("test", "run tests",
	"build", "build:jtest",
	function () {
		run(utilDir + "/jtest " + testDir);
	});
