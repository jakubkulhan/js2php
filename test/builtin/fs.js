var fs = require("fs"),
	Buffer = require("buffer").Buffer,
	fixturesDir = __dirname + "/.fs_fixtures";
	a = __dirname + "/.fs_fixtures/a",
	b = __dirname + "/.fs_fixtures/b";


test("fs.rename()", function () {
	PHP.fn("touch")(a);
	fs.renameSync(a, b);

	PHP.fn("touch")(a);
	fs.rename(a, b, function (err) {
		assert(!err);
		assert(!PHP.fn("file_exists")(a));
		assert(PHP.fn("file_exists")(b));
		PHP.fn("unlink")(b);
	});
});

test("fs.truncate()", function () {
	// TODO
});

test("fs.chown()", function () {
	// must be run as root
});

test("fs.chmod()", function () {
	PHP.fn("touch")(a);
	fs.chmodSync(a, 0);
	@@ clearstatcache(); @@
	assertEqual(PHP.fn("stat")(a).mode & 0777, 0);

	fs.chmod(a, 0777, function (err) {
		assert(!err);
		@@ clearstatcache(); @@
		assertEqual(PHP.fn("stat")(a).mode & 0777, 0777);
		PHP.fn("unlink")(a);
	});
});

test("fs.stat()", function () {
	assert(fs.statSync(fixturesDir).isDirectory());

	PHP.fn("touch")(a)
	fs.statSync(a, function (err, stats) {
		assert(!err);
		assert(stats.isFile());
		PHP.fn("unlink")(a);
	});

	assert(fs.statSync("/dev/zero").isCharacterDevice());
	assert(fs.statSync("/dev/fd0").isBlockDevice());
	PHP.fn("symlink")(a, b);
	assert(fs.statSync(a).isSymbolicLink());
	PHP.fn("unlink")(a);
	PHP.fn("unlink")(b);
	assert(fs.statSync("/dev/log").isSocket());
});

test("fs.link()", function () {
	PHP.fn("file_put_contents")(a, "a");
	fs.linkSync(a, b);
	assert(PHP.fn("file_exists")(b));
	assertEqual(PHP.fn("file_get_contents")(a), PHP.fn("file_get_contents")(b));
	PHP.fn("unlink")(a);
	PHP.fn("unlink")(b);

	PHP.fn("file_put_contents")(a, "a");
	fs.link(a, b, function (err) {
		assert(!err);
		assert(PHP.fn("file_exists")(b));
		assertEqual(PHP.fn("file_get_contents")(a), PHP.fn("file_get_contents")(b));
		PHP.fn("unlink")(a);
		PHP.fn("unlink")(b);
	});
});

test("fs.symlink()", function () {
	PHP.fn("file_put_contents")(a, "a");
	fs.symlinkSync(a, b);
	assert(PHP.fn("file_exists")(b));
	assertEqual(PHP.fn("file_get_contents")(a), PHP.fn("file_get_contents")(b));
	PHP.fn("unlink")(a);
	PHP.fn("unlink")(b);

	PHP.fn("file_put_contents")(a, "a");
	fs.symlink(a, b, function (err) {
		assert(!err);
		assert(PHP.fn("file_exists")(b));
		assertEqual(PHP.fn("file_get_contents")(a), PHP.fn("file_get_contents")(b));
		PHP.fn("unlink")(a);
		PHP.fn("unlink")(b);
	});
});

test("fs.readlink()", function () {
	PHP.fn("touch")(a);
	PHP.fn("symlink")(a, b);
	assertEqual(fs.readlinkSync(b), a);
	fs.readlink(b, function (err, file) {
		assert(!err);
		assertEqual(file, a);
		PHP.fn("unlink")(a);
		PHP.fn("unlink")(b);
	});
});

test("fs.realpath()", function () {
	PHP.fn("touch")(a);
	PHP.fn("symlink")(a, b);
	assertEqual(fs.realpathSync(b), a);
	fs.realpath(b, function (err, path) {
		assert(!err);
		assertEqual(path, a);
		PHP.fn("unlink")(a);
		PHP.fn("unlink")(b);
	});
});

test("fs.unlink()", function () {
	PHP.fn("touch")(a);
	assert(PHP.fn("file_exists")(a));
	fs.unlinkSync(a);
	assert(!PHP.fn("file_exists")(a));

	PHP.fn("touch")(a);
	assert(PHP.fn("file_exists")(a));
	fs.unlink(a, function (err) {
		assert(!err);
		assert(!PHP.fn("file_exists")(a));
	});
});

test("fs.rmdir()", function () {
	PHP.fn("mkdir")(a);
	assert(PHP.fn("file_exists")(a));
	fs.rmdirSync(a);
	assert(!PHP.fn("file_exists")(a));

	PHP.fn("mkdir")(a);
	assert(PHP.fn("file_exists")(a));
	fs.rmdir(a, function (err) {
		assert(!err);
		assert(!PHP.fn("file_exists")(a));
	});
});

test("fs.mkdir()", function () {
	assert(!PHP.fn("file_exists")(a));
	fs.mkdirSync(a);
	assert(PHP.fn("file_exists")(a));
	assert(PHP.fn("is_dir")(a));
	PHP.fn("rmdir")(a);

	assert(!PHP.fn("file_exists")(a));
	fs.mkdir(a, function (err) {
		assert(!err);
		assert(PHP.fn("file_exists")(a));
		assert(PHP.fn("is_dir")(a));
		PHP.fn("rmdir")(a);
	});
});

test("fs.readdir()", function () {
	PHP.fn("touch")(a);
	PHP.fn("touch")(b);
	assertEqual(fs.readdirSync(fixturesDir).sort().toString(), ".dummy,a,b");
	fs.readdir(fixturesDir, function (err, files) {
		assert(!err);
		assertEqual(files.sort().toString(), ".dummy,a,b");
		PHP.fn("unlink")(a);
		PHP.fn("unlink")(b);
	});
});

test("fs.utimes()", function () {
	PHP.fn("touch")(a);
	fs.utimesSync(a, 0, 0);
	fs.utimes(a, 0, 0, function (err) {
		assert(!err);
		PHP.fn("unlink")(a);
	});
});

test("fs.open(), fs.close()", function () {
	assert(!PHP.fn("file_exists")(a));
	try {
		fs.openSync(a, "r");
		assert(false, "did not throw");
	} catch (e) {}
	assert(!PHP.fn("file_exists")(a));

	assert(!PHP.fn("file_exists")(a));
	var fd = fs.openSync(a, "w");
	fs.closeSync(fd);
	assert(PHP.fn("file_exists")(a));
	PHP.fn("unlink")(a);

	assert(!PHP.fn("file_exists")(a));
	var fd = fs.openSync(a, "a");
	fs.closeSync(fd);
	assert(PHP.fn("file_exists")(a));
	PHP.fn("unlink")(a);

	assert(!PHP.fn("file_exists")(a));
	fs.open(a, "r", function (err, fd) {
		assert(err);
		assert(!fd);
	});

	assert(!PHP.fn("file_exists")(a));
	fs.open(a, "w", function (err, fd) {
		assert(!err);
		assert(fd);
		fs.close(fd, function (err) {
			assert(!err);
			assert(PHP.fn("file_exists")(a));
			PHP.fn("unlink")(a);
		});
	});

	assert(!PHP.fn("file_exists")(a));
	fs.open(a, "a", function (err, fd) {
		assert(!err);
		assert(fd);
		fs.close(fd, function (err) {
			assert(!err);
			assert(PHP.fn("file_exists")(a));
			PHP.fn("unlink")(a);
		});
	});
});

test("fs.write()", function () {
	var buf = new Buffer("abc");

	fs.open(a, "w", function (err, fd) {
		assert(!err);
		assertEqual(fs.writeSync(fd, buf, 0, 3, null), 3);
		fs.closeSync(fd);
		assertEqual(PHP.fn("file_get_contents")(a), "abc");
		PHP.fn("unlink")(a);
	});

	fs.open(a, "w", function (err, fd) {
		assert(!err);
		fs.write(fd, buf, 0, 3, null, function (err, bytesWritten) {
			assert(!err);
			assertEqual(bytesWritten, 3);
			fs.closeSync(fd);
			assertEqual(PHP.fn("file_get_contents")(a), "abc");
			PHP.fn("unlink")(a);
		});
	});
});

test("fs.read()", function () {
	PHP.fn("file_put_contents")(a, "abc");

	fs.open(a, "r", function (err, fd) {
		assert(!err);
		var buf = new Buffer("cde");
		assertEqual(fs.readSync(fd, buf, 0, 3, null), 3);
		assertEqual(buf.toString(), "abc");

		var buf = new Buffer("cde");
		fs.read(fd, buf, 0, 3, 0, function (err, bytesRead, buf) {
			assert(!err);
			assertEqual(bytesRead, 3);
			assertEqual(buf.toString(), "abc");
			fs.closeSync(fd);
			PHP.fn("unlink")(a);
		});
	});
});

test("fs.readFile()", function () {
	PHP.fn("file_put_contents")(a, "readFile");
	assertEqual(fs.readFileSync(a).toString(), "readFile");
	assertEqual(fs.readFileSync(a, "utf8"), "readFile");
	try { fs.readlinkSync(a, "cp1250"); assert(false, "did not throw"); } catch (e) {}
	fs.readFile(a, function (err, data) {
		assert(!err);
		assertEqual(data.toString(), "readFile");
		PHP.fn("unlink")(a);
	});
});

test("fs.writeFile()", function () {
	fs.writeFileSync(a, "writeFileSync");
	assertEqual(PHP.fn("file_get_contents")(a), "writeFileSync");

	fs.writeFile(a, "writeFile", function (err) {
		assert(!err);
		assertEqual(PHP.fn("file_get_contents")(a), "writeFile");
		PHP.fn("unlink")(a);
	});
});

test("fs.appendFile()", function () {
	fs.appendFile(a, "append");
	assertEqual(PHP.fn("file_get_contents")(a), "append");

	fs.appendFile(a, "append", function (err) {
		assert(!err);
		assertEqual(PHP.fn("file_get_contents")(a), "appendappend");
		PHP.fn("unlink")(a);
	});
});

test("fs.exits()", function () {
	assert(!fs.existsSync(a));
	PHP.fn("touch")(a);
	fs.exists(a, function (exists) {
		assert(exists);
		PHP.fn("unlink")(a);
	});
});
