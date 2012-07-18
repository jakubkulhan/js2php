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
	__filename,
	function () {
		@@ require_once `utilDir . "/shrink.php"; @@

		var parse = PHP.cls("JSParser")(), compile = PHP.cls("JSCompiler")(),
			code = "<?php\n" +
				"require_once " + PHP.fn("var_export")(utilDir + "/shrink.php", true) + ";\n" +
				"$global = (object) array('properties' => array(), 'attributes' => array(), " +
				"'getters' => array(), 'setters' => array(), 'prototype' => NULL, 'up' => NULL, " +
				"'trace' => array());\n" +
				"$lines = explode(\"\\n\", file_get_contents(__FILE__));\n" +
				"echo \"<?php\\n\";\n",
			mains = "";

		PHP.fn("glob")(srcDir + "/image/*.js").forEach(function (f) {
			var fileCode = "", fileMain, buildFile = buildDir + "/" + PHP.fn("basename")(f, ".js");

			if (PHP.fn("file_exists")(buildFile + ".php") &&
				PHP.fn("filemtime")(buildFile + ".php") > PHP.fn("filemtime")(f))
			{
				code += PHP.fn("file_get_contents")(buildFile + ".php");
				mains += PHP.fn("file_get_contents")(buildFile + ".main.php");
				return;
			}

			puts("[ COMPILING " + f + " ]");

			var ast = parse(PHP.fn("file_get_contents")(f), { file: "<image>/" + PHP.fn("basename")(f) });

			if (!ast[0]) {
				fail("syntax error in " + f + "@" + ast[2].line + ":" + ast[2].column +
					", expected " + ast[2].expected.join(", "));
			}

			var compiled = compile(ast[1], { force: true, generate: "object" });

			for (var k in compiled.functions) {
				fileCode += compiled.functions[k] + "\n";

				if (k !== compiled.main) {
					fileCode += "echo " + PHP.fn("var_export")(
						PHP.fn("shrink")("<?php " + compiled.functions[k]).substring(6),
						true) +
						", \"\\n\";\n";
				}
			}

			code += fileCode;
			mains += fileMain = compiled.main + "($global, $global);\n";

			PHP.fn("file_put_contents")(buildFile + ".php", fileCode);
			PHP.fn("file_put_contents")(buildFile + ".main.php", fileMain);
		});

		code += "$classes = get_declared_classes();\n" +
			"$functions = get_defined_functions(); $functions = $functions['user'];\n";
		code += mains;

		[ buildDir + "/JSParser.php", buildDir + "/JSCompiler.php" ].forEach(function (f) {
			code += "echo " + PHP.fn("var_export")(
				PHP.fn("ltrim")(PHP.fn("shrink")(PHP.fn("file_get_contents")(f)).substring(5)),
				true) + ", \"\\n\";\n";
		});

		code += "foreach (array_diff(get_declared_classes(), $classes) as $class) {" +
			"$r = new ReflectionClass($class); echo ltrim(substr(shrink('<?php ' . implode(\"\\n\", array_slice($lines, " +
			"$r->getStartLine() - 1, $r->getEndLine() - $r->getStartLine() + 1))), 6)) . \"\\n\"; }\n";

		code += "$newFunctions = get_defined_functions(); $newFunctions = $newFunctions['user'];\n";
		code += "foreach (array_diff($newFunctions, $functions) as $fn) {" +
			"$r = new ReflectionFunction($fn); echo ltrim(substr(shrink('<?php ' . implode(\"\\n\", array_slice($lines, " +
			"$r->getStartLine() - 1, $r->getEndLine() - $r->getStartLine() + 1))), 6)) . \"\\n\"; }\n";

		code += "$r = new ReflectionClass('JS');\n" +
			"echo 'foreach (unserialize(' . var_export(serialize($r->getStaticProperties()), TRUE)  . ') " +
			"as $k => $v) {JS::$$k = $v;}', \"\\n\";\n";

		PHP.fn("file_put_contents")(buildDir + "/mkimage.php", code);

		run("php -l " + buildDir + "/mkimage.php");
		run("php " + buildDir + "/mkimage.php > " + buildDir + "/newimage.php");
		run("php -l " + buildDir + "/newimage.php");

		puts("[ CHECKING NEW IMAGE VALIDITY ]");
		var lastLine = false;
		PHP.fn("file_get_contents")(buildDir + "/newimage.php").split(/\n/).forEach(function (line, n) {
			if (line === "" || line.match(/^(function|class|foreach \(unserialize|<\?php)/) !== null) {
				if (line.match(/^foreach/) && lastLine) {
					fail("there can be only one unserialization of image, second one on line #" +
						(n + 1) + ", " + buildDir + "/newimage.php is not valid");
				}

				if (line.match(/^foreach/)) {
					lastLine = true;
				}

				return;
			}

			fail("line #" + (n + 1) + " of " + buildDir + "/newimage.php is not valid");
		});

		run("mv " + buildDir + "/newimage.php " + buildDir + "/image.php");
		run("rm " + buildDir + "/mkimage.php");
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

		puts("[ COMPILING prelude.js ]");

		ast = parse(PHP.fn("file_get_contents")(utilDir + "/jake.d/prelude.js"), { file: "<jake>/prelude.js" });
		if (!ast[0]) {
			fail("syntax error in prelude.js@" + ast[2].line + ":" + ast[2].column +
				", expected " + ast[2].expected.join(", "));
		}
		code += "function prelude() {" + compile(ast[1], { force: true }) + "} call_user_func(prelude(), JS::$global);";

		code += "$i = new JSInterpreter(file_get_contents(getcwd() . '/Jakefile'), getcwd() . '/Jakefile'); $i->run();\n";

		puts("[ COMPILING main.js ]");

		ast = parse(PHP.fn("file_get_contents")(utilDir + "/jake.d/main.js"), { file: "<jake>/main.js" });
		if (!ast[0]) {
			fail("syntax error in main.js@" + ast[2].line + ":" + ast[2].column +
				", expected " + ast[2].expected.join(", "));
		}
		code += "function main() {" + compile(ast[1], { force: true }) + "} call_user_func(main(), JS::$global);";

		code += "} catch (JSException $e) {\n" +
			"if (isset($e->value->properties)) {\n" +
			"echo (isset($e->value->properties['name']) ? $e->value->properties['name'] . \": \" : \"\"), $e->value->properties['message'], ' in ', $e->value->properties['file'], '@', $e->value->properties['line'], ':', $e->value->properties['column'], \"\\n\";\n" +
			"} else {\n" +
			"echo $e->value->getMessage(), \"\\n\";\n" +
			"}\n" +
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

		puts("[ COMPILING main.js ]");

		var parse = PHP.cls("JSParser")(), compile = PHP.cls("JSCompiler")(), ast;
		ast = parse(PHP.fn("file_get_contents")(utilDir + "/jtest.d/main.js"), { file: "<jtest>/main.js" });
		if (!ast[0]) {
			fail("syntax error in main.js@" + ast[2].line + ":" + ast[2].column +
				", expected " + ast[2].expected.join(", "));
		}

		code += "JS::$global->trace = array(array('<jtest>/main.js', NULL, NULL)); JS::$global->trace_sp = 0;";
		code += "function main() {" + compile(ast[1], { force: true }) + "} call_user_func(main(), JS::$global);";

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
