function _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x8=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x9=$x8($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x9;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x14 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x14[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x14;
$x15 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x16 = $x15($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x16->class) && $x16->class === 'Error') {$x16->properties['file'] = $file;$x16->properties['line'] = $line;$x16->properties['column'] = $column;$x16->attributes['file'] = $x16->attributes['line'] = $x16->attributes['column'] = 0; }
throw new JSException($x16, $line, $column, $file);
}
$W13 = $S13 = $U13 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x13 =& $lookup->properties[$id]; $W13 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S13 = $lookup->setters[$id]; }
else { $x13 = JS::$undefined; $U13 = TRUE; }
return array(&$x13, $W13, $S13, $U13);
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x14=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x14[0];list(,$WTypeError,$STypeError,$UTypeError)=$x14;$x15=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x16=$x15($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x16->class)&&$x16->class===\'Error\'){$x16->properties[\'file\']=$file;$x16->properties[\'line\']=$line;$x16->properties[\'column\']=$column;$x16->attributes[\'file\']=$x16->attributes[\'line\']=$x16->attributes[\'column\']=0;}throw new JSException($x16,$line,$column,$file);}$W13=$S13=$U13=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x13=&$lookup->properties[$id];$W13=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S13=$lookup->setters[$id];}else{$x13=JS::$undefined;$U13=TRUE;}return array(&$x13,$W13,$S13,$U13);}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x69 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x69[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x69;
$x70 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x71 = $x70($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x71->class) && $x71->class === 'Error') {$x71->properties['file'] = $file;$x71->properties['line'] = $line;$x71->properties['column'] = $column;$x71->attributes['file'] = $x71->attributes['line'] = $x71->attributes['column'] = 0; }
throw new JSException($x71, $line, $column, $file);
}
$W68 = $S68 = $U68 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x68 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x72 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x73 = $x72($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x68 = $x73; }
else { $x68 = JS::$undefined; $U68 = TRUE; }
return array(&$x68, $W68, $S68, $U68);
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x69=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x69[0];list(,$WTypeError,$STypeError,$UTypeError)=$x69;$x70=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x71=$x70($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x71->class)&&$x71->class===\'Error\'){$x71->properties[\'file\']=$file;$x71->properties[\'line\']=$line;$x71->properties[\'column\']=$column;$x71->attributes[\'file\']=$x71->attributes[\'line\']=$x71->attributes[\'column\']=0;}throw new JSException($x71,$line,$column,$file);}$W68=$S68=$U68=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x68=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x72=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x73=$x72($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x68=$x73;}else{$x68=JS::$undefined;$U68=TRUE;}return array(&$x68,$W68,$S68,$U68);}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 25, 11, '<image>/10_regexp.js');
$_TypeError =& $x10[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x10;
$x11 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 25, 11);
$x12 = $x11($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x12->class) && $x12->class === 'Error') {$x12->properties['file'] = '<image>/10_regexp.js';$x12->properties['line'] = 25;$x12->properties['column'] = 11;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
throw new JSException($x12, 25, 11, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x13, $W13, $S13, $U13);
$x17 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'source', 25, 11, '<image>/10_regexp.js');
$x13 =& $x17[0]; list(,$W13,$S13,$U13) = $x17;
if ($U13 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['source'] = $x13; $x13 =& $_r->properties['source']; $_r->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U13 = FALSE; $W13 = TRUE; }
if (isset($S13)) {
$x19 = $S13->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 25, 11);
$x20 = $x19($global, $_r, $S13, array($x7), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x18 = $x20;
} else {
if (!$U13) {$x18 = $x7;if ($W13) { $x13 = $x7; }  }
else { $x18 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('source') && 'source' >= $_r->properties['length']) { $_r->properties['length'] = 'source' + 1; };
for ($x21 = 0;; ++$x21) {
if ($x21 === 0) {
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
if ($x21 !== 0) {
$x22 = ++$_i;
}
$x23 = JS::toPrimitive($_i, $global);
$x24 = JS::toPrimitive($_l, $global);
$x25 = (is_string($x23) && is_string($x24) ? strcmp($x23, $x24) < 0 : (!is_nan($x26 = JS::toNumber($x23, $global)) && !is_nan($x27 = JS::toNumber($x24, $global)) && $x26 < $x27));
if (!JS::toBoolean($x25, $global)) { break; }

$_c= substr($_flags,$_i, 1);
$x28 = (((gettype($_c) === gettype('g') && $_c === 'g'))|| (((is_float($_c) || is_int($_c)) && (is_float('g') || is_int('g'))) && $_c == 'g'));
if (JS::toBoolean($x28, $global)) {
$x29 = true;
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 31, 13, '<image>/10_regexp.js');
$_TypeError =& $x30[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x30;
$x31 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x32 = $x31($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x32->class) && $x32->class === 'Error') {$x32->properties['file'] = '<image>/10_regexp.js';$x32->properties['line'] = 31;$x32->properties['column'] = 13;$x32->attributes['file'] = $x32->attributes['line'] = $x32->attributes['column'] = 0; }
throw new JSException($x32, 31, 13, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x33, $W33, $S33, $U33);
$x34 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'global', 31, 13, '<image>/10_regexp.js');
$x33 =& $x34[0]; list(,$W33,$S33,$U33) = $x34;
if ($U33 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['global'] = $x33; $x33 =& $_r->properties['global']; $_r->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U33 = FALSE; $W33 = TRUE; }
if (isset($S33)) {
$x36 = $S33->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x37 = $x36($global, $_r, $S33, array($x29), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x35 = $x37;
} else {
if (!$U33) {$x35 = $x29;if ($W33) { $x33 = $x29; }  }
else { $x35 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('global') && 'global' >= $_r->properties['length']) { $_r->properties['length'] = 'global' + 1; };
}
else {
$x38 = (((gettype($_c) === gettype('i') && $_c === 'i'))|| (((is_float($_c) || is_int($_c)) && (is_float('i') || is_int('i'))) && $_c == 'i'));
if (JS::toBoolean($x38, $global)) {
$x39 = true;
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x40 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 33, 17, '<image>/10_regexp.js');
$_TypeError =& $x40[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x40;
$x41 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x42 = $x41($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x42->class) && $x42->class === 'Error') {$x42->properties['file'] = '<image>/10_regexp.js';$x42->properties['line'] = 33;$x42->properties['column'] = 17;$x42->attributes['file'] = $x42->attributes['line'] = $x42->attributes['column'] = 0; }
throw new JSException($x42, 33, 17, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x43, $W43, $S43, $U43);
$x44 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'ignoreCase', 33, 17, '<image>/10_regexp.js');
$x43 =& $x44[0]; list(,$W43,$S43,$U43) = $x44;
if ($U43 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['ignoreCase'] = $x43; $x43 =& $_r->properties['ignoreCase']; $_r->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U43 = FALSE; $W43 = TRUE; }
if (isset($S43)) {
$x46 = $S43->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x47 = $x46($global, $_r, $S43, array($x39), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x45 = $x47;
} else {
if (!$U43) {$x45 = $x39;if ($W43) { $x43 = $x39; }  }
else { $x45 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('ignoreCase') && 'ignoreCase' >= $_r->properties['length']) { $_r->properties['length'] = 'ignoreCase' + 1; };
}
else {
$x48 = (((gettype($_c) === gettype('m') && $_c === 'm'))|| (((is_float($_c) || is_int($_c)) && (is_float('m') || is_int('m'))) && $_c == 'm'));
if (JS::toBoolean($x48, $global)) {
$x49 = true;
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x50 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 35, 16, '<image>/10_regexp.js');
$_TypeError =& $x50[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x50;
$x51 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x52 = $x51($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x52->class) && $x52->class === 'Error') {$x52->properties['file'] = '<image>/10_regexp.js';$x52->properties['line'] = 35;$x52->properties['column'] = 16;$x52->attributes['file'] = $x52->attributes['line'] = $x52->attributes['column'] = 0; }
throw new JSException($x52, 35, 16, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x53, $W53, $S53, $U53);
$x54 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'multiline', 35, 16, '<image>/10_regexp.js');
$x53 =& $x54[0]; list(,$W53,$S53,$U53) = $x54;
if ($U53 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['multiline'] = $x53; $x53 =& $_r->properties['multiline']; $_r->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U53 = FALSE; $W53 = TRUE; }
if (isset($S53)) {
$x56 = $S53->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x57 = $x56($global, $_r, $S53, array($x49), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x55 = $x57;
} else {
if (!$U53) {$x55 = $x49;if ($W53) { $x53 = $x49; }  }
else { $x55 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('multiline') && 'multiline' >= $_r->properties['length']) { $_r->properties['length'] = 'multiline' + 1; };
}
else {
unset($_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
$x60 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'SyntaxError', 37, 14, '<image>/10_regexp.js');
$_SyntaxError =& $x60[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x60;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x61 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'ReferenceError', 37, 14, '<image>/10_regexp.js');
$_ReferenceError =& $x61[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x61;
$x62 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 14);
$x63 = $x62($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x63->class) && $x63->class === 'Error') {$x63->properties['file'] = '<image>/10_regexp.js';$x63->properties['line'] = 37;$x63->properties['column'] = 14;$x63->attributes['file'] = $x63->attributes['line'] = $x63->attributes['column'] = 0; }
throw new JSException($x63, 37, 14, '<image>/10_regexp.js');
}
$x66 = JS::toPrimitive('RegExp(): Unknow regexp flag ', $global);
$x67 = JS::toPrimitive($_c, $global);
$x64 = JS::toPrimitive((is_string($x66) || is_string($x67) ? JS::toString($x66, $global) . JS::toString($x67, $global) : JS::toNumber($x66, $global) + JS::toNumber($x67, $global)), $global);
$x65 = JS::toPrimitive('.', $global);
$x58 = clone JS::$objectTemplate;
unset($x68, $W68, $S68, $U68);
$x74 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_SyntaxError, (string) 'prototype', 37, 10, '<image>/10_regexp.js');
$x68 =& $x74[0]; list(,$W68,$S68,$U68) = $x74;
$x59 = $x68;
$x58->prototype = $x59;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x77 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 37, 10, '<image>/10_regexp.js');
$_TypeError =& $x77[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x77;
$x78 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x79 = $x78($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error') {$x79->properties['file'] = '<image>/10_regexp.js';$x79->properties['line'] = 37;$x79->properties['column'] = 10;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, 37, 10, '<image>/10_regexp.js');
}
$x75 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x76 = $x75($global, $x58, $_SyntaxError, array((is_string($x64) || is_string($x65) ? JS::toString($x64, $global) . JS::toString($x65, $global) : JS::toNumber($x64, $global) + JS::toNumber($x65, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x59 = $x76;
if (is_object($x59) && $x59 !== JS::$undefined) { $x58 = $x59; }
if (isset($x58->class) && $x58->class === 'Error') {$x58->properties['file'] = '<image>/10_regexp.js';$x58->properties['line'] = 37;$x58->properties['column'] = 4;$x58->attributes['file'] = $x58->attributes['line'] = $x58->attributes['column'] = 0; }
throw new JSException($x58, 37, 4, '<image>/10_regexp.js');;
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
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pattern\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$scope->properties[\'flags\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$scope->properties[\'RegExp\']=$fn;$_RegExp=&$scope->properties[\'RegExp\'];$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(is_object($_pattern)&&isset($_pattern->class)&&$_pattern->class===\'RegExp\',$global)){return$_pattern;}$x2=(((gettype($_pattern)===gettype(JS::$undefined)&&$_pattern===JS::$undefined))||(((is_float($_pattern)||is_int($_pattern))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_pattern==JS::$undefined));if(JS::toBoolean($x2,$global)){$x3=\'\';if($Upattern){$global->properties[\'pattern\']=$_pattern;$_pattern=&$global->properties[\'pattern\'];}$_pattern=$x3;}$x4=(((gettype($_flags)===gettype(JS::$undefined)&&$_flags===JS::$undefined))||(((is_float($_flags)||is_int($_flags))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_flags==JS::$undefined));if(JS::toBoolean($x4,$global)){$x5=\'\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$_flags=$x5;}$x6=clone JS::$objectTemplate;$x6->properties[\'source\']=JS::toString($_pattern,$global);$x6->attributes[\'source\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'global\']=false;$x6->attributes[\'global\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'ignoreCase\']=false;$x6->attributes[\'ignoreCase\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'multiline\']=false;$x6->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'lastIndex\']=0;$x6->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=$x6;$_r->class=\'RegExp\';$_r->prototype=$_RegExp->properties[\'prototype\'];$x7=JS::toString($_pattern,$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',25,11,\'<image>/10_regexp.js\');$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x12=$x11($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'){$x12->properties[\'file\']=\'<image>/10_regexp.js\';$x12->properties[\'line\']=25;$x12->properties[\'column\']=11;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,25,11,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x13,$W13,$S13,$U13);$x17=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'source\',25,11,\'<image>/10_regexp.js\');$x13=&$x17[0];list(,$W13,$S13,$U13)=$x17;if($U13&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'source\']=$x13;$x13=&$_r->properties[\'source\'];$_r->attributes[\'source\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U13=FALSE;$W13=TRUE;}if(isset($S13)){$x19=$S13->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x20=$x19($global,$_r,$S13,array($x7),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x18=$x20;}else{if(!$U13){$x18=$x7;if($W13){$x13=$x7;}}else{$x18=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'source\')&&\'source\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'source\'+1;}for($x21=0;;++$x21){if($x21===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=strlen($_flags);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=JS::$undefined;}if($x21!==0){$x22=++$_i;}$x23=JS::toPrimitive($_i,$global);$x24=JS::toPrimitive($_l,$global);$x25=(is_string($x23)&&is_string($x24)?strcmp($x23,$x24)<0:(!is_nan($x26=JS::toNumber($x23,$global))&&!is_nan($x27=JS::toNumber($x24,$global))&&$x26<$x27));if(!JS::toBoolean($x25,$global)){break;}$_c=substr($_flags,$_i,1);$x28=(((gettype($_c)===gettype(\'g\')&&$_c===\'g\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'g\')||is_int(\'g\')))&&$_c==\'g\'));if(JS::toBoolean($x28,$global)){$x29=true;if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',31,13,\'<image>/10_regexp.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x32=$x31($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'){$x32->properties[\'file\']=\'<image>/10_regexp.js\';$x32->properties[\'line\']=31;$x32->properties[\'column\']=13;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,31,13,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x33,$W33,$S33,$U33);$x34=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'global\',31,13,\'<image>/10_regexp.js\');$x33=&$x34[0];list(,$W33,$S33,$U33)=$x34;if($U33&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'global\']=$x33;$x33=&$_r->properties[\'global\'];$_r->attributes[\'global\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U33=FALSE;$W33=TRUE;}if(isset($S33)){$x36=$S33->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x37=$x36($global,$_r,$S33,array($x29),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x35=$x37;}else{if(!$U33){$x35=$x29;if($W33){$x33=$x29;}}else{$x35=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'global\')&&\'global\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'global\'+1;}}else{$x38=(((gettype($_c)===gettype(\'i\')&&$_c===\'i\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'i\')||is_int(\'i\')))&&$_c==\'i\'));if(JS::toBoolean($x38,$global)){$x39=true;if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x40=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',33,17,\'<image>/10_regexp.js\');$_TypeError=&$x40[0];list(,$WTypeError,$STypeError,$UTypeError)=$x40;$x41=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x42=$x41($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x42->class)&&$x42->class===\'Error\'){$x42->properties[\'file\']=\'<image>/10_regexp.js\';$x42->properties[\'line\']=33;$x42->properties[\'column\']=17;$x42->attributes[\'file\']=$x42->attributes[\'line\']=$x42->attributes[\'column\']=0;}throw new JSException($x42,33,17,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x43,$W43,$S43,$U43);$x44=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'ignoreCase\',33,17,\'<image>/10_regexp.js\');$x43=&$x44[0];list(,$W43,$S43,$U43)=$x44;if($U43&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'ignoreCase\']=$x43;$x43=&$_r->properties[\'ignoreCase\'];$_r->attributes[\'ignoreCase\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U43=FALSE;$W43=TRUE;}if(isset($S43)){$x46=$S43->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x47=$x46($global,$_r,$S43,array($x39),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x45=$x47;}else{if(!$U43){$x45=$x39;if($W43){$x43=$x39;}}else{$x45=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'ignoreCase\')&&\'ignoreCase\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'ignoreCase\'+1;}}else{$x48=(((gettype($_c)===gettype(\'m\')&&$_c===\'m\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'m\')||is_int(\'m\')))&&$_c==\'m\'));if(JS::toBoolean($x48,$global)){$x49=true;if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x50=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',35,16,\'<image>/10_regexp.js\');$_TypeError=&$x50[0];list(,$WTypeError,$STypeError,$UTypeError)=$x50;$x51=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x52=$x51($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x52->class)&&$x52->class===\'Error\'){$x52->properties[\'file\']=\'<image>/10_regexp.js\';$x52->properties[\'line\']=35;$x52->properties[\'column\']=16;$x52->attributes[\'file\']=$x52->attributes[\'line\']=$x52->attributes[\'column\']=0;}throw new JSException($x52,35,16,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x53,$W53,$S53,$U53);$x54=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'multiline\',35,16,\'<image>/10_regexp.js\');$x53=&$x54[0];list(,$W53,$S53,$U53)=$x54;if($U53&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'multiline\']=$x53;$x53=&$_r->properties[\'multiline\'];$_r->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U53=FALSE;$W53=TRUE;}if(isset($S53)){$x56=$S53->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x57=$x56($global,$_r,$S53,array($x49),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x55=$x57;}else{if(!$U53){$x55=$x49;if($W53){$x53=$x49;}}else{$x55=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'multiline\')&&\'multiline\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'multiline\'+1;}}else{unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x60=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'SyntaxError\',37,14,\'<image>/10_regexp.js\');$_SyntaxError=&$x60[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x60;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x61=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'ReferenceError\',37,14,\'<image>/10_regexp.js\');$_ReferenceError=&$x61[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x61;$x62=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,14);$x63=$x62($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'){$x63->properties[\'file\']=\'<image>/10_regexp.js\';$x63->properties[\'line\']=37;$x63->properties[\'column\']=14;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,37,14,\'<image>/10_regexp.js\');}$x66=JS::toPrimitive(\'RegExp(): Unknow regexp flag \',$global);$x67=JS::toPrimitive($_c,$global);$x64=JS::toPrimitive((is_string($x66)||is_string($x67)?JS::toString($x66,$global).JS::toString($x67,$global):JS::toNumber($x66,$global)+JS::toNumber($x67,$global)),$global);$x65=JS::toPrimitive(\'.\',$global);$x58=clone JS::$objectTemplate;unset($x68,$W68,$S68,$U68);$x74=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$_SyntaxError,(string)\'prototype\',37,10,\'<image>/10_regexp.js\');$x68=&$x74[0];list(,$W68,$S68,$U68)=$x74;$x59=$x68;$x58->prototype=$x59;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x77=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',37,10,\'<image>/10_regexp.js\');$_TypeError=&$x77[0];list(,$WTypeError,$STypeError,$UTypeError)=$x77;$x78=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x79=$x78($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'){$x79->properties[\'file\']=\'<image>/10_regexp.js\';$x79->properties[\'line\']=37;$x79->properties[\'column\']=10;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,37,10,\'<image>/10_regexp.js\');}$x75=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x76=$x75($global,$x58,$_SyntaxError,array((is_string($x64)||is_string($x65)?JS::toString($x64,$global).JS::toString($x65,$global):JS::toNumber($x64,$global)+JS::toNumber($x65,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x59=$x76;if(is_object($x59)&&$x59!==JS::$undefined){$x58=$x59;}if(isset($x58->class)&&$x58->class===\'Error\'){$x58->properties[\'file\']=\'<image>/10_regexp.js\';$x58->properties[\'line\']=37;$x58->properties[\'column\']=4;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,37,4,\'<image>/10_regexp.js\');}}}}foreach($_r->attributes as$a=>$_){$_r->attributes[$a]=0;}$_r->attributes[\'lastIndex\']=JS::WRITABLE;return$_r;return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x105 =& $scope->properties['arguments'];
$x105->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x105->properties[$i] = $args[$i];
$x105->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x106 = JS::toString($_string, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x106;
unset($x107, $W107, $S107, $U107);
$x108 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_string, (string) 'length', 61, 21, '<image>/10_regexp.js');
$x107 =& $x108[0]; list(,$W107,$S107,$U107) = $x108;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = $x107;
unset($x109, $W109, $S109, $U109);
$x110 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'lastIndex', 61, 38, '<image>/10_regexp.js');
$x109 =& $x110[0]; list(,$W109,$S109,$U109) = $x110;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $x109;
unset($x111, $W111, $S111, $U111);
$x112 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'global', 63, 11, '<image>/10_regexp.js');
$x111 =& $x112[0]; list(,$W111,$S111,$U111) = $x112;
if (JS::toBoolean((!JS::toBoolean($x111, $global)), $global)) {
$x113 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x113;;
};
$x115 = JS::toPrimitive($_i, $global);
$x116 = JS::toPrimitive(0, $global);
$x117 = (is_string($x115) && is_string($x116) ? strcmp($x115, $x116) < 0 : (!is_nan($x118 = JS::toNumber($x115, $global)) && !is_nan($x119 = JS::toNumber($x116, $global)) && $x118 < $x119));
$x114 = $x117;
if (!JS::toBoolean($x114, $global)) {
$x120 = JS::toPrimitive($_i, $global);
$x121 = JS::toPrimitive($_length, $global);
$x122 = (is_string($x121) && is_string($x120) ? strcmp($x121, $x120) < 0 : (!is_nan($x123 = JS::toNumber($x121, $global)) && !is_nan($x124 = JS::toNumber($x120, $global)) && $x123 < $x124));
$x114 = $x122; }
if (JS::toBoolean($x114, $global)) {
$x125 = 0;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x126 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 68, 18, '<image>/10_regexp.js');
$_TypeError =& $x126[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x126;
$x127 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x128 = $x127($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x128->class) && $x128->class === 'Error') {$x128->properties['file'] = '<image>/10_regexp.js';$x128->properties['line'] = 68;$x128->properties['column'] = 18;$x128->attributes['file'] = $x128->attributes['line'] = $x128->attributes['column'] = 0; }
throw new JSException($x128, 68, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x129, $W129, $S129, $U129);
$x130 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $leThis, (string) 'lastIndex', 68, 18, '<image>/10_regexp.js');
$x129 =& $x130[0]; list(,$W129,$S129,$U129) = $x130;
if ($U129 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['lastIndex'] = $x129; $x129 =& $leThis->properties['lastIndex']; $leThis->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U129 = FALSE; $W129 = TRUE; }
if (isset($S129)) {
$x132 = $S129->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x133 = $x132($global, $leThis, $S129, array($x125), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x131 = $x133;
} else {
if (!$U129) {$x131 = $x125;if ($W129) { $x129 = $x125; }  }
else { $x131 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
return NULL;;
};
unset($x134, $W134, $S134, $U134);
$x135 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'source', 72, 20, '<image>/10_regexp.js');
$x134 =& $x135[0]; list(,$W134,$S134,$U134) = $x135;
$scope->properties['pattern'] = JS::$undefined; $_pattern =& $scope->properties['pattern'];
$Upattern = FALSE;
$_pattern = $x134;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
$scope->properties['result'] = JS::$undefined; $_result =& $scope->properties['result'];
$Uresult = FALSE;
$_result = JS::$undefined;
unset($x136, $W136, $S136, $U136);
$x137 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'ignoreCase', 74, 10, '<image>/10_regexp.js');
$x136 =& $x137[0]; list(,$W136,$S136,$U136) = $x137;
if (JS::toBoolean($x136, $global)) {
$x138 = 'i';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x139 = JS::toPrimitive($_flags, $global);
$x140 = JS::toPrimitive($x138, $global);
$_flags = (is_string($x139) || is_string($x140) ? JS::toString($x139, $global) . JS::toString($x140, $global) : JS::toNumber($x139, $global) + JS::toNumber($x140, $global));;
};
unset($x141, $W141, $S141, $U141);
$x142 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'multiline', 77, 10, '<image>/10_regexp.js');
$x141 =& $x142[0]; list(,$W141,$S141,$U141) = $x142;
if (JS::toBoolean($x141, $global)) {
$x143 = 'm';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x144 = JS::toPrimitive($_flags, $global);
$x145 = JS::toPrimitive($x143, $global);
$_flags = (is_string($x144) || is_string($x145) ? JS::toString($x144, $global) . JS::toString($x145, $global) : JS::toNumber($x144, $global) + JS::toNumber($x145, $global));;
};
$x146 = preg_match(
		'/' .$_pattern. '/' .$_flags,
		JS::toString($_string, $global),
		$matches,
		PREG_OFFSET_CAPTURE,$_i);
if ($Uresult) {$global->properties['result'] = $_result; $_result =& $global->properties['result']; }
$_result = $x146;
if (JS::toBoolean((!JS::toBoolean($_result, $global)), $global)) {
$x147 = 0;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x148 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 90, 18, '<image>/10_regexp.js');
$_TypeError =& $x148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x148;
$x149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x150 = $x149($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x150->class) && $x150->class === 'Error') {$x150->properties['file'] = '<image>/10_regexp.js';$x150->properties['line'] = 90;$x150->properties['column'] = 18;$x150->attributes['file'] = $x150->attributes['line'] = $x150->attributes['column'] = 0; }
throw new JSException($x150, 90, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x151, $W151, $S151, $U151);
$x152 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $leThis, (string) 'lastIndex', 90, 18, '<image>/10_regexp.js');
$x151 =& $x152[0]; list(,$W151,$S151,$U151) = $x152;
if ($U151 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['lastIndex'] = $x151; $x151 =& $leThis->properties['lastIndex']; $leThis->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U151 = FALSE; $W151 = TRUE; }
if (isset($S151)) {
$x154 = $S151->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x155 = $x154($global, $leThis, $S151, array($x147), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x153 = $x155;
} else {
if (!$U151) {$x153 = $x147;if ($W151) { $x151 = $x147; }  }
else { $x153 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
return NULL;;
};
$x156 = clone JS::$arrayTemplate;
$x156->properties['length'] = 0;
$x156->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x156;
foreach ($matches as $I => $match) {;
if ($match[0] === '' && $I !== 0) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x158 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x158[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x158;
$x159 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x160 = $x159($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x160->class) && $x160->class === 'Error') {$x160->properties['file'] = '<image>/10_regexp.js';$x160->properties['line'] = 98;$x160->properties['column'] = 20;$x160->attributes['file'] = $x160->attributes['line'] = $x160->attributes['column'] = 0; }
throw new JSException($x160, 98, 20, '<image>/10_regexp.js');
}
$x157 = JS::toObject($_returnArray, $global);
unset($x161, $W161, $S161, $U161);
$x162 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $x157, (string) 'push', 98, 20, '<image>/10_regexp.js');
$x161 =& $x162[0]; list(,$W161,$S161,$U161) = $x162;
if (!(is_object($x161) && isset($x161->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x165 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x165[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x165;
$x166 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x167 = $x166($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x167->class) && $x167->class === 'Error') {$x167->properties['file'] = '<image>/10_regexp.js';$x167->properties['line'] = 98;$x167->properties['column'] = 20;$x167->attributes['file'] = $x167->attributes['line'] = $x167->attributes['column'] = 0; }
throw new JSException($x167, 98, 20, '<image>/10_regexp.js');
}
$x163 = $x161->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x164 = $x163($global, $x157, $x161, array(JS::$undefined), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
} else {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x169 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x169[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x169;
$x170 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x171 = $x170($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x171->class) && $x171->class === 'Error') {$x171->properties['file'] = '<image>/10_regexp.js';$x171->properties['line'] = 100;$x171->properties['column'] = 20;$x171->attributes['file'] = $x171->attributes['line'] = $x171->attributes['column'] = 0; }
throw new JSException($x171, 100, 20, '<image>/10_regexp.js');
}
$x168 = JS::toObject($_returnArray, $global);
unset($x172, $W172, $S172, $U172);
$x173 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $x168, (string) 'push', 100, 20, '<image>/10_regexp.js');
$x172 =& $x173[0]; list(,$W172,$S172,$U172) = $x173;
if (!(is_object($x172) && isset($x172->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x176 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x176[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x176;
$x177 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x178 = $x177($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error') {$x178->properties['file'] = '<image>/10_regexp.js';$x178->properties['line'] = 100;$x178->properties['column'] = 20;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 100, 20, '<image>/10_regexp.js');
}
$x174 = $x172->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x175 = $x174($global, $x168, $x172, array($match[0]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
};
unset($x179, $W179, $S179, $U179);
$x180 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'global', 104, 10, '<image>/10_regexp.js');
$x179 =& $x180[0]; list(,$W179,$S179,$U179) = $x180;
if (JS::toBoolean($x179, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x181 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 105, 18, '<image>/10_regexp.js');
$_TypeError =& $x181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x181;
$x182 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x183 = $x182($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x183->class) && $x183->class === 'Error') {$x183->properties['file'] = '<image>/10_regexp.js';$x183->properties['line'] = 105;$x183->properties['column'] = 18;$x183->attributes['file'] = $x183->attributes['line'] = $x183->attributes['column'] = 0; }
throw new JSException($x183, 105, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x184, $W184, $S184, $U184);
$x185 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $leThis, (string) 'lastIndex', 105, 18, '<image>/10_regexp.js');
$x184 =& $x185[0]; list(,$W184,$S184,$U184) = $x185;
if ($U184 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['lastIndex'] = $x184; $x184 =& $leThis->properties['lastIndex']; $leThis->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U184 = FALSE; $W184 = TRUE; }
if (isset($S184)) {
$x187 = $S184->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x188 = $x187($global, $leThis, $S184, array($matches[0][1] + strlen($matches[0][0])), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x186 = $x188;
} else {
if (!$U184) {$x186 = $matches[0][1] + strlen($matches[0][0]);if ($W184) { $x184 = $matches[0][1] + strlen($matches[0][0]); }  }
else { $x186 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x189 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 108, 20, '<image>/10_regexp.js');
$_TypeError =& $x189[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x189;
$x190 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x191 = $x190($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x191->class) && $x191->class === 'Error') {$x191->properties['file'] = '<image>/10_regexp.js';$x191->properties['line'] = 108;$x191->properties['column'] = 20;$x191->attributes['file'] = $x191->attributes['line'] = $x191->attributes['column'] = 0; }
throw new JSException($x191, 108, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x192, $W192, $S192, $U192);
$x193 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_returnArray, (string) 'index', 108, 20, '<image>/10_regexp.js');
$x192 =& $x193[0]; list(,$W192,$S192,$U192) = $x193;
if ($U192 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties['index'] = $x192; $x192 =& $_returnArray->properties['index']; $_returnArray->attributes['index'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U192 = FALSE; $W192 = TRUE; }
if (isset($S192)) {
$x195 = $S192->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x196 = $x195($global, $_returnArray, $S192, array($matches[0][1]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x194 = $x196;
} else {
if (!$U192) {$x194 = $matches[0][1];if ($W192) { $x192 = $matches[0][1]; }  }
else { $x194 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array' &&  is_int('index') && 'index' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'index' + 1; };
$x197 = JS::toString($_string, $global);
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x198 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 109, 20, '<image>/10_regexp.js');
$_TypeError =& $x198[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x198;
$x199 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x200 = $x199($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x200->class) && $x200->class === 'Error') {$x200->properties['file'] = '<image>/10_regexp.js';$x200->properties['line'] = 109;$x200->properties['column'] = 20;$x200->attributes['file'] = $x200->attributes['line'] = $x200->attributes['column'] = 0; }
throw new JSException($x200, 109, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x201, $W201, $S201, $U201);
$x202 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_returnArray, (string) 'input', 109, 20, '<image>/10_regexp.js');
$x201 =& $x202[0]; list(,$W201,$S201,$U201) = $x202;
if ($U201 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties['input'] = $x201; $x201 =& $_returnArray->properties['input']; $_returnArray->attributes['input'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U201 = FALSE; $W201 = TRUE; }
if (isset($S201)) {
$x204 = $S201->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x205 = $x204($global, $_returnArray, $S201, array($x197), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x203 = $x205;
} else {
if (!$U201) {$x203 = $x197;if ($W201) { $x201 = $x197; }  }
else { $x203 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array' &&  is_int('input') && 'input' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'input' + 1; };
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x105=&$scope->properties[\'arguments\'];$x105->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x105->properties[$i]=$args[$i];$x105->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$x106=JS::toString($_string,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x106;unset($x107,$W107,$S107,$U107);$x108=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$_string,(string)\'length\',61,21,\'<image>/10_regexp.js\');$x107=&$x108[0];list(,$W107,$S107,$U107)=$x108;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=$x107;unset($x109,$W109,$S109,$U109);$x110=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'lastIndex\',61,38,\'<image>/10_regexp.js\');$x109=&$x110[0];list(,$W109,$S109,$U109)=$x110;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$x109;unset($x111,$W111,$S111,$U111);$x112=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'global\',63,11,\'<image>/10_regexp.js\');$x111=&$x112[0];list(,$W111,$S111,$U111)=$x112;if(JS::toBoolean((!JS::toBoolean($x111,$global)),$global)){$x113=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x113;}$x115=JS::toPrimitive($_i,$global);$x116=JS::toPrimitive(0,$global);$x117=(is_string($x115)&&is_string($x116)?strcmp($x115,$x116)<0:(!is_nan($x118=JS::toNumber($x115,$global))&&!is_nan($x119=JS::toNumber($x116,$global))&&$x118<$x119));$x114=$x117;if(!JS::toBoolean($x114,$global)){$x120=JS::toPrimitive($_i,$global);$x121=JS::toPrimitive($_length,$global);$x122=(is_string($x121)&&is_string($x120)?strcmp($x121,$x120)<0:(!is_nan($x123=JS::toNumber($x121,$global))&&!is_nan($x124=JS::toNumber($x120,$global))&&$x123<$x124));$x114=$x122;}if(JS::toBoolean($x114,$global)){$x125=0;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x126=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',68,18,\'<image>/10_regexp.js\');$_TypeError=&$x126[0];list(,$WTypeError,$STypeError,$UTypeError)=$x126;$x127=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x128=$x127($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x128->class)&&$x128->class===\'Error\'){$x128->properties[\'file\']=\'<image>/10_regexp.js\';$x128->properties[\'line\']=68;$x128->properties[\'column\']=18;$x128->attributes[\'file\']=$x128->attributes[\'line\']=$x128->attributes[\'column\']=0;}throw new JSException($x128,68,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x129,$W129,$S129,$U129);$x130=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$leThis,(string)\'lastIndex\',68,18,\'<image>/10_regexp.js\');$x129=&$x130[0];list(,$W129,$S129,$U129)=$x130;if($U129&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'lastIndex\']=$x129;$x129=&$leThis->properties[\'lastIndex\'];$leThis->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U129=FALSE;$W129=TRUE;}if(isset($S129)){$x132=$S129->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x133=$x132($global,$leThis,$S129,array($x125),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x131=$x133;}else{if(!$U129){$x131=$x125;if($W129){$x129=$x125;}}else{$x131=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}return NULL;}unset($x134,$W134,$S134,$U134);$x135=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'source\',72,20,\'<image>/10_regexp.js\');$x134=&$x135[0];list(,$W134,$S134,$U134)=$x135;$scope->properties[\'pattern\']=JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$_pattern=$x134;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';$scope->properties[\'result\']=JS::$undefined;$_result=&$scope->properties[\'result\'];$Uresult=FALSE;$_result=JS::$undefined;unset($x136,$W136,$S136,$U136);$x137=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'ignoreCase\',74,10,\'<image>/10_regexp.js\');$x136=&$x137[0];list(,$W136,$S136,$U136)=$x137;if(JS::toBoolean($x136,$global)){$x138=\'i\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x139=JS::toPrimitive($_flags,$global);$x140=JS::toPrimitive($x138,$global);$_flags=(is_string($x139)||is_string($x140)?JS::toString($x139,$global).JS::toString($x140,$global):JS::toNumber($x139,$global)+JS::toNumber($x140,$global));}unset($x141,$W141,$S141,$U141);$x142=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'multiline\',77,10,\'<image>/10_regexp.js\');$x141=&$x142[0];list(,$W141,$S141,$U141)=$x142;if(JS::toBoolean($x141,$global)){$x143=\'m\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x144=JS::toPrimitive($_flags,$global);$x145=JS::toPrimitive($x143,$global);$_flags=(is_string($x144)||is_string($x145)?JS::toString($x144,$global).JS::toString($x145,$global):JS::toNumber($x144,$global)+JS::toNumber($x145,$global));}$x146=preg_match(\'/\'.$_pattern.\'/\'.$_flags,JS::toString($_string,$global),$matches,PREG_OFFSET_CAPTURE,$_i);if($Uresult){$global->properties[\'result\']=$_result;$_result=&$global->properties[\'result\'];}$_result=$x146;if(JS::toBoolean((!JS::toBoolean($_result,$global)),$global)){$x147=0;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x148=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',90,18,\'<image>/10_regexp.js\');$_TypeError=&$x148[0];list(,$WTypeError,$STypeError,$UTypeError)=$x148;$x149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x150=$x149($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x150->class)&&$x150->class===\'Error\'){$x150->properties[\'file\']=\'<image>/10_regexp.js\';$x150->properties[\'line\']=90;$x150->properties[\'column\']=18;$x150->attributes[\'file\']=$x150->attributes[\'line\']=$x150->attributes[\'column\']=0;}throw new JSException($x150,90,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x151,$W151,$S151,$U151);$x152=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$leThis,(string)\'lastIndex\',90,18,\'<image>/10_regexp.js\');$x151=&$x152[0];list(,$W151,$S151,$U151)=$x152;if($U151&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'lastIndex\']=$x151;$x151=&$leThis->properties[\'lastIndex\'];$leThis->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U151=FALSE;$W151=TRUE;}if(isset($S151)){$x154=$S151->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x155=$x154($global,$leThis,$S151,array($x147),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x153=$x155;}else{if(!$U151){$x153=$x147;if($W151){$x151=$x147;}}else{$x153=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}return NULL;}$x156=clone JS::$arrayTemplate;$x156->properties[\'length\']=0;$x156->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x156;foreach($matches as$I=>$match){;if($match[0]===\'\'&&$I!==0){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x158=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',98,20,\'<image>/10_regexp.js\');$_TypeError=&$x158[0];list(,$WTypeError,$STypeError,$UTypeError)=$x158;$x159=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x160=$x159($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x160->class)&&$x160->class===\'Error\'){$x160->properties[\'file\']=\'<image>/10_regexp.js\';$x160->properties[\'line\']=98;$x160->properties[\'column\']=20;$x160->attributes[\'file\']=$x160->attributes[\'line\']=$x160->attributes[\'column\']=0;}throw new JSException($x160,98,20,\'<image>/10_regexp.js\');}$x157=JS::toObject($_returnArray,$global);unset($x161,$W161,$S161,$U161);$x162=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$x157,(string)\'push\',98,20,\'<image>/10_regexp.js\');$x161=&$x162[0];list(,$W161,$S161,$U161)=$x162;if(!(is_object($x161)&&isset($x161->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x165=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',98,20,\'<image>/10_regexp.js\');$_TypeError=&$x165[0];list(,$WTypeError,$STypeError,$UTypeError)=$x165;$x166=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x167=$x166($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x167->class)&&$x167->class===\'Error\'){$x167->properties[\'file\']=\'<image>/10_regexp.js\';$x167->properties[\'line\']=98;$x167->properties[\'column\']=20;$x167->attributes[\'file\']=$x167->attributes[\'line\']=$x167->attributes[\'column\']=0;}throw new JSException($x167,98,20,\'<image>/10_regexp.js\');}$x163=$x161->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x164=$x163($global,$x157,$x161,array(JS::$undefined),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x169=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',100,20,\'<image>/10_regexp.js\');$_TypeError=&$x169[0];list(,$WTypeError,$STypeError,$UTypeError)=$x169;$x170=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x171=$x170($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x171->class)&&$x171->class===\'Error\'){$x171->properties[\'file\']=\'<image>/10_regexp.js\';$x171->properties[\'line\']=100;$x171->properties[\'column\']=20;$x171->attributes[\'file\']=$x171->attributes[\'line\']=$x171->attributes[\'column\']=0;}throw new JSException($x171,100,20,\'<image>/10_regexp.js\');}$x168=JS::toObject($_returnArray,$global);unset($x172,$W172,$S172,$U172);$x173=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$x168,(string)\'push\',100,20,\'<image>/10_regexp.js\');$x172=&$x173[0];list(,$W172,$S172,$U172)=$x173;if(!(is_object($x172)&&isset($x172->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x176=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',100,20,\'<image>/10_regexp.js\');$_TypeError=&$x176[0];list(,$WTypeError,$STypeError,$UTypeError)=$x176;$x177=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x178=$x177($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x178->class)&&$x178->class===\'Error\'){$x178->properties[\'file\']=\'<image>/10_regexp.js\';$x178->properties[\'line\']=100;$x178->properties[\'column\']=20;$x178->attributes[\'file\']=$x178->attributes[\'line\']=$x178->attributes[\'column\']=0;}throw new JSException($x178,100,20,\'<image>/10_regexp.js\');}$x174=$x172->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x175=$x174($global,$x168,$x172,array($match[0]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}unset($x179,$W179,$S179,$U179);$x180=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'global\',104,10,\'<image>/10_regexp.js\');$x179=&$x180[0];list(,$W179,$S179,$U179)=$x180;if(JS::toBoolean($x179,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x181=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',105,18,\'<image>/10_regexp.js\');$_TypeError=&$x181[0];list(,$WTypeError,$STypeError,$UTypeError)=$x181;$x182=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x183=$x182($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x183->class)&&$x183->class===\'Error\'){$x183->properties[\'file\']=\'<image>/10_regexp.js\';$x183->properties[\'line\']=105;$x183->properties[\'column\']=18;$x183->attributes[\'file\']=$x183->attributes[\'line\']=$x183->attributes[\'column\']=0;}throw new JSException($x183,105,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x184,$W184,$S184,$U184);$x185=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$leThis,(string)\'lastIndex\',105,18,\'<image>/10_regexp.js\');$x184=&$x185[0];list(,$W184,$S184,$U184)=$x185;if($U184&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'lastIndex\']=$x184;$x184=&$leThis->properties[\'lastIndex\'];$leThis->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U184=FALSE;$W184=TRUE;}if(isset($S184)){$x187=$S184->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x188=$x187($global,$leThis,$S184,array($matches[0][1]+strlen($matches[0][0])),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x186=$x188;}else{if(!$U184){$x186=$matches[0][1]+strlen($matches[0][0]);if($W184){$x184=$matches[0][1]+strlen($matches[0][0]);}}else{$x186=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x189=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',108,20,\'<image>/10_regexp.js\');$_TypeError=&$x189[0];list(,$WTypeError,$STypeError,$UTypeError)=$x189;$x190=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x191=$x190($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x191->class)&&$x191->class===\'Error\'){$x191->properties[\'file\']=\'<image>/10_regexp.js\';$x191->properties[\'line\']=108;$x191->properties[\'column\']=20;$x191->attributes[\'file\']=$x191->attributes[\'line\']=$x191->attributes[\'column\']=0;}throw new JSException($x191,108,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x192,$W192,$S192,$U192);$x193=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_returnArray,(string)\'index\',108,20,\'<image>/10_regexp.js\');$x192=&$x193[0];list(,$W192,$S192,$U192)=$x193;if($U192&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[\'index\']=$x192;$x192=&$_returnArray->properties[\'index\'];$_returnArray->attributes[\'index\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U192=FALSE;$W192=TRUE;}if(isset($S192)){$x195=$S192->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x196=$x195($global,$_returnArray,$S192,array($matches[0][1]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x194=$x196;}else{if(!$U192){$x194=$matches[0][1];if($W192){$x192=$matches[0][1];}}else{$x194=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'&&is_int(\'index\')&&\'index\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'index\'+1;}$x197=JS::toString($_string,$global);if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x198=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',109,20,\'<image>/10_regexp.js\');$_TypeError=&$x198[0];list(,$WTypeError,$STypeError,$UTypeError)=$x198;$x199=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x200=$x199($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x200->class)&&$x200->class===\'Error\'){$x200->properties[\'file\']=\'<image>/10_regexp.js\';$x200->properties[\'line\']=109;$x200->properties[\'column\']=20;$x200->attributes[\'file\']=$x200->attributes[\'line\']=$x200->attributes[\'column\']=0;}throw new JSException($x200,109,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x201,$W201,$S201,$U201);$x202=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_returnArray,(string)\'input\',109,20,\'<image>/10_regexp.js\');$x201=&$x202[0];list(,$W201,$S201,$U201)=$x202;if($U201&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[\'input\']=$x201;$x201=&$_returnArray->properties[\'input\'];$_returnArray->attributes[\'input\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U201=FALSE;$W201=TRUE;}if(isset($S201)){$x204=$S201->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x205=$x204($global,$_returnArray,$S201,array($x197),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x203=$x205;}else{if(!$U201){$x203=$x197;if($W201){$x201=$x197;}}else{$x203=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'&&is_int(\'input\')&&\'input\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'input\'+1;}return$_returnArray;return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x218 =& $scope->properties['arguments'];
$x218->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x218->properties[$i] = $args[$i];
$x218->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x221 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x221[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x221;
$x222 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x223 = $x222($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x223->class) && $x223->class === 'Error') {$x223->properties['file'] = '<image>/10_regexp.js';$x223->properties['line'] = 115;$x223->properties['column'] = 18;$x223->attributes['file'] = $x223->attributes['line'] = $x223->attributes['column'] = 0; }
throw new JSException($x223, 115, 18, '<image>/10_regexp.js');
}
$x220 = JS::toObject($leThis, $global);
unset($x224, $W224, $S224, $U224);
$x225 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $x220, (string) 'exec', 115, 18, '<image>/10_regexp.js');
$x224 =& $x225[0]; list(,$W224,$S224,$U224) = $x225;
if (!(is_object($x224) && isset($x224->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x228 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x228[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x228;
$x229 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x230 = $x229($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x230->class) && $x230->class === 'Error') {$x230->properties['file'] = '<image>/10_regexp.js';$x230->properties['line'] = 115;$x230->properties['column'] = 18;$x230->attributes['file'] = $x230->attributes['line'] = $x230->attributes['column'] = 0; }
throw new JSException($x230, 115, 18, '<image>/10_regexp.js');
}
$x226 = $x224->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x227 = $x226($global, $x220, $x224, array($_string), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x219 = !(((gettype($x227) === gettype(NULL) && $x227 === NULL))|| (((is_float($x227) || is_int($x227)) && (is_float(NULL) || is_int(NULL))) && $x227 == NULL));
return $x219;
;
return JS::$undefined;
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x218=&$scope->properties[\'arguments\'];$x218->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x218->properties[$i]=$args[$i];$x218->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x221=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',115,18,\'<image>/10_regexp.js\');$_TypeError=&$x221[0];list(,$WTypeError,$STypeError,$UTypeError)=$x221;$x222=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x223=$x222($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x223->class)&&$x223->class===\'Error\'){$x223->properties[\'file\']=\'<image>/10_regexp.js\';$x223->properties[\'line\']=115;$x223->properties[\'column\']=18;$x223->attributes[\'file\']=$x223->attributes[\'line\']=$x223->attributes[\'column\']=0;}throw new JSException($x223,115,18,\'<image>/10_regexp.js\');}$x220=JS::toObject($leThis,$global);unset($x224,$W224,$S224,$U224);$x225=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$x220,(string)\'exec\',115,18,\'<image>/10_regexp.js\');$x224=&$x225[0];list(,$W224,$S224,$U224)=$x225;if(!(is_object($x224)&&isset($x224->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x228=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',115,18,\'<image>/10_regexp.js\');$_TypeError=&$x228[0];list(,$WTypeError,$STypeError,$UTypeError)=$x228;$x229=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x230=$x229($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x230->class)&&$x230->class===\'Error\'){$x230->properties[\'file\']=\'<image>/10_regexp.js\';$x230->properties[\'line\']=115;$x230->properties[\'column\']=18;$x230->attributes[\'file\']=$x230->attributes[\'line\']=$x230->attributes[\'column\']=0;}throw new JSException($x230,115,18,\'<image>/10_regexp.js\');}$x226=$x224->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x227=$x226($global,$x220,$x224,array($_string),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x219=!(((gettype($x227)===gettype(NULL)&&$x227===NULL))||(((is_float($x227)||is_int($x227))&&(is_float(NULL)||is_int(NULL)))&&$x227==NULL));return$x219;return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x243 =& $scope->properties['arguments'];
$x243->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x243->properties[$i] = $args[$i];
$x243->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
unset($x244, $W244, $S244, $U244);
$x245 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'global', 121, 10, '<image>/10_regexp.js');
$x244 =& $x245[0]; list(,$W244,$S244,$U244) = $x245;
if (JS::toBoolean($x244, $global)) {
$x246 = 'g';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x247 = JS::toPrimitive($_flags, $global);
$x248 = JS::toPrimitive($x246, $global);
$_flags = (is_string($x247) || is_string($x248) ? JS::toString($x247, $global) . JS::toString($x248, $global) : JS::toNumber($x247, $global) + JS::toNumber($x248, $global));;
};
unset($x249, $W249, $S249, $U249);
$x250 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'ignoreCase', 124, 10, '<image>/10_regexp.js');
$x249 =& $x250[0]; list(,$W249,$S249,$U249) = $x250;
if (JS::toBoolean($x249, $global)) {
$x251 = 'i';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x252 = JS::toPrimitive($_flags, $global);
$x253 = JS::toPrimitive($x251, $global);
$_flags = (is_string($x252) || is_string($x253) ? JS::toString($x252, $global) . JS::toString($x253, $global) : JS::toNumber($x252, $global) + JS::toNumber($x253, $global));;
};
unset($x254, $W254, $S254, $U254);
$x255 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'multiline', 127, 10, '<image>/10_regexp.js');
$x254 =& $x255[0]; list(,$W254,$S254,$U254) = $x255;
if (JS::toBoolean($x254, $global)) {
$x256 = 'm';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x257 = JS::toPrimitive($_flags, $global);
$x258 = JS::toPrimitive($x256, $global);
$_flags = (is_string($x257) || is_string($x258) ? JS::toString($x257, $global) . JS::toString($x258, $global) : JS::toNumber($x257, $global) + JS::toNumber($x258, $global));;
};
unset($x265, $W265, $S265, $U265);
$x266 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'source', 130, 19, '<image>/10_regexp.js');
$x265 =& $x266[0]; list(,$W265,$S265,$U265) = $x266;
$x263 = JS::toPrimitive('/', $global);
$x264 = JS::toPrimitive($x265, $global);
$x261 = JS::toPrimitive((is_string($x263) || is_string($x264) ? JS::toString($x263, $global) . JS::toString($x264, $global) : JS::toNumber($x263, $global) + JS::toNumber($x264, $global)), $global);
$x262 = JS::toPrimitive('/', $global);
$x259 = JS::toPrimitive((is_string($x261) || is_string($x262) ? JS::toString($x261, $global) . JS::toString($x262, $global) : JS::toNumber($x261, $global) + JS::toNumber($x262, $global)), $global);
$x260 = JS::toPrimitive($_flags, $global);
return (is_string($x259) || is_string($x260) ? JS::toString($x259, $global) . JS::toString($x260, $global) : JS::toNumber($x259, $global) + JS::toNumber($x260, $global));
;
return JS::$undefined;
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x243=&$scope->properties[\'arguments\'];$x243->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x243->properties[$i]=$args[$i];$x243->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';unset($x244,$W244,$S244,$U244);$x245=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'global\',121,10,\'<image>/10_regexp.js\');$x244=&$x245[0];list(,$W244,$S244,$U244)=$x245;if(JS::toBoolean($x244,$global)){$x246=\'g\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x247=JS::toPrimitive($_flags,$global);$x248=JS::toPrimitive($x246,$global);$_flags=(is_string($x247)||is_string($x248)?JS::toString($x247,$global).JS::toString($x248,$global):JS::toNumber($x247,$global)+JS::toNumber($x248,$global));}unset($x249,$W249,$S249,$U249);$x250=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'ignoreCase\',124,10,\'<image>/10_regexp.js\');$x249=&$x250[0];list(,$W249,$S249,$U249)=$x250;if(JS::toBoolean($x249,$global)){$x251=\'i\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x252=JS::toPrimitive($_flags,$global);$x253=JS::toPrimitive($x251,$global);$_flags=(is_string($x252)||is_string($x253)?JS::toString($x252,$global).JS::toString($x253,$global):JS::toNumber($x252,$global)+JS::toNumber($x253,$global));}unset($x254,$W254,$S254,$U254);$x255=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'multiline\',127,10,\'<image>/10_regexp.js\');$x254=&$x255[0];list(,$W254,$S254,$U254)=$x255;if(JS::toBoolean($x254,$global)){$x256=\'m\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x257=JS::toPrimitive($_flags,$global);$x258=JS::toPrimitive($x256,$global);$_flags=(is_string($x257)||is_string($x258)?JS::toString($x257,$global).JS::toString($x258,$global):JS::toNumber($x257,$global)+JS::toNumber($x258,$global));}unset($x265,$W265,$S265,$U265);$x266=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'source\',130,19,\'<image>/10_regexp.js\');$x265=&$x266[0];list(,$W265,$S265,$U265)=$x266;$x263=JS::toPrimitive(\'/\',$global);$x264=JS::toPrimitive($x265,$global);$x261=JS::toPrimitive((is_string($x263)||is_string($x264)?JS::toString($x263,$global).JS::toString($x264,$global):JS::toNumber($x263,$global)+JS::toNumber($x264,$global)),$global);$x262=JS::toPrimitive(\'/\',$global);$x259=JS::toPrimitive((is_string($x261)||is_string($x262)?JS::toString($x261,$global).JS::toString($x262,$global):JS::toNumber($x261,$global)+JS::toNumber($x262,$global)),$global);$x260=JS::toPrimitive($_flags,$global);return(is_string($x259)||is_string($x260)?JS::toString($x259,$global).JS::toString($x260,$global):JS::toNumber($x259,$global)+JS::toNumber($x260,$global));return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/10_regexp.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/10_regexp.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_RegExp;
$x80 = clone JS::$functionTemplate; $x80->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_1'; $x80->parameters = array (
  0 => 'pattern',
  1 => 'flags',
); $x80->name = 'RegExp'; $x80->scope = $scope; $x80->properties['prototype'] = clone JS::$objectTemplate; $x80->attributes['prototype'] = JS::WRITABLE; $x80->properties['prototype']->properties['constructor'] = $x80; $x80->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x80->properties['length'] = 2; $x80->attributes['length'] = 0;
$scope->properties['RegExp'] = JS::$undefined; $_RegExp =& $scope->properties['RegExp'];
$URegExp = FALSE;
$_RegExp = $x80;
$x81 = clone JS::$objectTemplate;
$x81->properties['source'] = '';
$x81->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x81->properties['global'] = false;
$x81->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x81->properties['ignoreCase'] = false;
$x81->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x81->properties['multiline'] = false;
$x81->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x81->properties['lastIndex'] = 0;
$x81->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_RegExp === JS::$undefined || $_RegExp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x82 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 47, 18, '<image>/10_regexp.js');
$_TypeError =& $x82[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x82;
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x84 = $x83($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x84->class) && $x84->class === 'Error') {$x84->properties['file'] = '<image>/10_regexp.js';$x84->properties['line'] = 47;$x84->properties['column'] = 18;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 47, 18, '<image>/10_regexp.js');
}
$_RegExp = JS::toObject($_RegExp, $global);
unset($x85, $W85, $S85, $U85);
$x86 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_RegExp, (string) 'prototype', 47, 18, '<image>/10_regexp.js');
$x85 =& $x86[0]; list(,$W85,$S85,$U85) = $x86;
if ($U85 && (!isset($_RegExp->extensible) || $_RegExp->extensible)) {$_RegExp->properties['prototype'] = $x85; $x85 =& $_RegExp->properties['prototype']; $_RegExp->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U85 = FALSE; $W85 = TRUE; }
if (isset($S85)) {
$x88 = $S85->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x89 = $x88($global, $_RegExp, $S85, array($x81), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x87 = $x89;
} else {
if (!$U85) {$x87 = $x81;if ($W85) { $x85 = $x81; }  }
else { $x87 = JS::$undefined; }
}
if (isset($_RegExp->class) && $_RegExp->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_RegExp->properties['length']) { $_RegExp->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x90 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'Object', 54, 51, '<image>/10_regexp.js');
$_Object =& $x90[0]; list(,$WObject,$SObject,$UObject) = $x90;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x91 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'ReferenceError', 54, 51, '<image>/10_regexp.js');
$_ReferenceError =& $x91[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x91;
$x92 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 54, 51);
$x93 = $x92($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error') {$x93->properties['file'] = '<image>/10_regexp.js';$x93->properties['line'] = 54;$x93->properties['column'] = 51;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 54, 51, '<image>/10_regexp.js');
}
$_RegExp->properties['prototype']->prototype =$_Object->properties['prototype'];
$_RegExp->properties['prototype']->class = 'RegExp';
$_RegExp->properties['prototype']->extensible = TRUE;
unset($x94, $W94, $S94, $U94);
$x95 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 57, 7, '<image>/10_regexp.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if ($x94 === JS::$undefined || $x94 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x96 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 57, 30, '<image>/10_regexp.js');
$_TypeError =& $x96[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x96;
$x97 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x98 = $x97($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x98->class) && $x98->class === 'Error') {$x98->properties['file'] = '<image>/10_regexp.js';$x98->properties['line'] = 57;$x98->properties['column'] = 30;$x98->attributes['file'] = $x98->attributes['line'] = $x98->attributes['column'] = 0; }
throw new JSException($x98, 57, 30, '<image>/10_regexp.js');
}
$x94 = JS::toObject($x94, $global);
unset($x99, $W99, $S99, $U99);
$x100 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x94, (string) 'constructor', 57, 30, '<image>/10_regexp.js');
$x99 =& $x100[0]; list(,$W99,$S99,$U99) = $x100;
if ($U99 && (!isset($x94->extensible) || $x94->extensible)) {$x94->properties['constructor'] = $x99; $x99 =& $x94->properties['constructor']; $x94->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U99 = FALSE; $W99 = TRUE; }
if (isset($S99)) {
$x102 = $S99->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x103 = $x102($global, $x94, $S99, array($_RegExp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x101 = $x103;
} else {
if (!$U99) {$x101 = $_RegExp;if ($W99) { $x99 = $_RegExp; }  }
else { $x101 = JS::$undefined; }
}
if (isset($x94->class) && $x94->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x94->properties['length']) { $x94->properties['length'] = 'constructor' + 1; };
$x206 = clone JS::$functionTemplate; $x206->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_5'; $x206->parameters = array (
  0 => 'string',
); $x206->scope = $scope; $x206->properties['prototype'] = clone JS::$objectTemplate; $x206->attributes['prototype'] = JS::WRITABLE; $x206->properties['prototype']->properties['constructor'] = $x206; $x206->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x206->properties['length'] = 1; $x206->attributes['length'] = 0;
unset($x207, $W207, $S207, $U207);
$x208 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 59, 7, '<image>/10_regexp.js');
$x207 =& $x208[0]; list(,$W207,$S207,$U207) = $x208;
if ($x207 === JS::$undefined || $x207 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x209 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 59, 23, '<image>/10_regexp.js');
$_TypeError =& $x209[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x209;
$x210 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x211 = $x210($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x211->class) && $x211->class === 'Error') {$x211->properties['file'] = '<image>/10_regexp.js';$x211->properties['line'] = 59;$x211->properties['column'] = 23;$x211->attributes['file'] = $x211->attributes['line'] = $x211->attributes['column'] = 0; }
throw new JSException($x211, 59, 23, '<image>/10_regexp.js');
}
$x207 = JS::toObject($x207, $global);
unset($x212, $W212, $S212, $U212);
$x213 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x207, (string) 'exec', 59, 23, '<image>/10_regexp.js');
$x212 =& $x213[0]; list(,$W212,$S212,$U212) = $x213;
if ($U212 && (!isset($x207->extensible) || $x207->extensible)) {$x207->properties['exec'] = $x212; $x212 =& $x207->properties['exec']; $x207->attributes['exec'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U212 = FALSE; $W212 = TRUE; }
if (isset($S212)) {
$x215 = $S212->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x216 = $x215($global, $x207, $S212, array($x206), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x214 = $x216;
} else {
if (!$U212) {$x214 = $x206;if ($W212) { $x212 = $x206; }  }
else { $x214 = JS::$undefined; }
}
if (isset($x207->class) && $x207->class === 'Array' &&  is_int('exec') && 'exec' >= $x207->properties['length']) { $x207->properties['length'] = 'exec' + 1; };
$x231 = clone JS::$functionTemplate; $x231->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_6'; $x231->parameters = array (
  0 => 'string',
); $x231->scope = $scope; $x231->properties['prototype'] = clone JS::$objectTemplate; $x231->attributes['prototype'] = JS::WRITABLE; $x231->properties['prototype']->properties['constructor'] = $x231; $x231->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x231->properties['length'] = 1; $x231->attributes['length'] = 0;
unset($x232, $W232, $S232, $U232);
$x233 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 114, 7, '<image>/10_regexp.js');
$x232 =& $x233[0]; list(,$W232,$S232,$U232) = $x233;
if ($x232 === JS::$undefined || $x232 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x234 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 114, 23, '<image>/10_regexp.js');
$_TypeError =& $x234[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x234;
$x235 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x236 = $x235($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x236->class) && $x236->class === 'Error') {$x236->properties['file'] = '<image>/10_regexp.js';$x236->properties['line'] = 114;$x236->properties['column'] = 23;$x236->attributes['file'] = $x236->attributes['line'] = $x236->attributes['column'] = 0; }
throw new JSException($x236, 114, 23, '<image>/10_regexp.js');
}
$x232 = JS::toObject($x232, $global);
unset($x237, $W237, $S237, $U237);
$x238 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x232, (string) 'test', 114, 23, '<image>/10_regexp.js');
$x237 =& $x238[0]; list(,$W237,$S237,$U237) = $x238;
if ($U237 && (!isset($x232->extensible) || $x232->extensible)) {$x232->properties['test'] = $x237; $x237 =& $x232->properties['test']; $x232->attributes['test'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U237 = FALSE; $W237 = TRUE; }
if (isset($S237)) {
$x240 = $S237->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x241 = $x240($global, $x232, $S237, array($x231), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x239 = $x241;
} else {
if (!$U237) {$x239 = $x231;if ($W237) { $x237 = $x231; }  }
else { $x239 = JS::$undefined; }
}
if (isset($x232->class) && $x232->class === 'Array' &&  is_int('test') && 'test' >= $x232->properties['length']) { $x232->properties['length'] = 'test' + 1; };
$x267 = clone JS::$functionTemplate; $x267->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_7'; $x267->parameters = array (
); $x267->scope = $scope; $x267->properties['prototype'] = clone JS::$objectTemplate; $x267->attributes['prototype'] = JS::WRITABLE; $x267->properties['prototype']->properties['constructor'] = $x267; $x267->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x267->properties['length'] = 0; $x267->attributes['length'] = 0;
unset($x268, $W268, $S268, $U268);
$x269 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 118, 7, '<image>/10_regexp.js');
$x268 =& $x269[0]; list(,$W268,$S268,$U268) = $x269;
if ($x268 === JS::$undefined || $x268 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x270 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 118, 27, '<image>/10_regexp.js');
$_TypeError =& $x270[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x270;
$x271 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x272 = $x271($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x272->class) && $x272->class === 'Error') {$x272->properties['file'] = '<image>/10_regexp.js';$x272->properties['line'] = 118;$x272->properties['column'] = 27;$x272->attributes['file'] = $x272->attributes['line'] = $x272->attributes['column'] = 0; }
throw new JSException($x272, 118, 27, '<image>/10_regexp.js');
}
$x268 = JS::toObject($x268, $global);
unset($x273, $W273, $S273, $U273);
$x274 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x268, (string) 'toString', 118, 27, '<image>/10_regexp.js');
$x273 =& $x274[0]; list(,$W273,$S273,$U273) = $x274;
if ($U273 && (!isset($x268->extensible) || $x268->extensible)) {$x268->properties['toString'] = $x273; $x273 =& $x268->properties['toString']; $x268->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U273 = FALSE; $W273 = TRUE; }
if (isset($S273)) {
$x276 = $S273->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x277 = $x276($global, $x268, $S273, array($x267), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x275 = $x277;
} else {
if (!$U273) {$x275 = $x267;if ($W273) { $x273 = $x267; }  }
else { $x275 = JS::$undefined; }
}
if (isset($x268->class) && $x268->class === 'Array' &&  is_int('toString') && 'toString' >= $x268->properties['length']) { $x268->properties['length'] = 'toString' + 1; };
;
return JS::$undefined;
}
