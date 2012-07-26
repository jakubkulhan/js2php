require.modules.path = {
	exports: {
		normalize: function normalize(path) {
			@@
				`path = JS::toString(`path, $global);
				$absolute = `path[0] === DIRECTORY_SEPARATOR;
				$newPath = array();

				foreach(explode(DIRECTORY_SEPARATOR, `path) as $part) {
					if (!empty($part)) {
						switch ($part) {
							case '.': break;

							case '..':
								array_pop($newPath);
							break;

							default:
								$newPath[] = $part;
						}
					}
				}

				return ($absolute ? DIRECTORY_SEPARATOR : '') .
					implode(DIRECTORY_SEPARATOR, $newPath);
			@@
		},

		join: function join() {
			var path = [];
			for (var i = 0, l = arguments.length; i < l; ++i) {
				if (typeof arguments[i] === "string") {
					path.push(arguments[i]);
				}
			}

			return require.modules.path.exports.normalize(path.join(@@ DIRECTORY_SEPARATOR @@));
		},

		resolve: function resolve(to) {
			var path = [@@ getcwd() @@];
			for (var i = 0, l = arguments.length, arg; i < l; ++i) {
				arg = String(arguments[i]);

				if (arg.charAt(0) === @@ DIRECTORY_SEPARATOR @@) {
					path = [arg];

				} else {
					path.push(arg);
				}
			}

			return require.modules.path.exports.normalize(path.join(@@ DIRECTORY_SEPARATOR @@));
		},

		relative: function relative(from, to) {
			from = require.modules.path.exports.resolve(from).split(@@ DIRECTORY_SEPARATOR @@);
			to = require.modules.path.exports.resolve(to).split(@@ DIRECTORY_SEPARATOR @@);

			while (from[0] === to[0] && from.length && to.length) {
				from.shift();
				to.shift();
			}

			var newPath = Array(from.length + 1).join(".." + @@ DIRECTORY_SEPARATOR @@) +
				to.join(@@ DIRECTORY_SEPARATOR @@);

			if (newPath.charAt(newPath.length - 1) === "/") {
				return newPath.substring(0, newPath.length - 1);
			}
			
			return newPath;
		},

		dirname: function dirname(p) {
			if (p === "") { return "."; }
			return @@ dirname(JS::toString(`p, $global)) @@;
		},

		basename: function basename(p, ext) {
			if (ext !== undefined) {
				return @@ basename(JS::toString(`p, $global), JS::toString(`ext, $global)) @@;
			}

			return @@ basename(JS::toString(`p, $global)) @@;
		},

		extname: function extname(p) {
			p = String(p);

			if (p.lastIndexOf(@@ DIRECTORY_SEPARATOR @@) !== -1) {
				p = p.substring(p.lastIndexOf(@@ DIRECTORY_SEPARATOR @@) + 1);
			}

			if (p === "." || p === ".." ||
				p.lastIndexOf(".") === 0 || p.lastIndexOf(".") === -1) { return ""; }

			return p.substring(p.lastIndexOf("."));
		},

		sep: @@ DIRECTORY_SEPARATOR @@
	}
};
