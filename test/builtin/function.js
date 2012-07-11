function F(that, msg) {
	assert(this === that, msg);
}


var o = {};
F.apply(o, [o, "Function.prototype.apply(): wrong this"]);


F.call(o, o, "Function.prototype.call(): wrong this");


G = F.bind(o, o, "Function.prototype.bind(): wrong this");
G();
