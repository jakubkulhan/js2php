var _tasks = {},
	_level = 0;

function task(name, description, action) {
	var actionsStartIndex = 2,
		desc = description;

	if (typeof desc !== "string") {
		desc = undefined;
		actionsStartIndex = 1;
	}

	_tasks[name] = {
		description: desc,
		running: false,
		alreadyRun: false,
		results: [],
		actions: []
	};

	Array.prototype.slice.call(arguments, actionsStartIndex).forEach(function (dep) {
		if (typeof dep === "object") {
			_tasks[name].results.push(dep.result);

		} else {
			_tasks[name].actions.push(dep);
		}
	});
}

function result(file) {
	if (file.charAt(0) !== "/") {
		file = PHP.fn("getcwd")() + "/" + file;
	}

	return { result: file };
}

function run(cmd) {
	var ret;
	cmd = Array.prototype.join.call(arguments, " ");
	puts("[ " + cmd + " ]");
	@@ passthru(`cmd, `ret); @@

	if (ret !== 0) {
		throw new Error("command " + cmd + " failed");
	}
}

function fail(msg) {
	throw new Error(msg);
}

String.prototype.times = function (n) {
	var s = "";

	while (n-- > 0) {
		s += this;
	}

	return s;
};

function runTask(name, args) {
	args = args || [];

	if (typeof _tasks[name] === "undefined") {
		throw new Error("no task " + name);
	}

	if (!needRun(name)) { return; }

	if (_level++ !== 0) {
		puts("=".times(_level - 1) + "> " + name);
	}

	_tasks[name].running = true;

	for (var i = 0, l = _tasks[name].actions.length, action; i < l; ++i) {
		action = _tasks[name].actions[i];

		if (typeof action === "string") {
			if (action.charAt(0) !== "/") { runTask(action); }

		} else {
			action.apply(global, args);
		}
	}

	_tasks[name].running = false;
	_tasks[name].alreadyRun = true;

	if (_level > 1) {
		puts("=".times(--_level) + "> ok");
	}
}

function needRun(name, beingSearched) {
	beingSearched = beingSearched || [];

	if (beingSearched.indexOf(name) !== -1) {
		return true;
	}

	if (_tasks[name].running || _tasks[name].alreadyRun) {
		return false;
	}

	if (_tasks[name].results.length < 1) {
		return true;
	}

	for (var i = 0, l = _tasks[name].actions.length, action; i < l; ++i) {
		action = _tasks[name].actions[i];

		if (typeof action === "string") {
			if (action.charAt(0) === "/") {
				if (PHP.fn("glob")(action).some(function (f) {
						if (_tasks[name].results.some(function (g) {
								g = PHP.fn("glob")(g);

								if (!g || !g.length || g.some(function (h) {
										return PHP.fn("filemtime")(f) > PHP.fn("filemtime")(h);
									}))
								{
									return true;
								}
							}))
						{
							return true;
						}
					}))
				{
					return true;
				}

			} else {
				if (needRun(action, beingSearched.concat(name))) {
					return true;
				}
			}
		}
	}

	return false;
}

function puts() {
	var line = Array.prototype.join.call(arguments, "");
	@@ echo `line, "\n"; @@
}

function displayTasks(jakefilePath) {
	var nameMax = Object.keys(_tasks).map(function (n) { return n.length }).reduce(Math.max);

	puts(jakefilePath + " defines following tasks:\n");
	for (var name in _tasks) {
		puts("  $ jake " + name +
			(_tasks[name].description
			 	? " ".times(nameMax - name.length) + "  # " + _tasks[name].description
				: ""));
	}
	puts();
}

global.task = task;
global.run = run;
global.fail = fail;
global.puts = puts;
global.result = result;
global.jake = { runTask: runTask, displayTasks: displayTasks };
