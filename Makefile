all: src/JavascriptParser.php src/JavascriptCompiler.php src/image.php

src/JavascriptParser.php: src/JavascriptParser.phpeg
	./util/phpeg src/JavascriptParser.phpeg

src/JavascriptCompiler.php: src/JavascriptCompiler.phptw
	./util/phptwc src/JavascriptCompiler.phptw

src/image.php: image/*.js util/create-image.php
	./util/create-image.php > src/image.php

test:
	./test/run.php

binary: src/JavascriptParser.php src/JavascriptCompiler.php src/image.php
	./util/create-binary.php > bin/js2php-interpreter
	chmod +x bin/js2php-interpreter

.PHONY: test binary
