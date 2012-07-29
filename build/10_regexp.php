function _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x9 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x10 = $x9($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x10; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x9=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x10;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x15 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x15[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x15;
$x16 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x17 = $x16($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x17->class) && $x17->class === 'Error' && !isset($x17->properties['file']) && !isset($x17->properties['line']) && !isset($x17->properties['column'])) {$x17->properties['file'] = $file;$x17->properties['line'] = $line;$x17->properties['column'] = $column;$x17->attributes['file'] = $x17->attributes['line'] = $x17->attributes['column'] = 0; }
throw new JSException($x17, $line, $column, $file);
}
$W14 = $S14 = $U14 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x14 =& $lookup->properties[$id]; $W14 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S14 = $lookup->setters[$id]; }
else { $x14 = JS::$undefined; $U14 = TRUE; }
return array(&$x14, $W14, $S14, $U14);
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'&&!isset($x17->properties[\'file\'])&&!isset($x17->properties[\'line\'])&&!isset($x17->properties[\'column\'])){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];$W14=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S14=$lookup->setters[$id];}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x73 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x73[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x73;
$x74 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x75 = $x74($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x75->class) && $x75->class === 'Error' && !isset($x75->properties['file']) && !isset($x75->properties['line']) && !isset($x75->properties['column'])) {$x75->properties['file'] = $file;$x75->properties['line'] = $line;$x75->properties['column'] = $column;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, $line, $column, $file);
}
$W72 = $S72 = $U72 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x72 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x76 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x77 = $x76($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x72 = $x77; }
else { $x72 = JS::$undefined; $U72 = TRUE; }
return array(&$x72, $W72, $S72, $U72);
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x73=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x73[0];list(,$WTypeError,$STypeError,$UTypeError)=$x73;$x74=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x75=$x74($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x75->class)&&$x75->class===\'Error\'&&!isset($x75->properties[\'file\'])&&!isset($x75->properties[\'line\'])&&!isset($x75->properties[\'column\'])){$x75->properties[\'file\']=$file;$x75->properties[\'line\']=$line;$x75->properties[\'column\']=$column;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,$line,$column,$file);}$W72=$S72=$U72=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x72=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x76=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x77=$x76($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x72=$x77;}else{$x72=JS::$undefined;$U72=TRUE;}return array(&$x72,$W72,$S72,$U72);}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['pattern'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pattern =& $scope->properties['pattern'];
$Upattern = FALSE;
$scope->properties['flags'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$scope->properties['RegExp'] = $fn;
$_RegExp =& $scope->properties['RegExp'];
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(is_object($_pattern) && isset($_pattern->class) &&$_pattern->class === 'RegExp', $global)) {

return $_pattern;;
};
$x2 = (((gettype($_pattern) === gettype(JS::$undefined) && $_pattern === JS::$undefined))|| (((is_float($_pattern) || is_int($_pattern)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_pattern == JS::$undefined));
if (JS::toBoolean($x2, $global)) {
$x3 = '';
if ($Upattern) {$global->properties['pattern'] = $_pattern; $_pattern =& $global->properties['pattern']; }
$_pattern = $x3;;
};
$x4 = (((gettype($_flags) === gettype(JS::$undefined) && $_flags === JS::$undefined))|| (((is_float($_flags) || is_int($_flags)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_flags == JS::$undefined));
if (JS::toBoolean($x4, $global)) {
$x5 = '';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$_flags = $x5;;
};
$x6 = clone JS::$objectTemplate;
$x6->properties['source'] = JS::toString($_pattern, $global);
$x6->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x6->properties['global'] = false;
$x6->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x6->properties['ignoreCase'] = false;
$x6->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x6->properties['multiline'] = false;
$x6->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x6->properties['lastIndex'] = 0;
$x6->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = $x6;
$_r->class = 'RegExp';
$_r->prototype =$_RegExp->properties['prototype'];
$x7 = JS::toString($_pattern, $global);
$x8 = JS::toString('source', $global);
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x11 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 25, 11, '<image>/10_regexp.js');
$_TypeError =& $x11[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x11;
$x12 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 25, 11);
$x13 = $x12($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = '<image>/10_regexp.js';$x13->properties['line'] = 25;$x13->properties['column'] = 11;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 25, 11, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x14, $W14, $S14, $U14);
$x18 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_r, JS::toString($x8, $global), 25, 11, '<image>/10_regexp.js');
$x14 =& $x18[0]; list(,$W14,$S14,$U14) = $x18;
if ($U14 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties[$x8] = $x14; $x14 =& $_r->properties[$x8]; $_r->attributes[$x8] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U14 = FALSE; $W14 = TRUE; }
if (isset($S14)) {
$x20 = $S14->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 25, 11);
$x21 = $x20($global, $_r, $S14, array($x7), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x19 = $x21;
} else {
if (!$U14) {$x19 = $x7;if ($W14) { $x14 = $x7; }  }
else { $x19 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('source') && 'source' >= $_r->properties['length']) { $_r->properties['length'] = 'source' + 1; };
for ($x22 = 0;; ++$x22) {
if ($x22 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = strlen($_flags);
$scope->properties['c'] = JS::$undefined; $_c =& $scope->properties['c'];
$Uc = FALSE;
$_c = JS::$undefined;
}
if ($x22 !== 0) {
$x23 = ++$_i;
}
$x24 = JS::toPrimitive($_i, $global);
$x25 = JS::toPrimitive($_l, $global);
$x26 = (is_string($x24) && is_string($x25) ? strcmp($x24, $x25) < 0 : (!is_nan($x27 = JS::toNumber($x24, $global)) && !is_nan($x28 = JS::toNumber($x25, $global)) && $x27 < $x28));
if (!JS::toBoolean($x26, $global)) { break; }

$_c= substr($_flags,$_i, 1);
$x29 = (((gettype($_c) === gettype('g') && $_c === 'g'))|| (((is_float($_c) || is_int($_c)) && (is_float('g') || is_int('g'))) && $_c == 'g'));
if (JS::toBoolean($x29, $global)) {
$x30 = true;
$x31 = JS::toString('global', $global);
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x32 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 31, 13, '<image>/10_regexp.js');
$_TypeError =& $x32[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x32;
$x33 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x34 = $x33($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x34->class) && $x34->class === 'Error' && !isset($x34->properties['file']) && !isset($x34->properties['line']) && !isset($x34->properties['column'])) {$x34->properties['file'] = '<image>/10_regexp.js';$x34->properties['line'] = 31;$x34->properties['column'] = 13;$x34->attributes['file'] = $x34->attributes['line'] = $x34->attributes['column'] = 0; }
throw new JSException($x34, 31, 13, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x35, $W35, $S35, $U35);
$x36 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_r, JS::toString($x31, $global), 31, 13, '<image>/10_regexp.js');
$x35 =& $x36[0]; list(,$W35,$S35,$U35) = $x36;
if ($U35 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties[$x31] = $x35; $x35 =& $_r->properties[$x31]; $_r->attributes[$x31] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U35 = FALSE; $W35 = TRUE; }
if (isset($S35)) {
$x38 = $S35->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x39 = $x38($global, $_r, $S35, array($x30), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x37 = $x39;
} else {
if (!$U35) {$x37 = $x30;if ($W35) { $x35 = $x30; }  }
else { $x37 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('global') && 'global' >= $_r->properties['length']) { $_r->properties['length'] = 'global' + 1; };
}
else {
$x40 = (((gettype($_c) === gettype('i') && $_c === 'i'))|| (((is_float($_c) || is_int($_c)) && (is_float('i') || is_int('i'))) && $_c == 'i'));
if (JS::toBoolean($x40, $global)) {
$x41 = true;
$x42 = JS::toString('ignoreCase', $global);
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x43 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 33, 17, '<image>/10_regexp.js');
$_TypeError =& $x43[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x43;
$x44 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x45 = $x44($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x45->class) && $x45->class === 'Error' && !isset($x45->properties['file']) && !isset($x45->properties['line']) && !isset($x45->properties['column'])) {$x45->properties['file'] = '<image>/10_regexp.js';$x45->properties['line'] = 33;$x45->properties['column'] = 17;$x45->attributes['file'] = $x45->attributes['line'] = $x45->attributes['column'] = 0; }
throw new JSException($x45, 33, 17, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x46, $W46, $S46, $U46);
$x47 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_r, JS::toString($x42, $global), 33, 17, '<image>/10_regexp.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
if ($U46 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties[$x42] = $x46; $x46 =& $_r->properties[$x42]; $_r->attributes[$x42] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U46 = FALSE; $W46 = TRUE; }
if (isset($S46)) {
$x49 = $S46->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x50 = $x49($global, $_r, $S46, array($x41), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x48 = $x50;
} else {
if (!$U46) {$x48 = $x41;if ($W46) { $x46 = $x41; }  }
else { $x48 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('ignoreCase') && 'ignoreCase' >= $_r->properties['length']) { $_r->properties['length'] = 'ignoreCase' + 1; };
}
else {
$x51 = (((gettype($_c) === gettype('m') && $_c === 'm'))|| (((is_float($_c) || is_int($_c)) && (is_float('m') || is_int('m'))) && $_c == 'm'));
if (JS::toBoolean($x51, $global)) {
$x52 = true;
$x53 = JS::toString('multiline', $global);
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x54 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 35, 16, '<image>/10_regexp.js');
$_TypeError =& $x54[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x54;
$x55 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x56 = $x55($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x56->class) && $x56->class === 'Error' && !isset($x56->properties['file']) && !isset($x56->properties['line']) && !isset($x56->properties['column'])) {$x56->properties['file'] = '<image>/10_regexp.js';$x56->properties['line'] = 35;$x56->properties['column'] = 16;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
throw new JSException($x56, 35, 16, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x57, $W57, $S57, $U57);
$x58 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_r, JS::toString($x53, $global), 35, 16, '<image>/10_regexp.js');
$x57 =& $x58[0]; list(,$W57,$S57,$U57) = $x58;
if ($U57 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties[$x53] = $x57; $x57 =& $_r->properties[$x53]; $_r->attributes[$x53] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U57 = FALSE; $W57 = TRUE; }
if (isset($S57)) {
$x60 = $S57->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x61 = $x60($global, $_r, $S57, array($x52), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x59 = $x61;
} else {
if (!$U57) {$x59 = $x52;if ($W57) { $x57 = $x52; }  }
else { $x59 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('multiline') && 'multiline' >= $_r->properties['length']) { $_r->properties['length'] = 'multiline' + 1; };
}
else {
unset($_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
$x64 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('SyntaxError', $global), 37, 14, '<image>/10_regexp.js');
$_SyntaxError =& $x64[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x64;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x65 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 37, 14, '<image>/10_regexp.js');
$_ReferenceError =& $x65[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x65;
$x66 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 14);
$x67 = $x66($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x67->class) && $x67->class === 'Error' && !isset($x67->properties['file']) && !isset($x67->properties['line']) && !isset($x67->properties['column'])) {$x67->properties['file'] = '<image>/10_regexp.js';$x67->properties['line'] = 37;$x67->properties['column'] = 14;$x67->attributes['file'] = $x67->attributes['line'] = $x67->attributes['column'] = 0; }
throw new JSException($x67, 37, 14, '<image>/10_regexp.js');
}
$x70 = JS::toPrimitive('RegExp(): Unknow regexp flag ', $global);
$x71 = JS::toPrimitive($_c, $global);
$x68 = JS::toPrimitive((is_string($x70) || is_string($x71) ? JS::toString($x70, $global) . JS::toString($x71, $global) : JS::toNumber($x70, $global) + JS::toNumber($x71, $global)), $global);
$x69 = JS::toPrimitive('.', $global);
$x62 = clone JS::$objectTemplate;
unset($x72, $W72, $S72, $U72);
$x78 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_SyntaxError, JS::toString('prototype', $global), 37, 10, '<image>/10_regexp.js');
$x72 =& $x78[0]; list(,$W72,$S72,$U72) = $x78;
$x63 = $x72;
$x62->prototype = $x63;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x81 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 37, 10, '<image>/10_regexp.js');
$_TypeError =& $x81[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x81;
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x83 = $x82($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error' && !isset($x83->properties['file']) && !isset($x83->properties['line']) && !isset($x83->properties['column'])) {$x83->properties['file'] = '<image>/10_regexp.js';$x83->properties['line'] = 37;$x83->properties['column'] = 10;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, 37, 10, '<image>/10_regexp.js');
}
$x79 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x80 = $x79($global, $x62, $_SyntaxError, array((is_string($x68) || is_string($x69) ? JS::toString($x68, $global) . JS::toString($x69, $global) : JS::toNumber($x68, $global) + JS::toNumber($x69, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x63 = $x80;
if (is_object($x63) && $x63 !== JS::$undefined) { $x62 = $x63; }
if (isset($x62->class) && $x62->class === 'Error' && !isset($x62->properties['file']) && !isset($x62->properties['line']) && !isset($x62->properties['column'])) {$x62->properties['file'] = '<image>/10_regexp.js';$x62->properties['line'] = 37;$x62->properties['column'] = 4;$x62->attributes['file'] = $x62->attributes['line'] = $x62->attributes['column'] = 0; }
throw new JSException($x62, 37, 4, '<image>/10_regexp.js');;
};
};
};;
};
foreach ($_r->attributes as $a => $_) {$_r->attributes[$a] = 0; };
$_r->attributes['lastIndex'] = JS::WRITABLE;
return $_r;
;
return JS::$undefined;
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pattern\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$scope->properties[\'flags\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$scope->properties[\'RegExp\']=$fn;$_RegExp=&$scope->properties[\'RegExp\'];$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(is_object($_pattern)&&isset($_pattern->class)&&$_pattern->class===\'RegExp\',$global)){return$_pattern;}$x2=(((gettype($_pattern)===gettype(JS::$undefined)&&$_pattern===JS::$undefined))||(((is_float($_pattern)||is_int($_pattern))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_pattern==JS::$undefined));if(JS::toBoolean($x2,$global)){$x3=\'\';if($Upattern){$global->properties[\'pattern\']=$_pattern;$_pattern=&$global->properties[\'pattern\'];}$_pattern=$x3;}$x4=(((gettype($_flags)===gettype(JS::$undefined)&&$_flags===JS::$undefined))||(((is_float($_flags)||is_int($_flags))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_flags==JS::$undefined));if(JS::toBoolean($x4,$global)){$x5=\'\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$_flags=$x5;}$x6=clone JS::$objectTemplate;$x6->properties[\'source\']=JS::toString($_pattern,$global);$x6->attributes[\'source\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'global\']=false;$x6->attributes[\'global\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'ignoreCase\']=false;$x6->attributes[\'ignoreCase\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'multiline\']=false;$x6->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'lastIndex\']=0;$x6->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=$x6;$_r->class=\'RegExp\';$_r->prototype=$_RegExp->properties[\'prototype\'];$x7=JS::toString($_pattern,$global);$x8=JS::toString(\'source\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),25,11,\'<image>/10_regexp.js\');$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x13=$x12($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/10_regexp.js\';$x13->properties[\'line\']=25;$x13->properties[\'column\']=11;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,25,11,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x14,$W14,$S14,$U14);$x18=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x8,$global),25,11,\'<image>/10_regexp.js\');$x14=&$x18[0];list(,$W14,$S14,$U14)=$x18;if($U14&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x8]=$x14;$x14=&$_r->properties[$x8];$_r->attributes[$x8]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U14=FALSE;$W14=TRUE;}if(isset($S14)){$x20=$S14->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x21=$x20($global,$_r,$S14,array($x7),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x19=$x21;}else{if(!$U14){$x19=$x7;if($W14){$x14=$x7;}}else{$x19=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'source\')&&\'source\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'source\'+1;}for($x22=0;;++$x22){if($x22===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=strlen($_flags);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=JS::$undefined;}if($x22!==0){$x23=++$_i;}$x24=JS::toPrimitive($_i,$global);$x25=JS::toPrimitive($_l,$global);$x26=(is_string($x24)&&is_string($x25)?strcmp($x24,$x25)<0:(!is_nan($x27=JS::toNumber($x24,$global))&&!is_nan($x28=JS::toNumber($x25,$global))&&$x27<$x28));if(!JS::toBoolean($x26,$global)){break;}$_c=substr($_flags,$_i,1);$x29=(((gettype($_c)===gettype(\'g\')&&$_c===\'g\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'g\')||is_int(\'g\')))&&$_c==\'g\'));if(JS::toBoolean($x29,$global)){$x30=true;$x31=JS::toString(\'global\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x32=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),31,13,\'<image>/10_regexp.js\');$_TypeError=&$x32[0];list(,$WTypeError,$STypeError,$UTypeError)=$x32;$x33=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x34=$x33($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x34->class)&&$x34->class===\'Error\'&&!isset($x34->properties[\'file\'])&&!isset($x34->properties[\'line\'])&&!isset($x34->properties[\'column\'])){$x34->properties[\'file\']=\'<image>/10_regexp.js\';$x34->properties[\'line\']=31;$x34->properties[\'column\']=13;$x34->attributes[\'file\']=$x34->attributes[\'line\']=$x34->attributes[\'column\']=0;}throw new JSException($x34,31,13,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x35,$W35,$S35,$U35);$x36=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x31,$global),31,13,\'<image>/10_regexp.js\');$x35=&$x36[0];list(,$W35,$S35,$U35)=$x36;if($U35&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x31]=$x35;$x35=&$_r->properties[$x31];$_r->attributes[$x31]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U35=FALSE;$W35=TRUE;}if(isset($S35)){$x38=$S35->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x39=$x38($global,$_r,$S35,array($x30),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x37=$x39;}else{if(!$U35){$x37=$x30;if($W35){$x35=$x30;}}else{$x37=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'global\')&&\'global\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'global\'+1;}}else{$x40=(((gettype($_c)===gettype(\'i\')&&$_c===\'i\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'i\')||is_int(\'i\')))&&$_c==\'i\'));if(JS::toBoolean($x40,$global)){$x41=true;$x42=JS::toString(\'ignoreCase\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x43=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),33,17,\'<image>/10_regexp.js\');$_TypeError=&$x43[0];list(,$WTypeError,$STypeError,$UTypeError)=$x43;$x44=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x45=$x44($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x45->class)&&$x45->class===\'Error\'&&!isset($x45->properties[\'file\'])&&!isset($x45->properties[\'line\'])&&!isset($x45->properties[\'column\'])){$x45->properties[\'file\']=\'<image>/10_regexp.js\';$x45->properties[\'line\']=33;$x45->properties[\'column\']=17;$x45->attributes[\'file\']=$x45->attributes[\'line\']=$x45->attributes[\'column\']=0;}throw new JSException($x45,33,17,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x46,$W46,$S46,$U46);$x47=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x42,$global),33,17,\'<image>/10_regexp.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;if($U46&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x42]=$x46;$x46=&$_r->properties[$x42];$_r->attributes[$x42]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U46=FALSE;$W46=TRUE;}if(isset($S46)){$x49=$S46->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x50=$x49($global,$_r,$S46,array($x41),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x48=$x50;}else{if(!$U46){$x48=$x41;if($W46){$x46=$x41;}}else{$x48=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'ignoreCase\')&&\'ignoreCase\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'ignoreCase\'+1;}}else{$x51=(((gettype($_c)===gettype(\'m\')&&$_c===\'m\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'m\')||is_int(\'m\')))&&$_c==\'m\'));if(JS::toBoolean($x51,$global)){$x52=true;$x53=JS::toString(\'multiline\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x54=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,16,\'<image>/10_regexp.js\');$_TypeError=&$x54[0];list(,$WTypeError,$STypeError,$UTypeError)=$x54;$x55=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x56=$x55($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/10_regexp.js\';$x56->properties[\'line\']=35;$x56->properties[\'column\']=16;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,35,16,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x57,$W57,$S57,$U57);$x58=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x53,$global),35,16,\'<image>/10_regexp.js\');$x57=&$x58[0];list(,$W57,$S57,$U57)=$x58;if($U57&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x53]=$x57;$x57=&$_r->properties[$x53];$_r->attributes[$x53]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U57=FALSE;$W57=TRUE;}if(isset($S57)){$x60=$S57->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x61=$x60($global,$_r,$S57,array($x52),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x59=$x61;}else{if(!$U57){$x59=$x52;if($W57){$x57=$x52;}}else{$x59=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'multiline\')&&\'multiline\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'multiline\'+1;}}else{unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x64=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'SyntaxError\',$global),37,14,\'<image>/10_regexp.js\');$_SyntaxError=&$x64[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x64;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x65=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),37,14,\'<image>/10_regexp.js\');$_ReferenceError=&$x65[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x65;$x66=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,14);$x67=$x66($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x67->class)&&$x67->class===\'Error\'&&!isset($x67->properties[\'file\'])&&!isset($x67->properties[\'line\'])&&!isset($x67->properties[\'column\'])){$x67->properties[\'file\']=\'<image>/10_regexp.js\';$x67->properties[\'line\']=37;$x67->properties[\'column\']=14;$x67->attributes[\'file\']=$x67->attributes[\'line\']=$x67->attributes[\'column\']=0;}throw new JSException($x67,37,14,\'<image>/10_regexp.js\');}$x70=JS::toPrimitive(\'RegExp(): Unknow regexp flag \',$global);$x71=JS::toPrimitive($_c,$global);$x68=JS::toPrimitive((is_string($x70)||is_string($x71)?JS::toString($x70,$global).JS::toString($x71,$global):JS::toNumber($x70,$global)+JS::toNumber($x71,$global)),$global);$x69=JS::toPrimitive(\'.\',$global);$x62=clone JS::$objectTemplate;unset($x72,$W72,$S72,$U72);$x78=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$_SyntaxError,JS::toString(\'prototype\',$global),37,10,\'<image>/10_regexp.js\');$x72=&$x78[0];list(,$W72,$S72,$U72)=$x78;$x63=$x72;$x62->prototype=$x63;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x81=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),37,10,\'<image>/10_regexp.js\');$_TypeError=&$x81[0];list(,$WTypeError,$STypeError,$UTypeError)=$x81;$x82=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x83=$x82($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x83->class)&&$x83->class===\'Error\'&&!isset($x83->properties[\'file\'])&&!isset($x83->properties[\'line\'])&&!isset($x83->properties[\'column\'])){$x83->properties[\'file\']=\'<image>/10_regexp.js\';$x83->properties[\'line\']=37;$x83->properties[\'column\']=10;$x83->attributes[\'file\']=$x83->attributes[\'line\']=$x83->attributes[\'column\']=0;}throw new JSException($x83,37,10,\'<image>/10_regexp.js\');}$x79=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x80=$x79($global,$x62,$_SyntaxError,array((is_string($x68)||is_string($x69)?JS::toString($x68,$global).JS::toString($x69,$global):JS::toNumber($x68,$global)+JS::toNumber($x69,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x63=$x80;if(is_object($x63)&&$x63!==JS::$undefined){$x62=$x63;}if(isset($x62->class)&&$x62->class===\'Error\'&&!isset($x62->properties[\'file\'])&&!isset($x62->properties[\'line\'])&&!isset($x62->properties[\'column\'])){$x62->properties[\'file\']=\'<image>/10_regexp.js\';$x62->properties[\'line\']=37;$x62->properties[\'column\']=4;$x62->attributes[\'file\']=$x62->attributes[\'line\']=$x62->attributes[\'column\']=0;}throw new JSException($x62,37,4,\'<image>/10_regexp.js\');}}}}foreach($_r->attributes as$a=>$_){$_r->attributes[$a]=0;}$_r->attributes[\'lastIndex\']=JS::WRITABLE;return$_r;return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x111 =& $scope->properties['arguments'];
$x111->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x111->properties[$i] = $args[$i];
$x111->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x112 = JS::toString($_string, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x112;
unset($x113, $W113, $S113, $U113);
$x114 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_string, JS::toString('length', $global), 61, 21, '<image>/10_regexp.js');
$x113 =& $x114[0]; list(,$W113,$S113,$U113) = $x114;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = $x113;
unset($x115, $W115, $S115, $U115);
$x116 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('lastIndex', $global), 61, 38, '<image>/10_regexp.js');
$x115 =& $x116[0]; list(,$W115,$S115,$U115) = $x116;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $x115;
unset($x117, $W117, $S117, $U117);
$x118 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('global', $global), 63, 11, '<image>/10_regexp.js');
$x117 =& $x118[0]; list(,$W117,$S117,$U117) = $x118;
if (JS::toBoolean((!JS::toBoolean($x117, $global)), $global)) {
$x119 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x119;;
};
$x121 = JS::toPrimitive($_i, $global);
$x122 = JS::toPrimitive(0, $global);
$x123 = (is_string($x121) && is_string($x122) ? strcmp($x121, $x122) < 0 : (!is_nan($x124 = JS::toNumber($x121, $global)) && !is_nan($x125 = JS::toNumber($x122, $global)) && $x124 < $x125));
$x120 = $x123;
if (!JS::toBoolean($x120, $global)) {
$x126 = JS::toPrimitive($_i, $global);
$x127 = JS::toPrimitive($_length, $global);
$x128 = (is_string($x127) && is_string($x126) ? strcmp($x127, $x126) < 0 : (!is_nan($x129 = JS::toNumber($x127, $global)) && !is_nan($x130 = JS::toNumber($x126, $global)) && $x129 < $x130));
$x120 = $x128; }
if (JS::toBoolean($x120, $global)) {
$x131 = 0;
$x132 = JS::toString('lastIndex', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x133 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 68, 18, '<image>/10_regexp.js');
$_TypeError =& $x133[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x133;
$x134 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x135 = $x134($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x135->class) && $x135->class === 'Error' && !isset($x135->properties['file']) && !isset($x135->properties['line']) && !isset($x135->properties['column'])) {$x135->properties['file'] = '<image>/10_regexp.js';$x135->properties['line'] = 68;$x135->properties['column'] = 18;$x135->attributes['file'] = $x135->attributes['line'] = $x135->attributes['column'] = 0; }
throw new JSException($x135, 68, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x136, $W136, $S136, $U136);
$x137 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $leThis, JS::toString($x132, $global), 68, 18, '<image>/10_regexp.js');
$x136 =& $x137[0]; list(,$W136,$S136,$U136) = $x137;
if ($U136 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x132] = $x136; $x136 =& $leThis->properties[$x132]; $leThis->attributes[$x132] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U136 = FALSE; $W136 = TRUE; }
if (isset($S136)) {
$x139 = $S136->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x140 = $x139($global, $leThis, $S136, array($x131), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x138 = $x140;
} else {
if (!$U136) {$x138 = $x131;if ($W136) { $x136 = $x131; }  }
else { $x138 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
return NULL;;
};
unset($x141, $W141, $S141, $U141);
$x142 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('source', $global), 72, 20, '<image>/10_regexp.js');
$x141 =& $x142[0]; list(,$W141,$S141,$U141) = $x142;
$scope->properties['pattern'] = JS::$undefined; $_pattern =& $scope->properties['pattern'];
$Upattern = FALSE;
$_pattern = $x141;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
$scope->properties['result'] = JS::$undefined; $_result =& $scope->properties['result'];
$Uresult = FALSE;
$_result = JS::$undefined;
unset($x143, $W143, $S143, $U143);
$x144 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('ignoreCase', $global), 74, 10, '<image>/10_regexp.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if (JS::toBoolean($x143, $global)) {
$x145 = 'i';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x146 = JS::toPrimitive($_flags, $global);
$x147 = JS::toPrimitive($x145, $global);
$_flags = (is_string($x146) || is_string($x147) ? JS::toString($x146, $global) . JS::toString($x147, $global) : JS::toNumber($x146, $global) + JS::toNumber($x147, $global));;
};
unset($x148, $W148, $S148, $U148);
$x149 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('multiline', $global), 77, 10, '<image>/10_regexp.js');
$x148 =& $x149[0]; list(,$W148,$S148,$U148) = $x149;
if (JS::toBoolean($x148, $global)) {
$x150 = 'm';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x151 = JS::toPrimitive($_flags, $global);
$x152 = JS::toPrimitive($x150, $global);
$_flags = (is_string($x151) || is_string($x152) ? JS::toString($x151, $global) . JS::toString($x152, $global) : JS::toNumber($x151, $global) + JS::toNumber($x152, $global));;
};
$x153 = preg_match(
		'/' .$_pattern. '/u' .$_flags,
		JS::toString($_string, $global),
		$matches,
		PREG_OFFSET_CAPTURE,$_i);
if ($Uresult) {$global->properties['result'] = $_result; $_result =& $global->properties['result']; }
$_result = $x153;
if (JS::toBoolean((!JS::toBoolean($_result, $global)), $global)) {
$x154 = 0;
$x155 = JS::toString('lastIndex', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x156 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 90, 18, '<image>/10_regexp.js');
$_TypeError =& $x156[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x156;
$x157 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x158 = $x157($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x158->class) && $x158->class === 'Error' && !isset($x158->properties['file']) && !isset($x158->properties['line']) && !isset($x158->properties['column'])) {$x158->properties['file'] = '<image>/10_regexp.js';$x158->properties['line'] = 90;$x158->properties['column'] = 18;$x158->attributes['file'] = $x158->attributes['line'] = $x158->attributes['column'] = 0; }
throw new JSException($x158, 90, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x159, $W159, $S159, $U159);
$x160 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $leThis, JS::toString($x155, $global), 90, 18, '<image>/10_regexp.js');
$x159 =& $x160[0]; list(,$W159,$S159,$U159) = $x160;
if ($U159 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x155] = $x159; $x159 =& $leThis->properties[$x155]; $leThis->attributes[$x155] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U159 = FALSE; $W159 = TRUE; }
if (isset($S159)) {
$x162 = $S159->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x163 = $x162($global, $leThis, $S159, array($x154), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x161 = $x163;
} else {
if (!$U159) {$x161 = $x154;if ($W159) { $x159 = $x154; }  }
else { $x161 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
return NULL;;
};
$x164 = clone JS::$arrayTemplate;
$x164->properties['length'] = 0;
$x164->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x164;
foreach ($matches as $I => $match) {;
if ($match[0] === '' && $I !== 0) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x166 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x166[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x166;
$x167 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x168 = $x167($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x168->class) && $x168->class === 'Error' && !isset($x168->properties['file']) && !isset($x168->properties['line']) && !isset($x168->properties['column'])) {$x168->properties['file'] = '<image>/10_regexp.js';$x168->properties['line'] = 98;$x168->properties['column'] = 20;$x168->attributes['file'] = $x168->attributes['line'] = $x168->attributes['column'] = 0; }
throw new JSException($x168, 98, 20, '<image>/10_regexp.js');
}
$x165 = JS::toObject($_returnArray, $global);
unset($x169, $W169, $S169, $U169);
$x170 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $x165, JS::toString('push', $global), 98, 20, '<image>/10_regexp.js');
$x169 =& $x170[0]; list(,$W169,$S169,$U169) = $x170;
if (!(is_object($x169) && isset($x169->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x173 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x173[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x173;
$x174 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x175 = $x174($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x175->class) && $x175->class === 'Error' && !isset($x175->properties['file']) && !isset($x175->properties['line']) && !isset($x175->properties['column'])) {$x175->properties['file'] = '<image>/10_regexp.js';$x175->properties['line'] = 98;$x175->properties['column'] = 20;$x175->attributes['file'] = $x175->attributes['line'] = $x175->attributes['column'] = 0; }
throw new JSException($x175, 98, 20, '<image>/10_regexp.js');
}
$x171 = $x169->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x172 = $x171($global, $x165, $x169, array(JS::$undefined), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
} else {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x177 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x177[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x177;
$x178 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x179 = $x178($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x179->class) && $x179->class === 'Error' && !isset($x179->properties['file']) && !isset($x179->properties['line']) && !isset($x179->properties['column'])) {$x179->properties['file'] = '<image>/10_regexp.js';$x179->properties['line'] = 100;$x179->properties['column'] = 20;$x179->attributes['file'] = $x179->attributes['line'] = $x179->attributes['column'] = 0; }
throw new JSException($x179, 100, 20, '<image>/10_regexp.js');
}
$x176 = JS::toObject($_returnArray, $global);
unset($x180, $W180, $S180, $U180);
$x181 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $x176, JS::toString('push', $global), 100, 20, '<image>/10_regexp.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
if (!(is_object($x180) && isset($x180->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x184 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x184[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x184;
$x185 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x186 = $x185($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x186->class) && $x186->class === 'Error' && !isset($x186->properties['file']) && !isset($x186->properties['line']) && !isset($x186->properties['column'])) {$x186->properties['file'] = '<image>/10_regexp.js';$x186->properties['line'] = 100;$x186->properties['column'] = 20;$x186->attributes['file'] = $x186->attributes['line'] = $x186->attributes['column'] = 0; }
throw new JSException($x186, 100, 20, '<image>/10_regexp.js');
}
$x182 = $x180->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x183 = $x182($global, $x176, $x180, array($match[0]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
};
unset($x187, $W187, $S187, $U187);
$x188 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('global', $global), 104, 10, '<image>/10_regexp.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
if (JS::toBoolean($x187, $global)) {
$x189 = JS::toString('lastIndex', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x190 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 105, 18, '<image>/10_regexp.js');
$_TypeError =& $x190[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x190;
$x191 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x192 = $x191($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x192->class) && $x192->class === 'Error' && !isset($x192->properties['file']) && !isset($x192->properties['line']) && !isset($x192->properties['column'])) {$x192->properties['file'] = '<image>/10_regexp.js';$x192->properties['line'] = 105;$x192->properties['column'] = 18;$x192->attributes['file'] = $x192->attributes['line'] = $x192->attributes['column'] = 0; }
throw new JSException($x192, 105, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x193, $W193, $S193, $U193);
$x194 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $leThis, JS::toString($x189, $global), 105, 18, '<image>/10_regexp.js');
$x193 =& $x194[0]; list(,$W193,$S193,$U193) = $x194;
if ($U193 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x189] = $x193; $x193 =& $leThis->properties[$x189]; $leThis->attributes[$x189] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U193 = FALSE; $W193 = TRUE; }
if (isset($S193)) {
$x196 = $S193->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x197 = $x196($global, $leThis, $S193, array($matches[0][1] + strlen($matches[0][0])), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x195 = $x197;
} else {
if (!$U193) {$x195 = $matches[0][1] + strlen($matches[0][0]);if ($W193) { $x193 = $matches[0][1] + strlen($matches[0][0]); }  }
else { $x195 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
};
$x198 = JS::toString('index', $global);
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x199 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 108, 20, '<image>/10_regexp.js');
$_TypeError =& $x199[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x199;
$x200 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x201 = $x200($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x201->class) && $x201->class === 'Error' && !isset($x201->properties['file']) && !isset($x201->properties['line']) && !isset($x201->properties['column'])) {$x201->properties['file'] = '<image>/10_regexp.js';$x201->properties['line'] = 108;$x201->properties['column'] = 20;$x201->attributes['file'] = $x201->attributes['line'] = $x201->attributes['column'] = 0; }
throw new JSException($x201, 108, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x202, $W202, $S202, $U202);
$x203 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_returnArray, JS::toString($x198, $global), 108, 20, '<image>/10_regexp.js');
$x202 =& $x203[0]; list(,$W202,$S202,$U202) = $x203;
if ($U202 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties[$x198] = $x202; $x202 =& $_returnArray->properties[$x198]; $_returnArray->attributes[$x198] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U202 = FALSE; $W202 = TRUE; }
if (isset($S202)) {
$x205 = $S202->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x206 = $x205($global, $_returnArray, $S202, array($matches[0][1]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x204 = $x206;
} else {
if (!$U202) {$x204 = $matches[0][1];if ($W202) { $x202 = $matches[0][1]; }  }
else { $x204 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array' &&  is_int('index') && 'index' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'index' + 1; };
$x207 = JS::toString($_string, $global);
$x208 = JS::toString('input', $global);
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x209 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 109, 20, '<image>/10_regexp.js');
$_TypeError =& $x209[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x209;
$x210 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x211 = $x210($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x211->class) && $x211->class === 'Error' && !isset($x211->properties['file']) && !isset($x211->properties['line']) && !isset($x211->properties['column'])) {$x211->properties['file'] = '<image>/10_regexp.js';$x211->properties['line'] = 109;$x211->properties['column'] = 20;$x211->attributes['file'] = $x211->attributes['line'] = $x211->attributes['column'] = 0; }
throw new JSException($x211, 109, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x212, $W212, $S212, $U212);
$x213 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_returnArray, JS::toString($x208, $global), 109, 20, '<image>/10_regexp.js');
$x212 =& $x213[0]; list(,$W212,$S212,$U212) = $x213;
if ($U212 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties[$x208] = $x212; $x212 =& $_returnArray->properties[$x208]; $_returnArray->attributes[$x208] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U212 = FALSE; $W212 = TRUE; }
if (isset($S212)) {
$x215 = $S212->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x216 = $x215($global, $_returnArray, $S212, array($x207), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x214 = $x216;
} else {
if (!$U212) {$x214 = $x207;if ($W212) { $x212 = $x207; }  }
else { $x214 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array' &&  is_int('input') && 'input' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'input' + 1; };
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x111=&$scope->properties[\'arguments\'];$x111->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x111->properties[$i]=$args[$i];$x111->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$x112=JS::toString($_string,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x112;unset($x113,$W113,$S113,$U113);$x114=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$_string,JS::toString(\'length\',$global),61,21,\'<image>/10_regexp.js\');$x113=&$x114[0];list(,$W113,$S113,$U113)=$x114;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=$x113;unset($x115,$W115,$S115,$U115);$x116=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'lastIndex\',$global),61,38,\'<image>/10_regexp.js\');$x115=&$x116[0];list(,$W115,$S115,$U115)=$x116;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$x115;unset($x117,$W117,$S117,$U117);$x118=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'global\',$global),63,11,\'<image>/10_regexp.js\');$x117=&$x118[0];list(,$W117,$S117,$U117)=$x118;if(JS::toBoolean((!JS::toBoolean($x117,$global)),$global)){$x119=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x119;}$x121=JS::toPrimitive($_i,$global);$x122=JS::toPrimitive(0,$global);$x123=(is_string($x121)&&is_string($x122)?strcmp($x121,$x122)<0:(!is_nan($x124=JS::toNumber($x121,$global))&&!is_nan($x125=JS::toNumber($x122,$global))&&$x124<$x125));$x120=$x123;if(!JS::toBoolean($x120,$global)){$x126=JS::toPrimitive($_i,$global);$x127=JS::toPrimitive($_length,$global);$x128=(is_string($x127)&&is_string($x126)?strcmp($x127,$x126)<0:(!is_nan($x129=JS::toNumber($x127,$global))&&!is_nan($x130=JS::toNumber($x126,$global))&&$x129<$x130));$x120=$x128;}if(JS::toBoolean($x120,$global)){$x131=0;$x132=JS::toString(\'lastIndex\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x133=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),68,18,\'<image>/10_regexp.js\');$_TypeError=&$x133[0];list(,$WTypeError,$STypeError,$UTypeError)=$x133;$x134=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x135=$x134($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x135->class)&&$x135->class===\'Error\'&&!isset($x135->properties[\'file\'])&&!isset($x135->properties[\'line\'])&&!isset($x135->properties[\'column\'])){$x135->properties[\'file\']=\'<image>/10_regexp.js\';$x135->properties[\'line\']=68;$x135->properties[\'column\']=18;$x135->attributes[\'file\']=$x135->attributes[\'line\']=$x135->attributes[\'column\']=0;}throw new JSException($x135,68,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x136,$W136,$S136,$U136);$x137=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$leThis,JS::toString($x132,$global),68,18,\'<image>/10_regexp.js\');$x136=&$x137[0];list(,$W136,$S136,$U136)=$x137;if($U136&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x132]=$x136;$x136=&$leThis->properties[$x132];$leThis->attributes[$x132]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U136=FALSE;$W136=TRUE;}if(isset($S136)){$x139=$S136->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x140=$x139($global,$leThis,$S136,array($x131),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x138=$x140;}else{if(!$U136){$x138=$x131;if($W136){$x136=$x131;}}else{$x138=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}return NULL;}unset($x141,$W141,$S141,$U141);$x142=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'source\',$global),72,20,\'<image>/10_regexp.js\');$x141=&$x142[0];list(,$W141,$S141,$U141)=$x142;$scope->properties[\'pattern\']=JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$_pattern=$x141;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';$scope->properties[\'result\']=JS::$undefined;$_result=&$scope->properties[\'result\'];$Uresult=FALSE;$_result=JS::$undefined;unset($x143,$W143,$S143,$U143);$x144=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'ignoreCase\',$global),74,10,\'<image>/10_regexp.js\');$x143=&$x144[0];list(,$W143,$S143,$U143)=$x144;if(JS::toBoolean($x143,$global)){$x145=\'i\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x146=JS::toPrimitive($_flags,$global);$x147=JS::toPrimitive($x145,$global);$_flags=(is_string($x146)||is_string($x147)?JS::toString($x146,$global).JS::toString($x147,$global):JS::toNumber($x146,$global)+JS::toNumber($x147,$global));}unset($x148,$W148,$S148,$U148);$x149=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'multiline\',$global),77,10,\'<image>/10_regexp.js\');$x148=&$x149[0];list(,$W148,$S148,$U148)=$x149;if(JS::toBoolean($x148,$global)){$x150=\'m\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x151=JS::toPrimitive($_flags,$global);$x152=JS::toPrimitive($x150,$global);$_flags=(is_string($x151)||is_string($x152)?JS::toString($x151,$global).JS::toString($x152,$global):JS::toNumber($x151,$global)+JS::toNumber($x152,$global));}$x153=preg_match(\'/\'.$_pattern.\'/u\'.$_flags,JS::toString($_string,$global),$matches,PREG_OFFSET_CAPTURE,$_i);if($Uresult){$global->properties[\'result\']=$_result;$_result=&$global->properties[\'result\'];}$_result=$x153;if(JS::toBoolean((!JS::toBoolean($_result,$global)),$global)){$x154=0;$x155=JS::toString(\'lastIndex\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x156=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),90,18,\'<image>/10_regexp.js\');$_TypeError=&$x156[0];list(,$WTypeError,$STypeError,$UTypeError)=$x156;$x157=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x158=$x157($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x158->class)&&$x158->class===\'Error\'&&!isset($x158->properties[\'file\'])&&!isset($x158->properties[\'line\'])&&!isset($x158->properties[\'column\'])){$x158->properties[\'file\']=\'<image>/10_regexp.js\';$x158->properties[\'line\']=90;$x158->properties[\'column\']=18;$x158->attributes[\'file\']=$x158->attributes[\'line\']=$x158->attributes[\'column\']=0;}throw new JSException($x158,90,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x159,$W159,$S159,$U159);$x160=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$leThis,JS::toString($x155,$global),90,18,\'<image>/10_regexp.js\');$x159=&$x160[0];list(,$W159,$S159,$U159)=$x160;if($U159&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x155]=$x159;$x159=&$leThis->properties[$x155];$leThis->attributes[$x155]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U159=FALSE;$W159=TRUE;}if(isset($S159)){$x162=$S159->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x163=$x162($global,$leThis,$S159,array($x154),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x161=$x163;}else{if(!$U159){$x161=$x154;if($W159){$x159=$x154;}}else{$x161=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}return NULL;}$x164=clone JS::$arrayTemplate;$x164->properties[\'length\']=0;$x164->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x164;foreach($matches as$I=>$match){;if($match[0]===\'\'&&$I!==0){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x166=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),98,20,\'<image>/10_regexp.js\');$_TypeError=&$x166[0];list(,$WTypeError,$STypeError,$UTypeError)=$x166;$x167=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x168=$x167($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x168->class)&&$x168->class===\'Error\'&&!isset($x168->properties[\'file\'])&&!isset($x168->properties[\'line\'])&&!isset($x168->properties[\'column\'])){$x168->properties[\'file\']=\'<image>/10_regexp.js\';$x168->properties[\'line\']=98;$x168->properties[\'column\']=20;$x168->attributes[\'file\']=$x168->attributes[\'line\']=$x168->attributes[\'column\']=0;}throw new JSException($x168,98,20,\'<image>/10_regexp.js\');}$x165=JS::toObject($_returnArray,$global);unset($x169,$W169,$S169,$U169);$x170=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$x165,JS::toString(\'push\',$global),98,20,\'<image>/10_regexp.js\');$x169=&$x170[0];list(,$W169,$S169,$U169)=$x170;if(!(is_object($x169)&&isset($x169->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x173=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),98,20,\'<image>/10_regexp.js\');$_TypeError=&$x173[0];list(,$WTypeError,$STypeError,$UTypeError)=$x173;$x174=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x175=$x174($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x175->class)&&$x175->class===\'Error\'&&!isset($x175->properties[\'file\'])&&!isset($x175->properties[\'line\'])&&!isset($x175->properties[\'column\'])){$x175->properties[\'file\']=\'<image>/10_regexp.js\';$x175->properties[\'line\']=98;$x175->properties[\'column\']=20;$x175->attributes[\'file\']=$x175->attributes[\'line\']=$x175->attributes[\'column\']=0;}throw new JSException($x175,98,20,\'<image>/10_regexp.js\');}$x171=$x169->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x172=$x171($global,$x165,$x169,array(JS::$undefined),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x177=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),100,20,\'<image>/10_regexp.js\');$_TypeError=&$x177[0];list(,$WTypeError,$STypeError,$UTypeError)=$x177;$x178=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x179=$x178($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x179->class)&&$x179->class===\'Error\'&&!isset($x179->properties[\'file\'])&&!isset($x179->properties[\'line\'])&&!isset($x179->properties[\'column\'])){$x179->properties[\'file\']=\'<image>/10_regexp.js\';$x179->properties[\'line\']=100;$x179->properties[\'column\']=20;$x179->attributes[\'file\']=$x179->attributes[\'line\']=$x179->attributes[\'column\']=0;}throw new JSException($x179,100,20,\'<image>/10_regexp.js\');}$x176=JS::toObject($_returnArray,$global);unset($x180,$W180,$S180,$U180);$x181=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$x176,JS::toString(\'push\',$global),100,20,\'<image>/10_regexp.js\');$x180=&$x181[0];list(,$W180,$S180,$U180)=$x181;if(!(is_object($x180)&&isset($x180->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x184=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),100,20,\'<image>/10_regexp.js\');$_TypeError=&$x184[0];list(,$WTypeError,$STypeError,$UTypeError)=$x184;$x185=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x186=$x185($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x186->class)&&$x186->class===\'Error\'&&!isset($x186->properties[\'file\'])&&!isset($x186->properties[\'line\'])&&!isset($x186->properties[\'column\'])){$x186->properties[\'file\']=\'<image>/10_regexp.js\';$x186->properties[\'line\']=100;$x186->properties[\'column\']=20;$x186->attributes[\'file\']=$x186->attributes[\'line\']=$x186->attributes[\'column\']=0;}throw new JSException($x186,100,20,\'<image>/10_regexp.js\');}$x182=$x180->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x183=$x182($global,$x176,$x180,array($match[0]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}unset($x187,$W187,$S187,$U187);$x188=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'global\',$global),104,10,\'<image>/10_regexp.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;if(JS::toBoolean($x187,$global)){$x189=JS::toString(\'lastIndex\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x190=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,18,\'<image>/10_regexp.js\');$_TypeError=&$x190[0];list(,$WTypeError,$STypeError,$UTypeError)=$x190;$x191=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x192=$x191($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x192->class)&&$x192->class===\'Error\'&&!isset($x192->properties[\'file\'])&&!isset($x192->properties[\'line\'])&&!isset($x192->properties[\'column\'])){$x192->properties[\'file\']=\'<image>/10_regexp.js\';$x192->properties[\'line\']=105;$x192->properties[\'column\']=18;$x192->attributes[\'file\']=$x192->attributes[\'line\']=$x192->attributes[\'column\']=0;}throw new JSException($x192,105,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x193,$W193,$S193,$U193);$x194=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$leThis,JS::toString($x189,$global),105,18,\'<image>/10_regexp.js\');$x193=&$x194[0];list(,$W193,$S193,$U193)=$x194;if($U193&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x189]=$x193;$x193=&$leThis->properties[$x189];$leThis->attributes[$x189]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U193=FALSE;$W193=TRUE;}if(isset($S193)){$x196=$S193->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x197=$x196($global,$leThis,$S193,array($matches[0][1]+strlen($matches[0][0])),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x195=$x197;}else{if(!$U193){$x195=$matches[0][1]+strlen($matches[0][0]);if($W193){$x193=$matches[0][1]+strlen($matches[0][0]);}}else{$x195=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}}$x198=JS::toString(\'index\',$global);if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x199=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),108,20,\'<image>/10_regexp.js\');$_TypeError=&$x199[0];list(,$WTypeError,$STypeError,$UTypeError)=$x199;$x200=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x201=$x200($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x201->class)&&$x201->class===\'Error\'&&!isset($x201->properties[\'file\'])&&!isset($x201->properties[\'line\'])&&!isset($x201->properties[\'column\'])){$x201->properties[\'file\']=\'<image>/10_regexp.js\';$x201->properties[\'line\']=108;$x201->properties[\'column\']=20;$x201->attributes[\'file\']=$x201->attributes[\'line\']=$x201->attributes[\'column\']=0;}throw new JSException($x201,108,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x202,$W202,$S202,$U202);$x203=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_returnArray,JS::toString($x198,$global),108,20,\'<image>/10_regexp.js\');$x202=&$x203[0];list(,$W202,$S202,$U202)=$x203;if($U202&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[$x198]=$x202;$x202=&$_returnArray->properties[$x198];$_returnArray->attributes[$x198]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U202=FALSE;$W202=TRUE;}if(isset($S202)){$x205=$S202->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x206=$x205($global,$_returnArray,$S202,array($matches[0][1]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x204=$x206;}else{if(!$U202){$x204=$matches[0][1];if($W202){$x202=$matches[0][1];}}else{$x204=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'&&is_int(\'index\')&&\'index\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'index\'+1;}$x207=JS::toString($_string,$global);$x208=JS::toString(\'input\',$global);if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x209=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),109,20,\'<image>/10_regexp.js\');$_TypeError=&$x209[0];list(,$WTypeError,$STypeError,$UTypeError)=$x209;$x210=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x211=$x210($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x211->class)&&$x211->class===\'Error\'&&!isset($x211->properties[\'file\'])&&!isset($x211->properties[\'line\'])&&!isset($x211->properties[\'column\'])){$x211->properties[\'file\']=\'<image>/10_regexp.js\';$x211->properties[\'line\']=109;$x211->properties[\'column\']=20;$x211->attributes[\'file\']=$x211->attributes[\'line\']=$x211->attributes[\'column\']=0;}throw new JSException($x211,109,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x212,$W212,$S212,$U212);$x213=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_returnArray,JS::toString($x208,$global),109,20,\'<image>/10_regexp.js\');$x212=&$x213[0];list(,$W212,$S212,$U212)=$x213;if($U212&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[$x208]=$x212;$x212=&$_returnArray->properties[$x208];$_returnArray->attributes[$x208]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U212=FALSE;$W212=TRUE;}if(isset($S212)){$x215=$S212->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x216=$x215($global,$_returnArray,$S212,array($x207),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x214=$x216;}else{if(!$U212){$x214=$x207;if($W212){$x212=$x207;}}else{$x214=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'&&is_int(\'input\')&&\'input\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'input\'+1;}return$_returnArray;return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x230 =& $scope->properties['arguments'];
$x230->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x230->properties[$i] = $args[$i];
$x230->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x233 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x233[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x233;
$x234 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x235 = $x234($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x235->class) && $x235->class === 'Error' && !isset($x235->properties['file']) && !isset($x235->properties['line']) && !isset($x235->properties['column'])) {$x235->properties['file'] = '<image>/10_regexp.js';$x235->properties['line'] = 115;$x235->properties['column'] = 18;$x235->attributes['file'] = $x235->attributes['line'] = $x235->attributes['column'] = 0; }
throw new JSException($x235, 115, 18, '<image>/10_regexp.js');
}
$x232 = JS::toObject($leThis, $global);
unset($x236, $W236, $S236, $U236);
$x237 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $x232, JS::toString('exec', $global), 115, 18, '<image>/10_regexp.js');
$x236 =& $x237[0]; list(,$W236,$S236,$U236) = $x237;
if (!(is_object($x236) && isset($x236->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x240 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x240[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x240;
$x241 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x242 = $x241($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x242->class) && $x242->class === 'Error' && !isset($x242->properties['file']) && !isset($x242->properties['line']) && !isset($x242->properties['column'])) {$x242->properties['file'] = '<image>/10_regexp.js';$x242->properties['line'] = 115;$x242->properties['column'] = 18;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 115, 18, '<image>/10_regexp.js');
}
$x238 = $x236->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x239 = $x238($global, $x232, $x236, array($_string), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x231 = !(((gettype($x239) === gettype(NULL) && $x239 === NULL))|| (((is_float($x239) || is_int($x239)) && (is_float(NULL) || is_int(NULL))) && $x239 == NULL));
return $x231;
;
return JS::$undefined;
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x230=&$scope->properties[\'arguments\'];$x230->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x230->properties[$i]=$args[$i];$x230->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x233=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,18,\'<image>/10_regexp.js\');$_TypeError=&$x233[0];list(,$WTypeError,$STypeError,$UTypeError)=$x233;$x234=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x235=$x234($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x235->class)&&$x235->class===\'Error\'&&!isset($x235->properties[\'file\'])&&!isset($x235->properties[\'line\'])&&!isset($x235->properties[\'column\'])){$x235->properties[\'file\']=\'<image>/10_regexp.js\';$x235->properties[\'line\']=115;$x235->properties[\'column\']=18;$x235->attributes[\'file\']=$x235->attributes[\'line\']=$x235->attributes[\'column\']=0;}throw new JSException($x235,115,18,\'<image>/10_regexp.js\');}$x232=JS::toObject($leThis,$global);unset($x236,$W236,$S236,$U236);$x237=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$x232,JS::toString(\'exec\',$global),115,18,\'<image>/10_regexp.js\');$x236=&$x237[0];list(,$W236,$S236,$U236)=$x237;if(!(is_object($x236)&&isset($x236->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x240=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,18,\'<image>/10_regexp.js\');$_TypeError=&$x240[0];list(,$WTypeError,$STypeError,$UTypeError)=$x240;$x241=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x242=$x241($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x242->class)&&$x242->class===\'Error\'&&!isset($x242->properties[\'file\'])&&!isset($x242->properties[\'line\'])&&!isset($x242->properties[\'column\'])){$x242->properties[\'file\']=\'<image>/10_regexp.js\';$x242->properties[\'line\']=115;$x242->properties[\'column\']=18;$x242->attributes[\'file\']=$x242->attributes[\'line\']=$x242->attributes[\'column\']=0;}throw new JSException($x242,115,18,\'<image>/10_regexp.js\');}$x238=$x236->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x239=$x238($global,$x232,$x236,array($_string),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x231=!(((gettype($x239)===gettype(NULL)&&$x239===NULL))||(((is_float($x239)||is_int($x239))&&(is_float(NULL)||is_int(NULL)))&&$x239==NULL));return$x231;return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x256 =& $scope->properties['arguments'];
$x256->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x256->properties[$i] = $args[$i];
$x256->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
unset($x257, $W257, $S257, $U257);
$x258 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('global', $global), 121, 10, '<image>/10_regexp.js');
$x257 =& $x258[0]; list(,$W257,$S257,$U257) = $x258;
if (JS::toBoolean($x257, $global)) {
$x259 = 'g';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x260 = JS::toPrimitive($_flags, $global);
$x261 = JS::toPrimitive($x259, $global);
$_flags = (is_string($x260) || is_string($x261) ? JS::toString($x260, $global) . JS::toString($x261, $global) : JS::toNumber($x260, $global) + JS::toNumber($x261, $global));;
};
unset($x262, $W262, $S262, $U262);
$x263 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('ignoreCase', $global), 124, 10, '<image>/10_regexp.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
if (JS::toBoolean($x262, $global)) {
$x264 = 'i';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x265 = JS::toPrimitive($_flags, $global);
$x266 = JS::toPrimitive($x264, $global);
$_flags = (is_string($x265) || is_string($x266) ? JS::toString($x265, $global) . JS::toString($x266, $global) : JS::toNumber($x265, $global) + JS::toNumber($x266, $global));;
};
unset($x267, $W267, $S267, $U267);
$x268 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('multiline', $global), 127, 10, '<image>/10_regexp.js');
$x267 =& $x268[0]; list(,$W267,$S267,$U267) = $x268;
if (JS::toBoolean($x267, $global)) {
$x269 = 'm';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x270 = JS::toPrimitive($_flags, $global);
$x271 = JS::toPrimitive($x269, $global);
$_flags = (is_string($x270) || is_string($x271) ? JS::toString($x270, $global) . JS::toString($x271, $global) : JS::toNumber($x270, $global) + JS::toNumber($x271, $global));;
};
unset($x278, $W278, $S278, $U278);
$x279 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('source', $global), 130, 19, '<image>/10_regexp.js');
$x278 =& $x279[0]; list(,$W278,$S278,$U278) = $x279;
$x276 = JS::toPrimitive('/', $global);
$x277 = JS::toPrimitive($x278, $global);
$x274 = JS::toPrimitive((is_string($x276) || is_string($x277) ? JS::toString($x276, $global) . JS::toString($x277, $global) : JS::toNumber($x276, $global) + JS::toNumber($x277, $global)), $global);
$x275 = JS::toPrimitive('/', $global);
$x272 = JS::toPrimitive((is_string($x274) || is_string($x275) ? JS::toString($x274, $global) . JS::toString($x275, $global) : JS::toNumber($x274, $global) + JS::toNumber($x275, $global)), $global);
$x273 = JS::toPrimitive($_flags, $global);
return (is_string($x272) || is_string($x273) ? JS::toString($x272, $global) . JS::toString($x273, $global) : JS::toNumber($x272, $global) + JS::toNumber($x273, $global));
;
return JS::$undefined;
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x256=&$scope->properties[\'arguments\'];$x256->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x256->properties[$i]=$args[$i];$x256->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';unset($x257,$W257,$S257,$U257);$x258=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'global\',$global),121,10,\'<image>/10_regexp.js\');$x257=&$x258[0];list(,$W257,$S257,$U257)=$x258;if(JS::toBoolean($x257,$global)){$x259=\'g\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x260=JS::toPrimitive($_flags,$global);$x261=JS::toPrimitive($x259,$global);$_flags=(is_string($x260)||is_string($x261)?JS::toString($x260,$global).JS::toString($x261,$global):JS::toNumber($x260,$global)+JS::toNumber($x261,$global));}unset($x262,$W262,$S262,$U262);$x263=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'ignoreCase\',$global),124,10,\'<image>/10_regexp.js\');$x262=&$x263[0];list(,$W262,$S262,$U262)=$x263;if(JS::toBoolean($x262,$global)){$x264=\'i\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x265=JS::toPrimitive($_flags,$global);$x266=JS::toPrimitive($x264,$global);$_flags=(is_string($x265)||is_string($x266)?JS::toString($x265,$global).JS::toString($x266,$global):JS::toNumber($x265,$global)+JS::toNumber($x266,$global));}unset($x267,$W267,$S267,$U267);$x268=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'multiline\',$global),127,10,\'<image>/10_regexp.js\');$x267=&$x268[0];list(,$W267,$S267,$U267)=$x268;if(JS::toBoolean($x267,$global)){$x269=\'m\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x270=JS::toPrimitive($_flags,$global);$x271=JS::toPrimitive($x269,$global);$_flags=(is_string($x270)||is_string($x271)?JS::toString($x270,$global).JS::toString($x271,$global):JS::toNumber($x270,$global)+JS::toNumber($x271,$global));}unset($x278,$W278,$S278,$U278);$x279=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'source\',$global),130,19,\'<image>/10_regexp.js\');$x278=&$x279[0];list(,$W278,$S278,$U278)=$x279;$x276=JS::toPrimitive(\'/\',$global);$x277=JS::toPrimitive($x278,$global);$x274=JS::toPrimitive((is_string($x276)||is_string($x277)?JS::toString($x276,$global).JS::toString($x277,$global):JS::toNumber($x276,$global)+JS::toNumber($x277,$global)),$global);$x275=JS::toPrimitive(\'/\',$global);$x272=JS::toPrimitive((is_string($x274)||is_string($x275)?JS::toString($x274,$global).JS::toString($x275,$global):JS::toNumber($x274,$global)+JS::toNumber($x275,$global)),$global);$x273=JS::toPrimitive($_flags,$global);return(is_string($x272)||is_string($x273)?JS::toString($x272,$global).JS::toString($x273,$global):JS::toNumber($x272,$global)+JS::toNumber($x273,$global));return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/10_regexp.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/10_regexp.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_RegExp;
$x84 = clone JS::$functionTemplate; $x84->call = '_288ff711bd10592118ad8a0bec5c87f0_1'; $x84->parameters = array (
  0 => 'pattern',
  1 => 'flags',
); $x84->name = 'RegExp'; $x84->scope = $scope; $x84->properties['prototype'] = clone JS::$objectTemplate; $x84->attributes['prototype'] = JS::WRITABLE; $x84->properties['prototype']->properties['constructor'] = $x84; $x84->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x84->properties['length'] = 2; $x84->attributes['length'] = 0;
$scope->properties['RegExp'] = JS::$undefined; $_RegExp =& $scope->properties['RegExp'];
$URegExp = FALSE;
$_RegExp = $x84;
$x85 = clone JS::$objectTemplate;
$x85->properties['source'] = '';
$x85->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x85->properties['global'] = false;
$x85->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x85->properties['ignoreCase'] = false;
$x85->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x85->properties['multiline'] = false;
$x85->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x85->properties['lastIndex'] = 0;
$x85->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x86 = JS::toString('prototype', $global);
if ($_RegExp === JS::$undefined || $_RegExp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x87 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 47, 18, '<image>/10_regexp.js');
$_TypeError =& $x87[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x87;
$x88 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x89 = $x88($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error' && !isset($x89->properties['file']) && !isset($x89->properties['line']) && !isset($x89->properties['column'])) {$x89->properties['file'] = '<image>/10_regexp.js';$x89->properties['line'] = 47;$x89->properties['column'] = 18;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, 47, 18, '<image>/10_regexp.js');
}
$_RegExp = JS::toObject($_RegExp, $global);
unset($x90, $W90, $S90, $U90);
$x91 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_RegExp, JS::toString($x86, $global), 47, 18, '<image>/10_regexp.js');
$x90 =& $x91[0]; list(,$W90,$S90,$U90) = $x91;
if ($U90 && (!isset($_RegExp->extensible) || $_RegExp->extensible)) {$_RegExp->properties[$x86] = $x90; $x90 =& $_RegExp->properties[$x86]; $_RegExp->attributes[$x86] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U90 = FALSE; $W90 = TRUE; }
if (isset($S90)) {
$x93 = $S90->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x94 = $x93($global, $_RegExp, $S90, array($x85), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x92 = $x94;
} else {
if (!$U90) {$x92 = $x85;if ($W90) { $x90 = $x85; }  }
else { $x92 = JS::$undefined; }
}
if (isset($_RegExp->class) && $_RegExp->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_RegExp->properties['length']) { $_RegExp->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x95 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('Object', $global), 54, 51, '<image>/10_regexp.js');
$_Object =& $x95[0]; list(,$WObject,$SObject,$UObject) = $x95;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x96 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 54, 51, '<image>/10_regexp.js');
$_ReferenceError =& $x96[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x96;
$x97 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 54, 51);
$x98 = $x97($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x98->class) && $x98->class === 'Error' && !isset($x98->properties['file']) && !isset($x98->properties['line']) && !isset($x98->properties['column'])) {$x98->properties['file'] = '<image>/10_regexp.js';$x98->properties['line'] = 54;$x98->properties['column'] = 51;$x98->attributes['file'] = $x98->attributes['line'] = $x98->attributes['column'] = 0; }
throw new JSException($x98, 54, 51, '<image>/10_regexp.js');
}
$_RegExp->properties['prototype']->prototype =$_Object->properties['prototype'];
$_RegExp->properties['prototype']->class = 'RegExp';
$_RegExp->properties['prototype']->extensible = TRUE;
unset($x99, $W99, $S99, $U99);
$x100 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 57, 7, '<image>/10_regexp.js');
$x99 =& $x100[0]; list(,$W99,$S99,$U99) = $x100;
$x101 = JS::toString('constructor', $global);
if ($x99 === JS::$undefined || $x99 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x102 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 57, 30, '<image>/10_regexp.js');
$_TypeError =& $x102[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x102;
$x103 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x104 = $x103($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/10_regexp.js';$x104->properties['line'] = 57;$x104->properties['column'] = 30;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 57, 30, '<image>/10_regexp.js');
}
$x99 = JS::toObject($x99, $global);
unset($x105, $W105, $S105, $U105);
$x106 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x99, JS::toString($x101, $global), 57, 30, '<image>/10_regexp.js');
$x105 =& $x106[0]; list(,$W105,$S105,$U105) = $x106;
if ($U105 && (!isset($x99->extensible) || $x99->extensible)) {$x99->properties[$x101] = $x105; $x105 =& $x99->properties[$x101]; $x99->attributes[$x101] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U105 = FALSE; $W105 = TRUE; }
if (isset($S105)) {
$x108 = $S105->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x109 = $x108($global, $x99, $S105, array($_RegExp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x107 = $x109;
} else {
if (!$U105) {$x107 = $_RegExp;if ($W105) { $x105 = $_RegExp; }  }
else { $x107 = JS::$undefined; }
}
if (isset($x99->class) && $x99->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x99->properties['length']) { $x99->properties['length'] = 'constructor' + 1; };
$x217 = clone JS::$functionTemplate; $x217->call = '_288ff711bd10592118ad8a0bec5c87f0_5'; $x217->parameters = array (
  0 => 'string',
); $x217->scope = $scope; $x217->properties['prototype'] = clone JS::$objectTemplate; $x217->attributes['prototype'] = JS::WRITABLE; $x217->properties['prototype']->properties['constructor'] = $x217; $x217->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x217->properties['length'] = 1; $x217->attributes['length'] = 0;
unset($x218, $W218, $S218, $U218);
$x219 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 59, 7, '<image>/10_regexp.js');
$x218 =& $x219[0]; list(,$W218,$S218,$U218) = $x219;
$x220 = JS::toString('exec', $global);
if ($x218 === JS::$undefined || $x218 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x221 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 59, 23, '<image>/10_regexp.js');
$_TypeError =& $x221[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x221;
$x222 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x223 = $x222($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x223->class) && $x223->class === 'Error' && !isset($x223->properties['file']) && !isset($x223->properties['line']) && !isset($x223->properties['column'])) {$x223->properties['file'] = '<image>/10_regexp.js';$x223->properties['line'] = 59;$x223->properties['column'] = 23;$x223->attributes['file'] = $x223->attributes['line'] = $x223->attributes['column'] = 0; }
throw new JSException($x223, 59, 23, '<image>/10_regexp.js');
}
$x218 = JS::toObject($x218, $global);
unset($x224, $W224, $S224, $U224);
$x225 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x218, JS::toString($x220, $global), 59, 23, '<image>/10_regexp.js');
$x224 =& $x225[0]; list(,$W224,$S224,$U224) = $x225;
if ($U224 && (!isset($x218->extensible) || $x218->extensible)) {$x218->properties[$x220] = $x224; $x224 =& $x218->properties[$x220]; $x218->attributes[$x220] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U224 = FALSE; $W224 = TRUE; }
if (isset($S224)) {
$x227 = $S224->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x228 = $x227($global, $x218, $S224, array($x217), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x226 = $x228;
} else {
if (!$U224) {$x226 = $x217;if ($W224) { $x224 = $x217; }  }
else { $x226 = JS::$undefined; }
}
if (isset($x218->class) && $x218->class === 'Array' &&  is_int('exec') && 'exec' >= $x218->properties['length']) { $x218->properties['length'] = 'exec' + 1; };
$x243 = clone JS::$functionTemplate; $x243->call = '_288ff711bd10592118ad8a0bec5c87f0_6'; $x243->parameters = array (
  0 => 'string',
); $x243->scope = $scope; $x243->properties['prototype'] = clone JS::$objectTemplate; $x243->attributes['prototype'] = JS::WRITABLE; $x243->properties['prototype']->properties['constructor'] = $x243; $x243->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x243->properties['length'] = 1; $x243->attributes['length'] = 0;
unset($x244, $W244, $S244, $U244);
$x245 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 114, 7, '<image>/10_regexp.js');
$x244 =& $x245[0]; list(,$W244,$S244,$U244) = $x245;
$x246 = JS::toString('test', $global);
if ($x244 === JS::$undefined || $x244 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x247 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 114, 23, '<image>/10_regexp.js');
$_TypeError =& $x247[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x247;
$x248 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x249 = $x248($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x249->class) && $x249->class === 'Error' && !isset($x249->properties['file']) && !isset($x249->properties['line']) && !isset($x249->properties['column'])) {$x249->properties['file'] = '<image>/10_regexp.js';$x249->properties['line'] = 114;$x249->properties['column'] = 23;$x249->attributes['file'] = $x249->attributes['line'] = $x249->attributes['column'] = 0; }
throw new JSException($x249, 114, 23, '<image>/10_regexp.js');
}
$x244 = JS::toObject($x244, $global);
unset($x250, $W250, $S250, $U250);
$x251 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x244, JS::toString($x246, $global), 114, 23, '<image>/10_regexp.js');
$x250 =& $x251[0]; list(,$W250,$S250,$U250) = $x251;
if ($U250 && (!isset($x244->extensible) || $x244->extensible)) {$x244->properties[$x246] = $x250; $x250 =& $x244->properties[$x246]; $x244->attributes[$x246] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U250 = FALSE; $W250 = TRUE; }
if (isset($S250)) {
$x253 = $S250->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x254 = $x253($global, $x244, $S250, array($x243), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x252 = $x254;
} else {
if (!$U250) {$x252 = $x243;if ($W250) { $x250 = $x243; }  }
else { $x252 = JS::$undefined; }
}
if (isset($x244->class) && $x244->class === 'Array' &&  is_int('test') && 'test' >= $x244->properties['length']) { $x244->properties['length'] = 'test' + 1; };
$x280 = clone JS::$functionTemplate; $x280->call = '_288ff711bd10592118ad8a0bec5c87f0_7'; $x280->parameters = array (
); $x280->scope = $scope; $x280->properties['prototype'] = clone JS::$objectTemplate; $x280->attributes['prototype'] = JS::WRITABLE; $x280->properties['prototype']->properties['constructor'] = $x280; $x280->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x280->properties['length'] = 0; $x280->attributes['length'] = 0;
unset($x281, $W281, $S281, $U281);
$x282 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 118, 7, '<image>/10_regexp.js');
$x281 =& $x282[0]; list(,$W281,$S281,$U281) = $x282;
$x283 = JS::toString('toString', $global);
if ($x281 === JS::$undefined || $x281 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x284 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 118, 27, '<image>/10_regexp.js');
$_TypeError =& $x284[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x284;
$x285 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x286 = $x285($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x286->class) && $x286->class === 'Error' && !isset($x286->properties['file']) && !isset($x286->properties['line']) && !isset($x286->properties['column'])) {$x286->properties['file'] = '<image>/10_regexp.js';$x286->properties['line'] = 118;$x286->properties['column'] = 27;$x286->attributes['file'] = $x286->attributes['line'] = $x286->attributes['column'] = 0; }
throw new JSException($x286, 118, 27, '<image>/10_regexp.js');
}
$x281 = JS::toObject($x281, $global);
unset($x287, $W287, $S287, $U287);
$x288 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x281, JS::toString($x283, $global), 118, 27, '<image>/10_regexp.js');
$x287 =& $x288[0]; list(,$W287,$S287,$U287) = $x288;
if ($U287 && (!isset($x281->extensible) || $x281->extensible)) {$x281->properties[$x283] = $x287; $x287 =& $x281->properties[$x283]; $x281->attributes[$x283] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U287 = FALSE; $W287 = TRUE; }
if (isset($S287)) {
$x290 = $S287->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x291 = $x290($global, $x281, $S287, array($x280), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x289 = $x291;
} else {
if (!$U287) {$x289 = $x280;if ($W287) { $x287 = $x280; }  }
else { $x289 = JS::$undefined; }
}
if (isset($x281->class) && $x281->class === 'Array' &&  is_int('toString') && 'toString' >= $x281->properties['length']) { $x281->properties['length'] = 'toString' + 1; };
;
return JS::$undefined;
}
