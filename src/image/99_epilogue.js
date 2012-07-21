global = @@ JS::$global @@;
var f;

for (var k in global) {
	if (typeof global[k] === "function") {
		f = global[k];
		@@ `f->scope = JS::$global; @@
	}
}

delete f;
delete k;
delete global;

@@
	JS::$wrappedObjectTemplates = JS::$wrappedObjects = array();
	JS::$global = $scope;
	JS::$global->prototype = JS::$global->up = NULL;
	JS::$global->class = 'Global';
	JS::$global->extensible = TRUE;
	unset(JS::$global->trace, JS::$global->trace_sp, JS::$global->scope, JS::$global->scope_sp);
@@
