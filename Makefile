all: src/JSParser.php src/JSCompiler.php src/image.php

src/JSParser.php: src/JSParser.phpeg
	./util/phpeg src/JSParser.phpeg

src/JSCompiler.php: src/JSCompiler.phptw
	./util/phptwc src/JSCompiler.phptw

src/image.php: image/*.js src/JSParser.php src/JSCompiler.php util/create-image.php
	./util/create-image.php > src/image.php

test:
	./test/run.php

clean:
	rm -f src/JSParser.php
	rm -f src/JSCompiler.php
	rm -f src/image.php
	rm -f bin/js2php-interpreter

binary: src/JSParser.php src/JSCompiler.php src/image.php
	./util/create-binary.php > bin/js2php-interpreter
	chmod +x bin/js2php-interpreter

.PHONY: test binary clean
