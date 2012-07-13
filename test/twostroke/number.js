test("toString", function() {
	assertEqual((123).toString(), "123");
	assertEqual((123.0).toString(), "123");
	assertEqual((123.456).toString(), "123.456");
	assertEqual(Number.POSITIVE_INFINITY.toString(), "Infinity");
	assertEqual(Number.NEGATIVE_INFINITY.toString(), "-Infinity");
	assertEqual(Number.NaN.toString(), "NaN");
});

test("toString throws on non-number", function() {
	try {
		Number.prototype.toString.call("");
		assert(false);
	} catch(e) {
		assert(true);
	}
});

test("toExponential", function() {
	assertEqual((1).toExponential(), "1e+0");
	assertEqual((1.0).toExponential(), "1e+0");
	assertEqual((123).toExponential(), "1.23e+2");
	assertEqual((0.00123).toExponential(), "1.23e-3");
	assertEqual("Infinity", Infinity.toExponential());
	assertEqual("-Infinity", (-Infinity).toExponential());
	assertEqual("NaN", NaN.toExponential());
	assertEqual(123456789..toExponential(3), "1.235e+8");
	assertEqual(123456789..toExponential(NaN), "1e+8");

	try {
		assertEqual(123456789..toExponential(Infinity), "1e+8");
		assert(false, "did not throw");
	} catch (e) {
		assert(e instanceof RangeError);
	}

	try {
		assertEqual(123456789..toExponential(-Infinity), "1e+8");
		assert(false, "did not throw");
	} catch (e) {
		assert(e instanceof RangeError);
	}
});

test("toFixed", function() {
  assertEqual("1235", 1234.5.toFixed());
  assertEqual("12.35", 12.345678.toFixed(2));
  assertEqual("1235", 1234.56789.toFixed(NaN));

  try {
	  assertEqual("1235", 1234.56789.toFixed(Infinity));
	  assert(false, "did not throw");
  } catch (e) {
	  assert(e instanceof RangeError);
  }

  try {
	  assertEqual("1235", 1234.56789.toFixed(-Infinity));
	  assert(false, "did not throw");
  } catch (e) {
	  assert(e instanceof RangeError);
  }
});

test("toPrecision", function() {
  assertEqual("5.123456", 5.123456.toPrecision());
  assertEqual("5.1235", 5.123456.toPrecision(5));
  assertEqual("5.1", 5.123456.toPrecision(2));
  assertEqual("5", 5.123456.toPrecision(1));
  try {
    123..toPrecision(NaN);
    assert(false, "did not throw");
  } catch(e) {
    assert(e instanceof RangeError);
  }
});

test("typeof", function() {
	assertEqual(typeof 1, "number");
	assertEqual(typeof 1.0, "number");
	assertEqual(typeof Number(1), "number");
	assertEqual(typeof Number(1.0), "number");
	assertEqual(typeof new Number(1), "object");
	assertEqual(typeof new Number(1.0), "object");
});

test("Number", function() {
	assert(isNaN(Number(undefined)));
	assertEqual(0, Number(null));
	assertEqual(0, Number(false));
	assertEqual(1, Number(true));
	assertEqual(0, Number(""));
	assertEqual(0, Number("     "));
	assertEqual(123, Number("123"));
	assertEqual(123.456, Number("123.456"));
	assertEqual(5, Number({ toString: function() { return "5"; } }));
});

test("int32", function() {
	assertEqual(5, 5 >> NaN);
	assertEqual(5, 5 << NaN);
	assertEqual(5, 5 | NaN);
	
	assertEqual(4, 5 & 4);
	assertEqual(4, 5.5 & 4.7816516);
	
	assertEqual(-8, ~7);
	assertEqual(-9, ~8.9923456789123456789123456789);
});

test("==", function() {
	assert("5" == 5);
	assert(5 == "5");
});

// not implemented
/*
test("^", function() {
    assertEqual(6, 3 ^ 5);
});

test(">>>", function() {
    assertEqual(32589925, -123456789 >>> 7);
    assertEqual(964506, 123456789 >>> 7);
});
*/

test(">>", function() {
    assertEqual(-964507, -123456789 >> 7);
    assertEqual(964506, 123456789 >> 7);
});
