test("comparison", function () {
	assert(undefined === undefined);
	assert(undefined !== null);
	assert(undefined !== true);
	assert(undefined !== false);
	assert(undefined !== 42);
	assert(undefined !== "hello, world");
	assert(undefined !== {});
	assert(undefined !== []);

	assert(null === null);
	assert(null !== true);
	assert(null !== false);
	assert(null !== 42);
	assert(null !== "hello, world");
	assert(null !== {});
	assert(null !== []);

	assert(true === true);
	assert(true !== false);
	assert(true !== 42);
	assert(true !== "hello, world");
	assert(true !== {});
	assert(true !== []);

	assert(false === false);
	assert(false !== 42);
	assert(false !== "hello, world");
	assert(false !== {});
	assert(false !== []);

	assert(42 === 42);
	assert(42 !== "hello, world");
	assert(42 !== {});
	assert(42 !== []);

	assert("hello, world" === "hello, world");
	assert("hello, world" !== {});
	assert("hello, world" !== []);

	assert({} !== {});
	var o = {};
	assert(o === o);


	assert(undefined == undefined);
	assert(undefined == null);
	assert(undefined != true);
	assert(undefined != false);
	assert(undefined != 42);
	assert(undefined != "hello, world");
	assert(undefined != {});
	assert(undefined != []);

	assert(null == null);
	assert(null != true);
	assert(null != false);
	assert(null != 42);
	assert(null != "hello, world");
	assert(null != {});
	assert(null != []);

	assert(true == true);
	assert(true != false);
	assert(true != 42);
	assert(true != "hello, world");
	assert(true != {});
	assert(true != []);

	assert(false == false);
	assert(false != 42);
	assert(false != "hello, world");
	assert(false != {});
	assert(false != []);

	assert(42 == 42);
	assert(42 != "hello, world");
	assert(42 != {});
	assert(42 != []);

	assert("hello, world" == "hello, world");
	assert("hello, world" != {});
	assert("hello, world" != []);

	assert({} != {});
	var o = {};
	assert(o == o);
});
