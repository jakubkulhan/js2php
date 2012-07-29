function _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x8=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x9=$x8($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x9;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'&&!isset($x12->properties[\'file\'])&&!isset($x12->properties[\'line\'])&&!isset($x12->properties[\'column\'])){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W7=$S7=$U7=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x7=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x7=$x14;}else{$x7=JS::$undefined;$U7=TRUE;}return array(&$x7,$W7,$S7,$U7);}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x63 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x63[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x63;
$x64 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x65 = $x64($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x65->class) && $x65->class === 'Error' && !isset($x65->properties['file']) && !isset($x65->properties['line']) && !isset($x65->properties['column'])) {$x65->properties['file'] = $file;$x65->properties['line'] = $line;$x65->properties['column'] = $column;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, $line, $column, $file);
}
$W62 = $S62 = $U62 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x62 =& $lookup->properties[$id]; $W62 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S62 = $lookup->setters[$id]; }
else { $x62 = JS::$undefined; $U62 = TRUE; }
return array(&$x62, $W62, $S62, $U62);
}
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x65=$x64($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'&&!isset($x65->properties[\'file\'])&&!isset($x65->properties[\'line\'])&&!isset($x65->properties[\'column\'])){$x65->properties[\'file\']=$file;$x65->properties[\'line\']=$line;$x65->properties[\'column\']=$column;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,$line,$column,$file);}$W62=$S62=$U62=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x62=&$lookup->properties[$id];$W62=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S62=$lookup->setters[$id];}else{$x62=JS::$undefined;$U62=TRUE;}return array(&$x62,$W62,$S62,$U62);}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_2($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x15 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $_o, JS::toString($_index, $global), 7, 14, '<image>/12_json.js');
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
$x18 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('Array', $global), 12, 10, '<image>/12_json.js');
$_Array =& $x18[0]; list(,$WArray,$SArray,$UArray) = $x18;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x19 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 12, 10, '<image>/12_json.js');
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
$x23 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 12, 23, '<image>/12_json.js');
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
$x27 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $x22, JS::toString('isArray', $global), 12, 23, '<image>/12_json.js');
$x26 =& $x27[0]; list(,$W26,$S26,$U26) = $x27;
if (!(is_object($x26) && isset($x26->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 12, 23, '<image>/12_json.js');
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
$x35 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $_v, JS::toString('length', $global), 13, 28, '<image>/12_json.js');
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
$x43 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('String', $global), 14, 33, '<image>/12_json.js');
$_String =& $x43[0]; list(,$WString,$SString,$UString) = $x43;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x44 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 14, 33, '<image>/12_json.js');
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
$x49 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 14, 39, '<image>/12_json.js');
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
$x54 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 14, 29, '<image>/12_json.js');
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
$x58 = JS::toString($_i, $global);
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x59 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 17, 14, '<image>/12_json.js');
$_TypeError =& $x59[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x59;
$x60 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 17, 14);
$x61 = $x60($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x61->class) && $x61->class === 'Error' && !isset($x61->properties['file']) && !isset($x61->properties['line']) && !isset($x61->properties['column'])) {$x61->properties['file'] = '<image>/12_json.js';$x61->properties['line'] = 17;$x61->properties['column'] = 14;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 17, 14, '<image>/12_json.js');
}
$_v = JS::toObject($_v, $global);
unset($x62, $W62, $S62, $U62);
$x66 = _bc1c8d1b4999a51b0c5a2af7dab185f1_5($global, $scope, $_v, JS::toString($x58, $global), 17, 14, '<image>/12_json.js');
$x62 =& $x66[0]; list(,$W62,$S62,$U62) = $x66;
if ($U62 && (!isset($_v->extensible) || $_v->extensible)) {$_v->properties[$x58] = $x62; $x62 =& $_v->properties[$x58]; $_v->attributes[$x58] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U62 = FALSE; $W62 = TRUE; }
if (isset($S62)) {
$x68 = $S62->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 17, 14);
$x69 = $x68($global, $_v, $S62, array($_newItem), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x67 = $x69;
} else {
if (!$U62) {$x67 = $_newItem;if ($W62) { $x62 = $_newItem; }  }
else { $x67 = JS::$undefined; }
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
for ($x71 = array(), $x70 = JS::toObject($_v, $global); $x70; $x70 = $x70->prototype) {
foreach ($x70->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x71[$property])) { continue; }
$x71[$property] = TRUE;
$_k = $property;

if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x75 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 23, 29, '<image>/12_json.js');
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x77 = $x76($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error' && !isset($x77->properties['file']) && !isset($x77->properties['line']) && !isset($x77->properties['column'])) {$x77->properties['file'] = '<image>/12_json.js';$x77->properties['line'] = 23;$x77->properties['column'] = 29;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, 23, 29, '<image>/12_json.js');
}
$x73 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x74 = $x73($global, $global, $_revive, array($_v, $_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewItem) {$global->properties['newItem'] = $_newItem; $_newItem =& $global->properties['newItem']; }
$_newItem = $x74;
$x72 = (((gettype($_newItem) === gettype(JS::$undefined) && $_newItem === JS::$undefined))|| (((is_float($_newItem) || is_int($_newItem)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_newItem == JS::$undefined));
if (JS::toBoolean($x72, $global)) {
if (!array_key_exists($_k, $_v->attributes)) { unset($_v->properties[$_k]); $x78 = TRUE; }
else if ($_v->attributes[$_k] & JS::CONFIGURABLE) { unset($_v->properties[$_k], $_v->attributes[$_k], $_v->getters[$_k], $_v->setters[$_k]); $x78 = TRUE; }
else { $x78 = FALSE; };
}
else {
$x79 = JS::toString($_k, $global);
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x80 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 26, 14, '<image>/12_json.js');
$_TypeError =& $x80[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x80;
$x81 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x82 = $x81($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x82->class) && $x82->class === 'Error' && !isset($x82->properties['file']) && !isset($x82->properties['line']) && !isset($x82->properties['column'])) {$x82->properties['file'] = '<image>/12_json.js';$x82->properties['line'] = 26;$x82->properties['column'] = 14;$x82->attributes['file'] = $x82->attributes['line'] = $x82->attributes['column'] = 0; }
throw new JSException($x82, 26, 14, '<image>/12_json.js');
}
$_v = JS::toObject($_v, $global);
unset($x83, $W83, $S83, $U83);
$x84 = _bc1c8d1b4999a51b0c5a2af7dab185f1_5($global, $scope, $_v, JS::toString($x79, $global), 26, 14, '<image>/12_json.js');
$x83 =& $x84[0]; list(,$W83,$S83,$U83) = $x84;
if ($U83 && (!isset($_v->extensible) || $_v->extensible)) {$_v->properties[$x79] = $x83; $x83 =& $_v->properties[$x79]; $_v->attributes[$x79] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U83 = FALSE; $W83 = TRUE; }
if (isset($S83)) {
$x86 = $S83->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x87 = $x86($global, $_v, $S83, array($_newItem), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x85 = $x87;
} else {
if (!$U83) {$x85 = $_newItem;if ($W83) { $x83 = $_newItem; }  }
else { $x85 = JS::$undefined; }
}
if (isset($_v->class) && $_v->class === 'Array' &&  is_int($_k) && $_k >= $_v->properties['length']) { $_v->properties['length'] = $_k + 1; };
};
}
}
};
};;
};
unset($_reviver, $Wreviver, $Sreviver, $Ureviver);
$x88 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('reviver', $global), 32, 12, '<image>/12_json.js');
$_reviver =& $x88[0]; list(,$Wreviver,$Sreviver,$Ureviver) = $x88;
if ($Ureviver) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x89 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 32, 12, '<image>/12_json.js');
$_ReferenceError =& $x89[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x89;
$x90 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 12);
$x91 = $x90($global, $global, $_ReferenceError, array('reviver is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x91->class) && $x91->class === 'Error' && !isset($x91->properties['file']) && !isset($x91->properties['line']) && !isset($x91->properties['column'])) {$x91->properties['file'] = '<image>/12_json.js';$x91->properties['line'] = 32;$x91->properties['column'] = 12;$x91->attributes['file'] = $x91->attributes['line'] = $x91->attributes['column'] = 0; }
throw new JSException($x91, 32, 12, '<image>/12_json.js');
}
if ($_reviver === JS::$undefined || $_reviver === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 32, 24, '<image>/12_json.js');
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
$x94 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x95 = $x94($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x95->class) && $x95->class === 'Error' && !isset($x95->properties['file']) && !isset($x95->properties['line']) && !isset($x95->properties['column'])) {$x95->properties['file'] = '<image>/12_json.js';$x95->properties['line'] = 32;$x95->properties['column'] = 24;$x95->attributes['file'] = $x95->attributes['line'] = $x95->attributes['column'] = 0; }
throw new JSException($x95, 32, 24, '<image>/12_json.js');
}
$x92 = JS::toObject($_reviver, $global);
unset($x96, $W96, $S96, $U96);
$x97 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $x92, JS::toString('call', $global), 32, 24, '<image>/12_json.js');
$x96 =& $x97[0]; list(,$W96,$S96,$U96) = $x97;
if (!(is_object($x96) && isset($x96->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x100 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 32, 24, '<image>/12_json.js');
$_TypeError =& $x100[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x100;
$x101 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x102 = $x101($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x102->class) && $x102->class === 'Error' && !isset($x102->properties['file']) && !isset($x102->properties['line']) && !isset($x102->properties['column'])) {$x102->properties['file'] = '<image>/12_json.js';$x102->properties['line'] = 32;$x102->properties['column'] = 24;$x102->attributes['file'] = $x102->attributes['line'] = $x102->attributes['column'] = 0; }
throw new JSException($x102, 32, 24, '<image>/12_json.js');
}
$x98 = $x96->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x99 = $x98($global, $x92, $x96, array($_o, $_index, $_v), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x99;
;
return JS::$undefined;
}
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'index\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$scope->properties[\'revive\']=$fn;$_revive=&$scope->properties[\'revive\'];$global->scope[++$global->scope_sp]=$scope;unset($x7,$W7,$S7,$U7);$x15=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_o,JS::toString($_index,$global),7,14,\'<image>/12_json.js\');$x7=&$x15[0];list(,$W7,$S7,$U7)=$x15;$scope->properties[\'v\']=JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$_v=$x7;$x17=$_v;$x17=($x17===JS::$undefined?\'undefined\':(is_int($x17)||is_float($x17)?\'number\':(is_bool($x17)?\'boolean\':(is_string($x17)?\'string\':(is_object($x17)&&isset($x17->call)?\'function\':\'object\')))));$x16=(((gettype($x17)===gettype(\'object\')&&$x17===\'object\'))||(((is_float($x17)||is_int($x17))&&(is_float(\'object\')||is_int(\'object\')))&&$x17==\'object\'));if(JS::toBoolean($x16,$global)){$scope->properties[\'newItem\']=JS::$undefined;$_newItem=&$scope->properties[\'newItem\'];$UnewItem=FALSE;$_newItem=JS::$undefined;unset($_Array,$WArray,$SArray,$UArray);$x18=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'Array\',$global),12,10,\'<image>/12_json.js\');$_Array=&$x18[0];list(,$WArray,$SArray,$UArray)=$x18;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x19=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),12,10,\'<image>/12_json.js\');$_ReferenceError=&$x19[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x19;$x20=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,10);$x21=$x20($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x21->class)&&$x21->class===\'Error\'&&!isset($x21->properties[\'file\'])&&!isset($x21->properties[\'line\'])&&!isset($x21->properties[\'column\'])){$x21->properties[\'file\']=\'<image>/12_json.js\';$x21->properties[\'line\']=12;$x21->properties[\'column\']=10;$x21->attributes[\'file\']=$x21->attributes[\'line\']=$x21->attributes[\'column\']=0;}throw new JSException($x21,12,10,\'<image>/12_json.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x23=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,23,\'<image>/12_json.js\');$_TypeError=&$x23[0];list(,$WTypeError,$STypeError,$UTypeError)=$x23;$x24=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x25=$x24($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'&&!isset($x25->properties[\'file\'])&&!isset($x25->properties[\'line\'])&&!isset($x25->properties[\'column\'])){$x25->properties[\'file\']=\'<image>/12_json.js\';$x25->properties[\'line\']=12;$x25->properties[\'column\']=23;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,12,23,\'<image>/12_json.js\');}$x22=JS::toObject($_Array,$global);unset($x26,$W26,$S26,$U26);$x27=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$x22,JS::toString(\'isArray\',$global),12,23,\'<image>/12_json.js\');$x26=&$x27[0];list(,$W26,$S26,$U26)=$x27;if(!(is_object($x26)&&isset($x26->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,23,\'<image>/12_json.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'&&!isset($x32->properties[\'file\'])&&!isset($x32->properties[\'line\'])&&!isset($x32->properties[\'column\'])){$x32->properties[\'file\']=\'<image>/12_json.js\';$x32->properties[\'line\']=12;$x32->properties[\'column\']=23;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,12,23,\'<image>/12_json.js\');}$x28=$x26->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x29=$x28($global,$x22,$x26,array($_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x29,$global)){for($x33=0;;++$x33){if($x33===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x34,$W34,$S34,$U34);$x35=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_v,JS::toString(\'length\',$global),13,28,\'<image>/12_json.js\');$x34=&$x35[0];list(,$W34,$S34,$U34)=$x35;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x34;}if($x33!==0){$x36=++$_i;}$x37=JS::toPrimitive($_i,$global);$x38=JS::toPrimitive($_l,$global);$x39=(is_string($x37)&&is_string($x38)?strcmp($x37,$x38)<0:(!is_nan($x40=JS::toNumber($x37,$global))&&!is_nan($x41=JS::toNumber($x38,$global))&&$x40<$x41));if(!JS::toBoolean($x39,$global)){break;}unset($_String,$WString,$SString,$UString);$x43=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'String\',$global),14,33,\'<image>/12_json.js\');$_String=&$x43[0];list(,$WString,$SString,$UString)=$x43;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x44=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),14,33,\'<image>/12_json.js\');$_ReferenceError=&$x44[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x44;$x45=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,33);$x46=$x45($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'&&!isset($x46->properties[\'file\'])&&!isset($x46->properties[\'line\'])&&!isset($x46->properties[\'column\'])){$x46->properties[\'file\']=\'<image>/12_json.js\';$x46->properties[\'line\']=14;$x46->properties[\'column\']=33;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,14,33,\'<image>/12_json.js\');}if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x49=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),14,39,\'<image>/12_json.js\');$_TypeError=&$x49[0];list(,$WTypeError,$STypeError,$UTypeError)=$x49;$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x51=$x50($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'&&!isset($x51->properties[\'file\'])&&!isset($x51->properties[\'line\'])&&!isset($x51->properties[\'column\'])){$x51->properties[\'file\']=\'<image>/12_json.js\';$x51->properties[\'line\']=14;$x51->properties[\'column\']=39;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,14,39,\'<image>/12_json.js\');}$x47=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x48=$x47($global,$global,$_String,array($_i),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x54=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),14,29,\'<image>/12_json.js\');$_TypeError=&$x54[0];list(,$WTypeError,$STypeError,$UTypeError)=$x54;$x55=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x56=$x55($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/12_json.js\';$x56->properties[\'line\']=14;$x56->properties[\'column\']=29;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,14,29,\'<image>/12_json.js\');}$x52=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x53=$x52($global,$global,$_revive,array($_v,$x48),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x53;$x42=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x42,$global)){if(!array_key_exists($_i,$_v->attributes)){unset($_v->properties[$_i]);$x57=TRUE;}else if($_v->attributes[$_i]&JS::CONFIGURABLE){unset($_v->properties[$_i],$_v->attributes[$_i],$_v->getters[$_i],$_v->setters[$_i]);$x57=TRUE;}else{$x57=FALSE;}}else{$x58=JS::toString($_i,$global);if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x59=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),17,14,\'<image>/12_json.js\');$_TypeError=&$x59[0];list(,$WTypeError,$STypeError,$UTypeError)=$x59;$x60=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x61=$x60($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x61->class)&&$x61->class===\'Error\'&&!isset($x61->properties[\'file\'])&&!isset($x61->properties[\'line\'])&&!isset($x61->properties[\'column\'])){$x61->properties[\'file\']=\'<image>/12_json.js\';$x61->properties[\'line\']=17;$x61->properties[\'column\']=14;$x61->attributes[\'file\']=$x61->attributes[\'line\']=$x61->attributes[\'column\']=0;}throw new JSException($x61,17,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x62,$W62,$S62,$U62);$x66=_bc1c8d1b4999a51b0c5a2af7dab185f1_5($global,$scope,$_v,JS::toString($x58,$global),17,14,\'<image>/12_json.js\');$x62=&$x66[0];list(,$W62,$S62,$U62)=$x66;if($U62&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$x58]=$x62;$x62=&$_v->properties[$x58];$_v->attributes[$x58]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U62=FALSE;$W62=TRUE;}if(isset($S62)){$x68=$S62->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x69=$x68($global,$_v,$S62,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x67=$x69;}else{if(!$U62){$x67=$_newItem;if($W62){$x62=$_newItem;}}else{$x67=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'&&is_int($_i)&&$_i>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_i+1;}}}}else{$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x71=array(),$x70=JS::toObject($_v,$global);$x70;$x70=$x70->prototype){foreach($x70->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x71[$property])){continue;}$x71[$property]=TRUE;$_k=$property;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),23,29,\'<image>/12_json.js\');$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x77=$x76($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x77->class)&&$x77->class===\'Error\'&&!isset($x77->properties[\'file\'])&&!isset($x77->properties[\'line\'])&&!isset($x77->properties[\'column\'])){$x77->properties[\'file\']=\'<image>/12_json.js\';$x77->properties[\'line\']=23;$x77->properties[\'column\']=29;$x77->attributes[\'file\']=$x77->attributes[\'line\']=$x77->attributes[\'column\']=0;}throw new JSException($x77,23,29,\'<image>/12_json.js\');}$x73=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x74=$x73($global,$global,$_revive,array($_v,$_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x74;$x72=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x72,$global)){if(!array_key_exists($_k,$_v->attributes)){unset($_v->properties[$_k]);$x78=TRUE;}else if($_v->attributes[$_k]&JS::CONFIGURABLE){unset($_v->properties[$_k],$_v->attributes[$_k],$_v->getters[$_k],$_v->setters[$_k]);$x78=TRUE;}else{$x78=FALSE;}}else{$x79=JS::toString($_k,$global);if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x80=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),26,14,\'<image>/12_json.js\');$_TypeError=&$x80[0];list(,$WTypeError,$STypeError,$UTypeError)=$x80;$x81=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x82=$x81($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x82->class)&&$x82->class===\'Error\'&&!isset($x82->properties[\'file\'])&&!isset($x82->properties[\'line\'])&&!isset($x82->properties[\'column\'])){$x82->properties[\'file\']=\'<image>/12_json.js\';$x82->properties[\'line\']=26;$x82->properties[\'column\']=14;$x82->attributes[\'file\']=$x82->attributes[\'line\']=$x82->attributes[\'column\']=0;}throw new JSException($x82,26,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x83,$W83,$S83,$U83);$x84=_bc1c8d1b4999a51b0c5a2af7dab185f1_5($global,$scope,$_v,JS::toString($x79,$global),26,14,\'<image>/12_json.js\');$x83=&$x84[0];list(,$W83,$S83,$U83)=$x84;if($U83&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$x79]=$x83;$x83=&$_v->properties[$x79];$_v->attributes[$x79]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U83=FALSE;$W83=TRUE;}if(isset($S83)){$x86=$S83->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x87=$x86($global,$_v,$S83,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x85=$x87;}else{if(!$U83){$x85=$_newItem;if($W83){$x83=$_newItem;}}else{$x85=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'&&is_int($_k)&&$_k>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_k+1;}}}}}}}unset($_reviver,$Wreviver,$Sreviver,$Ureviver);$x88=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'reviver\',$global),32,12,\'<image>/12_json.js\');$_reviver=&$x88[0];list(,$Wreviver,$Sreviver,$Ureviver)=$x88;if($Ureviver){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x89=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),32,12,\'<image>/12_json.js\');$_ReferenceError=&$x89[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x89;$x90=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,12);$x91=$x90($global,$global,$_ReferenceError,array(\'reviver is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x91->class)&&$x91->class===\'Error\'&&!isset($x91->properties[\'file\'])&&!isset($x91->properties[\'line\'])&&!isset($x91->properties[\'column\'])){$x91->properties[\'file\']=\'<image>/12_json.js\';$x91->properties[\'line\']=32;$x91->properties[\'column\']=12;$x91->attributes[\'file\']=$x91->attributes[\'line\']=$x91->attributes[\'column\']=0;}throw new JSException($x91,32,12,\'<image>/12_json.js\');}if($_reviver===JS::$undefined||$_reviver===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x93=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),32,24,\'<image>/12_json.js\');$_TypeError=&$x93[0];list(,$WTypeError,$STypeError,$UTypeError)=$x93;$x94=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x95=$x94($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x95->class)&&$x95->class===\'Error\'&&!isset($x95->properties[\'file\'])&&!isset($x95->properties[\'line\'])&&!isset($x95->properties[\'column\'])){$x95->properties[\'file\']=\'<image>/12_json.js\';$x95->properties[\'line\']=32;$x95->properties[\'column\']=24;$x95->attributes[\'file\']=$x95->attributes[\'line\']=$x95->attributes[\'column\']=0;}throw new JSException($x95,32,24,\'<image>/12_json.js\');}$x92=JS::toObject($_reviver,$global);unset($x96,$W96,$S96,$U96);$x97=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$x92,JS::toString(\'call\',$global),32,24,\'<image>/12_json.js\');$x96=&$x97[0];list(,$W96,$S96,$U96)=$x97;if(!(is_object($x96)&&isset($x96->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x100=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),32,24,\'<image>/12_json.js\');$_TypeError=&$x100[0];list(,$WTypeError,$STypeError,$UTypeError)=$x100;$x101=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x102=$x101($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x102->class)&&$x102->class===\'Error\'&&!isset($x102->properties[\'file\'])&&!isset($x102->properties[\'line\'])&&!isset($x102->properties[\'column\'])){$x102->properties[\'file\']=\'<image>/12_json.js\';$x102->properties[\'line\']=32;$x102->properties[\'column\']=24;$x102->attributes[\'file\']=$x102->attributes[\'line\']=$x102->attributes[\'column\']=0;}throw new JSException($x102,32,24,\'<image>/12_json.js\');}$x98=$x96->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x99=$x98($global,$x92,$x96,array($_o,$_index,$_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x99;return JS::$undefined;}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x103 = clone JS::$functionTemplate; $x103->call = '_bc1c8d1b4999a51b0c5a2af7dab185f1_2'; $x103->parameters = array (
  0 => 'o',
  1 => 'index',
); $x103->name = 'revive'; $x103->scope = $scope; $x103->properties['prototype'] = clone JS::$objectTemplate; $x103->attributes['prototype'] = JS::WRITABLE; $x103->properties['prototype']->properties['constructor'] = $x103; $x103->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x103->properties['length'] = 2; $x103->attributes['length'] = 0;
$scope->properties['revive'] = JS::$undefined; $_revive =& $scope->properties['revive'];
$Urevive = FALSE;
$_revive = $x103;
$x104 = clone JS::$objectTemplate;
$x104->properties[''] = $_ret;
$x104->attributes[''] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 35, 16, '<image>/12_json.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x109 = $x108($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/12_json.js';$x109->properties['line'] = 35;$x109->properties['column'] = 16;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 35, 16, '<image>/12_json.js');
}
$x105 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x106 = $x105($global, $global, $_revive, array($x104, ''), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uret) {$global->properties['ret'] = $_ret; $_ret =& $global->properties['ret']; }
$_ret = $x106;;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x2=&$scope->properties[\'arguments\'];$x2->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x2->properties[$i]=$args[$i];$x2->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'text\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_text=&$scope->properties[\'text\'];$Utext=FALSE;$scope->properties[\'reviver\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_reviver=&$scope->properties[\'reviver\'];$Ureviver=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=JS::fromNative(json_decode($_text));$x4=$_reviver;$x4=($x4===JS::$undefined?\'undefined\':(is_int($x4)||is_float($x4)?\'number\':(is_bool($x4)?\'boolean\':(is_string($x4)?\'string\':(is_object($x4)&&isset($x4->call)?\'function\':\'object\')))));$x3=(((gettype($x4)===gettype(\'function\')&&$x4===\'function\'))||(((is_float($x4)||is_int($x4))&&(is_float(\'function\')||is_int(\'function\')))&&$x4==\'function\'));if(JS::toBoolean($x3,$global)){$x103=clone JS::$functionTemplate;$x103->call=\'_bc1c8d1b4999a51b0c5a2af7dab185f1_2\';$x103->parameters=array(0=>\'o\',1=>\'index\',);$x103->name=\'revive\';$x103->scope=$scope;$x103->properties[\'prototype\']=clone JS::$objectTemplate;$x103->attributes[\'prototype\']=JS::WRITABLE;$x103->properties[\'prototype\']->properties[\'constructor\']=$x103;$x103->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x103->properties[\'length\']=2;$x103->attributes[\'length\']=0;$scope->properties[\'revive\']=JS::$undefined;$_revive=&$scope->properties[\'revive\'];$Urevive=FALSE;$_revive=$x103;$x104=clone JS::$objectTemplate;$x104->properties[\'\']=$_ret;$x104->attributes[\'\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x107=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,16,\'<image>/12_json.js\');$_TypeError=&$x107[0];list(,$WTypeError,$STypeError,$UTypeError)=$x107;$x108=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x109=$x108($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x109->class)&&$x109->class===\'Error\'&&!isset($x109->properties[\'file\'])&&!isset($x109->properties[\'line\'])&&!isset($x109->properties[\'column\'])){$x109->properties[\'file\']=\'<image>/12_json.js\';$x109->properties[\'line\']=35;$x109->properties[\'column\']=16;$x109->attributes[\'file\']=$x109->attributes[\'line\']=$x109->attributes[\'column\']=0;}throw new JSException($x109,35,16,\'<image>/12_json.js\');}$x105=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x106=$x105($global,$global,$_revive,array($x104,\'\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uret){$global->properties[\'ret\']=$_ret;$_ret=&$global->properties[\'ret\'];}$_ret=$x106;}return$_ret;return JS::$undefined;}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x112 =& $scope->properties['arguments'];
$x112->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x112->properties[$i] = $args[$i];
$x112->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x116 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('arguments', $global), 42, 7, '<image>/12_json.js');
$_arguments =& $x116[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x116;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x117 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 42, 7, '<image>/12_json.js');
$_ReferenceError =& $x117[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x117;
$x118 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 42, 7);
$x119 = $x118($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x119->class) && $x119->class === 'Error' && !isset($x119->properties['file']) && !isset($x119->properties['line']) && !isset($x119->properties['column'])) {$x119->properties['file'] = '<image>/12_json.js';$x119->properties['line'] = 42;$x119->properties['column'] = 7;$x119->attributes['file'] = $x119->attributes['line'] = $x119->attributes['column'] = 0; }
throw new JSException($x119, 42, 7, '<image>/12_json.js');
}
unset($x120, $W120, $S120, $U120);
$x121 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $_arguments, JS::toString('length', $global), 42, 16, '<image>/12_json.js');
$x120 =& $x121[0]; list(,$W120,$S120,$U120) = $x121;
$x113 = JS::toPrimitive($x120, $global);
$x114 = JS::toPrimitive(1, $global);
$x115 = (is_string($x114) && is_string($x113) ? strcmp($x114, $x113) < 0 : (!is_nan($x122 = JS::toNumber($x114, $global)) && !is_nan($x123 = JS::toNumber($x113, $global)) && $x122 < $x123));
if (JS::toBoolean($x115, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x126 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('NotImplementedError', $global), 43, 14, '<image>/12_json.js');
$_NotImplementedError =& $x126[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x126;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x127 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 43, 14, '<image>/12_json.js');
$_ReferenceError =& $x127[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x127;
$x128 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 14);
$x129 = $x128($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x129->class) && $x129->class === 'Error' && !isset($x129->properties['file']) && !isset($x129->properties['line']) && !isset($x129->properties['column'])) {$x129->properties['file'] = '<image>/12_json.js';$x129->properties['line'] = 43;$x129->properties['column'] = 14;$x129->attributes['file'] = $x129->attributes['line'] = $x129->attributes['column'] = 0; }
throw new JSException($x129, 43, 14, '<image>/12_json.js');
}
$x124 = clone JS::$objectTemplate;
unset($x130, $W130, $S130, $U130);
$x131 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 43, 10, '<image>/12_json.js');
$x130 =& $x131[0]; list(,$W130,$S130,$U130) = $x131;
$x125 = $x130;
$x124->prototype = $x125;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x134 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 43, 10, '<image>/12_json.js');
$_TypeError =& $x134[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x134;
$x135 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x136 = $x135($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x136->class) && $x136->class === 'Error' && !isset($x136->properties['file']) && !isset($x136->properties['line']) && !isset($x136->properties['column'])) {$x136->properties['file'] = '<image>/12_json.js';$x136->properties['line'] = 43;$x136->properties['column'] = 10;$x136->attributes['file'] = $x136->attributes['line'] = $x136->attributes['column'] = 0; }
throw new JSException($x136, 43, 10, '<image>/12_json.js');
}
$x132 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x133 = $x132($global, $x124, $_NotImplementedError, array('JSON.stringify(): replacer and space arguments not supported.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x125 = $x133;
if (is_object($x125) && $x125 !== JS::$undefined) { $x124 = $x125; }
if (isset($x124->class) && $x124->class === 'Error' && !isset($x124->properties['file']) && !isset($x124->properties['line']) && !isset($x124->properties['column'])) {$x124->properties['file'] = '<image>/12_json.js';$x124->properties['line'] = 43;$x124->properties['column'] = 4;$x124->attributes['file'] = $x124->attributes['line'] = $x124->attributes['column'] = 0; }
throw new JSException($x124, 43, 4, '<image>/12_json.js');;
};
return str_replace("\\/", "/", json_encode(JS::toNative($_value)));
;
return JS::$undefined;
}
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x112=&$scope->properties[\'arguments\'];$x112->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x112->properties[$i]=$args[$i];$x112->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'replacer\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replacer=&$scope->properties[\'replacer\'];$Ureplacer=FALSE;$scope->properties[\'space\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_space=&$scope->properties[\'space\'];$Uspace=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x116=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'arguments\',$global),42,7,\'<image>/12_json.js\');$_arguments=&$x116[0];list(,$Warguments,$Sarguments,$Uarguments)=$x116;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x117=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),42,7,\'<image>/12_json.js\');$_ReferenceError=&$x117[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x117;$x118=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',42,7);$x119=$x118($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x119->class)&&$x119->class===\'Error\'&&!isset($x119->properties[\'file\'])&&!isset($x119->properties[\'line\'])&&!isset($x119->properties[\'column\'])){$x119->properties[\'file\']=\'<image>/12_json.js\';$x119->properties[\'line\']=42;$x119->properties[\'column\']=7;$x119->attributes[\'file\']=$x119->attributes[\'line\']=$x119->attributes[\'column\']=0;}throw new JSException($x119,42,7,\'<image>/12_json.js\');}unset($x120,$W120,$S120,$U120);$x121=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_arguments,JS::toString(\'length\',$global),42,16,\'<image>/12_json.js\');$x120=&$x121[0];list(,$W120,$S120,$U120)=$x121;$x113=JS::toPrimitive($x120,$global);$x114=JS::toPrimitive(1,$global);$x115=(is_string($x114)&&is_string($x113)?strcmp($x114,$x113)<0:(!is_nan($x122=JS::toNumber($x114,$global))&&!is_nan($x123=JS::toNumber($x113,$global))&&$x122<$x123));if(JS::toBoolean($x115,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x126=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),43,14,\'<image>/12_json.js\');$_NotImplementedError=&$x126[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x126;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x127=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),43,14,\'<image>/12_json.js\');$_ReferenceError=&$x127[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x127;$x128=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,14);$x129=$x128($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x129->class)&&$x129->class===\'Error\'&&!isset($x129->properties[\'file\'])&&!isset($x129->properties[\'line\'])&&!isset($x129->properties[\'column\'])){$x129->properties[\'file\']=\'<image>/12_json.js\';$x129->properties[\'line\']=43;$x129->properties[\'column\']=14;$x129->attributes[\'file\']=$x129->attributes[\'line\']=$x129->attributes[\'column\']=0;}throw new JSException($x129,43,14,\'<image>/12_json.js\');}$x124=clone JS::$objectTemplate;unset($x130,$W130,$S130,$U130);$x131=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),43,10,\'<image>/12_json.js\');$x130=&$x131[0];list(,$W130,$S130,$U130)=$x131;$x125=$x130;$x124->prototype=$x125;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x134=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,10,\'<image>/12_json.js\');$_TypeError=&$x134[0];list(,$WTypeError,$STypeError,$UTypeError)=$x134;$x135=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x136=$x135($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x136->class)&&$x136->class===\'Error\'&&!isset($x136->properties[\'file\'])&&!isset($x136->properties[\'line\'])&&!isset($x136->properties[\'column\'])){$x136->properties[\'file\']=\'<image>/12_json.js\';$x136->properties[\'line\']=43;$x136->properties[\'column\']=10;$x136->attributes[\'file\']=$x136->attributes[\'line\']=$x136->attributes[\'column\']=0;}throw new JSException($x136,43,10,\'<image>/12_json.js\');}$x132=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x133=$x132($global,$x124,$_NotImplementedError,array(\'JSON.stringify(): replacer and space arguments not supported.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x125=$x133;if(is_object($x125)&&$x125!==JS::$undefined){$x124=$x125;}if(isset($x124->class)&&$x124->class===\'Error\'&&!isset($x124->properties[\'file\'])&&!isset($x124->properties[\'line\'])&&!isset($x124->properties[\'column\'])){$x124->properties[\'file\']=\'<image>/12_json.js\';$x124->properties[\'line\']=43;$x124->properties[\'column\']=4;$x124->attributes[\'file\']=$x124->attributes[\'line\']=$x124->attributes[\'column\']=0;}throw new JSException($x124,43,4,\'<image>/12_json.js\');}return str_replace("\\\\/","/",json_encode(JS::toNative($_value)));return JS::$undefined;}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/12_json.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/12_json.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x110 = clone JS::$functionTemplate; $x110->call = '_bc1c8d1b4999a51b0c5a2af7dab185f1_1'; $x110->parameters = array (
  0 => 'text',
  1 => 'reviver',
); $x110->scope = $scope; $x110->properties['prototype'] = clone JS::$objectTemplate; $x110->attributes['prototype'] = JS::WRITABLE; $x110->properties['prototype']->properties['constructor'] = $x110; $x110->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x110->properties['length'] = 2; $x110->attributes['length'] = 0;
$x0->properties['parse'] = $x110;
$x0->attributes['parse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x137 = clone JS::$functionTemplate; $x137->call = '_bc1c8d1b4999a51b0c5a2af7dab185f1_6'; $x137->parameters = array (
  0 => 'value',
  1 => 'replacer',
  2 => 'space',
); $x137->scope = $scope; $x137->properties['prototype'] = clone JS::$objectTemplate; $x137->attributes['prototype'] = JS::WRITABLE; $x137->properties['prototype']->properties['constructor'] = $x137; $x137->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x137->properties['length'] = 3; $x137->attributes['length'] = 0;
$x0->properties['stringify'] = $x137;
$x0->attributes['stringify'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['JSON'] = JS::$undefined; $_JSON =& $scope->properties['JSON'];
$UJSON = FALSE;
$_JSON = $x0;
$_JSON->class = 'JSON';
;
return JS::$undefined;
}
