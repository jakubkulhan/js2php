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
if (isset($_v->class) && $_v->class === 'Array') {  if (isset($_v->properties['length']) && $_v->properties['length'] !== JS::$undefined) { $x68 = $_v->properties['length']; }  else { $x68 = 0; } }
if (isset($S62)) {
$x69 = $S62->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 17, 14);
$x70 = $x69($global, $_v, $S62, array($_newItem), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x67 = $x70;
} else {
if (!$U62) {$x67 = $_newItem;if ($W62) { $x62 = $_newItem; }  }
else { $x67 = JS::$undefined; }
}
if (isset($_v->class) && $_v->class === 'Array') {if (is_int($_i) && $_i >= $_v->properties['length']) { $_v->properties['length'] = $_i + 1; }else if ($x58 === 'length' && is_int($_newItem) && $x68 > $_newItem) {  for ($i = $_newItem; $i < $x68; ++$i) {  unset($_v->properties[$i], $_v->attributes[$i]); }}};
};
};
}
else {

$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x72 = array(), $x71 = JS::toObject($_v, $global); $x71; $x71 = $x71->prototype) {
foreach ($x71->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x72[$property])) { continue; }
$x72[$property] = TRUE;
$_k = $property;

if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x76 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 23, 29, '<image>/12_json.js');
$_TypeError =& $x76[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x76;
$x77 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x78 = $x77($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x78->class) && $x78->class === 'Error' && !isset($x78->properties['file']) && !isset($x78->properties['line']) && !isset($x78->properties['column'])) {$x78->properties['file'] = '<image>/12_json.js';$x78->properties['line'] = 23;$x78->properties['column'] = 29;$x78->attributes['file'] = $x78->attributes['line'] = $x78->attributes['column'] = 0; }
throw new JSException($x78, 23, 29, '<image>/12_json.js');
}
$x74 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 23, 29);
$x75 = $x74($global, $global, $_revive, array($_v, $_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewItem) {$global->properties['newItem'] = $_newItem; $_newItem =& $global->properties['newItem']; }
$_newItem = $x75;
$x73 = (((gettype($_newItem) === gettype(JS::$undefined) && $_newItem === JS::$undefined))|| (((is_float($_newItem) || is_int($_newItem)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_newItem == JS::$undefined));
if (JS::toBoolean($x73, $global)) {
if (!array_key_exists($_k, $_v->attributes)) { unset($_v->properties[$_k]); $x79 = TRUE; }
else if ($_v->attributes[$_k] & JS::CONFIGURABLE) { unset($_v->properties[$_k], $_v->attributes[$_k], $_v->getters[$_k], $_v->setters[$_k]); $x79 = TRUE; }
else { $x79 = FALSE; };
}
else {
$x80 = JS::toString($_k, $global);
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x81 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 26, 14, '<image>/12_json.js');
$_TypeError =& $x81[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x81;
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x83 = $x82($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error' && !isset($x83->properties['file']) && !isset($x83->properties['line']) && !isset($x83->properties['column'])) {$x83->properties['file'] = '<image>/12_json.js';$x83->properties['line'] = 26;$x83->properties['column'] = 14;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, 26, 14, '<image>/12_json.js');
}
$_v = JS::toObject($_v, $global);
unset($x84, $W84, $S84, $U84);
$x85 = _bc1c8d1b4999a51b0c5a2af7dab185f1_5($global, $scope, $_v, JS::toString($x80, $global), 26, 14, '<image>/12_json.js');
$x84 =& $x85[0]; list(,$W84,$S84,$U84) = $x85;
if ($U84 && (!isset($_v->extensible) || $_v->extensible)) {$_v->properties[$x80] = $x84; $x84 =& $_v->properties[$x80]; $_v->attributes[$x80] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U84 = FALSE; $W84 = TRUE; }
if (isset($_v->class) && $_v->class === 'Array') {  if (isset($_v->properties['length']) && $_v->properties['length'] !== JS::$undefined) { $x87 = $_v->properties['length']; }  else { $x87 = 0; } }
if (isset($S84)) {
$x88 = $S84->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 26, 14);
$x89 = $x88($global, $_v, $S84, array($_newItem), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x86 = $x89;
} else {
if (!$U84) {$x86 = $_newItem;if ($W84) { $x84 = $_newItem; }  }
else { $x86 = JS::$undefined; }
}
if (isset($_v->class) && $_v->class === 'Array') {if (is_int($_k) && $_k >= $_v->properties['length']) { $_v->properties['length'] = $_k + 1; }else if ($x80 === 'length' && is_int($_newItem) && $x87 > $_newItem) {  for ($i = $_newItem; $i < $x87; ++$i) {  unset($_v->properties[$i], $_v->attributes[$i]); }}};
};
}
}
};
};;
};
unset($_reviver, $Wreviver, $Sreviver, $Ureviver);
$x90 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('reviver', $global), 32, 12, '<image>/12_json.js');
$_reviver =& $x90[0]; list(,$Wreviver,$Sreviver,$Ureviver) = $x90;
if ($Ureviver) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x91 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 32, 12, '<image>/12_json.js');
$_ReferenceError =& $x91[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x91;
$x92 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 12);
$x93 = $x92($global, $global, $_ReferenceError, array('reviver is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/12_json.js';$x93->properties['line'] = 32;$x93->properties['column'] = 12;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 32, 12, '<image>/12_json.js');
}
if ($_reviver === JS::$undefined || $_reviver === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x95 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 32, 24, '<image>/12_json.js');
$_TypeError =& $x95[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x95;
$x96 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x97 = $x96($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error' && !isset($x97->properties['file']) && !isset($x97->properties['line']) && !isset($x97->properties['column'])) {$x97->properties['file'] = '<image>/12_json.js';$x97->properties['line'] = 32;$x97->properties['column'] = 24;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 32, 24, '<image>/12_json.js');
}
$x94 = JS::toObject($_reviver, $global);
unset($x98, $W98, $S98, $U98);
$x99 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $x94, JS::toString('call', $global), 32, 24, '<image>/12_json.js');
$x98 =& $x99[0]; list(,$W98,$S98,$U98) = $x99;
if (!(is_object($x98) && isset($x98->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x102 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 32, 24, '<image>/12_json.js');
$_TypeError =& $x102[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x102;
$x103 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x104 = $x103($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/12_json.js';$x104->properties['line'] = 32;$x104->properties['column'] = 24;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 32, 24, '<image>/12_json.js');
}
$x100 = $x98->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 32, 24);
$x101 = $x100($global, $x94, $x98, array($_o, $_index, $_v), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x101;
;
return JS::$undefined;
}
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'index\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$scope->properties[\'revive\']=$fn;$_revive=&$scope->properties[\'revive\'];$global->scope[++$global->scope_sp]=$scope;unset($x7,$W7,$S7,$U7);$x15=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_o,JS::toString($_index,$global),7,14,\'<image>/12_json.js\');$x7=&$x15[0];list(,$W7,$S7,$U7)=$x15;$scope->properties[\'v\']=JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$_v=$x7;$x17=$_v;$x17=($x17===JS::$undefined?\'undefined\':(is_int($x17)||is_float($x17)?\'number\':(is_bool($x17)?\'boolean\':(is_string($x17)?\'string\':(is_object($x17)&&isset($x17->call)?\'function\':\'object\')))));$x16=(((gettype($x17)===gettype(\'object\')&&$x17===\'object\'))||(((is_float($x17)||is_int($x17))&&(is_float(\'object\')||is_int(\'object\')))&&$x17==\'object\'));if(JS::toBoolean($x16,$global)){$scope->properties[\'newItem\']=JS::$undefined;$_newItem=&$scope->properties[\'newItem\'];$UnewItem=FALSE;$_newItem=JS::$undefined;unset($_Array,$WArray,$SArray,$UArray);$x18=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'Array\',$global),12,10,\'<image>/12_json.js\');$_Array=&$x18[0];list(,$WArray,$SArray,$UArray)=$x18;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x19=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),12,10,\'<image>/12_json.js\');$_ReferenceError=&$x19[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x19;$x20=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,10);$x21=$x20($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x21->class)&&$x21->class===\'Error\'&&!isset($x21->properties[\'file\'])&&!isset($x21->properties[\'line\'])&&!isset($x21->properties[\'column\'])){$x21->properties[\'file\']=\'<image>/12_json.js\';$x21->properties[\'line\']=12;$x21->properties[\'column\']=10;$x21->attributes[\'file\']=$x21->attributes[\'line\']=$x21->attributes[\'column\']=0;}throw new JSException($x21,12,10,\'<image>/12_json.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x23=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,23,\'<image>/12_json.js\');$_TypeError=&$x23[0];list(,$WTypeError,$STypeError,$UTypeError)=$x23;$x24=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x25=$x24($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'&&!isset($x25->properties[\'file\'])&&!isset($x25->properties[\'line\'])&&!isset($x25->properties[\'column\'])){$x25->properties[\'file\']=\'<image>/12_json.js\';$x25->properties[\'line\']=12;$x25->properties[\'column\']=23;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,12,23,\'<image>/12_json.js\');}$x22=JS::toObject($_Array,$global);unset($x26,$W26,$S26,$U26);$x27=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$x22,JS::toString(\'isArray\',$global),12,23,\'<image>/12_json.js\');$x26=&$x27[0];list(,$W26,$S26,$U26)=$x27;if(!(is_object($x26)&&isset($x26->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,23,\'<image>/12_json.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'&&!isset($x32->properties[\'file\'])&&!isset($x32->properties[\'line\'])&&!isset($x32->properties[\'column\'])){$x32->properties[\'file\']=\'<image>/12_json.js\';$x32->properties[\'line\']=12;$x32->properties[\'column\']=23;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,12,23,\'<image>/12_json.js\');}$x28=$x26->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',12,23);$x29=$x28($global,$x22,$x26,array($_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x29,$global)){for($x33=0;;++$x33){if($x33===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x34,$W34,$S34,$U34);$x35=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_v,JS::toString(\'length\',$global),13,28,\'<image>/12_json.js\');$x34=&$x35[0];list(,$W34,$S34,$U34)=$x35;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x34;}if($x33!==0){$x36=++$_i;}$x37=JS::toPrimitive($_i,$global);$x38=JS::toPrimitive($_l,$global);$x39=(is_string($x37)&&is_string($x38)?strcmp($x37,$x38)<0:(!is_nan($x40=JS::toNumber($x37,$global))&&!is_nan($x41=JS::toNumber($x38,$global))&&$x40<$x41));if(!JS::toBoolean($x39,$global)){break;}unset($_String,$WString,$SString,$UString);$x43=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'String\',$global),14,33,\'<image>/12_json.js\');$_String=&$x43[0];list(,$WString,$SString,$UString)=$x43;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x44=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),14,33,\'<image>/12_json.js\');$_ReferenceError=&$x44[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x44;$x45=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,33);$x46=$x45($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'&&!isset($x46->properties[\'file\'])&&!isset($x46->properties[\'line\'])&&!isset($x46->properties[\'column\'])){$x46->properties[\'file\']=\'<image>/12_json.js\';$x46->properties[\'line\']=14;$x46->properties[\'column\']=33;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,14,33,\'<image>/12_json.js\');}if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x49=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),14,39,\'<image>/12_json.js\');$_TypeError=&$x49[0];list(,$WTypeError,$STypeError,$UTypeError)=$x49;$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x51=$x50($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'&&!isset($x51->properties[\'file\'])&&!isset($x51->properties[\'line\'])&&!isset($x51->properties[\'column\'])){$x51->properties[\'file\']=\'<image>/12_json.js\';$x51->properties[\'line\']=14;$x51->properties[\'column\']=39;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,14,39,\'<image>/12_json.js\');}$x47=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,39);$x48=$x47($global,$global,$_String,array($_i),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x54=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),14,29,\'<image>/12_json.js\');$_TypeError=&$x54[0];list(,$WTypeError,$STypeError,$UTypeError)=$x54;$x55=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x56=$x55($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/12_json.js\';$x56->properties[\'line\']=14;$x56->properties[\'column\']=29;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,14,29,\'<image>/12_json.js\');}$x52=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',14,29);$x53=$x52($global,$global,$_revive,array($_v,$x48),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x53;$x42=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x42,$global)){if(!array_key_exists($_i,$_v->attributes)){unset($_v->properties[$_i]);$x57=TRUE;}else if($_v->attributes[$_i]&JS::CONFIGURABLE){unset($_v->properties[$_i],$_v->attributes[$_i],$_v->getters[$_i],$_v->setters[$_i]);$x57=TRUE;}else{$x57=FALSE;}}else{$x58=JS::toString($_i,$global);if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x59=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),17,14,\'<image>/12_json.js\');$_TypeError=&$x59[0];list(,$WTypeError,$STypeError,$UTypeError)=$x59;$x60=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x61=$x60($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x61->class)&&$x61->class===\'Error\'&&!isset($x61->properties[\'file\'])&&!isset($x61->properties[\'line\'])&&!isset($x61->properties[\'column\'])){$x61->properties[\'file\']=\'<image>/12_json.js\';$x61->properties[\'line\']=17;$x61->properties[\'column\']=14;$x61->attributes[\'file\']=$x61->attributes[\'line\']=$x61->attributes[\'column\']=0;}throw new JSException($x61,17,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x62,$W62,$S62,$U62);$x66=_bc1c8d1b4999a51b0c5a2af7dab185f1_5($global,$scope,$_v,JS::toString($x58,$global),17,14,\'<image>/12_json.js\');$x62=&$x66[0];list(,$W62,$S62,$U62)=$x66;if($U62&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$x58]=$x62;$x62=&$_v->properties[$x58];$_v->attributes[$x58]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U62=FALSE;$W62=TRUE;}if(isset($_v->class)&&$_v->class===\'Array\'){if(isset($_v->properties[\'length\'])&&$_v->properties[\'length\']!==JS::$undefined){$x68=$_v->properties[\'length\'];}else{$x68=0;}}if(isset($S62)){$x69=$S62->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',17,14);$x70=$x69($global,$_v,$S62,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x67=$x70;}else{if(!$U62){$x67=$_newItem;if($W62){$x62=$_newItem;}}else{$x67=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'){if(is_int($_i)&&$_i>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_i+1;}else if($x58===\'length\'&&is_int($_newItem)&&$x68>$_newItem){for($i=$_newItem;$i<$x68;++$i){unset($_v->properties[$i],$_v->attributes[$i]);}}}}}}else{$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x72=array(),$x71=JS::toObject($_v,$global);$x71;$x71=$x71->prototype){foreach($x71->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x72[$property])){continue;}$x72[$property]=TRUE;$_k=$property;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x76=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),23,29,\'<image>/12_json.js\');$_TypeError=&$x76[0];list(,$WTypeError,$STypeError,$UTypeError)=$x76;$x77=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x78=$x77($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x78->class)&&$x78->class===\'Error\'&&!isset($x78->properties[\'file\'])&&!isset($x78->properties[\'line\'])&&!isset($x78->properties[\'column\'])){$x78->properties[\'file\']=\'<image>/12_json.js\';$x78->properties[\'line\']=23;$x78->properties[\'column\']=29;$x78->attributes[\'file\']=$x78->attributes[\'line\']=$x78->attributes[\'column\']=0;}throw new JSException($x78,23,29,\'<image>/12_json.js\');}$x74=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',23,29);$x75=$x74($global,$global,$_revive,array($_v,$_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewItem){$global->properties[\'newItem\']=$_newItem;$_newItem=&$global->properties[\'newItem\'];}$_newItem=$x75;$x73=(((gettype($_newItem)===gettype(JS::$undefined)&&$_newItem===JS::$undefined))||(((is_float($_newItem)||is_int($_newItem))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_newItem==JS::$undefined));if(JS::toBoolean($x73,$global)){if(!array_key_exists($_k,$_v->attributes)){unset($_v->properties[$_k]);$x79=TRUE;}else if($_v->attributes[$_k]&JS::CONFIGURABLE){unset($_v->properties[$_k],$_v->attributes[$_k],$_v->getters[$_k],$_v->setters[$_k]);$x79=TRUE;}else{$x79=FALSE;}}else{$x80=JS::toString($_k,$global);if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x81=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),26,14,\'<image>/12_json.js\');$_TypeError=&$x81[0];list(,$WTypeError,$STypeError,$UTypeError)=$x81;$x82=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x83=$x82($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x83->class)&&$x83->class===\'Error\'&&!isset($x83->properties[\'file\'])&&!isset($x83->properties[\'line\'])&&!isset($x83->properties[\'column\'])){$x83->properties[\'file\']=\'<image>/12_json.js\';$x83->properties[\'line\']=26;$x83->properties[\'column\']=14;$x83->attributes[\'file\']=$x83->attributes[\'line\']=$x83->attributes[\'column\']=0;}throw new JSException($x83,26,14,\'<image>/12_json.js\');}$_v=JS::toObject($_v,$global);unset($x84,$W84,$S84,$U84);$x85=_bc1c8d1b4999a51b0c5a2af7dab185f1_5($global,$scope,$_v,JS::toString($x80,$global),26,14,\'<image>/12_json.js\');$x84=&$x85[0];list(,$W84,$S84,$U84)=$x85;if($U84&&(!isset($_v->extensible)||$_v->extensible)){$_v->properties[$x80]=$x84;$x84=&$_v->properties[$x80];$_v->attributes[$x80]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U84=FALSE;$W84=TRUE;}if(isset($_v->class)&&$_v->class===\'Array\'){if(isset($_v->properties[\'length\'])&&$_v->properties[\'length\']!==JS::$undefined){$x87=$_v->properties[\'length\'];}else{$x87=0;}}if(isset($S84)){$x88=$S84->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',26,14);$x89=$x88($global,$_v,$S84,array($_newItem),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x86=$x89;}else{if(!$U84){$x86=$_newItem;if($W84){$x84=$_newItem;}}else{$x86=JS::$undefined;}}if(isset($_v->class)&&$_v->class===\'Array\'){if(is_int($_k)&&$_k>=$_v->properties[\'length\']){$_v->properties[\'length\']=$_k+1;}else if($x80===\'length\'&&is_int($_newItem)&&$x87>$_newItem){for($i=$_newItem;$i<$x87;++$i){unset($_v->properties[$i],$_v->attributes[$i]);}}}}}}}}}unset($_reviver,$Wreviver,$Sreviver,$Ureviver);$x90=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'reviver\',$global),32,12,\'<image>/12_json.js\');$_reviver=&$x90[0];list(,$Wreviver,$Sreviver,$Ureviver)=$x90;if($Ureviver){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x91=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),32,12,\'<image>/12_json.js\');$_ReferenceError=&$x91[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x91;$x92=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,12);$x93=$x92($global,$global,$_ReferenceError,array(\'reviver is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x93->class)&&$x93->class===\'Error\'&&!isset($x93->properties[\'file\'])&&!isset($x93->properties[\'line\'])&&!isset($x93->properties[\'column\'])){$x93->properties[\'file\']=\'<image>/12_json.js\';$x93->properties[\'line\']=32;$x93->properties[\'column\']=12;$x93->attributes[\'file\']=$x93->attributes[\'line\']=$x93->attributes[\'column\']=0;}throw new JSException($x93,32,12,\'<image>/12_json.js\');}if($_reviver===JS::$undefined||$_reviver===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x95=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),32,24,\'<image>/12_json.js\');$_TypeError=&$x95[0];list(,$WTypeError,$STypeError,$UTypeError)=$x95;$x96=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x97=$x96($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'&&!isset($x97->properties[\'file\'])&&!isset($x97->properties[\'line\'])&&!isset($x97->properties[\'column\'])){$x97->properties[\'file\']=\'<image>/12_json.js\';$x97->properties[\'line\']=32;$x97->properties[\'column\']=24;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,32,24,\'<image>/12_json.js\');}$x94=JS::toObject($_reviver,$global);unset($x98,$W98,$S98,$U98);$x99=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$x94,JS::toString(\'call\',$global),32,24,\'<image>/12_json.js\');$x98=&$x99[0];list(,$W98,$S98,$U98)=$x99;if(!(is_object($x98)&&isset($x98->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x102=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),32,24,\'<image>/12_json.js\');$_TypeError=&$x102[0];list(,$WTypeError,$STypeError,$UTypeError)=$x102;$x103=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x104=$x103($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x104->class)&&$x104->class===\'Error\'&&!isset($x104->properties[\'file\'])&&!isset($x104->properties[\'line\'])&&!isset($x104->properties[\'column\'])){$x104->properties[\'file\']=\'<image>/12_json.js\';$x104->properties[\'line\']=32;$x104->properties[\'column\']=24;$x104->attributes[\'file\']=$x104->attributes[\'line\']=$x104->attributes[\'column\']=0;}throw new JSException($x104,32,24,\'<image>/12_json.js\');}$x100=$x98->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',32,24);$x101=$x100($global,$x94,$x98,array($_o,$_index,$_v),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x101;return JS::$undefined;}', "\n";
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
$x105 = clone JS::$functionTemplate; $x105->call = '_bc1c8d1b4999a51b0c5a2af7dab185f1_2'; $x105->parameters = array (
  0 => 'o',
  1 => 'index',
); $x105->name = 'revive'; $x105->scope = $scope; $x105->properties['prototype'] = clone JS::$objectTemplate; $x105->attributes['prototype'] = JS::WRITABLE; $x105->properties['prototype']->properties['constructor'] = $x105; $x105->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x105->properties['length'] = 2; $x105->attributes['length'] = 0;
$scope->properties['revive'] = JS::$undefined; $_revive =& $scope->properties['revive'];
$Urevive = FALSE;
$_revive = $x105;
$x106 = clone JS::$objectTemplate;
$x106->properties[''] = $_ret;
$x106->attributes[''] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (!(is_object($_revive) && isset($_revive->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x109 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 35, 16, '<image>/12_json.js');
$_TypeError =& $x109[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x109;
$x110 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x111 = $x110($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x111->class) && $x111->class === 'Error' && !isset($x111->properties['file']) && !isset($x111->properties['line']) && !isset($x111->properties['column'])) {$x111->properties['file'] = '<image>/12_json.js';$x111->properties['line'] = 35;$x111->properties['column'] = 16;$x111->attributes['file'] = $x111->attributes['line'] = $x111->attributes['column'] = 0; }
throw new JSException($x111, 35, 16, '<image>/12_json.js');
}
$x107 = $_revive->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 35, 16);
$x108 = $x107($global, $global, $_revive, array($x106, ''), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uret) {$global->properties['ret'] = $_ret; $_ret =& $global->properties['ret']; }
$_ret = $x108;;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x2=&$scope->properties[\'arguments\'];$x2->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x2->properties[$i]=$args[$i];$x2->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'text\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_text=&$scope->properties[\'text\'];$Utext=FALSE;$scope->properties[\'reviver\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_reviver=&$scope->properties[\'reviver\'];$Ureviver=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=JS::fromNative(json_decode($_text));$x4=$_reviver;$x4=($x4===JS::$undefined?\'undefined\':(is_int($x4)||is_float($x4)?\'number\':(is_bool($x4)?\'boolean\':(is_string($x4)?\'string\':(is_object($x4)&&isset($x4->call)?\'function\':\'object\')))));$x3=(((gettype($x4)===gettype(\'function\')&&$x4===\'function\'))||(((is_float($x4)||is_int($x4))&&(is_float(\'function\')||is_int(\'function\')))&&$x4==\'function\'));if(JS::toBoolean($x3,$global)){$x105=clone JS::$functionTemplate;$x105->call=\'_bc1c8d1b4999a51b0c5a2af7dab185f1_2\';$x105->parameters=array(0=>\'o\',1=>\'index\',);$x105->name=\'revive\';$x105->scope=$scope;$x105->properties[\'prototype\']=clone JS::$objectTemplate;$x105->attributes[\'prototype\']=JS::WRITABLE;$x105->properties[\'prototype\']->properties[\'constructor\']=$x105;$x105->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x105->properties[\'length\']=2;$x105->attributes[\'length\']=0;$scope->properties[\'revive\']=JS::$undefined;$_revive=&$scope->properties[\'revive\'];$Urevive=FALSE;$_revive=$x105;$x106=clone JS::$objectTemplate;$x106->properties[\'\']=$_ret;$x106->attributes[\'\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(!(is_object($_revive)&&isset($_revive->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x109=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,16,\'<image>/12_json.js\');$_TypeError=&$x109[0];list(,$WTypeError,$STypeError,$UTypeError)=$x109;$x110=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x111=$x110($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x111->class)&&$x111->class===\'Error\'&&!isset($x111->properties[\'file\'])&&!isset($x111->properties[\'line\'])&&!isset($x111->properties[\'column\'])){$x111->properties[\'file\']=\'<image>/12_json.js\';$x111->properties[\'line\']=35;$x111->properties[\'column\']=16;$x111->attributes[\'file\']=$x111->attributes[\'line\']=$x111->attributes[\'column\']=0;}throw new JSException($x111,35,16,\'<image>/12_json.js\');}$x107=$_revive->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',35,16);$x108=$x107($global,$global,$_revive,array($x106,\'\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uret){$global->properties[\'ret\']=$_ret;$_ret=&$global->properties[\'ret\'];}$_ret=$x108;}return$_ret;return JS::$undefined;}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x114 =& $scope->properties['arguments'];
$x114->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x114->properties[$i] = $args[$i];
$x114->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x118 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('arguments', $global), 42, 7, '<image>/12_json.js');
$_arguments =& $x118[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x118;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x119 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 42, 7, '<image>/12_json.js');
$_ReferenceError =& $x119[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x119;
$x120 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 42, 7);
$x121 = $x120($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x121->class) && $x121->class === 'Error' && !isset($x121->properties['file']) && !isset($x121->properties['line']) && !isset($x121->properties['column'])) {$x121->properties['file'] = '<image>/12_json.js';$x121->properties['line'] = 42;$x121->properties['column'] = 7;$x121->attributes['file'] = $x121->attributes['line'] = $x121->attributes['column'] = 0; }
throw new JSException($x121, 42, 7, '<image>/12_json.js');
}
unset($x122, $W122, $S122, $U122);
$x123 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $_arguments, JS::toString('length', $global), 42, 16, '<image>/12_json.js');
$x122 =& $x123[0]; list(,$W122,$S122,$U122) = $x123;
$x115 = JS::toPrimitive($x122, $global);
$x116 = JS::toPrimitive(1, $global);
$x117 = (is_string($x116) && is_string($x115) ? strcmp($x116, $x115) < 0 : (!is_nan($x124 = JS::toNumber($x116, $global)) && !is_nan($x125 = JS::toNumber($x115, $global)) && $x124 < $x125));
if (JS::toBoolean($x117, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x128 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('NotImplementedError', $global), 43, 14, '<image>/12_json.js');
$_NotImplementedError =& $x128[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x128;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x129 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('ReferenceError', $global), 43, 14, '<image>/12_json.js');
$_ReferenceError =& $x129[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x129;
$x130 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 14);
$x131 = $x130($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x131->class) && $x131->class === 'Error' && !isset($x131->properties['file']) && !isset($x131->properties['line']) && !isset($x131->properties['column'])) {$x131->properties['file'] = '<image>/12_json.js';$x131->properties['line'] = 43;$x131->properties['column'] = 14;$x131->attributes['file'] = $x131->attributes['line'] = $x131->attributes['column'] = 0; }
throw new JSException($x131, 43, 14, '<image>/12_json.js');
}
$x126 = clone JS::$objectTemplate;
unset($x132, $W132, $S132, $U132);
$x133 = _bc1c8d1b4999a51b0c5a2af7dab185f1_3($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 43, 10, '<image>/12_json.js');
$x132 =& $x133[0]; list(,$W132,$S132,$U132) = $x133;
$x127 = $x132;
$x126->prototype = $x127;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x136 = _bc1c8d1b4999a51b0c5a2af7dab185f1_4($global, $scope, $scope, JS::toString('TypeError', $global), 43, 10, '<image>/12_json.js');
$_TypeError =& $x136[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x136;
$x137 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x138 = $x137($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/12_json.js';$x138->properties['line'] = 43;$x138->properties['column'] = 10;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 43, 10, '<image>/12_json.js');
}
$x134 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/12_json.js', 43, 10);
$x135 = $x134($global, $x126, $_NotImplementedError, array('JSON.stringify(): replacer and space arguments not supported.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x127 = $x135;
if (is_object($x127) && $x127 !== JS::$undefined) { $x126 = $x127; }
if (isset($x126->class) && $x126->class === 'Error' && !isset($x126->properties['file']) && !isset($x126->properties['line']) && !isset($x126->properties['column'])) {$x126->properties['file'] = '<image>/12_json.js';$x126->properties['line'] = 43;$x126->properties['column'] = 4;$x126->attributes['file'] = $x126->attributes['line'] = $x126->attributes['column'] = 0; }
throw new JSException($x126, 43, 4, '<image>/12_json.js');;
};
return str_replace("\\/", "/", json_encode(JS::toNative($_value)));
;
return JS::$undefined;
}
echo 'function _bc1c8d1b4999a51b0c5a2af7dab185f1_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x114=&$scope->properties[\'arguments\'];$x114->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x114->properties[$i]=$args[$i];$x114->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'replacer\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replacer=&$scope->properties[\'replacer\'];$Ureplacer=FALSE;$scope->properties[\'space\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_space=&$scope->properties[\'space\'];$Uspace=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x118=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'arguments\',$global),42,7,\'<image>/12_json.js\');$_arguments=&$x118[0];list(,$Warguments,$Sarguments,$Uarguments)=$x118;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x119=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),42,7,\'<image>/12_json.js\');$_ReferenceError=&$x119[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x119;$x120=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',42,7);$x121=$x120($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x121->class)&&$x121->class===\'Error\'&&!isset($x121->properties[\'file\'])&&!isset($x121->properties[\'line\'])&&!isset($x121->properties[\'column\'])){$x121->properties[\'file\']=\'<image>/12_json.js\';$x121->properties[\'line\']=42;$x121->properties[\'column\']=7;$x121->attributes[\'file\']=$x121->attributes[\'line\']=$x121->attributes[\'column\']=0;}throw new JSException($x121,42,7,\'<image>/12_json.js\');}unset($x122,$W122,$S122,$U122);$x123=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_arguments,JS::toString(\'length\',$global),42,16,\'<image>/12_json.js\');$x122=&$x123[0];list(,$W122,$S122,$U122)=$x123;$x115=JS::toPrimitive($x122,$global);$x116=JS::toPrimitive(1,$global);$x117=(is_string($x116)&&is_string($x115)?strcmp($x116,$x115)<0:(!is_nan($x124=JS::toNumber($x116,$global))&&!is_nan($x125=JS::toNumber($x115,$global))&&$x124<$x125));if(JS::toBoolean($x117,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x128=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),43,14,\'<image>/12_json.js\');$_NotImplementedError=&$x128[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x128;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x129=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),43,14,\'<image>/12_json.js\');$_ReferenceError=&$x129[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x129;$x130=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,14);$x131=$x130($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x131->class)&&$x131->class===\'Error\'&&!isset($x131->properties[\'file\'])&&!isset($x131->properties[\'line\'])&&!isset($x131->properties[\'column\'])){$x131->properties[\'file\']=\'<image>/12_json.js\';$x131->properties[\'line\']=43;$x131->properties[\'column\']=14;$x131->attributes[\'file\']=$x131->attributes[\'line\']=$x131->attributes[\'column\']=0;}throw new JSException($x131,43,14,\'<image>/12_json.js\');}$x126=clone JS::$objectTemplate;unset($x132,$W132,$S132,$U132);$x133=_bc1c8d1b4999a51b0c5a2af7dab185f1_3($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),43,10,\'<image>/12_json.js\');$x132=&$x133[0];list(,$W132,$S132,$U132)=$x133;$x127=$x132;$x126->prototype=$x127;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x136=_bc1c8d1b4999a51b0c5a2af7dab185f1_4($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,10,\'<image>/12_json.js\');$_TypeError=&$x136[0];list(,$WTypeError,$STypeError,$UTypeError)=$x136;$x137=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x138=$x137($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x138->class)&&$x138->class===\'Error\'&&!isset($x138->properties[\'file\'])&&!isset($x138->properties[\'line\'])&&!isset($x138->properties[\'column\'])){$x138->properties[\'file\']=\'<image>/12_json.js\';$x138->properties[\'line\']=43;$x138->properties[\'column\']=10;$x138->attributes[\'file\']=$x138->attributes[\'line\']=$x138->attributes[\'column\']=0;}throw new JSException($x138,43,10,\'<image>/12_json.js\');}$x134=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/12_json.js\',43,10);$x135=$x134($global,$x126,$_NotImplementedError,array(\'JSON.stringify(): replacer and space arguments not supported.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x127=$x135;if(is_object($x127)&&$x127!==JS::$undefined){$x126=$x127;}if(isset($x126->class)&&$x126->class===\'Error\'&&!isset($x126->properties[\'file\'])&&!isset($x126->properties[\'line\'])&&!isset($x126->properties[\'column\'])){$x126->properties[\'file\']=\'<image>/12_json.js\';$x126->properties[\'line\']=43;$x126->properties[\'column\']=4;$x126->attributes[\'file\']=$x126->attributes[\'line\']=$x126->attributes[\'column\']=0;}throw new JSException($x126,43,4,\'<image>/12_json.js\');}return str_replace("\\\\/","/",json_encode(JS::toNative($_value)));return JS::$undefined;}', "\n";
function _bc1c8d1b4999a51b0c5a2af7dab185f1_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/12_json.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/12_json.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x112 = clone JS::$functionTemplate; $x112->call = '_bc1c8d1b4999a51b0c5a2af7dab185f1_1'; $x112->parameters = array (
  0 => 'text',
  1 => 'reviver',
); $x112->scope = $scope; $x112->properties['prototype'] = clone JS::$objectTemplate; $x112->attributes['prototype'] = JS::WRITABLE; $x112->properties['prototype']->properties['constructor'] = $x112; $x112->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x112->properties['length'] = 2; $x112->attributes['length'] = 0;
$x0->properties['parse'] = $x112;
$x0->attributes['parse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x139 = clone JS::$functionTemplate; $x139->call = '_bc1c8d1b4999a51b0c5a2af7dab185f1_6'; $x139->parameters = array (
  0 => 'value',
  1 => 'replacer',
  2 => 'space',
); $x139->scope = $scope; $x139->properties['prototype'] = clone JS::$objectTemplate; $x139->attributes['prototype'] = JS::WRITABLE; $x139->properties['prototype']->properties['constructor'] = $x139; $x139->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x139->properties['length'] = 3; $x139->attributes['length'] = 0;
$x0->properties['stringify'] = $x139;
$x0->attributes['stringify'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['JSON'] = JS::$undefined; $_JSON =& $scope->properties['JSON'];
$UJSON = FALSE;
$_JSON = $x0;
$_JSON->class = 'JSON';
;
return JS::$undefined;
}
