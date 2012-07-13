test("for", function () {
	for (var i = 0, j = 5; j > 0; ++i, --j);

	assert(i === 5);
	assert(j === 0);
});
