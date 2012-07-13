test("php", function () {
	var ok = true, fail = true;

	@@ `fail = FALSE; @@

	assert(@@ TRUE @@);
	assert(@@ `ok @@);
	assert(!fail);
});
