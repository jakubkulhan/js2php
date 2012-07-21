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
$x6 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x7 = $x6($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x7; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x6=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x7=$x6($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x7;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x12 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x12[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x12;
$x13 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x14 = $x13($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x14->class) && $x14->class === 'Error' && !isset($x14->properties['file']) && !isset($x14->properties['line']) && !isset($x14->properties['column'])) {$x14->properties['file'] = $file;$x14->properties['line'] = $line;$x14->properties['column'] = $column;$x14->attributes['file'] = $x14->attributes['line'] = $x14->attributes['column'] = 0; }
throw new JSException($x14, $line, $column, $file);
}
$W11 = $S11 = $U11 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x11 =& $lookup->properties[$id]; $W11 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S11 = $lookup->setters[$id]; }
else { $x11 = JS::$undefined; $U11 = TRUE; }
return array(&$x11, $W11, $S11, $U11);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x12=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x12[0];list(,$WTypeError,$STypeError,$UTypeError)=$x12;$x13=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x14->class)&&$x14->class===\'Error\'&&!isset($x14->properties[\'file\'])&&!isset($x14->properties[\'line\'])&&!isset($x14->properties[\'column\'])){$x14->properties[\'file\']=$file;$x14->properties[\'line\']=$line;$x14->properties[\'column\']=$column;$x14->attributes[\'file\']=$x14->attributes[\'line\']=$x14->attributes[\'column\']=0;}throw new JSException($x14,$line,$column,$file);}$W11=$S11=$U11=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x11=&$lookup->properties[$id];$W11=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S11=$lookup->setters[$id];}else{$x11=JS::$undefined;$U11=TRUE;}return array(&$x11,$W11,$S11,$U11);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x75 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x77 = $x76($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error' && !isset($x77->properties['file']) && !isset($x77->properties['line']) && !isset($x77->properties['column'])) {$x77->properties['file'] = $file;$x77->properties['line'] = $line;$x77->properties['column'] = $column;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, $line, $column, $file);
}
$W74 = $S74 = $U74 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x74 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x78 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x79 = $x78($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x74 = $x79; }
else { $x74 = JS::$undefined; $U74 = TRUE; }
return array(&$x74, $W74, $S74, $U74);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x77=$x76($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x77->class)&&$x77->class===\'Error\'&&!isset($x77->properties[\'file\'])&&!isset($x77->properties[\'line\'])&&!isset($x77->properties[\'column\'])){$x77->properties[\'file\']=$file;$x77->properties[\'line\']=$line;$x77->properties[\'column\']=$column;$x77->attributes[\'file\']=$x77->attributes[\'line\']=$x77->attributes[\'column\']=0;}throw new JSException($x77,$line,$column,$file);}$W74=$S74=$U74=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x74=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x78=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x79=$x78($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x74=$x79;}else{$x74=JS::$undefined;$U74=TRUE;}return array(&$x74,$W74,$S74,$U74);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x90 =& $scope->properties['arguments'];
$x90->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x90->properties[$i] = $args[$i];
$x90->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['radix'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_radix =& $scope->properties['radix'];
$Uradix = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(isset($leThis->class) && $leThis->class !== 'Number', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 30, 13, '<image>/07_number.js');
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x94 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 30, 13, '<image>/07_number.js');
$_ReferenceError =& $x94[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x94;
$x95 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 13);
$x96 = $x95($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x96->class) && $x96->class === 'Error' && !isset($x96->properties['file']) && !isset($x96->properties['line']) && !isset($x96->properties['column'])) {$x96->properties['file'] = '<image>/07_number.js';$x96->properties['line'] = 30;$x96->properties['column'] = 13;$x96->attributes['file'] = $x96->attributes['line'] = $x96->attributes['column'] = 0; }
throw new JSException($x96, 30, 13, '<image>/07_number.js');
}
$x91 = clone JS::$objectTemplate;
unset($x97, $W97, $S97, $U97);
$x98 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_TypeError, (string) 'prototype', 30, 9, '<image>/07_number.js');
$x97 =& $x98[0]; list(,$W97,$S97,$U97) = $x98;
$x92 = $x97;
$x91->prototype = $x92;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x101 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x102 = $x101($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x102->class) && $x102->class === 'Error' && !isset($x102->properties['file']) && !isset($x102->properties['line']) && !isset($x102->properties['column'])) {$x102->properties['file'] = '<image>/07_number.js';$x102->properties['line'] = 30;$x102->properties['column'] = 9;$x102->attributes['file'] = $x102->attributes['line'] = $x102->attributes['column'] = 0; }
throw new JSException($x102, 30, 9, '<image>/07_number.js');
}
$x99 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x100 = $x99($global, $x91, $_TypeError, array('Number.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x92 = $x100;
if (is_object($x92) && $x92 !== JS::$undefined) { $x91 = $x92; }
if (isset($x91->class) && $x91->class === 'Error' && !isset($x91->properties['file']) && !isset($x91->properties['line']) && !isset($x91->properties['column'])) {$x91->properties['file'] = '<image>/07_number.js';$x91->properties['line'] = 30;$x91->properties['column'] = 3;$x91->attributes['file'] = $x91->attributes['line'] = $x91->attributes['column'] = 0; }
throw new JSException($x91, 30, 3, '<image>/07_number.js');;
};
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x103 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 33, 6, '<image>/07_number.js');
$_isNaN =& $x103[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x103;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x104 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 33, 6, '<image>/07_number.js');
$_ReferenceError =& $x104[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x104;
$x105 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 6);
$x106 = $x105($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x106->class) && $x106->class === 'Error' && !isset($x106->properties['file']) && !isset($x106->properties['line']) && !isset($x106->properties['column'])) {$x106->properties['file'] = '<image>/07_number.js';$x106->properties['line'] = 33;$x106->properties['column'] = 6;$x106->attributes['file'] = $x106->attributes['line'] = $x106->attributes['column'] = 0; }
throw new JSException($x106, 33, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x109 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 33, 11, '<image>/07_number.js');
$_TypeError =& $x109[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x109;
$x110 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x111 = $x110($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x111->class) && $x111->class === 'Error' && !isset($x111->properties['file']) && !isset($x111->properties['line']) && !isset($x111->properties['column'])) {$x111->properties['file'] = '<image>/07_number.js';$x111->properties['line'] = 33;$x111->properties['column'] = 11;$x111->attributes['file'] = $x111->attributes['line'] = $x111->attributes['column'] = 0; }
throw new JSException($x111, 33, 11, '<image>/07_number.js');
}
$x107 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x108 = $x107($global, $global, $_isNaN, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x108, $global)) {

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
$x112 = $_radix;
if (!JS::toBoolean($x112, $global)) {
$x112 = 10; }
if ($Uradix) {$global->properties['radix'] = $_radix; $_radix =& $global->properties['radix']; }
$_radix = $x112;
$x114 = JS::toPrimitive($_radix, $global);
$x115 = JS::toPrimitive(2, $global);
$x116 = (is_string($x114) && is_string($x115) ? strcmp($x114, $x115) < 0 : (!is_nan($x117 = JS::toNumber($x114, $global)) && !is_nan($x118 = JS::toNumber($x115, $global)) && $x117 < $x118));
$x113 = $x116;
if (!JS::toBoolean($x113, $global)) {
$x119 = JS::toPrimitive($_radix, $global);
$x120 = JS::toPrimitive(36, $global);
$x121 = (is_string($x120) && is_string($x119) ? strcmp($x120, $x119) < 0 : (!is_nan($x122 = JS::toNumber($x120, $global)) && !is_nan($x123 = JS::toNumber($x119, $global)) && $x122 < $x123));
$x113 = $x121; }
if (JS::toBoolean($x113, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x126 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 52, 13, '<image>/07_number.js');
$_RangeError =& $x126[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x126;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x127 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 52, 13, '<image>/07_number.js');
$_ReferenceError =& $x127[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x127;
$x128 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 13);
$x129 = $x128($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x129->class) && $x129->class === 'Error' && !isset($x129->properties['file']) && !isset($x129->properties['line']) && !isset($x129->properties['column'])) {$x129->properties['file'] = '<image>/07_number.js';$x129->properties['line'] = 52;$x129->properties['column'] = 13;$x129->attributes['file'] = $x129->attributes['line'] = $x129->attributes['column'] = 0; }
throw new JSException($x129, 52, 13, '<image>/07_number.js');
}
$x124 = clone JS::$objectTemplate;
unset($x130, $W130, $S130, $U130);
$x131 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 52, 9, '<image>/07_number.js');
$x130 =& $x131[0]; list(,$W130,$S130,$U130) = $x131;
$x125 = $x130;
$x124->prototype = $x125;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x134 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 52, 9, '<image>/07_number.js');
$_TypeError =& $x134[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x134;
$x135 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x136 = $x135($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x136->class) && $x136->class === 'Error' && !isset($x136->properties['file']) && !isset($x136->properties['line']) && !isset($x136->properties['column'])) {$x136->properties['file'] = '<image>/07_number.js';$x136->properties['line'] = 52;$x136->properties['column'] = 9;$x136->attributes['file'] = $x136->attributes['line'] = $x136->attributes['column'] = 0; }
throw new JSException($x136, 52, 9, '<image>/07_number.js');
}
$x132 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x133 = $x132($global, $x124, $_RangeError, array('Number.prototype.toString(): radix is not between 2 and 36.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x125 = $x133;
if (is_object($x125) && $x125 !== JS::$undefined) { $x124 = $x125; }
if (isset($x124->class) && $x124->class === 'Error' && !isset($x124->properties['file']) && !isset($x124->properties['line']) && !isset($x124->properties['column'])) {$x124->properties['file'] = '<image>/07_number.js';$x124->properties['line'] = 52;$x124->properties['column'] = 3;$x124->attributes['file'] = $x124->attributes['line'] = $x124->attributes['column'] = 0; }
throw new JSException($x124, 52, 3, '<image>/07_number.js');;
};
return base_convert((string) $leThis->value, 10,$_radix);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x90=&$scope->properties[\'arguments\'];$x90->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x90->properties[$i]=$args[$i];$x90->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'radix\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_radix=&$scope->properties[\'radix\'];$Uradix=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(isset($leThis->class)&&$leThis->class!==\'Number\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x93=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',30,13,\'<image>/07_number.js\');$_TypeError=&$x93[0];list(,$WTypeError,$STypeError,$UTypeError)=$x93;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x94=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',30,13,\'<image>/07_number.js\');$_ReferenceError=&$x94[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x94;$x95=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,13);$x96=$x95($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x96->class)&&$x96->class===\'Error\'&&!isset($x96->properties[\'file\'])&&!isset($x96->properties[\'line\'])&&!isset($x96->properties[\'column\'])){$x96->properties[\'file\']=\'<image>/07_number.js\';$x96->properties[\'line\']=30;$x96->properties[\'column\']=13;$x96->attributes[\'file\']=$x96->attributes[\'line\']=$x96->attributes[\'column\']=0;}throw new JSException($x96,30,13,\'<image>/07_number.js\');}$x91=clone JS::$objectTemplate;unset($x97,$W97,$S97,$U97);$x98=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_TypeError,(string)\'prototype\',30,9,\'<image>/07_number.js\');$x97=&$x98[0];list(,$W97,$S97,$U97)=$x98;$x92=$x97;$x91->prototype=$x92;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x101=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x102=$x101($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x102->class)&&$x102->class===\'Error\'&&!isset($x102->properties[\'file\'])&&!isset($x102->properties[\'line\'])&&!isset($x102->properties[\'column\'])){$x102->properties[\'file\']=\'<image>/07_number.js\';$x102->properties[\'line\']=30;$x102->properties[\'column\']=9;$x102->attributes[\'file\']=$x102->attributes[\'line\']=$x102->attributes[\'column\']=0;}throw new JSException($x102,30,9,\'<image>/07_number.js\');}$x99=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x100=$x99($global,$x91,$_TypeError,array(\'Number.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x92=$x100;if(is_object($x92)&&$x92!==JS::$undefined){$x91=$x92;}if(isset($x91->class)&&$x91->class===\'Error\'&&!isset($x91->properties[\'file\'])&&!isset($x91->properties[\'line\'])&&!isset($x91->properties[\'column\'])){$x91->properties[\'file\']=\'<image>/07_number.js\';$x91->properties[\'line\']=30;$x91->properties[\'column\']=3;$x91->attributes[\'file\']=$x91->attributes[\'line\']=$x91->attributes[\'column\']=0;}throw new JSException($x91,30,3,\'<image>/07_number.js\');}unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x103=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',33,6,\'<image>/07_number.js\');$_isNaN=&$x103[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x103;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x104=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',33,6,\'<image>/07_number.js\');$_ReferenceError=&$x104[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x104;$x105=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,6);$x106=$x105($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x106->class)&&$x106->class===\'Error\'&&!isset($x106->properties[\'file\'])&&!isset($x106->properties[\'line\'])&&!isset($x106->properties[\'column\'])){$x106->properties[\'file\']=\'<image>/07_number.js\';$x106->properties[\'line\']=33;$x106->properties[\'column\']=6;$x106->attributes[\'file\']=$x106->attributes[\'line\']=$x106->attributes[\'column\']=0;}throw new JSException($x106,33,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x109=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',33,11,\'<image>/07_number.js\');$_TypeError=&$x109[0];list(,$WTypeError,$STypeError,$UTypeError)=$x109;$x110=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x111=$x110($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x111->class)&&$x111->class===\'Error\'&&!isset($x111->properties[\'file\'])&&!isset($x111->properties[\'line\'])&&!isset($x111->properties[\'column\'])){$x111->properties[\'file\']=\'<image>/07_number.js\';$x111->properties[\'line\']=33;$x111->properties[\'column\']=11;$x111->attributes[\'file\']=$x111->attributes[\'line\']=$x111->attributes[\'column\']=0;}throw new JSException($x111,33,11,\'<image>/07_number.js\');}$x107=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x108=$x107($global,$global,$_isNaN,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x108,$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}if(JS::toBoolean(is_float($leThis->value),$global)){return(string)$leThis->value;}$x112=$_radix;if(!JS::toBoolean($x112,$global)){$x112=10;}if($Uradix){$global->properties[\'radix\']=$_radix;$_radix=&$global->properties[\'radix\'];}$_radix=$x112;$x114=JS::toPrimitive($_radix,$global);$x115=JS::toPrimitive(2,$global);$x116=(is_string($x114)&&is_string($x115)?strcmp($x114,$x115)<0:(!is_nan($x117=JS::toNumber($x114,$global))&&!is_nan($x118=JS::toNumber($x115,$global))&&$x117<$x118));$x113=$x116;if(!JS::toBoolean($x113,$global)){$x119=JS::toPrimitive($_radix,$global);$x120=JS::toPrimitive(36,$global);$x121=(is_string($x120)&&is_string($x119)?strcmp($x120,$x119)<0:(!is_nan($x122=JS::toNumber($x120,$global))&&!is_nan($x123=JS::toNumber($x119,$global))&&$x122<$x123));$x113=$x121;}if(JS::toBoolean($x113,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x126=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',52,13,\'<image>/07_number.js\');$_RangeError=&$x126[0];list(,$WRangeError,$SRangeError,$URangeError)=$x126;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x127=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',52,13,\'<image>/07_number.js\');$_ReferenceError=&$x127[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x127;$x128=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,13);$x129=$x128($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x129->class)&&$x129->class===\'Error\'&&!isset($x129->properties[\'file\'])&&!isset($x129->properties[\'line\'])&&!isset($x129->properties[\'column\'])){$x129->properties[\'file\']=\'<image>/07_number.js\';$x129->properties[\'line\']=52;$x129->properties[\'column\']=13;$x129->attributes[\'file\']=$x129->attributes[\'line\']=$x129->attributes[\'column\']=0;}throw new JSException($x129,52,13,\'<image>/07_number.js\');}$x124=clone JS::$objectTemplate;unset($x130,$W130,$S130,$U130);$x131=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',52,9,\'<image>/07_number.js\');$x130=&$x131[0];list(,$W130,$S130,$U130)=$x131;$x125=$x130;$x124->prototype=$x125;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x134=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',52,9,\'<image>/07_number.js\');$_TypeError=&$x134[0];list(,$WTypeError,$STypeError,$UTypeError)=$x134;$x135=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x136=$x135($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x136->class)&&$x136->class===\'Error\'&&!isset($x136->properties[\'file\'])&&!isset($x136->properties[\'line\'])&&!isset($x136->properties[\'column\'])){$x136->properties[\'file\']=\'<image>/07_number.js\';$x136->properties[\'line\']=52;$x136->properties[\'column\']=9;$x136->attributes[\'file\']=$x136->attributes[\'line\']=$x136->attributes[\'column\']=0;}throw new JSException($x136,52,9,\'<image>/07_number.js\');}$x132=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x133=$x132($global,$x124,$_RangeError,array(\'Number.prototype.toString(): radix is not between 2 and 36.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x125=$x133;if(is_object($x125)&&$x125!==JS::$undefined){$x124=$x125;}if(isset($x124->class)&&$x124->class===\'Error\'&&!isset($x124->properties[\'file\'])&&!isset($x124->properties[\'line\'])&&!isset($x124->properties[\'column\'])){$x124->properties[\'file\']=\'<image>/07_number.js\';$x124->properties[\'line\']=52;$x124->properties[\'column\']=3;$x124->attributes[\'file\']=$x124->attributes[\'line\']=$x124->attributes[\'column\']=0;}throw new JSException($x124,52,3,\'<image>/07_number.js\');}return base_convert((string)$leThis->value,10,$_radix);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x163=&$scope->properties[\'arguments\'];$x163->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x163->properties[$i]=$args[$i];$x163->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value;return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x176 =& $scope->properties['arguments'];
$x176->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x176->properties[$i] = $args[$i];
$x176->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x178 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x177 = $x178;
if (JS::toBoolean($x177, $global)) {
$x180 = JS::toPrimitive($_fractionDigits, $global);
$x181 = JS::toPrimitive(0, $global);
$x182 = (is_string($x180) && is_string($x181) ? strcmp($x180, $x181) < 0 : (!is_nan($x183 = JS::toNumber($x180, $global)) && !is_nan($x184 = JS::toNumber($x181, $global)) && $x183 < $x184));
$x179 = $x182;
if (!JS::toBoolean($x179, $global)) {
$x185 = JS::toPrimitive($_fractionDigits, $global);
$x186 = JS::toPrimitive(20, $global);
$x187 = (is_string($x186) && is_string($x185) ? strcmp($x186, $x185) < 0 : (!is_nan($x188 = JS::toNumber($x186, $global)) && !is_nan($x189 = JS::toNumber($x185, $global)) && $x188 < $x189));
$x179 = $x187; }
$x177 = $x179; }
if (JS::toBoolean($x177, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x192 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 66, 13, '<image>/07_number.js');
$_RangeError =& $x192[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x192;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x193 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 66, 13, '<image>/07_number.js');
$_ReferenceError =& $x193[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x193;
$x194 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 13);
$x195 = $x194($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error' && !isset($x195->properties['file']) && !isset($x195->properties['line']) && !isset($x195->properties['column'])) {$x195->properties['file'] = '<image>/07_number.js';$x195->properties['line'] = 66;$x195->properties['column'] = 13;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 66, 13, '<image>/07_number.js');
}
$x190 = clone JS::$objectTemplate;
unset($x196, $W196, $S196, $U196);
$x197 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 66, 9, '<image>/07_number.js');
$x196 =& $x197[0]; list(,$W196,$S196,$U196) = $x197;
$x191 = $x196;
$x190->prototype = $x191;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x200 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 66, 9, '<image>/07_number.js');
$_TypeError =& $x200[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x200;
$x201 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x202 = $x201($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x202->class) && $x202->class === 'Error' && !isset($x202->properties['file']) && !isset($x202->properties['line']) && !isset($x202->properties['column'])) {$x202->properties['file'] = '<image>/07_number.js';$x202->properties['line'] = 66;$x202->properties['column'] = 9;$x202->attributes['file'] = $x202->attributes['line'] = $x202->attributes['column'] = 0; }
throw new JSException($x202, 66, 9, '<image>/07_number.js');
}
$x198 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x199 = $x198($global, $x190, $_RangeError, array('Number.prototype.toFixed(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x191 = $x199;
if (is_object($x191) && $x191 !== JS::$undefined) { $x190 = $x191; }
if (isset($x190->class) && $x190->class === 'Error' && !isset($x190->properties['file']) && !isset($x190->properties['line']) && !isset($x190->properties['column'])) {$x190->properties['file'] = '<image>/07_number.js';$x190->properties['line'] = 66;$x190->properties['column'] = 3;$x190->attributes['file'] = $x190->attributes['line'] = $x190->attributes['column'] = 0; }
throw new JSException($x190, 66, 3, '<image>/07_number.js');;
};
if (JS::toBoolean(is_nan($leThis->value), $global)) {

return 'NaN';;
};
$x203 = JS::toNumber($_fractionDigits, $global);
if ($UfractionDigits) {$global->properties['fractionDigits'] = $_fractionDigits; $_fractionDigits =& $global->properties['fractionDigits']; }
$_fractionDigits = $x203;
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x204 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 75, 6, '<image>/07_number.js');
$_isNaN =& $x204[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x204;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x205 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 75, 6, '<image>/07_number.js');
$_ReferenceError =& $x205[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x205;
$x206 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 6);
$x207 = $x206($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x207->class) && $x207->class === 'Error' && !isset($x207->properties['file']) && !isset($x207->properties['line']) && !isset($x207->properties['column'])) {$x207->properties['file'] = '<image>/07_number.js';$x207->properties['line'] = 75;$x207->properties['column'] = 6;$x207->attributes['file'] = $x207->attributes['line'] = $x207->attributes['column'] = 0; }
throw new JSException($x207, 75, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x210 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 75, 11, '<image>/07_number.js');
$_TypeError =& $x210[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x210;
$x211 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x212 = $x211($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x212->class) && $x212->class === 'Error' && !isset($x212->properties['file']) && !isset($x212->properties['line']) && !isset($x212->properties['column'])) {$x212->properties['file'] = '<image>/07_number.js';$x212->properties['line'] = 75;$x212->properties['column'] = 11;$x212->attributes['file'] = $x212->attributes['line'] = $x212->attributes['column'] = 0; }
throw new JSException($x212, 75, 11, '<image>/07_number.js');
}
$x208 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x209 = $x208($global, $global, $_isNaN, array($_fractionDigits), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x209, $global)) {

return (string) intval(round($leThis->value));;
};
return sprintf('%.' .$_fractionDigits. 'f', $leThis->value);
return sprintf('%f', $leThis->value);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x176=&$scope->properties[\'arguments\'];$x176->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x176->properties[$i]=$args[$i];$x176->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x178=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x177=$x178;if(JS::toBoolean($x177,$global)){$x180=JS::toPrimitive($_fractionDigits,$global);$x181=JS::toPrimitive(0,$global);$x182=(is_string($x180)&&is_string($x181)?strcmp($x180,$x181)<0:(!is_nan($x183=JS::toNumber($x180,$global))&&!is_nan($x184=JS::toNumber($x181,$global))&&$x183<$x184));$x179=$x182;if(!JS::toBoolean($x179,$global)){$x185=JS::toPrimitive($_fractionDigits,$global);$x186=JS::toPrimitive(20,$global);$x187=(is_string($x186)&&is_string($x185)?strcmp($x186,$x185)<0:(!is_nan($x188=JS::toNumber($x186,$global))&&!is_nan($x189=JS::toNumber($x185,$global))&&$x188<$x189));$x179=$x187;}$x177=$x179;}if(JS::toBoolean($x177,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x192=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',66,13,\'<image>/07_number.js\');$_RangeError=&$x192[0];list(,$WRangeError,$SRangeError,$URangeError)=$x192;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x193=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',66,13,\'<image>/07_number.js\');$_ReferenceError=&$x193[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x193;$x194=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,13);$x195=$x194($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/07_number.js\';$x195->properties[\'line\']=66;$x195->properties[\'column\']=13;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,66,13,\'<image>/07_number.js\');}$x190=clone JS::$objectTemplate;unset($x196,$W196,$S196,$U196);$x197=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',66,9,\'<image>/07_number.js\');$x196=&$x197[0];list(,$W196,$S196,$U196)=$x197;$x191=$x196;$x190->prototype=$x191;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x200=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',66,9,\'<image>/07_number.js\');$_TypeError=&$x200[0];list(,$WTypeError,$STypeError,$UTypeError)=$x200;$x201=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x202=$x201($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x202->class)&&$x202->class===\'Error\'&&!isset($x202->properties[\'file\'])&&!isset($x202->properties[\'line\'])&&!isset($x202->properties[\'column\'])){$x202->properties[\'file\']=\'<image>/07_number.js\';$x202->properties[\'line\']=66;$x202->properties[\'column\']=9;$x202->attributes[\'file\']=$x202->attributes[\'line\']=$x202->attributes[\'column\']=0;}throw new JSException($x202,66,9,\'<image>/07_number.js\');}$x198=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x199=$x198($global,$x190,$_RangeError,array(\'Number.prototype.toFixed(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x191=$x199;if(is_object($x191)&&$x191!==JS::$undefined){$x190=$x191;}if(isset($x190->class)&&$x190->class===\'Error\'&&!isset($x190->properties[\'file\'])&&!isset($x190->properties[\'line\'])&&!isset($x190->properties[\'column\'])){$x190->properties[\'file\']=\'<image>/07_number.js\';$x190->properties[\'line\']=66;$x190->properties[\'column\']=3;$x190->attributes[\'file\']=$x190->attributes[\'line\']=$x190->attributes[\'column\']=0;}throw new JSException($x190,66,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}$x203=JS::toNumber($_fractionDigits,$global);if($UfractionDigits){$global->properties[\'fractionDigits\']=$_fractionDigits;$_fractionDigits=&$global->properties[\'fractionDigits\'];}$_fractionDigits=$x203;unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x204=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',75,6,\'<image>/07_number.js\');$_isNaN=&$x204[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x204;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x205=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',75,6,\'<image>/07_number.js\');$_ReferenceError=&$x205[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x205;$x206=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,6);$x207=$x206($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x207->class)&&$x207->class===\'Error\'&&!isset($x207->properties[\'file\'])&&!isset($x207->properties[\'line\'])&&!isset($x207->properties[\'column\'])){$x207->properties[\'file\']=\'<image>/07_number.js\';$x207->properties[\'line\']=75;$x207->properties[\'column\']=6;$x207->attributes[\'file\']=$x207->attributes[\'line\']=$x207->attributes[\'column\']=0;}throw new JSException($x207,75,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x210=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',75,11,\'<image>/07_number.js\');$_TypeError=&$x210[0];list(,$WTypeError,$STypeError,$UTypeError)=$x210;$x211=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x212=$x211($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x212->class)&&$x212->class===\'Error\'&&!isset($x212->properties[\'file\'])&&!isset($x212->properties[\'line\'])&&!isset($x212->properties[\'column\'])){$x212->properties[\'file\']=\'<image>/07_number.js\';$x212->properties[\'line\']=75;$x212->properties[\'column\']=11;$x212->attributes[\'file\']=$x212->attributes[\'line\']=$x212->attributes[\'column\']=0;}throw new JSException($x212,75,11,\'<image>/07_number.js\');}$x208=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x209=$x208($global,$global,$_isNaN,array($_fractionDigits),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x209,$global)){return(string)intval(round($leThis->value));}return sprintf(\'%.\'.$_fractionDigits.\'f\',$leThis->value);return sprintf(\'%f\',$leThis->value);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x225 =& $scope->properties['arguments'];
$x225->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x225->properties[$i] = $args[$i];
$x225->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x227 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x226 = $x227;
if (JS::toBoolean($x226, $global)) {
$x229 = JS::toPrimitive($_fractionDigits, $global);
$x230 = JS::toPrimitive(0, $global);
$x231 = (is_string($x229) && is_string($x230) ? strcmp($x229, $x230) < 0 : (!is_nan($x232 = JS::toNumber($x229, $global)) && !is_nan($x233 = JS::toNumber($x230, $global)) && $x232 < $x233));
$x228 = $x231;
if (!JS::toBoolean($x228, $global)) {
$x234 = JS::toPrimitive($_fractionDigits, $global);
$x235 = JS::toPrimitive(20, $global);
$x236 = (is_string($x235) && is_string($x234) ? strcmp($x235, $x234) < 0 : (!is_nan($x237 = JS::toNumber($x235, $global)) && !is_nan($x238 = JS::toNumber($x234, $global)) && $x237 < $x238));
$x228 = $x236; }
$x226 = $x228; }
if (JS::toBoolean($x226, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x241 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 86, 13, '<image>/07_number.js');
$_RangeError =& $x241[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x241;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x242 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 86, 13, '<image>/07_number.js');
$_ReferenceError =& $x242[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x242;
$x243 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 13);
$x244 = $x243($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x244->class) && $x244->class === 'Error' && !isset($x244->properties['file']) && !isset($x244->properties['line']) && !isset($x244->properties['column'])) {$x244->properties['file'] = '<image>/07_number.js';$x244->properties['line'] = 86;$x244->properties['column'] = 13;$x244->attributes['file'] = $x244->attributes['line'] = $x244->attributes['column'] = 0; }
throw new JSException($x244, 86, 13, '<image>/07_number.js');
}
$x239 = clone JS::$objectTemplate;
unset($x245, $W245, $S245, $U245);
$x246 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 86, 9, '<image>/07_number.js');
$x245 =& $x246[0]; list(,$W245,$S245,$U245) = $x246;
$x240 = $x245;
$x239->prototype = $x240;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x249 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 86, 9, '<image>/07_number.js');
$_TypeError =& $x249[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x249;
$x250 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x251 = $x250($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x251->class) && $x251->class === 'Error' && !isset($x251->properties['file']) && !isset($x251->properties['line']) && !isset($x251->properties['column'])) {$x251->properties['file'] = '<image>/07_number.js';$x251->properties['line'] = 86;$x251->properties['column'] = 9;$x251->attributes['file'] = $x251->attributes['line'] = $x251->attributes['column'] = 0; }
throw new JSException($x251, 86, 9, '<image>/07_number.js');
}
$x247 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x248 = $x247($global, $x239, $_RangeError, array('Number.prototype.toExponential(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x240 = $x248;
if (is_object($x240) && $x240 !== JS::$undefined) { $x239 = $x240; }
if (isset($x239->class) && $x239->class === 'Error' && !isset($x239->properties['file']) && !isset($x239->properties['line']) && !isset($x239->properties['column'])) {$x239->properties['file'] = '<image>/07_number.js';$x239->properties['line'] = 86;$x239->properties['column'] = 3;$x239->attributes['file'] = $x239->attributes['line'] = $x239->attributes['column'] = 0; }
throw new JSException($x239, 86, 3, '<image>/07_number.js');;
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
$x252 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
if (JS::toBoolean($x252, $global)) {
$scope->properties['d'] = JS::$undefined; $_d =& $scope->properties['d'];
$Ud = FALSE;
$_d = JS::toNumber($_fractionDigits, $global);
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x253 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 104, 7, '<image>/07_number.js');
$_isNaN =& $x253[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x253;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x254 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 104, 7, '<image>/07_number.js');
$_ReferenceError =& $x254[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x254;
$x255 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 7);
$x256 = $x255($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x256->class) && $x256->class === 'Error' && !isset($x256->properties['file']) && !isset($x256->properties['line']) && !isset($x256->properties['column'])) {$x256->properties['file'] = '<image>/07_number.js';$x256->properties['line'] = 104;$x256->properties['column'] = 7;$x256->attributes['file'] = $x256->attributes['line'] = $x256->attributes['column'] = 0; }
throw new JSException($x256, 104, 7, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x259 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 104, 12, '<image>/07_number.js');
$_TypeError =& $x259[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x259;
$x260 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x261 = $x260($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x261->class) && $x261->class === 'Error' && !isset($x261->properties['file']) && !isset($x261->properties['line']) && !isset($x261->properties['column'])) {$x261->properties['file'] = '<image>/07_number.js';$x261->properties['line'] = 104;$x261->properties['column'] = 12;$x261->attributes['file'] = $x261->attributes['line'] = $x261->attributes['column'] = 0; }
throw new JSException($x261, 104, 12, '<image>/07_number.js');
}
$x257 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x258 = $x257($global, $global, $_isNaN, array($_d), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x258, $global)) {
$x262 = 0;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x262;;
};
return sprintf('%.' .$_d. 'e', $leThis->value);;
};
return preg_replace('/[.]?0+e/', 'e', sprintf('%e', $leThis->value));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x225=&$scope->properties[\'arguments\'];$x225->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x225->properties[$i]=$args[$i];$x225->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x227=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x226=$x227;if(JS::toBoolean($x226,$global)){$x229=JS::toPrimitive($_fractionDigits,$global);$x230=JS::toPrimitive(0,$global);$x231=(is_string($x229)&&is_string($x230)?strcmp($x229,$x230)<0:(!is_nan($x232=JS::toNumber($x229,$global))&&!is_nan($x233=JS::toNumber($x230,$global))&&$x232<$x233));$x228=$x231;if(!JS::toBoolean($x228,$global)){$x234=JS::toPrimitive($_fractionDigits,$global);$x235=JS::toPrimitive(20,$global);$x236=(is_string($x235)&&is_string($x234)?strcmp($x235,$x234)<0:(!is_nan($x237=JS::toNumber($x235,$global))&&!is_nan($x238=JS::toNumber($x234,$global))&&$x237<$x238));$x228=$x236;}$x226=$x228;}if(JS::toBoolean($x226,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x241=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',86,13,\'<image>/07_number.js\');$_RangeError=&$x241[0];list(,$WRangeError,$SRangeError,$URangeError)=$x241;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x242=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',86,13,\'<image>/07_number.js\');$_ReferenceError=&$x242[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x242;$x243=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,13);$x244=$x243($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x244->class)&&$x244->class===\'Error\'&&!isset($x244->properties[\'file\'])&&!isset($x244->properties[\'line\'])&&!isset($x244->properties[\'column\'])){$x244->properties[\'file\']=\'<image>/07_number.js\';$x244->properties[\'line\']=86;$x244->properties[\'column\']=13;$x244->attributes[\'file\']=$x244->attributes[\'line\']=$x244->attributes[\'column\']=0;}throw new JSException($x244,86,13,\'<image>/07_number.js\');}$x239=clone JS::$objectTemplate;unset($x245,$W245,$S245,$U245);$x246=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',86,9,\'<image>/07_number.js\');$x245=&$x246[0];list(,$W245,$S245,$U245)=$x246;$x240=$x245;$x239->prototype=$x240;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x249=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',86,9,\'<image>/07_number.js\');$_TypeError=&$x249[0];list(,$WTypeError,$STypeError,$UTypeError)=$x249;$x250=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x251=$x250($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x251->class)&&$x251->class===\'Error\'&&!isset($x251->properties[\'file\'])&&!isset($x251->properties[\'line\'])&&!isset($x251->properties[\'column\'])){$x251->properties[\'file\']=\'<image>/07_number.js\';$x251->properties[\'line\']=86;$x251->properties[\'column\']=9;$x251->attributes[\'file\']=$x251->attributes[\'line\']=$x251->attributes[\'column\']=0;}throw new JSException($x251,86,9,\'<image>/07_number.js\');}$x247=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x248=$x247($global,$x239,$_RangeError,array(\'Number.prototype.toExponential(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x240=$x248;if(is_object($x240)&&$x240!==JS::$undefined){$x239=$x240;}if(isset($x239->class)&&$x239->class===\'Error\'&&!isset($x239->properties[\'file\'])&&!isset($x239->properties[\'line\'])&&!isset($x239->properties[\'column\'])){$x239->properties[\'file\']=\'<image>/07_number.js\';$x239->properties[\'line\']=86;$x239->properties[\'column\']=3;$x239->attributes[\'file\']=$x239->attributes[\'line\']=$x239->attributes[\'column\']=0;}throw new JSException($x239,86,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}$x252=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));if(JS::toBoolean($x252,$global)){$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::toNumber($_fractionDigits,$global);unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x253=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',104,7,\'<image>/07_number.js\');$_isNaN=&$x253[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x253;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x254=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',104,7,\'<image>/07_number.js\');$_ReferenceError=&$x254[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x254;$x255=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,7);$x256=$x255($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x256->class)&&$x256->class===\'Error\'&&!isset($x256->properties[\'file\'])&&!isset($x256->properties[\'line\'])&&!isset($x256->properties[\'column\'])){$x256->properties[\'file\']=\'<image>/07_number.js\';$x256->properties[\'line\']=104;$x256->properties[\'column\']=7;$x256->attributes[\'file\']=$x256->attributes[\'line\']=$x256->attributes[\'column\']=0;}throw new JSException($x256,104,7,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x259=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',104,12,\'<image>/07_number.js\');$_TypeError=&$x259[0];list(,$WTypeError,$STypeError,$UTypeError)=$x259;$x260=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x261=$x260($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x261->class)&&$x261->class===\'Error\'&&!isset($x261->properties[\'file\'])&&!isset($x261->properties[\'line\'])&&!isset($x261->properties[\'column\'])){$x261->properties[\'file\']=\'<image>/07_number.js\';$x261->properties[\'line\']=104;$x261->properties[\'column\']=12;$x261->attributes[\'file\']=$x261->attributes[\'line\']=$x261->attributes[\'column\']=0;}throw new JSException($x261,104,12,\'<image>/07_number.js\');}$x257=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x258=$x257($global,$global,$_isNaN,array($_d),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x258,$global)){$x262=0;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x262;}return sprintf(\'%.\'.$_d.\'e\',$leThis->value);}return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%e\',$leThis->value));return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x275 =& $scope->properties['arguments'];
$x275->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x275->properties[$i] = $args[$i];
$x275->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['precision'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_precision =& $scope->properties['precision'];
$Uprecision = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x276 = (((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
if (JS::toBoolean($x276, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x278 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 116, 23, '<image>/07_number.js');
$_TypeError =& $x278[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x278;
$x279 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x280 = $x279($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x280->class) && $x280->class === 'Error' && !isset($x280->properties['file']) && !isset($x280->properties['line']) && !isset($x280->properties['column'])) {$x280->properties['file'] = '<image>/07_number.js';$x280->properties['line'] = 116;$x280->properties['column'] = 23;$x280->attributes['file'] = $x280->attributes['line'] = $x280->attributes['column'] = 0; }
throw new JSException($x280, 116, 23, '<image>/07_number.js');
}
$x277 = JS::toObject($leThis, $global);
unset($x281, $W281, $S281, $U281);
$x282 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x277, (string) 'toString', 116, 23, '<image>/07_number.js');
$x281 =& $x282[0]; list(,$W281,$S281,$U281) = $x282;
if (!(is_object($x281) && isset($x281->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x285 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 116, 23, '<image>/07_number.js');
$_TypeError =& $x285[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x285;
$x286 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x287 = $x286($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x287->class) && $x287->class === 'Error' && !isset($x287->properties['file']) && !isset($x287->properties['line']) && !isset($x287->properties['column'])) {$x287->properties['file'] = '<image>/07_number.js';$x287->properties['line'] = 116;$x287->properties['column'] = 23;$x287->attributes['file'] = $x287->attributes['line'] = $x287->attributes['column'] = 0; }
throw new JSException($x287, 116, 23, '<image>/07_number.js');
}
$x283 = $x281->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x284 = $x283($global, $x277, $x281, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x284;;
};
$x290 = !(((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
$x289 = $x290;
if (JS::toBoolean($x289, $global)) {
$x292 = JS::toPrimitive($_precision, $global);
$x293 = JS::toPrimitive(1, $global);
$x294 = (is_string($x292) && is_string($x293) ? strcmp($x292, $x293) < 0 : (!is_nan($x295 = JS::toNumber($x292, $global)) && !is_nan($x296 = JS::toNumber($x293, $global)) && $x295 < $x296));
$x291 = $x294;
if (!JS::toBoolean($x291, $global)) {
$x297 = JS::toPrimitive($_precision, $global);
$x298 = JS::toPrimitive(21, $global);
$x299 = (is_string($x298) && is_string($x297) ? strcmp($x298, $x297) < 0 : (!is_nan($x300 = JS::toNumber($x298, $global)) && !is_nan($x301 = JS::toNumber($x297, $global)) && $x300 < $x301));
$x291 = $x299; }
$x289 = $x291; }
$x288 = $x289;
if (!JS::toBoolean($x288, $global)) {
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x302 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'isNaN', 119, 70, '<image>/07_number.js');
$_isNaN =& $x302[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x302;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x303 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 119, 70, '<image>/07_number.js');
$_ReferenceError =& $x303[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x303;
$x304 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 70);
$x305 = $x304($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x305->class) && $x305->class === 'Error' && !isset($x305->properties['file']) && !isset($x305->properties['line']) && !isset($x305->properties['column'])) {$x305->properties['file'] = '<image>/07_number.js';$x305->properties['line'] = 119;$x305->properties['column'] = 70;$x305->attributes['file'] = $x305->attributes['line'] = $x305->attributes['column'] = 0; }
throw new JSException($x305, 119, 70, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x308 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 119, 75, '<image>/07_number.js');
$_TypeError =& $x308[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x308;
$x309 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x310 = $x309($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x310->class) && $x310->class === 'Error' && !isset($x310->properties['file']) && !isset($x310->properties['line']) && !isset($x310->properties['column'])) {$x310->properties['file'] = '<image>/07_number.js';$x310->properties['line'] = 119;$x310->properties['column'] = 75;$x310->attributes['file'] = $x310->attributes['line'] = $x310->attributes['column'] = 0; }
throw new JSException($x310, 119, 75, '<image>/07_number.js');
}
$x306 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x307 = $x306($global, $global, $_isNaN, array($_precision), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x288 = $x307; }
if (JS::toBoolean($x288, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x313 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'RangeError', 120, 13, '<image>/07_number.js');
$_RangeError =& $x313[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x313;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x314 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 120, 13, '<image>/07_number.js');
$_ReferenceError =& $x314[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x314;
$x315 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 13);
$x316 = $x315($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x316->class) && $x316->class === 'Error' && !isset($x316->properties['file']) && !isset($x316->properties['line']) && !isset($x316->properties['column'])) {$x316->properties['file'] = '<image>/07_number.js';$x316->properties['line'] = 120;$x316->properties['column'] = 13;$x316->attributes['file'] = $x316->attributes['line'] = $x316->attributes['column'] = 0; }
throw new JSException($x316, 120, 13, '<image>/07_number.js');
}
$x311 = clone JS::$objectTemplate;
unset($x317, $W317, $S317, $U317);
$x318 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, (string) 'prototype', 120, 9, '<image>/07_number.js');
$x317 =& $x318[0]; list(,$W317,$S317,$U317) = $x318;
$x312 = $x317;
$x311->prototype = $x312;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x321 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 120, 9, '<image>/07_number.js');
$_TypeError =& $x321[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x321;
$x322 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x323 = $x322($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x323->class) && $x323->class === 'Error' && !isset($x323->properties['file']) && !isset($x323->properties['line']) && !isset($x323->properties['column'])) {$x323->properties['file'] = '<image>/07_number.js';$x323->properties['line'] = 120;$x323->properties['column'] = 9;$x323->attributes['file'] = $x323->attributes['line'] = $x323->attributes['column'] = 0; }
throw new JSException($x323, 120, 9, '<image>/07_number.js');
}
$x319 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x320 = $x319($global, $x311, $_RangeError, array('Number.prototype.toPrecision(): precision must be between 1 and 21'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x312 = $x320;
if (is_object($x312) && $x312 !== JS::$undefined) { $x311 = $x312; }
if (isset($x311->class) && $x311->class === 'Error' && !isset($x311->properties['file']) && !isset($x311->properties['line']) && !isset($x311->properties['column'])) {$x311->properties['file'] = '<image>/07_number.js';$x311->properties['line'] = 120;$x311->properties['column'] = 3;$x311->attributes['file'] = $x311->attributes['line'] = $x311->attributes['column'] = 0; }
throw new JSException($x311, 120, 3, '<image>/07_number.js');;
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
$x324 = JS::toNumber($_precision, $global);
if ($Uprecision) {$global->properties['precision'] = $_precision; $_precision =& $global->properties['precision']; }
$_precision = $x324;
return preg_replace('/[.]?0+e/', 'e', sprintf('%.' . JS::toString($_precision, $global) . 'g',
		round($leThis->value,$_precision- strlen((string) intval($leThis->value)))));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x275=&$scope->properties[\'arguments\'];$x275->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x275->properties[$i]=$args[$i];$x275->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'precision\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_precision=&$scope->properties[\'precision\'];$Uprecision=FALSE;$global->scope[++$global->scope_sp]=$scope;$x276=(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));if(JS::toBoolean($x276,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x278=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',116,23,\'<image>/07_number.js\');$_TypeError=&$x278[0];list(,$WTypeError,$STypeError,$UTypeError)=$x278;$x279=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x280=$x279($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x280->class)&&$x280->class===\'Error\'&&!isset($x280->properties[\'file\'])&&!isset($x280->properties[\'line\'])&&!isset($x280->properties[\'column\'])){$x280->properties[\'file\']=\'<image>/07_number.js\';$x280->properties[\'line\']=116;$x280->properties[\'column\']=23;$x280->attributes[\'file\']=$x280->attributes[\'line\']=$x280->attributes[\'column\']=0;}throw new JSException($x280,116,23,\'<image>/07_number.js\');}$x277=JS::toObject($leThis,$global);unset($x281,$W281,$S281,$U281);$x282=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$x277,(string)\'toString\',116,23,\'<image>/07_number.js\');$x281=&$x282[0];list(,$W281,$S281,$U281)=$x282;if(!(is_object($x281)&&isset($x281->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x285=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',116,23,\'<image>/07_number.js\');$_TypeError=&$x285[0];list(,$WTypeError,$STypeError,$UTypeError)=$x285;$x286=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x287=$x286($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x287->class)&&$x287->class===\'Error\'&&!isset($x287->properties[\'file\'])&&!isset($x287->properties[\'line\'])&&!isset($x287->properties[\'column\'])){$x287->properties[\'file\']=\'<image>/07_number.js\';$x287->properties[\'line\']=116;$x287->properties[\'column\']=23;$x287->attributes[\'file\']=$x287->attributes[\'line\']=$x287->attributes[\'column\']=0;}throw new JSException($x287,116,23,\'<image>/07_number.js\');}$x283=$x281->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x284=$x283($global,$x277,$x281,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x284;}$x290=!(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));$x289=$x290;if(JS::toBoolean($x289,$global)){$x292=JS::toPrimitive($_precision,$global);$x293=JS::toPrimitive(1,$global);$x294=(is_string($x292)&&is_string($x293)?strcmp($x292,$x293)<0:(!is_nan($x295=JS::toNumber($x292,$global))&&!is_nan($x296=JS::toNumber($x293,$global))&&$x295<$x296));$x291=$x294;if(!JS::toBoolean($x291,$global)){$x297=JS::toPrimitive($_precision,$global);$x298=JS::toPrimitive(21,$global);$x299=(is_string($x298)&&is_string($x297)?strcmp($x298,$x297)<0:(!is_nan($x300=JS::toNumber($x298,$global))&&!is_nan($x301=JS::toNumber($x297,$global))&&$x300<$x301));$x291=$x299;}$x289=$x291;}$x288=$x289;if(!JS::toBoolean($x288,$global)){unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x302=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'isNaN\',119,70,\'<image>/07_number.js\');$_isNaN=&$x302[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x302;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x303=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',119,70,\'<image>/07_number.js\');$_ReferenceError=&$x303[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x303;$x304=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,70);$x305=$x304($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x305->class)&&$x305->class===\'Error\'&&!isset($x305->properties[\'file\'])&&!isset($x305->properties[\'line\'])&&!isset($x305->properties[\'column\'])){$x305->properties[\'file\']=\'<image>/07_number.js\';$x305->properties[\'line\']=119;$x305->properties[\'column\']=70;$x305->attributes[\'file\']=$x305->attributes[\'line\']=$x305->attributes[\'column\']=0;}throw new JSException($x305,119,70,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x308=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',119,75,\'<image>/07_number.js\');$_TypeError=&$x308[0];list(,$WTypeError,$STypeError,$UTypeError)=$x308;$x309=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x310=$x309($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x310->class)&&$x310->class===\'Error\'&&!isset($x310->properties[\'file\'])&&!isset($x310->properties[\'line\'])&&!isset($x310->properties[\'column\'])){$x310->properties[\'file\']=\'<image>/07_number.js\';$x310->properties[\'line\']=119;$x310->properties[\'column\']=75;$x310->attributes[\'file\']=$x310->attributes[\'line\']=$x310->attributes[\'column\']=0;}throw new JSException($x310,119,75,\'<image>/07_number.js\');}$x306=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x307=$x306($global,$global,$_isNaN,array($_precision),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x288=$x307;}if(JS::toBoolean($x288,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x313=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'RangeError\',120,13,\'<image>/07_number.js\');$_RangeError=&$x313[0];list(,$WRangeError,$SRangeError,$URangeError)=$x313;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x314=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'ReferenceError\',120,13,\'<image>/07_number.js\');$_ReferenceError=&$x314[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x314;$x315=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,13);$x316=$x315($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x316->class)&&$x316->class===\'Error\'&&!isset($x316->properties[\'file\'])&&!isset($x316->properties[\'line\'])&&!isset($x316->properties[\'column\'])){$x316->properties[\'file\']=\'<image>/07_number.js\';$x316->properties[\'line\']=120;$x316->properties[\'column\']=13;$x316->attributes[\'file\']=$x316->attributes[\'line\']=$x316->attributes[\'column\']=0;}throw new JSException($x316,120,13,\'<image>/07_number.js\');}$x311=clone JS::$objectTemplate;unset($x317,$W317,$S317,$U317);$x318=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,(string)\'prototype\',120,9,\'<image>/07_number.js\');$x317=&$x318[0];list(,$W317,$S317,$U317)=$x318;$x312=$x317;$x311->prototype=$x312;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x321=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,(string)\'TypeError\',120,9,\'<image>/07_number.js\');$_TypeError=&$x321[0];list(,$WTypeError,$STypeError,$UTypeError)=$x321;$x322=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x323=$x322($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x323->class)&&$x323->class===\'Error\'&&!isset($x323->properties[\'file\'])&&!isset($x323->properties[\'line\'])&&!isset($x323->properties[\'column\'])){$x323->properties[\'file\']=\'<image>/07_number.js\';$x323->properties[\'line\']=120;$x323->properties[\'column\']=9;$x323->attributes[\'file\']=$x323->attributes[\'line\']=$x323->attributes[\'column\']=0;}throw new JSException($x323,120,9,\'<image>/07_number.js\');}$x319=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x320=$x319($global,$x311,$_RangeError,array(\'Number.prototype.toPrecision(): precision must be between 1 and 21\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x312=$x320;if(is_object($x312)&&$x312!==JS::$undefined){$x311=$x312;}if(isset($x311->class)&&$x311->class===\'Error\'&&!isset($x311->properties[\'file\'])&&!isset($x311->properties[\'line\'])&&!isset($x311->properties[\'column\'])){$x311->properties[\'file\']=\'<image>/07_number.js\';$x311->properties[\'line\']=120;$x311->properties[\'column\']=3;$x311->attributes[\'file\']=$x311->attributes[\'line\']=$x311->attributes[\'column\']=0;}throw new JSException($x311,120,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}$x324=JS::toNumber($_precision,$global);if($Uprecision){$global->properties[\'precision\']=$_precision;$_precision=&$global->properties[\'precision\'];}$_precision=$x324;return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%.\'.JS::toString($_precision,$global).\'g\',round($leThis->value,$_precision-strlen((string)intval($leThis->value)))));return JS::$undefined;}', "\n";
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
$x5 = PHP_INT_MAX;
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x8 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 16, 18, '<image>/07_number.js');
$_TypeError =& $x8[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x8;
$x9 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 16, 18);
$x10 = $x9($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x10->class) && $x10->class === 'Error' && !isset($x10->properties['file']) && !isset($x10->properties['line']) && !isset($x10->properties['column'])) {$x10->properties['file'] = '<image>/07_number.js';$x10->properties['line'] = 16;$x10->properties['column'] = 18;$x10->attributes['file'] = $x10->attributes['line'] = $x10->attributes['column'] = 0; }
throw new JSException($x10, 16, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x11, $W11, $S11, $U11);
$x15 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'MAX_VALUE', 16, 18, '<image>/07_number.js');
$x11 =& $x15[0]; list(,$W11,$S11,$U11) = $x15;
if ($U11 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['MAX_VALUE'] = $x11; $x11 =& $_Number->properties['MAX_VALUE']; $_Number->attributes['MAX_VALUE'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U11 = FALSE; $W11 = TRUE; }
if (isset($S11)) {
$x17 = $S11->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 16, 18);
$x18 = $x17($global, $_Number, $S11, array($x5), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x16 = $x18;
} else {
if (!$U11) {$x16 = $x5;if ($W11) { $x11 = $x5; }  }
else { $x16 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('MAX_VALUE') && 'MAX_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MAX_VALUE' + 1; };
$x19 = (int) PHP_INT_MAX + 1;
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x20 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 17, 18, '<image>/07_number.js');
$_TypeError =& $x20[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x20;
$x21 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x22 = $x21($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x22->class) && $x22->class === 'Error' && !isset($x22->properties['file']) && !isset($x22->properties['line']) && !isset($x22->properties['column'])) {$x22->properties['file'] = '<image>/07_number.js';$x22->properties['line'] = 17;$x22->properties['column'] = 18;$x22->attributes['file'] = $x22->attributes['line'] = $x22->attributes['column'] = 0; }
throw new JSException($x22, 17, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x23, $W23, $S23, $U23);
$x24 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'MIN_VALUE', 17, 18, '<image>/07_number.js');
$x23 =& $x24[0]; list(,$W23,$S23,$U23) = $x24;
if ($U23 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['MIN_VALUE'] = $x23; $x23 =& $_Number->properties['MIN_VALUE']; $_Number->attributes['MIN_VALUE'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U23 = FALSE; $W23 = TRUE; }
if (isset($S23)) {
$x26 = $S23->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x27 = $x26($global, $_Number, $S23, array($x19), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x25 = $x27;
} else {
if (!$U23) {$x25 = $x19;if ($W23) { $x23 = $x19; }  }
else { $x25 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('MIN_VALUE') && 'MIN_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MIN_VALUE' + 1; };
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x28 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'NaN', 18, 14, '<image>/07_number.js');
$_NaN =& $x28[0]; list(,$WNaN,$SNaN,$UNaN) = $x28;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x29 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 18, 14, '<image>/07_number.js');
$_ReferenceError =& $x29[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x29;
$x30 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 14);
$x31 = $x30($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x31->class) && $x31->class === 'Error' && !isset($x31->properties['file']) && !isset($x31->properties['line']) && !isset($x31->properties['column'])) {$x31->properties['file'] = '<image>/07_number.js';$x31->properties['line'] = 18;$x31->properties['column'] = 14;$x31->attributes['file'] = $x31->attributes['line'] = $x31->attributes['column'] = 0; }
throw new JSException($x31, 18, 14, '<image>/07_number.js');
}
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x32 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 18, 12, '<image>/07_number.js');
$_TypeError =& $x32[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x32;
$x33 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x34 = $x33($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x34->class) && $x34->class === 'Error' && !isset($x34->properties['file']) && !isset($x34->properties['line']) && !isset($x34->properties['column'])) {$x34->properties['file'] = '<image>/07_number.js';$x34->properties['line'] = 18;$x34->properties['column'] = 12;$x34->attributes['file'] = $x34->attributes['line'] = $x34->attributes['column'] = 0; }
throw new JSException($x34, 18, 12, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x35, $W35, $S35, $U35);
$x36 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'NaN', 18, 12, '<image>/07_number.js');
$x35 =& $x36[0]; list(,$W35,$S35,$U35) = $x36;
if ($U35 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['NaN'] = $x35; $x35 =& $_Number->properties['NaN']; $_Number->attributes['NaN'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U35 = FALSE; $W35 = TRUE; }
if (isset($S35)) {
$x38 = $S35->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x39 = $x38($global, $_Number, $S35, array($_NaN), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x37 = $x39;
} else {
if (!$U35) {$x37 = $_NaN;if ($W35) { $x35 = $_NaN; }  }
else { $x37 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('NaN') && 'NaN' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NaN' + 1; };
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x40 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'Infinity', 19, 29, '<image>/07_number.js');
$_Infinity =& $x40[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x40;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x41 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 19, 29, '<image>/07_number.js');
$_ReferenceError =& $x41[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x41;
$x42 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 29);
$x43 = $x42($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x43->class) && $x43->class === 'Error' && !isset($x43->properties['file']) && !isset($x43->properties['line']) && !isset($x43->properties['column'])) {$x43->properties['file'] = '<image>/07_number.js';$x43->properties['line'] = 19;$x43->properties['column'] = 29;$x43->attributes['file'] = $x43->attributes['line'] = $x43->attributes['column'] = 0; }
throw new JSException($x43, 19, 29, '<image>/07_number.js');
}
$x44 = (-1.0 * JS::toNumber($_Infinity, $global));
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x45 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 19, 26, '<image>/07_number.js');
$_TypeError =& $x45[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x45;
$x46 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x47 = $x46($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x47->class) && $x47->class === 'Error' && !isset($x47->properties['file']) && !isset($x47->properties['line']) && !isset($x47->properties['column'])) {$x47->properties['file'] = '<image>/07_number.js';$x47->properties['line'] = 19;$x47->properties['column'] = 26;$x47->attributes['file'] = $x47->attributes['line'] = $x47->attributes['column'] = 0; }
throw new JSException($x47, 19, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x48, $W48, $S48, $U48);
$x49 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'NEGATIVE_INFINITY', 19, 26, '<image>/07_number.js');
$x48 =& $x49[0]; list(,$W48,$S48,$U48) = $x49;
if ($U48 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['NEGATIVE_INFINITY'] = $x48; $x48 =& $_Number->properties['NEGATIVE_INFINITY']; $_Number->attributes['NEGATIVE_INFINITY'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U48 = FALSE; $W48 = TRUE; }
if (isset($S48)) {
$x51 = $S48->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x52 = $x51($global, $_Number, $S48, array($x44), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x50 = $x52;
} else {
if (!$U48) {$x50 = $x44;if ($W48) { $x48 = $x44; }  }
else { $x50 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('NEGATIVE_INFINITY') && 'NEGATIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NEGATIVE_INFINITY' + 1; };
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x53 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 20, 26, '<image>/07_number.js');
$_TypeError =& $x53[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x53;
$x54 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x55 = $x54($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x55->class) && $x55->class === 'Error' && !isset($x55->properties['file']) && !isset($x55->properties['line']) && !isset($x55->properties['column'])) {$x55->properties['file'] = '<image>/07_number.js';$x55->properties['line'] = 20;$x55->properties['column'] = 26;$x55->attributes['file'] = $x55->attributes['line'] = $x55->attributes['column'] = 0; }
throw new JSException($x55, 20, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x56, $W56, $S56, $U56);
$x57 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'POSITIVE_INFINITY', 20, 26, '<image>/07_number.js');
$x56 =& $x57[0]; list(,$W56,$S56,$U56) = $x57;
if ($U56 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['POSITIVE_INFINITY'] = $x56; $x56 =& $_Number->properties['POSITIVE_INFINITY']; $_Number->attributes['POSITIVE_INFINITY'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U56 = FALSE; $W56 = TRUE; }
if (isset($S56)) {
$x59 = $S56->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x60 = $x59($global, $_Number, $S56, array($_Infinity), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x58 = $x60;
} else {
if (!$U56) {$x58 = $_Infinity;if ($W56) { $x56 = $_Infinity; }  }
else { $x58 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('POSITIVE_INFINITY') && 'POSITIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'POSITIVE_INFINITY' + 1; };
$x61 = clone JS::$objectTemplate;
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x62 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 22, 18, '<image>/07_number.js');
$_TypeError =& $x62[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x62;
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x64 = $x63($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x64->class) && $x64->class === 'Error' && !isset($x64->properties['file']) && !isset($x64->properties['line']) && !isset($x64->properties['column'])) {$x64->properties['file'] = '<image>/07_number.js';$x64->properties['line'] = 22;$x64->properties['column'] = 18;$x64->attributes['file'] = $x64->attributes['line'] = $x64->attributes['column'] = 0; }
throw new JSException($x64, 22, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x65, $W65, $S65, $U65);
$x66 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, (string) 'prototype', 22, 18, '<image>/07_number.js');
$x65 =& $x66[0]; list(,$W65,$S65,$U65) = $x66;
if ($U65 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties['prototype'] = $x65; $x65 =& $_Number->properties['prototype']; $_Number->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U65 = FALSE; $W65 = TRUE; }
if (isset($S65)) {
$x68 = $S65->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x69 = $x68($global, $_Number, $S65, array($x61), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x67 = $x69;
} else {
if (!$U65) {$x67 = $x61;if ($W65) { $x65 = $x61; }  }
else { $x67 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Number->properties['length']) { $_Number->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x70 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'Object', 23, 51, '<image>/07_number.js');
$_Object =& $x70[0]; list(,$WObject,$SObject,$UObject) = $x70;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x71 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'ReferenceError', 23, 51, '<image>/07_number.js');
$_ReferenceError =& $x71[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x71;
$x72 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 23, 51);
$x73 = $x72($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error' && !isset($x73->properties['file']) && !isset($x73->properties['line']) && !isset($x73->properties['column'])) {$x73->properties['file'] = '<image>/07_number.js';$x73->properties['line'] = 23;$x73->properties['column'] = 51;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 23, 51, '<image>/07_number.js');
}
$_Number->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Number->properties['prototype']->class = 'Number';
$_Number->properties['prototype']->extensible = TRUE;
unset($x74, $W74, $S74, $U74);
$x80 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 26, 7, '<image>/07_number.js');
$x74 =& $x80[0]; list(,$W74,$S74,$U74) = $x80;
if ($x74 === JS::$undefined || $x74 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x81 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 26, 30, '<image>/07_number.js');
$_TypeError =& $x81[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x81;
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x83 = $x82($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error' && !isset($x83->properties['file']) && !isset($x83->properties['line']) && !isset($x83->properties['column'])) {$x83->properties['file'] = '<image>/07_number.js';$x83->properties['line'] = 26;$x83->properties['column'] = 30;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, 26, 30, '<image>/07_number.js');
}
$x74 = JS::toObject($x74, $global);
unset($x84, $W84, $S84, $U84);
$x85 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x74, (string) 'constructor', 26, 30, '<image>/07_number.js');
$x84 =& $x85[0]; list(,$W84,$S84,$U84) = $x85;
if ($U84 && (!isset($x74->extensible) || $x74->extensible)) {$x74->properties['constructor'] = $x84; $x84 =& $x74->properties['constructor']; $x74->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U84 = FALSE; $W84 = TRUE; }
if (isset($S84)) {
$x87 = $S84->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x88 = $x87($global, $x74, $S84, array($_Number), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x86 = $x88;
} else {
if (!$U84) {$x86 = $_Number;if ($W84) { $x84 = $_Number; }  }
else { $x86 = JS::$undefined; }
}
if (isset($x74->class) && $x74->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x74->properties['length']) { $x74->properties['length'] = 'constructor' + 1; };
$x137 = clone JS::$functionTemplate; $x137->call = '_ff9cabf943c61b87166e28285dc0448b_5'; $x137->parameters = array (
  0 => 'radix',
); $x137->scope = $scope; $x137->properties['prototype'] = clone JS::$objectTemplate; $x137->attributes['prototype'] = JS::WRITABLE; $x137->properties['prototype']->properties['constructor'] = $x137; $x137->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x137->properties['length'] = 1; $x137->attributes['length'] = 0;
unset($x138, $W138, $S138, $U138);
$x139 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 28, 7, '<image>/07_number.js');
$x138 =& $x139[0]; list(,$W138,$S138,$U138) = $x139;
if ($x138 === JS::$undefined || $x138 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x140 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 28, 27, '<image>/07_number.js');
$_TypeError =& $x140[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x140;
$x141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x142 = $x141($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x142->class) && $x142->class === 'Error' && !isset($x142->properties['file']) && !isset($x142->properties['line']) && !isset($x142->properties['column'])) {$x142->properties['file'] = '<image>/07_number.js';$x142->properties['line'] = 28;$x142->properties['column'] = 27;$x142->attributes['file'] = $x142->attributes['line'] = $x142->attributes['column'] = 0; }
throw new JSException($x142, 28, 27, '<image>/07_number.js');
}
$x138 = JS::toObject($x138, $global);
unset($x143, $W143, $S143, $U143);
$x144 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x138, (string) 'toString', 28, 27, '<image>/07_number.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if ($U143 && (!isset($x138->extensible) || $x138->extensible)) {$x138->properties['toString'] = $x143; $x143 =& $x138->properties['toString']; $x138->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U143 = FALSE; $W143 = TRUE; }
if (isset($S143)) {
$x146 = $S143->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x147 = $x146($global, $x138, $S143, array($x137), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x145 = $x147;
} else {
if (!$U143) {$x145 = $x137;if ($W143) { $x143 = $x137; }  }
else { $x145 = JS::$undefined; }
}
if (isset($x138->class) && $x138->class === 'Array' &&  is_int('toString') && 'toString' >= $x138->properties['length']) { $x138->properties['length'] = 'toString' + 1; };
unset($x148, $W148, $S148, $U148);
$x149 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 58, 41, '<image>/07_number.js');
$x148 =& $x149[0]; list(,$W148,$S148,$U148) = $x149;
unset($x150, $W150, $S150, $U150);
$x151 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x148, (string) 'toString', 58, 51, '<image>/07_number.js');
$x150 =& $x151[0]; list(,$W150,$S150,$U150) = $x151;
unset($x152, $W152, $S152, $U152);
$x153 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 58, 7, '<image>/07_number.js');
$x152 =& $x153[0]; list(,$W152,$S152,$U152) = $x153;
if ($x152 === JS::$undefined || $x152 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x154 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 58, 33, '<image>/07_number.js');
$_TypeError =& $x154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x154;
$x155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x156 = $x155($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x156->class) && $x156->class === 'Error' && !isset($x156->properties['file']) && !isset($x156->properties['line']) && !isset($x156->properties['column'])) {$x156->properties['file'] = '<image>/07_number.js';$x156->properties['line'] = 58;$x156->properties['column'] = 33;$x156->attributes['file'] = $x156->attributes['line'] = $x156->attributes['column'] = 0; }
throw new JSException($x156, 58, 33, '<image>/07_number.js');
}
$x152 = JS::toObject($x152, $global);
unset($x157, $W157, $S157, $U157);
$x158 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x152, (string) 'toLocaleString', 58, 33, '<image>/07_number.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
if ($U157 && (!isset($x152->extensible) || $x152->extensible)) {$x152->properties['toLocaleString'] = $x157; $x157 =& $x152->properties['toLocaleString']; $x152->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U157 = FALSE; $W157 = TRUE; }
if (isset($S157)) {
$x160 = $S157->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x161 = $x160($global, $x152, $S157, array($x150), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x159 = $x161;
} else {
if (!$U157) {$x159 = $x150;if ($W157) { $x157 = $x150; }  }
else { $x159 = JS::$undefined; }
}
if (isset($x152->class) && $x152->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x152->properties['length']) { $x152->properties['length'] = 'toLocaleString' + 1; };
$x164 = clone JS::$functionTemplate; $x164->call = '_ff9cabf943c61b87166e28285dc0448b_6'; $x164->parameters = array (
); $x164->scope = $scope; $x164->properties['prototype'] = clone JS::$objectTemplate; $x164->attributes['prototype'] = JS::WRITABLE; $x164->properties['prototype']->properties['constructor'] = $x164; $x164->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x164->properties['length'] = 0; $x164->attributes['length'] = 0;
unset($x165, $W165, $S165, $U165);
$x166 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 60, 7, '<image>/07_number.js');
$x165 =& $x166[0]; list(,$W165,$S165,$U165) = $x166;
if ($x165 === JS::$undefined || $x165 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x167 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 60, 26, '<image>/07_number.js');
$_TypeError =& $x167[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x167;
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x169 = $x168($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/07_number.js';$x169->properties['line'] = 60;$x169->properties['column'] = 26;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 60, 26, '<image>/07_number.js');
}
$x165 = JS::toObject($x165, $global);
unset($x170, $W170, $S170, $U170);
$x171 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x165, (string) 'valueOf', 60, 26, '<image>/07_number.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
if ($U170 && (!isset($x165->extensible) || $x165->extensible)) {$x165->properties['valueOf'] = $x170; $x170 =& $x165->properties['valueOf']; $x165->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U170 = FALSE; $W170 = TRUE; }
if (isset($S170)) {
$x173 = $S170->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x174 = $x173($global, $x165, $S170, array($x164), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x172 = $x174;
} else {
if (!$U170) {$x172 = $x164;if ($W170) { $x170 = $x164; }  }
else { $x172 = JS::$undefined; }
}
if (isset($x165->class) && $x165->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x165->properties['length']) { $x165->properties['length'] = 'valueOf' + 1; };
$x213 = clone JS::$functionTemplate; $x213->call = '_ff9cabf943c61b87166e28285dc0448b_7'; $x213->parameters = array (
  0 => 'fractionDigits',
); $x213->scope = $scope; $x213->properties['prototype'] = clone JS::$objectTemplate; $x213->attributes['prototype'] = JS::WRITABLE; $x213->properties['prototype']->properties['constructor'] = $x213; $x213->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x213->properties['length'] = 1; $x213->attributes['length'] = 0;
unset($x214, $W214, $S214, $U214);
$x215 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 64, 7, '<image>/07_number.js');
$x214 =& $x215[0]; list(,$W214,$S214,$U214) = $x215;
if ($x214 === JS::$undefined || $x214 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x216 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 64, 26, '<image>/07_number.js');
$_TypeError =& $x216[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x216;
$x217 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x218 = $x217($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x218->class) && $x218->class === 'Error' && !isset($x218->properties['file']) && !isset($x218->properties['line']) && !isset($x218->properties['column'])) {$x218->properties['file'] = '<image>/07_number.js';$x218->properties['line'] = 64;$x218->properties['column'] = 26;$x218->attributes['file'] = $x218->attributes['line'] = $x218->attributes['column'] = 0; }
throw new JSException($x218, 64, 26, '<image>/07_number.js');
}
$x214 = JS::toObject($x214, $global);
unset($x219, $W219, $S219, $U219);
$x220 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x214, (string) 'toFixed', 64, 26, '<image>/07_number.js');
$x219 =& $x220[0]; list(,$W219,$S219,$U219) = $x220;
if ($U219 && (!isset($x214->extensible) || $x214->extensible)) {$x214->properties['toFixed'] = $x219; $x219 =& $x214->properties['toFixed']; $x214->attributes['toFixed'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U219 = FALSE; $W219 = TRUE; }
if (isset($S219)) {
$x222 = $S219->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x223 = $x222($global, $x214, $S219, array($x213), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x221 = $x223;
} else {
if (!$U219) {$x221 = $x213;if ($W219) { $x219 = $x213; }  }
else { $x221 = JS::$undefined; }
}
if (isset($x214->class) && $x214->class === 'Array' &&  is_int('toFixed') && 'toFixed' >= $x214->properties['length']) { $x214->properties['length'] = 'toFixed' + 1; };
$x263 = clone JS::$functionTemplate; $x263->call = '_ff9cabf943c61b87166e28285dc0448b_8'; $x263->parameters = array (
  0 => 'fractionDigits',
); $x263->scope = $scope; $x263->properties['prototype'] = clone JS::$objectTemplate; $x263->attributes['prototype'] = JS::WRITABLE; $x263->properties['prototype']->properties['constructor'] = $x263; $x263->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x263->properties['length'] = 1; $x263->attributes['length'] = 0;
unset($x264, $W264, $S264, $U264);
$x265 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 84, 7, '<image>/07_number.js');
$x264 =& $x265[0]; list(,$W264,$S264,$U264) = $x265;
if ($x264 === JS::$undefined || $x264 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x266 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 84, 32, '<image>/07_number.js');
$_TypeError =& $x266[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x266;
$x267 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x268 = $x267($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x268->class) && $x268->class === 'Error' && !isset($x268->properties['file']) && !isset($x268->properties['line']) && !isset($x268->properties['column'])) {$x268->properties['file'] = '<image>/07_number.js';$x268->properties['line'] = 84;$x268->properties['column'] = 32;$x268->attributes['file'] = $x268->attributes['line'] = $x268->attributes['column'] = 0; }
throw new JSException($x268, 84, 32, '<image>/07_number.js');
}
$x264 = JS::toObject($x264, $global);
unset($x269, $W269, $S269, $U269);
$x270 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x264, (string) 'toExponential', 84, 32, '<image>/07_number.js');
$x269 =& $x270[0]; list(,$W269,$S269,$U269) = $x270;
if ($U269 && (!isset($x264->extensible) || $x264->extensible)) {$x264->properties['toExponential'] = $x269; $x269 =& $x264->properties['toExponential']; $x264->attributes['toExponential'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U269 = FALSE; $W269 = TRUE; }
if (isset($S269)) {
$x272 = $S269->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x273 = $x272($global, $x264, $S269, array($x263), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x271 = $x273;
} else {
if (!$U269) {$x271 = $x263;if ($W269) { $x269 = $x263; }  }
else { $x271 = JS::$undefined; }
}
if (isset($x264->class) && $x264->class === 'Array' &&  is_int('toExponential') && 'toExponential' >= $x264->properties['length']) { $x264->properties['length'] = 'toExponential' + 1; };
$x325 = clone JS::$functionTemplate; $x325->call = '_ff9cabf943c61b87166e28285dc0448b_9'; $x325->parameters = array (
  0 => 'precision',
); $x325->scope = $scope; $x325->properties['prototype'] = clone JS::$objectTemplate; $x325->attributes['prototype'] = JS::WRITABLE; $x325->properties['prototype']->properties['constructor'] = $x325; $x325->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x325->properties['length'] = 1; $x325->attributes['length'] = 0;
unset($x326, $W326, $S326, $U326);
$x327 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, (string) 'prototype', 114, 7, '<image>/07_number.js');
$x326 =& $x327[0]; list(,$W326,$S326,$U326) = $x327;
if ($x326 === JS::$undefined || $x326 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x328 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, (string) 'TypeError', 114, 30, '<image>/07_number.js');
$_TypeError =& $x328[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x328;
$x329 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x330 = $x329($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x330->class) && $x330->class === 'Error' && !isset($x330->properties['file']) && !isset($x330->properties['line']) && !isset($x330->properties['column'])) {$x330->properties['file'] = '<image>/07_number.js';$x330->properties['line'] = 114;$x330->properties['column'] = 30;$x330->attributes['file'] = $x330->attributes['line'] = $x330->attributes['column'] = 0; }
throw new JSException($x330, 114, 30, '<image>/07_number.js');
}
$x326 = JS::toObject($x326, $global);
unset($x331, $W331, $S331, $U331);
$x332 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x326, (string) 'toPrecision', 114, 30, '<image>/07_number.js');
$x331 =& $x332[0]; list(,$W331,$S331,$U331) = $x332;
if ($U331 && (!isset($x326->extensible) || $x326->extensible)) {$x326->properties['toPrecision'] = $x331; $x331 =& $x326->properties['toPrecision']; $x326->attributes['toPrecision'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U331 = FALSE; $W331 = TRUE; }
if (isset($S331)) {
$x334 = $S331->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x335 = $x334($global, $x326, $S331, array($x325), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x333 = $x335;
} else {
if (!$U331) {$x333 = $x325;if ($W331) { $x331 = $x325; }  }
else { $x333 = JS::$undefined; }
}
if (isset($x326->class) && $x326->class === 'Array' &&  is_int('toPrecision') && 'toPrecision' >= $x326->properties['length']) { $x326->properties['length'] = 'toPrecision' + 1; };
;
return JS::$undefined;
}
