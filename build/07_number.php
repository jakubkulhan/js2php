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
$x81 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x81[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x81;
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x83 = $x82($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error' && !isset($x83->properties['file']) && !isset($x83->properties['line']) && !isset($x83->properties['column'])) {$x83->properties['file'] = $file;$x83->properties['line'] = $line;$x83->properties['column'] = $column;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, $line, $column, $file);
}
$W80 = $S80 = $U80 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x80 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x84 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x85 = $x84($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x80 = $x85; }
else { $x80 = JS::$undefined; $U80 = TRUE; }
return array(&$x80, $W80, $S80, $U80);
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x81=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x81[0];list(,$WTypeError,$STypeError,$UTypeError)=$x81;$x82=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x83=$x82($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x83->class)&&$x83->class===\'Error\'&&!isset($x83->properties[\'file\'])&&!isset($x83->properties[\'line\'])&&!isset($x83->properties[\'column\'])){$x83->properties[\'file\']=$file;$x83->properties[\'line\']=$line;$x83->properties[\'column\']=$column;$x83->attributes[\'file\']=$x83->attributes[\'line\']=$x83->attributes[\'column\']=0;}throw new JSException($x83,$line,$column,$file);}$W80=$S80=$U80=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x80=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x84=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x85=$x84($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x80=$x85;}else{$x80=JS::$undefined;$U80=TRUE;}return array(&$x80,$W80,$S80,$U80);}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x97 =& $scope->properties['arguments'];
$x97->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x97->properties[$i] = $args[$i];
$x97->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['radix'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_radix =& $scope->properties['radix'];
$Uradix = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(isset($leThis->class) && $leThis->class !== 'Number', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x100 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 30, 13, '<image>/07_number.js');
$_TypeError =& $x100[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x100;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x101 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 30, 13, '<image>/07_number.js');
$_ReferenceError =& $x101[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x101;
$x102 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 13);
$x103 = $x102($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x103->class) && $x103->class === 'Error' && !isset($x103->properties['file']) && !isset($x103->properties['line']) && !isset($x103->properties['column'])) {$x103->properties['file'] = '<image>/07_number.js';$x103->properties['line'] = 30;$x103->properties['column'] = 13;$x103->attributes['file'] = $x103->attributes['line'] = $x103->attributes['column'] = 0; }
throw new JSException($x103, 30, 13, '<image>/07_number.js');
}
$x98 = clone JS::$objectTemplate;
unset($x104, $W104, $S104, $U104);
$x105 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 30, 9, '<image>/07_number.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
$x99 = $x104;
$x98->prototype = $x99;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x109 = $x108($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/07_number.js';$x109->properties['line'] = 30;$x109->properties['column'] = 9;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 30, 9, '<image>/07_number.js');
}
$x106 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 30, 9);
$x107 = $x106($global, $x98, $_TypeError, array('Number.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x99 = $x107;
if (is_object($x99) && $x99 !== JS::$undefined) { $x98 = $x99; }
if (isset($x98->class) && $x98->class === 'Error' && !isset($x98->properties['file']) && !isset($x98->properties['line']) && !isset($x98->properties['column'])) {$x98->properties['file'] = '<image>/07_number.js';$x98->properties['line'] = 30;$x98->properties['column'] = 3;$x98->attributes['file'] = $x98->attributes['line'] = $x98->attributes['column'] = 0; }
throw new JSException($x98, 30, 3, '<image>/07_number.js');;
};
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x110 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 33, 6, '<image>/07_number.js');
$_isNaN =& $x110[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x110;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x111 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 33, 6, '<image>/07_number.js');
$_ReferenceError =& $x111[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x111;
$x112 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 6);
$x113 = $x112($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x113->class) && $x113->class === 'Error' && !isset($x113->properties['file']) && !isset($x113->properties['line']) && !isset($x113->properties['column'])) {$x113->properties['file'] = '<image>/07_number.js';$x113->properties['line'] = 33;$x113->properties['column'] = 6;$x113->attributes['file'] = $x113->attributes['line'] = $x113->attributes['column'] = 0; }
throw new JSException($x113, 33, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x116 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 33, 11, '<image>/07_number.js');
$_TypeError =& $x116[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x116;
$x117 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x118 = $x117($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x118->class) && $x118->class === 'Error' && !isset($x118->properties['file']) && !isset($x118->properties['line']) && !isset($x118->properties['column'])) {$x118->properties['file'] = '<image>/07_number.js';$x118->properties['line'] = 33;$x118->properties['column'] = 11;$x118->attributes['file'] = $x118->attributes['line'] = $x118->attributes['column'] = 0; }
throw new JSException($x118, 33, 11, '<image>/07_number.js');
}
$x114 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 33, 11);
$x115 = $x114($global, $global, $_isNaN, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x115, $global)) {

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
$x119 = $_radix;
if (!JS::toBoolean($x119, $global)) {
$x119 = 10; }
if ($Uradix) {$global->properties['radix'] = $_radix; $_radix =& $global->properties['radix']; }
$_radix = $x119;
$x121 = JS::toPrimitive($_radix, $global);
$x122 = JS::toPrimitive(2, $global);
$x123 = (is_string($x121) && is_string($x122) ? strcmp($x121, $x122) < 0 : (!is_nan($x124 = JS::toNumber($x121, $global)) && !is_nan($x125 = JS::toNumber($x122, $global)) && $x124 < $x125));
$x120 = $x123;
if (!JS::toBoolean($x120, $global)) {
$x126 = JS::toPrimitive($_radix, $global);
$x127 = JS::toPrimitive(36, $global);
$x128 = (is_string($x127) && is_string($x126) ? strcmp($x127, $x126) < 0 : (!is_nan($x129 = JS::toNumber($x127, $global)) && !is_nan($x130 = JS::toNumber($x126, $global)) && $x129 < $x130));
$x120 = $x128; }
if (JS::toBoolean($x120, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x133 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 52, 13, '<image>/07_number.js');
$_RangeError =& $x133[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x133;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x134 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 52, 13, '<image>/07_number.js');
$_ReferenceError =& $x134[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x134;
$x135 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 13);
$x136 = $x135($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x136->class) && $x136->class === 'Error' && !isset($x136->properties['file']) && !isset($x136->properties['line']) && !isset($x136->properties['column'])) {$x136->properties['file'] = '<image>/07_number.js';$x136->properties['line'] = 52;$x136->properties['column'] = 13;$x136->attributes['file'] = $x136->attributes['line'] = $x136->attributes['column'] = 0; }
throw new JSException($x136, 52, 13, '<image>/07_number.js');
}
$x131 = clone JS::$objectTemplate;
unset($x137, $W137, $S137, $U137);
$x138 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 52, 9, '<image>/07_number.js');
$x137 =& $x138[0]; list(,$W137,$S137,$U137) = $x138;
$x132 = $x137;
$x131->prototype = $x132;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x141 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 52, 9, '<image>/07_number.js');
$_TypeError =& $x141[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x141;
$x142 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x143 = $x142($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x143->class) && $x143->class === 'Error' && !isset($x143->properties['file']) && !isset($x143->properties['line']) && !isset($x143->properties['column'])) {$x143->properties['file'] = '<image>/07_number.js';$x143->properties['line'] = 52;$x143->properties['column'] = 9;$x143->attributes['file'] = $x143->attributes['line'] = $x143->attributes['column'] = 0; }
throw new JSException($x143, 52, 9, '<image>/07_number.js');
}
$x139 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 52, 9);
$x140 = $x139($global, $x131, $_RangeError, array('Number.prototype.toString(): radix is not between 2 and 36.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x132 = $x140;
if (is_object($x132) && $x132 !== JS::$undefined) { $x131 = $x132; }
if (isset($x131->class) && $x131->class === 'Error' && !isset($x131->properties['file']) && !isset($x131->properties['line']) && !isset($x131->properties['column'])) {$x131->properties['file'] = '<image>/07_number.js';$x131->properties['line'] = 52;$x131->properties['column'] = 3;$x131->attributes['file'] = $x131->attributes['line'] = $x131->attributes['column'] = 0; }
throw new JSException($x131, 52, 3, '<image>/07_number.js');;
};
return base_convert((string) $leThis->value, 10,$_radix);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x97=&$scope->properties[\'arguments\'];$x97->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x97->properties[$i]=$args[$i];$x97->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'radix\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_radix=&$scope->properties[\'radix\'];$Uradix=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(isset($leThis->class)&&$leThis->class!==\'Number\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x100=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),30,13,\'<image>/07_number.js\');$_TypeError=&$x100[0];list(,$WTypeError,$STypeError,$UTypeError)=$x100;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x101=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),30,13,\'<image>/07_number.js\');$_ReferenceError=&$x101[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x101;$x102=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,13);$x103=$x102($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x103->class)&&$x103->class===\'Error\'&&!isset($x103->properties[\'file\'])&&!isset($x103->properties[\'line\'])&&!isset($x103->properties[\'column\'])){$x103->properties[\'file\']=\'<image>/07_number.js\';$x103->properties[\'line\']=30;$x103->properties[\'column\']=13;$x103->attributes[\'file\']=$x103->attributes[\'line\']=$x103->attributes[\'column\']=0;}throw new JSException($x103,30,13,\'<image>/07_number.js\');}$x98=clone JS::$objectTemplate;unset($x104,$W104,$S104,$U104);$x105=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),30,9,\'<image>/07_number.js\');$x104=&$x105[0];list(,$W104,$S104,$U104)=$x105;$x99=$x104;$x98->prototype=$x99;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x108=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x109=$x108($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x109->class)&&$x109->class===\'Error\'&&!isset($x109->properties[\'file\'])&&!isset($x109->properties[\'line\'])&&!isset($x109->properties[\'column\'])){$x109->properties[\'file\']=\'<image>/07_number.js\';$x109->properties[\'line\']=30;$x109->properties[\'column\']=9;$x109->attributes[\'file\']=$x109->attributes[\'line\']=$x109->attributes[\'column\']=0;}throw new JSException($x109,30,9,\'<image>/07_number.js\');}$x106=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',30,9);$x107=$x106($global,$x98,$_TypeError,array(\'Number.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x99=$x107;if(is_object($x99)&&$x99!==JS::$undefined){$x98=$x99;}if(isset($x98->class)&&$x98->class===\'Error\'&&!isset($x98->properties[\'file\'])&&!isset($x98->properties[\'line\'])&&!isset($x98->properties[\'column\'])){$x98->properties[\'file\']=\'<image>/07_number.js\';$x98->properties[\'line\']=30;$x98->properties[\'column\']=3;$x98->attributes[\'file\']=$x98->attributes[\'line\']=$x98->attributes[\'column\']=0;}throw new JSException($x98,30,3,\'<image>/07_number.js\');}unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x110=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),33,6,\'<image>/07_number.js\');$_isNaN=&$x110[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x110;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x111=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),33,6,\'<image>/07_number.js\');$_ReferenceError=&$x111[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x111;$x112=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,6);$x113=$x112($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x113->class)&&$x113->class===\'Error\'&&!isset($x113->properties[\'file\'])&&!isset($x113->properties[\'line\'])&&!isset($x113->properties[\'column\'])){$x113->properties[\'file\']=\'<image>/07_number.js\';$x113->properties[\'line\']=33;$x113->properties[\'column\']=6;$x113->attributes[\'file\']=$x113->attributes[\'line\']=$x113->attributes[\'column\']=0;}throw new JSException($x113,33,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x116=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),33,11,\'<image>/07_number.js\');$_TypeError=&$x116[0];list(,$WTypeError,$STypeError,$UTypeError)=$x116;$x117=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x118=$x117($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x118->class)&&$x118->class===\'Error\'&&!isset($x118->properties[\'file\'])&&!isset($x118->properties[\'line\'])&&!isset($x118->properties[\'column\'])){$x118->properties[\'file\']=\'<image>/07_number.js\';$x118->properties[\'line\']=33;$x118->properties[\'column\']=11;$x118->attributes[\'file\']=$x118->attributes[\'line\']=$x118->attributes[\'column\']=0;}throw new JSException($x118,33,11,\'<image>/07_number.js\');}$x114=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',33,11);$x115=$x114($global,$global,$_isNaN,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x115,$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}if(JS::toBoolean(is_float($leThis->value),$global)){return(string)$leThis->value;}$x119=$_radix;if(!JS::toBoolean($x119,$global)){$x119=10;}if($Uradix){$global->properties[\'radix\']=$_radix;$_radix=&$global->properties[\'radix\'];}$_radix=$x119;$x121=JS::toPrimitive($_radix,$global);$x122=JS::toPrimitive(2,$global);$x123=(is_string($x121)&&is_string($x122)?strcmp($x121,$x122)<0:(!is_nan($x124=JS::toNumber($x121,$global))&&!is_nan($x125=JS::toNumber($x122,$global))&&$x124<$x125));$x120=$x123;if(!JS::toBoolean($x120,$global)){$x126=JS::toPrimitive($_radix,$global);$x127=JS::toPrimitive(36,$global);$x128=(is_string($x127)&&is_string($x126)?strcmp($x127,$x126)<0:(!is_nan($x129=JS::toNumber($x127,$global))&&!is_nan($x130=JS::toNumber($x126,$global))&&$x129<$x130));$x120=$x128;}if(JS::toBoolean($x120,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x133=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),52,13,\'<image>/07_number.js\');$_RangeError=&$x133[0];list(,$WRangeError,$SRangeError,$URangeError)=$x133;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x134=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),52,13,\'<image>/07_number.js\');$_ReferenceError=&$x134[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x134;$x135=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,13);$x136=$x135($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x136->class)&&$x136->class===\'Error\'&&!isset($x136->properties[\'file\'])&&!isset($x136->properties[\'line\'])&&!isset($x136->properties[\'column\'])){$x136->properties[\'file\']=\'<image>/07_number.js\';$x136->properties[\'line\']=52;$x136->properties[\'column\']=13;$x136->attributes[\'file\']=$x136->attributes[\'line\']=$x136->attributes[\'column\']=0;}throw new JSException($x136,52,13,\'<image>/07_number.js\');}$x131=clone JS::$objectTemplate;unset($x137,$W137,$S137,$U137);$x138=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),52,9,\'<image>/07_number.js\');$x137=&$x138[0];list(,$W137,$S137,$U137)=$x138;$x132=$x137;$x131->prototype=$x132;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x141=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),52,9,\'<image>/07_number.js\');$_TypeError=&$x141[0];list(,$WTypeError,$STypeError,$UTypeError)=$x141;$x142=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x143=$x142($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x143->class)&&$x143->class===\'Error\'&&!isset($x143->properties[\'file\'])&&!isset($x143->properties[\'line\'])&&!isset($x143->properties[\'column\'])){$x143->properties[\'file\']=\'<image>/07_number.js\';$x143->properties[\'line\']=52;$x143->properties[\'column\']=9;$x143->attributes[\'file\']=$x143->attributes[\'line\']=$x143->attributes[\'column\']=0;}throw new JSException($x143,52,9,\'<image>/07_number.js\');}$x139=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',52,9);$x140=$x139($global,$x131,$_RangeError,array(\'Number.prototype.toString(): radix is not between 2 and 36.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x132=$x140;if(is_object($x132)&&$x132!==JS::$undefined){$x131=$x132;}if(isset($x131->class)&&$x131->class===\'Error\'&&!isset($x131->properties[\'file\'])&&!isset($x131->properties[\'line\'])&&!isset($x131->properties[\'column\'])){$x131->properties[\'file\']=\'<image>/07_number.js\';$x131->properties[\'line\']=52;$x131->properties[\'column\']=3;$x131->attributes[\'file\']=$x131->attributes[\'line\']=$x131->attributes[\'column\']=0;}throw new JSException($x131,52,3,\'<image>/07_number.js\');}return base_convert((string)$leThis->value,10,$_radix);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x172 =& $scope->properties['arguments'];
$x172->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x172->properties[$i] = $args[$i];
$x172->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x172=&$scope->properties[\'arguments\'];$x172->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x172->properties[$i]=$args[$i];$x172->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return$leThis->value;return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x186 =& $scope->properties['arguments'];
$x186->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x186->properties[$i] = $args[$i];
$x186->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x188 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x187 = $x188;
if (JS::toBoolean($x187, $global)) {
$x190 = JS::toPrimitive($_fractionDigits, $global);
$x191 = JS::toPrimitive(0, $global);
$x192 = (is_string($x190) && is_string($x191) ? strcmp($x190, $x191) < 0 : (!is_nan($x193 = JS::toNumber($x190, $global)) && !is_nan($x194 = JS::toNumber($x191, $global)) && $x193 < $x194));
$x189 = $x192;
if (!JS::toBoolean($x189, $global)) {
$x195 = JS::toPrimitive($_fractionDigits, $global);
$x196 = JS::toPrimitive(20, $global);
$x197 = (is_string($x196) && is_string($x195) ? strcmp($x196, $x195) < 0 : (!is_nan($x198 = JS::toNumber($x196, $global)) && !is_nan($x199 = JS::toNumber($x195, $global)) && $x198 < $x199));
$x189 = $x197; }
$x187 = $x189; }
if (JS::toBoolean($x187, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x202 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 66, 13, '<image>/07_number.js');
$_RangeError =& $x202[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x202;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x203 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 66, 13, '<image>/07_number.js');
$_ReferenceError =& $x203[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x203;
$x204 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 13);
$x205 = $x204($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x205->class) && $x205->class === 'Error' && !isset($x205->properties['file']) && !isset($x205->properties['line']) && !isset($x205->properties['column'])) {$x205->properties['file'] = '<image>/07_number.js';$x205->properties['line'] = 66;$x205->properties['column'] = 13;$x205->attributes['file'] = $x205->attributes['line'] = $x205->attributes['column'] = 0; }
throw new JSException($x205, 66, 13, '<image>/07_number.js');
}
$x200 = clone JS::$objectTemplate;
unset($x206, $W206, $S206, $U206);
$x207 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 66, 9, '<image>/07_number.js');
$x206 =& $x207[0]; list(,$W206,$S206,$U206) = $x207;
$x201 = $x206;
$x200->prototype = $x201;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x210 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 66, 9, '<image>/07_number.js');
$_TypeError =& $x210[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x210;
$x211 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x212 = $x211($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x212->class) && $x212->class === 'Error' && !isset($x212->properties['file']) && !isset($x212->properties['line']) && !isset($x212->properties['column'])) {$x212->properties['file'] = '<image>/07_number.js';$x212->properties['line'] = 66;$x212->properties['column'] = 9;$x212->attributes['file'] = $x212->attributes['line'] = $x212->attributes['column'] = 0; }
throw new JSException($x212, 66, 9, '<image>/07_number.js');
}
$x208 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 66, 9);
$x209 = $x208($global, $x200, $_RangeError, array('Number.prototype.toFixed(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x201 = $x209;
if (is_object($x201) && $x201 !== JS::$undefined) { $x200 = $x201; }
if (isset($x200->class) && $x200->class === 'Error' && !isset($x200->properties['file']) && !isset($x200->properties['line']) && !isset($x200->properties['column'])) {$x200->properties['file'] = '<image>/07_number.js';$x200->properties['line'] = 66;$x200->properties['column'] = 3;$x200->attributes['file'] = $x200->attributes['line'] = $x200->attributes['column'] = 0; }
throw new JSException($x200, 66, 3, '<image>/07_number.js');;
};
if (JS::toBoolean(is_nan($leThis->value), $global)) {

return 'NaN';;
};
$x213 = JS::toNumber($_fractionDigits, $global);
if ($UfractionDigits) {$global->properties['fractionDigits'] = $_fractionDigits; $_fractionDigits =& $global->properties['fractionDigits']; }
$_fractionDigits = $x213;
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x214 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 75, 6, '<image>/07_number.js');
$_isNaN =& $x214[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x214;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x215 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 75, 6, '<image>/07_number.js');
$_ReferenceError =& $x215[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x215;
$x216 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 6);
$x217 = $x216($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x217->class) && $x217->class === 'Error' && !isset($x217->properties['file']) && !isset($x217->properties['line']) && !isset($x217->properties['column'])) {$x217->properties['file'] = '<image>/07_number.js';$x217->properties['line'] = 75;$x217->properties['column'] = 6;$x217->attributes['file'] = $x217->attributes['line'] = $x217->attributes['column'] = 0; }
throw new JSException($x217, 75, 6, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x220 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 75, 11, '<image>/07_number.js');
$_TypeError =& $x220[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x220;
$x221 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x222 = $x221($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x222->class) && $x222->class === 'Error' && !isset($x222->properties['file']) && !isset($x222->properties['line']) && !isset($x222->properties['column'])) {$x222->properties['file'] = '<image>/07_number.js';$x222->properties['line'] = 75;$x222->properties['column'] = 11;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 75, 11, '<image>/07_number.js');
}
$x218 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 75, 11);
$x219 = $x218($global, $global, $_isNaN, array($_fractionDigits), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x219, $global)) {

return (string) intval(round($leThis->value));;
};
return sprintf('%.' .$_fractionDigits. 'f', $leThis->value);
return sprintf('%f', $leThis->value);
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x186=&$scope->properties[\'arguments\'];$x186->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x186->properties[$i]=$args[$i];$x186->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x188=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x187=$x188;if(JS::toBoolean($x187,$global)){$x190=JS::toPrimitive($_fractionDigits,$global);$x191=JS::toPrimitive(0,$global);$x192=(is_string($x190)&&is_string($x191)?strcmp($x190,$x191)<0:(!is_nan($x193=JS::toNumber($x190,$global))&&!is_nan($x194=JS::toNumber($x191,$global))&&$x193<$x194));$x189=$x192;if(!JS::toBoolean($x189,$global)){$x195=JS::toPrimitive($_fractionDigits,$global);$x196=JS::toPrimitive(20,$global);$x197=(is_string($x196)&&is_string($x195)?strcmp($x196,$x195)<0:(!is_nan($x198=JS::toNumber($x196,$global))&&!is_nan($x199=JS::toNumber($x195,$global))&&$x198<$x199));$x189=$x197;}$x187=$x189;}if(JS::toBoolean($x187,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x202=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),66,13,\'<image>/07_number.js\');$_RangeError=&$x202[0];list(,$WRangeError,$SRangeError,$URangeError)=$x202;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x203=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),66,13,\'<image>/07_number.js\');$_ReferenceError=&$x203[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x203;$x204=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,13);$x205=$x204($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x205->class)&&$x205->class===\'Error\'&&!isset($x205->properties[\'file\'])&&!isset($x205->properties[\'line\'])&&!isset($x205->properties[\'column\'])){$x205->properties[\'file\']=\'<image>/07_number.js\';$x205->properties[\'line\']=66;$x205->properties[\'column\']=13;$x205->attributes[\'file\']=$x205->attributes[\'line\']=$x205->attributes[\'column\']=0;}throw new JSException($x205,66,13,\'<image>/07_number.js\');}$x200=clone JS::$objectTemplate;unset($x206,$W206,$S206,$U206);$x207=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),66,9,\'<image>/07_number.js\');$x206=&$x207[0];list(,$W206,$S206,$U206)=$x207;$x201=$x206;$x200->prototype=$x201;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x210=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),66,9,\'<image>/07_number.js\');$_TypeError=&$x210[0];list(,$WTypeError,$STypeError,$UTypeError)=$x210;$x211=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x212=$x211($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x212->class)&&$x212->class===\'Error\'&&!isset($x212->properties[\'file\'])&&!isset($x212->properties[\'line\'])&&!isset($x212->properties[\'column\'])){$x212->properties[\'file\']=\'<image>/07_number.js\';$x212->properties[\'line\']=66;$x212->properties[\'column\']=9;$x212->attributes[\'file\']=$x212->attributes[\'line\']=$x212->attributes[\'column\']=0;}throw new JSException($x212,66,9,\'<image>/07_number.js\');}$x208=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',66,9);$x209=$x208($global,$x200,$_RangeError,array(\'Number.prototype.toFixed(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x201=$x209;if(is_object($x201)&&$x201!==JS::$undefined){$x200=$x201;}if(isset($x200->class)&&$x200->class===\'Error\'&&!isset($x200->properties[\'file\'])&&!isset($x200->properties[\'line\'])&&!isset($x200->properties[\'column\'])){$x200->properties[\'file\']=\'<image>/07_number.js\';$x200->properties[\'line\']=66;$x200->properties[\'column\']=3;$x200->attributes[\'file\']=$x200->attributes[\'line\']=$x200->attributes[\'column\']=0;}throw new JSException($x200,66,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}$x213=JS::toNumber($_fractionDigits,$global);if($UfractionDigits){$global->properties[\'fractionDigits\']=$_fractionDigits;$_fractionDigits=&$global->properties[\'fractionDigits\'];}$_fractionDigits=$x213;unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x214=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),75,6,\'<image>/07_number.js\');$_isNaN=&$x214[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x214;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x215=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),75,6,\'<image>/07_number.js\');$_ReferenceError=&$x215[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x215;$x216=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,6);$x217=$x216($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x217->class)&&$x217->class===\'Error\'&&!isset($x217->properties[\'file\'])&&!isset($x217->properties[\'line\'])&&!isset($x217->properties[\'column\'])){$x217->properties[\'file\']=\'<image>/07_number.js\';$x217->properties[\'line\']=75;$x217->properties[\'column\']=6;$x217->attributes[\'file\']=$x217->attributes[\'line\']=$x217->attributes[\'column\']=0;}throw new JSException($x217,75,6,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x220=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),75,11,\'<image>/07_number.js\');$_TypeError=&$x220[0];list(,$WTypeError,$STypeError,$UTypeError)=$x220;$x221=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x222=$x221($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x222->class)&&$x222->class===\'Error\'&&!isset($x222->properties[\'file\'])&&!isset($x222->properties[\'line\'])&&!isset($x222->properties[\'column\'])){$x222->properties[\'file\']=\'<image>/07_number.js\';$x222->properties[\'line\']=75;$x222->properties[\'column\']=11;$x222->attributes[\'file\']=$x222->attributes[\'line\']=$x222->attributes[\'column\']=0;}throw new JSException($x222,75,11,\'<image>/07_number.js\');}$x218=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',75,11);$x219=$x218($global,$global,$_isNaN,array($_fractionDigits),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x219,$global)){return(string)intval(round($leThis->value));}return sprintf(\'%.\'.$_fractionDigits.\'f\',$leThis->value);return sprintf(\'%f\',$leThis->value);return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x236 =& $scope->properties['arguments'];
$x236->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x236->properties[$i] = $args[$i];
$x236->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fractionDigits'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fractionDigits =& $scope->properties['fractionDigits'];
$UfractionDigits = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x238 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
$x237 = $x238;
if (JS::toBoolean($x237, $global)) {
$x240 = JS::toPrimitive($_fractionDigits, $global);
$x241 = JS::toPrimitive(0, $global);
$x242 = (is_string($x240) && is_string($x241) ? strcmp($x240, $x241) < 0 : (!is_nan($x243 = JS::toNumber($x240, $global)) && !is_nan($x244 = JS::toNumber($x241, $global)) && $x243 < $x244));
$x239 = $x242;
if (!JS::toBoolean($x239, $global)) {
$x245 = JS::toPrimitive($_fractionDigits, $global);
$x246 = JS::toPrimitive(20, $global);
$x247 = (is_string($x246) && is_string($x245) ? strcmp($x246, $x245) < 0 : (!is_nan($x248 = JS::toNumber($x246, $global)) && !is_nan($x249 = JS::toNumber($x245, $global)) && $x248 < $x249));
$x239 = $x247; }
$x237 = $x239; }
if (JS::toBoolean($x237, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x252 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 86, 13, '<image>/07_number.js');
$_RangeError =& $x252[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x252;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x253 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 86, 13, '<image>/07_number.js');
$_ReferenceError =& $x253[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x253;
$x254 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 13);
$x255 = $x254($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x255->class) && $x255->class === 'Error' && !isset($x255->properties['file']) && !isset($x255->properties['line']) && !isset($x255->properties['column'])) {$x255->properties['file'] = '<image>/07_number.js';$x255->properties['line'] = 86;$x255->properties['column'] = 13;$x255->attributes['file'] = $x255->attributes['line'] = $x255->attributes['column'] = 0; }
throw new JSException($x255, 86, 13, '<image>/07_number.js');
}
$x250 = clone JS::$objectTemplate;
unset($x256, $W256, $S256, $U256);
$x257 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 86, 9, '<image>/07_number.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
$x251 = $x256;
$x250->prototype = $x251;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x260 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 86, 9, '<image>/07_number.js');
$_TypeError =& $x260[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x260;
$x261 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x262 = $x261($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x262->class) && $x262->class === 'Error' && !isset($x262->properties['file']) && !isset($x262->properties['line']) && !isset($x262->properties['column'])) {$x262->properties['file'] = '<image>/07_number.js';$x262->properties['line'] = 86;$x262->properties['column'] = 9;$x262->attributes['file'] = $x262->attributes['line'] = $x262->attributes['column'] = 0; }
throw new JSException($x262, 86, 9, '<image>/07_number.js');
}
$x258 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 86, 9);
$x259 = $x258($global, $x250, $_RangeError, array('Number.prototype.toExponential(): argument must be between 0 and 20'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x251 = $x259;
if (is_object($x251) && $x251 !== JS::$undefined) { $x250 = $x251; }
if (isset($x250->class) && $x250->class === 'Error' && !isset($x250->properties['file']) && !isset($x250->properties['line']) && !isset($x250->properties['column'])) {$x250->properties['file'] = '<image>/07_number.js';$x250->properties['line'] = 86;$x250->properties['column'] = 3;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 86, 3, '<image>/07_number.js');;
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
$x263 = !(((gettype($_fractionDigits) === gettype(JS::$undefined) && $_fractionDigits === JS::$undefined))|| (((is_float($_fractionDigits) || is_int($_fractionDigits)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_fractionDigits == JS::$undefined));
if (JS::toBoolean($x263, $global)) {
$scope->properties['d'] = JS::$undefined; $_d =& $scope->properties['d'];
$Ud = FALSE;
$_d = JS::toNumber($_fractionDigits, $global);
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x264 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 104, 7, '<image>/07_number.js');
$_isNaN =& $x264[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x264;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x265 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 104, 7, '<image>/07_number.js');
$_ReferenceError =& $x265[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x265;
$x266 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 7);
$x267 = $x266($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x267->class) && $x267->class === 'Error' && !isset($x267->properties['file']) && !isset($x267->properties['line']) && !isset($x267->properties['column'])) {$x267->properties['file'] = '<image>/07_number.js';$x267->properties['line'] = 104;$x267->properties['column'] = 7;$x267->attributes['file'] = $x267->attributes['line'] = $x267->attributes['column'] = 0; }
throw new JSException($x267, 104, 7, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x270 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 104, 12, '<image>/07_number.js');
$_TypeError =& $x270[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x270;
$x271 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x272 = $x271($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x272->class) && $x272->class === 'Error' && !isset($x272->properties['file']) && !isset($x272->properties['line']) && !isset($x272->properties['column'])) {$x272->properties['file'] = '<image>/07_number.js';$x272->properties['line'] = 104;$x272->properties['column'] = 12;$x272->attributes['file'] = $x272->attributes['line'] = $x272->attributes['column'] = 0; }
throw new JSException($x272, 104, 12, '<image>/07_number.js');
}
$x268 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 104, 12);
$x269 = $x268($global, $global, $_isNaN, array($_d), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (JS::toBoolean($x269, $global)) {
$x273 = 0;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x273;;
};
return sprintf('%.' .$_d. 'e', $leThis->value);;
};
return preg_replace('/[.]?0+e/', 'e', sprintf('%e', $leThis->value));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x236=&$scope->properties[\'arguments\'];$x236->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x236->properties[$i]=$args[$i];$x236->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fractionDigits\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fractionDigits=&$scope->properties[\'fractionDigits\'];$UfractionDigits=FALSE;$global->scope[++$global->scope_sp]=$scope;$x238=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));$x237=$x238;if(JS::toBoolean($x237,$global)){$x240=JS::toPrimitive($_fractionDigits,$global);$x241=JS::toPrimitive(0,$global);$x242=(is_string($x240)&&is_string($x241)?strcmp($x240,$x241)<0:(!is_nan($x243=JS::toNumber($x240,$global))&&!is_nan($x244=JS::toNumber($x241,$global))&&$x243<$x244));$x239=$x242;if(!JS::toBoolean($x239,$global)){$x245=JS::toPrimitive($_fractionDigits,$global);$x246=JS::toPrimitive(20,$global);$x247=(is_string($x246)&&is_string($x245)?strcmp($x246,$x245)<0:(!is_nan($x248=JS::toNumber($x246,$global))&&!is_nan($x249=JS::toNumber($x245,$global))&&$x248<$x249));$x239=$x247;}$x237=$x239;}if(JS::toBoolean($x237,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x252=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),86,13,\'<image>/07_number.js\');$_RangeError=&$x252[0];list(,$WRangeError,$SRangeError,$URangeError)=$x252;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x253=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),86,13,\'<image>/07_number.js\');$_ReferenceError=&$x253[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x253;$x254=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,13);$x255=$x254($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x255->class)&&$x255->class===\'Error\'&&!isset($x255->properties[\'file\'])&&!isset($x255->properties[\'line\'])&&!isset($x255->properties[\'column\'])){$x255->properties[\'file\']=\'<image>/07_number.js\';$x255->properties[\'line\']=86;$x255->properties[\'column\']=13;$x255->attributes[\'file\']=$x255->attributes[\'line\']=$x255->attributes[\'column\']=0;}throw new JSException($x255,86,13,\'<image>/07_number.js\');}$x250=clone JS::$objectTemplate;unset($x256,$W256,$S256,$U256);$x257=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),86,9,\'<image>/07_number.js\');$x256=&$x257[0];list(,$W256,$S256,$U256)=$x257;$x251=$x256;$x250->prototype=$x251;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x260=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),86,9,\'<image>/07_number.js\');$_TypeError=&$x260[0];list(,$WTypeError,$STypeError,$UTypeError)=$x260;$x261=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x262=$x261($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x262->class)&&$x262->class===\'Error\'&&!isset($x262->properties[\'file\'])&&!isset($x262->properties[\'line\'])&&!isset($x262->properties[\'column\'])){$x262->properties[\'file\']=\'<image>/07_number.js\';$x262->properties[\'line\']=86;$x262->properties[\'column\']=9;$x262->attributes[\'file\']=$x262->attributes[\'line\']=$x262->attributes[\'column\']=0;}throw new JSException($x262,86,9,\'<image>/07_number.js\');}$x258=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',86,9);$x259=$x258($global,$x250,$_RangeError,array(\'Number.prototype.toExponential(): argument must be between 0 and 20\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x251=$x259;if(is_object($x251)&&$x251!==JS::$undefined){$x250=$x251;}if(isset($x250->class)&&$x250->class===\'Error\'&&!isset($x250->properties[\'file\'])&&!isset($x250->properties[\'line\'])&&!isset($x250->properties[\'column\'])){$x250->properties[\'file\']=\'<image>/07_number.js\';$x250->properties[\'line\']=86;$x250->properties[\'column\']=3;$x250->attributes[\'file\']=$x250->attributes[\'line\']=$x250->attributes[\'column\']=0;}throw new JSException($x250,86,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}$x263=!(((gettype($_fractionDigits)===gettype(JS::$undefined)&&$_fractionDigits===JS::$undefined))||(((is_float($_fractionDigits)||is_int($_fractionDigits))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_fractionDigits==JS::$undefined));if(JS::toBoolean($x263,$global)){$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::toNumber($_fractionDigits,$global);unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x264=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),104,7,\'<image>/07_number.js\');$_isNaN=&$x264[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x264;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x265=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),104,7,\'<image>/07_number.js\');$_ReferenceError=&$x265[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x265;$x266=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,7);$x267=$x266($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x267->class)&&$x267->class===\'Error\'&&!isset($x267->properties[\'file\'])&&!isset($x267->properties[\'line\'])&&!isset($x267->properties[\'column\'])){$x267->properties[\'file\']=\'<image>/07_number.js\';$x267->properties[\'line\']=104;$x267->properties[\'column\']=7;$x267->attributes[\'file\']=$x267->attributes[\'line\']=$x267->attributes[\'column\']=0;}throw new JSException($x267,104,7,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x270=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),104,12,\'<image>/07_number.js\');$_TypeError=&$x270[0];list(,$WTypeError,$STypeError,$UTypeError)=$x270;$x271=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x272=$x271($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x272->class)&&$x272->class===\'Error\'&&!isset($x272->properties[\'file\'])&&!isset($x272->properties[\'line\'])&&!isset($x272->properties[\'column\'])){$x272->properties[\'file\']=\'<image>/07_number.js\';$x272->properties[\'line\']=104;$x272->properties[\'column\']=12;$x272->attributes[\'file\']=$x272->attributes[\'line\']=$x272->attributes[\'column\']=0;}throw new JSException($x272,104,12,\'<image>/07_number.js\');}$x268=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',104,12);$x269=$x268($global,$global,$_isNaN,array($_d),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(JS::toBoolean($x269,$global)){$x273=0;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x273;}return sprintf(\'%.\'.$_d.\'e\',$leThis->value);}return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%e\',$leThis->value));return JS::$undefined;}', "\n";
function _ff9cabf943c61b87166e28285dc0448b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x287 =& $scope->properties['arguments'];
$x287->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x287->properties[$i] = $args[$i];
$x287->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['precision'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_precision =& $scope->properties['precision'];
$Uprecision = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x288 = (((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
if (JS::toBoolean($x288, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x290 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 116, 23, '<image>/07_number.js');
$_TypeError =& $x290[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x290;
$x291 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x292 = $x291($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x292->class) && $x292->class === 'Error' && !isset($x292->properties['file']) && !isset($x292->properties['line']) && !isset($x292->properties['column'])) {$x292->properties['file'] = '<image>/07_number.js';$x292->properties['line'] = 116;$x292->properties['column'] = 23;$x292->attributes['file'] = $x292->attributes['line'] = $x292->attributes['column'] = 0; }
throw new JSException($x292, 116, 23, '<image>/07_number.js');
}
$x289 = JS::toObject($leThis, $global);
unset($x293, $W293, $S293, $U293);
$x294 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x289, JS::toString('toString', $global), 116, 23, '<image>/07_number.js');
$x293 =& $x294[0]; list(,$W293,$S293,$U293) = $x294;
if (!(is_object($x293) && isset($x293->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x297 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 116, 23, '<image>/07_number.js');
$_TypeError =& $x297[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x297;
$x298 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x299 = $x298($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x299->class) && $x299->class === 'Error' && !isset($x299->properties['file']) && !isset($x299->properties['line']) && !isset($x299->properties['column'])) {$x299->properties['file'] = '<image>/07_number.js';$x299->properties['line'] = 116;$x299->properties['column'] = 23;$x299->attributes['file'] = $x299->attributes['line'] = $x299->attributes['column'] = 0; }
throw new JSException($x299, 116, 23, '<image>/07_number.js');
}
$x295 = $x293->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 116, 23);
$x296 = $x295($global, $x289, $x293, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x296;;
};
$x302 = !(((gettype($_precision) === gettype(JS::$undefined) && $_precision === JS::$undefined))|| (((is_float($_precision) || is_int($_precision)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_precision == JS::$undefined));
$x301 = $x302;
if (JS::toBoolean($x301, $global)) {
$x304 = JS::toPrimitive($_precision, $global);
$x305 = JS::toPrimitive(1, $global);
$x306 = (is_string($x304) && is_string($x305) ? strcmp($x304, $x305) < 0 : (!is_nan($x307 = JS::toNumber($x304, $global)) && !is_nan($x308 = JS::toNumber($x305, $global)) && $x307 < $x308));
$x303 = $x306;
if (!JS::toBoolean($x303, $global)) {
$x309 = JS::toPrimitive($_precision, $global);
$x310 = JS::toPrimitive(21, $global);
$x311 = (is_string($x310) && is_string($x309) ? strcmp($x310, $x309) < 0 : (!is_nan($x312 = JS::toNumber($x310, $global)) && !is_nan($x313 = JS::toNumber($x309, $global)) && $x312 < $x313));
$x303 = $x311; }
$x301 = $x303; }
$x300 = $x301;
if (!JS::toBoolean($x300, $global)) {
unset($_isNaN, $WisNaN, $SisNaN, $UisNaN);
$x314 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('isNaN', $global), 119, 70, '<image>/07_number.js');
$_isNaN =& $x314[0]; list(,$WisNaN,$SisNaN,$UisNaN) = $x314;
if ($UisNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x315 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 119, 70, '<image>/07_number.js');
$_ReferenceError =& $x315[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x315;
$x316 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 70);
$x317 = $x316($global, $global, $_ReferenceError, array('isNaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x317->class) && $x317->class === 'Error' && !isset($x317->properties['file']) && !isset($x317->properties['line']) && !isset($x317->properties['column'])) {$x317->properties['file'] = '<image>/07_number.js';$x317->properties['line'] = 119;$x317->properties['column'] = 70;$x317->attributes['file'] = $x317->attributes['line'] = $x317->attributes['column'] = 0; }
throw new JSException($x317, 119, 70, '<image>/07_number.js');
}
if (!(is_object($_isNaN) && isset($_isNaN->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x320 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 119, 75, '<image>/07_number.js');
$_TypeError =& $x320[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x320;
$x321 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x322 = $x321($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x322->class) && $x322->class === 'Error' && !isset($x322->properties['file']) && !isset($x322->properties['line']) && !isset($x322->properties['column'])) {$x322->properties['file'] = '<image>/07_number.js';$x322->properties['line'] = 119;$x322->properties['column'] = 75;$x322->attributes['file'] = $x322->attributes['line'] = $x322->attributes['column'] = 0; }
throw new JSException($x322, 119, 75, '<image>/07_number.js');
}
$x318 = $_isNaN->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 119, 75);
$x319 = $x318($global, $global, $_isNaN, array($_precision), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x300 = $x319; }
if (JS::toBoolean($x300, $global)) {
unset($_RangeError, $WRangeError, $SRangeError, $URangeError);
$x325 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('RangeError', $global), 120, 13, '<image>/07_number.js');
$_RangeError =& $x325[0]; list(,$WRangeError,$SRangeError,$URangeError) = $x325;
if ($URangeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x326 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 120, 13, '<image>/07_number.js');
$_ReferenceError =& $x326[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x326;
$x327 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 13);
$x328 = $x327($global, $global, $_ReferenceError, array('RangeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x328->class) && $x328->class === 'Error' && !isset($x328->properties['file']) && !isset($x328->properties['line']) && !isset($x328->properties['column'])) {$x328->properties['file'] = '<image>/07_number.js';$x328->properties['line'] = 120;$x328->properties['column'] = 13;$x328->attributes['file'] = $x328->attributes['line'] = $x328->attributes['column'] = 0; }
throw new JSException($x328, 120, 13, '<image>/07_number.js');
}
$x323 = clone JS::$objectTemplate;
unset($x329, $W329, $S329, $U329);
$x330 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_RangeError, JS::toString('prototype', $global), 120, 9, '<image>/07_number.js');
$x329 =& $x330[0]; list(,$W329,$S329,$U329) = $x330;
$x324 = $x329;
$x323->prototype = $x324;
if (!(is_object($_RangeError) && isset($_RangeError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x333 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 120, 9, '<image>/07_number.js');
$_TypeError =& $x333[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x333;
$x334 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x335 = $x334($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x335->class) && $x335->class === 'Error' && !isset($x335->properties['file']) && !isset($x335->properties['line']) && !isset($x335->properties['column'])) {$x335->properties['file'] = '<image>/07_number.js';$x335->properties['line'] = 120;$x335->properties['column'] = 9;$x335->attributes['file'] = $x335->attributes['line'] = $x335->attributes['column'] = 0; }
throw new JSException($x335, 120, 9, '<image>/07_number.js');
}
$x331 = $_RangeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 120, 9);
$x332 = $x331($global, $x323, $_RangeError, array('Number.prototype.toPrecision(): precision must be between 1 and 21'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x324 = $x332;
if (is_object($x324) && $x324 !== JS::$undefined) { $x323 = $x324; }
if (isset($x323->class) && $x323->class === 'Error' && !isset($x323->properties['file']) && !isset($x323->properties['line']) && !isset($x323->properties['column'])) {$x323->properties['file'] = '<image>/07_number.js';$x323->properties['line'] = 120;$x323->properties['column'] = 3;$x323->attributes['file'] = $x323->attributes['line'] = $x323->attributes['column'] = 0; }
throw new JSException($x323, 120, 3, '<image>/07_number.js');;
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
$x336 = JS::toNumber($_precision, $global);
if ($Uprecision) {$global->properties['precision'] = $_precision; $_precision =& $global->properties['precision']; }
$_precision = $x336;
return preg_replace('/[.]?0+e/', 'e', sprintf('%.' . JS::toString($_precision, $global) . 'g',
		round($leThis->value,$_precision- strlen((string) intval($leThis->value)))));
;
return JS::$undefined;
}
echo 'function _ff9cabf943c61b87166e28285dc0448b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x287=&$scope->properties[\'arguments\'];$x287->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x287->properties[$i]=$args[$i];$x287->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'precision\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_precision=&$scope->properties[\'precision\'];$Uprecision=FALSE;$global->scope[++$global->scope_sp]=$scope;$x288=(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));if(JS::toBoolean($x288,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x290=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),116,23,\'<image>/07_number.js\');$_TypeError=&$x290[0];list(,$WTypeError,$STypeError,$UTypeError)=$x290;$x291=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x292=$x291($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x292->class)&&$x292->class===\'Error\'&&!isset($x292->properties[\'file\'])&&!isset($x292->properties[\'line\'])&&!isset($x292->properties[\'column\'])){$x292->properties[\'file\']=\'<image>/07_number.js\';$x292->properties[\'line\']=116;$x292->properties[\'column\']=23;$x292->attributes[\'file\']=$x292->attributes[\'line\']=$x292->attributes[\'column\']=0;}throw new JSException($x292,116,23,\'<image>/07_number.js\');}$x289=JS::toObject($leThis,$global);unset($x293,$W293,$S293,$U293);$x294=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$x289,JS::toString(\'toString\',$global),116,23,\'<image>/07_number.js\');$x293=&$x294[0];list(,$W293,$S293,$U293)=$x294;if(!(is_object($x293)&&isset($x293->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x297=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),116,23,\'<image>/07_number.js\');$_TypeError=&$x297[0];list(,$WTypeError,$STypeError,$UTypeError)=$x297;$x298=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x299=$x298($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x299->class)&&$x299->class===\'Error\'&&!isset($x299->properties[\'file\'])&&!isset($x299->properties[\'line\'])&&!isset($x299->properties[\'column\'])){$x299->properties[\'file\']=\'<image>/07_number.js\';$x299->properties[\'line\']=116;$x299->properties[\'column\']=23;$x299->attributes[\'file\']=$x299->attributes[\'line\']=$x299->attributes[\'column\']=0;}throw new JSException($x299,116,23,\'<image>/07_number.js\');}$x295=$x293->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',116,23);$x296=$x295($global,$x289,$x293,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x296;}$x302=!(((gettype($_precision)===gettype(JS::$undefined)&&$_precision===JS::$undefined))||(((is_float($_precision)||is_int($_precision))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_precision==JS::$undefined));$x301=$x302;if(JS::toBoolean($x301,$global)){$x304=JS::toPrimitive($_precision,$global);$x305=JS::toPrimitive(1,$global);$x306=(is_string($x304)&&is_string($x305)?strcmp($x304,$x305)<0:(!is_nan($x307=JS::toNumber($x304,$global))&&!is_nan($x308=JS::toNumber($x305,$global))&&$x307<$x308));$x303=$x306;if(!JS::toBoolean($x303,$global)){$x309=JS::toPrimitive($_precision,$global);$x310=JS::toPrimitive(21,$global);$x311=(is_string($x310)&&is_string($x309)?strcmp($x310,$x309)<0:(!is_nan($x312=JS::toNumber($x310,$global))&&!is_nan($x313=JS::toNumber($x309,$global))&&$x312<$x313));$x303=$x311;}$x301=$x303;}$x300=$x301;if(!JS::toBoolean($x300,$global)){unset($_isNaN,$WisNaN,$SisNaN,$UisNaN);$x314=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'isNaN\',$global),119,70,\'<image>/07_number.js\');$_isNaN=&$x314[0];list(,$WisNaN,$SisNaN,$UisNaN)=$x314;if($UisNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x315=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),119,70,\'<image>/07_number.js\');$_ReferenceError=&$x315[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x315;$x316=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,70);$x317=$x316($global,$global,$_ReferenceError,array(\'isNaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x317->class)&&$x317->class===\'Error\'&&!isset($x317->properties[\'file\'])&&!isset($x317->properties[\'line\'])&&!isset($x317->properties[\'column\'])){$x317->properties[\'file\']=\'<image>/07_number.js\';$x317->properties[\'line\']=119;$x317->properties[\'column\']=70;$x317->attributes[\'file\']=$x317->attributes[\'line\']=$x317->attributes[\'column\']=0;}throw new JSException($x317,119,70,\'<image>/07_number.js\');}if(!(is_object($_isNaN)&&isset($_isNaN->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x320=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),119,75,\'<image>/07_number.js\');$_TypeError=&$x320[0];list(,$WTypeError,$STypeError,$UTypeError)=$x320;$x321=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x322=$x321($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x322->class)&&$x322->class===\'Error\'&&!isset($x322->properties[\'file\'])&&!isset($x322->properties[\'line\'])&&!isset($x322->properties[\'column\'])){$x322->properties[\'file\']=\'<image>/07_number.js\';$x322->properties[\'line\']=119;$x322->properties[\'column\']=75;$x322->attributes[\'file\']=$x322->attributes[\'line\']=$x322->attributes[\'column\']=0;}throw new JSException($x322,119,75,\'<image>/07_number.js\');}$x318=$_isNaN->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',119,75);$x319=$x318($global,$global,$_isNaN,array($_precision),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x300=$x319;}if(JS::toBoolean($x300,$global)){unset($_RangeError,$WRangeError,$SRangeError,$URangeError);$x325=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'RangeError\',$global),120,13,\'<image>/07_number.js\');$_RangeError=&$x325[0];list(,$WRangeError,$SRangeError,$URangeError)=$x325;if($URangeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x326=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),120,13,\'<image>/07_number.js\');$_ReferenceError=&$x326[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x326;$x327=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,13);$x328=$x327($global,$global,$_ReferenceError,array(\'RangeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x328->class)&&$x328->class===\'Error\'&&!isset($x328->properties[\'file\'])&&!isset($x328->properties[\'line\'])&&!isset($x328->properties[\'column\'])){$x328->properties[\'file\']=\'<image>/07_number.js\';$x328->properties[\'line\']=120;$x328->properties[\'column\']=13;$x328->attributes[\'file\']=$x328->attributes[\'line\']=$x328->attributes[\'column\']=0;}throw new JSException($x328,120,13,\'<image>/07_number.js\');}$x323=clone JS::$objectTemplate;unset($x329,$W329,$S329,$U329);$x330=_ff9cabf943c61b87166e28285dc0448b_4($global,$scope,$_RangeError,JS::toString(\'prototype\',$global),120,9,\'<image>/07_number.js\');$x329=&$x330[0];list(,$W329,$S329,$U329)=$x330;$x324=$x329;$x323->prototype=$x324;if(!(is_object($_RangeError)&&isset($_RangeError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x333=_ff9cabf943c61b87166e28285dc0448b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),120,9,\'<image>/07_number.js\');$_TypeError=&$x333[0];list(,$WTypeError,$STypeError,$UTypeError)=$x333;$x334=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x335=$x334($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x335->class)&&$x335->class===\'Error\'&&!isset($x335->properties[\'file\'])&&!isset($x335->properties[\'line\'])&&!isset($x335->properties[\'column\'])){$x335->properties[\'file\']=\'<image>/07_number.js\';$x335->properties[\'line\']=120;$x335->properties[\'column\']=9;$x335->attributes[\'file\']=$x335->attributes[\'line\']=$x335->attributes[\'column\']=0;}throw new JSException($x335,120,9,\'<image>/07_number.js\');}$x331=$_RangeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/07_number.js\',120,9);$x332=$x331($global,$x323,$_RangeError,array(\'Number.prototype.toPrecision(): precision must be between 1 and 21\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x324=$x332;if(is_object($x324)&&$x324!==JS::$undefined){$x323=$x324;}if(isset($x323->class)&&$x323->class===\'Error\'&&!isset($x323->properties[\'file\'])&&!isset($x323->properties[\'line\'])&&!isset($x323->properties[\'column\'])){$x323->properties[\'file\']=\'<image>/07_number.js\';$x323->properties[\'line\']=120;$x323->properties[\'column\']=3;$x323->attributes[\'file\']=$x323->attributes[\'line\']=$x323->attributes[\'column\']=0;}throw new JSException($x323,120,3,\'<image>/07_number.js\');}if(JS::toBoolean(is_nan($leThis->value),$global)){return\'NaN\';}if(JS::toBoolean($leThis->value===INF,$global)){return\'Infinity\';}if(JS::toBoolean($leThis->value===-INF,$global)){return\'-Infinity\';}$x336=JS::toNumber($_precision,$global);if($Uprecision){$global->properties[\'precision\']=$_precision;$_precision=&$global->properties[\'precision\'];}$_precision=$x336;return preg_replace(\'/[.]?0+e/\',\'e\',sprintf(\'%.\'.JS::toString($_precision,$global).\'g\',round($leThis->value,$_precision-strlen((string)intval($leThis->value)))));return JS::$undefined;}', "\n";
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
if (isset($S12)) {
$x18 = $S12->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 16, 18);
$x19 = $x18($global, $_Number, $S12, array($x5), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x17 = $x19;
} else {
if (!$U12) {$x17 = $x5;if ($W12) { $x12 = $x5; }  }
else { $x17 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('MAX_VALUE') && 'MAX_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MAX_VALUE' + 1; };
$x20 = (int) PHP_INT_MAX + 1;
$x21 = JS::toString('MIN_VALUE', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x22 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 17, 18, '<image>/07_number.js');
$_TypeError =& $x22[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x22;
$x23 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x24 = $x23($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x24->class) && $x24->class === 'Error' && !isset($x24->properties['file']) && !isset($x24->properties['line']) && !isset($x24->properties['column'])) {$x24->properties['file'] = '<image>/07_number.js';$x24->properties['line'] = 17;$x24->properties['column'] = 18;$x24->attributes['file'] = $x24->attributes['line'] = $x24->attributes['column'] = 0; }
throw new JSException($x24, 17, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x25, $W25, $S25, $U25);
$x26 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x21, $global), 17, 18, '<image>/07_number.js');
$x25 =& $x26[0]; list(,$W25,$S25,$U25) = $x26;
if ($U25 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x21] = $x25; $x25 =& $_Number->properties[$x21]; $_Number->attributes[$x21] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U25 = FALSE; $W25 = TRUE; }
if (isset($S25)) {
$x28 = $S25->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 17, 18);
$x29 = $x28($global, $_Number, $S25, array($x20), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x27 = $x29;
} else {
if (!$U25) {$x27 = $x20;if ($W25) { $x25 = $x20; }  }
else { $x27 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('MIN_VALUE') && 'MIN_VALUE' >= $_Number->properties['length']) { $_Number->properties['length'] = 'MIN_VALUE' + 1; };
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x30 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('NaN', $global), 18, 14, '<image>/07_number.js');
$_NaN =& $x30[0]; list(,$WNaN,$SNaN,$UNaN) = $x30;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x31 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 18, 14, '<image>/07_number.js');
$_ReferenceError =& $x31[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x31;
$x32 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 14);
$x33 = $x32($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x33->class) && $x33->class === 'Error' && !isset($x33->properties['file']) && !isset($x33->properties['line']) && !isset($x33->properties['column'])) {$x33->properties['file'] = '<image>/07_number.js';$x33->properties['line'] = 18;$x33->properties['column'] = 14;$x33->attributes['file'] = $x33->attributes['line'] = $x33->attributes['column'] = 0; }
throw new JSException($x33, 18, 14, '<image>/07_number.js');
}
$x34 = JS::toString('NaN', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 18, 12, '<image>/07_number.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x37 = $x36($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error' && !isset($x37->properties['file']) && !isset($x37->properties['line']) && !isset($x37->properties['column'])) {$x37->properties['file'] = '<image>/07_number.js';$x37->properties['line'] = 18;$x37->properties['column'] = 12;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 18, 12, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x38, $W38, $S38, $U38);
$x39 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x34, $global), 18, 12, '<image>/07_number.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
if ($U38 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x34] = $x38; $x38 =& $_Number->properties[$x34]; $_Number->attributes[$x34] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U38 = FALSE; $W38 = TRUE; }
if (isset($S38)) {
$x41 = $S38->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 18, 12);
$x42 = $x41($global, $_Number, $S38, array($_NaN), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x40 = $x42;
} else {
if (!$U38) {$x40 = $_NaN;if ($W38) { $x38 = $_NaN; }  }
else { $x40 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('NaN') && 'NaN' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NaN' + 1; };
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x43 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('Infinity', $global), 19, 29, '<image>/07_number.js');
$_Infinity =& $x43[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x43;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x44 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 29, '<image>/07_number.js');
$_ReferenceError =& $x44[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x44;
$x45 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 29);
$x46 = $x45($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x46->class) && $x46->class === 'Error' && !isset($x46->properties['file']) && !isset($x46->properties['line']) && !isset($x46->properties['column'])) {$x46->properties['file'] = '<image>/07_number.js';$x46->properties['line'] = 19;$x46->properties['column'] = 29;$x46->attributes['file'] = $x46->attributes['line'] = $x46->attributes['column'] = 0; }
throw new JSException($x46, 19, 29, '<image>/07_number.js');
}
$x47 = (-1.0 * JS::toNumber($_Infinity, $global));
$x48 = JS::toString('NEGATIVE_INFINITY', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x49 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 19, 26, '<image>/07_number.js');
$_TypeError =& $x49[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x49;
$x50 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x51 = $x50($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x51->class) && $x51->class === 'Error' && !isset($x51->properties['file']) && !isset($x51->properties['line']) && !isset($x51->properties['column'])) {$x51->properties['file'] = '<image>/07_number.js';$x51->properties['line'] = 19;$x51->properties['column'] = 26;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
throw new JSException($x51, 19, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x52, $W52, $S52, $U52);
$x53 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x48, $global), 19, 26, '<image>/07_number.js');
$x52 =& $x53[0]; list(,$W52,$S52,$U52) = $x53;
if ($U52 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x48] = $x52; $x52 =& $_Number->properties[$x48]; $_Number->attributes[$x48] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U52 = FALSE; $W52 = TRUE; }
if (isset($S52)) {
$x55 = $S52->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 19, 26);
$x56 = $x55($global, $_Number, $S52, array($x47), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x54 = $x56;
} else {
if (!$U52) {$x54 = $x47;if ($W52) { $x52 = $x47; }  }
else { $x54 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('NEGATIVE_INFINITY') && 'NEGATIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'NEGATIVE_INFINITY' + 1; };
$x57 = JS::toString('POSITIVE_INFINITY', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 20, 26, '<image>/07_number.js');
$_TypeError =& $x58[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x58;
$x59 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x60 = $x59($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error' && !isset($x60->properties['file']) && !isset($x60->properties['line']) && !isset($x60->properties['column'])) {$x60->properties['file'] = '<image>/07_number.js';$x60->properties['line'] = 20;$x60->properties['column'] = 26;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 20, 26, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x61, $W61, $S61, $U61);
$x62 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x57, $global), 20, 26, '<image>/07_number.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
if ($U61 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x57] = $x61; $x61 =& $_Number->properties[$x57]; $_Number->attributes[$x57] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U61 = FALSE; $W61 = TRUE; }
if (isset($S61)) {
$x64 = $S61->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 20, 26);
$x65 = $x64($global, $_Number, $S61, array($_Infinity), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x63 = $x65;
} else {
if (!$U61) {$x63 = $_Infinity;if ($W61) { $x61 = $_Infinity; }  }
else { $x63 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('POSITIVE_INFINITY') && 'POSITIVE_INFINITY' >= $_Number->properties['length']) { $_Number->properties['length'] = 'POSITIVE_INFINITY' + 1; };
$x66 = clone JS::$objectTemplate;
$x67 = JS::toString('prototype', $global);
if ($_Number === JS::$undefined || $_Number === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x68 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 22, 18, '<image>/07_number.js');
$_TypeError =& $x68[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x68;
$x69 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x70 = $x69($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x70->class) && $x70->class === 'Error' && !isset($x70->properties['file']) && !isset($x70->properties['line']) && !isset($x70->properties['column'])) {$x70->properties['file'] = '<image>/07_number.js';$x70->properties['line'] = 22;$x70->properties['column'] = 18;$x70->attributes['file'] = $x70->attributes['line'] = $x70->attributes['column'] = 0; }
throw new JSException($x70, 22, 18, '<image>/07_number.js');
}
$_Number = JS::toObject($_Number, $global);
unset($x71, $W71, $S71, $U71);
$x72 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $_Number, JS::toString($x67, $global), 22, 18, '<image>/07_number.js');
$x71 =& $x72[0]; list(,$W71,$S71,$U71) = $x72;
if ($U71 && (!isset($_Number->extensible) || $_Number->extensible)) {$_Number->properties[$x67] = $x71; $x71 =& $_Number->properties[$x67]; $_Number->attributes[$x67] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U71 = FALSE; $W71 = TRUE; }
if (isset($S71)) {
$x74 = $S71->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 22, 18);
$x75 = $x74($global, $_Number, $S71, array($x66), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x73 = $x75;
} else {
if (!$U71) {$x73 = $x66;if ($W71) { $x71 = $x66; }  }
else { $x73 = JS::$undefined; }
}
if (isset($_Number->class) && $_Number->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Number->properties['length']) { $_Number->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x76 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('Object', $global), 23, 51, '<image>/07_number.js');
$_Object =& $x76[0]; list(,$WObject,$SObject,$UObject) = $x76;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x77 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 23, 51, '<image>/07_number.js');
$_ReferenceError =& $x77[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x77;
$x78 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 23, 51);
$x79 = $x78($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error' && !isset($x79->properties['file']) && !isset($x79->properties['line']) && !isset($x79->properties['column'])) {$x79->properties['file'] = '<image>/07_number.js';$x79->properties['line'] = 23;$x79->properties['column'] = 51;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, 23, 51, '<image>/07_number.js');
}
$_Number->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Number->properties['prototype']->class = 'Number';
$_Number->properties['prototype']->extensible = TRUE;
unset($x80, $W80, $S80, $U80);
$x86 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 26, 7, '<image>/07_number.js');
$x80 =& $x86[0]; list(,$W80,$S80,$U80) = $x86;
$x87 = JS::toString('constructor', $global);
if ($x80 === JS::$undefined || $x80 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 26, 30, '<image>/07_number.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x90 = $x89($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error' && !isset($x90->properties['file']) && !isset($x90->properties['line']) && !isset($x90->properties['column'])) {$x90->properties['file'] = '<image>/07_number.js';$x90->properties['line'] = 26;$x90->properties['column'] = 30;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 26, 30, '<image>/07_number.js');
}
$x80 = JS::toObject($x80, $global);
unset($x91, $W91, $S91, $U91);
$x92 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x80, JS::toString($x87, $global), 26, 30, '<image>/07_number.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
if ($U91 && (!isset($x80->extensible) || $x80->extensible)) {$x80->properties[$x87] = $x91; $x91 =& $x80->properties[$x87]; $x80->attributes[$x87] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U91 = FALSE; $W91 = TRUE; }
if (isset($S91)) {
$x94 = $S91->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 26, 30);
$x95 = $x94($global, $x80, $S91, array($_Number), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x93 = $x95;
} else {
if (!$U91) {$x93 = $_Number;if ($W91) { $x91 = $_Number; }  }
else { $x93 = JS::$undefined; }
}
if (isset($x80->class) && $x80->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x80->properties['length']) { $x80->properties['length'] = 'constructor' + 1; };
$x144 = clone JS::$functionTemplate; $x144->call = '_ff9cabf943c61b87166e28285dc0448b_5'; $x144->parameters = array (
  0 => 'radix',
); $x144->scope = $scope; $x144->properties['prototype'] = clone JS::$objectTemplate; $x144->attributes['prototype'] = JS::WRITABLE; $x144->properties['prototype']->properties['constructor'] = $x144; $x144->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x144->properties['length'] = 1; $x144->attributes['length'] = 0;
unset($x145, $W145, $S145, $U145);
$x146 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 28, 7, '<image>/07_number.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
$x147 = JS::toString('toString', $global);
if ($x145 === JS::$undefined || $x145 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x148 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 28, 27, '<image>/07_number.js');
$_TypeError =& $x148[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x148;
$x149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x150 = $x149($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x150->class) && $x150->class === 'Error' && !isset($x150->properties['file']) && !isset($x150->properties['line']) && !isset($x150->properties['column'])) {$x150->properties['file'] = '<image>/07_number.js';$x150->properties['line'] = 28;$x150->properties['column'] = 27;$x150->attributes['file'] = $x150->attributes['line'] = $x150->attributes['column'] = 0; }
throw new JSException($x150, 28, 27, '<image>/07_number.js');
}
$x145 = JS::toObject($x145, $global);
unset($x151, $W151, $S151, $U151);
$x152 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x145, JS::toString($x147, $global), 28, 27, '<image>/07_number.js');
$x151 =& $x152[0]; list(,$W151,$S151,$U151) = $x152;
if ($U151 && (!isset($x145->extensible) || $x145->extensible)) {$x145->properties[$x147] = $x151; $x151 =& $x145->properties[$x147]; $x145->attributes[$x147] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U151 = FALSE; $W151 = TRUE; }
if (isset($S151)) {
$x154 = $S151->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 28, 27);
$x155 = $x154($global, $x145, $S151, array($x144), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x153 = $x155;
} else {
if (!$U151) {$x153 = $x144;if ($W151) { $x151 = $x144; }  }
else { $x153 = JS::$undefined; }
}
if (isset($x145->class) && $x145->class === 'Array' &&  is_int('toString') && 'toString' >= $x145->properties['length']) { $x145->properties['length'] = 'toString' + 1; };
unset($x156, $W156, $S156, $U156);
$x157 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 58, 41, '<image>/07_number.js');
$x156 =& $x157[0]; list(,$W156,$S156,$U156) = $x157;
unset($x158, $W158, $S158, $U158);
$x159 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $x156, JS::toString('toString', $global), 58, 51, '<image>/07_number.js');
$x158 =& $x159[0]; list(,$W158,$S158,$U158) = $x159;
unset($x160, $W160, $S160, $U160);
$x161 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 58, 7, '<image>/07_number.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
$x162 = JS::toString('toLocaleString', $global);
if ($x160 === JS::$undefined || $x160 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x163 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 58, 33, '<image>/07_number.js');
$_TypeError =& $x163[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x163;
$x164 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x165 = $x164($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x165->class) && $x165->class === 'Error' && !isset($x165->properties['file']) && !isset($x165->properties['line']) && !isset($x165->properties['column'])) {$x165->properties['file'] = '<image>/07_number.js';$x165->properties['line'] = 58;$x165->properties['column'] = 33;$x165->attributes['file'] = $x165->attributes['line'] = $x165->attributes['column'] = 0; }
throw new JSException($x165, 58, 33, '<image>/07_number.js');
}
$x160 = JS::toObject($x160, $global);
unset($x166, $W166, $S166, $U166);
$x167 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x160, JS::toString($x162, $global), 58, 33, '<image>/07_number.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
if ($U166 && (!isset($x160->extensible) || $x160->extensible)) {$x160->properties[$x162] = $x166; $x166 =& $x160->properties[$x162]; $x160->attributes[$x162] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U166 = FALSE; $W166 = TRUE; }
if (isset($S166)) {
$x169 = $S166->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 58, 33);
$x170 = $x169($global, $x160, $S166, array($x158), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x168 = $x170;
} else {
if (!$U166) {$x168 = $x158;if ($W166) { $x166 = $x158; }  }
else { $x168 = JS::$undefined; }
}
if (isset($x160->class) && $x160->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x160->properties['length']) { $x160->properties['length'] = 'toLocaleString' + 1; };
$x173 = clone JS::$functionTemplate; $x173->call = '_ff9cabf943c61b87166e28285dc0448b_6'; $x173->parameters = array (
); $x173->scope = $scope; $x173->properties['prototype'] = clone JS::$objectTemplate; $x173->attributes['prototype'] = JS::WRITABLE; $x173->properties['prototype']->properties['constructor'] = $x173; $x173->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x173->properties['length'] = 0; $x173->attributes['length'] = 0;
unset($x174, $W174, $S174, $U174);
$x175 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 60, 7, '<image>/07_number.js');
$x174 =& $x175[0]; list(,$W174,$S174,$U174) = $x175;
$x176 = JS::toString('valueOf', $global);
if ($x174 === JS::$undefined || $x174 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x177 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 60, 26, '<image>/07_number.js');
$_TypeError =& $x177[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x177;
$x178 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x179 = $x178($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x179->class) && $x179->class === 'Error' && !isset($x179->properties['file']) && !isset($x179->properties['line']) && !isset($x179->properties['column'])) {$x179->properties['file'] = '<image>/07_number.js';$x179->properties['line'] = 60;$x179->properties['column'] = 26;$x179->attributes['file'] = $x179->attributes['line'] = $x179->attributes['column'] = 0; }
throw new JSException($x179, 60, 26, '<image>/07_number.js');
}
$x174 = JS::toObject($x174, $global);
unset($x180, $W180, $S180, $U180);
$x181 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x174, JS::toString($x176, $global), 60, 26, '<image>/07_number.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
if ($U180 && (!isset($x174->extensible) || $x174->extensible)) {$x174->properties[$x176] = $x180; $x180 =& $x174->properties[$x176]; $x174->attributes[$x176] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U180 = FALSE; $W180 = TRUE; }
if (isset($S180)) {
$x183 = $S180->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 60, 26);
$x184 = $x183($global, $x174, $S180, array($x173), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x182 = $x184;
} else {
if (!$U180) {$x182 = $x173;if ($W180) { $x180 = $x173; }  }
else { $x182 = JS::$undefined; }
}
if (isset($x174->class) && $x174->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x174->properties['length']) { $x174->properties['length'] = 'valueOf' + 1; };
$x223 = clone JS::$functionTemplate; $x223->call = '_ff9cabf943c61b87166e28285dc0448b_7'; $x223->parameters = array (
  0 => 'fractionDigits',
); $x223->scope = $scope; $x223->properties['prototype'] = clone JS::$objectTemplate; $x223->attributes['prototype'] = JS::WRITABLE; $x223->properties['prototype']->properties['constructor'] = $x223; $x223->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x223->properties['length'] = 1; $x223->attributes['length'] = 0;
unset($x224, $W224, $S224, $U224);
$x225 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 64, 7, '<image>/07_number.js');
$x224 =& $x225[0]; list(,$W224,$S224,$U224) = $x225;
$x226 = JS::toString('toFixed', $global);
if ($x224 === JS::$undefined || $x224 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x227 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 64, 26, '<image>/07_number.js');
$_TypeError =& $x227[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x227;
$x228 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x229 = $x228($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x229->class) && $x229->class === 'Error' && !isset($x229->properties['file']) && !isset($x229->properties['line']) && !isset($x229->properties['column'])) {$x229->properties['file'] = '<image>/07_number.js';$x229->properties['line'] = 64;$x229->properties['column'] = 26;$x229->attributes['file'] = $x229->attributes['line'] = $x229->attributes['column'] = 0; }
throw new JSException($x229, 64, 26, '<image>/07_number.js');
}
$x224 = JS::toObject($x224, $global);
unset($x230, $W230, $S230, $U230);
$x231 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x224, JS::toString($x226, $global), 64, 26, '<image>/07_number.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
if ($U230 && (!isset($x224->extensible) || $x224->extensible)) {$x224->properties[$x226] = $x230; $x230 =& $x224->properties[$x226]; $x224->attributes[$x226] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U230 = FALSE; $W230 = TRUE; }
if (isset($S230)) {
$x233 = $S230->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 64, 26);
$x234 = $x233($global, $x224, $S230, array($x223), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x232 = $x234;
} else {
if (!$U230) {$x232 = $x223;if ($W230) { $x230 = $x223; }  }
else { $x232 = JS::$undefined; }
}
if (isset($x224->class) && $x224->class === 'Array' &&  is_int('toFixed') && 'toFixed' >= $x224->properties['length']) { $x224->properties['length'] = 'toFixed' + 1; };
$x274 = clone JS::$functionTemplate; $x274->call = '_ff9cabf943c61b87166e28285dc0448b_8'; $x274->parameters = array (
  0 => 'fractionDigits',
); $x274->scope = $scope; $x274->properties['prototype'] = clone JS::$objectTemplate; $x274->attributes['prototype'] = JS::WRITABLE; $x274->properties['prototype']->properties['constructor'] = $x274; $x274->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x274->properties['length'] = 1; $x274->attributes['length'] = 0;
unset($x275, $W275, $S275, $U275);
$x276 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 84, 7, '<image>/07_number.js');
$x275 =& $x276[0]; list(,$W275,$S275,$U275) = $x276;
$x277 = JS::toString('toExponential', $global);
if ($x275 === JS::$undefined || $x275 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x278 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 84, 32, '<image>/07_number.js');
$_TypeError =& $x278[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x278;
$x279 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x280 = $x279($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x280->class) && $x280->class === 'Error' && !isset($x280->properties['file']) && !isset($x280->properties['line']) && !isset($x280->properties['column'])) {$x280->properties['file'] = '<image>/07_number.js';$x280->properties['line'] = 84;$x280->properties['column'] = 32;$x280->attributes['file'] = $x280->attributes['line'] = $x280->attributes['column'] = 0; }
throw new JSException($x280, 84, 32, '<image>/07_number.js');
}
$x275 = JS::toObject($x275, $global);
unset($x281, $W281, $S281, $U281);
$x282 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x275, JS::toString($x277, $global), 84, 32, '<image>/07_number.js');
$x281 =& $x282[0]; list(,$W281,$S281,$U281) = $x282;
if ($U281 && (!isset($x275->extensible) || $x275->extensible)) {$x275->properties[$x277] = $x281; $x281 =& $x275->properties[$x277]; $x275->attributes[$x277] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U281 = FALSE; $W281 = TRUE; }
if (isset($S281)) {
$x284 = $S281->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 84, 32);
$x285 = $x284($global, $x275, $S281, array($x274), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x283 = $x285;
} else {
if (!$U281) {$x283 = $x274;if ($W281) { $x281 = $x274; }  }
else { $x283 = JS::$undefined; }
}
if (isset($x275->class) && $x275->class === 'Array' &&  is_int('toExponential') && 'toExponential' >= $x275->properties['length']) { $x275->properties['length'] = 'toExponential' + 1; };
$x337 = clone JS::$functionTemplate; $x337->call = '_ff9cabf943c61b87166e28285dc0448b_9'; $x337->parameters = array (
  0 => 'precision',
); $x337->scope = $scope; $x337->properties['prototype'] = clone JS::$objectTemplate; $x337->attributes['prototype'] = JS::WRITABLE; $x337->properties['prototype']->properties['constructor'] = $x337; $x337->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x337->properties['length'] = 1; $x337->attributes['length'] = 0;
unset($x338, $W338, $S338, $U338);
$x339 = _ff9cabf943c61b87166e28285dc0448b_4($global, $scope, $_Number, JS::toString('prototype', $global), 114, 7, '<image>/07_number.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
$x340 = JS::toString('toPrecision', $global);
if ($x338 === JS::$undefined || $x338 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x341 = _ff9cabf943c61b87166e28285dc0448b_2($global, $scope, $scope, JS::toString('TypeError', $global), 114, 30, '<image>/07_number.js');
$_TypeError =& $x341[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x341;
$x342 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x343 = $x342($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x343->class) && $x343->class === 'Error' && !isset($x343->properties['file']) && !isset($x343->properties['line']) && !isset($x343->properties['column'])) {$x343->properties['file'] = '<image>/07_number.js';$x343->properties['line'] = 114;$x343->properties['column'] = 30;$x343->attributes['file'] = $x343->attributes['line'] = $x343->attributes['column'] = 0; }
throw new JSException($x343, 114, 30, '<image>/07_number.js');
}
$x338 = JS::toObject($x338, $global);
unset($x344, $W344, $S344, $U344);
$x345 = _ff9cabf943c61b87166e28285dc0448b_3($global, $scope, $x338, JS::toString($x340, $global), 114, 30, '<image>/07_number.js');
$x344 =& $x345[0]; list(,$W344,$S344,$U344) = $x345;
if ($U344 && (!isset($x338->extensible) || $x338->extensible)) {$x338->properties[$x340] = $x344; $x344 =& $x338->properties[$x340]; $x338->attributes[$x340] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U344 = FALSE; $W344 = TRUE; }
if (isset($S344)) {
$x347 = $S344->call;
$global->trace[++$global->trace_sp] = array('<image>/07_number.js', 114, 30);
$x348 = $x347($global, $x338, $S344, array($x337), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x346 = $x348;
} else {
if (!$U344) {$x346 = $x337;if ($W344) { $x344 = $x337; }  }
else { $x346 = JS::$undefined; }
}
if (isset($x338->class) && $x338->class === 'Array' &&  is_int('toPrecision') && 'toPrecision' >= $x338->properties['length']) { $x338->properties['length'] = 'toPrecision' + 1; };
;
return JS::$undefined;
}
