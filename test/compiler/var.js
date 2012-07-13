test("var", function () {
	var
		u = undefined,
		n = null,
		t = true,
		i = 5,
		z = 0,
		s = "foo",
		e = "";

	assert(!u);
	assert(!n);
	assert(t);
	assert(i);
	assert(!z);
	assert(s);
	assert(!e);
});
