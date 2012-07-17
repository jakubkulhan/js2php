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
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x78 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 30, 17, '<image>/02_object.js');
$_TypeError =& $x78[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x78;
$x79 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x80 = $x79($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x80->class) && $x80->class === 'Error') {$x80->properties['file'] = '<image>/02_object.js';$x80->properties['line'] = 30;$x80->properties['column'] = 17;$x80->attributes['file'] = $x80->attributes['line'] = $x80->attributes['column'] = 0; }
throw new JSException($x80, 30, 17, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x81, $W81, $S81, $U81);
$x82 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'writable', 30, 17, '<image>/02_object.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
if ($U81 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['writable'] = $x81; $x81 =& $_desc->properties['writable']; $_desc->attributes['writable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U81 = FALSE; $W81 = TRUE; }
if (isset($S81)) {
$x84 = $S81->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x85 = $x84($global, $_desc, $S81, array(JS::toBoolean($_o->attributes[$_p] & JS::WRITABLE, $global)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x83 = $x85;
} else {
if (!$U81) {$x83 = JS::toBoolean($_o->attributes[$_p] & JS::WRITABLE, $global);if ($W81) { $x81 = JS::toBoolean($_o->attributes[$_p] & JS::WRITABLE, $global); }  }
else { $x83 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('writable') && 'writable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'writable' + 1; };;
}
else {
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_GETTER, $global)) {
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x86 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 34, 13, '<image>/02_object.js');
$_TypeError =& $x86[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x86;
$x87 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x88 = $x87($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x88->class) && $x88->class === 'Error') {$x88->properties['file'] = '<image>/02_object.js';$x88->properties['line'] = 34;$x88->properties['column'] = 13;$x88->attributes['file'] = $x88->attributes['line'] = $x88->attributes['column'] = 0; }
throw new JSException($x88, 34, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x89, $W89, $S89, $U89);
$x90 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'get', 34, 13, '<image>/02_object.js');
$x89 =& $x90[0]; list(,$W89,$S89,$U89) = $x90;
if ($U89 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['get'] = $x89; $x89 =& $_desc->properties['get']; $_desc->attributes['get'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U89 = FALSE; $W89 = TRUE; }
if (isset($S89)) {
$x92 = $S89->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x93 = $x92($global, $_desc, $S89, array($_o->getters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x91 = $x93;
} else {
if (!$U89) {$x91 = $_o->getters[$_p];if ($W89) { $x89 = $_o->getters[$_p]; }  }
else { $x91 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('get') && 'get' >= $_desc->properties['length']) { $_desc->properties['length'] = 'get' + 1; };
};
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_SETTER, $global)) {
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x94 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 38, 13, '<image>/02_object.js');
$_TypeError =& $x94[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x94;
$x95 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x96 = $x95($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x96->class) && $x96->class === 'Error') {$x96->properties['file'] = '<image>/02_object.js';$x96->properties['line'] = 38;$x96->properties['column'] = 13;$x96->attributes['file'] = $x96->attributes['line'] = $x96->attributes['column'] = 0; }
throw new JSException($x96, 38, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x97, $W97, $S97, $U97);
$x98 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'set', 38, 13, '<image>/02_object.js');
$x97 =& $x98[0]; list(,$W97,$S97,$U97) = $x98;
if ($U97 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['set'] = $x97; $x97 =& $_desc->properties['set']; $_desc->attributes['set'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U97 = FALSE; $W97 = TRUE; }
if (isset($S97)) {
$x100 = $S97->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x101 = $x100($global, $_desc, $S97, array($_o->setters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x99 = $x101;
} else {
if (!$U97) {$x99 = $_o->setters[$_p];if ($W97) { $x97 = $_o->setters[$_p]; }  }
else { $x99 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('set') && 'set' >= $_desc->properties['length']) { $_desc->properties['length'] = 'set' + 1; };
};;
};
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x102 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 42, 18, '<image>/02_object.js');
$_TypeError =& $x102[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x102;
$x103 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x104 = $x103($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error') {$x104->properties['file'] = '<image>/02_object.js';$x104->properties['line'] = 42;$x104->properties['column'] = 18;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 42, 18, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x105, $W105, $S105, $U105);
$x106 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'enumerable', 42, 18, '<image>/02_object.js');
$x105 =& $x106[0]; list(,$W105,$S105,$U105) = $x106;
if ($U105 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['enumerable'] = $x105; $x105 =& $_desc->properties['enumerable']; $_desc->attributes['enumerable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U105 = FALSE; $W105 = TRUE; }
if (isset($S105)) {
$x108 = $S105->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x109 = $x108($global, $_desc, $S105, array(JS::toBoolean($_o->attributes[$_p] & JS::ENUMERABLE, $global)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x107 = $x109;
} else {
if (!$U105) {$x107 = JS::toBoolean($_o->attributes[$_p] & JS::ENUMERABLE, $global);if ($W105) { $x105 = JS::toBoolean($_o->attributes[$_p] & JS::ENUMERABLE, $global); }  }
else { $x107 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('enumerable') && 'enumerable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'enumerable' + 1; };
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x110 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 43, 20, '<image>/02_object.js');
$_TypeError =& $x110[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x110;
$x111 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x112 = $x111($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x112->class) && $x112->class === 'Error') {$x112->properties['file'] = '<image>/02_object.js';$x112->properties['line'] = 43;$x112->properties['column'] = 20;$x112->attributes['file'] = $x112->attributes['line'] = $x112->attributes['column'] = 0; }
throw new JSException($x112, 43, 20, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x113, $W113, $S113, $U113);
$x114 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_desc, (string) 'configurable', 43, 20, '<image>/02_object.js');
$x113 =& $x114[0]; list(,$W113,$S113,$U113) = $x114;
if ($U113 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['configurable'] = $x113; $x113 =& $_desc->properties['configurable']; $_desc->attributes['configurable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U113 = FALSE; $W113 = TRUE; }
if (isset($S113)) {
$x116 = $S113->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x117 = $x116($global, $_desc, $S113, array(JS::toBoolean($_o->attributes[$_p] & JS::CONFIGURABLE, $global)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x115 = $x117;
} else {
if (!$U113) {$x115 = JS::toBoolean($_o->attributes[$_p] & JS::CONFIGURABLE, $global);if ($W113) { $x113 = JS::toBoolean($_o->attributes[$_p] & JS::CONFIGURABLE, $global); }  }
else { $x115 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('configurable') && 'configurable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'configurable' + 1; };
return $_desc;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x47=&$scope->properties[\'arguments\'];$x47->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x47->properties[$i]=$args[$i];$x47->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;$x49=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x48=$x49;if(!JS::toBoolean($x48,$global)){$x52=$_o;$x52=($x52===JS::$undefined?\'undefined\':(is_int($x52)||is_float($x52)?\'number\':(is_bool($x52)?\'boolean\':(is_string($x52)?\'string\':(is_object($x52)&&isset($x52->call)?\'function\':\'object\')))));$x51=!(((gettype($x52)===gettype(\'object\')&&$x52===\'object\'))||(((is_float($x52)||is_int($x52))&&(is_float(\'object\')||is_int(\'object\')))&&$x52==\'object\'));$x50=$x51;if(JS::toBoolean($x50,$global)){$x54=$_o;$x54=($x54===JS::$undefined?\'undefined\':(is_int($x54)||is_float($x54)?\'number\':(is_bool($x54)?\'boolean\':(is_string($x54)?\'string\':(is_object($x54)&&isset($x54->call)?\'function\':\'object\')))));$x53=!(((gettype($x54)===gettype(\'function\')&&$x54===\'function\'))||(((is_float($x54)||is_int($x54))&&(is_float(\'function\')||is_int(\'function\')))&&$x54==\'function\'));$x50=$x53;}$x48=$x50;}if(JS::toBoolean($x48,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x57=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',19,13,\'<image>/02_object.js\');$_TypeError=&$x57[0];list(,$WTypeError,$STypeError,$UTypeError)=$x57;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x58=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',19,13,\'<image>/02_object.js\');$_ReferenceError=&$x58[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x58;$x59=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,13);$x60=$x59($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'){$x60->properties[\'file\']=\'<image>/02_object.js\';$x60->properties[\'line\']=19;$x60->properties[\'column\']=13;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,19,13,\'<image>/02_object.js\');}$x55=clone JS::$objectTemplate;unset($x61,$W61,$S61,$U61);$x62=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',19,9,\'<image>/02_object.js\');$x61=&$x62[0];list(,$W61,$S61,$U61)=$x62;$x56=$x61;$x55->prototype=$x56;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x65=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x66=$x65($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x66->class)&&$x66->class===\'Error\'){$x66->properties[\'file\']=\'<image>/02_object.js\';$x66->properties[\'line\']=19;$x66->properties[\'column\']=9;$x66->attributes[\'file\']=$x66->attributes[\'line\']=$x66->attributes[\'column\']=0;}throw new JSException($x66,19,9,\'<image>/02_object.js\');}$x63=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x64=$x63($global,$x55,$_TypeError,array(\'Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x56=$x64;if(is_object($x56)&&$x56!==JS::$undefined){$x55=$x56;}if(isset($x55->class)&&$x55->class===\'Error\'){$x55->properties[\'file\']=\'<image>/02_object.js\';$x55->properties[\'line\']=19;$x55->properties[\'column\']=3;$x55->attributes[\'file\']=$x55->attributes[\'line\']=$x55->attributes[\'column\']=0;}throw new JSException($x55,19,3,\'<image>/02_object.js\');}if(JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties)||array_key_exists($_p,$_o->attributes),$global)),$global)){return JS::$undefined;}$x67=clone JS::$objectTemplate;$scope->properties[\'desc\']=JS::$undefined;$_desc=&$scope->properties[\'desc\'];$Udesc=FALSE;$_desc=$x67;if(JS::toBoolean(array_key_exists($_p,$_o->properties),$global)){unset($x68,$W68,$S68,$U68);$x69=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_o,(string)$_p,29,17,\'<image>/02_object.js\');$x68=&$x69[0];list(,$W68,$S68,$U68)=$x69;if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',29,14,\'<image>/02_object.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;$x71=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x72=$x71($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x72->class)&&$x72->class===\'Error\'){$x72->properties[\'file\']=\'<image>/02_object.js\';$x72->properties[\'line\']=29;$x72->properties[\'column\']=14;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,29,14,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x73,$W73,$S73,$U73);$x74=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'value\',29,14,\'<image>/02_object.js\');$x73=&$x74[0];list(,$W73,$S73,$U73)=$x74;if($U73&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'value\']=$x73;$x73=&$_desc->properties[\'value\'];$_desc->attributes[\'value\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U73=FALSE;$W73=TRUE;}if(isset($S73)){$x76=$S73->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x77=$x76($global,$_desc,$S73,array($x68),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x75=$x77;}else{if(!$U73){$x75=$x68;if($W73){$x73=$x68;}}else{$x75=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'value\')&&\'value\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'value\'+1;}if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x78=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',30,17,\'<image>/02_object.js\');$_TypeError=&$x78[0];list(,$WTypeError,$STypeError,$UTypeError)=$x78;$x79=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x80=$x79($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x80->class)&&$x80->class===\'Error\'){$x80->properties[\'file\']=\'<image>/02_object.js\';$x80->properties[\'line\']=30;$x80->properties[\'column\']=17;$x80->attributes[\'file\']=$x80->attributes[\'line\']=$x80->attributes[\'column\']=0;}throw new JSException($x80,30,17,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x81,$W81,$S81,$U81);$x82=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'writable\',30,17,\'<image>/02_object.js\');$x81=&$x82[0];list(,$W81,$S81,$U81)=$x82;if($U81&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'writable\']=$x81;$x81=&$_desc->properties[\'writable\'];$_desc->attributes[\'writable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U81=FALSE;$W81=TRUE;}if(isset($S81)){$x84=$S81->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x85=$x84($global,$_desc,$S81,array(JS::toBoolean($_o->attributes[$_p]&JS::WRITABLE,$global)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x83=$x85;}else{if(!$U81){$x83=JS::toBoolean($_o->attributes[$_p]&JS::WRITABLE,$global);if($W81){$x81=JS::toBoolean($_o->attributes[$_p]&JS::WRITABLE,$global);}}else{$x83=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'writable\')&&\'writable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'writable\'+1;}}else{if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_GETTER,$global)){if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x86=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',34,13,\'<image>/02_object.js\');$_TypeError=&$x86[0];list(,$WTypeError,$STypeError,$UTypeError)=$x86;$x87=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x88=$x87($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x88->class)&&$x88->class===\'Error\'){$x88->properties[\'file\']=\'<image>/02_object.js\';$x88->properties[\'line\']=34;$x88->properties[\'column\']=13;$x88->attributes[\'file\']=$x88->attributes[\'line\']=$x88->attributes[\'column\']=0;}throw new JSException($x88,34,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x89,$W89,$S89,$U89);$x90=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'get\',34,13,\'<image>/02_object.js\');$x89=&$x90[0];list(,$W89,$S89,$U89)=$x90;if($U89&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'get\']=$x89;$x89=&$_desc->properties[\'get\'];$_desc->attributes[\'get\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U89=FALSE;$W89=TRUE;}if(isset($S89)){$x92=$S89->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x93=$x92($global,$_desc,$S89,array($_o->getters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x91=$x93;}else{if(!$U89){$x91=$_o->getters[$_p];if($W89){$x89=$_o->getters[$_p];}}else{$x91=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'get\')&&\'get\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'get\'+1;}}if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_SETTER,$global)){if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x94=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',38,13,\'<image>/02_object.js\');$_TypeError=&$x94[0];list(,$WTypeError,$STypeError,$UTypeError)=$x94;$x95=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x96=$x95($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x96->class)&&$x96->class===\'Error\'){$x96->properties[\'file\']=\'<image>/02_object.js\';$x96->properties[\'line\']=38;$x96->properties[\'column\']=13;$x96->attributes[\'file\']=$x96->attributes[\'line\']=$x96->attributes[\'column\']=0;}throw new JSException($x96,38,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x97,$W97,$S97,$U97);$x98=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'set\',38,13,\'<image>/02_object.js\');$x97=&$x98[0];list(,$W97,$S97,$U97)=$x98;if($U97&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'set\']=$x97;$x97=&$_desc->properties[\'set\'];$_desc->attributes[\'set\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U97=FALSE;$W97=TRUE;}if(isset($S97)){$x100=$S97->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x101=$x100($global,$_desc,$S97,array($_o->setters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x99=$x101;}else{if(!$U97){$x99=$_o->setters[$_p];if($W97){$x97=$_o->setters[$_p];}}else{$x99=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'set\')&&\'set\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'set\'+1;}}}if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x102=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',42,18,\'<image>/02_object.js\');$_TypeError=&$x102[0];list(,$WTypeError,$STypeError,$UTypeError)=$x102;$x103=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x104=$x103($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x104->class)&&$x104->class===\'Error\'){$x104->properties[\'file\']=\'<image>/02_object.js\';$x104->properties[\'line\']=42;$x104->properties[\'column\']=18;$x104->attributes[\'file\']=$x104->attributes[\'line\']=$x104->attributes[\'column\']=0;}throw new JSException($x104,42,18,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x105,$W105,$S105,$U105);$x106=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'enumerable\',42,18,\'<image>/02_object.js\');$x105=&$x106[0];list(,$W105,$S105,$U105)=$x106;if($U105&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'enumerable\']=$x105;$x105=&$_desc->properties[\'enumerable\'];$_desc->attributes[\'enumerable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U105=FALSE;$W105=TRUE;}if(isset($S105)){$x108=$S105->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x109=$x108($global,$_desc,$S105,array(JS::toBoolean($_o->attributes[$_p]&JS::ENUMERABLE,$global)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x107=$x109;}else{if(!$U105){$x107=JS::toBoolean($_o->attributes[$_p]&JS::ENUMERABLE,$global);if($W105){$x105=JS::toBoolean($_o->attributes[$_p]&JS::ENUMERABLE,$global);}}else{$x107=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'enumerable\')&&\'enumerable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'enumerable\'+1;}if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x110=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',43,20,\'<image>/02_object.js\');$_TypeError=&$x110[0];list(,$WTypeError,$STypeError,$UTypeError)=$x110;$x111=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x112=$x111($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x112->class)&&$x112->class===\'Error\'){$x112->properties[\'file\']=\'<image>/02_object.js\';$x112->properties[\'line\']=43;$x112->properties[\'column\']=20;$x112->attributes[\'file\']=$x112->attributes[\'line\']=$x112->attributes[\'column\']=0;}throw new JSException($x112,43,20,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x113,$W113,$S113,$U113);$x114=_3411dfcb3a85bb909d635ca35d6d3d6a_5($global,$scope,$_desc,(string)\'configurable\',43,20,\'<image>/02_object.js\');$x113=&$x114[0];list(,$W113,$S113,$U113)=$x114;if($U113&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'configurable\']=$x113;$x113=&$_desc->properties[\'configurable\'];$_desc->attributes[\'configurable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U113=FALSE;$W113=TRUE;}if(isset($S113)){$x116=$S113->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x117=$x116($global,$_desc,$S113,array(JS::toBoolean($_o->attributes[$_p]&JS::CONFIGURABLE,$global)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x115=$x117;}else{if(!$U113){$x115=JS::toBoolean($_o->attributes[$_p]&JS::CONFIGURABLE,$global);if($W113){$x113=JS::toBoolean($_o->attributes[$_p]&JS::CONFIGURABLE,$global);}}else{$x115=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'configurable\')&&\'configurable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'configurable\'+1;}return$_desc;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x128 =& $scope->properties['arguments'];
$x128->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x128->properties[$i] = $args[$i];
$x128->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x130 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x129 = $x130;
if (!JS::toBoolean($x129, $global)) {
$x133 = $_o;
$x133 = ($x133 === JS::$undefined ? 'undefined' : (is_int($x133) || is_float($x133) ? 'number' : (is_bool($x133) ? 'boolean' : (is_string($x133) ? 'string' : (is_object($x133) && isset($x133->call) ? 'function' : 'object')))));
$x132 = !(((gettype($x133) === gettype('object') && $x133 === 'object'))|| (((is_float($x133) || is_int($x133)) && (is_float('object') || is_int('object'))) && $x133 == 'object'));
$x131 = $x132;
if (JS::toBoolean($x131, $global)) {
$x135 = $_o;
$x135 = ($x135 === JS::$undefined ? 'undefined' : (is_int($x135) || is_float($x135) ? 'number' : (is_bool($x135) ? 'boolean' : (is_string($x135) ? 'string' : (is_object($x135) && isset($x135->call) ? 'function' : 'object')))));
$x134 = !(((gettype($x135) === gettype('function') && $x135 === 'function'))|| (((is_float($x135) || is_int($x135)) && (is_float('function') || is_int('function'))) && $x135 == 'function'));
$x131 = $x134; }
$x129 = $x131; }
if (JS::toBoolean($x129, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x138 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 50, 13, '<image>/02_object.js');
$_TypeError =& $x138[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x138;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x139 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 50, 13, '<image>/02_object.js');
$_ReferenceError =& $x139[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x139;
$x140 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 13);
$x141 = $x140($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x141->class) && $x141->class === 'Error') {$x141->properties['file'] = '<image>/02_object.js';$x141->properties['line'] = 50;$x141->properties['column'] = 13;$x141->attributes['file'] = $x141->attributes['line'] = $x141->attributes['column'] = 0; }
throw new JSException($x141, 50, 13, '<image>/02_object.js');
}
$x136 = clone JS::$objectTemplate;
unset($x142, $W142, $S142, $U142);
$x143 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 50, 9, '<image>/02_object.js');
$x142 =& $x143[0]; list(,$W142,$S142,$U142) = $x143;
$x137 = $x142;
$x136->prototype = $x137;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x146 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x147 = $x146($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x147->class) && $x147->class === 'Error') {$x147->properties['file'] = '<image>/02_object.js';$x147->properties['line'] = 50;$x147->properties['column'] = 9;$x147->attributes['file'] = $x147->attributes['line'] = $x147->attributes['column'] = 0; }
throw new JSException($x147, 50, 9, '<image>/02_object.js');
}
$x144 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x145 = $x144($global, $x136, $_TypeError, array('Object.getOwnPropertyNames(): Cannot get property names of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x137 = $x145;
if (is_object($x137) && $x137 !== JS::$undefined) { $x136 = $x137; }
if (isset($x136->class) && $x136->class === 'Error') {$x136->properties['file'] = '<image>/02_object.js';$x136->properties['line'] = 50;$x136->properties['column'] = 3;$x136->attributes['file'] = $x136->attributes['line'] = $x136->attributes['column'] = 0; }
throw new JSException($x136, 50, 3, '<image>/02_object.js');;
};
$x148 = clone JS::$arrayTemplate;
$x148->properties['length'] = 0;
$x148->attributes['length'] = JS::WRITABLE;
$scope->properties['names'] = JS::$undefined; $_names =& $scope->properties['names'];
$Unames = FALSE;
$_names = $x148;
foreach (array_unique(array_merge(array_keys($_o->properties), array_keys($_o->attributes))) as $i => $name) {;
if ($_names === JS::$undefined || $_names === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x150 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 56, 13, '<image>/02_object.js');
$_TypeError =& $x150[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x150;
$x151 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x152 = $x151($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x152->class) && $x152->class === 'Error') {$x152->properties['file'] = '<image>/02_object.js';$x152->properties['line'] = 56;$x152->properties['column'] = 13;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 56, 13, '<image>/02_object.js');
}
$x149 = JS::toObject($_names, $global);
unset($x153, $W153, $S153, $U153);
$x154 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x149, (string) 'push', 56, 13, '<image>/02_object.js');
$x153 =& $x154[0]; list(,$W153,$S153,$U153) = $x154;
if (!(is_object($x153) && isset($x153->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 56, 13, '<image>/02_object.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x159 = $x158($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error') {$x159->properties['file'] = '<image>/02_object.js';$x159->properties['line'] = 56;$x159->properties['column'] = 13;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 56, 13, '<image>/02_object.js');
}
$x155 = $x153->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x156 = $x155($global, $x149, $x153, array($name), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_names;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x128=&$scope->properties[\'arguments\'];$x128->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x128->properties[$i]=$args[$i];$x128->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x130=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x129=$x130;if(!JS::toBoolean($x129,$global)){$x133=$_o;$x133=($x133===JS::$undefined?\'undefined\':(is_int($x133)||is_float($x133)?\'number\':(is_bool($x133)?\'boolean\':(is_string($x133)?\'string\':(is_object($x133)&&isset($x133->call)?\'function\':\'object\')))));$x132=!(((gettype($x133)===gettype(\'object\')&&$x133===\'object\'))||(((is_float($x133)||is_int($x133))&&(is_float(\'object\')||is_int(\'object\')))&&$x133==\'object\'));$x131=$x132;if(JS::toBoolean($x131,$global)){$x135=$_o;$x135=($x135===JS::$undefined?\'undefined\':(is_int($x135)||is_float($x135)?\'number\':(is_bool($x135)?\'boolean\':(is_string($x135)?\'string\':(is_object($x135)&&isset($x135->call)?\'function\':\'object\')))));$x134=!(((gettype($x135)===gettype(\'function\')&&$x135===\'function\'))||(((is_float($x135)||is_int($x135))&&(is_float(\'function\')||is_int(\'function\')))&&$x135==\'function\'));$x131=$x134;}$x129=$x131;}if(JS::toBoolean($x129,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x138=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',50,13,\'<image>/02_object.js\');$_TypeError=&$x138[0];list(,$WTypeError,$STypeError,$UTypeError)=$x138;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x139=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',50,13,\'<image>/02_object.js\');$_ReferenceError=&$x139[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x139;$x140=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,13);$x141=$x140($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x141->class)&&$x141->class===\'Error\'){$x141->properties[\'file\']=\'<image>/02_object.js\';$x141->properties[\'line\']=50;$x141->properties[\'column\']=13;$x141->attributes[\'file\']=$x141->attributes[\'line\']=$x141->attributes[\'column\']=0;}throw new JSException($x141,50,13,\'<image>/02_object.js\');}$x136=clone JS::$objectTemplate;unset($x142,$W142,$S142,$U142);$x143=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',50,9,\'<image>/02_object.js\');$x142=&$x143[0];list(,$W142,$S142,$U142)=$x143;$x137=$x142;$x136->prototype=$x137;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x146=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x147=$x146($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x147->class)&&$x147->class===\'Error\'){$x147->properties[\'file\']=\'<image>/02_object.js\';$x147->properties[\'line\']=50;$x147->properties[\'column\']=9;$x147->attributes[\'file\']=$x147->attributes[\'line\']=$x147->attributes[\'column\']=0;}throw new JSException($x147,50,9,\'<image>/02_object.js\');}$x144=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x145=$x144($global,$x136,$_TypeError,array(\'Object.getOwnPropertyNames(): Cannot get property names of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x137=$x145;if(is_object($x137)&&$x137!==JS::$undefined){$x136=$x137;}if(isset($x136->class)&&$x136->class===\'Error\'){$x136->properties[\'file\']=\'<image>/02_object.js\';$x136->properties[\'line\']=50;$x136->properties[\'column\']=3;$x136->attributes[\'file\']=$x136->attributes[\'line\']=$x136->attributes[\'column\']=0;}throw new JSException($x136,50,3,\'<image>/02_object.js\');}$x148=clone JS::$arrayTemplate;$x148->properties[\'length\']=0;$x148->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'names\']=JS::$undefined;$_names=&$scope->properties[\'names\'];$Unames=FALSE;$_names=$x148;foreach(array_unique(array_merge(array_keys($_o->properties),array_keys($_o->attributes)))as$i=>$name){;if($_names===JS::$undefined||$_names===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x150=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',56,13,\'<image>/02_object.js\');$_TypeError=&$x150[0];list(,$WTypeError,$STypeError,$UTypeError)=$x150;$x151=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x152=$x151($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x152->class)&&$x152->class===\'Error\'){$x152->properties[\'file\']=\'<image>/02_object.js\';$x152->properties[\'line\']=56;$x152->properties[\'column\']=13;$x152->attributes[\'file\']=$x152->attributes[\'line\']=$x152->attributes[\'column\']=0;}throw new JSException($x152,56,13,\'<image>/02_object.js\');}$x149=JS::toObject($_names,$global);unset($x153,$W153,$S153,$U153);$x154=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x149,(string)\'push\',56,13,\'<image>/02_object.js\');$x153=&$x154[0];list(,$W153,$S153,$U153)=$x154;if(!(is_object($x153)&&isset($x153->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x157=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',56,13,\'<image>/02_object.js\');$_TypeError=&$x157[0];list(,$WTypeError,$STypeError,$UTypeError)=$x157;$x158=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x159=$x158($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x159->class)&&$x159->class===\'Error\'){$x159->properties[\'file\']=\'<image>/02_object.js\';$x159->properties[\'line\']=56;$x159->properties[\'column\']=13;$x159->attributes[\'file\']=$x159->attributes[\'line\']=$x159->attributes[\'column\']=0;}throw new JSException($x159,56,13,\'<image>/02_object.js\');}$x155=$x153->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x156=$x155($global,$x149,$x153,array($name),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_names;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x170 =& $scope->properties['arguments'];
$x170->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x170->properties[$i] = $args[$i];
$x170->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x173 = $_o;
$x173 = ($x173 === JS::$undefined ? 'undefined' : (is_int($x173) || is_float($x173) ? 'number' : (is_bool($x173) ? 'boolean' : (is_string($x173) ? 'string' : (is_object($x173) && isset($x173->call) ? 'function' : 'object')))));
$x172 = !(((gettype($x173) === gettype('object') && $x173 === 'object'))|| (((is_float($x173) || is_int($x173)) && (is_float('object') || is_int('object'))) && $x173 == 'object'));
$x171 = $x172;
if (JS::toBoolean($x171, $global)) {
$x175 = $_o;
$x175 = ($x175 === JS::$undefined ? 'undefined' : (is_int($x175) || is_float($x175) ? 'number' : (is_bool($x175) ? 'boolean' : (is_string($x175) ? 'string' : (is_object($x175) && isset($x175->call) ? 'function' : 'object')))));
$x174 = !(((gettype($x175) === gettype('function') && $x175 === 'function'))|| (((is_float($x175) || is_int($x175)) && (is_float('function') || is_int('function'))) && $x175 == 'function'));
$x171 = $x174; }
if (JS::toBoolean($x171, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x178 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 64, 13, '<image>/02_object.js');
$_TypeError =& $x178[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x178;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x179 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 64, 13, '<image>/02_object.js');
$_ReferenceError =& $x179[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x179;
$x180 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 13);
$x181 = $x180($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x181->class) && $x181->class === 'Error') {$x181->properties['file'] = '<image>/02_object.js';$x181->properties['line'] = 64;$x181->properties['column'] = 13;$x181->attributes['file'] = $x181->attributes['line'] = $x181->attributes['column'] = 0; }
throw new JSException($x181, 64, 13, '<image>/02_object.js');
}
$x176 = clone JS::$objectTemplate;
unset($x182, $W182, $S182, $U182);
$x183 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 64, 9, '<image>/02_object.js');
$x182 =& $x183[0]; list(,$W182,$S182,$U182) = $x183;
$x177 = $x182;
$x176->prototype = $x177;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x186 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x187 = $x186($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x187->class) && $x187->class === 'Error') {$x187->properties['file'] = '<image>/02_object.js';$x187->properties['line'] = 64;$x187->properties['column'] = 9;$x187->attributes['file'] = $x187->attributes['line'] = $x187->attributes['column'] = 0; }
throw new JSException($x187, 64, 9, '<image>/02_object.js');
}
$x184 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x185 = $x184($global, $x176, $_TypeError, array('Object.create(): Cannot create object with non-object prototype.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x177 = $x185;
if (is_object($x177) && $x177 !== JS::$undefined) { $x176 = $x177; }
if (isset($x176->class) && $x176->class === 'Error') {$x176->properties['file'] = '<image>/02_object.js';$x176->properties['line'] = 64;$x176->properties['column'] = 3;$x176->attributes['file'] = $x176->attributes['line'] = $x176->attributes['column'] = 0; }
throw new JSException($x176, 64, 3, '<image>/02_object.js');;
};
$x188 = clone JS::$objectTemplate;
$scope->properties['newObject'] = JS::$undefined; $_newObject =& $scope->properties['newObject'];
$UnewObject = FALSE;
$_newObject = $x188;
$_newObject->prototype =$_o;
if (JS::toBoolean(is_object($_properties) &&$_properties!== JS::$undefined, $global)) {
unset($_Object, $WObject, $SObject, $UObject);
$x189 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'Object', 72, 3, '<image>/02_object.js');
$_Object =& $x189[0]; list(,$WObject,$SObject,$UObject) = $x189;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x190 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 72, 3, '<image>/02_object.js');
$_ReferenceError =& $x190[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x190;
$x191 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 3);
$x192 = $x191($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x192->class) && $x192->class === 'Error') {$x192->properties['file'] = '<image>/02_object.js';$x192->properties['line'] = 72;$x192->properties['column'] = 3;$x192->attributes['file'] = $x192->attributes['line'] = $x192->attributes['column'] = 0; }
throw new JSException($x192, 72, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x194 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 72, 26, '<image>/02_object.js');
$_TypeError =& $x194[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x194;
$x195 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x196 = $x195($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x196->class) && $x196->class === 'Error') {$x196->properties['file'] = '<image>/02_object.js';$x196->properties['line'] = 72;$x196->properties['column'] = 26;$x196->attributes['file'] = $x196->attributes['line'] = $x196->attributes['column'] = 0; }
throw new JSException($x196, 72, 26, '<image>/02_object.js');
}
$x193 = JS::toObject($_Object, $global);
unset($x197, $W197, $S197, $U197);
$x198 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x193, (string) 'defineProperties', 72, 26, '<image>/02_object.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if (!(is_object($x197) && isset($x197->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x201 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 72, 26, '<image>/02_object.js');
$_TypeError =& $x201[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x201;
$x202 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x203 = $x202($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x203->class) && $x203->class === 'Error') {$x203->properties['file'] = '<image>/02_object.js';$x203->properties['line'] = 72;$x203->properties['column'] = 26;$x203->attributes['file'] = $x203->attributes['line'] = $x203->attributes['column'] = 0; }
throw new JSException($x203, 72, 26, '<image>/02_object.js');
}
$x199 = $x197->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x200 = $x199($global, $x193, $x197, array($_newObject, $_properties), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newObject;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x170=&$scope->properties[\'arguments\'];$x170->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x170->properties[$i]=$args[$i];$x170->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x173=$_o;$x173=($x173===JS::$undefined?\'undefined\':(is_int($x173)||is_float($x173)?\'number\':(is_bool($x173)?\'boolean\':(is_string($x173)?\'string\':(is_object($x173)&&isset($x173->call)?\'function\':\'object\')))));$x172=!(((gettype($x173)===gettype(\'object\')&&$x173===\'object\'))||(((is_float($x173)||is_int($x173))&&(is_float(\'object\')||is_int(\'object\')))&&$x173==\'object\'));$x171=$x172;if(JS::toBoolean($x171,$global)){$x175=$_o;$x175=($x175===JS::$undefined?\'undefined\':(is_int($x175)||is_float($x175)?\'number\':(is_bool($x175)?\'boolean\':(is_string($x175)?\'string\':(is_object($x175)&&isset($x175->call)?\'function\':\'object\')))));$x174=!(((gettype($x175)===gettype(\'function\')&&$x175===\'function\'))||(((is_float($x175)||is_int($x175))&&(is_float(\'function\')||is_int(\'function\')))&&$x175==\'function\'));$x171=$x174;}if(JS::toBoolean($x171,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x178=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',64,13,\'<image>/02_object.js\');$_TypeError=&$x178[0];list(,$WTypeError,$STypeError,$UTypeError)=$x178;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x179=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',64,13,\'<image>/02_object.js\');$_ReferenceError=&$x179[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x179;$x180=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,13);$x181=$x180($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x181->class)&&$x181->class===\'Error\'){$x181->properties[\'file\']=\'<image>/02_object.js\';$x181->properties[\'line\']=64;$x181->properties[\'column\']=13;$x181->attributes[\'file\']=$x181->attributes[\'line\']=$x181->attributes[\'column\']=0;}throw new JSException($x181,64,13,\'<image>/02_object.js\');}$x176=clone JS::$objectTemplate;unset($x182,$W182,$S182,$U182);$x183=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',64,9,\'<image>/02_object.js\');$x182=&$x183[0];list(,$W182,$S182,$U182)=$x183;$x177=$x182;$x176->prototype=$x177;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x186=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x187=$x186($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x187->class)&&$x187->class===\'Error\'){$x187->properties[\'file\']=\'<image>/02_object.js\';$x187->properties[\'line\']=64;$x187->properties[\'column\']=9;$x187->attributes[\'file\']=$x187->attributes[\'line\']=$x187->attributes[\'column\']=0;}throw new JSException($x187,64,9,\'<image>/02_object.js\');}$x184=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x185=$x184($global,$x176,$_TypeError,array(\'Object.create(): Cannot create object with non-object prototype.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x177=$x185;if(is_object($x177)&&$x177!==JS::$undefined){$x176=$x177;}if(isset($x176->class)&&$x176->class===\'Error\'){$x176->properties[\'file\']=\'<image>/02_object.js\';$x176->properties[\'line\']=64;$x176->properties[\'column\']=3;$x176->attributes[\'file\']=$x176->attributes[\'line\']=$x176->attributes[\'column\']=0;}throw new JSException($x176,64,3,\'<image>/02_object.js\');}$x188=clone JS::$objectTemplate;$scope->properties[\'newObject\']=JS::$undefined;$_newObject=&$scope->properties[\'newObject\'];$UnewObject=FALSE;$_newObject=$x188;$_newObject->prototype=$_o;if(JS::toBoolean(is_object($_properties)&&$_properties!==JS::$undefined,$global)){unset($_Object,$WObject,$SObject,$UObject);$x189=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'Object\',72,3,\'<image>/02_object.js\');$_Object=&$x189[0];list(,$WObject,$SObject,$UObject)=$x189;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x190=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',72,3,\'<image>/02_object.js\');$_ReferenceError=&$x190[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x190;$x191=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,3);$x192=$x191($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x192->class)&&$x192->class===\'Error\'){$x192->properties[\'file\']=\'<image>/02_object.js\';$x192->properties[\'line\']=72;$x192->properties[\'column\']=3;$x192->attributes[\'file\']=$x192->attributes[\'line\']=$x192->attributes[\'column\']=0;}throw new JSException($x192,72,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x194=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',72,26,\'<image>/02_object.js\');$_TypeError=&$x194[0];list(,$WTypeError,$STypeError,$UTypeError)=$x194;$x195=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x196=$x195($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x196->class)&&$x196->class===\'Error\'){$x196->properties[\'file\']=\'<image>/02_object.js\';$x196->properties[\'line\']=72;$x196->properties[\'column\']=26;$x196->attributes[\'file\']=$x196->attributes[\'line\']=$x196->attributes[\'column\']=0;}throw new JSException($x196,72,26,\'<image>/02_object.js\');}$x193=JS::toObject($_Object,$global);unset($x197,$W197,$S197,$U197);$x198=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x193,(string)\'defineProperties\',72,26,\'<image>/02_object.js\');$x197=&$x198[0];list(,$W197,$S197,$U197)=$x198;if(!(is_object($x197)&&isset($x197->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x201=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',72,26,\'<image>/02_object.js\');$_TypeError=&$x201[0];list(,$WTypeError,$STypeError,$UTypeError)=$x201;$x202=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x203=$x202($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x203->class)&&$x203->class===\'Error\'){$x203->properties[\'file\']=\'<image>/02_object.js\';$x203->properties[\'line\']=72;$x203->properties[\'column\']=26;$x203->attributes[\'file\']=$x203->attributes[\'line\']=$x203->attributes[\'column\']=0;}throw new JSException($x203,72,26,\'<image>/02_object.js\');}$x199=$x197->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x200=$x199($global,$x193,$x197,array($_newObject,$_properties),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newObject;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x214 =& $scope->properties['arguments'];
$x214->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x214->properties[$i] = $args[$i];
$x214->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x216 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x215 = $x216;
if (!JS::toBoolean($x215, $global)) {
$x219 = $_o;
$x219 = ($x219 === JS::$undefined ? 'undefined' : (is_int($x219) || is_float($x219) ? 'number' : (is_bool($x219) ? 'boolean' : (is_string($x219) ? 'string' : (is_object($x219) && isset($x219->call) ? 'function' : 'object')))));
$x218 = !(((gettype($x219) === gettype('object') && $x219 === 'object'))|| (((is_float($x219) || is_int($x219)) && (is_float('object') || is_int('object'))) && $x219 == 'object'));
$x217 = $x218;
if (JS::toBoolean($x217, $global)) {
$x221 = $_o;
$x221 = ($x221 === JS::$undefined ? 'undefined' : (is_int($x221) || is_float($x221) ? 'number' : (is_bool($x221) ? 'boolean' : (is_string($x221) ? 'string' : (is_object($x221) && isset($x221->call) ? 'function' : 'object')))));
$x220 = !(((gettype($x221) === gettype('function') && $x221 === 'function'))|| (((is_float($x221) || is_int($x221)) && (is_float('function') || is_int('function'))) && $x221 == 'function'));
$x217 = $x220; }
$x215 = $x217; }
if (JS::toBoolean($x215, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x224 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 80, 13, '<image>/02_object.js');
$_TypeError =& $x224[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x224;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x225 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 80, 13, '<image>/02_object.js');
$_ReferenceError =& $x225[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x225;
$x226 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 13);
$x227 = $x226($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x227->class) && $x227->class === 'Error') {$x227->properties['file'] = '<image>/02_object.js';$x227->properties['line'] = 80;$x227->properties['column'] = 13;$x227->attributes['file'] = $x227->attributes['line'] = $x227->attributes['column'] = 0; }
throw new JSException($x227, 80, 13, '<image>/02_object.js');
}
$x222 = clone JS::$objectTemplate;
unset($x228, $W228, $S228, $U228);
$x229 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 80, 9, '<image>/02_object.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
$x223 = $x228;
$x222->prototype = $x223;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x232 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x233 = $x232($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x233->class) && $x233->class === 'Error') {$x233->properties['file'] = '<image>/02_object.js';$x233->properties['line'] = 80;$x233->properties['column'] = 9;$x233->attributes['file'] = $x233->attributes['line'] = $x233->attributes['column'] = 0; }
throw new JSException($x233, 80, 9, '<image>/02_object.js');
}
$x230 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x231 = $x230($global, $x222, $_TypeError, array('Object.defineProperty(): Cannot define property on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x223 = $x231;
if (is_object($x223) && $x223 !== JS::$undefined) { $x222 = $x223; }
if (isset($x222->class) && $x222->class === 'Error') {$x222->properties['file'] = '<image>/02_object.js';$x222->properties['line'] = 80;$x222->properties['column'] = 3;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 80, 3, '<image>/02_object.js');;
};
unset($x236, $W236, $S236, $U236);
$x237 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'get', 83, 16, '<image>/02_object.js');
$x236 =& $x237[0]; list(,$W236,$S236,$U236) = $x237;
$x235 = !(((gettype($x236) === gettype(JS::$undefined) && $x236 === JS::$undefined))|| (((is_float($x236) || is_int($x236)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x236 == JS::$undefined));
$x234 = $x235;
if (JS::toBoolean($x234, $global)) {
unset($x239, $W239, $S239, $U239);
$x240 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'get', 83, 55, '<image>/02_object.js');
$x239 =& $x240[0]; list(,$W239,$S239,$U239) = $x240;
$x241 = $x239;
$x241 = ($x241 === JS::$undefined ? 'undefined' : (is_int($x241) || is_float($x241) ? 'number' : (is_bool($x241) ? 'boolean' : (is_string($x241) ? 'string' : (is_object($x241) && isset($x241->call) ? 'function' : 'object')))));
$x238 = !(((gettype($x241) === gettype('function') && $x241 === 'function'))|| (((is_float($x241) || is_int($x241)) && (is_float('function') || is_int('function'))) && $x241 == 'function'));
$x234 = $x238; }
if (JS::toBoolean($x234, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x244 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 84, 13, '<image>/02_object.js');
$_TypeError =& $x244[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x244;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x245 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 84, 13, '<image>/02_object.js');
$_ReferenceError =& $x245[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x245;
$x246 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 13);
$x247 = $x246($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x247->class) && $x247->class === 'Error') {$x247->properties['file'] = '<image>/02_object.js';$x247->properties['line'] = 84;$x247->properties['column'] = 13;$x247->attributes['file'] = $x247->attributes['line'] = $x247->attributes['column'] = 0; }
throw new JSException($x247, 84, 13, '<image>/02_object.js');
}
$x242 = clone JS::$objectTemplate;
unset($x248, $W248, $S248, $U248);
$x249 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 84, 9, '<image>/02_object.js');
$x248 =& $x249[0]; list(,$W248,$S248,$U248) = $x249;
$x243 = $x248;
$x242->prototype = $x243;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x252 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x253 = $x252($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x253->class) && $x253->class === 'Error') {$x253->properties['file'] = '<image>/02_object.js';$x253->properties['line'] = 84;$x253->properties['column'] = 9;$x253->attributes['file'] = $x253->attributes['line'] = $x253->attributes['column'] = 0; }
throw new JSException($x253, 84, 9, '<image>/02_object.js');
}
$x250 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x251 = $x250($global, $x242, $_TypeError, array('Object.defineProperty(): Given getter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x243 = $x251;
if (is_object($x243) && $x243 !== JS::$undefined) { $x242 = $x243; }
if (isset($x242->class) && $x242->class === 'Error') {$x242->properties['file'] = '<image>/02_object.js';$x242->properties['line'] = 84;$x242->properties['column'] = 3;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 84, 3, '<image>/02_object.js');;
};
unset($x256, $W256, $S256, $U256);
$x257 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'set', 87, 16, '<image>/02_object.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
$x255 = !(((gettype($x256) === gettype(JS::$undefined) && $x256 === JS::$undefined))|| (((is_float($x256) || is_int($x256)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x256 == JS::$undefined));
$x254 = $x255;
if (JS::toBoolean($x254, $global)) {
unset($x259, $W259, $S259, $U259);
$x260 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'set', 87, 55, '<image>/02_object.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
$x261 = $x259;
$x261 = ($x261 === JS::$undefined ? 'undefined' : (is_int($x261) || is_float($x261) ? 'number' : (is_bool($x261) ? 'boolean' : (is_string($x261) ? 'string' : (is_object($x261) && isset($x261->call) ? 'function' : 'object')))));
$x258 = !(((gettype($x261) === gettype('function') && $x261 === 'function'))|| (((is_float($x261) || is_int($x261)) && (is_float('function') || is_int('function'))) && $x261 == 'function'));
$x254 = $x258; }
if (JS::toBoolean($x254, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x264 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 88, 13, '<image>/02_object.js');
$_TypeError =& $x264[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x264;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x265 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 88, 13, '<image>/02_object.js');
$_ReferenceError =& $x265[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x265;
$x266 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 13);
$x267 = $x266($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x267->class) && $x267->class === 'Error') {$x267->properties['file'] = '<image>/02_object.js';$x267->properties['line'] = 88;$x267->properties['column'] = 13;$x267->attributes['file'] = $x267->attributes['line'] = $x267->attributes['column'] = 0; }
throw new JSException($x267, 88, 13, '<image>/02_object.js');
}
$x262 = clone JS::$objectTemplate;
unset($x268, $W268, $S268, $U268);
$x269 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 88, 9, '<image>/02_object.js');
$x268 =& $x269[0]; list(,$W268,$S268,$U268) = $x269;
$x263 = $x268;
$x262->prototype = $x263;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x272 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x273 = $x272($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x273->class) && $x273->class === 'Error') {$x273->properties['file'] = '<image>/02_object.js';$x273->properties['line'] = 88;$x273->properties['column'] = 9;$x273->attributes['file'] = $x273->attributes['line'] = $x273->attributes['column'] = 0; }
throw new JSException($x273, 88, 9, '<image>/02_object.js');
}
$x270 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x271 = $x270($global, $x262, $_TypeError, array('Object.defineProperty(): Given setter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x263 = $x271;
if (is_object($x263) && $x263 !== JS::$undefined) { $x262 = $x263; }
if (isset($x262->class) && $x262->class === 'Error') {$x262->properties['file'] = '<image>/02_object.js';$x262->properties['line'] = 88;$x262->properties['column'] = 3;$x262->attributes['file'] = $x262->attributes['line'] = $x262->attributes['column'] = 0; }
throw new JSException($x262, 88, 3, '<image>/02_object.js');;
};
$x274 = $_attributes;
if (!JS::toBoolean($x274, $global)) {
$x275 = clone JS::$objectTemplate;
$x274 = $x275; }
if ($Uattributes) {$global->properties['attributes'] = $_attributes; $_attributes =& $global->properties['attributes']; }
$_attributes = $x274;
if ($Up) {$global->properties['p'] = $_p; $_p =& $global->properties['p']; }
$_p = JS::toString($_p, $global);
unset($x277, $W277, $S277, $U277);
$x278 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'value', 94, 24, '<image>/02_object.js');
$x277 =& $x278[0]; list(,$W277,$S277,$U277) = $x278;
$x276 = $x277;
if (!JS::toBoolean($x276, $global)) {
$x276 = JS::$undefined; }
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = $x276;
unset($x280, $W280, $S280, $U280);
$x281 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'get', 95, 19, '<image>/02_object.js');
$x280 =& $x281[0]; list(,$W280,$S280,$U280) = $x281;
$x279 = $x280;
if (!JS::toBoolean($x279, $global)) {
$x279 = JS::$undefined; }
$scope->properties['get'] = JS::$undefined; $_get =& $scope->properties['get'];
$Uget = FALSE;
$_get = $x279;
unset($x283, $W283, $S283, $U283);
$x284 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'set', 96, 19, '<image>/02_object.js');
$x283 =& $x284[0]; list(,$W283,$S283,$U283) = $x284;
$x282 = $x283;
if (!JS::toBoolean($x282, $global)) {
$x282 = JS::$undefined; }
$scope->properties['set'] = JS::$undefined; $_set =& $scope->properties['set'];
$Uset = FALSE;
$_set = $x282;
$scope->properties['attrs'] = JS::$undefined; $_attrs =& $scope->properties['attrs'];
$Uattrs = FALSE;
$_attrs = 0;
$x286 = $_value;
$x286 = ($x286 === JS::$undefined ? 'undefined' : (is_int($x286) || is_float($x286) ? 'number' : (is_bool($x286) ? 'boolean' : (is_string($x286) ? 'string' : (is_object($x286) && isset($x286->call) ? 'function' : 'object')))));
$x285 = !(((gettype($x286) === gettype('undefined') && $x286 === 'undefined'))|| (((is_float($x286) || is_int($x286)) && (is_float('undefined') || is_int('undefined'))) && $x286 == 'undefined'));
if (JS::toBoolean($x285, $global)) {

$_o->properties[$_p] =$_value;;
};
if (JS::toBoolean($_get, $global)) {
$_o->getters[$_p] =$_get;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x287 = JS::toNumber($_attrs, $global);
$x288 = JS::toNumber(JS::HAS_GETTER, $global);
if (is_nan($x287)) { $x287 = 0; }
if (is_nan($x288)) { $x288 = 0; }
$x289 = $x287 | $x288;
$_attrs = $x289;;
};
if (JS::toBoolean($_set, $global)) {
$_o->setters[$_p] =$_set;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x290 = JS::toNumber($_attrs, $global);
$x291 = JS::toNumber(JS::HAS_SETTER, $global);
if (is_nan($x290)) { $x290 = 0; }
if (is_nan($x291)) { $x291 = 0; }
$x292 = $x290 | $x291;
$_attrs = $x292;;
};
unset($x293, $W293, $S293, $U293);
$x294 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'writable', 113, 16, '<image>/02_object.js');
$x293 =& $x294[0]; list(,$W293,$S293,$U293) = $x294;
if (JS::toBoolean($x293, $global)) {
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x295 = JS::toNumber($_attrs, $global);
$x296 = JS::toNumber(JS::WRITABLE, $global);
if (is_nan($x295)) { $x295 = 0; }
if (is_nan($x296)) { $x296 = 0; }
$x297 = $x295 | $x296;
$_attrs = $x297;;
};
unset($x298, $W298, $S298, $U298);
$x299 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'enumerable', 117, 16, '<image>/02_object.js');
$x298 =& $x299[0]; list(,$W298,$S298,$U298) = $x299;
if (JS::toBoolean($x298, $global)) {
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x300 = JS::toNumber($_attrs, $global);
$x301 = JS::toNumber(JS::ENUMERABLE, $global);
if (is_nan($x300)) { $x300 = 0; }
if (is_nan($x301)) { $x301 = 0; }
$x302 = $x300 | $x301;
$_attrs = $x302;;
};
unset($x303, $W303, $S303, $U303);
$x304 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_attributes, (string) 'configurable', 121, 16, '<image>/02_object.js');
$x303 =& $x304[0]; list(,$W303,$S303,$U303) = $x304;
if (JS::toBoolean($x303, $global)) {
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x305 = JS::toNumber($_attrs, $global);
$x306 = JS::toNumber(JS::CONFIGURABLE, $global);
if (is_nan($x305)) { $x305 = 0; }
if (is_nan($x306)) { $x306 = 0; }
$x307 = $x305 | $x306;
$_attrs = $x307;;
};
$_o->attributes[$_p] =$_attrs;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x214=&$scope->properties[\'arguments\'];$x214->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x214->properties[$i]=$args[$i];$x214->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'attributes\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_attributes=&$scope->properties[\'attributes\'];$Uattributes=FALSE;$global->scope[++$global->scope_sp]=$scope;$x216=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x215=$x216;if(!JS::toBoolean($x215,$global)){$x219=$_o;$x219=($x219===JS::$undefined?\'undefined\':(is_int($x219)||is_float($x219)?\'number\':(is_bool($x219)?\'boolean\':(is_string($x219)?\'string\':(is_object($x219)&&isset($x219->call)?\'function\':\'object\')))));$x218=!(((gettype($x219)===gettype(\'object\')&&$x219===\'object\'))||(((is_float($x219)||is_int($x219))&&(is_float(\'object\')||is_int(\'object\')))&&$x219==\'object\'));$x217=$x218;if(JS::toBoolean($x217,$global)){$x221=$_o;$x221=($x221===JS::$undefined?\'undefined\':(is_int($x221)||is_float($x221)?\'number\':(is_bool($x221)?\'boolean\':(is_string($x221)?\'string\':(is_object($x221)&&isset($x221->call)?\'function\':\'object\')))));$x220=!(((gettype($x221)===gettype(\'function\')&&$x221===\'function\'))||(((is_float($x221)||is_int($x221))&&(is_float(\'function\')||is_int(\'function\')))&&$x221==\'function\'));$x217=$x220;}$x215=$x217;}if(JS::toBoolean($x215,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x224=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',80,13,\'<image>/02_object.js\');$_TypeError=&$x224[0];list(,$WTypeError,$STypeError,$UTypeError)=$x224;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x225=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',80,13,\'<image>/02_object.js\');$_ReferenceError=&$x225[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x225;$x226=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,13);$x227=$x226($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x227->class)&&$x227->class===\'Error\'){$x227->properties[\'file\']=\'<image>/02_object.js\';$x227->properties[\'line\']=80;$x227->properties[\'column\']=13;$x227->attributes[\'file\']=$x227->attributes[\'line\']=$x227->attributes[\'column\']=0;}throw new JSException($x227,80,13,\'<image>/02_object.js\');}$x222=clone JS::$objectTemplate;unset($x228,$W228,$S228,$U228);$x229=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',80,9,\'<image>/02_object.js\');$x228=&$x229[0];list(,$W228,$S228,$U228)=$x229;$x223=$x228;$x222->prototype=$x223;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x232=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x233=$x232($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x233->class)&&$x233->class===\'Error\'){$x233->properties[\'file\']=\'<image>/02_object.js\';$x233->properties[\'line\']=80;$x233->properties[\'column\']=9;$x233->attributes[\'file\']=$x233->attributes[\'line\']=$x233->attributes[\'column\']=0;}throw new JSException($x233,80,9,\'<image>/02_object.js\');}$x230=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x231=$x230($global,$x222,$_TypeError,array(\'Object.defineProperty(): Cannot define property on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x223=$x231;if(is_object($x223)&&$x223!==JS::$undefined){$x222=$x223;}if(isset($x222->class)&&$x222->class===\'Error\'){$x222->properties[\'file\']=\'<image>/02_object.js\';$x222->properties[\'line\']=80;$x222->properties[\'column\']=3;$x222->attributes[\'file\']=$x222->attributes[\'line\']=$x222->attributes[\'column\']=0;}throw new JSException($x222,80,3,\'<image>/02_object.js\');}unset($x236,$W236,$S236,$U236);$x237=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'get\',83,16,\'<image>/02_object.js\');$x236=&$x237[0];list(,$W236,$S236,$U236)=$x237;$x235=!(((gettype($x236)===gettype(JS::$undefined)&&$x236===JS::$undefined))||(((is_float($x236)||is_int($x236))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x236==JS::$undefined));$x234=$x235;if(JS::toBoolean($x234,$global)){unset($x239,$W239,$S239,$U239);$x240=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'get\',83,55,\'<image>/02_object.js\');$x239=&$x240[0];list(,$W239,$S239,$U239)=$x240;$x241=$x239;$x241=($x241===JS::$undefined?\'undefined\':(is_int($x241)||is_float($x241)?\'number\':(is_bool($x241)?\'boolean\':(is_string($x241)?\'string\':(is_object($x241)&&isset($x241->call)?\'function\':\'object\')))));$x238=!(((gettype($x241)===gettype(\'function\')&&$x241===\'function\'))||(((is_float($x241)||is_int($x241))&&(is_float(\'function\')||is_int(\'function\')))&&$x241==\'function\'));$x234=$x238;}if(JS::toBoolean($x234,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x244=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',84,13,\'<image>/02_object.js\');$_TypeError=&$x244[0];list(,$WTypeError,$STypeError,$UTypeError)=$x244;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x245=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',84,13,\'<image>/02_object.js\');$_ReferenceError=&$x245[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x245;$x246=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,13);$x247=$x246($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x247->class)&&$x247->class===\'Error\'){$x247->properties[\'file\']=\'<image>/02_object.js\';$x247->properties[\'line\']=84;$x247->properties[\'column\']=13;$x247->attributes[\'file\']=$x247->attributes[\'line\']=$x247->attributes[\'column\']=0;}throw new JSException($x247,84,13,\'<image>/02_object.js\');}$x242=clone JS::$objectTemplate;unset($x248,$W248,$S248,$U248);$x249=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',84,9,\'<image>/02_object.js\');$x248=&$x249[0];list(,$W248,$S248,$U248)=$x249;$x243=$x248;$x242->prototype=$x243;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x252=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x253=$x252($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x253->class)&&$x253->class===\'Error\'){$x253->properties[\'file\']=\'<image>/02_object.js\';$x253->properties[\'line\']=84;$x253->properties[\'column\']=9;$x253->attributes[\'file\']=$x253->attributes[\'line\']=$x253->attributes[\'column\']=0;}throw new JSException($x253,84,9,\'<image>/02_object.js\');}$x250=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x251=$x250($global,$x242,$_TypeError,array(\'Object.defineProperty(): Given getter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x243=$x251;if(is_object($x243)&&$x243!==JS::$undefined){$x242=$x243;}if(isset($x242->class)&&$x242->class===\'Error\'){$x242->properties[\'file\']=\'<image>/02_object.js\';$x242->properties[\'line\']=84;$x242->properties[\'column\']=3;$x242->attributes[\'file\']=$x242->attributes[\'line\']=$x242->attributes[\'column\']=0;}throw new JSException($x242,84,3,\'<image>/02_object.js\');}unset($x256,$W256,$S256,$U256);$x257=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'set\',87,16,\'<image>/02_object.js\');$x256=&$x257[0];list(,$W256,$S256,$U256)=$x257;$x255=!(((gettype($x256)===gettype(JS::$undefined)&&$x256===JS::$undefined))||(((is_float($x256)||is_int($x256))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x256==JS::$undefined));$x254=$x255;if(JS::toBoolean($x254,$global)){unset($x259,$W259,$S259,$U259);$x260=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'set\',87,55,\'<image>/02_object.js\');$x259=&$x260[0];list(,$W259,$S259,$U259)=$x260;$x261=$x259;$x261=($x261===JS::$undefined?\'undefined\':(is_int($x261)||is_float($x261)?\'number\':(is_bool($x261)?\'boolean\':(is_string($x261)?\'string\':(is_object($x261)&&isset($x261->call)?\'function\':\'object\')))));$x258=!(((gettype($x261)===gettype(\'function\')&&$x261===\'function\'))||(((is_float($x261)||is_int($x261))&&(is_float(\'function\')||is_int(\'function\')))&&$x261==\'function\'));$x254=$x258;}if(JS::toBoolean($x254,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x264=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',88,13,\'<image>/02_object.js\');$_TypeError=&$x264[0];list(,$WTypeError,$STypeError,$UTypeError)=$x264;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x265=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',88,13,\'<image>/02_object.js\');$_ReferenceError=&$x265[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x265;$x266=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,13);$x267=$x266($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x267->class)&&$x267->class===\'Error\'){$x267->properties[\'file\']=\'<image>/02_object.js\';$x267->properties[\'line\']=88;$x267->properties[\'column\']=13;$x267->attributes[\'file\']=$x267->attributes[\'line\']=$x267->attributes[\'column\']=0;}throw new JSException($x267,88,13,\'<image>/02_object.js\');}$x262=clone JS::$objectTemplate;unset($x268,$W268,$S268,$U268);$x269=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',88,9,\'<image>/02_object.js\');$x268=&$x269[0];list(,$W268,$S268,$U268)=$x269;$x263=$x268;$x262->prototype=$x263;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x272=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x273=$x272($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x273->class)&&$x273->class===\'Error\'){$x273->properties[\'file\']=\'<image>/02_object.js\';$x273->properties[\'line\']=88;$x273->properties[\'column\']=9;$x273->attributes[\'file\']=$x273->attributes[\'line\']=$x273->attributes[\'column\']=0;}throw new JSException($x273,88,9,\'<image>/02_object.js\');}$x270=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x271=$x270($global,$x262,$_TypeError,array(\'Object.defineProperty(): Given setter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x263=$x271;if(is_object($x263)&&$x263!==JS::$undefined){$x262=$x263;}if(isset($x262->class)&&$x262->class===\'Error\'){$x262->properties[\'file\']=\'<image>/02_object.js\';$x262->properties[\'line\']=88;$x262->properties[\'column\']=3;$x262->attributes[\'file\']=$x262->attributes[\'line\']=$x262->attributes[\'column\']=0;}throw new JSException($x262,88,3,\'<image>/02_object.js\');}$x274=$_attributes;if(!JS::toBoolean($x274,$global)){$x275=clone JS::$objectTemplate;$x274=$x275;}if($Uattributes){$global->properties[\'attributes\']=$_attributes;$_attributes=&$global->properties[\'attributes\'];}$_attributes=$x274;if($Up){$global->properties[\'p\']=$_p;$_p=&$global->properties[\'p\'];}$_p=JS::toString($_p,$global);unset($x277,$W277,$S277,$U277);$x278=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'value\',94,24,\'<image>/02_object.js\');$x277=&$x278[0];list(,$W277,$S277,$U277)=$x278;$x276=$x277;if(!JS::toBoolean($x276,$global)){$x276=JS::$undefined;}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x276;unset($x280,$W280,$S280,$U280);$x281=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'get\',95,19,\'<image>/02_object.js\');$x280=&$x281[0];list(,$W280,$S280,$U280)=$x281;$x279=$x280;if(!JS::toBoolean($x279,$global)){$x279=JS::$undefined;}$scope->properties[\'get\']=JS::$undefined;$_get=&$scope->properties[\'get\'];$Uget=FALSE;$_get=$x279;unset($x283,$W283,$S283,$U283);$x284=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'set\',96,19,\'<image>/02_object.js\');$x283=&$x284[0];list(,$W283,$S283,$U283)=$x284;$x282=$x283;if(!JS::toBoolean($x282,$global)){$x282=JS::$undefined;}$scope->properties[\'set\']=JS::$undefined;$_set=&$scope->properties[\'set\'];$Uset=FALSE;$_set=$x282;$scope->properties[\'attrs\']=JS::$undefined;$_attrs=&$scope->properties[\'attrs\'];$Uattrs=FALSE;$_attrs=0;$x286=$_value;$x286=($x286===JS::$undefined?\'undefined\':(is_int($x286)||is_float($x286)?\'number\':(is_bool($x286)?\'boolean\':(is_string($x286)?\'string\':(is_object($x286)&&isset($x286->call)?\'function\':\'object\')))));$x285=!(((gettype($x286)===gettype(\'undefined\')&&$x286===\'undefined\'))||(((is_float($x286)||is_int($x286))&&(is_float(\'undefined\')||is_int(\'undefined\')))&&$x286==\'undefined\'));if(JS::toBoolean($x285,$global)){$_o->properties[$_p]=$_value;}if(JS::toBoolean($_get,$global)){$_o->getters[$_p]=$_get;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x287=JS::toNumber($_attrs,$global);$x288=JS::toNumber(JS::HAS_GETTER,$global);if(is_nan($x287)){$x287=0;}if(is_nan($x288)){$x288=0;}$x289=$x287|$x288;$_attrs=$x289;}if(JS::toBoolean($_set,$global)){$_o->setters[$_p]=$_set;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x290=JS::toNumber($_attrs,$global);$x291=JS::toNumber(JS::HAS_SETTER,$global);if(is_nan($x290)){$x290=0;}if(is_nan($x291)){$x291=0;}$x292=$x290|$x291;$_attrs=$x292;}unset($x293,$W293,$S293,$U293);$x294=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'writable\',113,16,\'<image>/02_object.js\');$x293=&$x294[0];list(,$W293,$S293,$U293)=$x294;if(JS::toBoolean($x293,$global)){if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x295=JS::toNumber($_attrs,$global);$x296=JS::toNumber(JS::WRITABLE,$global);if(is_nan($x295)){$x295=0;}if(is_nan($x296)){$x296=0;}$x297=$x295|$x296;$_attrs=$x297;}unset($x298,$W298,$S298,$U298);$x299=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'enumerable\',117,16,\'<image>/02_object.js\');$x298=&$x299[0];list(,$W298,$S298,$U298)=$x299;if(JS::toBoolean($x298,$global)){if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x300=JS::toNumber($_attrs,$global);$x301=JS::toNumber(JS::ENUMERABLE,$global);if(is_nan($x300)){$x300=0;}if(is_nan($x301)){$x301=0;}$x302=$x300|$x301;$_attrs=$x302;}unset($x303,$W303,$S303,$U303);$x304=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_attributes,(string)\'configurable\',121,16,\'<image>/02_object.js\');$x303=&$x304[0];list(,$W303,$S303,$U303)=$x304;if(JS::toBoolean($x303,$global)){if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x305=JS::toNumber($_attrs,$global);$x306=JS::toNumber(JS::CONFIGURABLE,$global);if(is_nan($x305)){$x305=0;}if(is_nan($x306)){$x306=0;}$x307=$x305|$x306;$_attrs=$x307;}$_o->attributes[$_p]=$_attrs;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x318 =& $scope->properties['arguments'];
$x318->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x318->properties[$i] = $args[$i];
$x318->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x320 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x319 = $x320;
if (!JS::toBoolean($x319, $global)) {
$x323 = $_o;
$x323 = ($x323 === JS::$undefined ? 'undefined' : (is_int($x323) || is_float($x323) ? 'number' : (is_bool($x323) ? 'boolean' : (is_string($x323) ? 'string' : (is_object($x323) && isset($x323->call) ? 'function' : 'object')))));
$x322 = !(((gettype($x323) === gettype('object') && $x323 === 'object'))|| (((is_float($x323) || is_int($x323)) && (is_float('object') || is_int('object'))) && $x323 == 'object'));
$x321 = $x322;
if (JS::toBoolean($x321, $global)) {
$x325 = $_o;
$x325 = ($x325 === JS::$undefined ? 'undefined' : (is_int($x325) || is_float($x325) ? 'number' : (is_bool($x325) ? 'boolean' : (is_string($x325) ? 'string' : (is_object($x325) && isset($x325->call) ? 'function' : 'object')))));
$x324 = !(((gettype($x325) === gettype('function') && $x325 === 'function'))|| (((is_float($x325) || is_int($x325)) && (is_float('function') || is_int('function'))) && $x325 == 'function'));
$x321 = $x324; }
$x319 = $x321; }
if (JS::toBoolean($x319, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x328 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 132, 13, '<image>/02_object.js');
$_TypeError =& $x328[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x328;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x329 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 132, 13, '<image>/02_object.js');
$_ReferenceError =& $x329[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x329;
$x330 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 13);
$x331 = $x330($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x331->class) && $x331->class === 'Error') {$x331->properties['file'] = '<image>/02_object.js';$x331->properties['line'] = 132;$x331->properties['column'] = 13;$x331->attributes['file'] = $x331->attributes['line'] = $x331->attributes['column'] = 0; }
throw new JSException($x331, 132, 13, '<image>/02_object.js');
}
$x326 = clone JS::$objectTemplate;
unset($x332, $W332, $S332, $U332);
$x333 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 132, 9, '<image>/02_object.js');
$x332 =& $x333[0]; list(,$W332,$S332,$U332) = $x333;
$x327 = $x332;
$x326->prototype = $x327;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x336 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x337 = $x336($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x337->class) && $x337->class === 'Error') {$x337->properties['file'] = '<image>/02_object.js';$x337->properties['line'] = 132;$x337->properties['column'] = 9;$x337->attributes['file'] = $x337->attributes['line'] = $x337->attributes['column'] = 0; }
throw new JSException($x337, 132, 9, '<image>/02_object.js');
}
$x334 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x335 = $x334($global, $x326, $_TypeError, array('Object.defineProperties(): Cannot define properties on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x327 = $x335;
if (is_object($x327) && $x327 !== JS::$undefined) { $x326 = $x327; }
if (isset($x326->class) && $x326->class === 'Error') {$x326->properties['file'] = '<image>/02_object.js';$x326->properties['line'] = 132;$x326->properties['column'] = 3;$x326->attributes['file'] = $x326->attributes['line'] = $x326->attributes['column'] = 0; }
throw new JSException($x326, 132, 3, '<image>/02_object.js');;
};
$x339 = $_properties;
$x339 = ($x339 === JS::$undefined ? 'undefined' : (is_int($x339) || is_float($x339) ? 'number' : (is_bool($x339) ? 'boolean' : (is_string($x339) ? 'string' : (is_object($x339) && isset($x339->call) ? 'function' : 'object')))));
$x338 = !(((gettype($x339) === gettype('object') && $x339 === 'object'))|| (((is_float($x339) || is_int($x339)) && (is_float('object') || is_int('object'))) && $x339 == 'object'));
if (JS::toBoolean($x338, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x342 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 136, 13, '<image>/02_object.js');
$_TypeError =& $x342[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x342;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x343 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 136, 13, '<image>/02_object.js');
$_ReferenceError =& $x343[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x343;
$x344 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 13);
$x345 = $x344($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x345->class) && $x345->class === 'Error') {$x345->properties['file'] = '<image>/02_object.js';$x345->properties['line'] = 136;$x345->properties['column'] = 13;$x345->attributes['file'] = $x345->attributes['line'] = $x345->attributes['column'] = 0; }
throw new JSException($x345, 136, 13, '<image>/02_object.js');
}
$x340 = clone JS::$objectTemplate;
unset($x346, $W346, $S346, $U346);
$x347 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 136, 9, '<image>/02_object.js');
$x346 =& $x347[0]; list(,$W346,$S346,$U346) = $x347;
$x341 = $x346;
$x340->prototype = $x341;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x350 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x351 = $x350($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x351->class) && $x351->class === 'Error') {$x351->properties['file'] = '<image>/02_object.js';$x351->properties['line'] = 136;$x351->properties['column'] = 9;$x351->attributes['file'] = $x351->attributes['line'] = $x351->attributes['column'] = 0; }
throw new JSException($x351, 136, 9, '<image>/02_object.js');
}
$x348 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x349 = $x348($global, $x340, $_TypeError, array('Object.defineProperties(): Given properties argument is not an object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x341 = $x349;
if (is_object($x341) && $x341 !== JS::$undefined) { $x340 = $x341; }
if (isset($x340->class) && $x340->class === 'Error') {$x340->properties['file'] = '<image>/02_object.js';$x340->properties['line'] = 136;$x340->properties['column'] = 3;$x340->attributes['file'] = $x340->attributes['line'] = $x340->attributes['column'] = 0; }
throw new JSException($x340, 136, 3, '<image>/02_object.js');;
};
$scope->properties['p'] = JS::$undefined; $_p =& $scope->properties['p'];
$Up = FALSE;
$_p = JS::$undefined;
if ($_properties !== JS::$undefined && $_properties !== NULL) {
for ($x352 = JS::toObject($_properties, $global); $x352; $x352 = $x352->prototype) {
foreach ($x352->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE)) { continue; }
$_p = $property;

unset($_Object, $WObject, $SObject, $UObject);
$x353 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'Object', 140, 3, '<image>/02_object.js');
$_Object =& $x353[0]; list(,$WObject,$SObject,$UObject) = $x353;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x354 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 140, 3, '<image>/02_object.js');
$_ReferenceError =& $x354[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x354;
$x355 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 3);
$x356 = $x355($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x356->class) && $x356->class === 'Error') {$x356->properties['file'] = '<image>/02_object.js';$x356->properties['line'] = 140;$x356->properties['column'] = 3;$x356->attributes['file'] = $x356->attributes['line'] = $x356->attributes['column'] = 0; }
throw new JSException($x356, 140, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x358 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x358[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x358;
$x359 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x360 = $x359($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x360->class) && $x360->class === 'Error') {$x360->properties['file'] = '<image>/02_object.js';$x360->properties['line'] = 140;$x360->properties['column'] = 24;$x360->attributes['file'] = $x360->attributes['line'] = $x360->attributes['column'] = 0; }
throw new JSException($x360, 140, 24, '<image>/02_object.js');
}
$x357 = JS::toObject($_Object, $global);
unset($x361, $W361, $S361, $U361);
$x362 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x357, (string) 'defineProperty', 140, 24, '<image>/02_object.js');
$x361 =& $x362[0]; list(,$W361,$S361,$U361) = $x362;
unset($x363, $W363, $S363, $U363);
$x364 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_properties, (string) $_p, 140, 41, '<image>/02_object.js');
$x363 =& $x364[0]; list(,$W363,$S363,$U363) = $x364;
if (!(is_object($x361) && isset($x361->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x367 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x367[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x367;
$x368 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x369 = $x368($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x369->class) && $x369->class === 'Error') {$x369->properties['file'] = '<image>/02_object.js';$x369->properties['line'] = 140;$x369->properties['column'] = 24;$x369->attributes['file'] = $x369->attributes['line'] = $x369->attributes['column'] = 0; }
throw new JSException($x369, 140, 24, '<image>/02_object.js');
}
$x365 = $x361->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x366 = $x365($global, $x357, $x361, array($_o, $_p, $x363), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x318=&$scope->properties[\'arguments\'];$x318->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x318->properties[$i]=$args[$i];$x318->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x320=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x319=$x320;if(!JS::toBoolean($x319,$global)){$x323=$_o;$x323=($x323===JS::$undefined?\'undefined\':(is_int($x323)||is_float($x323)?\'number\':(is_bool($x323)?\'boolean\':(is_string($x323)?\'string\':(is_object($x323)&&isset($x323->call)?\'function\':\'object\')))));$x322=!(((gettype($x323)===gettype(\'object\')&&$x323===\'object\'))||(((is_float($x323)||is_int($x323))&&(is_float(\'object\')||is_int(\'object\')))&&$x323==\'object\'));$x321=$x322;if(JS::toBoolean($x321,$global)){$x325=$_o;$x325=($x325===JS::$undefined?\'undefined\':(is_int($x325)||is_float($x325)?\'number\':(is_bool($x325)?\'boolean\':(is_string($x325)?\'string\':(is_object($x325)&&isset($x325->call)?\'function\':\'object\')))));$x324=!(((gettype($x325)===gettype(\'function\')&&$x325===\'function\'))||(((is_float($x325)||is_int($x325))&&(is_float(\'function\')||is_int(\'function\')))&&$x325==\'function\'));$x321=$x324;}$x319=$x321;}if(JS::toBoolean($x319,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x328=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',132,13,\'<image>/02_object.js\');$_TypeError=&$x328[0];list(,$WTypeError,$STypeError,$UTypeError)=$x328;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x329=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',132,13,\'<image>/02_object.js\');$_ReferenceError=&$x329[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x329;$x330=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,13);$x331=$x330($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x331->class)&&$x331->class===\'Error\'){$x331->properties[\'file\']=\'<image>/02_object.js\';$x331->properties[\'line\']=132;$x331->properties[\'column\']=13;$x331->attributes[\'file\']=$x331->attributes[\'line\']=$x331->attributes[\'column\']=0;}throw new JSException($x331,132,13,\'<image>/02_object.js\');}$x326=clone JS::$objectTemplate;unset($x332,$W332,$S332,$U332);$x333=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',132,9,\'<image>/02_object.js\');$x332=&$x333[0];list(,$W332,$S332,$U332)=$x333;$x327=$x332;$x326->prototype=$x327;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x336=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x337=$x336($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x337->class)&&$x337->class===\'Error\'){$x337->properties[\'file\']=\'<image>/02_object.js\';$x337->properties[\'line\']=132;$x337->properties[\'column\']=9;$x337->attributes[\'file\']=$x337->attributes[\'line\']=$x337->attributes[\'column\']=0;}throw new JSException($x337,132,9,\'<image>/02_object.js\');}$x334=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x335=$x334($global,$x326,$_TypeError,array(\'Object.defineProperties(): Cannot define properties on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x327=$x335;if(is_object($x327)&&$x327!==JS::$undefined){$x326=$x327;}if(isset($x326->class)&&$x326->class===\'Error\'){$x326->properties[\'file\']=\'<image>/02_object.js\';$x326->properties[\'line\']=132;$x326->properties[\'column\']=3;$x326->attributes[\'file\']=$x326->attributes[\'line\']=$x326->attributes[\'column\']=0;}throw new JSException($x326,132,3,\'<image>/02_object.js\');}$x339=$_properties;$x339=($x339===JS::$undefined?\'undefined\':(is_int($x339)||is_float($x339)?\'number\':(is_bool($x339)?\'boolean\':(is_string($x339)?\'string\':(is_object($x339)&&isset($x339->call)?\'function\':\'object\')))));$x338=!(((gettype($x339)===gettype(\'object\')&&$x339===\'object\'))||(((is_float($x339)||is_int($x339))&&(is_float(\'object\')||is_int(\'object\')))&&$x339==\'object\'));if(JS::toBoolean($x338,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x342=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',136,13,\'<image>/02_object.js\');$_TypeError=&$x342[0];list(,$WTypeError,$STypeError,$UTypeError)=$x342;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x343=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',136,13,\'<image>/02_object.js\');$_ReferenceError=&$x343[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x343;$x344=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,13);$x345=$x344($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x345->class)&&$x345->class===\'Error\'){$x345->properties[\'file\']=\'<image>/02_object.js\';$x345->properties[\'line\']=136;$x345->properties[\'column\']=13;$x345->attributes[\'file\']=$x345->attributes[\'line\']=$x345->attributes[\'column\']=0;}throw new JSException($x345,136,13,\'<image>/02_object.js\');}$x340=clone JS::$objectTemplate;unset($x346,$W346,$S346,$U346);$x347=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',136,9,\'<image>/02_object.js\');$x346=&$x347[0];list(,$W346,$S346,$U346)=$x347;$x341=$x346;$x340->prototype=$x341;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x350=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x351=$x350($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x351->class)&&$x351->class===\'Error\'){$x351->properties[\'file\']=\'<image>/02_object.js\';$x351->properties[\'line\']=136;$x351->properties[\'column\']=9;$x351->attributes[\'file\']=$x351->attributes[\'line\']=$x351->attributes[\'column\']=0;}throw new JSException($x351,136,9,\'<image>/02_object.js\');}$x348=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x349=$x348($global,$x340,$_TypeError,array(\'Object.defineProperties(): Given properties argument is not an object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x341=$x349;if(is_object($x341)&&$x341!==JS::$undefined){$x340=$x341;}if(isset($x340->class)&&$x340->class===\'Error\'){$x340->properties[\'file\']=\'<image>/02_object.js\';$x340->properties[\'line\']=136;$x340->properties[\'column\']=3;$x340->attributes[\'file\']=$x340->attributes[\'line\']=$x340->attributes[\'column\']=0;}throw new JSException($x340,136,3,\'<image>/02_object.js\');}$scope->properties[\'p\']=JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$_p=JS::$undefined;if($_properties!==JS::$undefined&&$_properties!==NULL){for($x352=JS::toObject($_properties,$global);$x352;$x352=$x352->prototype){foreach($x352->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)){continue;}$_p=$property;unset($_Object,$WObject,$SObject,$UObject);$x353=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'Object\',140,3,\'<image>/02_object.js\');$_Object=&$x353[0];list(,$WObject,$SObject,$UObject)=$x353;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x354=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',140,3,\'<image>/02_object.js\');$_ReferenceError=&$x354[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x354;$x355=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,3);$x356=$x355($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x356->class)&&$x356->class===\'Error\'){$x356->properties[\'file\']=\'<image>/02_object.js\';$x356->properties[\'line\']=140;$x356->properties[\'column\']=3;$x356->attributes[\'file\']=$x356->attributes[\'line\']=$x356->attributes[\'column\']=0;}throw new JSException($x356,140,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x358=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x358[0];list(,$WTypeError,$STypeError,$UTypeError)=$x358;$x359=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x360=$x359($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x360->class)&&$x360->class===\'Error\'){$x360->properties[\'file\']=\'<image>/02_object.js\';$x360->properties[\'line\']=140;$x360->properties[\'column\']=24;$x360->attributes[\'file\']=$x360->attributes[\'line\']=$x360->attributes[\'column\']=0;}throw new JSException($x360,140,24,\'<image>/02_object.js\');}$x357=JS::toObject($_Object,$global);unset($x361,$W361,$S361,$U361);$x362=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x357,(string)\'defineProperty\',140,24,\'<image>/02_object.js\');$x361=&$x362[0];list(,$W361,$S361,$U361)=$x362;unset($x363,$W363,$S363,$U363);$x364=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_properties,(string)$_p,140,41,\'<image>/02_object.js\');$x363=&$x364[0];list(,$W363,$S363,$U363)=$x364;if(!(is_object($x361)&&isset($x361->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x367=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x367[0];list(,$WTypeError,$STypeError,$UTypeError)=$x367;$x368=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x369=$x368($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x369->class)&&$x369->class===\'Error\'){$x369->properties[\'file\']=\'<image>/02_object.js\';$x369->properties[\'line\']=140;$x369->properties[\'column\']=24;$x369->attributes[\'file\']=$x369->attributes[\'line\']=$x369->attributes[\'column\']=0;}throw new JSException($x369,140,24,\'<image>/02_object.js\');}$x365=$x361->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x366=$x365($global,$x357,$x361,array($_o,$_p,$x363),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x380 =& $scope->properties['arguments'];
$x380->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x380->properties[$i] = $args[$i];
$x380->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x382 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x381 = $x382;
if (!JS::toBoolean($x381, $global)) {
$x385 = $_o;
$x385 = ($x385 === JS::$undefined ? 'undefined' : (is_int($x385) || is_float($x385) ? 'number' : (is_bool($x385) ? 'boolean' : (is_string($x385) ? 'string' : (is_object($x385) && isset($x385->call) ? 'function' : 'object')))));
$x384 = !(((gettype($x385) === gettype('object') && $x385 === 'object'))|| (((is_float($x385) || is_int($x385)) && (is_float('object') || is_int('object'))) && $x385 == 'object'));
$x383 = $x384;
if (JS::toBoolean($x383, $global)) {
$x387 = $_o;
$x387 = ($x387 === JS::$undefined ? 'undefined' : (is_int($x387) || is_float($x387) ? 'number' : (is_bool($x387) ? 'boolean' : (is_string($x387) ? 'string' : (is_object($x387) && isset($x387->call) ? 'function' : 'object')))));
$x386 = !(((gettype($x387) === gettype('function') && $x387 === 'function'))|| (((is_float($x387) || is_int($x387)) && (is_float('function') || is_int('function'))) && $x387 == 'function'));
$x383 = $x386; }
$x381 = $x383; }
if (JS::toBoolean($x381, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x390 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 148, 13, '<image>/02_object.js');
$_TypeError =& $x390[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x390;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x391 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 148, 13, '<image>/02_object.js');
$_ReferenceError =& $x391[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x391;
$x392 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 13);
$x393 = $x392($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x393->class) && $x393->class === 'Error') {$x393->properties['file'] = '<image>/02_object.js';$x393->properties['line'] = 148;$x393->properties['column'] = 13;$x393->attributes['file'] = $x393->attributes['line'] = $x393->attributes['column'] = 0; }
throw new JSException($x393, 148, 13, '<image>/02_object.js');
}
$x388 = clone JS::$objectTemplate;
unset($x394, $W394, $S394, $U394);
$x395 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 148, 9, '<image>/02_object.js');
$x394 =& $x395[0]; list(,$W394,$S394,$U394) = $x395;
$x389 = $x394;
$x388->prototype = $x389;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x398 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x399 = $x398($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x399->class) && $x399->class === 'Error') {$x399->properties['file'] = '<image>/02_object.js';$x399->properties['line'] = 148;$x399->properties['column'] = 9;$x399->attributes['file'] = $x399->attributes['line'] = $x399->attributes['column'] = 0; }
throw new JSException($x399, 148, 9, '<image>/02_object.js');
}
$x396 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x397 = $x396($global, $x388, $_TypeError, array('Object.seal(): Cannot seal non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x389 = $x397;
if (is_object($x389) && $x389 !== JS::$undefined) { $x388 = $x389; }
if (isset($x388->class) && $x388->class === 'Error') {$x388->properties['file'] = '<image>/02_object.js';$x388->properties['line'] = 148;$x388->properties['column'] = 3;$x388->attributes['file'] = $x388->attributes['line'] = $x388->attributes['column'] = 0; }
throw new JSException($x388, 148, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x380=&$scope->properties[\'arguments\'];$x380->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x380->properties[$i]=$args[$i];$x380->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x382=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x381=$x382;if(!JS::toBoolean($x381,$global)){$x385=$_o;$x385=($x385===JS::$undefined?\'undefined\':(is_int($x385)||is_float($x385)?\'number\':(is_bool($x385)?\'boolean\':(is_string($x385)?\'string\':(is_object($x385)&&isset($x385->call)?\'function\':\'object\')))));$x384=!(((gettype($x385)===gettype(\'object\')&&$x385===\'object\'))||(((is_float($x385)||is_int($x385))&&(is_float(\'object\')||is_int(\'object\')))&&$x385==\'object\'));$x383=$x384;if(JS::toBoolean($x383,$global)){$x387=$_o;$x387=($x387===JS::$undefined?\'undefined\':(is_int($x387)||is_float($x387)?\'number\':(is_bool($x387)?\'boolean\':(is_string($x387)?\'string\':(is_object($x387)&&isset($x387->call)?\'function\':\'object\')))));$x386=!(((gettype($x387)===gettype(\'function\')&&$x387===\'function\'))||(((is_float($x387)||is_int($x387))&&(is_float(\'function\')||is_int(\'function\')))&&$x387==\'function\'));$x383=$x386;}$x381=$x383;}if(JS::toBoolean($x381,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x390=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',148,13,\'<image>/02_object.js\');$_TypeError=&$x390[0];list(,$WTypeError,$STypeError,$UTypeError)=$x390;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x391=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',148,13,\'<image>/02_object.js\');$_ReferenceError=&$x391[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x391;$x392=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,13);$x393=$x392($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x393->class)&&$x393->class===\'Error\'){$x393->properties[\'file\']=\'<image>/02_object.js\';$x393->properties[\'line\']=148;$x393->properties[\'column\']=13;$x393->attributes[\'file\']=$x393->attributes[\'line\']=$x393->attributes[\'column\']=0;}throw new JSException($x393,148,13,\'<image>/02_object.js\');}$x388=clone JS::$objectTemplate;unset($x394,$W394,$S394,$U394);$x395=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',148,9,\'<image>/02_object.js\');$x394=&$x395[0];list(,$W394,$S394,$U394)=$x395;$x389=$x394;$x388->prototype=$x389;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x398=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x399=$x398($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x399->class)&&$x399->class===\'Error\'){$x399->properties[\'file\']=\'<image>/02_object.js\';$x399->properties[\'line\']=148;$x399->properties[\'column\']=9;$x399->attributes[\'file\']=$x399->attributes[\'line\']=$x399->attributes[\'column\']=0;}throw new JSException($x399,148,9,\'<image>/02_object.js\');}$x396=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x397=$x396($global,$x388,$_TypeError,array(\'Object.seal(): Cannot seal non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x389=$x397;if(is_object($x389)&&$x389!==JS::$undefined){$x388=$x389;}if(isset($x388->class)&&$x388->class===\'Error\'){$x388->properties[\'file\']=\'<image>/02_object.js\';$x388->properties[\'line\']=148;$x388->properties[\'column\']=3;$x388->attributes[\'file\']=$x388->attributes[\'line\']=$x388->attributes[\'column\']=0;}throw new JSException($x388,148,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x410 =& $scope->properties['arguments'];
$x410->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x410->properties[$i] = $args[$i];
$x410->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x412 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x411 = $x412;
if (!JS::toBoolean($x411, $global)) {
$x415 = $_o;
$x415 = ($x415 === JS::$undefined ? 'undefined' : (is_int($x415) || is_float($x415) ? 'number' : (is_bool($x415) ? 'boolean' : (is_string($x415) ? 'string' : (is_object($x415) && isset($x415->call) ? 'function' : 'object')))));
$x414 = !(((gettype($x415) === gettype('object') && $x415 === 'object'))|| (((is_float($x415) || is_int($x415)) && (is_float('object') || is_int('object'))) && $x415 == 'object'));
$x413 = $x414;
if (JS::toBoolean($x413, $global)) {
$x417 = $_o;
$x417 = ($x417 === JS::$undefined ? 'undefined' : (is_int($x417) || is_float($x417) ? 'number' : (is_bool($x417) ? 'boolean' : (is_string($x417) ? 'string' : (is_object($x417) && isset($x417->call) ? 'function' : 'object')))));
$x416 = !(((gettype($x417) === gettype('function') && $x417 === 'function'))|| (((is_float($x417) || is_int($x417)) && (is_float('function') || is_int('function'))) && $x417 == 'function'));
$x413 = $x416; }
$x411 = $x413; }
if (JS::toBoolean($x411, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x420 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 164, 13, '<image>/02_object.js');
$_TypeError =& $x420[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x420;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x421 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 164, 13, '<image>/02_object.js');
$_ReferenceError =& $x421[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x421;
$x422 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 13);
$x423 = $x422($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x423->class) && $x423->class === 'Error') {$x423->properties['file'] = '<image>/02_object.js';$x423->properties['line'] = 164;$x423->properties['column'] = 13;$x423->attributes['file'] = $x423->attributes['line'] = $x423->attributes['column'] = 0; }
throw new JSException($x423, 164, 13, '<image>/02_object.js');
}
$x418 = clone JS::$objectTemplate;
unset($x424, $W424, $S424, $U424);
$x425 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 164, 9, '<image>/02_object.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
$x419 = $x424;
$x418->prototype = $x419;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x428 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x429 = $x428($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x429->class) && $x429->class === 'Error') {$x429->properties['file'] = '<image>/02_object.js';$x429->properties['line'] = 164;$x429->properties['column'] = 9;$x429->attributes['file'] = $x429->attributes['line'] = $x429->attributes['column'] = 0; }
throw new JSException($x429, 164, 9, '<image>/02_object.js');
}
$x426 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x427 = $x426($global, $x418, $_TypeError, array('Object.freeze(): Cannot freeze non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x419 = $x427;
if (is_object($x419) && $x419 !== JS::$undefined) { $x418 = $x419; }
if (isset($x418->class) && $x418->class === 'Error') {$x418->properties['file'] = '<image>/02_object.js';$x418->properties['line'] = 164;$x418->properties['column'] = 3;$x418->attributes['file'] = $x418->attributes['line'] = $x418->attributes['column'] = 0; }
throw new JSException($x418, 164, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::WRITABLE;$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x410=&$scope->properties[\'arguments\'];$x410->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x410->properties[$i]=$args[$i];$x410->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x412=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x411=$x412;if(!JS::toBoolean($x411,$global)){$x415=$_o;$x415=($x415===JS::$undefined?\'undefined\':(is_int($x415)||is_float($x415)?\'number\':(is_bool($x415)?\'boolean\':(is_string($x415)?\'string\':(is_object($x415)&&isset($x415->call)?\'function\':\'object\')))));$x414=!(((gettype($x415)===gettype(\'object\')&&$x415===\'object\'))||(((is_float($x415)||is_int($x415))&&(is_float(\'object\')||is_int(\'object\')))&&$x415==\'object\'));$x413=$x414;if(JS::toBoolean($x413,$global)){$x417=$_o;$x417=($x417===JS::$undefined?\'undefined\':(is_int($x417)||is_float($x417)?\'number\':(is_bool($x417)?\'boolean\':(is_string($x417)?\'string\':(is_object($x417)&&isset($x417->call)?\'function\':\'object\')))));$x416=!(((gettype($x417)===gettype(\'function\')&&$x417===\'function\'))||(((is_float($x417)||is_int($x417))&&(is_float(\'function\')||is_int(\'function\')))&&$x417==\'function\'));$x413=$x416;}$x411=$x413;}if(JS::toBoolean($x411,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x420=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',164,13,\'<image>/02_object.js\');$_TypeError=&$x420[0];list(,$WTypeError,$STypeError,$UTypeError)=$x420;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x421=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',164,13,\'<image>/02_object.js\');$_ReferenceError=&$x421[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x421;$x422=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,13);$x423=$x422($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x423->class)&&$x423->class===\'Error\'){$x423->properties[\'file\']=\'<image>/02_object.js\';$x423->properties[\'line\']=164;$x423->properties[\'column\']=13;$x423->attributes[\'file\']=$x423->attributes[\'line\']=$x423->attributes[\'column\']=0;}throw new JSException($x423,164,13,\'<image>/02_object.js\');}$x418=clone JS::$objectTemplate;unset($x424,$W424,$S424,$U424);$x425=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',164,9,\'<image>/02_object.js\');$x424=&$x425[0];list(,$W424,$S424,$U424)=$x425;$x419=$x424;$x418->prototype=$x419;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x428=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x429=$x428($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x429->class)&&$x429->class===\'Error\'){$x429->properties[\'file\']=\'<image>/02_object.js\';$x429->properties[\'line\']=164;$x429->properties[\'column\']=9;$x429->attributes[\'file\']=$x429->attributes[\'line\']=$x429->attributes[\'column\']=0;}throw new JSException($x429,164,9,\'<image>/02_object.js\');}$x426=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x427=$x426($global,$x418,$_TypeError,array(\'Object.freeze(): Cannot freeze non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x419=$x427;if(is_object($x419)&&$x419!==JS::$undefined){$x418=$x419;}if(isset($x418->class)&&$x418->class===\'Error\'){$x418->properties[\'file\']=\'<image>/02_object.js\';$x418->properties[\'line\']=164;$x418->properties[\'column\']=3;$x418->attributes[\'file\']=$x418->attributes[\'line\']=$x418->attributes[\'column\']=0;}throw new JSException($x418,164,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::WRITABLE;$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x440 =& $scope->properties['arguments'];
$x440->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x440->properties[$i] = $args[$i];
$x440->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x442 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x441 = $x442;
if (!JS::toBoolean($x441, $global)) {
$x445 = $_o;
$x445 = ($x445 === JS::$undefined ? 'undefined' : (is_int($x445) || is_float($x445) ? 'number' : (is_bool($x445) ? 'boolean' : (is_string($x445) ? 'string' : (is_object($x445) && isset($x445->call) ? 'function' : 'object')))));
$x444 = !(((gettype($x445) === gettype('object') && $x445 === 'object'))|| (((is_float($x445) || is_int($x445)) && (is_float('object') || is_int('object'))) && $x445 == 'object'));
$x443 = $x444;
if (JS::toBoolean($x443, $global)) {
$x447 = $_o;
$x447 = ($x447 === JS::$undefined ? 'undefined' : (is_int($x447) || is_float($x447) ? 'number' : (is_bool($x447) ? 'boolean' : (is_string($x447) ? 'string' : (is_object($x447) && isset($x447->call) ? 'function' : 'object')))));
$x446 = !(((gettype($x447) === gettype('function') && $x447 === 'function'))|| (((is_float($x447) || is_int($x447)) && (is_float('function') || is_int('function'))) && $x447 == 'function'));
$x443 = $x446; }
$x441 = $x443; }
if (JS::toBoolean($x441, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x450 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 181, 13, '<image>/02_object.js');
$_TypeError =& $x450[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x450;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x451 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 181, 13, '<image>/02_object.js');
$_ReferenceError =& $x451[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x451;
$x452 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 13);
$x453 = $x452($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x453->class) && $x453->class === 'Error') {$x453->properties['file'] = '<image>/02_object.js';$x453->properties['line'] = 181;$x453->properties['column'] = 13;$x453->attributes['file'] = $x453->attributes['line'] = $x453->attributes['column'] = 0; }
throw new JSException($x453, 181, 13, '<image>/02_object.js');
}
$x448 = clone JS::$objectTemplate;
unset($x454, $W454, $S454, $U454);
$x455 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 181, 9, '<image>/02_object.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
$x449 = $x454;
$x448->prototype = $x449;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x458 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x459 = $x458($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x459->class) && $x459->class === 'Error') {$x459->properties['file'] = '<image>/02_object.js';$x459->properties['line'] = 181;$x459->properties['column'] = 9;$x459->attributes['file'] = $x459->attributes['line'] = $x459->attributes['column'] = 0; }
throw new JSException($x459, 181, 9, '<image>/02_object.js');
}
$x456 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x457 = $x456($global, $x448, $_TypeError, array('Object.preventExtensions(): Cannot prevent extensions on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x449 = $x457;
if (is_object($x449) && $x449 !== JS::$undefined) { $x448 = $x449; }
if (isset($x448->class) && $x448->class === 'Error') {$x448->properties['file'] = '<image>/02_object.js';$x448->properties['line'] = 181;$x448->properties['column'] = 3;$x448->attributes['file'] = $x448->attributes['line'] = $x448->attributes['column'] = 0; }
throw new JSException($x448, 181, 3, '<image>/02_object.js');;
};
$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x440=&$scope->properties[\'arguments\'];$x440->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x440->properties[$i]=$args[$i];$x440->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x442=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x441=$x442;if(!JS::toBoolean($x441,$global)){$x445=$_o;$x445=($x445===JS::$undefined?\'undefined\':(is_int($x445)||is_float($x445)?\'number\':(is_bool($x445)?\'boolean\':(is_string($x445)?\'string\':(is_object($x445)&&isset($x445->call)?\'function\':\'object\')))));$x444=!(((gettype($x445)===gettype(\'object\')&&$x445===\'object\'))||(((is_float($x445)||is_int($x445))&&(is_float(\'object\')||is_int(\'object\')))&&$x445==\'object\'));$x443=$x444;if(JS::toBoolean($x443,$global)){$x447=$_o;$x447=($x447===JS::$undefined?\'undefined\':(is_int($x447)||is_float($x447)?\'number\':(is_bool($x447)?\'boolean\':(is_string($x447)?\'string\':(is_object($x447)&&isset($x447->call)?\'function\':\'object\')))));$x446=!(((gettype($x447)===gettype(\'function\')&&$x447===\'function\'))||(((is_float($x447)||is_int($x447))&&(is_float(\'function\')||is_int(\'function\')))&&$x447==\'function\'));$x443=$x446;}$x441=$x443;}if(JS::toBoolean($x441,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x450=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',181,13,\'<image>/02_object.js\');$_TypeError=&$x450[0];list(,$WTypeError,$STypeError,$UTypeError)=$x450;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x451=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',181,13,\'<image>/02_object.js\');$_ReferenceError=&$x451[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x451;$x452=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,13);$x453=$x452($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x453->class)&&$x453->class===\'Error\'){$x453->properties[\'file\']=\'<image>/02_object.js\';$x453->properties[\'line\']=181;$x453->properties[\'column\']=13;$x453->attributes[\'file\']=$x453->attributes[\'line\']=$x453->attributes[\'column\']=0;}throw new JSException($x453,181,13,\'<image>/02_object.js\');}$x448=clone JS::$objectTemplate;unset($x454,$W454,$S454,$U454);$x455=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',181,9,\'<image>/02_object.js\');$x454=&$x455[0];list(,$W454,$S454,$U454)=$x455;$x449=$x454;$x448->prototype=$x449;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x458=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x459=$x458($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x459->class)&&$x459->class===\'Error\'){$x459->properties[\'file\']=\'<image>/02_object.js\';$x459->properties[\'line\']=181;$x459->properties[\'column\']=9;$x459->attributes[\'file\']=$x459->attributes[\'line\']=$x459->attributes[\'column\']=0;}throw new JSException($x459,181,9,\'<image>/02_object.js\');}$x456=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x457=$x456($global,$x448,$_TypeError,array(\'Object.preventExtensions(): Cannot prevent extensions on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x449=$x457;if(is_object($x449)&&$x449!==JS::$undefined){$x448=$x449;}if(isset($x448->class)&&$x448->class===\'Error\'){$x448->properties[\'file\']=\'<image>/02_object.js\';$x448->properties[\'line\']=181;$x448->properties[\'column\']=3;$x448->attributes[\'file\']=$x448->attributes[\'line\']=$x448->attributes[\'column\']=0;}throw new JSException($x448,181,3,\'<image>/02_object.js\');}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x470 =& $scope->properties['arguments'];
$x470->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x470->properties[$i] = $args[$i];
$x470->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x472 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x471 = $x472;
if (!JS::toBoolean($x471, $global)) {
$x475 = $_o;
$x475 = ($x475 === JS::$undefined ? 'undefined' : (is_int($x475) || is_float($x475) ? 'number' : (is_bool($x475) ? 'boolean' : (is_string($x475) ? 'string' : (is_object($x475) && isset($x475->call) ? 'function' : 'object')))));
$x474 = !(((gettype($x475) === gettype('object') && $x475 === 'object'))|| (((is_float($x475) || is_int($x475)) && (is_float('object') || is_int('object'))) && $x475 == 'object'));
$x473 = $x474;
if (JS::toBoolean($x473, $global)) {
$x477 = $_o;
$x477 = ($x477 === JS::$undefined ? 'undefined' : (is_int($x477) || is_float($x477) ? 'number' : (is_bool($x477) ? 'boolean' : (is_string($x477) ? 'string' : (is_object($x477) && isset($x477->call) ? 'function' : 'object')))));
$x476 = !(((gettype($x477) === gettype('function') && $x477 === 'function'))|| (((is_float($x477) || is_int($x477)) && (is_float('function') || is_int('function'))) && $x477 == 'function'));
$x473 = $x476; }
$x471 = $x473; }
if (JS::toBoolean($x471, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x480 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 191, 13, '<image>/02_object.js');
$_TypeError =& $x480[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x480;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x481 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 191, 13, '<image>/02_object.js');
$_ReferenceError =& $x481[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x481;
$x482 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 13);
$x483 = $x482($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x483->class) && $x483->class === 'Error') {$x483->properties['file'] = '<image>/02_object.js';$x483->properties['line'] = 191;$x483->properties['column'] = 13;$x483->attributes['file'] = $x483->attributes['line'] = $x483->attributes['column'] = 0; }
throw new JSException($x483, 191, 13, '<image>/02_object.js');
}
$x478 = clone JS::$objectTemplate;
unset($x484, $W484, $S484, $U484);
$x485 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 191, 9, '<image>/02_object.js');
$x484 =& $x485[0]; list(,$W484,$S484,$U484) = $x485;
$x479 = $x484;
$x478->prototype = $x479;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x488 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x489 = $x488($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x489->class) && $x489->class === 'Error') {$x489->properties['file'] = '<image>/02_object.js';$x489->properties['line'] = 191;$x489->properties['column'] = 9;$x489->attributes['file'] = $x489->attributes['line'] = $x489->attributes['column'] = 0; }
throw new JSException($x489, 191, 9, '<image>/02_object.js');
}
$x486 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x487 = $x486($global, $x478, $_TypeError, array('Object.isSealed(): Cannot return if sealed, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x479 = $x487;
if (is_object($x479) && $x479 !== JS::$undefined) { $x478 = $x479; }
if (isset($x478->class) && $x478->class === 'Error') {$x478->properties['file'] = '<image>/02_object.js';$x478->properties['line'] = 191;$x478->properties['column'] = 3;$x478->attributes['file'] = $x478->attributes['line'] = $x478->attributes['column'] = 0; }
throw new JSException($x478, 191, 3, '<image>/02_object.js');;
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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x470=&$scope->properties[\'arguments\'];$x470->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x470->properties[$i]=$args[$i];$x470->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x472=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x471=$x472;if(!JS::toBoolean($x471,$global)){$x475=$_o;$x475=($x475===JS::$undefined?\'undefined\':(is_int($x475)||is_float($x475)?\'number\':(is_bool($x475)?\'boolean\':(is_string($x475)?\'string\':(is_object($x475)&&isset($x475->call)?\'function\':\'object\')))));$x474=!(((gettype($x475)===gettype(\'object\')&&$x475===\'object\'))||(((is_float($x475)||is_int($x475))&&(is_float(\'object\')||is_int(\'object\')))&&$x475==\'object\'));$x473=$x474;if(JS::toBoolean($x473,$global)){$x477=$_o;$x477=($x477===JS::$undefined?\'undefined\':(is_int($x477)||is_float($x477)?\'number\':(is_bool($x477)?\'boolean\':(is_string($x477)?\'string\':(is_object($x477)&&isset($x477->call)?\'function\':\'object\')))));$x476=!(((gettype($x477)===gettype(\'function\')&&$x477===\'function\'))||(((is_float($x477)||is_int($x477))&&(is_float(\'function\')||is_int(\'function\')))&&$x477==\'function\'));$x473=$x476;}$x471=$x473;}if(JS::toBoolean($x471,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x480=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',191,13,\'<image>/02_object.js\');$_TypeError=&$x480[0];list(,$WTypeError,$STypeError,$UTypeError)=$x480;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x481=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',191,13,\'<image>/02_object.js\');$_ReferenceError=&$x481[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x481;$x482=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,13);$x483=$x482($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x483->class)&&$x483->class===\'Error\'){$x483->properties[\'file\']=\'<image>/02_object.js\';$x483->properties[\'line\']=191;$x483->properties[\'column\']=13;$x483->attributes[\'file\']=$x483->attributes[\'line\']=$x483->attributes[\'column\']=0;}throw new JSException($x483,191,13,\'<image>/02_object.js\');}$x478=clone JS::$objectTemplate;unset($x484,$W484,$S484,$U484);$x485=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',191,9,\'<image>/02_object.js\');$x484=&$x485[0];list(,$W484,$S484,$U484)=$x485;$x479=$x484;$x478->prototype=$x479;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x488=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x489=$x488($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x489->class)&&$x489->class===\'Error\'){$x489->properties[\'file\']=\'<image>/02_object.js\';$x489->properties[\'line\']=191;$x489->properties[\'column\']=9;$x489->attributes[\'file\']=$x489->attributes[\'line\']=$x489->attributes[\'column\']=0;}throw new JSException($x489,191,9,\'<image>/02_object.js\');}$x486=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x487=$x486($global,$x478,$_TypeError,array(\'Object.isSealed(): Cannot return if sealed, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x479=$x487;if(is_object($x479)&&$x479!==JS::$undefined){$x478=$x479;}if(isset($x478->class)&&$x478->class===\'Error\'){$x478->properties[\'file\']=\'<image>/02_object.js\';$x478->properties[\'line\']=191;$x478->properties[\'column\']=3;$x478->attributes[\'file\']=$x478->attributes[\'line\']=$x478->attributes[\'column\']=0;}throw new JSException($x478,191,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&JS::CONFIGURABLE){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x500 =& $scope->properties['arguments'];
$x500->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x500->properties[$i] = $args[$i];
$x500->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x502 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x501 = $x502;
if (!JS::toBoolean($x501, $global)) {
$x505 = $_o;
$x505 = ($x505 === JS::$undefined ? 'undefined' : (is_int($x505) || is_float($x505) ? 'number' : (is_bool($x505) ? 'boolean' : (is_string($x505) ? 'string' : (is_object($x505) && isset($x505->call) ? 'function' : 'object')))));
$x504 = !(((gettype($x505) === gettype('object') && $x505 === 'object'))|| (((is_float($x505) || is_int($x505)) && (is_float('object') || is_int('object'))) && $x505 == 'object'));
$x503 = $x504;
if (JS::toBoolean($x503, $global)) {
$x507 = $_o;
$x507 = ($x507 === JS::$undefined ? 'undefined' : (is_int($x507) || is_float($x507) ? 'number' : (is_bool($x507) ? 'boolean' : (is_string($x507) ? 'string' : (is_object($x507) && isset($x507->call) ? 'function' : 'object')))));
$x506 = !(((gettype($x507) === gettype('function') && $x507 === 'function'))|| (((is_float($x507) || is_int($x507)) && (is_float('function') || is_int('function'))) && $x507 == 'function'));
$x503 = $x506; }
$x501 = $x503; }
if (JS::toBoolean($x501, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x510 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 207, 13, '<image>/02_object.js');
$_TypeError =& $x510[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x510;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x511 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 207, 13, '<image>/02_object.js');
$_ReferenceError =& $x511[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x511;
$x512 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 13);
$x513 = $x512($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x513->class) && $x513->class === 'Error') {$x513->properties['file'] = '<image>/02_object.js';$x513->properties['line'] = 207;$x513->properties['column'] = 13;$x513->attributes['file'] = $x513->attributes['line'] = $x513->attributes['column'] = 0; }
throw new JSException($x513, 207, 13, '<image>/02_object.js');
}
$x508 = clone JS::$objectTemplate;
unset($x514, $W514, $S514, $U514);
$x515 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 207, 9, '<image>/02_object.js');
$x514 =& $x515[0]; list(,$W514,$S514,$U514) = $x515;
$x509 = $x514;
$x508->prototype = $x509;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x518 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x519 = $x518($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x519->class) && $x519->class === 'Error') {$x519->properties['file'] = '<image>/02_object.js';$x519->properties['line'] = 207;$x519->properties['column'] = 9;$x519->attributes['file'] = $x519->attributes['line'] = $x519->attributes['column'] = 0; }
throw new JSException($x519, 207, 9, '<image>/02_object.js');
}
$x516 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x517 = $x516($global, $x508, $_TypeError, array('Object.isFrozen(): Cannot return if frozen, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x509 = $x517;
if (is_object($x509) && $x509 !== JS::$undefined) { $x508 = $x509; }
if (isset($x508->class) && $x508->class === 'Error') {$x508->properties['file'] = '<image>/02_object.js';$x508->properties['line'] = 207;$x508->properties['column'] = 3;$x508->attributes['file'] = $x508->attributes['line'] = $x508->attributes['column'] = 0; }
throw new JSException($x508, 207, 3, '<image>/02_object.js');;
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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x500=&$scope->properties[\'arguments\'];$x500->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x500->properties[$i]=$args[$i];$x500->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x502=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x501=$x502;if(!JS::toBoolean($x501,$global)){$x505=$_o;$x505=($x505===JS::$undefined?\'undefined\':(is_int($x505)||is_float($x505)?\'number\':(is_bool($x505)?\'boolean\':(is_string($x505)?\'string\':(is_object($x505)&&isset($x505->call)?\'function\':\'object\')))));$x504=!(((gettype($x505)===gettype(\'object\')&&$x505===\'object\'))||(((is_float($x505)||is_int($x505))&&(is_float(\'object\')||is_int(\'object\')))&&$x505==\'object\'));$x503=$x504;if(JS::toBoolean($x503,$global)){$x507=$_o;$x507=($x507===JS::$undefined?\'undefined\':(is_int($x507)||is_float($x507)?\'number\':(is_bool($x507)?\'boolean\':(is_string($x507)?\'string\':(is_object($x507)&&isset($x507->call)?\'function\':\'object\')))));$x506=!(((gettype($x507)===gettype(\'function\')&&$x507===\'function\'))||(((is_float($x507)||is_int($x507))&&(is_float(\'function\')||is_int(\'function\')))&&$x507==\'function\'));$x503=$x506;}$x501=$x503;}if(JS::toBoolean($x501,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x510=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',207,13,\'<image>/02_object.js\');$_TypeError=&$x510[0];list(,$WTypeError,$STypeError,$UTypeError)=$x510;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x511=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',207,13,\'<image>/02_object.js\');$_ReferenceError=&$x511[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x511;$x512=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,13);$x513=$x512($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x513->class)&&$x513->class===\'Error\'){$x513->properties[\'file\']=\'<image>/02_object.js\';$x513->properties[\'line\']=207;$x513->properties[\'column\']=13;$x513->attributes[\'file\']=$x513->attributes[\'line\']=$x513->attributes[\'column\']=0;}throw new JSException($x513,207,13,\'<image>/02_object.js\');}$x508=clone JS::$objectTemplate;unset($x514,$W514,$S514,$U514);$x515=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',207,9,\'<image>/02_object.js\');$x514=&$x515[0];list(,$W514,$S514,$U514)=$x515;$x509=$x514;$x508->prototype=$x509;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x518=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x519=$x518($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x519->class)&&$x519->class===\'Error\'){$x519->properties[\'file\']=\'<image>/02_object.js\';$x519->properties[\'line\']=207;$x519->properties[\'column\']=9;$x519->attributes[\'file\']=$x519->attributes[\'line\']=$x519->attributes[\'column\']=0;}throw new JSException($x519,207,9,\'<image>/02_object.js\');}$x516=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x517=$x516($global,$x508,$_TypeError,array(\'Object.isFrozen(): Cannot return if frozen, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x509=$x517;if(is_object($x509)&&$x509!==JS::$undefined){$x508=$x509;}if(isset($x508->class)&&$x508->class===\'Error\'){$x508->properties[\'file\']=\'<image>/02_object.js\';$x508->properties[\'line\']=207;$x508->properties[\'column\']=3;$x508->attributes[\'file\']=$x508->attributes[\'line\']=$x508->attributes[\'column\']=0;}throw new JSException($x508,207,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&(JS::CONFIGURABLE|JS::WRITABLE)){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x530 =& $scope->properties['arguments'];
$x530->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x530->properties[$i] = $args[$i];
$x530->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x532 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x531 = $x532;
if (!JS::toBoolean($x531, $global)) {
$x535 = $_o;
$x535 = ($x535 === JS::$undefined ? 'undefined' : (is_int($x535) || is_float($x535) ? 'number' : (is_bool($x535) ? 'boolean' : (is_string($x535) ? 'string' : (is_object($x535) && isset($x535->call) ? 'function' : 'object')))));
$x534 = !(((gettype($x535) === gettype('object') && $x535 === 'object'))|| (((is_float($x535) || is_int($x535)) && (is_float('object') || is_int('object'))) && $x535 == 'object'));
$x533 = $x534;
if (JS::toBoolean($x533, $global)) {
$x537 = $_o;
$x537 = ($x537 === JS::$undefined ? 'undefined' : (is_int($x537) || is_float($x537) ? 'number' : (is_bool($x537) ? 'boolean' : (is_string($x537) ? 'string' : (is_object($x537) && isset($x537->call) ? 'function' : 'object')))));
$x536 = !(((gettype($x537) === gettype('function') && $x537 === 'function'))|| (((is_float($x537) || is_int($x537)) && (is_float('function') || is_int('function'))) && $x537 == 'function'));
$x533 = $x536; }
$x531 = $x533; }
if (JS::toBoolean($x531, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x540 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 223, 13, '<image>/02_object.js');
$_TypeError =& $x540[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x540;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x541 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 223, 13, '<image>/02_object.js');
$_ReferenceError =& $x541[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x541;
$x542 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 13);
$x543 = $x542($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x543->class) && $x543->class === 'Error') {$x543->properties['file'] = '<image>/02_object.js';$x543->properties['line'] = 223;$x543->properties['column'] = 13;$x543->attributes['file'] = $x543->attributes['line'] = $x543->attributes['column'] = 0; }
throw new JSException($x543, 223, 13, '<image>/02_object.js');
}
$x538 = clone JS::$objectTemplate;
unset($x544, $W544, $S544, $U544);
$x545 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 223, 9, '<image>/02_object.js');
$x544 =& $x545[0]; list(,$W544,$S544,$U544) = $x545;
$x539 = $x544;
$x538->prototype = $x539;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x548 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x549 = $x548($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x549->class) && $x549->class === 'Error') {$x549->properties['file'] = '<image>/02_object.js';$x549->properties['line'] = 223;$x549->properties['column'] = 9;$x549->attributes['file'] = $x549->attributes['line'] = $x549->attributes['column'] = 0; }
throw new JSException($x549, 223, 9, '<image>/02_object.js');
}
$x546 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x547 = $x546($global, $x538, $_TypeError, array('Object.isExtensible(): Cannot return if extensible, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x539 = $x547;
if (is_object($x539) && $x539 !== JS::$undefined) { $x538 = $x539; }
if (isset($x538->class) && $x538->class === 'Error') {$x538->properties['file'] = '<image>/02_object.js';$x538->properties['line'] = 223;$x538->properties['column'] = 3;$x538->attributes['file'] = $x538->attributes['line'] = $x538->attributes['column'] = 0; }
throw new JSException($x538, 223, 3, '<image>/02_object.js');;
};
return$_o->extensible;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x530=&$scope->properties[\'arguments\'];$x530->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x530->properties[$i]=$args[$i];$x530->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x532=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x531=$x532;if(!JS::toBoolean($x531,$global)){$x535=$_o;$x535=($x535===JS::$undefined?\'undefined\':(is_int($x535)||is_float($x535)?\'number\':(is_bool($x535)?\'boolean\':(is_string($x535)?\'string\':(is_object($x535)&&isset($x535->call)?\'function\':\'object\')))));$x534=!(((gettype($x535)===gettype(\'object\')&&$x535===\'object\'))||(((is_float($x535)||is_int($x535))&&(is_float(\'object\')||is_int(\'object\')))&&$x535==\'object\'));$x533=$x534;if(JS::toBoolean($x533,$global)){$x537=$_o;$x537=($x537===JS::$undefined?\'undefined\':(is_int($x537)||is_float($x537)?\'number\':(is_bool($x537)?\'boolean\':(is_string($x537)?\'string\':(is_object($x537)&&isset($x537->call)?\'function\':\'object\')))));$x536=!(((gettype($x537)===gettype(\'function\')&&$x537===\'function\'))||(((is_float($x537)||is_int($x537))&&(is_float(\'function\')||is_int(\'function\')))&&$x537==\'function\'));$x533=$x536;}$x531=$x533;}if(JS::toBoolean($x531,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x540=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',223,13,\'<image>/02_object.js\');$_TypeError=&$x540[0];list(,$WTypeError,$STypeError,$UTypeError)=$x540;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x541=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',223,13,\'<image>/02_object.js\');$_ReferenceError=&$x541[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x541;$x542=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,13);$x543=$x542($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x543->class)&&$x543->class===\'Error\'){$x543->properties[\'file\']=\'<image>/02_object.js\';$x543->properties[\'line\']=223;$x543->properties[\'column\']=13;$x543->attributes[\'file\']=$x543->attributes[\'line\']=$x543->attributes[\'column\']=0;}throw new JSException($x543,223,13,\'<image>/02_object.js\');}$x538=clone JS::$objectTemplate;unset($x544,$W544,$S544,$U544);$x545=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',223,9,\'<image>/02_object.js\');$x544=&$x545[0];list(,$W544,$S544,$U544)=$x545;$x539=$x544;$x538->prototype=$x539;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x548=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x549=$x548($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x549->class)&&$x549->class===\'Error\'){$x549->properties[\'file\']=\'<image>/02_object.js\';$x549->properties[\'line\']=223;$x549->properties[\'column\']=9;$x549->attributes[\'file\']=$x549->attributes[\'line\']=$x549->attributes[\'column\']=0;}throw new JSException($x549,223,9,\'<image>/02_object.js\');}$x546=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x547=$x546($global,$x538,$_TypeError,array(\'Object.isExtensible(): Cannot return if extensible, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x539=$x547;if(is_object($x539)&&$x539!==JS::$undefined){$x538=$x539;}if(isset($x538->class)&&$x538->class===\'Error\'){$x538->properties[\'file\']=\'<image>/02_object.js\';$x538->properties[\'line\']=223;$x538->properties[\'column\']=3;$x538->attributes[\'file\']=$x538->attributes[\'line\']=$x538->attributes[\'column\']=0;}throw new JSException($x538,223,3,\'<image>/02_object.js\');}return$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x560 =& $scope->properties['arguments'];
$x560->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x560->properties[$i] = $args[$i];
$x560->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x562 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x561 = $x562;
if (!JS::toBoolean($x561, $global)) {
$x565 = $_o;
$x565 = ($x565 === JS::$undefined ? 'undefined' : (is_int($x565) || is_float($x565) ? 'number' : (is_bool($x565) ? 'boolean' : (is_string($x565) ? 'string' : (is_object($x565) && isset($x565->call) ? 'function' : 'object')))));
$x564 = !(((gettype($x565) === gettype('object') && $x565 === 'object'))|| (((is_float($x565) || is_int($x565)) && (is_float('object') || is_int('object'))) && $x565 == 'object'));
$x563 = $x564;
if (JS::toBoolean($x563, $global)) {
$x567 = $_o;
$x567 = ($x567 === JS::$undefined ? 'undefined' : (is_int($x567) || is_float($x567) ? 'number' : (is_bool($x567) ? 'boolean' : (is_string($x567) ? 'string' : (is_object($x567) && isset($x567->call) ? 'function' : 'object')))));
$x566 = !(((gettype($x567) === gettype('function') && $x567 === 'function'))|| (((is_float($x567) || is_int($x567)) && (is_float('function') || is_int('function'))) && $x567 == 'function'));
$x563 = $x566; }
$x561 = $x563; }
if (JS::toBoolean($x561, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x570 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 231, 13, '<image>/02_object.js');
$_TypeError =& $x570[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x570;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x571 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 231, 13, '<image>/02_object.js');
$_ReferenceError =& $x571[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x571;
$x572 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 13);
$x573 = $x572($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x573->class) && $x573->class === 'Error') {$x573->properties['file'] = '<image>/02_object.js';$x573->properties['line'] = 231;$x573->properties['column'] = 13;$x573->attributes['file'] = $x573->attributes['line'] = $x573->attributes['column'] = 0; }
throw new JSException($x573, 231, 13, '<image>/02_object.js');
}
$x568 = clone JS::$objectTemplate;
unset($x574, $W574, $S574, $U574);
$x575 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 231, 9, '<image>/02_object.js');
$x574 =& $x575[0]; list(,$W574,$S574,$U574) = $x575;
$x569 = $x574;
$x568->prototype = $x569;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x578 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x579 = $x578($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x579->class) && $x579->class === 'Error') {$x579->properties['file'] = '<image>/02_object.js';$x579->properties['line'] = 231;$x579->properties['column'] = 9;$x579->attributes['file'] = $x579->attributes['line'] = $x579->attributes['column'] = 0; }
throw new JSException($x579, 231, 9, '<image>/02_object.js');
}
$x576 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x577 = $x576($global, $x568, $_TypeError, array('Object.keys(): Cannot return keys, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x569 = $x577;
if (is_object($x569) && $x569 !== JS::$undefined) { $x568 = $x569; }
if (isset($x568->class) && $x568->class === 'Error') {$x568->properties['file'] = '<image>/02_object.js';$x568->properties['line'] = 231;$x568->properties['column'] = 3;$x568->attributes['file'] = $x568->attributes['line'] = $x568->attributes['column'] = 0; }
throw new JSException($x568, 231, 3, '<image>/02_object.js');;
};
$x580 = clone JS::$arrayTemplate;
$x580->properties['length'] = 0;
$x580->attributes['length'] = JS::WRITABLE;
$scope->properties['keys'] = JS::$undefined; $_keys =& $scope->properties['keys'];
$Ukeys = FALSE;
$_keys = $x580;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_o !== JS::$undefined && $_o !== NULL) {
for ($x581 = JS::toObject($_o, $global); $x581; $x581 = $x581->prototype) {
foreach ($x581->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE)) { continue; }
$_k = $property;

if ($_keys === JS::$undefined || $_keys === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x583 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x583[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x583;
$x584 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x585 = $x584($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x585->class) && $x585->class === 'Error') {$x585->properties['file'] = '<image>/02_object.js';$x585->properties['line'] = 237;$x585->properties['column'] = 12;$x585->attributes['file'] = $x585->attributes['line'] = $x585->attributes['column'] = 0; }
throw new JSException($x585, 237, 12, '<image>/02_object.js');
}
$x582 = JS::toObject($_keys, $global);
unset($x586, $W586, $S586, $U586);
$x587 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x582, (string) 'push', 237, 12, '<image>/02_object.js');
$x586 =& $x587[0]; list(,$W586,$S586,$U586) = $x587;
if (!(is_object($x586) && isset($x586->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x590 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x590[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x590;
$x591 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x592 = $x591($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x592->class) && $x592->class === 'Error') {$x592->properties['file'] = '<image>/02_object.js';$x592->properties['line'] = 237;$x592->properties['column'] = 12;$x592->attributes['file'] = $x592->attributes['line'] = $x592->attributes['column'] = 0; }
throw new JSException($x592, 237, 12, '<image>/02_object.js');
}
$x588 = $x586->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x589 = $x588($global, $x582, $x586, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_keys;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x560=&$scope->properties[\'arguments\'];$x560->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x560->properties[$i]=$args[$i];$x560->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x562=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x561=$x562;if(!JS::toBoolean($x561,$global)){$x565=$_o;$x565=($x565===JS::$undefined?\'undefined\':(is_int($x565)||is_float($x565)?\'number\':(is_bool($x565)?\'boolean\':(is_string($x565)?\'string\':(is_object($x565)&&isset($x565->call)?\'function\':\'object\')))));$x564=!(((gettype($x565)===gettype(\'object\')&&$x565===\'object\'))||(((is_float($x565)||is_int($x565))&&(is_float(\'object\')||is_int(\'object\')))&&$x565==\'object\'));$x563=$x564;if(JS::toBoolean($x563,$global)){$x567=$_o;$x567=($x567===JS::$undefined?\'undefined\':(is_int($x567)||is_float($x567)?\'number\':(is_bool($x567)?\'boolean\':(is_string($x567)?\'string\':(is_object($x567)&&isset($x567->call)?\'function\':\'object\')))));$x566=!(((gettype($x567)===gettype(\'function\')&&$x567===\'function\'))||(((is_float($x567)||is_int($x567))&&(is_float(\'function\')||is_int(\'function\')))&&$x567==\'function\'));$x563=$x566;}$x561=$x563;}if(JS::toBoolean($x561,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x570=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',231,13,\'<image>/02_object.js\');$_TypeError=&$x570[0];list(,$WTypeError,$STypeError,$UTypeError)=$x570;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x571=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',231,13,\'<image>/02_object.js\');$_ReferenceError=&$x571[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x571;$x572=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,13);$x573=$x572($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x573->class)&&$x573->class===\'Error\'){$x573->properties[\'file\']=\'<image>/02_object.js\';$x573->properties[\'line\']=231;$x573->properties[\'column\']=13;$x573->attributes[\'file\']=$x573->attributes[\'line\']=$x573->attributes[\'column\']=0;}throw new JSException($x573,231,13,\'<image>/02_object.js\');}$x568=clone JS::$objectTemplate;unset($x574,$W574,$S574,$U574);$x575=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',231,9,\'<image>/02_object.js\');$x574=&$x575[0];list(,$W574,$S574,$U574)=$x575;$x569=$x574;$x568->prototype=$x569;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x578=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x579=$x578($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x579->class)&&$x579->class===\'Error\'){$x579->properties[\'file\']=\'<image>/02_object.js\';$x579->properties[\'line\']=231;$x579->properties[\'column\']=9;$x579->attributes[\'file\']=$x579->attributes[\'line\']=$x579->attributes[\'column\']=0;}throw new JSException($x579,231,9,\'<image>/02_object.js\');}$x576=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x577=$x576($global,$x568,$_TypeError,array(\'Object.keys(): Cannot return keys, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x569=$x577;if(is_object($x569)&&$x569!==JS::$undefined){$x568=$x569;}if(isset($x568->class)&&$x568->class===\'Error\'){$x568->properties[\'file\']=\'<image>/02_object.js\';$x568->properties[\'line\']=231;$x568->properties[\'column\']=3;$x568->attributes[\'file\']=$x568->attributes[\'line\']=$x568->attributes[\'column\']=0;}throw new JSException($x568,231,3,\'<image>/02_object.js\');}$x580=clone JS::$arrayTemplate;$x580->properties[\'length\']=0;$x580->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'keys\']=JS::$undefined;$_keys=&$scope->properties[\'keys\'];$Ukeys=FALSE;$_keys=$x580;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_o!==JS::$undefined&&$_o!==NULL){for($x581=JS::toObject($_o,$global);$x581;$x581=$x581->prototype){foreach($x581->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)){continue;}$_k=$property;if($_keys===JS::$undefined||$_keys===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x583=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x583[0];list(,$WTypeError,$STypeError,$UTypeError)=$x583;$x584=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x585=$x584($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x585->class)&&$x585->class===\'Error\'){$x585->properties[\'file\']=\'<image>/02_object.js\';$x585->properties[\'line\']=237;$x585->properties[\'column\']=12;$x585->attributes[\'file\']=$x585->attributes[\'line\']=$x585->attributes[\'column\']=0;}throw new JSException($x585,237,12,\'<image>/02_object.js\');}$x582=JS::toObject($_keys,$global);unset($x586,$W586,$S586,$U586);$x587=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x582,(string)\'push\',237,12,\'<image>/02_object.js\');$x586=&$x587[0];list(,$W586,$S586,$U586)=$x587;if(!(is_object($x586)&&isset($x586->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x590=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x590[0];list(,$WTypeError,$STypeError,$UTypeError)=$x590;$x591=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x592=$x591($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x592->class)&&$x592->class===\'Error\'){$x592->properties[\'file\']=\'<image>/02_object.js\';$x592->properties[\'line\']=237;$x592->properties[\'column\']=12;$x592->attributes[\'file\']=$x592->attributes[\'line\']=$x592->attributes[\'column\']=0;}throw new JSException($x592,237,12,\'<image>/02_object.js\');}$x588=$x586->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x589=$x588($global,$x582,$x586,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_keys;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x622 =& $scope->properties['arguments'];
$x622->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x622->properties[$i] = $args[$i];
$x622->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x623 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
if (JS::toBoolean($x623, $global)) {

return '[object Undefined]';;
}
else {
$x624 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
if (JS::toBoolean($x624, $global)) {

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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x622=&$scope->properties[\'arguments\'];$x622->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x622->properties[$i]=$args[$i];$x622->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x623=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));if(JS::toBoolean($x623,$global)){return\'[object Undefined]\';}else{$x624=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));if(JS::toBoolean($x624,$global)){return\'[object Null]\';}else{$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=JS::toObject($leThis,$global);if(JS::toBoolean(!isset($_o->class),$global)){return\'[object]\';}return"[object ".$_o->class."]";}}return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x637 =& $scope->properties['arguments'];
$x637->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x637->properties[$i] = $args[$i];
$x637->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x639 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x639[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x639;
$x640 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x641 = $x640($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x641->class) && $x641->class === 'Error') {$x641->properties['file'] = '<image>/02_object.js';$x641->properties['line'] = 268;$x641->properties['column'] = 22;$x641->attributes['file'] = $x641->attributes['line'] = $x641->attributes['column'] = 0; }
throw new JSException($x641, 268, 22, '<image>/02_object.js');
}
$x638 = JS::toObject($leThis, $global);
unset($x642, $W642, $S642, $U642);
$x643 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x638, (string) 'toString', 268, 22, '<image>/02_object.js');
$x642 =& $x643[0]; list(,$W642,$S642,$U642) = $x643;
if (!(is_object($x642) && isset($x642->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x646 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x646[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x646;
$x647 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x648 = $x647($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x648->class) && $x648->class === 'Error') {$x648->properties['file'] = '<image>/02_object.js';$x648->properties['line'] = 268;$x648->properties['column'] = 22;$x648->attributes['file'] = $x648->attributes['line'] = $x648->attributes['column'] = 0; }
throw new JSException($x648, 268, 22, '<image>/02_object.js');
}
$x644 = $x642->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x645 = $x644($global, $x638, $x642, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x645;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x637=&$scope->properties[\'arguments\'];$x637->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x637->properties[$i]=$args[$i];$x637->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x639=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x639[0];list(,$WTypeError,$STypeError,$UTypeError)=$x639;$x640=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x641=$x640($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x641->class)&&$x641->class===\'Error\'){$x641->properties[\'file\']=\'<image>/02_object.js\';$x641->properties[\'line\']=268;$x641->properties[\'column\']=22;$x641->attributes[\'file\']=$x641->attributes[\'line\']=$x641->attributes[\'column\']=0;}throw new JSException($x641,268,22,\'<image>/02_object.js\');}$x638=JS::toObject($leThis,$global);unset($x642,$W642,$S642,$U642);$x643=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x638,(string)\'toString\',268,22,\'<image>/02_object.js\');$x642=&$x643[0];list(,$W642,$S642,$U642)=$x643;if(!(is_object($x642)&&isset($x642->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x646=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x646[0];list(,$WTypeError,$STypeError,$UTypeError)=$x646;$x647=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x648=$x647($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x648->class)&&$x648->class===\'Error\'){$x648->properties[\'file\']=\'<image>/02_object.js\';$x648->properties[\'line\']=268;$x648->properties[\'column\']=22;$x648->attributes[\'file\']=$x648->attributes[\'line\']=$x648->attributes[\'column\']=0;}throw new JSException($x648,268,22,\'<image>/02_object.js\');}$x644=$x642->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x645=$x644($global,$x638,$x642,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x645;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x661 =& $scope->properties['arguments'];
$x661->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x661->properties[$i] = $args[$i];
$x661->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x663 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
$x662 = $x663;
if (!JS::toBoolean($x662, $global)) {
$x664 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
$x662 = $x664; }
if (JS::toBoolean($x662, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x667 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 273, 13, '<image>/02_object.js');
$_TypeError =& $x667[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x667;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x668 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 273, 13, '<image>/02_object.js');
$_ReferenceError =& $x668[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x668;
$x669 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 13);
$x670 = $x669($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x670->class) && $x670->class === 'Error') {$x670->properties['file'] = '<image>/02_object.js';$x670->properties['line'] = 273;$x670->properties['column'] = 13;$x670->attributes['file'] = $x670->attributes['line'] = $x670->attributes['column'] = 0; }
throw new JSException($x670, 273, 13, '<image>/02_object.js');
}
$x665 = clone JS::$objectTemplate;
unset($x671, $W671, $S671, $U671);
$x672 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 273, 9, '<image>/02_object.js');
$x671 =& $x672[0]; list(,$W671,$S671,$U671) = $x672;
$x666 = $x671;
$x665->prototype = $x666;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x675 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x676 = $x675($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x676->class) && $x676->class === 'Error') {$x676->properties['file'] = '<image>/02_object.js';$x676->properties['line'] = 273;$x676->properties['column'] = 9;$x676->attributes['file'] = $x676->attributes['line'] = $x676->attributes['column'] = 0; }
throw new JSException($x676, 273, 9, '<image>/02_object.js');
}
$x673 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x674 = $x673($global, $x665, $_TypeError, array('Object.prototype.valueOf(): this is undefined or null'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x666 = $x674;
if (is_object($x666) && $x666 !== JS::$undefined) { $x665 = $x666; }
if (isset($x665->class) && $x665->class === 'Error') {$x665->properties['file'] = '<image>/02_object.js';$x665->properties['line'] = 273;$x665->properties['column'] = 3;$x665->attributes['file'] = $x665->attributes['line'] = $x665->attributes['column'] = 0; }
throw new JSException($x665, 273, 3, '<image>/02_object.js');;
};
return JS::toObject($leThis, $global);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x661=&$scope->properties[\'arguments\'];$x661->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x661->properties[$i]=$args[$i];$x661->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x663=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));$x662=$x663;if(!JS::toBoolean($x662,$global)){$x664=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));$x662=$x664;}if(JS::toBoolean($x662,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x667=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',273,13,\'<image>/02_object.js\');$_TypeError=&$x667[0];list(,$WTypeError,$STypeError,$UTypeError)=$x667;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x668=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',273,13,\'<image>/02_object.js\');$_ReferenceError=&$x668[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x668;$x669=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,13);$x670=$x669($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x670->class)&&$x670->class===\'Error\'){$x670->properties[\'file\']=\'<image>/02_object.js\';$x670->properties[\'line\']=273;$x670->properties[\'column\']=13;$x670->attributes[\'file\']=$x670->attributes[\'line\']=$x670->attributes[\'column\']=0;}throw new JSException($x670,273,13,\'<image>/02_object.js\');}$x665=clone JS::$objectTemplate;unset($x671,$W671,$S671,$U671);$x672=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',273,9,\'<image>/02_object.js\');$x671=&$x672[0];list(,$W671,$S671,$U671)=$x672;$x666=$x671;$x665->prototype=$x666;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x675=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x676=$x675($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x676->class)&&$x676->class===\'Error\'){$x676->properties[\'file\']=\'<image>/02_object.js\';$x676->properties[\'line\']=273;$x676->properties[\'column\']=9;$x676->attributes[\'file\']=$x676->attributes[\'line\']=$x676->attributes[\'column\']=0;}throw new JSException($x676,273,9,\'<image>/02_object.js\');}$x673=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x674=$x673($global,$x665,$_TypeError,array(\'Object.prototype.valueOf(): this is undefined or null\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x666=$x674;if(is_object($x666)&&$x666!==JS::$undefined){$x665=$x666;}if(isset($x665->class)&&$x665->class===\'Error\'){$x665->properties[\'file\']=\'<image>/02_object.js\';$x665->properties[\'line\']=273;$x665->properties[\'column\']=3;$x665->attributes[\'file\']=$x665->attributes[\'line\']=$x665->attributes[\'column\']=0;}throw new JSException($x665,273,3,\'<image>/02_object.js\');}return JS::toObject($leThis,$global);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x689 =& $scope->properties['arguments'];
$x689->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x689->properties[$i] = $args[$i];
$x689->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return array_key_exists($_p, $leThis->properties) || isset($leThis->attributes[$_p]);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x689=&$scope->properties[\'arguments\'];$x689->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x689->properties[$i]=$args[$i];$x689->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return array_key_exists($_p,$leThis->properties)||isset($leThis->attributes[$_p]);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x702 =& $scope->properties['arguments'];
$x702->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x702->properties[$i] = $args[$i];
$x702->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x704 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x703 = $x704;
if (!JS::toBoolean($x703, $global)) {
$x707 = $_v;
$x707 = ($x707 === JS::$undefined ? 'undefined' : (is_int($x707) || is_float($x707) ? 'number' : (is_bool($x707) ? 'boolean' : (is_string($x707) ? 'string' : (is_object($x707) && isset($x707->call) ? 'function' : 'object')))));
$x706 = !(((gettype($x707) === gettype('object') && $x707 === 'object'))|| (((is_float($x707) || is_int($x707)) && (is_float('object') || is_int('object'))) && $x707 == 'object'));
$x705 = $x706;
if (JS::toBoolean($x705, $global)) {
$x709 = $_v;
$x709 = ($x709 === JS::$undefined ? 'undefined' : (is_int($x709) || is_float($x709) ? 'number' : (is_bool($x709) ? 'boolean' : (is_string($x709) ? 'string' : (is_object($x709) && isset($x709->call) ? 'function' : 'object')))));
$x708 = !(((gettype($x709) === gettype('function') && $x709 === 'function'))|| (((is_float($x709) || is_int($x709)) && (is_float('function') || is_int('function'))) && $x709 == 'function'));
$x705 = $x708; }
$x703 = $x705; }
if (JS::toBoolean($x703, $global)) {

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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x702=&$scope->properties[\'arguments\'];$x702->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x702->properties[$i]=$args[$i];$x702->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$global->scope[++$global->scope_sp]=$scope;$x704=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x703=$x704;if(!JS::toBoolean($x703,$global)){$x707=$_v;$x707=($x707===JS::$undefined?\'undefined\':(is_int($x707)||is_float($x707)?\'number\':(is_bool($x707)?\'boolean\':(is_string($x707)?\'string\':(is_object($x707)&&isset($x707->call)?\'function\':\'object\')))));$x706=!(((gettype($x707)===gettype(\'object\')&&$x707===\'object\'))||(((is_float($x707)||is_int($x707))&&(is_float(\'object\')||is_int(\'object\')))&&$x707==\'object\'));$x705=$x706;if(JS::toBoolean($x705,$global)){$x709=$_v;$x709=($x709===JS::$undefined?\'undefined\':(is_int($x709)||is_float($x709)?\'number\':(is_bool($x709)?\'boolean\':(is_string($x709)?\'string\':(is_object($x709)&&isset($x709->call)?\'function\':\'object\')))));$x708=!(((gettype($x709)===gettype(\'function\')&&$x709===\'function\'))||(((is_float($x709)||is_int($x709))&&(is_float(\'function\')||is_int(\'function\')))&&$x709==\'function\'));$x705=$x708;}$x703=$x705;}if(JS::toBoolean($x703,$global)){return false;}for($_v=$_v->prototype;$_v;$_v=$_v->prototype){if($_v===$leThis){return TRUE;}}return false;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x722 =& $scope->properties['arguments'];
$x722->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x722->properties[$i] = $args[$i];
$x722->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return JS::toBoolean(isset($leThis->attributes[$_p]) && ($leThis->attributes[$_p] & JS::ENUMERABLE), $global);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x722=&$scope->properties[\'arguments\'];$x722->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x722->properties[$i]=$args[$i];$x722->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return JS::toBoolean(isset($leThis->attributes[$_p])&&($leThis->attributes[$_p]&JS::ENUMERABLE),$global);return JS::$undefined;}', "\n";
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
$x118 = clone JS::$functionTemplate; $x118->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_6'; $x118->parameters = array (
  0 => 'o',
  1 => 'p',
); $x118->scope = $scope; $x118->properties['prototype'] = clone JS::$objectTemplate; $x118->attributes['prototype'] = JS::WRITABLE; $x118->properties['prototype']->properties['constructor'] = $x118; $x118->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x118->properties['length'] = 2; $x118->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x119 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 17, 33, '<image>/02_object.js');
$_TypeError =& $x119[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x119;
$x120 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x121 = $x120($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x121->class) && $x121->class === 'Error') {$x121->properties['file'] = '<image>/02_object.js';$x121->properties['line'] = 17;$x121->properties['column'] = 33;$x121->attributes['file'] = $x121->attributes['line'] = $x121->attributes['column'] = 0; }
throw new JSException($x121, 17, 33, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x122, $W122, $S122, $U122);
$x123 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'getOwnPropertyDescriptor', 17, 33, '<image>/02_object.js');
$x122 =& $x123[0]; list(,$W122,$S122,$U122) = $x123;
if ($U122 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getOwnPropertyDescriptor'] = $x122; $x122 =& $_Object->properties['getOwnPropertyDescriptor']; $_Object->attributes['getOwnPropertyDescriptor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U122 = FALSE; $W122 = TRUE; }
if (isset($S122)) {
$x125 = $S122->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x126 = $x125($global, $_Object, $S122, array($x118), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x124 = $x126;
} else {
if (!$U122) {$x124 = $x118;if ($W122) { $x122 = $x118; }  }
else { $x124 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyDescriptor') && 'getOwnPropertyDescriptor' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyDescriptor' + 1; };
$x160 = clone JS::$functionTemplate; $x160->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_7'; $x160->parameters = array (
  0 => 'o',
); $x160->scope = $scope; $x160->properties['prototype'] = clone JS::$objectTemplate; $x160->attributes['prototype'] = JS::WRITABLE; $x160->properties['prototype']->properties['constructor'] = $x160; $x160->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x160->properties['length'] = 1; $x160->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x161 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 48, 28, '<image>/02_object.js');
$_TypeError =& $x161[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x161;
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x163 = $x162($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error') {$x163->properties['file'] = '<image>/02_object.js';$x163->properties['line'] = 48;$x163->properties['column'] = 28;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 48, 28, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x164, $W164, $S164, $U164);
$x165 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'getOwnPropertyNames', 48, 28, '<image>/02_object.js');
$x164 =& $x165[0]; list(,$W164,$S164,$U164) = $x165;
if ($U164 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getOwnPropertyNames'] = $x164; $x164 =& $_Object->properties['getOwnPropertyNames']; $_Object->attributes['getOwnPropertyNames'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U164 = FALSE; $W164 = TRUE; }
if (isset($S164)) {
$x167 = $S164->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x168 = $x167($global, $_Object, $S164, array($x160), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x166 = $x168;
} else {
if (!$U164) {$x166 = $x160;if ($W164) { $x164 = $x160; }  }
else { $x166 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyNames') && 'getOwnPropertyNames' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyNames' + 1; };
$x204 = clone JS::$functionTemplate; $x204->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_8'; $x204->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x204->scope = $scope; $x204->properties['prototype'] = clone JS::$objectTemplate; $x204->attributes['prototype'] = JS::WRITABLE; $x204->properties['prototype']->properties['constructor'] = $x204; $x204->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x204->properties['length'] = 2; $x204->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x205 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 62, 15, '<image>/02_object.js');
$_TypeError =& $x205[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x205;
$x206 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x207 = $x206($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x207->class) && $x207->class === 'Error') {$x207->properties['file'] = '<image>/02_object.js';$x207->properties['line'] = 62;$x207->properties['column'] = 15;$x207->attributes['file'] = $x207->attributes['line'] = $x207->attributes['column'] = 0; }
throw new JSException($x207, 62, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x208, $W208, $S208, $U208);
$x209 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'create', 62, 15, '<image>/02_object.js');
$x208 =& $x209[0]; list(,$W208,$S208,$U208) = $x209;
if ($U208 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['create'] = $x208; $x208 =& $_Object->properties['create']; $_Object->attributes['create'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U208 = FALSE; $W208 = TRUE; }
if (isset($S208)) {
$x211 = $S208->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x212 = $x211($global, $_Object, $S208, array($x204), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x210 = $x212;
} else {
if (!$U208) {$x210 = $x204;if ($W208) { $x208 = $x204; }  }
else { $x210 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('create') && 'create' >= $_Object->properties['length']) { $_Object->properties['length'] = 'create' + 1; };
$x308 = clone JS::$functionTemplate; $x308->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_9'; $x308->parameters = array (
  0 => 'o',
  1 => 'p',
  2 => 'attributes',
); $x308->scope = $scope; $x308->properties['prototype'] = clone JS::$objectTemplate; $x308->attributes['prototype'] = JS::WRITABLE; $x308->properties['prototype']->properties['constructor'] = $x308; $x308->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x308->properties['length'] = 3; $x308->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x309 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 78, 23, '<image>/02_object.js');
$_TypeError =& $x309[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x309;
$x310 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x311 = $x310($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x311->class) && $x311->class === 'Error') {$x311->properties['file'] = '<image>/02_object.js';$x311->properties['line'] = 78;$x311->properties['column'] = 23;$x311->attributes['file'] = $x311->attributes['line'] = $x311->attributes['column'] = 0; }
throw new JSException($x311, 78, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x312, $W312, $S312, $U312);
$x313 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'defineProperty', 78, 23, '<image>/02_object.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
if ($U312 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['defineProperty'] = $x312; $x312 =& $_Object->properties['defineProperty']; $_Object->attributes['defineProperty'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U312 = FALSE; $W312 = TRUE; }
if (isset($S312)) {
$x315 = $S312->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x316 = $x315($global, $_Object, $S312, array($x308), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x314 = $x316;
} else {
if (!$U312) {$x314 = $x308;if ($W312) { $x312 = $x308; }  }
else { $x314 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperty') && 'defineProperty' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperty' + 1; };
$x370 = clone JS::$functionTemplate; $x370->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_10'; $x370->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x370->scope = $scope; $x370->properties['prototype'] = clone JS::$objectTemplate; $x370->attributes['prototype'] = JS::WRITABLE; $x370->properties['prototype']->properties['constructor'] = $x370; $x370->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x370->properties['length'] = 2; $x370->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x371 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 130, 25, '<image>/02_object.js');
$_TypeError =& $x371[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x371;
$x372 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x373 = $x372($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x373->class) && $x373->class === 'Error') {$x373->properties['file'] = '<image>/02_object.js';$x373->properties['line'] = 130;$x373->properties['column'] = 25;$x373->attributes['file'] = $x373->attributes['line'] = $x373->attributes['column'] = 0; }
throw new JSException($x373, 130, 25, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x374, $W374, $S374, $U374);
$x375 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'defineProperties', 130, 25, '<image>/02_object.js');
$x374 =& $x375[0]; list(,$W374,$S374,$U374) = $x375;
if ($U374 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['defineProperties'] = $x374; $x374 =& $_Object->properties['defineProperties']; $_Object->attributes['defineProperties'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U374 = FALSE; $W374 = TRUE; }
if (isset($S374)) {
$x377 = $S374->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x378 = $x377($global, $_Object, $S374, array($x370), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x376 = $x378;
} else {
if (!$U374) {$x376 = $x370;if ($W374) { $x374 = $x370; }  }
else { $x376 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperties') && 'defineProperties' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperties' + 1; };
$x400 = clone JS::$functionTemplate; $x400->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_11'; $x400->parameters = array (
  0 => 'o',
); $x400->scope = $scope; $x400->properties['prototype'] = clone JS::$objectTemplate; $x400->attributes['prototype'] = JS::WRITABLE; $x400->properties['prototype']->properties['constructor'] = $x400; $x400->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x400->properties['length'] = 1; $x400->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x401 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 146, 13, '<image>/02_object.js');
$_TypeError =& $x401[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x401;
$x402 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x403 = $x402($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x403->class) && $x403->class === 'Error') {$x403->properties['file'] = '<image>/02_object.js';$x403->properties['line'] = 146;$x403->properties['column'] = 13;$x403->attributes['file'] = $x403->attributes['line'] = $x403->attributes['column'] = 0; }
throw new JSException($x403, 146, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x404, $W404, $S404, $U404);
$x405 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'seal', 146, 13, '<image>/02_object.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
if ($U404 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['seal'] = $x404; $x404 =& $_Object->properties['seal']; $_Object->attributes['seal'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U404 = FALSE; $W404 = TRUE; }
if (isset($S404)) {
$x407 = $S404->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x408 = $x407($global, $_Object, $S404, array($x400), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x406 = $x408;
} else {
if (!$U404) {$x406 = $x400;if ($W404) { $x404 = $x400; }  }
else { $x406 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('seal') && 'seal' >= $_Object->properties['length']) { $_Object->properties['length'] = 'seal' + 1; };
$x430 = clone JS::$functionTemplate; $x430->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_12'; $x430->parameters = array (
  0 => 'o',
); $x430->scope = $scope; $x430->properties['prototype'] = clone JS::$objectTemplate; $x430->attributes['prototype'] = JS::WRITABLE; $x430->properties['prototype']->properties['constructor'] = $x430; $x430->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x430->properties['length'] = 1; $x430->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x431 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 162, 15, '<image>/02_object.js');
$_TypeError =& $x431[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x431;
$x432 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x433 = $x432($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x433->class) && $x433->class === 'Error') {$x433->properties['file'] = '<image>/02_object.js';$x433->properties['line'] = 162;$x433->properties['column'] = 15;$x433->attributes['file'] = $x433->attributes['line'] = $x433->attributes['column'] = 0; }
throw new JSException($x433, 162, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x434, $W434, $S434, $U434);
$x435 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'freeze', 162, 15, '<image>/02_object.js');
$x434 =& $x435[0]; list(,$W434,$S434,$U434) = $x435;
if ($U434 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['freeze'] = $x434; $x434 =& $_Object->properties['freeze']; $_Object->attributes['freeze'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U434 = FALSE; $W434 = TRUE; }
if (isset($S434)) {
$x437 = $S434->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x438 = $x437($global, $_Object, $S434, array($x430), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x436 = $x438;
} else {
if (!$U434) {$x436 = $x430;if ($W434) { $x434 = $x430; }  }
else { $x436 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('freeze') && 'freeze' >= $_Object->properties['length']) { $_Object->properties['length'] = 'freeze' + 1; };
$x460 = clone JS::$functionTemplate; $x460->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_13'; $x460->parameters = array (
  0 => 'o',
); $x460->scope = $scope; $x460->properties['prototype'] = clone JS::$objectTemplate; $x460->attributes['prototype'] = JS::WRITABLE; $x460->properties['prototype']->properties['constructor'] = $x460; $x460->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x460->properties['length'] = 1; $x460->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x461 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 179, 26, '<image>/02_object.js');
$_TypeError =& $x461[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x461;
$x462 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x463 = $x462($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x463->class) && $x463->class === 'Error') {$x463->properties['file'] = '<image>/02_object.js';$x463->properties['line'] = 179;$x463->properties['column'] = 26;$x463->attributes['file'] = $x463->attributes['line'] = $x463->attributes['column'] = 0; }
throw new JSException($x463, 179, 26, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x464, $W464, $S464, $U464);
$x465 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'preventExtensions', 179, 26, '<image>/02_object.js');
$x464 =& $x465[0]; list(,$W464,$S464,$U464) = $x465;
if ($U464 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['preventExtensions'] = $x464; $x464 =& $_Object->properties['preventExtensions']; $_Object->attributes['preventExtensions'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U464 = FALSE; $W464 = TRUE; }
if (isset($S464)) {
$x467 = $S464->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x468 = $x467($global, $_Object, $S464, array($x460), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x466 = $x468;
} else {
if (!$U464) {$x466 = $x460;if ($W464) { $x464 = $x460; }  }
else { $x466 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('preventExtensions') && 'preventExtensions' >= $_Object->properties['length']) { $_Object->properties['length'] = 'preventExtensions' + 1; };
$x490 = clone JS::$functionTemplate; $x490->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_14'; $x490->parameters = array (
  0 => 'o',
); $x490->scope = $scope; $x490->properties['prototype'] = clone JS::$objectTemplate; $x490->attributes['prototype'] = JS::WRITABLE; $x490->properties['prototype']->properties['constructor'] = $x490; $x490->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x490->properties['length'] = 1; $x490->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x491 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 189, 17, '<image>/02_object.js');
$_TypeError =& $x491[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x491;
$x492 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x493 = $x492($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x493->class) && $x493->class === 'Error') {$x493->properties['file'] = '<image>/02_object.js';$x493->properties['line'] = 189;$x493->properties['column'] = 17;$x493->attributes['file'] = $x493->attributes['line'] = $x493->attributes['column'] = 0; }
throw new JSException($x493, 189, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x494, $W494, $S494, $U494);
$x495 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isSealed', 189, 17, '<image>/02_object.js');
$x494 =& $x495[0]; list(,$W494,$S494,$U494) = $x495;
if ($U494 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isSealed'] = $x494; $x494 =& $_Object->properties['isSealed']; $_Object->attributes['isSealed'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U494 = FALSE; $W494 = TRUE; }
if (isset($S494)) {
$x497 = $S494->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x498 = $x497($global, $_Object, $S494, array($x490), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x496 = $x498;
} else {
if (!$U494) {$x496 = $x490;if ($W494) { $x494 = $x490; }  }
else { $x496 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isSealed') && 'isSealed' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isSealed' + 1; };
$x520 = clone JS::$functionTemplate; $x520->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_15'; $x520->parameters = array (
  0 => 'o',
); $x520->scope = $scope; $x520->properties['prototype'] = clone JS::$objectTemplate; $x520->attributes['prototype'] = JS::WRITABLE; $x520->properties['prototype']->properties['constructor'] = $x520; $x520->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x520->properties['length'] = 1; $x520->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x521 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 205, 17, '<image>/02_object.js');
$_TypeError =& $x521[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x521;
$x522 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x523 = $x522($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x523->class) && $x523->class === 'Error') {$x523->properties['file'] = '<image>/02_object.js';$x523->properties['line'] = 205;$x523->properties['column'] = 17;$x523->attributes['file'] = $x523->attributes['line'] = $x523->attributes['column'] = 0; }
throw new JSException($x523, 205, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x524, $W524, $S524, $U524);
$x525 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isFrozen', 205, 17, '<image>/02_object.js');
$x524 =& $x525[0]; list(,$W524,$S524,$U524) = $x525;
if ($U524 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isFrozen'] = $x524; $x524 =& $_Object->properties['isFrozen']; $_Object->attributes['isFrozen'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U524 = FALSE; $W524 = TRUE; }
if (isset($S524)) {
$x527 = $S524->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x528 = $x527($global, $_Object, $S524, array($x520), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x526 = $x528;
} else {
if (!$U524) {$x526 = $x520;if ($W524) { $x524 = $x520; }  }
else { $x526 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isFrozen') && 'isFrozen' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isFrozen' + 1; };
$x550 = clone JS::$functionTemplate; $x550->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_16'; $x550->parameters = array (
  0 => 'o',
); $x550->scope = $scope; $x550->properties['prototype'] = clone JS::$objectTemplate; $x550->attributes['prototype'] = JS::WRITABLE; $x550->properties['prototype']->properties['constructor'] = $x550; $x550->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x550->properties['length'] = 1; $x550->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x551 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 221, 21, '<image>/02_object.js');
$_TypeError =& $x551[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x551;
$x552 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x553 = $x552($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x553->class) && $x553->class === 'Error') {$x553->properties['file'] = '<image>/02_object.js';$x553->properties['line'] = 221;$x553->properties['column'] = 21;$x553->attributes['file'] = $x553->attributes['line'] = $x553->attributes['column'] = 0; }
throw new JSException($x553, 221, 21, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x554, $W554, $S554, $U554);
$x555 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isExtensible', 221, 21, '<image>/02_object.js');
$x554 =& $x555[0]; list(,$W554,$S554,$U554) = $x555;
if ($U554 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isExtensible'] = $x554; $x554 =& $_Object->properties['isExtensible']; $_Object->attributes['isExtensible'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U554 = FALSE; $W554 = TRUE; }
if (isset($S554)) {
$x557 = $S554->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x558 = $x557($global, $_Object, $S554, array($x550), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x556 = $x558;
} else {
if (!$U554) {$x556 = $x550;if ($W554) { $x554 = $x550; }  }
else { $x556 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isExtensible') && 'isExtensible' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isExtensible' + 1; };
$x593 = clone JS::$functionTemplate; $x593->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_17'; $x593->parameters = array (
  0 => 'o',
); $x593->scope = $scope; $x593->properties['prototype'] = clone JS::$objectTemplate; $x593->attributes['prototype'] = JS::WRITABLE; $x593->properties['prototype']->properties['constructor'] = $x593; $x593->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x593->properties['length'] = 1; $x593->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x594 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 229, 13, '<image>/02_object.js');
$_TypeError =& $x594[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x594;
$x595 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x596 = $x595($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x596->class) && $x596->class === 'Error') {$x596->properties['file'] = '<image>/02_object.js';$x596->properties['line'] = 229;$x596->properties['column'] = 13;$x596->attributes['file'] = $x596->attributes['line'] = $x596->attributes['column'] = 0; }
throw new JSException($x596, 229, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x597, $W597, $S597, $U597);
$x598 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'keys', 229, 13, '<image>/02_object.js');
$x597 =& $x598[0]; list(,$W597,$S597,$U597) = $x598;
if ($U597 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['keys'] = $x597; $x597 =& $_Object->properties['keys']; $_Object->attributes['keys'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U597 = FALSE; $W597 = TRUE; }
if (isset($S597)) {
$x600 = $S597->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x601 = $x600($global, $_Object, $S597, array($x593), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x599 = $x601;
} else {
if (!$U597) {$x599 = $x593;if ($W597) { $x597 = $x593; }  }
else { $x599 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('keys') && 'keys' >= $_Object->properties['length']) { $_Object->properties['length'] = 'keys' + 1; };
$x602 = clone JS::$objectTemplate;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x603 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 243, 18, '<image>/02_object.js');
$_TypeError =& $x603[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x603;
$x604 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x605 = $x604($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x605->class) && $x605->class === 'Error') {$x605->properties['file'] = '<image>/02_object.js';$x605->properties['line'] = 243;$x605->properties['column'] = 18;$x605->attributes['file'] = $x605->attributes['line'] = $x605->attributes['column'] = 0; }
throw new JSException($x605, 243, 18, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x606, $W606, $S606, $U606);
$x607 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'prototype', 243, 18, '<image>/02_object.js');
$x606 =& $x607[0]; list(,$W606,$S606,$U606) = $x607;
if ($U606 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['prototype'] = $x606; $x606 =& $_Object->properties['prototype']; $_Object->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U606 = FALSE; $W606 = TRUE; }
if (isset($S606)) {
$x609 = $S606->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x610 = $x609($global, $_Object, $S606, array($x602), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x608 = $x610;
} else {
if (!$U606) {$x608 = $x602;if ($W606) { $x606 = $x602; }  }
else { $x608 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Object->properties['length']) { $_Object->properties['length'] = 'prototype' + 1; };
$_Object->properties['prototype']->prototype = NULL;
$_Object->properties['prototype']->class = 'Object';
$_Object->properties['prototype']->extensible = TRUE;
unset($x611, $W611, $S611, $U611);
$x612 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 247, 7, '<image>/02_object.js');
$x611 =& $x612[0]; list(,$W611,$S611,$U611) = $x612;
if ($x611 === JS::$undefined || $x611 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x613 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 247, 30, '<image>/02_object.js');
$_TypeError =& $x613[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x613;
$x614 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x615 = $x614($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x615->class) && $x615->class === 'Error') {$x615->properties['file'] = '<image>/02_object.js';$x615->properties['line'] = 247;$x615->properties['column'] = 30;$x615->attributes['file'] = $x615->attributes['line'] = $x615->attributes['column'] = 0; }
throw new JSException($x615, 247, 30, '<image>/02_object.js');
}
$x611 = JS::toObject($x611, $global);
unset($x616, $W616, $S616, $U616);
$x617 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x611, (string) 'constructor', 247, 30, '<image>/02_object.js');
$x616 =& $x617[0]; list(,$W616,$S616,$U616) = $x617;
if ($U616 && (!isset($x611->extensible) || $x611->extensible)) {$x611->properties['constructor'] = $x616; $x616 =& $x611->properties['constructor']; $x611->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U616 = FALSE; $W616 = TRUE; }
if (isset($S616)) {
$x619 = $S616->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x620 = $x619($global, $x611, $S616, array($_Object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x618 = $x620;
} else {
if (!$U616) {$x618 = $_Object;if ($W616) { $x616 = $_Object; }  }
else { $x618 = JS::$undefined; }
}
if (isset($x611->class) && $x611->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x611->properties['length']) { $x611->properties['length'] = 'constructor' + 1; };
$x625 = clone JS::$functionTemplate; $x625->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_18'; $x625->parameters = array (
); $x625->scope = $scope; $x625->properties['prototype'] = clone JS::$objectTemplate; $x625->attributes['prototype'] = JS::WRITABLE; $x625->properties['prototype']->properties['constructor'] = $x625; $x625->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x625->properties['length'] = 0; $x625->attributes['length'] = 0;
unset($x626, $W626, $S626, $U626);
$x627 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 249, 7, '<image>/02_object.js');
$x626 =& $x627[0]; list(,$W626,$S626,$U626) = $x627;
if ($x626 === JS::$undefined || $x626 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x628 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 249, 27, '<image>/02_object.js');
$_TypeError =& $x628[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x628;
$x629 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x630 = $x629($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x630->class) && $x630->class === 'Error') {$x630->properties['file'] = '<image>/02_object.js';$x630->properties['line'] = 249;$x630->properties['column'] = 27;$x630->attributes['file'] = $x630->attributes['line'] = $x630->attributes['column'] = 0; }
throw new JSException($x630, 249, 27, '<image>/02_object.js');
}
$x626 = JS::toObject($x626, $global);
unset($x631, $W631, $S631, $U631);
$x632 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x626, (string) 'toString', 249, 27, '<image>/02_object.js');
$x631 =& $x632[0]; list(,$W631,$S631,$U631) = $x632;
if ($U631 && (!isset($x626->extensible) || $x626->extensible)) {$x626->properties['toString'] = $x631; $x631 =& $x626->properties['toString']; $x626->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U631 = FALSE; $W631 = TRUE; }
if (isset($S631)) {
$x634 = $S631->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x635 = $x634($global, $x626, $S631, array($x625), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x633 = $x635;
} else {
if (!$U631) {$x633 = $x625;if ($W631) { $x631 = $x625; }  }
else { $x633 = JS::$undefined; }
}
if (isset($x626->class) && $x626->class === 'Array' &&  is_int('toString') && 'toString' >= $x626->properties['length']) { $x626->properties['length'] = 'toString' + 1; };
$x649 = clone JS::$functionTemplate; $x649->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_19'; $x649->parameters = array (
); $x649->scope = $scope; $x649->properties['prototype'] = clone JS::$objectTemplate; $x649->attributes['prototype'] = JS::WRITABLE; $x649->properties['prototype']->properties['constructor'] = $x649; $x649->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x649->properties['length'] = 0; $x649->attributes['length'] = 0;
unset($x650, $W650, $S650, $U650);
$x651 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 267, 7, '<image>/02_object.js');
$x650 =& $x651[0]; list(,$W650,$S650,$U650) = $x651;
if ($x650 === JS::$undefined || $x650 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x652 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 267, 33, '<image>/02_object.js');
$_TypeError =& $x652[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x652;
$x653 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x654 = $x653($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x654->class) && $x654->class === 'Error') {$x654->properties['file'] = '<image>/02_object.js';$x654->properties['line'] = 267;$x654->properties['column'] = 33;$x654->attributes['file'] = $x654->attributes['line'] = $x654->attributes['column'] = 0; }
throw new JSException($x654, 267, 33, '<image>/02_object.js');
}
$x650 = JS::toObject($x650, $global);
unset($x655, $W655, $S655, $U655);
$x656 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x650, (string) 'toLocaleString', 267, 33, '<image>/02_object.js');
$x655 =& $x656[0]; list(,$W655,$S655,$U655) = $x656;
if ($U655 && (!isset($x650->extensible) || $x650->extensible)) {$x650->properties['toLocaleString'] = $x655; $x655 =& $x650->properties['toLocaleString']; $x650->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U655 = FALSE; $W655 = TRUE; }
if (isset($S655)) {
$x658 = $S655->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x659 = $x658($global, $x650, $S655, array($x649), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x657 = $x659;
} else {
if (!$U655) {$x657 = $x649;if ($W655) { $x655 = $x649; }  }
else { $x657 = JS::$undefined; }
}
if (isset($x650->class) && $x650->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x650->properties['length']) { $x650->properties['length'] = 'toLocaleString' + 1; };
$x677 = clone JS::$functionTemplate; $x677->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_20'; $x677->parameters = array (
); $x677->scope = $scope; $x677->properties['prototype'] = clone JS::$objectTemplate; $x677->attributes['prototype'] = JS::WRITABLE; $x677->properties['prototype']->properties['constructor'] = $x677; $x677->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x677->properties['length'] = 0; $x677->attributes['length'] = 0;
unset($x678, $W678, $S678, $U678);
$x679 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 271, 7, '<image>/02_object.js');
$x678 =& $x679[0]; list(,$W678,$S678,$U678) = $x679;
if ($x678 === JS::$undefined || $x678 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x680 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 271, 26, '<image>/02_object.js');
$_TypeError =& $x680[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x680;
$x681 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x682 = $x681($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x682->class) && $x682->class === 'Error') {$x682->properties['file'] = '<image>/02_object.js';$x682->properties['line'] = 271;$x682->properties['column'] = 26;$x682->attributes['file'] = $x682->attributes['line'] = $x682->attributes['column'] = 0; }
throw new JSException($x682, 271, 26, '<image>/02_object.js');
}
$x678 = JS::toObject($x678, $global);
unset($x683, $W683, $S683, $U683);
$x684 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x678, (string) 'valueOf', 271, 26, '<image>/02_object.js');
$x683 =& $x684[0]; list(,$W683,$S683,$U683) = $x684;
if ($U683 && (!isset($x678->extensible) || $x678->extensible)) {$x678->properties['valueOf'] = $x683; $x683 =& $x678->properties['valueOf']; $x678->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U683 = FALSE; $W683 = TRUE; }
if (isset($S683)) {
$x686 = $S683->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x687 = $x686($global, $x678, $S683, array($x677), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x685 = $x687;
} else {
if (!$U683) {$x685 = $x677;if ($W683) { $x683 = $x677; }  }
else { $x685 = JS::$undefined; }
}
if (isset($x678->class) && $x678->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x678->properties['length']) { $x678->properties['length'] = 'valueOf' + 1; };
$x690 = clone JS::$functionTemplate; $x690->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_21'; $x690->parameters = array (
  0 => 'p',
); $x690->scope = $scope; $x690->properties['prototype'] = clone JS::$objectTemplate; $x690->attributes['prototype'] = JS::WRITABLE; $x690->properties['prototype']->properties['constructor'] = $x690; $x690->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x690->properties['length'] = 1; $x690->attributes['length'] = 0;
unset($x691, $W691, $S691, $U691);
$x692 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 279, 7, '<image>/02_object.js');
$x691 =& $x692[0]; list(,$W691,$S691,$U691) = $x692;
if ($x691 === JS::$undefined || $x691 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x693 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 279, 33, '<image>/02_object.js');
$_TypeError =& $x693[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x693;
$x694 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x695 = $x694($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x695->class) && $x695->class === 'Error') {$x695->properties['file'] = '<image>/02_object.js';$x695->properties['line'] = 279;$x695->properties['column'] = 33;$x695->attributes['file'] = $x695->attributes['line'] = $x695->attributes['column'] = 0; }
throw new JSException($x695, 279, 33, '<image>/02_object.js');
}
$x691 = JS::toObject($x691, $global);
unset($x696, $W696, $S696, $U696);
$x697 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x691, (string) 'hasOwnProperty', 279, 33, '<image>/02_object.js');
$x696 =& $x697[0]; list(,$W696,$S696,$U696) = $x697;
if ($U696 && (!isset($x691->extensible) || $x691->extensible)) {$x691->properties['hasOwnProperty'] = $x696; $x696 =& $x691->properties['hasOwnProperty']; $x691->attributes['hasOwnProperty'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U696 = FALSE; $W696 = TRUE; }
if (isset($S696)) {
$x699 = $S696->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x700 = $x699($global, $x691, $S696, array($x690), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x698 = $x700;
} else {
if (!$U696) {$x698 = $x690;if ($W696) { $x696 = $x690; }  }
else { $x698 = JS::$undefined; }
}
if (isset($x691->class) && $x691->class === 'Array' &&  is_int('hasOwnProperty') && 'hasOwnProperty' >= $x691->properties['length']) { $x691->properties['length'] = 'hasOwnProperty' + 1; };
$x710 = clone JS::$functionTemplate; $x710->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_22'; $x710->parameters = array (
  0 => 'v',
); $x710->scope = $scope; $x710->properties['prototype'] = clone JS::$objectTemplate; $x710->attributes['prototype'] = JS::WRITABLE; $x710->properties['prototype']->properties['constructor'] = $x710; $x710->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x710->properties['length'] = 1; $x710->attributes['length'] = 0;
unset($x711, $W711, $S711, $U711);
$x712 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 283, 7, '<image>/02_object.js');
$x711 =& $x712[0]; list(,$W711,$S711,$U711) = $x712;
if ($x711 === JS::$undefined || $x711 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x713 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 283, 32, '<image>/02_object.js');
$_TypeError =& $x713[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x713;
$x714 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x715 = $x714($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x715->class) && $x715->class === 'Error') {$x715->properties['file'] = '<image>/02_object.js';$x715->properties['line'] = 283;$x715->properties['column'] = 32;$x715->attributes['file'] = $x715->attributes['line'] = $x715->attributes['column'] = 0; }
throw new JSException($x715, 283, 32, '<image>/02_object.js');
}
$x711 = JS::toObject($x711, $global);
unset($x716, $W716, $S716, $U716);
$x717 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x711, (string) 'isPrototypeOf', 283, 32, '<image>/02_object.js');
$x716 =& $x717[0]; list(,$W716,$S716,$U716) = $x717;
if ($U716 && (!isset($x711->extensible) || $x711->extensible)) {$x711->properties['isPrototypeOf'] = $x716; $x716 =& $x711->properties['isPrototypeOf']; $x711->attributes['isPrototypeOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U716 = FALSE; $W716 = TRUE; }
if (isset($S716)) {
$x719 = $S716->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x720 = $x719($global, $x711, $S716, array($x710), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x718 = $x720;
} else {
if (!$U716) {$x718 = $x710;if ($W716) { $x716 = $x710; }  }
else { $x718 = JS::$undefined; }
}
if (isset($x711->class) && $x711->class === 'Array' &&  is_int('isPrototypeOf') && 'isPrototypeOf' >= $x711->properties['length']) { $x711->properties['length'] = 'isPrototypeOf' + 1; };
$x723 = clone JS::$functionTemplate; $x723->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_23'; $x723->parameters = array (
  0 => 'p',
); $x723->scope = $scope; $x723->properties['prototype'] = clone JS::$objectTemplate; $x723->attributes['prototype'] = JS::WRITABLE; $x723->properties['prototype']->properties['constructor'] = $x723; $x723->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x723->properties['length'] = 1; $x723->attributes['length'] = 0;
unset($x724, $W724, $S724, $U724);
$x725 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 300, 7, '<image>/02_object.js');
$x724 =& $x725[0]; list(,$W724,$S724,$U724) = $x725;
if ($x724 === JS::$undefined || $x724 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x726 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 300, 39, '<image>/02_object.js');
$_TypeError =& $x726[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x726;
$x727 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x728 = $x727($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x728->class) && $x728->class === 'Error') {$x728->properties['file'] = '<image>/02_object.js';$x728->properties['line'] = 300;$x728->properties['column'] = 39;$x728->attributes['file'] = $x728->attributes['line'] = $x728->attributes['column'] = 0; }
throw new JSException($x728, 300, 39, '<image>/02_object.js');
}
$x724 = JS::toObject($x724, $global);
unset($x729, $W729, $S729, $U729);
$x730 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x724, (string) 'propertyIsEnumerable', 300, 39, '<image>/02_object.js');
$x729 =& $x730[0]; list(,$W729,$S729,$U729) = $x730;
if ($U729 && (!isset($x724->extensible) || $x724->extensible)) {$x724->properties['propertyIsEnumerable'] = $x729; $x729 =& $x724->properties['propertyIsEnumerable']; $x724->attributes['propertyIsEnumerable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U729 = FALSE; $W729 = TRUE; }
if (isset($S729)) {
$x732 = $S729->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x733 = $x732($global, $x724, $S729, array($x723), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x731 = $x733;
} else {
if (!$U729) {$x731 = $x723;if ($W729) { $x729 = $x723; }  }
else { $x731 = JS::$undefined; }
}
if (isset($x724->class) && $x724->class === 'Array' &&  is_int('propertyIsEnumerable') && 'propertyIsEnumerable' >= $x724->properties['length']) { $x724->properties['length'] = 'propertyIsEnumerable' + 1; };
;
return JS::$undefined;
}
