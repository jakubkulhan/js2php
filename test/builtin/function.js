test("Function()", function () {
	var F = new Function();
	assertEqual(F(), undefined);

	var n = 1, F = new Function("n++");
	F();
	assertEqual(n, 2, "function does not get current scope");

	var F = new Function("a", "b", "c", "return a + b + c;");
	assert(isNaN(F()));
	assertEqual(F("a"), "aundefinedundefined");
	assertEqual(F("a", "b"), "abundefined");
	assertEqual(F("a", "b", "c"), "abc");

	var F = new Function("a,b,c", "return a + b + c;");
	assert(isNaN(F()));
	assertEqual(F("a"), "aundefinedundefined");
	assertEqual(F("a", "b"), "abundefined");
	assertEqual(F("a", "b", "c"), "abc");

	var F = new Function("a,b", "c", "return a + b + c;");
	assert(isNaN(F()));
	assertEqual(F("a"), "aundefinedundefined");
	assertEqual(F("a", "b"), "abundefined");
	assertEqual(F("a", "b", "c"), "abc");
});

function F(that, msg) {
	assert(this === that, msg);
}

var o = {};

test("Function.prototype.toString()", function () {
	var FString = F.toString();
	assert(/^function F/.test(FString));
	assert(/\(.*that.*\)/.test(FString));
	assert(/\(.*msg.*\)/.test(FString));
	assert(/assert/.test(FString));

	var G = function () { return 42; },
		GString = G.toString(),
		GNew = eval("return " + GString + ";");

	assertEqual(G(), GNew());
	assertEqual(G.toString(), GNew.toString());
});

test("Function.prototype.apply()", function () {
	F.apply(o, [o, "Function.prototype.apply(): wrong this"]);
});

test("Function.prototype.call()", function () {
	F.call(o, o, "Function.prototype.call(): wrong this");
});

test("Function.prototype.bind()", function () {
	G = F.bind(o, o, "Function.prototype.bind(): wrong this");
	G();
	var F = function () { return this; }, G = F.bind({ hello: "world" });
	assert((new G).hello === undefined, "Function.prototype.bind(): should not be bound when called as constructor");
});
