var a = Array(3);
assert(a.length === 3, "Array(): wrong length");
assert(a[0] === undefined && a[1] === undefined && a[2] === undefined, "Array(): wrong values");
try {
	Array(-5);
	assert(false, "Array(): should throw when negative length");
} catch (e) {
	assert(e instanceof RangeError, "Array(): should throw RangeError");
}


var a = Array(1, 2, 3);
assert(a.length === 3, "Array(): wrong length 2");
assert(a[0] === 1 && a[1] === 2 && a[2] === 3, "Array(): wrong values 2");


var a = new Array(1, 2, 3);
assert(a.length === 3, "Array(): wrong length 2");
assert(a[0] === 1 && a[1] === 2 && a[2] === 3, "Array(): wrong values 2");


assert(Array.isArray([]), "Array.isArray(): 1");
assert(!Array.isArray(undefined), "Array.isArray(): 2");
assert(!Array.isArray(null), "Array.isArray(): 3");
assert(!Array.isArray(true), "Array.isArray(): 4");
assert(!Array.isArray(42), "Array.isArray(): 5");
assert(!Array.isArray("hello, world!"), "Array.isArray(): 6");
assert(!Array.isArray({}), "Array.isArray(): 7");


assert([1, 2, 3].toString() === "1,2,3", "Array.prototype.toString(): 1");
assert([].toString() === "", "Array.prototype.toString(): 2");
assert([1, 2, 3, undefined].toString() === "1,2,3,", "Array.prototype.toString(): 3");
assert([1, 2, 3, [4]].toString() === "1,2,3,4", "Array.prototype.toString(): 4");


var a = [];
assert(a.length === 0, "Array.prototype.concat(): 0");
a = a.concat(1);
assert(a.length === 1 && a[0] === 1, "Array.prototype.concat(): 1");
a = a.concat([2]);
assert(a.length === 2 && a[1] === 2, "Array.prototype.concat(): 2");
a = a.concat(3, 4);
assert(a.length === 4 && a[2] === 3 && a[3] === 4, "Array.prototoype.concat(): 3");
a = a.concat([5], [6], [7]);
assert(a.length === 7 && a[4] === 5 && a[5] === 6 && a[6] === 7, "Array.prototype.concat(): 4");


assert([1, 2, 3, 4, 5].join() === "1,2,3,4,5", "Array.prototype.join(): 1");
assert([1, 2, 3, 4, 5].join(" !! ") === "1 !! 2 !! 3 !! 4 !! 5", "Array.prototype.join(): 2");


var a = [1, 2];
assert(a.pop() === 2, "Array.prototype.pop(): 1");
assert(a.pop() === 1, "Array.prototype.pop(): 2");
assert(a.pop() === undefined, "Array.prototype.pop(): 3");
assert(a.length === 0, "Array.prototype.pop(): 4");


var a = [];
a.push(1);
assert(a.length === 1 && a[0] === 1, "Array.prototype.push(): 1");
a.push(2, 3);
assert(a.length === 3 && a[1] === 2 && a[2] === 3, "Array.prototype.push(): 2");
a.push(undefined);
assert(a.length === 4 && a[3] === undefined, "Array.prototype.push(): 3");


var a = [1, 2, 3].reverse();
assert(a.length === 3 && a[0] === 3 && a[1] === 2 && a[2] === 1, "Array.prototype.reverse(): 1");


var a = [1, 2];
assert(a.shift() === 1, "Array.prototype.shift(): 1");
assert(a.shift() === 2, "Array.prototype.shift(): 2");
assert(a.shift() === undefined, "Array.prototype.shift(): 3");
assert(a.length === 0, "Array.prototype.shift(): 4");


var a = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10], b;
b = a.slice(0, 1);
assert(b.length === 1 && b[0] === 1, "Array.prototype.slice(): 1");
b = a.slice(1, 3);
assert(b.length === 2 && b[0] === 2 && b[1] === 3, "Array.prototype.slice(): 2");
b = a.slice(9);
assert(b.length === 1 && b[0] === 10, "Array.prototype.slice(): 3");
b = a.slice(-1);
assert(b.length === 1 && b[0] === 10, "Array.prototype.slice(): 4");
b = a.slice(-3, -1);
assert(b.length === 2 && b[0] === 8 && b[1] === 9, "Array.prototype.slice(): 5");


var a = [2, 4, 3, 5, 1], b;
b = a.sort();
assert(b.length === 5 && b[0] === 1 && b[1] === 2 && b[2] === 3 && b[3] === 4 && b[4] === 5,
	"Array.prototype.sort(): 1");


var a = [1, 2, 3], b;
b = a.splice(0, 3);
assert(b.length === 3 && b[0] === 1 && b[1] === 2 && b[2] === 3 && a.length === 0,
	"Array.prototype.splice(): 1");
a = b.splice(0, 1, 4);
assert(a.length === 1 && a[0] === 1 && b.length === 3 && b[0] === 4, "Array.prototype.splice(): 2");


var a = [];
a.unshift(1);
assert(a.length === 1 && a[0] === 1, "Array.prototype.unshift(): 1");
a.unshift(2, 3);
assert(a.length === 3 && a[0] === 2 && a[1] === 3 && a[2] === 1, "Array.prototype.unshift(): 2");
var a = [];
a.unshift(1, 2, 3);
assert(a.length === 3 && a[0] === 1 && a[1] === 2 && a[2] === 3, "Array.prototype.unshift(): 3");


var a = [1, 2, 3, 4, 5];
assert(a.indexOf(2) === 1, "Array.prototype.indexOf(): 1");
assert(a.indexOf(2, 1) === 1, "Array.prototype.indexOf(): 2");
assert(a.indexOf(2, 2) === -1, "Array.prototype.indexOf(): 3");
assert(a.indexOf(5, -1) === 4, "Array.prototype.indexOf(): 4");
assert(a.indexOf(5, -6) === 4, "Array.prototype.indexOf(): 5");


var a = [1, 2, 3, 2, 1];
assert(a.lastIndexOf(2) === 3, "Array.prototype.lastIndexOf(): 1");
assert(a.lastIndexOf(2, 3) === 3, "Array.prototype.lastIndexOf(): 2");
assert(a.lastIndexOf(2, 4) === -1, "Array.prototype.lastIndexOf(): 3");
assert(a.lastIndexOf(2, -1) === -1, "Array.prototype.lastIndexOf(): 4");
assert(a.lastIndexOf(2, -2) === 3, "Array.prototype.lastIndexOf(): 5");


assert([true, true, true].every(function (x) { return x; }), "Array.prototype.every(): 1");
assert(![true, false, true].every(function (x) { return x; }), "Array.prototype.every(): 2");


assert([true, false, false].some(function (x) { return x; }), "Array.prototype.some(): 1");
assert(![false, false, false].some(function (x) { return x; }), "Array.prototype.some(): 2");


var n = 0;
[1, 2, 3, 4].forEach(function (x) { n += x; })
assert(n === 1 + 2 + 3 + 4, "Array.prototype.forEach(): 1");


var a = [1, 2, 3].map(function (x) { return x * x; });
assert(a.length === 3 && a[0] === 1 && a[1] === 4 && a[2] === 9, "Array.prototype.map(): 1");


var a = [1, 2, 3, 4].filter(function (x) { return x & 1; });
assert(a.length === 2 && a[0] === 1 && a[1] === 3, "Array.prototype.filter(): 1");


assert([1, 2, 3, 4].reduce(function (a, b) { return a + b; }) === 10, "Array.prototype.reduce(): 1");
assert([2, 3, 4].reduce(function (a, b) { return a + b; }, 1) === 10, "Array.prototype.reduce(): 2");
assert([8, 4, 2].reduce(function (a, b) { return a / b; }) === 1, "Array.prototype.reduce(): 3");


assert([1, 2, 3, 4].reduceRight(function (a, b) { return a + b; }) === 10, "Array.prototype.reduceRight(): 1");
assert([1, 2, 3].reduceRight(function (a, b) { return a + b; }, 4) === 10, "Array.prototype.reduceRight(): 2");
assert([2, 4, 8].reduceRight(function (a, b) { return a / b; }) === 1, "Array.prototype.reduceRight(): 3");
