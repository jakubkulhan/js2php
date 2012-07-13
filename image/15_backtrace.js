function backtrace() {
	var backtrace = [], file, line, column;

	@@ foreach (array_slice(array_reverse($global->trace), 1) as $item) { @@
		@@ list(`file, `line, `column) = $item; @@
		backtrace.push({ file: file, line: line, column: column });
	@@ } @@
	
	return backtrace;
}
