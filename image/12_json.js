var JSON = {
	parse: function (text, reviver) {
		var ret = @@ JS::fromNative(json_decode(`text)) @@;

		if (typeof reviver === "function") {
			var revive = function revive(o, index) {
				var v = o[index];

				if (typeof v === "object") {
					var newItem;

					if (Array.isArray(v)) {
						for (var i = 0, l = v.length; i < l; ++i) {
							if ((newItem = revive(v, String(i))) === undefined) {
								delete v[i];
							} else {
								v[i] = newItem;
							}
						}

					} else {
						for (var k in v) {
							if ((newItem = revive(v, k)) === undefined) {
								delete v[k];
							} else {
								v[k] = newItem;
							}
						}
					}
				}

				return reviver.call(o, index, v);
			};

			ret = revive({"": ret}, "");
		}

		return ret;
	},

	stringify: function (value, replacer, space) {
		if (arguments.length > 1) {
			throw new NotImplementedError("JSON.stringify(): replacer and space arguments not supported.");
		}

		return @@ json_encode(JS::toNative(`value)) @@;
	}
};

@@ `JSON->class = 'JSON'; @@
