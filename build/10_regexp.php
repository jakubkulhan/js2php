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
$x77 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x77[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x77;
$x78 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x79 = $x78($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error' && !isset($x79->properties['file']) && !isset($x79->properties['line']) && !isset($x79->properties['column'])) {$x79->properties['file'] = $file;$x79->properties['line'] = $line;$x79->properties['column'] = $column;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, $line, $column, $file);
}
$W76 = $S76 = $U76 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x76 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x80 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x81 = $x80($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x76 = $x81; }
else { $x76 = JS::$undefined; $U76 = TRUE; }
return array(&$x76, $W76, $S76, $U76);
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x77=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x77[0];list(,$WTypeError,$STypeError,$UTypeError)=$x77;$x78=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x79=$x78($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'&&!isset($x79->properties[\'file\'])&&!isset($x79->properties[\'line\'])&&!isset($x79->properties[\'column\'])){$x79->properties[\'file\']=$file;$x79->properties[\'line\']=$line;$x79->properties[\'column\']=$column;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,$line,$column,$file);}$W76=$S76=$U76=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x76=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x80=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x81=$x80($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x76=$x81;}else{$x76=JS::$undefined;$U76=TRUE;}return array(&$x76,$W76,$S76,$U76);}', "\n";
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
if (isset($_r->class) && $_r->class === 'Array') {  if (isset($_r->properties['length']) && $_r->properties['length'] !== JS::$undefined) { $x20 = $_r->properties['length']; }  else { $x20 = 0; } }
if (isset($S14)) {
$x21 = $S14->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 25, 11);
$x22 = $x21($global, $_r, $S14, array($x7), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x19 = $x22;
} else {
if (!$U14) {$x19 = $x7;if ($W14) { $x14 = $x7; }  }
else { $x19 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array') {if (is_int('source') && 'source' >= $_r->properties['length']) { $_r->properties['length'] = 'source' + 1; }else if ($x8 === 'length' && is_int($x7) && $x20 > $x7) {  for ($i = $x7; $i < $x20; ++$i) {  unset($_r->properties[$i], $_r->attributes[$i]); }}};
for ($x23 = 0;; ++$x23) {
if ($x23 === 0) {
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
if ($x23 !== 0) {
$x24 = ++$_i;
}
$x25 = JS::toPrimitive($_i, $global);
$x26 = JS::toPrimitive($_l, $global);
$x27 = (is_string($x25) && is_string($x26) ? strcmp($x25, $x26) < 0 : (!is_nan($x28 = JS::toNumber($x25, $global)) && !is_nan($x29 = JS::toNumber($x26, $global)) && $x28 < $x29));
if (!JS::toBoolean($x27, $global)) { break; }

$_c= substr($_flags,$_i, 1);
$x30 = (((gettype($_c) === gettype('g') && $_c === 'g'))|| (((is_float($_c) || is_int($_c)) && (is_float('g') || is_int('g'))) && $_c == 'g'));
if (JS::toBoolean($x30, $global)) {
$x31 = true;
$x32 = JS::toString('global', $global);
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x33 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 31, 13, '<image>/10_regexp.js');
$_TypeError =& $x33[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x33;
$x34 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x35 = $x34($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x35->class) && $x35->class === 'Error' && !isset($x35->properties['file']) && !isset($x35->properties['line']) && !isset($x35->properties['column'])) {$x35->properties['file'] = '<image>/10_regexp.js';$x35->properties['line'] = 31;$x35->properties['column'] = 13;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 31, 13, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x36, $W36, $S36, $U36);
$x37 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_r, JS::toString($x32, $global), 31, 13, '<image>/10_regexp.js');
$x36 =& $x37[0]; list(,$W36,$S36,$U36) = $x37;
if ($U36 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties[$x32] = $x36; $x36 =& $_r->properties[$x32]; $_r->attributes[$x32] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U36 = FALSE; $W36 = TRUE; }
if (isset($_r->class) && $_r->class === 'Array') {  if (isset($_r->properties['length']) && $_r->properties['length'] !== JS::$undefined) { $x39 = $_r->properties['length']; }  else { $x39 = 0; } }
if (isset($S36)) {
$x40 = $S36->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 31, 13);
$x41 = $x40($global, $_r, $S36, array($x31), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x38 = $x41;
} else {
if (!$U36) {$x38 = $x31;if ($W36) { $x36 = $x31; }  }
else { $x38 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array') {if (is_int('global') && 'global' >= $_r->properties['length']) { $_r->properties['length'] = 'global' + 1; }else if ($x32 === 'length' && is_int($x31) && $x39 > $x31) {  for ($i = $x31; $i < $x39; ++$i) {  unset($_r->properties[$i], $_r->attributes[$i]); }}};
}
else {
$x42 = (((gettype($_c) === gettype('i') && $_c === 'i'))|| (((is_float($_c) || is_int($_c)) && (is_float('i') || is_int('i'))) && $_c == 'i'));
if (JS::toBoolean($x42, $global)) {
$x43 = true;
$x44 = JS::toString('ignoreCase', $global);
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x45 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 33, 17, '<image>/10_regexp.js');
$_TypeError =& $x45[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x45;
$x46 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x47 = $x46($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x47->class) && $x47->class === 'Error' && !isset($x47->properties['file']) && !isset($x47->properties['line']) && !isset($x47->properties['column'])) {$x47->properties['file'] = '<image>/10_regexp.js';$x47->properties['line'] = 33;$x47->properties['column'] = 17;$x47->attributes['file'] = $x47->attributes['line'] = $x47->attributes['column'] = 0; }
throw new JSException($x47, 33, 17, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x48, $W48, $S48, $U48);
$x49 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_r, JS::toString($x44, $global), 33, 17, '<image>/10_regexp.js');
$x48 =& $x49[0]; list(,$W48,$S48,$U48) = $x49;
if ($U48 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties[$x44] = $x48; $x48 =& $_r->properties[$x44]; $_r->attributes[$x44] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U48 = FALSE; $W48 = TRUE; }
if (isset($_r->class) && $_r->class === 'Array') {  if (isset($_r->properties['length']) && $_r->properties['length'] !== JS::$undefined) { $x51 = $_r->properties['length']; }  else { $x51 = 0; } }
if (isset($S48)) {
$x52 = $S48->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 33, 17);
$x53 = $x52($global, $_r, $S48, array($x43), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x50 = $x53;
} else {
if (!$U48) {$x50 = $x43;if ($W48) { $x48 = $x43; }  }
else { $x50 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array') {if (is_int('ignoreCase') && 'ignoreCase' >= $_r->properties['length']) { $_r->properties['length'] = 'ignoreCase' + 1; }else if ($x44 === 'length' && is_int($x43) && $x51 > $x43) {  for ($i = $x43; $i < $x51; ++$i) {  unset($_r->properties[$i], $_r->attributes[$i]); }}};
}
else {
$x54 = (((gettype($_c) === gettype('m') && $_c === 'm'))|| (((is_float($_c) || is_int($_c)) && (is_float('m') || is_int('m'))) && $_c == 'm'));
if (JS::toBoolean($x54, $global)) {
$x55 = true;
$x56 = JS::toString('multiline', $global);
if ($_r === JS::$undefined || $_r === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x57 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 35, 16, '<image>/10_regexp.js');
$_TypeError =& $x57[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x57;
$x58 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x59 = $x58($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x59->class) && $x59->class === 'Error' && !isset($x59->properties['file']) && !isset($x59->properties['line']) && !isset($x59->properties['column'])) {$x59->properties['file'] = '<image>/10_regexp.js';$x59->properties['line'] = 35;$x59->properties['column'] = 16;$x59->attributes['file'] = $x59->attributes['line'] = $x59->attributes['column'] = 0; }
throw new JSException($x59, 35, 16, '<image>/10_regexp.js');
}
$_r = JS::toObject($_r, $global);
unset($x60, $W60, $S60, $U60);
$x61 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_r, JS::toString($x56, $global), 35, 16, '<image>/10_regexp.js');
$x60 =& $x61[0]; list(,$W60,$S60,$U60) = $x61;
if ($U60 && (!isset($_r->extensible) || $_r->extensible)) {$_r->properties[$x56] = $x60; $x60 =& $_r->properties[$x56]; $_r->attributes[$x56] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U60 = FALSE; $W60 = TRUE; }
if (isset($_r->class) && $_r->class === 'Array') {  if (isset($_r->properties['length']) && $_r->properties['length'] !== JS::$undefined) { $x63 = $_r->properties['length']; }  else { $x63 = 0; } }
if (isset($S60)) {
$x64 = $S60->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 35, 16);
$x65 = $x64($global, $_r, $S60, array($x55), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x62 = $x65;
} else {
if (!$U60) {$x62 = $x55;if ($W60) { $x60 = $x55; }  }
else { $x62 = JS::$undefined; }
}
if (isset($_r->class) && $_r->class === 'Array') {if (is_int('multiline') && 'multiline' >= $_r->properties['length']) { $_r->properties['length'] = 'multiline' + 1; }else if ($x56 === 'length' && is_int($x55) && $x63 > $x55) {  for ($i = $x55; $i < $x63; ++$i) {  unset($_r->properties[$i], $_r->attributes[$i]); }}};
}
else {
unset($_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
$x68 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('SyntaxError', $global), 37, 14, '<image>/10_regexp.js');
$_SyntaxError =& $x68[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x68;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x69 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 37, 14, '<image>/10_regexp.js');
$_ReferenceError =& $x69[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x69;
$x70 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 14);
$x71 = $x70($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x71->class) && $x71->class === 'Error' && !isset($x71->properties['file']) && !isset($x71->properties['line']) && !isset($x71->properties['column'])) {$x71->properties['file'] = '<image>/10_regexp.js';$x71->properties['line'] = 37;$x71->properties['column'] = 14;$x71->attributes['file'] = $x71->attributes['line'] = $x71->attributes['column'] = 0; }
throw new JSException($x71, 37, 14, '<image>/10_regexp.js');
}
$x74 = JS::toPrimitive('RegExp(): Unknow regexp flag ', $global);
$x75 = JS::toPrimitive($_c, $global);
$x72 = JS::toPrimitive((is_string($x74) || is_string($x75) ? JS::toString($x74, $global) . JS::toString($x75, $global) : JS::toNumber($x74, $global) + JS::toNumber($x75, $global)), $global);
$x73 = JS::toPrimitive('.', $global);
$x66 = clone JS::$objectTemplate;
unset($x76, $W76, $S76, $U76);
$x82 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_SyntaxError, JS::toString('prototype', $global), 37, 10, '<image>/10_regexp.js');
$x76 =& $x82[0]; list(,$W76,$S76,$U76) = $x82;
$x67 = $x76;
$x66->prototype = $x67;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x85 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 37, 10, '<image>/10_regexp.js');
$_TypeError =& $x85[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x85;
$x86 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x87 = $x86($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x87->class) && $x87->class === 'Error' && !isset($x87->properties['file']) && !isset($x87->properties['line']) && !isset($x87->properties['column'])) {$x87->properties['file'] = '<image>/10_regexp.js';$x87->properties['line'] = 37;$x87->properties['column'] = 10;$x87->attributes['file'] = $x87->attributes['line'] = $x87->attributes['column'] = 0; }
throw new JSException($x87, 37, 10, '<image>/10_regexp.js');
}
$x83 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 37, 10);
$x84 = $x83($global, $x66, $_SyntaxError, array((is_string($x72) || is_string($x73) ? JS::toString($x72, $global) . JS::toString($x73, $global) : JS::toNumber($x72, $global) + JS::toNumber($x73, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x67 = $x84;
if (is_object($x67) && $x67 !== JS::$undefined) { $x66 = $x67; }
if (isset($x66->class) && $x66->class === 'Error' && !isset($x66->properties['file']) && !isset($x66->properties['line']) && !isset($x66->properties['column'])) {$x66->properties['file'] = '<image>/10_regexp.js';$x66->properties['line'] = 37;$x66->properties['column'] = 4;$x66->attributes['file'] = $x66->attributes['line'] = $x66->attributes['column'] = 0; }
throw new JSException($x66, 37, 4, '<image>/10_regexp.js');;
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
echo 'function _288ff711bd10592118ad8a0bec5c87f0_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pattern\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$scope->properties[\'flags\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$scope->properties[\'RegExp\']=$fn;$_RegExp=&$scope->properties[\'RegExp\'];$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(is_object($_pattern)&&isset($_pattern->class)&&$_pattern->class===\'RegExp\',$global)){return$_pattern;}$x2=(((gettype($_pattern)===gettype(JS::$undefined)&&$_pattern===JS::$undefined))||(((is_float($_pattern)||is_int($_pattern))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_pattern==JS::$undefined));if(JS::toBoolean($x2,$global)){$x3=\'\';if($Upattern){$global->properties[\'pattern\']=$_pattern;$_pattern=&$global->properties[\'pattern\'];}$_pattern=$x3;}$x4=(((gettype($_flags)===gettype(JS::$undefined)&&$_flags===JS::$undefined))||(((is_float($_flags)||is_int($_flags))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_flags==JS::$undefined));if(JS::toBoolean($x4,$global)){$x5=\'\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$_flags=$x5;}$x6=clone JS::$objectTemplate;$x6->properties[\'source\']=JS::toString($_pattern,$global);$x6->attributes[\'source\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'global\']=false;$x6->attributes[\'global\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'ignoreCase\']=false;$x6->attributes[\'ignoreCase\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'multiline\']=false;$x6->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'lastIndex\']=0;$x6->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$scope->properties[\'r\']=JS::$undefined;$_r=&$scope->properties[\'r\'];$Ur=FALSE;$_r=$x6;$_r->class=\'RegExp\';$_r->prototype=$_RegExp->properties[\'prototype\'];$x7=JS::toString($_pattern,$global);$x8=JS::toString(\'source\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),25,11,\'<image>/10_regexp.js\');$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x13=$x12($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/10_regexp.js\';$x13->properties[\'line\']=25;$x13->properties[\'column\']=11;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,25,11,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x14,$W14,$S14,$U14);$x18=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x8,$global),25,11,\'<image>/10_regexp.js\');$x14=&$x18[0];list(,$W14,$S14,$U14)=$x18;if($U14&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x8]=$x14;$x14=&$_r->properties[$x8];$_r->attributes[$x8]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U14=FALSE;$W14=TRUE;}if(isset($_r->class)&&$_r->class===\'Array\'){if(isset($_r->properties[\'length\'])&&$_r->properties[\'length\']!==JS::$undefined){$x20=$_r->properties[\'length\'];}else{$x20=0;}}if(isset($S14)){$x21=$S14->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',25,11);$x22=$x21($global,$_r,$S14,array($x7),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x19=$x22;}else{if(!$U14){$x19=$x7;if($W14){$x14=$x7;}}else{$x19=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'){if(is_int(\'source\')&&\'source\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'source\'+1;}else if($x8===\'length\'&&is_int($x7)&&$x20>$x7){for($i=$x7;$i<$x20;++$i){unset($_r->properties[$i],$_r->attributes[$i]);}}}for($x23=0;;++$x23){if($x23===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=strlen($_flags);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=JS::$undefined;}if($x23!==0){$x24=++$_i;}$x25=JS::toPrimitive($_i,$global);$x26=JS::toPrimitive($_l,$global);$x27=(is_string($x25)&&is_string($x26)?strcmp($x25,$x26)<0:(!is_nan($x28=JS::toNumber($x25,$global))&&!is_nan($x29=JS::toNumber($x26,$global))&&$x28<$x29));if(!JS::toBoolean($x27,$global)){break;}$_c=substr($_flags,$_i,1);$x30=(((gettype($_c)===gettype(\'g\')&&$_c===\'g\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'g\')||is_int(\'g\')))&&$_c==\'g\'));if(JS::toBoolean($x30,$global)){$x31=true;$x32=JS::toString(\'global\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x33=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),31,13,\'<image>/10_regexp.js\');$_TypeError=&$x33[0];list(,$WTypeError,$STypeError,$UTypeError)=$x33;$x34=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x35=$x34($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x35->class)&&$x35->class===\'Error\'&&!isset($x35->properties[\'file\'])&&!isset($x35->properties[\'line\'])&&!isset($x35->properties[\'column\'])){$x35->properties[\'file\']=\'<image>/10_regexp.js\';$x35->properties[\'line\']=31;$x35->properties[\'column\']=13;$x35->attributes[\'file\']=$x35->attributes[\'line\']=$x35->attributes[\'column\']=0;}throw new JSException($x35,31,13,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x36,$W36,$S36,$U36);$x37=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x32,$global),31,13,\'<image>/10_regexp.js\');$x36=&$x37[0];list(,$W36,$S36,$U36)=$x37;if($U36&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x32]=$x36;$x36=&$_r->properties[$x32];$_r->attributes[$x32]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U36=FALSE;$W36=TRUE;}if(isset($_r->class)&&$_r->class===\'Array\'){if(isset($_r->properties[\'length\'])&&$_r->properties[\'length\']!==JS::$undefined){$x39=$_r->properties[\'length\'];}else{$x39=0;}}if(isset($S36)){$x40=$S36->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',31,13);$x41=$x40($global,$_r,$S36,array($x31),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x38=$x41;}else{if(!$U36){$x38=$x31;if($W36){$x36=$x31;}}else{$x38=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'){if(is_int(\'global\')&&\'global\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'global\'+1;}else if($x32===\'length\'&&is_int($x31)&&$x39>$x31){for($i=$x31;$i<$x39;++$i){unset($_r->properties[$i],$_r->attributes[$i]);}}}}else{$x42=(((gettype($_c)===gettype(\'i\')&&$_c===\'i\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'i\')||is_int(\'i\')))&&$_c==\'i\'));if(JS::toBoolean($x42,$global)){$x43=true;$x44=JS::toString(\'ignoreCase\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x45=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),33,17,\'<image>/10_regexp.js\');$_TypeError=&$x45[0];list(,$WTypeError,$STypeError,$UTypeError)=$x45;$x46=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x47=$x46($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x47->class)&&$x47->class===\'Error\'&&!isset($x47->properties[\'file\'])&&!isset($x47->properties[\'line\'])&&!isset($x47->properties[\'column\'])){$x47->properties[\'file\']=\'<image>/10_regexp.js\';$x47->properties[\'line\']=33;$x47->properties[\'column\']=17;$x47->attributes[\'file\']=$x47->attributes[\'line\']=$x47->attributes[\'column\']=0;}throw new JSException($x47,33,17,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x48,$W48,$S48,$U48);$x49=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x44,$global),33,17,\'<image>/10_regexp.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;if($U48&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x44]=$x48;$x48=&$_r->properties[$x44];$_r->attributes[$x44]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U48=FALSE;$W48=TRUE;}if(isset($_r->class)&&$_r->class===\'Array\'){if(isset($_r->properties[\'length\'])&&$_r->properties[\'length\']!==JS::$undefined){$x51=$_r->properties[\'length\'];}else{$x51=0;}}if(isset($S48)){$x52=$S48->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',33,17);$x53=$x52($global,$_r,$S48,array($x43),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x50=$x53;}else{if(!$U48){$x50=$x43;if($W48){$x48=$x43;}}else{$x50=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'){if(is_int(\'ignoreCase\')&&\'ignoreCase\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'ignoreCase\'+1;}else if($x44===\'length\'&&is_int($x43)&&$x51>$x43){for($i=$x43;$i<$x51;++$i){unset($_r->properties[$i],$_r->attributes[$i]);}}}}else{$x54=(((gettype($_c)===gettype(\'m\')&&$_c===\'m\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'m\')||is_int(\'m\')))&&$_c==\'m\'));if(JS::toBoolean($x54,$global)){$x55=true;$x56=JS::toString(\'multiline\',$global);if($_r===JS::$undefined||$_r===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x57=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,16,\'<image>/10_regexp.js\');$_TypeError=&$x57[0];list(,$WTypeError,$STypeError,$UTypeError)=$x57;$x58=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x59=$x58($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x59->class)&&$x59->class===\'Error\'&&!isset($x59->properties[\'file\'])&&!isset($x59->properties[\'line\'])&&!isset($x59->properties[\'column\'])){$x59->properties[\'file\']=\'<image>/10_regexp.js\';$x59->properties[\'line\']=35;$x59->properties[\'column\']=16;$x59->attributes[\'file\']=$x59->attributes[\'line\']=$x59->attributes[\'column\']=0;}throw new JSException($x59,35,16,\'<image>/10_regexp.js\');}$_r=JS::toObject($_r,$global);unset($x60,$W60,$S60,$U60);$x61=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_r,JS::toString($x56,$global),35,16,\'<image>/10_regexp.js\');$x60=&$x61[0];list(,$W60,$S60,$U60)=$x61;if($U60&&(!isset($_r->extensible)||$_r->extensible)){$_r->properties[$x56]=$x60;$x60=&$_r->properties[$x56];$_r->attributes[$x56]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U60=FALSE;$W60=TRUE;}if(isset($_r->class)&&$_r->class===\'Array\'){if(isset($_r->properties[\'length\'])&&$_r->properties[\'length\']!==JS::$undefined){$x63=$_r->properties[\'length\'];}else{$x63=0;}}if(isset($S60)){$x64=$S60->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',35,16);$x65=$x64($global,$_r,$S60,array($x55),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x62=$x65;}else{if(!$U60){$x62=$x55;if($W60){$x60=$x55;}}else{$x62=JS::$undefined;}}if(isset($_r->class)&&$_r->class===\'Array\'){if(is_int(\'multiline\')&&\'multiline\'>=$_r->properties[\'length\']){$_r->properties[\'length\']=\'multiline\'+1;}else if($x56===\'length\'&&is_int($x55)&&$x63>$x55){for($i=$x55;$i<$x63;++$i){unset($_r->properties[$i],$_r->attributes[$i]);}}}}else{unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x68=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'SyntaxError\',$global),37,14,\'<image>/10_regexp.js\');$_SyntaxError=&$x68[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x68;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x69=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),37,14,\'<image>/10_regexp.js\');$_ReferenceError=&$x69[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x69;$x70=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,14);$x71=$x70($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x71->class)&&$x71->class===\'Error\'&&!isset($x71->properties[\'file\'])&&!isset($x71->properties[\'line\'])&&!isset($x71->properties[\'column\'])){$x71->properties[\'file\']=\'<image>/10_regexp.js\';$x71->properties[\'line\']=37;$x71->properties[\'column\']=14;$x71->attributes[\'file\']=$x71->attributes[\'line\']=$x71->attributes[\'column\']=0;}throw new JSException($x71,37,14,\'<image>/10_regexp.js\');}$x74=JS::toPrimitive(\'RegExp(): Unknow regexp flag \',$global);$x75=JS::toPrimitive($_c,$global);$x72=JS::toPrimitive((is_string($x74)||is_string($x75)?JS::toString($x74,$global).JS::toString($x75,$global):JS::toNumber($x74,$global)+JS::toNumber($x75,$global)),$global);$x73=JS::toPrimitive(\'.\',$global);$x66=clone JS::$objectTemplate;unset($x76,$W76,$S76,$U76);$x82=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$_SyntaxError,JS::toString(\'prototype\',$global),37,10,\'<image>/10_regexp.js\');$x76=&$x82[0];list(,$W76,$S76,$U76)=$x82;$x67=$x76;$x66->prototype=$x67;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x85=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),37,10,\'<image>/10_regexp.js\');$_TypeError=&$x85[0];list(,$WTypeError,$STypeError,$UTypeError)=$x85;$x86=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x87=$x86($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x87->class)&&$x87->class===\'Error\'&&!isset($x87->properties[\'file\'])&&!isset($x87->properties[\'line\'])&&!isset($x87->properties[\'column\'])){$x87->properties[\'file\']=\'<image>/10_regexp.js\';$x87->properties[\'line\']=37;$x87->properties[\'column\']=10;$x87->attributes[\'file\']=$x87->attributes[\'line\']=$x87->attributes[\'column\']=0;}throw new JSException($x87,37,10,\'<image>/10_regexp.js\');}$x83=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',37,10);$x84=$x83($global,$x66,$_SyntaxError,array((is_string($x72)||is_string($x73)?JS::toString($x72,$global).JS::toString($x73,$global):JS::toNumber($x72,$global)+JS::toNumber($x73,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x67=$x84;if(is_object($x67)&&$x67!==JS::$undefined){$x66=$x67;}if(isset($x66->class)&&$x66->class===\'Error\'&&!isset($x66->properties[\'file\'])&&!isset($x66->properties[\'line\'])&&!isset($x66->properties[\'column\'])){$x66->properties[\'file\']=\'<image>/10_regexp.js\';$x66->properties[\'line\']=37;$x66->properties[\'column\']=4;$x66->attributes[\'file\']=$x66->attributes[\'line\']=$x66->attributes[\'column\']=0;}throw new JSException($x66,37,4,\'<image>/10_regexp.js\');}}}}foreach($_r->attributes as$a=>$_){$_r->attributes[$a]=0;}$_r->attributes[\'lastIndex\']=JS::WRITABLE;return$_r;return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x117 =& $scope->properties['arguments'];
$x117->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x117->properties[$i] = $args[$i];
$x117->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x118 = JS::toString($_string, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x118;
unset($x119, $W119, $S119, $U119);
$x120 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_string, JS::toString('length', $global), 61, 21, '<image>/10_regexp.js');
$x119 =& $x120[0]; list(,$W119,$S119,$U119) = $x120;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = $x119;
unset($x121, $W121, $S121, $U121);
$x122 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('lastIndex', $global), 61, 38, '<image>/10_regexp.js');
$x121 =& $x122[0]; list(,$W121,$S121,$U121) = $x122;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = $x121;
unset($x123, $W123, $S123, $U123);
$x124 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('global', $global), 63, 11, '<image>/10_regexp.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
if (JS::toBoolean((!JS::toBoolean($x123, $global)), $global)) {
$x125 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x125;;
};
$x127 = JS::toPrimitive($_i, $global);
$x128 = JS::toPrimitive(0, $global);
$x129 = (is_string($x127) && is_string($x128) ? strcmp($x127, $x128) < 0 : (!is_nan($x130 = JS::toNumber($x127, $global)) && !is_nan($x131 = JS::toNumber($x128, $global)) && $x130 < $x131));
$x126 = $x129;
if (!JS::toBoolean($x126, $global)) {
$x132 = JS::toPrimitive($_i, $global);
$x133 = JS::toPrimitive($_length, $global);
$x134 = (is_string($x133) && is_string($x132) ? strcmp($x133, $x132) < 0 : (!is_nan($x135 = JS::toNumber($x133, $global)) && !is_nan($x136 = JS::toNumber($x132, $global)) && $x135 < $x136));
$x126 = $x134; }
if (JS::toBoolean($x126, $global)) {
$x137 = 0;
$x138 = JS::toString('lastIndex', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x139 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 68, 18, '<image>/10_regexp.js');
$_TypeError =& $x139[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x139;
$x140 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x141 = $x140($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x141->class) && $x141->class === 'Error' && !isset($x141->properties['file']) && !isset($x141->properties['line']) && !isset($x141->properties['column'])) {$x141->properties['file'] = '<image>/10_regexp.js';$x141->properties['line'] = 68;$x141->properties['column'] = 18;$x141->attributes['file'] = $x141->attributes['line'] = $x141->attributes['column'] = 0; }
throw new JSException($x141, 68, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x142, $W142, $S142, $U142);
$x143 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $leThis, JS::toString($x138, $global), 68, 18, '<image>/10_regexp.js');
$x142 =& $x143[0]; list(,$W142,$S142,$U142) = $x143;
if ($U142 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x138] = $x142; $x142 =& $leThis->properties[$x138]; $leThis->attributes[$x138] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U142 = FALSE; $W142 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x145 = $leThis->properties['length']; }  else { $x145 = 0; } }
if (isset($S142)) {
$x146 = $S142->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 68, 18);
$x147 = $x146($global, $leThis, $S142, array($x137), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x144 = $x147;
} else {
if (!$U142) {$x144 = $x137;if ($W142) { $x142 = $x137; }  }
else { $x144 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; }else if ($x138 === 'length' && is_int($x137) && $x145 > $x137) {  for ($i = $x137; $i < $x145; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
return NULL;;
};
unset($x148, $W148, $S148, $U148);
$x149 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('source', $global), 72, 20, '<image>/10_regexp.js');
$x148 =& $x149[0]; list(,$W148,$S148,$U148) = $x149;
$scope->properties['pattern'] = JS::$undefined; $_pattern =& $scope->properties['pattern'];
$Upattern = FALSE;
$_pattern = $x148;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
$scope->properties['result'] = JS::$undefined; $_result =& $scope->properties['result'];
$Uresult = FALSE;
$_result = JS::$undefined;
unset($x150, $W150, $S150, $U150);
$x151 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('ignoreCase', $global), 74, 10, '<image>/10_regexp.js');
$x150 =& $x151[0]; list(,$W150,$S150,$U150) = $x151;
if (JS::toBoolean($x150, $global)) {
$x152 = 'i';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x153 = JS::toPrimitive($_flags, $global);
$x154 = JS::toPrimitive($x152, $global);
$_flags = (is_string($x153) || is_string($x154) ? JS::toString($x153, $global) . JS::toString($x154, $global) : JS::toNumber($x153, $global) + JS::toNumber($x154, $global));;
};
unset($x155, $W155, $S155, $U155);
$x156 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('multiline', $global), 77, 10, '<image>/10_regexp.js');
$x155 =& $x156[0]; list(,$W155,$S155,$U155) = $x156;
if (JS::toBoolean($x155, $global)) {
$x157 = 'm';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x158 = JS::toPrimitive($_flags, $global);
$x159 = JS::toPrimitive($x157, $global);
$_flags = (is_string($x158) || is_string($x159) ? JS::toString($x158, $global) . JS::toString($x159, $global) : JS::toNumber($x158, $global) + JS::toNumber($x159, $global));;
};
$x160 = preg_match(
		'/' .$_pattern. '/u' .$_flags,
		JS::toString($_string, $global),
		$matches,
		PREG_OFFSET_CAPTURE,$_i);
if ($Uresult) {$global->properties['result'] = $_result; $_result =& $global->properties['result']; }
$_result = $x160;
if (JS::toBoolean((!JS::toBoolean($_result, $global)), $global)) {
$x161 = 0;
$x162 = JS::toString('lastIndex', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x163 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 90, 18, '<image>/10_regexp.js');
$_TypeError =& $x163[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x163;
$x164 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x165 = $x164($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x165->class) && $x165->class === 'Error' && !isset($x165->properties['file']) && !isset($x165->properties['line']) && !isset($x165->properties['column'])) {$x165->properties['file'] = '<image>/10_regexp.js';$x165->properties['line'] = 90;$x165->properties['column'] = 18;$x165->attributes['file'] = $x165->attributes['line'] = $x165->attributes['column'] = 0; }
throw new JSException($x165, 90, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x166, $W166, $S166, $U166);
$x167 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $leThis, JS::toString($x162, $global), 90, 18, '<image>/10_regexp.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
if ($U166 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x162] = $x166; $x166 =& $leThis->properties[$x162]; $leThis->attributes[$x162] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U166 = FALSE; $W166 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x169 = $leThis->properties['length']; }  else { $x169 = 0; } }
if (isset($S166)) {
$x170 = $S166->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 90, 18);
$x171 = $x170($global, $leThis, $S166, array($x161), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x168 = $x171;
} else {
if (!$U166) {$x168 = $x161;if ($W166) { $x166 = $x161; }  }
else { $x168 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; }else if ($x162 === 'length' && is_int($x161) && $x169 > $x161) {  for ($i = $x161; $i < $x169; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
return NULL;;
};
$x172 = clone JS::$arrayTemplate;
$x172->properties['length'] = 0;
$x172->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x172;
foreach ($matches as $I => $match) {;
if ($match[0] === '' && $I !== 0) {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x174 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x174;
$x175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x176 = $x175($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x176->class) && $x176->class === 'Error' && !isset($x176->properties['file']) && !isset($x176->properties['line']) && !isset($x176->properties['column'])) {$x176->properties['file'] = '<image>/10_regexp.js';$x176->properties['line'] = 98;$x176->properties['column'] = 20;$x176->attributes['file'] = $x176->attributes['line'] = $x176->attributes['column'] = 0; }
throw new JSException($x176, 98, 20, '<image>/10_regexp.js');
}
$x173 = JS::toObject($_returnArray, $global);
unset($x177, $W177, $S177, $U177);
$x178 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $x173, JS::toString('push', $global), 98, 20, '<image>/10_regexp.js');
$x177 =& $x178[0]; list(,$W177,$S177,$U177) = $x178;
if (!(is_object($x177) && isset($x177->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x181 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 98, 20, '<image>/10_regexp.js');
$_TypeError =& $x181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x181;
$x182 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x183 = $x182($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x183->class) && $x183->class === 'Error' && !isset($x183->properties['file']) && !isset($x183->properties['line']) && !isset($x183->properties['column'])) {$x183->properties['file'] = '<image>/10_regexp.js';$x183->properties['line'] = 98;$x183->properties['column'] = 20;$x183->attributes['file'] = $x183->attributes['line'] = $x183->attributes['column'] = 0; }
throw new JSException($x183, 98, 20, '<image>/10_regexp.js');
}
$x179 = $x177->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 98, 20);
$x180 = $x179($global, $x173, $x177, array(JS::$undefined), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
} else {;
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x185 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x185[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x185;
$x186 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x187 = $x186($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x187->class) && $x187->class === 'Error' && !isset($x187->properties['file']) && !isset($x187->properties['line']) && !isset($x187->properties['column'])) {$x187->properties['file'] = '<image>/10_regexp.js';$x187->properties['line'] = 100;$x187->properties['column'] = 20;$x187->attributes['file'] = $x187->attributes['line'] = $x187->attributes['column'] = 0; }
throw new JSException($x187, 100, 20, '<image>/10_regexp.js');
}
$x184 = JS::toObject($_returnArray, $global);
unset($x188, $W188, $S188, $U188);
$x189 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $x184, JS::toString('push', $global), 100, 20, '<image>/10_regexp.js');
$x188 =& $x189[0]; list(,$W188,$S188,$U188) = $x189;
if (!(is_object($x188) && isset($x188->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x192 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 100, 20, '<image>/10_regexp.js');
$_TypeError =& $x192[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x192;
$x193 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x194 = $x193($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x194->class) && $x194->class === 'Error' && !isset($x194->properties['file']) && !isset($x194->properties['line']) && !isset($x194->properties['column'])) {$x194->properties['file'] = '<image>/10_regexp.js';$x194->properties['line'] = 100;$x194->properties['column'] = 20;$x194->attributes['file'] = $x194->attributes['line'] = $x194->attributes['column'] = 0; }
throw new JSException($x194, 100, 20, '<image>/10_regexp.js');
}
$x190 = $x188->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 100, 20);
$x191 = $x190($global, $x184, $x188, array($match[0]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
};
unset($x195, $W195, $S195, $U195);
$x196 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('global', $global), 104, 10, '<image>/10_regexp.js');
$x195 =& $x196[0]; list(,$W195,$S195,$U195) = $x196;
if (JS::toBoolean($x195, $global)) {
$x197 = JS::toString('lastIndex', $global);
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x198 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 105, 18, '<image>/10_regexp.js');
$_TypeError =& $x198[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x198;
$x199 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x200 = $x199($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x200->class) && $x200->class === 'Error' && !isset($x200->properties['file']) && !isset($x200->properties['line']) && !isset($x200->properties['column'])) {$x200->properties['file'] = '<image>/10_regexp.js';$x200->properties['line'] = 105;$x200->properties['column'] = 18;$x200->attributes['file'] = $x200->attributes['line'] = $x200->attributes['column'] = 0; }
throw new JSException($x200, 105, 18, '<image>/10_regexp.js');
}
$leThis = JS::toObject($leThis, $global);
unset($x201, $W201, $S201, $U201);
$x202 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $leThis, JS::toString($x197, $global), 105, 18, '<image>/10_regexp.js');
$x201 =& $x202[0]; list(,$W201,$S201,$U201) = $x202;
if ($U201 && (!isset($leThis->extensible) || $leThis->extensible)) {$leThis->properties[$x197] = $x201; $x201 =& $leThis->properties[$x197]; $leThis->attributes[$x197] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U201 = FALSE; $W201 = TRUE; }
if (isset($leThis->class) && $leThis->class === 'Array') {  if (isset($leThis->properties['length']) && $leThis->properties['length'] !== JS::$undefined) { $x204 = $leThis->properties['length']; }  else { $x204 = 0; } }
if (isset($S201)) {
$x205 = $S201->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 105, 18);
$x206 = $x205($global, $leThis, $S201, array($matches[0][1] + strlen($matches[0][0])), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x203 = $x206;
} else {
if (!$U201) {$x203 = $matches[0][1] + strlen($matches[0][0]);if ($W201) { $x201 = $matches[0][1] + strlen($matches[0][0]); }  }
else { $x203 = JS::$undefined; }
}
if (isset($leThis->class) && $leThis->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $leThis->properties['length']) { $leThis->properties['length'] = 'lastIndex' + 1; }else if ($x197 === 'length' && is_int($matches[0][1] + strlen($matches[0][0])) && $x204 > $matches[0][1] + strlen($matches[0][0])) {  for ($i = $matches[0][1] + strlen($matches[0][0]); $i < $x204; ++$i) {  unset($leThis->properties[$i], $leThis->attributes[$i]); }}};
};
$x207 = JS::toString('index', $global);
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x208 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 108, 20, '<image>/10_regexp.js');
$_TypeError =& $x208[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x208;
$x209 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x210 = $x209($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x210->class) && $x210->class === 'Error' && !isset($x210->properties['file']) && !isset($x210->properties['line']) && !isset($x210->properties['column'])) {$x210->properties['file'] = '<image>/10_regexp.js';$x210->properties['line'] = 108;$x210->properties['column'] = 20;$x210->attributes['file'] = $x210->attributes['line'] = $x210->attributes['column'] = 0; }
throw new JSException($x210, 108, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x211, $W211, $S211, $U211);
$x212 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_returnArray, JS::toString($x207, $global), 108, 20, '<image>/10_regexp.js');
$x211 =& $x212[0]; list(,$W211,$S211,$U211) = $x212;
if ($U211 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties[$x207] = $x211; $x211 =& $_returnArray->properties[$x207]; $_returnArray->attributes[$x207] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U211 = FALSE; $W211 = TRUE; }
if (isset($_returnArray->class) && $_returnArray->class === 'Array') {  if (isset($_returnArray->properties['length']) && $_returnArray->properties['length'] !== JS::$undefined) { $x214 = $_returnArray->properties['length']; }  else { $x214 = 0; } }
if (isset($S211)) {
$x215 = $S211->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 108, 20);
$x216 = $x215($global, $_returnArray, $S211, array($matches[0][1]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x213 = $x216;
} else {
if (!$U211) {$x213 = $matches[0][1];if ($W211) { $x211 = $matches[0][1]; }  }
else { $x213 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array') {if (is_int('index') && 'index' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'index' + 1; }else if ($x207 === 'length' && is_int($matches[0][1]) && $x214 > $matches[0][1]) {  for ($i = $matches[0][1]; $i < $x214; ++$i) {  unset($_returnArray->properties[$i], $_returnArray->attributes[$i]); }}};
$x217 = JS::toString($_string, $global);
$x218 = JS::toString('input', $global);
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x219 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 109, 20, '<image>/10_regexp.js');
$_TypeError =& $x219[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x219;
$x220 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x221 = $x220($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x221->class) && $x221->class === 'Error' && !isset($x221->properties['file']) && !isset($x221->properties['line']) && !isset($x221->properties['column'])) {$x221->properties['file'] = '<image>/10_regexp.js';$x221->properties['line'] = 109;$x221->properties['column'] = 20;$x221->attributes['file'] = $x221->attributes['line'] = $x221->attributes['column'] = 0; }
throw new JSException($x221, 109, 20, '<image>/10_regexp.js');
}
$_returnArray = JS::toObject($_returnArray, $global);
unset($x222, $W222, $S222, $U222);
$x223 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_returnArray, JS::toString($x218, $global), 109, 20, '<image>/10_regexp.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
if ($U222 && (!isset($_returnArray->extensible) || $_returnArray->extensible)) {$_returnArray->properties[$x218] = $x222; $x222 =& $_returnArray->properties[$x218]; $_returnArray->attributes[$x218] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U222 = FALSE; $W222 = TRUE; }
if (isset($_returnArray->class) && $_returnArray->class === 'Array') {  if (isset($_returnArray->properties['length']) && $_returnArray->properties['length'] !== JS::$undefined) { $x225 = $_returnArray->properties['length']; }  else { $x225 = 0; } }
if (isset($S222)) {
$x226 = $S222->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 109, 20);
$x227 = $x226($global, $_returnArray, $S222, array($x217), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x224 = $x227;
} else {
if (!$U222) {$x224 = $x217;if ($W222) { $x222 = $x217; }  }
else { $x224 = JS::$undefined; }
}
if (isset($_returnArray->class) && $_returnArray->class === 'Array') {if (is_int('input') && 'input' >= $_returnArray->properties['length']) { $_returnArray->properties['length'] = 'input' + 1; }else if ($x218 === 'length' && is_int($x217) && $x225 > $x217) {  for ($i = $x217; $i < $x225; ++$i) {  unset($_returnArray->properties[$i], $_returnArray->attributes[$i]); }}};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$x118=JS::toString($_string,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x118;unset($x119,$W119,$S119,$U119);$x120=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$_string,JS::toString(\'length\',$global),61,21,\'<image>/10_regexp.js\');$x119=&$x120[0];list(,$W119,$S119,$U119)=$x120;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=$x119;unset($x121,$W121,$S121,$U121);$x122=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'lastIndex\',$global),61,38,\'<image>/10_regexp.js\');$x121=&$x122[0];list(,$W121,$S121,$U121)=$x122;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=$x121;unset($x123,$W123,$S123,$U123);$x124=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'global\',$global),63,11,\'<image>/10_regexp.js\');$x123=&$x124[0];list(,$W123,$S123,$U123)=$x124;if(JS::toBoolean((!JS::toBoolean($x123,$global)),$global)){$x125=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x125;}$x127=JS::toPrimitive($_i,$global);$x128=JS::toPrimitive(0,$global);$x129=(is_string($x127)&&is_string($x128)?strcmp($x127,$x128)<0:(!is_nan($x130=JS::toNumber($x127,$global))&&!is_nan($x131=JS::toNumber($x128,$global))&&$x130<$x131));$x126=$x129;if(!JS::toBoolean($x126,$global)){$x132=JS::toPrimitive($_i,$global);$x133=JS::toPrimitive($_length,$global);$x134=(is_string($x133)&&is_string($x132)?strcmp($x133,$x132)<0:(!is_nan($x135=JS::toNumber($x133,$global))&&!is_nan($x136=JS::toNumber($x132,$global))&&$x135<$x136));$x126=$x134;}if(JS::toBoolean($x126,$global)){$x137=0;$x138=JS::toString(\'lastIndex\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x139=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),68,18,\'<image>/10_regexp.js\');$_TypeError=&$x139[0];list(,$WTypeError,$STypeError,$UTypeError)=$x139;$x140=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x141=$x140($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x141->class)&&$x141->class===\'Error\'&&!isset($x141->properties[\'file\'])&&!isset($x141->properties[\'line\'])&&!isset($x141->properties[\'column\'])){$x141->properties[\'file\']=\'<image>/10_regexp.js\';$x141->properties[\'line\']=68;$x141->properties[\'column\']=18;$x141->attributes[\'file\']=$x141->attributes[\'line\']=$x141->attributes[\'column\']=0;}throw new JSException($x141,68,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x142,$W142,$S142,$U142);$x143=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$leThis,JS::toString($x138,$global),68,18,\'<image>/10_regexp.js\');$x142=&$x143[0];list(,$W142,$S142,$U142)=$x143;if($U142&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x138]=$x142;$x142=&$leThis->properties[$x138];$leThis->attributes[$x138]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U142=FALSE;$W142=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x145=$leThis->properties[\'length\'];}else{$x145=0;}}if(isset($S142)){$x146=$S142->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',68,18);$x147=$x146($global,$leThis,$S142,array($x137),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x144=$x147;}else{if(!$U142){$x144=$x137;if($W142){$x142=$x137;}}else{$x144=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}else if($x138===\'length\'&&is_int($x137)&&$x145>$x137){for($i=$x137;$i<$x145;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}return NULL;}unset($x148,$W148,$S148,$U148);$x149=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'source\',$global),72,20,\'<image>/10_regexp.js\');$x148=&$x149[0];list(,$W148,$S148,$U148)=$x149;$scope->properties[\'pattern\']=JS::$undefined;$_pattern=&$scope->properties[\'pattern\'];$Upattern=FALSE;$_pattern=$x148;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';$scope->properties[\'result\']=JS::$undefined;$_result=&$scope->properties[\'result\'];$Uresult=FALSE;$_result=JS::$undefined;unset($x150,$W150,$S150,$U150);$x151=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'ignoreCase\',$global),74,10,\'<image>/10_regexp.js\');$x150=&$x151[0];list(,$W150,$S150,$U150)=$x151;if(JS::toBoolean($x150,$global)){$x152=\'i\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x153=JS::toPrimitive($_flags,$global);$x154=JS::toPrimitive($x152,$global);$_flags=(is_string($x153)||is_string($x154)?JS::toString($x153,$global).JS::toString($x154,$global):JS::toNumber($x153,$global)+JS::toNumber($x154,$global));}unset($x155,$W155,$S155,$U155);$x156=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'multiline\',$global),77,10,\'<image>/10_regexp.js\');$x155=&$x156[0];list(,$W155,$S155,$U155)=$x156;if(JS::toBoolean($x155,$global)){$x157=\'m\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x158=JS::toPrimitive($_flags,$global);$x159=JS::toPrimitive($x157,$global);$_flags=(is_string($x158)||is_string($x159)?JS::toString($x158,$global).JS::toString($x159,$global):JS::toNumber($x158,$global)+JS::toNumber($x159,$global));}$x160=preg_match(\'/\'.$_pattern.\'/u\'.$_flags,JS::toString($_string,$global),$matches,PREG_OFFSET_CAPTURE,$_i);if($Uresult){$global->properties[\'result\']=$_result;$_result=&$global->properties[\'result\'];}$_result=$x160;if(JS::toBoolean((!JS::toBoolean($_result,$global)),$global)){$x161=0;$x162=JS::toString(\'lastIndex\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x163=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),90,18,\'<image>/10_regexp.js\');$_TypeError=&$x163[0];list(,$WTypeError,$STypeError,$UTypeError)=$x163;$x164=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x165=$x164($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x165->class)&&$x165->class===\'Error\'&&!isset($x165->properties[\'file\'])&&!isset($x165->properties[\'line\'])&&!isset($x165->properties[\'column\'])){$x165->properties[\'file\']=\'<image>/10_regexp.js\';$x165->properties[\'line\']=90;$x165->properties[\'column\']=18;$x165->attributes[\'file\']=$x165->attributes[\'line\']=$x165->attributes[\'column\']=0;}throw new JSException($x165,90,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x166,$W166,$S166,$U166);$x167=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$leThis,JS::toString($x162,$global),90,18,\'<image>/10_regexp.js\');$x166=&$x167[0];list(,$W166,$S166,$U166)=$x167;if($U166&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x162]=$x166;$x166=&$leThis->properties[$x162];$leThis->attributes[$x162]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U166=FALSE;$W166=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x169=$leThis->properties[\'length\'];}else{$x169=0;}}if(isset($S166)){$x170=$S166->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',90,18);$x171=$x170($global,$leThis,$S166,array($x161),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x168=$x171;}else{if(!$U166){$x168=$x161;if($W166){$x166=$x161;}}else{$x168=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}else if($x162===\'length\'&&is_int($x161)&&$x169>$x161){for($i=$x161;$i<$x169;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}return NULL;}$x172=clone JS::$arrayTemplate;$x172->properties[\'length\']=0;$x172->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x172;foreach($matches as$I=>$match){;if($match[0]===\'\'&&$I!==0){;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x174=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),98,20,\'<image>/10_regexp.js\');$_TypeError=&$x174[0];list(,$WTypeError,$STypeError,$UTypeError)=$x174;$x175=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x176=$x175($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x176->class)&&$x176->class===\'Error\'&&!isset($x176->properties[\'file\'])&&!isset($x176->properties[\'line\'])&&!isset($x176->properties[\'column\'])){$x176->properties[\'file\']=\'<image>/10_regexp.js\';$x176->properties[\'line\']=98;$x176->properties[\'column\']=20;$x176->attributes[\'file\']=$x176->attributes[\'line\']=$x176->attributes[\'column\']=0;}throw new JSException($x176,98,20,\'<image>/10_regexp.js\');}$x173=JS::toObject($_returnArray,$global);unset($x177,$W177,$S177,$U177);$x178=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$x173,JS::toString(\'push\',$global),98,20,\'<image>/10_regexp.js\');$x177=&$x178[0];list(,$W177,$S177,$U177)=$x178;if(!(is_object($x177)&&isset($x177->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x181=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),98,20,\'<image>/10_regexp.js\');$_TypeError=&$x181[0];list(,$WTypeError,$STypeError,$UTypeError)=$x181;$x182=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x183=$x182($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x183->class)&&$x183->class===\'Error\'&&!isset($x183->properties[\'file\'])&&!isset($x183->properties[\'line\'])&&!isset($x183->properties[\'column\'])){$x183->properties[\'file\']=\'<image>/10_regexp.js\';$x183->properties[\'line\']=98;$x183->properties[\'column\']=20;$x183->attributes[\'file\']=$x183->attributes[\'line\']=$x183->attributes[\'column\']=0;}throw new JSException($x183,98,20,\'<image>/10_regexp.js\');}$x179=$x177->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',98,20);$x180=$x179($global,$x173,$x177,array(JS::$undefined),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{;if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x185=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),100,20,\'<image>/10_regexp.js\');$_TypeError=&$x185[0];list(,$WTypeError,$STypeError,$UTypeError)=$x185;$x186=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x187=$x186($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x187->class)&&$x187->class===\'Error\'&&!isset($x187->properties[\'file\'])&&!isset($x187->properties[\'line\'])&&!isset($x187->properties[\'column\'])){$x187->properties[\'file\']=\'<image>/10_regexp.js\';$x187->properties[\'line\']=100;$x187->properties[\'column\']=20;$x187->attributes[\'file\']=$x187->attributes[\'line\']=$x187->attributes[\'column\']=0;}throw new JSException($x187,100,20,\'<image>/10_regexp.js\');}$x184=JS::toObject($_returnArray,$global);unset($x188,$W188,$S188,$U188);$x189=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$x184,JS::toString(\'push\',$global),100,20,\'<image>/10_regexp.js\');$x188=&$x189[0];list(,$W188,$S188,$U188)=$x189;if(!(is_object($x188)&&isset($x188->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x192=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),100,20,\'<image>/10_regexp.js\');$_TypeError=&$x192[0];list(,$WTypeError,$STypeError,$UTypeError)=$x192;$x193=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x194=$x193($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x194->class)&&$x194->class===\'Error\'&&!isset($x194->properties[\'file\'])&&!isset($x194->properties[\'line\'])&&!isset($x194->properties[\'column\'])){$x194->properties[\'file\']=\'<image>/10_regexp.js\';$x194->properties[\'line\']=100;$x194->properties[\'column\']=20;$x194->attributes[\'file\']=$x194->attributes[\'line\']=$x194->attributes[\'column\']=0;}throw new JSException($x194,100,20,\'<image>/10_regexp.js\');}$x190=$x188->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',100,20);$x191=$x190($global,$x184,$x188,array($match[0]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}unset($x195,$W195,$S195,$U195);$x196=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'global\',$global),104,10,\'<image>/10_regexp.js\');$x195=&$x196[0];list(,$W195,$S195,$U195)=$x196;if(JS::toBoolean($x195,$global)){$x197=JS::toString(\'lastIndex\',$global);if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x198=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,18,\'<image>/10_regexp.js\');$_TypeError=&$x198[0];list(,$WTypeError,$STypeError,$UTypeError)=$x198;$x199=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x200=$x199($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x200->class)&&$x200->class===\'Error\'&&!isset($x200->properties[\'file\'])&&!isset($x200->properties[\'line\'])&&!isset($x200->properties[\'column\'])){$x200->properties[\'file\']=\'<image>/10_regexp.js\';$x200->properties[\'line\']=105;$x200->properties[\'column\']=18;$x200->attributes[\'file\']=$x200->attributes[\'line\']=$x200->attributes[\'column\']=0;}throw new JSException($x200,105,18,\'<image>/10_regexp.js\');}$leThis=JS::toObject($leThis,$global);unset($x201,$W201,$S201,$U201);$x202=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$leThis,JS::toString($x197,$global),105,18,\'<image>/10_regexp.js\');$x201=&$x202[0];list(,$W201,$S201,$U201)=$x202;if($U201&&(!isset($leThis->extensible)||$leThis->extensible)){$leThis->properties[$x197]=$x201;$x201=&$leThis->properties[$x197];$leThis->attributes[$x197]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U201=FALSE;$W201=TRUE;}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(isset($leThis->properties[\'length\'])&&$leThis->properties[\'length\']!==JS::$undefined){$x204=$leThis->properties[\'length\'];}else{$x204=0;}}if(isset($S201)){$x205=$S201->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',105,18);$x206=$x205($global,$leThis,$S201,array($matches[0][1]+strlen($matches[0][0])),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x203=$x206;}else{if(!$U201){$x203=$matches[0][1]+strlen($matches[0][0]);if($W201){$x201=$matches[0][1]+strlen($matches[0][0]);}}else{$x203=JS::$undefined;}}if(isset($leThis->class)&&$leThis->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$leThis->properties[\'length\']){$leThis->properties[\'length\']=\'lastIndex\'+1;}else if($x197===\'length\'&&is_int($matches[0][1]+strlen($matches[0][0]))&&$x204>$matches[0][1]+strlen($matches[0][0])){for($i=$matches[0][1]+strlen($matches[0][0]);$i<$x204;++$i){unset($leThis->properties[$i],$leThis->attributes[$i]);}}}}$x207=JS::toString(\'index\',$global);if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x208=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),108,20,\'<image>/10_regexp.js\');$_TypeError=&$x208[0];list(,$WTypeError,$STypeError,$UTypeError)=$x208;$x209=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x210=$x209($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x210->class)&&$x210->class===\'Error\'&&!isset($x210->properties[\'file\'])&&!isset($x210->properties[\'line\'])&&!isset($x210->properties[\'column\'])){$x210->properties[\'file\']=\'<image>/10_regexp.js\';$x210->properties[\'line\']=108;$x210->properties[\'column\']=20;$x210->attributes[\'file\']=$x210->attributes[\'line\']=$x210->attributes[\'column\']=0;}throw new JSException($x210,108,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x211,$W211,$S211,$U211);$x212=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_returnArray,JS::toString($x207,$global),108,20,\'<image>/10_regexp.js\');$x211=&$x212[0];list(,$W211,$S211,$U211)=$x212;if($U211&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[$x207]=$x211;$x211=&$_returnArray->properties[$x207];$_returnArray->attributes[$x207]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U211=FALSE;$W211=TRUE;}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'){if(isset($_returnArray->properties[\'length\'])&&$_returnArray->properties[\'length\']!==JS::$undefined){$x214=$_returnArray->properties[\'length\'];}else{$x214=0;}}if(isset($S211)){$x215=$S211->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',108,20);$x216=$x215($global,$_returnArray,$S211,array($matches[0][1]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x213=$x216;}else{if(!$U211){$x213=$matches[0][1];if($W211){$x211=$matches[0][1];}}else{$x213=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'){if(is_int(\'index\')&&\'index\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'index\'+1;}else if($x207===\'length\'&&is_int($matches[0][1])&&$x214>$matches[0][1]){for($i=$matches[0][1];$i<$x214;++$i){unset($_returnArray->properties[$i],$_returnArray->attributes[$i]);}}}$x217=JS::toString($_string,$global);$x218=JS::toString(\'input\',$global);if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x219=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),109,20,\'<image>/10_regexp.js\');$_TypeError=&$x219[0];list(,$WTypeError,$STypeError,$UTypeError)=$x219;$x220=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x221=$x220($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x221->class)&&$x221->class===\'Error\'&&!isset($x221->properties[\'file\'])&&!isset($x221->properties[\'line\'])&&!isset($x221->properties[\'column\'])){$x221->properties[\'file\']=\'<image>/10_regexp.js\';$x221->properties[\'line\']=109;$x221->properties[\'column\']=20;$x221->attributes[\'file\']=$x221->attributes[\'line\']=$x221->attributes[\'column\']=0;}throw new JSException($x221,109,20,\'<image>/10_regexp.js\');}$_returnArray=JS::toObject($_returnArray,$global);unset($x222,$W222,$S222,$U222);$x223=_288ff711bd10592118ad8a0bec5c87f0_3($global,$scope,$_returnArray,JS::toString($x218,$global),109,20,\'<image>/10_regexp.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;if($U222&&(!isset($_returnArray->extensible)||$_returnArray->extensible)){$_returnArray->properties[$x218]=$x222;$x222=&$_returnArray->properties[$x218];$_returnArray->attributes[$x218]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U222=FALSE;$W222=TRUE;}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'){if(isset($_returnArray->properties[\'length\'])&&$_returnArray->properties[\'length\']!==JS::$undefined){$x225=$_returnArray->properties[\'length\'];}else{$x225=0;}}if(isset($S222)){$x226=$S222->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',109,20);$x227=$x226($global,$_returnArray,$S222,array($x217),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x224=$x227;}else{if(!$U222){$x224=$x217;if($W222){$x222=$x217;}}else{$x224=JS::$undefined;}}if(isset($_returnArray->class)&&$_returnArray->class===\'Array\'){if(is_int(\'input\')&&\'input\'>=$_returnArray->properties[\'length\']){$_returnArray->properties[\'length\']=\'input\'+1;}else if($x218===\'length\'&&is_int($x217)&&$x225>$x217){for($i=$x217;$i<$x225;++$i){unset($_returnArray->properties[$i],$_returnArray->attributes[$i]);}}}return$_returnArray;return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x242 =& $scope->properties['arguments'];
$x242->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x242->properties[$i] = $args[$i];
$x242->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x245 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x245[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x245;
$x246 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x247 = $x246($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x247->class) && $x247->class === 'Error' && !isset($x247->properties['file']) && !isset($x247->properties['line']) && !isset($x247->properties['column'])) {$x247->properties['file'] = '<image>/10_regexp.js';$x247->properties['line'] = 115;$x247->properties['column'] = 18;$x247->attributes['file'] = $x247->attributes['line'] = $x247->attributes['column'] = 0; }
throw new JSException($x247, 115, 18, '<image>/10_regexp.js');
}
$x244 = JS::toObject($leThis, $global);
unset($x248, $W248, $S248, $U248);
$x249 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $x244, JS::toString('exec', $global), 115, 18, '<image>/10_regexp.js');
$x248 =& $x249[0]; list(,$W248,$S248,$U248) = $x249;
if (!(is_object($x248) && isset($x248->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x252 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 115, 18, '<image>/10_regexp.js');
$_TypeError =& $x252[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x252;
$x253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x254 = $x253($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x254->class) && $x254->class === 'Error' && !isset($x254->properties['file']) && !isset($x254->properties['line']) && !isset($x254->properties['column'])) {$x254->properties['file'] = '<image>/10_regexp.js';$x254->properties['line'] = 115;$x254->properties['column'] = 18;$x254->attributes['file'] = $x254->attributes['line'] = $x254->attributes['column'] = 0; }
throw new JSException($x254, 115, 18, '<image>/10_regexp.js');
}
$x250 = $x248->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 115, 18);
$x251 = $x250($global, $x244, $x248, array($_string), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x243 = !(((gettype($x251) === gettype(NULL) && $x251 === NULL))|| (((is_float($x251) || is_int($x251)) && (is_float(NULL) || is_int(NULL))) && $x251 == NULL));
return $x243;
;
return JS::$undefined;
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x242=&$scope->properties[\'arguments\'];$x242->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x242->properties[$i]=$args[$i];$x242->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x245=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,18,\'<image>/10_regexp.js\');$_TypeError=&$x245[0];list(,$WTypeError,$STypeError,$UTypeError)=$x245;$x246=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x247=$x246($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x247->class)&&$x247->class===\'Error\'&&!isset($x247->properties[\'file\'])&&!isset($x247->properties[\'line\'])&&!isset($x247->properties[\'column\'])){$x247->properties[\'file\']=\'<image>/10_regexp.js\';$x247->properties[\'line\']=115;$x247->properties[\'column\']=18;$x247->attributes[\'file\']=$x247->attributes[\'line\']=$x247->attributes[\'column\']=0;}throw new JSException($x247,115,18,\'<image>/10_regexp.js\');}$x244=JS::toObject($leThis,$global);unset($x248,$W248,$S248,$U248);$x249=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$x244,JS::toString(\'exec\',$global),115,18,\'<image>/10_regexp.js\');$x248=&$x249[0];list(,$W248,$S248,$U248)=$x249;if(!(is_object($x248)&&isset($x248->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x252=_288ff711bd10592118ad8a0bec5c87f0_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,18,\'<image>/10_regexp.js\');$_TypeError=&$x252[0];list(,$WTypeError,$STypeError,$UTypeError)=$x252;$x253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x254=$x253($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x254->class)&&$x254->class===\'Error\'&&!isset($x254->properties[\'file\'])&&!isset($x254->properties[\'line\'])&&!isset($x254->properties[\'column\'])){$x254->properties[\'file\']=\'<image>/10_regexp.js\';$x254->properties[\'line\']=115;$x254->properties[\'column\']=18;$x254->attributes[\'file\']=$x254->attributes[\'line\']=$x254->attributes[\'column\']=0;}throw new JSException($x254,115,18,\'<image>/10_regexp.js\');}$x250=$x248->call;$global->trace[++$global->trace_sp]=array(\'<image>/10_regexp.js\',115,18);$x251=$x250($global,$x244,$x248,array($_string),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x243=!(((gettype($x251)===gettype(NULL)&&$x251===NULL))||(((is_float($x251)||is_int($x251))&&(is_float(NULL)||is_int(NULL)))&&$x251==NULL));return$x243;return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x269 =& $scope->properties['arguments'];
$x269->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x269->properties[$i] = $args[$i];
$x269->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['flags'] = JS::$undefined; $_flags =& $scope->properties['flags'];
$Uflags = FALSE;
$_flags = '';
unset($x270, $W270, $S270, $U270);
$x271 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('global', $global), 121, 10, '<image>/10_regexp.js');
$x270 =& $x271[0]; list(,$W270,$S270,$U270) = $x271;
if (JS::toBoolean($x270, $global)) {
$x272 = 'g';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x273 = JS::toPrimitive($_flags, $global);
$x274 = JS::toPrimitive($x272, $global);
$_flags = (is_string($x273) || is_string($x274) ? JS::toString($x273, $global) . JS::toString($x274, $global) : JS::toNumber($x273, $global) + JS::toNumber($x274, $global));;
};
unset($x275, $W275, $S275, $U275);
$x276 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('ignoreCase', $global), 124, 10, '<image>/10_regexp.js');
$x275 =& $x276[0]; list(,$W275,$S275,$U275) = $x276;
if (JS::toBoolean($x275, $global)) {
$x277 = 'i';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x278 = JS::toPrimitive($_flags, $global);
$x279 = JS::toPrimitive($x277, $global);
$_flags = (is_string($x278) || is_string($x279) ? JS::toString($x278, $global) . JS::toString($x279, $global) : JS::toNumber($x278, $global) + JS::toNumber($x279, $global));;
};
unset($x280, $W280, $S280, $U280);
$x281 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('multiline', $global), 127, 10, '<image>/10_regexp.js');
$x280 =& $x281[0]; list(,$W280,$S280,$U280) = $x281;
if (JS::toBoolean($x280, $global)) {
$x282 = 'm';
if ($Uflags) {$global->properties['flags'] = $_flags; $_flags =& $global->properties['flags']; }
$x283 = JS::toPrimitive($_flags, $global);
$x284 = JS::toPrimitive($x282, $global);
$_flags = (is_string($x283) || is_string($x284) ? JS::toString($x283, $global) . JS::toString($x284, $global) : JS::toNumber($x283, $global) + JS::toNumber($x284, $global));;
};
unset($x291, $W291, $S291, $U291);
$x292 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $leThis, JS::toString('source', $global), 130, 19, '<image>/10_regexp.js');
$x291 =& $x292[0]; list(,$W291,$S291,$U291) = $x292;
$x289 = JS::toPrimitive('/', $global);
$x290 = JS::toPrimitive($x291, $global);
$x287 = JS::toPrimitive((is_string($x289) || is_string($x290) ? JS::toString($x289, $global) . JS::toString($x290, $global) : JS::toNumber($x289, $global) + JS::toNumber($x290, $global)), $global);
$x288 = JS::toPrimitive('/', $global);
$x285 = JS::toPrimitive((is_string($x287) || is_string($x288) ? JS::toString($x287, $global) . JS::toString($x288, $global) : JS::toNumber($x287, $global) + JS::toNumber($x288, $global)), $global);
$x286 = JS::toPrimitive($_flags, $global);
return (is_string($x285) || is_string($x286) ? JS::toString($x285, $global) . JS::toString($x286, $global) : JS::toNumber($x285, $global) + JS::toNumber($x286, $global));
;
return JS::$undefined;
}
echo 'function _288ff711bd10592118ad8a0bec5c87f0_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x269=&$scope->properties[\'arguments\'];$x269->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x269->properties[$i]=$args[$i];$x269->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'flags\']=JS::$undefined;$_flags=&$scope->properties[\'flags\'];$Uflags=FALSE;$_flags=\'\';unset($x270,$W270,$S270,$U270);$x271=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'global\',$global),121,10,\'<image>/10_regexp.js\');$x270=&$x271[0];list(,$W270,$S270,$U270)=$x271;if(JS::toBoolean($x270,$global)){$x272=\'g\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x273=JS::toPrimitive($_flags,$global);$x274=JS::toPrimitive($x272,$global);$_flags=(is_string($x273)||is_string($x274)?JS::toString($x273,$global).JS::toString($x274,$global):JS::toNumber($x273,$global)+JS::toNumber($x274,$global));}unset($x275,$W275,$S275,$U275);$x276=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'ignoreCase\',$global),124,10,\'<image>/10_regexp.js\');$x275=&$x276[0];list(,$W275,$S275,$U275)=$x276;if(JS::toBoolean($x275,$global)){$x277=\'i\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x278=JS::toPrimitive($_flags,$global);$x279=JS::toPrimitive($x277,$global);$_flags=(is_string($x278)||is_string($x279)?JS::toString($x278,$global).JS::toString($x279,$global):JS::toNumber($x278,$global)+JS::toNumber($x279,$global));}unset($x280,$W280,$S280,$U280);$x281=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'multiline\',$global),127,10,\'<image>/10_regexp.js\');$x280=&$x281[0];list(,$W280,$S280,$U280)=$x281;if(JS::toBoolean($x280,$global)){$x282=\'m\';if($Uflags){$global->properties[\'flags\']=$_flags;$_flags=&$global->properties[\'flags\'];}$x283=JS::toPrimitive($_flags,$global);$x284=JS::toPrimitive($x282,$global);$_flags=(is_string($x283)||is_string($x284)?JS::toString($x283,$global).JS::toString($x284,$global):JS::toNumber($x283,$global)+JS::toNumber($x284,$global));}unset($x291,$W291,$S291,$U291);$x292=_288ff711bd10592118ad8a0bec5c87f0_4($global,$scope,$leThis,JS::toString(\'source\',$global),130,19,\'<image>/10_regexp.js\');$x291=&$x292[0];list(,$W291,$S291,$U291)=$x292;$x289=JS::toPrimitive(\'/\',$global);$x290=JS::toPrimitive($x291,$global);$x287=JS::toPrimitive((is_string($x289)||is_string($x290)?JS::toString($x289,$global).JS::toString($x290,$global):JS::toNumber($x289,$global)+JS::toNumber($x290,$global)),$global);$x288=JS::toPrimitive(\'/\',$global);$x285=JS::toPrimitive((is_string($x287)||is_string($x288)?JS::toString($x287,$global).JS::toString($x288,$global):JS::toNumber($x287,$global)+JS::toNumber($x288,$global)),$global);$x286=JS::toPrimitive($_flags,$global);return(is_string($x285)||is_string($x286)?JS::toString($x285,$global).JS::toString($x286,$global):JS::toNumber($x285,$global)+JS::toNumber($x286,$global));return JS::$undefined;}', "\n";
function _288ff711bd10592118ad8a0bec5c87f0_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/10_regexp.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/10_regexp.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_RegExp;
$x88 = clone JS::$functionTemplate; $x88->call = '_288ff711bd10592118ad8a0bec5c87f0_1'; $x88->parameters = array (
  0 => 'pattern',
  1 => 'flags',
); $x88->name = 'RegExp'; $x88->scope = $scope; $x88->properties['prototype'] = clone JS::$objectTemplate; $x88->attributes['prototype'] = JS::WRITABLE; $x88->properties['prototype']->properties['constructor'] = $x88; $x88->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x88->properties['length'] = 2; $x88->attributes['length'] = 0;
$scope->properties['RegExp'] = JS::$undefined; $_RegExp =& $scope->properties['RegExp'];
$URegExp = FALSE;
$_RegExp = $x88;
$x89 = clone JS::$objectTemplate;
$x89->properties['source'] = '';
$x89->attributes['source'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x89->properties['global'] = false;
$x89->attributes['global'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x89->properties['ignoreCase'] = false;
$x89->attributes['ignoreCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x89->properties['multiline'] = false;
$x89->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x89->properties['lastIndex'] = 0;
$x89->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x90 = JS::toString('prototype', $global);
if ($_RegExp === JS::$undefined || $_RegExp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 47, 18, '<image>/10_regexp.js');
$_TypeError =& $x91[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x91;
$x92 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x93 = $x92($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/10_regexp.js';$x93->properties['line'] = 47;$x93->properties['column'] = 18;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 47, 18, '<image>/10_regexp.js');
}
$_RegExp = JS::toObject($_RegExp, $global);
unset($x94, $W94, $S94, $U94);
$x95 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $_RegExp, JS::toString($x90, $global), 47, 18, '<image>/10_regexp.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if ($U94 && (!isset($_RegExp->extensible) || $_RegExp->extensible)) {$_RegExp->properties[$x90] = $x94; $x94 =& $_RegExp->properties[$x90]; $_RegExp->attributes[$x90] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U94 = FALSE; $W94 = TRUE; }
if (isset($_RegExp->class) && $_RegExp->class === 'Array') {  if (isset($_RegExp->properties['length']) && $_RegExp->properties['length'] !== JS::$undefined) { $x97 = $_RegExp->properties['length']; }  else { $x97 = 0; } }
if (isset($S94)) {
$x98 = $S94->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 47, 18);
$x99 = $x98($global, $_RegExp, $S94, array($x89), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x96 = $x99;
} else {
if (!$U94) {$x96 = $x89;if ($W94) { $x94 = $x89; }  }
else { $x96 = JS::$undefined; }
}
if (isset($_RegExp->class) && $_RegExp->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_RegExp->properties['length']) { $_RegExp->properties['length'] = 'prototype' + 1; }else if ($x90 === 'length' && is_int($x89) && $x97 > $x89) {  for ($i = $x89; $i < $x97; ++$i) {  unset($_RegExp->properties[$i], $_RegExp->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x100 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('Object', $global), 54, 51, '<image>/10_regexp.js');
$_Object =& $x100[0]; list(,$WObject,$SObject,$UObject) = $x100;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x101 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 54, 51, '<image>/10_regexp.js');
$_ReferenceError =& $x101[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x101;
$x102 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 54, 51);
$x103 = $x102($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x103->class) && $x103->class === 'Error' && !isset($x103->properties['file']) && !isset($x103->properties['line']) && !isset($x103->properties['column'])) {$x103->properties['file'] = '<image>/10_regexp.js';$x103->properties['line'] = 54;$x103->properties['column'] = 51;$x103->attributes['file'] = $x103->attributes['line'] = $x103->attributes['column'] = 0; }
throw new JSException($x103, 54, 51, '<image>/10_regexp.js');
}
$_RegExp->properties['prototype']->prototype =$_Object->properties['prototype'];
$_RegExp->properties['prototype']->class = 'RegExp';
$_RegExp->properties['prototype']->extensible = TRUE;
unset($x104, $W104, $S104, $U104);
$x105 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 57, 7, '<image>/10_regexp.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
$x106 = JS::toString('constructor', $global);
if ($x104 === JS::$undefined || $x104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 57, 30, '<image>/10_regexp.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x109 = $x108($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/10_regexp.js';$x109->properties['line'] = 57;$x109->properties['column'] = 30;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 57, 30, '<image>/10_regexp.js');
}
$x104 = JS::toObject($x104, $global);
unset($x110, $W110, $S110, $U110);
$x111 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x104, JS::toString($x106, $global), 57, 30, '<image>/10_regexp.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
if ($U110 && (!isset($x104->extensible) || $x104->extensible)) {$x104->properties[$x106] = $x110; $x110 =& $x104->properties[$x106]; $x104->attributes[$x106] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U110 = FALSE; $W110 = TRUE; }
if (isset($x104->class) && $x104->class === 'Array') {  if (isset($x104->properties['length']) && $x104->properties['length'] !== JS::$undefined) { $x113 = $x104->properties['length']; }  else { $x113 = 0; } }
if (isset($S110)) {
$x114 = $S110->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 57, 30);
$x115 = $x114($global, $x104, $S110, array($_RegExp), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x112 = $x115;
} else {
if (!$U110) {$x112 = $_RegExp;if ($W110) { $x110 = $_RegExp; }  }
else { $x112 = JS::$undefined; }
}
if (isset($x104->class) && $x104->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x104->properties['length']) { $x104->properties['length'] = 'constructor' + 1; }else if ($x106 === 'length' && is_int($_RegExp) && $x113 > $_RegExp) {  for ($i = $_RegExp; $i < $x113; ++$i) {  unset($x104->properties[$i], $x104->attributes[$i]); }}};
$x228 = clone JS::$functionTemplate; $x228->call = '_288ff711bd10592118ad8a0bec5c87f0_5'; $x228->parameters = array (
  0 => 'string',
); $x228->scope = $scope; $x228->properties['prototype'] = clone JS::$objectTemplate; $x228->attributes['prototype'] = JS::WRITABLE; $x228->properties['prototype']->properties['constructor'] = $x228; $x228->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x228->properties['length'] = 1; $x228->attributes['length'] = 0;
unset($x229, $W229, $S229, $U229);
$x230 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 59, 7, '<image>/10_regexp.js');
$x229 =& $x230[0]; list(,$W229,$S229,$U229) = $x230;
$x231 = JS::toString('exec', $global);
if ($x229 === JS::$undefined || $x229 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x232 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 59, 23, '<image>/10_regexp.js');
$_TypeError =& $x232[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x232;
$x233 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x234 = $x233($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x234->class) && $x234->class === 'Error' && !isset($x234->properties['file']) && !isset($x234->properties['line']) && !isset($x234->properties['column'])) {$x234->properties['file'] = '<image>/10_regexp.js';$x234->properties['line'] = 59;$x234->properties['column'] = 23;$x234->attributes['file'] = $x234->attributes['line'] = $x234->attributes['column'] = 0; }
throw new JSException($x234, 59, 23, '<image>/10_regexp.js');
}
$x229 = JS::toObject($x229, $global);
unset($x235, $W235, $S235, $U235);
$x236 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x229, JS::toString($x231, $global), 59, 23, '<image>/10_regexp.js');
$x235 =& $x236[0]; list(,$W235,$S235,$U235) = $x236;
if ($U235 && (!isset($x229->extensible) || $x229->extensible)) {$x229->properties[$x231] = $x235; $x235 =& $x229->properties[$x231]; $x229->attributes[$x231] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U235 = FALSE; $W235 = TRUE; }
if (isset($x229->class) && $x229->class === 'Array') {  if (isset($x229->properties['length']) && $x229->properties['length'] !== JS::$undefined) { $x238 = $x229->properties['length']; }  else { $x238 = 0; } }
if (isset($S235)) {
$x239 = $S235->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 59, 23);
$x240 = $x239($global, $x229, $S235, array($x228), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x237 = $x240;
} else {
if (!$U235) {$x237 = $x228;if ($W235) { $x235 = $x228; }  }
else { $x237 = JS::$undefined; }
}
if (isset($x229->class) && $x229->class === 'Array') {if (is_int('exec') && 'exec' >= $x229->properties['length']) { $x229->properties['length'] = 'exec' + 1; }else if ($x231 === 'length' && is_int($x228) && $x238 > $x228) {  for ($i = $x228; $i < $x238; ++$i) {  unset($x229->properties[$i], $x229->attributes[$i]); }}};
$x255 = clone JS::$functionTemplate; $x255->call = '_288ff711bd10592118ad8a0bec5c87f0_6'; $x255->parameters = array (
  0 => 'string',
); $x255->scope = $scope; $x255->properties['prototype'] = clone JS::$objectTemplate; $x255->attributes['prototype'] = JS::WRITABLE; $x255->properties['prototype']->properties['constructor'] = $x255; $x255->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x255->properties['length'] = 1; $x255->attributes['length'] = 0;
unset($x256, $W256, $S256, $U256);
$x257 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 114, 7, '<image>/10_regexp.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
$x258 = JS::toString('test', $global);
if ($x256 === JS::$undefined || $x256 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x259 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 114, 23, '<image>/10_regexp.js');
$_TypeError =& $x259[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x259;
$x260 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x261 = $x260($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x261->class) && $x261->class === 'Error' && !isset($x261->properties['file']) && !isset($x261->properties['line']) && !isset($x261->properties['column'])) {$x261->properties['file'] = '<image>/10_regexp.js';$x261->properties['line'] = 114;$x261->properties['column'] = 23;$x261->attributes['file'] = $x261->attributes['line'] = $x261->attributes['column'] = 0; }
throw new JSException($x261, 114, 23, '<image>/10_regexp.js');
}
$x256 = JS::toObject($x256, $global);
unset($x262, $W262, $S262, $U262);
$x263 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x256, JS::toString($x258, $global), 114, 23, '<image>/10_regexp.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
if ($U262 && (!isset($x256->extensible) || $x256->extensible)) {$x256->properties[$x258] = $x262; $x262 =& $x256->properties[$x258]; $x256->attributes[$x258] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U262 = FALSE; $W262 = TRUE; }
if (isset($x256->class) && $x256->class === 'Array') {  if (isset($x256->properties['length']) && $x256->properties['length'] !== JS::$undefined) { $x265 = $x256->properties['length']; }  else { $x265 = 0; } }
if (isset($S262)) {
$x266 = $S262->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 114, 23);
$x267 = $x266($global, $x256, $S262, array($x255), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x264 = $x267;
} else {
if (!$U262) {$x264 = $x255;if ($W262) { $x262 = $x255; }  }
else { $x264 = JS::$undefined; }
}
if (isset($x256->class) && $x256->class === 'Array') {if (is_int('test') && 'test' >= $x256->properties['length']) { $x256->properties['length'] = 'test' + 1; }else if ($x258 === 'length' && is_int($x255) && $x265 > $x255) {  for ($i = $x255; $i < $x265; ++$i) {  unset($x256->properties[$i], $x256->attributes[$i]); }}};
$x293 = clone JS::$functionTemplate; $x293->call = '_288ff711bd10592118ad8a0bec5c87f0_7'; $x293->parameters = array (
); $x293->scope = $scope; $x293->properties['prototype'] = clone JS::$objectTemplate; $x293->attributes['prototype'] = JS::WRITABLE; $x293->properties['prototype']->properties['constructor'] = $x293; $x293->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x293->properties['length'] = 0; $x293->attributes['length'] = 0;
unset($x294, $W294, $S294, $U294);
$x295 = _288ff711bd10592118ad8a0bec5c87f0_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 118, 7, '<image>/10_regexp.js');
$x294 =& $x295[0]; list(,$W294,$S294,$U294) = $x295;
$x296 = JS::toString('toString', $global);
if ($x294 === JS::$undefined || $x294 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x297 = _288ff711bd10592118ad8a0bec5c87f0_2($global, $scope, $scope, JS::toString('TypeError', $global), 118, 27, '<image>/10_regexp.js');
$_TypeError =& $x297[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x297;
$x298 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x299 = $x298($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x299->class) && $x299->class === 'Error' && !isset($x299->properties['file']) && !isset($x299->properties['line']) && !isset($x299->properties['column'])) {$x299->properties['file'] = '<image>/10_regexp.js';$x299->properties['line'] = 118;$x299->properties['column'] = 27;$x299->attributes['file'] = $x299->attributes['line'] = $x299->attributes['column'] = 0; }
throw new JSException($x299, 118, 27, '<image>/10_regexp.js');
}
$x294 = JS::toObject($x294, $global);
unset($x300, $W300, $S300, $U300);
$x301 = _288ff711bd10592118ad8a0bec5c87f0_3($global, $scope, $x294, JS::toString($x296, $global), 118, 27, '<image>/10_regexp.js');
$x300 =& $x301[0]; list(,$W300,$S300,$U300) = $x301;
if ($U300 && (!isset($x294->extensible) || $x294->extensible)) {$x294->properties[$x296] = $x300; $x300 =& $x294->properties[$x296]; $x294->attributes[$x296] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U300 = FALSE; $W300 = TRUE; }
if (isset($x294->class) && $x294->class === 'Array') {  if (isset($x294->properties['length']) && $x294->properties['length'] !== JS::$undefined) { $x303 = $x294->properties['length']; }  else { $x303 = 0; } }
if (isset($S300)) {
$x304 = $S300->call;
$global->trace[++$global->trace_sp] = array('<image>/10_regexp.js', 118, 27);
$x305 = $x304($global, $x294, $S300, array($x293), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x302 = $x305;
} else {
if (!$U300) {$x302 = $x293;if ($W300) { $x300 = $x293; }  }
else { $x302 = JS::$undefined; }
}
if (isset($x294->class) && $x294->class === 'Array') {if (is_int('toString') && 'toString' >= $x294->properties['length']) { $x294->properties['length'] = 'toString' + 1; }else if ($x296 === 'length' && is_int($x293) && $x303 > $x293) {  for ($i = $x293; $i < $x303; ++$i) {  unset($x294->properties[$i], $x294->attributes[$i]); }}};
;
return JS::$undefined;
}
