var Buffer = require("buffer").Buffer;

test("Buffer()", function () {
	assertEqual((new Buffer(3)).length, 3);
	assertEqual((new Buffer("abc")).length, 3);
	assertEqual((new Buffer([0x61, 0x62, 0x63])).length, 3);

	try {
		new Buffer({});
		assert(false, "did not throw");
	} catch (e) {}
});

test("Buffer.isBuffer()", function () {
	assert(Buffer.isBuffer(new Buffer(5)));
	assert(!Buffer.isBuffer(5));
});

test("Buffer.byteLength()", function () {
	assertEqual(Buffer.byteLength("abc"), 3);
});

test("Buffer.concat()", function () {
	assertEqual(Buffer.concat([]).length, 0);
	var b = new Buffer(5);
	assertEqual(Buffer.concat([b]), b);
	assertEqual(Buffer.concat([new Buffer(5), new Buffer(5)]).length, 10);
	assertEqual(Buffer.concat([new Buffer(5), new Buffer(5)], 8).length, 8);
});

test("Buffer.prototype.write()", function () {
	var b = new Buffer(3);
	b.write("abc");
	assertEqual(b.toString(), "abc");
	b.write("abc", 1);
	assertEqual(b.toString(), "aab");
	b.write("bbb", 0, 1);
	assertEqual(b.toString(), "bab");
});

test("Buffer.prototype.toString()", function () {
	assertEqual((new Buffer("abc")).toString(), "abc");
});

test("Buffer.prototype.copy()", function () {
	var b1 = new Buffer("abc"), b2 = new Buffer(3);
	b1.copy(b2);
	assertEqual(b2.toString(), "abc");
});

test("Buffer.prototype.slice()", function () {
	var b = new Buffer("aahojky");
	assertEqual(b.slice(1, 5).toString(), "ahoj");
});

test("Buffer.prototype.fill()", function () {
	var b = new Buffer(5);
	b.fill("a");
	assertEqual(b.toString(), "aaaaa");
});
