function _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x5 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x6 = $x5($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x6; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x5=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x6=$x5($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x6;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x11 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x11[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x11;
$x12 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x13 = $x12($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = $file;$x13->properties['line'] = $line;$x13->properties['column'] = $column;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, $line, $column, $file);
}
$W10 = $S10 = $U10 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x10 =& $lookup->properties[$id]; $W10 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S10 = $lookup->setters[$id]; }
else { $x10 = JS::$undefined; $U10 = TRUE; }
return array(&$x10, $W10, $S10, $U10);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x13=$x12($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=$file;$x13->properties[\'line\']=$line;$x13->properties[\'column\']=$column;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,$line,$column,$file);}$W10=$S10=$U10=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x10=&$lookup->properties[$id];$W10=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S10=$lookup->setters[$id];}else{$x10=JS::$undefined;$U10=TRUE;}return array(&$x10,$W10,$S10,$U10);}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x25 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x25[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x25;
$x26 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x27 = $x26($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x27->class) && $x27->class === 'Error' && !isset($x27->properties['file']) && !isset($x27->properties['line']) && !isset($x27->properties['column'])) {$x27->properties['file'] = $file;$x27->properties['line'] = $line;$x27->properties['column'] = $column;$x27->attributes['file'] = $x27->attributes['line'] = $x27->attributes['column'] = 0; }
throw new JSException($x27, $line, $column, $file);
}
$W24 = $S24 = $U24 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x24 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x28 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x29 = $x28($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x24 = $x29; }
else { $x24 = JS::$undefined; $U24 = TRUE; }
return array(&$x24, $W24, $S24, $U24);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x25=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x25[0];list(,$WTypeError,$STypeError,$UTypeError)=$x25;$x26=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x27=$x26($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=$file;$x27->properties[\'line\']=$line;$x27->properties[\'column\']=$column;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,$line,$column,$file);}$W24=$S24=$U24=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x24=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x28=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x29=$x28($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x24=$x29;}else{$x24=JS::$undefined;$U24=TRUE;}return array(&$x24,$W24,$S24,$U24);}', "\n";
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
$x4 = JS::toString('length', $global);
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x7 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 7, 15, '<image>/04_array.js');
$_TypeError =& $x7[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x7;
$x8 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 7, 15);
$x9 = $x8($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error' && !isset($x9->properties['file']) && !isset($x9->properties['line']) && !isset($x9->properties['column'])) {$x9->properties['file'] = '<image>/04_array.js';$x9->properties['line'] = 7;$x9->properties['column'] = 15;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
throw new JSException($x9, 7, 15, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x10, $W10, $S10, $U10);
$x14 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, JS::toString($x4, $global), 7, 15, '<image>/04_array.js');
$x10 =& $x14[0]; list(,$W10,$S10,$U10) = $x14;
if ($U10 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties[$x4] = $x10; $x10 =& $_array->properties[$x4]; $_array->attributes[$x4] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U10 = FALSE; $W10 = TRUE; }
if (isset($S10)) {
$x16 = $S10->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 7, 15);
$x17 = $x16($global, $_array, $S10, array($x3), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x17;
} else {
if (!$U10) {$x15 = $x3;if ($W10) { $x10 = $x3; }  }
else { $x15 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; };
$_array->attributes['length'] = JS::WRITABLE;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x20 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 11, 6, '<image>/04_array.js');
$_arguments =& $x20[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x20;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x21 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 11, 6, '<image>/04_array.js');
$_ReferenceError =& $x21[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x21;
$x22 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 11, 6);
$x23 = $x22($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x23->class) && $x23->class === 'Error' && !isset($x23->properties['file']) && !isset($x23->properties['line']) && !isset($x23->properties['column'])) {$x23->properties['file'] = '<image>/04_array.js';$x23->properties['line'] = 11;$x23->properties['column'] = 6;$x23->attributes['file'] = $x23->attributes['line'] = $x23->attributes['column'] = 0; }
throw new JSException($x23, 11, 6, '<image>/04_array.js');
}
unset($x24, $W24, $S24, $U24);
$x30 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 11, 15, '<image>/04_array.js');
$x24 =& $x30[0]; list(,$W24,$S24,$U24) = $x30;
$x19 = (((gettype($x24) === gettype(1) && $x24 === 1))|| (((is_float($x24) || is_int($x24)) && (is_float(1) || is_int(1))) && $x24 == 1));
$x18 = $x19;
if (JS::toBoolean($x18, $global)) {
unset($x32, $W32, $S32, $U32);
$x33 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(0, $global), 11, 48, '<image>/04_array.js');
$x32 =& $x33[0]; list(,$W32,$S32,$U32) = $x33;
$x34 = $x32;
$x34 = ($x34 === JS::$undefined ? 'undefined' : (is_int($x34) || is_float($x34) ? 'number' : (is_bool($x34) ? 'boolean' : (is_string($x34) ? 'string' : (is_object($x34) && isset($x34->call) ? 'function' : 'object')))));
$x31 = (((gettype($x34) === gettype('number') && $x34 === 'number'))|| (((is_float($x34) || is_int($x34)) && (is_float('number') || is_int('number'))) && $x34 == 'number'));
$x18 = $x31; }
if (JS::toBoolean($x18, $global)) {
unset($x35, $W35, $S35, $U35);
$x36 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(0, $global), 12, 22, '<image>/04_array.js');
$x35 =& $x36[0]; list(,$W35,$S35,$U35) = $x36;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x35;
if (JS::toBoolean((((string) intval($_len)) !== ((string)$_len)) ||$_len< 0, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x39 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('RangeError', $global), 15, 14, '<image>/04_array.js');
$_RangeError =& $x39[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x39;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x40 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 15, 14, '<image>/04_array.js');
$_ReferenceError =& $x40[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x40;
$x41 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 14);
$x42 = $x41($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x42->class) && $x42->class === 'Error' && !isset($x42->properties['file']) && !isset($x42->properties['line']) && !isset($x42->properties['column'])) {$x42->properties['file'] = '<image>/04_array.js';$x42->properties['line'] = 15;$x42->properties['column'] = 14;$x42->attributes['file'] = $x42->attributes['line'] = $x42->attributes['column'] = 0; }
throw new JSException($x42, 15, 14, '<image>/04_array.js');
}
$x37 = clone JS::$objectTemplate;
unset($x43, $W43, $S43, $U43);
$x44 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 15, 10, '<image>/04_array.js');
$x43 =& $x44[0]; list(,$W43,$S43,$U43) = $x44;
$x38 = $x43;
$x37->prototype = $x38;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x47 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 15, 10, '<image>/04_array.js');
$_TypeError =& $x47[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x47;
$x48 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x49 = $x48($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x49->class) && $x49->class === 'Error' && !isset($x49->properties['file']) && !isset($x49->properties['line']) && !isset($x49->properties['column'])) {$x49->properties['file'] = '<image>/04_array.js';$x49->properties['line'] = 15;$x49->properties['column'] = 10;$x49->attributes['file'] = $x49->attributes['line'] = $x49->attributes['column'] = 0; }
throw new JSException($x49, 15, 10, '<image>/04_array.js');
}
$x45 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x46 = $x45($global, $x37, $_RangeError, array('Array(): Given array length is not legal.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x38 = $x46;
if (is_object($x38) && $x38 !== JS::$undefined) { $x37 = $x38; }
if (isset($x37->class) && $x37->class === 'Error' && !isset($x37->properties['file']) && !isset($x37->properties['line']) && !isset($x37->properties['column'])) {$x37->properties['file'] = '<image>/04_array.js';$x37->properties['line'] = 15;$x37->properties['column'] = 4;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 15, 4, '<image>/04_array.js');;
};
$x50 = JS::toString('length', $global);
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x51 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 18, 16, '<image>/04_array.js');
$_TypeError =& $x51[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x51;
$x52 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x53 = $x52($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x53->class) && $x53->class === 'Error' && !isset($x53->properties['file']) && !isset($x53->properties['line']) && !isset($x53->properties['column'])) {$x53->properties['file'] = '<image>/04_array.js';$x53->properties['line'] = 18;$x53->properties['column'] = 16;$x53->attributes['file'] = $x53->attributes['line'] = $x53->attributes['column'] = 0; }
throw new JSException($x53, 18, 16, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x54, $W54, $S54, $U54);
$x55 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, JS::toString($x50, $global), 18, 16, '<image>/04_array.js');
$x54 =& $x55[0]; list(,$W54,$S54,$U54) = $x55;
if ($U54 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties[$x50] = $x54; $x54 =& $_array->properties[$x50]; $_array->attributes[$x50] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U54 = FALSE; $W54 = TRUE; }
if (isset($S54)) {
$x57 = $S54->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x58 = $x57($global, $_array, $S54, array($_len), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x56 = $x58;
} else {
if (!$U54) {$x56 = $_len;if ($W54) { $x54 = $_len; }  }
else { $x56 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; };
return $_array;;
};
for ($x59 = 0;; ++$x59) {
if ($x59 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x60, $W60, $S60, $U60);
$x61 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 23, 31, '<image>/04_array.js');
$x60 =& $x61[0]; list(,$W60,$S60,$U60) = $x61;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x60;
}
if ($x59 !== 0) {
$x62 = ++$_i;
}
$x63 = JS::toPrimitive($_i, $global);
$x64 = JS::toPrimitive($_l, $global);
$x65 = (is_string($x63) && is_string($x64) ? strcmp($x63, $x64) < 0 : (!is_nan($x66 = JS::toNumber($x63, $global)) && !is_nan($x67 = JS::toNumber($x64, $global)) && $x66 < $x67));
if (!JS::toBoolean($x65, $global)) { break; }

unset($x68, $W68, $S68, $U68);
$x69 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 24, 23, '<image>/04_array.js');
$x68 =& $x69[0]; list(,$W68,$S68,$U68) = $x69;
$x70 = JS::toString($_i, $global);
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x71 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 24, 12, '<image>/04_array.js');
$_TypeError =& $x71[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x71;
$x72 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x73 = $x72($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error' && !isset($x73->properties['file']) && !isset($x73->properties['line']) && !isset($x73->properties['column'])) {$x73->properties['file'] = '<image>/04_array.js';$x73->properties['line'] = 24;$x73->properties['column'] = 12;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 24, 12, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x74, $W74, $S74, $U74);
$x75 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, JS::toString($x70, $global), 24, 12, '<image>/04_array.js');
$x74 =& $x75[0]; list(,$W74,$S74,$U74) = $x75;
if ($U74 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties[$x70] = $x74; $x74 =& $_array->properties[$x70]; $_array->attributes[$x70] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U74 = FALSE; $W74 = TRUE; }
if (isset($S74)) {
$x77 = $S74->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x78 = $x77($global, $_array, $S74, array($x68), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x76 = $x78;
} else {
if (!$U74) {$x76 = $x68;if ($W74) { $x74 = $x68; }  }
else { $x76 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array' &&  is_int($_i) && $_i >= $_array->properties['length']) { $_array->properties['length'] = $_i + 1; };
};
return $_array;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Array\']=$fn;$_Array=&$scope->properties[\'Array\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'array\']=JS::$undefined;$_array=&$scope->properties[\'array\'];$Uarray=FALSE;$_array=$x2;$_array->prototype=$_Array->properties[\'prototype\'];$_array->class=\'Array\';$x3=0;$x4=JS::toString(\'length\',$global);if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x7=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),7,15,\'<image>/04_array.js\');$_TypeError=&$x7[0];list(,$WTypeError,$STypeError,$UTypeError)=$x7;$x8=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x9=$x8($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/04_array.js\';$x9->properties[\'line\']=7;$x9->properties[\'column\']=15;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,7,15,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x10,$W10,$S10,$U10);$x14=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,JS::toString($x4,$global),7,15,\'<image>/04_array.js\');$x10=&$x14[0];list(,$W10,$S10,$U10)=$x14;if($U10&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$x4]=$x10;$x10=&$_array->properties[$x4];$_array->attributes[$x4]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U10=FALSE;$W10=TRUE;}if(isset($S10)){$x16=$S10->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x17=$x16($global,$_array,$S10,array($x3),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x17;}else{if(!$U10){$x15=$x3;if($W10){$x10=$x3;}}else{$x15=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}$_array->attributes[\'length\']=JS::WRITABLE;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x20=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),11,6,\'<image>/04_array.js\');$_arguments=&$x20[0];list(,$Warguments,$Sarguments,$Uarguments)=$x20;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x21=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),11,6,\'<image>/04_array.js\');$_ReferenceError=&$x21[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x21;$x22=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',11,6);$x23=$x22($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x23->class)&&$x23->class===\'Error\'&&!isset($x23->properties[\'file\'])&&!isset($x23->properties[\'line\'])&&!isset($x23->properties[\'column\'])){$x23->properties[\'file\']=\'<image>/04_array.js\';$x23->properties[\'line\']=11;$x23->properties[\'column\']=6;$x23->attributes[\'file\']=$x23->attributes[\'line\']=$x23->attributes[\'column\']=0;}throw new JSException($x23,11,6,\'<image>/04_array.js\');}unset($x24,$W24,$S24,$U24);$x30=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),11,15,\'<image>/04_array.js\');$x24=&$x30[0];list(,$W24,$S24,$U24)=$x30;$x19=(((gettype($x24)===gettype(1)&&$x24===1))||(((is_float($x24)||is_int($x24))&&(is_float(1)||is_int(1)))&&$x24==1));$x18=$x19;if(JS::toBoolean($x18,$global)){unset($x32,$W32,$S32,$U32);$x33=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(0,$global),11,48,\'<image>/04_array.js\');$x32=&$x33[0];list(,$W32,$S32,$U32)=$x33;$x34=$x32;$x34=($x34===JS::$undefined?\'undefined\':(is_int($x34)||is_float($x34)?\'number\':(is_bool($x34)?\'boolean\':(is_string($x34)?\'string\':(is_object($x34)&&isset($x34->call)?\'function\':\'object\')))));$x31=(((gettype($x34)===gettype(\'number\')&&$x34===\'number\'))||(((is_float($x34)||is_int($x34))&&(is_float(\'number\')||is_int(\'number\')))&&$x34==\'number\'));$x18=$x31;}if(JS::toBoolean($x18,$global)){unset($x35,$W35,$S35,$U35);$x36=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(0,$global),12,22,\'<image>/04_array.js\');$x35=&$x36[0];list(,$W35,$S35,$U35)=$x36;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x35;if(JS::toBoolean((((string)intval($_len))!==((string)$_len))||$_len<0,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x39=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),15,14,\'<image>/04_array.js\');$_RangeError=&$x39[0];list(,$WRangeError,$SRangeError,$URangeError)=$x39;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x40=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),15,14,\'<image>/04_array.js\');$_ReferenceError=&$x40[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x40;$x41=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,14);$x42=$x41($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x42->class)&&$x42->class===\'Error\'&&!isset($x42->properties[\'file\'])&&!isset($x42->properties[\'line\'])&&!isset($x42->properties[\'column\'])){$x42->properties[\'file\']=\'<image>/04_array.js\';$x42->properties[\'line\']=15;$x42->properties[\'column\']=14;$x42->attributes[\'file\']=$x42->attributes[\'line\']=$x42->attributes[\'column\']=0;}throw new JSException($x42,15,14,\'<image>/04_array.js\');}$x37=clone JS::$objectTemplate;unset($x43,$W43,$S43,$U43);$x44=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),15,10,\'<image>/04_array.js\');$x43=&$x44[0];list(,$W43,$S43,$U43)=$x44;$x38=$x43;$x37->prototype=$x38;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x47=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),15,10,\'<image>/04_array.js\');$_TypeError=&$x47[0];list(,$WTypeError,$STypeError,$UTypeError)=$x47;$x48=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x49=$x48($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x49->class)&&$x49->class===\'Error\'&&!isset($x49->properties[\'file\'])&&!isset($x49->properties[\'line\'])&&!isset($x49->properties[\'column\'])){$x49->properties[\'file\']=\'<image>/04_array.js\';$x49->properties[\'line\']=15;$x49->properties[\'column\']=10;$x49->attributes[\'file\']=$x49->attributes[\'line\']=$x49->attributes[\'column\']=0;}throw new JSException($x49,15,10,\'<image>/04_array.js\');}$x45=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x46=$x45($global,$x37,$_RangeError,array(\'Array(): Given array length is not legal.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x38=$x46;if(is_object($x38)&&$x38!==JS::$undefined){$x37=$x38;}if(isset($x37->class)&&$x37->class===\'Error\'&&!isset($x37->properties[\'file\'])&&!isset($x37->properties[\'line\'])&&!isset($x37->properties[\'column\'])){$x37->properties[\'file\']=\'<image>/04_array.js\';$x37->properties[\'line\']=15;$x37->properties[\'column\']=4;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,15,4,\'<image>/04_array.js\');}$x50=JS::toString(\'length\',$global);if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x51=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),18,16,\'<image>/04_array.js\');$_TypeError=&$x51[0];list(,$WTypeError,$STypeError,$UTypeError)=$x51;$x52=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x53=$x52($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x53->class)&&$x53->class===\'Error\'&&!isset($x53->properties[\'file\'])&&!isset($x53->properties[\'line\'])&&!isset($x53->properties[\'column\'])){$x53->properties[\'file\']=\'<image>/04_array.js\';$x53->properties[\'line\']=18;$x53->properties[\'column\']=16;$x53->attributes[\'file\']=$x53->attributes[\'line\']=$x53->attributes[\'column\']=0;}throw new JSException($x53,18,16,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x54,$W54,$S54,$U54);$x55=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,JS::toString($x50,$global),18,16,\'<image>/04_array.js\');$x54=&$x55[0];list(,$W54,$S54,$U54)=$x55;if($U54&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$x50]=$x54;$x54=&$_array->properties[$x50];$_array->attributes[$x50]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U54=FALSE;$W54=TRUE;}if(isset($S54)){$x57=$S54->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x58=$x57($global,$_array,$S54,array($_len),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x56=$x58;}else{if(!$U54){$x56=$_len;if($W54){$x54=$_len;}}else{$x56=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}return$_array;}for($x59=0;;++$x59){if($x59===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x60,$W60,$S60,$U60);$x61=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),23,31,\'<image>/04_array.js\');$x60=&$x61[0];list(,$W60,$S60,$U60)=$x61;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x60;}if($x59!==0){$x62=++$_i;}$x63=JS::toPrimitive($_i,$global);$x64=JS::toPrimitive($_l,$global);$x65=(is_string($x63)&&is_string($x64)?strcmp($x63,$x64)<0:(!is_nan($x66=JS::toNumber($x63,$global))&&!is_nan($x67=JS::toNumber($x64,$global))&&$x66<$x67));if(!JS::toBoolean($x65,$global)){break;}unset($x68,$W68,$S68,$U68);$x69=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),24,23,\'<image>/04_array.js\');$x68=&$x69[0];list(,$W68,$S68,$U68)=$x69;$x70=JS::toString($_i,$global);if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x71=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),24,12,\'<image>/04_array.js\');$_TypeError=&$x71[0];list(,$WTypeError,$STypeError,$UTypeError)=$x71;$x72=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x73=$x72($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'&&!isset($x73->properties[\'file\'])&&!isset($x73->properties[\'line\'])&&!isset($x73->properties[\'column\'])){$x73->properties[\'file\']=\'<image>/04_array.js\';$x73->properties[\'line\']=24;$x73->properties[\'column\']=12;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,24,12,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x74,$W74,$S74,$U74);$x75=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,JS::toString($x70,$global),24,12,\'<image>/04_array.js\');$x74=&$x75[0];list(,$W74,$S74,$U74)=$x75;if($U74&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$x70]=$x74;$x74=&$_array->properties[$x70];$_array->attributes[$x70]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U74=FALSE;$W74=TRUE;}if(isset($S74)){$x77=$S74->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x78=$x77($global,$_array,$S74,array($x68),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x76=$x78;}else{if(!$U74){$x76=$x68;if($W74){$x74=$x68;}}else{$x76=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'&&is_int($_i)&&$_i>=$_array->properties[\'length\']){$_array->properties[\'length\']=$_i+1;}}return$_array;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x81 =& $scope->properties['arguments'];
$x81->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x81->properties[$i] = $args[$i];
$x81->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['arg'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x83 = (((gettype($_arg) === gettype(NULL) && $_arg === NULL))|| (((is_float($_arg) || is_int($_arg)) && (is_float(NULL) || is_int(NULL))) && $_arg == NULL));
$x82 = $x83;
if (!JS::toBoolean($x82, $global)) {
$x85 = $_arg;
$x85 = ($x85 === JS::$undefined ? 'undefined' : (is_int($x85) || is_float($x85) ? 'number' : (is_bool($x85) ? 'boolean' : (is_string($x85) ? 'string' : (is_object($x85) && isset($x85->call) ? 'function' : 'object')))));
$x84 = !(((gettype($x85) === gettype('object') && $x85 === 'object'))|| (((is_float($x85) || is_int($x85)) && (is_float('object') || is_int('object'))) && $x85 == 'object'));
$x82 = $x84; }
if (JS::toBoolean($x82, $global)) {

return false;;
};
return isset($_arg->class) &&$_arg->class === 'Array';
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x81=&$scope->properties[\'arguments\'];$x81->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x81->properties[$i]=$args[$i];$x81->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'arg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$global->scope[++$global->scope_sp]=$scope;$x83=(((gettype($_arg)===gettype(NULL)&&$_arg===NULL))||(((is_float($_arg)||is_int($_arg))&&(is_float(NULL)||is_int(NULL)))&&$_arg==NULL));$x82=$x83;if(!JS::toBoolean($x82,$global)){$x85=$_arg;$x85=($x85===JS::$undefined?\'undefined\':(is_int($x85)||is_float($x85)?\'number\':(is_bool($x85)?\'boolean\':(is_string($x85)?\'string\':(is_object($x85)&&isset($x85->call)?\'function\':\'object\')))));$x84=!(((gettype($x85)===gettype(\'object\')&&$x85===\'object\'))||(((is_float($x85)||is_int($x85))&&(is_float(\'object\')||is_int(\'object\')))&&$x85==\'object\'));$x82=$x84;}if(JS::toBoolean($x82,$global)){return false;}return isset($_arg->class)&&$_arg->class===\'Array\';return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x134 =& $scope->properties['arguments'];
$x134->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x134->properties[$i] = $args[$i];
$x134->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x136 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 47, 18, '<image>/04_array.js');
$_TypeError =& $x136[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x136;
$x137 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x138 = $x137($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/04_array.js';$x138->properties['line'] = 47;$x138->properties['column'] = 18;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 47, 18, '<image>/04_array.js');
}
$x135 = JS::toObject($leThis, $global);
unset($x139, $W139, $S139, $U139);
$x140 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x135, JS::toString('join', $global), 47, 18, '<image>/04_array.js');
$x139 =& $x140[0]; list(,$W139,$S139,$U139) = $x140;
if (!(is_object($x139) && isset($x139->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x143 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 47, 18, '<image>/04_array.js');
$_TypeError =& $x143[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x143;
$x144 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x145 = $x144($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x145->class) && $x145->class === 'Error' && !isset($x145->properties['file']) && !isset($x145->properties['line']) && !isset($x145->properties['column'])) {$x145->properties['file'] = '<image>/04_array.js';$x145->properties['line'] = 47;$x145->properties['column'] = 18;$x145->attributes['file'] = $x145->attributes['line'] = $x145->attributes['column'] = 0; }
throw new JSException($x145, 47, 18, '<image>/04_array.js');
}
$x141 = $x139->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x142 = $x141($global, $x135, $x139, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x142;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x134=&$scope->properties[\'arguments\'];$x134->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x134->properties[$i]=$args[$i];$x134->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x136=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),47,18,\'<image>/04_array.js\');$_TypeError=&$x136[0];list(,$WTypeError,$STypeError,$UTypeError)=$x136;$x137=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x138=$x137($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x138->class)&&$x138->class===\'Error\'&&!isset($x138->properties[\'file\'])&&!isset($x138->properties[\'line\'])&&!isset($x138->properties[\'column\'])){$x138->properties[\'file\']=\'<image>/04_array.js\';$x138->properties[\'line\']=47;$x138->properties[\'column\']=18;$x138->attributes[\'file\']=$x138->attributes[\'line\']=$x138->attributes[\'column\']=0;}throw new JSException($x138,47,18,\'<image>/04_array.js\');}$x135=JS::toObject($leThis,$global);unset($x139,$W139,$S139,$U139);$x140=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x135,JS::toString(\'join\',$global),47,18,\'<image>/04_array.js\');$x139=&$x140[0];list(,$W139,$S139,$U139)=$x140;if(!(is_object($x139)&&isset($x139->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x143=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),47,18,\'<image>/04_array.js\');$_TypeError=&$x143[0];list(,$WTypeError,$STypeError,$UTypeError)=$x143;$x144=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x145=$x144($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x145->class)&&$x145->class===\'Error\'&&!isset($x145->properties[\'file\'])&&!isset($x145->properties[\'line\'])&&!isset($x145->properties[\'column\'])){$x145->properties[\'file\']=\'<image>/04_array.js\';$x145->properties[\'line\']=47;$x145->properties[\'column\']=18;$x145->attributes[\'file\']=$x145->attributes[\'line\']=$x145->attributes[\'column\']=0;}throw new JSException($x145,47,18,\'<image>/04_array.js\');}$x141=$x139->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x142=$x141($global,$x135,$x139,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x142;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x174 =& $scope->properties['arguments'];
$x174->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x174->properties[$i] = $args[$i];
$x174->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x175 = clone JS::$arrayTemplate;
$x175->properties['length'] = 0;
$x175->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x175;
for ($x176 = 0;; ++$x176) {
if ($x176 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x177, $W177, $S177, $U177);
$x178 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 55, 26, '<image>/04_array.js');
$x177 =& $x178[0]; list(,$W177,$S177,$U177) = $x178;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x177;
}
if ($x176 !== 0) {
$x179 = ++$_i;
}
$x180 = JS::toPrimitive($_i, $global);
$x181 = JS::toPrimitive($_l, $global);
$x182 = (is_string($x180) && is_string($x181) ? strcmp($x180, $x181) < 0 : (!is_nan($x183 = JS::toNumber($x180, $global)) && !is_nan($x184 = JS::toNumber($x181, $global)) && $x183 < $x184));
if (!JS::toBoolean($x182, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x186 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 56, 16, '<image>/04_array.js');
$_TypeError =& $x186[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x186;
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x188 = $x187($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/04_array.js';$x188->properties['line'] = 56;$x188->properties['column'] = 16;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 56, 16, '<image>/04_array.js');
}
$x185 = JS::toObject($_newArray, $global);
unset($x189, $W189, $S189, $U189);
$x190 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x185, JS::toString('push', $global), 56, 16, '<image>/04_array.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
unset($x191, $W191, $S191, $U191);
$x192 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 56, 21, '<image>/04_array.js');
$x191 =& $x192[0]; list(,$W191,$S191,$U191) = $x192;
if (!(is_object($x189) && isset($x189->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x195 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 56, 16, '<image>/04_array.js');
$_TypeError =& $x195[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x195;
$x196 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x197 = $x196($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x197->class) && $x197->class === 'Error' && !isset($x197->properties['file']) && !isset($x197->properties['line']) && !isset($x197->properties['column'])) {$x197->properties['file'] = '<image>/04_array.js';$x197->properties['line'] = 56;$x197->properties['column'] = 16;$x197->attributes['file'] = $x197->attributes['line'] = $x197->attributes['column'] = 0; }
throw new JSException($x197, 56, 16, '<image>/04_array.js');
}
$x193 = $x189->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x194 = $x193($global, $x185, $x189, array($x191), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
for ($x198 = 0;; ++$x198) {
if ($x198 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x199 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 59, 22, '<image>/04_array.js');
$_arguments =& $x199[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x199;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x200 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 59, 22, '<image>/04_array.js');
$_ReferenceError =& $x200[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x200;
$x201 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 59, 22);
$x202 = $x201($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x202->class) && $x202->class === 'Error' && !isset($x202->properties['file']) && !isset($x202->properties['line']) && !isset($x202->properties['column'])) {$x202->properties['file'] = '<image>/04_array.js';$x202->properties['line'] = 59;$x202->properties['column'] = 22;$x202->attributes['file'] = $x202->attributes['line'] = $x202->attributes['column'] = 0; }
throw new JSException($x202, 59, 22, '<image>/04_array.js');
}
unset($x203, $W203, $S203, $U203);
$x204 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 59, 31, '<image>/04_array.js');
$x203 =& $x204[0]; list(,$W203,$S203,$U203) = $x204;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x203;
}
if ($x198 !== 0) {
$x205 = ++$_i;
}
$x206 = JS::toPrimitive($_i, $global);
$x207 = JS::toPrimitive($_l, $global);
$x208 = (is_string($x206) && is_string($x207) ? strcmp($x206, $x207) < 0 : (!is_nan($x209 = JS::toNumber($x206, $global)) && !is_nan($x210 = JS::toNumber($x207, $global)) && $x209 < $x210));
if (!JS::toBoolean($x208, $global)) { break; }

unset($_Array, $WArray, $SArray, $UArray);
$x211 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Array', $global), 60, 7, '<image>/04_array.js');
$_Array =& $x211[0]; list(,$WArray,$SArray,$UArray) = $x211;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x212 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 60, 7, '<image>/04_array.js');
$_ReferenceError =& $x212[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x212;
$x213 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 7);
$x214 = $x213($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x214->class) && $x214->class === 'Error' && !isset($x214->properties['file']) && !isset($x214->properties['line']) && !isset($x214->properties['column'])) {$x214->properties['file'] = '<image>/04_array.js';$x214->properties['line'] = 60;$x214->properties['column'] = 7;$x214->attributes['file'] = $x214->attributes['line'] = $x214->attributes['column'] = 0; }
throw new JSException($x214, 60, 7, '<image>/04_array.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x216 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 60, 20, '<image>/04_array.js');
$_TypeError =& $x216[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x216;
$x217 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x218 = $x217($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x218->class) && $x218->class === 'Error' && !isset($x218->properties['file']) && !isset($x218->properties['line']) && !isset($x218->properties['column'])) {$x218->properties['file'] = '<image>/04_array.js';$x218->properties['line'] = 60;$x218->properties['column'] = 20;$x218->attributes['file'] = $x218->attributes['line'] = $x218->attributes['column'] = 0; }
throw new JSException($x218, 60, 20, '<image>/04_array.js');
}
$x215 = JS::toObject($_Array, $global);
unset($x219, $W219, $S219, $U219);
$x220 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x215, JS::toString('isArray', $global), 60, 20, '<image>/04_array.js');
$x219 =& $x220[0]; list(,$W219,$S219,$U219) = $x220;
unset($x221, $W221, $S221, $U221);
$x222 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 60, 30, '<image>/04_array.js');
$x221 =& $x222[0]; list(,$W221,$S221,$U221) = $x222;
if (!(is_object($x219) && isset($x219->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x225 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 60, 20, '<image>/04_array.js');
$_TypeError =& $x225[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x225;
$x226 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x227 = $x226($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x227->class) && $x227->class === 'Error' && !isset($x227->properties['file']) && !isset($x227->properties['line']) && !isset($x227->properties['column'])) {$x227->properties['file'] = '<image>/04_array.js';$x227->properties['line'] = 60;$x227->properties['column'] = 20;$x227->attributes['file'] = $x227->attributes['line'] = $x227->attributes['column'] = 0; }
throw new JSException($x227, 60, 20, '<image>/04_array.js');
}
$x223 = $x219->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x224 = $x223($global, $x215, $x219, array($x221), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x224, $global)) {
for ($x228 = 0;; ++$x228) {
if ($x228 === 0) {
$scope->properties['j'] = JS::$undefined; $_j =& $scope->properties['j'];
$Uj = FALSE;
$_j = 0;
unset($x229, $W229, $S229, $U229);
$x230 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 61, 33, '<image>/04_array.js');
$x229 =& $x230[0]; list(,$W229,$S229,$U229) = $x230;
unset($x231, $W231, $S231, $U231);
$x232 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x229, JS::toString('length', $global), 61, 36, '<image>/04_array.js');
$x231 =& $x232[0]; list(,$W231,$S231,$U231) = $x232;
$scope->properties['m'] = JS::$undefined; $_m =& $scope->properties['m'];
$Um = FALSE;
$_m = $x231;
}
if ($x228 !== 0) {
$x233 = ++$_j;
}
$x234 = JS::toPrimitive($_j, $global);
$x235 = JS::toPrimitive($_m, $global);
$x236 = (is_string($x234) && is_string($x235) ? strcmp($x234, $x235) < 0 : (!is_nan($x237 = JS::toNumber($x234, $global)) && !is_nan($x238 = JS::toNumber($x235, $global)) && $x237 < $x238));
if (!JS::toBoolean($x236, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x240 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 18, '<image>/04_array.js');
$_TypeError =& $x240[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x240;
$x241 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x242 = $x241($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x242->class) && $x242->class === 'Error' && !isset($x242->properties['file']) && !isset($x242->properties['line']) && !isset($x242->properties['column'])) {$x242->properties['file'] = '<image>/04_array.js';$x242->properties['line'] = 62;$x242->properties['column'] = 18;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 62, 18, '<image>/04_array.js');
}
$x239 = JS::toObject($_newArray, $global);
unset($x243, $W243, $S243, $U243);
$x244 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x239, JS::toString('push', $global), 62, 18, '<image>/04_array.js');
$x243 =& $x244[0]; list(,$W243,$S243,$U243) = $x244;
unset($x245, $W245, $S245, $U245);
$x246 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 62, 28, '<image>/04_array.js');
$x245 =& $x246[0]; list(,$W245,$S245,$U245) = $x246;
unset($x247, $W247, $S247, $U247);
$x248 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x245, JS::toString($_j, $global), 62, 31, '<image>/04_array.js');
$x247 =& $x248[0]; list(,$W247,$S247,$U247) = $x248;
if (!(is_object($x243) && isset($x243->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x251 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 18, '<image>/04_array.js');
$_TypeError =& $x251[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x251;
$x252 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x253 = $x252($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x253->class) && $x253->class === 'Error' && !isset($x253->properties['file']) && !isset($x253->properties['line']) && !isset($x253->properties['column'])) {$x253->properties['file'] = '<image>/04_array.js';$x253->properties['line'] = 62;$x253->properties['column'] = 18;$x253->attributes['file'] = $x253->attributes['line'] = $x253->attributes['column'] = 0; }
throw new JSException($x253, 62, 18, '<image>/04_array.js');
}
$x249 = $x243->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x250 = $x249($global, $x239, $x243, array($x247), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
}
else {
if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x255 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 66, 17, '<image>/04_array.js');
$_TypeError =& $x255[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x255;
$x256 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x257 = $x256($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x257->class) && $x257->class === 'Error' && !isset($x257->properties['file']) && !isset($x257->properties['line']) && !isset($x257->properties['column'])) {$x257->properties['file'] = '<image>/04_array.js';$x257->properties['line'] = 66;$x257->properties['column'] = 17;$x257->attributes['file'] = $x257->attributes['line'] = $x257->attributes['column'] = 0; }
throw new JSException($x257, 66, 17, '<image>/04_array.js');
}
$x254 = JS::toObject($_newArray, $global);
unset($x258, $W258, $S258, $U258);
$x259 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x254, JS::toString('push', $global), 66, 17, '<image>/04_array.js');
$x258 =& $x259[0]; list(,$W258,$S258,$U258) = $x259;
unset($x260, $W260, $S260, $U260);
$x261 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 66, 27, '<image>/04_array.js');
$x260 =& $x261[0]; list(,$W260,$S260,$U260) = $x261;
if (!(is_object($x258) && isset($x258->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x264 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 66, 17, '<image>/04_array.js');
$_TypeError =& $x264[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x264;
$x265 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x266 = $x265($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x266->class) && $x266->class === 'Error' && !isset($x266->properties['file']) && !isset($x266->properties['line']) && !isset($x266->properties['column'])) {$x266->properties['file'] = '<image>/04_array.js';$x266->properties['line'] = 66;$x266->properties['column'] = 17;$x266->attributes['file'] = $x266->attributes['line'] = $x266->attributes['column'] = 0; }
throw new JSException($x266, 66, 17, '<image>/04_array.js');
}
$x262 = $x258->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x263 = $x262($global, $x254, $x258, array($x260), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x174=&$scope->properties[\'arguments\'];$x174->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x174->properties[$i]=$args[$i];$x174->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$x175=clone JS::$arrayTemplate;$x175->properties[\'length\']=0;$x175->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x175;for($x176=0;;++$x176){if($x176===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x177,$W177,$S177,$U177);$x178=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),55,26,\'<image>/04_array.js\');$x177=&$x178[0];list(,$W177,$S177,$U177)=$x178;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x177;}if($x176!==0){$x179=++$_i;}$x180=JS::toPrimitive($_i,$global);$x181=JS::toPrimitive($_l,$global);$x182=(is_string($x180)&&is_string($x181)?strcmp($x180,$x181)<0:(!is_nan($x183=JS::toNumber($x180,$global))&&!is_nan($x184=JS::toNumber($x181,$global))&&$x183<$x184));if(!JS::toBoolean($x182,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x186=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,16,\'<image>/04_array.js\');$_TypeError=&$x186[0];list(,$WTypeError,$STypeError,$UTypeError)=$x186;$x187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x188=$x187($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x188->class)&&$x188->class===\'Error\'&&!isset($x188->properties[\'file\'])&&!isset($x188->properties[\'line\'])&&!isset($x188->properties[\'column\'])){$x188->properties[\'file\']=\'<image>/04_array.js\';$x188->properties[\'line\']=56;$x188->properties[\'column\']=16;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,56,16,\'<image>/04_array.js\');}$x185=JS::toObject($_newArray,$global);unset($x189,$W189,$S189,$U189);$x190=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x185,JS::toString(\'push\',$global),56,16,\'<image>/04_array.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;unset($x191,$W191,$S191,$U191);$x192=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),56,21,\'<image>/04_array.js\');$x191=&$x192[0];list(,$W191,$S191,$U191)=$x192;if(!(is_object($x189)&&isset($x189->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x195=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,16,\'<image>/04_array.js\');$_TypeError=&$x195[0];list(,$WTypeError,$STypeError,$UTypeError)=$x195;$x196=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x197=$x196($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x197->class)&&$x197->class===\'Error\'&&!isset($x197->properties[\'file\'])&&!isset($x197->properties[\'line\'])&&!isset($x197->properties[\'column\'])){$x197->properties[\'file\']=\'<image>/04_array.js\';$x197->properties[\'line\']=56;$x197->properties[\'column\']=16;$x197->attributes[\'file\']=$x197->attributes[\'line\']=$x197->attributes[\'column\']=0;}throw new JSException($x197,56,16,\'<image>/04_array.js\');}$x193=$x189->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x194=$x193($global,$x185,$x189,array($x191),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}for($x198=0;;++$x198){if($x198===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x199=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),59,22,\'<image>/04_array.js\');$_arguments=&$x199[0];list(,$Warguments,$Sarguments,$Uarguments)=$x199;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x200=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),59,22,\'<image>/04_array.js\');$_ReferenceError=&$x200[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x200;$x201=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',59,22);$x202=$x201($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x202->class)&&$x202->class===\'Error\'&&!isset($x202->properties[\'file\'])&&!isset($x202->properties[\'line\'])&&!isset($x202->properties[\'column\'])){$x202->properties[\'file\']=\'<image>/04_array.js\';$x202->properties[\'line\']=59;$x202->properties[\'column\']=22;$x202->attributes[\'file\']=$x202->attributes[\'line\']=$x202->attributes[\'column\']=0;}throw new JSException($x202,59,22,\'<image>/04_array.js\');}unset($x203,$W203,$S203,$U203);$x204=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),59,31,\'<image>/04_array.js\');$x203=&$x204[0];list(,$W203,$S203,$U203)=$x204;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x203;}if($x198!==0){$x205=++$_i;}$x206=JS::toPrimitive($_i,$global);$x207=JS::toPrimitive($_l,$global);$x208=(is_string($x206)&&is_string($x207)?strcmp($x206,$x207)<0:(!is_nan($x209=JS::toNumber($x206,$global))&&!is_nan($x210=JS::toNumber($x207,$global))&&$x209<$x210));if(!JS::toBoolean($x208,$global)){break;}unset($_Array,$WArray,$SArray,$UArray);$x211=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Array\',$global),60,7,\'<image>/04_array.js\');$_Array=&$x211[0];list(,$WArray,$SArray,$UArray)=$x211;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x212=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),60,7,\'<image>/04_array.js\');$_ReferenceError=&$x212[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x212;$x213=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,7);$x214=$x213($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x214->class)&&$x214->class===\'Error\'&&!isset($x214->properties[\'file\'])&&!isset($x214->properties[\'line\'])&&!isset($x214->properties[\'column\'])){$x214->properties[\'file\']=\'<image>/04_array.js\';$x214->properties[\'line\']=60;$x214->properties[\'column\']=7;$x214->attributes[\'file\']=$x214->attributes[\'line\']=$x214->attributes[\'column\']=0;}throw new JSException($x214,60,7,\'<image>/04_array.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x216=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,20,\'<image>/04_array.js\');$_TypeError=&$x216[0];list(,$WTypeError,$STypeError,$UTypeError)=$x216;$x217=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x218=$x217($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x218->class)&&$x218->class===\'Error\'&&!isset($x218->properties[\'file\'])&&!isset($x218->properties[\'line\'])&&!isset($x218->properties[\'column\'])){$x218->properties[\'file\']=\'<image>/04_array.js\';$x218->properties[\'line\']=60;$x218->properties[\'column\']=20;$x218->attributes[\'file\']=$x218->attributes[\'line\']=$x218->attributes[\'column\']=0;}throw new JSException($x218,60,20,\'<image>/04_array.js\');}$x215=JS::toObject($_Array,$global);unset($x219,$W219,$S219,$U219);$x220=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x215,JS::toString(\'isArray\',$global),60,20,\'<image>/04_array.js\');$x219=&$x220[0];list(,$W219,$S219,$U219)=$x220;unset($x221,$W221,$S221,$U221);$x222=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),60,30,\'<image>/04_array.js\');$x221=&$x222[0];list(,$W221,$S221,$U221)=$x222;if(!(is_object($x219)&&isset($x219->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x225=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,20,\'<image>/04_array.js\');$_TypeError=&$x225[0];list(,$WTypeError,$STypeError,$UTypeError)=$x225;$x226=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x227=$x226($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x227->class)&&$x227->class===\'Error\'&&!isset($x227->properties[\'file\'])&&!isset($x227->properties[\'line\'])&&!isset($x227->properties[\'column\'])){$x227->properties[\'file\']=\'<image>/04_array.js\';$x227->properties[\'line\']=60;$x227->properties[\'column\']=20;$x227->attributes[\'file\']=$x227->attributes[\'line\']=$x227->attributes[\'column\']=0;}throw new JSException($x227,60,20,\'<image>/04_array.js\');}$x223=$x219->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x224=$x223($global,$x215,$x219,array($x221),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x224,$global)){for($x228=0;;++$x228){if($x228===0){$scope->properties[\'j\']=JS::$undefined;$_j=&$scope->properties[\'j\'];$Uj=FALSE;$_j=0;unset($x229,$W229,$S229,$U229);$x230=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),61,33,\'<image>/04_array.js\');$x229=&$x230[0];list(,$W229,$S229,$U229)=$x230;unset($x231,$W231,$S231,$U231);$x232=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x229,JS::toString(\'length\',$global),61,36,\'<image>/04_array.js\');$x231=&$x232[0];list(,$W231,$S231,$U231)=$x232;$scope->properties[\'m\']=JS::$undefined;$_m=&$scope->properties[\'m\'];$Um=FALSE;$_m=$x231;}if($x228!==0){$x233=++$_j;}$x234=JS::toPrimitive($_j,$global);$x235=JS::toPrimitive($_m,$global);$x236=(is_string($x234)&&is_string($x235)?strcmp($x234,$x235)<0:(!is_nan($x237=JS::toNumber($x234,$global))&&!is_nan($x238=JS::toNumber($x235,$global))&&$x237<$x238));if(!JS::toBoolean($x236,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x240=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,18,\'<image>/04_array.js\');$_TypeError=&$x240[0];list(,$WTypeError,$STypeError,$UTypeError)=$x240;$x241=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x242=$x241($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x242->class)&&$x242->class===\'Error\'&&!isset($x242->properties[\'file\'])&&!isset($x242->properties[\'line\'])&&!isset($x242->properties[\'column\'])){$x242->properties[\'file\']=\'<image>/04_array.js\';$x242->properties[\'line\']=62;$x242->properties[\'column\']=18;$x242->attributes[\'file\']=$x242->attributes[\'line\']=$x242->attributes[\'column\']=0;}throw new JSException($x242,62,18,\'<image>/04_array.js\');}$x239=JS::toObject($_newArray,$global);unset($x243,$W243,$S243,$U243);$x244=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x239,JS::toString(\'push\',$global),62,18,\'<image>/04_array.js\');$x243=&$x244[0];list(,$W243,$S243,$U243)=$x244;unset($x245,$W245,$S245,$U245);$x246=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),62,28,\'<image>/04_array.js\');$x245=&$x246[0];list(,$W245,$S245,$U245)=$x246;unset($x247,$W247,$S247,$U247);$x248=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x245,JS::toString($_j,$global),62,31,\'<image>/04_array.js\');$x247=&$x248[0];list(,$W247,$S247,$U247)=$x248;if(!(is_object($x243)&&isset($x243->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x251=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,18,\'<image>/04_array.js\');$_TypeError=&$x251[0];list(,$WTypeError,$STypeError,$UTypeError)=$x251;$x252=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x253=$x252($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x253->class)&&$x253->class===\'Error\'&&!isset($x253->properties[\'file\'])&&!isset($x253->properties[\'line\'])&&!isset($x253->properties[\'column\'])){$x253->properties[\'file\']=\'<image>/04_array.js\';$x253->properties[\'line\']=62;$x253->properties[\'column\']=18;$x253->attributes[\'file\']=$x253->attributes[\'line\']=$x253->attributes[\'column\']=0;}throw new JSException($x253,62,18,\'<image>/04_array.js\');}$x249=$x243->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x250=$x249($global,$x239,$x243,array($x247),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}else{if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x255=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),66,17,\'<image>/04_array.js\');$_TypeError=&$x255[0];list(,$WTypeError,$STypeError,$UTypeError)=$x255;$x256=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x257=$x256($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x257->class)&&$x257->class===\'Error\'&&!isset($x257->properties[\'file\'])&&!isset($x257->properties[\'line\'])&&!isset($x257->properties[\'column\'])){$x257->properties[\'file\']=\'<image>/04_array.js\';$x257->properties[\'line\']=66;$x257->properties[\'column\']=17;$x257->attributes[\'file\']=$x257->attributes[\'line\']=$x257->attributes[\'column\']=0;}throw new JSException($x257,66,17,\'<image>/04_array.js\');}$x254=JS::toObject($_newArray,$global);unset($x258,$W258,$S258,$U258);$x259=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x254,JS::toString(\'push\',$global),66,17,\'<image>/04_array.js\');$x258=&$x259[0];list(,$W258,$S258,$U258)=$x259;unset($x260,$W260,$S260,$U260);$x261=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),66,27,\'<image>/04_array.js\');$x260=&$x261[0];list(,$W260,$S260,$U260)=$x261;if(!(is_object($x258)&&isset($x258->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x264=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),66,17,\'<image>/04_array.js\');$_TypeError=&$x264[0];list(,$WTypeError,$STypeError,$UTypeError)=$x264;$x265=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x266=$x265($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x266->class)&&$x266->class===\'Error\'&&!isset($x266->properties[\'file\'])&&!isset($x266->properties[\'line\'])&&!isset($x266->properties[\'column\'])){$x266->properties[\'file\']=\'<image>/04_array.js\';$x266->properties[\'line\']=66;$x266->properties[\'column\']=17;$x266->attributes[\'file\']=$x266->attributes[\'line\']=$x266->attributes[\'column\']=0;}throw new JSException($x266,66,17,\'<image>/04_array.js\');}$x262=$x258->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x263=$x262($global,$x254,$x258,array($x260),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x280 =& $scope->properties['arguments'];
$x280->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x280->properties[$i] = $args[$i];
$x280->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x281 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x281, $global)) {
$x282 = ',';
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x282;;
};
$scope->properties['string'] = JS::$undefined; $_string =& $scope->properties['string'];
$Ustring = FALSE;
$_string = '';
unset($x286, $W286, $S286, $U286);
$x287 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 80, 10, '<image>/04_array.js');
$x286 =& $x287[0]; list(,$W286,$S286,$U286) = $x287;
$x283 = JS::toPrimitive($x286, $global);
$x284 = JS::toPrimitive(1, $global);
$x285 = (is_string($x283) && is_string($x284) ? strcmp($x283, $x284) < 0 : (!is_nan($x288 = JS::toNumber($x283, $global)) && !is_nan($x289 = JS::toNumber($x284, $global)) && $x288 < $x289));
if (JS::toBoolean($x285, $global)) {

return '';;
};
for ($x290 = 0;; ++$x290) {
if ($x290 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x291, $W291, $S291, $U291);
$x292 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 84, 26, '<image>/04_array.js');
$x291 =& $x292[0]; list(,$W291,$S291,$U291) = $x292;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x291;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = JS::$undefined;
}
if ($x290 !== 0) {
$x293 = ++$_i;
}
$x294 = JS::toPrimitive($_i, $global);
$x295 = JS::toPrimitive($_l, $global);
$x296 = (is_string($x294) && is_string($x295) ? strcmp($x294, $x295) < 0 : (!is_nan($x297 = JS::toNumber($x294, $global)) && !is_nan($x298 = JS::toNumber($x295, $global)) && $x297 < $x298));
if (!JS::toBoolean($x296, $global)) { break; }

$x299 = !(((gettype($_i) === gettype(0) && $_i === 0))|| (((is_float($_i) || is_int($_i)) && (is_float(0) || is_int(0))) && $_i == 0));
if (JS::toBoolean($x299, $global)) {
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x300 = JS::toPrimitive($_string, $global);
$x301 = JS::toPrimitive($_separator, $global);
$_string = (is_string($x300) || is_string($x301) ? JS::toString($x300, $global) . JS::toString($x301, $global) : JS::toNumber($x300, $global) + JS::toNumber($x301, $global));;
};
unset($x302, $W302, $S302, $U302);
$x303 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 89, 14, '<image>/04_array.js');
$x302 =& $x303[0]; list(,$W302,$S302,$U302) = $x303;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x302;
$x305 = !(((gettype($_item) === gettype(JS::$undefined) && $_item === JS::$undefined))|| (((is_float($_item) || is_int($_item)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_item == JS::$undefined));
$x304 = $x305;
if (JS::toBoolean($x304, $global)) {
$x306 = !(((gettype($_item) === gettype(NULL) && $_item === NULL))|| (((is_float($_item) || is_int($_item)) && (is_float(NULL) || is_int(NULL))) && $_item == NULL));
$x304 = $x306; }
if (JS::toBoolean($x304, $global)) {
$x307 = JS::toString($_item, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x308 = JS::toPrimitive($_string, $global);
$x309 = JS::toPrimitive($x307, $global);
$_string = (is_string($x308) || is_string($x309) ? JS::toString($x308, $global) . JS::toString($x309, $global) : JS::toNumber($x308, $global) + JS::toNumber($x309, $global));;
};;
};
return $_string;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x280=&$scope->properties[\'arguments\'];$x280->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x280->properties[$i]=$args[$i];$x280->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$global->scope[++$global->scope_sp]=$scope;$x281=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x281,$global)){$x282=\',\';if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x282;}$scope->properties[\'string\']=JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$_string=\'\';unset($x286,$W286,$S286,$U286);$x287=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),80,10,\'<image>/04_array.js\');$x286=&$x287[0];list(,$W286,$S286,$U286)=$x287;$x283=JS::toPrimitive($x286,$global);$x284=JS::toPrimitive(1,$global);$x285=(is_string($x283)&&is_string($x284)?strcmp($x283,$x284)<0:(!is_nan($x288=JS::toNumber($x283,$global))&&!is_nan($x289=JS::toNumber($x284,$global))&&$x288<$x289));if(JS::toBoolean($x285,$global)){return\'\';}for($x290=0;;++$x290){if($x290===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x291,$W291,$S291,$U291);$x292=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),84,26,\'<image>/04_array.js\');$x291=&$x292[0];list(,$W291,$S291,$U291)=$x292;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x291;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;}if($x290!==0){$x293=++$_i;}$x294=JS::toPrimitive($_i,$global);$x295=JS::toPrimitive($_l,$global);$x296=(is_string($x294)&&is_string($x295)?strcmp($x294,$x295)<0:(!is_nan($x297=JS::toNumber($x294,$global))&&!is_nan($x298=JS::toNumber($x295,$global))&&$x297<$x298));if(!JS::toBoolean($x296,$global)){break;}$x299=!(((gettype($_i)===gettype(0)&&$_i===0))||(((is_float($_i)||is_int($_i))&&(is_float(0)||is_int(0)))&&$_i==0));if(JS::toBoolean($x299,$global)){if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x300=JS::toPrimitive($_string,$global);$x301=JS::toPrimitive($_separator,$global);$_string=(is_string($x300)||is_string($x301)?JS::toString($x300,$global).JS::toString($x301,$global):JS::toNumber($x300,$global)+JS::toNumber($x301,$global));}unset($x302,$W302,$S302,$U302);$x303=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),89,14,\'<image>/04_array.js\');$x302=&$x303[0];list(,$W302,$S302,$U302)=$x303;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x302;$x305=!(((gettype($_item)===gettype(JS::$undefined)&&$_item===JS::$undefined))||(((is_float($_item)||is_int($_item))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_item==JS::$undefined));$x304=$x305;if(JS::toBoolean($x304,$global)){$x306=!(((gettype($_item)===gettype(NULL)&&$_item===NULL))||(((is_float($_item)||is_int($_item))&&(is_float(NULL)||is_int(NULL)))&&$_item==NULL));$x304=$x306;}if(JS::toBoolean($x304,$global)){$x307=JS::toString($_item,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x308=JS::toPrimitive($_string,$global);$x309=JS::toPrimitive($x307,$global);$_string=(is_string($x308)||is_string($x309)?JS::toString($x308,$global).JS::toString($x309,$global):JS::toNumber($x308,$global)+JS::toNumber($x309,$global));}}return$_string;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x323 =& $scope->properties['arguments'];
$x323->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x323->properties[$i] = $args[$i];
$x323->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x327, $W327, $S327, $U327);
$x328 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 100, 10, '<image>/04_array.js');
$x327 =& $x328[0]; list(,$W327,$S327,$U327) = $x328;
$x324 = JS::toPrimitive($x327, $global);
$x325 = JS::toPrimitive(1, $global);
$x326 = (is_string($x324) && is_string($x325) ? strcmp($x324, $x325) < 0 : (!is_nan($x329 = JS::toNumber($x324, $global)) && !is_nan($x330 = JS::toNumber($x325, $global)) && $x329 < $x330));
if (JS::toBoolean($x326, $global)) {

return JS::$undefined;;
};
unset($x331, $W331, $S331, $U331);
$x332 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 104, 22, '<image>/04_array.js');
$x331 =& $x332[0]; list(,$W331,$S331,$U331) = $x332;
unset($x333, $W333, $S333, $U333);
$x334 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString((JS::toNumber($x331, $global) - JS::toNumber(1, $global)), $global), 104, 17, '<image>/04_array.js');
$x333 =& $x334[0]; list(,$W333,$S333,$U333) = $x334;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x333;
unset($x335, $W335, $S335, $U335);
$x336 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 104, 46, '<image>/04_array.js');
$x335 =& $x336[0]; list(,$W335,$S335,$U335) = $x336;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x335;
unset($x338, $W338, $S338, $U338);
$x339 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 105, 18, '<image>/04_array.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
if (!array_key_exists((JS::toNumber($x338, $global) - JS::toNumber(1, $global)), $leThis->attributes)) { unset($leThis->properties[(JS::toNumber($x338, $global) - JS::toNumber(1, $global))]); $x337 = TRUE; }
else if ($leThis->attributes[(JS::toNumber($x338, $global) - JS::toNumber(1, $global))] & JS::CONFIGURABLE) { unset($leThis->properties[(JS::toNumber($x338, $global) - JS::toNumber(1, $global))], $leThis->attributes[(JS::toNumber($x338, $global) - JS::toNumber(1, $global))], $leThis->getters[(JS::toNumber($x338, $global) - JS::toNumber(1, $global))], $leThis->setters[(JS::toNumber($x338, $global) - JS::toNumber(1, $global))]); $x337 = TRUE; }
else { $x337 = FALSE; };
$x340 = (JS::toNumber($_len, $global) - JS::toNumber(1, $global));
$x341 = JS::toString('length', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x342 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 106, 14, '<image>/04_array.js');
$_TypeError =& $x342[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x342;
$x343 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x344 = $x343($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x344->class) && $x344->class === 'Error' && !isset($x344->properties['file']) && !isset($x344->properties['line']) && !isset($x344->properties['column'])) {$x344->properties['file'] = '<image>/04_array.js';$x344->properties['line'] = 106;$x344->properties['column'] = 14;$x344->attributes['file'] = $x344->attributes['line'] = $x344->attributes['column'] = 0; }
throw new JSException($x344, 106, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x345, $W345, $S345, $U345);
$x346 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x341, $global), 106, 14, '<image>/04_array.js');
$x345 =& $x346[0]; list(,$W345,$S345,$U345) = $x346;
if ($U345 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x341] = $x345; $x345 =& $leThis->properties[$x341]; $leThis->attributes[$x341] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U345 = FALSE; $W345 = TRUE; }
if (isset($S345)) {
$x348 = $S345->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x349 = $x348($global, $leThis, $S345, array($x340), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x347 = $x349;
} else {
if (!$U345) {$x347 = $x340;if ($W345) { $x345 = $x340; }  }
else { $x347 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x323=&$scope->properties[\'arguments\'];$x323->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x323->properties[$i]=$args[$i];$x323->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x327,$W327,$S327,$U327);$x328=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),100,10,\'<image>/04_array.js\');$x327=&$x328[0];list(,$W327,$S327,$U327)=$x328;$x324=JS::toPrimitive($x327,$global);$x325=JS::toPrimitive(1,$global);$x326=(is_string($x324)&&is_string($x325)?strcmp($x324,$x325)<0:(!is_nan($x329=JS::toNumber($x324,$global))&&!is_nan($x330=JS::toNumber($x325,$global))&&$x329<$x330));if(JS::toBoolean($x326,$global)){return JS::$undefined;}unset($x331,$W331,$S331,$U331);$x332=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),104,22,\'<image>/04_array.js\');$x331=&$x332[0];list(,$W331,$S331,$U331)=$x332;unset($x333,$W333,$S333,$U333);$x334=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString((JS::toNumber($x331,$global)-JS::toNumber(1,$global)),$global),104,17,\'<image>/04_array.js\');$x333=&$x334[0];list(,$W333,$S333,$U333)=$x334;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x333;unset($x335,$W335,$S335,$U335);$x336=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),104,46,\'<image>/04_array.js\');$x335=&$x336[0];list(,$W335,$S335,$U335)=$x336;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x335;unset($x338,$W338,$S338,$U338);$x339=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),105,18,\'<image>/04_array.js\');$x338=&$x339[0];list(,$W338,$S338,$U338)=$x339;if(!array_key_exists((JS::toNumber($x338,$global)-JS::toNumber(1,$global)),$leThis->attributes)){unset($leThis->properties[(JS::toNumber($x338,$global)-JS::toNumber(1,$global))]);$x337=TRUE;}else if($leThis->attributes[(JS::toNumber($x338,$global)-JS::toNumber(1,$global))]&JS::CONFIGURABLE){unset($leThis->properties[(JS::toNumber($x338,$global)-JS::toNumber(1,$global))],$leThis->attributes[(JS::toNumber($x338,$global)-JS::toNumber(1,$global))],$leThis->getters[(JS::toNumber($x338,$global)-JS::toNumber(1,$global))],$leThis->setters[(JS::toNumber($x338,$global)-JS::toNumber(1,$global))]);$x337=TRUE;}else{$x337=FALSE;}$x340=(JS::toNumber($_len,$global)-JS::toNumber(1,$global));$x341=JS::toString(\'length\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x342=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),106,14,\'<image>/04_array.js\');$_TypeError=&$x342[0];list(,$WTypeError,$STypeError,$UTypeError)=$x342;$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x344=$x343($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x344->class)&&$x344->class===\'Error\'&&!isset($x344->properties[\'file\'])&&!isset($x344->properties[\'line\'])&&!isset($x344->properties[\'column\'])){$x344->properties[\'file\']=\'<image>/04_array.js\';$x344->properties[\'line\']=106;$x344->properties[\'column\']=14;$x344->attributes[\'file\']=$x344->attributes[\'line\']=$x344->attributes[\'column\']=0;}throw new JSException($x344,106,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x345,$W345,$S345,$U345);$x346=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x341,$global),106,14,\'<image>/04_array.js\');$x345=&$x346[0];list(,$W345,$S345,$U345)=$x346;if($U345&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x341]=$x345;$x345=&$leThis->properties[$x341];$leThis->attributes[$x341]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U345=FALSE;$W345=TRUE;}if(isset($S345)){$x348=$S345->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x349=$x348($global,$leThis,$S345,array($x340),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x347=$x349;}else{if(!$U345){$x347=$x340;if($W345){$x345=$x340;}}else{$x347=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x364 = 0;; ++$x364) {
if ($x364 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x363 =& $scope->properties['arguments'];
$x363->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x363->properties[$i] = $args[$i];
$x363->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x365 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 112, 22, '<image>/04_array.js');
$_arguments =& $x365[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x365;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x366 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 112, 22, '<image>/04_array.js');
$_ReferenceError =& $x366[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x366;
$x367 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 112, 22);
$x368 = $x367($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x368->class) && $x368->class === 'Error' && !isset($x368->properties['file']) && !isset($x368->properties['line']) && !isset($x368->properties['column'])) {$x368->properties['file'] = '<image>/04_array.js';$x368->properties['line'] = 112;$x368->properties['column'] = 22;$x368->attributes['file'] = $x368->attributes['line'] = $x368->attributes['column'] = 0; }
throw new JSException($x368, 112, 22, '<image>/04_array.js');
}
unset($x369, $W369, $S369, $U369);
$x370 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 112, 31, '<image>/04_array.js');
$x369 =& $x370[0]; list(,$W369,$S369,$U369) = $x370;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x369;
}
if ($x364 !== 0) {
$x371 = ++$_i;
}
$x372 = JS::toPrimitive($_i, $global);
$x373 = JS::toPrimitive($_l, $global);
$x374 = (is_string($x372) && is_string($x373) ? strcmp($x372, $x373) < 0 : (!is_nan($x375 = JS::toNumber($x372, $global)) && !is_nan($x376 = JS::toNumber($x373, $global)) && $x375 < $x376));
if (!JS::toBoolean($x374, $global)) { break; }

unset($x377, $W377, $S377, $U377);
$x378 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 113, 32, '<image>/04_array.js');
$x377 =& $x378[0]; list(,$W377,$S377,$U377) = $x378;
unset($x379, $W379, $S379, $U379);
$x380 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 113, 12, '<image>/04_array.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
$x381 = JS::toString($x379, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x382 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 113, 21, '<image>/04_array.js');
$_TypeError =& $x382[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x382;
$x383 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x384 = $x383($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x384->class) && $x384->class === 'Error' && !isset($x384->properties['file']) && !isset($x384->properties['line']) && !isset($x384->properties['column'])) {$x384->properties['file'] = '<image>/04_array.js';$x384->properties['line'] = 113;$x384->properties['column'] = 21;$x384->attributes['file'] = $x384->attributes['line'] = $x384->attributes['column'] = 0; }
throw new JSException($x384, 113, 21, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x385, $W385, $S385, $U385);
$x386 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x381, $global), 113, 21, '<image>/04_array.js');
$x385 =& $x386[0]; list(,$W385,$S385,$U385) = $x386;
if ($U385 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x381] = $x385; $x385 =& $leThis->properties[$x381]; $leThis->attributes[$x381] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U385 = FALSE; $W385 = TRUE; }
if (isset($S385)) {
$x388 = $S385->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x389 = $x388($global, $leThis, $S385, array($x377), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x387 = $x389;
} else {
if (!$U385) {$x387 = $x377;if ($W385) { $x385 = $x377; }  }
else { $x387 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($x379) && $x379 >= $leThis->properties['length']) { $leThis->properties['length'] = $x379 + 1; };
};
unset($x390, $W390, $S390, $U390);
$x391 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 116, 13, '<image>/04_array.js');
$x390 =& $x391[0]; list(,$W390,$S390,$U390) = $x391;
return $x390;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_10($global,$leThis,$fn,$args,$constructor=FALSE){for($x364=0;;++$x364){if($x364===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x363=&$scope->properties[\'arguments\'];$x363->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x363->properties[$i]=$args[$i];$x363->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x365=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),112,22,\'<image>/04_array.js\');$_arguments=&$x365[0];list(,$Warguments,$Sarguments,$Uarguments)=$x365;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x366=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),112,22,\'<image>/04_array.js\');$_ReferenceError=&$x366[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x366;$x367=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',112,22);$x368=$x367($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x368->class)&&$x368->class===\'Error\'&&!isset($x368->properties[\'file\'])&&!isset($x368->properties[\'line\'])&&!isset($x368->properties[\'column\'])){$x368->properties[\'file\']=\'<image>/04_array.js\';$x368->properties[\'line\']=112;$x368->properties[\'column\']=22;$x368->attributes[\'file\']=$x368->attributes[\'line\']=$x368->attributes[\'column\']=0;}throw new JSException($x368,112,22,\'<image>/04_array.js\');}unset($x369,$W369,$S369,$U369);$x370=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),112,31,\'<image>/04_array.js\');$x369=&$x370[0];list(,$W369,$S369,$U369)=$x370;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x369;}if($x364!==0){$x371=++$_i;}$x372=JS::toPrimitive($_i,$global);$x373=JS::toPrimitive($_l,$global);$x374=(is_string($x372)&&is_string($x373)?strcmp($x372,$x373)<0:(!is_nan($x375=JS::toNumber($x372,$global))&&!is_nan($x376=JS::toNumber($x373,$global))&&$x375<$x376));if(!JS::toBoolean($x374,$global)){break;}unset($x377,$W377,$S377,$U377);$x378=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),113,32,\'<image>/04_array.js\');$x377=&$x378[0];list(,$W377,$S377,$U377)=$x378;unset($x379,$W379,$S379,$U379);$x380=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),113,12,\'<image>/04_array.js\');$x379=&$x380[0];list(,$W379,$S379,$U379)=$x380;$x381=JS::toString($x379,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x382=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),113,21,\'<image>/04_array.js\');$_TypeError=&$x382[0];list(,$WTypeError,$STypeError,$UTypeError)=$x382;$x383=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x384=$x383($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x384->class)&&$x384->class===\'Error\'&&!isset($x384->properties[\'file\'])&&!isset($x384->properties[\'line\'])&&!isset($x384->properties[\'column\'])){$x384->properties[\'file\']=\'<image>/04_array.js\';$x384->properties[\'line\']=113;$x384->properties[\'column\']=21;$x384->attributes[\'file\']=$x384->attributes[\'line\']=$x384->attributes[\'column\']=0;}throw new JSException($x384,113,21,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x385,$W385,$S385,$U385);$x386=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x381,$global),113,21,\'<image>/04_array.js\');$x385=&$x386[0];list(,$W385,$S385,$U385)=$x386;if($U385&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x381]=$x385;$x385=&$leThis->properties[$x381];$leThis->attributes[$x381]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U385=FALSE;$W385=TRUE;}if(isset($S385)){$x388=$S385->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x389=$x388($global,$leThis,$S385,array($x377),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x387=$x389;}else{if(!$U385){$x387=$x377;if($W385){$x385=$x377;}}else{$x387=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($x379)&&$x379>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$x379+1;}}unset($x390,$W390,$S390,$U390);$x391=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),116,13,\'<image>/04_array.js\');$x390=&$x391[0];list(,$W390,$S390,$U390)=$x391;return$x390;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_11($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x406 = 0;; ++$x406) {
if ($x406 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x405 =& $scope->properties['arguments'];
$x405->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x405->properties[$i] = $args[$i];
$x405->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = 0;
unset($x407, $W407, $S407, $U407);
$x408 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 120, 26, '<image>/04_array.js');
$x407 =& $x408[0]; list(,$W407,$S407,$U407) = $x408;
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = (JS::toNumber($x407, $global) - JS::toNumber(1, $global));
}
if ($x406 !== 0) {
$x409 = ++$_l;
$x410 = --$_r;
}
$x411 = JS::toPrimitive($_l, $global);
$x412 = JS::toPrimitive($_r, $global);
$x413 = (is_string($x411) && is_string($x412) ? strcmp($x411, $x412) < 0 : (!is_nan($x414 = JS::toNumber($x411, $global)) && !is_nan($x415 = JS::toNumber($x412, $global)) && $x414 < $x415));
if (!JS::toBoolean($x413, $global)) { break; }

unset($x416, $W416, $S416, $U416);
$x417 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_l, $global), 121, 17, '<image>/04_array.js');
$x416 =& $x417[0]; list(,$W416,$S416,$U416) = $x417;
$scope->properties['tmp'] = JS::$undefined; $_tmp =& $scope->properties['tmp'];
$Utmp = FALSE;
$_tmp = $x416;
unset($x418, $W418, $S418, $U418);
$x419 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_r, $global), 122, 17, '<image>/04_array.js');
$x418 =& $x419[0]; list(,$W418,$S418,$U418) = $x419;
$x420 = JS::toString($_l, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x421 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 122, 11, '<image>/04_array.js');
$_TypeError =& $x421[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x421;
$x422 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x423 = $x422($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x423->class) && $x423->class === 'Error' && !isset($x423->properties['file']) && !isset($x423->properties['line']) && !isset($x423->properties['column'])) {$x423->properties['file'] = '<image>/04_array.js';$x423->properties['line'] = 122;$x423->properties['column'] = 11;$x423->attributes['file'] = $x423->attributes['line'] = $x423->attributes['column'] = 0; }
throw new JSException($x423, 122, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x424, $W424, $S424, $U424);
$x425 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x420, $global), 122, 11, '<image>/04_array.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
if ($U424 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x420] = $x424; $x424 =& $leThis->properties[$x420]; $leThis->attributes[$x420] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U424 = FALSE; $W424 = TRUE; }
if (isset($S424)) {
$x427 = $S424->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x428 = $x427($global, $leThis, $S424, array($x418), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x426 = $x428;
} else {
if (!$U424) {$x426 = $x418;if ($W424) { $x424 = $x418; }  }
else { $x426 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_l) && $_l >= $leThis->properties['length']) { $leThis->properties['length'] = $_l + 1; };
$x429 = JS::toString($_r, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x430 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 123, 11, '<image>/04_array.js');
$_TypeError =& $x430[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x430;
$x431 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x432 = $x431($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x432->class) && $x432->class === 'Error' && !isset($x432->properties['file']) && !isset($x432->properties['line']) && !isset($x432->properties['column'])) {$x432->properties['file'] = '<image>/04_array.js';$x432->properties['line'] = 123;$x432->properties['column'] = 11;$x432->attributes['file'] = $x432->attributes['line'] = $x432->attributes['column'] = 0; }
throw new JSException($x432, 123, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x433, $W433, $S433, $U433);
$x434 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x429, $global), 123, 11, '<image>/04_array.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
if ($U433 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x429] = $x433; $x433 =& $leThis->properties[$x429]; $leThis->attributes[$x429] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U433 = FALSE; $W433 = TRUE; }
if (isset($S433)) {
$x436 = $S433->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x437 = $x436($global, $leThis, $S433, array($_tmp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x435 = $x437;
} else {
if (!$U433) {$x435 = $_tmp;if ($W433) { $x433 = $_tmp; }  }
else { $x435 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_r) && $_r >= $leThis->properties['length']) { $leThis->properties['length'] = $_r + 1; };;
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_11($global,$leThis,$fn,$args,$constructor=FALSE){for($x406=0;;++$x406){if($x406===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x405=&$scope->properties[\'arguments\'];$x405->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x405->properties[$i]=$args[$i];$x405->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=0;unset($x407,$W407,$S407,$U407);$x408=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),120,26,\'<image>/04_array.js\');$x407=&$x408[0];list(,$W407,$S407,$U407)=$x408;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=(JS::toNumber($x407,$global)-JS::toNumber(1,$global));}if($x406!==0){$x409=++$_l;$x410=--$_r;}$x411=JS::toPrimitive($_l,$global);$x412=JS::toPrimitive($_r,$global);$x413=(is_string($x411)&&is_string($x412)?strcmp($x411,$x412)<0:(!is_nan($x414=JS::toNumber($x411,$global))&&!is_nan($x415=JS::toNumber($x412,$global))&&$x414<$x415));if(!JS::toBoolean($x413,$global)){break;}unset($x416,$W416,$S416,$U416);$x417=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_l,$global),121,17,\'<image>/04_array.js\');$x416=&$x417[0];list(,$W416,$S416,$U416)=$x417;$scope->properties[\'tmp\']=JS::$undefined;$_tmp=&$scope->properties[\'tmp\'];$Utmp=FALSE;$_tmp=$x416;unset($x418,$W418,$S418,$U418);$x419=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_r,$global),122,17,\'<image>/04_array.js\');$x418=&$x419[0];list(,$W418,$S418,$U418)=$x419;$x420=JS::toString($_l,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x421=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),122,11,\'<image>/04_array.js\');$_TypeError=&$x421[0];list(,$WTypeError,$STypeError,$UTypeError)=$x421;$x422=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x423=$x422($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x423->class)&&$x423->class===\'Error\'&&!isset($x423->properties[\'file\'])&&!isset($x423->properties[\'line\'])&&!isset($x423->properties[\'column\'])){$x423->properties[\'file\']=\'<image>/04_array.js\';$x423->properties[\'line\']=122;$x423->properties[\'column\']=11;$x423->attributes[\'file\']=$x423->attributes[\'line\']=$x423->attributes[\'column\']=0;}throw new JSException($x423,122,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x424,$W424,$S424,$U424);$x425=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x420,$global),122,11,\'<image>/04_array.js\');$x424=&$x425[0];list(,$W424,$S424,$U424)=$x425;if($U424&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x420]=$x424;$x424=&$leThis->properties[$x420];$leThis->attributes[$x420]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U424=FALSE;$W424=TRUE;}if(isset($S424)){$x427=$S424->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x428=$x427($global,$leThis,$S424,array($x418),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x426=$x428;}else{if(!$U424){$x426=$x418;if($W424){$x424=$x418;}}else{$x426=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_l)&&$_l>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_l+1;}$x429=JS::toString($_r,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x430=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,11,\'<image>/04_array.js\');$_TypeError=&$x430[0];list(,$WTypeError,$STypeError,$UTypeError)=$x430;$x431=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x432=$x431($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x432->class)&&$x432->class===\'Error\'&&!isset($x432->properties[\'file\'])&&!isset($x432->properties[\'line\'])&&!isset($x432->properties[\'column\'])){$x432->properties[\'file\']=\'<image>/04_array.js\';$x432->properties[\'line\']=123;$x432->properties[\'column\']=11;$x432->attributes[\'file\']=$x432->attributes[\'line\']=$x432->attributes[\'column\']=0;}throw new JSException($x432,123,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x433,$W433,$S433,$U433);$x434=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x429,$global),123,11,\'<image>/04_array.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;if($U433&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x429]=$x433;$x433=&$leThis->properties[$x429];$leThis->attributes[$x429]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U433=FALSE;$W433=TRUE;}if(isset($S433)){$x436=$S433->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x437=$x436($global,$leThis,$S433,array($_tmp),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x435=$x437;}else{if(!$U433){$x435=$_tmp;if($W433){$x433=$_tmp;}}else{$x435=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_r)&&$_r>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_r+1;}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x451 =& $scope->properties['arguments'];
$x451->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x451->properties[$i] = $args[$i];
$x451->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x455, $W455, $S455, $U455);
$x456 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 130, 10, '<image>/04_array.js');
$x455 =& $x456[0]; list(,$W455,$S455,$U455) = $x456;
$x452 = JS::toPrimitive($x455, $global);
$x453 = JS::toPrimitive(1, $global);
$x454 = (is_string($x452) && is_string($x453) ? strcmp($x452, $x453) < 0 : (!is_nan($x457 = JS::toNumber($x452, $global)) && !is_nan($x458 = JS::toNumber($x453, $global)) && $x457 < $x458));
if (JS::toBoolean($x454, $global)) {

return JS::$undefined;;
};
unset($x459, $W459, $S459, $U459);
$x460 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString(0, $global), 134, 17, '<image>/04_array.js');
$x459 =& $x460[0]; list(,$W459,$S459,$U459) = $x460;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x459;
unset($x461, $W461, $S461, $U461);
$x462 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 134, 30, '<image>/04_array.js');
$x461 =& $x462[0]; list(,$W461,$S461,$U461) = $x462;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x461;
for ($x463 = 0;; ++$x463) {
if ($x463 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
}
if ($x463 !== 0) {
$x464 = ++$_i;
}
$x465 = JS::toPrimitive($_i, $global);
$x466 = JS::toPrimitive($_l, $global);
$x467 = (is_string($x465) && is_string($x466) ? strcmp($x465, $x466) < 0 : (!is_nan($x468 = JS::toNumber($x465, $global)) && !is_nan($x469 = JS::toNumber($x466, $global)) && $x468 < $x469));
if (!JS::toBoolean($x467, $global)) { break; }

$x470 = JS::toPrimitive($_i, $global);
$x471 = JS::toPrimitive(1, $global);
unset($x472, $W472, $S472, $U472);
$x473 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString((is_string($x470) || is_string($x471) ? JS::toString($x470, $global) . JS::toString($x471, $global) : JS::toNumber($x470, $global) + JS::toNumber($x471, $global)), $global), 137, 17, '<image>/04_array.js');
$x472 =& $x473[0]; list(,$W472,$S472,$U472) = $x473;
$x474 = JS::toString($_i, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x475 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 137, 11, '<image>/04_array.js');
$_TypeError =& $x475[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x475;
$x476 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x477 = $x476($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x477->class) && $x477->class === 'Error' && !isset($x477->properties['file']) && !isset($x477->properties['line']) && !isset($x477->properties['column'])) {$x477->properties['file'] = '<image>/04_array.js';$x477->properties['line'] = 137;$x477->properties['column'] = 11;$x477->attributes['file'] = $x477->attributes['line'] = $x477->attributes['column'] = 0; }
throw new JSException($x477, 137, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x478, $W478, $S478, $U478);
$x479 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x474, $global), 137, 11, '<image>/04_array.js');
$x478 =& $x479[0]; list(,$W478,$S478,$U478) = $x479;
if ($U478 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x474] = $x478; $x478 =& $leThis->properties[$x474]; $leThis->attributes[$x474] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U478 = FALSE; $W478 = TRUE; }
if (isset($S478)) {
$x481 = $S478->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x482 = $x481($global, $leThis, $S478, array($x472), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x480 = $x482;
} else {
if (!$U478) {$x480 = $x472;if ($W478) { $x478 = $x472; }  }
else { $x480 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
$x483 = (JS::toNumber($_l, $global) - JS::toNumber(1, $global));
$x484 = JS::toString('length', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x485 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 140, 14, '<image>/04_array.js');
$_TypeError =& $x485[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x485;
$x486 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x487 = $x486($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x487->class) && $x487->class === 'Error' && !isset($x487->properties['file']) && !isset($x487->properties['line']) && !isset($x487->properties['column'])) {$x487->properties['file'] = '<image>/04_array.js';$x487->properties['line'] = 140;$x487->properties['column'] = 14;$x487->attributes['file'] = $x487->attributes['line'] = $x487->attributes['column'] = 0; }
throw new JSException($x487, 140, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x488, $W488, $S488, $U488);
$x489 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x484, $global), 140, 14, '<image>/04_array.js');
$x488 =& $x489[0]; list(,$W488,$S488,$U488) = $x489;
if ($U488 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x484] = $x488; $x488 =& $leThis->properties[$x484]; $leThis->attributes[$x484] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U488 = FALSE; $W488 = TRUE; }
if (isset($S488)) {
$x491 = $S488->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x492 = $x491($global, $leThis, $S488, array($x483), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x490 = $x492;
} else {
if (!$U488) {$x490 = $x483;if ($W488) { $x488 = $x483; }  }
else { $x490 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x451=&$scope->properties[\'arguments\'];$x451->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x451->properties[$i]=$args[$i];$x451->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x455,$W455,$S455,$U455);$x456=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),130,10,\'<image>/04_array.js\');$x455=&$x456[0];list(,$W455,$S455,$U455)=$x456;$x452=JS::toPrimitive($x455,$global);$x453=JS::toPrimitive(1,$global);$x454=(is_string($x452)&&is_string($x453)?strcmp($x452,$x453)<0:(!is_nan($x457=JS::toNumber($x452,$global))&&!is_nan($x458=JS::toNumber($x453,$global))&&$x457<$x458));if(JS::toBoolean($x454,$global)){return JS::$undefined;}unset($x459,$W459,$S459,$U459);$x460=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(0,$global),134,17,\'<image>/04_array.js\');$x459=&$x460[0];list(,$W459,$S459,$U459)=$x460;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x459;unset($x461,$W461,$S461,$U461);$x462=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),134,30,\'<image>/04_array.js\');$x461=&$x462[0];list(,$W461,$S461,$U461)=$x462;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x461;for($x463=0;;++$x463){if($x463===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x463!==0){$x464=++$_i;}$x465=JS::toPrimitive($_i,$global);$x466=JS::toPrimitive($_l,$global);$x467=(is_string($x465)&&is_string($x466)?strcmp($x465,$x466)<0:(!is_nan($x468=JS::toNumber($x465,$global))&&!is_nan($x469=JS::toNumber($x466,$global))&&$x468<$x469));if(!JS::toBoolean($x467,$global)){break;}$x470=JS::toPrimitive($_i,$global);$x471=JS::toPrimitive(1,$global);unset($x472,$W472,$S472,$U472);$x473=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString((is_string($x470)||is_string($x471)?JS::toString($x470,$global).JS::toString($x471,$global):JS::toNumber($x470,$global)+JS::toNumber($x471,$global)),$global),137,17,\'<image>/04_array.js\');$x472=&$x473[0];list(,$W472,$S472,$U472)=$x473;$x474=JS::toString($_i,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x475=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),137,11,\'<image>/04_array.js\');$_TypeError=&$x475[0];list(,$WTypeError,$STypeError,$UTypeError)=$x475;$x476=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x477=$x476($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x477->class)&&$x477->class===\'Error\'&&!isset($x477->properties[\'file\'])&&!isset($x477->properties[\'line\'])&&!isset($x477->properties[\'column\'])){$x477->properties[\'file\']=\'<image>/04_array.js\';$x477->properties[\'line\']=137;$x477->properties[\'column\']=11;$x477->attributes[\'file\']=$x477->attributes[\'line\']=$x477->attributes[\'column\']=0;}throw new JSException($x477,137,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x478,$W478,$S478,$U478);$x479=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x474,$global),137,11,\'<image>/04_array.js\');$x478=&$x479[0];list(,$W478,$S478,$U478)=$x479;if($U478&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x474]=$x478;$x478=&$leThis->properties[$x474];$leThis->attributes[$x474]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U478=FALSE;$W478=TRUE;}if(isset($S478)){$x481=$S478->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x482=$x481($global,$leThis,$S478,array($x472),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x480=$x482;}else{if(!$U478){$x480=$x472;if($W478){$x478=$x472;}}else{$x480=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}$x483=(JS::toNumber($_l,$global)-JS::toNumber(1,$global));$x484=JS::toString(\'length\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x485=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),140,14,\'<image>/04_array.js\');$_TypeError=&$x485[0];list(,$WTypeError,$STypeError,$UTypeError)=$x485;$x486=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x487=$x486($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x487->class)&&$x487->class===\'Error\'&&!isset($x487->properties[\'file\'])&&!isset($x487->properties[\'line\'])&&!isset($x487->properties[\'column\'])){$x487->properties[\'file\']=\'<image>/04_array.js\';$x487->properties[\'line\']=140;$x487->properties[\'column\']=14;$x487->attributes[\'file\']=$x487->attributes[\'line\']=$x487->attributes[\'column\']=0;}throw new JSException($x487,140,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x488,$W488,$S488,$U488);$x489=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x484,$global),140,14,\'<image>/04_array.js\');$x488=&$x489[0];list(,$W488,$S488,$U488)=$x489;if($U488&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x484]=$x488;$x488=&$leThis->properties[$x484];$leThis->attributes[$x484]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U488=FALSE;$W488=TRUE;}if(isset($S488)){$x491=$S488->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x492=$x491($global,$leThis,$S488,array($x483),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x490=$x492;}else{if(!$U488){$x490=$x483;if($W488){$x488=$x483;}}else{$x490=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x506 =& $scope->properties['arguments'];
$x506->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x506->properties[$i] = $args[$i];
$x506->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x507 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x507, $global)) {
$x508 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x508;;
};
$x509 = JS::toPrimitive($_start, $global);
$x510 = JS::toPrimitive(0, $global);
$x511 = (is_string($x509) && is_string($x510) ? strcmp($x509, $x510) < 0 : (!is_nan($x512 = JS::toNumber($x509, $global)) && !is_nan($x513 = JS::toNumber($x510, $global)) && $x512 < $x513));
if (JS::toBoolean($x511, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x514 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Math', $global), 151, 11, '<image>/04_array.js');
$_Math =& $x514[0]; list(,$WMath,$SMath,$UMath) = $x514;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x515 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 151, 11, '<image>/04_array.js');
$_ReferenceError =& $x515[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x515;
$x516 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 11);
$x517 = $x516($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x517->class) && $x517->class === 'Error' && !isset($x517->properties['file']) && !isset($x517->properties['line']) && !isset($x517->properties['column'])) {$x517->properties['file'] = '<image>/04_array.js';$x517->properties['line'] = 151;$x517->properties['column'] = 11;$x517->attributes['file'] = $x517->attributes['line'] = $x517->attributes['column'] = 0; }
throw new JSException($x517, 151, 11, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x519 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 151, 19, '<image>/04_array.js');
$_TypeError =& $x519[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x519;
$x520 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x521 = $x520($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x521->class) && $x521->class === 'Error' && !isset($x521->properties['file']) && !isset($x521->properties['line']) && !isset($x521->properties['column'])) {$x521->properties['file'] = '<image>/04_array.js';$x521->properties['line'] = 151;$x521->properties['column'] = 19;$x521->attributes['file'] = $x521->attributes['line'] = $x521->attributes['column'] = 0; }
throw new JSException($x521, 151, 19, '<image>/04_array.js');
}
$x518 = JS::toObject($_Math, $global);
unset($x522, $W522, $S522, $U522);
$x523 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x518, JS::toString('max', $global), 151, 19, '<image>/04_array.js');
$x522 =& $x523[0]; list(,$W522,$S522,$U522) = $x523;
unset($x526, $W526, $S526, $U526);
$x527 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 151, 24, '<image>/04_array.js');
$x526 =& $x527[0]; list(,$W526,$S526,$U526) = $x527;
$x524 = JS::toPrimitive($x526, $global);
$x525 = JS::toPrimitive($_start, $global);
if (!(is_object($x522) && isset($x522->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x530 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 151, 19, '<image>/04_array.js');
$_TypeError =& $x530[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x530;
$x531 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x532 = $x531($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x532->class) && $x532->class === 'Error' && !isset($x532->properties['file']) && !isset($x532->properties['line']) && !isset($x532->properties['column'])) {$x532->properties['file'] = '<image>/04_array.js';$x532->properties['line'] = 151;$x532->properties['column'] = 19;$x532->attributes['file'] = $x532->attributes['line'] = $x532->attributes['column'] = 0; }
throw new JSException($x532, 151, 19, '<image>/04_array.js');
}
$x528 = $x522->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x529 = $x528($global, $x518, $x522, array((is_string($x524) || is_string($x525) ? JS::toString($x524, $global) . JS::toString($x525, $global) : JS::toNumber($x524, $global) + JS::toNumber($x525, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x529;;
};
$x533 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x533, $global)) {
unset($x534, $W534, $S534, $U534);
$x535 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 155, 13, '<image>/04_array.js');
$x534 =& $x535[0]; list(,$W534,$S534,$U534) = $x535;
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x534;;
};
$x536 = JS::toPrimitive($_end, $global);
$x537 = JS::toPrimitive(0, $global);
$x538 = (is_string($x536) && is_string($x537) ? strcmp($x536, $x537) < 0 : (!is_nan($x539 = JS::toNumber($x536, $global)) && !is_nan($x540 = JS::toNumber($x537, $global)) && $x539 < $x540));
if (JS::toBoolean($x538, $global)) {
unset($x543, $W543, $S543, $U543);
$x544 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 159, 13, '<image>/04_array.js');
$x543 =& $x544[0]; list(,$W543,$S543,$U543) = $x544;
$x541 = JS::toPrimitive($x543, $global);
$x542 = JS::toPrimitive($_end, $global);
$x545 = (is_string($x541) || is_string($x542) ? JS::toString($x541, $global) . JS::toString($x542, $global) : JS::toNumber($x541, $global) + JS::toNumber($x542, $global));
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x545;;
};
$x546 = clone JS::$arrayTemplate;
$x546->properties['length'] = 0;
$x546->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x546;
for ($x547 = 0;; ++$x547) {
if ($x547 !== 0) {
$x548 = ++$_start;
}
$x549 = JS::toPrimitive($_start, $global);
$x550 = JS::toPrimitive($_end, $global);
$x551 = (is_string($x549) && is_string($x550) ? strcmp($x549, $x550) < 0 : (!is_nan($x552 = JS::toNumber($x549, $global)) && !is_nan($x553 = JS::toNumber($x550, $global)) && $x552 < $x553));
if (!JS::toBoolean($x551, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x555 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 165, 16, '<image>/04_array.js');
$_TypeError =& $x555[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x555;
$x556 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x557 = $x556($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x557->class) && $x557->class === 'Error' && !isset($x557->properties['file']) && !isset($x557->properties['line']) && !isset($x557->properties['column'])) {$x557->properties['file'] = '<image>/04_array.js';$x557->properties['line'] = 165;$x557->properties['column'] = 16;$x557->attributes['file'] = $x557->attributes['line'] = $x557->attributes['column'] = 0; }
throw new JSException($x557, 165, 16, '<image>/04_array.js');
}
$x554 = JS::toObject($_newArray, $global);
unset($x558, $W558, $S558, $U558);
$x559 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x554, JS::toString('push', $global), 165, 16, '<image>/04_array.js');
$x558 =& $x559[0]; list(,$W558,$S558,$U558) = $x559;
unset($x560, $W560, $S560, $U560);
$x561 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_start, $global), 165, 21, '<image>/04_array.js');
$x560 =& $x561[0]; list(,$W560,$S560,$U560) = $x561;
if (!(is_object($x558) && isset($x558->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x564 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 165, 16, '<image>/04_array.js');
$_TypeError =& $x564[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x564;
$x565 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x566 = $x565($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x566->class) && $x566->class === 'Error' && !isset($x566->properties['file']) && !isset($x566->properties['line']) && !isset($x566->properties['column'])) {$x566->properties['file'] = '<image>/04_array.js';$x566->properties['line'] = 165;$x566->properties['column'] = 16;$x566->attributes['file'] = $x566->attributes['line'] = $x566->attributes['column'] = 0; }
throw new JSException($x566, 165, 16, '<image>/04_array.js');
}
$x562 = $x558->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x563 = $x562($global, $x554, $x558, array($x560), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x506=&$scope->properties[\'arguments\'];$x506->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x506->properties[$i]=$args[$i];$x506->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$x507=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x507,$global)){$x508=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x508;}$x509=JS::toPrimitive($_start,$global);$x510=JS::toPrimitive(0,$global);$x511=(is_string($x509)&&is_string($x510)?strcmp($x509,$x510)<0:(!is_nan($x512=JS::toNumber($x509,$global))&&!is_nan($x513=JS::toNumber($x510,$global))&&$x512<$x513));if(JS::toBoolean($x511,$global)){unset($_Math,$WMath,$SMath,$UMath);$x514=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Math\',$global),151,11,\'<image>/04_array.js\');$_Math=&$x514[0];list(,$WMath,$SMath,$UMath)=$x514;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x515=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),151,11,\'<image>/04_array.js\');$_ReferenceError=&$x515[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x515;$x516=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,11);$x517=$x516($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x517->class)&&$x517->class===\'Error\'&&!isset($x517->properties[\'file\'])&&!isset($x517->properties[\'line\'])&&!isset($x517->properties[\'column\'])){$x517->properties[\'file\']=\'<image>/04_array.js\';$x517->properties[\'line\']=151;$x517->properties[\'column\']=11;$x517->attributes[\'file\']=$x517->attributes[\'line\']=$x517->attributes[\'column\']=0;}throw new JSException($x517,151,11,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x519=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),151,19,\'<image>/04_array.js\');$_TypeError=&$x519[0];list(,$WTypeError,$STypeError,$UTypeError)=$x519;$x520=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x521=$x520($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x521->class)&&$x521->class===\'Error\'&&!isset($x521->properties[\'file\'])&&!isset($x521->properties[\'line\'])&&!isset($x521->properties[\'column\'])){$x521->properties[\'file\']=\'<image>/04_array.js\';$x521->properties[\'line\']=151;$x521->properties[\'column\']=19;$x521->attributes[\'file\']=$x521->attributes[\'line\']=$x521->attributes[\'column\']=0;}throw new JSException($x521,151,19,\'<image>/04_array.js\');}$x518=JS::toObject($_Math,$global);unset($x522,$W522,$S522,$U522);$x523=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x518,JS::toString(\'max\',$global),151,19,\'<image>/04_array.js\');$x522=&$x523[0];list(,$W522,$S522,$U522)=$x523;unset($x526,$W526,$S526,$U526);$x527=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),151,24,\'<image>/04_array.js\');$x526=&$x527[0];list(,$W526,$S526,$U526)=$x527;$x524=JS::toPrimitive($x526,$global);$x525=JS::toPrimitive($_start,$global);if(!(is_object($x522)&&isset($x522->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x530=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),151,19,\'<image>/04_array.js\');$_TypeError=&$x530[0];list(,$WTypeError,$STypeError,$UTypeError)=$x530;$x531=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x532=$x531($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x532->class)&&$x532->class===\'Error\'&&!isset($x532->properties[\'file\'])&&!isset($x532->properties[\'line\'])&&!isset($x532->properties[\'column\'])){$x532->properties[\'file\']=\'<image>/04_array.js\';$x532->properties[\'line\']=151;$x532->properties[\'column\']=19;$x532->attributes[\'file\']=$x532->attributes[\'line\']=$x532->attributes[\'column\']=0;}throw new JSException($x532,151,19,\'<image>/04_array.js\');}$x528=$x522->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x529=$x528($global,$x518,$x522,array((is_string($x524)||is_string($x525)?JS::toString($x524,$global).JS::toString($x525,$global):JS::toNumber($x524,$global)+JS::toNumber($x525,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x529;}$x533=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x533,$global)){unset($x534,$W534,$S534,$U534);$x535=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),155,13,\'<image>/04_array.js\');$x534=&$x535[0];list(,$W534,$S534,$U534)=$x535;if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x534;}$x536=JS::toPrimitive($_end,$global);$x537=JS::toPrimitive(0,$global);$x538=(is_string($x536)&&is_string($x537)?strcmp($x536,$x537)<0:(!is_nan($x539=JS::toNumber($x536,$global))&&!is_nan($x540=JS::toNumber($x537,$global))&&$x539<$x540));if(JS::toBoolean($x538,$global)){unset($x543,$W543,$S543,$U543);$x544=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),159,13,\'<image>/04_array.js\');$x543=&$x544[0];list(,$W543,$S543,$U543)=$x544;$x541=JS::toPrimitive($x543,$global);$x542=JS::toPrimitive($_end,$global);$x545=(is_string($x541)||is_string($x542)?JS::toString($x541,$global).JS::toString($x542,$global):JS::toNumber($x541,$global)+JS::toNumber($x542,$global));if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x545;}$x546=clone JS::$arrayTemplate;$x546->properties[\'length\']=0;$x546->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x546;for($x547=0;;++$x547){if($x547!==0){$x548=++$_start;}$x549=JS::toPrimitive($_start,$global);$x550=JS::toPrimitive($_end,$global);$x551=(is_string($x549)&&is_string($x550)?strcmp($x549,$x550)<0:(!is_nan($x552=JS::toNumber($x549,$global))&&!is_nan($x553=JS::toNumber($x550,$global))&&$x552<$x553));if(!JS::toBoolean($x551,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x555=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),165,16,\'<image>/04_array.js\');$_TypeError=&$x555[0];list(,$WTypeError,$STypeError,$UTypeError)=$x555;$x556=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x557=$x556($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x557->class)&&$x557->class===\'Error\'&&!isset($x557->properties[\'file\'])&&!isset($x557->properties[\'line\'])&&!isset($x557->properties[\'column\'])){$x557->properties[\'file\']=\'<image>/04_array.js\';$x557->properties[\'line\']=165;$x557->properties[\'column\']=16;$x557->attributes[\'file\']=$x557->attributes[\'line\']=$x557->attributes[\'column\']=0;}throw new JSException($x557,165,16,\'<image>/04_array.js\');}$x554=JS::toObject($_newArray,$global);unset($x558,$W558,$S558,$U558);$x559=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x554,JS::toString(\'push\',$global),165,16,\'<image>/04_array.js\');$x558=&$x559[0];list(,$W558,$S558,$U558)=$x559;unset($x560,$W560,$S560,$U560);$x561=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_start,$global),165,21,\'<image>/04_array.js\');$x560=&$x561[0];list(,$W560,$S560,$U560)=$x561;if(!(is_object($x558)&&isset($x558->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x564=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),165,16,\'<image>/04_array.js\');$_TypeError=&$x564[0];list(,$WTypeError,$STypeError,$UTypeError)=$x564;$x565=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x566=$x565($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x566->class)&&$x566->class===\'Error\'&&!isset($x566->properties[\'file\'])&&!isset($x566->properties[\'line\'])&&!isset($x566->properties[\'column\'])){$x566->properties[\'file\']=\'<image>/04_array.js\';$x566->properties[\'line\']=165;$x566->properties[\'column\']=16;$x566->attributes[\'file\']=$x566->attributes[\'line\']=$x566->attributes[\'column\']=0;}throw new JSException($x566,165,16,\'<image>/04_array.js\');}$x562=$x558->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x563=$x562($global,$x554,$x558,array($x560),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x583 =& $scope->properties['arguments'];
$x583->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x583->properties[$i] = $args[$i];
$x583->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['a'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_a =& $scope->properties['a'];
$Ua = FALSE;
$scope->properties['b'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_b =& $scope->properties['b'];
$Ub = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x586 = $_a;
$x586 = ($x586 === JS::$undefined ? 'undefined' : (is_int($x586) || is_float($x586) ? 'number' : (is_bool($x586) ? 'boolean' : (is_string($x586) ? 'string' : (is_object($x586) && isset($x586->call) ? 'function' : 'object')))));
$x585 = (((gettype($x586) === gettype('string') && $x586 === 'string'))|| (((is_float($x586) || is_int($x586)) && (is_float('string') || is_int('string'))) && $x586 == 'string'));
$x584 = $x585;
if (!JS::toBoolean($x584, $global)) {
$x588 = $_b;
$x588 = ($x588 === JS::$undefined ? 'undefined' : (is_int($x588) || is_float($x588) ? 'number' : (is_bool($x588) ? 'boolean' : (is_string($x588) ? 'string' : (is_object($x588) && isset($x588->call) ? 'function' : 'object')))));
$x587 = (((gettype($x588) === gettype('string') && $x588 === 'string'))|| (((is_float($x588) || is_int($x588)) && (is_float('string') || is_int('string'))) && $x588 == 'string'));
$x584 = $x587; }
if (JS::toBoolean($x584, $global)) {
$x589 = JS::toString($_a, $global);
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = $x589;
$x590 = JS::toString($_b, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = $x590;
$x591 = JS::toPrimitive($_a, $global);
$x592 = JS::toPrimitive($_b, $global);
$x593 = (is_string($x591) && is_string($x592) ? strcmp($x591, $x592) < 0 : (!is_nan($x594 = JS::toNumber($x591, $global)) && !is_nan($x595 = JS::toNumber($x592, $global)) && $x594 < $x595));
if (JS::toBoolean($x593, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
}
else {
$x596 = JS::toPrimitive($_a, $global);
$x597 = JS::toPrimitive($_b, $global);
$x598 = (is_string($x597) && is_string($x596) ? strcmp($x597, $x596) < 0 : (!is_nan($x599 = JS::toNumber($x597, $global)) && !is_nan($x600 = JS::toNumber($x596, $global)) && $x599 < $x600));
if (JS::toBoolean($x598, $global)) {

return 1;;
}
else {

return 0;;
};
};;
}
else {
$x603 = $_a;
$x603 = ($x603 === JS::$undefined ? 'undefined' : (is_int($x603) || is_float($x603) ? 'number' : (is_bool($x603) ? 'boolean' : (is_string($x603) ? 'string' : (is_object($x603) && isset($x603->call) ? 'function' : 'object')))));
$x602 = (((gettype($x603) === gettype('number') && $x603 === 'number'))|| (((is_float($x603) || is_int($x603)) && (is_float('number') || is_int('number'))) && $x603 == 'number'));
$x601 = $x602;
if (!JS::toBoolean($x601, $global)) {
$x605 = $_b;
$x605 = ($x605 === JS::$undefined ? 'undefined' : (is_int($x605) || is_float($x605) ? 'number' : (is_bool($x605) ? 'boolean' : (is_string($x605) ? 'string' : (is_object($x605) && isset($x605->call) ? 'function' : 'object')))));
$x604 = (((gettype($x605) === gettype('number') && $x605 === 'number'))|| (((is_float($x605) || is_int($x605)) && (is_float('number') || is_int('number'))) && $x605 == 'number'));
$x601 = $x604; }
if (JS::toBoolean($x601, $global)) {
$x606 = JS::toNumber($_a, $global);
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = $x606;
$x607 = JS::toNumber($_b, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = $x607;
return (JS::toNumber($_a, $global) - JS::toNumber($_b, $global));;
};
};
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x610 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 192, 13, '<image>/04_array.js');
$_TypeError =& $x610[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x610;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x611 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 192, 13, '<image>/04_array.js');
$_ReferenceError =& $x611[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x611;
$x612 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 13);
$x613 = $x612($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x613->class) && $x613->class === 'Error' && !isset($x613->properties['file']) && !isset($x613->properties['line']) && !isset($x613->properties['column'])) {$x613->properties['file'] = '<image>/04_array.js';$x613->properties['line'] = 192;$x613->properties['column'] = 13;$x613->attributes['file'] = $x613->attributes['line'] = $x613->attributes['column'] = 0; }
throw new JSException($x613, 192, 13, '<image>/04_array.js');
}
$x608 = clone JS::$objectTemplate;
unset($x614, $W614, $S614, $U614);
$x615 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 192, 9, '<image>/04_array.js');
$x614 =& $x615[0]; list(,$W614,$S614,$U614) = $x615;
$x609 = $x614;
$x608->prototype = $x609;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x618 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x619 = $x618($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x619->class) && $x619->class === 'Error' && !isset($x619->properties['file']) && !isset($x619->properties['line']) && !isset($x619->properties['column'])) {$x619->properties['file'] = '<image>/04_array.js';$x619->properties['line'] = 192;$x619->properties['column'] = 9;$x619->attributes['file'] = $x619->attributes['line'] = $x619->attributes['column'] = 0; }
throw new JSException($x619, 192, 9, '<image>/04_array.js');
}
$x616 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x617 = $x616($global, $x608, $_TypeError, array('Unsortable values in array.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x609 = $x617;
if (is_object($x609) && $x609 !== JS::$undefined) { $x608 = $x609; }
if (isset($x608->class) && $x608->class === 'Error' && !isset($x608->properties['file']) && !isset($x608->properties['line']) && !isset($x608->properties['column'])) {$x608->properties['file'] = '<image>/04_array.js';$x608->properties['line'] = 192;$x608->properties['column'] = 3;$x608->attributes['file'] = $x608->attributes['line'] = $x608->attributes['column'] = 0; }
throw new JSException($x608, 192, 3, '<image>/04_array.js');
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x583=&$scope->properties[\'arguments\'];$x583->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x583->properties[$i]=$args[$i];$x583->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'a\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_a=&$scope->properties[\'a\'];$Ua=FALSE;$scope->properties[\'b\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$global->scope[++$global->scope_sp]=$scope;$x586=$_a;$x586=($x586===JS::$undefined?\'undefined\':(is_int($x586)||is_float($x586)?\'number\':(is_bool($x586)?\'boolean\':(is_string($x586)?\'string\':(is_object($x586)&&isset($x586->call)?\'function\':\'object\')))));$x585=(((gettype($x586)===gettype(\'string\')&&$x586===\'string\'))||(((is_float($x586)||is_int($x586))&&(is_float(\'string\')||is_int(\'string\')))&&$x586==\'string\'));$x584=$x585;if(!JS::toBoolean($x584,$global)){$x588=$_b;$x588=($x588===JS::$undefined?\'undefined\':(is_int($x588)||is_float($x588)?\'number\':(is_bool($x588)?\'boolean\':(is_string($x588)?\'string\':(is_object($x588)&&isset($x588->call)?\'function\':\'object\')))));$x587=(((gettype($x588)===gettype(\'string\')&&$x588===\'string\'))||(((is_float($x588)||is_int($x588))&&(is_float(\'string\')||is_int(\'string\')))&&$x588==\'string\'));$x584=$x587;}if(JS::toBoolean($x584,$global)){$x589=JS::toString($_a,$global);if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=$x589;$x590=JS::toString($_b,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=$x590;$x591=JS::toPrimitive($_a,$global);$x592=JS::toPrimitive($_b,$global);$x593=(is_string($x591)&&is_string($x592)?strcmp($x591,$x592)<0:(!is_nan($x594=JS::toNumber($x591,$global))&&!is_nan($x595=JS::toNumber($x592,$global))&&$x594<$x595));if(JS::toBoolean($x593,$global)){return(-1.0*JS::toNumber(1,$global));}else{$x596=JS::toPrimitive($_a,$global);$x597=JS::toPrimitive($_b,$global);$x598=(is_string($x597)&&is_string($x596)?strcmp($x597,$x596)<0:(!is_nan($x599=JS::toNumber($x597,$global))&&!is_nan($x600=JS::toNumber($x596,$global))&&$x599<$x600));if(JS::toBoolean($x598,$global)){return 1;}else{return 0;}}}else{$x603=$_a;$x603=($x603===JS::$undefined?\'undefined\':(is_int($x603)||is_float($x603)?\'number\':(is_bool($x603)?\'boolean\':(is_string($x603)?\'string\':(is_object($x603)&&isset($x603->call)?\'function\':\'object\')))));$x602=(((gettype($x603)===gettype(\'number\')&&$x603===\'number\'))||(((is_float($x603)||is_int($x603))&&(is_float(\'number\')||is_int(\'number\')))&&$x603==\'number\'));$x601=$x602;if(!JS::toBoolean($x601,$global)){$x605=$_b;$x605=($x605===JS::$undefined?\'undefined\':(is_int($x605)||is_float($x605)?\'number\':(is_bool($x605)?\'boolean\':(is_string($x605)?\'string\':(is_object($x605)&&isset($x605->call)?\'function\':\'object\')))));$x604=(((gettype($x605)===gettype(\'number\')&&$x605===\'number\'))||(((is_float($x605)||is_int($x605))&&(is_float(\'number\')||is_int(\'number\')))&&$x605==\'number\'));$x601=$x604;}if(JS::toBoolean($x601,$global)){$x606=JS::toNumber($_a,$global);if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=$x606;$x607=JS::toNumber($_b,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=$x607;return(JS::toNumber($_a,$global)-JS::toNumber($_b,$global));}}unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x610=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),192,13,\'<image>/04_array.js\');$_TypeError=&$x610[0];list(,$WTypeError,$STypeError,$UTypeError)=$x610;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x611=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),192,13,\'<image>/04_array.js\');$_ReferenceError=&$x611[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x611;$x612=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,13);$x613=$x612($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x613->class)&&$x613->class===\'Error\'&&!isset($x613->properties[\'file\'])&&!isset($x613->properties[\'line\'])&&!isset($x613->properties[\'column\'])){$x613->properties[\'file\']=\'<image>/04_array.js\';$x613->properties[\'line\']=192;$x613->properties[\'column\']=13;$x613->attributes[\'file\']=$x613->attributes[\'line\']=$x613->attributes[\'column\']=0;}throw new JSException($x613,192,13,\'<image>/04_array.js\');}$x608=clone JS::$objectTemplate;unset($x614,$W614,$S614,$U614);$x615=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),192,9,\'<image>/04_array.js\');$x614=&$x615[0];list(,$W614,$S614,$U614)=$x615;$x609=$x614;$x608->prototype=$x609;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x618=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x619=$x618($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x619->class)&&$x619->class===\'Error\'&&!isset($x619->properties[\'file\'])&&!isset($x619->properties[\'line\'])&&!isset($x619->properties[\'column\'])){$x619->properties[\'file\']=\'<image>/04_array.js\';$x619->properties[\'line\']=192;$x619->properties[\'column\']=9;$x619->attributes[\'file\']=$x619->attributes[\'line\']=$x619->attributes[\'column\']=0;}throw new JSException($x619,192,9,\'<image>/04_array.js\');}$x616=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x617=$x616($global,$x608,$_TypeError,array(\'Unsortable values in array.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x609=$x617;if(is_object($x609)&&$x609!==JS::$undefined){$x608=$x609;}if(isset($x608->class)&&$x608->class===\'Error\'&&!isset($x608->properties[\'file\'])&&!isset($x608->properties[\'line\'])&&!isset($x608->properties[\'column\'])){$x608->properties[\'file\']=\'<image>/04_array.js\';$x608->properties[\'line\']=192;$x608->properties[\'column\']=3;$x608->attributes[\'file\']=$x608->attributes[\'line\']=$x608->attributes[\'column\']=0;}throw new JSException($x608,192,3,\'<image>/04_array.js\');return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x580 =& $scope->properties['arguments'];
$x580->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x580->properties[$i] = $args[$i];
$x580->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['compareFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_compareFn =& $scope->properties['compareFn'];
$UcompareFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x581 = $_compareFn;
if (!JS::toBoolean($x581, $global)) {
$x620 = clone JS::$functionTemplate; $x620->call = '_339fc8fcf8563d9777a12bd15b91ae1b_15'; $x620->parameters = array (
  0 => 'a',
  1 => 'b',
); $x620->scope = $scope; $x620->properties['prototype'] = clone JS::$objectTemplate; $x620->attributes['prototype'] = JS::WRITABLE; $x620->properties['prototype']->properties['constructor'] = $x620; $x620->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x620->properties['length'] = 2; $x620->attributes['length'] = 0;
$x581 = $x620; }
if ($UcompareFn) {$global->properties['compareFn'] = $_compareFn; $_compareFn =& $global->properties['compareFn']; }
$_compareFn = $x581;
unset($x624, $W624, $S624, $U624);
$x625 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 195, 10, '<image>/04_array.js');
$x624 =& $x625[0]; list(,$W624,$S624,$U624) = $x625;
$x621 = JS::toPrimitive($x624, $global);
$x622 = JS::toPrimitive(2, $global);
$x623 = (is_string($x621) && is_string($x622) ? strcmp($x621, $x622) < 0 : (!is_nan($x626 = JS::toNumber($x621, $global)) && !is_nan($x627 = JS::toNumber($x622, $global)) && $x626 < $x627));
if (JS::toBoolean($x623, $global)) {

return $leThis;;
};
$scope->properties['pivot'] = JS::$undefined; $_pivot =& $scope->properties['pivot'];
$Upivot = FALSE;
$_pivot = JS::$undefined;
$x628 = clone JS::$arrayTemplate;
$x628->properties['length'] = 0;
$x628->attributes['length'] = JS::WRITABLE;
$scope->properties['smaller'] = JS::$undefined; $_smaller =& $scope->properties['smaller'];
$Usmaller = FALSE;
$_smaller = $x628;
$x629 = clone JS::$arrayTemplate;
$x629->properties['length'] = 0;
$x629->attributes['length'] = JS::WRITABLE;
$scope->properties['larger'] = JS::$undefined; $_larger =& $scope->properties['larger'];
$Ularger = FALSE;
$_larger = $x629;
unset($x630, $W630, $S630, $U630);
$x631 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString(0, $global), 201, 14, '<image>/04_array.js');
$x630 =& $x631[0]; list(,$W630,$S630,$U630) = $x631;
if ($Upivot) {$global->properties['pivot'] = $_pivot; $_pivot =& $global->properties['pivot']; }
$_pivot = $x630;
for ($x632 = 0;; ++$x632) {
if ($x632 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x633, $W633, $S633, $U633);
$x634 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 203, 26, '<image>/04_array.js');
$x633 =& $x634[0]; list(,$W633,$S633,$U633) = $x634;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x633;
}
if ($x632 !== 0) {
$x635 = ++$_i;
}
$x636 = JS::toPrimitive($_i, $global);
$x637 = JS::toPrimitive($_l, $global);
$x638 = (is_string($x636) && is_string($x637) ? strcmp($x636, $x637) < 0 : (!is_nan($x639 = JS::toNumber($x636, $global)) && !is_nan($x640 = JS::toNumber($x637, $global)) && $x639 < $x640));
if (!JS::toBoolean($x638, $global)) { break; }

unset($x644, $W644, $S644, $U644);
$x645 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 204, 21, '<image>/04_array.js');
$x644 =& $x645[0]; list(,$W644,$S644,$U644) = $x645;
if (!(is_object($_compareFn) && isset($_compareFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x648 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 204, 16, '<image>/04_array.js');
$_TypeError =& $x648[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x648;
$x649 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x650 = $x649($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x650->class) && $x650->class === 'Error' && !isset($x650->properties['file']) && !isset($x650->properties['line']) && !isset($x650->properties['column'])) {$x650->properties['file'] = '<image>/04_array.js';$x650->properties['line'] = 204;$x650->properties['column'] = 16;$x650->attributes['file'] = $x650->attributes['line'] = $x650->attributes['column'] = 0; }
throw new JSException($x650, 204, 16, '<image>/04_array.js');
}
$x646 = $_compareFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x647 = $x646($global, $global, $_compareFn, array($x644, $_pivot), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x641 = JS::toPrimitive($x647, $global);
$x642 = JS::toPrimitive(0, $global);
$x643 = (is_string($x641) && is_string($x642) ? strcmp($x641, $x642) < 0 : (!is_nan($x651 = JS::toNumber($x641, $global)) && !is_nan($x652 = JS::toNumber($x642, $global)) && $x651 < $x652));
if (JS::toBoolean($x643, $global)) {
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x654 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 205, 16, '<image>/04_array.js');
$_TypeError =& $x654[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x654;
$x655 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x656 = $x655($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x656->class) && $x656->class === 'Error' && !isset($x656->properties['file']) && !isset($x656->properties['line']) && !isset($x656->properties['column'])) {$x656->properties['file'] = '<image>/04_array.js';$x656->properties['line'] = 205;$x656->properties['column'] = 16;$x656->attributes['file'] = $x656->attributes['line'] = $x656->attributes['column'] = 0; }
throw new JSException($x656, 205, 16, '<image>/04_array.js');
}
$x653 = JS::toObject($_smaller, $global);
unset($x657, $W657, $S657, $U657);
$x658 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x653, JS::toString('push', $global), 205, 16, '<image>/04_array.js');
$x657 =& $x658[0]; list(,$W657,$S657,$U657) = $x658;
unset($x659, $W659, $S659, $U659);
$x660 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 205, 21, '<image>/04_array.js');
$x659 =& $x660[0]; list(,$W659,$S659,$U659) = $x660;
if (!(is_object($x657) && isset($x657->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x663 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 205, 16, '<image>/04_array.js');
$_TypeError =& $x663[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x663;
$x664 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x665 = $x664($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x665->class) && $x665->class === 'Error' && !isset($x665->properties['file']) && !isset($x665->properties['line']) && !isset($x665->properties['column'])) {$x665->properties['file'] = '<image>/04_array.js';$x665->properties['line'] = 205;$x665->properties['column'] = 16;$x665->attributes['file'] = $x665->attributes['line'] = $x665->attributes['column'] = 0; }
throw new JSException($x665, 205, 16, '<image>/04_array.js');
}
$x661 = $x657->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x662 = $x661($global, $x653, $x657, array($x659), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
else {
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x667 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 207, 15, '<image>/04_array.js');
$_TypeError =& $x667[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x667;
$x668 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x669 = $x668($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x669->class) && $x669->class === 'Error' && !isset($x669->properties['file']) && !isset($x669->properties['line']) && !isset($x669->properties['column'])) {$x669->properties['file'] = '<image>/04_array.js';$x669->properties['line'] = 207;$x669->properties['column'] = 15;$x669->attributes['file'] = $x669->attributes['line'] = $x669->attributes['column'] = 0; }
throw new JSException($x669, 207, 15, '<image>/04_array.js');
}
$x666 = JS::toObject($_larger, $global);
unset($x670, $W670, $S670, $U670);
$x671 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x666, JS::toString('push', $global), 207, 15, '<image>/04_array.js');
$x670 =& $x671[0]; list(,$W670,$S670,$U670) = $x671;
unset($x672, $W672, $S672, $U672);
$x673 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 207, 20, '<image>/04_array.js');
$x672 =& $x673[0]; list(,$W672,$S672,$U672) = $x673;
if (!(is_object($x670) && isset($x670->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x676 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 207, 15, '<image>/04_array.js');
$_TypeError =& $x676[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x676;
$x677 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x678 = $x677($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x678->class) && $x678->class === 'Error' && !isset($x678->properties['file']) && !isset($x678->properties['line']) && !isset($x678->properties['column'])) {$x678->properties['file'] = '<image>/04_array.js';$x678->properties['line'] = 207;$x678->properties['column'] = 15;$x678->attributes['file'] = $x678->attributes['line'] = $x678->attributes['column'] = 0; }
throw new JSException($x678, 207, 15, '<image>/04_array.js');
}
$x674 = $x670->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x675 = $x674($global, $x666, $x670, array($x672), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x680 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 27, '<image>/04_array.js');
$_TypeError =& $x680[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x680;
$x681 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x682 = $x681($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x682->class) && $x682->class === 'Error' && !isset($x682->properties['file']) && !isset($x682->properties['line']) && !isset($x682->properties['column'])) {$x682->properties['file'] = '<image>/04_array.js';$x682->properties['line'] = 211;$x682->properties['column'] = 27;$x682->attributes['file'] = $x682->attributes['line'] = $x682->attributes['column'] = 0; }
throw new JSException($x682, 211, 27, '<image>/04_array.js');
}
$x679 = JS::toObject($_smaller, $global);
unset($x683, $W683, $S683, $U683);
$x684 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x679, JS::toString('sort', $global), 211, 27, '<image>/04_array.js');
$x683 =& $x684[0]; list(,$W683,$S683,$U683) = $x684;
if (!(is_object($x683) && isset($x683->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x687 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 27, '<image>/04_array.js');
$_TypeError =& $x687[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x687;
$x688 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x689 = $x688($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x689->class) && $x689->class === 'Error' && !isset($x689->properties['file']) && !isset($x689->properties['line']) && !isset($x689->properties['column'])) {$x689->properties['file'] = '<image>/04_array.js';$x689->properties['line'] = 211;$x689->properties['column'] = 27;$x689->attributes['file'] = $x689->attributes['line'] = $x689->attributes['column'] = 0; }
throw new JSException($x689, 211, 27, '<image>/04_array.js');
}
$x685 = $x683->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x686 = $x685($global, $x679, $x683, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x686 === JS::$undefined || $x686 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x691 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 45, '<image>/04_array.js');
$_TypeError =& $x691[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x691;
$x692 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x693 = $x692($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x693->class) && $x693->class === 'Error' && !isset($x693->properties['file']) && !isset($x693->properties['line']) && !isset($x693->properties['column'])) {$x693->properties['file'] = '<image>/04_array.js';$x693->properties['line'] = 211;$x693->properties['column'] = 45;$x693->attributes['file'] = $x693->attributes['line'] = $x693->attributes['column'] = 0; }
throw new JSException($x693, 211, 45, '<image>/04_array.js');
}
$x690 = JS::toObject($x686, $global);
unset($x694, $W694, $S694, $U694);
$x695 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x690, JS::toString('concat', $global), 211, 45, '<image>/04_array.js');
$x694 =& $x695[0]; list(,$W694,$S694,$U694) = $x695;
$x696 = clone JS::$arrayTemplate;
$x696->properties['length'] = 1;
$x696->attributes['length'] = JS::WRITABLE;
$x696->properties[0] = $_pivot;
$x696->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x698 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 66, '<image>/04_array.js');
$_TypeError =& $x698[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x698;
$x699 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x700 = $x699($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x700->class) && $x700->class === 'Error' && !isset($x700->properties['file']) && !isset($x700->properties['line']) && !isset($x700->properties['column'])) {$x700->properties['file'] = '<image>/04_array.js';$x700->properties['line'] = 211;$x700->properties['column'] = 66;$x700->attributes['file'] = $x700->attributes['line'] = $x700->attributes['column'] = 0; }
throw new JSException($x700, 211, 66, '<image>/04_array.js');
}
$x697 = JS::toObject($_larger, $global);
unset($x701, $W701, $S701, $U701);
$x702 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x697, JS::toString('sort', $global), 211, 66, '<image>/04_array.js');
$x701 =& $x702[0]; list(,$W701,$S701,$U701) = $x702;
if (!(is_object($x701) && isset($x701->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x705 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 66, '<image>/04_array.js');
$_TypeError =& $x705[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x705;
$x706 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x707 = $x706($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x707->class) && $x707->class === 'Error' && !isset($x707->properties['file']) && !isset($x707->properties['line']) && !isset($x707->properties['column'])) {$x707->properties['file'] = '<image>/04_array.js';$x707->properties['line'] = 211;$x707->properties['column'] = 66;$x707->attributes['file'] = $x707->attributes['line'] = $x707->attributes['column'] = 0; }
throw new JSException($x707, 211, 66, '<image>/04_array.js');
}
$x703 = $x701->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x704 = $x703($global, $x697, $x701, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x694) && isset($x694->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x710 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 45, '<image>/04_array.js');
$_TypeError =& $x710[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x710;
$x711 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x712 = $x711($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x712->class) && $x712->class === 'Error' && !isset($x712->properties['file']) && !isset($x712->properties['line']) && !isset($x712->properties['column'])) {$x712->properties['file'] = '<image>/04_array.js';$x712->properties['line'] = 211;$x712->properties['column'] = 45;$x712->attributes['file'] = $x712->attributes['line'] = $x712->attributes['column'] = 0; }
throw new JSException($x712, 211, 45, '<image>/04_array.js');
}
$x708 = $x694->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x709 = $x708($global, $x690, $x694, array($x696, $x704), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['sorted'] = JS::$undefined; $_sorted =& $scope->properties['sorted'];
$Usorted = FALSE;
$_sorted = $x709;
for ($x713 = 0;; ++$x713) {
if ($x713 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x714, $W714, $S714, $U714);
$x715 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, JS::toString('length', $global), 213, 28, '<image>/04_array.js');
$x714 =& $x715[0]; list(,$W714,$S714,$U714) = $x715;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x714;
}
if ($x713 !== 0) {
$x716 = ++$_i;
}
$x717 = JS::toPrimitive($_i, $global);
$x718 = JS::toPrimitive($_l, $global);
$x719 = (is_string($x717) && is_string($x718) ? strcmp($x717, $x718) < 0 : (!is_nan($x720 = JS::toNumber($x717, $global)) && !is_nan($x721 = JS::toNumber($x718, $global)) && $x720 < $x721));
if (!JS::toBoolean($x719, $global)) { break; }

unset($x722, $W722, $S722, $U722);
$x723 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, JS::toString($_i, $global), 214, 19, '<image>/04_array.js');
$x722 =& $x723[0]; list(,$W722,$S722,$U722) = $x723;
$x724 = JS::toString($_i, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x725 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 214, 11, '<image>/04_array.js');
$_TypeError =& $x725[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x725;
$x726 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x727 = $x726($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x727->class) && $x727->class === 'Error' && !isset($x727->properties['file']) && !isset($x727->properties['line']) && !isset($x727->properties['column'])) {$x727->properties['file'] = '<image>/04_array.js';$x727->properties['line'] = 214;$x727->properties['column'] = 11;$x727->attributes['file'] = $x727->attributes['line'] = $x727->attributes['column'] = 0; }
throw new JSException($x727, 214, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x728, $W728, $S728, $U728);
$x729 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x724, $global), 214, 11, '<image>/04_array.js');
$x728 =& $x729[0]; list(,$W728,$S728,$U728) = $x729;
if ($U728 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x724] = $x728; $x728 =& $leThis->properties[$x724]; $leThis->attributes[$x724] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U728 = FALSE; $W728 = TRUE; }
if (isset($S728)) {
$x731 = $S728->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x732 = $x731($global, $leThis, $S728, array($x722), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x730 = $x732;
} else {
if (!$U728) {$x730 = $x722;if ($W728) { $x728 = $x722; }  }
else { $x730 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x580=&$scope->properties[\'arguments\'];$x580->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x580->properties[$i]=$args[$i];$x580->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'compareFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_compareFn=&$scope->properties[\'compareFn\'];$UcompareFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$x581=$_compareFn;if(!JS::toBoolean($x581,$global)){$x620=clone JS::$functionTemplate;$x620->call=\'_339fc8fcf8563d9777a12bd15b91ae1b_15\';$x620->parameters=array(0=>\'a\',1=>\'b\',);$x620->scope=$scope;$x620->properties[\'prototype\']=clone JS::$objectTemplate;$x620->attributes[\'prototype\']=JS::WRITABLE;$x620->properties[\'prototype\']->properties[\'constructor\']=$x620;$x620->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x620->properties[\'length\']=2;$x620->attributes[\'length\']=0;$x581=$x620;}if($UcompareFn){$global->properties[\'compareFn\']=$_compareFn;$_compareFn=&$global->properties[\'compareFn\'];}$_compareFn=$x581;unset($x624,$W624,$S624,$U624);$x625=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),195,10,\'<image>/04_array.js\');$x624=&$x625[0];list(,$W624,$S624,$U624)=$x625;$x621=JS::toPrimitive($x624,$global);$x622=JS::toPrimitive(2,$global);$x623=(is_string($x621)&&is_string($x622)?strcmp($x621,$x622)<0:(!is_nan($x626=JS::toNumber($x621,$global))&&!is_nan($x627=JS::toNumber($x622,$global))&&$x626<$x627));if(JS::toBoolean($x623,$global)){return$leThis;}$scope->properties[\'pivot\']=JS::$undefined;$_pivot=&$scope->properties[\'pivot\'];$Upivot=FALSE;$_pivot=JS::$undefined;$x628=clone JS::$arrayTemplate;$x628->properties[\'length\']=0;$x628->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'smaller\']=JS::$undefined;$_smaller=&$scope->properties[\'smaller\'];$Usmaller=FALSE;$_smaller=$x628;$x629=clone JS::$arrayTemplate;$x629->properties[\'length\']=0;$x629->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'larger\']=JS::$undefined;$_larger=&$scope->properties[\'larger\'];$Ularger=FALSE;$_larger=$x629;unset($x630,$W630,$S630,$U630);$x631=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(0,$global),201,14,\'<image>/04_array.js\');$x630=&$x631[0];list(,$W630,$S630,$U630)=$x631;if($Upivot){$global->properties[\'pivot\']=$_pivot;$_pivot=&$global->properties[\'pivot\'];}$_pivot=$x630;for($x632=0;;++$x632){if($x632===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x633,$W633,$S633,$U633);$x634=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),203,26,\'<image>/04_array.js\');$x633=&$x634[0];list(,$W633,$S633,$U633)=$x634;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x633;}if($x632!==0){$x635=++$_i;}$x636=JS::toPrimitive($_i,$global);$x637=JS::toPrimitive($_l,$global);$x638=(is_string($x636)&&is_string($x637)?strcmp($x636,$x637)<0:(!is_nan($x639=JS::toNumber($x636,$global))&&!is_nan($x640=JS::toNumber($x637,$global))&&$x639<$x640));if(!JS::toBoolean($x638,$global)){break;}unset($x644,$W644,$S644,$U644);$x645=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),204,21,\'<image>/04_array.js\');$x644=&$x645[0];list(,$W644,$S644,$U644)=$x645;if(!(is_object($_compareFn)&&isset($_compareFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x648=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),204,16,\'<image>/04_array.js\');$_TypeError=&$x648[0];list(,$WTypeError,$STypeError,$UTypeError)=$x648;$x649=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x650=$x649($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x650->class)&&$x650->class===\'Error\'&&!isset($x650->properties[\'file\'])&&!isset($x650->properties[\'line\'])&&!isset($x650->properties[\'column\'])){$x650->properties[\'file\']=\'<image>/04_array.js\';$x650->properties[\'line\']=204;$x650->properties[\'column\']=16;$x650->attributes[\'file\']=$x650->attributes[\'line\']=$x650->attributes[\'column\']=0;}throw new JSException($x650,204,16,\'<image>/04_array.js\');}$x646=$_compareFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x647=$x646($global,$global,$_compareFn,array($x644,$_pivot),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x641=JS::toPrimitive($x647,$global);$x642=JS::toPrimitive(0,$global);$x643=(is_string($x641)&&is_string($x642)?strcmp($x641,$x642)<0:(!is_nan($x651=JS::toNumber($x641,$global))&&!is_nan($x652=JS::toNumber($x642,$global))&&$x651<$x652));if(JS::toBoolean($x643,$global)){if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x654=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,16,\'<image>/04_array.js\');$_TypeError=&$x654[0];list(,$WTypeError,$STypeError,$UTypeError)=$x654;$x655=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x656=$x655($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x656->class)&&$x656->class===\'Error\'&&!isset($x656->properties[\'file\'])&&!isset($x656->properties[\'line\'])&&!isset($x656->properties[\'column\'])){$x656->properties[\'file\']=\'<image>/04_array.js\';$x656->properties[\'line\']=205;$x656->properties[\'column\']=16;$x656->attributes[\'file\']=$x656->attributes[\'line\']=$x656->attributes[\'column\']=0;}throw new JSException($x656,205,16,\'<image>/04_array.js\');}$x653=JS::toObject($_smaller,$global);unset($x657,$W657,$S657,$U657);$x658=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x653,JS::toString(\'push\',$global),205,16,\'<image>/04_array.js\');$x657=&$x658[0];list(,$W657,$S657,$U657)=$x658;unset($x659,$W659,$S659,$U659);$x660=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),205,21,\'<image>/04_array.js\');$x659=&$x660[0];list(,$W659,$S659,$U659)=$x660;if(!(is_object($x657)&&isset($x657->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x663=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,16,\'<image>/04_array.js\');$_TypeError=&$x663[0];list(,$WTypeError,$STypeError,$UTypeError)=$x663;$x664=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x665=$x664($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x665->class)&&$x665->class===\'Error\'&&!isset($x665->properties[\'file\'])&&!isset($x665->properties[\'line\'])&&!isset($x665->properties[\'column\'])){$x665->properties[\'file\']=\'<image>/04_array.js\';$x665->properties[\'line\']=205;$x665->properties[\'column\']=16;$x665->attributes[\'file\']=$x665->attributes[\'line\']=$x665->attributes[\'column\']=0;}throw new JSException($x665,205,16,\'<image>/04_array.js\');}$x661=$x657->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x662=$x661($global,$x653,$x657,array($x659),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x667=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),207,15,\'<image>/04_array.js\');$_TypeError=&$x667[0];list(,$WTypeError,$STypeError,$UTypeError)=$x667;$x668=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x669=$x668($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x669->class)&&$x669->class===\'Error\'&&!isset($x669->properties[\'file\'])&&!isset($x669->properties[\'line\'])&&!isset($x669->properties[\'column\'])){$x669->properties[\'file\']=\'<image>/04_array.js\';$x669->properties[\'line\']=207;$x669->properties[\'column\']=15;$x669->attributes[\'file\']=$x669->attributes[\'line\']=$x669->attributes[\'column\']=0;}throw new JSException($x669,207,15,\'<image>/04_array.js\');}$x666=JS::toObject($_larger,$global);unset($x670,$W670,$S670,$U670);$x671=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x666,JS::toString(\'push\',$global),207,15,\'<image>/04_array.js\');$x670=&$x671[0];list(,$W670,$S670,$U670)=$x671;unset($x672,$W672,$S672,$U672);$x673=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),207,20,\'<image>/04_array.js\');$x672=&$x673[0];list(,$W672,$S672,$U672)=$x673;if(!(is_object($x670)&&isset($x670->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x676=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),207,15,\'<image>/04_array.js\');$_TypeError=&$x676[0];list(,$WTypeError,$STypeError,$UTypeError)=$x676;$x677=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x678=$x677($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x678->class)&&$x678->class===\'Error\'&&!isset($x678->properties[\'file\'])&&!isset($x678->properties[\'line\'])&&!isset($x678->properties[\'column\'])){$x678->properties[\'file\']=\'<image>/04_array.js\';$x678->properties[\'line\']=207;$x678->properties[\'column\']=15;$x678->attributes[\'file\']=$x678->attributes[\'line\']=$x678->attributes[\'column\']=0;}throw new JSException($x678,207,15,\'<image>/04_array.js\');}$x674=$x670->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x675=$x674($global,$x666,$x670,array($x672),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x680=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,27,\'<image>/04_array.js\');$_TypeError=&$x680[0];list(,$WTypeError,$STypeError,$UTypeError)=$x680;$x681=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x682=$x681($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x682->class)&&$x682->class===\'Error\'&&!isset($x682->properties[\'file\'])&&!isset($x682->properties[\'line\'])&&!isset($x682->properties[\'column\'])){$x682->properties[\'file\']=\'<image>/04_array.js\';$x682->properties[\'line\']=211;$x682->properties[\'column\']=27;$x682->attributes[\'file\']=$x682->attributes[\'line\']=$x682->attributes[\'column\']=0;}throw new JSException($x682,211,27,\'<image>/04_array.js\');}$x679=JS::toObject($_smaller,$global);unset($x683,$W683,$S683,$U683);$x684=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x679,JS::toString(\'sort\',$global),211,27,\'<image>/04_array.js\');$x683=&$x684[0];list(,$W683,$S683,$U683)=$x684;if(!(is_object($x683)&&isset($x683->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x687=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,27,\'<image>/04_array.js\');$_TypeError=&$x687[0];list(,$WTypeError,$STypeError,$UTypeError)=$x687;$x688=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x689=$x688($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x689->class)&&$x689->class===\'Error\'&&!isset($x689->properties[\'file\'])&&!isset($x689->properties[\'line\'])&&!isset($x689->properties[\'column\'])){$x689->properties[\'file\']=\'<image>/04_array.js\';$x689->properties[\'line\']=211;$x689->properties[\'column\']=27;$x689->attributes[\'file\']=$x689->attributes[\'line\']=$x689->attributes[\'column\']=0;}throw new JSException($x689,211,27,\'<image>/04_array.js\');}$x685=$x683->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x686=$x685($global,$x679,$x683,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x686===JS::$undefined||$x686===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x691=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,45,\'<image>/04_array.js\');$_TypeError=&$x691[0];list(,$WTypeError,$STypeError,$UTypeError)=$x691;$x692=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x693=$x692($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x693->class)&&$x693->class===\'Error\'&&!isset($x693->properties[\'file\'])&&!isset($x693->properties[\'line\'])&&!isset($x693->properties[\'column\'])){$x693->properties[\'file\']=\'<image>/04_array.js\';$x693->properties[\'line\']=211;$x693->properties[\'column\']=45;$x693->attributes[\'file\']=$x693->attributes[\'line\']=$x693->attributes[\'column\']=0;}throw new JSException($x693,211,45,\'<image>/04_array.js\');}$x690=JS::toObject($x686,$global);unset($x694,$W694,$S694,$U694);$x695=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x690,JS::toString(\'concat\',$global),211,45,\'<image>/04_array.js\');$x694=&$x695[0];list(,$W694,$S694,$U694)=$x695;$x696=clone JS::$arrayTemplate;$x696->properties[\'length\']=1;$x696->attributes[\'length\']=JS::WRITABLE;$x696->properties[0]=$_pivot;$x696->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x698=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,66,\'<image>/04_array.js\');$_TypeError=&$x698[0];list(,$WTypeError,$STypeError,$UTypeError)=$x698;$x699=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x700=$x699($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x700->class)&&$x700->class===\'Error\'&&!isset($x700->properties[\'file\'])&&!isset($x700->properties[\'line\'])&&!isset($x700->properties[\'column\'])){$x700->properties[\'file\']=\'<image>/04_array.js\';$x700->properties[\'line\']=211;$x700->properties[\'column\']=66;$x700->attributes[\'file\']=$x700->attributes[\'line\']=$x700->attributes[\'column\']=0;}throw new JSException($x700,211,66,\'<image>/04_array.js\');}$x697=JS::toObject($_larger,$global);unset($x701,$W701,$S701,$U701);$x702=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x697,JS::toString(\'sort\',$global),211,66,\'<image>/04_array.js\');$x701=&$x702[0];list(,$W701,$S701,$U701)=$x702;if(!(is_object($x701)&&isset($x701->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x705=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,66,\'<image>/04_array.js\');$_TypeError=&$x705[0];list(,$WTypeError,$STypeError,$UTypeError)=$x705;$x706=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x707=$x706($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x707->class)&&$x707->class===\'Error\'&&!isset($x707->properties[\'file\'])&&!isset($x707->properties[\'line\'])&&!isset($x707->properties[\'column\'])){$x707->properties[\'file\']=\'<image>/04_array.js\';$x707->properties[\'line\']=211;$x707->properties[\'column\']=66;$x707->attributes[\'file\']=$x707->attributes[\'line\']=$x707->attributes[\'column\']=0;}throw new JSException($x707,211,66,\'<image>/04_array.js\');}$x703=$x701->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x704=$x703($global,$x697,$x701,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x694)&&isset($x694->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x710=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,45,\'<image>/04_array.js\');$_TypeError=&$x710[0];list(,$WTypeError,$STypeError,$UTypeError)=$x710;$x711=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x712=$x711($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x712->class)&&$x712->class===\'Error\'&&!isset($x712->properties[\'file\'])&&!isset($x712->properties[\'line\'])&&!isset($x712->properties[\'column\'])){$x712->properties[\'file\']=\'<image>/04_array.js\';$x712->properties[\'line\']=211;$x712->properties[\'column\']=45;$x712->attributes[\'file\']=$x712->attributes[\'line\']=$x712->attributes[\'column\']=0;}throw new JSException($x712,211,45,\'<image>/04_array.js\');}$x708=$x694->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x709=$x708($global,$x690,$x694,array($x696,$x704),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'sorted\']=JS::$undefined;$_sorted=&$scope->properties[\'sorted\'];$Usorted=FALSE;$_sorted=$x709;for($x713=0;;++$x713){if($x713===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x714,$W714,$S714,$U714);$x715=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,JS::toString(\'length\',$global),213,28,\'<image>/04_array.js\');$x714=&$x715[0];list(,$W714,$S714,$U714)=$x715;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x714;}if($x713!==0){$x716=++$_i;}$x717=JS::toPrimitive($_i,$global);$x718=JS::toPrimitive($_l,$global);$x719=(is_string($x717)&&is_string($x718)?strcmp($x717,$x718)<0:(!is_nan($x720=JS::toNumber($x717,$global))&&!is_nan($x721=JS::toNumber($x718,$global))&&$x720<$x721));if(!JS::toBoolean($x719,$global)){break;}unset($x722,$W722,$S722,$U722);$x723=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,JS::toString($_i,$global),214,19,\'<image>/04_array.js\');$x722=&$x723[0];list(,$W722,$S722,$U722)=$x723;$x724=JS::toString($_i,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x725=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),214,11,\'<image>/04_array.js\');$_TypeError=&$x725[0];list(,$WTypeError,$STypeError,$UTypeError)=$x725;$x726=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x727=$x726($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x727->class)&&$x727->class===\'Error\'&&!isset($x727->properties[\'file\'])&&!isset($x727->properties[\'line\'])&&!isset($x727->properties[\'column\'])){$x727->properties[\'file\']=\'<image>/04_array.js\';$x727->properties[\'line\']=214;$x727->properties[\'column\']=11;$x727->attributes[\'file\']=$x727->attributes[\'line\']=$x727->attributes[\'column\']=0;}throw new JSException($x727,214,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x728,$W728,$S728,$U728);$x729=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x724,$global),214,11,\'<image>/04_array.js\');$x728=&$x729[0];list(,$W728,$S728,$U728)=$x729;if($U728&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x724]=$x728;$x728=&$leThis->properties[$x724];$leThis->attributes[$x724]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U728=FALSE;$W728=TRUE;}if(isset($S728)){$x731=$S728->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x732=$x731($global,$leThis,$S728,array($x722),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x730=$x732;}else{if(!$U728){$x730=$x722;if($W728){$x728=$x722;}}else{$x730=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x746 =& $scope->properties['arguments'];
$x746->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x746->properties[$i] = $args[$i];
$x746->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x747 = clone JS::$arrayTemplate;
$x747->properties['length'] = 0;
$x747->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x747;
$A = array();
for ($x748 = 0;; ++$x748) {
if ($x748 === 0) {
$x749 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x749;
unset($x750, $W750, $S750, $U750);
$x751 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 225, 22, '<image>/04_array.js');
$x750 =& $x751[0]; list(,$W750,$S750,$U750) = $x751;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x750;
}
if ($x748 !== 0) {
$x752 = ++$_i;
}
$x753 = JS::toPrimitive($_i, $global);
$x754 = JS::toPrimitive($_l, $global);
$x755 = (is_string($x753) && is_string($x754) ? strcmp($x753, $x754) < 0 : (!is_nan($x756 = JS::toNumber($x753, $global)) && !is_nan($x757 = JS::toNumber($x754, $global)) && $x756 < $x757));
if (!JS::toBoolean($x755, $global)) { break; }

unset($x758, $W758, $S758, $U758);
$x759 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 226, 14, '<image>/04_array.js');
$x758 =& $x759[0]; list(,$W758,$S758,$U758) = $x759;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x758;
$A[] =$_item;
if (!array_key_exists($_i, $leThis->attributes)) { unset($leThis->properties[$_i]); $x760 = TRUE; }
else if ($leThis->attributes[$_i] & JS::CONFIGURABLE) { unset($leThis->properties[$_i], $leThis->attributes[$_i], $leThis->getters[$_i], $leThis->setters[$_i]); $x760 = TRUE; }
else { $x760 = FALSE; };;
};
$x761 = (((gettype($_deleteCount) === gettype(JS::$undefined) && $_deleteCount === JS::$undefined))|| (((is_float($_deleteCount) || is_int($_deleteCount)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_deleteCount == JS::$undefined));
if (JS::toBoolean($x761, $global)) {

$C = array_splice($A,$_start);;
}
else {
$B = array();
for ($x762 = 0;; ++$x762) {
if ($x762 === 0) {
$x763 = 2;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x763;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x764 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 236, 19, '<image>/04_array.js');
$_arguments =& $x764[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x764;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x765 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 236, 19, '<image>/04_array.js');
$_ReferenceError =& $x765[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x765;
$x766 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 236, 19);
$x767 = $x766($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x767->class) && $x767->class === 'Error' && !isset($x767->properties['file']) && !isset($x767->properties['line']) && !isset($x767->properties['column'])) {$x767->properties['file'] = '<image>/04_array.js';$x767->properties['line'] = 236;$x767->properties['column'] = 19;$x767->attributes['file'] = $x767->attributes['line'] = $x767->attributes['column'] = 0; }
throw new JSException($x767, 236, 19, '<image>/04_array.js');
}
unset($x768, $W768, $S768, $U768);
$x769 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 236, 28, '<image>/04_array.js');
$x768 =& $x769[0]; list(,$W768,$S768,$U768) = $x769;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x768;
}
if ($x762 !== 0) {
$x770 = ++$_i;
}
$x771 = JS::toPrimitive($_i, $global);
$x772 = JS::toPrimitive($_l, $global);
$x773 = (is_string($x771) && is_string($x772) ? strcmp($x771, $x772) < 0 : (!is_nan($x774 = JS::toNumber($x771, $global)) && !is_nan($x775 = JS::toNumber($x772, $global)) && $x774 < $x775));
if (!JS::toBoolean($x773, $global)) { break; }

unset($x776, $W776, $S776, $U776);
$x777 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 237, 20, '<image>/04_array.js');
$x776 =& $x777[0]; list(,$W776,$S776,$U776) = $x777;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x776;
$B[] =$_item;;
};
$C = array_splice($A,$_start,$_deleteCount, $B);;
};
$x778 = 0;
$x779 = JS::toString('length', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x780 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 244, 14, '<image>/04_array.js');
$_TypeError =& $x780[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x780;
$x781 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x782 = $x781($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x782->class) && $x782->class === 'Error' && !isset($x782->properties['file']) && !isset($x782->properties['line']) && !isset($x782->properties['column'])) {$x782->properties['file'] = '<image>/04_array.js';$x782->properties['line'] = 244;$x782->properties['column'] = 14;$x782->attributes['file'] = $x782->attributes['line'] = $x782->attributes['column'] = 0; }
throw new JSException($x782, 244, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x783, $W783, $S783, $U783);
$x784 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x779, $global), 244, 14, '<image>/04_array.js');
$x783 =& $x784[0]; list(,$W783,$S783,$U783) = $x784;
if ($U783 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x779] = $x783; $x783 =& $leThis->properties[$x779]; $leThis->attributes[$x779] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U783 = FALSE; $W783 = TRUE; }
if (isset($S783)) {
$x786 = $S783->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x787 = $x786($global, $leThis, $S783, array($x778), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x785 = $x787;
} else {
if (!$U783) {$x785 = $x778;if ($W783) { $x783 = $x778; }  }
else { $x785 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; };
foreach ($A as $V) {;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x789 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 247, 12, '<image>/04_array.js');
$_TypeError =& $x789[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x789;
$x790 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x791 = $x790($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x791->class) && $x791->class === 'Error' && !isset($x791->properties['file']) && !isset($x791->properties['line']) && !isset($x791->properties['column'])) {$x791->properties['file'] = '<image>/04_array.js';$x791->properties['line'] = 247;$x791->properties['column'] = 12;$x791->attributes['file'] = $x791->attributes['line'] = $x791->attributes['column'] = 0; }
throw new JSException($x791, 247, 12, '<image>/04_array.js');
}
$x788 = JS::toObject($leThis, $global);
unset($x792, $W792, $S792, $U792);
$x793 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x788, JS::toString('push', $global), 247, 12, '<image>/04_array.js');
$x792 =& $x793[0]; list(,$W792,$S792,$U792) = $x793;
if (!(is_object($x792) && isset($x792->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x796 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 247, 12, '<image>/04_array.js');
$_TypeError =& $x796[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x796;
$x797 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x798 = $x797($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x798->class) && $x798->class === 'Error' && !isset($x798->properties['file']) && !isset($x798->properties['line']) && !isset($x798->properties['column'])) {$x798->properties['file'] = '<image>/04_array.js';$x798->properties['line'] = 247;$x798->properties['column'] = 12;$x798->attributes['file'] = $x798->attributes['line'] = $x798->attributes['column'] = 0; }
throw new JSException($x798, 247, 12, '<image>/04_array.js');
}
$x794 = $x792->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x795 = $x794($global, $x788, $x792, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
foreach ($C as $I => $V) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x800 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 251, 19, '<image>/04_array.js');
$_TypeError =& $x800[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x800;
$x801 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x802 = $x801($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x802->class) && $x802->class === 'Error' && !isset($x802->properties['file']) && !isset($x802->properties['line']) && !isset($x802->properties['column'])) {$x802->properties['file'] = '<image>/04_array.js';$x802->properties['line'] = 251;$x802->properties['column'] = 19;$x802->attributes['file'] = $x802->attributes['line'] = $x802->attributes['column'] = 0; }
throw new JSException($x802, 251, 19, '<image>/04_array.js');
}
$x799 = JS::toObject($_returnArray, $global);
unset($x803, $W803, $S803, $U803);
$x804 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x799, JS::toString('push', $global), 251, 19, '<image>/04_array.js');
$x803 =& $x804[0]; list(,$W803,$S803,$U803) = $x804;
if (!(is_object($x803) && isset($x803->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x807 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 251, 19, '<image>/04_array.js');
$_TypeError =& $x807[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x807;
$x808 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x809 = $x808($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x809->class) && $x809->class === 'Error' && !isset($x809->properties['file']) && !isset($x809->properties['line']) && !isset($x809->properties['column'])) {$x809->properties['file'] = '<image>/04_array.js';$x809->properties['line'] = 251;$x809->properties['column'] = 19;$x809->attributes['file'] = $x809->attributes['line'] = $x809->attributes['column'] = 0; }
throw new JSException($x809, 251, 19, '<image>/04_array.js');
}
$x805 = $x803->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x806 = $x805($global, $x799, $x803, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x746=&$scope->properties[\'arguments\'];$x746->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x746->properties[$i]=$args[$i];$x746->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'deleteCount\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_deleteCount=&$scope->properties[\'deleteCount\'];$UdeleteCount=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=JS::$undefined;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;$x747=clone JS::$arrayTemplate;$x747->properties[\'length\']=0;$x747->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x747;$A=array();for($x748=0;;++$x748){if($x748===0){$x749=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x749;unset($x750,$W750,$S750,$U750);$x751=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),225,22,\'<image>/04_array.js\');$x750=&$x751[0];list(,$W750,$S750,$U750)=$x751;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x750;}if($x748!==0){$x752=++$_i;}$x753=JS::toPrimitive($_i,$global);$x754=JS::toPrimitive($_l,$global);$x755=(is_string($x753)&&is_string($x754)?strcmp($x753,$x754)<0:(!is_nan($x756=JS::toNumber($x753,$global))&&!is_nan($x757=JS::toNumber($x754,$global))&&$x756<$x757));if(!JS::toBoolean($x755,$global)){break;}unset($x758,$W758,$S758,$U758);$x759=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),226,14,\'<image>/04_array.js\');$x758=&$x759[0];list(,$W758,$S758,$U758)=$x759;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x758;$A[]=$_item;if(!array_key_exists($_i,$leThis->attributes)){unset($leThis->properties[$_i]);$x760=TRUE;}else if($leThis->attributes[$_i]&JS::CONFIGURABLE){unset($leThis->properties[$_i],$leThis->attributes[$_i],$leThis->getters[$_i],$leThis->setters[$_i]);$x760=TRUE;}else{$x760=FALSE;}}$x761=(((gettype($_deleteCount)===gettype(JS::$undefined)&&$_deleteCount===JS::$undefined))||(((is_float($_deleteCount)||is_int($_deleteCount))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_deleteCount==JS::$undefined));if(JS::toBoolean($x761,$global)){$C=array_splice($A,$_start);}else{$B=array();for($x762=0;;++$x762){if($x762===0){$x763=2;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x763;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x764=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),236,19,\'<image>/04_array.js\');$_arguments=&$x764[0];list(,$Warguments,$Sarguments,$Uarguments)=$x764;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x765=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),236,19,\'<image>/04_array.js\');$_ReferenceError=&$x765[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x765;$x766=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',236,19);$x767=$x766($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x767->class)&&$x767->class===\'Error\'&&!isset($x767->properties[\'file\'])&&!isset($x767->properties[\'line\'])&&!isset($x767->properties[\'column\'])){$x767->properties[\'file\']=\'<image>/04_array.js\';$x767->properties[\'line\']=236;$x767->properties[\'column\']=19;$x767->attributes[\'file\']=$x767->attributes[\'line\']=$x767->attributes[\'column\']=0;}throw new JSException($x767,236,19,\'<image>/04_array.js\');}unset($x768,$W768,$S768,$U768);$x769=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),236,28,\'<image>/04_array.js\');$x768=&$x769[0];list(,$W768,$S768,$U768)=$x769;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x768;}if($x762!==0){$x770=++$_i;}$x771=JS::toPrimitive($_i,$global);$x772=JS::toPrimitive($_l,$global);$x773=(is_string($x771)&&is_string($x772)?strcmp($x771,$x772)<0:(!is_nan($x774=JS::toNumber($x771,$global))&&!is_nan($x775=JS::toNumber($x772,$global))&&$x774<$x775));if(!JS::toBoolean($x773,$global)){break;}unset($x776,$W776,$S776,$U776);$x777=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),237,20,\'<image>/04_array.js\');$x776=&$x777[0];list(,$W776,$S776,$U776)=$x777;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x776;$B[]=$_item;}$C=array_splice($A,$_start,$_deleteCount,$B);}$x778=0;$x779=JS::toString(\'length\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x780=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,14,\'<image>/04_array.js\');$_TypeError=&$x780[0];list(,$WTypeError,$STypeError,$UTypeError)=$x780;$x781=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x782=$x781($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x782->class)&&$x782->class===\'Error\'&&!isset($x782->properties[\'file\'])&&!isset($x782->properties[\'line\'])&&!isset($x782->properties[\'column\'])){$x782->properties[\'file\']=\'<image>/04_array.js\';$x782->properties[\'line\']=244;$x782->properties[\'column\']=14;$x782->attributes[\'file\']=$x782->attributes[\'line\']=$x782->attributes[\'column\']=0;}throw new JSException($x782,244,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x783,$W783,$S783,$U783);$x784=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x779,$global),244,14,\'<image>/04_array.js\');$x783=&$x784[0];list(,$W783,$S783,$U783)=$x784;if($U783&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x779]=$x783;$x783=&$leThis->properties[$x779];$leThis->attributes[$x779]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U783=FALSE;$W783=TRUE;}if(isset($S783)){$x786=$S783->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x787=$x786($global,$leThis,$S783,array($x778),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x785=$x787;}else{if(!$U783){$x785=$x778;if($W783){$x783=$x778;}}else{$x785=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}foreach($A as$V){;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x789=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),247,12,\'<image>/04_array.js\');$_TypeError=&$x789[0];list(,$WTypeError,$STypeError,$UTypeError)=$x789;$x790=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x791=$x790($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x791->class)&&$x791->class===\'Error\'&&!isset($x791->properties[\'file\'])&&!isset($x791->properties[\'line\'])&&!isset($x791->properties[\'column\'])){$x791->properties[\'file\']=\'<image>/04_array.js\';$x791->properties[\'line\']=247;$x791->properties[\'column\']=12;$x791->attributes[\'file\']=$x791->attributes[\'line\']=$x791->attributes[\'column\']=0;}throw new JSException($x791,247,12,\'<image>/04_array.js\');}$x788=JS::toObject($leThis,$global);unset($x792,$W792,$S792,$U792);$x793=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x788,JS::toString(\'push\',$global),247,12,\'<image>/04_array.js\');$x792=&$x793[0];list(,$W792,$S792,$U792)=$x793;if(!(is_object($x792)&&isset($x792->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x796=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),247,12,\'<image>/04_array.js\');$_TypeError=&$x796[0];list(,$WTypeError,$STypeError,$UTypeError)=$x796;$x797=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x798=$x797($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x798->class)&&$x798->class===\'Error\'&&!isset($x798->properties[\'file\'])&&!isset($x798->properties[\'line\'])&&!isset($x798->properties[\'column\'])){$x798->properties[\'file\']=\'<image>/04_array.js\';$x798->properties[\'line\']=247;$x798->properties[\'column\']=12;$x798->attributes[\'file\']=$x798->attributes[\'line\']=$x798->attributes[\'column\']=0;}throw new JSException($x798,247,12,\'<image>/04_array.js\');}$x794=$x792->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x795=$x794($global,$x788,$x792,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}foreach($C as$I=>$V){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x800=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),251,19,\'<image>/04_array.js\');$_TypeError=&$x800[0];list(,$WTypeError,$STypeError,$UTypeError)=$x800;$x801=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x802=$x801($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x802->class)&&$x802->class===\'Error\'&&!isset($x802->properties[\'file\'])&&!isset($x802->properties[\'line\'])&&!isset($x802->properties[\'column\'])){$x802->properties[\'file\']=\'<image>/04_array.js\';$x802->properties[\'line\']=251;$x802->properties[\'column\']=19;$x802->attributes[\'file\']=$x802->attributes[\'line\']=$x802->attributes[\'column\']=0;}throw new JSException($x802,251,19,\'<image>/04_array.js\');}$x799=JS::toObject($_returnArray,$global);unset($x803,$W803,$S803,$U803);$x804=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x799,JS::toString(\'push\',$global),251,19,\'<image>/04_array.js\');$x803=&$x804[0];list(,$W803,$S803,$U803)=$x804;if(!(is_object($x803)&&isset($x803->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x807=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),251,19,\'<image>/04_array.js\');$_TypeError=&$x807[0];list(,$WTypeError,$STypeError,$UTypeError)=$x807;$x808=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x809=$x808($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x809->class)&&$x809->class===\'Error\'&&!isset($x809->properties[\'file\'])&&!isset($x809->properties[\'line\'])&&!isset($x809->properties[\'column\'])){$x809->properties[\'file\']=\'<image>/04_array.js\';$x809->properties[\'line\']=251;$x809->properties[\'column\']=19;$x809->attributes[\'file\']=$x809->attributes[\'line\']=$x809->attributes[\'column\']=0;}throw new JSException($x809,251,19,\'<image>/04_array.js\');}$x805=$x803->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x806=$x805($global,$x799,$x803,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_17($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x824 = 0;; ++$x824) {
if ($x824 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x823 =& $scope->properties['arguments'];
$x823->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x823->properties[$i] = $args[$i];
$x823->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x825, $W825, $S825, $U825);
$x826 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 258, 19, '<image>/04_array.js');
$x825 =& $x826[0]; list(,$W825,$S825,$U825) = $x826;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x825, $global) - JS::toNumber(1, $global));
}
if ($x824 !== 0) {
$x827 = --$_i;
}
$x828 = JS::toPrimitive($_i, $global);
$x829 = JS::toPrimitive(0, $global);
$x830 = !(is_string($x828) && is_string($x829) ? strcmp($x828, $x829) < 0 : (!is_nan($x831 = JS::toNumber($x828, $global)) && !is_nan($x832 = JS::toNumber($x829, $global)) && $x831 < $x832));
if (!JS::toBoolean($x830, $global)) { break; }

unset($x833, $W833, $S833, $U833);
$x834 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 259, 36, '<image>/04_array.js');
$x833 =& $x834[0]; list(,$W833,$S833,$U833) = $x834;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x837 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 259, 12, '<image>/04_array.js');
$_arguments =& $x837[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x837;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x838 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 259, 12, '<image>/04_array.js');
$_ReferenceError =& $x838[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x838;
$x839 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 12);
$x840 = $x839($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x840->class) && $x840->class === 'Error' && !isset($x840->properties['file']) && !isset($x840->properties['line']) && !isset($x840->properties['column'])) {$x840->properties['file'] = '<image>/04_array.js';$x840->properties['line'] = 259;$x840->properties['column'] = 12;$x840->attributes['file'] = $x840->attributes['line'] = $x840->attributes['column'] = 0; }
throw new JSException($x840, 259, 12, '<image>/04_array.js');
}
unset($x841, $W841, $S841, $U841);
$x842 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 259, 21, '<image>/04_array.js');
$x841 =& $x842[0]; list(,$W841,$S841,$U841) = $x842;
$x835 = JS::toPrimitive($_i, $global);
$x836 = JS::toPrimitive($x841, $global);
$x843 = JS::toString((is_string($x835) || is_string($x836) ? JS::toString($x835, $global) . JS::toString($x836, $global) : JS::toNumber($x835, $global) + JS::toNumber($x836, $global)), $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x844 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 259, 30, '<image>/04_array.js');
$_TypeError =& $x844[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x844;
$x845 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x846 = $x845($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x846->class) && $x846->class === 'Error' && !isset($x846->properties['file']) && !isset($x846->properties['line']) && !isset($x846->properties['column'])) {$x846->properties['file'] = '<image>/04_array.js';$x846->properties['line'] = 259;$x846->properties['column'] = 30;$x846->attributes['file'] = $x846->attributes['line'] = $x846->attributes['column'] = 0; }
throw new JSException($x846, 259, 30, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x847, $W847, $S847, $U847);
$x848 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x843, $global), 259, 30, '<image>/04_array.js');
$x847 =& $x848[0]; list(,$W847,$S847,$U847) = $x848;
if ($U847 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x843] = $x847; $x847 =& $leThis->properties[$x843]; $leThis->attributes[$x843] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U847 = FALSE; $W847 = TRUE; }
if (isset($S847)) {
$x850 = $S847->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x851 = $x850($global, $leThis, $S847, array($x833), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x849 = $x851;
} else {
if (!$U847) {$x849 = $x833;if ($W847) { $x847 = $x833; }  }
else { $x849 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int((is_string($x835) || is_string($x836) ? JS::toString($x835, $global) . JS::toString($x836, $global) : JS::toNumber($x835, $global) + JS::toNumber($x836, $global))) && (is_string($x835) || is_string($x836) ? JS::toString($x835, $global) . JS::toString($x836, $global) : JS::toNumber($x835, $global) + JS::toNumber($x836, $global)) >= $leThis->properties['length']) { $leThis->properties['length'] = (is_string($x835) || is_string($x836) ? JS::toString($x835, $global) . JS::toString($x836, $global) : JS::toNumber($x835, $global) + JS::toNumber($x836, $global)) + 1; };
};
for ($x852 = 0;; ++$x852) {
if ($x852 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x853 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 262, 22, '<image>/04_array.js');
$_arguments =& $x853[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x853;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x854 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 262, 22, '<image>/04_array.js');
$_ReferenceError =& $x854[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x854;
$x855 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 262, 22);
$x856 = $x855($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x856->class) && $x856->class === 'Error' && !isset($x856->properties['file']) && !isset($x856->properties['line']) && !isset($x856->properties['column'])) {$x856->properties['file'] = '<image>/04_array.js';$x856->properties['line'] = 262;$x856->properties['column'] = 22;$x856->attributes['file'] = $x856->attributes['line'] = $x856->attributes['column'] = 0; }
throw new JSException($x856, 262, 22, '<image>/04_array.js');
}
unset($x857, $W857, $S857, $U857);
$x858 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 262, 31, '<image>/04_array.js');
$x857 =& $x858[0]; list(,$W857,$S857,$U857) = $x858;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x857;
}
if ($x852 !== 0) {
$x859 = ++$_i;
}
$x860 = JS::toPrimitive($_i, $global);
$x861 = JS::toPrimitive($_l, $global);
$x862 = (is_string($x860) && is_string($x861) ? strcmp($x860, $x861) < 0 : (!is_nan($x863 = JS::toNumber($x860, $global)) && !is_nan($x864 = JS::toNumber($x861, $global)) && $x863 < $x864));
if (!JS::toBoolean($x862, $global)) { break; }

unset($x865, $W865, $S865, $U865);
$x866 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 263, 22, '<image>/04_array.js');
$x865 =& $x866[0]; list(,$W865,$S865,$U865) = $x866;
$x867 = JS::toString($_i, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x868 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 263, 11, '<image>/04_array.js');
$_TypeError =& $x868[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x868;
$x869 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x870 = $x869($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x870->class) && $x870->class === 'Error' && !isset($x870->properties['file']) && !isset($x870->properties['line']) && !isset($x870->properties['column'])) {$x870->properties['file'] = '<image>/04_array.js';$x870->properties['line'] = 263;$x870->properties['column'] = 11;$x870->attributes['file'] = $x870->attributes['line'] = $x870->attributes['column'] = 0; }
throw new JSException($x870, 263, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x871, $W871, $S871, $U871);
$x872 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x867, $global), 263, 11, '<image>/04_array.js');
$x871 =& $x872[0]; list(,$W871,$S871,$U871) = $x872;
if ($U871 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x867] = $x871; $x871 =& $leThis->properties[$x867]; $leThis->attributes[$x867] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U871 = FALSE; $W871 = TRUE; }
if (isset($S871)) {
$x874 = $S871->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x875 = $x874($global, $leThis, $S871, array($x865), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x873 = $x875;
} else {
if (!$U871) {$x873 = $x865;if ($W871) { $x871 = $x865; }  }
else { $x873 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; };
};
unset($x876, $W876, $S876, $U876);
$x877 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 266, 13, '<image>/04_array.js');
$x876 =& $x877[0]; list(,$W876,$S876,$U876) = $x877;
return $x876;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_17($global,$leThis,$fn,$args,$constructor=FALSE){for($x824=0;;++$x824){if($x824===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x823=&$scope->properties[\'arguments\'];$x823->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x823->properties[$i]=$args[$i];$x823->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x825,$W825,$S825,$U825);$x826=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),258,19,\'<image>/04_array.js\');$x825=&$x826[0];list(,$W825,$S825,$U825)=$x826;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x825,$global)-JS::toNumber(1,$global));}if($x824!==0){$x827=--$_i;}$x828=JS::toPrimitive($_i,$global);$x829=JS::toPrimitive(0,$global);$x830=!(is_string($x828)&&is_string($x829)?strcmp($x828,$x829)<0:(!is_nan($x831=JS::toNumber($x828,$global))&&!is_nan($x832=JS::toNumber($x829,$global))&&$x831<$x832));if(!JS::toBoolean($x830,$global)){break;}unset($x833,$W833,$S833,$U833);$x834=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),259,36,\'<image>/04_array.js\');$x833=&$x834[0];list(,$W833,$S833,$U833)=$x834;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x837=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),259,12,\'<image>/04_array.js\');$_arguments=&$x837[0];list(,$Warguments,$Sarguments,$Uarguments)=$x837;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x838=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),259,12,\'<image>/04_array.js\');$_ReferenceError=&$x838[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x838;$x839=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,12);$x840=$x839($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x840->class)&&$x840->class===\'Error\'&&!isset($x840->properties[\'file\'])&&!isset($x840->properties[\'line\'])&&!isset($x840->properties[\'column\'])){$x840->properties[\'file\']=\'<image>/04_array.js\';$x840->properties[\'line\']=259;$x840->properties[\'column\']=12;$x840->attributes[\'file\']=$x840->attributes[\'line\']=$x840->attributes[\'column\']=0;}throw new JSException($x840,259,12,\'<image>/04_array.js\');}unset($x841,$W841,$S841,$U841);$x842=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),259,21,\'<image>/04_array.js\');$x841=&$x842[0];list(,$W841,$S841,$U841)=$x842;$x835=JS::toPrimitive($_i,$global);$x836=JS::toPrimitive($x841,$global);$x843=JS::toString((is_string($x835)||is_string($x836)?JS::toString($x835,$global).JS::toString($x836,$global):JS::toNumber($x835,$global)+JS::toNumber($x836,$global)),$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x844=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),259,30,\'<image>/04_array.js\');$_TypeError=&$x844[0];list(,$WTypeError,$STypeError,$UTypeError)=$x844;$x845=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x846=$x845($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x846->class)&&$x846->class===\'Error\'&&!isset($x846->properties[\'file\'])&&!isset($x846->properties[\'line\'])&&!isset($x846->properties[\'column\'])){$x846->properties[\'file\']=\'<image>/04_array.js\';$x846->properties[\'line\']=259;$x846->properties[\'column\']=30;$x846->attributes[\'file\']=$x846->attributes[\'line\']=$x846->attributes[\'column\']=0;}throw new JSException($x846,259,30,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x847,$W847,$S847,$U847);$x848=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x843,$global),259,30,\'<image>/04_array.js\');$x847=&$x848[0];list(,$W847,$S847,$U847)=$x848;if($U847&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x843]=$x847;$x847=&$leThis->properties[$x843];$leThis->attributes[$x843]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U847=FALSE;$W847=TRUE;}if(isset($S847)){$x850=$S847->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x851=$x850($global,$leThis,$S847,array($x833),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x849=$x851;}else{if(!$U847){$x849=$x833;if($W847){$x847=$x833;}}else{$x849=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int((is_string($x835)||is_string($x836)?JS::toString($x835,$global).JS::toString($x836,$global):JS::toNumber($x835,$global)+JS::toNumber($x836,$global)))&&(is_string($x835)||is_string($x836)?JS::toString($x835,$global).JS::toString($x836,$global):JS::toNumber($x835,$global)+JS::toNumber($x836,$global))>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=(is_string($x835)||is_string($x836)?JS::toString($x835,$global).JS::toString($x836,$global):JS::toNumber($x835,$global)+JS::toNumber($x836,$global))+1;}}for($x852=0;;++$x852){if($x852===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x853=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),262,22,\'<image>/04_array.js\');$_arguments=&$x853[0];list(,$Warguments,$Sarguments,$Uarguments)=$x853;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x854=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),262,22,\'<image>/04_array.js\');$_ReferenceError=&$x854[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x854;$x855=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',262,22);$x856=$x855($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x856->class)&&$x856->class===\'Error\'&&!isset($x856->properties[\'file\'])&&!isset($x856->properties[\'line\'])&&!isset($x856->properties[\'column\'])){$x856->properties[\'file\']=\'<image>/04_array.js\';$x856->properties[\'line\']=262;$x856->properties[\'column\']=22;$x856->attributes[\'file\']=$x856->attributes[\'line\']=$x856->attributes[\'column\']=0;}throw new JSException($x856,262,22,\'<image>/04_array.js\');}unset($x857,$W857,$S857,$U857);$x858=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),262,31,\'<image>/04_array.js\');$x857=&$x858[0];list(,$W857,$S857,$U857)=$x858;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x857;}if($x852!==0){$x859=++$_i;}$x860=JS::toPrimitive($_i,$global);$x861=JS::toPrimitive($_l,$global);$x862=(is_string($x860)&&is_string($x861)?strcmp($x860,$x861)<0:(!is_nan($x863=JS::toNumber($x860,$global))&&!is_nan($x864=JS::toNumber($x861,$global))&&$x863<$x864));if(!JS::toBoolean($x862,$global)){break;}unset($x865,$W865,$S865,$U865);$x866=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),263,22,\'<image>/04_array.js\');$x865=&$x866[0];list(,$W865,$S865,$U865)=$x866;$x867=JS::toString($_i,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x868=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,11,\'<image>/04_array.js\');$_TypeError=&$x868[0];list(,$WTypeError,$STypeError,$UTypeError)=$x868;$x869=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x870=$x869($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x870->class)&&$x870->class===\'Error\'&&!isset($x870->properties[\'file\'])&&!isset($x870->properties[\'line\'])&&!isset($x870->properties[\'column\'])){$x870->properties[\'file\']=\'<image>/04_array.js\';$x870->properties[\'line\']=263;$x870->properties[\'column\']=11;$x870->attributes[\'file\']=$x870->attributes[\'line\']=$x870->attributes[\'column\']=0;}throw new JSException($x870,263,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x871,$W871,$S871,$U871);$x872=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x867,$global),263,11,\'<image>/04_array.js\');$x871=&$x872[0];list(,$W871,$S871,$U871)=$x872;if($U871&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x867]=$x871;$x871=&$leThis->properties[$x867];$leThis->attributes[$x867]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U871=FALSE;$W871=TRUE;}if(isset($S871)){$x874=$S871->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x875=$x874($global,$leThis,$S871,array($x865),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x873=$x875;}else{if(!$U871){$x873=$x865;if($W871){$x871=$x865;}}else{$x873=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}}unset($x876,$W876,$S876,$U876);$x877=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),266,13,\'<image>/04_array.js\');$x876=&$x877[0];list(,$W876,$S876,$U876)=$x877;return$x876;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x891 =& $scope->properties['arguments'];
$x891->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x891->properties[$i] = $args[$i];
$x891->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x892 = $_from;
if (!JS::toBoolean($x892, $global)) {
$x892 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x892;
$x893 = JS::toPrimitive($_from, $global);
$x894 = JS::toPrimitive(0, $global);
$x895 = (is_string($x893) && is_string($x894) ? strcmp($x893, $x894) < 0 : (!is_nan($x896 = JS::toNumber($x893, $global)) && !is_nan($x897 = JS::toNumber($x894, $global)) && $x896 < $x897));
if (JS::toBoolean($x895, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x898 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Math', $global), 273, 10, '<image>/04_array.js');
$_Math =& $x898[0]; list(,$WMath,$SMath,$UMath) = $x898;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x899 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 273, 10, '<image>/04_array.js');
$_ReferenceError =& $x899[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x899;
$x900 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 10);
$x901 = $x900($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x901->class) && $x901->class === 'Error' && !isset($x901->properties['file']) && !isset($x901->properties['line']) && !isset($x901->properties['column'])) {$x901->properties['file'] = '<image>/04_array.js';$x901->properties['line'] = 273;$x901->properties['column'] = 10;$x901->attributes['file'] = $x901->attributes['line'] = $x901->attributes['column'] = 0; }
throw new JSException($x901, 273, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x903 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 273, 18, '<image>/04_array.js');
$_TypeError =& $x903[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x903;
$x904 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x905 = $x904($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x905->class) && $x905->class === 'Error' && !isset($x905->properties['file']) && !isset($x905->properties['line']) && !isset($x905->properties['column'])) {$x905->properties['file'] = '<image>/04_array.js';$x905->properties['line'] = 273;$x905->properties['column'] = 18;$x905->attributes['file'] = $x905->attributes['line'] = $x905->attributes['column'] = 0; }
throw new JSException($x905, 273, 18, '<image>/04_array.js');
}
$x902 = JS::toObject($_Math, $global);
unset($x906, $W906, $S906, $U906);
$x907 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x902, JS::toString('max', $global), 273, 18, '<image>/04_array.js');
$x906 =& $x907[0]; list(,$W906,$S906,$U906) = $x907;
unset($x910, $W910, $S910, $U910);
$x911 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 273, 23, '<image>/04_array.js');
$x910 =& $x911[0]; list(,$W910,$S910,$U910) = $x911;
$x908 = JS::toPrimitive($x910, $global);
$x909 = JS::toPrimitive($_from, $global);
if (!(is_object($x906) && isset($x906->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x914 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 273, 18, '<image>/04_array.js');
$_TypeError =& $x914[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x914;
$x915 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x916 = $x915($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x916->class) && $x916->class === 'Error' && !isset($x916->properties['file']) && !isset($x916->properties['line']) && !isset($x916->properties['column'])) {$x916->properties['file'] = '<image>/04_array.js';$x916->properties['line'] = 273;$x916->properties['column'] = 18;$x916->attributes['file'] = $x916->attributes['line'] = $x916->attributes['column'] = 0; }
throw new JSException($x916, 273, 18, '<image>/04_array.js');
}
$x912 = $x906->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x913 = $x912($global, $x902, $x906, array((is_string($x908) || is_string($x909) ? JS::toString($x908, $global) . JS::toString($x909, $global) : JS::toNumber($x908, $global) + JS::toNumber($x909, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x913;;
};
for ($x917 = 0;; ++$x917) {
if ($x917 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $_from;
unset($x918, $W918, $S918, $U918);
$x919 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 276, 29, '<image>/04_array.js');
$x918 =& $x919[0]; list(,$W918,$S918,$U918) = $x919;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x918;
}
if ($x917 !== 0) {
$x920 = ++$_i;
}
$x921 = JS::toPrimitive($_i, $global);
$x922 = JS::toPrimitive($_l, $global);
$x923 = (is_string($x921) && is_string($x922) ? strcmp($x921, $x922) < 0 : (!is_nan($x924 = JS::toNumber($x921, $global)) && !is_nan($x925 = JS::toNumber($x922, $global)) && $x924 < $x925));
if (!JS::toBoolean($x923, $global)) { break; }

unset($x927, $W927, $S927, $U927);
$x928 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 277, 11, '<image>/04_array.js');
$x927 =& $x928[0]; list(,$W927,$S927,$U927) = $x928;
$x926 = (((gettype($x927) === gettype($_search) && $x927 === $_search))|| (((is_float($x927) || is_int($x927)) && (is_float($_search) || is_int($_search))) && $x927 == $_search));
if (JS::toBoolean($x926, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x891=&$scope->properties[\'arguments\'];$x891->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x891->properties[$i]=$args[$i];$x891->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x892=$_from;if(!JS::toBoolean($x892,$global)){$x892=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x892;$x893=JS::toPrimitive($_from,$global);$x894=JS::toPrimitive(0,$global);$x895=(is_string($x893)&&is_string($x894)?strcmp($x893,$x894)<0:(!is_nan($x896=JS::toNumber($x893,$global))&&!is_nan($x897=JS::toNumber($x894,$global))&&$x896<$x897));if(JS::toBoolean($x895,$global)){unset($_Math,$WMath,$SMath,$UMath);$x898=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Math\',$global),273,10,\'<image>/04_array.js\');$_Math=&$x898[0];list(,$WMath,$SMath,$UMath)=$x898;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x899=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),273,10,\'<image>/04_array.js\');$_ReferenceError=&$x899[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x899;$x900=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,10);$x901=$x900($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x901->class)&&$x901->class===\'Error\'&&!isset($x901->properties[\'file\'])&&!isset($x901->properties[\'line\'])&&!isset($x901->properties[\'column\'])){$x901->properties[\'file\']=\'<image>/04_array.js\';$x901->properties[\'line\']=273;$x901->properties[\'column\']=10;$x901->attributes[\'file\']=$x901->attributes[\'line\']=$x901->attributes[\'column\']=0;}throw new JSException($x901,273,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x903=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,18,\'<image>/04_array.js\');$_TypeError=&$x903[0];list(,$WTypeError,$STypeError,$UTypeError)=$x903;$x904=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x905=$x904($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x905->class)&&$x905->class===\'Error\'&&!isset($x905->properties[\'file\'])&&!isset($x905->properties[\'line\'])&&!isset($x905->properties[\'column\'])){$x905->properties[\'file\']=\'<image>/04_array.js\';$x905->properties[\'line\']=273;$x905->properties[\'column\']=18;$x905->attributes[\'file\']=$x905->attributes[\'line\']=$x905->attributes[\'column\']=0;}throw new JSException($x905,273,18,\'<image>/04_array.js\');}$x902=JS::toObject($_Math,$global);unset($x906,$W906,$S906,$U906);$x907=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x902,JS::toString(\'max\',$global),273,18,\'<image>/04_array.js\');$x906=&$x907[0];list(,$W906,$S906,$U906)=$x907;unset($x910,$W910,$S910,$U910);$x911=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),273,23,\'<image>/04_array.js\');$x910=&$x911[0];list(,$W910,$S910,$U910)=$x911;$x908=JS::toPrimitive($x910,$global);$x909=JS::toPrimitive($_from,$global);if(!(is_object($x906)&&isset($x906->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x914=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,18,\'<image>/04_array.js\');$_TypeError=&$x914[0];list(,$WTypeError,$STypeError,$UTypeError)=$x914;$x915=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x916=$x915($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x916->class)&&$x916->class===\'Error\'&&!isset($x916->properties[\'file\'])&&!isset($x916->properties[\'line\'])&&!isset($x916->properties[\'column\'])){$x916->properties[\'file\']=\'<image>/04_array.js\';$x916->properties[\'line\']=273;$x916->properties[\'column\']=18;$x916->attributes[\'file\']=$x916->attributes[\'line\']=$x916->attributes[\'column\']=0;}throw new JSException($x916,273,18,\'<image>/04_array.js\');}$x912=$x906->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x913=$x912($global,$x902,$x906,array((is_string($x908)||is_string($x909)?JS::toString($x908,$global).JS::toString($x909,$global):JS::toNumber($x908,$global)+JS::toNumber($x909,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x913;}for($x917=0;;++$x917){if($x917===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$_from;unset($x918,$W918,$S918,$U918);$x919=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),276,29,\'<image>/04_array.js\');$x918=&$x919[0];list(,$W918,$S918,$U918)=$x919;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x918;}if($x917!==0){$x920=++$_i;}$x921=JS::toPrimitive($_i,$global);$x922=JS::toPrimitive($_l,$global);$x923=(is_string($x921)&&is_string($x922)?strcmp($x921,$x922)<0:(!is_nan($x924=JS::toNumber($x921,$global))&&!is_nan($x925=JS::toNumber($x922,$global))&&$x924<$x925));if(!JS::toBoolean($x923,$global)){break;}unset($x927,$W927,$S927,$U927);$x928=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),277,11,\'<image>/04_array.js\');$x927=&$x928[0];list(,$W927,$S927,$U927)=$x928;$x926=(((gettype($x927)===gettype($_search)&&$x927===$_search))||(((is_float($x927)||is_int($x927))&&(is_float($_search)||is_int($_search)))&&$x927==$_search));if(JS::toBoolean($x926,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x942 =& $scope->properties['arguments'];
$x942->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x942->properties[$i] = $args[$i];
$x942->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x943 = $_from;
if (!JS::toBoolean($x943, $global)) {
$x943 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x943;
$x944 = JS::toPrimitive($_from, $global);
$x945 = JS::toPrimitive(0, $global);
$x946 = (is_string($x944) && is_string($x945) ? strcmp($x944, $x945) < 0 : (!is_nan($x947 = JS::toNumber($x944, $global)) && !is_nan($x948 = JS::toNumber($x945, $global)) && $x947 < $x948));
if (JS::toBoolean($x946, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x949 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Math', $global), 289, 10, '<image>/04_array.js');
$_Math =& $x949[0]; list(,$WMath,$SMath,$UMath) = $x949;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x950 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 289, 10, '<image>/04_array.js');
$_ReferenceError =& $x950[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x950;
$x951 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 10);
$x952 = $x951($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x952->class) && $x952->class === 'Error' && !isset($x952->properties['file']) && !isset($x952->properties['line']) && !isset($x952->properties['column'])) {$x952->properties['file'] = '<image>/04_array.js';$x952->properties['line'] = 289;$x952->properties['column'] = 10;$x952->attributes['file'] = $x952->attributes['line'] = $x952->attributes['column'] = 0; }
throw new JSException($x952, 289, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x954 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 289, 18, '<image>/04_array.js');
$_TypeError =& $x954[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x954;
$x955 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x956 = $x955($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x956->class) && $x956->class === 'Error' && !isset($x956->properties['file']) && !isset($x956->properties['line']) && !isset($x956->properties['column'])) {$x956->properties['file'] = '<image>/04_array.js';$x956->properties['line'] = 289;$x956->properties['column'] = 18;$x956->attributes['file'] = $x956->attributes['line'] = $x956->attributes['column'] = 0; }
throw new JSException($x956, 289, 18, '<image>/04_array.js');
}
$x953 = JS::toObject($_Math, $global);
unset($x957, $W957, $S957, $U957);
$x958 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x953, JS::toString('max', $global), 289, 18, '<image>/04_array.js');
$x957 =& $x958[0]; list(,$W957,$S957,$U957) = $x958;
unset($x961, $W961, $S961, $U961);
$x962 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 289, 23, '<image>/04_array.js');
$x961 =& $x962[0]; list(,$W961,$S961,$U961) = $x962;
$x959 = JS::toPrimitive($x961, $global);
$x960 = JS::toPrimitive($_from, $global);
if (!(is_object($x957) && isset($x957->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x965 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 289, 18, '<image>/04_array.js');
$_TypeError =& $x965[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x965;
$x966 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x967 = $x966($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x967->class) && $x967->class === 'Error' && !isset($x967->properties['file']) && !isset($x967->properties['line']) && !isset($x967->properties['column'])) {$x967->properties['file'] = '<image>/04_array.js';$x967->properties['line'] = 289;$x967->properties['column'] = 18;$x967->attributes['file'] = $x967->attributes['line'] = $x967->attributes['column'] = 0; }
throw new JSException($x967, 289, 18, '<image>/04_array.js');
}
$x963 = $x957->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x964 = $x963($global, $x953, $x957, array((is_string($x959) || is_string($x960) ? JS::toString($x959, $global) . JS::toString($x960, $global) : JS::toNumber($x959, $global) + JS::toNumber($x960, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x964;;
};
unset($x972, $W972, $S972, $U972);
$x973 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 292, 10, '<image>/04_array.js');
$x972 =& $x973[0]; list(,$W972,$S972,$U972) = $x973;
$x969 = JS::toPrimitive($x972, $global);
$x970 = JS::toPrimitive(1, $global);
$x971 = (is_string($x969) && is_string($x970) ? strcmp($x969, $x970) < 0 : (!is_nan($x974 = JS::toNumber($x969, $global)) && !is_nan($x975 = JS::toNumber($x970, $global)) && $x974 < $x975));
$x968 = $x971;
if (!JS::toBoolean($x968, $global)) {
unset($x979, $W979, $S979, $U979);
$x980 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 292, 37, '<image>/04_array.js');
$x979 =& $x980[0]; list(,$W979,$S979,$U979) = $x980;
$x976 = JS::toPrimitive($_from, $global);
$x977 = JS::toPrimitive($x979, $global);
$x978 = !(is_string($x976) && is_string($x977) ? strcmp($x976, $x977) < 0 : (!is_nan($x981 = JS::toNumber($x976, $global)) && !is_nan($x982 = JS::toNumber($x977, $global)) && $x981 < $x982));
$x968 = $x978; }
if (JS::toBoolean($x968, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
for ($x983 = 0;; ++$x983) {
if ($x983 === 0) {
unset($x984, $W984, $S984, $U984);
$x985 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 296, 19, '<image>/04_array.js');
$x984 =& $x985[0]; list(,$W984,$S984,$U984) = $x985;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x984, $global) - JS::toNumber(1, $global));
}
if ($x983 !== 0) {
$x986 = --$_i;
}
$x987 = JS::toPrimitive($_i, $global);
$x988 = JS::toPrimitive($_from, $global);
$x989 = !(is_string($x987) && is_string($x988) ? strcmp($x987, $x988) < 0 : (!is_nan($x990 = JS::toNumber($x987, $global)) && !is_nan($x991 = JS::toNumber($x988, $global)) && $x990 < $x991));
if (!JS::toBoolean($x989, $global)) { break; }

unset($x995, $W995, $S995, $U995);
$x996 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 297, 11, '<image>/04_array.js');
$x995 =& $x996[0]; list(,$W995,$S995,$U995) = $x996;
$x993 = $x995;
$x994 = $_search;
if (gettype($x993) === gettype($x994)) { $x992 = $x993===$x994; }
else if ($x993 === JS::$undefined && $x994 === NULL || $x993 === NULL && $x994 === JS::$undefined) { $x992 = TRUE; }
else if ($x993 === NULL || $x994 === NULL) { $x992 = FALSE; }
else { $x993 = JS::toPrimitive($x993, $global); $x994 = JS::toPrimitive($x994, $global); 
if (is_bool($x993)) { $x993 = (int) $x993; }
if (is_bool($x994)) { $x994 = (int) $x994; }
if (is_numeric($x993) || is_numeric($x994)) { $x993 = JS::toNumber($x993, $global); $x994 = JS::toNumber($x994, $global); }
$x992 = $x993===$x994;}
if (JS::toBoolean($x992, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x942=&$scope->properties[\'arguments\'];$x942->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x942->properties[$i]=$args[$i];$x942->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x943=$_from;if(!JS::toBoolean($x943,$global)){$x943=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x943;$x944=JS::toPrimitive($_from,$global);$x945=JS::toPrimitive(0,$global);$x946=(is_string($x944)&&is_string($x945)?strcmp($x944,$x945)<0:(!is_nan($x947=JS::toNumber($x944,$global))&&!is_nan($x948=JS::toNumber($x945,$global))&&$x947<$x948));if(JS::toBoolean($x946,$global)){unset($_Math,$WMath,$SMath,$UMath);$x949=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Math\',$global),289,10,\'<image>/04_array.js\');$_Math=&$x949[0];list(,$WMath,$SMath,$UMath)=$x949;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x950=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),289,10,\'<image>/04_array.js\');$_ReferenceError=&$x950[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x950;$x951=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,10);$x952=$x951($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x952->class)&&$x952->class===\'Error\'&&!isset($x952->properties[\'file\'])&&!isset($x952->properties[\'line\'])&&!isset($x952->properties[\'column\'])){$x952->properties[\'file\']=\'<image>/04_array.js\';$x952->properties[\'line\']=289;$x952->properties[\'column\']=10;$x952->attributes[\'file\']=$x952->attributes[\'line\']=$x952->attributes[\'column\']=0;}throw new JSException($x952,289,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x954=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),289,18,\'<image>/04_array.js\');$_TypeError=&$x954[0];list(,$WTypeError,$STypeError,$UTypeError)=$x954;$x955=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x956=$x955($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x956->class)&&$x956->class===\'Error\'&&!isset($x956->properties[\'file\'])&&!isset($x956->properties[\'line\'])&&!isset($x956->properties[\'column\'])){$x956->properties[\'file\']=\'<image>/04_array.js\';$x956->properties[\'line\']=289;$x956->properties[\'column\']=18;$x956->attributes[\'file\']=$x956->attributes[\'line\']=$x956->attributes[\'column\']=0;}throw new JSException($x956,289,18,\'<image>/04_array.js\');}$x953=JS::toObject($_Math,$global);unset($x957,$W957,$S957,$U957);$x958=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x953,JS::toString(\'max\',$global),289,18,\'<image>/04_array.js\');$x957=&$x958[0];list(,$W957,$S957,$U957)=$x958;unset($x961,$W961,$S961,$U961);$x962=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),289,23,\'<image>/04_array.js\');$x961=&$x962[0];list(,$W961,$S961,$U961)=$x962;$x959=JS::toPrimitive($x961,$global);$x960=JS::toPrimitive($_from,$global);if(!(is_object($x957)&&isset($x957->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x965=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),289,18,\'<image>/04_array.js\');$_TypeError=&$x965[0];list(,$WTypeError,$STypeError,$UTypeError)=$x965;$x966=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x967=$x966($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x967->class)&&$x967->class===\'Error\'&&!isset($x967->properties[\'file\'])&&!isset($x967->properties[\'line\'])&&!isset($x967->properties[\'column\'])){$x967->properties[\'file\']=\'<image>/04_array.js\';$x967->properties[\'line\']=289;$x967->properties[\'column\']=18;$x967->attributes[\'file\']=$x967->attributes[\'line\']=$x967->attributes[\'column\']=0;}throw new JSException($x967,289,18,\'<image>/04_array.js\');}$x963=$x957->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x964=$x963($global,$x953,$x957,array((is_string($x959)||is_string($x960)?JS::toString($x959,$global).JS::toString($x960,$global):JS::toNumber($x959,$global)+JS::toNumber($x960,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x964;}unset($x972,$W972,$S972,$U972);$x973=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),292,10,\'<image>/04_array.js\');$x972=&$x973[0];list(,$W972,$S972,$U972)=$x973;$x969=JS::toPrimitive($x972,$global);$x970=JS::toPrimitive(1,$global);$x971=(is_string($x969)&&is_string($x970)?strcmp($x969,$x970)<0:(!is_nan($x974=JS::toNumber($x969,$global))&&!is_nan($x975=JS::toNumber($x970,$global))&&$x974<$x975));$x968=$x971;if(!JS::toBoolean($x968,$global)){unset($x979,$W979,$S979,$U979);$x980=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),292,37,\'<image>/04_array.js\');$x979=&$x980[0];list(,$W979,$S979,$U979)=$x980;$x976=JS::toPrimitive($_from,$global);$x977=JS::toPrimitive($x979,$global);$x978=!(is_string($x976)&&is_string($x977)?strcmp($x976,$x977)<0:(!is_nan($x981=JS::toNumber($x976,$global))&&!is_nan($x982=JS::toNumber($x977,$global))&&$x981<$x982));$x968=$x978;}if(JS::toBoolean($x968,$global)){return(-1.0*JS::toNumber(1,$global));}for($x983=0;;++$x983){if($x983===0){unset($x984,$W984,$S984,$U984);$x985=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),296,19,\'<image>/04_array.js\');$x984=&$x985[0];list(,$W984,$S984,$U984)=$x985;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x984,$global)-JS::toNumber(1,$global));}if($x983!==0){$x986=--$_i;}$x987=JS::toPrimitive($_i,$global);$x988=JS::toPrimitive($_from,$global);$x989=!(is_string($x987)&&is_string($x988)?strcmp($x987,$x988)<0:(!is_nan($x990=JS::toNumber($x987,$global))&&!is_nan($x991=JS::toNumber($x988,$global))&&$x990<$x991));if(!JS::toBoolean($x989,$global)){break;}unset($x995,$W995,$S995,$U995);$x996=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),297,11,\'<image>/04_array.js\');$x995=&$x996[0];list(,$W995,$S995,$U995)=$x996;$x993=$x995;$x994=$_search;if(gettype($x993)===gettype($x994)){$x992=$x993===$x994;}else if($x993===JS::$undefined&&$x994===NULL||$x993===NULL&&$x994===JS::$undefined){$x992=TRUE;}else if($x993===NULL||$x994===NULL){$x992=FALSE;}else{$x993=JS::toPrimitive($x993,$global);$x994=JS::toPrimitive($x994,$global);if(is_bool($x993)){$x993=(int)$x993;}if(is_bool($x994)){$x994=(int)$x994;}if(is_numeric($x993)||is_numeric($x994)){$x993=JS::toNumber($x993,$global);$x994=JS::toNumber($x994,$global);}$x992=$x993===$x994;}if(JS::toBoolean($x992,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1010 =& $scope->properties['arguments'];
$x1010->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1010->properties[$i] = $args[$i];
$x1010->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1014 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 308, 6, '<image>/04_array.js');
$_arguments =& $x1014[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1014;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1015 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 308, 6, '<image>/04_array.js');
$_ReferenceError =& $x1015[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1015;
$x1016 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 308, 6);
$x1017 = $x1016($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1017->class) && $x1017->class === 'Error' && !isset($x1017->properties['file']) && !isset($x1017->properties['line']) && !isset($x1017->properties['column'])) {$x1017->properties['file'] = '<image>/04_array.js';$x1017->properties['line'] = 308;$x1017->properties['column'] = 6;$x1017->attributes['file'] = $x1017->attributes['line'] = $x1017->attributes['column'] = 0; }
throw new JSException($x1017, 308, 6, '<image>/04_array.js');
}
unset($x1018, $W1018, $S1018, $U1018);
$x1019 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 308, 15, '<image>/04_array.js');
$x1018 =& $x1019[0]; list(,$W1018,$S1018,$U1018) = $x1019;
$x1011 = JS::toPrimitive($x1018, $global);
$x1012 = JS::toPrimitive(1, $global);
$x1013 = (is_string($x1012) && is_string($x1011) ? strcmp($x1012, $x1011) < 0 : (!is_nan($x1020 = JS::toNumber($x1012, $global)) && !is_nan($x1021 = JS::toNumber($x1011, $global)) && $x1020 < $x1021));
if (JS::toBoolean($x1013, $global)) {
unset($x1022, $W1022, $S1022, $U1022);
$x1023 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 309, 22, '<image>/04_array.js');
$x1022 =& $x1023[0]; list(,$W1022,$S1022,$U1022) = $x1023;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1022;;
};
for ($x1024 = 0;; ++$x1024) {
if ($x1024 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1025, $W1025, $S1025, $U1025);
$x1026 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 312, 26, '<image>/04_array.js');
$x1025 =& $x1026[0]; list(,$W1025,$S1025,$U1025) = $x1026;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1025;
}
if ($x1024 !== 0) {
$x1027 = ++$_i;
}
$x1028 = JS::toPrimitive($_i, $global);
$x1029 = JS::toPrimitive($_l, $global);
$x1030 = (is_string($x1028) && is_string($x1029) ? strcmp($x1028, $x1029) < 0 : (!is_nan($x1031 = JS::toNumber($x1028, $global)) && !is_nan($x1032 = JS::toNumber($x1029, $global)) && $x1031 < $x1032));
if (!JS::toBoolean($x1030, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1034 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 313, 23, '<image>/04_array.js');
$_TypeError =& $x1034[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1034;
$x1035 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1036 = $x1035($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1036->class) && $x1036->class === 'Error' && !isset($x1036->properties['file']) && !isset($x1036->properties['line']) && !isset($x1036->properties['column'])) {$x1036->properties['file'] = '<image>/04_array.js';$x1036->properties['line'] = 313;$x1036->properties['column'] = 23;$x1036->attributes['file'] = $x1036->attributes['line'] = $x1036->attributes['column'] = 0; }
throw new JSException($x1036, 313, 23, '<image>/04_array.js');
}
$x1033 = JS::toObject($_callbackFn, $global);
unset($x1037, $W1037, $S1037, $U1037);
$x1038 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1033, JS::toString('call', $global), 313, 23, '<image>/04_array.js');
$x1037 =& $x1038[0]; list(,$W1037,$S1037,$U1037) = $x1038;
unset($x1039, $W1039, $S1039, $U1039);
$x1040 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 313, 37, '<image>/04_array.js');
$x1039 =& $x1040[0]; list(,$W1039,$S1039,$U1039) = $x1040;
if (!(is_object($x1037) && isset($x1037->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1043 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 313, 23, '<image>/04_array.js');
$_TypeError =& $x1043[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1043;
$x1044 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1045 = $x1044($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1045->class) && $x1045->class === 'Error' && !isset($x1045->properties['file']) && !isset($x1045->properties['line']) && !isset($x1045->properties['column'])) {$x1045->properties['file'] = '<image>/04_array.js';$x1045->properties['line'] = 313;$x1045->properties['column'] = 23;$x1045->attributes['file'] = $x1045->attributes['line'] = $x1045->attributes['column'] = 0; }
throw new JSException($x1045, 313, 23, '<image>/04_array.js');
}
$x1041 = $x1037->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1042 = $x1041($global, $x1033, $x1037, array($_thisArg, $x1039, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x1042, $global)), $global)) {

return false;;
};
};
return true;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1010=&$scope->properties[\'arguments\'];$x1010->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1010->properties[$i]=$args[$i];$x1010->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1014=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),308,6,\'<image>/04_array.js\');$_arguments=&$x1014[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1014;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1015=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),308,6,\'<image>/04_array.js\');$_ReferenceError=&$x1015[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1015;$x1016=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',308,6);$x1017=$x1016($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1017->class)&&$x1017->class===\'Error\'&&!isset($x1017->properties[\'file\'])&&!isset($x1017->properties[\'line\'])&&!isset($x1017->properties[\'column\'])){$x1017->properties[\'file\']=\'<image>/04_array.js\';$x1017->properties[\'line\']=308;$x1017->properties[\'column\']=6;$x1017->attributes[\'file\']=$x1017->attributes[\'line\']=$x1017->attributes[\'column\']=0;}throw new JSException($x1017,308,6,\'<image>/04_array.js\');}unset($x1018,$W1018,$S1018,$U1018);$x1019=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),308,15,\'<image>/04_array.js\');$x1018=&$x1019[0];list(,$W1018,$S1018,$U1018)=$x1019;$x1011=JS::toPrimitive($x1018,$global);$x1012=JS::toPrimitive(1,$global);$x1013=(is_string($x1012)&&is_string($x1011)?strcmp($x1012,$x1011)<0:(!is_nan($x1020=JS::toNumber($x1012,$global))&&!is_nan($x1021=JS::toNumber($x1011,$global))&&$x1020<$x1021));if(JS::toBoolean($x1013,$global)){unset($x1022,$W1022,$S1022,$U1022);$x1023=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),309,22,\'<image>/04_array.js\');$x1022=&$x1023[0];list(,$W1022,$S1022,$U1022)=$x1023;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1022;}for($x1024=0;;++$x1024){if($x1024===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1025,$W1025,$S1025,$U1025);$x1026=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),312,26,\'<image>/04_array.js\');$x1025=&$x1026[0];list(,$W1025,$S1025,$U1025)=$x1026;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1025;}if($x1024!==0){$x1027=++$_i;}$x1028=JS::toPrimitive($_i,$global);$x1029=JS::toPrimitive($_l,$global);$x1030=(is_string($x1028)&&is_string($x1029)?strcmp($x1028,$x1029)<0:(!is_nan($x1031=JS::toNumber($x1028,$global))&&!is_nan($x1032=JS::toNumber($x1029,$global))&&$x1031<$x1032));if(!JS::toBoolean($x1030,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1034=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),313,23,\'<image>/04_array.js\');$_TypeError=&$x1034[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1034;$x1035=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1036=$x1035($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1036->class)&&$x1036->class===\'Error\'&&!isset($x1036->properties[\'file\'])&&!isset($x1036->properties[\'line\'])&&!isset($x1036->properties[\'column\'])){$x1036->properties[\'file\']=\'<image>/04_array.js\';$x1036->properties[\'line\']=313;$x1036->properties[\'column\']=23;$x1036->attributes[\'file\']=$x1036->attributes[\'line\']=$x1036->attributes[\'column\']=0;}throw new JSException($x1036,313,23,\'<image>/04_array.js\');}$x1033=JS::toObject($_callbackFn,$global);unset($x1037,$W1037,$S1037,$U1037);$x1038=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1033,JS::toString(\'call\',$global),313,23,\'<image>/04_array.js\');$x1037=&$x1038[0];list(,$W1037,$S1037,$U1037)=$x1038;unset($x1039,$W1039,$S1039,$U1039);$x1040=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),313,37,\'<image>/04_array.js\');$x1039=&$x1040[0];list(,$W1039,$S1039,$U1039)=$x1040;if(!(is_object($x1037)&&isset($x1037->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1043=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),313,23,\'<image>/04_array.js\');$_TypeError=&$x1043[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1043;$x1044=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1045=$x1044($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1045->class)&&$x1045->class===\'Error\'&&!isset($x1045->properties[\'file\'])&&!isset($x1045->properties[\'line\'])&&!isset($x1045->properties[\'column\'])){$x1045->properties[\'file\']=\'<image>/04_array.js\';$x1045->properties[\'line\']=313;$x1045->properties[\'column\']=23;$x1045->attributes[\'file\']=$x1045->attributes[\'line\']=$x1045->attributes[\'column\']=0;}throw new JSException($x1045,313,23,\'<image>/04_array.js\');}$x1041=$x1037->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1042=$x1041($global,$x1033,$x1037,array($_thisArg,$x1039,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x1042,$global)),$global)){return false;}}return true;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1059 =& $scope->properties['arguments'];
$x1059->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1059->properties[$i] = $args[$i];
$x1059->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1063 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 324, 6, '<image>/04_array.js');
$_arguments =& $x1063[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1063;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1064 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 324, 6, '<image>/04_array.js');
$_ReferenceError =& $x1064[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1064;
$x1065 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 324, 6);
$x1066 = $x1065($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1066->class) && $x1066->class === 'Error' && !isset($x1066->properties['file']) && !isset($x1066->properties['line']) && !isset($x1066->properties['column'])) {$x1066->properties['file'] = '<image>/04_array.js';$x1066->properties['line'] = 324;$x1066->properties['column'] = 6;$x1066->attributes['file'] = $x1066->attributes['line'] = $x1066->attributes['column'] = 0; }
throw new JSException($x1066, 324, 6, '<image>/04_array.js');
}
unset($x1067, $W1067, $S1067, $U1067);
$x1068 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 324, 15, '<image>/04_array.js');
$x1067 =& $x1068[0]; list(,$W1067,$S1067,$U1067) = $x1068;
$x1060 = JS::toPrimitive($x1067, $global);
$x1061 = JS::toPrimitive(1, $global);
$x1062 = (is_string($x1061) && is_string($x1060) ? strcmp($x1061, $x1060) < 0 : (!is_nan($x1069 = JS::toNumber($x1061, $global)) && !is_nan($x1070 = JS::toNumber($x1060, $global)) && $x1069 < $x1070));
if (JS::toBoolean($x1062, $global)) {
unset($x1071, $W1071, $S1071, $U1071);
$x1072 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 325, 22, '<image>/04_array.js');
$x1071 =& $x1072[0]; list(,$W1071,$S1071,$U1071) = $x1072;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1071;;
};
for ($x1073 = 0;; ++$x1073) {
if ($x1073 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1074, $W1074, $S1074, $U1074);
$x1075 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 328, 26, '<image>/04_array.js');
$x1074 =& $x1075[0]; list(,$W1074,$S1074,$U1074) = $x1075;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1074;
}
if ($x1073 !== 0) {
$x1076 = ++$_i;
}
$x1077 = JS::toPrimitive($_i, $global);
$x1078 = JS::toPrimitive($_l, $global);
$x1079 = (is_string($x1077) && is_string($x1078) ? strcmp($x1077, $x1078) < 0 : (!is_nan($x1080 = JS::toNumber($x1077, $global)) && !is_nan($x1081 = JS::toNumber($x1078, $global)) && $x1080 < $x1081));
if (!JS::toBoolean($x1079, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1083 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 329, 22, '<image>/04_array.js');
$_TypeError =& $x1083[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1083;
$x1084 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1085 = $x1084($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1085->class) && $x1085->class === 'Error' && !isset($x1085->properties['file']) && !isset($x1085->properties['line']) && !isset($x1085->properties['column'])) {$x1085->properties['file'] = '<image>/04_array.js';$x1085->properties['line'] = 329;$x1085->properties['column'] = 22;$x1085->attributes['file'] = $x1085->attributes['line'] = $x1085->attributes['column'] = 0; }
throw new JSException($x1085, 329, 22, '<image>/04_array.js');
}
$x1082 = JS::toObject($_callbackFn, $global);
unset($x1086, $W1086, $S1086, $U1086);
$x1087 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1082, JS::toString('call', $global), 329, 22, '<image>/04_array.js');
$x1086 =& $x1087[0]; list(,$W1086,$S1086,$U1086) = $x1087;
unset($x1088, $W1088, $S1088, $U1088);
$x1089 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 329, 36, '<image>/04_array.js');
$x1088 =& $x1089[0]; list(,$W1088,$S1088,$U1088) = $x1089;
if (!(is_object($x1086) && isset($x1086->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1092 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 329, 22, '<image>/04_array.js');
$_TypeError =& $x1092[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1092;
$x1093 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1094 = $x1093($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1094->class) && $x1094->class === 'Error' && !isset($x1094->properties['file']) && !isset($x1094->properties['line']) && !isset($x1094->properties['column'])) {$x1094->properties['file'] = '<image>/04_array.js';$x1094->properties['line'] = 329;$x1094->properties['column'] = 22;$x1094->attributes['file'] = $x1094->attributes['line'] = $x1094->attributes['column'] = 0; }
throw new JSException($x1094, 329, 22, '<image>/04_array.js');
}
$x1090 = $x1086->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1091 = $x1090($global, $x1082, $x1086, array($_thisArg, $x1088, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1091, $global)) {

return true;;
};
};
return false;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1059=&$scope->properties[\'arguments\'];$x1059->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1059->properties[$i]=$args[$i];$x1059->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1063=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),324,6,\'<image>/04_array.js\');$_arguments=&$x1063[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1063;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1064=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),324,6,\'<image>/04_array.js\');$_ReferenceError=&$x1064[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1064;$x1065=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',324,6);$x1066=$x1065($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1066->class)&&$x1066->class===\'Error\'&&!isset($x1066->properties[\'file\'])&&!isset($x1066->properties[\'line\'])&&!isset($x1066->properties[\'column\'])){$x1066->properties[\'file\']=\'<image>/04_array.js\';$x1066->properties[\'line\']=324;$x1066->properties[\'column\']=6;$x1066->attributes[\'file\']=$x1066->attributes[\'line\']=$x1066->attributes[\'column\']=0;}throw new JSException($x1066,324,6,\'<image>/04_array.js\');}unset($x1067,$W1067,$S1067,$U1067);$x1068=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),324,15,\'<image>/04_array.js\');$x1067=&$x1068[0];list(,$W1067,$S1067,$U1067)=$x1068;$x1060=JS::toPrimitive($x1067,$global);$x1061=JS::toPrimitive(1,$global);$x1062=(is_string($x1061)&&is_string($x1060)?strcmp($x1061,$x1060)<0:(!is_nan($x1069=JS::toNumber($x1061,$global))&&!is_nan($x1070=JS::toNumber($x1060,$global))&&$x1069<$x1070));if(JS::toBoolean($x1062,$global)){unset($x1071,$W1071,$S1071,$U1071);$x1072=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),325,22,\'<image>/04_array.js\');$x1071=&$x1072[0];list(,$W1071,$S1071,$U1071)=$x1072;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1071;}for($x1073=0;;++$x1073){if($x1073===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1074,$W1074,$S1074,$U1074);$x1075=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),328,26,\'<image>/04_array.js\');$x1074=&$x1075[0];list(,$W1074,$S1074,$U1074)=$x1075;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1074;}if($x1073!==0){$x1076=++$_i;}$x1077=JS::toPrimitive($_i,$global);$x1078=JS::toPrimitive($_l,$global);$x1079=(is_string($x1077)&&is_string($x1078)?strcmp($x1077,$x1078)<0:(!is_nan($x1080=JS::toNumber($x1077,$global))&&!is_nan($x1081=JS::toNumber($x1078,$global))&&$x1080<$x1081));if(!JS::toBoolean($x1079,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1083=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),329,22,\'<image>/04_array.js\');$_TypeError=&$x1083[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1083;$x1084=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1085=$x1084($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1085->class)&&$x1085->class===\'Error\'&&!isset($x1085->properties[\'file\'])&&!isset($x1085->properties[\'line\'])&&!isset($x1085->properties[\'column\'])){$x1085->properties[\'file\']=\'<image>/04_array.js\';$x1085->properties[\'line\']=329;$x1085->properties[\'column\']=22;$x1085->attributes[\'file\']=$x1085->attributes[\'line\']=$x1085->attributes[\'column\']=0;}throw new JSException($x1085,329,22,\'<image>/04_array.js\');}$x1082=JS::toObject($_callbackFn,$global);unset($x1086,$W1086,$S1086,$U1086);$x1087=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1082,JS::toString(\'call\',$global),329,22,\'<image>/04_array.js\');$x1086=&$x1087[0];list(,$W1086,$S1086,$U1086)=$x1087;unset($x1088,$W1088,$S1088,$U1088);$x1089=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),329,36,\'<image>/04_array.js\');$x1088=&$x1089[0];list(,$W1088,$S1088,$U1088)=$x1089;if(!(is_object($x1086)&&isset($x1086->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1092=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),329,22,\'<image>/04_array.js\');$_TypeError=&$x1092[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1092;$x1093=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1094=$x1093($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1094->class)&&$x1094->class===\'Error\'&&!isset($x1094->properties[\'file\'])&&!isset($x1094->properties[\'line\'])&&!isset($x1094->properties[\'column\'])){$x1094->properties[\'file\']=\'<image>/04_array.js\';$x1094->properties[\'line\']=329;$x1094->properties[\'column\']=22;$x1094->attributes[\'file\']=$x1094->attributes[\'line\']=$x1094->attributes[\'column\']=0;}throw new JSException($x1094,329,22,\'<image>/04_array.js\');}$x1090=$x1086->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1091=$x1090($global,$x1082,$x1086,array($_thisArg,$x1088,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1091,$global)){return true;}}return false;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_22($global, $leThis, $fn, $args, $constructor = FALSE) {

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
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1112 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 340, 6, '<image>/04_array.js');
$_arguments =& $x1112[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1112;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1113 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 340, 6, '<image>/04_array.js');
$_ReferenceError =& $x1113[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1113;
$x1114 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 340, 6);
$x1115 = $x1114($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1115->class) && $x1115->class === 'Error' && !isset($x1115->properties['file']) && !isset($x1115->properties['line']) && !isset($x1115->properties['column'])) {$x1115->properties['file'] = '<image>/04_array.js';$x1115->properties['line'] = 340;$x1115->properties['column'] = 6;$x1115->attributes['file'] = $x1115->attributes['line'] = $x1115->attributes['column'] = 0; }
throw new JSException($x1115, 340, 6, '<image>/04_array.js');
}
unset($x1116, $W1116, $S1116, $U1116);
$x1117 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 340, 15, '<image>/04_array.js');
$x1116 =& $x1117[0]; list(,$W1116,$S1116,$U1116) = $x1117;
$x1109 = JS::toPrimitive($x1116, $global);
$x1110 = JS::toPrimitive(1, $global);
$x1111 = (is_string($x1110) && is_string($x1109) ? strcmp($x1110, $x1109) < 0 : (!is_nan($x1118 = JS::toNumber($x1110, $global)) && !is_nan($x1119 = JS::toNumber($x1109, $global)) && $x1118 < $x1119));
if (JS::toBoolean($x1111, $global)) {
unset($x1120, $W1120, $S1120, $U1120);
$x1121 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 341, 22, '<image>/04_array.js');
$x1120 =& $x1121[0]; list(,$W1120,$S1120,$U1120) = $x1121;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1120;;
};
for ($x1122 = 0;; ++$x1122) {
if ($x1122 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1123, $W1123, $S1123, $U1123);
$x1124 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 344, 26, '<image>/04_array.js');
$x1123 =& $x1124[0]; list(,$W1123,$S1123,$U1123) = $x1124;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1123;
}
if ($x1122 !== 0) {
$x1125 = ++$_i;
}
$x1126 = JS::toPrimitive($_i, $global);
$x1127 = JS::toPrimitive($_l, $global);
$x1128 = (is_string($x1126) && is_string($x1127) ? strcmp($x1126, $x1127) < 0 : (!is_nan($x1129 = JS::toNumber($x1126, $global)) && !is_nan($x1130 = JS::toNumber($x1127, $global)) && $x1129 < $x1130));
if (!JS::toBoolean($x1128, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1132 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 345, 18, '<image>/04_array.js');
$_TypeError =& $x1132[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1132;
$x1133 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1134 = $x1133($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1134->class) && $x1134->class === 'Error' && !isset($x1134->properties['file']) && !isset($x1134->properties['line']) && !isset($x1134->properties['column'])) {$x1134->properties['file'] = '<image>/04_array.js';$x1134->properties['line'] = 345;$x1134->properties['column'] = 18;$x1134->attributes['file'] = $x1134->attributes['line'] = $x1134->attributes['column'] = 0; }
throw new JSException($x1134, 345, 18, '<image>/04_array.js');
}
$x1131 = JS::toObject($_callbackFn, $global);
unset($x1135, $W1135, $S1135, $U1135);
$x1136 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1131, JS::toString('call', $global), 345, 18, '<image>/04_array.js');
$x1135 =& $x1136[0]; list(,$W1135,$S1135,$U1135) = $x1136;
unset($x1137, $W1137, $S1137, $U1137);
$x1138 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 345, 32, '<image>/04_array.js');
$x1137 =& $x1138[0]; list(,$W1137,$S1137,$U1137) = $x1138;
if (!(is_object($x1135) && isset($x1135->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1141 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 345, 18, '<image>/04_array.js');
$_TypeError =& $x1141[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1141;
$x1142 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1143 = $x1142($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1143->class) && $x1143->class === 'Error' && !isset($x1143->properties['file']) && !isset($x1143->properties['line']) && !isset($x1143->properties['column'])) {$x1143->properties['file'] = '<image>/04_array.js';$x1143->properties['line'] = 345;$x1143->properties['column'] = 18;$x1143->attributes['file'] = $x1143->attributes['line'] = $x1143->attributes['column'] = 0; }
throw new JSException($x1143, 345, 18, '<image>/04_array.js');
}
$x1139 = $x1135->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1140 = $x1139($global, $x1131, $x1135, array($_thisArg, $x1137, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1108=&$scope->properties[\'arguments\'];$x1108->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1108->properties[$i]=$args[$i];$x1108->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1112=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),340,6,\'<image>/04_array.js\');$_arguments=&$x1112[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1112;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1113=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),340,6,\'<image>/04_array.js\');$_ReferenceError=&$x1113[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1113;$x1114=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',340,6);$x1115=$x1114($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1115->class)&&$x1115->class===\'Error\'&&!isset($x1115->properties[\'file\'])&&!isset($x1115->properties[\'line\'])&&!isset($x1115->properties[\'column\'])){$x1115->properties[\'file\']=\'<image>/04_array.js\';$x1115->properties[\'line\']=340;$x1115->properties[\'column\']=6;$x1115->attributes[\'file\']=$x1115->attributes[\'line\']=$x1115->attributes[\'column\']=0;}throw new JSException($x1115,340,6,\'<image>/04_array.js\');}unset($x1116,$W1116,$S1116,$U1116);$x1117=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),340,15,\'<image>/04_array.js\');$x1116=&$x1117[0];list(,$W1116,$S1116,$U1116)=$x1117;$x1109=JS::toPrimitive($x1116,$global);$x1110=JS::toPrimitive(1,$global);$x1111=(is_string($x1110)&&is_string($x1109)?strcmp($x1110,$x1109)<0:(!is_nan($x1118=JS::toNumber($x1110,$global))&&!is_nan($x1119=JS::toNumber($x1109,$global))&&$x1118<$x1119));if(JS::toBoolean($x1111,$global)){unset($x1120,$W1120,$S1120,$U1120);$x1121=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),341,22,\'<image>/04_array.js\');$x1120=&$x1121[0];list(,$W1120,$S1120,$U1120)=$x1121;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1120;}for($x1122=0;;++$x1122){if($x1122===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1123,$W1123,$S1123,$U1123);$x1124=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),344,26,\'<image>/04_array.js\');$x1123=&$x1124[0];list(,$W1123,$S1123,$U1123)=$x1124;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1123;}if($x1122!==0){$x1125=++$_i;}$x1126=JS::toPrimitive($_i,$global);$x1127=JS::toPrimitive($_l,$global);$x1128=(is_string($x1126)&&is_string($x1127)?strcmp($x1126,$x1127)<0:(!is_nan($x1129=JS::toNumber($x1126,$global))&&!is_nan($x1130=JS::toNumber($x1127,$global))&&$x1129<$x1130));if(!JS::toBoolean($x1128,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1132=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),345,18,\'<image>/04_array.js\');$_TypeError=&$x1132[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1132;$x1133=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1134=$x1133($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1134->class)&&$x1134->class===\'Error\'&&!isset($x1134->properties[\'file\'])&&!isset($x1134->properties[\'line\'])&&!isset($x1134->properties[\'column\'])){$x1134->properties[\'file\']=\'<image>/04_array.js\';$x1134->properties[\'line\']=345;$x1134->properties[\'column\']=18;$x1134->attributes[\'file\']=$x1134->attributes[\'line\']=$x1134->attributes[\'column\']=0;}throw new JSException($x1134,345,18,\'<image>/04_array.js\');}$x1131=JS::toObject($_callbackFn,$global);unset($x1135,$W1135,$S1135,$U1135);$x1136=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1131,JS::toString(\'call\',$global),345,18,\'<image>/04_array.js\');$x1135=&$x1136[0];list(,$W1135,$S1135,$U1135)=$x1136;unset($x1137,$W1137,$S1137,$U1137);$x1138=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),345,32,\'<image>/04_array.js\');$x1137=&$x1138[0];list(,$W1137,$S1137,$U1137)=$x1138;if(!(is_object($x1135)&&isset($x1135->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1141=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),345,18,\'<image>/04_array.js\');$_TypeError=&$x1141[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1141;$x1142=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1143=$x1142($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1143->class)&&$x1143->class===\'Error\'&&!isset($x1143->properties[\'file\'])&&!isset($x1143->properties[\'line\'])&&!isset($x1143->properties[\'column\'])){$x1143->properties[\'file\']=\'<image>/04_array.js\';$x1143->properties[\'line\']=345;$x1143->properties[\'column\']=18;$x1143->attributes[\'file\']=$x1143->attributes[\'line\']=$x1143->attributes[\'column\']=0;}throw new JSException($x1143,345,18,\'<image>/04_array.js\');}$x1139=$x1135->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1140=$x1139($global,$x1131,$x1135,array($_thisArg,$x1137,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1157 =& $scope->properties['arguments'];
$x1157->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1157->properties[$i] = $args[$i];
$x1157->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1158 = clone JS::$arrayTemplate;
$x1158->properties['length'] = 0;
$x1158->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1158;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1162 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 352, 6, '<image>/04_array.js');
$_arguments =& $x1162[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1162;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1163 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 352, 6, '<image>/04_array.js');
$_ReferenceError =& $x1163[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1163;
$x1164 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 352, 6);
$x1165 = $x1164($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1165->class) && $x1165->class === 'Error' && !isset($x1165->properties['file']) && !isset($x1165->properties['line']) && !isset($x1165->properties['column'])) {$x1165->properties['file'] = '<image>/04_array.js';$x1165->properties['line'] = 352;$x1165->properties['column'] = 6;$x1165->attributes['file'] = $x1165->attributes['line'] = $x1165->attributes['column'] = 0; }
throw new JSException($x1165, 352, 6, '<image>/04_array.js');
}
unset($x1166, $W1166, $S1166, $U1166);
$x1167 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 352, 15, '<image>/04_array.js');
$x1166 =& $x1167[0]; list(,$W1166,$S1166,$U1166) = $x1167;
$x1159 = JS::toPrimitive($x1166, $global);
$x1160 = JS::toPrimitive(1, $global);
$x1161 = (is_string($x1160) && is_string($x1159) ? strcmp($x1160, $x1159) < 0 : (!is_nan($x1168 = JS::toNumber($x1160, $global)) && !is_nan($x1169 = JS::toNumber($x1159, $global)) && $x1168 < $x1169));
if (JS::toBoolean($x1161, $global)) {
unset($x1170, $W1170, $S1170, $U1170);
$x1171 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 353, 22, '<image>/04_array.js');
$x1170 =& $x1171[0]; list(,$W1170,$S1170,$U1170) = $x1171;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1170;;
};
for ($x1172 = 0;; ++$x1172) {
if ($x1172 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1173, $W1173, $S1173, $U1173);
$x1174 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 356, 26, '<image>/04_array.js');
$x1173 =& $x1174[0]; list(,$W1173,$S1173,$U1173) = $x1174;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1173;
}
if ($x1172 !== 0) {
$x1175 = ++$_i;
}
$x1176 = JS::toPrimitive($_i, $global);
$x1177 = JS::toPrimitive($_l, $global);
$x1178 = (is_string($x1176) && is_string($x1177) ? strcmp($x1176, $x1177) < 0 : (!is_nan($x1179 = JS::toNumber($x1176, $global)) && !is_nan($x1180 = JS::toNumber($x1177, $global)) && $x1179 < $x1180));
if (!JS::toBoolean($x1178, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1182 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 19, '<image>/04_array.js');
$_TypeError =& $x1182[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1182;
$x1183 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1184 = $x1183($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1184->class) && $x1184->class === 'Error' && !isset($x1184->properties['file']) && !isset($x1184->properties['line']) && !isset($x1184->properties['column'])) {$x1184->properties['file'] = '<image>/04_array.js';$x1184->properties['line'] = 357;$x1184->properties['column'] = 19;$x1184->attributes['file'] = $x1184->attributes['line'] = $x1184->attributes['column'] = 0; }
throw new JSException($x1184, 357, 19, '<image>/04_array.js');
}
$x1181 = JS::toObject($_returnArray, $global);
unset($x1185, $W1185, $S1185, $U1185);
$x1186 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1181, JS::toString('push', $global), 357, 19, '<image>/04_array.js');
$x1185 =& $x1186[0]; list(,$W1185,$S1185,$U1185) = $x1186;
if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1188 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 35, '<image>/04_array.js');
$_TypeError =& $x1188[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1188;
$x1189 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1190 = $x1189($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1190->class) && $x1190->class === 'Error' && !isset($x1190->properties['file']) && !isset($x1190->properties['line']) && !isset($x1190->properties['column'])) {$x1190->properties['file'] = '<image>/04_array.js';$x1190->properties['line'] = 357;$x1190->properties['column'] = 35;$x1190->attributes['file'] = $x1190->attributes['line'] = $x1190->attributes['column'] = 0; }
throw new JSException($x1190, 357, 35, '<image>/04_array.js');
}
$x1187 = JS::toObject($_callbackFn, $global);
unset($x1191, $W1191, $S1191, $U1191);
$x1192 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1187, JS::toString('call', $global), 357, 35, '<image>/04_array.js');
$x1191 =& $x1192[0]; list(,$W1191,$S1191,$U1191) = $x1192;
unset($x1193, $W1193, $S1193, $U1193);
$x1194 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 357, 49, '<image>/04_array.js');
$x1193 =& $x1194[0]; list(,$W1193,$S1193,$U1193) = $x1194;
if (!(is_object($x1191) && isset($x1191->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1197 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 35, '<image>/04_array.js');
$_TypeError =& $x1197[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1197;
$x1198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1199 = $x1198($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1199->class) && $x1199->class === 'Error' && !isset($x1199->properties['file']) && !isset($x1199->properties['line']) && !isset($x1199->properties['column'])) {$x1199->properties['file'] = '<image>/04_array.js';$x1199->properties['line'] = 357;$x1199->properties['column'] = 35;$x1199->attributes['file'] = $x1199->attributes['line'] = $x1199->attributes['column'] = 0; }
throw new JSException($x1199, 357, 35, '<image>/04_array.js');
}
$x1195 = $x1191->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1196 = $x1195($global, $x1187, $x1191, array($_thisArg, $x1193, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x1185) && isset($x1185->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1202 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 19, '<image>/04_array.js');
$_TypeError =& $x1202[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1202;
$x1203 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1204 = $x1203($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1204->class) && $x1204->class === 'Error' && !isset($x1204->properties['file']) && !isset($x1204->properties['line']) && !isset($x1204->properties['column'])) {$x1204->properties['file'] = '<image>/04_array.js';$x1204->properties['line'] = 357;$x1204->properties['column'] = 19;$x1204->attributes['file'] = $x1204->attributes['line'] = $x1204->attributes['column'] = 0; }
throw new JSException($x1204, 357, 19, '<image>/04_array.js');
}
$x1200 = $x1185->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1201 = $x1200($global, $x1181, $x1185, array($x1196), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1157=&$scope->properties[\'arguments\'];$x1157->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1157->properties[$i]=$args[$i];$x1157->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1158=clone JS::$arrayTemplate;$x1158->properties[\'length\']=0;$x1158->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1158;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1162=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),352,6,\'<image>/04_array.js\');$_arguments=&$x1162[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1162;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1163=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),352,6,\'<image>/04_array.js\');$_ReferenceError=&$x1163[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1163;$x1164=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',352,6);$x1165=$x1164($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1165->class)&&$x1165->class===\'Error\'&&!isset($x1165->properties[\'file\'])&&!isset($x1165->properties[\'line\'])&&!isset($x1165->properties[\'column\'])){$x1165->properties[\'file\']=\'<image>/04_array.js\';$x1165->properties[\'line\']=352;$x1165->properties[\'column\']=6;$x1165->attributes[\'file\']=$x1165->attributes[\'line\']=$x1165->attributes[\'column\']=0;}throw new JSException($x1165,352,6,\'<image>/04_array.js\');}unset($x1166,$W1166,$S1166,$U1166);$x1167=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),352,15,\'<image>/04_array.js\');$x1166=&$x1167[0];list(,$W1166,$S1166,$U1166)=$x1167;$x1159=JS::toPrimitive($x1166,$global);$x1160=JS::toPrimitive(1,$global);$x1161=(is_string($x1160)&&is_string($x1159)?strcmp($x1160,$x1159)<0:(!is_nan($x1168=JS::toNumber($x1160,$global))&&!is_nan($x1169=JS::toNumber($x1159,$global))&&$x1168<$x1169));if(JS::toBoolean($x1161,$global)){unset($x1170,$W1170,$S1170,$U1170);$x1171=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),353,22,\'<image>/04_array.js\');$x1170=&$x1171[0];list(,$W1170,$S1170,$U1170)=$x1171;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1170;}for($x1172=0;;++$x1172){if($x1172===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1173,$W1173,$S1173,$U1173);$x1174=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),356,26,\'<image>/04_array.js\');$x1173=&$x1174[0];list(,$W1173,$S1173,$U1173)=$x1174;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1173;}if($x1172!==0){$x1175=++$_i;}$x1176=JS::toPrimitive($_i,$global);$x1177=JS::toPrimitive($_l,$global);$x1178=(is_string($x1176)&&is_string($x1177)?strcmp($x1176,$x1177)<0:(!is_nan($x1179=JS::toNumber($x1176,$global))&&!is_nan($x1180=JS::toNumber($x1177,$global))&&$x1179<$x1180));if(!JS::toBoolean($x1178,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1182=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,19,\'<image>/04_array.js\');$_TypeError=&$x1182[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1182;$x1183=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1184=$x1183($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1184->class)&&$x1184->class===\'Error\'&&!isset($x1184->properties[\'file\'])&&!isset($x1184->properties[\'line\'])&&!isset($x1184->properties[\'column\'])){$x1184->properties[\'file\']=\'<image>/04_array.js\';$x1184->properties[\'line\']=357;$x1184->properties[\'column\']=19;$x1184->attributes[\'file\']=$x1184->attributes[\'line\']=$x1184->attributes[\'column\']=0;}throw new JSException($x1184,357,19,\'<image>/04_array.js\');}$x1181=JS::toObject($_returnArray,$global);unset($x1185,$W1185,$S1185,$U1185);$x1186=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1181,JS::toString(\'push\',$global),357,19,\'<image>/04_array.js\');$x1185=&$x1186[0];list(,$W1185,$S1185,$U1185)=$x1186;if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1188=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,35,\'<image>/04_array.js\');$_TypeError=&$x1188[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1188;$x1189=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1190=$x1189($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1190->class)&&$x1190->class===\'Error\'&&!isset($x1190->properties[\'file\'])&&!isset($x1190->properties[\'line\'])&&!isset($x1190->properties[\'column\'])){$x1190->properties[\'file\']=\'<image>/04_array.js\';$x1190->properties[\'line\']=357;$x1190->properties[\'column\']=35;$x1190->attributes[\'file\']=$x1190->attributes[\'line\']=$x1190->attributes[\'column\']=0;}throw new JSException($x1190,357,35,\'<image>/04_array.js\');}$x1187=JS::toObject($_callbackFn,$global);unset($x1191,$W1191,$S1191,$U1191);$x1192=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1187,JS::toString(\'call\',$global),357,35,\'<image>/04_array.js\');$x1191=&$x1192[0];list(,$W1191,$S1191,$U1191)=$x1192;unset($x1193,$W1193,$S1193,$U1193);$x1194=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),357,49,\'<image>/04_array.js\');$x1193=&$x1194[0];list(,$W1193,$S1193,$U1193)=$x1194;if(!(is_object($x1191)&&isset($x1191->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1197=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,35,\'<image>/04_array.js\');$_TypeError=&$x1197[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1197;$x1198=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1199=$x1198($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1199->class)&&$x1199->class===\'Error\'&&!isset($x1199->properties[\'file\'])&&!isset($x1199->properties[\'line\'])&&!isset($x1199->properties[\'column\'])){$x1199->properties[\'file\']=\'<image>/04_array.js\';$x1199->properties[\'line\']=357;$x1199->properties[\'column\']=35;$x1199->attributes[\'file\']=$x1199->attributes[\'line\']=$x1199->attributes[\'column\']=0;}throw new JSException($x1199,357,35,\'<image>/04_array.js\');}$x1195=$x1191->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1196=$x1195($global,$x1187,$x1191,array($_thisArg,$x1193,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x1185)&&isset($x1185->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1202=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,19,\'<image>/04_array.js\');$_TypeError=&$x1202[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1202;$x1203=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1204=$x1203($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1204->class)&&$x1204->class===\'Error\'&&!isset($x1204->properties[\'file\'])&&!isset($x1204->properties[\'line\'])&&!isset($x1204->properties[\'column\'])){$x1204->properties[\'file\']=\'<image>/04_array.js\';$x1204->properties[\'line\']=357;$x1204->properties[\'column\']=19;$x1204->attributes[\'file\']=$x1204->attributes[\'line\']=$x1204->attributes[\'column\']=0;}throw new JSException($x1204,357,19,\'<image>/04_array.js\');}$x1200=$x1185->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1201=$x1200($global,$x1181,$x1185,array($x1196),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1218 =& $scope->properties['arguments'];
$x1218->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1218->properties[$i] = $args[$i];
$x1218->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1219 = clone JS::$arrayTemplate;
$x1219->properties['length'] = 0;
$x1219->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1219;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1223 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 366, 6, '<image>/04_array.js');
$_arguments =& $x1223[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1223;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1224 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 366, 6, '<image>/04_array.js');
$_ReferenceError =& $x1224[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1224;
$x1225 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 366, 6);
$x1226 = $x1225($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1226->class) && $x1226->class === 'Error' && !isset($x1226->properties['file']) && !isset($x1226->properties['line']) && !isset($x1226->properties['column'])) {$x1226->properties['file'] = '<image>/04_array.js';$x1226->properties['line'] = 366;$x1226->properties['column'] = 6;$x1226->attributes['file'] = $x1226->attributes['line'] = $x1226->attributes['column'] = 0; }
throw new JSException($x1226, 366, 6, '<image>/04_array.js');
}
unset($x1227, $W1227, $S1227, $U1227);
$x1228 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 366, 15, '<image>/04_array.js');
$x1227 =& $x1228[0]; list(,$W1227,$S1227,$U1227) = $x1228;
$x1220 = JS::toPrimitive($x1227, $global);
$x1221 = JS::toPrimitive(1, $global);
$x1222 = (is_string($x1221) && is_string($x1220) ? strcmp($x1221, $x1220) < 0 : (!is_nan($x1229 = JS::toNumber($x1221, $global)) && !is_nan($x1230 = JS::toNumber($x1220, $global)) && $x1229 < $x1230));
if (JS::toBoolean($x1222, $global)) {
unset($x1231, $W1231, $S1231, $U1231);
$x1232 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 367, 22, '<image>/04_array.js');
$x1231 =& $x1232[0]; list(,$W1231,$S1231,$U1231) = $x1232;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1231;;
};
for ($x1233 = 0;; ++$x1233) {
if ($x1233 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1234, $W1234, $S1234, $U1234);
$x1235 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 370, 26, '<image>/04_array.js');
$x1234 =& $x1235[0]; list(,$W1234,$S1234,$U1234) = $x1235;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1234;
}
if ($x1233 !== 0) {
$x1236 = ++$_i;
}
$x1237 = JS::toPrimitive($_i, $global);
$x1238 = JS::toPrimitive($_l, $global);
$x1239 = (is_string($x1237) && is_string($x1238) ? strcmp($x1237, $x1238) < 0 : (!is_nan($x1240 = JS::toNumber($x1237, $global)) && !is_nan($x1241 = JS::toNumber($x1238, $global)) && $x1240 < $x1241));
if (!JS::toBoolean($x1239, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1243 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 371, 22, '<image>/04_array.js');
$_TypeError =& $x1243[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1243;
$x1244 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1245 = $x1244($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1245->class) && $x1245->class === 'Error' && !isset($x1245->properties['file']) && !isset($x1245->properties['line']) && !isset($x1245->properties['column'])) {$x1245->properties['file'] = '<image>/04_array.js';$x1245->properties['line'] = 371;$x1245->properties['column'] = 22;$x1245->attributes['file'] = $x1245->attributes['line'] = $x1245->attributes['column'] = 0; }
throw new JSException($x1245, 371, 22, '<image>/04_array.js');
}
$x1242 = JS::toObject($_callbackFn, $global);
unset($x1246, $W1246, $S1246, $U1246);
$x1247 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1242, JS::toString('call', $global), 371, 22, '<image>/04_array.js');
$x1246 =& $x1247[0]; list(,$W1246,$S1246,$U1246) = $x1247;
unset($x1248, $W1248, $S1248, $U1248);
$x1249 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 371, 36, '<image>/04_array.js');
$x1248 =& $x1249[0]; list(,$W1248,$S1248,$U1248) = $x1249;
if (!(is_object($x1246) && isset($x1246->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1252 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 371, 22, '<image>/04_array.js');
$_TypeError =& $x1252[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1252;
$x1253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1254 = $x1253($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1254->class) && $x1254->class === 'Error' && !isset($x1254->properties['file']) && !isset($x1254->properties['line']) && !isset($x1254->properties['column'])) {$x1254->properties['file'] = '<image>/04_array.js';$x1254->properties['line'] = 371;$x1254->properties['column'] = 22;$x1254->attributes['file'] = $x1254->attributes['line'] = $x1254->attributes['column'] = 0; }
throw new JSException($x1254, 371, 22, '<image>/04_array.js');
}
$x1250 = $x1246->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1251 = $x1250($global, $x1242, $x1246, array($_thisArg, $x1248, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1251, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1256 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 372, 20, '<image>/04_array.js');
$_TypeError =& $x1256[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1256;
$x1257 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1258 = $x1257($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1258->class) && $x1258->class === 'Error' && !isset($x1258->properties['file']) && !isset($x1258->properties['line']) && !isset($x1258->properties['column'])) {$x1258->properties['file'] = '<image>/04_array.js';$x1258->properties['line'] = 372;$x1258->properties['column'] = 20;$x1258->attributes['file'] = $x1258->attributes['line'] = $x1258->attributes['column'] = 0; }
throw new JSException($x1258, 372, 20, '<image>/04_array.js');
}
$x1255 = JS::toObject($_returnArray, $global);
unset($x1259, $W1259, $S1259, $U1259);
$x1260 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1255, JS::toString('push', $global), 372, 20, '<image>/04_array.js');
$x1259 =& $x1260[0]; list(,$W1259,$S1259,$U1259) = $x1260;
unset($x1261, $W1261, $S1261, $U1261);
$x1262 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 372, 25, '<image>/04_array.js');
$x1261 =& $x1262[0]; list(,$W1261,$S1261,$U1261) = $x1262;
if (!(is_object($x1259) && isset($x1259->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1265 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 372, 20, '<image>/04_array.js');
$_TypeError =& $x1265[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1265;
$x1266 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1267 = $x1266($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1267->class) && $x1267->class === 'Error' && !isset($x1267->properties['file']) && !isset($x1267->properties['line']) && !isset($x1267->properties['column'])) {$x1267->properties['file'] = '<image>/04_array.js';$x1267->properties['line'] = 372;$x1267->properties['column'] = 20;$x1267->attributes['file'] = $x1267->attributes['line'] = $x1267->attributes['column'] = 0; }
throw new JSException($x1267, 372, 20, '<image>/04_array.js');
}
$x1263 = $x1259->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1264 = $x1263($global, $x1255, $x1259, array($x1261), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1218=&$scope->properties[\'arguments\'];$x1218->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1218->properties[$i]=$args[$i];$x1218->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1219=clone JS::$arrayTemplate;$x1219->properties[\'length\']=0;$x1219->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1219;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1223=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),366,6,\'<image>/04_array.js\');$_arguments=&$x1223[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1223;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1224=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),366,6,\'<image>/04_array.js\');$_ReferenceError=&$x1224[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1224;$x1225=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',366,6);$x1226=$x1225($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1226->class)&&$x1226->class===\'Error\'&&!isset($x1226->properties[\'file\'])&&!isset($x1226->properties[\'line\'])&&!isset($x1226->properties[\'column\'])){$x1226->properties[\'file\']=\'<image>/04_array.js\';$x1226->properties[\'line\']=366;$x1226->properties[\'column\']=6;$x1226->attributes[\'file\']=$x1226->attributes[\'line\']=$x1226->attributes[\'column\']=0;}throw new JSException($x1226,366,6,\'<image>/04_array.js\');}unset($x1227,$W1227,$S1227,$U1227);$x1228=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),366,15,\'<image>/04_array.js\');$x1227=&$x1228[0];list(,$W1227,$S1227,$U1227)=$x1228;$x1220=JS::toPrimitive($x1227,$global);$x1221=JS::toPrimitive(1,$global);$x1222=(is_string($x1221)&&is_string($x1220)?strcmp($x1221,$x1220)<0:(!is_nan($x1229=JS::toNumber($x1221,$global))&&!is_nan($x1230=JS::toNumber($x1220,$global))&&$x1229<$x1230));if(JS::toBoolean($x1222,$global)){unset($x1231,$W1231,$S1231,$U1231);$x1232=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),367,22,\'<image>/04_array.js\');$x1231=&$x1232[0];list(,$W1231,$S1231,$U1231)=$x1232;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1231;}for($x1233=0;;++$x1233){if($x1233===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1234,$W1234,$S1234,$U1234);$x1235=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),370,26,\'<image>/04_array.js\');$x1234=&$x1235[0];list(,$W1234,$S1234,$U1234)=$x1235;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1234;}if($x1233!==0){$x1236=++$_i;}$x1237=JS::toPrimitive($_i,$global);$x1238=JS::toPrimitive($_l,$global);$x1239=(is_string($x1237)&&is_string($x1238)?strcmp($x1237,$x1238)<0:(!is_nan($x1240=JS::toNumber($x1237,$global))&&!is_nan($x1241=JS::toNumber($x1238,$global))&&$x1240<$x1241));if(!JS::toBoolean($x1239,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1243=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),371,22,\'<image>/04_array.js\');$_TypeError=&$x1243[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1243;$x1244=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1245=$x1244($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1245->class)&&$x1245->class===\'Error\'&&!isset($x1245->properties[\'file\'])&&!isset($x1245->properties[\'line\'])&&!isset($x1245->properties[\'column\'])){$x1245->properties[\'file\']=\'<image>/04_array.js\';$x1245->properties[\'line\']=371;$x1245->properties[\'column\']=22;$x1245->attributes[\'file\']=$x1245->attributes[\'line\']=$x1245->attributes[\'column\']=0;}throw new JSException($x1245,371,22,\'<image>/04_array.js\');}$x1242=JS::toObject($_callbackFn,$global);unset($x1246,$W1246,$S1246,$U1246);$x1247=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1242,JS::toString(\'call\',$global),371,22,\'<image>/04_array.js\');$x1246=&$x1247[0];list(,$W1246,$S1246,$U1246)=$x1247;unset($x1248,$W1248,$S1248,$U1248);$x1249=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),371,36,\'<image>/04_array.js\');$x1248=&$x1249[0];list(,$W1248,$S1248,$U1248)=$x1249;if(!(is_object($x1246)&&isset($x1246->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1252=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),371,22,\'<image>/04_array.js\');$_TypeError=&$x1252[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1252;$x1253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1254=$x1253($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1254->class)&&$x1254->class===\'Error\'&&!isset($x1254->properties[\'file\'])&&!isset($x1254->properties[\'line\'])&&!isset($x1254->properties[\'column\'])){$x1254->properties[\'file\']=\'<image>/04_array.js\';$x1254->properties[\'line\']=371;$x1254->properties[\'column\']=22;$x1254->attributes[\'file\']=$x1254->attributes[\'line\']=$x1254->attributes[\'column\']=0;}throw new JSException($x1254,371,22,\'<image>/04_array.js\');}$x1250=$x1246->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1251=$x1250($global,$x1242,$x1246,array($_thisArg,$x1248,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1251,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1256=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),372,20,\'<image>/04_array.js\');$_TypeError=&$x1256[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1256;$x1257=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1258=$x1257($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1258->class)&&$x1258->class===\'Error\'&&!isset($x1258->properties[\'file\'])&&!isset($x1258->properties[\'line\'])&&!isset($x1258->properties[\'column\'])){$x1258->properties[\'file\']=\'<image>/04_array.js\';$x1258->properties[\'line\']=372;$x1258->properties[\'column\']=20;$x1258->attributes[\'file\']=$x1258->attributes[\'line\']=$x1258->attributes[\'column\']=0;}throw new JSException($x1258,372,20,\'<image>/04_array.js\');}$x1255=JS::toObject($_returnArray,$global);unset($x1259,$W1259,$S1259,$U1259);$x1260=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1255,JS::toString(\'push\',$global),372,20,\'<image>/04_array.js\');$x1259=&$x1260[0];list(,$W1259,$S1259,$U1259)=$x1260;unset($x1261,$W1261,$S1261,$U1261);$x1262=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),372,25,\'<image>/04_array.js\');$x1261=&$x1262[0];list(,$W1261,$S1261,$U1261)=$x1262;if(!(is_object($x1259)&&isset($x1259->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1265=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),372,20,\'<image>/04_array.js\');$_TypeError=&$x1265[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1265;$x1266=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1267=$x1266($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1267->class)&&$x1267->class===\'Error\'&&!isset($x1267->properties[\'file\'])&&!isset($x1267->properties[\'line\'])&&!isset($x1267->properties[\'column\'])){$x1267->properties[\'file\']=\'<image>/04_array.js\';$x1267->properties[\'line\']=372;$x1267->properties[\'column\']=20;$x1267->attributes[\'file\']=$x1267->attributes[\'line\']=$x1267->attributes[\'column\']=0;}throw new JSException($x1267,372,20,\'<image>/04_array.js\');}$x1263=$x1259->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1264=$x1263($global,$x1255,$x1259,array($x1261),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1281 =& $scope->properties['arguments'];
$x1281->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1281->properties[$i] = $args[$i];
$x1281->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1286, $W1286, $S1286, $U1286);
$x1287 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 380, 10, '<image>/04_array.js');
$x1286 =& $x1287[0]; list(,$W1286,$S1286,$U1286) = $x1287;
$x1283 = JS::toPrimitive($x1286, $global);
$x1284 = JS::toPrimitive(1, $global);
$x1285 = (is_string($x1283) && is_string($x1284) ? strcmp($x1283, $x1284) < 0 : (!is_nan($x1288 = JS::toNumber($x1283, $global)) && !is_nan($x1289 = JS::toNumber($x1284, $global)) && $x1288 < $x1289));
$x1282 = $x1285;
if (JS::toBoolean($x1282, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1293 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 380, 25, '<image>/04_array.js');
$_arguments =& $x1293[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1293;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1294 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 380, 25, '<image>/04_array.js');
$_ReferenceError =& $x1294[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1294;
$x1295 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 380, 25);
$x1296 = $x1295($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1296->class) && $x1296->class === 'Error' && !isset($x1296->properties['file']) && !isset($x1296->properties['line']) && !isset($x1296->properties['column'])) {$x1296->properties['file'] = '<image>/04_array.js';$x1296->properties['line'] = 380;$x1296->properties['column'] = 25;$x1296->attributes['file'] = $x1296->attributes['line'] = $x1296->attributes['column'] = 0; }
throw new JSException($x1296, 380, 25, '<image>/04_array.js');
}
unset($x1297, $W1297, $S1297, $U1297);
$x1298 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 380, 34, '<image>/04_array.js');
$x1297 =& $x1298[0]; list(,$W1297,$S1297,$U1297) = $x1298;
$x1290 = JS::toPrimitive($x1297, $global);
$x1291 = JS::toPrimitive(2, $global);
$x1292 = (is_string($x1290) && is_string($x1291) ? strcmp($x1290, $x1291) < 0 : (!is_nan($x1299 = JS::toNumber($x1290, $global)) && !is_nan($x1300 = JS::toNumber($x1291, $global)) && $x1299 < $x1300));
$x1282 = $x1292; }
if (JS::toBoolean($x1282, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1303 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 381, 13, '<image>/04_array.js');
$_TypeError =& $x1303[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1303;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1304 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 381, 13, '<image>/04_array.js');
$_ReferenceError =& $x1304[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1304;
$x1305 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 13);
$x1306 = $x1305($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1306->class) && $x1306->class === 'Error' && !isset($x1306->properties['file']) && !isset($x1306->properties['line']) && !isset($x1306->properties['column'])) {$x1306->properties['file'] = '<image>/04_array.js';$x1306->properties['line'] = 381;$x1306->properties['column'] = 13;$x1306->attributes['file'] = $x1306->attributes['line'] = $x1306->attributes['column'] = 0; }
throw new JSException($x1306, 381, 13, '<image>/04_array.js');
}
$x1301 = clone JS::$objectTemplate;
unset($x1307, $W1307, $S1307, $U1307);
$x1308 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 381, 9, '<image>/04_array.js');
$x1307 =& $x1308[0]; list(,$W1307,$S1307,$U1307) = $x1308;
$x1302 = $x1307;
$x1301->prototype = $x1302;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1311 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1312 = $x1311($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1312->class) && $x1312->class === 'Error' && !isset($x1312->properties['file']) && !isset($x1312->properties['line']) && !isset($x1312->properties['column'])) {$x1312->properties['file'] = '<image>/04_array.js';$x1312->properties['line'] = 381;$x1312->properties['column'] = 9;$x1312->attributes['file'] = $x1312->attributes['line'] = $x1312->attributes['column'] = 0; }
throw new JSException($x1312, 381, 9, '<image>/04_array.js');
}
$x1309 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1310 = $x1309($global, $x1301, $_TypeError, array('Array.prototype.reduce(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1302 = $x1310;
if (is_object($x1302) && $x1302 !== JS::$undefined) { $x1301 = $x1302; }
if (isset($x1301->class) && $x1301->class === 'Error' && !isset($x1301->properties['file']) && !isset($x1301->properties['line']) && !isset($x1301->properties['column'])) {$x1301->properties['file'] = '<image>/04_array.js';$x1301->properties['line'] = 381;$x1301->properties['column'] = 3;$x1301->attributes['file'] = $x1301->attributes['line'] = $x1301->attributes['column'] = 0; }
throw new JSException($x1301, 381, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1316 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 386, 6, '<image>/04_array.js');
$_arguments =& $x1316[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1316;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1317 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 386, 6, '<image>/04_array.js');
$_ReferenceError =& $x1317[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1317;
$x1318 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 386, 6);
$x1319 = $x1318($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1319->class) && $x1319->class === 'Error' && !isset($x1319->properties['file']) && !isset($x1319->properties['line']) && !isset($x1319->properties['column'])) {$x1319->properties['file'] = '<image>/04_array.js';$x1319->properties['line'] = 386;$x1319->properties['column'] = 6;$x1319->attributes['file'] = $x1319->attributes['line'] = $x1319->attributes['column'] = 0; }
throw new JSException($x1319, 386, 6, '<image>/04_array.js');
}
unset($x1320, $W1320, $S1320, $U1320);
$x1321 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 386, 15, '<image>/04_array.js');
$x1320 =& $x1321[0]; list(,$W1320,$S1320,$U1320) = $x1321;
$x1313 = JS::toPrimitive($x1320, $global);
$x1314 = JS::toPrimitive(1, $global);
$x1315 = (is_string($x1314) && is_string($x1313) ? strcmp($x1314, $x1313) < 0 : (!is_nan($x1322 = JS::toNumber($x1314, $global)) && !is_nan($x1323 = JS::toNumber($x1313, $global)) && $x1322 < $x1323));
if (JS::toBoolean($x1315, $global)) {
unset($x1324, $W1324, $S1324, $U1324);
$x1325 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 387, 20, '<image>/04_array.js');
$x1324 =& $x1325[0]; list(,$W1324,$S1324,$U1324) = $x1325;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1324;
$x1326 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1326;;
}
else {
for ($x1327 = 0;; ++$x1327) {
if ($x1327 === 0) {
$x1328 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1328;
}
if ($x1327 !== 0) {
$x1329 = ++$_i;
}
unset($x1334, $W1334, $S1334, $U1334);
$x1335 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 391, 23, '<image>/04_array.js');
$x1334 =& $x1335[0]; list(,$W1334,$S1334,$U1334) = $x1335;
$x1331 = JS::toPrimitive($_i, $global);
$x1332 = JS::toPrimitive($x1334, $global);
$x1333 = (is_string($x1331) && is_string($x1332) ? strcmp($x1331, $x1332) < 0 : (!is_nan($x1336 = JS::toNumber($x1331, $global)) && !is_nan($x1337 = JS::toNumber($x1332, $global)) && $x1336 < $x1337));
$x1330 = $x1333;
if (JS::toBoolean($x1330, $global)) {
unset($x1339, $W1339, $S1339, $U1339);
$x1340 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 391, 38, '<image>/04_array.js');
$x1339 =& $x1340[0]; list(,$W1339,$S1339,$U1339) = $x1340;
$x1338 = (((gettype($x1339) === gettype(JS::$undefined) && $x1339 === JS::$undefined))|| (((is_float($x1339) || is_int($x1339)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1339 == JS::$undefined));
$x1330 = $x1338; }
if (!JS::toBoolean($x1330, $global)) { break; }

;
};
unset($x1341, $W1341, $S1341, $U1341);
$x1342 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 392, 15, '<image>/04_array.js');
$x1341 =& $x1342[0]; list(,$W1341,$S1341,$U1341) = $x1342;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1341;
$x1343 = JS::toPrimitive($_i, $global);
$x1344 = JS::toPrimitive(1, $global);
$x1345 = (is_string($x1343) || is_string($x1344) ? JS::toString($x1343, $global) . JS::toString($x1344, $global) : JS::toNumber($x1343, $global) + JS::toNumber($x1344, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1345;;
};
for ($x1346 = 0;; ++$x1346) {
if ($x1346 === 0) {
unset($x1347, $W1347, $S1347, $U1347);
$x1348 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 396, 19, '<image>/04_array.js');
$x1347 =& $x1348[0]; list(,$W1347,$S1347,$U1347) = $x1348;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1347;
}
if ($x1346 !== 0) {
$x1349 = ++$_i;
}
$x1350 = JS::toPrimitive($_i, $global);
$x1351 = JS::toPrimitive($_l, $global);
$x1352 = (is_string($x1350) && is_string($x1351) ? strcmp($x1350, $x1351) < 0 : (!is_nan($x1353 = JS::toNumber($x1350, $global)) && !is_nan($x1354 = JS::toNumber($x1351, $global)) && $x1353 < $x1354));
if (!JS::toBoolean($x1352, $global)) { break; }

unset($x1356, $W1356, $S1356, $U1356);
$x1357 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 397, 11, '<image>/04_array.js');
$x1356 =& $x1357[0]; list(,$W1356,$S1356,$U1356) = $x1357;
$x1355 = !(((gettype($x1356) === gettype(JS::$undefined) && $x1356 === JS::$undefined))|| (((is_float($x1356) || is_int($x1356)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1356 == JS::$undefined));
if (JS::toBoolean($x1355, $global)) {
unset($x1358, $W1358, $S1358, $U1358);
$x1359 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 398, 34, '<image>/04_array.js');
$x1358 =& $x1359[0]; list(,$W1358,$S1358,$U1358) = $x1359;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1362 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 398, 22, '<image>/04_array.js');
$_TypeError =& $x1362[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1362;
$x1363 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1364 = $x1363($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1364->class) && $x1364->class === 'Error' && !isset($x1364->properties['file']) && !isset($x1364->properties['line']) && !isset($x1364->properties['column'])) {$x1364->properties['file'] = '<image>/04_array.js';$x1364->properties['line'] = 398;$x1364->properties['column'] = 22;$x1364->attributes['file'] = $x1364->attributes['line'] = $x1364->attributes['column'] = 0; }
throw new JSException($x1364, 398, 22, '<image>/04_array.js');
}
$x1360 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1361 = $x1360($global, $global, $_callbackFn, array($_value, $x1358, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1361;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1281=&$scope->properties[\'arguments\'];$x1281->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1281->properties[$i]=$args[$i];$x1281->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1286,$W1286,$S1286,$U1286);$x1287=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),380,10,\'<image>/04_array.js\');$x1286=&$x1287[0];list(,$W1286,$S1286,$U1286)=$x1287;$x1283=JS::toPrimitive($x1286,$global);$x1284=JS::toPrimitive(1,$global);$x1285=(is_string($x1283)&&is_string($x1284)?strcmp($x1283,$x1284)<0:(!is_nan($x1288=JS::toNumber($x1283,$global))&&!is_nan($x1289=JS::toNumber($x1284,$global))&&$x1288<$x1289));$x1282=$x1285;if(JS::toBoolean($x1282,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1293=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),380,25,\'<image>/04_array.js\');$_arguments=&$x1293[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1293;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1294=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),380,25,\'<image>/04_array.js\');$_ReferenceError=&$x1294[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1294;$x1295=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',380,25);$x1296=$x1295($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1296->class)&&$x1296->class===\'Error\'&&!isset($x1296->properties[\'file\'])&&!isset($x1296->properties[\'line\'])&&!isset($x1296->properties[\'column\'])){$x1296->properties[\'file\']=\'<image>/04_array.js\';$x1296->properties[\'line\']=380;$x1296->properties[\'column\']=25;$x1296->attributes[\'file\']=$x1296->attributes[\'line\']=$x1296->attributes[\'column\']=0;}throw new JSException($x1296,380,25,\'<image>/04_array.js\');}unset($x1297,$W1297,$S1297,$U1297);$x1298=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),380,34,\'<image>/04_array.js\');$x1297=&$x1298[0];list(,$W1297,$S1297,$U1297)=$x1298;$x1290=JS::toPrimitive($x1297,$global);$x1291=JS::toPrimitive(2,$global);$x1292=(is_string($x1290)&&is_string($x1291)?strcmp($x1290,$x1291)<0:(!is_nan($x1299=JS::toNumber($x1290,$global))&&!is_nan($x1300=JS::toNumber($x1291,$global))&&$x1299<$x1300));$x1282=$x1292;}if(JS::toBoolean($x1282,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1303=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),381,13,\'<image>/04_array.js\');$_TypeError=&$x1303[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1303;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1304=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),381,13,\'<image>/04_array.js\');$_ReferenceError=&$x1304[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1304;$x1305=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,13);$x1306=$x1305($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1306->class)&&$x1306->class===\'Error\'&&!isset($x1306->properties[\'file\'])&&!isset($x1306->properties[\'line\'])&&!isset($x1306->properties[\'column\'])){$x1306->properties[\'file\']=\'<image>/04_array.js\';$x1306->properties[\'line\']=381;$x1306->properties[\'column\']=13;$x1306->attributes[\'file\']=$x1306->attributes[\'line\']=$x1306->attributes[\'column\']=0;}throw new JSException($x1306,381,13,\'<image>/04_array.js\');}$x1301=clone JS::$objectTemplate;unset($x1307,$W1307,$S1307,$U1307);$x1308=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),381,9,\'<image>/04_array.js\');$x1307=&$x1308[0];list(,$W1307,$S1307,$U1307)=$x1308;$x1302=$x1307;$x1301->prototype=$x1302;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1311=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1312=$x1311($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1312->class)&&$x1312->class===\'Error\'&&!isset($x1312->properties[\'file\'])&&!isset($x1312->properties[\'line\'])&&!isset($x1312->properties[\'column\'])){$x1312->properties[\'file\']=\'<image>/04_array.js\';$x1312->properties[\'line\']=381;$x1312->properties[\'column\']=9;$x1312->attributes[\'file\']=$x1312->attributes[\'line\']=$x1312->attributes[\'column\']=0;}throw new JSException($x1312,381,9,\'<image>/04_array.js\');}$x1309=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1310=$x1309($global,$x1301,$_TypeError,array(\'Array.prototype.reduce(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1302=$x1310;if(is_object($x1302)&&$x1302!==JS::$undefined){$x1301=$x1302;}if(isset($x1301->class)&&$x1301->class===\'Error\'&&!isset($x1301->properties[\'file\'])&&!isset($x1301->properties[\'line\'])&&!isset($x1301->properties[\'column\'])){$x1301->properties[\'file\']=\'<image>/04_array.js\';$x1301->properties[\'line\']=381;$x1301->properties[\'column\']=3;$x1301->attributes[\'file\']=$x1301->attributes[\'line\']=$x1301->attributes[\'column\']=0;}throw new JSException($x1301,381,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1316=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),386,6,\'<image>/04_array.js\');$_arguments=&$x1316[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1316;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1317=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),386,6,\'<image>/04_array.js\');$_ReferenceError=&$x1317[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1317;$x1318=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',386,6);$x1319=$x1318($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1319->class)&&$x1319->class===\'Error\'&&!isset($x1319->properties[\'file\'])&&!isset($x1319->properties[\'line\'])&&!isset($x1319->properties[\'column\'])){$x1319->properties[\'file\']=\'<image>/04_array.js\';$x1319->properties[\'line\']=386;$x1319->properties[\'column\']=6;$x1319->attributes[\'file\']=$x1319->attributes[\'line\']=$x1319->attributes[\'column\']=0;}throw new JSException($x1319,386,6,\'<image>/04_array.js\');}unset($x1320,$W1320,$S1320,$U1320);$x1321=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),386,15,\'<image>/04_array.js\');$x1320=&$x1321[0];list(,$W1320,$S1320,$U1320)=$x1321;$x1313=JS::toPrimitive($x1320,$global);$x1314=JS::toPrimitive(1,$global);$x1315=(is_string($x1314)&&is_string($x1313)?strcmp($x1314,$x1313)<0:(!is_nan($x1322=JS::toNumber($x1314,$global))&&!is_nan($x1323=JS::toNumber($x1313,$global))&&$x1322<$x1323));if(JS::toBoolean($x1315,$global)){unset($x1324,$W1324,$S1324,$U1324);$x1325=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),387,20,\'<image>/04_array.js\');$x1324=&$x1325[0];list(,$W1324,$S1324,$U1324)=$x1325;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1324;$x1326=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1326;}else{for($x1327=0;;++$x1327){if($x1327===0){$x1328=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1328;}if($x1327!==0){$x1329=++$_i;}unset($x1334,$W1334,$S1334,$U1334);$x1335=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),391,23,\'<image>/04_array.js\');$x1334=&$x1335[0];list(,$W1334,$S1334,$U1334)=$x1335;$x1331=JS::toPrimitive($_i,$global);$x1332=JS::toPrimitive($x1334,$global);$x1333=(is_string($x1331)&&is_string($x1332)?strcmp($x1331,$x1332)<0:(!is_nan($x1336=JS::toNumber($x1331,$global))&&!is_nan($x1337=JS::toNumber($x1332,$global))&&$x1336<$x1337));$x1330=$x1333;if(JS::toBoolean($x1330,$global)){unset($x1339,$W1339,$S1339,$U1339);$x1340=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),391,38,\'<image>/04_array.js\');$x1339=&$x1340[0];list(,$W1339,$S1339,$U1339)=$x1340;$x1338=(((gettype($x1339)===gettype(JS::$undefined)&&$x1339===JS::$undefined))||(((is_float($x1339)||is_int($x1339))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1339==JS::$undefined));$x1330=$x1338;}if(!JS::toBoolean($x1330,$global)){break;}}unset($x1341,$W1341,$S1341,$U1341);$x1342=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),392,15,\'<image>/04_array.js\');$x1341=&$x1342[0];list(,$W1341,$S1341,$U1341)=$x1342;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1341;$x1343=JS::toPrimitive($_i,$global);$x1344=JS::toPrimitive(1,$global);$x1345=(is_string($x1343)||is_string($x1344)?JS::toString($x1343,$global).JS::toString($x1344,$global):JS::toNumber($x1343,$global)+JS::toNumber($x1344,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1345;}for($x1346=0;;++$x1346){if($x1346===0){unset($x1347,$W1347,$S1347,$U1347);$x1348=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),396,19,\'<image>/04_array.js\');$x1347=&$x1348[0];list(,$W1347,$S1347,$U1347)=$x1348;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1347;}if($x1346!==0){$x1349=++$_i;}$x1350=JS::toPrimitive($_i,$global);$x1351=JS::toPrimitive($_l,$global);$x1352=(is_string($x1350)&&is_string($x1351)?strcmp($x1350,$x1351)<0:(!is_nan($x1353=JS::toNumber($x1350,$global))&&!is_nan($x1354=JS::toNumber($x1351,$global))&&$x1353<$x1354));if(!JS::toBoolean($x1352,$global)){break;}unset($x1356,$W1356,$S1356,$U1356);$x1357=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),397,11,\'<image>/04_array.js\');$x1356=&$x1357[0];list(,$W1356,$S1356,$U1356)=$x1357;$x1355=!(((gettype($x1356)===gettype(JS::$undefined)&&$x1356===JS::$undefined))||(((is_float($x1356)||is_int($x1356))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1356==JS::$undefined));if(JS::toBoolean($x1355,$global)){unset($x1358,$W1358,$S1358,$U1358);$x1359=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),398,34,\'<image>/04_array.js\');$x1358=&$x1359[0];list(,$W1358,$S1358,$U1358)=$x1359;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1362=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),398,22,\'<image>/04_array.js\');$_TypeError=&$x1362[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1362;$x1363=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1364=$x1363($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1364->class)&&$x1364->class===\'Error\'&&!isset($x1364->properties[\'file\'])&&!isset($x1364->properties[\'line\'])&&!isset($x1364->properties[\'column\'])){$x1364->properties[\'file\']=\'<image>/04_array.js\';$x1364->properties[\'line\']=398;$x1364->properties[\'column\']=22;$x1364->attributes[\'file\']=$x1364->attributes[\'line\']=$x1364->attributes[\'column\']=0;}throw new JSException($x1364,398,22,\'<image>/04_array.js\');}$x1360=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1361=$x1360($global,$global,$_callbackFn,array($_value,$x1358,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1361;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1378 =& $scope->properties['arguments'];
$x1378->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1378->properties[$i] = $args[$i];
$x1378->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1383, $W1383, $S1383, $U1383);
$x1384 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 406, 10, '<image>/04_array.js');
$x1383 =& $x1384[0]; list(,$W1383,$S1383,$U1383) = $x1384;
$x1380 = JS::toPrimitive($x1383, $global);
$x1381 = JS::toPrimitive(1, $global);
$x1382 = (is_string($x1380) && is_string($x1381) ? strcmp($x1380, $x1381) < 0 : (!is_nan($x1385 = JS::toNumber($x1380, $global)) && !is_nan($x1386 = JS::toNumber($x1381, $global)) && $x1385 < $x1386));
$x1379 = $x1382;
if (JS::toBoolean($x1379, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1390 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 406, 25, '<image>/04_array.js');
$_arguments =& $x1390[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1390;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1391 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 406, 25, '<image>/04_array.js');
$_ReferenceError =& $x1391[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1391;
$x1392 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 406, 25);
$x1393 = $x1392($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1393->class) && $x1393->class === 'Error' && !isset($x1393->properties['file']) && !isset($x1393->properties['line']) && !isset($x1393->properties['column'])) {$x1393->properties['file'] = '<image>/04_array.js';$x1393->properties['line'] = 406;$x1393->properties['column'] = 25;$x1393->attributes['file'] = $x1393->attributes['line'] = $x1393->attributes['column'] = 0; }
throw new JSException($x1393, 406, 25, '<image>/04_array.js');
}
unset($x1394, $W1394, $S1394, $U1394);
$x1395 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 406, 34, '<image>/04_array.js');
$x1394 =& $x1395[0]; list(,$W1394,$S1394,$U1394) = $x1395;
$x1387 = JS::toPrimitive($x1394, $global);
$x1388 = JS::toPrimitive(2, $global);
$x1389 = (is_string($x1387) && is_string($x1388) ? strcmp($x1387, $x1388) < 0 : (!is_nan($x1396 = JS::toNumber($x1387, $global)) && !is_nan($x1397 = JS::toNumber($x1388, $global)) && $x1396 < $x1397));
$x1379 = $x1389; }
if (JS::toBoolean($x1379, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1400 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 407, 13, '<image>/04_array.js');
$_TypeError =& $x1400[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1400;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1401 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 407, 13, '<image>/04_array.js');
$_ReferenceError =& $x1401[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1401;
$x1402 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 13);
$x1403 = $x1402($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1403->class) && $x1403->class === 'Error' && !isset($x1403->properties['file']) && !isset($x1403->properties['line']) && !isset($x1403->properties['column'])) {$x1403->properties['file'] = '<image>/04_array.js';$x1403->properties['line'] = 407;$x1403->properties['column'] = 13;$x1403->attributes['file'] = $x1403->attributes['line'] = $x1403->attributes['column'] = 0; }
throw new JSException($x1403, 407, 13, '<image>/04_array.js');
}
$x1398 = clone JS::$objectTemplate;
unset($x1404, $W1404, $S1404, $U1404);
$x1405 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 407, 9, '<image>/04_array.js');
$x1404 =& $x1405[0]; list(,$W1404,$S1404,$U1404) = $x1405;
$x1399 = $x1404;
$x1398->prototype = $x1399;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1408 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1409 = $x1408($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1409->class) && $x1409->class === 'Error' && !isset($x1409->properties['file']) && !isset($x1409->properties['line']) && !isset($x1409->properties['column'])) {$x1409->properties['file'] = '<image>/04_array.js';$x1409->properties['line'] = 407;$x1409->properties['column'] = 9;$x1409->attributes['file'] = $x1409->attributes['line'] = $x1409->attributes['column'] = 0; }
throw new JSException($x1409, 407, 9, '<image>/04_array.js');
}
$x1406 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1407 = $x1406($global, $x1398, $_TypeError, array('Array.prototype.reduceRight(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1399 = $x1407;
if (is_object($x1399) && $x1399 !== JS::$undefined) { $x1398 = $x1399; }
if (isset($x1398->class) && $x1398->class === 'Error' && !isset($x1398->properties['file']) && !isset($x1398->properties['line']) && !isset($x1398->properties['column'])) {$x1398->properties['file'] = '<image>/04_array.js';$x1398->properties['line'] = 407;$x1398->properties['column'] = 3;$x1398->attributes['file'] = $x1398->attributes['line'] = $x1398->attributes['column'] = 0; }
throw new JSException($x1398, 407, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1413 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 412, 6, '<image>/04_array.js');
$_arguments =& $x1413[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1413;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1414 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 412, 6, '<image>/04_array.js');
$_ReferenceError =& $x1414[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1414;
$x1415 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 412, 6);
$x1416 = $x1415($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1416->class) && $x1416->class === 'Error' && !isset($x1416->properties['file']) && !isset($x1416->properties['line']) && !isset($x1416->properties['column'])) {$x1416->properties['file'] = '<image>/04_array.js';$x1416->properties['line'] = 412;$x1416->properties['column'] = 6;$x1416->attributes['file'] = $x1416->attributes['line'] = $x1416->attributes['column'] = 0; }
throw new JSException($x1416, 412, 6, '<image>/04_array.js');
}
unset($x1417, $W1417, $S1417, $U1417);
$x1418 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 412, 15, '<image>/04_array.js');
$x1417 =& $x1418[0]; list(,$W1417,$S1417,$U1417) = $x1418;
$x1410 = JS::toPrimitive($x1417, $global);
$x1411 = JS::toPrimitive(1, $global);
$x1412 = (is_string($x1411) && is_string($x1410) ? strcmp($x1411, $x1410) < 0 : (!is_nan($x1419 = JS::toNumber($x1411, $global)) && !is_nan($x1420 = JS::toNumber($x1410, $global)) && $x1419 < $x1420));
if (JS::toBoolean($x1412, $global)) {
unset($x1421, $W1421, $S1421, $U1421);
$x1422 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 413, 20, '<image>/04_array.js');
$x1421 =& $x1422[0]; list(,$W1421,$S1421,$U1421) = $x1422;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1421;
unset($x1423, $W1423, $S1423, $U1423);
$x1424 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 414, 11, '<image>/04_array.js');
$x1423 =& $x1424[0]; list(,$W1423,$S1423,$U1423) = $x1424;
$x1425 = (JS::toNumber($x1423, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1425;;
}
else {
for ($x1426 = 0;; ++$x1426) {
if ($x1426 === 0) {
unset($x1427, $W1427, $S1427, $U1427);
$x1428 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 417, 16, '<image>/04_array.js');
$x1427 =& $x1428[0]; list(,$W1427,$S1427,$U1427) = $x1428;
$x1429 = (JS::toNumber($x1427, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1429;
}
if ($x1426 !== 0) {
$x1430 = --$_i;
}
$x1432 = JS::toPrimitive($_i, $global);
$x1433 = JS::toPrimitive(0, $global);
$x1434 = !(is_string($x1432) && is_string($x1433) ? strcmp($x1432, $x1433) < 0 : (!is_nan($x1435 = JS::toNumber($x1432, $global)) && !is_nan($x1436 = JS::toNumber($x1433, $global)) && $x1435 < $x1436));
$x1431 = $x1434;
if (JS::toBoolean($x1431, $global)) {
unset($x1438, $W1438, $S1438, $U1438);
$x1439 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 417, 43, '<image>/04_array.js');
$x1438 =& $x1439[0]; list(,$W1438,$S1438,$U1438) = $x1439;
$x1437 = (((gettype($x1438) === gettype(JS::$undefined) && $x1438 === JS::$undefined))|| (((is_float($x1438) || is_int($x1438)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1438 == JS::$undefined));
$x1431 = $x1437; }
if (!JS::toBoolean($x1431, $global)) { break; }

;
};
unset($x1440, $W1440, $S1440, $U1440);
$x1441 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 418, 15, '<image>/04_array.js');
$x1440 =& $x1441[0]; list(,$W1440,$S1440,$U1440) = $x1441;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1440;
$x1442 = (JS::toNumber($_i, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1442;;
};
for ($x1443 = 0;; ++$x1443) {
if ($x1443 !== 0) {
$x1444 = --$_i;
}
$x1445 = JS::toPrimitive($_i, $global);
$x1446 = JS::toPrimitive(0, $global);
$x1447 = !(is_string($x1445) && is_string($x1446) ? strcmp($x1445, $x1446) < 0 : (!is_nan($x1448 = JS::toNumber($x1445, $global)) && !is_nan($x1449 = JS::toNumber($x1446, $global)) && $x1448 < $x1449));
if (!JS::toBoolean($x1447, $global)) { break; }

unset($x1451, $W1451, $S1451, $U1451);
$x1452 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 423, 11, '<image>/04_array.js');
$x1451 =& $x1452[0]; list(,$W1451,$S1451,$U1451) = $x1452;
$x1450 = !(((gettype($x1451) === gettype(JS::$undefined) && $x1451 === JS::$undefined))|| (((is_float($x1451) || is_int($x1451)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1451 == JS::$undefined));
if (JS::toBoolean($x1450, $global)) {
unset($x1453, $W1453, $S1453, $U1453);
$x1454 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 424, 34, '<image>/04_array.js');
$x1453 =& $x1454[0]; list(,$W1453,$S1453,$U1453) = $x1454;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1457 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 424, 22, '<image>/04_array.js');
$_TypeError =& $x1457[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1457;
$x1458 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1459 = $x1458($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1459->class) && $x1459->class === 'Error' && !isset($x1459->properties['file']) && !isset($x1459->properties['line']) && !isset($x1459->properties['column'])) {$x1459->properties['file'] = '<image>/04_array.js';$x1459->properties['line'] = 424;$x1459->properties['column'] = 22;$x1459->attributes['file'] = $x1459->attributes['line'] = $x1459->attributes['column'] = 0; }
throw new JSException($x1459, 424, 22, '<image>/04_array.js');
}
$x1455 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1456 = $x1455($global, $global, $_callbackFn, array($_value, $x1453, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1456;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1378=&$scope->properties[\'arguments\'];$x1378->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1378->properties[$i]=$args[$i];$x1378->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1383,$W1383,$S1383,$U1383);$x1384=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),406,10,\'<image>/04_array.js\');$x1383=&$x1384[0];list(,$W1383,$S1383,$U1383)=$x1384;$x1380=JS::toPrimitive($x1383,$global);$x1381=JS::toPrimitive(1,$global);$x1382=(is_string($x1380)&&is_string($x1381)?strcmp($x1380,$x1381)<0:(!is_nan($x1385=JS::toNumber($x1380,$global))&&!is_nan($x1386=JS::toNumber($x1381,$global))&&$x1385<$x1386));$x1379=$x1382;if(JS::toBoolean($x1379,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1390=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),406,25,\'<image>/04_array.js\');$_arguments=&$x1390[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1390;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1391=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),406,25,\'<image>/04_array.js\');$_ReferenceError=&$x1391[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1391;$x1392=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',406,25);$x1393=$x1392($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1393->class)&&$x1393->class===\'Error\'&&!isset($x1393->properties[\'file\'])&&!isset($x1393->properties[\'line\'])&&!isset($x1393->properties[\'column\'])){$x1393->properties[\'file\']=\'<image>/04_array.js\';$x1393->properties[\'line\']=406;$x1393->properties[\'column\']=25;$x1393->attributes[\'file\']=$x1393->attributes[\'line\']=$x1393->attributes[\'column\']=0;}throw new JSException($x1393,406,25,\'<image>/04_array.js\');}unset($x1394,$W1394,$S1394,$U1394);$x1395=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),406,34,\'<image>/04_array.js\');$x1394=&$x1395[0];list(,$W1394,$S1394,$U1394)=$x1395;$x1387=JS::toPrimitive($x1394,$global);$x1388=JS::toPrimitive(2,$global);$x1389=(is_string($x1387)&&is_string($x1388)?strcmp($x1387,$x1388)<0:(!is_nan($x1396=JS::toNumber($x1387,$global))&&!is_nan($x1397=JS::toNumber($x1388,$global))&&$x1396<$x1397));$x1379=$x1389;}if(JS::toBoolean($x1379,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1400=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),407,13,\'<image>/04_array.js\');$_TypeError=&$x1400[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1400;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1401=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),407,13,\'<image>/04_array.js\');$_ReferenceError=&$x1401[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1401;$x1402=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,13);$x1403=$x1402($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1403->class)&&$x1403->class===\'Error\'&&!isset($x1403->properties[\'file\'])&&!isset($x1403->properties[\'line\'])&&!isset($x1403->properties[\'column\'])){$x1403->properties[\'file\']=\'<image>/04_array.js\';$x1403->properties[\'line\']=407;$x1403->properties[\'column\']=13;$x1403->attributes[\'file\']=$x1403->attributes[\'line\']=$x1403->attributes[\'column\']=0;}throw new JSException($x1403,407,13,\'<image>/04_array.js\');}$x1398=clone JS::$objectTemplate;unset($x1404,$W1404,$S1404,$U1404);$x1405=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),407,9,\'<image>/04_array.js\');$x1404=&$x1405[0];list(,$W1404,$S1404,$U1404)=$x1405;$x1399=$x1404;$x1398->prototype=$x1399;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1408=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1409=$x1408($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1409->class)&&$x1409->class===\'Error\'&&!isset($x1409->properties[\'file\'])&&!isset($x1409->properties[\'line\'])&&!isset($x1409->properties[\'column\'])){$x1409->properties[\'file\']=\'<image>/04_array.js\';$x1409->properties[\'line\']=407;$x1409->properties[\'column\']=9;$x1409->attributes[\'file\']=$x1409->attributes[\'line\']=$x1409->attributes[\'column\']=0;}throw new JSException($x1409,407,9,\'<image>/04_array.js\');}$x1406=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1407=$x1406($global,$x1398,$_TypeError,array(\'Array.prototype.reduceRight(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1399=$x1407;if(is_object($x1399)&&$x1399!==JS::$undefined){$x1398=$x1399;}if(isset($x1398->class)&&$x1398->class===\'Error\'&&!isset($x1398->properties[\'file\'])&&!isset($x1398->properties[\'line\'])&&!isset($x1398->properties[\'column\'])){$x1398->properties[\'file\']=\'<image>/04_array.js\';$x1398->properties[\'line\']=407;$x1398->properties[\'column\']=3;$x1398->attributes[\'file\']=$x1398->attributes[\'line\']=$x1398->attributes[\'column\']=0;}throw new JSException($x1398,407,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1413=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),412,6,\'<image>/04_array.js\');$_arguments=&$x1413[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1413;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1414=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),412,6,\'<image>/04_array.js\');$_ReferenceError=&$x1414[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1414;$x1415=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',412,6);$x1416=$x1415($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1416->class)&&$x1416->class===\'Error\'&&!isset($x1416->properties[\'file\'])&&!isset($x1416->properties[\'line\'])&&!isset($x1416->properties[\'column\'])){$x1416->properties[\'file\']=\'<image>/04_array.js\';$x1416->properties[\'line\']=412;$x1416->properties[\'column\']=6;$x1416->attributes[\'file\']=$x1416->attributes[\'line\']=$x1416->attributes[\'column\']=0;}throw new JSException($x1416,412,6,\'<image>/04_array.js\');}unset($x1417,$W1417,$S1417,$U1417);$x1418=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),412,15,\'<image>/04_array.js\');$x1417=&$x1418[0];list(,$W1417,$S1417,$U1417)=$x1418;$x1410=JS::toPrimitive($x1417,$global);$x1411=JS::toPrimitive(1,$global);$x1412=(is_string($x1411)&&is_string($x1410)?strcmp($x1411,$x1410)<0:(!is_nan($x1419=JS::toNumber($x1411,$global))&&!is_nan($x1420=JS::toNumber($x1410,$global))&&$x1419<$x1420));if(JS::toBoolean($x1412,$global)){unset($x1421,$W1421,$S1421,$U1421);$x1422=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),413,20,\'<image>/04_array.js\');$x1421=&$x1422[0];list(,$W1421,$S1421,$U1421)=$x1422;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1421;unset($x1423,$W1423,$S1423,$U1423);$x1424=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),414,11,\'<image>/04_array.js\');$x1423=&$x1424[0];list(,$W1423,$S1423,$U1423)=$x1424;$x1425=(JS::toNumber($x1423,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1425;}else{for($x1426=0;;++$x1426){if($x1426===0){unset($x1427,$W1427,$S1427,$U1427);$x1428=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),417,16,\'<image>/04_array.js\');$x1427=&$x1428[0];list(,$W1427,$S1427,$U1427)=$x1428;$x1429=(JS::toNumber($x1427,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1429;}if($x1426!==0){$x1430=--$_i;}$x1432=JS::toPrimitive($_i,$global);$x1433=JS::toPrimitive(0,$global);$x1434=!(is_string($x1432)&&is_string($x1433)?strcmp($x1432,$x1433)<0:(!is_nan($x1435=JS::toNumber($x1432,$global))&&!is_nan($x1436=JS::toNumber($x1433,$global))&&$x1435<$x1436));$x1431=$x1434;if(JS::toBoolean($x1431,$global)){unset($x1438,$W1438,$S1438,$U1438);$x1439=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),417,43,\'<image>/04_array.js\');$x1438=&$x1439[0];list(,$W1438,$S1438,$U1438)=$x1439;$x1437=(((gettype($x1438)===gettype(JS::$undefined)&&$x1438===JS::$undefined))||(((is_float($x1438)||is_int($x1438))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1438==JS::$undefined));$x1431=$x1437;}if(!JS::toBoolean($x1431,$global)){break;}}unset($x1440,$W1440,$S1440,$U1440);$x1441=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),418,15,\'<image>/04_array.js\');$x1440=&$x1441[0];list(,$W1440,$S1440,$U1440)=$x1441;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1440;$x1442=(JS::toNumber($_i,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1442;}for($x1443=0;;++$x1443){if($x1443!==0){$x1444=--$_i;}$x1445=JS::toPrimitive($_i,$global);$x1446=JS::toPrimitive(0,$global);$x1447=!(is_string($x1445)&&is_string($x1446)?strcmp($x1445,$x1446)<0:(!is_nan($x1448=JS::toNumber($x1445,$global))&&!is_nan($x1449=JS::toNumber($x1446,$global))&&$x1448<$x1449));if(!JS::toBoolean($x1447,$global)){break;}unset($x1451,$W1451,$S1451,$U1451);$x1452=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),423,11,\'<image>/04_array.js\');$x1451=&$x1452[0];list(,$W1451,$S1451,$U1451)=$x1452;$x1450=!(((gettype($x1451)===gettype(JS::$undefined)&&$x1451===JS::$undefined))||(((is_float($x1451)||is_int($x1451))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1451==JS::$undefined));if(JS::toBoolean($x1450,$global)){unset($x1453,$W1453,$S1453,$U1453);$x1454=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),424,34,\'<image>/04_array.js\');$x1453=&$x1454[0];list(,$W1453,$S1453,$U1453)=$x1454;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1457=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),424,22,\'<image>/04_array.js\');$_TypeError=&$x1457[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1457;$x1458=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1459=$x1458($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1459->class)&&$x1459->class===\'Error\'&&!isset($x1459->properties[\'file\'])&&!isset($x1459->properties[\'line\'])&&!isset($x1459->properties[\'column\'])){$x1459->properties[\'file\']=\'<image>/04_array.js\';$x1459->properties[\'line\']=424;$x1459->properties[\'column\']=22;$x1459->attributes[\'file\']=$x1459->attributes[\'line\']=$x1459->attributes[\'column\']=0;}throw new JSException($x1459,424,22,\'<image>/04_array.js\');}$x1455=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1456=$x1455($global,$global,$_callbackFn,array($_value,$x1453,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1456;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/04_array.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/04_array.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Array;
$x79 = clone JS::$functionTemplate; $x79->call = '_339fc8fcf8563d9777a12bd15b91ae1b_1'; $x79->parameters = array (
); $x79->name = 'Array'; $x79->scope = $scope; $x79->properties['prototype'] = clone JS::$objectTemplate; $x79->attributes['prototype'] = JS::WRITABLE; $x79->properties['prototype']->properties['constructor'] = $x79; $x79->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x79->properties['length'] = 0; $x79->attributes['length'] = 0;
$scope->properties['Array'] = JS::$undefined; $_Array =& $scope->properties['Array'];
$UArray = FALSE;
$_Array = $x79;
$x86 = clone JS::$functionTemplate; $x86->call = '_339fc8fcf8563d9777a12bd15b91ae1b_5'; $x86->parameters = array (
  0 => 'arg',
); $x86->scope = $scope; $x86->properties['prototype'] = clone JS::$objectTemplate; $x86->attributes['prototype'] = JS::WRITABLE; $x86->properties['prototype']->properties['constructor'] = $x86; $x86->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x86->properties['length'] = 1; $x86->attributes['length'] = 0;
$x87 = JS::toString('isArray', $global);
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 30, 15, '<image>/04_array.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x90 = $x89($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error' && !isset($x90->properties['file']) && !isset($x90->properties['line']) && !isset($x90->properties['column'])) {$x90->properties['file'] = '<image>/04_array.js';$x90->properties['line'] = 30;$x90->properties['column'] = 15;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 30, 15, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x91, $W91, $S91, $U91);
$x92 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, JS::toString($x87, $global), 30, 15, '<image>/04_array.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
if ($U91 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties[$x87] = $x91; $x91 =& $_Array->properties[$x87]; $_Array->attributes[$x87] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U91 = FALSE; $W91 = TRUE; }
if (isset($S91)) {
$x94 = $S91->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x95 = $x94($global, $_Array, $S91, array($x86), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x93 = $x95;
} else {
if (!$U91) {$x93 = $x86;if ($W91) { $x91 = $x86; }  }
else { $x93 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array' &&  is_int('isArray') && 'isArray' >= $_Array->properties['length']) { $_Array->properties['length'] = 'isArray' + 1; };
$x96 = clone JS::$objectTemplate;
$x97 = JS::toString('prototype', $global);
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x98 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 38, 17, '<image>/04_array.js');
$_TypeError =& $x98[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x98;
$x99 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x100 = $x99($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x100->class) && $x100->class === 'Error' && !isset($x100->properties['file']) && !isset($x100->properties['line']) && !isset($x100->properties['column'])) {$x100->properties['file'] = '<image>/04_array.js';$x100->properties['line'] = 38;$x100->properties['column'] = 17;$x100->attributes['file'] = $x100->attributes['line'] = $x100->attributes['column'] = 0; }
throw new JSException($x100, 38, 17, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x101, $W101, $S101, $U101);
$x102 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, JS::toString($x97, $global), 38, 17, '<image>/04_array.js');
$x101 =& $x102[0]; list(,$W101,$S101,$U101) = $x102;
if ($U101 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties[$x97] = $x101; $x101 =& $_Array->properties[$x97]; $_Array->attributes[$x97] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U101 = FALSE; $W101 = TRUE; }
if (isset($S101)) {
$x104 = $S101->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x105 = $x104($global, $_Array, $S101, array($x96), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x103 = $x105;
} else {
if (!$U101) {$x103 = $x96;if ($W101) { $x101 = $x96; }  }
else { $x103 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Array->properties['length']) { $_Array->properties['length'] = 'prototype' + 1; };
$_Array->prototype =$_Array->properties['prototype'];
unset($_Object, $WObject, $SObject, $UObject);
$x106 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Object', $global), 40, 50, '<image>/04_array.js');
$_Object =& $x106[0]; list(,$WObject,$SObject,$UObject) = $x106;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x107 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 40, 50, '<image>/04_array.js');
$_ReferenceError =& $x107[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x107;
$x108 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 40, 50);
$x109 = $x108($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/04_array.js';$x109->properties['line'] = 40;$x109->properties['column'] = 50;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 40, 50, '<image>/04_array.js');
}
$_Array->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Array->properties['prototype']->class = 'Array';
$_Array->properties['prototype']->extensible = TRUE;
unset($x110, $W110, $S110, $U110);
$x111 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 43, 6, '<image>/04_array.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
$x112 = JS::toString('constructor', $global);
if ($x110 === JS::$undefined || $x110 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x113 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 43, 29, '<image>/04_array.js');
$_TypeError =& $x113[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x113;
$x114 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x115 = $x114($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x115->class) && $x115->class === 'Error' && !isset($x115->properties['file']) && !isset($x115->properties['line']) && !isset($x115->properties['column'])) {$x115->properties['file'] = '<image>/04_array.js';$x115->properties['line'] = 43;$x115->properties['column'] = 29;$x115->attributes['file'] = $x115->attributes['line'] = $x115->attributes['column'] = 0; }
throw new JSException($x115, 43, 29, '<image>/04_array.js');
}
$x110 = JS::toObject($x110, $global);
unset($x116, $W116, $S116, $U116);
$x117 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x110, JS::toString($x112, $global), 43, 29, '<image>/04_array.js');
$x116 =& $x117[0]; list(,$W116,$S116,$U116) = $x117;
if ($U116 && (!isset($x110->extensible) || $x110->extensible)) {$x110->properties[$x112] = $x116; $x116 =& $x110->properties[$x112]; $x110->attributes[$x112] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U116 = FALSE; $W116 = TRUE; }
if (isset($S116)) {
$x119 = $S116->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x120 = $x119($global, $x110, $S116, array($_Array), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x118 = $x120;
} else {
if (!$U116) {$x118 = $_Array;if ($W116) { $x116 = $_Array; }  }
else { $x118 = JS::$undefined; }
}
if (isset($x110->class) && $x110->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x110->properties['length']) { $x110->properties['length'] = 'constructor' + 1; };
$x121 = 0;
unset($x122, $W122, $S122, $U122);
$x123 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 44, 6, '<image>/04_array.js');
$x122 =& $x123[0]; list(,$W122,$S122,$U122) = $x123;
$x124 = JS::toString('length', $global);
if ($x122 === JS::$undefined || $x122 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x125 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 44, 24, '<image>/04_array.js');
$_TypeError =& $x125[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x125;
$x126 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x127 = $x126($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x127->class) && $x127->class === 'Error' && !isset($x127->properties['file']) && !isset($x127->properties['line']) && !isset($x127->properties['column'])) {$x127->properties['file'] = '<image>/04_array.js';$x127->properties['line'] = 44;$x127->properties['column'] = 24;$x127->attributes['file'] = $x127->attributes['line'] = $x127->attributes['column'] = 0; }
throw new JSException($x127, 44, 24, '<image>/04_array.js');
}
$x122 = JS::toObject($x122, $global);
unset($x128, $W128, $S128, $U128);
$x129 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x122, JS::toString($x124, $global), 44, 24, '<image>/04_array.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
if ($U128 && (!isset($x122->extensible) || $x122->extensible)) {$x122->properties[$x124] = $x128; $x128 =& $x122->properties[$x124]; $x122->attributes[$x124] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U128 = FALSE; $W128 = TRUE; }
if (isset($S128)) {
$x131 = $S128->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x132 = $x131($global, $x122, $S128, array($x121), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x130 = $x132;
} else {
if (!$U128) {$x130 = $x121;if ($W128) { $x128 = $x121; }  }
else { $x130 = JS::$undefined; }
}
if (isset($x122->class) && $x122->class === 'Array' &&  is_int('length') && 'length' >= $x122->properties['length']) { $x122->properties['length'] = 'length' + 1; };
$x146 = clone JS::$functionTemplate; $x146->call = '_339fc8fcf8563d9777a12bd15b91ae1b_6'; $x146->parameters = array (
); $x146->scope = $scope; $x146->properties['prototype'] = clone JS::$objectTemplate; $x146->attributes['prototype'] = JS::WRITABLE; $x146->properties['prototype']->properties['constructor'] = $x146; $x146->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x146->properties['length'] = 0; $x146->attributes['length'] = 0;
unset($x147, $W147, $S147, $U147);
$x148 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 46, 6, '<image>/04_array.js');
$x147 =& $x148[0]; list(,$W147,$S147,$U147) = $x148;
$x149 = JS::toString('toString', $global);
if ($x147 === JS::$undefined || $x147 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x150 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 46, 26, '<image>/04_array.js');
$_TypeError =& $x150[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x150;
$x151 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x152 = $x151($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x152->class) && $x152->class === 'Error' && !isset($x152->properties['file']) && !isset($x152->properties['line']) && !isset($x152->properties['column'])) {$x152->properties['file'] = '<image>/04_array.js';$x152->properties['line'] = 46;$x152->properties['column'] = 26;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 46, 26, '<image>/04_array.js');
}
$x147 = JS::toObject($x147, $global);
unset($x153, $W153, $S153, $U153);
$x154 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x147, JS::toString($x149, $global), 46, 26, '<image>/04_array.js');
$x153 =& $x154[0]; list(,$W153,$S153,$U153) = $x154;
if ($U153 && (!isset($x147->extensible) || $x147->extensible)) {$x147->properties[$x149] = $x153; $x153 =& $x147->properties[$x149]; $x147->attributes[$x149] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U153 = FALSE; $W153 = TRUE; }
if (isset($S153)) {
$x156 = $S153->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x157 = $x156($global, $x147, $S153, array($x146), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x155 = $x157;
} else {
if (!$U153) {$x155 = $x146;if ($W153) { $x153 = $x146; }  }
else { $x155 = JS::$undefined; }
}
if (isset($x147->class) && $x147->class === 'Array' &&  is_int('toString') && 'toString' >= $x147->properties['length']) { $x147->properties['length'] = 'toString' + 1; };
unset($x158, $W158, $S158, $U158);
$x159 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 50, 39, '<image>/04_array.js');
$x158 =& $x159[0]; list(,$W158,$S158,$U158) = $x159;
unset($x160, $W160, $S160, $U160);
$x161 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x158, JS::toString('toString', $global), 50, 49, '<image>/04_array.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
unset($x162, $W162, $S162, $U162);
$x163 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 50, 6, '<image>/04_array.js');
$x162 =& $x163[0]; list(,$W162,$S162,$U162) = $x163;
$x164 = JS::toString('toLocaleString', $global);
if ($x162 === JS::$undefined || $x162 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x165 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 50, 32, '<image>/04_array.js');
$_TypeError =& $x165[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x165;
$x166 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x167 = $x166($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x167->class) && $x167->class === 'Error' && !isset($x167->properties['file']) && !isset($x167->properties['line']) && !isset($x167->properties['column'])) {$x167->properties['file'] = '<image>/04_array.js';$x167->properties['line'] = 50;$x167->properties['column'] = 32;$x167->attributes['file'] = $x167->attributes['line'] = $x167->attributes['column'] = 0; }
throw new JSException($x167, 50, 32, '<image>/04_array.js');
}
$x162 = JS::toObject($x162, $global);
unset($x168, $W168, $S168, $U168);
$x169 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x162, JS::toString($x164, $global), 50, 32, '<image>/04_array.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
if ($U168 && (!isset($x162->extensible) || $x162->extensible)) {$x162->properties[$x164] = $x168; $x168 =& $x162->properties[$x164]; $x162->attributes[$x164] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U168 = FALSE; $W168 = TRUE; }
if (isset($S168)) {
$x171 = $S168->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x172 = $x171($global, $x162, $S168, array($x160), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x170 = $x172;
} else {
if (!$U168) {$x170 = $x160;if ($W168) { $x168 = $x160; }  }
else { $x170 = JS::$undefined; }
}
if (isset($x162->class) && $x162->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x162->properties['length']) { $x162->properties['length'] = 'toLocaleString' + 1; };
$x267 = clone JS::$functionTemplate; $x267->call = '_339fc8fcf8563d9777a12bd15b91ae1b_7'; $x267->parameters = array (
  0 => 'item',
); $x267->scope = $scope; $x267->properties['prototype'] = clone JS::$objectTemplate; $x267->attributes['prototype'] = JS::WRITABLE; $x267->properties['prototype']->properties['constructor'] = $x267; $x267->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x267->properties['length'] = 1; $x267->attributes['length'] = 0;
unset($x268, $W268, $S268, $U268);
$x269 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 52, 6, '<image>/04_array.js');
$x268 =& $x269[0]; list(,$W268,$S268,$U268) = $x269;
$x270 = JS::toString('concat', $global);
if ($x268 === JS::$undefined || $x268 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x271 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 52, 24, '<image>/04_array.js');
$_TypeError =& $x271[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x271;
$x272 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x273 = $x272($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x273->class) && $x273->class === 'Error' && !isset($x273->properties['file']) && !isset($x273->properties['line']) && !isset($x273->properties['column'])) {$x273->properties['file'] = '<image>/04_array.js';$x273->properties['line'] = 52;$x273->properties['column'] = 24;$x273->attributes['file'] = $x273->attributes['line'] = $x273->attributes['column'] = 0; }
throw new JSException($x273, 52, 24, '<image>/04_array.js');
}
$x268 = JS::toObject($x268, $global);
unset($x274, $W274, $S274, $U274);
$x275 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x268, JS::toString($x270, $global), 52, 24, '<image>/04_array.js');
$x274 =& $x275[0]; list(,$W274,$S274,$U274) = $x275;
if ($U274 && (!isset($x268->extensible) || $x268->extensible)) {$x268->properties[$x270] = $x274; $x274 =& $x268->properties[$x270]; $x268->attributes[$x270] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U274 = FALSE; $W274 = TRUE; }
if (isset($S274)) {
$x277 = $S274->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x278 = $x277($global, $x268, $S274, array($x267), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x276 = $x278;
} else {
if (!$U274) {$x276 = $x267;if ($W274) { $x274 = $x267; }  }
else { $x276 = JS::$undefined; }
}
if (isset($x268->class) && $x268->class === 'Array' &&  is_int('concat') && 'concat' >= $x268->properties['length']) { $x268->properties['length'] = 'concat' + 1; };
$x310 = clone JS::$functionTemplate; $x310->call = '_339fc8fcf8563d9777a12bd15b91ae1b_8'; $x310->parameters = array (
  0 => 'separator',
); $x310->scope = $scope; $x310->properties['prototype'] = clone JS::$objectTemplate; $x310->attributes['prototype'] = JS::WRITABLE; $x310->properties['prototype']->properties['constructor'] = $x310; $x310->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x310->properties['length'] = 1; $x310->attributes['length'] = 0;
unset($x311, $W311, $S311, $U311);
$x312 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 73, 6, '<image>/04_array.js');
$x311 =& $x312[0]; list(,$W311,$S311,$U311) = $x312;
$x313 = JS::toString('join', $global);
if ($x311 === JS::$undefined || $x311 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x314 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 73, 22, '<image>/04_array.js');
$_TypeError =& $x314[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x314;
$x315 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x316 = $x315($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x316->class) && $x316->class === 'Error' && !isset($x316->properties['file']) && !isset($x316->properties['line']) && !isset($x316->properties['column'])) {$x316->properties['file'] = '<image>/04_array.js';$x316->properties['line'] = 73;$x316->properties['column'] = 22;$x316->attributes['file'] = $x316->attributes['line'] = $x316->attributes['column'] = 0; }
throw new JSException($x316, 73, 22, '<image>/04_array.js');
}
$x311 = JS::toObject($x311, $global);
unset($x317, $W317, $S317, $U317);
$x318 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x311, JS::toString($x313, $global), 73, 22, '<image>/04_array.js');
$x317 =& $x318[0]; list(,$W317,$S317,$U317) = $x318;
if ($U317 && (!isset($x311->extensible) || $x311->extensible)) {$x311->properties[$x313] = $x317; $x317 =& $x311->properties[$x313]; $x311->attributes[$x313] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U317 = FALSE; $W317 = TRUE; }
if (isset($S317)) {
$x320 = $S317->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x321 = $x320($global, $x311, $S317, array($x310), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x319 = $x321;
} else {
if (!$U317) {$x319 = $x310;if ($W317) { $x317 = $x310; }  }
else { $x319 = JS::$undefined; }
}
if (isset($x311->class) && $x311->class === 'Array' &&  is_int('join') && 'join' >= $x311->properties['length']) { $x311->properties['length'] = 'join' + 1; };
$x350 = clone JS::$functionTemplate; $x350->call = '_339fc8fcf8563d9777a12bd15b91ae1b_9'; $x350->parameters = array (
); $x350->scope = $scope; $x350->properties['prototype'] = clone JS::$objectTemplate; $x350->attributes['prototype'] = JS::WRITABLE; $x350->properties['prototype']->properties['constructor'] = $x350; $x350->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x350->properties['length'] = 0; $x350->attributes['length'] = 0;
unset($x351, $W351, $S351, $U351);
$x352 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 99, 6, '<image>/04_array.js');
$x351 =& $x352[0]; list(,$W351,$S351,$U351) = $x352;
$x353 = JS::toString('pop', $global);
if ($x351 === JS::$undefined || $x351 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x354 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 99, 21, '<image>/04_array.js');
$_TypeError =& $x354[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x354;
$x355 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x356 = $x355($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x356->class) && $x356->class === 'Error' && !isset($x356->properties['file']) && !isset($x356->properties['line']) && !isset($x356->properties['column'])) {$x356->properties['file'] = '<image>/04_array.js';$x356->properties['line'] = 99;$x356->properties['column'] = 21;$x356->attributes['file'] = $x356->attributes['line'] = $x356->attributes['column'] = 0; }
throw new JSException($x356, 99, 21, '<image>/04_array.js');
}
$x351 = JS::toObject($x351, $global);
unset($x357, $W357, $S357, $U357);
$x358 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x351, JS::toString($x353, $global), 99, 21, '<image>/04_array.js');
$x357 =& $x358[0]; list(,$W357,$S357,$U357) = $x358;
if ($U357 && (!isset($x351->extensible) || $x351->extensible)) {$x351->properties[$x353] = $x357; $x357 =& $x351->properties[$x353]; $x351->attributes[$x353] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U357 = FALSE; $W357 = TRUE; }
if (isset($S357)) {
$x360 = $S357->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x361 = $x360($global, $x351, $S357, array($x350), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x359 = $x361;
} else {
if (!$U357) {$x359 = $x350;if ($W357) { $x357 = $x350; }  }
else { $x359 = JS::$undefined; }
}
if (isset($x351->class) && $x351->class === 'Array' &&  is_int('pop') && 'pop' >= $x351->properties['length']) { $x351->properties['length'] = 'pop' + 1; };
$x392 = clone JS::$functionTemplate; $x392->call = '_339fc8fcf8563d9777a12bd15b91ae1b_10'; $x392->parameters = array (
  0 => 'item',
); $x392->scope = $scope; $x392->properties['prototype'] = clone JS::$objectTemplate; $x392->attributes['prototype'] = JS::WRITABLE; $x392->properties['prototype']->properties['constructor'] = $x392; $x392->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x392->properties['length'] = 1; $x392->attributes['length'] = 0;
unset($x393, $W393, $S393, $U393);
$x394 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 111, 6, '<image>/04_array.js');
$x393 =& $x394[0]; list(,$W393,$S393,$U393) = $x394;
$x395 = JS::toString('push', $global);
if ($x393 === JS::$undefined || $x393 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x396 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 111, 22, '<image>/04_array.js');
$_TypeError =& $x396[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x396;
$x397 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x398 = $x397($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x398->class) && $x398->class === 'Error' && !isset($x398->properties['file']) && !isset($x398->properties['line']) && !isset($x398->properties['column'])) {$x398->properties['file'] = '<image>/04_array.js';$x398->properties['line'] = 111;$x398->properties['column'] = 22;$x398->attributes['file'] = $x398->attributes['line'] = $x398->attributes['column'] = 0; }
throw new JSException($x398, 111, 22, '<image>/04_array.js');
}
$x393 = JS::toObject($x393, $global);
unset($x399, $W399, $S399, $U399);
$x400 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x393, JS::toString($x395, $global), 111, 22, '<image>/04_array.js');
$x399 =& $x400[0]; list(,$W399,$S399,$U399) = $x400;
if ($U399 && (!isset($x393->extensible) || $x393->extensible)) {$x393->properties[$x395] = $x399; $x399 =& $x393->properties[$x395]; $x393->attributes[$x395] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U399 = FALSE; $W399 = TRUE; }
if (isset($S399)) {
$x402 = $S399->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x403 = $x402($global, $x393, $S399, array($x392), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x401 = $x403;
} else {
if (!$U399) {$x401 = $x392;if ($W399) { $x399 = $x392; }  }
else { $x401 = JS::$undefined; }
}
if (isset($x393->class) && $x393->class === 'Array' &&  is_int('push') && 'push' >= $x393->properties['length']) { $x393->properties['length'] = 'push' + 1; };
$x438 = clone JS::$functionTemplate; $x438->call = '_339fc8fcf8563d9777a12bd15b91ae1b_11'; $x438->parameters = array (
); $x438->scope = $scope; $x438->properties['prototype'] = clone JS::$objectTemplate; $x438->attributes['prototype'] = JS::WRITABLE; $x438->properties['prototype']->properties['constructor'] = $x438; $x438->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x438->properties['length'] = 0; $x438->attributes['length'] = 0;
unset($x439, $W439, $S439, $U439);
$x440 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 119, 6, '<image>/04_array.js');
$x439 =& $x440[0]; list(,$W439,$S439,$U439) = $x440;
$x441 = JS::toString('reverse', $global);
if ($x439 === JS::$undefined || $x439 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x442 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 119, 25, '<image>/04_array.js');
$_TypeError =& $x442[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x442;
$x443 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x444 = $x443($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x444->class) && $x444->class === 'Error' && !isset($x444->properties['file']) && !isset($x444->properties['line']) && !isset($x444->properties['column'])) {$x444->properties['file'] = '<image>/04_array.js';$x444->properties['line'] = 119;$x444->properties['column'] = 25;$x444->attributes['file'] = $x444->attributes['line'] = $x444->attributes['column'] = 0; }
throw new JSException($x444, 119, 25, '<image>/04_array.js');
}
$x439 = JS::toObject($x439, $global);
unset($x445, $W445, $S445, $U445);
$x446 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x439, JS::toString($x441, $global), 119, 25, '<image>/04_array.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
if ($U445 && (!isset($x439->extensible) || $x439->extensible)) {$x439->properties[$x441] = $x445; $x445 =& $x439->properties[$x441]; $x439->attributes[$x441] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U445 = FALSE; $W445 = TRUE; }
if (isset($S445)) {
$x448 = $S445->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x449 = $x448($global, $x439, $S445, array($x438), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x447 = $x449;
} else {
if (!$U445) {$x447 = $x438;if ($W445) { $x445 = $x438; }  }
else { $x447 = JS::$undefined; }
}
if (isset($x439->class) && $x439->class === 'Array' &&  is_int('reverse') && 'reverse' >= $x439->properties['length']) { $x439->properties['length'] = 'reverse' + 1; };
$x493 = clone JS::$functionTemplate; $x493->call = '_339fc8fcf8563d9777a12bd15b91ae1b_12'; $x493->parameters = array (
); $x493->scope = $scope; $x493->properties['prototype'] = clone JS::$objectTemplate; $x493->attributes['prototype'] = JS::WRITABLE; $x493->properties['prototype']->properties['constructor'] = $x493; $x493->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x493->properties['length'] = 0; $x493->attributes['length'] = 0;
unset($x494, $W494, $S494, $U494);
$x495 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 129, 6, '<image>/04_array.js');
$x494 =& $x495[0]; list(,$W494,$S494,$U494) = $x495;
$x496 = JS::toString('shift', $global);
if ($x494 === JS::$undefined || $x494 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x497 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 129, 23, '<image>/04_array.js');
$_TypeError =& $x497[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x497;
$x498 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x499 = $x498($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x499->class) && $x499->class === 'Error' && !isset($x499->properties['file']) && !isset($x499->properties['line']) && !isset($x499->properties['column'])) {$x499->properties['file'] = '<image>/04_array.js';$x499->properties['line'] = 129;$x499->properties['column'] = 23;$x499->attributes['file'] = $x499->attributes['line'] = $x499->attributes['column'] = 0; }
throw new JSException($x499, 129, 23, '<image>/04_array.js');
}
$x494 = JS::toObject($x494, $global);
unset($x500, $W500, $S500, $U500);
$x501 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x494, JS::toString($x496, $global), 129, 23, '<image>/04_array.js');
$x500 =& $x501[0]; list(,$W500,$S500,$U500) = $x501;
if ($U500 && (!isset($x494->extensible) || $x494->extensible)) {$x494->properties[$x496] = $x500; $x500 =& $x494->properties[$x496]; $x494->attributes[$x496] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U500 = FALSE; $W500 = TRUE; }
if (isset($S500)) {
$x503 = $S500->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x504 = $x503($global, $x494, $S500, array($x493), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x502 = $x504;
} else {
if (!$U500) {$x502 = $x493;if ($W500) { $x500 = $x493; }  }
else { $x502 = JS::$undefined; }
}
if (isset($x494->class) && $x494->class === 'Array' &&  is_int('shift') && 'shift' >= $x494->properties['length']) { $x494->properties['length'] = 'shift' + 1; };
$x567 = clone JS::$functionTemplate; $x567->call = '_339fc8fcf8563d9777a12bd15b91ae1b_13'; $x567->parameters = array (
  0 => 'start',
  1 => 'end',
); $x567->scope = $scope; $x567->properties['prototype'] = clone JS::$objectTemplate; $x567->attributes['prototype'] = JS::WRITABLE; $x567->properties['prototype']->properties['constructor'] = $x567; $x567->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x567->properties['length'] = 2; $x567->attributes['length'] = 0;
unset($x568, $W568, $S568, $U568);
$x569 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 145, 6, '<image>/04_array.js');
$x568 =& $x569[0]; list(,$W568,$S568,$U568) = $x569;
$x570 = JS::toString('slice', $global);
if ($x568 === JS::$undefined || $x568 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x571 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 145, 23, '<image>/04_array.js');
$_TypeError =& $x571[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x571;
$x572 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x573 = $x572($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x573->class) && $x573->class === 'Error' && !isset($x573->properties['file']) && !isset($x573->properties['line']) && !isset($x573->properties['column'])) {$x573->properties['file'] = '<image>/04_array.js';$x573->properties['line'] = 145;$x573->properties['column'] = 23;$x573->attributes['file'] = $x573->attributes['line'] = $x573->attributes['column'] = 0; }
throw new JSException($x573, 145, 23, '<image>/04_array.js');
}
$x568 = JS::toObject($x568, $global);
unset($x574, $W574, $S574, $U574);
$x575 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x568, JS::toString($x570, $global), 145, 23, '<image>/04_array.js');
$x574 =& $x575[0]; list(,$W574,$S574,$U574) = $x575;
if ($U574 && (!isset($x568->extensible) || $x568->extensible)) {$x568->properties[$x570] = $x574; $x574 =& $x568->properties[$x570]; $x568->attributes[$x570] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U574 = FALSE; $W574 = TRUE; }
if (isset($S574)) {
$x577 = $S574->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x578 = $x577($global, $x568, $S574, array($x567), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x576 = $x578;
} else {
if (!$U574) {$x576 = $x567;if ($W574) { $x574 = $x567; }  }
else { $x576 = JS::$undefined; }
}
if (isset($x568->class) && $x568->class === 'Array' &&  is_int('slice') && 'slice' >= $x568->properties['length']) { $x568->properties['length'] = 'slice' + 1; };
$x733 = clone JS::$functionTemplate; $x733->call = '_339fc8fcf8563d9777a12bd15b91ae1b_14'; $x733->parameters = array (
  0 => 'compareFn',
); $x733->scope = $scope; $x733->properties['prototype'] = clone JS::$objectTemplate; $x733->attributes['prototype'] = JS::WRITABLE; $x733->properties['prototype']->properties['constructor'] = $x733; $x733->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x733->properties['length'] = 1; $x733->attributes['length'] = 0;
unset($x734, $W734, $S734, $U734);
$x735 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 171, 6, '<image>/04_array.js');
$x734 =& $x735[0]; list(,$W734,$S734,$U734) = $x735;
$x736 = JS::toString('sort', $global);
if ($x734 === JS::$undefined || $x734 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x737 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 171, 22, '<image>/04_array.js');
$_TypeError =& $x737[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x737;
$x738 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x739 = $x738($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x739->class) && $x739->class === 'Error' && !isset($x739->properties['file']) && !isset($x739->properties['line']) && !isset($x739->properties['column'])) {$x739->properties['file'] = '<image>/04_array.js';$x739->properties['line'] = 171;$x739->properties['column'] = 22;$x739->attributes['file'] = $x739->attributes['line'] = $x739->attributes['column'] = 0; }
throw new JSException($x739, 171, 22, '<image>/04_array.js');
}
$x734 = JS::toObject($x734, $global);
unset($x740, $W740, $S740, $U740);
$x741 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x734, JS::toString($x736, $global), 171, 22, '<image>/04_array.js');
$x740 =& $x741[0]; list(,$W740,$S740,$U740) = $x741;
if ($U740 && (!isset($x734->extensible) || $x734->extensible)) {$x734->properties[$x736] = $x740; $x740 =& $x734->properties[$x736]; $x734->attributes[$x736] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U740 = FALSE; $W740 = TRUE; }
if (isset($S740)) {
$x743 = $S740->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x744 = $x743($global, $x734, $S740, array($x733), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x742 = $x744;
} else {
if (!$U740) {$x742 = $x733;if ($W740) { $x740 = $x733; }  }
else { $x742 = JS::$undefined; }
}
if (isset($x734->class) && $x734->class === 'Array' &&  is_int('sort') && 'sort' >= $x734->properties['length']) { $x734->properties['length'] = 'sort' + 1; };
$x810 = clone JS::$functionTemplate; $x810->call = '_339fc8fcf8563d9777a12bd15b91ae1b_16'; $x810->parameters = array (
  0 => 'start',
  1 => 'deleteCount',
); $x810->scope = $scope; $x810->properties['prototype'] = clone JS::$objectTemplate; $x810->attributes['prototype'] = JS::WRITABLE; $x810->properties['prototype']->properties['constructor'] = $x810; $x810->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x810->properties['length'] = 2; $x810->attributes['length'] = 0;
unset($x811, $W811, $S811, $U811);
$x812 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 220, 6, '<image>/04_array.js');
$x811 =& $x812[0]; list(,$W811,$S811,$U811) = $x812;
$x813 = JS::toString('splice', $global);
if ($x811 === JS::$undefined || $x811 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x814 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 220, 24, '<image>/04_array.js');
$_TypeError =& $x814[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x814;
$x815 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x816 = $x815($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x816->class) && $x816->class === 'Error' && !isset($x816->properties['file']) && !isset($x816->properties['line']) && !isset($x816->properties['column'])) {$x816->properties['file'] = '<image>/04_array.js';$x816->properties['line'] = 220;$x816->properties['column'] = 24;$x816->attributes['file'] = $x816->attributes['line'] = $x816->attributes['column'] = 0; }
throw new JSException($x816, 220, 24, '<image>/04_array.js');
}
$x811 = JS::toObject($x811, $global);
unset($x817, $W817, $S817, $U817);
$x818 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x811, JS::toString($x813, $global), 220, 24, '<image>/04_array.js');
$x817 =& $x818[0]; list(,$W817,$S817,$U817) = $x818;
if ($U817 && (!isset($x811->extensible) || $x811->extensible)) {$x811->properties[$x813] = $x817; $x817 =& $x811->properties[$x813]; $x811->attributes[$x813] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U817 = FALSE; $W817 = TRUE; }
if (isset($S817)) {
$x820 = $S817->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x821 = $x820($global, $x811, $S817, array($x810), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x819 = $x821;
} else {
if (!$U817) {$x819 = $x810;if ($W817) { $x817 = $x810; }  }
else { $x819 = JS::$undefined; }
}
if (isset($x811->class) && $x811->class === 'Array' &&  is_int('splice') && 'splice' >= $x811->properties['length']) { $x811->properties['length'] = 'splice' + 1; };
$x878 = clone JS::$functionTemplate; $x878->call = '_339fc8fcf8563d9777a12bd15b91ae1b_17'; $x878->parameters = array (
  0 => 'item',
); $x878->scope = $scope; $x878->properties['prototype'] = clone JS::$objectTemplate; $x878->attributes['prototype'] = JS::WRITABLE; $x878->properties['prototype']->properties['constructor'] = $x878; $x878->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x878->properties['length'] = 1; $x878->attributes['length'] = 0;
unset($x879, $W879, $S879, $U879);
$x880 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 257, 6, '<image>/04_array.js');
$x879 =& $x880[0]; list(,$W879,$S879,$U879) = $x880;
$x881 = JS::toString('unshift', $global);
if ($x879 === JS::$undefined || $x879 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x882 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 257, 25, '<image>/04_array.js');
$_TypeError =& $x882[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x882;
$x883 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x884 = $x883($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x884->class) && $x884->class === 'Error' && !isset($x884->properties['file']) && !isset($x884->properties['line']) && !isset($x884->properties['column'])) {$x884->properties['file'] = '<image>/04_array.js';$x884->properties['line'] = 257;$x884->properties['column'] = 25;$x884->attributes['file'] = $x884->attributes['line'] = $x884->attributes['column'] = 0; }
throw new JSException($x884, 257, 25, '<image>/04_array.js');
}
$x879 = JS::toObject($x879, $global);
unset($x885, $W885, $S885, $U885);
$x886 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x879, JS::toString($x881, $global), 257, 25, '<image>/04_array.js');
$x885 =& $x886[0]; list(,$W885,$S885,$U885) = $x886;
if ($U885 && (!isset($x879->extensible) || $x879->extensible)) {$x879->properties[$x881] = $x885; $x885 =& $x879->properties[$x881]; $x879->attributes[$x881] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U885 = FALSE; $W885 = TRUE; }
if (isset($S885)) {
$x888 = $S885->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x889 = $x888($global, $x879, $S885, array($x878), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x887 = $x889;
} else {
if (!$U885) {$x887 = $x878;if ($W885) { $x885 = $x878; }  }
else { $x887 = JS::$undefined; }
}
if (isset($x879->class) && $x879->class === 'Array' &&  is_int('unshift') && 'unshift' >= $x879->properties['length']) { $x879->properties['length'] = 'unshift' + 1; };
$x929 = clone JS::$functionTemplate; $x929->call = '_339fc8fcf8563d9777a12bd15b91ae1b_18'; $x929->parameters = array (
  0 => 'search',
  1 => 'from',
); $x929->scope = $scope; $x929->properties['prototype'] = clone JS::$objectTemplate; $x929->attributes['prototype'] = JS::WRITABLE; $x929->properties['prototype']->properties['constructor'] = $x929; $x929->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x929->properties['length'] = 2; $x929->attributes['length'] = 0;
unset($x930, $W930, $S930, $U930);
$x931 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 269, 6, '<image>/04_array.js');
$x930 =& $x931[0]; list(,$W930,$S930,$U930) = $x931;
$x932 = JS::toString('indexOf', $global);
if ($x930 === JS::$undefined || $x930 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x933 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 269, 25, '<image>/04_array.js');
$_TypeError =& $x933[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x933;
$x934 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x935 = $x934($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x935->class) && $x935->class === 'Error' && !isset($x935->properties['file']) && !isset($x935->properties['line']) && !isset($x935->properties['column'])) {$x935->properties['file'] = '<image>/04_array.js';$x935->properties['line'] = 269;$x935->properties['column'] = 25;$x935->attributes['file'] = $x935->attributes['line'] = $x935->attributes['column'] = 0; }
throw new JSException($x935, 269, 25, '<image>/04_array.js');
}
$x930 = JS::toObject($x930, $global);
unset($x936, $W936, $S936, $U936);
$x937 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x930, JS::toString($x932, $global), 269, 25, '<image>/04_array.js');
$x936 =& $x937[0]; list(,$W936,$S936,$U936) = $x937;
if ($U936 && (!isset($x930->extensible) || $x930->extensible)) {$x930->properties[$x932] = $x936; $x936 =& $x930->properties[$x932]; $x930->attributes[$x932] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U936 = FALSE; $W936 = TRUE; }
if (isset($S936)) {
$x939 = $S936->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x940 = $x939($global, $x930, $S936, array($x929), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x938 = $x940;
} else {
if (!$U936) {$x938 = $x929;if ($W936) { $x936 = $x929; }  }
else { $x938 = JS::$undefined; }
}
if (isset($x930->class) && $x930->class === 'Array' &&  is_int('indexOf') && 'indexOf' >= $x930->properties['length']) { $x930->properties['length'] = 'indexOf' + 1; };
$x997 = clone JS::$functionTemplate; $x997->call = '_339fc8fcf8563d9777a12bd15b91ae1b_19'; $x997->parameters = array (
  0 => 'search',
  1 => 'from',
); $x997->scope = $scope; $x997->properties['prototype'] = clone JS::$objectTemplate; $x997->attributes['prototype'] = JS::WRITABLE; $x997->properties['prototype']->properties['constructor'] = $x997; $x997->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x997->properties['length'] = 2; $x997->attributes['length'] = 0;
unset($x998, $W998, $S998, $U998);
$x999 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 285, 6, '<image>/04_array.js');
$x998 =& $x999[0]; list(,$W998,$S998,$U998) = $x999;
$x1000 = JS::toString('lastIndexOf', $global);
if ($x998 === JS::$undefined || $x998 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1001 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 285, 29, '<image>/04_array.js');
$_TypeError =& $x1001[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1001;
$x1002 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x1003 = $x1002($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1003->class) && $x1003->class === 'Error' && !isset($x1003->properties['file']) && !isset($x1003->properties['line']) && !isset($x1003->properties['column'])) {$x1003->properties['file'] = '<image>/04_array.js';$x1003->properties['line'] = 285;$x1003->properties['column'] = 29;$x1003->attributes['file'] = $x1003->attributes['line'] = $x1003->attributes['column'] = 0; }
throw new JSException($x1003, 285, 29, '<image>/04_array.js');
}
$x998 = JS::toObject($x998, $global);
unset($x1004, $W1004, $S1004, $U1004);
$x1005 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x998, JS::toString($x1000, $global), 285, 29, '<image>/04_array.js');
$x1004 =& $x1005[0]; list(,$W1004,$S1004,$U1004) = $x1005;
if ($U1004 && (!isset($x998->extensible) || $x998->extensible)) {$x998->properties[$x1000] = $x1004; $x1004 =& $x998->properties[$x1000]; $x998->attributes[$x1000] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1004 = FALSE; $W1004 = TRUE; }
if (isset($S1004)) {
$x1007 = $S1004->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x1008 = $x1007($global, $x998, $S1004, array($x997), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1006 = $x1008;
} else {
if (!$U1004) {$x1006 = $x997;if ($W1004) { $x1004 = $x997; }  }
else { $x1006 = JS::$undefined; }
}
if (isset($x998->class) && $x998->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $x998->properties['length']) { $x998->properties['length'] = 'lastIndexOf' + 1; };
$x1046 = clone JS::$functionTemplate; $x1046->call = '_339fc8fcf8563d9777a12bd15b91ae1b_20'; $x1046->parameters = array (
  0 => 'callbackFn',
); $x1046->scope = $scope; $x1046->properties['prototype'] = clone JS::$objectTemplate; $x1046->attributes['prototype'] = JS::WRITABLE; $x1046->properties['prototype']->properties['constructor'] = $x1046; $x1046->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1046->properties['length'] = 1; $x1046->attributes['length'] = 0;
unset($x1047, $W1047, $S1047, $U1047);
$x1048 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 305, 6, '<image>/04_array.js');
$x1047 =& $x1048[0]; list(,$W1047,$S1047,$U1047) = $x1048;
$x1049 = JS::toString('every', $global);
if ($x1047 === JS::$undefined || $x1047 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1050 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 305, 23, '<image>/04_array.js');
$_TypeError =& $x1050[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1050;
$x1051 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1052 = $x1051($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1052->class) && $x1052->class === 'Error' && !isset($x1052->properties['file']) && !isset($x1052->properties['line']) && !isset($x1052->properties['column'])) {$x1052->properties['file'] = '<image>/04_array.js';$x1052->properties['line'] = 305;$x1052->properties['column'] = 23;$x1052->attributes['file'] = $x1052->attributes['line'] = $x1052->attributes['column'] = 0; }
throw new JSException($x1052, 305, 23, '<image>/04_array.js');
}
$x1047 = JS::toObject($x1047, $global);
unset($x1053, $W1053, $S1053, $U1053);
$x1054 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1047, JS::toString($x1049, $global), 305, 23, '<image>/04_array.js');
$x1053 =& $x1054[0]; list(,$W1053,$S1053,$U1053) = $x1054;
if ($U1053 && (!isset($x1047->extensible) || $x1047->extensible)) {$x1047->properties[$x1049] = $x1053; $x1053 =& $x1047->properties[$x1049]; $x1047->attributes[$x1049] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1053 = FALSE; $W1053 = TRUE; }
if (isset($S1053)) {
$x1056 = $S1053->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1057 = $x1056($global, $x1047, $S1053, array($x1046), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1055 = $x1057;
} else {
if (!$U1053) {$x1055 = $x1046;if ($W1053) { $x1053 = $x1046; }  }
else { $x1055 = JS::$undefined; }
}
if (isset($x1047->class) && $x1047->class === 'Array' &&  is_int('every') && 'every' >= $x1047->properties['length']) { $x1047->properties['length'] = 'every' + 1; };
$x1095 = clone JS::$functionTemplate; $x1095->call = '_339fc8fcf8563d9777a12bd15b91ae1b_21'; $x1095->parameters = array (
  0 => 'callbackFn',
); $x1095->scope = $scope; $x1095->properties['prototype'] = clone JS::$objectTemplate; $x1095->attributes['prototype'] = JS::WRITABLE; $x1095->properties['prototype']->properties['constructor'] = $x1095; $x1095->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1095->properties['length'] = 1; $x1095->attributes['length'] = 0;
unset($x1096, $W1096, $S1096, $U1096);
$x1097 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 321, 6, '<image>/04_array.js');
$x1096 =& $x1097[0]; list(,$W1096,$S1096,$U1096) = $x1097;
$x1098 = JS::toString('some', $global);
if ($x1096 === JS::$undefined || $x1096 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1099 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 321, 22, '<image>/04_array.js');
$_TypeError =& $x1099[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1099;
$x1100 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1101 = $x1100($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1101->class) && $x1101->class === 'Error' && !isset($x1101->properties['file']) && !isset($x1101->properties['line']) && !isset($x1101->properties['column'])) {$x1101->properties['file'] = '<image>/04_array.js';$x1101->properties['line'] = 321;$x1101->properties['column'] = 22;$x1101->attributes['file'] = $x1101->attributes['line'] = $x1101->attributes['column'] = 0; }
throw new JSException($x1101, 321, 22, '<image>/04_array.js');
}
$x1096 = JS::toObject($x1096, $global);
unset($x1102, $W1102, $S1102, $U1102);
$x1103 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1096, JS::toString($x1098, $global), 321, 22, '<image>/04_array.js');
$x1102 =& $x1103[0]; list(,$W1102,$S1102,$U1102) = $x1103;
if ($U1102 && (!isset($x1096->extensible) || $x1096->extensible)) {$x1096->properties[$x1098] = $x1102; $x1102 =& $x1096->properties[$x1098]; $x1096->attributes[$x1098] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1102 = FALSE; $W1102 = TRUE; }
if (isset($S1102)) {
$x1105 = $S1102->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1106 = $x1105($global, $x1096, $S1102, array($x1095), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1104 = $x1106;
} else {
if (!$U1102) {$x1104 = $x1095;if ($W1102) { $x1102 = $x1095; }  }
else { $x1104 = JS::$undefined; }
}
if (isset($x1096->class) && $x1096->class === 'Array' &&  is_int('some') && 'some' >= $x1096->properties['length']) { $x1096->properties['length'] = 'some' + 1; };
$x1144 = clone JS::$functionTemplate; $x1144->call = '_339fc8fcf8563d9777a12bd15b91ae1b_22'; $x1144->parameters = array (
  0 => 'callbackFn',
); $x1144->scope = $scope; $x1144->properties['prototype'] = clone JS::$objectTemplate; $x1144->attributes['prototype'] = JS::WRITABLE; $x1144->properties['prototype']->properties['constructor'] = $x1144; $x1144->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1144->properties['length'] = 1; $x1144->attributes['length'] = 0;
unset($x1145, $W1145, $S1145, $U1145);
$x1146 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 337, 6, '<image>/04_array.js');
$x1145 =& $x1146[0]; list(,$W1145,$S1145,$U1145) = $x1146;
$x1147 = JS::toString('forEach', $global);
if ($x1145 === JS::$undefined || $x1145 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1148 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 337, 25, '<image>/04_array.js');
$_TypeError =& $x1148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1148;
$x1149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1150 = $x1149($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1150->class) && $x1150->class === 'Error' && !isset($x1150->properties['file']) && !isset($x1150->properties['line']) && !isset($x1150->properties['column'])) {$x1150->properties['file'] = '<image>/04_array.js';$x1150->properties['line'] = 337;$x1150->properties['column'] = 25;$x1150->attributes['file'] = $x1150->attributes['line'] = $x1150->attributes['column'] = 0; }
throw new JSException($x1150, 337, 25, '<image>/04_array.js');
}
$x1145 = JS::toObject($x1145, $global);
unset($x1151, $W1151, $S1151, $U1151);
$x1152 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1145, JS::toString($x1147, $global), 337, 25, '<image>/04_array.js');
$x1151 =& $x1152[0]; list(,$W1151,$S1151,$U1151) = $x1152;
if ($U1151 && (!isset($x1145->extensible) || $x1145->extensible)) {$x1145->properties[$x1147] = $x1151; $x1151 =& $x1145->properties[$x1147]; $x1145->attributes[$x1147] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1151 = FALSE; $W1151 = TRUE; }
if (isset($S1151)) {
$x1154 = $S1151->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1155 = $x1154($global, $x1145, $S1151, array($x1144), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1153 = $x1155;
} else {
if (!$U1151) {$x1153 = $x1144;if ($W1151) { $x1151 = $x1144; }  }
else { $x1153 = JS::$undefined; }
}
if (isset($x1145->class) && $x1145->class === 'Array' &&  is_int('forEach') && 'forEach' >= $x1145->properties['length']) { $x1145->properties['length'] = 'forEach' + 1; };
$x1205 = clone JS::$functionTemplate; $x1205->call = '_339fc8fcf8563d9777a12bd15b91ae1b_23'; $x1205->parameters = array (
  0 => 'callbackFn',
); $x1205->scope = $scope; $x1205->properties['prototype'] = clone JS::$objectTemplate; $x1205->attributes['prototype'] = JS::WRITABLE; $x1205->properties['prototype']->properties['constructor'] = $x1205; $x1205->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1205->properties['length'] = 1; $x1205->attributes['length'] = 0;
unset($x1206, $W1206, $S1206, $U1206);
$x1207 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 349, 6, '<image>/04_array.js');
$x1206 =& $x1207[0]; list(,$W1206,$S1206,$U1206) = $x1207;
$x1208 = JS::toString('map', $global);
if ($x1206 === JS::$undefined || $x1206 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1209 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 349, 21, '<image>/04_array.js');
$_TypeError =& $x1209[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1209;
$x1210 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1211 = $x1210($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1211->class) && $x1211->class === 'Error' && !isset($x1211->properties['file']) && !isset($x1211->properties['line']) && !isset($x1211->properties['column'])) {$x1211->properties['file'] = '<image>/04_array.js';$x1211->properties['line'] = 349;$x1211->properties['column'] = 21;$x1211->attributes['file'] = $x1211->attributes['line'] = $x1211->attributes['column'] = 0; }
throw new JSException($x1211, 349, 21, '<image>/04_array.js');
}
$x1206 = JS::toObject($x1206, $global);
unset($x1212, $W1212, $S1212, $U1212);
$x1213 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1206, JS::toString($x1208, $global), 349, 21, '<image>/04_array.js');
$x1212 =& $x1213[0]; list(,$W1212,$S1212,$U1212) = $x1213;
if ($U1212 && (!isset($x1206->extensible) || $x1206->extensible)) {$x1206->properties[$x1208] = $x1212; $x1212 =& $x1206->properties[$x1208]; $x1206->attributes[$x1208] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1212 = FALSE; $W1212 = TRUE; }
if (isset($S1212)) {
$x1215 = $S1212->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1216 = $x1215($global, $x1206, $S1212, array($x1205), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1214 = $x1216;
} else {
if (!$U1212) {$x1214 = $x1205;if ($W1212) { $x1212 = $x1205; }  }
else { $x1214 = JS::$undefined; }
}
if (isset($x1206->class) && $x1206->class === 'Array' &&  is_int('map') && 'map' >= $x1206->properties['length']) { $x1206->properties['length'] = 'map' + 1; };
$x1268 = clone JS::$functionTemplate; $x1268->call = '_339fc8fcf8563d9777a12bd15b91ae1b_24'; $x1268->parameters = array (
  0 => 'callbackFn',
); $x1268->scope = $scope; $x1268->properties['prototype'] = clone JS::$objectTemplate; $x1268->attributes['prototype'] = JS::WRITABLE; $x1268->properties['prototype']->properties['constructor'] = $x1268; $x1268->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1268->properties['length'] = 1; $x1268->attributes['length'] = 0;
unset($x1269, $W1269, $S1269, $U1269);
$x1270 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 363, 6, '<image>/04_array.js');
$x1269 =& $x1270[0]; list(,$W1269,$S1269,$U1269) = $x1270;
$x1271 = JS::toString('filter', $global);
if ($x1269 === JS::$undefined || $x1269 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1272 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 363, 24, '<image>/04_array.js');
$_TypeError =& $x1272[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1272;
$x1273 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1274 = $x1273($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1274->class) && $x1274->class === 'Error' && !isset($x1274->properties['file']) && !isset($x1274->properties['line']) && !isset($x1274->properties['column'])) {$x1274->properties['file'] = '<image>/04_array.js';$x1274->properties['line'] = 363;$x1274->properties['column'] = 24;$x1274->attributes['file'] = $x1274->attributes['line'] = $x1274->attributes['column'] = 0; }
throw new JSException($x1274, 363, 24, '<image>/04_array.js');
}
$x1269 = JS::toObject($x1269, $global);
unset($x1275, $W1275, $S1275, $U1275);
$x1276 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1269, JS::toString($x1271, $global), 363, 24, '<image>/04_array.js');
$x1275 =& $x1276[0]; list(,$W1275,$S1275,$U1275) = $x1276;
if ($U1275 && (!isset($x1269->extensible) || $x1269->extensible)) {$x1269->properties[$x1271] = $x1275; $x1275 =& $x1269->properties[$x1271]; $x1269->attributes[$x1271] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1275 = FALSE; $W1275 = TRUE; }
if (isset($S1275)) {
$x1278 = $S1275->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1279 = $x1278($global, $x1269, $S1275, array($x1268), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1277 = $x1279;
} else {
if (!$U1275) {$x1277 = $x1268;if ($W1275) { $x1275 = $x1268; }  }
else { $x1277 = JS::$undefined; }
}
if (isset($x1269->class) && $x1269->class === 'Array' &&  is_int('filter') && 'filter' >= $x1269->properties['length']) { $x1269->properties['length'] = 'filter' + 1; };
$x1365 = clone JS::$functionTemplate; $x1365->call = '_339fc8fcf8563d9777a12bd15b91ae1b_25'; $x1365->parameters = array (
  0 => 'callbackFn',
); $x1365->scope = $scope; $x1365->properties['prototype'] = clone JS::$objectTemplate; $x1365->attributes['prototype'] = JS::WRITABLE; $x1365->properties['prototype']->properties['constructor'] = $x1365; $x1365->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1365->properties['length'] = 1; $x1365->attributes['length'] = 0;
unset($x1366, $W1366, $S1366, $U1366);
$x1367 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 379, 6, '<image>/04_array.js');
$x1366 =& $x1367[0]; list(,$W1366,$S1366,$U1366) = $x1367;
$x1368 = JS::toString('reduce', $global);
if ($x1366 === JS::$undefined || $x1366 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1369 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 379, 24, '<image>/04_array.js');
$_TypeError =& $x1369[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1369;
$x1370 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1371 = $x1370($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1371->class) && $x1371->class === 'Error' && !isset($x1371->properties['file']) && !isset($x1371->properties['line']) && !isset($x1371->properties['column'])) {$x1371->properties['file'] = '<image>/04_array.js';$x1371->properties['line'] = 379;$x1371->properties['column'] = 24;$x1371->attributes['file'] = $x1371->attributes['line'] = $x1371->attributes['column'] = 0; }
throw new JSException($x1371, 379, 24, '<image>/04_array.js');
}
$x1366 = JS::toObject($x1366, $global);
unset($x1372, $W1372, $S1372, $U1372);
$x1373 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1366, JS::toString($x1368, $global), 379, 24, '<image>/04_array.js');
$x1372 =& $x1373[0]; list(,$W1372,$S1372,$U1372) = $x1373;
if ($U1372 && (!isset($x1366->extensible) || $x1366->extensible)) {$x1366->properties[$x1368] = $x1372; $x1372 =& $x1366->properties[$x1368]; $x1366->attributes[$x1368] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1372 = FALSE; $W1372 = TRUE; }
if (isset($S1372)) {
$x1375 = $S1372->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1376 = $x1375($global, $x1366, $S1372, array($x1365), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1374 = $x1376;
} else {
if (!$U1372) {$x1374 = $x1365;if ($W1372) { $x1372 = $x1365; }  }
else { $x1374 = JS::$undefined; }
}
if (isset($x1366->class) && $x1366->class === 'Array' &&  is_int('reduce') && 'reduce' >= $x1366->properties['length']) { $x1366->properties['length'] = 'reduce' + 1; };
$x1460 = clone JS::$functionTemplate; $x1460->call = '_339fc8fcf8563d9777a12bd15b91ae1b_26'; $x1460->parameters = array (
  0 => 'callbackFn',
); $x1460->scope = $scope; $x1460->properties['prototype'] = clone JS::$objectTemplate; $x1460->attributes['prototype'] = JS::WRITABLE; $x1460->properties['prototype']->properties['constructor'] = $x1460; $x1460->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1460->properties['length'] = 1; $x1460->attributes['length'] = 0;
unset($x1461, $W1461, $S1461, $U1461);
$x1462 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 405, 6, '<image>/04_array.js');
$x1461 =& $x1462[0]; list(,$W1461,$S1461,$U1461) = $x1462;
$x1463 = JS::toString('reduceRight', $global);
if ($x1461 === JS::$undefined || $x1461 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1464 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 405, 29, '<image>/04_array.js');
$_TypeError =& $x1464[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1464;
$x1465 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1466 = $x1465($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1466->class) && $x1466->class === 'Error' && !isset($x1466->properties['file']) && !isset($x1466->properties['line']) && !isset($x1466->properties['column'])) {$x1466->properties['file'] = '<image>/04_array.js';$x1466->properties['line'] = 405;$x1466->properties['column'] = 29;$x1466->attributes['file'] = $x1466->attributes['line'] = $x1466->attributes['column'] = 0; }
throw new JSException($x1466, 405, 29, '<image>/04_array.js');
}
$x1461 = JS::toObject($x1461, $global);
unset($x1467, $W1467, $S1467, $U1467);
$x1468 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1461, JS::toString($x1463, $global), 405, 29, '<image>/04_array.js');
$x1467 =& $x1468[0]; list(,$W1467,$S1467,$U1467) = $x1468;
if ($U1467 && (!isset($x1461->extensible) || $x1461->extensible)) {$x1461->properties[$x1463] = $x1467; $x1467 =& $x1461->properties[$x1463]; $x1461->attributes[$x1463] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1467 = FALSE; $W1467 = TRUE; }
if (isset($S1467)) {
$x1470 = $S1467->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1471 = $x1470($global, $x1461, $S1467, array($x1460), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1469 = $x1471;
} else {
if (!$U1467) {$x1469 = $x1460;if ($W1467) { $x1467 = $x1460; }  }
else { $x1469 = JS::$undefined; }
}
if (isset($x1461->class) && $x1461->class === 'Array' &&  is_int('reduceRight') && 'reduceRight' >= $x1461->properties['length']) { $x1461->properties['length'] = 'reduceRight' + 1; };
;
return JS::$undefined;
}
