function _b45fd4b010504c47d533cae31d7d4176_1($global, $scope, $base, $id, $line, $column, $file) {
$Wglobal = $Sglobal = $Uglobal = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_global =& $lookup->properties[$id]; $Wglobal = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $Sglobal = $lookup->setters[$id]; }
else { $_global = JS::$undefined; $Uglobal = TRUE; }
return array(&$_global, $Wglobal, $Sglobal, $Uglobal);
}
echo 'function _b45fd4b010504c47d533cae31d7d4176_1($global,$scope,$base,$id,$line,$column,$file){$Wglobal=$Sglobal=$Uglobal=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_global=&$lookup->properties[$id];$Wglobal=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$Sglobal=$lookup->setters[$id];}else{$_global=JS::$undefined;$Uglobal=TRUE;}return array(&$_global,$Wglobal,$Sglobal,$Uglobal);}', "\n";
function _b45fd4b010504c47d533cae31d7d4176_3($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x6 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x7 = $x6($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x7; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _b45fd4b010504c47d533cae31d7d4176_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x6=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x7=$x6($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x7;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _b45fd4b010504c47d533cae31d7d4176_2($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x8 = _b45fd4b010504c47d533cae31d7d4176_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x8[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x8;
$x9 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x10 = $x9($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x10->class) && $x10->class === 'Error' && !isset($x10->properties['file']) && !isset($x10->properties['line']) && !isset($x10->properties['column'])) {$x10->properties['file'] = $file;$x10->properties['line'] = $line;$x10->properties['column'] = $column;$x10->attributes['file'] = $x10->attributes['line'] = $x10->attributes['column'] = 0; }
throw new JSException($x10, $line, $column, $file);
}
$W5 = $S5 = $U5 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x5 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x11 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x12 = $x11($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x5 = $x12; }
else { $x5 = JS::$undefined; $U5 = TRUE; }
return array(&$x5, $W5, $S5, $U5);
}
echo 'function _b45fd4b010504c47d533cae31d7d4176_2($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x8=_b45fd4b010504c47d533cae31d7d4176_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x8[0];list(,$WTypeError,$STypeError,$UTypeError)=$x8;$x9=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x10->class)&&$x10->class===\'Error\'&&!isset($x10->properties[\'file\'])&&!isset($x10->properties[\'line\'])&&!isset($x10->properties[\'column\'])){$x10->properties[\'file\']=$file;$x10->properties[\'line\']=$line;$x10->properties[\'column\']=$column;$x10->attributes[\'file\']=$x10->attributes[\'line\']=$x10->attributes[\'column\']=0;}throw new JSException($x10,$line,$column,$file);}$W5=$S5=$U5=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x5=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x11=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x5=$x12;}else{$x5=JS::$undefined;$U5=TRUE;}return array(&$x5,$W5,$S5,$U5);}', "\n";
function _b45fd4b010504c47d533cae31d7d4176_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/99_epilogue.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/99_epilogue.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = JS::$global;
unset($_global, $Wglobal, $Sglobal, $Uglobal);
$x1 = _b45fd4b010504c47d533cae31d7d4176_1($global, $scope, $scope, JS::toString('global', $global), 1, 8, '<image>/99_epilogue.js');
$_global =& $x1[0]; list(,$Wglobal,$Sglobal,$Uglobal) = $x1;
if ($Uglobal) {$global->properties['global'] = $_global; $_global =& $global->properties['global']; }
$_global = $x0;
$scope->properties['f'] = JS::$undefined; $_f =& $scope->properties['f'];
$Uf = FALSE;
$_f = JS::$undefined;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_global !== JS::$undefined && $_global !== NULL) {
for ($x3 = array(), $x2 = JS::toObject($_global, $global); $x2; $x2 = $x2->prototype) {
foreach ($x2->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x3[$property])) { continue; }
$x3[$property] = TRUE;
$_k = $property;

unset($x5, $W5, $S5, $U5);
$x13 = _b45fd4b010504c47d533cae31d7d4176_2($global, $scope, $_global, JS::toString($_k, $global), 5, 19, '<image>/99_epilogue.js');
$x5 =& $x13[0]; list(,$W5,$S5,$U5) = $x13;
$x14 = $x5;
$x14 = ($x14 === JS::$undefined ? 'undefined' : (is_int($x14) || is_float($x14) ? 'number' : (is_bool($x14) ? 'boolean' : (is_string($x14) ? 'string' : (is_object($x14) && isset($x14->call) ? 'function' : 'object')))));
$x4 = (((gettype($x14) === gettype('function') && $x14 === 'function'))|| (((is_float($x14) || is_int($x14)) && (is_float('function') || is_int('function'))) && $x14 == 'function'));
if (JS::toBoolean($x4, $global)) {
unset($x15, $W15, $S15, $U15);
$x16 = _b45fd4b010504c47d533cae31d7d4176_2($global, $scope, $_global, JS::toString($_k, $global), 6, 13, '<image>/99_epilogue.js');
$x15 =& $x16[0]; list(,$W15,$S15,$U15) = $x16;
if ($Uf) {$global->properties['f'] = $_f; $_f =& $global->properties['f']; }
$_f = $x15;
$_f->scope = JS::$global;;
};
}
}
};
for ($x18 = $scope; $x18 && $x18->up && !array_key_exists('f', $x18->attributes) && !array_key_exists('f', $x18->properties); $x18 = $x18->up);
if (!array_key_exists('f', $x18->attributes)) { unset($x18->properties['f'], $_f); $x17 = TRUE; }
else if ($x18->attributes['f'] & JS::CONFIGURABLE) { unset($x18->properties['f'], $x18->attributes['f'], $x18->getters['f'], $x18->setters['f'], $_f); $x17 = TRUE; }
else { $x17 = FALSE; };
for ($x20 = $scope; $x20 && $x20->up && !array_key_exists('k', $x20->attributes) && !array_key_exists('k', $x20->properties); $x20 = $x20->up);
if (!array_key_exists('k', $x20->attributes)) { unset($x20->properties['k'], $_k); $x19 = TRUE; }
else if ($x20->attributes['k'] & JS::CONFIGURABLE) { unset($x20->properties['k'], $x20->attributes['k'], $x20->getters['k'], $x20->setters['k'], $_k); $x19 = TRUE; }
else { $x19 = FALSE; };
for ($x22 = $scope; $x22 && $x22->up && !array_key_exists('global', $x22->attributes) && !array_key_exists('global', $x22->properties); $x22 = $x22->up);
if (!array_key_exists('global', $x22->attributes)) { unset($x22->properties['global'], $_global); $x21 = TRUE; }
else if ($x22->attributes['global'] & JS::CONFIGURABLE) { unset($x22->properties['global'], $x22->attributes['global'], $x22->getters['global'], $x22->setters['global'], $_global); $x21 = TRUE; }
else { $x21 = FALSE; };
JS::$wrappedObjectTemplates = JS::$wrappedObjects = array();
	JS::$global = $scope;
	JS::$global->prototype = JS::$global->up = NULL;
	JS::$global->class = 'Global';
	JS::$global->extensible = TRUE;
	unset(JS::$global->trace, JS::$global->trace_sp, JS::$global->scope, JS::$global->scope_sp);
;
return JS::$undefined;
}
