test("new Date", function() {
  assertEqual(1970, new Date(9876543210).getFullYear());
});

test("string coercion", function() {
  // !!! specification does not say it has to have this format
  //
  // assert(/^Sat Apr 25 1970 /.test(String(new Date(9876543210))), "string did not start with what was expected, it is: " + String(new Date(9876543210)));
});

test("number coercion", function() {
  //assertEqual(9876543210, Number(new Date(9876543210)));
});

test("calling date without new gives current date as string", function() {
  assertEqual("string", typeof Date());
  assert("Sat Apr 25 1970 17:29:03 GMT+1000 (EST)" !== String(Date(9876543210)));
});

test("date prefers to be coerced to a number", function() {
  // this is true:
  // String(new Date(9876543211)) < String(new Date(0))
  // because that ends up as:
  // "Sat Apr 25 1970 17:29:03 GMT+1000 (EST)" < "Thu Jan 01 1970 10:00:00 GMT+1000 (EST)"
  // which is true in the string sense.
  // implicit number corecion should go the other way
  assert(new Date(9876543211) > new Date(0), "implicit (to number) coercion goes the other way");
});

test("getDate", function() {
  assertEqual(25, new Date(9876543210).getDate());
  assertEqual(12, new Date(1350000000000).getDate());
});

test("getDay", function() {
  assertEqual(6, new Date(9876543210).getDay());
  assertEqual(5, new Date(1350000000000).getDay());
});

test("getFullYear", function() {
  assertEqual(1970, new Date(9876543210).getFullYear());
  assertEqual(2012, new Date(1350000000000).getFullYear());
});

test("getYear", function() {
  assertEqual(70, new Date(9876543210).getYear());
  assertEqual(112, new Date(1350000000000).getYear());
});

test("getMilliseconds", function() {
  assertEqual(210, new Date(9876543210).getMilliseconds());
  assertEqual(0, new Date(1350000000000).getMilliseconds());
});

test("getMinutes", function() {
  assertEqual(29, new Date(9876543210).getMinutes());
  assertEqual(0, new Date(1350000000000).getMinutes());
});

test("getTime", function() {
  assertEqual(9876543210, new Date(9876543210).getTime());
  assertEqual(1350000000000, new Date(1350000000000).getTime());
});

test("UTC", function() {
  // not implemented
  /*
  assertEqual(776307723004, Date.UTC(1994, 7, 8, 1, 2, 3, 4));
  assertEqual(775699200000, Date.UTC(1994, 7));
  assert(isNaN(Date.UTC()));
  */
});
