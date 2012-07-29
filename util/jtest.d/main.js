var assertionsCount, currentTest;

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

function assertNotEqual(a, b, message) {
	if (a === b) {
		var eq = "<" + a + "> === <" + b + ">";
		if (message) {
			throw new AssertionFailed(message + ", " + eq);
		} else {
			throw new AssertionFailed(eq);
		}
	}

	++assertionsCount;
}

function test(name, callback) {
	currentTest = name;
	assertionsCount = 1;
	callback();
}

function puts() {
	var s = Array.prototype.join.call(arguments, "");
	@@ echo `s, "\n"; @@
}

function putc(c) {
	@@ echo `c; @@
}

global.assert = assert;
global.assertEqual = assertEqual;
global.assertNotEqual = assertNotEqual;
global.test = test;

var args = @@ JS::fromNative($_SERVER['argv']) @@;

if (args.length < 2 || args[1] === '-h' || args[1] === '--help') {
	puts("usage: jtest [ -h | --help ] <test dir>");
	@@ die(); @@
}

var parse = PHP.cls("JSParser")(), compile = PHP.cls("JSCompiler")(),
	ast, code, call,
	files = PHP.fn("is_dir")(args[1])
		? [].concat(PHP.fn("glob")(args[1] + "/*.js"), PHP.fn("glob")(args[1] + "/*/*.js"),
				PHP.fn("glob")(args[1] + "/*/*/*.js"), PHP.fn("glob")(args[1] + "/*/*/*/*.js"))
		: [ args[1] ],
	failedCompile = 0, failedCompiled = 0, failedAssert = 0, passed = 0;

try {
	files.forEach(function (f) {
		ast = parse(PHP.fn("file_get_contents")(f), { file: PHP.fn("realpath")(f) });

		if (!ast[0]) {
			puts(">>>");
			puts(">>> syntax error in " + f + "@" + ast[2].line + ":" + ast[2].column +
				", expected " + ast[2].expected.join(", "));
			puts(">>>\n");

			++failedCompile;
			return;
		}

		code = compile(ast[1]);
		call = @@ eval(`code) @@;

		if (call === false) {
			var tmpFile = PHP.fn("sys_get_temp_dir")() + "/js2php.last.php";
			puts(">>>");
			puts(">>> " + f + " compiled badly, dumping contents to " + tmpFile);
			puts(">>>\n");

			PHP.fn("file_put_contents")(tmpFile, code);
			++failedCompiled;
			return;
		}

		try {
			@@
				$trace = $global->trace;
				$trace_sp = $global->trace_sp;
				`call($global);
				$global->trace = $trace;
				$global->trace_sp = $trace_sp;
			@@
			++passed;
			putc(".");

		} catch (e) {
			@@ $global->trace = $trace; @@
			if (e instanceof AssertionFailed) {
				puts("\n>>>");
				puts(">>> FILE: " + f + ", TEST: " + currentTest);
				puts(">>>");
				puts(">>>   assertion #" + assertionsCount + " failed: " + e.message);
				puts(">>>");
				puts(">>>");

				++failedAssert;

			} else {
				throw e;
			}
		}
	});

} catch (e) {
	puts();
	puts(e.name + ": " + e.message + " in " + e.file + "@" + e.line + ":" + e.column);
	var trace = @@ JS::fromNative($global->trace) @@;
	trace.reverse().forEach(function (t) {
		puts("  " + t[0] + (t[1] !== null ? "@" + t[1] + ":" + t[2] : ""));
	});
	puts();

} finally {
	puts("\n>>>");
	puts(">>> " + passed + " passed, " + failedCompile + " failed to compile, " +
		failedCompiled + " compiled code failed, " + failedAssert + " failed assert");
	puts(">>>");
}
