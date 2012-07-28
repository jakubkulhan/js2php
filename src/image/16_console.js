var console = {
	p: function (fd, s) {
		@@ fwrite(`fd, `s . "\n"); @@
	},

	log: function (data) {
		@@ static $out; if ($out === NULL) { $out = defined('STDOUT') ? STDOUT : fopen('php://output', 'w'); } @@

		if (arguments.length > 1) {
			this.p(@@ $out @@, PHP.fn("vsprintf")(data, Array.prototype.slice.call(arguments, 1)));
		} else {
			this.p(@@ $out @@, this.inspect(data));
		}
	},

	error: function (data) {
		@@ static $err; if ($err === NULL) { $err = defined('STDERR') ? STDERR : fopen('php://output', 'w'); } @@

		if (arguments.length > 1) {
			this.p(@@ $err @@, PHP.fn("vsprintf")(data, Array.prototype.slice.call(arguments, 1)));
		} else {
			this.p(@@ $err @@, this.inspect(data));
		}
	},

	dir: function (object) {
		return this.log(object);
	},

	_times: {},

	time: function (label) {
		this._times[label] = @@ microtime(TRUE) @@;
	},

	timeEnd: function (label) {
		var t = @@ microtime(TRUE) @@;

		if (this._times[label] === undefined) {
			throw new Error("Label " + label + " not defined.");
		}

		this.log("%s: %f", label, t - this._times[label]);
		delete this._times[label];
	},

	inspect: function (object) {
		var dumper = function dumper(v, indent) {
			indent = indent || "";
			if (v === undefined) {
				return { multiline: false, dump: "undefined" };

			} else if (v === null || typeof v === "boolean") {
				return { multiline: false, dump: @@ json_encode(`v) @@ };

			} else if (typeof v === "number") {
				return { multiline: false, dump: v.toString() };

			} else if (typeof v === "string") {
				return { multiline: false, dump: @@ str_replace("\\/", "/", json_encode(`v)) @@ };

			} else if (@@ isset(`v->class) && `v->class === 'Date' @@) {
				return { multiline: false, dump: "[date " + v.toString() + "]" };

			} else if (@@ isset(`v->call) @@) {
				var o = {};

				for (var k in v) {
					o[k] = v[k];
				}

				if (Object.getOwnPropertyNames(o).length > 0) {
					o = dumper(o);
					o.dump = " " + o.dump;

				} else {
					o = { multiline: false, dump: "" };
				}

				return { multiline: o.multiline,
						 dump:
							 "[function" +
							 @@ (isset(`v->name) ? " " . `v->name : "") @@ +
							 o.dump + "]" };

			} else {
				var multiline = false, i, k, d, isArray = @@ isset(`v->class) && `v->class === "Array" @@;

				@@ $values = array(); @@

				if (isArray) {
					for (i = 0; i < v.length; ++i) {
						if ((d = dumper(v[i], indent + "  ")).multiline || d.dump.length > 40) {
							multiline = true;
						}

						d = d.dump;

						@@ $values[] = `d; @@
					}

				}

				for (k in v) {
					if (isArray && String(Number(k)) === String(k)) { continue; }

					if ((d = dumper(v[k], indent + "  ")).multiline || d.dump.length > 40) {
						multiline = true;
					}

					d = d.dump;

					@@ $values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~", `k)
							? `k
							: str_replace("\\/", "/", json_encode(`k))) . ": " . `d; @@
				}

				if (@@ empty($values) @@) {
					return { multiline: false, dump: isArray ? "[]" : "{}" };
				}

				if (@@ count($values) > 5 @@) {
					multiline = true;
				}

				return { multiline: multiline,
					dump: (isArray ? "[ " : "{ ") +
						@@ implode(!`multiline ? ", " : ",\n" . `indent . "  ", $values) @@ +
						(isArray ? " ]" : " }") };
			}
		};

		return dumper(object).dump;
	}	
};

console.info = console.log;
console.warn = console.error;
