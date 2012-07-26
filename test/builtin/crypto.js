var crypto = require("crypto");

test("crypto.createHash()", function () {
	assertEqual(crypto.createHash("md5").update("a").digest("hex"),
		"0cc175b9c0f1b6a831c399e269772661");

	assertEqual(crypto.createHash("md5").update("a").digest("base64"),
		"DMF1ucDxtqgxw5niaXcmYQ==");

	assertEqual(PHP.fn("base64_encode")(crypto.createHash("md5").update("a").digest()),
		"DMF1ucDxtqgxw5niaXcmYQ==");

	assertEqual(crypto.createHash("md5").update("a").update("b").update("c").digest("hex"),
		"900150983cd24fb0d6963f7d28e17f72");

	assertEqual(crypto.createHash("md5").update("a").update("b").update("c").digest("base64"),
		"kAFQmDzST7DWlj99KOF/cg==");

	assertEqual(PHP.fn("base64_encode")(crypto.createHash("md5").update("a").update("b").update("c").digest()),
		"kAFQmDzST7DWlj99KOF/cg==");

	assertEqual(crypto.createHash("sha1").update("a").digest("hex"),
		"86f7e437faa5a7fce15d1ddcb9eaeaea377667b8");

	assertEqual(crypto.createHash("sha1").update("a").digest("base64"),
		"hvfkN/qlp/zhXR3cuerq6jd2Z7g=");

	assertEqual(PHP.fn("base64_encode")(crypto.createHash("sha1").update("a").digest()),
		"hvfkN/qlp/zhXR3cuerq6jd2Z7g=");

	try {
		crypto.createHash("md5").digest("bleh");
		assert(false, "did not throw");
	} catch (e) {
	}
});

test("crypto.createHmac()", function () {
	assertEqual(crypto.createHmac("md5", "key").update("a").digest("hex"),
		"80ea44ccea14cc2263889567cfacccd7");

	assertEqual(crypto.createHmac("md5", "key").update("a").digest("base64"),
		"gOpEzOoUzCJjiJVnz6zM1w==");

	assertEqual(PHP.fn("base64_encode")(crypto.createHmac("md5", "key").update("a").digest()),
		"gOpEzOoUzCJjiJVnz6zM1w==");

	assertEqual(crypto.createHmac("md5", "key").update("a").update("b").update("c").digest("hex"),
		"d2fe98063f876b03193afb49b4979591");

	assertEqual(crypto.createHmac("md5", "key").update("a").update("b").update("c").digest("base64"),
		"0v6YBj+HawMZOvtJtJeVkQ==");

	assertEqual(PHP.fn("base64_encode")(crypto.createHmac("md5", "key").update("a").update("b").update("c").digest()),
		"0v6YBj+HawMZOvtJtJeVkQ==");

	assertEqual(crypto.createHmac("sha1", "key").update("a").digest("hex"),
		"0db21f05052f323e714ef9bf1f7b000ffe97e8a0");

	assertEqual(crypto.createHmac("sha1", "key").update("a").digest("base64"),
		"DbIfBQUvMj5xTvm/H3sAD/6X6KA=");

	assertEqual(PHP.fn("base64_encode")(crypto.createHmac("sha1", "key").update("a").digest()),
		"DbIfBQUvMj5xTvm/H3sAD/6X6KA=");

	try {
		crypto.createHmac("md5", "key").digest("bleh");
		assert(false, "did not throw");
	} catch (e) {
	}
});

test("crypto.md5()", function () {
	assertEqual(crypto.md5(""), "d41d8cd98f00b204e9800998ecf8427e");
});

test("crypto.sha1()", function () {
	assertEqual(crypto.sha1(""), "da39a3ee5e6b4b0d3255bfef95601890afd80709");
});
