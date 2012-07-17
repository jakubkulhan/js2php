var NaN = @@ NAN @@;
var Infinity = @@ INF @@;
var undefined = @@ JS::$undefined @@;

function eval(x) {
	@@
		$parser = new JSParser;

		list($ok, $ast, $error) = $parser->__invoke(JS::toString(`x, $global), array('file' => '<eval>'));

		if (!$ok) { @@
			throw new SyntaxError("eval(): syntax error at " +
				@@ $error->line @@ + ":" + @@ $error->column @@ +
				", expected " + @@ implode(', ', $error->expected) @@);
		@@ }

		$compiler = new JSCompiler;
		$code = $compiler->__invoke($ast);
		$entryPoint = eval($code);
		return $entryPoint($global, $global->scope[$global->scope_sp - 1]);
	@@
}

function parseInt(string, radix) {
	if (radix !== undefined && (radix < 2 || radix > 36)) {
		return NaN;
	}

	if (radix !== undefined) {
		return @@ intval(JS::toString(`string, $global), (int) JS::toNumber(`radix, $global)) @@;
	}

	string = @@ JS::toString(`string, $global) @@;

	if (@@ empty(`string) @@) {
		return NaN;
	}

	if (@@ `string[0] === '0' && isset(`string[1]) && (`string[1] === 'x' || `string[1] === 'X') @@) {
		return parseInt(@@ substr(`string, 2) @@, 16);
	}

	if (@@ `string[0] === '0' && isset(`string[1]) @@) {
		return @@ intval(`string, 8) @@;
	}

	var i = @@ intval(`string) @@;

	if (@@ ((string) `i) !== `string @@) {
		return NaN;
	}

	return i;
}

function parseFloat(string) {
	string = @@ ltrim(JS::toString(`string, $global)) @@;
	var f = @@ floatval(`string) @@;

	if (@@ empty(`string) || ((string) `f) === '0' && `string[0] !== '0' @@) {
		return NaN;
	}

	return f;
}

function isNaN(number) {
	return @@ is_nan(JS::toNumber(`number, $global)) @@;
}

function isFinite(number) {
	return @@ is_finite(JS::toNumber(`number, $global)) @@;
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
