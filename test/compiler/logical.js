var ok;

function okIfRunReturnTrue() {
	ok = true;
	return true;
}

function okIfRunReturnFalse() {
	ok = true;
	return false;
}

function failIfRun() {
	ok = false;
}

ok = false;
assert((okIfRunReturnTrue() && okIfRunReturnTrue()) === true);
assert(ok);

ok = false;
assert((okIfRunReturnFalse() && failIfRun()) === false);
assert(ok);

ok = false;
assert((okIfRunReturnTrue() || failIfRun()) === true);
assert(ok);

ok = false;
assert((okIfRunReturnFalse() || okIfRunReturnTrue()) === true);
assert(ok);

ok = false;
assert((okIfRunReturnFalse() || okIfRunReturnFalse()) === false);
assert(ok);

assert((undefined || 42) === 42);
assert((42 || undefined) === 42);
