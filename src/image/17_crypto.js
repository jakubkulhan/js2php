require.modules.crypto = {
	exports: {
		createHash: function createHash(algorithm) {
			var hash = {
				update: function update(data, inputEncoding) {
					if (inputEncoding) {
						throw new NotImplementedError("Hash.update(): inputEncoding ignored");
					}

					@@ hash_update($leThis->ctx, JS::toString(`data, $global)); @@

					return this;
				},

				digest: function digest(encoding) {
					var output = @@ hash_final($leThis->ctx, TRUE); @@
					encoding = encoding || "binary";

					switch (encoding) {
						case "binary":
							return output;

						case "hex":
							return @@ bin2hex(`output) @@;

						case "base64":
							return @@ base64_encode(`output) @@;

						default:
							throw new Error("Hash.digest(): unknown encoding " + encoding);
					}
				}
			};

			@@ `hash->ctx = hash_init(`algorithm); @@

			return hash;
		},

		createHmac: function createHmac(algorithm, key) {
			var hash = {
				update: function update(data, inputEncoding) {
					if (inputEncoding) {
						throw new NotImplementedError("Hmac.update(): inputEncoding ignored");
					}

					@@ hash_update($leThis->ctx, JS::toString(`data, $global)); @@

					return this;
				},

				digest: function digest(encoding) {
					var output = @@ hash_final($leThis->ctx, TRUE); @@
					encoding = encoding || "binary";

					switch (encoding) {
						case "binary":
							return output;

						case "hex":
							return @@ bin2hex(`output) @@;

						case "base64":
							return @@ base64_encode(`output) @@;

						default:
							throw new Error("Hmac.digest(): unknown encoding " + encoding);
					}
				}
			};

			@@ `hash->ctx = hash_init(`algorithm, HASH_HMAC, `key); @@

			return hash;
		},

		md5: function (data) {
			return require.modules.crypto.exports.createHash("md5").update(data).digest("hex");
		},

		sha1: function (data) {
			return require.modules.crypto.exports.createHash("sha1").update(data).digest("hex");
		}
	}
};
