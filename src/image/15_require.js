function require(path) {
	if (require.modules[path] !== undefined) {
		return require.modules[path].exports;
	}

	path = @@ JS::toString(`path, $global) @@;

	if (@@ (strncmp(`path, './', 2) === 0 || strncmp(`path, '../', 3) === 0) @@) {
		path = require["."] + "/" + path;

	} else if (path.charAt(0) !== "/") {
		var ok = false;

		for (var dir = require["."], root = false; dir !== "/" || !root; dir = @@ dirname(`dir) @@) {
			if (dir === "/") { root = true; }

			if (@@ file_exists(`dir . '/jeph_modules/' . `path) @@) {
				ok = true;
				path = dir + "/jeph_modules/" + path;
				break;

			} else if (@@ file_exists(`dir . '/node_modules/' . `path) @@) {
				ok = true;
				path = dir + "/node_modules/" + path;
				break;

			} else {
				for (var ext in require.extensions) {
					if (@@ file_exists(`dir . '/jeph_modules/' . `path . `ext) @@) {
						ok = true;
						path = dir + "/jeph_modules/" + path + ext;
						break;

					} else if (@@ file_exists(`dir . '/node_modules/' . `path . `ext) @@) {
						ok = true;
						path = dir + "/node_modules/" + path + ext;
						break;
					}
				}

				if (ok) { break; }
			}
		}
	}

	if (!@@ (file_exists(`path)) @@) {
		var ok = false;

		for (var ext in require.extensions) {
			if (@@ file_exists(`path . `ext) @@) {
				ok = true;
				path += ext;
				break;
			}
		}

		if (!ok) {
			throw new Error("File " + path + " does not exist");
		}
	}

	if (!@@ (is_file(`path)) @@) {
		if (@@ file_exists(`path . '/package.json') @@) {
			var data = @@ @file_get_contents(`path . '/package.json') @@;

			if (data === false) {
				throw new Error("Cannot open file " + path + "/package.json");
			}
			var pkg = JSON.parse(data)

			if (pkg.main === undefined) {
				throw new Error("Package " + path +
					"/package.json does not export entry point");
			}

			if (pkg.main.indexOf("../") !== -1 || pkg.main.indexOf("/..") !== -1) {
				throw new Error("Package " + path +
					"/package.json's main tries to go out of package directory");
			}

			path = path + "/" + pkg.main;

		} else {
			var ok = false;
			for (var ext in require.extensions) {
				if (@@ file_exists(`path . '/index' . `ext) @@) {
					ok = true;
					path += "/index" + ext;
					break;
				}
			}

			if (!ok) {
				throw new Error(path +
					" cannot be loaded, no index");
			}
		}
	}

	path = @@ realpath(`path) @@;

	if (require.modules[path] !== undefined) {
		return require.modules[path].exports;
	}

	require.modules[path] = { exports: {} };

	return require.modules[path].exports =
		require.extensions[path.substring(path.lastIndexOf("."))](path);
}

require.saveCompiled = false;
require.compiled = {};
require.compiledCache = undefined;
require.loader = undefined;
require.modules = {};

require.extensions = {
	".js": function (path) {
		var compiled,
			cacheFile = require.compiledCache
				? require.compiledCache + "/" + @@ md5(`path) @@
				: undefined;

		if (cacheFile !== undefined && @@ (file_exists(`cacheFile) &&
			filemtime(`cacheFile) >= filemtime(`path)) @@)
		{
			var data = @@ @file_get_contents(`cacheFile) @@;

			if (data === false) {
				throw new Error("Cannot open file " + path);
			}

			compiled = @@ unserialize(`data) @@;

		} else {
			@@
				$parser = new JSParser;
				$compiler = new JSCompiler;
				$data = @file_get_contents(`path);

				if ($data === FALSE) { @@
					throw new Error("Cannot open file " + path);
				@@ }

				list($ok, $ast, $error) = $parser->__invoke($data, array('file' => `path));

				if (!$ok) { @@
					throw new SyntaxError("Syntax error in " + path + "@" +
						@@ $error->line @@ + ":" + @@ $error->column @@ + "; expected " +
						@@ implode(', ', $error->expected) @@);
				@@ } @@

				var loader = require.loader;
				compiled = @@ JS::fromNative($compiler->__invoke($ast, array(
					'force' => TRUE,
					'generate' => 'object',
					'loader' => `loader !== JS::$undefined ? `loader : NULL
				))) @@; @@

				@file_put_contents(`cacheFile, serialize(JS::toNative(`compiled)));
			@@
		}

		if (require.saveCompiled) {
			require.compiled[path] = compiled;
		}

		var code = "",
			main = compiled.main,
			savedCurrentDirectory;

		for (var k in compiled.functions) {
			code += compiled.functions[k];
		}

		try {
			savedCurrentDirectory = require["."];

			@@
				$newScope = clone JS::$emptyScope;
				$newScope->properties['global'] = $global;
				$newScope->properties['__dirname'] = dirname(`path);
				$newScope->properties['__filename'] = `path;
				$newScope->properties['module'] = clone JS::$objectTemplate;
				$newScope->properties['module']->properties['exports'] = clone JS::$objectTemplate;
				$newScope->properties['module']->attributes['exports'] = JS::WRITABLE | JS::CONFIGURABLE;
				$newScope->properties['module']->up = $global;
				$newScope->up = $newScope->properties['module'];
			@@
				require.modules[path] = @@ $newScope->properties['module'] @@;
			@@
				$savedTrace = $global->trace;
				$savedTraceSP = $global->trace_sp;
				eval(`code); `main($global, $newScope);
			@@

		} finally {
			@@
				$global->trace = $savedTrace;
				$global->trace_sp = $savedTraceSP;
				$global->properties['require']->properties['.'] = `savedCurrentDirectory;
			@@
		}

		return require.modules[path].exports;
	},

	".json": function (path) {
		var data = @@ @file_get_contents(`path) @@;

		if (data === false) {
			throw new Error("Could not read file " + path);
		}

		return JSON.parse(data);
	}
};
