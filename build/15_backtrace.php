function _e1498e8e1b8e41ed66f2327ce64d04e6_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x4 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x5 = $x4($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x5; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _e1498e8e1b8e41ed66f2327ce64d04e6_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x4=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x5=$x4($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x5;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _e1498e8e1b8e41ed66f2327ce64d04e6_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _e1498e8e1b8e41ed66f2327ce64d04e6_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x10[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x10;
$x11 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x12 = $x11($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x12->class) && $x12->class === 'Error') {$x12->properties['file'] = $file;$x12->properties['line'] = $line;$x12->properties['column'] = $column;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
throw new JSException($x12, $line, $column, $file);
}
$W9 = $S9 = $U9 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x9 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x13 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x14 = $x13($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x9 = $x14; }
else { $x9 = JS::$undefined; $U9 = TRUE; }
return array(&$x9, $W9, $S9, $U9);
}
echo 'function _e1498e8e1b8e41ed66f2327ce64d04e6_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_e1498e8e1b8e41ed66f2327ce64d04e6_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x9=$x14;}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
function _e1498e8e1b8e41ed66f2327ce64d04e6_1($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1 =& $scope->properties['arguments'];
$x1->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1->properties[$i] = $args[$i];
$x1->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['backtrace'] = $fn;
$_backtrace =& $scope->properties['backtrace'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = clone JS::$arrayTemplate;
$x2->properties['length'] = 0;
$x2->attributes['length'] = JS::WRITABLE;
unset($_backtrace);
$scope->properties['backtrace'] = JS::$undefined; $_backtrace =& $scope->properties['backtrace'];
$Ubacktrace = FALSE;
$_backtrace = $x2;
$scope->properties['file'] = JS::$undefined; $_file =& $scope->properties['file'];
$Ufile = FALSE;
$_file = JS::$undefined;
$scope->properties['line'] = JS::$undefined; $_line =& $scope->properties['line'];
$Uline = FALSE;
$_line = JS::$undefined;
$scope->properties['column'] = JS::$undefined; $_column =& $scope->properties['column'];
$Ucolumn = FALSE;
$_column = JS::$undefined;
foreach (array_slice(array_reverse($global->trace), 1) as $item) {;
list($_file,$_line,$_column) = $item;
if ($_backtrace === JS::$undefined || $_backtrace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x6 = _e1498e8e1b8e41ed66f2327ce64d04e6_2($global, $scope, $scope, (string) 'TypeError', 6, 17, '<image>/15_backtrace.js');
$_TypeError =& $x6[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x6;
$x7 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/15_backtrace.js', 6, 17);
$x8 = $x7($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x8->class) && $x8->class === 'Error') {$x8->properties['file'] = '<image>/15_backtrace.js';$x8->properties['line'] = 6;$x8->properties['column'] = 17;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
throw new JSException($x8, 6, 17, '<image>/15_backtrace.js');
}
$x3 = JS::toObject($_backtrace, $global);
unset($x9, $W9, $S9, $U9);
$x15 = _e1498e8e1b8e41ed66f2327ce64d04e6_3($global, $scope, $x3, (string) 'push', 6, 17, '<image>/15_backtrace.js');
$x9 =& $x15[0]; list(,$W9,$S9,$U9) = $x15;
$x16 = clone JS::$objectTemplate;
$x16->properties['file'] = $_file;
$x16->attributes['file'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x16->properties['line'] = $_line;
$x16->attributes['line'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x16->properties['column'] = $_column;
$x16->attributes['column'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (!(is_object($x9) && isset($x9->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x19 = _e1498e8e1b8e41ed66f2327ce64d04e6_2($global, $scope, $scope, (string) 'TypeError', 6, 17, '<image>/15_backtrace.js');
$_TypeError =& $x19[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x19;
$x20 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/15_backtrace.js', 6, 17);
$x21 = $x20($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x21->class) && $x21->class === 'Error') {$x21->properties['file'] = '<image>/15_backtrace.js';$x21->properties['line'] = 6;$x21->properties['column'] = 17;$x21->attributes['file'] = $x21->attributes['line'] = $x21->attributes['column'] = 0; }
throw new JSException($x21, 6, 17, '<image>/15_backtrace.js');
}
$x17 = $x9->call;
$global->trace[++$global->trace_sp] = array('<image>/15_backtrace.js', 6, 17);
$x18 = $x17($global, $x3, $x9, array($x16), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_backtrace;
;
return JS::$undefined;
}
echo 'function _e1498e8e1b8e41ed66f2327ce64d04e6_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'backtrace\']=$fn;$_backtrace=&$scope->properties[\'backtrace\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$arrayTemplate;$x2->properties[\'length\']=0;$x2->attributes[\'length\']=JS::WRITABLE;unset($_backtrace);$scope->properties[\'backtrace\']=JS::$undefined;$_backtrace=&$scope->properties[\'backtrace\'];$Ubacktrace=FALSE;$_backtrace=$x2;$scope->properties[\'file\']=JS::$undefined;$_file=&$scope->properties[\'file\'];$Ufile=FALSE;$_file=JS::$undefined;$scope->properties[\'line\']=JS::$undefined;$_line=&$scope->properties[\'line\'];$Uline=FALSE;$_line=JS::$undefined;$scope->properties[\'column\']=JS::$undefined;$_column=&$scope->properties[\'column\'];$Ucolumn=FALSE;$_column=JS::$undefined;foreach(array_slice(array_reverse($global->trace),1)as$item){;list($_file,$_line,$_column)=$item;if($_backtrace===JS::$undefined||$_backtrace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x6=_e1498e8e1b8e41ed66f2327ce64d04e6_2($global,$scope,$scope,(string)\'TypeError\',6,17,\'<image>/15_backtrace.js\');$_TypeError=&$x6[0];list(,$WTypeError,$STypeError,$UTypeError)=$x6;$x7=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/15_backtrace.js\',6,17);$x8=$x7($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'){$x8->properties[\'file\']=\'<image>/15_backtrace.js\';$x8->properties[\'line\']=6;$x8->properties[\'column\']=17;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,6,17,\'<image>/15_backtrace.js\');}$x3=JS::toObject($_backtrace,$global);unset($x9,$W9,$S9,$U9);$x15=_e1498e8e1b8e41ed66f2327ce64d04e6_3($global,$scope,$x3,(string)\'push\',6,17,\'<image>/15_backtrace.js\');$x9=&$x15[0];list(,$W9,$S9,$U9)=$x15;$x16=clone JS::$objectTemplate;$x16->properties[\'file\']=$_file;$x16->attributes[\'file\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x16->properties[\'line\']=$_line;$x16->attributes[\'line\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x16->properties[\'column\']=$_column;$x16->attributes[\'column\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(!(is_object($x9)&&isset($x9->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x19=_e1498e8e1b8e41ed66f2327ce64d04e6_2($global,$scope,$scope,(string)\'TypeError\',6,17,\'<image>/15_backtrace.js\');$_TypeError=&$x19[0];list(,$WTypeError,$STypeError,$UTypeError)=$x19;$x20=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/15_backtrace.js\',6,17);$x21=$x20($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x21->class)&&$x21->class===\'Error\'){$x21->properties[\'file\']=\'<image>/15_backtrace.js\';$x21->properties[\'line\']=6;$x21->properties[\'column\']=17;$x21->attributes[\'file\']=$x21->attributes[\'line\']=$x21->attributes[\'column\']=0;}throw new JSException($x21,6,17,\'<image>/15_backtrace.js\');}$x17=$x9->call;$global->trace[++$global->trace_sp]=array(\'<image>/15_backtrace.js\',6,17);$x18=$x17($global,$x3,$x9,array($x16),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_backtrace;return JS::$undefined;}', "\n";
function _e1498e8e1b8e41ed66f2327ce64d04e6_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/15_backtrace.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/15_backtrace.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x22 = clone JS::$functionTemplate; $x22->call = '_e1498e8e1b8e41ed66f2327ce64d04e6_1'; $x22->parameters = array (
); $x22->name = 'backtrace'; $x22->scope = $scope; $x22->properties['prototype'] = clone JS::$objectTemplate; $x22->attributes['prototype'] = JS::WRITABLE; $x22->properties['prototype']->properties['constructor'] = $x22; $x22->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x22->properties['length'] = 0; $x22->attributes['length'] = 0;
$scope->properties['backtrace'] = JS::$undefined; $_backtrace =& $scope->properties['backtrace'];
$Ubacktrace = FALSE;
$_backtrace = $x22;
$_backtrace;
;
return JS::$undefined;
}
