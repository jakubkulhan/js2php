function _0a4fb25e6764da7fe3c9b30e2a58b89e_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/99_epilogue.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/99_epilogue.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;

JS::$global = $scope;
	JS::$global->prototype = JS::$global->up = NULL;
	JS::$global->class = 'Global';
	JS::$global->extensible = TRUE;
	unset(JS::$global->scope, JS::$global->scope_sp);
;
return JS::$undefined;
}
