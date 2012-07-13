test("undefined variable throws ReferenceError", function() {
	try {
		whatever;
		assert(false, "did not throw");
	} catch(e) {
		assertEqual(e.name, "ReferenceError");
	}
});

test("dereferencing null throws TypeError", function() {
	try {
		var x = null;
		x.foo;
		assert(false, "did not throw");
	} catch(e) {
		assertEqual(e.name, "TypeError");
	}
});

test("if toString is not defined, falls back to valueOf", function() {
  assertEqual("123", String({ toString: null, valueOf: function() { return 123; } }));
});

test("if valueOf is not defined, falls back to toString", function() {
  assertEqual(123, Number({ toString: function() { return "123"; }, valueOf: null }));
});

test("throws if toString returns non-primitive", function() {
  try {
    String({ toString: function() { return this; } });
    assert(false, "did not throw");
  } catch(e) {
    assert(e instanceof TypeError);
  }
});

test("throws if valueOf returns non-primitive", function() {
  try {
    Number({ valueOf: function() { return this; }, toString: null });
    assert(false, "did not throw");
  } catch(e) {
    assert(e instanceof TypeError);
  }
});

test("null == undefined", function() {
  assert(null == undefined);
  assert(undefined == null);
  assert(null !== undefined);
  assert(undefined !== null);
});
