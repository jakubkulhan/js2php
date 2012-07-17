function _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x8 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x9 = $x8($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x9; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x8=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x9=$x8($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x9;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x10[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x10;
$x11 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x12 = $x11($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x12->class) && $x12->class === 'Error') {$x12->properties['file'] = $file;$x12->properties['line'] = $line;$x12->properties['column'] = $column;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
throw new JSException($x12, $line, $column, $file);
}
$W7 = $S7 = $U7 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x7 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x13 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x14 = $x13($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x7 = $x14; }
else { $x7 = JS::$undefined; $U7 = TRUE; }
return array(&$x7, $W7, $S7, $U7);
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W7=$S7=$U7=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x7=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x7=$x14;}else{$x7=JS::$undefined;$U7=TRUE;}return array(&$x7,$W7,$S7,$U7);}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x62 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x62[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x62;
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x64 = $x63($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x64->class) && $x64->class === 'Error') {$x64->properties['file'] = $file;$x64->properties['line'] = $line;$x64->properties['column'] = $column;$x64->attributes['file'] = $x64->attributes['line'] = $x64->attributes['column'] = 0; }
throw new JSException($x64, $line, $column, $file);
}
$W61 = $S61 = $U61 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x61 =& $lookup->properties[$id]; $W61 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S61 = $lookup->setters[$id]; }
else { $x61 = JS::$undefined; $U61 = TRUE; }
return array(&$x61, $W61, $S61, $U61);
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x62=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x62[0];list(,$WTypeError,$STypeError,$UTypeError)=$x62;$x63=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x64=$x63($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x64->class)&&$x64->class===\'Error\'){$x64->properties[\'file\']=$file;$x64->properties[\'line\']=$line;$x64->properties[\'column\']=$column;$x64->attributes[\'file\']=$x64->attributes[\'line\']=$x64->attributes[\'column\']=0;}throw new JSException($x64,$line,$column,$file);}$W61=$S61=$U61=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x61=&$lookup->properties[$id];$W61=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S61=$lookup->setters[$id];}else{$x61=JS::$undefined;$U61=TRUE;}return array(&$x61,$W61,$S61,$U61);}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x6 =& $scope->properties['arguments'];
$x6->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x6->properties[$i] = $args[$i];
$x6->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['index'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_index =& $scope->properties['index'];
$Uindex = FALSE;
$scope->properties['revive'] = $fn;
$_revive =& $scope->properties['revive'];
$global->scope[++$global->scope_sp] = $scope;
unset($x7, $W7, $S7, $U7);
$x15 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $_o, (string) $_index, 7, 14, '<image>/12_json.js');
$x7 =& $x15[0]; list(,$W7,$S7,$U7) = $x15;
$scope->properties['v'] = JS::$undefined; $_v =& $scope->properties['v'];
$Uv = FALSE;
$_v = $x7;
$x17 = $_v;
$x17 = ($x17 === JS::$undefined ? 'undefined' : (is_int($x17) || is_float($x17) ? 'number' : (is_bool($x17) ? 'boolean' : (is_string($x17) ? 'string' : (is_object($x17) && isset($x17->call) ? 'function' : 'object')))));
$x16 = (((gettype($x17) === gettype('object') && $x17 === 'object'))|| (((is_float($x17) || is_int($x17)) && (is_float('object') || is_int('object'))) && $x17 == 'object'));
if (JS::toBoolean($x16, $global)) {
$scope->properties['newItem'] = JS::$undefined; $_newItem =& $scope->properties['newItem'];
$UnewItem = FALSE;
$_newItem = JS::$undefined;
unset($_Array, $WArray, $SArray, $UArray);
$x18 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'Array', 12, 10, '<image>/12_json.js');
$_Array =& $x18[0]; list(,$WArray,$SArray,$UArray) = $x18;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x19 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 12, 10, '<image>/12_json.js');
$_ReferenceError =& $x19[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x19;
$x20 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 12, 10);
$x21 = $x20($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x21->class) && $x21->class === 'Error') {$x21->properties['file'] = '<image>/12_json.js';$x21->properties['line'] = 12;$x21->properties['column'] = 10;$x21->attributes['file'] = $x21->attributes['line'] = $x21->attributes['column'] = 0; }
throw new JSException($x21, 12, 10, '<image>/12_json.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x23 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 12, 23, '<image>/12_json.js');
$_TypeError =& $x23[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x23;
$x24 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 12, 23);
$x25 = $x24($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x25->class) && $x25->class === 'Error') {$x25->properties['file'] = '<image>/12_json.js';$x25->properties['line'] = 12;$x25->properties['column'] = 23;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
throw new JSException($x25, 12, 23, '<image>/12_json.js');
}
$x22 = JS::toObject($_Array, $global);
unset($x26, $W26, $S26, $U26);
$x27 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $x22, (string) 'isArray', 12, 23, '<image>/12_json.js');
$x26 =& $x27[0]; list(,$W26,$S26,$U26) = $x27;
if (!(is_object($x26) && isset($x26->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 12, 23, '<image>/12_json.js');
$_TypeError =& $x30[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x30;
$x31 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 12, 23);
$x32 = $x31($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x32->class) && $x32->class === 'Error') {$x32->properties['file'] = '<image>/12_json.js';$x32->properties['line'] = 12;$x32->properties['column'] = 23;$x32->attributes['file'] = $x32->attributes['line'] = $x32->attributes['column'] = 0; }
throw new JSException($x32, 12, 23, '<image>/12_json.js');
}
$x28 = $x26->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 12, 23);
$x29 = $x28($global, $x22, $x26, array($_v), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x29, $global)) {
for ($x33 = 0;; ++$x33) {
if ($x33 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x34, $W34, $S34, $U34);
$x35 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $_v, (string) 'length', 13, 28, '<image>/12_json.js');
$x34 =& $x35[0]; list(,$W34,$S34,$U34) = $x35;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x34;
}
if ($x33 !== 0) {
$x36 = ++$_i;
}
$x37 = JS::toPrimitive($_i, $global);
$x38 = JS::toPrimitive($_l, $global);
$x39 = (is_string($x37) && is_string($x38) ? strcmp($x37, $x38) < 0 : (!is_nan($x40 = JS::toNumber($x37, $global)) && !is_nan($x41 = JS::toNumber($x38, $global)) && $x40 < $x41));
if (!JS::toBoolean($x39, $global)) { break; }

unset($_String, $WString, $SString, $UString);
$x43 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'String', 14, 33, '<image>/12_json.js');
$_String =& $x43[0]; list(,$WString,$SString,$UString) = $x43;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x44 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 14, 33, '<image>/12_json.js');
$_ReferenceError =& $x44[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x44;
$x45 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 14, 33);
$x46 = $x45($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x46->class) && $x46->class === 'Error') {$x46->properties['file'] = '<image>/12_json.js';$x46->properties['line'] = 14;$x46->properties['column'] = 33;$x46->attributes['file'] = $x46->attributes['line'] = $x46->attributes['column'] = 0; }
throw new JSException($x46, 14, 33, '<image>/12_json.js');
}
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x49 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 14, 39, '<image>/12_json.js');
$_TypeError =& $x49[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x49;
$x50 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 14, 39);
$x51 = $x50($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x51->class) && $x51->class === 'Error') {$x51->properties['file'] = '<image>/12_json.js';$x51->properties['line'] = 14;$x51->properties['column'] = 39;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
throw new JSException($x51, 14, 39, '<image>/12_json.js');
}
$x47 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 14, 39);
$x48 = $x47($global, $global, $_String, array($_i), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x54 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 14, 29, '<image>/12_json.js');
$_TypeError =& $x54[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x54;
$x55 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 14, 29);
$x56 = $x55($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x56->class) && $x56->class === 'Error') {$x56->properties['file'] = '<image>/12_json.js';$x56->properties['line'] = 14;$x56->properties['column'] = 29;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
throw new JSException($x56, 14, 29, '<image>/12_json.js');
}
$x52 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 14, 29);
$x53 = $x52($global, $global, $_revive, array($_v, $x48), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewItem) {$global->properties['newItem'] = $_newItem; $_newItem =& $global->properties['newItem']; }
$_newItem = $x53;
$x42 = (((gettype($_newItem) === gettype(JS::$undefined) && $_newItem === JS::$undefined))|| (((is_float($_newItem) || is_int($_newItem)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_newItem == JS::$undefined));
if (JS::toBoolean($x42, $global)) {
if (!array_key_exists($_i, $_v->attributes)) { unset($_v->properties[$_i]); $x57 = TRUE; }
else if ($_v->attributes[$_i] & JS::CONFIGURABLE) { unset($_v->properties[$_i], $_v->attributes[$_i], $_v->getters[$_i], $_v->setters[$_i]); $x57 = TRUE; }
else { $x57 = FALSE; };
}
else {
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 17, 14, '<image>/12_json.js');
$_TypeError =& $x58[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x58;
$x59 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 17, 14);
$x60 = $x59($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error') {$x60->properties['file'] = '<image>/12_json.js';$x60->properties['line'] = 17;$x60->properties['column'] = 14;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 17, 14, '<image>/12_json.js');
}
$_v = JS::toObject($_v, $global);
unset($x61, $W61, $S61, $U61);
$x65 = _41f4d98dc57cdb9126494a4a96158917_5($global, $scope, $_v, (string) $_i, 17, 14, '<image>/12_json.js');
$x61 =& $x65[0]; list(,$W61,$S61,$U61) = $x65;
if ($U61 && (!isset($_v->extensible) || $_v->extensible)) {$_v->properties[$_i] = $x61; $x61 =& $_v->properties[$_i]; $_v->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U61 = FALSE; $W61 = TRUE; }
if (isset($S61)) {
$x67 = $S61->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 17, 14);
$x68 = $x67($global, $_v, $S61, array($_newItem), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x66 = $x68;
} else {
if (!$U61) {$x66 = $_newItem;if ($W61) { $x61 = $_newItem; }  }
else { $x66 = JS::$undefined; }
}
if (isset($_v->class) && $_v->class === 'Array' &&  is_int($_i) && $_i >= $_v->properties['length']) { $_v->properties['length'] = $_i + 1; };
};
};
}
else {

$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x69 = JS::toObject($_v, $global); $x69; $x69 = $x69->prototype) {
foreach ($x69->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE)) { continue; }
$_k = $property;

if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x73 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 23, 29, '<image>/12_json.js');
$_TypeError =& $x73[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x73;
$x74 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x75 = $x74($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x75->class) && $x75->class === 'Error') {$x75->properties['file'] = '<image>/12_json.js';$x75->properties['line'] = 23;$x75->properties['column'] = 29;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 23, 29, '<image>/12_json.js');
}
$x71 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x72 = $x71($global, $global, $_revive, array($_v, $_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewItem) {$global->properties['newItem'] = $_newItem; $_newItem =& $global->properties['newItem']; }
$_newItem = $x72;
$x70 = (((gettype($_newItem) === gettype(JS::$undefined) && $_newItem === JS::$undefined))|| (((is_float($_newItem) || is_int($_newItem)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_newItem == JS::$undefined));
if (JS::toBoolean($x70, $global)) {
if (!array_key_exists($_k, $_v->attributes)) { unset($_v->properties[$_k]); $x76 = TRUE; }
else if ($_v->attributes[$_k] & JS::CONFIGURABLE) { unset($_v->properties[$_k], $_v->attributes[$_k], $_v->getters[$_k], $_v->setters[$_k]); $x76 = TRUE; }
else { $x76 = FALSE; };
}
else {
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x77 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 26, 14, '<image>/12_json.js');
$_TypeError =& $x77[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x77;
$x78 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x79 = $x78($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error') {$x79->properties['file'] = '<image>/12_json.js';$x79->properties['line'] = 26;$x79->properties['column'] = 14;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, 26, 14, '<image>/12_json.js');
}
$_v = JS::toObject($_v, $global);
unset($x80, $W80, $S80, $U80);
$x81 = _41f4d98dc57cdb9126494a4a96158917_5($global, $scope, $_v, (string) $_k, 26, 14, '<image>/12_json.js');
$x80 =& $x81[0]; list(,$W80,$S80,$U80) = $x81;
if ($U80 && (!isset($_v->extensible) || $_v->extensible)) {$_v->properties[$_k] = $x80; $x80 =& $_v->properties[$_k]; $_v->attributes[$_k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U80 = FALSE; $W80 = TRUE; }
if (isset($S80)) {
$x83 = $S80->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x84 = $x83($global, $_v, $S80, array($_newItem), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x82 = $x84;
} else {
if (!$U80) {$x82 = $_newItem;if ($W80) { $x80 = $_newItem; }  }
else { $x82 = JS::$undefined; }
}
if (isset($_v->class) && $_v->class === 'Array' &&  is_int($_k) && $_k >= $_v->properties['length']) { $_v->properties['length'] = $_k + 1; };
};
}
}
};
};;
};
unset($_reviver, $Wreviver, $Sreviver, $Ureviver);
$x85 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'reviver', 32, 12, '<image>/12_json.js');
$_reviver =& $x85[0]; list(,$Wreviver,$Sreviver,$Ureviver) = $x85;
if ($Ureviver) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x86 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 32, 12, '<image>/12_json.js');
$_ReferenceError =& $x86[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x86;
$x87 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 12);
$x88 = $x87($global, $global, $_ReferenceError, array('reviver is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x88->class) && $x88->class === 'Error') {$x88->properties['file'] = '<image>/12_json.js';$x88->properties['line'] = 32;$x88->properties['column'] = 12;$x88->attributes['file'] = $x88->attributes['line'] = $x88->attributes['column'] = 0; }
throw new JSException($x88, 32, 12, '<image>/12_json.js');
}
if ($_reviver === JS::$undefined || $_reviver === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x90 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 32, 24, '<image>/12_json.js');
$_TypeError =& $x90[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x90;
$x91 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x92 = $x91($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x92->class) && $x92->class === 'Error') {$x92->properties['file'] = '<image>/12_json.js';$x92->properties['line'] = 32;$x92->properties['column'] = 24;$x92->attributes['file'] = $x92->attributes['line'] = $x92->attributes['column'] = 0; }
throw new JSException($x92, 32, 24, '<image>/12_json.js');
}
$x89 = JS::toObject($_reviver, $global);
unset($x93, $W93, $S93, $U93);
$x94 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $x89, (string) 'call', 32, 24, '<image>/12_json.js');
$x93 =& $x94[0]; list(,$W93,$S93,$U93) = $x94;
if (!(is_object($x93) && isset($x93->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x97 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 32, 24, '<image>/12_json.js');
$_TypeError =& $x97[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x97;
$x98 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x99 = $x98($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x99->class) && $x99->class === 'Error') {$x99->properties['file'] = '<image>/12_json.js';$x99->properties['line'] = 32;$x99->properties['column'] = 24;$x99->attributes['file'] = $x99->attributes['line'] = $x99->attributes['column'] = 0; }
throw new JSException($x99, 32, 24, '<image>/12_json.js');
}
$x95 = $x93->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x96 = $x95($global, $x89, $x93, array($_o, $_index, $_v), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x96;
;
return JS::$undefined;
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'index\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$scope->properties[\'revive\']=$fn;$_revive=&$scope->properties[\'revive\'];$global->scope[++$global->scope_sp]=$scope;unset($x7,$W7,$S7,$U7);$x15=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_o,(string)$_index,7,14,\'<image>/12_json.js\');$x7=&$x15[0];list(,$W7,$S7,$U7)=$x15;$scope->properties[\'v\']=JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$_v=$x7;$x17=$_v;$x17=($x17===JS::$undefined?\'undefined\':(is_int($x17)||is_float($x17)?\'number\':(is_bool($x17)?\'boolean\':(is_string($x17)?\'string\':(is_object($x17)&&isset($x17->call)?\'function\':\'object\')))));$x16=(((gettype($x17)===gettype(\'object\')&&$x17===\'object\'))||(((is_float($x17)||is_int($x17))&&(is_float(\'object\')||is_int(\'object\')))&&$x17==\'object\'));if(JS::toBoolean($x16,$global)){$scope->properties[\'newItem\']=JS::$undefined;$_newItem=&$scope->properties[\'newItem\'];$UnewItem=FALSE;$_newItem=JS::$undefined;unset($_Array,$WArray,$SArray,$UArray);$x18=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'Array\',12,10,\'<image>/12_json.js\');$_Array=&$x18[0];list(,$WArray,$SArray,$UArray)=$x18;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x19=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',12,10,\'<image>/12_json.js\');$_ReferenceError=&$x19[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x19;$x20=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,10);$x21=$x20($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x21->class)&&$x21->class===\'Error\'){$x21->properties[\'file\']=\'<image>/12_json.js\';$x21->properties[\'line\']=12;$x21->properties[\'column\']=10;$x21->attributes[\'file\']=$x21->attributes[\'line\']=$x21->attributes[\'column\']=0;}throw new JSException($x21,12,10,\'<image>/12_json.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x23=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',12,23,\'<image>/12_json.js\');$_TypeError=&$x23[0];list(,$WTypeError,$STypeError,$UTypeError)=$x23;$x24=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x25=$x24($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'){$x25->properties[\'file\']=\'<image>/12_json.js\';$x25->properties[\'line\']=12;$x25->properties[\'column\']=23;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,12,23,\'<image>/12_json.js\');}$x22=JS::toObject($_Array,$global);unset($x26,$W26,$S26,$U26);$x27=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$x22,(string)\'isArray\',12,23,\'<image>/12_json.js\');$x26=&$x27[0];list(,$W26,$S26,$U26)=$x27;if(!(is_object($x26)&&isset($x26->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',12,23,\'<image>/12_json.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'){$x32->properties[\'file\']=\'<image>/12_json.js\';$x32->properties[\'line\']=12;$x32->properties[\'column\']=23;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,12,23,\'<image>/12_json.js\');}$x28=$x26->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x29=$x28($global,$x22,$x26,array($_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x29,$global)){for($x33=0;;++$x33){if($x33===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x34,$W34,$S34,$U34);$x35=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_v,(string)\'length\',13,28,\'<image>/12_json.js\');$x34=&$x35[0];list(,$W34,$S34,$U34)=$x35;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x34;}if($x33!==0){$x36=++$_i;}$x37=JS::toPrimitive($_i,$global);$x38=JS::toPrimitive($_l,$global);$x39=(is_string($x37)&&is_string($x38)?strcmp($x37,$x38)<0:(!is_nan($x40=JS::toNumber($x37,$global))&&!is_nan($x41=JS::toNumber($x38,$global))&&$x40<$x41));if(!JS::toBoolean($x39,$global)){break;}unset($_String,$WString,$SString,$UString);$x43=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'String\',14,33,\'<image>/12_json.js\');$_String=&$x43[0];list(,$WString,$SString,$UString)=$x43;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x44=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',14,33,\'<image>/12_json.js\');$_ReferenceError=&$x44[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x44;$x45=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,33);$x46=$x45($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'){$x46->properties[\'file\']=\'<image>/12_json.js\';$x46->properties[\'line\']=14;$x46->properties[\'column\']=33;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,14,33,\'<image>/12_json.js\');}if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x49=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',14,39,\'<image>/12_json.js\');$_TypeError=&$x49[0];list(,$WTypeError,$STypeError,$UTypeError)=$x49;$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x51=$x50($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'){$x51->properties[\'file\']=\'<image>/12_json.js\';$x51->properties[\'line\']=14;$x51->properties[\'column\']=39;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,14,39,\'<image>/12_json.js\');}$x47=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x48=$x47($global,$global,$_String,array($_i),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x54=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',14,29,\'<image>/12_json.js\');$_TypeError=&$x54[0];list(,$WTypeError,$STypeError,$UTypeError)=$x54;$x55=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x56=$x55($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'){$x56->properties[\'file\']=\'<image>/12_json.js\';$x56->properties[\'line\']=14;$x56->properties[\'column\']=29;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,14,29,\'<image>/12_json.js\');}$x52=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x53=$x52($global,$global,$_revive,array($_v,$x48),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x53;$x42=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x42,$global)){if(!array_key_exists($_i,$_v->attributes)){unset($_v->properties[$_i]);$x57=TRUE;}else if($_v->attributes[$_i]&JS::CONFIGURABLE){unset($_v->properties[$_i],$_v->attributes[$_i],$_v->getters[$_i],$_v->setters[$_i]);$x57=TRUE;}else{$x57=FALSE;}}else{if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x58=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',17,14,\'<image>/12_json.js\');$_TypeError=&$x58[0];list(,$WTypeError,$STypeError,$UTypeError)=$x58;$x59=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x60=$x59($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'){$x60->properties[\'file\']=\'<image>/12_json.js\';$x60->properties[\'line\']=17;$x60->properties[\'column\']=14;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,17,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x61,$W61,$S61,$U61);$x65=_41f4d98dc57cdb9126494a4a96158917_5($global,$scope,$_v,(string)$_i,17,14,\'<image>/12_json.js\');$x61=&$x65[0];list(,$W61,$S61,$U61)=$x65;if($U61&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$_i]=$x61;$x61=&$_v->properties[$_i];$_v->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U61=FALSE;$W61=TRUE;}if(isset($S61)){$x67=$S61->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x68=$x67($global,$_v,$S61,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x66=$x68;}else{if(!$U61){$x66=$_newItem;if($W61){$x61=$_newItem;}}else{$x66=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'&&is_int($_i)&&$_i>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_i+1;}}}}else{$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x69=JS::toObject($_v,$global);$x69;$x69=$x69->prototype){foreach($x69->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)){continue;}$_k=$property;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x73=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',23,29,\'<image>/12_json.js\');$_TypeError=&$x73[0];list(,$WTypeError,$STypeError,$UTypeError)=$x73;$x74=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x75=$x74($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x75->class)&&$x75->class===\'Error\'){$x75->properties[\'file\']=\'<image>/12_json.js\';$x75->properties[\'line\']=23;$x75->properties[\'column\']=29;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,23,29,\'<image>/12_json.js\');}$x71=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x72=$x71($global,$global,$_revive,array($_v,$_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x72;$x70=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x70,$global)){if(!array_key_exists($_k,$_v->attributes)){unset($_v->properties[$_k]);$x76=TRUE;}else if($_v->attributes[$_k]&JS::CONFIGURABLE){unset($_v->properties[$_k],$_v->attributes[$_k],$_v->getters[$_k],$_v->setters[$_k]);$x76=TRUE;}else{$x76=FALSE;}}else{if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x77=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',26,14,\'<image>/12_json.js\');$_TypeError=&$x77[0];list(,$WTypeError,$STypeError,$UTypeError)=$x77;$x78=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x79=$x78($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'){$x79->properties[\'file\']=\'<image>/12_json.js\';$x79->properties[\'line\']=26;$x79->properties[\'column\']=14;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,26,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x80,$W80,$S80,$U80);$x81=_41f4d98dc57cdb9126494a4a96158917_5($global,$scope,$_v,(string)$_k,26,14,\'<image>/12_json.js\');$x80=&$x81[0];list(,$W80,$S80,$U80)=$x81;if($U80&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$_k]=$x80;$x80=&$_v->properties[$_k];$_v->attributes[$_k]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U80=FALSE;$W80=TRUE;}if(isset($S80)){$x83=$S80->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x84=$x83($global,$_v,$S80,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x82=$x84;}else{if(!$U80){$x82=$_newItem;if($W80){$x80=$_newItem;}}else{$x82=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'&&is_int($_k)&&$_k>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_k+1;}}}}}}}unset($_reviver,$Wreviver,$Sreviver,$Ureviver);$x85=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'reviver\',32,12,\'<image>/12_json.js\');$_reviver=&$x85[0];list(,$Wreviver,$Sreviver,$Ureviver)=$x85;if($Ureviver){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x86=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',32,12,\'<image>/12_json.js\');$_ReferenceError=&$x86[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x86;$x87=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,12);$x88=$x87($global,$global,$_ReferenceError,array(\'reviver is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x88->class)&&$x88->class===\'Error\'){$x88->properties[\'file\']=\'<image>/12_json.js\';$x88->properties[\'line\']=32;$x88->properties[\'column\']=12;$x88->attributes[\'file\']=$x88->attributes[\'line\']=$x88->attributes[\'column\']=0;}throw new JSException($x88,32,12,\'<image>/12_json.js\');}if($_reviver===JS::$undefined||$_reviver===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x90=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',32,24,\'<image>/12_json.js\');$_TypeError=&$x90[0];list(,$WTypeError,$STypeError,$UTypeError)=$x90;$x91=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x92=$x91($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x92->class)&&$x92->class===\'Error\'){$x92->properties[\'file\']=\'<image>/12_json.js\';$x92->properties[\'line\']=32;$x92->properties[\'column\']=24;$x92->attributes[\'file\']=$x92->attributes[\'line\']=$x92->attributes[\'column\']=0;}throw new JSException($x92,32,24,\'<image>/12_json.js\');}$x89=JS::toObject($_reviver,$global);unset($x93,$W93,$S93,$U93);$x94=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$x89,(string)\'call\',32,24,\'<image>/12_json.js\');$x93=&$x94[0];list(,$W93,$S93,$U93)=$x94;if(!(is_object($x93)&&isset($x93->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x97=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',32,24,\'<image>/12_json.js\');$_TypeError=&$x97[0];list(,$WTypeError,$STypeError,$UTypeError)=$x97;$x98=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x99=$x98($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x99->class)&&$x99->class===\'Error\'){$x99->properties[\'file\']=\'<image>/12_json.js\';$x99->properties[\'line\']=32;$x99->properties[\'column\']=24;$x99->attributes[\'file\']=$x99->attributes[\'line\']=$x99->attributes[\'column\']=0;}throw new JSException($x99,32,24,\'<image>/12_json.js\');}$x95=$x93->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x96=$x95($global,$x89,$x93,array($_o,$_index,$_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x96;return JS::$undefined;}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_1($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x2 =& $scope->properties['arguments'];
$x2->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x2->properties[$i] = $args[$i];
$x2->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['text'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_text =& $scope->properties['text'];
$Utext = FALSE;
$scope->properties['reviver'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_reviver =& $scope->properties['reviver'];
$Ureviver = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = JS::fromNative(json_decode($_text));
$x4 = $_reviver;
$x4 = ($x4 === JS::$undefined ? 'undefined' : (is_int($x4) || is_float($x4) ? 'number' : (is_bool($x4) ? 'boolean' : (is_string($x4) ? 'string' : (is_object($x4) && isset($x4->call) ? 'function' : 'object')))));
$x3 = (((gettype($x4) === gettype('function') && $x4 === 'function'))|| (((is_float($x4) || is_int($x4)) && (is_float('function') || is_int('function'))) && $x4 == 'function'));
if (JS::toBoolean($x3, $global)) {
$x100 = clone JS::$functionTemplate; $x100->call = '_41f4d98dc57cdb9126494a4a96158917_2'; $x100->parameters = array (
  0 => 'o',
  1 => 'index',
); $x100->name = 'revive'; $x100->scope = $scope; $x100->properties['prototype'] = clone JS::$objectTemplate; $x100->attributes['prototype'] = JS::WRITABLE; $x100->properties['prototype']->properties['constructor'] = $x100; $x100->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x100->properties['length'] = 2; $x100->attributes['length'] = 0;
$scope->properties['revive'] = JS::$undefined; $_revive =& $scope->properties['revive'];
$Urevive = FALSE;
$_revive = $x100;
$x101 = clone JS::$objectTemplate;
$x101->properties[''] = $_ret;
$x101->attributes[''] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x104 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 35, 16, '<image>/12_json.js');
$_TypeError =& $x104[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x104;
$x105 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x106 = $x105($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x106->class) && $x106->class === 'Error') {$x106->properties['file'] = '<image>/12_json.js';$x106->properties['line'] = 35;$x106->properties['column'] = 16;$x106->attributes['file'] = $x106->attributes['line'] = $x106->attributes['column'] = 0; }
throw new JSException($x106, 35, 16, '<image>/12_json.js');
}
$x102 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x103 = $x102($global, $global, $_revive, array($x101, ''), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uret) {$global->properties['ret'] = $_ret; $_ret =& $global->properties['ret']; }
$_ret = $x103;;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x2=&$scope->properties[\'arguments\'];$x2->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x2->properties[$i]=$args[$i];$x2->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'text\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_text=&$scope->properties[\'text\'];$Utext=FALSE;$scope->properties[\'reviver\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_reviver=&$scope->properties[\'reviver\'];$Ureviver=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=JS::fromNative(json_decode($_text));$x4=$_reviver;$x4=($x4===JS::$undefined?\'undefined\':(is_int($x4)||is_float($x4)?\'number\':(is_bool($x4)?\'boolean\':(is_string($x4)?\'string\':(is_object($x4)&&isset($x4->call)?\'function\':\'object\')))));$x3=(((gettype($x4)===gettype(\'function\')&&$x4===\'function\'))||(((is_float($x4)||is_int($x4))&&(is_float(\'function\')||is_int(\'function\')))&&$x4==\'function\'));if(JS::toBoolean($x3,$global)){$x100=clone JS::$functionTemplate;$x100->call=\'_41f4d98dc57cdb9126494a4a96158917_2\';$x100->parameters=array(0=>\'o\',1=>\'index\',);$x100->name=\'revive\';$x100->scope=$scope;$x100->properties[\'prototype\']=clone JS::$objectTemplate;$x100->attributes[\'prototype\']=JS::WRITABLE;$x100->properties[\'prototype\']->properties[\'constructor\']=$x100;$x100->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x100->properties[\'length\']=2;$x100->attributes[\'length\']=0;$scope->properties[\'revive\']=JS::$undefined;$_revive=&$scope->properties[\'revive\'];$Urevive=FALSE;$_revive=$x100;$x101=clone JS::$objectTemplate;$x101->properties[\'\']=$_ret;$x101->attributes[\'\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x104=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',35,16,\'<image>/12_json.js\');$_TypeError=&$x104[0];list(,$WTypeError,$STypeError,$UTypeError)=$x104;$x105=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x106=$x105($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x106->class)&&$x106->class===\'Error\'){$x106->properties[\'file\']=\'<image>/12_json.js\';$x106->properties[\'line\']=35;$x106->properties[\'column\']=16;$x106->attributes[\'file\']=$x106->attributes[\'line\']=$x106->attributes[\'column\']=0;}throw new JSException($x106,35,16,\'<image>/12_json.js\');}$x102=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x103=$x102($global,$global,$_revive,array($x101,\'\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uret){$global->properties[\'ret\']=$_ret;$_ret=&$global->properties[\'ret\'];}$_ret=$x103;}return$_ret;return JS::$undefined;}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x109 =& $scope->properties['arguments'];
$x109->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x109->properties[$i] = $args[$i];
$x109->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['value'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_value =& $scope->properties['value'];
$Uvalue = FALSE;
$scope->properties['replacer'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_replacer =& $scope->properties['replacer'];
$Ureplacer = FALSE;
$scope->properties['space'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_space =& $scope->properties['space'];
$Uspace = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x113 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'arguments', 42, 7, '<image>/12_json.js');
$_arguments =& $x113[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x113;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x114 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 42, 7, '<image>/12_json.js');
$_ReferenceError =& $x114[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x114;
$x115 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 42, 7);
$x116 = $x115($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x116->class) && $x116->class === 'Error') {$x116->properties['file'] = '<image>/12_json.js';$x116->properties['line'] = 42;$x116->properties['column'] = 7;$x116->attributes['file'] = $x116->attributes['line'] = $x116->attributes['column'] = 0; }
throw new JSException($x116, 42, 7, '<image>/12_json.js');
}
unset($x117, $W117, $S117, $U117);
$x118 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $_arguments, (string) 'length', 42, 16, '<image>/12_json.js');
$x117 =& $x118[0]; list(,$W117,$S117,$U117) = $x118;
$x110 = JS::toPrimitive($x117, $global);
$x111 = JS::toPrimitive(1, $global);
$x112 = (is_string($x111) && is_string($x110) ? strcmp($x111, $x110) < 0 : (!is_nan($x119 = JS::toNumber($x111, $global)) && !is_nan($x120 = JS::toNumber($x110, $global)) && $x119 < $x120));
if (JS::toBoolean($x112, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x123 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'NotImplementedError', 43, 14, '<image>/12_json.js');
$_NotImplementedError =& $x123[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x123;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x124 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 43, 14, '<image>/12_json.js');
$_ReferenceError =& $x124[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x124;
$x125 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 14);
$x126 = $x125($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x126->class) && $x126->class === 'Error') {$x126->properties['file'] = '<image>/12_json.js';$x126->properties['line'] = 43;$x126->properties['column'] = 14;$x126->attributes['file'] = $x126->attributes['line'] = $x126->attributes['column'] = 0; }
throw new JSException($x126, 43, 14, '<image>/12_json.js');
}
$x121 = clone JS::$objectTemplate;
unset($x127, $W127, $S127, $U127);
$x128 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $_NotImplementedError, (string) 'prototype', 43, 10, '<image>/12_json.js');
$x127 =& $x128[0]; list(,$W127,$S127,$U127) = $x128;
$x122 = $x127;
$x121->prototype = $x122;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x131 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 43, 10, '<image>/12_json.js');
$_TypeError =& $x131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x131;
$x132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x133 = $x132($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x133->class) && $x133->class === 'Error') {$x133->properties['file'] = '<image>/12_json.js';$x133->properties['line'] = 43;$x133->properties['column'] = 10;$x133->attributes['file'] = $x133->attributes['line'] = $x133->attributes['column'] = 0; }
throw new JSException($x133, 43, 10, '<image>/12_json.js');
}
$x129 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x130 = $x129($global, $x121, $_NotImplementedError, array('JSON.stringify(): replacer and space arguments not supported.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x122 = $x130;
if (is_object($x122) && $x122 !== JS::$undefined) { $x121 = $x122; }
if (isset($x121->class) && $x121->class === 'Error') {$x121->properties['file'] = '<image>/12_json.js';$x121->properties['line'] = 43;$x121->properties['column'] = 4;$x121->attributes['file'] = $x121->attributes['line'] = $x121->attributes['column'] = 0; }
throw new JSException($x121, 43, 4, '<image>/12_json.js');;
};
return json_encode(JS::toNative($_value));
;
return JS::$undefined;
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x109=&$scope->properties[\'arguments\'];$x109->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x109->properties[$i]=$args[$i];$x109->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'replacer\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replacer=&$scope->properties[\'replacer\'];$Ureplacer=FALSE;$scope->properties[\'space\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_space=&$scope->properties[\'space\'];$Uspace=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x113=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'arguments\',42,7,\'<image>/12_json.js\');$_arguments=&$x113[0];list(,$Warguments,$Sarguments,$Uarguments)=$x113;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x114=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',42,7,\'<image>/12_json.js\');$_ReferenceError=&$x114[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x114;$x115=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',42,7);$x116=$x115($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x116->class)&&$x116->class===\'Error\'){$x116->properties[\'file\']=\'<image>/12_json.js\';$x116->properties[\'line\']=42;$x116->properties[\'column\']=7;$x116->attributes[\'file\']=$x116->attributes[\'line\']=$x116->attributes[\'column\']=0;}throw new JSException($x116,42,7,\'<image>/12_json.js\');}unset($x117,$W117,$S117,$U117);$x118=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_arguments,(string)\'length\',42,16,\'<image>/12_json.js\');$x117=&$x118[0];list(,$W117,$S117,$U117)=$x118;$x110=JS::toPrimitive($x117,$global);$x111=JS::toPrimitive(1,$global);$x112=(is_string($x111)&&is_string($x110)?strcmp($x111,$x110)<0:(!is_nan($x119=JS::toNumber($x111,$global))&&!is_nan($x120=JS::toNumber($x110,$global))&&$x119<$x120));if(JS::toBoolean($x112,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x123=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'NotImplementedError\',43,14,\'<image>/12_json.js\');$_NotImplementedError=&$x123[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x123;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x124=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',43,14,\'<image>/12_json.js\');$_ReferenceError=&$x124[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x124;$x125=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,14);$x126=$x125($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x126->class)&&$x126->class===\'Error\'){$x126->properties[\'file\']=\'<image>/12_json.js\';$x126->properties[\'line\']=43;$x126->properties[\'column\']=14;$x126->attributes[\'file\']=$x126->attributes[\'line\']=$x126->attributes[\'column\']=0;}throw new JSException($x126,43,14,\'<image>/12_json.js\');}$x121=clone JS::$objectTemplate;unset($x127,$W127,$S127,$U127);$x128=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_NotImplementedError,(string)\'prototype\',43,10,\'<image>/12_json.js\');$x127=&$x128[0];list(,$W127,$S127,$U127)=$x128;$x122=$x127;$x121->prototype=$x122;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x131=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',43,10,\'<image>/12_json.js\');$_TypeError=&$x131[0];list(,$WTypeError,$STypeError,$UTypeError)=$x131;$x132=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x133=$x132($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x133->class)&&$x133->class===\'Error\'){$x133->properties[\'file\']=\'<image>/12_json.js\';$x133->properties[\'line\']=43;$x133->properties[\'column\']=10;$x133->attributes[\'file\']=$x133->attributes[\'line\']=$x133->attributes[\'column\']=0;}throw new JSException($x133,43,10,\'<image>/12_json.js\');}$x129=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x130=$x129($global,$x121,$_NotImplementedError,array(\'JSON.stringify(): replacer and space arguments not supported.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x122=$x130;if(is_object($x122)&&$x122!==JS::$undefined){$x121=$x122;}if(isset($x121->class)&&$x121->class===\'Error\'){$x121->properties[\'file\']=\'<image>/12_json.js\';$x121->properties[\'line\']=43;$x121->properties[\'column\']=4;$x121->attributes[\'file\']=$x121->attributes[\'line\']=$x121->attributes[\'column\']=0;}throw new JSException($x121,43,4,\'<image>/12_json.js\');}return json_encode(JS::toNative($_value));return JS::$undefined;}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/12_json.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/12_json.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x107 = clone JS::$functionTemplate; $x107->call = '_41f4d98dc57cdb9126494a4a96158917_1'; $x107->parameters = array (
  0 => 'text',
  1 => 'reviver',
); $x107->scope = $scope; $x107->properties['prototype'] = clone JS::$objectTemplate; $x107->attributes['prototype'] = JS::WRITABLE; $x107->properties['prototype']->properties['constructor'] = $x107; $x107->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x107->properties['length'] = 2; $x107->attributes['length'] = 0;
$x0->properties['parse'] = $x107;
$x0->attributes['parse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x134 = clone JS::$functionTemplate; $x134->call = '_41f4d98dc57cdb9126494a4a96158917_6'; $x134->parameters = array (
  0 => 'value',
  1 => 'replacer',
  2 => 'space',
); $x134->scope = $scope; $x134->properties['prototype'] = clone JS::$objectTemplate; $x134->attributes['prototype'] = JS::WRITABLE; $x134->properties['prototype']->properties['constructor'] = $x134; $x134->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x134->properties['length'] = 3; $x134->attributes['length'] = 0;
$x0->properties['stringify'] = $x134;
$x0->attributes['stringify'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['JSON'] = JS::$undefined; $_JSON =& $scope->properties['JSON'];
$UJSON = FALSE;
$_JSON = $x0;
$_JSON->class = 'JSON';
;
return JS::$undefined;
}
