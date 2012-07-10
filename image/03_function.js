function Function() {
	throw new NotImplementedError("Creating function via Function constructor is not implemented.");
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

	@@ $passArgs = array(); @@

	for (var i = 0, l = argArray.length, arg; i < l; ++i) {
		arg = argArray[i];
		@@ $passArgs[] = `arg; @@
	}

	return @@ `call($global, `thisArg, $leThis, $passArgs) @@;
};

Function.prototype.call = function (thisArg) {
	var fn = this, call = @@ `fn->call @@;

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

	@@ $boundArgs = array(); @@
	for (var i = 1, l = arguments.length, arg; i < l; ++i) {
		arg = arguments[i];
		@@ $boundArgs[] = `arg; @@
		--newFn.length;
	}

	return newFn;
};
