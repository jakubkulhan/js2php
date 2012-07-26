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
if (isset($x12->class) && $x12->class === 'Error' && !isset($x12->properties['file']) && !isset($x12->properties['line']) && !isset($x12->properties['column'])) {$x12->properties['file'] = $file;$x12->properties['line'] = $line;$x12->properties['column'] = $column;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
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
echo 'function _41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'&&!isset($x12->properties[\'file\'])&&!isset($x12->properties[\'line\'])&&!isset($x12->properties[\'column\'])){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W7=$S7=$U7=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x7=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x7=$x14;}else{$x7=JS::$undefined;$U7=TRUE;}return array(&$x7,$W7,$S7,$U7);}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x62 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x62[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x62;
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x64 = $x63($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x64->class) && $x64->class === 'Error' && !isset($x64->properties['file']) && !isset($x64->properties['line']) && !isset($x64->properties['column'])) {$x64->properties['file'] = $file;$x64->properties['line'] = $line;$x64->properties['column'] = $column;$x64->attributes['file'] = $x64->attributes['line'] = $x64->attributes['column'] = 0; }
throw new JSException($x64, $line, $column, $file);
}
$W61 = $S61 = $U61 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x61 =& $lookup->properties[$id]; $W61 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S61 = $lookup->setters[$id]; }
else { $x61 = JS::$undefined; $U61 = TRUE; }
return array(&$x61, $W61, $S61, $U61);
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x62=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x62[0];list(,$WTypeError,$STypeError,$UTypeError)=$x62;$x63=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x64=$x63($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x64->class)&&$x64->class===\'Error\'&&!isset($x64->properties[\'file\'])&&!isset($x64->properties[\'line\'])&&!isset($x64->properties[\'column\'])){$x64->properties[\'file\']=$file;$x64->properties[\'line\']=$line;$x64->properties[\'column\']=$column;$x64->attributes[\'file\']=$x64->attributes[\'line\']=$x64->attributes[\'column\']=0;}throw new JSException($x64,$line,$column,$file);}$W61=$S61=$U61=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x61=&$lookup->properties[$id];$W61=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S61=$lookup->setters[$id];}else{$x61=JS::$undefined;$U61=TRUE;}return array(&$x61,$W61,$S61,$U61);}', "\n";
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
if (isset($x21->class) && $x21->class === 'Error' && !isset($x21->properties['file']) && !isset($x21->properties['line']) && !isset($x21->properties['column'])) {$x21->properties['file'] = '<image>/12_json.js';$x21->properties['line'] = 12;$x21->properties['column'] = 10;$x21->attributes['file'] = $x21->attributes['line'] = $x21->attributes['column'] = 0; }
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
if (isset($x25->class) && $x25->class === 'Error' && !isset($x25->properties['file']) && !isset($x25->properties['line']) && !isset($x25->properties['column'])) {$x25->properties['file'] = '<image>/12_json.js';$x25->properties['line'] = 12;$x25->properties['column'] = 23;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
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
if (isset($x32->class) && $x32->class === 'Error' && !isset($x32->properties['file']) && !isset($x32->properties['line']) && !isset($x32->properties['column'])) {$x32->properties['file'] = '<image>/12_json.js';$x32->properties['line'] = 12;$x32->properties['column'] = 23;$x32->attributes['file'] = $x32->attributes['line'] = $x32->attributes['column'] = 0; }
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
if (isset($x46->class) && $x46->class === 'Error' && !isset($x46->properties['file']) && !isset($x46->properties['line']) && !isset($x46->properties['column'])) {$x46->properties['file'] = '<image>/12_json.js';$x46->properties['line'] = 14;$x46->properties['column'] = 33;$x46->attributes['file'] = $x46->attributes['line'] = $x46->attributes['column'] = 0; }
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
if (isset($x51->class) && $x51->class === 'Error' && !isset($x51->properties['file']) && !isset($x51->properties['line']) && !isset($x51->properties['column'])) {$x51->properties['file'] = '<image>/12_json.js';$x51->properties['line'] = 14;$x51->properties['column'] = 39;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
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
if (isset($x56->class) && $x56->class === 'Error' && !isset($x56->properties['file']) && !isset($x56->properties['line']) && !isset($x56->properties['column'])) {$x56->properties['file'] = '<image>/12_json.js';$x56->properties['line'] = 14;$x56->properties['column'] = 29;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
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
if (isset($x60->class) && $x60->class === 'Error' && !isset($x60->properties['file']) && !isset($x60->properties['line']) && !isset($x60->properties['column'])) {$x60->properties['file'] = '<image>/12_json.js';$x60->properties['line'] = 17;$x60->properties['column'] = 14;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
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
for ($x70 = array(), $x69 = JS::toObject($_v, $global); $x69; $x69 = $x69->prototype) {
foreach ($x69->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x70[$property])) { continue; }
$x70[$property] = TRUE;
$_k = $property;

if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x74 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 23, 29, '<image>/12_json.js');
$_TypeError =& $x74[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x74;
$x75 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x76 = $x75($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x76->class) && $x76->class === 'Error' && !isset($x76->properties['file']) && !isset($x76->properties['line']) && !isset($x76->properties['column'])) {$x76->properties['file'] = '<image>/12_json.js';$x76->properties['line'] = 23;$x76->properties['column'] = 29;$x76->attributes['file'] = $x76->attributes['line'] = $x76->attributes['column'] = 0; }
throw new JSException($x76, 23, 29, '<image>/12_json.js');
}
$x72 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x73 = $x72($global, $global, $_revive, array($_v, $_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewItem) {$global->properties['newItem'] = $_newItem; $_newItem =& $global->properties['newItem']; }
$_newItem = $x73;
$x71 = (((gettype($_newItem) === gettype(JS::$undefined) && $_newItem === JS::$undefined))|| (((is_float($_newItem) || is_int($_newItem)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_newItem == JS::$undefined));
if (JS::toBoolean($x71, $global)) {
if (!array_key_exists($_k, $_v->attributes)) { unset($_v->properties[$_k]); $x77 = TRUE; }
else if ($_v->attributes[$_k] & JS::CONFIGURABLE) { unset($_v->properties[$_k], $_v->attributes[$_k], $_v->getters[$_k], $_v->setters[$_k]); $x77 = TRUE; }
else { $x77 = FALSE; };
}
else {
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x78 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 26, 14, '<image>/12_json.js');
$_TypeError =& $x78[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x78;
$x79 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x80 = $x79($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x80->class) && $x80->class === 'Error' && !isset($x80->properties['file']) && !isset($x80->properties['line']) && !isset($x80->properties['column'])) {$x80->properties['file'] = '<image>/12_json.js';$x80->properties['line'] = 26;$x80->properties['column'] = 14;$x80->attributes['file'] = $x80->attributes['line'] = $x80->attributes['column'] = 0; }
throw new JSException($x80, 26, 14, '<image>/12_json.js');
}
$_v = JS::toObject($_v, $global);
unset($x81, $W81, $S81, $U81);
$x82 = _41f4d98dc57cdb9126494a4a96158917_5($global, $scope, $_v, (string) $_k, 26, 14, '<image>/12_json.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
if ($U81 && (!isset($_v->extensible) || $_v->extensible)) {$_v->properties[$_k] = $x81; $x81 =& $_v->properties[$_k]; $_v->attributes[$_k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U81 = FALSE; $W81 = TRUE; }
if (isset($S81)) {
$x84 = $S81->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x85 = $x84($global, $_v, $S81, array($_newItem), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x83 = $x85;
} else {
if (!$U81) {$x83 = $_newItem;if ($W81) { $x81 = $_newItem; }  }
else { $x83 = JS::$undefined; }
}
if (isset($_v->class) && $_v->class === 'Array' &&  is_int($_k) && $_k >= $_v->properties['length']) { $_v->properties['length'] = $_k + 1; };
};
}
}
};
};;
};
unset($_reviver, $Wreviver, $Sreviver, $Ureviver);
$x86 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'reviver', 32, 12, '<image>/12_json.js');
$_reviver =& $x86[0]; list(,$Wreviver,$Sreviver,$Ureviver) = $x86;
if ($Ureviver) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x87 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 32, 12, '<image>/12_json.js');
$_ReferenceError =& $x87[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x87;
$x88 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 12);
$x89 = $x88($global, $global, $_ReferenceError, array('reviver is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error' && !isset($x89->properties['file']) && !isset($x89->properties['line']) && !isset($x89->properties['column'])) {$x89->properties['file'] = '<image>/12_json.js';$x89->properties['line'] = 32;$x89->properties['column'] = 12;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, 32, 12, '<image>/12_json.js');
}
if ($_reviver === JS::$undefined || $_reviver === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 32, 24, '<image>/12_json.js');
$_TypeError =& $x91[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x91;
$x92 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x93 = $x92($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/12_json.js';$x93->properties['line'] = 32;$x93->properties['column'] = 24;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 32, 24, '<image>/12_json.js');
}
$x90 = JS::toObject($_reviver, $global);
unset($x94, $W94, $S94, $U94);
$x95 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $x90, (string) 'call', 32, 24, '<image>/12_json.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if (!(is_object($x94) && isset($x94->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x98 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 32, 24, '<image>/12_json.js');
$_TypeError =& $x98[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x98;
$x99 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x100 = $x99($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x100->class) && $x100->class === 'Error' && !isset($x100->properties['file']) && !isset($x100->properties['line']) && !isset($x100->properties['column'])) {$x100->properties['file'] = '<image>/12_json.js';$x100->properties['line'] = 32;$x100->properties['column'] = 24;$x100->attributes['file'] = $x100->attributes['line'] = $x100->attributes['column'] = 0; }
throw new JSException($x100, 32, 24, '<image>/12_json.js');
}
$x96 = $x94->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x97 = $x96($global, $x90, $x94, array($_o, $_index, $_v), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x97;
;
return JS::$undefined;
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'index\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$scope->properties[\'revive\']=$fn;$_revive=&$scope->properties[\'revive\'];$global->scope[++$global->scope_sp]=$scope;unset($x7,$W7,$S7,$U7);$x15=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_o,(string)$_index,7,14,\'<image>/12_json.js\');$x7=&$x15[0];list(,$W7,$S7,$U7)=$x15;$scope->properties[\'v\']=JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$_v=$x7;$x17=$_v;$x17=($x17===JS::$undefined?\'undefined\':(is_int($x17)||is_float($x17)?\'number\':(is_bool($x17)?\'boolean\':(is_string($x17)?\'string\':(is_object($x17)&&isset($x17->call)?\'function\':\'object\')))));$x16=(((gettype($x17)===gettype(\'object\')&&$x17===\'object\'))||(((is_float($x17)||is_int($x17))&&(is_float(\'object\')||is_int(\'object\')))&&$x17==\'object\'));if(JS::toBoolean($x16,$global)){$scope->properties[\'newItem\']=JS::$undefined;$_newItem=&$scope->properties[\'newItem\'];$UnewItem=FALSE;$_newItem=JS::$undefined;unset($_Array,$WArray,$SArray,$UArray);$x18=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'Array\',12,10,\'<image>/12_json.js\');$_Array=&$x18[0];list(,$WArray,$SArray,$UArray)=$x18;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x19=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',12,10,\'<image>/12_json.js\');$_ReferenceError=&$x19[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x19;$x20=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,10);$x21=$x20($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x21->class)&&$x21->class===\'Error\'&&!isset($x21->properties[\'file\'])&&!isset($x21->properties[\'line\'])&&!isset($x21->properties[\'column\'])){$x21->properties[\'file\']=\'<image>/12_json.js\';$x21->properties[\'line\']=12;$x21->properties[\'column\']=10;$x21->attributes[\'file\']=$x21->attributes[\'line\']=$x21->attributes[\'column\']=0;}throw new JSException($x21,12,10,\'<image>/12_json.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x23=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',12,23,\'<image>/12_json.js\');$_TypeError=&$x23[0];list(,$WTypeError,$STypeError,$UTypeError)=$x23;$x24=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x25=$x24($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'&&!isset($x25->properties[\'file\'])&&!isset($x25->properties[\'line\'])&&!isset($x25->properties[\'column\'])){$x25->properties[\'file\']=\'<image>/12_json.js\';$x25->properties[\'line\']=12;$x25->properties[\'column\']=23;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,12,23,\'<image>/12_json.js\');}$x22=JS::toObject($_Array,$global);unset($x26,$W26,$S26,$U26);$x27=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$x22,(string)\'isArray\',12,23,\'<image>/12_json.js\');$x26=&$x27[0];list(,$W26,$S26,$U26)=$x27;if(!(is_object($x26)&&isset($x26->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',12,23,\'<image>/12_json.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'&&!isset($x32->properties[\'file\'])&&!isset($x32->properties[\'line\'])&&!isset($x32->properties[\'column\'])){$x32->properties[\'file\']=\'<image>/12_json.js\';$x32->properties[\'line\']=12;$x32->properties[\'column\']=23;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,12,23,\'<image>/12_json.js\');}$x28=$x26->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x29=$x28($global,$x22,$x26,array($_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x29,$global)){for($x33=0;;++$x33){if($x33===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x34,$W34,$S34,$U34);$x35=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_v,(string)\'length\',13,28,\'<image>/12_json.js\');$x34=&$x35[0];list(,$W34,$S34,$U34)=$x35;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x34;}if($x33!==0){$x36=++$_i;}$x37=JS::toPrimitive($_i,$global);$x38=JS::toPrimitive($_l,$global);$x39=(is_string($x37)&&is_string($x38)?strcmp($x37,$x38)<0:(!is_nan($x40=JS::toNumber($x37,$global))&&!is_nan($x41=JS::toNumber($x38,$global))&&$x40<$x41));if(!JS::toBoolean($x39,$global)){break;}unset($_String,$WString,$SString,$UString);$x43=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'String\',14,33,\'<image>/12_json.js\');$_String=&$x43[0];list(,$WString,$SString,$UString)=$x43;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x44=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',14,33,\'<image>/12_json.js\');$_ReferenceError=&$x44[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x44;$x45=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,33);$x46=$x45($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'&&!isset($x46->properties[\'file\'])&&!isset($x46->properties[\'line\'])&&!isset($x46->properties[\'column\'])){$x46->properties[\'file\']=\'<image>/12_json.js\';$x46->properties[\'line\']=14;$x46->properties[\'column\']=33;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,14,33,\'<image>/12_json.js\');}if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x49=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',14,39,\'<image>/12_json.js\');$_TypeError=&$x49[0];list(,$WTypeError,$STypeError,$UTypeError)=$x49;$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x51=$x50($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'&&!isset($x51->properties[\'file\'])&&!isset($x51->properties[\'line\'])&&!isset($x51->properties[\'column\'])){$x51->properties[\'file\']=\'<image>/12_json.js\';$x51->properties[\'line\']=14;$x51->properties[\'column\']=39;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,14,39,\'<image>/12_json.js\');}$x47=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x48=$x47($global,$global,$_String,array($_i),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x54=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',14,29,\'<image>/12_json.js\');$_TypeError=&$x54[0];list(,$WTypeError,$STypeError,$UTypeError)=$x54;$x55=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x56=$x55($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/12_json.js\';$x56->properties[\'line\']=14;$x56->properties[\'column\']=29;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,14,29,\'<image>/12_json.js\');}$x52=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x53=$x52($global,$global,$_revive,array($_v,$x48),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x53;$x42=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x42,$global)){if(!array_key_exists($_i,$_v->attributes)){unset($_v->properties[$_i]);$x57=TRUE;}else if($_v->attributes[$_i]&JS::CONFIGURABLE){unset($_v->properties[$_i],$_v->attributes[$_i],$_v->getters[$_i],$_v->setters[$_i]);$x57=TRUE;}else{$x57=FALSE;}}else{if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x58=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',17,14,\'<image>/12_json.js\');$_TypeError=&$x58[0];list(,$WTypeError,$STypeError,$UTypeError)=$x58;$x59=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x60=$x59($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'&&!isset($x60->properties[\'file\'])&&!isset($x60->properties[\'line\'])&&!isset($x60->properties[\'column\'])){$x60->properties[\'file\']=\'<image>/12_json.js\';$x60->properties[\'line\']=17;$x60->properties[\'column\']=14;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,17,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x61,$W61,$S61,$U61);$x65=_41f4d98dc57cdb9126494a4a96158917_5($global,$scope,$_v,(string)$_i,17,14,\'<image>/12_json.js\');$x61=&$x65[0];list(,$W61,$S61,$U61)=$x65;if($U61&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$_i]=$x61;$x61=&$_v->properties[$_i];$_v->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U61=FALSE;$W61=TRUE;}if(isset($S61)){$x67=$S61->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x68=$x67($global,$_v,$S61,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x66=$x68;}else{if(!$U61){$x66=$_newItem;if($W61){$x61=$_newItem;}}else{$x66=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'&&is_int($_i)&&$_i>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_i+1;}}}}else{$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x70=array(),$x69=JS::toObject($_v,$global);$x69;$x69=$x69->prototype){foreach($x69->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x70[$property])){continue;}$x70[$property]=TRUE;$_k=$property;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x74=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',23,29,\'<image>/12_json.js\');$_TypeError=&$x74[0];list(,$WTypeError,$STypeError,$UTypeError)=$x74;$x75=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x76=$x75($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x76->class)&&$x76->class===\'Error\'&&!isset($x76->properties[\'file\'])&&!isset($x76->properties[\'line\'])&&!isset($x76->properties[\'column\'])){$x76->properties[\'file\']=\'<image>/12_json.js\';$x76->properties[\'line\']=23;$x76->properties[\'column\']=29;$x76->attributes[\'file\']=$x76->attributes[\'line\']=$x76->attributes[\'column\']=0;}throw new JSException($x76,23,29,\'<image>/12_json.js\');}$x72=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x73=$x72($global,$global,$_revive,array($_v,$_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x73;$x71=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x71,$global)){if(!array_key_exists($_k,$_v->attributes)){unset($_v->properties[$_k]);$x77=TRUE;}else if($_v->attributes[$_k]&JS::CONFIGURABLE){unset($_v->properties[$_k],$_v->attributes[$_k],$_v->getters[$_k],$_v->setters[$_k]);$x77=TRUE;}else{$x77=FALSE;}}else{if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x78=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',26,14,\'<image>/12_json.js\');$_TypeError=&$x78[0];list(,$WTypeError,$STypeError,$UTypeError)=$x78;$x79=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x80=$x79($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x80->class)&&$x80->class===\'Error\'&&!isset($x80->properties[\'file\'])&&!isset($x80->properties[\'line\'])&&!isset($x80->properties[\'column\'])){$x80->properties[\'file\']=\'<image>/12_json.js\';$x80->properties[\'line\']=26;$x80->properties[\'column\']=14;$x80->attributes[\'file\']=$x80->attributes[\'line\']=$x80->attributes[\'column\']=0;}throw new JSException($x80,26,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x81,$W81,$S81,$U81);$x82=_41f4d98dc57cdb9126494a4a96158917_5($global,$scope,$_v,(string)$_k,26,14,\'<image>/12_json.js\');$x81=&$x82[0];list(,$W81,$S81,$U81)=$x82;if($U81&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$_k]=$x81;$x81=&$_v->properties[$_k];$_v->attributes[$_k]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U81=FALSE;$W81=TRUE;}if(isset($S81)){$x84=$S81->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x85=$x84($global,$_v,$S81,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x83=$x85;}else{if(!$U81){$x83=$_newItem;if($W81){$x81=$_newItem;}}else{$x83=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'&&is_int($_k)&&$_k>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_k+1;}}}}}}}unset($_reviver,$Wreviver,$Sreviver,$Ureviver);$x86=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'reviver\',32,12,\'<image>/12_json.js\');$_reviver=&$x86[0];list(,$Wreviver,$Sreviver,$Ureviver)=$x86;if($Ureviver){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x87=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',32,12,\'<image>/12_json.js\');$_ReferenceError=&$x87[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x87;$x88=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,12);$x89=$x88($global,$global,$_ReferenceError,array(\'reviver is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x89->class)&&$x89->class===\'Error\'&&!isset($x89->properties[\'file\'])&&!isset($x89->properties[\'line\'])&&!isset($x89->properties[\'column\'])){$x89->properties[\'file\']=\'<image>/12_json.js\';$x89->properties[\'line\']=32;$x89->properties[\'column\']=12;$x89->attributes[\'file\']=$x89->attributes[\'line\']=$x89->attributes[\'column\']=0;}throw new JSException($x89,32,12,\'<image>/12_json.js\');}if($_reviver===JS::$undefined||$_reviver===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x91=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',32,24,\'<image>/12_json.js\');$_TypeError=&$x91[0];list(,$WTypeError,$STypeError,$UTypeError)=$x91;$x92=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x93=$x92($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x93->class)&&$x93->class===\'Error\'&&!isset($x93->properties[\'file\'])&&!isset($x93->properties[\'line\'])&&!isset($x93->properties[\'column\'])){$x93->properties[\'file\']=\'<image>/12_json.js\';$x93->properties[\'line\']=32;$x93->properties[\'column\']=24;$x93->attributes[\'file\']=$x93->attributes[\'line\']=$x93->attributes[\'column\']=0;}throw new JSException($x93,32,24,\'<image>/12_json.js\');}$x90=JS::toObject($_reviver,$global);unset($x94,$W94,$S94,$U94);$x95=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$x90,(string)\'call\',32,24,\'<image>/12_json.js\');$x94=&$x95[0];list(,$W94,$S94,$U94)=$x95;if(!(is_object($x94)&&isset($x94->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x98=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',32,24,\'<image>/12_json.js\');$_TypeError=&$x98[0];list(,$WTypeError,$STypeError,$UTypeError)=$x98;$x99=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x100=$x99($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x100->class)&&$x100->class===\'Error\'&&!isset($x100->properties[\'file\'])&&!isset($x100->properties[\'line\'])&&!isset($x100->properties[\'column\'])){$x100->properties[\'file\']=\'<image>/12_json.js\';$x100->properties[\'line\']=32;$x100->properties[\'column\']=24;$x100->attributes[\'file\']=$x100->attributes[\'line\']=$x100->attributes[\'column\']=0;}throw new JSException($x100,32,24,\'<image>/12_json.js\');}$x96=$x94->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x97=$x96($global,$x90,$x94,array($_o,$_index,$_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x97;return JS::$undefined;}', "\n";
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
$x101 = clone JS::$functionTemplate; $x101->call = '_41f4d98dc57cdb9126494a4a96158917_2'; $x101->parameters = array (
  0 => 'o',
  1 => 'index',
); $x101->name = 'revive'; $x101->scope = $scope; $x101->properties['prototype'] = clone JS::$objectTemplate; $x101->attributes['prototype'] = JS::WRITABLE; $x101->properties['prototype']->properties['constructor'] = $x101; $x101->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x101->properties['length'] = 2; $x101->attributes['length'] = 0;
$scope->properties['revive'] = JS::$undefined; $_revive =& $scope->properties['revive'];
$Urevive = FALSE;
$_revive = $x101;
$x102 = clone JS::$objectTemplate;
$x102->properties[''] = $_ret;
$x102->attributes[''] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x105 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 35, 16, '<image>/12_json.js');
$_TypeError =& $x105[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x105;
$x106 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x107 = $x106($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x107->class) && $x107->class === 'Error' && !isset($x107->properties['file']) && !isset($x107->properties['line']) && !isset($x107->properties['column'])) {$x107->properties['file'] = '<image>/12_json.js';$x107->properties['line'] = 35;$x107->properties['column'] = 16;$x107->attributes['file'] = $x107->attributes['line'] = $x107->attributes['column'] = 0; }
throw new JSException($x107, 35, 16, '<image>/12_json.js');
}
$x103 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x104 = $x103($global, $global, $_revive, array($x102, ''), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uret) {$global->properties['ret'] = $_ret; $_ret =& $global->properties['ret']; }
$_ret = $x104;;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x2=&$scope->properties[\'arguments\'];$x2->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x2->properties[$i]=$args[$i];$x2->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'text\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_text=&$scope->properties[\'text\'];$Utext=FALSE;$scope->properties[\'reviver\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_reviver=&$scope->properties[\'reviver\'];$Ureviver=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=JS::fromNative(json_decode($_text));$x4=$_reviver;$x4=($x4===JS::$undefined?\'undefined\':(is_int($x4)||is_float($x4)?\'number\':(is_bool($x4)?\'boolean\':(is_string($x4)?\'string\':(is_object($x4)&&isset($x4->call)?\'function\':\'object\')))));$x3=(((gettype($x4)===gettype(\'function\')&&$x4===\'function\'))||(((is_float($x4)||is_int($x4))&&(is_float(\'function\')||is_int(\'function\')))&&$x4==\'function\'));if(JS::toBoolean($x3,$global)){$x101=clone JS::$functionTemplate;$x101->call=\'_41f4d98dc57cdb9126494a4a96158917_2\';$x101->parameters=array(0=>\'o\',1=>\'index\',);$x101->name=\'revive\';$x101->scope=$scope;$x101->properties[\'prototype\']=clone JS::$objectTemplate;$x101->attributes[\'prototype\']=JS::WRITABLE;$x101->properties[\'prototype\']->properties[\'constructor\']=$x101;$x101->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x101->properties[\'length\']=2;$x101->attributes[\'length\']=0;$scope->properties[\'revive\']=JS::$undefined;$_revive=&$scope->properties[\'revive\'];$Urevive=FALSE;$_revive=$x101;$x102=clone JS::$objectTemplate;$x102->properties[\'\']=$_ret;$x102->attributes[\'\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x105=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',35,16,\'<image>/12_json.js\');$_TypeError=&$x105[0];list(,$WTypeError,$STypeError,$UTypeError)=$x105;$x106=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x107=$x106($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x107->class)&&$x107->class===\'Error\'&&!isset($x107->properties[\'file\'])&&!isset($x107->properties[\'line\'])&&!isset($x107->properties[\'column\'])){$x107->properties[\'file\']=\'<image>/12_json.js\';$x107->properties[\'line\']=35;$x107->properties[\'column\']=16;$x107->attributes[\'file\']=$x107->attributes[\'line\']=$x107->attributes[\'column\']=0;}throw new JSException($x107,35,16,\'<image>/12_json.js\');}$x103=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x104=$x103($global,$global,$_revive,array($x102,\'\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uret){$global->properties[\'ret\']=$_ret;$_ret=&$global->properties[\'ret\'];}$_ret=$x104;}return$_ret;return JS::$undefined;}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x110 =& $scope->properties['arguments'];
$x110->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x110->properties[$i] = $args[$i];
$x110->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x114 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'arguments', 42, 7, '<image>/12_json.js');
$_arguments =& $x114[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x114;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x115 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 42, 7, '<image>/12_json.js');
$_ReferenceError =& $x115[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x115;
$x116 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 42, 7);
$x117 = $x116($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x117->class) && $x117->class === 'Error' && !isset($x117->properties['file']) && !isset($x117->properties['line']) && !isset($x117->properties['column'])) {$x117->properties['file'] = '<image>/12_json.js';$x117->properties['line'] = 42;$x117->properties['column'] = 7;$x117->attributes['file'] = $x117->attributes['line'] = $x117->attributes['column'] = 0; }
throw new JSException($x117, 42, 7, '<image>/12_json.js');
}
unset($x118, $W118, $S118, $U118);
$x119 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $_arguments, (string) 'length', 42, 16, '<image>/12_json.js');
$x118 =& $x119[0]; list(,$W118,$S118,$U118) = $x119;
$x111 = JS::toPrimitive($x118, $global);
$x112 = JS::toPrimitive(1, $global);
$x113 = (is_string($x112) && is_string($x111) ? strcmp($x112, $x111) < 0 : (!is_nan($x120 = JS::toNumber($x112, $global)) && !is_nan($x121 = JS::toNumber($x111, $global)) && $x120 < $x121));
if (JS::toBoolean($x113, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x124 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'NotImplementedError', 43, 14, '<image>/12_json.js');
$_NotImplementedError =& $x124[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x124;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x125 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'ReferenceError', 43, 14, '<image>/12_json.js');
$_ReferenceError =& $x125[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x125;
$x126 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 14);
$x127 = $x126($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x127->class) && $x127->class === 'Error' && !isset($x127->properties['file']) && !isset($x127->properties['line']) && !isset($x127->properties['column'])) {$x127->properties['file'] = '<image>/12_json.js';$x127->properties['line'] = 43;$x127->properties['column'] = 14;$x127->attributes['file'] = $x127->attributes['line'] = $x127->attributes['column'] = 0; }
throw new JSException($x127, 43, 14, '<image>/12_json.js');
}
$x122 = clone JS::$objectTemplate;
unset($x128, $W128, $S128, $U128);
$x129 = _41f4d98dc57cdb9126494a4a96158917_3($global, $scope, $_NotImplementedError, (string) 'prototype', 43, 10, '<image>/12_json.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
$x123 = $x128;
$x122->prototype = $x123;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x132 = _41f4d98dc57cdb9126494a4a96158917_4($global, $scope, $scope, (string) 'TypeError', 43, 10, '<image>/12_json.js');
$_TypeError =& $x132[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x132;
$x133 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x134 = $x133($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x134->class) && $x134->class === 'Error' && !isset($x134->properties['file']) && !isset($x134->properties['line']) && !isset($x134->properties['column'])) {$x134->properties['file'] = '<image>/12_json.js';$x134->properties['line'] = 43;$x134->properties['column'] = 10;$x134->attributes['file'] = $x134->attributes['line'] = $x134->attributes['column'] = 0; }
throw new JSException($x134, 43, 10, '<image>/12_json.js');
}
$x130 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x131 = $x130($global, $x122, $_NotImplementedError, array('JSON.stringify(): replacer and space arguments not supported.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x123 = $x131;
if (is_object($x123) && $x123 !== JS::$undefined) { $x122 = $x123; }
if (isset($x122->class) && $x122->class === 'Error' && !isset($x122->properties['file']) && !isset($x122->properties['line']) && !isset($x122->properties['column'])) {$x122->properties['file'] = '<image>/12_json.js';$x122->properties['line'] = 43;$x122->properties['column'] = 4;$x122->attributes['file'] = $x122->attributes['line'] = $x122->attributes['column'] = 0; }
throw new JSException($x122, 43, 4, '<image>/12_json.js');;
};
return json_encode(JS::toNative($_value));
;
return JS::$undefined;
}
echo 'function _41f4d98dc57cdb9126494a4a96158917_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x110=&$scope->properties[\'arguments\'];$x110->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x110->properties[$i]=$args[$i];$x110->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'replacer\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replacer=&$scope->properties[\'replacer\'];$Ureplacer=FALSE;$scope->properties[\'space\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_space=&$scope->properties[\'space\'];$Uspace=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x114=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'arguments\',42,7,\'<image>/12_json.js\');$_arguments=&$x114[0];list(,$Warguments,$Sarguments,$Uarguments)=$x114;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x115=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',42,7,\'<image>/12_json.js\');$_ReferenceError=&$x115[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x115;$x116=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',42,7);$x117=$x116($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x117->class)&&$x117->class===\'Error\'&&!isset($x117->properties[\'file\'])&&!isset($x117->properties[\'line\'])&&!isset($x117->properties[\'column\'])){$x117->properties[\'file\']=\'<image>/12_json.js\';$x117->properties[\'line\']=42;$x117->properties[\'column\']=7;$x117->attributes[\'file\']=$x117->attributes[\'line\']=$x117->attributes[\'column\']=0;}throw new JSException($x117,42,7,\'<image>/12_json.js\');}unset($x118,$W118,$S118,$U118);$x119=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_arguments,(string)\'length\',42,16,\'<image>/12_json.js\');$x118=&$x119[0];list(,$W118,$S118,$U118)=$x119;$x111=JS::toPrimitive($x118,$global);$x112=JS::toPrimitive(1,$global);$x113=(is_string($x112)&&is_string($x111)?strcmp($x112,$x111)<0:(!is_nan($x120=JS::toNumber($x112,$global))&&!is_nan($x121=JS::toNumber($x111,$global))&&$x120<$x121));if(JS::toBoolean($x113,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x124=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'NotImplementedError\',43,14,\'<image>/12_json.js\');$_NotImplementedError=&$x124[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x124;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x125=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'ReferenceError\',43,14,\'<image>/12_json.js\');$_ReferenceError=&$x125[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x125;$x126=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,14);$x127=$x126($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x127->class)&&$x127->class===\'Error\'&&!isset($x127->properties[\'file\'])&&!isset($x127->properties[\'line\'])&&!isset($x127->properties[\'column\'])){$x127->properties[\'file\']=\'<image>/12_json.js\';$x127->properties[\'line\']=43;$x127->properties[\'column\']=14;$x127->attributes[\'file\']=$x127->attributes[\'line\']=$x127->attributes[\'column\']=0;}throw new JSException($x127,43,14,\'<image>/12_json.js\');}$x122=clone JS::$objectTemplate;unset($x128,$W128,$S128,$U128);$x129=_41f4d98dc57cdb9126494a4a96158917_3($global,$scope,$_NotImplementedError,(string)\'prototype\',43,10,\'<image>/12_json.js\');$x128=&$x129[0];list(,$W128,$S128,$U128)=$x129;$x123=$x128;$x122->prototype=$x123;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x132=_41f4d98dc57cdb9126494a4a96158917_4($global,$scope,$scope,(string)\'TypeError\',43,10,\'<image>/12_json.js\');$_TypeError=&$x132[0];list(,$WTypeError,$STypeError,$UTypeError)=$x132;$x133=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x134=$x133($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x134->class)&&$x134->class===\'Error\'&&!isset($x134->properties[\'file\'])&&!isset($x134->properties[\'line\'])&&!isset($x134->properties[\'column\'])){$x134->properties[\'file\']=\'<image>/12_json.js\';$x134->properties[\'line\']=43;$x134->properties[\'column\']=10;$x134->attributes[\'file\']=$x134->attributes[\'line\']=$x134->attributes[\'column\']=0;}throw new JSException($x134,43,10,\'<image>/12_json.js\');}$x130=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x131=$x130($global,$x122,$_NotImplementedError,array(\'JSON.stringify(): replacer and space arguments not supported.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x123=$x131;if(is_object($x123)&&$x123!==JS::$undefined){$x122=$x123;}if(isset($x122->class)&&$x122->class===\'Error\'&&!isset($x122->properties[\'file\'])&&!isset($x122->properties[\'line\'])&&!isset($x122->properties[\'column\'])){$x122->properties[\'file\']=\'<image>/12_json.js\';$x122->properties[\'line\']=43;$x122->properties[\'column\']=4;$x122->attributes[\'file\']=$x122->attributes[\'line\']=$x122->attributes[\'column\']=0;}throw new JSException($x122,43,4,\'<image>/12_json.js\');}return json_encode(JS::toNative($_value));return JS::$undefined;}', "\n";
function _41f4d98dc57cdb9126494a4a96158917_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/12_json.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/12_json.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x108 = clone JS::$functionTemplate; $x108->call = '_41f4d98dc57cdb9126494a4a96158917_1'; $x108->parameters = array (
  0 => 'text',
  1 => 'reviver',
); $x108->scope = $scope; $x108->properties['prototype'] = clone JS::$objectTemplate; $x108->attributes['prototype'] = JS::WRITABLE; $x108->properties['prototype']->properties['constructor'] = $x108; $x108->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x108->properties['length'] = 2; $x108->attributes['length'] = 0;
$x0->properties['parse'] = $x108;
$x0->attributes['parse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x135 = clone JS::$functionTemplate; $x135->call = '_41f4d98dc57cdb9126494a4a96158917_6'; $x135->parameters = array (
  0 => 'value',
  1 => 'replacer',
  2 => 'space',
); $x135->scope = $scope; $x135->properties['prototype'] = clone JS::$objectTemplate; $x135->attributes['prototype'] = JS::WRITABLE; $x135->properties['prototype']->properties['constructor'] = $x135; $x135->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x135->properties['length'] = 3; $x135->attributes['length'] = 0;
$x0->properties['stringify'] = $x135;
$x0->attributes['stringify'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['JSON'] = JS::$undefined; $_JSON =& $scope->properties['JSON'];
$UJSON = FALSE;
$_JSON = $x0;
$_JSON->class = 'JSON';
;
return JS::$undefined;
}
