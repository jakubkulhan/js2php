assert(Object(undefined) instanceof Object, "bad conversion undefined -> object");
assert(Object(null) instanceof Object, "bad conversion null -> object");
assert(Object(true) instanceof Boolean, "bad conversion boolean -> object");
assert(Object(42) instanceof Number, "bad conversion number -> object");
assert(Object("hello, world!") instanceof String, "bad conversion string -> object");
assert(Object(Object) === Object, "bad conversion object -> object");


assert(Object.getPrototypeOf({}) === Object.prototype, "Object.getPrototypeOf(): Object.prototype");
assert(Object.getPrototypeOf(Object.prototype) === null, "Object.getPrototypeOf(): Object.prototype.prototype");


var o = { foo: "bar" }, d = Object.getOwnPropertyDescriptor(o, "foo");
assert(Object(d) === d, "Object.getOwnPropertyDescriptor(): not an object");
assert(d.value === "bar", "Object.getOwnPropertyDescriptor(): wrong value");
assert(d.writable === true, "Object.getOwnPropertyDescriptor(): wrong writable");
assert(d.enumerable === true, "Object.getOwnPropertyDescriptor(): wrong enumerable");
assert(d.configurable === true, "Object.getOwnPropertyDescriptor(): wrong configurable");


var o = { one: 1, two: 2 }, n = Object.getOwnPropertyNames(o);
assert(@@ `n->class === "Array" @@, "Object.getOwnPropertyNames(): not an array");
assert(n.length === 2, "Object.getOwnPropertyNames(): wrong array length");
assert((n[0] === "one" && n[1] === "two") || (n[0] === "two" && n[1] === "one"),
	"Object.getOwnPropertyNames(): wrong names");


var o = Object.create(null, { one: { value: 1 }, two: { value: 2 } });
assert(@@ `o->prototype @@ === null, "Object.create(): wrong prototype");
assert(o.one === 1 && o.two === 2, "Object.create(): wrong properties");
var o = Object.create(null);
assert(@@ `o->prototype @@ === null, "Object.create(): wrong prototype 2");
assert(o.one === undefined && o.two === undefined, "Object.create(): wrong properties 2");


var o = {};
Object.defineProperty(o, "one", { value: 1 });
assert(o.one === 1, "Object.defineProperty(): wrong property value");
var d = Object.getOwnPropertyDescriptor(o, "one");
assert(d.writable === false && d.enumerable === false && d.configurable === false,
	"Object.defineProperty(): wrong property attributes");

Object.defineProperty(o, "two", { value: 2, writable: true, enumerable: true, configurable: true });
assert(o.two === 2, "Object.defineProperty(): wrong property value 2");
var d = Object.getOwnPropertyDescriptor(o, "two");
assert(d.writable === true && d.enumerable === true && d.configurable === true,
	"Object.defineProperty(): wrong property attributes 2");

var three = 3;
Object.defineProperty(o, "three", {
	get: function () { return three; },
	set: function (v) { three = v; },
	enumerable: true
});
assert(o.three === 3, "Object.defineProperty(): getter returned wrong value");
o.three = 4;
assert(o.three === 4, "Object.defineProperty(): setter set wrong value");


var o = {}, three = 3;
Object.defineProperties(o, {
	one: { value: 1 },
	two: { value: 2, writable: true, enumerable: true, configurable: true },
	three: {
		get: function () { return three; },
		set: function (v) { three = v; }
	}
});

assert(o.one === 1, "Object.defineProperties(): wrong property value");
var d = Object.getOwnPropertyDescriptor(o, "one");
assert(d.writable === false && d.enumerable === false && d.configurable === false,
	"Object.defineProperties(): wrong property attributes");


assert(o.two === 2, "Object.defineProperties(): wrong property value 2");
var d = Object.getOwnPropertyDescriptor(o, "two");
assert(d.writable === true && d.enumerable === true && d.configurable === true,
	"Object.defineProperties(): wrong property attributes 2");

assert(o.three === 3, "Object.defineProperties(): getter returned wrong value");
o.three = 4;
assert(o.three === 4, "Object.defineProperties(): setter set wrong value");


var o = { one: 1, two: 2 };
assert(!Object.isSealed(o), "Object.isSealed(): should not be");
Object.seal(o);
assert(Object.isSealed(o), "Object.seal(): not sealed");
delete o.one;
delete o.two;
assert(o.one === 1 && o.two === 2, "Object.seal(): properties can be deleted");
o.one = 11;
o.two = 12;
assert(o.one === 11 && o.two === 12, "Object.seal(): properties can't be changed");
o.three = 3;
assert(o.three === undefined, "Object.seal(): properties can be added");


var o = { one: 1, two: 2 };
assert(!Object.isFrozen(o), "Object.isFrozen(): should not be");
Object.freeze(o);
assert(Object.isFrozen(o), "Object.freeze(): not frozen");
delete o.one;
delete o.two;
assert(o.one === 1 && o.two === 2, "Object.freeze(): properties can be deleted");
o.one = 11;
o.two = 12;
assert(o.one === 1 && o.two === 2, "Object.freeze(): properties can be changed");
o.three = 3;
assert(o.three === undefined, "Object.freeze(): properties can be added");


var o = { one: 1, two: 2 };
assert(Object.isExtensible(o), "Object.isExtensible(): should be");
Object.preventExtensions(o);
assert(!Object.isExtensible(o), "Object.preventExtensions(): still extensible");
delete o.one;
delete o.two;
assert(o.one === undefined && o.two === undefined, "Object.preventExtensions(): properties can't be deleted");
o.one = 1;
o.two = 1;
assert(o.one === undefined && o.two === undefined, "Object.preventExtensions(): properties can be added");


assert(Object.keys({}).length === 0, "Object.keys(): wrong for empty object");
var o = { one: 1, two: 2 }, k = Object.keys(o);
assert(@@ `k->class === "Array" @@, "Object.keys(): returned not an array");
assert(k.length === 2, "Object.keys(): wrong array length");
assert(k[0] === "one" && k[1] === "two" || k[0] === "two" && k[1] === "one", "Object.keys(): wrong names");


assert({}.toString() === "[object Object]", "Object.prototype.toString(): wrong for Object");


var o = {};
assert(o.valueOf() === o, "Object.prototype.valueOf(): wrong value");


var o1 = { one: 1 }, o2 = Object.create(o1);
o2.two = 2;
assert(o1.hasOwnProperty("one"), "Object.prototype.hasOwnProperty(): 1");
assert(o2.hasOwnProperty("two"), "Object.prototype.hasOwnProperty(): 2");
assert(!o2.hasOwnProperty("one"), "Object.prototype.hasOwnProperty(): 3");


var o1 = {}, o2 = Object.create(o1);
assert(Object.prototype.isPrototypeOf(o1), "Object.prototype.isPrototypeOf(): 1");
assert(o1.isPrototypeOf(o2), "Object.prototype.isPrototypeOf(): 2");
assert(!o2.isPrototypeOf(o1), "Object.prototype.isPrototypeOf(): 3");


var o = Object.create(Object.prototype, {
	one: { value: 1, enumerable: true },
	two: { value: 2, enumerable: false }
});
assert(o.propertyIsEnumerable("one"), "Object.prototype.propertyIsEnumerable(): 1");
assert(!o.propertyIsEnumerable("two"), "Object.prototype.propertyIsEnumerable(): 2");
