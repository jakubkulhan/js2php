test("require()", function () {
	assertEqual(require(__dirname + "/.require_fixtures/foo.js"), "foo");
	assertEqual(require("./.require_fixtures/foo.js"), "foo");
	assertEqual(require("../builtin/.require_fixtures/foo.js"), "foo");

	assertEqual(require("./.require_fixtures/module.js"), "foo");

	var bar = require("./.require_fixtures/bar");
	assertEqual(typeof bar, "object");
	assertEqual(Object.keys(bar).toString(), "hello");
	assertEqual(bar.hello, "world");

	assertEqual(require("./.require_fixtures/package"), "foo");

	assertEqual(require("foo"), "Jeph's foo");
	assertEqual(require("bar"), "Node's bar");

	assertEqual(require("./.require_fixtures/baz").baz(), "baz");
});
