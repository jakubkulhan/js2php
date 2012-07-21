function _3411dfcb3a85bb909d635ca35d6d3d6a_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['value'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_value =& $scope->properties['value'];
$Uvalue = FALSE;
$scope->properties['Object'] = $fn;
$_Object =& $scope->properties['Object'];
$global->scope[++$global->scope_sp] = $scope;
$x3 = (((gettype($_value) === gettype(JS::$undefined) && $_value === JS::$undefined))|| (((is_float($_value) || is_int($_value)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_value == JS::$undefined));
$x2 = $x3;
if (!JS::toBoolean($x2, $global)) {
$x4 = (((gettype($_value) === gettype(NULL) && $_value === NULL))|| (((is_float($_value) || is_int($_value)) && (is_float(NULL) || is_int(NULL))) && $_value == NULL));
$x2 = $x4; }
if (JS::toBoolean($x2, $global)) {
$x5 = clone JS::$objectTemplate;
return $x5;;
};
return JS::toObject($_value, $global);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'Object\']=$fn;$_Object=&$scope->properties[\'Object\'];$global->scope[++$global->scope_sp]=$scope;$x3=(((gettype($_value)===gettype(JS::$undefined)&&$_value===JS::$undefined))||(((is_float($_value)||is_int($_value))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_value==JS::$undefined));$x2=$x3;if(!JS::toBoolean($x2,$global)){$x4=(((gettype($_value)===gettype(NULL)&&$_value===NULL))||(((is_float($_value)||is_int($_value))&&(is_float(NULL)||is_int(NULL)))&&$_value==NULL));$x2=$x4;}if(JS::toBoolean($x2,$global)){$x5=clone JS::$objectTemplate;return$x5;}return JS::toObject($_value,$global);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x18 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x19 = $x18($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x19; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x19;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
$x25 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x26 = $x25($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x26->class) && $x26->class === 'Error') {$x26->properties['file'] = $file;$x26->properties['line'] = $line;$x26->properties['column'] = $column;$x26->attributes['file'] = $x26->attributes['line'] = $x26->attributes['column'] = 0; }
throw new JSException($x26, $line, $column, $file);
}
$W24 = $S24 = $U24 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x24 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x27 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x28 = $x27($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x24 = $x28; }
else { $x24 = JS::$undefined; $U24 = TRUE; }
return array(&$x24, $W24, $S24, $U24);
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){$x25=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x26=$x25($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'){$x26->properties[\'file\']=$file;$x26->properties[\'line\']=$line;$x26->properties[\'column\']=$column;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,$line,$column,$file);}$W24=$S24=$U24=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x24=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x27=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x28=$x27($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x24=$x28;}else{$x24=JS::$undefined;$U24=TRUE;}return array(&$x24,$W24,$S24,$U24);}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x8 =& $scope->properties['arguments'];
$x8->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x8->properties[$i] = $args[$i];
$x8->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x10 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x9 = $x10;
if (!JS::toBoolean($x9, $global)) {
$x13 = $_o;
$x13 = ($x13 === JS::$undefined ? 'undefined' : (is_int($x13) || is_float($x13) ? 'number' : (is_bool($x13) ? 'boolean' : (is_string($x13) ? 'string' : (is_object($x13) && isset($x13->call) ? 'function' : 'object')))));
$x12 = !(((gettype($x13) === gettype('object') && $x13 === 'object'))|| (((is_float($x13) || is_int($x13)) && (is_float('object') || is_int('object'))) && $x13 == 'object'));
$x11 = $x12;
if (JS::toBoolean($x11, $global)) {
$x15 = $_o;
$x15 = ($x15 === JS::$undefined ? 'undefined' : (is_int($x15) || is_float($x15) ? 'number' : (is_bool($x15) ? 'boolean' : (is_string($x15) ? 'string' : (is_object($x15) && isset($x15->call) ? 'function' : 'object')))));
$x14 = !(((gettype($x15) === gettype('function') && $x15 === 'function'))|| (((is_float($x15) || is_int($x15)) && (is_float('function') || is_int('function'))) && $x15 == 'function'));
$x11 = $x14; }
$x9 = $x11; }
if (JS::toBoolean($x9, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x20 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 11, 13, '<image>/02_object.js');
$_TypeError =& $x20[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x20;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x21 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 11, 13, '<image>/02_object.js');
$_ReferenceError =& $x21[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x21;
$x22 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 11, 13);
$x23 = $x22($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x23->class) && $x23->class === 'Error') {$x23->properties['file'] = '<image>/02_object.js';$x23->properties['line'] = 11;$x23->properties['column'] = 13;$x23->attributes['file'] = $x23->attributes['line'] = $x23->attributes['column'] = 0; }
throw new JSException($x23, 11, 13, '<image>/02_object.js');
}
$x16 = clone JS::$objectTemplate;
unset($x24, $W24, $S24, $U24);
$x29 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 11, 9, '<image>/02_object.js');
$x24 =& $x29[0]; list(,$W24,$S24,$U24) = $x29;
$x17 = $x24;
$x16->prototype = $x17;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x32 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 11, 9);
$x33 = $x32($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x33->class) && $x33->class === 'Error') {$x33->properties['file'] = '<image>/02_object.js';$x33->properties['line'] = 11;$x33->properties['column'] = 9;$x33->attributes['file'] = $x33->attributes['line'] = $x33->attributes['column'] = 0; }
throw new JSException($x33, 11, 9, '<image>/02_object.js');
}
$x30 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 11, 9);
$x31 = $x30($global, $x16, $_TypeError, array('Object.getPrototyeOf(): Cannot get prototype of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x17 = $x31;
if (is_object($x17) && $x17 !== JS::$undefined) { $x16 = $x17; }
if (isset($x16->class) && $x16->class === 'Error') {$x16->properties['file'] = '<image>/02_object.js';$x16->properties['line'] = 11;$x16->properties['column'] = 3;$x16->attributes['file'] = $x16->attributes['line'] = $x16->attributes['column'] = 0; }
throw new JSException($x16, 11, 3, '<image>/02_object.js');;
};
return $_o->prototype;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x8=&$scope->properties[\'arguments\'];$x8->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x8->properties[$i]=$args[$i];$x8->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x10=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x9=$x10;if(!JS::toBoolean($x9,$global)){$x13=$_o;$x13=($x13===JS::$undefined?\'undefined\':(is_int($x13)||is_float($x13)?\'number\':(is_bool($x13)?\'boolean\':(is_string($x13)?\'string\':(is_object($x13)&&isset($x13->call)?\'function\':\'object\')))));$x12=!(((gettype($x13)===gettype(\'object\')&&$x13===\'object\'))||(((is_float($x13)||is_int($x13))&&(is_float(\'object\')||is_int(\'object\')))&&$x13==\'object\'));$x11=$x12;if(JS::toBoolean($x11,$global)){$x15=$_o;$x15=($x15===JS::$undefined?\'undefined\':(is_int($x15)||is_float($x15)?\'number\':(is_bool($x15)?\'boolean\':(is_string($x15)?\'string\':(is_object($x15)&&isset($x15->call)?\'function\':\'object\')))));$x14=!(((gettype($x15)===gettype(\'function\')&&$x15===\'function\'))||(((is_float($x15)||is_int($x15))&&(is_float(\'function\')||is_int(\'function\')))&&$x15==\'function\'));$x11=$x14;}$x9=$x11;}if(JS::toBoolean($x9,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x20=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',11,13,\'<image>/02_object.js\');$_TypeError=&$x20[0];list(,$WTypeError,$STypeError,$UTypeError)=$x20;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x21=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',11,13,\'<image>/02_object.js\');$_ReferenceError=&$x21[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x21;$x22=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,13);$x23=$x22($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x23->class)&&$x23->class===\'Error\'){$x23->properties[\'file\']=\'<image>/02_object.js\';$x23->properties[\'line\']=11;$x23->properties[\'column\']=13;$x23->attributes[\'file\']=$x23->attributes[\'line\']=$x23->attributes[\'column\']=0;}throw new JSException($x23,11,13,\'<image>/02_object.js\');}$x16=clone JS::$objectTemplate;unset($x24,$W24,$S24,$U24);$x29=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',11,9,\'<image>/02_object.js\');$x24=&$x29[0];list(,$W24,$S24,$U24)=$x29;$x17=$x24;$x16->prototype=$x17;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x32=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,9);$x33=$x32($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x33->class)&&$x33->class===\'Error\'){$x33->properties[\'file\']=\'<image>/02_object.js\';$x33->properties[\'line\']=11;$x33->properties[\'column\']=9;$x33->attributes[\'file\']=$x33->attributes[\'line\']=$x33->attributes[\'column\']=0;}throw new JSException($x33,11,9,\'<image>/02_object.js\');}$x30=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,9);$x31=$x30($global,$x16,$_TypeError,array(\'Object.getPrototyeOf(): Cannot get prototype of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x17=$x31;if(is_object($x17)&&$x17!==JS::$undefined){$x16=$x17;}if(isset($x16->class)&&$x16->class===\'Error\'){$x16->properties[\'file\']=\'<image>/02_object.js\';$x16->properties[\'line\']=11;$x16->properties[\'column\']=3;$x16->attributes[\'file\']=$x16->attributes[\'line\']=$x16->attributes[\'column\']=0;}throw new JSException($x16,11,3,\'<image>/02_object.js\');}return$_o->prototype;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x39 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x39[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x39;
$x40 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x41 = $x40($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x41->class) && $x41->class === 'Error') {$x41->properties['file'] = $file;$x41->properties['line'] = $line;$x41->properties['column'] = $column;$x41->attributes['file'] = $x41->attributes['line'] = $x41->attributes['column'] = 0; }
throw new JSException($x41, $line, $column, $file);
}
$W38 = $S38 = $U38 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x38 =& $lookup->properties[$id]; $W38 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S38 = $lookup->setters[$id]; }
else { $x38 = JS::$undefined; $U38 = TRUE; }
return array(&$x38, $W38, $S38, $U38);
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x39=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x39[0];list(,$WTypeError,$STypeError,$UTypeError)=$x39;$x40=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x41=$x40($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x41->class)&&$x41->class===\'Error\'){$x41->properties[\'file\']=$file;$x41->properties[\'line\']=$line;$x41->properties[\'column\']=$column;$x41->attributes[\'file\']=$x41->attributes[\'line\']=$x41->attributes[\'column\']=0;}throw new JSException($x41,$line,$column,$file);}$W38=$S38=$U38=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x38=&$lookup->properties[$id];$W38=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S38=$lookup->setters[$id];}else{$x38=JS::$undefined;$U38=TRUE;}return array(&$x38,$W38,$S38,$U38);}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x47 =& $scope->properties['arguments'];
$x47->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x47->properties[$i] = $args[$i];
$x47->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['p'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x49 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x48 = $x49;
if (!JS::toBoolean($x48, $global)) {
$x52 = $_o;
$x52 = ($x52 === JS::$undefined ? 'undefined' : (is_int($x52) || is_float($x52) ? 'number' : (is_bool($x52) ? 'boolean' : (is_string($x52) ? 'string' : (is_object($x52) && isset($x52->call) ? 'function' : 'object')))));
$x51 = !(((gettype($x52) === gettype('object') && $x52 === 'object'))|| (((is_float($x52) || is_int($x52)) && (is_float('object') || is_int('object'))) && $x52 == 'object'));
$x50 = $x51;
if (JS::toBoolean($x50, $global)) {
$x54 = $_o;
$x54 = ($x54 === JS::$undefined ? 'undefined' : (is_int($x54) || is_float($x54) ? 'number' : (is_bool($x54) ? 'boolean' : (is_string($x54) ? 'string' : (is_object($x54) && isset($x54->call) ? 'function' : 'object')))));
$x53 = !(((gettype($x54) === gettype('function') && $x54 === 'function'))|| (((is_float($x54) || is_int($x54)) && (is_float('function') || is_int('function'))) && $x54 == 'function'));
$x50 = $x53; }
$x48 = $x50; }
if (JS::toBoolean($x48, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x57 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 19, 13, '<image>/02_object.js');
$_TypeError =& $x57[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x57;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x58 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 19, 13, '<image>/02_object.js');
$_ReferenceError =& $x58[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x58;
$x59 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 13);
$x60 = $x59($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error') {$x60->properties['file'] = '<image>/02_object.js';$x60->properties['line'] = 19;$x60->properties['column'] = 13;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 19, 13, '<image>/02_object.js');
}
$x55 = clone JS::$objectTemplate;
unset($x61, $W61, $S61, $U61);
$x62 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 19, 9, '<image>/02_object.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
$x56 = $x61;
$x55->prototype = $x56;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x65 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x66 = $x65($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x66->class) && $x66->class === 'Error') {$x66->properties['file'] = '<image>/02_object.js';$x66->properties['line'] = 19;$x66->properties['column'] = 9;$x66->attributes['file'] = $x66->attributes['line'] = $x66->attributes['column'] = 0; }
throw new JSException($x66, 19, 9, '<image>/02_object.js');
}
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x64 = $x63($global, $x55, $_TypeError, array('Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x56 = $x64;
if (is_object($x56) && $x56 !== JS::$undefined) { $x55 = $x56; }
if (isset($x55->class) && $x55->class === 'Error') {$x55->properties['file'] = '<image>/02_object.js';$x55->properties['line'] = 19;$x55->properties['column'] = 3;$x55->attributes['file'] = $x55->attributes['line'] = $x55->attributes['column'] = 0; }
throw new JSException($x55, 19, 3, '<image>/02_object.js');;
};
if (JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties) || array_key_exists($_p,$_o->attributes), $global)), $global)) {

return JS::$undefined;;
};
$x67 = clone JS::$objectTemplate;
$scope->properties['desc'] = JS::$undefined; $_desc =& $scope->properties['desc'];
$Udesc = FALSE;
$_desc = $x67;
if (JS::toBoolean(array_key_exists($_p,$_o->properties), $global)) {
unset($x68, $W68, $S68, $U68);
$x69 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_o, (string) $_p, 29, 17, '<image>/02_object.js');
$x68 =& $x69[0]; list(,$W68,$S68,$U68) = $x69;
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x70 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 29, 14, '<image>/02_object.js');
$_TypeError =& $x70[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x70;
$x71 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x72 = $x71($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x72->class) && $x72->class === 'Error') {$x72->properties['file'] = '<image>/02_object.js';$x72->properties['line'] = 29;$x72->properties['column'] = 14;$x72->attributes['file'] = $x72->attributes['line'] = $x72->attributes['column'] = 0; }
throw new JSException($x72, 29, 14, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x73, $W73, $S73, $U73);
$x74 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'value', 29, 14, '<image>/02_object.js');
$x73 =& $x74[0]; list(,$W73,$S73,$U73) = $x74;
if ($U73 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['value'] = $x73; $x73 =& $_desc->properties['value']; $_desc->attributes['value'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U73 = FALSE; $W73 = TRUE; }
if (isset($S73)) {
$x76 = $S73->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x77 = $x76($global, $_desc, $S73, array($x68), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x75 = $x77;
} else {
if (!$U73) {$x75 = $x68;if ($W73) { $x73 = $x68; }  }
else { $x75 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('value') && 'value' >= $_desc->properties['length']) { $_desc->properties['length'] = 'value' + 1; };
$x78 = JS::toBoolean($_o->attributes[$_p] & JS::WRITABLE, $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x79 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 30, 17, '<image>/02_object.js');
$_TypeError =& $x79[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x79;
$x80 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x81 = $x80($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x81->class) && $x81->class === 'Error') {$x81->properties['file'] = '<image>/02_object.js';$x81->properties['line'] = 30;$x81->properties['column'] = 17;$x81->attributes['file'] = $x81->attributes['line'] = $x81->attributes['column'] = 0; }
throw new JSException($x81, 30, 17, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x82, $W82, $S82, $U82);
$x83 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'writable', 30, 17, '<image>/02_object.js');
$x82 =& $x83[0]; list(,$W82,$S82,$U82) = $x83;
if ($U82 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['writable'] = $x82; $x82 =& $_desc->properties['writable']; $_desc->attributes['writable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U82 = FALSE; $W82 = TRUE; }
if (isset($S82)) {
$x85 = $S82->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x86 = $x85($global, $_desc, $S82, array($x78), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x84 = $x86;
} else {
if (!$U82) {$x84 = $x78;if ($W82) { $x82 = $x78; }  }
else { $x84 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('writable') && 'writable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'writable' + 1; };;
}
else {
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_GETTER, $global)) {
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x87 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 34, 13, '<image>/02_object.js');
$_TypeError =& $x87[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x87;
$x88 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x89 = $x88($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error') {$x89->properties['file'] = '<image>/02_object.js';$x89->properties['line'] = 34;$x89->properties['column'] = 13;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, 34, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x90, $W90, $S90, $U90);
$x91 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'get', 34, 13, '<image>/02_object.js');
$x90 =& $x91[0]; list(,$W90,$S90,$U90) = $x91;
if ($U90 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['get'] = $x90; $x90 =& $_desc->properties['get']; $_desc->attributes['get'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U90 = FALSE; $W90 = TRUE; }
if (isset($S90)) {
$x93 = $S90->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x94 = $x93($global, $_desc, $S90, array($_o->getters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x92 = $x94;
} else {
if (!$U90) {$x92 = $_o->getters[$_p];if ($W90) { $x90 = $_o->getters[$_p]; }  }
else { $x92 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('get') && 'get' >= $_desc->properties['length']) { $_desc->properties['length'] = 'get' + 1; };
};
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_SETTER, $global)) {
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x95 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 38, 13, '<image>/02_object.js');
$_TypeError =& $x95[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x95;
$x96 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x97 = $x96($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error') {$x97->properties['file'] = '<image>/02_object.js';$x97->properties['line'] = 38;$x97->properties['column'] = 13;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 38, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x98, $W98, $S98, $U98);
$x99 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'set', 38, 13, '<image>/02_object.js');
$x98 =& $x99[0]; list(,$W98,$S98,$U98) = $x99;
if ($U98 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['set'] = $x98; $x98 =& $_desc->properties['set']; $_desc->attributes['set'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U98 = FALSE; $W98 = TRUE; }
if (isset($S98)) {
$x101 = $S98->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x102 = $x101($global, $_desc, $S98, array($_o->setters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x100 = $x102;
} else {
if (!$U98) {$x100 = $_o->setters[$_p];if ($W98) { $x98 = $_o->setters[$_p]; }  }
else { $x100 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('set') && 'set' >= $_desc->properties['length']) { $_desc->properties['length'] = 'set' + 1; };
};;
};
$x103 = JS::toBoolean($_o->attributes[$_p] & JS::ENUMERABLE, $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x104 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 42, 18, '<image>/02_object.js');
$_TypeError =& $x104[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x104;
$x105 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x106 = $x105($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x106->class) && $x106->class === 'Error') {$x106->properties['file'] = '<image>/02_object.js';$x106->properties['line'] = 42;$x106->properties['column'] = 18;$x106->attributes['file'] = $x106->attributes['line'] = $x106->attributes['column'] = 0; }
throw new JSException($x106, 42, 18, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x107, $W107, $S107, $U107);
$x108 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'enumerable', 42, 18, '<image>/02_object.js');
$x107 =& $x108[0]; list(,$W107,$S107,$U107) = $x108;
if ($U107 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['enumerable'] = $x107; $x107 =& $_desc->properties['enumerable']; $_desc->attributes['enumerable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U107 = FALSE; $W107 = TRUE; }
if (isset($S107)) {
$x110 = $S107->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x111 = $x110($global, $_desc, $S107, array($x103), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x109 = $x111;
} else {
if (!$U107) {$x109 = $x103;if ($W107) { $x107 = $x103; }  }
else { $x109 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('enumerable') && 'enumerable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'enumerable' + 1; };
$x112 = JS::toBoolean($_o->attributes[$_p] & JS::CONFIGURABLE, $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x113 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 43, 20, '<image>/02_object.js');
$_TypeError =& $x113[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x113;
$x114 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x115 = $x114($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x115->class) && $x115->class === 'Error') {$x115->properties['file'] = '<image>/02_object.js';$x115->properties['line'] = 43;$x115->properties['column'] = 20;$x115->attributes['file'] = $x115->attributes['line'] = $x115->attributes['column'] = 0; }
throw new JSException($x115, 43, 20, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x116, $W116, $S116, $U116);
$x117 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'configurable', 43, 20, '<image>/02_object.js');
$x116 =& $x117[0]; list(,$W116,$S116,$U116) = $x117;
if ($U116 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['configurable'] = $x116; $x116 =& $_desc->properties['configurable']; $_desc->attributes['configurable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U116 = FALSE; $W116 = TRUE; }
if (isset($S116)) {
$x119 = $S116->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x120 = $x119($global, $_desc, $S116, array($x112), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x118 = $x120;
} else {
if (!$U116) {$x118 = $x112;if ($W116) { $x116 = $x112; }  }
else { $x118 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('configurable') && 'configurable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'configurable' + 1; };
return $_desc;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x47=&$scope->properties[\'arguments\'];$x47->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x47->properties[$i]=$args[$i];$x47->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;$x49=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x48=$x49;if(!JS::toBoolean($x48,$global)){$x52=$_o;$x52=($x52===JS::$undefined?\'undefined\':(is_int($x52)||is_float($x52)?\'number\':(is_bool($x52)?\'boolean\':(is_string($x52)?\'string\':(is_object($x52)&&isset($x52->call)?\'function\':\'object\')))));$x51=!(((gettype($x52)===gettype(\'object\')&&$x52===\'object\'))||(((is_float($x52)||is_int($x52))&&(is_float(\'object\')||is_int(\'object\')))&&$x52==\'object\'));$x50=$x51;if(JS::toBoolean($x50,$global)){$x54=$_o;$x54=($x54===JS::$undefined?\'undefined\':(is_int($x54)||is_float($x54)?\'number\':(is_bool($x54)?\'boolean\':(is_string($x54)?\'string\':(is_object($x54)&&isset($x54->call)?\'function\':\'object\')))));$x53=!(((gettype($x54)===gettype(\'function\')&&$x54===\'function\'))||(((is_float($x54)||is_int($x54))&&(is_float(\'function\')||is_int(\'function\')))&&$x54==\'function\'));$x50=$x53;}$x48=$x50;}if(JS::toBoolean($x48,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x57=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',19,13,\'<image>/02_object.js\');$_TypeError=&$x57[0];list(,$WTypeError,$STypeError,$UTypeError)=$x57;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x58=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',19,13,\'<image>/02_object.js\');$_ReferenceError=&$x58[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x58;$x59=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,13);$x60=$x59($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'){$x60->properties[\'file\']=\'<image>/02_object.js\';$x60->properties[\'line\']=19;$x60->properties[\'column\']=13;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,19,13,\'<image>/02_object.js\');}$x55=clone JS::$objectTemplate;unset($x61,$W61,$S61,$U61);$x62=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',19,9,\'<image>/02_object.js\');$x61=&$x62[0];list(,$W61,$S61,$U61)=$x62;$x56=$x61;$x55->prototype=$x56;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x65=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x66=$x65($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x66->class)&&$x66->class===\'Error\'){$x66->properties[\'file\']=\'<image>/02_object.js\';$x66->properties[\'line\']=19;$x66->properties[\'column\']=9;$x66->attributes[\'file\']=$x66->attributes[\'line\']=$x66->attributes[\'column\']=0;}throw new JSException($x66,19,9,\'<image>/02_object.js\');}$x63=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x64=$x63($global,$x55,$_TypeError,array(\'Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x56=$x64;if(is_object($x56)&&$x56!==JS::$undefined){$x55=$x56;}if(isset($x55->class)&&$x55->class===\'Error\'){$x55->properties[\'file\']=\'<image>/02_object.js\';$x55->properties[\'line\']=19;$x55->properties[\'column\']=3;$x55->attributes[\'file\']=$x55->attributes[\'line\']=$x55->attributes[\'column\']=0;}throw new JSException($x55,19,3,\'<image>/02_object.js\');}if(JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties)||array_key_exists($_p,$_o->attributes),$global)),$global)){return JS::$undefined;}$x67=clone JS::$objectTemplate;$scope->properties[\'desc\']=JS::$undefined;$_desc=&$scope->properties[\'desc\'];$Udesc=FALSE;$_desc=$x67;if(JS::toBoolean(array_key_exists($_p,$_o->properties),$global)){unset($x68,$W68,$S68,$U68);$x69=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_o,(string)$_p,29,17,\'<image>/02_object.js\');$x68=&$x69[0];list(,$W68,$S68,$U68)=$x69;if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',29,14,\'<image>/02_object.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;$x71=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x72=$x71($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x72->class)&&$x72->class===\'Error\'){$x72->properties[\'file\']=\'<image>/02_object.js\';$x72->properties[\'line\']=29;$x72->properties[\'column\']=14;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,29,14,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x73,$W73,$S73,$U73);$x74=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'value\',29,14,\'<image>/02_object.js\');$x73=&$x74[0];list(,$W73,$S73,$U73)=$x74;if($U73&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'value\']=$x73;$x73=&$_desc->properties[\'value\'];$_desc->attributes[\'value\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U73=FALSE;$W73=TRUE;}if(isset($S73)){$x76=$S73->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x77=$x76($global,$_desc,$S73,array($x68),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x75=$x77;}else{if(!$U73){$x75=$x68;if($W73){$x73=$x68;}}else{$x75=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'value\')&&\'value\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'value\'+1;}$x78=JS::toBoolean($_o->attributes[$_p]&JS::WRITABLE,$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x79=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',30,17,\'<image>/02_object.js\');$_TypeError=&$x79[0];list(,$WTypeError,$STypeError,$UTypeError)=$x79;$x80=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x81=$x80($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x81->class)&&$x81->class===\'Error\'){$x81->properties[\'file\']=\'<image>/02_object.js\';$x81->properties[\'line\']=30;$x81->properties[\'column\']=17;$x81->attributes[\'file\']=$x81->attributes[\'line\']=$x81->attributes[\'column\']=0;}throw new JSException($x81,30,17,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x82,$W82,$S82,$U82);$x83=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'writable\',30,17,\'<image>/02_object.js\');$x82=&$x83[0];list(,$W82,$S82,$U82)=$x83;if($U82&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'writable\']=$x82;$x82=&$_desc->properties[\'writable\'];$_desc->attributes[\'writable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U82=FALSE;$W82=TRUE;}if(isset($S82)){$x85=$S82->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x86=$x85($global,$_desc,$S82,array($x78),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x84=$x86;}else{if(!$U82){$x84=$x78;if($W82){$x82=$x78;}}else{$x84=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'writable\')&&\'writable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'writable\'+1;}}else{if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_GETTER,$global)){if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x87=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',34,13,\'<image>/02_object.js\');$_TypeError=&$x87[0];list(,$WTypeError,$STypeError,$UTypeError)=$x87;$x88=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x89=$x88($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x89->class)&&$x89->class===\'Error\'){$x89->properties[\'file\']=\'<image>/02_object.js\';$x89->properties[\'line\']=34;$x89->properties[\'column\']=13;$x89->attributes[\'file\']=$x89->attributes[\'line\']=$x89->attributes[\'column\']=0;}throw new JSException($x89,34,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x90,$W90,$S90,$U90);$x91=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'get\',34,13,\'<image>/02_object.js\');$x90=&$x91[0];list(,$W90,$S90,$U90)=$x91;if($U90&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'get\']=$x90;$x90=&$_desc->properties[\'get\'];$_desc->attributes[\'get\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U90=FALSE;$W90=TRUE;}if(isset($S90)){$x93=$S90->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x94=$x93($global,$_desc,$S90,array($_o->getters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x92=$x94;}else{if(!$U90){$x92=$_o->getters[$_p];if($W90){$x90=$_o->getters[$_p];}}else{$x92=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'get\')&&\'get\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'get\'+1;}}if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_SETTER,$global)){if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x95=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',38,13,\'<image>/02_object.js\');$_TypeError=&$x95[0];list(,$WTypeError,$STypeError,$UTypeError)=$x95;$x96=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x97=$x96($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'){$x97->properties[\'file\']=\'<image>/02_object.js\';$x97->properties[\'line\']=38;$x97->properties[\'column\']=13;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,38,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x98,$W98,$S98,$U98);$x99=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'set\',38,13,\'<image>/02_object.js\');$x98=&$x99[0];list(,$W98,$S98,$U98)=$x99;if($U98&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'set\']=$x98;$x98=&$_desc->properties[\'set\'];$_desc->attributes[\'set\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U98=FALSE;$W98=TRUE;}if(isset($S98)){$x101=$S98->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x102=$x101($global,$_desc,$S98,array($_o->setters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x100=$x102;}else{if(!$U98){$x100=$_o->setters[$_p];if($W98){$x98=$_o->setters[$_p];}}else{$x100=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'set\')&&\'set\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'set\'+1;}}}$x103=JS::toBoolean($_o->attributes[$_p]&JS::ENUMERABLE,$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x104=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',42,18,\'<image>/02_object.js\');$_TypeError=&$x104[0];list(,$WTypeError,$STypeError,$UTypeError)=$x104;$x105=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x106=$x105($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x106->class)&&$x106->class===\'Error\'){$x106->properties[\'file\']=\'<image>/02_object.js\';$x106->properties[\'line\']=42;$x106->properties[\'column\']=18;$x106->attributes[\'file\']=$x106->attributes[\'line\']=$x106->attributes[\'column\']=0;}throw new JSException($x106,42,18,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x107,$W107,$S107,$U107);$x108=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'enumerable\',42,18,\'<image>/02_object.js\');$x107=&$x108[0];list(,$W107,$S107,$U107)=$x108;if($U107&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'enumerable\']=$x107;$x107=&$_desc->properties[\'enumerable\'];$_desc->attributes[\'enumerable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U107=FALSE;$W107=TRUE;}if(isset($S107)){$x110=$S107->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x111=$x110($global,$_desc,$S107,array($x103),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x109=$x111;}else{if(!$U107){$x109=$x103;if($W107){$x107=$x103;}}else{$x109=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'enumerable\')&&\'enumerable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'enumerable\'+1;}$x112=JS::toBoolean($_o->attributes[$_p]&JS::CONFIGURABLE,$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x113=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',43,20,\'<image>/02_object.js\');$_TypeError=&$x113[0];list(,$WTypeError,$STypeError,$UTypeError)=$x113;$x114=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x115=$x114($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x115->class)&&$x115->class===\'Error\'){$x115->properties[\'file\']=\'<image>/02_object.js\';$x115->properties[\'line\']=43;$x115->properties[\'column\']=20;$x115->attributes[\'file\']=$x115->attributes[\'line\']=$x115->attributes[\'column\']=0;}throw new JSException($x115,43,20,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x116,$W116,$S116,$U116);$x117=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'configurable\',43,20,\'<image>/02_object.js\');$x116=&$x117[0];list(,$W116,$S116,$U116)=$x117;if($U116&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'configurable\']=$x116;$x116=&$_desc->properties[\'configurable\'];$_desc->attributes[\'configurable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U116=FALSE;$W116=TRUE;}if(isset($S116)){$x119=$S116->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x120=$x119($global,$_desc,$S116,array($x112),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x118=$x120;}else{if(!$U116){$x118=$x112;if($W116){$x116=$x112;}}else{$x118=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'configurable\')&&\'configurable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'configurable\'+1;}return$_desc;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x131 =& $scope->properties['arguments'];
$x131->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x131->properties[$i] = $args[$i];
$x131->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x133 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x132 = $x133;
if (!JS::toBoolean($x132, $global)) {
$x136 = $_o;
$x136 = ($x136 === JS::$undefined ? 'undefined' : (is_int($x136) || is_float($x136) ? 'number' : (is_bool($x136) ? 'boolean' : (is_string($x136) ? 'string' : (is_object($x136) && isset($x136->call) ? 'function' : 'object')))));
$x135 = !(((gettype($x136) === gettype('object') && $x136 === 'object'))|| (((is_float($x136) || is_int($x136)) && (is_float('object') || is_int('object'))) && $x136 == 'object'));
$x134 = $x135;
if (JS::toBoolean($x134, $global)) {
$x138 = $_o;
$x138 = ($x138 === JS::$undefined ? 'undefined' : (is_int($x138) || is_float($x138) ? 'number' : (is_bool($x138) ? 'boolean' : (is_string($x138) ? 'string' : (is_object($x138) && isset($x138->call) ? 'function' : 'object')))));
$x137 = !(((gettype($x138) === gettype('function') && $x138 === 'function'))|| (((is_float($x138) || is_int($x138)) && (is_float('function') || is_int('function'))) && $x138 == 'function'));
$x134 = $x137; }
$x132 = $x134; }
if (JS::toBoolean($x132, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x141 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 50, 13, '<image>/02_object.js');
$_TypeError =& $x141[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x141;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x142 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 50, 13, '<image>/02_object.js');
$_ReferenceError =& $x142[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x142;
$x143 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 13);
$x144 = $x143($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error') {$x144->properties['file'] = '<image>/02_object.js';$x144->properties['line'] = 50;$x144->properties['column'] = 13;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 50, 13, '<image>/02_object.js');
}
$x139 = clone JS::$objectTemplate;
unset($x145, $W145, $S145, $U145);
$x146 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 50, 9, '<image>/02_object.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
$x140 = $x145;
$x139->prototype = $x140;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x150 = $x149($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x150->class) && $x150->class === 'Error') {$x150->properties['file'] = '<image>/02_object.js';$x150->properties['line'] = 50;$x150->properties['column'] = 9;$x150->attributes['file'] = $x150->attributes['line'] = $x150->attributes['column'] = 0; }
throw new JSException($x150, 50, 9, '<image>/02_object.js');
}
$x147 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x148 = $x147($global, $x139, $_TypeError, array('Object.getOwnPropertyNames(): Cannot get property names of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x140 = $x148;
if (is_object($x140) && $x140 !== JS::$undefined) { $x139 = $x140; }
if (isset($x139->class) && $x139->class === 'Error') {$x139->properties['file'] = '<image>/02_object.js';$x139->properties['line'] = 50;$x139->properties['column'] = 3;$x139->attributes['file'] = $x139->attributes['line'] = $x139->attributes['column'] = 0; }
throw new JSException($x139, 50, 3, '<image>/02_object.js');;
};
$x151 = clone JS::$arrayTemplate;
$x151->properties['length'] = 0;
$x151->attributes['length'] = JS::WRITABLE;
$scope->properties['names'] = JS::$undefined; $_names =& $scope->properties['names'];
$Unames = FALSE;
$_names = $x151;
foreach (array_unique(array_merge(array_keys($_o->properties), array_keys($_o->attributes))) as $i => $name) {;
if ($_names === JS::$undefined || $_names === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x153 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 56, 13, '<image>/02_object.js');
$_TypeError =& $x153[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x153;
$x154 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x155 = $x154($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x155->class) && $x155->class === 'Error') {$x155->properties['file'] = '<image>/02_object.js';$x155->properties['line'] = 56;$x155->properties['column'] = 13;$x155->attributes['file'] = $x155->attributes['line'] = $x155->attributes['column'] = 0; }
throw new JSException($x155, 56, 13, '<image>/02_object.js');
}
$x152 = JS::toObject($_names, $global);
unset($x156, $W156, $S156, $U156);
$x157 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x152, (string) 'push', 56, 13, '<image>/02_object.js');
$x156 =& $x157[0]; list(,$W156,$S156,$U156) = $x157;
if (!(is_object($x156) && isset($x156->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x160 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 56, 13, '<image>/02_object.js');
$_TypeError =& $x160[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x160;
$x161 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x162 = $x161($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x162->class) && $x162->class === 'Error') {$x162->properties['file'] = '<image>/02_object.js';$x162->properties['line'] = 56;$x162->properties['column'] = 13;$x162->attributes['file'] = $x162->attributes['line'] = $x162->attributes['column'] = 0; }
throw new JSException($x162, 56, 13, '<image>/02_object.js');
}
$x158 = $x156->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x159 = $x158($global, $x152, $x156, array($name), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_names;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x131=&$scope->properties[\'arguments\'];$x131->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x131->properties[$i]=$args[$i];$x131->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x133=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x132=$x133;if(!JS::toBoolean($x132,$global)){$x136=$_o;$x136=($x136===JS::$undefined?\'undefined\':(is_int($x136)||is_float($x136)?\'number\':(is_bool($x136)?\'boolean\':(is_string($x136)?\'string\':(is_object($x136)&&isset($x136->call)?\'function\':\'object\')))));$x135=!(((gettype($x136)===gettype(\'object\')&&$x136===\'object\'))||(((is_float($x136)||is_int($x136))&&(is_float(\'object\')||is_int(\'object\')))&&$x136==\'object\'));$x134=$x135;if(JS::toBoolean($x134,$global)){$x138=$_o;$x138=($x138===JS::$undefined?\'undefined\':(is_int($x138)||is_float($x138)?\'number\':(is_bool($x138)?\'boolean\':(is_string($x138)?\'string\':(is_object($x138)&&isset($x138->call)?\'function\':\'object\')))));$x137=!(((gettype($x138)===gettype(\'function\')&&$x138===\'function\'))||(((is_float($x138)||is_int($x138))&&(is_float(\'function\')||is_int(\'function\')))&&$x138==\'function\'));$x134=$x137;}$x132=$x134;}if(JS::toBoolean($x132,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x141=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',50,13,\'<image>/02_object.js\');$_TypeError=&$x141[0];list(,$WTypeError,$STypeError,$UTypeError)=$x141;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x142=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',50,13,\'<image>/02_object.js\');$_ReferenceError=&$x142[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x142;$x143=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,13);$x144=$x143($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x144->class)&&$x144->class===\'Error\'){$x144->properties[\'file\']=\'<image>/02_object.js\';$x144->properties[\'line\']=50;$x144->properties[\'column\']=13;$x144->attributes[\'file\']=$x144->attributes[\'line\']=$x144->attributes[\'column\']=0;}throw new JSException($x144,50,13,\'<image>/02_object.js\');}$x139=clone JS::$objectTemplate;unset($x145,$W145,$S145,$U145);$x146=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',50,9,\'<image>/02_object.js\');$x145=&$x146[0];list(,$W145,$S145,$U145)=$x146;$x140=$x145;$x139->prototype=$x140;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x150=$x149($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x150->class)&&$x150->class===\'Error\'){$x150->properties[\'file\']=\'<image>/02_object.js\';$x150->properties[\'line\']=50;$x150->properties[\'column\']=9;$x150->attributes[\'file\']=$x150->attributes[\'line\']=$x150->attributes[\'column\']=0;}throw new JSException($x150,50,9,\'<image>/02_object.js\');}$x147=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x148=$x147($global,$x139,$_TypeError,array(\'Object.getOwnPropertyNames(): Cannot get property names of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x140=$x148;if(is_object($x140)&&$x140!==JS::$undefined){$x139=$x140;}if(isset($x139->class)&&$x139->class===\'Error\'){$x139->properties[\'file\']=\'<image>/02_object.js\';$x139->properties[\'line\']=50;$x139->properties[\'column\']=3;$x139->attributes[\'file\']=$x139->attributes[\'line\']=$x139->attributes[\'column\']=0;}throw new JSException($x139,50,3,\'<image>/02_object.js\');}$x151=clone JS::$arrayTemplate;$x151->properties[\'length\']=0;$x151->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'names\']=JS::$undefined;$_names=&$scope->properties[\'names\'];$Unames=FALSE;$_names=$x151;foreach(array_unique(array_merge(array_keys($_o->properties),array_keys($_o->attributes)))as$i=>$name){;if($_names===JS::$undefined||$_names===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x153=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',56,13,\'<image>/02_object.js\');$_TypeError=&$x153[0];list(,$WTypeError,$STypeError,$UTypeError)=$x153;$x154=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x155=$x154($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x155->class)&&$x155->class===\'Error\'){$x155->properties[\'file\']=\'<image>/02_object.js\';$x155->properties[\'line\']=56;$x155->properties[\'column\']=13;$x155->attributes[\'file\']=$x155->attributes[\'line\']=$x155->attributes[\'column\']=0;}throw new JSException($x155,56,13,\'<image>/02_object.js\');}$x152=JS::toObject($_names,$global);unset($x156,$W156,$S156,$U156);$x157=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x152,(string)\'push\',56,13,\'<image>/02_object.js\');$x156=&$x157[0];list(,$W156,$S156,$U156)=$x157;if(!(is_object($x156)&&isset($x156->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x160=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',56,13,\'<image>/02_object.js\');$_TypeError=&$x160[0];list(,$WTypeError,$STypeError,$UTypeError)=$x160;$x161=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x162=$x161($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x162->class)&&$x162->class===\'Error\'){$x162->properties[\'file\']=\'<image>/02_object.js\';$x162->properties[\'line\']=56;$x162->properties[\'column\']=13;$x162->attributes[\'file\']=$x162->attributes[\'line\']=$x162->attributes[\'column\']=0;}throw new JSException($x162,56,13,\'<image>/02_object.js\');}$x158=$x156->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x159=$x158($global,$x152,$x156,array($name),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_names;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x173 =& $scope->properties['arguments'];
$x173->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x173->properties[$i] = $args[$i];
$x173->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x176 = $_o;
$x176 = ($x176 === JS::$undefined ? 'undefined' : (is_int($x176) || is_float($x176) ? 'number' : (is_bool($x176) ? 'boolean' : (is_string($x176) ? 'string' : (is_object($x176) && isset($x176->call) ? 'function' : 'object')))));
$x175 = !(((gettype($x176) === gettype('object') && $x176 === 'object'))|| (((is_float($x176) || is_int($x176)) && (is_float('object') || is_int('object'))) && $x176 == 'object'));
$x174 = $x175;
if (JS::toBoolean($x174, $global)) {
$x178 = $_o;
$x178 = ($x178 === JS::$undefined ? 'undefined' : (is_int($x178) || is_float($x178) ? 'number' : (is_bool($x178) ? 'boolean' : (is_string($x178) ? 'string' : (is_object($x178) && isset($x178->call) ? 'function' : 'object')))));
$x177 = !(((gettype($x178) === gettype('function') && $x178 === 'function'))|| (((is_float($x178) || is_int($x178)) && (is_float('function') || is_int('function'))) && $x178 == 'function'));
$x174 = $x177; }
if (JS::toBoolean($x174, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x181 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 64, 13, '<image>/02_object.js');
$_TypeError =& $x181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x181;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x182 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 64, 13, '<image>/02_object.js');
$_ReferenceError =& $x182[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x182;
$x183 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 13);
$x184 = $x183($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x184->class) && $x184->class === 'Error') {$x184->properties['file'] = '<image>/02_object.js';$x184->properties['line'] = 64;$x184->properties['column'] = 13;$x184->attributes['file'] = $x184->attributes['line'] = $x184->attributes['column'] = 0; }
throw new JSException($x184, 64, 13, '<image>/02_object.js');
}
$x179 = clone JS::$objectTemplate;
unset($x185, $W185, $S185, $U185);
$x186 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 64, 9, '<image>/02_object.js');
$x185 =& $x186[0]; list(,$W185,$S185,$U185) = $x186;
$x180 = $x185;
$x179->prototype = $x180;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x189 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x190 = $x189($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x190->class) && $x190->class === 'Error') {$x190->properties['file'] = '<image>/02_object.js';$x190->properties['line'] = 64;$x190->properties['column'] = 9;$x190->attributes['file'] = $x190->attributes['line'] = $x190->attributes['column'] = 0; }
throw new JSException($x190, 64, 9, '<image>/02_object.js');
}
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x188 = $x187($global, $x179, $_TypeError, array('Object.create(): Cannot create object with non-object prototype.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x180 = $x188;
if (is_object($x180) && $x180 !== JS::$undefined) { $x179 = $x180; }
if (isset($x179->class) && $x179->class === 'Error') {$x179->properties['file'] = '<image>/02_object.js';$x179->properties['line'] = 64;$x179->properties['column'] = 3;$x179->attributes['file'] = $x179->attributes['line'] = $x179->attributes['column'] = 0; }
throw new JSException($x179, 64, 3, '<image>/02_object.js');;
};
$x191 = clone JS::$objectTemplate;
$scope->properties['newObject'] = JS::$undefined; $_newObject =& $scope->properties['newObject'];
$UnewObject = FALSE;
$_newObject = $x191;
$_newObject->prototype =$_o;
if (JS::toBoolean(is_object($_properties) &&$_properties!== JS::$undefined, $global)) {
unset($_Object, $WObject, $SObject, $UObject);
$x192 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'Object', 72, 3, '<image>/02_object.js');
$_Object =& $x192[0]; list(,$WObject,$SObject,$UObject) = $x192;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x193 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 72, 3, '<image>/02_object.js');
$_ReferenceError =& $x193[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x193;
$x194 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 3);
$x195 = $x194($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error') {$x195->properties['file'] = '<image>/02_object.js';$x195->properties['line'] = 72;$x195->properties['column'] = 3;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 72, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x197 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 72, 26, '<image>/02_object.js');
$_TypeError =& $x197[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x197;
$x198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x199 = $x198($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x199->class) && $x199->class === 'Error') {$x199->properties['file'] = '<image>/02_object.js';$x199->properties['line'] = 72;$x199->properties['column'] = 26;$x199->attributes['file'] = $x199->attributes['line'] = $x199->attributes['column'] = 0; }
throw new JSException($x199, 72, 26, '<image>/02_object.js');
}
$x196 = JS::toObject($_Object, $global);
unset($x200, $W200, $S200, $U200);
$x201 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x196, (string) 'defineProperties', 72, 26, '<image>/02_object.js');
$x200 =& $x201[0]; list(,$W200,$S200,$U200) = $x201;
if (!(is_object($x200) && isset($x200->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x204 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 72, 26, '<image>/02_object.js');
$_TypeError =& $x204[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x204;
$x205 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x206 = $x205($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x206->class) && $x206->class === 'Error') {$x206->properties['file'] = '<image>/02_object.js';$x206->properties['line'] = 72;$x206->properties['column'] = 26;$x206->attributes['file'] = $x206->attributes['line'] = $x206->attributes['column'] = 0; }
throw new JSException($x206, 72, 26, '<image>/02_object.js');
}
$x202 = $x200->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x203 = $x202($global, $x196, $x200, array($_newObject, $_properties), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newObject;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x173=&$scope->properties[\'arguments\'];$x173->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x173->properties[$i]=$args[$i];$x173->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x176=$_o;$x176=($x176===JS::$undefined?\'undefined\':(is_int($x176)||is_float($x176)?\'number\':(is_bool($x176)?\'boolean\':(is_string($x176)?\'string\':(is_object($x176)&&isset($x176->call)?\'function\':\'object\')))));$x175=!(((gettype($x176)===gettype(\'object\')&&$x176===\'object\'))||(((is_float($x176)||is_int($x176))&&(is_float(\'object\')||is_int(\'object\')))&&$x176==\'object\'));$x174=$x175;if(JS::toBoolean($x174,$global)){$x178=$_o;$x178=($x178===JS::$undefined?\'undefined\':(is_int($x178)||is_float($x178)?\'number\':(is_bool($x178)?\'boolean\':(is_string($x178)?\'string\':(is_object($x178)&&isset($x178->call)?\'function\':\'object\')))));$x177=!(((gettype($x178)===gettype(\'function\')&&$x178===\'function\'))||(((is_float($x178)||is_int($x178))&&(is_float(\'function\')||is_int(\'function\')))&&$x178==\'function\'));$x174=$x177;}if(JS::toBoolean($x174,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x181=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',64,13,\'<image>/02_object.js\');$_TypeError=&$x181[0];list(,$WTypeError,$STypeError,$UTypeError)=$x181;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x182=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',64,13,\'<image>/02_object.js\');$_ReferenceError=&$x182[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x182;$x183=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,13);$x184=$x183($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x184->class)&&$x184->class===\'Error\'){$x184->properties[\'file\']=\'<image>/02_object.js\';$x184->properties[\'line\']=64;$x184->properties[\'column\']=13;$x184->attributes[\'file\']=$x184->attributes[\'line\']=$x184->attributes[\'column\']=0;}throw new JSException($x184,64,13,\'<image>/02_object.js\');}$x179=clone JS::$objectTemplate;unset($x185,$W185,$S185,$U185);$x186=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',64,9,\'<image>/02_object.js\');$x185=&$x186[0];list(,$W185,$S185,$U185)=$x186;$x180=$x185;$x179->prototype=$x180;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x189=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x190=$x189($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x190->class)&&$x190->class===\'Error\'){$x190->properties[\'file\']=\'<image>/02_object.js\';$x190->properties[\'line\']=64;$x190->properties[\'column\']=9;$x190->attributes[\'file\']=$x190->attributes[\'line\']=$x190->attributes[\'column\']=0;}throw new JSException($x190,64,9,\'<image>/02_object.js\');}$x187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x188=$x187($global,$x179,$_TypeError,array(\'Object.create(): Cannot create object with non-object prototype.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x180=$x188;if(is_object($x180)&&$x180!==JS::$undefined){$x179=$x180;}if(isset($x179->class)&&$x179->class===\'Error\'){$x179->properties[\'file\']=\'<image>/02_object.js\';$x179->properties[\'line\']=64;$x179->properties[\'column\']=3;$x179->attributes[\'file\']=$x179->attributes[\'line\']=$x179->attributes[\'column\']=0;}throw new JSException($x179,64,3,\'<image>/02_object.js\');}$x191=clone JS::$objectTemplate;$scope->properties[\'newObject\']=JS::$undefined;$_newObject=&$scope->properties[\'newObject\'];$UnewObject=FALSE;$_newObject=$x191;$_newObject->prototype=$_o;if(JS::toBoolean(is_object($_properties)&&$_properties!==JS::$undefined,$global)){unset($_Object,$WObject,$SObject,$UObject);$x192=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'Object\',72,3,\'<image>/02_object.js\');$_Object=&$x192[0];list(,$WObject,$SObject,$UObject)=$x192;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x193=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',72,3,\'<image>/02_object.js\');$_ReferenceError=&$x193[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x193;$x194=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,3);$x195=$x194($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'){$x195->properties[\'file\']=\'<image>/02_object.js\';$x195->properties[\'line\']=72;$x195->properties[\'column\']=3;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,72,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x197=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',72,26,\'<image>/02_object.js\');$_TypeError=&$x197[0];list(,$WTypeError,$STypeError,$UTypeError)=$x197;$x198=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x199=$x198($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x199->class)&&$x199->class===\'Error\'){$x199->properties[\'file\']=\'<image>/02_object.js\';$x199->properties[\'line\']=72;$x199->properties[\'column\']=26;$x199->attributes[\'file\']=$x199->attributes[\'line\']=$x199->attributes[\'column\']=0;}throw new JSException($x199,72,26,\'<image>/02_object.js\');}$x196=JS::toObject($_Object,$global);unset($x200,$W200,$S200,$U200);$x201=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x196,(string)\'defineProperties\',72,26,\'<image>/02_object.js\');$x200=&$x201[0];list(,$W200,$S200,$U200)=$x201;if(!(is_object($x200)&&isset($x200->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x204=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',72,26,\'<image>/02_object.js\');$_TypeError=&$x204[0];list(,$WTypeError,$STypeError,$UTypeError)=$x204;$x205=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x206=$x205($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x206->class)&&$x206->class===\'Error\'){$x206->properties[\'file\']=\'<image>/02_object.js\';$x206->properties[\'line\']=72;$x206->properties[\'column\']=26;$x206->attributes[\'file\']=$x206->attributes[\'line\']=$x206->attributes[\'column\']=0;}throw new JSException($x206,72,26,\'<image>/02_object.js\');}$x202=$x200->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x203=$x202($global,$x196,$x200,array($_newObject,$_properties),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newObject;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x217 =& $scope->properties['arguments'];
$x217->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x217->properties[$i] = $args[$i];
$x217->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['p'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$scope->properties['attributes'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_attributes =& $scope->properties['attributes'];
$Uattributes = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x219 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x218 = $x219;
if (!JS::toBoolean($x218, $global)) {
$x222 = $_o;
$x222 = ($x222 === JS::$undefined ? 'undefined' : (is_int($x222) || is_float($x222) ? 'number' : (is_bool($x222) ? 'boolean' : (is_string($x222) ? 'string' : (is_object($x222) && isset($x222->call) ? 'function' : 'object')))));
$x221 = !(((gettype($x222) === gettype('object') && $x222 === 'object'))|| (((is_float($x222) || is_int($x222)) && (is_float('object') || is_int('object'))) && $x222 == 'object'));
$x220 = $x221;
if (JS::toBoolean($x220, $global)) {
$x224 = $_o;
$x224 = ($x224 === JS::$undefined ? 'undefined' : (is_int($x224) || is_float($x224) ? 'number' : (is_bool($x224) ? 'boolean' : (is_string($x224) ? 'string' : (is_object($x224) && isset($x224->call) ? 'function' : 'object')))));
$x223 = !(((gettype($x224) === gettype('function') && $x224 === 'function'))|| (((is_float($x224) || is_int($x224)) && (is_float('function') || is_int('function'))) && $x224 == 'function'));
$x220 = $x223; }
$x218 = $x220; }
if (JS::toBoolean($x218, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x227 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 80, 13, '<image>/02_object.js');
$_TypeError =& $x227[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x227;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x228 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 80, 13, '<image>/02_object.js');
$_ReferenceError =& $x228[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x228;
$x229 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 13);
$x230 = $x229($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x230->class) && $x230->class === 'Error') {$x230->properties['file'] = '<image>/02_object.js';$x230->properties['line'] = 80;$x230->properties['column'] = 13;$x230->attributes['file'] = $x230->attributes['line'] = $x230->attributes['column'] = 0; }
throw new JSException($x230, 80, 13, '<image>/02_object.js');
}
$x225 = clone JS::$objectTemplate;
unset($x231, $W231, $S231, $U231);
$x232 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 80, 9, '<image>/02_object.js');
$x231 =& $x232[0]; list(,$W231,$S231,$U231) = $x232;
$x226 = $x231;
$x225->prototype = $x226;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x235 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x236 = $x235($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x236->class) && $x236->class === 'Error') {$x236->properties['file'] = '<image>/02_object.js';$x236->properties['line'] = 80;$x236->properties['column'] = 9;$x236->attributes['file'] = $x236->attributes['line'] = $x236->attributes['column'] = 0; }
throw new JSException($x236, 80, 9, '<image>/02_object.js');
}
$x233 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x234 = $x233($global, $x225, $_TypeError, array('Object.defineProperty(): Cannot define property on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x226 = $x234;
if (is_object($x226) && $x226 !== JS::$undefined) { $x225 = $x226; }
if (isset($x225->class) && $x225->class === 'Error') {$x225->properties['file'] = '<image>/02_object.js';$x225->properties['line'] = 80;$x225->properties['column'] = 3;$x225->attributes['file'] = $x225->attributes['line'] = $x225->attributes['column'] = 0; }
throw new JSException($x225, 80, 3, '<image>/02_object.js');;
};
unset($x239, $W239, $S239, $U239);
$x240 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'get', 83, 16, '<image>/02_object.js');
$x239 =& $x240[0]; list(,$W239,$S239,$U239) = $x240;
$x238 = !(((gettype($x239) === gettype(JS::$undefined) && $x239 === JS::$undefined))|| (((is_float($x239) || is_int($x239)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x239 == JS::$undefined));
$x237 = $x238;
if (JS::toBoolean($x237, $global)) {
unset($x242, $W242, $S242, $U242);
$x243 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'get', 83, 55, '<image>/02_object.js');
$x242 =& $x243[0]; list(,$W242,$S242,$U242) = $x243;
$x244 = $x242;
$x244 = ($x244 === JS::$undefined ? 'undefined' : (is_int($x244) || is_float($x244) ? 'number' : (is_bool($x244) ? 'boolean' : (is_string($x244) ? 'string' : (is_object($x244) && isset($x244->call) ? 'function' : 'object')))));
$x241 = !(((gettype($x244) === gettype('function') && $x244 === 'function'))|| (((is_float($x244) || is_int($x244)) && (is_float('function') || is_int('function'))) && $x244 == 'function'));
$x237 = $x241; }
if (JS::toBoolean($x237, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x247 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 84, 13, '<image>/02_object.js');
$_TypeError =& $x247[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x247;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x248 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 84, 13, '<image>/02_object.js');
$_ReferenceError =& $x248[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x248;
$x249 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 13);
$x250 = $x249($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x250->class) && $x250->class === 'Error') {$x250->properties['file'] = '<image>/02_object.js';$x250->properties['line'] = 84;$x250->properties['column'] = 13;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 84, 13, '<image>/02_object.js');
}
$x245 = clone JS::$objectTemplate;
unset($x251, $W251, $S251, $U251);
$x252 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 84, 9, '<image>/02_object.js');
$x251 =& $x252[0]; list(,$W251,$S251,$U251) = $x252;
$x246 = $x251;
$x245->prototype = $x246;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x255 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x256 = $x255($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x256->class) && $x256->class === 'Error') {$x256->properties['file'] = '<image>/02_object.js';$x256->properties['line'] = 84;$x256->properties['column'] = 9;$x256->attributes['file'] = $x256->attributes['line'] = $x256->attributes['column'] = 0; }
throw new JSException($x256, 84, 9, '<image>/02_object.js');
}
$x253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x254 = $x253($global, $x245, $_TypeError, array('Object.defineProperty(): Given getter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x246 = $x254;
if (is_object($x246) && $x246 !== JS::$undefined) { $x245 = $x246; }
if (isset($x245->class) && $x245->class === 'Error') {$x245->properties['file'] = '<image>/02_object.js';$x245->properties['line'] = 84;$x245->properties['column'] = 3;$x245->attributes['file'] = $x245->attributes['line'] = $x245->attributes['column'] = 0; }
throw new JSException($x245, 84, 3, '<image>/02_object.js');;
};
unset($x259, $W259, $S259, $U259);
$x260 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'set', 87, 16, '<image>/02_object.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
$x258 = !(((gettype($x259) === gettype(JS::$undefined) && $x259 === JS::$undefined))|| (((is_float($x259) || is_int($x259)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x259 == JS::$undefined));
$x257 = $x258;
if (JS::toBoolean($x257, $global)) {
unset($x262, $W262, $S262, $U262);
$x263 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'set', 87, 55, '<image>/02_object.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
$x264 = $x262;
$x264 = ($x264 === JS::$undefined ? 'undefined' : (is_int($x264) || is_float($x264) ? 'number' : (is_bool($x264) ? 'boolean' : (is_string($x264) ? 'string' : (is_object($x264) && isset($x264->call) ? 'function' : 'object')))));
$x261 = !(((gettype($x264) === gettype('function') && $x264 === 'function'))|| (((is_float($x264) || is_int($x264)) && (is_float('function') || is_int('function'))) && $x264 == 'function'));
$x257 = $x261; }
if (JS::toBoolean($x257, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x267 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 88, 13, '<image>/02_object.js');
$_TypeError =& $x267[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x267;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x268 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 88, 13, '<image>/02_object.js');
$_ReferenceError =& $x268[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x268;
$x269 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 13);
$x270 = $x269($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x270->class) && $x270->class === 'Error') {$x270->properties['file'] = '<image>/02_object.js';$x270->properties['line'] = 88;$x270->properties['column'] = 13;$x270->attributes['file'] = $x270->attributes['line'] = $x270->attributes['column'] = 0; }
throw new JSException($x270, 88, 13, '<image>/02_object.js');
}
$x265 = clone JS::$objectTemplate;
unset($x271, $W271, $S271, $U271);
$x272 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 88, 9, '<image>/02_object.js');
$x271 =& $x272[0]; list(,$W271,$S271,$U271) = $x272;
$x266 = $x271;
$x265->prototype = $x266;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x276 = $x275($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x276->class) && $x276->class === 'Error') {$x276->properties['file'] = '<image>/02_object.js';$x276->properties['line'] = 88;$x276->properties['column'] = 9;$x276->attributes['file'] = $x276->attributes['line'] = $x276->attributes['column'] = 0; }
throw new JSException($x276, 88, 9, '<image>/02_object.js');
}
$x273 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x274 = $x273($global, $x265, $_TypeError, array('Object.defineProperty(): Given setter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x266 = $x274;
if (is_object($x266) && $x266 !== JS::$undefined) { $x265 = $x266; }
if (isset($x265->class) && $x265->class === 'Error') {$x265->properties['file'] = '<image>/02_object.js';$x265->properties['line'] = 88;$x265->properties['column'] = 3;$x265->attributes['file'] = $x265->attributes['line'] = $x265->attributes['column'] = 0; }
throw new JSException($x265, 88, 3, '<image>/02_object.js');;
};
$x277 = $_attributes;
if (!JS::toBoolean($x277, $global)) {
$x278 = clone JS::$objectTemplate;
$x277 = $x278; }
if ($Uattributes) {$global->properties['attributes'] = $_attributes; $_attributes =& $global->properties['attributes']; }
$_attributes = $x277;
$x279 = JS::toString($_p, $global);
if ($Up) {$global->properties['p'] = $_p; $_p =& $global->properties['p']; }
$_p = $x279;
unset($x281, $W281, $S281, $U281);
$x282 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'value', 94, 24, '<image>/02_object.js');
$x281 =& $x282[0]; list(,$W281,$S281,$U281) = $x282;
$x280 = $x281;
if (!JS::toBoolean($x280, $global)) {
$x280 = JS::$undefined; }
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = $x280;
unset($x284, $W284, $S284, $U284);
$x285 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'get', 95, 19, '<image>/02_object.js');
$x284 =& $x285[0]; list(,$W284,$S284,$U284) = $x285;
$x283 = $x284;
if (!JS::toBoolean($x283, $global)) {
$x283 = JS::$undefined; }
$scope->properties['get'] = JS::$undefined; $_get =& $scope->properties['get'];
$Uget = FALSE;
$_get = $x283;
unset($x287, $W287, $S287, $U287);
$x288 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'set', 96, 19, '<image>/02_object.js');
$x287 =& $x288[0]; list(,$W287,$S287,$U287) = $x288;
$x286 = $x287;
if (!JS::toBoolean($x286, $global)) {
$x286 = JS::$undefined; }
$scope->properties['set'] = JS::$undefined; $_set =& $scope->properties['set'];
$Uset = FALSE;
$_set = $x286;
$scope->properties['attrs'] = JS::$undefined; $_attrs =& $scope->properties['attrs'];
$Uattrs = FALSE;
$_attrs = 0;
$x290 = $_value;
$x290 = ($x290 === JS::$undefined ? 'undefined' : (is_int($x290) || is_float($x290) ? 'number' : (is_bool($x290) ? 'boolean' : (is_string($x290) ? 'string' : (is_object($x290) && isset($x290->call) ? 'function' : 'object')))));
$x289 = !(((gettype($x290) === gettype('undefined') && $x290 === 'undefined'))|| (((is_float($x290) || is_int($x290)) && (is_float('undefined') || is_int('undefined'))) && $x290 == 'undefined'));
if (JS::toBoolean($x289, $global)) {

$_o->properties[$_p] =$_value;;
};
if (JS::toBoolean($_get, $global)) {
$_o->getters[$_p] =$_get;
$x291 = JS::HAS_GETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x292 = JS::toNumber($_attrs, $global);
$x293 = JS::toNumber($x291, $global);
if (is_nan($x292)) { $x292 = 0; }
if (is_nan($x293)) { $x293 = 0; }
$x294 = $x292 | $x293;
$_attrs = $x294;;
};
if (JS::toBoolean($_set, $global)) {
$_o->setters[$_p] =$_set;
$x295 = JS::HAS_SETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x296 = JS::toNumber($_attrs, $global);
$x297 = JS::toNumber($x295, $global);
if (is_nan($x296)) { $x296 = 0; }
if (is_nan($x297)) { $x297 = 0; }
$x298 = $x296 | $x297;
$_attrs = $x298;;
};
unset($x299, $W299, $S299, $U299);
$x300 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'writable', 113, 16, '<image>/02_object.js');
$x299 =& $x300[0]; list(,$W299,$S299,$U299) = $x300;
if (JS::toBoolean($x299, $global)) {
$x301 = JS::WRITABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x302 = JS::toNumber($_attrs, $global);
$x303 = JS::toNumber($x301, $global);
if (is_nan($x302)) { $x302 = 0; }
if (is_nan($x303)) { $x303 = 0; }
$x304 = $x302 | $x303;
$_attrs = $x304;;
};
unset($x305, $W305, $S305, $U305);
$x306 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'enumerable', 117, 16, '<image>/02_object.js');
$x305 =& $x306[0]; list(,$W305,$S305,$U305) = $x306;
if (JS::toBoolean($x305, $global)) {
$x307 = JS::ENUMERABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x308 = JS::toNumber($_attrs, $global);
$x309 = JS::toNumber($x307, $global);
if (is_nan($x308)) { $x308 = 0; }
if (is_nan($x309)) { $x309 = 0; }
$x310 = $x308 | $x309;
$_attrs = $x310;;
};
unset($x311, $W311, $S311, $U311);
$x312 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'configurable', 121, 16, '<image>/02_object.js');
$x311 =& $x312[0]; list(,$W311,$S311,$U311) = $x312;
if (JS::toBoolean($x311, $global)) {
$x313 = JS::CONFIGURABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x314 = JS::toNumber($_attrs, $global);
$x315 = JS::toNumber($x313, $global);
if (is_nan($x314)) { $x314 = 0; }
if (is_nan($x315)) { $x315 = 0; }
$x316 = $x314 | $x315;
$_attrs = $x316;;
};
$_o->attributes[$_p] =$_attrs;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x217=&$scope->properties[\'arguments\'];$x217->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x217->properties[$i]=$args[$i];$x217->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'attributes\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_attributes=&$scope->properties[\'attributes\'];$Uattributes=FALSE;$global->scope[++$global->scope_sp]=$scope;$x219=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x218=$x219;if(!JS::toBoolean($x218,$global)){$x222=$_o;$x222=($x222===JS::$undefined?\'undefined\':(is_int($x222)||is_float($x222)?\'number\':(is_bool($x222)?\'boolean\':(is_string($x222)?\'string\':(is_object($x222)&&isset($x222->call)?\'function\':\'object\')))));$x221=!(((gettype($x222)===gettype(\'object\')&&$x222===\'object\'))||(((is_float($x222)||is_int($x222))&&(is_float(\'object\')||is_int(\'object\')))&&$x222==\'object\'));$x220=$x221;if(JS::toBoolean($x220,$global)){$x224=$_o;$x224=($x224===JS::$undefined?\'undefined\':(is_int($x224)||is_float($x224)?\'number\':(is_bool($x224)?\'boolean\':(is_string($x224)?\'string\':(is_object($x224)&&isset($x224->call)?\'function\':\'object\')))));$x223=!(((gettype($x224)===gettype(\'function\')&&$x224===\'function\'))||(((is_float($x224)||is_int($x224))&&(is_float(\'function\')||is_int(\'function\')))&&$x224==\'function\'));$x220=$x223;}$x218=$x220;}if(JS::toBoolean($x218,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x227=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',80,13,\'<image>/02_object.js\');$_TypeError=&$x227[0];list(,$WTypeError,$STypeError,$UTypeError)=$x227;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x228=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',80,13,\'<image>/02_object.js\');$_ReferenceError=&$x228[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x228;$x229=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,13);$x230=$x229($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x230->class)&&$x230->class===\'Error\'){$x230->properties[\'file\']=\'<image>/02_object.js\';$x230->properties[\'line\']=80;$x230->properties[\'column\']=13;$x230->attributes[\'file\']=$x230->attributes[\'line\']=$x230->attributes[\'column\']=0;}throw new JSException($x230,80,13,\'<image>/02_object.js\');}$x225=clone JS::$objectTemplate;unset($x231,$W231,$S231,$U231);$x232=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',80,9,\'<image>/02_object.js\');$x231=&$x232[0];list(,$W231,$S231,$U231)=$x232;$x226=$x231;$x225->prototype=$x226;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x235=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x236=$x235($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x236->class)&&$x236->class===\'Error\'){$x236->properties[\'file\']=\'<image>/02_object.js\';$x236->properties[\'line\']=80;$x236->properties[\'column\']=9;$x236->attributes[\'file\']=$x236->attributes[\'line\']=$x236->attributes[\'column\']=0;}throw new JSException($x236,80,9,\'<image>/02_object.js\');}$x233=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x234=$x233($global,$x225,$_TypeError,array(\'Object.defineProperty(): Cannot define property on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x226=$x234;if(is_object($x226)&&$x226!==JS::$undefined){$x225=$x226;}if(isset($x225->class)&&$x225->class===\'Error\'){$x225->properties[\'file\']=\'<image>/02_object.js\';$x225->properties[\'line\']=80;$x225->properties[\'column\']=3;$x225->attributes[\'file\']=$x225->attributes[\'line\']=$x225->attributes[\'column\']=0;}throw new JSException($x225,80,3,\'<image>/02_object.js\');}unset($x239,$W239,$S239,$U239);$x240=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'get\',83,16,\'<image>/02_object.js\');$x239=&$x240[0];list(,$W239,$S239,$U239)=$x240;$x238=!(((gettype($x239)===gettype(JS::$undefined)&&$x239===JS::$undefined))||(((is_float($x239)||is_int($x239))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x239==JS::$undefined));$x237=$x238;if(JS::toBoolean($x237,$global)){unset($x242,$W242,$S242,$U242);$x243=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'get\',83,55,\'<image>/02_object.js\');$x242=&$x243[0];list(,$W242,$S242,$U242)=$x243;$x244=$x242;$x244=($x244===JS::$undefined?\'undefined\':(is_int($x244)||is_float($x244)?\'number\':(is_bool($x244)?\'boolean\':(is_string($x244)?\'string\':(is_object($x244)&&isset($x244->call)?\'function\':\'object\')))));$x241=!(((gettype($x244)===gettype(\'function\')&&$x244===\'function\'))||(((is_float($x244)||is_int($x244))&&(is_float(\'function\')||is_int(\'function\')))&&$x244==\'function\'));$x237=$x241;}if(JS::toBoolean($x237,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x247=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',84,13,\'<image>/02_object.js\');$_TypeError=&$x247[0];list(,$WTypeError,$STypeError,$UTypeError)=$x247;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x248=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',84,13,\'<image>/02_object.js\');$_ReferenceError=&$x248[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x248;$x249=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,13);$x250=$x249($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x250->class)&&$x250->class===\'Error\'){$x250->properties[\'file\']=\'<image>/02_object.js\';$x250->properties[\'line\']=84;$x250->properties[\'column\']=13;$x250->attributes[\'file\']=$x250->attributes[\'line\']=$x250->attributes[\'column\']=0;}throw new JSException($x250,84,13,\'<image>/02_object.js\');}$x245=clone JS::$objectTemplate;unset($x251,$W251,$S251,$U251);$x252=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',84,9,\'<image>/02_object.js\');$x251=&$x252[0];list(,$W251,$S251,$U251)=$x252;$x246=$x251;$x245->prototype=$x246;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x255=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x256=$x255($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x256->class)&&$x256->class===\'Error\'){$x256->properties[\'file\']=\'<image>/02_object.js\';$x256->properties[\'line\']=84;$x256->properties[\'column\']=9;$x256->attributes[\'file\']=$x256->attributes[\'line\']=$x256->attributes[\'column\']=0;}throw new JSException($x256,84,9,\'<image>/02_object.js\');}$x253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x254=$x253($global,$x245,$_TypeError,array(\'Object.defineProperty(): Given getter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x246=$x254;if(is_object($x246)&&$x246!==JS::$undefined){$x245=$x246;}if(isset($x245->class)&&$x245->class===\'Error\'){$x245->properties[\'file\']=\'<image>/02_object.js\';$x245->properties[\'line\']=84;$x245->properties[\'column\']=3;$x245->attributes[\'file\']=$x245->attributes[\'line\']=$x245->attributes[\'column\']=0;}throw new JSException($x245,84,3,\'<image>/02_object.js\');}unset($x259,$W259,$S259,$U259);$x260=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'set\',87,16,\'<image>/02_object.js\');$x259=&$x260[0];list(,$W259,$S259,$U259)=$x260;$x258=!(((gettype($x259)===gettype(JS::$undefined)&&$x259===JS::$undefined))||(((is_float($x259)||is_int($x259))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x259==JS::$undefined));$x257=$x258;if(JS::toBoolean($x257,$global)){unset($x262,$W262,$S262,$U262);$x263=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'set\',87,55,\'<image>/02_object.js\');$x262=&$x263[0];list(,$W262,$S262,$U262)=$x263;$x264=$x262;$x264=($x264===JS::$undefined?\'undefined\':(is_int($x264)||is_float($x264)?\'number\':(is_bool($x264)?\'boolean\':(is_string($x264)?\'string\':(is_object($x264)&&isset($x264->call)?\'function\':\'object\')))));$x261=!(((gettype($x264)===gettype(\'function\')&&$x264===\'function\'))||(((is_float($x264)||is_int($x264))&&(is_float(\'function\')||is_int(\'function\')))&&$x264==\'function\'));$x257=$x261;}if(JS::toBoolean($x257,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x267=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',88,13,\'<image>/02_object.js\');$_TypeError=&$x267[0];list(,$WTypeError,$STypeError,$UTypeError)=$x267;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x268=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',88,13,\'<image>/02_object.js\');$_ReferenceError=&$x268[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x268;$x269=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,13);$x270=$x269($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x270->class)&&$x270->class===\'Error\'){$x270->properties[\'file\']=\'<image>/02_object.js\';$x270->properties[\'line\']=88;$x270->properties[\'column\']=13;$x270->attributes[\'file\']=$x270->attributes[\'line\']=$x270->attributes[\'column\']=0;}throw new JSException($x270,88,13,\'<image>/02_object.js\');}$x265=clone JS::$objectTemplate;unset($x271,$W271,$S271,$U271);$x272=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',88,9,\'<image>/02_object.js\');$x271=&$x272[0];list(,$W271,$S271,$U271)=$x272;$x266=$x271;$x265->prototype=$x266;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x276=$x275($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'){$x276->properties[\'file\']=\'<image>/02_object.js\';$x276->properties[\'line\']=88;$x276->properties[\'column\']=9;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,88,9,\'<image>/02_object.js\');}$x273=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x274=$x273($global,$x265,$_TypeError,array(\'Object.defineProperty(): Given setter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x266=$x274;if(is_object($x266)&&$x266!==JS::$undefined){$x265=$x266;}if(isset($x265->class)&&$x265->class===\'Error\'){$x265->properties[\'file\']=\'<image>/02_object.js\';$x265->properties[\'line\']=88;$x265->properties[\'column\']=3;$x265->attributes[\'file\']=$x265->attributes[\'line\']=$x265->attributes[\'column\']=0;}throw new JSException($x265,88,3,\'<image>/02_object.js\');}$x277=$_attributes;if(!JS::toBoolean($x277,$global)){$x278=clone JS::$objectTemplate;$x277=$x278;}if($Uattributes){$global->properties[\'attributes\']=$_attributes;$_attributes=&$global->properties[\'attributes\'];}$_attributes=$x277;$x279=JS::toString($_p,$global);if($Up){$global->properties[\'p\']=$_p;$_p=&$global->properties[\'p\'];}$_p=$x279;unset($x281,$W281,$S281,$U281);$x282=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'value\',94,24,\'<image>/02_object.js\');$x281=&$x282[0];list(,$W281,$S281,$U281)=$x282;$x280=$x281;if(!JS::toBoolean($x280,$global)){$x280=JS::$undefined;}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x280;unset($x284,$W284,$S284,$U284);$x285=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'get\',95,19,\'<image>/02_object.js\');$x284=&$x285[0];list(,$W284,$S284,$U284)=$x285;$x283=$x284;if(!JS::toBoolean($x283,$global)){$x283=JS::$undefined;}$scope->properties[\'get\']=JS::$undefined;$_get=&$scope->properties[\'get\'];$Uget=FALSE;$_get=$x283;unset($x287,$W287,$S287,$U287);$x288=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'set\',96,19,\'<image>/02_object.js\');$x287=&$x288[0];list(,$W287,$S287,$U287)=$x288;$x286=$x287;if(!JS::toBoolean($x286,$global)){$x286=JS::$undefined;}$scope->properties[\'set\']=JS::$undefined;$_set=&$scope->properties[\'set\'];$Uset=FALSE;$_set=$x286;$scope->properties[\'attrs\']=JS::$undefined;$_attrs=&$scope->properties[\'attrs\'];$Uattrs=FALSE;$_attrs=0;$x290=$_value;$x290=($x290===JS::$undefined?\'undefined\':(is_int($x290)||is_float($x290)?\'number\':(is_bool($x290)?\'boolean\':(is_string($x290)?\'string\':(is_object($x290)&&isset($x290->call)?\'function\':\'object\')))));$x289=!(((gettype($x290)===gettype(\'undefined\')&&$x290===\'undefined\'))||(((is_float($x290)||is_int($x290))&&(is_float(\'undefined\')||is_int(\'undefined\')))&&$x290==\'undefined\'));if(JS::toBoolean($x289,$global)){$_o->properties[$_p]=$_value;}if(JS::toBoolean($_get,$global)){$_o->getters[$_p]=$_get;$x291=JS::HAS_GETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x292=JS::toNumber($_attrs,$global);$x293=JS::toNumber($x291,$global);if(is_nan($x292)){$x292=0;}if(is_nan($x293)){$x293=0;}$x294=$x292|$x293;$_attrs=$x294;}if(JS::toBoolean($_set,$global)){$_o->setters[$_p]=$_set;$x295=JS::HAS_SETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x296=JS::toNumber($_attrs,$global);$x297=JS::toNumber($x295,$global);if(is_nan($x296)){$x296=0;}if(is_nan($x297)){$x297=0;}$x298=$x296|$x297;$_attrs=$x298;}unset($x299,$W299,$S299,$U299);$x300=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'writable\',113,16,\'<image>/02_object.js\');$x299=&$x300[0];list(,$W299,$S299,$U299)=$x300;if(JS::toBoolean($x299,$global)){$x301=JS::WRITABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x302=JS::toNumber($_attrs,$global);$x303=JS::toNumber($x301,$global);if(is_nan($x302)){$x302=0;}if(is_nan($x303)){$x303=0;}$x304=$x302|$x303;$_attrs=$x304;}unset($x305,$W305,$S305,$U305);$x306=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'enumerable\',117,16,\'<image>/02_object.js\');$x305=&$x306[0];list(,$W305,$S305,$U305)=$x306;if(JS::toBoolean($x305,$global)){$x307=JS::ENUMERABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x308=JS::toNumber($_attrs,$global);$x309=JS::toNumber($x307,$global);if(is_nan($x308)){$x308=0;}if(is_nan($x309)){$x309=0;}$x310=$x308|$x309;$_attrs=$x310;}unset($x311,$W311,$S311,$U311);$x312=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'configurable\',121,16,\'<image>/02_object.js\');$x311=&$x312[0];list(,$W311,$S311,$U311)=$x312;if(JS::toBoolean($x311,$global)){$x313=JS::CONFIGURABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x314=JS::toNumber($_attrs,$global);$x315=JS::toNumber($x313,$global);if(is_nan($x314)){$x314=0;}if(is_nan($x315)){$x315=0;}$x316=$x314|$x315;$_attrs=$x316;}$_o->attributes[$_p]=$_attrs;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x327 =& $scope->properties['arguments'];
$x327->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x327->properties[$i] = $args[$i];
$x327->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x329 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x328 = $x329;
if (!JS::toBoolean($x328, $global)) {
$x332 = $_o;
$x332 = ($x332 === JS::$undefined ? 'undefined' : (is_int($x332) || is_float($x332) ? 'number' : (is_bool($x332) ? 'boolean' : (is_string($x332) ? 'string' : (is_object($x332) && isset($x332->call) ? 'function' : 'object')))));
$x331 = !(((gettype($x332) === gettype('object') && $x332 === 'object'))|| (((is_float($x332) || is_int($x332)) && (is_float('object') || is_int('object'))) && $x332 == 'object'));
$x330 = $x331;
if (JS::toBoolean($x330, $global)) {
$x334 = $_o;
$x334 = ($x334 === JS::$undefined ? 'undefined' : (is_int($x334) || is_float($x334) ? 'number' : (is_bool($x334) ? 'boolean' : (is_string($x334) ? 'string' : (is_object($x334) && isset($x334->call) ? 'function' : 'object')))));
$x333 = !(((gettype($x334) === gettype('function') && $x334 === 'function'))|| (((is_float($x334) || is_int($x334)) && (is_float('function') || is_int('function'))) && $x334 == 'function'));
$x330 = $x333; }
$x328 = $x330; }
if (JS::toBoolean($x328, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x337 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 132, 13, '<image>/02_object.js');
$_TypeError =& $x337[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x337;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x338 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 132, 13, '<image>/02_object.js');
$_ReferenceError =& $x338[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x338;
$x339 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 13);
$x340 = $x339($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x340->class) && $x340->class === 'Error') {$x340->properties['file'] = '<image>/02_object.js';$x340->properties['line'] = 132;$x340->properties['column'] = 13;$x340->attributes['file'] = $x340->attributes['line'] = $x340->attributes['column'] = 0; }
throw new JSException($x340, 132, 13, '<image>/02_object.js');
}
$x335 = clone JS::$objectTemplate;
unset($x341, $W341, $S341, $U341);
$x342 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 132, 9, '<image>/02_object.js');
$x341 =& $x342[0]; list(,$W341,$S341,$U341) = $x342;
$x336 = $x341;
$x335->prototype = $x336;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x345 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x346 = $x345($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x346->class) && $x346->class === 'Error') {$x346->properties['file'] = '<image>/02_object.js';$x346->properties['line'] = 132;$x346->properties['column'] = 9;$x346->attributes['file'] = $x346->attributes['line'] = $x346->attributes['column'] = 0; }
throw new JSException($x346, 132, 9, '<image>/02_object.js');
}
$x343 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x344 = $x343($global, $x335, $_TypeError, array('Object.defineProperties(): Cannot define properties on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x336 = $x344;
if (is_object($x336) && $x336 !== JS::$undefined) { $x335 = $x336; }
if (isset($x335->class) && $x335->class === 'Error') {$x335->properties['file'] = '<image>/02_object.js';$x335->properties['line'] = 132;$x335->properties['column'] = 3;$x335->attributes['file'] = $x335->attributes['line'] = $x335->attributes['column'] = 0; }
throw new JSException($x335, 132, 3, '<image>/02_object.js');;
};
$x348 = $_properties;
$x348 = ($x348 === JS::$undefined ? 'undefined' : (is_int($x348) || is_float($x348) ? 'number' : (is_bool($x348) ? 'boolean' : (is_string($x348) ? 'string' : (is_object($x348) && isset($x348->call) ? 'function' : 'object')))));
$x347 = !(((gettype($x348) === gettype('object') && $x348 === 'object'))|| (((is_float($x348) || is_int($x348)) && (is_float('object') || is_int('object'))) && $x348 == 'object'));
if (JS::toBoolean($x347, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x351 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 136, 13, '<image>/02_object.js');
$_TypeError =& $x351[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x351;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x352 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 136, 13, '<image>/02_object.js');
$_ReferenceError =& $x352[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x352;
$x353 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 13);
$x354 = $x353($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x354->class) && $x354->class === 'Error') {$x354->properties['file'] = '<image>/02_object.js';$x354->properties['line'] = 136;$x354->properties['column'] = 13;$x354->attributes['file'] = $x354->attributes['line'] = $x354->attributes['column'] = 0; }
throw new JSException($x354, 136, 13, '<image>/02_object.js');
}
$x349 = clone JS::$objectTemplate;
unset($x355, $W355, $S355, $U355);
$x356 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 136, 9, '<image>/02_object.js');
$x355 =& $x356[0]; list(,$W355,$S355,$U355) = $x356;
$x350 = $x355;
$x349->prototype = $x350;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x359 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x360 = $x359($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x360->class) && $x360->class === 'Error') {$x360->properties['file'] = '<image>/02_object.js';$x360->properties['line'] = 136;$x360->properties['column'] = 9;$x360->attributes['file'] = $x360->attributes['line'] = $x360->attributes['column'] = 0; }
throw new JSException($x360, 136, 9, '<image>/02_object.js');
}
$x357 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x358 = $x357($global, $x349, $_TypeError, array('Object.defineProperties(): Given properties argument is not an object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x350 = $x358;
if (is_object($x350) && $x350 !== JS::$undefined) { $x349 = $x350; }
if (isset($x349->class) && $x349->class === 'Error') {$x349->properties['file'] = '<image>/02_object.js';$x349->properties['line'] = 136;$x349->properties['column'] = 3;$x349->attributes['file'] = $x349->attributes['line'] = $x349->attributes['column'] = 0; }
throw new JSException($x349, 136, 3, '<image>/02_object.js');;
};
$scope->properties['p'] = JS::$undefined; $_p =& $scope->properties['p'];
$Up = FALSE;
$_p = JS::$undefined;
if ($_properties !== JS::$undefined && $_properties !== NULL) {
for ($x362 = array(), $x361 = JS::toObject($_properties, $global); $x361; $x361 = $x361->prototype) {
foreach ($x361->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x362[$property])) { continue; }
$x362[$property] = TRUE;
$_p = $property;

unset($_Object, $WObject, $SObject, $UObject);
$x363 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'Object', 140, 3, '<image>/02_object.js');
$_Object =& $x363[0]; list(,$WObject,$SObject,$UObject) = $x363;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x364 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 140, 3, '<image>/02_object.js');
$_ReferenceError =& $x364[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x364;
$x365 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 3);
$x366 = $x365($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x366->class) && $x366->class === 'Error') {$x366->properties['file'] = '<image>/02_object.js';$x366->properties['line'] = 140;$x366->properties['column'] = 3;$x366->attributes['file'] = $x366->attributes['line'] = $x366->attributes['column'] = 0; }
throw new JSException($x366, 140, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x368 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x368[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x368;
$x369 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x370 = $x369($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x370->class) && $x370->class === 'Error') {$x370->properties['file'] = '<image>/02_object.js';$x370->properties['line'] = 140;$x370->properties['column'] = 24;$x370->attributes['file'] = $x370->attributes['line'] = $x370->attributes['column'] = 0; }
throw new JSException($x370, 140, 24, '<image>/02_object.js');
}
$x367 = JS::toObject($_Object, $global);
unset($x371, $W371, $S371, $U371);
$x372 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x367, (string) 'defineProperty', 140, 24, '<image>/02_object.js');
$x371 =& $x372[0]; list(,$W371,$S371,$U371) = $x372;
unset($x373, $W373, $S373, $U373);
$x374 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_properties, (string) $_p, 140, 41, '<image>/02_object.js');
$x373 =& $x374[0]; list(,$W373,$S373,$U373) = $x374;
if (!(is_object($x371) && isset($x371->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x377 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x377[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x377;
$x378 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x379 = $x378($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x379->class) && $x379->class === 'Error') {$x379->properties['file'] = '<image>/02_object.js';$x379->properties['line'] = 140;$x379->properties['column'] = 24;$x379->attributes['file'] = $x379->attributes['line'] = $x379->attributes['column'] = 0; }
throw new JSException($x379, 140, 24, '<image>/02_object.js');
}
$x375 = $x371->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x376 = $x375($global, $x367, $x371, array($_o, $_p, $x373), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x327=&$scope->properties[\'arguments\'];$x327->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x327->properties[$i]=$args[$i];$x327->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x329=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x328=$x329;if(!JS::toBoolean($x328,$global)){$x332=$_o;$x332=($x332===JS::$undefined?\'undefined\':(is_int($x332)||is_float($x332)?\'number\':(is_bool($x332)?\'boolean\':(is_string($x332)?\'string\':(is_object($x332)&&isset($x332->call)?\'function\':\'object\')))));$x331=!(((gettype($x332)===gettype(\'object\')&&$x332===\'object\'))||(((is_float($x332)||is_int($x332))&&(is_float(\'object\')||is_int(\'object\')))&&$x332==\'object\'));$x330=$x331;if(JS::toBoolean($x330,$global)){$x334=$_o;$x334=($x334===JS::$undefined?\'undefined\':(is_int($x334)||is_float($x334)?\'number\':(is_bool($x334)?\'boolean\':(is_string($x334)?\'string\':(is_object($x334)&&isset($x334->call)?\'function\':\'object\')))));$x333=!(((gettype($x334)===gettype(\'function\')&&$x334===\'function\'))||(((is_float($x334)||is_int($x334))&&(is_float(\'function\')||is_int(\'function\')))&&$x334==\'function\'));$x330=$x333;}$x328=$x330;}if(JS::toBoolean($x328,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x337=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',132,13,\'<image>/02_object.js\');$_TypeError=&$x337[0];list(,$WTypeError,$STypeError,$UTypeError)=$x337;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x338=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',132,13,\'<image>/02_object.js\');$_ReferenceError=&$x338[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x338;$x339=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,13);$x340=$x339($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x340->class)&&$x340->class===\'Error\'){$x340->properties[\'file\']=\'<image>/02_object.js\';$x340->properties[\'line\']=132;$x340->properties[\'column\']=13;$x340->attributes[\'file\']=$x340->attributes[\'line\']=$x340->attributes[\'column\']=0;}throw new JSException($x340,132,13,\'<image>/02_object.js\');}$x335=clone JS::$objectTemplate;unset($x341,$W341,$S341,$U341);$x342=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',132,9,\'<image>/02_object.js\');$x341=&$x342[0];list(,$W341,$S341,$U341)=$x342;$x336=$x341;$x335->prototype=$x336;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x345=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x346=$x345($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x346->class)&&$x346->class===\'Error\'){$x346->properties[\'file\']=\'<image>/02_object.js\';$x346->properties[\'line\']=132;$x346->properties[\'column\']=9;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,132,9,\'<image>/02_object.js\');}$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x344=$x343($global,$x335,$_TypeError,array(\'Object.defineProperties(): Cannot define properties on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x336=$x344;if(is_object($x336)&&$x336!==JS::$undefined){$x335=$x336;}if(isset($x335->class)&&$x335->class===\'Error\'){$x335->properties[\'file\']=\'<image>/02_object.js\';$x335->properties[\'line\']=132;$x335->properties[\'column\']=3;$x335->attributes[\'file\']=$x335->attributes[\'line\']=$x335->attributes[\'column\']=0;}throw new JSException($x335,132,3,\'<image>/02_object.js\');}$x348=$_properties;$x348=($x348===JS::$undefined?\'undefined\':(is_int($x348)||is_float($x348)?\'number\':(is_bool($x348)?\'boolean\':(is_string($x348)?\'string\':(is_object($x348)&&isset($x348->call)?\'function\':\'object\')))));$x347=!(((gettype($x348)===gettype(\'object\')&&$x348===\'object\'))||(((is_float($x348)||is_int($x348))&&(is_float(\'object\')||is_int(\'object\')))&&$x348==\'object\'));if(JS::toBoolean($x347,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x351=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',136,13,\'<image>/02_object.js\');$_TypeError=&$x351[0];list(,$WTypeError,$STypeError,$UTypeError)=$x351;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x352=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',136,13,\'<image>/02_object.js\');$_ReferenceError=&$x352[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x352;$x353=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,13);$x354=$x353($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x354->class)&&$x354->class===\'Error\'){$x354->properties[\'file\']=\'<image>/02_object.js\';$x354->properties[\'line\']=136;$x354->properties[\'column\']=13;$x354->attributes[\'file\']=$x354->attributes[\'line\']=$x354->attributes[\'column\']=0;}throw new JSException($x354,136,13,\'<image>/02_object.js\');}$x349=clone JS::$objectTemplate;unset($x355,$W355,$S355,$U355);$x356=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',136,9,\'<image>/02_object.js\');$x355=&$x356[0];list(,$W355,$S355,$U355)=$x356;$x350=$x355;$x349->prototype=$x350;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x359=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x360=$x359($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x360->class)&&$x360->class===\'Error\'){$x360->properties[\'file\']=\'<image>/02_object.js\';$x360->properties[\'line\']=136;$x360->properties[\'column\']=9;$x360->attributes[\'file\']=$x360->attributes[\'line\']=$x360->attributes[\'column\']=0;}throw new JSException($x360,136,9,\'<image>/02_object.js\');}$x357=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x358=$x357($global,$x349,$_TypeError,array(\'Object.defineProperties(): Given properties argument is not an object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x350=$x358;if(is_object($x350)&&$x350!==JS::$undefined){$x349=$x350;}if(isset($x349->class)&&$x349->class===\'Error\'){$x349->properties[\'file\']=\'<image>/02_object.js\';$x349->properties[\'line\']=136;$x349->properties[\'column\']=3;$x349->attributes[\'file\']=$x349->attributes[\'line\']=$x349->attributes[\'column\']=0;}throw new JSException($x349,136,3,\'<image>/02_object.js\');}$scope->properties[\'p\']=JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$_p=JS::$undefined;if($_properties!==JS::$undefined&&$_properties!==NULL){for($x362=array(),$x361=JS::toObject($_properties,$global);$x361;$x361=$x361->prototype){foreach($x361->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x362[$property])){continue;}$x362[$property]=TRUE;$_p=$property;unset($_Object,$WObject,$SObject,$UObject);$x363=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'Object\',140,3,\'<image>/02_object.js\');$_Object=&$x363[0];list(,$WObject,$SObject,$UObject)=$x363;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x364=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',140,3,\'<image>/02_object.js\');$_ReferenceError=&$x364[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x364;$x365=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,3);$x366=$x365($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x366->class)&&$x366->class===\'Error\'){$x366->properties[\'file\']=\'<image>/02_object.js\';$x366->properties[\'line\']=140;$x366->properties[\'column\']=3;$x366->attributes[\'file\']=$x366->attributes[\'line\']=$x366->attributes[\'column\']=0;}throw new JSException($x366,140,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x368=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x368[0];list(,$WTypeError,$STypeError,$UTypeError)=$x368;$x369=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x370=$x369($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x370->class)&&$x370->class===\'Error\'){$x370->properties[\'file\']=\'<image>/02_object.js\';$x370->properties[\'line\']=140;$x370->properties[\'column\']=24;$x370->attributes[\'file\']=$x370->attributes[\'line\']=$x370->attributes[\'column\']=0;}throw new JSException($x370,140,24,\'<image>/02_object.js\');}$x367=JS::toObject($_Object,$global);unset($x371,$W371,$S371,$U371);$x372=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x367,(string)\'defineProperty\',140,24,\'<image>/02_object.js\');$x371=&$x372[0];list(,$W371,$S371,$U371)=$x372;unset($x373,$W373,$S373,$U373);$x374=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_properties,(string)$_p,140,41,\'<image>/02_object.js\');$x373=&$x374[0];list(,$W373,$S373,$U373)=$x374;if(!(is_object($x371)&&isset($x371->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x377=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x377[0];list(,$WTypeError,$STypeError,$UTypeError)=$x377;$x378=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x379=$x378($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x379->class)&&$x379->class===\'Error\'){$x379->properties[\'file\']=\'<image>/02_object.js\';$x379->properties[\'line\']=140;$x379->properties[\'column\']=24;$x379->attributes[\'file\']=$x379->attributes[\'line\']=$x379->attributes[\'column\']=0;}throw new JSException($x379,140,24,\'<image>/02_object.js\');}$x375=$x371->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x376=$x375($global,$x367,$x371,array($_o,$_p,$x373),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x390 =& $scope->properties['arguments'];
$x390->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x390->properties[$i] = $args[$i];
$x390->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x392 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x391 = $x392;
if (!JS::toBoolean($x391, $global)) {
$x395 = $_o;
$x395 = ($x395 === JS::$undefined ? 'undefined' : (is_int($x395) || is_float($x395) ? 'number' : (is_bool($x395) ? 'boolean' : (is_string($x395) ? 'string' : (is_object($x395) && isset($x395->call) ? 'function' : 'object')))));
$x394 = !(((gettype($x395) === gettype('object') && $x395 === 'object'))|| (((is_float($x395) || is_int($x395)) && (is_float('object') || is_int('object'))) && $x395 == 'object'));
$x393 = $x394;
if (JS::toBoolean($x393, $global)) {
$x397 = $_o;
$x397 = ($x397 === JS::$undefined ? 'undefined' : (is_int($x397) || is_float($x397) ? 'number' : (is_bool($x397) ? 'boolean' : (is_string($x397) ? 'string' : (is_object($x397) && isset($x397->call) ? 'function' : 'object')))));
$x396 = !(((gettype($x397) === gettype('function') && $x397 === 'function'))|| (((is_float($x397) || is_int($x397)) && (is_float('function') || is_int('function'))) && $x397 == 'function'));
$x393 = $x396; }
$x391 = $x393; }
if (JS::toBoolean($x391, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x400 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 148, 13, '<image>/02_object.js');
$_TypeError =& $x400[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x400;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x401 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 148, 13, '<image>/02_object.js');
$_ReferenceError =& $x401[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x401;
$x402 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 13);
$x403 = $x402($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x403->class) && $x403->class === 'Error') {$x403->properties['file'] = '<image>/02_object.js';$x403->properties['line'] = 148;$x403->properties['column'] = 13;$x403->attributes['file'] = $x403->attributes['line'] = $x403->attributes['column'] = 0; }
throw new JSException($x403, 148, 13, '<image>/02_object.js');
}
$x398 = clone JS::$objectTemplate;
unset($x404, $W404, $S404, $U404);
$x405 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 148, 9, '<image>/02_object.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
$x399 = $x404;
$x398->prototype = $x399;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x408 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x409 = $x408($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x409->class) && $x409->class === 'Error') {$x409->properties['file'] = '<image>/02_object.js';$x409->properties['line'] = 148;$x409->properties['column'] = 9;$x409->attributes['file'] = $x409->attributes['line'] = $x409->attributes['column'] = 0; }
throw new JSException($x409, 148, 9, '<image>/02_object.js');
}
$x406 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x407 = $x406($global, $x398, $_TypeError, array('Object.seal(): Cannot seal non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x399 = $x407;
if (is_object($x399) && $x399 !== JS::$undefined) { $x398 = $x399; }
if (isset($x398->class) && $x398->class === 'Error') {$x398->properties['file'] = '<image>/02_object.js';$x398->properties['line'] = 148;$x398->properties['column'] = 3;$x398->attributes['file'] = $x398->attributes['line'] = $x398->attributes['column'] = 0; }
throw new JSException($x398, 148, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x390=&$scope->properties[\'arguments\'];$x390->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x390->properties[$i]=$args[$i];$x390->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x392=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x391=$x392;if(!JS::toBoolean($x391,$global)){$x395=$_o;$x395=($x395===JS::$undefined?\'undefined\':(is_int($x395)||is_float($x395)?\'number\':(is_bool($x395)?\'boolean\':(is_string($x395)?\'string\':(is_object($x395)&&isset($x395->call)?\'function\':\'object\')))));$x394=!(((gettype($x395)===gettype(\'object\')&&$x395===\'object\'))||(((is_float($x395)||is_int($x395))&&(is_float(\'object\')||is_int(\'object\')))&&$x395==\'object\'));$x393=$x394;if(JS::toBoolean($x393,$global)){$x397=$_o;$x397=($x397===JS::$undefined?\'undefined\':(is_int($x397)||is_float($x397)?\'number\':(is_bool($x397)?\'boolean\':(is_string($x397)?\'string\':(is_object($x397)&&isset($x397->call)?\'function\':\'object\')))));$x396=!(((gettype($x397)===gettype(\'function\')&&$x397===\'function\'))||(((is_float($x397)||is_int($x397))&&(is_float(\'function\')||is_int(\'function\')))&&$x397==\'function\'));$x393=$x396;}$x391=$x393;}if(JS::toBoolean($x391,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x400=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',148,13,\'<image>/02_object.js\');$_TypeError=&$x400[0];list(,$WTypeError,$STypeError,$UTypeError)=$x400;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x401=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',148,13,\'<image>/02_object.js\');$_ReferenceError=&$x401[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x401;$x402=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,13);$x403=$x402($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x403->class)&&$x403->class===\'Error\'){$x403->properties[\'file\']=\'<image>/02_object.js\';$x403->properties[\'line\']=148;$x403->properties[\'column\']=13;$x403->attributes[\'file\']=$x403->attributes[\'line\']=$x403->attributes[\'column\']=0;}throw new JSException($x403,148,13,\'<image>/02_object.js\');}$x398=clone JS::$objectTemplate;unset($x404,$W404,$S404,$U404);$x405=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',148,9,\'<image>/02_object.js\');$x404=&$x405[0];list(,$W404,$S404,$U404)=$x405;$x399=$x404;$x398->prototype=$x399;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x408=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x409=$x408($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x409->class)&&$x409->class===\'Error\'){$x409->properties[\'file\']=\'<image>/02_object.js\';$x409->properties[\'line\']=148;$x409->properties[\'column\']=9;$x409->attributes[\'file\']=$x409->attributes[\'line\']=$x409->attributes[\'column\']=0;}throw new JSException($x409,148,9,\'<image>/02_object.js\');}$x406=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x407=$x406($global,$x398,$_TypeError,array(\'Object.seal(): Cannot seal non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x399=$x407;if(is_object($x399)&&$x399!==JS::$undefined){$x398=$x399;}if(isset($x398->class)&&$x398->class===\'Error\'){$x398->properties[\'file\']=\'<image>/02_object.js\';$x398->properties[\'line\']=148;$x398->properties[\'column\']=3;$x398->attributes[\'file\']=$x398->attributes[\'line\']=$x398->attributes[\'column\']=0;}throw new JSException($x398,148,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x420 =& $scope->properties['arguments'];
$x420->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x420->properties[$i] = $args[$i];
$x420->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x422 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x421 = $x422;
if (!JS::toBoolean($x421, $global)) {
$x425 = $_o;
$x425 = ($x425 === JS::$undefined ? 'undefined' : (is_int($x425) || is_float($x425) ? 'number' : (is_bool($x425) ? 'boolean' : (is_string($x425) ? 'string' : (is_object($x425) && isset($x425->call) ? 'function' : 'object')))));
$x424 = !(((gettype($x425) === gettype('object') && $x425 === 'object'))|| (((is_float($x425) || is_int($x425)) && (is_float('object') || is_int('object'))) && $x425 == 'object'));
$x423 = $x424;
if (JS::toBoolean($x423, $global)) {
$x427 = $_o;
$x427 = ($x427 === JS::$undefined ? 'undefined' : (is_int($x427) || is_float($x427) ? 'number' : (is_bool($x427) ? 'boolean' : (is_string($x427) ? 'string' : (is_object($x427) && isset($x427->call) ? 'function' : 'object')))));
$x426 = !(((gettype($x427) === gettype('function') && $x427 === 'function'))|| (((is_float($x427) || is_int($x427)) && (is_float('function') || is_int('function'))) && $x427 == 'function'));
$x423 = $x426; }
$x421 = $x423; }
if (JS::toBoolean($x421, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x430 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 164, 13, '<image>/02_object.js');
$_TypeError =& $x430[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x430;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x431 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 164, 13, '<image>/02_object.js');
$_ReferenceError =& $x431[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x431;
$x432 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 13);
$x433 = $x432($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x433->class) && $x433->class === 'Error') {$x433->properties['file'] = '<image>/02_object.js';$x433->properties['line'] = 164;$x433->properties['column'] = 13;$x433->attributes['file'] = $x433->attributes['line'] = $x433->attributes['column'] = 0; }
throw new JSException($x433, 164, 13, '<image>/02_object.js');
}
$x428 = clone JS::$objectTemplate;
unset($x434, $W434, $S434, $U434);
$x435 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 164, 9, '<image>/02_object.js');
$x434 =& $x435[0]; list(,$W434,$S434,$U434) = $x435;
$x429 = $x434;
$x428->prototype = $x429;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x438 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x439 = $x438($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x439->class) && $x439->class === 'Error') {$x439->properties['file'] = '<image>/02_object.js';$x439->properties['line'] = 164;$x439->properties['column'] = 9;$x439->attributes['file'] = $x439->attributes['line'] = $x439->attributes['column'] = 0; }
throw new JSException($x439, 164, 9, '<image>/02_object.js');
}
$x436 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x437 = $x436($global, $x428, $_TypeError, array('Object.freeze(): Cannot freeze non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x429 = $x437;
if (is_object($x429) && $x429 !== JS::$undefined) { $x428 = $x429; }
if (isset($x428->class) && $x428->class === 'Error') {$x428->properties['file'] = '<image>/02_object.js';$x428->properties['line'] = 164;$x428->properties['column'] = 3;$x428->attributes['file'] = $x428->attributes['line'] = $x428->attributes['column'] = 0; }
throw new JSException($x428, 164, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::WRITABLE;$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x420=&$scope->properties[\'arguments\'];$x420->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x420->properties[$i]=$args[$i];$x420->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x422=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x421=$x422;if(!JS::toBoolean($x421,$global)){$x425=$_o;$x425=($x425===JS::$undefined?\'undefined\':(is_int($x425)||is_float($x425)?\'number\':(is_bool($x425)?\'boolean\':(is_string($x425)?\'string\':(is_object($x425)&&isset($x425->call)?\'function\':\'object\')))));$x424=!(((gettype($x425)===gettype(\'object\')&&$x425===\'object\'))||(((is_float($x425)||is_int($x425))&&(is_float(\'object\')||is_int(\'object\')))&&$x425==\'object\'));$x423=$x424;if(JS::toBoolean($x423,$global)){$x427=$_o;$x427=($x427===JS::$undefined?\'undefined\':(is_int($x427)||is_float($x427)?\'number\':(is_bool($x427)?\'boolean\':(is_string($x427)?\'string\':(is_object($x427)&&isset($x427->call)?\'function\':\'object\')))));$x426=!(((gettype($x427)===gettype(\'function\')&&$x427===\'function\'))||(((is_float($x427)||is_int($x427))&&(is_float(\'function\')||is_int(\'function\')))&&$x427==\'function\'));$x423=$x426;}$x421=$x423;}if(JS::toBoolean($x421,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x430=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',164,13,\'<image>/02_object.js\');$_TypeError=&$x430[0];list(,$WTypeError,$STypeError,$UTypeError)=$x430;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x431=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',164,13,\'<image>/02_object.js\');$_ReferenceError=&$x431[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x431;$x432=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,13);$x433=$x432($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x433->class)&&$x433->class===\'Error\'){$x433->properties[\'file\']=\'<image>/02_object.js\';$x433->properties[\'line\']=164;$x433->properties[\'column\']=13;$x433->attributes[\'file\']=$x433->attributes[\'line\']=$x433->attributes[\'column\']=0;}throw new JSException($x433,164,13,\'<image>/02_object.js\');}$x428=clone JS::$objectTemplate;unset($x434,$W434,$S434,$U434);$x435=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',164,9,\'<image>/02_object.js\');$x434=&$x435[0];list(,$W434,$S434,$U434)=$x435;$x429=$x434;$x428->prototype=$x429;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x438=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x439=$x438($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x439->class)&&$x439->class===\'Error\'){$x439->properties[\'file\']=\'<image>/02_object.js\';$x439->properties[\'line\']=164;$x439->properties[\'column\']=9;$x439->attributes[\'file\']=$x439->attributes[\'line\']=$x439->attributes[\'column\']=0;}throw new JSException($x439,164,9,\'<image>/02_object.js\');}$x436=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x437=$x436($global,$x428,$_TypeError,array(\'Object.freeze(): Cannot freeze non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x429=$x437;if(is_object($x429)&&$x429!==JS::$undefined){$x428=$x429;}if(isset($x428->class)&&$x428->class===\'Error\'){$x428->properties[\'file\']=\'<image>/02_object.js\';$x428->properties[\'line\']=164;$x428->properties[\'column\']=3;$x428->attributes[\'file\']=$x428->attributes[\'line\']=$x428->attributes[\'column\']=0;}throw new JSException($x428,164,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::WRITABLE;$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x450 =& $scope->properties['arguments'];
$x450->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x450->properties[$i] = $args[$i];
$x450->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x452 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x451 = $x452;
if (!JS::toBoolean($x451, $global)) {
$x455 = $_o;
$x455 = ($x455 === JS::$undefined ? 'undefined' : (is_int($x455) || is_float($x455) ? 'number' : (is_bool($x455) ? 'boolean' : (is_string($x455) ? 'string' : (is_object($x455) && isset($x455->call) ? 'function' : 'object')))));
$x454 = !(((gettype($x455) === gettype('object') && $x455 === 'object'))|| (((is_float($x455) || is_int($x455)) && (is_float('object') || is_int('object'))) && $x455 == 'object'));
$x453 = $x454;
if (JS::toBoolean($x453, $global)) {
$x457 = $_o;
$x457 = ($x457 === JS::$undefined ? 'undefined' : (is_int($x457) || is_float($x457) ? 'number' : (is_bool($x457) ? 'boolean' : (is_string($x457) ? 'string' : (is_object($x457) && isset($x457->call) ? 'function' : 'object')))));
$x456 = !(((gettype($x457) === gettype('function') && $x457 === 'function'))|| (((is_float($x457) || is_int($x457)) && (is_float('function') || is_int('function'))) && $x457 == 'function'));
$x453 = $x456; }
$x451 = $x453; }
if (JS::toBoolean($x451, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x460 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 181, 13, '<image>/02_object.js');
$_TypeError =& $x460[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x460;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x461 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 181, 13, '<image>/02_object.js');
$_ReferenceError =& $x461[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x461;
$x462 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 13);
$x463 = $x462($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x463->class) && $x463->class === 'Error') {$x463->properties['file'] = '<image>/02_object.js';$x463->properties['line'] = 181;$x463->properties['column'] = 13;$x463->attributes['file'] = $x463->attributes['line'] = $x463->attributes['column'] = 0; }
throw new JSException($x463, 181, 13, '<image>/02_object.js');
}
$x458 = clone JS::$objectTemplate;
unset($x464, $W464, $S464, $U464);
$x465 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 181, 9, '<image>/02_object.js');
$x464 =& $x465[0]; list(,$W464,$S464,$U464) = $x465;
$x459 = $x464;
$x458->prototype = $x459;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x468 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x469 = $x468($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x469->class) && $x469->class === 'Error') {$x469->properties['file'] = '<image>/02_object.js';$x469->properties['line'] = 181;$x469->properties['column'] = 9;$x469->attributes['file'] = $x469->attributes['line'] = $x469->attributes['column'] = 0; }
throw new JSException($x469, 181, 9, '<image>/02_object.js');
}
$x466 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x467 = $x466($global, $x458, $_TypeError, array('Object.preventExtensions(): Cannot prevent extensions on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x459 = $x467;
if (is_object($x459) && $x459 !== JS::$undefined) { $x458 = $x459; }
if (isset($x458->class) && $x458->class === 'Error') {$x458->properties['file'] = '<image>/02_object.js';$x458->properties['line'] = 181;$x458->properties['column'] = 3;$x458->attributes['file'] = $x458->attributes['line'] = $x458->attributes['column'] = 0; }
throw new JSException($x458, 181, 3, '<image>/02_object.js');;
};
$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x450=&$scope->properties[\'arguments\'];$x450->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x450->properties[$i]=$args[$i];$x450->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x452=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x451=$x452;if(!JS::toBoolean($x451,$global)){$x455=$_o;$x455=($x455===JS::$undefined?\'undefined\':(is_int($x455)||is_float($x455)?\'number\':(is_bool($x455)?\'boolean\':(is_string($x455)?\'string\':(is_object($x455)&&isset($x455->call)?\'function\':\'object\')))));$x454=!(((gettype($x455)===gettype(\'object\')&&$x455===\'object\'))||(((is_float($x455)||is_int($x455))&&(is_float(\'object\')||is_int(\'object\')))&&$x455==\'object\'));$x453=$x454;if(JS::toBoolean($x453,$global)){$x457=$_o;$x457=($x457===JS::$undefined?\'undefined\':(is_int($x457)||is_float($x457)?\'number\':(is_bool($x457)?\'boolean\':(is_string($x457)?\'string\':(is_object($x457)&&isset($x457->call)?\'function\':\'object\')))));$x456=!(((gettype($x457)===gettype(\'function\')&&$x457===\'function\'))||(((is_float($x457)||is_int($x457))&&(is_float(\'function\')||is_int(\'function\')))&&$x457==\'function\'));$x453=$x456;}$x451=$x453;}if(JS::toBoolean($x451,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x460=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',181,13,\'<image>/02_object.js\');$_TypeError=&$x460[0];list(,$WTypeError,$STypeError,$UTypeError)=$x460;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x461=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',181,13,\'<image>/02_object.js\');$_ReferenceError=&$x461[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x461;$x462=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,13);$x463=$x462($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x463->class)&&$x463->class===\'Error\'){$x463->properties[\'file\']=\'<image>/02_object.js\';$x463->properties[\'line\']=181;$x463->properties[\'column\']=13;$x463->attributes[\'file\']=$x463->attributes[\'line\']=$x463->attributes[\'column\']=0;}throw new JSException($x463,181,13,\'<image>/02_object.js\');}$x458=clone JS::$objectTemplate;unset($x464,$W464,$S464,$U464);$x465=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',181,9,\'<image>/02_object.js\');$x464=&$x465[0];list(,$W464,$S464,$U464)=$x465;$x459=$x464;$x458->prototype=$x459;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x468=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x469=$x468($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x469->class)&&$x469->class===\'Error\'){$x469->properties[\'file\']=\'<image>/02_object.js\';$x469->properties[\'line\']=181;$x469->properties[\'column\']=9;$x469->attributes[\'file\']=$x469->attributes[\'line\']=$x469->attributes[\'column\']=0;}throw new JSException($x469,181,9,\'<image>/02_object.js\');}$x466=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x467=$x466($global,$x458,$_TypeError,array(\'Object.preventExtensions(): Cannot prevent extensions on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x459=$x467;if(is_object($x459)&&$x459!==JS::$undefined){$x458=$x459;}if(isset($x458->class)&&$x458->class===\'Error\'){$x458->properties[\'file\']=\'<image>/02_object.js\';$x458->properties[\'line\']=181;$x458->properties[\'column\']=3;$x458->attributes[\'file\']=$x458->attributes[\'line\']=$x458->attributes[\'column\']=0;}throw new JSException($x458,181,3,\'<image>/02_object.js\');}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x480 =& $scope->properties['arguments'];
$x480->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x480->properties[$i] = $args[$i];
$x480->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x482 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x481 = $x482;
if (!JS::toBoolean($x481, $global)) {
$x485 = $_o;
$x485 = ($x485 === JS::$undefined ? 'undefined' : (is_int($x485) || is_float($x485) ? 'number' : (is_bool($x485) ? 'boolean' : (is_string($x485) ? 'string' : (is_object($x485) && isset($x485->call) ? 'function' : 'object')))));
$x484 = !(((gettype($x485) === gettype('object') && $x485 === 'object'))|| (((is_float($x485) || is_int($x485)) && (is_float('object') || is_int('object'))) && $x485 == 'object'));
$x483 = $x484;
if (JS::toBoolean($x483, $global)) {
$x487 = $_o;
$x487 = ($x487 === JS::$undefined ? 'undefined' : (is_int($x487) || is_float($x487) ? 'number' : (is_bool($x487) ? 'boolean' : (is_string($x487) ? 'string' : (is_object($x487) && isset($x487->call) ? 'function' : 'object')))));
$x486 = !(((gettype($x487) === gettype('function') && $x487 === 'function'))|| (((is_float($x487) || is_int($x487)) && (is_float('function') || is_int('function'))) && $x487 == 'function'));
$x483 = $x486; }
$x481 = $x483; }
if (JS::toBoolean($x481, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x490 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 191, 13, '<image>/02_object.js');
$_TypeError =& $x490[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x490;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x491 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 191, 13, '<image>/02_object.js');
$_ReferenceError =& $x491[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x491;
$x492 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 13);
$x493 = $x492($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x493->class) && $x493->class === 'Error') {$x493->properties['file'] = '<image>/02_object.js';$x493->properties['line'] = 191;$x493->properties['column'] = 13;$x493->attributes['file'] = $x493->attributes['line'] = $x493->attributes['column'] = 0; }
throw new JSException($x493, 191, 13, '<image>/02_object.js');
}
$x488 = clone JS::$objectTemplate;
unset($x494, $W494, $S494, $U494);
$x495 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 191, 9, '<image>/02_object.js');
$x494 =& $x495[0]; list(,$W494,$S494,$U494) = $x495;
$x489 = $x494;
$x488->prototype = $x489;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x498 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x499 = $x498($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x499->class) && $x499->class === 'Error') {$x499->properties['file'] = '<image>/02_object.js';$x499->properties['line'] = 191;$x499->properties['column'] = 9;$x499->attributes['file'] = $x499->attributes['line'] = $x499->attributes['column'] = 0; }
throw new JSException($x499, 191, 9, '<image>/02_object.js');
}
$x496 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x497 = $x496($global, $x488, $_TypeError, array('Object.isSealed(): Cannot return if sealed, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x489 = $x497;
if (is_object($x489) && $x489 !== JS::$undefined) { $x488 = $x489; }
if (isset($x488->class) && $x488->class === 'Error') {$x488->properties['file'] = '<image>/02_object.js';$x488->properties['line'] = 191;$x488->properties['column'] = 3;$x488->attributes['file'] = $x488->attributes['line'] = $x488->attributes['column'] = 0; }
throw new JSException($x488, 191, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {
			if ($_o->attributes[$property] & JS::CONFIGURABLE) {
				return FALSE;
			}
		}

		return !$_o->extensible;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x480=&$scope->properties[\'arguments\'];$x480->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x480->properties[$i]=$args[$i];$x480->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x482=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x481=$x482;if(!JS::toBoolean($x481,$global)){$x485=$_o;$x485=($x485===JS::$undefined?\'undefined\':(is_int($x485)||is_float($x485)?\'number\':(is_bool($x485)?\'boolean\':(is_string($x485)?\'string\':(is_object($x485)&&isset($x485->call)?\'function\':\'object\')))));$x484=!(((gettype($x485)===gettype(\'object\')&&$x485===\'object\'))||(((is_float($x485)||is_int($x485))&&(is_float(\'object\')||is_int(\'object\')))&&$x485==\'object\'));$x483=$x484;if(JS::toBoolean($x483,$global)){$x487=$_o;$x487=($x487===JS::$undefined?\'undefined\':(is_int($x487)||is_float($x487)?\'number\':(is_bool($x487)?\'boolean\':(is_string($x487)?\'string\':(is_object($x487)&&isset($x487->call)?\'function\':\'object\')))));$x486=!(((gettype($x487)===gettype(\'function\')&&$x487===\'function\'))||(((is_float($x487)||is_int($x487))&&(is_float(\'function\')||is_int(\'function\')))&&$x487==\'function\'));$x483=$x486;}$x481=$x483;}if(JS::toBoolean($x481,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x490=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',191,13,\'<image>/02_object.js\');$_TypeError=&$x490[0];list(,$WTypeError,$STypeError,$UTypeError)=$x490;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x491=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',191,13,\'<image>/02_object.js\');$_ReferenceError=&$x491[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x491;$x492=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,13);$x493=$x492($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x493->class)&&$x493->class===\'Error\'){$x493->properties[\'file\']=\'<image>/02_object.js\';$x493->properties[\'line\']=191;$x493->properties[\'column\']=13;$x493->attributes[\'file\']=$x493->attributes[\'line\']=$x493->attributes[\'column\']=0;}throw new JSException($x493,191,13,\'<image>/02_object.js\');}$x488=clone JS::$objectTemplate;unset($x494,$W494,$S494,$U494);$x495=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',191,9,\'<image>/02_object.js\');$x494=&$x495[0];list(,$W494,$S494,$U494)=$x495;$x489=$x494;$x488->prototype=$x489;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x498=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x499=$x498($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x499->class)&&$x499->class===\'Error\'){$x499->properties[\'file\']=\'<image>/02_object.js\';$x499->properties[\'line\']=191;$x499->properties[\'column\']=9;$x499->attributes[\'file\']=$x499->attributes[\'line\']=$x499->attributes[\'column\']=0;}throw new JSException($x499,191,9,\'<image>/02_object.js\');}$x496=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x497=$x496($global,$x488,$_TypeError,array(\'Object.isSealed(): Cannot return if sealed, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x489=$x497;if(is_object($x489)&&$x489!==JS::$undefined){$x488=$x489;}if(isset($x488->class)&&$x488->class===\'Error\'){$x488->properties[\'file\']=\'<image>/02_object.js\';$x488->properties[\'line\']=191;$x488->properties[\'column\']=3;$x488->attributes[\'file\']=$x488->attributes[\'line\']=$x488->attributes[\'column\']=0;}throw new JSException($x488,191,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&JS::CONFIGURABLE){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x510 =& $scope->properties['arguments'];
$x510->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x510->properties[$i] = $args[$i];
$x510->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x512 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x511 = $x512;
if (!JS::toBoolean($x511, $global)) {
$x515 = $_o;
$x515 = ($x515 === JS::$undefined ? 'undefined' : (is_int($x515) || is_float($x515) ? 'number' : (is_bool($x515) ? 'boolean' : (is_string($x515) ? 'string' : (is_object($x515) && isset($x515->call) ? 'function' : 'object')))));
$x514 = !(((gettype($x515) === gettype('object') && $x515 === 'object'))|| (((is_float($x515) || is_int($x515)) && (is_float('object') || is_int('object'))) && $x515 == 'object'));
$x513 = $x514;
if (JS::toBoolean($x513, $global)) {
$x517 = $_o;
$x517 = ($x517 === JS::$undefined ? 'undefined' : (is_int($x517) || is_float($x517) ? 'number' : (is_bool($x517) ? 'boolean' : (is_string($x517) ? 'string' : (is_object($x517) && isset($x517->call) ? 'function' : 'object')))));
$x516 = !(((gettype($x517) === gettype('function') && $x517 === 'function'))|| (((is_float($x517) || is_int($x517)) && (is_float('function') || is_int('function'))) && $x517 == 'function'));
$x513 = $x516; }
$x511 = $x513; }
if (JS::toBoolean($x511, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x520 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 207, 13, '<image>/02_object.js');
$_TypeError =& $x520[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x520;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x521 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 207, 13, '<image>/02_object.js');
$_ReferenceError =& $x521[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x521;
$x522 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 13);
$x523 = $x522($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x523->class) && $x523->class === 'Error') {$x523->properties['file'] = '<image>/02_object.js';$x523->properties['line'] = 207;$x523->properties['column'] = 13;$x523->attributes['file'] = $x523->attributes['line'] = $x523->attributes['column'] = 0; }
throw new JSException($x523, 207, 13, '<image>/02_object.js');
}
$x518 = clone JS::$objectTemplate;
unset($x524, $W524, $S524, $U524);
$x525 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 207, 9, '<image>/02_object.js');
$x524 =& $x525[0]; list(,$W524,$S524,$U524) = $x525;
$x519 = $x524;
$x518->prototype = $x519;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x528 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x529 = $x528($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x529->class) && $x529->class === 'Error') {$x529->properties['file'] = '<image>/02_object.js';$x529->properties['line'] = 207;$x529->properties['column'] = 9;$x529->attributes['file'] = $x529->attributes['line'] = $x529->attributes['column'] = 0; }
throw new JSException($x529, 207, 9, '<image>/02_object.js');
}
$x526 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x527 = $x526($global, $x518, $_TypeError, array('Object.isFrozen(): Cannot return if frozen, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x519 = $x527;
if (is_object($x519) && $x519 !== JS::$undefined) { $x518 = $x519; }
if (isset($x518->class) && $x518->class === 'Error') {$x518->properties['file'] = '<image>/02_object.js';$x518->properties['line'] = 207;$x518->properties['column'] = 3;$x518->attributes['file'] = $x518->attributes['line'] = $x518->attributes['column'] = 0; }
throw new JSException($x518, 207, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {
			if ($_o->attributes[$property] & (JS::CONFIGURABLE | JS::WRITABLE)) {
				return FALSE;
			}
		}

		return !$_o->extensible;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x510=&$scope->properties[\'arguments\'];$x510->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x510->properties[$i]=$args[$i];$x510->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x512=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x511=$x512;if(!JS::toBoolean($x511,$global)){$x515=$_o;$x515=($x515===JS::$undefined?\'undefined\':(is_int($x515)||is_float($x515)?\'number\':(is_bool($x515)?\'boolean\':(is_string($x515)?\'string\':(is_object($x515)&&isset($x515->call)?\'function\':\'object\')))));$x514=!(((gettype($x515)===gettype(\'object\')&&$x515===\'object\'))||(((is_float($x515)||is_int($x515))&&(is_float(\'object\')||is_int(\'object\')))&&$x515==\'object\'));$x513=$x514;if(JS::toBoolean($x513,$global)){$x517=$_o;$x517=($x517===JS::$undefined?\'undefined\':(is_int($x517)||is_float($x517)?\'number\':(is_bool($x517)?\'boolean\':(is_string($x517)?\'string\':(is_object($x517)&&isset($x517->call)?\'function\':\'object\')))));$x516=!(((gettype($x517)===gettype(\'function\')&&$x517===\'function\'))||(((is_float($x517)||is_int($x517))&&(is_float(\'function\')||is_int(\'function\')))&&$x517==\'function\'));$x513=$x516;}$x511=$x513;}if(JS::toBoolean($x511,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x520=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',207,13,\'<image>/02_object.js\');$_TypeError=&$x520[0];list(,$WTypeError,$STypeError,$UTypeError)=$x520;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x521=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',207,13,\'<image>/02_object.js\');$_ReferenceError=&$x521[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x521;$x522=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,13);$x523=$x522($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x523->class)&&$x523->class===\'Error\'){$x523->properties[\'file\']=\'<image>/02_object.js\';$x523->properties[\'line\']=207;$x523->properties[\'column\']=13;$x523->attributes[\'file\']=$x523->attributes[\'line\']=$x523->attributes[\'column\']=0;}throw new JSException($x523,207,13,\'<image>/02_object.js\');}$x518=clone JS::$objectTemplate;unset($x524,$W524,$S524,$U524);$x525=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',207,9,\'<image>/02_object.js\');$x524=&$x525[0];list(,$W524,$S524,$U524)=$x525;$x519=$x524;$x518->prototype=$x519;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x528=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x529=$x528($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x529->class)&&$x529->class===\'Error\'){$x529->properties[\'file\']=\'<image>/02_object.js\';$x529->properties[\'line\']=207;$x529->properties[\'column\']=9;$x529->attributes[\'file\']=$x529->attributes[\'line\']=$x529->attributes[\'column\']=0;}throw new JSException($x529,207,9,\'<image>/02_object.js\');}$x526=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x527=$x526($global,$x518,$_TypeError,array(\'Object.isFrozen(): Cannot return if frozen, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x519=$x527;if(is_object($x519)&&$x519!==JS::$undefined){$x518=$x519;}if(isset($x518->class)&&$x518->class===\'Error\'){$x518->properties[\'file\']=\'<image>/02_object.js\';$x518->properties[\'line\']=207;$x518->properties[\'column\']=3;$x518->attributes[\'file\']=$x518->attributes[\'line\']=$x518->attributes[\'column\']=0;}throw new JSException($x518,207,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&(JS::CONFIGURABLE|JS::WRITABLE)){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x540 =& $scope->properties['arguments'];
$x540->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x540->properties[$i] = $args[$i];
$x540->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x542 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x541 = $x542;
if (!JS::toBoolean($x541, $global)) {
$x545 = $_o;
$x545 = ($x545 === JS::$undefined ? 'undefined' : (is_int($x545) || is_float($x545) ? 'number' : (is_bool($x545) ? 'boolean' : (is_string($x545) ? 'string' : (is_object($x545) && isset($x545->call) ? 'function' : 'object')))));
$x544 = !(((gettype($x545) === gettype('object') && $x545 === 'object'))|| (((is_float($x545) || is_int($x545)) && (is_float('object') || is_int('object'))) && $x545 == 'object'));
$x543 = $x544;
if (JS::toBoolean($x543, $global)) {
$x547 = $_o;
$x547 = ($x547 === JS::$undefined ? 'undefined' : (is_int($x547) || is_float($x547) ? 'number' : (is_bool($x547) ? 'boolean' : (is_string($x547) ? 'string' : (is_object($x547) && isset($x547->call) ? 'function' : 'object')))));
$x546 = !(((gettype($x547) === gettype('function') && $x547 === 'function'))|| (((is_float($x547) || is_int($x547)) && (is_float('function') || is_int('function'))) && $x547 == 'function'));
$x543 = $x546; }
$x541 = $x543; }
if (JS::toBoolean($x541, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x550 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 223, 13, '<image>/02_object.js');
$_TypeError =& $x550[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x550;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x551 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 223, 13, '<image>/02_object.js');
$_ReferenceError =& $x551[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x551;
$x552 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 13);
$x553 = $x552($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x553->class) && $x553->class === 'Error') {$x553->properties['file'] = '<image>/02_object.js';$x553->properties['line'] = 223;$x553->properties['column'] = 13;$x553->attributes['file'] = $x553->attributes['line'] = $x553->attributes['column'] = 0; }
throw new JSException($x553, 223, 13, '<image>/02_object.js');
}
$x548 = clone JS::$objectTemplate;
unset($x554, $W554, $S554, $U554);
$x555 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 223, 9, '<image>/02_object.js');
$x554 =& $x555[0]; list(,$W554,$S554,$U554) = $x555;
$x549 = $x554;
$x548->prototype = $x549;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x558 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x559 = $x558($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x559->class) && $x559->class === 'Error') {$x559->properties['file'] = '<image>/02_object.js';$x559->properties['line'] = 223;$x559->properties['column'] = 9;$x559->attributes['file'] = $x559->attributes['line'] = $x559->attributes['column'] = 0; }
throw new JSException($x559, 223, 9, '<image>/02_object.js');
}
$x556 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x557 = $x556($global, $x548, $_TypeError, array('Object.isExtensible(): Cannot return if extensible, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x549 = $x557;
if (is_object($x549) && $x549 !== JS::$undefined) { $x548 = $x549; }
if (isset($x548->class) && $x548->class === 'Error') {$x548->properties['file'] = '<image>/02_object.js';$x548->properties['line'] = 223;$x548->properties['column'] = 3;$x548->attributes['file'] = $x548->attributes['line'] = $x548->attributes['column'] = 0; }
throw new JSException($x548, 223, 3, '<image>/02_object.js');;
};
return$_o->extensible;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x540=&$scope->properties[\'arguments\'];$x540->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x540->properties[$i]=$args[$i];$x540->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x542=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x541=$x542;if(!JS::toBoolean($x541,$global)){$x545=$_o;$x545=($x545===JS::$undefined?\'undefined\':(is_int($x545)||is_float($x545)?\'number\':(is_bool($x545)?\'boolean\':(is_string($x545)?\'string\':(is_object($x545)&&isset($x545->call)?\'function\':\'object\')))));$x544=!(((gettype($x545)===gettype(\'object\')&&$x545===\'object\'))||(((is_float($x545)||is_int($x545))&&(is_float(\'object\')||is_int(\'object\')))&&$x545==\'object\'));$x543=$x544;if(JS::toBoolean($x543,$global)){$x547=$_o;$x547=($x547===JS::$undefined?\'undefined\':(is_int($x547)||is_float($x547)?\'number\':(is_bool($x547)?\'boolean\':(is_string($x547)?\'string\':(is_object($x547)&&isset($x547->call)?\'function\':\'object\')))));$x546=!(((gettype($x547)===gettype(\'function\')&&$x547===\'function\'))||(((is_float($x547)||is_int($x547))&&(is_float(\'function\')||is_int(\'function\')))&&$x547==\'function\'));$x543=$x546;}$x541=$x543;}if(JS::toBoolean($x541,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x550=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',223,13,\'<image>/02_object.js\');$_TypeError=&$x550[0];list(,$WTypeError,$STypeError,$UTypeError)=$x550;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x551=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',223,13,\'<image>/02_object.js\');$_ReferenceError=&$x551[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x551;$x552=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,13);$x553=$x552($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x553->class)&&$x553->class===\'Error\'){$x553->properties[\'file\']=\'<image>/02_object.js\';$x553->properties[\'line\']=223;$x553->properties[\'column\']=13;$x553->attributes[\'file\']=$x553->attributes[\'line\']=$x553->attributes[\'column\']=0;}throw new JSException($x553,223,13,\'<image>/02_object.js\');}$x548=clone JS::$objectTemplate;unset($x554,$W554,$S554,$U554);$x555=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',223,9,\'<image>/02_object.js\');$x554=&$x555[0];list(,$W554,$S554,$U554)=$x555;$x549=$x554;$x548->prototype=$x549;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x558=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x559=$x558($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x559->class)&&$x559->class===\'Error\'){$x559->properties[\'file\']=\'<image>/02_object.js\';$x559->properties[\'line\']=223;$x559->properties[\'column\']=9;$x559->attributes[\'file\']=$x559->attributes[\'line\']=$x559->attributes[\'column\']=0;}throw new JSException($x559,223,9,\'<image>/02_object.js\');}$x556=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x557=$x556($global,$x548,$_TypeError,array(\'Object.isExtensible(): Cannot return if extensible, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x549=$x557;if(is_object($x549)&&$x549!==JS::$undefined){$x548=$x549;}if(isset($x548->class)&&$x548->class===\'Error\'){$x548->properties[\'file\']=\'<image>/02_object.js\';$x548->properties[\'line\']=223;$x548->properties[\'column\']=3;$x548->attributes[\'file\']=$x548->attributes[\'line\']=$x548->attributes[\'column\']=0;}throw new JSException($x548,223,3,\'<image>/02_object.js\');}return$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x570 =& $scope->properties['arguments'];
$x570->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x570->properties[$i] = $args[$i];
$x570->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x572 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x571 = $x572;
if (!JS::toBoolean($x571, $global)) {
$x575 = $_o;
$x575 = ($x575 === JS::$undefined ? 'undefined' : (is_int($x575) || is_float($x575) ? 'number' : (is_bool($x575) ? 'boolean' : (is_string($x575) ? 'string' : (is_object($x575) && isset($x575->call) ? 'function' : 'object')))));
$x574 = !(((gettype($x575) === gettype('object') && $x575 === 'object'))|| (((is_float($x575) || is_int($x575)) && (is_float('object') || is_int('object'))) && $x575 == 'object'));
$x573 = $x574;
if (JS::toBoolean($x573, $global)) {
$x577 = $_o;
$x577 = ($x577 === JS::$undefined ? 'undefined' : (is_int($x577) || is_float($x577) ? 'number' : (is_bool($x577) ? 'boolean' : (is_string($x577) ? 'string' : (is_object($x577) && isset($x577->call) ? 'function' : 'object')))));
$x576 = !(((gettype($x577) === gettype('function') && $x577 === 'function'))|| (((is_float($x577) || is_int($x577)) && (is_float('function') || is_int('function'))) && $x577 == 'function'));
$x573 = $x576; }
$x571 = $x573; }
if (JS::toBoolean($x571, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x580 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 231, 13, '<image>/02_object.js');
$_TypeError =& $x580[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x580;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x581 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 231, 13, '<image>/02_object.js');
$_ReferenceError =& $x581[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x581;
$x582 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 13);
$x583 = $x582($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x583->class) && $x583->class === 'Error') {$x583->properties['file'] = '<image>/02_object.js';$x583->properties['line'] = 231;$x583->properties['column'] = 13;$x583->attributes['file'] = $x583->attributes['line'] = $x583->attributes['column'] = 0; }
throw new JSException($x583, 231, 13, '<image>/02_object.js');
}
$x578 = clone JS::$objectTemplate;
unset($x584, $W584, $S584, $U584);
$x585 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 231, 9, '<image>/02_object.js');
$x584 =& $x585[0]; list(,$W584,$S584,$U584) = $x585;
$x579 = $x584;
$x578->prototype = $x579;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x588 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x589 = $x588($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x589->class) && $x589->class === 'Error') {$x589->properties['file'] = '<image>/02_object.js';$x589->properties['line'] = 231;$x589->properties['column'] = 9;$x589->attributes['file'] = $x589->attributes['line'] = $x589->attributes['column'] = 0; }
throw new JSException($x589, 231, 9, '<image>/02_object.js');
}
$x586 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x587 = $x586($global, $x578, $_TypeError, array('Object.keys(): Cannot return keys, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x579 = $x587;
if (is_object($x579) && $x579 !== JS::$undefined) { $x578 = $x579; }
if (isset($x578->class) && $x578->class === 'Error') {$x578->properties['file'] = '<image>/02_object.js';$x578->properties['line'] = 231;$x578->properties['column'] = 3;$x578->attributes['file'] = $x578->attributes['line'] = $x578->attributes['column'] = 0; }
throw new JSException($x578, 231, 3, '<image>/02_object.js');;
};
$x590 = clone JS::$arrayTemplate;
$x590->properties['length'] = 0;
$x590->attributes['length'] = JS::WRITABLE;
$scope->properties['keys'] = JS::$undefined; $_keys =& $scope->properties['keys'];
$Ukeys = FALSE;
$_keys = $x590;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_o !== JS::$undefined && $_o !== NULL) {
for ($x592 = array(), $x591 = JS::toObject($_o, $global); $x591; $x591 = $x591->prototype) {
foreach ($x591->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x592[$property])) { continue; }
$x592[$property] = TRUE;
$_k = $property;

if ($_keys === JS::$undefined || $_keys === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x594 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x594[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x594;
$x595 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x596 = $x595($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x596->class) && $x596->class === 'Error') {$x596->properties['file'] = '<image>/02_object.js';$x596->properties['line'] = 237;$x596->properties['column'] = 12;$x596->attributes['file'] = $x596->attributes['line'] = $x596->attributes['column'] = 0; }
throw new JSException($x596, 237, 12, '<image>/02_object.js');
}
$x593 = JS::toObject($_keys, $global);
unset($x597, $W597, $S597, $U597);
$x598 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x593, (string) 'push', 237, 12, '<image>/02_object.js');
$x597 =& $x598[0]; list(,$W597,$S597,$U597) = $x598;
if (!(is_object($x597) && isset($x597->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x601 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x601[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x601;
$x602 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x603 = $x602($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x603->class) && $x603->class === 'Error') {$x603->properties['file'] = '<image>/02_object.js';$x603->properties['line'] = 237;$x603->properties['column'] = 12;$x603->attributes['file'] = $x603->attributes['line'] = $x603->attributes['column'] = 0; }
throw new JSException($x603, 237, 12, '<image>/02_object.js');
}
$x599 = $x597->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x600 = $x599($global, $x593, $x597, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_keys;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x570=&$scope->properties[\'arguments\'];$x570->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x570->properties[$i]=$args[$i];$x570->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x572=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x571=$x572;if(!JS::toBoolean($x571,$global)){$x575=$_o;$x575=($x575===JS::$undefined?\'undefined\':(is_int($x575)||is_float($x575)?\'number\':(is_bool($x575)?\'boolean\':(is_string($x575)?\'string\':(is_object($x575)&&isset($x575->call)?\'function\':\'object\')))));$x574=!(((gettype($x575)===gettype(\'object\')&&$x575===\'object\'))||(((is_float($x575)||is_int($x575))&&(is_float(\'object\')||is_int(\'object\')))&&$x575==\'object\'));$x573=$x574;if(JS::toBoolean($x573,$global)){$x577=$_o;$x577=($x577===JS::$undefined?\'undefined\':(is_int($x577)||is_float($x577)?\'number\':(is_bool($x577)?\'boolean\':(is_string($x577)?\'string\':(is_object($x577)&&isset($x577->call)?\'function\':\'object\')))));$x576=!(((gettype($x577)===gettype(\'function\')&&$x577===\'function\'))||(((is_float($x577)||is_int($x577))&&(is_float(\'function\')||is_int(\'function\')))&&$x577==\'function\'));$x573=$x576;}$x571=$x573;}if(JS::toBoolean($x571,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x580=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',231,13,\'<image>/02_object.js\');$_TypeError=&$x580[0];list(,$WTypeError,$STypeError,$UTypeError)=$x580;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x581=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',231,13,\'<image>/02_object.js\');$_ReferenceError=&$x581[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x581;$x582=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,13);$x583=$x582($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x583->class)&&$x583->class===\'Error\'){$x583->properties[\'file\']=\'<image>/02_object.js\';$x583->properties[\'line\']=231;$x583->properties[\'column\']=13;$x583->attributes[\'file\']=$x583->attributes[\'line\']=$x583->attributes[\'column\']=0;}throw new JSException($x583,231,13,\'<image>/02_object.js\');}$x578=clone JS::$objectTemplate;unset($x584,$W584,$S584,$U584);$x585=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',231,9,\'<image>/02_object.js\');$x584=&$x585[0];list(,$W584,$S584,$U584)=$x585;$x579=$x584;$x578->prototype=$x579;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x588=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x589=$x588($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x589->class)&&$x589->class===\'Error\'){$x589->properties[\'file\']=\'<image>/02_object.js\';$x589->properties[\'line\']=231;$x589->properties[\'column\']=9;$x589->attributes[\'file\']=$x589->attributes[\'line\']=$x589->attributes[\'column\']=0;}throw new JSException($x589,231,9,\'<image>/02_object.js\');}$x586=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x587=$x586($global,$x578,$_TypeError,array(\'Object.keys(): Cannot return keys, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x579=$x587;if(is_object($x579)&&$x579!==JS::$undefined){$x578=$x579;}if(isset($x578->class)&&$x578->class===\'Error\'){$x578->properties[\'file\']=\'<image>/02_object.js\';$x578->properties[\'line\']=231;$x578->properties[\'column\']=3;$x578->attributes[\'file\']=$x578->attributes[\'line\']=$x578->attributes[\'column\']=0;}throw new JSException($x578,231,3,\'<image>/02_object.js\');}$x590=clone JS::$arrayTemplate;$x590->properties[\'length\']=0;$x590->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'keys\']=JS::$undefined;$_keys=&$scope->properties[\'keys\'];$Ukeys=FALSE;$_keys=$x590;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_o!==JS::$undefined&&$_o!==NULL){for($x592=array(),$x591=JS::toObject($_o,$global);$x591;$x591=$x591->prototype){foreach($x591->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x592[$property])){continue;}$x592[$property]=TRUE;$_k=$property;if($_keys===JS::$undefined||$_keys===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x594=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x594[0];list(,$WTypeError,$STypeError,$UTypeError)=$x594;$x595=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x596=$x595($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x596->class)&&$x596->class===\'Error\'){$x596->properties[\'file\']=\'<image>/02_object.js\';$x596->properties[\'line\']=237;$x596->properties[\'column\']=12;$x596->attributes[\'file\']=$x596->attributes[\'line\']=$x596->attributes[\'column\']=0;}throw new JSException($x596,237,12,\'<image>/02_object.js\');}$x593=JS::toObject($_keys,$global);unset($x597,$W597,$S597,$U597);$x598=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x593,(string)\'push\',237,12,\'<image>/02_object.js\');$x597=&$x598[0];list(,$W597,$S597,$U597)=$x598;if(!(is_object($x597)&&isset($x597->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x601=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x601[0];list(,$WTypeError,$STypeError,$UTypeError)=$x601;$x602=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x603=$x602($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x603->class)&&$x603->class===\'Error\'){$x603->properties[\'file\']=\'<image>/02_object.js\';$x603->properties[\'line\']=237;$x603->properties[\'column\']=12;$x603->attributes[\'file\']=$x603->attributes[\'line\']=$x603->attributes[\'column\']=0;}throw new JSException($x603,237,12,\'<image>/02_object.js\');}$x599=$x597->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x600=$x599($global,$x593,$x597,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_keys;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x633 =& $scope->properties['arguments'];
$x633->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x633->properties[$i] = $args[$i];
$x633->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x634 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
if (JS::toBoolean($x634, $global)) {

return '[object Undefined]';;
}
else {
$x635 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
if (JS::toBoolean($x635, $global)) {

return '[object Null]';;
}
else {
$scope->properties['o'] = JS::$undefined; $_o =& $scope->properties['o'];
$Uo = FALSE;
$_o = JS::toObject($leThis, $global);
if (JS::toBoolean(!isset($_o->class), $global)) {

return '[object]';;
};
return "[object " .$_o->class . "]";;
};
}
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x633=&$scope->properties[\'arguments\'];$x633->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x633->properties[$i]=$args[$i];$x633->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x634=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));if(JS::toBoolean($x634,$global)){return\'[object Undefined]\';}else{$x635=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));if(JS::toBoolean($x635,$global)){return\'[object Null]\';}else{$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=JS::toObject($leThis,$global);if(JS::toBoolean(!isset($_o->class),$global)){return\'[object]\';}return"[object ".$_o->class."]";}}return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x648 =& $scope->properties['arguments'];
$x648->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x648->properties[$i] = $args[$i];
$x648->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x650 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x650[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x650;
$x651 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x652 = $x651($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x652->class) && $x652->class === 'Error') {$x652->properties['file'] = '<image>/02_object.js';$x652->properties['line'] = 268;$x652->properties['column'] = 22;$x652->attributes['file'] = $x652->attributes['line'] = $x652->attributes['column'] = 0; }
throw new JSException($x652, 268, 22, '<image>/02_object.js');
}
$x649 = JS::toObject($leThis, $global);
unset($x653, $W653, $S653, $U653);
$x654 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x649, (string) 'toString', 268, 22, '<image>/02_object.js');
$x653 =& $x654[0]; list(,$W653,$S653,$U653) = $x654;
if (!(is_object($x653) && isset($x653->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x657 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x657[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x657;
$x658 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x659 = $x658($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x659->class) && $x659->class === 'Error') {$x659->properties['file'] = '<image>/02_object.js';$x659->properties['line'] = 268;$x659->properties['column'] = 22;$x659->attributes['file'] = $x659->attributes['line'] = $x659->attributes['column'] = 0; }
throw new JSException($x659, 268, 22, '<image>/02_object.js');
}
$x655 = $x653->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x656 = $x655($global, $x649, $x653, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x656;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x648=&$scope->properties[\'arguments\'];$x648->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x648->properties[$i]=$args[$i];$x648->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x650=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x650[0];list(,$WTypeError,$STypeError,$UTypeError)=$x650;$x651=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x652=$x651($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x652->class)&&$x652->class===\'Error\'){$x652->properties[\'file\']=\'<image>/02_object.js\';$x652->properties[\'line\']=268;$x652->properties[\'column\']=22;$x652->attributes[\'file\']=$x652->attributes[\'line\']=$x652->attributes[\'column\']=0;}throw new JSException($x652,268,22,\'<image>/02_object.js\');}$x649=JS::toObject($leThis,$global);unset($x653,$W653,$S653,$U653);$x654=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x649,(string)\'toString\',268,22,\'<image>/02_object.js\');$x653=&$x654[0];list(,$W653,$S653,$U653)=$x654;if(!(is_object($x653)&&isset($x653->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x657=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x657[0];list(,$WTypeError,$STypeError,$UTypeError)=$x657;$x658=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x659=$x658($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x659->class)&&$x659->class===\'Error\'){$x659->properties[\'file\']=\'<image>/02_object.js\';$x659->properties[\'line\']=268;$x659->properties[\'column\']=22;$x659->attributes[\'file\']=$x659->attributes[\'line\']=$x659->attributes[\'column\']=0;}throw new JSException($x659,268,22,\'<image>/02_object.js\');}$x655=$x653->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x656=$x655($global,$x649,$x653,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x656;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x672 =& $scope->properties['arguments'];
$x672->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x672->properties[$i] = $args[$i];
$x672->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x674 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
$x673 = $x674;
if (!JS::toBoolean($x673, $global)) {
$x675 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
$x673 = $x675; }
if (JS::toBoolean($x673, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x678 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 273, 13, '<image>/02_object.js');
$_TypeError =& $x678[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x678;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x679 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 273, 13, '<image>/02_object.js');
$_ReferenceError =& $x679[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x679;
$x680 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 13);
$x681 = $x680($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x681->class) && $x681->class === 'Error') {$x681->properties['file'] = '<image>/02_object.js';$x681->properties['line'] = 273;$x681->properties['column'] = 13;$x681->attributes['file'] = $x681->attributes['line'] = $x681->attributes['column'] = 0; }
throw new JSException($x681, 273, 13, '<image>/02_object.js');
}
$x676 = clone JS::$objectTemplate;
unset($x682, $W682, $S682, $U682);
$x683 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 273, 9, '<image>/02_object.js');
$x682 =& $x683[0]; list(,$W682,$S682,$U682) = $x683;
$x677 = $x682;
$x676->prototype = $x677;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x686 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x687 = $x686($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x687->class) && $x687->class === 'Error') {$x687->properties['file'] = '<image>/02_object.js';$x687->properties['line'] = 273;$x687->properties['column'] = 9;$x687->attributes['file'] = $x687->attributes['line'] = $x687->attributes['column'] = 0; }
throw new JSException($x687, 273, 9, '<image>/02_object.js');
}
$x684 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x685 = $x684($global, $x676, $_TypeError, array('Object.prototype.valueOf(): this is undefined or null'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x677 = $x685;
if (is_object($x677) && $x677 !== JS::$undefined) { $x676 = $x677; }
if (isset($x676->class) && $x676->class === 'Error') {$x676->properties['file'] = '<image>/02_object.js';$x676->properties['line'] = 273;$x676->properties['column'] = 3;$x676->attributes['file'] = $x676->attributes['line'] = $x676->attributes['column'] = 0; }
throw new JSException($x676, 273, 3, '<image>/02_object.js');;
};
return JS::toObject($leThis, $global);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x672=&$scope->properties[\'arguments\'];$x672->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x672->properties[$i]=$args[$i];$x672->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x674=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));$x673=$x674;if(!JS::toBoolean($x673,$global)){$x675=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));$x673=$x675;}if(JS::toBoolean($x673,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x678=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',273,13,\'<image>/02_object.js\');$_TypeError=&$x678[0];list(,$WTypeError,$STypeError,$UTypeError)=$x678;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x679=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',273,13,\'<image>/02_object.js\');$_ReferenceError=&$x679[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x679;$x680=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,13);$x681=$x680($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x681->class)&&$x681->class===\'Error\'){$x681->properties[\'file\']=\'<image>/02_object.js\';$x681->properties[\'line\']=273;$x681->properties[\'column\']=13;$x681->attributes[\'file\']=$x681->attributes[\'line\']=$x681->attributes[\'column\']=0;}throw new JSException($x681,273,13,\'<image>/02_object.js\');}$x676=clone JS::$objectTemplate;unset($x682,$W682,$S682,$U682);$x683=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',273,9,\'<image>/02_object.js\');$x682=&$x683[0];list(,$W682,$S682,$U682)=$x683;$x677=$x682;$x676->prototype=$x677;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x686=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x687=$x686($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x687->class)&&$x687->class===\'Error\'){$x687->properties[\'file\']=\'<image>/02_object.js\';$x687->properties[\'line\']=273;$x687->properties[\'column\']=9;$x687->attributes[\'file\']=$x687->attributes[\'line\']=$x687->attributes[\'column\']=0;}throw new JSException($x687,273,9,\'<image>/02_object.js\');}$x684=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x685=$x684($global,$x676,$_TypeError,array(\'Object.prototype.valueOf(): this is undefined or null\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x677=$x685;if(is_object($x677)&&$x677!==JS::$undefined){$x676=$x677;}if(isset($x676->class)&&$x676->class===\'Error\'){$x676->properties[\'file\']=\'<image>/02_object.js\';$x676->properties[\'line\']=273;$x676->properties[\'column\']=3;$x676->attributes[\'file\']=$x676->attributes[\'line\']=$x676->attributes[\'column\']=0;}throw new JSException($x676,273,3,\'<image>/02_object.js\');}return JS::toObject($leThis,$global);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x700 =& $scope->properties['arguments'];
$x700->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x700->properties[$i] = $args[$i];
$x700->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return array_key_exists($_p, $leThis->properties) || isset($leThis->attributes[$_p]);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x700=&$scope->properties[\'arguments\'];$x700->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x700->properties[$i]=$args[$i];$x700->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return array_key_exists($_p,$leThis->properties)||isset($leThis->attributes[$_p]);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x713 =& $scope->properties['arguments'];
$x713->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x713->properties[$i] = $args[$i];
$x713->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x715 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x714 = $x715;
if (!JS::toBoolean($x714, $global)) {
$x718 = $_v;
$x718 = ($x718 === JS::$undefined ? 'undefined' : (is_int($x718) || is_float($x718) ? 'number' : (is_bool($x718) ? 'boolean' : (is_string($x718) ? 'string' : (is_object($x718) && isset($x718->call) ? 'function' : 'object')))));
$x717 = !(((gettype($x718) === gettype('object') && $x718 === 'object'))|| (((is_float($x718) || is_int($x718)) && (is_float('object') || is_int('object'))) && $x718 == 'object'));
$x716 = $x717;
if (JS::toBoolean($x716, $global)) {
$x720 = $_v;
$x720 = ($x720 === JS::$undefined ? 'undefined' : (is_int($x720) || is_float($x720) ? 'number' : (is_bool($x720) ? 'boolean' : (is_string($x720) ? 'string' : (is_object($x720) && isset($x720->call) ? 'function' : 'object')))));
$x719 = !(((gettype($x720) === gettype('function') && $x720 === 'function'))|| (((is_float($x720) || is_int($x720)) && (is_float('function') || is_int('function'))) && $x720 == 'function'));
$x716 = $x719; }
$x714 = $x716; }
if (JS::toBoolean($x714, $global)) {

return false;;
};
for ($_v=$_v->prototype;$_v;$_v=$_v->prototype) {
			if ($_v=== $leThis) {
				return TRUE;
			}
		};
return false;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x713=&$scope->properties[\'arguments\'];$x713->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x713->properties[$i]=$args[$i];$x713->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$global->scope[++$global->scope_sp]=$scope;$x715=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x714=$x715;if(!JS::toBoolean($x714,$global)){$x718=$_v;$x718=($x718===JS::$undefined?\'undefined\':(is_int($x718)||is_float($x718)?\'number\':(is_bool($x718)?\'boolean\':(is_string($x718)?\'string\':(is_object($x718)&&isset($x718->call)?\'function\':\'object\')))));$x717=!(((gettype($x718)===gettype(\'object\')&&$x718===\'object\'))||(((is_float($x718)||is_int($x718))&&(is_float(\'object\')||is_int(\'object\')))&&$x718==\'object\'));$x716=$x717;if(JS::toBoolean($x716,$global)){$x720=$_v;$x720=($x720===JS::$undefined?\'undefined\':(is_int($x720)||is_float($x720)?\'number\':(is_bool($x720)?\'boolean\':(is_string($x720)?\'string\':(is_object($x720)&&isset($x720->call)?\'function\':\'object\')))));$x719=!(((gettype($x720)===gettype(\'function\')&&$x720===\'function\'))||(((is_float($x720)||is_int($x720))&&(is_float(\'function\')||is_int(\'function\')))&&$x720==\'function\'));$x716=$x719;}$x714=$x716;}if(JS::toBoolean($x714,$global)){return false;}for($_v=$_v->prototype;$_v;$_v=$_v->prototype){if($_v===$leThis){return TRUE;}}return false;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x733 =& $scope->properties['arguments'];
$x733->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x733->properties[$i] = $args[$i];
$x733->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return JS::toBoolean(isset($leThis->attributes[$_p]) && ($leThis->attributes[$_p] & JS::ENUMERABLE), $global);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x733=&$scope->properties[\'arguments\'];$x733->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x733->properties[$i]=$args[$i];$x733->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return JS::toBoolean(isset($leThis->attributes[$_p])&&($leThis->attributes[$_p]&JS::ENUMERABLE),$global);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/02_object.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/02_object.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Object;
$x6 = clone JS::$functionTemplate; $x6->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_1'; $x6->parameters = array (
  0 => 'value',
); $x6->name = 'Object'; $x6->scope = $scope; $x6->properties['prototype'] = clone JS::$objectTemplate; $x6->attributes['prototype'] = JS::WRITABLE; $x6->properties['prototype']->properties['constructor'] = $x6; $x6->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x6->properties['length'] = 1; $x6->attributes['length'] = 0;
$scope->properties['Object'] = JS::$undefined; $_Object =& $scope->properties['Object'];
$UObject = FALSE;
$_Object = $x6;
$x34 = clone JS::$functionTemplate; $x34->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_2'; $x34->parameters = array (
  0 => 'o',
); $x34->scope = $scope; $x34->properties['prototype'] = clone JS::$objectTemplate; $x34->attributes['prototype'] = JS::WRITABLE; $x34->properties['prototype']->properties['constructor'] = $x34; $x34->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x34->properties['length'] = 1; $x34->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 9, 23, '<image>/02_object.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 9, 23);
$x37 = $x36($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error') {$x37->properties['file'] = '<image>/02_object.js';$x37->properties['line'] = 9;$x37->properties['column'] = 23;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 9, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x38, $W38, $S38, $U38);
$x42 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'getPrototypeOf', 9, 23, '<image>/02_object.js');
$x38 =& $x42[0]; list(,$W38,$S38,$U38) = $x42;
if ($U38 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getPrototypeOf'] = $x38; $x38 =& $_Object->properties['getPrototypeOf']; $_Object->attributes['getPrototypeOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U38 = FALSE; $W38 = TRUE; }
if (isset($S38)) {
$x44 = $S38->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 9, 23);
$x45 = $x44($global, $_Object, $S38, array($x34), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x43 = $x45;
} else {
if (!$U38) {$x43 = $x34;if ($W38) { $x38 = $x34; }  }
else { $x43 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getPrototypeOf') && 'getPrototypeOf' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getPrototypeOf' + 1; };
$x121 = clone JS::$functionTemplate; $x121->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_6'; $x121->parameters = array (
  0 => 'o',
  1 => 'p',
); $x121->scope = $scope; $x121->properties['prototype'] = clone JS::$objectTemplate; $x121->attributes['prototype'] = JS::WRITABLE; $x121->properties['prototype']->properties['constructor'] = $x121; $x121->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x121->properties['length'] = 2; $x121->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x122 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 17, 33, '<image>/02_object.js');
$_TypeError =& $x122[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x122;
$x123 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x124 = $x123($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x124->class) && $x124->class === 'Error') {$x124->properties['file'] = '<image>/02_object.js';$x124->properties['line'] = 17;$x124->properties['column'] = 33;$x124->attributes['file'] = $x124->attributes['line'] = $x124->attributes['column'] = 0; }
throw new JSException($x124, 17, 33, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x125, $W125, $S125, $U125);
$x126 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'getOwnPropertyDescriptor', 17, 33, '<image>/02_object.js');
$x125 =& $x126[0]; list(,$W125,$S125,$U125) = $x126;
if ($U125 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getOwnPropertyDescriptor'] = $x125; $x125 =& $_Object->properties['getOwnPropertyDescriptor']; $_Object->attributes['getOwnPropertyDescriptor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U125 = FALSE; $W125 = TRUE; }
if (isset($S125)) {
$x128 = $S125->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x129 = $x128($global, $_Object, $S125, array($x121), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x127 = $x129;
} else {
if (!$U125) {$x127 = $x121;if ($W125) { $x125 = $x121; }  }
else { $x127 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyDescriptor') && 'getOwnPropertyDescriptor' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyDescriptor' + 1; };
$x163 = clone JS::$functionTemplate; $x163->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_7'; $x163->parameters = array (
  0 => 'o',
); $x163->scope = $scope; $x163->properties['prototype'] = clone JS::$objectTemplate; $x163->attributes['prototype'] = JS::WRITABLE; $x163->properties['prototype']->properties['constructor'] = $x163; $x163->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x163->properties['length'] = 1; $x163->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x164 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 48, 28, '<image>/02_object.js');
$_TypeError =& $x164[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x164;
$x165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x166 = $x165($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x166->class) && $x166->class === 'Error') {$x166->properties['file'] = '<image>/02_object.js';$x166->properties['line'] = 48;$x166->properties['column'] = 28;$x166->attributes['file'] = $x166->attributes['line'] = $x166->attributes['column'] = 0; }
throw new JSException($x166, 48, 28, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x167, $W167, $S167, $U167);
$x168 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'getOwnPropertyNames', 48, 28, '<image>/02_object.js');
$x167 =& $x168[0]; list(,$W167,$S167,$U167) = $x168;
if ($U167 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getOwnPropertyNames'] = $x167; $x167 =& $_Object->properties['getOwnPropertyNames']; $_Object->attributes['getOwnPropertyNames'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U167 = FALSE; $W167 = TRUE; }
if (isset($S167)) {
$x170 = $S167->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x171 = $x170($global, $_Object, $S167, array($x163), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x169 = $x171;
} else {
if (!$U167) {$x169 = $x163;if ($W167) { $x167 = $x163; }  }
else { $x169 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyNames') && 'getOwnPropertyNames' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyNames' + 1; };
$x207 = clone JS::$functionTemplate; $x207->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_8'; $x207->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x207->scope = $scope; $x207->properties['prototype'] = clone JS::$objectTemplate; $x207->attributes['prototype'] = JS::WRITABLE; $x207->properties['prototype']->properties['constructor'] = $x207; $x207->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x207->properties['length'] = 2; $x207->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x208 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 62, 15, '<image>/02_object.js');
$_TypeError =& $x208[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x208;
$x209 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x210 = $x209($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x210->class) && $x210->class === 'Error') {$x210->properties['file'] = '<image>/02_object.js';$x210->properties['line'] = 62;$x210->properties['column'] = 15;$x210->attributes['file'] = $x210->attributes['line'] = $x210->attributes['column'] = 0; }
throw new JSException($x210, 62, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x211, $W211, $S211, $U211);
$x212 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'create', 62, 15, '<image>/02_object.js');
$x211 =& $x212[0]; list(,$W211,$S211,$U211) = $x212;
if ($U211 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['create'] = $x211; $x211 =& $_Object->properties['create']; $_Object->attributes['create'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U211 = FALSE; $W211 = TRUE; }
if (isset($S211)) {
$x214 = $S211->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x215 = $x214($global, $_Object, $S211, array($x207), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x213 = $x215;
} else {
if (!$U211) {$x213 = $x207;if ($W211) { $x211 = $x207; }  }
else { $x213 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('create') && 'create' >= $_Object->properties['length']) { $_Object->properties['length'] = 'create' + 1; };
$x317 = clone JS::$functionTemplate; $x317->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_9'; $x317->parameters = array (
  0 => 'o',
  1 => 'p',
  2 => 'attributes',
); $x317->scope = $scope; $x317->properties['prototype'] = clone JS::$objectTemplate; $x317->attributes['prototype'] = JS::WRITABLE; $x317->properties['prototype']->properties['constructor'] = $x317; $x317->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x317->properties['length'] = 3; $x317->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x318 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 78, 23, '<image>/02_object.js');
$_TypeError =& $x318[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x318;
$x319 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x320 = $x319($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x320->class) && $x320->class === 'Error') {$x320->properties['file'] = '<image>/02_object.js';$x320->properties['line'] = 78;$x320->properties['column'] = 23;$x320->attributes['file'] = $x320->attributes['line'] = $x320->attributes['column'] = 0; }
throw new JSException($x320, 78, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x321, $W321, $S321, $U321);
$x322 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'defineProperty', 78, 23, '<image>/02_object.js');
$x321 =& $x322[0]; list(,$W321,$S321,$U321) = $x322;
if ($U321 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['defineProperty'] = $x321; $x321 =& $_Object->properties['defineProperty']; $_Object->attributes['defineProperty'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U321 = FALSE; $W321 = TRUE; }
if (isset($S321)) {
$x324 = $S321->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x325 = $x324($global, $_Object, $S321, array($x317), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x323 = $x325;
} else {
if (!$U321) {$x323 = $x317;if ($W321) { $x321 = $x317; }  }
else { $x323 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperty') && 'defineProperty' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperty' + 1; };
$x380 = clone JS::$functionTemplate; $x380->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_10'; $x380->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x380->scope = $scope; $x380->properties['prototype'] = clone JS::$objectTemplate; $x380->attributes['prototype'] = JS::WRITABLE; $x380->properties['prototype']->properties['constructor'] = $x380; $x380->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x380->properties['length'] = 2; $x380->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x381 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 130, 25, '<image>/02_object.js');
$_TypeError =& $x381[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x381;
$x382 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x383 = $x382($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x383->class) && $x383->class === 'Error') {$x383->properties['file'] = '<image>/02_object.js';$x383->properties['line'] = 130;$x383->properties['column'] = 25;$x383->attributes['file'] = $x383->attributes['line'] = $x383->attributes['column'] = 0; }
throw new JSException($x383, 130, 25, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x384, $W384, $S384, $U384);
$x385 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'defineProperties', 130, 25, '<image>/02_object.js');
$x384 =& $x385[0]; list(,$W384,$S384,$U384) = $x385;
if ($U384 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['defineProperties'] = $x384; $x384 =& $_Object->properties['defineProperties']; $_Object->attributes['defineProperties'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U384 = FALSE; $W384 = TRUE; }
if (isset($S384)) {
$x387 = $S384->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x388 = $x387($global, $_Object, $S384, array($x380), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x386 = $x388;
} else {
if (!$U384) {$x386 = $x380;if ($W384) { $x384 = $x380; }  }
else { $x386 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperties') && 'defineProperties' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperties' + 1; };
$x410 = clone JS::$functionTemplate; $x410->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_11'; $x410->parameters = array (
  0 => 'o',
); $x410->scope = $scope; $x410->properties['prototype'] = clone JS::$objectTemplate; $x410->attributes['prototype'] = JS::WRITABLE; $x410->properties['prototype']->properties['constructor'] = $x410; $x410->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x410->properties['length'] = 1; $x410->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x411 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 146, 13, '<image>/02_object.js');
$_TypeError =& $x411[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x411;
$x412 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x413 = $x412($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x413->class) && $x413->class === 'Error') {$x413->properties['file'] = '<image>/02_object.js';$x413->properties['line'] = 146;$x413->properties['column'] = 13;$x413->attributes['file'] = $x413->attributes['line'] = $x413->attributes['column'] = 0; }
throw new JSException($x413, 146, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x414, $W414, $S414, $U414);
$x415 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'seal', 146, 13, '<image>/02_object.js');
$x414 =& $x415[0]; list(,$W414,$S414,$U414) = $x415;
if ($U414 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['seal'] = $x414; $x414 =& $_Object->properties['seal']; $_Object->attributes['seal'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U414 = FALSE; $W414 = TRUE; }
if (isset($S414)) {
$x417 = $S414->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x418 = $x417($global, $_Object, $S414, array($x410), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x416 = $x418;
} else {
if (!$U414) {$x416 = $x410;if ($W414) { $x414 = $x410; }  }
else { $x416 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('seal') && 'seal' >= $_Object->properties['length']) { $_Object->properties['length'] = 'seal' + 1; };
$x440 = clone JS::$functionTemplate; $x440->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_12'; $x440->parameters = array (
  0 => 'o',
); $x440->scope = $scope; $x440->properties['prototype'] = clone JS::$objectTemplate; $x440->attributes['prototype'] = JS::WRITABLE; $x440->properties['prototype']->properties['constructor'] = $x440; $x440->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x440->properties['length'] = 1; $x440->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x441 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 162, 15, '<image>/02_object.js');
$_TypeError =& $x441[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x441;
$x442 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x443 = $x442($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x443->class) && $x443->class === 'Error') {$x443->properties['file'] = '<image>/02_object.js';$x443->properties['line'] = 162;$x443->properties['column'] = 15;$x443->attributes['file'] = $x443->attributes['line'] = $x443->attributes['column'] = 0; }
throw new JSException($x443, 162, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x444, $W444, $S444, $U444);
$x445 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'freeze', 162, 15, '<image>/02_object.js');
$x444 =& $x445[0]; list(,$W444,$S444,$U444) = $x445;
if ($U444 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['freeze'] = $x444; $x444 =& $_Object->properties['freeze']; $_Object->attributes['freeze'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U444 = FALSE; $W444 = TRUE; }
if (isset($S444)) {
$x447 = $S444->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x448 = $x447($global, $_Object, $S444, array($x440), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x446 = $x448;
} else {
if (!$U444) {$x446 = $x440;if ($W444) { $x444 = $x440; }  }
else { $x446 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('freeze') && 'freeze' >= $_Object->properties['length']) { $_Object->properties['length'] = 'freeze' + 1; };
$x470 = clone JS::$functionTemplate; $x470->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_13'; $x470->parameters = array (
  0 => 'o',
); $x470->scope = $scope; $x470->properties['prototype'] = clone JS::$objectTemplate; $x470->attributes['prototype'] = JS::WRITABLE; $x470->properties['prototype']->properties['constructor'] = $x470; $x470->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x470->properties['length'] = 1; $x470->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x471 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 179, 26, '<image>/02_object.js');
$_TypeError =& $x471[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x471;
$x472 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x473 = $x472($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x473->class) && $x473->class === 'Error') {$x473->properties['file'] = '<image>/02_object.js';$x473->properties['line'] = 179;$x473->properties['column'] = 26;$x473->attributes['file'] = $x473->attributes['line'] = $x473->attributes['column'] = 0; }
throw new JSException($x473, 179, 26, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x474, $W474, $S474, $U474);
$x475 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'preventExtensions', 179, 26, '<image>/02_object.js');
$x474 =& $x475[0]; list(,$W474,$S474,$U474) = $x475;
if ($U474 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['preventExtensions'] = $x474; $x474 =& $_Object->properties['preventExtensions']; $_Object->attributes['preventExtensions'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U474 = FALSE; $W474 = TRUE; }
if (isset($S474)) {
$x477 = $S474->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x478 = $x477($global, $_Object, $S474, array($x470), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x476 = $x478;
} else {
if (!$U474) {$x476 = $x470;if ($W474) { $x474 = $x470; }  }
else { $x476 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('preventExtensions') && 'preventExtensions' >= $_Object->properties['length']) { $_Object->properties['length'] = 'preventExtensions' + 1; };
$x500 = clone JS::$functionTemplate; $x500->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_14'; $x500->parameters = array (
  0 => 'o',
); $x500->scope = $scope; $x500->properties['prototype'] = clone JS::$objectTemplate; $x500->attributes['prototype'] = JS::WRITABLE; $x500->properties['prototype']->properties['constructor'] = $x500; $x500->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x500->properties['length'] = 1; $x500->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x501 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 189, 17, '<image>/02_object.js');
$_TypeError =& $x501[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x501;
$x502 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x503 = $x502($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x503->class) && $x503->class === 'Error') {$x503->properties['file'] = '<image>/02_object.js';$x503->properties['line'] = 189;$x503->properties['column'] = 17;$x503->attributes['file'] = $x503->attributes['line'] = $x503->attributes['column'] = 0; }
throw new JSException($x503, 189, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x504, $W504, $S504, $U504);
$x505 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isSealed', 189, 17, '<image>/02_object.js');
$x504 =& $x505[0]; list(,$W504,$S504,$U504) = $x505;
if ($U504 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isSealed'] = $x504; $x504 =& $_Object->properties['isSealed']; $_Object->attributes['isSealed'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U504 = FALSE; $W504 = TRUE; }
if (isset($S504)) {
$x507 = $S504->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x508 = $x507($global, $_Object, $S504, array($x500), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x506 = $x508;
} else {
if (!$U504) {$x506 = $x500;if ($W504) { $x504 = $x500; }  }
else { $x506 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isSealed') && 'isSealed' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isSealed' + 1; };
$x530 = clone JS::$functionTemplate; $x530->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_15'; $x530->parameters = array (
  0 => 'o',
); $x530->scope = $scope; $x530->properties['prototype'] = clone JS::$objectTemplate; $x530->attributes['prototype'] = JS::WRITABLE; $x530->properties['prototype']->properties['constructor'] = $x530; $x530->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x530->properties['length'] = 1; $x530->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x531 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 205, 17, '<image>/02_object.js');
$_TypeError =& $x531[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x531;
$x532 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x533 = $x532($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x533->class) && $x533->class === 'Error') {$x533->properties['file'] = '<image>/02_object.js';$x533->properties['line'] = 205;$x533->properties['column'] = 17;$x533->attributes['file'] = $x533->attributes['line'] = $x533->attributes['column'] = 0; }
throw new JSException($x533, 205, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x534, $W534, $S534, $U534);
$x535 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isFrozen', 205, 17, '<image>/02_object.js');
$x534 =& $x535[0]; list(,$W534,$S534,$U534) = $x535;
if ($U534 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isFrozen'] = $x534; $x534 =& $_Object->properties['isFrozen']; $_Object->attributes['isFrozen'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U534 = FALSE; $W534 = TRUE; }
if (isset($S534)) {
$x537 = $S534->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x538 = $x537($global, $_Object, $S534, array($x530), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x536 = $x538;
} else {
if (!$U534) {$x536 = $x530;if ($W534) { $x534 = $x530; }  }
else { $x536 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isFrozen') && 'isFrozen' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isFrozen' + 1; };
$x560 = clone JS::$functionTemplate; $x560->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_16'; $x560->parameters = array (
  0 => 'o',
); $x560->scope = $scope; $x560->properties['prototype'] = clone JS::$objectTemplate; $x560->attributes['prototype'] = JS::WRITABLE; $x560->properties['prototype']->properties['constructor'] = $x560; $x560->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x560->properties['length'] = 1; $x560->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x561 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 221, 21, '<image>/02_object.js');
$_TypeError =& $x561[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x561;
$x562 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x563 = $x562($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x563->class) && $x563->class === 'Error') {$x563->properties['file'] = '<image>/02_object.js';$x563->properties['line'] = 221;$x563->properties['column'] = 21;$x563->attributes['file'] = $x563->attributes['line'] = $x563->attributes['column'] = 0; }
throw new JSException($x563, 221, 21, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x564, $W564, $S564, $U564);
$x565 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isExtensible', 221, 21, '<image>/02_object.js');
$x564 =& $x565[0]; list(,$W564,$S564,$U564) = $x565;
if ($U564 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isExtensible'] = $x564; $x564 =& $_Object->properties['isExtensible']; $_Object->attributes['isExtensible'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U564 = FALSE; $W564 = TRUE; }
if (isset($S564)) {
$x567 = $S564->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x568 = $x567($global, $_Object, $S564, array($x560), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x566 = $x568;
} else {
if (!$U564) {$x566 = $x560;if ($W564) { $x564 = $x560; }  }
else { $x566 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isExtensible') && 'isExtensible' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isExtensible' + 1; };
$x604 = clone JS::$functionTemplate; $x604->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_17'; $x604->parameters = array (
  0 => 'o',
); $x604->scope = $scope; $x604->properties['prototype'] = clone JS::$objectTemplate; $x604->attributes['prototype'] = JS::WRITABLE; $x604->properties['prototype']->properties['constructor'] = $x604; $x604->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x604->properties['length'] = 1; $x604->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x605 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 229, 13, '<image>/02_object.js');
$_TypeError =& $x605[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x605;
$x606 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x607 = $x606($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x607->class) && $x607->class === 'Error') {$x607->properties['file'] = '<image>/02_object.js';$x607->properties['line'] = 229;$x607->properties['column'] = 13;$x607->attributes['file'] = $x607->attributes['line'] = $x607->attributes['column'] = 0; }
throw new JSException($x607, 229, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x608, $W608, $S608, $U608);
$x609 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'keys', 229, 13, '<image>/02_object.js');
$x608 =& $x609[0]; list(,$W608,$S608,$U608) = $x609;
if ($U608 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['keys'] = $x608; $x608 =& $_Object->properties['keys']; $_Object->attributes['keys'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U608 = FALSE; $W608 = TRUE; }
if (isset($S608)) {
$x611 = $S608->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x612 = $x611($global, $_Object, $S608, array($x604), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x610 = $x612;
} else {
if (!$U608) {$x610 = $x604;if ($W608) { $x608 = $x604; }  }
else { $x610 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('keys') && 'keys' >= $_Object->properties['length']) { $_Object->properties['length'] = 'keys' + 1; };
$x613 = clone JS::$objectTemplate;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x614 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 243, 18, '<image>/02_object.js');
$_TypeError =& $x614[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x614;
$x615 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x616 = $x615($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x616->class) && $x616->class === 'Error') {$x616->properties['file'] = '<image>/02_object.js';$x616->properties['line'] = 243;$x616->properties['column'] = 18;$x616->attributes['file'] = $x616->attributes['line'] = $x616->attributes['column'] = 0; }
throw new JSException($x616, 243, 18, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x617, $W617, $S617, $U617);
$x618 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'prototype', 243, 18, '<image>/02_object.js');
$x617 =& $x618[0]; list(,$W617,$S617,$U617) = $x618;
if ($U617 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['prototype'] = $x617; $x617 =& $_Object->properties['prototype']; $_Object->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U617 = FALSE; $W617 = TRUE; }
if (isset($S617)) {
$x620 = $S617->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x621 = $x620($global, $_Object, $S617, array($x613), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x619 = $x621;
} else {
if (!$U617) {$x619 = $x613;if ($W617) { $x617 = $x613; }  }
else { $x619 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Object->properties['length']) { $_Object->properties['length'] = 'prototype' + 1; };
$_Object->properties['prototype']->prototype = NULL;
$_Object->properties['prototype']->class = 'Object';
$_Object->properties['prototype']->extensible = TRUE;
unset($x622, $W622, $S622, $U622);
$x623 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 247, 7, '<image>/02_object.js');
$x622 =& $x623[0]; list(,$W622,$S622,$U622) = $x623;
if ($x622 === JS::$undefined || $x622 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x624 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 247, 30, '<image>/02_object.js');
$_TypeError =& $x624[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x624;
$x625 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x626 = $x625($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x626->class) && $x626->class === 'Error') {$x626->properties['file'] = '<image>/02_object.js';$x626->properties['line'] = 247;$x626->properties['column'] = 30;$x626->attributes['file'] = $x626->attributes['line'] = $x626->attributes['column'] = 0; }
throw new JSException($x626, 247, 30, '<image>/02_object.js');
}
$x622 = JS::toObject($x622, $global);
unset($x627, $W627, $S627, $U627);
$x628 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x622, (string) 'constructor', 247, 30, '<image>/02_object.js');
$x627 =& $x628[0]; list(,$W627,$S627,$U627) = $x628;
if ($U627 && (!isset($x622->extensible) || $x622->extensible)) {$x622->properties['constructor'] = $x627; $x627 =& $x622->properties['constructor']; $x622->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U627 = FALSE; $W627 = TRUE; }
if (isset($S627)) {
$x630 = $S627->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x631 = $x630($global, $x622, $S627, array($_Object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x629 = $x631;
} else {
if (!$U627) {$x629 = $_Object;if ($W627) { $x627 = $_Object; }  }
else { $x629 = JS::$undefined; }
}
if (isset($x622->class) && $x622->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x622->properties['length']) { $x622->properties['length'] = 'constructor' + 1; };
$x636 = clone JS::$functionTemplate; $x636->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_18'; $x636->parameters = array (
); $x636->scope = $scope; $x636->properties['prototype'] = clone JS::$objectTemplate; $x636->attributes['prototype'] = JS::WRITABLE; $x636->properties['prototype']->properties['constructor'] = $x636; $x636->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x636->properties['length'] = 0; $x636->attributes['length'] = 0;
unset($x637, $W637, $S637, $U637);
$x638 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 249, 7, '<image>/02_object.js');
$x637 =& $x638[0]; list(,$W637,$S637,$U637) = $x638;
if ($x637 === JS::$undefined || $x637 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x639 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 249, 27, '<image>/02_object.js');
$_TypeError =& $x639[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x639;
$x640 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x641 = $x640($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x641->class) && $x641->class === 'Error') {$x641->properties['file'] = '<image>/02_object.js';$x641->properties['line'] = 249;$x641->properties['column'] = 27;$x641->attributes['file'] = $x641->attributes['line'] = $x641->attributes['column'] = 0; }
throw new JSException($x641, 249, 27, '<image>/02_object.js');
}
$x637 = JS::toObject($x637, $global);
unset($x642, $W642, $S642, $U642);
$x643 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x637, (string) 'toString', 249, 27, '<image>/02_object.js');
$x642 =& $x643[0]; list(,$W642,$S642,$U642) = $x643;
if ($U642 && (!isset($x637->extensible) || $x637->extensible)) {$x637->properties['toString'] = $x642; $x642 =& $x637->properties['toString']; $x637->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U642 = FALSE; $W642 = TRUE; }
if (isset($S642)) {
$x645 = $S642->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x646 = $x645($global, $x637, $S642, array($x636), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x644 = $x646;
} else {
if (!$U642) {$x644 = $x636;if ($W642) { $x642 = $x636; }  }
else { $x644 = JS::$undefined; }
}
if (isset($x637->class) && $x637->class === 'Array' &&  is_int('toString') && 'toString' >= $x637->properties['length']) { $x637->properties['length'] = 'toString' + 1; };
$x660 = clone JS::$functionTemplate; $x660->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_19'; $x660->parameters = array (
); $x660->scope = $scope; $x660->properties['prototype'] = clone JS::$objectTemplate; $x660->attributes['prototype'] = JS::WRITABLE; $x660->properties['prototype']->properties['constructor'] = $x660; $x660->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x660->properties['length'] = 0; $x660->attributes['length'] = 0;
unset($x661, $W661, $S661, $U661);
$x662 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 267, 7, '<image>/02_object.js');
$x661 =& $x662[0]; list(,$W661,$S661,$U661) = $x662;
if ($x661 === JS::$undefined || $x661 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x663 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 267, 33, '<image>/02_object.js');
$_TypeError =& $x663[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x663;
$x664 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x665 = $x664($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x665->class) && $x665->class === 'Error') {$x665->properties['file'] = '<image>/02_object.js';$x665->properties['line'] = 267;$x665->properties['column'] = 33;$x665->attributes['file'] = $x665->attributes['line'] = $x665->attributes['column'] = 0; }
throw new JSException($x665, 267, 33, '<image>/02_object.js');
}
$x661 = JS::toObject($x661, $global);
unset($x666, $W666, $S666, $U666);
$x667 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x661, (string) 'toLocaleString', 267, 33, '<image>/02_object.js');
$x666 =& $x667[0]; list(,$W666,$S666,$U666) = $x667;
if ($U666 && (!isset($x661->extensible) || $x661->extensible)) {$x661->properties['toLocaleString'] = $x666; $x666 =& $x661->properties['toLocaleString']; $x661->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U666 = FALSE; $W666 = TRUE; }
if (isset($S666)) {
$x669 = $S666->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x670 = $x669($global, $x661, $S666, array($x660), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x668 = $x670;
} else {
if (!$U666) {$x668 = $x660;if ($W666) { $x666 = $x660; }  }
else { $x668 = JS::$undefined; }
}
if (isset($x661->class) && $x661->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x661->properties['length']) { $x661->properties['length'] = 'toLocaleString' + 1; };
$x688 = clone JS::$functionTemplate; $x688->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_20'; $x688->parameters = array (
); $x688->scope = $scope; $x688->properties['prototype'] = clone JS::$objectTemplate; $x688->attributes['prototype'] = JS::WRITABLE; $x688->properties['prototype']->properties['constructor'] = $x688; $x688->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x688->properties['length'] = 0; $x688->attributes['length'] = 0;
unset($x689, $W689, $S689, $U689);
$x690 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 271, 7, '<image>/02_object.js');
$x689 =& $x690[0]; list(,$W689,$S689,$U689) = $x690;
if ($x689 === JS::$undefined || $x689 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x691 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 271, 26, '<image>/02_object.js');
$_TypeError =& $x691[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x691;
$x692 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x693 = $x692($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x693->class) && $x693->class === 'Error') {$x693->properties['file'] = '<image>/02_object.js';$x693->properties['line'] = 271;$x693->properties['column'] = 26;$x693->attributes['file'] = $x693->attributes['line'] = $x693->attributes['column'] = 0; }
throw new JSException($x693, 271, 26, '<image>/02_object.js');
}
$x689 = JS::toObject($x689, $global);
unset($x694, $W694, $S694, $U694);
$x695 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x689, (string) 'valueOf', 271, 26, '<image>/02_object.js');
$x694 =& $x695[0]; list(,$W694,$S694,$U694) = $x695;
if ($U694 && (!isset($x689->extensible) || $x689->extensible)) {$x689->properties['valueOf'] = $x694; $x694 =& $x689->properties['valueOf']; $x689->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U694 = FALSE; $W694 = TRUE; }
if (isset($S694)) {
$x697 = $S694->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x698 = $x697($global, $x689, $S694, array($x688), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x696 = $x698;
} else {
if (!$U694) {$x696 = $x688;if ($W694) { $x694 = $x688; }  }
else { $x696 = JS::$undefined; }
}
if (isset($x689->class) && $x689->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x689->properties['length']) { $x689->properties['length'] = 'valueOf' + 1; };
$x701 = clone JS::$functionTemplate; $x701->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_21'; $x701->parameters = array (
  0 => 'p',
); $x701->scope = $scope; $x701->properties['prototype'] = clone JS::$objectTemplate; $x701->attributes['prototype'] = JS::WRITABLE; $x701->properties['prototype']->properties['constructor'] = $x701; $x701->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x701->properties['length'] = 1; $x701->attributes['length'] = 0;
unset($x702, $W702, $S702, $U702);
$x703 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 279, 7, '<image>/02_object.js');
$x702 =& $x703[0]; list(,$W702,$S702,$U702) = $x703;
if ($x702 === JS::$undefined || $x702 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x704 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 279, 33, '<image>/02_object.js');
$_TypeError =& $x704[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x704;
$x705 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x706 = $x705($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x706->class) && $x706->class === 'Error') {$x706->properties['file'] = '<image>/02_object.js';$x706->properties['line'] = 279;$x706->properties['column'] = 33;$x706->attributes['file'] = $x706->attributes['line'] = $x706->attributes['column'] = 0; }
throw new JSException($x706, 279, 33, '<image>/02_object.js');
}
$x702 = JS::toObject($x702, $global);
unset($x707, $W707, $S707, $U707);
$x708 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x702, (string) 'hasOwnProperty', 279, 33, '<image>/02_object.js');
$x707 =& $x708[0]; list(,$W707,$S707,$U707) = $x708;
if ($U707 && (!isset($x702->extensible) || $x702->extensible)) {$x702->properties['hasOwnProperty'] = $x707; $x707 =& $x702->properties['hasOwnProperty']; $x702->attributes['hasOwnProperty'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U707 = FALSE; $W707 = TRUE; }
if (isset($S707)) {
$x710 = $S707->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x711 = $x710($global, $x702, $S707, array($x701), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x709 = $x711;
} else {
if (!$U707) {$x709 = $x701;if ($W707) { $x707 = $x701; }  }
else { $x709 = JS::$undefined; }
}
if (isset($x702->class) && $x702->class === 'Array' &&  is_int('hasOwnProperty') && 'hasOwnProperty' >= $x702->properties['length']) { $x702->properties['length'] = 'hasOwnProperty' + 1; };
$x721 = clone JS::$functionTemplate; $x721->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_22'; $x721->parameters = array (
  0 => 'v',
); $x721->scope = $scope; $x721->properties['prototype'] = clone JS::$objectTemplate; $x721->attributes['prototype'] = JS::WRITABLE; $x721->properties['prototype']->properties['constructor'] = $x721; $x721->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x721->properties['length'] = 1; $x721->attributes['length'] = 0;
unset($x722, $W722, $S722, $U722);
$x723 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 283, 7, '<image>/02_object.js');
$x722 =& $x723[0]; list(,$W722,$S722,$U722) = $x723;
if ($x722 === JS::$undefined || $x722 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x724 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 283, 32, '<image>/02_object.js');
$_TypeError =& $x724[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x724;
$x725 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x726 = $x725($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x726->class) && $x726->class === 'Error') {$x726->properties['file'] = '<image>/02_object.js';$x726->properties['line'] = 283;$x726->properties['column'] = 32;$x726->attributes['file'] = $x726->attributes['line'] = $x726->attributes['column'] = 0; }
throw new JSException($x726, 283, 32, '<image>/02_object.js');
}
$x722 = JS::toObject($x722, $global);
unset($x727, $W727, $S727, $U727);
$x728 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x722, (string) 'isPrototypeOf', 283, 32, '<image>/02_object.js');
$x727 =& $x728[0]; list(,$W727,$S727,$U727) = $x728;
if ($U727 && (!isset($x722->extensible) || $x722->extensible)) {$x722->properties['isPrototypeOf'] = $x727; $x727 =& $x722->properties['isPrototypeOf']; $x722->attributes['isPrototypeOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U727 = FALSE; $W727 = TRUE; }
if (isset($S727)) {
$x730 = $S727->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x731 = $x730($global, $x722, $S727, array($x721), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x729 = $x731;
} else {
if (!$U727) {$x729 = $x721;if ($W727) { $x727 = $x721; }  }
else { $x729 = JS::$undefined; }
}
if (isset($x722->class) && $x722->class === 'Array' &&  is_int('isPrototypeOf') && 'isPrototypeOf' >= $x722->properties['length']) { $x722->properties['length'] = 'isPrototypeOf' + 1; };
$x734 = clone JS::$functionTemplate; $x734->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_23'; $x734->parameters = array (
  0 => 'p',
); $x734->scope = $scope; $x734->properties['prototype'] = clone JS::$objectTemplate; $x734->attributes['prototype'] = JS::WRITABLE; $x734->properties['prototype']->properties['constructor'] = $x734; $x734->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x734->properties['length'] = 1; $x734->attributes['length'] = 0;
unset($x735, $W735, $S735, $U735);
$x736 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 300, 7, '<image>/02_object.js');
$x735 =& $x736[0]; list(,$W735,$S735,$U735) = $x736;
if ($x735 === JS::$undefined || $x735 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x737 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 300, 39, '<image>/02_object.js');
$_TypeError =& $x737[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x737;
$x738 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x739 = $x738($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x739->class) && $x739->class === 'Error') {$x739->properties['file'] = '<image>/02_object.js';$x739->properties['line'] = 300;$x739->properties['column'] = 39;$x739->attributes['file'] = $x739->attributes['line'] = $x739->attributes['column'] = 0; }
throw new JSException($x739, 300, 39, '<image>/02_object.js');
}
$x735 = JS::toObject($x735, $global);
unset($x740, $W740, $S740, $U740);
$x741 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x735, (string) 'propertyIsEnumerable', 300, 39, '<image>/02_object.js');
$x740 =& $x741[0]; list(,$W740,$S740,$U740) = $x741;
if ($U740 && (!isset($x735->extensible) || $x735->extensible)) {$x735->properties['propertyIsEnumerable'] = $x740; $x740 =& $x735->properties['propertyIsEnumerable']; $x735->attributes['propertyIsEnumerable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U740 = FALSE; $W740 = TRUE; }
if (isset($S740)) {
$x743 = $S740->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x744 = $x743($global, $x735, $S740, array($x734), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x742 = $x744;
} else {
if (!$U740) {$x742 = $x734;if ($W740) { $x740 = $x734; }  }
else { $x742 = JS::$undefined; }
}
if (isset($x735->class) && $x735->class === 'Array' &&  is_int('propertyIsEnumerable') && 'propertyIsEnumerable' >= $x735->properties['length']) { $x735->properties['length'] = 'propertyIsEnumerable' + 1; };
;
return JS::$undefined;
}
