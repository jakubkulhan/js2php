var i = 0, j = 5;

do {
	i++;
	--j;
} while (j);

assert(i === 5);
assert(j === 0);
