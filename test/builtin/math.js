
// only wrappers for PHP functions:
//
//   abs, acos, asin, atan, atan2, ceil, cos, exp, floor, log,
//   pow, round, sin, sqrt, tan
//
//   won't be tested

test("Math.random()", function () {
	var r = Math.random();
	assert(r >= 0 && r <= 1, "Math.random()");
});

test("Math.max()", function () {
	assert(Math.max() === -Infinity, "Math.max(): 1");
	assert(Math.max(0) === 0, "Math.max(): 2");
	assert(Math.max(1, 2) === 2, "Math.max(): 3");
	assert(Math.max(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) === 10, "Math.max(): 4");
	assert(isNaN(Math.max(0, NaN)), "Math.max(): 5");
});

test("Math.min()", function () {
	assert(Math.min() === +Infinity, "Math.min(): 1");
	assert(Math.min(0) === 0, "Math.min(): 2");
	assert(Math.min(1, 2) === 1, "Math.min(): 3");
	assert(Math.min(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) === 1, "Math.min(): 4");
	assert(isNaN(Math.min(0, NaN)), "Math.min(): 5");
});
