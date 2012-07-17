function _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x5=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x6=$x5($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x6;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x11 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x11[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x11;
$x12 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x13 = $x12($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error') {$x13->properties['file'] = $file;$x13->properties['line'] = $line;$x13->properties['column'] = $column;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, $line, $column, $file);
}
$W10 = $S10 = $U10 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x10 =& $lookup->properties[$id]; $W10 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S10 = $lookup->setters[$id]; }
else { $x10 = JS::$undefined; $U10 = TRUE; }
return array(&$x10, $W10, $S10, $U10);
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x13=$x12($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'){$x13->properties[\'file\']=$file;$x13->properties[\'line\']=$line;$x13->properties[\'column\']=$column;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,$line,$column,$file);}$W10=$S10=$U10=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x10=&$lookup->properties[$id];$W10=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S10=$lookup->setters[$id];}else{$x10=JS::$undefined;$U10=TRUE;}return array(&$x10,$W10,$S10,$U10);}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x63 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x63[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x63;
$x64 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x65 = $x64($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x65->class) && $x65->class === 'Error') {$x65->properties['file'] = $file;$x65->properties['line'] = $line;$x65->properties['column'] = $column;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, $line, $column, $file);
}
$W62 = $S62 = $U62 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x62 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x66 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x67 = $x66($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x62 = $x67; }
else { $x62 = JS::$undefined; $U62 = TRUE; }
return array(&$x62, $W62, $S62, $U62);
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x65=$x64($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'){$x65->properties[\'file\']=$file;$x65->properties[\'line\']=$line;$x65->properties[\'column\']=$column;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,$line,$column,$file);}$W62=$S62=$U62=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x62=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x66=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x67=$x66($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x62=$x67;}else{$x62=JS::$undefined;$U62=TRUE;}return array(&$x62,$W62,$S62,$U62);}', "\n";
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
if ($Upattern) {$global->properties['pattern'] = $_pattern; $_pattern =& $global->properties['pattern']; }
$_pattern = '';;
};
$x3 = (((gettype($_flags) === gettype(JS::$undefined) && $_flags === JS::$undefined))|| (((is_float($_flags) || is_int($_flags)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_flags == JS::$undefined));
if (JS::toBoolean($x3, $global)) {
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$_flags = '';;
};
$x4 = clone JS::$objectTemplate;
$x4->properties['source'] = JS::toString($_pattern, $global);
$x4->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x4->properties['global'] = false;
$x4->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x4->properties['ignoreCase'] = false;
$x4->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x4->properties['multiline'] = false;
$x4->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x4->properties['lastIndex'] = 0;
$x4->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['r'] = JS::$undefined; $_r =& $scope->properties['r'];
$Ur = FALSE;
$_r = $x4;
$_r->class = 'RegExp';
$_r->prototype =$_RegExp->properties['prototype'];
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x7 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 25, 11, '<image>/10_regexp.js');
$_TypeError =& $x7[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x7;
$x8 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 25, 11);
$x9 = $x8($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error') {$x9->properties['file'] = '<image>/10_regexp.js';$x9->properties['line'] = 25;$x9->properties['column'] = 11;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
throw new JSException($x9, 25, 11, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x10, $W10, $S10, $U10);
$x14 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'source', 25, 11, '<image>/10_regexp.js');
$x10 =& $x14[0]; list(,$W10,$S10,$U10) = $x14;
if ($U10 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['source'] = $x10; $x10 =& $_r->properties['source']; $_r->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U10 = FALSE; $W10 = TRUE; }
if (isset($S10)) {
$x16 = $S10->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 25, 11);
$x17 = $x16($global, $_r, $S10, array(JS::toString($_pattern, $global)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x17;
} else {
if (!$U10) {$x15 = JS::toString($_pattern, $global);if ($W10) { $x10 = JS::toString($_pattern, $global); }  }
else { $x15 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('source') && 'source' >= $_r->properties['length']) { $_r->properties['length'] = 'source' + 1; };
for ($x18 = 0;; ++$x18) {
if ($x18 === 0) {
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
if ($x18 !== 0) {
$x19 = ++$_i;
}
$x20 = JS::toPrimitive($_i, $global);
$x21 = JS::toPrimitive($_l, $global);
$x22 = (is_string($x20) && is_string($x21) ? strcmp($x20, $x21) < 0 : (!is_nan($x23 = JS::toNumber($x20, $global)) && !is_nan($x24 = JS::toNumber($x21, $global)) && $x23 < $x24));
if (!JS::toBoolean($x22, $global)) { break; }

$_c= substr($_flags,$_i, 1);
$x25 = (((gettype($_c) === gettype('g') && $_c === 'g'))|| (((is_float($_c) || is_int($_c)) && (is_float('g') || is_int('g'))) && $_c == 'g'));
if (JS::toBoolean($x25, $global)) {
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x26 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 31, 13, '<image>/10_regexp.js');
$_TypeError =& $x26[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x26;
$x27 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x28 = $x27($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x28->class) && $x28->class === 'Error') {$x28->properties['file'] = '<image>/10_regexp.js';$x28->properties['line'] = 31;$x28->properties['column'] = 13;$x28->attributes['file'] = $x28->attributes['line'] = $x28->attributes['column'] = 0; }
throw new JSException($x28, 31, 13, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x29, $W29, $S29, $U29);
$x30 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'global', 31, 13, '<image>/10_regexp.js');
$x29 =& $x30[0]; list(,$W29,$S29,$U29) = $x30;
if ($U29 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['global'] = $x29; $x29 =& $_r->properties['global']; $_r->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U29 = FALSE; $W29 = TRUE; }
if (isset($S29)) {
$x32 = $S29->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x33 = $x32($global, $_r, $S29, array(true), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x31 = $x33;
} else {
if (!$U29) {$x31 = true;if ($W29) { $x29 = true; }  }
else { $x31 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('global') && 'global' >= $_r->properties['length']) { $_r->properties['length'] = 'global' + 1; };
}
else {
$x34 = (((gettype($_c) === gettype('i') && $_c === 'i'))|| (((is_float($_c) || is_int($_c)) && (is_float('i') || is_int('i'))) && $_c == 'i'));
if (JS::toBoolean($x34, $global)) {
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 33, 17, '<image>/10_regexp.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x37 = $x36($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error') {$x37->properties['file'] = '<image>/10_regexp.js';$x37->properties['line'] = 33;$x37->properties['column'] = 17;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 33, 17, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x38, $W38, $S38, $U38);
$x39 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'ignoreCase', 33, 17, '<image>/10_regexp.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
if ($U38 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['ignoreCase'] = $x38; $x38 =& $_r->properties['ignoreCase']; $_r->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U38 = FALSE; $W38 = TRUE; }
if (isset($S38)) {
$x41 = $S38->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x42 = $x41($global, $_r, $S38, array(true), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x40 = $x42;
} else {
if (!$U38) {$x40 = true;if ($W38) { $x38 = true; }  }
else { $x40 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('ignoreCase') && 'ignoreCase' >= $_r->properties['length']) { $_r->properties['length'] = 'ignoreCase' + 1; };
}
else {
$x43 = (((gettype($_c) === gettype('m') && $_c === 'm'))|| (((is_float($_c) || is_int($_c)) && (is_float('m') || is_int('m'))) && $_c == 'm'));
if (JS::toBoolean($x43, $global)) {
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x44 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 35, 16, '<image>/10_regexp.js');
$_TypeError =& $x44[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x44;
$x45 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x46 = $x45($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x46->class) && $x46->class === 'Error') {$x46->properties['file'] = '<image>/10_regexp.js';$x46->properties['line'] = 35;$x46->properties['column'] = 16;$x46->attributes['file'] = $x46->attributes['line'] = $x46->attributes['column'] = 0; }
throw new JSException($x46, 35, 16, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x47, $W47, $S47, $U47);
$x48 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_r, (string) 'multiline', 35, 16, '<image>/10_regexp.js');
$x47 =& $x48[0]; list(,$W47,$S47,$U47) = $x48;
if ($U47 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties['multiline'] = $x47; $x47 =& $_r->properties['multiline']; $_r->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U47 = FALSE; $W47 = TRUE; }
if (isset($S47)) {
$x50 = $S47->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x51 = $x50($global, $_r, $S47, array(true), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x49 = $x51;
} else {
if (!$U47) {$x49 = true;if ($W47) { $x47 = true; }  }
else { $x49 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array' &&  is_int('multiline') && 'multiline' >= $_r->properties['length']) { $_r->properties['length'] = 'multiline' + 1; };
}
else {
unset($_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
$x54 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'SyntaxError', 37, 14, '<image>/10_regexp.js');
$_SyntaxError =& $x54[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x54;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x55 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'ReferenceError', 37, 14, '<image>/10_regexp.js');
$_ReferenceError =& $x55[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x55;
$x56 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 14);
$x57 = $x56($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x57->class) && $x57->class === 'Error') {$x57->properties['file'] = '<image>/10_regexp.js';$x57->properties['line'] = 37;$x57->properties['column'] = 14;$x57->attributes['file'] = $x57->attributes['line'] = $x57->attributes['column'] = 0; }
throw new JSException($x57, 37, 14, '<image>/10_regexp.js');
}
$x60 = JS::toPrimitive('RegExp(): Unknow regexp flag ', $global);
$x61 = JS::toPrimitive($_c, $global);
$x58 = JS::toPrimitive((is_string($x60) || is_string($x61) ? JS::toString($x60, $global) . JS::toString($x61, $global) : JS::toNumber($x60, $global) + JS::toNumber($x61, $global)), $global);
$x59 = JS::toPrimitive('.', $global);
$x52 = clone JS::$objectTemplate;
unset($x62, $W62, $S62, $U62);
$x68 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_SyntaxError, (string) 'prototype', 37, 10, '<image>/10_regexp.js');
$x62 =& $x68[0]; list(,$W62,$S62,$U62) = $x68;
$x53 = $x62;
$x52->prototype = $x53;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x71 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 37, 10, '<image>/10_regexp.js');
$_TypeError =& $x71[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x71;
$x72 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x73 = $x72($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error') {$x73->properties['file'] = '<image>/10_regexp.js';$x73->properties['line'] = 37;$x73->properties['column'] = 10;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 37, 10, '<image>/10_regexp.js');
}
$x69 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x70 = $x69($global, $x52, $_SyntaxError, array((is_string($x58) || is_string($x59) ? JS::toString($x58, $global) . JS::toString($x59, $global) : JS::toNumber($x58, $global) + JS::toNumber($x59, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x53 = $x70;
if (is_object($x53) && $x53 !== JS::$undefined) { $x52 = $x53; }
if (isset($x52->class) && $x52->class === 'Error') {$x52->properties['file'] = '<image>/10_regexp.js';$x52->properties['line'] = 37;$x52->properties['column'] = 4;$x52->attributes['file'] = $x52->attributes['line'] = $x52->attributes['column'] = 0; }
throw new JSException($x52, 37, 4, '<image>/10_regexp.js');;
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
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pattern\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$scope->properties[\'flags\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$scope->properties[\'RegExp\']=$fn;$_RegExp=&$scope->properties[\'RegExp\'];$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(is_object($_pattern)&&isset($_pattern->class)&&$_pattern->class===\'RegExp\',$global)){return$_pattern;}$x2=(((gettype($_pattern)===gettype(JS::$undefined)&&$_pattern===JS::$undefined))||(((is_float($_pattern)||is_int($_pattern))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_pattern==JS::$undefined));if(JS::toBoolean($x2,$global)){if($Upattern){$global->properties[\'pattern\']=$_pattern;$_pattern=&$global->properties[\'pattern\'];}$_pattern=\'\';}$x3=(((gettype($_flags)===gettype(JS::$undefined)&&$_flags===JS::$undefined))||(((is_float($_flags)||is_int($_flags))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_flags==JS::$undefined));if(JS::toBoolean($x3,$global)){if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$_flags=\'\';}$x4=clone JS::$objectTemplate;$x4->properties[\'source\']=JS::toString($_pattern,$global);$x4->attributes[\'source\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x4->properties[\'global\']=false;$x4->attributes[\'global\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x4->properties[\'ignoreCase\']=false;$x4->attributes[\'ignoreCase\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x4->properties[\'multiline\']=false;$x4->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x4->properties[\'lastIndex\']=0;$x4->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=$x4;$_r->class=\'RegExp\';$_r->prototype=$_RegExp->properties[\'prototype\'];if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x7=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',25,11,\'<image>/10_regexp.js\');$_TypeError=&$x7[0];list(,$WTypeError,$STypeError,$UTypeError)=$x7;$x8=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x9=$x8($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'){$x9->properties[\'file\']=\'<image>/10_regexp.js\';$x9->properties[\'line\']=25;$x9->properties[\'column\']=11;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,25,11,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x10,$W10,$S10,$U10);$x14=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'source\',25,11,\'<image>/10_regexp.js\');$x10=&$x14[0];list(,$W10,$S10,$U10)=$x14;if($U10&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'source\']=$x10;$x10=&$_r->properties[\'source\'];$_r->attributes[\'source\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U10=FALSE;$W10=TRUE;}if(isset($S10)){$x16=$S10->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x17=$x16($global,$_r,$S10,array(JS::toString($_pattern,$global)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x17;}else{if(!$U10){$x15=JS::toString($_pattern,$global);if($W10){$x10=JS::toString($_pattern,$global);}}else{$x15=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'source\')&&\'source\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'source\'+1;}for($x18=0;;++$x18){if($x18===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=strlen($_flags);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=JS::$undefined;}if($x18!==0){$x19=++$_i;}$x20=JS::toPrimitive($_i,$global);$x21=JS::toPrimitive($_l,$global);$x22=(is_string($x20)&&is_string($x21)?strcmp($x20,$x21)<0:(!is_nan($x23=JS::toNumber($x20,$global))&&!is_nan($x24=JS::toNumber($x21,$global))&&$x23<$x24));if(!JS::toBoolean($x22,$global)){break;}$_c=substr($_flags,$_i,1);$x25=(((gettype($_c)===gettype(\'g\')&&$_c===\'g\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'g\')||is_int(\'g\')))&&$_c==\'g\'));if(JS::toBoolean($x25,$global)){if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x26=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',31,13,\'<image>/10_regexp.js\');$_TypeError=&$x26[0];list(,$WTypeError,$STypeError,$UTypeError)=$x26;$x27=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x28=$x27($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x28->class)&&$x28->class===\'Error\'){$x28->properties[\'file\']=\'<image>/10_regexp.js\';$x28->properties[\'line\']=31;$x28->properties[\'column\']=13;$x28->attributes[\'file\']=$x28->attributes[\'line\']=$x28->attributes[\'column\']=0;}throw new JSException($x28,31,13,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x29,$W29,$S29,$U29);$x30=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'global\',31,13,\'<image>/10_regexp.js\');$x29=&$x30[0];list(,$W29,$S29,$U29)=$x30;if($U29&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'global\']=$x29;$x29=&$_r->properties[\'global\'];$_r->attributes[\'global\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U29=FALSE;$W29=TRUE;}if(isset($S29)){$x32=$S29->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x33=$x32($global,$_r,$S29,array(true),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x31=$x33;}else{if(!$U29){$x31=true;if($W29){$x29=true;}}else{$x31=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'global\')&&\'global\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'global\'+1;}}else{$x34=(((gettype($_c)===gettype(\'i\')&&$_c===\'i\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'i\')||is_int(\'i\')))&&$_c==\'i\'));if(JS::toBoolean($x34,$global)){if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',33,17,\'<image>/10_regexp.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x37=$x36($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'){$x37->properties[\'file\']=\'<image>/10_regexp.js\';$x37->properties[\'line\']=33;$x37->properties[\'column\']=17;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,33,17,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x38,$W38,$S38,$U38);$x39=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'ignoreCase\',33,17,\'<image>/10_regexp.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;if($U38&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'ignoreCase\']=$x38;$x38=&$_r->properties[\'ignoreCase\'];$_r->attributes[\'ignoreCase\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U38=FALSE;$W38=TRUE;}if(isset($S38)){$x41=$S38->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x42=$x41($global,$_r,$S38,array(true),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x40=$x42;}else{if(!$U38){$x40=true;if($W38){$x38=true;}}else{$x40=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'ignoreCase\')&&\'ignoreCase\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'ignoreCase\'+1;}}else{$x43=(((gettype($_c)===gettype(\'m\')&&$_c===\'m\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'m\')||is_int(\'m\')))&&$_c==\'m\'));if(JS::toBoolean($x43,$global)){if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x44=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',35,16,\'<image>/10_regexp.js\');$_TypeError=&$x44[0];list(,$WTypeError,$STypeError,$UTypeError)=$x44;$x45=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x46=$x45($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x46->class)&&$x46->class===\'Error\'){$x46->properties[\'file\']=\'<image>/10_regexp.js\';$x46->properties[\'line\']=35;$x46->properties[\'column\']=16;$x46->attributes[\'file\']=$x46->attributes[\'line\']=$x46->attributes[\'column\']=0;}throw new JSException($x46,35,16,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x47,$W47,$S47,$U47);$x48=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_r,(string)\'multiline\',35,16,\'<image>/10_regexp.js\');$x47=&$x48[0];list(,$W47,$S47,$U47)=$x48;if($U47&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[\'multiline\']=$x47;$x47=&$_r->properties[\'multiline\'];$_r->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U47=FALSE;$W47=TRUE;}if(isset($S47)){$x50=$S47->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x51=$x50($global,$_r,$S47,array(true),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x49=$x51;}else{if(!$U47){$x49=true;if($W47){$x47=true;}}else{$x49=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'&&is_int(\'multiline\')&&\'multiline\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'multiline\'+1;}}else{unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x54=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'SyntaxError\',37,14,\'<image>/10_regexp.js\');$_SyntaxError=&$x54[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x54;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x55=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'ReferenceError\',37,14,\'<image>/10_regexp.js\');$_ReferenceError=&$x55[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x55;$x56=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,14);$x57=$x56($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x57->class)&&$x57->class===\'Error\'){$x57->properties[\'file\']=\'<image>/10_regexp.js\';$x57->properties[\'line\']=37;$x57->properties[\'column\']=14;$x57->attributes[\'file\']=$x57->attributes[\'line\']=$x57->attributes[\'column\']=0;}throw new JSException($x57,37,14,\'<image>/10_regexp.js\');}$x60=JS::toPrimitive(\'RegExp(): Unknow regexp flag \',$global);$x61=JS::toPrimitive($_c,$global);$x58=JS::toPrimitive((is_string($x60)||is_string($x61)?JS::toString($x60,$global).JS::toString($x61,$global):JS::toNumber($x60,$global)+JS::toNumber($x61,$global)),$global);$x59=JS::toPrimitive(\'.\',$global);$x52=clone JS::$objectTemplate;unset($x62,$W62,$S62,$U62);$x68=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$_SyntaxError,(string)\'prototype\',37,10,\'<image>/10_regexp.js\');$x62=&$x68[0];list(,$W62,$S62,$U62)=$x68;$x53=$x62;$x52->prototype=$x53;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x71=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',37,10,\'<image>/10_regexp.js\');$_TypeError=&$x71[0];list(,$WTypeError,$STypeError,$UTypeError)=$x71;$x72=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x73=$x72($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'){$x73->properties[\'file\']=\'<image>/10_regexp.js\';$x73->properties[\'line\']=37;$x73->properties[\'column\']=10;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,37,10,\'<image>/10_regexp.js\');}$x69=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x70=$x69($global,$x52,$_SyntaxError,array((is_string($x58)||is_string($x59)?JS::toString($x58,$global).JS::toString($x59,$global):JS::toNumber($x58,$global)+JS::toNumber($x59,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x53=$x70;if(is_object($x53)&&$x53!==JS::$undefined){$x52=$x53;}if(isset($x52->class)&&$x52->class===\'Error\'){$x52->properties[\'file\']=\'<image>/10_regexp.js\';$x52->properties[\'line\']=37;$x52->properties[\'column\']=4;$x52->attributes[\'file\']=$x52->attributes[\'line\']=$x52->attributes[\'column\']=0;}throw new JSException($x52,37,4,\'<image>/10_regexp.js\');}}}}foreach($_r->attributes as$a=>$_){$_r->attributes[$a]=0;}$_r->attributes[\'lastIndex\']=JS::WRITABLE;return$_r;return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x99 =& $scope->properties['arguments'];
$x99->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x99->properties[$i] = $args[$i];
$x99->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = JS::toString($_string, $global);
unset($x100, $W100, $S100, $U100);
$x101 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_string, (string) 'length', 61, 21, '<image>/10_regexp.js');
$x100 =& $x101[0]; list(,$W100,$S100,$U100) = $x101;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = $x100;
unset($x102, $W102, $S102, $U102);
$x103 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'lastIndex', 61, 38, '<image>/10_regexp.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $x102;
unset($x104, $W104, $S104, $U104);
$x105 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'global', 63, 11, '<image>/10_regexp.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
if (JS::toBoolean((!JS::toBoolean($x104, $global)), $global)) {
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = 0;;
};
$x107 = JS::toPrimitive($_i, $global);
$x108 = JS::toPrimitive(0, $global);
$x109 = (is_string($x107) && is_string($x108) ? strcmp($x107, $x108) < 0 : (!is_nan($x110 = JS::toNumber($x107, $global)) && !is_nan($x111 = JS::toNumber($x108, $global)) && $x110 < $x111));
$x106 = $x109;
if (!JS::toBoolean($x106, $global)) {
$x112 = JS::toPrimitive($_i, $global);
$x113 = JS::toPrimitive($_length, $global);
$x114 = (is_string($x113) && is_string($x112) ? strcmp($x113, $x112) < 0 : (!is_nan($x115 = JS::toNumber($x113, $global)) && !is_nan($x116 = JS::toNumber($x112, $global)) && $x115 < $x116));
$x106 = $x114; }
if (JS::toBoolean($x106, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x117 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 68, 18, '<image>/10_regexp.js');
$_TypeError =& $x117[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x117;
$x118 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x119 = $x118($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x119->class) && $x119->class === 'Error') {$x119->properties['file'] = '<image>/10_regexp.js';$x119->properties['line'] = 68;$x119->properties['column'] = 18;$x119->attributes['file'] = $x119->attributes['line'] = $x119->attributes['column'] = 0; }
throw new JSException($x119, 68, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x120, $W120, $S120, $U120);
$x121 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $leThis, (string) 'lastIndex', 68, 18, '<image>/10_regexp.js');
$x120 =& $x121[0]; list(,$W120,$S120,$U120) = $x121;
if ($U120 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['lastIndex'] = $x120; $x120 =& $leThis->properties['lastIndex']; $leThis->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U120 = FALSE; $W120 = TRUE; }
if (isset($S120)) {
$x123 = $S120->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x124 = $x123($global, $leThis, $S120, array(0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x122 = $x124;
} else {
if (!$U120) {$x122 = 0;if ($W120) { $x120 = 0; }  }
else { $x122 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
return NULL;;
};
unset($x125, $W125, $S125, $U125);
$x126 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'source', 72, 20, '<image>/10_regexp.js');
$x125 =& $x126[0]; list(,$W125,$S125,$U125) = $x126;
$scope->properties['pattern'] = JS::$undefined; $_pattern =& $scope->properties['pattern'];
$Upattern = FALSE;
$_pattern = $x125;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
$scope->properties['result'] = JS::$undefined; $_result =& $scope->properties['result'];
$Uresult = FALSE;
$_result = JS::$undefined;
unset($x127, $W127, $S127, $U127);
$x128 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'ignoreCase', 74, 10, '<image>/10_regexp.js');
$x127 =& $x128[0]; list(,$W127,$S127,$U127) = $x128;
if (JS::toBoolean($x127, $global)) {
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x129 = JS::toPrimitive($_flags, $global);
$x130 = JS::toPrimitive('i', $global);
$_flags = (is_string($x129) || is_string($x130) ? JS::toString($x129, $global) . JS::toString($x130, $global) : JS::toNumber($x129, $global) + JS::toNumber($x130, $global));;
};
unset($x131, $W131, $S131, $U131);
$x132 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'multiline', 77, 10, '<image>/10_regexp.js');
$x131 =& $x132[0]; list(,$W131,$S131,$U131) = $x132;
if (JS::toBoolean($x131, $global)) {
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x133 = JS::toPrimitive($_flags, $global);
$x134 = JS::toPrimitive('m', $global);
$_flags = (is_string($x133) || is_string($x134) ? JS::toString($x133, $global) . JS::toString($x134, $global) : JS::toNumber($x133, $global) + JS::toNumber($x134, $global));;
};
if ($Uresult) {$global->properties['result'] = $_result; $_result =& $global->properties['result']; }
$_result = preg_match(
		'/' .$_pattern. '/' .$_flags,
		JS::toString($_string, $global),
		$matches,
		PREG_OFFSET_CAPTURE,$_i);
if (JS::toBoolean((!JS::toBoolean($_result, $global)), $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x135 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 90, 18, '<image>/10_regexp.js');
$_TypeError =& $x135[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x135;
$x136 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x137 = $x136($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x137->class) && $x137->class === 'Error') {$x137->properties['file'] = '<image>/10_regexp.js';$x137->properties['line'] = 90;$x137->properties['column'] = 18;$x137->attributes['file'] = $x137->attributes['line'] = $x137->attributes['column'] = 0; }
throw new JSException($x137, 90, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x138, $W138, $S138, $U138);
$x139 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $leThis, (string) 'lastIndex', 90, 18, '<image>/10_regexp.js');
$x138 =& $x139[0]; list(,$W138,$S138,$U138) = $x139;
if ($U138 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['lastIndex'] = $x138; $x138 =& $leThis->properties['lastIndex']; $leThis->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U138 = FALSE; $W138 = TRUE; }
if (isset($S138)) {
$x141 = $S138->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x142 = $x141($global, $leThis, $S138, array(0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x140 = $x142;
} else {
if (!$U138) {$x140 = 0;if ($W138) { $x138 = 0; }  }
else { $x140 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
return NULL;;
};
$x143 = clone JS::$arrayTemplate;
$x143->properties['length'] = 0;
$x143->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x143;
foreach ($matches as $I => $match) {;
if ($match[0] === '' && $I !== 0) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x145 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x145[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x145;
$x146 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x147 = $x146($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x147->class) && $x147->class === 'Error') {$x147->properties['file'] = '<image>/10_regexp.js';$x147->properties['line'] = 98;$x147->properties['column'] = 20;$x147->attributes['file'] = $x147->attributes['line'] = $x147->attributes['column'] = 0; }
throw new JSException($x147, 98, 20, '<image>/10_regexp.js');
}
$x144 = JS::toObject($_returnArray, $global);
unset($x148, $W148, $S148, $U148);
$x149 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $x144, (string) 'push', 98, 20, '<image>/10_regexp.js');
$x148 =& $x149[0]; list(,$W148,$S148,$U148) = $x149;
if (!(is_object($x148) && isset($x148->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x152 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x152[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x152;
$x153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x154 = $x153($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x154->class) && $x154->class === 'Error') {$x154->properties['file'] = '<image>/10_regexp.js';$x154->properties['line'] = 98;$x154->properties['column'] = 20;$x154->attributes['file'] = $x154->attributes['line'] = $x154->attributes['column'] = 0; }
throw new JSException($x154, 98, 20, '<image>/10_regexp.js');
}
$x150 = $x148->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x151 = $x150($global, $x144, $x148, array(JS::$undefined), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
} else {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x156 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x156[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x156;
$x157 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x158 = $x157($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x158->class) && $x158->class === 'Error') {$x158->properties['file'] = '<image>/10_regexp.js';$x158->properties['line'] = 100;$x158->properties['column'] = 20;$x158->attributes['file'] = $x158->attributes['line'] = $x158->attributes['column'] = 0; }
throw new JSException($x158, 100, 20, '<image>/10_regexp.js');
}
$x155 = JS::toObject($_returnArray, $global);
unset($x159, $W159, $S159, $U159);
$x160 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $x155, (string) 'push', 100, 20, '<image>/10_regexp.js');
$x159 =& $x160[0]; list(,$W159,$S159,$U159) = $x160;
if (!(is_object($x159) && isset($x159->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x163 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x163[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x163;
$x164 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x165 = $x164($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x165->class) && $x165->class === 'Error') {$x165->properties['file'] = '<image>/10_regexp.js';$x165->properties['line'] = 100;$x165->properties['column'] = 20;$x165->attributes['file'] = $x165->attributes['line'] = $x165->attributes['column'] = 0; }
throw new JSException($x165, 100, 20, '<image>/10_regexp.js');
}
$x161 = $x159->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x162 = $x161($global, $x155, $x159, array($match[0]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
};
unset($x166, $W166, $S166, $U166);
$x167 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'global', 104, 10, '<image>/10_regexp.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
if (JS::toBoolean($x166, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x168 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 105, 18, '<image>/10_regexp.js');
$_TypeError =& $x168[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x168;
$x169 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x170 = $x169($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x170->class) && $x170->class === 'Error') {$x170->properties['file'] = '<image>/10_regexp.js';$x170->properties['line'] = 105;$x170->properties['column'] = 18;$x170->attributes['file'] = $x170->attributes['line'] = $x170->attributes['column'] = 0; }
throw new JSException($x170, 105, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x171, $W171, $S171, $U171);
$x172 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $leThis, (string) 'lastIndex', 105, 18, '<image>/10_regexp.js');
$x171 =& $x172[0]; list(,$W171,$S171,$U171) = $x172;
if ($U171 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties['lastIndex'] = $x171; $x171 =& $leThis->properties['lastIndex']; $leThis->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U171 = FALSE; $W171 = TRUE; }
if (isset($S171)) {
$x174 = $S171->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x175 = $x174($global, $leThis, $S171, array($matches[0][1] + strlen($matches[0][0])), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x173 = $x175;
} else {
if (!$U171) {$x173 = $matches[0][1] + strlen($matches[0][0]);if ($W171) { $x171 = $matches[0][1] + strlen($matches[0][0]); }  }
else { $x173 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; };
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x176 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 108, 20, '<image>/10_regexp.js');
$_TypeError =& $x176[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x176;
$x177 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x178 = $x177($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error') {$x178->properties['file'] = '<image>/10_regexp.js';$x178->properties['line'] = 108;$x178->properties['column'] = 20;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 108, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x179, $W179, $S179, $U179);
$x180 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_returnArray, (string) 'index', 108, 20, '<image>/10_regexp.js');
$x179 =& $x180[0]; list(,$W179,$S179,$U179) = $x180;
if ($U179 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties['index'] = $x179; $x179 =& $_returnArray->properties['index']; $_returnArray->attributes['index'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U179 = FALSE; $W179 = TRUE; }
if (isset($S179)) {
$x182 = $S179->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x183 = $x182($global, $_returnArray, $S179, array($matches[0][1]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x181 = $x183;
} else {
if (!$U179) {$x181 = $matches[0][1];if ($W179) { $x179 = $matches[0][1]; }  }
else { $x181 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array' &&  is_int('index') && 'index' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'index' + 1; };
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x184 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 109, 20, '<image>/10_regexp.js');
$_TypeError =& $x184[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x184;
$x185 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x186 = $x185($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x186->class) && $x186->class === 'Error') {$x186->properties['file'] = '<image>/10_regexp.js';$x186->properties['line'] = 109;$x186->properties['column'] = 20;$x186->attributes['file'] = $x186->attributes['line'] = $x186->attributes['column'] = 0; }
throw new JSException($x186, 109, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x187, $W187, $S187, $U187);
$x188 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_returnArray, (string) 'input', 109, 20, '<image>/10_regexp.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
if ($U187 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties['input'] = $x187; $x187 =& $_returnArray->properties['input']; $_returnArray->attributes['input'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U187 = FALSE; $W187 = TRUE; }
if (isset($S187)) {
$x190 = $S187->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x191 = $x190($global, $_returnArray, $S187, array(JS::toString($_string, $global)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x189 = $x191;
} else {
if (!$U187) {$x189 = JS::toString($_string, $global);if ($W187) { $x187 = JS::toString($_string, $global); }  }
else { $x189 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array' &&  is_int('input') && 'input' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'input' + 1; };
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x99=&$scope->properties[\'arguments\'];$x99->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x99->properties[$i]=$args[$i];$x99->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=JS::toString($_string,$global);unset($x100,$W100,$S100,$U100);$x101=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$_string,(string)\'length\',61,21,\'<image>/10_regexp.js\');$x100=&$x101[0];list(,$W100,$S100,$U100)=$x101;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=$x100;unset($x102,$W102,$S102,$U102);$x103=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'lastIndex\',61,38,\'<image>/10_regexp.js\');$x102=&$x103[0];list(,$W102,$S102,$U102)=$x103;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$x102;unset($x104,$W104,$S104,$U104);$x105=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'global\',63,11,\'<image>/10_regexp.js\');$x104=&$x105[0];list(,$W104,$S104,$U104)=$x105;if(JS::toBoolean((!JS::toBoolean($x104,$global)),$global)){if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=0;}$x107=JS::toPrimitive($_i,$global);$x108=JS::toPrimitive(0,$global);$x109=(is_string($x107)&&is_string($x108)?strcmp($x107,$x108)<0:(!is_nan($x110=JS::toNumber($x107,$global))&&!is_nan($x111=JS::toNumber($x108,$global))&&$x110<$x111));$x106=$x109;if(!JS::toBoolean($x106,$global)){$x112=JS::toPrimitive($_i,$global);$x113=JS::toPrimitive($_length,$global);$x114=(is_string($x113)&&is_string($x112)?strcmp($x113,$x112)<0:(!is_nan($x115=JS::toNumber($x113,$global))&&!is_nan($x116=JS::toNumber($x112,$global))&&$x115<$x116));$x106=$x114;}if(JS::toBoolean($x106,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x117=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',68,18,\'<image>/10_regexp.js\');$_TypeError=&$x117[0];list(,$WTypeError,$STypeError,$UTypeError)=$x117;$x118=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x119=$x118($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x119->class)&&$x119->class===\'Error\'){$x119->properties[\'file\']=\'<image>/10_regexp.js\';$x119->properties[\'line\']=68;$x119->properties[\'column\']=18;$x119->attributes[\'file\']=$x119->attributes[\'line\']=$x119->attributes[\'column\']=0;}throw new JSException($x119,68,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x120,$W120,$S120,$U120);$x121=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$leThis,(string)\'lastIndex\',68,18,\'<image>/10_regexp.js\');$x120=&$x121[0];list(,$W120,$S120,$U120)=$x121;if($U120&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'lastIndex\']=$x120;$x120=&$leThis->properties[\'lastIndex\'];$leThis->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U120=FALSE;$W120=TRUE;}if(isset($S120)){$x123=$S120->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x124=$x123($global,$leThis,$S120,array(0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x122=$x124;}else{if(!$U120){$x122=0;if($W120){$x120=0;}}else{$x122=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}return NULL;}unset($x125,$W125,$S125,$U125);$x126=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'source\',72,20,\'<image>/10_regexp.js\');$x125=&$x126[0];list(,$W125,$S125,$U125)=$x126;$scope->properties[\'pattern\']=JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$_pattern=$x125;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';$scope->properties[\'result\']=JS::$undefined;$_result=&$scope->properties[\'result\'];$Uresult=FALSE;$_result=JS::$undefined;unset($x127,$W127,$S127,$U127);$x128=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'ignoreCase\',74,10,\'<image>/10_regexp.js\');$x127=&$x128[0];list(,$W127,$S127,$U127)=$x128;if(JS::toBoolean($x127,$global)){if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x129=JS::toPrimitive($_flags,$global);$x130=JS::toPrimitive(\'i\',$global);$_flags=(is_string($x129)||is_string($x130)?JS::toString($x129,$global).JS::toString($x130,$global):JS::toNumber($x129,$global)+JS::toNumber($x130,$global));}unset($x131,$W131,$S131,$U131);$x132=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'multiline\',77,10,\'<image>/10_regexp.js\');$x131=&$x132[0];list(,$W131,$S131,$U131)=$x132;if(JS::toBoolean($x131,$global)){if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x133=JS::toPrimitive($_flags,$global);$x134=JS::toPrimitive(\'m\',$global);$_flags=(is_string($x133)||is_string($x134)?JS::toString($x133,$global).JS::toString($x134,$global):JS::toNumber($x133,$global)+JS::toNumber($x134,$global));}if($Uresult){$global->properties[\'result\']=$_result;$_result=&$global->properties[\'result\'];}$_result=preg_match(\'/\'.$_pattern.\'/\'.$_flags,JS::toString($_string,$global),$matches,PREG_OFFSET_CAPTURE,$_i);if(JS::toBoolean((!JS::toBoolean($_result,$global)),$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x135=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',90,18,\'<image>/10_regexp.js\');$_TypeError=&$x135[0];list(,$WTypeError,$STypeError,$UTypeError)=$x135;$x136=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x137=$x136($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x137->class)&&$x137->class===\'Error\'){$x137->properties[\'file\']=\'<image>/10_regexp.js\';$x137->properties[\'line\']=90;$x137->properties[\'column\']=18;$x137->attributes[\'file\']=$x137->attributes[\'line\']=$x137->attributes[\'column\']=0;}throw new JSException($x137,90,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x138,$W138,$S138,$U138);$x139=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$leThis,(string)\'lastIndex\',90,18,\'<image>/10_regexp.js\');$x138=&$x139[0];list(,$W138,$S138,$U138)=$x139;if($U138&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'lastIndex\']=$x138;$x138=&$leThis->properties[\'lastIndex\'];$leThis->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U138=FALSE;$W138=TRUE;}if(isset($S138)){$x141=$S138->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x142=$x141($global,$leThis,$S138,array(0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x140=$x142;}else{if(!$U138){$x140=0;if($W138){$x138=0;}}else{$x140=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}return NULL;}$x143=clone JS::$arrayTemplate;$x143->properties[\'length\']=0;$x143->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x143;foreach($matches as$I=>$match){;if($match[0]===\'\'&&$I!==0){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x145=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',98,20,\'<image>/10_regexp.js\');$_TypeError=&$x145[0];list(,$WTypeError,$STypeError,$UTypeError)=$x145;$x146=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x147=$x146($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x147->class)&&$x147->class===\'Error\'){$x147->properties[\'file\']=\'<image>/10_regexp.js\';$x147->properties[\'line\']=98;$x147->properties[\'column\']=20;$x147->attributes[\'file\']=$x147->attributes[\'line\']=$x147->attributes[\'column\']=0;}throw new JSException($x147,98,20,\'<image>/10_regexp.js\');}$x144=JS::toObject($_returnArray,$global);unset($x148,$W148,$S148,$U148);$x149=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$x144,(string)\'push\',98,20,\'<image>/10_regexp.js\');$x148=&$x149[0];list(,$W148,$S148,$U148)=$x149;if(!(is_object($x148)&&isset($x148->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x152=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',98,20,\'<image>/10_regexp.js\');$_TypeError=&$x152[0];list(,$WTypeError,$STypeError,$UTypeError)=$x152;$x153=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x154=$x153($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x154->class)&&$x154->class===\'Error\'){$x154->properties[\'file\']=\'<image>/10_regexp.js\';$x154->properties[\'line\']=98;$x154->properties[\'column\']=20;$x154->attributes[\'file\']=$x154->attributes[\'line\']=$x154->attributes[\'column\']=0;}throw new JSException($x154,98,20,\'<image>/10_regexp.js\');}$x150=$x148->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x151=$x150($global,$x144,$x148,array(JS::$undefined),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x156=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',100,20,\'<image>/10_regexp.js\');$_TypeError=&$x156[0];list(,$WTypeError,$STypeError,$UTypeError)=$x156;$x157=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x158=$x157($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x158->class)&&$x158->class===\'Error\'){$x158->properties[\'file\']=\'<image>/10_regexp.js\';$x158->properties[\'line\']=100;$x158->properties[\'column\']=20;$x158->attributes[\'file\']=$x158->attributes[\'line\']=$x158->attributes[\'column\']=0;}throw new JSException($x158,100,20,\'<image>/10_regexp.js\');}$x155=JS::toObject($_returnArray,$global);unset($x159,$W159,$S159,$U159);$x160=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$x155,(string)\'push\',100,20,\'<image>/10_regexp.js\');$x159=&$x160[0];list(,$W159,$S159,$U159)=$x160;if(!(is_object($x159)&&isset($x159->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x163=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',100,20,\'<image>/10_regexp.js\');$_TypeError=&$x163[0];list(,$WTypeError,$STypeError,$UTypeError)=$x163;$x164=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x165=$x164($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x165->class)&&$x165->class===\'Error\'){$x165->properties[\'file\']=\'<image>/10_regexp.js\';$x165->properties[\'line\']=100;$x165->properties[\'column\']=20;$x165->attributes[\'file\']=$x165->attributes[\'line\']=$x165->attributes[\'column\']=0;}throw new JSException($x165,100,20,\'<image>/10_regexp.js\');}$x161=$x159->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x162=$x161($global,$x155,$x159,array($match[0]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}unset($x166,$W166,$S166,$U166);$x167=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'global\',104,10,\'<image>/10_regexp.js\');$x166=&$x167[0];list(,$W166,$S166,$U166)=$x167;if(JS::toBoolean($x166,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x168=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',105,18,\'<image>/10_regexp.js\');$_TypeError=&$x168[0];list(,$WTypeError,$STypeError,$UTypeError)=$x168;$x169=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x170=$x169($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x170->class)&&$x170->class===\'Error\'){$x170->properties[\'file\']=\'<image>/10_regexp.js\';$x170->properties[\'line\']=105;$x170->properties[\'column\']=18;$x170->attributes[\'file\']=$x170->attributes[\'line\']=$x170->attributes[\'column\']=0;}throw new JSException($x170,105,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x171,$W171,$S171,$U171);$x172=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$leThis,(string)\'lastIndex\',105,18,\'<image>/10_regexp.js\');$x171=&$x172[0];list(,$W171,$S171,$U171)=$x172;if($U171&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[\'lastIndex\']=$x171;$x171=&$leThis->properties[\'lastIndex\'];$leThis->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U171=FALSE;$W171=TRUE;}if(isset($S171)){$x174=$S171->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x175=$x174($global,$leThis,$S171,array($matches[0][1]+strlen($matches[0][0])),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x173=$x175;}else{if(!$U171){$x173=$matches[0][1]+strlen($matches[0][0]);if($W171){$x171=$matches[0][1]+strlen($matches[0][0]);}}else{$x173=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x176=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',108,20,\'<image>/10_regexp.js\');$_TypeError=&$x176[0];list(,$WTypeError,$STypeError,$UTypeError)=$x176;$x177=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x178=$x177($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x178->class)&&$x178->class===\'Error\'){$x178->properties[\'file\']=\'<image>/10_regexp.js\';$x178->properties[\'line\']=108;$x178->properties[\'column\']=20;$x178->attributes[\'file\']=$x178->attributes[\'line\']=$x178->attributes[\'column\']=0;}throw new JSException($x178,108,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x179,$W179,$S179,$U179);$x180=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_returnArray,(string)\'index\',108,20,\'<image>/10_regexp.js\');$x179=&$x180[0];list(,$W179,$S179,$U179)=$x180;if($U179&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[\'index\']=$x179;$x179=&$_returnArray->properties[\'index\'];$_returnArray->attributes[\'index\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U179=FALSE;$W179=TRUE;}if(isset($S179)){$x182=$S179->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x183=$x182($global,$_returnArray,$S179,array($matches[0][1]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x181=$x183;}else{if(!$U179){$x181=$matches[0][1];if($W179){$x179=$matches[0][1];}}else{$x181=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'&&is_int(\'index\')&&\'index\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'index\'+1;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x184=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',109,20,\'<image>/10_regexp.js\');$_TypeError=&$x184[0];list(,$WTypeError,$STypeError,$UTypeError)=$x184;$x185=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x186=$x185($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x186->class)&&$x186->class===\'Error\'){$x186->properties[\'file\']=\'<image>/10_regexp.js\';$x186->properties[\'line\']=109;$x186->properties[\'column\']=20;$x186->attributes[\'file\']=$x186->attributes[\'line\']=$x186->attributes[\'column\']=0;}throw new JSException($x186,109,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x187,$W187,$S187,$U187);$x188=_7934ef3d20d590a6b38ccc3ba2c260ad_3($global,$scope,$_returnArray,(string)\'input\',109,20,\'<image>/10_regexp.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;if($U187&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[\'input\']=$x187;$x187=&$_returnArray->properties[\'input\'];$_returnArray->attributes[\'input\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U187=FALSE;$W187=TRUE;}if(isset($S187)){$x190=$S187->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x191=$x190($global,$_returnArray,$S187,array(JS::toString($_string,$global)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x189=$x191;}else{if(!$U187){$x189=JS::toString($_string,$global);if($W187){$x187=JS::toString($_string,$global);}}else{$x189=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'&&is_int(\'input\')&&\'input\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'input\'+1;}return$_returnArray;return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x204 =& $scope->properties['arguments'];
$x204->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x204->properties[$i] = $args[$i];
$x204->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x207 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x207[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x207;
$x208 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x209 = $x208($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x209->class) && $x209->class === 'Error') {$x209->properties['file'] = '<image>/10_regexp.js';$x209->properties['line'] = 115;$x209->properties['column'] = 18;$x209->attributes['file'] = $x209->attributes['line'] = $x209->attributes['column'] = 0; }
throw new JSException($x209, 115, 18, '<image>/10_regexp.js');
}
$x206 = JS::toObject($leThis, $global);
unset($x210, $W210, $S210, $U210);
$x211 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $x206, (string) 'exec', 115, 18, '<image>/10_regexp.js');
$x210 =& $x211[0]; list(,$W210,$S210,$U210) = $x211;
if (!(is_object($x210) && isset($x210->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x214 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x214[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x214;
$x215 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x216 = $x215($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x216->class) && $x216->class === 'Error') {$x216->properties['file'] = '<image>/10_regexp.js';$x216->properties['line'] = 115;$x216->properties['column'] = 18;$x216->attributes['file'] = $x216->attributes['line'] = $x216->attributes['column'] = 0; }
throw new JSException($x216, 115, 18, '<image>/10_regexp.js');
}
$x212 = $x210->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x213 = $x212($global, $x206, $x210, array($_string), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x205 = !(((gettype($x213) === gettype(NULL) && $x213 === NULL))|| (((is_float($x213) || is_int($x213)) && (is_float(NULL) || is_int(NULL))) && $x213 == NULL));
return $x205;
;
return JS::$undefined;
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x204=&$scope->properties[\'arguments\'];$x204->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x204->properties[$i]=$args[$i];$x204->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x207=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',115,18,\'<image>/10_regexp.js\');$_TypeError=&$x207[0];list(,$WTypeError,$STypeError,$UTypeError)=$x207;$x208=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x209=$x208($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x209->class)&&$x209->class===\'Error\'){$x209->properties[\'file\']=\'<image>/10_regexp.js\';$x209->properties[\'line\']=115;$x209->properties[\'column\']=18;$x209->attributes[\'file\']=$x209->attributes[\'line\']=$x209->attributes[\'column\']=0;}throw new JSException($x209,115,18,\'<image>/10_regexp.js\');}$x206=JS::toObject($leThis,$global);unset($x210,$W210,$S210,$U210);$x211=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$x206,(string)\'exec\',115,18,\'<image>/10_regexp.js\');$x210=&$x211[0];list(,$W210,$S210,$U210)=$x211;if(!(is_object($x210)&&isset($x210->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x214=_7934ef3d20d590a6b38ccc3ba2c260ad_2($global,$scope,$scope,(string)\'TypeError\',115,18,\'<image>/10_regexp.js\');$_TypeError=&$x214[0];list(,$WTypeError,$STypeError,$UTypeError)=$x214;$x215=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x216=$x215($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x216->class)&&$x216->class===\'Error\'){$x216->properties[\'file\']=\'<image>/10_regexp.js\';$x216->properties[\'line\']=115;$x216->properties[\'column\']=18;$x216->attributes[\'file\']=$x216->attributes[\'line\']=$x216->attributes[\'column\']=0;}throw new JSException($x216,115,18,\'<image>/10_regexp.js\');}$x212=$x210->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x213=$x212($global,$x206,$x210,array($_string),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x205=!(((gettype($x213)===gettype(NULL)&&$x213===NULL))||(((is_float($x213)||is_int($x213))&&(is_float(NULL)||is_int(NULL)))&&$x213==NULL));return$x205;return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x229 =& $scope->properties['arguments'];
$x229->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x229->properties[$i] = $args[$i];
$x229->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
unset($x230, $W230, $S230, $U230);
$x231 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'global', 121, 10, '<image>/10_regexp.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
if (JS::toBoolean($x230, $global)) {
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x232 = JS::toPrimitive($_flags, $global);
$x233 = JS::toPrimitive('g', $global);
$_flags = (is_string($x232) || is_string($x233) ? JS::toString($x232, $global) . JS::toString($x233, $global) : JS::toNumber($x232, $global) + JS::toNumber($x233, $global));;
};
unset($x234, $W234, $S234, $U234);
$x235 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'ignoreCase', 124, 10, '<image>/10_regexp.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
if (JS::toBoolean($x234, $global)) {
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x236 = JS::toPrimitive($_flags, $global);
$x237 = JS::toPrimitive('i', $global);
$_flags = (is_string($x236) || is_string($x237) ? JS::toString($x236, $global) . JS::toString($x237, $global) : JS::toNumber($x236, $global) + JS::toNumber($x237, $global));;
};
unset($x238, $W238, $S238, $U238);
$x239 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'multiline', 127, 10, '<image>/10_regexp.js');
$x238 =& $x239[0]; list(,$W238,$S238,$U238) = $x239;
if (JS::toBoolean($x238, $global)) {
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x240 = JS::toPrimitive($_flags, $global);
$x241 = JS::toPrimitive('m', $global);
$_flags = (is_string($x240) || is_string($x241) ? JS::toString($x240, $global) . JS::toString($x241, $global) : JS::toNumber($x240, $global) + JS::toNumber($x241, $global));;
};
unset($x248, $W248, $S248, $U248);
$x249 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $leThis, (string) 'source', 130, 19, '<image>/10_regexp.js');
$x248 =& $x249[0]; list(,$W248,$S248,$U248) = $x249;
$x246 = JS::toPrimitive('/', $global);
$x247 = JS::toPrimitive($x248, $global);
$x244 = JS::toPrimitive((is_string($x246) || is_string($x247) ? JS::toString($x246, $global) . JS::toString($x247, $global) : JS::toNumber($x246, $global) + JS::toNumber($x247, $global)), $global);
$x245 = JS::toPrimitive('/', $global);
$x242 = JS::toPrimitive((is_string($x244) || is_string($x245) ? JS::toString($x244, $global) . JS::toString($x245, $global) : JS::toNumber($x244, $global) + JS::toNumber($x245, $global)), $global);
$x243 = JS::toPrimitive($_flags, $global);
return (is_string($x242) || is_string($x243) ? JS::toString($x242, $global) . JS::toString($x243, $global) : JS::toNumber($x242, $global) + JS::toNumber($x243, $global));
;
return JS::$undefined;
}
echo 'function _7934ef3d20d590a6b38ccc3ba2c260ad_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x229=&$scope->properties[\'arguments\'];$x229->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x229->properties[$i]=$args[$i];$x229->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';unset($x230,$W230,$S230,$U230);$x231=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'global\',121,10,\'<image>/10_regexp.js\');$x230=&$x231[0];list(,$W230,$S230,$U230)=$x231;if(JS::toBoolean($x230,$global)){if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x232=JS::toPrimitive($_flags,$global);$x233=JS::toPrimitive(\'g\',$global);$_flags=(is_string($x232)||is_string($x233)?JS::toString($x232,$global).JS::toString($x233,$global):JS::toNumber($x232,$global)+JS::toNumber($x233,$global));}unset($x234,$W234,$S234,$U234);$x235=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'ignoreCase\',124,10,\'<image>/10_regexp.js\');$x234=&$x235[0];list(,$W234,$S234,$U234)=$x235;if(JS::toBoolean($x234,$global)){if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x236=JS::toPrimitive($_flags,$global);$x237=JS::toPrimitive(\'i\',$global);$_flags=(is_string($x236)||is_string($x237)?JS::toString($x236,$global).JS::toString($x237,$global):JS::toNumber($x236,$global)+JS::toNumber($x237,$global));}unset($x238,$W238,$S238,$U238);$x239=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'multiline\',127,10,\'<image>/10_regexp.js\');$x238=&$x239[0];list(,$W238,$S238,$U238)=$x239;if(JS::toBoolean($x238,$global)){if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x240=JS::toPrimitive($_flags,$global);$x241=JS::toPrimitive(\'m\',$global);$_flags=(is_string($x240)||is_string($x241)?JS::toString($x240,$global).JS::toString($x241,$global):JS::toNumber($x240,$global)+JS::toNumber($x241,$global));}unset($x248,$W248,$S248,$U248);$x249=_7934ef3d20d590a6b38ccc3ba2c260ad_4($global,$scope,$leThis,(string)\'source\',130,19,\'<image>/10_regexp.js\');$x248=&$x249[0];list(,$W248,$S248,$U248)=$x249;$x246=JS::toPrimitive(\'/\',$global);$x247=JS::toPrimitive($x248,$global);$x244=JS::toPrimitive((is_string($x246)||is_string($x247)?JS::toString($x246,$global).JS::toString($x247,$global):JS::toNumber($x246,$global)+JS::toNumber($x247,$global)),$global);$x245=JS::toPrimitive(\'/\',$global);$x242=JS::toPrimitive((is_string($x244)||is_string($x245)?JS::toString($x244,$global).JS::toString($x245,$global):JS::toNumber($x244,$global)+JS::toNumber($x245,$global)),$global);$x243=JS::toPrimitive($_flags,$global);return(is_string($x242)||is_string($x243)?JS::toString($x242,$global).JS::toString($x243,$global):JS::toNumber($x242,$global)+JS::toNumber($x243,$global));return JS::$undefined;}', "\n";
function _7934ef3d20d590a6b38ccc3ba2c260ad_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/10_regexp.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/10_regexp.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_RegExp;
$x74 = clone JS::$functionTemplate; $x74->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_1'; $x74->parameters = array (
  0 => 'pattern',
  1 => 'flags',
); $x74->name = 'RegExp'; $x74->scope = $scope; $x74->properties['prototype'] = clone JS::$objectTemplate; $x74->attributes['prototype'] = JS::WRITABLE; $x74->properties['prototype']->properties['constructor'] = $x74; $x74->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x74->properties['length'] = 2; $x74->attributes['length'] = 0;
$scope->properties['RegExp'] = JS::$undefined; $_RegExp =& $scope->properties['RegExp'];
$URegExp = FALSE;
$_RegExp = $x74;
$x75 = clone JS::$objectTemplate;
$x75->properties['source'] = '';
$x75->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x75->properties['global'] = false;
$x75->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x75->properties['ignoreCase'] = false;
$x75->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x75->properties['multiline'] = false;
$x75->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x75->properties['lastIndex'] = 0;
$x75->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_RegExp === JS::$undefined || $_RegExp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x76 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 47, 18, '<image>/10_regexp.js');
$_TypeError =& $x76[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x76;
$x77 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x78 = $x77($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x78->class) && $x78->class === 'Error') {$x78->properties['file'] = '<image>/10_regexp.js';$x78->properties['line'] = 47;$x78->properties['column'] = 18;$x78->attributes['file'] = $x78->attributes['line'] = $x78->attributes['column'] = 0; }
throw new JSException($x78, 47, 18, '<image>/10_regexp.js');
}
$_RegExp = JS::toObject($_RegExp, $global);
unset($x79, $W79, $S79, $U79);
$x80 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $_RegExp, (string) 'prototype', 47, 18, '<image>/10_regexp.js');
$x79 =& $x80[0]; list(,$W79,$S79,$U79) = $x80;
if ($U79 && (!isset($_RegExp->extensible) || $_RegExp->extensible)) {$_RegExp->properties['prototype'] = $x79; $x79 =& $_RegExp->properties['prototype']; $_RegExp->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U79 = FALSE; $W79 = TRUE; }
if (isset($S79)) {
$x82 = $S79->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x83 = $x82($global, $_RegExp, $S79, array($x75), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x81 = $x83;
} else {
if (!$U79) {$x81 = $x75;if ($W79) { $x79 = $x75; }  }
else { $x81 = JS::$undefined; }
}
if (isset($_RegExp->class) && $_RegExp->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_RegExp->properties['length']) { $_RegExp->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x84 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'Object', 54, 51, '<image>/10_regexp.js');
$_Object =& $x84[0]; list(,$WObject,$SObject,$UObject) = $x84;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x85 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'ReferenceError', 54, 51, '<image>/10_regexp.js');
$_ReferenceError =& $x85[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x85;
$x86 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 54, 51);
$x87 = $x86($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x87->class) && $x87->class === 'Error') {$x87->properties['file'] = '<image>/10_regexp.js';$x87->properties['line'] = 54;$x87->properties['column'] = 51;$x87->attributes['file'] = $x87->attributes['line'] = $x87->attributes['column'] = 0; }
throw new JSException($x87, 54, 51, '<image>/10_regexp.js');
}
$_RegExp->properties['prototype']->prototype =$_Object->properties['prototype'];
$_RegExp->properties['prototype']->class = 'RegExp';
$_RegExp->properties['prototype']->extensible = TRUE;
unset($x88, $W88, $S88, $U88);
$x89 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 57, 7, '<image>/10_regexp.js');
$x88 =& $x89[0]; list(,$W88,$S88,$U88) = $x89;
if ($x88 === JS::$undefined || $x88 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x90 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 57, 30, '<image>/10_regexp.js');
$_TypeError =& $x90[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x90;
$x91 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x92 = $x91($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x92->class) && $x92->class === 'Error') {$x92->properties['file'] = '<image>/10_regexp.js';$x92->properties['line'] = 57;$x92->properties['column'] = 30;$x92->attributes['file'] = $x92->attributes['line'] = $x92->attributes['column'] = 0; }
throw new JSException($x92, 57, 30, '<image>/10_regexp.js');
}
$x88 = JS::toObject($x88, $global);
unset($x93, $W93, $S93, $U93);
$x94 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x88, (string) 'constructor', 57, 30, '<image>/10_regexp.js');
$x93 =& $x94[0]; list(,$W93,$S93,$U93) = $x94;
if ($U93 && (!isset($x88->extensible) || $x88->extensible)) {$x88->properties['constructor'] = $x93; $x93 =& $x88->properties['constructor']; $x88->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U93 = FALSE; $W93 = TRUE; }
if (isset($S93)) {
$x96 = $S93->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x97 = $x96($global, $x88, $S93, array($_RegExp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x95 = $x97;
} else {
if (!$U93) {$x95 = $_RegExp;if ($W93) { $x93 = $_RegExp; }  }
else { $x95 = JS::$undefined; }
}
if (isset($x88->class) && $x88->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x88->properties['length']) { $x88->properties['length'] = 'constructor' + 1; };
$x192 = clone JS::$functionTemplate; $x192->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_5'; $x192->parameters = array (
  0 => 'string',
); $x192->scope = $scope; $x192->properties['prototype'] = clone JS::$objectTemplate; $x192->attributes['prototype'] = JS::WRITABLE; $x192->properties['prototype']->properties['constructor'] = $x192; $x192->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x192->properties['length'] = 1; $x192->attributes['length'] = 0;
unset($x193, $W193, $S193, $U193);
$x194 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 59, 7, '<image>/10_regexp.js');
$x193 =& $x194[0]; list(,$W193,$S193,$U193) = $x194;
if ($x193 === JS::$undefined || $x193 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x195 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 59, 23, '<image>/10_regexp.js');
$_TypeError =& $x195[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x195;
$x196 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x197 = $x196($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x197->class) && $x197->class === 'Error') {$x197->properties['file'] = '<image>/10_regexp.js';$x197->properties['line'] = 59;$x197->properties['column'] = 23;$x197->attributes['file'] = $x197->attributes['line'] = $x197->attributes['column'] = 0; }
throw new JSException($x197, 59, 23, '<image>/10_regexp.js');
}
$x193 = JS::toObject($x193, $global);
unset($x198, $W198, $S198, $U198);
$x199 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x193, (string) 'exec', 59, 23, '<image>/10_regexp.js');
$x198 =& $x199[0]; list(,$W198,$S198,$U198) = $x199;
if ($U198 && (!isset($x193->extensible) || $x193->extensible)) {$x193->properties['exec'] = $x198; $x198 =& $x193->properties['exec']; $x193->attributes['exec'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U198 = FALSE; $W198 = TRUE; }
if (isset($S198)) {
$x201 = $S198->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x202 = $x201($global, $x193, $S198, array($x192), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x200 = $x202;
} else {
if (!$U198) {$x200 = $x192;if ($W198) { $x198 = $x192; }  }
else { $x200 = JS::$undefined; }
}
if (isset($x193->class) && $x193->class === 'Array' &&  is_int('exec') && 'exec' >= $x193->properties['length']) { $x193->properties['length'] = 'exec' + 1; };
$x217 = clone JS::$functionTemplate; $x217->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_6'; $x217->parameters = array (
  0 => 'string',
); $x217->scope = $scope; $x217->properties['prototype'] = clone JS::$objectTemplate; $x217->attributes['prototype'] = JS::WRITABLE; $x217->properties['prototype']->properties['constructor'] = $x217; $x217->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x217->properties['length'] = 1; $x217->attributes['length'] = 0;
unset($x218, $W218, $S218, $U218);
$x219 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 114, 7, '<image>/10_regexp.js');
$x218 =& $x219[0]; list(,$W218,$S218,$U218) = $x219;
if ($x218 === JS::$undefined || $x218 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x220 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 114, 23, '<image>/10_regexp.js');
$_TypeError =& $x220[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x220;
$x221 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x222 = $x221($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x222->class) && $x222->class === 'Error') {$x222->properties['file'] = '<image>/10_regexp.js';$x222->properties['line'] = 114;$x222->properties['column'] = 23;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 114, 23, '<image>/10_regexp.js');
}
$x218 = JS::toObject($x218, $global);
unset($x223, $W223, $S223, $U223);
$x224 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x218, (string) 'test', 114, 23, '<image>/10_regexp.js');
$x223 =& $x224[0]; list(,$W223,$S223,$U223) = $x224;
if ($U223 && (!isset($x218->extensible) || $x218->extensible)) {$x218->properties['test'] = $x223; $x223 =& $x218->properties['test']; $x218->attributes['test'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U223 = FALSE; $W223 = TRUE; }
if (isset($S223)) {
$x226 = $S223->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x227 = $x226($global, $x218, $S223, array($x217), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x225 = $x227;
} else {
if (!$U223) {$x225 = $x217;if ($W223) { $x223 = $x217; }  }
else { $x225 = JS::$undefined; }
}
if (isset($x218->class) && $x218->class === 'Array' &&  is_int('test') && 'test' >= $x218->properties['length']) { $x218->properties['length'] = 'test' + 1; };
$x250 = clone JS::$functionTemplate; $x250->call = '_7934ef3d20d590a6b38ccc3ba2c260ad_7'; $x250->parameters = array (
); $x250->scope = $scope; $x250->properties['prototype'] = clone JS::$objectTemplate; $x250->attributes['prototype'] = JS::WRITABLE; $x250->properties['prototype']->properties['constructor'] = $x250; $x250->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x250->properties['length'] = 0; $x250->attributes['length'] = 0;
unset($x251, $W251, $S251, $U251);
$x252 = _7934ef3d20d590a6b38ccc3ba2c260ad_4($global, $scope, $_RegExp, (string) 'prototype', 118, 7, '<image>/10_regexp.js');
$x251 =& $x252[0]; list(,$W251,$S251,$U251) = $x252;
if ($x251 === JS::$undefined || $x251 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x253 = _7934ef3d20d590a6b38ccc3ba2c260ad_2($global, $scope, $scope, (string) 'TypeError', 118, 27, '<image>/10_regexp.js');
$_TypeError =& $x253[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x253;
$x254 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x255 = $x254($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x255->class) && $x255->class === 'Error') {$x255->properties['file'] = '<image>/10_regexp.js';$x255->properties['line'] = 118;$x255->properties['column'] = 27;$x255->attributes['file'] = $x255->attributes['line'] = $x255->attributes['column'] = 0; }
throw new JSException($x255, 118, 27, '<image>/10_regexp.js');
}
$x251 = JS::toObject($x251, $global);
unset($x256, $W256, $S256, $U256);
$x257 = _7934ef3d20d590a6b38ccc3ba2c260ad_3($global, $scope, $x251, (string) 'toString', 118, 27, '<image>/10_regexp.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
if ($U256 && (!isset($x251->extensible) || $x251->extensible)) {$x251->properties['toString'] = $x256; $x256 =& $x251->properties['toString']; $x251->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U256 = FALSE; $W256 = TRUE; }
if (isset($S256)) {
$x259 = $S256->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x260 = $x259($global, $x251, $S256, array($x250), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x258 = $x260;
} else {
if (!$U256) {$x258 = $x250;if ($W256) { $x256 = $x250; }  }
else { $x258 = JS::$undefined; }
}
if (isset($x251->class) && $x251->class === 'Array' &&  is_int('toString') && 'toString' >= $x251->properties['length']) { $x251->properties['length'] = 'toString' + 1; };
;
return JS::$undefined;
}
