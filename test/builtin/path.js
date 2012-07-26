var path = require("path");

test("path.normalize()", function () {
	assertEqual(path.normalize("a//b/c//d///"), "a/b/c/d");
	assertEqual(path.normalize("//a//b/c//d///"), "/a/b/c/d");
	assertEqual(path.normalize("/../../.."), "/");
	assertEqual(path.normalize("./a/./b/./c/./d///"), "a/b/c/d");
	assertEqual(path.normalize("a/../b/../c/../d"), "d");
});

test("path.join()", function () {
	assertEqual(path.join("a/", "/b", "/c", "//d///"), "a/b/c/d");
	assertEqual(path.join("//a", "//b", "/c//d", "///"), "/a/b/c/d");
	assertEqual(path.join("/../", "..", ".."), "/");
	assertEqual(path.join("./", "a/./b/./c", "./d///"), "a/b/c/d");
	assertEqual(path.join("a/../b", "../c/../d"), "d");
});

test("path.resolve()", function () {
	assertEqual(path.resolve("/foo/bar", "./baz"), "/foo/bar/baz");
	assertEqual(path.resolve("/foo/bar", "/tmp/file"), "/tmp/file");
	assertEqual(path.resolve("wwwroot", "static_files/png/", "../gif/image.gif"),
		PHP.fn("getcwd")() + "/wwwroot/static_files/gif/image.gif");
});

test("path.relative()", function () {
	assertEqual(path.relative("/", "/home/jakub/js2php"), "home/jakub/js2php");
	assertEqual(path.relative("/a/b/c", "/a/b/c"), "");
	assertEqual(path.relative("/a/b/c", "/"), "../../..");
	assertEqual(path.relative("/data/orandea/test/aaa", "/data/orandea/impl/bbb"), "../../impl/bbb");
});

test("path.dirname()", function () {
	assertEqual(path.dirname("a/b/c"), "a/b");
	assertEqual(path.dirname(".."), ".");
	assertEqual(path.dirname("../.."), "..");
	assertEqual(path.dirname(""), ".");
});

test("path.basename()", function () {
	assertEqual(path.basename("a/b/c.html"), "c.html");
	assertEqual(path.basename("a/b/c.html", ".html"), "c");
});

test("path.extname()", function () {
	assertEqual(path.extname("index.html"), ".html");
	assertEqual(path.extname("index."), ".");
	assertEqual(path.extname("index"), "");
	assertEqual(path.extname(".."), "");
	assertEqual(path.extname("."), "");
	assertEqual(path.extname(".htaccess"), "");
});
