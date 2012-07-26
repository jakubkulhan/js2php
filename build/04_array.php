function _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x4=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x5=$x4($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x5;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x10[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x10;
$x11 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x12 = $x11($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x12->class) && $x12->class === 'Error' && !isset($x12->properties['file']) && !isset($x12->properties['line']) && !isset($x12->properties['column'])) {$x12->properties['file'] = $file;$x12->properties['line'] = $line;$x12->properties['column'] = $column;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
throw new JSException($x12, $line, $column, $file);
}
$W9 = $S9 = $U9 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x9 =& $lookup->properties[$id]; $W9 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S9 = $lookup->setters[$id]; }
else { $x9 = JS::$undefined; $U9 = TRUE; }
return array(&$x9, $W9, $S9, $U9);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'&&!isset($x12->properties[\'file\'])&&!isset($x12->properties[\'line\'])&&!isset($x12->properties[\'column\'])){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];$W9=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S9=$lookup->setters[$id];}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x24 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x24[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x24;
$x25 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x26 = $x25($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x26->class) && $x26->class === 'Error' && !isset($x26->properties['file']) && !isset($x26->properties['line']) && !isset($x26->properties['column'])) {$x26->properties['file'] = $file;$x26->properties['line'] = $line;$x26->properties['column'] = $column;$x26->attributes['file'] = $x26->attributes['line'] = $x26->attributes['column'] = 0; }
throw new JSException($x26, $line, $column, $file);
}
$W23 = $S23 = $U23 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x23 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x27 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x28 = $x27($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x23 = $x28; }
else { $x23 = JS::$undefined; $U23 = TRUE; }
return array(&$x23, $W23, $S23, $U23);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x24=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x24[0];list(,$WTypeError,$STypeError,$UTypeError)=$x24;$x25=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x26=$x25($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'&&!isset($x26->properties[\'file\'])&&!isset($x26->properties[\'line\'])&&!isset($x26->properties[\'column\'])){$x26->properties[\'file\']=$file;$x26->properties[\'line\']=$line;$x26->properties[\'column\']=$column;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,$line,$column,$file);}$W23=$S23=$U23=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x23=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x27=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x28=$x27($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x23=$x28;}else{$x23=JS::$undefined;$U23=TRUE;}return array(&$x23,$W23,$S23,$U23);}', "\n";
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
$x3 = 0;
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x6 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 7, 15, '<image>/04_array.js');
$_TypeError =& $x6[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x6;
$x7 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 7, 15);
$x8 = $x7($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x8->class) && $x8->class === 'Error' && !isset($x8->properties['file']) && !isset($x8->properties['line']) && !isset($x8->properties['column'])) {$x8->properties['file'] = '<image>/04_array.js';$x8->properties['line'] = 7;$x8->properties['column'] = 15;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
throw new JSException($x8, 7, 15, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x9, $W9, $S9, $U9);
$x13 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, (string) 'length', 7, 15, '<image>/04_array.js');
$x9 =& $x13[0]; list(,$W9,$S9,$U9) = $x13;
if ($U9 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties['length'] = $x9; $x9 =& $_array->properties['length']; $_array->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U9 = FALSE; $W9 = TRUE; }
if (isset($S9)) {
$x15 = $S9->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 7, 15);
$x16 = $x15($global, $_array, $S9, array($x3), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x14 = $x16;
} else {
if (!$U9) {$x14 = $x3;if ($W9) { $x9 = $x3; }  }
else { $x14 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; };
$_array->attributes['length'] = JS::WRITABLE;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x19 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 11, 6, '<image>/04_array.js');
$_arguments =& $x19[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x19;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x20 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 11, 6, '<image>/04_array.js');
$_ReferenceError =& $x20[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x20;
$x21 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 11, 6);
$x22 = $x21($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x22->class) && $x22->class === 'Error' && !isset($x22->properties['file']) && !isset($x22->properties['line']) && !isset($x22->properties['column'])) {$x22->properties['file'] = '<image>/04_array.js';$x22->properties['line'] = 11;$x22->properties['column'] = 6;$x22->attributes['file'] = $x22->attributes['line'] = $x22->attributes['column'] = 0; }
throw new JSException($x22, 11, 6, '<image>/04_array.js');
}
unset($x23, $W23, $S23, $U23);
$x29 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 11, 15, '<image>/04_array.js');
$x23 =& $x29[0]; list(,$W23,$S23,$U23) = $x29;
$x18 = (((gettype($x23) === gettype(1) && $x23 === 1))|| (((is_float($x23) || is_int($x23)) && (is_float(1) || is_int(1))) && $x23 == 1));
$x17 = $x18;
if (JS::toBoolean($x17, $global)) {
unset($x31, $W31, $S31, $U31);
$x32 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 0, 11, 48, '<image>/04_array.js');
$x31 =& $x32[0]; list(,$W31,$S31,$U31) = $x32;
$x33 = $x31;
$x33 = ($x33 === JS::$undefined ? 'undefined' : (is_int($x33) || is_float($x33) ? 'number' : (is_bool($x33) ? 'boolean' : (is_string($x33) ? 'string' : (is_object($x33) && isset($x33->call) ? 'function' : 'object')))));
$x30 = (((gettype($x33) === gettype('number') && $x33 === 'number'))|| (((is_float($x33) || is_int($x33)) && (is_float('number') || is_int('number'))) && $x33 == 'number'));
$x17 = $x30; }
if (JS::toBoolean($x17, $global)) {
unset($x34, $W34, $S34, $U34);
$x35 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 0, 12, 22, '<image>/04_array.js');
$x34 =& $x35[0]; list(,$W34,$S34,$U34) = $x35;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x34;
if (JS::toBoolean((((string) intval($_len)) !== ((string)$_len)) ||$_len< 0, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x38 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'RangeError', 15, 14, '<image>/04_array.js');
$_RangeError =& $x38[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x38;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x39 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 15, 14, '<image>/04_array.js');
$_ReferenceError =& $x39[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x39;
$x40 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 14);
$x41 = $x40($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x41->class) && $x41->class === 'Error' && !isset($x41->properties['file']) && !isset($x41->properties['line']) && !isset($x41->properties['column'])) {$x41->properties['file'] = '<image>/04_array.js';$x41->properties['line'] = 15;$x41->properties['column'] = 14;$x41->attributes['file'] = $x41->attributes['line'] = $x41->attributes['column'] = 0; }
throw new JSException($x41, 15, 14, '<image>/04_array.js');
}
$x36 = clone JS::$objectTemplate;
unset($x42, $W42, $S42, $U42);
$x43 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_RangeError, (string) 'prototype', 15, 10, '<image>/04_array.js');
$x42 =& $x43[0]; list(,$W42,$S42,$U42) = $x43;
$x37 = $x42;
$x36->prototype = $x37;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x46 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 15, 10, '<image>/04_array.js');
$_TypeError =& $x46[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x46;
$x47 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x48 = $x47($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x48->class) && $x48->class === 'Error' && !isset($x48->properties['file']) && !isset($x48->properties['line']) && !isset($x48->properties['column'])) {$x48->properties['file'] = '<image>/04_array.js';$x48->properties['line'] = 15;$x48->properties['column'] = 10;$x48->attributes['file'] = $x48->attributes['line'] = $x48->attributes['column'] = 0; }
throw new JSException($x48, 15, 10, '<image>/04_array.js');
}
$x44 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x45 = $x44($global, $x36, $_RangeError, array('Array(): Given array length is not legal.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x37 = $x45;
if (is_object($x37) && $x37 !== JS::$undefined) { $x36 = $x37; }
if (isset($x36->class) && $x36->class === 'Error' && !isset($x36->properties['file']) && !isset($x36->properties['line']) && !isset($x36->properties['column'])) {$x36->properties['file'] = '<image>/04_array.js';$x36->properties['line'] = 15;$x36->properties['column'] = 4;$x36->attributes['file'] = $x36->attributes['line'] = $x36->attributes['column'] = 0; }
throw new JSException($x36, 15, 4, '<image>/04_array.js');;
};
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x49 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 18, 16, '<image>/04_array.js');
$_TypeError =& $x49[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x49;
$x50 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x51 = $x50($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x51->class) && $x51->class === 'Error' && !isset($x51->properties['file']) && !isset($x51->properties['line']) && !isset($x51->properties['column'])) {$x51->properties['file'] = '<image>/04_array.js';$x51->properties['line'] = 18;$x51->properties['column'] = 16;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
throw new JSException($x51, 18, 16, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x52, $W52, $S52, $U52);
$x53 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, (string) 'length', 18, 16, '<image>/04_array.js');
$x52 =& $x53[0]; list(,$W52,$S52,$U52) = $x53;
if ($U52 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties['length'] = $x52; $x52 =& $_array->properties['length']; $_array->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U52 = FALSE; $W52 = TRUE; }
if (isset($S52)) {
$x55 = $S52->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x56 = $x55($global, $_array, $S52, array($_len), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x54 = $x56;
} else {
if (!$U52) {$x54 = $_len;if ($W52) { $x52 = $_len; }  }
else { $x54 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; };
return $_array;;
};
for ($x57 = 0;; ++$x57) {
if ($x57 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x58, $W58, $S58, $U58);
$x59 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 23, 31, '<image>/04_array.js');
$x58 =& $x59[0]; list(,$W58,$S58,$U58) = $x59;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x58;
}
if ($x57 !== 0) {
$x60 = ++$_i;
}
$x61 = JS::toPrimitive($_i, $global);
$x62 = JS::toPrimitive($_l, $global);
$x63 = (is_string($x61) && is_string($x62) ? strcmp($x61, $x62) < 0 : (!is_nan($x64 = JS::toNumber($x61, $global)) && !is_nan($x65 = JS::toNumber($x62, $global)) && $x64 < $x65));
if (!JS::toBoolean($x63, $global)) { break; }

unset($x66, $W66, $S66, $U66);
$x67 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 24, 23, '<image>/04_array.js');
$x66 =& $x67[0]; list(,$W66,$S66,$U66) = $x67;
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x68 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 24, 12, '<image>/04_array.js');
$_TypeError =& $x68[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x68;
$x69 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x70 = $x69($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x70->class) && $x70->class === 'Error' && !isset($x70->properties['file']) && !isset($x70->properties['line']) && !isset($x70->properties['column'])) {$x70->properties['file'] = '<image>/04_array.js';$x70->properties['line'] = 24;$x70->properties['column'] = 12;$x70->attributes['file'] = $x70->attributes['line'] = $x70->attributes['column'] = 0; }
throw new JSException($x70, 24, 12, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x71, $W71, $S71, $U71);
$x72 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, (string) $_i, 24, 12, '<image>/04_array.js');
$x71 =& $x72[0]; list(,$W71,$S71,$U71) = $x72;
if ($U71 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties[$_i] = $x71; $x71 =& $_array->properties[$_i]; $_array->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U71 = FALSE; $W71 = TRUE; }
if (isset($S71)) {
$x74 = $S71->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x75 = $x74($global, $_array, $S71, array($x66), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x73 = $x75;
} else {
if (!$U71) {$x73 = $x66;if ($W71) { $x71 = $x66; }  }
else { $x73 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int($_i) && $_i >= $_array->properties['length']) { $_array->properties['length'] = $_i + 1; };
};
return $_array;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Array\']=$fn;$_Array=&$scope->properties[\'Array\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'array\']=JS::$undefined;$_array=&$scope->properties[\'array\'];$Uarray=FALSE;$_array=$x2;$_array->prototype=$_Array->properties[\'prototype\'];$_array->class=\'Array\';$x3=0;if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x6=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',7,15,\'<image>/04_array.js\');$_TypeError=&$x6[0];list(,$WTypeError,$STypeError,$UTypeError)=$x6;$x7=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x8=$x7($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'&&!isset($x8->properties[\'file\'])&&!isset($x8->properties[\'line\'])&&!isset($x8->properties[\'column\'])){$x8->properties[\'file\']=\'<image>/04_array.js\';$x8->properties[\'line\']=7;$x8->properties[\'column\']=15;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,7,15,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x9,$W9,$S9,$U9);$x13=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,(string)\'length\',7,15,\'<image>/04_array.js\');$x9=&$x13[0];list(,$W9,$S9,$U9)=$x13;if($U9&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[\'length\']=$x9;$x9=&$_array->properties[\'length\'];$_array->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U9=FALSE;$W9=TRUE;}if(isset($S9)){$x15=$S9->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x16=$x15($global,$_array,$S9,array($x3),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x16;}else{if(!$U9){$x14=$x3;if($W9){$x9=$x3;}}else{$x14=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}$_array->attributes[\'length\']=JS::WRITABLE;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x19=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',11,6,\'<image>/04_array.js\');$_arguments=&$x19[0];list(,$Warguments,$Sarguments,$Uarguments)=$x19;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x20=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',11,6,\'<image>/04_array.js\');$_ReferenceError=&$x20[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x20;$x21=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',11,6);$x22=$x21($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x22->class)&&$x22->class===\'Error\'&&!isset($x22->properties[\'file\'])&&!isset($x22->properties[\'line\'])&&!isset($x22->properties[\'column\'])){$x22->properties[\'file\']=\'<image>/04_array.js\';$x22->properties[\'line\']=11;$x22->properties[\'column\']=6;$x22->attributes[\'file\']=$x22->attributes[\'line\']=$x22->attributes[\'column\']=0;}throw new JSException($x22,11,6,\'<image>/04_array.js\');}unset($x23,$W23,$S23,$U23);$x29=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',11,15,\'<image>/04_array.js\');$x23=&$x29[0];list(,$W23,$S23,$U23)=$x29;$x18=(((gettype($x23)===gettype(1)&&$x23===1))||(((is_float($x23)||is_int($x23))&&(is_float(1)||is_int(1)))&&$x23==1));$x17=$x18;if(JS::toBoolean($x17,$global)){unset($x31,$W31,$S31,$U31);$x32=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)0,11,48,\'<image>/04_array.js\');$x31=&$x32[0];list(,$W31,$S31,$U31)=$x32;$x33=$x31;$x33=($x33===JS::$undefined?\'undefined\':(is_int($x33)||is_float($x33)?\'number\':(is_bool($x33)?\'boolean\':(is_string($x33)?\'string\':(is_object($x33)&&isset($x33->call)?\'function\':\'object\')))));$x30=(((gettype($x33)===gettype(\'number\')&&$x33===\'number\'))||(((is_float($x33)||is_int($x33))&&(is_float(\'number\')||is_int(\'number\')))&&$x33==\'number\'));$x17=$x30;}if(JS::toBoolean($x17,$global)){unset($x34,$W34,$S34,$U34);$x35=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)0,12,22,\'<image>/04_array.js\');$x34=&$x35[0];list(,$W34,$S34,$U34)=$x35;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x34;if(JS::toBoolean((((string)intval($_len))!==((string)$_len))||$_len<0,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x38=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'RangeError\',15,14,\'<image>/04_array.js\');$_RangeError=&$x38[0];list(,$WRangeError,$SRangeError,$URangeError)=$x38;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x39=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',15,14,\'<image>/04_array.js\');$_ReferenceError=&$x39[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x39;$x40=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,14);$x41=$x40($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x41->class)&&$x41->class===\'Error\'&&!isset($x41->properties[\'file\'])&&!isset($x41->properties[\'line\'])&&!isset($x41->properties[\'column\'])){$x41->properties[\'file\']=\'<image>/04_array.js\';$x41->properties[\'line\']=15;$x41->properties[\'column\']=14;$x41->attributes[\'file\']=$x41->attributes[\'line\']=$x41->attributes[\'column\']=0;}throw new JSException($x41,15,14,\'<image>/04_array.js\');}$x36=clone JS::$objectTemplate;unset($x42,$W42,$S42,$U42);$x43=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_RangeError,(string)\'prototype\',15,10,\'<image>/04_array.js\');$x42=&$x43[0];list(,$W42,$S42,$U42)=$x43;$x37=$x42;$x36->prototype=$x37;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x46=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',15,10,\'<image>/04_array.js\');$_TypeError=&$x46[0];list(,$WTypeError,$STypeError,$UTypeError)=$x46;$x47=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x48=$x47($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x48->class)&&$x48->class===\'Error\'&&!isset($x48->properties[\'file\'])&&!isset($x48->properties[\'line\'])&&!isset($x48->properties[\'column\'])){$x48->properties[\'file\']=\'<image>/04_array.js\';$x48->properties[\'line\']=15;$x48->properties[\'column\']=10;$x48->attributes[\'file\']=$x48->attributes[\'line\']=$x48->attributes[\'column\']=0;}throw new JSException($x48,15,10,\'<image>/04_array.js\');}$x44=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x45=$x44($global,$x36,$_RangeError,array(\'Array(): Given array length is not legal.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x37=$x45;if(is_object($x37)&&$x37!==JS::$undefined){$x36=$x37;}if(isset($x36->class)&&$x36->class===\'Error\'&&!isset($x36->properties[\'file\'])&&!isset($x36->properties[\'line\'])&&!isset($x36->properties[\'column\'])){$x36->properties[\'file\']=\'<image>/04_array.js\';$x36->properties[\'line\']=15;$x36->properties[\'column\']=4;$x36->attributes[\'file\']=$x36->attributes[\'line\']=$x36->attributes[\'column\']=0;}throw new JSException($x36,15,4,\'<image>/04_array.js\');}if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x49=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',18,16,\'<image>/04_array.js\');$_TypeError=&$x49[0];list(,$WTypeError,$STypeError,$UTypeError)=$x49;$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x51=$x50($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'&&!isset($x51->properties[\'file\'])&&!isset($x51->properties[\'line\'])&&!isset($x51->properties[\'column\'])){$x51->properties[\'file\']=\'<image>/04_array.js\';$x51->properties[\'line\']=18;$x51->properties[\'column\']=16;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,18,16,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x52,$W52,$S52,$U52);$x53=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,(string)\'length\',18,16,\'<image>/04_array.js\');$x52=&$x53[0];list(,$W52,$S52,$U52)=$x53;if($U52&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[\'length\']=$x52;$x52=&$_array->properties[\'length\'];$_array->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U52=FALSE;$W52=TRUE;}if(isset($S52)){$x55=$S52->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x56=$x55($global,$_array,$S52,array($_len),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x54=$x56;}else{if(!$U52){$x54=$_len;if($W52){$x52=$_len;}}else{$x54=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}return$_array;}for($x57=0;;++$x57){if($x57===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x58,$W58,$S58,$U58);$x59=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',23,31,\'<image>/04_array.js\');$x58=&$x59[0];list(,$W58,$S58,$U58)=$x59;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x58;}if($x57!==0){$x60=++$_i;}$x61=JS::toPrimitive($_i,$global);$x62=JS::toPrimitive($_l,$global);$x63=(is_string($x61)&&is_string($x62)?strcmp($x61,$x62)<0:(!is_nan($x64=JS::toNumber($x61,$global))&&!is_nan($x65=JS::toNumber($x62,$global))&&$x64<$x65));if(!JS::toBoolean($x63,$global)){break;}unset($x66,$W66,$S66,$U66);$x67=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,24,23,\'<image>/04_array.js\');$x66=&$x67[0];list(,$W66,$S66,$U66)=$x67;if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x68=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',24,12,\'<image>/04_array.js\');$_TypeError=&$x68[0];list(,$WTypeError,$STypeError,$UTypeError)=$x68;$x69=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x70=$x69($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x70->class)&&$x70->class===\'Error\'&&!isset($x70->properties[\'file\'])&&!isset($x70->properties[\'line\'])&&!isset($x70->properties[\'column\'])){$x70->properties[\'file\']=\'<image>/04_array.js\';$x70->properties[\'line\']=24;$x70->properties[\'column\']=12;$x70->attributes[\'file\']=$x70->attributes[\'line\']=$x70->attributes[\'column\']=0;}throw new JSException($x70,24,12,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x71,$W71,$S71,$U71);$x72=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,(string)$_i,24,12,\'<image>/04_array.js\');$x71=&$x72[0];list(,$W71,$S71,$U71)=$x72;if($U71&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$_i]=$x71;$x71=&$_array->properties[$_i];$_array->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U71=FALSE;$W71=TRUE;}if(isset($S71)){$x74=$S71->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x75=$x74($global,$_array,$S71,array($x66),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x73=$x75;}else{if(!$U71){$x73=$x66;if($W71){$x71=$x66;}}else{$x73=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int($_i)&&$_i>=$_array->properties[\'length\']){$_array->properties[\'length\']=$_i+1;}}return$_array;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x78 =& $scope->properties['arguments'];
$x78->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x78->properties[$i] = $args[$i];
$x78->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['arg'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x80 = (((gettype($_arg) === gettype(NULL) && $_arg === NULL))|| (((is_float($_arg) || is_int($_arg)) && (is_float(NULL) || is_int(NULL))) && $_arg == NULL));
$x79 = $x80;
if (!JS::toBoolean($x79, $global)) {
$x82 = $_arg;
$x82 = ($x82 === JS::$undefined ? 'undefined' : (is_int($x82) || is_float($x82) ? 'number' : (is_bool($x82) ? 'boolean' : (is_string($x82) ? 'string' : (is_object($x82) && isset($x82->call) ? 'function' : 'object')))));
$x81 = !(((gettype($x82) === gettype('object') && $x82 === 'object'))|| (((is_float($x82) || is_int($x82)) && (is_float('object') || is_int('object'))) && $x82 == 'object'));
$x79 = $x81; }
if (JS::toBoolean($x79, $global)) {

return false;;
};
return isset($_arg->class) &&$_arg->class === 'Array';
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x78=&$scope->properties[\'arguments\'];$x78->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x78->properties[$i]=$args[$i];$x78->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'arg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$global->scope[++$global->scope_sp]=$scope;$x80=(((gettype($_arg)===gettype(NULL)&&$_arg===NULL))||(((is_float($_arg)||is_int($_arg))&&(is_float(NULL)||is_int(NULL)))&&$_arg==NULL));$x79=$x80;if(!JS::toBoolean($x79,$global)){$x82=$_arg;$x82=($x82===JS::$undefined?\'undefined\':(is_int($x82)||is_float($x82)?\'number\':(is_bool($x82)?\'boolean\':(is_string($x82)?\'string\':(is_object($x82)&&isset($x82->call)?\'function\':\'object\')))));$x81=!(((gettype($x82)===gettype(\'object\')&&$x82===\'object\'))||(((is_float($x82)||is_int($x82))&&(is_float(\'object\')||is_int(\'object\')))&&$x82==\'object\'));$x79=$x81;}if(JS::toBoolean($x79,$global)){return false;}return isset($_arg->class)&&$_arg->class===\'Array\';return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x127 =& $scope->properties['arguments'];
$x127->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x127->properties[$i] = $args[$i];
$x127->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x129 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 47, 18, '<image>/04_array.js');
$_TypeError =& $x129[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x129;
$x130 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x131 = $x130($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x131->class) && $x131->class === 'Error' && !isset($x131->properties['file']) && !isset($x131->properties['line']) && !isset($x131->properties['column'])) {$x131->properties['file'] = '<image>/04_array.js';$x131->properties['line'] = 47;$x131->properties['column'] = 18;$x131->attributes['file'] = $x131->attributes['line'] = $x131->attributes['column'] = 0; }
throw new JSException($x131, 47, 18, '<image>/04_array.js');
}
$x128 = JS::toObject($leThis, $global);
unset($x132, $W132, $S132, $U132);
$x133 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x128, (string) 'join', 47, 18, '<image>/04_array.js');
$x132 =& $x133[0]; list(,$W132,$S132,$U132) = $x133;
if (!(is_object($x132) && isset($x132->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x136 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 47, 18, '<image>/04_array.js');
$_TypeError =& $x136[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x136;
$x137 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x138 = $x137($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/04_array.js';$x138->properties['line'] = 47;$x138->properties['column'] = 18;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 47, 18, '<image>/04_array.js');
}
$x134 = $x132->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x135 = $x134($global, $x128, $x132, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x135;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x127=&$scope->properties[\'arguments\'];$x127->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x127->properties[$i]=$args[$i];$x127->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x129=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',47,18,\'<image>/04_array.js\');$_TypeError=&$x129[0];list(,$WTypeError,$STypeError,$UTypeError)=$x129;$x130=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x131=$x130($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x131->class)&&$x131->class===\'Error\'&&!isset($x131->properties[\'file\'])&&!isset($x131->properties[\'line\'])&&!isset($x131->properties[\'column\'])){$x131->properties[\'file\']=\'<image>/04_array.js\';$x131->properties[\'line\']=47;$x131->properties[\'column\']=18;$x131->attributes[\'file\']=$x131->attributes[\'line\']=$x131->attributes[\'column\']=0;}throw new JSException($x131,47,18,\'<image>/04_array.js\');}$x128=JS::toObject($leThis,$global);unset($x132,$W132,$S132,$U132);$x133=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x128,(string)\'join\',47,18,\'<image>/04_array.js\');$x132=&$x133[0];list(,$W132,$S132,$U132)=$x133;if(!(is_object($x132)&&isset($x132->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x136=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',47,18,\'<image>/04_array.js\');$_TypeError=&$x136[0];list(,$WTypeError,$STypeError,$UTypeError)=$x136;$x137=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x138=$x137($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x138->class)&&$x138->class===\'Error\'&&!isset($x138->properties[\'file\'])&&!isset($x138->properties[\'line\'])&&!isset($x138->properties[\'column\'])){$x138->properties[\'file\']=\'<image>/04_array.js\';$x138->properties[\'line\']=47;$x138->properties[\'column\']=18;$x138->attributes[\'file\']=$x138->attributes[\'line\']=$x138->attributes[\'column\']=0;}throw new JSException($x138,47,18,\'<image>/04_array.js\');}$x134=$x132->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x135=$x134($global,$x128,$x132,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x135;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x165 =& $scope->properties['arguments'];
$x165->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x165->properties[$i] = $args[$i];
$x165->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x166 = clone JS::$arrayTemplate;
$x166->properties['length'] = 0;
$x166->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x166;
for ($x167 = 0;; ++$x167) {
if ($x167 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x168, $W168, $S168, $U168);
$x169 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 55, 26, '<image>/04_array.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x168;
}
if ($x167 !== 0) {
$x170 = ++$_i;
}
$x171 = JS::toPrimitive($_i, $global);
$x172 = JS::toPrimitive($_l, $global);
$x173 = (is_string($x171) && is_string($x172) ? strcmp($x171, $x172) < 0 : (!is_nan($x174 = JS::toNumber($x171, $global)) && !is_nan($x175 = JS::toNumber($x172, $global)) && $x174 < $x175));
if (!JS::toBoolean($x173, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x177 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 56, 16, '<image>/04_array.js');
$_TypeError =& $x177[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x177;
$x178 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x179 = $x178($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x179->class) && $x179->class === 'Error' && !isset($x179->properties['file']) && !isset($x179->properties['line']) && !isset($x179->properties['column'])) {$x179->properties['file'] = '<image>/04_array.js';$x179->properties['line'] = 56;$x179->properties['column'] = 16;$x179->attributes['file'] = $x179->attributes['line'] = $x179->attributes['column'] = 0; }
throw new JSException($x179, 56, 16, '<image>/04_array.js');
}
$x176 = JS::toObject($_newArray, $global);
unset($x180, $W180, $S180, $U180);
$x181 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x176, (string) 'push', 56, 16, '<image>/04_array.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
unset($x182, $W182, $S182, $U182);
$x183 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 56, 21, '<image>/04_array.js');
$x182 =& $x183[0]; list(,$W182,$S182,$U182) = $x183;
if (!(is_object($x180) && isset($x180->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x186 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 56, 16, '<image>/04_array.js');
$_TypeError =& $x186[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x186;
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x188 = $x187($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/04_array.js';$x188->properties['line'] = 56;$x188->properties['column'] = 16;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 56, 16, '<image>/04_array.js');
}
$x184 = $x180->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x185 = $x184($global, $x176, $x180, array($x182), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
for ($x189 = 0;; ++$x189) {
if ($x189 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x190 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 59, 22, '<image>/04_array.js');
$_arguments =& $x190[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x190;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x191 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 59, 22, '<image>/04_array.js');
$_ReferenceError =& $x191[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x191;
$x192 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 59, 22);
$x193 = $x192($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x193->class) && $x193->class === 'Error' && !isset($x193->properties['file']) && !isset($x193->properties['line']) && !isset($x193->properties['column'])) {$x193->properties['file'] = '<image>/04_array.js';$x193->properties['line'] = 59;$x193->properties['column'] = 22;$x193->attributes['file'] = $x193->attributes['line'] = $x193->attributes['column'] = 0; }
throw new JSException($x193, 59, 22, '<image>/04_array.js');
}
unset($x194, $W194, $S194, $U194);
$x195 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 59, 31, '<image>/04_array.js');
$x194 =& $x195[0]; list(,$W194,$S194,$U194) = $x195;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x194;
}
if ($x189 !== 0) {
$x196 = ++$_i;
}
$x197 = JS::toPrimitive($_i, $global);
$x198 = JS::toPrimitive($_l, $global);
$x199 = (is_string($x197) && is_string($x198) ? strcmp($x197, $x198) < 0 : (!is_nan($x200 = JS::toNumber($x197, $global)) && !is_nan($x201 = JS::toNumber($x198, $global)) && $x200 < $x201));
if (!JS::toBoolean($x199, $global)) { break; }

unset($_Array, $WArray, $SArray, $UArray);
$x202 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Array', 60, 7, '<image>/04_array.js');
$_Array =& $x202[0]; list(,$WArray,$SArray,$UArray) = $x202;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x203 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 60, 7, '<image>/04_array.js');
$_ReferenceError =& $x203[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x203;
$x204 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 7);
$x205 = $x204($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x205->class) && $x205->class === 'Error' && !isset($x205->properties['file']) && !isset($x205->properties['line']) && !isset($x205->properties['column'])) {$x205->properties['file'] = '<image>/04_array.js';$x205->properties['line'] = 60;$x205->properties['column'] = 7;$x205->attributes['file'] = $x205->attributes['line'] = $x205->attributes['column'] = 0; }
throw new JSException($x205, 60, 7, '<image>/04_array.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x207 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 60, 20, '<image>/04_array.js');
$_TypeError =& $x207[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x207;
$x208 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x209 = $x208($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x209->class) && $x209->class === 'Error' && !isset($x209->properties['file']) && !isset($x209->properties['line']) && !isset($x209->properties['column'])) {$x209->properties['file'] = '<image>/04_array.js';$x209->properties['line'] = 60;$x209->properties['column'] = 20;$x209->attributes['file'] = $x209->attributes['line'] = $x209->attributes['column'] = 0; }
throw new JSException($x209, 60, 20, '<image>/04_array.js');
}
$x206 = JS::toObject($_Array, $global);
unset($x210, $W210, $S210, $U210);
$x211 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x206, (string) 'isArray', 60, 20, '<image>/04_array.js');
$x210 =& $x211[0]; list(,$W210,$S210,$U210) = $x211;
unset($x212, $W212, $S212, $U212);
$x213 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 60, 30, '<image>/04_array.js');
$x212 =& $x213[0]; list(,$W212,$S212,$U212) = $x213;
if (!(is_object($x210) && isset($x210->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x216 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 60, 20, '<image>/04_array.js');
$_TypeError =& $x216[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x216;
$x217 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x218 = $x217($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x218->class) && $x218->class === 'Error' && !isset($x218->properties['file']) && !isset($x218->properties['line']) && !isset($x218->properties['column'])) {$x218->properties['file'] = '<image>/04_array.js';$x218->properties['line'] = 60;$x218->properties['column'] = 20;$x218->attributes['file'] = $x218->attributes['line'] = $x218->attributes['column'] = 0; }
throw new JSException($x218, 60, 20, '<image>/04_array.js');
}
$x214 = $x210->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x215 = $x214($global, $x206, $x210, array($x212), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x215, $global)) {
for ($x219 = 0;; ++$x219) {
if ($x219 === 0) {
$scope->properties['j'] = JS::$undefined; $_j =& $scope->properties['j'];
$Uj = FALSE;
$_j = 0;
unset($x220, $W220, $S220, $U220);
$x221 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 61, 33, '<image>/04_array.js');
$x220 =& $x221[0]; list(,$W220,$S220,$U220) = $x221;
unset($x222, $W222, $S222, $U222);
$x223 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x220, (string) 'length', 61, 36, '<image>/04_array.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
$scope->properties['m'] = JS::$undefined; $_m =& $scope->properties['m'];
$Um = FALSE;
$_m = $x222;
}
if ($x219 !== 0) {
$x224 = ++$_j;
}
$x225 = JS::toPrimitive($_j, $global);
$x226 = JS::toPrimitive($_m, $global);
$x227 = (is_string($x225) && is_string($x226) ? strcmp($x225, $x226) < 0 : (!is_nan($x228 = JS::toNumber($x225, $global)) && !is_nan($x229 = JS::toNumber($x226, $global)) && $x228 < $x229));
if (!JS::toBoolean($x227, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x231 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 62, 18, '<image>/04_array.js');
$_TypeError =& $x231[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x231;
$x232 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x233 = $x232($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x233->class) && $x233->class === 'Error' && !isset($x233->properties['file']) && !isset($x233->properties['line']) && !isset($x233->properties['column'])) {$x233->properties['file'] = '<image>/04_array.js';$x233->properties['line'] = 62;$x233->properties['column'] = 18;$x233->attributes['file'] = $x233->attributes['line'] = $x233->attributes['column'] = 0; }
throw new JSException($x233, 62, 18, '<image>/04_array.js');
}
$x230 = JS::toObject($_newArray, $global);
unset($x234, $W234, $S234, $U234);
$x235 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x230, (string) 'push', 62, 18, '<image>/04_array.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
unset($x236, $W236, $S236, $U236);
$x237 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 62, 28, '<image>/04_array.js');
$x236 =& $x237[0]; list(,$W236,$S236,$U236) = $x237;
unset($x238, $W238, $S238, $U238);
$x239 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x236, (string) $_j, 62, 31, '<image>/04_array.js');
$x238 =& $x239[0]; list(,$W238,$S238,$U238) = $x239;
if (!(is_object($x234) && isset($x234->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x242 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 62, 18, '<image>/04_array.js');
$_TypeError =& $x242[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x242;
$x243 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x244 = $x243($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x244->class) && $x244->class === 'Error' && !isset($x244->properties['file']) && !isset($x244->properties['line']) && !isset($x244->properties['column'])) {$x244->properties['file'] = '<image>/04_array.js';$x244->properties['line'] = 62;$x244->properties['column'] = 18;$x244->attributes['file'] = $x244->attributes['line'] = $x244->attributes['column'] = 0; }
throw new JSException($x244, 62, 18, '<image>/04_array.js');
}
$x240 = $x234->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x241 = $x240($global, $x230, $x234, array($x238), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
}
else {
if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x246 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 66, 17, '<image>/04_array.js');
$_TypeError =& $x246[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x246;
$x247 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x248 = $x247($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x248->class) && $x248->class === 'Error' && !isset($x248->properties['file']) && !isset($x248->properties['line']) && !isset($x248->properties['column'])) {$x248->properties['file'] = '<image>/04_array.js';$x248->properties['line'] = 66;$x248->properties['column'] = 17;$x248->attributes['file'] = $x248->attributes['line'] = $x248->attributes['column'] = 0; }
throw new JSException($x248, 66, 17, '<image>/04_array.js');
}
$x245 = JS::toObject($_newArray, $global);
unset($x249, $W249, $S249, $U249);
$x250 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x245, (string) 'push', 66, 17, '<image>/04_array.js');
$x249 =& $x250[0]; list(,$W249,$S249,$U249) = $x250;
unset($x251, $W251, $S251, $U251);
$x252 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 66, 27, '<image>/04_array.js');
$x251 =& $x252[0]; list(,$W251,$S251,$U251) = $x252;
if (!(is_object($x249) && isset($x249->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x255 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 66, 17, '<image>/04_array.js');
$_TypeError =& $x255[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x255;
$x256 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x257 = $x256($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x257->class) && $x257->class === 'Error' && !isset($x257->properties['file']) && !isset($x257->properties['line']) && !isset($x257->properties['column'])) {$x257->properties['file'] = '<image>/04_array.js';$x257->properties['line'] = 66;$x257->properties['column'] = 17;$x257->attributes['file'] = $x257->attributes['line'] = $x257->attributes['column'] = 0; }
throw new JSException($x257, 66, 17, '<image>/04_array.js');
}
$x253 = $x249->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x254 = $x253($global, $x245, $x249, array($x251), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x165=&$scope->properties[\'arguments\'];$x165->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x165->properties[$i]=$args[$i];$x165->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$x166=clone JS::$arrayTemplate;$x166->properties[\'length\']=0;$x166->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x166;for($x167=0;;++$x167){if($x167===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x168,$W168,$S168,$U168);$x169=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',55,26,\'<image>/04_array.js\');$x168=&$x169[0];list(,$W168,$S168,$U168)=$x169;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x168;}if($x167!==0){$x170=++$_i;}$x171=JS::toPrimitive($_i,$global);$x172=JS::toPrimitive($_l,$global);$x173=(is_string($x171)&&is_string($x172)?strcmp($x171,$x172)<0:(!is_nan($x174=JS::toNumber($x171,$global))&&!is_nan($x175=JS::toNumber($x172,$global))&&$x174<$x175));if(!JS::toBoolean($x173,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x177=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',56,16,\'<image>/04_array.js\');$_TypeError=&$x177[0];list(,$WTypeError,$STypeError,$UTypeError)=$x177;$x178=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x179=$x178($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x179->class)&&$x179->class===\'Error\'&&!isset($x179->properties[\'file\'])&&!isset($x179->properties[\'line\'])&&!isset($x179->properties[\'column\'])){$x179->properties[\'file\']=\'<image>/04_array.js\';$x179->properties[\'line\']=56;$x179->properties[\'column\']=16;$x179->attributes[\'file\']=$x179->attributes[\'line\']=$x179->attributes[\'column\']=0;}throw new JSException($x179,56,16,\'<image>/04_array.js\');}$x176=JS::toObject($_newArray,$global);unset($x180,$W180,$S180,$U180);$x181=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x176,(string)\'push\',56,16,\'<image>/04_array.js\');$x180=&$x181[0];list(,$W180,$S180,$U180)=$x181;unset($x182,$W182,$S182,$U182);$x183=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,56,21,\'<image>/04_array.js\');$x182=&$x183[0];list(,$W182,$S182,$U182)=$x183;if(!(is_object($x180)&&isset($x180->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x186=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',56,16,\'<image>/04_array.js\');$_TypeError=&$x186[0];list(,$WTypeError,$STypeError,$UTypeError)=$x186;$x187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x188=$x187($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x188->class)&&$x188->class===\'Error\'&&!isset($x188->properties[\'file\'])&&!isset($x188->properties[\'line\'])&&!isset($x188->properties[\'column\'])){$x188->properties[\'file\']=\'<image>/04_array.js\';$x188->properties[\'line\']=56;$x188->properties[\'column\']=16;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,56,16,\'<image>/04_array.js\');}$x184=$x180->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x185=$x184($global,$x176,$x180,array($x182),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}for($x189=0;;++$x189){if($x189===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x190=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',59,22,\'<image>/04_array.js\');$_arguments=&$x190[0];list(,$Warguments,$Sarguments,$Uarguments)=$x190;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x191=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',59,22,\'<image>/04_array.js\');$_ReferenceError=&$x191[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x191;$x192=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',59,22);$x193=$x192($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x193->class)&&$x193->class===\'Error\'&&!isset($x193->properties[\'file\'])&&!isset($x193->properties[\'line\'])&&!isset($x193->properties[\'column\'])){$x193->properties[\'file\']=\'<image>/04_array.js\';$x193->properties[\'line\']=59;$x193->properties[\'column\']=22;$x193->attributes[\'file\']=$x193->attributes[\'line\']=$x193->attributes[\'column\']=0;}throw new JSException($x193,59,22,\'<image>/04_array.js\');}unset($x194,$W194,$S194,$U194);$x195=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',59,31,\'<image>/04_array.js\');$x194=&$x195[0];list(,$W194,$S194,$U194)=$x195;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x194;}if($x189!==0){$x196=++$_i;}$x197=JS::toPrimitive($_i,$global);$x198=JS::toPrimitive($_l,$global);$x199=(is_string($x197)&&is_string($x198)?strcmp($x197,$x198)<0:(!is_nan($x200=JS::toNumber($x197,$global))&&!is_nan($x201=JS::toNumber($x198,$global))&&$x200<$x201));if(!JS::toBoolean($x199,$global)){break;}unset($_Array,$WArray,$SArray,$UArray);$x202=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Array\',60,7,\'<image>/04_array.js\');$_Array=&$x202[0];list(,$WArray,$SArray,$UArray)=$x202;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x203=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',60,7,\'<image>/04_array.js\');$_ReferenceError=&$x203[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x203;$x204=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,7);$x205=$x204($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x205->class)&&$x205->class===\'Error\'&&!isset($x205->properties[\'file\'])&&!isset($x205->properties[\'line\'])&&!isset($x205->properties[\'column\'])){$x205->properties[\'file\']=\'<image>/04_array.js\';$x205->properties[\'line\']=60;$x205->properties[\'column\']=7;$x205->attributes[\'file\']=$x205->attributes[\'line\']=$x205->attributes[\'column\']=0;}throw new JSException($x205,60,7,\'<image>/04_array.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x207=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',60,20,\'<image>/04_array.js\');$_TypeError=&$x207[0];list(,$WTypeError,$STypeError,$UTypeError)=$x207;$x208=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x209=$x208($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x209->class)&&$x209->class===\'Error\'&&!isset($x209->properties[\'file\'])&&!isset($x209->properties[\'line\'])&&!isset($x209->properties[\'column\'])){$x209->properties[\'file\']=\'<image>/04_array.js\';$x209->properties[\'line\']=60;$x209->properties[\'column\']=20;$x209->attributes[\'file\']=$x209->attributes[\'line\']=$x209->attributes[\'column\']=0;}throw new JSException($x209,60,20,\'<image>/04_array.js\');}$x206=JS::toObject($_Array,$global);unset($x210,$W210,$S210,$U210);$x211=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x206,(string)\'isArray\',60,20,\'<image>/04_array.js\');$x210=&$x211[0];list(,$W210,$S210,$U210)=$x211;unset($x212,$W212,$S212,$U212);$x213=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,60,30,\'<image>/04_array.js\');$x212=&$x213[0];list(,$W212,$S212,$U212)=$x213;if(!(is_object($x210)&&isset($x210->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x216=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',60,20,\'<image>/04_array.js\');$_TypeError=&$x216[0];list(,$WTypeError,$STypeError,$UTypeError)=$x216;$x217=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x218=$x217($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x218->class)&&$x218->class===\'Error\'&&!isset($x218->properties[\'file\'])&&!isset($x218->properties[\'line\'])&&!isset($x218->properties[\'column\'])){$x218->properties[\'file\']=\'<image>/04_array.js\';$x218->properties[\'line\']=60;$x218->properties[\'column\']=20;$x218->attributes[\'file\']=$x218->attributes[\'line\']=$x218->attributes[\'column\']=0;}throw new JSException($x218,60,20,\'<image>/04_array.js\');}$x214=$x210->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x215=$x214($global,$x206,$x210,array($x212),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x215,$global)){for($x219=0;;++$x219){if($x219===0){$scope->properties[\'j\']=JS::$undefined;$_j=&$scope->properties[\'j\'];$Uj=FALSE;$_j=0;unset($x220,$W220,$S220,$U220);$x221=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,61,33,\'<image>/04_array.js\');$x220=&$x221[0];list(,$W220,$S220,$U220)=$x221;unset($x222,$W222,$S222,$U222);$x223=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x220,(string)\'length\',61,36,\'<image>/04_array.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;$scope->properties[\'m\']=JS::$undefined;$_m=&$scope->properties[\'m\'];$Um=FALSE;$_m=$x222;}if($x219!==0){$x224=++$_j;}$x225=JS::toPrimitive($_j,$global);$x226=JS::toPrimitive($_m,$global);$x227=(is_string($x225)&&is_string($x226)?strcmp($x225,$x226)<0:(!is_nan($x228=JS::toNumber($x225,$global))&&!is_nan($x229=JS::toNumber($x226,$global))&&$x228<$x229));if(!JS::toBoolean($x227,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x231=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',62,18,\'<image>/04_array.js\');$_TypeError=&$x231[0];list(,$WTypeError,$STypeError,$UTypeError)=$x231;$x232=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x233=$x232($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x233->class)&&$x233->class===\'Error\'&&!isset($x233->properties[\'file\'])&&!isset($x233->properties[\'line\'])&&!isset($x233->properties[\'column\'])){$x233->properties[\'file\']=\'<image>/04_array.js\';$x233->properties[\'line\']=62;$x233->properties[\'column\']=18;$x233->attributes[\'file\']=$x233->attributes[\'line\']=$x233->attributes[\'column\']=0;}throw new JSException($x233,62,18,\'<image>/04_array.js\');}$x230=JS::toObject($_newArray,$global);unset($x234,$W234,$S234,$U234);$x235=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x230,(string)\'push\',62,18,\'<image>/04_array.js\');$x234=&$x235[0];list(,$W234,$S234,$U234)=$x235;unset($x236,$W236,$S236,$U236);$x237=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,62,28,\'<image>/04_array.js\');$x236=&$x237[0];list(,$W236,$S236,$U236)=$x237;unset($x238,$W238,$S238,$U238);$x239=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x236,(string)$_j,62,31,\'<image>/04_array.js\');$x238=&$x239[0];list(,$W238,$S238,$U238)=$x239;if(!(is_object($x234)&&isset($x234->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x242=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',62,18,\'<image>/04_array.js\');$_TypeError=&$x242[0];list(,$WTypeError,$STypeError,$UTypeError)=$x242;$x243=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x244=$x243($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x244->class)&&$x244->class===\'Error\'&&!isset($x244->properties[\'file\'])&&!isset($x244->properties[\'line\'])&&!isset($x244->properties[\'column\'])){$x244->properties[\'file\']=\'<image>/04_array.js\';$x244->properties[\'line\']=62;$x244->properties[\'column\']=18;$x244->attributes[\'file\']=$x244->attributes[\'line\']=$x244->attributes[\'column\']=0;}throw new JSException($x244,62,18,\'<image>/04_array.js\');}$x240=$x234->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x241=$x240($global,$x230,$x234,array($x238),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}else{if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x246=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',66,17,\'<image>/04_array.js\');$_TypeError=&$x246[0];list(,$WTypeError,$STypeError,$UTypeError)=$x246;$x247=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x248=$x247($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x248->class)&&$x248->class===\'Error\'&&!isset($x248->properties[\'file\'])&&!isset($x248->properties[\'line\'])&&!isset($x248->properties[\'column\'])){$x248->properties[\'file\']=\'<image>/04_array.js\';$x248->properties[\'line\']=66;$x248->properties[\'column\']=17;$x248->attributes[\'file\']=$x248->attributes[\'line\']=$x248->attributes[\'column\']=0;}throw new JSException($x248,66,17,\'<image>/04_array.js\');}$x245=JS::toObject($_newArray,$global);unset($x249,$W249,$S249,$U249);$x250=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x245,(string)\'push\',66,17,\'<image>/04_array.js\');$x249=&$x250[0];list(,$W249,$S249,$U249)=$x250;unset($x251,$W251,$S251,$U251);$x252=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,66,27,\'<image>/04_array.js\');$x251=&$x252[0];list(,$W251,$S251,$U251)=$x252;if(!(is_object($x249)&&isset($x249->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x255=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',66,17,\'<image>/04_array.js\');$_TypeError=&$x255[0];list(,$WTypeError,$STypeError,$UTypeError)=$x255;$x256=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x257=$x256($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x257->class)&&$x257->class===\'Error\'&&!isset($x257->properties[\'file\'])&&!isset($x257->properties[\'line\'])&&!isset($x257->properties[\'column\'])){$x257->properties[\'file\']=\'<image>/04_array.js\';$x257->properties[\'line\']=66;$x257->properties[\'column\']=17;$x257->attributes[\'file\']=$x257->attributes[\'line\']=$x257->attributes[\'column\']=0;}throw new JSException($x257,66,17,\'<image>/04_array.js\');}$x253=$x249->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x254=$x253($global,$x245,$x249,array($x251),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x270 =& $scope->properties['arguments'];
$x270->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x270->properties[$i] = $args[$i];
$x270->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x271 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x271, $global)) {
$x272 = ',';
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x272;;
};
$scope->properties['string'] = JS::$undefined; $_string =& $scope->properties['string'];
$Ustring = FALSE;
$_string = '';
unset($x276, $W276, $S276, $U276);
$x277 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 80, 10, '<image>/04_array.js');
$x276 =& $x277[0]; list(,$W276,$S276,$U276) = $x277;
$x273 = JS::toPrimitive($x276, $global);
$x274 = JS::toPrimitive(1, $global);
$x275 = (is_string($x273) && is_string($x274) ? strcmp($x273, $x274) < 0 : (!is_nan($x278 = JS::toNumber($x273, $global)) && !is_nan($x279 = JS::toNumber($x274, $global)) && $x278 < $x279));
if (JS::toBoolean($x275, $global)) {

return '';;
};
for ($x280 = 0;; ++$x280) {
if ($x280 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x281, $W281, $S281, $U281);
$x282 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 84, 26, '<image>/04_array.js');
$x281 =& $x282[0]; list(,$W281,$S281,$U281) = $x282;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x281;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = JS::$undefined;
}
if ($x280 !== 0) {
$x283 = ++$_i;
}
$x284 = JS::toPrimitive($_i, $global);
$x285 = JS::toPrimitive($_l, $global);
$x286 = (is_string($x284) && is_string($x285) ? strcmp($x284, $x285) < 0 : (!is_nan($x287 = JS::toNumber($x284, $global)) && !is_nan($x288 = JS::toNumber($x285, $global)) && $x287 < $x288));
if (!JS::toBoolean($x286, $global)) { break; }

$x289 = !(((gettype($_i) === gettype(0) && $_i === 0))|| (((is_float($_i) || is_int($_i)) && (is_float(0) || is_int(0))) && $_i == 0));
if (JS::toBoolean($x289, $global)) {
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x290 = JS::toPrimitive($_string, $global);
$x291 = JS::toPrimitive($_separator, $global);
$_string = (is_string($x290) || is_string($x291) ? JS::toString($x290, $global) . JS::toString($x291, $global) : JS::toNumber($x290, $global) + JS::toNumber($x291, $global));;
};
unset($x292, $W292, $S292, $U292);
$x293 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 89, 14, '<image>/04_array.js');
$x292 =& $x293[0]; list(,$W292,$S292,$U292) = $x293;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x292;
$x295 = !(((gettype($_item) === gettype(JS::$undefined) && $_item === JS::$undefined))|| (((is_float($_item) || is_int($_item)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_item == JS::$undefined));
$x294 = $x295;
if (JS::toBoolean($x294, $global)) {
$x296 = !(((gettype($_item) === gettype(NULL) && $_item === NULL))|| (((is_float($_item) || is_int($_item)) && (is_float(NULL) || is_int(NULL))) && $_item == NULL));
$x294 = $x296; }
if (JS::toBoolean($x294, $global)) {
$x297 = JS::toString($_item, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x298 = JS::toPrimitive($_string, $global);
$x299 = JS::toPrimitive($x297, $global);
$_string = (is_string($x298) || is_string($x299) ? JS::toString($x298, $global) . JS::toString($x299, $global) : JS::toNumber($x298, $global) + JS::toNumber($x299, $global));;
};;
};
return $_string;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x270=&$scope->properties[\'arguments\'];$x270->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x270->properties[$i]=$args[$i];$x270->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$global->scope[++$global->scope_sp]=$scope;$x271=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x271,$global)){$x272=\',\';if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x272;}$scope->properties[\'string\']=JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$_string=\'\';unset($x276,$W276,$S276,$U276);$x277=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',80,10,\'<image>/04_array.js\');$x276=&$x277[0];list(,$W276,$S276,$U276)=$x277;$x273=JS::toPrimitive($x276,$global);$x274=JS::toPrimitive(1,$global);$x275=(is_string($x273)&&is_string($x274)?strcmp($x273,$x274)<0:(!is_nan($x278=JS::toNumber($x273,$global))&&!is_nan($x279=JS::toNumber($x274,$global))&&$x278<$x279));if(JS::toBoolean($x275,$global)){return\'\';}for($x280=0;;++$x280){if($x280===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x281,$W281,$S281,$U281);$x282=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',84,26,\'<image>/04_array.js\');$x281=&$x282[0];list(,$W281,$S281,$U281)=$x282;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x281;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;}if($x280!==0){$x283=++$_i;}$x284=JS::toPrimitive($_i,$global);$x285=JS::toPrimitive($_l,$global);$x286=(is_string($x284)&&is_string($x285)?strcmp($x284,$x285)<0:(!is_nan($x287=JS::toNumber($x284,$global))&&!is_nan($x288=JS::toNumber($x285,$global))&&$x287<$x288));if(!JS::toBoolean($x286,$global)){break;}$x289=!(((gettype($_i)===gettype(0)&&$_i===0))||(((is_float($_i)||is_int($_i))&&(is_float(0)||is_int(0)))&&$_i==0));if(JS::toBoolean($x289,$global)){if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x290=JS::toPrimitive($_string,$global);$x291=JS::toPrimitive($_separator,$global);$_string=(is_string($x290)||is_string($x291)?JS::toString($x290,$global).JS::toString($x291,$global):JS::toNumber($x290,$global)+JS::toNumber($x291,$global));}unset($x292,$W292,$S292,$U292);$x293=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,89,14,\'<image>/04_array.js\');$x292=&$x293[0];list(,$W292,$S292,$U292)=$x293;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x292;$x295=!(((gettype($_item)===gettype(JS::$undefined)&&$_item===JS::$undefined))||(((is_float($_item)||is_int($_item))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_item==JS::$undefined));$x294=$x295;if(JS::toBoolean($x294,$global)){$x296=!(((gettype($_item)===gettype(NULL)&&$_item===NULL))||(((is_float($_item)||is_int($_item))&&(is_float(NULL)||is_int(NULL)))&&$_item==NULL));$x294=$x296;}if(JS::toBoolean($x294,$global)){$x297=JS::toString($_item,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x298=JS::toPrimitive($_string,$global);$x299=JS::toPrimitive($x297,$global);$_string=(is_string($x298)||is_string($x299)?JS::toString($x298,$global).JS::toString($x299,$global):JS::toNumber($x298,$global)+JS::toNumber($x299,$global));}}return$_string;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x312 =& $scope->properties['arguments'];
$x312->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x312->properties[$i] = $args[$i];
$x312->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x316, $W316, $S316, $U316);
$x317 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 100, 10, '<image>/04_array.js');
$x316 =& $x317[0]; list(,$W316,$S316,$U316) = $x317;
$x313 = JS::toPrimitive($x316, $global);
$x314 = JS::toPrimitive(1, $global);
$x315 = (is_string($x313) && is_string($x314) ? strcmp($x313, $x314) < 0 : (!is_nan($x318 = JS::toNumber($x313, $global)) && !is_nan($x319 = JS::toNumber($x314, $global)) && $x318 < $x319));
if (JS::toBoolean($x315, $global)) {

return JS::$undefined;;
};
unset($x320, $W320, $S320, $U320);
$x321 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 104, 22, '<image>/04_array.js');
$x320 =& $x321[0]; list(,$W320,$S320,$U320) = $x321;
unset($x322, $W322, $S322, $U322);
$x323 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) (JS::toNumber($x320, $global) - JS::toNumber(1, $global)), 104, 17, '<image>/04_array.js');
$x322 =& $x323[0]; list(,$W322,$S322,$U322) = $x323;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x322;
unset($x324, $W324, $S324, $U324);
$x325 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 104, 46, '<image>/04_array.js');
$x324 =& $x325[0]; list(,$W324,$S324,$U324) = $x325;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x324;
unset($x327, $W327, $S327, $U327);
$x328 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 105, 18, '<image>/04_array.js');
$x327 =& $x328[0]; list(,$W327,$S327,$U327) = $x328;
if (!array_key_exists((JS::toNumber($x327, $global) - JS::toNumber(1, $global)), $leThis->attributes)) { unset($leThis->properties[(JS::toNumber($x327, $global) - JS::toNumber(1, $global))]); $x326 = TRUE; }
else if ($leThis->attributes[(JS::toNumber($x327, $global) - JS::toNumber(1, $global))] & JS::CONFIGURABLE) { unset($leThis->properties[(JS::toNumber($x327, $global) - JS::toNumber(1, $global))], $leThis->attributes[(JS::toNumber($x327, $global) - JS::toNumber(1, $global))], $leThis->getters[(JS::toNumber($x327, $global) - JS::toNumber(1, $global))], $leThis->setters[(JS::toNumber($x327, $global) - JS::toNumber(1, $global))]); $x326 = TRUE; }
else { $x326 = FALSE; };
$x329 = (JS::toNumber($_len, $global) - JS::toNumber(1, $global));
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x330 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 106, 14, '<image>/04_array.js');
$_TypeError =& $x330[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x330;
$x331 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x332 = $x331($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x332->class) && $x332->class === 'Error' && !isset($x332->properties['file']) && !isset($x332->properties['line']) && !isset($x332->properties['column'])) {$x332->properties['file'] = '<image>/04_array.js';$x332->properties['line'] = 106;$x332->properties['column'] = 14;$x332->attributes['file'] = $x332->attributes['line'] = $x332->attributes['column'] = 0; }
throw new JSException($x332, 106, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x333, $W333, $S333, $U333);
$x334 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) 'length', 106, 14, '<image>/04_array.js');
$x333 =& $x334[0]; list(,$W333,$S333,$U333) = $x334;
if ($U333 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['length'] = $x333; $x333 =& $leThis->properties['length']; $leThis->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U333 = FALSE; $W333 = TRUE; }
if (isset($S333)) {
$x336 = $S333->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x337 = $x336($global, $leThis, $S333, array($x329), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x335 = $x337;
} else {
if (!$U333) {$x335 = $x329;if ($W333) { $x333 = $x329; }  }
else { $x335 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x312=&$scope->properties[\'arguments\'];$x312->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x312->properties[$i]=$args[$i];$x312->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x316,$W316,$S316,$U316);$x317=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',100,10,\'<image>/04_array.js\');$x316=&$x317[0];list(,$W316,$S316,$U316)=$x317;$x313=JS::toPrimitive($x316,$global);$x314=JS::toPrimitive(1,$global);$x315=(is_string($x313)&&is_string($x314)?strcmp($x313,$x314)<0:(!is_nan($x318=JS::toNumber($x313,$global))&&!is_nan($x319=JS::toNumber($x314,$global))&&$x318<$x319));if(JS::toBoolean($x315,$global)){return JS::$undefined;}unset($x320,$W320,$S320,$U320);$x321=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',104,22,\'<image>/04_array.js\');$x320=&$x321[0];list(,$W320,$S320,$U320)=$x321;unset($x322,$W322,$S322,$U322);$x323=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)(JS::toNumber($x320,$global)-JS::toNumber(1,$global)),104,17,\'<image>/04_array.js\');$x322=&$x323[0];list(,$W322,$S322,$U322)=$x323;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x322;unset($x324,$W324,$S324,$U324);$x325=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',104,46,\'<image>/04_array.js\');$x324=&$x325[0];list(,$W324,$S324,$U324)=$x325;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x324;unset($x327,$W327,$S327,$U327);$x328=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',105,18,\'<image>/04_array.js\');$x327=&$x328[0];list(,$W327,$S327,$U327)=$x328;if(!array_key_exists((JS::toNumber($x327,$global)-JS::toNumber(1,$global)),$leThis->attributes)){unset($leThis->properties[(JS::toNumber($x327,$global)-JS::toNumber(1,$global))]);$x326=TRUE;}else if($leThis->attributes[(JS::toNumber($x327,$global)-JS::toNumber(1,$global))]&JS::CONFIGURABLE){unset($leThis->properties[(JS::toNumber($x327,$global)-JS::toNumber(1,$global))],$leThis->attributes[(JS::toNumber($x327,$global)-JS::toNumber(1,$global))],$leThis->getters[(JS::toNumber($x327,$global)-JS::toNumber(1,$global))],$leThis->setters[(JS::toNumber($x327,$global)-JS::toNumber(1,$global))]);$x326=TRUE;}else{$x326=FALSE;}$x329=(JS::toNumber($_len,$global)-JS::toNumber(1,$global));if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x330=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',106,14,\'<image>/04_array.js\');$_TypeError=&$x330[0];list(,$WTypeError,$STypeError,$UTypeError)=$x330;$x331=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x332=$x331($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x332->class)&&$x332->class===\'Error\'&&!isset($x332->properties[\'file\'])&&!isset($x332->properties[\'line\'])&&!isset($x332->properties[\'column\'])){$x332->properties[\'file\']=\'<image>/04_array.js\';$x332->properties[\'line\']=106;$x332->properties[\'column\']=14;$x332->attributes[\'file\']=$x332->attributes[\'line\']=$x332->attributes[\'column\']=0;}throw new JSException($x332,106,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x333,$W333,$S333,$U333);$x334=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)\'length\',106,14,\'<image>/04_array.js\');$x333=&$x334[0];list(,$W333,$S333,$U333)=$x334;if($U333&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'length\']=$x333;$x333=&$leThis->properties[\'length\'];$leThis->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U333=FALSE;$W333=TRUE;}if(isset($S333)){$x336=$S333->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x337=$x336($global,$leThis,$S333,array($x329),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x335=$x337;}else{if(!$U333){$x335=$x329;if($W333){$x333=$x329;}}else{$x335=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x351 = 0;; ++$x351) {
if ($x351 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x350 =& $scope->properties['arguments'];
$x350->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x350->properties[$i] = $args[$i];
$x350->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x352 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 112, 22, '<image>/04_array.js');
$_arguments =& $x352[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x352;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x353 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 112, 22, '<image>/04_array.js');
$_ReferenceError =& $x353[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x353;
$x354 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 112, 22);
$x355 = $x354($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x355->class) && $x355->class === 'Error' && !isset($x355->properties['file']) && !isset($x355->properties['line']) && !isset($x355->properties['column'])) {$x355->properties['file'] = '<image>/04_array.js';$x355->properties['line'] = 112;$x355->properties['column'] = 22;$x355->attributes['file'] = $x355->attributes['line'] = $x355->attributes['column'] = 0; }
throw new JSException($x355, 112, 22, '<image>/04_array.js');
}
unset($x356, $W356, $S356, $U356);
$x357 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 112, 31, '<image>/04_array.js');
$x356 =& $x357[0]; list(,$W356,$S356,$U356) = $x357;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x356;
}
if ($x351 !== 0) {
$x358 = ++$_i;
}
$x359 = JS::toPrimitive($_i, $global);
$x360 = JS::toPrimitive($_l, $global);
$x361 = (is_string($x359) && is_string($x360) ? strcmp($x359, $x360) < 0 : (!is_nan($x362 = JS::toNumber($x359, $global)) && !is_nan($x363 = JS::toNumber($x360, $global)) && $x362 < $x363));
if (!JS::toBoolean($x361, $global)) { break; }

unset($x364, $W364, $S364, $U364);
$x365 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 113, 32, '<image>/04_array.js');
$x364 =& $x365[0]; list(,$W364,$S364,$U364) = $x365;
unset($x366, $W366, $S366, $U366);
$x367 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 113, 12, '<image>/04_array.js');
$x366 =& $x367[0]; list(,$W366,$S366,$U366) = $x367;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x368 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 113, 21, '<image>/04_array.js');
$_TypeError =& $x368[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x368;
$x369 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x370 = $x369($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x370->class) && $x370->class === 'Error' && !isset($x370->properties['file']) && !isset($x370->properties['line']) && !isset($x370->properties['column'])) {$x370->properties['file'] = '<image>/04_array.js';$x370->properties['line'] = 113;$x370->properties['column'] = 21;$x370->attributes['file'] = $x370->attributes['line'] = $x370->attributes['column'] = 0; }
throw new JSException($x370, 113, 21, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x371, $W371, $S371, $U371);
$x372 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $x366, 113, 21, '<image>/04_array.js');
$x371 =& $x372[0]; list(,$W371,$S371,$U371) = $x372;
if ($U371 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x366] = $x371; $x371 =& $leThis->properties[$x366]; $leThis->attributes[$x366] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U371 = FALSE; $W371 = TRUE; }
if (isset($S371)) {
$x374 = $S371->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x375 = $x374($global, $leThis, $S371, array($x364), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x373 = $x375;
} else {
if (!$U371) {$x373 = $x364;if ($W371) { $x371 = $x364; }  }
else { $x373 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($x366) && $x366 >= $leThis->properties['length']) { $leThis->properties['length'] = $x366 + 1; };
};
unset($x376, $W376, $S376, $U376);
$x377 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 116, 13, '<image>/04_array.js');
$x376 =& $x377[0]; list(,$W376,$S376,$U376) = $x377;
return $x376;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_10($global,$leThis,$fn,$args,$constructor=FALSE){for($x351=0;;++$x351){if($x351===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x350=&$scope->properties[\'arguments\'];$x350->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x350->properties[$i]=$args[$i];$x350->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x352=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',112,22,\'<image>/04_array.js\');$_arguments=&$x352[0];list(,$Warguments,$Sarguments,$Uarguments)=$x352;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x353=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',112,22,\'<image>/04_array.js\');$_ReferenceError=&$x353[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x353;$x354=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',112,22);$x355=$x354($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x355->class)&&$x355->class===\'Error\'&&!isset($x355->properties[\'file\'])&&!isset($x355->properties[\'line\'])&&!isset($x355->properties[\'column\'])){$x355->properties[\'file\']=\'<image>/04_array.js\';$x355->properties[\'line\']=112;$x355->properties[\'column\']=22;$x355->attributes[\'file\']=$x355->attributes[\'line\']=$x355->attributes[\'column\']=0;}throw new JSException($x355,112,22,\'<image>/04_array.js\');}unset($x356,$W356,$S356,$U356);$x357=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',112,31,\'<image>/04_array.js\');$x356=&$x357[0];list(,$W356,$S356,$U356)=$x357;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x356;}if($x351!==0){$x358=++$_i;}$x359=JS::toPrimitive($_i,$global);$x360=JS::toPrimitive($_l,$global);$x361=(is_string($x359)&&is_string($x360)?strcmp($x359,$x360)<0:(!is_nan($x362=JS::toNumber($x359,$global))&&!is_nan($x363=JS::toNumber($x360,$global))&&$x362<$x363));if(!JS::toBoolean($x361,$global)){break;}unset($x364,$W364,$S364,$U364);$x365=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,113,32,\'<image>/04_array.js\');$x364=&$x365[0];list(,$W364,$S364,$U364)=$x365;unset($x366,$W366,$S366,$U366);$x367=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',113,12,\'<image>/04_array.js\');$x366=&$x367[0];list(,$W366,$S366,$U366)=$x367;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x368=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',113,21,\'<image>/04_array.js\');$_TypeError=&$x368[0];list(,$WTypeError,$STypeError,$UTypeError)=$x368;$x369=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x370=$x369($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x370->class)&&$x370->class===\'Error\'&&!isset($x370->properties[\'file\'])&&!isset($x370->properties[\'line\'])&&!isset($x370->properties[\'column\'])){$x370->properties[\'file\']=\'<image>/04_array.js\';$x370->properties[\'line\']=113;$x370->properties[\'column\']=21;$x370->attributes[\'file\']=$x370->attributes[\'line\']=$x370->attributes[\'column\']=0;}throw new JSException($x370,113,21,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x371,$W371,$S371,$U371);$x372=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$x366,113,21,\'<image>/04_array.js\');$x371=&$x372[0];list(,$W371,$S371,$U371)=$x372;if($U371&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x366]=$x371;$x371=&$leThis->properties[$x366];$leThis->attributes[$x366]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U371=FALSE;$W371=TRUE;}if(isset($S371)){$x374=$S371->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x375=$x374($global,$leThis,$S371,array($x364),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x373=$x375;}else{if(!$U371){$x373=$x364;if($W371){$x371=$x364;}}else{$x373=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($x366)&&$x366>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$x366+1;}}unset($x376,$W376,$S376,$U376);$x377=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',116,13,\'<image>/04_array.js\');$x376=&$x377[0];list(,$W376,$S376,$U376)=$x377;return$x376;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_11($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x391 = 0;; ++$x391) {
if ($x391 === 0) {
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
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = 0;
unset($x392, $W392, $S392, $U392);
$x393 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 120, 26, '<image>/04_array.js');
$x392 =& $x393[0]; list(,$W392,$S392,$U392) = $x393;
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = (JS::toNumber($x392, $global) - JS::toNumber(1, $global));
}
if ($x391 !== 0) {
$x394 = ++$_l;
$x395 = --$_r;
}
$x396 = JS::toPrimitive($_l, $global);
$x397 = JS::toPrimitive($_r, $global);
$x398 = (is_string($x396) && is_string($x397) ? strcmp($x396, $x397) < 0 : (!is_nan($x399 = JS::toNumber($x396, $global)) && !is_nan($x400 = JS::toNumber($x397, $global)) && $x399 < $x400));
if (!JS::toBoolean($x398, $global)) { break; }

unset($x401, $W401, $S401, $U401);
$x402 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_l, 121, 17, '<image>/04_array.js');
$x401 =& $x402[0]; list(,$W401,$S401,$U401) = $x402;
$scope->properties['tmp'] = JS::$undefined; $_tmp =& $scope->properties['tmp'];
$Utmp = FALSE;
$_tmp = $x401;
unset($x403, $W403, $S403, $U403);
$x404 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_r, 122, 17, '<image>/04_array.js');
$x403 =& $x404[0]; list(,$W403,$S403,$U403) = $x404;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x405 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 122, 11, '<image>/04_array.js');
$_TypeError =& $x405[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x405;
$x406 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x407 = $x406($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x407->class) && $x407->class === 'Error' && !isset($x407->properties['file']) && !isset($x407->properties['line']) && !isset($x407->properties['column'])) {$x407->properties['file'] = '<image>/04_array.js';$x407->properties['line'] = 122;$x407->properties['column'] = 11;$x407->attributes['file'] = $x407->attributes['line'] = $x407->attributes['column'] = 0; }
throw new JSException($x407, 122, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x408, $W408, $S408, $U408);
$x409 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_l, 122, 11, '<image>/04_array.js');
$x408 =& $x409[0]; list(,$W408,$S408,$U408) = $x409;
if ($U408 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_l] = $x408; $x408 =& $leThis->properties[$_l]; $leThis->attributes[$_l] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U408 = FALSE; $W408 = TRUE; }
if (isset($S408)) {
$x411 = $S408->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x412 = $x411($global, $leThis, $S408, array($x403), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x410 = $x412;
} else {
if (!$U408) {$x410 = $x403;if ($W408) { $x408 = $x403; }  }
else { $x410 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_l) && $_l >= $leThis->properties['length']) { $leThis->properties['length'] = $_l + 1; };
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x413 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 123, 11, '<image>/04_array.js');
$_TypeError =& $x413[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x413;
$x414 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x415 = $x414($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x415->class) && $x415->class === 'Error' && !isset($x415->properties['file']) && !isset($x415->properties['line']) && !isset($x415->properties['column'])) {$x415->properties['file'] = '<image>/04_array.js';$x415->properties['line'] = 123;$x415->properties['column'] = 11;$x415->attributes['file'] = $x415->attributes['line'] = $x415->attributes['column'] = 0; }
throw new JSException($x415, 123, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x416, $W416, $S416, $U416);
$x417 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_r, 123, 11, '<image>/04_array.js');
$x416 =& $x417[0]; list(,$W416,$S416,$U416) = $x417;
if ($U416 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_r] = $x416; $x416 =& $leThis->properties[$_r]; $leThis->attributes[$_r] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U416 = FALSE; $W416 = TRUE; }
if (isset($S416)) {
$x419 = $S416->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x420 = $x419($global, $leThis, $S416, array($_tmp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x418 = $x420;
} else {
if (!$U416) {$x418 = $_tmp;if ($W416) { $x416 = $_tmp; }  }
else { $x418 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_r) && $_r >= $leThis->properties['length']) { $leThis->properties['length'] = $_r + 1; };;
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_11($global,$leThis,$fn,$args,$constructor=FALSE){for($x391=0;;++$x391){if($x391===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x390=&$scope->properties[\'arguments\'];$x390->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x390->properties[$i]=$args[$i];$x390->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=0;unset($x392,$W392,$S392,$U392);$x393=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',120,26,\'<image>/04_array.js\');$x392=&$x393[0];list(,$W392,$S392,$U392)=$x393;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=(JS::toNumber($x392,$global)-JS::toNumber(1,$global));}if($x391!==0){$x394=++$_l;$x395=--$_r;}$x396=JS::toPrimitive($_l,$global);$x397=JS::toPrimitive($_r,$global);$x398=(is_string($x396)&&is_string($x397)?strcmp($x396,$x397)<0:(!is_nan($x399=JS::toNumber($x396,$global))&&!is_nan($x400=JS::toNumber($x397,$global))&&$x399<$x400));if(!JS::toBoolean($x398,$global)){break;}unset($x401,$W401,$S401,$U401);$x402=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_l,121,17,\'<image>/04_array.js\');$x401=&$x402[0];list(,$W401,$S401,$U401)=$x402;$scope->properties[\'tmp\']=JS::$undefined;$_tmp=&$scope->properties[\'tmp\'];$Utmp=FALSE;$_tmp=$x401;unset($x403,$W403,$S403,$U403);$x404=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_r,122,17,\'<image>/04_array.js\');$x403=&$x404[0];list(,$W403,$S403,$U403)=$x404;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x405=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',122,11,\'<image>/04_array.js\');$_TypeError=&$x405[0];list(,$WTypeError,$STypeError,$UTypeError)=$x405;$x406=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x407=$x406($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x407->class)&&$x407->class===\'Error\'&&!isset($x407->properties[\'file\'])&&!isset($x407->properties[\'line\'])&&!isset($x407->properties[\'column\'])){$x407->properties[\'file\']=\'<image>/04_array.js\';$x407->properties[\'line\']=122;$x407->properties[\'column\']=11;$x407->attributes[\'file\']=$x407->attributes[\'line\']=$x407->attributes[\'column\']=0;}throw new JSException($x407,122,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x408,$W408,$S408,$U408);$x409=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_l,122,11,\'<image>/04_array.js\');$x408=&$x409[0];list(,$W408,$S408,$U408)=$x409;if($U408&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_l]=$x408;$x408=&$leThis->properties[$_l];$leThis->attributes[$_l]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U408=FALSE;$W408=TRUE;}if(isset($S408)){$x411=$S408->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x412=$x411($global,$leThis,$S408,array($x403),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x410=$x412;}else{if(!$U408){$x410=$x403;if($W408){$x408=$x403;}}else{$x410=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_l)&&$_l>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_l+1;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x413=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',123,11,\'<image>/04_array.js\');$_TypeError=&$x413[0];list(,$WTypeError,$STypeError,$UTypeError)=$x413;$x414=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x415=$x414($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x415->class)&&$x415->class===\'Error\'&&!isset($x415->properties[\'file\'])&&!isset($x415->properties[\'line\'])&&!isset($x415->properties[\'column\'])){$x415->properties[\'file\']=\'<image>/04_array.js\';$x415->properties[\'line\']=123;$x415->properties[\'column\']=11;$x415->attributes[\'file\']=$x415->attributes[\'line\']=$x415->attributes[\'column\']=0;}throw new JSException($x415,123,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x416,$W416,$S416,$U416);$x417=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_r,123,11,\'<image>/04_array.js\');$x416=&$x417[0];list(,$W416,$S416,$U416)=$x417;if($U416&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_r]=$x416;$x416=&$leThis->properties[$_r];$leThis->attributes[$_r]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U416=FALSE;$W416=TRUE;}if(isset($S416)){$x419=$S416->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x420=$x419($global,$leThis,$S416,array($_tmp),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x418=$x420;}else{if(!$U416){$x418=$_tmp;if($W416){$x416=$_tmp;}}else{$x418=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_r)&&$_r>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_r+1;}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x433 =& $scope->properties['arguments'];
$x433->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x433->properties[$i] = $args[$i];
$x433->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x437, $W437, $S437, $U437);
$x438 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 130, 10, '<image>/04_array.js');
$x437 =& $x438[0]; list(,$W437,$S437,$U437) = $x438;
$x434 = JS::toPrimitive($x437, $global);
$x435 = JS::toPrimitive(1, $global);
$x436 = (is_string($x434) && is_string($x435) ? strcmp($x434, $x435) < 0 : (!is_nan($x439 = JS::toNumber($x434, $global)) && !is_nan($x440 = JS::toNumber($x435, $global)) && $x439 < $x440));
if (JS::toBoolean($x436, $global)) {

return JS::$undefined;;
};
unset($x441, $W441, $S441, $U441);
$x442 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 0, 134, 17, '<image>/04_array.js');
$x441 =& $x442[0]; list(,$W441,$S441,$U441) = $x442;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x441;
unset($x443, $W443, $S443, $U443);
$x444 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 134, 30, '<image>/04_array.js');
$x443 =& $x444[0]; list(,$W443,$S443,$U443) = $x444;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x443;
for ($x445 = 0;; ++$x445) {
if ($x445 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
}
if ($x445 !== 0) {
$x446 = ++$_i;
}
$x447 = JS::toPrimitive($_i, $global);
$x448 = JS::toPrimitive($_l, $global);
$x449 = (is_string($x447) && is_string($x448) ? strcmp($x447, $x448) < 0 : (!is_nan($x450 = JS::toNumber($x447, $global)) && !is_nan($x451 = JS::toNumber($x448, $global)) && $x450 < $x451));
if (!JS::toBoolean($x449, $global)) { break; }

$x452 = JS::toPrimitive($_i, $global);
$x453 = JS::toPrimitive(1, $global);
unset($x454, $W454, $S454, $U454);
$x455 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) (is_string($x452) || is_string($x453) ? JS::toString($x452, $global) . JS::toString($x453, $global) : JS::toNumber($x452, $global) + JS::toNumber($x453, $global)), 137, 17, '<image>/04_array.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x456 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 137, 11, '<image>/04_array.js');
$_TypeError =& $x456[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x456;
$x457 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x458 = $x457($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x458->class) && $x458->class === 'Error' && !isset($x458->properties['file']) && !isset($x458->properties['line']) && !isset($x458->properties['column'])) {$x458->properties['file'] = '<image>/04_array.js';$x458->properties['line'] = 137;$x458->properties['column'] = 11;$x458->attributes['file'] = $x458->attributes['line'] = $x458->attributes['column'] = 0; }
throw new JSException($x458, 137, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x459, $W459, $S459, $U459);
$x460 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_i, 137, 11, '<image>/04_array.js');
$x459 =& $x460[0]; list(,$W459,$S459,$U459) = $x460;
if ($U459 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_i] = $x459; $x459 =& $leThis->properties[$_i]; $leThis->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U459 = FALSE; $W459 = TRUE; }
if (isset($S459)) {
$x462 = $S459->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x463 = $x462($global, $leThis, $S459, array($x454), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x461 = $x463;
} else {
if (!$U459) {$x461 = $x454;if ($W459) { $x459 = $x454; }  }
else { $x461 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
$x464 = (JS::toNumber($_l, $global) - JS::toNumber(1, $global));
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x465 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 140, 14, '<image>/04_array.js');
$_TypeError =& $x465[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x465;
$x466 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x467 = $x466($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x467->class) && $x467->class === 'Error' && !isset($x467->properties['file']) && !isset($x467->properties['line']) && !isset($x467->properties['column'])) {$x467->properties['file'] = '<image>/04_array.js';$x467->properties['line'] = 140;$x467->properties['column'] = 14;$x467->attributes['file'] = $x467->attributes['line'] = $x467->attributes['column'] = 0; }
throw new JSException($x467, 140, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x468, $W468, $S468, $U468);
$x469 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) 'length', 140, 14, '<image>/04_array.js');
$x468 =& $x469[0]; list(,$W468,$S468,$U468) = $x469;
if ($U468 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['length'] = $x468; $x468 =& $leThis->properties['length']; $leThis->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U468 = FALSE; $W468 = TRUE; }
if (isset($S468)) {
$x471 = $S468->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x472 = $x471($global, $leThis, $S468, array($x464), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x470 = $x472;
} else {
if (!$U468) {$x470 = $x464;if ($W468) { $x468 = $x464; }  }
else { $x470 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x433=&$scope->properties[\'arguments\'];$x433->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x433->properties[$i]=$args[$i];$x433->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x437,$W437,$S437,$U437);$x438=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',130,10,\'<image>/04_array.js\');$x437=&$x438[0];list(,$W437,$S437,$U437)=$x438;$x434=JS::toPrimitive($x437,$global);$x435=JS::toPrimitive(1,$global);$x436=(is_string($x434)&&is_string($x435)?strcmp($x434,$x435)<0:(!is_nan($x439=JS::toNumber($x434,$global))&&!is_nan($x440=JS::toNumber($x435,$global))&&$x439<$x440));if(JS::toBoolean($x436,$global)){return JS::$undefined;}unset($x441,$W441,$S441,$U441);$x442=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)0,134,17,\'<image>/04_array.js\');$x441=&$x442[0];list(,$W441,$S441,$U441)=$x442;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x441;unset($x443,$W443,$S443,$U443);$x444=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',134,30,\'<image>/04_array.js\');$x443=&$x444[0];list(,$W443,$S443,$U443)=$x444;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x443;for($x445=0;;++$x445){if($x445===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x445!==0){$x446=++$_i;}$x447=JS::toPrimitive($_i,$global);$x448=JS::toPrimitive($_l,$global);$x449=(is_string($x447)&&is_string($x448)?strcmp($x447,$x448)<0:(!is_nan($x450=JS::toNumber($x447,$global))&&!is_nan($x451=JS::toNumber($x448,$global))&&$x450<$x451));if(!JS::toBoolean($x449,$global)){break;}$x452=JS::toPrimitive($_i,$global);$x453=JS::toPrimitive(1,$global);unset($x454,$W454,$S454,$U454);$x455=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)(is_string($x452)||is_string($x453)?JS::toString($x452,$global).JS::toString($x453,$global):JS::toNumber($x452,$global)+JS::toNumber($x453,$global)),137,17,\'<image>/04_array.js\');$x454=&$x455[0];list(,$W454,$S454,$U454)=$x455;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x456=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',137,11,\'<image>/04_array.js\');$_TypeError=&$x456[0];list(,$WTypeError,$STypeError,$UTypeError)=$x456;$x457=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x458=$x457($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x458->class)&&$x458->class===\'Error\'&&!isset($x458->properties[\'file\'])&&!isset($x458->properties[\'line\'])&&!isset($x458->properties[\'column\'])){$x458->properties[\'file\']=\'<image>/04_array.js\';$x458->properties[\'line\']=137;$x458->properties[\'column\']=11;$x458->attributes[\'file\']=$x458->attributes[\'line\']=$x458->attributes[\'column\']=0;}throw new JSException($x458,137,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x459,$W459,$S459,$U459);$x460=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_i,137,11,\'<image>/04_array.js\');$x459=&$x460[0];list(,$W459,$S459,$U459)=$x460;if($U459&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_i]=$x459;$x459=&$leThis->properties[$_i];$leThis->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U459=FALSE;$W459=TRUE;}if(isset($S459)){$x462=$S459->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x463=$x462($global,$leThis,$S459,array($x454),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x461=$x463;}else{if(!$U459){$x461=$x454;if($W459){$x459=$x454;}}else{$x461=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}$x464=(JS::toNumber($_l,$global)-JS::toNumber(1,$global));if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x465=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',140,14,\'<image>/04_array.js\');$_TypeError=&$x465[0];list(,$WTypeError,$STypeError,$UTypeError)=$x465;$x466=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x467=$x466($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x467->class)&&$x467->class===\'Error\'&&!isset($x467->properties[\'file\'])&&!isset($x467->properties[\'line\'])&&!isset($x467->properties[\'column\'])){$x467->properties[\'file\']=\'<image>/04_array.js\';$x467->properties[\'line\']=140;$x467->properties[\'column\']=14;$x467->attributes[\'file\']=$x467->attributes[\'line\']=$x467->attributes[\'column\']=0;}throw new JSException($x467,140,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x468,$W468,$S468,$U468);$x469=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)\'length\',140,14,\'<image>/04_array.js\');$x468=&$x469[0];list(,$W468,$S468,$U468)=$x469;if($U468&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'length\']=$x468;$x468=&$leThis->properties[\'length\'];$leThis->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U468=FALSE;$W468=TRUE;}if(isset($S468)){$x471=$S468->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x472=$x471($global,$leThis,$S468,array($x464),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x470=$x472;}else{if(!$U468){$x470=$x464;if($W468){$x468=$x464;}}else{$x470=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x485 =& $scope->properties['arguments'];
$x485->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x485->properties[$i] = $args[$i];
$x485->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x486 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x486, $global)) {
$x487 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x487;;
};
$x488 = JS::toPrimitive($_start, $global);
$x489 = JS::toPrimitive(0, $global);
$x490 = (is_string($x488) && is_string($x489) ? strcmp($x488, $x489) < 0 : (!is_nan($x491 = JS::toNumber($x488, $global)) && !is_nan($x492 = JS::toNumber($x489, $global)) && $x491 < $x492));
if (JS::toBoolean($x490, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x493 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Math', 151, 11, '<image>/04_array.js');
$_Math =& $x493[0]; list(,$WMath,$SMath,$UMath) = $x493;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x494 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 151, 11, '<image>/04_array.js');
$_ReferenceError =& $x494[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x494;
$x495 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 11);
$x496 = $x495($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x496->class) && $x496->class === 'Error' && !isset($x496->properties['file']) && !isset($x496->properties['line']) && !isset($x496->properties['column'])) {$x496->properties['file'] = '<image>/04_array.js';$x496->properties['line'] = 151;$x496->properties['column'] = 11;$x496->attributes['file'] = $x496->attributes['line'] = $x496->attributes['column'] = 0; }
throw new JSException($x496, 151, 11, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x498 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 151, 19, '<image>/04_array.js');
$_TypeError =& $x498[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x498;
$x499 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x500 = $x499($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x500->class) && $x500->class === 'Error' && !isset($x500->properties['file']) && !isset($x500->properties['line']) && !isset($x500->properties['column'])) {$x500->properties['file'] = '<image>/04_array.js';$x500->properties['line'] = 151;$x500->properties['column'] = 19;$x500->attributes['file'] = $x500->attributes['line'] = $x500->attributes['column'] = 0; }
throw new JSException($x500, 151, 19, '<image>/04_array.js');
}
$x497 = JS::toObject($_Math, $global);
unset($x501, $W501, $S501, $U501);
$x502 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x497, (string) 'max', 151, 19, '<image>/04_array.js');
$x501 =& $x502[0]; list(,$W501,$S501,$U501) = $x502;
unset($x505, $W505, $S505, $U505);
$x506 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 151, 24, '<image>/04_array.js');
$x505 =& $x506[0]; list(,$W505,$S505,$U505) = $x506;
$x503 = JS::toPrimitive($x505, $global);
$x504 = JS::toPrimitive($_start, $global);
if (!(is_object($x501) && isset($x501->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x509 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 151, 19, '<image>/04_array.js');
$_TypeError =& $x509[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x509;
$x510 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x511 = $x510($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x511->class) && $x511->class === 'Error' && !isset($x511->properties['file']) && !isset($x511->properties['line']) && !isset($x511->properties['column'])) {$x511->properties['file'] = '<image>/04_array.js';$x511->properties['line'] = 151;$x511->properties['column'] = 19;$x511->attributes['file'] = $x511->attributes['line'] = $x511->attributes['column'] = 0; }
throw new JSException($x511, 151, 19, '<image>/04_array.js');
}
$x507 = $x501->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x508 = $x507($global, $x497, $x501, array((is_string($x503) || is_string($x504) ? JS::toString($x503, $global) . JS::toString($x504, $global) : JS::toNumber($x503, $global) + JS::toNumber($x504, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x508;;
};
$x512 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x512, $global)) {
unset($x513, $W513, $S513, $U513);
$x514 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 155, 13, '<image>/04_array.js');
$x513 =& $x514[0]; list(,$W513,$S513,$U513) = $x514;
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x513;;
};
$x515 = JS::toPrimitive($_end, $global);
$x516 = JS::toPrimitive(0, $global);
$x517 = (is_string($x515) && is_string($x516) ? strcmp($x515, $x516) < 0 : (!is_nan($x518 = JS::toNumber($x515, $global)) && !is_nan($x519 = JS::toNumber($x516, $global)) && $x518 < $x519));
if (JS::toBoolean($x517, $global)) {
unset($x522, $W522, $S522, $U522);
$x523 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 159, 13, '<image>/04_array.js');
$x522 =& $x523[0]; list(,$W522,$S522,$U522) = $x523;
$x520 = JS::toPrimitive($x522, $global);
$x521 = JS::toPrimitive($_end, $global);
$x524 = (is_string($x520) || is_string($x521) ? JS::toString($x520, $global) . JS::toString($x521, $global) : JS::toNumber($x520, $global) + JS::toNumber($x521, $global));
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x524;;
};
$x525 = clone JS::$arrayTemplate;
$x525->properties['length'] = 0;
$x525->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x525;
for ($x526 = 0;; ++$x526) {
if ($x526 !== 0) {
$x527 = ++$_start;
}
$x528 = JS::toPrimitive($_start, $global);
$x529 = JS::toPrimitive($_end, $global);
$x530 = (is_string($x528) && is_string($x529) ? strcmp($x528, $x529) < 0 : (!is_nan($x531 = JS::toNumber($x528, $global)) && !is_nan($x532 = JS::toNumber($x529, $global)) && $x531 < $x532));
if (!JS::toBoolean($x530, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x534 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 165, 16, '<image>/04_array.js');
$_TypeError =& $x534[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x534;
$x535 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x536 = $x535($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x536->class) && $x536->class === 'Error' && !isset($x536->properties['file']) && !isset($x536->properties['line']) && !isset($x536->properties['column'])) {$x536->properties['file'] = '<image>/04_array.js';$x536->properties['line'] = 165;$x536->properties['column'] = 16;$x536->attributes['file'] = $x536->attributes['line'] = $x536->attributes['column'] = 0; }
throw new JSException($x536, 165, 16, '<image>/04_array.js');
}
$x533 = JS::toObject($_newArray, $global);
unset($x537, $W537, $S537, $U537);
$x538 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x533, (string) 'push', 165, 16, '<image>/04_array.js');
$x537 =& $x538[0]; list(,$W537,$S537,$U537) = $x538;
unset($x539, $W539, $S539, $U539);
$x540 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_start, 165, 21, '<image>/04_array.js');
$x539 =& $x540[0]; list(,$W539,$S539,$U539) = $x540;
if (!(is_object($x537) && isset($x537->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x543 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 165, 16, '<image>/04_array.js');
$_TypeError =& $x543[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x543;
$x544 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x545 = $x544($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x545->class) && $x545->class === 'Error' && !isset($x545->properties['file']) && !isset($x545->properties['line']) && !isset($x545->properties['column'])) {$x545->properties['file'] = '<image>/04_array.js';$x545->properties['line'] = 165;$x545->properties['column'] = 16;$x545->attributes['file'] = $x545->attributes['line'] = $x545->attributes['column'] = 0; }
throw new JSException($x545, 165, 16, '<image>/04_array.js');
}
$x541 = $x537->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x542 = $x541($global, $x533, $x537, array($x539), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x485=&$scope->properties[\'arguments\'];$x485->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x485->properties[$i]=$args[$i];$x485->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$x486=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x486,$global)){$x487=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x487;}$x488=JS::toPrimitive($_start,$global);$x489=JS::toPrimitive(0,$global);$x490=(is_string($x488)&&is_string($x489)?strcmp($x488,$x489)<0:(!is_nan($x491=JS::toNumber($x488,$global))&&!is_nan($x492=JS::toNumber($x489,$global))&&$x491<$x492));if(JS::toBoolean($x490,$global)){unset($_Math,$WMath,$SMath,$UMath);$x493=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Math\',151,11,\'<image>/04_array.js\');$_Math=&$x493[0];list(,$WMath,$SMath,$UMath)=$x493;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x494=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',151,11,\'<image>/04_array.js\');$_ReferenceError=&$x494[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x494;$x495=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,11);$x496=$x495($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x496->class)&&$x496->class===\'Error\'&&!isset($x496->properties[\'file\'])&&!isset($x496->properties[\'line\'])&&!isset($x496->properties[\'column\'])){$x496->properties[\'file\']=\'<image>/04_array.js\';$x496->properties[\'line\']=151;$x496->properties[\'column\']=11;$x496->attributes[\'file\']=$x496->attributes[\'line\']=$x496->attributes[\'column\']=0;}throw new JSException($x496,151,11,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x498=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',151,19,\'<image>/04_array.js\');$_TypeError=&$x498[0];list(,$WTypeError,$STypeError,$UTypeError)=$x498;$x499=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x500=$x499($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x500->class)&&$x500->class===\'Error\'&&!isset($x500->properties[\'file\'])&&!isset($x500->properties[\'line\'])&&!isset($x500->properties[\'column\'])){$x500->properties[\'file\']=\'<image>/04_array.js\';$x500->properties[\'line\']=151;$x500->properties[\'column\']=19;$x500->attributes[\'file\']=$x500->attributes[\'line\']=$x500->attributes[\'column\']=0;}throw new JSException($x500,151,19,\'<image>/04_array.js\');}$x497=JS::toObject($_Math,$global);unset($x501,$W501,$S501,$U501);$x502=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x497,(string)\'max\',151,19,\'<image>/04_array.js\');$x501=&$x502[0];list(,$W501,$S501,$U501)=$x502;unset($x505,$W505,$S505,$U505);$x506=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',151,24,\'<image>/04_array.js\');$x505=&$x506[0];list(,$W505,$S505,$U505)=$x506;$x503=JS::toPrimitive($x505,$global);$x504=JS::toPrimitive($_start,$global);if(!(is_object($x501)&&isset($x501->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x509=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',151,19,\'<image>/04_array.js\');$_TypeError=&$x509[0];list(,$WTypeError,$STypeError,$UTypeError)=$x509;$x510=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x511=$x510($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x511->class)&&$x511->class===\'Error\'&&!isset($x511->properties[\'file\'])&&!isset($x511->properties[\'line\'])&&!isset($x511->properties[\'column\'])){$x511->properties[\'file\']=\'<image>/04_array.js\';$x511->properties[\'line\']=151;$x511->properties[\'column\']=19;$x511->attributes[\'file\']=$x511->attributes[\'line\']=$x511->attributes[\'column\']=0;}throw new JSException($x511,151,19,\'<image>/04_array.js\');}$x507=$x501->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x508=$x507($global,$x497,$x501,array((is_string($x503)||is_string($x504)?JS::toString($x503,$global).JS::toString($x504,$global):JS::toNumber($x503,$global)+JS::toNumber($x504,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x508;}$x512=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x512,$global)){unset($x513,$W513,$S513,$U513);$x514=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',155,13,\'<image>/04_array.js\');$x513=&$x514[0];list(,$W513,$S513,$U513)=$x514;if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x513;}$x515=JS::toPrimitive($_end,$global);$x516=JS::toPrimitive(0,$global);$x517=(is_string($x515)&&is_string($x516)?strcmp($x515,$x516)<0:(!is_nan($x518=JS::toNumber($x515,$global))&&!is_nan($x519=JS::toNumber($x516,$global))&&$x518<$x519));if(JS::toBoolean($x517,$global)){unset($x522,$W522,$S522,$U522);$x523=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',159,13,\'<image>/04_array.js\');$x522=&$x523[0];list(,$W522,$S522,$U522)=$x523;$x520=JS::toPrimitive($x522,$global);$x521=JS::toPrimitive($_end,$global);$x524=(is_string($x520)||is_string($x521)?JS::toString($x520,$global).JS::toString($x521,$global):JS::toNumber($x520,$global)+JS::toNumber($x521,$global));if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x524;}$x525=clone JS::$arrayTemplate;$x525->properties[\'length\']=0;$x525->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x525;for($x526=0;;++$x526){if($x526!==0){$x527=++$_start;}$x528=JS::toPrimitive($_start,$global);$x529=JS::toPrimitive($_end,$global);$x530=(is_string($x528)&&is_string($x529)?strcmp($x528,$x529)<0:(!is_nan($x531=JS::toNumber($x528,$global))&&!is_nan($x532=JS::toNumber($x529,$global))&&$x531<$x532));if(!JS::toBoolean($x530,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x534=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',165,16,\'<image>/04_array.js\');$_TypeError=&$x534[0];list(,$WTypeError,$STypeError,$UTypeError)=$x534;$x535=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x536=$x535($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x536->class)&&$x536->class===\'Error\'&&!isset($x536->properties[\'file\'])&&!isset($x536->properties[\'line\'])&&!isset($x536->properties[\'column\'])){$x536->properties[\'file\']=\'<image>/04_array.js\';$x536->properties[\'line\']=165;$x536->properties[\'column\']=16;$x536->attributes[\'file\']=$x536->attributes[\'line\']=$x536->attributes[\'column\']=0;}throw new JSException($x536,165,16,\'<image>/04_array.js\');}$x533=JS::toObject($_newArray,$global);unset($x537,$W537,$S537,$U537);$x538=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x533,(string)\'push\',165,16,\'<image>/04_array.js\');$x537=&$x538[0];list(,$W537,$S537,$U537)=$x538;unset($x539,$W539,$S539,$U539);$x540=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_start,165,21,\'<image>/04_array.js\');$x539=&$x540[0];list(,$W539,$S539,$U539)=$x540;if(!(is_object($x537)&&isset($x537->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x543=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',165,16,\'<image>/04_array.js\');$_TypeError=&$x543[0];list(,$WTypeError,$STypeError,$UTypeError)=$x543;$x544=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x545=$x544($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x545->class)&&$x545->class===\'Error\'&&!isset($x545->properties[\'file\'])&&!isset($x545->properties[\'line\'])&&!isset($x545->properties[\'column\'])){$x545->properties[\'file\']=\'<image>/04_array.js\';$x545->properties[\'line\']=165;$x545->properties[\'column\']=16;$x545->attributes[\'file\']=$x545->attributes[\'line\']=$x545->attributes[\'column\']=0;}throw new JSException($x545,165,16,\'<image>/04_array.js\');}$x541=$x537->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x542=$x541($global,$x533,$x537,array($x539),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x561 =& $scope->properties['arguments'];
$x561->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x561->properties[$i] = $args[$i];
$x561->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['a'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_a =& $scope->properties['a'];
$Ua = FALSE;
$scope->properties['b'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_b =& $scope->properties['b'];
$Ub = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x564 = $_a;
$x564 = ($x564 === JS::$undefined ? 'undefined' : (is_int($x564) || is_float($x564) ? 'number' : (is_bool($x564) ? 'boolean' : (is_string($x564) ? 'string' : (is_object($x564) && isset($x564->call) ? 'function' : 'object')))));
$x563 = (((gettype($x564) === gettype('string') && $x564 === 'string'))|| (((is_float($x564) || is_int($x564)) && (is_float('string') || is_int('string'))) && $x564 == 'string'));
$x562 = $x563;
if (!JS::toBoolean($x562, $global)) {
$x566 = $_b;
$x566 = ($x566 === JS::$undefined ? 'undefined' : (is_int($x566) || is_float($x566) ? 'number' : (is_bool($x566) ? 'boolean' : (is_string($x566) ? 'string' : (is_object($x566) && isset($x566->call) ? 'function' : 'object')))));
$x565 = (((gettype($x566) === gettype('string') && $x566 === 'string'))|| (((is_float($x566) || is_int($x566)) && (is_float('string') || is_int('string'))) && $x566 == 'string'));
$x562 = $x565; }
if (JS::toBoolean($x562, $global)) {
$x567 = JS::toString($_a, $global);
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = $x567;
$x568 = JS::toString($_b, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = $x568;
$x569 = JS::toPrimitive($_a, $global);
$x570 = JS::toPrimitive($_b, $global);
$x571 = (is_string($x569) && is_string($x570) ? strcmp($x569, $x570) < 0 : (!is_nan($x572 = JS::toNumber($x569, $global)) && !is_nan($x573 = JS::toNumber($x570, $global)) && $x572 < $x573));
if (JS::toBoolean($x571, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
}
else {
$x574 = JS::toPrimitive($_a, $global);
$x575 = JS::toPrimitive($_b, $global);
$x576 = (is_string($x575) && is_string($x574) ? strcmp($x575, $x574) < 0 : (!is_nan($x577 = JS::toNumber($x575, $global)) && !is_nan($x578 = JS::toNumber($x574, $global)) && $x577 < $x578));
if (JS::toBoolean($x576, $global)) {

return 1;;
}
else {

return 0;;
};
};;
}
else {
$x581 = $_a;
$x581 = ($x581 === JS::$undefined ? 'undefined' : (is_int($x581) || is_float($x581) ? 'number' : (is_bool($x581) ? 'boolean' : (is_string($x581) ? 'string' : (is_object($x581) && isset($x581->call) ? 'function' : 'object')))));
$x580 = (((gettype($x581) === gettype('number') && $x581 === 'number'))|| (((is_float($x581) || is_int($x581)) && (is_float('number') || is_int('number'))) && $x581 == 'number'));
$x579 = $x580;
if (!JS::toBoolean($x579, $global)) {
$x583 = $_b;
$x583 = ($x583 === JS::$undefined ? 'undefined' : (is_int($x583) || is_float($x583) ? 'number' : (is_bool($x583) ? 'boolean' : (is_string($x583) ? 'string' : (is_object($x583) && isset($x583->call) ? 'function' : 'object')))));
$x582 = (((gettype($x583) === gettype('number') && $x583 === 'number'))|| (((is_float($x583) || is_int($x583)) && (is_float('number') || is_int('number'))) && $x583 == 'number'));
$x579 = $x582; }
if (JS::toBoolean($x579, $global)) {
$x584 = JS::toNumber($_a, $global);
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = $x584;
$x585 = JS::toNumber($_b, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = $x585;
return (JS::toNumber($_a, $global) - JS::toNumber($_b, $global));;
};
};
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x588 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 192, 13, '<image>/04_array.js');
$_TypeError =& $x588[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x588;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x589 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 192, 13, '<image>/04_array.js');
$_ReferenceError =& $x589[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x589;
$x590 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 13);
$x591 = $x590($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x591->class) && $x591->class === 'Error' && !isset($x591->properties['file']) && !isset($x591->properties['line']) && !isset($x591->properties['column'])) {$x591->properties['file'] = '<image>/04_array.js';$x591->properties['line'] = 192;$x591->properties['column'] = 13;$x591->attributes['file'] = $x591->attributes['line'] = $x591->attributes['column'] = 0; }
throw new JSException($x591, 192, 13, '<image>/04_array.js');
}
$x586 = clone JS::$objectTemplate;
unset($x592, $W592, $S592, $U592);
$x593 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, (string) 'prototype', 192, 9, '<image>/04_array.js');
$x592 =& $x593[0]; list(,$W592,$S592,$U592) = $x593;
$x587 = $x592;
$x586->prototype = $x587;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x596 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x597 = $x596($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x597->class) && $x597->class === 'Error' && !isset($x597->properties['file']) && !isset($x597->properties['line']) && !isset($x597->properties['column'])) {$x597->properties['file'] = '<image>/04_array.js';$x597->properties['line'] = 192;$x597->properties['column'] = 9;$x597->attributes['file'] = $x597->attributes['line'] = $x597->attributes['column'] = 0; }
throw new JSException($x597, 192, 9, '<image>/04_array.js');
}
$x594 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x595 = $x594($global, $x586, $_TypeError, array('Unsortable values in array.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x587 = $x595;
if (is_object($x587) && $x587 !== JS::$undefined) { $x586 = $x587; }
if (isset($x586->class) && $x586->class === 'Error' && !isset($x586->properties['file']) && !isset($x586->properties['line']) && !isset($x586->properties['column'])) {$x586->properties['file'] = '<image>/04_array.js';$x586->properties['line'] = 192;$x586->properties['column'] = 3;$x586->attributes['file'] = $x586->attributes['line'] = $x586->attributes['column'] = 0; }
throw new JSException($x586, 192, 3, '<image>/04_array.js');
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x561=&$scope->properties[\'arguments\'];$x561->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x561->properties[$i]=$args[$i];$x561->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'a\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_a=&$scope->properties[\'a\'];$Ua=FALSE;$scope->properties[\'b\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$global->scope[++$global->scope_sp]=$scope;$x564=$_a;$x564=($x564===JS::$undefined?\'undefined\':(is_int($x564)||is_float($x564)?\'number\':(is_bool($x564)?\'boolean\':(is_string($x564)?\'string\':(is_object($x564)&&isset($x564->call)?\'function\':\'object\')))));$x563=(((gettype($x564)===gettype(\'string\')&&$x564===\'string\'))||(((is_float($x564)||is_int($x564))&&(is_float(\'string\')||is_int(\'string\')))&&$x564==\'string\'));$x562=$x563;if(!JS::toBoolean($x562,$global)){$x566=$_b;$x566=($x566===JS::$undefined?\'undefined\':(is_int($x566)||is_float($x566)?\'number\':(is_bool($x566)?\'boolean\':(is_string($x566)?\'string\':(is_object($x566)&&isset($x566->call)?\'function\':\'object\')))));$x565=(((gettype($x566)===gettype(\'string\')&&$x566===\'string\'))||(((is_float($x566)||is_int($x566))&&(is_float(\'string\')||is_int(\'string\')))&&$x566==\'string\'));$x562=$x565;}if(JS::toBoolean($x562,$global)){$x567=JS::toString($_a,$global);if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=$x567;$x568=JS::toString($_b,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=$x568;$x569=JS::toPrimitive($_a,$global);$x570=JS::toPrimitive($_b,$global);$x571=(is_string($x569)&&is_string($x570)?strcmp($x569,$x570)<0:(!is_nan($x572=JS::toNumber($x569,$global))&&!is_nan($x573=JS::toNumber($x570,$global))&&$x572<$x573));if(JS::toBoolean($x571,$global)){return(-1.0*JS::toNumber(1,$global));}else{$x574=JS::toPrimitive($_a,$global);$x575=JS::toPrimitive($_b,$global);$x576=(is_string($x575)&&is_string($x574)?strcmp($x575,$x574)<0:(!is_nan($x577=JS::toNumber($x575,$global))&&!is_nan($x578=JS::toNumber($x574,$global))&&$x577<$x578));if(JS::toBoolean($x576,$global)){return 1;}else{return 0;}}}else{$x581=$_a;$x581=($x581===JS::$undefined?\'undefined\':(is_int($x581)||is_float($x581)?\'number\':(is_bool($x581)?\'boolean\':(is_string($x581)?\'string\':(is_object($x581)&&isset($x581->call)?\'function\':\'object\')))));$x580=(((gettype($x581)===gettype(\'number\')&&$x581===\'number\'))||(((is_float($x581)||is_int($x581))&&(is_float(\'number\')||is_int(\'number\')))&&$x581==\'number\'));$x579=$x580;if(!JS::toBoolean($x579,$global)){$x583=$_b;$x583=($x583===JS::$undefined?\'undefined\':(is_int($x583)||is_float($x583)?\'number\':(is_bool($x583)?\'boolean\':(is_string($x583)?\'string\':(is_object($x583)&&isset($x583->call)?\'function\':\'object\')))));$x582=(((gettype($x583)===gettype(\'number\')&&$x583===\'number\'))||(((is_float($x583)||is_int($x583))&&(is_float(\'number\')||is_int(\'number\')))&&$x583==\'number\'));$x579=$x582;}if(JS::toBoolean($x579,$global)){$x584=JS::toNumber($_a,$global);if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=$x584;$x585=JS::toNumber($_b,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=$x585;return(JS::toNumber($_a,$global)-JS::toNumber($_b,$global));}}unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x588=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',192,13,\'<image>/04_array.js\');$_TypeError=&$x588[0];list(,$WTypeError,$STypeError,$UTypeError)=$x588;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x589=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',192,13,\'<image>/04_array.js\');$_ReferenceError=&$x589[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x589;$x590=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,13);$x591=$x590($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x591->class)&&$x591->class===\'Error\'&&!isset($x591->properties[\'file\'])&&!isset($x591->properties[\'line\'])&&!isset($x591->properties[\'column\'])){$x591->properties[\'file\']=\'<image>/04_array.js\';$x591->properties[\'line\']=192;$x591->properties[\'column\']=13;$x591->attributes[\'file\']=$x591->attributes[\'line\']=$x591->attributes[\'column\']=0;}throw new JSException($x591,192,13,\'<image>/04_array.js\');}$x586=clone JS::$objectTemplate;unset($x592,$W592,$S592,$U592);$x593=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,(string)\'prototype\',192,9,\'<image>/04_array.js\');$x592=&$x593[0];list(,$W592,$S592,$U592)=$x593;$x587=$x592;$x586->prototype=$x587;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x596=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x597=$x596($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x597->class)&&$x597->class===\'Error\'&&!isset($x597->properties[\'file\'])&&!isset($x597->properties[\'line\'])&&!isset($x597->properties[\'column\'])){$x597->properties[\'file\']=\'<image>/04_array.js\';$x597->properties[\'line\']=192;$x597->properties[\'column\']=9;$x597->attributes[\'file\']=$x597->attributes[\'line\']=$x597->attributes[\'column\']=0;}throw new JSException($x597,192,9,\'<image>/04_array.js\');}$x594=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x595=$x594($global,$x586,$_TypeError,array(\'Unsortable values in array.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x587=$x595;if(is_object($x587)&&$x587!==JS::$undefined){$x586=$x587;}if(isset($x586->class)&&$x586->class===\'Error\'&&!isset($x586->properties[\'file\'])&&!isset($x586->properties[\'line\'])&&!isset($x586->properties[\'column\'])){$x586->properties[\'file\']=\'<image>/04_array.js\';$x586->properties[\'line\']=192;$x586->properties[\'column\']=3;$x586->attributes[\'file\']=$x586->attributes[\'line\']=$x586->attributes[\'column\']=0;}throw new JSException($x586,192,3,\'<image>/04_array.js\');return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x558 =& $scope->properties['arguments'];
$x558->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x558->properties[$i] = $args[$i];
$x558->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['compareFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_compareFn =& $scope->properties['compareFn'];
$UcompareFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x559 = $_compareFn;
if (!JS::toBoolean($x559, $global)) {
$x598 = clone JS::$functionTemplate; $x598->call = '_339fc8fcf8563d9777a12bd15b91ae1b_15'; $x598->parameters = array (
  0 => 'a',
  1 => 'b',
); $x598->scope = $scope; $x598->properties['prototype'] = clone JS::$objectTemplate; $x598->attributes['prototype'] = JS::WRITABLE; $x598->properties['prototype']->properties['constructor'] = $x598; $x598->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x598->properties['length'] = 2; $x598->attributes['length'] = 0;
$x559 = $x598; }
if ($UcompareFn) {$global->properties['compareFn'] = $_compareFn; $_compareFn =& $global->properties['compareFn']; }
$_compareFn = $x559;
unset($x602, $W602, $S602, $U602);
$x603 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 195, 10, '<image>/04_array.js');
$x602 =& $x603[0]; list(,$W602,$S602,$U602) = $x603;
$x599 = JS::toPrimitive($x602, $global);
$x600 = JS::toPrimitive(2, $global);
$x601 = (is_string($x599) && is_string($x600) ? strcmp($x599, $x600) < 0 : (!is_nan($x604 = JS::toNumber($x599, $global)) && !is_nan($x605 = JS::toNumber($x600, $global)) && $x604 < $x605));
if (JS::toBoolean($x601, $global)) {

return $leThis;;
};
$scope->properties['pivot'] = JS::$undefined; $_pivot =& $scope->properties['pivot'];
$Upivot = FALSE;
$_pivot = JS::$undefined;
$x606 = clone JS::$arrayTemplate;
$x606->properties['length'] = 0;
$x606->attributes['length'] = JS::WRITABLE;
$scope->properties['smaller'] = JS::$undefined; $_smaller =& $scope->properties['smaller'];
$Usmaller = FALSE;
$_smaller = $x606;
$x607 = clone JS::$arrayTemplate;
$x607->properties['length'] = 0;
$x607->attributes['length'] = JS::WRITABLE;
$scope->properties['larger'] = JS::$undefined; $_larger =& $scope->properties['larger'];
$Ularger = FALSE;
$_larger = $x607;
unset($x608, $W608, $S608, $U608);
$x609 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 0, 201, 14, '<image>/04_array.js');
$x608 =& $x609[0]; list(,$W608,$S608,$U608) = $x609;
if ($Upivot) {$global->properties['pivot'] = $_pivot; $_pivot =& $global->properties['pivot']; }
$_pivot = $x608;
for ($x610 = 0;; ++$x610) {
if ($x610 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x611, $W611, $S611, $U611);
$x612 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 203, 26, '<image>/04_array.js');
$x611 =& $x612[0]; list(,$W611,$S611,$U611) = $x612;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x611;
}
if ($x610 !== 0) {
$x613 = ++$_i;
}
$x614 = JS::toPrimitive($_i, $global);
$x615 = JS::toPrimitive($_l, $global);
$x616 = (is_string($x614) && is_string($x615) ? strcmp($x614, $x615) < 0 : (!is_nan($x617 = JS::toNumber($x614, $global)) && !is_nan($x618 = JS::toNumber($x615, $global)) && $x617 < $x618));
if (!JS::toBoolean($x616, $global)) { break; }

unset($x622, $W622, $S622, $U622);
$x623 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 204, 21, '<image>/04_array.js');
$x622 =& $x623[0]; list(,$W622,$S622,$U622) = $x623;
if (!(is_object($_compareFn) && isset($_compareFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x626 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 204, 16, '<image>/04_array.js');
$_TypeError =& $x626[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x626;
$x627 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x628 = $x627($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x628->class) && $x628->class === 'Error' && !isset($x628->properties['file']) && !isset($x628->properties['line']) && !isset($x628->properties['column'])) {$x628->properties['file'] = '<image>/04_array.js';$x628->properties['line'] = 204;$x628->properties['column'] = 16;$x628->attributes['file'] = $x628->attributes['line'] = $x628->attributes['column'] = 0; }
throw new JSException($x628, 204, 16, '<image>/04_array.js');
}
$x624 = $_compareFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x625 = $x624($global, $global, $_compareFn, array($x622, $_pivot), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x619 = JS::toPrimitive($x625, $global);
$x620 = JS::toPrimitive(0, $global);
$x621 = (is_string($x619) && is_string($x620) ? strcmp($x619, $x620) < 0 : (!is_nan($x629 = JS::toNumber($x619, $global)) && !is_nan($x630 = JS::toNumber($x620, $global)) && $x629 < $x630));
if (JS::toBoolean($x621, $global)) {
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x632 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 205, 16, '<image>/04_array.js');
$_TypeError =& $x632[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x632;
$x633 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x634 = $x633($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x634->class) && $x634->class === 'Error' && !isset($x634->properties['file']) && !isset($x634->properties['line']) && !isset($x634->properties['column'])) {$x634->properties['file'] = '<image>/04_array.js';$x634->properties['line'] = 205;$x634->properties['column'] = 16;$x634->attributes['file'] = $x634->attributes['line'] = $x634->attributes['column'] = 0; }
throw new JSException($x634, 205, 16, '<image>/04_array.js');
}
$x631 = JS::toObject($_smaller, $global);
unset($x635, $W635, $S635, $U635);
$x636 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x631, (string) 'push', 205, 16, '<image>/04_array.js');
$x635 =& $x636[0]; list(,$W635,$S635,$U635) = $x636;
unset($x637, $W637, $S637, $U637);
$x638 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 205, 21, '<image>/04_array.js');
$x637 =& $x638[0]; list(,$W637,$S637,$U637) = $x638;
if (!(is_object($x635) && isset($x635->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x641 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 205, 16, '<image>/04_array.js');
$_TypeError =& $x641[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x641;
$x642 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x643 = $x642($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x643->class) && $x643->class === 'Error' && !isset($x643->properties['file']) && !isset($x643->properties['line']) && !isset($x643->properties['column'])) {$x643->properties['file'] = '<image>/04_array.js';$x643->properties['line'] = 205;$x643->properties['column'] = 16;$x643->attributes['file'] = $x643->attributes['line'] = $x643->attributes['column'] = 0; }
throw new JSException($x643, 205, 16, '<image>/04_array.js');
}
$x639 = $x635->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x640 = $x639($global, $x631, $x635, array($x637), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
else {
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x645 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 207, 15, '<image>/04_array.js');
$_TypeError =& $x645[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x645;
$x646 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x647 = $x646($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x647->class) && $x647->class === 'Error' && !isset($x647->properties['file']) && !isset($x647->properties['line']) && !isset($x647->properties['column'])) {$x647->properties['file'] = '<image>/04_array.js';$x647->properties['line'] = 207;$x647->properties['column'] = 15;$x647->attributes['file'] = $x647->attributes['line'] = $x647->attributes['column'] = 0; }
throw new JSException($x647, 207, 15, '<image>/04_array.js');
}
$x644 = JS::toObject($_larger, $global);
unset($x648, $W648, $S648, $U648);
$x649 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x644, (string) 'push', 207, 15, '<image>/04_array.js');
$x648 =& $x649[0]; list(,$W648,$S648,$U648) = $x649;
unset($x650, $W650, $S650, $U650);
$x651 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 207, 20, '<image>/04_array.js');
$x650 =& $x651[0]; list(,$W650,$S650,$U650) = $x651;
if (!(is_object($x648) && isset($x648->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x654 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 207, 15, '<image>/04_array.js');
$_TypeError =& $x654[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x654;
$x655 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x656 = $x655($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x656->class) && $x656->class === 'Error' && !isset($x656->properties['file']) && !isset($x656->properties['line']) && !isset($x656->properties['column'])) {$x656->properties['file'] = '<image>/04_array.js';$x656->properties['line'] = 207;$x656->properties['column'] = 15;$x656->attributes['file'] = $x656->attributes['line'] = $x656->attributes['column'] = 0; }
throw new JSException($x656, 207, 15, '<image>/04_array.js');
}
$x652 = $x648->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x653 = $x652($global, $x644, $x648, array($x650), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x658 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 27, '<image>/04_array.js');
$_TypeError =& $x658[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x658;
$x659 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x660 = $x659($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x660->class) && $x660->class === 'Error' && !isset($x660->properties['file']) && !isset($x660->properties['line']) && !isset($x660->properties['column'])) {$x660->properties['file'] = '<image>/04_array.js';$x660->properties['line'] = 211;$x660->properties['column'] = 27;$x660->attributes['file'] = $x660->attributes['line'] = $x660->attributes['column'] = 0; }
throw new JSException($x660, 211, 27, '<image>/04_array.js');
}
$x657 = JS::toObject($_smaller, $global);
unset($x661, $W661, $S661, $U661);
$x662 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x657, (string) 'sort', 211, 27, '<image>/04_array.js');
$x661 =& $x662[0]; list(,$W661,$S661,$U661) = $x662;
if (!(is_object($x661) && isset($x661->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x665 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 27, '<image>/04_array.js');
$_TypeError =& $x665[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x665;
$x666 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x667 = $x666($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x667->class) && $x667->class === 'Error' && !isset($x667->properties['file']) && !isset($x667->properties['line']) && !isset($x667->properties['column'])) {$x667->properties['file'] = '<image>/04_array.js';$x667->properties['line'] = 211;$x667->properties['column'] = 27;$x667->attributes['file'] = $x667->attributes['line'] = $x667->attributes['column'] = 0; }
throw new JSException($x667, 211, 27, '<image>/04_array.js');
}
$x663 = $x661->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x664 = $x663($global, $x657, $x661, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x664 === JS::$undefined || $x664 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x669 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 45, '<image>/04_array.js');
$_TypeError =& $x669[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x669;
$x670 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x671 = $x670($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x671->class) && $x671->class === 'Error' && !isset($x671->properties['file']) && !isset($x671->properties['line']) && !isset($x671->properties['column'])) {$x671->properties['file'] = '<image>/04_array.js';$x671->properties['line'] = 211;$x671->properties['column'] = 45;$x671->attributes['file'] = $x671->attributes['line'] = $x671->attributes['column'] = 0; }
throw new JSException($x671, 211, 45, '<image>/04_array.js');
}
$x668 = JS::toObject($x664, $global);
unset($x672, $W672, $S672, $U672);
$x673 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x668, (string) 'concat', 211, 45, '<image>/04_array.js');
$x672 =& $x673[0]; list(,$W672,$S672,$U672) = $x673;
$x674 = clone JS::$arrayTemplate;
$x674->properties['length'] = 1;
$x674->attributes['length'] = JS::WRITABLE;
$x674->properties[0] = $_pivot;
$x674->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x676 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 66, '<image>/04_array.js');
$_TypeError =& $x676[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x676;
$x677 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x678 = $x677($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x678->class) && $x678->class === 'Error' && !isset($x678->properties['file']) && !isset($x678->properties['line']) && !isset($x678->properties['column'])) {$x678->properties['file'] = '<image>/04_array.js';$x678->properties['line'] = 211;$x678->properties['column'] = 66;$x678->attributes['file'] = $x678->attributes['line'] = $x678->attributes['column'] = 0; }
throw new JSException($x678, 211, 66, '<image>/04_array.js');
}
$x675 = JS::toObject($_larger, $global);
unset($x679, $W679, $S679, $U679);
$x680 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x675, (string) 'sort', 211, 66, '<image>/04_array.js');
$x679 =& $x680[0]; list(,$W679,$S679,$U679) = $x680;
if (!(is_object($x679) && isset($x679->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x683 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 66, '<image>/04_array.js');
$_TypeError =& $x683[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x683;
$x684 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x685 = $x684($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x685->class) && $x685->class === 'Error' && !isset($x685->properties['file']) && !isset($x685->properties['line']) && !isset($x685->properties['column'])) {$x685->properties['file'] = '<image>/04_array.js';$x685->properties['line'] = 211;$x685->properties['column'] = 66;$x685->attributes['file'] = $x685->attributes['line'] = $x685->attributes['column'] = 0; }
throw new JSException($x685, 211, 66, '<image>/04_array.js');
}
$x681 = $x679->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x682 = $x681($global, $x675, $x679, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x672) && isset($x672->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x688 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 211, 45, '<image>/04_array.js');
$_TypeError =& $x688[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x688;
$x689 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x690 = $x689($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x690->class) && $x690->class === 'Error' && !isset($x690->properties['file']) && !isset($x690->properties['line']) && !isset($x690->properties['column'])) {$x690->properties['file'] = '<image>/04_array.js';$x690->properties['line'] = 211;$x690->properties['column'] = 45;$x690->attributes['file'] = $x690->attributes['line'] = $x690->attributes['column'] = 0; }
throw new JSException($x690, 211, 45, '<image>/04_array.js');
}
$x686 = $x672->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x687 = $x686($global, $x668, $x672, array($x674, $x682), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['sorted'] = JS::$undefined; $_sorted =& $scope->properties['sorted'];
$Usorted = FALSE;
$_sorted = $x687;
for ($x691 = 0;; ++$x691) {
if ($x691 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x692, $W692, $S692, $U692);
$x693 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, (string) 'length', 213, 28, '<image>/04_array.js');
$x692 =& $x693[0]; list(,$W692,$S692,$U692) = $x693;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x692;
}
if ($x691 !== 0) {
$x694 = ++$_i;
}
$x695 = JS::toPrimitive($_i, $global);
$x696 = JS::toPrimitive($_l, $global);
$x697 = (is_string($x695) && is_string($x696) ? strcmp($x695, $x696) < 0 : (!is_nan($x698 = JS::toNumber($x695, $global)) && !is_nan($x699 = JS::toNumber($x696, $global)) && $x698 < $x699));
if (!JS::toBoolean($x697, $global)) { break; }

unset($x700, $W700, $S700, $U700);
$x701 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, (string) $_i, 214, 19, '<image>/04_array.js');
$x700 =& $x701[0]; list(,$W700,$S700,$U700) = $x701;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x702 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 214, 11, '<image>/04_array.js');
$_TypeError =& $x702[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x702;
$x703 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x704 = $x703($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x704->class) && $x704->class === 'Error' && !isset($x704->properties['file']) && !isset($x704->properties['line']) && !isset($x704->properties['column'])) {$x704->properties['file'] = '<image>/04_array.js';$x704->properties['line'] = 214;$x704->properties['column'] = 11;$x704->attributes['file'] = $x704->attributes['line'] = $x704->attributes['column'] = 0; }
throw new JSException($x704, 214, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x705, $W705, $S705, $U705);
$x706 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_i, 214, 11, '<image>/04_array.js');
$x705 =& $x706[0]; list(,$W705,$S705,$U705) = $x706;
if ($U705 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_i] = $x705; $x705 =& $leThis->properties[$_i]; $leThis->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U705 = FALSE; $W705 = TRUE; }
if (isset($S705)) {
$x708 = $S705->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x709 = $x708($global, $leThis, $S705, array($x700), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x707 = $x709;
} else {
if (!$U705) {$x707 = $x700;if ($W705) { $x705 = $x700; }  }
else { $x707 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x558=&$scope->properties[\'arguments\'];$x558->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x558->properties[$i]=$args[$i];$x558->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'compareFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_compareFn=&$scope->properties[\'compareFn\'];$UcompareFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$x559=$_compareFn;if(!JS::toBoolean($x559,$global)){$x598=clone JS::$functionTemplate;$x598->call=\'_339fc8fcf8563d9777a12bd15b91ae1b_15\';$x598->parameters=array(0=>\'a\',1=>\'b\',);$x598->scope=$scope;$x598->properties[\'prototype\']=clone JS::$objectTemplate;$x598->attributes[\'prototype\']=JS::WRITABLE;$x598->properties[\'prototype\']->properties[\'constructor\']=$x598;$x598->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x598->properties[\'length\']=2;$x598->attributes[\'length\']=0;$x559=$x598;}if($UcompareFn){$global->properties[\'compareFn\']=$_compareFn;$_compareFn=&$global->properties[\'compareFn\'];}$_compareFn=$x559;unset($x602,$W602,$S602,$U602);$x603=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',195,10,\'<image>/04_array.js\');$x602=&$x603[0];list(,$W602,$S602,$U602)=$x603;$x599=JS::toPrimitive($x602,$global);$x600=JS::toPrimitive(2,$global);$x601=(is_string($x599)&&is_string($x600)?strcmp($x599,$x600)<0:(!is_nan($x604=JS::toNumber($x599,$global))&&!is_nan($x605=JS::toNumber($x600,$global))&&$x604<$x605));if(JS::toBoolean($x601,$global)){return$leThis;}$scope->properties[\'pivot\']=JS::$undefined;$_pivot=&$scope->properties[\'pivot\'];$Upivot=FALSE;$_pivot=JS::$undefined;$x606=clone JS::$arrayTemplate;$x606->properties[\'length\']=0;$x606->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'smaller\']=JS::$undefined;$_smaller=&$scope->properties[\'smaller\'];$Usmaller=FALSE;$_smaller=$x606;$x607=clone JS::$arrayTemplate;$x607->properties[\'length\']=0;$x607->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'larger\']=JS::$undefined;$_larger=&$scope->properties[\'larger\'];$Ularger=FALSE;$_larger=$x607;unset($x608,$W608,$S608,$U608);$x609=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)0,201,14,\'<image>/04_array.js\');$x608=&$x609[0];list(,$W608,$S608,$U608)=$x609;if($Upivot){$global->properties[\'pivot\']=$_pivot;$_pivot=&$global->properties[\'pivot\'];}$_pivot=$x608;for($x610=0;;++$x610){if($x610===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x611,$W611,$S611,$U611);$x612=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',203,26,\'<image>/04_array.js\');$x611=&$x612[0];list(,$W611,$S611,$U611)=$x612;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x611;}if($x610!==0){$x613=++$_i;}$x614=JS::toPrimitive($_i,$global);$x615=JS::toPrimitive($_l,$global);$x616=(is_string($x614)&&is_string($x615)?strcmp($x614,$x615)<0:(!is_nan($x617=JS::toNumber($x614,$global))&&!is_nan($x618=JS::toNumber($x615,$global))&&$x617<$x618));if(!JS::toBoolean($x616,$global)){break;}unset($x622,$W622,$S622,$U622);$x623=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,204,21,\'<image>/04_array.js\');$x622=&$x623[0];list(,$W622,$S622,$U622)=$x623;if(!(is_object($_compareFn)&&isset($_compareFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x626=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',204,16,\'<image>/04_array.js\');$_TypeError=&$x626[0];list(,$WTypeError,$STypeError,$UTypeError)=$x626;$x627=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x628=$x627($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x628->class)&&$x628->class===\'Error\'&&!isset($x628->properties[\'file\'])&&!isset($x628->properties[\'line\'])&&!isset($x628->properties[\'column\'])){$x628->properties[\'file\']=\'<image>/04_array.js\';$x628->properties[\'line\']=204;$x628->properties[\'column\']=16;$x628->attributes[\'file\']=$x628->attributes[\'line\']=$x628->attributes[\'column\']=0;}throw new JSException($x628,204,16,\'<image>/04_array.js\');}$x624=$_compareFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x625=$x624($global,$global,$_compareFn,array($x622,$_pivot),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x619=JS::toPrimitive($x625,$global);$x620=JS::toPrimitive(0,$global);$x621=(is_string($x619)&&is_string($x620)?strcmp($x619,$x620)<0:(!is_nan($x629=JS::toNumber($x619,$global))&&!is_nan($x630=JS::toNumber($x620,$global))&&$x629<$x630));if(JS::toBoolean($x621,$global)){if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x632=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',205,16,\'<image>/04_array.js\');$_TypeError=&$x632[0];list(,$WTypeError,$STypeError,$UTypeError)=$x632;$x633=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x634=$x633($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x634->class)&&$x634->class===\'Error\'&&!isset($x634->properties[\'file\'])&&!isset($x634->properties[\'line\'])&&!isset($x634->properties[\'column\'])){$x634->properties[\'file\']=\'<image>/04_array.js\';$x634->properties[\'line\']=205;$x634->properties[\'column\']=16;$x634->attributes[\'file\']=$x634->attributes[\'line\']=$x634->attributes[\'column\']=0;}throw new JSException($x634,205,16,\'<image>/04_array.js\');}$x631=JS::toObject($_smaller,$global);unset($x635,$W635,$S635,$U635);$x636=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x631,(string)\'push\',205,16,\'<image>/04_array.js\');$x635=&$x636[0];list(,$W635,$S635,$U635)=$x636;unset($x637,$W637,$S637,$U637);$x638=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,205,21,\'<image>/04_array.js\');$x637=&$x638[0];list(,$W637,$S637,$U637)=$x638;if(!(is_object($x635)&&isset($x635->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x641=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',205,16,\'<image>/04_array.js\');$_TypeError=&$x641[0];list(,$WTypeError,$STypeError,$UTypeError)=$x641;$x642=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x643=$x642($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x643->class)&&$x643->class===\'Error\'&&!isset($x643->properties[\'file\'])&&!isset($x643->properties[\'line\'])&&!isset($x643->properties[\'column\'])){$x643->properties[\'file\']=\'<image>/04_array.js\';$x643->properties[\'line\']=205;$x643->properties[\'column\']=16;$x643->attributes[\'file\']=$x643->attributes[\'line\']=$x643->attributes[\'column\']=0;}throw new JSException($x643,205,16,\'<image>/04_array.js\');}$x639=$x635->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x640=$x639($global,$x631,$x635,array($x637),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x645=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',207,15,\'<image>/04_array.js\');$_TypeError=&$x645[0];list(,$WTypeError,$STypeError,$UTypeError)=$x645;$x646=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x647=$x646($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x647->class)&&$x647->class===\'Error\'&&!isset($x647->properties[\'file\'])&&!isset($x647->properties[\'line\'])&&!isset($x647->properties[\'column\'])){$x647->properties[\'file\']=\'<image>/04_array.js\';$x647->properties[\'line\']=207;$x647->properties[\'column\']=15;$x647->attributes[\'file\']=$x647->attributes[\'line\']=$x647->attributes[\'column\']=0;}throw new JSException($x647,207,15,\'<image>/04_array.js\');}$x644=JS::toObject($_larger,$global);unset($x648,$W648,$S648,$U648);$x649=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x644,(string)\'push\',207,15,\'<image>/04_array.js\');$x648=&$x649[0];list(,$W648,$S648,$U648)=$x649;unset($x650,$W650,$S650,$U650);$x651=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,207,20,\'<image>/04_array.js\');$x650=&$x651[0];list(,$W650,$S650,$U650)=$x651;if(!(is_object($x648)&&isset($x648->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x654=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',207,15,\'<image>/04_array.js\');$_TypeError=&$x654[0];list(,$WTypeError,$STypeError,$UTypeError)=$x654;$x655=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x656=$x655($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x656->class)&&$x656->class===\'Error\'&&!isset($x656->properties[\'file\'])&&!isset($x656->properties[\'line\'])&&!isset($x656->properties[\'column\'])){$x656->properties[\'file\']=\'<image>/04_array.js\';$x656->properties[\'line\']=207;$x656->properties[\'column\']=15;$x656->attributes[\'file\']=$x656->attributes[\'line\']=$x656->attributes[\'column\']=0;}throw new JSException($x656,207,15,\'<image>/04_array.js\');}$x652=$x648->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x653=$x652($global,$x644,$x648,array($x650),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x658=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,27,\'<image>/04_array.js\');$_TypeError=&$x658[0];list(,$WTypeError,$STypeError,$UTypeError)=$x658;$x659=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x660=$x659($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x660->class)&&$x660->class===\'Error\'&&!isset($x660->properties[\'file\'])&&!isset($x660->properties[\'line\'])&&!isset($x660->properties[\'column\'])){$x660->properties[\'file\']=\'<image>/04_array.js\';$x660->properties[\'line\']=211;$x660->properties[\'column\']=27;$x660->attributes[\'file\']=$x660->attributes[\'line\']=$x660->attributes[\'column\']=0;}throw new JSException($x660,211,27,\'<image>/04_array.js\');}$x657=JS::toObject($_smaller,$global);unset($x661,$W661,$S661,$U661);$x662=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x657,(string)\'sort\',211,27,\'<image>/04_array.js\');$x661=&$x662[0];list(,$W661,$S661,$U661)=$x662;if(!(is_object($x661)&&isset($x661->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x665=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,27,\'<image>/04_array.js\');$_TypeError=&$x665[0];list(,$WTypeError,$STypeError,$UTypeError)=$x665;$x666=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x667=$x666($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x667->class)&&$x667->class===\'Error\'&&!isset($x667->properties[\'file\'])&&!isset($x667->properties[\'line\'])&&!isset($x667->properties[\'column\'])){$x667->properties[\'file\']=\'<image>/04_array.js\';$x667->properties[\'line\']=211;$x667->properties[\'column\']=27;$x667->attributes[\'file\']=$x667->attributes[\'line\']=$x667->attributes[\'column\']=0;}throw new JSException($x667,211,27,\'<image>/04_array.js\');}$x663=$x661->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x664=$x663($global,$x657,$x661,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x664===JS::$undefined||$x664===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x669=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,45,\'<image>/04_array.js\');$_TypeError=&$x669[0];list(,$WTypeError,$STypeError,$UTypeError)=$x669;$x670=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x671=$x670($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x671->class)&&$x671->class===\'Error\'&&!isset($x671->properties[\'file\'])&&!isset($x671->properties[\'line\'])&&!isset($x671->properties[\'column\'])){$x671->properties[\'file\']=\'<image>/04_array.js\';$x671->properties[\'line\']=211;$x671->properties[\'column\']=45;$x671->attributes[\'file\']=$x671->attributes[\'line\']=$x671->attributes[\'column\']=0;}throw new JSException($x671,211,45,\'<image>/04_array.js\');}$x668=JS::toObject($x664,$global);unset($x672,$W672,$S672,$U672);$x673=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x668,(string)\'concat\',211,45,\'<image>/04_array.js\');$x672=&$x673[0];list(,$W672,$S672,$U672)=$x673;$x674=clone JS::$arrayTemplate;$x674->properties[\'length\']=1;$x674->attributes[\'length\']=JS::WRITABLE;$x674->properties[0]=$_pivot;$x674->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x676=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,66,\'<image>/04_array.js\');$_TypeError=&$x676[0];list(,$WTypeError,$STypeError,$UTypeError)=$x676;$x677=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x678=$x677($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x678->class)&&$x678->class===\'Error\'&&!isset($x678->properties[\'file\'])&&!isset($x678->properties[\'line\'])&&!isset($x678->properties[\'column\'])){$x678->properties[\'file\']=\'<image>/04_array.js\';$x678->properties[\'line\']=211;$x678->properties[\'column\']=66;$x678->attributes[\'file\']=$x678->attributes[\'line\']=$x678->attributes[\'column\']=0;}throw new JSException($x678,211,66,\'<image>/04_array.js\');}$x675=JS::toObject($_larger,$global);unset($x679,$W679,$S679,$U679);$x680=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x675,(string)\'sort\',211,66,\'<image>/04_array.js\');$x679=&$x680[0];list(,$W679,$S679,$U679)=$x680;if(!(is_object($x679)&&isset($x679->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x683=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,66,\'<image>/04_array.js\');$_TypeError=&$x683[0];list(,$WTypeError,$STypeError,$UTypeError)=$x683;$x684=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x685=$x684($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x685->class)&&$x685->class===\'Error\'&&!isset($x685->properties[\'file\'])&&!isset($x685->properties[\'line\'])&&!isset($x685->properties[\'column\'])){$x685->properties[\'file\']=\'<image>/04_array.js\';$x685->properties[\'line\']=211;$x685->properties[\'column\']=66;$x685->attributes[\'file\']=$x685->attributes[\'line\']=$x685->attributes[\'column\']=0;}throw new JSException($x685,211,66,\'<image>/04_array.js\');}$x681=$x679->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x682=$x681($global,$x675,$x679,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x672)&&isset($x672->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x688=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',211,45,\'<image>/04_array.js\');$_TypeError=&$x688[0];list(,$WTypeError,$STypeError,$UTypeError)=$x688;$x689=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x690=$x689($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x690->class)&&$x690->class===\'Error\'&&!isset($x690->properties[\'file\'])&&!isset($x690->properties[\'line\'])&&!isset($x690->properties[\'column\'])){$x690->properties[\'file\']=\'<image>/04_array.js\';$x690->properties[\'line\']=211;$x690->properties[\'column\']=45;$x690->attributes[\'file\']=$x690->attributes[\'line\']=$x690->attributes[\'column\']=0;}throw new JSException($x690,211,45,\'<image>/04_array.js\');}$x686=$x672->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x687=$x686($global,$x668,$x672,array($x674,$x682),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'sorted\']=JS::$undefined;$_sorted=&$scope->properties[\'sorted\'];$Usorted=FALSE;$_sorted=$x687;for($x691=0;;++$x691){if($x691===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x692,$W692,$S692,$U692);$x693=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,(string)\'length\',213,28,\'<image>/04_array.js\');$x692=&$x693[0];list(,$W692,$S692,$U692)=$x693;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x692;}if($x691!==0){$x694=++$_i;}$x695=JS::toPrimitive($_i,$global);$x696=JS::toPrimitive($_l,$global);$x697=(is_string($x695)&&is_string($x696)?strcmp($x695,$x696)<0:(!is_nan($x698=JS::toNumber($x695,$global))&&!is_nan($x699=JS::toNumber($x696,$global))&&$x698<$x699));if(!JS::toBoolean($x697,$global)){break;}unset($x700,$W700,$S700,$U700);$x701=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,(string)$_i,214,19,\'<image>/04_array.js\');$x700=&$x701[0];list(,$W700,$S700,$U700)=$x701;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x702=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',214,11,\'<image>/04_array.js\');$_TypeError=&$x702[0];list(,$WTypeError,$STypeError,$UTypeError)=$x702;$x703=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x704=$x703($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x704->class)&&$x704->class===\'Error\'&&!isset($x704->properties[\'file\'])&&!isset($x704->properties[\'line\'])&&!isset($x704->properties[\'column\'])){$x704->properties[\'file\']=\'<image>/04_array.js\';$x704->properties[\'line\']=214;$x704->properties[\'column\']=11;$x704->attributes[\'file\']=$x704->attributes[\'line\']=$x704->attributes[\'column\']=0;}throw new JSException($x704,214,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x705,$W705,$S705,$U705);$x706=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_i,214,11,\'<image>/04_array.js\');$x705=&$x706[0];list(,$W705,$S705,$U705)=$x706;if($U705&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_i]=$x705;$x705=&$leThis->properties[$_i];$leThis->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U705=FALSE;$W705=TRUE;}if(isset($S705)){$x708=$S705->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x709=$x708($global,$leThis,$S705,array($x700),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x707=$x709;}else{if(!$U705){$x707=$x700;if($W705){$x705=$x700;}}else{$x707=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_16($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x723 = clone JS::$arrayTemplate;
$x723->properties['length'] = 0;
$x723->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x723;
$A = array();
for ($x724 = 0;; ++$x724) {
if ($x724 === 0) {
$x725 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x725;
unset($x726, $W726, $S726, $U726);
$x727 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 225, 22, '<image>/04_array.js');
$x726 =& $x727[0]; list(,$W726,$S726,$U726) = $x727;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x726;
}
if ($x724 !== 0) {
$x728 = ++$_i;
}
$x729 = JS::toPrimitive($_i, $global);
$x730 = JS::toPrimitive($_l, $global);
$x731 = (is_string($x729) && is_string($x730) ? strcmp($x729, $x730) < 0 : (!is_nan($x732 = JS::toNumber($x729, $global)) && !is_nan($x733 = JS::toNumber($x730, $global)) && $x732 < $x733));
if (!JS::toBoolean($x731, $global)) { break; }

unset($x734, $W734, $S734, $U734);
$x735 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 226, 14, '<image>/04_array.js');
$x734 =& $x735[0]; list(,$W734,$S734,$U734) = $x735;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x734;
$A[] =$_item;
if (!array_key_exists($_i, $leThis->attributes)) { unset($leThis->properties[$_i]); $x736 = TRUE; }
else if ($leThis->attributes[$_i] & JS::CONFIGURABLE) { unset($leThis->properties[$_i], $leThis->attributes[$_i], $leThis->getters[$_i], $leThis->setters[$_i]); $x736 = TRUE; }
else { $x736 = FALSE; };;
};
$x737 = (((gettype($_deleteCount) === gettype(JS::$undefined) && $_deleteCount === JS::$undefined))|| (((is_float($_deleteCount) || is_int($_deleteCount)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_deleteCount == JS::$undefined));
if (JS::toBoolean($x737, $global)) {

$C = array_splice($A,$_start);;
}
else {
$B = array();
for ($x738 = 0;; ++$x738) {
if ($x738 === 0) {
$x739 = 2;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x739;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x740 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 236, 19, '<image>/04_array.js');
$_arguments =& $x740[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x740;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x741 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 236, 19, '<image>/04_array.js');
$_ReferenceError =& $x741[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x741;
$x742 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 236, 19);
$x743 = $x742($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x743->class) && $x743->class === 'Error' && !isset($x743->properties['file']) && !isset($x743->properties['line']) && !isset($x743->properties['column'])) {$x743->properties['file'] = '<image>/04_array.js';$x743->properties['line'] = 236;$x743->properties['column'] = 19;$x743->attributes['file'] = $x743->attributes['line'] = $x743->attributes['column'] = 0; }
throw new JSException($x743, 236, 19, '<image>/04_array.js');
}
unset($x744, $W744, $S744, $U744);
$x745 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 236, 28, '<image>/04_array.js');
$x744 =& $x745[0]; list(,$W744,$S744,$U744) = $x745;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x744;
}
if ($x738 !== 0) {
$x746 = ++$_i;
}
$x747 = JS::toPrimitive($_i, $global);
$x748 = JS::toPrimitive($_l, $global);
$x749 = (is_string($x747) && is_string($x748) ? strcmp($x747, $x748) < 0 : (!is_nan($x750 = JS::toNumber($x747, $global)) && !is_nan($x751 = JS::toNumber($x748, $global)) && $x750 < $x751));
if (!JS::toBoolean($x749, $global)) { break; }

unset($x752, $W752, $S752, $U752);
$x753 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 237, 20, '<image>/04_array.js');
$x752 =& $x753[0]; list(,$W752,$S752,$U752) = $x753;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x752;
$B[] =$_item;;
};
$C = array_splice($A,$_start,$_deleteCount, $B);;
};
$x754 = 0;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x755 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 244, 14, '<image>/04_array.js');
$_TypeError =& $x755[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x755;
$x756 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x757 = $x756($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x757->class) && $x757->class === 'Error' && !isset($x757->properties['file']) && !isset($x757->properties['line']) && !isset($x757->properties['column'])) {$x757->properties['file'] = '<image>/04_array.js';$x757->properties['line'] = 244;$x757->properties['column'] = 14;$x757->attributes['file'] = $x757->attributes['line'] = $x757->attributes['column'] = 0; }
throw new JSException($x757, 244, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x758, $W758, $S758, $U758);
$x759 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) 'length', 244, 14, '<image>/04_array.js');
$x758 =& $x759[0]; list(,$W758,$S758,$U758) = $x759;
if ($U758 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['length'] = $x758; $x758 =& $leThis->properties['length']; $leThis->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U758 = FALSE; $W758 = TRUE; }
if (isset($S758)) {
$x761 = $S758->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x762 = $x761($global, $leThis, $S758, array($x754), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x760 = $x762;
} else {
if (!$U758) {$x760 = $x754;if ($W758) { $x758 = $x754; }  }
else { $x760 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
foreach ($A as $V) {;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x764 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 247, 12, '<image>/04_array.js');
$_TypeError =& $x764[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x764;
$x765 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x766 = $x765($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x766->class) && $x766->class === 'Error' && !isset($x766->properties['file']) && !isset($x766->properties['line']) && !isset($x766->properties['column'])) {$x766->properties['file'] = '<image>/04_array.js';$x766->properties['line'] = 247;$x766->properties['column'] = 12;$x766->attributes['file'] = $x766->attributes['line'] = $x766->attributes['column'] = 0; }
throw new JSException($x766, 247, 12, '<image>/04_array.js');
}
$x763 = JS::toObject($leThis, $global);
unset($x767, $W767, $S767, $U767);
$x768 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x763, (string) 'push', 247, 12, '<image>/04_array.js');
$x767 =& $x768[0]; list(,$W767,$S767,$U767) = $x768;
if (!(is_object($x767) && isset($x767->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x771 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 247, 12, '<image>/04_array.js');
$_TypeError =& $x771[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x771;
$x772 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x773 = $x772($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x773->class) && $x773->class === 'Error' && !isset($x773->properties['file']) && !isset($x773->properties['line']) && !isset($x773->properties['column'])) {$x773->properties['file'] = '<image>/04_array.js';$x773->properties['line'] = 247;$x773->properties['column'] = 12;$x773->attributes['file'] = $x773->attributes['line'] = $x773->attributes['column'] = 0; }
throw new JSException($x773, 247, 12, '<image>/04_array.js');
}
$x769 = $x767->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x770 = $x769($global, $x763, $x767, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
foreach ($C as $I => $V) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x775 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 251, 19, '<image>/04_array.js');
$_TypeError =& $x775[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x775;
$x776 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x777 = $x776($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x777->class) && $x777->class === 'Error' && !isset($x777->properties['file']) && !isset($x777->properties['line']) && !isset($x777->properties['column'])) {$x777->properties['file'] = '<image>/04_array.js';$x777->properties['line'] = 251;$x777->properties['column'] = 19;$x777->attributes['file'] = $x777->attributes['line'] = $x777->attributes['column'] = 0; }
throw new JSException($x777, 251, 19, '<image>/04_array.js');
}
$x774 = JS::toObject($_returnArray, $global);
unset($x778, $W778, $S778, $U778);
$x779 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x774, (string) 'push', 251, 19, '<image>/04_array.js');
$x778 =& $x779[0]; list(,$W778,$S778,$U778) = $x779;
if (!(is_object($x778) && isset($x778->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x782 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 251, 19, '<image>/04_array.js');
$_TypeError =& $x782[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x782;
$x783 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x784 = $x783($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x784->class) && $x784->class === 'Error' && !isset($x784->properties['file']) && !isset($x784->properties['line']) && !isset($x784->properties['column'])) {$x784->properties['file'] = '<image>/04_array.js';$x784->properties['line'] = 251;$x784->properties['column'] = 19;$x784->attributes['file'] = $x784->attributes['line'] = $x784->attributes['column'] = 0; }
throw new JSException($x784, 251, 19, '<image>/04_array.js');
}
$x780 = $x778->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x781 = $x780($global, $x774, $x778, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x722=&$scope->properties[\'arguments\'];$x722->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x722->properties[$i]=$args[$i];$x722->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'deleteCount\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_deleteCount=&$scope->properties[\'deleteCount\'];$UdeleteCount=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=JS::$undefined;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;$x723=clone JS::$arrayTemplate;$x723->properties[\'length\']=0;$x723->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x723;$A=array();for($x724=0;;++$x724){if($x724===0){$x725=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x725;unset($x726,$W726,$S726,$U726);$x727=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',225,22,\'<image>/04_array.js\');$x726=&$x727[0];list(,$W726,$S726,$U726)=$x727;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x726;}if($x724!==0){$x728=++$_i;}$x729=JS::toPrimitive($_i,$global);$x730=JS::toPrimitive($_l,$global);$x731=(is_string($x729)&&is_string($x730)?strcmp($x729,$x730)<0:(!is_nan($x732=JS::toNumber($x729,$global))&&!is_nan($x733=JS::toNumber($x730,$global))&&$x732<$x733));if(!JS::toBoolean($x731,$global)){break;}unset($x734,$W734,$S734,$U734);$x735=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,226,14,\'<image>/04_array.js\');$x734=&$x735[0];list(,$W734,$S734,$U734)=$x735;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x734;$A[]=$_item;if(!array_key_exists($_i,$leThis->attributes)){unset($leThis->properties[$_i]);$x736=TRUE;}else if($leThis->attributes[$_i]&JS::CONFIGURABLE){unset($leThis->properties[$_i],$leThis->attributes[$_i],$leThis->getters[$_i],$leThis->setters[$_i]);$x736=TRUE;}else{$x736=FALSE;}}$x737=(((gettype($_deleteCount)===gettype(JS::$undefined)&&$_deleteCount===JS::$undefined))||(((is_float($_deleteCount)||is_int($_deleteCount))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_deleteCount==JS::$undefined));if(JS::toBoolean($x737,$global)){$C=array_splice($A,$_start);}else{$B=array();for($x738=0;;++$x738){if($x738===0){$x739=2;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x739;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x740=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',236,19,\'<image>/04_array.js\');$_arguments=&$x740[0];list(,$Warguments,$Sarguments,$Uarguments)=$x740;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x741=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',236,19,\'<image>/04_array.js\');$_ReferenceError=&$x741[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x741;$x742=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',236,19);$x743=$x742($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x743->class)&&$x743->class===\'Error\'&&!isset($x743->properties[\'file\'])&&!isset($x743->properties[\'line\'])&&!isset($x743->properties[\'column\'])){$x743->properties[\'file\']=\'<image>/04_array.js\';$x743->properties[\'line\']=236;$x743->properties[\'column\']=19;$x743->attributes[\'file\']=$x743->attributes[\'line\']=$x743->attributes[\'column\']=0;}throw new JSException($x743,236,19,\'<image>/04_array.js\');}unset($x744,$W744,$S744,$U744);$x745=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',236,28,\'<image>/04_array.js\');$x744=&$x745[0];list(,$W744,$S744,$U744)=$x745;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x744;}if($x738!==0){$x746=++$_i;}$x747=JS::toPrimitive($_i,$global);$x748=JS::toPrimitive($_l,$global);$x749=(is_string($x747)&&is_string($x748)?strcmp($x747,$x748)<0:(!is_nan($x750=JS::toNumber($x747,$global))&&!is_nan($x751=JS::toNumber($x748,$global))&&$x750<$x751));if(!JS::toBoolean($x749,$global)){break;}unset($x752,$W752,$S752,$U752);$x753=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,237,20,\'<image>/04_array.js\');$x752=&$x753[0];list(,$W752,$S752,$U752)=$x753;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x752;$B[]=$_item;}$C=array_splice($A,$_start,$_deleteCount,$B);}$x754=0;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x755=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',244,14,\'<image>/04_array.js\');$_TypeError=&$x755[0];list(,$WTypeError,$STypeError,$UTypeError)=$x755;$x756=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x757=$x756($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x757->class)&&$x757->class===\'Error\'&&!isset($x757->properties[\'file\'])&&!isset($x757->properties[\'line\'])&&!isset($x757->properties[\'column\'])){$x757->properties[\'file\']=\'<image>/04_array.js\';$x757->properties[\'line\']=244;$x757->properties[\'column\']=14;$x757->attributes[\'file\']=$x757->attributes[\'line\']=$x757->attributes[\'column\']=0;}throw new JSException($x757,244,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x758,$W758,$S758,$U758);$x759=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)\'length\',244,14,\'<image>/04_array.js\');$x758=&$x759[0];list(,$W758,$S758,$U758)=$x759;if($U758&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'length\']=$x758;$x758=&$leThis->properties[\'length\'];$leThis->attributes[\'length\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U758=FALSE;$W758=TRUE;}if(isset($S758)){$x761=$S758->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x762=$x761($global,$leThis,$S758,array($x754),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x760=$x762;}else{if(!$U758){$x760=$x754;if($W758){$x758=$x754;}}else{$x760=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}foreach($A as$V){;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x764=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',247,12,\'<image>/04_array.js\');$_TypeError=&$x764[0];list(,$WTypeError,$STypeError,$UTypeError)=$x764;$x765=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x766=$x765($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x766->class)&&$x766->class===\'Error\'&&!isset($x766->properties[\'file\'])&&!isset($x766->properties[\'line\'])&&!isset($x766->properties[\'column\'])){$x766->properties[\'file\']=\'<image>/04_array.js\';$x766->properties[\'line\']=247;$x766->properties[\'column\']=12;$x766->attributes[\'file\']=$x766->attributes[\'line\']=$x766->attributes[\'column\']=0;}throw new JSException($x766,247,12,\'<image>/04_array.js\');}$x763=JS::toObject($leThis,$global);unset($x767,$W767,$S767,$U767);$x768=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x763,(string)\'push\',247,12,\'<image>/04_array.js\');$x767=&$x768[0];list(,$W767,$S767,$U767)=$x768;if(!(is_object($x767)&&isset($x767->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x771=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',247,12,\'<image>/04_array.js\');$_TypeError=&$x771[0];list(,$WTypeError,$STypeError,$UTypeError)=$x771;$x772=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x773=$x772($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x773->class)&&$x773->class===\'Error\'&&!isset($x773->properties[\'file\'])&&!isset($x773->properties[\'line\'])&&!isset($x773->properties[\'column\'])){$x773->properties[\'file\']=\'<image>/04_array.js\';$x773->properties[\'line\']=247;$x773->properties[\'column\']=12;$x773->attributes[\'file\']=$x773->attributes[\'line\']=$x773->attributes[\'column\']=0;}throw new JSException($x773,247,12,\'<image>/04_array.js\');}$x769=$x767->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x770=$x769($global,$x763,$x767,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}foreach($C as$I=>$V){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x775=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',251,19,\'<image>/04_array.js\');$_TypeError=&$x775[0];list(,$WTypeError,$STypeError,$UTypeError)=$x775;$x776=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x777=$x776($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x777->class)&&$x777->class===\'Error\'&&!isset($x777->properties[\'file\'])&&!isset($x777->properties[\'line\'])&&!isset($x777->properties[\'column\'])){$x777->properties[\'file\']=\'<image>/04_array.js\';$x777->properties[\'line\']=251;$x777->properties[\'column\']=19;$x777->attributes[\'file\']=$x777->attributes[\'line\']=$x777->attributes[\'column\']=0;}throw new JSException($x777,251,19,\'<image>/04_array.js\');}$x774=JS::toObject($_returnArray,$global);unset($x778,$W778,$S778,$U778);$x779=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x774,(string)\'push\',251,19,\'<image>/04_array.js\');$x778=&$x779[0];list(,$W778,$S778,$U778)=$x779;if(!(is_object($x778)&&isset($x778->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x782=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',251,19,\'<image>/04_array.js\');$_TypeError=&$x782[0];list(,$WTypeError,$STypeError,$UTypeError)=$x782;$x783=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x784=$x783($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x784->class)&&$x784->class===\'Error\'&&!isset($x784->properties[\'file\'])&&!isset($x784->properties[\'line\'])&&!isset($x784->properties[\'column\'])){$x784->properties[\'file\']=\'<image>/04_array.js\';$x784->properties[\'line\']=251;$x784->properties[\'column\']=19;$x784->attributes[\'file\']=$x784->attributes[\'line\']=$x784->attributes[\'column\']=0;}throw new JSException($x784,251,19,\'<image>/04_array.js\');}$x780=$x778->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x781=$x780($global,$x774,$x778,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_17($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x798 = 0;; ++$x798) {
if ($x798 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x797 =& $scope->properties['arguments'];
$x797->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x797->properties[$i] = $args[$i];
$x797->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x799, $W799, $S799, $U799);
$x800 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 258, 19, '<image>/04_array.js');
$x799 =& $x800[0]; list(,$W799,$S799,$U799) = $x800;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x799, $global) - JS::toNumber(1, $global));
}
if ($x798 !== 0) {
$x801 = --$_i;
}
$x802 = JS::toPrimitive($_i, $global);
$x803 = JS::toPrimitive(0, $global);
$x804 = !(is_string($x802) && is_string($x803) ? strcmp($x802, $x803) < 0 : (!is_nan($x805 = JS::toNumber($x802, $global)) && !is_nan($x806 = JS::toNumber($x803, $global)) && $x805 < $x806));
if (!JS::toBoolean($x804, $global)) { break; }

unset($x807, $W807, $S807, $U807);
$x808 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 259, 36, '<image>/04_array.js');
$x807 =& $x808[0]; list(,$W807,$S807,$U807) = $x808;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x811 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 259, 12, '<image>/04_array.js');
$_arguments =& $x811[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x811;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x812 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 259, 12, '<image>/04_array.js');
$_ReferenceError =& $x812[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x812;
$x813 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 12);
$x814 = $x813($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x814->class) && $x814->class === 'Error' && !isset($x814->properties['file']) && !isset($x814->properties['line']) && !isset($x814->properties['column'])) {$x814->properties['file'] = '<image>/04_array.js';$x814->properties['line'] = 259;$x814->properties['column'] = 12;$x814->attributes['file'] = $x814->attributes['line'] = $x814->attributes['column'] = 0; }
throw new JSException($x814, 259, 12, '<image>/04_array.js');
}
unset($x815, $W815, $S815, $U815);
$x816 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 259, 21, '<image>/04_array.js');
$x815 =& $x816[0]; list(,$W815,$S815,$U815) = $x816;
$x809 = JS::toPrimitive($_i, $global);
$x810 = JS::toPrimitive($x815, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x817 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 259, 30, '<image>/04_array.js');
$_TypeError =& $x817[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x817;
$x818 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x819 = $x818($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x819->class) && $x819->class === 'Error' && !isset($x819->properties['file']) && !isset($x819->properties['line']) && !isset($x819->properties['column'])) {$x819->properties['file'] = '<image>/04_array.js';$x819->properties['line'] = 259;$x819->properties['column'] = 30;$x819->attributes['file'] = $x819->attributes['line'] = $x819->attributes['column'] = 0; }
throw new JSException($x819, 259, 30, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x820, $W820, $S820, $U820);
$x821 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) (is_string($x809) || is_string($x810) ? JS::toString($x809, $global) . JS::toString($x810, $global) : JS::toNumber($x809, $global) + JS::toNumber($x810, $global)), 259, 30, '<image>/04_array.js');
$x820 =& $x821[0]; list(,$W820,$S820,$U820) = $x821;
if ($U820 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[(is_string($x809) || is_string($x810) ? JS::toString($x809, $global) . JS::toString($x810, $global) : JS::toNumber($x809, $global) + JS::toNumber($x810, $global))] = $x820; $x820 =& $leThis->properties[(is_string($x809) || is_string($x810) ? JS::toString($x809, $global) . JS::toString($x810, $global) : JS::toNumber($x809, $global) + JS::toNumber($x810, $global))]; $leThis->attributes[(is_string($x809) || is_string($x810) ? JS::toString($x809, $global) . JS::toString($x810, $global) : JS::toNumber($x809, $global) + JS::toNumber($x810, $global))] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U820 = FALSE; $W820 = TRUE; }
if (isset($S820)) {
$x823 = $S820->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x824 = $x823($global, $leThis, $S820, array($x807), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x822 = $x824;
} else {
if (!$U820) {$x822 = $x807;if ($W820) { $x820 = $x807; }  }
else { $x822 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int((is_string($x809) || is_string($x810) ? JS::toString($x809, $global) . JS::toString($x810, $global) : JS::toNumber($x809, $global) + JS::toNumber($x810, $global))) && (is_string($x809) || is_string($x810) ? JS::toString($x809, $global) . JS::toString($x810, $global) : JS::toNumber($x809, $global) + JS::toNumber($x810, $global)) >= $leThis->properties['length']) { $leThis->properties['length'] = (is_string($x809) || is_string($x810) ? JS::toString($x809, $global) . JS::toString($x810, $global) : JS::toNumber($x809, $global) + JS::toNumber($x810, $global)) + 1; };
};
for ($x825 = 0;; ++$x825) {
if ($x825 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x826 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 262, 22, '<image>/04_array.js');
$_arguments =& $x826[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x826;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x827 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 262, 22, '<image>/04_array.js');
$_ReferenceError =& $x827[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x827;
$x828 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 262, 22);
$x829 = $x828($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x829->class) && $x829->class === 'Error' && !isset($x829->properties['file']) && !isset($x829->properties['line']) && !isset($x829->properties['column'])) {$x829->properties['file'] = '<image>/04_array.js';$x829->properties['line'] = 262;$x829->properties['column'] = 22;$x829->attributes['file'] = $x829->attributes['line'] = $x829->attributes['column'] = 0; }
throw new JSException($x829, 262, 22, '<image>/04_array.js');
}
unset($x830, $W830, $S830, $U830);
$x831 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 262, 31, '<image>/04_array.js');
$x830 =& $x831[0]; list(,$W830,$S830,$U830) = $x831;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x830;
}
if ($x825 !== 0) {
$x832 = ++$_i;
}
$x833 = JS::toPrimitive($_i, $global);
$x834 = JS::toPrimitive($_l, $global);
$x835 = (is_string($x833) && is_string($x834) ? strcmp($x833, $x834) < 0 : (!is_nan($x836 = JS::toNumber($x833, $global)) && !is_nan($x837 = JS::toNumber($x834, $global)) && $x836 < $x837));
if (!JS::toBoolean($x835, $global)) { break; }

unset($x838, $W838, $S838, $U838);
$x839 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) $_i, 263, 22, '<image>/04_array.js');
$x838 =& $x839[0]; list(,$W838,$S838,$U838) = $x839;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x840 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 263, 11, '<image>/04_array.js');
$_TypeError =& $x840[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x840;
$x841 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x842 = $x841($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x842->class) && $x842->class === 'Error' && !isset($x842->properties['file']) && !isset($x842->properties['line']) && !isset($x842->properties['column'])) {$x842->properties['file'] = '<image>/04_array.js';$x842->properties['line'] = 263;$x842->properties['column'] = 11;$x842->attributes['file'] = $x842->attributes['line'] = $x842->attributes['column'] = 0; }
throw new JSException($x842, 263, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x843, $W843, $S843, $U843);
$x844 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, (string) $_i, 263, 11, '<image>/04_array.js');
$x843 =& $x844[0]; list(,$W843,$S843,$U843) = $x844;
if ($U843 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$_i] = $x843; $x843 =& $leThis->properties[$_i]; $leThis->attributes[$_i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U843 = FALSE; $W843 = TRUE; }
if (isset($S843)) {
$x846 = $S843->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x847 = $x846($global, $leThis, $S843, array($x838), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x845 = $x847;
} else {
if (!$U843) {$x845 = $x838;if ($W843) { $x843 = $x838; }  }
else { $x845 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
unset($x848, $W848, $S848, $U848);
$x849 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 266, 13, '<image>/04_array.js');
$x848 =& $x849[0]; list(,$W848,$S848,$U848) = $x849;
return $x848;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_17($global,$leThis,$fn,$args,$constructor=FALSE){for($x798=0;;++$x798){if($x798===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x797=&$scope->properties[\'arguments\'];$x797->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x797->properties[$i]=$args[$i];$x797->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x799,$W799,$S799,$U799);$x800=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',258,19,\'<image>/04_array.js\');$x799=&$x800[0];list(,$W799,$S799,$U799)=$x800;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x799,$global)-JS::toNumber(1,$global));}if($x798!==0){$x801=--$_i;}$x802=JS::toPrimitive($_i,$global);$x803=JS::toPrimitive(0,$global);$x804=!(is_string($x802)&&is_string($x803)?strcmp($x802,$x803)<0:(!is_nan($x805=JS::toNumber($x802,$global))&&!is_nan($x806=JS::toNumber($x803,$global))&&$x805<$x806));if(!JS::toBoolean($x804,$global)){break;}unset($x807,$W807,$S807,$U807);$x808=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,259,36,\'<image>/04_array.js\');$x807=&$x808[0];list(,$W807,$S807,$U807)=$x808;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x811=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',259,12,\'<image>/04_array.js\');$_arguments=&$x811[0];list(,$Warguments,$Sarguments,$Uarguments)=$x811;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x812=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',259,12,\'<image>/04_array.js\');$_ReferenceError=&$x812[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x812;$x813=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,12);$x814=$x813($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x814->class)&&$x814->class===\'Error\'&&!isset($x814->properties[\'file\'])&&!isset($x814->properties[\'line\'])&&!isset($x814->properties[\'column\'])){$x814->properties[\'file\']=\'<image>/04_array.js\';$x814->properties[\'line\']=259;$x814->properties[\'column\']=12;$x814->attributes[\'file\']=$x814->attributes[\'line\']=$x814->attributes[\'column\']=0;}throw new JSException($x814,259,12,\'<image>/04_array.js\');}unset($x815,$W815,$S815,$U815);$x816=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',259,21,\'<image>/04_array.js\');$x815=&$x816[0];list(,$W815,$S815,$U815)=$x816;$x809=JS::toPrimitive($_i,$global);$x810=JS::toPrimitive($x815,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x817=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',259,30,\'<image>/04_array.js\');$_TypeError=&$x817[0];list(,$WTypeError,$STypeError,$UTypeError)=$x817;$x818=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x819=$x818($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x819->class)&&$x819->class===\'Error\'&&!isset($x819->properties[\'file\'])&&!isset($x819->properties[\'line\'])&&!isset($x819->properties[\'column\'])){$x819->properties[\'file\']=\'<image>/04_array.js\';$x819->properties[\'line\']=259;$x819->properties[\'column\']=30;$x819->attributes[\'file\']=$x819->attributes[\'line\']=$x819->attributes[\'column\']=0;}throw new JSException($x819,259,30,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x820,$W820,$S820,$U820);$x821=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)(is_string($x809)||is_string($x810)?JS::toString($x809,$global).JS::toString($x810,$global):JS::toNumber($x809,$global)+JS::toNumber($x810,$global)),259,30,\'<image>/04_array.js\');$x820=&$x821[0];list(,$W820,$S820,$U820)=$x821;if($U820&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[(is_string($x809)||is_string($x810)?JS::toString($x809,$global).JS::toString($x810,$global):JS::toNumber($x809,$global)+JS::toNumber($x810,$global))]=$x820;$x820=&$leThis->properties[(is_string($x809)||is_string($x810)?JS::toString($x809,$global).JS::toString($x810,$global):JS::toNumber($x809,$global)+JS::toNumber($x810,$global))];$leThis->attributes[(is_string($x809)||is_string($x810)?JS::toString($x809,$global).JS::toString($x810,$global):JS::toNumber($x809,$global)+JS::toNumber($x810,$global))]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U820=FALSE;$W820=TRUE;}if(isset($S820)){$x823=$S820->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x824=$x823($global,$leThis,$S820,array($x807),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x822=$x824;}else{if(!$U820){$x822=$x807;if($W820){$x820=$x807;}}else{$x822=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int((is_string($x809)||is_string($x810)?JS::toString($x809,$global).JS::toString($x810,$global):JS::toNumber($x809,$global)+JS::toNumber($x810,$global)))&&(is_string($x809)||is_string($x810)?JS::toString($x809,$global).JS::toString($x810,$global):JS::toNumber($x809,$global)+JS::toNumber($x810,$global))>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=(is_string($x809)||is_string($x810)?JS::toString($x809,$global).JS::toString($x810,$global):JS::toNumber($x809,$global)+JS::toNumber($x810,$global))+1;}}for($x825=0;;++$x825){if($x825===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x826=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',262,22,\'<image>/04_array.js\');$_arguments=&$x826[0];list(,$Warguments,$Sarguments,$Uarguments)=$x826;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x827=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',262,22,\'<image>/04_array.js\');$_ReferenceError=&$x827[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x827;$x828=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',262,22);$x829=$x828($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x829->class)&&$x829->class===\'Error\'&&!isset($x829->properties[\'file\'])&&!isset($x829->properties[\'line\'])&&!isset($x829->properties[\'column\'])){$x829->properties[\'file\']=\'<image>/04_array.js\';$x829->properties[\'line\']=262;$x829->properties[\'column\']=22;$x829->attributes[\'file\']=$x829->attributes[\'line\']=$x829->attributes[\'column\']=0;}throw new JSException($x829,262,22,\'<image>/04_array.js\');}unset($x830,$W830,$S830,$U830);$x831=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',262,31,\'<image>/04_array.js\');$x830=&$x831[0];list(,$W830,$S830,$U830)=$x831;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x830;}if($x825!==0){$x832=++$_i;}$x833=JS::toPrimitive($_i,$global);$x834=JS::toPrimitive($_l,$global);$x835=(is_string($x833)&&is_string($x834)?strcmp($x833,$x834)<0:(!is_nan($x836=JS::toNumber($x833,$global))&&!is_nan($x837=JS::toNumber($x834,$global))&&$x836<$x837));if(!JS::toBoolean($x835,$global)){break;}unset($x838,$W838,$S838,$U838);$x839=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)$_i,263,22,\'<image>/04_array.js\');$x838=&$x839[0];list(,$W838,$S838,$U838)=$x839;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x840=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',263,11,\'<image>/04_array.js\');$_TypeError=&$x840[0];list(,$WTypeError,$STypeError,$UTypeError)=$x840;$x841=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x842=$x841($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x842->class)&&$x842->class===\'Error\'&&!isset($x842->properties[\'file\'])&&!isset($x842->properties[\'line\'])&&!isset($x842->properties[\'column\'])){$x842->properties[\'file\']=\'<image>/04_array.js\';$x842->properties[\'line\']=263;$x842->properties[\'column\']=11;$x842->attributes[\'file\']=$x842->attributes[\'line\']=$x842->attributes[\'column\']=0;}throw new JSException($x842,263,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x843,$W843,$S843,$U843);$x844=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,(string)$_i,263,11,\'<image>/04_array.js\');$x843=&$x844[0];list(,$W843,$S843,$U843)=$x844;if($U843&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$_i]=$x843;$x843=&$leThis->properties[$_i];$leThis->attributes[$_i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U843=FALSE;$W843=TRUE;}if(isset($S843)){$x846=$S843->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x847=$x846($global,$leThis,$S843,array($x838),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x845=$x847;}else{if(!$U843){$x845=$x838;if($W843){$x843=$x838;}}else{$x845=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}unset($x848,$W848,$S848,$U848);$x849=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',266,13,\'<image>/04_array.js\');$x848=&$x849[0];list(,$W848,$S848,$U848)=$x849;return$x848;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x862 =& $scope->properties['arguments'];
$x862->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x862->properties[$i] = $args[$i];
$x862->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x863 = $_from;
if (!JS::toBoolean($x863, $global)) {
$x863 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x863;
$x864 = JS::toPrimitive($_from, $global);
$x865 = JS::toPrimitive(0, $global);
$x866 = (is_string($x864) && is_string($x865) ? strcmp($x864, $x865) < 0 : (!is_nan($x867 = JS::toNumber($x864, $global)) && !is_nan($x868 = JS::toNumber($x865, $global)) && $x867 < $x868));
if (JS::toBoolean($x866, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x869 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Math', 273, 10, '<image>/04_array.js');
$_Math =& $x869[0]; list(,$WMath,$SMath,$UMath) = $x869;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x870 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 273, 10, '<image>/04_array.js');
$_ReferenceError =& $x870[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x870;
$x871 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 10);
$x872 = $x871($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x872->class) && $x872->class === 'Error' && !isset($x872->properties['file']) && !isset($x872->properties['line']) && !isset($x872->properties['column'])) {$x872->properties['file'] = '<image>/04_array.js';$x872->properties['line'] = 273;$x872->properties['column'] = 10;$x872->attributes['file'] = $x872->attributes['line'] = $x872->attributes['column'] = 0; }
throw new JSException($x872, 273, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x874 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 273, 18, '<image>/04_array.js');
$_TypeError =& $x874[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x874;
$x875 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x876 = $x875($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x876->class) && $x876->class === 'Error' && !isset($x876->properties['file']) && !isset($x876->properties['line']) && !isset($x876->properties['column'])) {$x876->properties['file'] = '<image>/04_array.js';$x876->properties['line'] = 273;$x876->properties['column'] = 18;$x876->attributes['file'] = $x876->attributes['line'] = $x876->attributes['column'] = 0; }
throw new JSException($x876, 273, 18, '<image>/04_array.js');
}
$x873 = JS::toObject($_Math, $global);
unset($x877, $W877, $S877, $U877);
$x878 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x873, (string) 'max', 273, 18, '<image>/04_array.js');
$x877 =& $x878[0]; list(,$W877,$S877,$U877) = $x878;
unset($x881, $W881, $S881, $U881);
$x882 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 273, 23, '<image>/04_array.js');
$x881 =& $x882[0]; list(,$W881,$S881,$U881) = $x882;
$x879 = JS::toPrimitive($x881, $global);
$x880 = JS::toPrimitive($_from, $global);
if (!(is_object($x877) && isset($x877->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x885 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 273, 18, '<image>/04_array.js');
$_TypeError =& $x885[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x885;
$x886 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x887 = $x886($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x887->class) && $x887->class === 'Error' && !isset($x887->properties['file']) && !isset($x887->properties['line']) && !isset($x887->properties['column'])) {$x887->properties['file'] = '<image>/04_array.js';$x887->properties['line'] = 273;$x887->properties['column'] = 18;$x887->attributes['file'] = $x887->attributes['line'] = $x887->attributes['column'] = 0; }
throw new JSException($x887, 273, 18, '<image>/04_array.js');
}
$x883 = $x877->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x884 = $x883($global, $x873, $x877, array((is_string($x879) || is_string($x880) ? JS::toString($x879, $global) . JS::toString($x880, $global) : JS::toNumber($x879, $global) + JS::toNumber($x880, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x884;;
};
for ($x888 = 0;; ++$x888) {
if ($x888 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $_from;
unset($x889, $W889, $S889, $U889);
$x890 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 276, 29, '<image>/04_array.js');
$x889 =& $x890[0]; list(,$W889,$S889,$U889) = $x890;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x889;
}
if ($x888 !== 0) {
$x891 = ++$_i;
}
$x892 = JS::toPrimitive($_i, $global);
$x893 = JS::toPrimitive($_l, $global);
$x894 = (is_string($x892) && is_string($x893) ? strcmp($x892, $x893) < 0 : (!is_nan($x895 = JS::toNumber($x892, $global)) && !is_nan($x896 = JS::toNumber($x893, $global)) && $x895 < $x896));
if (!JS::toBoolean($x894, $global)) { break; }

unset($x898, $W898, $S898, $U898);
$x899 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 277, 11, '<image>/04_array.js');
$x898 =& $x899[0]; list(,$W898,$S898,$U898) = $x899;
$x897 = (((gettype($x898) === gettype($_search) && $x898 === $_search))|| (((is_float($x898) || is_int($x898)) && (is_float($_search) || is_int($_search))) && $x898 == $_search));
if (JS::toBoolean($x897, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x862=&$scope->properties[\'arguments\'];$x862->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x862->properties[$i]=$args[$i];$x862->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x863=$_from;if(!JS::toBoolean($x863,$global)){$x863=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x863;$x864=JS::toPrimitive($_from,$global);$x865=JS::toPrimitive(0,$global);$x866=(is_string($x864)&&is_string($x865)?strcmp($x864,$x865)<0:(!is_nan($x867=JS::toNumber($x864,$global))&&!is_nan($x868=JS::toNumber($x865,$global))&&$x867<$x868));if(JS::toBoolean($x866,$global)){unset($_Math,$WMath,$SMath,$UMath);$x869=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Math\',273,10,\'<image>/04_array.js\');$_Math=&$x869[0];list(,$WMath,$SMath,$UMath)=$x869;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x870=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',273,10,\'<image>/04_array.js\');$_ReferenceError=&$x870[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x870;$x871=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,10);$x872=$x871($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x872->class)&&$x872->class===\'Error\'&&!isset($x872->properties[\'file\'])&&!isset($x872->properties[\'line\'])&&!isset($x872->properties[\'column\'])){$x872->properties[\'file\']=\'<image>/04_array.js\';$x872->properties[\'line\']=273;$x872->properties[\'column\']=10;$x872->attributes[\'file\']=$x872->attributes[\'line\']=$x872->attributes[\'column\']=0;}throw new JSException($x872,273,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x874=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',273,18,\'<image>/04_array.js\');$_TypeError=&$x874[0];list(,$WTypeError,$STypeError,$UTypeError)=$x874;$x875=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x876=$x875($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x876->class)&&$x876->class===\'Error\'&&!isset($x876->properties[\'file\'])&&!isset($x876->properties[\'line\'])&&!isset($x876->properties[\'column\'])){$x876->properties[\'file\']=\'<image>/04_array.js\';$x876->properties[\'line\']=273;$x876->properties[\'column\']=18;$x876->attributes[\'file\']=$x876->attributes[\'line\']=$x876->attributes[\'column\']=0;}throw new JSException($x876,273,18,\'<image>/04_array.js\');}$x873=JS::toObject($_Math,$global);unset($x877,$W877,$S877,$U877);$x878=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x873,(string)\'max\',273,18,\'<image>/04_array.js\');$x877=&$x878[0];list(,$W877,$S877,$U877)=$x878;unset($x881,$W881,$S881,$U881);$x882=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',273,23,\'<image>/04_array.js\');$x881=&$x882[0];list(,$W881,$S881,$U881)=$x882;$x879=JS::toPrimitive($x881,$global);$x880=JS::toPrimitive($_from,$global);if(!(is_object($x877)&&isset($x877->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x885=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',273,18,\'<image>/04_array.js\');$_TypeError=&$x885[0];list(,$WTypeError,$STypeError,$UTypeError)=$x885;$x886=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x887=$x886($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x887->class)&&$x887->class===\'Error\'&&!isset($x887->properties[\'file\'])&&!isset($x887->properties[\'line\'])&&!isset($x887->properties[\'column\'])){$x887->properties[\'file\']=\'<image>/04_array.js\';$x887->properties[\'line\']=273;$x887->properties[\'column\']=18;$x887->attributes[\'file\']=$x887->attributes[\'line\']=$x887->attributes[\'column\']=0;}throw new JSException($x887,273,18,\'<image>/04_array.js\');}$x883=$x877->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x884=$x883($global,$x873,$x877,array((is_string($x879)||is_string($x880)?JS::toString($x879,$global).JS::toString($x880,$global):JS::toNumber($x879,$global)+JS::toNumber($x880,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x884;}for($x888=0;;++$x888){if($x888===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$_from;unset($x889,$W889,$S889,$U889);$x890=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',276,29,\'<image>/04_array.js\');$x889=&$x890[0];list(,$W889,$S889,$U889)=$x890;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x889;}if($x888!==0){$x891=++$_i;}$x892=JS::toPrimitive($_i,$global);$x893=JS::toPrimitive($_l,$global);$x894=(is_string($x892)&&is_string($x893)?strcmp($x892,$x893)<0:(!is_nan($x895=JS::toNumber($x892,$global))&&!is_nan($x896=JS::toNumber($x893,$global))&&$x895<$x896));if(!JS::toBoolean($x894,$global)){break;}unset($x898,$W898,$S898,$U898);$x899=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,277,11,\'<image>/04_array.js\');$x898=&$x899[0];list(,$W898,$S898,$U898)=$x899;$x897=(((gettype($x898)===gettype($_search)&&$x898===$_search))||(((is_float($x898)||is_int($x898))&&(is_float($_search)||is_int($_search)))&&$x898==$_search));if(JS::toBoolean($x897,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x912 =& $scope->properties['arguments'];
$x912->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x912->properties[$i] = $args[$i];
$x912->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x913 = $_from;
if (!JS::toBoolean($x913, $global)) {
$x913 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x913;
$x914 = JS::toPrimitive($_from, $global);
$x915 = JS::toPrimitive(0, $global);
$x916 = (is_string($x914) && is_string($x915) ? strcmp($x914, $x915) < 0 : (!is_nan($x917 = JS::toNumber($x914, $global)) && !is_nan($x918 = JS::toNumber($x915, $global)) && $x917 < $x918));
if (JS::toBoolean($x916, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x919 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Math', 289, 10, '<image>/04_array.js');
$_Math =& $x919[0]; list(,$WMath,$SMath,$UMath) = $x919;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x920 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 289, 10, '<image>/04_array.js');
$_ReferenceError =& $x920[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x920;
$x921 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 10);
$x922 = $x921($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x922->class) && $x922->class === 'Error' && !isset($x922->properties['file']) && !isset($x922->properties['line']) && !isset($x922->properties['column'])) {$x922->properties['file'] = '<image>/04_array.js';$x922->properties['line'] = 289;$x922->properties['column'] = 10;$x922->attributes['file'] = $x922->attributes['line'] = $x922->attributes['column'] = 0; }
throw new JSException($x922, 289, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x924 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 289, 18, '<image>/04_array.js');
$_TypeError =& $x924[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x924;
$x925 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x926 = $x925($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x926->class) && $x926->class === 'Error' && !isset($x926->properties['file']) && !isset($x926->properties['line']) && !isset($x926->properties['column'])) {$x926->properties['file'] = '<image>/04_array.js';$x926->properties['line'] = 289;$x926->properties['column'] = 18;$x926->attributes['file'] = $x926->attributes['line'] = $x926->attributes['column'] = 0; }
throw new JSException($x926, 289, 18, '<image>/04_array.js');
}
$x923 = JS::toObject($_Math, $global);
unset($x927, $W927, $S927, $U927);
$x928 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x923, (string) 'max', 289, 18, '<image>/04_array.js');
$x927 =& $x928[0]; list(,$W927,$S927,$U927) = $x928;
unset($x931, $W931, $S931, $U931);
$x932 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 289, 23, '<image>/04_array.js');
$x931 =& $x932[0]; list(,$W931,$S931,$U931) = $x932;
$x929 = JS::toPrimitive($x931, $global);
$x930 = JS::toPrimitive($_from, $global);
if (!(is_object($x927) && isset($x927->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x935 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 289, 18, '<image>/04_array.js');
$_TypeError =& $x935[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x935;
$x936 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x937 = $x936($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x937->class) && $x937->class === 'Error' && !isset($x937->properties['file']) && !isset($x937->properties['line']) && !isset($x937->properties['column'])) {$x937->properties['file'] = '<image>/04_array.js';$x937->properties['line'] = 289;$x937->properties['column'] = 18;$x937->attributes['file'] = $x937->attributes['line'] = $x937->attributes['column'] = 0; }
throw new JSException($x937, 289, 18, '<image>/04_array.js');
}
$x933 = $x927->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x934 = $x933($global, $x923, $x927, array((is_string($x929) || is_string($x930) ? JS::toString($x929, $global) . JS::toString($x930, $global) : JS::toNumber($x929, $global) + JS::toNumber($x930, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x934;;
};
unset($x942, $W942, $S942, $U942);
$x943 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 292, 10, '<image>/04_array.js');
$x942 =& $x943[0]; list(,$W942,$S942,$U942) = $x943;
$x939 = JS::toPrimitive($x942, $global);
$x940 = JS::toPrimitive(1, $global);
$x941 = (is_string($x939) && is_string($x940) ? strcmp($x939, $x940) < 0 : (!is_nan($x944 = JS::toNumber($x939, $global)) && !is_nan($x945 = JS::toNumber($x940, $global)) && $x944 < $x945));
$x938 = $x941;
if (!JS::toBoolean($x938, $global)) {
unset($x949, $W949, $S949, $U949);
$x950 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 292, 37, '<image>/04_array.js');
$x949 =& $x950[0]; list(,$W949,$S949,$U949) = $x950;
$x946 = JS::toPrimitive($_from, $global);
$x947 = JS::toPrimitive($x949, $global);
$x948 = !(is_string($x946) && is_string($x947) ? strcmp($x946, $x947) < 0 : (!is_nan($x951 = JS::toNumber($x946, $global)) && !is_nan($x952 = JS::toNumber($x947, $global)) && $x951 < $x952));
$x938 = $x948; }
if (JS::toBoolean($x938, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
for ($x953 = 0;; ++$x953) {
if ($x953 === 0) {
unset($x954, $W954, $S954, $U954);
$x955 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 296, 19, '<image>/04_array.js');
$x954 =& $x955[0]; list(,$W954,$S954,$U954) = $x955;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x954, $global) - JS::toNumber(1, $global));
}
if ($x953 !== 0) {
$x956 = --$_i;
}
$x957 = JS::toPrimitive($_i, $global);
$x958 = JS::toPrimitive($_from, $global);
$x959 = !(is_string($x957) && is_string($x958) ? strcmp($x957, $x958) < 0 : (!is_nan($x960 = JS::toNumber($x957, $global)) && !is_nan($x961 = JS::toNumber($x958, $global)) && $x960 < $x961));
if (!JS::toBoolean($x959, $global)) { break; }

unset($x965, $W965, $S965, $U965);
$x966 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 297, 11, '<image>/04_array.js');
$x965 =& $x966[0]; list(,$W965,$S965,$U965) = $x966;
$x963 = $x965;
$x964 = $_search;
if (gettype($x963) === gettype($x964)) { $x962 = $x963===$x964; }
else if ($x963 === JS::$undefined && $x964 === NULL || $x963 === NULL && $x964 === JS::$undefined) { $x962 = TRUE; }
else if ($x963 === NULL || $x964 === NULL) { $x962 = FALSE; }
else { $x963 = JS::toPrimitive($x963, $global); $x964 = JS::toPrimitive($x964, $global); 
if (is_bool($x963)) { $x963 = (int) $x963; }
if (is_bool($x964)) { $x964 = (int) $x964; }
if (is_numeric($x963) || is_numeric($x964)) { $x963 = JS::toNumber($x963, $global); $x964 = JS::toNumber($x964, $global); }
$x962 = $x963===$x964;}
if (JS::toBoolean($x962, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x912=&$scope->properties[\'arguments\'];$x912->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x912->properties[$i]=$args[$i];$x912->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x913=$_from;if(!JS::toBoolean($x913,$global)){$x913=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x913;$x914=JS::toPrimitive($_from,$global);$x915=JS::toPrimitive(0,$global);$x916=(is_string($x914)&&is_string($x915)?strcmp($x914,$x915)<0:(!is_nan($x917=JS::toNumber($x914,$global))&&!is_nan($x918=JS::toNumber($x915,$global))&&$x917<$x918));if(JS::toBoolean($x916,$global)){unset($_Math,$WMath,$SMath,$UMath);$x919=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'Math\',289,10,\'<image>/04_array.js\');$_Math=&$x919[0];list(,$WMath,$SMath,$UMath)=$x919;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x920=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',289,10,\'<image>/04_array.js\');$_ReferenceError=&$x920[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x920;$x921=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,10);$x922=$x921($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x922->class)&&$x922->class===\'Error\'&&!isset($x922->properties[\'file\'])&&!isset($x922->properties[\'line\'])&&!isset($x922->properties[\'column\'])){$x922->properties[\'file\']=\'<image>/04_array.js\';$x922->properties[\'line\']=289;$x922->properties[\'column\']=10;$x922->attributes[\'file\']=$x922->attributes[\'line\']=$x922->attributes[\'column\']=0;}throw new JSException($x922,289,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x924=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',289,18,\'<image>/04_array.js\');$_TypeError=&$x924[0];list(,$WTypeError,$STypeError,$UTypeError)=$x924;$x925=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x926=$x925($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x926->class)&&$x926->class===\'Error\'&&!isset($x926->properties[\'file\'])&&!isset($x926->properties[\'line\'])&&!isset($x926->properties[\'column\'])){$x926->properties[\'file\']=\'<image>/04_array.js\';$x926->properties[\'line\']=289;$x926->properties[\'column\']=18;$x926->attributes[\'file\']=$x926->attributes[\'line\']=$x926->attributes[\'column\']=0;}throw new JSException($x926,289,18,\'<image>/04_array.js\');}$x923=JS::toObject($_Math,$global);unset($x927,$W927,$S927,$U927);$x928=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x923,(string)\'max\',289,18,\'<image>/04_array.js\');$x927=&$x928[0];list(,$W927,$S927,$U927)=$x928;unset($x931,$W931,$S931,$U931);$x932=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',289,23,\'<image>/04_array.js\');$x931=&$x932[0];list(,$W931,$S931,$U931)=$x932;$x929=JS::toPrimitive($x931,$global);$x930=JS::toPrimitive($_from,$global);if(!(is_object($x927)&&isset($x927->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x935=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',289,18,\'<image>/04_array.js\');$_TypeError=&$x935[0];list(,$WTypeError,$STypeError,$UTypeError)=$x935;$x936=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x937=$x936($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x937->class)&&$x937->class===\'Error\'&&!isset($x937->properties[\'file\'])&&!isset($x937->properties[\'line\'])&&!isset($x937->properties[\'column\'])){$x937->properties[\'file\']=\'<image>/04_array.js\';$x937->properties[\'line\']=289;$x937->properties[\'column\']=18;$x937->attributes[\'file\']=$x937->attributes[\'line\']=$x937->attributes[\'column\']=0;}throw new JSException($x937,289,18,\'<image>/04_array.js\');}$x933=$x927->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x934=$x933($global,$x923,$x927,array((is_string($x929)||is_string($x930)?JS::toString($x929,$global).JS::toString($x930,$global):JS::toNumber($x929,$global)+JS::toNumber($x930,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x934;}unset($x942,$W942,$S942,$U942);$x943=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',292,10,\'<image>/04_array.js\');$x942=&$x943[0];list(,$W942,$S942,$U942)=$x943;$x939=JS::toPrimitive($x942,$global);$x940=JS::toPrimitive(1,$global);$x941=(is_string($x939)&&is_string($x940)?strcmp($x939,$x940)<0:(!is_nan($x944=JS::toNumber($x939,$global))&&!is_nan($x945=JS::toNumber($x940,$global))&&$x944<$x945));$x938=$x941;if(!JS::toBoolean($x938,$global)){unset($x949,$W949,$S949,$U949);$x950=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',292,37,\'<image>/04_array.js\');$x949=&$x950[0];list(,$W949,$S949,$U949)=$x950;$x946=JS::toPrimitive($_from,$global);$x947=JS::toPrimitive($x949,$global);$x948=!(is_string($x946)&&is_string($x947)?strcmp($x946,$x947)<0:(!is_nan($x951=JS::toNumber($x946,$global))&&!is_nan($x952=JS::toNumber($x947,$global))&&$x951<$x952));$x938=$x948;}if(JS::toBoolean($x938,$global)){return(-1.0*JS::toNumber(1,$global));}for($x953=0;;++$x953){if($x953===0){unset($x954,$W954,$S954,$U954);$x955=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',296,19,\'<image>/04_array.js\');$x954=&$x955[0];list(,$W954,$S954,$U954)=$x955;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x954,$global)-JS::toNumber(1,$global));}if($x953!==0){$x956=--$_i;}$x957=JS::toPrimitive($_i,$global);$x958=JS::toPrimitive($_from,$global);$x959=!(is_string($x957)&&is_string($x958)?strcmp($x957,$x958)<0:(!is_nan($x960=JS::toNumber($x957,$global))&&!is_nan($x961=JS::toNumber($x958,$global))&&$x960<$x961));if(!JS::toBoolean($x959,$global)){break;}unset($x965,$W965,$S965,$U965);$x966=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,297,11,\'<image>/04_array.js\');$x965=&$x966[0];list(,$W965,$S965,$U965)=$x966;$x963=$x965;$x964=$_search;if(gettype($x963)===gettype($x964)){$x962=$x963===$x964;}else if($x963===JS::$undefined&&$x964===NULL||$x963===NULL&&$x964===JS::$undefined){$x962=TRUE;}else if($x963===NULL||$x964===NULL){$x962=FALSE;}else{$x963=JS::toPrimitive($x963,$global);$x964=JS::toPrimitive($x964,$global);if(is_bool($x963)){$x963=(int)$x963;}if(is_bool($x964)){$x964=(int)$x964;}if(is_numeric($x963)||is_numeric($x964)){$x963=JS::toNumber($x963,$global);$x964=JS::toNumber($x964,$global);}$x962=$x963===$x964;}if(JS::toBoolean($x962,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x979 =& $scope->properties['arguments'];
$x979->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x979->properties[$i] = $args[$i];
$x979->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x983 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 308, 6, '<image>/04_array.js');
$_arguments =& $x983[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x983;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x984 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 308, 6, '<image>/04_array.js');
$_ReferenceError =& $x984[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x984;
$x985 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 308, 6);
$x986 = $x985($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x986->class) && $x986->class === 'Error' && !isset($x986->properties['file']) && !isset($x986->properties['line']) && !isset($x986->properties['column'])) {$x986->properties['file'] = '<image>/04_array.js';$x986->properties['line'] = 308;$x986->properties['column'] = 6;$x986->attributes['file'] = $x986->attributes['line'] = $x986->attributes['column'] = 0; }
throw new JSException($x986, 308, 6, '<image>/04_array.js');
}
unset($x987, $W987, $S987, $U987);
$x988 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 308, 15, '<image>/04_array.js');
$x987 =& $x988[0]; list(,$W987,$S987,$U987) = $x988;
$x980 = JS::toPrimitive($x987, $global);
$x981 = JS::toPrimitive(1, $global);
$x982 = (is_string($x981) && is_string($x980) ? strcmp($x981, $x980) < 0 : (!is_nan($x989 = JS::toNumber($x981, $global)) && !is_nan($x990 = JS::toNumber($x980, $global)) && $x989 < $x990));
if (JS::toBoolean($x982, $global)) {
unset($x991, $W991, $S991, $U991);
$x992 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 309, 22, '<image>/04_array.js');
$x991 =& $x992[0]; list(,$W991,$S991,$U991) = $x992;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x991;;
};
for ($x993 = 0;; ++$x993) {
if ($x993 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x994, $W994, $S994, $U994);
$x995 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 312, 26, '<image>/04_array.js');
$x994 =& $x995[0]; list(,$W994,$S994,$U994) = $x995;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x994;
}
if ($x993 !== 0) {
$x996 = ++$_i;
}
$x997 = JS::toPrimitive($_i, $global);
$x998 = JS::toPrimitive($_l, $global);
$x999 = (is_string($x997) && is_string($x998) ? strcmp($x997, $x998) < 0 : (!is_nan($x1000 = JS::toNumber($x997, $global)) && !is_nan($x1001 = JS::toNumber($x998, $global)) && $x1000 < $x1001));
if (!JS::toBoolean($x999, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1003 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 313, 23, '<image>/04_array.js');
$_TypeError =& $x1003[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1003;
$x1004 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1005 = $x1004($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1005->class) && $x1005->class === 'Error' && !isset($x1005->properties['file']) && !isset($x1005->properties['line']) && !isset($x1005->properties['column'])) {$x1005->properties['file'] = '<image>/04_array.js';$x1005->properties['line'] = 313;$x1005->properties['column'] = 23;$x1005->attributes['file'] = $x1005->attributes['line'] = $x1005->attributes['column'] = 0; }
throw new JSException($x1005, 313, 23, '<image>/04_array.js');
}
$x1002 = JS::toObject($_callbackFn, $global);
unset($x1006, $W1006, $S1006, $U1006);
$x1007 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1002, (string) 'call', 313, 23, '<image>/04_array.js');
$x1006 =& $x1007[0]; list(,$W1006,$S1006,$U1006) = $x1007;
unset($x1008, $W1008, $S1008, $U1008);
$x1009 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 313, 37, '<image>/04_array.js');
$x1008 =& $x1009[0]; list(,$W1008,$S1008,$U1008) = $x1009;
if (!(is_object($x1006) && isset($x1006->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1012 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 313, 23, '<image>/04_array.js');
$_TypeError =& $x1012[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1012;
$x1013 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1014 = $x1013($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1014->class) && $x1014->class === 'Error' && !isset($x1014->properties['file']) && !isset($x1014->properties['line']) && !isset($x1014->properties['column'])) {$x1014->properties['file'] = '<image>/04_array.js';$x1014->properties['line'] = 313;$x1014->properties['column'] = 23;$x1014->attributes['file'] = $x1014->attributes['line'] = $x1014->attributes['column'] = 0; }
throw new JSException($x1014, 313, 23, '<image>/04_array.js');
}
$x1010 = $x1006->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1011 = $x1010($global, $x1002, $x1006, array($_thisArg, $x1008, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x1011, $global)), $global)) {

return false;;
};
};
return true;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x979=&$scope->properties[\'arguments\'];$x979->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x979->properties[$i]=$args[$i];$x979->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x983=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',308,6,\'<image>/04_array.js\');$_arguments=&$x983[0];list(,$Warguments,$Sarguments,$Uarguments)=$x983;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x984=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',308,6,\'<image>/04_array.js\');$_ReferenceError=&$x984[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x984;$x985=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',308,6);$x986=$x985($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x986->class)&&$x986->class===\'Error\'&&!isset($x986->properties[\'file\'])&&!isset($x986->properties[\'line\'])&&!isset($x986->properties[\'column\'])){$x986->properties[\'file\']=\'<image>/04_array.js\';$x986->properties[\'line\']=308;$x986->properties[\'column\']=6;$x986->attributes[\'file\']=$x986->attributes[\'line\']=$x986->attributes[\'column\']=0;}throw new JSException($x986,308,6,\'<image>/04_array.js\');}unset($x987,$W987,$S987,$U987);$x988=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',308,15,\'<image>/04_array.js\');$x987=&$x988[0];list(,$W987,$S987,$U987)=$x988;$x980=JS::toPrimitive($x987,$global);$x981=JS::toPrimitive(1,$global);$x982=(is_string($x981)&&is_string($x980)?strcmp($x981,$x980)<0:(!is_nan($x989=JS::toNumber($x981,$global))&&!is_nan($x990=JS::toNumber($x980,$global))&&$x989<$x990));if(JS::toBoolean($x982,$global)){unset($x991,$W991,$S991,$U991);$x992=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,309,22,\'<image>/04_array.js\');$x991=&$x992[0];list(,$W991,$S991,$U991)=$x992;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x991;}for($x993=0;;++$x993){if($x993===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x994,$W994,$S994,$U994);$x995=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',312,26,\'<image>/04_array.js\');$x994=&$x995[0];list(,$W994,$S994,$U994)=$x995;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x994;}if($x993!==0){$x996=++$_i;}$x997=JS::toPrimitive($_i,$global);$x998=JS::toPrimitive($_l,$global);$x999=(is_string($x997)&&is_string($x998)?strcmp($x997,$x998)<0:(!is_nan($x1000=JS::toNumber($x997,$global))&&!is_nan($x1001=JS::toNumber($x998,$global))&&$x1000<$x1001));if(!JS::toBoolean($x999,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1003=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',313,23,\'<image>/04_array.js\');$_TypeError=&$x1003[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1003;$x1004=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1005=$x1004($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1005->class)&&$x1005->class===\'Error\'&&!isset($x1005->properties[\'file\'])&&!isset($x1005->properties[\'line\'])&&!isset($x1005->properties[\'column\'])){$x1005->properties[\'file\']=\'<image>/04_array.js\';$x1005->properties[\'line\']=313;$x1005->properties[\'column\']=23;$x1005->attributes[\'file\']=$x1005->attributes[\'line\']=$x1005->attributes[\'column\']=0;}throw new JSException($x1005,313,23,\'<image>/04_array.js\');}$x1002=JS::toObject($_callbackFn,$global);unset($x1006,$W1006,$S1006,$U1006);$x1007=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1002,(string)\'call\',313,23,\'<image>/04_array.js\');$x1006=&$x1007[0];list(,$W1006,$S1006,$U1006)=$x1007;unset($x1008,$W1008,$S1008,$U1008);$x1009=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,313,37,\'<image>/04_array.js\');$x1008=&$x1009[0];list(,$W1008,$S1008,$U1008)=$x1009;if(!(is_object($x1006)&&isset($x1006->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1012=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',313,23,\'<image>/04_array.js\');$_TypeError=&$x1012[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1012;$x1013=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1014=$x1013($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1014->class)&&$x1014->class===\'Error\'&&!isset($x1014->properties[\'file\'])&&!isset($x1014->properties[\'line\'])&&!isset($x1014->properties[\'column\'])){$x1014->properties[\'file\']=\'<image>/04_array.js\';$x1014->properties[\'line\']=313;$x1014->properties[\'column\']=23;$x1014->attributes[\'file\']=$x1014->attributes[\'line\']=$x1014->attributes[\'column\']=0;}throw new JSException($x1014,313,23,\'<image>/04_array.js\');}$x1010=$x1006->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1011=$x1010($global,$x1002,$x1006,array($_thisArg,$x1008,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x1011,$global)),$global)){return false;}}return true;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1027 =& $scope->properties['arguments'];
$x1027->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1027->properties[$i] = $args[$i];
$x1027->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1031 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 324, 6, '<image>/04_array.js');
$_arguments =& $x1031[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1031;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1032 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 324, 6, '<image>/04_array.js');
$_ReferenceError =& $x1032[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1032;
$x1033 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 324, 6);
$x1034 = $x1033($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1034->class) && $x1034->class === 'Error' && !isset($x1034->properties['file']) && !isset($x1034->properties['line']) && !isset($x1034->properties['column'])) {$x1034->properties['file'] = '<image>/04_array.js';$x1034->properties['line'] = 324;$x1034->properties['column'] = 6;$x1034->attributes['file'] = $x1034->attributes['line'] = $x1034->attributes['column'] = 0; }
throw new JSException($x1034, 324, 6, '<image>/04_array.js');
}
unset($x1035, $W1035, $S1035, $U1035);
$x1036 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 324, 15, '<image>/04_array.js');
$x1035 =& $x1036[0]; list(,$W1035,$S1035,$U1035) = $x1036;
$x1028 = JS::toPrimitive($x1035, $global);
$x1029 = JS::toPrimitive(1, $global);
$x1030 = (is_string($x1029) && is_string($x1028) ? strcmp($x1029, $x1028) < 0 : (!is_nan($x1037 = JS::toNumber($x1029, $global)) && !is_nan($x1038 = JS::toNumber($x1028, $global)) && $x1037 < $x1038));
if (JS::toBoolean($x1030, $global)) {
unset($x1039, $W1039, $S1039, $U1039);
$x1040 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 325, 22, '<image>/04_array.js');
$x1039 =& $x1040[0]; list(,$W1039,$S1039,$U1039) = $x1040;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1039;;
};
for ($x1041 = 0;; ++$x1041) {
if ($x1041 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1042, $W1042, $S1042, $U1042);
$x1043 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 328, 26, '<image>/04_array.js');
$x1042 =& $x1043[0]; list(,$W1042,$S1042,$U1042) = $x1043;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1042;
}
if ($x1041 !== 0) {
$x1044 = ++$_i;
}
$x1045 = JS::toPrimitive($_i, $global);
$x1046 = JS::toPrimitive($_l, $global);
$x1047 = (is_string($x1045) && is_string($x1046) ? strcmp($x1045, $x1046) < 0 : (!is_nan($x1048 = JS::toNumber($x1045, $global)) && !is_nan($x1049 = JS::toNumber($x1046, $global)) && $x1048 < $x1049));
if (!JS::toBoolean($x1047, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1051 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 329, 22, '<image>/04_array.js');
$_TypeError =& $x1051[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1051;
$x1052 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1053 = $x1052($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1053->class) && $x1053->class === 'Error' && !isset($x1053->properties['file']) && !isset($x1053->properties['line']) && !isset($x1053->properties['column'])) {$x1053->properties['file'] = '<image>/04_array.js';$x1053->properties['line'] = 329;$x1053->properties['column'] = 22;$x1053->attributes['file'] = $x1053->attributes['line'] = $x1053->attributes['column'] = 0; }
throw new JSException($x1053, 329, 22, '<image>/04_array.js');
}
$x1050 = JS::toObject($_callbackFn, $global);
unset($x1054, $W1054, $S1054, $U1054);
$x1055 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1050, (string) 'call', 329, 22, '<image>/04_array.js');
$x1054 =& $x1055[0]; list(,$W1054,$S1054,$U1054) = $x1055;
unset($x1056, $W1056, $S1056, $U1056);
$x1057 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 329, 36, '<image>/04_array.js');
$x1056 =& $x1057[0]; list(,$W1056,$S1056,$U1056) = $x1057;
if (!(is_object($x1054) && isset($x1054->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1060 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 329, 22, '<image>/04_array.js');
$_TypeError =& $x1060[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1060;
$x1061 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1062 = $x1061($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1062->class) && $x1062->class === 'Error' && !isset($x1062->properties['file']) && !isset($x1062->properties['line']) && !isset($x1062->properties['column'])) {$x1062->properties['file'] = '<image>/04_array.js';$x1062->properties['line'] = 329;$x1062->properties['column'] = 22;$x1062->attributes['file'] = $x1062->attributes['line'] = $x1062->attributes['column'] = 0; }
throw new JSException($x1062, 329, 22, '<image>/04_array.js');
}
$x1058 = $x1054->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1059 = $x1058($global, $x1050, $x1054, array($_thisArg, $x1056, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1059, $global)) {

return true;;
};
};
return false;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1027=&$scope->properties[\'arguments\'];$x1027->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1027->properties[$i]=$args[$i];$x1027->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1031=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',324,6,\'<image>/04_array.js\');$_arguments=&$x1031[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1031;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1032=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',324,6,\'<image>/04_array.js\');$_ReferenceError=&$x1032[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1032;$x1033=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',324,6);$x1034=$x1033($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1034->class)&&$x1034->class===\'Error\'&&!isset($x1034->properties[\'file\'])&&!isset($x1034->properties[\'line\'])&&!isset($x1034->properties[\'column\'])){$x1034->properties[\'file\']=\'<image>/04_array.js\';$x1034->properties[\'line\']=324;$x1034->properties[\'column\']=6;$x1034->attributes[\'file\']=$x1034->attributes[\'line\']=$x1034->attributes[\'column\']=0;}throw new JSException($x1034,324,6,\'<image>/04_array.js\');}unset($x1035,$W1035,$S1035,$U1035);$x1036=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',324,15,\'<image>/04_array.js\');$x1035=&$x1036[0];list(,$W1035,$S1035,$U1035)=$x1036;$x1028=JS::toPrimitive($x1035,$global);$x1029=JS::toPrimitive(1,$global);$x1030=(is_string($x1029)&&is_string($x1028)?strcmp($x1029,$x1028)<0:(!is_nan($x1037=JS::toNumber($x1029,$global))&&!is_nan($x1038=JS::toNumber($x1028,$global))&&$x1037<$x1038));if(JS::toBoolean($x1030,$global)){unset($x1039,$W1039,$S1039,$U1039);$x1040=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,325,22,\'<image>/04_array.js\');$x1039=&$x1040[0];list(,$W1039,$S1039,$U1039)=$x1040;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1039;}for($x1041=0;;++$x1041){if($x1041===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1042,$W1042,$S1042,$U1042);$x1043=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',328,26,\'<image>/04_array.js\');$x1042=&$x1043[0];list(,$W1042,$S1042,$U1042)=$x1043;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1042;}if($x1041!==0){$x1044=++$_i;}$x1045=JS::toPrimitive($_i,$global);$x1046=JS::toPrimitive($_l,$global);$x1047=(is_string($x1045)&&is_string($x1046)?strcmp($x1045,$x1046)<0:(!is_nan($x1048=JS::toNumber($x1045,$global))&&!is_nan($x1049=JS::toNumber($x1046,$global))&&$x1048<$x1049));if(!JS::toBoolean($x1047,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1051=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',329,22,\'<image>/04_array.js\');$_TypeError=&$x1051[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1051;$x1052=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1053=$x1052($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1053->class)&&$x1053->class===\'Error\'&&!isset($x1053->properties[\'file\'])&&!isset($x1053->properties[\'line\'])&&!isset($x1053->properties[\'column\'])){$x1053->properties[\'file\']=\'<image>/04_array.js\';$x1053->properties[\'line\']=329;$x1053->properties[\'column\']=22;$x1053->attributes[\'file\']=$x1053->attributes[\'line\']=$x1053->attributes[\'column\']=0;}throw new JSException($x1053,329,22,\'<image>/04_array.js\');}$x1050=JS::toObject($_callbackFn,$global);unset($x1054,$W1054,$S1054,$U1054);$x1055=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1050,(string)\'call\',329,22,\'<image>/04_array.js\');$x1054=&$x1055[0];list(,$W1054,$S1054,$U1054)=$x1055;unset($x1056,$W1056,$S1056,$U1056);$x1057=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,329,36,\'<image>/04_array.js\');$x1056=&$x1057[0];list(,$W1056,$S1056,$U1056)=$x1057;if(!(is_object($x1054)&&isset($x1054->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1060=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',329,22,\'<image>/04_array.js\');$_TypeError=&$x1060[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1060;$x1061=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1062=$x1061($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1062->class)&&$x1062->class===\'Error\'&&!isset($x1062->properties[\'file\'])&&!isset($x1062->properties[\'line\'])&&!isset($x1062->properties[\'column\'])){$x1062->properties[\'file\']=\'<image>/04_array.js\';$x1062->properties[\'line\']=329;$x1062->properties[\'column\']=22;$x1062->attributes[\'file\']=$x1062->attributes[\'line\']=$x1062->attributes[\'column\']=0;}throw new JSException($x1062,329,22,\'<image>/04_array.js\');}$x1058=$x1054->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1059=$x1058($global,$x1050,$x1054,array($_thisArg,$x1056,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1059,$global)){return true;}}return false;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1075 =& $scope->properties['arguments'];
$x1075->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1075->properties[$i] = $args[$i];
$x1075->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1079 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 340, 6, '<image>/04_array.js');
$_arguments =& $x1079[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1079;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1080 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 340, 6, '<image>/04_array.js');
$_ReferenceError =& $x1080[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1080;
$x1081 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 340, 6);
$x1082 = $x1081($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1082->class) && $x1082->class === 'Error' && !isset($x1082->properties['file']) && !isset($x1082->properties['line']) && !isset($x1082->properties['column'])) {$x1082->properties['file'] = '<image>/04_array.js';$x1082->properties['line'] = 340;$x1082->properties['column'] = 6;$x1082->attributes['file'] = $x1082->attributes['line'] = $x1082->attributes['column'] = 0; }
throw new JSException($x1082, 340, 6, '<image>/04_array.js');
}
unset($x1083, $W1083, $S1083, $U1083);
$x1084 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 340, 15, '<image>/04_array.js');
$x1083 =& $x1084[0]; list(,$W1083,$S1083,$U1083) = $x1084;
$x1076 = JS::toPrimitive($x1083, $global);
$x1077 = JS::toPrimitive(1, $global);
$x1078 = (is_string($x1077) && is_string($x1076) ? strcmp($x1077, $x1076) < 0 : (!is_nan($x1085 = JS::toNumber($x1077, $global)) && !is_nan($x1086 = JS::toNumber($x1076, $global)) && $x1085 < $x1086));
if (JS::toBoolean($x1078, $global)) {
unset($x1087, $W1087, $S1087, $U1087);
$x1088 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 341, 22, '<image>/04_array.js');
$x1087 =& $x1088[0]; list(,$W1087,$S1087,$U1087) = $x1088;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1087;;
};
for ($x1089 = 0;; ++$x1089) {
if ($x1089 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1090, $W1090, $S1090, $U1090);
$x1091 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 344, 26, '<image>/04_array.js');
$x1090 =& $x1091[0]; list(,$W1090,$S1090,$U1090) = $x1091;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1090;
}
if ($x1089 !== 0) {
$x1092 = ++$_i;
}
$x1093 = JS::toPrimitive($_i, $global);
$x1094 = JS::toPrimitive($_l, $global);
$x1095 = (is_string($x1093) && is_string($x1094) ? strcmp($x1093, $x1094) < 0 : (!is_nan($x1096 = JS::toNumber($x1093, $global)) && !is_nan($x1097 = JS::toNumber($x1094, $global)) && $x1096 < $x1097));
if (!JS::toBoolean($x1095, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1099 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 345, 18, '<image>/04_array.js');
$_TypeError =& $x1099[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1099;
$x1100 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1101 = $x1100($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1101->class) && $x1101->class === 'Error' && !isset($x1101->properties['file']) && !isset($x1101->properties['line']) && !isset($x1101->properties['column'])) {$x1101->properties['file'] = '<image>/04_array.js';$x1101->properties['line'] = 345;$x1101->properties['column'] = 18;$x1101->attributes['file'] = $x1101->attributes['line'] = $x1101->attributes['column'] = 0; }
throw new JSException($x1101, 345, 18, '<image>/04_array.js');
}
$x1098 = JS::toObject($_callbackFn, $global);
unset($x1102, $W1102, $S1102, $U1102);
$x1103 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1098, (string) 'call', 345, 18, '<image>/04_array.js');
$x1102 =& $x1103[0]; list(,$W1102,$S1102,$U1102) = $x1103;
unset($x1104, $W1104, $S1104, $U1104);
$x1105 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 345, 32, '<image>/04_array.js');
$x1104 =& $x1105[0]; list(,$W1104,$S1104,$U1104) = $x1105;
if (!(is_object($x1102) && isset($x1102->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1108 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 345, 18, '<image>/04_array.js');
$_TypeError =& $x1108[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1108;
$x1109 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1110 = $x1109($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1110->class) && $x1110->class === 'Error' && !isset($x1110->properties['file']) && !isset($x1110->properties['line']) && !isset($x1110->properties['column'])) {$x1110->properties['file'] = '<image>/04_array.js';$x1110->properties['line'] = 345;$x1110->properties['column'] = 18;$x1110->attributes['file'] = $x1110->attributes['line'] = $x1110->attributes['column'] = 0; }
throw new JSException($x1110, 345, 18, '<image>/04_array.js');
}
$x1106 = $x1102->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1107 = $x1106($global, $x1098, $x1102, array($_thisArg, $x1104, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1075=&$scope->properties[\'arguments\'];$x1075->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1075->properties[$i]=$args[$i];$x1075->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1079=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',340,6,\'<image>/04_array.js\');$_arguments=&$x1079[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1079;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1080=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',340,6,\'<image>/04_array.js\');$_ReferenceError=&$x1080[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1080;$x1081=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',340,6);$x1082=$x1081($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1082->class)&&$x1082->class===\'Error\'&&!isset($x1082->properties[\'file\'])&&!isset($x1082->properties[\'line\'])&&!isset($x1082->properties[\'column\'])){$x1082->properties[\'file\']=\'<image>/04_array.js\';$x1082->properties[\'line\']=340;$x1082->properties[\'column\']=6;$x1082->attributes[\'file\']=$x1082->attributes[\'line\']=$x1082->attributes[\'column\']=0;}throw new JSException($x1082,340,6,\'<image>/04_array.js\');}unset($x1083,$W1083,$S1083,$U1083);$x1084=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',340,15,\'<image>/04_array.js\');$x1083=&$x1084[0];list(,$W1083,$S1083,$U1083)=$x1084;$x1076=JS::toPrimitive($x1083,$global);$x1077=JS::toPrimitive(1,$global);$x1078=(is_string($x1077)&&is_string($x1076)?strcmp($x1077,$x1076)<0:(!is_nan($x1085=JS::toNumber($x1077,$global))&&!is_nan($x1086=JS::toNumber($x1076,$global))&&$x1085<$x1086));if(JS::toBoolean($x1078,$global)){unset($x1087,$W1087,$S1087,$U1087);$x1088=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,341,22,\'<image>/04_array.js\');$x1087=&$x1088[0];list(,$W1087,$S1087,$U1087)=$x1088;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1087;}for($x1089=0;;++$x1089){if($x1089===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1090,$W1090,$S1090,$U1090);$x1091=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',344,26,\'<image>/04_array.js\');$x1090=&$x1091[0];list(,$W1090,$S1090,$U1090)=$x1091;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1090;}if($x1089!==0){$x1092=++$_i;}$x1093=JS::toPrimitive($_i,$global);$x1094=JS::toPrimitive($_l,$global);$x1095=(is_string($x1093)&&is_string($x1094)?strcmp($x1093,$x1094)<0:(!is_nan($x1096=JS::toNumber($x1093,$global))&&!is_nan($x1097=JS::toNumber($x1094,$global))&&$x1096<$x1097));if(!JS::toBoolean($x1095,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1099=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',345,18,\'<image>/04_array.js\');$_TypeError=&$x1099[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1099;$x1100=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1101=$x1100($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1101->class)&&$x1101->class===\'Error\'&&!isset($x1101->properties[\'file\'])&&!isset($x1101->properties[\'line\'])&&!isset($x1101->properties[\'column\'])){$x1101->properties[\'file\']=\'<image>/04_array.js\';$x1101->properties[\'line\']=345;$x1101->properties[\'column\']=18;$x1101->attributes[\'file\']=$x1101->attributes[\'line\']=$x1101->attributes[\'column\']=0;}throw new JSException($x1101,345,18,\'<image>/04_array.js\');}$x1098=JS::toObject($_callbackFn,$global);unset($x1102,$W1102,$S1102,$U1102);$x1103=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1098,(string)\'call\',345,18,\'<image>/04_array.js\');$x1102=&$x1103[0];list(,$W1102,$S1102,$U1102)=$x1103;unset($x1104,$W1104,$S1104,$U1104);$x1105=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,345,32,\'<image>/04_array.js\');$x1104=&$x1105[0];list(,$W1104,$S1104,$U1104)=$x1105;if(!(is_object($x1102)&&isset($x1102->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1108=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',345,18,\'<image>/04_array.js\');$_TypeError=&$x1108[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1108;$x1109=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1110=$x1109($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1110->class)&&$x1110->class===\'Error\'&&!isset($x1110->properties[\'file\'])&&!isset($x1110->properties[\'line\'])&&!isset($x1110->properties[\'column\'])){$x1110->properties[\'file\']=\'<image>/04_array.js\';$x1110->properties[\'line\']=345;$x1110->properties[\'column\']=18;$x1110->attributes[\'file\']=$x1110->attributes[\'line\']=$x1110->attributes[\'column\']=0;}throw new JSException($x1110,345,18,\'<image>/04_array.js\');}$x1106=$x1102->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1107=$x1106($global,$x1098,$x1102,array($_thisArg,$x1104,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1123 =& $scope->properties['arguments'];
$x1123->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1123->properties[$i] = $args[$i];
$x1123->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1124 = clone JS::$arrayTemplate;
$x1124->properties['length'] = 0;
$x1124->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1124;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1128 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 352, 6, '<image>/04_array.js');
$_arguments =& $x1128[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1128;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1129 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 352, 6, '<image>/04_array.js');
$_ReferenceError =& $x1129[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1129;
$x1130 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 352, 6);
$x1131 = $x1130($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1131->class) && $x1131->class === 'Error' && !isset($x1131->properties['file']) && !isset($x1131->properties['line']) && !isset($x1131->properties['column'])) {$x1131->properties['file'] = '<image>/04_array.js';$x1131->properties['line'] = 352;$x1131->properties['column'] = 6;$x1131->attributes['file'] = $x1131->attributes['line'] = $x1131->attributes['column'] = 0; }
throw new JSException($x1131, 352, 6, '<image>/04_array.js');
}
unset($x1132, $W1132, $S1132, $U1132);
$x1133 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 352, 15, '<image>/04_array.js');
$x1132 =& $x1133[0]; list(,$W1132,$S1132,$U1132) = $x1133;
$x1125 = JS::toPrimitive($x1132, $global);
$x1126 = JS::toPrimitive(1, $global);
$x1127 = (is_string($x1126) && is_string($x1125) ? strcmp($x1126, $x1125) < 0 : (!is_nan($x1134 = JS::toNumber($x1126, $global)) && !is_nan($x1135 = JS::toNumber($x1125, $global)) && $x1134 < $x1135));
if (JS::toBoolean($x1127, $global)) {
unset($x1136, $W1136, $S1136, $U1136);
$x1137 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 353, 22, '<image>/04_array.js');
$x1136 =& $x1137[0]; list(,$W1136,$S1136,$U1136) = $x1137;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1136;;
};
for ($x1138 = 0;; ++$x1138) {
if ($x1138 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1139, $W1139, $S1139, $U1139);
$x1140 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 356, 26, '<image>/04_array.js');
$x1139 =& $x1140[0]; list(,$W1139,$S1139,$U1139) = $x1140;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1139;
}
if ($x1138 !== 0) {
$x1141 = ++$_i;
}
$x1142 = JS::toPrimitive($_i, $global);
$x1143 = JS::toPrimitive($_l, $global);
$x1144 = (is_string($x1142) && is_string($x1143) ? strcmp($x1142, $x1143) < 0 : (!is_nan($x1145 = JS::toNumber($x1142, $global)) && !is_nan($x1146 = JS::toNumber($x1143, $global)) && $x1145 < $x1146));
if (!JS::toBoolean($x1144, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1148 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 19, '<image>/04_array.js');
$_TypeError =& $x1148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1148;
$x1149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1150 = $x1149($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1150->class) && $x1150->class === 'Error' && !isset($x1150->properties['file']) && !isset($x1150->properties['line']) && !isset($x1150->properties['column'])) {$x1150->properties['file'] = '<image>/04_array.js';$x1150->properties['line'] = 357;$x1150->properties['column'] = 19;$x1150->attributes['file'] = $x1150->attributes['line'] = $x1150->attributes['column'] = 0; }
throw new JSException($x1150, 357, 19, '<image>/04_array.js');
}
$x1147 = JS::toObject($_returnArray, $global);
unset($x1151, $W1151, $S1151, $U1151);
$x1152 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1147, (string) 'push', 357, 19, '<image>/04_array.js');
$x1151 =& $x1152[0]; list(,$W1151,$S1151,$U1151) = $x1152;
if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1154 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 35, '<image>/04_array.js');
$_TypeError =& $x1154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1154;
$x1155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1156 = $x1155($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1156->class) && $x1156->class === 'Error' && !isset($x1156->properties['file']) && !isset($x1156->properties['line']) && !isset($x1156->properties['column'])) {$x1156->properties['file'] = '<image>/04_array.js';$x1156->properties['line'] = 357;$x1156->properties['column'] = 35;$x1156->attributes['file'] = $x1156->attributes['line'] = $x1156->attributes['column'] = 0; }
throw new JSException($x1156, 357, 35, '<image>/04_array.js');
}
$x1153 = JS::toObject($_callbackFn, $global);
unset($x1157, $W1157, $S1157, $U1157);
$x1158 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1153, (string) 'call', 357, 35, '<image>/04_array.js');
$x1157 =& $x1158[0]; list(,$W1157,$S1157,$U1157) = $x1158;
unset($x1159, $W1159, $S1159, $U1159);
$x1160 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 357, 49, '<image>/04_array.js');
$x1159 =& $x1160[0]; list(,$W1159,$S1159,$U1159) = $x1160;
if (!(is_object($x1157) && isset($x1157->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1163 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 35, '<image>/04_array.js');
$_TypeError =& $x1163[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1163;
$x1164 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1165 = $x1164($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1165->class) && $x1165->class === 'Error' && !isset($x1165->properties['file']) && !isset($x1165->properties['line']) && !isset($x1165->properties['column'])) {$x1165->properties['file'] = '<image>/04_array.js';$x1165->properties['line'] = 357;$x1165->properties['column'] = 35;$x1165->attributes['file'] = $x1165->attributes['line'] = $x1165->attributes['column'] = 0; }
throw new JSException($x1165, 357, 35, '<image>/04_array.js');
}
$x1161 = $x1157->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1162 = $x1161($global, $x1153, $x1157, array($_thisArg, $x1159, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x1151) && isset($x1151->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1168 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 357, 19, '<image>/04_array.js');
$_TypeError =& $x1168[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1168;
$x1169 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1170 = $x1169($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1170->class) && $x1170->class === 'Error' && !isset($x1170->properties['file']) && !isset($x1170->properties['line']) && !isset($x1170->properties['column'])) {$x1170->properties['file'] = '<image>/04_array.js';$x1170->properties['line'] = 357;$x1170->properties['column'] = 19;$x1170->attributes['file'] = $x1170->attributes['line'] = $x1170->attributes['column'] = 0; }
throw new JSException($x1170, 357, 19, '<image>/04_array.js');
}
$x1166 = $x1151->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1167 = $x1166($global, $x1147, $x1151, array($x1162), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1123=&$scope->properties[\'arguments\'];$x1123->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1123->properties[$i]=$args[$i];$x1123->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1124=clone JS::$arrayTemplate;$x1124->properties[\'length\']=0;$x1124->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1124;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1128=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',352,6,\'<image>/04_array.js\');$_arguments=&$x1128[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1128;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1129=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',352,6,\'<image>/04_array.js\');$_ReferenceError=&$x1129[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1129;$x1130=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',352,6);$x1131=$x1130($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1131->class)&&$x1131->class===\'Error\'&&!isset($x1131->properties[\'file\'])&&!isset($x1131->properties[\'line\'])&&!isset($x1131->properties[\'column\'])){$x1131->properties[\'file\']=\'<image>/04_array.js\';$x1131->properties[\'line\']=352;$x1131->properties[\'column\']=6;$x1131->attributes[\'file\']=$x1131->attributes[\'line\']=$x1131->attributes[\'column\']=0;}throw new JSException($x1131,352,6,\'<image>/04_array.js\');}unset($x1132,$W1132,$S1132,$U1132);$x1133=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',352,15,\'<image>/04_array.js\');$x1132=&$x1133[0];list(,$W1132,$S1132,$U1132)=$x1133;$x1125=JS::toPrimitive($x1132,$global);$x1126=JS::toPrimitive(1,$global);$x1127=(is_string($x1126)&&is_string($x1125)?strcmp($x1126,$x1125)<0:(!is_nan($x1134=JS::toNumber($x1126,$global))&&!is_nan($x1135=JS::toNumber($x1125,$global))&&$x1134<$x1135));if(JS::toBoolean($x1127,$global)){unset($x1136,$W1136,$S1136,$U1136);$x1137=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,353,22,\'<image>/04_array.js\');$x1136=&$x1137[0];list(,$W1136,$S1136,$U1136)=$x1137;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1136;}for($x1138=0;;++$x1138){if($x1138===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1139,$W1139,$S1139,$U1139);$x1140=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',356,26,\'<image>/04_array.js\');$x1139=&$x1140[0];list(,$W1139,$S1139,$U1139)=$x1140;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1139;}if($x1138!==0){$x1141=++$_i;}$x1142=JS::toPrimitive($_i,$global);$x1143=JS::toPrimitive($_l,$global);$x1144=(is_string($x1142)&&is_string($x1143)?strcmp($x1142,$x1143)<0:(!is_nan($x1145=JS::toNumber($x1142,$global))&&!is_nan($x1146=JS::toNumber($x1143,$global))&&$x1145<$x1146));if(!JS::toBoolean($x1144,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1148=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,19,\'<image>/04_array.js\');$_TypeError=&$x1148[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1148;$x1149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1150=$x1149($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1150->class)&&$x1150->class===\'Error\'&&!isset($x1150->properties[\'file\'])&&!isset($x1150->properties[\'line\'])&&!isset($x1150->properties[\'column\'])){$x1150->properties[\'file\']=\'<image>/04_array.js\';$x1150->properties[\'line\']=357;$x1150->properties[\'column\']=19;$x1150->attributes[\'file\']=$x1150->attributes[\'line\']=$x1150->attributes[\'column\']=0;}throw new JSException($x1150,357,19,\'<image>/04_array.js\');}$x1147=JS::toObject($_returnArray,$global);unset($x1151,$W1151,$S1151,$U1151);$x1152=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1147,(string)\'push\',357,19,\'<image>/04_array.js\');$x1151=&$x1152[0];list(,$W1151,$S1151,$U1151)=$x1152;if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1154=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,35,\'<image>/04_array.js\');$_TypeError=&$x1154[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1154;$x1155=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1156=$x1155($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1156->class)&&$x1156->class===\'Error\'&&!isset($x1156->properties[\'file\'])&&!isset($x1156->properties[\'line\'])&&!isset($x1156->properties[\'column\'])){$x1156->properties[\'file\']=\'<image>/04_array.js\';$x1156->properties[\'line\']=357;$x1156->properties[\'column\']=35;$x1156->attributes[\'file\']=$x1156->attributes[\'line\']=$x1156->attributes[\'column\']=0;}throw new JSException($x1156,357,35,\'<image>/04_array.js\');}$x1153=JS::toObject($_callbackFn,$global);unset($x1157,$W1157,$S1157,$U1157);$x1158=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1153,(string)\'call\',357,35,\'<image>/04_array.js\');$x1157=&$x1158[0];list(,$W1157,$S1157,$U1157)=$x1158;unset($x1159,$W1159,$S1159,$U1159);$x1160=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,357,49,\'<image>/04_array.js\');$x1159=&$x1160[0];list(,$W1159,$S1159,$U1159)=$x1160;if(!(is_object($x1157)&&isset($x1157->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1163=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,35,\'<image>/04_array.js\');$_TypeError=&$x1163[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1163;$x1164=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1165=$x1164($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1165->class)&&$x1165->class===\'Error\'&&!isset($x1165->properties[\'file\'])&&!isset($x1165->properties[\'line\'])&&!isset($x1165->properties[\'column\'])){$x1165->properties[\'file\']=\'<image>/04_array.js\';$x1165->properties[\'line\']=357;$x1165->properties[\'column\']=35;$x1165->attributes[\'file\']=$x1165->attributes[\'line\']=$x1165->attributes[\'column\']=0;}throw new JSException($x1165,357,35,\'<image>/04_array.js\');}$x1161=$x1157->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1162=$x1161($global,$x1153,$x1157,array($_thisArg,$x1159,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x1151)&&isset($x1151->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1168=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',357,19,\'<image>/04_array.js\');$_TypeError=&$x1168[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1168;$x1169=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1170=$x1169($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1170->class)&&$x1170->class===\'Error\'&&!isset($x1170->properties[\'file\'])&&!isset($x1170->properties[\'line\'])&&!isset($x1170->properties[\'column\'])){$x1170->properties[\'file\']=\'<image>/04_array.js\';$x1170->properties[\'line\']=357;$x1170->properties[\'column\']=19;$x1170->attributes[\'file\']=$x1170->attributes[\'line\']=$x1170->attributes[\'column\']=0;}throw new JSException($x1170,357,19,\'<image>/04_array.js\');}$x1166=$x1151->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1167=$x1166($global,$x1147,$x1151,array($x1162),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1183 =& $scope->properties['arguments'];
$x1183->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1183->properties[$i] = $args[$i];
$x1183->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1184 = clone JS::$arrayTemplate;
$x1184->properties['length'] = 0;
$x1184->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1184;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1188 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 366, 6, '<image>/04_array.js');
$_arguments =& $x1188[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1188;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1189 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 366, 6, '<image>/04_array.js');
$_ReferenceError =& $x1189[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1189;
$x1190 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 366, 6);
$x1191 = $x1190($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1191->class) && $x1191->class === 'Error' && !isset($x1191->properties['file']) && !isset($x1191->properties['line']) && !isset($x1191->properties['column'])) {$x1191->properties['file'] = '<image>/04_array.js';$x1191->properties['line'] = 366;$x1191->properties['column'] = 6;$x1191->attributes['file'] = $x1191->attributes['line'] = $x1191->attributes['column'] = 0; }
throw new JSException($x1191, 366, 6, '<image>/04_array.js');
}
unset($x1192, $W1192, $S1192, $U1192);
$x1193 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 366, 15, '<image>/04_array.js');
$x1192 =& $x1193[0]; list(,$W1192,$S1192,$U1192) = $x1193;
$x1185 = JS::toPrimitive($x1192, $global);
$x1186 = JS::toPrimitive(1, $global);
$x1187 = (is_string($x1186) && is_string($x1185) ? strcmp($x1186, $x1185) < 0 : (!is_nan($x1194 = JS::toNumber($x1186, $global)) && !is_nan($x1195 = JS::toNumber($x1185, $global)) && $x1194 < $x1195));
if (JS::toBoolean($x1187, $global)) {
unset($x1196, $W1196, $S1196, $U1196);
$x1197 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 367, 22, '<image>/04_array.js');
$x1196 =& $x1197[0]; list(,$W1196,$S1196,$U1196) = $x1197;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1196;;
};
for ($x1198 = 0;; ++$x1198) {
if ($x1198 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1199, $W1199, $S1199, $U1199);
$x1200 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 370, 26, '<image>/04_array.js');
$x1199 =& $x1200[0]; list(,$W1199,$S1199,$U1199) = $x1200;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1199;
}
if ($x1198 !== 0) {
$x1201 = ++$_i;
}
$x1202 = JS::toPrimitive($_i, $global);
$x1203 = JS::toPrimitive($_l, $global);
$x1204 = (is_string($x1202) && is_string($x1203) ? strcmp($x1202, $x1203) < 0 : (!is_nan($x1205 = JS::toNumber($x1202, $global)) && !is_nan($x1206 = JS::toNumber($x1203, $global)) && $x1205 < $x1206));
if (!JS::toBoolean($x1204, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1208 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 371, 22, '<image>/04_array.js');
$_TypeError =& $x1208[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1208;
$x1209 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1210 = $x1209($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1210->class) && $x1210->class === 'Error' && !isset($x1210->properties['file']) && !isset($x1210->properties['line']) && !isset($x1210->properties['column'])) {$x1210->properties['file'] = '<image>/04_array.js';$x1210->properties['line'] = 371;$x1210->properties['column'] = 22;$x1210->attributes['file'] = $x1210->attributes['line'] = $x1210->attributes['column'] = 0; }
throw new JSException($x1210, 371, 22, '<image>/04_array.js');
}
$x1207 = JS::toObject($_callbackFn, $global);
unset($x1211, $W1211, $S1211, $U1211);
$x1212 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1207, (string) 'call', 371, 22, '<image>/04_array.js');
$x1211 =& $x1212[0]; list(,$W1211,$S1211,$U1211) = $x1212;
unset($x1213, $W1213, $S1213, $U1213);
$x1214 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 371, 36, '<image>/04_array.js');
$x1213 =& $x1214[0]; list(,$W1213,$S1213,$U1213) = $x1214;
if (!(is_object($x1211) && isset($x1211->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1217 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 371, 22, '<image>/04_array.js');
$_TypeError =& $x1217[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1217;
$x1218 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1219 = $x1218($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1219->class) && $x1219->class === 'Error' && !isset($x1219->properties['file']) && !isset($x1219->properties['line']) && !isset($x1219->properties['column'])) {$x1219->properties['file'] = '<image>/04_array.js';$x1219->properties['line'] = 371;$x1219->properties['column'] = 22;$x1219->attributes['file'] = $x1219->attributes['line'] = $x1219->attributes['column'] = 0; }
throw new JSException($x1219, 371, 22, '<image>/04_array.js');
}
$x1215 = $x1211->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1216 = $x1215($global, $x1207, $x1211, array($_thisArg, $x1213, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1216, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1221 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 372, 20, '<image>/04_array.js');
$_TypeError =& $x1221[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1221;
$x1222 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1223 = $x1222($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1223->class) && $x1223->class === 'Error' && !isset($x1223->properties['file']) && !isset($x1223->properties['line']) && !isset($x1223->properties['column'])) {$x1223->properties['file'] = '<image>/04_array.js';$x1223->properties['line'] = 372;$x1223->properties['column'] = 20;$x1223->attributes['file'] = $x1223->attributes['line'] = $x1223->attributes['column'] = 0; }
throw new JSException($x1223, 372, 20, '<image>/04_array.js');
}
$x1220 = JS::toObject($_returnArray, $global);
unset($x1224, $W1224, $S1224, $U1224);
$x1225 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1220, (string) 'push', 372, 20, '<image>/04_array.js');
$x1224 =& $x1225[0]; list(,$W1224,$S1224,$U1224) = $x1225;
unset($x1226, $W1226, $S1226, $U1226);
$x1227 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 372, 25, '<image>/04_array.js');
$x1226 =& $x1227[0]; list(,$W1226,$S1226,$U1226) = $x1227;
if (!(is_object($x1224) && isset($x1224->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1230 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 372, 20, '<image>/04_array.js');
$_TypeError =& $x1230[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1230;
$x1231 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1232 = $x1231($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1232->class) && $x1232->class === 'Error' && !isset($x1232->properties['file']) && !isset($x1232->properties['line']) && !isset($x1232->properties['column'])) {$x1232->properties['file'] = '<image>/04_array.js';$x1232->properties['line'] = 372;$x1232->properties['column'] = 20;$x1232->attributes['file'] = $x1232->attributes['line'] = $x1232->attributes['column'] = 0; }
throw new JSException($x1232, 372, 20, '<image>/04_array.js');
}
$x1228 = $x1224->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1229 = $x1228($global, $x1220, $x1224, array($x1226), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1183=&$scope->properties[\'arguments\'];$x1183->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1183->properties[$i]=$args[$i];$x1183->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1184=clone JS::$arrayTemplate;$x1184->properties[\'length\']=0;$x1184->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1184;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1188=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',366,6,\'<image>/04_array.js\');$_arguments=&$x1188[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1188;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1189=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',366,6,\'<image>/04_array.js\');$_ReferenceError=&$x1189[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1189;$x1190=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',366,6);$x1191=$x1190($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1191->class)&&$x1191->class===\'Error\'&&!isset($x1191->properties[\'file\'])&&!isset($x1191->properties[\'line\'])&&!isset($x1191->properties[\'column\'])){$x1191->properties[\'file\']=\'<image>/04_array.js\';$x1191->properties[\'line\']=366;$x1191->properties[\'column\']=6;$x1191->attributes[\'file\']=$x1191->attributes[\'line\']=$x1191->attributes[\'column\']=0;}throw new JSException($x1191,366,6,\'<image>/04_array.js\');}unset($x1192,$W1192,$S1192,$U1192);$x1193=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',366,15,\'<image>/04_array.js\');$x1192=&$x1193[0];list(,$W1192,$S1192,$U1192)=$x1193;$x1185=JS::toPrimitive($x1192,$global);$x1186=JS::toPrimitive(1,$global);$x1187=(is_string($x1186)&&is_string($x1185)?strcmp($x1186,$x1185)<0:(!is_nan($x1194=JS::toNumber($x1186,$global))&&!is_nan($x1195=JS::toNumber($x1185,$global))&&$x1194<$x1195));if(JS::toBoolean($x1187,$global)){unset($x1196,$W1196,$S1196,$U1196);$x1197=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,367,22,\'<image>/04_array.js\');$x1196=&$x1197[0];list(,$W1196,$S1196,$U1196)=$x1197;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1196;}for($x1198=0;;++$x1198){if($x1198===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1199,$W1199,$S1199,$U1199);$x1200=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',370,26,\'<image>/04_array.js\');$x1199=&$x1200[0];list(,$W1199,$S1199,$U1199)=$x1200;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1199;}if($x1198!==0){$x1201=++$_i;}$x1202=JS::toPrimitive($_i,$global);$x1203=JS::toPrimitive($_l,$global);$x1204=(is_string($x1202)&&is_string($x1203)?strcmp($x1202,$x1203)<0:(!is_nan($x1205=JS::toNumber($x1202,$global))&&!is_nan($x1206=JS::toNumber($x1203,$global))&&$x1205<$x1206));if(!JS::toBoolean($x1204,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1208=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',371,22,\'<image>/04_array.js\');$_TypeError=&$x1208[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1208;$x1209=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1210=$x1209($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1210->class)&&$x1210->class===\'Error\'&&!isset($x1210->properties[\'file\'])&&!isset($x1210->properties[\'line\'])&&!isset($x1210->properties[\'column\'])){$x1210->properties[\'file\']=\'<image>/04_array.js\';$x1210->properties[\'line\']=371;$x1210->properties[\'column\']=22;$x1210->attributes[\'file\']=$x1210->attributes[\'line\']=$x1210->attributes[\'column\']=0;}throw new JSException($x1210,371,22,\'<image>/04_array.js\');}$x1207=JS::toObject($_callbackFn,$global);unset($x1211,$W1211,$S1211,$U1211);$x1212=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1207,(string)\'call\',371,22,\'<image>/04_array.js\');$x1211=&$x1212[0];list(,$W1211,$S1211,$U1211)=$x1212;unset($x1213,$W1213,$S1213,$U1213);$x1214=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,371,36,\'<image>/04_array.js\');$x1213=&$x1214[0];list(,$W1213,$S1213,$U1213)=$x1214;if(!(is_object($x1211)&&isset($x1211->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1217=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',371,22,\'<image>/04_array.js\');$_TypeError=&$x1217[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1217;$x1218=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1219=$x1218($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1219->class)&&$x1219->class===\'Error\'&&!isset($x1219->properties[\'file\'])&&!isset($x1219->properties[\'line\'])&&!isset($x1219->properties[\'column\'])){$x1219->properties[\'file\']=\'<image>/04_array.js\';$x1219->properties[\'line\']=371;$x1219->properties[\'column\']=22;$x1219->attributes[\'file\']=$x1219->attributes[\'line\']=$x1219->attributes[\'column\']=0;}throw new JSException($x1219,371,22,\'<image>/04_array.js\');}$x1215=$x1211->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1216=$x1215($global,$x1207,$x1211,array($_thisArg,$x1213,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1216,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1221=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',372,20,\'<image>/04_array.js\');$_TypeError=&$x1221[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1221;$x1222=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1223=$x1222($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1223->class)&&$x1223->class===\'Error\'&&!isset($x1223->properties[\'file\'])&&!isset($x1223->properties[\'line\'])&&!isset($x1223->properties[\'column\'])){$x1223->properties[\'file\']=\'<image>/04_array.js\';$x1223->properties[\'line\']=372;$x1223->properties[\'column\']=20;$x1223->attributes[\'file\']=$x1223->attributes[\'line\']=$x1223->attributes[\'column\']=0;}throw new JSException($x1223,372,20,\'<image>/04_array.js\');}$x1220=JS::toObject($_returnArray,$global);unset($x1224,$W1224,$S1224,$U1224);$x1225=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1220,(string)\'push\',372,20,\'<image>/04_array.js\');$x1224=&$x1225[0];list(,$W1224,$S1224,$U1224)=$x1225;unset($x1226,$W1226,$S1226,$U1226);$x1227=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,372,25,\'<image>/04_array.js\');$x1226=&$x1227[0];list(,$W1226,$S1226,$U1226)=$x1227;if(!(is_object($x1224)&&isset($x1224->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1230=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',372,20,\'<image>/04_array.js\');$_TypeError=&$x1230[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1230;$x1231=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1232=$x1231($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1232->class)&&$x1232->class===\'Error\'&&!isset($x1232->properties[\'file\'])&&!isset($x1232->properties[\'line\'])&&!isset($x1232->properties[\'column\'])){$x1232->properties[\'file\']=\'<image>/04_array.js\';$x1232->properties[\'line\']=372;$x1232->properties[\'column\']=20;$x1232->attributes[\'file\']=$x1232->attributes[\'line\']=$x1232->attributes[\'column\']=0;}throw new JSException($x1232,372,20,\'<image>/04_array.js\');}$x1228=$x1224->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1229=$x1228($global,$x1220,$x1224,array($x1226),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1245 =& $scope->properties['arguments'];
$x1245->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1245->properties[$i] = $args[$i];
$x1245->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1250, $W1250, $S1250, $U1250);
$x1251 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 380, 10, '<image>/04_array.js');
$x1250 =& $x1251[0]; list(,$W1250,$S1250,$U1250) = $x1251;
$x1247 = JS::toPrimitive($x1250, $global);
$x1248 = JS::toPrimitive(1, $global);
$x1249 = (is_string($x1247) && is_string($x1248) ? strcmp($x1247, $x1248) < 0 : (!is_nan($x1252 = JS::toNumber($x1247, $global)) && !is_nan($x1253 = JS::toNumber($x1248, $global)) && $x1252 < $x1253));
$x1246 = $x1249;
if (JS::toBoolean($x1246, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1257 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 380, 25, '<image>/04_array.js');
$_arguments =& $x1257[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1257;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1258 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 380, 25, '<image>/04_array.js');
$_ReferenceError =& $x1258[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1258;
$x1259 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 380, 25);
$x1260 = $x1259($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1260->class) && $x1260->class === 'Error' && !isset($x1260->properties['file']) && !isset($x1260->properties['line']) && !isset($x1260->properties['column'])) {$x1260->properties['file'] = '<image>/04_array.js';$x1260->properties['line'] = 380;$x1260->properties['column'] = 25;$x1260->attributes['file'] = $x1260->attributes['line'] = $x1260->attributes['column'] = 0; }
throw new JSException($x1260, 380, 25, '<image>/04_array.js');
}
unset($x1261, $W1261, $S1261, $U1261);
$x1262 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 380, 34, '<image>/04_array.js');
$x1261 =& $x1262[0]; list(,$W1261,$S1261,$U1261) = $x1262;
$x1254 = JS::toPrimitive($x1261, $global);
$x1255 = JS::toPrimitive(2, $global);
$x1256 = (is_string($x1254) && is_string($x1255) ? strcmp($x1254, $x1255) < 0 : (!is_nan($x1263 = JS::toNumber($x1254, $global)) && !is_nan($x1264 = JS::toNumber($x1255, $global)) && $x1263 < $x1264));
$x1246 = $x1256; }
if (JS::toBoolean($x1246, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1267 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 381, 13, '<image>/04_array.js');
$_TypeError =& $x1267[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1267;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1268 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 381, 13, '<image>/04_array.js');
$_ReferenceError =& $x1268[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1268;
$x1269 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 13);
$x1270 = $x1269($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1270->class) && $x1270->class === 'Error' && !isset($x1270->properties['file']) && !isset($x1270->properties['line']) && !isset($x1270->properties['column'])) {$x1270->properties['file'] = '<image>/04_array.js';$x1270->properties['line'] = 381;$x1270->properties['column'] = 13;$x1270->attributes['file'] = $x1270->attributes['line'] = $x1270->attributes['column'] = 0; }
throw new JSException($x1270, 381, 13, '<image>/04_array.js');
}
$x1265 = clone JS::$objectTemplate;
unset($x1271, $W1271, $S1271, $U1271);
$x1272 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, (string) 'prototype', 381, 9, '<image>/04_array.js');
$x1271 =& $x1272[0]; list(,$W1271,$S1271,$U1271) = $x1272;
$x1266 = $x1271;
$x1265->prototype = $x1266;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1276 = $x1275($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1276->class) && $x1276->class === 'Error' && !isset($x1276->properties['file']) && !isset($x1276->properties['line']) && !isset($x1276->properties['column'])) {$x1276->properties['file'] = '<image>/04_array.js';$x1276->properties['line'] = 381;$x1276->properties['column'] = 9;$x1276->attributes['file'] = $x1276->attributes['line'] = $x1276->attributes['column'] = 0; }
throw new JSException($x1276, 381, 9, '<image>/04_array.js');
}
$x1273 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1274 = $x1273($global, $x1265, $_TypeError, array('Array.prototype.reduce(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1266 = $x1274;
if (is_object($x1266) && $x1266 !== JS::$undefined) { $x1265 = $x1266; }
if (isset($x1265->class) && $x1265->class === 'Error' && !isset($x1265->properties['file']) && !isset($x1265->properties['line']) && !isset($x1265->properties['column'])) {$x1265->properties['file'] = '<image>/04_array.js';$x1265->properties['line'] = 381;$x1265->properties['column'] = 3;$x1265->attributes['file'] = $x1265->attributes['line'] = $x1265->attributes['column'] = 0; }
throw new JSException($x1265, 381, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1280 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 386, 6, '<image>/04_array.js');
$_arguments =& $x1280[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1280;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1281 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 386, 6, '<image>/04_array.js');
$_ReferenceError =& $x1281[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1281;
$x1282 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 386, 6);
$x1283 = $x1282($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1283->class) && $x1283->class === 'Error' && !isset($x1283->properties['file']) && !isset($x1283->properties['line']) && !isset($x1283->properties['column'])) {$x1283->properties['file'] = '<image>/04_array.js';$x1283->properties['line'] = 386;$x1283->properties['column'] = 6;$x1283->attributes['file'] = $x1283->attributes['line'] = $x1283->attributes['column'] = 0; }
throw new JSException($x1283, 386, 6, '<image>/04_array.js');
}
unset($x1284, $W1284, $S1284, $U1284);
$x1285 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 386, 15, '<image>/04_array.js');
$x1284 =& $x1285[0]; list(,$W1284,$S1284,$U1284) = $x1285;
$x1277 = JS::toPrimitive($x1284, $global);
$x1278 = JS::toPrimitive(1, $global);
$x1279 = (is_string($x1278) && is_string($x1277) ? strcmp($x1278, $x1277) < 0 : (!is_nan($x1286 = JS::toNumber($x1278, $global)) && !is_nan($x1287 = JS::toNumber($x1277, $global)) && $x1286 < $x1287));
if (JS::toBoolean($x1279, $global)) {
unset($x1288, $W1288, $S1288, $U1288);
$x1289 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 387, 20, '<image>/04_array.js');
$x1288 =& $x1289[0]; list(,$W1288,$S1288,$U1288) = $x1289;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1288;
$x1290 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1290;;
}
else {
for ($x1291 = 0;; ++$x1291) {
if ($x1291 === 0) {
$x1292 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1292;
}
if ($x1291 !== 0) {
$x1293 = ++$_i;
}
unset($x1298, $W1298, $S1298, $U1298);
$x1299 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 391, 23, '<image>/04_array.js');
$x1298 =& $x1299[0]; list(,$W1298,$S1298,$U1298) = $x1299;
$x1295 = JS::toPrimitive($_i, $global);
$x1296 = JS::toPrimitive($x1298, $global);
$x1297 = (is_string($x1295) && is_string($x1296) ? strcmp($x1295, $x1296) < 0 : (!is_nan($x1300 = JS::toNumber($x1295, $global)) && !is_nan($x1301 = JS::toNumber($x1296, $global)) && $x1300 < $x1301));
$x1294 = $x1297;
if (JS::toBoolean($x1294, $global)) {
unset($x1303, $W1303, $S1303, $U1303);
$x1304 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 391, 38, '<image>/04_array.js');
$x1303 =& $x1304[0]; list(,$W1303,$S1303,$U1303) = $x1304;
$x1302 = (((gettype($x1303) === gettype(JS::$undefined) && $x1303 === JS::$undefined))|| (((is_float($x1303) || is_int($x1303)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1303 == JS::$undefined));
$x1294 = $x1302; }
if (!JS::toBoolean($x1294, $global)) { break; }

;
};
unset($x1305, $W1305, $S1305, $U1305);
$x1306 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 392, 15, '<image>/04_array.js');
$x1305 =& $x1306[0]; list(,$W1305,$S1305,$U1305) = $x1306;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1305;
$x1307 = JS::toPrimitive($_i, $global);
$x1308 = JS::toPrimitive(1, $global);
$x1309 = (is_string($x1307) || is_string($x1308) ? JS::toString($x1307, $global) . JS::toString($x1308, $global) : JS::toNumber($x1307, $global) + JS::toNumber($x1308, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1309;;
};
for ($x1310 = 0;; ++$x1310) {
if ($x1310 === 0) {
unset($x1311, $W1311, $S1311, $U1311);
$x1312 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 396, 19, '<image>/04_array.js');
$x1311 =& $x1312[0]; list(,$W1311,$S1311,$U1311) = $x1312;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1311;
}
if ($x1310 !== 0) {
$x1313 = ++$_i;
}
$x1314 = JS::toPrimitive($_i, $global);
$x1315 = JS::toPrimitive($_l, $global);
$x1316 = (is_string($x1314) && is_string($x1315) ? strcmp($x1314, $x1315) < 0 : (!is_nan($x1317 = JS::toNumber($x1314, $global)) && !is_nan($x1318 = JS::toNumber($x1315, $global)) && $x1317 < $x1318));
if (!JS::toBoolean($x1316, $global)) { break; }

unset($x1320, $W1320, $S1320, $U1320);
$x1321 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 397, 11, '<image>/04_array.js');
$x1320 =& $x1321[0]; list(,$W1320,$S1320,$U1320) = $x1321;
$x1319 = !(((gettype($x1320) === gettype(JS::$undefined) && $x1320 === JS::$undefined))|| (((is_float($x1320) || is_int($x1320)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1320 == JS::$undefined));
if (JS::toBoolean($x1319, $global)) {
unset($x1322, $W1322, $S1322, $U1322);
$x1323 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 398, 34, '<image>/04_array.js');
$x1322 =& $x1323[0]; list(,$W1322,$S1322,$U1322) = $x1323;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1326 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 398, 22, '<image>/04_array.js');
$_TypeError =& $x1326[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1326;
$x1327 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1328 = $x1327($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1328->class) && $x1328->class === 'Error' && !isset($x1328->properties['file']) && !isset($x1328->properties['line']) && !isset($x1328->properties['column'])) {$x1328->properties['file'] = '<image>/04_array.js';$x1328->properties['line'] = 398;$x1328->properties['column'] = 22;$x1328->attributes['file'] = $x1328->attributes['line'] = $x1328->attributes['column'] = 0; }
throw new JSException($x1328, 398, 22, '<image>/04_array.js');
}
$x1324 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1325 = $x1324($global, $global, $_callbackFn, array($_value, $x1322, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1325;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1245=&$scope->properties[\'arguments\'];$x1245->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1245->properties[$i]=$args[$i];$x1245->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1250,$W1250,$S1250,$U1250);$x1251=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',380,10,\'<image>/04_array.js\');$x1250=&$x1251[0];list(,$W1250,$S1250,$U1250)=$x1251;$x1247=JS::toPrimitive($x1250,$global);$x1248=JS::toPrimitive(1,$global);$x1249=(is_string($x1247)&&is_string($x1248)?strcmp($x1247,$x1248)<0:(!is_nan($x1252=JS::toNumber($x1247,$global))&&!is_nan($x1253=JS::toNumber($x1248,$global))&&$x1252<$x1253));$x1246=$x1249;if(JS::toBoolean($x1246,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1257=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',380,25,\'<image>/04_array.js\');$_arguments=&$x1257[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1257;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1258=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',380,25,\'<image>/04_array.js\');$_ReferenceError=&$x1258[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1258;$x1259=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',380,25);$x1260=$x1259($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1260->class)&&$x1260->class===\'Error\'&&!isset($x1260->properties[\'file\'])&&!isset($x1260->properties[\'line\'])&&!isset($x1260->properties[\'column\'])){$x1260->properties[\'file\']=\'<image>/04_array.js\';$x1260->properties[\'line\']=380;$x1260->properties[\'column\']=25;$x1260->attributes[\'file\']=$x1260->attributes[\'line\']=$x1260->attributes[\'column\']=0;}throw new JSException($x1260,380,25,\'<image>/04_array.js\');}unset($x1261,$W1261,$S1261,$U1261);$x1262=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',380,34,\'<image>/04_array.js\');$x1261=&$x1262[0];list(,$W1261,$S1261,$U1261)=$x1262;$x1254=JS::toPrimitive($x1261,$global);$x1255=JS::toPrimitive(2,$global);$x1256=(is_string($x1254)&&is_string($x1255)?strcmp($x1254,$x1255)<0:(!is_nan($x1263=JS::toNumber($x1254,$global))&&!is_nan($x1264=JS::toNumber($x1255,$global))&&$x1263<$x1264));$x1246=$x1256;}if(JS::toBoolean($x1246,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1267=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',381,13,\'<image>/04_array.js\');$_TypeError=&$x1267[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1267;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1268=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',381,13,\'<image>/04_array.js\');$_ReferenceError=&$x1268[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1268;$x1269=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,13);$x1270=$x1269($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1270->class)&&$x1270->class===\'Error\'&&!isset($x1270->properties[\'file\'])&&!isset($x1270->properties[\'line\'])&&!isset($x1270->properties[\'column\'])){$x1270->properties[\'file\']=\'<image>/04_array.js\';$x1270->properties[\'line\']=381;$x1270->properties[\'column\']=13;$x1270->attributes[\'file\']=$x1270->attributes[\'line\']=$x1270->attributes[\'column\']=0;}throw new JSException($x1270,381,13,\'<image>/04_array.js\');}$x1265=clone JS::$objectTemplate;unset($x1271,$W1271,$S1271,$U1271);$x1272=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,(string)\'prototype\',381,9,\'<image>/04_array.js\');$x1271=&$x1272[0];list(,$W1271,$S1271,$U1271)=$x1272;$x1266=$x1271;$x1265->prototype=$x1266;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1276=$x1275($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1276->class)&&$x1276->class===\'Error\'&&!isset($x1276->properties[\'file\'])&&!isset($x1276->properties[\'line\'])&&!isset($x1276->properties[\'column\'])){$x1276->properties[\'file\']=\'<image>/04_array.js\';$x1276->properties[\'line\']=381;$x1276->properties[\'column\']=9;$x1276->attributes[\'file\']=$x1276->attributes[\'line\']=$x1276->attributes[\'column\']=0;}throw new JSException($x1276,381,9,\'<image>/04_array.js\');}$x1273=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1274=$x1273($global,$x1265,$_TypeError,array(\'Array.prototype.reduce(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1266=$x1274;if(is_object($x1266)&&$x1266!==JS::$undefined){$x1265=$x1266;}if(isset($x1265->class)&&$x1265->class===\'Error\'&&!isset($x1265->properties[\'file\'])&&!isset($x1265->properties[\'line\'])&&!isset($x1265->properties[\'column\'])){$x1265->properties[\'file\']=\'<image>/04_array.js\';$x1265->properties[\'line\']=381;$x1265->properties[\'column\']=3;$x1265->attributes[\'file\']=$x1265->attributes[\'line\']=$x1265->attributes[\'column\']=0;}throw new JSException($x1265,381,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1280=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',386,6,\'<image>/04_array.js\');$_arguments=&$x1280[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1280;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1281=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',386,6,\'<image>/04_array.js\');$_ReferenceError=&$x1281[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1281;$x1282=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',386,6);$x1283=$x1282($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1283->class)&&$x1283->class===\'Error\'&&!isset($x1283->properties[\'file\'])&&!isset($x1283->properties[\'line\'])&&!isset($x1283->properties[\'column\'])){$x1283->properties[\'file\']=\'<image>/04_array.js\';$x1283->properties[\'line\']=386;$x1283->properties[\'column\']=6;$x1283->attributes[\'file\']=$x1283->attributes[\'line\']=$x1283->attributes[\'column\']=0;}throw new JSException($x1283,386,6,\'<image>/04_array.js\');}unset($x1284,$W1284,$S1284,$U1284);$x1285=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',386,15,\'<image>/04_array.js\');$x1284=&$x1285[0];list(,$W1284,$S1284,$U1284)=$x1285;$x1277=JS::toPrimitive($x1284,$global);$x1278=JS::toPrimitive(1,$global);$x1279=(is_string($x1278)&&is_string($x1277)?strcmp($x1278,$x1277)<0:(!is_nan($x1286=JS::toNumber($x1278,$global))&&!is_nan($x1287=JS::toNumber($x1277,$global))&&$x1286<$x1287));if(JS::toBoolean($x1279,$global)){unset($x1288,$W1288,$S1288,$U1288);$x1289=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,387,20,\'<image>/04_array.js\');$x1288=&$x1289[0];list(,$W1288,$S1288,$U1288)=$x1289;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1288;$x1290=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1290;}else{for($x1291=0;;++$x1291){if($x1291===0){$x1292=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1292;}if($x1291!==0){$x1293=++$_i;}unset($x1298,$W1298,$S1298,$U1298);$x1299=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',391,23,\'<image>/04_array.js\');$x1298=&$x1299[0];list(,$W1298,$S1298,$U1298)=$x1299;$x1295=JS::toPrimitive($_i,$global);$x1296=JS::toPrimitive($x1298,$global);$x1297=(is_string($x1295)&&is_string($x1296)?strcmp($x1295,$x1296)<0:(!is_nan($x1300=JS::toNumber($x1295,$global))&&!is_nan($x1301=JS::toNumber($x1296,$global))&&$x1300<$x1301));$x1294=$x1297;if(JS::toBoolean($x1294,$global)){unset($x1303,$W1303,$S1303,$U1303);$x1304=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,391,38,\'<image>/04_array.js\');$x1303=&$x1304[0];list(,$W1303,$S1303,$U1303)=$x1304;$x1302=(((gettype($x1303)===gettype(JS::$undefined)&&$x1303===JS::$undefined))||(((is_float($x1303)||is_int($x1303))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1303==JS::$undefined));$x1294=$x1302;}if(!JS::toBoolean($x1294,$global)){break;}}unset($x1305,$W1305,$S1305,$U1305);$x1306=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,392,15,\'<image>/04_array.js\');$x1305=&$x1306[0];list(,$W1305,$S1305,$U1305)=$x1306;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1305;$x1307=JS::toPrimitive($_i,$global);$x1308=JS::toPrimitive(1,$global);$x1309=(is_string($x1307)||is_string($x1308)?JS::toString($x1307,$global).JS::toString($x1308,$global):JS::toNumber($x1307,$global)+JS::toNumber($x1308,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1309;}for($x1310=0;;++$x1310){if($x1310===0){unset($x1311,$W1311,$S1311,$U1311);$x1312=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',396,19,\'<image>/04_array.js\');$x1311=&$x1312[0];list(,$W1311,$S1311,$U1311)=$x1312;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1311;}if($x1310!==0){$x1313=++$_i;}$x1314=JS::toPrimitive($_i,$global);$x1315=JS::toPrimitive($_l,$global);$x1316=(is_string($x1314)&&is_string($x1315)?strcmp($x1314,$x1315)<0:(!is_nan($x1317=JS::toNumber($x1314,$global))&&!is_nan($x1318=JS::toNumber($x1315,$global))&&$x1317<$x1318));if(!JS::toBoolean($x1316,$global)){break;}unset($x1320,$W1320,$S1320,$U1320);$x1321=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,397,11,\'<image>/04_array.js\');$x1320=&$x1321[0];list(,$W1320,$S1320,$U1320)=$x1321;$x1319=!(((gettype($x1320)===gettype(JS::$undefined)&&$x1320===JS::$undefined))||(((is_float($x1320)||is_int($x1320))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1320==JS::$undefined));if(JS::toBoolean($x1319,$global)){unset($x1322,$W1322,$S1322,$U1322);$x1323=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,398,34,\'<image>/04_array.js\');$x1322=&$x1323[0];list(,$W1322,$S1322,$U1322)=$x1323;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1326=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',398,22,\'<image>/04_array.js\');$_TypeError=&$x1326[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1326;$x1327=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1328=$x1327($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1328->class)&&$x1328->class===\'Error\'&&!isset($x1328->properties[\'file\'])&&!isset($x1328->properties[\'line\'])&&!isset($x1328->properties[\'column\'])){$x1328->properties[\'file\']=\'<image>/04_array.js\';$x1328->properties[\'line\']=398;$x1328->properties[\'column\']=22;$x1328->attributes[\'file\']=$x1328->attributes[\'line\']=$x1328->attributes[\'column\']=0;}throw new JSException($x1328,398,22,\'<image>/04_array.js\');}$x1324=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1325=$x1324($global,$global,$_callbackFn,array($_value,$x1322,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1325;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1341 =& $scope->properties['arguments'];
$x1341->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1341->properties[$i] = $args[$i];
$x1341->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1346, $W1346, $S1346, $U1346);
$x1347 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 406, 10, '<image>/04_array.js');
$x1346 =& $x1347[0]; list(,$W1346,$S1346,$U1346) = $x1347;
$x1343 = JS::toPrimitive($x1346, $global);
$x1344 = JS::toPrimitive(1, $global);
$x1345 = (is_string($x1343) && is_string($x1344) ? strcmp($x1343, $x1344) < 0 : (!is_nan($x1348 = JS::toNumber($x1343, $global)) && !is_nan($x1349 = JS::toNumber($x1344, $global)) && $x1348 < $x1349));
$x1342 = $x1345;
if (JS::toBoolean($x1342, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1353 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 406, 25, '<image>/04_array.js');
$_arguments =& $x1353[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1353;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1354 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 406, 25, '<image>/04_array.js');
$_ReferenceError =& $x1354[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1354;
$x1355 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 406, 25);
$x1356 = $x1355($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1356->class) && $x1356->class === 'Error' && !isset($x1356->properties['file']) && !isset($x1356->properties['line']) && !isset($x1356->properties['column'])) {$x1356->properties['file'] = '<image>/04_array.js';$x1356->properties['line'] = 406;$x1356->properties['column'] = 25;$x1356->attributes['file'] = $x1356->attributes['line'] = $x1356->attributes['column'] = 0; }
throw new JSException($x1356, 406, 25, '<image>/04_array.js');
}
unset($x1357, $W1357, $S1357, $U1357);
$x1358 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 406, 34, '<image>/04_array.js');
$x1357 =& $x1358[0]; list(,$W1357,$S1357,$U1357) = $x1358;
$x1350 = JS::toPrimitive($x1357, $global);
$x1351 = JS::toPrimitive(2, $global);
$x1352 = (is_string($x1350) && is_string($x1351) ? strcmp($x1350, $x1351) < 0 : (!is_nan($x1359 = JS::toNumber($x1350, $global)) && !is_nan($x1360 = JS::toNumber($x1351, $global)) && $x1359 < $x1360));
$x1342 = $x1352; }
if (JS::toBoolean($x1342, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1363 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 407, 13, '<image>/04_array.js');
$_TypeError =& $x1363[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1363;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1364 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 407, 13, '<image>/04_array.js');
$_ReferenceError =& $x1364[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1364;
$x1365 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 13);
$x1366 = $x1365($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1366->class) && $x1366->class === 'Error' && !isset($x1366->properties['file']) && !isset($x1366->properties['line']) && !isset($x1366->properties['column'])) {$x1366->properties['file'] = '<image>/04_array.js';$x1366->properties['line'] = 407;$x1366->properties['column'] = 13;$x1366->attributes['file'] = $x1366->attributes['line'] = $x1366->attributes['column'] = 0; }
throw new JSException($x1366, 407, 13, '<image>/04_array.js');
}
$x1361 = clone JS::$objectTemplate;
unset($x1367, $W1367, $S1367, $U1367);
$x1368 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, (string) 'prototype', 407, 9, '<image>/04_array.js');
$x1367 =& $x1368[0]; list(,$W1367,$S1367,$U1367) = $x1368;
$x1362 = $x1367;
$x1361->prototype = $x1362;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1371 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1372 = $x1371($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1372->class) && $x1372->class === 'Error' && !isset($x1372->properties['file']) && !isset($x1372->properties['line']) && !isset($x1372->properties['column'])) {$x1372->properties['file'] = '<image>/04_array.js';$x1372->properties['line'] = 407;$x1372->properties['column'] = 9;$x1372->attributes['file'] = $x1372->attributes['line'] = $x1372->attributes['column'] = 0; }
throw new JSException($x1372, 407, 9, '<image>/04_array.js');
}
$x1369 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1370 = $x1369($global, $x1361, $_TypeError, array('Array.prototype.reduceRight(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1362 = $x1370;
if (is_object($x1362) && $x1362 !== JS::$undefined) { $x1361 = $x1362; }
if (isset($x1361->class) && $x1361->class === 'Error' && !isset($x1361->properties['file']) && !isset($x1361->properties['line']) && !isset($x1361->properties['column'])) {$x1361->properties['file'] = '<image>/04_array.js';$x1361->properties['line'] = 407;$x1361->properties['column'] = 3;$x1361->attributes['file'] = $x1361->attributes['line'] = $x1361->attributes['column'] = 0; }
throw new JSException($x1361, 407, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1376 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'arguments', 412, 6, '<image>/04_array.js');
$_arguments =& $x1376[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1376;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1377 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 412, 6, '<image>/04_array.js');
$_ReferenceError =& $x1377[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1377;
$x1378 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 412, 6);
$x1379 = $x1378($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1379->class) && $x1379->class === 'Error' && !isset($x1379->properties['file']) && !isset($x1379->properties['line']) && !isset($x1379->properties['column'])) {$x1379->properties['file'] = '<image>/04_array.js';$x1379->properties['line'] = 412;$x1379->properties['column'] = 6;$x1379->attributes['file'] = $x1379->attributes['line'] = $x1379->attributes['column'] = 0; }
throw new JSException($x1379, 412, 6, '<image>/04_array.js');
}
unset($x1380, $W1380, $S1380, $U1380);
$x1381 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 'length', 412, 15, '<image>/04_array.js');
$x1380 =& $x1381[0]; list(,$W1380,$S1380,$U1380) = $x1381;
$x1373 = JS::toPrimitive($x1380, $global);
$x1374 = JS::toPrimitive(1, $global);
$x1375 = (is_string($x1374) && is_string($x1373) ? strcmp($x1374, $x1373) < 0 : (!is_nan($x1382 = JS::toNumber($x1374, $global)) && !is_nan($x1383 = JS::toNumber($x1373, $global)) && $x1382 < $x1383));
if (JS::toBoolean($x1375, $global)) {
unset($x1384, $W1384, $S1384, $U1384);
$x1385 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, (string) 1, 413, 20, '<image>/04_array.js');
$x1384 =& $x1385[0]; list(,$W1384,$S1384,$U1384) = $x1385;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1384;
unset($x1386, $W1386, $S1386, $U1386);
$x1387 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 414, 11, '<image>/04_array.js');
$x1386 =& $x1387[0]; list(,$W1386,$S1386,$U1386) = $x1387;
$x1388 = (JS::toNumber($x1386, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1388;;
}
else {
for ($x1389 = 0;; ++$x1389) {
if ($x1389 === 0) {
unset($x1390, $W1390, $S1390, $U1390);
$x1391 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) 'length', 417, 16, '<image>/04_array.js');
$x1390 =& $x1391[0]; list(,$W1390,$S1390,$U1390) = $x1391;
$x1392 = (JS::toNumber($x1390, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1392;
}
if ($x1389 !== 0) {
$x1393 = --$_i;
}
$x1395 = JS::toPrimitive($_i, $global);
$x1396 = JS::toPrimitive(0, $global);
$x1397 = !(is_string($x1395) && is_string($x1396) ? strcmp($x1395, $x1396) < 0 : (!is_nan($x1398 = JS::toNumber($x1395, $global)) && !is_nan($x1399 = JS::toNumber($x1396, $global)) && $x1398 < $x1399));
$x1394 = $x1397;
if (JS::toBoolean($x1394, $global)) {
unset($x1401, $W1401, $S1401, $U1401);
$x1402 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 417, 43, '<image>/04_array.js');
$x1401 =& $x1402[0]; list(,$W1401,$S1401,$U1401) = $x1402;
$x1400 = (((gettype($x1401) === gettype(JS::$undefined) && $x1401 === JS::$undefined))|| (((is_float($x1401) || is_int($x1401)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1401 == JS::$undefined));
$x1394 = $x1400; }
if (!JS::toBoolean($x1394, $global)) { break; }

;
};
unset($x1403, $W1403, $S1403, $U1403);
$x1404 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 418, 15, '<image>/04_array.js');
$x1403 =& $x1404[0]; list(,$W1403,$S1403,$U1403) = $x1404;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1403;
$x1405 = (JS::toNumber($_i, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1405;;
};
for ($x1406 = 0;; ++$x1406) {
if ($x1406 !== 0) {
$x1407 = --$_i;
}
$x1408 = JS::toPrimitive($_i, $global);
$x1409 = JS::toPrimitive(0, $global);
$x1410 = !(is_string($x1408) && is_string($x1409) ? strcmp($x1408, $x1409) < 0 : (!is_nan($x1411 = JS::toNumber($x1408, $global)) && !is_nan($x1412 = JS::toNumber($x1409, $global)) && $x1411 < $x1412));
if (!JS::toBoolean($x1410, $global)) { break; }

unset($x1414, $W1414, $S1414, $U1414);
$x1415 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 423, 11, '<image>/04_array.js');
$x1414 =& $x1415[0]; list(,$W1414,$S1414,$U1414) = $x1415;
$x1413 = !(((gettype($x1414) === gettype(JS::$undefined) && $x1414 === JS::$undefined))|| (((is_float($x1414) || is_int($x1414)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1414 == JS::$undefined));
if (JS::toBoolean($x1413, $global)) {
unset($x1416, $W1416, $S1416, $U1416);
$x1417 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, (string) $_i, 424, 34, '<image>/04_array.js');
$x1416 =& $x1417[0]; list(,$W1416,$S1416,$U1416) = $x1417;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1420 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 424, 22, '<image>/04_array.js');
$_TypeError =& $x1420[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1420;
$x1421 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1422 = $x1421($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1422->class) && $x1422->class === 'Error' && !isset($x1422->properties['file']) && !isset($x1422->properties['line']) && !isset($x1422->properties['column'])) {$x1422->properties['file'] = '<image>/04_array.js';$x1422->properties['line'] = 424;$x1422->properties['column'] = 22;$x1422->attributes['file'] = $x1422->attributes['line'] = $x1422->attributes['column'] = 0; }
throw new JSException($x1422, 424, 22, '<image>/04_array.js');
}
$x1418 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1419 = $x1418($global, $global, $_callbackFn, array($_value, $x1416, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1419;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1341=&$scope->properties[\'arguments\'];$x1341->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1341->properties[$i]=$args[$i];$x1341->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1346,$W1346,$S1346,$U1346);$x1347=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',406,10,\'<image>/04_array.js\');$x1346=&$x1347[0];list(,$W1346,$S1346,$U1346)=$x1347;$x1343=JS::toPrimitive($x1346,$global);$x1344=JS::toPrimitive(1,$global);$x1345=(is_string($x1343)&&is_string($x1344)?strcmp($x1343,$x1344)<0:(!is_nan($x1348=JS::toNumber($x1343,$global))&&!is_nan($x1349=JS::toNumber($x1344,$global))&&$x1348<$x1349));$x1342=$x1345;if(JS::toBoolean($x1342,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1353=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',406,25,\'<image>/04_array.js\');$_arguments=&$x1353[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1353;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1354=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',406,25,\'<image>/04_array.js\');$_ReferenceError=&$x1354[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1354;$x1355=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',406,25);$x1356=$x1355($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1356->class)&&$x1356->class===\'Error\'&&!isset($x1356->properties[\'file\'])&&!isset($x1356->properties[\'line\'])&&!isset($x1356->properties[\'column\'])){$x1356->properties[\'file\']=\'<image>/04_array.js\';$x1356->properties[\'line\']=406;$x1356->properties[\'column\']=25;$x1356->attributes[\'file\']=$x1356->attributes[\'line\']=$x1356->attributes[\'column\']=0;}throw new JSException($x1356,406,25,\'<image>/04_array.js\');}unset($x1357,$W1357,$S1357,$U1357);$x1358=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',406,34,\'<image>/04_array.js\');$x1357=&$x1358[0];list(,$W1357,$S1357,$U1357)=$x1358;$x1350=JS::toPrimitive($x1357,$global);$x1351=JS::toPrimitive(2,$global);$x1352=(is_string($x1350)&&is_string($x1351)?strcmp($x1350,$x1351)<0:(!is_nan($x1359=JS::toNumber($x1350,$global))&&!is_nan($x1360=JS::toNumber($x1351,$global))&&$x1359<$x1360));$x1342=$x1352;}if(JS::toBoolean($x1342,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1363=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',407,13,\'<image>/04_array.js\');$_TypeError=&$x1363[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1363;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1364=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',407,13,\'<image>/04_array.js\');$_ReferenceError=&$x1364[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1364;$x1365=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,13);$x1366=$x1365($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1366->class)&&$x1366->class===\'Error\'&&!isset($x1366->properties[\'file\'])&&!isset($x1366->properties[\'line\'])&&!isset($x1366->properties[\'column\'])){$x1366->properties[\'file\']=\'<image>/04_array.js\';$x1366->properties[\'line\']=407;$x1366->properties[\'column\']=13;$x1366->attributes[\'file\']=$x1366->attributes[\'line\']=$x1366->attributes[\'column\']=0;}throw new JSException($x1366,407,13,\'<image>/04_array.js\');}$x1361=clone JS::$objectTemplate;unset($x1367,$W1367,$S1367,$U1367);$x1368=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,(string)\'prototype\',407,9,\'<image>/04_array.js\');$x1367=&$x1368[0];list(,$W1367,$S1367,$U1367)=$x1368;$x1362=$x1367;$x1361->prototype=$x1362;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1371=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1372=$x1371($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1372->class)&&$x1372->class===\'Error\'&&!isset($x1372->properties[\'file\'])&&!isset($x1372->properties[\'line\'])&&!isset($x1372->properties[\'column\'])){$x1372->properties[\'file\']=\'<image>/04_array.js\';$x1372->properties[\'line\']=407;$x1372->properties[\'column\']=9;$x1372->attributes[\'file\']=$x1372->attributes[\'line\']=$x1372->attributes[\'column\']=0;}throw new JSException($x1372,407,9,\'<image>/04_array.js\');}$x1369=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1370=$x1369($global,$x1361,$_TypeError,array(\'Array.prototype.reduceRight(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1362=$x1370;if(is_object($x1362)&&$x1362!==JS::$undefined){$x1361=$x1362;}if(isset($x1361->class)&&$x1361->class===\'Error\'&&!isset($x1361->properties[\'file\'])&&!isset($x1361->properties[\'line\'])&&!isset($x1361->properties[\'column\'])){$x1361->properties[\'file\']=\'<image>/04_array.js\';$x1361->properties[\'line\']=407;$x1361->properties[\'column\']=3;$x1361->attributes[\'file\']=$x1361->attributes[\'line\']=$x1361->attributes[\'column\']=0;}throw new JSException($x1361,407,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1376=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'arguments\',412,6,\'<image>/04_array.js\');$_arguments=&$x1376[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1376;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1377=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'ReferenceError\',412,6,\'<image>/04_array.js\');$_ReferenceError=&$x1377[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1377;$x1378=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',412,6);$x1379=$x1378($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1379->class)&&$x1379->class===\'Error\'&&!isset($x1379->properties[\'file\'])&&!isset($x1379->properties[\'line\'])&&!isset($x1379->properties[\'column\'])){$x1379->properties[\'file\']=\'<image>/04_array.js\';$x1379->properties[\'line\']=412;$x1379->properties[\'column\']=6;$x1379->attributes[\'file\']=$x1379->attributes[\'line\']=$x1379->attributes[\'column\']=0;}throw new JSException($x1379,412,6,\'<image>/04_array.js\');}unset($x1380,$W1380,$S1380,$U1380);$x1381=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)\'length\',412,15,\'<image>/04_array.js\');$x1380=&$x1381[0];list(,$W1380,$S1380,$U1380)=$x1381;$x1373=JS::toPrimitive($x1380,$global);$x1374=JS::toPrimitive(1,$global);$x1375=(is_string($x1374)&&is_string($x1373)?strcmp($x1374,$x1373)<0:(!is_nan($x1382=JS::toNumber($x1374,$global))&&!is_nan($x1383=JS::toNumber($x1373,$global))&&$x1382<$x1383));if(JS::toBoolean($x1375,$global)){unset($x1384,$W1384,$S1384,$U1384);$x1385=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,(string)1,413,20,\'<image>/04_array.js\');$x1384=&$x1385[0];list(,$W1384,$S1384,$U1384)=$x1385;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1384;unset($x1386,$W1386,$S1386,$U1386);$x1387=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',414,11,\'<image>/04_array.js\');$x1386=&$x1387[0];list(,$W1386,$S1386,$U1386)=$x1387;$x1388=(JS::toNumber($x1386,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1388;}else{for($x1389=0;;++$x1389){if($x1389===0){unset($x1390,$W1390,$S1390,$U1390);$x1391=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)\'length\',417,16,\'<image>/04_array.js\');$x1390=&$x1391[0];list(,$W1390,$S1390,$U1390)=$x1391;$x1392=(JS::toNumber($x1390,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1392;}if($x1389!==0){$x1393=--$_i;}$x1395=JS::toPrimitive($_i,$global);$x1396=JS::toPrimitive(0,$global);$x1397=!(is_string($x1395)&&is_string($x1396)?strcmp($x1395,$x1396)<0:(!is_nan($x1398=JS::toNumber($x1395,$global))&&!is_nan($x1399=JS::toNumber($x1396,$global))&&$x1398<$x1399));$x1394=$x1397;if(JS::toBoolean($x1394,$global)){unset($x1401,$W1401,$S1401,$U1401);$x1402=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,417,43,\'<image>/04_array.js\');$x1401=&$x1402[0];list(,$W1401,$S1401,$U1401)=$x1402;$x1400=(((gettype($x1401)===gettype(JS::$undefined)&&$x1401===JS::$undefined))||(((is_float($x1401)||is_int($x1401))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1401==JS::$undefined));$x1394=$x1400;}if(!JS::toBoolean($x1394,$global)){break;}}unset($x1403,$W1403,$S1403,$U1403);$x1404=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,418,15,\'<image>/04_array.js\');$x1403=&$x1404[0];list(,$W1403,$S1403,$U1403)=$x1404;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1403;$x1405=(JS::toNumber($_i,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1405;}for($x1406=0;;++$x1406){if($x1406!==0){$x1407=--$_i;}$x1408=JS::toPrimitive($_i,$global);$x1409=JS::toPrimitive(0,$global);$x1410=!(is_string($x1408)&&is_string($x1409)?strcmp($x1408,$x1409)<0:(!is_nan($x1411=JS::toNumber($x1408,$global))&&!is_nan($x1412=JS::toNumber($x1409,$global))&&$x1411<$x1412));if(!JS::toBoolean($x1410,$global)){break;}unset($x1414,$W1414,$S1414,$U1414);$x1415=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,423,11,\'<image>/04_array.js\');$x1414=&$x1415[0];list(,$W1414,$S1414,$U1414)=$x1415;$x1413=!(((gettype($x1414)===gettype(JS::$undefined)&&$x1414===JS::$undefined))||(((is_float($x1414)||is_int($x1414))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1414==JS::$undefined));if(JS::toBoolean($x1413,$global)){unset($x1416,$W1416,$S1416,$U1416);$x1417=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,(string)$_i,424,34,\'<image>/04_array.js\');$x1416=&$x1417[0];list(,$W1416,$S1416,$U1416)=$x1417;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1420=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,(string)\'TypeError\',424,22,\'<image>/04_array.js\');$_TypeError=&$x1420[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1420;$x1421=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1422=$x1421($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1422->class)&&$x1422->class===\'Error\'&&!isset($x1422->properties[\'file\'])&&!isset($x1422->properties[\'line\'])&&!isset($x1422->properties[\'column\'])){$x1422->properties[\'file\']=\'<image>/04_array.js\';$x1422->properties[\'line\']=424;$x1422->properties[\'column\']=22;$x1422->attributes[\'file\']=$x1422->attributes[\'line\']=$x1422->attributes[\'column\']=0;}throw new JSException($x1422,424,22,\'<image>/04_array.js\');}$x1418=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1419=$x1418($global,$global,$_callbackFn,array($_value,$x1416,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1419;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/04_array.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/04_array.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Array;
$x76 = clone JS::$functionTemplate; $x76->call = '_339fc8fcf8563d9777a12bd15b91ae1b_1'; $x76->parameters = array (
); $x76->name = 'Array'; $x76->scope = $scope; $x76->properties['prototype'] = clone JS::$objectTemplate; $x76->attributes['prototype'] = JS::WRITABLE; $x76->properties['prototype']->properties['constructor'] = $x76; $x76->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x76->properties['length'] = 0; $x76->attributes['length'] = 0;
$scope->properties['Array'] = JS::$undefined; $_Array =& $scope->properties['Array'];
$UArray = FALSE;
$_Array = $x76;
$x83 = clone JS::$functionTemplate; $x83->call = '_339fc8fcf8563d9777a12bd15b91ae1b_5'; $x83->parameters = array (
  0 => 'arg',
); $x83->scope = $scope; $x83->properties['prototype'] = clone JS::$objectTemplate; $x83->attributes['prototype'] = JS::WRITABLE; $x83->properties['prototype']->properties['constructor'] = $x83; $x83->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x83->properties['length'] = 1; $x83->attributes['length'] = 0;
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x84 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 30, 15, '<image>/04_array.js');
$_TypeError =& $x84[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x84;
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x86 = $x85($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/04_array.js';$x86->properties['line'] = 30;$x86->properties['column'] = 15;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 30, 15, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x87, $W87, $S87, $U87);
$x88 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, (string) 'isArray', 30, 15, '<image>/04_array.js');
$x87 =& $x88[0]; list(,$W87,$S87,$U87) = $x88;
if ($U87 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties['isArray'] = $x87; $x87 =& $_Array->properties['isArray']; $_Array->attributes['isArray'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U87 = FALSE; $W87 = TRUE; }
if (isset($S87)) {
$x90 = $S87->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x91 = $x90($global, $_Array, $S87, array($x83), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x89 = $x91;
} else {
if (!$U87) {$x89 = $x83;if ($W87) { $x87 = $x83; }  }
else { $x89 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array' &&  is_int('isArray') && 'isArray' >= $_Array->properties['length']) { $_Array->properties['length'] = 'isArray' + 1; };
$x92 = clone JS::$objectTemplate;
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 38, 17, '<image>/04_array.js');
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
$x94 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x95 = $x94($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x95->class) && $x95->class === 'Error' && !isset($x95->properties['file']) && !isset($x95->properties['line']) && !isset($x95->properties['column'])) {$x95->properties['file'] = '<image>/04_array.js';$x95->properties['line'] = 38;$x95->properties['column'] = 17;$x95->attributes['file'] = $x95->attributes['line'] = $x95->attributes['column'] = 0; }
throw new JSException($x95, 38, 17, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x96, $W96, $S96, $U96);
$x97 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, (string) 'prototype', 38, 17, '<image>/04_array.js');
$x96 =& $x97[0]; list(,$W96,$S96,$U96) = $x97;
if ($U96 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties['prototype'] = $x96; $x96 =& $_Array->properties['prototype']; $_Array->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U96 = FALSE; $W96 = TRUE; }
if (isset($S96)) {
$x99 = $S96->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x100 = $x99($global, $_Array, $S96, array($x92), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x98 = $x100;
} else {
if (!$U96) {$x98 = $x92;if ($W96) { $x96 = $x92; }  }
else { $x98 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Array->properties['length']) { $_Array->properties['length'] = 'prototype' + 1; };
$_Array->prototype =$_Array->properties['prototype'];
unset($_Object, $WObject, $SObject, $UObject);
$x101 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'Object', 40, 50, '<image>/04_array.js');
$_Object =& $x101[0]; list(,$WObject,$SObject,$UObject) = $x101;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x102 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'ReferenceError', 40, 50, '<image>/04_array.js');
$_ReferenceError =& $x102[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x102;
$x103 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 40, 50);
$x104 = $x103($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/04_array.js';$x104->properties['line'] = 40;$x104->properties['column'] = 50;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 40, 50, '<image>/04_array.js');
}
$_Array->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Array->properties['prototype']->class = 'Array';
$_Array->properties['prototype']->extensible = TRUE;
unset($x105, $W105, $S105, $U105);
$x106 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 43, 6, '<image>/04_array.js');
$x105 =& $x106[0]; list(,$W105,$S105,$U105) = $x106;
if ($x105 === JS::$undefined || $x105 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 43, 29, '<image>/04_array.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x109 = $x108($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/04_array.js';$x109->properties['line'] = 43;$x109->properties['column'] = 29;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 43, 29, '<image>/04_array.js');
}
$x105 = JS::toObject($x105, $global);
unset($x110, $W110, $S110, $U110);
$x111 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x105, (string) 'constructor', 43, 29, '<image>/04_array.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
if ($U110 && (!isset($x105->extensible) || $x105->extensible)) {$x105->properties['constructor'] = $x110; $x110 =& $x105->properties['constructor']; $x105->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U110 = FALSE; $W110 = TRUE; }
if (isset($S110)) {
$x113 = $S110->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x114 = $x113($global, $x105, $S110, array($_Array), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x112 = $x114;
} else {
if (!$U110) {$x112 = $_Array;if ($W110) { $x110 = $_Array; }  }
else { $x112 = JS::$undefined; }
}
if (isset($x105->class) && $x105->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x105->properties['length']) { $x105->properties['length'] = 'constructor' + 1; };
$x115 = 0;
unset($x116, $W116, $S116, $U116);
$x117 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 44, 6, '<image>/04_array.js');
$x116 =& $x117[0]; list(,$W116,$S116,$U116) = $x117;
if ($x116 === JS::$undefined || $x116 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x118 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 44, 24, '<image>/04_array.js');
$_TypeError =& $x118[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x118;
$x119 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x120 = $x119($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x120->class) && $x120->class === 'Error' && !isset($x120->properties['file']) && !isset($x120->properties['line']) && !isset($x120->properties['column'])) {$x120->properties['file'] = '<image>/04_array.js';$x120->properties['line'] = 44;$x120->properties['column'] = 24;$x120->attributes['file'] = $x120->attributes['line'] = $x120->attributes['column'] = 0; }
throw new JSException($x120, 44, 24, '<image>/04_array.js');
}
$x116 = JS::toObject($x116, $global);
unset($x121, $W121, $S121, $U121);
$x122 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x116, (string) 'length', 44, 24, '<image>/04_array.js');
$x121 =& $x122[0]; list(,$W121,$S121,$U121) = $x122;
if ($U121 && (!isset($x116->extensible) || $x116->extensible)) {$x116->properties['length'] = $x121; $x121 =& $x116->properties['length']; $x116->attributes['length'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U121 = FALSE; $W121 = TRUE; }
if (isset($S121)) {
$x124 = $S121->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x125 = $x124($global, $x116, $S121, array($x115), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x123 = $x125;
} else {
if (!$U121) {$x123 = $x115;if ($W121) { $x121 = $x115; }  }
else { $x123 = JS::$undefined; }
}
if (isset($x116->class) && $x116->class === 'Array' &&  is_int('length') && 'length' >= $x116->properties['length']) { $x116->properties['length'] = 'length' + 1; };
$x139 = clone JS::$functionTemplate; $x139->call = '_339fc8fcf8563d9777a12bd15b91ae1b_6'; $x139->parameters = array (
); $x139->scope = $scope; $x139->properties['prototype'] = clone JS::$objectTemplate; $x139->attributes['prototype'] = JS::WRITABLE; $x139->properties['prototype']->properties['constructor'] = $x139; $x139->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x139->properties['length'] = 0; $x139->attributes['length'] = 0;
unset($x140, $W140, $S140, $U140);
$x141 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 46, 6, '<image>/04_array.js');
$x140 =& $x141[0]; list(,$W140,$S140,$U140) = $x141;
if ($x140 === JS::$undefined || $x140 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x142 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 46, 26, '<image>/04_array.js');
$_TypeError =& $x142[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x142;
$x143 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x144 = $x143($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error' && !isset($x144->properties['file']) && !isset($x144->properties['line']) && !isset($x144->properties['column'])) {$x144->properties['file'] = '<image>/04_array.js';$x144->properties['line'] = 46;$x144->properties['column'] = 26;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 46, 26, '<image>/04_array.js');
}
$x140 = JS::toObject($x140, $global);
unset($x145, $W145, $S145, $U145);
$x146 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x140, (string) 'toString', 46, 26, '<image>/04_array.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
if ($U145 && (!isset($x140->extensible) || $x140->extensible)) {$x140->properties['toString'] = $x145; $x145 =& $x140->properties['toString']; $x140->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U145 = FALSE; $W145 = TRUE; }
if (isset($S145)) {
$x148 = $S145->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x149 = $x148($global, $x140, $S145, array($x139), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x147 = $x149;
} else {
if (!$U145) {$x147 = $x139;if ($W145) { $x145 = $x139; }  }
else { $x147 = JS::$undefined; }
}
if (isset($x140->class) && $x140->class === 'Array' &&  is_int('toString') && 'toString' >= $x140->properties['length']) { $x140->properties['length'] = 'toString' + 1; };
unset($x150, $W150, $S150, $U150);
$x151 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 50, 39, '<image>/04_array.js');
$x150 =& $x151[0]; list(,$W150,$S150,$U150) = $x151;
unset($x152, $W152, $S152, $U152);
$x153 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x150, (string) 'toString', 50, 49, '<image>/04_array.js');
$x152 =& $x153[0]; list(,$W152,$S152,$U152) = $x153;
unset($x154, $W154, $S154, $U154);
$x155 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 50, 6, '<image>/04_array.js');
$x154 =& $x155[0]; list(,$W154,$S154,$U154) = $x155;
if ($x154 === JS::$undefined || $x154 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x156 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 50, 32, '<image>/04_array.js');
$_TypeError =& $x156[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x156;
$x157 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x158 = $x157($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x158->class) && $x158->class === 'Error' && !isset($x158->properties['file']) && !isset($x158->properties['line']) && !isset($x158->properties['column'])) {$x158->properties['file'] = '<image>/04_array.js';$x158->properties['line'] = 50;$x158->properties['column'] = 32;$x158->attributes['file'] = $x158->attributes['line'] = $x158->attributes['column'] = 0; }
throw new JSException($x158, 50, 32, '<image>/04_array.js');
}
$x154 = JS::toObject($x154, $global);
unset($x159, $W159, $S159, $U159);
$x160 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x154, (string) 'toLocaleString', 50, 32, '<image>/04_array.js');
$x159 =& $x160[0]; list(,$W159,$S159,$U159) = $x160;
if ($U159 && (!isset($x154->extensible) || $x154->extensible)) {$x154->properties['toLocaleString'] = $x159; $x159 =& $x154->properties['toLocaleString']; $x154->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U159 = FALSE; $W159 = TRUE; }
if (isset($S159)) {
$x162 = $S159->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x163 = $x162($global, $x154, $S159, array($x152), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x161 = $x163;
} else {
if (!$U159) {$x161 = $x152;if ($W159) { $x159 = $x152; }  }
else { $x161 = JS::$undefined; }
}
if (isset($x154->class) && $x154->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x154->properties['length']) { $x154->properties['length'] = 'toLocaleString' + 1; };
$x258 = clone JS::$functionTemplate; $x258->call = '_339fc8fcf8563d9777a12bd15b91ae1b_7'; $x258->parameters = array (
  0 => 'item',
); $x258->scope = $scope; $x258->properties['prototype'] = clone JS::$objectTemplate; $x258->attributes['prototype'] = JS::WRITABLE; $x258->properties['prototype']->properties['constructor'] = $x258; $x258->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x258->properties['length'] = 1; $x258->attributes['length'] = 0;
unset($x259, $W259, $S259, $U259);
$x260 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 52, 6, '<image>/04_array.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
if ($x259 === JS::$undefined || $x259 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x261 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 52, 24, '<image>/04_array.js');
$_TypeError =& $x261[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x261;
$x262 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x263 = $x262($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x263->class) && $x263->class === 'Error' && !isset($x263->properties['file']) && !isset($x263->properties['line']) && !isset($x263->properties['column'])) {$x263->properties['file'] = '<image>/04_array.js';$x263->properties['line'] = 52;$x263->properties['column'] = 24;$x263->attributes['file'] = $x263->attributes['line'] = $x263->attributes['column'] = 0; }
throw new JSException($x263, 52, 24, '<image>/04_array.js');
}
$x259 = JS::toObject($x259, $global);
unset($x264, $W264, $S264, $U264);
$x265 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x259, (string) 'concat', 52, 24, '<image>/04_array.js');
$x264 =& $x265[0]; list(,$W264,$S264,$U264) = $x265;
if ($U264 && (!isset($x259->extensible) || $x259->extensible)) {$x259->properties['concat'] = $x264; $x264 =& $x259->properties['concat']; $x259->attributes['concat'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U264 = FALSE; $W264 = TRUE; }
if (isset($S264)) {
$x267 = $S264->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x268 = $x267($global, $x259, $S264, array($x258), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x266 = $x268;
} else {
if (!$U264) {$x266 = $x258;if ($W264) { $x264 = $x258; }  }
else { $x266 = JS::$undefined; }
}
if (isset($x259->class) && $x259->class === 'Array' &&  is_int('concat') && 'concat' >= $x259->properties['length']) { $x259->properties['length'] = 'concat' + 1; };
$x300 = clone JS::$functionTemplate; $x300->call = '_339fc8fcf8563d9777a12bd15b91ae1b_8'; $x300->parameters = array (
  0 => 'separator',
); $x300->scope = $scope; $x300->properties['prototype'] = clone JS::$objectTemplate; $x300->attributes['prototype'] = JS::WRITABLE; $x300->properties['prototype']->properties['constructor'] = $x300; $x300->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x300->properties['length'] = 1; $x300->attributes['length'] = 0;
unset($x301, $W301, $S301, $U301);
$x302 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 73, 6, '<image>/04_array.js');
$x301 =& $x302[0]; list(,$W301,$S301,$U301) = $x302;
if ($x301 === JS::$undefined || $x301 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x303 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 73, 22, '<image>/04_array.js');
$_TypeError =& $x303[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x303;
$x304 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x305 = $x304($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x305->class) && $x305->class === 'Error' && !isset($x305->properties['file']) && !isset($x305->properties['line']) && !isset($x305->properties['column'])) {$x305->properties['file'] = '<image>/04_array.js';$x305->properties['line'] = 73;$x305->properties['column'] = 22;$x305->attributes['file'] = $x305->attributes['line'] = $x305->attributes['column'] = 0; }
throw new JSException($x305, 73, 22, '<image>/04_array.js');
}
$x301 = JS::toObject($x301, $global);
unset($x306, $W306, $S306, $U306);
$x307 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x301, (string) 'join', 73, 22, '<image>/04_array.js');
$x306 =& $x307[0]; list(,$W306,$S306,$U306) = $x307;
if ($U306 && (!isset($x301->extensible) || $x301->extensible)) {$x301->properties['join'] = $x306; $x306 =& $x301->properties['join']; $x301->attributes['join'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U306 = FALSE; $W306 = TRUE; }
if (isset($S306)) {
$x309 = $S306->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x310 = $x309($global, $x301, $S306, array($x300), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x308 = $x310;
} else {
if (!$U306) {$x308 = $x300;if ($W306) { $x306 = $x300; }  }
else { $x308 = JS::$undefined; }
}
if (isset($x301->class) && $x301->class === 'Array' &&  is_int('join') && 'join' >= $x301->properties['length']) { $x301->properties['length'] = 'join' + 1; };
$x338 = clone JS::$functionTemplate; $x338->call = '_339fc8fcf8563d9777a12bd15b91ae1b_9'; $x338->parameters = array (
); $x338->scope = $scope; $x338->properties['prototype'] = clone JS::$objectTemplate; $x338->attributes['prototype'] = JS::WRITABLE; $x338->properties['prototype']->properties['constructor'] = $x338; $x338->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x338->properties['length'] = 0; $x338->attributes['length'] = 0;
unset($x339, $W339, $S339, $U339);
$x340 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 99, 6, '<image>/04_array.js');
$x339 =& $x340[0]; list(,$W339,$S339,$U339) = $x340;
if ($x339 === JS::$undefined || $x339 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x341 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 99, 21, '<image>/04_array.js');
$_TypeError =& $x341[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x341;
$x342 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x343 = $x342($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x343->class) && $x343->class === 'Error' && !isset($x343->properties['file']) && !isset($x343->properties['line']) && !isset($x343->properties['column'])) {$x343->properties['file'] = '<image>/04_array.js';$x343->properties['line'] = 99;$x343->properties['column'] = 21;$x343->attributes['file'] = $x343->attributes['line'] = $x343->attributes['column'] = 0; }
throw new JSException($x343, 99, 21, '<image>/04_array.js');
}
$x339 = JS::toObject($x339, $global);
unset($x344, $W344, $S344, $U344);
$x345 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x339, (string) 'pop', 99, 21, '<image>/04_array.js');
$x344 =& $x345[0]; list(,$W344,$S344,$U344) = $x345;
if ($U344 && (!isset($x339->extensible) || $x339->extensible)) {$x339->properties['pop'] = $x344; $x344 =& $x339->properties['pop']; $x339->attributes['pop'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U344 = FALSE; $W344 = TRUE; }
if (isset($S344)) {
$x347 = $S344->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x348 = $x347($global, $x339, $S344, array($x338), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x346 = $x348;
} else {
if (!$U344) {$x346 = $x338;if ($W344) { $x344 = $x338; }  }
else { $x346 = JS::$undefined; }
}
if (isset($x339->class) && $x339->class === 'Array' &&  is_int('pop') && 'pop' >= $x339->properties['length']) { $x339->properties['length'] = 'pop' + 1; };
$x378 = clone JS::$functionTemplate; $x378->call = '_339fc8fcf8563d9777a12bd15b91ae1b_10'; $x378->parameters = array (
  0 => 'item',
); $x378->scope = $scope; $x378->properties['prototype'] = clone JS::$objectTemplate; $x378->attributes['prototype'] = JS::WRITABLE; $x378->properties['prototype']->properties['constructor'] = $x378; $x378->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x378->properties['length'] = 1; $x378->attributes['length'] = 0;
unset($x379, $W379, $S379, $U379);
$x380 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 111, 6, '<image>/04_array.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
if ($x379 === JS::$undefined || $x379 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x381 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 111, 22, '<image>/04_array.js');
$_TypeError =& $x381[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x381;
$x382 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x383 = $x382($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x383->class) && $x383->class === 'Error' && !isset($x383->properties['file']) && !isset($x383->properties['line']) && !isset($x383->properties['column'])) {$x383->properties['file'] = '<image>/04_array.js';$x383->properties['line'] = 111;$x383->properties['column'] = 22;$x383->attributes['file'] = $x383->attributes['line'] = $x383->attributes['column'] = 0; }
throw new JSException($x383, 111, 22, '<image>/04_array.js');
}
$x379 = JS::toObject($x379, $global);
unset($x384, $W384, $S384, $U384);
$x385 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x379, (string) 'push', 111, 22, '<image>/04_array.js');
$x384 =& $x385[0]; list(,$W384,$S384,$U384) = $x385;
if ($U384 && (!isset($x379->extensible) || $x379->extensible)) {$x379->properties['push'] = $x384; $x384 =& $x379->properties['push']; $x379->attributes['push'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U384 = FALSE; $W384 = TRUE; }
if (isset($S384)) {
$x387 = $S384->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x388 = $x387($global, $x379, $S384, array($x378), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x386 = $x388;
} else {
if (!$U384) {$x386 = $x378;if ($W384) { $x384 = $x378; }  }
else { $x386 = JS::$undefined; }
}
if (isset($x379->class) && $x379->class === 'Array' &&  is_int('push') && 'push' >= $x379->properties['length']) { $x379->properties['length'] = 'push' + 1; };
$x421 = clone JS::$functionTemplate; $x421->call = '_339fc8fcf8563d9777a12bd15b91ae1b_11'; $x421->parameters = array (
); $x421->scope = $scope; $x421->properties['prototype'] = clone JS::$objectTemplate; $x421->attributes['prototype'] = JS::WRITABLE; $x421->properties['prototype']->properties['constructor'] = $x421; $x421->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x421->properties['length'] = 0; $x421->attributes['length'] = 0;
unset($x422, $W422, $S422, $U422);
$x423 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 119, 6, '<image>/04_array.js');
$x422 =& $x423[0]; list(,$W422,$S422,$U422) = $x423;
if ($x422 === JS::$undefined || $x422 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x424 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 119, 25, '<image>/04_array.js');
$_TypeError =& $x424[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x424;
$x425 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x426 = $x425($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x426->class) && $x426->class === 'Error' && !isset($x426->properties['file']) && !isset($x426->properties['line']) && !isset($x426->properties['column'])) {$x426->properties['file'] = '<image>/04_array.js';$x426->properties['line'] = 119;$x426->properties['column'] = 25;$x426->attributes['file'] = $x426->attributes['line'] = $x426->attributes['column'] = 0; }
throw new JSException($x426, 119, 25, '<image>/04_array.js');
}
$x422 = JS::toObject($x422, $global);
unset($x427, $W427, $S427, $U427);
$x428 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x422, (string) 'reverse', 119, 25, '<image>/04_array.js');
$x427 =& $x428[0]; list(,$W427,$S427,$U427) = $x428;
if ($U427 && (!isset($x422->extensible) || $x422->extensible)) {$x422->properties['reverse'] = $x427; $x427 =& $x422->properties['reverse']; $x422->attributes['reverse'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U427 = FALSE; $W427 = TRUE; }
if (isset($S427)) {
$x430 = $S427->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x431 = $x430($global, $x422, $S427, array($x421), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x429 = $x431;
} else {
if (!$U427) {$x429 = $x421;if ($W427) { $x427 = $x421; }  }
else { $x429 = JS::$undefined; }
}
if (isset($x422->class) && $x422->class === 'Array' &&  is_int('reverse') && 'reverse' >= $x422->properties['length']) { $x422->properties['length'] = 'reverse' + 1; };
$x473 = clone JS::$functionTemplate; $x473->call = '_339fc8fcf8563d9777a12bd15b91ae1b_12'; $x473->parameters = array (
); $x473->scope = $scope; $x473->properties['prototype'] = clone JS::$objectTemplate; $x473->attributes['prototype'] = JS::WRITABLE; $x473->properties['prototype']->properties['constructor'] = $x473; $x473->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x473->properties['length'] = 0; $x473->attributes['length'] = 0;
unset($x474, $W474, $S474, $U474);
$x475 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 129, 6, '<image>/04_array.js');
$x474 =& $x475[0]; list(,$W474,$S474,$U474) = $x475;
if ($x474 === JS::$undefined || $x474 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x476 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 129, 23, '<image>/04_array.js');
$_TypeError =& $x476[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x476;
$x477 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x478 = $x477($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x478->class) && $x478->class === 'Error' && !isset($x478->properties['file']) && !isset($x478->properties['line']) && !isset($x478->properties['column'])) {$x478->properties['file'] = '<image>/04_array.js';$x478->properties['line'] = 129;$x478->properties['column'] = 23;$x478->attributes['file'] = $x478->attributes['line'] = $x478->attributes['column'] = 0; }
throw new JSException($x478, 129, 23, '<image>/04_array.js');
}
$x474 = JS::toObject($x474, $global);
unset($x479, $W479, $S479, $U479);
$x480 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x474, (string) 'shift', 129, 23, '<image>/04_array.js');
$x479 =& $x480[0]; list(,$W479,$S479,$U479) = $x480;
if ($U479 && (!isset($x474->extensible) || $x474->extensible)) {$x474->properties['shift'] = $x479; $x479 =& $x474->properties['shift']; $x474->attributes['shift'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U479 = FALSE; $W479 = TRUE; }
if (isset($S479)) {
$x482 = $S479->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x483 = $x482($global, $x474, $S479, array($x473), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x481 = $x483;
} else {
if (!$U479) {$x481 = $x473;if ($W479) { $x479 = $x473; }  }
else { $x481 = JS::$undefined; }
}
if (isset($x474->class) && $x474->class === 'Array' &&  is_int('shift') && 'shift' >= $x474->properties['length']) { $x474->properties['length'] = 'shift' + 1; };
$x546 = clone JS::$functionTemplate; $x546->call = '_339fc8fcf8563d9777a12bd15b91ae1b_13'; $x546->parameters = array (
  0 => 'start',
  1 => 'end',
); $x546->scope = $scope; $x546->properties['prototype'] = clone JS::$objectTemplate; $x546->attributes['prototype'] = JS::WRITABLE; $x546->properties['prototype']->properties['constructor'] = $x546; $x546->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x546->properties['length'] = 2; $x546->attributes['length'] = 0;
unset($x547, $W547, $S547, $U547);
$x548 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 145, 6, '<image>/04_array.js');
$x547 =& $x548[0]; list(,$W547,$S547,$U547) = $x548;
if ($x547 === JS::$undefined || $x547 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x549 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 145, 23, '<image>/04_array.js');
$_TypeError =& $x549[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x549;
$x550 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x551 = $x550($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x551->class) && $x551->class === 'Error' && !isset($x551->properties['file']) && !isset($x551->properties['line']) && !isset($x551->properties['column'])) {$x551->properties['file'] = '<image>/04_array.js';$x551->properties['line'] = 145;$x551->properties['column'] = 23;$x551->attributes['file'] = $x551->attributes['line'] = $x551->attributes['column'] = 0; }
throw new JSException($x551, 145, 23, '<image>/04_array.js');
}
$x547 = JS::toObject($x547, $global);
unset($x552, $W552, $S552, $U552);
$x553 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x547, (string) 'slice', 145, 23, '<image>/04_array.js');
$x552 =& $x553[0]; list(,$W552,$S552,$U552) = $x553;
if ($U552 && (!isset($x547->extensible) || $x547->extensible)) {$x547->properties['slice'] = $x552; $x552 =& $x547->properties['slice']; $x547->attributes['slice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U552 = FALSE; $W552 = TRUE; }
if (isset($S552)) {
$x555 = $S552->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x556 = $x555($global, $x547, $S552, array($x546), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x554 = $x556;
} else {
if (!$U552) {$x554 = $x546;if ($W552) { $x552 = $x546; }  }
else { $x554 = JS::$undefined; }
}
if (isset($x547->class) && $x547->class === 'Array' &&  is_int('slice') && 'slice' >= $x547->properties['length']) { $x547->properties['length'] = 'slice' + 1; };
$x710 = clone JS::$functionTemplate; $x710->call = '_339fc8fcf8563d9777a12bd15b91ae1b_14'; $x710->parameters = array (
  0 => 'compareFn',
); $x710->scope = $scope; $x710->properties['prototype'] = clone JS::$objectTemplate; $x710->attributes['prototype'] = JS::WRITABLE; $x710->properties['prototype']->properties['constructor'] = $x710; $x710->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x710->properties['length'] = 1; $x710->attributes['length'] = 0;
unset($x711, $W711, $S711, $U711);
$x712 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 171, 6, '<image>/04_array.js');
$x711 =& $x712[0]; list(,$W711,$S711,$U711) = $x712;
if ($x711 === JS::$undefined || $x711 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x713 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 171, 22, '<image>/04_array.js');
$_TypeError =& $x713[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x713;
$x714 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x715 = $x714($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x715->class) && $x715->class === 'Error' && !isset($x715->properties['file']) && !isset($x715->properties['line']) && !isset($x715->properties['column'])) {$x715->properties['file'] = '<image>/04_array.js';$x715->properties['line'] = 171;$x715->properties['column'] = 22;$x715->attributes['file'] = $x715->attributes['line'] = $x715->attributes['column'] = 0; }
throw new JSException($x715, 171, 22, '<image>/04_array.js');
}
$x711 = JS::toObject($x711, $global);
unset($x716, $W716, $S716, $U716);
$x717 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x711, (string) 'sort', 171, 22, '<image>/04_array.js');
$x716 =& $x717[0]; list(,$W716,$S716,$U716) = $x717;
if ($U716 && (!isset($x711->extensible) || $x711->extensible)) {$x711->properties['sort'] = $x716; $x716 =& $x711->properties['sort']; $x711->attributes['sort'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U716 = FALSE; $W716 = TRUE; }
if (isset($S716)) {
$x719 = $S716->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x720 = $x719($global, $x711, $S716, array($x710), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x718 = $x720;
} else {
if (!$U716) {$x718 = $x710;if ($W716) { $x716 = $x710; }  }
else { $x718 = JS::$undefined; }
}
if (isset($x711->class) && $x711->class === 'Array' &&  is_int('sort') && 'sort' >= $x711->properties['length']) { $x711->properties['length'] = 'sort' + 1; };
$x785 = clone JS::$functionTemplate; $x785->call = '_339fc8fcf8563d9777a12bd15b91ae1b_16'; $x785->parameters = array (
  0 => 'start',
  1 => 'deleteCount',
); $x785->scope = $scope; $x785->properties['prototype'] = clone JS::$objectTemplate; $x785->attributes['prototype'] = JS::WRITABLE; $x785->properties['prototype']->properties['constructor'] = $x785; $x785->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x785->properties['length'] = 2; $x785->attributes['length'] = 0;
unset($x786, $W786, $S786, $U786);
$x787 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 220, 6, '<image>/04_array.js');
$x786 =& $x787[0]; list(,$W786,$S786,$U786) = $x787;
if ($x786 === JS::$undefined || $x786 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x788 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 220, 24, '<image>/04_array.js');
$_TypeError =& $x788[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x788;
$x789 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x790 = $x789($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x790->class) && $x790->class === 'Error' && !isset($x790->properties['file']) && !isset($x790->properties['line']) && !isset($x790->properties['column'])) {$x790->properties['file'] = '<image>/04_array.js';$x790->properties['line'] = 220;$x790->properties['column'] = 24;$x790->attributes['file'] = $x790->attributes['line'] = $x790->attributes['column'] = 0; }
throw new JSException($x790, 220, 24, '<image>/04_array.js');
}
$x786 = JS::toObject($x786, $global);
unset($x791, $W791, $S791, $U791);
$x792 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x786, (string) 'splice', 220, 24, '<image>/04_array.js');
$x791 =& $x792[0]; list(,$W791,$S791,$U791) = $x792;
if ($U791 && (!isset($x786->extensible) || $x786->extensible)) {$x786->properties['splice'] = $x791; $x791 =& $x786->properties['splice']; $x786->attributes['splice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U791 = FALSE; $W791 = TRUE; }
if (isset($S791)) {
$x794 = $S791->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x795 = $x794($global, $x786, $S791, array($x785), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x793 = $x795;
} else {
if (!$U791) {$x793 = $x785;if ($W791) { $x791 = $x785; }  }
else { $x793 = JS::$undefined; }
}
if (isset($x786->class) && $x786->class === 'Array' &&  is_int('splice') && 'splice' >= $x786->properties['length']) { $x786->properties['length'] = 'splice' + 1; };
$x850 = clone JS::$functionTemplate; $x850->call = '_339fc8fcf8563d9777a12bd15b91ae1b_17'; $x850->parameters = array (
  0 => 'item',
); $x850->scope = $scope; $x850->properties['prototype'] = clone JS::$objectTemplate; $x850->attributes['prototype'] = JS::WRITABLE; $x850->properties['prototype']->properties['constructor'] = $x850; $x850->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x850->properties['length'] = 1; $x850->attributes['length'] = 0;
unset($x851, $W851, $S851, $U851);
$x852 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 257, 6, '<image>/04_array.js');
$x851 =& $x852[0]; list(,$W851,$S851,$U851) = $x852;
if ($x851 === JS::$undefined || $x851 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x853 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 257, 25, '<image>/04_array.js');
$_TypeError =& $x853[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x853;
$x854 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x855 = $x854($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x855->class) && $x855->class === 'Error' && !isset($x855->properties['file']) && !isset($x855->properties['line']) && !isset($x855->properties['column'])) {$x855->properties['file'] = '<image>/04_array.js';$x855->properties['line'] = 257;$x855->properties['column'] = 25;$x855->attributes['file'] = $x855->attributes['line'] = $x855->attributes['column'] = 0; }
throw new JSException($x855, 257, 25, '<image>/04_array.js');
}
$x851 = JS::toObject($x851, $global);
unset($x856, $W856, $S856, $U856);
$x857 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x851, (string) 'unshift', 257, 25, '<image>/04_array.js');
$x856 =& $x857[0]; list(,$W856,$S856,$U856) = $x857;
if ($U856 && (!isset($x851->extensible) || $x851->extensible)) {$x851->properties['unshift'] = $x856; $x856 =& $x851->properties['unshift']; $x851->attributes['unshift'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U856 = FALSE; $W856 = TRUE; }
if (isset($S856)) {
$x859 = $S856->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x860 = $x859($global, $x851, $S856, array($x850), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x858 = $x860;
} else {
if (!$U856) {$x858 = $x850;if ($W856) { $x856 = $x850; }  }
else { $x858 = JS::$undefined; }
}
if (isset($x851->class) && $x851->class === 'Array' &&  is_int('unshift') && 'unshift' >= $x851->properties['length']) { $x851->properties['length'] = 'unshift' + 1; };
$x900 = clone JS::$functionTemplate; $x900->call = '_339fc8fcf8563d9777a12bd15b91ae1b_18'; $x900->parameters = array (
  0 => 'search',
  1 => 'from',
); $x900->scope = $scope; $x900->properties['prototype'] = clone JS::$objectTemplate; $x900->attributes['prototype'] = JS::WRITABLE; $x900->properties['prototype']->properties['constructor'] = $x900; $x900->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x900->properties['length'] = 2; $x900->attributes['length'] = 0;
unset($x901, $W901, $S901, $U901);
$x902 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 269, 6, '<image>/04_array.js');
$x901 =& $x902[0]; list(,$W901,$S901,$U901) = $x902;
if ($x901 === JS::$undefined || $x901 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x903 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 269, 25, '<image>/04_array.js');
$_TypeError =& $x903[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x903;
$x904 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x905 = $x904($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x905->class) && $x905->class === 'Error' && !isset($x905->properties['file']) && !isset($x905->properties['line']) && !isset($x905->properties['column'])) {$x905->properties['file'] = '<image>/04_array.js';$x905->properties['line'] = 269;$x905->properties['column'] = 25;$x905->attributes['file'] = $x905->attributes['line'] = $x905->attributes['column'] = 0; }
throw new JSException($x905, 269, 25, '<image>/04_array.js');
}
$x901 = JS::toObject($x901, $global);
unset($x906, $W906, $S906, $U906);
$x907 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x901, (string) 'indexOf', 269, 25, '<image>/04_array.js');
$x906 =& $x907[0]; list(,$W906,$S906,$U906) = $x907;
if ($U906 && (!isset($x901->extensible) || $x901->extensible)) {$x901->properties['indexOf'] = $x906; $x906 =& $x901->properties['indexOf']; $x901->attributes['indexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U906 = FALSE; $W906 = TRUE; }
if (isset($S906)) {
$x909 = $S906->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x910 = $x909($global, $x901, $S906, array($x900), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x908 = $x910;
} else {
if (!$U906) {$x908 = $x900;if ($W906) { $x906 = $x900; }  }
else { $x908 = JS::$undefined; }
}
if (isset($x901->class) && $x901->class === 'Array' &&  is_int('indexOf') && 'indexOf' >= $x901->properties['length']) { $x901->properties['length'] = 'indexOf' + 1; };
$x967 = clone JS::$functionTemplate; $x967->call = '_339fc8fcf8563d9777a12bd15b91ae1b_19'; $x967->parameters = array (
  0 => 'search',
  1 => 'from',
); $x967->scope = $scope; $x967->properties['prototype'] = clone JS::$objectTemplate; $x967->attributes['prototype'] = JS::WRITABLE; $x967->properties['prototype']->properties['constructor'] = $x967; $x967->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x967->properties['length'] = 2; $x967->attributes['length'] = 0;
unset($x968, $W968, $S968, $U968);
$x969 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 285, 6, '<image>/04_array.js');
$x968 =& $x969[0]; list(,$W968,$S968,$U968) = $x969;
if ($x968 === JS::$undefined || $x968 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x970 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 285, 29, '<image>/04_array.js');
$_TypeError =& $x970[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x970;
$x971 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x972 = $x971($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x972->class) && $x972->class === 'Error' && !isset($x972->properties['file']) && !isset($x972->properties['line']) && !isset($x972->properties['column'])) {$x972->properties['file'] = '<image>/04_array.js';$x972->properties['line'] = 285;$x972->properties['column'] = 29;$x972->attributes['file'] = $x972->attributes['line'] = $x972->attributes['column'] = 0; }
throw new JSException($x972, 285, 29, '<image>/04_array.js');
}
$x968 = JS::toObject($x968, $global);
unset($x973, $W973, $S973, $U973);
$x974 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x968, (string) 'lastIndexOf', 285, 29, '<image>/04_array.js');
$x973 =& $x974[0]; list(,$W973,$S973,$U973) = $x974;
if ($U973 && (!isset($x968->extensible) || $x968->extensible)) {$x968->properties['lastIndexOf'] = $x973; $x973 =& $x968->properties['lastIndexOf']; $x968->attributes['lastIndexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U973 = FALSE; $W973 = TRUE; }
if (isset($S973)) {
$x976 = $S973->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x977 = $x976($global, $x968, $S973, array($x967), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x975 = $x977;
} else {
if (!$U973) {$x975 = $x967;if ($W973) { $x973 = $x967; }  }
else { $x975 = JS::$undefined; }
}
if (isset($x968->class) && $x968->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $x968->properties['length']) { $x968->properties['length'] = 'lastIndexOf' + 1; };
$x1015 = clone JS::$functionTemplate; $x1015->call = '_339fc8fcf8563d9777a12bd15b91ae1b_20'; $x1015->parameters = array (
  0 => 'callbackFn',
); $x1015->scope = $scope; $x1015->properties['prototype'] = clone JS::$objectTemplate; $x1015->attributes['prototype'] = JS::WRITABLE; $x1015->properties['prototype']->properties['constructor'] = $x1015; $x1015->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1015->properties['length'] = 1; $x1015->attributes['length'] = 0;
unset($x1016, $W1016, $S1016, $U1016);
$x1017 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 305, 6, '<image>/04_array.js');
$x1016 =& $x1017[0]; list(,$W1016,$S1016,$U1016) = $x1017;
if ($x1016 === JS::$undefined || $x1016 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1018 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 305, 23, '<image>/04_array.js');
$_TypeError =& $x1018[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1018;
$x1019 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1020 = $x1019($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1020->class) && $x1020->class === 'Error' && !isset($x1020->properties['file']) && !isset($x1020->properties['line']) && !isset($x1020->properties['column'])) {$x1020->properties['file'] = '<image>/04_array.js';$x1020->properties['line'] = 305;$x1020->properties['column'] = 23;$x1020->attributes['file'] = $x1020->attributes['line'] = $x1020->attributes['column'] = 0; }
throw new JSException($x1020, 305, 23, '<image>/04_array.js');
}
$x1016 = JS::toObject($x1016, $global);
unset($x1021, $W1021, $S1021, $U1021);
$x1022 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1016, (string) 'every', 305, 23, '<image>/04_array.js');
$x1021 =& $x1022[0]; list(,$W1021,$S1021,$U1021) = $x1022;
if ($U1021 && (!isset($x1016->extensible) || $x1016->extensible)) {$x1016->properties['every'] = $x1021; $x1021 =& $x1016->properties['every']; $x1016->attributes['every'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1021 = FALSE; $W1021 = TRUE; }
if (isset($S1021)) {
$x1024 = $S1021->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1025 = $x1024($global, $x1016, $S1021, array($x1015), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1023 = $x1025;
} else {
if (!$U1021) {$x1023 = $x1015;if ($W1021) { $x1021 = $x1015; }  }
else { $x1023 = JS::$undefined; }
}
if (isset($x1016->class) && $x1016->class === 'Array' &&  is_int('every') && 'every' >= $x1016->properties['length']) { $x1016->properties['length'] = 'every' + 1; };
$x1063 = clone JS::$functionTemplate; $x1063->call = '_339fc8fcf8563d9777a12bd15b91ae1b_21'; $x1063->parameters = array (
  0 => 'callbackFn',
); $x1063->scope = $scope; $x1063->properties['prototype'] = clone JS::$objectTemplate; $x1063->attributes['prototype'] = JS::WRITABLE; $x1063->properties['prototype']->properties['constructor'] = $x1063; $x1063->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1063->properties['length'] = 1; $x1063->attributes['length'] = 0;
unset($x1064, $W1064, $S1064, $U1064);
$x1065 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 321, 6, '<image>/04_array.js');
$x1064 =& $x1065[0]; list(,$W1064,$S1064,$U1064) = $x1065;
if ($x1064 === JS::$undefined || $x1064 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1066 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 321, 22, '<image>/04_array.js');
$_TypeError =& $x1066[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1066;
$x1067 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1068 = $x1067($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1068->class) && $x1068->class === 'Error' && !isset($x1068->properties['file']) && !isset($x1068->properties['line']) && !isset($x1068->properties['column'])) {$x1068->properties['file'] = '<image>/04_array.js';$x1068->properties['line'] = 321;$x1068->properties['column'] = 22;$x1068->attributes['file'] = $x1068->attributes['line'] = $x1068->attributes['column'] = 0; }
throw new JSException($x1068, 321, 22, '<image>/04_array.js');
}
$x1064 = JS::toObject($x1064, $global);
unset($x1069, $W1069, $S1069, $U1069);
$x1070 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1064, (string) 'some', 321, 22, '<image>/04_array.js');
$x1069 =& $x1070[0]; list(,$W1069,$S1069,$U1069) = $x1070;
if ($U1069 && (!isset($x1064->extensible) || $x1064->extensible)) {$x1064->properties['some'] = $x1069; $x1069 =& $x1064->properties['some']; $x1064->attributes['some'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1069 = FALSE; $W1069 = TRUE; }
if (isset($S1069)) {
$x1072 = $S1069->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1073 = $x1072($global, $x1064, $S1069, array($x1063), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1071 = $x1073;
} else {
if (!$U1069) {$x1071 = $x1063;if ($W1069) { $x1069 = $x1063; }  }
else { $x1071 = JS::$undefined; }
}
if (isset($x1064->class) && $x1064->class === 'Array' &&  is_int('some') && 'some' >= $x1064->properties['length']) { $x1064->properties['length'] = 'some' + 1; };
$x1111 = clone JS::$functionTemplate; $x1111->call = '_339fc8fcf8563d9777a12bd15b91ae1b_22'; $x1111->parameters = array (
  0 => 'callbackFn',
); $x1111->scope = $scope; $x1111->properties['prototype'] = clone JS::$objectTemplate; $x1111->attributes['prototype'] = JS::WRITABLE; $x1111->properties['prototype']->properties['constructor'] = $x1111; $x1111->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1111->properties['length'] = 1; $x1111->attributes['length'] = 0;
unset($x1112, $W1112, $S1112, $U1112);
$x1113 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 337, 6, '<image>/04_array.js');
$x1112 =& $x1113[0]; list(,$W1112,$S1112,$U1112) = $x1113;
if ($x1112 === JS::$undefined || $x1112 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1114 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 337, 25, '<image>/04_array.js');
$_TypeError =& $x1114[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1114;
$x1115 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1116 = $x1115($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1116->class) && $x1116->class === 'Error' && !isset($x1116->properties['file']) && !isset($x1116->properties['line']) && !isset($x1116->properties['column'])) {$x1116->properties['file'] = '<image>/04_array.js';$x1116->properties['line'] = 337;$x1116->properties['column'] = 25;$x1116->attributes['file'] = $x1116->attributes['line'] = $x1116->attributes['column'] = 0; }
throw new JSException($x1116, 337, 25, '<image>/04_array.js');
}
$x1112 = JS::toObject($x1112, $global);
unset($x1117, $W1117, $S1117, $U1117);
$x1118 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1112, (string) 'forEach', 337, 25, '<image>/04_array.js');
$x1117 =& $x1118[0]; list(,$W1117,$S1117,$U1117) = $x1118;
if ($U1117 && (!isset($x1112->extensible) || $x1112->extensible)) {$x1112->properties['forEach'] = $x1117; $x1117 =& $x1112->properties['forEach']; $x1112->attributes['forEach'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1117 = FALSE; $W1117 = TRUE; }
if (isset($S1117)) {
$x1120 = $S1117->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1121 = $x1120($global, $x1112, $S1117, array($x1111), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1119 = $x1121;
} else {
if (!$U1117) {$x1119 = $x1111;if ($W1117) { $x1117 = $x1111; }  }
else { $x1119 = JS::$undefined; }
}
if (isset($x1112->class) && $x1112->class === 'Array' &&  is_int('forEach') && 'forEach' >= $x1112->properties['length']) { $x1112->properties['length'] = 'forEach' + 1; };
$x1171 = clone JS::$functionTemplate; $x1171->call = '_339fc8fcf8563d9777a12bd15b91ae1b_23'; $x1171->parameters = array (
  0 => 'callbackFn',
); $x1171->scope = $scope; $x1171->properties['prototype'] = clone JS::$objectTemplate; $x1171->attributes['prototype'] = JS::WRITABLE; $x1171->properties['prototype']->properties['constructor'] = $x1171; $x1171->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1171->properties['length'] = 1; $x1171->attributes['length'] = 0;
unset($x1172, $W1172, $S1172, $U1172);
$x1173 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 349, 6, '<image>/04_array.js');
$x1172 =& $x1173[0]; list(,$W1172,$S1172,$U1172) = $x1173;
if ($x1172 === JS::$undefined || $x1172 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1174 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 349, 21, '<image>/04_array.js');
$_TypeError =& $x1174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1174;
$x1175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1176 = $x1175($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1176->class) && $x1176->class === 'Error' && !isset($x1176->properties['file']) && !isset($x1176->properties['line']) && !isset($x1176->properties['column'])) {$x1176->properties['file'] = '<image>/04_array.js';$x1176->properties['line'] = 349;$x1176->properties['column'] = 21;$x1176->attributes['file'] = $x1176->attributes['line'] = $x1176->attributes['column'] = 0; }
throw new JSException($x1176, 349, 21, '<image>/04_array.js');
}
$x1172 = JS::toObject($x1172, $global);
unset($x1177, $W1177, $S1177, $U1177);
$x1178 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1172, (string) 'map', 349, 21, '<image>/04_array.js');
$x1177 =& $x1178[0]; list(,$W1177,$S1177,$U1177) = $x1178;
if ($U1177 && (!isset($x1172->extensible) || $x1172->extensible)) {$x1172->properties['map'] = $x1177; $x1177 =& $x1172->properties['map']; $x1172->attributes['map'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1177 = FALSE; $W1177 = TRUE; }
if (isset($S1177)) {
$x1180 = $S1177->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1181 = $x1180($global, $x1172, $S1177, array($x1171), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1179 = $x1181;
} else {
if (!$U1177) {$x1179 = $x1171;if ($W1177) { $x1177 = $x1171; }  }
else { $x1179 = JS::$undefined; }
}
if (isset($x1172->class) && $x1172->class === 'Array' &&  is_int('map') && 'map' >= $x1172->properties['length']) { $x1172->properties['length'] = 'map' + 1; };
$x1233 = clone JS::$functionTemplate; $x1233->call = '_339fc8fcf8563d9777a12bd15b91ae1b_24'; $x1233->parameters = array (
  0 => 'callbackFn',
); $x1233->scope = $scope; $x1233->properties['prototype'] = clone JS::$objectTemplate; $x1233->attributes['prototype'] = JS::WRITABLE; $x1233->properties['prototype']->properties['constructor'] = $x1233; $x1233->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1233->properties['length'] = 1; $x1233->attributes['length'] = 0;
unset($x1234, $W1234, $S1234, $U1234);
$x1235 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 363, 6, '<image>/04_array.js');
$x1234 =& $x1235[0]; list(,$W1234,$S1234,$U1234) = $x1235;
if ($x1234 === JS::$undefined || $x1234 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1236 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 363, 24, '<image>/04_array.js');
$_TypeError =& $x1236[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1236;
$x1237 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1238 = $x1237($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1238->class) && $x1238->class === 'Error' && !isset($x1238->properties['file']) && !isset($x1238->properties['line']) && !isset($x1238->properties['column'])) {$x1238->properties['file'] = '<image>/04_array.js';$x1238->properties['line'] = 363;$x1238->properties['column'] = 24;$x1238->attributes['file'] = $x1238->attributes['line'] = $x1238->attributes['column'] = 0; }
throw new JSException($x1238, 363, 24, '<image>/04_array.js');
}
$x1234 = JS::toObject($x1234, $global);
unset($x1239, $W1239, $S1239, $U1239);
$x1240 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1234, (string) 'filter', 363, 24, '<image>/04_array.js');
$x1239 =& $x1240[0]; list(,$W1239,$S1239,$U1239) = $x1240;
if ($U1239 && (!isset($x1234->extensible) || $x1234->extensible)) {$x1234->properties['filter'] = $x1239; $x1239 =& $x1234->properties['filter']; $x1234->attributes['filter'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1239 = FALSE; $W1239 = TRUE; }
if (isset($S1239)) {
$x1242 = $S1239->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1243 = $x1242($global, $x1234, $S1239, array($x1233), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1241 = $x1243;
} else {
if (!$U1239) {$x1241 = $x1233;if ($W1239) { $x1239 = $x1233; }  }
else { $x1241 = JS::$undefined; }
}
if (isset($x1234->class) && $x1234->class === 'Array' &&  is_int('filter') && 'filter' >= $x1234->properties['length']) { $x1234->properties['length'] = 'filter' + 1; };
$x1329 = clone JS::$functionTemplate; $x1329->call = '_339fc8fcf8563d9777a12bd15b91ae1b_25'; $x1329->parameters = array (
  0 => 'callbackFn',
); $x1329->scope = $scope; $x1329->properties['prototype'] = clone JS::$objectTemplate; $x1329->attributes['prototype'] = JS::WRITABLE; $x1329->properties['prototype']->properties['constructor'] = $x1329; $x1329->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1329->properties['length'] = 1; $x1329->attributes['length'] = 0;
unset($x1330, $W1330, $S1330, $U1330);
$x1331 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 379, 6, '<image>/04_array.js');
$x1330 =& $x1331[0]; list(,$W1330,$S1330,$U1330) = $x1331;
if ($x1330 === JS::$undefined || $x1330 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1332 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 379, 24, '<image>/04_array.js');
$_TypeError =& $x1332[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1332;
$x1333 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1334 = $x1333($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1334->class) && $x1334->class === 'Error' && !isset($x1334->properties['file']) && !isset($x1334->properties['line']) && !isset($x1334->properties['column'])) {$x1334->properties['file'] = '<image>/04_array.js';$x1334->properties['line'] = 379;$x1334->properties['column'] = 24;$x1334->attributes['file'] = $x1334->attributes['line'] = $x1334->attributes['column'] = 0; }
throw new JSException($x1334, 379, 24, '<image>/04_array.js');
}
$x1330 = JS::toObject($x1330, $global);
unset($x1335, $W1335, $S1335, $U1335);
$x1336 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1330, (string) 'reduce', 379, 24, '<image>/04_array.js');
$x1335 =& $x1336[0]; list(,$W1335,$S1335,$U1335) = $x1336;
if ($U1335 && (!isset($x1330->extensible) || $x1330->extensible)) {$x1330->properties['reduce'] = $x1335; $x1335 =& $x1330->properties['reduce']; $x1330->attributes['reduce'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1335 = FALSE; $W1335 = TRUE; }
if (isset($S1335)) {
$x1338 = $S1335->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1339 = $x1338($global, $x1330, $S1335, array($x1329), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1337 = $x1339;
} else {
if (!$U1335) {$x1337 = $x1329;if ($W1335) { $x1335 = $x1329; }  }
else { $x1337 = JS::$undefined; }
}
if (isset($x1330->class) && $x1330->class === 'Array' &&  is_int('reduce') && 'reduce' >= $x1330->properties['length']) { $x1330->properties['length'] = 'reduce' + 1; };
$x1423 = clone JS::$functionTemplate; $x1423->call = '_339fc8fcf8563d9777a12bd15b91ae1b_26'; $x1423->parameters = array (
  0 => 'callbackFn',
); $x1423->scope = $scope; $x1423->properties['prototype'] = clone JS::$objectTemplate; $x1423->attributes['prototype'] = JS::WRITABLE; $x1423->properties['prototype']->properties['constructor'] = $x1423; $x1423->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1423->properties['length'] = 1; $x1423->attributes['length'] = 0;
unset($x1424, $W1424, $S1424, $U1424);
$x1425 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, (string) 'prototype', 405, 6, '<image>/04_array.js');
$x1424 =& $x1425[0]; list(,$W1424,$S1424,$U1424) = $x1425;
if ($x1424 === JS::$undefined || $x1424 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1426 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, (string) 'TypeError', 405, 29, '<image>/04_array.js');
$_TypeError =& $x1426[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1426;
$x1427 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1428 = $x1427($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1428->class) && $x1428->class === 'Error' && !isset($x1428->properties['file']) && !isset($x1428->properties['line']) && !isset($x1428->properties['column'])) {$x1428->properties['file'] = '<image>/04_array.js';$x1428->properties['line'] = 405;$x1428->properties['column'] = 29;$x1428->attributes['file'] = $x1428->attributes['line'] = $x1428->attributes['column'] = 0; }
throw new JSException($x1428, 405, 29, '<image>/04_array.js');
}
$x1424 = JS::toObject($x1424, $global);
unset($x1429, $W1429, $S1429, $U1429);
$x1430 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1424, (string) 'reduceRight', 405, 29, '<image>/04_array.js');
$x1429 =& $x1430[0]; list(,$W1429,$S1429,$U1429) = $x1430;
if ($U1429 && (!isset($x1424->extensible) || $x1424->extensible)) {$x1424->properties['reduceRight'] = $x1429; $x1429 =& $x1424->properties['reduceRight']; $x1424->attributes['reduceRight'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1429 = FALSE; $W1429 = TRUE; }
if (isset($S1429)) {
$x1432 = $S1429->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1433 = $x1432($global, $x1424, $S1429, array($x1423), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1431 = $x1433;
} else {
if (!$U1429) {$x1431 = $x1423;if ($W1429) { $x1429 = $x1423; }  }
else { $x1431 = JS::$undefined; }
}
if (isset($x1424->class) && $x1424->class === 'Array' &&  is_int('reduceRight') && 'reduceRight' >= $x1424->properties['length']) { $x1424->properties['length'] = 'reduceRight' + 1; };
;
return JS::$undefined;
}
