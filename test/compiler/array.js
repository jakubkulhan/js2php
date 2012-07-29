test("array", function () {
	var a = [ 1, 2, 3 ];

	assertEqual(Object.keys(a).join(), "0,1,2");

	a[4] = 5;
	assertEqual(Object.keys(a).join(), "0,1,2,4");

	a.length = 7;
	assertEqual(Object.keys(a).join(), "0,1,2,4");

	a.length = 2;
	assertEqual(Object.keys(a).join(), "0,1");
});
