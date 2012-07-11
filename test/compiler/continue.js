var count, i;

for (count = 0, i = 0; i < 10; ++i) {
	if (i & 1) { continue; }
	count++;
}

assert(count === 5);

count = i = 0;
while (i < 10) {
	if (i++ & 1) { continue; }
	count++;
}

assert(count === 5);

count = i = 0;
do {
	if (i++ & 1) { continue; }
	count++;
} while (i < 9);

assert(count === 5);
