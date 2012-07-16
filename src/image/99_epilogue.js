@@
	JS::$global = $scope;
	JS::$global->prototype = JS::$global->up = NULL;
	JS::$global->class = 'Global';
	JS::$global->extensible = TRUE;
	unset(JS::$global->scope, JS::$global->scope_sp);
@@
