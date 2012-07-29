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
$x7 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x8 = $x7($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x8; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x7=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x8=$x7($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x8;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x13 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x13[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x13;
$x14 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x15 = $x14($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x15->class) && $x15->class === 'Error' && !isset($x15->properties['file']) && !isset($x15->properties['line']) && !isset($x15->properties['column'])) {$x15->properties['file'] = $file;$x15->properties['line'] = $line;$x15->properties['column'] = $column;$x15->attributes['file'] = $x15->attributes['line'] = $x15->attributes['column'] = 0; }
throw new JSException($x15, $line, $column, $file);
}
$W12 = $S12 = $U12 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x12 =& $lookup->properties[$id]; $W12 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S12 = $lookup->setters[$id]; }
else { $x12 = JS::$undefined; $U12 = TRUE; }
return array(&$x12, $W12, $S12, $U12);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x13=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x13[0];list(,$WTypeError,$STypeError,$UTypeError)=$x13;$x14=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x15=$x14($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x15->class)&&$x15->class===\'Error\'&&!isset($x15->properties[\'file\'])&&!isset($x15->properties[\'line\'])&&!isset($x15->properties[\'column\'])){$x15->properties[\'file\']=$file;$x15->properties[\'line\']=$line;$x15->properties[\'column\']=$column;$x15->attributes[\'file\']=$x15->attributes[\'line\']=$x15->attributes[\'column\']=0;}throw new JSException($x15,$line,$column,$file);}$W12=$S12=$U12=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x12=&$lookup->properties[$id];$W12=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S12=$lookup->setters[$id];}else{$x12=JS::$undefined;$U12=TRUE;}return array(&$x12,$W12,$S12,$U12);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x87 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x87[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x87;
$x88 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x89 = $x88($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error' && !isset($x89->properties['file']) && !isset($x89->properties['line']) && !isset($x89->properties['column'])) {$x89->properties['file'] = $file;$x89->properties['line'] = $line;$x89->properties['column'] = $column;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, $line, $column, $file);
}
$W86 = $S86 = $U86 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x86 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x90 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x91 = $x90($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x86 = $x91; }
else { $x86 = JS::$undefined; $U86 = TRUE; }
return array(&$x86, $W86, $S86, $U86);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x87=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x87[0];list(,$WTypeError,$STypeError,$UTypeError)=$x87;$x88=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x89=$x88($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x89->class)&&$x89->class===\'Error\'&&!isset($x89->properties[\'file\'])&&!isset($x89->properties[\'line\'])&&!isset($x89->properties[\'column\'])){$x89->properties[\'file\']=$file;$x89->properties[\'line\']=$line;$x89->properties[\'column\']=$column;$x89->attributes[\'file\']=$x89->attributes[\'line\']=$x89->attributes[\'column\']=0;}throw new JSException($x89,$line,$column,$file);}$W86=$S86=$U86=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x86=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x90=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x91=$x90($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x86=$x91;}else{$x86=JS::$undefined;$U86=TRUE;}return array(&$x86,$W86,$S86,$U86);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x104 =& $scope->properties['arguments'];
$x104->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x104->properties[$i] = $args[$i];
$x104->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['radix'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_radix =& $scope->properties['radix'];
$Uradix = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(isset($leThis->class) && $leThis->class !== 'Number', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 30, 13, '<image>/07_number.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x108 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 30, 13, '<image>/07_number.js');
$_ReferenceError =& $x108[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x108;
$x109 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 13);
$x110 = $x109($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x110->class) && $x110->class === 'Error' && !isset($x110->properties['file']) && !isset($x110->properties['line']) && !isset($x110->properties['column'])) {$x110->properties['file'] = '<image>/07_number.js';$x110->properties['line'] = 30;$x110->properties['column'] = 13;$x110->attributes['file'] = $x110->attributes['line'] = $x110->attributes['column'] = 0; }
throw new JSException($x110, 30, 13, '<image>/07_number.js');
}
$x105 = clone JS::$objectTemplate;
unset($x111, $W111, $S111, $U111);
$x112 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 30, 9, '<image>/07_number.js');
$x111 =& $x112[0]; list(,$W111,$S111,$U111) = $x112;
$x106 = $x111;
$x105->prototype = $x106;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x115 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x116 = $x115($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x116->class) && $x116->class === 'Error' && !isset($x116->properties['file']) && !isset($x116->properties['line']) && !isset($x116->properties['column'])) {$x116->properties['file'] = '<image>/07_number.js';$x116->properties['line'] = 30;$x116->properties['column'] = 9;$x116->attributes['file'] = $x116->attributes['line'] = $x116->attributes['column'] = 0; }
throw new JSException($x116, 30, 9, '<image>/07_number.js');
}
$x113 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x114 = $x113($global, $x105, $_TypeError, array('Number.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x106 = $x114;
if (is_object($x106) && $x106 !== JS::$undefined) { $x105 = $x106; }
if (isset($x105->class) && $x105->class === 'Error' && !isset($x105->properties['file']) && !isset($x105->properties['line']) && !isset($x105->properties['column'])) {$x105->properties['file'] = '<image>/07_number.js';$x105->properties['line'] = 30;$x105->properties['column'] = 3;$x105->attributes['file'] = $x105->attributes['line'] = $x105->attributes['column'] = 0; }
throw new JSException($x105, 30, 3, '<image>/07_number.js');;
};
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x117 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 33, 6, '<image>/07_number.js');
$_isNaN =& $x117[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x117;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x118 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 33, 6, '<image>/07_number.js');
$_ReferenceError =& $x118[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x118;
$x119 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 6);
$x120 = $x119($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x120->class) && $x120->class === 'Error' && !isset($x120->properties['file']) && !isset($x120->properties['line']) && !isset($x120->properties['column'])) {$x120->properties['file'] = '<image>/07_number.js';$x120->properties['line'] = 33;$x120->properties['column'] = 6;$x120->attributes['file'] = $x120->attributes['line'] = $x120->attributes['column'] = 0; }
throw new JSException($x120, 33, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x123 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 33, 11, '<image>/07_number.js');
$_TypeError =& $x123[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x123;
$x124 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x125 = $x124($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x125->class) && $x125->class === 'Error' && !isset($x125->properties['file']) && !isset($x125->properties['line']) && !isset($x125->properties['column'])) {$x125->properties['file'] = '<image>/07_number.js';$x125->properties['line'] = 33;$x125->properties['column'] = 11;$x125->attributes['file'] = $x125->attributes['line'] = $x125->attributes['column'] = 0; }
throw new JSException($x125, 33, 11, '<image>/07_number.js');
}
$x121 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x122 = $x121($global, $global, $_isNaN, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x122, $global)) {

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
$x126 = $_radix;
if (!JS::toBoolean($x126, $global)) {
$x126 = 10; }
if ($Uradix) {$global->properties['radix'] = $_radix; $_radix =& $global->properties['radix']; }
$_radix = $x126;
$x128 = JS::toPrimitive($_radix, $global);
$x129 = JS::toPrimitive(2, $global);
$x130 = (is_string($x128) && is_string($x129) ? strcmp($x128, $x129) < 0 : (!is_nan($x131 = JS::toNumber($x128, $global)) && !is_nan($x132 = JS::toNumber($x129, $global)) && $x131 < $x132));
$x127 = $x130;
if (!JS::toBoolean($x127, $global)) {
$x133 = JS::toPrimitive($_radix, $global);
$x134 = JS::toPrimitive(36, $global);
$x135 = (is_string($x134) && is_string($x133) ? strcmp($x134, $x133) < 0 : (!is_nan($x136 = JS::toNumber($x134, $global)) && !is_nan($x137 = JS::toNumber($x133, $global)) && $x136 < $x137));
$x127 = $x135; }
if (JS::toBoolean($x127, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x140 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 52, 13, '<image>/07_number.js');
$_RangeError =& $x140[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x140;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x141 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 52, 13, '<image>/07_number.js');
$_ReferenceError =& $x141[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x141;
$x142 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 13);
$x143 = $x142($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x143->class) && $x143->class === 'Error' && !isset($x143->properties['file']) && !isset($x143->properties['line']) && !isset($x143->properties['column'])) {$x143->properties['file'] = '<image>/07_number.js';$x143->properties['line'] = 52;$x143->properties['column'] = 13;$x143->attributes['file'] = $x143->attributes['line'] = $x143->attributes['column'] = 0; }
throw new JSException($x143, 52, 13, '<image>/07_number.js');
}
$x138 = clone JS::$objectTemplate;
unset($x144, $W144, $S144, $U144);
$x145 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 52, 9, '<image>/07_number.js');
$x144 =& $x145[0]; list(,$W144,$S144,$U144) = $x145;
$x139 = $x144;
$x138->prototype = $x139;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x148 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 52, 9, '<image>/07_number.js');
$_TypeError =& $x148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x148;
$x149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x150 = $x149($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x150->class) && $x150->class === 'Error' && !isset($x150->properties['file']) && !isset($x150->properties['line']) && !isset($x150->properties['column'])) {$x150->properties['file'] = '<image>/07_number.js';$x150->properties['line'] = 52;$x150->properties['column'] = 9;$x150->attributes['file'] = $x150->attributes['line'] = $x150->attributes['column'] = 0; }
throw new JSException($x150, 52, 9, '<image>/07_number.js');
}
$x146 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x147 = $x146($global, $x138, $_RangeError, array('Number.prototype.toString(): radix is not between 2 and 36.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x139 = $x147;
if (is_object($x139) && $x139 !== JS::$undefined) { $x138 = $x139; }
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/07_number.js';$x138->properties['line'] = 52;$x138->properties['column'] = 3;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 52, 3, '<image>/07_number.js');;
};
return base_convert((string) $leThis->value, 10,$_radix);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x104=&$scope->properties[\'arguments\'];$x104->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x104->properties[$i]=$args[$i];$x104->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'radix\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_radix=&$scope->properties[\'radix\'];$Uradix=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(isset($leThis->class)&&$leThis->class!==\'Number\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x107=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),30,13,\'<image>/07_number.js\');$_TypeError=&$x107[0];list(,$WTypeError,$STypeError,$UTypeError)=$x107;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x108=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),30,13,\'<image>/07_number.js\');$_ReferenceError=&$x108[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x108;$x109=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,13);$x110=$x109($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x110->class)&&$x110->class===\'Error\'&&!isset($x110->properties[\'file\'])&&!isset($x110->properties[\'line\'])&&!isset($x110->properties[\'column\'])){$x110->properties[\'file\']=\'<image>/07_number.js\';$x110->properties[\'line\']=30;$x110->properties[\'column\']=13;$x110->attributes[\'file\']=$x110->attributes[\'line\']=$x110->attributes[\'column\']=0;}throw new JSException($x110,30,13,\'<image>/07_number.js\');}$x105=clone JS::$objectTemplate;unset($x111,$W111,$S111,$U111);$x112=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),30,9,\'<image>/07_number.js\');$x111=&$x112[0];list(,$W111,$S111,$U111)=$x112;$x106=$x111;$x105->prototype=$x106;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x115=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x116=$x115($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x116->class)&&$x116->class===\'Error\'&&!isset($x116->properties[\'file\'])&&!isset($x116->properties[\'line\'])&&!isset($x116->properties[\'column\'])){$x116->properties[\'file\']=\'<image>/07_number.js\';$x116->properties[\'line\']=30;$x116->properties[\'column\']=9;$x116->attributes[\'file\']=$x116->attributes[\'line\']=$x116->attributes[\'column\']=0;}throw new JSException($x116,30,9,\'<image>/07_number.js\');}$x113=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x114=$x113($global,$x105,$_TypeError,array(\'Number.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x106=$x114;if(is_object($x106)&&$x106!==JS::$undefined){$x105=$x106;}if(isset($x105->class)&&$x105->class===\'Error\'&&!isset($x105->properties[\'file\'])&&!isset($x105->properties[\'line\'])&&!isset($x105->properties[\'column\'])){$x105->properties[\'file\']=\'<image>/07_number.js\';$x105->properties[\'line\']=30;$x105->properties[\'column\']=3;$x105->attributes[\'file\']=$x105->attributes[\'line\']=$x105->attributes[\'column\']=0;}throw new JSException($x105,30,3,\'<image>/07_number.js\');}unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x117=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),33,6,\'<image>/07_number.js\');$_isNaN=&$x117[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x117;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x118=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),33,6,\'<image>/07_number.js\');$_ReferenceError=&$x118[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x118;$x119=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,6);$x120=$x119($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x120->class)&&$x120->class===\'Error\'&&!isset($x120->properties[\'file\'])&&!isset($x120->properties[\'line\'])&&!isset($x120->properties[\'column\'])){$x120->properties[\'file\']=\'<image>/07_number.js\';$x120->properties[\'line\']=33;$x120->properties[\'column\']=6;$x120->attributes[\'file\']=$x120->attributes[\'line\']=$x120->attributes[\'column\']=0;}throw new JSException($x120,33,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x123=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),33,11,\'<image>/07_number.js\');$_TypeError=&$x123[0];list(,$WTypeError,$STypeError,$UTypeError)=$x123;$x124=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x125=$x124($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x125->class)&&$x125->class===\'Error\'&&!isset($x125->properties[\'file\'])&&!isset($x125->properties[\'line\'])&&!isset($x125->properties[\'column\'])){$x125->properties[\'file\']=\'<image>/07_number.js\';$x125->properties[\'line\']=33;$x125->properties[\'column\']=11;$x125->attributes[\'file\']=$x125->attributes[\'line\']=$x125->attributes[\'column\']=0;}throw new JSException($x125,33,11,\'<image>/07_number.js\');}$x121=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x122=$x121($global,$global,$_isNaN,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x122,$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}if(JS::toBoolean(is_float($leThis->value),$global)){return(string)$leThis->value;}$x126=$_radix;if(!JS::toBoolean($x126,$global)){$x126=10;}if($Uradix){$global->properties[\'radix\']=$_radix;$_radix=&$global->properties[\'radix\'];}$_radix=$x126;$x128=JS::toPrimitive($_radix,$global);$x129=JS::toPrimitive(2,$global);$x130=(is_string($x128)&&is_string($x129)?strcmp($x128,$x129)<0:(!is_nan($x131=JS::toNumber($x128,$global))&&!is_nan($x132=JS::toNumber($x129,$global))&&$x131<$x132));$x127=$x130;if(!JS::toBoolean($x127,$global)){$x133=JS::toPrimitive($_radix,$global);$x134=JS::toPrimitive(36,$global);$x135=(is_string($x134)&&is_string($x133)?strcmp($x134,$x133)<0:(!is_nan($x136=JS::toNumber($x134,$global))&&!is_nan($x137=JS::toNumber($x133,$global))&&$x136<$x137));$x127=$x135;}if(JS::toBoolean($x127,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x140=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),52,13,\'<image>/07_number.js\');$_RangeError=&$x140[0];list(,$WRangeError,$SRangeError,$URangeError)=$x140;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x141=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),52,13,\'<image>/07_number.js\');$_ReferenceError=&$x141[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x141;$x142=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,13);$x143=$x142($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x143->class)&&$x143->class===\'Error\'&&!isset($x143->properties[\'file\'])&&!isset($x143->properties[\'line\'])&&!isset($x143->properties[\'column\'])){$x143->properties[\'file\']=\'<image>/07_number.js\';$x143->properties[\'line\']=52;$x143->properties[\'column\']=13;$x143->attributes[\'file\']=$x143->attributes[\'line\']=$x143->attributes[\'column\']=0;}throw new JSException($x143,52,13,\'<image>/07_number.js\');}$x138=clone JS::$objectTemplate;unset($x144,$W144,$S144,$U144);$x145=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),52,9,\'<image>/07_number.js\');$x144=&$x145[0];list(,$W144,$S144,$U144)=$x145;$x139=$x144;$x138->prototype=$x139;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x148=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),52,9,\'<image>/07_number.js\');$_TypeError=&$x148[0];list(,$WTypeError,$STypeError,$UTypeError)=$x148;$x149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x150=$x149($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x150->class)&&$x150->class===\'Error\'&&!isset($x150->properties[\'file\'])&&!isset($x150->properties[\'line\'])&&!isset($x150->properties[\'column\'])){$x150->properties[\'file\']=\'<image>/07_number.js\';$x150->properties[\'line\']=52;$x150->properties[\'column\']=9;$x150->attributes[\'file\']=$x150->attributes[\'line\']=$x150->attributes[\'column\']=0;}throw new JSException($x150,52,9,\'<image>/07_number.js\');}$x146=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x147=$x146($global,$x138,$_RangeError,array(\'Number.prototype.toString(): radix is not between 2 and 36.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x139=$x147;if(is_object($x139)&&$x139!==JS::$undefined){$x138=$x139;}if(isset($x138->class)&&$x138->class===\'Error\'&&!isset($x138->properties[\'file\'])&&!isset($x138->properties[\'line\'])&&!isset($x138->properties[\'column\'])){$x138->properties[\'file\']=\'<image>/07_number.js\';$x138->properties[\'line\']=52;$x138->properties[\'column\']=3;$x138->attributes[\'file\']=$x138->attributes[\'line\']=$x138->attributes[\'column\']=0;}throw new JSException($x138,52,3,\'<image>/07_number.js\');}return base_convert((string)$leThis->value,10,$_radix);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x181 =& $scope->properties['arguments'];
$x181->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x181->properties[$i] = $args[$i];
$x181->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x181=&$scope->properties[\'arguments\'];$x181->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x181->properties[$i]=$args[$i];$x181->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value;return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x196 =& $scope->properties['arguments'];
$x196->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x196->properties[$i] = $args[$i];
$x196->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x198 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x197 = $x198;
if (JS::toBoolean($x197, $global)) {
$x200 = JS::toPrimitive($_fractionDigits, $global);
$x201 = JS::toPrimitive(0, $global);
$x202 = (is_string($x200) && is_string($x201) ? strcmp($x200, $x201) < 0 : (!is_nan($x203 = JS::toNumber($x200, $global)) && !is_nan($x204 = JS::toNumber($x201, $global)) && $x203 < $x204));
$x199 = $x202;
if (!JS::toBoolean($x199, $global)) {
$x205 = JS::toPrimitive($_fractionDigits, $global);
$x206 = JS::toPrimitive(20, $global);
$x207 = (is_string($x206) && is_string($x205) ? strcmp($x206, $x205) < 0 : (!is_nan($x208 = JS::toNumber($x206, $global)) && !is_nan($x209 = JS::toNumber($x205, $global)) && $x208 < $x209));
$x199 = $x207; }
$x197 = $x199; }
if (JS::toBoolean($x197, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x212 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 66, 13, '<image>/07_number.js');
$_RangeError =& $x212[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x212;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x213 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 66, 13, '<image>/07_number.js');
$_ReferenceError =& $x213[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x213;
$x214 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 13);
$x215 = $x214($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x215->class) && $x215->class === 'Error' && !isset($x215->properties['file']) && !isset($x215->properties['line']) && !isset($x215->properties['column'])) {$x215->properties['file'] = '<image>/07_number.js';$x215->properties['line'] = 66;$x215->properties['column'] = 13;$x215->attributes['file'] = $x215->attributes['line'] = $x215->attributes['column'] = 0; }
throw new JSException($x215, 66, 13, '<image>/07_number.js');
}
$x210 = clone JS::$objectTemplate;
unset($x216, $W216, $S216, $U216);
$x217 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 66, 9, '<image>/07_number.js');
$x216 =& $x217[0]; list(,$W216,$S216,$U216) = $x217;
$x211 = $x216;
$x210->prototype = $x211;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x220 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 66, 9, '<image>/07_number.js');
$_TypeError =& $x220[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x220;
$x221 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x222 = $x221($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x222->class) && $x222->class === 'Error' && !isset($x222->properties['file']) && !isset($x222->properties['line']) && !isset($x222->properties['column'])) {$x222->properties['file'] = '<image>/07_number.js';$x222->properties['line'] = 66;$x222->properties['column'] = 9;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 66, 9, '<image>/07_number.js');
}
$x218 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x219 = $x218($global, $x210, $_RangeError, array('Number.prototype.toFixed(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x211 = $x219;
if (is_object($x211) && $x211 !== JS::$undefined) { $x210 = $x211; }
if (isset($x210->class) && $x210->class === 'Error' && !isset($x210->properties['file']) && !isset($x210->properties['line']) && !isset($x210->properties['column'])) {$x210->properties['file'] = '<image>/07_number.js';$x210->properties['line'] = 66;$x210->properties['column'] = 3;$x210->attributes['file'] = $x210->attributes['line'] = $x210->attributes['column'] = 0; }
throw new JSException($x210, 66, 3, '<image>/07_number.js');;
};
if (JS::toBoolean(is_nan($leThis->value), $global)) {

return 'NaN';;
};
$x223 = JS::toNumber($_fractionDigits, $global);
if ($UfractionDigits) {$global->properties['fractionDigits'] = $_fractionDigits; $_fractionDigits =& $global->properties['fractionDigits']; }
$_fractionDigits = $x223;
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x224 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 75, 6, '<image>/07_number.js');
$_isNaN =& $x224[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x224;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x225 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 75, 6, '<image>/07_number.js');
$_ReferenceError =& $x225[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x225;
$x226 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 6);
$x227 = $x226($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x227->class) && $x227->class === 'Error' && !isset($x227->properties['file']) && !isset($x227->properties['line']) && !isset($x227->properties['column'])) {$x227->properties['file'] = '<image>/07_number.js';$x227->properties['line'] = 75;$x227->properties['column'] = 6;$x227->attributes['file'] = $x227->attributes['line'] = $x227->attributes['column'] = 0; }
throw new JSException($x227, 75, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x230 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 75, 11, '<image>/07_number.js');
$_TypeError =& $x230[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x230;
$x231 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x232 = $x231($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x232->class) && $x232->class === 'Error' && !isset($x232->properties['file']) && !isset($x232->properties['line']) && !isset($x232->properties['column'])) {$x232->properties['file'] = '<image>/07_number.js';$x232->properties['line'] = 75;$x232->properties['column'] = 11;$x232->attributes['file'] = $x232->attributes['line'] = $x232->attributes['column'] = 0; }
throw new JSException($x232, 75, 11, '<image>/07_number.js');
}
$x228 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x229 = $x228($global, $global, $_isNaN, array($_fractionDigits), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x229, $global)) {

return (string) intval(round($leThis->value));;
};
return sprintf('%.' .$_fractionDigits. 'f', $leThis->value);
return sprintf('%f', $leThis->value);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x196=&$scope->properties[\'arguments\'];$x196->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x196->properties[$i]=$args[$i];$x196->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x198=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x197=$x198;if(JS::toBoolean($x197,$global)){$x200=JS::toPrimitive($_fractionDigits,$global);$x201=JS::toPrimitive(0,$global);$x202=(is_string($x200)&&is_string($x201)?strcmp($x200,$x201)<0:(!is_nan($x203=JS::toNumber($x200,$global))&&!is_nan($x204=JS::toNumber($x201,$global))&&$x203<$x204));$x199=$x202;if(!JS::toBoolean($x199,$global)){$x205=JS::toPrimitive($_fractionDigits,$global);$x206=JS::toPrimitive(20,$global);$x207=(is_string($x206)&&is_string($x205)?strcmp($x206,$x205)<0:(!is_nan($x208=JS::toNumber($x206,$global))&&!is_nan($x209=JS::toNumber($x205,$global))&&$x208<$x209));$x199=$x207;}$x197=$x199;}if(JS::toBoolean($x197,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x212=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),66,13,\'<image>/07_number.js\');$_RangeError=&$x212[0];list(,$WRangeError,$SRangeError,$URangeError)=$x212;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x213=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),66,13,\'<image>/07_number.js\');$_ReferenceError=&$x213[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x213;$x214=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,13);$x215=$x214($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x215->class)&&$x215->class===\'Error\'&&!isset($x215->properties[\'file\'])&&!isset($x215->properties[\'line\'])&&!isset($x215->properties[\'column\'])){$x215->properties[\'file\']=\'<image>/07_number.js\';$x215->properties[\'line\']=66;$x215->properties[\'column\']=13;$x215->attributes[\'file\']=$x215->attributes[\'line\']=$x215->attributes[\'column\']=0;}throw new JSException($x215,66,13,\'<image>/07_number.js\');}$x210=clone JS::$objectTemplate;unset($x216,$W216,$S216,$U216);$x217=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),66,9,\'<image>/07_number.js\');$x216=&$x217[0];list(,$W216,$S216,$U216)=$x217;$x211=$x216;$x210->prototype=$x211;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x220=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),66,9,\'<image>/07_number.js\');$_TypeError=&$x220[0];list(,$WTypeError,$STypeError,$UTypeError)=$x220;$x221=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x222=$x221($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x222->class)&&$x222->class===\'Error\'&&!isset($x222->properties[\'file\'])&&!isset($x222->properties[\'line\'])&&!isset($x222->properties[\'column\'])){$x222->properties[\'file\']=\'<image>/07_number.js\';$x222->properties[\'line\']=66;$x222->properties[\'column\']=9;$x222->attributes[\'file\']=$x222->attributes[\'line\']=$x222->attributes[\'column\']=0;}throw new JSException($x222,66,9,\'<image>/07_number.js\');}$x218=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x219=$x218($global,$x210,$_RangeError,array(\'Number.prototype.toFixed(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x211=$x219;if(is_object($x211)&&$x211!==JS::$undefined){$x210=$x211;}if(isset($x210->class)&&$x210->class===\'Error\'&&!isset($x210->properties[\'file\'])&&!isset($x210->properties[\'line\'])&&!isset($x210->properties[\'column\'])){$x210->properties[\'file\']=\'<image>/07_number.js\';$x210->properties[\'line\']=66;$x210->properties[\'column\']=3;$x210->attributes[\'file\']=$x210->attributes[\'line\']=$x210->attributes[\'column\']=0;}throw new JSException($x210,66,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}$x223=JS::toNumber($_fractionDigits,$global);if($UfractionDigits){$global->properties[\'fractionDigits\']=$_fractionDigits;$_fractionDigits=&$global->properties[\'fractionDigits\'];}$_fractionDigits=$x223;unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x224=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),75,6,\'<image>/07_number.js\');$_isNaN=&$x224[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x224;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x225=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),75,6,\'<image>/07_number.js\');$_ReferenceError=&$x225[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x225;$x226=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,6);$x227=$x226($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x227->class)&&$x227->class===\'Error\'&&!isset($x227->properties[\'file\'])&&!isset($x227->properties[\'line\'])&&!isset($x227->properties[\'column\'])){$x227->properties[\'file\']=\'<image>/07_number.js\';$x227->properties[\'line\']=75;$x227->properties[\'column\']=6;$x227->attributes[\'file\']=$x227->attributes[\'line\']=$x227->attributes[\'column\']=0;}throw new JSException($x227,75,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x230=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),75,11,\'<image>/07_number.js\');$_TypeError=&$x230[0];list(,$WTypeError,$STypeError,$UTypeError)=$x230;$x231=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x232=$x231($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x232->class)&&$x232->class===\'Error\'&&!isset($x232->properties[\'file\'])&&!isset($x232->properties[\'line\'])&&!isset($x232->properties[\'column\'])){$x232->properties[\'file\']=\'<image>/07_number.js\';$x232->properties[\'line\']=75;$x232->properties[\'column\']=11;$x232->attributes[\'file\']=$x232->attributes[\'line\']=$x232->attributes[\'column\']=0;}throw new JSException($x232,75,11,\'<image>/07_number.js\');}$x228=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x229=$x228($global,$global,$_isNaN,array($_fractionDigits),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x229,$global)){return(string)intval(round($leThis->value));}return sprintf(\'%.\'.$_fractionDigits.\'f\',$leThis->value);return sprintf(\'%f\',$leThis->value);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x247 =& $scope->properties['arguments'];
$x247->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x247->properties[$i] = $args[$i];
$x247->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x249 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x248 = $x249;
if (JS::toBoolean($x248, $global)) {
$x251 = JS::toPrimitive($_fractionDigits, $global);
$x252 = JS::toPrimitive(0, $global);
$x253 = (is_string($x251) && is_string($x252) ? strcmp($x251, $x252) < 0 : (!is_nan($x254 = JS::toNumber($x251, $global)) && !is_nan($x255 = JS::toNumber($x252, $global)) && $x254 < $x255));
$x250 = $x253;
if (!JS::toBoolean($x250, $global)) {
$x256 = JS::toPrimitive($_fractionDigits, $global);
$x257 = JS::toPrimitive(20, $global);
$x258 = (is_string($x257) && is_string($x256) ? strcmp($x257, $x256) < 0 : (!is_nan($x259 = JS::toNumber($x257, $global)) && !is_nan($x260 = JS::toNumber($x256, $global)) && $x259 < $x260));
$x250 = $x258; }
$x248 = $x250; }
if (JS::toBoolean($x248, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x263 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 86, 13, '<image>/07_number.js');
$_RangeError =& $x263[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x263;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x264 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 86, 13, '<image>/07_number.js');
$_ReferenceError =& $x264[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x264;
$x265 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 13);
$x266 = $x265($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x266->class) && $x266->class === 'Error' && !isset($x266->properties['file']) && !isset($x266->properties['line']) && !isset($x266->properties['column'])) {$x266->properties['file'] = '<image>/07_number.js';$x266->properties['line'] = 86;$x266->properties['column'] = 13;$x266->attributes['file'] = $x266->attributes['line'] = $x266->attributes['column'] = 0; }
throw new JSException($x266, 86, 13, '<image>/07_number.js');
}
$x261 = clone JS::$objectTemplate;
unset($x267, $W267, $S267, $U267);
$x268 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 86, 9, '<image>/07_number.js');
$x267 =& $x268[0]; list(,$W267,$S267,$U267) = $x268;
$x262 = $x267;
$x261->prototype = $x262;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x271 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 86, 9, '<image>/07_number.js');
$_TypeError =& $x271[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x271;
$x272 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x273 = $x272($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x273->class) && $x273->class === 'Error' && !isset($x273->properties['file']) && !isset($x273->properties['line']) && !isset($x273->properties['column'])) {$x273->properties['file'] = '<image>/07_number.js';$x273->properties['line'] = 86;$x273->properties['column'] = 9;$x273->attributes['file'] = $x273->attributes['line'] = $x273->attributes['column'] = 0; }
throw new JSException($x273, 86, 9, '<image>/07_number.js');
}
$x269 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x270 = $x269($global, $x261, $_RangeError, array('Number.prototype.toExponential(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x262 = $x270;
if (is_object($x262) && $x262 !== JS::$undefined) { $x261 = $x262; }
if (isset($x261->class) && $x261->class === 'Error' && !isset($x261->properties['file']) && !isset($x261->properties['line']) && !isset($x261->properties['column'])) {$x261->properties['file'] = '<image>/07_number.js';$x261->properties['line'] = 86;$x261->properties['column'] = 3;$x261->attributes['file'] = $x261->attributes['line'] = $x261->attributes['column'] = 0; }
throw new JSException($x261, 86, 3, '<image>/07_number.js');;
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
$x274 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
if (JS::toBoolean($x274, $global)) {
$scope->properties['d'] = JS::$undefined; $_d =& $scope->properties['d'];
$Ud = FALSE;
$_d = JS::toNumber($_fractionDigits, $global);
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x275 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 104, 7, '<image>/07_number.js');
$_isNaN =& $x275[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x275;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x276 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 104, 7, '<image>/07_number.js');
$_ReferenceError =& $x276[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x276;
$x277 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 7);
$x278 = $x277($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x278->class) && $x278->class === 'Error' && !isset($x278->properties['file']) && !isset($x278->properties['line']) && !isset($x278->properties['column'])) {$x278->properties['file'] = '<image>/07_number.js';$x278->properties['line'] = 104;$x278->properties['column'] = 7;$x278->attributes['file'] = $x278->attributes['line'] = $x278->attributes['column'] = 0; }
throw new JSException($x278, 104, 7, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x281 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 104, 12, '<image>/07_number.js');
$_TypeError =& $x281[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x281;
$x282 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x283 = $x282($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x283->class) && $x283->class === 'Error' && !isset($x283->properties['file']) && !isset($x283->properties['line']) && !isset($x283->properties['column'])) {$x283->properties['file'] = '<image>/07_number.js';$x283->properties['line'] = 104;$x283->properties['column'] = 12;$x283->attributes['file'] = $x283->attributes['line'] = $x283->attributes['column'] = 0; }
throw new JSException($x283, 104, 12, '<image>/07_number.js');
}
$x279 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x280 = $x279($global, $global, $_isNaN, array($_d), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x280, $global)) {
$x284 = 0;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x284;;
};
return sprintf('%.' .$_d. 'e', $leThis->value);;
};
return preg_replace('/[.]?0+e/', 'e', sprintf('%e', $leThis->value));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x247=&$scope->properties[\'arguments\'];$x247->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x247->properties[$i]=$args[$i];$x247->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x249=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x248=$x249;if(JS::toBoolean($x248,$global)){$x251=JS::toPrimitive($_fractionDigits,$global);$x252=JS::toPrimitive(0,$global);$x253=(is_string($x251)&&is_string($x252)?strcmp($x251,$x252)<0:(!is_nan($x254=JS::toNumber($x251,$global))&&!is_nan($x255=JS::toNumber($x252,$global))&&$x254<$x255));$x250=$x253;if(!JS::toBoolean($x250,$global)){$x256=JS::toPrimitive($_fractionDigits,$global);$x257=JS::toPrimitive(20,$global);$x258=(is_string($x257)&&is_string($x256)?strcmp($x257,$x256)<0:(!is_nan($x259=JS::toNumber($x257,$global))&&!is_nan($x260=JS::toNumber($x256,$global))&&$x259<$x260));$x250=$x258;}$x248=$x250;}if(JS::toBoolean($x248,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x263=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),86,13,\'<image>/07_number.js\');$_RangeError=&$x263[0];list(,$WRangeError,$SRangeError,$URangeError)=$x263;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x264=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),86,13,\'<image>/07_number.js\');$_ReferenceError=&$x264[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x264;$x265=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,13);$x266=$x265($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x266->class)&&$x266->class===\'Error\'&&!isset($x266->properties[\'file\'])&&!isset($x266->properties[\'line\'])&&!isset($x266->properties[\'column\'])){$x266->properties[\'file\']=\'<image>/07_number.js\';$x266->properties[\'line\']=86;$x266->properties[\'column\']=13;$x266->attributes[\'file\']=$x266->attributes[\'line\']=$x266->attributes[\'column\']=0;}throw new JSException($x266,86,13,\'<image>/07_number.js\');}$x261=clone JS::$objectTemplate;unset($x267,$W267,$S267,$U267);$x268=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),86,9,\'<image>/07_number.js\');$x267=&$x268[0];list(,$W267,$S267,$U267)=$x268;$x262=$x267;$x261->prototype=$x262;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x271=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),86,9,\'<image>/07_number.js\');$_TypeError=&$x271[0];list(,$WTypeError,$STypeError,$UTypeError)=$x271;$x272=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x273=$x272($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x273->class)&&$x273->class===\'Error\'&&!isset($x273->properties[\'file\'])&&!isset($x273->properties[\'line\'])&&!isset($x273->properties[\'column\'])){$x273->properties[\'file\']=\'<image>/07_number.js\';$x273->properties[\'line\']=86;$x273->properties[\'column\']=9;$x273->attributes[\'file\']=$x273->attributes[\'line\']=$x273->attributes[\'column\']=0;}throw new JSException($x273,86,9,\'<image>/07_number.js\');}$x269=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x270=$x269($global,$x261,$_RangeError,array(\'Number.prototype.toExponential(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x262=$x270;if(is_object($x262)&&$x262!==JS::$undefined){$x261=$x262;}if(isset($x261->class)&&$x261->class===\'Error\'&&!isset($x261->properties[\'file\'])&&!isset($x261->properties[\'line\'])&&!isset($x261->properties[\'column\'])){$x261->properties[\'file\']=\'<image>/07_number.js\';$x261->properties[\'line\']=86;$x261->properties[\'column\']=3;$x261->attributes[\'file\']=$x261->attributes[\'line\']=$x261->attributes[\'column\']=0;}throw new JSException($x261,86,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}$x274=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));if(JS::toBoolean($x274,$global)){$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::toNumber($_fractionDigits,$global);unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x275=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),104,7,\'<image>/07_number.js\');$_isNaN=&$x275[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x275;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x276=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),104,7,\'<image>/07_number.js\');$_ReferenceError=&$x276[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x276;$x277=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,7);$x278=$x277($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x278->class)&&$x278->class===\'Error\'&&!isset($x278->properties[\'file\'])&&!isset($x278->properties[\'line\'])&&!isset($x278->properties[\'column\'])){$x278->properties[\'file\']=\'<image>/07_number.js\';$x278->properties[\'line\']=104;$x278->properties[\'column\']=7;$x278->attributes[\'file\']=$x278->attributes[\'line\']=$x278->attributes[\'column\']=0;}throw new JSException($x278,104,7,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x281=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),104,12,\'<image>/07_number.js\');$_TypeError=&$x281[0];list(,$WTypeError,$STypeError,$UTypeError)=$x281;$x282=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x283=$x282($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x283->class)&&$x283->class===\'Error\'&&!isset($x283->properties[\'file\'])&&!isset($x283->properties[\'line\'])&&!isset($x283->properties[\'column\'])){$x283->properties[\'file\']=\'<image>/07_number.js\';$x283->properties[\'line\']=104;$x283->properties[\'column\']=12;$x283->attributes[\'file\']=$x283->attributes[\'line\']=$x283->attributes[\'column\']=0;}throw new JSException($x283,104,12,\'<image>/07_number.js\');}$x279=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x280=$x279($global,$global,$_isNaN,array($_d),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x280,$global)){$x284=0;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x284;}return sprintf(\'%.\'.$_d.\'e\',$leThis->value);}return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%e\',$leThis->value));return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x299 =& $scope->properties['arguments'];
$x299->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x299->properties[$i] = $args[$i];
$x299->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['precision'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_precision =& $scope->properties['precision'];
$Uprecision = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x300 = (((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
if (JS::toBoolean($x300, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x302 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 116, 23, '<image>/07_number.js');
$_TypeError =& $x302[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x302;
$x303 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x304 = $x303($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x304->class) && $x304->class === 'Error' && !isset($x304->properties['file']) && !isset($x304->properties['line']) && !isset($x304->properties['column'])) {$x304->properties['file'] = '<image>/07_number.js';$x304->properties['line'] = 116;$x304->properties['column'] = 23;$x304->attributes['file'] = $x304->attributes['line'] = $x304->attributes['column'] = 0; }
throw new JSException($x304, 116, 23, '<image>/07_number.js');
}
$x301 = JS::toObject($leThis, $global);
unset($x305, $W305, $S305, $U305);
$x306 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x301, JS::toString('toString', $global), 116, 23, '<image>/07_number.js');
$x305 =& $x306[0]; list(,$W305,$S305,$U305) = $x306;
if (!(is_object($x305) && isset($x305->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x309 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 116, 23, '<image>/07_number.js');
$_TypeError =& $x309[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x309;
$x310 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x311 = $x310($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x311->class) && $x311->class === 'Error' && !isset($x311->properties['file']) && !isset($x311->properties['line']) && !isset($x311->properties['column'])) {$x311->properties['file'] = '<image>/07_number.js';$x311->properties['line'] = 116;$x311->properties['column'] = 23;$x311->attributes['file'] = $x311->attributes['line'] = $x311->attributes['column'] = 0; }
throw new JSException($x311, 116, 23, '<image>/07_number.js');
}
$x307 = $x305->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x308 = $x307($global, $x301, $x305, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x308;;
};
$x314 = !(((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
$x313 = $x314;
if (JS::toBoolean($x313, $global)) {
$x316 = JS::toPrimitive($_precision, $global);
$x317 = JS::toPrimitive(1, $global);
$x318 = (is_string($x316) && is_string($x317) ? strcmp($x316, $x317) < 0 : (!is_nan($x319 = JS::toNumber($x316, $global)) && !is_nan($x320 = JS::toNumber($x317, $global)) && $x319 < $x320));
$x315 = $x318;
if (!JS::toBoolean($x315, $global)) {
$x321 = JS::toPrimitive($_precision, $global);
$x322 = JS::toPrimitive(21, $global);
$x323 = (is_string($x322) && is_string($x321) ? strcmp($x322, $x321) < 0 : (!is_nan($x324 = JS::toNumber($x322, $global)) && !is_nan($x325 = JS::toNumber($x321, $global)) && $x324 < $x325));
$x315 = $x323; }
$x313 = $x315; }
$x312 = $x313;
if (!JS::toBoolean($x312, $global)) {
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x326 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 119, 70, '<image>/07_number.js');
$_isNaN =& $x326[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x326;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x327 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 119, 70, '<image>/07_number.js');
$_ReferenceError =& $x327[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x327;
$x328 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 70);
$x329 = $x328($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x329->class) && $x329->class === 'Error' && !isset($x329->properties['file']) && !isset($x329->properties['line']) && !isset($x329->properties['column'])) {$x329->properties['file'] = '<image>/07_number.js';$x329->properties['line'] = 119;$x329->properties['column'] = 70;$x329->attributes['file'] = $x329->attributes['line'] = $x329->attributes['column'] = 0; }
throw new JSException($x329, 119, 70, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x332 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 119, 75, '<image>/07_number.js');
$_TypeError =& $x332[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x332;
$x333 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x334 = $x333($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x334->class) && $x334->class === 'Error' && !isset($x334->properties['file']) && !isset($x334->properties['line']) && !isset($x334->properties['column'])) {$x334->properties['file'] = '<image>/07_number.js';$x334->properties['line'] = 119;$x334->properties['column'] = 75;$x334->attributes['file'] = $x334->attributes['line'] = $x334->attributes['column'] = 0; }
throw new JSException($x334, 119, 75, '<image>/07_number.js');
}
$x330 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x331 = $x330($global, $global, $_isNaN, array($_precision), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x312 = $x331; }
if (JS::toBoolean($x312, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x337 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 120, 13, '<image>/07_number.js');
$_RangeError =& $x337[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x337;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x338 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 120, 13, '<image>/07_number.js');
$_ReferenceError =& $x338[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x338;
$x339 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 13);
$x340 = $x339($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x340->class) && $x340->class === 'Error' && !isset($x340->properties['file']) && !isset($x340->properties['line']) && !isset($x340->properties['column'])) {$x340->properties['file'] = '<image>/07_number.js';$x340->properties['line'] = 120;$x340->properties['column'] = 13;$x340->attributes['file'] = $x340->attributes['line'] = $x340->attributes['column'] = 0; }
throw new JSException($x340, 120, 13, '<image>/07_number.js');
}
$x335 = clone JS::$objectTemplate;
unset($x341, $W341, $S341, $U341);
$x342 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 120, 9, '<image>/07_number.js');
$x341 =& $x342[0]; list(,$W341,$S341,$U341) = $x342;
$x336 = $x341;
$x335->prototype = $x336;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x345 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 120, 9, '<image>/07_number.js');
$_TypeError =& $x345[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x345;
$x346 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x347 = $x346($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x347->class) && $x347->class === 'Error' && !isset($x347->properties['file']) && !isset($x347->properties['line']) && !isset($x347->properties['column'])) {$x347->properties['file'] = '<image>/07_number.js';$x347->properties['line'] = 120;$x347->properties['column'] = 9;$x347->attributes['file'] = $x347->attributes['line'] = $x347->attributes['column'] = 0; }
throw new JSException($x347, 120, 9, '<image>/07_number.js');
}
$x343 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x344 = $x343($global, $x335, $_RangeError, array('Number.prototype.toPrecision(): precision must be between 1 and 21'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x336 = $x344;
if (is_object($x336) && $x336 !== JS::$undefined) { $x335 = $x336; }
if (isset($x335->class) && $x335->class === 'Error' && !isset($x335->properties['file']) && !isset($x335->properties['line']) && !isset($x335->properties['column'])) {$x335->properties['file'] = '<image>/07_number.js';$x335->properties['line'] = 120;$x335->properties['column'] = 3;$x335->attributes['file'] = $x335->attributes['line'] = $x335->attributes['column'] = 0; }
throw new JSException($x335, 120, 3, '<image>/07_number.js');;
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
$x348 = JS::toNumber($_precision, $global);
if ($Uprecision) {$global->properties['precision'] = $_precision; $_precision =& $global->properties['precision']; }
$_precision = $x348;
return preg_replace('/[.]?0+e/', 'e', sprintf('%.' . JS::toString($_precision, $global) . 'g',
		round($leThis->value,$_precision- strlen((string) intval($leThis->value)))));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x299=&$scope->properties[\'arguments\'];$x299->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x299->properties[$i]=$args[$i];$x299->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'precision\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_precision=&$scope->properties[\'precision\'];$Uprecision=FALSE;$global->scope[++$global->scope_sp]=$scope;$x300=(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));if(JS::toBoolean($x300,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x302=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),116,23,\'<image>/07_number.js\');$_TypeError=&$x302[0];list(,$WTypeError,$STypeError,$UTypeError)=$x302;$x303=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x304=$x303($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x304->class)&&$x304->class===\'Error\'&&!isset($x304->properties[\'file\'])&&!isset($x304->properties[\'line\'])&&!isset($x304->properties[\'column\'])){$x304->properties[\'file\']=\'<image>/07_number.js\';$x304->properties[\'line\']=116;$x304->properties[\'column\']=23;$x304->attributes[\'file\']=$x304->attributes[\'line\']=$x304->attributes[\'column\']=0;}throw new JSException($x304,116,23,\'<image>/07_number.js\');}$x301=JS::toObject($leThis,$global);unset($x305,$W305,$S305,$U305);$x306=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$x301,JS::toString(\'toString\',$global),116,23,\'<image>/07_number.js\');$x305=&$x306[0];list(,$W305,$S305,$U305)=$x306;if(!(is_object($x305)&&isset($x305->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x309=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),116,23,\'<image>/07_number.js\');$_TypeError=&$x309[0];list(,$WTypeError,$STypeError,$UTypeError)=$x309;$x310=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x311=$x310($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x311->class)&&$x311->class===\'Error\'&&!isset($x311->properties[\'file\'])&&!isset($x311->properties[\'line\'])&&!isset($x311->properties[\'column\'])){$x311->properties[\'file\']=\'<image>/07_number.js\';$x311->properties[\'line\']=116;$x311->properties[\'column\']=23;$x311->attributes[\'file\']=$x311->attributes[\'line\']=$x311->attributes[\'column\']=0;}throw new JSException($x311,116,23,\'<image>/07_number.js\');}$x307=$x305->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x308=$x307($global,$x301,$x305,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x308;}$x314=!(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));$x313=$x314;if(JS::toBoolean($x313,$global)){$x316=JS::toPrimitive($_precision,$global);$x317=JS::toPrimitive(1,$global);$x318=(is_string($x316)&&is_string($x317)?strcmp($x316,$x317)<0:(!is_nan($x319=JS::toNumber($x316,$global))&&!is_nan($x320=JS::toNumber($x317,$global))&&$x319<$x320));$x315=$x318;if(!JS::toBoolean($x315,$global)){$x321=JS::toPrimitive($_precision,$global);$x322=JS::toPrimitive(21,$global);$x323=(is_string($x322)&&is_string($x321)?strcmp($x322,$x321)<0:(!is_nan($x324=JS::toNumber($x322,$global))&&!is_nan($x325=JS::toNumber($x321,$global))&&$x324<$x325));$x315=$x323;}$x313=$x315;}$x312=$x313;if(!JS::toBoolean($x312,$global)){unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x326=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),119,70,\'<image>/07_number.js\');$_isNaN=&$x326[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x326;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x327=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),119,70,\'<image>/07_number.js\');$_ReferenceError=&$x327[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x327;$x328=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,70);$x329=$x328($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x329->class)&&$x329->class===\'Error\'&&!isset($x329->properties[\'file\'])&&!isset($x329->properties[\'line\'])&&!isset($x329->properties[\'column\'])){$x329->properties[\'file\']=\'<image>/07_number.js\';$x329->properties[\'line\']=119;$x329->properties[\'column\']=70;$x329->attributes[\'file\']=$x329->attributes[\'line\']=$x329->attributes[\'column\']=0;}throw new JSException($x329,119,70,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x332=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),119,75,\'<image>/07_number.js\');$_TypeError=&$x332[0];list(,$WTypeError,$STypeError,$UTypeError)=$x332;$x333=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x334=$x333($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x334->class)&&$x334->class===\'Error\'&&!isset($x334->properties[\'file\'])&&!isset($x334->properties[\'line\'])&&!isset($x334->properties[\'column\'])){$x334->properties[\'file\']=\'<image>/07_number.js\';$x334->properties[\'line\']=119;$x334->properties[\'column\']=75;$x334->attributes[\'file\']=$x334->attributes[\'line\']=$x334->attributes[\'column\']=0;}throw new JSException($x334,119,75,\'<image>/07_number.js\');}$x330=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x331=$x330($global,$global,$_isNaN,array($_precision),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x312=$x331;}if(JS::toBoolean($x312,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x337=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),120,13,\'<image>/07_number.js\');$_RangeError=&$x337[0];list(,$WRangeError,$SRangeError,$URangeError)=$x337;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x338=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),120,13,\'<image>/07_number.js\');$_ReferenceError=&$x338[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x338;$x339=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,13);$x340=$x339($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x340->class)&&$x340->class===\'Error\'&&!isset($x340->properties[\'file\'])&&!isset($x340->properties[\'line\'])&&!isset($x340->properties[\'column\'])){$x340->properties[\'file\']=\'<image>/07_number.js\';$x340->properties[\'line\']=120;$x340->properties[\'column\']=13;$x340->attributes[\'file\']=$x340->attributes[\'line\']=$x340->attributes[\'column\']=0;}throw new JSException($x340,120,13,\'<image>/07_number.js\');}$x335=clone JS::$objectTemplate;unset($x341,$W341,$S341,$U341);$x342=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),120,9,\'<image>/07_number.js\');$x341=&$x342[0];list(,$W341,$S341,$U341)=$x342;$x336=$x341;$x335->prototype=$x336;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x345=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),120,9,\'<image>/07_number.js\');$_TypeError=&$x345[0];list(,$WTypeError,$STypeError,$UTypeError)=$x345;$x346=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x347=$x346($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x347->class)&&$x347->class===\'Error\'&&!isset($x347->properties[\'file\'])&&!isset($x347->properties[\'line\'])&&!isset($x347->properties[\'column\'])){$x347->properties[\'file\']=\'<image>/07_number.js\';$x347->properties[\'line\']=120;$x347->properties[\'column\']=9;$x347->attributes[\'file\']=$x347->attributes[\'line\']=$x347->attributes[\'column\']=0;}throw new JSException($x347,120,9,\'<image>/07_number.js\');}$x343=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x344=$x343($global,$x335,$_RangeError,array(\'Number.prototype.toPrecision(): precision must be between 1 and 21\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x336=$x344;if(is_object($x336)&&$x336!==JS::$undefined){$x335=$x336;}if(isset($x335->class)&&$x335->class===\'Error\'&&!isset($x335->properties[\'file\'])&&!isset($x335->properties[\'line\'])&&!isset($x335->properties[\'column\'])){$x335->properties[\'file\']=\'<image>/07_number.js\';$x335->properties[\'line\']=120;$x335->properties[\'column\']=3;$x335->attributes[\'file\']=$x335->attributes[\'line\']=$x335->attributes[\'column\']=0;}throw new JSException($x335,120,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}$x348=JS::toNumber($_precision,$global);if($Uprecision){$global->properties[\'precision\']=$_precision;$_precision=&$global->properties[\'precision\'];}$_precision=$x348;return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%.\'.JS::toString($_precision,$global).\'g\',round($leThis->value,$_precision-strlen((string)intval($leThis->value)))));return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/07_number.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/07_number.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
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
$x6 = JS::toString('MAX_VALUE', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x9 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 16, 18, '<image>/07_number.js');
$_TypeError =& $x9[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x9;
$x10 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 16, 18);
$x11 = $x10($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x11->class) && $x11->class === 'Error' && !isset($x11->properties['file']) && !isset($x11->properties['line']) && !isset($x11->properties['column'])) {$x11->properties['file'] = '<image>/07_number.js';$x11->properties['line'] = 16;$x11->properties['column'] = 18;$x11->attributes['file'] = $x11->attributes['line'] = $x11->attributes['column'] = 0; }
throw new JSException($x11, 16, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x12, $W12, $S12, $U12);
$x16 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x6, $global), 16, 18, '<image>/07_number.js');
$x12 =& $x16[0]; list(,$W12,$S12,$U12) = $x16;
if ($U12 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x6] = $x12; $x12 =& $_Number->properties[$x6]; $_Number->attributes[$x6] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U12 = FALSE; $W12 = TRUE; }
if (isset($_Number->class) && $_Number->class === 'Array') {  if (isset($_Number->properties['length']) && $_Number->properties['length'] !== JS::$undefined) { $x18 = $_Number->properties['length']; }  else { $x18 = 0; } }
if (isset($S12)) {
$x19 = $S12->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 16, 18);
$x20 = $x19($global, $_Number, $S12, array($x5), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x17 = $x20;
} else {
if (!$U12) {$x17 = $x5;if ($W12) { $x12 = $x5; }  }
else { $x17 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array') {if (is_int('MAX_VALUE') && 'MAX_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MAX_VALUE' + 1; }else if ($x6 === 'length' && is_int($x5) && $x18 > $x5) {  for ($i = $x5; $i < $x18; ++$i) {  unset($_Number->properties[$i], $_Number->attributes[$i]); }}};
$x21 = (int) PHP_INT_MAX + 1;
$x22 = JS::toString('MIN_VALUE', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x23 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 17, 18, '<image>/07_number.js');
$_TypeError =& $x23[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x23;
$x24 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x25 = $x24($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x25->class) && $x25->class === 'Error' && !isset($x25->properties['file']) && !isset($x25->properties['line']) && !isset($x25->properties['column'])) {$x25->properties['file'] = '<image>/07_number.js';$x25->properties['line'] = 17;$x25->properties['column'] = 18;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
throw new JSException($x25, 17, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x26, $W26, $S26, $U26);
$x27 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x22, $global), 17, 18, '<image>/07_number.js');
$x26 =& $x27[0]; list(,$W26,$S26,$U26) = $x27;
if ($U26 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x22] = $x26; $x26 =& $_Number->properties[$x22]; $_Number->attributes[$x22] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U26 = FALSE; $W26 = TRUE; }
if (isset($_Number->class) && $_Number->class === 'Array') {  if (isset($_Number->properties['length']) && $_Number->properties['length'] !== JS::$undefined) { $x29 = $_Number->properties['length']; }  else { $x29 = 0; } }
if (isset($S26)) {
$x30 = $S26->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x31 = $x30($global, $_Number, $S26, array($x21), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x28 = $x31;
} else {
if (!$U26) {$x28 = $x21;if ($W26) { $x26 = $x21; }  }
else { $x28 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array') {if (is_int('MIN_VALUE') && 'MIN_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MIN_VALUE' + 1; }else if ($x22 === 'length' && is_int($x21) && $x29 > $x21) {  for ($i = $x21; $i < $x29; ++$i) {  unset($_Number->properties[$i], $_Number->attributes[$i]); }}};
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x32 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('NaN', $global), 18, 14, '<image>/07_number.js');
$_NaN =& $x32[0]; list(,$WNaN,$SNaN,$UNaN) = $x32;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x33 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 18, 14, '<image>/07_number.js');
$_ReferenceError =& $x33[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x33;
$x34 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 14);
$x35 = $x34($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x35->class) && $x35->class === 'Error' && !isset($x35->properties['file']) && !isset($x35->properties['line']) && !isset($x35->properties['column'])) {$x35->properties['file'] = '<image>/07_number.js';$x35->properties['line'] = 18;$x35->properties['column'] = 14;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 18, 14, '<image>/07_number.js');
}
$x36 = JS::toString('NaN', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x37 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 18, 12, '<image>/07_number.js');
$_TypeError =& $x37[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x37;
$x38 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x39 = $x38($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x39->class) && $x39->class === 'Error' && !isset($x39->properties['file']) && !isset($x39->properties['line']) && !isset($x39->properties['column'])) {$x39->properties['file'] = '<image>/07_number.js';$x39->properties['line'] = 18;$x39->properties['column'] = 12;$x39->attributes['file'] = $x39->attributes['line'] = $x39->attributes['column'] = 0; }
throw new JSException($x39, 18, 12, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x40, $W40, $S40, $U40);
$x41 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x36, $global), 18, 12, '<image>/07_number.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
if ($U40 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x36] = $x40; $x40 =& $_Number->properties[$x36]; $_Number->attributes[$x36] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U40 = FALSE; $W40 = TRUE; }
if (isset($_Number->class) && $_Number->class === 'Array') {  if (isset($_Number->properties['length']) && $_Number->properties['length'] !== JS::$undefined) { $x43 = $_Number->properties['length']; }  else { $x43 = 0; } }
if (isset($S40)) {
$x44 = $S40->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x45 = $x44($global, $_Number, $S40, array($_NaN), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x42 = $x45;
} else {
if (!$U40) {$x42 = $_NaN;if ($W40) { $x40 = $_NaN; }  }
else { $x42 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array') {if (is_int('NaN') && 'NaN' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NaN' + 1; }else if ($x36 === 'length' && is_int($_NaN) && $x43 > $_NaN) {  for ($i = $_NaN; $i < $x43; ++$i) {  unset($_Number->properties[$i], $_Number->attributes[$i]); }}};
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x46 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('Infinity', $global), 19, 29, '<image>/07_number.js');
$_Infinity =& $x46[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x46;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x47 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 29, '<image>/07_number.js');
$_ReferenceError =& $x47[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x47;
$x48 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 29);
$x49 = $x48($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x49->class) && $x49->class === 'Error' && !isset($x49->properties['file']) && !isset($x49->properties['line']) && !isset($x49->properties['column'])) {$x49->properties['file'] = '<image>/07_number.js';$x49->properties['line'] = 19;$x49->properties['column'] = 29;$x49->attributes['file'] = $x49->attributes['line'] = $x49->attributes['column'] = 0; }
throw new JSException($x49, 19, 29, '<image>/07_number.js');
}
$x50 = (-1.0 * JS::toNumber($_Infinity, $global));
$x51 = JS::toString('NEGATIVE_INFINITY', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x52 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 19, 26, '<image>/07_number.js');
$_TypeError =& $x52[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x52;
$x53 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x54 = $x53($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x54->class) && $x54->class === 'Error' && !isset($x54->properties['file']) && !isset($x54->properties['line']) && !isset($x54->properties['column'])) {$x54->properties['file'] = '<image>/07_number.js';$x54->properties['line'] = 19;$x54->properties['column'] = 26;$x54->attributes['file'] = $x54->attributes['line'] = $x54->attributes['column'] = 0; }
throw new JSException($x54, 19, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x55, $W55, $S55, $U55);
$x56 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x51, $global), 19, 26, '<image>/07_number.js');
$x55 =& $x56[0]; list(,$W55,$S55,$U55) = $x56;
if ($U55 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x51] = $x55; $x55 =& $_Number->properties[$x51]; $_Number->attributes[$x51] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U55 = FALSE; $W55 = TRUE; }
if (isset($_Number->class) && $_Number->class === 'Array') {  if (isset($_Number->properties['length']) && $_Number->properties['length'] !== JS::$undefined) { $x58 = $_Number->properties['length']; }  else { $x58 = 0; } }
if (isset($S55)) {
$x59 = $S55->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x60 = $x59($global, $_Number, $S55, array($x50), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x57 = $x60;
} else {
if (!$U55) {$x57 = $x50;if ($W55) { $x55 = $x50; }  }
else { $x57 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array') {if (is_int('NEGATIVE_INFINITY') && 'NEGATIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NEGATIVE_INFINITY' + 1; }else if ($x51 === 'length' && is_int($x50) && $x58 > $x50) {  for ($i = $x50; $i < $x58; ++$i) {  unset($_Number->properties[$i], $_Number->attributes[$i]); }}};
$x61 = JS::toString('POSITIVE_INFINITY', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x62 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 20, 26, '<image>/07_number.js');
$_TypeError =& $x62[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x62;
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x64 = $x63($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x64->class) && $x64->class === 'Error' && !isset($x64->properties['file']) && !isset($x64->properties['line']) && !isset($x64->properties['column'])) {$x64->properties['file'] = '<image>/07_number.js';$x64->properties['line'] = 20;$x64->properties['column'] = 26;$x64->attributes['file'] = $x64->attributes['line'] = $x64->attributes['column'] = 0; }
throw new JSException($x64, 20, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x65, $W65, $S65, $U65);
$x66 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x61, $global), 20, 26, '<image>/07_number.js');
$x65 =& $x66[0]; list(,$W65,$S65,$U65) = $x66;
if ($U65 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x61] = $x65; $x65 =& $_Number->properties[$x61]; $_Number->attributes[$x61] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U65 = FALSE; $W65 = TRUE; }
if (isset($_Number->class) && $_Number->class === 'Array') {  if (isset($_Number->properties['length']) && $_Number->properties['length'] !== JS::$undefined) { $x68 = $_Number->properties['length']; }  else { $x68 = 0; } }
if (isset($S65)) {
$x69 = $S65->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x70 = $x69($global, $_Number, $S65, array($_Infinity), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x67 = $x70;
} else {
if (!$U65) {$x67 = $_Infinity;if ($W65) { $x65 = $_Infinity; }  }
else { $x67 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array') {if (is_int('POSITIVE_INFINITY') && 'POSITIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'POSITIVE_INFINITY' + 1; }else if ($x61 === 'length' && is_int($_Infinity) && $x68 > $_Infinity) {  for ($i = $_Infinity; $i < $x68; ++$i) {  unset($_Number->properties[$i], $_Number->attributes[$i]); }}};
$x71 = clone JS::$objectTemplate;
$x72 = JS::toString('prototype', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x73 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 22, 18, '<image>/07_number.js');
$_TypeError =& $x73[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x73;
$x74 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x75 = $x74($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x75->class) && $x75->class === 'Error' && !isset($x75->properties['file']) && !isset($x75->properties['line']) && !isset($x75->properties['column'])) {$x75->properties['file'] = '<image>/07_number.js';$x75->properties['line'] = 22;$x75->properties['column'] = 18;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 22, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x76, $W76, $S76, $U76);
$x77 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x72, $global), 22, 18, '<image>/07_number.js');
$x76 =& $x77[0]; list(,$W76,$S76,$U76) = $x77;
if ($U76 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x72] = $x76; $x76 =& $_Number->properties[$x72]; $_Number->attributes[$x72] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U76 = FALSE; $W76 = TRUE; }
if (isset($_Number->class) && $_Number->class === 'Array') {  if (isset($_Number->properties['length']) && $_Number->properties['length'] !== JS::$undefined) { $x79 = $_Number->properties['length']; }  else { $x79 = 0; } }
if (isset($S76)) {
$x80 = $S76->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x81 = $x80($global, $_Number, $S76, array($x71), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x78 = $x81;
} else {
if (!$U76) {$x78 = $x71;if ($W76) { $x76 = $x71; }  }
else { $x78 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_Number->properties['length']) { $_Number->properties['length'] = 'prototype' + 1; }else if ($x72 === 'length' && is_int($x71) && $x79 > $x71) {  for ($i = $x71; $i < $x79; ++$i) {  unset($_Number->properties[$i], $_Number->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x82 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('Object', $global), 23, 51, '<image>/07_number.js');
$_Object =& $x82[0]; list(,$WObject,$SObject,$UObject) = $x82;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x83 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 23, 51, '<image>/07_number.js');
$_ReferenceError =& $x83[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x83;
$x84 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 23, 51);
$x85 = $x84($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x85->class) && $x85->class === 'Error' && !isset($x85->properties['file']) && !isset($x85->properties['line']) && !isset($x85->properties['column'])) {$x85->properties['file'] = '<image>/07_number.js';$x85->properties['line'] = 23;$x85->properties['column'] = 51;$x85->attributes['file'] = $x85->attributes['line'] = $x85->attributes['column'] = 0; }
throw new JSException($x85, 23, 51, '<image>/07_number.js');
}
$_Number->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Number->properties['prototype']->class = 'Number';
$_Number->properties['prototype']->extensible = TRUE;
unset($x86, $W86, $S86, $U86);
$x92 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 26, 7, '<image>/07_number.js');
$x86 =& $x92[0]; list(,$W86,$S86,$U86) = $x92;
$x93 = JS::toString('constructor', $global);
if ($x86 === JS::$undefined || $x86 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x94 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 26, 30, '<image>/07_number.js');
$_TypeError =& $x94[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x94;
$x95 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x96 = $x95($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x96->class) && $x96->class === 'Error' && !isset($x96->properties['file']) && !isset($x96->properties['line']) && !isset($x96->properties['column'])) {$x96->properties['file'] = '<image>/07_number.js';$x96->properties['line'] = 26;$x96->properties['column'] = 30;$x96->attributes['file'] = $x96->attributes['line'] = $x96->attributes['column'] = 0; }
throw new JSException($x96, 26, 30, '<image>/07_number.js');
}
$x86 = JS::toObject($x86, $global);
unset($x97, $W97, $S97, $U97);
$x98 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x86, JS::toString($x93, $global), 26, 30, '<image>/07_number.js');
$x97 =& $x98[0]; list(,$W97,$S97,$U97) = $x98;
if ($U97 && (!isset($x86->extensible) || $x86->extensible)) {$x86->properties[$x93] = $x97; $x97 =& $x86->properties[$x93]; $x86->attributes[$x93] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U97 = FALSE; $W97 = TRUE; }
if (isset($x86->class) && $x86->class === 'Array') {  if (isset($x86->properties['length']) && $x86->properties['length'] !== JS::$undefined) { $x100 = $x86->properties['length']; }  else { $x100 = 0; } }
if (isset($S97)) {
$x101 = $S97->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x102 = $x101($global, $x86, $S97, array($_Number), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x99 = $x102;
} else {
if (!$U97) {$x99 = $_Number;if ($W97) { $x97 = $_Number; }  }
else { $x99 = JS::$undefined; }
}
if (isset($x86->class) && $x86->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x86->properties['length']) { $x86->properties['length'] = 'constructor' + 1; }else if ($x93 === 'length' && is_int($_Number) && $x100 > $_Number) {  for ($i = $_Number; $i < $x100; ++$i) {  unset($x86->properties[$i], $x86->attributes[$i]); }}};
$x151 = clone JS::$functionTemplate; $x151->call = '_ff9cabf943c61b87166e28285dc0448b_5'; $x151->parameters = array (
  0 => 'radix',
); $x151->scope = $scope; $x151->properties['prototype'] = clone JS::$objectTemplate; $x151->attributes['prototype'] = JS::WRITABLE; $x151->properties['prototype']->properties['constructor'] = $x151; $x151->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x151->properties['length'] = 1; $x151->attributes['length'] = 0;
unset($x152, $W152, $S152, $U152);
$x153 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 28, 7, '<image>/07_number.js');
$x152 =& $x153[0]; list(,$W152,$S152,$U152) = $x153;
$x154 = JS::toString('toString', $global);
if ($x152 === JS::$undefined || $x152 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x155 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 28, 27, '<image>/07_number.js');
$_TypeError =& $x155[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x155;
$x156 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x157 = $x156($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x157->class) && $x157->class === 'Error' && !isset($x157->properties['file']) && !isset($x157->properties['line']) && !isset($x157->properties['column'])) {$x157->properties['file'] = '<image>/07_number.js';$x157->properties['line'] = 28;$x157->properties['column'] = 27;$x157->attributes['file'] = $x157->attributes['line'] = $x157->attributes['column'] = 0; }
throw new JSException($x157, 28, 27, '<image>/07_number.js');
}
$x152 = JS::toObject($x152, $global);
unset($x158, $W158, $S158, $U158);
$x159 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x152, JS::toString($x154, $global), 28, 27, '<image>/07_number.js');
$x158 =& $x159[0]; list(,$W158,$S158,$U158) = $x159;
if ($U158 && (!isset($x152->extensible) || $x152->extensible)) {$x152->properties[$x154] = $x158; $x158 =& $x152->properties[$x154]; $x152->attributes[$x154] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U158 = FALSE; $W158 = TRUE; }
if (isset($x152->class) && $x152->class === 'Array') {  if (isset($x152->properties['length']) && $x152->properties['length'] !== JS::$undefined) { $x161 = $x152->properties['length']; }  else { $x161 = 0; } }
if (isset($S158)) {
$x162 = $S158->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x163 = $x162($global, $x152, $S158, array($x151), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x160 = $x163;
} else {
if (!$U158) {$x160 = $x151;if ($W158) { $x158 = $x151; }  }
else { $x160 = JS::$undefined; }
}
if (isset($x152->class) && $x152->class === 'Array') {if (is_int('toString') && 'toString' >= $x152->properties['length']) { $x152->properties['length'] = 'toString' + 1; }else if ($x154 === 'length' && is_int($x151) && $x161 > $x151) {  for ($i = $x151; $i < $x161; ++$i) {  unset($x152->properties[$i], $x152->attributes[$i]); }}};
unset($x164, $W164, $S164, $U164);
$x165 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 58, 41, '<image>/07_number.js');
$x164 =& $x165[0]; list(,$W164,$S164,$U164) = $x165;
unset($x166, $W166, $S166, $U166);
$x167 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x164, JS::toString('toString', $global), 58, 51, '<image>/07_number.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
unset($x168, $W168, $S168, $U168);
$x169 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 58, 7, '<image>/07_number.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
$x170 = JS::toString('toLocaleString', $global);
if ($x168 === JS::$undefined || $x168 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x171 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 58, 33, '<image>/07_number.js');
$_TypeError =& $x171[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x171;
$x172 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x173 = $x172($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x173->class) && $x173->class === 'Error' && !isset($x173->properties['file']) && !isset($x173->properties['line']) && !isset($x173->properties['column'])) {$x173->properties['file'] = '<image>/07_number.js';$x173->properties['line'] = 58;$x173->properties['column'] = 33;$x173->attributes['file'] = $x173->attributes['line'] = $x173->attributes['column'] = 0; }
throw new JSException($x173, 58, 33, '<image>/07_number.js');
}
$x168 = JS::toObject($x168, $global);
unset($x174, $W174, $S174, $U174);
$x175 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x168, JS::toString($x170, $global), 58, 33, '<image>/07_number.js');
$x174 =& $x175[0]; list(,$W174,$S174,$U174) = $x175;
if ($U174 && (!isset($x168->extensible) || $x168->extensible)) {$x168->properties[$x170] = $x174; $x174 =& $x168->properties[$x170]; $x168->attributes[$x170] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U174 = FALSE; $W174 = TRUE; }
if (isset($x168->class) && $x168->class === 'Array') {  if (isset($x168->properties['length']) && $x168->properties['length'] !== JS::$undefined) { $x177 = $x168->properties['length']; }  else { $x177 = 0; } }
if (isset($S174)) {
$x178 = $S174->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x179 = $x178($global, $x168, $S174, array($x166), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x176 = $x179;
} else {
if (!$U174) {$x176 = $x166;if ($W174) { $x174 = $x166; }  }
else { $x176 = JS::$undefined; }
}
if (isset($x168->class) && $x168->class === 'Array') {if (is_int('toLocaleString') && 'toLocaleString' >= $x168->properties['length']) { $x168->properties['length'] = 'toLocaleString' + 1; }else if ($x170 === 'length' && is_int($x166) && $x177 > $x166) {  for ($i = $x166; $i < $x177; ++$i) {  unset($x168->properties[$i], $x168->attributes[$i]); }}};
$x182 = clone JS::$functionTemplate; $x182->call = '_ff9cabf943c61b87166e28285dc0448b_6'; $x182->parameters = array (
); $x182->scope = $scope; $x182->properties['prototype'] = clone JS::$objectTemplate; $x182->attributes['prototype'] = JS::WRITABLE; $x182->properties['prototype']->properties['constructor'] = $x182; $x182->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x182->properties['length'] = 0; $x182->attributes['length'] = 0;
unset($x183, $W183, $S183, $U183);
$x184 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 60, 7, '<image>/07_number.js');
$x183 =& $x184[0]; list(,$W183,$S183,$U183) = $x184;
$x185 = JS::toString('valueOf', $global);
if ($x183 === JS::$undefined || $x183 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x186 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 60, 26, '<image>/07_number.js');
$_TypeError =& $x186[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x186;
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x188 = $x187($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/07_number.js';$x188->properties['line'] = 60;$x188->properties['column'] = 26;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 60, 26, '<image>/07_number.js');
}
$x183 = JS::toObject($x183, $global);
unset($x189, $W189, $S189, $U189);
$x190 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x183, JS::toString($x185, $global), 60, 26, '<image>/07_number.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
if ($U189 && (!isset($x183->extensible) || $x183->extensible)) {$x183->properties[$x185] = $x189; $x189 =& $x183->properties[$x185]; $x183->attributes[$x185] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U189 = FALSE; $W189 = TRUE; }
if (isset($x183->class) && $x183->class === 'Array') {  if (isset($x183->properties['length']) && $x183->properties['length'] !== JS::$undefined) { $x192 = $x183->properties['length']; }  else { $x192 = 0; } }
if (isset($S189)) {
$x193 = $S189->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x194 = $x193($global, $x183, $S189, array($x182), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x191 = $x194;
} else {
if (!$U189) {$x191 = $x182;if ($W189) { $x189 = $x182; }  }
else { $x191 = JS::$undefined; }
}
if (isset($x183->class) && $x183->class === 'Array') {if (is_int('valueOf') && 'valueOf' >= $x183->properties['length']) { $x183->properties['length'] = 'valueOf' + 1; }else if ($x185 === 'length' && is_int($x182) && $x192 > $x182) {  for ($i = $x182; $i < $x192; ++$i) {  unset($x183->properties[$i], $x183->attributes[$i]); }}};
$x233 = clone JS::$functionTemplate; $x233->call = '_ff9cabf943c61b87166e28285dc0448b_7'; $x233->parameters = array (
  0 => 'fractionDigits',
); $x233->scope = $scope; $x233->properties['prototype'] = clone JS::$objectTemplate; $x233->attributes['prototype'] = JS::WRITABLE; $x233->properties['prototype']->properties['constructor'] = $x233; $x233->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x233->properties['length'] = 1; $x233->attributes['length'] = 0;
unset($x234, $W234, $S234, $U234);
$x235 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 64, 7, '<image>/07_number.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
$x236 = JS::toString('toFixed', $global);
if ($x234 === JS::$undefined || $x234 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x237 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 64, 26, '<image>/07_number.js');
$_TypeError =& $x237[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x237;
$x238 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x239 = $x238($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x239->class) && $x239->class === 'Error' && !isset($x239->properties['file']) && !isset($x239->properties['line']) && !isset($x239->properties['column'])) {$x239->properties['file'] = '<image>/07_number.js';$x239->properties['line'] = 64;$x239->properties['column'] = 26;$x239->attributes['file'] = $x239->attributes['line'] = $x239->attributes['column'] = 0; }
throw new JSException($x239, 64, 26, '<image>/07_number.js');
}
$x234 = JS::toObject($x234, $global);
unset($x240, $W240, $S240, $U240);
$x241 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x234, JS::toString($x236, $global), 64, 26, '<image>/07_number.js');
$x240 =& $x241[0]; list(,$W240,$S240,$U240) = $x241;
if ($U240 && (!isset($x234->extensible) || $x234->extensible)) {$x234->properties[$x236] = $x240; $x240 =& $x234->properties[$x236]; $x234->attributes[$x236] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U240 = FALSE; $W240 = TRUE; }
if (isset($x234->class) && $x234->class === 'Array') {  if (isset($x234->properties['length']) && $x234->properties['length'] !== JS::$undefined) { $x243 = $x234->properties['length']; }  else { $x243 = 0; } }
if (isset($S240)) {
$x244 = $S240->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x245 = $x244($global, $x234, $S240, array($x233), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x242 = $x245;
} else {
if (!$U240) {$x242 = $x233;if ($W240) { $x240 = $x233; }  }
else { $x242 = JS::$undefined; }
}
if (isset($x234->class) && $x234->class === 'Array') {if (is_int('toFixed') && 'toFixed' >= $x234->properties['length']) { $x234->properties['length'] = 'toFixed' + 1; }else if ($x236 === 'length' && is_int($x233) && $x243 > $x233) {  for ($i = $x233; $i < $x243; ++$i) {  unset($x234->properties[$i], $x234->attributes[$i]); }}};
$x285 = clone JS::$functionTemplate; $x285->call = '_ff9cabf943c61b87166e28285dc0448b_8'; $x285->parameters = array (
  0 => 'fractionDigits',
); $x285->scope = $scope; $x285->properties['prototype'] = clone JS::$objectTemplate; $x285->attributes['prototype'] = JS::WRITABLE; $x285->properties['prototype']->properties['constructor'] = $x285; $x285->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x285->properties['length'] = 1; $x285->attributes['length'] = 0;
unset($x286, $W286, $S286, $U286);
$x287 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 84, 7, '<image>/07_number.js');
$x286 =& $x287[0]; list(,$W286,$S286,$U286) = $x287;
$x288 = JS::toString('toExponential', $global);
if ($x286 === JS::$undefined || $x286 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x289 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 84, 32, '<image>/07_number.js');
$_TypeError =& $x289[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x289;
$x290 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x291 = $x290($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x291->class) && $x291->class === 'Error' && !isset($x291->properties['file']) && !isset($x291->properties['line']) && !isset($x291->properties['column'])) {$x291->properties['file'] = '<image>/07_number.js';$x291->properties['line'] = 84;$x291->properties['column'] = 32;$x291->attributes['file'] = $x291->attributes['line'] = $x291->attributes['column'] = 0; }
throw new JSException($x291, 84, 32, '<image>/07_number.js');
}
$x286 = JS::toObject($x286, $global);
unset($x292, $W292, $S292, $U292);
$x293 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x286, JS::toString($x288, $global), 84, 32, '<image>/07_number.js');
$x292 =& $x293[0]; list(,$W292,$S292,$U292) = $x293;
if ($U292 && (!isset($x286->extensible) || $x286->extensible)) {$x286->properties[$x288] = $x292; $x292 =& $x286->properties[$x288]; $x286->attributes[$x288] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U292 = FALSE; $W292 = TRUE; }
if (isset($x286->class) && $x286->class === 'Array') {  if (isset($x286->properties['length']) && $x286->properties['length'] !== JS::$undefined) { $x295 = $x286->properties['length']; }  else { $x295 = 0; } }
if (isset($S292)) {
$x296 = $S292->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x297 = $x296($global, $x286, $S292, array($x285), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x294 = $x297;
} else {
if (!$U292) {$x294 = $x285;if ($W292) { $x292 = $x285; }  }
else { $x294 = JS::$undefined; }
}
if (isset($x286->class) && $x286->class === 'Array') {if (is_int('toExponential') && 'toExponential' >= $x286->properties['length']) { $x286->properties['length'] = 'toExponential' + 1; }else if ($x288 === 'length' && is_int($x285) && $x295 > $x285) {  for ($i = $x285; $i < $x295; ++$i) {  unset($x286->properties[$i], $x286->attributes[$i]); }}};
$x349 = clone JS::$functionTemplate; $x349->call = '_ff9cabf943c61b87166e28285dc0448b_9'; $x349->parameters = array (
  0 => 'precision',
); $x349->scope = $scope; $x349->properties['prototype'] = clone JS::$objectTemplate; $x349->attributes['prototype'] = JS::WRITABLE; $x349->properties['prototype']->properties['constructor'] = $x349; $x349->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x349->properties['length'] = 1; $x349->attributes['length'] = 0;
unset($x350, $W350, $S350, $U350);
$x351 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 114, 7, '<image>/07_number.js');
$x350 =& $x351[0]; list(,$W350,$S350,$U350) = $x351;
$x352 = JS::toString('toPrecision', $global);
if ($x350 === JS::$undefined || $x350 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x353 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 114, 30, '<image>/07_number.js');
$_TypeError =& $x353[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x353;
$x354 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x355 = $x354($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x355->class) && $x355->class === 'Error' && !isset($x355->properties['file']) && !isset($x355->properties['line']) && !isset($x355->properties['column'])) {$x355->properties['file'] = '<image>/07_number.js';$x355->properties['line'] = 114;$x355->properties['column'] = 30;$x355->attributes['file'] = $x355->attributes['line'] = $x355->attributes['column'] = 0; }
throw new JSException($x355, 114, 30, '<image>/07_number.js');
}
$x350 = JS::toObject($x350, $global);
unset($x356, $W356, $S356, $U356);
$x357 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x350, JS::toString($x352, $global), 114, 30, '<image>/07_number.js');
$x356 =& $x357[0]; list(,$W356,$S356,$U356) = $x357;
if ($U356 && (!isset($x350->extensible) || $x350->extensible)) {$x350->properties[$x352] = $x356; $x356 =& $x350->properties[$x352]; $x350->attributes[$x352] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U356 = FALSE; $W356 = TRUE; }
if (isset($x350->class) && $x350->class === 'Array') {  if (isset($x350->properties['length']) && $x350->properties['length'] !== JS::$undefined) { $x359 = $x350->properties['length']; }  else { $x359 = 0; } }
if (isset($S356)) {
$x360 = $S356->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x361 = $x360($global, $x350, $S356, array($x349), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x358 = $x361;
} else {
if (!$U356) {$x358 = $x349;if ($W356) { $x356 = $x349; }  }
else { $x358 = JS::$undefined; }
}
if (isset($x350->class) && $x350->class === 'Array') {if (is_int('toPrecision') && 'toPrecision' >= $x350->properties['length']) { $x350->properties['length'] = 'toPrecision' + 1; }else if ($x352 === 'length' && is_int($x349) && $x359 > $x349) {  for ($i = $x349; $i < $x359; ++$i) {  unset($x350->properties[$i], $x350->attributes[$i]); }}};
;
return JS::$undefined;
}
