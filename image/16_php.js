var PHP = {
	_cachedFns: {},
	_cachedClasses: {},

	fn: function fn(name) {
		if (this._cachedFns[name] !== undefined) {
			return this._cachedFns[name];
		}

		@@
			$fn = clone JS::$functionTemplate;
			$reflection = new ReflectionFunction(JS::toString(`name, $global));

			$fn->call = 'JSWrappedFunction';

			$fn->parameters = array();
			foreach ($reflection->getParameters() as $p) {
				$fn->parameters[] = $p->getName();
			}

			$fn->name = $reflection->getName();

			$fn->properties['prototype'] = clone JS::$objectTemplate;
			$fn->attributes['prototype'] = 0;
			$fn->properties['prototype']->properties['constructor'] = $fn;
			$fn->properties['prototype']->attributes['constructor'] = 0;
			$fn->properties['length'] = count($fn->parameters);
			$fn->attributes['length'] = 0;
		@@

		this._cachedFns[name] = @@ $fn @@;

		@@ return $fn; @@
	},

	cls: function cls(name) {
		if (this._cachedClasses[name] !== undefined) {
			return this._cachedClasses[name];
		}

		@@
			$fn = clone JS::$functionTemplate;
			$reflection = new ReflectionClass(JS::toString(`name, $global));

			$fn->call = 'JSWrappedConstructor';

			$fn->parameters = array();
			if (($ctor = $reflection->getConstructor()) !== NULL) {
				foreach ($ctor->getParameters() as $p) {
					$fn->parameters[] = $p->getName();
				}
			}

			$fn->name = $reflection->getName();

			$fn->properties['prototype'] = clone JS::$objectTemplate;
			$fn->attributes['prototype'] = 0;
			$fn->properties['prototype']->properties['constructor'] = $fn;
			$fn->properties['prototype']->attributes['constructor'] = 0;
			$fn->properties['length'] = count($fn->parameters);
			$fn->attributes['length'] = 0;
		@@

		this._cachedClasses[name] = @@ $fn @@;

		@@ return $fn; @@
	}
};

@@
	`PHP->attributes['_cachedFns'] &= ~JS::ENUMERABLE;
	`PHP->attributes['_cachedClasses'] &= ~JS::ENUMERABLE;
	`PHP->attributes['fn'] &= ~JS::ENUMERABLE;
	`PHP->attributes['cls'] &= ~JS::ENUMERABLE;
@@
