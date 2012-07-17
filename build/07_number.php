function _ff9cabf943c61b87166e28285dc0448b_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['value'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_value =& $scope->properties['value'];
$Uvalue = FALSE;
$scope->properties['Number'] = $fn;
$_Number =& $scope->properties['Number'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = (((gettype($leThis) === gettype($global) && $leThis === $global))|| (((is_float($leThis) || is_int($leThis)) && (is_float($global) || is_int($global))) && $leThis == $global));
if (JS::toBoolean($x2, $global)) {

return JS::toNumber($_value, $global);;
};
$x3 = clone JS::$objectTemplate;
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = $x3;
$_n->prototype =$_Number->properties['prototype'];
$_n->class = 'Number';
$_n->value = JS::toNumber($_value, $global);
$_n->extensible = TRUE;
return $_n;
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'Number\']=$fn;$_Number=&$scope->properties[\'Number\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){return JS::toNumber($_value,$global);}$x3=clone JS::$objectTemplate;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=$x3;$_n->prototype=$_Number->properties[\'prototype\'];$_n->class=\'Number\';$_n->value=JS::toNumber($_value,$global);$_n->extensible=TRUE;return$_n;return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x5=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x6=$x5($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x6;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x11 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
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
echo 'function _ff9cabf943c61b87166e28285dc0448b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x13=$x12($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'){$x13->properties[\'file\']=$file;$x13->properties[\'line\']=$line;$x13->properties[\'column\']=$column;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,$line,$column,$file);}$W10=$S10=$U10=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x10=&$lookup->properties[$id];$W10=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S10=$lookup->setters[$id];}else{$x10=JS::$undefined;$U10=TRUE;}return array(&$x10,$W10,$S10,$U10);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x72 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x72[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x72;
$x73 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x74 = $x73($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x74->class) && $x74->class === 'Error') {$x74->properties['file'] = $file;$x74->properties['line'] = $line;$x74->properties['column'] = $column;$x74->attributes['file'] = $x74->attributes['line'] = $x74->attributes['column'] = 0; }
throw new JSException($x74, $line, $column, $file);
}
$W71 = $S71 = $U71 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x71 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x75 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x76 = $x75($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x71 = $x76; }
else { $x71 = JS::$undefined; $U71 = TRUE; }
return array(&$x71, $W71, $S71, $U71);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x72=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x72[0];list(,$WTypeError,$STypeError,$UTypeError)=$x72;$x73=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x74=$x73($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x74->class)&&$x74->class===\'Error\'){$x74->properties[\'file\']=$file;$x74->properties[\'line\']=$line;$x74->properties[\'column\']=$column;$x74->attributes[\'file\']=$x74->attributes[\'line\']=$x74->attributes[\'column\']=0;}throw new JSException($x74,$line,$column,$file);}$W71=$S71=$U71=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x71=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x75=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x76=$x75($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x71=$x76;}else{$x71=JS::$undefined;$U71=TRUE;}return array(&$x71,$W71,$S71,$U71);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x87 =& $scope->properties['arguments'];
$x87->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x87->properties[$i] = $args[$i];
$x87->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['radix'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_radix =& $scope->properties['radix'];
$Uradix = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(isset($leThis->class) && $leThis->class !== 'Number', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x90 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 30, 13, '<image>/07_number.js');
$_TypeError =& $x90[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x90;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x91 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 30, 13, '<image>/07_number.js');
$_ReferenceError =& $x91[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x91;
$x92 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 13);
$x93 = $x92($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error') {$x93->properties['file'] = '<image>/07_number.js';$x93->properties['line'] = 30;$x93->properties['column'] = 13;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 30, 13, '<image>/07_number.js');
}
$x88 = clone JS::$objectTemplate;
unset($x94, $W94, $S94, $U94);
$x95 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_TypeError, (string) 'prototype', 30, 9, '<image>/07_number.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
$x89 = $x94;
$x88->prototype = $x89;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x98 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x99 = $x98($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x99->class) && $x99->class === 'Error') {$x99->properties['file'] = '<image>/07_number.js';$x99->properties['line'] = 30;$x99->properties['column'] = 9;$x99->attributes['file'] = $x99->attributes['line'] = $x99->attributes['column'] = 0; }
throw new JSException($x99, 30, 9, '<image>/07_number.js');
}
$x96 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x97 = $x96($global, $x88, $_TypeError, array('Number.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x89 = $x97;
if (is_object($x89) && $x89 !== JS::$undefined) { $x88 = $x89; }
if (isset($x88->class) && $x88->class === 'Error') {$x88->properties['file'] = '<image>/07_number.js';$x88->properties['line'] = 30;$x88->properties['column'] = 3;$x88->attributes['file'] = $x88->attributes['line'] = $x88->attributes['column'] = 0; }
throw new JSException($x88, 30, 3, '<image>/07_number.js');;
};
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x100 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 33, 6, '<image>/07_number.js');
$_isNaN =& $x100[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x100;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x101 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 33, 6, '<image>/07_number.js');
$_ReferenceError =& $x101[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x101;
$x102 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 6);
$x103 = $x102($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x103->class) && $x103->class === 'Error') {$x103->properties['file'] = '<image>/07_number.js';$x103->properties['line'] = 33;$x103->properties['column'] = 6;$x103->attributes['file'] = $x103->attributes['line'] = $x103->attributes['column'] = 0; }
throw new JSException($x103, 33, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x106 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 33, 11, '<image>/07_number.js');
$_TypeError =& $x106[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x106;
$x107 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x108 = $x107($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x108->class) && $x108->class === 'Error') {$x108->properties['file'] = '<image>/07_number.js';$x108->properties['line'] = 33;$x108->properties['column'] = 11;$x108->attributes['file'] = $x108->attributes['line'] = $x108->attributes['column'] = 0; }
throw new JSException($x108, 33, 11, '<image>/07_number.js');
}
$x104 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x105 = $x104($global, $global, $_isNaN, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x105, $global)) {

return 'NaN';;
};
if (JS::toBoolean($leThis->value === INF, $global)) {

return 'Infinity';;
};
if (JS::toBoolean($leThis->value === -INF, $global)) {

return '-Infinity';;
};
if (JS::toBoolean(is_float($leThis->value), $global)) {

return (string) $leThis->value;;
};
$x109 = $_radix;
if (!JS::toBoolean($x109, $global)) {
$x109 = 10; }
if ($Uradix) {$global->properties['radix'] = $_radix; $_radix =& $global->properties['radix']; }
$_radix = $x109;
$x111 = JS::toPrimitive($_radix, $global);
$x112 = JS::toPrimitive(2, $global);
$x113 = (is_string($x111) && is_string($x112) ? strcmp($x111, $x112) < 0 : (!is_nan($x114 = JS::toNumber($x111, $global)) && !is_nan($x115 = JS::toNumber($x112, $global)) && $x114 < $x115));
$x110 = $x113;
if (!JS::toBoolean($x110, $global)) {
$x116 = JS::toPrimitive($_radix, $global);
$x117 = JS::toPrimitive(36, $global);
$x118 = (is_string($x117) && is_string($x116) ? strcmp($x117, $x116) < 0 : (!is_nan($x119 = JS::toNumber($x117, $global)) && !is_nan($x120 = JS::toNumber($x116, $global)) && $x119 < $x120));
$x110 = $x118; }
if (JS::toBoolean($x110, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x123 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 52, 13, '<image>/07_number.js');
$_RangeError =& $x123[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x123;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x124 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 52, 13, '<image>/07_number.js');
$_ReferenceError =& $x124[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x124;
$x125 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 13);
$x126 = $x125($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x126->class) && $x126->class === 'Error') {$x126->properties['file'] = '<image>/07_number.js';$x126->properties['line'] = 52;$x126->properties['column'] = 13;$x126->attributes['file'] = $x126->attributes['line'] = $x126->attributes['column'] = 0; }
throw new JSException($x126, 52, 13, '<image>/07_number.js');
}
$x121 = clone JS::$objectTemplate;
unset($x127, $W127, $S127, $U127);
$x128 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 52, 9, '<image>/07_number.js');
$x127 =& $x128[0]; list(,$W127,$S127,$U127) = $x128;
$x122 = $x127;
$x121->prototype = $x122;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x131 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 52, 9, '<image>/07_number.js');
$_TypeError =& $x131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x131;
$x132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x133 = $x132($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x133->class) && $x133->class === 'Error') {$x133->properties['file'] = '<image>/07_number.js';$x133->properties['line'] = 52;$x133->properties['column'] = 9;$x133->attributes['file'] = $x133->attributes['line'] = $x133->attributes['column'] = 0; }
throw new JSException($x133, 52, 9, '<image>/07_number.js');
}
$x129 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x130 = $x129($global, $x121, $_RangeError, array('Number.prototype.toString(): radix is not between 2 and 36.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x122 = $x130;
if (is_object($x122) && $x122 !== JS::$undefined) { $x121 = $x122; }
if (isset($x121->class) && $x121->class === 'Error') {$x121->properties['file'] = '<image>/07_number.js';$x121->properties['line'] = 52;$x121->properties['column'] = 3;$x121->attributes['file'] = $x121->attributes['line'] = $x121->attributes['column'] = 0; }
throw new JSException($x121, 52, 3, '<image>/07_number.js');;
};
return base_convert((string) $leThis->value, 10,$_radix);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x87=&$scope->properties[\'arguments\'];$x87->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x87->properties[$i]=$args[$i];$x87->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'radix\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_radix=&$scope->properties[\'radix\'];$Uradix=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(isset($leThis->class)&&$leThis->class!==\'Number\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x90=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',30,13,\'<image>/07_number.js\');$_TypeError=&$x90[0];list(,$WTypeError,$STypeError,$UTypeError)=$x90;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x91=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',30,13,\'<image>/07_number.js\');$_ReferenceError=&$x91[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x91;$x92=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,13);$x93=$x92($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x93->class)&&$x93->class===\'Error\'){$x93->properties[\'file\']=\'<image>/07_number.js\';$x93->properties[\'line\']=30;$x93->properties[\'column\']=13;$x93->attributes[\'file\']=$x93->attributes[\'line\']=$x93->attributes[\'column\']=0;}throw new JSException($x93,30,13,\'<image>/07_number.js\');}$x88=clone JS::$objectTemplate;unset($x94,$W94,$S94,$U94);$x95=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_TypeError,(string)\'prototype\',30,9,\'<image>/07_number.js\');$x94=&$x95[0];list(,$W94,$S94,$U94)=$x95;$x89=$x94;$x88->prototype=$x89;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x98=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x99=$x98($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x99->class)&&$x99->class===\'Error\'){$x99->properties[\'file\']=\'<image>/07_number.js\';$x99->properties[\'line\']=30;$x99->properties[\'column\']=9;$x99->attributes[\'file\']=$x99->attributes[\'line\']=$x99->attributes[\'column\']=0;}throw new JSException($x99,30,9,\'<image>/07_number.js\');}$x96=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x97=$x96($global,$x88,$_TypeError,array(\'Number.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x89=$x97;if(is_object($x89)&&$x89!==JS::$undefined){$x88=$x89;}if(isset($x88->class)&&$x88->class===\'Error\'){$x88->properties[\'file\']=\'<image>/07_number.js\';$x88->properties[\'line\']=30;$x88->properties[\'column\']=3;$x88->attributes[\'file\']=$x88->attributes[\'line\']=$x88->attributes[\'column\']=0;}throw new JSException($x88,30,3,\'<image>/07_number.js\');}unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x100=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',33,6,\'<image>/07_number.js\');$_isNaN=&$x100[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x100;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x101=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',33,6,\'<image>/07_number.js\');$_ReferenceError=&$x101[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x101;$x102=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,6);$x103=$x102($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x103->class)&&$x103->class===\'Error\'){$x103->properties[\'file\']=\'<image>/07_number.js\';$x103->properties[\'line\']=33;$x103->properties[\'column\']=6;$x103->attributes[\'file\']=$x103->attributes[\'line\']=$x103->attributes[\'column\']=0;}throw new JSException($x103,33,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x106=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',33,11,\'<image>/07_number.js\');$_TypeError=&$x106[0];list(,$WTypeError,$STypeError,$UTypeError)=$x106;$x107=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x108=$x107($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x108->class)&&$x108->class===\'Error\'){$x108->properties[\'file\']=\'<image>/07_number.js\';$x108->properties[\'line\']=33;$x108->properties[\'column\']=11;$x108->attributes[\'file\']=$x108->attributes[\'line\']=$x108->attributes[\'column\']=0;}throw new JSException($x108,33,11,\'<image>/07_number.js\');}$x104=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x105=$x104($global,$global,$_isNaN,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x105,$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}if(JS::toBoolean(is_float($leThis->value),$global)){return(string)$leThis->value;}$x109=$_radix;if(!JS::toBoolean($x109,$global)){$x109=10;}if($Uradix){$global->properties[\'radix\']=$_radix;$_radix=&$global->properties[\'radix\'];}$_radix=$x109;$x111=JS::toPrimitive($_radix,$global);$x112=JS::toPrimitive(2,$global);$x113=(is_string($x111)&&is_string($x112)?strcmp($x111,$x112)<0:(!is_nan($x114=JS::toNumber($x111,$global))&&!is_nan($x115=JS::toNumber($x112,$global))&&$x114<$x115));$x110=$x113;if(!JS::toBoolean($x110,$global)){$x116=JS::toPrimitive($_radix,$global);$x117=JS::toPrimitive(36,$global);$x118=(is_string($x117)&&is_string($x116)?strcmp($x117,$x116)<0:(!is_nan($x119=JS::toNumber($x117,$global))&&!is_nan($x120=JS::toNumber($x116,$global))&&$x119<$x120));$x110=$x118;}if(JS::toBoolean($x110,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x123=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',52,13,\'<image>/07_number.js\');$_RangeError=&$x123[0];list(,$WRangeError,$SRangeError,$URangeError)=$x123;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x124=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',52,13,\'<image>/07_number.js\');$_ReferenceError=&$x124[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x124;$x125=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,13);$x126=$x125($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x126->class)&&$x126->class===\'Error\'){$x126->properties[\'file\']=\'<image>/07_number.js\';$x126->properties[\'line\']=52;$x126->properties[\'column\']=13;$x126->attributes[\'file\']=$x126->attributes[\'line\']=$x126->attributes[\'column\']=0;}throw new JSException($x126,52,13,\'<image>/07_number.js\');}$x121=clone JS::$objectTemplate;unset($x127,$W127,$S127,$U127);$x128=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',52,9,\'<image>/07_number.js\');$x127=&$x128[0];list(,$W127,$S127,$U127)=$x128;$x122=$x127;$x121->prototype=$x122;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x131=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',52,9,\'<image>/07_number.js\');$_TypeError=&$x131[0];list(,$WTypeError,$STypeError,$UTypeError)=$x131;$x132=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x133=$x132($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x133->class)&&$x133->class===\'Error\'){$x133->properties[\'file\']=\'<image>/07_number.js\';$x133->properties[\'line\']=52;$x133->properties[\'column\']=9;$x133->attributes[\'file\']=$x133->attributes[\'line\']=$x133->attributes[\'column\']=0;}throw new JSException($x133,52,9,\'<image>/07_number.js\');}$x129=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x130=$x129($global,$x121,$_RangeError,array(\'Number.prototype.toString(): radix is not between 2 and 36.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x122=$x130;if(is_object($x122)&&$x122!==JS::$undefined){$x121=$x122;}if(isset($x121->class)&&$x121->class===\'Error\'){$x121->properties[\'file\']=\'<image>/07_number.js\';$x121->properties[\'line\']=52;$x121->properties[\'column\']=3;$x121->attributes[\'file\']=$x121->attributes[\'line\']=$x121->attributes[\'column\']=0;}throw new JSException($x121,52,3,\'<image>/07_number.js\');}return base_convert((string)$leThis->value,10,$_radix);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x160 =& $scope->properties['arguments'];
$x160->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x160->properties[$i] = $args[$i];
$x160->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x160=&$scope->properties[\'arguments\'];$x160->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x160->properties[$i]=$args[$i];$x160->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value;return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x173 =& $scope->properties['arguments'];
$x173->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x173->properties[$i] = $args[$i];
$x173->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x175 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x174 = $x175;
if (JS::toBoolean($x174, $global)) {
$x177 = JS::toPrimitive($_fractionDigits, $global);
$x178 = JS::toPrimitive(0, $global);
$x179 = (is_string($x177) && is_string($x178) ? strcmp($x177, $x178) < 0 : (!is_nan($x180 = JS::toNumber($x177, $global)) && !is_nan($x181 = JS::toNumber($x178, $global)) && $x180 < $x181));
$x176 = $x179;
if (!JS::toBoolean($x176, $global)) {
$x182 = JS::toPrimitive($_fractionDigits, $global);
$x183 = JS::toPrimitive(20, $global);
$x184 = (is_string($x183) && is_string($x182) ? strcmp($x183, $x182) < 0 : (!is_nan($x185 = JS::toNumber($x183, $global)) && !is_nan($x186 = JS::toNumber($x182, $global)) && $x185 < $x186));
$x176 = $x184; }
$x174 = $x176; }
if (JS::toBoolean($x174, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x189 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 66, 13, '<image>/07_number.js');
$_RangeError =& $x189[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x189;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x190 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 66, 13, '<image>/07_number.js');
$_ReferenceError =& $x190[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x190;
$x191 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 13);
$x192 = $x191($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x192->class) && $x192->class === 'Error') {$x192->properties['file'] = '<image>/07_number.js';$x192->properties['line'] = 66;$x192->properties['column'] = 13;$x192->attributes['file'] = $x192->attributes['line'] = $x192->attributes['column'] = 0; }
throw new JSException($x192, 66, 13, '<image>/07_number.js');
}
$x187 = clone JS::$objectTemplate;
unset($x193, $W193, $S193, $U193);
$x194 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 66, 9, '<image>/07_number.js');
$x193 =& $x194[0]; list(,$W193,$S193,$U193) = $x194;
$x188 = $x193;
$x187->prototype = $x188;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x197 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 66, 9, '<image>/07_number.js');
$_TypeError =& $x197[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x197;
$x198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x199 = $x198($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x199->class) && $x199->class === 'Error') {$x199->properties['file'] = '<image>/07_number.js';$x199->properties['line'] = 66;$x199->properties['column'] = 9;$x199->attributes['file'] = $x199->attributes['line'] = $x199->attributes['column'] = 0; }
throw new JSException($x199, 66, 9, '<image>/07_number.js');
}
$x195 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x196 = $x195($global, $x187, $_RangeError, array('Number.prototype.toFixed(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x188 = $x196;
if (is_object($x188) && $x188 !== JS::$undefined) { $x187 = $x188; }
if (isset($x187->class) && $x187->class === 'Error') {$x187->properties['file'] = '<image>/07_number.js';$x187->properties['line'] = 66;$x187->properties['column'] = 3;$x187->attributes['file'] = $x187->attributes['line'] = $x187->attributes['column'] = 0; }
throw new JSException($x187, 66, 3, '<image>/07_number.js');;
};
if (JS::toBoolean(is_nan($leThis->value), $global)) {

return 'NaN';;
};
if ($UfractionDigits) {$global->properties['fractionDigits'] = $_fractionDigits; $_fractionDigits =& $global->properties['fractionDigits']; }
$_fractionDigits = JS::toNumber($_fractionDigits, $global);
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x200 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 75, 6, '<image>/07_number.js');
$_isNaN =& $x200[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x200;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x201 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 75, 6, '<image>/07_number.js');
$_ReferenceError =& $x201[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x201;
$x202 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 6);
$x203 = $x202($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x203->class) && $x203->class === 'Error') {$x203->properties['file'] = '<image>/07_number.js';$x203->properties['line'] = 75;$x203->properties['column'] = 6;$x203->attributes['file'] = $x203->attributes['line'] = $x203->attributes['column'] = 0; }
throw new JSException($x203, 75, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x206 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 75, 11, '<image>/07_number.js');
$_TypeError =& $x206[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x206;
$x207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x208 = $x207($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x208->class) && $x208->class === 'Error') {$x208->properties['file'] = '<image>/07_number.js';$x208->properties['line'] = 75;$x208->properties['column'] = 11;$x208->attributes['file'] = $x208->attributes['line'] = $x208->attributes['column'] = 0; }
throw new JSException($x208, 75, 11, '<image>/07_number.js');
}
$x204 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x205 = $x204($global, $global, $_isNaN, array($_fractionDigits), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x205, $global)) {

return (string) intval(round($leThis->value));;
};
return sprintf('%.' .$_fractionDigits. 'f', $leThis->value);
return sprintf('%f', $leThis->value);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x173=&$scope->properties[\'arguments\'];$x173->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x173->properties[$i]=$args[$i];$x173->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x175=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x174=$x175;if(JS::toBoolean($x174,$global)){$x177=JS::toPrimitive($_fractionDigits,$global);$x178=JS::toPrimitive(0,$global);$x179=(is_string($x177)&&is_string($x178)?strcmp($x177,$x178)<0:(!is_nan($x180=JS::toNumber($x177,$global))&&!is_nan($x181=JS::toNumber($x178,$global))&&$x180<$x181));$x176=$x179;if(!JS::toBoolean($x176,$global)){$x182=JS::toPrimitive($_fractionDigits,$global);$x183=JS::toPrimitive(20,$global);$x184=(is_string($x183)&&is_string($x182)?strcmp($x183,$x182)<0:(!is_nan($x185=JS::toNumber($x183,$global))&&!is_nan($x186=JS::toNumber($x182,$global))&&$x185<$x186));$x176=$x184;}$x174=$x176;}if(JS::toBoolean($x174,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x189=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',66,13,\'<image>/07_number.js\');$_RangeError=&$x189[0];list(,$WRangeError,$SRangeError,$URangeError)=$x189;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x190=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',66,13,\'<image>/07_number.js\');$_ReferenceError=&$x190[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x190;$x191=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,13);$x192=$x191($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x192->class)&&$x192->class===\'Error\'){$x192->properties[\'file\']=\'<image>/07_number.js\';$x192->properties[\'line\']=66;$x192->properties[\'column\']=13;$x192->attributes[\'file\']=$x192->attributes[\'line\']=$x192->attributes[\'column\']=0;}throw new JSException($x192,66,13,\'<image>/07_number.js\');}$x187=clone JS::$objectTemplate;unset($x193,$W193,$S193,$U193);$x194=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',66,9,\'<image>/07_number.js\');$x193=&$x194[0];list(,$W193,$S193,$U193)=$x194;$x188=$x193;$x187->prototype=$x188;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x197=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',66,9,\'<image>/07_number.js\');$_TypeError=&$x197[0];list(,$WTypeError,$STypeError,$UTypeError)=$x197;$x198=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x199=$x198($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x199->class)&&$x199->class===\'Error\'){$x199->properties[\'file\']=\'<image>/07_number.js\';$x199->properties[\'line\']=66;$x199->properties[\'column\']=9;$x199->attributes[\'file\']=$x199->attributes[\'line\']=$x199->attributes[\'column\']=0;}throw new JSException($x199,66,9,\'<image>/07_number.js\');}$x195=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x196=$x195($global,$x187,$_RangeError,array(\'Number.prototype.toFixed(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x188=$x196;if(is_object($x188)&&$x188!==JS::$undefined){$x187=$x188;}if(isset($x187->class)&&$x187->class===\'Error\'){$x187->properties[\'file\']=\'<image>/07_number.js\';$x187->properties[\'line\']=66;$x187->properties[\'column\']=3;$x187->attributes[\'file\']=$x187->attributes[\'line\']=$x187->attributes[\'column\']=0;}throw new JSException($x187,66,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if($UfractionDigits){$global->properties[\'fractionDigits\']=$_fractionDigits;$_fractionDigits=&$global->properties[\'fractionDigits\'];}$_fractionDigits=JS::toNumber($_fractionDigits,$global);unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x200=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',75,6,\'<image>/07_number.js\');$_isNaN=&$x200[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x200;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x201=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',75,6,\'<image>/07_number.js\');$_ReferenceError=&$x201[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x201;$x202=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,6);$x203=$x202($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x203->class)&&$x203->class===\'Error\'){$x203->properties[\'file\']=\'<image>/07_number.js\';$x203->properties[\'line\']=75;$x203->properties[\'column\']=6;$x203->attributes[\'file\']=$x203->attributes[\'line\']=$x203->attributes[\'column\']=0;}throw new JSException($x203,75,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x206=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',75,11,\'<image>/07_number.js\');$_TypeError=&$x206[0];list(,$WTypeError,$STypeError,$UTypeError)=$x206;$x207=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x208=$x207($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x208->class)&&$x208->class===\'Error\'){$x208->properties[\'file\']=\'<image>/07_number.js\';$x208->properties[\'line\']=75;$x208->properties[\'column\']=11;$x208->attributes[\'file\']=$x208->attributes[\'line\']=$x208->attributes[\'column\']=0;}throw new JSException($x208,75,11,\'<image>/07_number.js\');}$x204=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x205=$x204($global,$global,$_isNaN,array($_fractionDigits),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x205,$global)){return(string)intval(round($leThis->value));}return sprintf(\'%.\'.$_fractionDigits.\'f\',$leThis->value);return sprintf(\'%f\',$leThis->value);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x221 =& $scope->properties['arguments'];
$x221->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x221->properties[$i] = $args[$i];
$x221->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x223 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x222 = $x223;
if (JS::toBoolean($x222, $global)) {
$x225 = JS::toPrimitive($_fractionDigits, $global);
$x226 = JS::toPrimitive(0, $global);
$x227 = (is_string($x225) && is_string($x226) ? strcmp($x225, $x226) < 0 : (!is_nan($x228 = JS::toNumber($x225, $global)) && !is_nan($x229 = JS::toNumber($x226, $global)) && $x228 < $x229));
$x224 = $x227;
if (!JS::toBoolean($x224, $global)) {
$x230 = JS::toPrimitive($_fractionDigits, $global);
$x231 = JS::toPrimitive(20, $global);
$x232 = (is_string($x231) && is_string($x230) ? strcmp($x231, $x230) < 0 : (!is_nan($x233 = JS::toNumber($x231, $global)) && !is_nan($x234 = JS::toNumber($x230, $global)) && $x233 < $x234));
$x224 = $x232; }
$x222 = $x224; }
if (JS::toBoolean($x222, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x237 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 86, 13, '<image>/07_number.js');
$_RangeError =& $x237[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x237;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x238 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 86, 13, '<image>/07_number.js');
$_ReferenceError =& $x238[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x238;
$x239 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 13);
$x240 = $x239($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x240->class) && $x240->class === 'Error') {$x240->properties['file'] = '<image>/07_number.js';$x240->properties['line'] = 86;$x240->properties['column'] = 13;$x240->attributes['file'] = $x240->attributes['line'] = $x240->attributes['column'] = 0; }
throw new JSException($x240, 86, 13, '<image>/07_number.js');
}
$x235 = clone JS::$objectTemplate;
unset($x241, $W241, $S241, $U241);
$x242 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 86, 9, '<image>/07_number.js');
$x241 =& $x242[0]; list(,$W241,$S241,$U241) = $x242;
$x236 = $x241;
$x235->prototype = $x236;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x245 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 86, 9, '<image>/07_number.js');
$_TypeError =& $x245[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x245;
$x246 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x247 = $x246($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x247->class) && $x247->class === 'Error') {$x247->properties['file'] = '<image>/07_number.js';$x247->properties['line'] = 86;$x247->properties['column'] = 9;$x247->attributes['file'] = $x247->attributes['line'] = $x247->attributes['column'] = 0; }
throw new JSException($x247, 86, 9, '<image>/07_number.js');
}
$x243 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x244 = $x243($global, $x235, $_RangeError, array('Number.prototype.toExponential(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x236 = $x244;
if (is_object($x236) && $x236 !== JS::$undefined) { $x235 = $x236; }
if (isset($x235->class) && $x235->class === 'Error') {$x235->properties['file'] = '<image>/07_number.js';$x235->properties['line'] = 86;$x235->properties['column'] = 3;$x235->attributes['file'] = $x235->attributes['line'] = $x235->attributes['column'] = 0; }
throw new JSException($x235, 86, 3, '<image>/07_number.js');;
};
if (JS::toBoolean(is_nan($leThis->value), $global)) {

return 'NaN';;
};
if (JS::toBoolean($leThis->value === INF, $global)) {

return 'Infinity';;
};
if (JS::toBoolean($leThis->value === -INF, $global)) {

return '-Infinity';;
};
$x248 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
if (JS::toBoolean($x248, $global)) {
$scope->properties['d'] = JS::$undefined; $_d =& $scope->properties['d'];
$Ud = FALSE;
$_d = JS::toNumber($_fractionDigits, $global);
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x249 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 104, 7, '<image>/07_number.js');
$_isNaN =& $x249[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x249;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x250 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 104, 7, '<image>/07_number.js');
$_ReferenceError =& $x250[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x250;
$x251 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 7);
$x252 = $x251($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x252->class) && $x252->class === 'Error') {$x252->properties['file'] = '<image>/07_number.js';$x252->properties['line'] = 104;$x252->properties['column'] = 7;$x252->attributes['file'] = $x252->attributes['line'] = $x252->attributes['column'] = 0; }
throw new JSException($x252, 104, 7, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x255 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 104, 12, '<image>/07_number.js');
$_TypeError =& $x255[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x255;
$x256 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x257 = $x256($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x257->class) && $x257->class === 'Error') {$x257->properties['file'] = '<image>/07_number.js';$x257->properties['line'] = 104;$x257->properties['column'] = 12;$x257->attributes['file'] = $x257->attributes['line'] = $x257->attributes['column'] = 0; }
throw new JSException($x257, 104, 12, '<image>/07_number.js');
}
$x253 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x254 = $x253($global, $global, $_isNaN, array($_d), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x254, $global)) {
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = 0;;
};
return sprintf('%.' .$_d. 'e', $leThis->value);;
};
return preg_replace('/[.]?0+e/', 'e', sprintf('%e', $leThis->value));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x221=&$scope->properties[\'arguments\'];$x221->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x221->properties[$i]=$args[$i];$x221->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x223=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x222=$x223;if(JS::toBoolean($x222,$global)){$x225=JS::toPrimitive($_fractionDigits,$global);$x226=JS::toPrimitive(0,$global);$x227=(is_string($x225)&&is_string($x226)?strcmp($x225,$x226)<0:(!is_nan($x228=JS::toNumber($x225,$global))&&!is_nan($x229=JS::toNumber($x226,$global))&&$x228<$x229));$x224=$x227;if(!JS::toBoolean($x224,$global)){$x230=JS::toPrimitive($_fractionDigits,$global);$x231=JS::toPrimitive(20,$global);$x232=(is_string($x231)&&is_string($x230)?strcmp($x231,$x230)<0:(!is_nan($x233=JS::toNumber($x231,$global))&&!is_nan($x234=JS::toNumber($x230,$global))&&$x233<$x234));$x224=$x232;}$x222=$x224;}if(JS::toBoolean($x222,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x237=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',86,13,\'<image>/07_number.js\');$_RangeError=&$x237[0];list(,$WRangeError,$SRangeError,$URangeError)=$x237;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x238=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',86,13,\'<image>/07_number.js\');$_ReferenceError=&$x238[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x238;$x239=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,13);$x240=$x239($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x240->class)&&$x240->class===\'Error\'){$x240->properties[\'file\']=\'<image>/07_number.js\';$x240->properties[\'line\']=86;$x240->properties[\'column\']=13;$x240->attributes[\'file\']=$x240->attributes[\'line\']=$x240->attributes[\'column\']=0;}throw new JSException($x240,86,13,\'<image>/07_number.js\');}$x235=clone JS::$objectTemplate;unset($x241,$W241,$S241,$U241);$x242=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',86,9,\'<image>/07_number.js\');$x241=&$x242[0];list(,$W241,$S241,$U241)=$x242;$x236=$x241;$x235->prototype=$x236;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x245=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',86,9,\'<image>/07_number.js\');$_TypeError=&$x245[0];list(,$WTypeError,$STypeError,$UTypeError)=$x245;$x246=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x247=$x246($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x247->class)&&$x247->class===\'Error\'){$x247->properties[\'file\']=\'<image>/07_number.js\';$x247->properties[\'line\']=86;$x247->properties[\'column\']=9;$x247->attributes[\'file\']=$x247->attributes[\'line\']=$x247->attributes[\'column\']=0;}throw new JSException($x247,86,9,\'<image>/07_number.js\');}$x243=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x244=$x243($global,$x235,$_RangeError,array(\'Number.prototype.toExponential(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x236=$x244;if(is_object($x236)&&$x236!==JS::$undefined){$x235=$x236;}if(isset($x235->class)&&$x235->class===\'Error\'){$x235->properties[\'file\']=\'<image>/07_number.js\';$x235->properties[\'line\']=86;$x235->properties[\'column\']=3;$x235->attributes[\'file\']=$x235->attributes[\'line\']=$x235->attributes[\'column\']=0;}throw new JSException($x235,86,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}$x248=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));if(JS::toBoolean($x248,$global)){$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::toNumber($_fractionDigits,$global);unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x249=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',104,7,\'<image>/07_number.js\');$_isNaN=&$x249[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x249;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x250=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',104,7,\'<image>/07_number.js\');$_ReferenceError=&$x250[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x250;$x251=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,7);$x252=$x251($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x252->class)&&$x252->class===\'Error\'){$x252->properties[\'file\']=\'<image>/07_number.js\';$x252->properties[\'line\']=104;$x252->properties[\'column\']=7;$x252->attributes[\'file\']=$x252->attributes[\'line\']=$x252->attributes[\'column\']=0;}throw new JSException($x252,104,7,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x255=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',104,12,\'<image>/07_number.js\');$_TypeError=&$x255[0];list(,$WTypeError,$STypeError,$UTypeError)=$x255;$x256=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x257=$x256($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x257->class)&&$x257->class===\'Error\'){$x257->properties[\'file\']=\'<image>/07_number.js\';$x257->properties[\'line\']=104;$x257->properties[\'column\']=12;$x257->attributes[\'file\']=$x257->attributes[\'line\']=$x257->attributes[\'column\']=0;}throw new JSException($x257,104,12,\'<image>/07_number.js\');}$x253=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x254=$x253($global,$global,$_isNaN,array($_d),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x254,$global)){if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=0;}return sprintf(\'%.\'.$_d.\'e\',$leThis->value);}return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%e\',$leThis->value));return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['precision'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_precision =& $scope->properties['precision'];
$Uprecision = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x271 = (((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
if (JS::toBoolean($x271, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x273 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 116, 23, '<image>/07_number.js');
$_TypeError =& $x273[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x273;
$x274 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x275 = $x274($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x275->class) && $x275->class === 'Error') {$x275->properties['file'] = '<image>/07_number.js';$x275->properties['line'] = 116;$x275->properties['column'] = 23;$x275->attributes['file'] = $x275->attributes['line'] = $x275->attributes['column'] = 0; }
throw new JSException($x275, 116, 23, '<image>/07_number.js');
}
$x272 = JS::toObject($leThis, $global);
unset($x276, $W276, $S276, $U276);
$x277 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x272, (string) 'toString', 116, 23, '<image>/07_number.js');
$x276 =& $x277[0]; list(,$W276,$S276,$U276) = $x277;
if (!(is_object($x276) && isset($x276->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x280 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 116, 23, '<image>/07_number.js');
$_TypeError =& $x280[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x280;
$x281 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x282 = $x281($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x282->class) && $x282->class === 'Error') {$x282->properties['file'] = '<image>/07_number.js';$x282->properties['line'] = 116;$x282->properties['column'] = 23;$x282->attributes['file'] = $x282->attributes['line'] = $x282->attributes['column'] = 0; }
throw new JSException($x282, 116, 23, '<image>/07_number.js');
}
$x278 = $x276->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x279 = $x278($global, $x272, $x276, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x279;;
};
$x285 = !(((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
$x284 = $x285;
if (JS::toBoolean($x284, $global)) {
$x287 = JS::toPrimitive($_precision, $global);
$x288 = JS::toPrimitive(1, $global);
$x289 = (is_string($x287) && is_string($x288) ? strcmp($x287, $x288) < 0 : (!is_nan($x290 = JS::toNumber($x287, $global)) && !is_nan($x291 = JS::toNumber($x288, $global)) && $x290 < $x291));
$x286 = $x289;
if (!JS::toBoolean($x286, $global)) {
$x292 = JS::toPrimitive($_precision, $global);
$x293 = JS::toPrimitive(21, $global);
$x294 = (is_string($x293) && is_string($x292) ? strcmp($x293, $x292) < 0 : (!is_nan($x295 = JS::toNumber($x293, $global)) && !is_nan($x296 = JS::toNumber($x292, $global)) && $x295 < $x296));
$x286 = $x294; }
$x284 = $x286; }
$x283 = $x284;
if (!JS::toBoolean($x283, $global)) {
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x297 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 119, 70, '<image>/07_number.js');
$_isNaN =& $x297[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x297;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x298 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 119, 70, '<image>/07_number.js');
$_ReferenceError =& $x298[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x298;
$x299 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 70);
$x300 = $x299($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x300->class) && $x300->class === 'Error') {$x300->properties['file'] = '<image>/07_number.js';$x300->properties['line'] = 119;$x300->properties['column'] = 70;$x300->attributes['file'] = $x300->attributes['line'] = $x300->attributes['column'] = 0; }
throw new JSException($x300, 119, 70, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x303 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 119, 75, '<image>/07_number.js');
$_TypeError =& $x303[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x303;
$x304 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x305 = $x304($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x305->class) && $x305->class === 'Error') {$x305->properties['file'] = '<image>/07_number.js';$x305->properties['line'] = 119;$x305->properties['column'] = 75;$x305->attributes['file'] = $x305->attributes['line'] = $x305->attributes['column'] = 0; }
throw new JSException($x305, 119, 75, '<image>/07_number.js');
}
$x301 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x302 = $x301($global, $global, $_isNaN, array($_precision), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x283 = $x302; }
if (JS::toBoolean($x283, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x308 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 120, 13, '<image>/07_number.js');
$_RangeError =& $x308[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x308;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x309 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 120, 13, '<image>/07_number.js');
$_ReferenceError =& $x309[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x309;
$x310 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 13);
$x311 = $x310($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x311->class) && $x311->class === 'Error') {$x311->properties['file'] = '<image>/07_number.js';$x311->properties['line'] = 120;$x311->properties['column'] = 13;$x311->attributes['file'] = $x311->attributes['line'] = $x311->attributes['column'] = 0; }
throw new JSException($x311, 120, 13, '<image>/07_number.js');
}
$x306 = clone JS::$objectTemplate;
unset($x312, $W312, $S312, $U312);
$x313 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 120, 9, '<image>/07_number.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
$x307 = $x312;
$x306->prototype = $x307;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x316 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 120, 9, '<image>/07_number.js');
$_TypeError =& $x316[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x316;
$x317 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x318 = $x317($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x318->class) && $x318->class === 'Error') {$x318->properties['file'] = '<image>/07_number.js';$x318->properties['line'] = 120;$x318->properties['column'] = 9;$x318->attributes['file'] = $x318->attributes['line'] = $x318->attributes['column'] = 0; }
throw new JSException($x318, 120, 9, '<image>/07_number.js');
}
$x314 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x315 = $x314($global, $x306, $_RangeError, array('Number.prototype.toPrecision(): precision must be between 1 and 21'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x307 = $x315;
if (is_object($x307) && $x307 !== JS::$undefined) { $x306 = $x307; }
if (isset($x306->class) && $x306->class === 'Error') {$x306->properties['file'] = '<image>/07_number.js';$x306->properties['line'] = 120;$x306->properties['column'] = 3;$x306->attributes['file'] = $x306->attributes['line'] = $x306->attributes['column'] = 0; }
throw new JSException($x306, 120, 3, '<image>/07_number.js');;
};
if (JS::toBoolean(is_nan($leThis->value), $global)) {

return 'NaN';;
};
if (JS::toBoolean($leThis->value === INF, $global)) {

return 'Infinity';;
};
if (JS::toBoolean($leThis->value === -INF, $global)) {

return '-Infinity';;
};
if ($Uprecision) {$global->properties['precision'] = $_precision; $_precision =& $global->properties['precision']; }
$_precision = JS::toNumber($_precision, $global);
return preg_replace('/[.]?0+e/', 'e', sprintf('%.' . JS::toString($_precision, $global) . 'g',
		round($leThis->value,$_precision- strlen((string) intval($leThis->value)))));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x270=&$scope->properties[\'arguments\'];$x270->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x270->properties[$i]=$args[$i];$x270->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'precision\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_precision=&$scope->properties[\'precision\'];$Uprecision=FALSE;$global->scope[++$global->scope_sp]=$scope;$x271=(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));if(JS::toBoolean($x271,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x273=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',116,23,\'<image>/07_number.js\');$_TypeError=&$x273[0];list(,$WTypeError,$STypeError,$UTypeError)=$x273;$x274=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x275=$x274($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x275->class)&&$x275->class===\'Error\'){$x275->properties[\'file\']=\'<image>/07_number.js\';$x275->properties[\'line\']=116;$x275->properties[\'column\']=23;$x275->attributes[\'file\']=$x275->attributes[\'line\']=$x275->attributes[\'column\']=0;}throw new JSException($x275,116,23,\'<image>/07_number.js\');}$x272=JS::toObject($leThis,$global);unset($x276,$W276,$S276,$U276);$x277=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$x272,(string)\'toString\',116,23,\'<image>/07_number.js\');$x276=&$x277[0];list(,$W276,$S276,$U276)=$x277;if(!(is_object($x276)&&isset($x276->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x280=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',116,23,\'<image>/07_number.js\');$_TypeError=&$x280[0];list(,$WTypeError,$STypeError,$UTypeError)=$x280;$x281=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x282=$x281($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x282->class)&&$x282->class===\'Error\'){$x282->properties[\'file\']=\'<image>/07_number.js\';$x282->properties[\'line\']=116;$x282->properties[\'column\']=23;$x282->attributes[\'file\']=$x282->attributes[\'line\']=$x282->attributes[\'column\']=0;}throw new JSException($x282,116,23,\'<image>/07_number.js\');}$x278=$x276->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x279=$x278($global,$x272,$x276,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x279;}$x285=!(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));$x284=$x285;if(JS::toBoolean($x284,$global)){$x287=JS::toPrimitive($_precision,$global);$x288=JS::toPrimitive(1,$global);$x289=(is_string($x287)&&is_string($x288)?strcmp($x287,$x288)<0:(!is_nan($x290=JS::toNumber($x287,$global))&&!is_nan($x291=JS::toNumber($x288,$global))&&$x290<$x291));$x286=$x289;if(!JS::toBoolean($x286,$global)){$x292=JS::toPrimitive($_precision,$global);$x293=JS::toPrimitive(21,$global);$x294=(is_string($x293)&&is_string($x292)?strcmp($x293,$x292)<0:(!is_nan($x295=JS::toNumber($x293,$global))&&!is_nan($x296=JS::toNumber($x292,$global))&&$x295<$x296));$x286=$x294;}$x284=$x286;}$x283=$x284;if(!JS::toBoolean($x283,$global)){unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x297=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',119,70,\'<image>/07_number.js\');$_isNaN=&$x297[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x297;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x298=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',119,70,\'<image>/07_number.js\');$_ReferenceError=&$x298[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x298;$x299=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,70);$x300=$x299($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x300->class)&&$x300->class===\'Error\'){$x300->properties[\'file\']=\'<image>/07_number.js\';$x300->properties[\'line\']=119;$x300->properties[\'column\']=70;$x300->attributes[\'file\']=$x300->attributes[\'line\']=$x300->attributes[\'column\']=0;}throw new JSException($x300,119,70,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x303=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',119,75,\'<image>/07_number.js\');$_TypeError=&$x303[0];list(,$WTypeError,$STypeError,$UTypeError)=$x303;$x304=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x305=$x304($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x305->class)&&$x305->class===\'Error\'){$x305->properties[\'file\']=\'<image>/07_number.js\';$x305->properties[\'line\']=119;$x305->properties[\'column\']=75;$x305->attributes[\'file\']=$x305->attributes[\'line\']=$x305->attributes[\'column\']=0;}throw new JSException($x305,119,75,\'<image>/07_number.js\');}$x301=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x302=$x301($global,$global,$_isNaN,array($_precision),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x283=$x302;}if(JS::toBoolean($x283,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x308=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',120,13,\'<image>/07_number.js\');$_RangeError=&$x308[0];list(,$WRangeError,$SRangeError,$URangeError)=$x308;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x309=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',120,13,\'<image>/07_number.js\');$_ReferenceError=&$x309[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x309;$x310=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,13);$x311=$x310($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x311->class)&&$x311->class===\'Error\'){$x311->properties[\'file\']=\'<image>/07_number.js\';$x311->properties[\'line\']=120;$x311->properties[\'column\']=13;$x311->attributes[\'file\']=$x311->attributes[\'line\']=$x311->attributes[\'column\']=0;}throw new JSException($x311,120,13,\'<image>/07_number.js\');}$x306=clone JS::$objectTemplate;unset($x312,$W312,$S312,$U312);$x313=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',120,9,\'<image>/07_number.js\');$x312=&$x313[0];list(,$W312,$S312,$U312)=$x313;$x307=$x312;$x306->prototype=$x307;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x316=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',120,9,\'<image>/07_number.js\');$_TypeError=&$x316[0];list(,$WTypeError,$STypeError,$UTypeError)=$x316;$x317=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x318=$x317($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x318->class)&&$x318->class===\'Error\'){$x318->properties[\'file\']=\'<image>/07_number.js\';$x318->properties[\'line\']=120;$x318->properties[\'column\']=9;$x318->attributes[\'file\']=$x318->attributes[\'line\']=$x318->attributes[\'column\']=0;}throw new JSException($x318,120,9,\'<image>/07_number.js\');}$x314=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x315=$x314($global,$x306,$_RangeError,array(\'Number.prototype.toPrecision(): precision must be between 1 and 21\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x307=$x315;if(is_object($x307)&&$x307!==JS::$undefined){$x306=$x307;}if(isset($x306->class)&&$x306->class===\'Error\'){$x306->properties[\'file\']=\'<image>/07_number.js\';$x306->properties[\'line\']=120;$x306->properties[\'column\']=3;$x306->attributes[\'file\']=$x306->attributes[\'line\']=$x306->attributes[\'column\']=0;}throw new JSException($x306,120,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}if($Uprecision){$global->properties[\'precision\']=$_precision;$_precision=&$global->properties[\'precision\'];}$_precision=JS::toNumber($_precision,$global);return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%.\'.JS::toString($_precision,$global).\'g\',round($leThis->value,$_precision-strlen((string)intval($leThis->value)))));return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/07_number.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/07_number.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Number;
$x4 = clone JS::$functionTemplate; $x4->call = '_ff9cabf943c61b87166e28285dc0448b_1'; $x4->parameters = array (
  0 => 'value',
); $x4->name = 'Number'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$scope->properties['Number'] = JS::$undefined; $_Number =& $scope->properties['Number'];
$UNumber = FALSE;
$_Number = $x4;
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x7 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 16, 18, '<image>/07_number.js');
$_TypeError =& $x7[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x7;
$x8 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 16, 18);
$x9 = $x8($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error') {$x9->properties['file'] = '<image>/07_number.js';$x9->properties['line'] = 16;$x9->properties['column'] = 18;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
throw new JSException($x9, 16, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x10, $W10, $S10, $U10);
$x14 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'MAX_VALUE', 16, 18, '<image>/07_number.js');
$x10 =& $x14[0]; list(,$W10,$S10,$U10) = $x14;
if ($U10 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['MAX_VALUE'] = $x10; $x10 =& $_Number->properties['MAX_VALUE']; $_Number->attributes['MAX_VALUE'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U10 = FALSE; $W10 = TRUE; }
if (isset($S10)) {
$x16 = $S10->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 16, 18);
$x17 = $x16($global, $_Number, $S10, array(PHP_INT_MAX), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x17;
} else {
if (!$U10) {$x15 = PHP_INT_MAX;if ($W10) { $x10 = PHP_INT_MAX; }  }
else { $x15 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('MAX_VALUE') && 'MAX_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MAX_VALUE' + 1; };
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x18 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 17, 18, '<image>/07_number.js');
$_TypeError =& $x18[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x18;
$x19 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x20 = $x19($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x20->class) && $x20->class === 'Error') {$x20->properties['file'] = '<image>/07_number.js';$x20->properties['line'] = 17;$x20->properties['column'] = 18;$x20->attributes['file'] = $x20->attributes['line'] = $x20->attributes['column'] = 0; }
throw new JSException($x20, 17, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x21, $W21, $S21, $U21);
$x22 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'MIN_VALUE', 17, 18, '<image>/07_number.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
if ($U21 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['MIN_VALUE'] = $x21; $x21 =& $_Number->properties['MIN_VALUE']; $_Number->attributes['MIN_VALUE'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U21 = FALSE; $W21 = TRUE; }
if (isset($S21)) {
$x24 = $S21->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x25 = $x24($global, $_Number, $S21, array((int) PHP_INT_MAX + 1), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x23 = $x25;
} else {
if (!$U21) {$x23 = (int) PHP_INT_MAX + 1;if ($W21) { $x21 = (int) PHP_INT_MAX + 1; }  }
else { $x23 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('MIN_VALUE') && 'MIN_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MIN_VALUE' + 1; };
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x26 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'NaN', 18, 14, '<image>/07_number.js');
$_NaN =& $x26[0]; list(,$WNaN,$SNaN,$UNaN) = $x26;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x27 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 18, 14, '<image>/07_number.js');
$_ReferenceError =& $x27[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x27;
$x28 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 14);
$x29 = $x28($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x29->class) && $x29->class === 'Error') {$x29->properties['file'] = '<image>/07_number.js';$x29->properties['line'] = 18;$x29->properties['column'] = 14;$x29->attributes['file'] = $x29->attributes['line'] = $x29->attributes['column'] = 0; }
throw new JSException($x29, 18, 14, '<image>/07_number.js');
}
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 18, 12, '<image>/07_number.js');
$_TypeError =& $x30[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x30;
$x31 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x32 = $x31($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x32->class) && $x32->class === 'Error') {$x32->properties['file'] = '<image>/07_number.js';$x32->properties['line'] = 18;$x32->properties['column'] = 12;$x32->attributes['file'] = $x32->attributes['line'] = $x32->attributes['column'] = 0; }
throw new JSException($x32, 18, 12, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x33, $W33, $S33, $U33);
$x34 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'NaN', 18, 12, '<image>/07_number.js');
$x33 =& $x34[0]; list(,$W33,$S33,$U33) = $x34;
if ($U33 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['NaN'] = $x33; $x33 =& $_Number->properties['NaN']; $_Number->attributes['NaN'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U33 = FALSE; $W33 = TRUE; }
if (isset($S33)) {
$x36 = $S33->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x37 = $x36($global, $_Number, $S33, array($_NaN), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x35 = $x37;
} else {
if (!$U33) {$x35 = $_NaN;if ($W33) { $x33 = $_NaN; }  }
else { $x35 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('NaN') && 'NaN' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NaN' + 1; };
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x38 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'Infinity', 19, 29, '<image>/07_number.js');
$_Infinity =& $x38[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x38;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x39 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 19, 29, '<image>/07_number.js');
$_ReferenceError =& $x39[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x39;
$x40 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 29);
$x41 = $x40($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x41->class) && $x41->class === 'Error') {$x41->properties['file'] = '<image>/07_number.js';$x41->properties['line'] = 19;$x41->properties['column'] = 29;$x41->attributes['file'] = $x41->attributes['line'] = $x41->attributes['column'] = 0; }
throw new JSException($x41, 19, 29, '<image>/07_number.js');
}
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x42 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 19, 26, '<image>/07_number.js');
$_TypeError =& $x42[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x42;
$x43 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x44 = $x43($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x44->class) && $x44->class === 'Error') {$x44->properties['file'] = '<image>/07_number.js';$x44->properties['line'] = 19;$x44->properties['column'] = 26;$x44->attributes['file'] = $x44->attributes['line'] = $x44->attributes['column'] = 0; }
throw new JSException($x44, 19, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x45, $W45, $S45, $U45);
$x46 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'NEGATIVE_INFINITY', 19, 26, '<image>/07_number.js');
$x45 =& $x46[0]; list(,$W45,$S45,$U45) = $x46;
if ($U45 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['NEGATIVE_INFINITY'] = $x45; $x45 =& $_Number->properties['NEGATIVE_INFINITY']; $_Number->attributes['NEGATIVE_INFINITY'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U45 = FALSE; $W45 = TRUE; }
if (isset($S45)) {
$x48 = $S45->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x49 = $x48($global, $_Number, $S45, array((-1.0 * JS::toNumber($_Infinity, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x47 = $x49;
} else {
if (!$U45) {$x47 = (-1.0 * JS::toNumber($_Infinity, $global));if ($W45) { $x45 = (-1.0 * JS::toNumber($_Infinity, $global)); }  }
else { $x47 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('NEGATIVE_INFINITY') && 'NEGATIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NEGATIVE_INFINITY' + 1; };
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x50 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 20, 26, '<image>/07_number.js');
$_TypeError =& $x50[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x50;
$x51 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x52 = $x51($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x52->class) && $x52->class === 'Error') {$x52->properties['file'] = '<image>/07_number.js';$x52->properties['line'] = 20;$x52->properties['column'] = 26;$x52->attributes['file'] = $x52->attributes['line'] = $x52->attributes['column'] = 0; }
throw new JSException($x52, 20, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x53, $W53, $S53, $U53);
$x54 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'POSITIVE_INFINITY', 20, 26, '<image>/07_number.js');
$x53 =& $x54[0]; list(,$W53,$S53,$U53) = $x54;
if ($U53 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['POSITIVE_INFINITY'] = $x53; $x53 =& $_Number->properties['POSITIVE_INFINITY']; $_Number->attributes['POSITIVE_INFINITY'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U53 = FALSE; $W53 = TRUE; }
if (isset($S53)) {
$x56 = $S53->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x57 = $x56($global, $_Number, $S53, array($_Infinity), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x55 = $x57;
} else {
if (!$U53) {$x55 = $_Infinity;if ($W53) { $x53 = $_Infinity; }  }
else { $x55 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('POSITIVE_INFINITY') && 'POSITIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'POSITIVE_INFINITY' + 1; };
$x58 = clone JS::$objectTemplate;
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x59 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 22, 18, '<image>/07_number.js');
$_TypeError =& $x59[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x59;
$x60 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x61 = $x60($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x61->class) && $x61->class === 'Error') {$x61->properties['file'] = '<image>/07_number.js';$x61->properties['line'] = 22;$x61->properties['column'] = 18;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 22, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x62, $W62, $S62, $U62);
$x63 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'prototype', 22, 18, '<image>/07_number.js');
$x62 =& $x63[0]; list(,$W62,$S62,$U62) = $x63;
if ($U62 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['prototype'] = $x62; $x62 =& $_Number->properties['prototype']; $_Number->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U62 = FALSE; $W62 = TRUE; }
if (isset($S62)) {
$x65 = $S62->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x66 = $x65($global, $_Number, $S62, array($x58), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x64 = $x66;
} else {
if (!$U62) {$x64 = $x58;if ($W62) { $x62 = $x58; }  }
else { $x64 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Number->properties['length']) { $_Number->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x67 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'Object', 23, 51, '<image>/07_number.js');
$_Object =& $x67[0]; list(,$WObject,$SObject,$UObject) = $x67;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x68 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 23, 51, '<image>/07_number.js');
$_ReferenceError =& $x68[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x68;
$x69 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 23, 51);
$x70 = $x69($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x70->class) && $x70->class === 'Error') {$x70->properties['file'] = '<image>/07_number.js';$x70->properties['line'] = 23;$x70->properties['column'] = 51;$x70->attributes['file'] = $x70->attributes['line'] = $x70->attributes['column'] = 0; }
throw new JSException($x70, 23, 51, '<image>/07_number.js');
}
$_Number->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Number->properties['prototype']->class = 'Number';
$_Number->properties['prototype']->extensible = TRUE;
unset($x71, $W71, $S71, $U71);
$x77 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 26, 7, '<image>/07_number.js');
$x71 =& $x77[0]; list(,$W71,$S71,$U71) = $x77;
if ($x71 === JS::$undefined || $x71 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x78 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 26, 30, '<image>/07_number.js');
$_TypeError =& $x78[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x78;
$x79 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x80 = $x79($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x80->class) && $x80->class === 'Error') {$x80->properties['file'] = '<image>/07_number.js';$x80->properties['line'] = 26;$x80->properties['column'] = 30;$x80->attributes['file'] = $x80->attributes['line'] = $x80->attributes['column'] = 0; }
throw new JSException($x80, 26, 30, '<image>/07_number.js');
}
$x71 = JS::toObject($x71, $global);
unset($x81, $W81, $S81, $U81);
$x82 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x71, (string) 'constructor', 26, 30, '<image>/07_number.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
if ($U81 && (!isset($x71->extensible) || $x71->extensible)) {$x71->properties['constructor'] = $x81; $x81 =& $x71->properties['constructor']; $x71->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U81 = FALSE; $W81 = TRUE; }
if (isset($S81)) {
$x84 = $S81->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x85 = $x84($global, $x71, $S81, array($_Number), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x83 = $x85;
} else {
if (!$U81) {$x83 = $_Number;if ($W81) { $x81 = $_Number; }  }
else { $x83 = JS::$undefined; }
}
if (isset($x71->class) && $x71->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x71->properties['length']) { $x71->properties['length'] = 'constructor' + 1; };
$x134 = clone JS::$functionTemplate; $x134->call = '_ff9cabf943c61b87166e28285dc0448b_5'; $x134->parameters = array (
  0 => 'radix',
); $x134->scope = $scope; $x134->properties['prototype'] = clone JS::$objectTemplate; $x134->attributes['prototype'] = JS::WRITABLE; $x134->properties['prototype']->properties['constructor'] = $x134; $x134->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x134->properties['length'] = 1; $x134->attributes['length'] = 0;
unset($x135, $W135, $S135, $U135);
$x136 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 28, 7, '<image>/07_number.js');
$x135 =& $x136[0]; list(,$W135,$S135,$U135) = $x136;
if ($x135 === JS::$undefined || $x135 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x137 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 28, 27, '<image>/07_number.js');
$_TypeError =& $x137[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x137;
$x138 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x139 = $x138($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x139->class) && $x139->class === 'Error') {$x139->properties['file'] = '<image>/07_number.js';$x139->properties['line'] = 28;$x139->properties['column'] = 27;$x139->attributes['file'] = $x139->attributes['line'] = $x139->attributes['column'] = 0; }
throw new JSException($x139, 28, 27, '<image>/07_number.js');
}
$x135 = JS::toObject($x135, $global);
unset($x140, $W140, $S140, $U140);
$x141 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x135, (string) 'toString', 28, 27, '<image>/07_number.js');
$x140 =& $x141[0]; list(,$W140,$S140,$U140) = $x141;
if ($U140 && (!isset($x135->extensible) || $x135->extensible)) {$x135->properties['toString'] = $x140; $x140 =& $x135->properties['toString']; $x135->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U140 = FALSE; $W140 = TRUE; }
if (isset($S140)) {
$x143 = $S140->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x144 = $x143($global, $x135, $S140, array($x134), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x142 = $x144;
} else {
if (!$U140) {$x142 = $x134;if ($W140) { $x140 = $x134; }  }
else { $x142 = JS::$undefined; }
}
if (isset($x135->class) && $x135->class === 'Array' &&  is_int('toString') && 'toString' >= $x135->properties['length']) { $x135->properties['length'] = 'toString' + 1; };
unset($x145, $W145, $S145, $U145);
$x146 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 58, 41, '<image>/07_number.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
unset($x147, $W147, $S147, $U147);
$x148 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x145, (string) 'toString', 58, 51, '<image>/07_number.js');
$x147 =& $x148[0]; list(,$W147,$S147,$U147) = $x148;
unset($x149, $W149, $S149, $U149);
$x150 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 58, 7, '<image>/07_number.js');
$x149 =& $x150[0]; list(,$W149,$S149,$U149) = $x150;
if ($x149 === JS::$undefined || $x149 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x151 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 58, 33, '<image>/07_number.js');
$_TypeError =& $x151[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x151;
$x152 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x153 = $x152($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x153->class) && $x153->class === 'Error') {$x153->properties['file'] = '<image>/07_number.js';$x153->properties['line'] = 58;$x153->properties['column'] = 33;$x153->attributes['file'] = $x153->attributes['line'] = $x153->attributes['column'] = 0; }
throw new JSException($x153, 58, 33, '<image>/07_number.js');
}
$x149 = JS::toObject($x149, $global);
unset($x154, $W154, $S154, $U154);
$x155 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x149, (string) 'toLocaleString', 58, 33, '<image>/07_number.js');
$x154 =& $x155[0]; list(,$W154,$S154,$U154) = $x155;
if ($U154 && (!isset($x149->extensible) || $x149->extensible)) {$x149->properties['toLocaleString'] = $x154; $x154 =& $x149->properties['toLocaleString']; $x149->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U154 = FALSE; $W154 = TRUE; }
if (isset($S154)) {
$x157 = $S154->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x158 = $x157($global, $x149, $S154, array($x147), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x156 = $x158;
} else {
if (!$U154) {$x156 = $x147;if ($W154) { $x154 = $x147; }  }
else { $x156 = JS::$undefined; }
}
if (isset($x149->class) && $x149->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x149->properties['length']) { $x149->properties['length'] = 'toLocaleString' + 1; };
$x161 = clone JS::$functionTemplate; $x161->call = '_ff9cabf943c61b87166e28285dc0448b_6'; $x161->parameters = array (
); $x161->scope = $scope; $x161->properties['prototype'] = clone JS::$objectTemplate; $x161->attributes['prototype'] = JS::WRITABLE; $x161->properties['prototype']->properties['constructor'] = $x161; $x161->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x161->properties['length'] = 0; $x161->attributes['length'] = 0;
unset($x162, $W162, $S162, $U162);
$x163 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 60, 7, '<image>/07_number.js');
$x162 =& $x163[0]; list(,$W162,$S162,$U162) = $x163;
if ($x162 === JS::$undefined || $x162 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x164 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 60, 26, '<image>/07_number.js');
$_TypeError =& $x164[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x164;
$x165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x166 = $x165($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x166->class) && $x166->class === 'Error') {$x166->properties['file'] = '<image>/07_number.js';$x166->properties['line'] = 60;$x166->properties['column'] = 26;$x166->attributes['file'] = $x166->attributes['line'] = $x166->attributes['column'] = 0; }
throw new JSException($x166, 60, 26, '<image>/07_number.js');
}
$x162 = JS::toObject($x162, $global);
unset($x167, $W167, $S167, $U167);
$x168 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x162, (string) 'valueOf', 60, 26, '<image>/07_number.js');
$x167 =& $x168[0]; list(,$W167,$S167,$U167) = $x168;
if ($U167 && (!isset($x162->extensible) || $x162->extensible)) {$x162->properties['valueOf'] = $x167; $x167 =& $x162->properties['valueOf']; $x162->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U167 = FALSE; $W167 = TRUE; }
if (isset($S167)) {
$x170 = $S167->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x171 = $x170($global, $x162, $S167, array($x161), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x169 = $x171;
} else {
if (!$U167) {$x169 = $x161;if ($W167) { $x167 = $x161; }  }
else { $x169 = JS::$undefined; }
}
if (isset($x162->class) && $x162->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x162->properties['length']) { $x162->properties['length'] = 'valueOf' + 1; };
$x209 = clone JS::$functionTemplate; $x209->call = '_ff9cabf943c61b87166e28285dc0448b_7'; $x209->parameters = array (
  0 => 'fractionDigits',
); $x209->scope = $scope; $x209->properties['prototype'] = clone JS::$objectTemplate; $x209->attributes['prototype'] = JS::WRITABLE; $x209->properties['prototype']->properties['constructor'] = $x209; $x209->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x209->properties['length'] = 1; $x209->attributes['length'] = 0;
unset($x210, $W210, $S210, $U210);
$x211 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 64, 7, '<image>/07_number.js');
$x210 =& $x211[0]; list(,$W210,$S210,$U210) = $x211;
if ($x210 === JS::$undefined || $x210 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x212 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 64, 26, '<image>/07_number.js');
$_TypeError =& $x212[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x212;
$x213 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x214 = $x213($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x214->class) && $x214->class === 'Error') {$x214->properties['file'] = '<image>/07_number.js';$x214->properties['line'] = 64;$x214->properties['column'] = 26;$x214->attributes['file'] = $x214->attributes['line'] = $x214->attributes['column'] = 0; }
throw new JSException($x214, 64, 26, '<image>/07_number.js');
}
$x210 = JS::toObject($x210, $global);
unset($x215, $W215, $S215, $U215);
$x216 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x210, (string) 'toFixed', 64, 26, '<image>/07_number.js');
$x215 =& $x216[0]; list(,$W215,$S215,$U215) = $x216;
if ($U215 && (!isset($x210->extensible) || $x210->extensible)) {$x210->properties['toFixed'] = $x215; $x215 =& $x210->properties['toFixed']; $x210->attributes['toFixed'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U215 = FALSE; $W215 = TRUE; }
if (isset($S215)) {
$x218 = $S215->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x219 = $x218($global, $x210, $S215, array($x209), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x217 = $x219;
} else {
if (!$U215) {$x217 = $x209;if ($W215) { $x215 = $x209; }  }
else { $x217 = JS::$undefined; }
}
if (isset($x210->class) && $x210->class === 'Array' &&  is_int('toFixed') && 'toFixed' >= $x210->properties['length']) { $x210->properties['length'] = 'toFixed' + 1; };
$x258 = clone JS::$functionTemplate; $x258->call = '_ff9cabf943c61b87166e28285dc0448b_8'; $x258->parameters = array (
  0 => 'fractionDigits',
); $x258->scope = $scope; $x258->properties['prototype'] = clone JS::$objectTemplate; $x258->attributes['prototype'] = JS::WRITABLE; $x258->properties['prototype']->properties['constructor'] = $x258; $x258->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x258->properties['length'] = 1; $x258->attributes['length'] = 0;
unset($x259, $W259, $S259, $U259);
$x260 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 84, 7, '<image>/07_number.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
if ($x259 === JS::$undefined || $x259 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x261 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 84, 32, '<image>/07_number.js');
$_TypeError =& $x261[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x261;
$x262 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x263 = $x262($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x263->class) && $x263->class === 'Error') {$x263->properties['file'] = '<image>/07_number.js';$x263->properties['line'] = 84;$x263->properties['column'] = 32;$x263->attributes['file'] = $x263->attributes['line'] = $x263->attributes['column'] = 0; }
throw new JSException($x263, 84, 32, '<image>/07_number.js');
}
$x259 = JS::toObject($x259, $global);
unset($x264, $W264, $S264, $U264);
$x265 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x259, (string) 'toExponential', 84, 32, '<image>/07_number.js');
$x264 =& $x265[0]; list(,$W264,$S264,$U264) = $x265;
if ($U264 && (!isset($x259->extensible) || $x259->extensible)) {$x259->properties['toExponential'] = $x264; $x264 =& $x259->properties['toExponential']; $x259->attributes['toExponential'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U264 = FALSE; $W264 = TRUE; }
if (isset($S264)) {
$x267 = $S264->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x268 = $x267($global, $x259, $S264, array($x258), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x266 = $x268;
} else {
if (!$U264) {$x266 = $x258;if ($W264) { $x264 = $x258; }  }
else { $x266 = JS::$undefined; }
}
if (isset($x259->class) && $x259->class === 'Array' &&  is_int('toExponential') && 'toExponential' >= $x259->properties['length']) { $x259->properties['length'] = 'toExponential' + 1; };
$x319 = clone JS::$functionTemplate; $x319->call = '_ff9cabf943c61b87166e28285dc0448b_9'; $x319->parameters = array (
  0 => 'precision',
); $x319->scope = $scope; $x319->properties['prototype'] = clone JS::$objectTemplate; $x319->attributes['prototype'] = JS::WRITABLE; $x319->properties['prototype']->properties['constructor'] = $x319; $x319->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x319->properties['length'] = 1; $x319->attributes['length'] = 0;
unset($x320, $W320, $S320, $U320);
$x321 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 114, 7, '<image>/07_number.js');
$x320 =& $x321[0]; list(,$W320,$S320,$U320) = $x321;
if ($x320 === JS::$undefined || $x320 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x322 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 114, 30, '<image>/07_number.js');
$_TypeError =& $x322[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x322;
$x323 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x324 = $x323($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x324->class) && $x324->class === 'Error') {$x324->properties['file'] = '<image>/07_number.js';$x324->properties['line'] = 114;$x324->properties['column'] = 30;$x324->attributes['file'] = $x324->attributes['line'] = $x324->attributes['column'] = 0; }
throw new JSException($x324, 114, 30, '<image>/07_number.js');
}
$x320 = JS::toObject($x320, $global);
unset($x325, $W325, $S325, $U325);
$x326 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x320, (string) 'toPrecision', 114, 30, '<image>/07_number.js');
$x325 =& $x326[0]; list(,$W325,$S325,$U325) = $x326;
if ($U325 && (!isset($x320->extensible) || $x320->extensible)) {$x320->properties['toPrecision'] = $x325; $x325 =& $x320->properties['toPrecision']; $x320->attributes['toPrecision'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U325 = FALSE; $W325 = TRUE; }
if (isset($S325)) {
$x328 = $S325->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x329 = $x328($global, $x320, $S325, array($x319), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x327 = $x329;
} else {
if (!$U325) {$x327 = $x319;if ($W325) { $x325 = $x319; }  }
else { $x327 = JS::$undefined; }
}
if (isset($x320->class) && $x320->class === 'Array' &&  is_int('toPrecision') && 'toPrecision' >= $x320->properties['length']) { $x320->properties['length'] = 'toPrecision' + 1; };
;
return JS::$undefined;
}
