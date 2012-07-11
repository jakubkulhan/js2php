function Object(value) {
	if (value === undefined || value === null) {
		return {};
	}

	return @@ JS::toObject(`value, $global) @@;
}

Object.getPrototypeOf = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.getPrototyeOf(): Cannot get prototype of non-object.");
	}

	return @@ `o->prototype @@;
};

Object.getOwnPropertyDescriptor = function (o, p) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.");
	}

	if (!(@@ array_key_exists(`p, `o->properties) || array_key_exists(`p, `o->attributes) @@)) {
		return undefined;
	}

	var desc = {};

	if (@@ array_key_exists(`p, `o->properties) @@) {
		desc.value = o[p];
		desc.writable = @@ JS::toBoolean(`o->attributes[`p] & JS::WRITABLE, $global) @@;

	} else {
		if (@@ `o->attributes[`p] & JS::HAS_GETTER @@) {
			desc.get = @@ `o->getters[`p] @@;
		}

		if (@@ `o->attributes[`p] & JS::HAS_SETTER @@) {
			desc.set = @@ `o->setters[`p] @@;
		}
	}

	desc.enumerable = @@ JS::toBoolean(`o->attributes[`p] & JS::ENUMERABLE, $global) @@;
	desc.configurable = @@ JS::toBoolean(`o->attributes[`p] & JS::CONFIGURABLE, $global) @@;

	return desc;
};

Object.getOwnPropertyNames = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.getOwnPropertyNames(): Cannot get property names of non-object.");
	}

	var names = [];

	@@ foreach (array_unique(array_merge(array_keys(`o->properties), array_keys(`o->attributes))) as $i => $name) { @@
		names.push(@@ $name @@);
	@@ } @@

	return names;
};

Object.create = function (o, properties) {
	if (typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.create(): Cannot create object with non-object prototype.");
	}

	var newObject = {};

	@@ `newObject->prototype = `o; @@

	if (@@ is_object(`properties) && `properties !== JS::$undefined @@) {
		Object.defineProperties(newObject, properties);
	}

	return newObject;
};

Object.defineProperty = function (o, p, attributes) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.defineProperty(): Cannot define property on non-object.");
	}

	if (attributes.get !== undefined && typeof attributes.get !== "function") {
		throw new TypeError("Object.defineProperty(): Given getter is not a function.");
	}

	if (attributes.set !== undefined && typeof attributes.set !== "function") {
		throw new TypeError("Object.defineProperty(): Given setter is not a function.");
	}

	attributes = attributes || {};
	p = @@ JS::toString(`p, $global) @@;

	var value = attributes.value || undefined,
		get = attributes.get || undefined,
		set = attributes.set || undefined,
		attrs = 0;
	
	if (typeof value !== "undefined") {
		@@ `o->properties[`p] = `value; @@
	}

	if (get) {
		@@ `o->getters[`p] = `get; @@
		attrs |= @@ JS::HAS_GETTER @@;
	}

	if (set) {
		@@ `o->setters[`p] = `set; @@
		attrs |= @@ JS::HAS_SETTER @@;
	}

	if (attributes.writable) {
		attrs |= @@ JS::WRITABLE @@;
	}

	if (attributes.enumerable) {
		attrs |= @@ JS::ENUMERABLE @@;
	}

	if (attributes.configurable) {
		attrs |= @@ JS::CONFIGURABLE @@;
	}

	@@ `o->attributes[`p] = `attrs; @@

	return o;
};

Object.defineProperties = function (o, properties) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.defineProperties(): Cannot define properties on non-object.");
	}

	if (typeof properties !== "object") {
		throw new TypeError("Object.defineProperties(): Given properties argument is not an object.");
	}

	for (var p in properties) {
		Object.defineProperty(o, p, properties[p]);
	}

	return o;
};

Object.seal = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.seal(): Cannot seal non-object.");
	}

	@@
		foreach (array_keys(`o->attributes) as $property) {
			`o->attributes[$property] &= ~JS::CONFIGURABLE;
		}

		`o->extensible = FALSE;
	@@

	return o;
};

Object.freeze = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.freeze(): Cannot freeze non-object.");
	}

	@@
		foreach (array_keys(`o->attributes) as $property) {
			`o->attributes[$property] &= ~JS::WRITABLE;
			`o->attributes[$property] &= ~JS::CONFIGURABLE;
		}

		`o->extensible = FALSE;
	@@

	return o;
};

Object.preventExtensions = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.preventExtensions(): Cannot prevent extensions on non-object.");
	}

	@@ `o->extensible = FALSE; @@

	return o;
};

Object.isSealed = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.isSealed(): Cannot return if sealed, non-object given.");
	}

	@@
		foreach (array_keys(`o->attributes) as $property) {
			if (`o->attributes[$property] & JS::CONFIGURABLE) {
				return FALSE;
			}
		}

		return !`o->extensible;
	@@
};

Object.isFrozen = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.isFrozen(): Cannot return if frozen, non-object given.");
	}

	@@
		foreach (array_keys(`o->attributes) as $property) {
			if (`o->attributes[$property] & (JS::CONFIGURABLE | JS::WRITABLE)) {
				return FALSE;
			}
		}

		return !`o->extensible;
	@@
};

Object.isExtensible = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.isExtensible(): Cannot return if extensible, non-object given.");
	}

	@@ return `o->extensible; @@
};

Object.keys = function (o) {
	if (o === null || typeof o !== "object" && typeof o !== "function") {
		throw new TypeError("Object.keys(): Cannot return if extensible, non-object given.");
	}

	var keys = [];

	for (var k in o) {
		keys.push(k);
	}

	return keys;
};

Object.prototype = {};
@@ `Object->properties['prototype']->prototype = NULL; @@
@@ `Object->properties['prototype']->class = 'Object'; @@
@@ `Object->properties['prototype']->extensible = TRUE; @@
Object.prototype.constructor = Object;

Object.prototype.toString = function () {
	if (this === undefined) {
		return "[object Undefined]";

	} else if (this === null) {
		return "[object Null]";

	} else {
		var o = @@ JS::toObject($leThis, $global) @@;

		if (@@ !isset(`o->class) @@) {
			return "[object]";
		}

		return @@ "[object " . `o->class . "]" @@;
	}
};

Object.prototype.toLocaleString = function () {
	return this.toString();
};

Object.prototype.valueOf = function () {
	return @@ JS::toObject($leThis, $global) @@;
};

Object.prototype.hasOwnProperty = function (p) {
	return @@ array_key_exists(`p, $leThis->properties) || isset($leThis->attributes[`p]) @@;
};

Object.prototype.isPrototypeOf = function (v) {
	if (v === null || typeof v !== "object" && typeof v !== "function") {
		return false;
	}

	@@
		for (`v = `v->prototype; `v; `v = `v->prototype) {
			if (`v === $leThis) {
				return TRUE;
			}
		}
	
	@@

	return false;
};

Object.prototype.propertyIsEnumerable = function (p) {
	return @@ JS::toBoolean(isset($leThis->attributes[`p]) && ($leThis->attributes[`p] & JS::ENUMERABLE), $global) @@;
};
