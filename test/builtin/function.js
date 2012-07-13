function F(that, msg) {
	assert(this === that, msg);
}

var o = {};

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
