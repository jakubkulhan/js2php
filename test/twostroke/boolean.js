test("toString", function() {
  assertEqual("true", true.toString());
  assertEqual("false", false.toString());
  try {
    Boolean.prototype.toString.call(123);
    assert(false, "did not throw");
  } catch(e) {
    assert(/generic/.test(e.toString()));
  }
});

test("valueOf", function() {
  assertEqual(true, true.valueOf());
  assertEqual(false, false.valueOf());
  try {
    Boolean.prototype.valueOf.call(123);
    assert(false, "did not throw");
  } catch(e) {
    assert(/generic/.test(e.toString()));
  }
});

test("String coercion", function() {
  assertEqual("true", String(true));
  assertEqual("false", String(false));
  assertEqual("true", String(new Boolean(true)));
  assertEqual("false", String(new Boolean(false)));
});

test("Number coercion", function() {
  assertEqual(1, Number(true));
  assertEqual(0, Number(false));
  assertEqual(1, Number(new Boolean(true)));
  assertEqual(0, Number(new Boolean(false)));
});
