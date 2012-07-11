assert(typeof Date(1992, 9, 21) === "string", "Date(): 1");

var d1 = new Date(Date.parse("1992-09-21 02:53:03")),
	d2 = new Date(1992, 9, 21, 2, 53, 3),
	d = d1;

assert(d1.valueOf() === d2.valueOf());


assert(d.getFullYear() === 1992);
assert(d.getMonth() === 9);
assert(d.getDate() === 21);
assert(d.getHours() === 2);
assert(d.getMinutes() === 53);
assert(d.getSeconds() === 3);
assert(d.getMilliseconds() === 0);

d.setFullYear(2012);
d.setMonth(7);
d.setDate(11);
d.setHours(2);
d.setMinutes(35);
d.setSeconds(59);
d.setMilliseconds(736);

assert(d.getFullYear() === 2012);
assert(d.getMonth() === 7);
assert(d.getDate() === 11);
assert(d.getHours() === 2);
assert(d.getMinutes() === 35);
assert(d.getSeconds() === 59);
assert(d.getMilliseconds() === 736);
