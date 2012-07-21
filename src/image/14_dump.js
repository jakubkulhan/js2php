function dump() {
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

	for (var i = 0, l = arguments.length, arg; i < l; i = i + 1) {
		arg = dumper(arguments[i]).dump;
		@@ echo `arg . "\n"; @@
	}
}
