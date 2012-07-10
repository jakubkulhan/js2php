var the_answer_to_life_the_universe_and_everything = 42;

assert(typeof undefined === "undefined");
assert(typeof null === "object");
assert(typeof true === "boolean");
assert(typeof the_answer_to_life_the_universe_and_everything === "number");
assert(typeof "foo" === "string");
assert(typeof {} === "object");
assert(typeof assert === "function");

assert(void(the_answer_to_life_the_universe_and_everything) === undefined);

assert(the_answer_to_life_the_universe_and_everything === 42);
delete the_answer_to_life_the_universe_and_everything;
assert(the_answer_to_life_the_universe_and_everything === undefined);

var n = 5;

assert(++n === 6);
assert(--n === 5);
assert(n++ === 5);
assert(n === 6);
assert(n-- === 6);
assert(n === 5);

assert(+n === 5);
assert(-n === -5);
assert(!!n === true);
assert(~0 === -1);
