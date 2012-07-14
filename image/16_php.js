var PHP = {
	fn: function fn(name) {
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

			return $fn;
		@@
	},

	cls: function cls(name) {
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

			return $fn;
		@@
	}
};

@@
	`PHP->attributes['fn'] &= ~JS::ENUMERABLE;
	`PHP->attributes['cls'] &= ~JS::ENUMERABLE;
@@
