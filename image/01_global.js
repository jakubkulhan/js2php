var NaN = @@ NAN @@;
var Infinity = @@ INF @@;
var undefined = @@ JS::$undefined @@;

function eval(x) {
	throw new NotImplementedError("eval(): not implemented.");
}

function parseInt(string, radix) {
	radix = radix || 10;
	return @@ intval(`string, JS::toNumber(`radix)) @@;
}

function parseFloat(string) {
	return @@ floatval(`string) @@;
}

function isNaN(number) {
	return @@ is_nan(JS::toNumber(`number)) @@;
}

function isFinite(number) {
	return @@ is_finite(JS::toNumber(`number)) @@;
}

function decodeURI(encodedURI) {
	throw new NotImplementedError("decodeURI(): not implemented.");
}

function decodeURIComponent(encodedURIComponent) {
	throw new NotImplementedError("decodeURIComponent(): not implemented.");
}

function encodeURI(uri) {
	throw new NotImplementedError("encodedURI(): not implemented.");
}

function encodeURIComponent(uriComponent) {
	throw new NotImplementedError("encodeURIComponent(): not implemented.");
}
