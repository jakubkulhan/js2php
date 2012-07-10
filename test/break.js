var i;

for (i = 0; ; ++i) {
	if (i === 42) { break; }
}

assert(i === 42);

i = 0;
while (true) {
	if (i === 42) { break; }
	i++;
}

assert(i === 42);

i = 0;
do {
	if (i === 42) { break; }
	++i;
} while (true);

assert(i === 42);
