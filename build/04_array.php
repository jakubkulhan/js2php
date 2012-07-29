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
$x26 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x26[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x26;
$x27 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x28 = $x27($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x28->class) && $x28->class === 'Error' && !isset($x28->properties['file']) && !isset($x28->properties['line']) && !isset($x28->properties['column'])) {$x28->properties['file'] = $file;$x28->properties['line'] = $line;$x28->properties['column'] = $column;$x28->attributes['file'] = $x28->attributes['line'] = $x28->attributes['column'] = 0; }
throw new JSException($x28, $line, $column, $file);
}
$W25 = $S25 = $U25 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x25 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x29 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x30 = $x29($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x25 = $x30; }
else { $x25 = JS::$undefined; $U25 = TRUE; }
return array(&$x25, $W25, $S25, $U25);
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x26=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x26[0];list(,$WTypeError,$STypeError,$UTypeError)=$x26;$x27=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x28=$x27($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x28->class)&&$x28->class===\'Error\'&&!isset($x28->properties[\'file\'])&&!isset($x28->properties[\'line\'])&&!isset($x28->properties[\'column\'])){$x28->properties[\'file\']=$file;$x28->properties[\'line\']=$line;$x28->properties[\'column\']=$column;$x28->attributes[\'file\']=$x28->attributes[\'line\']=$x28->attributes[\'column\']=0;}throw new JSException($x28,$line,$column,$file);}$W25=$S25=$U25=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x25=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x29=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x30=$x29($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x25=$x30;}else{$x25=JS::$undefined;$U25=TRUE;}return array(&$x25,$W25,$S25,$U25);}', "\n";
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
if (isset($_array->class) && $_array->class === 'Array') {  if (isset($_array->properties['length']) && $_array->properties['length'] !== JS::$undefined) { $x16 = $_array->properties['length']; }  else { $x16 = 0; } }
if (isset($S10)) {
$x17 = $S10->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 7, 15);
$x18 = $x17($global, $_array, $S10, array($x3), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x18;
} else {
if (!$U10) {$x15 = $x3;if ($W10) { $x10 = $x3; }  }
else { $x15 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array') {if (is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; }else if ($x4 === 'length' && is_int($x3) && $x16 > $x3) {  for ($i = $x3; $i < $x16; ++$i) {  unset($_array->properties[$i], $_array->attributes[$i]); }}};
$_array->attributes['length'] = JS::WRITABLE;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x21 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 11, 6, '<image>/04_array.js');
$_arguments =& $x21[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x21;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x22 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 11, 6, '<image>/04_array.js');
$_ReferenceError =& $x22[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x22;
$x23 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 11, 6);
$x24 = $x23($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x24->class) && $x24->class === 'Error' && !isset($x24->properties['file']) && !isset($x24->properties['line']) && !isset($x24->properties['column'])) {$x24->properties['file'] = '<image>/04_array.js';$x24->properties['line'] = 11;$x24->properties['column'] = 6;$x24->attributes['file'] = $x24->attributes['line'] = $x24->attributes['column'] = 0; }
throw new JSException($x24, 11, 6, '<image>/04_array.js');
}
unset($x25, $W25, $S25, $U25);
$x31 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 11, 15, '<image>/04_array.js');
$x25 =& $x31[0]; list(,$W25,$S25,$U25) = $x31;
$x20 = (((gettype($x25) === gettype(1) && $x25 === 1))|| (((is_float($x25) || is_int($x25)) && (is_float(1) || is_int(1))) && $x25 == 1));
$x19 = $x20;
if (JS::toBoolean($x19, $global)) {
unset($x33, $W33, $S33, $U33);
$x34 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(0, $global), 11, 48, '<image>/04_array.js');
$x33 =& $x34[0]; list(,$W33,$S33,$U33) = $x34;
$x35 = $x33;
$x35 = ($x35 === JS::$undefined ? 'undefined' : (is_int($x35) || is_float($x35) ? 'number' : (is_bool($x35) ? 'boolean' : (is_string($x35) ? 'string' : (is_object($x35) && isset($x35->call) ? 'function' : 'object')))));
$x32 = (((gettype($x35) === gettype('number') && $x35 === 'number'))|| (((is_float($x35) || is_int($x35)) && (is_float('number') || is_int('number'))) && $x35 == 'number'));
$x19 = $x32; }
if (JS::toBoolean($x19, $global)) {
unset($x36, $W36, $S36, $U36);
$x37 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(0, $global), 12, 22, '<image>/04_array.js');
$x36 =& $x37[0]; list(,$W36,$S36,$U36) = $x37;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x36;
if (JS::toBoolean((((string) intval($_len)) !== ((string)$_len)) ||$_len< 0, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x40 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('RangeError', $global), 15, 14, '<image>/04_array.js');
$_RangeError =& $x40[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x40;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x41 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 15, 14, '<image>/04_array.js');
$_ReferenceError =& $x41[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x41;
$x42 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 14);
$x43 = $x42($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x43->class) && $x43->class === 'Error' && !isset($x43->properties['file']) && !isset($x43->properties['line']) && !isset($x43->properties['column'])) {$x43->properties['file'] = '<image>/04_array.js';$x43->properties['line'] = 15;$x43->properties['column'] = 14;$x43->attributes['file'] = $x43->attributes['line'] = $x43->attributes['column'] = 0; }
throw new JSException($x43, 15, 14, '<image>/04_array.js');
}
$x38 = clone JS::$objectTemplate;
unset($x44, $W44, $S44, $U44);
$x45 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 15, 10, '<image>/04_array.js');
$x44 =& $x45[0]; list(,$W44,$S44,$U44) = $x45;
$x39 = $x44;
$x38->prototype = $x39;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x48 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 15, 10, '<image>/04_array.js');
$_TypeError =& $x48[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x48;
$x49 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x50 = $x49($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x50->class) && $x50->class === 'Error' && !isset($x50->properties['file']) && !isset($x50->properties['line']) && !isset($x50->properties['column'])) {$x50->properties['file'] = '<image>/04_array.js';$x50->properties['line'] = 15;$x50->properties['column'] = 10;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
throw new JSException($x50, 15, 10, '<image>/04_array.js');
}
$x46 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 15, 10);
$x47 = $x46($global, $x38, $_RangeError, array('Array(): Given array length is not legal.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x39 = $x47;
if (is_object($x39) && $x39 !== JS::$undefined) { $x38 = $x39; }
if (isset($x38->class) && $x38->class === 'Error' && !isset($x38->properties['file']) && !isset($x38->properties['line']) && !isset($x38->properties['column'])) {$x38->properties['file'] = '<image>/04_array.js';$x38->properties['line'] = 15;$x38->properties['column'] = 4;$x38->attributes['file'] = $x38->attributes['line'] = $x38->attributes['column'] = 0; }
throw new JSException($x38, 15, 4, '<image>/04_array.js');;
};
$x51 = JS::toString('length', $global);
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x52 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 18, 16, '<image>/04_array.js');
$_TypeError =& $x52[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x52;
$x53 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x54 = $x53($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x54->class) && $x54->class === 'Error' && !isset($x54->properties['file']) && !isset($x54->properties['line']) && !isset($x54->properties['column'])) {$x54->properties['file'] = '<image>/04_array.js';$x54->properties['line'] = 18;$x54->properties['column'] = 16;$x54->attributes['file'] = $x54->attributes['line'] = $x54->attributes['column'] = 0; }
throw new JSException($x54, 18, 16, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x55, $W55, $S55, $U55);
$x56 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, JS::toString($x51, $global), 18, 16, '<image>/04_array.js');
$x55 =& $x56[0]; list(,$W55,$S55,$U55) = $x56;
if ($U55 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties[$x51] = $x55; $x55 =& $_array->properties[$x51]; $_array->attributes[$x51] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U55 = FALSE; $W55 = TRUE; }
if (isset($_array->class) && $_array->class === 'Array') {  if (isset($_array->properties['length']) && $_array->properties['length'] !== JS::$undefined) { $x58 = $_array->properties['length']; }  else { $x58 = 0; } }
if (isset($S55)) {
$x59 = $S55->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 18, 16);
$x60 = $x59($global, $_array, $S55, array($_len), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x57 = $x60;
} else {
if (!$U55) {$x57 = $_len;if ($W55) { $x55 = $_len; }  }
else { $x57 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array') {if (is_int('length') && 'length' >= $_array->properties['length']) { $_array->properties['length'] = 'length' + 1; }else if ($x51 === 'length' && is_int($_len) && $x58 > $_len) {  for ($i = $_len; $i < $x58; ++$i) {  unset($_array->properties[$i], $_array->attributes[$i]); }}};
return $_array;;
};
for ($x61 = 0;; ++$x61) {
if ($x61 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x62, $W62, $S62, $U62);
$x63 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 23, 31, '<image>/04_array.js');
$x62 =& $x63[0]; list(,$W62,$S62,$U62) = $x63;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x62;
}
if ($x61 !== 0) {
$x64 = ++$_i;
}
$x65 = JS::toPrimitive($_i, $global);
$x66 = JS::toPrimitive($_l, $global);
$x67 = (is_string($x65) && is_string($x66) ? strcmp($x65, $x66) < 0 : (!is_nan($x68 = JS::toNumber($x65, $global)) && !is_nan($x69 = JS::toNumber($x66, $global)) && $x68 < $x69));
if (!JS::toBoolean($x67, $global)) { break; }

unset($x70, $W70, $S70, $U70);
$x71 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 24, 23, '<image>/04_array.js');
$x70 =& $x71[0]; list(,$W70,$S70,$U70) = $x71;
$x72 = JS::toString($_i, $global);
if ($_array === JS::$undefined || $_array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x73 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 24, 12, '<image>/04_array.js');
$_TypeError =& $x73[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x73;
$x74 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x75 = $x74($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x75->class) && $x75->class === 'Error' && !isset($x75->properties['file']) && !isset($x75->properties['line']) && !isset($x75->properties['column'])) {$x75->properties['file'] = '<image>/04_array.js';$x75->properties['line'] = 24;$x75->properties['column'] = 12;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 24, 12, '<image>/04_array.js');
}
$_array = JS::toObject($_array, $global);
unset($x76, $W76, $S76, $U76);
$x77 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_array, JS::toString($x72, $global), 24, 12, '<image>/04_array.js');
$x76 =& $x77[0]; list(,$W76,$S76,$U76) = $x77;
if ($U76 && (!isset($_array->extensible) || $_array->extensible)) {$_array->properties[$x72] = $x76; $x76 =& $_array->properties[$x72]; $_array->attributes[$x72] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U76 = FALSE; $W76 = TRUE; }
if (isset($_array->class) && $_array->class === 'Array') {  if (isset($_array->properties['length']) && $_array->properties['length'] !== JS::$undefined) { $x79 = $_array->properties['length']; }  else { $x79 = 0; } }
if (isset($S76)) {
$x80 = $S76->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 24, 12);
$x81 = $x80($global, $_array, $S76, array($x70), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x78 = $x81;
} else {
if (!$U76) {$x78 = $x70;if ($W76) { $x76 = $x70; }  }
else { $x78 = JS::$undefined; }
}
if (isset($_array->class) && $_array->class === 'Array') {if (is_int($_i) && $_i >= $_array->properties['length']) { $_array->properties['length'] = $_i + 1; }else if ($x72 === 'length' && is_int($x70) && $x79 > $x70) {  for ($i = $x70; $i < $x79; ++$i) {  unset($_array->properties[$i], $_array->attributes[$i]); }}};
};
return $_array;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Array\']=$fn;$_Array=&$scope->properties[\'Array\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'array\']=JS::$undefined;$_array=&$scope->properties[\'array\'];$Uarray=FALSE;$_array=$x2;$_array->prototype=$_Array->properties[\'prototype\'];$_array->class=\'Array\';$x3=0;$x4=JS::toString(\'length\',$global);if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x7=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),7,15,\'<image>/04_array.js\');$_TypeError=&$x7[0];list(,$WTypeError,$STypeError,$UTypeError)=$x7;$x8=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x9=$x8($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/04_array.js\';$x9->properties[\'line\']=7;$x9->properties[\'column\']=15;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,7,15,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x10,$W10,$S10,$U10);$x14=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,JS::toString($x4,$global),7,15,\'<image>/04_array.js\');$x10=&$x14[0];list(,$W10,$S10,$U10)=$x14;if($U10&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$x4]=$x10;$x10=&$_array->properties[$x4];$_array->attributes[$x4]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U10=FALSE;$W10=TRUE;}if(isset($_array->class)&&$_array->class===\'Array\'){if(isset($_array->properties[\'length\'])&&$_array->properties[\'length\']!==JS::$undefined){$x16=$_array->properties[\'length\'];}else{$x16=0;}}if(isset($S10)){$x17=$S10->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',7,15);$x18=$x17($global,$_array,$S10,array($x3),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x18;}else{if(!$U10){$x15=$x3;if($W10){$x10=$x3;}}else{$x15=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'){if(is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}else if($x4===\'length\'&&is_int($x3)&&$x16>$x3){for($i=$x3;$i<$x16;++$i){unset($_array->properties[$i],$_array->attributes[$i]);}}}$_array->attributes[\'length\']=JS::WRITABLE;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x21=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),11,6,\'<image>/04_array.js\');$_arguments=&$x21[0];list(,$Warguments,$Sarguments,$Uarguments)=$x21;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x22=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),11,6,\'<image>/04_array.js\');$_ReferenceError=&$x22[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x22;$x23=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',11,6);$x24=$x23($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x24->class)&&$x24->class===\'Error\'&&!isset($x24->properties[\'file\'])&&!isset($x24->properties[\'line\'])&&!isset($x24->properties[\'column\'])){$x24->properties[\'file\']=\'<image>/04_array.js\';$x24->properties[\'line\']=11;$x24->properties[\'column\']=6;$x24->attributes[\'file\']=$x24->attributes[\'line\']=$x24->attributes[\'column\']=0;}throw new JSException($x24,11,6,\'<image>/04_array.js\');}unset($x25,$W25,$S25,$U25);$x31=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),11,15,\'<image>/04_array.js\');$x25=&$x31[0];list(,$W25,$S25,$U25)=$x31;$x20=(((gettype($x25)===gettype(1)&&$x25===1))||(((is_float($x25)||is_int($x25))&&(is_float(1)||is_int(1)))&&$x25==1));$x19=$x20;if(JS::toBoolean($x19,$global)){unset($x33,$W33,$S33,$U33);$x34=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(0,$global),11,48,\'<image>/04_array.js\');$x33=&$x34[0];list(,$W33,$S33,$U33)=$x34;$x35=$x33;$x35=($x35===JS::$undefined?\'undefined\':(is_int($x35)||is_float($x35)?\'number\':(is_bool($x35)?\'boolean\':(is_string($x35)?\'string\':(is_object($x35)&&isset($x35->call)?\'function\':\'object\')))));$x32=(((gettype($x35)===gettype(\'number\')&&$x35===\'number\'))||(((is_float($x35)||is_int($x35))&&(is_float(\'number\')||is_int(\'number\')))&&$x35==\'number\'));$x19=$x32;}if(JS::toBoolean($x19,$global)){unset($x36,$W36,$S36,$U36);$x37=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(0,$global),12,22,\'<image>/04_array.js\');$x36=&$x37[0];list(,$W36,$S36,$U36)=$x37;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x36;if(JS::toBoolean((((string)intval($_len))!==((string)$_len))||$_len<0,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x40=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),15,14,\'<image>/04_array.js\');$_RangeError=&$x40[0];list(,$WRangeError,$SRangeError,$URangeError)=$x40;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x41=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),15,14,\'<image>/04_array.js\');$_ReferenceError=&$x41[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x41;$x42=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,14);$x43=$x42($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x43->class)&&$x43->class===\'Error\'&&!isset($x43->properties[\'file\'])&&!isset($x43->properties[\'line\'])&&!isset($x43->properties[\'column\'])){$x43->properties[\'file\']=\'<image>/04_array.js\';$x43->properties[\'line\']=15;$x43->properties[\'column\']=14;$x43->attributes[\'file\']=$x43->attributes[\'line\']=$x43->attributes[\'column\']=0;}throw new JSException($x43,15,14,\'<image>/04_array.js\');}$x38=clone JS::$objectTemplate;unset($x44,$W44,$S44,$U44);$x45=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),15,10,\'<image>/04_array.js\');$x44=&$x45[0];list(,$W44,$S44,$U44)=$x45;$x39=$x44;$x38->prototype=$x39;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x48=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),15,10,\'<image>/04_array.js\');$_TypeError=&$x48[0];list(,$WTypeError,$STypeError,$UTypeError)=$x48;$x49=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x50=$x49($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x50->class)&&$x50->class===\'Error\'&&!isset($x50->properties[\'file\'])&&!isset($x50->properties[\'line\'])&&!isset($x50->properties[\'column\'])){$x50->properties[\'file\']=\'<image>/04_array.js\';$x50->properties[\'line\']=15;$x50->properties[\'column\']=10;$x50->attributes[\'file\']=$x50->attributes[\'line\']=$x50->attributes[\'column\']=0;}throw new JSException($x50,15,10,\'<image>/04_array.js\');}$x46=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',15,10);$x47=$x46($global,$x38,$_RangeError,array(\'Array(): Given array length is not legal.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x39=$x47;if(is_object($x39)&&$x39!==JS::$undefined){$x38=$x39;}if(isset($x38->class)&&$x38->class===\'Error\'&&!isset($x38->properties[\'file\'])&&!isset($x38->properties[\'line\'])&&!isset($x38->properties[\'column\'])){$x38->properties[\'file\']=\'<image>/04_array.js\';$x38->properties[\'line\']=15;$x38->properties[\'column\']=4;$x38->attributes[\'file\']=$x38->attributes[\'line\']=$x38->attributes[\'column\']=0;}throw new JSException($x38,15,4,\'<image>/04_array.js\');}$x51=JS::toString(\'length\',$global);if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x52=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),18,16,\'<image>/04_array.js\');$_TypeError=&$x52[0];list(,$WTypeError,$STypeError,$UTypeError)=$x52;$x53=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x54=$x53($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x54->class)&&$x54->class===\'Error\'&&!isset($x54->properties[\'file\'])&&!isset($x54->properties[\'line\'])&&!isset($x54->properties[\'column\'])){$x54->properties[\'file\']=\'<image>/04_array.js\';$x54->properties[\'line\']=18;$x54->properties[\'column\']=16;$x54->attributes[\'file\']=$x54->attributes[\'line\']=$x54->attributes[\'column\']=0;}throw new JSException($x54,18,16,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x55,$W55,$S55,$U55);$x56=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,JS::toString($x51,$global),18,16,\'<image>/04_array.js\');$x55=&$x56[0];list(,$W55,$S55,$U55)=$x56;if($U55&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$x51]=$x55;$x55=&$_array->properties[$x51];$_array->attributes[$x51]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U55=FALSE;$W55=TRUE;}if(isset($_array->class)&&$_array->class===\'Array\'){if(isset($_array->properties[\'length\'])&&$_array->properties[\'length\']!==JS::$undefined){$x58=$_array->properties[\'length\'];}else{$x58=0;}}if(isset($S55)){$x59=$S55->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',18,16);$x60=$x59($global,$_array,$S55,array($_len),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x57=$x60;}else{if(!$U55){$x57=$_len;if($W55){$x55=$_len;}}else{$x57=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'){if(is_int(\'length\')&&\'length\'>=$_array->properties[\'length\']){$_array->properties[\'length\']=\'length\'+1;}else if($x51===\'length\'&&is_int($_len)&&$x58>$_len){for($i=$_len;$i<$x58;++$i){unset($_array->properties[$i],$_array->attributes[$i]);}}}return$_array;}for($x61=0;;++$x61){if($x61===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x62,$W62,$S62,$U62);$x63=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),23,31,\'<image>/04_array.js\');$x62=&$x63[0];list(,$W62,$S62,$U62)=$x63;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x62;}if($x61!==0){$x64=++$_i;}$x65=JS::toPrimitive($_i,$global);$x66=JS::toPrimitive($_l,$global);$x67=(is_string($x65)&&is_string($x66)?strcmp($x65,$x66)<0:(!is_nan($x68=JS::toNumber($x65,$global))&&!is_nan($x69=JS::toNumber($x66,$global))&&$x68<$x69));if(!JS::toBoolean($x67,$global)){break;}unset($x70,$W70,$S70,$U70);$x71=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),24,23,\'<image>/04_array.js\');$x70=&$x71[0];list(,$W70,$S70,$U70)=$x71;$x72=JS::toString($_i,$global);if($_array===JS::$undefined||$_array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x73=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),24,12,\'<image>/04_array.js\');$_TypeError=&$x73[0];list(,$WTypeError,$STypeError,$UTypeError)=$x73;$x74=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x75=$x74($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x75->class)&&$x75->class===\'Error\'&&!isset($x75->properties[\'file\'])&&!isset($x75->properties[\'line\'])&&!isset($x75->properties[\'column\'])){$x75->properties[\'file\']=\'<image>/04_array.js\';$x75->properties[\'line\']=24;$x75->properties[\'column\']=12;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,24,12,\'<image>/04_array.js\');}$_array=JS::toObject($_array,$global);unset($x76,$W76,$S76,$U76);$x77=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$_array,JS::toString($x72,$global),24,12,\'<image>/04_array.js\');$x76=&$x77[0];list(,$W76,$S76,$U76)=$x77;if($U76&&(!isset($_array->extensible)||$_array->extensible)){$_array->properties[$x72]=$x76;$x76=&$_array->properties[$x72];$_array->attributes[$x72]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U76=FALSE;$W76=TRUE;}if(isset($_array->class)&&$_array->class===\'Array\'){if(isset($_array->properties[\'length\'])&&$_array->properties[\'length\']!==JS::$undefined){$x79=$_array->properties[\'length\'];}else{$x79=0;}}if(isset($S76)){$x80=$S76->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',24,12);$x81=$x80($global,$_array,$S76,array($x70),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x78=$x81;}else{if(!$U76){$x78=$x70;if($W76){$x76=$x70;}}else{$x78=JS::$undefined;}}if(isset($_array->class)&&$_array->class===\'Array\'){if(is_int($_i)&&$_i>=$_array->properties[\'length\']){$_array->properties[\'length\']=$_i+1;}else if($x72===\'length\'&&is_int($x70)&&$x79>$x70){for($i=$x70;$i<$x79;++$i){unset($_array->properties[$i],$_array->attributes[$i]);}}}}return$_array;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x84 =& $scope->properties['arguments'];
$x84->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x84->properties[$i] = $args[$i];
$x84->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['arg'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x86 = (((gettype($_arg) === gettype(NULL) && $_arg === NULL))|| (((is_float($_arg) || is_int($_arg)) && (is_float(NULL) || is_int(NULL))) && $_arg == NULL));
$x85 = $x86;
if (!JS::toBoolean($x85, $global)) {
$x88 = $_arg;
$x88 = ($x88 === JS::$undefined ? 'undefined' : (is_int($x88) || is_float($x88) ? 'number' : (is_bool($x88) ? 'boolean' : (is_string($x88) ? 'string' : (is_object($x88) && isset($x88->call) ? 'function' : 'object')))));
$x87 = !(((gettype($x88) === gettype('object') && $x88 === 'object'))|| (((is_float($x88) || is_int($x88)) && (is_float('object') || is_int('object'))) && $x88 == 'object'));
$x85 = $x87; }
if (JS::toBoolean($x85, $global)) {

return false;;
};
return isset($_arg->class) &&$_arg->class === 'Array';
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x84=&$scope->properties[\'arguments\'];$x84->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x84->properties[$i]=$args[$i];$x84->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'arg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$global->scope[++$global->scope_sp]=$scope;$x86=(((gettype($_arg)===gettype(NULL)&&$_arg===NULL))||(((is_float($_arg)||is_int($_arg))&&(is_float(NULL)||is_int(NULL)))&&$_arg==NULL));$x85=$x86;if(!JS::toBoolean($x85,$global)){$x88=$_arg;$x88=($x88===JS::$undefined?\'undefined\':(is_int($x88)||is_float($x88)?\'number\':(is_bool($x88)?\'boolean\':(is_string($x88)?\'string\':(is_object($x88)&&isset($x88->call)?\'function\':\'object\')))));$x87=!(((gettype($x88)===gettype(\'object\')&&$x88===\'object\'))||(((is_float($x88)||is_int($x88))&&(is_float(\'object\')||is_int(\'object\')))&&$x88==\'object\'));$x85=$x87;}if(JS::toBoolean($x85,$global)){return false;}return isset($_arg->class)&&$_arg->class===\'Array\';return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x141 =& $scope->properties['arguments'];
$x141->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x141->properties[$i] = $args[$i];
$x141->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x143 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 47, 18, '<image>/04_array.js');
$_TypeError =& $x143[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x143;
$x144 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x145 = $x144($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x145->class) && $x145->class === 'Error' && !isset($x145->properties['file']) && !isset($x145->properties['line']) && !isset($x145->properties['column'])) {$x145->properties['file'] = '<image>/04_array.js';$x145->properties['line'] = 47;$x145->properties['column'] = 18;$x145->attributes['file'] = $x145->attributes['line'] = $x145->attributes['column'] = 0; }
throw new JSException($x145, 47, 18, '<image>/04_array.js');
}
$x142 = JS::toObject($leThis, $global);
unset($x146, $W146, $S146, $U146);
$x147 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x142, JS::toString('join', $global), 47, 18, '<image>/04_array.js');
$x146 =& $x147[0]; list(,$W146,$S146,$U146) = $x147;
if (!(is_object($x146) && isset($x146->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x150 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 47, 18, '<image>/04_array.js');
$_TypeError =& $x150[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x150;
$x151 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x152 = $x151($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x152->class) && $x152->class === 'Error' && !isset($x152->properties['file']) && !isset($x152->properties['line']) && !isset($x152->properties['column'])) {$x152->properties['file'] = '<image>/04_array.js';$x152->properties['line'] = 47;$x152->properties['column'] = 18;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 47, 18, '<image>/04_array.js');
}
$x148 = $x146->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 47, 18);
$x149 = $x148($global, $x142, $x146, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x149;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x141=&$scope->properties[\'arguments\'];$x141->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x141->properties[$i]=$args[$i];$x141->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x143=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),47,18,\'<image>/04_array.js\');$_TypeError=&$x143[0];list(,$WTypeError,$STypeError,$UTypeError)=$x143;$x144=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x145=$x144($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x145->class)&&$x145->class===\'Error\'&&!isset($x145->properties[\'file\'])&&!isset($x145->properties[\'line\'])&&!isset($x145->properties[\'column\'])){$x145->properties[\'file\']=\'<image>/04_array.js\';$x145->properties[\'line\']=47;$x145->properties[\'column\']=18;$x145->attributes[\'file\']=$x145->attributes[\'line\']=$x145->attributes[\'column\']=0;}throw new JSException($x145,47,18,\'<image>/04_array.js\');}$x142=JS::toObject($leThis,$global);unset($x146,$W146,$S146,$U146);$x147=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x142,JS::toString(\'join\',$global),47,18,\'<image>/04_array.js\');$x146=&$x147[0];list(,$W146,$S146,$U146)=$x147;if(!(is_object($x146)&&isset($x146->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x150=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),47,18,\'<image>/04_array.js\');$_TypeError=&$x150[0];list(,$WTypeError,$STypeError,$UTypeError)=$x150;$x151=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x152=$x151($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x152->class)&&$x152->class===\'Error\'&&!isset($x152->properties[\'file\'])&&!isset($x152->properties[\'line\'])&&!isset($x152->properties[\'column\'])){$x152->properties[\'file\']=\'<image>/04_array.js\';$x152->properties[\'line\']=47;$x152->properties[\'column\']=18;$x152->attributes[\'file\']=$x152->attributes[\'line\']=$x152->attributes[\'column\']=0;}throw new JSException($x152,47,18,\'<image>/04_array.js\');}$x148=$x146->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',47,18);$x149=$x148($global,$x142,$x146,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x149;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x183 =& $scope->properties['arguments'];
$x183->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x183->properties[$i] = $args[$i];
$x183->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x184 = clone JS::$arrayTemplate;
$x184->properties['length'] = 0;
$x184->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x184;
for ($x185 = 0;; ++$x185) {
if ($x185 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x186, $W186, $S186, $U186);
$x187 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 55, 26, '<image>/04_array.js');
$x186 =& $x187[0]; list(,$W186,$S186,$U186) = $x187;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x186;
}
if ($x185 !== 0) {
$x188 = ++$_i;
}
$x189 = JS::toPrimitive($_i, $global);
$x190 = JS::toPrimitive($_l, $global);
$x191 = (is_string($x189) && is_string($x190) ? strcmp($x189, $x190) < 0 : (!is_nan($x192 = JS::toNumber($x189, $global)) && !is_nan($x193 = JS::toNumber($x190, $global)) && $x192 < $x193));
if (!JS::toBoolean($x191, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x195 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 56, 16, '<image>/04_array.js');
$_TypeError =& $x195[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x195;
$x196 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x197 = $x196($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x197->class) && $x197->class === 'Error' && !isset($x197->properties['file']) && !isset($x197->properties['line']) && !isset($x197->properties['column'])) {$x197->properties['file'] = '<image>/04_array.js';$x197->properties['line'] = 56;$x197->properties['column'] = 16;$x197->attributes['file'] = $x197->attributes['line'] = $x197->attributes['column'] = 0; }
throw new JSException($x197, 56, 16, '<image>/04_array.js');
}
$x194 = JS::toObject($_newArray, $global);
unset($x198, $W198, $S198, $U198);
$x199 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x194, JS::toString('push', $global), 56, 16, '<image>/04_array.js');
$x198 =& $x199[0]; list(,$W198,$S198,$U198) = $x199;
unset($x200, $W200, $S200, $U200);
$x201 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 56, 21, '<image>/04_array.js');
$x200 =& $x201[0]; list(,$W200,$S200,$U200) = $x201;
if (!(is_object($x198) && isset($x198->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x204 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 56, 16, '<image>/04_array.js');
$_TypeError =& $x204[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x204;
$x205 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x206 = $x205($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x206->class) && $x206->class === 'Error' && !isset($x206->properties['file']) && !isset($x206->properties['line']) && !isset($x206->properties['column'])) {$x206->properties['file'] = '<image>/04_array.js';$x206->properties['line'] = 56;$x206->properties['column'] = 16;$x206->attributes['file'] = $x206->attributes['line'] = $x206->attributes['column'] = 0; }
throw new JSException($x206, 56, 16, '<image>/04_array.js');
}
$x202 = $x198->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 56, 16);
$x203 = $x202($global, $x194, $x198, array($x200), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
for ($x207 = 0;; ++$x207) {
if ($x207 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x208 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 59, 22, '<image>/04_array.js');
$_arguments =& $x208[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x208;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x209 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 59, 22, '<image>/04_array.js');
$_ReferenceError =& $x209[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x209;
$x210 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 59, 22);
$x211 = $x210($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x211->class) && $x211->class === 'Error' && !isset($x211->properties['file']) && !isset($x211->properties['line']) && !isset($x211->properties['column'])) {$x211->properties['file'] = '<image>/04_array.js';$x211->properties['line'] = 59;$x211->properties['column'] = 22;$x211->attributes['file'] = $x211->attributes['line'] = $x211->attributes['column'] = 0; }
throw new JSException($x211, 59, 22, '<image>/04_array.js');
}
unset($x212, $W212, $S212, $U212);
$x213 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 59, 31, '<image>/04_array.js');
$x212 =& $x213[0]; list(,$W212,$S212,$U212) = $x213;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x212;
}
if ($x207 !== 0) {
$x214 = ++$_i;
}
$x215 = JS::toPrimitive($_i, $global);
$x216 = JS::toPrimitive($_l, $global);
$x217 = (is_string($x215) && is_string($x216) ? strcmp($x215, $x216) < 0 : (!is_nan($x218 = JS::toNumber($x215, $global)) && !is_nan($x219 = JS::toNumber($x216, $global)) && $x218 < $x219));
if (!JS::toBoolean($x217, $global)) { break; }

unset($_Array, $WArray, $SArray, $UArray);
$x220 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Array', $global), 60, 7, '<image>/04_array.js');
$_Array =& $x220[0]; list(,$WArray,$SArray,$UArray) = $x220;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x221 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 60, 7, '<image>/04_array.js');
$_ReferenceError =& $x221[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x221;
$x222 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 7);
$x223 = $x222($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x223->class) && $x223->class === 'Error' && !isset($x223->properties['file']) && !isset($x223->properties['line']) && !isset($x223->properties['column'])) {$x223->properties['file'] = '<image>/04_array.js';$x223->properties['line'] = 60;$x223->properties['column'] = 7;$x223->attributes['file'] = $x223->attributes['line'] = $x223->attributes['column'] = 0; }
throw new JSException($x223, 60, 7, '<image>/04_array.js');
}
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x225 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 60, 20, '<image>/04_array.js');
$_TypeError =& $x225[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x225;
$x226 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x227 = $x226($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x227->class) && $x227->class === 'Error' && !isset($x227->properties['file']) && !isset($x227->properties['line']) && !isset($x227->properties['column'])) {$x227->properties['file'] = '<image>/04_array.js';$x227->properties['line'] = 60;$x227->properties['column'] = 20;$x227->attributes['file'] = $x227->attributes['line'] = $x227->attributes['column'] = 0; }
throw new JSException($x227, 60, 20, '<image>/04_array.js');
}
$x224 = JS::toObject($_Array, $global);
unset($x228, $W228, $S228, $U228);
$x229 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x224, JS::toString('isArray', $global), 60, 20, '<image>/04_array.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
unset($x230, $W230, $S230, $U230);
$x231 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 60, 30, '<image>/04_array.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
if (!(is_object($x228) && isset($x228->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x234 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 60, 20, '<image>/04_array.js');
$_TypeError =& $x234[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x234;
$x235 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x236 = $x235($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x236->class) && $x236->class === 'Error' && !isset($x236->properties['file']) && !isset($x236->properties['line']) && !isset($x236->properties['column'])) {$x236->properties['file'] = '<image>/04_array.js';$x236->properties['line'] = 60;$x236->properties['column'] = 20;$x236->attributes['file'] = $x236->attributes['line'] = $x236->attributes['column'] = 0; }
throw new JSException($x236, 60, 20, '<image>/04_array.js');
}
$x232 = $x228->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 60, 20);
$x233 = $x232($global, $x224, $x228, array($x230), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x233, $global)) {
for ($x237 = 0;; ++$x237) {
if ($x237 === 0) {
$scope->properties['j'] = JS::$undefined; $_j =& $scope->properties['j'];
$Uj = FALSE;
$_j = 0;
unset($x238, $W238, $S238, $U238);
$x239 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 61, 33, '<image>/04_array.js');
$x238 =& $x239[0]; list(,$W238,$S238,$U238) = $x239;
unset($x240, $W240, $S240, $U240);
$x241 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x238, JS::toString('length', $global), 61, 36, '<image>/04_array.js');
$x240 =& $x241[0]; list(,$W240,$S240,$U240) = $x241;
$scope->properties['m'] = JS::$undefined; $_m =& $scope->properties['m'];
$Um = FALSE;
$_m = $x240;
}
if ($x237 !== 0) {
$x242 = ++$_j;
}
$x243 = JS::toPrimitive($_j, $global);
$x244 = JS::toPrimitive($_m, $global);
$x245 = (is_string($x243) && is_string($x244) ? strcmp($x243, $x244) < 0 : (!is_nan($x246 = JS::toNumber($x243, $global)) && !is_nan($x247 = JS::toNumber($x244, $global)) && $x246 < $x247));
if (!JS::toBoolean($x245, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x249 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 18, '<image>/04_array.js');
$_TypeError =& $x249[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x249;
$x250 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x251 = $x250($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x251->class) && $x251->class === 'Error' && !isset($x251->properties['file']) && !isset($x251->properties['line']) && !isset($x251->properties['column'])) {$x251->properties['file'] = '<image>/04_array.js';$x251->properties['line'] = 62;$x251->properties['column'] = 18;$x251->attributes['file'] = $x251->attributes['line'] = $x251->attributes['column'] = 0; }
throw new JSException($x251, 62, 18, '<image>/04_array.js');
}
$x248 = JS::toObject($_newArray, $global);
unset($x252, $W252, $S252, $U252);
$x253 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x248, JS::toString('push', $global), 62, 18, '<image>/04_array.js');
$x252 =& $x253[0]; list(,$W252,$S252,$U252) = $x253;
unset($x254, $W254, $S254, $U254);
$x255 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 62, 28, '<image>/04_array.js');
$x254 =& $x255[0]; list(,$W254,$S254,$U254) = $x255;
unset($x256, $W256, $S256, $U256);
$x257 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x254, JS::toString($_j, $global), 62, 31, '<image>/04_array.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
if (!(is_object($x252) && isset($x252->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x260 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 18, '<image>/04_array.js');
$_TypeError =& $x260[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x260;
$x261 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x262 = $x261($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x262->class) && $x262->class === 'Error' && !isset($x262->properties['file']) && !isset($x262->properties['line']) && !isset($x262->properties['column'])) {$x262->properties['file'] = '<image>/04_array.js';$x262->properties['line'] = 62;$x262->properties['column'] = 18;$x262->attributes['file'] = $x262->attributes['line'] = $x262->attributes['column'] = 0; }
throw new JSException($x262, 62, 18, '<image>/04_array.js');
}
$x258 = $x252->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 62, 18);
$x259 = $x258($global, $x248, $x252, array($x256), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
}
else {
if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x264 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 66, 17, '<image>/04_array.js');
$_TypeError =& $x264[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x264;
$x265 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x266 = $x265($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x266->class) && $x266->class === 'Error' && !isset($x266->properties['file']) && !isset($x266->properties['line']) && !isset($x266->properties['column'])) {$x266->properties['file'] = '<image>/04_array.js';$x266->properties['line'] = 66;$x266->properties['column'] = 17;$x266->attributes['file'] = $x266->attributes['line'] = $x266->attributes['column'] = 0; }
throw new JSException($x266, 66, 17, '<image>/04_array.js');
}
$x263 = JS::toObject($_newArray, $global);
unset($x267, $W267, $S267, $U267);
$x268 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x263, JS::toString('push', $global), 66, 17, '<image>/04_array.js');
$x267 =& $x268[0]; list(,$W267,$S267,$U267) = $x268;
unset($x269, $W269, $S269, $U269);
$x270 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 66, 27, '<image>/04_array.js');
$x269 =& $x270[0]; list(,$W269,$S269,$U269) = $x270;
if (!(is_object($x267) && isset($x267->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x273 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 66, 17, '<image>/04_array.js');
$_TypeError =& $x273[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x273;
$x274 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x275 = $x274($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x275->class) && $x275->class === 'Error' && !isset($x275->properties['file']) && !isset($x275->properties['line']) && !isset($x275->properties['column'])) {$x275->properties['file'] = '<image>/04_array.js';$x275->properties['line'] = 66;$x275->properties['column'] = 17;$x275->attributes['file'] = $x275->attributes['line'] = $x275->attributes['column'] = 0; }
throw new JSException($x275, 66, 17, '<image>/04_array.js');
}
$x271 = $x267->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 66, 17);
$x272 = $x271($global, $x263, $x267, array($x269), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x183=&$scope->properties[\'arguments\'];$x183->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x183->properties[$i]=$args[$i];$x183->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$x184=clone JS::$arrayTemplate;$x184->properties[\'length\']=0;$x184->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x184;for($x185=0;;++$x185){if($x185===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x186,$W186,$S186,$U186);$x187=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),55,26,\'<image>/04_array.js\');$x186=&$x187[0];list(,$W186,$S186,$U186)=$x187;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x186;}if($x185!==0){$x188=++$_i;}$x189=JS::toPrimitive($_i,$global);$x190=JS::toPrimitive($_l,$global);$x191=(is_string($x189)&&is_string($x190)?strcmp($x189,$x190)<0:(!is_nan($x192=JS::toNumber($x189,$global))&&!is_nan($x193=JS::toNumber($x190,$global))&&$x192<$x193));if(!JS::toBoolean($x191,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x195=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,16,\'<image>/04_array.js\');$_TypeError=&$x195[0];list(,$WTypeError,$STypeError,$UTypeError)=$x195;$x196=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x197=$x196($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x197->class)&&$x197->class===\'Error\'&&!isset($x197->properties[\'file\'])&&!isset($x197->properties[\'line\'])&&!isset($x197->properties[\'column\'])){$x197->properties[\'file\']=\'<image>/04_array.js\';$x197->properties[\'line\']=56;$x197->properties[\'column\']=16;$x197->attributes[\'file\']=$x197->attributes[\'line\']=$x197->attributes[\'column\']=0;}throw new JSException($x197,56,16,\'<image>/04_array.js\');}$x194=JS::toObject($_newArray,$global);unset($x198,$W198,$S198,$U198);$x199=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x194,JS::toString(\'push\',$global),56,16,\'<image>/04_array.js\');$x198=&$x199[0];list(,$W198,$S198,$U198)=$x199;unset($x200,$W200,$S200,$U200);$x201=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),56,21,\'<image>/04_array.js\');$x200=&$x201[0];list(,$W200,$S200,$U200)=$x201;if(!(is_object($x198)&&isset($x198->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x204=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,16,\'<image>/04_array.js\');$_TypeError=&$x204[0];list(,$WTypeError,$STypeError,$UTypeError)=$x204;$x205=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x206=$x205($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x206->class)&&$x206->class===\'Error\'&&!isset($x206->properties[\'file\'])&&!isset($x206->properties[\'line\'])&&!isset($x206->properties[\'column\'])){$x206->properties[\'file\']=\'<image>/04_array.js\';$x206->properties[\'line\']=56;$x206->properties[\'column\']=16;$x206->attributes[\'file\']=$x206->attributes[\'line\']=$x206->attributes[\'column\']=0;}throw new JSException($x206,56,16,\'<image>/04_array.js\');}$x202=$x198->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',56,16);$x203=$x202($global,$x194,$x198,array($x200),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}for($x207=0;;++$x207){if($x207===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x208=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),59,22,\'<image>/04_array.js\');$_arguments=&$x208[0];list(,$Warguments,$Sarguments,$Uarguments)=$x208;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x209=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),59,22,\'<image>/04_array.js\');$_ReferenceError=&$x209[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x209;$x210=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',59,22);$x211=$x210($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x211->class)&&$x211->class===\'Error\'&&!isset($x211->properties[\'file\'])&&!isset($x211->properties[\'line\'])&&!isset($x211->properties[\'column\'])){$x211->properties[\'file\']=\'<image>/04_array.js\';$x211->properties[\'line\']=59;$x211->properties[\'column\']=22;$x211->attributes[\'file\']=$x211->attributes[\'line\']=$x211->attributes[\'column\']=0;}throw new JSException($x211,59,22,\'<image>/04_array.js\');}unset($x212,$W212,$S212,$U212);$x213=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),59,31,\'<image>/04_array.js\');$x212=&$x213[0];list(,$W212,$S212,$U212)=$x213;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x212;}if($x207!==0){$x214=++$_i;}$x215=JS::toPrimitive($_i,$global);$x216=JS::toPrimitive($_l,$global);$x217=(is_string($x215)&&is_string($x216)?strcmp($x215,$x216)<0:(!is_nan($x218=JS::toNumber($x215,$global))&&!is_nan($x219=JS::toNumber($x216,$global))&&$x218<$x219));if(!JS::toBoolean($x217,$global)){break;}unset($_Array,$WArray,$SArray,$UArray);$x220=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Array\',$global),60,7,\'<image>/04_array.js\');$_Array=&$x220[0];list(,$WArray,$SArray,$UArray)=$x220;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x221=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),60,7,\'<image>/04_array.js\');$_ReferenceError=&$x221[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x221;$x222=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,7);$x223=$x222($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x223->class)&&$x223->class===\'Error\'&&!isset($x223->properties[\'file\'])&&!isset($x223->properties[\'line\'])&&!isset($x223->properties[\'column\'])){$x223->properties[\'file\']=\'<image>/04_array.js\';$x223->properties[\'line\']=60;$x223->properties[\'column\']=7;$x223->attributes[\'file\']=$x223->attributes[\'line\']=$x223->attributes[\'column\']=0;}throw new JSException($x223,60,7,\'<image>/04_array.js\');}if($_Array===JS::$undefined||$_Array===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x225=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,20,\'<image>/04_array.js\');$_TypeError=&$x225[0];list(,$WTypeError,$STypeError,$UTypeError)=$x225;$x226=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x227=$x226($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x227->class)&&$x227->class===\'Error\'&&!isset($x227->properties[\'file\'])&&!isset($x227->properties[\'line\'])&&!isset($x227->properties[\'column\'])){$x227->properties[\'file\']=\'<image>/04_array.js\';$x227->properties[\'line\']=60;$x227->properties[\'column\']=20;$x227->attributes[\'file\']=$x227->attributes[\'line\']=$x227->attributes[\'column\']=0;}throw new JSException($x227,60,20,\'<image>/04_array.js\');}$x224=JS::toObject($_Array,$global);unset($x228,$W228,$S228,$U228);$x229=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x224,JS::toString(\'isArray\',$global),60,20,\'<image>/04_array.js\');$x228=&$x229[0];list(,$W228,$S228,$U228)=$x229;unset($x230,$W230,$S230,$U230);$x231=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),60,30,\'<image>/04_array.js\');$x230=&$x231[0];list(,$W230,$S230,$U230)=$x231;if(!(is_object($x228)&&isset($x228->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x234=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,20,\'<image>/04_array.js\');$_TypeError=&$x234[0];list(,$WTypeError,$STypeError,$UTypeError)=$x234;$x235=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x236=$x235($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x236->class)&&$x236->class===\'Error\'&&!isset($x236->properties[\'file\'])&&!isset($x236->properties[\'line\'])&&!isset($x236->properties[\'column\'])){$x236->properties[\'file\']=\'<image>/04_array.js\';$x236->properties[\'line\']=60;$x236->properties[\'column\']=20;$x236->attributes[\'file\']=$x236->attributes[\'line\']=$x236->attributes[\'column\']=0;}throw new JSException($x236,60,20,\'<image>/04_array.js\');}$x232=$x228->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',60,20);$x233=$x232($global,$x224,$x228,array($x230),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x233,$global)){for($x237=0;;++$x237){if($x237===0){$scope->properties[\'j\']=JS::$undefined;$_j=&$scope->properties[\'j\'];$Uj=FALSE;$_j=0;unset($x238,$W238,$S238,$U238);$x239=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),61,33,\'<image>/04_array.js\');$x238=&$x239[0];list(,$W238,$S238,$U238)=$x239;unset($x240,$W240,$S240,$U240);$x241=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x238,JS::toString(\'length\',$global),61,36,\'<image>/04_array.js\');$x240=&$x241[0];list(,$W240,$S240,$U240)=$x241;$scope->properties[\'m\']=JS::$undefined;$_m=&$scope->properties[\'m\'];$Um=FALSE;$_m=$x240;}if($x237!==0){$x242=++$_j;}$x243=JS::toPrimitive($_j,$global);$x244=JS::toPrimitive($_m,$global);$x245=(is_string($x243)&&is_string($x244)?strcmp($x243,$x244)<0:(!is_nan($x246=JS::toNumber($x243,$global))&&!is_nan($x247=JS::toNumber($x244,$global))&&$x246<$x247));if(!JS::toBoolean($x245,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x249=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,18,\'<image>/04_array.js\');$_TypeError=&$x249[0];list(,$WTypeError,$STypeError,$UTypeError)=$x249;$x250=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x251=$x250($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x251->class)&&$x251->class===\'Error\'&&!isset($x251->properties[\'file\'])&&!isset($x251->properties[\'line\'])&&!isset($x251->properties[\'column\'])){$x251->properties[\'file\']=\'<image>/04_array.js\';$x251->properties[\'line\']=62;$x251->properties[\'column\']=18;$x251->attributes[\'file\']=$x251->attributes[\'line\']=$x251->attributes[\'column\']=0;}throw new JSException($x251,62,18,\'<image>/04_array.js\');}$x248=JS::toObject($_newArray,$global);unset($x252,$W252,$S252,$U252);$x253=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x248,JS::toString(\'push\',$global),62,18,\'<image>/04_array.js\');$x252=&$x253[0];list(,$W252,$S252,$U252)=$x253;unset($x254,$W254,$S254,$U254);$x255=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),62,28,\'<image>/04_array.js\');$x254=&$x255[0];list(,$W254,$S254,$U254)=$x255;unset($x256,$W256,$S256,$U256);$x257=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x254,JS::toString($_j,$global),62,31,\'<image>/04_array.js\');$x256=&$x257[0];list(,$W256,$S256,$U256)=$x257;if(!(is_object($x252)&&isset($x252->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x260=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,18,\'<image>/04_array.js\');$_TypeError=&$x260[0];list(,$WTypeError,$STypeError,$UTypeError)=$x260;$x261=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x262=$x261($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x262->class)&&$x262->class===\'Error\'&&!isset($x262->properties[\'file\'])&&!isset($x262->properties[\'line\'])&&!isset($x262->properties[\'column\'])){$x262->properties[\'file\']=\'<image>/04_array.js\';$x262->properties[\'line\']=62;$x262->properties[\'column\']=18;$x262->attributes[\'file\']=$x262->attributes[\'line\']=$x262->attributes[\'column\']=0;}throw new JSException($x262,62,18,\'<image>/04_array.js\');}$x258=$x252->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',62,18);$x259=$x258($global,$x248,$x252,array($x256),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}else{if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x264=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),66,17,\'<image>/04_array.js\');$_TypeError=&$x264[0];list(,$WTypeError,$STypeError,$UTypeError)=$x264;$x265=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x266=$x265($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x266->class)&&$x266->class===\'Error\'&&!isset($x266->properties[\'file\'])&&!isset($x266->properties[\'line\'])&&!isset($x266->properties[\'column\'])){$x266->properties[\'file\']=\'<image>/04_array.js\';$x266->properties[\'line\']=66;$x266->properties[\'column\']=17;$x266->attributes[\'file\']=$x266->attributes[\'line\']=$x266->attributes[\'column\']=0;}throw new JSException($x266,66,17,\'<image>/04_array.js\');}$x263=JS::toObject($_newArray,$global);unset($x267,$W267,$S267,$U267);$x268=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x263,JS::toString(\'push\',$global),66,17,\'<image>/04_array.js\');$x267=&$x268[0];list(,$W267,$S267,$U267)=$x268;unset($x269,$W269,$S269,$U269);$x270=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),66,27,\'<image>/04_array.js\');$x269=&$x270[0];list(,$W269,$S269,$U269)=$x270;if(!(is_object($x267)&&isset($x267->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x273=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),66,17,\'<image>/04_array.js\');$_TypeError=&$x273[0];list(,$WTypeError,$STypeError,$UTypeError)=$x273;$x274=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x275=$x274($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x275->class)&&$x275->class===\'Error\'&&!isset($x275->properties[\'file\'])&&!isset($x275->properties[\'line\'])&&!isset($x275->properties[\'column\'])){$x275->properties[\'file\']=\'<image>/04_array.js\';$x275->properties[\'line\']=66;$x275->properties[\'column\']=17;$x275->attributes[\'file\']=$x275->attributes[\'line\']=$x275->attributes[\'column\']=0;}throw new JSException($x275,66,17,\'<image>/04_array.js\');}$x271=$x267->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',66,17);$x272=$x271($global,$x263,$x267,array($x269),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x290 =& $scope->properties['arguments'];
$x290->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x290->properties[$i] = $args[$i];
$x290->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x291 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x291, $global)) {
$x292 = ',';
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x292;;
};
$scope->properties['string'] = JS::$undefined; $_string =& $scope->properties['string'];
$Ustring = FALSE;
$_string = '';
unset($x296, $W296, $S296, $U296);
$x297 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 80, 10, '<image>/04_array.js');
$x296 =& $x297[0]; list(,$W296,$S296,$U296) = $x297;
$x293 = JS::toPrimitive($x296, $global);
$x294 = JS::toPrimitive(1, $global);
$x295 = (is_string($x293) && is_string($x294) ? strcmp($x293, $x294) < 0 : (!is_nan($x298 = JS::toNumber($x293, $global)) && !is_nan($x299 = JS::toNumber($x294, $global)) && $x298 < $x299));
if (JS::toBoolean($x295, $global)) {

return '';;
};
for ($x300 = 0;; ++$x300) {
if ($x300 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x301, $W301, $S301, $U301);
$x302 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 84, 26, '<image>/04_array.js');
$x301 =& $x302[0]; list(,$W301,$S301,$U301) = $x302;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x301;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = JS::$undefined;
}
if ($x300 !== 0) {
$x303 = ++$_i;
}
$x304 = JS::toPrimitive($_i, $global);
$x305 = JS::toPrimitive($_l, $global);
$x306 = (is_string($x304) && is_string($x305) ? strcmp($x304, $x305) < 0 : (!is_nan($x307 = JS::toNumber($x304, $global)) && !is_nan($x308 = JS::toNumber($x305, $global)) && $x307 < $x308));
if (!JS::toBoolean($x306, $global)) { break; }

$x309 = !(((gettype($_i) === gettype(0) && $_i === 0))|| (((is_float($_i) || is_int($_i)) && (is_float(0) || is_int(0))) && $_i == 0));
if (JS::toBoolean($x309, $global)) {
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x310 = JS::toPrimitive($_string, $global);
$x311 = JS::toPrimitive($_separator, $global);
$_string = (is_string($x310) || is_string($x311) ? JS::toString($x310, $global) . JS::toString($x311, $global) : JS::toNumber($x310, $global) + JS::toNumber($x311, $global));;
};
unset($x312, $W312, $S312, $U312);
$x313 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 89, 14, '<image>/04_array.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x312;
$x315 = !(((gettype($_item) === gettype(JS::$undefined) && $_item === JS::$undefined))|| (((is_float($_item) || is_int($_item)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_item == JS::$undefined));
$x314 = $x315;
if (JS::toBoolean($x314, $global)) {
$x316 = !(((gettype($_item) === gettype(NULL) && $_item === NULL))|| (((is_float($_item) || is_int($_item)) && (is_float(NULL) || is_int(NULL))) && $_item == NULL));
$x314 = $x316; }
if (JS::toBoolean($x314, $global)) {
$x317 = JS::toString($_item, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$x318 = JS::toPrimitive($_string, $global);
$x319 = JS::toPrimitive($x317, $global);
$_string = (is_string($x318) || is_string($x319) ? JS::toString($x318, $global) . JS::toString($x319, $global) : JS::toNumber($x318, $global) + JS::toNumber($x319, $global));;
};;
};
return $_string;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x290=&$scope->properties[\'arguments\'];$x290->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x290->properties[$i]=$args[$i];$x290->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$global->scope[++$global->scope_sp]=$scope;$x291=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x291,$global)){$x292=\',\';if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x292;}$scope->properties[\'string\']=JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$_string=\'\';unset($x296,$W296,$S296,$U296);$x297=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),80,10,\'<image>/04_array.js\');$x296=&$x297[0];list(,$W296,$S296,$U296)=$x297;$x293=JS::toPrimitive($x296,$global);$x294=JS::toPrimitive(1,$global);$x295=(is_string($x293)&&is_string($x294)?strcmp($x293,$x294)<0:(!is_nan($x298=JS::toNumber($x293,$global))&&!is_nan($x299=JS::toNumber($x294,$global))&&$x298<$x299));if(JS::toBoolean($x295,$global)){return\'\';}for($x300=0;;++$x300){if($x300===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x301,$W301,$S301,$U301);$x302=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),84,26,\'<image>/04_array.js\');$x301=&$x302[0];list(,$W301,$S301,$U301)=$x302;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x301;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;}if($x300!==0){$x303=++$_i;}$x304=JS::toPrimitive($_i,$global);$x305=JS::toPrimitive($_l,$global);$x306=(is_string($x304)&&is_string($x305)?strcmp($x304,$x305)<0:(!is_nan($x307=JS::toNumber($x304,$global))&&!is_nan($x308=JS::toNumber($x305,$global))&&$x307<$x308));if(!JS::toBoolean($x306,$global)){break;}$x309=!(((gettype($_i)===gettype(0)&&$_i===0))||(((is_float($_i)||is_int($_i))&&(is_float(0)||is_int(0)))&&$_i==0));if(JS::toBoolean($x309,$global)){if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x310=JS::toPrimitive($_string,$global);$x311=JS::toPrimitive($_separator,$global);$_string=(is_string($x310)||is_string($x311)?JS::toString($x310,$global).JS::toString($x311,$global):JS::toNumber($x310,$global)+JS::toNumber($x311,$global));}unset($x312,$W312,$S312,$U312);$x313=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),89,14,\'<image>/04_array.js\');$x312=&$x313[0];list(,$W312,$S312,$U312)=$x313;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x312;$x315=!(((gettype($_item)===gettype(JS::$undefined)&&$_item===JS::$undefined))||(((is_float($_item)||is_int($_item))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_item==JS::$undefined));$x314=$x315;if(JS::toBoolean($x314,$global)){$x316=!(((gettype($_item)===gettype(NULL)&&$_item===NULL))||(((is_float($_item)||is_int($_item))&&(is_float(NULL)||is_int(NULL)))&&$_item==NULL));$x314=$x316;}if(JS::toBoolean($x314,$global)){$x317=JS::toString($_item,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$x318=JS::toPrimitive($_string,$global);$x319=JS::toPrimitive($x317,$global);$_string=(is_string($x318)||is_string($x319)?JS::toString($x318,$global).JS::toString($x319,$global):JS::toNumber($x318,$global)+JS::toNumber($x319,$global));}}return$_string;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x334 =& $scope->properties['arguments'];
$x334->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x334->properties[$i] = $args[$i];
$x334->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x338, $W338, $S338, $U338);
$x339 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 100, 10, '<image>/04_array.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
$x335 = JS::toPrimitive($x338, $global);
$x336 = JS::toPrimitive(1, $global);
$x337 = (is_string($x335) && is_string($x336) ? strcmp($x335, $x336) < 0 : (!is_nan($x340 = JS::toNumber($x335, $global)) && !is_nan($x341 = JS::toNumber($x336, $global)) && $x340 < $x341));
if (JS::toBoolean($x337, $global)) {

return JS::$undefined;;
};
unset($x342, $W342, $S342, $U342);
$x343 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 104, 22, '<image>/04_array.js');
$x342 =& $x343[0]; list(,$W342,$S342,$U342) = $x343;
unset($x344, $W344, $S344, $U344);
$x345 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString((JS::toNumber($x342, $global) - JS::toNumber(1, $global)), $global), 104, 17, '<image>/04_array.js');
$x344 =& $x345[0]; list(,$W344,$S344,$U344) = $x345;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x344;
unset($x346, $W346, $S346, $U346);
$x347 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 104, 46, '<image>/04_array.js');
$x346 =& $x347[0]; list(,$W346,$S346,$U346) = $x347;
$scope->properties['len'] = JS::$undefined; $_len =& $scope->properties['len'];
$Ulen = FALSE;
$_len = $x346;
unset($x349, $W349, $S349, $U349);
$x350 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 105, 18, '<image>/04_array.js');
$x349 =& $x350[0]; list(,$W349,$S349,$U349) = $x350;
if (!array_key_exists((JS::toNumber($x349, $global) - JS::toNumber(1, $global)), $leThis->attributes)) { unset($leThis->properties[(JS::toNumber($x349, $global) - JS::toNumber(1, $global))]); $x348 = TRUE; }
else if ($leThis->attributes[(JS::toNumber($x349, $global) - JS::toNumber(1, $global))] & JS::CONFIGURABLE) { unset($leThis->properties[(JS::toNumber($x349, $global) - JS::toNumber(1, $global))], $leThis->attributes[(JS::toNumber($x349, $global) - JS::toNumber(1, $global))], $leThis->getters[(JS::toNumber($x349, $global) - JS::toNumber(1, $global))], $leThis->setters[(JS::toNumber($x349, $global) - JS::toNumber(1, $global))]); $x348 = TRUE; }
else { $x348 = FALSE; };
$x351 = (JS::toNumber($_len, $global) - JS::toNumber(1, $global));
$x352 = JS::toString('length', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x353 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 106, 14, '<image>/04_array.js');
$_TypeError =& $x353[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x353;
$x354 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x355 = $x354($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x355->class) && $x355->class === 'Error' && !isset($x355->properties['file']) && !isset($x355->properties['line']) && !isset($x355->properties['column'])) {$x355->properties['file'] = '<image>/04_array.js';$x355->properties['line'] = 106;$x355->properties['column'] = 14;$x355->attributes['file'] = $x355->attributes['line'] = $x355->attributes['column'] = 0; }
throw new JSException($x355, 106, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x356, $W356, $S356, $U356);
$x357 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x352, $global), 106, 14, '<image>/04_array.js');
$x356 =& $x357[0]; list(,$W356,$S356,$U356) = $x357;
if ($U356 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x352] = $x356; $x356 =& $leThis->properties[$x352]; $leThis->attributes[$x352] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U356 = FALSE; $W356 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x359 = $leThis->properties['length']; }  else { $x359 = 0; } }
if (isset($S356)) {
$x360 = $S356->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 106, 14);
$x361 = $x360($global, $leThis, $S356, array($x351), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x358 = $x361;
} else {
if (!$U356) {$x358 = $x351;if ($W356) { $x356 = $x351; }  }
else { $x358 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; }else if ($x352 === 'length' && is_int($x351) && $x359 > $x351) {  for ($i = $x351; $i < $x359; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x334=&$scope->properties[\'arguments\'];$x334->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x334->properties[$i]=$args[$i];$x334->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x338,$W338,$S338,$U338);$x339=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),100,10,\'<image>/04_array.js\');$x338=&$x339[0];list(,$W338,$S338,$U338)=$x339;$x335=JS::toPrimitive($x338,$global);$x336=JS::toPrimitive(1,$global);$x337=(is_string($x335)&&is_string($x336)?strcmp($x335,$x336)<0:(!is_nan($x340=JS::toNumber($x335,$global))&&!is_nan($x341=JS::toNumber($x336,$global))&&$x340<$x341));if(JS::toBoolean($x337,$global)){return JS::$undefined;}unset($x342,$W342,$S342,$U342);$x343=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),104,22,\'<image>/04_array.js\');$x342=&$x343[0];list(,$W342,$S342,$U342)=$x343;unset($x344,$W344,$S344,$U344);$x345=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString((JS::toNumber($x342,$global)-JS::toNumber(1,$global)),$global),104,17,\'<image>/04_array.js\');$x344=&$x345[0];list(,$W344,$S344,$U344)=$x345;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x344;unset($x346,$W346,$S346,$U346);$x347=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),104,46,\'<image>/04_array.js\');$x346=&$x347[0];list(,$W346,$S346,$U346)=$x347;$scope->properties[\'len\']=JS::$undefined;$_len=&$scope->properties[\'len\'];$Ulen=FALSE;$_len=$x346;unset($x349,$W349,$S349,$U349);$x350=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),105,18,\'<image>/04_array.js\');$x349=&$x350[0];list(,$W349,$S349,$U349)=$x350;if(!array_key_exists((JS::toNumber($x349,$global)-JS::toNumber(1,$global)),$leThis->attributes)){unset($leThis->properties[(JS::toNumber($x349,$global)-JS::toNumber(1,$global))]);$x348=TRUE;}else if($leThis->attributes[(JS::toNumber($x349,$global)-JS::toNumber(1,$global))]&JS::CONFIGURABLE){unset($leThis->properties[(JS::toNumber($x349,$global)-JS::toNumber(1,$global))],$leThis->attributes[(JS::toNumber($x349,$global)-JS::toNumber(1,$global))],$leThis->getters[(JS::toNumber($x349,$global)-JS::toNumber(1,$global))],$leThis->setters[(JS::toNumber($x349,$global)-JS::toNumber(1,$global))]);$x348=TRUE;}else{$x348=FALSE;}$x351=(JS::toNumber($_len,$global)-JS::toNumber(1,$global));$x352=JS::toString(\'length\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x353=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),106,14,\'<image>/04_array.js\');$_TypeError=&$x353[0];list(,$WTypeError,$STypeError,$UTypeError)=$x353;$x354=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x355=$x354($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x355->class)&&$x355->class===\'Error\'&&!isset($x355->properties[\'file\'])&&!isset($x355->properties[\'line\'])&&!isset($x355->properties[\'column\'])){$x355->properties[\'file\']=\'<image>/04_array.js\';$x355->properties[\'line\']=106;$x355->properties[\'column\']=14;$x355->attributes[\'file\']=$x355->attributes[\'line\']=$x355->attributes[\'column\']=0;}throw new JSException($x355,106,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x356,$W356,$S356,$U356);$x357=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x352,$global),106,14,\'<image>/04_array.js\');$x356=&$x357[0];list(,$W356,$S356,$U356)=$x357;if($U356&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x352]=$x356;$x356=&$leThis->properties[$x352];$leThis->attributes[$x352]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U356=FALSE;$W356=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x359=$leThis->properties[\'length\'];}else{$x359=0;}}if(isset($S356)){$x360=$S356->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',106,14);$x361=$x360($global,$leThis,$S356,array($x351),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x358=$x361;}else{if(!$U356){$x358=$x351;if($W356){$x356=$x351;}}else{$x358=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}else if($x352===\'length\'&&is_int($x351)&&$x359>$x351){for($i=$x351;$i<$x359;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x377 = 0;; ++$x377) {
if ($x377 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x376 =& $scope->properties['arguments'];
$x376->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x376->properties[$i] = $args[$i];
$x376->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x378 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 112, 22, '<image>/04_array.js');
$_arguments =& $x378[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x378;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x379 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 112, 22, '<image>/04_array.js');
$_ReferenceError =& $x379[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x379;
$x380 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 112, 22);
$x381 = $x380($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x381->class) && $x381->class === 'Error' && !isset($x381->properties['file']) && !isset($x381->properties['line']) && !isset($x381->properties['column'])) {$x381->properties['file'] = '<image>/04_array.js';$x381->properties['line'] = 112;$x381->properties['column'] = 22;$x381->attributes['file'] = $x381->attributes['line'] = $x381->attributes['column'] = 0; }
throw new JSException($x381, 112, 22, '<image>/04_array.js');
}
unset($x382, $W382, $S382, $U382);
$x383 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 112, 31, '<image>/04_array.js');
$x382 =& $x383[0]; list(,$W382,$S382,$U382) = $x383;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x382;
}
if ($x377 !== 0) {
$x384 = ++$_i;
}
$x385 = JS::toPrimitive($_i, $global);
$x386 = JS::toPrimitive($_l, $global);
$x387 = (is_string($x385) && is_string($x386) ? strcmp($x385, $x386) < 0 : (!is_nan($x388 = JS::toNumber($x385, $global)) && !is_nan($x389 = JS::toNumber($x386, $global)) && $x388 < $x389));
if (!JS::toBoolean($x387, $global)) { break; }

unset($x390, $W390, $S390, $U390);
$x391 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 113, 32, '<image>/04_array.js');
$x390 =& $x391[0]; list(,$W390,$S390,$U390) = $x391;
unset($x392, $W392, $S392, $U392);
$x393 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 113, 12, '<image>/04_array.js');
$x392 =& $x393[0]; list(,$W392,$S392,$U392) = $x393;
$x394 = JS::toString($x392, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x395 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 113, 21, '<image>/04_array.js');
$_TypeError =& $x395[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x395;
$x396 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x397 = $x396($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x397->class) && $x397->class === 'Error' && !isset($x397->properties['file']) && !isset($x397->properties['line']) && !isset($x397->properties['column'])) {$x397->properties['file'] = '<image>/04_array.js';$x397->properties['line'] = 113;$x397->properties['column'] = 21;$x397->attributes['file'] = $x397->attributes['line'] = $x397->attributes['column'] = 0; }
throw new JSException($x397, 113, 21, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x398, $W398, $S398, $U398);
$x399 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x394, $global), 113, 21, '<image>/04_array.js');
$x398 =& $x399[0]; list(,$W398,$S398,$U398) = $x399;
if ($U398 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x394] = $x398; $x398 =& $leThis->properties[$x394]; $leThis->attributes[$x394] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U398 = FALSE; $W398 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x401 = $leThis->properties['length']; }  else { $x401 = 0; } }
if (isset($S398)) {
$x402 = $S398->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 113, 21);
$x403 = $x402($global, $leThis, $S398, array($x390), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x400 = $x403;
} else {
if (!$U398) {$x400 = $x390;if ($W398) { $x398 = $x390; }  }
else { $x400 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int($x392) && $x392 >= $leThis->properties['length']) { $leThis->properties['length'] = $x392 + 1; }else if ($x394 === 'length' && is_int($x390) && $x401 > $x390) {  for ($i = $x390; $i < $x401; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
};
unset($x404, $W404, $S404, $U404);
$x405 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 116, 13, '<image>/04_array.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
return $x404;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_10($global,$leThis,$fn,$args,$constructor=FALSE){for($x377=0;;++$x377){if($x377===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x376=&$scope->properties[\'arguments\'];$x376->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x376->properties[$i]=$args[$i];$x376->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x378=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),112,22,\'<image>/04_array.js\');$_arguments=&$x378[0];list(,$Warguments,$Sarguments,$Uarguments)=$x378;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x379=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),112,22,\'<image>/04_array.js\');$_ReferenceError=&$x379[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x379;$x380=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',112,22);$x381=$x380($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x381->class)&&$x381->class===\'Error\'&&!isset($x381->properties[\'file\'])&&!isset($x381->properties[\'line\'])&&!isset($x381->properties[\'column\'])){$x381->properties[\'file\']=\'<image>/04_array.js\';$x381->properties[\'line\']=112;$x381->properties[\'column\']=22;$x381->attributes[\'file\']=$x381->attributes[\'line\']=$x381->attributes[\'column\']=0;}throw new JSException($x381,112,22,\'<image>/04_array.js\');}unset($x382,$W382,$S382,$U382);$x383=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),112,31,\'<image>/04_array.js\');$x382=&$x383[0];list(,$W382,$S382,$U382)=$x383;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x382;}if($x377!==0){$x384=++$_i;}$x385=JS::toPrimitive($_i,$global);$x386=JS::toPrimitive($_l,$global);$x387=(is_string($x385)&&is_string($x386)?strcmp($x385,$x386)<0:(!is_nan($x388=JS::toNumber($x385,$global))&&!is_nan($x389=JS::toNumber($x386,$global))&&$x388<$x389));if(!JS::toBoolean($x387,$global)){break;}unset($x390,$W390,$S390,$U390);$x391=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),113,32,\'<image>/04_array.js\');$x390=&$x391[0];list(,$W390,$S390,$U390)=$x391;unset($x392,$W392,$S392,$U392);$x393=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),113,12,\'<image>/04_array.js\');$x392=&$x393[0];list(,$W392,$S392,$U392)=$x393;$x394=JS::toString($x392,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x395=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),113,21,\'<image>/04_array.js\');$_TypeError=&$x395[0];list(,$WTypeError,$STypeError,$UTypeError)=$x395;$x396=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x397=$x396($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x397->class)&&$x397->class===\'Error\'&&!isset($x397->properties[\'file\'])&&!isset($x397->properties[\'line\'])&&!isset($x397->properties[\'column\'])){$x397->properties[\'file\']=\'<image>/04_array.js\';$x397->properties[\'line\']=113;$x397->properties[\'column\']=21;$x397->attributes[\'file\']=$x397->attributes[\'line\']=$x397->attributes[\'column\']=0;}throw new JSException($x397,113,21,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x398,$W398,$S398,$U398);$x399=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x394,$global),113,21,\'<image>/04_array.js\');$x398=&$x399[0];list(,$W398,$S398,$U398)=$x399;if($U398&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x394]=$x398;$x398=&$leThis->properties[$x394];$leThis->attributes[$x394]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U398=FALSE;$W398=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x401=$leThis->properties[\'length\'];}else{$x401=0;}}if(isset($S398)){$x402=$S398->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',113,21);$x403=$x402($global,$leThis,$S398,array($x390),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x400=$x403;}else{if(!$U398){$x400=$x390;if($W398){$x398=$x390;}}else{$x400=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int($x392)&&$x392>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$x392+1;}else if($x394===\'length\'&&is_int($x390)&&$x401>$x390){for($i=$x390;$i<$x401;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}}unset($x404,$W404,$S404,$U404);$x405=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),116,13,\'<image>/04_array.js\');$x404=&$x405[0];list(,$W404,$S404,$U404)=$x405;return$x404;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_11($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x421 = 0;; ++$x421) {
if ($x421 === 0) {
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
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = 0;
unset($x422, $W422, $S422, $U422);
$x423 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 120, 26, '<image>/04_array.js');
$x422 =& $x423[0]; list(,$W422,$S422,$U422) = $x423;
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = (JS::toNumber($x422, $global) - JS::toNumber(1, $global));
}
if ($x421 !== 0) {
$x424 = ++$_l;
$x425 = --$_r;
}
$x426 = JS::toPrimitive($_l, $global);
$x427 = JS::toPrimitive($_r, $global);
$x428 = (is_string($x426) && is_string($x427) ? strcmp($x426, $x427) < 0 : (!is_nan($x429 = JS::toNumber($x426, $global)) && !is_nan($x430 = JS::toNumber($x427, $global)) && $x429 < $x430));
if (!JS::toBoolean($x428, $global)) { break; }

unset($x431, $W431, $S431, $U431);
$x432 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_l, $global), 121, 17, '<image>/04_array.js');
$x431 =& $x432[0]; list(,$W431,$S431,$U431) = $x432;
$scope->properties['tmp'] = JS::$undefined; $_tmp =& $scope->properties['tmp'];
$Utmp = FALSE;
$_tmp = $x431;
unset($x433, $W433, $S433, $U433);
$x434 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_r, $global), 122, 17, '<image>/04_array.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
$x435 = JS::toString($_l, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x436 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 122, 11, '<image>/04_array.js');
$_TypeError =& $x436[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x436;
$x437 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x438 = $x437($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x438->class) && $x438->class === 'Error' && !isset($x438->properties['file']) && !isset($x438->properties['line']) && !isset($x438->properties['column'])) {$x438->properties['file'] = '<image>/04_array.js';$x438->properties['line'] = 122;$x438->properties['column'] = 11;$x438->attributes['file'] = $x438->attributes['line'] = $x438->attributes['column'] = 0; }
throw new JSException($x438, 122, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x439, $W439, $S439, $U439);
$x440 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x435, $global), 122, 11, '<image>/04_array.js');
$x439 =& $x440[0]; list(,$W439,$S439,$U439) = $x440;
if ($U439 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x435] = $x439; $x439 =& $leThis->properties[$x435]; $leThis->attributes[$x435] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U439 = FALSE; $W439 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x442 = $leThis->properties['length']; }  else { $x442 = 0; } }
if (isset($S439)) {
$x443 = $S439->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 122, 11);
$x444 = $x443($global, $leThis, $S439, array($x433), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x441 = $x444;
} else {
if (!$U439) {$x441 = $x433;if ($W439) { $x439 = $x433; }  }
else { $x441 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int($_l) && $_l >= $leThis->properties['length']) { $leThis->properties['length'] = $_l + 1; }else if ($x435 === 'length' && is_int($x433) && $x442 > $x433) {  for ($i = $x433; $i < $x442; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
$x445 = JS::toString($_r, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x446 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 123, 11, '<image>/04_array.js');
$_TypeError =& $x446[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x446;
$x447 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x448 = $x447($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x448->class) && $x448->class === 'Error' && !isset($x448->properties['file']) && !isset($x448->properties['line']) && !isset($x448->properties['column'])) {$x448->properties['file'] = '<image>/04_array.js';$x448->properties['line'] = 123;$x448->properties['column'] = 11;$x448->attributes['file'] = $x448->attributes['line'] = $x448->attributes['column'] = 0; }
throw new JSException($x448, 123, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x449, $W449, $S449, $U449);
$x450 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x445, $global), 123, 11, '<image>/04_array.js');
$x449 =& $x450[0]; list(,$W449,$S449,$U449) = $x450;
if ($U449 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x445] = $x449; $x449 =& $leThis->properties[$x445]; $leThis->attributes[$x445] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U449 = FALSE; $W449 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x452 = $leThis->properties['length']; }  else { $x452 = 0; } }
if (isset($S449)) {
$x453 = $S449->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 123, 11);
$x454 = $x453($global, $leThis, $S449, array($_tmp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x451 = $x454;
} else {
if (!$U449) {$x451 = $_tmp;if ($W449) { $x449 = $_tmp; }  }
else { $x451 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int($_r) && $_r >= $leThis->properties['length']) { $leThis->properties['length'] = $_r + 1; }else if ($x445 === 'length' && is_int($_tmp) && $x452 > $_tmp) {  for ($i = $_tmp; $i < $x452; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};;
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_11($global,$leThis,$fn,$args,$constructor=FALSE){for($x421=0;;++$x421){if($x421===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x420=&$scope->properties[\'arguments\'];$x420->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x420->properties[$i]=$args[$i];$x420->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=0;unset($x422,$W422,$S422,$U422);$x423=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),120,26,\'<image>/04_array.js\');$x422=&$x423[0];list(,$W422,$S422,$U422)=$x423;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=(JS::toNumber($x422,$global)-JS::toNumber(1,$global));}if($x421!==0){$x424=++$_l;$x425=--$_r;}$x426=JS::toPrimitive($_l,$global);$x427=JS::toPrimitive($_r,$global);$x428=(is_string($x426)&&is_string($x427)?strcmp($x426,$x427)<0:(!is_nan($x429=JS::toNumber($x426,$global))&&!is_nan($x430=JS::toNumber($x427,$global))&&$x429<$x430));if(!JS::toBoolean($x428,$global)){break;}unset($x431,$W431,$S431,$U431);$x432=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_l,$global),121,17,\'<image>/04_array.js\');$x431=&$x432[0];list(,$W431,$S431,$U431)=$x432;$scope->properties[\'tmp\']=JS::$undefined;$_tmp=&$scope->properties[\'tmp\'];$Utmp=FALSE;$_tmp=$x431;unset($x433,$W433,$S433,$U433);$x434=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_r,$global),122,17,\'<image>/04_array.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;$x435=JS::toString($_l,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x436=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),122,11,\'<image>/04_array.js\');$_TypeError=&$x436[0];list(,$WTypeError,$STypeError,$UTypeError)=$x436;$x437=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x438=$x437($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x438->class)&&$x438->class===\'Error\'&&!isset($x438->properties[\'file\'])&&!isset($x438->properties[\'line\'])&&!isset($x438->properties[\'column\'])){$x438->properties[\'file\']=\'<image>/04_array.js\';$x438->properties[\'line\']=122;$x438->properties[\'column\']=11;$x438->attributes[\'file\']=$x438->attributes[\'line\']=$x438->attributes[\'column\']=0;}throw new JSException($x438,122,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x439,$W439,$S439,$U439);$x440=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x435,$global),122,11,\'<image>/04_array.js\');$x439=&$x440[0];list(,$W439,$S439,$U439)=$x440;if($U439&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x435]=$x439;$x439=&$leThis->properties[$x435];$leThis->attributes[$x435]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U439=FALSE;$W439=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x442=$leThis->properties[\'length\'];}else{$x442=0;}}if(isset($S439)){$x443=$S439->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',122,11);$x444=$x443($global,$leThis,$S439,array($x433),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x441=$x444;}else{if(!$U439){$x441=$x433;if($W439){$x439=$x433;}}else{$x441=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int($_l)&&$_l>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_l+1;}else if($x435===\'length\'&&is_int($x433)&&$x442>$x433){for($i=$x433;$i<$x442;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}$x445=JS::toString($_r,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x446=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,11,\'<image>/04_array.js\');$_TypeError=&$x446[0];list(,$WTypeError,$STypeError,$UTypeError)=$x446;$x447=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x448=$x447($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x448->class)&&$x448->class===\'Error\'&&!isset($x448->properties[\'file\'])&&!isset($x448->properties[\'line\'])&&!isset($x448->properties[\'column\'])){$x448->properties[\'file\']=\'<image>/04_array.js\';$x448->properties[\'line\']=123;$x448->properties[\'column\']=11;$x448->attributes[\'file\']=$x448->attributes[\'line\']=$x448->attributes[\'column\']=0;}throw new JSException($x448,123,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x449,$W449,$S449,$U449);$x450=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x445,$global),123,11,\'<image>/04_array.js\');$x449=&$x450[0];list(,$W449,$S449,$U449)=$x450;if($U449&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x445]=$x449;$x449=&$leThis->properties[$x445];$leThis->attributes[$x445]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U449=FALSE;$W449=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x452=$leThis->properties[\'length\'];}else{$x452=0;}}if(isset($S449)){$x453=$S449->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',123,11);$x454=$x453($global,$leThis,$S449,array($_tmp),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x451=$x454;}else{if(!$U449){$x451=$_tmp;if($W449){$x449=$_tmp;}}else{$x451=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int($_r)&&$_r>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_r+1;}else if($x445===\'length\'&&is_int($_tmp)&&$x452>$_tmp){for($i=$_tmp;$i<$x452;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x469 =& $scope->properties['arguments'];
$x469->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x469->properties[$i] = $args[$i];
$x469->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x473, $W473, $S473, $U473);
$x474 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 130, 10, '<image>/04_array.js');
$x473 =& $x474[0]; list(,$W473,$S473,$U473) = $x474;
$x470 = JS::toPrimitive($x473, $global);
$x471 = JS::toPrimitive(1, $global);
$x472 = (is_string($x470) && is_string($x471) ? strcmp($x470, $x471) < 0 : (!is_nan($x475 = JS::toNumber($x470, $global)) && !is_nan($x476 = JS::toNumber($x471, $global)) && $x475 < $x476));
if (JS::toBoolean($x472, $global)) {

return JS::$undefined;;
};
unset($x477, $W477, $S477, $U477);
$x478 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString(0, $global), 134, 17, '<image>/04_array.js');
$x477 =& $x478[0]; list(,$W477,$S477,$U477) = $x478;
$scope->properties['item'] = JS::$undefined; $_item =& $scope->properties['item'];
$Uitem = FALSE;
$_item = $x477;
unset($x479, $W479, $S479, $U479);
$x480 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 134, 30, '<image>/04_array.js');
$x479 =& $x480[0]; list(,$W479,$S479,$U479) = $x480;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x479;
for ($x481 = 0;; ++$x481) {
if ($x481 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
}
if ($x481 !== 0) {
$x482 = ++$_i;
}
$x483 = JS::toPrimitive($_i, $global);
$x484 = JS::toPrimitive($_l, $global);
$x485 = (is_string($x483) && is_string($x484) ? strcmp($x483, $x484) < 0 : (!is_nan($x486 = JS::toNumber($x483, $global)) && !is_nan($x487 = JS::toNumber($x484, $global)) && $x486 < $x487));
if (!JS::toBoolean($x485, $global)) { break; }

$x488 = JS::toPrimitive($_i, $global);
$x489 = JS::toPrimitive(1, $global);
unset($x490, $W490, $S490, $U490);
$x491 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString((is_string($x488) || is_string($x489) ? JS::toString($x488, $global) . JS::toString($x489, $global) : JS::toNumber($x488, $global) + JS::toNumber($x489, $global)), $global), 137, 17, '<image>/04_array.js');
$x490 =& $x491[0]; list(,$W490,$S490,$U490) = $x491;
$x492 = JS::toString($_i, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x493 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 137, 11, '<image>/04_array.js');
$_TypeError =& $x493[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x493;
$x494 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x495 = $x494($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x495->class) && $x495->class === 'Error' && !isset($x495->properties['file']) && !isset($x495->properties['line']) && !isset($x495->properties['column'])) {$x495->properties['file'] = '<image>/04_array.js';$x495->properties['line'] = 137;$x495->properties['column'] = 11;$x495->attributes['file'] = $x495->attributes['line'] = $x495->attributes['column'] = 0; }
throw new JSException($x495, 137, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x496, $W496, $S496, $U496);
$x497 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x492, $global), 137, 11, '<image>/04_array.js');
$x496 =& $x497[0]; list(,$W496,$S496,$U496) = $x497;
if ($U496 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x492] = $x496; $x496 =& $leThis->properties[$x492]; $leThis->attributes[$x492] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U496 = FALSE; $W496 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x499 = $leThis->properties['length']; }  else { $x499 = 0; } }
if (isset($S496)) {
$x500 = $S496->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 137, 11);
$x501 = $x500($global, $leThis, $S496, array($x490), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x498 = $x501;
} else {
if (!$U496) {$x498 = $x490;if ($W496) { $x496 = $x490; }  }
else { $x498 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; }else if ($x492 === 'length' && is_int($x490) && $x499 > $x490) {  for ($i = $x490; $i < $x499; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
};
$x502 = (JS::toNumber($_l, $global) - JS::toNumber(1, $global));
$x503 = JS::toString('length', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x504 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 140, 14, '<image>/04_array.js');
$_TypeError =& $x504[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x504;
$x505 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x506 = $x505($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x506->class) && $x506->class === 'Error' && !isset($x506->properties['file']) && !isset($x506->properties['line']) && !isset($x506->properties['column'])) {$x506->properties['file'] = '<image>/04_array.js';$x506->properties['line'] = 140;$x506->properties['column'] = 14;$x506->attributes['file'] = $x506->attributes['line'] = $x506->attributes['column'] = 0; }
throw new JSException($x506, 140, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x507, $W507, $S507, $U507);
$x508 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x503, $global), 140, 14, '<image>/04_array.js');
$x507 =& $x508[0]; list(,$W507,$S507,$U507) = $x508;
if ($U507 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x503] = $x507; $x507 =& $leThis->properties[$x503]; $leThis->attributes[$x503] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U507 = FALSE; $W507 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x510 = $leThis->properties['length']; }  else { $x510 = 0; } }
if (isset($S507)) {
$x511 = $S507->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 140, 14);
$x512 = $x511($global, $leThis, $S507, array($x502), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x509 = $x512;
} else {
if (!$U507) {$x509 = $x502;if ($W507) { $x507 = $x502; }  }
else { $x509 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; }else if ($x503 === 'length' && is_int($x502) && $x510 > $x502) {  for ($i = $x502; $i < $x510; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
return $_item;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x469=&$scope->properties[\'arguments\'];$x469->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x469->properties[$i]=$args[$i];$x469->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x473,$W473,$S473,$U473);$x474=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),130,10,\'<image>/04_array.js\');$x473=&$x474[0];list(,$W473,$S473,$U473)=$x474;$x470=JS::toPrimitive($x473,$global);$x471=JS::toPrimitive(1,$global);$x472=(is_string($x470)&&is_string($x471)?strcmp($x470,$x471)<0:(!is_nan($x475=JS::toNumber($x470,$global))&&!is_nan($x476=JS::toNumber($x471,$global))&&$x475<$x476));if(JS::toBoolean($x472,$global)){return JS::$undefined;}unset($x477,$W477,$S477,$U477);$x478=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(0,$global),134,17,\'<image>/04_array.js\');$x477=&$x478[0];list(,$W477,$S477,$U477)=$x478;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=$x477;unset($x479,$W479,$S479,$U479);$x480=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),134,30,\'<image>/04_array.js\');$x479=&$x480[0];list(,$W479,$S479,$U479)=$x480;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x479;for($x481=0;;++$x481){if($x481===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x481!==0){$x482=++$_i;}$x483=JS::toPrimitive($_i,$global);$x484=JS::toPrimitive($_l,$global);$x485=(is_string($x483)&&is_string($x484)?strcmp($x483,$x484)<0:(!is_nan($x486=JS::toNumber($x483,$global))&&!is_nan($x487=JS::toNumber($x484,$global))&&$x486<$x487));if(!JS::toBoolean($x485,$global)){break;}$x488=JS::toPrimitive($_i,$global);$x489=JS::toPrimitive(1,$global);unset($x490,$W490,$S490,$U490);$x491=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString((is_string($x488)||is_string($x489)?JS::toString($x488,$global).JS::toString($x489,$global):JS::toNumber($x488,$global)+JS::toNumber($x489,$global)),$global),137,17,\'<image>/04_array.js\');$x490=&$x491[0];list(,$W490,$S490,$U490)=$x491;$x492=JS::toString($_i,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x493=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),137,11,\'<image>/04_array.js\');$_TypeError=&$x493[0];list(,$WTypeError,$STypeError,$UTypeError)=$x493;$x494=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x495=$x494($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x495->class)&&$x495->class===\'Error\'&&!isset($x495->properties[\'file\'])&&!isset($x495->properties[\'line\'])&&!isset($x495->properties[\'column\'])){$x495->properties[\'file\']=\'<image>/04_array.js\';$x495->properties[\'line\']=137;$x495->properties[\'column\']=11;$x495->attributes[\'file\']=$x495->attributes[\'line\']=$x495->attributes[\'column\']=0;}throw new JSException($x495,137,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x496,$W496,$S496,$U496);$x497=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x492,$global),137,11,\'<image>/04_array.js\');$x496=&$x497[0];list(,$W496,$S496,$U496)=$x497;if($U496&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x492]=$x496;$x496=&$leThis->properties[$x492];$leThis->attributes[$x492]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U496=FALSE;$W496=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x499=$leThis->properties[\'length\'];}else{$x499=0;}}if(isset($S496)){$x500=$S496->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',137,11);$x501=$x500($global,$leThis,$S496,array($x490),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x498=$x501;}else{if(!$U496){$x498=$x490;if($W496){$x496=$x490;}}else{$x498=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}else if($x492===\'length\'&&is_int($x490)&&$x499>$x490){for($i=$x490;$i<$x499;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}}$x502=(JS::toNumber($_l,$global)-JS::toNumber(1,$global));$x503=JS::toString(\'length\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x504=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),140,14,\'<image>/04_array.js\');$_TypeError=&$x504[0];list(,$WTypeError,$STypeError,$UTypeError)=$x504;$x505=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x506=$x505($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x506->class)&&$x506->class===\'Error\'&&!isset($x506->properties[\'file\'])&&!isset($x506->properties[\'line\'])&&!isset($x506->properties[\'column\'])){$x506->properties[\'file\']=\'<image>/04_array.js\';$x506->properties[\'line\']=140;$x506->properties[\'column\']=14;$x506->attributes[\'file\']=$x506->attributes[\'line\']=$x506->attributes[\'column\']=0;}throw new JSException($x506,140,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x507,$W507,$S507,$U507);$x508=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x503,$global),140,14,\'<image>/04_array.js\');$x507=&$x508[0];list(,$W507,$S507,$U507)=$x508;if($U507&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x503]=$x507;$x507=&$leThis->properties[$x503];$leThis->attributes[$x503]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U507=FALSE;$W507=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x510=$leThis->properties[\'length\'];}else{$x510=0;}}if(isset($S507)){$x511=$S507->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',140,14);$x512=$x511($global,$leThis,$S507,array($x502),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x509=$x512;}else{if(!$U507){$x509=$x502;if($W507){$x507=$x502;}}else{$x509=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}else if($x503===\'length\'&&is_int($x502)&&$x510>$x502){for($i=$x502;$i<$x510;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}return$_item;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x527 =& $scope->properties['arguments'];
$x527->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x527->properties[$i] = $args[$i];
$x527->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x528 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x528, $global)) {
$x529 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x529;;
};
$x530 = JS::toPrimitive($_start, $global);
$x531 = JS::toPrimitive(0, $global);
$x532 = (is_string($x530) && is_string($x531) ? strcmp($x530, $x531) < 0 : (!is_nan($x533 = JS::toNumber($x530, $global)) && !is_nan($x534 = JS::toNumber($x531, $global)) && $x533 < $x534));
if (JS::toBoolean($x532, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x535 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Math', $global), 151, 11, '<image>/04_array.js');
$_Math =& $x535[0]; list(,$WMath,$SMath,$UMath) = $x535;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x536 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 151, 11, '<image>/04_array.js');
$_ReferenceError =& $x536[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x536;
$x537 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 11);
$x538 = $x537($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x538->class) && $x538->class === 'Error' && !isset($x538->properties['file']) && !isset($x538->properties['line']) && !isset($x538->properties['column'])) {$x538->properties['file'] = '<image>/04_array.js';$x538->properties['line'] = 151;$x538->properties['column'] = 11;$x538->attributes['file'] = $x538->attributes['line'] = $x538->attributes['column'] = 0; }
throw new JSException($x538, 151, 11, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x540 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 151, 19, '<image>/04_array.js');
$_TypeError =& $x540[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x540;
$x541 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x542 = $x541($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x542->class) && $x542->class === 'Error' && !isset($x542->properties['file']) && !isset($x542->properties['line']) && !isset($x542->properties['column'])) {$x542->properties['file'] = '<image>/04_array.js';$x542->properties['line'] = 151;$x542->properties['column'] = 19;$x542->attributes['file'] = $x542->attributes['line'] = $x542->attributes['column'] = 0; }
throw new JSException($x542, 151, 19, '<image>/04_array.js');
}
$x539 = JS::toObject($_Math, $global);
unset($x543, $W543, $S543, $U543);
$x544 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x539, JS::toString('max', $global), 151, 19, '<image>/04_array.js');
$x543 =& $x544[0]; list(,$W543,$S543,$U543) = $x544;
unset($x547, $W547, $S547, $U547);
$x548 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 151, 24, '<image>/04_array.js');
$x547 =& $x548[0]; list(,$W547,$S547,$U547) = $x548;
$x545 = JS::toPrimitive($x547, $global);
$x546 = JS::toPrimitive($_start, $global);
if (!(is_object($x543) && isset($x543->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x551 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 151, 19, '<image>/04_array.js');
$_TypeError =& $x551[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x551;
$x552 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x553 = $x552($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x553->class) && $x553->class === 'Error' && !isset($x553->properties['file']) && !isset($x553->properties['line']) && !isset($x553->properties['column'])) {$x553->properties['file'] = '<image>/04_array.js';$x553->properties['line'] = 151;$x553->properties['column'] = 19;$x553->attributes['file'] = $x553->attributes['line'] = $x553->attributes['column'] = 0; }
throw new JSException($x553, 151, 19, '<image>/04_array.js');
}
$x549 = $x543->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 151, 19);
$x550 = $x549($global, $x539, $x543, array((is_string($x545) || is_string($x546) ? JS::toString($x545, $global) . JS::toString($x546, $global) : JS::toNumber($x545, $global) + JS::toNumber($x546, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x550;;
};
$x554 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x554, $global)) {
unset($x555, $W555, $S555, $U555);
$x556 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 155, 13, '<image>/04_array.js');
$x555 =& $x556[0]; list(,$W555,$S555,$U555) = $x556;
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x555;;
};
$x557 = JS::toPrimitive($_end, $global);
$x558 = JS::toPrimitive(0, $global);
$x559 = (is_string($x557) && is_string($x558) ? strcmp($x557, $x558) < 0 : (!is_nan($x560 = JS::toNumber($x557, $global)) && !is_nan($x561 = JS::toNumber($x558, $global)) && $x560 < $x561));
if (JS::toBoolean($x559, $global)) {
unset($x564, $W564, $S564, $U564);
$x565 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 159, 13, '<image>/04_array.js');
$x564 =& $x565[0]; list(,$W564,$S564,$U564) = $x565;
$x562 = JS::toPrimitive($x564, $global);
$x563 = JS::toPrimitive($_end, $global);
$x566 = (is_string($x562) || is_string($x563) ? JS::toString($x562, $global) . JS::toString($x563, $global) : JS::toNumber($x562, $global) + JS::toNumber($x563, $global));
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x566;;
};
$x567 = clone JS::$arrayTemplate;
$x567->properties['length'] = 0;
$x567->attributes['length'] = JS::WRITABLE;
$scope->properties['newArray'] = JS::$undefined; $_newArray =& $scope->properties['newArray'];
$UnewArray = FALSE;
$_newArray = $x567;
for ($x568 = 0;; ++$x568) {
if ($x568 !== 0) {
$x569 = ++$_start;
}
$x570 = JS::toPrimitive($_start, $global);
$x571 = JS::toPrimitive($_end, $global);
$x572 = (is_string($x570) && is_string($x571) ? strcmp($x570, $x571) < 0 : (!is_nan($x573 = JS::toNumber($x570, $global)) && !is_nan($x574 = JS::toNumber($x571, $global)) && $x573 < $x574));
if (!JS::toBoolean($x572, $global)) { break; }

if ($_newArray === JS::$undefined || $_newArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x576 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 165, 16, '<image>/04_array.js');
$_TypeError =& $x576[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x576;
$x577 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x578 = $x577($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x578->class) && $x578->class === 'Error' && !isset($x578->properties['file']) && !isset($x578->properties['line']) && !isset($x578->properties['column'])) {$x578->properties['file'] = '<image>/04_array.js';$x578->properties['line'] = 165;$x578->properties['column'] = 16;$x578->attributes['file'] = $x578->attributes['line'] = $x578->attributes['column'] = 0; }
throw new JSException($x578, 165, 16, '<image>/04_array.js');
}
$x575 = JS::toObject($_newArray, $global);
unset($x579, $W579, $S579, $U579);
$x580 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x575, JS::toString('push', $global), 165, 16, '<image>/04_array.js');
$x579 =& $x580[0]; list(,$W579,$S579,$U579) = $x580;
unset($x581, $W581, $S581, $U581);
$x582 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_start, $global), 165, 21, '<image>/04_array.js');
$x581 =& $x582[0]; list(,$W581,$S581,$U581) = $x582;
if (!(is_object($x579) && isset($x579->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x585 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 165, 16, '<image>/04_array.js');
$_TypeError =& $x585[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x585;
$x586 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x587 = $x586($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x587->class) && $x587->class === 'Error' && !isset($x587->properties['file']) && !isset($x587->properties['line']) && !isset($x587->properties['column'])) {$x587->properties['file'] = '<image>/04_array.js';$x587->properties['line'] = 165;$x587->properties['column'] = 16;$x587->attributes['file'] = $x587->attributes['line'] = $x587->attributes['column'] = 0; }
throw new JSException($x587, 165, 16, '<image>/04_array.js');
}
$x583 = $x579->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 165, 16);
$x584 = $x583($global, $x575, $x579, array($x581), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x527=&$scope->properties[\'arguments\'];$x527->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x527->properties[$i]=$args[$i];$x527->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$x528=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x528,$global)){$x529=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x529;}$x530=JS::toPrimitive($_start,$global);$x531=JS::toPrimitive(0,$global);$x532=(is_string($x530)&&is_string($x531)?strcmp($x530,$x531)<0:(!is_nan($x533=JS::toNumber($x530,$global))&&!is_nan($x534=JS::toNumber($x531,$global))&&$x533<$x534));if(JS::toBoolean($x532,$global)){unset($_Math,$WMath,$SMath,$UMath);$x535=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Math\',$global),151,11,\'<image>/04_array.js\');$_Math=&$x535[0];list(,$WMath,$SMath,$UMath)=$x535;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x536=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),151,11,\'<image>/04_array.js\');$_ReferenceError=&$x536[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x536;$x537=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,11);$x538=$x537($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x538->class)&&$x538->class===\'Error\'&&!isset($x538->properties[\'file\'])&&!isset($x538->properties[\'line\'])&&!isset($x538->properties[\'column\'])){$x538->properties[\'file\']=\'<image>/04_array.js\';$x538->properties[\'line\']=151;$x538->properties[\'column\']=11;$x538->attributes[\'file\']=$x538->attributes[\'line\']=$x538->attributes[\'column\']=0;}throw new JSException($x538,151,11,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x540=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),151,19,\'<image>/04_array.js\');$_TypeError=&$x540[0];list(,$WTypeError,$STypeError,$UTypeError)=$x540;$x541=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x542=$x541($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x542->class)&&$x542->class===\'Error\'&&!isset($x542->properties[\'file\'])&&!isset($x542->properties[\'line\'])&&!isset($x542->properties[\'column\'])){$x542->properties[\'file\']=\'<image>/04_array.js\';$x542->properties[\'line\']=151;$x542->properties[\'column\']=19;$x542->attributes[\'file\']=$x542->attributes[\'line\']=$x542->attributes[\'column\']=0;}throw new JSException($x542,151,19,\'<image>/04_array.js\');}$x539=JS::toObject($_Math,$global);unset($x543,$W543,$S543,$U543);$x544=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x539,JS::toString(\'max\',$global),151,19,\'<image>/04_array.js\');$x543=&$x544[0];list(,$W543,$S543,$U543)=$x544;unset($x547,$W547,$S547,$U547);$x548=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),151,24,\'<image>/04_array.js\');$x547=&$x548[0];list(,$W547,$S547,$U547)=$x548;$x545=JS::toPrimitive($x547,$global);$x546=JS::toPrimitive($_start,$global);if(!(is_object($x543)&&isset($x543->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x551=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),151,19,\'<image>/04_array.js\');$_TypeError=&$x551[0];list(,$WTypeError,$STypeError,$UTypeError)=$x551;$x552=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x553=$x552($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x553->class)&&$x553->class===\'Error\'&&!isset($x553->properties[\'file\'])&&!isset($x553->properties[\'line\'])&&!isset($x553->properties[\'column\'])){$x553->properties[\'file\']=\'<image>/04_array.js\';$x553->properties[\'line\']=151;$x553->properties[\'column\']=19;$x553->attributes[\'file\']=$x553->attributes[\'line\']=$x553->attributes[\'column\']=0;}throw new JSException($x553,151,19,\'<image>/04_array.js\');}$x549=$x543->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',151,19);$x550=$x549($global,$x539,$x543,array((is_string($x545)||is_string($x546)?JS::toString($x545,$global).JS::toString($x546,$global):JS::toNumber($x545,$global)+JS::toNumber($x546,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x550;}$x554=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x554,$global)){unset($x555,$W555,$S555,$U555);$x556=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),155,13,\'<image>/04_array.js\');$x555=&$x556[0];list(,$W555,$S555,$U555)=$x556;if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x555;}$x557=JS::toPrimitive($_end,$global);$x558=JS::toPrimitive(0,$global);$x559=(is_string($x557)&&is_string($x558)?strcmp($x557,$x558)<0:(!is_nan($x560=JS::toNumber($x557,$global))&&!is_nan($x561=JS::toNumber($x558,$global))&&$x560<$x561));if(JS::toBoolean($x559,$global)){unset($x564,$W564,$S564,$U564);$x565=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),159,13,\'<image>/04_array.js\');$x564=&$x565[0];list(,$W564,$S564,$U564)=$x565;$x562=JS::toPrimitive($x564,$global);$x563=JS::toPrimitive($_end,$global);$x566=(is_string($x562)||is_string($x563)?JS::toString($x562,$global).JS::toString($x563,$global):JS::toNumber($x562,$global)+JS::toNumber($x563,$global));if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x566;}$x567=clone JS::$arrayTemplate;$x567->properties[\'length\']=0;$x567->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'newArray\']=JS::$undefined;$_newArray=&$scope->properties[\'newArray\'];$UnewArray=FALSE;$_newArray=$x567;for($x568=0;;++$x568){if($x568!==0){$x569=++$_start;}$x570=JS::toPrimitive($_start,$global);$x571=JS::toPrimitive($_end,$global);$x572=(is_string($x570)&&is_string($x571)?strcmp($x570,$x571)<0:(!is_nan($x573=JS::toNumber($x570,$global))&&!is_nan($x574=JS::toNumber($x571,$global))&&$x573<$x574));if(!JS::toBoolean($x572,$global)){break;}if($_newArray===JS::$undefined||$_newArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x576=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),165,16,\'<image>/04_array.js\');$_TypeError=&$x576[0];list(,$WTypeError,$STypeError,$UTypeError)=$x576;$x577=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x578=$x577($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x578->class)&&$x578->class===\'Error\'&&!isset($x578->properties[\'file\'])&&!isset($x578->properties[\'line\'])&&!isset($x578->properties[\'column\'])){$x578->properties[\'file\']=\'<image>/04_array.js\';$x578->properties[\'line\']=165;$x578->properties[\'column\']=16;$x578->attributes[\'file\']=$x578->attributes[\'line\']=$x578->attributes[\'column\']=0;}throw new JSException($x578,165,16,\'<image>/04_array.js\');}$x575=JS::toObject($_newArray,$global);unset($x579,$W579,$S579,$U579);$x580=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x575,JS::toString(\'push\',$global),165,16,\'<image>/04_array.js\');$x579=&$x580[0];list(,$W579,$S579,$U579)=$x580;unset($x581,$W581,$S581,$U581);$x582=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_start,$global),165,21,\'<image>/04_array.js\');$x581=&$x582[0];list(,$W581,$S581,$U581)=$x582;if(!(is_object($x579)&&isset($x579->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x585=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),165,16,\'<image>/04_array.js\');$_TypeError=&$x585[0];list(,$WTypeError,$STypeError,$UTypeError)=$x585;$x586=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x587=$x586($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x587->class)&&$x587->class===\'Error\'&&!isset($x587->properties[\'file\'])&&!isset($x587->properties[\'line\'])&&!isset($x587->properties[\'column\'])){$x587->properties[\'file\']=\'<image>/04_array.js\';$x587->properties[\'line\']=165;$x587->properties[\'column\']=16;$x587->attributes[\'file\']=$x587->attributes[\'line\']=$x587->attributes[\'column\']=0;}throw new JSException($x587,165,16,\'<image>/04_array.js\');}$x583=$x579->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',165,16);$x584=$x583($global,$x575,$x579,array($x581),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x605 =& $scope->properties['arguments'];
$x605->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x605->properties[$i] = $args[$i];
$x605->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['a'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_a =& $scope->properties['a'];
$Ua = FALSE;
$scope->properties['b'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_b =& $scope->properties['b'];
$Ub = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x608 = $_a;
$x608 = ($x608 === JS::$undefined ? 'undefined' : (is_int($x608) || is_float($x608) ? 'number' : (is_bool($x608) ? 'boolean' : (is_string($x608) ? 'string' : (is_object($x608) && isset($x608->call) ? 'function' : 'object')))));
$x607 = (((gettype($x608) === gettype('string') && $x608 === 'string'))|| (((is_float($x608) || is_int($x608)) && (is_float('string') || is_int('string'))) && $x608 == 'string'));
$x606 = $x607;
if (!JS::toBoolean($x606, $global)) {
$x610 = $_b;
$x610 = ($x610 === JS::$undefined ? 'undefined' : (is_int($x610) || is_float($x610) ? 'number' : (is_bool($x610) ? 'boolean' : (is_string($x610) ? 'string' : (is_object($x610) && isset($x610->call) ? 'function' : 'object')))));
$x609 = (((gettype($x610) === gettype('string') && $x610 === 'string'))|| (((is_float($x610) || is_int($x610)) && (is_float('string') || is_int('string'))) && $x610 == 'string'));
$x606 = $x609; }
if (JS::toBoolean($x606, $global)) {
$x611 = JS::toString($_a, $global);
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = $x611;
$x612 = JS::toString($_b, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = $x612;
$x613 = JS::toPrimitive($_a, $global);
$x614 = JS::toPrimitive($_b, $global);
$x615 = (is_string($x613) && is_string($x614) ? strcmp($x613, $x614) < 0 : (!is_nan($x616 = JS::toNumber($x613, $global)) && !is_nan($x617 = JS::toNumber($x614, $global)) && $x616 < $x617));
if (JS::toBoolean($x615, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
}
else {
$x618 = JS::toPrimitive($_a, $global);
$x619 = JS::toPrimitive($_b, $global);
$x620 = (is_string($x619) && is_string($x618) ? strcmp($x619, $x618) < 0 : (!is_nan($x621 = JS::toNumber($x619, $global)) && !is_nan($x622 = JS::toNumber($x618, $global)) && $x621 < $x622));
if (JS::toBoolean($x620, $global)) {

return 1;;
}
else {

return 0;;
};
};;
}
else {
$x625 = $_a;
$x625 = ($x625 === JS::$undefined ? 'undefined' : (is_int($x625) || is_float($x625) ? 'number' : (is_bool($x625) ? 'boolean' : (is_string($x625) ? 'string' : (is_object($x625) && isset($x625->call) ? 'function' : 'object')))));
$x624 = (((gettype($x625) === gettype('number') && $x625 === 'number'))|| (((is_float($x625) || is_int($x625)) && (is_float('number') || is_int('number'))) && $x625 == 'number'));
$x623 = $x624;
if (!JS::toBoolean($x623, $global)) {
$x627 = $_b;
$x627 = ($x627 === JS::$undefined ? 'undefined' : (is_int($x627) || is_float($x627) ? 'number' : (is_bool($x627) ? 'boolean' : (is_string($x627) ? 'string' : (is_object($x627) && isset($x627->call) ? 'function' : 'object')))));
$x626 = (((gettype($x627) === gettype('number') && $x627 === 'number'))|| (((is_float($x627) || is_int($x627)) && (is_float('number') || is_int('number'))) && $x627 == 'number'));
$x623 = $x626; }
if (JS::toBoolean($x623, $global)) {
$x628 = JS::toNumber($_a, $global);
if ($Ua) {$global->properties['a'] = $_a; $_a =& $global->properties['a']; }
$_a = $x628;
$x629 = JS::toNumber($_b, $global);
if ($Ub) {$global->properties['b'] = $_b; $_b =& $global->properties['b']; }
$_b = $x629;
return (JS::toNumber($_a, $global) - JS::toNumber($_b, $global));;
};
};
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x632 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 192, 13, '<image>/04_array.js');
$_TypeError =& $x632[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x632;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x633 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 192, 13, '<image>/04_array.js');
$_ReferenceError =& $x633[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x633;
$x634 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 13);
$x635 = $x634($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x635->class) && $x635->class === 'Error' && !isset($x635->properties['file']) && !isset($x635->properties['line']) && !isset($x635->properties['column'])) {$x635->properties['file'] = '<image>/04_array.js';$x635->properties['line'] = 192;$x635->properties['column'] = 13;$x635->attributes['file'] = $x635->attributes['line'] = $x635->attributes['column'] = 0; }
throw new JSException($x635, 192, 13, '<image>/04_array.js');
}
$x630 = clone JS::$objectTemplate;
unset($x636, $W636, $S636, $U636);
$x637 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 192, 9, '<image>/04_array.js');
$x636 =& $x637[0]; list(,$W636,$S636,$U636) = $x637;
$x631 = $x636;
$x630->prototype = $x631;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x640 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x641 = $x640($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x641->class) && $x641->class === 'Error' && !isset($x641->properties['file']) && !isset($x641->properties['line']) && !isset($x641->properties['column'])) {$x641->properties['file'] = '<image>/04_array.js';$x641->properties['line'] = 192;$x641->properties['column'] = 9;$x641->attributes['file'] = $x641->attributes['line'] = $x641->attributes['column'] = 0; }
throw new JSException($x641, 192, 9, '<image>/04_array.js');
}
$x638 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 192, 9);
$x639 = $x638($global, $x630, $_TypeError, array('Unsortable values in array.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x631 = $x639;
if (is_object($x631) && $x631 !== JS::$undefined) { $x630 = $x631; }
if (isset($x630->class) && $x630->class === 'Error' && !isset($x630->properties['file']) && !isset($x630->properties['line']) && !isset($x630->properties['column'])) {$x630->properties['file'] = '<image>/04_array.js';$x630->properties['line'] = 192;$x630->properties['column'] = 3;$x630->attributes['file'] = $x630->attributes['line'] = $x630->attributes['column'] = 0; }
throw new JSException($x630, 192, 3, '<image>/04_array.js');
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x605=&$scope->properties[\'arguments\'];$x605->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x605->properties[$i]=$args[$i];$x605->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'a\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_a=&$scope->properties[\'a\'];$Ua=FALSE;$scope->properties[\'b\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$global->scope[++$global->scope_sp]=$scope;$x608=$_a;$x608=($x608===JS::$undefined?\'undefined\':(is_int($x608)||is_float($x608)?\'number\':(is_bool($x608)?\'boolean\':(is_string($x608)?\'string\':(is_object($x608)&&isset($x608->call)?\'function\':\'object\')))));$x607=(((gettype($x608)===gettype(\'string\')&&$x608===\'string\'))||(((is_float($x608)||is_int($x608))&&(is_float(\'string\')||is_int(\'string\')))&&$x608==\'string\'));$x606=$x607;if(!JS::toBoolean($x606,$global)){$x610=$_b;$x610=($x610===JS::$undefined?\'undefined\':(is_int($x610)||is_float($x610)?\'number\':(is_bool($x610)?\'boolean\':(is_string($x610)?\'string\':(is_object($x610)&&isset($x610->call)?\'function\':\'object\')))));$x609=(((gettype($x610)===gettype(\'string\')&&$x610===\'string\'))||(((is_float($x610)||is_int($x610))&&(is_float(\'string\')||is_int(\'string\')))&&$x610==\'string\'));$x606=$x609;}if(JS::toBoolean($x606,$global)){$x611=JS::toString($_a,$global);if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=$x611;$x612=JS::toString($_b,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=$x612;$x613=JS::toPrimitive($_a,$global);$x614=JS::toPrimitive($_b,$global);$x615=(is_string($x613)&&is_string($x614)?strcmp($x613,$x614)<0:(!is_nan($x616=JS::toNumber($x613,$global))&&!is_nan($x617=JS::toNumber($x614,$global))&&$x616<$x617));if(JS::toBoolean($x615,$global)){return(-1.0*JS::toNumber(1,$global));}else{$x618=JS::toPrimitive($_a,$global);$x619=JS::toPrimitive($_b,$global);$x620=(is_string($x619)&&is_string($x618)?strcmp($x619,$x618)<0:(!is_nan($x621=JS::toNumber($x619,$global))&&!is_nan($x622=JS::toNumber($x618,$global))&&$x621<$x622));if(JS::toBoolean($x620,$global)){return 1;}else{return 0;}}}else{$x625=$_a;$x625=($x625===JS::$undefined?\'undefined\':(is_int($x625)||is_float($x625)?\'number\':(is_bool($x625)?\'boolean\':(is_string($x625)?\'string\':(is_object($x625)&&isset($x625->call)?\'function\':\'object\')))));$x624=(((gettype($x625)===gettype(\'number\')&&$x625===\'number\'))||(((is_float($x625)||is_int($x625))&&(is_float(\'number\')||is_int(\'number\')))&&$x625==\'number\'));$x623=$x624;if(!JS::toBoolean($x623,$global)){$x627=$_b;$x627=($x627===JS::$undefined?\'undefined\':(is_int($x627)||is_float($x627)?\'number\':(is_bool($x627)?\'boolean\':(is_string($x627)?\'string\':(is_object($x627)&&isset($x627->call)?\'function\':\'object\')))));$x626=(((gettype($x627)===gettype(\'number\')&&$x627===\'number\'))||(((is_float($x627)||is_int($x627))&&(is_float(\'number\')||is_int(\'number\')))&&$x627==\'number\'));$x623=$x626;}if(JS::toBoolean($x623,$global)){$x628=JS::toNumber($_a,$global);if($Ua){$global->properties[\'a\']=$_a;$_a=&$global->properties[\'a\'];}$_a=$x628;$x629=JS::toNumber($_b,$global);if($Ub){$global->properties[\'b\']=$_b;$_b=&$global->properties[\'b\'];}$_b=$x629;return(JS::toNumber($_a,$global)-JS::toNumber($_b,$global));}}unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x632=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),192,13,\'<image>/04_array.js\');$_TypeError=&$x632[0];list(,$WTypeError,$STypeError,$UTypeError)=$x632;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x633=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),192,13,\'<image>/04_array.js\');$_ReferenceError=&$x633[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x633;$x634=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,13);$x635=$x634($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x635->class)&&$x635->class===\'Error\'&&!isset($x635->properties[\'file\'])&&!isset($x635->properties[\'line\'])&&!isset($x635->properties[\'column\'])){$x635->properties[\'file\']=\'<image>/04_array.js\';$x635->properties[\'line\']=192;$x635->properties[\'column\']=13;$x635->attributes[\'file\']=$x635->attributes[\'line\']=$x635->attributes[\'column\']=0;}throw new JSException($x635,192,13,\'<image>/04_array.js\');}$x630=clone JS::$objectTemplate;unset($x636,$W636,$S636,$U636);$x637=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),192,9,\'<image>/04_array.js\');$x636=&$x637[0];list(,$W636,$S636,$U636)=$x637;$x631=$x636;$x630->prototype=$x631;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x640=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x641=$x640($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x641->class)&&$x641->class===\'Error\'&&!isset($x641->properties[\'file\'])&&!isset($x641->properties[\'line\'])&&!isset($x641->properties[\'column\'])){$x641->properties[\'file\']=\'<image>/04_array.js\';$x641->properties[\'line\']=192;$x641->properties[\'column\']=9;$x641->attributes[\'file\']=$x641->attributes[\'line\']=$x641->attributes[\'column\']=0;}throw new JSException($x641,192,9,\'<image>/04_array.js\');}$x638=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',192,9);$x639=$x638($global,$x630,$_TypeError,array(\'Unsortable values in array.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x631=$x639;if(is_object($x631)&&$x631!==JS::$undefined){$x630=$x631;}if(isset($x630->class)&&$x630->class===\'Error\'&&!isset($x630->properties[\'file\'])&&!isset($x630->properties[\'line\'])&&!isset($x630->properties[\'column\'])){$x630->properties[\'file\']=\'<image>/04_array.js\';$x630->properties[\'line\']=192;$x630->properties[\'column\']=3;$x630->attributes[\'file\']=$x630->attributes[\'line\']=$x630->attributes[\'column\']=0;}throw new JSException($x630,192,3,\'<image>/04_array.js\');return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x602 =& $scope->properties['arguments'];
$x602->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x602->properties[$i] = $args[$i];
$x602->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['compareFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_compareFn =& $scope->properties['compareFn'];
$UcompareFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x603 = $_compareFn;
if (!JS::toBoolean($x603, $global)) {
$x642 = clone JS::$functionTemplate; $x642->call = '_339fc8fcf8563d9777a12bd15b91ae1b_15'; $x642->parameters = array (
  0 => 'a',
  1 => 'b',
); $x642->scope = $scope; $x642->properties['prototype'] = clone JS::$objectTemplate; $x642->attributes['prototype'] = JS::WRITABLE; $x642->properties['prototype']->properties['constructor'] = $x642; $x642->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x642->properties['length'] = 2; $x642->attributes['length'] = 0;
$x603 = $x642; }
if ($UcompareFn) {$global->properties['compareFn'] = $_compareFn; $_compareFn =& $global->properties['compareFn']; }
$_compareFn = $x603;
unset($x646, $W646, $S646, $U646);
$x647 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 195, 10, '<image>/04_array.js');
$x646 =& $x647[0]; list(,$W646,$S646,$U646) = $x647;
$x643 = JS::toPrimitive($x646, $global);
$x644 = JS::toPrimitive(2, $global);
$x645 = (is_string($x643) && is_string($x644) ? strcmp($x643, $x644) < 0 : (!is_nan($x648 = JS::toNumber($x643, $global)) && !is_nan($x649 = JS::toNumber($x644, $global)) && $x648 < $x649));
if (JS::toBoolean($x645, $global)) {

return $leThis;;
};
$scope->properties['pivot'] = JS::$undefined; $_pivot =& $scope->properties['pivot'];
$Upivot = FALSE;
$_pivot = JS::$undefined;
$x650 = clone JS::$arrayTemplate;
$x650->properties['length'] = 0;
$x650->attributes['length'] = JS::WRITABLE;
$scope->properties['smaller'] = JS::$undefined; $_smaller =& $scope->properties['smaller'];
$Usmaller = FALSE;
$_smaller = $x650;
$x651 = clone JS::$arrayTemplate;
$x651->properties['length'] = 0;
$x651->attributes['length'] = JS::WRITABLE;
$scope->properties['larger'] = JS::$undefined; $_larger =& $scope->properties['larger'];
$Ularger = FALSE;
$_larger = $x651;
unset($x652, $W652, $S652, $U652);
$x653 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString(0, $global), 201, 14, '<image>/04_array.js');
$x652 =& $x653[0]; list(,$W652,$S652,$U652) = $x653;
if ($Upivot) {$global->properties['pivot'] = $_pivot; $_pivot =& $global->properties['pivot']; }
$_pivot = $x652;
for ($x654 = 0;; ++$x654) {
if ($x654 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x655, $W655, $S655, $U655);
$x656 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 203, 26, '<image>/04_array.js');
$x655 =& $x656[0]; list(,$W655,$S655,$U655) = $x656;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x655;
}
if ($x654 !== 0) {
$x657 = ++$_i;
}
$x658 = JS::toPrimitive($_i, $global);
$x659 = JS::toPrimitive($_l, $global);
$x660 = (is_string($x658) && is_string($x659) ? strcmp($x658, $x659) < 0 : (!is_nan($x661 = JS::toNumber($x658, $global)) && !is_nan($x662 = JS::toNumber($x659, $global)) && $x661 < $x662));
if (!JS::toBoolean($x660, $global)) { break; }

unset($x666, $W666, $S666, $U666);
$x667 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 204, 21, '<image>/04_array.js');
$x666 =& $x667[0]; list(,$W666,$S666,$U666) = $x667;
if (!(is_object($_compareFn) && isset($_compareFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x670 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 204, 16, '<image>/04_array.js');
$_TypeError =& $x670[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x670;
$x671 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x672 = $x671($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x672->class) && $x672->class === 'Error' && !isset($x672->properties['file']) && !isset($x672->properties['line']) && !isset($x672->properties['column'])) {$x672->properties['file'] = '<image>/04_array.js';$x672->properties['line'] = 204;$x672->properties['column'] = 16;$x672->attributes['file'] = $x672->attributes['line'] = $x672->attributes['column'] = 0; }
throw new JSException($x672, 204, 16, '<image>/04_array.js');
}
$x668 = $_compareFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 204, 16);
$x669 = $x668($global, $global, $_compareFn, array($x666, $_pivot), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x663 = JS::toPrimitive($x669, $global);
$x664 = JS::toPrimitive(0, $global);
$x665 = (is_string($x663) && is_string($x664) ? strcmp($x663, $x664) < 0 : (!is_nan($x673 = JS::toNumber($x663, $global)) && !is_nan($x674 = JS::toNumber($x664, $global)) && $x673 < $x674));
if (JS::toBoolean($x665, $global)) {
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x676 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 205, 16, '<image>/04_array.js');
$_TypeError =& $x676[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x676;
$x677 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x678 = $x677($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x678->class) && $x678->class === 'Error' && !isset($x678->properties['file']) && !isset($x678->properties['line']) && !isset($x678->properties['column'])) {$x678->properties['file'] = '<image>/04_array.js';$x678->properties['line'] = 205;$x678->properties['column'] = 16;$x678->attributes['file'] = $x678->attributes['line'] = $x678->attributes['column'] = 0; }
throw new JSException($x678, 205, 16, '<image>/04_array.js');
}
$x675 = JS::toObject($_smaller, $global);
unset($x679, $W679, $S679, $U679);
$x680 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x675, JS::toString('push', $global), 205, 16, '<image>/04_array.js');
$x679 =& $x680[0]; list(,$W679,$S679,$U679) = $x680;
unset($x681, $W681, $S681, $U681);
$x682 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 205, 21, '<image>/04_array.js');
$x681 =& $x682[0]; list(,$W681,$S681,$U681) = $x682;
if (!(is_object($x679) && isset($x679->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x685 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 205, 16, '<image>/04_array.js');
$_TypeError =& $x685[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x685;
$x686 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x687 = $x686($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x687->class) && $x687->class === 'Error' && !isset($x687->properties['file']) && !isset($x687->properties['line']) && !isset($x687->properties['column'])) {$x687->properties['file'] = '<image>/04_array.js';$x687->properties['line'] = 205;$x687->properties['column'] = 16;$x687->attributes['file'] = $x687->attributes['line'] = $x687->attributes['column'] = 0; }
throw new JSException($x687, 205, 16, '<image>/04_array.js');
}
$x683 = $x679->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 205, 16);
$x684 = $x683($global, $x675, $x679, array($x681), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
else {
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x689 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 207, 15, '<image>/04_array.js');
$_TypeError =& $x689[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x689;
$x690 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x691 = $x690($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x691->class) && $x691->class === 'Error' && !isset($x691->properties['file']) && !isset($x691->properties['line']) && !isset($x691->properties['column'])) {$x691->properties['file'] = '<image>/04_array.js';$x691->properties['line'] = 207;$x691->properties['column'] = 15;$x691->attributes['file'] = $x691->attributes['line'] = $x691->attributes['column'] = 0; }
throw new JSException($x691, 207, 15, '<image>/04_array.js');
}
$x688 = JS::toObject($_larger, $global);
unset($x692, $W692, $S692, $U692);
$x693 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x688, JS::toString('push', $global), 207, 15, '<image>/04_array.js');
$x692 =& $x693[0]; list(,$W692,$S692,$U692) = $x693;
unset($x694, $W694, $S694, $U694);
$x695 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 207, 20, '<image>/04_array.js');
$x694 =& $x695[0]; list(,$W694,$S694,$U694) = $x695;
if (!(is_object($x692) && isset($x692->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x698 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 207, 15, '<image>/04_array.js');
$_TypeError =& $x698[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x698;
$x699 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x700 = $x699($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x700->class) && $x700->class === 'Error' && !isset($x700->properties['file']) && !isset($x700->properties['line']) && !isset($x700->properties['column'])) {$x700->properties['file'] = '<image>/04_array.js';$x700->properties['line'] = 207;$x700->properties['column'] = 15;$x700->attributes['file'] = $x700->attributes['line'] = $x700->attributes['column'] = 0; }
throw new JSException($x700, 207, 15, '<image>/04_array.js');
}
$x696 = $x692->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 207, 15);
$x697 = $x696($global, $x688, $x692, array($x694), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
if ($_smaller === JS::$undefined || $_smaller === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x702 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 27, '<image>/04_array.js');
$_TypeError =& $x702[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x702;
$x703 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x704 = $x703($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x704->class) && $x704->class === 'Error' && !isset($x704->properties['file']) && !isset($x704->properties['line']) && !isset($x704->properties['column'])) {$x704->properties['file'] = '<image>/04_array.js';$x704->properties['line'] = 211;$x704->properties['column'] = 27;$x704->attributes['file'] = $x704->attributes['line'] = $x704->attributes['column'] = 0; }
throw new JSException($x704, 211, 27, '<image>/04_array.js');
}
$x701 = JS::toObject($_smaller, $global);
unset($x705, $W705, $S705, $U705);
$x706 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x701, JS::toString('sort', $global), 211, 27, '<image>/04_array.js');
$x705 =& $x706[0]; list(,$W705,$S705,$U705) = $x706;
if (!(is_object($x705) && isset($x705->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x709 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 27, '<image>/04_array.js');
$_TypeError =& $x709[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x709;
$x710 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x711 = $x710($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x711->class) && $x711->class === 'Error' && !isset($x711->properties['file']) && !isset($x711->properties['line']) && !isset($x711->properties['column'])) {$x711->properties['file'] = '<image>/04_array.js';$x711->properties['line'] = 211;$x711->properties['column'] = 27;$x711->attributes['file'] = $x711->attributes['line'] = $x711->attributes['column'] = 0; }
throw new JSException($x711, 211, 27, '<image>/04_array.js');
}
$x707 = $x705->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 27);
$x708 = $x707($global, $x701, $x705, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x708 === JS::$undefined || $x708 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x713 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 45, '<image>/04_array.js');
$_TypeError =& $x713[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x713;
$x714 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x715 = $x714($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x715->class) && $x715->class === 'Error' && !isset($x715->properties['file']) && !isset($x715->properties['line']) && !isset($x715->properties['column'])) {$x715->properties['file'] = '<image>/04_array.js';$x715->properties['line'] = 211;$x715->properties['column'] = 45;$x715->attributes['file'] = $x715->attributes['line'] = $x715->attributes['column'] = 0; }
throw new JSException($x715, 211, 45, '<image>/04_array.js');
}
$x712 = JS::toObject($x708, $global);
unset($x716, $W716, $S716, $U716);
$x717 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x712, JS::toString('concat', $global), 211, 45, '<image>/04_array.js');
$x716 =& $x717[0]; list(,$W716,$S716,$U716) = $x717;
$x718 = clone JS::$arrayTemplate;
$x718->properties['length'] = 1;
$x718->attributes['length'] = JS::WRITABLE;
$x718->properties[0] = $_pivot;
$x718->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_larger === JS::$undefined || $_larger === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x720 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 66, '<image>/04_array.js');
$_TypeError =& $x720[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x720;
$x721 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x722 = $x721($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x722->class) && $x722->class === 'Error' && !isset($x722->properties['file']) && !isset($x722->properties['line']) && !isset($x722->properties['column'])) {$x722->properties['file'] = '<image>/04_array.js';$x722->properties['line'] = 211;$x722->properties['column'] = 66;$x722->attributes['file'] = $x722->attributes['line'] = $x722->attributes['column'] = 0; }
throw new JSException($x722, 211, 66, '<image>/04_array.js');
}
$x719 = JS::toObject($_larger, $global);
unset($x723, $W723, $S723, $U723);
$x724 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x719, JS::toString('sort', $global), 211, 66, '<image>/04_array.js');
$x723 =& $x724[0]; list(,$W723,$S723,$U723) = $x724;
if (!(is_object($x723) && isset($x723->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x727 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 66, '<image>/04_array.js');
$_TypeError =& $x727[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x727;
$x728 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x729 = $x728($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x729->class) && $x729->class === 'Error' && !isset($x729->properties['file']) && !isset($x729->properties['line']) && !isset($x729->properties['column'])) {$x729->properties['file'] = '<image>/04_array.js';$x729->properties['line'] = 211;$x729->properties['column'] = 66;$x729->attributes['file'] = $x729->attributes['line'] = $x729->attributes['column'] = 0; }
throw new JSException($x729, 211, 66, '<image>/04_array.js');
}
$x725 = $x723->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 66);
$x726 = $x725($global, $x719, $x723, array($_compareFn), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x716) && isset($x716->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x732 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 211, 45, '<image>/04_array.js');
$_TypeError =& $x732[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x732;
$x733 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x734 = $x733($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x734->class) && $x734->class === 'Error' && !isset($x734->properties['file']) && !isset($x734->properties['line']) && !isset($x734->properties['column'])) {$x734->properties['file'] = '<image>/04_array.js';$x734->properties['line'] = 211;$x734->properties['column'] = 45;$x734->attributes['file'] = $x734->attributes['line'] = $x734->attributes['column'] = 0; }
throw new JSException($x734, 211, 45, '<image>/04_array.js');
}
$x730 = $x716->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 211, 45);
$x731 = $x730($global, $x712, $x716, array($x718, $x726), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['sorted'] = JS::$undefined; $_sorted =& $scope->properties['sorted'];
$Usorted = FALSE;
$_sorted = $x731;
for ($x735 = 0;; ++$x735) {
if ($x735 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x736, $W736, $S736, $U736);
$x737 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, JS::toString('length', $global), 213, 28, '<image>/04_array.js');
$x736 =& $x737[0]; list(,$W736,$S736,$U736) = $x737;
unset($_l);
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x736;
}
if ($x735 !== 0) {
$x738 = ++$_i;
}
$x739 = JS::toPrimitive($_i, $global);
$x740 = JS::toPrimitive($_l, $global);
$x741 = (is_string($x739) && is_string($x740) ? strcmp($x739, $x740) < 0 : (!is_nan($x742 = JS::toNumber($x739, $global)) && !is_nan($x743 = JS::toNumber($x740, $global)) && $x742 < $x743));
if (!JS::toBoolean($x741, $global)) { break; }

unset($x744, $W744, $S744, $U744);
$x745 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_sorted, JS::toString($_i, $global), 214, 19, '<image>/04_array.js');
$x744 =& $x745[0]; list(,$W744,$S744,$U744) = $x745;
$x746 = JS::toString($_i, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x747 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 214, 11, '<image>/04_array.js');
$_TypeError =& $x747[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x747;
$x748 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x749 = $x748($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x749->class) && $x749->class === 'Error' && !isset($x749->properties['file']) && !isset($x749->properties['line']) && !isset($x749->properties['column'])) {$x749->properties['file'] = '<image>/04_array.js';$x749->properties['line'] = 214;$x749->properties['column'] = 11;$x749->attributes['file'] = $x749->attributes['line'] = $x749->attributes['column'] = 0; }
throw new JSException($x749, 214, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x750, $W750, $S750, $U750);
$x751 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x746, $global), 214, 11, '<image>/04_array.js');
$x750 =& $x751[0]; list(,$W750,$S750,$U750) = $x751;
if ($U750 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x746] = $x750; $x750 =& $leThis->properties[$x746]; $leThis->attributes[$x746] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U750 = FALSE; $W750 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x753 = $leThis->properties['length']; }  else { $x753 = 0; } }
if (isset($S750)) {
$x754 = $S750->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 214, 11);
$x755 = $x754($global, $leThis, $S750, array($x744), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x752 = $x755;
} else {
if (!$U750) {$x752 = $x744;if ($W750) { $x750 = $x744; }  }
else { $x752 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; }else if ($x746 === 'length' && is_int($x744) && $x753 > $x744) {  for ($i = $x744; $i < $x753; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
};
return $leThis;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x602=&$scope->properties[\'arguments\'];$x602->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x602->properties[$i]=$args[$i];$x602->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'compareFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_compareFn=&$scope->properties[\'compareFn\'];$UcompareFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$x603=$_compareFn;if(!JS::toBoolean($x603,$global)){$x642=clone JS::$functionTemplate;$x642->call=\'_339fc8fcf8563d9777a12bd15b91ae1b_15\';$x642->parameters=array(0=>\'a\',1=>\'b\',);$x642->scope=$scope;$x642->properties[\'prototype\']=clone JS::$objectTemplate;$x642->attributes[\'prototype\']=JS::WRITABLE;$x642->properties[\'prototype\']->properties[\'constructor\']=$x642;$x642->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x642->properties[\'length\']=2;$x642->attributes[\'length\']=0;$x603=$x642;}if($UcompareFn){$global->properties[\'compareFn\']=$_compareFn;$_compareFn=&$global->properties[\'compareFn\'];}$_compareFn=$x603;unset($x646,$W646,$S646,$U646);$x647=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),195,10,\'<image>/04_array.js\');$x646=&$x647[0];list(,$W646,$S646,$U646)=$x647;$x643=JS::toPrimitive($x646,$global);$x644=JS::toPrimitive(2,$global);$x645=(is_string($x643)&&is_string($x644)?strcmp($x643,$x644)<0:(!is_nan($x648=JS::toNumber($x643,$global))&&!is_nan($x649=JS::toNumber($x644,$global))&&$x648<$x649));if(JS::toBoolean($x645,$global)){return$leThis;}$scope->properties[\'pivot\']=JS::$undefined;$_pivot=&$scope->properties[\'pivot\'];$Upivot=FALSE;$_pivot=JS::$undefined;$x650=clone JS::$arrayTemplate;$x650->properties[\'length\']=0;$x650->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'smaller\']=JS::$undefined;$_smaller=&$scope->properties[\'smaller\'];$Usmaller=FALSE;$_smaller=$x650;$x651=clone JS::$arrayTemplate;$x651->properties[\'length\']=0;$x651->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'larger\']=JS::$undefined;$_larger=&$scope->properties[\'larger\'];$Ularger=FALSE;$_larger=$x651;unset($x652,$W652,$S652,$U652);$x653=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(0,$global),201,14,\'<image>/04_array.js\');$x652=&$x653[0];list(,$W652,$S652,$U652)=$x653;if($Upivot){$global->properties[\'pivot\']=$_pivot;$_pivot=&$global->properties[\'pivot\'];}$_pivot=$x652;for($x654=0;;++$x654){if($x654===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x655,$W655,$S655,$U655);$x656=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),203,26,\'<image>/04_array.js\');$x655=&$x656[0];list(,$W655,$S655,$U655)=$x656;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x655;}if($x654!==0){$x657=++$_i;}$x658=JS::toPrimitive($_i,$global);$x659=JS::toPrimitive($_l,$global);$x660=(is_string($x658)&&is_string($x659)?strcmp($x658,$x659)<0:(!is_nan($x661=JS::toNumber($x658,$global))&&!is_nan($x662=JS::toNumber($x659,$global))&&$x661<$x662));if(!JS::toBoolean($x660,$global)){break;}unset($x666,$W666,$S666,$U666);$x667=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),204,21,\'<image>/04_array.js\');$x666=&$x667[0];list(,$W666,$S666,$U666)=$x667;if(!(is_object($_compareFn)&&isset($_compareFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x670=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),204,16,\'<image>/04_array.js\');$_TypeError=&$x670[0];list(,$WTypeError,$STypeError,$UTypeError)=$x670;$x671=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x672=$x671($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x672->class)&&$x672->class===\'Error\'&&!isset($x672->properties[\'file\'])&&!isset($x672->properties[\'line\'])&&!isset($x672->properties[\'column\'])){$x672->properties[\'file\']=\'<image>/04_array.js\';$x672->properties[\'line\']=204;$x672->properties[\'column\']=16;$x672->attributes[\'file\']=$x672->attributes[\'line\']=$x672->attributes[\'column\']=0;}throw new JSException($x672,204,16,\'<image>/04_array.js\');}$x668=$_compareFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',204,16);$x669=$x668($global,$global,$_compareFn,array($x666,$_pivot),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x663=JS::toPrimitive($x669,$global);$x664=JS::toPrimitive(0,$global);$x665=(is_string($x663)&&is_string($x664)?strcmp($x663,$x664)<0:(!is_nan($x673=JS::toNumber($x663,$global))&&!is_nan($x674=JS::toNumber($x664,$global))&&$x673<$x674));if(JS::toBoolean($x665,$global)){if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x676=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,16,\'<image>/04_array.js\');$_TypeError=&$x676[0];list(,$WTypeError,$STypeError,$UTypeError)=$x676;$x677=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x678=$x677($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x678->class)&&$x678->class===\'Error\'&&!isset($x678->properties[\'file\'])&&!isset($x678->properties[\'line\'])&&!isset($x678->properties[\'column\'])){$x678->properties[\'file\']=\'<image>/04_array.js\';$x678->properties[\'line\']=205;$x678->properties[\'column\']=16;$x678->attributes[\'file\']=$x678->attributes[\'line\']=$x678->attributes[\'column\']=0;}throw new JSException($x678,205,16,\'<image>/04_array.js\');}$x675=JS::toObject($_smaller,$global);unset($x679,$W679,$S679,$U679);$x680=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x675,JS::toString(\'push\',$global),205,16,\'<image>/04_array.js\');$x679=&$x680[0];list(,$W679,$S679,$U679)=$x680;unset($x681,$W681,$S681,$U681);$x682=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),205,21,\'<image>/04_array.js\');$x681=&$x682[0];list(,$W681,$S681,$U681)=$x682;if(!(is_object($x679)&&isset($x679->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x685=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),205,16,\'<image>/04_array.js\');$_TypeError=&$x685[0];list(,$WTypeError,$STypeError,$UTypeError)=$x685;$x686=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x687=$x686($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x687->class)&&$x687->class===\'Error\'&&!isset($x687->properties[\'file\'])&&!isset($x687->properties[\'line\'])&&!isset($x687->properties[\'column\'])){$x687->properties[\'file\']=\'<image>/04_array.js\';$x687->properties[\'line\']=205;$x687->properties[\'column\']=16;$x687->attributes[\'file\']=$x687->attributes[\'line\']=$x687->attributes[\'column\']=0;}throw new JSException($x687,205,16,\'<image>/04_array.js\');}$x683=$x679->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',205,16);$x684=$x683($global,$x675,$x679,array($x681),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x689=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),207,15,\'<image>/04_array.js\');$_TypeError=&$x689[0];list(,$WTypeError,$STypeError,$UTypeError)=$x689;$x690=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x691=$x690($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x691->class)&&$x691->class===\'Error\'&&!isset($x691->properties[\'file\'])&&!isset($x691->properties[\'line\'])&&!isset($x691->properties[\'column\'])){$x691->properties[\'file\']=\'<image>/04_array.js\';$x691->properties[\'line\']=207;$x691->properties[\'column\']=15;$x691->attributes[\'file\']=$x691->attributes[\'line\']=$x691->attributes[\'column\']=0;}throw new JSException($x691,207,15,\'<image>/04_array.js\');}$x688=JS::toObject($_larger,$global);unset($x692,$W692,$S692,$U692);$x693=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x688,JS::toString(\'push\',$global),207,15,\'<image>/04_array.js\');$x692=&$x693[0];list(,$W692,$S692,$U692)=$x693;unset($x694,$W694,$S694,$U694);$x695=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),207,20,\'<image>/04_array.js\');$x694=&$x695[0];list(,$W694,$S694,$U694)=$x695;if(!(is_object($x692)&&isset($x692->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x698=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),207,15,\'<image>/04_array.js\');$_TypeError=&$x698[0];list(,$WTypeError,$STypeError,$UTypeError)=$x698;$x699=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x700=$x699($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x700->class)&&$x700->class===\'Error\'&&!isset($x700->properties[\'file\'])&&!isset($x700->properties[\'line\'])&&!isset($x700->properties[\'column\'])){$x700->properties[\'file\']=\'<image>/04_array.js\';$x700->properties[\'line\']=207;$x700->properties[\'column\']=15;$x700->attributes[\'file\']=$x700->attributes[\'line\']=$x700->attributes[\'column\']=0;}throw new JSException($x700,207,15,\'<image>/04_array.js\');}$x696=$x692->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',207,15);$x697=$x696($global,$x688,$x692,array($x694),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}if($_smaller===JS::$undefined||$_smaller===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x702=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,27,\'<image>/04_array.js\');$_TypeError=&$x702[0];list(,$WTypeError,$STypeError,$UTypeError)=$x702;$x703=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x704=$x703($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x704->class)&&$x704->class===\'Error\'&&!isset($x704->properties[\'file\'])&&!isset($x704->properties[\'line\'])&&!isset($x704->properties[\'column\'])){$x704->properties[\'file\']=\'<image>/04_array.js\';$x704->properties[\'line\']=211;$x704->properties[\'column\']=27;$x704->attributes[\'file\']=$x704->attributes[\'line\']=$x704->attributes[\'column\']=0;}throw new JSException($x704,211,27,\'<image>/04_array.js\');}$x701=JS::toObject($_smaller,$global);unset($x705,$W705,$S705,$U705);$x706=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x701,JS::toString(\'sort\',$global),211,27,\'<image>/04_array.js\');$x705=&$x706[0];list(,$W705,$S705,$U705)=$x706;if(!(is_object($x705)&&isset($x705->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x709=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,27,\'<image>/04_array.js\');$_TypeError=&$x709[0];list(,$WTypeError,$STypeError,$UTypeError)=$x709;$x710=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x711=$x710($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x711->class)&&$x711->class===\'Error\'&&!isset($x711->properties[\'file\'])&&!isset($x711->properties[\'line\'])&&!isset($x711->properties[\'column\'])){$x711->properties[\'file\']=\'<image>/04_array.js\';$x711->properties[\'line\']=211;$x711->properties[\'column\']=27;$x711->attributes[\'file\']=$x711->attributes[\'line\']=$x711->attributes[\'column\']=0;}throw new JSException($x711,211,27,\'<image>/04_array.js\');}$x707=$x705->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,27);$x708=$x707($global,$x701,$x705,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x708===JS::$undefined||$x708===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x713=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,45,\'<image>/04_array.js\');$_TypeError=&$x713[0];list(,$WTypeError,$STypeError,$UTypeError)=$x713;$x714=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x715=$x714($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x715->class)&&$x715->class===\'Error\'&&!isset($x715->properties[\'file\'])&&!isset($x715->properties[\'line\'])&&!isset($x715->properties[\'column\'])){$x715->properties[\'file\']=\'<image>/04_array.js\';$x715->properties[\'line\']=211;$x715->properties[\'column\']=45;$x715->attributes[\'file\']=$x715->attributes[\'line\']=$x715->attributes[\'column\']=0;}throw new JSException($x715,211,45,\'<image>/04_array.js\');}$x712=JS::toObject($x708,$global);unset($x716,$W716,$S716,$U716);$x717=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x712,JS::toString(\'concat\',$global),211,45,\'<image>/04_array.js\');$x716=&$x717[0];list(,$W716,$S716,$U716)=$x717;$x718=clone JS::$arrayTemplate;$x718->properties[\'length\']=1;$x718->attributes[\'length\']=JS::WRITABLE;$x718->properties[0]=$_pivot;$x718->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_larger===JS::$undefined||$_larger===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x720=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,66,\'<image>/04_array.js\');$_TypeError=&$x720[0];list(,$WTypeError,$STypeError,$UTypeError)=$x720;$x721=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x722=$x721($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x722->class)&&$x722->class===\'Error\'&&!isset($x722->properties[\'file\'])&&!isset($x722->properties[\'line\'])&&!isset($x722->properties[\'column\'])){$x722->properties[\'file\']=\'<image>/04_array.js\';$x722->properties[\'line\']=211;$x722->properties[\'column\']=66;$x722->attributes[\'file\']=$x722->attributes[\'line\']=$x722->attributes[\'column\']=0;}throw new JSException($x722,211,66,\'<image>/04_array.js\');}$x719=JS::toObject($_larger,$global);unset($x723,$W723,$S723,$U723);$x724=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x719,JS::toString(\'sort\',$global),211,66,\'<image>/04_array.js\');$x723=&$x724[0];list(,$W723,$S723,$U723)=$x724;if(!(is_object($x723)&&isset($x723->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x727=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,66,\'<image>/04_array.js\');$_TypeError=&$x727[0];list(,$WTypeError,$STypeError,$UTypeError)=$x727;$x728=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x729=$x728($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x729->class)&&$x729->class===\'Error\'&&!isset($x729->properties[\'file\'])&&!isset($x729->properties[\'line\'])&&!isset($x729->properties[\'column\'])){$x729->properties[\'file\']=\'<image>/04_array.js\';$x729->properties[\'line\']=211;$x729->properties[\'column\']=66;$x729->attributes[\'file\']=$x729->attributes[\'line\']=$x729->attributes[\'column\']=0;}throw new JSException($x729,211,66,\'<image>/04_array.js\');}$x725=$x723->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,66);$x726=$x725($global,$x719,$x723,array($_compareFn),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x716)&&isset($x716->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x732=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),211,45,\'<image>/04_array.js\');$_TypeError=&$x732[0];list(,$WTypeError,$STypeError,$UTypeError)=$x732;$x733=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x734=$x733($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x734->class)&&$x734->class===\'Error\'&&!isset($x734->properties[\'file\'])&&!isset($x734->properties[\'line\'])&&!isset($x734->properties[\'column\'])){$x734->properties[\'file\']=\'<image>/04_array.js\';$x734->properties[\'line\']=211;$x734->properties[\'column\']=45;$x734->attributes[\'file\']=$x734->attributes[\'line\']=$x734->attributes[\'column\']=0;}throw new JSException($x734,211,45,\'<image>/04_array.js\');}$x730=$x716->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',211,45);$x731=$x730($global,$x712,$x716,array($x718,$x726),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'sorted\']=JS::$undefined;$_sorted=&$scope->properties[\'sorted\'];$Usorted=FALSE;$_sorted=$x731;for($x735=0;;++$x735){if($x735===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x736,$W736,$S736,$U736);$x737=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,JS::toString(\'length\',$global),213,28,\'<image>/04_array.js\');$x736=&$x737[0];list(,$W736,$S736,$U736)=$x737;unset($_l);$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x736;}if($x735!==0){$x738=++$_i;}$x739=JS::toPrimitive($_i,$global);$x740=JS::toPrimitive($_l,$global);$x741=(is_string($x739)&&is_string($x740)?strcmp($x739,$x740)<0:(!is_nan($x742=JS::toNumber($x739,$global))&&!is_nan($x743=JS::toNumber($x740,$global))&&$x742<$x743));if(!JS::toBoolean($x741,$global)){break;}unset($x744,$W744,$S744,$U744);$x745=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_sorted,JS::toString($_i,$global),214,19,\'<image>/04_array.js\');$x744=&$x745[0];list(,$W744,$S744,$U744)=$x745;$x746=JS::toString($_i,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x747=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),214,11,\'<image>/04_array.js\');$_TypeError=&$x747[0];list(,$WTypeError,$STypeError,$UTypeError)=$x747;$x748=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x749=$x748($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x749->class)&&$x749->class===\'Error\'&&!isset($x749->properties[\'file\'])&&!isset($x749->properties[\'line\'])&&!isset($x749->properties[\'column\'])){$x749->properties[\'file\']=\'<image>/04_array.js\';$x749->properties[\'line\']=214;$x749->properties[\'column\']=11;$x749->attributes[\'file\']=$x749->attributes[\'line\']=$x749->attributes[\'column\']=0;}throw new JSException($x749,214,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x750,$W750,$S750,$U750);$x751=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x746,$global),214,11,\'<image>/04_array.js\');$x750=&$x751[0];list(,$W750,$S750,$U750)=$x751;if($U750&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x746]=$x750;$x750=&$leThis->properties[$x746];$leThis->attributes[$x746]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U750=FALSE;$W750=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x753=$leThis->properties[\'length\'];}else{$x753=0;}}if(isset($S750)){$x754=$S750->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',214,11);$x755=$x754($global,$leThis,$S750,array($x744),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x752=$x755;}else{if(!$U750){$x752=$x744;if($W750){$x750=$x744;}}else{$x752=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}else if($x746===\'length\'&&is_int($x744)&&$x753>$x744){for($i=$x744;$i<$x753;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}}return$leThis;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x770 =& $scope->properties['arguments'];
$x770->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x770->properties[$i] = $args[$i];
$x770->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x771 = clone JS::$arrayTemplate;
$x771->properties['length'] = 0;
$x771->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x771;
$A = array();
for ($x772 = 0;; ++$x772) {
if ($x772 === 0) {
$x773 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x773;
unset($x774, $W774, $S774, $U774);
$x775 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 225, 22, '<image>/04_array.js');
$x774 =& $x775[0]; list(,$W774,$S774,$U774) = $x775;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x774;
}
if ($x772 !== 0) {
$x776 = ++$_i;
}
$x777 = JS::toPrimitive($_i, $global);
$x778 = JS::toPrimitive($_l, $global);
$x779 = (is_string($x777) && is_string($x778) ? strcmp($x777, $x778) < 0 : (!is_nan($x780 = JS::toNumber($x777, $global)) && !is_nan($x781 = JS::toNumber($x778, $global)) && $x780 < $x781));
if (!JS::toBoolean($x779, $global)) { break; }

unset($x782, $W782, $S782, $U782);
$x783 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 226, 14, '<image>/04_array.js');
$x782 =& $x783[0]; list(,$W782,$S782,$U782) = $x783;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x782;
$A[] =$_item;
if (!array_key_exists($_i, $leThis->attributes)) { unset($leThis->properties[$_i]); $x784 = TRUE; }
else if ($leThis->attributes[$_i] & JS::CONFIGURABLE) { unset($leThis->properties[$_i], $leThis->attributes[$_i], $leThis->getters[$_i], $leThis->setters[$_i]); $x784 = TRUE; }
else { $x784 = FALSE; };;
};
$x785 = (((gettype($_deleteCount) === gettype(JS::$undefined) && $_deleteCount === JS::$undefined))|| (((is_float($_deleteCount) || is_int($_deleteCount)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_deleteCount == JS::$undefined));
if (JS::toBoolean($x785, $global)) {

$C = array_splice($A,$_start);;
}
else {
$B = array();
for ($x786 = 0;; ++$x786) {
if ($x786 === 0) {
$x787 = 2;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x787;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x788 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 236, 19, '<image>/04_array.js');
$_arguments =& $x788[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x788;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x789 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 236, 19, '<image>/04_array.js');
$_ReferenceError =& $x789[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x789;
$x790 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 236, 19);
$x791 = $x790($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x791->class) && $x791->class === 'Error' && !isset($x791->properties['file']) && !isset($x791->properties['line']) && !isset($x791->properties['column'])) {$x791->properties['file'] = '<image>/04_array.js';$x791->properties['line'] = 236;$x791->properties['column'] = 19;$x791->attributes['file'] = $x791->attributes['line'] = $x791->attributes['column'] = 0; }
throw new JSException($x791, 236, 19, '<image>/04_array.js');
}
unset($x792, $W792, $S792, $U792);
$x793 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 236, 28, '<image>/04_array.js');
$x792 =& $x793[0]; list(,$W792,$S792,$U792) = $x793;
if ($Ul) {$global->properties['l'] = $_l; $_l =& $global->properties['l']; }
$_l = $x792;
}
if ($x786 !== 0) {
$x794 = ++$_i;
}
$x795 = JS::toPrimitive($_i, $global);
$x796 = JS::toPrimitive($_l, $global);
$x797 = (is_string($x795) && is_string($x796) ? strcmp($x795, $x796) < 0 : (!is_nan($x798 = JS::toNumber($x795, $global)) && !is_nan($x799 = JS::toNumber($x796, $global)) && $x798 < $x799));
if (!JS::toBoolean($x797, $global)) { break; }

unset($x800, $W800, $S800, $U800);
$x801 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 237, 20, '<image>/04_array.js');
$x800 =& $x801[0]; list(,$W800,$S800,$U800) = $x801;
if ($Uitem) {$global->properties['item'] = $_item; $_item =& $global->properties['item']; }
$_item = $x800;
$B[] =$_item;;
};
$C = array_splice($A,$_start,$_deleteCount, $B);;
};
$x802 = 0;
$x803 = JS::toString('length', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x804 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 244, 14, '<image>/04_array.js');
$_TypeError =& $x804[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x804;
$x805 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x806 = $x805($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x806->class) && $x806->class === 'Error' && !isset($x806->properties['file']) && !isset($x806->properties['line']) && !isset($x806->properties['column'])) {$x806->properties['file'] = '<image>/04_array.js';$x806->properties['line'] = 244;$x806->properties['column'] = 14;$x806->attributes['file'] = $x806->attributes['line'] = $x806->attributes['column'] = 0; }
throw new JSException($x806, 244, 14, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x807, $W807, $S807, $U807);
$x808 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x803, $global), 244, 14, '<image>/04_array.js');
$x807 =& $x808[0]; list(,$W807,$S807,$U807) = $x808;
if ($U807 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x803] = $x807; $x807 =& $leThis->properties[$x803]; $leThis->attributes[$x803] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U807 = FALSE; $W807 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x810 = $leThis->properties['length']; }  else { $x810 = 0; } }
if (isset($S807)) {
$x811 = $S807->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 244, 14);
$x812 = $x811($global, $leThis, $S807, array($x802), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x809 = $x812;
} else {
if (!$U807) {$x809 = $x802;if ($W807) { $x807 = $x802; }  }
else { $x809 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int('length') && 'length' >= $leThis->properties['length']) { $leThis->properties['length'] = 'length' + 1; }else if ($x803 === 'length' && is_int($x802) && $x810 > $x802) {  for ($i = $x802; $i < $x810; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
foreach ($A as $V) {;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x814 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 247, 12, '<image>/04_array.js');
$_TypeError =& $x814[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x814;
$x815 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x816 = $x815($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x816->class) && $x816->class === 'Error' && !isset($x816->properties['file']) && !isset($x816->properties['line']) && !isset($x816->properties['column'])) {$x816->properties['file'] = '<image>/04_array.js';$x816->properties['line'] = 247;$x816->properties['column'] = 12;$x816->attributes['file'] = $x816->attributes['line'] = $x816->attributes['column'] = 0; }
throw new JSException($x816, 247, 12, '<image>/04_array.js');
}
$x813 = JS::toObject($leThis, $global);
unset($x817, $W817, $S817, $U817);
$x818 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x813, JS::toString('push', $global), 247, 12, '<image>/04_array.js');
$x817 =& $x818[0]; list(,$W817,$S817,$U817) = $x818;
if (!(is_object($x817) && isset($x817->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x821 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 247, 12, '<image>/04_array.js');
$_TypeError =& $x821[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x821;
$x822 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x823 = $x822($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x823->class) && $x823->class === 'Error' && !isset($x823->properties['file']) && !isset($x823->properties['line']) && !isset($x823->properties['column'])) {$x823->properties['file'] = '<image>/04_array.js';$x823->properties['line'] = 247;$x823->properties['column'] = 12;$x823->attributes['file'] = $x823->attributes['line'] = $x823->attributes['column'] = 0; }
throw new JSException($x823, 247, 12, '<image>/04_array.js');
}
$x819 = $x817->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 247, 12);
$x820 = $x819($global, $x813, $x817, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
foreach ($C as $I => $V) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x825 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 251, 19, '<image>/04_array.js');
$_TypeError =& $x825[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x825;
$x826 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x827 = $x826($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x827->class) && $x827->class === 'Error' && !isset($x827->properties['file']) && !isset($x827->properties['line']) && !isset($x827->properties['column'])) {$x827->properties['file'] = '<image>/04_array.js';$x827->properties['line'] = 251;$x827->properties['column'] = 19;$x827->attributes['file'] = $x827->attributes['line'] = $x827->attributes['column'] = 0; }
throw new JSException($x827, 251, 19, '<image>/04_array.js');
}
$x824 = JS::toObject($_returnArray, $global);
unset($x828, $W828, $S828, $U828);
$x829 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x824, JS::toString('push', $global), 251, 19, '<image>/04_array.js');
$x828 =& $x829[0]; list(,$W828,$S828,$U828) = $x829;
if (!(is_object($x828) && isset($x828->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x832 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 251, 19, '<image>/04_array.js');
$_TypeError =& $x832[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x832;
$x833 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x834 = $x833($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x834->class) && $x834->class === 'Error' && !isset($x834->properties['file']) && !isset($x834->properties['line']) && !isset($x834->properties['column'])) {$x834->properties['file'] = '<image>/04_array.js';$x834->properties['line'] = 251;$x834->properties['column'] = 19;$x834->attributes['file'] = $x834->attributes['line'] = $x834->attributes['column'] = 0; }
throw new JSException($x834, 251, 19, '<image>/04_array.js');
}
$x830 = $x828->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 251, 19);
$x831 = $x830($global, $x824, $x828, array($V), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x770=&$scope->properties[\'arguments\'];$x770->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x770->properties[$i]=$args[$i];$x770->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'deleteCount\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_deleteCount=&$scope->properties[\'deleteCount\'];$UdeleteCount=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=JS::$undefined;$scope->properties[\'item\']=JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$_item=JS::$undefined;$x771=clone JS::$arrayTemplate;$x771->properties[\'length\']=0;$x771->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x771;$A=array();for($x772=0;;++$x772){if($x772===0){$x773=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x773;unset($x774,$W774,$S774,$U774);$x775=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),225,22,\'<image>/04_array.js\');$x774=&$x775[0];list(,$W774,$S774,$U774)=$x775;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x774;}if($x772!==0){$x776=++$_i;}$x777=JS::toPrimitive($_i,$global);$x778=JS::toPrimitive($_l,$global);$x779=(is_string($x777)&&is_string($x778)?strcmp($x777,$x778)<0:(!is_nan($x780=JS::toNumber($x777,$global))&&!is_nan($x781=JS::toNumber($x778,$global))&&$x780<$x781));if(!JS::toBoolean($x779,$global)){break;}unset($x782,$W782,$S782,$U782);$x783=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),226,14,\'<image>/04_array.js\');$x782=&$x783[0];list(,$W782,$S782,$U782)=$x783;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x782;$A[]=$_item;if(!array_key_exists($_i,$leThis->attributes)){unset($leThis->properties[$_i]);$x784=TRUE;}else if($leThis->attributes[$_i]&JS::CONFIGURABLE){unset($leThis->properties[$_i],$leThis->attributes[$_i],$leThis->getters[$_i],$leThis->setters[$_i]);$x784=TRUE;}else{$x784=FALSE;}}$x785=(((gettype($_deleteCount)===gettype(JS::$undefined)&&$_deleteCount===JS::$undefined))||(((is_float($_deleteCount)||is_int($_deleteCount))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_deleteCount==JS::$undefined));if(JS::toBoolean($x785,$global)){$C=array_splice($A,$_start);}else{$B=array();for($x786=0;;++$x786){if($x786===0){$x787=2;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x787;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x788=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),236,19,\'<image>/04_array.js\');$_arguments=&$x788[0];list(,$Warguments,$Sarguments,$Uarguments)=$x788;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x789=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),236,19,\'<image>/04_array.js\');$_ReferenceError=&$x789[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x789;$x790=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',236,19);$x791=$x790($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x791->class)&&$x791->class===\'Error\'&&!isset($x791->properties[\'file\'])&&!isset($x791->properties[\'line\'])&&!isset($x791->properties[\'column\'])){$x791->properties[\'file\']=\'<image>/04_array.js\';$x791->properties[\'line\']=236;$x791->properties[\'column\']=19;$x791->attributes[\'file\']=$x791->attributes[\'line\']=$x791->attributes[\'column\']=0;}throw new JSException($x791,236,19,\'<image>/04_array.js\');}unset($x792,$W792,$S792,$U792);$x793=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),236,28,\'<image>/04_array.js\');$x792=&$x793[0];list(,$W792,$S792,$U792)=$x793;if($Ul){$global->properties[\'l\']=$_l;$_l=&$global->properties[\'l\'];}$_l=$x792;}if($x786!==0){$x794=++$_i;}$x795=JS::toPrimitive($_i,$global);$x796=JS::toPrimitive($_l,$global);$x797=(is_string($x795)&&is_string($x796)?strcmp($x795,$x796)<0:(!is_nan($x798=JS::toNumber($x795,$global))&&!is_nan($x799=JS::toNumber($x796,$global))&&$x798<$x799));if(!JS::toBoolean($x797,$global)){break;}unset($x800,$W800,$S800,$U800);$x801=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),237,20,\'<image>/04_array.js\');$x800=&$x801[0];list(,$W800,$S800,$U800)=$x801;if($Uitem){$global->properties[\'item\']=$_item;$_item=&$global->properties[\'item\'];}$_item=$x800;$B[]=$_item;}$C=array_splice($A,$_start,$_deleteCount,$B);}$x802=0;$x803=JS::toString(\'length\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x804=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,14,\'<image>/04_array.js\');$_TypeError=&$x804[0];list(,$WTypeError,$STypeError,$UTypeError)=$x804;$x805=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x806=$x805($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x806->class)&&$x806->class===\'Error\'&&!isset($x806->properties[\'file\'])&&!isset($x806->properties[\'line\'])&&!isset($x806->properties[\'column\'])){$x806->properties[\'file\']=\'<image>/04_array.js\';$x806->properties[\'line\']=244;$x806->properties[\'column\']=14;$x806->attributes[\'file\']=$x806->attributes[\'line\']=$x806->attributes[\'column\']=0;}throw new JSException($x806,244,14,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x807,$W807,$S807,$U807);$x808=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x803,$global),244,14,\'<image>/04_array.js\');$x807=&$x808[0];list(,$W807,$S807,$U807)=$x808;if($U807&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x803]=$x807;$x807=&$leThis->properties[$x803];$leThis->attributes[$x803]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U807=FALSE;$W807=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x810=$leThis->properties[\'length\'];}else{$x810=0;}}if(isset($S807)){$x811=$S807->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',244,14);$x812=$x811($global,$leThis,$S807,array($x802),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x809=$x812;}else{if(!$U807){$x809=$x802;if($W807){$x807=$x802;}}else{$x809=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int(\'length\')&&\'length\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'length\'+1;}else if($x803===\'length\'&&is_int($x802)&&$x810>$x802){for($i=$x802;$i<$x810;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}foreach($A as$V){;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x814=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),247,12,\'<image>/04_array.js\');$_TypeError=&$x814[0];list(,$WTypeError,$STypeError,$UTypeError)=$x814;$x815=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x816=$x815($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x816->class)&&$x816->class===\'Error\'&&!isset($x816->properties[\'file\'])&&!isset($x816->properties[\'line\'])&&!isset($x816->properties[\'column\'])){$x816->properties[\'file\']=\'<image>/04_array.js\';$x816->properties[\'line\']=247;$x816->properties[\'column\']=12;$x816->attributes[\'file\']=$x816->attributes[\'line\']=$x816->attributes[\'column\']=0;}throw new JSException($x816,247,12,\'<image>/04_array.js\');}$x813=JS::toObject($leThis,$global);unset($x817,$W817,$S817,$U817);$x818=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x813,JS::toString(\'push\',$global),247,12,\'<image>/04_array.js\');$x817=&$x818[0];list(,$W817,$S817,$U817)=$x818;if(!(is_object($x817)&&isset($x817->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x821=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),247,12,\'<image>/04_array.js\');$_TypeError=&$x821[0];list(,$WTypeError,$STypeError,$UTypeError)=$x821;$x822=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x823=$x822($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x823->class)&&$x823->class===\'Error\'&&!isset($x823->properties[\'file\'])&&!isset($x823->properties[\'line\'])&&!isset($x823->properties[\'column\'])){$x823->properties[\'file\']=\'<image>/04_array.js\';$x823->properties[\'line\']=247;$x823->properties[\'column\']=12;$x823->attributes[\'file\']=$x823->attributes[\'line\']=$x823->attributes[\'column\']=0;}throw new JSException($x823,247,12,\'<image>/04_array.js\');}$x819=$x817->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',247,12);$x820=$x819($global,$x813,$x817,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}foreach($C as$I=>$V){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x825=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),251,19,\'<image>/04_array.js\');$_TypeError=&$x825[0];list(,$WTypeError,$STypeError,$UTypeError)=$x825;$x826=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x827=$x826($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x827->class)&&$x827->class===\'Error\'&&!isset($x827->properties[\'file\'])&&!isset($x827->properties[\'line\'])&&!isset($x827->properties[\'column\'])){$x827->properties[\'file\']=\'<image>/04_array.js\';$x827->properties[\'line\']=251;$x827->properties[\'column\']=19;$x827->attributes[\'file\']=$x827->attributes[\'line\']=$x827->attributes[\'column\']=0;}throw new JSException($x827,251,19,\'<image>/04_array.js\');}$x824=JS::toObject($_returnArray,$global);unset($x828,$W828,$S828,$U828);$x829=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x824,JS::toString(\'push\',$global),251,19,\'<image>/04_array.js\');$x828=&$x829[0];list(,$W828,$S828,$U828)=$x829;if(!(is_object($x828)&&isset($x828->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x832=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),251,19,\'<image>/04_array.js\');$_TypeError=&$x832[0];list(,$WTypeError,$STypeError,$UTypeError)=$x832;$x833=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x834=$x833($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x834->class)&&$x834->class===\'Error\'&&!isset($x834->properties[\'file\'])&&!isset($x834->properties[\'line\'])&&!isset($x834->properties[\'column\'])){$x834->properties[\'file\']=\'<image>/04_array.js\';$x834->properties[\'line\']=251;$x834->properties[\'column\']=19;$x834->attributes[\'file\']=$x834->attributes[\'line\']=$x834->attributes[\'column\']=0;}throw new JSException($x834,251,19,\'<image>/04_array.js\');}$x830=$x828->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',251,19);$x831=$x830($global,$x824,$x828,array($V),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_17($global, $leThis, $fn, $args, $constructor = FALSE) {

for ($x850 = 0;; ++$x850) {
if ($x850 === 0) {
if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x849 =& $scope->properties['arguments'];
$x849->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x849->properties[$i] = $args[$i];
$x849->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['item'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_item =& $scope->properties['item'];
$Uitem = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x851, $W851, $S851, $U851);
$x852 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 258, 19, '<image>/04_array.js');
$x851 =& $x852[0]; list(,$W851,$S851,$U851) = $x852;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x851, $global) - JS::toNumber(1, $global));
}
if ($x850 !== 0) {
$x853 = --$_i;
}
$x854 = JS::toPrimitive($_i, $global);
$x855 = JS::toPrimitive(0, $global);
$x856 = !(is_string($x854) && is_string($x855) ? strcmp($x854, $x855) < 0 : (!is_nan($x857 = JS::toNumber($x854, $global)) && !is_nan($x858 = JS::toNumber($x855, $global)) && $x857 < $x858));
if (!JS::toBoolean($x856, $global)) { break; }

unset($x859, $W859, $S859, $U859);
$x860 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 259, 36, '<image>/04_array.js');
$x859 =& $x860[0]; list(,$W859,$S859,$U859) = $x860;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x863 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 259, 12, '<image>/04_array.js');
$_arguments =& $x863[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x863;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x864 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 259, 12, '<image>/04_array.js');
$_ReferenceError =& $x864[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x864;
$x865 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 12);
$x866 = $x865($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x866->class) && $x866->class === 'Error' && !isset($x866->properties['file']) && !isset($x866->properties['line']) && !isset($x866->properties['column'])) {$x866->properties['file'] = '<image>/04_array.js';$x866->properties['line'] = 259;$x866->properties['column'] = 12;$x866->attributes['file'] = $x866->attributes['line'] = $x866->attributes['column'] = 0; }
throw new JSException($x866, 259, 12, '<image>/04_array.js');
}
unset($x867, $W867, $S867, $U867);
$x868 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 259, 21, '<image>/04_array.js');
$x867 =& $x868[0]; list(,$W867,$S867,$U867) = $x868;
$x861 = JS::toPrimitive($_i, $global);
$x862 = JS::toPrimitive($x867, $global);
$x869 = JS::toString((is_string($x861) || is_string($x862) ? JS::toString($x861, $global) . JS::toString($x862, $global) : JS::toNumber($x861, $global) + JS::toNumber($x862, $global)), $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x870 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 259, 30, '<image>/04_array.js');
$_TypeError =& $x870[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x870;
$x871 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x872 = $x871($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x872->class) && $x872->class === 'Error' && !isset($x872->properties['file']) && !isset($x872->properties['line']) && !isset($x872->properties['column'])) {$x872->properties['file'] = '<image>/04_array.js';$x872->properties['line'] = 259;$x872->properties['column'] = 30;$x872->attributes['file'] = $x872->attributes['line'] = $x872->attributes['column'] = 0; }
throw new JSException($x872, 259, 30, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x873, $W873, $S873, $U873);
$x874 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x869, $global), 259, 30, '<image>/04_array.js');
$x873 =& $x874[0]; list(,$W873,$S873,$U873) = $x874;
if ($U873 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x869] = $x873; $x873 =& $leThis->properties[$x869]; $leThis->attributes[$x869] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U873 = FALSE; $W873 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x876 = $leThis->properties['length']; }  else { $x876 = 0; } }
if (isset($S873)) {
$x877 = $S873->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 259, 30);
$x878 = $x877($global, $leThis, $S873, array($x859), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x875 = $x878;
} else {
if (!$U873) {$x875 = $x859;if ($W873) { $x873 = $x859; }  }
else { $x875 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int((is_string($x861) || is_string($x862) ? JS::toString($x861, $global) . JS::toString($x862, $global) : JS::toNumber($x861, $global) + JS::toNumber($x862, $global))) && (is_string($x861) || is_string($x862) ? JS::toString($x861, $global) . JS::toString($x862, $global) : JS::toNumber($x861, $global) + JS::toNumber($x862, $global)) >= $leThis->properties['length']) { $leThis->properties['length'] = (is_string($x861) || is_string($x862) ? JS::toString($x861, $global) . JS::toString($x862, $global) : JS::toNumber($x861, $global) + JS::toNumber($x862, $global)) + 1; }else if ($x869 === 'length' && is_int($x859) && $x876 > $x859) {  for ($i = $x859; $i < $x876; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
};
for ($x879 = 0;; ++$x879) {
if ($x879 === 0) {
unset($_i);
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x880 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 262, 22, '<image>/04_array.js');
$_arguments =& $x880[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x880;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x881 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 262, 22, '<image>/04_array.js');
$_ReferenceError =& $x881[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x881;
$x882 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 262, 22);
$x883 = $x882($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x883->class) && $x883->class === 'Error' && !isset($x883->properties['file']) && !isset($x883->properties['line']) && !isset($x883->properties['column'])) {$x883->properties['file'] = '<image>/04_array.js';$x883->properties['line'] = 262;$x883->properties['column'] = 22;$x883->attributes['file'] = $x883->attributes['line'] = $x883->attributes['column'] = 0; }
throw new JSException($x883, 262, 22, '<image>/04_array.js');
}
unset($x884, $W884, $S884, $U884);
$x885 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 262, 31, '<image>/04_array.js');
$x884 =& $x885[0]; list(,$W884,$S884,$U884) = $x885;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x884;
}
if ($x879 !== 0) {
$x886 = ++$_i;
}
$x887 = JS::toPrimitive($_i, $global);
$x888 = JS::toPrimitive($_l, $global);
$x889 = (is_string($x887) && is_string($x888) ? strcmp($x887, $x888) < 0 : (!is_nan($x890 = JS::toNumber($x887, $global)) && !is_nan($x891 = JS::toNumber($x888, $global)) && $x890 < $x891));
if (!JS::toBoolean($x889, $global)) { break; }

unset($x892, $W892, $S892, $U892);
$x893 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString($_i, $global), 263, 22, '<image>/04_array.js');
$x892 =& $x893[0]; list(,$W892,$S892,$U892) = $x893;
$x894 = JS::toString($_i, $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x895 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 263, 11, '<image>/04_array.js');
$_TypeError =& $x895[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x895;
$x896 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x897 = $x896($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x897->class) && $x897->class === 'Error' && !isset($x897->properties['file']) && !isset($x897->properties['line']) && !isset($x897->properties['column'])) {$x897->properties['file'] = '<image>/04_array.js';$x897->properties['line'] = 263;$x897->properties['column'] = 11;$x897->attributes['file'] = $x897->attributes['line'] = $x897->attributes['column'] = 0; }
throw new JSException($x897, 263, 11, '<image>/04_array.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x898, $W898, $S898, $U898);
$x899 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $leThis, JS::toString($x894, $global), 263, 11, '<image>/04_array.js');
$x898 =& $x899[0]; list(,$W898,$S898,$U898) = $x899;
if ($U898 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x894] = $x898; $x898 =& $leThis->properties[$x894]; $leThis->attributes[$x894] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U898 = FALSE; $W898 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x901 = $leThis->properties['length']; }  else { $x901 = 0; } }
if (isset($S898)) {
$x902 = $S898->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 263, 11);
$x903 = $x902($global, $leThis, $S898, array($x892), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x900 = $x903;
} else {
if (!$U898) {$x900 = $x892;if ($W898) { $x898 = $x892; }  }
else { $x900 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int($_i) && $_i >= $leThis->properties['length']) { $leThis->properties['length'] = $_i + 1; }else if ($x894 === 'length' && is_int($x892) && $x901 > $x892) {  for ($i = $x892; $i < $x901; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
};
unset($x904, $W904, $S904, $U904);
$x905 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 266, 13, '<image>/04_array.js');
$x904 =& $x905[0]; list(,$W904,$S904,$U904) = $x905;
return $x904;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_17($global,$leThis,$fn,$args,$constructor=FALSE){for($x850=0;;++$x850){if($x850===0){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x849=&$scope->properties[\'arguments\'];$x849->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x849->properties[$i]=$args[$i];$x849->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'item\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_item=&$scope->properties[\'item\'];$Uitem=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x851,$W851,$S851,$U851);$x852=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),258,19,\'<image>/04_array.js\');$x851=&$x852[0];list(,$W851,$S851,$U851)=$x852;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x851,$global)-JS::toNumber(1,$global));}if($x850!==0){$x853=--$_i;}$x854=JS::toPrimitive($_i,$global);$x855=JS::toPrimitive(0,$global);$x856=!(is_string($x854)&&is_string($x855)?strcmp($x854,$x855)<0:(!is_nan($x857=JS::toNumber($x854,$global))&&!is_nan($x858=JS::toNumber($x855,$global))&&$x857<$x858));if(!JS::toBoolean($x856,$global)){break;}unset($x859,$W859,$S859,$U859);$x860=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),259,36,\'<image>/04_array.js\');$x859=&$x860[0];list(,$W859,$S859,$U859)=$x860;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x863=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),259,12,\'<image>/04_array.js\');$_arguments=&$x863[0];list(,$Warguments,$Sarguments,$Uarguments)=$x863;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x864=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),259,12,\'<image>/04_array.js\');$_ReferenceError=&$x864[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x864;$x865=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,12);$x866=$x865($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x866->class)&&$x866->class===\'Error\'&&!isset($x866->properties[\'file\'])&&!isset($x866->properties[\'line\'])&&!isset($x866->properties[\'column\'])){$x866->properties[\'file\']=\'<image>/04_array.js\';$x866->properties[\'line\']=259;$x866->properties[\'column\']=12;$x866->attributes[\'file\']=$x866->attributes[\'line\']=$x866->attributes[\'column\']=0;}throw new JSException($x866,259,12,\'<image>/04_array.js\');}unset($x867,$W867,$S867,$U867);$x868=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),259,21,\'<image>/04_array.js\');$x867=&$x868[0];list(,$W867,$S867,$U867)=$x868;$x861=JS::toPrimitive($_i,$global);$x862=JS::toPrimitive($x867,$global);$x869=JS::toString((is_string($x861)||is_string($x862)?JS::toString($x861,$global).JS::toString($x862,$global):JS::toNumber($x861,$global)+JS::toNumber($x862,$global)),$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x870=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),259,30,\'<image>/04_array.js\');$_TypeError=&$x870[0];list(,$WTypeError,$STypeError,$UTypeError)=$x870;$x871=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x872=$x871($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x872->class)&&$x872->class===\'Error\'&&!isset($x872->properties[\'file\'])&&!isset($x872->properties[\'line\'])&&!isset($x872->properties[\'column\'])){$x872->properties[\'file\']=\'<image>/04_array.js\';$x872->properties[\'line\']=259;$x872->properties[\'column\']=30;$x872->attributes[\'file\']=$x872->attributes[\'line\']=$x872->attributes[\'column\']=0;}throw new JSException($x872,259,30,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x873,$W873,$S873,$U873);$x874=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x869,$global),259,30,\'<image>/04_array.js\');$x873=&$x874[0];list(,$W873,$S873,$U873)=$x874;if($U873&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x869]=$x873;$x873=&$leThis->properties[$x869];$leThis->attributes[$x869]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U873=FALSE;$W873=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x876=$leThis->properties[\'length\'];}else{$x876=0;}}if(isset($S873)){$x877=$S873->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',259,30);$x878=$x877($global,$leThis,$S873,array($x859),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x875=$x878;}else{if(!$U873){$x875=$x859;if($W873){$x873=$x859;}}else{$x875=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int((is_string($x861)||is_string($x862)?JS::toString($x861,$global).JS::toString($x862,$global):JS::toNumber($x861,$global)+JS::toNumber($x862,$global)))&&(is_string($x861)||is_string($x862)?JS::toString($x861,$global).JS::toString($x862,$global):JS::toNumber($x861,$global)+JS::toNumber($x862,$global))>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=(is_string($x861)||is_string($x862)?JS::toString($x861,$global).JS::toString($x862,$global):JS::toNumber($x861,$global)+JS::toNumber($x862,$global))+1;}else if($x869===\'length\'&&is_int($x859)&&$x876>$x859){for($i=$x859;$i<$x876;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}}for($x879=0;;++$x879){if($x879===0){unset($_i);$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x880=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),262,22,\'<image>/04_array.js\');$_arguments=&$x880[0];list(,$Warguments,$Sarguments,$Uarguments)=$x880;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x881=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),262,22,\'<image>/04_array.js\');$_ReferenceError=&$x881[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x881;$x882=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',262,22);$x883=$x882($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x883->class)&&$x883->class===\'Error\'&&!isset($x883->properties[\'file\'])&&!isset($x883->properties[\'line\'])&&!isset($x883->properties[\'column\'])){$x883->properties[\'file\']=\'<image>/04_array.js\';$x883->properties[\'line\']=262;$x883->properties[\'column\']=22;$x883->attributes[\'file\']=$x883->attributes[\'line\']=$x883->attributes[\'column\']=0;}throw new JSException($x883,262,22,\'<image>/04_array.js\');}unset($x884,$W884,$S884,$U884);$x885=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),262,31,\'<image>/04_array.js\');$x884=&$x885[0];list(,$W884,$S884,$U884)=$x885;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x884;}if($x879!==0){$x886=++$_i;}$x887=JS::toPrimitive($_i,$global);$x888=JS::toPrimitive($_l,$global);$x889=(is_string($x887)&&is_string($x888)?strcmp($x887,$x888)<0:(!is_nan($x890=JS::toNumber($x887,$global))&&!is_nan($x891=JS::toNumber($x888,$global))&&$x890<$x891));if(!JS::toBoolean($x889,$global)){break;}unset($x892,$W892,$S892,$U892);$x893=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString($_i,$global),263,22,\'<image>/04_array.js\');$x892=&$x893[0];list(,$W892,$S892,$U892)=$x893;$x894=JS::toString($_i,$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x895=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,11,\'<image>/04_array.js\');$_TypeError=&$x895[0];list(,$WTypeError,$STypeError,$UTypeError)=$x895;$x896=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x897=$x896($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x897->class)&&$x897->class===\'Error\'&&!isset($x897->properties[\'file\'])&&!isset($x897->properties[\'line\'])&&!isset($x897->properties[\'column\'])){$x897->properties[\'file\']=\'<image>/04_array.js\';$x897->properties[\'line\']=263;$x897->properties[\'column\']=11;$x897->attributes[\'file\']=$x897->attributes[\'line\']=$x897->attributes[\'column\']=0;}throw new JSException($x897,263,11,\'<image>/04_array.js\');}$leThis=JS::toObject($leThis,$global);unset($x898,$W898,$S898,$U898);$x899=_339fc8fcf8563d9777a12bd15b91ae1b_3($global,$scope,$leThis,JS::toString($x894,$global),263,11,\'<image>/04_array.js\');$x898=&$x899[0];list(,$W898,$S898,$U898)=$x899;if($U898&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x894]=$x898;$x898=&$leThis->properties[$x894];$leThis->attributes[$x894]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U898=FALSE;$W898=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x901=$leThis->properties[\'length\'];}else{$x901=0;}}if(isset($S898)){$x902=$S898->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',263,11);$x903=$x902($global,$leThis,$S898,array($x892),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x900=$x903;}else{if(!$U898){$x900=$x892;if($W898){$x898=$x892;}}else{$x900=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int($_i)&&$_i>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=$_i+1;}else if($x894===\'length\'&&is_int($x892)&&$x901>$x892){for($i=$x892;$i<$x901;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}}unset($x904,$W904,$S904,$U904);$x905=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),266,13,\'<image>/04_array.js\');$x904=&$x905[0];list(,$W904,$S904,$U904)=$x905;return$x904;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x920 =& $scope->properties['arguments'];
$x920->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x920->properties[$i] = $args[$i];
$x920->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x921 = $_from;
if (!JS::toBoolean($x921, $global)) {
$x921 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x921;
$x922 = JS::toPrimitive($_from, $global);
$x923 = JS::toPrimitive(0, $global);
$x924 = (is_string($x922) && is_string($x923) ? strcmp($x922, $x923) < 0 : (!is_nan($x925 = JS::toNumber($x922, $global)) && !is_nan($x926 = JS::toNumber($x923, $global)) && $x925 < $x926));
if (JS::toBoolean($x924, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x927 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Math', $global), 273, 10, '<image>/04_array.js');
$_Math =& $x927[0]; list(,$WMath,$SMath,$UMath) = $x927;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x928 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 273, 10, '<image>/04_array.js');
$_ReferenceError =& $x928[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x928;
$x929 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 10);
$x930 = $x929($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x930->class) && $x930->class === 'Error' && !isset($x930->properties['file']) && !isset($x930->properties['line']) && !isset($x930->properties['column'])) {$x930->properties['file'] = '<image>/04_array.js';$x930->properties['line'] = 273;$x930->properties['column'] = 10;$x930->attributes['file'] = $x930->attributes['line'] = $x930->attributes['column'] = 0; }
throw new JSException($x930, 273, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x932 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 273, 18, '<image>/04_array.js');
$_TypeError =& $x932[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x932;
$x933 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x934 = $x933($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x934->class) && $x934->class === 'Error' && !isset($x934->properties['file']) && !isset($x934->properties['line']) && !isset($x934->properties['column'])) {$x934->properties['file'] = '<image>/04_array.js';$x934->properties['line'] = 273;$x934->properties['column'] = 18;$x934->attributes['file'] = $x934->attributes['line'] = $x934->attributes['column'] = 0; }
throw new JSException($x934, 273, 18, '<image>/04_array.js');
}
$x931 = JS::toObject($_Math, $global);
unset($x935, $W935, $S935, $U935);
$x936 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x931, JS::toString('max', $global), 273, 18, '<image>/04_array.js');
$x935 =& $x936[0]; list(,$W935,$S935,$U935) = $x936;
unset($x939, $W939, $S939, $U939);
$x940 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 273, 23, '<image>/04_array.js');
$x939 =& $x940[0]; list(,$W939,$S939,$U939) = $x940;
$x937 = JS::toPrimitive($x939, $global);
$x938 = JS::toPrimitive($_from, $global);
if (!(is_object($x935) && isset($x935->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x943 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 273, 18, '<image>/04_array.js');
$_TypeError =& $x943[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x943;
$x944 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x945 = $x944($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x945->class) && $x945->class === 'Error' && !isset($x945->properties['file']) && !isset($x945->properties['line']) && !isset($x945->properties['column'])) {$x945->properties['file'] = '<image>/04_array.js';$x945->properties['line'] = 273;$x945->properties['column'] = 18;$x945->attributes['file'] = $x945->attributes['line'] = $x945->attributes['column'] = 0; }
throw new JSException($x945, 273, 18, '<image>/04_array.js');
}
$x941 = $x935->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 273, 18);
$x942 = $x941($global, $x931, $x935, array((is_string($x937) || is_string($x938) ? JS::toString($x937, $global) . JS::toString($x938, $global) : JS::toNumber($x937, $global) + JS::toNumber($x938, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x942;;
};
for ($x946 = 0;; ++$x946) {
if ($x946 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $_from;
unset($x947, $W947, $S947, $U947);
$x948 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 276, 29, '<image>/04_array.js');
$x947 =& $x948[0]; list(,$W947,$S947,$U947) = $x948;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x947;
}
if ($x946 !== 0) {
$x949 = ++$_i;
}
$x950 = JS::toPrimitive($_i, $global);
$x951 = JS::toPrimitive($_l, $global);
$x952 = (is_string($x950) && is_string($x951) ? strcmp($x950, $x951) < 0 : (!is_nan($x953 = JS::toNumber($x950, $global)) && !is_nan($x954 = JS::toNumber($x951, $global)) && $x953 < $x954));
if (!JS::toBoolean($x952, $global)) { break; }

unset($x956, $W956, $S956, $U956);
$x957 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 277, 11, '<image>/04_array.js');
$x956 =& $x957[0]; list(,$W956,$S956,$U956) = $x957;
$x955 = (((gettype($x956) === gettype($_search) && $x956 === $_search))|| (((is_float($x956) || is_int($x956)) && (is_float($_search) || is_int($_search))) && $x956 == $_search));
if (JS::toBoolean($x955, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x920=&$scope->properties[\'arguments\'];$x920->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x920->properties[$i]=$args[$i];$x920->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x921=$_from;if(!JS::toBoolean($x921,$global)){$x921=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x921;$x922=JS::toPrimitive($_from,$global);$x923=JS::toPrimitive(0,$global);$x924=(is_string($x922)&&is_string($x923)?strcmp($x922,$x923)<0:(!is_nan($x925=JS::toNumber($x922,$global))&&!is_nan($x926=JS::toNumber($x923,$global))&&$x925<$x926));if(JS::toBoolean($x924,$global)){unset($_Math,$WMath,$SMath,$UMath);$x927=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Math\',$global),273,10,\'<image>/04_array.js\');$_Math=&$x927[0];list(,$WMath,$SMath,$UMath)=$x927;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x928=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),273,10,\'<image>/04_array.js\');$_ReferenceError=&$x928[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x928;$x929=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,10);$x930=$x929($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x930->class)&&$x930->class===\'Error\'&&!isset($x930->properties[\'file\'])&&!isset($x930->properties[\'line\'])&&!isset($x930->properties[\'column\'])){$x930->properties[\'file\']=\'<image>/04_array.js\';$x930->properties[\'line\']=273;$x930->properties[\'column\']=10;$x930->attributes[\'file\']=$x930->attributes[\'line\']=$x930->attributes[\'column\']=0;}throw new JSException($x930,273,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x932=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,18,\'<image>/04_array.js\');$_TypeError=&$x932[0];list(,$WTypeError,$STypeError,$UTypeError)=$x932;$x933=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x934=$x933($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x934->class)&&$x934->class===\'Error\'&&!isset($x934->properties[\'file\'])&&!isset($x934->properties[\'line\'])&&!isset($x934->properties[\'column\'])){$x934->properties[\'file\']=\'<image>/04_array.js\';$x934->properties[\'line\']=273;$x934->properties[\'column\']=18;$x934->attributes[\'file\']=$x934->attributes[\'line\']=$x934->attributes[\'column\']=0;}throw new JSException($x934,273,18,\'<image>/04_array.js\');}$x931=JS::toObject($_Math,$global);unset($x935,$W935,$S935,$U935);$x936=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x931,JS::toString(\'max\',$global),273,18,\'<image>/04_array.js\');$x935=&$x936[0];list(,$W935,$S935,$U935)=$x936;unset($x939,$W939,$S939,$U939);$x940=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),273,23,\'<image>/04_array.js\');$x939=&$x940[0];list(,$W939,$S939,$U939)=$x940;$x937=JS::toPrimitive($x939,$global);$x938=JS::toPrimitive($_from,$global);if(!(is_object($x935)&&isset($x935->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x943=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,18,\'<image>/04_array.js\');$_TypeError=&$x943[0];list(,$WTypeError,$STypeError,$UTypeError)=$x943;$x944=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x945=$x944($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x945->class)&&$x945->class===\'Error\'&&!isset($x945->properties[\'file\'])&&!isset($x945->properties[\'line\'])&&!isset($x945->properties[\'column\'])){$x945->properties[\'file\']=\'<image>/04_array.js\';$x945->properties[\'line\']=273;$x945->properties[\'column\']=18;$x945->attributes[\'file\']=$x945->attributes[\'line\']=$x945->attributes[\'column\']=0;}throw new JSException($x945,273,18,\'<image>/04_array.js\');}$x941=$x935->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',273,18);$x942=$x941($global,$x931,$x935,array((is_string($x937)||is_string($x938)?JS::toString($x937,$global).JS::toString($x938,$global):JS::toNumber($x937,$global)+JS::toNumber($x938,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x942;}for($x946=0;;++$x946){if($x946===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$_from;unset($x947,$W947,$S947,$U947);$x948=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),276,29,\'<image>/04_array.js\');$x947=&$x948[0];list(,$W947,$S947,$U947)=$x948;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x947;}if($x946!==0){$x949=++$_i;}$x950=JS::toPrimitive($_i,$global);$x951=JS::toPrimitive($_l,$global);$x952=(is_string($x950)&&is_string($x951)?strcmp($x950,$x951)<0:(!is_nan($x953=JS::toNumber($x950,$global))&&!is_nan($x954=JS::toNumber($x951,$global))&&$x953<$x954));if(!JS::toBoolean($x952,$global)){break;}unset($x956,$W956,$S956,$U956);$x957=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),277,11,\'<image>/04_array.js\');$x956=&$x957[0];list(,$W956,$S956,$U956)=$x957;$x955=(((gettype($x956)===gettype($_search)&&$x956===$_search))||(((is_float($x956)||is_int($x956))&&(is_float($_search)||is_int($_search)))&&$x956==$_search));if(JS::toBoolean($x955,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x972 =& $scope->properties['arguments'];
$x972->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x972->properties[$i] = $args[$i];
$x972->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['from'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_from =& $scope->properties['from'];
$Ufrom = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x973 = $_from;
if (!JS::toBoolean($x973, $global)) {
$x973 = 0; }
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x973;
$x974 = JS::toPrimitive($_from, $global);
$x975 = JS::toPrimitive(0, $global);
$x976 = (is_string($x974) && is_string($x975) ? strcmp($x974, $x975) < 0 : (!is_nan($x977 = JS::toNumber($x974, $global)) && !is_nan($x978 = JS::toNumber($x975, $global)) && $x977 < $x978));
if (JS::toBoolean($x976, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x979 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Math', $global), 289, 10, '<image>/04_array.js');
$_Math =& $x979[0]; list(,$WMath,$SMath,$UMath) = $x979;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x980 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 289, 10, '<image>/04_array.js');
$_ReferenceError =& $x980[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x980;
$x981 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 10);
$x982 = $x981($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x982->class) && $x982->class === 'Error' && !isset($x982->properties['file']) && !isset($x982->properties['line']) && !isset($x982->properties['column'])) {$x982->properties['file'] = '<image>/04_array.js';$x982->properties['line'] = 289;$x982->properties['column'] = 10;$x982->attributes['file'] = $x982->attributes['line'] = $x982->attributes['column'] = 0; }
throw new JSException($x982, 289, 10, '<image>/04_array.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x984 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 289, 18, '<image>/04_array.js');
$_TypeError =& $x984[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x984;
$x985 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x986 = $x985($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x986->class) && $x986->class === 'Error' && !isset($x986->properties['file']) && !isset($x986->properties['line']) && !isset($x986->properties['column'])) {$x986->properties['file'] = '<image>/04_array.js';$x986->properties['line'] = 289;$x986->properties['column'] = 18;$x986->attributes['file'] = $x986->attributes['line'] = $x986->attributes['column'] = 0; }
throw new JSException($x986, 289, 18, '<image>/04_array.js');
}
$x983 = JS::toObject($_Math, $global);
unset($x987, $W987, $S987, $U987);
$x988 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x983, JS::toString('max', $global), 289, 18, '<image>/04_array.js');
$x987 =& $x988[0]; list(,$W987,$S987,$U987) = $x988;
unset($x991, $W991, $S991, $U991);
$x992 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 289, 23, '<image>/04_array.js');
$x991 =& $x992[0]; list(,$W991,$S991,$U991) = $x992;
$x989 = JS::toPrimitive($x991, $global);
$x990 = JS::toPrimitive($_from, $global);
if (!(is_object($x987) && isset($x987->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x995 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 289, 18, '<image>/04_array.js');
$_TypeError =& $x995[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x995;
$x996 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x997 = $x996($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x997->class) && $x997->class === 'Error' && !isset($x997->properties['file']) && !isset($x997->properties['line']) && !isset($x997->properties['column'])) {$x997->properties['file'] = '<image>/04_array.js';$x997->properties['line'] = 289;$x997->properties['column'] = 18;$x997->attributes['file'] = $x997->attributes['line'] = $x997->attributes['column'] = 0; }
throw new JSException($x997, 289, 18, '<image>/04_array.js');
}
$x993 = $x987->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 289, 18);
$x994 = $x993($global, $x983, $x987, array((is_string($x989) || is_string($x990) ? JS::toString($x989, $global) . JS::toString($x990, $global) : JS::toNumber($x989, $global) + JS::toNumber($x990, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ufrom) {$global->properties['from'] = $_from; $_from =& $global->properties['from']; }
$_from = $x994;;
};
unset($x1002, $W1002, $S1002, $U1002);
$x1003 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 292, 10, '<image>/04_array.js');
$x1002 =& $x1003[0]; list(,$W1002,$S1002,$U1002) = $x1003;
$x999 = JS::toPrimitive($x1002, $global);
$x1000 = JS::toPrimitive(1, $global);
$x1001 = (is_string($x999) && is_string($x1000) ? strcmp($x999, $x1000) < 0 : (!is_nan($x1004 = JS::toNumber($x999, $global)) && !is_nan($x1005 = JS::toNumber($x1000, $global)) && $x1004 < $x1005));
$x998 = $x1001;
if (!JS::toBoolean($x998, $global)) {
unset($x1009, $W1009, $S1009, $U1009);
$x1010 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 292, 37, '<image>/04_array.js');
$x1009 =& $x1010[0]; list(,$W1009,$S1009,$U1009) = $x1010;
$x1006 = JS::toPrimitive($_from, $global);
$x1007 = JS::toPrimitive($x1009, $global);
$x1008 = !(is_string($x1006) && is_string($x1007) ? strcmp($x1006, $x1007) < 0 : (!is_nan($x1011 = JS::toNumber($x1006, $global)) && !is_nan($x1012 = JS::toNumber($x1007, $global)) && $x1011 < $x1012));
$x998 = $x1008; }
if (JS::toBoolean($x998, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
for ($x1013 = 0;; ++$x1013) {
if ($x1013 === 0) {
unset($x1014, $W1014, $S1014, $U1014);
$x1015 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 296, 19, '<image>/04_array.js');
$x1014 =& $x1015[0]; list(,$W1014,$S1014,$U1014) = $x1015;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = (JS::toNumber($x1014, $global) - JS::toNumber(1, $global));
}
if ($x1013 !== 0) {
$x1016 = --$_i;
}
$x1017 = JS::toPrimitive($_i, $global);
$x1018 = JS::toPrimitive($_from, $global);
$x1019 = !(is_string($x1017) && is_string($x1018) ? strcmp($x1017, $x1018) < 0 : (!is_nan($x1020 = JS::toNumber($x1017, $global)) && !is_nan($x1021 = JS::toNumber($x1018, $global)) && $x1020 < $x1021));
if (!JS::toBoolean($x1019, $global)) { break; }

unset($x1025, $W1025, $S1025, $U1025);
$x1026 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 297, 11, '<image>/04_array.js');
$x1025 =& $x1026[0]; list(,$W1025,$S1025,$U1025) = $x1026;
$x1023 = $x1025;
$x1024 = $_search;
if (gettype($x1023) === gettype($x1024)) { $x1022 = $x1023===$x1024; }
else if ($x1023 === JS::$undefined && $x1024 === NULL || $x1023 === NULL && $x1024 === JS::$undefined) { $x1022 = TRUE; }
else if ($x1023 === NULL || $x1024 === NULL) { $x1022 = FALSE; }
else { $x1023 = JS::toPrimitive($x1023, $global); $x1024 = JS::toPrimitive($x1024, $global); 
if (is_bool($x1023)) { $x1023 = (int) $x1023; }
if (is_bool($x1024)) { $x1024 = (int) $x1024; }
if (is_numeric($x1023) || is_numeric($x1024)) { $x1023 = JS::toNumber($x1023, $global); $x1024 = JS::toNumber($x1024, $global); }
$x1022 = $x1023===$x1024;}
if (JS::toBoolean($x1022, $global)) {

return $_i;;
};
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x972=&$scope->properties[\'arguments\'];$x972->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x972->properties[$i]=$args[$i];$x972->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'from\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$global->scope[++$global->scope_sp]=$scope;$x973=$_from;if(!JS::toBoolean($x973,$global)){$x973=0;}if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x973;$x974=JS::toPrimitive($_from,$global);$x975=JS::toPrimitive(0,$global);$x976=(is_string($x974)&&is_string($x975)?strcmp($x974,$x975)<0:(!is_nan($x977=JS::toNumber($x974,$global))&&!is_nan($x978=JS::toNumber($x975,$global))&&$x977<$x978));if(JS::toBoolean($x976,$global)){unset($_Math,$WMath,$SMath,$UMath);$x979=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'Math\',$global),289,10,\'<image>/04_array.js\');$_Math=&$x979[0];list(,$WMath,$SMath,$UMath)=$x979;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x980=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),289,10,\'<image>/04_array.js\');$_ReferenceError=&$x980[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x980;$x981=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,10);$x982=$x981($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x982->class)&&$x982->class===\'Error\'&&!isset($x982->properties[\'file\'])&&!isset($x982->properties[\'line\'])&&!isset($x982->properties[\'column\'])){$x982->properties[\'file\']=\'<image>/04_array.js\';$x982->properties[\'line\']=289;$x982->properties[\'column\']=10;$x982->attributes[\'file\']=$x982->attributes[\'line\']=$x982->attributes[\'column\']=0;}throw new JSException($x982,289,10,\'<image>/04_array.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x984=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),289,18,\'<image>/04_array.js\');$_TypeError=&$x984[0];list(,$WTypeError,$STypeError,$UTypeError)=$x984;$x985=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x986=$x985($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x986->class)&&$x986->class===\'Error\'&&!isset($x986->properties[\'file\'])&&!isset($x986->properties[\'line\'])&&!isset($x986->properties[\'column\'])){$x986->properties[\'file\']=\'<image>/04_array.js\';$x986->properties[\'line\']=289;$x986->properties[\'column\']=18;$x986->attributes[\'file\']=$x986->attributes[\'line\']=$x986->attributes[\'column\']=0;}throw new JSException($x986,289,18,\'<image>/04_array.js\');}$x983=JS::toObject($_Math,$global);unset($x987,$W987,$S987,$U987);$x988=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x983,JS::toString(\'max\',$global),289,18,\'<image>/04_array.js\');$x987=&$x988[0];list(,$W987,$S987,$U987)=$x988;unset($x991,$W991,$S991,$U991);$x992=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),289,23,\'<image>/04_array.js\');$x991=&$x992[0];list(,$W991,$S991,$U991)=$x992;$x989=JS::toPrimitive($x991,$global);$x990=JS::toPrimitive($_from,$global);if(!(is_object($x987)&&isset($x987->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x995=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),289,18,\'<image>/04_array.js\');$_TypeError=&$x995[0];list(,$WTypeError,$STypeError,$UTypeError)=$x995;$x996=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x997=$x996($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x997->class)&&$x997->class===\'Error\'&&!isset($x997->properties[\'file\'])&&!isset($x997->properties[\'line\'])&&!isset($x997->properties[\'column\'])){$x997->properties[\'file\']=\'<image>/04_array.js\';$x997->properties[\'line\']=289;$x997->properties[\'column\']=18;$x997->attributes[\'file\']=$x997->attributes[\'line\']=$x997->attributes[\'column\']=0;}throw new JSException($x997,289,18,\'<image>/04_array.js\');}$x993=$x987->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',289,18);$x994=$x993($global,$x983,$x987,array((is_string($x989)||is_string($x990)?JS::toString($x989,$global).JS::toString($x990,$global):JS::toNumber($x989,$global)+JS::toNumber($x990,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ufrom){$global->properties[\'from\']=$_from;$_from=&$global->properties[\'from\'];}$_from=$x994;}unset($x1002,$W1002,$S1002,$U1002);$x1003=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),292,10,\'<image>/04_array.js\');$x1002=&$x1003[0];list(,$W1002,$S1002,$U1002)=$x1003;$x999=JS::toPrimitive($x1002,$global);$x1000=JS::toPrimitive(1,$global);$x1001=(is_string($x999)&&is_string($x1000)?strcmp($x999,$x1000)<0:(!is_nan($x1004=JS::toNumber($x999,$global))&&!is_nan($x1005=JS::toNumber($x1000,$global))&&$x1004<$x1005));$x998=$x1001;if(!JS::toBoolean($x998,$global)){unset($x1009,$W1009,$S1009,$U1009);$x1010=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),292,37,\'<image>/04_array.js\');$x1009=&$x1010[0];list(,$W1009,$S1009,$U1009)=$x1010;$x1006=JS::toPrimitive($_from,$global);$x1007=JS::toPrimitive($x1009,$global);$x1008=!(is_string($x1006)&&is_string($x1007)?strcmp($x1006,$x1007)<0:(!is_nan($x1011=JS::toNumber($x1006,$global))&&!is_nan($x1012=JS::toNumber($x1007,$global))&&$x1011<$x1012));$x998=$x1008;}if(JS::toBoolean($x998,$global)){return(-1.0*JS::toNumber(1,$global));}for($x1013=0;;++$x1013){if($x1013===0){unset($x1014,$W1014,$S1014,$U1014);$x1015=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),296,19,\'<image>/04_array.js\');$x1014=&$x1015[0];list(,$W1014,$S1014,$U1014)=$x1015;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=(JS::toNumber($x1014,$global)-JS::toNumber(1,$global));}if($x1013!==0){$x1016=--$_i;}$x1017=JS::toPrimitive($_i,$global);$x1018=JS::toPrimitive($_from,$global);$x1019=!(is_string($x1017)&&is_string($x1018)?strcmp($x1017,$x1018)<0:(!is_nan($x1020=JS::toNumber($x1017,$global))&&!is_nan($x1021=JS::toNumber($x1018,$global))&&$x1020<$x1021));if(!JS::toBoolean($x1019,$global)){break;}unset($x1025,$W1025,$S1025,$U1025);$x1026=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),297,11,\'<image>/04_array.js\');$x1025=&$x1026[0];list(,$W1025,$S1025,$U1025)=$x1026;$x1023=$x1025;$x1024=$_search;if(gettype($x1023)===gettype($x1024)){$x1022=$x1023===$x1024;}else if($x1023===JS::$undefined&&$x1024===NULL||$x1023===NULL&&$x1024===JS::$undefined){$x1022=TRUE;}else if($x1023===NULL||$x1024===NULL){$x1022=FALSE;}else{$x1023=JS::toPrimitive($x1023,$global);$x1024=JS::toPrimitive($x1024,$global);if(is_bool($x1023)){$x1023=(int)$x1023;}if(is_bool($x1024)){$x1024=(int)$x1024;}if(is_numeric($x1023)||is_numeric($x1024)){$x1023=JS::toNumber($x1023,$global);$x1024=JS::toNumber($x1024,$global);}$x1022=$x1023===$x1024;}if(JS::toBoolean($x1022,$global)){return$_i;}}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1041 =& $scope->properties['arguments'];
$x1041->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1041->properties[$i] = $args[$i];
$x1041->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1045 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 308, 6, '<image>/04_array.js');
$_arguments =& $x1045[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1045;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1046 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 308, 6, '<image>/04_array.js');
$_ReferenceError =& $x1046[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1046;
$x1047 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 308, 6);
$x1048 = $x1047($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1048->class) && $x1048->class === 'Error' && !isset($x1048->properties['file']) && !isset($x1048->properties['line']) && !isset($x1048->properties['column'])) {$x1048->properties['file'] = '<image>/04_array.js';$x1048->properties['line'] = 308;$x1048->properties['column'] = 6;$x1048->attributes['file'] = $x1048->attributes['line'] = $x1048->attributes['column'] = 0; }
throw new JSException($x1048, 308, 6, '<image>/04_array.js');
}
unset($x1049, $W1049, $S1049, $U1049);
$x1050 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 308, 15, '<image>/04_array.js');
$x1049 =& $x1050[0]; list(,$W1049,$S1049,$U1049) = $x1050;
$x1042 = JS::toPrimitive($x1049, $global);
$x1043 = JS::toPrimitive(1, $global);
$x1044 = (is_string($x1043) && is_string($x1042) ? strcmp($x1043, $x1042) < 0 : (!is_nan($x1051 = JS::toNumber($x1043, $global)) && !is_nan($x1052 = JS::toNumber($x1042, $global)) && $x1051 < $x1052));
if (JS::toBoolean($x1044, $global)) {
unset($x1053, $W1053, $S1053, $U1053);
$x1054 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 309, 22, '<image>/04_array.js');
$x1053 =& $x1054[0]; list(,$W1053,$S1053,$U1053) = $x1054;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1053;;
};
for ($x1055 = 0;; ++$x1055) {
if ($x1055 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1056, $W1056, $S1056, $U1056);
$x1057 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 312, 26, '<image>/04_array.js');
$x1056 =& $x1057[0]; list(,$W1056,$S1056,$U1056) = $x1057;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1056;
}
if ($x1055 !== 0) {
$x1058 = ++$_i;
}
$x1059 = JS::toPrimitive($_i, $global);
$x1060 = JS::toPrimitive($_l, $global);
$x1061 = (is_string($x1059) && is_string($x1060) ? strcmp($x1059, $x1060) < 0 : (!is_nan($x1062 = JS::toNumber($x1059, $global)) && !is_nan($x1063 = JS::toNumber($x1060, $global)) && $x1062 < $x1063));
if (!JS::toBoolean($x1061, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1065 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 313, 23, '<image>/04_array.js');
$_TypeError =& $x1065[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1065;
$x1066 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1067 = $x1066($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1067->class) && $x1067->class === 'Error' && !isset($x1067->properties['file']) && !isset($x1067->properties['line']) && !isset($x1067->properties['column'])) {$x1067->properties['file'] = '<image>/04_array.js';$x1067->properties['line'] = 313;$x1067->properties['column'] = 23;$x1067->attributes['file'] = $x1067->attributes['line'] = $x1067->attributes['column'] = 0; }
throw new JSException($x1067, 313, 23, '<image>/04_array.js');
}
$x1064 = JS::toObject($_callbackFn, $global);
unset($x1068, $W1068, $S1068, $U1068);
$x1069 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1064, JS::toString('call', $global), 313, 23, '<image>/04_array.js');
$x1068 =& $x1069[0]; list(,$W1068,$S1068,$U1068) = $x1069;
unset($x1070, $W1070, $S1070, $U1070);
$x1071 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 313, 37, '<image>/04_array.js');
$x1070 =& $x1071[0]; list(,$W1070,$S1070,$U1070) = $x1071;
if (!(is_object($x1068) && isset($x1068->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1074 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 313, 23, '<image>/04_array.js');
$_TypeError =& $x1074[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1074;
$x1075 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1076 = $x1075($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1076->class) && $x1076->class === 'Error' && !isset($x1076->properties['file']) && !isset($x1076->properties['line']) && !isset($x1076->properties['column'])) {$x1076->properties['file'] = '<image>/04_array.js';$x1076->properties['line'] = 313;$x1076->properties['column'] = 23;$x1076->attributes['file'] = $x1076->attributes['line'] = $x1076->attributes['column'] = 0; }
throw new JSException($x1076, 313, 23, '<image>/04_array.js');
}
$x1072 = $x1068->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 313, 23);
$x1073 = $x1072($global, $x1064, $x1068, array($_thisArg, $x1070, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean((!JS::toBoolean($x1073, $global)), $global)) {

return false;;
};
};
return true;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1041=&$scope->properties[\'arguments\'];$x1041->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1041->properties[$i]=$args[$i];$x1041->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1045=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),308,6,\'<image>/04_array.js\');$_arguments=&$x1045[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1045;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1046=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),308,6,\'<image>/04_array.js\');$_ReferenceError=&$x1046[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1046;$x1047=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',308,6);$x1048=$x1047($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1048->class)&&$x1048->class===\'Error\'&&!isset($x1048->properties[\'file\'])&&!isset($x1048->properties[\'line\'])&&!isset($x1048->properties[\'column\'])){$x1048->properties[\'file\']=\'<image>/04_array.js\';$x1048->properties[\'line\']=308;$x1048->properties[\'column\']=6;$x1048->attributes[\'file\']=$x1048->attributes[\'line\']=$x1048->attributes[\'column\']=0;}throw new JSException($x1048,308,6,\'<image>/04_array.js\');}unset($x1049,$W1049,$S1049,$U1049);$x1050=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),308,15,\'<image>/04_array.js\');$x1049=&$x1050[0];list(,$W1049,$S1049,$U1049)=$x1050;$x1042=JS::toPrimitive($x1049,$global);$x1043=JS::toPrimitive(1,$global);$x1044=(is_string($x1043)&&is_string($x1042)?strcmp($x1043,$x1042)<0:(!is_nan($x1051=JS::toNumber($x1043,$global))&&!is_nan($x1052=JS::toNumber($x1042,$global))&&$x1051<$x1052));if(JS::toBoolean($x1044,$global)){unset($x1053,$W1053,$S1053,$U1053);$x1054=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),309,22,\'<image>/04_array.js\');$x1053=&$x1054[0];list(,$W1053,$S1053,$U1053)=$x1054;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1053;}for($x1055=0;;++$x1055){if($x1055===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1056,$W1056,$S1056,$U1056);$x1057=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),312,26,\'<image>/04_array.js\');$x1056=&$x1057[0];list(,$W1056,$S1056,$U1056)=$x1057;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1056;}if($x1055!==0){$x1058=++$_i;}$x1059=JS::toPrimitive($_i,$global);$x1060=JS::toPrimitive($_l,$global);$x1061=(is_string($x1059)&&is_string($x1060)?strcmp($x1059,$x1060)<0:(!is_nan($x1062=JS::toNumber($x1059,$global))&&!is_nan($x1063=JS::toNumber($x1060,$global))&&$x1062<$x1063));if(!JS::toBoolean($x1061,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1065=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),313,23,\'<image>/04_array.js\');$_TypeError=&$x1065[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1065;$x1066=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1067=$x1066($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1067->class)&&$x1067->class===\'Error\'&&!isset($x1067->properties[\'file\'])&&!isset($x1067->properties[\'line\'])&&!isset($x1067->properties[\'column\'])){$x1067->properties[\'file\']=\'<image>/04_array.js\';$x1067->properties[\'line\']=313;$x1067->properties[\'column\']=23;$x1067->attributes[\'file\']=$x1067->attributes[\'line\']=$x1067->attributes[\'column\']=0;}throw new JSException($x1067,313,23,\'<image>/04_array.js\');}$x1064=JS::toObject($_callbackFn,$global);unset($x1068,$W1068,$S1068,$U1068);$x1069=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1064,JS::toString(\'call\',$global),313,23,\'<image>/04_array.js\');$x1068=&$x1069[0];list(,$W1068,$S1068,$U1068)=$x1069;unset($x1070,$W1070,$S1070,$U1070);$x1071=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),313,37,\'<image>/04_array.js\');$x1070=&$x1071[0];list(,$W1070,$S1070,$U1070)=$x1071;if(!(is_object($x1068)&&isset($x1068->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1074=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),313,23,\'<image>/04_array.js\');$_TypeError=&$x1074[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1074;$x1075=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1076=$x1075($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1076->class)&&$x1076->class===\'Error\'&&!isset($x1076->properties[\'file\'])&&!isset($x1076->properties[\'line\'])&&!isset($x1076->properties[\'column\'])){$x1076->properties[\'file\']=\'<image>/04_array.js\';$x1076->properties[\'line\']=313;$x1076->properties[\'column\']=23;$x1076->attributes[\'file\']=$x1076->attributes[\'line\']=$x1076->attributes[\'column\']=0;}throw new JSException($x1076,313,23,\'<image>/04_array.js\');}$x1072=$x1068->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',313,23);$x1073=$x1072($global,$x1064,$x1068,array($_thisArg,$x1070,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean((!JS::toBoolean($x1073,$global)),$global)){return false;}}return true;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1091 =& $scope->properties['arguments'];
$x1091->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1091->properties[$i] = $args[$i];
$x1091->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1095 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 324, 6, '<image>/04_array.js');
$_arguments =& $x1095[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1095;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1096 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 324, 6, '<image>/04_array.js');
$_ReferenceError =& $x1096[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1096;
$x1097 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 324, 6);
$x1098 = $x1097($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1098->class) && $x1098->class === 'Error' && !isset($x1098->properties['file']) && !isset($x1098->properties['line']) && !isset($x1098->properties['column'])) {$x1098->properties['file'] = '<image>/04_array.js';$x1098->properties['line'] = 324;$x1098->properties['column'] = 6;$x1098->attributes['file'] = $x1098->attributes['line'] = $x1098->attributes['column'] = 0; }
throw new JSException($x1098, 324, 6, '<image>/04_array.js');
}
unset($x1099, $W1099, $S1099, $U1099);
$x1100 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 324, 15, '<image>/04_array.js');
$x1099 =& $x1100[0]; list(,$W1099,$S1099,$U1099) = $x1100;
$x1092 = JS::toPrimitive($x1099, $global);
$x1093 = JS::toPrimitive(1, $global);
$x1094 = (is_string($x1093) && is_string($x1092) ? strcmp($x1093, $x1092) < 0 : (!is_nan($x1101 = JS::toNumber($x1093, $global)) && !is_nan($x1102 = JS::toNumber($x1092, $global)) && $x1101 < $x1102));
if (JS::toBoolean($x1094, $global)) {
unset($x1103, $W1103, $S1103, $U1103);
$x1104 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 325, 22, '<image>/04_array.js');
$x1103 =& $x1104[0]; list(,$W1103,$S1103,$U1103) = $x1104;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1103;;
};
for ($x1105 = 0;; ++$x1105) {
if ($x1105 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1106, $W1106, $S1106, $U1106);
$x1107 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 328, 26, '<image>/04_array.js');
$x1106 =& $x1107[0]; list(,$W1106,$S1106,$U1106) = $x1107;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1106;
}
if ($x1105 !== 0) {
$x1108 = ++$_i;
}
$x1109 = JS::toPrimitive($_i, $global);
$x1110 = JS::toPrimitive($_l, $global);
$x1111 = (is_string($x1109) && is_string($x1110) ? strcmp($x1109, $x1110) < 0 : (!is_nan($x1112 = JS::toNumber($x1109, $global)) && !is_nan($x1113 = JS::toNumber($x1110, $global)) && $x1112 < $x1113));
if (!JS::toBoolean($x1111, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1115 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 329, 22, '<image>/04_array.js');
$_TypeError =& $x1115[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1115;
$x1116 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1117 = $x1116($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1117->class) && $x1117->class === 'Error' && !isset($x1117->properties['file']) && !isset($x1117->properties['line']) && !isset($x1117->properties['column'])) {$x1117->properties['file'] = '<image>/04_array.js';$x1117->properties['line'] = 329;$x1117->properties['column'] = 22;$x1117->attributes['file'] = $x1117->attributes['line'] = $x1117->attributes['column'] = 0; }
throw new JSException($x1117, 329, 22, '<image>/04_array.js');
}
$x1114 = JS::toObject($_callbackFn, $global);
unset($x1118, $W1118, $S1118, $U1118);
$x1119 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1114, JS::toString('call', $global), 329, 22, '<image>/04_array.js');
$x1118 =& $x1119[0]; list(,$W1118,$S1118,$U1118) = $x1119;
unset($x1120, $W1120, $S1120, $U1120);
$x1121 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 329, 36, '<image>/04_array.js');
$x1120 =& $x1121[0]; list(,$W1120,$S1120,$U1120) = $x1121;
if (!(is_object($x1118) && isset($x1118->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1124 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 329, 22, '<image>/04_array.js');
$_TypeError =& $x1124[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1124;
$x1125 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1126 = $x1125($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1126->class) && $x1126->class === 'Error' && !isset($x1126->properties['file']) && !isset($x1126->properties['line']) && !isset($x1126->properties['column'])) {$x1126->properties['file'] = '<image>/04_array.js';$x1126->properties['line'] = 329;$x1126->properties['column'] = 22;$x1126->attributes['file'] = $x1126->attributes['line'] = $x1126->attributes['column'] = 0; }
throw new JSException($x1126, 329, 22, '<image>/04_array.js');
}
$x1122 = $x1118->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 329, 22);
$x1123 = $x1122($global, $x1114, $x1118, array($_thisArg, $x1120, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1123, $global)) {

return true;;
};
};
return false;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1091=&$scope->properties[\'arguments\'];$x1091->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1091->properties[$i]=$args[$i];$x1091->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1095=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),324,6,\'<image>/04_array.js\');$_arguments=&$x1095[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1095;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1096=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),324,6,\'<image>/04_array.js\');$_ReferenceError=&$x1096[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1096;$x1097=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',324,6);$x1098=$x1097($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1098->class)&&$x1098->class===\'Error\'&&!isset($x1098->properties[\'file\'])&&!isset($x1098->properties[\'line\'])&&!isset($x1098->properties[\'column\'])){$x1098->properties[\'file\']=\'<image>/04_array.js\';$x1098->properties[\'line\']=324;$x1098->properties[\'column\']=6;$x1098->attributes[\'file\']=$x1098->attributes[\'line\']=$x1098->attributes[\'column\']=0;}throw new JSException($x1098,324,6,\'<image>/04_array.js\');}unset($x1099,$W1099,$S1099,$U1099);$x1100=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),324,15,\'<image>/04_array.js\');$x1099=&$x1100[0];list(,$W1099,$S1099,$U1099)=$x1100;$x1092=JS::toPrimitive($x1099,$global);$x1093=JS::toPrimitive(1,$global);$x1094=(is_string($x1093)&&is_string($x1092)?strcmp($x1093,$x1092)<0:(!is_nan($x1101=JS::toNumber($x1093,$global))&&!is_nan($x1102=JS::toNumber($x1092,$global))&&$x1101<$x1102));if(JS::toBoolean($x1094,$global)){unset($x1103,$W1103,$S1103,$U1103);$x1104=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),325,22,\'<image>/04_array.js\');$x1103=&$x1104[0];list(,$W1103,$S1103,$U1103)=$x1104;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1103;}for($x1105=0;;++$x1105){if($x1105===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1106,$W1106,$S1106,$U1106);$x1107=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),328,26,\'<image>/04_array.js\');$x1106=&$x1107[0];list(,$W1106,$S1106,$U1106)=$x1107;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1106;}if($x1105!==0){$x1108=++$_i;}$x1109=JS::toPrimitive($_i,$global);$x1110=JS::toPrimitive($_l,$global);$x1111=(is_string($x1109)&&is_string($x1110)?strcmp($x1109,$x1110)<0:(!is_nan($x1112=JS::toNumber($x1109,$global))&&!is_nan($x1113=JS::toNumber($x1110,$global))&&$x1112<$x1113));if(!JS::toBoolean($x1111,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1115=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),329,22,\'<image>/04_array.js\');$_TypeError=&$x1115[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1115;$x1116=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1117=$x1116($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1117->class)&&$x1117->class===\'Error\'&&!isset($x1117->properties[\'file\'])&&!isset($x1117->properties[\'line\'])&&!isset($x1117->properties[\'column\'])){$x1117->properties[\'file\']=\'<image>/04_array.js\';$x1117->properties[\'line\']=329;$x1117->properties[\'column\']=22;$x1117->attributes[\'file\']=$x1117->attributes[\'line\']=$x1117->attributes[\'column\']=0;}throw new JSException($x1117,329,22,\'<image>/04_array.js\');}$x1114=JS::toObject($_callbackFn,$global);unset($x1118,$W1118,$S1118,$U1118);$x1119=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1114,JS::toString(\'call\',$global),329,22,\'<image>/04_array.js\');$x1118=&$x1119[0];list(,$W1118,$S1118,$U1118)=$x1119;unset($x1120,$W1120,$S1120,$U1120);$x1121=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),329,36,\'<image>/04_array.js\');$x1120=&$x1121[0];list(,$W1120,$S1120,$U1120)=$x1121;if(!(is_object($x1118)&&isset($x1118->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1124=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),329,22,\'<image>/04_array.js\');$_TypeError=&$x1124[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1124;$x1125=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1126=$x1125($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1126->class)&&$x1126->class===\'Error\'&&!isset($x1126->properties[\'file\'])&&!isset($x1126->properties[\'line\'])&&!isset($x1126->properties[\'column\'])){$x1126->properties[\'file\']=\'<image>/04_array.js\';$x1126->properties[\'line\']=329;$x1126->properties[\'column\']=22;$x1126->attributes[\'file\']=$x1126->attributes[\'line\']=$x1126->attributes[\'column\']=0;}throw new JSException($x1126,329,22,\'<image>/04_array.js\');}$x1122=$x1118->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',329,22);$x1123=$x1122($global,$x1114,$x1118,array($_thisArg,$x1120,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1123,$global)){return true;}}return false;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1141 =& $scope->properties['arguments'];
$x1141->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1141->properties[$i] = $args[$i];
$x1141->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1145 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 340, 6, '<image>/04_array.js');
$_arguments =& $x1145[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1145;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1146 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 340, 6, '<image>/04_array.js');
$_ReferenceError =& $x1146[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1146;
$x1147 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 340, 6);
$x1148 = $x1147($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1148->class) && $x1148->class === 'Error' && !isset($x1148->properties['file']) && !isset($x1148->properties['line']) && !isset($x1148->properties['column'])) {$x1148->properties['file'] = '<image>/04_array.js';$x1148->properties['line'] = 340;$x1148->properties['column'] = 6;$x1148->attributes['file'] = $x1148->attributes['line'] = $x1148->attributes['column'] = 0; }
throw new JSException($x1148, 340, 6, '<image>/04_array.js');
}
unset($x1149, $W1149, $S1149, $U1149);
$x1150 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 340, 15, '<image>/04_array.js');
$x1149 =& $x1150[0]; list(,$W1149,$S1149,$U1149) = $x1150;
$x1142 = JS::toPrimitive($x1149, $global);
$x1143 = JS::toPrimitive(1, $global);
$x1144 = (is_string($x1143) && is_string($x1142) ? strcmp($x1143, $x1142) < 0 : (!is_nan($x1151 = JS::toNumber($x1143, $global)) && !is_nan($x1152 = JS::toNumber($x1142, $global)) && $x1151 < $x1152));
if (JS::toBoolean($x1144, $global)) {
unset($x1153, $W1153, $S1153, $U1153);
$x1154 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 341, 22, '<image>/04_array.js');
$x1153 =& $x1154[0]; list(,$W1153,$S1153,$U1153) = $x1154;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1153;;
};
for ($x1155 = 0;; ++$x1155) {
if ($x1155 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1156, $W1156, $S1156, $U1156);
$x1157 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 344, 26, '<image>/04_array.js');
$x1156 =& $x1157[0]; list(,$W1156,$S1156,$U1156) = $x1157;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1156;
}
if ($x1155 !== 0) {
$x1158 = ++$_i;
}
$x1159 = JS::toPrimitive($_i, $global);
$x1160 = JS::toPrimitive($_l, $global);
$x1161 = (is_string($x1159) && is_string($x1160) ? strcmp($x1159, $x1160) < 0 : (!is_nan($x1162 = JS::toNumber($x1159, $global)) && !is_nan($x1163 = JS::toNumber($x1160, $global)) && $x1162 < $x1163));
if (!JS::toBoolean($x1161, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1165 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 345, 18, '<image>/04_array.js');
$_TypeError =& $x1165[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1165;
$x1166 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1167 = $x1166($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1167->class) && $x1167->class === 'Error' && !isset($x1167->properties['file']) && !isset($x1167->properties['line']) && !isset($x1167->properties['column'])) {$x1167->properties['file'] = '<image>/04_array.js';$x1167->properties['line'] = 345;$x1167->properties['column'] = 18;$x1167->attributes['file'] = $x1167->attributes['line'] = $x1167->attributes['column'] = 0; }
throw new JSException($x1167, 345, 18, '<image>/04_array.js');
}
$x1164 = JS::toObject($_callbackFn, $global);
unset($x1168, $W1168, $S1168, $U1168);
$x1169 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1164, JS::toString('call', $global), 345, 18, '<image>/04_array.js');
$x1168 =& $x1169[0]; list(,$W1168,$S1168,$U1168) = $x1169;
unset($x1170, $W1170, $S1170, $U1170);
$x1171 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 345, 32, '<image>/04_array.js');
$x1170 =& $x1171[0]; list(,$W1170,$S1170,$U1170) = $x1171;
if (!(is_object($x1168) && isset($x1168->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1174 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 345, 18, '<image>/04_array.js');
$_TypeError =& $x1174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1174;
$x1175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1176 = $x1175($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1176->class) && $x1176->class === 'Error' && !isset($x1176->properties['file']) && !isset($x1176->properties['line']) && !isset($x1176->properties['column'])) {$x1176->properties['file'] = '<image>/04_array.js';$x1176->properties['line'] = 345;$x1176->properties['column'] = 18;$x1176->attributes['file'] = $x1176->attributes['line'] = $x1176->attributes['column'] = 0; }
throw new JSException($x1176, 345, 18, '<image>/04_array.js');
}
$x1172 = $x1168->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 345, 18);
$x1173 = $x1172($global, $x1164, $x1168, array($_thisArg, $x1170, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1141=&$scope->properties[\'arguments\'];$x1141->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1141->properties[$i]=$args[$i];$x1141->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1145=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),340,6,\'<image>/04_array.js\');$_arguments=&$x1145[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1145;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1146=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),340,6,\'<image>/04_array.js\');$_ReferenceError=&$x1146[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1146;$x1147=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',340,6);$x1148=$x1147($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1148->class)&&$x1148->class===\'Error\'&&!isset($x1148->properties[\'file\'])&&!isset($x1148->properties[\'line\'])&&!isset($x1148->properties[\'column\'])){$x1148->properties[\'file\']=\'<image>/04_array.js\';$x1148->properties[\'line\']=340;$x1148->properties[\'column\']=6;$x1148->attributes[\'file\']=$x1148->attributes[\'line\']=$x1148->attributes[\'column\']=0;}throw new JSException($x1148,340,6,\'<image>/04_array.js\');}unset($x1149,$W1149,$S1149,$U1149);$x1150=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),340,15,\'<image>/04_array.js\');$x1149=&$x1150[0];list(,$W1149,$S1149,$U1149)=$x1150;$x1142=JS::toPrimitive($x1149,$global);$x1143=JS::toPrimitive(1,$global);$x1144=(is_string($x1143)&&is_string($x1142)?strcmp($x1143,$x1142)<0:(!is_nan($x1151=JS::toNumber($x1143,$global))&&!is_nan($x1152=JS::toNumber($x1142,$global))&&$x1151<$x1152));if(JS::toBoolean($x1144,$global)){unset($x1153,$W1153,$S1153,$U1153);$x1154=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),341,22,\'<image>/04_array.js\');$x1153=&$x1154[0];list(,$W1153,$S1153,$U1153)=$x1154;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1153;}for($x1155=0;;++$x1155){if($x1155===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1156,$W1156,$S1156,$U1156);$x1157=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),344,26,\'<image>/04_array.js\');$x1156=&$x1157[0];list(,$W1156,$S1156,$U1156)=$x1157;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1156;}if($x1155!==0){$x1158=++$_i;}$x1159=JS::toPrimitive($_i,$global);$x1160=JS::toPrimitive($_l,$global);$x1161=(is_string($x1159)&&is_string($x1160)?strcmp($x1159,$x1160)<0:(!is_nan($x1162=JS::toNumber($x1159,$global))&&!is_nan($x1163=JS::toNumber($x1160,$global))&&$x1162<$x1163));if(!JS::toBoolean($x1161,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1165=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),345,18,\'<image>/04_array.js\');$_TypeError=&$x1165[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1165;$x1166=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1167=$x1166($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1167->class)&&$x1167->class===\'Error\'&&!isset($x1167->properties[\'file\'])&&!isset($x1167->properties[\'line\'])&&!isset($x1167->properties[\'column\'])){$x1167->properties[\'file\']=\'<image>/04_array.js\';$x1167->properties[\'line\']=345;$x1167->properties[\'column\']=18;$x1167->attributes[\'file\']=$x1167->attributes[\'line\']=$x1167->attributes[\'column\']=0;}throw new JSException($x1167,345,18,\'<image>/04_array.js\');}$x1164=JS::toObject($_callbackFn,$global);unset($x1168,$W1168,$S1168,$U1168);$x1169=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1164,JS::toString(\'call\',$global),345,18,\'<image>/04_array.js\');$x1168=&$x1169[0];list(,$W1168,$S1168,$U1168)=$x1169;unset($x1170,$W1170,$S1170,$U1170);$x1171=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),345,32,\'<image>/04_array.js\');$x1170=&$x1171[0];list(,$W1170,$S1170,$U1170)=$x1171;if(!(is_object($x1168)&&isset($x1168->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1174=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),345,18,\'<image>/04_array.js\');$_TypeError=&$x1174[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1174;$x1175=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1176=$x1175($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1176->class)&&$x1176->class===\'Error\'&&!isset($x1176->properties[\'file\'])&&!isset($x1176->properties[\'line\'])&&!isset($x1176->properties[\'column\'])){$x1176->properties[\'file\']=\'<image>/04_array.js\';$x1176->properties[\'line\']=345;$x1176->properties[\'column\']=18;$x1176->attributes[\'file\']=$x1176->attributes[\'line\']=$x1176->attributes[\'column\']=0;}throw new JSException($x1176,345,18,\'<image>/04_array.js\');}$x1172=$x1168->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',345,18);$x1173=$x1172($global,$x1164,$x1168,array($_thisArg,$x1170,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1191 =& $scope->properties['arguments'];
$x1191->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1191->properties[$i] = $args[$i];
$x1191->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1192 = clone JS::$arrayTemplate;
$x1192->properties['length'] = 0;
$x1192->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1192;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1196 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 352, 6, '<image>/04_array.js');
$_arguments =& $x1196[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1196;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1197 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 352, 6, '<image>/04_array.js');
$_ReferenceError =& $x1197[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1197;
$x1198 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 352, 6);
$x1199 = $x1198($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1199->class) && $x1199->class === 'Error' && !isset($x1199->properties['file']) && !isset($x1199->properties['line']) && !isset($x1199->properties['column'])) {$x1199->properties['file'] = '<image>/04_array.js';$x1199->properties['line'] = 352;$x1199->properties['column'] = 6;$x1199->attributes['file'] = $x1199->attributes['line'] = $x1199->attributes['column'] = 0; }
throw new JSException($x1199, 352, 6, '<image>/04_array.js');
}
unset($x1200, $W1200, $S1200, $U1200);
$x1201 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 352, 15, '<image>/04_array.js');
$x1200 =& $x1201[0]; list(,$W1200,$S1200,$U1200) = $x1201;
$x1193 = JS::toPrimitive($x1200, $global);
$x1194 = JS::toPrimitive(1, $global);
$x1195 = (is_string($x1194) && is_string($x1193) ? strcmp($x1194, $x1193) < 0 : (!is_nan($x1202 = JS::toNumber($x1194, $global)) && !is_nan($x1203 = JS::toNumber($x1193, $global)) && $x1202 < $x1203));
if (JS::toBoolean($x1195, $global)) {
unset($x1204, $W1204, $S1204, $U1204);
$x1205 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 353, 22, '<image>/04_array.js');
$x1204 =& $x1205[0]; list(,$W1204,$S1204,$U1204) = $x1205;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1204;;
};
for ($x1206 = 0;; ++$x1206) {
if ($x1206 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1207, $W1207, $S1207, $U1207);
$x1208 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 356, 26, '<image>/04_array.js');
$x1207 =& $x1208[0]; list(,$W1207,$S1207,$U1207) = $x1208;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1207;
}
if ($x1206 !== 0) {
$x1209 = ++$_i;
}
$x1210 = JS::toPrimitive($_i, $global);
$x1211 = JS::toPrimitive($_l, $global);
$x1212 = (is_string($x1210) && is_string($x1211) ? strcmp($x1210, $x1211) < 0 : (!is_nan($x1213 = JS::toNumber($x1210, $global)) && !is_nan($x1214 = JS::toNumber($x1211, $global)) && $x1213 < $x1214));
if (!JS::toBoolean($x1212, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1216 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 19, '<image>/04_array.js');
$_TypeError =& $x1216[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1216;
$x1217 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1218 = $x1217($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1218->class) && $x1218->class === 'Error' && !isset($x1218->properties['file']) && !isset($x1218->properties['line']) && !isset($x1218->properties['column'])) {$x1218->properties['file'] = '<image>/04_array.js';$x1218->properties['line'] = 357;$x1218->properties['column'] = 19;$x1218->attributes['file'] = $x1218->attributes['line'] = $x1218->attributes['column'] = 0; }
throw new JSException($x1218, 357, 19, '<image>/04_array.js');
}
$x1215 = JS::toObject($_returnArray, $global);
unset($x1219, $W1219, $S1219, $U1219);
$x1220 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1215, JS::toString('push', $global), 357, 19, '<image>/04_array.js');
$x1219 =& $x1220[0]; list(,$W1219,$S1219,$U1219) = $x1220;
if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1222 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 35, '<image>/04_array.js');
$_TypeError =& $x1222[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1222;
$x1223 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1224 = $x1223($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1224->class) && $x1224->class === 'Error' && !isset($x1224->properties['file']) && !isset($x1224->properties['line']) && !isset($x1224->properties['column'])) {$x1224->properties['file'] = '<image>/04_array.js';$x1224->properties['line'] = 357;$x1224->properties['column'] = 35;$x1224->attributes['file'] = $x1224->attributes['line'] = $x1224->attributes['column'] = 0; }
throw new JSException($x1224, 357, 35, '<image>/04_array.js');
}
$x1221 = JS::toObject($_callbackFn, $global);
unset($x1225, $W1225, $S1225, $U1225);
$x1226 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1221, JS::toString('call', $global), 357, 35, '<image>/04_array.js');
$x1225 =& $x1226[0]; list(,$W1225,$S1225,$U1225) = $x1226;
unset($x1227, $W1227, $S1227, $U1227);
$x1228 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 357, 49, '<image>/04_array.js');
$x1227 =& $x1228[0]; list(,$W1227,$S1227,$U1227) = $x1228;
if (!(is_object($x1225) && isset($x1225->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1231 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 35, '<image>/04_array.js');
$_TypeError =& $x1231[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1231;
$x1232 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1233 = $x1232($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1233->class) && $x1233->class === 'Error' && !isset($x1233->properties['file']) && !isset($x1233->properties['line']) && !isset($x1233->properties['column'])) {$x1233->properties['file'] = '<image>/04_array.js';$x1233->properties['line'] = 357;$x1233->properties['column'] = 35;$x1233->attributes['file'] = $x1233->attributes['line'] = $x1233->attributes['column'] = 0; }
throw new JSException($x1233, 357, 35, '<image>/04_array.js');
}
$x1229 = $x1225->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 35);
$x1230 = $x1229($global, $x1221, $x1225, array($_thisArg, $x1227, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x1219) && isset($x1219->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1236 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 357, 19, '<image>/04_array.js');
$_TypeError =& $x1236[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1236;
$x1237 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1238 = $x1237($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1238->class) && $x1238->class === 'Error' && !isset($x1238->properties['file']) && !isset($x1238->properties['line']) && !isset($x1238->properties['column'])) {$x1238->properties['file'] = '<image>/04_array.js';$x1238->properties['line'] = 357;$x1238->properties['column'] = 19;$x1238->attributes['file'] = $x1238->attributes['line'] = $x1238->attributes['column'] = 0; }
throw new JSException($x1238, 357, 19, '<image>/04_array.js');
}
$x1234 = $x1219->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 357, 19);
$x1235 = $x1234($global, $x1215, $x1219, array($x1230), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1191=&$scope->properties[\'arguments\'];$x1191->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1191->properties[$i]=$args[$i];$x1191->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1192=clone JS::$arrayTemplate;$x1192->properties[\'length\']=0;$x1192->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1192;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1196=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),352,6,\'<image>/04_array.js\');$_arguments=&$x1196[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1196;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1197=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),352,6,\'<image>/04_array.js\');$_ReferenceError=&$x1197[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1197;$x1198=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',352,6);$x1199=$x1198($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1199->class)&&$x1199->class===\'Error\'&&!isset($x1199->properties[\'file\'])&&!isset($x1199->properties[\'line\'])&&!isset($x1199->properties[\'column\'])){$x1199->properties[\'file\']=\'<image>/04_array.js\';$x1199->properties[\'line\']=352;$x1199->properties[\'column\']=6;$x1199->attributes[\'file\']=$x1199->attributes[\'line\']=$x1199->attributes[\'column\']=0;}throw new JSException($x1199,352,6,\'<image>/04_array.js\');}unset($x1200,$W1200,$S1200,$U1200);$x1201=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),352,15,\'<image>/04_array.js\');$x1200=&$x1201[0];list(,$W1200,$S1200,$U1200)=$x1201;$x1193=JS::toPrimitive($x1200,$global);$x1194=JS::toPrimitive(1,$global);$x1195=(is_string($x1194)&&is_string($x1193)?strcmp($x1194,$x1193)<0:(!is_nan($x1202=JS::toNumber($x1194,$global))&&!is_nan($x1203=JS::toNumber($x1193,$global))&&$x1202<$x1203));if(JS::toBoolean($x1195,$global)){unset($x1204,$W1204,$S1204,$U1204);$x1205=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),353,22,\'<image>/04_array.js\');$x1204=&$x1205[0];list(,$W1204,$S1204,$U1204)=$x1205;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1204;}for($x1206=0;;++$x1206){if($x1206===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1207,$W1207,$S1207,$U1207);$x1208=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),356,26,\'<image>/04_array.js\');$x1207=&$x1208[0];list(,$W1207,$S1207,$U1207)=$x1208;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1207;}if($x1206!==0){$x1209=++$_i;}$x1210=JS::toPrimitive($_i,$global);$x1211=JS::toPrimitive($_l,$global);$x1212=(is_string($x1210)&&is_string($x1211)?strcmp($x1210,$x1211)<0:(!is_nan($x1213=JS::toNumber($x1210,$global))&&!is_nan($x1214=JS::toNumber($x1211,$global))&&$x1213<$x1214));if(!JS::toBoolean($x1212,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1216=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,19,\'<image>/04_array.js\');$_TypeError=&$x1216[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1216;$x1217=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1218=$x1217($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1218->class)&&$x1218->class===\'Error\'&&!isset($x1218->properties[\'file\'])&&!isset($x1218->properties[\'line\'])&&!isset($x1218->properties[\'column\'])){$x1218->properties[\'file\']=\'<image>/04_array.js\';$x1218->properties[\'line\']=357;$x1218->properties[\'column\']=19;$x1218->attributes[\'file\']=$x1218->attributes[\'line\']=$x1218->attributes[\'column\']=0;}throw new JSException($x1218,357,19,\'<image>/04_array.js\');}$x1215=JS::toObject($_returnArray,$global);unset($x1219,$W1219,$S1219,$U1219);$x1220=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1215,JS::toString(\'push\',$global),357,19,\'<image>/04_array.js\');$x1219=&$x1220[0];list(,$W1219,$S1219,$U1219)=$x1220;if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1222=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,35,\'<image>/04_array.js\');$_TypeError=&$x1222[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1222;$x1223=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1224=$x1223($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1224->class)&&$x1224->class===\'Error\'&&!isset($x1224->properties[\'file\'])&&!isset($x1224->properties[\'line\'])&&!isset($x1224->properties[\'column\'])){$x1224->properties[\'file\']=\'<image>/04_array.js\';$x1224->properties[\'line\']=357;$x1224->properties[\'column\']=35;$x1224->attributes[\'file\']=$x1224->attributes[\'line\']=$x1224->attributes[\'column\']=0;}throw new JSException($x1224,357,35,\'<image>/04_array.js\');}$x1221=JS::toObject($_callbackFn,$global);unset($x1225,$W1225,$S1225,$U1225);$x1226=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1221,JS::toString(\'call\',$global),357,35,\'<image>/04_array.js\');$x1225=&$x1226[0];list(,$W1225,$S1225,$U1225)=$x1226;unset($x1227,$W1227,$S1227,$U1227);$x1228=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),357,49,\'<image>/04_array.js\');$x1227=&$x1228[0];list(,$W1227,$S1227,$U1227)=$x1228;if(!(is_object($x1225)&&isset($x1225->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1231=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,35,\'<image>/04_array.js\');$_TypeError=&$x1231[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1231;$x1232=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1233=$x1232($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1233->class)&&$x1233->class===\'Error\'&&!isset($x1233->properties[\'file\'])&&!isset($x1233->properties[\'line\'])&&!isset($x1233->properties[\'column\'])){$x1233->properties[\'file\']=\'<image>/04_array.js\';$x1233->properties[\'line\']=357;$x1233->properties[\'column\']=35;$x1233->attributes[\'file\']=$x1233->attributes[\'line\']=$x1233->attributes[\'column\']=0;}throw new JSException($x1233,357,35,\'<image>/04_array.js\');}$x1229=$x1225->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,35);$x1230=$x1229($global,$x1221,$x1225,array($_thisArg,$x1227,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x1219)&&isset($x1219->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1236=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),357,19,\'<image>/04_array.js\');$_TypeError=&$x1236[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1236;$x1237=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1238=$x1237($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1238->class)&&$x1238->class===\'Error\'&&!isset($x1238->properties[\'file\'])&&!isset($x1238->properties[\'line\'])&&!isset($x1238->properties[\'column\'])){$x1238->properties[\'file\']=\'<image>/04_array.js\';$x1238->properties[\'line\']=357;$x1238->properties[\'column\']=19;$x1238->attributes[\'file\']=$x1238->attributes[\'line\']=$x1238->attributes[\'column\']=0;}throw new JSException($x1238,357,19,\'<image>/04_array.js\');}$x1234=$x1219->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',357,19);$x1235=$x1234($global,$x1215,$x1219,array($x1230),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_24($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1253 =& $scope->properties['arguments'];
$x1253->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1253->properties[$i] = $args[$i];
$x1253->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['thisArg'] = JS::$undefined; $_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$_thisArg = JS::$undefined;
$x1254 = clone JS::$arrayTemplate;
$x1254->properties['length'] = 0;
$x1254->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x1254;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1258 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 366, 6, '<image>/04_array.js');
$_arguments =& $x1258[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1258;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1259 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 366, 6, '<image>/04_array.js');
$_ReferenceError =& $x1259[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1259;
$x1260 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 366, 6);
$x1261 = $x1260($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1261->class) && $x1261->class === 'Error' && !isset($x1261->properties['file']) && !isset($x1261->properties['line']) && !isset($x1261->properties['column'])) {$x1261->properties['file'] = '<image>/04_array.js';$x1261->properties['line'] = 366;$x1261->properties['column'] = 6;$x1261->attributes['file'] = $x1261->attributes['line'] = $x1261->attributes['column'] = 0; }
throw new JSException($x1261, 366, 6, '<image>/04_array.js');
}
unset($x1262, $W1262, $S1262, $U1262);
$x1263 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 366, 15, '<image>/04_array.js');
$x1262 =& $x1263[0]; list(,$W1262,$S1262,$U1262) = $x1263;
$x1255 = JS::toPrimitive($x1262, $global);
$x1256 = JS::toPrimitive(1, $global);
$x1257 = (is_string($x1256) && is_string($x1255) ? strcmp($x1256, $x1255) < 0 : (!is_nan($x1264 = JS::toNumber($x1256, $global)) && !is_nan($x1265 = JS::toNumber($x1255, $global)) && $x1264 < $x1265));
if (JS::toBoolean($x1257, $global)) {
unset($x1266, $W1266, $S1266, $U1266);
$x1267 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 367, 22, '<image>/04_array.js');
$x1266 =& $x1267[0]; list(,$W1266,$S1266,$U1266) = $x1267;
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x1266;;
};
for ($x1268 = 0;; ++$x1268) {
if ($x1268 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x1269, $W1269, $S1269, $U1269);
$x1270 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 370, 26, '<image>/04_array.js');
$x1269 =& $x1270[0]; list(,$W1269,$S1269,$U1269) = $x1270;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1269;
}
if ($x1268 !== 0) {
$x1271 = ++$_i;
}
$x1272 = JS::toPrimitive($_i, $global);
$x1273 = JS::toPrimitive($_l, $global);
$x1274 = (is_string($x1272) && is_string($x1273) ? strcmp($x1272, $x1273) < 0 : (!is_nan($x1275 = JS::toNumber($x1272, $global)) && !is_nan($x1276 = JS::toNumber($x1273, $global)) && $x1275 < $x1276));
if (!JS::toBoolean($x1274, $global)) { break; }

if ($_callbackFn === JS::$undefined || $_callbackFn === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1278 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 371, 22, '<image>/04_array.js');
$_TypeError =& $x1278[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1278;
$x1279 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1280 = $x1279($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1280->class) && $x1280->class === 'Error' && !isset($x1280->properties['file']) && !isset($x1280->properties['line']) && !isset($x1280->properties['column'])) {$x1280->properties['file'] = '<image>/04_array.js';$x1280->properties['line'] = 371;$x1280->properties['column'] = 22;$x1280->attributes['file'] = $x1280->attributes['line'] = $x1280->attributes['column'] = 0; }
throw new JSException($x1280, 371, 22, '<image>/04_array.js');
}
$x1277 = JS::toObject($_callbackFn, $global);
unset($x1281, $W1281, $S1281, $U1281);
$x1282 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1277, JS::toString('call', $global), 371, 22, '<image>/04_array.js');
$x1281 =& $x1282[0]; list(,$W1281,$S1281,$U1281) = $x1282;
unset($x1283, $W1283, $S1283, $U1283);
$x1284 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 371, 36, '<image>/04_array.js');
$x1283 =& $x1284[0]; list(,$W1283,$S1283,$U1283) = $x1284;
if (!(is_object($x1281) && isset($x1281->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1287 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 371, 22, '<image>/04_array.js');
$_TypeError =& $x1287[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1287;
$x1288 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1289 = $x1288($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1289->class) && $x1289->class === 'Error' && !isset($x1289->properties['file']) && !isset($x1289->properties['line']) && !isset($x1289->properties['column'])) {$x1289->properties['file'] = '<image>/04_array.js';$x1289->properties['line'] = 371;$x1289->properties['column'] = 22;$x1289->attributes['file'] = $x1289->attributes['line'] = $x1289->attributes['column'] = 0; }
throw new JSException($x1289, 371, 22, '<image>/04_array.js');
}
$x1285 = $x1281->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 371, 22);
$x1286 = $x1285($global, $x1277, $x1281, array($_thisArg, $x1283, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x1286, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1291 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 372, 20, '<image>/04_array.js');
$_TypeError =& $x1291[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1291;
$x1292 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1293 = $x1292($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1293->class) && $x1293->class === 'Error' && !isset($x1293->properties['file']) && !isset($x1293->properties['line']) && !isset($x1293->properties['column'])) {$x1293->properties['file'] = '<image>/04_array.js';$x1293->properties['line'] = 372;$x1293->properties['column'] = 20;$x1293->attributes['file'] = $x1293->attributes['line'] = $x1293->attributes['column'] = 0; }
throw new JSException($x1293, 372, 20, '<image>/04_array.js');
}
$x1290 = JS::toObject($_returnArray, $global);
unset($x1294, $W1294, $S1294, $U1294);
$x1295 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x1290, JS::toString('push', $global), 372, 20, '<image>/04_array.js');
$x1294 =& $x1295[0]; list(,$W1294,$S1294,$U1294) = $x1295;
unset($x1296, $W1296, $S1296, $U1296);
$x1297 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 372, 25, '<image>/04_array.js');
$x1296 =& $x1297[0]; list(,$W1296,$S1296,$U1296) = $x1297;
if (!(is_object($x1294) && isset($x1294->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1300 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 372, 20, '<image>/04_array.js');
$_TypeError =& $x1300[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1300;
$x1301 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1302 = $x1301($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1302->class) && $x1302->class === 'Error' && !isset($x1302->properties['file']) && !isset($x1302->properties['line']) && !isset($x1302->properties['column'])) {$x1302->properties['file'] = '<image>/04_array.js';$x1302->properties['line'] = 372;$x1302->properties['column'] = 20;$x1302->attributes['file'] = $x1302->attributes['line'] = $x1302->attributes['column'] = 0; }
throw new JSException($x1302, 372, 20, '<image>/04_array.js');
}
$x1298 = $x1294->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 372, 20);
$x1299 = $x1298($global, $x1290, $x1294, array($x1296), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_24($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1253=&$scope->properties[\'arguments\'];$x1253->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1253->properties[$i]=$args[$i];$x1253->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'thisArg\']=JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$_thisArg=JS::$undefined;$x1254=clone JS::$arrayTemplate;$x1254->properties[\'length\']=0;$x1254->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x1254;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1258=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),366,6,\'<image>/04_array.js\');$_arguments=&$x1258[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1258;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1259=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),366,6,\'<image>/04_array.js\');$_ReferenceError=&$x1259[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1259;$x1260=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',366,6);$x1261=$x1260($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1261->class)&&$x1261->class===\'Error\'&&!isset($x1261->properties[\'file\'])&&!isset($x1261->properties[\'line\'])&&!isset($x1261->properties[\'column\'])){$x1261->properties[\'file\']=\'<image>/04_array.js\';$x1261->properties[\'line\']=366;$x1261->properties[\'column\']=6;$x1261->attributes[\'file\']=$x1261->attributes[\'line\']=$x1261->attributes[\'column\']=0;}throw new JSException($x1261,366,6,\'<image>/04_array.js\');}unset($x1262,$W1262,$S1262,$U1262);$x1263=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),366,15,\'<image>/04_array.js\');$x1262=&$x1263[0];list(,$W1262,$S1262,$U1262)=$x1263;$x1255=JS::toPrimitive($x1262,$global);$x1256=JS::toPrimitive(1,$global);$x1257=(is_string($x1256)&&is_string($x1255)?strcmp($x1256,$x1255)<0:(!is_nan($x1264=JS::toNumber($x1256,$global))&&!is_nan($x1265=JS::toNumber($x1255,$global))&&$x1264<$x1265));if(JS::toBoolean($x1257,$global)){unset($x1266,$W1266,$S1266,$U1266);$x1267=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),367,22,\'<image>/04_array.js\');$x1266=&$x1267[0];list(,$W1266,$S1266,$U1266)=$x1267;if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x1266;}for($x1268=0;;++$x1268){if($x1268===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x1269,$W1269,$S1269,$U1269);$x1270=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),370,26,\'<image>/04_array.js\');$x1269=&$x1270[0];list(,$W1269,$S1269,$U1269)=$x1270;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1269;}if($x1268!==0){$x1271=++$_i;}$x1272=JS::toPrimitive($_i,$global);$x1273=JS::toPrimitive($_l,$global);$x1274=(is_string($x1272)&&is_string($x1273)?strcmp($x1272,$x1273)<0:(!is_nan($x1275=JS::toNumber($x1272,$global))&&!is_nan($x1276=JS::toNumber($x1273,$global))&&$x1275<$x1276));if(!JS::toBoolean($x1274,$global)){break;}if($_callbackFn===JS::$undefined||$_callbackFn===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1278=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),371,22,\'<image>/04_array.js\');$_TypeError=&$x1278[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1278;$x1279=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1280=$x1279($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1280->class)&&$x1280->class===\'Error\'&&!isset($x1280->properties[\'file\'])&&!isset($x1280->properties[\'line\'])&&!isset($x1280->properties[\'column\'])){$x1280->properties[\'file\']=\'<image>/04_array.js\';$x1280->properties[\'line\']=371;$x1280->properties[\'column\']=22;$x1280->attributes[\'file\']=$x1280->attributes[\'line\']=$x1280->attributes[\'column\']=0;}throw new JSException($x1280,371,22,\'<image>/04_array.js\');}$x1277=JS::toObject($_callbackFn,$global);unset($x1281,$W1281,$S1281,$U1281);$x1282=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1277,JS::toString(\'call\',$global),371,22,\'<image>/04_array.js\');$x1281=&$x1282[0];list(,$W1281,$S1281,$U1281)=$x1282;unset($x1283,$W1283,$S1283,$U1283);$x1284=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),371,36,\'<image>/04_array.js\');$x1283=&$x1284[0];list(,$W1283,$S1283,$U1283)=$x1284;if(!(is_object($x1281)&&isset($x1281->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1287=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),371,22,\'<image>/04_array.js\');$_TypeError=&$x1287[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1287;$x1288=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1289=$x1288($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1289->class)&&$x1289->class===\'Error\'&&!isset($x1289->properties[\'file\'])&&!isset($x1289->properties[\'line\'])&&!isset($x1289->properties[\'column\'])){$x1289->properties[\'file\']=\'<image>/04_array.js\';$x1289->properties[\'line\']=371;$x1289->properties[\'column\']=22;$x1289->attributes[\'file\']=$x1289->attributes[\'line\']=$x1289->attributes[\'column\']=0;}throw new JSException($x1289,371,22,\'<image>/04_array.js\');}$x1285=$x1281->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',371,22);$x1286=$x1285($global,$x1277,$x1281,array($_thisArg,$x1283,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x1286,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1291=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),372,20,\'<image>/04_array.js\');$_TypeError=&$x1291[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1291;$x1292=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1293=$x1292($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1293->class)&&$x1293->class===\'Error\'&&!isset($x1293->properties[\'file\'])&&!isset($x1293->properties[\'line\'])&&!isset($x1293->properties[\'column\'])){$x1293->properties[\'file\']=\'<image>/04_array.js\';$x1293->properties[\'line\']=372;$x1293->properties[\'column\']=20;$x1293->attributes[\'file\']=$x1293->attributes[\'line\']=$x1293->attributes[\'column\']=0;}throw new JSException($x1293,372,20,\'<image>/04_array.js\');}$x1290=JS::toObject($_returnArray,$global);unset($x1294,$W1294,$S1294,$U1294);$x1295=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$x1290,JS::toString(\'push\',$global),372,20,\'<image>/04_array.js\');$x1294=&$x1295[0];list(,$W1294,$S1294,$U1294)=$x1295;unset($x1296,$W1296,$S1296,$U1296);$x1297=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),372,25,\'<image>/04_array.js\');$x1296=&$x1297[0];list(,$W1296,$S1296,$U1296)=$x1297;if(!(is_object($x1294)&&isset($x1294->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1300=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),372,20,\'<image>/04_array.js\');$_TypeError=&$x1300[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1300;$x1301=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1302=$x1301($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1302->class)&&$x1302->class===\'Error\'&&!isset($x1302->properties[\'file\'])&&!isset($x1302->properties[\'line\'])&&!isset($x1302->properties[\'column\'])){$x1302->properties[\'file\']=\'<image>/04_array.js\';$x1302->properties[\'line\']=372;$x1302->properties[\'column\']=20;$x1302->attributes[\'file\']=$x1302->attributes[\'line\']=$x1302->attributes[\'column\']=0;}throw new JSException($x1302,372,20,\'<image>/04_array.js\');}$x1298=$x1294->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',372,20);$x1299=$x1298($global,$x1290,$x1294,array($x1296),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}return$_returnArray;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_25($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1317 =& $scope->properties['arguments'];
$x1317->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1317->properties[$i] = $args[$i];
$x1317->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1322, $W1322, $S1322, $U1322);
$x1323 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 380, 10, '<image>/04_array.js');
$x1322 =& $x1323[0]; list(,$W1322,$S1322,$U1322) = $x1323;
$x1319 = JS::toPrimitive($x1322, $global);
$x1320 = JS::toPrimitive(1, $global);
$x1321 = (is_string($x1319) && is_string($x1320) ? strcmp($x1319, $x1320) < 0 : (!is_nan($x1324 = JS::toNumber($x1319, $global)) && !is_nan($x1325 = JS::toNumber($x1320, $global)) && $x1324 < $x1325));
$x1318 = $x1321;
if (JS::toBoolean($x1318, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1329 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 380, 25, '<image>/04_array.js');
$_arguments =& $x1329[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1329;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1330 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 380, 25, '<image>/04_array.js');
$_ReferenceError =& $x1330[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1330;
$x1331 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 380, 25);
$x1332 = $x1331($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1332->class) && $x1332->class === 'Error' && !isset($x1332->properties['file']) && !isset($x1332->properties['line']) && !isset($x1332->properties['column'])) {$x1332->properties['file'] = '<image>/04_array.js';$x1332->properties['line'] = 380;$x1332->properties['column'] = 25;$x1332->attributes['file'] = $x1332->attributes['line'] = $x1332->attributes['column'] = 0; }
throw new JSException($x1332, 380, 25, '<image>/04_array.js');
}
unset($x1333, $W1333, $S1333, $U1333);
$x1334 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 380, 34, '<image>/04_array.js');
$x1333 =& $x1334[0]; list(,$W1333,$S1333,$U1333) = $x1334;
$x1326 = JS::toPrimitive($x1333, $global);
$x1327 = JS::toPrimitive(2, $global);
$x1328 = (is_string($x1326) && is_string($x1327) ? strcmp($x1326, $x1327) < 0 : (!is_nan($x1335 = JS::toNumber($x1326, $global)) && !is_nan($x1336 = JS::toNumber($x1327, $global)) && $x1335 < $x1336));
$x1318 = $x1328; }
if (JS::toBoolean($x1318, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1339 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 381, 13, '<image>/04_array.js');
$_TypeError =& $x1339[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1339;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1340 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 381, 13, '<image>/04_array.js');
$_ReferenceError =& $x1340[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1340;
$x1341 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 13);
$x1342 = $x1341($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1342->class) && $x1342->class === 'Error' && !isset($x1342->properties['file']) && !isset($x1342->properties['line']) && !isset($x1342->properties['column'])) {$x1342->properties['file'] = '<image>/04_array.js';$x1342->properties['line'] = 381;$x1342->properties['column'] = 13;$x1342->attributes['file'] = $x1342->attributes['line'] = $x1342->attributes['column'] = 0; }
throw new JSException($x1342, 381, 13, '<image>/04_array.js');
}
$x1337 = clone JS::$objectTemplate;
unset($x1343, $W1343, $S1343, $U1343);
$x1344 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 381, 9, '<image>/04_array.js');
$x1343 =& $x1344[0]; list(,$W1343,$S1343,$U1343) = $x1344;
$x1338 = $x1343;
$x1337->prototype = $x1338;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1347 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1348 = $x1347($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1348->class) && $x1348->class === 'Error' && !isset($x1348->properties['file']) && !isset($x1348->properties['line']) && !isset($x1348->properties['column'])) {$x1348->properties['file'] = '<image>/04_array.js';$x1348->properties['line'] = 381;$x1348->properties['column'] = 9;$x1348->attributes['file'] = $x1348->attributes['line'] = $x1348->attributes['column'] = 0; }
throw new JSException($x1348, 381, 9, '<image>/04_array.js');
}
$x1345 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 381, 9);
$x1346 = $x1345($global, $x1337, $_TypeError, array('Array.prototype.reduce(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1338 = $x1346;
if (is_object($x1338) && $x1338 !== JS::$undefined) { $x1337 = $x1338; }
if (isset($x1337->class) && $x1337->class === 'Error' && !isset($x1337->properties['file']) && !isset($x1337->properties['line']) && !isset($x1337->properties['column'])) {$x1337->properties['file'] = '<image>/04_array.js';$x1337->properties['line'] = 381;$x1337->properties['column'] = 3;$x1337->attributes['file'] = $x1337->attributes['line'] = $x1337->attributes['column'] = 0; }
throw new JSException($x1337, 381, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1352 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 386, 6, '<image>/04_array.js');
$_arguments =& $x1352[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1352;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1353 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 386, 6, '<image>/04_array.js');
$_ReferenceError =& $x1353[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1353;
$x1354 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 386, 6);
$x1355 = $x1354($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1355->class) && $x1355->class === 'Error' && !isset($x1355->properties['file']) && !isset($x1355->properties['line']) && !isset($x1355->properties['column'])) {$x1355->properties['file'] = '<image>/04_array.js';$x1355->properties['line'] = 386;$x1355->properties['column'] = 6;$x1355->attributes['file'] = $x1355->attributes['line'] = $x1355->attributes['column'] = 0; }
throw new JSException($x1355, 386, 6, '<image>/04_array.js');
}
unset($x1356, $W1356, $S1356, $U1356);
$x1357 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 386, 15, '<image>/04_array.js');
$x1356 =& $x1357[0]; list(,$W1356,$S1356,$U1356) = $x1357;
$x1349 = JS::toPrimitive($x1356, $global);
$x1350 = JS::toPrimitive(1, $global);
$x1351 = (is_string($x1350) && is_string($x1349) ? strcmp($x1350, $x1349) < 0 : (!is_nan($x1358 = JS::toNumber($x1350, $global)) && !is_nan($x1359 = JS::toNumber($x1349, $global)) && $x1358 < $x1359));
if (JS::toBoolean($x1351, $global)) {
unset($x1360, $W1360, $S1360, $U1360);
$x1361 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 387, 20, '<image>/04_array.js');
$x1360 =& $x1361[0]; list(,$W1360,$S1360,$U1360) = $x1361;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1360;
$x1362 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1362;;
}
else {
for ($x1363 = 0;; ++$x1363) {
if ($x1363 === 0) {
$x1364 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1364;
}
if ($x1363 !== 0) {
$x1365 = ++$_i;
}
unset($x1370, $W1370, $S1370, $U1370);
$x1371 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 391, 23, '<image>/04_array.js');
$x1370 =& $x1371[0]; list(,$W1370,$S1370,$U1370) = $x1371;
$x1367 = JS::toPrimitive($_i, $global);
$x1368 = JS::toPrimitive($x1370, $global);
$x1369 = (is_string($x1367) && is_string($x1368) ? strcmp($x1367, $x1368) < 0 : (!is_nan($x1372 = JS::toNumber($x1367, $global)) && !is_nan($x1373 = JS::toNumber($x1368, $global)) && $x1372 < $x1373));
$x1366 = $x1369;
if (JS::toBoolean($x1366, $global)) {
unset($x1375, $W1375, $S1375, $U1375);
$x1376 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 391, 38, '<image>/04_array.js');
$x1375 =& $x1376[0]; list(,$W1375,$S1375,$U1375) = $x1376;
$x1374 = (((gettype($x1375) === gettype(JS::$undefined) && $x1375 === JS::$undefined))|| (((is_float($x1375) || is_int($x1375)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1375 == JS::$undefined));
$x1366 = $x1374; }
if (!JS::toBoolean($x1366, $global)) { break; }

;
};
unset($x1377, $W1377, $S1377, $U1377);
$x1378 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 392, 15, '<image>/04_array.js');
$x1377 =& $x1378[0]; list(,$W1377,$S1377,$U1377) = $x1378;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1377;
$x1379 = JS::toPrimitive($_i, $global);
$x1380 = JS::toPrimitive(1, $global);
$x1381 = (is_string($x1379) || is_string($x1380) ? JS::toString($x1379, $global) . JS::toString($x1380, $global) : JS::toNumber($x1379, $global) + JS::toNumber($x1380, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1381;;
};
for ($x1382 = 0;; ++$x1382) {
if ($x1382 === 0) {
unset($x1383, $W1383, $S1383, $U1383);
$x1384 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 396, 19, '<image>/04_array.js');
$x1383 =& $x1384[0]; list(,$W1383,$S1383,$U1383) = $x1384;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x1383;
}
if ($x1382 !== 0) {
$x1385 = ++$_i;
}
$x1386 = JS::toPrimitive($_i, $global);
$x1387 = JS::toPrimitive($_l, $global);
$x1388 = (is_string($x1386) && is_string($x1387) ? strcmp($x1386, $x1387) < 0 : (!is_nan($x1389 = JS::toNumber($x1386, $global)) && !is_nan($x1390 = JS::toNumber($x1387, $global)) && $x1389 < $x1390));
if (!JS::toBoolean($x1388, $global)) { break; }

unset($x1392, $W1392, $S1392, $U1392);
$x1393 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 397, 11, '<image>/04_array.js');
$x1392 =& $x1393[0]; list(,$W1392,$S1392,$U1392) = $x1393;
$x1391 = !(((gettype($x1392) === gettype(JS::$undefined) && $x1392 === JS::$undefined))|| (((is_float($x1392) || is_int($x1392)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1392 == JS::$undefined));
if (JS::toBoolean($x1391, $global)) {
unset($x1394, $W1394, $S1394, $U1394);
$x1395 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 398, 34, '<image>/04_array.js');
$x1394 =& $x1395[0]; list(,$W1394,$S1394,$U1394) = $x1395;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1398 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 398, 22, '<image>/04_array.js');
$_TypeError =& $x1398[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1398;
$x1399 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1400 = $x1399($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1400->class) && $x1400->class === 'Error' && !isset($x1400->properties['file']) && !isset($x1400->properties['line']) && !isset($x1400->properties['column'])) {$x1400->properties['file'] = '<image>/04_array.js';$x1400->properties['line'] = 398;$x1400->properties['column'] = 22;$x1400->attributes['file'] = $x1400->attributes['line'] = $x1400->attributes['column'] = 0; }
throw new JSException($x1400, 398, 22, '<image>/04_array.js');
}
$x1396 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 398, 22);
$x1397 = $x1396($global, $global, $_callbackFn, array($_value, $x1394, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1397;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_25($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1317=&$scope->properties[\'arguments\'];$x1317->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1317->properties[$i]=$args[$i];$x1317->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1322,$W1322,$S1322,$U1322);$x1323=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),380,10,\'<image>/04_array.js\');$x1322=&$x1323[0];list(,$W1322,$S1322,$U1322)=$x1323;$x1319=JS::toPrimitive($x1322,$global);$x1320=JS::toPrimitive(1,$global);$x1321=(is_string($x1319)&&is_string($x1320)?strcmp($x1319,$x1320)<0:(!is_nan($x1324=JS::toNumber($x1319,$global))&&!is_nan($x1325=JS::toNumber($x1320,$global))&&$x1324<$x1325));$x1318=$x1321;if(JS::toBoolean($x1318,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1329=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),380,25,\'<image>/04_array.js\');$_arguments=&$x1329[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1329;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1330=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),380,25,\'<image>/04_array.js\');$_ReferenceError=&$x1330[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1330;$x1331=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',380,25);$x1332=$x1331($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1332->class)&&$x1332->class===\'Error\'&&!isset($x1332->properties[\'file\'])&&!isset($x1332->properties[\'line\'])&&!isset($x1332->properties[\'column\'])){$x1332->properties[\'file\']=\'<image>/04_array.js\';$x1332->properties[\'line\']=380;$x1332->properties[\'column\']=25;$x1332->attributes[\'file\']=$x1332->attributes[\'line\']=$x1332->attributes[\'column\']=0;}throw new JSException($x1332,380,25,\'<image>/04_array.js\');}unset($x1333,$W1333,$S1333,$U1333);$x1334=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),380,34,\'<image>/04_array.js\');$x1333=&$x1334[0];list(,$W1333,$S1333,$U1333)=$x1334;$x1326=JS::toPrimitive($x1333,$global);$x1327=JS::toPrimitive(2,$global);$x1328=(is_string($x1326)&&is_string($x1327)?strcmp($x1326,$x1327)<0:(!is_nan($x1335=JS::toNumber($x1326,$global))&&!is_nan($x1336=JS::toNumber($x1327,$global))&&$x1335<$x1336));$x1318=$x1328;}if(JS::toBoolean($x1318,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1339=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),381,13,\'<image>/04_array.js\');$_TypeError=&$x1339[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1339;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1340=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),381,13,\'<image>/04_array.js\');$_ReferenceError=&$x1340[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1340;$x1341=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,13);$x1342=$x1341($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1342->class)&&$x1342->class===\'Error\'&&!isset($x1342->properties[\'file\'])&&!isset($x1342->properties[\'line\'])&&!isset($x1342->properties[\'column\'])){$x1342->properties[\'file\']=\'<image>/04_array.js\';$x1342->properties[\'line\']=381;$x1342->properties[\'column\']=13;$x1342->attributes[\'file\']=$x1342->attributes[\'line\']=$x1342->attributes[\'column\']=0;}throw new JSException($x1342,381,13,\'<image>/04_array.js\');}$x1337=clone JS::$objectTemplate;unset($x1343,$W1343,$S1343,$U1343);$x1344=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),381,9,\'<image>/04_array.js\');$x1343=&$x1344[0];list(,$W1343,$S1343,$U1343)=$x1344;$x1338=$x1343;$x1337->prototype=$x1338;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1347=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1348=$x1347($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1348->class)&&$x1348->class===\'Error\'&&!isset($x1348->properties[\'file\'])&&!isset($x1348->properties[\'line\'])&&!isset($x1348->properties[\'column\'])){$x1348->properties[\'file\']=\'<image>/04_array.js\';$x1348->properties[\'line\']=381;$x1348->properties[\'column\']=9;$x1348->attributes[\'file\']=$x1348->attributes[\'line\']=$x1348->attributes[\'column\']=0;}throw new JSException($x1348,381,9,\'<image>/04_array.js\');}$x1345=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',381,9);$x1346=$x1345($global,$x1337,$_TypeError,array(\'Array.prototype.reduce(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1338=$x1346;if(is_object($x1338)&&$x1338!==JS::$undefined){$x1337=$x1338;}if(isset($x1337->class)&&$x1337->class===\'Error\'&&!isset($x1337->properties[\'file\'])&&!isset($x1337->properties[\'line\'])&&!isset($x1337->properties[\'column\'])){$x1337->properties[\'file\']=\'<image>/04_array.js\';$x1337->properties[\'line\']=381;$x1337->properties[\'column\']=3;$x1337->attributes[\'file\']=$x1337->attributes[\'line\']=$x1337->attributes[\'column\']=0;}throw new JSException($x1337,381,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1352=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),386,6,\'<image>/04_array.js\');$_arguments=&$x1352[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1352;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1353=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),386,6,\'<image>/04_array.js\');$_ReferenceError=&$x1353[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1353;$x1354=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',386,6);$x1355=$x1354($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1355->class)&&$x1355->class===\'Error\'&&!isset($x1355->properties[\'file\'])&&!isset($x1355->properties[\'line\'])&&!isset($x1355->properties[\'column\'])){$x1355->properties[\'file\']=\'<image>/04_array.js\';$x1355->properties[\'line\']=386;$x1355->properties[\'column\']=6;$x1355->attributes[\'file\']=$x1355->attributes[\'line\']=$x1355->attributes[\'column\']=0;}throw new JSException($x1355,386,6,\'<image>/04_array.js\');}unset($x1356,$W1356,$S1356,$U1356);$x1357=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),386,15,\'<image>/04_array.js\');$x1356=&$x1357[0];list(,$W1356,$S1356,$U1356)=$x1357;$x1349=JS::toPrimitive($x1356,$global);$x1350=JS::toPrimitive(1,$global);$x1351=(is_string($x1350)&&is_string($x1349)?strcmp($x1350,$x1349)<0:(!is_nan($x1358=JS::toNumber($x1350,$global))&&!is_nan($x1359=JS::toNumber($x1349,$global))&&$x1358<$x1359));if(JS::toBoolean($x1351,$global)){unset($x1360,$W1360,$S1360,$U1360);$x1361=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),387,20,\'<image>/04_array.js\');$x1360=&$x1361[0];list(,$W1360,$S1360,$U1360)=$x1361;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1360;$x1362=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1362;}else{for($x1363=0;;++$x1363){if($x1363===0){$x1364=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1364;}if($x1363!==0){$x1365=++$_i;}unset($x1370,$W1370,$S1370,$U1370);$x1371=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),391,23,\'<image>/04_array.js\');$x1370=&$x1371[0];list(,$W1370,$S1370,$U1370)=$x1371;$x1367=JS::toPrimitive($_i,$global);$x1368=JS::toPrimitive($x1370,$global);$x1369=(is_string($x1367)&&is_string($x1368)?strcmp($x1367,$x1368)<0:(!is_nan($x1372=JS::toNumber($x1367,$global))&&!is_nan($x1373=JS::toNumber($x1368,$global))&&$x1372<$x1373));$x1366=$x1369;if(JS::toBoolean($x1366,$global)){unset($x1375,$W1375,$S1375,$U1375);$x1376=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),391,38,\'<image>/04_array.js\');$x1375=&$x1376[0];list(,$W1375,$S1375,$U1375)=$x1376;$x1374=(((gettype($x1375)===gettype(JS::$undefined)&&$x1375===JS::$undefined))||(((is_float($x1375)||is_int($x1375))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1375==JS::$undefined));$x1366=$x1374;}if(!JS::toBoolean($x1366,$global)){break;}}unset($x1377,$W1377,$S1377,$U1377);$x1378=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),392,15,\'<image>/04_array.js\');$x1377=&$x1378[0];list(,$W1377,$S1377,$U1377)=$x1378;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1377;$x1379=JS::toPrimitive($_i,$global);$x1380=JS::toPrimitive(1,$global);$x1381=(is_string($x1379)||is_string($x1380)?JS::toString($x1379,$global).JS::toString($x1380,$global):JS::toNumber($x1379,$global)+JS::toNumber($x1380,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1381;}for($x1382=0;;++$x1382){if($x1382===0){unset($x1383,$W1383,$S1383,$U1383);$x1384=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),396,19,\'<image>/04_array.js\');$x1383=&$x1384[0];list(,$W1383,$S1383,$U1383)=$x1384;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x1383;}if($x1382!==0){$x1385=++$_i;}$x1386=JS::toPrimitive($_i,$global);$x1387=JS::toPrimitive($_l,$global);$x1388=(is_string($x1386)&&is_string($x1387)?strcmp($x1386,$x1387)<0:(!is_nan($x1389=JS::toNumber($x1386,$global))&&!is_nan($x1390=JS::toNumber($x1387,$global))&&$x1389<$x1390));if(!JS::toBoolean($x1388,$global)){break;}unset($x1392,$W1392,$S1392,$U1392);$x1393=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),397,11,\'<image>/04_array.js\');$x1392=&$x1393[0];list(,$W1392,$S1392,$U1392)=$x1393;$x1391=!(((gettype($x1392)===gettype(JS::$undefined)&&$x1392===JS::$undefined))||(((is_float($x1392)||is_int($x1392))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1392==JS::$undefined));if(JS::toBoolean($x1391,$global)){unset($x1394,$W1394,$S1394,$U1394);$x1395=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),398,34,\'<image>/04_array.js\');$x1394=&$x1395[0];list(,$W1394,$S1394,$U1394)=$x1395;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1398=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),398,22,\'<image>/04_array.js\');$_TypeError=&$x1398[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1398;$x1399=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1400=$x1399($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1400->class)&&$x1400->class===\'Error\'&&!isset($x1400->properties[\'file\'])&&!isset($x1400->properties[\'line\'])&&!isset($x1400->properties[\'column\'])){$x1400->properties[\'file\']=\'<image>/04_array.js\';$x1400->properties[\'line\']=398;$x1400->properties[\'column\']=22;$x1400->attributes[\'file\']=$x1400->attributes[\'line\']=$x1400->attributes[\'column\']=0;}throw new JSException($x1400,398,22,\'<image>/04_array.js\');}$x1396=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',398,22);$x1397=$x1396($global,$global,$_callbackFn,array($_value,$x1394,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1397;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_26($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1415 =& $scope->properties['arguments'];
$x1415->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1415->properties[$i] = $args[$i];
$x1415->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['callbackFn'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_callbackFn =& $scope->properties['callbackFn'];
$UcallbackFn = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($x1420, $W1420, $S1420, $U1420);
$x1421 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 406, 10, '<image>/04_array.js');
$x1420 =& $x1421[0]; list(,$W1420,$S1420,$U1420) = $x1421;
$x1417 = JS::toPrimitive($x1420, $global);
$x1418 = JS::toPrimitive(1, $global);
$x1419 = (is_string($x1417) && is_string($x1418) ? strcmp($x1417, $x1418) < 0 : (!is_nan($x1422 = JS::toNumber($x1417, $global)) && !is_nan($x1423 = JS::toNumber($x1418, $global)) && $x1422 < $x1423));
$x1416 = $x1419;
if (JS::toBoolean($x1416, $global)) {
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1427 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 406, 25, '<image>/04_array.js');
$_arguments =& $x1427[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1427;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1428 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 406, 25, '<image>/04_array.js');
$_ReferenceError =& $x1428[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1428;
$x1429 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 406, 25);
$x1430 = $x1429($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1430->class) && $x1430->class === 'Error' && !isset($x1430->properties['file']) && !isset($x1430->properties['line']) && !isset($x1430->properties['column'])) {$x1430->properties['file'] = '<image>/04_array.js';$x1430->properties['line'] = 406;$x1430->properties['column'] = 25;$x1430->attributes['file'] = $x1430->attributes['line'] = $x1430->attributes['column'] = 0; }
throw new JSException($x1430, 406, 25, '<image>/04_array.js');
}
unset($x1431, $W1431, $S1431, $U1431);
$x1432 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 406, 34, '<image>/04_array.js');
$x1431 =& $x1432[0]; list(,$W1431,$S1431,$U1431) = $x1432;
$x1424 = JS::toPrimitive($x1431, $global);
$x1425 = JS::toPrimitive(2, $global);
$x1426 = (is_string($x1424) && is_string($x1425) ? strcmp($x1424, $x1425) < 0 : (!is_nan($x1433 = JS::toNumber($x1424, $global)) && !is_nan($x1434 = JS::toNumber($x1425, $global)) && $x1433 < $x1434));
$x1416 = $x1426; }
if (JS::toBoolean($x1416, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1437 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 407, 13, '<image>/04_array.js');
$_TypeError =& $x1437[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1437;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1438 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 407, 13, '<image>/04_array.js');
$_ReferenceError =& $x1438[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1438;
$x1439 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 13);
$x1440 = $x1439($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1440->class) && $x1440->class === 'Error' && !isset($x1440->properties['file']) && !isset($x1440->properties['line']) && !isset($x1440->properties['column'])) {$x1440->properties['file'] = '<image>/04_array.js';$x1440->properties['line'] = 407;$x1440->properties['column'] = 13;$x1440->attributes['file'] = $x1440->attributes['line'] = $x1440->attributes['column'] = 0; }
throw new JSException($x1440, 407, 13, '<image>/04_array.js');
}
$x1435 = clone JS::$objectTemplate;
unset($x1441, $W1441, $S1441, $U1441);
$x1442 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 407, 9, '<image>/04_array.js');
$x1441 =& $x1442[0]; list(,$W1441,$S1441,$U1441) = $x1442;
$x1436 = $x1441;
$x1435->prototype = $x1436;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x1445 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1446 = $x1445($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1446->class) && $x1446->class === 'Error' && !isset($x1446->properties['file']) && !isset($x1446->properties['line']) && !isset($x1446->properties['column'])) {$x1446->properties['file'] = '<image>/04_array.js';$x1446->properties['line'] = 407;$x1446->properties['column'] = 9;$x1446->attributes['file'] = $x1446->attributes['line'] = $x1446->attributes['column'] = 0; }
throw new JSException($x1446, 407, 9, '<image>/04_array.js');
}
$x1443 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 407, 9);
$x1444 = $x1443($global, $x1435, $_TypeError, array('Array.prototype.reduceRight(): Array empty, no initial value.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1436 = $x1444;
if (is_object($x1436) && $x1436 !== JS::$undefined) { $x1435 = $x1436; }
if (isset($x1435->class) && $x1435->class === 'Error' && !isset($x1435->properties['file']) && !isset($x1435->properties['line']) && !isset($x1435->properties['column'])) {$x1435->properties['file'] = '<image>/04_array.js';$x1435->properties['line'] = 407;$x1435->properties['column'] = 3;$x1435->attributes['file'] = $x1435->attributes['line'] = $x1435->attributes['column'] = 0; }
throw new JSException($x1435, 407, 3, '<image>/04_array.js');;
};
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = JS::$undefined;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x1450 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('arguments', $global), 412, 6, '<image>/04_array.js');
$_arguments =& $x1450[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x1450;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x1451 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 412, 6, '<image>/04_array.js');
$_ReferenceError =& $x1451[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x1451;
$x1452 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 412, 6);
$x1453 = $x1452($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1453->class) && $x1453->class === 'Error' && !isset($x1453->properties['file']) && !isset($x1453->properties['line']) && !isset($x1453->properties['column'])) {$x1453->properties['file'] = '<image>/04_array.js';$x1453->properties['line'] = 412;$x1453->properties['column'] = 6;$x1453->attributes['file'] = $x1453->attributes['line'] = $x1453->attributes['column'] = 0; }
throw new JSException($x1453, 412, 6, '<image>/04_array.js');
}
unset($x1454, $W1454, $S1454, $U1454);
$x1455 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString('length', $global), 412, 15, '<image>/04_array.js');
$x1454 =& $x1455[0]; list(,$W1454,$S1454,$U1454) = $x1455;
$x1447 = JS::toPrimitive($x1454, $global);
$x1448 = JS::toPrimitive(1, $global);
$x1449 = (is_string($x1448) && is_string($x1447) ? strcmp($x1448, $x1447) < 0 : (!is_nan($x1456 = JS::toNumber($x1448, $global)) && !is_nan($x1457 = JS::toNumber($x1447, $global)) && $x1456 < $x1457));
if (JS::toBoolean($x1449, $global)) {
unset($x1458, $W1458, $S1458, $U1458);
$x1459 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_arguments, JS::toString(1, $global), 413, 20, '<image>/04_array.js');
$x1458 =& $x1459[0]; list(,$W1458,$S1458,$U1458) = $x1459;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1458;
unset($x1460, $W1460, $S1460, $U1460);
$x1461 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 414, 11, '<image>/04_array.js');
$x1460 =& $x1461[0]; list(,$W1460,$S1460,$U1460) = $x1461;
$x1462 = (JS::toNumber($x1460, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1462;;
}
else {
for ($x1463 = 0;; ++$x1463) {
if ($x1463 === 0) {
unset($x1464, $W1464, $S1464, $U1464);
$x1465 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString('length', $global), 417, 16, '<image>/04_array.js');
$x1464 =& $x1465[0]; list(,$W1464,$S1464,$U1464) = $x1465;
$x1466 = (JS::toNumber($x1464, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1466;
}
if ($x1463 !== 0) {
$x1467 = --$_i;
}
$x1469 = JS::toPrimitive($_i, $global);
$x1470 = JS::toPrimitive(0, $global);
$x1471 = !(is_string($x1469) && is_string($x1470) ? strcmp($x1469, $x1470) < 0 : (!is_nan($x1472 = JS::toNumber($x1469, $global)) && !is_nan($x1473 = JS::toNumber($x1470, $global)) && $x1472 < $x1473));
$x1468 = $x1471;
if (JS::toBoolean($x1468, $global)) {
unset($x1475, $W1475, $S1475, $U1475);
$x1476 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 417, 43, '<image>/04_array.js');
$x1475 =& $x1476[0]; list(,$W1475,$S1475,$U1475) = $x1476;
$x1474 = (((gettype($x1475) === gettype(JS::$undefined) && $x1475 === JS::$undefined))|| (((is_float($x1475) || is_int($x1475)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1475 == JS::$undefined));
$x1468 = $x1474; }
if (!JS::toBoolean($x1468, $global)) { break; }

;
};
unset($x1477, $W1477, $S1477, $U1477);
$x1478 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 418, 15, '<image>/04_array.js');
$x1477 =& $x1478[0]; list(,$W1477,$S1477,$U1477) = $x1478;
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1477;
$x1479 = (JS::toNumber($_i, $global) - JS::toNumber(1, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x1479;;
};
for ($x1480 = 0;; ++$x1480) {
if ($x1480 !== 0) {
$x1481 = --$_i;
}
$x1482 = JS::toPrimitive($_i, $global);
$x1483 = JS::toPrimitive(0, $global);
$x1484 = !(is_string($x1482) && is_string($x1483) ? strcmp($x1482, $x1483) < 0 : (!is_nan($x1485 = JS::toNumber($x1482, $global)) && !is_nan($x1486 = JS::toNumber($x1483, $global)) && $x1485 < $x1486));
if (!JS::toBoolean($x1484, $global)) { break; }

unset($x1488, $W1488, $S1488, $U1488);
$x1489 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 423, 11, '<image>/04_array.js');
$x1488 =& $x1489[0]; list(,$W1488,$S1488,$U1488) = $x1489;
$x1487 = !(((gettype($x1488) === gettype(JS::$undefined) && $x1488 === JS::$undefined))|| (((is_float($x1488) || is_int($x1488)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x1488 == JS::$undefined));
if (JS::toBoolean($x1487, $global)) {
unset($x1490, $W1490, $S1490, $U1490);
$x1491 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $leThis, JS::toString($_i, $global), 424, 34, '<image>/04_array.js');
$x1490 =& $x1491[0]; list(,$W1490,$S1490,$U1490) = $x1491;
if (!(is_object($_callbackFn) && isset($_callbackFn->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1494 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 424, 22, '<image>/04_array.js');
$_TypeError =& $x1494[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1494;
$x1495 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1496 = $x1495($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1496->class) && $x1496->class === 'Error' && !isset($x1496->properties['file']) && !isset($x1496->properties['line']) && !isset($x1496->properties['column'])) {$x1496->properties['file'] = '<image>/04_array.js';$x1496->properties['line'] = 424;$x1496->properties['column'] = 22;$x1496->attributes['file'] = $x1496->attributes['line'] = $x1496->attributes['column'] = 0; }
throw new JSException($x1496, 424, 22, '<image>/04_array.js');
}
$x1492 = $_callbackFn->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 424, 22);
$x1493 = $x1492($global, $global, $_callbackFn, array($_value, $x1490, $_i, $leThis), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uvalue) {$global->properties['value'] = $_value; $_value =& $global->properties['value']; }
$_value = $x1493;;
};
};
return $_value;
;
return JS::$undefined;
}
echo 'function _339fc8fcf8563d9777a12bd15b91ae1b_26($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1415=&$scope->properties[\'arguments\'];$x1415->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1415->properties[$i]=$args[$i];$x1415->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'callbackFn\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_callbackFn=&$scope->properties[\'callbackFn\'];$UcallbackFn=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($x1420,$W1420,$S1420,$U1420);$x1421=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),406,10,\'<image>/04_array.js\');$x1420=&$x1421[0];list(,$W1420,$S1420,$U1420)=$x1421;$x1417=JS::toPrimitive($x1420,$global);$x1418=JS::toPrimitive(1,$global);$x1419=(is_string($x1417)&&is_string($x1418)?strcmp($x1417,$x1418)<0:(!is_nan($x1422=JS::toNumber($x1417,$global))&&!is_nan($x1423=JS::toNumber($x1418,$global))&&$x1422<$x1423));$x1416=$x1419;if(JS::toBoolean($x1416,$global)){unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1427=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),406,25,\'<image>/04_array.js\');$_arguments=&$x1427[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1427;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1428=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),406,25,\'<image>/04_array.js\');$_ReferenceError=&$x1428[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1428;$x1429=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',406,25);$x1430=$x1429($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1430->class)&&$x1430->class===\'Error\'&&!isset($x1430->properties[\'file\'])&&!isset($x1430->properties[\'line\'])&&!isset($x1430->properties[\'column\'])){$x1430->properties[\'file\']=\'<image>/04_array.js\';$x1430->properties[\'line\']=406;$x1430->properties[\'column\']=25;$x1430->attributes[\'file\']=$x1430->attributes[\'line\']=$x1430->attributes[\'column\']=0;}throw new JSException($x1430,406,25,\'<image>/04_array.js\');}unset($x1431,$W1431,$S1431,$U1431);$x1432=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),406,34,\'<image>/04_array.js\');$x1431=&$x1432[0];list(,$W1431,$S1431,$U1431)=$x1432;$x1424=JS::toPrimitive($x1431,$global);$x1425=JS::toPrimitive(2,$global);$x1426=(is_string($x1424)&&is_string($x1425)?strcmp($x1424,$x1425)<0:(!is_nan($x1433=JS::toNumber($x1424,$global))&&!is_nan($x1434=JS::toNumber($x1425,$global))&&$x1433<$x1434));$x1416=$x1426;}if(JS::toBoolean($x1416,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1437=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),407,13,\'<image>/04_array.js\');$_TypeError=&$x1437[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1437;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1438=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),407,13,\'<image>/04_array.js\');$_ReferenceError=&$x1438[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1438;$x1439=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,13);$x1440=$x1439($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1440->class)&&$x1440->class===\'Error\'&&!isset($x1440->properties[\'file\'])&&!isset($x1440->properties[\'line\'])&&!isset($x1440->properties[\'column\'])){$x1440->properties[\'file\']=\'<image>/04_array.js\';$x1440->properties[\'line\']=407;$x1440->properties[\'column\']=13;$x1440->attributes[\'file\']=$x1440->attributes[\'line\']=$x1440->attributes[\'column\']=0;}throw new JSException($x1440,407,13,\'<image>/04_array.js\');}$x1435=clone JS::$objectTemplate;unset($x1441,$W1441,$S1441,$U1441);$x1442=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),407,9,\'<image>/04_array.js\');$x1441=&$x1442[0];list(,$W1441,$S1441,$U1441)=$x1442;$x1436=$x1441;$x1435->prototype=$x1436;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x1445=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1446=$x1445($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1446->class)&&$x1446->class===\'Error\'&&!isset($x1446->properties[\'file\'])&&!isset($x1446->properties[\'line\'])&&!isset($x1446->properties[\'column\'])){$x1446->properties[\'file\']=\'<image>/04_array.js\';$x1446->properties[\'line\']=407;$x1446->properties[\'column\']=9;$x1446->attributes[\'file\']=$x1446->attributes[\'line\']=$x1446->attributes[\'column\']=0;}throw new JSException($x1446,407,9,\'<image>/04_array.js\');}$x1443=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',407,9);$x1444=$x1443($global,$x1435,$_TypeError,array(\'Array.prototype.reduceRight(): Array empty, no initial value.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x1436=$x1444;if(is_object($x1436)&&$x1436!==JS::$undefined){$x1435=$x1436;}if(isset($x1435->class)&&$x1435->class===\'Error\'&&!isset($x1435->properties[\'file\'])&&!isset($x1435->properties[\'line\'])&&!isset($x1435->properties[\'column\'])){$x1435->properties[\'file\']=\'<image>/04_array.js\';$x1435->properties[\'line\']=407;$x1435->properties[\'column\']=3;$x1435->attributes[\'file\']=$x1435->attributes[\'line\']=$x1435->attributes[\'column\']=0;}throw new JSException($x1435,407,3,\'<image>/04_array.js\');}$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=JS::$undefined;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x1450=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'arguments\',$global),412,6,\'<image>/04_array.js\');$_arguments=&$x1450[0];list(,$Warguments,$Sarguments,$Uarguments)=$x1450;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x1451=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),412,6,\'<image>/04_array.js\');$_ReferenceError=&$x1451[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x1451;$x1452=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',412,6);$x1453=$x1452($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1453->class)&&$x1453->class===\'Error\'&&!isset($x1453->properties[\'file\'])&&!isset($x1453->properties[\'line\'])&&!isset($x1453->properties[\'column\'])){$x1453->properties[\'file\']=\'<image>/04_array.js\';$x1453->properties[\'line\']=412;$x1453->properties[\'column\']=6;$x1453->attributes[\'file\']=$x1453->attributes[\'line\']=$x1453->attributes[\'column\']=0;}throw new JSException($x1453,412,6,\'<image>/04_array.js\');}unset($x1454,$W1454,$S1454,$U1454);$x1455=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(\'length\',$global),412,15,\'<image>/04_array.js\');$x1454=&$x1455[0];list(,$W1454,$S1454,$U1454)=$x1455;$x1447=JS::toPrimitive($x1454,$global);$x1448=JS::toPrimitive(1,$global);$x1449=(is_string($x1448)&&is_string($x1447)?strcmp($x1448,$x1447)<0:(!is_nan($x1456=JS::toNumber($x1448,$global))&&!is_nan($x1457=JS::toNumber($x1447,$global))&&$x1456<$x1457));if(JS::toBoolean($x1449,$global)){unset($x1458,$W1458,$S1458,$U1458);$x1459=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$_arguments,JS::toString(1,$global),413,20,\'<image>/04_array.js\');$x1458=&$x1459[0];list(,$W1458,$S1458,$U1458)=$x1459;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1458;unset($x1460,$W1460,$S1460,$U1460);$x1461=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),414,11,\'<image>/04_array.js\');$x1460=&$x1461[0];list(,$W1460,$S1460,$U1460)=$x1461;$x1462=(JS::toNumber($x1460,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1462;}else{for($x1463=0;;++$x1463){if($x1463===0){unset($x1464,$W1464,$S1464,$U1464);$x1465=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString(\'length\',$global),417,16,\'<image>/04_array.js\');$x1464=&$x1465[0];list(,$W1464,$S1464,$U1464)=$x1465;$x1466=(JS::toNumber($x1464,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1466;}if($x1463!==0){$x1467=--$_i;}$x1469=JS::toPrimitive($_i,$global);$x1470=JS::toPrimitive(0,$global);$x1471=!(is_string($x1469)&&is_string($x1470)?strcmp($x1469,$x1470)<0:(!is_nan($x1472=JS::toNumber($x1469,$global))&&!is_nan($x1473=JS::toNumber($x1470,$global))&&$x1472<$x1473));$x1468=$x1471;if(JS::toBoolean($x1468,$global)){unset($x1475,$W1475,$S1475,$U1475);$x1476=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),417,43,\'<image>/04_array.js\');$x1475=&$x1476[0];list(,$W1475,$S1475,$U1475)=$x1476;$x1474=(((gettype($x1475)===gettype(JS::$undefined)&&$x1475===JS::$undefined))||(((is_float($x1475)||is_int($x1475))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1475==JS::$undefined));$x1468=$x1474;}if(!JS::toBoolean($x1468,$global)){break;}}unset($x1477,$W1477,$S1477,$U1477);$x1478=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),418,15,\'<image>/04_array.js\');$x1477=&$x1478[0];list(,$W1477,$S1477,$U1477)=$x1478;if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1477;$x1479=(JS::toNumber($_i,$global)-JS::toNumber(1,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x1479;}for($x1480=0;;++$x1480){if($x1480!==0){$x1481=--$_i;}$x1482=JS::toPrimitive($_i,$global);$x1483=JS::toPrimitive(0,$global);$x1484=!(is_string($x1482)&&is_string($x1483)?strcmp($x1482,$x1483)<0:(!is_nan($x1485=JS::toNumber($x1482,$global))&&!is_nan($x1486=JS::toNumber($x1483,$global))&&$x1485<$x1486));if(!JS::toBoolean($x1484,$global)){break;}unset($x1488,$W1488,$S1488,$U1488);$x1489=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),423,11,\'<image>/04_array.js\');$x1488=&$x1489[0];list(,$W1488,$S1488,$U1488)=$x1489;$x1487=!(((gettype($x1488)===gettype(JS::$undefined)&&$x1488===JS::$undefined))||(((is_float($x1488)||is_int($x1488))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x1488==JS::$undefined));if(JS::toBoolean($x1487,$global)){unset($x1490,$W1490,$S1490,$U1490);$x1491=_339fc8fcf8563d9777a12bd15b91ae1b_4($global,$scope,$leThis,JS::toString($_i,$global),424,34,\'<image>/04_array.js\');$x1490=&$x1491[0];list(,$W1490,$S1490,$U1490)=$x1491;if(!(is_object($_callbackFn)&&isset($_callbackFn->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1494=_339fc8fcf8563d9777a12bd15b91ae1b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),424,22,\'<image>/04_array.js\');$_TypeError=&$x1494[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1494;$x1495=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1496=$x1495($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1496->class)&&$x1496->class===\'Error\'&&!isset($x1496->properties[\'file\'])&&!isset($x1496->properties[\'line\'])&&!isset($x1496->properties[\'column\'])){$x1496->properties[\'file\']=\'<image>/04_array.js\';$x1496->properties[\'line\']=424;$x1496->properties[\'column\']=22;$x1496->attributes[\'file\']=$x1496->attributes[\'line\']=$x1496->attributes[\'column\']=0;}throw new JSException($x1496,424,22,\'<image>/04_array.js\');}$x1492=$_callbackFn->call;$global->trace[++$global->trace_sp]=array(\'<image>/04_array.js\',424,22);$x1493=$x1492($global,$global,$_callbackFn,array($_value,$x1490,$_i,$leThis),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uvalue){$global->properties[\'value\']=$_value;$_value=&$global->properties[\'value\'];}$_value=$x1493;}}return$_value;return JS::$undefined;}', "\n";
function _339fc8fcf8563d9777a12bd15b91ae1b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/04_array.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/04_array.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Array;
$x82 = clone JS::$functionTemplate; $x82->call = '_339fc8fcf8563d9777a12bd15b91ae1b_1'; $x82->parameters = array (
); $x82->name = 'Array'; $x82->scope = $scope; $x82->properties['prototype'] = clone JS::$objectTemplate; $x82->attributes['prototype'] = JS::WRITABLE; $x82->properties['prototype']->properties['constructor'] = $x82; $x82->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x82->properties['length'] = 0; $x82->attributes['length'] = 0;
$scope->properties['Array'] = JS::$undefined; $_Array =& $scope->properties['Array'];
$UArray = FALSE;
$_Array = $x82;
$x89 = clone JS::$functionTemplate; $x89->call = '_339fc8fcf8563d9777a12bd15b91ae1b_5'; $x89->parameters = array (
  0 => 'arg',
); $x89->scope = $scope; $x89->properties['prototype'] = clone JS::$objectTemplate; $x89->attributes['prototype'] = JS::WRITABLE; $x89->properties['prototype']->properties['constructor'] = $x89; $x89->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x89->properties['length'] = 1; $x89->attributes['length'] = 0;
$x90 = JS::toString('isArray', $global);
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 30, 15, '<image>/04_array.js');
$_TypeError =& $x91[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x91;
$x92 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x93 = $x92($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/04_array.js';$x93->properties['line'] = 30;$x93->properties['column'] = 15;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 30, 15, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x94, $W94, $S94, $U94);
$x95 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, JS::toString($x90, $global), 30, 15, '<image>/04_array.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if ($U94 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties[$x90] = $x94; $x94 =& $_Array->properties[$x90]; $_Array->attributes[$x90] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U94 = FALSE; $W94 = TRUE; }
if (isset($_Array->class) && $_Array->class === 'Array') {  if (isset($_Array->properties['length']) && $_Array->properties['length'] !== JS::$undefined) { $x97 = $_Array->properties['length']; }  else { $x97 = 0; } }
if (isset($S94)) {
$x98 = $S94->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 30, 15);
$x99 = $x98($global, $_Array, $S94, array($x89), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x96 = $x99;
} else {
if (!$U94) {$x96 = $x89;if ($W94) { $x94 = $x89; }  }
else { $x96 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array') {if (is_int('isArray') && 'isArray' >= $_Array->properties['length']) { $_Array->properties['length'] = 'isArray' + 1; }else if ($x90 === 'length' && is_int($x89) && $x97 > $x89) {  for ($i = $x89; $i < $x97; ++$i) {  unset($_Array->properties[$i], $_Array->attributes[$i]); }}};
$x100 = clone JS::$objectTemplate;
$x101 = JS::toString('prototype', $global);
if ($_Array === JS::$undefined || $_Array === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x102 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 38, 17, '<image>/04_array.js');
$_TypeError =& $x102[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x102;
$x103 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x104 = $x103($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/04_array.js';$x104->properties['line'] = 38;$x104->properties['column'] = 17;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 38, 17, '<image>/04_array.js');
}
$_Array = JS::toObject($_Array, $global);
unset($x105, $W105, $S105, $U105);
$x106 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $_Array, JS::toString($x101, $global), 38, 17, '<image>/04_array.js');
$x105 =& $x106[0]; list(,$W105,$S105,$U105) = $x106;
if ($U105 && (!isset($_Array->extensible) || $_Array->extensible)) {$_Array->properties[$x101] = $x105; $x105 =& $_Array->properties[$x101]; $_Array->attributes[$x101] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U105 = FALSE; $W105 = TRUE; }
if (isset($_Array->class) && $_Array->class === 'Array') {  if (isset($_Array->properties['length']) && $_Array->properties['length'] !== JS::$undefined) { $x108 = $_Array->properties['length']; }  else { $x108 = 0; } }
if (isset($S105)) {
$x109 = $S105->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 38, 17);
$x110 = $x109($global, $_Array, $S105, array($x100), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x107 = $x110;
} else {
if (!$U105) {$x107 = $x100;if ($W105) { $x105 = $x100; }  }
else { $x107 = JS::$undefined; }
}
if (isset($_Array->class) && $_Array->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_Array->properties['length']) { $_Array->properties['length'] = 'prototype' + 1; }else if ($x101 === 'length' && is_int($x100) && $x108 > $x100) {  for ($i = $x100; $i < $x108; ++$i) {  unset($_Array->properties[$i], $_Array->attributes[$i]); }}};
$_Array->prototype =$_Array->properties['prototype'];
unset($_Object, $WObject, $SObject, $UObject);
$x111 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('Object', $global), 40, 50, '<image>/04_array.js');
$_Object =& $x111[0]; list(,$WObject,$SObject,$UObject) = $x111;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x112 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 40, 50, '<image>/04_array.js');
$_ReferenceError =& $x112[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x112;
$x113 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 40, 50);
$x114 = $x113($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x114->class) && $x114->class === 'Error' && !isset($x114->properties['file']) && !isset($x114->properties['line']) && !isset($x114->properties['column'])) {$x114->properties['file'] = '<image>/04_array.js';$x114->properties['line'] = 40;$x114->properties['column'] = 50;$x114->attributes['file'] = $x114->attributes['line'] = $x114->attributes['column'] = 0; }
throw new JSException($x114, 40, 50, '<image>/04_array.js');
}
$_Array->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Array->properties['prototype']->class = 'Array';
$_Array->properties['prototype']->extensible = TRUE;
unset($x115, $W115, $S115, $U115);
$x116 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 43, 6, '<image>/04_array.js');
$x115 =& $x116[0]; list(,$W115,$S115,$U115) = $x116;
$x117 = JS::toString('constructor', $global);
if ($x115 === JS::$undefined || $x115 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x118 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 43, 29, '<image>/04_array.js');
$_TypeError =& $x118[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x118;
$x119 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x120 = $x119($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x120->class) && $x120->class === 'Error' && !isset($x120->properties['file']) && !isset($x120->properties['line']) && !isset($x120->properties['column'])) {$x120->properties['file'] = '<image>/04_array.js';$x120->properties['line'] = 43;$x120->properties['column'] = 29;$x120->attributes['file'] = $x120->attributes['line'] = $x120->attributes['column'] = 0; }
throw new JSException($x120, 43, 29, '<image>/04_array.js');
}
$x115 = JS::toObject($x115, $global);
unset($x121, $W121, $S121, $U121);
$x122 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x115, JS::toString($x117, $global), 43, 29, '<image>/04_array.js');
$x121 =& $x122[0]; list(,$W121,$S121,$U121) = $x122;
if ($U121 && (!isset($x115->extensible) || $x115->extensible)) {$x115->properties[$x117] = $x121; $x121 =& $x115->properties[$x117]; $x115->attributes[$x117] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U121 = FALSE; $W121 = TRUE; }
if (isset($x115->class) && $x115->class === 'Array') {  if (isset($x115->properties['length']) && $x115->properties['length'] !== JS::$undefined) { $x124 = $x115->properties['length']; }  else { $x124 = 0; } }
if (isset($S121)) {
$x125 = $S121->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 43, 29);
$x126 = $x125($global, $x115, $S121, array($_Array), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x123 = $x126;
} else {
if (!$U121) {$x123 = $_Array;if ($W121) { $x121 = $_Array; }  }
else { $x123 = JS::$undefined; }
}
if (isset($x115->class) && $x115->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x115->properties['length']) { $x115->properties['length'] = 'constructor' + 1; }else if ($x117 === 'length' && is_int($_Array) && $x124 > $_Array) {  for ($i = $_Array; $i < $x124; ++$i) {  unset($x115->properties[$i], $x115->attributes[$i]); }}};
$x127 = 0;
unset($x128, $W128, $S128, $U128);
$x129 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 44, 6, '<image>/04_array.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
$x130 = JS::toString('length', $global);
if ($x128 === JS::$undefined || $x128 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x131 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 44, 24, '<image>/04_array.js');
$_TypeError =& $x131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x131;
$x132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x133 = $x132($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x133->class) && $x133->class === 'Error' && !isset($x133->properties['file']) && !isset($x133->properties['line']) && !isset($x133->properties['column'])) {$x133->properties['file'] = '<image>/04_array.js';$x133->properties['line'] = 44;$x133->properties['column'] = 24;$x133->attributes['file'] = $x133->attributes['line'] = $x133->attributes['column'] = 0; }
throw new JSException($x133, 44, 24, '<image>/04_array.js');
}
$x128 = JS::toObject($x128, $global);
unset($x134, $W134, $S134, $U134);
$x135 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x128, JS::toString($x130, $global), 44, 24, '<image>/04_array.js');
$x134 =& $x135[0]; list(,$W134,$S134,$U134) = $x135;
if ($U134 && (!isset($x128->extensible) || $x128->extensible)) {$x128->properties[$x130] = $x134; $x134 =& $x128->properties[$x130]; $x128->attributes[$x130] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U134 = FALSE; $W134 = TRUE; }
if (isset($x128->class) && $x128->class === 'Array') {  if (isset($x128->properties['length']) && $x128->properties['length'] !== JS::$undefined) { $x137 = $x128->properties['length']; }  else { $x137 = 0; } }
if (isset($S134)) {
$x138 = $S134->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 44, 24);
$x139 = $x138($global, $x128, $S134, array($x127), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x136 = $x139;
} else {
if (!$U134) {$x136 = $x127;if ($W134) { $x134 = $x127; }  }
else { $x136 = JS::$undefined; }
}
if (isset($x128->class) && $x128->class === 'Array') {if (is_int('length') && 'length' >= $x128->properties['length']) { $x128->properties['length'] = 'length' + 1; }else if ($x130 === 'length' && is_int($x127) && $x137 > $x127) {  for ($i = $x127; $i < $x137; ++$i) {  unset($x128->properties[$i], $x128->attributes[$i]); }}};
$x153 = clone JS::$functionTemplate; $x153->call = '_339fc8fcf8563d9777a12bd15b91ae1b_6'; $x153->parameters = array (
); $x153->scope = $scope; $x153->properties['prototype'] = clone JS::$objectTemplate; $x153->attributes['prototype'] = JS::WRITABLE; $x153->properties['prototype']->properties['constructor'] = $x153; $x153->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x153->properties['length'] = 0; $x153->attributes['length'] = 0;
unset($x154, $W154, $S154, $U154);
$x155 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 46, 6, '<image>/04_array.js');
$x154 =& $x155[0]; list(,$W154,$S154,$U154) = $x155;
$x156 = JS::toString('toString', $global);
if ($x154 === JS::$undefined || $x154 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 46, 26, '<image>/04_array.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x159 = $x158($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error' && !isset($x159->properties['file']) && !isset($x159->properties['line']) && !isset($x159->properties['column'])) {$x159->properties['file'] = '<image>/04_array.js';$x159->properties['line'] = 46;$x159->properties['column'] = 26;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 46, 26, '<image>/04_array.js');
}
$x154 = JS::toObject($x154, $global);
unset($x160, $W160, $S160, $U160);
$x161 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x154, JS::toString($x156, $global), 46, 26, '<image>/04_array.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
if ($U160 && (!isset($x154->extensible) || $x154->extensible)) {$x154->properties[$x156] = $x160; $x160 =& $x154->properties[$x156]; $x154->attributes[$x156] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U160 = FALSE; $W160 = TRUE; }
if (isset($x154->class) && $x154->class === 'Array') {  if (isset($x154->properties['length']) && $x154->properties['length'] !== JS::$undefined) { $x163 = $x154->properties['length']; }  else { $x163 = 0; } }
if (isset($S160)) {
$x164 = $S160->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 46, 26);
$x165 = $x164($global, $x154, $S160, array($x153), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x162 = $x165;
} else {
if (!$U160) {$x162 = $x153;if ($W160) { $x160 = $x153; }  }
else { $x162 = JS::$undefined; }
}
if (isset($x154->class) && $x154->class === 'Array') {if (is_int('toString') && 'toString' >= $x154->properties['length']) { $x154->properties['length'] = 'toString' + 1; }else if ($x156 === 'length' && is_int($x153) && $x163 > $x153) {  for ($i = $x153; $i < $x163; ++$i) {  unset($x154->properties[$i], $x154->attributes[$i]); }}};
unset($x166, $W166, $S166, $U166);
$x167 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 50, 39, '<image>/04_array.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
unset($x168, $W168, $S168, $U168);
$x169 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $x166, JS::toString('toString', $global), 50, 49, '<image>/04_array.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
unset($x170, $W170, $S170, $U170);
$x171 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 50, 6, '<image>/04_array.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
$x172 = JS::toString('toLocaleString', $global);
if ($x170 === JS::$undefined || $x170 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x173 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 50, 32, '<image>/04_array.js');
$_TypeError =& $x173[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x173;
$x174 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x175 = $x174($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x175->class) && $x175->class === 'Error' && !isset($x175->properties['file']) && !isset($x175->properties['line']) && !isset($x175->properties['column'])) {$x175->properties['file'] = '<image>/04_array.js';$x175->properties['line'] = 50;$x175->properties['column'] = 32;$x175->attributes['file'] = $x175->attributes['line'] = $x175->attributes['column'] = 0; }
throw new JSException($x175, 50, 32, '<image>/04_array.js');
}
$x170 = JS::toObject($x170, $global);
unset($x176, $W176, $S176, $U176);
$x177 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x170, JS::toString($x172, $global), 50, 32, '<image>/04_array.js');
$x176 =& $x177[0]; list(,$W176,$S176,$U176) = $x177;
if ($U176 && (!isset($x170->extensible) || $x170->extensible)) {$x170->properties[$x172] = $x176; $x176 =& $x170->properties[$x172]; $x170->attributes[$x172] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U176 = FALSE; $W176 = TRUE; }
if (isset($x170->class) && $x170->class === 'Array') {  if (isset($x170->properties['length']) && $x170->properties['length'] !== JS::$undefined) { $x179 = $x170->properties['length']; }  else { $x179 = 0; } }
if (isset($S176)) {
$x180 = $S176->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 50, 32);
$x181 = $x180($global, $x170, $S176, array($x168), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x178 = $x181;
} else {
if (!$U176) {$x178 = $x168;if ($W176) { $x176 = $x168; }  }
else { $x178 = JS::$undefined; }
}
if (isset($x170->class) && $x170->class === 'Array') {if (is_int('toLocaleString') && 'toLocaleString' >= $x170->properties['length']) { $x170->properties['length'] = 'toLocaleString' + 1; }else if ($x172 === 'length' && is_int($x168) && $x179 > $x168) {  for ($i = $x168; $i < $x179; ++$i) {  unset($x170->properties[$i], $x170->attributes[$i]); }}};
$x276 = clone JS::$functionTemplate; $x276->call = '_339fc8fcf8563d9777a12bd15b91ae1b_7'; $x276->parameters = array (
  0 => 'item',
); $x276->scope = $scope; $x276->properties['prototype'] = clone JS::$objectTemplate; $x276->attributes['prototype'] = JS::WRITABLE; $x276->properties['prototype']->properties['constructor'] = $x276; $x276->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x276->properties['length'] = 1; $x276->attributes['length'] = 0;
unset($x277, $W277, $S277, $U277);
$x278 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 52, 6, '<image>/04_array.js');
$x277 =& $x278[0]; list(,$W277,$S277,$U277) = $x278;
$x279 = JS::toString('concat', $global);
if ($x277 === JS::$undefined || $x277 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x280 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 52, 24, '<image>/04_array.js');
$_TypeError =& $x280[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x280;
$x281 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x282 = $x281($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x282->class) && $x282->class === 'Error' && !isset($x282->properties['file']) && !isset($x282->properties['line']) && !isset($x282->properties['column'])) {$x282->properties['file'] = '<image>/04_array.js';$x282->properties['line'] = 52;$x282->properties['column'] = 24;$x282->attributes['file'] = $x282->attributes['line'] = $x282->attributes['column'] = 0; }
throw new JSException($x282, 52, 24, '<image>/04_array.js');
}
$x277 = JS::toObject($x277, $global);
unset($x283, $W283, $S283, $U283);
$x284 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x277, JS::toString($x279, $global), 52, 24, '<image>/04_array.js');
$x283 =& $x284[0]; list(,$W283,$S283,$U283) = $x284;
if ($U283 && (!isset($x277->extensible) || $x277->extensible)) {$x277->properties[$x279] = $x283; $x283 =& $x277->properties[$x279]; $x277->attributes[$x279] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U283 = FALSE; $W283 = TRUE; }
if (isset($x277->class) && $x277->class === 'Array') {  if (isset($x277->properties['length']) && $x277->properties['length'] !== JS::$undefined) { $x286 = $x277->properties['length']; }  else { $x286 = 0; } }
if (isset($S283)) {
$x287 = $S283->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 52, 24);
$x288 = $x287($global, $x277, $S283, array($x276), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x285 = $x288;
} else {
if (!$U283) {$x285 = $x276;if ($W283) { $x283 = $x276; }  }
else { $x285 = JS::$undefined; }
}
if (isset($x277->class) && $x277->class === 'Array') {if (is_int('concat') && 'concat' >= $x277->properties['length']) { $x277->properties['length'] = 'concat' + 1; }else if ($x279 === 'length' && is_int($x276) && $x286 > $x276) {  for ($i = $x276; $i < $x286; ++$i) {  unset($x277->properties[$i], $x277->attributes[$i]); }}};
$x320 = clone JS::$functionTemplate; $x320->call = '_339fc8fcf8563d9777a12bd15b91ae1b_8'; $x320->parameters = array (
  0 => 'separator',
); $x320->scope = $scope; $x320->properties['prototype'] = clone JS::$objectTemplate; $x320->attributes['prototype'] = JS::WRITABLE; $x320->properties['prototype']->properties['constructor'] = $x320; $x320->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x320->properties['length'] = 1; $x320->attributes['length'] = 0;
unset($x321, $W321, $S321, $U321);
$x322 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 73, 6, '<image>/04_array.js');
$x321 =& $x322[0]; list(,$W321,$S321,$U321) = $x322;
$x323 = JS::toString('join', $global);
if ($x321 === JS::$undefined || $x321 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x324 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 73, 22, '<image>/04_array.js');
$_TypeError =& $x324[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x324;
$x325 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x326 = $x325($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x326->class) && $x326->class === 'Error' && !isset($x326->properties['file']) && !isset($x326->properties['line']) && !isset($x326->properties['column'])) {$x326->properties['file'] = '<image>/04_array.js';$x326->properties['line'] = 73;$x326->properties['column'] = 22;$x326->attributes['file'] = $x326->attributes['line'] = $x326->attributes['column'] = 0; }
throw new JSException($x326, 73, 22, '<image>/04_array.js');
}
$x321 = JS::toObject($x321, $global);
unset($x327, $W327, $S327, $U327);
$x328 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x321, JS::toString($x323, $global), 73, 22, '<image>/04_array.js');
$x327 =& $x328[0]; list(,$W327,$S327,$U327) = $x328;
if ($U327 && (!isset($x321->extensible) || $x321->extensible)) {$x321->properties[$x323] = $x327; $x327 =& $x321->properties[$x323]; $x321->attributes[$x323] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U327 = FALSE; $W327 = TRUE; }
if (isset($x321->class) && $x321->class === 'Array') {  if (isset($x321->properties['length']) && $x321->properties['length'] !== JS::$undefined) { $x330 = $x321->properties['length']; }  else { $x330 = 0; } }
if (isset($S327)) {
$x331 = $S327->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 73, 22);
$x332 = $x331($global, $x321, $S327, array($x320), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x329 = $x332;
} else {
if (!$U327) {$x329 = $x320;if ($W327) { $x327 = $x320; }  }
else { $x329 = JS::$undefined; }
}
if (isset($x321->class) && $x321->class === 'Array') {if (is_int('join') && 'join' >= $x321->properties['length']) { $x321->properties['length'] = 'join' + 1; }else if ($x323 === 'length' && is_int($x320) && $x330 > $x320) {  for ($i = $x320; $i < $x330; ++$i) {  unset($x321->properties[$i], $x321->attributes[$i]); }}};
$x362 = clone JS::$functionTemplate; $x362->call = '_339fc8fcf8563d9777a12bd15b91ae1b_9'; $x362->parameters = array (
); $x362->scope = $scope; $x362->properties['prototype'] = clone JS::$objectTemplate; $x362->attributes['prototype'] = JS::WRITABLE; $x362->properties['prototype']->properties['constructor'] = $x362; $x362->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x362->properties['length'] = 0; $x362->attributes['length'] = 0;
unset($x363, $W363, $S363, $U363);
$x364 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 99, 6, '<image>/04_array.js');
$x363 =& $x364[0]; list(,$W363,$S363,$U363) = $x364;
$x365 = JS::toString('pop', $global);
if ($x363 === JS::$undefined || $x363 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x366 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 99, 21, '<image>/04_array.js');
$_TypeError =& $x366[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x366;
$x367 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x368 = $x367($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x368->class) && $x368->class === 'Error' && !isset($x368->properties['file']) && !isset($x368->properties['line']) && !isset($x368->properties['column'])) {$x368->properties['file'] = '<image>/04_array.js';$x368->properties['line'] = 99;$x368->properties['column'] = 21;$x368->attributes['file'] = $x368->attributes['line'] = $x368->attributes['column'] = 0; }
throw new JSException($x368, 99, 21, '<image>/04_array.js');
}
$x363 = JS::toObject($x363, $global);
unset($x369, $W369, $S369, $U369);
$x370 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x363, JS::toString($x365, $global), 99, 21, '<image>/04_array.js');
$x369 =& $x370[0]; list(,$W369,$S369,$U369) = $x370;
if ($U369 && (!isset($x363->extensible) || $x363->extensible)) {$x363->properties[$x365] = $x369; $x369 =& $x363->properties[$x365]; $x363->attributes[$x365] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U369 = FALSE; $W369 = TRUE; }
if (isset($x363->class) && $x363->class === 'Array') {  if (isset($x363->properties['length']) && $x363->properties['length'] !== JS::$undefined) { $x372 = $x363->properties['length']; }  else { $x372 = 0; } }
if (isset($S369)) {
$x373 = $S369->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 99, 21);
$x374 = $x373($global, $x363, $S369, array($x362), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x371 = $x374;
} else {
if (!$U369) {$x371 = $x362;if ($W369) { $x369 = $x362; }  }
else { $x371 = JS::$undefined; }
}
if (isset($x363->class) && $x363->class === 'Array') {if (is_int('pop') && 'pop' >= $x363->properties['length']) { $x363->properties['length'] = 'pop' + 1; }else if ($x365 === 'length' && is_int($x362) && $x372 > $x362) {  for ($i = $x362; $i < $x372; ++$i) {  unset($x363->properties[$i], $x363->attributes[$i]); }}};
$x406 = clone JS::$functionTemplate; $x406->call = '_339fc8fcf8563d9777a12bd15b91ae1b_10'; $x406->parameters = array (
  0 => 'item',
); $x406->scope = $scope; $x406->properties['prototype'] = clone JS::$objectTemplate; $x406->attributes['prototype'] = JS::WRITABLE; $x406->properties['prototype']->properties['constructor'] = $x406; $x406->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x406->properties['length'] = 1; $x406->attributes['length'] = 0;
unset($x407, $W407, $S407, $U407);
$x408 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 111, 6, '<image>/04_array.js');
$x407 =& $x408[0]; list(,$W407,$S407,$U407) = $x408;
$x409 = JS::toString('push', $global);
if ($x407 === JS::$undefined || $x407 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x410 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 111, 22, '<image>/04_array.js');
$_TypeError =& $x410[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x410;
$x411 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x412 = $x411($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x412->class) && $x412->class === 'Error' && !isset($x412->properties['file']) && !isset($x412->properties['line']) && !isset($x412->properties['column'])) {$x412->properties['file'] = '<image>/04_array.js';$x412->properties['line'] = 111;$x412->properties['column'] = 22;$x412->attributes['file'] = $x412->attributes['line'] = $x412->attributes['column'] = 0; }
throw new JSException($x412, 111, 22, '<image>/04_array.js');
}
$x407 = JS::toObject($x407, $global);
unset($x413, $W413, $S413, $U413);
$x414 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x407, JS::toString($x409, $global), 111, 22, '<image>/04_array.js');
$x413 =& $x414[0]; list(,$W413,$S413,$U413) = $x414;
if ($U413 && (!isset($x407->extensible) || $x407->extensible)) {$x407->properties[$x409] = $x413; $x413 =& $x407->properties[$x409]; $x407->attributes[$x409] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U413 = FALSE; $W413 = TRUE; }
if (isset($x407->class) && $x407->class === 'Array') {  if (isset($x407->properties['length']) && $x407->properties['length'] !== JS::$undefined) { $x416 = $x407->properties['length']; }  else { $x416 = 0; } }
if (isset($S413)) {
$x417 = $S413->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 111, 22);
$x418 = $x417($global, $x407, $S413, array($x406), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x415 = $x418;
} else {
if (!$U413) {$x415 = $x406;if ($W413) { $x413 = $x406; }  }
else { $x415 = JS::$undefined; }
}
if (isset($x407->class) && $x407->class === 'Array') {if (is_int('push') && 'push' >= $x407->properties['length']) { $x407->properties['length'] = 'push' + 1; }else if ($x409 === 'length' && is_int($x406) && $x416 > $x406) {  for ($i = $x406; $i < $x416; ++$i) {  unset($x407->properties[$i], $x407->attributes[$i]); }}};
$x455 = clone JS::$functionTemplate; $x455->call = '_339fc8fcf8563d9777a12bd15b91ae1b_11'; $x455->parameters = array (
); $x455->scope = $scope; $x455->properties['prototype'] = clone JS::$objectTemplate; $x455->attributes['prototype'] = JS::WRITABLE; $x455->properties['prototype']->properties['constructor'] = $x455; $x455->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x455->properties['length'] = 0; $x455->attributes['length'] = 0;
unset($x456, $W456, $S456, $U456);
$x457 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 119, 6, '<image>/04_array.js');
$x456 =& $x457[0]; list(,$W456,$S456,$U456) = $x457;
$x458 = JS::toString('reverse', $global);
if ($x456 === JS::$undefined || $x456 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x459 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 119, 25, '<image>/04_array.js');
$_TypeError =& $x459[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x459;
$x460 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x461 = $x460($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x461->class) && $x461->class === 'Error' && !isset($x461->properties['file']) && !isset($x461->properties['line']) && !isset($x461->properties['column'])) {$x461->properties['file'] = '<image>/04_array.js';$x461->properties['line'] = 119;$x461->properties['column'] = 25;$x461->attributes['file'] = $x461->attributes['line'] = $x461->attributes['column'] = 0; }
throw new JSException($x461, 119, 25, '<image>/04_array.js');
}
$x456 = JS::toObject($x456, $global);
unset($x462, $W462, $S462, $U462);
$x463 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x456, JS::toString($x458, $global), 119, 25, '<image>/04_array.js');
$x462 =& $x463[0]; list(,$W462,$S462,$U462) = $x463;
if ($U462 && (!isset($x456->extensible) || $x456->extensible)) {$x456->properties[$x458] = $x462; $x462 =& $x456->properties[$x458]; $x456->attributes[$x458] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U462 = FALSE; $W462 = TRUE; }
if (isset($x456->class) && $x456->class === 'Array') {  if (isset($x456->properties['length']) && $x456->properties['length'] !== JS::$undefined) { $x465 = $x456->properties['length']; }  else { $x465 = 0; } }
if (isset($S462)) {
$x466 = $S462->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 119, 25);
$x467 = $x466($global, $x456, $S462, array($x455), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x464 = $x467;
} else {
if (!$U462) {$x464 = $x455;if ($W462) { $x462 = $x455; }  }
else { $x464 = JS::$undefined; }
}
if (isset($x456->class) && $x456->class === 'Array') {if (is_int('reverse') && 'reverse' >= $x456->properties['length']) { $x456->properties['length'] = 'reverse' + 1; }else if ($x458 === 'length' && is_int($x455) && $x465 > $x455) {  for ($i = $x455; $i < $x465; ++$i) {  unset($x456->properties[$i], $x456->attributes[$i]); }}};
$x513 = clone JS::$functionTemplate; $x513->call = '_339fc8fcf8563d9777a12bd15b91ae1b_12'; $x513->parameters = array (
); $x513->scope = $scope; $x513->properties['prototype'] = clone JS::$objectTemplate; $x513->attributes['prototype'] = JS::WRITABLE; $x513->properties['prototype']->properties['constructor'] = $x513; $x513->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x513->properties['length'] = 0; $x513->attributes['length'] = 0;
unset($x514, $W514, $S514, $U514);
$x515 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 129, 6, '<image>/04_array.js');
$x514 =& $x515[0]; list(,$W514,$S514,$U514) = $x515;
$x516 = JS::toString('shift', $global);
if ($x514 === JS::$undefined || $x514 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x517 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 129, 23, '<image>/04_array.js');
$_TypeError =& $x517[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x517;
$x518 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x519 = $x518($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x519->class) && $x519->class === 'Error' && !isset($x519->properties['file']) && !isset($x519->properties['line']) && !isset($x519->properties['column'])) {$x519->properties['file'] = '<image>/04_array.js';$x519->properties['line'] = 129;$x519->properties['column'] = 23;$x519->attributes['file'] = $x519->attributes['line'] = $x519->attributes['column'] = 0; }
throw new JSException($x519, 129, 23, '<image>/04_array.js');
}
$x514 = JS::toObject($x514, $global);
unset($x520, $W520, $S520, $U520);
$x521 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x514, JS::toString($x516, $global), 129, 23, '<image>/04_array.js');
$x520 =& $x521[0]; list(,$W520,$S520,$U520) = $x521;
if ($U520 && (!isset($x514->extensible) || $x514->extensible)) {$x514->properties[$x516] = $x520; $x520 =& $x514->properties[$x516]; $x514->attributes[$x516] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U520 = FALSE; $W520 = TRUE; }
if (isset($x514->class) && $x514->class === 'Array') {  if (isset($x514->properties['length']) && $x514->properties['length'] !== JS::$undefined) { $x523 = $x514->properties['length']; }  else { $x523 = 0; } }
if (isset($S520)) {
$x524 = $S520->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 129, 23);
$x525 = $x524($global, $x514, $S520, array($x513), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x522 = $x525;
} else {
if (!$U520) {$x522 = $x513;if ($W520) { $x520 = $x513; }  }
else { $x522 = JS::$undefined; }
}
if (isset($x514->class) && $x514->class === 'Array') {if (is_int('shift') && 'shift' >= $x514->properties['length']) { $x514->properties['length'] = 'shift' + 1; }else if ($x516 === 'length' && is_int($x513) && $x523 > $x513) {  for ($i = $x513; $i < $x523; ++$i) {  unset($x514->properties[$i], $x514->attributes[$i]); }}};
$x588 = clone JS::$functionTemplate; $x588->call = '_339fc8fcf8563d9777a12bd15b91ae1b_13'; $x588->parameters = array (
  0 => 'start',
  1 => 'end',
); $x588->scope = $scope; $x588->properties['prototype'] = clone JS::$objectTemplate; $x588->attributes['prototype'] = JS::WRITABLE; $x588->properties['prototype']->properties['constructor'] = $x588; $x588->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x588->properties['length'] = 2; $x588->attributes['length'] = 0;
unset($x589, $W589, $S589, $U589);
$x590 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 145, 6, '<image>/04_array.js');
$x589 =& $x590[0]; list(,$W589,$S589,$U589) = $x590;
$x591 = JS::toString('slice', $global);
if ($x589 === JS::$undefined || $x589 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x592 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 145, 23, '<image>/04_array.js');
$_TypeError =& $x592[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x592;
$x593 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x594 = $x593($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x594->class) && $x594->class === 'Error' && !isset($x594->properties['file']) && !isset($x594->properties['line']) && !isset($x594->properties['column'])) {$x594->properties['file'] = '<image>/04_array.js';$x594->properties['line'] = 145;$x594->properties['column'] = 23;$x594->attributes['file'] = $x594->attributes['line'] = $x594->attributes['column'] = 0; }
throw new JSException($x594, 145, 23, '<image>/04_array.js');
}
$x589 = JS::toObject($x589, $global);
unset($x595, $W595, $S595, $U595);
$x596 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x589, JS::toString($x591, $global), 145, 23, '<image>/04_array.js');
$x595 =& $x596[0]; list(,$W595,$S595,$U595) = $x596;
if ($U595 && (!isset($x589->extensible) || $x589->extensible)) {$x589->properties[$x591] = $x595; $x595 =& $x589->properties[$x591]; $x589->attributes[$x591] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U595 = FALSE; $W595 = TRUE; }
if (isset($x589->class) && $x589->class === 'Array') {  if (isset($x589->properties['length']) && $x589->properties['length'] !== JS::$undefined) { $x598 = $x589->properties['length']; }  else { $x598 = 0; } }
if (isset($S595)) {
$x599 = $S595->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 145, 23);
$x600 = $x599($global, $x589, $S595, array($x588), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x597 = $x600;
} else {
if (!$U595) {$x597 = $x588;if ($W595) { $x595 = $x588; }  }
else { $x597 = JS::$undefined; }
}
if (isset($x589->class) && $x589->class === 'Array') {if (is_int('slice') && 'slice' >= $x589->properties['length']) { $x589->properties['length'] = 'slice' + 1; }else if ($x591 === 'length' && is_int($x588) && $x598 > $x588) {  for ($i = $x588; $i < $x598; ++$i) {  unset($x589->properties[$i], $x589->attributes[$i]); }}};
$x756 = clone JS::$functionTemplate; $x756->call = '_339fc8fcf8563d9777a12bd15b91ae1b_14'; $x756->parameters = array (
  0 => 'compareFn',
); $x756->scope = $scope; $x756->properties['prototype'] = clone JS::$objectTemplate; $x756->attributes['prototype'] = JS::WRITABLE; $x756->properties['prototype']->properties['constructor'] = $x756; $x756->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x756->properties['length'] = 1; $x756->attributes['length'] = 0;
unset($x757, $W757, $S757, $U757);
$x758 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 171, 6, '<image>/04_array.js');
$x757 =& $x758[0]; list(,$W757,$S757,$U757) = $x758;
$x759 = JS::toString('sort', $global);
if ($x757 === JS::$undefined || $x757 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x760 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 171, 22, '<image>/04_array.js');
$_TypeError =& $x760[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x760;
$x761 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x762 = $x761($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x762->class) && $x762->class === 'Error' && !isset($x762->properties['file']) && !isset($x762->properties['line']) && !isset($x762->properties['column'])) {$x762->properties['file'] = '<image>/04_array.js';$x762->properties['line'] = 171;$x762->properties['column'] = 22;$x762->attributes['file'] = $x762->attributes['line'] = $x762->attributes['column'] = 0; }
throw new JSException($x762, 171, 22, '<image>/04_array.js');
}
$x757 = JS::toObject($x757, $global);
unset($x763, $W763, $S763, $U763);
$x764 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x757, JS::toString($x759, $global), 171, 22, '<image>/04_array.js');
$x763 =& $x764[0]; list(,$W763,$S763,$U763) = $x764;
if ($U763 && (!isset($x757->extensible) || $x757->extensible)) {$x757->properties[$x759] = $x763; $x763 =& $x757->properties[$x759]; $x757->attributes[$x759] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U763 = FALSE; $W763 = TRUE; }
if (isset($x757->class) && $x757->class === 'Array') {  if (isset($x757->properties['length']) && $x757->properties['length'] !== JS::$undefined) { $x766 = $x757->properties['length']; }  else { $x766 = 0; } }
if (isset($S763)) {
$x767 = $S763->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 171, 22);
$x768 = $x767($global, $x757, $S763, array($x756), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x765 = $x768;
} else {
if (!$U763) {$x765 = $x756;if ($W763) { $x763 = $x756; }  }
else { $x765 = JS::$undefined; }
}
if (isset($x757->class) && $x757->class === 'Array') {if (is_int('sort') && 'sort' >= $x757->properties['length']) { $x757->properties['length'] = 'sort' + 1; }else if ($x759 === 'length' && is_int($x756) && $x766 > $x756) {  for ($i = $x756; $i < $x766; ++$i) {  unset($x757->properties[$i], $x757->attributes[$i]); }}};
$x835 = clone JS::$functionTemplate; $x835->call = '_339fc8fcf8563d9777a12bd15b91ae1b_16'; $x835->parameters = array (
  0 => 'start',
  1 => 'deleteCount',
); $x835->scope = $scope; $x835->properties['prototype'] = clone JS::$objectTemplate; $x835->attributes['prototype'] = JS::WRITABLE; $x835->properties['prototype']->properties['constructor'] = $x835; $x835->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x835->properties['length'] = 2; $x835->attributes['length'] = 0;
unset($x836, $W836, $S836, $U836);
$x837 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 220, 6, '<image>/04_array.js');
$x836 =& $x837[0]; list(,$W836,$S836,$U836) = $x837;
$x838 = JS::toString('splice', $global);
if ($x836 === JS::$undefined || $x836 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x839 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 220, 24, '<image>/04_array.js');
$_TypeError =& $x839[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x839;
$x840 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x841 = $x840($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x841->class) && $x841->class === 'Error' && !isset($x841->properties['file']) && !isset($x841->properties['line']) && !isset($x841->properties['column'])) {$x841->properties['file'] = '<image>/04_array.js';$x841->properties['line'] = 220;$x841->properties['column'] = 24;$x841->attributes['file'] = $x841->attributes['line'] = $x841->attributes['column'] = 0; }
throw new JSException($x841, 220, 24, '<image>/04_array.js');
}
$x836 = JS::toObject($x836, $global);
unset($x842, $W842, $S842, $U842);
$x843 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x836, JS::toString($x838, $global), 220, 24, '<image>/04_array.js');
$x842 =& $x843[0]; list(,$W842,$S842,$U842) = $x843;
if ($U842 && (!isset($x836->extensible) || $x836->extensible)) {$x836->properties[$x838] = $x842; $x842 =& $x836->properties[$x838]; $x836->attributes[$x838] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U842 = FALSE; $W842 = TRUE; }
if (isset($x836->class) && $x836->class === 'Array') {  if (isset($x836->properties['length']) && $x836->properties['length'] !== JS::$undefined) { $x845 = $x836->properties['length']; }  else { $x845 = 0; } }
if (isset($S842)) {
$x846 = $S842->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 220, 24);
$x847 = $x846($global, $x836, $S842, array($x835), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x844 = $x847;
} else {
if (!$U842) {$x844 = $x835;if ($W842) { $x842 = $x835; }  }
else { $x844 = JS::$undefined; }
}
if (isset($x836->class) && $x836->class === 'Array') {if (is_int('splice') && 'splice' >= $x836->properties['length']) { $x836->properties['length'] = 'splice' + 1; }else if ($x838 === 'length' && is_int($x835) && $x845 > $x835) {  for ($i = $x835; $i < $x845; ++$i) {  unset($x836->properties[$i], $x836->attributes[$i]); }}};
$x906 = clone JS::$functionTemplate; $x906->call = '_339fc8fcf8563d9777a12bd15b91ae1b_17'; $x906->parameters = array (
  0 => 'item',
); $x906->scope = $scope; $x906->properties['prototype'] = clone JS::$objectTemplate; $x906->attributes['prototype'] = JS::WRITABLE; $x906->properties['prototype']->properties['constructor'] = $x906; $x906->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x906->properties['length'] = 1; $x906->attributes['length'] = 0;
unset($x907, $W907, $S907, $U907);
$x908 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 257, 6, '<image>/04_array.js');
$x907 =& $x908[0]; list(,$W907,$S907,$U907) = $x908;
$x909 = JS::toString('unshift', $global);
if ($x907 === JS::$undefined || $x907 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x910 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 257, 25, '<image>/04_array.js');
$_TypeError =& $x910[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x910;
$x911 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x912 = $x911($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x912->class) && $x912->class === 'Error' && !isset($x912->properties['file']) && !isset($x912->properties['line']) && !isset($x912->properties['column'])) {$x912->properties['file'] = '<image>/04_array.js';$x912->properties['line'] = 257;$x912->properties['column'] = 25;$x912->attributes['file'] = $x912->attributes['line'] = $x912->attributes['column'] = 0; }
throw new JSException($x912, 257, 25, '<image>/04_array.js');
}
$x907 = JS::toObject($x907, $global);
unset($x913, $W913, $S913, $U913);
$x914 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x907, JS::toString($x909, $global), 257, 25, '<image>/04_array.js');
$x913 =& $x914[0]; list(,$W913,$S913,$U913) = $x914;
if ($U913 && (!isset($x907->extensible) || $x907->extensible)) {$x907->properties[$x909] = $x913; $x913 =& $x907->properties[$x909]; $x907->attributes[$x909] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U913 = FALSE; $W913 = TRUE; }
if (isset($x907->class) && $x907->class === 'Array') {  if (isset($x907->properties['length']) && $x907->properties['length'] !== JS::$undefined) { $x916 = $x907->properties['length']; }  else { $x916 = 0; } }
if (isset($S913)) {
$x917 = $S913->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 257, 25);
$x918 = $x917($global, $x907, $S913, array($x906), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x915 = $x918;
} else {
if (!$U913) {$x915 = $x906;if ($W913) { $x913 = $x906; }  }
else { $x915 = JS::$undefined; }
}
if (isset($x907->class) && $x907->class === 'Array') {if (is_int('unshift') && 'unshift' >= $x907->properties['length']) { $x907->properties['length'] = 'unshift' + 1; }else if ($x909 === 'length' && is_int($x906) && $x916 > $x906) {  for ($i = $x906; $i < $x916; ++$i) {  unset($x907->properties[$i], $x907->attributes[$i]); }}};
$x958 = clone JS::$functionTemplate; $x958->call = '_339fc8fcf8563d9777a12bd15b91ae1b_18'; $x958->parameters = array (
  0 => 'search',
  1 => 'from',
); $x958->scope = $scope; $x958->properties['prototype'] = clone JS::$objectTemplate; $x958->attributes['prototype'] = JS::WRITABLE; $x958->properties['prototype']->properties['constructor'] = $x958; $x958->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x958->properties['length'] = 2; $x958->attributes['length'] = 0;
unset($x959, $W959, $S959, $U959);
$x960 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 269, 6, '<image>/04_array.js');
$x959 =& $x960[0]; list(,$W959,$S959,$U959) = $x960;
$x961 = JS::toString('indexOf', $global);
if ($x959 === JS::$undefined || $x959 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x962 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 269, 25, '<image>/04_array.js');
$_TypeError =& $x962[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x962;
$x963 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x964 = $x963($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x964->class) && $x964->class === 'Error' && !isset($x964->properties['file']) && !isset($x964->properties['line']) && !isset($x964->properties['column'])) {$x964->properties['file'] = '<image>/04_array.js';$x964->properties['line'] = 269;$x964->properties['column'] = 25;$x964->attributes['file'] = $x964->attributes['line'] = $x964->attributes['column'] = 0; }
throw new JSException($x964, 269, 25, '<image>/04_array.js');
}
$x959 = JS::toObject($x959, $global);
unset($x965, $W965, $S965, $U965);
$x966 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x959, JS::toString($x961, $global), 269, 25, '<image>/04_array.js');
$x965 =& $x966[0]; list(,$W965,$S965,$U965) = $x966;
if ($U965 && (!isset($x959->extensible) || $x959->extensible)) {$x959->properties[$x961] = $x965; $x965 =& $x959->properties[$x961]; $x959->attributes[$x961] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U965 = FALSE; $W965 = TRUE; }
if (isset($x959->class) && $x959->class === 'Array') {  if (isset($x959->properties['length']) && $x959->properties['length'] !== JS::$undefined) { $x968 = $x959->properties['length']; }  else { $x968 = 0; } }
if (isset($S965)) {
$x969 = $S965->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 269, 25);
$x970 = $x969($global, $x959, $S965, array($x958), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x967 = $x970;
} else {
if (!$U965) {$x967 = $x958;if ($W965) { $x965 = $x958; }  }
else { $x967 = JS::$undefined; }
}
if (isset($x959->class) && $x959->class === 'Array') {if (is_int('indexOf') && 'indexOf' >= $x959->properties['length']) { $x959->properties['length'] = 'indexOf' + 1; }else if ($x961 === 'length' && is_int($x958) && $x968 > $x958) {  for ($i = $x958; $i < $x968; ++$i) {  unset($x959->properties[$i], $x959->attributes[$i]); }}};
$x1027 = clone JS::$functionTemplate; $x1027->call = '_339fc8fcf8563d9777a12bd15b91ae1b_19'; $x1027->parameters = array (
  0 => 'search',
  1 => 'from',
); $x1027->scope = $scope; $x1027->properties['prototype'] = clone JS::$objectTemplate; $x1027->attributes['prototype'] = JS::WRITABLE; $x1027->properties['prototype']->properties['constructor'] = $x1027; $x1027->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1027->properties['length'] = 2; $x1027->attributes['length'] = 0;
unset($x1028, $W1028, $S1028, $U1028);
$x1029 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 285, 6, '<image>/04_array.js');
$x1028 =& $x1029[0]; list(,$W1028,$S1028,$U1028) = $x1029;
$x1030 = JS::toString('lastIndexOf', $global);
if ($x1028 === JS::$undefined || $x1028 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1031 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 285, 29, '<image>/04_array.js');
$_TypeError =& $x1031[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1031;
$x1032 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x1033 = $x1032($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1033->class) && $x1033->class === 'Error' && !isset($x1033->properties['file']) && !isset($x1033->properties['line']) && !isset($x1033->properties['column'])) {$x1033->properties['file'] = '<image>/04_array.js';$x1033->properties['line'] = 285;$x1033->properties['column'] = 29;$x1033->attributes['file'] = $x1033->attributes['line'] = $x1033->attributes['column'] = 0; }
throw new JSException($x1033, 285, 29, '<image>/04_array.js');
}
$x1028 = JS::toObject($x1028, $global);
unset($x1034, $W1034, $S1034, $U1034);
$x1035 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1028, JS::toString($x1030, $global), 285, 29, '<image>/04_array.js');
$x1034 =& $x1035[0]; list(,$W1034,$S1034,$U1034) = $x1035;
if ($U1034 && (!isset($x1028->extensible) || $x1028->extensible)) {$x1028->properties[$x1030] = $x1034; $x1034 =& $x1028->properties[$x1030]; $x1028->attributes[$x1030] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1034 = FALSE; $W1034 = TRUE; }
if (isset($x1028->class) && $x1028->class === 'Array') {  if (isset($x1028->properties['length']) && $x1028->properties['length'] !== JS::$undefined) { $x1037 = $x1028->properties['length']; }  else { $x1037 = 0; } }
if (isset($S1034)) {
$x1038 = $S1034->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 285, 29);
$x1039 = $x1038($global, $x1028, $S1034, array($x1027), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1036 = $x1039;
} else {
if (!$U1034) {$x1036 = $x1027;if ($W1034) { $x1034 = $x1027; }  }
else { $x1036 = JS::$undefined; }
}
if (isset($x1028->class) && $x1028->class === 'Array') {if (is_int('lastIndexOf') && 'lastIndexOf' >= $x1028->properties['length']) { $x1028->properties['length'] = 'lastIndexOf' + 1; }else if ($x1030 === 'length' && is_int($x1027) && $x1037 > $x1027) {  for ($i = $x1027; $i < $x1037; ++$i) {  unset($x1028->properties[$i], $x1028->attributes[$i]); }}};
$x1077 = clone JS::$functionTemplate; $x1077->call = '_339fc8fcf8563d9777a12bd15b91ae1b_20'; $x1077->parameters = array (
  0 => 'callbackFn',
); $x1077->scope = $scope; $x1077->properties['prototype'] = clone JS::$objectTemplate; $x1077->attributes['prototype'] = JS::WRITABLE; $x1077->properties['prototype']->properties['constructor'] = $x1077; $x1077->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1077->properties['length'] = 1; $x1077->attributes['length'] = 0;
unset($x1078, $W1078, $S1078, $U1078);
$x1079 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 305, 6, '<image>/04_array.js');
$x1078 =& $x1079[0]; list(,$W1078,$S1078,$U1078) = $x1079;
$x1080 = JS::toString('every', $global);
if ($x1078 === JS::$undefined || $x1078 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1081 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 305, 23, '<image>/04_array.js');
$_TypeError =& $x1081[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1081;
$x1082 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1083 = $x1082($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1083->class) && $x1083->class === 'Error' && !isset($x1083->properties['file']) && !isset($x1083->properties['line']) && !isset($x1083->properties['column'])) {$x1083->properties['file'] = '<image>/04_array.js';$x1083->properties['line'] = 305;$x1083->properties['column'] = 23;$x1083->attributes['file'] = $x1083->attributes['line'] = $x1083->attributes['column'] = 0; }
throw new JSException($x1083, 305, 23, '<image>/04_array.js');
}
$x1078 = JS::toObject($x1078, $global);
unset($x1084, $W1084, $S1084, $U1084);
$x1085 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1078, JS::toString($x1080, $global), 305, 23, '<image>/04_array.js');
$x1084 =& $x1085[0]; list(,$W1084,$S1084,$U1084) = $x1085;
if ($U1084 && (!isset($x1078->extensible) || $x1078->extensible)) {$x1078->properties[$x1080] = $x1084; $x1084 =& $x1078->properties[$x1080]; $x1078->attributes[$x1080] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1084 = FALSE; $W1084 = TRUE; }
if (isset($x1078->class) && $x1078->class === 'Array') {  if (isset($x1078->properties['length']) && $x1078->properties['length'] !== JS::$undefined) { $x1087 = $x1078->properties['length']; }  else { $x1087 = 0; } }
if (isset($S1084)) {
$x1088 = $S1084->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 305, 23);
$x1089 = $x1088($global, $x1078, $S1084, array($x1077), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1086 = $x1089;
} else {
if (!$U1084) {$x1086 = $x1077;if ($W1084) { $x1084 = $x1077; }  }
else { $x1086 = JS::$undefined; }
}
if (isset($x1078->class) && $x1078->class === 'Array') {if (is_int('every') && 'every' >= $x1078->properties['length']) { $x1078->properties['length'] = 'every' + 1; }else if ($x1080 === 'length' && is_int($x1077) && $x1087 > $x1077) {  for ($i = $x1077; $i < $x1087; ++$i) {  unset($x1078->properties[$i], $x1078->attributes[$i]); }}};
$x1127 = clone JS::$functionTemplate; $x1127->call = '_339fc8fcf8563d9777a12bd15b91ae1b_21'; $x1127->parameters = array (
  0 => 'callbackFn',
); $x1127->scope = $scope; $x1127->properties['prototype'] = clone JS::$objectTemplate; $x1127->attributes['prototype'] = JS::WRITABLE; $x1127->properties['prototype']->properties['constructor'] = $x1127; $x1127->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1127->properties['length'] = 1; $x1127->attributes['length'] = 0;
unset($x1128, $W1128, $S1128, $U1128);
$x1129 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 321, 6, '<image>/04_array.js');
$x1128 =& $x1129[0]; list(,$W1128,$S1128,$U1128) = $x1129;
$x1130 = JS::toString('some', $global);
if ($x1128 === JS::$undefined || $x1128 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1131 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 321, 22, '<image>/04_array.js');
$_TypeError =& $x1131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1131;
$x1132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1133 = $x1132($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1133->class) && $x1133->class === 'Error' && !isset($x1133->properties['file']) && !isset($x1133->properties['line']) && !isset($x1133->properties['column'])) {$x1133->properties['file'] = '<image>/04_array.js';$x1133->properties['line'] = 321;$x1133->properties['column'] = 22;$x1133->attributes['file'] = $x1133->attributes['line'] = $x1133->attributes['column'] = 0; }
throw new JSException($x1133, 321, 22, '<image>/04_array.js');
}
$x1128 = JS::toObject($x1128, $global);
unset($x1134, $W1134, $S1134, $U1134);
$x1135 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1128, JS::toString($x1130, $global), 321, 22, '<image>/04_array.js');
$x1134 =& $x1135[0]; list(,$W1134,$S1134,$U1134) = $x1135;
if ($U1134 && (!isset($x1128->extensible) || $x1128->extensible)) {$x1128->properties[$x1130] = $x1134; $x1134 =& $x1128->properties[$x1130]; $x1128->attributes[$x1130] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1134 = FALSE; $W1134 = TRUE; }
if (isset($x1128->class) && $x1128->class === 'Array') {  if (isset($x1128->properties['length']) && $x1128->properties['length'] !== JS::$undefined) { $x1137 = $x1128->properties['length']; }  else { $x1137 = 0; } }
if (isset($S1134)) {
$x1138 = $S1134->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 321, 22);
$x1139 = $x1138($global, $x1128, $S1134, array($x1127), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1136 = $x1139;
} else {
if (!$U1134) {$x1136 = $x1127;if ($W1134) { $x1134 = $x1127; }  }
else { $x1136 = JS::$undefined; }
}
if (isset($x1128->class) && $x1128->class === 'Array') {if (is_int('some') && 'some' >= $x1128->properties['length']) { $x1128->properties['length'] = 'some' + 1; }else if ($x1130 === 'length' && is_int($x1127) && $x1137 > $x1127) {  for ($i = $x1127; $i < $x1137; ++$i) {  unset($x1128->properties[$i], $x1128->attributes[$i]); }}};
$x1177 = clone JS::$functionTemplate; $x1177->call = '_339fc8fcf8563d9777a12bd15b91ae1b_22'; $x1177->parameters = array (
  0 => 'callbackFn',
); $x1177->scope = $scope; $x1177->properties['prototype'] = clone JS::$objectTemplate; $x1177->attributes['prototype'] = JS::WRITABLE; $x1177->properties['prototype']->properties['constructor'] = $x1177; $x1177->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1177->properties['length'] = 1; $x1177->attributes['length'] = 0;
unset($x1178, $W1178, $S1178, $U1178);
$x1179 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 337, 6, '<image>/04_array.js');
$x1178 =& $x1179[0]; list(,$W1178,$S1178,$U1178) = $x1179;
$x1180 = JS::toString('forEach', $global);
if ($x1178 === JS::$undefined || $x1178 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1181 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 337, 25, '<image>/04_array.js');
$_TypeError =& $x1181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1181;
$x1182 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1183 = $x1182($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1183->class) && $x1183->class === 'Error' && !isset($x1183->properties['file']) && !isset($x1183->properties['line']) && !isset($x1183->properties['column'])) {$x1183->properties['file'] = '<image>/04_array.js';$x1183->properties['line'] = 337;$x1183->properties['column'] = 25;$x1183->attributes['file'] = $x1183->attributes['line'] = $x1183->attributes['column'] = 0; }
throw new JSException($x1183, 337, 25, '<image>/04_array.js');
}
$x1178 = JS::toObject($x1178, $global);
unset($x1184, $W1184, $S1184, $U1184);
$x1185 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1178, JS::toString($x1180, $global), 337, 25, '<image>/04_array.js');
$x1184 =& $x1185[0]; list(,$W1184,$S1184,$U1184) = $x1185;
if ($U1184 && (!isset($x1178->extensible) || $x1178->extensible)) {$x1178->properties[$x1180] = $x1184; $x1184 =& $x1178->properties[$x1180]; $x1178->attributes[$x1180] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1184 = FALSE; $W1184 = TRUE; }
if (isset($x1178->class) && $x1178->class === 'Array') {  if (isset($x1178->properties['length']) && $x1178->properties['length'] !== JS::$undefined) { $x1187 = $x1178->properties['length']; }  else { $x1187 = 0; } }
if (isset($S1184)) {
$x1188 = $S1184->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 337, 25);
$x1189 = $x1188($global, $x1178, $S1184, array($x1177), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1186 = $x1189;
} else {
if (!$U1184) {$x1186 = $x1177;if ($W1184) { $x1184 = $x1177; }  }
else { $x1186 = JS::$undefined; }
}
if (isset($x1178->class) && $x1178->class === 'Array') {if (is_int('forEach') && 'forEach' >= $x1178->properties['length']) { $x1178->properties['length'] = 'forEach' + 1; }else if ($x1180 === 'length' && is_int($x1177) && $x1187 > $x1177) {  for ($i = $x1177; $i < $x1187; ++$i) {  unset($x1178->properties[$i], $x1178->attributes[$i]); }}};
$x1239 = clone JS::$functionTemplate; $x1239->call = '_339fc8fcf8563d9777a12bd15b91ae1b_23'; $x1239->parameters = array (
  0 => 'callbackFn',
); $x1239->scope = $scope; $x1239->properties['prototype'] = clone JS::$objectTemplate; $x1239->attributes['prototype'] = JS::WRITABLE; $x1239->properties['prototype']->properties['constructor'] = $x1239; $x1239->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1239->properties['length'] = 1; $x1239->attributes['length'] = 0;
unset($x1240, $W1240, $S1240, $U1240);
$x1241 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 349, 6, '<image>/04_array.js');
$x1240 =& $x1241[0]; list(,$W1240,$S1240,$U1240) = $x1241;
$x1242 = JS::toString('map', $global);
if ($x1240 === JS::$undefined || $x1240 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1243 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 349, 21, '<image>/04_array.js');
$_TypeError =& $x1243[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1243;
$x1244 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1245 = $x1244($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1245->class) && $x1245->class === 'Error' && !isset($x1245->properties['file']) && !isset($x1245->properties['line']) && !isset($x1245->properties['column'])) {$x1245->properties['file'] = '<image>/04_array.js';$x1245->properties['line'] = 349;$x1245->properties['column'] = 21;$x1245->attributes['file'] = $x1245->attributes['line'] = $x1245->attributes['column'] = 0; }
throw new JSException($x1245, 349, 21, '<image>/04_array.js');
}
$x1240 = JS::toObject($x1240, $global);
unset($x1246, $W1246, $S1246, $U1246);
$x1247 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1240, JS::toString($x1242, $global), 349, 21, '<image>/04_array.js');
$x1246 =& $x1247[0]; list(,$W1246,$S1246,$U1246) = $x1247;
if ($U1246 && (!isset($x1240->extensible) || $x1240->extensible)) {$x1240->properties[$x1242] = $x1246; $x1246 =& $x1240->properties[$x1242]; $x1240->attributes[$x1242] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1246 = FALSE; $W1246 = TRUE; }
if (isset($x1240->class) && $x1240->class === 'Array') {  if (isset($x1240->properties['length']) && $x1240->properties['length'] !== JS::$undefined) { $x1249 = $x1240->properties['length']; }  else { $x1249 = 0; } }
if (isset($S1246)) {
$x1250 = $S1246->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 349, 21);
$x1251 = $x1250($global, $x1240, $S1246, array($x1239), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1248 = $x1251;
} else {
if (!$U1246) {$x1248 = $x1239;if ($W1246) { $x1246 = $x1239; }  }
else { $x1248 = JS::$undefined; }
}
if (isset($x1240->class) && $x1240->class === 'Array') {if (is_int('map') && 'map' >= $x1240->properties['length']) { $x1240->properties['length'] = 'map' + 1; }else if ($x1242 === 'length' && is_int($x1239) && $x1249 > $x1239) {  for ($i = $x1239; $i < $x1249; ++$i) {  unset($x1240->properties[$i], $x1240->attributes[$i]); }}};
$x1303 = clone JS::$functionTemplate; $x1303->call = '_339fc8fcf8563d9777a12bd15b91ae1b_24'; $x1303->parameters = array (
  0 => 'callbackFn',
); $x1303->scope = $scope; $x1303->properties['prototype'] = clone JS::$objectTemplate; $x1303->attributes['prototype'] = JS::WRITABLE; $x1303->properties['prototype']->properties['constructor'] = $x1303; $x1303->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1303->properties['length'] = 1; $x1303->attributes['length'] = 0;
unset($x1304, $W1304, $S1304, $U1304);
$x1305 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 363, 6, '<image>/04_array.js');
$x1304 =& $x1305[0]; list(,$W1304,$S1304,$U1304) = $x1305;
$x1306 = JS::toString('filter', $global);
if ($x1304 === JS::$undefined || $x1304 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1307 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 363, 24, '<image>/04_array.js');
$_TypeError =& $x1307[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1307;
$x1308 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1309 = $x1308($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1309->class) && $x1309->class === 'Error' && !isset($x1309->properties['file']) && !isset($x1309->properties['line']) && !isset($x1309->properties['column'])) {$x1309->properties['file'] = '<image>/04_array.js';$x1309->properties['line'] = 363;$x1309->properties['column'] = 24;$x1309->attributes['file'] = $x1309->attributes['line'] = $x1309->attributes['column'] = 0; }
throw new JSException($x1309, 363, 24, '<image>/04_array.js');
}
$x1304 = JS::toObject($x1304, $global);
unset($x1310, $W1310, $S1310, $U1310);
$x1311 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1304, JS::toString($x1306, $global), 363, 24, '<image>/04_array.js');
$x1310 =& $x1311[0]; list(,$W1310,$S1310,$U1310) = $x1311;
if ($U1310 && (!isset($x1304->extensible) || $x1304->extensible)) {$x1304->properties[$x1306] = $x1310; $x1310 =& $x1304->properties[$x1306]; $x1304->attributes[$x1306] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1310 = FALSE; $W1310 = TRUE; }
if (isset($x1304->class) && $x1304->class === 'Array') {  if (isset($x1304->properties['length']) && $x1304->properties['length'] !== JS::$undefined) { $x1313 = $x1304->properties['length']; }  else { $x1313 = 0; } }
if (isset($S1310)) {
$x1314 = $S1310->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 363, 24);
$x1315 = $x1314($global, $x1304, $S1310, array($x1303), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1312 = $x1315;
} else {
if (!$U1310) {$x1312 = $x1303;if ($W1310) { $x1310 = $x1303; }  }
else { $x1312 = JS::$undefined; }
}
if (isset($x1304->class) && $x1304->class === 'Array') {if (is_int('filter') && 'filter' >= $x1304->properties['length']) { $x1304->properties['length'] = 'filter' + 1; }else if ($x1306 === 'length' && is_int($x1303) && $x1313 > $x1303) {  for ($i = $x1303; $i < $x1313; ++$i) {  unset($x1304->properties[$i], $x1304->attributes[$i]); }}};
$x1401 = clone JS::$functionTemplate; $x1401->call = '_339fc8fcf8563d9777a12bd15b91ae1b_25'; $x1401->parameters = array (
  0 => 'callbackFn',
); $x1401->scope = $scope; $x1401->properties['prototype'] = clone JS::$objectTemplate; $x1401->attributes['prototype'] = JS::WRITABLE; $x1401->properties['prototype']->properties['constructor'] = $x1401; $x1401->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1401->properties['length'] = 1; $x1401->attributes['length'] = 0;
unset($x1402, $W1402, $S1402, $U1402);
$x1403 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 379, 6, '<image>/04_array.js');
$x1402 =& $x1403[0]; list(,$W1402,$S1402,$U1402) = $x1403;
$x1404 = JS::toString('reduce', $global);
if ($x1402 === JS::$undefined || $x1402 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1405 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 379, 24, '<image>/04_array.js');
$_TypeError =& $x1405[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1405;
$x1406 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1407 = $x1406($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1407->class) && $x1407->class === 'Error' && !isset($x1407->properties['file']) && !isset($x1407->properties['line']) && !isset($x1407->properties['column'])) {$x1407->properties['file'] = '<image>/04_array.js';$x1407->properties['line'] = 379;$x1407->properties['column'] = 24;$x1407->attributes['file'] = $x1407->attributes['line'] = $x1407->attributes['column'] = 0; }
throw new JSException($x1407, 379, 24, '<image>/04_array.js');
}
$x1402 = JS::toObject($x1402, $global);
unset($x1408, $W1408, $S1408, $U1408);
$x1409 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1402, JS::toString($x1404, $global), 379, 24, '<image>/04_array.js');
$x1408 =& $x1409[0]; list(,$W1408,$S1408,$U1408) = $x1409;
if ($U1408 && (!isset($x1402->extensible) || $x1402->extensible)) {$x1402->properties[$x1404] = $x1408; $x1408 =& $x1402->properties[$x1404]; $x1402->attributes[$x1404] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1408 = FALSE; $W1408 = TRUE; }
if (isset($x1402->class) && $x1402->class === 'Array') {  if (isset($x1402->properties['length']) && $x1402->properties['length'] !== JS::$undefined) { $x1411 = $x1402->properties['length']; }  else { $x1411 = 0; } }
if (isset($S1408)) {
$x1412 = $S1408->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 379, 24);
$x1413 = $x1412($global, $x1402, $S1408, array($x1401), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1410 = $x1413;
} else {
if (!$U1408) {$x1410 = $x1401;if ($W1408) { $x1408 = $x1401; }  }
else { $x1410 = JS::$undefined; }
}
if (isset($x1402->class) && $x1402->class === 'Array') {if (is_int('reduce') && 'reduce' >= $x1402->properties['length']) { $x1402->properties['length'] = 'reduce' + 1; }else if ($x1404 === 'length' && is_int($x1401) && $x1411 > $x1401) {  for ($i = $x1401; $i < $x1411; ++$i) {  unset($x1402->properties[$i], $x1402->attributes[$i]); }}};
$x1497 = clone JS::$functionTemplate; $x1497->call = '_339fc8fcf8563d9777a12bd15b91ae1b_26'; $x1497->parameters = array (
  0 => 'callbackFn',
); $x1497->scope = $scope; $x1497->properties['prototype'] = clone JS::$objectTemplate; $x1497->attributes['prototype'] = JS::WRITABLE; $x1497->properties['prototype']->properties['constructor'] = $x1497; $x1497->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1497->properties['length'] = 1; $x1497->attributes['length'] = 0;
unset($x1498, $W1498, $S1498, $U1498);
$x1499 = _339fc8fcf8563d9777a12bd15b91ae1b_4($global, $scope, $_Array, JS::toString('prototype', $global), 405, 6, '<image>/04_array.js');
$x1498 =& $x1499[0]; list(,$W1498,$S1498,$U1498) = $x1499;
$x1500 = JS::toString('reduceRight', $global);
if ($x1498 === JS::$undefined || $x1498 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1501 = _339fc8fcf8563d9777a12bd15b91ae1b_2($global, $scope, $scope, JS::toString('TypeError', $global), 405, 29, '<image>/04_array.js');
$_TypeError =& $x1501[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1501;
$x1502 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1503 = $x1502($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1503->class) && $x1503->class === 'Error' && !isset($x1503->properties['file']) && !isset($x1503->properties['line']) && !isset($x1503->properties['column'])) {$x1503->properties['file'] = '<image>/04_array.js';$x1503->properties['line'] = 405;$x1503->properties['column'] = 29;$x1503->attributes['file'] = $x1503->attributes['line'] = $x1503->attributes['column'] = 0; }
throw new JSException($x1503, 405, 29, '<image>/04_array.js');
}
$x1498 = JS::toObject($x1498, $global);
unset($x1504, $W1504, $S1504, $U1504);
$x1505 = _339fc8fcf8563d9777a12bd15b91ae1b_3($global, $scope, $x1498, JS::toString($x1500, $global), 405, 29, '<image>/04_array.js');
$x1504 =& $x1505[0]; list(,$W1504,$S1504,$U1504) = $x1505;
if ($U1504 && (!isset($x1498->extensible) || $x1498->extensible)) {$x1498->properties[$x1500] = $x1504; $x1504 =& $x1498->properties[$x1500]; $x1498->attributes[$x1500] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1504 = FALSE; $W1504 = TRUE; }
if (isset($x1498->class) && $x1498->class === 'Array') {  if (isset($x1498->properties['length']) && $x1498->properties['length'] !== JS::$undefined) { $x1507 = $x1498->properties['length']; }  else { $x1507 = 0; } }
if (isset($S1504)) {
$x1508 = $S1504->call;
$global->trace[++$global->trace_sp] = array('<image>/04_array.js', 405, 29);
$x1509 = $x1508($global, $x1498, $S1504, array($x1497), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1506 = $x1509;
} else {
if (!$U1504) {$x1506 = $x1497;if ($W1504) { $x1504 = $x1497; }  }
else { $x1506 = JS::$undefined; }
}
if (isset($x1498->class) && $x1498->class === 'Array') {if (is_int('reduceRight') && 'reduceRight' >= $x1498->properties['length']) { $x1498->properties['length'] = 'reduceRight' + 1; }else if ($x1500 === 'length' && is_int($x1497) && $x1507 > $x1497) {  for ($i = $x1497; $i < $x1507; ++$i) {  unset($x1498->properties[$i], $x1498->attributes[$i]); }}};
;
return JS::$undefined;
}
