function _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x3 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x4 = $x3($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x4; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x3=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x4=$x3($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x4;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x9 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x9[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x9;
$x10 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x11 = $x10($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x11->class) && $x11->class === 'Error') {$x11->properties['file'] = $file;$x11->properties['line'] = $line;$x11->properties['column'] = $column;$x11->attributes['file'] = $x11->attributes['line'] = $x11->attributes['column'] = 0; }
throw new JSException($x11, $line, $column, $file);
}
$W8 = $S8 = $U8 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x8 =& $lookup->properties[$id]; $W8 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S8 = $lookup->setters[$id]; }
else { $x8 = JS::$undefined; $U8 = TRUE; }
return array(&$x8, $W8, $S8, $U8);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x9=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x9[0];list(,$WTypeError,$STypeError,$UTypeError)=$x9;$x10=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x11=$x10($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x11->class)&&$x11->class===\'Error\'){$x11->properties[\'file\']=$file;$x11->properties[\'line\']=$line;$x11->properties[\'column\']=$column;$x11->attributes[\'file\']=$x11->attributes[\'line\']=$x11->attributes[\'column\']=0;}throw new JSException($x11,$line,$column,$file);}$W8=$S8=$U8=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x8=&$lookup->properties[$id];$W8=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S8=$lookup->setters[$id];}else{$x8=JS::$undefined;$U8=TRUE;}return array(&$x8,$W8,$S8,$U8);}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x23 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x23[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x23;
$x24 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x25 = $x24($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x25->class) && $x25->class === 'Error') {$x25->properties['file'] = $file;$x25->properties['line'] = $line;$x25->properties['column'] = $column;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
throw new JSException($x25, $line, $column, $file);
}
$W22 = $S22 = $U22 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x22 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x26 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x27 = $x26($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x22 = $x27; }
else { $x22 = JS::$undefined; $U22 = TRUE; }
return array(&$x22, $W22, $S22, $U22);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x23=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x23[0];list(,$WTypeError,$STypeError,$UTypeError)=$x23;$x24=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x25=$x24($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'){$x25->properties[\'file\']=$file;$x25->properties[\'line\']=$line;$x25->properties[\'column\']=$column;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,$line,$column,$file);}$W22=$S22=$U22=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x22=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x26=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x27=$x26($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x22=$x27;}else{$x22=JS::$undefined;$U22=TRUE;}return array(&$x22,$W22,$S22,$U22);}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['Array'] = $fn;
$_Array =& $scope->properties['Array'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = clone JS::$objectTemplate;
$scope->properties['array'] = JS::$undefined; $_array =& $scope->properties['array'];
$Uarray = FALSE;
$_array = $x2;
$_array->prototype =$_Array->properties['prototype'];
$_array->class = 'Array';
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x5 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 7, 15, '<image>/04_array.js');
$_TypeError =& $x5[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x5;
$x6 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 7, 15);
$x7 = $x6($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x7->class) && $x7->class === 'Error') {$x7->properties['file'] = '<image>/04_array.js';$x7->properties['line'] = 7;$x7->properties['column'] = 15;$x7->attributes['file'] = $x7->attributes['line'] = $x7->attributes['column'] = 0; }
throw new JSException($x7, 7, 15, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x8, $W8, $S8, $U8);
$x12 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, (string) 'length', 7, 15, '<image>/04_array.js');
$x8 =& $x12[0]; list(,$W8,$S8,$U8) = $x12;
if ($U8 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties['length'] = $x8; $x8 =& $_array->properties['length']; $_array->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U8 = FALSE; $W8 = TRUE; }
if (isset($S8)) {
$x14 = $S8->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 7, 15);
$x15 = $x14($global, $_array, $S8, array(0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x13 = $x15;
} else {
if (!$U8) {$x13 = 0;if ($W8) { $x8 = 0; }  }
else { $x13 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; };
$_array->attributes['length'] = JS::WRITABLE;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x18 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 11, 6, '<image>/04_array.js');
$_arguments =& $x18[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x18;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x19 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 11, 6, '<image>/04_array.js');
$_ReferenceError =& $x19[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x19;
$x20 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 11, 6);
$x21 = $x20($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x21->class) && $x21->class === 'Error') {$x21->properties['file'] = '<image>/04_array.js';$x21->properties['line'] = 11;$x21->properties['column'] = 6;$x21->attributes['file'] = $x21->attributes['line'] = $x21->attributes['column'] = 0; }
throw new JSException($x21, 11, 6, '<image>/04_array.js');
}
unset($x22, $W22, $S22, $U22);
$x28 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 11, 15, '<image>/04_array.js');
$x22 =& $x28[0]; list(,$W22,$S22,$U22) = $x28;
$x17 = (((gettype($x22) === gettype(1) && $x22 === 1))|| (((is_float($x22) || is_int($x22)) && (is_float(1) || is_int(1))) && $x22 == 1));
$x16 = $x17;
if (JS::toBoolean($x16, $global)) {
unset($x30, $W30, $S30, $U30);
$x31 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 0, 11, 48, '<image>/04_array.js');
$x30 =& $x31[0]; list(,$W30,$S30,$U30) = $x31;
$x32 = $x30;
$x32 = ($x32 === JS::$undefined ? 'undefined' : (is_int($x32) || is_float($x32) ? 'number' : (is_bool($x32) ? 'boolean' : (is_string($x32) ? 'string' : (is_object($x32) && isset($x32->call) ? 'function' : 'object')))));
$x29 = (((gettype($x32) === gettype('number') && $x32 === 'number'))|| (((is_float($x32) || is_int($x32)) && (is_float('number') || is_int('number'))) && $x32 == 'number'));
$x16 = $x29; }
if (JS::toBoolean($x16, $global)) {
unset($x33, $W33, $S33, $U33);
$x34 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 0, 12, 22, '<image>/04_array.js');
$x33 =& $x34[0]; list(,$W33,$S33,$U33) = $x34;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x33;
if (JS::toBoolean((((string) intval($_len)) !== ((string)$_len)) ||$_len< 0, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x37 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'RangeError', 15, 14, '<image>/04_array.js');
$_RangeError =& $x37[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x37;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x38 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 15, 14, '<image>/04_array.js');
$_ReferenceError =& $x38[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x38;
$x39 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 14);
$x40 = $x39($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x40->class) && $x40->class === 'Error') {$x40->properties['file'] = '<image>/04_array.js';$x40->properties['line'] = 15;$x40->properties['column'] = 14;$x40->attributes['file'] = $x40->attributes['line'] = $x40->attributes['column'] = 0; }
throw new JSException($x40, 15, 14, '<image>/04_array.js');
}
$x35 = clone JS::$objectTemplate;
unset($x41, $W41, $S41, $U41);
$x42 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_RangeError, (string) 'prototype', 15, 10, '<image>/04_array.js');
$x41 =& $x42[0]; list(,$W41,$S41,$U41) = $x42;
$x36 = $x41;
$x35->prototype = $x36;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x45 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 15, 10, '<image>/04_array.js');
$_TypeError =& $x45[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x45;
$x46 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x47 = $x46($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x47->class) && $x47->class === 'Error') {$x47->properties['file'] = '<image>/04_array.js';$x47->properties['line'] = 15;$x47->properties['column'] = 10;$x47->attributes['file'] = $x47->attributes['line'] = $x47->attributes['column'] = 0; }
throw new JSException($x47, 15, 10, '<image>/04_array.js');
}
$x43 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x44 = $x43($global, $x35, $_RangeError, array('Array(): Given array length is not legal.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x36 = $x44;
if (is_object($x36) && $x36 !== JS::$undefined) { $x35 = $x36; }
if (isset($x35->class) && $x35->class === 'Error') {$x35->properties['file'] = '<image>/04_array.js';$x35->properties['line'] = 15;$x35->properties['column'] = 4;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 15, 4, '<image>/04_array.js');;
};
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x48 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 18, 16, '<image>/04_array.js');
$_TypeError =& $x48[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x48;
$x49 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x50 = $x49($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x50->class) && $x50->class === 'Error') {$x50->properties['file'] = '<image>/04_array.js';$x50->properties['line'] = 18;$x50->properties['column'] = 16;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
throw new JSException($x50, 18, 16, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x51, $W51, $S51, $U51);
$x52 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, (string) 'length', 18, 16, '<image>/04_array.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if ($U51 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties['length'] = $x51; $x51 =& $_array->properties['length']; $_array->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U51 = FALSE; $W51 = TRUE; }
if (isset($S51)) {
$x54 = $S51->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x55 = $x54($global, $_array, $S51, array($_len), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x53 = $x55;
} else {
if (!$U51) {$x53 = $_len;if ($W51) { $x51 = $_len; }  }
else { $x53 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; };
return $_array;;
};
for ($x56 = 0;; ++$x56) {
if ($x56 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x57, $W57, $S57, $U57);
$x58 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 23, 31, '<image>/04_array.js');
$x57 =& $x58[0]; list(,$W57,$S57,$U57) = $x58;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x57;
}
if ($x56 !== 0) {
$x59 = ++$_i;
}
$x60 = JS::toPrimitive($_i, $global);
$x61 = JS::toPrimitive($_l, $global);
$x62 = (is_string($x60) && is_string($x61) ? strcmp($x60, $x61) < 0 : (!is_nan($x63 = JS::toNumber($x60, $global)) && !is_nan($x64 = JS::toNumber($x61, $global)) && $x63 < $x64));
if (!JS::toBoolean($x62, $global)) { break; }

unset($x65, $W65, $S65, $U65);
$x66 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 24, 23, '<image>/04_array.js');
$x65 =& $x66[0]; list(,$W65,$S65,$U65) = $x66;
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x67 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 24, 12, '<image>/04_array.js');
$_TypeError =& $x67[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x67;
$x68 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x69 = $x68($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x69->class) && $x69->class === 'Error') {$x69->properties['file'] = '<image>/04_array.js';$x69->properties['line'] = 24;$x69->properties['column'] = 12;$x69->attributes['file'] = $x69->attributes['line'] = $x69->attributes['column'] = 0; }
throw new JSException($x69, 24, 12, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x70, $W70, $S70, $U70);
$x71 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, (string) $_i, 24, 12, '<image>/04_array.js');
$x70 =& $x71[0]; list(,$W70,$S70,$U70) = $x71;
if ($U70 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties[$_i] = $x70; $x70 =& $_array->properties[$_i]; $_array->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U70 = FALSE; $W70 = TRUE; }
if (isset($S70)) {
$x73 = $S70->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x74 = $x73($global, $_array, $S70, array($x65), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x72 = $x74;
} else {
if (!$U70) {$x72 = $x65;if ($W70) { $x70 = $x65; }  }
else { $x72 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int($_i) && $_i >= $_array->properties['length']) { $_array->properties['length'] = $_i + 1; };
};
return $_array;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Array\']=$fn;$_Array=&$scope->properties[\'Array\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'array\']=JS::$undefined;$_array=&$scope->properties[\'array\'];$Uarray=FALSE;$_array=$x2;$_array->prototype=$_Array->properties[\'prototype\'];$_array->class=\'Array\';if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x5=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',7,15,\'<image>/04_array.js\');$_TypeError=&$x5[0];list(,$WTypeError,$STypeError,$UTypeError)=$x5;$x6=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x7=$x6($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x7->class)&&$x7->class===\'Error\'){$x7->properties[\'file\']=\'<image>/04_array.js\';$x7->properties[\'line\']=7;$x7->properties[\'column\']=15;$x7->attributes[\'file\']=$x7->attributes[\'line\']=$x7->attributes[\'column\']=0;}throw new JSException($x7,7,15,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x8,$W8,$S8,$U8);$x12=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,(string)\'length\',7,15,\'<image>/04_array.js\');$x8=&$x12[0];list(,$W8,$S8,$U8)=$x12;if($U8&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[\'length\']=$x8;$x8=&$_array->properties[\'length\'];$_array->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U8=FALSE;$W8=TRUE;}if(isset($S8)){$x14=$S8->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x15=$x14($global,$_array,$S8,array(0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x13=$x15;}else{if(!$U8){$x13=0;if($W8){$x8=0;}}else{$x13=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}$_array->attributes[\'length\']=JS::WRITABLE;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x18=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',11,6,\'<image>/04_array.js\');$_arguments=&$x18[0];list(,$Warguments,$Sarguments,$Uarguments)=$x18;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x19=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',11,6,\'<image>/04_array.js\');$_ReferenceError=&$x19[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x19;$x20=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',11,6);$x21=$x20($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x21->class)&&$x21->class===\'Error\'){$x21->properties[\'file\']=\'<image>/04_array.js\';$x21->properties[\'line\']=11;$x21->properties[\'column\']=6;$x21->attributes[\'file\']=$x21->attributes[\'line\']=$x21->attributes[\'column\']=0;}throw new JSException($x21,11,6,\'<image>/04_array.js\');}unset($x22,$W22,$S22,$U22);$x28=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',11,15,\'<image>/04_array.js\');$x22=&$x28[0];list(,$W22,$S22,$U22)=$x28;$x17=(((gettype($x22)===gettype(1)&&$x22===1))||(((is_float($x22)||is_int($x22))&&(is_float(1)||is_int(1)))&&$x22==1));$x16=$x17;if(JS::toBoolean($x16,$global)){unset($x30,$W30,$S30,$U30);$x31=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)0,11,48,\'<image>/04_array.js\');$x30=&$x31[0];list(,$W30,$S30,$U30)=$x31;$x32=$x30;$x32=($x32===JS::$undefined?\'undefined\':(is_int($x32)||is_float($x32)?\'number\':(is_bool($x32)?\'boolean\':(is_string($x32)?\'string\':(is_object($x32)&&isset($x32->call)?\'function\':\'object\')))));$x29=(((gettype($x32)===gettype(\'number\')&&$x32===\'number\'))||(((is_float($x32)||is_int($x32))&&(is_float(\'number\')||is_int(\'number\')))&&$x32==\'number\'));$x16=$x29;}if(JS::toBoolean($x16,$global)){unset($x33,$W33,$S33,$U33);$x34=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)0,12,22,\'<image>/04_array.js\');$x33=&$x34[0];list(,$W33,$S33,$U33)=$x34;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x33;if(JS::toBoolean((((string)intval($_len))!==((string)$_len))||$_len<0,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x37=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'RangeError\',15,14,\'<image>/04_array.js\');$_RangeError=&$x37[0];list(,$WRangeError,$SRangeError,$URangeError)=$x37;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x38=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',15,14,\'<image>/04_array.js\');$_ReferenceError=&$x38[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x38;$x39=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,14);$x40=$x39($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x40->class)&&$x40->class===\'Error\'){$x40->properties[\'file\']=\'<image>/04_array.js\';$x40->properties[\'line\']=15;$x40->properties[\'column\']=14;$x40->attributes[\'file\']=$x40->attributes[\'line\']=$x40->attributes[\'column\']=0;}throw new JSException($x40,15,14,\'<image>/04_array.js\');}$x35=clone JS::$objectTemplate;unset($x41,$W41,$S41,$U41);$x42=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_RangeError,(string)\'prototype\',15,10,\'<image>/04_array.js\');$x41=&$x42[0];list(,$W41,$S41,$U41)=$x42;$x36=$x41;$x35->prototype=$x36;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x45=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',15,10,\'<image>/04_array.js\');$_TypeError=&$x45[0];list(,$WTypeError,$STypeError,$UTypeError)=$x45;$x46=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x47=$x46($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x47->class)&&$x47->class===\'Error\'){$x47->properties[\'file\']=\'<image>/04_array.js\';$x47->properties[\'line\']=15;$x47->properties[\'column\']=10;$x47->attributes[\'file\']=$x47->attributes[\'line\']=$x47->attributes[\'column\']=0;}throw new JSException($x47,15,10,\'<image>/04_array.js\');}$x43=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x44=$x43($global,$x35,$_RangeError,array(\'Array(): Given array length is not legal.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x36=$x44;if(is_object($x36)&&$x36!==JS::$undefined){$x35=$x36;}if(isset($x35->class)&&$x35->class===\'Error\'){$x35->properties[\'file\']=\'<image>/04_array.js\';$x35->properties[\'line\']=15;$x35->properties[\'column\']=4;$x35->attributes[\'file\']=$x35->attributes[\'line\']=$x35->attributes[\'column\']=0;}throw new JSException($x35,15,4,\'<image>/04_array.js\');}if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x48=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',18,16,\'<image>/04_array.js\');$_TypeError=&$x48[0];list(,$WTypeError,$STypeError,$UTypeError)=$x48;$x49=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x50=$x49($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x50->class)&&$x50->class===\'Error\'){$x50->properties[\'file\']=\'<image>/04_array.js\';$x50->properties[\'line\']=18;$x50->properties[\'column\']=16;$x50->attributes[\'file\']=$x50->attributes[\'line\']=$x50->attributes[\'column\']=0;}throw new JSException($x50,18,16,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x51,$W51,$S51,$U51);$x52=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,(string)\'length\',18,16,\'<image>/04_array.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;if($U51&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[\'length\']=$x51;$x51=&$_array->properties[\'length\'];$_array->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U51=FALSE;$W51=TRUE;}if(isset($S51)){$x54=$S51->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x55=$x54($global,$_array,$S51,array($_len),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x53=$x55;}else{if(!$U51){$x53=$_len;if($W51){$x51=$_len;}}else{$x53=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}return$_array;}for($x56=0;;++$x56){if($x56===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x57,$W57,$S57,$U57);$x58=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',23,31,\'<image>/04_array.js\');$x57=&$x58[0];list(,$W57,$S57,$U57)=$x58;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x57;}if($x56!==0){$x59=++$_i;}$x60=JS::toPrimitive($_i,$global);$x61=JS::toPrimitive($_l,$global);$x62=(is_string($x60)&&is_string($x61)?strcmp($x60,$x61)<0:(!is_nan($x63=JS::toNumber($x60,$global))&&!is_nan($x64=JS::toNumber($x61,$global))&&$x63<$x64));if(!JS::toBoolean($x62,$global)){break;}unset($x65,$W65,$S65,$U65);$x66=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,24,23,\'<image>/04_array.js\');$x65=&$x66[0];list(,$W65,$S65,$U65)=$x66;if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x67=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',24,12,\'<image>/04_array.js\');$_TypeError=&$x67[0];list(,$WTypeError,$STypeError,$UTypeError)=$x67;$x68=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x69=$x68($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x69->class)&&$x69->class===\'Error\'){$x69->properties[\'file\']=\'<image>/04_array.js\';$x69->properties[\'line\']=24;$x69->properties[\'column\']=12;$x69->attributes[\'file\']=$x69->attributes[\'line\']=$x69->attributes[\'column\']=0;}throw new JSException($x69,24,12,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x70,$W70,$S70,$U70);$x71=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,(string)$_i,24,12,\'<image>/04_array.js\');$x70=&$x71[0];list(,$W70,$S70,$U70)=$x71;if($U70&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$_i]=$x70;$x70=&$_array->properties[$_i];$_array->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U70=FALSE;$W70=TRUE;}if(isset($S70)){$x73=$S70->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x74=$x73($global,$_array,$S70,array($x65),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x72=$x74;}else{if(!$U70){$x72=$x65;if($W70){$x70=$x65;}}else{$x72=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int($_i)&&$_i>=$_array->properties[\'length\']){$_array->properties[\'length\']=$_i+1;}}return$_array;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x77 =& $scope->properties['arguments'];
$x77->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x77->properties[$i] = $args[$i];
$x77->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['arg'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x79 = (((gettype($_arg) === gettype(NULL) && $_arg === NULL))|| (((is_float($_arg) || is_int($_arg)) && (is_float(NULL) || is_int(NULL))) && $_arg == NULL));
$x78 = $x79;
if (!JS::toBoolean($x78, $global)) {
$x81 = $_arg;
$x81 = ($x81 === JS::$undefined ? 'undefined' : (is_int($x81) || is_float($x81) ? 'number' : (is_bool($x81) ? 'boolean' : (is_string($x81) ? 'string' : (is_object($x81) && isset($x81->call) ? 'function' : 'object')))));
$x80 = !(((gettype($x81) === gettype('object') && $x81 === 'object'))|| (((is_float($x81) || is_int($x81)) && (is_float('object') || is_int('object'))) && $x81 == 'object'));
$x78 = $x80; }
if (JS::toBoolean($x78, $global)) {

return false;;
};
return isset($_arg->class) &&$_arg->class === 'Array';
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x77=&$scope->properties[\'arguments\'];$x77->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x77->properties[$i]=$args[$i];$x77->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'arg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$global->scope[++$global->scope_sp]=$scope;$x79=(((gettype($_arg)===gettype(NULL)&&$_arg===NULL))||(((is_float($_arg)||is_int($_arg))&&(is_float(NULL)||is_int(NULL)))&&$_arg==NULL));$x78=$x79;if(!JS::toBoolean($x78,$global)){$x81=$_arg;$x81=($x81===JS::$undefined?\'undefined\':(is_int($x81)||is_float($x81)?\'number\':(is_bool($x81)?\'boolean\':(is_string($x81)?\'string\':(is_object($x81)&&isset($x81->call)?\'function\':\'object\')))));$x80=!(((gettype($x81)===gettype(\'object\')&&$x81===\'object\'))||(((is_float($x81)||is_int($x81))&&(is_float(\'object\')||is_int(\'object\')))&&$x81==\'object\'));$x78=$x80;}if(JS::toBoolean($x78,$global)){return false;}return isset($_arg->class)&&$_arg->class===\'Array\';return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x125 =& $scope->properties['arguments'];
$x125->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x125->properties[$i] = $args[$i];
$x125->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x127 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 47, 18, '<image>/04_array.js');
$_TypeError =& $x127[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x127;
$x128 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x129 = $x128($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x129->class) && $x129->class === 'Error') {$x129->properties['file'] = '<image>/04_array.js';$x129->properties['line'] = 47;$x129->properties['column'] = 18;$x129->attributes['file'] = $x129->attributes['line'] = $x129->attributes['column'] = 0; }
throw new JSException($x129, 47, 18, '<image>/04_array.js');
}
$x126 = JS::toObject($leThis, $global);
unset($x130, $W130, $S130, $U130);
$x131 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x126, (string) 'join', 47, 18, '<image>/04_array.js');
$x130 =& $x131[0]; list(,$W130,$S130,$U130) = $x131;
if (!(is_object($x130) && isset($x130->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x134 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 47, 18, '<image>/04_array.js');
$_TypeError =& $x134[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x134;
$x135 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x136 = $x135($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x136->class) && $x136->class === 'Error') {$x136->properties['file'] = '<image>/04_array.js';$x136->properties['line'] = 47;$x136->properties['column'] = 18;$x136->attributes['file'] = $x136->attributes['line'] = $x136->attributes['column'] = 0; }
throw new JSException($x136, 47, 18, '<image>/04_array.js');
}
$x132 = $x130->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x133 = $x132($global, $x126, $x130, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x133;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x125=&$scope->properties[\'arguments\'];$x125->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x125->properties[$i]=$args[$i];$x125->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x127=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',47,18,\'<image>/04_array.js\');$_TypeError=&$x127[0];list(,$WTypeError,$STypeError,$UTypeError)=$x127;$x128=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x129=$x128($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x129->class)&&$x129->class===\'Error\'){$x129->properties[\'file\']=\'<image>/04_array.js\';$x129->properties[\'line\']=47;$x129->properties[\'column\']=18;$x129->attributes[\'file\']=$x129->attributes[\'line\']=$x129->attributes[\'column\']=0;}throw new JSException($x129,47,18,\'<image>/04_array.js\');}$x126=JS::toObject($leThis,$global);unset($x130,$W130,$S130,$U130);$x131=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x126,(string)\'join\',47,18,\'<image>/04_array.js\');$x130=&$x131[0];list(,$W130,$S130,$U130)=$x131;if(!(is_object($x130)&&isset($x130->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x134=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',47,18,\'<image>/04_array.js\');$_TypeError=&$x134[0];list(,$WTypeError,$STypeError,$UTypeError)=$x134;$x135=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x136=$x135($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x136->class)&&$x136->class===\'Error\'){$x136->properties[\'file\']=\'<image>/04_array.js\';$x136->properties[\'line\']=47;$x136->properties[\'column\']=18;$x136->attributes[\'file\']=$x136->attributes[\'line\']=$x136->attributes[\'column\']=0;}throw new JSException($x136,47,18,\'<image>/04_array.js\');}$x132=$x130->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x133=$x132($global,$x126,$x130,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x133;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x163 =& $scope->properties['arguments'];
$x163->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x163->properties[$i] = $args[$i];
$x163->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x164 = clone JS::$arrayTemplate;
$x164->properties['length'] = 0;
$x164->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x164;
for ($x165 = 0;; ++$x165) {
if ($x165 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x166, $W166, $S166, $U166);
$x167 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 55, 26, '<image>/04_array.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x166;
}
if ($x165 !== 0) {
$x168 = ++$_i;
}
$x169 = JS::toPrimitive($_i, $global);
$x170 = JS::toPrimitive($_l, $global);
$x171 = (is_string($x169) && is_string($x170) ? strcmp($x169, $x170) < 0 : (!is_nan($x172 = JS::toNumber($x169, $global)) && !is_nan($x173 = JS::toNumber($x170, $global)) && $x172 < $x173));
if (!JS::toBoolean($x171, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x175 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 56, 16, '<image>/04_array.js');
$_TypeError =& $x175[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x175;
$x176 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x177 = $x176($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x177->class) && $x177->class === 'Error') {$x177->properties['file'] = '<image>/04_array.js';$x177->properties['line'] = 56;$x177->properties['column'] = 16;$x177->attributes['file'] = $x177->attributes['line'] = $x177->attributes['column'] = 0; }
throw new JSException($x177, 56, 16, '<image>/04_array.js');
}
$x174 = JS::toObject($_newArray, $global);
unset($x178, $W178, $S178, $U178);
$x179 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x174, (string) 'push', 56, 16, '<image>/04_array.js');
$x178 =& $x179[0]; list(,$W178,$S178,$U178) = $x179;
unset($x180, $W180, $S180, $U180);
$x181 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 56, 21, '<image>/04_array.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
if (!(is_object($x178) && isset($x178->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x184 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 56, 16, '<image>/04_array.js');
$_TypeError =& $x184[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x184;
$x185 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x186 = $x185($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x186->class) && $x186->class === 'Error') {$x186->properties['file'] = '<image>/04_array.js';$x186->properties['line'] = 56;$x186->properties['column'] = 16;$x186->attributes['file'] = $x186->attributes['line'] = $x186->attributes['column'] = 0; }
throw new JSException($x186, 56, 16, '<image>/04_array.js');
}
$x182 = $x178->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x183 = $x182($global, $x174, $x178, array($x180), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
for ($x187 = 0;; ++$x187) {
if ($x187 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x188 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 59, 22, '<image>/04_array.js');
$_arguments =& $x188[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x188;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x189 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 59, 22, '<image>/04_array.js');
$_ReferenceError =& $x189[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x189;
$x190 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 59, 22);
$x191 = $x190($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x191->class) && $x191->class === 'Error') {$x191->properties['file'] = '<image>/04_array.js';$x191->properties['line'] = 59;$x191->properties['column'] = 22;$x191->attributes['file'] = $x191->attributes['line'] = $x191->attributes['column'] = 0; }
throw new JSException($x191, 59, 22, '<image>/04_array.js');
}
unset($x192, $W192, $S192, $U192);
$x193 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 59, 31, '<image>/04_array.js');
$x192 =& $x193[0]; list(,$W192,$S192,$U192) = $x193;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x192;
}
if ($x187 !== 0) {
$x194 = ++$_i;
}
$x195 = JS::toPrimitive($_i, $global);
$x196 = JS::toPrimitive($_l, $global);
$x197 = (is_string($x195) && is_string($x196) ? strcmp($x195, $x196) < 0 : (!is_nan($x198 = JS::toNumber($x195, $global)) && !is_nan($x199 = JS::toNumber($x196, $global)) && $x198 < $x199));
if (!JS::toBoolean($x197, $global)) { break; }

unset($_Array, $WArray, $SArray, $UArray);
$x200 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Array', 60, 7, '<image>/04_array.js');
$_Array =& $x200[0]; list(,$WArray,$SArray,$UArray) = $x200;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x201 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 60, 7, '<image>/04_array.js');
$_ReferenceError =& $x201[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x201;
$x202 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 7);
$x203 = $x202($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x203->class) && $x203->class === 'Error') {$x203->properties['file'] = '<image>/04_array.js';$x203->properties['line'] = 60;$x203->properties['column'] = 7;$x203->attributes['file'] = $x203->attributes['line'] = $x203->attributes['column'] = 0; }
throw new JSException($x203, 60, 7, '<image>/04_array.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x205 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 60, 20, '<image>/04_array.js');
$_TypeError =& $x205[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x205;
$x206 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x207 = $x206($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x207->class) && $x207->class === 'Error') {$x207->properties['file'] = '<image>/04_array.js';$x207->properties['line'] = 60;$x207->properties['column'] = 20;$x207->attributes['file'] = $x207->attributes['line'] = $x207->attributes['column'] = 0; }
throw new JSException($x207, 60, 20, '<image>/04_array.js');
}
$x204 = JS::toObject($_Array, $global);
unset($x208, $W208, $S208, $U208);
$x209 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x204, (string) 'isArray', 60, 20, '<image>/04_array.js');
$x208 =& $x209[0]; list(,$W208,$S208,$U208) = $x209;
unset($x210, $W210, $S210, $U210);
$x211 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 60, 30, '<image>/04_array.js');
$x210 =& $x211[0]; list(,$W210,$S210,$U210) = $x211;
if (!(is_object($x208) && isset($x208->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x214 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 60, 20, '<image>/04_array.js');
$_TypeError =& $x214[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x214;
$x215 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x216 = $x215($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x216->class) && $x216->class === 'Error') {$x216->properties['file'] = '<image>/04_array.js';$x216->properties['line'] = 60;$x216->properties['column'] = 20;$x216->attributes['file'] = $x216->attributes['line'] = $x216->attributes['column'] = 0; }
throw new JSException($x216, 60, 20, '<image>/04_array.js');
}
$x212 = $x208->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x213 = $x212($global, $x204, $x208, array($x210), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x213, $global)) {
for ($x217 = 0;; ++$x217) {
if ($x217 === 0) {
$scope->properties['j'] = JS::$undefined; $_j =& $scope->properties['j'];
$Uj = FALSE;
$_j = 0;
unset($x218, $W218, $S218, $U218);
$x219 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 61, 33, '<image>/04_array.js');
$x218 =& $x219[0]; list(,$W218,$S218,$U218) = $x219;
unset($x220, $W220, $S220, $U220);
$x221 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x218, (string) 'length', 61, 36, '<image>/04_array.js');
$x220 =& $x221[0]; list(,$W220,$S220,$U220) = $x221;
$scope->properties['m'] = JS::$undefined; $_m =& $scope->properties['m'];
$Um = FALSE;
$_m = $x220;
}
if ($x217 !== 0) {
$x222 = ++$_j;
}
$x223 = JS::toPrimitive($_j, $global);
$x224 = JS::toPrimitive($_m, $global);
$x225 = (is_string($x223) && is_string($x224) ? strcmp($x223, $x224) < 0 : (!is_nan($x226 = JS::toNumber($x223, $global)) && !is_nan($x227 = JS::toNumber($x224, $global)) && $x226 < $x227));
if (!JS::toBoolean($x225, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x229 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 62, 18, '<image>/04_array.js');
$_TypeError =& $x229[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x229;
$x230 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x231 = $x230($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x231->class) && $x231->class === 'Error') {$x231->properties['file'] = '<image>/04_array.js';$x231->properties['line'] = 62;$x231->properties['column'] = 18;$x231->attributes['file'] = $x231->attributes['line'] = $x231->attributes['column'] = 0; }
throw new JSException($x231, 62, 18, '<image>/04_array.js');
}
$x228 = JS::toObject($_newArray, $global);
unset($x232, $W232, $S232, $U232);
$x233 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x228, (string) 'push', 62, 18, '<image>/04_array.js');
$x232 =& $x233[0]; list(,$W232,$S232,$U232) = $x233;
unset($x234, $W234, $S234, $U234);
$x235 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 62, 28, '<image>/04_array.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
unset($x236, $W236, $S236, $U236);
$x237 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x234, (string) $_j, 62, 31, '<image>/04_array.js');
$x236 =& $x237[0]; list(,$W236,$S236,$U236) = $x237;
if (!(is_object($x232) && isset($x232->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x240 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 62, 18, '<image>/04_array.js');
$_TypeError =& $x240[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x240;
$x241 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x242 = $x241($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x242->class) && $x242->class === 'Error') {$x242->properties['file'] = '<image>/04_array.js';$x242->properties['line'] = 62;$x242->properties['column'] = 18;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 62, 18, '<image>/04_array.js');
}
$x238 = $x232->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x239 = $x238($global, $x228, $x232, array($x236), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
}
else {
if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x244 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 66, 17, '<image>/04_array.js');
$_TypeError =& $x244[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x244;
$x245 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x246 = $x245($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x246->class) && $x246->class === 'Error') {$x246->properties['file'] = '<image>/04_array.js';$x246->properties['line'] = 66;$x246->properties['column'] = 17;$x246->attributes['file'] = $x246->attributes['line'] = $x246->attributes['column'] = 0; }
throw new JSException($x246, 66, 17, '<image>/04_array.js');
}
$x243 = JS::toObject($_newArray, $global);
unset($x247, $W247, $S247, $U247);
$x248 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x243, (string) 'push', 66, 17, '<image>/04_array.js');
$x247 =& $x248[0]; list(,$W247,$S247,$U247) = $x248;
unset($x249, $W249, $S249, $U249);
$x250 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 66, 27, '<image>/04_array.js');
$x249 =& $x250[0]; list(,$W249,$S249,$U249) = $x250;
if (!(is_object($x247) && isset($x247->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x253 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 66, 17, '<image>/04_array.js');
$_TypeError =& $x253[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x253;
$x254 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x255 = $x254($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x255->class) && $x255->class === 'Error') {$x255->properties['file'] = '<image>/04_array.js';$x255->properties['line'] = 66;$x255->properties['column'] = 17;$x255->attributes['file'] = $x255->attributes['line'] = $x255->attributes['column'] = 0; }
throw new JSException($x255, 66, 17, '<image>/04_array.js');
}
$x251 = $x247->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x252 = $x251($global, $x243, $x247, array($x249), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x163=&$scope->properties[\'arguments\'];$x163->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x163->properties[$i]=$args[$i];$x163->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$x164=clone JS::$arrayTemplate;$x164->properties[\'length\']=0;$x164->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x164;for($x165=0;;++$x165){if($x165===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x166,$W166,$S166,$U166);$x167=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',55,26,\'<image>/04_array.js\');$x166=&$x167[0];list(,$W166,$S166,$U166)=$x167;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x166;}if($x165!==0){$x168=++$_i;}$x169=JS::toPrimitive($_i,$global);$x170=JS::toPrimitive($_l,$global);$x171=(is_string($x169)&&is_string($x170)?strcmp($x169,$x170)<0:(!is_nan($x172=JS::toNumber($x169,$global))&&!is_nan($x173=JS::toNumber($x170,$global))&&$x172<$x173));if(!JS::toBoolean($x171,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x175=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',56,16,\'<image>/04_array.js\');$_TypeError=&$x175[0];list(,$WTypeError,$STypeError,$UTypeError)=$x175;$x176=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x177=$x176($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x177->class)&&$x177->class===\'Error\'){$x177->properties[\'file\']=\'<image>/04_array.js\';$x177->properties[\'line\']=56;$x177->properties[\'column\']=16;$x177->attributes[\'file\']=$x177->attributes[\'line\']=$x177->attributes[\'column\']=0;}throw new JSException($x177,56,16,\'<image>/04_array.js\');}$x174=JS::toObject($_newArray,$global);unset($x178,$W178,$S178,$U178);$x179=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x174,(string)\'push\',56,16,\'<image>/04_array.js\');$x178=&$x179[0];list(,$W178,$S178,$U178)=$x179;unset($x180,$W180,$S180,$U180);$x181=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,56,21,\'<image>/04_array.js\');$x180=&$x181[0];list(,$W180,$S180,$U180)=$x181;if(!(is_object($x178)&&isset($x178->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x184=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',56,16,\'<image>/04_array.js\');$_TypeError=&$x184[0];list(,$WTypeError,$STypeError,$UTypeError)=$x184;$x185=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x186=$x185($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x186->class)&&$x186->class===\'Error\'){$x186->properties[\'file\']=\'<image>/04_array.js\';$x186->properties[\'line\']=56;$x186->properties[\'column\']=16;$x186->attributes[\'file\']=$x186->attributes[\'line\']=$x186->attributes[\'column\']=0;}throw new JSException($x186,56,16,\'<image>/04_array.js\');}$x182=$x178->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x183=$x182($global,$x174,$x178,array($x180),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}for($x187=0;;++$x187){if($x187===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x188=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',59,22,\'<image>/04_array.js\');$_arguments=&$x188[0];list(,$Warguments,$Sarguments,$Uarguments)=$x188;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x189=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',59,22,\'<image>/04_array.js\');$_ReferenceError=&$x189[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x189;$x190=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',59,22);$x191=$x190($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x191->class)&&$x191->class===\'Error\'){$x191->properties[\'file\']=\'<image>/04_array.js\';$x191->properties[\'line\']=59;$x191->properties[\'column\']=22;$x191->attributes[\'file\']=$x191->attributes[\'line\']=$x191->attributes[\'column\']=0;}throw new JSException($x191,59,22,\'<image>/04_array.js\');}unset($x192,$W192,$S192,$U192);$x193=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',59,31,\'<image>/04_array.js\');$x192=&$x193[0];list(,$W192,$S192,$U192)=$x193;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x192;}if($x187!==0){$x194=++$_i;}$x195=JS::toPrimitive($_i,$global);$x196=JS::toPrimitive($_l,$global);$x197=(is_string($x195)&&is_string($x196)?strcmp($x195,$x196)<0:(!is_nan($x198=JS::toNumber($x195,$global))&&!is_nan($x199=JS::toNumber($x196,$global))&&$x198<$x199));if(!JS::toBoolean($x197,$global)){break;}unset($_Array,$WArray,$SArray,$UArray);$x200=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Array\',60,7,\'<image>/04_array.js\');$_Array=&$x200[0];list(,$WArray,$SArray,$UArray)=$x200;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x201=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',60,7,\'<image>/04_array.js\');$_ReferenceError=&$x201[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x201;$x202=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,7);$x203=$x202($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x203->class)&&$x203->class===\'Error\'){$x203->properties[\'file\']=\'<image>/04_array.js\';$x203->properties[\'line\']=60;$x203->properties[\'column\']=7;$x203->attributes[\'file\']=$x203->attributes[\'line\']=$x203->attributes[\'column\']=0;}throw new JSException($x203,60,7,\'<image>/04_array.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x205=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',60,20,\'<image>/04_array.js\');$_TypeError=&$x205[0];list(,$WTypeError,$STypeError,$UTypeError)=$x205;$x206=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x207=$x206($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x207->class)&&$x207->class===\'Error\'){$x207->properties[\'file\']=\'<image>/04_array.js\';$x207->properties[\'line\']=60;$x207->properties[\'column\']=20;$x207->attributes[\'file\']=$x207->attributes[\'line\']=$x207->attributes[\'column\']=0;}throw new JSException($x207,60,20,\'<image>/04_array.js\');}$x204=JS::toObject($_Array,$global);unset($x208,$W208,$S208,$U208);$x209=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x204,(string)\'isArray\',60,20,\'<image>/04_array.js\');$x208=&$x209[0];list(,$W208,$S208,$U208)=$x209;unset($x210,$W210,$S210,$U210);$x211=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,60,30,\'<image>/04_array.js\');$x210=&$x211[0];list(,$W210,$S210,$U210)=$x211;if(!(is_object($x208)&&isset($x208->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x214=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',60,20,\'<image>/04_array.js\');$_TypeError=&$x214[0];list(,$WTypeError,$STypeError,$UTypeError)=$x214;$x215=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x216=$x215($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x216->class)&&$x216->class===\'Error\'){$x216->properties[\'file\']=\'<image>/04_array.js\';$x216->properties[\'line\']=60;$x216->properties[\'column\']=20;$x216->attributes[\'file\']=$x216->attributes[\'line\']=$x216->attributes[\'column\']=0;}throw new JSException($x216,60,20,\'<image>/04_array.js\');}$x212=$x208->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x213=$x212($global,$x204,$x208,array($x210),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x213,$global)){for($x217=0;;++$x217){if($x217===0){$scope->properties[\'j\']=JS::$undefined;$_j=&$scope->properties[\'j\'];$Uj=FALSE;$_j=0;unset($x218,$W218,$S218,$U218);$x219=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,61,33,\'<image>/04_array.js\');$x218=&$x219[0];list(,$W218,$S218,$U218)=$x219;unset($x220,$W220,$S220,$U220);$x221=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x218,(string)\'length\',61,36,\'<image>/04_array.js\');$x220=&$x221[0];list(,$W220,$S220,$U220)=$x221;$scope->properties[\'m\']=JS::$undefined;$_m=&$scope->properties[\'m\'];$Um=FALSE;$_m=$x220;}if($x217!==0){$x222=++$_j;}$x223=JS::toPrimitive($_j,$global);$x224=JS::toPrimitive($_m,$global);$x225=(is_string($x223)&&is_string($x224)?strcmp($x223,$x224)<0:(!is_nan($x226=JS::toNumber($x223,$global))&&!is_nan($x227=JS::toNumber($x224,$global))&&$x226<$x227));if(!JS::toBoolean($x225,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x229=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',62,18,\'<image>/04_array.js\');$_TypeError=&$x229[0];list(,$WTypeError,$STypeError,$UTypeError)=$x229;$x230=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x231=$x230($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x231->class)&&$x231->class===\'Error\'){$x231->properties[\'file\']=\'<image>/04_array.js\';$x231->properties[\'line\']=62;$x231->properties[\'column\']=18;$x231->attributes[\'file\']=$x231->attributes[\'line\']=$x231->attributes[\'column\']=0;}throw new JSException($x231,62,18,\'<image>/04_array.js\');}$x228=JS::toObject($_newArray,$global);unset($x232,$W232,$S232,$U232);$x233=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x228,(string)\'push\',62,18,\'<image>/04_array.js\');$x232=&$x233[0];list(,$W232,$S232,$U232)=$x233;unset($x234,$W234,$S234,$U234);$x235=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,62,28,\'<image>/04_array.js\');$x234=&$x235[0];list(,$W234,$S234,$U234)=$x235;unset($x236,$W236,$S236,$U236);$x237=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x234,(string)$_j,62,31,\'<image>/04_array.js\');$x236=&$x237[0];list(,$W236,$S236,$U236)=$x237;if(!(is_object($x232)&&isset($x232->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x240=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',62,18,\'<image>/04_array.js\');$_TypeError=&$x240[0];list(,$WTypeError,$STypeError,$UTypeError)=$x240;$x241=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x242=$x241($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x242->class)&&$x242->class===\'Error\'){$x242->properties[\'file\']=\'<image>/04_array.js\';$x242->properties[\'line\']=62;$x242->properties[\'column\']=18;$x242->attributes[\'file\']=$x242->attributes[\'line\']=$x242->attributes[\'column\']=0;}throw new JSException($x242,62,18,\'<image>/04_array.js\');}$x238=$x232->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x239=$x238($global,$x228,$x232,array($x236),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}else{if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x244=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',66,17,\'<image>/04_array.js\');$_TypeError=&$x244[0];list(,$WTypeError,$STypeError,$UTypeError)=$x244;$x245=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x246=$x245($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x246->class)&&$x246->class===\'Error\'){$x246->properties[\'file\']=\'<image>/04_array.js\';$x246->properties[\'line\']=66;$x246->properties[\'column\']=17;$x246->attributes[\'file\']=$x246->attributes[\'line\']=$x246->attributes[\'column\']=0;}throw new JSException($x246,66,17,\'<image>/04_array.js\');}$x243=JS::toObject($_newArray,$global);unset($x247,$W247,$S247,$U247);$x248=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x243,(string)\'push\',66,17,\'<image>/04_array.js\');$x247=&$x248[0];list(,$W247,$S247,$U247)=$x248;unset($x249,$W249,$S249,$U249);$x250=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,66,27,\'<image>/04_array.js\');$x249=&$x250[0];list(,$W249,$S249,$U249)=$x250;if(!(is_object($x247)&&isset($x247->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x253=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',66,17,\'<image>/04_array.js\');$_TypeError=&$x253[0];list(,$WTypeError,$STypeError,$UTypeError)=$x253;$x254=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x255=$x254($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x255->class)&&$x255->class===\'Error\'){$x255->properties[\'file\']=\'<image>/04_array.js\';$x255->properties[\'line\']=66;$x255->properties[\'column\']=17;$x255->attributes[\'file\']=$x255->attributes[\'line\']=$x255->attributes[\'column\']=0;}throw new JSException($x255,66,17,\'<image>/04_array.js\');}$x251=$x247->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x252=$x251($global,$x243,$x247,array($x249),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x268 =& $scope->properties['arguments'];
$x268->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x268->properties[$i] = $args[$i];
$x268->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x269 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x269, $global)) {
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = ',';;
};
$scope->properties['string'] = JS::$undefined; $_string =& $scope->properties['string'];
$Ustring = FALSE;
$_string = '';
unset($x273, $W273, $S273, $U273);
$x274 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 80, 10, '<image>/04_array.js');
$x273 =& $x274[0]; list(,$W273,$S273,$U273) = $x274;
$x270 = JS::toPrimitive($x273, $global);
$x271 = JS::toPrimitive(1, $global);
$x272 = (is_string($x270) && is_string($x271) ? strcmp($x270, $x271) < 0 : (!is_nan($x275 = JS::toNumber($x270, $global)) && !is_nan($x276 = JS::toNumber($x271, $global)) && $x275 < $x276));
if (JS::toBoolean($x272, $global)) {

return '';;
};
for ($x277 = 0;; ++$x277) {
if ($x277 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x278, $W278, $S278, $U278);
$x279 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 84, 26, '<image>/04_array.js');
$x278 =& $x279[0]; list(,$W278,$S278,$U278) = $x279;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x278;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = JS::$undefined;
}
if ($x277 !== 0) {
$x280 = ++$_i;
}
$x281 = JS::toPrimitive($_i, $global);
$x282 = JS::toPrimitive($_l, $global);
$x283 = (is_string($x281) && is_string($x282) ? strcmp($x281, $x282) < 0 : (!is_nan($x284 = JS::toNumber($x281, $global)) && !is_nan($x285 = JS::toNumber($x282, $global)) && $x284 < $x285));
if (!JS::toBoolean($x283, $global)) { break; }

$x286 = !(((gettype($_i) === gettype(0) && $_i === 0))|| (((is_float($_i) || is_int($_i)) && (is_float(0) || is_int(0))) && $_i == 0));
if (JS::toBoolean($x286, $global)) {
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x287 = JS::toPrimitive($_string, $global);
$x288 = JS::toPrimitive($_separator, $global);
$_string = (is_string($x287) || is_string($x288) ? JS::toString($x287, $global) . JS::toString($x288, $global) : JS::toNumber($x287, $global) + JS::toNumber($x288, $global));;
};
unset($x289, $W289, $S289, $U289);
$x290 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 89, 14, '<image>/04_array.js');
$x289 =& $x290[0]; list(,$W289,$S289,$U289) = $x290;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x289;
$x292 = !(((gettype($_item) === gettype(JS::$undefined) && $_item === JS::$undefined))|| (((is_float($_item) || is_int($_item)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_item == JS::$undefined));
$x291 = $x292;
if (JS::toBoolean($x291, $global)) {
$x293 = !(((gettype($_item) === gettype(NULL) && $_item === NULL))|| (((is_float($_item) || is_int($_item)) && (is_float(NULL) || is_int(NULL))) && $_item == NULL));
$x291 = $x293; }
if (JS::toBoolean($x291, $global)) {
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x294 = JS::toPrimitive($_string, $global);
$x295 = JS::toPrimitive(JS::toString($_item, $global), $global);
$_string = (is_string($x294) || is_string($x295) ? JS::toString($x294, $global) . JS::toString($x295, $global) : JS::toNumber($x294, $global) + JS::toNumber($x295, $global));;
};;
};
return $_string;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x268=&$scope->properties[\'arguments\'];$x268->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x268->properties[$i]=$args[$i];$x268->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$global->scope[++$global->scope_sp]=$scope;$x269=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x269,$global)){if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=\',\';}$scope->properties[\'string\']=JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$_string=\'\';unset($x273,$W273,$S273,$U273);$x274=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',80,10,\'<image>/04_array.js\');$x273=&$x274[0];list(,$W273,$S273,$U273)=$x274;$x270=JS::toPrimitive($x273,$global);$x271=JS::toPrimitive(1,$global);$x272=(is_string($x270)&&is_string($x271)?strcmp($x270,$x271)<0:(!is_nan($x275=JS::toNumber($x270,$global))&&!is_nan($x276=JS::toNumber($x271,$global))&&$x275<$x276));if(JS::toBoolean($x272,$global)){return\'\';}for($x277=0;;++$x277){if($x277===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x278,$W278,$S278,$U278);$x279=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',84,26,\'<image>/04_array.js\');$x278=&$x279[0];list(,$W278,$S278,$U278)=$x279;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x278;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;}if($x277!==0){$x280=++$_i;}$x281=JS::toPrimitive($_i,$global);$x282=JS::toPrimitive($_l,$global);$x283=(is_string($x281)&&is_string($x282)?strcmp($x281,$x282)<0:(!is_nan($x284=JS::toNumber($x281,$global))&&!is_nan($x285=JS::toNumber($x282,$global))&&$x284<$x285));if(!JS::toBoolean($x283,$global)){break;}$x286=!(((gettype($_i)===gettype(0)&&$_i===0))||(((is_float($_i)||is_int($_i))&&(is_float(0)||is_int(0)))&&$_i==0));if(JS::toBoolean($x286,$global)){if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x287=JS::toPrimitive($_string,$global);$x288=JS::toPrimitive($_separator,$global);$_string=(is_string($x287)||is_string($x288)?JS::toString($x287,$global).JS::toString($x288,$global):JS::toNumber($x287,$global)+JS::toNumber($x288,$global));}unset($x289,$W289,$S289,$U289);$x290=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,89,14,\'<image>/04_array.js\');$x289=&$x290[0];list(,$W289,$S289,$U289)=$x290;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x289;$x292=!(((gettype($_item)===gettype(JS::$undefined)&&$_item===JS::$undefined))||(((is_float($_item)||is_int($_item))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_item==JS::$undefined));$x291=$x292;if(JS::toBoolean($x291,$global)){$x293=!(((gettype($_item)===gettype(NULL)&&$_item===NULL))||(((is_float($_item)||is_int($_item))&&(is_float(NULL)||is_int(NULL)))&&$_item==NULL));$x291=$x293;}if(JS::toBoolean($x291,$global)){if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x294=JS::toPrimitive($_string,$global);$x295=JS::toPrimitive(JS::toString($_item,$global),$global);$_string=(is_string($x294)||is_string($x295)?JS::toString($x294,$global).JS::toString($x295,$global):JS::toNumber($x294,$global)+JS::toNumber($x295,$global));}}return$_string;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x308 =& $scope->properties['arguments'];
$x308->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x308->properties[$i] = $args[$i];
$x308->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x312, $W312, $S312, $U312);
$x313 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 100, 10, '<image>/04_array.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
$x309 = JS::toPrimitive($x312, $global);
$x310 = JS::toPrimitive(1, $global);
$x311 = (is_string($x309) && is_string($x310) ? strcmp($x309, $x310) < 0 : (!is_nan($x314 = JS::toNumber($x309, $global)) && !is_nan($x315 = JS::toNumber($x310, $global)) && $x314 < $x315));
if (JS::toBoolean($x311, $global)) {

return JS::$undefined;;
};
unset($x316, $W316, $S316, $U316);
$x317 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 104, 22, '<image>/04_array.js');
$x316 =& $x317[0]; list(,$W316,$S316,$U316) = $x317;
unset($x318, $W318, $S318, $U318);
$x319 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) (JS::toNumber($x316, $global) - JS::toNumber(1, $global)), 104, 17, '<image>/04_array.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x318;
unset($x320, $W320, $S320, $U320);
$x321 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 104, 46, '<image>/04_array.js');
$x320 =& $x321[0]; list(,$W320,$S320,$U320) = $x321;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x320;
unset($x323, $W323, $S323, $U323);
$x324 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 105, 18, '<image>/04_array.js');
$x323 =& $x324[0]; list(,$W323,$S323,$U323) = $x324;
if (!array_key_exists((JS::toNumber($x323, $global) - JS::toNumber(1, $global)), $leThis->attributes)) { unset($leThis->properties[(JS::toNumber($x323, $global) - JS::toNumber(1, $global))]); $x322 = TRUE; }
else if ($leThis->attributes[(JS::toNumber($x323, $global) - JS::toNumber(1, $global))] & JS::CONFIGURABLE) { unset($leThis->properties[(JS::toNumber($x323, $global) - JS::toNumber(1, $global))], $leThis->attributes[(JS::toNumber($x323, $global) - JS::toNumber(1, $global))], $leThis->getters[(JS::toNumber($x323, $global) - JS::toNumber(1, $global))], $leThis->setters[(JS::toNumber($x323, $global) - JS::toNumber(1, $global))]); $x322 = TRUE; }
else { $x322 = FALSE; };
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x325 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 106, 14, '<image>/04_array.js');
$_TypeError =& $x325[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x325;
$x326 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x327 = $x326($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x327->class) && $x327->class === 'Error') {$x327->properties['file'] = '<image>/04_array.js';$x327->properties['line'] = 106;$x327->properties['column'] = 14;$x327->attributes['file'] = $x327->attributes['line'] = $x327->attributes['column'] = 0; }
throw new JSException($x327, 106, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x328, $W328, $S328, $U328);
$x329 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) 'length', 106, 14, '<image>/04_array.js');
$x328 =& $x329[0]; list(,$W328,$S328,$U328) = $x329;
if ($U328 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['length'] = $x328; $x328 =& $leThis->properties['length']; $leThis->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U328 = FALSE; $W328 = TRUE; }
if (isset($S328)) {
$x331 = $S328->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x332 = $x331($global, $leThis, $S328, array((JS::toNumber($_len, $global) - JS::toNumber(1, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x330 = $x332;
} else {
if (!$U328) {$x330 = (JS::toNumber($_len, $global) - JS::toNumber(1, $global));if ($W328) { $x328 = (JS::toNumber($_len, $global) - JS::toNumber(1, $global)); }  }
else { $x330 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x308=&$scope->properties[\'arguments\'];$x308->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x308->properties[$i]=$args[$i];$x308->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x312,$W312,$S312,$U312);$x313=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',100,10,\'<image>/04_array.js\');$x312=&$x313[0];list(,$W312,$S312,$U312)=$x313;$x309=JS::toPrimitive($x312,$global);$x310=JS::toPrimitive(1,$global);$x311=(is_string($x309)&&is_string($x310)?strcmp($x309,$x310)<0:(!is_nan($x314=JS::toNumber($x309,$global))&&!is_nan($x315=JS::toNumber($x310,$global))&&$x314<$x315));if(JS::toBoolean($x311,$global)){return JS::$undefined;}unset($x316,$W316,$S316,$U316);$x317=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',104,22,\'<image>/04_array.js\');$x316=&$x317[0];list(,$W316,$S316,$U316)=$x317;unset($x318,$W318,$S318,$U318);$x319=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)(JS::toNumber($x316,$global)-JS::toNumber(1,$global)),104,17,\'<image>/04_array.js\');$x318=&$x319[0];list(,$W318,$S318,$U318)=$x319;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x318;unset($x320,$W320,$S320,$U320);$x321=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',104,46,\'<image>/04_array.js\');$x320=&$x321[0];list(,$W320,$S320,$U320)=$x321;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x320;unset($x323,$W323,$S323,$U323);$x324=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',105,18,\'<image>/04_array.js\');$x323=&$x324[0];list(,$W323,$S323,$U323)=$x324;if(!array_key_exists((JS::toNumber($x323,$global)-JS::toNumber(1,$global)),$leThis->attributes)){unset($leThis->properties[(JS::toNumber($x323,$global)-JS::toNumber(1,$global))]);$x322=TRUE;}else if($leThis->attributes[(JS::toNumber($x323,$global)-JS::toNumber(1,$global))]&JS::CONFIGURABLE){unset($leThis->properties[(JS::toNumber($x323,$global)-JS::toNumber(1,$global))],$leThis->attributes[(JS::toNumber($x323,$global)-JS::toNumber(1,$global))],$leThis->getters[(JS::toNumber($x323,$global)-JS::toNumber(1,$global))],$leThis->setters[(JS::toNumber($x323,$global)-JS::toNumber(1,$global))]);$x322=TRUE;}else{$x322=FALSE;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x325=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',106,14,\'<image>/04_array.js\');$_TypeError=&$x325[0];list(,$WTypeError,$STypeError,$UTypeError)=$x325;$x326=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x327=$x326($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x327->class)&&$x327->class===\'Error\'){$x327->properties[\'file\']=\'<image>/04_array.js\';$x327->properties[\'line\']=106;$x327->properties[\'column\']=14;$x327->attributes[\'file\']=$x327->attributes[\'line\']=$x327->attributes[\'column\']=0;}throw new JSException($x327,106,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x328,$W328,$S328,$U328);$x329=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)\'length\',106,14,\'<image>/04_array.js\');$x328=&$x329[0];list(,$W328,$S328,$U328)=$x329;if($U328&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'length\']=$x328;$x328=&$leThis->properties[\'length\'];$leThis->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U328=FALSE;$W328=TRUE;}if(isset($S328)){$x331=$S328->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x332=$x331($global,$leThis,$S328,array((JS::toNumber($_len,$global)-JS::toNumber(1,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x330=$x332;}else{if(!$U328){$x330=(JS::toNumber($_len,$global)-JS::toNumber(1,$global));if($W328){$x328=(JS::toNumber($_len,$global)-JS::toNumber(1,$global));}}else{$x330=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x346 = 0;; ++$x346) {
if ($x346 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x345 =& $scope->properties['arguments'];
$x345->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x345->properties[$i] = $args[$i];
$x345->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x347 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 112, 22, '<image>/04_array.js');
$_arguments =& $x347[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x347;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x348 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 112, 22, '<image>/04_array.js');
$_ReferenceError =& $x348[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x348;
$x349 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 112, 22);
$x350 = $x349($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x350->class) && $x350->class === 'Error') {$x350->properties['file'] = '<image>/04_array.js';$x350->properties['line'] = 112;$x350->properties['column'] = 22;$x350->attributes['file'] = $x350->attributes['line'] = $x350->attributes['column'] = 0; }
throw new JSException($x350, 112, 22, '<image>/04_array.js');
}
unset($x351, $W351, $S351, $U351);
$x352 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 112, 31, '<image>/04_array.js');
$x351 =& $x352[0]; list(,$W351,$S351,$U351) = $x352;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x351;
}
if ($x346 !== 0) {
$x353 = ++$_i;
}
$x354 = JS::toPrimitive($_i, $global);
$x355 = JS::toPrimitive($_l, $global);
$x356 = (is_string($x354) && is_string($x355) ? strcmp($x354, $x355) < 0 : (!is_nan($x357 = JS::toNumber($x354, $global)) && !is_nan($x358 = JS::toNumber($x355, $global)) && $x357 < $x358));
if (!JS::toBoolean($x356, $global)) { break; }

unset($x359, $W359, $S359, $U359);
$x360 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 113, 32, '<image>/04_array.js');
$x359 =& $x360[0]; list(,$W359,$S359,$U359) = $x360;
unset($x361, $W361, $S361, $U361);
$x362 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 113, 12, '<image>/04_array.js');
$x361 =& $x362[0]; list(,$W361,$S361,$U361) = $x362;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x363 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 113, 21, '<image>/04_array.js');
$_TypeError =& $x363[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x363;
$x364 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x365 = $x364($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x365->class) && $x365->class === 'Error') {$x365->properties['file'] = '<image>/04_array.js';$x365->properties['line'] = 113;$x365->properties['column'] = 21;$x365->attributes['file'] = $x365->attributes['line'] = $x365->attributes['column'] = 0; }
throw new JSException($x365, 113, 21, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x366, $W366, $S366, $U366);
$x367 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $x361, 113, 21, '<image>/04_array.js');
$x366 =& $x367[0]; list(,$W366,$S366,$U366) = $x367;
if ($U366 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x361] = $x366; $x366 =& $leThis->properties[$x361]; $leThis->attributes[$x361] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U366 = FALSE; $W366 = TRUE; }
if (isset($S366)) {
$x369 = $S366->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x370 = $x369($global, $leThis, $S366, array($x359), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x368 = $x370;
} else {
if (!$U366) {$x368 = $x359;if ($W366) { $x366 = $x359; }  }
else { $x368 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($x361) && $x361 >= $leThis->properties['length']) { $leThis->properties['length'] = $x361 + 1; };
};
unset($x371, $W371, $S371, $U371);
$x372 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 116, 13, '<image>/04_array.js');
$x371 =& $x372[0]; list(,$W371,$S371,$U371) = $x372;
return $x371;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_10($global,$leThis,$fn,$args,$constructor=FALSE){for($x346=0;;++$x346){if($x346===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x345=&$scope->properties[\'arguments\'];$x345->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x345->properties[$i]=$args[$i];$x345->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x347=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',112,22,\'<image>/04_array.js\');$_arguments=&$x347[0];list(,$Warguments,$Sarguments,$Uarguments)=$x347;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x348=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',112,22,\'<image>/04_array.js\');$_ReferenceError=&$x348[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x348;$x349=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',112,22);$x350=$x349($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x350->class)&&$x350->class===\'Error\'){$x350->properties[\'file\']=\'<image>/04_array.js\';$x350->properties[\'line\']=112;$x350->properties[\'column\']=22;$x350->attributes[\'file\']=$x350->attributes[\'line\']=$x350->attributes[\'column\']=0;}throw new JSException($x350,112,22,\'<image>/04_array.js\');}unset($x351,$W351,$S351,$U351);$x352=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',112,31,\'<image>/04_array.js\');$x351=&$x352[0];list(,$W351,$S351,$U351)=$x352;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x351;}if($x346!==0){$x353=++$_i;}$x354=JS::toPrimitive($_i,$global);$x355=JS::toPrimitive($_l,$global);$x356=(is_string($x354)&&is_string($x355)?strcmp($x354,$x355)<0:(!is_nan($x357=JS::toNumber($x354,$global))&&!is_nan($x358=JS::toNumber($x355,$global))&&$x357<$x358));if(!JS::toBoolean($x356,$global)){break;}unset($x359,$W359,$S359,$U359);$x360=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,113,32,\'<image>/04_array.js\');$x359=&$x360[0];list(,$W359,$S359,$U359)=$x360;unset($x361,$W361,$S361,$U361);$x362=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',113,12,\'<image>/04_array.js\');$x361=&$x362[0];list(,$W361,$S361,$U361)=$x362;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x363=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',113,21,\'<image>/04_array.js\');$_TypeError=&$x363[0];list(,$WTypeError,$STypeError,$UTypeError)=$x363;$x364=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x365=$x364($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x365->class)&&$x365->class===\'Error\'){$x365->properties[\'file\']=\'<image>/04_array.js\';$x365->properties[\'line\']=113;$x365->properties[\'column\']=21;$x365->attributes[\'file\']=$x365->attributes[\'line\']=$x365->attributes[\'column\']=0;}throw new JSException($x365,113,21,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x366,$W366,$S366,$U366);$x367=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$x361,113,21,\'<image>/04_array.js\');$x366=&$x367[0];list(,$W366,$S366,$U366)=$x367;if($U366&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x361]=$x366;$x366=&$leThis->properties[$x361];$leThis->attributes[$x361]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U366=FALSE;$W366=TRUE;}if(isset($S366)){$x369=$S366->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x370=$x369($global,$leThis,$S366,array($x359),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x368=$x370;}else{if(!$U366){$x368=$x359;if($W366){$x366=$x359;}}else{$x368=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($x361)&&$x361>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$x361+1;}}unset($x371,$W371,$S371,$U371);$x372=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',116,13,\'<image>/04_array.js\');$x371=&$x372[0];list(,$W371,$S371,$U371)=$x372;return$x371;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_11($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x386 = 0;; ++$x386) {
if ($x386 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x385 =& $scope->properties['arguments'];
$x385->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x385->properties[$i] = $args[$i];
$x385->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = 0;
unset($x387, $W387, $S387, $U387);
$x388 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 120, 26, '<image>/04_array.js');
$x387 =& $x388[0]; list(,$W387,$S387,$U387) = $x388;
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = (JS::toNumber($x387, $global) - JS::toNumber(1, $global));
}
if ($x386 !== 0) {
$x389 = ++$_l;
$x390 = --$_r;
}
$x391 = JS::toPrimitive($_l, $global);
$x392 = JS::toPrimitive($_r, $global);
$x393 = (is_string($x391) && is_string($x392) ? strcmp($x391, $x392) < 0 : (!is_nan($x394 = JS::toNumber($x391, $global)) && !is_nan($x395 = JS::toNumber($x392, $global)) && $x394 < $x395));
if (!JS::toBoolean($x393, $global)) { break; }

unset($x396, $W396, $S396, $U396);
$x397 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_l, 121, 17, '<image>/04_array.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
$scope->properties['tmp'] = JS::$undefined; $_tmp =& $scope->properties['tmp'];
$Utmp = FALSE;
$_tmp = $x396;
unset($x398, $W398, $S398, $U398);
$x399 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_r, 122, 17, '<image>/04_array.js');
$x398 =& $x399[0]; list(,$W398,$S398,$U398) = $x399;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x400 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 122, 11, '<image>/04_array.js');
$_TypeError =& $x400[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x400;
$x401 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x402 = $x401($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x402->class) && $x402->class === 'Error') {$x402->properties['file'] = '<image>/04_array.js';$x402->properties['line'] = 122;$x402->properties['column'] = 11;$x402->attributes['file'] = $x402->attributes['line'] = $x402->attributes['column'] = 0; }
throw new JSException($x402, 122, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x403, $W403, $S403, $U403);
$x404 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_l, 122, 11, '<image>/04_array.js');
$x403 =& $x404[0]; list(,$W403,$S403,$U403) = $x404;
if ($U403 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_l] = $x403; $x403 =& $leThis->properties[$_l]; $leThis->attributes[$_l] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U403 = FALSE; $W403 = TRUE; }
if (isset($S403)) {
$x406 = $S403->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x407 = $x406($global, $leThis, $S403, array($x398), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x405 = $x407;
} else {
if (!$U403) {$x405 = $x398;if ($W403) { $x403 = $x398; }  }
else { $x405 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_l) && $_l >= $leThis->properties['length']) { $leThis->properties['length'] = $_l + 1; };
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x408 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 123, 11, '<image>/04_array.js');
$_TypeError =& $x408[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x408;
$x409 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x410 = $x409($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x410->class) && $x410->class === 'Error') {$x410->properties['file'] = '<image>/04_array.js';$x410->properties['line'] = 123;$x410->properties['column'] = 11;$x410->attributes['file'] = $x410->attributes['line'] = $x410->attributes['column'] = 0; }
throw new JSException($x410, 123, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x411, $W411, $S411, $U411);
$x412 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_r, 123, 11, '<image>/04_array.js');
$x411 =& $x412[0]; list(,$W411,$S411,$U411) = $x412;
if ($U411 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_r] = $x411; $x411 =& $leThis->properties[$_r]; $leThis->attributes[$_r] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U411 = FALSE; $W411 = TRUE; }
if (isset($S411)) {
$x414 = $S411->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x415 = $x414($global, $leThis, $S411, array($_tmp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x413 = $x415;
} else {
if (!$U411) {$x413 = $_tmp;if ($W411) { $x411 = $_tmp; }  }
else { $x413 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_r) && $_r >= $leThis->properties['length']) { $leThis->properties['length'] = $_r + 1; };;
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_11($global,$leThis,$fn,$args,$constructor=FALSE){for($x386=0;;++$x386){if($x386===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x385=&$scope->properties[\'arguments\'];$x385->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x385->properties[$i]=$args[$i];$x385->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=0;unset($x387,$W387,$S387,$U387);$x388=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',120,26,\'<image>/04_array.js\');$x387=&$x388[0];list(,$W387,$S387,$U387)=$x388;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=(JS::toNumber($x387,$global)-JS::toNumber(1,$global));}if($x386!==0){$x389=++$_l;$x390=--$_r;}$x391=JS::toPrimitive($_l,$global);$x392=JS::toPrimitive($_r,$global);$x393=(is_string($x391)&&is_string($x392)?strcmp($x391,$x392)<0:(!is_nan($x394=JS::toNumber($x391,$global))&&!is_nan($x395=JS::toNumber($x392,$global))&&$x394<$x395));if(!JS::toBoolean($x393,$global)){break;}unset($x396,$W396,$S396,$U396);$x397=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_l,121,17,\'<image>/04_array.js\');$x396=&$x397[0];list(,$W396,$S396,$U396)=$x397;$scope->properties[\'tmp\']=JS::$undefined;$_tmp=&$scope->properties[\'tmp\'];$Utmp=FALSE;$_tmp=$x396;unset($x398,$W398,$S398,$U398);$x399=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_r,122,17,\'<image>/04_array.js\');$x398=&$x399[0];list(,$W398,$S398,$U398)=$x399;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x400=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',122,11,\'<image>/04_array.js\');$_TypeError=&$x400[0];list(,$WTypeError,$STypeError,$UTypeError)=$x400;$x401=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x402=$x401($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x402->class)&&$x402->class===\'Error\'){$x402->properties[\'file\']=\'<image>/04_array.js\';$x402->properties[\'line\']=122;$x402->properties[\'column\']=11;$x402->attributes[\'file\']=$x402->attributes[\'line\']=$x402->attributes[\'column\']=0;}throw new JSException($x402,122,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x403,$W403,$S403,$U403);$x404=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_l,122,11,\'<image>/04_array.js\');$x403=&$x404[0];list(,$W403,$S403,$U403)=$x404;if($U403&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_l]=$x403;$x403=&$leThis->properties[$_l];$leThis->attributes[$_l]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U403=FALSE;$W403=TRUE;}if(isset($S403)){$x406=$S403->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x407=$x406($global,$leThis,$S403,array($x398),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x405=$x407;}else{if(!$U403){$x405=$x398;if($W403){$x403=$x398;}}else{$x405=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_l)&&$_l>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_l+1;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x408=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',123,11,\'<image>/04_array.js\');$_TypeError=&$x408[0];list(,$WTypeError,$STypeError,$UTypeError)=$x408;$x409=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x410=$x409($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x410->class)&&$x410->class===\'Error\'){$x410->properties[\'file\']=\'<image>/04_array.js\';$x410->properties[\'line\']=123;$x410->properties[\'column\']=11;$x410->attributes[\'file\']=$x410->attributes[\'line\']=$x410->attributes[\'column\']=0;}throw new JSException($x410,123,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x411,$W411,$S411,$U411);$x412=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_r,123,11,\'<image>/04_array.js\');$x411=&$x412[0];list(,$W411,$S411,$U411)=$x412;if($U411&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_r]=$x411;$x411=&$leThis->properties[$_r];$leThis->attributes[$_r]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U411=FALSE;$W411=TRUE;}if(isset($S411)){$x414=$S411->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x415=$x414($global,$leThis,$S411,array($_tmp),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x413=$x415;}else{if(!$U411){$x413=$_tmp;if($W411){$x411=$_tmp;}}else{$x413=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_r)&&$_r>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_r+1;}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x428 =& $scope->properties['arguments'];
$x428->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x428->properties[$i] = $args[$i];
$x428->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x432, $W432, $S432, $U432);
$x433 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 130, 10, '<image>/04_array.js');
$x432 =& $x433[0]; list(,$W432,$S432,$U432) = $x433;
$x429 = JS::toPrimitive($x432, $global);
$x430 = JS::toPrimitive(1, $global);
$x431 = (is_string($x429) && is_string($x430) ? strcmp($x429, $x430) < 0 : (!is_nan($x434 = JS::toNumber($x429, $global)) && !is_nan($x435 = JS::toNumber($x430, $global)) && $x434 < $x435));
if (JS::toBoolean($x431, $global)) {

return JS::$undefined;;
};
unset($x436, $W436, $S436, $U436);
$x437 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 0, 134, 17, '<image>/04_array.js');
$x436 =& $x437[0]; list(,$W436,$S436,$U436) = $x437;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x436;
unset($x438, $W438, $S438, $U438);
$x439 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 134, 30, '<image>/04_array.js');
$x438 =& $x439[0]; list(,$W438,$S438,$U438) = $x439;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x438;
for ($x440 = 0;; ++$x440) {
if ($x440 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
}
if ($x440 !== 0) {
$x441 = ++$_i;
}
$x442 = JS::toPrimitive($_i, $global);
$x443 = JS::toPrimitive($_l, $global);
$x444 = (is_string($x442) && is_string($x443) ? strcmp($x442, $x443) < 0 : (!is_nan($x445 = JS::toNumber($x442, $global)) && !is_nan($x446 = JS::toNumber($x443, $global)) && $x445 < $x446));
if (!JS::toBoolean($x444, $global)) { break; }

$x447 = JS::toPrimitive($_i, $global);
$x448 = JS::toPrimitive(1, $global);
unset($x449, $W449, $S449, $U449);
$x450 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) (is_string($x447) || is_string($x448) ? JS::toString($x447, $global) . JS::toString($x448, $global) : JS::toNumber($x447, $global) + JS::toNumber($x448, $global)), 137, 17, '<image>/04_array.js');
$x449 =& $x450[0]; list(,$W449,$S449,$U449) = $x450;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x451 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 137, 11, '<image>/04_array.js');
$_TypeError =& $x451[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x451;
$x452 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x453 = $x452($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x453->class) && $x453->class === 'Error') {$x453->properties['file'] = '<image>/04_array.js';$x453->properties['line'] = 137;$x453->properties['column'] = 11;$x453->attributes['file'] = $x453->attributes['line'] = $x453->attributes['column'] = 0; }
throw new JSException($x453, 137, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x454, $W454, $S454, $U454);
$x455 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_i, 137, 11, '<image>/04_array.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
if ($U454 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_i] = $x454; $x454 =& $leThis->properties[$_i]; $leThis->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U454 = FALSE; $W454 = TRUE; }
if (isset($S454)) {
$x457 = $S454->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x458 = $x457($global, $leThis, $S454, array($x449), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x456 = $x458;
} else {
if (!$U454) {$x456 = $x449;if ($W454) { $x454 = $x449; }  }
else { $x456 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x459 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 140, 14, '<image>/04_array.js');
$_TypeError =& $x459[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x459;
$x460 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x461 = $x460($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x461->class) && $x461->class === 'Error') {$x461->properties['file'] = '<image>/04_array.js';$x461->properties['line'] = 140;$x461->properties['column'] = 14;$x461->attributes['file'] = $x461->attributes['line'] = $x461->attributes['column'] = 0; }
throw new JSException($x461, 140, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x462, $W462, $S462, $U462);
$x463 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) 'length', 140, 14, '<image>/04_array.js');
$x462 =& $x463[0]; list(,$W462,$S462,$U462) = $x463;
if ($U462 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['length'] = $x462; $x462 =& $leThis->properties['length']; $leThis->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U462 = FALSE; $W462 = TRUE; }
if (isset($S462)) {
$x465 = $S462->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x466 = $x465($global, $leThis, $S462, array((JS::toNumber($_l, $global) - JS::toNumber(1, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x464 = $x466;
} else {
if (!$U462) {$x464 = (JS::toNumber($_l, $global) - JS::toNumber(1, $global));if ($W462) { $x462 = (JS::toNumber($_l, $global) - JS::toNumber(1, $global)); }  }
else { $x464 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x428=&$scope->properties[\'arguments\'];$x428->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x428->properties[$i]=$args[$i];$x428->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x432,$W432,$S432,$U432);$x433=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',130,10,\'<image>/04_array.js\');$x432=&$x433[0];list(,$W432,$S432,$U432)=$x433;$x429=JS::toPrimitive($x432,$global);$x430=JS::toPrimitive(1,$global);$x431=(is_string($x429)&&is_string($x430)?strcmp($x429,$x430)<0:(!is_nan($x434=JS::toNumber($x429,$global))&&!is_nan($x435=JS::toNumber($x430,$global))&&$x434<$x435));if(JS::toBoolean($x431,$global)){return JS::$undefined;}unset($x436,$W436,$S436,$U436);$x437=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)0,134,17,\'<image>/04_array.js\');$x436=&$x437[0];list(,$W436,$S436,$U436)=$x437;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x436;unset($x438,$W438,$S438,$U438);$x439=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',134,30,\'<image>/04_array.js\');$x438=&$x439[0];list(,$W438,$S438,$U438)=$x439;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x438;for($x440=0;;++$x440){if($x440===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x440!==0){$x441=++$_i;}$x442=JS::toPrimitive($_i,$global);$x443=JS::toPrimitive($_l,$global);$x444=(is_string($x442)&&is_string($x443)?strcmp($x442,$x443)<0:(!is_nan($x445=JS::toNumber($x442,$global))&&!is_nan($x446=JS::toNumber($x443,$global))&&$x445<$x446));if(!JS::toBoolean($x444,$global)){break;}$x447=JS::toPrimitive($_i,$global);$x448=JS::toPrimitive(1,$global);unset($x449,$W449,$S449,$U449);$x450=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)(is_string($x447)||is_string($x448)?JS::toString($x447,$global).JS::toString($x448,$global):JS::toNumber($x447,$global)+JS::toNumber($x448,$global)),137,17,\'<image>/04_array.js\');$x449=&$x450[0];list(,$W449,$S449,$U449)=$x450;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x451=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',137,11,\'<image>/04_array.js\');$_TypeError=&$x451[0];list(,$WTypeError,$STypeError,$UTypeError)=$x451;$x452=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x453=$x452($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x453->class)&&$x453->class===\'Error\'){$x453->properties[\'file\']=\'<image>/04_array.js\';$x453->properties[\'line\']=137;$x453->properties[\'column\']=11;$x453->attributes[\'file\']=$x453->attributes[\'line\']=$x453->attributes[\'column\']=0;}throw new JSException($x453,137,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x454,$W454,$S454,$U454);$x455=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_i,137,11,\'<image>/04_array.js\');$x454=&$x455[0];list(,$W454,$S454,$U454)=$x455;if($U454&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_i]=$x454;$x454=&$leThis->properties[$_i];$leThis->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U454=FALSE;$W454=TRUE;}if(isset($S454)){$x457=$S454->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x458=$x457($global,$leThis,$S454,array($x449),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x456=$x458;}else{if(!$U454){$x456=$x449;if($W454){$x454=$x449;}}else{$x456=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x459=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',140,14,\'<image>/04_array.js\');$_TypeError=&$x459[0];list(,$WTypeError,$STypeError,$UTypeError)=$x459;$x460=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x461=$x460($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x461->class)&&$x461->class===\'Error\'){$x461->properties[\'file\']=\'<image>/04_array.js\';$x461->properties[\'line\']=140;$x461->properties[\'column\']=14;$x461->attributes[\'file\']=$x461->attributes[\'line\']=$x461->attributes[\'column\']=0;}throw new JSException($x461,140,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x462,$W462,$S462,$U462);$x463=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)\'length\',140,14,\'<image>/04_array.js\');$x462=&$x463[0];list(,$W462,$S462,$U462)=$x463;if($U462&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'length\']=$x462;$x462=&$leThis->properties[\'length\'];$leThis->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U462=FALSE;$W462=TRUE;}if(isset($S462)){$x465=$S462->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x466=$x465($global,$leThis,$S462,array((JS::toNumber($_l,$global)-JS::toNumber(1,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x464=$x466;}else{if(!$U462){$x464=(JS::toNumber($_l,$global)-JS::toNumber(1,$global));if($W462){$x462=(JS::toNumber($_l,$global)-JS::toNumber(1,$global));}}else{$x464=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_13($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x480 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x480, $global)) {
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = 0;;
};
$x481 = JS::toPrimitive($_start, $global);
$x482 = JS::toPrimitive(0, $global);
$x483 = (is_string($x481) && is_string($x482) ? strcmp($x481, $x482) < 0 : (!is_nan($x484 = JS::toNumber($x481, $global)) && !is_nan($x485 = JS::toNumber($x482, $global)) && $x484 < $x485));
if (JS::toBoolean($x483, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x486 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Math', 151, 11, '<image>/04_array.js');
$_Math =& $x486[0]; list(,$WMath,$SMath,$UMath) = $x486;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x487 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 151, 11, '<image>/04_array.js');
$_ReferenceError =& $x487[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x487;
$x488 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 11);
$x489 = $x488($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x489->class) && $x489->class === 'Error') {$x489->properties['file'] = '<image>/04_array.js';$x489->properties['line'] = 151;$x489->properties['column'] = 11;$x489->attributes['file'] = $x489->attributes['line'] = $x489->attributes['column'] = 0; }
throw new JSException($x489, 151, 11, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x491 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 151, 19, '<image>/04_array.js');
$_TypeError =& $x491[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x491;
$x492 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x493 = $x492($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x493->class) && $x493->class === 'Error') {$x493->properties['file'] = '<image>/04_array.js';$x493->properties['line'] = 151;$x493->properties['column'] = 19;$x493->attributes['file'] = $x493->attributes['line'] = $x493->attributes['column'] = 0; }
throw new JSException($x493, 151, 19, '<image>/04_array.js');
}
$x490 = JS::toObject($_Math, $global);
unset($x494, $W494, $S494, $U494);
$x495 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x490, (string) 'max', 151, 19, '<image>/04_array.js');
$x494 =& $x495[0]; list(,$W494,$S494,$U494) = $x495;
unset($x498, $W498, $S498, $U498);
$x499 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 151, 24, '<image>/04_array.js');
$x498 =& $x499[0]; list(,$W498,$S498,$U498) = $x499;
$x496 = JS::toPrimitive($x498, $global);
$x497 = JS::toPrimitive($_start, $global);
if (!(is_object($x494) && isset($x494->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x502 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 151, 19, '<image>/04_array.js');
$_TypeError =& $x502[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x502;
$x503 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x504 = $x503($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x504->class) && $x504->class === 'Error') {$x504->properties['file'] = '<image>/04_array.js';$x504->properties['line'] = 151;$x504->properties['column'] = 19;$x504->attributes['file'] = $x504->attributes['line'] = $x504->attributes['column'] = 0; }
throw new JSException($x504, 151, 19, '<image>/04_array.js');
}
$x500 = $x494->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x501 = $x500($global, $x490, $x494, array((is_string($x496) || is_string($x497) ? JS::toString($x496, $global) . JS::toString($x497, $global) : JS::toNumber($x496, $global) + JS::toNumber($x497, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x501;;
};
$x505 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x505, $global)) {
unset($x506, $W506, $S506, $U506);
$x507 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 155, 13, '<image>/04_array.js');
$x506 =& $x507[0]; list(,$W506,$S506,$U506) = $x507;
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x506;;
};
$x508 = JS::toPrimitive($_end, $global);
$x509 = JS::toPrimitive(0, $global);
$x510 = (is_string($x508) && is_string($x509) ? strcmp($x508, $x509) < 0 : (!is_nan($x511 = JS::toNumber($x508, $global)) && !is_nan($x512 = JS::toNumber($x509, $global)) && $x511 < $x512));
if (JS::toBoolean($x510, $global)) {
unset($x515, $W515, $S515, $U515);
$x516 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 159, 13, '<image>/04_array.js');
$x515 =& $x516[0]; list(,$W515,$S515,$U515) = $x516;
$x513 = JS::toPrimitive($x515, $global);
$x514 = JS::toPrimitive($_end, $global);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = (is_string($x513) || is_string($x514) ? JS::toString($x513, $global) . JS::toString($x514, $global) : JS::toNumber($x513, $global) + JS::toNumber($x514, $global));;
};
$x517 = clone JS::$arrayTemplate;
$x517->properties['length'] = 0;
$x517->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x517;
for ($x518 = 0;; ++$x518) {
if ($x518 !== 0) {
$x519 = ++$_start;
}
$x520 = JS::toPrimitive($_start, $global);
$x521 = JS::toPrimitive($_end, $global);
$x522 = (is_string($x520) && is_string($x521) ? strcmp($x520, $x521) < 0 : (!is_nan($x523 = JS::toNumber($x520, $global)) && !is_nan($x524 = JS::toNumber($x521, $global)) && $x523 < $x524));
if (!JS::toBoolean($x522, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x526 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 165, 16, '<image>/04_array.js');
$_TypeError =& $x526[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x526;
$x527 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x528 = $x527($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x528->class) && $x528->class === 'Error') {$x528->properties['file'] = '<image>/04_array.js';$x528->properties['line'] = 165;$x528->properties['column'] = 16;$x528->attributes['file'] = $x528->attributes['line'] = $x528->attributes['column'] = 0; }
throw new JSException($x528, 165, 16, '<image>/04_array.js');
}
$x525 = JS::toObject($_newArray, $global);
unset($x529, $W529, $S529, $U529);
$x530 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x525, (string) 'push', 165, 16, '<image>/04_array.js');
$x529 =& $x530[0]; list(,$W529,$S529,$U529) = $x530;
unset($x531, $W531, $S531, $U531);
$x532 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_start, 165, 21, '<image>/04_array.js');
$x531 =& $x532[0]; list(,$W531,$S531,$U531) = $x532;
if (!(is_object($x529) && isset($x529->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x535 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 165, 16, '<image>/04_array.js');
$_TypeError =& $x535[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x535;
$x536 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x537 = $x536($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x537->class) && $x537->class === 'Error') {$x537->properties['file'] = '<image>/04_array.js';$x537->properties['line'] = 165;$x537->properties['column'] = 16;$x537->attributes['file'] = $x537->attributes['line'] = $x537->attributes['column'] = 0; }
throw new JSException($x537, 165, 16, '<image>/04_array.js');
}
$x533 = $x529->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x534 = $x533($global, $x525, $x529, array($x531), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x479=&$scope->properties[\'arguments\'];$x479->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x479->properties[$i]=$args[$i];$x479->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$x480=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x480,$global)){if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=0;}$x481=JS::toPrimitive($_start,$global);$x482=JS::toPrimitive(0,$global);$x483=(is_string($x481)&&is_string($x482)?strcmp($x481,$x482)<0:(!is_nan($x484=JS::toNumber($x481,$global))&&!is_nan($x485=JS::toNumber($x482,$global))&&$x484<$x485));if(JS::toBoolean($x483,$global)){unset($_Math,$WMath,$SMath,$UMath);$x486=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Math\',151,11,\'<image>/04_array.js\');$_Math=&$x486[0];list(,$WMath,$SMath,$UMath)=$x486;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x487=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',151,11,\'<image>/04_array.js\');$_ReferenceError=&$x487[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x487;$x488=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,11);$x489=$x488($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x489->class)&&$x489->class===\'Error\'){$x489->properties[\'file\']=\'<image>/04_array.js\';$x489->properties[\'line\']=151;$x489->properties[\'column\']=11;$x489->attributes[\'file\']=$x489->attributes[\'line\']=$x489->attributes[\'column\']=0;}throw new JSException($x489,151,11,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x491=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',151,19,\'<image>/04_array.js\');$_TypeError=&$x491[0];list(,$WTypeError,$STypeError,$UTypeError)=$x491;$x492=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x493=$x492($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x493->class)&&$x493->class===\'Error\'){$x493->properties[\'file\']=\'<image>/04_array.js\';$x493->properties[\'line\']=151;$x493->properties[\'column\']=19;$x493->attributes[\'file\']=$x493->attributes[\'line\']=$x493->attributes[\'column\']=0;}throw new JSException($x493,151,19,\'<image>/04_array.js\');}$x490=JS::toObject($_Math,$global);unset($x494,$W494,$S494,$U494);$x495=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x490,(string)\'max\',151,19,\'<image>/04_array.js\');$x494=&$x495[0];list(,$W494,$S494,$U494)=$x495;unset($x498,$W498,$S498,$U498);$x499=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',151,24,\'<image>/04_array.js\');$x498=&$x499[0];list(,$W498,$S498,$U498)=$x499;$x496=JS::toPrimitive($x498,$global);$x497=JS::toPrimitive($_start,$global);if(!(is_object($x494)&&isset($x494->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x502=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',151,19,\'<image>/04_array.js\');$_TypeError=&$x502[0];list(,$WTypeError,$STypeError,$UTypeError)=$x502;$x503=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x504=$x503($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x504->class)&&$x504->class===\'Error\'){$x504->properties[\'file\']=\'<image>/04_array.js\';$x504->properties[\'line\']=151;$x504->properties[\'column\']=19;$x504->attributes[\'file\']=$x504->attributes[\'line\']=$x504->attributes[\'column\']=0;}throw new JSException($x504,151,19,\'<image>/04_array.js\');}$x500=$x494->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x501=$x500($global,$x490,$x494,array((is_string($x496)||is_string($x497)?JS::toString($x496,$global).JS::toString($x497,$global):JS::toNumber($x496,$global)+JS::toNumber($x497,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x501;}$x505=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x505,$global)){unset($x506,$W506,$S506,$U506);$x507=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',155,13,\'<image>/04_array.js\');$x506=&$x507[0];list(,$W506,$S506,$U506)=$x507;if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x506;}$x508=JS::toPrimitive($_end,$global);$x509=JS::toPrimitive(0,$global);$x510=(is_string($x508)&&is_string($x509)?strcmp($x508,$x509)<0:(!is_nan($x511=JS::toNumber($x508,$global))&&!is_nan($x512=JS::toNumber($x509,$global))&&$x511<$x512));if(JS::toBoolean($x510,$global)){unset($x515,$W515,$S515,$U515);$x516=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',159,13,\'<image>/04_array.js\');$x515=&$x516[0];list(,$W515,$S515,$U515)=$x516;$x513=JS::toPrimitive($x515,$global);$x514=JS::toPrimitive($_end,$global);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=(is_string($x513)||is_string($x514)?JS::toString($x513,$global).JS::toString($x514,$global):JS::toNumber($x513,$global)+JS::toNumber($x514,$global));}$x517=clone JS::$arrayTemplate;$x517->properties[\'length\']=0;$x517->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x517;for($x518=0;;++$x518){if($x518!==0){$x519=++$_start;}$x520=JS::toPrimitive($_start,$global);$x521=JS::toPrimitive($_end,$global);$x522=(is_string($x520)&&is_string($x521)?strcmp($x520,$x521)<0:(!is_nan($x523=JS::toNumber($x520,$global))&&!is_nan($x524=JS::toNumber($x521,$global))&&$x523<$x524));if(!JS::toBoolean($x522,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x526=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',165,16,\'<image>/04_array.js\');$_TypeError=&$x526[0];list(,$WTypeError,$STypeError,$UTypeError)=$x526;$x527=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x528=$x527($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x528->class)&&$x528->class===\'Error\'){$x528->properties[\'file\']=\'<image>/04_array.js\';$x528->properties[\'line\']=165;$x528->properties[\'column\']=16;$x528->attributes[\'file\']=$x528->attributes[\'line\']=$x528->attributes[\'column\']=0;}throw new JSException($x528,165,16,\'<image>/04_array.js\');}$x525=JS::toObject($_newArray,$global);unset($x529,$W529,$S529,$U529);$x530=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x525,(string)\'push\',165,16,\'<image>/04_array.js\');$x529=&$x530[0];list(,$W529,$S529,$U529)=$x530;unset($x531,$W531,$S531,$U531);$x532=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_start,165,21,\'<image>/04_array.js\');$x531=&$x532[0];list(,$W531,$S531,$U531)=$x532;if(!(is_object($x529)&&isset($x529->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x535=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',165,16,\'<image>/04_array.js\');$_TypeError=&$x535[0];list(,$WTypeError,$STypeError,$UTypeError)=$x535;$x536=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x537=$x536($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x537->class)&&$x537->class===\'Error\'){$x537->properties[\'file\']=\'<image>/04_array.js\';$x537->properties[\'line\']=165;$x537->properties[\'column\']=16;$x537->attributes[\'file\']=$x537->attributes[\'line\']=$x537->attributes[\'column\']=0;}throw new JSException($x537,165,16,\'<image>/04_array.js\');}$x533=$x529->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x534=$x533($global,$x525,$x529,array($x531),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x553 =& $scope->properties['arguments'];
$x553->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x553->properties[$i] = $args[$i];
$x553->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['a'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_a =& $scope->properties['a'];
$Ua = FALSE;
$scope->properties['b'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_b =& $scope->properties['b'];
$Ub = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x556 = $_a;
$x556 = ($x556 === JS::$undefined ? 'undefined' : (is_int($x556) || is_float($x556) ? 'number' : (is_bool($x556) ? 'boolean' : (is_string($x556) ? 'string' : (is_object($x556) && isset($x556->call) ? 'function' : 'object')))));
$x555 = (((gettype($x556) === gettype('string') && $x556 === 'string'))|| (((is_float($x556) || is_int($x556)) && (is_float('string') || is_int('string'))) && $x556 == 'string'));
$x554 = $x555;
if (!JS::toBoolean($x554, $global)) {
$x558 = $_b;
$x558 = ($x558 === JS::$undefined ? 'undefined' : (is_int($x558) || is_float($x558) ? 'number' : (is_bool($x558) ? 'boolean' : (is_string($x558) ? 'string' : (is_object($x558) && isset($x558->call) ? 'function' : 'object')))));
$x557 = (((gettype($x558) === gettype('string') && $x558 === 'string'))|| (((is_float($x558) || is_int($x558)) && (is_float('string') || is_int('string'))) && $x558 == 'string'));
$x554 = $x557; }
if (JS::toBoolean($x554, $global)) {
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = JS::toString($_a, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = JS::toString($_b, $global);
$x559 = JS::toPrimitive($_a, $global);
$x560 = JS::toPrimitive($_b, $global);
$x561 = (is_string($x559) && is_string($x560) ? strcmp($x559, $x560) < 0 : (!is_nan($x562 = JS::toNumber($x559, $global)) && !is_nan($x563 = JS::toNumber($x560, $global)) && $x562 < $x563));
if (JS::toBoolean($x561, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
}
else {
$x564 = JS::toPrimitive($_a, $global);
$x565 = JS::toPrimitive($_b, $global);
$x566 = (is_string($x565) && is_string($x564) ? strcmp($x565, $x564) < 0 : (!is_nan($x567 = JS::toNumber($x565, $global)) && !is_nan($x568 = JS::toNumber($x564, $global)) && $x567 < $x568));
if (JS::toBoolean($x566, $global)) {

return 1;;
}
else {

return 0;;
};
};;
}
else {
$x571 = $_a;
$x571 = ($x571 === JS::$undefined ? 'undefined' : (is_int($x571) || is_float($x571) ? 'number' : (is_bool($x571) ? 'boolean' : (is_string($x571) ? 'string' : (is_object($x571) && isset($x571->call) ? 'function' : 'object')))));
$x570 = (((gettype($x571) === gettype('number') && $x571 === 'number'))|| (((is_float($x571) || is_int($x571)) && (is_float('number') || is_int('number'))) && $x571 == 'number'));
$x569 = $x570;
if (!JS::toBoolean($x569, $global)) {
$x573 = $_b;
$x573 = ($x573 === JS::$undefined ? 'undefined' : (is_int($x573) || is_float($x573) ? 'number' : (is_bool($x573) ? 'boolean' : (is_string($x573) ? 'string' : (is_object($x573) && isset($x573->call) ? 'function' : 'object')))));
$x572 = (((gettype($x573) === gettype('number') && $x573 === 'number'))|| (((is_float($x573) || is_int($x573)) && (is_float('number') || is_int('number'))) && $x573 == 'number'));
$x569 = $x572; }
if (JS::toBoolean($x569, $global)) {
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = JS::toNumber($_a, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = JS::toNumber($_b, $global);
return (JS::toNumber($_a, $global) - JS::toNumber($_b, $global));;
};
};
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x576 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 192, 13, '<image>/04_array.js');
$_TypeError =& $x576[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x576;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x577 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 192, 13, '<image>/04_array.js');
$_ReferenceError =& $x577[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x577;
$x578 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 13);
$x579 = $x578($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x579->class) && $x579->class === 'Error') {$x579->properties['file'] = '<image>/04_array.js';$x579->properties['line'] = 192;$x579->properties['column'] = 13;$x579->attributes['file'] = $x579->attributes['line'] = $x579->attributes['column'] = 0; }
throw new JSException($x579, 192, 13, '<image>/04_array.js');
}
$x574 = clone JS::$objectTemplate;
unset($x580, $W580, $S580, $U580);
$x581 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, (string) 'prototype', 192, 9, '<image>/04_array.js');
$x580 =& $x581[0]; list(,$W580,$S580,$U580) = $x581;
$x575 = $x580;
$x574->prototype = $x575;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x584 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x585 = $x584($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x585->class) && $x585->class === 'Error') {$x585->properties['file'] = '<image>/04_array.js';$x585->properties['line'] = 192;$x585->properties['column'] = 9;$x585->attributes['file'] = $x585->attributes['line'] = $x585->attributes['column'] = 0; }
throw new JSException($x585, 192, 9, '<image>/04_array.js');
}
$x582 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x583 = $x582($global, $x574, $_TypeError, array('Unsortable values in array.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x575 = $x583;
if (is_object($x575) && $x575 !== JS::$undefined) { $x574 = $x575; }
if (isset($x574->class) && $x574->class === 'Error') {$x574->properties['file'] = '<image>/04_array.js';$x574->properties['line'] = 192;$x574->properties['column'] = 3;$x574->attributes['file'] = $x574->attributes['line'] = $x574->attributes['column'] = 0; }
throw new JSException($x574, 192, 3, '<image>/04_array.js');
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x553=&$scope->properties[\'arguments\'];$x553->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x553->properties[$i]=$args[$i];$x553->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'a\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_a=&$scope->properties[\'a\'];$Ua=FALSE;$scope->properties[\'b\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$global->scope[++$global->scope_sp]=$scope;$x556=$_a;$x556=($x556===JS::$undefined?\'undefined\':(is_int($x556)||is_float($x556)?\'number\':(is_bool($x556)?\'boolean\':(is_string($x556)?\'string\':(is_object($x556)&&isset($x556->call)?\'function\':\'object\')))));$x555=(((gettype($x556)===gettype(\'string\')&&$x556===\'string\'))||(((is_float($x556)||is_int($x556))&&(is_float(\'string\')||is_int(\'string\')))&&$x556==\'string\'));$x554=$x555;if(!JS::toBoolean($x554,$global)){$x558=$_b;$x558=($x558===JS::$undefined?\'undefined\':(is_int($x558)||is_float($x558)?\'number\':(is_bool($x558)?\'boolean\':(is_string($x558)?\'string\':(is_object($x558)&&isset($x558->call)?\'function\':\'object\')))));$x557=(((gettype($x558)===gettype(\'string\')&&$x558===\'string\'))||(((is_float($x558)||is_int($x558))&&(is_float(\'string\')||is_int(\'string\')))&&$x558==\'string\'));$x554=$x557;}if(JS::toBoolean($x554,$global)){if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=JS::toString($_a,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=JS::toString($_b,$global);$x559=JS::toPrimitive($_a,$global);$x560=JS::toPrimitive($_b,$global);$x561=(is_string($x559)&&is_string($x560)?strcmp($x559,$x560)<0:(!is_nan($x562=JS::toNumber($x559,$global))&&!is_nan($x563=JS::toNumber($x560,$global))&&$x562<$x563));if(JS::toBoolean($x561,$global)){return(-1.0*JS::toNumber(1,$global));}else{$x564=JS::toPrimitive($_a,$global);$x565=JS::toPrimitive($_b,$global);$x566=(is_string($x565)&&is_string($x564)?strcmp($x565,$x564)<0:(!is_nan($x567=JS::toNumber($x565,$global))&&!is_nan($x568=JS::toNumber($x564,$global))&&$x567<$x568));if(JS::toBoolean($x566,$global)){return 1;}else{return 0;}}}else{$x571=$_a;$x571=($x571===JS::$undefined?\'undefined\':(is_int($x571)||is_float($x571)?\'number\':(is_bool($x571)?\'boolean\':(is_string($x571)?\'string\':(is_object($x571)&&isset($x571->call)?\'function\':\'object\')))));$x570=(((gettype($x571)===gettype(\'number\')&&$x571===\'number\'))||(((is_float($x571)||is_int($x571))&&(is_float(\'number\')||is_int(\'number\')))&&$x571==\'number\'));$x569=$x570;if(!JS::toBoolean($x569,$global)){$x573=$_b;$x573=($x573===JS::$undefined?\'undefined\':(is_int($x573)||is_float($x573)?\'number\':(is_bool($x573)?\'boolean\':(is_string($x573)?\'string\':(is_object($x573)&&isset($x573->call)?\'function\':\'object\')))));$x572=(((gettype($x573)===gettype(\'number\')&&$x573===\'number\'))||(((is_float($x573)||is_int($x573))&&(is_float(\'number\')||is_int(\'number\')))&&$x573==\'number\'));$x569=$x572;}if(JS::toBoolean($x569,$global)){if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=JS::toNumber($_a,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=JS::toNumber($_b,$global);return(JS::toNumber($_a,$global)-JS::toNumber($_b,$global));}}unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x576=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',192,13,\'<image>/04_array.js\');$_TypeError=&$x576[0];list(,$WTypeError,$STypeError,$UTypeError)=$x576;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x577=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',192,13,\'<image>/04_array.js\');$_ReferenceError=&$x577[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x577;$x578=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,13);$x579=$x578($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x579->class)&&$x579->class===\'Error\'){$x579->properties[\'file\']=\'<image>/04_array.js\';$x579->properties[\'line\']=192;$x579->properties[\'column\']=13;$x579->attributes[\'file\']=$x579->attributes[\'line\']=$x579->attributes[\'column\']=0;}throw new JSException($x579,192,13,\'<image>/04_array.js\');}$x574=clone JS::$objectTemplate;unset($x580,$W580,$S580,$U580);$x581=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,(string)\'prototype\',192,9,\'<image>/04_array.js\');$x580=&$x581[0];list(,$W580,$S580,$U580)=$x581;$x575=$x580;$x574->prototype=$x575;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x584=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x585=$x584($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x585->class)&&$x585->class===\'Error\'){$x585->properties[\'file\']=\'<image>/04_array.js\';$x585->properties[\'line\']=192;$x585->properties[\'column\']=9;$x585->attributes[\'file\']=$x585->attributes[\'line\']=$x585->attributes[\'column\']=0;}throw new JSException($x585,192,9,\'<image>/04_array.js\');}$x582=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x583=$x582($global,$x574,$_TypeError,array(\'Unsortable values in array.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x575=$x583;if(is_object($x575)&&$x575!==JS::$undefined){$x574=$x575;}if(isset($x574->class)&&$x574->class===\'Error\'){$x574->properties[\'file\']=\'<image>/04_array.js\';$x574->properties[\'line\']=192;$x574->properties[\'column\']=3;$x574->attributes[\'file\']=$x574->attributes[\'line\']=$x574->attributes[\'column\']=0;}throw new JSException($x574,192,3,\'<image>/04_array.js\');return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x550 =& $scope->properties['arguments'];
$x550->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x550->properties[$i] = $args[$i];
$x550->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['compareFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_compareFn =& $scope->properties['compareFn'];
$UcompareFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x551 = $_compareFn;
if (!JS::toBoolean($x551, $global)) {
$x586 = clone JS::$functionTemplate; $x586->call = '_339fc8fcf8563d9777a12bd15b91ae1b_15'; $x586->parameters = array (
  0 => 'a',
  1 => 'b',
); $x586->scope = $scope; $x586->properties['prototype'] = clone JS::$objectTemplate; $x586->attributes['prototype'] = JS::WRITABLE; $x586->properties['prototype']->properties['constructor'] = $x586; $x586->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x586->properties['length'] = 2; $x586->attributes['length'] = 0;
$x551 = $x586; }
if ($UcompareFn) {$global->properties['compareFn'] = $_compareFn; $_compareFn =& $global->properties['compareFn']; }
$_compareFn = $x551;
unset($x590, $W590, $S590, $U590);
$x591 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 195, 10, '<image>/04_array.js');
$x590 =& $x591[0]; list(,$W590,$S590,$U590) = $x591;
$x587 = JS::toPrimitive($x590, $global);
$x588 = JS::toPrimitive(2, $global);
$x589 = (is_string($x587) && is_string($x588) ? strcmp($x587, $x588) < 0 : (!is_nan($x592 = JS::toNumber($x587, $global)) && !is_nan($x593 = JS::toNumber($x588, $global)) && $x592 < $x593));
if (JS::toBoolean($x589, $global)) {

return $leThis;;
};
$scope->properties['pivot'] = JS::$undefined; $_pivot =& $scope->properties['pivot'];
$Upivot = FALSE;
$_pivot = JS::$undefined;
$x594 = clone JS::$arrayTemplate;
$x594->properties['length'] = 0;
$x594->attributes['length'] = JS::WRITABLE;
$scope->properties['smaller'] = JS::$undefined; $_smaller =& $scope->properties['smaller'];
$Usmaller = FALSE;
$_smaller = $x594;
$x595 = clone JS::$arrayTemplate;
$x595->properties['length'] = 0;
$x595->attributes['length'] = JS::WRITABLE;
$scope->properties['larger'] = JS::$undefined; $_larger =& $scope->properties['larger'];
$Ularger = FALSE;
$_larger = $x595;
unset($x596, $W596, $S596, $U596);
$x597 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 0, 201, 14, '<image>/04_array.js');
$x596 =& $x597[0]; list(,$W596,$S596,$U596) = $x597;
if ($Upivot) {$global->properties['pivot'] = $_pivot; $_pivot =& $global->properties['pivot']; }
$_pivot = $x596;
for ($x598 = 0;; ++$x598) {
if ($x598 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x599, $W599, $S599, $U599);
$x600 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 203, 26, '<image>/04_array.js');
$x599 =& $x600[0]; list(,$W599,$S599,$U599) = $x600;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x599;
}
if ($x598 !== 0) {
$x601 = ++$_i;
}
$x602 = JS::toPrimitive($_i, $global);
$x603 = JS::toPrimitive($_l, $global);
$x604 = (is_string($x602) && is_string($x603) ? strcmp($x602, $x603) < 0 : (!is_nan($x605 = JS::toNumber($x602, $global)) && !is_nan($x606 = JS::toNumber($x603, $global)) && $x605 < $x606));
if (!JS::toBoolean($x604, $global)) { break; }

unset($x610, $W610, $S610, $U610);
$x611 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 204, 21, '<image>/04_array.js');
$x610 =& $x611[0]; list(,$W610,$S610,$U610) = $x611;
if (!(is_object($_compareFn) && isset($_compareFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x614 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 204, 16, '<image>/04_array.js');
$_TypeError =& $x614[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x614;
$x615 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x616 = $x615($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x616->class) && $x616->class === 'Error') {$x616->properties['file'] = '<image>/04_array.js';$x616->properties['line'] = 204;$x616->properties['column'] = 16;$x616->attributes['file'] = $x616->attributes['line'] = $x616->attributes['column'] = 0; }
throw new JSException($x616, 204, 16, '<image>/04_array.js');
}
$x612 = $_compareFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x613 = $x612($global, $global, $_compareFn, array($x610, $_pivot), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x607 = JS::toPrimitive($x613, $global);
$x608 = JS::toPrimitive(0, $global);
$x609 = (is_string($x607) && is_string($x608) ? strcmp($x607, $x608) < 0 : (!is_nan($x617 = JS::toNumber($x607, $global)) && !is_nan($x618 = JS::toNumber($x608, $global)) && $x617 < $x618));
if (JS::toBoolean($x609, $global)) {
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x620 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 205, 16, '<image>/04_array.js');
$_TypeError =& $x620[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x620;
$x621 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x622 = $x621($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x622->class) && $x622->class === 'Error') {$x622->properties['file'] = '<image>/04_array.js';$x622->properties['line'] = 205;$x622->properties['column'] = 16;$x622->attributes['file'] = $x622->attributes['line'] = $x622->attributes['column'] = 0; }
throw new JSException($x622, 205, 16, '<image>/04_array.js');
}
$x619 = JS::toObject($_smaller, $global);
unset($x623, $W623, $S623, $U623);
$x624 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x619, (string) 'push', 205, 16, '<image>/04_array.js');
$x623 =& $x624[0]; list(,$W623,$S623,$U623) = $x624;
unset($x625, $W625, $S625, $U625);
$x626 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 205, 21, '<image>/04_array.js');
$x625 =& $x626[0]; list(,$W625,$S625,$U625) = $x626;
if (!(is_object($x623) && isset($x623->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x629 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 205, 16, '<image>/04_array.js');
$_TypeError =& $x629[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x629;
$x630 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x631 = $x630($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x631->class) && $x631->class === 'Error') {$x631->properties['file'] = '<image>/04_array.js';$x631->properties['line'] = 205;$x631->properties['column'] = 16;$x631->attributes['file'] = $x631->attributes['line'] = $x631->attributes['column'] = 0; }
throw new JSException($x631, 205, 16, '<image>/04_array.js');
}
$x627 = $x623->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x628 = $x627($global, $x619, $x623, array($x625), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
else {
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x633 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 207, 15, '<image>/04_array.js');
$_TypeError =& $x633[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x633;
$x634 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x635 = $x634($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x635->class) && $x635->class === 'Error') {$x635->properties['file'] = '<image>/04_array.js';$x635->properties['line'] = 207;$x635->properties['column'] = 15;$x635->attributes['file'] = $x635->attributes['line'] = $x635->attributes['column'] = 0; }
throw new JSException($x635, 207, 15, '<image>/04_array.js');
}
$x632 = JS::toObject($_larger, $global);
unset($x636, $W636, $S636, $U636);
$x637 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x632, (string) 'push', 207, 15, '<image>/04_array.js');
$x636 =& $x637[0]; list(,$W636,$S636,$U636) = $x637;
unset($x638, $W638, $S638, $U638);
$x639 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 207, 20, '<image>/04_array.js');
$x638 =& $x639[0]; list(,$W638,$S638,$U638) = $x639;
if (!(is_object($x636) && isset($x636->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x642 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 207, 15, '<image>/04_array.js');
$_TypeError =& $x642[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x642;
$x643 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x644 = $x643($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x644->class) && $x644->class === 'Error') {$x644->properties['file'] = '<image>/04_array.js';$x644->properties['line'] = 207;$x644->properties['column'] = 15;$x644->attributes['file'] = $x644->attributes['line'] = $x644->attributes['column'] = 0; }
throw new JSException($x644, 207, 15, '<image>/04_array.js');
}
$x640 = $x636->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x641 = $x640($global, $x632, $x636, array($x638), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x646 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 27, '<image>/04_array.js');
$_TypeError =& $x646[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x646;
$x647 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x648 = $x647($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x648->class) && $x648->class === 'Error') {$x648->properties['file'] = '<image>/04_array.js';$x648->properties['line'] = 211;$x648->properties['column'] = 27;$x648->attributes['file'] = $x648->attributes['line'] = $x648->attributes['column'] = 0; }
throw new JSException($x648, 211, 27, '<image>/04_array.js');
}
$x645 = JS::toObject($_smaller, $global);
unset($x649, $W649, $S649, $U649);
$x650 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x645, (string) 'sort', 211, 27, '<image>/04_array.js');
$x649 =& $x650[0]; list(,$W649,$S649,$U649) = $x650;
if (!(is_object($x649) && isset($x649->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x653 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 27, '<image>/04_array.js');
$_TypeError =& $x653[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x653;
$x654 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x655 = $x654($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x655->class) && $x655->class === 'Error') {$x655->properties['file'] = '<image>/04_array.js';$x655->properties['line'] = 211;$x655->properties['column'] = 27;$x655->attributes['file'] = $x655->attributes['line'] = $x655->attributes['column'] = 0; }
throw new JSException($x655, 211, 27, '<image>/04_array.js');
}
$x651 = $x649->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x652 = $x651($global, $x645, $x649, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x652 === JS::$undefined || $x652 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x657 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 45, '<image>/04_array.js');
$_TypeError =& $x657[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x657;
$x658 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x659 = $x658($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x659->class) && $x659->class === 'Error') {$x659->properties['file'] = '<image>/04_array.js';$x659->properties['line'] = 211;$x659->properties['column'] = 45;$x659->attributes['file'] = $x659->attributes['line'] = $x659->attributes['column'] = 0; }
throw new JSException($x659, 211, 45, '<image>/04_array.js');
}
$x656 = JS::toObject($x652, $global);
unset($x660, $W660, $S660, $U660);
$x661 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x656, (string) 'concat', 211, 45, '<image>/04_array.js');
$x660 =& $x661[0]; list(,$W660,$S660,$U660) = $x661;
$x662 = clone JS::$arrayTemplate;
$x662->properties['length'] = 1;
$x662->attributes['length'] = JS::WRITABLE;
$x662->properties[0] = $_pivot;
$x662->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x664 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 66, '<image>/04_array.js');
$_TypeError =& $x664[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x664;
$x665 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x666 = $x665($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x666->class) && $x666->class === 'Error') {$x666->properties['file'] = '<image>/04_array.js';$x666->properties['line'] = 211;$x666->properties['column'] = 66;$x666->attributes['file'] = $x666->attributes['line'] = $x666->attributes['column'] = 0; }
throw new JSException($x666, 211, 66, '<image>/04_array.js');
}
$x663 = JS::toObject($_larger, $global);
unset($x667, $W667, $S667, $U667);
$x668 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x663, (string) 'sort', 211, 66, '<image>/04_array.js');
$x667 =& $x668[0]; list(,$W667,$S667,$U667) = $x668;
if (!(is_object($x667) && isset($x667->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x671 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 66, '<image>/04_array.js');
$_TypeError =& $x671[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x671;
$x672 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x673 = $x672($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x673->class) && $x673->class === 'Error') {$x673->properties['file'] = '<image>/04_array.js';$x673->properties['line'] = 211;$x673->properties['column'] = 66;$x673->attributes['file'] = $x673->attributes['line'] = $x673->attributes['column'] = 0; }
throw new JSException($x673, 211, 66, '<image>/04_array.js');
}
$x669 = $x667->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x670 = $x669($global, $x663, $x667, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x660) && isset($x660->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x676 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 45, '<image>/04_array.js');
$_TypeError =& $x676[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x676;
$x677 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x678 = $x677($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x678->class) && $x678->class === 'Error') {$x678->properties['file'] = '<image>/04_array.js';$x678->properties['line'] = 211;$x678->properties['column'] = 45;$x678->attributes['file'] = $x678->attributes['line'] = $x678->attributes['column'] = 0; }
throw new JSException($x678, 211, 45, '<image>/04_array.js');
}
$x674 = $x660->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x675 = $x674($global, $x656, $x660, array($x662, $x670), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['sorted'] = JS::$undefined; $_sorted =& $scope->properties['sorted'];
$Usorted = FALSE;
$_sorted = $x675;
for ($x679 = 0;; ++$x679) {
if ($x679 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x680, $W680, $S680, $U680);
$x681 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, (string) 'length', 213, 28, '<image>/04_array.js');
$x680 =& $x681[0]; list(,$W680,$S680,$U680) = $x681;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x680;
}
if ($x679 !== 0) {
$x682 = ++$_i;
}
$x683 = JS::toPrimitive($_i, $global);
$x684 = JS::toPrimitive($_l, $global);
$x685 = (is_string($x683) && is_string($x684) ? strcmp($x683, $x684) < 0 : (!is_nan($x686 = JS::toNumber($x683, $global)) && !is_nan($x687 = JS::toNumber($x684, $global)) && $x686 < $x687));
if (!JS::toBoolean($x685, $global)) { break; }

unset($x688, $W688, $S688, $U688);
$x689 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, (string) $_i, 214, 19, '<image>/04_array.js');
$x688 =& $x689[0]; list(,$W688,$S688,$U688) = $x689;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x690 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 214, 11, '<image>/04_array.js');
$_TypeError =& $x690[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x690;
$x691 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x692 = $x691($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x692->class) && $x692->class === 'Error') {$x692->properties['file'] = '<image>/04_array.js';$x692->properties['line'] = 214;$x692->properties['column'] = 11;$x692->attributes['file'] = $x692->attributes['line'] = $x692->attributes['column'] = 0; }
throw new JSException($x692, 214, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x693, $W693, $S693, $U693);
$x694 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_i, 214, 11, '<image>/04_array.js');
$x693 =& $x694[0]; list(,$W693,$S693,$U693) = $x694;
if ($U693 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_i] = $x693; $x693 =& $leThis->properties[$_i]; $leThis->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U693 = FALSE; $W693 = TRUE; }
if (isset($S693)) {
$x696 = $S693->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x697 = $x696($global, $leThis, $S693, array($x688), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x695 = $x697;
} else {
if (!$U693) {$x695 = $x688;if ($W693) { $x693 = $x688; }  }
else { $x695 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x550=&$scope->properties[\'arguments\'];$x550->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x550->properties[$i]=$args[$i];$x550->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'compareFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_compareFn=&$scope->properties[\'compareFn\'];$UcompareFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$x551=$_compareFn;if(!JS::toBoolean($x551,$global)){$x586=clone JS::$functionTemplate;$x586->call=\'_339fc8fcf8563d9777a12bd15b91ae1b_15\';$x586->parameters=array(0=>\'a\',1=>\'b\',);$x586->scope=$scope;$x586->properties[\'prototype\']=clone JS::$objectTemplate;$x586->attributes[\'prototype\']=JS::WRITABLE;$x586->properties[\'prototype\']->properties[\'constructor\']=$x586;$x586->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x586->properties[\'length\']=2;$x586->attributes[\'length\']=0;$x551=$x586;}if($UcompareFn){$global->properties[\'compareFn\']=$_compareFn;$_compareFn=&$global->properties[\'compareFn\'];}$_compareFn=$x551;unset($x590,$W590,$S590,$U590);$x591=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',195,10,\'<image>/04_array.js\');$x590=&$x591[0];list(,$W590,$S590,$U590)=$x591;$x587=JS::toPrimitive($x590,$global);$x588=JS::toPrimitive(2,$global);$x589=(is_string($x587)&&is_string($x588)?strcmp($x587,$x588)<0:(!is_nan($x592=JS::toNumber($x587,$global))&&!is_nan($x593=JS::toNumber($x588,$global))&&$x592<$x593));if(JS::toBoolean($x589,$global)){return$leThis;}$scope->properties[\'pivot\']=JS::$undefined;$_pivot=&$scope->properties[\'pivot\'];$Upivot=FALSE;$_pivot=JS::$undefined;$x594=clone JS::$arrayTemplate;$x594->properties[\'length\']=0;$x594->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'smaller\']=JS::$undefined;$_smaller=&$scope->properties[\'smaller\'];$Usmaller=FALSE;$_smaller=$x594;$x595=clone JS::$arrayTemplate;$x595->properties[\'length\']=0;$x595->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'larger\']=JS::$undefined;$_larger=&$scope->properties[\'larger\'];$Ularger=FALSE;$_larger=$x595;unset($x596,$W596,$S596,$U596);$x597=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)0,201,14,\'<image>/04_array.js\');$x596=&$x597[0];list(,$W596,$S596,$U596)=$x597;if($Upivot){$global->properties[\'pivot\']=$_pivot;$_pivot=&$global->properties[\'pivot\'];}$_pivot=$x596;for($x598=0;;++$x598){if($x598===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x599,$W599,$S599,$U599);$x600=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',203,26,\'<image>/04_array.js\');$x599=&$x600[0];list(,$W599,$S599,$U599)=$x600;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x599;}if($x598!==0){$x601=++$_i;}$x602=JS::toPrimitive($_i,$global);$x603=JS::toPrimitive($_l,$global);$x604=(is_string($x602)&&is_string($x603)?strcmp($x602,$x603)<0:(!is_nan($x605=JS::toNumber($x602,$global))&&!is_nan($x606=JS::toNumber($x603,$global))&&$x605<$x606));if(!JS::toBoolean($x604,$global)){break;}unset($x610,$W610,$S610,$U610);$x611=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,204,21,\'<image>/04_array.js\');$x610=&$x611[0];list(,$W610,$S610,$U610)=$x611;if(!(is_object($_compareFn)&&isset($_compareFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x614=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',204,16,\'<image>/04_array.js\');$_TypeError=&$x614[0];list(,$WTypeError,$STypeError,$UTypeError)=$x614;$x615=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x616=$x615($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x616->class)&&$x616->class===\'Error\'){$x616->properties[\'file\']=\'<image>/04_array.js\';$x616->properties[\'line\']=204;$x616->properties[\'column\']=16;$x616->attributes[\'file\']=$x616->attributes[\'line\']=$x616->attributes[\'column\']=0;}throw new JSException($x616,204,16,\'<image>/04_array.js\');}$x612=$_compareFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x613=$x612($global,$global,$_compareFn,array($x610,$_pivot),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x607=JS::toPrimitive($x613,$global);$x608=JS::toPrimitive(0,$global);$x609=(is_string($x607)&&is_string($x608)?strcmp($x607,$x608)<0:(!is_nan($x617=JS::toNumber($x607,$global))&&!is_nan($x618=JS::toNumber($x608,$global))&&$x617<$x618));if(JS::toBoolean($x609,$global)){if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x620=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',205,16,\'<image>/04_array.js\');$_TypeError=&$x620[0];list(,$WTypeError,$STypeError,$UTypeError)=$x620;$x621=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x622=$x621($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x622->class)&&$x622->class===\'Error\'){$x622->properties[\'file\']=\'<image>/04_array.js\';$x622->properties[\'line\']=205;$x622->properties[\'column\']=16;$x622->attributes[\'file\']=$x622->attributes[\'line\']=$x622->attributes[\'column\']=0;}throw new JSException($x622,205,16,\'<image>/04_array.js\');}$x619=JS::toObject($_smaller,$global);unset($x623,$W623,$S623,$U623);$x624=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x619,(string)\'push\',205,16,\'<image>/04_array.js\');$x623=&$x624[0];list(,$W623,$S623,$U623)=$x624;unset($x625,$W625,$S625,$U625);$x626=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,205,21,\'<image>/04_array.js\');$x625=&$x626[0];list(,$W625,$S625,$U625)=$x626;if(!(is_object($x623)&&isset($x623->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x629=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',205,16,\'<image>/04_array.js\');$_TypeError=&$x629[0];list(,$WTypeError,$STypeError,$UTypeError)=$x629;$x630=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x631=$x630($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x631->class)&&$x631->class===\'Error\'){$x631->properties[\'file\']=\'<image>/04_array.js\';$x631->properties[\'line\']=205;$x631->properties[\'column\']=16;$x631->attributes[\'file\']=$x631->attributes[\'line\']=$x631->attributes[\'column\']=0;}throw new JSException($x631,205,16,\'<image>/04_array.js\');}$x627=$x623->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x628=$x627($global,$x619,$x623,array($x625),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x633=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',207,15,\'<image>/04_array.js\');$_TypeError=&$x633[0];list(,$WTypeError,$STypeError,$UTypeError)=$x633;$x634=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x635=$x634($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x635->class)&&$x635->class===\'Error\'){$x635->properties[\'file\']=\'<image>/04_array.js\';$x635->properties[\'line\']=207;$x635->properties[\'column\']=15;$x635->attributes[\'file\']=$x635->attributes[\'line\']=$x635->attributes[\'column\']=0;}throw new JSException($x635,207,15,\'<image>/04_array.js\');}$x632=JS::toObject($_larger,$global);unset($x636,$W636,$S636,$U636);$x637=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x632,(string)\'push\',207,15,\'<image>/04_array.js\');$x636=&$x637[0];list(,$W636,$S636,$U636)=$x637;unset($x638,$W638,$S638,$U638);$x639=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,207,20,\'<image>/04_array.js\');$x638=&$x639[0];list(,$W638,$S638,$U638)=$x639;if(!(is_object($x636)&&isset($x636->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x642=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',207,15,\'<image>/04_array.js\');$_TypeError=&$x642[0];list(,$WTypeError,$STypeError,$UTypeError)=$x642;$x643=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x644=$x643($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x644->class)&&$x644->class===\'Error\'){$x644->properties[\'file\']=\'<image>/04_array.js\';$x644->properties[\'line\']=207;$x644->properties[\'column\']=15;$x644->attributes[\'file\']=$x644->attributes[\'line\']=$x644->attributes[\'column\']=0;}throw new JSException($x644,207,15,\'<image>/04_array.js\');}$x640=$x636->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x641=$x640($global,$x632,$x636,array($x638),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x646=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,27,\'<image>/04_array.js\');$_TypeError=&$x646[0];list(,$WTypeError,$STypeError,$UTypeError)=$x646;$x647=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x648=$x647($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x648->class)&&$x648->class===\'Error\'){$x648->properties[\'file\']=\'<image>/04_array.js\';$x648->properties[\'line\']=211;$x648->properties[\'column\']=27;$x648->attributes[\'file\']=$x648->attributes[\'line\']=$x648->attributes[\'column\']=0;}throw new JSException($x648,211,27,\'<image>/04_array.js\');}$x645=JS::toObject($_smaller,$global);unset($x649,$W649,$S649,$U649);$x650=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x645,(string)\'sort\',211,27,\'<image>/04_array.js\');$x649=&$x650[0];list(,$W649,$S649,$U649)=$x650;if(!(is_object($x649)&&isset($x649->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x653=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,27,\'<image>/04_array.js\');$_TypeError=&$x653[0];list(,$WTypeError,$STypeError,$UTypeError)=$x653;$x654=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x655=$x654($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x655->class)&&$x655->class===\'Error\'){$x655->properties[\'file\']=\'<image>/04_array.js\';$x655->properties[\'line\']=211;$x655->properties[\'column\']=27;$x655->attributes[\'file\']=$x655->attributes[\'line\']=$x655->attributes[\'column\']=0;}throw new JSException($x655,211,27,\'<image>/04_array.js\');}$x651=$x649->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x652=$x651($global,$x645,$x649,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x652===JS::$undefined||$x652===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x657=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,45,\'<image>/04_array.js\');$_TypeError=&$x657[0];list(,$WTypeError,$STypeError,$UTypeError)=$x657;$x658=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x659=$x658($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x659->class)&&$x659->class===\'Error\'){$x659->properties[\'file\']=\'<image>/04_array.js\';$x659->properties[\'line\']=211;$x659->properties[\'column\']=45;$x659->attributes[\'file\']=$x659->attributes[\'line\']=$x659->attributes[\'column\']=0;}throw new JSException($x659,211,45,\'<image>/04_array.js\');}$x656=JS::toObject($x652,$global);unset($x660,$W660,$S660,$U660);$x661=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x656,(string)\'concat\',211,45,\'<image>/04_array.js\');$x660=&$x661[0];list(,$W660,$S660,$U660)=$x661;$x662=clone JS::$arrayTemplate;$x662->properties[\'length\']=1;$x662->attributes[\'length\']=JS::WRITABLE;$x662->properties[0]=$_pivot;$x662->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x664=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,66,\'<image>/04_array.js\');$_TypeError=&$x664[0];list(,$WTypeError,$STypeError,$UTypeError)=$x664;$x665=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x666=$x665($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x666->class)&&$x666->class===\'Error\'){$x666->properties[\'file\']=\'<image>/04_array.js\';$x666->properties[\'line\']=211;$x666->properties[\'column\']=66;$x666->attributes[\'file\']=$x666->attributes[\'line\']=$x666->attributes[\'column\']=0;}throw new JSException($x666,211,66,\'<image>/04_array.js\');}$x663=JS::toObject($_larger,$global);unset($x667,$W667,$S667,$U667);$x668=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x663,(string)\'sort\',211,66,\'<image>/04_array.js\');$x667=&$x668[0];list(,$W667,$S667,$U667)=$x668;if(!(is_object($x667)&&isset($x667->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x671=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,66,\'<image>/04_array.js\');$_TypeError=&$x671[0];list(,$WTypeError,$STypeError,$UTypeError)=$x671;$x672=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x673=$x672($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x673->class)&&$x673->class===\'Error\'){$x673->properties[\'file\']=\'<image>/04_array.js\';$x673->properties[\'line\']=211;$x673->properties[\'column\']=66;$x673->attributes[\'file\']=$x673->attributes[\'line\']=$x673->attributes[\'column\']=0;}throw new JSException($x673,211,66,\'<image>/04_array.js\');}$x669=$x667->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x670=$x669($global,$x663,$x667,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x660)&&isset($x660->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x676=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,45,\'<image>/04_array.js\');$_TypeError=&$x676[0];list(,$WTypeError,$STypeError,$UTypeError)=$x676;$x677=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x678=$x677($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x678->class)&&$x678->class===\'Error\'){$x678->properties[\'file\']=\'<image>/04_array.js\';$x678->properties[\'line\']=211;$x678->properties[\'column\']=45;$x678->attributes[\'file\']=$x678->attributes[\'line\']=$x678->attributes[\'column\']=0;}throw new JSException($x678,211,45,\'<image>/04_array.js\');}$x674=$x660->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x675=$x674($global,$x656,$x660,array($x662,$x670),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'sorted\']=JS::$undefined;$_sorted=&$scope->properties[\'sorted\'];$Usorted=FALSE;$_sorted=$x675;for($x679=0;;++$x679){if($x679===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x680,$W680,$S680,$U680);$x681=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,(string)\'length\',213,28,\'<image>/04_array.js\');$x680=&$x681[0];list(,$W680,$S680,$U680)=$x681;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x680;}if($x679!==0){$x682=++$_i;}$x683=JS::toPrimitive($_i,$global);$x684=JS::toPrimitive($_l,$global);$x685=(is_string($x683)&&is_string($x684)?strcmp($x683,$x684)<0:(!is_nan($x686=JS::toNumber($x683,$global))&&!is_nan($x687=JS::toNumber($x684,$global))&&$x686<$x687));if(!JS::toBoolean($x685,$global)){break;}unset($x688,$W688,$S688,$U688);$x689=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,(string)$_i,214,19,\'<image>/04_array.js\');$x688=&$x689[0];list(,$W688,$S688,$U688)=$x689;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x690=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',214,11,\'<image>/04_array.js\');$_TypeError=&$x690[0];list(,$WTypeError,$STypeError,$UTypeError)=$x690;$x691=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x692=$x691($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x692->class)&&$x692->class===\'Error\'){$x692->properties[\'file\']=\'<image>/04_array.js\';$x692->properties[\'line\']=214;$x692->properties[\'column\']=11;$x692->attributes[\'file\']=$x692->attributes[\'line\']=$x692->attributes[\'column\']=0;}throw new JSException($x692,214,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x693,$W693,$S693,$U693);$x694=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_i,214,11,\'<image>/04_array.js\');$x693=&$x694[0];list(,$W693,$S693,$U693)=$x694;if($U693&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_i]=$x693;$x693=&$leThis->properties[$_i];$leThis->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U693=FALSE;$W693=TRUE;}if(isset($S693)){$x696=$S693->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x697=$x696($global,$leThis,$S693,array($x688),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x695=$x697;}else{if(!$U693){$x695=$x688;if($W693){$x693=$x688;}}else{$x695=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x710 =& $scope->properties['arguments'];
$x710->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x710->properties[$i] = $args[$i];
$x710->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['deleteCount'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_deleteCount =& $scope->properties['deleteCount'];
$UdeleteCount = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = JS::$undefined;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = JS::$undefined;
$x711 = clone JS::$arrayTemplate;
$x711->properties['length'] = 0;
$x711->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x711;
$A = array();
for ($x712 = 0;; ++$x712) {
if ($x712 === 0) {
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = 0;
unset($x713, $W713, $S713, $U713);
$x714 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 225, 22, '<image>/04_array.js');
$x713 =& $x714[0]; list(,$W713,$S713,$U713) = $x714;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x713;
}
if ($x712 !== 0) {
$x715 = ++$_i;
}
$x716 = JS::toPrimitive($_i, $global);
$x717 = JS::toPrimitive($_l, $global);
$x718 = (is_string($x716) && is_string($x717) ? strcmp($x716, $x717) < 0 : (!is_nan($x719 = JS::toNumber($x716, $global)) && !is_nan($x720 = JS::toNumber($x717, $global)) && $x719 < $x720));
if (!JS::toBoolean($x718, $global)) { break; }

unset($x721, $W721, $S721, $U721);
$x722 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 226, 14, '<image>/04_array.js');
$x721 =& $x722[0]; list(,$W721,$S721,$U721) = $x722;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x721;
$A[] =$_item;
if (!array_key_exists($_i, $leThis->attributes)) { unset($leThis->properties[$_i]); $x723 = TRUE; }
else if ($leThis->attributes[$_i] & JS::CONFIGURABLE) { unset($leThis->properties[$_i], $leThis->attributes[$_i], $leThis->getters[$_i], $leThis->setters[$_i]); $x723 = TRUE; }
else { $x723 = FALSE; };;
};
$x724 = (((gettype($_deleteCount) === gettype(JS::$undefined) && $_deleteCount === JS::$undefined))|| (((is_float($_deleteCount) || is_int($_deleteCount)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_deleteCount == JS::$undefined));
if (JS::toBoolean($x724, $global)) {

$C = array_splice($A,$_start);;
}
else {
$B = array();
for ($x725 = 0;; ++$x725) {
if ($x725 === 0) {
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = 2;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x726 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 236, 19, '<image>/04_array.js');
$_arguments =& $x726[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x726;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x727 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 236, 19, '<image>/04_array.js');
$_ReferenceError =& $x727[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x727;
$x728 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 236, 19);
$x729 = $x728($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x729->class) && $x729->class === 'Error') {$x729->properties['file'] = '<image>/04_array.js';$x729->properties['line'] = 236;$x729->properties['column'] = 19;$x729->attributes['file'] = $x729->attributes['line'] = $x729->attributes['column'] = 0; }
throw new JSException($x729, 236, 19, '<image>/04_array.js');
}
unset($x730, $W730, $S730, $U730);
$x731 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 236, 28, '<image>/04_array.js');
$x730 =& $x731[0]; list(,$W730,$S730,$U730) = $x731;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x730;
}
if ($x725 !== 0) {
$x732 = ++$_i;
}
$x733 = JS::toPrimitive($_i, $global);
$x734 = JS::toPrimitive($_l, $global);
$x735 = (is_string($x733) && is_string($x734) ? strcmp($x733, $x734) < 0 : (!is_nan($x736 = JS::toNumber($x733, $global)) && !is_nan($x737 = JS::toNumber($x734, $global)) && $x736 < $x737));
if (!JS::toBoolean($x735, $global)) { break; }

unset($x738, $W738, $S738, $U738);
$x739 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 237, 20, '<image>/04_array.js');
$x738 =& $x739[0]; list(,$W738,$S738,$U738) = $x739;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x738;
$B[] =$_item;;
};
$C = array_splice($A,$_start,$_deleteCount, $B);;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x740 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 244, 14, '<image>/04_array.js');
$_TypeError =& $x740[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x740;
$x741 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x742 = $x741($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x742->class) && $x742->class === 'Error') {$x742->properties['file'] = '<image>/04_array.js';$x742->properties['line'] = 244;$x742->properties['column'] = 14;$x742->attributes['file'] = $x742->attributes['line'] = $x742->attributes['column'] = 0; }
throw new JSException($x742, 244, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x743, $W743, $S743, $U743);
$x744 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) 'length', 244, 14, '<image>/04_array.js');
$x743 =& $x744[0]; list(,$W743,$S743,$U743) = $x744;
if ($U743 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['length'] = $x743; $x743 =& $leThis->properties['length']; $leThis->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U743 = FALSE; $W743 = TRUE; }
if (isset($S743)) {
$x746 = $S743->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x747 = $x746($global, $leThis, $S743, array(0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x745 = $x747;
} else {
if (!$U743) {$x745 = 0;if ($W743) { $x743 = 0; }  }
else { $x745 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
foreach ($A as $V) {;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x749 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 247, 12, '<image>/04_array.js');
$_TypeError =& $x749[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x749;
$x750 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x751 = $x750($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x751->class) && $x751->class === 'Error') {$x751->properties['file'] = '<image>/04_array.js';$x751->properties['line'] = 247;$x751->properties['column'] = 12;$x751->attributes['file'] = $x751->attributes['line'] = $x751->attributes['column'] = 0; }
throw new JSException($x751, 247, 12, '<image>/04_array.js');
}
$x748 = JS::toObject($leThis, $global);
unset($x752, $W752, $S752, $U752);
$x753 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x748, (string) 'push', 247, 12, '<image>/04_array.js');
$x752 =& $x753[0]; list(,$W752,$S752,$U752) = $x753;
if (!(is_object($x752) && isset($x752->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x756 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 247, 12, '<image>/04_array.js');
$_TypeError =& $x756[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x756;
$x757 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x758 = $x757($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x758->class) && $x758->class === 'Error') {$x758->properties['file'] = '<image>/04_array.js';$x758->properties['line'] = 247;$x758->properties['column'] = 12;$x758->attributes['file'] = $x758->attributes['line'] = $x758->attributes['column'] = 0; }
throw new JSException($x758, 247, 12, '<image>/04_array.js');
}
$x754 = $x752->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x755 = $x754($global, $x748, $x752, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
foreach ($C as $I => $V) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x760 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 251, 19, '<image>/04_array.js');
$_TypeError =& $x760[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x760;
$x761 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x762 = $x761($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x762->class) && $x762->class === 'Error') {$x762->properties['file'] = '<image>/04_array.js';$x762->properties['line'] = 251;$x762->properties['column'] = 19;$x762->attributes['file'] = $x762->attributes['line'] = $x762->attributes['column'] = 0; }
throw new JSException($x762, 251, 19, '<image>/04_array.js');
}
$x759 = JS::toObject($_returnArray, $global);
unset($x763, $W763, $S763, $U763);
$x764 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x759, (string) 'push', 251, 19, '<image>/04_array.js');
$x763 =& $x764[0]; list(,$W763,$S763,$U763) = $x764;
if (!(is_object($x763) && isset($x763->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x767 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 251, 19, '<image>/04_array.js');
$_TypeError =& $x767[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x767;
$x768 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x769 = $x768($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x769->class) && $x769->class === 'Error') {$x769->properties['file'] = '<image>/04_array.js';$x769->properties['line'] = 251;$x769->properties['column'] = 19;$x769->attributes['file'] = $x769->attributes['line'] = $x769->attributes['column'] = 0; }
throw new JSException($x769, 251, 19, '<image>/04_array.js');
}
$x765 = $x763->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x766 = $x765($global, $x759, $x763, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x710=&$scope->properties[\'arguments\'];$x710->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x710->properties[$i]=$args[$i];$x710->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'deleteCount\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_deleteCount=&$scope->properties[\'deleteCount\'];$UdeleteCount=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=JS::$undefined;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;$x711=clone JS::$arrayTemplate;$x711->properties[\'length\']=0;$x711->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x711;$A=array();for($x712=0;;++$x712){if($x712===0){if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=0;unset($x713,$W713,$S713,$U713);$x714=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',225,22,\'<image>/04_array.js\');$x713=&$x714[0];list(,$W713,$S713,$U713)=$x714;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x713;}if($x712!==0){$x715=++$_i;}$x716=JS::toPrimitive($_i,$global);$x717=JS::toPrimitive($_l,$global);$x718=(is_string($x716)&&is_string($x717)?strcmp($x716,$x717)<0:(!is_nan($x719=JS::toNumber($x716,$global))&&!is_nan($x720=JS::toNumber($x717,$global))&&$x719<$x720));if(!JS::toBoolean($x718,$global)){break;}unset($x721,$W721,$S721,$U721);$x722=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,226,14,\'<image>/04_array.js\');$x721=&$x722[0];list(,$W721,$S721,$U721)=$x722;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x721;$A[]=$_item;if(!array_key_exists($_i,$leThis->attributes)){unset($leThis->properties[$_i]);$x723=TRUE;}else if($leThis->attributes[$_i]&JS::CONFIGURABLE){unset($leThis->properties[$_i],$leThis->attributes[$_i],$leThis->getters[$_i],$leThis->setters[$_i]);$x723=TRUE;}else{$x723=FALSE;}}$x724=(((gettype($_deleteCount)===gettype(JS::$undefined)&&$_deleteCount===JS::$undefined))||(((is_float($_deleteCount)||is_int($_deleteCount))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_deleteCount==JS::$undefined));if(JS::toBoolean($x724,$global)){$C=array_splice($A,$_start);}else{$B=array();for($x725=0;;++$x725){if($x725===0){if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=2;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x726=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',236,19,\'<image>/04_array.js\');$_arguments=&$x726[0];list(,$Warguments,$Sarguments,$Uarguments)=$x726;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x727=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',236,19,\'<image>/04_array.js\');$_ReferenceError=&$x727[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x727;$x728=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',236,19);$x729=$x728($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x729->class)&&$x729->class===\'Error\'){$x729->properties[\'file\']=\'<image>/04_array.js\';$x729->properties[\'line\']=236;$x729->properties[\'column\']=19;$x729->attributes[\'file\']=$x729->attributes[\'line\']=$x729->attributes[\'column\']=0;}throw new JSException($x729,236,19,\'<image>/04_array.js\');}unset($x730,$W730,$S730,$U730);$x731=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',236,28,\'<image>/04_array.js\');$x730=&$x731[0];list(,$W730,$S730,$U730)=$x731;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x730;}if($x725!==0){$x732=++$_i;}$x733=JS::toPrimitive($_i,$global);$x734=JS::toPrimitive($_l,$global);$x735=(is_string($x733)&&is_string($x734)?strcmp($x733,$x734)<0:(!is_nan($x736=JS::toNumber($x733,$global))&&!is_nan($x737=JS::toNumber($x734,$global))&&$x736<$x737));if(!JS::toBoolean($x735,$global)){break;}unset($x738,$W738,$S738,$U738);$x739=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,237,20,\'<image>/04_array.js\');$x738=&$x739[0];list(,$W738,$S738,$U738)=$x739;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x738;$B[]=$_item;}$C=array_splice($A,$_start,$_deleteCount,$B);}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x740=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',244,14,\'<image>/04_array.js\');$_TypeError=&$x740[0];list(,$WTypeError,$STypeError,$UTypeError)=$x740;$x741=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x742=$x741($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x742->class)&&$x742->class===\'Error\'){$x742->properties[\'file\']=\'<image>/04_array.js\';$x742->properties[\'line\']=244;$x742->properties[\'column\']=14;$x742->attributes[\'file\']=$x742->attributes[\'line\']=$x742->attributes[\'column\']=0;}throw new JSException($x742,244,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x743,$W743,$S743,$U743);$x744=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)\'length\',244,14,\'<image>/04_array.js\');$x743=&$x744[0];list(,$W743,$S743,$U743)=$x744;if($U743&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'length\']=$x743;$x743=&$leThis->properties[\'length\'];$leThis->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U743=FALSE;$W743=TRUE;}if(isset($S743)){$x746=$S743->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x747=$x746($global,$leThis,$S743,array(0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x745=$x747;}else{if(!$U743){$x745=0;if($W743){$x743=0;}}else{$x745=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}foreach($A as$V){;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x749=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',247,12,\'<image>/04_array.js\');$_TypeError=&$x749[0];list(,$WTypeError,$STypeError,$UTypeError)=$x749;$x750=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x751=$x750($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x751->class)&&$x751->class===\'Error\'){$x751->properties[\'file\']=\'<image>/04_array.js\';$x751->properties[\'line\']=247;$x751->properties[\'column\']=12;$x751->attributes[\'file\']=$x751->attributes[\'line\']=$x751->attributes[\'column\']=0;}throw new JSException($x751,247,12,\'<image>/04_array.js\');}$x748=JS::toObject($leThis,$global);unset($x752,$W752,$S752,$U752);$x753=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x748,(string)\'push\',247,12,\'<image>/04_array.js\');$x752=&$x753[0];list(,$W752,$S752,$U752)=$x753;if(!(is_object($x752)&&isset($x752->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x756=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',247,12,\'<image>/04_array.js\');$_TypeError=&$x756[0];list(,$WTypeError,$STypeError,$UTypeError)=$x756;$x757=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x758=$x757($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x758->class)&&$x758->class===\'Error\'){$x758->properties[\'file\']=\'<image>/04_array.js\';$x758->properties[\'line\']=247;$x758->properties[\'column\']=12;$x758->attributes[\'file\']=$x758->attributes[\'line\']=$x758->attributes[\'column\']=0;}throw new JSException($x758,247,12,\'<image>/04_array.js\');}$x754=$x752->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x755=$x754($global,$x748,$x752,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}foreach($C as$I=>$V){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x760=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',251,19,\'<image>/04_array.js\');$_TypeError=&$x760[0];list(,$WTypeError,$STypeError,$UTypeError)=$x760;$x761=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x762=$x761($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x762->class)&&$x762->class===\'Error\'){$x762->properties[\'file\']=\'<image>/04_array.js\';$x762->properties[\'line\']=251;$x762->properties[\'column\']=19;$x762->attributes[\'file\']=$x762->attributes[\'line\']=$x762->attributes[\'column\']=0;}throw new JSException($x762,251,19,\'<image>/04_array.js\');}$x759=JS::toObject($_returnArray,$global);unset($x763,$W763,$S763,$U763);$x764=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x759,(string)\'push\',251,19,\'<image>/04_array.js\');$x763=&$x764[0];list(,$W763,$S763,$U763)=$x764;if(!(is_object($x763)&&isset($x763->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x767=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',251,19,\'<image>/04_array.js\');$_TypeError=&$x767[0];list(,$WTypeError,$STypeError,$UTypeError)=$x767;$x768=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x769=$x768($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x769->class)&&$x769->class===\'Error\'){$x769->properties[\'file\']=\'<image>/04_array.js\';$x769->properties[\'line\']=251;$x769->properties[\'column\']=19;$x769->attributes[\'file\']=$x769->attributes[\'line\']=$x769->attributes[\'column\']=0;}throw new JSException($x769,251,19,\'<image>/04_array.js\');}$x765=$x763->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x766=$x765($global,$x759,$x763,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_17($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x783 = 0;; ++$x783) {
if ($x783 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x782 =& $scope->properties['arguments'];
$x782->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x782->properties[$i] = $args[$i];
$x782->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x784, $W784, $S784, $U784);
$x785 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 258, 19, '<image>/04_array.js');
$x784 =& $x785[0]; list(,$W784,$S784,$U784) = $x785;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x784, $global) - JS::toNumber(1, $global));
}
if ($x783 !== 0) {
$x786 = --$_i;
}
$x787 = JS::toPrimitive($_i, $global);
$x788 = JS::toPrimitive(0, $global);
$x789 = !(is_string($x787) && is_string($x788) ? strcmp($x787, $x788) < 0 : (!is_nan($x790 = JS::toNumber($x787, $global)) && !is_nan($x791 = JS::toNumber($x788, $global)) && $x790 < $x791));
if (!JS::toBoolean($x789, $global)) { break; }

unset($x792, $W792, $S792, $U792);
$x793 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 259, 36, '<image>/04_array.js');
$x792 =& $x793[0]; list(,$W792,$S792,$U792) = $x793;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x796 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 259, 12, '<image>/04_array.js');
$_arguments =& $x796[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x796;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x797 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 259, 12, '<image>/04_array.js');
$_ReferenceError =& $x797[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x797;
$x798 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 12);
$x799 = $x798($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x799->class) && $x799->class === 'Error') {$x799->properties['file'] = '<image>/04_array.js';$x799->properties['line'] = 259;$x799->properties['column'] = 12;$x799->attributes['file'] = $x799->attributes['line'] = $x799->attributes['column'] = 0; }
throw new JSException($x799, 259, 12, '<image>/04_array.js');
}
unset($x800, $W800, $S800, $U800);
$x801 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 259, 21, '<image>/04_array.js');
$x800 =& $x801[0]; list(,$W800,$S800,$U800) = $x801;
$x794 = JS::toPrimitive($_i, $global);
$x795 = JS::toPrimitive($x800, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x802 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 259, 30, '<image>/04_array.js');
$_TypeError =& $x802[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x802;
$x803 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x804 = $x803($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x804->class) && $x804->class === 'Error') {$x804->properties['file'] = '<image>/04_array.js';$x804->properties['line'] = 259;$x804->properties['column'] = 30;$x804->attributes['file'] = $x804->attributes['line'] = $x804->attributes['column'] = 0; }
throw new JSException($x804, 259, 30, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x805, $W805, $S805, $U805);
$x806 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) (is_string($x794) || is_string($x795) ? JS::toString($x794, $global) . JS::toString($x795, $global) : JS::toNumber($x794, $global) + JS::toNumber($x795, $global)), 259, 30, '<image>/04_array.js');
$x805 =& $x806[0]; list(,$W805,$S805,$U805) = $x806;
if ($U805 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[(is_string($x794) || is_string($x795) ? JS::toString($x794, $global) . JS::toString($x795, $global) : JS::toNumber($x794, $global) + JS::toNumber($x795, $global))] = $x805; $x805 =& $leThis->properties[(is_string($x794) || is_string($x795) ? JS::toString($x794, $global) . JS::toString($x795, $global) : JS::toNumber($x794, $global) + JS::toNumber($x795, $global))]; $leThis->attributes[(is_string($x794) || is_string($x795) ? JS::toString($x794, $global) . JS::toString($x795, $global) : JS::toNumber($x794, $global) + JS::toNumber($x795, $global))] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U805 = FALSE; $W805 = TRUE; }
if (isset($S805)) {
$x808 = $S805->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x809 = $x808($global, $leThis, $S805, array($x792), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x807 = $x809;
} else {
if (!$U805) {$x807 = $x792;if ($W805) { $x805 = $x792; }  }
else { $x807 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int((is_string($x794) || is_string($x795) ? JS::toString($x794, $global) . JS::toString($x795, $global) : JS::toNumber($x794, $global) + JS::toNumber($x795, $global))) && (is_string($x794) || is_string($x795) ? JS::toString($x794, $global) . JS::toString($x795, $global) : JS::toNumber($x794, $global) + JS::toNumber($x795, $global)) >= $leThis->properties['length']) { $leThis->properties['length'] = (is_string($x794) || is_string($x795) ? JS::toString($x794, $global) . JS::toString($x795, $global) : JS::toNumber($x794, $global) + JS::toNumber($x795, $global)) + 1; };
};
for ($x810 = 0;; ++$x810) {
if ($x810 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x811 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 262, 22, '<image>/04_array.js');
$_arguments =& $x811[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x811;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x812 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 262, 22, '<image>/04_array.js');
$_ReferenceError =& $x812[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x812;
$x813 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 262, 22);
$x814 = $x813($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x814->class) && $x814->class === 'Error') {$x814->properties['file'] = '<image>/04_array.js';$x814->properties['line'] = 262;$x814->properties['column'] = 22;$x814->attributes['file'] = $x814->attributes['line'] = $x814->attributes['column'] = 0; }
throw new JSException($x814, 262, 22, '<image>/04_array.js');
}
unset($x815, $W815, $S815, $U815);
$x816 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 262, 31, '<image>/04_array.js');
$x815 =& $x816[0]; list(,$W815,$S815,$U815) = $x816;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x815;
}
if ($x810 !== 0) {
$x817 = ++$_i;
}
$x818 = JS::toPrimitive($_i, $global);
$x819 = JS::toPrimitive($_l, $global);
$x820 = (is_string($x818) && is_string($x819) ? strcmp($x818, $x819) < 0 : (!is_nan($x821 = JS::toNumber($x818, $global)) && !is_nan($x822 = JS::toNumber($x819, $global)) && $x821 < $x822));
if (!JS::toBoolean($x820, $global)) { break; }

unset($x823, $W823, $S823, $U823);
$x824 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 263, 22, '<image>/04_array.js');
$x823 =& $x824[0]; list(,$W823,$S823,$U823) = $x824;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x825 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 263, 11, '<image>/04_array.js');
$_TypeError =& $x825[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x825;
$x826 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x827 = $x826($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x827->class) && $x827->class === 'Error') {$x827->properties['file'] = '<image>/04_array.js';$x827->properties['line'] = 263;$x827->properties['column'] = 11;$x827->attributes['file'] = $x827->attributes['line'] = $x827->attributes['column'] = 0; }
throw new JSException($x827, 263, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x828, $W828, $S828, $U828);
$x829 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_i, 263, 11, '<image>/04_array.js');
$x828 =& $x829[0]; list(,$W828,$S828,$U828) = $x829;
if ($U828 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_i] = $x828; $x828 =& $leThis->properties[$_i]; $leThis->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U828 = FALSE; $W828 = TRUE; }
if (isset($S828)) {
$x831 = $S828->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x832 = $x831($global, $leThis, $S828, array($x823), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x830 = $x832;
} else {
if (!$U828) {$x830 = $x823;if ($W828) { $x828 = $x823; }  }
else { $x830 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
unset($x833, $W833, $S833, $U833);
$x834 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 266, 13, '<image>/04_array.js');
$x833 =& $x834[0]; list(,$W833,$S833,$U833) = $x834;
return $x833;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_17($global,$leThis,$fn,$args,$constructor=FALSE){for($x783=0;;++$x783){if($x783===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x782=&$scope->properties[\'arguments\'];$x782->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x782->properties[$i]=$args[$i];$x782->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x784,$W784,$S784,$U784);$x785=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',258,19,\'<image>/04_array.js\');$x784=&$x785[0];list(,$W784,$S784,$U784)=$x785;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x784,$global)-JS::toNumber(1,$global));}if($x783!==0){$x786=--$_i;}$x787=JS::toPrimitive($_i,$global);$x788=JS::toPrimitive(0,$global);$x789=!(is_string($x787)&&is_string($x788)?strcmp($x787,$x788)<0:(!is_nan($x790=JS::toNumber($x787,$global))&&!is_nan($x791=JS::toNumber($x788,$global))&&$x790<$x791));if(!JS::toBoolean($x789,$global)){break;}unset($x792,$W792,$S792,$U792);$x793=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,259,36,\'<image>/04_array.js\');$x792=&$x793[0];list(,$W792,$S792,$U792)=$x793;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x796=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',259,12,\'<image>/04_array.js\');$_arguments=&$x796[0];list(,$Warguments,$Sarguments,$Uarguments)=$x796;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x797=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',259,12,\'<image>/04_array.js\');$_ReferenceError=&$x797[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x797;$x798=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,12);$x799=$x798($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x799->class)&&$x799->class===\'Error\'){$x799->properties[\'file\']=\'<image>/04_array.js\';$x799->properties[\'line\']=259;$x799->properties[\'column\']=12;$x799->attributes[\'file\']=$x799->attributes[\'line\']=$x799->attributes[\'column\']=0;}throw new JSException($x799,259,12,\'<image>/04_array.js\');}unset($x800,$W800,$S800,$U800);$x801=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',259,21,\'<image>/04_array.js\');$x800=&$x801[0];list(,$W800,$S800,$U800)=$x801;$x794=JS::toPrimitive($_i,$global);$x795=JS::toPrimitive($x800,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x802=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',259,30,\'<image>/04_array.js\');$_TypeError=&$x802[0];list(,$WTypeError,$STypeError,$UTypeError)=$x802;$x803=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x804=$x803($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x804->class)&&$x804->class===\'Error\'){$x804->properties[\'file\']=\'<image>/04_array.js\';$x804->properties[\'line\']=259;$x804->properties[\'column\']=30;$x804->attributes[\'file\']=$x804->attributes[\'line\']=$x804->attributes[\'column\']=0;}throw new JSException($x804,259,30,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x805,$W805,$S805,$U805);$x806=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)(is_string($x794)||is_string($x795)?JS::toString($x794,$global).JS::toString($x795,$global):JS::toNumber($x794,$global)+JS::toNumber($x795,$global)),259,30,\'<image>/04_array.js\');$x805=&$x806[0];list(,$W805,$S805,$U805)=$x806;if($U805&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[(is_string($x794)||is_string($x795)?JS::toString($x794,$global).JS::toString($x795,$global):JS::toNumber($x794,$global)+JS::toNumber($x795,$global))]=$x805;$x805=&$leThis->properties[(is_string($x794)||is_string($x795)?JS::toString($x794,$global).JS::toString($x795,$global):JS::toNumber($x794,$global)+JS::toNumber($x795,$global))];$leThis->attributes[(is_string($x794)||is_string($x795)?JS::toString($x794,$global).JS::toString($x795,$global):JS::toNumber($x794,$global)+JS::toNumber($x795,$global))]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U805=FALSE;$W805=TRUE;}if(isset($S805)){$x808=$S805->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x809=$x808($global,$leThis,$S805,array($x792),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x807=$x809;}else{if(!$U805){$x807=$x792;if($W805){$x805=$x792;}}else{$x807=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int((is_string($x794)||is_string($x795)?JS::toString($x794,$global).JS::toString($x795,$global):JS::toNumber($x794,$global)+JS::toNumber($x795,$global)))&&(is_string($x794)||is_string($x795)?JS::toString($x794,$global).JS::toString($x795,$global):JS::toNumber($x794,$global)+JS::toNumber($x795,$global))>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=(is_string($x794)||is_string($x795)?JS::toString($x794,$global).JS::toString($x795,$global):JS::toNumber($x794,$global)+JS::toNumber($x795,$global))+1;}}for($x810=0;;++$x810){if($x810===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x811=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',262,22,\'<image>/04_array.js\');$_arguments=&$x811[0];list(,$Warguments,$Sarguments,$Uarguments)=$x811;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x812=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',262,22,\'<image>/04_array.js\');$_ReferenceError=&$x812[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x812;$x813=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',262,22);$x814=$x813($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x814->class)&&$x814->class===\'Error\'){$x814->properties[\'file\']=\'<image>/04_array.js\';$x814->properties[\'line\']=262;$x814->properties[\'column\']=22;$x814->attributes[\'file\']=$x814->attributes[\'line\']=$x814->attributes[\'column\']=0;}throw new JSException($x814,262,22,\'<image>/04_array.js\');}unset($x815,$W815,$S815,$U815);$x816=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',262,31,\'<image>/04_array.js\');$x815=&$x816[0];list(,$W815,$S815,$U815)=$x816;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x815;}if($x810!==0){$x817=++$_i;}$x818=JS::toPrimitive($_i,$global);$x819=JS::toPrimitive($_l,$global);$x820=(is_string($x818)&&is_string($x819)?strcmp($x818,$x819)<0:(!is_nan($x821=JS::toNumber($x818,$global))&&!is_nan($x822=JS::toNumber($x819,$global))&&$x821<$x822));if(!JS::toBoolean($x820,$global)){break;}unset($x823,$W823,$S823,$U823);$x824=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,263,22,\'<image>/04_array.js\');$x823=&$x824[0];list(,$W823,$S823,$U823)=$x824;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x825=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',263,11,\'<image>/04_array.js\');$_TypeError=&$x825[0];list(,$WTypeError,$STypeError,$UTypeError)=$x825;$x826=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x827=$x826($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x827->class)&&$x827->class===\'Error\'){$x827->properties[\'file\']=\'<image>/04_array.js\';$x827->properties[\'line\']=263;$x827->properties[\'column\']=11;$x827->attributes[\'file\']=$x827->attributes[\'line\']=$x827->attributes[\'column\']=0;}throw new JSException($x827,263,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x828,$W828,$S828,$U828);$x829=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_i,263,11,\'<image>/04_array.js\');$x828=&$x829[0];list(,$W828,$S828,$U828)=$x829;if($U828&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_i]=$x828;$x828=&$leThis->properties[$_i];$leThis->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U828=FALSE;$W828=TRUE;}if(isset($S828)){$x831=$S828->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x832=$x831($global,$leThis,$S828,array($x823),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x830=$x832;}else{if(!$U828){$x830=$x823;if($W828){$x828=$x823;}}else{$x830=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}unset($x833,$W833,$S833,$U833);$x834=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',266,13,\'<image>/04_array.js\');$x833=&$x834[0];list(,$W833,$S833,$U833)=$x834;return$x833;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x847 =& $scope->properties['arguments'];
$x847->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x847->properties[$i] = $args[$i];
$x847->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x848 = $_from;
if (!JS::toBoolean($x848, $global)) {
$x848 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x848;
$x849 = JS::toPrimitive($_from, $global);
$x850 = JS::toPrimitive(0, $global);
$x851 = (is_string($x849) && is_string($x850) ? strcmp($x849, $x850) < 0 : (!is_nan($x852 = JS::toNumber($x849, $global)) && !is_nan($x853 = JS::toNumber($x850, $global)) && $x852 < $x853));
if (JS::toBoolean($x851, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x854 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Math', 273, 10, '<image>/04_array.js');
$_Math =& $x854[0]; list(,$WMath,$SMath,$UMath) = $x854;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x855 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 273, 10, '<image>/04_array.js');
$_ReferenceError =& $x855[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x855;
$x856 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 10);
$x857 = $x856($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x857->class) && $x857->class === 'Error') {$x857->properties['file'] = '<image>/04_array.js';$x857->properties['line'] = 273;$x857->properties['column'] = 10;$x857->attributes['file'] = $x857->attributes['line'] = $x857->attributes['column'] = 0; }
throw new JSException($x857, 273, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x859 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 273, 18, '<image>/04_array.js');
$_TypeError =& $x859[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x859;
$x860 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x861 = $x860($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x861->class) && $x861->class === 'Error') {$x861->properties['file'] = '<image>/04_array.js';$x861->properties['line'] = 273;$x861->properties['column'] = 18;$x861->attributes['file'] = $x861->attributes['line'] = $x861->attributes['column'] = 0; }
throw new JSException($x861, 273, 18, '<image>/04_array.js');
}
$x858 = JS::toObject($_Math, $global);
unset($x862, $W862, $S862, $U862);
$x863 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x858, (string) 'max', 273, 18, '<image>/04_array.js');
$x862 =& $x863[0]; list(,$W862,$S862,$U862) = $x863;
unset($x866, $W866, $S866, $U866);
$x867 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 273, 23, '<image>/04_array.js');
$x866 =& $x867[0]; list(,$W866,$S866,$U866) = $x867;
$x864 = JS::toPrimitive($x866, $global);
$x865 = JS::toPrimitive($_from, $global);
if (!(is_object($x862) && isset($x862->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x870 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 273, 18, '<image>/04_array.js');
$_TypeError =& $x870[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x870;
$x871 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x872 = $x871($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x872->class) && $x872->class === 'Error') {$x872->properties['file'] = '<image>/04_array.js';$x872->properties['line'] = 273;$x872->properties['column'] = 18;$x872->attributes['file'] = $x872->attributes['line'] = $x872->attributes['column'] = 0; }
throw new JSException($x872, 273, 18, '<image>/04_array.js');
}
$x868 = $x862->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x869 = $x868($global, $x858, $x862, array((is_string($x864) || is_string($x865) ? JS::toString($x864, $global) . JS::toString($x865, $global) : JS::toNumber($x864, $global) + JS::toNumber($x865, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x869;;
};
for ($x873 = 0;; ++$x873) {
if ($x873 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $_from;
unset($x874, $W874, $S874, $U874);
$x875 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 276, 29, '<image>/04_array.js');
$x874 =& $x875[0]; list(,$W874,$S874,$U874) = $x875;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x874;
}
if ($x873 !== 0) {
$x876 = ++$_i;
}
$x877 = JS::toPrimitive($_i, $global);
$x878 = JS::toPrimitive($_l, $global);
$x879 = (is_string($x877) && is_string($x878) ? strcmp($x877, $x878) < 0 : (!is_nan($x880 = JS::toNumber($x877, $global)) && !is_nan($x881 = JS::toNumber($x878, $global)) && $x880 < $x881));
if (!JS::toBoolean($x879, $global)) { break; }

unset($x883, $W883, $S883, $U883);
$x884 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 277, 11, '<image>/04_array.js');
$x883 =& $x884[0]; list(,$W883,$S883,$U883) = $x884;
$x882 = (((gettype($x883) === gettype($_search) && $x883 === $_search))|| (((is_float($x883) || is_int($x883)) && (is_float($_search) || is_int($_search))) && $x883 == $_search));
if (JS::toBoolean($x882, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x847=&$scope->properties[\'arguments\'];$x847->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x847->properties[$i]=$args[$i];$x847->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x848=$_from;if(!JS::toBoolean($x848,$global)){$x848=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x848;$x849=JS::toPrimitive($_from,$global);$x850=JS::toPrimitive(0,$global);$x851=(is_string($x849)&&is_string($x850)?strcmp($x849,$x850)<0:(!is_nan($x852=JS::toNumber($x849,$global))&&!is_nan($x853=JS::toNumber($x850,$global))&&$x852<$x853));if(JS::toBoolean($x851,$global)){unset($_Math,$WMath,$SMath,$UMath);$x854=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Math\',273,10,\'<image>/04_array.js\');$_Math=&$x854[0];list(,$WMath,$SMath,$UMath)=$x854;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x855=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',273,10,\'<image>/04_array.js\');$_ReferenceError=&$x855[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x855;$x856=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,10);$x857=$x856($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x857->class)&&$x857->class===\'Error\'){$x857->properties[\'file\']=\'<image>/04_array.js\';$x857->properties[\'line\']=273;$x857->properties[\'column\']=10;$x857->attributes[\'file\']=$x857->attributes[\'line\']=$x857->attributes[\'column\']=0;}throw new JSException($x857,273,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x859=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',273,18,\'<image>/04_array.js\');$_TypeError=&$x859[0];list(,$WTypeError,$STypeError,$UTypeError)=$x859;$x860=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x861=$x860($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x861->class)&&$x861->class===\'Error\'){$x861->properties[\'file\']=\'<image>/04_array.js\';$x861->properties[\'line\']=273;$x861->properties[\'column\']=18;$x861->attributes[\'file\']=$x861->attributes[\'line\']=$x861->attributes[\'column\']=0;}throw new JSException($x861,273,18,\'<image>/04_array.js\');}$x858=JS::toObject($_Math,$global);unset($x862,$W862,$S862,$U862);$x863=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x858,(string)\'max\',273,18,\'<image>/04_array.js\');$x862=&$x863[0];list(,$W862,$S862,$U862)=$x863;unset($x866,$W866,$S866,$U866);$x867=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',273,23,\'<image>/04_array.js\');$x866=&$x867[0];list(,$W866,$S866,$U866)=$x867;$x864=JS::toPrimitive($x866,$global);$x865=JS::toPrimitive($_from,$global);if(!(is_object($x862)&&isset($x862->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x870=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',273,18,\'<image>/04_array.js\');$_TypeError=&$x870[0];list(,$WTypeError,$STypeError,$UTypeError)=$x870;$x871=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x872=$x871($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x872->class)&&$x872->class===\'Error\'){$x872->properties[\'file\']=\'<image>/04_array.js\';$x872->properties[\'line\']=273;$x872->properties[\'column\']=18;$x872->attributes[\'file\']=$x872->attributes[\'line\']=$x872->attributes[\'column\']=0;}throw new JSException($x872,273,18,\'<image>/04_array.js\');}$x868=$x862->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x869=$x868($global,$x858,$x862,array((is_string($x864)||is_string($x865)?JS::toString($x864,$global).JS::toString($x865,$global):JS::toNumber($x864,$global)+JS::toNumber($x865,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x869;}for($x873=0;;++$x873){if($x873===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$_from;unset($x874,$W874,$S874,$U874);$x875=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',276,29,\'<image>/04_array.js\');$x874=&$x875[0];list(,$W874,$S874,$U874)=$x875;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x874;}if($x873!==0){$x876=++$_i;}$x877=JS::toPrimitive($_i,$global);$x878=JS::toPrimitive($_l,$global);$x879=(is_string($x877)&&is_string($x878)?strcmp($x877,$x878)<0:(!is_nan($x880=JS::toNumber($x877,$global))&&!is_nan($x881=JS::toNumber($x878,$global))&&$x880<$x881));if(!JS::toBoolean($x879,$global)){break;}unset($x883,$W883,$S883,$U883);$x884=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,277,11,\'<image>/04_array.js\');$x883=&$x884[0];list(,$W883,$S883,$U883)=$x884;$x882=(((gettype($x883)===gettype($_search)&&$x883===$_search))||(((is_float($x883)||is_int($x883))&&(is_float($_search)||is_int($_search)))&&$x883==$_search));if(JS::toBoolean($x882,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x897 =& $scope->properties['arguments'];
$x897->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x897->properties[$i] = $args[$i];
$x897->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x898 = $_from;
if (!JS::toBoolean($x898, $global)) {
$x898 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x898;
$x899 = JS::toPrimitive($_from, $global);
$x900 = JS::toPrimitive(0, $global);
$x901 = (is_string($x899) && is_string($x900) ? strcmp($x899, $x900) < 0 : (!is_nan($x902 = JS::toNumber($x899, $global)) && !is_nan($x903 = JS::toNumber($x900, $global)) && $x902 < $x903));
if (JS::toBoolean($x901, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x904 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Math', 289, 10, '<image>/04_array.js');
$_Math =& $x904[0]; list(,$WMath,$SMath,$UMath) = $x904;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x905 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 289, 10, '<image>/04_array.js');
$_ReferenceError =& $x905[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x905;
$x906 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 10);
$x907 = $x906($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x907->class) && $x907->class === 'Error') {$x907->properties['file'] = '<image>/04_array.js';$x907->properties['line'] = 289;$x907->properties['column'] = 10;$x907->attributes['file'] = $x907->attributes['line'] = $x907->attributes['column'] = 0; }
throw new JSException($x907, 289, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x909 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 289, 18, '<image>/04_array.js');
$_TypeError =& $x909[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x909;
$x910 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x911 = $x910($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x911->class) && $x911->class === 'Error') {$x911->properties['file'] = '<image>/04_array.js';$x911->properties['line'] = 289;$x911->properties['column'] = 18;$x911->attributes['file'] = $x911->attributes['line'] = $x911->attributes['column'] = 0; }
throw new JSException($x911, 289, 18, '<image>/04_array.js');
}
$x908 = JS::toObject($_Math, $global);
unset($x912, $W912, $S912, $U912);
$x913 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x908, (string) 'max', 289, 18, '<image>/04_array.js');
$x912 =& $x913[0]; list(,$W912,$S912,$U912) = $x913;
unset($x916, $W916, $S916, $U916);
$x917 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 289, 23, '<image>/04_array.js');
$x916 =& $x917[0]; list(,$W916,$S916,$U916) = $x917;
$x914 = JS::toPrimitive($x916, $global);
$x915 = JS::toPrimitive($_from, $global);
if (!(is_object($x912) && isset($x912->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x920 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 289, 18, '<image>/04_array.js');
$_TypeError =& $x920[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x920;
$x921 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x922 = $x921($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x922->class) && $x922->class === 'Error') {$x922->properties['file'] = '<image>/04_array.js';$x922->properties['line'] = 289;$x922->properties['column'] = 18;$x922->attributes['file'] = $x922->attributes['line'] = $x922->attributes['column'] = 0; }
throw new JSException($x922, 289, 18, '<image>/04_array.js');
}
$x918 = $x912->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x919 = $x918($global, $x908, $x912, array((is_string($x914) || is_string($x915) ? JS::toString($x914, $global) . JS::toString($x915, $global) : JS::toNumber($x914, $global) + JS::toNumber($x915, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x919;;
};
unset($x927, $W927, $S927, $U927);
$x928 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 292, 10, '<image>/04_array.js');
$x927 =& $x928[0]; list(,$W927,$S927,$U927) = $x928;
$x924 = JS::toPrimitive($x927, $global);
$x925 = JS::toPrimitive(1, $global);
$x926 = (is_string($x924) && is_string($x925) ? strcmp($x924, $x925) < 0 : (!is_nan($x929 = JS::toNumber($x924, $global)) && !is_nan($x930 = JS::toNumber($x925, $global)) && $x929 < $x930));
$x923 = $x926;
if (!JS::toBoolean($x923, $global)) {
unset($x934, $W934, $S934, $U934);
$x935 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 292, 37, '<image>/04_array.js');
$x934 =& $x935[0]; list(,$W934,$S934,$U934) = $x935;
$x931 = JS::toPrimitive($_from, $global);
$x932 = JS::toPrimitive($x934, $global);
$x933 = !(is_string($x931) && is_string($x932) ? strcmp($x931, $x932) < 0 : (!is_nan($x936 = JS::toNumber($x931, $global)) && !is_nan($x937 = JS::toNumber($x932, $global)) && $x936 < $x937));
$x923 = $x933; }
if (JS::toBoolean($x923, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
for ($x938 = 0;; ++$x938) {
if ($x938 === 0) {
unset($x939, $W939, $S939, $U939);
$x940 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 296, 19, '<image>/04_array.js');
$x939 =& $x940[0]; list(,$W939,$S939,$U939) = $x940;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x939, $global) - JS::toNumber(1, $global));
}
if ($x938 !== 0) {
$x941 = --$_i;
}
$x942 = JS::toPrimitive($_i, $global);
$x943 = JS::toPrimitive($_from, $global);
$x944 = !(is_string($x942) && is_string($x943) ? strcmp($x942, $x943) < 0 : (!is_nan($x945 = JS::toNumber($x942, $global)) && !is_nan($x946 = JS::toNumber($x943, $global)) && $x945 < $x946));
if (!JS::toBoolean($x944, $global)) { break; }

unset($x950, $W950, $S950, $U950);
$x951 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 297, 11, '<image>/04_array.js');
$x950 =& $x951[0]; list(,$W950,$S950,$U950) = $x951;
$x948 = $x950;
$x949 = $_search;
if (gettype($x948) === gettype($x949)) { $x947 = $x948===$x949; }
else if ($x948 === JS::$undefined && $x949 === NULL || $x948 === NULL && $x949 === JS::$undefined) { $x947 = TRUE; }
else if ($x948 === NULL || $x949 === NULL) { $x947 = FALSE; }
else { $x948 = JS::toPrimitive($x948, $global); $x949 = JS::toPrimitive($x949, $global); 
if (is_bool($x948)) { $x948 = (int) $x948; }
if (is_bool($x949)) { $x949 = (int) $x949; }
if (is_numeric($x948) || is_numeric($x949)) { $x948 = JS::toNumber($x948, $global); $x949 = JS::toNumber($x949, $global); }
$x947 = $x948===$x949;}
if (JS::toBoolean($x947, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x897=&$scope->properties[\'arguments\'];$x897->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x897->properties[$i]=$args[$i];$x897->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x898=$_from;if(!JS::toBoolean($x898,$global)){$x898=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x898;$x899=JS::toPrimitive($_from,$global);$x900=JS::toPrimitive(0,$global);$x901=(is_string($x899)&&is_string($x900)?strcmp($x899,$x900)<0:(!is_nan($x902=JS::toNumber($x899,$global))&&!is_nan($x903=JS::toNumber($x900,$global))&&$x902<$x903));if(JS::toBoolean($x901,$global)){unset($_Math,$WMath,$SMath,$UMath);$x904=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Math\',289,10,\'<image>/04_array.js\');$_Math=&$x904[0];list(,$WMath,$SMath,$UMath)=$x904;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x905=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',289,10,\'<image>/04_array.js\');$_ReferenceError=&$x905[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x905;$x906=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,10);$x907=$x906($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x907->class)&&$x907->class===\'Error\'){$x907->properties[\'file\']=\'<image>/04_array.js\';$x907->properties[\'line\']=289;$x907->properties[\'column\']=10;$x907->attributes[\'file\']=$x907->attributes[\'line\']=$x907->attributes[\'column\']=0;}throw new JSException($x907,289,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x909=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',289,18,\'<image>/04_array.js\');$_TypeError=&$x909[0];list(,$WTypeError,$STypeError,$UTypeError)=$x909;$x910=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x911=$x910($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x911->class)&&$x911->class===\'Error\'){$x911->properties[\'file\']=\'<image>/04_array.js\';$x911->properties[\'line\']=289;$x911->properties[\'column\']=18;$x911->attributes[\'file\']=$x911->attributes[\'line\']=$x911->attributes[\'column\']=0;}throw new JSException($x911,289,18,\'<image>/04_array.js\');}$x908=JS::toObject($_Math,$global);unset($x912,$W912,$S912,$U912);$x913=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x908,(string)\'max\',289,18,\'<image>/04_array.js\');$x912=&$x913[0];list(,$W912,$S912,$U912)=$x913;unset($x916,$W916,$S916,$U916);$x917=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',289,23,\'<image>/04_array.js\');$x916=&$x917[0];list(,$W916,$S916,$U916)=$x917;$x914=JS::toPrimitive($x916,$global);$x915=JS::toPrimitive($_from,$global);if(!(is_object($x912)&&isset($x912->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x920=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',289,18,\'<image>/04_array.js\');$_TypeError=&$x920[0];list(,$WTypeError,$STypeError,$UTypeError)=$x920;$x921=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x922=$x921($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x922->class)&&$x922->class===\'Error\'){$x922->properties[\'file\']=\'<image>/04_array.js\';$x922->properties[\'line\']=289;$x922->properties[\'column\']=18;$x922->attributes[\'file\']=$x922->attributes[\'line\']=$x922->attributes[\'column\']=0;}throw new JSException($x922,289,18,\'<image>/04_array.js\');}$x918=$x912->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x919=$x918($global,$x908,$x912,array((is_string($x914)||is_string($x915)?JS::toString($x914,$global).JS::toString($x915,$global):JS::toNumber($x914,$global)+JS::toNumber($x915,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x919;}unset($x927,$W927,$S927,$U927);$x928=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',292,10,\'<image>/04_array.js\');$x927=&$x928[0];list(,$W927,$S927,$U927)=$x928;$x924=JS::toPrimitive($x927,$global);$x925=JS::toPrimitive(1,$global);$x926=(is_string($x924)&&is_string($x925)?strcmp($x924,$x925)<0:(!is_nan($x929=JS::toNumber($x924,$global))&&!is_nan($x930=JS::toNumber($x925,$global))&&$x929<$x930));$x923=$x926;if(!JS::toBoolean($x923,$global)){unset($x934,$W934,$S934,$U934);$x935=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',292,37,\'<image>/04_array.js\');$x934=&$x935[0];list(,$W934,$S934,$U934)=$x935;$x931=JS::toPrimitive($_from,$global);$x932=JS::toPrimitive($x934,$global);$x933=!(is_string($x931)&&is_string($x932)?strcmp($x931,$x932)<0:(!is_nan($x936=JS::toNumber($x931,$global))&&!is_nan($x937=JS::toNumber($x932,$global))&&$x936<$x937));$x923=$x933;}if(JS::toBoolean($x923,$global)){return(-1.0*JS::toNumber(1,$global));}for($x938=0;;++$x938){if($x938===0){unset($x939,$W939,$S939,$U939);$x940=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',296,19,\'<image>/04_array.js\');$x939=&$x940[0];list(,$W939,$S939,$U939)=$x940;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x939,$global)-JS::toNumber(1,$global));}if($x938!==0){$x941=--$_i;}$x942=JS::toPrimitive($_i,$global);$x943=JS::toPrimitive($_from,$global);$x944=!(is_string($x942)&&is_string($x943)?strcmp($x942,$x943)<0:(!is_nan($x945=JS::toNumber($x942,$global))&&!is_nan($x946=JS::toNumber($x943,$global))&&$x945<$x946));if(!JS::toBoolean($x944,$global)){break;}unset($x950,$W950,$S950,$U950);$x951=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,297,11,\'<image>/04_array.js\');$x950=&$x951[0];list(,$W950,$S950,$U950)=$x951;$x948=$x950;$x949=$_search;if(gettype($x948)===gettype($x949)){$x947=$x948===$x949;}else if($x948===JS::$undefined&&$x949===NULL||$x948===NULL&&$x949===JS::$undefined){$x947=TRUE;}else if($x948===NULL||$x949===NULL){$x947=FALSE;}else{$x948=JS::toPrimitive($x948,$global);$x949=JS::toPrimitive($x949,$global);if(is_bool($x948)){$x948=(int)$x948;}if(is_bool($x949)){$x949=(int)$x949;}if(is_numeric($x948)||is_numeric($x949)){$x948=JS::toNumber($x948,$global);$x949=JS::toNumber($x949,$global);}$x947=$x948===$x949;}if(JS::toBoolean($x947,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x964 =& $scope->properties['arguments'];
$x964->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x964->properties[$i] = $args[$i];
$x964->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x968 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 308, 6, '<image>/04_array.js');
$_arguments =& $x968[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x968;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x969 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 308, 6, '<image>/04_array.js');
$_ReferenceError =& $x969[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x969;
$x970 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 308, 6);
$x971 = $x970($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x971->class) && $x971->class === 'Error') {$x971->properties['file'] = '<image>/04_array.js';$x971->properties['line'] = 308;$x971->properties['column'] = 6;$x971->attributes['file'] = $x971->attributes['line'] = $x971->attributes['column'] = 0; }
throw new JSException($x971, 308, 6, '<image>/04_array.js');
}
unset($x972, $W972, $S972, $U972);
$x973 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 308, 15, '<image>/04_array.js');
$x972 =& $x973[0]; list(,$W972,$S972,$U972) = $x973;
$x965 = JS::toPrimitive($x972, $global);
$x966 = JS::toPrimitive(1, $global);
$x967 = (is_string($x966) && is_string($x965) ? strcmp($x966, $x965) < 0 : (!is_nan($x974 = JS::toNumber($x966, $global)) && !is_nan($x975 = JS::toNumber($x965, $global)) && $x974 < $x975));
if (JS::toBoolean($x967, $global)) {
unset($x976, $W976, $S976, $U976);
$x977 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 309, 22, '<image>/04_array.js');
$x976 =& $x977[0]; list(,$W976,$S976,$U976) = $x977;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x976;;
};
for ($x978 = 0;; ++$x978) {
if ($x978 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x979, $W979, $S979, $U979);
$x980 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 312, 26, '<image>/04_array.js');
$x979 =& $x980[0]; list(,$W979,$S979,$U979) = $x980;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x979;
}
if ($x978 !== 0) {
$x981 = ++$_i;
}
$x982 = JS::toPrimitive($_i, $global);
$x983 = JS::toPrimitive($_l, $global);
$x984 = (is_string($x982) && is_string($x983) ? strcmp($x982, $x983) < 0 : (!is_nan($x985 = JS::toNumber($x982, $global)) && !is_nan($x986 = JS::toNumber($x983, $global)) && $x985 < $x986));
if (!JS::toBoolean($x984, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x988 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 313, 23, '<image>/04_array.js');
$_TypeError =& $x988[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x988;
$x989 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x990 = $x989($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x990->class) && $x990->class === 'Error') {$x990->properties['file'] = '<image>/04_array.js';$x990->properties['line'] = 313;$x990->properties['column'] = 23;$x990->attributes['file'] = $x990->attributes['line'] = $x990->attributes['column'] = 0; }
throw new JSException($x990, 313, 23, '<image>/04_array.js');
}
$x987 = JS::toObject($_callbackFn, $global);
unset($x991, $W991, $S991, $U991);
$x992 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x987, (string) 'call', 313, 23, '<image>/04_array.js');
$x991 =& $x992[0]; list(,$W991,$S991,$U991) = $x992;
unset($x993, $W993, $S993, $U993);
$x994 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 313, 37, '<image>/04_array.js');
$x993 =& $x994[0]; list(,$W993,$S993,$U993) = $x994;
if (!(is_object($x991) && isset($x991->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x997 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 313, 23, '<image>/04_array.js');
$_TypeError =& $x997[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x997;
$x998 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x999 = $x998($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x999->class) && $x999->class === 'Error') {$x999->properties['file'] = '<image>/04_array.js';$x999->properties['line'] = 313;$x999->properties['column'] = 23;$x999->attributes['file'] = $x999->attributes['line'] = $x999->attributes['column'] = 0; }
throw new JSException($x999, 313, 23, '<image>/04_array.js');
}
$x995 = $x991->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x996 = $x995($global, $x987, $x991, array($_thisArg, $x993, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x996, $global)), $global)) {

return false;;
};
};
return true;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x964=&$scope->properties[\'arguments\'];$x964->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x964->properties[$i]=$args[$i];$x964->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x968=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',308,6,\'<image>/04_array.js\');$_arguments=&$x968[0];list(,$Warguments,$Sarguments,$Uarguments)=$x968;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x969=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',308,6,\'<image>/04_array.js\');$_ReferenceError=&$x969[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x969;$x970=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',308,6);$x971=$x970($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x971->class)&&$x971->class===\'Error\'){$x971->properties[\'file\']=\'<image>/04_array.js\';$x971->properties[\'line\']=308;$x971->properties[\'column\']=6;$x971->attributes[\'file\']=$x971->attributes[\'line\']=$x971->attributes[\'column\']=0;}throw new JSException($x971,308,6,\'<image>/04_array.js\');}unset($x972,$W972,$S972,$U972);$x973=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',308,15,\'<image>/04_array.js\');$x972=&$x973[0];list(,$W972,$S972,$U972)=$x973;$x965=JS::toPrimitive($x972,$global);$x966=JS::toPrimitive(1,$global);$x967=(is_string($x966)&&is_string($x965)?strcmp($x966,$x965)<0:(!is_nan($x974=JS::toNumber($x966,$global))&&!is_nan($x975=JS::toNumber($x965,$global))&&$x974<$x975));if(JS::toBoolean($x967,$global)){unset($x976,$W976,$S976,$U976);$x977=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,309,22,\'<image>/04_array.js\');$x976=&$x977[0];list(,$W976,$S976,$U976)=$x977;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x976;}for($x978=0;;++$x978){if($x978===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x979,$W979,$S979,$U979);$x980=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',312,26,\'<image>/04_array.js\');$x979=&$x980[0];list(,$W979,$S979,$U979)=$x980;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x979;}if($x978!==0){$x981=++$_i;}$x982=JS::toPrimitive($_i,$global);$x983=JS::toPrimitive($_l,$global);$x984=(is_string($x982)&&is_string($x983)?strcmp($x982,$x983)<0:(!is_nan($x985=JS::toNumber($x982,$global))&&!is_nan($x986=JS::toNumber($x983,$global))&&$x985<$x986));if(!JS::toBoolean($x984,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x988=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',313,23,\'<image>/04_array.js\');$_TypeError=&$x988[0];list(,$WTypeError,$STypeError,$UTypeError)=$x988;$x989=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x990=$x989($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x990->class)&&$x990->class===\'Error\'){$x990->properties[\'file\']=\'<image>/04_array.js\';$x990->properties[\'line\']=313;$x990->properties[\'column\']=23;$x990->attributes[\'file\']=$x990->attributes[\'line\']=$x990->attributes[\'column\']=0;}throw new JSException($x990,313,23,\'<image>/04_array.js\');}$x987=JS::toObject($_callbackFn,$global);unset($x991,$W991,$S991,$U991);$x992=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x987,(string)\'call\',313,23,\'<image>/04_array.js\');$x991=&$x992[0];list(,$W991,$S991,$U991)=$x992;unset($x993,$W993,$S993,$U993);$x994=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,313,37,\'<image>/04_array.js\');$x993=&$x994[0];list(,$W993,$S993,$U993)=$x994;if(!(is_object($x991)&&isset($x991->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x997=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',313,23,\'<image>/04_array.js\');$_TypeError=&$x997[0];list(,$WTypeError,$STypeError,$UTypeError)=$x997;$x998=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x999=$x998($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x999->class)&&$x999->class===\'Error\'){$x999->properties[\'file\']=\'<image>/04_array.js\';$x999->properties[\'line\']=313;$x999->properties[\'column\']=23;$x999->attributes[\'file\']=$x999->attributes[\'line\']=$x999->attributes[\'column\']=0;}throw new JSException($x999,313,23,\'<image>/04_array.js\');}$x995=$x991->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x996=$x995($global,$x987,$x991,array($_thisArg,$x993,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x996,$global)),$global)){return false;}}return true;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1012 =& $scope->properties['arguments'];
$x1012->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1012->properties[$i] = $args[$i];
$x1012->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1016 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 324, 6, '<image>/04_array.js');
$_arguments =& $x1016[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1016;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1017 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 324, 6, '<image>/04_array.js');
$_ReferenceError =& $x1017[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1017;
$x1018 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 324, 6);
$x1019 = $x1018($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1019->class) && $x1019->class === 'Error') {$x1019->properties['file'] = '<image>/04_array.js';$x1019->properties['line'] = 324;$x1019->properties['column'] = 6;$x1019->attributes['file'] = $x1019->attributes['line'] = $x1019->attributes['column'] = 0; }
throw new JSException($x1019, 324, 6, '<image>/04_array.js');
}
unset($x1020, $W1020, $S1020, $U1020);
$x1021 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 324, 15, '<image>/04_array.js');
$x1020 =& $x1021[0]; list(,$W1020,$S1020,$U1020) = $x1021;
$x1013 = JS::toPrimitive($x1020, $global);
$x1014 = JS::toPrimitive(1, $global);
$x1015 = (is_string($x1014) && is_string($x1013) ? strcmp($x1014, $x1013) < 0 : (!is_nan($x1022 = JS::toNumber($x1014, $global)) && !is_nan($x1023 = JS::toNumber($x1013, $global)) && $x1022 < $x1023));
if (JS::toBoolean($x1015, $global)) {
unset($x1024, $W1024, $S1024, $U1024);
$x1025 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 325, 22, '<image>/04_array.js');
$x1024 =& $x1025[0]; list(,$W1024,$S1024,$U1024) = $x1025;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1024;;
};
for ($x1026 = 0;; ++$x1026) {
if ($x1026 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1027, $W1027, $S1027, $U1027);
$x1028 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 328, 26, '<image>/04_array.js');
$x1027 =& $x1028[0]; list(,$W1027,$S1027,$U1027) = $x1028;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1027;
}
if ($x1026 !== 0) {
$x1029 = ++$_i;
}
$x1030 = JS::toPrimitive($_i, $global);
$x1031 = JS::toPrimitive($_l, $global);
$x1032 = (is_string($x1030) && is_string($x1031) ? strcmp($x1030, $x1031) < 0 : (!is_nan($x1033 = JS::toNumber($x1030, $global)) && !is_nan($x1034 = JS::toNumber($x1031, $global)) && $x1033 < $x1034));
if (!JS::toBoolean($x1032, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1036 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 329, 22, '<image>/04_array.js');
$_TypeError =& $x1036[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1036;
$x1037 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1038 = $x1037($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1038->class) && $x1038->class === 'Error') {$x1038->properties['file'] = '<image>/04_array.js';$x1038->properties['line'] = 329;$x1038->properties['column'] = 22;$x1038->attributes['file'] = $x1038->attributes['line'] = $x1038->attributes['column'] = 0; }
throw new JSException($x1038, 329, 22, '<image>/04_array.js');
}
$x1035 = JS::toObject($_callbackFn, $global);
unset($x1039, $W1039, $S1039, $U1039);
$x1040 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1035, (string) 'call', 329, 22, '<image>/04_array.js');
$x1039 =& $x1040[0]; list(,$W1039,$S1039,$U1039) = $x1040;
unset($x1041, $W1041, $S1041, $U1041);
$x1042 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 329, 36, '<image>/04_array.js');
$x1041 =& $x1042[0]; list(,$W1041,$S1041,$U1041) = $x1042;
if (!(is_object($x1039) && isset($x1039->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1045 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 329, 22, '<image>/04_array.js');
$_TypeError =& $x1045[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1045;
$x1046 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1047 = $x1046($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1047->class) && $x1047->class === 'Error') {$x1047->properties['file'] = '<image>/04_array.js';$x1047->properties['line'] = 329;$x1047->properties['column'] = 22;$x1047->attributes['file'] = $x1047->attributes['line'] = $x1047->attributes['column'] = 0; }
throw new JSException($x1047, 329, 22, '<image>/04_array.js');
}
$x1043 = $x1039->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1044 = $x1043($global, $x1035, $x1039, array($_thisArg, $x1041, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1044, $global)) {

return true;;
};
};
return false;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1012=&$scope->properties[\'arguments\'];$x1012->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1012->properties[$i]=$args[$i];$x1012->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1016=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',324,6,\'<image>/04_array.js\');$_arguments=&$x1016[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1016;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1017=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',324,6,\'<image>/04_array.js\');$_ReferenceError=&$x1017[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1017;$x1018=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',324,6);$x1019=$x1018($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1019->class)&&$x1019->class===\'Error\'){$x1019->properties[\'file\']=\'<image>/04_array.js\';$x1019->properties[\'line\']=324;$x1019->properties[\'column\']=6;$x1019->attributes[\'file\']=$x1019->attributes[\'line\']=$x1019->attributes[\'column\']=0;}throw new JSException($x1019,324,6,\'<image>/04_array.js\');}unset($x1020,$W1020,$S1020,$U1020);$x1021=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',324,15,\'<image>/04_array.js\');$x1020=&$x1021[0];list(,$W1020,$S1020,$U1020)=$x1021;$x1013=JS::toPrimitive($x1020,$global);$x1014=JS::toPrimitive(1,$global);$x1015=(is_string($x1014)&&is_string($x1013)?strcmp($x1014,$x1013)<0:(!is_nan($x1022=JS::toNumber($x1014,$global))&&!is_nan($x1023=JS::toNumber($x1013,$global))&&$x1022<$x1023));if(JS::toBoolean($x1015,$global)){unset($x1024,$W1024,$S1024,$U1024);$x1025=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,325,22,\'<image>/04_array.js\');$x1024=&$x1025[0];list(,$W1024,$S1024,$U1024)=$x1025;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1024;}for($x1026=0;;++$x1026){if($x1026===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1027,$W1027,$S1027,$U1027);$x1028=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',328,26,\'<image>/04_array.js\');$x1027=&$x1028[0];list(,$W1027,$S1027,$U1027)=$x1028;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1027;}if($x1026!==0){$x1029=++$_i;}$x1030=JS::toPrimitive($_i,$global);$x1031=JS::toPrimitive($_l,$global);$x1032=(is_string($x1030)&&is_string($x1031)?strcmp($x1030,$x1031)<0:(!is_nan($x1033=JS::toNumber($x1030,$global))&&!is_nan($x1034=JS::toNumber($x1031,$global))&&$x1033<$x1034));if(!JS::toBoolean($x1032,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1036=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',329,22,\'<image>/04_array.js\');$_TypeError=&$x1036[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1036;$x1037=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1038=$x1037($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1038->class)&&$x1038->class===\'Error\'){$x1038->properties[\'file\']=\'<image>/04_array.js\';$x1038->properties[\'line\']=329;$x1038->properties[\'column\']=22;$x1038->attributes[\'file\']=$x1038->attributes[\'line\']=$x1038->attributes[\'column\']=0;}throw new JSException($x1038,329,22,\'<image>/04_array.js\');}$x1035=JS::toObject($_callbackFn,$global);unset($x1039,$W1039,$S1039,$U1039);$x1040=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1035,(string)\'call\',329,22,\'<image>/04_array.js\');$x1039=&$x1040[0];list(,$W1039,$S1039,$U1039)=$x1040;unset($x1041,$W1041,$S1041,$U1041);$x1042=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,329,36,\'<image>/04_array.js\');$x1041=&$x1042[0];list(,$W1041,$S1041,$U1041)=$x1042;if(!(is_object($x1039)&&isset($x1039->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1045=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',329,22,\'<image>/04_array.js\');$_TypeError=&$x1045[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1045;$x1046=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1047=$x1046($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1047->class)&&$x1047->class===\'Error\'){$x1047->properties[\'file\']=\'<image>/04_array.js\';$x1047->properties[\'line\']=329;$x1047->properties[\'column\']=22;$x1047->attributes[\'file\']=$x1047->attributes[\'line\']=$x1047->attributes[\'column\']=0;}throw new JSException($x1047,329,22,\'<image>/04_array.js\');}$x1043=$x1039->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1044=$x1043($global,$x1035,$x1039,array($_thisArg,$x1041,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1044,$global)){return true;}}return false;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1060 =& $scope->properties['arguments'];
$x1060->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1060->properties[$i] = $args[$i];
$x1060->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1064 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 340, 6, '<image>/04_array.js');
$_arguments =& $x1064[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1064;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1065 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 340, 6, '<image>/04_array.js');
$_ReferenceError =& $x1065[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1065;
$x1066 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 340, 6);
$x1067 = $x1066($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1067->class) && $x1067->class === 'Error') {$x1067->properties['file'] = '<image>/04_array.js';$x1067->properties['line'] = 340;$x1067->properties['column'] = 6;$x1067->attributes['file'] = $x1067->attributes['line'] = $x1067->attributes['column'] = 0; }
throw new JSException($x1067, 340, 6, '<image>/04_array.js');
}
unset($x1068, $W1068, $S1068, $U1068);
$x1069 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 340, 15, '<image>/04_array.js');
$x1068 =& $x1069[0]; list(,$W1068,$S1068,$U1068) = $x1069;
$x1061 = JS::toPrimitive($x1068, $global);
$x1062 = JS::toPrimitive(1, $global);
$x1063 = (is_string($x1062) && is_string($x1061) ? strcmp($x1062, $x1061) < 0 : (!is_nan($x1070 = JS::toNumber($x1062, $global)) && !is_nan($x1071 = JS::toNumber($x1061, $global)) && $x1070 < $x1071));
if (JS::toBoolean($x1063, $global)) {
unset($x1072, $W1072, $S1072, $U1072);
$x1073 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 341, 22, '<image>/04_array.js');
$x1072 =& $x1073[0]; list(,$W1072,$S1072,$U1072) = $x1073;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1072;;
};
for ($x1074 = 0;; ++$x1074) {
if ($x1074 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1075, $W1075, $S1075, $U1075);
$x1076 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 344, 26, '<image>/04_array.js');
$x1075 =& $x1076[0]; list(,$W1075,$S1075,$U1075) = $x1076;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1075;
}
if ($x1074 !== 0) {
$x1077 = ++$_i;
}
$x1078 = JS::toPrimitive($_i, $global);
$x1079 = JS::toPrimitive($_l, $global);
$x1080 = (is_string($x1078) && is_string($x1079) ? strcmp($x1078, $x1079) < 0 : (!is_nan($x1081 = JS::toNumber($x1078, $global)) && !is_nan($x1082 = JS::toNumber($x1079, $global)) && $x1081 < $x1082));
if (!JS::toBoolean($x1080, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1084 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 345, 18, '<image>/04_array.js');
$_TypeError =& $x1084[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1084;
$x1085 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1086 = $x1085($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1086->class) && $x1086->class === 'Error') {$x1086->properties['file'] = '<image>/04_array.js';$x1086->properties['line'] = 345;$x1086->properties['column'] = 18;$x1086->attributes['file'] = $x1086->attributes['line'] = $x1086->attributes['column'] = 0; }
throw new JSException($x1086, 345, 18, '<image>/04_array.js');
}
$x1083 = JS::toObject($_callbackFn, $global);
unset($x1087, $W1087, $S1087, $U1087);
$x1088 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1083, (string) 'call', 345, 18, '<image>/04_array.js');
$x1087 =& $x1088[0]; list(,$W1087,$S1087,$U1087) = $x1088;
unset($x1089, $W1089, $S1089, $U1089);
$x1090 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 345, 32, '<image>/04_array.js');
$x1089 =& $x1090[0]; list(,$W1089,$S1089,$U1089) = $x1090;
if (!(is_object($x1087) && isset($x1087->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1093 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 345, 18, '<image>/04_array.js');
$_TypeError =& $x1093[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1093;
$x1094 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1095 = $x1094($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1095->class) && $x1095->class === 'Error') {$x1095->properties['file'] = '<image>/04_array.js';$x1095->properties['line'] = 345;$x1095->properties['column'] = 18;$x1095->attributes['file'] = $x1095->attributes['line'] = $x1095->attributes['column'] = 0; }
throw new JSException($x1095, 345, 18, '<image>/04_array.js');
}
$x1091 = $x1087->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1092 = $x1091($global, $x1083, $x1087, array($_thisArg, $x1089, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1060=&$scope->properties[\'arguments\'];$x1060->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1060->properties[$i]=$args[$i];$x1060->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1064=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',340,6,\'<image>/04_array.js\');$_arguments=&$x1064[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1064;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1065=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',340,6,\'<image>/04_array.js\');$_ReferenceError=&$x1065[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1065;$x1066=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',340,6);$x1067=$x1066($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1067->class)&&$x1067->class===\'Error\'){$x1067->properties[\'file\']=\'<image>/04_array.js\';$x1067->properties[\'line\']=340;$x1067->properties[\'column\']=6;$x1067->attributes[\'file\']=$x1067->attributes[\'line\']=$x1067->attributes[\'column\']=0;}throw new JSException($x1067,340,6,\'<image>/04_array.js\');}unset($x1068,$W1068,$S1068,$U1068);$x1069=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',340,15,\'<image>/04_array.js\');$x1068=&$x1069[0];list(,$W1068,$S1068,$U1068)=$x1069;$x1061=JS::toPrimitive($x1068,$global);$x1062=JS::toPrimitive(1,$global);$x1063=(is_string($x1062)&&is_string($x1061)?strcmp($x1062,$x1061)<0:(!is_nan($x1070=JS::toNumber($x1062,$global))&&!is_nan($x1071=JS::toNumber($x1061,$global))&&$x1070<$x1071));if(JS::toBoolean($x1063,$global)){unset($x1072,$W1072,$S1072,$U1072);$x1073=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,341,22,\'<image>/04_array.js\');$x1072=&$x1073[0];list(,$W1072,$S1072,$U1072)=$x1073;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1072;}for($x1074=0;;++$x1074){if($x1074===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1075,$W1075,$S1075,$U1075);$x1076=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',344,26,\'<image>/04_array.js\');$x1075=&$x1076[0];list(,$W1075,$S1075,$U1075)=$x1076;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1075;}if($x1074!==0){$x1077=++$_i;}$x1078=JS::toPrimitive($_i,$global);$x1079=JS::toPrimitive($_l,$global);$x1080=(is_string($x1078)&&is_string($x1079)?strcmp($x1078,$x1079)<0:(!is_nan($x1081=JS::toNumber($x1078,$global))&&!is_nan($x1082=JS::toNumber($x1079,$global))&&$x1081<$x1082));if(!JS::toBoolean($x1080,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1084=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',345,18,\'<image>/04_array.js\');$_TypeError=&$x1084[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1084;$x1085=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1086=$x1085($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1086->class)&&$x1086->class===\'Error\'){$x1086->properties[\'file\']=\'<image>/04_array.js\';$x1086->properties[\'line\']=345;$x1086->properties[\'column\']=18;$x1086->attributes[\'file\']=$x1086->attributes[\'line\']=$x1086->attributes[\'column\']=0;}throw new JSException($x1086,345,18,\'<image>/04_array.js\');}$x1083=JS::toObject($_callbackFn,$global);unset($x1087,$W1087,$S1087,$U1087);$x1088=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1083,(string)\'call\',345,18,\'<image>/04_array.js\');$x1087=&$x1088[0];list(,$W1087,$S1087,$U1087)=$x1088;unset($x1089,$W1089,$S1089,$U1089);$x1090=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,345,32,\'<image>/04_array.js\');$x1089=&$x1090[0];list(,$W1089,$S1089,$U1089)=$x1090;if(!(is_object($x1087)&&isset($x1087->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1093=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',345,18,\'<image>/04_array.js\');$_TypeError=&$x1093[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1093;$x1094=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1095=$x1094($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1095->class)&&$x1095->class===\'Error\'){$x1095->properties[\'file\']=\'<image>/04_array.js\';$x1095->properties[\'line\']=345;$x1095->properties[\'column\']=18;$x1095->attributes[\'file\']=$x1095->attributes[\'line\']=$x1095->attributes[\'column\']=0;}throw new JSException($x1095,345,18,\'<image>/04_array.js\');}$x1091=$x1087->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1092=$x1091($global,$x1083,$x1087,array($_thisArg,$x1089,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1108 =& $scope->properties['arguments'];
$x1108->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1108->properties[$i] = $args[$i];
$x1108->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1109 = clone JS::$arrayTemplate;
$x1109->properties['length'] = 0;
$x1109->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1109;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1113 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 352, 6, '<image>/04_array.js');
$_arguments =& $x1113[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1113;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1114 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 352, 6, '<image>/04_array.js');
$_ReferenceError =& $x1114[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1114;
$x1115 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 352, 6);
$x1116 = $x1115($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1116->class) && $x1116->class === 'Error') {$x1116->properties['file'] = '<image>/04_array.js';$x1116->properties['line'] = 352;$x1116->properties['column'] = 6;$x1116->attributes['file'] = $x1116->attributes['line'] = $x1116->attributes['column'] = 0; }
throw new JSException($x1116, 352, 6, '<image>/04_array.js');
}
unset($x1117, $W1117, $S1117, $U1117);
$x1118 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 352, 15, '<image>/04_array.js');
$x1117 =& $x1118[0]; list(,$W1117,$S1117,$U1117) = $x1118;
$x1110 = JS::toPrimitive($x1117, $global);
$x1111 = JS::toPrimitive(1, $global);
$x1112 = (is_string($x1111) && is_string($x1110) ? strcmp($x1111, $x1110) < 0 : (!is_nan($x1119 = JS::toNumber($x1111, $global)) && !is_nan($x1120 = JS::toNumber($x1110, $global)) && $x1119 < $x1120));
if (JS::toBoolean($x1112, $global)) {
unset($x1121, $W1121, $S1121, $U1121);
$x1122 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 353, 22, '<image>/04_array.js');
$x1121 =& $x1122[0]; list(,$W1121,$S1121,$U1121) = $x1122;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1121;;
};
for ($x1123 = 0;; ++$x1123) {
if ($x1123 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1124, $W1124, $S1124, $U1124);
$x1125 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 356, 26, '<image>/04_array.js');
$x1124 =& $x1125[0]; list(,$W1124,$S1124,$U1124) = $x1125;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1124;
}
if ($x1123 !== 0) {
$x1126 = ++$_i;
}
$x1127 = JS::toPrimitive($_i, $global);
$x1128 = JS::toPrimitive($_l, $global);
$x1129 = (is_string($x1127) && is_string($x1128) ? strcmp($x1127, $x1128) < 0 : (!is_nan($x1130 = JS::toNumber($x1127, $global)) && !is_nan($x1131 = JS::toNumber($x1128, $global)) && $x1130 < $x1131));
if (!JS::toBoolean($x1129, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1133 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 19, '<image>/04_array.js');
$_TypeError =& $x1133[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1133;
$x1134 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1135 = $x1134($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1135->class) && $x1135->class === 'Error') {$x1135->properties['file'] = '<image>/04_array.js';$x1135->properties['line'] = 357;$x1135->properties['column'] = 19;$x1135->attributes['file'] = $x1135->attributes['line'] = $x1135->attributes['column'] = 0; }
throw new JSException($x1135, 357, 19, '<image>/04_array.js');
}
$x1132 = JS::toObject($_returnArray, $global);
unset($x1136, $W1136, $S1136, $U1136);
$x1137 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1132, (string) 'push', 357, 19, '<image>/04_array.js');
$x1136 =& $x1137[0]; list(,$W1136,$S1136,$U1136) = $x1137;
if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1139 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 35, '<image>/04_array.js');
$_TypeError =& $x1139[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1139;
$x1140 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1141 = $x1140($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1141->class) && $x1141->class === 'Error') {$x1141->properties['file'] = '<image>/04_array.js';$x1141->properties['line'] = 357;$x1141->properties['column'] = 35;$x1141->attributes['file'] = $x1141->attributes['line'] = $x1141->attributes['column'] = 0; }
throw new JSException($x1141, 357, 35, '<image>/04_array.js');
}
$x1138 = JS::toObject($_callbackFn, $global);
unset($x1142, $W1142, $S1142, $U1142);
$x1143 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1138, (string) 'call', 357, 35, '<image>/04_array.js');
$x1142 =& $x1143[0]; list(,$W1142,$S1142,$U1142) = $x1143;
unset($x1144, $W1144, $S1144, $U1144);
$x1145 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 357, 49, '<image>/04_array.js');
$x1144 =& $x1145[0]; list(,$W1144,$S1144,$U1144) = $x1145;
if (!(is_object($x1142) && isset($x1142->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1148 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 35, '<image>/04_array.js');
$_TypeError =& $x1148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1148;
$x1149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1150 = $x1149($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1150->class) && $x1150->class === 'Error') {$x1150->properties['file'] = '<image>/04_array.js';$x1150->properties['line'] = 357;$x1150->properties['column'] = 35;$x1150->attributes['file'] = $x1150->attributes['line'] = $x1150->attributes['column'] = 0; }
throw new JSException($x1150, 357, 35, '<image>/04_array.js');
}
$x1146 = $x1142->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1147 = $x1146($global, $x1138, $x1142, array($_thisArg, $x1144, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x1136) && isset($x1136->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1153 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 19, '<image>/04_array.js');
$_TypeError =& $x1153[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1153;
$x1154 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1155 = $x1154($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1155->class) && $x1155->class === 'Error') {$x1155->properties['file'] = '<image>/04_array.js';$x1155->properties['line'] = 357;$x1155->properties['column'] = 19;$x1155->attributes['file'] = $x1155->attributes['line'] = $x1155->attributes['column'] = 0; }
throw new JSException($x1155, 357, 19, '<image>/04_array.js');
}
$x1151 = $x1136->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1152 = $x1151($global, $x1132, $x1136, array($x1147), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1108=&$scope->properties[\'arguments\'];$x1108->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1108->properties[$i]=$args[$i];$x1108->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1109=clone JS::$arrayTemplate;$x1109->properties[\'length\']=0;$x1109->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1109;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1113=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',352,6,\'<image>/04_array.js\');$_arguments=&$x1113[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1113;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1114=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',352,6,\'<image>/04_array.js\');$_ReferenceError=&$x1114[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1114;$x1115=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',352,6);$x1116=$x1115($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1116->class)&&$x1116->class===\'Error\'){$x1116->properties[\'file\']=\'<image>/04_array.js\';$x1116->properties[\'line\']=352;$x1116->properties[\'column\']=6;$x1116->attributes[\'file\']=$x1116->attributes[\'line\']=$x1116->attributes[\'column\']=0;}throw new JSException($x1116,352,6,\'<image>/04_array.js\');}unset($x1117,$W1117,$S1117,$U1117);$x1118=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',352,15,\'<image>/04_array.js\');$x1117=&$x1118[0];list(,$W1117,$S1117,$U1117)=$x1118;$x1110=JS::toPrimitive($x1117,$global);$x1111=JS::toPrimitive(1,$global);$x1112=(is_string($x1111)&&is_string($x1110)?strcmp($x1111,$x1110)<0:(!is_nan($x1119=JS::toNumber($x1111,$global))&&!is_nan($x1120=JS::toNumber($x1110,$global))&&$x1119<$x1120));if(JS::toBoolean($x1112,$global)){unset($x1121,$W1121,$S1121,$U1121);$x1122=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,353,22,\'<image>/04_array.js\');$x1121=&$x1122[0];list(,$W1121,$S1121,$U1121)=$x1122;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1121;}for($x1123=0;;++$x1123){if($x1123===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1124,$W1124,$S1124,$U1124);$x1125=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',356,26,\'<image>/04_array.js\');$x1124=&$x1125[0];list(,$W1124,$S1124,$U1124)=$x1125;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1124;}if($x1123!==0){$x1126=++$_i;}$x1127=JS::toPrimitive($_i,$global);$x1128=JS::toPrimitive($_l,$global);$x1129=(is_string($x1127)&&is_string($x1128)?strcmp($x1127,$x1128)<0:(!is_nan($x1130=JS::toNumber($x1127,$global))&&!is_nan($x1131=JS::toNumber($x1128,$global))&&$x1130<$x1131));if(!JS::toBoolean($x1129,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1133=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,19,\'<image>/04_array.js\');$_TypeError=&$x1133[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1133;$x1134=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1135=$x1134($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1135->class)&&$x1135->class===\'Error\'){$x1135->properties[\'file\']=\'<image>/04_array.js\';$x1135->properties[\'line\']=357;$x1135->properties[\'column\']=19;$x1135->attributes[\'file\']=$x1135->attributes[\'line\']=$x1135->attributes[\'column\']=0;}throw new JSException($x1135,357,19,\'<image>/04_array.js\');}$x1132=JS::toObject($_returnArray,$global);unset($x1136,$W1136,$S1136,$U1136);$x1137=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1132,(string)\'push\',357,19,\'<image>/04_array.js\');$x1136=&$x1137[0];list(,$W1136,$S1136,$U1136)=$x1137;if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1139=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,35,\'<image>/04_array.js\');$_TypeError=&$x1139[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1139;$x1140=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1141=$x1140($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1141->class)&&$x1141->class===\'Error\'){$x1141->properties[\'file\']=\'<image>/04_array.js\';$x1141->properties[\'line\']=357;$x1141->properties[\'column\']=35;$x1141->attributes[\'file\']=$x1141->attributes[\'line\']=$x1141->attributes[\'column\']=0;}throw new JSException($x1141,357,35,\'<image>/04_array.js\');}$x1138=JS::toObject($_callbackFn,$global);unset($x1142,$W1142,$S1142,$U1142);$x1143=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1138,(string)\'call\',357,35,\'<image>/04_array.js\');$x1142=&$x1143[0];list(,$W1142,$S1142,$U1142)=$x1143;unset($x1144,$W1144,$S1144,$U1144);$x1145=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,357,49,\'<image>/04_array.js\');$x1144=&$x1145[0];list(,$W1144,$S1144,$U1144)=$x1145;if(!(is_object($x1142)&&isset($x1142->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1148=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,35,\'<image>/04_array.js\');$_TypeError=&$x1148[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1148;$x1149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1150=$x1149($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1150->class)&&$x1150->class===\'Error\'){$x1150->properties[\'file\']=\'<image>/04_array.js\';$x1150->properties[\'line\']=357;$x1150->properties[\'column\']=35;$x1150->attributes[\'file\']=$x1150->attributes[\'line\']=$x1150->attributes[\'column\']=0;}throw new JSException($x1150,357,35,\'<image>/04_array.js\');}$x1146=$x1142->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1147=$x1146($global,$x1138,$x1142,array($_thisArg,$x1144,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x1136)&&isset($x1136->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1153=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,19,\'<image>/04_array.js\');$_TypeError=&$x1153[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1153;$x1154=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1155=$x1154($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1155->class)&&$x1155->class===\'Error\'){$x1155->properties[\'file\']=\'<image>/04_array.js\';$x1155->properties[\'line\']=357;$x1155->properties[\'column\']=19;$x1155->attributes[\'file\']=$x1155->attributes[\'line\']=$x1155->attributes[\'column\']=0;}throw new JSException($x1155,357,19,\'<image>/04_array.js\');}$x1151=$x1136->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1152=$x1151($global,$x1132,$x1136,array($x1147),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1168 =& $scope->properties['arguments'];
$x1168->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1168->properties[$i] = $args[$i];
$x1168->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1169 = clone JS::$arrayTemplate;
$x1169->properties['length'] = 0;
$x1169->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1169;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1173 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 366, 6, '<image>/04_array.js');
$_arguments =& $x1173[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1173;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1174 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 366, 6, '<image>/04_array.js');
$_ReferenceError =& $x1174[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1174;
$x1175 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 366, 6);
$x1176 = $x1175($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1176->class) && $x1176->class === 'Error') {$x1176->properties['file'] = '<image>/04_array.js';$x1176->properties['line'] = 366;$x1176->properties['column'] = 6;$x1176->attributes['file'] = $x1176->attributes['line'] = $x1176->attributes['column'] = 0; }
throw new JSException($x1176, 366, 6, '<image>/04_array.js');
}
unset($x1177, $W1177, $S1177, $U1177);
$x1178 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 366, 15, '<image>/04_array.js');
$x1177 =& $x1178[0]; list(,$W1177,$S1177,$U1177) = $x1178;
$x1170 = JS::toPrimitive($x1177, $global);
$x1171 = JS::toPrimitive(1, $global);
$x1172 = (is_string($x1171) && is_string($x1170) ? strcmp($x1171, $x1170) < 0 : (!is_nan($x1179 = JS::toNumber($x1171, $global)) && !is_nan($x1180 = JS::toNumber($x1170, $global)) && $x1179 < $x1180));
if (JS::toBoolean($x1172, $global)) {
unset($x1181, $W1181, $S1181, $U1181);
$x1182 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 367, 22, '<image>/04_array.js');
$x1181 =& $x1182[0]; list(,$W1181,$S1181,$U1181) = $x1182;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1181;;
};
for ($x1183 = 0;; ++$x1183) {
if ($x1183 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1184, $W1184, $S1184, $U1184);
$x1185 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 370, 26, '<image>/04_array.js');
$x1184 =& $x1185[0]; list(,$W1184,$S1184,$U1184) = $x1185;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1184;
}
if ($x1183 !== 0) {
$x1186 = ++$_i;
}
$x1187 = JS::toPrimitive($_i, $global);
$x1188 = JS::toPrimitive($_l, $global);
$x1189 = (is_string($x1187) && is_string($x1188) ? strcmp($x1187, $x1188) < 0 : (!is_nan($x1190 = JS::toNumber($x1187, $global)) && !is_nan($x1191 = JS::toNumber($x1188, $global)) && $x1190 < $x1191));
if (!JS::toBoolean($x1189, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1193 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 371, 22, '<image>/04_array.js');
$_TypeError =& $x1193[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1193;
$x1194 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1195 = $x1194($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1195->class) && $x1195->class === 'Error') {$x1195->properties['file'] = '<image>/04_array.js';$x1195->properties['line'] = 371;$x1195->properties['column'] = 22;$x1195->attributes['file'] = $x1195->attributes['line'] = $x1195->attributes['column'] = 0; }
throw new JSException($x1195, 371, 22, '<image>/04_array.js');
}
$x1192 = JS::toObject($_callbackFn, $global);
unset($x1196, $W1196, $S1196, $U1196);
$x1197 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1192, (string) 'call', 371, 22, '<image>/04_array.js');
$x1196 =& $x1197[0]; list(,$W1196,$S1196,$U1196) = $x1197;
unset($x1198, $W1198, $S1198, $U1198);
$x1199 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 371, 36, '<image>/04_array.js');
$x1198 =& $x1199[0]; list(,$W1198,$S1198,$U1198) = $x1199;
if (!(is_object($x1196) && isset($x1196->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1202 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 371, 22, '<image>/04_array.js');
$_TypeError =& $x1202[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1202;
$x1203 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1204 = $x1203($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1204->class) && $x1204->class === 'Error') {$x1204->properties['file'] = '<image>/04_array.js';$x1204->properties['line'] = 371;$x1204->properties['column'] = 22;$x1204->attributes['file'] = $x1204->attributes['line'] = $x1204->attributes['column'] = 0; }
throw new JSException($x1204, 371, 22, '<image>/04_array.js');
}
$x1200 = $x1196->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1201 = $x1200($global, $x1192, $x1196, array($_thisArg, $x1198, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1201, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1206 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 372, 20, '<image>/04_array.js');
$_TypeError =& $x1206[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1206;
$x1207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1208 = $x1207($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1208->class) && $x1208->class === 'Error') {$x1208->properties['file'] = '<image>/04_array.js';$x1208->properties['line'] = 372;$x1208->properties['column'] = 20;$x1208->attributes['file'] = $x1208->attributes['line'] = $x1208->attributes['column'] = 0; }
throw new JSException($x1208, 372, 20, '<image>/04_array.js');
}
$x1205 = JS::toObject($_returnArray, $global);
unset($x1209, $W1209, $S1209, $U1209);
$x1210 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1205, (string) 'push', 372, 20, '<image>/04_array.js');
$x1209 =& $x1210[0]; list(,$W1209,$S1209,$U1209) = $x1210;
unset($x1211, $W1211, $S1211, $U1211);
$x1212 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 372, 25, '<image>/04_array.js');
$x1211 =& $x1212[0]; list(,$W1211,$S1211,$U1211) = $x1212;
if (!(is_object($x1209) && isset($x1209->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1215 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 372, 20, '<image>/04_array.js');
$_TypeError =& $x1215[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1215;
$x1216 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1217 = $x1216($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1217->class) && $x1217->class === 'Error') {$x1217->properties['file'] = '<image>/04_array.js';$x1217->properties['line'] = 372;$x1217->properties['column'] = 20;$x1217->attributes['file'] = $x1217->attributes['line'] = $x1217->attributes['column'] = 0; }
throw new JSException($x1217, 372, 20, '<image>/04_array.js');
}
$x1213 = $x1209->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1214 = $x1213($global, $x1205, $x1209, array($x1211), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1168=&$scope->properties[\'arguments\'];$x1168->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1168->properties[$i]=$args[$i];$x1168->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1169=clone JS::$arrayTemplate;$x1169->properties[\'length\']=0;$x1169->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1169;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1173=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',366,6,\'<image>/04_array.js\');$_arguments=&$x1173[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1173;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1174=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',366,6,\'<image>/04_array.js\');$_ReferenceError=&$x1174[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1174;$x1175=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',366,6);$x1176=$x1175($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1176->class)&&$x1176->class===\'Error\'){$x1176->properties[\'file\']=\'<image>/04_array.js\';$x1176->properties[\'line\']=366;$x1176->properties[\'column\']=6;$x1176->attributes[\'file\']=$x1176->attributes[\'line\']=$x1176->attributes[\'column\']=0;}throw new JSException($x1176,366,6,\'<image>/04_array.js\');}unset($x1177,$W1177,$S1177,$U1177);$x1178=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',366,15,\'<image>/04_array.js\');$x1177=&$x1178[0];list(,$W1177,$S1177,$U1177)=$x1178;$x1170=JS::toPrimitive($x1177,$global);$x1171=JS::toPrimitive(1,$global);$x1172=(is_string($x1171)&&is_string($x1170)?strcmp($x1171,$x1170)<0:(!is_nan($x1179=JS::toNumber($x1171,$global))&&!is_nan($x1180=JS::toNumber($x1170,$global))&&$x1179<$x1180));if(JS::toBoolean($x1172,$global)){unset($x1181,$W1181,$S1181,$U1181);$x1182=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,367,22,\'<image>/04_array.js\');$x1181=&$x1182[0];list(,$W1181,$S1181,$U1181)=$x1182;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1181;}for($x1183=0;;++$x1183){if($x1183===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1184,$W1184,$S1184,$U1184);$x1185=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',370,26,\'<image>/04_array.js\');$x1184=&$x1185[0];list(,$W1184,$S1184,$U1184)=$x1185;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1184;}if($x1183!==0){$x1186=++$_i;}$x1187=JS::toPrimitive($_i,$global);$x1188=JS::toPrimitive($_l,$global);$x1189=(is_string($x1187)&&is_string($x1188)?strcmp($x1187,$x1188)<0:(!is_nan($x1190=JS::toNumber($x1187,$global))&&!is_nan($x1191=JS::toNumber($x1188,$global))&&$x1190<$x1191));if(!JS::toBoolean($x1189,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1193=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',371,22,\'<image>/04_array.js\');$_TypeError=&$x1193[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1193;$x1194=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1195=$x1194($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1195->class)&&$x1195->class===\'Error\'){$x1195->properties[\'file\']=\'<image>/04_array.js\';$x1195->properties[\'line\']=371;$x1195->properties[\'column\']=22;$x1195->attributes[\'file\']=$x1195->attributes[\'line\']=$x1195->attributes[\'column\']=0;}throw new JSException($x1195,371,22,\'<image>/04_array.js\');}$x1192=JS::toObject($_callbackFn,$global);unset($x1196,$W1196,$S1196,$U1196);$x1197=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1192,(string)\'call\',371,22,\'<image>/04_array.js\');$x1196=&$x1197[0];list(,$W1196,$S1196,$U1196)=$x1197;unset($x1198,$W1198,$S1198,$U1198);$x1199=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,371,36,\'<image>/04_array.js\');$x1198=&$x1199[0];list(,$W1198,$S1198,$U1198)=$x1199;if(!(is_object($x1196)&&isset($x1196->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1202=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',371,22,\'<image>/04_array.js\');$_TypeError=&$x1202[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1202;$x1203=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1204=$x1203($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1204->class)&&$x1204->class===\'Error\'){$x1204->properties[\'file\']=\'<image>/04_array.js\';$x1204->properties[\'line\']=371;$x1204->properties[\'column\']=22;$x1204->attributes[\'file\']=$x1204->attributes[\'line\']=$x1204->attributes[\'column\']=0;}throw new JSException($x1204,371,22,\'<image>/04_array.js\');}$x1200=$x1196->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1201=$x1200($global,$x1192,$x1196,array($_thisArg,$x1198,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1201,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1206=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',372,20,\'<image>/04_array.js\');$_TypeError=&$x1206[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1206;$x1207=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1208=$x1207($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1208->class)&&$x1208->class===\'Error\'){$x1208->properties[\'file\']=\'<image>/04_array.js\';$x1208->properties[\'line\']=372;$x1208->properties[\'column\']=20;$x1208->attributes[\'file\']=$x1208->attributes[\'line\']=$x1208->attributes[\'column\']=0;}throw new JSException($x1208,372,20,\'<image>/04_array.js\');}$x1205=JS::toObject($_returnArray,$global);unset($x1209,$W1209,$S1209,$U1209);$x1210=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1205,(string)\'push\',372,20,\'<image>/04_array.js\');$x1209=&$x1210[0];list(,$W1209,$S1209,$U1209)=$x1210;unset($x1211,$W1211,$S1211,$U1211);$x1212=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,372,25,\'<image>/04_array.js\');$x1211=&$x1212[0];list(,$W1211,$S1211,$U1211)=$x1212;if(!(is_object($x1209)&&isset($x1209->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1215=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',372,20,\'<image>/04_array.js\');$_TypeError=&$x1215[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1215;$x1216=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1217=$x1216($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1217->class)&&$x1217->class===\'Error\'){$x1217->properties[\'file\']=\'<image>/04_array.js\';$x1217->properties[\'line\']=372;$x1217->properties[\'column\']=20;$x1217->attributes[\'file\']=$x1217->attributes[\'line\']=$x1217->attributes[\'column\']=0;}throw new JSException($x1217,372,20,\'<image>/04_array.js\');}$x1213=$x1209->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1214=$x1213($global,$x1205,$x1209,array($x1211),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1230 =& $scope->properties['arguments'];
$x1230->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1230->properties[$i] = $args[$i];
$x1230->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1235, $W1235, $S1235, $U1235);
$x1236 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 380, 10, '<image>/04_array.js');
$x1235 =& $x1236[0]; list(,$W1235,$S1235,$U1235) = $x1236;
$x1232 = JS::toPrimitive($x1235, $global);
$x1233 = JS::toPrimitive(1, $global);
$x1234 = (is_string($x1232) && is_string($x1233) ? strcmp($x1232, $x1233) < 0 : (!is_nan($x1237 = JS::toNumber($x1232, $global)) && !is_nan($x1238 = JS::toNumber($x1233, $global)) && $x1237 < $x1238));
$x1231 = $x1234;
if (JS::toBoolean($x1231, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1242 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 380, 25, '<image>/04_array.js');
$_arguments =& $x1242[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1242;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1243 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 380, 25, '<image>/04_array.js');
$_ReferenceError =& $x1243[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1243;
$x1244 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 380, 25);
$x1245 = $x1244($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1245->class) && $x1245->class === 'Error') {$x1245->properties['file'] = '<image>/04_array.js';$x1245->properties['line'] = 380;$x1245->properties['column'] = 25;$x1245->attributes['file'] = $x1245->attributes['line'] = $x1245->attributes['column'] = 0; }
throw new JSException($x1245, 380, 25, '<image>/04_array.js');
}
unset($x1246, $W1246, $S1246, $U1246);
$x1247 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 380, 34, '<image>/04_array.js');
$x1246 =& $x1247[0]; list(,$W1246,$S1246,$U1246) = $x1247;
$x1239 = JS::toPrimitive($x1246, $global);
$x1240 = JS::toPrimitive(2, $global);
$x1241 = (is_string($x1239) && is_string($x1240) ? strcmp($x1239, $x1240) < 0 : (!is_nan($x1248 = JS::toNumber($x1239, $global)) && !is_nan($x1249 = JS::toNumber($x1240, $global)) && $x1248 < $x1249));
$x1231 = $x1241; }
if (JS::toBoolean($x1231, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1252 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 381, 13, '<image>/04_array.js');
$_TypeError =& $x1252[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1252;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1253 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 381, 13, '<image>/04_array.js');
$_ReferenceError =& $x1253[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1253;
$x1254 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 13);
$x1255 = $x1254($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1255->class) && $x1255->class === 'Error') {$x1255->properties['file'] = '<image>/04_array.js';$x1255->properties['line'] = 381;$x1255->properties['column'] = 13;$x1255->attributes['file'] = $x1255->attributes['line'] = $x1255->attributes['column'] = 0; }
throw new JSException($x1255, 381, 13, '<image>/04_array.js');
}
$x1250 = clone JS::$objectTemplate;
unset($x1256, $W1256, $S1256, $U1256);
$x1257 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, (string) 'prototype', 381, 9, '<image>/04_array.js');
$x1256 =& $x1257[0]; list(,$W1256,$S1256,$U1256) = $x1257;
$x1251 = $x1256;
$x1250->prototype = $x1251;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1260 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1261 = $x1260($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1261->class) && $x1261->class === 'Error') {$x1261->properties['file'] = '<image>/04_array.js';$x1261->properties['line'] = 381;$x1261->properties['column'] = 9;$x1261->attributes['file'] = $x1261->attributes['line'] = $x1261->attributes['column'] = 0; }
throw new JSException($x1261, 381, 9, '<image>/04_array.js');
}
$x1258 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1259 = $x1258($global, $x1250, $_TypeError, array('Array.prototype.reduce(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1251 = $x1259;
if (is_object($x1251) && $x1251 !== JS::$undefined) { $x1250 = $x1251; }
if (isset($x1250->class) && $x1250->class === 'Error') {$x1250->properties['file'] = '<image>/04_array.js';$x1250->properties['line'] = 381;$x1250->properties['column'] = 3;$x1250->attributes['file'] = $x1250->attributes['line'] = $x1250->attributes['column'] = 0; }
throw new JSException($x1250, 381, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1265 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 386, 6, '<image>/04_array.js');
$_arguments =& $x1265[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1265;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1266 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 386, 6, '<image>/04_array.js');
$_ReferenceError =& $x1266[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1266;
$x1267 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 386, 6);
$x1268 = $x1267($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1268->class) && $x1268->class === 'Error') {$x1268->properties['file'] = '<image>/04_array.js';$x1268->properties['line'] = 386;$x1268->properties['column'] = 6;$x1268->attributes['file'] = $x1268->attributes['line'] = $x1268->attributes['column'] = 0; }
throw new JSException($x1268, 386, 6, '<image>/04_array.js');
}
unset($x1269, $W1269, $S1269, $U1269);
$x1270 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 386, 15, '<image>/04_array.js');
$x1269 =& $x1270[0]; list(,$W1269,$S1269,$U1269) = $x1270;
$x1262 = JS::toPrimitive($x1269, $global);
$x1263 = JS::toPrimitive(1, $global);
$x1264 = (is_string($x1263) && is_string($x1262) ? strcmp($x1263, $x1262) < 0 : (!is_nan($x1271 = JS::toNumber($x1263, $global)) && !is_nan($x1272 = JS::toNumber($x1262, $global)) && $x1271 < $x1272));
if (JS::toBoolean($x1264, $global)) {
unset($x1273, $W1273, $S1273, $U1273);
$x1274 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 387, 20, '<image>/04_array.js');
$x1273 =& $x1274[0]; list(,$W1273,$S1273,$U1273) = $x1274;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1273;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = 0;;
}
else {
for ($x1275 = 0;; ++$x1275) {
if ($x1275 === 0) {
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = 0;
}
if ($x1275 !== 0) {
$x1276 = ++$_i;
}
unset($x1281, $W1281, $S1281, $U1281);
$x1282 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 391, 23, '<image>/04_array.js');
$x1281 =& $x1282[0]; list(,$W1281,$S1281,$U1281) = $x1282;
$x1278 = JS::toPrimitive($_i, $global);
$x1279 = JS::toPrimitive($x1281, $global);
$x1280 = (is_string($x1278) && is_string($x1279) ? strcmp($x1278, $x1279) < 0 : (!is_nan($x1283 = JS::toNumber($x1278, $global)) && !is_nan($x1284 = JS::toNumber($x1279, $global)) && $x1283 < $x1284));
$x1277 = $x1280;
if (JS::toBoolean($x1277, $global)) {
unset($x1286, $W1286, $S1286, $U1286);
$x1287 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 391, 38, '<image>/04_array.js');
$x1286 =& $x1287[0]; list(,$W1286,$S1286,$U1286) = $x1287;
$x1285 = (((gettype($x1286) === gettype(JS::$undefined) && $x1286 === JS::$undefined))|| (((is_float($x1286) || is_int($x1286)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1286 == JS::$undefined));
$x1277 = $x1285; }
if (!JS::toBoolean($x1277, $global)) { break; }

;
};
unset($x1288, $W1288, $S1288, $U1288);
$x1289 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 392, 15, '<image>/04_array.js');
$x1288 =& $x1289[0]; list(,$W1288,$S1288,$U1288) = $x1289;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1288;
$x1290 = JS::toPrimitive($_i, $global);
$x1291 = JS::toPrimitive(1, $global);
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = (is_string($x1290) || is_string($x1291) ? JS::toString($x1290, $global) . JS::toString($x1291, $global) : JS::toNumber($x1290, $global) + JS::toNumber($x1291, $global));;
};
for ($x1292 = 0;; ++$x1292) {
if ($x1292 === 0) {
unset($x1293, $W1293, $S1293, $U1293);
$x1294 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 396, 19, '<image>/04_array.js');
$x1293 =& $x1294[0]; list(,$W1293,$S1293,$U1293) = $x1294;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1293;
}
if ($x1292 !== 0) {
$x1295 = ++$_i;
}
$x1296 = JS::toPrimitive($_i, $global);
$x1297 = JS::toPrimitive($_l, $global);
$x1298 = (is_string($x1296) && is_string($x1297) ? strcmp($x1296, $x1297) < 0 : (!is_nan($x1299 = JS::toNumber($x1296, $global)) && !is_nan($x1300 = JS::toNumber($x1297, $global)) && $x1299 < $x1300));
if (!JS::toBoolean($x1298, $global)) { break; }

unset($x1302, $W1302, $S1302, $U1302);
$x1303 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 397, 11, '<image>/04_array.js');
$x1302 =& $x1303[0]; list(,$W1302,$S1302,$U1302) = $x1303;
$x1301 = !(((gettype($x1302) === gettype(JS::$undefined) && $x1302 === JS::$undefined))|| (((is_float($x1302) || is_int($x1302)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1302 == JS::$undefined));
if (JS::toBoolean($x1301, $global)) {
unset($x1304, $W1304, $S1304, $U1304);
$x1305 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 398, 34, '<image>/04_array.js');
$x1304 =& $x1305[0]; list(,$W1304,$S1304,$U1304) = $x1305;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1308 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 398, 22, '<image>/04_array.js');
$_TypeError =& $x1308[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1308;
$x1309 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1310 = $x1309($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1310->class) && $x1310->class === 'Error') {$x1310->properties['file'] = '<image>/04_array.js';$x1310->properties['line'] = 398;$x1310->properties['column'] = 22;$x1310->attributes['file'] = $x1310->attributes['line'] = $x1310->attributes['column'] = 0; }
throw new JSException($x1310, 398, 22, '<image>/04_array.js');
}
$x1306 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1307 = $x1306($global, $global, $_callbackFn, array($_value, $x1304, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1307;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1230=&$scope->properties[\'arguments\'];$x1230->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1230->properties[$i]=$args[$i];$x1230->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1235,$W1235,$S1235,$U1235);$x1236=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',380,10,\'<image>/04_array.js\');$x1235=&$x1236[0];list(,$W1235,$S1235,$U1235)=$x1236;$x1232=JS::toPrimitive($x1235,$global);$x1233=JS::toPrimitive(1,$global);$x1234=(is_string($x1232)&&is_string($x1233)?strcmp($x1232,$x1233)<0:(!is_nan($x1237=JS::toNumber($x1232,$global))&&!is_nan($x1238=JS::toNumber($x1233,$global))&&$x1237<$x1238));$x1231=$x1234;if(JS::toBoolean($x1231,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1242=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',380,25,\'<image>/04_array.js\');$_arguments=&$x1242[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1242;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1243=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',380,25,\'<image>/04_array.js\');$_ReferenceError=&$x1243[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1243;$x1244=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',380,25);$x1245=$x1244($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1245->class)&&$x1245->class===\'Error\'){$x1245->properties[\'file\']=\'<image>/04_array.js\';$x1245->properties[\'line\']=380;$x1245->properties[\'column\']=25;$x1245->attributes[\'file\']=$x1245->attributes[\'line\']=$x1245->attributes[\'column\']=0;}throw new JSException($x1245,380,25,\'<image>/04_array.js\');}unset($x1246,$W1246,$S1246,$U1246);$x1247=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',380,34,\'<image>/04_array.js\');$x1246=&$x1247[0];list(,$W1246,$S1246,$U1246)=$x1247;$x1239=JS::toPrimitive($x1246,$global);$x1240=JS::toPrimitive(2,$global);$x1241=(is_string($x1239)&&is_string($x1240)?strcmp($x1239,$x1240)<0:(!is_nan($x1248=JS::toNumber($x1239,$global))&&!is_nan($x1249=JS::toNumber($x1240,$global))&&$x1248<$x1249));$x1231=$x1241;}if(JS::toBoolean($x1231,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1252=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',381,13,\'<image>/04_array.js\');$_TypeError=&$x1252[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1252;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1253=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',381,13,\'<image>/04_array.js\');$_ReferenceError=&$x1253[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1253;$x1254=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,13);$x1255=$x1254($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1255->class)&&$x1255->class===\'Error\'){$x1255->properties[\'file\']=\'<image>/04_array.js\';$x1255->properties[\'line\']=381;$x1255->properties[\'column\']=13;$x1255->attributes[\'file\']=$x1255->attributes[\'line\']=$x1255->attributes[\'column\']=0;}throw new JSException($x1255,381,13,\'<image>/04_array.js\');}$x1250=clone JS::$objectTemplate;unset($x1256,$W1256,$S1256,$U1256);$x1257=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,(string)\'prototype\',381,9,\'<image>/04_array.js\');$x1256=&$x1257[0];list(,$W1256,$S1256,$U1256)=$x1257;$x1251=$x1256;$x1250->prototype=$x1251;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1260=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1261=$x1260($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1261->class)&&$x1261->class===\'Error\'){$x1261->properties[\'file\']=\'<image>/04_array.js\';$x1261->properties[\'line\']=381;$x1261->properties[\'column\']=9;$x1261->attributes[\'file\']=$x1261->attributes[\'line\']=$x1261->attributes[\'column\']=0;}throw new JSException($x1261,381,9,\'<image>/04_array.js\');}$x1258=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1259=$x1258($global,$x1250,$_TypeError,array(\'Array.prototype.reduce(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1251=$x1259;if(is_object($x1251)&&$x1251!==JS::$undefined){$x1250=$x1251;}if(isset($x1250->class)&&$x1250->class===\'Error\'){$x1250->properties[\'file\']=\'<image>/04_array.js\';$x1250->properties[\'line\']=381;$x1250->properties[\'column\']=3;$x1250->attributes[\'file\']=$x1250->attributes[\'line\']=$x1250->attributes[\'column\']=0;}throw new JSException($x1250,381,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1265=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',386,6,\'<image>/04_array.js\');$_arguments=&$x1265[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1265;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1266=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',386,6,\'<image>/04_array.js\');$_ReferenceError=&$x1266[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1266;$x1267=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',386,6);$x1268=$x1267($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1268->class)&&$x1268->class===\'Error\'){$x1268->properties[\'file\']=\'<image>/04_array.js\';$x1268->properties[\'line\']=386;$x1268->properties[\'column\']=6;$x1268->attributes[\'file\']=$x1268->attributes[\'line\']=$x1268->attributes[\'column\']=0;}throw new JSException($x1268,386,6,\'<image>/04_array.js\');}unset($x1269,$W1269,$S1269,$U1269);$x1270=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',386,15,\'<image>/04_array.js\');$x1269=&$x1270[0];list(,$W1269,$S1269,$U1269)=$x1270;$x1262=JS::toPrimitive($x1269,$global);$x1263=JS::toPrimitive(1,$global);$x1264=(is_string($x1263)&&is_string($x1262)?strcmp($x1263,$x1262)<0:(!is_nan($x1271=JS::toNumber($x1263,$global))&&!is_nan($x1272=JS::toNumber($x1262,$global))&&$x1271<$x1272));if(JS::toBoolean($x1264,$global)){unset($x1273,$W1273,$S1273,$U1273);$x1274=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,387,20,\'<image>/04_array.js\');$x1273=&$x1274[0];list(,$W1273,$S1273,$U1273)=$x1274;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1273;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=0;}else{for($x1275=0;;++$x1275){if($x1275===0){if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=0;}if($x1275!==0){$x1276=++$_i;}unset($x1281,$W1281,$S1281,$U1281);$x1282=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',391,23,\'<image>/04_array.js\');$x1281=&$x1282[0];list(,$W1281,$S1281,$U1281)=$x1282;$x1278=JS::toPrimitive($_i,$global);$x1279=JS::toPrimitive($x1281,$global);$x1280=(is_string($x1278)&&is_string($x1279)?strcmp($x1278,$x1279)<0:(!is_nan($x1283=JS::toNumber($x1278,$global))&&!is_nan($x1284=JS::toNumber($x1279,$global))&&$x1283<$x1284));$x1277=$x1280;if(JS::toBoolean($x1277,$global)){unset($x1286,$W1286,$S1286,$U1286);$x1287=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,391,38,\'<image>/04_array.js\');$x1286=&$x1287[0];list(,$W1286,$S1286,$U1286)=$x1287;$x1285=(((gettype($x1286)===gettype(JS::$undefined)&&$x1286===JS::$undefined))||(((is_float($x1286)||is_int($x1286))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1286==JS::$undefined));$x1277=$x1285;}if(!JS::toBoolean($x1277,$global)){break;}}unset($x1288,$W1288,$S1288,$U1288);$x1289=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,392,15,\'<image>/04_array.js\');$x1288=&$x1289[0];list(,$W1288,$S1288,$U1288)=$x1289;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1288;$x1290=JS::toPrimitive($_i,$global);$x1291=JS::toPrimitive(1,$global);if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=(is_string($x1290)||is_string($x1291)?JS::toString($x1290,$global).JS::toString($x1291,$global):JS::toNumber($x1290,$global)+JS::toNumber($x1291,$global));}for($x1292=0;;++$x1292){if($x1292===0){unset($x1293,$W1293,$S1293,$U1293);$x1294=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',396,19,\'<image>/04_array.js\');$x1293=&$x1294[0];list(,$W1293,$S1293,$U1293)=$x1294;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1293;}if($x1292!==0){$x1295=++$_i;}$x1296=JS::toPrimitive($_i,$global);$x1297=JS::toPrimitive($_l,$global);$x1298=(is_string($x1296)&&is_string($x1297)?strcmp($x1296,$x1297)<0:(!is_nan($x1299=JS::toNumber($x1296,$global))&&!is_nan($x1300=JS::toNumber($x1297,$global))&&$x1299<$x1300));if(!JS::toBoolean($x1298,$global)){break;}unset($x1302,$W1302,$S1302,$U1302);$x1303=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,397,11,\'<image>/04_array.js\');$x1302=&$x1303[0];list(,$W1302,$S1302,$U1302)=$x1303;$x1301=!(((gettype($x1302)===gettype(JS::$undefined)&&$x1302===JS::$undefined))||(((is_float($x1302)||is_int($x1302))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1302==JS::$undefined));if(JS::toBoolean($x1301,$global)){unset($x1304,$W1304,$S1304,$U1304);$x1305=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,398,34,\'<image>/04_array.js\');$x1304=&$x1305[0];list(,$W1304,$S1304,$U1304)=$x1305;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1308=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',398,22,\'<image>/04_array.js\');$_TypeError=&$x1308[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1308;$x1309=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1310=$x1309($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1310->class)&&$x1310->class===\'Error\'){$x1310->properties[\'file\']=\'<image>/04_array.js\';$x1310->properties[\'line\']=398;$x1310->properties[\'column\']=22;$x1310->attributes[\'file\']=$x1310->attributes[\'line\']=$x1310->attributes[\'column\']=0;}throw new JSException($x1310,398,22,\'<image>/04_array.js\');}$x1306=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1307=$x1306($global,$global,$_callbackFn,array($_value,$x1304,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1307;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1323 =& $scope->properties['arguments'];
$x1323->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1323->properties[$i] = $args[$i];
$x1323->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1328, $W1328, $S1328, $U1328);
$x1329 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 406, 10, '<image>/04_array.js');
$x1328 =& $x1329[0]; list(,$W1328,$S1328,$U1328) = $x1329;
$x1325 = JS::toPrimitive($x1328, $global);
$x1326 = JS::toPrimitive(1, $global);
$x1327 = (is_string($x1325) && is_string($x1326) ? strcmp($x1325, $x1326) < 0 : (!is_nan($x1330 = JS::toNumber($x1325, $global)) && !is_nan($x1331 = JS::toNumber($x1326, $global)) && $x1330 < $x1331));
$x1324 = $x1327;
if (JS::toBoolean($x1324, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1335 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 406, 25, '<image>/04_array.js');
$_arguments =& $x1335[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1335;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1336 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 406, 25, '<image>/04_array.js');
$_ReferenceError =& $x1336[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1336;
$x1337 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 406, 25);
$x1338 = $x1337($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1338->class) && $x1338->class === 'Error') {$x1338->properties['file'] = '<image>/04_array.js';$x1338->properties['line'] = 406;$x1338->properties['column'] = 25;$x1338->attributes['file'] = $x1338->attributes['line'] = $x1338->attributes['column'] = 0; }
throw new JSException($x1338, 406, 25, '<image>/04_array.js');
}
unset($x1339, $W1339, $S1339, $U1339);
$x1340 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 406, 34, '<image>/04_array.js');
$x1339 =& $x1340[0]; list(,$W1339,$S1339,$U1339) = $x1340;
$x1332 = JS::toPrimitive($x1339, $global);
$x1333 = JS::toPrimitive(2, $global);
$x1334 = (is_string($x1332) && is_string($x1333) ? strcmp($x1332, $x1333) < 0 : (!is_nan($x1341 = JS::toNumber($x1332, $global)) && !is_nan($x1342 = JS::toNumber($x1333, $global)) && $x1341 < $x1342));
$x1324 = $x1334; }
if (JS::toBoolean($x1324, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1345 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 407, 13, '<image>/04_array.js');
$_TypeError =& $x1345[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1345;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1346 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 407, 13, '<image>/04_array.js');
$_ReferenceError =& $x1346[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1346;
$x1347 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 13);
$x1348 = $x1347($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1348->class) && $x1348->class === 'Error') {$x1348->properties['file'] = '<image>/04_array.js';$x1348->properties['line'] = 407;$x1348->properties['column'] = 13;$x1348->attributes['file'] = $x1348->attributes['line'] = $x1348->attributes['column'] = 0; }
throw new JSException($x1348, 407, 13, '<image>/04_array.js');
}
$x1343 = clone JS::$objectTemplate;
unset($x1349, $W1349, $S1349, $U1349);
$x1350 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, (string) 'prototype', 407, 9, '<image>/04_array.js');
$x1349 =& $x1350[0]; list(,$W1349,$S1349,$U1349) = $x1350;
$x1344 = $x1349;
$x1343->prototype = $x1344;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1353 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1354 = $x1353($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1354->class) && $x1354->class === 'Error') {$x1354->properties['file'] = '<image>/04_array.js';$x1354->properties['line'] = 407;$x1354->properties['column'] = 9;$x1354->attributes['file'] = $x1354->attributes['line'] = $x1354->attributes['column'] = 0; }
throw new JSException($x1354, 407, 9, '<image>/04_array.js');
}
$x1351 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1352 = $x1351($global, $x1343, $_TypeError, array('Array.prototype.reduceRight(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1344 = $x1352;
if (is_object($x1344) && $x1344 !== JS::$undefined) { $x1343 = $x1344; }
if (isset($x1343->class) && $x1343->class === 'Error') {$x1343->properties['file'] = '<image>/04_array.js';$x1343->properties['line'] = 407;$x1343->properties['column'] = 3;$x1343->attributes['file'] = $x1343->attributes['line'] = $x1343->attributes['column'] = 0; }
throw new JSException($x1343, 407, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1358 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 412, 6, '<image>/04_array.js');
$_arguments =& $x1358[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1358;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1359 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 412, 6, '<image>/04_array.js');
$_ReferenceError =& $x1359[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1359;
$x1360 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 412, 6);
$x1361 = $x1360($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1361->class) && $x1361->class === 'Error') {$x1361->properties['file'] = '<image>/04_array.js';$x1361->properties['line'] = 412;$x1361->properties['column'] = 6;$x1361->attributes['file'] = $x1361->attributes['line'] = $x1361->attributes['column'] = 0; }
throw new JSException($x1361, 412, 6, '<image>/04_array.js');
}
unset($x1362, $W1362, $S1362, $U1362);
$x1363 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 412, 15, '<image>/04_array.js');
$x1362 =& $x1363[0]; list(,$W1362,$S1362,$U1362) = $x1363;
$x1355 = JS::toPrimitive($x1362, $global);
$x1356 = JS::toPrimitive(1, $global);
$x1357 = (is_string($x1356) && is_string($x1355) ? strcmp($x1356, $x1355) < 0 : (!is_nan($x1364 = JS::toNumber($x1356, $global)) && !is_nan($x1365 = JS::toNumber($x1355, $global)) && $x1364 < $x1365));
if (JS::toBoolean($x1357, $global)) {
unset($x1366, $W1366, $S1366, $U1366);
$x1367 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 413, 20, '<image>/04_array.js');
$x1366 =& $x1367[0]; list(,$W1366,$S1366,$U1366) = $x1367;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1366;
unset($x1368, $W1368, $S1368, $U1368);
$x1369 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 414, 11, '<image>/04_array.js');
$x1368 =& $x1369[0]; list(,$W1368,$S1368,$U1368) = $x1369;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = (JS::toNumber($x1368, $global) - JS::toNumber(1, $global));;
}
else {
for ($x1370 = 0;; ++$x1370) {
if ($x1370 === 0) {
unset($x1371, $W1371, $S1371, $U1371);
$x1372 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 417, 16, '<image>/04_array.js');
$x1371 =& $x1372[0]; list(,$W1371,$S1371,$U1371) = $x1372;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = (JS::toNumber($x1371, $global) - JS::toNumber(1, $global));
}
if ($x1370 !== 0) {
$x1373 = --$_i;
}
$x1375 = JS::toPrimitive($_i, $global);
$x1376 = JS::toPrimitive(0, $global);
$x1377 = !(is_string($x1375) && is_string($x1376) ? strcmp($x1375, $x1376) < 0 : (!is_nan($x1378 = JS::toNumber($x1375, $global)) && !is_nan($x1379 = JS::toNumber($x1376, $global)) && $x1378 < $x1379));
$x1374 = $x1377;
if (JS::toBoolean($x1374, $global)) {
unset($x1381, $W1381, $S1381, $U1381);
$x1382 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 417, 43, '<image>/04_array.js');
$x1381 =& $x1382[0]; list(,$W1381,$S1381,$U1381) = $x1382;
$x1380 = (((gettype($x1381) === gettype(JS::$undefined) && $x1381 === JS::$undefined))|| (((is_float($x1381) || is_int($x1381)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1381 == JS::$undefined));
$x1374 = $x1380; }
if (!JS::toBoolean($x1374, $global)) { break; }

;
};
unset($x1383, $W1383, $S1383, $U1383);
$x1384 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 418, 15, '<image>/04_array.js');
$x1383 =& $x1384[0]; list(,$W1383,$S1383,$U1383) = $x1384;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1383;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = (JS::toNumber($_i, $global) - JS::toNumber(1, $global));;
};
for ($x1385 = 0;; ++$x1385) {
if ($x1385 !== 0) {
$x1386 = --$_i;
}
$x1387 = JS::toPrimitive($_i, $global);
$x1388 = JS::toPrimitive(0, $global);
$x1389 = !(is_string($x1387) && is_string($x1388) ? strcmp($x1387, $x1388) < 0 : (!is_nan($x1390 = JS::toNumber($x1387, $global)) && !is_nan($x1391 = JS::toNumber($x1388, $global)) && $x1390 < $x1391));
if (!JS::toBoolean($x1389, $global)) { break; }

unset($x1393, $W1393, $S1393, $U1393);
$x1394 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 423, 11, '<image>/04_array.js');
$x1393 =& $x1394[0]; list(,$W1393,$S1393,$U1393) = $x1394;
$x1392 = !(((gettype($x1393) === gettype(JS::$undefined) && $x1393 === JS::$undefined))|| (((is_float($x1393) || is_int($x1393)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1393 == JS::$undefined));
if (JS::toBoolean($x1392, $global)) {
unset($x1395, $W1395, $S1395, $U1395);
$x1396 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 424, 34, '<image>/04_array.js');
$x1395 =& $x1396[0]; list(,$W1395,$S1395,$U1395) = $x1396;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1399 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 424, 22, '<image>/04_array.js');
$_TypeError =& $x1399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1399;
$x1400 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1401 = $x1400($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1401->class) && $x1401->class === 'Error') {$x1401->properties['file'] = '<image>/04_array.js';$x1401->properties['line'] = 424;$x1401->properties['column'] = 22;$x1401->attributes['file'] = $x1401->attributes['line'] = $x1401->attributes['column'] = 0; }
throw new JSException($x1401, 424, 22, '<image>/04_array.js');
}
$x1397 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1398 = $x1397($global, $global, $_callbackFn, array($_value, $x1395, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1398;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1323=&$scope->properties[\'arguments\'];$x1323->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1323->properties[$i]=$args[$i];$x1323->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1328,$W1328,$S1328,$U1328);$x1329=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',406,10,\'<image>/04_array.js\');$x1328=&$x1329[0];list(,$W1328,$S1328,$U1328)=$x1329;$x1325=JS::toPrimitive($x1328,$global);$x1326=JS::toPrimitive(1,$global);$x1327=(is_string($x1325)&&is_string($x1326)?strcmp($x1325,$x1326)<0:(!is_nan($x1330=JS::toNumber($x1325,$global))&&!is_nan($x1331=JS::toNumber($x1326,$global))&&$x1330<$x1331));$x1324=$x1327;if(JS::toBoolean($x1324,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1335=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',406,25,\'<image>/04_array.js\');$_arguments=&$x1335[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1335;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1336=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',406,25,\'<image>/04_array.js\');$_ReferenceError=&$x1336[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1336;$x1337=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',406,25);$x1338=$x1337($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1338->class)&&$x1338->class===\'Error\'){$x1338->properties[\'file\']=\'<image>/04_array.js\';$x1338->properties[\'line\']=406;$x1338->properties[\'column\']=25;$x1338->attributes[\'file\']=$x1338->attributes[\'line\']=$x1338->attributes[\'column\']=0;}throw new JSException($x1338,406,25,\'<image>/04_array.js\');}unset($x1339,$W1339,$S1339,$U1339);$x1340=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',406,34,\'<image>/04_array.js\');$x1339=&$x1340[0];list(,$W1339,$S1339,$U1339)=$x1340;$x1332=JS::toPrimitive($x1339,$global);$x1333=JS::toPrimitive(2,$global);$x1334=(is_string($x1332)&&is_string($x1333)?strcmp($x1332,$x1333)<0:(!is_nan($x1341=JS::toNumber($x1332,$global))&&!is_nan($x1342=JS::toNumber($x1333,$global))&&$x1341<$x1342));$x1324=$x1334;}if(JS::toBoolean($x1324,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1345=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',407,13,\'<image>/04_array.js\');$_TypeError=&$x1345[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1345;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1346=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',407,13,\'<image>/04_array.js\');$_ReferenceError=&$x1346[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1346;$x1347=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,13);$x1348=$x1347($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1348->class)&&$x1348->class===\'Error\'){$x1348->properties[\'file\']=\'<image>/04_array.js\';$x1348->properties[\'line\']=407;$x1348->properties[\'column\']=13;$x1348->attributes[\'file\']=$x1348->attributes[\'line\']=$x1348->attributes[\'column\']=0;}throw new JSException($x1348,407,13,\'<image>/04_array.js\');}$x1343=clone JS::$objectTemplate;unset($x1349,$W1349,$S1349,$U1349);$x1350=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,(string)\'prototype\',407,9,\'<image>/04_array.js\');$x1349=&$x1350[0];list(,$W1349,$S1349,$U1349)=$x1350;$x1344=$x1349;$x1343->prototype=$x1344;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1353=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1354=$x1353($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1354->class)&&$x1354->class===\'Error\'){$x1354->properties[\'file\']=\'<image>/04_array.js\';$x1354->properties[\'line\']=407;$x1354->properties[\'column\']=9;$x1354->attributes[\'file\']=$x1354->attributes[\'line\']=$x1354->attributes[\'column\']=0;}throw new JSException($x1354,407,9,\'<image>/04_array.js\');}$x1351=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1352=$x1351($global,$x1343,$_TypeError,array(\'Array.prototype.reduceRight(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1344=$x1352;if(is_object($x1344)&&$x1344!==JS::$undefined){$x1343=$x1344;}if(isset($x1343->class)&&$x1343->class===\'Error\'){$x1343->properties[\'file\']=\'<image>/04_array.js\';$x1343->properties[\'line\']=407;$x1343->properties[\'column\']=3;$x1343->attributes[\'file\']=$x1343->attributes[\'line\']=$x1343->attributes[\'column\']=0;}throw new JSException($x1343,407,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1358=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',412,6,\'<image>/04_array.js\');$_arguments=&$x1358[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1358;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1359=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',412,6,\'<image>/04_array.js\');$_ReferenceError=&$x1359[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1359;$x1360=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',412,6);$x1361=$x1360($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1361->class)&&$x1361->class===\'Error\'){$x1361->properties[\'file\']=\'<image>/04_array.js\';$x1361->properties[\'line\']=412;$x1361->properties[\'column\']=6;$x1361->attributes[\'file\']=$x1361->attributes[\'line\']=$x1361->attributes[\'column\']=0;}throw new JSException($x1361,412,6,\'<image>/04_array.js\');}unset($x1362,$W1362,$S1362,$U1362);$x1363=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',412,15,\'<image>/04_array.js\');$x1362=&$x1363[0];list(,$W1362,$S1362,$U1362)=$x1363;$x1355=JS::toPrimitive($x1362,$global);$x1356=JS::toPrimitive(1,$global);$x1357=(is_string($x1356)&&is_string($x1355)?strcmp($x1356,$x1355)<0:(!is_nan($x1364=JS::toNumber($x1356,$global))&&!is_nan($x1365=JS::toNumber($x1355,$global))&&$x1364<$x1365));if(JS::toBoolean($x1357,$global)){unset($x1366,$W1366,$S1366,$U1366);$x1367=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,413,20,\'<image>/04_array.js\');$x1366=&$x1367[0];list(,$W1366,$S1366,$U1366)=$x1367;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1366;unset($x1368,$W1368,$S1368,$U1368);$x1369=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',414,11,\'<image>/04_array.js\');$x1368=&$x1369[0];list(,$W1368,$S1368,$U1368)=$x1369;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=(JS::toNumber($x1368,$global)-JS::toNumber(1,$global));}else{for($x1370=0;;++$x1370){if($x1370===0){unset($x1371,$W1371,$S1371,$U1371);$x1372=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',417,16,\'<image>/04_array.js\');$x1371=&$x1372[0];list(,$W1371,$S1371,$U1371)=$x1372;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=(JS::toNumber($x1371,$global)-JS::toNumber(1,$global));}if($x1370!==0){$x1373=--$_i;}$x1375=JS::toPrimitive($_i,$global);$x1376=JS::toPrimitive(0,$global);$x1377=!(is_string($x1375)&&is_string($x1376)?strcmp($x1375,$x1376)<0:(!is_nan($x1378=JS::toNumber($x1375,$global))&&!is_nan($x1379=JS::toNumber($x1376,$global))&&$x1378<$x1379));$x1374=$x1377;if(JS::toBoolean($x1374,$global)){unset($x1381,$W1381,$S1381,$U1381);$x1382=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,417,43,\'<image>/04_array.js\');$x1381=&$x1382[0];list(,$W1381,$S1381,$U1381)=$x1382;$x1380=(((gettype($x1381)===gettype(JS::$undefined)&&$x1381===JS::$undefined))||(((is_float($x1381)||is_int($x1381))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1381==JS::$undefined));$x1374=$x1380;}if(!JS::toBoolean($x1374,$global)){break;}}unset($x1383,$W1383,$S1383,$U1383);$x1384=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,418,15,\'<image>/04_array.js\');$x1383=&$x1384[0];list(,$W1383,$S1383,$U1383)=$x1384;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1383;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=(JS::toNumber($_i,$global)-JS::toNumber(1,$global));}for($x1385=0;;++$x1385){if($x1385!==0){$x1386=--$_i;}$x1387=JS::toPrimitive($_i,$global);$x1388=JS::toPrimitive(0,$global);$x1389=!(is_string($x1387)&&is_string($x1388)?strcmp($x1387,$x1388)<0:(!is_nan($x1390=JS::toNumber($x1387,$global))&&!is_nan($x1391=JS::toNumber($x1388,$global))&&$x1390<$x1391));if(!JS::toBoolean($x1389,$global)){break;}unset($x1393,$W1393,$S1393,$U1393);$x1394=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,423,11,\'<image>/04_array.js\');$x1393=&$x1394[0];list(,$W1393,$S1393,$U1393)=$x1394;$x1392=!(((gettype($x1393)===gettype(JS::$undefined)&&$x1393===JS::$undefined))||(((is_float($x1393)||is_int($x1393))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1393==JS::$undefined));if(JS::toBoolean($x1392,$global)){unset($x1395,$W1395,$S1395,$U1395);$x1396=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,424,34,\'<image>/04_array.js\');$x1395=&$x1396[0];list(,$W1395,$S1395,$U1395)=$x1396;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1399=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',424,22,\'<image>/04_array.js\');$_TypeError=&$x1399[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1399;$x1400=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1401=$x1400($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1401->class)&&$x1401->class===\'Error\'){$x1401->properties[\'file\']=\'<image>/04_array.js\';$x1401->properties[\'line\']=424;$x1401->properties[\'column\']=22;$x1401->attributes[\'file\']=$x1401->attributes[\'line\']=$x1401->attributes[\'column\']=0;}throw new JSException($x1401,424,22,\'<image>/04_array.js\');}$x1397=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1398=$x1397($global,$global,$_callbackFn,array($_value,$x1395,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1398;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/04_array.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/04_array.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Array;
$x75 = clone JS::$functionTemplate; $x75->call = '_339fc8fcf8563d9777a12bd15b91ae1b_1'; $x75->parameters = array (
); $x75->name = 'Array'; $x75->scope = $scope; $x75->properties['prototype'] = clone JS::$objectTemplate; $x75->attributes['prototype'] = JS::WRITABLE; $x75->properties['prototype']->properties['constructor'] = $x75; $x75->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x75->properties['length'] = 0; $x75->attributes['length'] = 0;
$scope->properties['Array'] = JS::$undefined; $_Array =& $scope->properties['Array'];
$UArray = FALSE;
$_Array = $x75;
$x82 = clone JS::$functionTemplate; $x82->call = '_339fc8fcf8563d9777a12bd15b91ae1b_5'; $x82->parameters = array (
  0 => 'arg',
); $x82->scope = $scope; $x82->properties['prototype'] = clone JS::$objectTemplate; $x82->attributes['prototype'] = JS::WRITABLE; $x82->properties['prototype']->properties['constructor'] = $x82; $x82->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x82->properties['length'] = 1; $x82->attributes['length'] = 0;
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x83 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 30, 15, '<image>/04_array.js');
$_TypeError =& $x83[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x83;
$x84 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x85 = $x84($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x85->class) && $x85->class === 'Error') {$x85->properties['file'] = '<image>/04_array.js';$x85->properties['line'] = 30;$x85->properties['column'] = 15;$x85->attributes['file'] = $x85->attributes['line'] = $x85->attributes['column'] = 0; }
throw new JSException($x85, 30, 15, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x86, $W86, $S86, $U86);
$x87 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, (string) 'isArray', 30, 15, '<image>/04_array.js');
$x86 =& $x87[0]; list(,$W86,$S86,$U86) = $x87;
if ($U86 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties['isArray'] = $x86; $x86 =& $_Array->properties['isArray']; $_Array->attributes['isArray'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U86 = FALSE; $W86 = TRUE; }
if (isset($S86)) {
$x89 = $S86->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x90 = $x89($global, $_Array, $S86, array($x82), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x88 = $x90;
} else {
if (!$U86) {$x88 = $x82;if ($W86) { $x86 = $x82; }  }
else { $x88 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array' &&  is_int('isArray') && 'isArray' >= $_Array->properties['length']) { $_Array->properties['length'] = 'isArray' + 1; };
$x91 = clone JS::$objectTemplate;
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x92 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 38, 17, '<image>/04_array.js');
$_TypeError =& $x92[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x92;
$x93 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x94 = $x93($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x94->class) && $x94->class === 'Error') {$x94->properties['file'] = '<image>/04_array.js';$x94->properties['line'] = 38;$x94->properties['column'] = 17;$x94->attributes['file'] = $x94->attributes['line'] = $x94->attributes['column'] = 0; }
throw new JSException($x94, 38, 17, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x95, $W95, $S95, $U95);
$x96 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, (string) 'prototype', 38, 17, '<image>/04_array.js');
$x95 =& $x96[0]; list(,$W95,$S95,$U95) = $x96;
if ($U95 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties['prototype'] = $x95; $x95 =& $_Array->properties['prototype']; $_Array->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U95 = FALSE; $W95 = TRUE; }
if (isset($S95)) {
$x98 = $S95->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x99 = $x98($global, $_Array, $S95, array($x91), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x97 = $x99;
} else {
if (!$U95) {$x97 = $x91;if ($W95) { $x95 = $x91; }  }
else { $x97 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Array->properties['length']) { $_Array->properties['length'] = 'prototype' + 1; };
$_Array->prototype =$_Array->properties['prototype'];
unset($_Object, $WObject, $SObject, $UObject);
$x100 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Object', 40, 50, '<image>/04_array.js');
$_Object =& $x100[0]; list(,$WObject,$SObject,$UObject) = $x100;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x101 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 40, 50, '<image>/04_array.js');
$_ReferenceError =& $x101[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x101;
$x102 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 40, 50);
$x103 = $x102($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x103->class) && $x103->class === 'Error') {$x103->properties['file'] = '<image>/04_array.js';$x103->properties['line'] = 40;$x103->properties['column'] = 50;$x103->attributes['file'] = $x103->attributes['line'] = $x103->attributes['column'] = 0; }
throw new JSException($x103, 40, 50, '<image>/04_array.js');
}
$_Array->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Array->properties['prototype']->class = 'Array';
$_Array->properties['prototype']->extensible = TRUE;
unset($x104, $W104, $S104, $U104);
$x105 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 43, 6, '<image>/04_array.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
if ($x104 === JS::$undefined || $x104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x106 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 43, 29, '<image>/04_array.js');
$_TypeError =& $x106[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x106;
$x107 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x108 = $x107($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x108->class) && $x108->class === 'Error') {$x108->properties['file'] = '<image>/04_array.js';$x108->properties['line'] = 43;$x108->properties['column'] = 29;$x108->attributes['file'] = $x108->attributes['line'] = $x108->attributes['column'] = 0; }
throw new JSException($x108, 43, 29, '<image>/04_array.js');
}
$x104 = JS::toObject($x104, $global);
unset($x109, $W109, $S109, $U109);
$x110 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x104, (string) 'constructor', 43, 29, '<image>/04_array.js');
$x109 =& $x110[0]; list(,$W109,$S109,$U109) = $x110;
if ($U109 && (!isset($x104->extensible) || $x104->extensible)) {$x104->properties['constructor'] = $x109; $x109 =& $x104->properties['constructor']; $x104->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U109 = FALSE; $W109 = TRUE; }
if (isset($S109)) {
$x112 = $S109->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x113 = $x112($global, $x104, $S109, array($_Array), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x111 = $x113;
} else {
if (!$U109) {$x111 = $_Array;if ($W109) { $x109 = $_Array; }  }
else { $x111 = JS::$undefined; }
}
if (isset($x104->class) && $x104->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x104->properties['length']) { $x104->properties['length'] = 'constructor' + 1; };
unset($x114, $W114, $S114, $U114);
$x115 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 44, 6, '<image>/04_array.js');
$x114 =& $x115[0]; list(,$W114,$S114,$U114) = $x115;
if ($x114 === JS::$undefined || $x114 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x116 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 44, 24, '<image>/04_array.js');
$_TypeError =& $x116[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x116;
$x117 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x118 = $x117($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x118->class) && $x118->class === 'Error') {$x118->properties['file'] = '<image>/04_array.js';$x118->properties['line'] = 44;$x118->properties['column'] = 24;$x118->attributes['file'] = $x118->attributes['line'] = $x118->attributes['column'] = 0; }
throw new JSException($x118, 44, 24, '<image>/04_array.js');
}
$x114 = JS::toObject($x114, $global);
unset($x119, $W119, $S119, $U119);
$x120 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x114, (string) 'length', 44, 24, '<image>/04_array.js');
$x119 =& $x120[0]; list(,$W119,$S119,$U119) = $x120;
if ($U119 && (!isset($x114->extensible) || $x114->extensible)) {$x114->properties['length'] = $x119; $x119 =& $x114->properties['length']; $x114->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U119 = FALSE; $W119 = TRUE; }
if (isset($S119)) {
$x122 = $S119->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x123 = $x122($global, $x114, $S119, array(0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x121 = $x123;
} else {
if (!$U119) {$x121 = 0;if ($W119) { $x119 = 0; }  }
else { $x121 = JS::$undefined; }
}
if (isset($x114->class) && $x114->class === 'Array' &&  is_int('length') && 'length' >= $x114->properties['length']) { $x114->properties['length'] = 'length' + 1; };
$x137 = clone JS::$functionTemplate; $x137->call = '_339fc8fcf8563d9777a12bd15b91ae1b_6'; $x137->parameters = array (
); $x137->scope = $scope; $x137->properties['prototype'] = clone JS::$objectTemplate; $x137->attributes['prototype'] = JS::WRITABLE; $x137->properties['prototype']->properties['constructor'] = $x137; $x137->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x137->properties['length'] = 0; $x137->attributes['length'] = 0;
unset($x138, $W138, $S138, $U138);
$x139 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 46, 6, '<image>/04_array.js');
$x138 =& $x139[0]; list(,$W138,$S138,$U138) = $x139;
if ($x138 === JS::$undefined || $x138 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x140 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 46, 26, '<image>/04_array.js');
$_TypeError =& $x140[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x140;
$x141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x142 = $x141($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x142->class) && $x142->class === 'Error') {$x142->properties['file'] = '<image>/04_array.js';$x142->properties['line'] = 46;$x142->properties['column'] = 26;$x142->attributes['file'] = $x142->attributes['line'] = $x142->attributes['column'] = 0; }
throw new JSException($x142, 46, 26, '<image>/04_array.js');
}
$x138 = JS::toObject($x138, $global);
unset($x143, $W143, $S143, $U143);
$x144 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x138, (string) 'toString', 46, 26, '<image>/04_array.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if ($U143 && (!isset($x138->extensible) || $x138->extensible)) {$x138->properties['toString'] = $x143; $x143 =& $x138->properties['toString']; $x138->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U143 = FALSE; $W143 = TRUE; }
if (isset($S143)) {
$x146 = $S143->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x147 = $x146($global, $x138, $S143, array($x137), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x145 = $x147;
} else {
if (!$U143) {$x145 = $x137;if ($W143) { $x143 = $x137; }  }
else { $x145 = JS::$undefined; }
}
if (isset($x138->class) && $x138->class === 'Array' &&  is_int('toString') && 'toString' >= $x138->properties['length']) { $x138->properties['length'] = 'toString' + 1; };
unset($x148, $W148, $S148, $U148);
$x149 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 50, 39, '<image>/04_array.js');
$x148 =& $x149[0]; list(,$W148,$S148,$U148) = $x149;
unset($x150, $W150, $S150, $U150);
$x151 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x148, (string) 'toString', 50, 49, '<image>/04_array.js');
$x150 =& $x151[0]; list(,$W150,$S150,$U150) = $x151;
unset($x152, $W152, $S152, $U152);
$x153 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 50, 6, '<image>/04_array.js');
$x152 =& $x153[0]; list(,$W152,$S152,$U152) = $x153;
if ($x152 === JS::$undefined || $x152 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x154 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 50, 32, '<image>/04_array.js');
$_TypeError =& $x154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x154;
$x155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x156 = $x155($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x156->class) && $x156->class === 'Error') {$x156->properties['file'] = '<image>/04_array.js';$x156->properties['line'] = 50;$x156->properties['column'] = 32;$x156->attributes['file'] = $x156->attributes['line'] = $x156->attributes['column'] = 0; }
throw new JSException($x156, 50, 32, '<image>/04_array.js');
}
$x152 = JS::toObject($x152, $global);
unset($x157, $W157, $S157, $U157);
$x158 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x152, (string) 'toLocaleString', 50, 32, '<image>/04_array.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
if ($U157 && (!isset($x152->extensible) || $x152->extensible)) {$x152->properties['toLocaleString'] = $x157; $x157 =& $x152->properties['toLocaleString']; $x152->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U157 = FALSE; $W157 = TRUE; }
if (isset($S157)) {
$x160 = $S157->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x161 = $x160($global, $x152, $S157, array($x150), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x159 = $x161;
} else {
if (!$U157) {$x159 = $x150;if ($W157) { $x157 = $x150; }  }
else { $x159 = JS::$undefined; }
}
if (isset($x152->class) && $x152->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x152->properties['length']) { $x152->properties['length'] = 'toLocaleString' + 1; };
$x256 = clone JS::$functionTemplate; $x256->call = '_339fc8fcf8563d9777a12bd15b91ae1b_7'; $x256->parameters = array (
  0 => 'item',
); $x256->scope = $scope; $x256->properties['prototype'] = clone JS::$objectTemplate; $x256->attributes['prototype'] = JS::WRITABLE; $x256->properties['prototype']->properties['constructor'] = $x256; $x256->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x256->properties['length'] = 1; $x256->attributes['length'] = 0;
unset($x257, $W257, $S257, $U257);
$x258 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 52, 6, '<image>/04_array.js');
$x257 =& $x258[0]; list(,$W257,$S257,$U257) = $x258;
if ($x257 === JS::$undefined || $x257 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x259 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 52, 24, '<image>/04_array.js');
$_TypeError =& $x259[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x259;
$x260 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x261 = $x260($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x261->class) && $x261->class === 'Error') {$x261->properties['file'] = '<image>/04_array.js';$x261->properties['line'] = 52;$x261->properties['column'] = 24;$x261->attributes['file'] = $x261->attributes['line'] = $x261->attributes['column'] = 0; }
throw new JSException($x261, 52, 24, '<image>/04_array.js');
}
$x257 = JS::toObject($x257, $global);
unset($x262, $W262, $S262, $U262);
$x263 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x257, (string) 'concat', 52, 24, '<image>/04_array.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
if ($U262 && (!isset($x257->extensible) || $x257->extensible)) {$x257->properties['concat'] = $x262; $x262 =& $x257->properties['concat']; $x257->attributes['concat'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U262 = FALSE; $W262 = TRUE; }
if (isset($S262)) {
$x265 = $S262->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x266 = $x265($global, $x257, $S262, array($x256), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x264 = $x266;
} else {
if (!$U262) {$x264 = $x256;if ($W262) { $x262 = $x256; }  }
else { $x264 = JS::$undefined; }
}
if (isset($x257->class) && $x257->class === 'Array' &&  is_int('concat') && 'concat' >= $x257->properties['length']) { $x257->properties['length'] = 'concat' + 1; };
$x296 = clone JS::$functionTemplate; $x296->call = '_339fc8fcf8563d9777a12bd15b91ae1b_8'; $x296->parameters = array (
  0 => 'separator',
); $x296->scope = $scope; $x296->properties['prototype'] = clone JS::$objectTemplate; $x296->attributes['prototype'] = JS::WRITABLE; $x296->properties['prototype']->properties['constructor'] = $x296; $x296->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x296->properties['length'] = 1; $x296->attributes['length'] = 0;
unset($x297, $W297, $S297, $U297);
$x298 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 73, 6, '<image>/04_array.js');
$x297 =& $x298[0]; list(,$W297,$S297,$U297) = $x298;
if ($x297 === JS::$undefined || $x297 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x299 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 73, 22, '<image>/04_array.js');
$_TypeError =& $x299[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x299;
$x300 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x301 = $x300($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x301->class) && $x301->class === 'Error') {$x301->properties['file'] = '<image>/04_array.js';$x301->properties['line'] = 73;$x301->properties['column'] = 22;$x301->attributes['file'] = $x301->attributes['line'] = $x301->attributes['column'] = 0; }
throw new JSException($x301, 73, 22, '<image>/04_array.js');
}
$x297 = JS::toObject($x297, $global);
unset($x302, $W302, $S302, $U302);
$x303 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x297, (string) 'join', 73, 22, '<image>/04_array.js');
$x302 =& $x303[0]; list(,$W302,$S302,$U302) = $x303;
if ($U302 && (!isset($x297->extensible) || $x297->extensible)) {$x297->properties['join'] = $x302; $x302 =& $x297->properties['join']; $x297->attributes['join'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U302 = FALSE; $W302 = TRUE; }
if (isset($S302)) {
$x305 = $S302->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x306 = $x305($global, $x297, $S302, array($x296), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x304 = $x306;
} else {
if (!$U302) {$x304 = $x296;if ($W302) { $x302 = $x296; }  }
else { $x304 = JS::$undefined; }
}
if (isset($x297->class) && $x297->class === 'Array' &&  is_int('join') && 'join' >= $x297->properties['length']) { $x297->properties['length'] = 'join' + 1; };
$x333 = clone JS::$functionTemplate; $x333->call = '_339fc8fcf8563d9777a12bd15b91ae1b_9'; $x333->parameters = array (
); $x333->scope = $scope; $x333->properties['prototype'] = clone JS::$objectTemplate; $x333->attributes['prototype'] = JS::WRITABLE; $x333->properties['prototype']->properties['constructor'] = $x333; $x333->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x333->properties['length'] = 0; $x333->attributes['length'] = 0;
unset($x334, $W334, $S334, $U334);
$x335 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 99, 6, '<image>/04_array.js');
$x334 =& $x335[0]; list(,$W334,$S334,$U334) = $x335;
if ($x334 === JS::$undefined || $x334 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x336 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 99, 21, '<image>/04_array.js');
$_TypeError =& $x336[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x336;
$x337 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x338 = $x337($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x338->class) && $x338->class === 'Error') {$x338->properties['file'] = '<image>/04_array.js';$x338->properties['line'] = 99;$x338->properties['column'] = 21;$x338->attributes['file'] = $x338->attributes['line'] = $x338->attributes['column'] = 0; }
throw new JSException($x338, 99, 21, '<image>/04_array.js');
}
$x334 = JS::toObject($x334, $global);
unset($x339, $W339, $S339, $U339);
$x340 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x334, (string) 'pop', 99, 21, '<image>/04_array.js');
$x339 =& $x340[0]; list(,$W339,$S339,$U339) = $x340;
if ($U339 && (!isset($x334->extensible) || $x334->extensible)) {$x334->properties['pop'] = $x339; $x339 =& $x334->properties['pop']; $x334->attributes['pop'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U339 = FALSE; $W339 = TRUE; }
if (isset($S339)) {
$x342 = $S339->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x343 = $x342($global, $x334, $S339, array($x333), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x341 = $x343;
} else {
if (!$U339) {$x341 = $x333;if ($W339) { $x339 = $x333; }  }
else { $x341 = JS::$undefined; }
}
if (isset($x334->class) && $x334->class === 'Array' &&  is_int('pop') && 'pop' >= $x334->properties['length']) { $x334->properties['length'] = 'pop' + 1; };
$x373 = clone JS::$functionTemplate; $x373->call = '_339fc8fcf8563d9777a12bd15b91ae1b_10'; $x373->parameters = array (
  0 => 'item',
); $x373->scope = $scope; $x373->properties['prototype'] = clone JS::$objectTemplate; $x373->attributes['prototype'] = JS::WRITABLE; $x373->properties['prototype']->properties['constructor'] = $x373; $x373->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x373->properties['length'] = 1; $x373->attributes['length'] = 0;
unset($x374, $W374, $S374, $U374);
$x375 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 111, 6, '<image>/04_array.js');
$x374 =& $x375[0]; list(,$W374,$S374,$U374) = $x375;
if ($x374 === JS::$undefined || $x374 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x376 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 111, 22, '<image>/04_array.js');
$_TypeError =& $x376[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x376;
$x377 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x378 = $x377($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x378->class) && $x378->class === 'Error') {$x378->properties['file'] = '<image>/04_array.js';$x378->properties['line'] = 111;$x378->properties['column'] = 22;$x378->attributes['file'] = $x378->attributes['line'] = $x378->attributes['column'] = 0; }
throw new JSException($x378, 111, 22, '<image>/04_array.js');
}
$x374 = JS::toObject($x374, $global);
unset($x379, $W379, $S379, $U379);
$x380 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x374, (string) 'push', 111, 22, '<image>/04_array.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
if ($U379 && (!isset($x374->extensible) || $x374->extensible)) {$x374->properties['push'] = $x379; $x379 =& $x374->properties['push']; $x374->attributes['push'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U379 = FALSE; $W379 = TRUE; }
if (isset($S379)) {
$x382 = $S379->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x383 = $x382($global, $x374, $S379, array($x373), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x381 = $x383;
} else {
if (!$U379) {$x381 = $x373;if ($W379) { $x379 = $x373; }  }
else { $x381 = JS::$undefined; }
}
if (isset($x374->class) && $x374->class === 'Array' &&  is_int('push') && 'push' >= $x374->properties['length']) { $x374->properties['length'] = 'push' + 1; };
$x416 = clone JS::$functionTemplate; $x416->call = '_339fc8fcf8563d9777a12bd15b91ae1b_11'; $x416->parameters = array (
); $x416->scope = $scope; $x416->properties['prototype'] = clone JS::$objectTemplate; $x416->attributes['prototype'] = JS::WRITABLE; $x416->properties['prototype']->properties['constructor'] = $x416; $x416->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x416->properties['length'] = 0; $x416->attributes['length'] = 0;
unset($x417, $W417, $S417, $U417);
$x418 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 119, 6, '<image>/04_array.js');
$x417 =& $x418[0]; list(,$W417,$S417,$U417) = $x418;
if ($x417 === JS::$undefined || $x417 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x419 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 119, 25, '<image>/04_array.js');
$_TypeError =& $x419[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x419;
$x420 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x421 = $x420($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x421->class) && $x421->class === 'Error') {$x421->properties['file'] = '<image>/04_array.js';$x421->properties['line'] = 119;$x421->properties['column'] = 25;$x421->attributes['file'] = $x421->attributes['line'] = $x421->attributes['column'] = 0; }
throw new JSException($x421, 119, 25, '<image>/04_array.js');
}
$x417 = JS::toObject($x417, $global);
unset($x422, $W422, $S422, $U422);
$x423 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x417, (string) 'reverse', 119, 25, '<image>/04_array.js');
$x422 =& $x423[0]; list(,$W422,$S422,$U422) = $x423;
if ($U422 && (!isset($x417->extensible) || $x417->extensible)) {$x417->properties['reverse'] = $x422; $x422 =& $x417->properties['reverse']; $x417->attributes['reverse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U422 = FALSE; $W422 = TRUE; }
if (isset($S422)) {
$x425 = $S422->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x426 = $x425($global, $x417, $S422, array($x416), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x424 = $x426;
} else {
if (!$U422) {$x424 = $x416;if ($W422) { $x422 = $x416; }  }
else { $x424 = JS::$undefined; }
}
if (isset($x417->class) && $x417->class === 'Array' &&  is_int('reverse') && 'reverse' >= $x417->properties['length']) { $x417->properties['length'] = 'reverse' + 1; };
$x467 = clone JS::$functionTemplate; $x467->call = '_339fc8fcf8563d9777a12bd15b91ae1b_12'; $x467->parameters = array (
); $x467->scope = $scope; $x467->properties['prototype'] = clone JS::$objectTemplate; $x467->attributes['prototype'] = JS::WRITABLE; $x467->properties['prototype']->properties['constructor'] = $x467; $x467->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x467->properties['length'] = 0; $x467->attributes['length'] = 0;
unset($x468, $W468, $S468, $U468);
$x469 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 129, 6, '<image>/04_array.js');
$x468 =& $x469[0]; list(,$W468,$S468,$U468) = $x469;
if ($x468 === JS::$undefined || $x468 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x470 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 129, 23, '<image>/04_array.js');
$_TypeError =& $x470[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x470;
$x471 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x472 = $x471($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x472->class) && $x472->class === 'Error') {$x472->properties['file'] = '<image>/04_array.js';$x472->properties['line'] = 129;$x472->properties['column'] = 23;$x472->attributes['file'] = $x472->attributes['line'] = $x472->attributes['column'] = 0; }
throw new JSException($x472, 129, 23, '<image>/04_array.js');
}
$x468 = JS::toObject($x468, $global);
unset($x473, $W473, $S473, $U473);
$x474 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x468, (string) 'shift', 129, 23, '<image>/04_array.js');
$x473 =& $x474[0]; list(,$W473,$S473,$U473) = $x474;
if ($U473 && (!isset($x468->extensible) || $x468->extensible)) {$x468->properties['shift'] = $x473; $x473 =& $x468->properties['shift']; $x468->attributes['shift'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U473 = FALSE; $W473 = TRUE; }
if (isset($S473)) {
$x476 = $S473->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x477 = $x476($global, $x468, $S473, array($x467), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x475 = $x477;
} else {
if (!$U473) {$x475 = $x467;if ($W473) { $x473 = $x467; }  }
else { $x475 = JS::$undefined; }
}
if (isset($x468->class) && $x468->class === 'Array' &&  is_int('shift') && 'shift' >= $x468->properties['length']) { $x468->properties['length'] = 'shift' + 1; };
$x538 = clone JS::$functionTemplate; $x538->call = '_339fc8fcf8563d9777a12bd15b91ae1b_13'; $x538->parameters = array (
  0 => 'start',
  1 => 'end',
); $x538->scope = $scope; $x538->properties['prototype'] = clone JS::$objectTemplate; $x538->attributes['prototype'] = JS::WRITABLE; $x538->properties['prototype']->properties['constructor'] = $x538; $x538->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x538->properties['length'] = 2; $x538->attributes['length'] = 0;
unset($x539, $W539, $S539, $U539);
$x540 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 145, 6, '<image>/04_array.js');
$x539 =& $x540[0]; list(,$W539,$S539,$U539) = $x540;
if ($x539 === JS::$undefined || $x539 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x541 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 145, 23, '<image>/04_array.js');
$_TypeError =& $x541[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x541;
$x542 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x543 = $x542($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x543->class) && $x543->class === 'Error') {$x543->properties['file'] = '<image>/04_array.js';$x543->properties['line'] = 145;$x543->properties['column'] = 23;$x543->attributes['file'] = $x543->attributes['line'] = $x543->attributes['column'] = 0; }
throw new JSException($x543, 145, 23, '<image>/04_array.js');
}
$x539 = JS::toObject($x539, $global);
unset($x544, $W544, $S544, $U544);
$x545 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x539, (string) 'slice', 145, 23, '<image>/04_array.js');
$x544 =& $x545[0]; list(,$W544,$S544,$U544) = $x545;
if ($U544 && (!isset($x539->extensible) || $x539->extensible)) {$x539->properties['slice'] = $x544; $x544 =& $x539->properties['slice']; $x539->attributes['slice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U544 = FALSE; $W544 = TRUE; }
if (isset($S544)) {
$x547 = $S544->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x548 = $x547($global, $x539, $S544, array($x538), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x546 = $x548;
} else {
if (!$U544) {$x546 = $x538;if ($W544) { $x544 = $x538; }  }
else { $x546 = JS::$undefined; }
}
if (isset($x539->class) && $x539->class === 'Array' &&  is_int('slice') && 'slice' >= $x539->properties['length']) { $x539->properties['length'] = 'slice' + 1; };
$x698 = clone JS::$functionTemplate; $x698->call = '_339fc8fcf8563d9777a12bd15b91ae1b_14'; $x698->parameters = array (
  0 => 'compareFn',
); $x698->scope = $scope; $x698->properties['prototype'] = clone JS::$objectTemplate; $x698->attributes['prototype'] = JS::WRITABLE; $x698->properties['prototype']->properties['constructor'] = $x698; $x698->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x698->properties['length'] = 1; $x698->attributes['length'] = 0;
unset($x699, $W699, $S699, $U699);
$x700 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 171, 6, '<image>/04_array.js');
$x699 =& $x700[0]; list(,$W699,$S699,$U699) = $x700;
if ($x699 === JS::$undefined || $x699 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x701 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 171, 22, '<image>/04_array.js');
$_TypeError =& $x701[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x701;
$x702 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x703 = $x702($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x703->class) && $x703->class === 'Error') {$x703->properties['file'] = '<image>/04_array.js';$x703->properties['line'] = 171;$x703->properties['column'] = 22;$x703->attributes['file'] = $x703->attributes['line'] = $x703->attributes['column'] = 0; }
throw new JSException($x703, 171, 22, '<image>/04_array.js');
}
$x699 = JS::toObject($x699, $global);
unset($x704, $W704, $S704, $U704);
$x705 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x699, (string) 'sort', 171, 22, '<image>/04_array.js');
$x704 =& $x705[0]; list(,$W704,$S704,$U704) = $x705;
if ($U704 && (!isset($x699->extensible) || $x699->extensible)) {$x699->properties['sort'] = $x704; $x704 =& $x699->properties['sort']; $x699->attributes['sort'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U704 = FALSE; $W704 = TRUE; }
if (isset($S704)) {
$x707 = $S704->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x708 = $x707($global, $x699, $S704, array($x698), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x706 = $x708;
} else {
if (!$U704) {$x706 = $x698;if ($W704) { $x704 = $x698; }  }
else { $x706 = JS::$undefined; }
}
if (isset($x699->class) && $x699->class === 'Array' &&  is_int('sort') && 'sort' >= $x699->properties['length']) { $x699->properties['length'] = 'sort' + 1; };
$x770 = clone JS::$functionTemplate; $x770->call = '_339fc8fcf8563d9777a12bd15b91ae1b_16'; $x770->parameters = array (
  0 => 'start',
  1 => 'deleteCount',
); $x770->scope = $scope; $x770->properties['prototype'] = clone JS::$objectTemplate; $x770->attributes['prototype'] = JS::WRITABLE; $x770->properties['prototype']->properties['constructor'] = $x770; $x770->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x770->properties['length'] = 2; $x770->attributes['length'] = 0;
unset($x771, $W771, $S771, $U771);
$x772 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 220, 6, '<image>/04_array.js');
$x771 =& $x772[0]; list(,$W771,$S771,$U771) = $x772;
if ($x771 === JS::$undefined || $x771 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x773 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 220, 24, '<image>/04_array.js');
$_TypeError =& $x773[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x773;
$x774 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x775 = $x774($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x775->class) && $x775->class === 'Error') {$x775->properties['file'] = '<image>/04_array.js';$x775->properties['line'] = 220;$x775->properties['column'] = 24;$x775->attributes['file'] = $x775->attributes['line'] = $x775->attributes['column'] = 0; }
throw new JSException($x775, 220, 24, '<image>/04_array.js');
}
$x771 = JS::toObject($x771, $global);
unset($x776, $W776, $S776, $U776);
$x777 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x771, (string) 'splice', 220, 24, '<image>/04_array.js');
$x776 =& $x777[0]; list(,$W776,$S776,$U776) = $x777;
if ($U776 && (!isset($x771->extensible) || $x771->extensible)) {$x771->properties['splice'] = $x776; $x776 =& $x771->properties['splice']; $x771->attributes['splice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U776 = FALSE; $W776 = TRUE; }
if (isset($S776)) {
$x779 = $S776->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x780 = $x779($global, $x771, $S776, array($x770), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x778 = $x780;
} else {
if (!$U776) {$x778 = $x770;if ($W776) { $x776 = $x770; }  }
else { $x778 = JS::$undefined; }
}
if (isset($x771->class) && $x771->class === 'Array' &&  is_int('splice') && 'splice' >= $x771->properties['length']) { $x771->properties['length'] = 'splice' + 1; };
$x835 = clone JS::$functionTemplate; $x835->call = '_339fc8fcf8563d9777a12bd15b91ae1b_17'; $x835->parameters = array (
  0 => 'item',
); $x835->scope = $scope; $x835->properties['prototype'] = clone JS::$objectTemplate; $x835->attributes['prototype'] = JS::WRITABLE; $x835->properties['prototype']->properties['constructor'] = $x835; $x835->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x835->properties['length'] = 1; $x835->attributes['length'] = 0;
unset($x836, $W836, $S836, $U836);
$x837 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 257, 6, '<image>/04_array.js');
$x836 =& $x837[0]; list(,$W836,$S836,$U836) = $x837;
if ($x836 === JS::$undefined || $x836 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x838 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 257, 25, '<image>/04_array.js');
$_TypeError =& $x838[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x838;
$x839 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x840 = $x839($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x840->class) && $x840->class === 'Error') {$x840->properties['file'] = '<image>/04_array.js';$x840->properties['line'] = 257;$x840->properties['column'] = 25;$x840->attributes['file'] = $x840->attributes['line'] = $x840->attributes['column'] = 0; }
throw new JSException($x840, 257, 25, '<image>/04_array.js');
}
$x836 = JS::toObject($x836, $global);
unset($x841, $W841, $S841, $U841);
$x842 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x836, (string) 'unshift', 257, 25, '<image>/04_array.js');
$x841 =& $x842[0]; list(,$W841,$S841,$U841) = $x842;
if ($U841 && (!isset($x836->extensible) || $x836->extensible)) {$x836->properties['unshift'] = $x841; $x841 =& $x836->properties['unshift']; $x836->attributes['unshift'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U841 = FALSE; $W841 = TRUE; }
if (isset($S841)) {
$x844 = $S841->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x845 = $x844($global, $x836, $S841, array($x835), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x843 = $x845;
} else {
if (!$U841) {$x843 = $x835;if ($W841) { $x841 = $x835; }  }
else { $x843 = JS::$undefined; }
}
if (isset($x836->class) && $x836->class === 'Array' &&  is_int('unshift') && 'unshift' >= $x836->properties['length']) { $x836->properties['length'] = 'unshift' + 1; };
$x885 = clone JS::$functionTemplate; $x885->call = '_339fc8fcf8563d9777a12bd15b91ae1b_18'; $x885->parameters = array (
  0 => 'search',
  1 => 'from',
); $x885->scope = $scope; $x885->properties['prototype'] = clone JS::$objectTemplate; $x885->attributes['prototype'] = JS::WRITABLE; $x885->properties['prototype']->properties['constructor'] = $x885; $x885->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x885->properties['length'] = 2; $x885->attributes['length'] = 0;
unset($x886, $W886, $S886, $U886);
$x887 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 269, 6, '<image>/04_array.js');
$x886 =& $x887[0]; list(,$W886,$S886,$U886) = $x887;
if ($x886 === JS::$undefined || $x886 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x888 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 269, 25, '<image>/04_array.js');
$_TypeError =& $x888[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x888;
$x889 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x890 = $x889($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x890->class) && $x890->class === 'Error') {$x890->properties['file'] = '<image>/04_array.js';$x890->properties['line'] = 269;$x890->properties['column'] = 25;$x890->attributes['file'] = $x890->attributes['line'] = $x890->attributes['column'] = 0; }
throw new JSException($x890, 269, 25, '<image>/04_array.js');
}
$x886 = JS::toObject($x886, $global);
unset($x891, $W891, $S891, $U891);
$x892 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x886, (string) 'indexOf', 269, 25, '<image>/04_array.js');
$x891 =& $x892[0]; list(,$W891,$S891,$U891) = $x892;
if ($U891 && (!isset($x886->extensible) || $x886->extensible)) {$x886->properties['indexOf'] = $x891; $x891 =& $x886->properties['indexOf']; $x886->attributes['indexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U891 = FALSE; $W891 = TRUE; }
if (isset($S891)) {
$x894 = $S891->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x895 = $x894($global, $x886, $S891, array($x885), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x893 = $x895;
} else {
if (!$U891) {$x893 = $x885;if ($W891) { $x891 = $x885; }  }
else { $x893 = JS::$undefined; }
}
if (isset($x886->class) && $x886->class === 'Array' &&  is_int('indexOf') && 'indexOf' >= $x886->properties['length']) { $x886->properties['length'] = 'indexOf' + 1; };
$x952 = clone JS::$functionTemplate; $x952->call = '_339fc8fcf8563d9777a12bd15b91ae1b_19'; $x952->parameters = array (
  0 => 'search',
  1 => 'from',
); $x952->scope = $scope; $x952->properties['prototype'] = clone JS::$objectTemplate; $x952->attributes['prototype'] = JS::WRITABLE; $x952->properties['prototype']->properties['constructor'] = $x952; $x952->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x952->properties['length'] = 2; $x952->attributes['length'] = 0;
unset($x953, $W953, $S953, $U953);
$x954 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 285, 6, '<image>/04_array.js');
$x953 =& $x954[0]; list(,$W953,$S953,$U953) = $x954;
if ($x953 === JS::$undefined || $x953 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x955 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 285, 29, '<image>/04_array.js');
$_TypeError =& $x955[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x955;
$x956 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x957 = $x956($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x957->class) && $x957->class === 'Error') {$x957->properties['file'] = '<image>/04_array.js';$x957->properties['line'] = 285;$x957->properties['column'] = 29;$x957->attributes['file'] = $x957->attributes['line'] = $x957->attributes['column'] = 0; }
throw new JSException($x957, 285, 29, '<image>/04_array.js');
}
$x953 = JS::toObject($x953, $global);
unset($x958, $W958, $S958, $U958);
$x959 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x953, (string) 'lastIndexOf', 285, 29, '<image>/04_array.js');
$x958 =& $x959[0]; list(,$W958,$S958,$U958) = $x959;
if ($U958 && (!isset($x953->extensible) || $x953->extensible)) {$x953->properties['lastIndexOf'] = $x958; $x958 =& $x953->properties['lastIndexOf']; $x953->attributes['lastIndexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U958 = FALSE; $W958 = TRUE; }
if (isset($S958)) {
$x961 = $S958->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x962 = $x961($global, $x953, $S958, array($x952), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x960 = $x962;
} else {
if (!$U958) {$x960 = $x952;if ($W958) { $x958 = $x952; }  }
else { $x960 = JS::$undefined; }
}
if (isset($x953->class) && $x953->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $x953->properties['length']) { $x953->properties['length'] = 'lastIndexOf' + 1; };
$x1000 = clone JS::$functionTemplate; $x1000->call = '_339fc8fcf8563d9777a12bd15b91ae1b_20'; $x1000->parameters = array (
  0 => 'callbackFn',
); $x1000->scope = $scope; $x1000->properties['prototype'] = clone JS::$objectTemplate; $x1000->attributes['prototype'] = JS::WRITABLE; $x1000->properties['prototype']->properties['constructor'] = $x1000; $x1000->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1000->properties['length'] = 1; $x1000->attributes['length'] = 0;
unset($x1001, $W1001, $S1001, $U1001);
$x1002 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 305, 6, '<image>/04_array.js');
$x1001 =& $x1002[0]; list(,$W1001,$S1001,$U1001) = $x1002;
if ($x1001 === JS::$undefined || $x1001 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1003 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 305, 23, '<image>/04_array.js');
$_TypeError =& $x1003[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1003;
$x1004 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1005 = $x1004($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1005->class) && $x1005->class === 'Error') {$x1005->properties['file'] = '<image>/04_array.js';$x1005->properties['line'] = 305;$x1005->properties['column'] = 23;$x1005->attributes['file'] = $x1005->attributes['line'] = $x1005->attributes['column'] = 0; }
throw new JSException($x1005, 305, 23, '<image>/04_array.js');
}
$x1001 = JS::toObject($x1001, $global);
unset($x1006, $W1006, $S1006, $U1006);
$x1007 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1001, (string) 'every', 305, 23, '<image>/04_array.js');
$x1006 =& $x1007[0]; list(,$W1006,$S1006,$U1006) = $x1007;
if ($U1006 && (!isset($x1001->extensible) || $x1001->extensible)) {$x1001->properties['every'] = $x1006; $x1006 =& $x1001->properties['every']; $x1001->attributes['every'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1006 = FALSE; $W1006 = TRUE; }
if (isset($S1006)) {
$x1009 = $S1006->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1010 = $x1009($global, $x1001, $S1006, array($x1000), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1008 = $x1010;
} else {
if (!$U1006) {$x1008 = $x1000;if ($W1006) { $x1006 = $x1000; }  }
else { $x1008 = JS::$undefined; }
}
if (isset($x1001->class) && $x1001->class === 'Array' &&  is_int('every') && 'every' >= $x1001->properties['length']) { $x1001->properties['length'] = 'every' + 1; };
$x1048 = clone JS::$functionTemplate; $x1048->call = '_339fc8fcf8563d9777a12bd15b91ae1b_21'; $x1048->parameters = array (
  0 => 'callbackFn',
); $x1048->scope = $scope; $x1048->properties['prototype'] = clone JS::$objectTemplate; $x1048->attributes['prototype'] = JS::WRITABLE; $x1048->properties['prototype']->properties['constructor'] = $x1048; $x1048->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1048->properties['length'] = 1; $x1048->attributes['length'] = 0;
unset($x1049, $W1049, $S1049, $U1049);
$x1050 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 321, 6, '<image>/04_array.js');
$x1049 =& $x1050[0]; list(,$W1049,$S1049,$U1049) = $x1050;
if ($x1049 === JS::$undefined || $x1049 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1051 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 321, 22, '<image>/04_array.js');
$_TypeError =& $x1051[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1051;
$x1052 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1053 = $x1052($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1053->class) && $x1053->class === 'Error') {$x1053->properties['file'] = '<image>/04_array.js';$x1053->properties['line'] = 321;$x1053->properties['column'] = 22;$x1053->attributes['file'] = $x1053->attributes['line'] = $x1053->attributes['column'] = 0; }
throw new JSException($x1053, 321, 22, '<image>/04_array.js');
}
$x1049 = JS::toObject($x1049, $global);
unset($x1054, $W1054, $S1054, $U1054);
$x1055 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1049, (string) 'some', 321, 22, '<image>/04_array.js');
$x1054 =& $x1055[0]; list(,$W1054,$S1054,$U1054) = $x1055;
if ($U1054 && (!isset($x1049->extensible) || $x1049->extensible)) {$x1049->properties['some'] = $x1054; $x1054 =& $x1049->properties['some']; $x1049->attributes['some'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1054 = FALSE; $W1054 = TRUE; }
if (isset($S1054)) {
$x1057 = $S1054->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1058 = $x1057($global, $x1049, $S1054, array($x1048), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1056 = $x1058;
} else {
if (!$U1054) {$x1056 = $x1048;if ($W1054) { $x1054 = $x1048; }  }
else { $x1056 = JS::$undefined; }
}
if (isset($x1049->class) && $x1049->class === 'Array' &&  is_int('some') && 'some' >= $x1049->properties['length']) { $x1049->properties['length'] = 'some' + 1; };
$x1096 = clone JS::$functionTemplate; $x1096->call = '_339fc8fcf8563d9777a12bd15b91ae1b_22'; $x1096->parameters = array (
  0 => 'callbackFn',
); $x1096->scope = $scope; $x1096->properties['prototype'] = clone JS::$objectTemplate; $x1096->attributes['prototype'] = JS::WRITABLE; $x1096->properties['prototype']->properties['constructor'] = $x1096; $x1096->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1096->properties['length'] = 1; $x1096->attributes['length'] = 0;
unset($x1097, $W1097, $S1097, $U1097);
$x1098 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 337, 6, '<image>/04_array.js');
$x1097 =& $x1098[0]; list(,$W1097,$S1097,$U1097) = $x1098;
if ($x1097 === JS::$undefined || $x1097 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1099 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 337, 25, '<image>/04_array.js');
$_TypeError =& $x1099[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1099;
$x1100 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1101 = $x1100($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1101->class) && $x1101->class === 'Error') {$x1101->properties['file'] = '<image>/04_array.js';$x1101->properties['line'] = 337;$x1101->properties['column'] = 25;$x1101->attributes['file'] = $x1101->attributes['line'] = $x1101->attributes['column'] = 0; }
throw new JSException($x1101, 337, 25, '<image>/04_array.js');
}
$x1097 = JS::toObject($x1097, $global);
unset($x1102, $W1102, $S1102, $U1102);
$x1103 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1097, (string) 'forEach', 337, 25, '<image>/04_array.js');
$x1102 =& $x1103[0]; list(,$W1102,$S1102,$U1102) = $x1103;
if ($U1102 && (!isset($x1097->extensible) || $x1097->extensible)) {$x1097->properties['forEach'] = $x1102; $x1102 =& $x1097->properties['forEach']; $x1097->attributes['forEach'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1102 = FALSE; $W1102 = TRUE; }
if (isset($S1102)) {
$x1105 = $S1102->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1106 = $x1105($global, $x1097, $S1102, array($x1096), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1104 = $x1106;
} else {
if (!$U1102) {$x1104 = $x1096;if ($W1102) { $x1102 = $x1096; }  }
else { $x1104 = JS::$undefined; }
}
if (isset($x1097->class) && $x1097->class === 'Array' &&  is_int('forEach') && 'forEach' >= $x1097->properties['length']) { $x1097->properties['length'] = 'forEach' + 1; };
$x1156 = clone JS::$functionTemplate; $x1156->call = '_339fc8fcf8563d9777a12bd15b91ae1b_23'; $x1156->parameters = array (
  0 => 'callbackFn',
); $x1156->scope = $scope; $x1156->properties['prototype'] = clone JS::$objectTemplate; $x1156->attributes['prototype'] = JS::WRITABLE; $x1156->properties['prototype']->properties['constructor'] = $x1156; $x1156->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1156->properties['length'] = 1; $x1156->attributes['length'] = 0;
unset($x1157, $W1157, $S1157, $U1157);
$x1158 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 349, 6, '<image>/04_array.js');
$x1157 =& $x1158[0]; list(,$W1157,$S1157,$U1157) = $x1158;
if ($x1157 === JS::$undefined || $x1157 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1159 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 349, 21, '<image>/04_array.js');
$_TypeError =& $x1159[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1159;
$x1160 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1161 = $x1160($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1161->class) && $x1161->class === 'Error') {$x1161->properties['file'] = '<image>/04_array.js';$x1161->properties['line'] = 349;$x1161->properties['column'] = 21;$x1161->attributes['file'] = $x1161->attributes['line'] = $x1161->attributes['column'] = 0; }
throw new JSException($x1161, 349, 21, '<image>/04_array.js');
}
$x1157 = JS::toObject($x1157, $global);
unset($x1162, $W1162, $S1162, $U1162);
$x1163 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1157, (string) 'map', 349, 21, '<image>/04_array.js');
$x1162 =& $x1163[0]; list(,$W1162,$S1162,$U1162) = $x1163;
if ($U1162 && (!isset($x1157->extensible) || $x1157->extensible)) {$x1157->properties['map'] = $x1162; $x1162 =& $x1157->properties['map']; $x1157->attributes['map'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1162 = FALSE; $W1162 = TRUE; }
if (isset($S1162)) {
$x1165 = $S1162->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1166 = $x1165($global, $x1157, $S1162, array($x1156), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1164 = $x1166;
} else {
if (!$U1162) {$x1164 = $x1156;if ($W1162) { $x1162 = $x1156; }  }
else { $x1164 = JS::$undefined; }
}
if (isset($x1157->class) && $x1157->class === 'Array' &&  is_int('map') && 'map' >= $x1157->properties['length']) { $x1157->properties['length'] = 'map' + 1; };
$x1218 = clone JS::$functionTemplate; $x1218->call = '_339fc8fcf8563d9777a12bd15b91ae1b_24'; $x1218->parameters = array (
  0 => 'callbackFn',
); $x1218->scope = $scope; $x1218->properties['prototype'] = clone JS::$objectTemplate; $x1218->attributes['prototype'] = JS::WRITABLE; $x1218->properties['prototype']->properties['constructor'] = $x1218; $x1218->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1218->properties['length'] = 1; $x1218->attributes['length'] = 0;
unset($x1219, $W1219, $S1219, $U1219);
$x1220 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 363, 6, '<image>/04_array.js');
$x1219 =& $x1220[0]; list(,$W1219,$S1219,$U1219) = $x1220;
if ($x1219 === JS::$undefined || $x1219 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1221 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 363, 24, '<image>/04_array.js');
$_TypeError =& $x1221[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1221;
$x1222 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1223 = $x1222($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1223->class) && $x1223->class === 'Error') {$x1223->properties['file'] = '<image>/04_array.js';$x1223->properties['line'] = 363;$x1223->properties['column'] = 24;$x1223->attributes['file'] = $x1223->attributes['line'] = $x1223->attributes['column'] = 0; }
throw new JSException($x1223, 363, 24, '<image>/04_array.js');
}
$x1219 = JS::toObject($x1219, $global);
unset($x1224, $W1224, $S1224, $U1224);
$x1225 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1219, (string) 'filter', 363, 24, '<image>/04_array.js');
$x1224 =& $x1225[0]; list(,$W1224,$S1224,$U1224) = $x1225;
if ($U1224 && (!isset($x1219->extensible) || $x1219->extensible)) {$x1219->properties['filter'] = $x1224; $x1224 =& $x1219->properties['filter']; $x1219->attributes['filter'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1224 = FALSE; $W1224 = TRUE; }
if (isset($S1224)) {
$x1227 = $S1224->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1228 = $x1227($global, $x1219, $S1224, array($x1218), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1226 = $x1228;
} else {
if (!$U1224) {$x1226 = $x1218;if ($W1224) { $x1224 = $x1218; }  }
else { $x1226 = JS::$undefined; }
}
if (isset($x1219->class) && $x1219->class === 'Array' &&  is_int('filter') && 'filter' >= $x1219->properties['length']) { $x1219->properties['length'] = 'filter' + 1; };
$x1311 = clone JS::$functionTemplate; $x1311->call = '_339fc8fcf8563d9777a12bd15b91ae1b_25'; $x1311->parameters = array (
  0 => 'callbackFn',
); $x1311->scope = $scope; $x1311->properties['prototype'] = clone JS::$objectTemplate; $x1311->attributes['prototype'] = JS::WRITABLE; $x1311->properties['prototype']->properties['constructor'] = $x1311; $x1311->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1311->properties['length'] = 1; $x1311->attributes['length'] = 0;
unset($x1312, $W1312, $S1312, $U1312);
$x1313 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 379, 6, '<image>/04_array.js');
$x1312 =& $x1313[0]; list(,$W1312,$S1312,$U1312) = $x1313;
if ($x1312 === JS::$undefined || $x1312 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1314 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 379, 24, '<image>/04_array.js');
$_TypeError =& $x1314[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1314;
$x1315 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1316 = $x1315($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1316->class) && $x1316->class === 'Error') {$x1316->properties['file'] = '<image>/04_array.js';$x1316->properties['line'] = 379;$x1316->properties['column'] = 24;$x1316->attributes['file'] = $x1316->attributes['line'] = $x1316->attributes['column'] = 0; }
throw new JSException($x1316, 379, 24, '<image>/04_array.js');
}
$x1312 = JS::toObject($x1312, $global);
unset($x1317, $W1317, $S1317, $U1317);
$x1318 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1312, (string) 'reduce', 379, 24, '<image>/04_array.js');
$x1317 =& $x1318[0]; list(,$W1317,$S1317,$U1317) = $x1318;
if ($U1317 && (!isset($x1312->extensible) || $x1312->extensible)) {$x1312->properties['reduce'] = $x1317; $x1317 =& $x1312->properties['reduce']; $x1312->attributes['reduce'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1317 = FALSE; $W1317 = TRUE; }
if (isset($S1317)) {
$x1320 = $S1317->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1321 = $x1320($global, $x1312, $S1317, array($x1311), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1319 = $x1321;
} else {
if (!$U1317) {$x1319 = $x1311;if ($W1317) { $x1317 = $x1311; }  }
else { $x1319 = JS::$undefined; }
}
if (isset($x1312->class) && $x1312->class === 'Array' &&  is_int('reduce') && 'reduce' >= $x1312->properties['length']) { $x1312->properties['length'] = 'reduce' + 1; };
$x1402 = clone JS::$functionTemplate; $x1402->call = '_339fc8fcf8563d9777a12bd15b91ae1b_26'; $x1402->parameters = array (
  0 => 'callbackFn',
); $x1402->scope = $scope; $x1402->properties['prototype'] = clone JS::$objectTemplate; $x1402->attributes['prototype'] = JS::WRITABLE; $x1402->properties['prototype']->properties['constructor'] = $x1402; $x1402->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1402->properties['length'] = 1; $x1402->attributes['length'] = 0;
unset($x1403, $W1403, $S1403, $U1403);
$x1404 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 405, 6, '<image>/04_array.js');
$x1403 =& $x1404[0]; list(,$W1403,$S1403,$U1403) = $x1404;
if ($x1403 === JS::$undefined || $x1403 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1405 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 405, 29, '<image>/04_array.js');
$_TypeError =& $x1405[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1405;
$x1406 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1407 = $x1406($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1407->class) && $x1407->class === 'Error') {$x1407->properties['file'] = '<image>/04_array.js';$x1407->properties['line'] = 405;$x1407->properties['column'] = 29;$x1407->attributes['file'] = $x1407->attributes['line'] = $x1407->attributes['column'] = 0; }
throw new JSException($x1407, 405, 29, '<image>/04_array.js');
}
$x1403 = JS::toObject($x1403, $global);
unset($x1408, $W1408, $S1408, $U1408);
$x1409 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1403, (string) 'reduceRight', 405, 29, '<image>/04_array.js');
$x1408 =& $x1409[0]; list(,$W1408,$S1408,$U1408) = $x1409;
if ($U1408 && (!isset($x1403->extensible) || $x1403->extensible)) {$x1403->properties['reduceRight'] = $x1408; $x1408 =& $x1403->properties['reduceRight']; $x1403->attributes['reduceRight'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1408 = FALSE; $W1408 = TRUE; }
if (isset($S1408)) {
$x1411 = $S1408->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1412 = $x1411($global, $x1403, $S1408, array($x1402), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1410 = $x1412;
} else {
if (!$U1408) {$x1410 = $x1402;if ($W1408) { $x1408 = $x1402; }  }
else { $x1410 = JS::$undefined; }
}
if (isset($x1403->class) && $x1403->class === 'Array' &&  is_int('reduceRight') && 'reduceRight' >= $x1403->properties['length']) { $x1403->properties['length'] = 'reduceRight' + 1; };
;
return JS::$undefined;
}
