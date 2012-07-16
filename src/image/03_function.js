function Function() {
	var args = [], body = "", fn;

	if (arguments.length) {
		for (var i = 0; i < arguments.length - 1; ++i) {
			args.push(arguments[i]);
		}

		body = arguments[arguments.length - 1];
	}

	args = args.join();
	fn = "return function(" + args + "){" + body + "};";

	@@
		$parser = new JSParser;

		list($ok, $ast, $error) = $parser->__invoke(JS::toString(`fn, $global), '<Function>');

		if (!$ok) { @@
			throw new SyntaxError("Function(): syntax error at " +
				@@ $error->line @@ + ":" + @@ $error->column @@ +
				", expected " + @@ implode(', ', $error->expected) @@);
		@@ }

		$compiler = new JSCompiler;
		$code = $compiler->__invoke($ast);

		$entryPoint = eval($code);
		$fn = $entryPoint();

		$fn->scope = $global->scope[$global->scope_sp - 1];

		return $fn;
	@@
}

@@ `Function->class = 'Function'; @@

Function.prototype = @@ `Function->prototype @@;
@@ `Function->properties['prototype']->prototype = `Object->properties['prototype']; @@
@@ `Function->properties['prototype']->class = 'Function'; @@
@@ `Function->properties['prototype']->extensible = TRUE; @@
Function.prototype.constructor = Function;

function F() {
	return undefined;
}

@@ `Function->prototype->call = `F->call; @@

delete F;

Function.prototype.toString = function () {
	throw new NotImplementedError("Function.prototype.toString(): not implemented.");
};

Function.prototype.apply = function (thisArg, argArray) {
	var fn = this, call = @@ `fn->call @@;

	if (thisArg === undefined) {
		thisArg = @@ $global @@;
	} else if (typeof thisArg !== "object" && typeof thisArg !== "function") {
		thisArg = @@ JS::toObject(`thisArg, $global) @@;
	}

	argArray = argArray || [];
	@@ $passArgs = array(); @@

	for (var i = 0, l = argArray.length, arg; i < l; ++i) {
		arg = argArray[i];
		@@ $passArgs[] = `arg; @@
	}

	return @@ `call($global, `thisArg, $leThis, $passArgs) @@;
};

Function.prototype.call = function (thisArg) {
	var fn = this, call = @@ `fn->call @@;

	if (thisArg === undefined) {
		thisArg = @@ $global @@;
	} else if (typeof thisArg !== "object" && typeof thisArg !== "function") {
		thisArg = @@ JS::toObject(`thisArg, $global) @@;
	}

	@@ $passArgs = array(); @@

	for (var i = 1, l = arguments.length, arg; i < l; ++i) {
		arg = arguments[i];
		@@ $passArgs[] = `arg; @@
	}

	return @@ `call($global, `thisArg, $leThis, $passArgs) @@;
};

Function.prototype.bind = function (thisArg) {
	var newFn = @@ clone $leThis @@;

	@@ `newFn->boundThis = `thisArg; @@

	@@ $boundArgs = isset(`newFn->boundArgs) ? `newFn->boundArgs : array(); @@
	for (var i = 1, l = arguments.length, arg; i < l; ++i) {
		arg = arguments[i];
		@@ $boundArgs[] = `arg; @@
		--newFn.length;
	}
	@@ `newFn->boundArgs = $boundArgs; @@

	return newFn;
};
