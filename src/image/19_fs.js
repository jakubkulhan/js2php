require.modules.fs = {
	exports: {
		rename: function rename(oldPath, newPath, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.renameSync(oldPath, newPath);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		renameSync: function renameSync(oldPath, newPath) {
			var ret = @@ @rename(JS::toString(`oldPath, $global), JS::toString(`newPath, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
				throw new Error(@@ $e @@);
			}
		},

		truncate: function truncate(fd, len, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.truncateSync(fd, len);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		truncateSync: function truncateSync(fd, len) {
			var ret = @@ @ftruncate(JS::toNative(`fd), JS::toString(`len, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		chown: function chown(path, uid, gid, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.chownSync(path, uid, gid);
				callback(null);
			
			} catch (e) {
				callback(e);
			}
		},

		chownSync: function chownSync(path, uid, gid) {
			var ret;
			ret = @@ @chown(JS::toString(`path, $global), JS::toPrimitve(`uid, $global)) @@
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			ret = @@ @chgrp(JS::toString(`path, $global), JS::toPrimitve(`gid, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		chmod: function chmod(path, mode, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.chmodSync(path, mode);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		chmodSync: function chmodSync(path, mode) {
			var ret = @@ @chmod(JS::toString(`path, $global), JS::toNumber(`mode, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		Stats: function Stats(stats) {
			Object.keys(stats).forEach(function (k) {
				if (@@ !is_numeric(`k) @@) {
					this[k] = stats[k];
				}
			}, this);

			this.atime = new Date(this.atime * 1000);
			this.mtime = new Date(this.mtime * 1000);
			this.ctime = new Date(this.ctime * 1000);
		},

		stat: function stat(path, callback) {
			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.statSync(path));
			} catch (e) {
				callback(e, null);
			}
		},

		statSync: function statSync(path) {
			@@ clearstatcache(); @@
			var ret = @@ @stat(JS::toString(`path, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return new require.modules.fs.exports.Stats(@@ JS::fromNative(`ret) @@);
		},

		lstat: function lstat(path, callback) {
			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.lstatSync(path));
			} catch (e) {
				callback(e, null);
			}
		},

		lstatSync: function lstatSync(path) {
			@@ clearstatcache(); @@
			var ret = @@ @lstat(JS::toString(`path, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return new require.modules.fs.exports.Stats(@@ JS::fromNative(`ret) @@);
		},

		fstat: function fstat(fd, callback) {
			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.fstatSync(fd));
			} catch (e) {
				callback(e, null);
			}
		},

		fstatSync: function fstatSync(fd) {
			@@ clearstatcache(); @@
			var ret = @@ @fstat(JS::toNative(`fd, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return new require.modules.fs.exports.Stats(@@ JS::fromNative(`ret) @@);
		},

		link: function link(srcPath, dstPath, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.linkSync(srcPath, dstPath);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		linkSync: function linkSync(srcPath, dstPath) {
			var ret = @@ @link(JS::toString(`srcPath, $global), JS::toString(`dstPath, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		symlink: function symlink(srcPath, dstPath, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.symlinkSync(srcPath, dstPath);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		symlinkSync: function symlinkSync(srcPath, dstPath) {
			var ret = @@ @symlink(JS::toString(`srcPath, $global), JS::toString(`dstPath, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		readlink: function readlink(path, callback) {
			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.readlinkSync(path));

			} catch (e) {
				callback(e, null);
			}
		},

		readlinkSync: function readlinkSync(path) {
			var ret = @@ @readlink(JS::toString(`path, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
			return ret;
		},

		realpath: function realpath(path, callback) {
			if (arguments.length > 2) {
				throw new NotImplementedError("cache argument not implemented");
			}

			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.realpathSync(path));

			} catch (e) {
				callback(e, null);
			}
		},

		realpathSync: function realpathSync(path, callback) {
			if (arguments.length > 2) {
				throw new NotImplementedError("cache argument not implemented");
			}

			var ret = @@ @realpath(JS::toString(`path, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return ret;
		},

		unlink: function unlink(path, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.unlinkSync(path);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		unlinkSync: function unlinkSync(path) {
			var ret = @@ @unlink(JS::toString(`path, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		rmdir: function rmdir(path, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.rmdirSync(path);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		rmdirSync: function rmdirSync(path) {
			var ret = @@ @rmdir(JS::toString(`path, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		mkdir: function mkdir(path, mode, callback) {
			if (typeof mode === "function" || mode === undefined) {
				callback = mode;
				mode = 0777;
			}

			callback = callback || function () {};

			try {
				require.modules.fs.exports.mkdirSync(path, mode);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		mkdirSync: function mkdirSync(path, mode) {
			if (mode === undefined) {
				mode = 0777;
			}

			var ret = @@ @mkdir(JS::toString(`path, $global), JS::toNumber(`mode, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		readdir: function readdir(path, callback) {
			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.readdirSync(path));

			} catch (e) {
				callback(e, null);
			}
		},

		readdirSync: function readdirSync(path) {
			var handle = @@ @opendir(JS::toString(`path, $global)) @@;
			if (handle === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			var entry, files = [];

			for (;;) {
				entry = @@ @readdir(`handle) @@;
				if (entry === false) { break; }
				if (entry !== "." && entry !== "..") {
					files.push(entry);
				}
			}

			var ret = @@ @closedir(`handle) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return files;
		},

		close: function close(fd, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.closeSync(fd);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		closeSync: function closeSync(fd) {
			var ret = @@ @fclose(JS::toNative(`fd, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		open: function open(path, flags, callback) {
			if (arguments.length > 3) {
				throw new NotImplementedError("mode argument not implemented");
			}

			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.openSync(path, flags));

			} catch (e) {
				callback(e, null);
			}
		},

		openSync: function openSync(path, flags) {
			if (arguments.length > 3) {
				throw new NotImplementedError("mode argument not implemented");
			}

			var ret = @@ @fopen(JS::toString(`path, $global), JS::toString(`flags, $global)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return @@ JS::fromNative(`ret) @@;
		},

		utimes: function utimes(path, atime, mtime, callback) {
			callback = callback || function () {};

			try {
				require.modules.fs.exports.utimesSync(path);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		utimesSync: function utimesSync(path, atime, mtime) {
			var ret = @@ @touch(JS::toString(`path, $global), JS::toNumber(`mtime, $global) / 1000, JS::toNumber(`atime, $global) / 1000) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}
		},

		write: function write(fd, buffer, offset, length, position, callback) {
			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.writeSync(fd, buffer, offset,
					length, position), buffer);

			} catch (e) {
				callback(e, null, null);
			}
		},

		writeSync: function writeSync(fd, buffer, offset, length, position) {
			buffer = @@ JS::toString(`buffer, $global) @@;
			offset = @@ JS::toNumber(`offset, $global) @@;
			length = @@ JS::toNumber(`length, $global) @@;
			var ret;

			if (position !== null) {
				ret = @@ @fseek(JS::toNative(`fd), JS::toNumber(`position, $global)) @@;
				if (ret === false) {
					@@ $e = error_get_last(); $e = $e['message']; @@
						throw new Error(@@ $e @@);
				}
			}

			ret = @@ @fwrite(JS::toNative(`fd), substr(`buffer, `offset, `length)) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return ret;
		},

		read: function read(fd, buffer, offset, length, position, callback) {
			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.readSync(fd, buffer, offset,
					length, position), buffer);

			} catch (e) {
				callback(e, null, null);
			}
		},

		readSync: function readSync(fd, buffer, offset, length, position) {
			offset = @@ JS::toNumber(`offset, $global) @@;
			length = @@ JS::toNumber(`length, $global) @@;
			var ret;

			if (position !== null) {
				ret = @@ @fseek(JS::toNative(`fd), JS::toNumber(`position, $global)) @@;
				if (ret === false) {
					@@ $e = error_get_last(); $e = $e['message']; @@
						throw new Error(@@ $e @@);
				}
			}

			ret = @@ @fread(JS::toNative(`fd), `length) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			buffer.write(ret, offset);

			return @@ strlen(`ret) @@;
		},

		readFile: function readFile(path, encoding, callback) {
			if (typeof encoding === "function") {
				callback = encoding;
				encoding = undefined;
			}

			callback = callback || function () {};

			try {
				callback(null, require.modules.fs.exports.readFileSync(path, encoding));

			} catch (e) {
				callback(e, null);
			}
		},

		readFileSync: function readFileSync(path, encoding) {
			if (encoding !== undefined && encoding !== 'utf8') {
				throw new NotImplementedError("only utf8 encoding supported");
			}

			var ret = @@ @file_get_contents(`path) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			if (encoding) {
				return ret;
			}

			return new require.modules.buffer.exports.Buffer(ret);
		},

		writeFile: function writeFile(path, data, encoding, callback) {
			if (typeof encoding === "function") {
				callback = encoding;
				encoding = undefined;
			}

			callback = callback || function () {};

			try {
				require.modules.fs.exports.writeFileSync(path, data, encoding);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		writeFileSync: function writeFileSync(path, data, encoding) {
			if (encoding !== undefined && encoding !== 'utf8') {
				throw new NotImplementedError("only utf8 encoding supported");
			}

			data = @@ JS::toString(`data, $global) @@;

			var ret = @@ @file_put_contents(`path, `data) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return ret;
		},

		appendFile: function appendFile(path, data, encoding, callback) {
			if (typeof encoding === "function") {
				callback = encoding;
				encoding = undefined;
			}

			callback = callback || function () {};

			try {
				require.modules.fs.exports.appendFileSync(path, data, encoding);
				callback(null);

			} catch (e) {
				callback(e);
			}
		},

		appendFileSync: function appendFileSync(path, data, encoding) {
			if (encoding !== undefined && encoding !== 'utf8') {
				throw new NotImplementedError("only utf8 encoding supported");
			}

			data = @@ JS::toString(`data, $global) @@;

			var ret = @@ @file_put_contents(`path, `data, FILE_APPEND) @@;
			if (ret === false) {
				@@ $e = error_get_last(); $e = $e['message']; @@
					throw new Error(@@ $e @@);
			}

			return ret;
		},

		exists: function exists(path, callback) {
			callback = callback || function () {};
			callback(require.modules.fs.exports.existsSync(path));
		},

		existsSync: function existsSync(path) {
			return @@ file_exists(`path) @@;
		}
	}
};

require.modules.fs.exports.Stats.prototype.isFile = function isFile() {
	return !!(this.mode & 0100000);
};

require.modules.fs.exports.Stats.prototype.isDirectory = function isDirectory() {
	return !!(this.mode & 0040000);
};

require.modules.fs.exports.Stats.prototype.isBlockDevice = function isBlockDevice() {
	return !!(this.mode & 0060000);
};

require.modules.fs.exports.Stats.prototype.isCharacterDevice = function isCharacterDevice() {
	return !!(this.mode & 0020000);
};

require.modules.fs.exports.Stats.prototype.isSymbolicLink = function isSymbolicLink() {
	return !!(this.mode & 0120000);
};

require.modules.fs.exports.Stats.prototype.isFIFO = function isFIFO() {
	return !!(this.mode & 0010000);
};

require.modules.fs.exports.Stats.prototype.isSocket = function isSocket() {
	return !!(this.mode & 0140000);
};
