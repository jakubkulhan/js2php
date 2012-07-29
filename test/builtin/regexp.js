test("RegExp()", function () {
	var r = RegExp("a");
	assert(r instanceof RegExp, "RegExp(): wrong instance");
	assert(r.source === "a", "RegExp(): wrong source");
	assert(r.global === false, "RegExp(): wrong global");
	assert(r.ignoreCase === false, "RegExp(): wrong ignore case");
	assert(r.multiline === false, "RegExp(): wrong multiline");

	var r = new RegExp("b", "gim");
	assert(r instanceof RegExp, "RegExp(): wrong instance 2");
	assert(r.source === "b", "RegExp(): wrong source 2");
	assert(r.global === true, "RegExp(): wrong global 2");
	assert(r.ignoreCase === true, "RegExp(): wrong ignore case 2");
	assert(r.multiline === true, "RegExp(): wrong multiline 2");

	var r = /c/g;
	assert(r instanceof RegExp, "RegExp(): wrong instance 3");
	assert(r.source === "c", "RegExp(): wrong source 3");
	assert(r.global === true, "RegExp(): wrong global 3");
	assert(r.ignoreCase === false, "RegExp(): wrong ignore case 3");
	assert(r.multiline === false, "RegExp(): wrong multiline 3");
});

test("RegExp.prototype.exec()", function () {
	var r = /c/g;
	assert(r.exec("baba") === null, "RegExp.prototype.exec(): should not match");

	var r = /a/g, m = r.exec("baba");
	assertNotEqual(m, null, "RegExp.prototype.exec(): should match");
	assert(m.length === 1 && m[0] === "a", "RegExp.prototype.exec(): wrong match");
	assert(m.index === 1, "RegExp.prototype.exec(): wrong index");
	assert(m.input === "baba", "RegExp.prototype.exec(): wrong input");
	assert(r.lastIndex === 2, "RegExp.prototype.exec(): wrong regexp.lastIndex");

	var r = /a/, m = r.exec("baba");
	assert(r.lastIndex === 0, "RegExp.prototype.exec(): should not change lastIndex");

	var r = /(a)(b)/, m = r.exec("abab");
	assert(m.length === 3 && m[0] === "ab" && m[1] === "a" && m[2] === "b",
		"RegExp.prototype.exec(): wrong match");
});

test("RegExp.prototype.test()", function () {
	assert(/a/.test("abab") === true, "RegExp.prototype.test(): 1");
	assert(/b/.test("abab") === true, "RegExp.prototype.test(): 2");
	assert(/c/.test("abab") === false, "RegExp.prototype.test(): 3");
});

test("RegExp.prototype.toString()", function () {
	assert(/a/.toString() === "/a/", "RegExp.prototype.toString(): 1");
	assert(/a/g.toString() === "/a/g", "RegExp.prototype.toString(): 2");
	assert(/a/i.toString() === "/a/i", "RegExp.prototype.toString(): 3");
	assert(/a/m.toString() === "/a/m", "RegExp.prototype.toString(): 4");
	assert(/a/gim.toString() === "/a/gim", "RegExp.prototype.toString(): 5");
});
