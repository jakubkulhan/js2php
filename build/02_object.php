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
for ($x361 = JS::toObject($_properties, $global); $x361; $x361 = $x361->prototype) {
foreach ($x361->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE)) { continue; }
$_p = $property;

unset($_Object, $WObject, $SObject, $UObject);
$x362 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'Object', 140, 3, '<image>/02_object.js');
$_Object =& $x362[0]; list(,$WObject,$SObject,$UObject) = $x362;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x363 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 140, 3, '<image>/02_object.js');
$_ReferenceError =& $x363[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x363;
$x364 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 3);
$x365 = $x364($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x365->class) && $x365->class === 'Error') {$x365->properties['file'] = '<image>/02_object.js';$x365->properties['line'] = 140;$x365->properties['column'] = 3;$x365->attributes['file'] = $x365->attributes['line'] = $x365->attributes['column'] = 0; }
throw new JSException($x365, 140, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x367 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x367[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x367;
$x368 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x369 = $x368($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x369->class) && $x369->class === 'Error') {$x369->properties['file'] = '<image>/02_object.js';$x369->properties['line'] = 140;$x369->properties['column'] = 24;$x369->attributes['file'] = $x369->attributes['line'] = $x369->attributes['column'] = 0; }
throw new JSException($x369, 140, 24, '<image>/02_object.js');
}
$x366 = JS::toObject($_Object, $global);
unset($x370, $W370, $S370, $U370);
$x371 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x366, (string) 'defineProperty', 140, 24, '<image>/02_object.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
unset($x372, $W372, $S372, $U372);
$x373 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_properties, (string) $_p, 140, 41, '<image>/02_object.js');
$x372 =& $x373[0]; list(,$W372,$S372,$U372) = $x373;
if (!(is_object($x370) && isset($x370->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x376 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x376[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x376;
$x377 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x378 = $x377($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x378->class) && $x378->class === 'Error') {$x378->properties['file'] = '<image>/02_object.js';$x378->properties['line'] = 140;$x378->properties['column'] = 24;$x378->attributes['file'] = $x378->attributes['line'] = $x378->attributes['column'] = 0; }
throw new JSException($x378, 140, 24, '<image>/02_object.js');
}
$x374 = $x370->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x375 = $x374($global, $x366, $x370, array($_o, $_p, $x372), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x327=&$scope->properties[\'arguments\'];$x327->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x327->properties[$i]=$args[$i];$x327->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x329=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x328=$x329;if(!JS::toBoolean($x328,$global)){$x332=$_o;$x332=($x332===JS::$undefined?\'undefined\':(is_int($x332)||is_float($x332)?\'number\':(is_bool($x332)?\'boolean\':(is_string($x332)?\'string\':(is_object($x332)&&isset($x332->call)?\'function\':\'object\')))));$x331=!(((gettype($x332)===gettype(\'object\')&&$x332===\'object\'))||(((is_float($x332)||is_int($x332))&&(is_float(\'object\')||is_int(\'object\')))&&$x332==\'object\'));$x330=$x331;if(JS::toBoolean($x330,$global)){$x334=$_o;$x334=($x334===JS::$undefined?\'undefined\':(is_int($x334)||is_float($x334)?\'number\':(is_bool($x334)?\'boolean\':(is_string($x334)?\'string\':(is_object($x334)&&isset($x334->call)?\'function\':\'object\')))));$x333=!(((gettype($x334)===gettype(\'function\')&&$x334===\'function\'))||(((is_float($x334)||is_int($x334))&&(is_float(\'function\')||is_int(\'function\')))&&$x334==\'function\'));$x330=$x333;}$x328=$x330;}if(JS::toBoolean($x328,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x337=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',132,13,\'<image>/02_object.js\');$_TypeError=&$x337[0];list(,$WTypeError,$STypeError,$UTypeError)=$x337;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x338=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',132,13,\'<image>/02_object.js\');$_ReferenceError=&$x338[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x338;$x339=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,13);$x340=$x339($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x340->class)&&$x340->class===\'Error\'){$x340->properties[\'file\']=\'<image>/02_object.js\';$x340->properties[\'line\']=132;$x340->properties[\'column\']=13;$x340->attributes[\'file\']=$x340->attributes[\'line\']=$x340->attributes[\'column\']=0;}throw new JSException($x340,132,13,\'<image>/02_object.js\');}$x335=clone JS::$objectTemplate;unset($x341,$W341,$S341,$U341);$x342=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',132,9,\'<image>/02_object.js\');$x341=&$x342[0];list(,$W341,$S341,$U341)=$x342;$x336=$x341;$x335->prototype=$x336;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x345=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x346=$x345($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x346->class)&&$x346->class===\'Error\'){$x346->properties[\'file\']=\'<image>/02_object.js\';$x346->properties[\'line\']=132;$x346->properties[\'column\']=9;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,132,9,\'<image>/02_object.js\');}$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x344=$x343($global,$x335,$_TypeError,array(\'Object.defineProperties(): Cannot define properties on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x336=$x344;if(is_object($x336)&&$x336!==JS::$undefined){$x335=$x336;}if(isset($x335->class)&&$x335->class===\'Error\'){$x335->properties[\'file\']=\'<image>/02_object.js\';$x335->properties[\'line\']=132;$x335->properties[\'column\']=3;$x335->attributes[\'file\']=$x335->attributes[\'line\']=$x335->attributes[\'column\']=0;}throw new JSException($x335,132,3,\'<image>/02_object.js\');}$x348=$_properties;$x348=($x348===JS::$undefined?\'undefined\':(is_int($x348)||is_float($x348)?\'number\':(is_bool($x348)?\'boolean\':(is_string($x348)?\'string\':(is_object($x348)&&isset($x348->call)?\'function\':\'object\')))));$x347=!(((gettype($x348)===gettype(\'object\')&&$x348===\'object\'))||(((is_float($x348)||is_int($x348))&&(is_float(\'object\')||is_int(\'object\')))&&$x348==\'object\'));if(JS::toBoolean($x347,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x351=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',136,13,\'<image>/02_object.js\');$_TypeError=&$x351[0];list(,$WTypeError,$STypeError,$UTypeError)=$x351;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x352=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',136,13,\'<image>/02_object.js\');$_ReferenceError=&$x352[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x352;$x353=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,13);$x354=$x353($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x354->class)&&$x354->class===\'Error\'){$x354->properties[\'file\']=\'<image>/02_object.js\';$x354->properties[\'line\']=136;$x354->properties[\'column\']=13;$x354->attributes[\'file\']=$x354->attributes[\'line\']=$x354->attributes[\'column\']=0;}throw new JSException($x354,136,13,\'<image>/02_object.js\');}$x349=clone JS::$objectTemplate;unset($x355,$W355,$S355,$U355);$x356=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',136,9,\'<image>/02_object.js\');$x355=&$x356[0];list(,$W355,$S355,$U355)=$x356;$x350=$x355;$x349->prototype=$x350;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x359=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x360=$x359($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x360->class)&&$x360->class===\'Error\'){$x360->properties[\'file\']=\'<image>/02_object.js\';$x360->properties[\'line\']=136;$x360->properties[\'column\']=9;$x360->attributes[\'file\']=$x360->attributes[\'line\']=$x360->attributes[\'column\']=0;}throw new JSException($x360,136,9,\'<image>/02_object.js\');}$x357=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x358=$x357($global,$x349,$_TypeError,array(\'Object.defineProperties(): Given properties argument is not an object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x350=$x358;if(is_object($x350)&&$x350!==JS::$undefined){$x349=$x350;}if(isset($x349->class)&&$x349->class===\'Error\'){$x349->properties[\'file\']=\'<image>/02_object.js\';$x349->properties[\'line\']=136;$x349->properties[\'column\']=3;$x349->attributes[\'file\']=$x349->attributes[\'line\']=$x349->attributes[\'column\']=0;}throw new JSException($x349,136,3,\'<image>/02_object.js\');}$scope->properties[\'p\']=JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$_p=JS::$undefined;if($_properties!==JS::$undefined&&$_properties!==NULL){for($x361=JS::toObject($_properties,$global);$x361;$x361=$x361->prototype){foreach($x361->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)){continue;}$_p=$property;unset($_Object,$WObject,$SObject,$UObject);$x362=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'Object\',140,3,\'<image>/02_object.js\');$_Object=&$x362[0];list(,$WObject,$SObject,$UObject)=$x362;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x363=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',140,3,\'<image>/02_object.js\');$_ReferenceError=&$x363[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x363;$x364=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,3);$x365=$x364($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x365->class)&&$x365->class===\'Error\'){$x365->properties[\'file\']=\'<image>/02_object.js\';$x365->properties[\'line\']=140;$x365->properties[\'column\']=3;$x365->attributes[\'file\']=$x365->attributes[\'line\']=$x365->attributes[\'column\']=0;}throw new JSException($x365,140,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x367=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x367[0];list(,$WTypeError,$STypeError,$UTypeError)=$x367;$x368=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x369=$x368($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x369->class)&&$x369->class===\'Error\'){$x369->properties[\'file\']=\'<image>/02_object.js\';$x369->properties[\'line\']=140;$x369->properties[\'column\']=24;$x369->attributes[\'file\']=$x369->attributes[\'line\']=$x369->attributes[\'column\']=0;}throw new JSException($x369,140,24,\'<image>/02_object.js\');}$x366=JS::toObject($_Object,$global);unset($x370,$W370,$S370,$U370);$x371=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x366,(string)\'defineProperty\',140,24,\'<image>/02_object.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;unset($x372,$W372,$S372,$U372);$x373=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_properties,(string)$_p,140,41,\'<image>/02_object.js\');$x372=&$x373[0];list(,$W372,$S372,$U372)=$x373;if(!(is_object($x370)&&isset($x370->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x376=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x376[0];list(,$WTypeError,$STypeError,$UTypeError)=$x376;$x377=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x378=$x377($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x378->class)&&$x378->class===\'Error\'){$x378->properties[\'file\']=\'<image>/02_object.js\';$x378->properties[\'line\']=140;$x378->properties[\'column\']=24;$x378->attributes[\'file\']=$x378->attributes[\'line\']=$x378->attributes[\'column\']=0;}throw new JSException($x378,140,24,\'<image>/02_object.js\');}$x374=$x370->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x375=$x374($global,$x366,$x370,array($_o,$_p,$x372),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x389 =& $scope->properties['arguments'];
$x389->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x389->properties[$i] = $args[$i];
$x389->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x391 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x390 = $x391;
if (!JS::toBoolean($x390, $global)) {
$x394 = $_o;
$x394 = ($x394 === JS::$undefined ? 'undefined' : (is_int($x394) || is_float($x394) ? 'number' : (is_bool($x394) ? 'boolean' : (is_string($x394) ? 'string' : (is_object($x394) && isset($x394->call) ? 'function' : 'object')))));
$x393 = !(((gettype($x394) === gettype('object') && $x394 === 'object'))|| (((is_float($x394) || is_int($x394)) && (is_float('object') || is_int('object'))) && $x394 == 'object'));
$x392 = $x393;
if (JS::toBoolean($x392, $global)) {
$x396 = $_o;
$x396 = ($x396 === JS::$undefined ? 'undefined' : (is_int($x396) || is_float($x396) ? 'number' : (is_bool($x396) ? 'boolean' : (is_string($x396) ? 'string' : (is_object($x396) && isset($x396->call) ? 'function' : 'object')))));
$x395 = !(((gettype($x396) === gettype('function') && $x396 === 'function'))|| (((is_float($x396) || is_int($x396)) && (is_float('function') || is_int('function'))) && $x396 == 'function'));
$x392 = $x395; }
$x390 = $x392; }
if (JS::toBoolean($x390, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x399 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 148, 13, '<image>/02_object.js');
$_TypeError =& $x399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x399;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x400 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 148, 13, '<image>/02_object.js');
$_ReferenceError =& $x400[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x400;
$x401 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 13);
$x402 = $x401($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x402->class) && $x402->class === 'Error') {$x402->properties['file'] = '<image>/02_object.js';$x402->properties['line'] = 148;$x402->properties['column'] = 13;$x402->attributes['file'] = $x402->attributes['line'] = $x402->attributes['column'] = 0; }
throw new JSException($x402, 148, 13, '<image>/02_object.js');
}
$x397 = clone JS::$objectTemplate;
unset($x403, $W403, $S403, $U403);
$x404 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 148, 9, '<image>/02_object.js');
$x403 =& $x404[0]; list(,$W403,$S403,$U403) = $x404;
$x398 = $x403;
$x397->prototype = $x398;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x407 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x408 = $x407($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x408->class) && $x408->class === 'Error') {$x408->properties['file'] = '<image>/02_object.js';$x408->properties['line'] = 148;$x408->properties['column'] = 9;$x408->attributes['file'] = $x408->attributes['line'] = $x408->attributes['column'] = 0; }
throw new JSException($x408, 148, 9, '<image>/02_object.js');
}
$x405 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x406 = $x405($global, $x397, $_TypeError, array('Object.seal(): Cannot seal non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x398 = $x406;
if (is_object($x398) && $x398 !== JS::$undefined) { $x397 = $x398; }
if (isset($x397->class) && $x397->class === 'Error') {$x397->properties['file'] = '<image>/02_object.js';$x397->properties['line'] = 148;$x397->properties['column'] = 3;$x397->attributes['file'] = $x397->attributes['line'] = $x397->attributes['column'] = 0; }
throw new JSException($x397, 148, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x389=&$scope->properties[\'arguments\'];$x389->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x389->properties[$i]=$args[$i];$x389->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x391=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x390=$x391;if(!JS::toBoolean($x390,$global)){$x394=$_o;$x394=($x394===JS::$undefined?\'undefined\':(is_int($x394)||is_float($x394)?\'number\':(is_bool($x394)?\'boolean\':(is_string($x394)?\'string\':(is_object($x394)&&isset($x394->call)?\'function\':\'object\')))));$x393=!(((gettype($x394)===gettype(\'object\')&&$x394===\'object\'))||(((is_float($x394)||is_int($x394))&&(is_float(\'object\')||is_int(\'object\')))&&$x394==\'object\'));$x392=$x393;if(JS::toBoolean($x392,$global)){$x396=$_o;$x396=($x396===JS::$undefined?\'undefined\':(is_int($x396)||is_float($x396)?\'number\':(is_bool($x396)?\'boolean\':(is_string($x396)?\'string\':(is_object($x396)&&isset($x396->call)?\'function\':\'object\')))));$x395=!(((gettype($x396)===gettype(\'function\')&&$x396===\'function\'))||(((is_float($x396)||is_int($x396))&&(is_float(\'function\')||is_int(\'function\')))&&$x396==\'function\'));$x392=$x395;}$x390=$x392;}if(JS::toBoolean($x390,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x399=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',148,13,\'<image>/02_object.js\');$_TypeError=&$x399[0];list(,$WTypeError,$STypeError,$UTypeError)=$x399;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x400=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',148,13,\'<image>/02_object.js\');$_ReferenceError=&$x400[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x400;$x401=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,13);$x402=$x401($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x402->class)&&$x402->class===\'Error\'){$x402->properties[\'file\']=\'<image>/02_object.js\';$x402->properties[\'line\']=148;$x402->properties[\'column\']=13;$x402->attributes[\'file\']=$x402->attributes[\'line\']=$x402->attributes[\'column\']=0;}throw new JSException($x402,148,13,\'<image>/02_object.js\');}$x397=clone JS::$objectTemplate;unset($x403,$W403,$S403,$U403);$x404=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',148,9,\'<image>/02_object.js\');$x403=&$x404[0];list(,$W403,$S403,$U403)=$x404;$x398=$x403;$x397->prototype=$x398;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x407=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x408=$x407($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x408->class)&&$x408->class===\'Error\'){$x408->properties[\'file\']=\'<image>/02_object.js\';$x408->properties[\'line\']=148;$x408->properties[\'column\']=9;$x408->attributes[\'file\']=$x408->attributes[\'line\']=$x408->attributes[\'column\']=0;}throw new JSException($x408,148,9,\'<image>/02_object.js\');}$x405=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x406=$x405($global,$x397,$_TypeError,array(\'Object.seal(): Cannot seal non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x398=$x406;if(is_object($x398)&&$x398!==JS::$undefined){$x397=$x398;}if(isset($x397->class)&&$x397->class===\'Error\'){$x397->properties[\'file\']=\'<image>/02_object.js\';$x397->properties[\'line\']=148;$x397->properties[\'column\']=3;$x397->attributes[\'file\']=$x397->attributes[\'line\']=$x397->attributes[\'column\']=0;}throw new JSException($x397,148,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x419 =& $scope->properties['arguments'];
$x419->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x419->properties[$i] = $args[$i];
$x419->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x421 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x420 = $x421;
if (!JS::toBoolean($x420, $global)) {
$x424 = $_o;
$x424 = ($x424 === JS::$undefined ? 'undefined' : (is_int($x424) || is_float($x424) ? 'number' : (is_bool($x424) ? 'boolean' : (is_string($x424) ? 'string' : (is_object($x424) && isset($x424->call) ? 'function' : 'object')))));
$x423 = !(((gettype($x424) === gettype('object') && $x424 === 'object'))|| (((is_float($x424) || is_int($x424)) && (is_float('object') || is_int('object'))) && $x424 == 'object'));
$x422 = $x423;
if (JS::toBoolean($x422, $global)) {
$x426 = $_o;
$x426 = ($x426 === JS::$undefined ? 'undefined' : (is_int($x426) || is_float($x426) ? 'number' : (is_bool($x426) ? 'boolean' : (is_string($x426) ? 'string' : (is_object($x426) && isset($x426->call) ? 'function' : 'object')))));
$x425 = !(((gettype($x426) === gettype('function') && $x426 === 'function'))|| (((is_float($x426) || is_int($x426)) && (is_float('function') || is_int('function'))) && $x426 == 'function'));
$x422 = $x425; }
$x420 = $x422; }
if (JS::toBoolean($x420, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x429 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 164, 13, '<image>/02_object.js');
$_TypeError =& $x429[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x429;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x430 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 164, 13, '<image>/02_object.js');
$_ReferenceError =& $x430[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x430;
$x431 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 13);
$x432 = $x431($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x432->class) && $x432->class === 'Error') {$x432->properties['file'] = '<image>/02_object.js';$x432->properties['line'] = 164;$x432->properties['column'] = 13;$x432->attributes['file'] = $x432->attributes['line'] = $x432->attributes['column'] = 0; }
throw new JSException($x432, 164, 13, '<image>/02_object.js');
}
$x427 = clone JS::$objectTemplate;
unset($x433, $W433, $S433, $U433);
$x434 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 164, 9, '<image>/02_object.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
$x428 = $x433;
$x427->prototype = $x428;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x437 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x438 = $x437($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x438->class) && $x438->class === 'Error') {$x438->properties['file'] = '<image>/02_object.js';$x438->properties['line'] = 164;$x438->properties['column'] = 9;$x438->attributes['file'] = $x438->attributes['line'] = $x438->attributes['column'] = 0; }
throw new JSException($x438, 164, 9, '<image>/02_object.js');
}
$x435 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x436 = $x435($global, $x427, $_TypeError, array('Object.freeze(): Cannot freeze non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x428 = $x436;
if (is_object($x428) && $x428 !== JS::$undefined) { $x427 = $x428; }
if (isset($x427->class) && $x427->class === 'Error') {$x427->properties['file'] = '<image>/02_object.js';$x427->properties['line'] = 164;$x427->properties['column'] = 3;$x427->attributes['file'] = $x427->attributes['line'] = $x427->attributes['column'] = 0; }
throw new JSException($x427, 164, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::WRITABLE;$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x419=&$scope->properties[\'arguments\'];$x419->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x419->properties[$i]=$args[$i];$x419->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x421=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x420=$x421;if(!JS::toBoolean($x420,$global)){$x424=$_o;$x424=($x424===JS::$undefined?\'undefined\':(is_int($x424)||is_float($x424)?\'number\':(is_bool($x424)?\'boolean\':(is_string($x424)?\'string\':(is_object($x424)&&isset($x424->call)?\'function\':\'object\')))));$x423=!(((gettype($x424)===gettype(\'object\')&&$x424===\'object\'))||(((is_float($x424)||is_int($x424))&&(is_float(\'object\')||is_int(\'object\')))&&$x424==\'object\'));$x422=$x423;if(JS::toBoolean($x422,$global)){$x426=$_o;$x426=($x426===JS::$undefined?\'undefined\':(is_int($x426)||is_float($x426)?\'number\':(is_bool($x426)?\'boolean\':(is_string($x426)?\'string\':(is_object($x426)&&isset($x426->call)?\'function\':\'object\')))));$x425=!(((gettype($x426)===gettype(\'function\')&&$x426===\'function\'))||(((is_float($x426)||is_int($x426))&&(is_float(\'function\')||is_int(\'function\')))&&$x426==\'function\'));$x422=$x425;}$x420=$x422;}if(JS::toBoolean($x420,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x429=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',164,13,\'<image>/02_object.js\');$_TypeError=&$x429[0];list(,$WTypeError,$STypeError,$UTypeError)=$x429;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x430=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',164,13,\'<image>/02_object.js\');$_ReferenceError=&$x430[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x430;$x431=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,13);$x432=$x431($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x432->class)&&$x432->class===\'Error\'){$x432->properties[\'file\']=\'<image>/02_object.js\';$x432->properties[\'line\']=164;$x432->properties[\'column\']=13;$x432->attributes[\'file\']=$x432->attributes[\'line\']=$x432->attributes[\'column\']=0;}throw new JSException($x432,164,13,\'<image>/02_object.js\');}$x427=clone JS::$objectTemplate;unset($x433,$W433,$S433,$U433);$x434=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',164,9,\'<image>/02_object.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;$x428=$x433;$x427->prototype=$x428;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x437=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x438=$x437($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x438->class)&&$x438->class===\'Error\'){$x438->properties[\'file\']=\'<image>/02_object.js\';$x438->properties[\'line\']=164;$x438->properties[\'column\']=9;$x438->attributes[\'file\']=$x438->attributes[\'line\']=$x438->attributes[\'column\']=0;}throw new JSException($x438,164,9,\'<image>/02_object.js\');}$x435=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x436=$x435($global,$x427,$_TypeError,array(\'Object.freeze(): Cannot freeze non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x428=$x436;if(is_object($x428)&&$x428!==JS::$undefined){$x427=$x428;}if(isset($x427->class)&&$x427->class===\'Error\'){$x427->properties[\'file\']=\'<image>/02_object.js\';$x427->properties[\'line\']=164;$x427->properties[\'column\']=3;$x427->attributes[\'file\']=$x427->attributes[\'line\']=$x427->attributes[\'column\']=0;}throw new JSException($x427,164,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::WRITABLE;$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x449 =& $scope->properties['arguments'];
$x449->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x449->properties[$i] = $args[$i];
$x449->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x451 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x450 = $x451;
if (!JS::toBoolean($x450, $global)) {
$x454 = $_o;
$x454 = ($x454 === JS::$undefined ? 'undefined' : (is_int($x454) || is_float($x454) ? 'number' : (is_bool($x454) ? 'boolean' : (is_string($x454) ? 'string' : (is_object($x454) && isset($x454->call) ? 'function' : 'object')))));
$x453 = !(((gettype($x454) === gettype('object') && $x454 === 'object'))|| (((is_float($x454) || is_int($x454)) && (is_float('object') || is_int('object'))) && $x454 == 'object'));
$x452 = $x453;
if (JS::toBoolean($x452, $global)) {
$x456 = $_o;
$x456 = ($x456 === JS::$undefined ? 'undefined' : (is_int($x456) || is_float($x456) ? 'number' : (is_bool($x456) ? 'boolean' : (is_string($x456) ? 'string' : (is_object($x456) && isset($x456->call) ? 'function' : 'object')))));
$x455 = !(((gettype($x456) === gettype('function') && $x456 === 'function'))|| (((is_float($x456) || is_int($x456)) && (is_float('function') || is_int('function'))) && $x456 == 'function'));
$x452 = $x455; }
$x450 = $x452; }
if (JS::toBoolean($x450, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x459 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 181, 13, '<image>/02_object.js');
$_TypeError =& $x459[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x459;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x460 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 181, 13, '<image>/02_object.js');
$_ReferenceError =& $x460[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x460;
$x461 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 13);
$x462 = $x461($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x462->class) && $x462->class === 'Error') {$x462->properties['file'] = '<image>/02_object.js';$x462->properties['line'] = 181;$x462->properties['column'] = 13;$x462->attributes['file'] = $x462->attributes['line'] = $x462->attributes['column'] = 0; }
throw new JSException($x462, 181, 13, '<image>/02_object.js');
}
$x457 = clone JS::$objectTemplate;
unset($x463, $W463, $S463, $U463);
$x464 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 181, 9, '<image>/02_object.js');
$x463 =& $x464[0]; list(,$W463,$S463,$U463) = $x464;
$x458 = $x463;
$x457->prototype = $x458;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x467 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x468 = $x467($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x468->class) && $x468->class === 'Error') {$x468->properties['file'] = '<image>/02_object.js';$x468->properties['line'] = 181;$x468->properties['column'] = 9;$x468->attributes['file'] = $x468->attributes['line'] = $x468->attributes['column'] = 0; }
throw new JSException($x468, 181, 9, '<image>/02_object.js');
}
$x465 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x466 = $x465($global, $x457, $_TypeError, array('Object.preventExtensions(): Cannot prevent extensions on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x458 = $x466;
if (is_object($x458) && $x458 !== JS::$undefined) { $x457 = $x458; }
if (isset($x457->class) && $x457->class === 'Error') {$x457->properties['file'] = '<image>/02_object.js';$x457->properties['line'] = 181;$x457->properties['column'] = 3;$x457->attributes['file'] = $x457->attributes['line'] = $x457->attributes['column'] = 0; }
throw new JSException($x457, 181, 3, '<image>/02_object.js');;
};
$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x449=&$scope->properties[\'arguments\'];$x449->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x449->properties[$i]=$args[$i];$x449->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x451=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x450=$x451;if(!JS::toBoolean($x450,$global)){$x454=$_o;$x454=($x454===JS::$undefined?\'undefined\':(is_int($x454)||is_float($x454)?\'number\':(is_bool($x454)?\'boolean\':(is_string($x454)?\'string\':(is_object($x454)&&isset($x454->call)?\'function\':\'object\')))));$x453=!(((gettype($x454)===gettype(\'object\')&&$x454===\'object\'))||(((is_float($x454)||is_int($x454))&&(is_float(\'object\')||is_int(\'object\')))&&$x454==\'object\'));$x452=$x453;if(JS::toBoolean($x452,$global)){$x456=$_o;$x456=($x456===JS::$undefined?\'undefined\':(is_int($x456)||is_float($x456)?\'number\':(is_bool($x456)?\'boolean\':(is_string($x456)?\'string\':(is_object($x456)&&isset($x456->call)?\'function\':\'object\')))));$x455=!(((gettype($x456)===gettype(\'function\')&&$x456===\'function\'))||(((is_float($x456)||is_int($x456))&&(is_float(\'function\')||is_int(\'function\')))&&$x456==\'function\'));$x452=$x455;}$x450=$x452;}if(JS::toBoolean($x450,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x459=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',181,13,\'<image>/02_object.js\');$_TypeError=&$x459[0];list(,$WTypeError,$STypeError,$UTypeError)=$x459;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x460=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',181,13,\'<image>/02_object.js\');$_ReferenceError=&$x460[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x460;$x461=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,13);$x462=$x461($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x462->class)&&$x462->class===\'Error\'){$x462->properties[\'file\']=\'<image>/02_object.js\';$x462->properties[\'line\']=181;$x462->properties[\'column\']=13;$x462->attributes[\'file\']=$x462->attributes[\'line\']=$x462->attributes[\'column\']=0;}throw new JSException($x462,181,13,\'<image>/02_object.js\');}$x457=clone JS::$objectTemplate;unset($x463,$W463,$S463,$U463);$x464=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',181,9,\'<image>/02_object.js\');$x463=&$x464[0];list(,$W463,$S463,$U463)=$x464;$x458=$x463;$x457->prototype=$x458;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x467=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x468=$x467($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x468->class)&&$x468->class===\'Error\'){$x468->properties[\'file\']=\'<image>/02_object.js\';$x468->properties[\'line\']=181;$x468->properties[\'column\']=9;$x468->attributes[\'file\']=$x468->attributes[\'line\']=$x468->attributes[\'column\']=0;}throw new JSException($x468,181,9,\'<image>/02_object.js\');}$x465=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x466=$x465($global,$x457,$_TypeError,array(\'Object.preventExtensions(): Cannot prevent extensions on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x458=$x466;if(is_object($x458)&&$x458!==JS::$undefined){$x457=$x458;}if(isset($x457->class)&&$x457->class===\'Error\'){$x457->properties[\'file\']=\'<image>/02_object.js\';$x457->properties[\'line\']=181;$x457->properties[\'column\']=3;$x457->attributes[\'file\']=$x457->attributes[\'line\']=$x457->attributes[\'column\']=0;}throw new JSException($x457,181,3,\'<image>/02_object.js\');}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x479 =& $scope->properties['arguments'];
$x479->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x479->properties[$i] = $args[$i];
$x479->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x481 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x480 = $x481;
if (!JS::toBoolean($x480, $global)) {
$x484 = $_o;
$x484 = ($x484 === JS::$undefined ? 'undefined' : (is_int($x484) || is_float($x484) ? 'number' : (is_bool($x484) ? 'boolean' : (is_string($x484) ? 'string' : (is_object($x484) && isset($x484->call) ? 'function' : 'object')))));
$x483 = !(((gettype($x484) === gettype('object') && $x484 === 'object'))|| (((is_float($x484) || is_int($x484)) && (is_float('object') || is_int('object'))) && $x484 == 'object'));
$x482 = $x483;
if (JS::toBoolean($x482, $global)) {
$x486 = $_o;
$x486 = ($x486 === JS::$undefined ? 'undefined' : (is_int($x486) || is_float($x486) ? 'number' : (is_bool($x486) ? 'boolean' : (is_string($x486) ? 'string' : (is_object($x486) && isset($x486->call) ? 'function' : 'object')))));
$x485 = !(((gettype($x486) === gettype('function') && $x486 === 'function'))|| (((is_float($x486) || is_int($x486)) && (is_float('function') || is_int('function'))) && $x486 == 'function'));
$x482 = $x485; }
$x480 = $x482; }
if (JS::toBoolean($x480, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x489 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 191, 13, '<image>/02_object.js');
$_TypeError =& $x489[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x489;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x490 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 191, 13, '<image>/02_object.js');
$_ReferenceError =& $x490[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x490;
$x491 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 13);
$x492 = $x491($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x492->class) && $x492->class === 'Error') {$x492->properties['file'] = '<image>/02_object.js';$x492->properties['line'] = 191;$x492->properties['column'] = 13;$x492->attributes['file'] = $x492->attributes['line'] = $x492->attributes['column'] = 0; }
throw new JSException($x492, 191, 13, '<image>/02_object.js');
}
$x487 = clone JS::$objectTemplate;
unset($x493, $W493, $S493, $U493);
$x494 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 191, 9, '<image>/02_object.js');
$x493 =& $x494[0]; list(,$W493,$S493,$U493) = $x494;
$x488 = $x493;
$x487->prototype = $x488;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x497 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x498 = $x497($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x498->class) && $x498->class === 'Error') {$x498->properties['file'] = '<image>/02_object.js';$x498->properties['line'] = 191;$x498->properties['column'] = 9;$x498->attributes['file'] = $x498->attributes['line'] = $x498->attributes['column'] = 0; }
throw new JSException($x498, 191, 9, '<image>/02_object.js');
}
$x495 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x496 = $x495($global, $x487, $_TypeError, array('Object.isSealed(): Cannot return if sealed, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x488 = $x496;
if (is_object($x488) && $x488 !== JS::$undefined) { $x487 = $x488; }
if (isset($x487->class) && $x487->class === 'Error') {$x487->properties['file'] = '<image>/02_object.js';$x487->properties['line'] = 191;$x487->properties['column'] = 3;$x487->attributes['file'] = $x487->attributes['line'] = $x487->attributes['column'] = 0; }
throw new JSException($x487, 191, 3, '<image>/02_object.js');;
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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x479=&$scope->properties[\'arguments\'];$x479->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x479->properties[$i]=$args[$i];$x479->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x481=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x480=$x481;if(!JS::toBoolean($x480,$global)){$x484=$_o;$x484=($x484===JS::$undefined?\'undefined\':(is_int($x484)||is_float($x484)?\'number\':(is_bool($x484)?\'boolean\':(is_string($x484)?\'string\':(is_object($x484)&&isset($x484->call)?\'function\':\'object\')))));$x483=!(((gettype($x484)===gettype(\'object\')&&$x484===\'object\'))||(((is_float($x484)||is_int($x484))&&(is_float(\'object\')||is_int(\'object\')))&&$x484==\'object\'));$x482=$x483;if(JS::toBoolean($x482,$global)){$x486=$_o;$x486=($x486===JS::$undefined?\'undefined\':(is_int($x486)||is_float($x486)?\'number\':(is_bool($x486)?\'boolean\':(is_string($x486)?\'string\':(is_object($x486)&&isset($x486->call)?\'function\':\'object\')))));$x485=!(((gettype($x486)===gettype(\'function\')&&$x486===\'function\'))||(((is_float($x486)||is_int($x486))&&(is_float(\'function\')||is_int(\'function\')))&&$x486==\'function\'));$x482=$x485;}$x480=$x482;}if(JS::toBoolean($x480,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x489=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',191,13,\'<image>/02_object.js\');$_TypeError=&$x489[0];list(,$WTypeError,$STypeError,$UTypeError)=$x489;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x490=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',191,13,\'<image>/02_object.js\');$_ReferenceError=&$x490[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x490;$x491=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,13);$x492=$x491($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x492->class)&&$x492->class===\'Error\'){$x492->properties[\'file\']=\'<image>/02_object.js\';$x492->properties[\'line\']=191;$x492->properties[\'column\']=13;$x492->attributes[\'file\']=$x492->attributes[\'line\']=$x492->attributes[\'column\']=0;}throw new JSException($x492,191,13,\'<image>/02_object.js\');}$x487=clone JS::$objectTemplate;unset($x493,$W493,$S493,$U493);$x494=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',191,9,\'<image>/02_object.js\');$x493=&$x494[0];list(,$W493,$S493,$U493)=$x494;$x488=$x493;$x487->prototype=$x488;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x497=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x498=$x497($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x498->class)&&$x498->class===\'Error\'){$x498->properties[\'file\']=\'<image>/02_object.js\';$x498->properties[\'line\']=191;$x498->properties[\'column\']=9;$x498->attributes[\'file\']=$x498->attributes[\'line\']=$x498->attributes[\'column\']=0;}throw new JSException($x498,191,9,\'<image>/02_object.js\');}$x495=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x496=$x495($global,$x487,$_TypeError,array(\'Object.isSealed(): Cannot return if sealed, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x488=$x496;if(is_object($x488)&&$x488!==JS::$undefined){$x487=$x488;}if(isset($x487->class)&&$x487->class===\'Error\'){$x487->properties[\'file\']=\'<image>/02_object.js\';$x487->properties[\'line\']=191;$x487->properties[\'column\']=3;$x487->attributes[\'file\']=$x487->attributes[\'line\']=$x487->attributes[\'column\']=0;}throw new JSException($x487,191,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&JS::CONFIGURABLE){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x509 =& $scope->properties['arguments'];
$x509->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x509->properties[$i] = $args[$i];
$x509->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x511 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x510 = $x511;
if (!JS::toBoolean($x510, $global)) {
$x514 = $_o;
$x514 = ($x514 === JS::$undefined ? 'undefined' : (is_int($x514) || is_float($x514) ? 'number' : (is_bool($x514) ? 'boolean' : (is_string($x514) ? 'string' : (is_object($x514) && isset($x514->call) ? 'function' : 'object')))));
$x513 = !(((gettype($x514) === gettype('object') && $x514 === 'object'))|| (((is_float($x514) || is_int($x514)) && (is_float('object') || is_int('object'))) && $x514 == 'object'));
$x512 = $x513;
if (JS::toBoolean($x512, $global)) {
$x516 = $_o;
$x516 = ($x516 === JS::$undefined ? 'undefined' : (is_int($x516) || is_float($x516) ? 'number' : (is_bool($x516) ? 'boolean' : (is_string($x516) ? 'string' : (is_object($x516) && isset($x516->call) ? 'function' : 'object')))));
$x515 = !(((gettype($x516) === gettype('function') && $x516 === 'function'))|| (((is_float($x516) || is_int($x516)) && (is_float('function') || is_int('function'))) && $x516 == 'function'));
$x512 = $x515; }
$x510 = $x512; }
if (JS::toBoolean($x510, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x519 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 207, 13, '<image>/02_object.js');
$_TypeError =& $x519[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x519;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x520 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 207, 13, '<image>/02_object.js');
$_ReferenceError =& $x520[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x520;
$x521 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 13);
$x522 = $x521($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x522->class) && $x522->class === 'Error') {$x522->properties['file'] = '<image>/02_object.js';$x522->properties['line'] = 207;$x522->properties['column'] = 13;$x522->attributes['file'] = $x522->attributes['line'] = $x522->attributes['column'] = 0; }
throw new JSException($x522, 207, 13, '<image>/02_object.js');
}
$x517 = clone JS::$objectTemplate;
unset($x523, $W523, $S523, $U523);
$x524 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 207, 9, '<image>/02_object.js');
$x523 =& $x524[0]; list(,$W523,$S523,$U523) = $x524;
$x518 = $x523;
$x517->prototype = $x518;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x527 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x528 = $x527($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x528->class) && $x528->class === 'Error') {$x528->properties['file'] = '<image>/02_object.js';$x528->properties['line'] = 207;$x528->properties['column'] = 9;$x528->attributes['file'] = $x528->attributes['line'] = $x528->attributes['column'] = 0; }
throw new JSException($x528, 207, 9, '<image>/02_object.js');
}
$x525 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x526 = $x525($global, $x517, $_TypeError, array('Object.isFrozen(): Cannot return if frozen, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x518 = $x526;
if (is_object($x518) && $x518 !== JS::$undefined) { $x517 = $x518; }
if (isset($x517->class) && $x517->class === 'Error') {$x517->properties['file'] = '<image>/02_object.js';$x517->properties['line'] = 207;$x517->properties['column'] = 3;$x517->attributes['file'] = $x517->attributes['line'] = $x517->attributes['column'] = 0; }
throw new JSException($x517, 207, 3, '<image>/02_object.js');;
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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x509=&$scope->properties[\'arguments\'];$x509->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x509->properties[$i]=$args[$i];$x509->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x511=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x510=$x511;if(!JS::toBoolean($x510,$global)){$x514=$_o;$x514=($x514===JS::$undefined?\'undefined\':(is_int($x514)||is_float($x514)?\'number\':(is_bool($x514)?\'boolean\':(is_string($x514)?\'string\':(is_object($x514)&&isset($x514->call)?\'function\':\'object\')))));$x513=!(((gettype($x514)===gettype(\'object\')&&$x514===\'object\'))||(((is_float($x514)||is_int($x514))&&(is_float(\'object\')||is_int(\'object\')))&&$x514==\'object\'));$x512=$x513;if(JS::toBoolean($x512,$global)){$x516=$_o;$x516=($x516===JS::$undefined?\'undefined\':(is_int($x516)||is_float($x516)?\'number\':(is_bool($x516)?\'boolean\':(is_string($x516)?\'string\':(is_object($x516)&&isset($x516->call)?\'function\':\'object\')))));$x515=!(((gettype($x516)===gettype(\'function\')&&$x516===\'function\'))||(((is_float($x516)||is_int($x516))&&(is_float(\'function\')||is_int(\'function\')))&&$x516==\'function\'));$x512=$x515;}$x510=$x512;}if(JS::toBoolean($x510,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x519=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',207,13,\'<image>/02_object.js\');$_TypeError=&$x519[0];list(,$WTypeError,$STypeError,$UTypeError)=$x519;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x520=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',207,13,\'<image>/02_object.js\');$_ReferenceError=&$x520[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x520;$x521=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,13);$x522=$x521($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x522->class)&&$x522->class===\'Error\'){$x522->properties[\'file\']=\'<image>/02_object.js\';$x522->properties[\'line\']=207;$x522->properties[\'column\']=13;$x522->attributes[\'file\']=$x522->attributes[\'line\']=$x522->attributes[\'column\']=0;}throw new JSException($x522,207,13,\'<image>/02_object.js\');}$x517=clone JS::$objectTemplate;unset($x523,$W523,$S523,$U523);$x524=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',207,9,\'<image>/02_object.js\');$x523=&$x524[0];list(,$W523,$S523,$U523)=$x524;$x518=$x523;$x517->prototype=$x518;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x527=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x528=$x527($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x528->class)&&$x528->class===\'Error\'){$x528->properties[\'file\']=\'<image>/02_object.js\';$x528->properties[\'line\']=207;$x528->properties[\'column\']=9;$x528->attributes[\'file\']=$x528->attributes[\'line\']=$x528->attributes[\'column\']=0;}throw new JSException($x528,207,9,\'<image>/02_object.js\');}$x525=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x526=$x525($global,$x517,$_TypeError,array(\'Object.isFrozen(): Cannot return if frozen, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x518=$x526;if(is_object($x518)&&$x518!==JS::$undefined){$x517=$x518;}if(isset($x517->class)&&$x517->class===\'Error\'){$x517->properties[\'file\']=\'<image>/02_object.js\';$x517->properties[\'line\']=207;$x517->properties[\'column\']=3;$x517->attributes[\'file\']=$x517->attributes[\'line\']=$x517->attributes[\'column\']=0;}throw new JSException($x517,207,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&(JS::CONFIGURABLE|JS::WRITABLE)){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x539 =& $scope->properties['arguments'];
$x539->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x539->properties[$i] = $args[$i];
$x539->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x541 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x540 = $x541;
if (!JS::toBoolean($x540, $global)) {
$x544 = $_o;
$x544 = ($x544 === JS::$undefined ? 'undefined' : (is_int($x544) || is_float($x544) ? 'number' : (is_bool($x544) ? 'boolean' : (is_string($x544) ? 'string' : (is_object($x544) && isset($x544->call) ? 'function' : 'object')))));
$x543 = !(((gettype($x544) === gettype('object') && $x544 === 'object'))|| (((is_float($x544) || is_int($x544)) && (is_float('object') || is_int('object'))) && $x544 == 'object'));
$x542 = $x543;
if (JS::toBoolean($x542, $global)) {
$x546 = $_o;
$x546 = ($x546 === JS::$undefined ? 'undefined' : (is_int($x546) || is_float($x546) ? 'number' : (is_bool($x546) ? 'boolean' : (is_string($x546) ? 'string' : (is_object($x546) && isset($x546->call) ? 'function' : 'object')))));
$x545 = !(((gettype($x546) === gettype('function') && $x546 === 'function'))|| (((is_float($x546) || is_int($x546)) && (is_float('function') || is_int('function'))) && $x546 == 'function'));
$x542 = $x545; }
$x540 = $x542; }
if (JS::toBoolean($x540, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x549 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 223, 13, '<image>/02_object.js');
$_TypeError =& $x549[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x549;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x550 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 223, 13, '<image>/02_object.js');
$_ReferenceError =& $x550[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x550;
$x551 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 13);
$x552 = $x551($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x552->class) && $x552->class === 'Error') {$x552->properties['file'] = '<image>/02_object.js';$x552->properties['line'] = 223;$x552->properties['column'] = 13;$x552->attributes['file'] = $x552->attributes['line'] = $x552->attributes['column'] = 0; }
throw new JSException($x552, 223, 13, '<image>/02_object.js');
}
$x547 = clone JS::$objectTemplate;
unset($x553, $W553, $S553, $U553);
$x554 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 223, 9, '<image>/02_object.js');
$x553 =& $x554[0]; list(,$W553,$S553,$U553) = $x554;
$x548 = $x553;
$x547->prototype = $x548;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x557 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x558 = $x557($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x558->class) && $x558->class === 'Error') {$x558->properties['file'] = '<image>/02_object.js';$x558->properties['line'] = 223;$x558->properties['column'] = 9;$x558->attributes['file'] = $x558->attributes['line'] = $x558->attributes['column'] = 0; }
throw new JSException($x558, 223, 9, '<image>/02_object.js');
}
$x555 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x556 = $x555($global, $x547, $_TypeError, array('Object.isExtensible(): Cannot return if extensible, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x548 = $x556;
if (is_object($x548) && $x548 !== JS::$undefined) { $x547 = $x548; }
if (isset($x547->class) && $x547->class === 'Error') {$x547->properties['file'] = '<image>/02_object.js';$x547->properties['line'] = 223;$x547->properties['column'] = 3;$x547->attributes['file'] = $x547->attributes['line'] = $x547->attributes['column'] = 0; }
throw new JSException($x547, 223, 3, '<image>/02_object.js');;
};
return$_o->extensible;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x539=&$scope->properties[\'arguments\'];$x539->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x539->properties[$i]=$args[$i];$x539->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x541=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x540=$x541;if(!JS::toBoolean($x540,$global)){$x544=$_o;$x544=($x544===JS::$undefined?\'undefined\':(is_int($x544)||is_float($x544)?\'number\':(is_bool($x544)?\'boolean\':(is_string($x544)?\'string\':(is_object($x544)&&isset($x544->call)?\'function\':\'object\')))));$x543=!(((gettype($x544)===gettype(\'object\')&&$x544===\'object\'))||(((is_float($x544)||is_int($x544))&&(is_float(\'object\')||is_int(\'object\')))&&$x544==\'object\'));$x542=$x543;if(JS::toBoolean($x542,$global)){$x546=$_o;$x546=($x546===JS::$undefined?\'undefined\':(is_int($x546)||is_float($x546)?\'number\':(is_bool($x546)?\'boolean\':(is_string($x546)?\'string\':(is_object($x546)&&isset($x546->call)?\'function\':\'object\')))));$x545=!(((gettype($x546)===gettype(\'function\')&&$x546===\'function\'))||(((is_float($x546)||is_int($x546))&&(is_float(\'function\')||is_int(\'function\')))&&$x546==\'function\'));$x542=$x545;}$x540=$x542;}if(JS::toBoolean($x540,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x549=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',223,13,\'<image>/02_object.js\');$_TypeError=&$x549[0];list(,$WTypeError,$STypeError,$UTypeError)=$x549;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x550=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',223,13,\'<image>/02_object.js\');$_ReferenceError=&$x550[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x550;$x551=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,13);$x552=$x551($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x552->class)&&$x552->class===\'Error\'){$x552->properties[\'file\']=\'<image>/02_object.js\';$x552->properties[\'line\']=223;$x552->properties[\'column\']=13;$x552->attributes[\'file\']=$x552->attributes[\'line\']=$x552->attributes[\'column\']=0;}throw new JSException($x552,223,13,\'<image>/02_object.js\');}$x547=clone JS::$objectTemplate;unset($x553,$W553,$S553,$U553);$x554=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',223,9,\'<image>/02_object.js\');$x553=&$x554[0];list(,$W553,$S553,$U553)=$x554;$x548=$x553;$x547->prototype=$x548;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x557=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x558=$x557($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x558->class)&&$x558->class===\'Error\'){$x558->properties[\'file\']=\'<image>/02_object.js\';$x558->properties[\'line\']=223;$x558->properties[\'column\']=9;$x558->attributes[\'file\']=$x558->attributes[\'line\']=$x558->attributes[\'column\']=0;}throw new JSException($x558,223,9,\'<image>/02_object.js\');}$x555=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x556=$x555($global,$x547,$_TypeError,array(\'Object.isExtensible(): Cannot return if extensible, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x548=$x556;if(is_object($x548)&&$x548!==JS::$undefined){$x547=$x548;}if(isset($x547->class)&&$x547->class===\'Error\'){$x547->properties[\'file\']=\'<image>/02_object.js\';$x547->properties[\'line\']=223;$x547->properties[\'column\']=3;$x547->attributes[\'file\']=$x547->attributes[\'line\']=$x547->attributes[\'column\']=0;}throw new JSException($x547,223,3,\'<image>/02_object.js\');}return$_o->extensible;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x569 =& $scope->properties['arguments'];
$x569->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x569->properties[$i] = $args[$i];
$x569->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x571 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x570 = $x571;
if (!JS::toBoolean($x570, $global)) {
$x574 = $_o;
$x574 = ($x574 === JS::$undefined ? 'undefined' : (is_int($x574) || is_float($x574) ? 'number' : (is_bool($x574) ? 'boolean' : (is_string($x574) ? 'string' : (is_object($x574) && isset($x574->call) ? 'function' : 'object')))));
$x573 = !(((gettype($x574) === gettype('object') && $x574 === 'object'))|| (((is_float($x574) || is_int($x574)) && (is_float('object') || is_int('object'))) && $x574 == 'object'));
$x572 = $x573;
if (JS::toBoolean($x572, $global)) {
$x576 = $_o;
$x576 = ($x576 === JS::$undefined ? 'undefined' : (is_int($x576) || is_float($x576) ? 'number' : (is_bool($x576) ? 'boolean' : (is_string($x576) ? 'string' : (is_object($x576) && isset($x576->call) ? 'function' : 'object')))));
$x575 = !(((gettype($x576) === gettype('function') && $x576 === 'function'))|| (((is_float($x576) || is_int($x576)) && (is_float('function') || is_int('function'))) && $x576 == 'function'));
$x572 = $x575; }
$x570 = $x572; }
if (JS::toBoolean($x570, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x579 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 231, 13, '<image>/02_object.js');
$_TypeError =& $x579[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x579;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x580 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 231, 13, '<image>/02_object.js');
$_ReferenceError =& $x580[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x580;
$x581 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 13);
$x582 = $x581($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x582->class) && $x582->class === 'Error') {$x582->properties['file'] = '<image>/02_object.js';$x582->properties['line'] = 231;$x582->properties['column'] = 13;$x582->attributes['file'] = $x582->attributes['line'] = $x582->attributes['column'] = 0; }
throw new JSException($x582, 231, 13, '<image>/02_object.js');
}
$x577 = clone JS::$objectTemplate;
unset($x583, $W583, $S583, $U583);
$x584 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 231, 9, '<image>/02_object.js');
$x583 =& $x584[0]; list(,$W583,$S583,$U583) = $x584;
$x578 = $x583;
$x577->prototype = $x578;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x587 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x588 = $x587($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x588->class) && $x588->class === 'Error') {$x588->properties['file'] = '<image>/02_object.js';$x588->properties['line'] = 231;$x588->properties['column'] = 9;$x588->attributes['file'] = $x588->attributes['line'] = $x588->attributes['column'] = 0; }
throw new JSException($x588, 231, 9, '<image>/02_object.js');
}
$x585 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x586 = $x585($global, $x577, $_TypeError, array('Object.keys(): Cannot return keys, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x578 = $x586;
if (is_object($x578) && $x578 !== JS::$undefined) { $x577 = $x578; }
if (isset($x577->class) && $x577->class === 'Error') {$x577->properties['file'] = '<image>/02_object.js';$x577->properties['line'] = 231;$x577->properties['column'] = 3;$x577->attributes['file'] = $x577->attributes['line'] = $x577->attributes['column'] = 0; }
throw new JSException($x577, 231, 3, '<image>/02_object.js');;
};
$x589 = clone JS::$arrayTemplate;
$x589->properties['length'] = 0;
$x589->attributes['length'] = JS::WRITABLE;
$scope->properties['keys'] = JS::$undefined; $_keys =& $scope->properties['keys'];
$Ukeys = FALSE;
$_keys = $x589;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_o !== JS::$undefined && $_o !== NULL) {
for ($x590 = JS::toObject($_o, $global); $x590; $x590 = $x590->prototype) {
foreach ($x590->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE)) { continue; }
$_k = $property;

if ($_keys === JS::$undefined || $_keys === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x592 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x592[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x592;
$x593 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x594 = $x593($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x594->class) && $x594->class === 'Error') {$x594->properties['file'] = '<image>/02_object.js';$x594->properties['line'] = 237;$x594->properties['column'] = 12;$x594->attributes['file'] = $x594->attributes['line'] = $x594->attributes['column'] = 0; }
throw new JSException($x594, 237, 12, '<image>/02_object.js');
}
$x591 = JS::toObject($_keys, $global);
unset($x595, $W595, $S595, $U595);
$x596 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x591, (string) 'push', 237, 12, '<image>/02_object.js');
$x595 =& $x596[0]; list(,$W595,$S595,$U595) = $x596;
if (!(is_object($x595) && isset($x595->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x599 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x599[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x599;
$x600 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x601 = $x600($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x601->class) && $x601->class === 'Error') {$x601->properties['file'] = '<image>/02_object.js';$x601->properties['line'] = 237;$x601->properties['column'] = 12;$x601->attributes['file'] = $x601->attributes['line'] = $x601->attributes['column'] = 0; }
throw new JSException($x601, 237, 12, '<image>/02_object.js');
}
$x597 = $x595->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x598 = $x597($global, $x591, $x595, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_keys;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x569=&$scope->properties[\'arguments\'];$x569->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x569->properties[$i]=$args[$i];$x569->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x571=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x570=$x571;if(!JS::toBoolean($x570,$global)){$x574=$_o;$x574=($x574===JS::$undefined?\'undefined\':(is_int($x574)||is_float($x574)?\'number\':(is_bool($x574)?\'boolean\':(is_string($x574)?\'string\':(is_object($x574)&&isset($x574->call)?\'function\':\'object\')))));$x573=!(((gettype($x574)===gettype(\'object\')&&$x574===\'object\'))||(((is_float($x574)||is_int($x574))&&(is_float(\'object\')||is_int(\'object\')))&&$x574==\'object\'));$x572=$x573;if(JS::toBoolean($x572,$global)){$x576=$_o;$x576=($x576===JS::$undefined?\'undefined\':(is_int($x576)||is_float($x576)?\'number\':(is_bool($x576)?\'boolean\':(is_string($x576)?\'string\':(is_object($x576)&&isset($x576->call)?\'function\':\'object\')))));$x575=!(((gettype($x576)===gettype(\'function\')&&$x576===\'function\'))||(((is_float($x576)||is_int($x576))&&(is_float(\'function\')||is_int(\'function\')))&&$x576==\'function\'));$x572=$x575;}$x570=$x572;}if(JS::toBoolean($x570,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x579=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',231,13,\'<image>/02_object.js\');$_TypeError=&$x579[0];list(,$WTypeError,$STypeError,$UTypeError)=$x579;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x580=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',231,13,\'<image>/02_object.js\');$_ReferenceError=&$x580[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x580;$x581=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,13);$x582=$x581($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x582->class)&&$x582->class===\'Error\'){$x582->properties[\'file\']=\'<image>/02_object.js\';$x582->properties[\'line\']=231;$x582->properties[\'column\']=13;$x582->attributes[\'file\']=$x582->attributes[\'line\']=$x582->attributes[\'column\']=0;}throw new JSException($x582,231,13,\'<image>/02_object.js\');}$x577=clone JS::$objectTemplate;unset($x583,$W583,$S583,$U583);$x584=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',231,9,\'<image>/02_object.js\');$x583=&$x584[0];list(,$W583,$S583,$U583)=$x584;$x578=$x583;$x577->prototype=$x578;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x587=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x588=$x587($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x588->class)&&$x588->class===\'Error\'){$x588->properties[\'file\']=\'<image>/02_object.js\';$x588->properties[\'line\']=231;$x588->properties[\'column\']=9;$x588->attributes[\'file\']=$x588->attributes[\'line\']=$x588->attributes[\'column\']=0;}throw new JSException($x588,231,9,\'<image>/02_object.js\');}$x585=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x586=$x585($global,$x577,$_TypeError,array(\'Object.keys(): Cannot return keys, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x578=$x586;if(is_object($x578)&&$x578!==JS::$undefined){$x577=$x578;}if(isset($x577->class)&&$x577->class===\'Error\'){$x577->properties[\'file\']=\'<image>/02_object.js\';$x577->properties[\'line\']=231;$x577->properties[\'column\']=3;$x577->attributes[\'file\']=$x577->attributes[\'line\']=$x577->attributes[\'column\']=0;}throw new JSException($x577,231,3,\'<image>/02_object.js\');}$x589=clone JS::$arrayTemplate;$x589->properties[\'length\']=0;$x589->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'keys\']=JS::$undefined;$_keys=&$scope->properties[\'keys\'];$Ukeys=FALSE;$_keys=$x589;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_o!==JS::$undefined&&$_o!==NULL){for($x590=JS::toObject($_o,$global);$x590;$x590=$x590->prototype){foreach($x590->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)){continue;}$_k=$property;if($_keys===JS::$undefined||$_keys===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x592=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x592[0];list(,$WTypeError,$STypeError,$UTypeError)=$x592;$x593=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x594=$x593($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x594->class)&&$x594->class===\'Error\'){$x594->properties[\'file\']=\'<image>/02_object.js\';$x594->properties[\'line\']=237;$x594->properties[\'column\']=12;$x594->attributes[\'file\']=$x594->attributes[\'line\']=$x594->attributes[\'column\']=0;}throw new JSException($x594,237,12,\'<image>/02_object.js\');}$x591=JS::toObject($_keys,$global);unset($x595,$W595,$S595,$U595);$x596=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x591,(string)\'push\',237,12,\'<image>/02_object.js\');$x595=&$x596[0];list(,$W595,$S595,$U595)=$x596;if(!(is_object($x595)&&isset($x595->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x599=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x599[0];list(,$WTypeError,$STypeError,$UTypeError)=$x599;$x600=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x601=$x600($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x601->class)&&$x601->class===\'Error\'){$x601->properties[\'file\']=\'<image>/02_object.js\';$x601->properties[\'line\']=237;$x601->properties[\'column\']=12;$x601->attributes[\'file\']=$x601->attributes[\'line\']=$x601->attributes[\'column\']=0;}throw new JSException($x601,237,12,\'<image>/02_object.js\');}$x597=$x595->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x598=$x597($global,$x591,$x595,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_keys;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x631 =& $scope->properties['arguments'];
$x631->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x631->properties[$i] = $args[$i];
$x631->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x632 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
if (JS::toBoolean($x632, $global)) {

return '[object Undefined]';;
}
else {
$x633 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
if (JS::toBoolean($x633, $global)) {

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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x631=&$scope->properties[\'arguments\'];$x631->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x631->properties[$i]=$args[$i];$x631->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x632=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));if(JS::toBoolean($x632,$global)){return\'[object Undefined]\';}else{$x633=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));if(JS::toBoolean($x633,$global)){return\'[object Null]\';}else{$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=JS::toObject($leThis,$global);if(JS::toBoolean(!isset($_o->class),$global)){return\'[object]\';}return"[object ".$_o->class."]";}}return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x646 =& $scope->properties['arguments'];
$x646->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x646->properties[$i] = $args[$i];
$x646->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x648 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x648[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x648;
$x649 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x650 = $x649($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x650->class) && $x650->class === 'Error') {$x650->properties['file'] = '<image>/02_object.js';$x650->properties['line'] = 268;$x650->properties['column'] = 22;$x650->attributes['file'] = $x650->attributes['line'] = $x650->attributes['column'] = 0; }
throw new JSException($x650, 268, 22, '<image>/02_object.js');
}
$x647 = JS::toObject($leThis, $global);
unset($x651, $W651, $S651, $U651);
$x652 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $x647, (string) 'toString', 268, 22, '<image>/02_object.js');
$x651 =& $x652[0]; list(,$W651,$S651,$U651) = $x652;
if (!(is_object($x651) && isset($x651->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x655 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x655[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x655;
$x656 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x657 = $x656($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x657->class) && $x657->class === 'Error') {$x657->properties['file'] = '<image>/02_object.js';$x657->properties['line'] = 268;$x657->properties['column'] = 22;$x657->attributes['file'] = $x657->attributes['line'] = $x657->attributes['column'] = 0; }
throw new JSException($x657, 268, 22, '<image>/02_object.js');
}
$x653 = $x651->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x654 = $x653($global, $x647, $x651, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x654;
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x646=&$scope->properties[\'arguments\'];$x646->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x646->properties[$i]=$args[$i];$x646->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x648=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x648[0];list(,$WTypeError,$STypeError,$UTypeError)=$x648;$x649=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x650=$x649($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x650->class)&&$x650->class===\'Error\'){$x650->properties[\'file\']=\'<image>/02_object.js\';$x650->properties[\'line\']=268;$x650->properties[\'column\']=22;$x650->attributes[\'file\']=$x650->attributes[\'line\']=$x650->attributes[\'column\']=0;}throw new JSException($x650,268,22,\'<image>/02_object.js\');}$x647=JS::toObject($leThis,$global);unset($x651,$W651,$S651,$U651);$x652=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$x647,(string)\'toString\',268,22,\'<image>/02_object.js\');$x651=&$x652[0];list(,$W651,$S651,$U651)=$x652;if(!(is_object($x651)&&isset($x651->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x655=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x655[0];list(,$WTypeError,$STypeError,$UTypeError)=$x655;$x656=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x657=$x656($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x657->class)&&$x657->class===\'Error\'){$x657->properties[\'file\']=\'<image>/02_object.js\';$x657->properties[\'line\']=268;$x657->properties[\'column\']=22;$x657->attributes[\'file\']=$x657->attributes[\'line\']=$x657->attributes[\'column\']=0;}throw new JSException($x657,268,22,\'<image>/02_object.js\');}$x653=$x651->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x654=$x653($global,$x647,$x651,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x654;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x670 =& $scope->properties['arguments'];
$x670->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x670->properties[$i] = $args[$i];
$x670->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x672 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
$x671 = $x672;
if (!JS::toBoolean($x671, $global)) {
$x673 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
$x671 = $x673; }
if (JS::toBoolean($x671, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x676 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 273, 13, '<image>/02_object.js');
$_TypeError =& $x676[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x676;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x677 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'ReferenceError', 273, 13, '<image>/02_object.js');
$_ReferenceError =& $x677[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x677;
$x678 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 13);
$x679 = $x678($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x679->class) && $x679->class === 'Error') {$x679->properties['file'] = '<image>/02_object.js';$x679->properties['line'] = 273;$x679->properties['column'] = 13;$x679->attributes['file'] = $x679->attributes['line'] = $x679->attributes['column'] = 0; }
throw new JSException($x679, 273, 13, '<image>/02_object.js');
}
$x674 = clone JS::$objectTemplate;
unset($x680, $W680, $S680, $U680);
$x681 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_TypeError, (string) 'prototype', 273, 9, '<image>/02_object.js');
$x680 =& $x681[0]; list(,$W680,$S680,$U680) = $x681;
$x675 = $x680;
$x674->prototype = $x675;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x684 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x685 = $x684($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x685->class) && $x685->class === 'Error') {$x685->properties['file'] = '<image>/02_object.js';$x685->properties['line'] = 273;$x685->properties['column'] = 9;$x685->attributes['file'] = $x685->attributes['line'] = $x685->attributes['column'] = 0; }
throw new JSException($x685, 273, 9, '<image>/02_object.js');
}
$x682 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x683 = $x682($global, $x674, $_TypeError, array('Object.prototype.valueOf(): this is undefined or null'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x675 = $x683;
if (is_object($x675) && $x675 !== JS::$undefined) { $x674 = $x675; }
if (isset($x674->class) && $x674->class === 'Error') {$x674->properties['file'] = '<image>/02_object.js';$x674->properties['line'] = 273;$x674->properties['column'] = 3;$x674->attributes['file'] = $x674->attributes['line'] = $x674->attributes['column'] = 0; }
throw new JSException($x674, 273, 3, '<image>/02_object.js');;
};
return JS::toObject($leThis, $global);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x670=&$scope->properties[\'arguments\'];$x670->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x670->properties[$i]=$args[$i];$x670->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x672=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));$x671=$x672;if(!JS::toBoolean($x671,$global)){$x673=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));$x671=$x673;}if(JS::toBoolean($x671,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x676=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'TypeError\',273,13,\'<image>/02_object.js\');$_TypeError=&$x676[0];list(,$WTypeError,$STypeError,$UTypeError)=$x676;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x677=_3411dfcb3a85bb909d635ca35d6d3d6a_3($global,$scope,$scope,(string)\'ReferenceError\',273,13,\'<image>/02_object.js\');$_ReferenceError=&$x677[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x677;$x678=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,13);$x679=$x678($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x679->class)&&$x679->class===\'Error\'){$x679->properties[\'file\']=\'<image>/02_object.js\';$x679->properties[\'line\']=273;$x679->properties[\'column\']=13;$x679->attributes[\'file\']=$x679->attributes[\'line\']=$x679->attributes[\'column\']=0;}throw new JSException($x679,273,13,\'<image>/02_object.js\');}$x674=clone JS::$objectTemplate;unset($x680,$W680,$S680,$U680);$x681=_3411dfcb3a85bb909d635ca35d6d3d6a_4($global,$scope,$_TypeError,(string)\'prototype\',273,9,\'<image>/02_object.js\');$x680=&$x681[0];list(,$W680,$S680,$U680)=$x681;$x675=$x680;$x674->prototype=$x675;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x684=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x685=$x684($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x685->class)&&$x685->class===\'Error\'){$x685->properties[\'file\']=\'<image>/02_object.js\';$x685->properties[\'line\']=273;$x685->properties[\'column\']=9;$x685->attributes[\'file\']=$x685->attributes[\'line\']=$x685->attributes[\'column\']=0;}throw new JSException($x685,273,9,\'<image>/02_object.js\');}$x682=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x683=$x682($global,$x674,$_TypeError,array(\'Object.prototype.valueOf(): this is undefined or null\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x675=$x683;if(is_object($x675)&&$x675!==JS::$undefined){$x674=$x675;}if(isset($x674->class)&&$x674->class===\'Error\'){$x674->properties[\'file\']=\'<image>/02_object.js\';$x674->properties[\'line\']=273;$x674->properties[\'column\']=3;$x674->attributes[\'file\']=$x674->attributes[\'line\']=$x674->attributes[\'column\']=0;}throw new JSException($x674,273,3,\'<image>/02_object.js\');}return JS::toObject($leThis,$global);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x698 =& $scope->properties['arguments'];
$x698->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x698->properties[$i] = $args[$i];
$x698->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return array_key_exists($_p, $leThis->properties) || isset($leThis->attributes[$_p]);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x698=&$scope->properties[\'arguments\'];$x698->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x698->properties[$i]=$args[$i];$x698->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return array_key_exists($_p,$leThis->properties)||isset($leThis->attributes[$_p]);return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x711 =& $scope->properties['arguments'];
$x711->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x711->properties[$i] = $args[$i];
$x711->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x713 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x712 = $x713;
if (!JS::toBoolean($x712, $global)) {
$x716 = $_v;
$x716 = ($x716 === JS::$undefined ? 'undefined' : (is_int($x716) || is_float($x716) ? 'number' : (is_bool($x716) ? 'boolean' : (is_string($x716) ? 'string' : (is_object($x716) && isset($x716->call) ? 'function' : 'object')))));
$x715 = !(((gettype($x716) === gettype('object') && $x716 === 'object'))|| (((is_float($x716) || is_int($x716)) && (is_float('object') || is_int('object'))) && $x716 == 'object'));
$x714 = $x715;
if (JS::toBoolean($x714, $global)) {
$x718 = $_v;
$x718 = ($x718 === JS::$undefined ? 'undefined' : (is_int($x718) || is_float($x718) ? 'number' : (is_bool($x718) ? 'boolean' : (is_string($x718) ? 'string' : (is_object($x718) && isset($x718->call) ? 'function' : 'object')))));
$x717 = !(((gettype($x718) === gettype('function') && $x718 === 'function'))|| (((is_float($x718) || is_int($x718)) && (is_float('function') || is_int('function'))) && $x718 == 'function'));
$x714 = $x717; }
$x712 = $x714; }
if (JS::toBoolean($x712, $global)) {

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
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x711=&$scope->properties[\'arguments\'];$x711->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x711->properties[$i]=$args[$i];$x711->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$global->scope[++$global->scope_sp]=$scope;$x713=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x712=$x713;if(!JS::toBoolean($x712,$global)){$x716=$_v;$x716=($x716===JS::$undefined?\'undefined\':(is_int($x716)||is_float($x716)?\'number\':(is_bool($x716)?\'boolean\':(is_string($x716)?\'string\':(is_object($x716)&&isset($x716->call)?\'function\':\'object\')))));$x715=!(((gettype($x716)===gettype(\'object\')&&$x716===\'object\'))||(((is_float($x716)||is_int($x716))&&(is_float(\'object\')||is_int(\'object\')))&&$x716==\'object\'));$x714=$x715;if(JS::toBoolean($x714,$global)){$x718=$_v;$x718=($x718===JS::$undefined?\'undefined\':(is_int($x718)||is_float($x718)?\'number\':(is_bool($x718)?\'boolean\':(is_string($x718)?\'string\':(is_object($x718)&&isset($x718->call)?\'function\':\'object\')))));$x717=!(((gettype($x718)===gettype(\'function\')&&$x718===\'function\'))||(((is_float($x718)||is_int($x718))&&(is_float(\'function\')||is_int(\'function\')))&&$x718==\'function\'));$x714=$x717;}$x712=$x714;}if(JS::toBoolean($x712,$global)){return false;}for($_v=$_v->prototype;$_v;$_v=$_v->prototype){if($_v===$leThis){return TRUE;}}return false;return JS::$undefined;}', "\n";
function _3411dfcb3a85bb909d635ca35d6d3d6a_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x731 =& $scope->properties['arguments'];
$x731->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x731->properties[$i] = $args[$i];
$x731->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return JS::toBoolean(isset($leThis->attributes[$_p]) && ($leThis->attributes[$_p] & JS::ENUMERABLE), $global);
;
return JS::$undefined;
}
echo 'function _3411dfcb3a85bb909d635ca35d6d3d6a_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x731=&$scope->properties[\'arguments\'];$x731->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x731->properties[$i]=$args[$i];$x731->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return JS::toBoolean(isset($leThis->attributes[$_p])&&($leThis->attributes[$_p]&JS::ENUMERABLE),$global);return JS::$undefined;}', "\n";
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
$x379 = clone JS::$functionTemplate; $x379->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_10'; $x379->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x379->scope = $scope; $x379->properties['prototype'] = clone JS::$objectTemplate; $x379->attributes['prototype'] = JS::WRITABLE; $x379->properties['prototype']->properties['constructor'] = $x379; $x379->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x379->properties['length'] = 2; $x379->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x380 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 130, 25, '<image>/02_object.js');
$_TypeError =& $x380[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x380;
$x381 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x382 = $x381($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x382->class) && $x382->class === 'Error') {$x382->properties['file'] = '<image>/02_object.js';$x382->properties['line'] = 130;$x382->properties['column'] = 25;$x382->attributes['file'] = $x382->attributes['line'] = $x382->attributes['column'] = 0; }
throw new JSException($x382, 130, 25, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x383, $W383, $S383, $U383);
$x384 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'defineProperties', 130, 25, '<image>/02_object.js');
$x383 =& $x384[0]; list(,$W383,$S383,$U383) = $x384;
if ($U383 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['defineProperties'] = $x383; $x383 =& $_Object->properties['defineProperties']; $_Object->attributes['defineProperties'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U383 = FALSE; $W383 = TRUE; }
if (isset($S383)) {
$x386 = $S383->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x387 = $x386($global, $_Object, $S383, array($x379), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x385 = $x387;
} else {
if (!$U383) {$x385 = $x379;if ($W383) { $x383 = $x379; }  }
else { $x385 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperties') && 'defineProperties' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperties' + 1; };
$x409 = clone JS::$functionTemplate; $x409->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_11'; $x409->parameters = array (
  0 => 'o',
); $x409->scope = $scope; $x409->properties['prototype'] = clone JS::$objectTemplate; $x409->attributes['prototype'] = JS::WRITABLE; $x409->properties['prototype']->properties['constructor'] = $x409; $x409->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x409->properties['length'] = 1; $x409->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x410 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 146, 13, '<image>/02_object.js');
$_TypeError =& $x410[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x410;
$x411 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x412 = $x411($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x412->class) && $x412->class === 'Error') {$x412->properties['file'] = '<image>/02_object.js';$x412->properties['line'] = 146;$x412->properties['column'] = 13;$x412->attributes['file'] = $x412->attributes['line'] = $x412->attributes['column'] = 0; }
throw new JSException($x412, 146, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x413, $W413, $S413, $U413);
$x414 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'seal', 146, 13, '<image>/02_object.js');
$x413 =& $x414[0]; list(,$W413,$S413,$U413) = $x414;
if ($U413 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['seal'] = $x413; $x413 =& $_Object->properties['seal']; $_Object->attributes['seal'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U413 = FALSE; $W413 = TRUE; }
if (isset($S413)) {
$x416 = $S413->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x417 = $x416($global, $_Object, $S413, array($x409), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x415 = $x417;
} else {
if (!$U413) {$x415 = $x409;if ($W413) { $x413 = $x409; }  }
else { $x415 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('seal') && 'seal' >= $_Object->properties['length']) { $_Object->properties['length'] = 'seal' + 1; };
$x439 = clone JS::$functionTemplate; $x439->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_12'; $x439->parameters = array (
  0 => 'o',
); $x439->scope = $scope; $x439->properties['prototype'] = clone JS::$objectTemplate; $x439->attributes['prototype'] = JS::WRITABLE; $x439->properties['prototype']->properties['constructor'] = $x439; $x439->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x439->properties['length'] = 1; $x439->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x440 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 162, 15, '<image>/02_object.js');
$_TypeError =& $x440[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x440;
$x441 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x442 = $x441($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x442->class) && $x442->class === 'Error') {$x442->properties['file'] = '<image>/02_object.js';$x442->properties['line'] = 162;$x442->properties['column'] = 15;$x442->attributes['file'] = $x442->attributes['line'] = $x442->attributes['column'] = 0; }
throw new JSException($x442, 162, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x443, $W443, $S443, $U443);
$x444 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'freeze', 162, 15, '<image>/02_object.js');
$x443 =& $x444[0]; list(,$W443,$S443,$U443) = $x444;
if ($U443 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['freeze'] = $x443; $x443 =& $_Object->properties['freeze']; $_Object->attributes['freeze'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U443 = FALSE; $W443 = TRUE; }
if (isset($S443)) {
$x446 = $S443->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x447 = $x446($global, $_Object, $S443, array($x439), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x445 = $x447;
} else {
if (!$U443) {$x445 = $x439;if ($W443) { $x443 = $x439; }  }
else { $x445 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('freeze') && 'freeze' >= $_Object->properties['length']) { $_Object->properties['length'] = 'freeze' + 1; };
$x469 = clone JS::$functionTemplate; $x469->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_13'; $x469->parameters = array (
  0 => 'o',
); $x469->scope = $scope; $x469->properties['prototype'] = clone JS::$objectTemplate; $x469->attributes['prototype'] = JS::WRITABLE; $x469->properties['prototype']->properties['constructor'] = $x469; $x469->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x469->properties['length'] = 1; $x469->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x470 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 179, 26, '<image>/02_object.js');
$_TypeError =& $x470[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x470;
$x471 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x472 = $x471($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x472->class) && $x472->class === 'Error') {$x472->properties['file'] = '<image>/02_object.js';$x472->properties['line'] = 179;$x472->properties['column'] = 26;$x472->attributes['file'] = $x472->attributes['line'] = $x472->attributes['column'] = 0; }
throw new JSException($x472, 179, 26, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x473, $W473, $S473, $U473);
$x474 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'preventExtensions', 179, 26, '<image>/02_object.js');
$x473 =& $x474[0]; list(,$W473,$S473,$U473) = $x474;
if ($U473 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['preventExtensions'] = $x473; $x473 =& $_Object->properties['preventExtensions']; $_Object->attributes['preventExtensions'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U473 = FALSE; $W473 = TRUE; }
if (isset($S473)) {
$x476 = $S473->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x477 = $x476($global, $_Object, $S473, array($x469), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x475 = $x477;
} else {
if (!$U473) {$x475 = $x469;if ($W473) { $x473 = $x469; }  }
else { $x475 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('preventExtensions') && 'preventExtensions' >= $_Object->properties['length']) { $_Object->properties['length'] = 'preventExtensions' + 1; };
$x499 = clone JS::$functionTemplate; $x499->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_14'; $x499->parameters = array (
  0 => 'o',
); $x499->scope = $scope; $x499->properties['prototype'] = clone JS::$objectTemplate; $x499->attributes['prototype'] = JS::WRITABLE; $x499->properties['prototype']->properties['constructor'] = $x499; $x499->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x499->properties['length'] = 1; $x499->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x500 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 189, 17, '<image>/02_object.js');
$_TypeError =& $x500[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x500;
$x501 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x502 = $x501($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x502->class) && $x502->class === 'Error') {$x502->properties['file'] = '<image>/02_object.js';$x502->properties['line'] = 189;$x502->properties['column'] = 17;$x502->attributes['file'] = $x502->attributes['line'] = $x502->attributes['column'] = 0; }
throw new JSException($x502, 189, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x503, $W503, $S503, $U503);
$x504 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isSealed', 189, 17, '<image>/02_object.js');
$x503 =& $x504[0]; list(,$W503,$S503,$U503) = $x504;
if ($U503 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isSealed'] = $x503; $x503 =& $_Object->properties['isSealed']; $_Object->attributes['isSealed'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U503 = FALSE; $W503 = TRUE; }
if (isset($S503)) {
$x506 = $S503->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x507 = $x506($global, $_Object, $S503, array($x499), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x505 = $x507;
} else {
if (!$U503) {$x505 = $x499;if ($W503) { $x503 = $x499; }  }
else { $x505 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isSealed') && 'isSealed' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isSealed' + 1; };
$x529 = clone JS::$functionTemplate; $x529->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_15'; $x529->parameters = array (
  0 => 'o',
); $x529->scope = $scope; $x529->properties['prototype'] = clone JS::$objectTemplate; $x529->attributes['prototype'] = JS::WRITABLE; $x529->properties['prototype']->properties['constructor'] = $x529; $x529->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x529->properties['length'] = 1; $x529->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x530 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 205, 17, '<image>/02_object.js');
$_TypeError =& $x530[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x530;
$x531 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x532 = $x531($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x532->class) && $x532->class === 'Error') {$x532->properties['file'] = '<image>/02_object.js';$x532->properties['line'] = 205;$x532->properties['column'] = 17;$x532->attributes['file'] = $x532->attributes['line'] = $x532->attributes['column'] = 0; }
throw new JSException($x532, 205, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x533, $W533, $S533, $U533);
$x534 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isFrozen', 205, 17, '<image>/02_object.js');
$x533 =& $x534[0]; list(,$W533,$S533,$U533) = $x534;
if ($U533 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isFrozen'] = $x533; $x533 =& $_Object->properties['isFrozen']; $_Object->attributes['isFrozen'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U533 = FALSE; $W533 = TRUE; }
if (isset($S533)) {
$x536 = $S533->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x537 = $x536($global, $_Object, $S533, array($x529), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x535 = $x537;
} else {
if (!$U533) {$x535 = $x529;if ($W533) { $x533 = $x529; }  }
else { $x535 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isFrozen') && 'isFrozen' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isFrozen' + 1; };
$x559 = clone JS::$functionTemplate; $x559->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_16'; $x559->parameters = array (
  0 => 'o',
); $x559->scope = $scope; $x559->properties['prototype'] = clone JS::$objectTemplate; $x559->attributes['prototype'] = JS::WRITABLE; $x559->properties['prototype']->properties['constructor'] = $x559; $x559->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x559->properties['length'] = 1; $x559->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x560 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 221, 21, '<image>/02_object.js');
$_TypeError =& $x560[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x560;
$x561 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x562 = $x561($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x562->class) && $x562->class === 'Error') {$x562->properties['file'] = '<image>/02_object.js';$x562->properties['line'] = 221;$x562->properties['column'] = 21;$x562->attributes['file'] = $x562->attributes['line'] = $x562->attributes['column'] = 0; }
throw new JSException($x562, 221, 21, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x563, $W563, $S563, $U563);
$x564 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'isExtensible', 221, 21, '<image>/02_object.js');
$x563 =& $x564[0]; list(,$W563,$S563,$U563) = $x564;
if ($U563 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isExtensible'] = $x563; $x563 =& $_Object->properties['isExtensible']; $_Object->attributes['isExtensible'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U563 = FALSE; $W563 = TRUE; }
if (isset($S563)) {
$x566 = $S563->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x567 = $x566($global, $_Object, $S563, array($x559), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x565 = $x567;
} else {
if (!$U563) {$x565 = $x559;if ($W563) { $x563 = $x559; }  }
else { $x565 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isExtensible') && 'isExtensible' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isExtensible' + 1; };
$x602 = clone JS::$functionTemplate; $x602->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_17'; $x602->parameters = array (
  0 => 'o',
); $x602->scope = $scope; $x602->properties['prototype'] = clone JS::$objectTemplate; $x602->attributes['prototype'] = JS::WRITABLE; $x602->properties['prototype']->properties['constructor'] = $x602; $x602->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x602->properties['length'] = 1; $x602->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x603 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 229, 13, '<image>/02_object.js');
$_TypeError =& $x603[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x603;
$x604 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x605 = $x604($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x605->class) && $x605->class === 'Error') {$x605->properties['file'] = '<image>/02_object.js';$x605->properties['line'] = 229;$x605->properties['column'] = 13;$x605->attributes['file'] = $x605->attributes['line'] = $x605->attributes['column'] = 0; }
throw new JSException($x605, 229, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x606, $W606, $S606, $U606);
$x607 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'keys', 229, 13, '<image>/02_object.js');
$x606 =& $x607[0]; list(,$W606,$S606,$U606) = $x607;
if ($U606 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['keys'] = $x606; $x606 =& $_Object->properties['keys']; $_Object->attributes['keys'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U606 = FALSE; $W606 = TRUE; }
if (isset($S606)) {
$x609 = $S606->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x610 = $x609($global, $_Object, $S606, array($x602), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x608 = $x610;
} else {
if (!$U606) {$x608 = $x602;if ($W606) { $x606 = $x602; }  }
else { $x608 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('keys') && 'keys' >= $_Object->properties['length']) { $_Object->properties['length'] = 'keys' + 1; };
$x611 = clone JS::$objectTemplate;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x612 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 243, 18, '<image>/02_object.js');
$_TypeError =& $x612[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x612;
$x613 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x614 = $x613($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x614->class) && $x614->class === 'Error') {$x614->properties['file'] = '<image>/02_object.js';$x614->properties['line'] = 243;$x614->properties['column'] = 18;$x614->attributes['file'] = $x614->attributes['line'] = $x614->attributes['column'] = 0; }
throw new JSException($x614, 243, 18, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x615, $W615, $S615, $U615);
$x616 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $_Object, (string) 'prototype', 243, 18, '<image>/02_object.js');
$x615 =& $x616[0]; list(,$W615,$S615,$U615) = $x616;
if ($U615 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['prototype'] = $x615; $x615 =& $_Object->properties['prototype']; $_Object->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U615 = FALSE; $W615 = TRUE; }
if (isset($S615)) {
$x618 = $S615->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x619 = $x618($global, $_Object, $S615, array($x611), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x617 = $x619;
} else {
if (!$U615) {$x617 = $x611;if ($W615) { $x615 = $x611; }  }
else { $x617 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Object->properties['length']) { $_Object->properties['length'] = 'prototype' + 1; };
$_Object->properties['prototype']->prototype = NULL;
$_Object->properties['prototype']->class = 'Object';
$_Object->properties['prototype']->extensible = TRUE;
unset($x620, $W620, $S620, $U620);
$x621 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 247, 7, '<image>/02_object.js');
$x620 =& $x621[0]; list(,$W620,$S620,$U620) = $x621;
if ($x620 === JS::$undefined || $x620 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x622 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 247, 30, '<image>/02_object.js');
$_TypeError =& $x622[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x622;
$x623 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x624 = $x623($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x624->class) && $x624->class === 'Error') {$x624->properties['file'] = '<image>/02_object.js';$x624->properties['line'] = 247;$x624->properties['column'] = 30;$x624->attributes['file'] = $x624->attributes['line'] = $x624->attributes['column'] = 0; }
throw new JSException($x624, 247, 30, '<image>/02_object.js');
}
$x620 = JS::toObject($x620, $global);
unset($x625, $W625, $S625, $U625);
$x626 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x620, (string) 'constructor', 247, 30, '<image>/02_object.js');
$x625 =& $x626[0]; list(,$W625,$S625,$U625) = $x626;
if ($U625 && (!isset($x620->extensible) || $x620->extensible)) {$x620->properties['constructor'] = $x625; $x625 =& $x620->properties['constructor']; $x620->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U625 = FALSE; $W625 = TRUE; }
if (isset($S625)) {
$x628 = $S625->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x629 = $x628($global, $x620, $S625, array($_Object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x627 = $x629;
} else {
if (!$U625) {$x627 = $_Object;if ($W625) { $x625 = $_Object; }  }
else { $x627 = JS::$undefined; }
}
if (isset($x620->class) && $x620->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x620->properties['length']) { $x620->properties['length'] = 'constructor' + 1; };
$x634 = clone JS::$functionTemplate; $x634->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_18'; $x634->parameters = array (
); $x634->scope = $scope; $x634->properties['prototype'] = clone JS::$objectTemplate; $x634->attributes['prototype'] = JS::WRITABLE; $x634->properties['prototype']->properties['constructor'] = $x634; $x634->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x634->properties['length'] = 0; $x634->attributes['length'] = 0;
unset($x635, $W635, $S635, $U635);
$x636 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 249, 7, '<image>/02_object.js');
$x635 =& $x636[0]; list(,$W635,$S635,$U635) = $x636;
if ($x635 === JS::$undefined || $x635 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x637 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 249, 27, '<image>/02_object.js');
$_TypeError =& $x637[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x637;
$x638 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x639 = $x638($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x639->class) && $x639->class === 'Error') {$x639->properties['file'] = '<image>/02_object.js';$x639->properties['line'] = 249;$x639->properties['column'] = 27;$x639->attributes['file'] = $x639->attributes['line'] = $x639->attributes['column'] = 0; }
throw new JSException($x639, 249, 27, '<image>/02_object.js');
}
$x635 = JS::toObject($x635, $global);
unset($x640, $W640, $S640, $U640);
$x641 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x635, (string) 'toString', 249, 27, '<image>/02_object.js');
$x640 =& $x641[0]; list(,$W640,$S640,$U640) = $x641;
if ($U640 && (!isset($x635->extensible) || $x635->extensible)) {$x635->properties['toString'] = $x640; $x640 =& $x635->properties['toString']; $x635->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U640 = FALSE; $W640 = TRUE; }
if (isset($S640)) {
$x643 = $S640->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x644 = $x643($global, $x635, $S640, array($x634), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x642 = $x644;
} else {
if (!$U640) {$x642 = $x634;if ($W640) { $x640 = $x634; }  }
else { $x642 = JS::$undefined; }
}
if (isset($x635->class) && $x635->class === 'Array' &&  is_int('toString') && 'toString' >= $x635->properties['length']) { $x635->properties['length'] = 'toString' + 1; };
$x658 = clone JS::$functionTemplate; $x658->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_19'; $x658->parameters = array (
); $x658->scope = $scope; $x658->properties['prototype'] = clone JS::$objectTemplate; $x658->attributes['prototype'] = JS::WRITABLE; $x658->properties['prototype']->properties['constructor'] = $x658; $x658->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x658->properties['length'] = 0; $x658->attributes['length'] = 0;
unset($x659, $W659, $S659, $U659);
$x660 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 267, 7, '<image>/02_object.js');
$x659 =& $x660[0]; list(,$W659,$S659,$U659) = $x660;
if ($x659 === JS::$undefined || $x659 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x661 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 267, 33, '<image>/02_object.js');
$_TypeError =& $x661[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x661;
$x662 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x663 = $x662($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x663->class) && $x663->class === 'Error') {$x663->properties['file'] = '<image>/02_object.js';$x663->properties['line'] = 267;$x663->properties['column'] = 33;$x663->attributes['file'] = $x663->attributes['line'] = $x663->attributes['column'] = 0; }
throw new JSException($x663, 267, 33, '<image>/02_object.js');
}
$x659 = JS::toObject($x659, $global);
unset($x664, $W664, $S664, $U664);
$x665 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x659, (string) 'toLocaleString', 267, 33, '<image>/02_object.js');
$x664 =& $x665[0]; list(,$W664,$S664,$U664) = $x665;
if ($U664 && (!isset($x659->extensible) || $x659->extensible)) {$x659->properties['toLocaleString'] = $x664; $x664 =& $x659->properties['toLocaleString']; $x659->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U664 = FALSE; $W664 = TRUE; }
if (isset($S664)) {
$x667 = $S664->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x668 = $x667($global, $x659, $S664, array($x658), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x666 = $x668;
} else {
if (!$U664) {$x666 = $x658;if ($W664) { $x664 = $x658; }  }
else { $x666 = JS::$undefined; }
}
if (isset($x659->class) && $x659->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x659->properties['length']) { $x659->properties['length'] = 'toLocaleString' + 1; };
$x686 = clone JS::$functionTemplate; $x686->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_20'; $x686->parameters = array (
); $x686->scope = $scope; $x686->properties['prototype'] = clone JS::$objectTemplate; $x686->attributes['prototype'] = JS::WRITABLE; $x686->properties['prototype']->properties['constructor'] = $x686; $x686->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x686->properties['length'] = 0; $x686->attributes['length'] = 0;
unset($x687, $W687, $S687, $U687);
$x688 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 271, 7, '<image>/02_object.js');
$x687 =& $x688[0]; list(,$W687,$S687,$U687) = $x688;
if ($x687 === JS::$undefined || $x687 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x689 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 271, 26, '<image>/02_object.js');
$_TypeError =& $x689[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x689;
$x690 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x691 = $x690($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x691->class) && $x691->class === 'Error') {$x691->properties['file'] = '<image>/02_object.js';$x691->properties['line'] = 271;$x691->properties['column'] = 26;$x691->attributes['file'] = $x691->attributes['line'] = $x691->attributes['column'] = 0; }
throw new JSException($x691, 271, 26, '<image>/02_object.js');
}
$x687 = JS::toObject($x687, $global);
unset($x692, $W692, $S692, $U692);
$x693 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x687, (string) 'valueOf', 271, 26, '<image>/02_object.js');
$x692 =& $x693[0]; list(,$W692,$S692,$U692) = $x693;
if ($U692 && (!isset($x687->extensible) || $x687->extensible)) {$x687->properties['valueOf'] = $x692; $x692 =& $x687->properties['valueOf']; $x687->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U692 = FALSE; $W692 = TRUE; }
if (isset($S692)) {
$x695 = $S692->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x696 = $x695($global, $x687, $S692, array($x686), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x694 = $x696;
} else {
if (!$U692) {$x694 = $x686;if ($W692) { $x692 = $x686; }  }
else { $x694 = JS::$undefined; }
}
if (isset($x687->class) && $x687->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x687->properties['length']) { $x687->properties['length'] = 'valueOf' + 1; };
$x699 = clone JS::$functionTemplate; $x699->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_21'; $x699->parameters = array (
  0 => 'p',
); $x699->scope = $scope; $x699->properties['prototype'] = clone JS::$objectTemplate; $x699->attributes['prototype'] = JS::WRITABLE; $x699->properties['prototype']->properties['constructor'] = $x699; $x699->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x699->properties['length'] = 1; $x699->attributes['length'] = 0;
unset($x700, $W700, $S700, $U700);
$x701 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 279, 7, '<image>/02_object.js');
$x700 =& $x701[0]; list(,$W700,$S700,$U700) = $x701;
if ($x700 === JS::$undefined || $x700 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x702 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 279, 33, '<image>/02_object.js');
$_TypeError =& $x702[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x702;
$x703 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x704 = $x703($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x704->class) && $x704->class === 'Error') {$x704->properties['file'] = '<image>/02_object.js';$x704->properties['line'] = 279;$x704->properties['column'] = 33;$x704->attributes['file'] = $x704->attributes['line'] = $x704->attributes['column'] = 0; }
throw new JSException($x704, 279, 33, '<image>/02_object.js');
}
$x700 = JS::toObject($x700, $global);
unset($x705, $W705, $S705, $U705);
$x706 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x700, (string) 'hasOwnProperty', 279, 33, '<image>/02_object.js');
$x705 =& $x706[0]; list(,$W705,$S705,$U705) = $x706;
if ($U705 && (!isset($x700->extensible) || $x700->extensible)) {$x700->properties['hasOwnProperty'] = $x705; $x705 =& $x700->properties['hasOwnProperty']; $x700->attributes['hasOwnProperty'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U705 = FALSE; $W705 = TRUE; }
if (isset($S705)) {
$x708 = $S705->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x709 = $x708($global, $x700, $S705, array($x699), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x707 = $x709;
} else {
if (!$U705) {$x707 = $x699;if ($W705) { $x705 = $x699; }  }
else { $x707 = JS::$undefined; }
}
if (isset($x700->class) && $x700->class === 'Array' &&  is_int('hasOwnProperty') && 'hasOwnProperty' >= $x700->properties['length']) { $x700->properties['length'] = 'hasOwnProperty' + 1; };
$x719 = clone JS::$functionTemplate; $x719->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_22'; $x719->parameters = array (
  0 => 'v',
); $x719->scope = $scope; $x719->properties['prototype'] = clone JS::$objectTemplate; $x719->attributes['prototype'] = JS::WRITABLE; $x719->properties['prototype']->properties['constructor'] = $x719; $x719->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x719->properties['length'] = 1; $x719->attributes['length'] = 0;
unset($x720, $W720, $S720, $U720);
$x721 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 283, 7, '<image>/02_object.js');
$x720 =& $x721[0]; list(,$W720,$S720,$U720) = $x721;
if ($x720 === JS::$undefined || $x720 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x722 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 283, 32, '<image>/02_object.js');
$_TypeError =& $x722[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x722;
$x723 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x724 = $x723($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x724->class) && $x724->class === 'Error') {$x724->properties['file'] = '<image>/02_object.js';$x724->properties['line'] = 283;$x724->properties['column'] = 32;$x724->attributes['file'] = $x724->attributes['line'] = $x724->attributes['column'] = 0; }
throw new JSException($x724, 283, 32, '<image>/02_object.js');
}
$x720 = JS::toObject($x720, $global);
unset($x725, $W725, $S725, $U725);
$x726 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x720, (string) 'isPrototypeOf', 283, 32, '<image>/02_object.js');
$x725 =& $x726[0]; list(,$W725,$S725,$U725) = $x726;
if ($U725 && (!isset($x720->extensible) || $x720->extensible)) {$x720->properties['isPrototypeOf'] = $x725; $x725 =& $x720->properties['isPrototypeOf']; $x720->attributes['isPrototypeOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U725 = FALSE; $W725 = TRUE; }
if (isset($S725)) {
$x728 = $S725->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x729 = $x728($global, $x720, $S725, array($x719), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x727 = $x729;
} else {
if (!$U725) {$x727 = $x719;if ($W725) { $x725 = $x719; }  }
else { $x727 = JS::$undefined; }
}
if (isset($x720->class) && $x720->class === 'Array' &&  is_int('isPrototypeOf') && 'isPrototypeOf' >= $x720->properties['length']) { $x720->properties['length'] = 'isPrototypeOf' + 1; };
$x732 = clone JS::$functionTemplate; $x732->call = '_3411dfcb3a85bb909d635ca35d6d3d6a_23'; $x732->parameters = array (
  0 => 'p',
); $x732->scope = $scope; $x732->properties['prototype'] = clone JS::$objectTemplate; $x732->attributes['prototype'] = JS::WRITABLE; $x732->properties['prototype']->properties['constructor'] = $x732; $x732->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x732->properties['length'] = 1; $x732->attributes['length'] = 0;
unset($x733, $W733, $S733, $U733);
$x734 = _3411dfcb3a85bb909d635ca35d6d3d6a_4($global, $scope, $_Object, (string) 'prototype', 300, 7, '<image>/02_object.js');
$x733 =& $x734[0]; list(,$W733,$S733,$U733) = $x734;
if ($x733 === JS::$undefined || $x733 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x735 = _3411dfcb3a85bb909d635ca35d6d3d6a_3($global, $scope, $scope, (string) 'TypeError', 300, 39, '<image>/02_object.js');
$_TypeError =& $x735[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x735;
$x736 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x737 = $x736($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x737->class) && $x737->class === 'Error') {$x737->properties['file'] = '<image>/02_object.js';$x737->properties['line'] = 300;$x737->properties['column'] = 39;$x737->attributes['file'] = $x737->attributes['line'] = $x737->attributes['column'] = 0; }
throw new JSException($x737, 300, 39, '<image>/02_object.js');
}
$x733 = JS::toObject($x733, $global);
unset($x738, $W738, $S738, $U738);
$x739 = _3411dfcb3a85bb909d635ca35d6d3d6a_5($global, $scope, $x733, (string) 'propertyIsEnumerable', 300, 39, '<image>/02_object.js');
$x738 =& $x739[0]; list(,$W738,$S738,$U738) = $x739;
if ($U738 && (!isset($x733->extensible) || $x733->extensible)) {$x733->properties['propertyIsEnumerable'] = $x738; $x738 =& $x733->properties['propertyIsEnumerable']; $x733->attributes['propertyIsEnumerable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U738 = FALSE; $W738 = TRUE; }
if (isset($S738)) {
$x741 = $S738->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x742 = $x741($global, $x733, $S738, array($x732), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x740 = $x742;
} else {
if (!$U738) {$x740 = $x732;if ($W738) { $x738 = $x732; }  }
else { $x740 = JS::$undefined; }
}
if (isset($x733->class) && $x733->class === 'Array' &&  is_int('propertyIsEnumerable') && 'propertyIsEnumerable' >= $x733->properties['length']) { $x733->properties['length'] = 'propertyIsEnumerable' + 1; };
;
return JS::$undefined;
}
