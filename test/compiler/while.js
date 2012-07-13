test("while", function () {
	var i = 0, j = 5;

	while (j) {
		++i;
		j--;
	}

	assert(i === 5);
	assert(j === 0);
});
