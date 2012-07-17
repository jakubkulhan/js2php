function _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $base, $id, $line, $column, $file) {
$WSyntaxError = $SSyntaxError = $USyntaxError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_SyntaxError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x4 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x5 = $x4($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_SyntaxError = $x5; }
else { $_SyntaxError = JS::$undefined; $USyntaxError = TRUE; }
return array(&$_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$base,$id,$line,$column,$file){$WSyntaxError=$SSyntaxError=$USyntaxError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_SyntaxError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x4=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x5=$x4($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_SyntaxError=$x5;}else{$_SyntaxError=JS::$undefined;$USyntaxError=TRUE;}return array(&$_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x21 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x21[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x21;
$x22 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x23 = $x22($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x23->class) && $x23->class === 'Error') {$x23->properties['file'] = $file;$x23->properties['line'] = $line;$x23->properties['column'] = $column;$x23->attributes['file'] = $x23->attributes['line'] = $x23->attributes['column'] = 0; }
throw new JSException($x23, $line, $column, $file);
}
$W20 = $S20 = $U20 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x20 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x24 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x25 = $x24($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x20 = $x25; }
else { $x20 = JS::$undefined; $U20 = TRUE; }
return array(&$x20, $W20, $S20, $U20);
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x21=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x21[0];list(,$WTypeError,$STypeError,$UTypeError)=$x21;$x22=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x23=$x22($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x23->class)&&$x23->class===\'Error\'){$x23->properties[\'file\']=$file;$x23->properties[\'line\']=$line;$x23->properties[\'column\']=$column;$x23->attributes[\'file\']=$x23->attributes[\'line\']=$x23->attributes[\'column\']=0;}throw new JSException($x23,$line,$column,$file);}$W20=$S20=$U20=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x20=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x24=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x25=$x24($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x20=$x25;}else{$x20=JS::$undefined;$U20=TRUE;}return array(&$x20,$W20,$S20,$U20);}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['x'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_x =& $scope->properties['x'];
$Ux = FALSE;
$scope->properties['eval'] = $fn;
$_eval =& $scope->properties['eval'];
$global->scope[++$global->scope_sp] = $scope;
$parser = new JSParser;

		list($ok, $ast, $error) = $parser->__invoke(JS::toString($_x, $global), array('file' => '<eval>'));

		if (!$ok) {;
unset($_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
$x6 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'SyntaxError', 12, 14, '<image>/01_global.js');
$_SyntaxError =& $x6[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x6;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x7 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 12, 14, '<image>/01_global.js');
$_ReferenceError =& $x7[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x7;
$x8 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 12, 14);
$x9 = $x8($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error') {$x9->properties['file'] = '<image>/01_global.js';$x9->properties['line'] = 12;$x9->properties['column'] = 14;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
throw new JSException($x9, 12, 14, '<image>/01_global.js');
}
$x18 = JS::toPrimitive('eval(): syntax error at ', $global);
$x19 = JS::toPrimitive($error->line, $global);
$x16 = JS::toPrimitive((is_string($x18) || is_string($x19) ? JS::toString($x18, $global) . JS::toString($x19, $global) : JS::toNumber($x18, $global) + JS::toNumber($x19, $global)), $global);
$x17 = JS::toPrimitive(':', $global);
$x14 = JS::toPrimitive((is_string($x16) || is_string($x17) ? JS::toString($x16, $global) . JS::toString($x17, $global) : JS::toNumber($x16, $global) + JS::toNumber($x17, $global)), $global);
$x15 = JS::toPrimitive($error->column, $global);
$x12 = JS::toPrimitive((is_string($x14) || is_string($x15) ? JS::toString($x14, $global) . JS::toString($x15, $global) : JS::toNumber($x14, $global) + JS::toNumber($x15, $global)), $global);
$x13 = JS::toPrimitive(', expected ', $global);
$x10 = JS::toPrimitive((is_string($x12) || is_string($x13) ? JS::toString($x12, $global) . JS::toString($x13, $global) : JS::toNumber($x12, $global) + JS::toNumber($x13, $global)), $global);
$x11 = JS::toPrimitive(implode(', ', $error->expected), $global);
$x2 = clone JS::$objectTemplate;
unset($x20, $W20, $S20, $U20);
$x26 = _46540ec3caccbdb21a20f6e328b09f3c_3($global, $scope, $_SyntaxError, (string) 'prototype', 12, 10, '<image>/01_global.js');
$x20 =& $x26[0]; list(,$W20,$S20,$U20) = $x26;
$x3 = $x20;
$x2->prototype = $x3;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x29 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'TypeError', 12, 10, '<image>/01_global.js');
$_TypeError =& $x29[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x29;
$x30 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 12, 10);
$x31 = $x30($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x31->class) && $x31->class === 'Error') {$x31->properties['file'] = '<image>/01_global.js';$x31->properties['line'] = 12;$x31->properties['column'] = 10;$x31->attributes['file'] = $x31->attributes['line'] = $x31->attributes['column'] = 0; }
throw new JSException($x31, 12, 10, '<image>/01_global.js');
}
$x27 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 12, 10);
$x28 = $x27($global, $x2, $_SyntaxError, array((is_string($x10) || is_string($x11) ? JS::toString($x10, $global) . JS::toString($x11, $global) : JS::toNumber($x10, $global) + JS::toNumber($x11, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x3 = $x28;
if (is_object($x3) && $x3 !== JS::$undefined) { $x2 = $x3; }
if (isset($x2->class) && $x2->class === 'Error') {$x2->properties['file'] = '<image>/01_global.js';$x2->properties['line'] = 12;$x2->properties['column'] = 4;$x2->attributes['file'] = $x2->attributes['line'] = $x2->attributes['column'] = 0; }
throw new JSException($x2, 12, 4, '<image>/01_global.js');
}

		$compiler = new JSCompiler;
		$code = $compiler->__invoke($ast);
		$entryPoint = eval($code);
		return $entryPoint($global, $global->scope[$global->scope_sp - 1]);
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$scope->properties[\'eval\']=$fn;$_eval=&$scope->properties[\'eval\'];$global->scope[++$global->scope_sp]=$scope;$parser=new JSParser;list($ok,$ast,$error)=$parser->__invoke(JS::toString($_x,$global),array(\'file\'=>\'<eval>\'));if(!$ok){;unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x6=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'SyntaxError\',12,14,\'<image>/01_global.js\');$_SyntaxError=&$x6[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x6;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x7=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',12,14,\'<image>/01_global.js\');$_ReferenceError=&$x7[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x7;$x8=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',12,14);$x9=$x8($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'){$x9->properties[\'file\']=\'<image>/01_global.js\';$x9->properties[\'line\']=12;$x9->properties[\'column\']=14;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,12,14,\'<image>/01_global.js\');}$x18=JS::toPrimitive(\'eval(): syntax error at \',$global);$x19=JS::toPrimitive($error->line,$global);$x16=JS::toPrimitive((is_string($x18)||is_string($x19)?JS::toString($x18,$global).JS::toString($x19,$global):JS::toNumber($x18,$global)+JS::toNumber($x19,$global)),$global);$x17=JS::toPrimitive(\':\',$global);$x14=JS::toPrimitive((is_string($x16)||is_string($x17)?JS::toString($x16,$global).JS::toString($x17,$global):JS::toNumber($x16,$global)+JS::toNumber($x17,$global)),$global);$x15=JS::toPrimitive($error->column,$global);$x12=JS::toPrimitive((is_string($x14)||is_string($x15)?JS::toString($x14,$global).JS::toString($x15,$global):JS::toNumber($x14,$global)+JS::toNumber($x15,$global)),$global);$x13=JS::toPrimitive(\', expected \',$global);$x10=JS::toPrimitive((is_string($x12)||is_string($x13)?JS::toString($x12,$global).JS::toString($x13,$global):JS::toNumber($x12,$global)+JS::toNumber($x13,$global)),$global);$x11=JS::toPrimitive(implode(\', \',$error->expected),$global);$x2=clone JS::$objectTemplate;unset($x20,$W20,$S20,$U20);$x26=_46540ec3caccbdb21a20f6e328b09f3c_3($global,$scope,$_SyntaxError,(string)\'prototype\',12,10,\'<image>/01_global.js\');$x20=&$x26[0];list(,$W20,$S20,$U20)=$x26;$x3=$x20;$x2->prototype=$x3;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x29=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'TypeError\',12,10,\'<image>/01_global.js\');$_TypeError=&$x29[0];list(,$WTypeError,$STypeError,$UTypeError)=$x29;$x30=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',12,10);$x31=$x30($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x31->class)&&$x31->class===\'Error\'){$x31->properties[\'file\']=\'<image>/01_global.js\';$x31->properties[\'line\']=12;$x31->properties[\'column\']=10;$x31->attributes[\'file\']=$x31->attributes[\'line\']=$x31->attributes[\'column\']=0;}throw new JSException($x31,12,10,\'<image>/01_global.js\');}$x27=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',12,10);$x28=$x27($global,$x2,$_SyntaxError,array((is_string($x10)||is_string($x11)?JS::toString($x10,$global).JS::toString($x11,$global):JS::toNumber($x10,$global)+JS::toNumber($x11,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x3=$x28;if(is_object($x3)&&$x3!==JS::$undefined){$x2=$x3;}if(isset($x2->class)&&$x2->class===\'Error\'){$x2->properties[\'file\']=\'<image>/01_global.js\';$x2->properties[\'line\']=12;$x2->properties[\'column\']=4;$x2->attributes[\'file\']=$x2->attributes[\'line\']=$x2->attributes[\'column\']=0;}throw new JSException($x2,12,4,\'<image>/01_global.js\');}$compiler=new JSCompiler;$code=$compiler->__invoke($ast);$entryPoint=eval($code);return$entryPoint($global,$global->scope[$global->scope_sp-1]);return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x34 =& $scope->properties['arguments'];
$x34->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x34->properties[$i] = $args[$i];
$x34->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$scope->properties['radix'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_radix =& $scope->properties['radix'];
$Uradix = FALSE;
$scope->properties['parseInt'] = $fn;
$_parseInt =& $scope->properties['parseInt'];
$global->scope[++$global->scope_sp] = $scope;
$x36 = !(((gettype($_radix) === gettype(JS::$undefined) && $_radix === JS::$undefined))|| (((is_float($_radix) || is_int($_radix)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_radix == JS::$undefined));
$x35 = $x36;
if (JS::toBoolean($x35, $global)) {
$x38 = JS::toPrimitive($_radix, $global);
$x39 = JS::toPrimitive(2, $global);
$x40 = (is_string($x38) && is_string($x39) ? strcmp($x38, $x39) < 0 : (!is_nan($x41 = JS::toNumber($x38, $global)) && !is_nan($x42 = JS::toNumber($x39, $global)) && $x41 < $x42));
$x37 = $x40;
if (!JS::toBoolean($x37, $global)) {
$x43 = JS::toPrimitive($_radix, $global);
$x44 = JS::toPrimitive(36, $global);
$x45 = (is_string($x44) && is_string($x43) ? strcmp($x44, $x43) < 0 : (!is_nan($x46 = JS::toNumber($x44, $global)) && !is_nan($x47 = JS::toNumber($x43, $global)) && $x46 < $x47));
$x37 = $x45; }
$x35 = $x37; }
if (JS::toBoolean($x35, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x48 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NaN', 26, 10, '<image>/01_global.js');
$_NaN =& $x48[0]; list(,$WNaN,$SNaN,$UNaN) = $x48;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x49 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 26, 10, '<image>/01_global.js');
$_ReferenceError =& $x49[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x49;
$x50 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 26, 10);
$x51 = $x50($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x51->class) && $x51->class === 'Error') {$x51->properties['file'] = '<image>/01_global.js';$x51->properties['line'] = 26;$x51->properties['column'] = 10;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
throw new JSException($x51, 26, 10, '<image>/01_global.js');
}
return $_NaN;;
};
$x52 = !(((gettype($_radix) === gettype(JS::$undefined) && $_radix === JS::$undefined))|| (((is_float($_radix) || is_int($_radix)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_radix == JS::$undefined));
if (JS::toBoolean($x52, $global)) {

return intval(JS::toString($_string, $global), (int) JS::toNumber($_radix, $global));;
};
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = JS::toString($_string, $global);
if (JS::toBoolean(empty($_string), $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x53 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NaN', 36, 10, '<image>/01_global.js');
$_NaN =& $x53[0]; list(,$WNaN,$SNaN,$UNaN) = $x53;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x54 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 36, 10, '<image>/01_global.js');
$_ReferenceError =& $x54[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x54;
$x55 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 36, 10);
$x56 = $x55($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x56->class) && $x56->class === 'Error') {$x56->properties['file'] = '<image>/01_global.js';$x56->properties['line'] = 36;$x56->properties['column'] = 10;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
throw new JSException($x56, 36, 10, '<image>/01_global.js');
}
return $_NaN;;
};
if (JS::toBoolean($_string[0] === '0' && isset($_string[1]) && ($_string[1] === 'x' ||$_string[1] === 'X'), $global)) {
if (!(is_object($_parseInt) && isset($_parseInt->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x59 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'TypeError', 40, 18, '<image>/01_global.js');
$_TypeError =& $x59[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x59;
$x60 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 40, 18);
$x61 = $x60($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x61->class) && $x61->class === 'Error') {$x61->properties['file'] = '<image>/01_global.js';$x61->properties['line'] = 40;$x61->properties['column'] = 18;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 40, 18, '<image>/01_global.js');
}
$x57 = $_parseInt->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 40, 18);
$x58 = $x57($global, $global, $_parseInt, array(substr($_string, 2), 16), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x58;;
};
if (JS::toBoolean($_string[0] === '0' && isset($_string[1]), $global)) {

return intval($_string, 8);;
};
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = intval($_string);
if (JS::toBoolean(((string)$_i) !==$_string, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x62 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NaN', 50, 10, '<image>/01_global.js');
$_NaN =& $x62[0]; list(,$WNaN,$SNaN,$UNaN) = $x62;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x63 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 50, 10, '<image>/01_global.js');
$_ReferenceError =& $x63[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x63;
$x64 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 50, 10);
$x65 = $x64($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x65->class) && $x65->class === 'Error') {$x65->properties['file'] = '<image>/01_global.js';$x65->properties['line'] = 50;$x65->properties['column'] = 10;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, 50, 10, '<image>/01_global.js');
}
return $_NaN;;
};
return $_i;
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x34=&$scope->properties[\'arguments\'];$x34->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x34->properties[$i]=$args[$i];$x34->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'radix\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_radix=&$scope->properties[\'radix\'];$Uradix=FALSE;$scope->properties[\'parseInt\']=$fn;$_parseInt=&$scope->properties[\'parseInt\'];$global->scope[++$global->scope_sp]=$scope;$x36=!(((gettype($_radix)===gettype(JS::$undefined)&&$_radix===JS::$undefined))||(((is_float($_radix)||is_int($_radix))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_radix==JS::$undefined));$x35=$x36;if(JS::toBoolean($x35,$global)){$x38=JS::toPrimitive($_radix,$global);$x39=JS::toPrimitive(2,$global);$x40=(is_string($x38)&&is_string($x39)?strcmp($x38,$x39)<0:(!is_nan($x41=JS::toNumber($x38,$global))&&!is_nan($x42=JS::toNumber($x39,$global))&&$x41<$x42));$x37=$x40;if(!JS::toBoolean($x37,$global)){$x43=JS::toPrimitive($_radix,$global);$x44=JS::toPrimitive(36,$global);$x45=(is_string($x44)&&is_string($x43)?strcmp($x44,$x43)<0:(!is_nan($x46=JS::toNumber($x44,$global))&&!is_nan($x47=JS::toNumber($x43,$global))&&$x46<$x47));$x37=$x45;}$x35=$x37;}if(JS::toBoolean($x35,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x48=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NaN\',26,10,\'<image>/01_global.js\');$_NaN=&$x48[0];list(,$WNaN,$SNaN,$UNaN)=$x48;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x49=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',26,10,\'<image>/01_global.js\');$_ReferenceError=&$x49[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x49;$x50=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',26,10);$x51=$x50($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'){$x51->properties[\'file\']=\'<image>/01_global.js\';$x51->properties[\'line\']=26;$x51->properties[\'column\']=10;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,26,10,\'<image>/01_global.js\');}return$_NaN;}$x52=!(((gettype($_radix)===gettype(JS::$undefined)&&$_radix===JS::$undefined))||(((is_float($_radix)||is_int($_radix))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_radix==JS::$undefined));if(JS::toBoolean($x52,$global)){return intval(JS::toString($_string,$global),(int)JS::toNumber($_radix,$global));}if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=JS::toString($_string,$global);if(JS::toBoolean(empty($_string),$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x53=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NaN\',36,10,\'<image>/01_global.js\');$_NaN=&$x53[0];list(,$WNaN,$SNaN,$UNaN)=$x53;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x54=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',36,10,\'<image>/01_global.js\');$_ReferenceError=&$x54[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x54;$x55=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',36,10);$x56=$x55($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'){$x56->properties[\'file\']=\'<image>/01_global.js\';$x56->properties[\'line\']=36;$x56->properties[\'column\']=10;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,36,10,\'<image>/01_global.js\');}return$_NaN;}if(JS::toBoolean($_string[0]===\'0\'&&isset($_string[1])&&($_string[1]===\'x\'||$_string[1]===\'X\'),$global)){if(!(is_object($_parseInt)&&isset($_parseInt->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x59=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'TypeError\',40,18,\'<image>/01_global.js\');$_TypeError=&$x59[0];list(,$WTypeError,$STypeError,$UTypeError)=$x59;$x60=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',40,18);$x61=$x60($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x61->class)&&$x61->class===\'Error\'){$x61->properties[\'file\']=\'<image>/01_global.js\';$x61->properties[\'line\']=40;$x61->properties[\'column\']=18;$x61->attributes[\'file\']=$x61->attributes[\'line\']=$x61->attributes[\'column\']=0;}throw new JSException($x61,40,18,\'<image>/01_global.js\');}$x57=$_parseInt->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',40,18);$x58=$x57($global,$global,$_parseInt,array(substr($_string,2),16),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x58;}if(JS::toBoolean($_string[0]===\'0\'&&isset($_string[1]),$global)){return intval($_string,8);}$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=intval($_string);if(JS::toBoolean(((string)$_i)!==$_string,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x62=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NaN\',50,10,\'<image>/01_global.js\');$_NaN=&$x62[0];list(,$WNaN,$SNaN,$UNaN)=$x62;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x63=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',50,10,\'<image>/01_global.js\');$_ReferenceError=&$x63[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x63;$x64=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',50,10);$x65=$x64($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'){$x65->properties[\'file\']=\'<image>/01_global.js\';$x65->properties[\'line\']=50;$x65->properties[\'column\']=10;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,50,10,\'<image>/01_global.js\');}return$_NaN;}return$_i;return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x68 =& $scope->properties['arguments'];
$x68->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x68->properties[$i] = $args[$i];
$x68->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$scope->properties['parseFloat'] = $fn;
$_parseFloat =& $scope->properties['parseFloat'];
$global->scope[++$global->scope_sp] = $scope;
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = ltrim(JS::toString($_string, $global));
$scope->properties['f'] = JS::$undefined; $_f =& $scope->properties['f'];
$Uf = FALSE;
$_f = floatval($_string);
if (JS::toBoolean(empty($_string) || ((string)$_f) === '0' &&$_string[0] !== '0', $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x69 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NaN', 61, 10, '<image>/01_global.js');
$_NaN =& $x69[0]; list(,$WNaN,$SNaN,$UNaN) = $x69;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x70 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 61, 10, '<image>/01_global.js');
$_ReferenceError =& $x70[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x70;
$x71 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 61, 10);
$x72 = $x71($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x72->class) && $x72->class === 'Error') {$x72->properties['file'] = '<image>/01_global.js';$x72->properties['line'] = 61;$x72->properties['column'] = 10;$x72->attributes['file'] = $x72->attributes['line'] = $x72->attributes['column'] = 0; }
throw new JSException($x72, 61, 10, '<image>/01_global.js');
}
return $_NaN;;
};
return $_f;
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x68=&$scope->properties[\'arguments\'];$x68->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x68->properties[$i]=$args[$i];$x68->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'parseFloat\']=$fn;$_parseFloat=&$scope->properties[\'parseFloat\'];$global->scope[++$global->scope_sp]=$scope;if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=ltrim(JS::toString($_string,$global));$scope->properties[\'f\']=JS::$undefined;$_f=&$scope->properties[\'f\'];$Uf=FALSE;$_f=floatval($_string);if(JS::toBoolean(empty($_string)||((string)$_f)===\'0\'&&$_string[0]!==\'0\',$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x69=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NaN\',61,10,\'<image>/01_global.js\');$_NaN=&$x69[0];list(,$WNaN,$SNaN,$UNaN)=$x69;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x70=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',61,10,\'<image>/01_global.js\');$_ReferenceError=&$x70[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x70;$x71=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',61,10);$x72=$x71($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x72->class)&&$x72->class===\'Error\'){$x72->properties[\'file\']=\'<image>/01_global.js\';$x72->properties[\'line\']=61;$x72->properties[\'column\']=10;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,61,10,\'<image>/01_global.js\');}return$_NaN;}return$_f;return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x75 =& $scope->properties['arguments'];
$x75->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x75->properties[$i] = $args[$i];
$x75->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['number'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_number =& $scope->properties['number'];
$Unumber = FALSE;
$scope->properties['isNaN'] = $fn;
$_isNaN =& $scope->properties['isNaN'];
$global->scope[++$global->scope_sp] = $scope;
return is_nan(JS::toNumber($_number, $global));
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x75=&$scope->properties[\'arguments\'];$x75->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x75->properties[$i]=$args[$i];$x75->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'number\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_number=&$scope->properties[\'number\'];$Unumber=FALSE;$scope->properties[\'isNaN\']=$fn;$_isNaN=&$scope->properties[\'isNaN\'];$global->scope[++$global->scope_sp]=$scope;return is_nan(JS::toNumber($_number,$global));return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x78 =& $scope->properties['arguments'];
$x78->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x78->properties[$i] = $args[$i];
$x78->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['number'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_number =& $scope->properties['number'];
$Unumber = FALSE;
$scope->properties['isFinite'] = $fn;
$_isFinite =& $scope->properties['isFinite'];
$global->scope[++$global->scope_sp] = $scope;
return is_finite(JS::toNumber($_number, $global));
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x78=&$scope->properties[\'arguments\'];$x78->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x78->properties[$i]=$args[$i];$x78->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'number\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_number=&$scope->properties[\'number\'];$Unumber=FALSE;$scope->properties[\'isFinite\']=$fn;$_isFinite=&$scope->properties[\'isFinite\'];$global->scope[++$global->scope_sp]=$scope;return is_finite(JS::toNumber($_number,$global));return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['encodedURI'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_encodedURI =& $scope->properties['encodedURI'];
$UencodedURI = FALSE;
$scope->properties['decodeURI'] = $fn;
$_decodeURI =& $scope->properties['decodeURI'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x84 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NotImplementedError', 76, 12, '<image>/01_global.js');
$_NotImplementedError =& $x84[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x84;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x85 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 76, 12, '<image>/01_global.js');
$_ReferenceError =& $x85[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x85;
$x86 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 76, 12);
$x87 = $x86($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x87->class) && $x87->class === 'Error') {$x87->properties['file'] = '<image>/01_global.js';$x87->properties['line'] = 76;$x87->properties['column'] = 12;$x87->attributes['file'] = $x87->attributes['line'] = $x87->attributes['column'] = 0; }
throw new JSException($x87, 76, 12, '<image>/01_global.js');
}
$x82 = clone JS::$objectTemplate;
unset($x88, $W88, $S88, $U88);
$x89 = _46540ec3caccbdb21a20f6e328b09f3c_3($global, $scope, $_NotImplementedError, (string) 'prototype', 76, 8, '<image>/01_global.js');
$x88 =& $x89[0]; list(,$W88,$S88,$U88) = $x89;
$x83 = $x88;
$x82->prototype = $x83;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x92 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'TypeError', 76, 8, '<image>/01_global.js');
$_TypeError =& $x92[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x92;
$x93 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 76, 8);
$x94 = $x93($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x94->class) && $x94->class === 'Error') {$x94->properties['file'] = '<image>/01_global.js';$x94->properties['line'] = 76;$x94->properties['column'] = 8;$x94->attributes['file'] = $x94->attributes['line'] = $x94->attributes['column'] = 0; }
throw new JSException($x94, 76, 8, '<image>/01_global.js');
}
$x90 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 76, 8);
$x91 = $x90($global, $x82, $_NotImplementedError, array('decodeURI(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x83 = $x91;
if (is_object($x83) && $x83 !== JS::$undefined) { $x82 = $x83; }
if (isset($x82->class) && $x82->class === 'Error') {$x82->properties['file'] = '<image>/01_global.js';$x82->properties['line'] = 76;$x82->properties['column'] = 2;$x82->attributes['file'] = $x82->attributes['line'] = $x82->attributes['column'] = 0; }
throw new JSException($x82, 76, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x81=&$scope->properties[\'arguments\'];$x81->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x81->properties[$i]=$args[$i];$x81->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'encodedURI\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_encodedURI=&$scope->properties[\'encodedURI\'];$UencodedURI=FALSE;$scope->properties[\'decodeURI\']=$fn;$_decodeURI=&$scope->properties[\'decodeURI\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x84=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NotImplementedError\',76,12,\'<image>/01_global.js\');$_NotImplementedError=&$x84[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x84;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x85=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',76,12,\'<image>/01_global.js\');$_ReferenceError=&$x85[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x85;$x86=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',76,12);$x87=$x86($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x87->class)&&$x87->class===\'Error\'){$x87->properties[\'file\']=\'<image>/01_global.js\';$x87->properties[\'line\']=76;$x87->properties[\'column\']=12;$x87->attributes[\'file\']=$x87->attributes[\'line\']=$x87->attributes[\'column\']=0;}throw new JSException($x87,76,12,\'<image>/01_global.js\');}$x82=clone JS::$objectTemplate;unset($x88,$W88,$S88,$U88);$x89=_46540ec3caccbdb21a20f6e328b09f3c_3($global,$scope,$_NotImplementedError,(string)\'prototype\',76,8,\'<image>/01_global.js\');$x88=&$x89[0];list(,$W88,$S88,$U88)=$x89;$x83=$x88;$x82->prototype=$x83;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x92=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'TypeError\',76,8,\'<image>/01_global.js\');$_TypeError=&$x92[0];list(,$WTypeError,$STypeError,$UTypeError)=$x92;$x93=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',76,8);$x94=$x93($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x94->class)&&$x94->class===\'Error\'){$x94->properties[\'file\']=\'<image>/01_global.js\';$x94->properties[\'line\']=76;$x94->properties[\'column\']=8;$x94->attributes[\'file\']=$x94->attributes[\'line\']=$x94->attributes[\'column\']=0;}throw new JSException($x94,76,8,\'<image>/01_global.js\');}$x90=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',76,8);$x91=$x90($global,$x82,$_NotImplementedError,array(\'decodeURI(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x83=$x91;if(is_object($x83)&&$x83!==JS::$undefined){$x82=$x83;}if(isset($x82->class)&&$x82->class===\'Error\'){$x82->properties[\'file\']=\'<image>/01_global.js\';$x82->properties[\'line\']=76;$x82->properties[\'column\']=2;$x82->attributes[\'file\']=$x82->attributes[\'line\']=$x82->attributes[\'column\']=0;}throw new JSException($x82,76,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['encodedURIComponent'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_encodedURIComponent =& $scope->properties['encodedURIComponent'];
$UencodedURIComponent = FALSE;
$scope->properties['decodeURIComponent'] = $fn;
$_decodeURIComponent =& $scope->properties['decodeURIComponent'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x100 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NotImplementedError', 80, 12, '<image>/01_global.js');
$_NotImplementedError =& $x100[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x100;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x101 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 80, 12, '<image>/01_global.js');
$_ReferenceError =& $x101[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x101;
$x102 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 80, 12);
$x103 = $x102($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x103->class) && $x103->class === 'Error') {$x103->properties['file'] = '<image>/01_global.js';$x103->properties['line'] = 80;$x103->properties['column'] = 12;$x103->attributes['file'] = $x103->attributes['line'] = $x103->attributes['column'] = 0; }
throw new JSException($x103, 80, 12, '<image>/01_global.js');
}
$x98 = clone JS::$objectTemplate;
unset($x104, $W104, $S104, $U104);
$x105 = _46540ec3caccbdb21a20f6e328b09f3c_3($global, $scope, $_NotImplementedError, (string) 'prototype', 80, 8, '<image>/01_global.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
$x99 = $x104;
$x98->prototype = $x99;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x108 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'TypeError', 80, 8, '<image>/01_global.js');
$_TypeError =& $x108[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x108;
$x109 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 80, 8);
$x110 = $x109($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x110->class) && $x110->class === 'Error') {$x110->properties['file'] = '<image>/01_global.js';$x110->properties['line'] = 80;$x110->properties['column'] = 8;$x110->attributes['file'] = $x110->attributes['line'] = $x110->attributes['column'] = 0; }
throw new JSException($x110, 80, 8, '<image>/01_global.js');
}
$x106 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 80, 8);
$x107 = $x106($global, $x98, $_NotImplementedError, array('decodeURIComponent(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x99 = $x107;
if (is_object($x99) && $x99 !== JS::$undefined) { $x98 = $x99; }
if (isset($x98->class) && $x98->class === 'Error') {$x98->properties['file'] = '<image>/01_global.js';$x98->properties['line'] = 80;$x98->properties['column'] = 2;$x98->attributes['file'] = $x98->attributes['line'] = $x98->attributes['column'] = 0; }
throw new JSException($x98, 80, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x97=&$scope->properties[\'arguments\'];$x97->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x97->properties[$i]=$args[$i];$x97->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'encodedURIComponent\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_encodedURIComponent=&$scope->properties[\'encodedURIComponent\'];$UencodedURIComponent=FALSE;$scope->properties[\'decodeURIComponent\']=$fn;$_decodeURIComponent=&$scope->properties[\'decodeURIComponent\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x100=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NotImplementedError\',80,12,\'<image>/01_global.js\');$_NotImplementedError=&$x100[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x100;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x101=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',80,12,\'<image>/01_global.js\');$_ReferenceError=&$x101[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x101;$x102=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',80,12);$x103=$x102($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x103->class)&&$x103->class===\'Error\'){$x103->properties[\'file\']=\'<image>/01_global.js\';$x103->properties[\'line\']=80;$x103->properties[\'column\']=12;$x103->attributes[\'file\']=$x103->attributes[\'line\']=$x103->attributes[\'column\']=0;}throw new JSException($x103,80,12,\'<image>/01_global.js\');}$x98=clone JS::$objectTemplate;unset($x104,$W104,$S104,$U104);$x105=_46540ec3caccbdb21a20f6e328b09f3c_3($global,$scope,$_NotImplementedError,(string)\'prototype\',80,8,\'<image>/01_global.js\');$x104=&$x105[0];list(,$W104,$S104,$U104)=$x105;$x99=$x104;$x98->prototype=$x99;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x108=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'TypeError\',80,8,\'<image>/01_global.js\');$_TypeError=&$x108[0];list(,$WTypeError,$STypeError,$UTypeError)=$x108;$x109=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',80,8);$x110=$x109($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x110->class)&&$x110->class===\'Error\'){$x110->properties[\'file\']=\'<image>/01_global.js\';$x110->properties[\'line\']=80;$x110->properties[\'column\']=8;$x110->attributes[\'file\']=$x110->attributes[\'line\']=$x110->attributes[\'column\']=0;}throw new JSException($x110,80,8,\'<image>/01_global.js\');}$x106=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',80,8);$x107=$x106($global,$x98,$_NotImplementedError,array(\'decodeURIComponent(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x99=$x107;if(is_object($x99)&&$x99!==JS::$undefined){$x98=$x99;}if(isset($x98->class)&&$x98->class===\'Error\'){$x98->properties[\'file\']=\'<image>/01_global.js\';$x98->properties[\'line\']=80;$x98->properties[\'column\']=2;$x98->attributes[\'file\']=$x98->attributes[\'line\']=$x98->attributes[\'column\']=0;}throw new JSException($x98,80,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x113 =& $scope->properties['arguments'];
$x113->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x113->properties[$i] = $args[$i];
$x113->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['uri'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_uri =& $scope->properties['uri'];
$Uuri = FALSE;
$scope->properties['encodeURI'] = $fn;
$_encodeURI =& $scope->properties['encodeURI'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x116 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NotImplementedError', 84, 12, '<image>/01_global.js');
$_NotImplementedError =& $x116[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x116;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x117 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 84, 12, '<image>/01_global.js');
$_ReferenceError =& $x117[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x117;
$x118 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 84, 12);
$x119 = $x118($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x119->class) && $x119->class === 'Error') {$x119->properties['file'] = '<image>/01_global.js';$x119->properties['line'] = 84;$x119->properties['column'] = 12;$x119->attributes['file'] = $x119->attributes['line'] = $x119->attributes['column'] = 0; }
throw new JSException($x119, 84, 12, '<image>/01_global.js');
}
$x114 = clone JS::$objectTemplate;
unset($x120, $W120, $S120, $U120);
$x121 = _46540ec3caccbdb21a20f6e328b09f3c_3($global, $scope, $_NotImplementedError, (string) 'prototype', 84, 8, '<image>/01_global.js');
$x120 =& $x121[0]; list(,$W120,$S120,$U120) = $x121;
$x115 = $x120;
$x114->prototype = $x115;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x124 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'TypeError', 84, 8, '<image>/01_global.js');
$_TypeError =& $x124[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x124;
$x125 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 84, 8);
$x126 = $x125($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x126->class) && $x126->class === 'Error') {$x126->properties['file'] = '<image>/01_global.js';$x126->properties['line'] = 84;$x126->properties['column'] = 8;$x126->attributes['file'] = $x126->attributes['line'] = $x126->attributes['column'] = 0; }
throw new JSException($x126, 84, 8, '<image>/01_global.js');
}
$x122 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 84, 8);
$x123 = $x122($global, $x114, $_NotImplementedError, array('encodedURI(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x115 = $x123;
if (is_object($x115) && $x115 !== JS::$undefined) { $x114 = $x115; }
if (isset($x114->class) && $x114->class === 'Error') {$x114->properties['file'] = '<image>/01_global.js';$x114->properties['line'] = 84;$x114->properties['column'] = 2;$x114->attributes['file'] = $x114->attributes['line'] = $x114->attributes['column'] = 0; }
throw new JSException($x114, 84, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x113=&$scope->properties[\'arguments\'];$x113->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x113->properties[$i]=$args[$i];$x113->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'uri\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_uri=&$scope->properties[\'uri\'];$Uuri=FALSE;$scope->properties[\'encodeURI\']=$fn;$_encodeURI=&$scope->properties[\'encodeURI\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x116=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NotImplementedError\',84,12,\'<image>/01_global.js\');$_NotImplementedError=&$x116[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x116;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x117=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',84,12,\'<image>/01_global.js\');$_ReferenceError=&$x117[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x117;$x118=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',84,12);$x119=$x118($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x119->class)&&$x119->class===\'Error\'){$x119->properties[\'file\']=\'<image>/01_global.js\';$x119->properties[\'line\']=84;$x119->properties[\'column\']=12;$x119->attributes[\'file\']=$x119->attributes[\'line\']=$x119->attributes[\'column\']=0;}throw new JSException($x119,84,12,\'<image>/01_global.js\');}$x114=clone JS::$objectTemplate;unset($x120,$W120,$S120,$U120);$x121=_46540ec3caccbdb21a20f6e328b09f3c_3($global,$scope,$_NotImplementedError,(string)\'prototype\',84,8,\'<image>/01_global.js\');$x120=&$x121[0];list(,$W120,$S120,$U120)=$x121;$x115=$x120;$x114->prototype=$x115;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x124=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'TypeError\',84,8,\'<image>/01_global.js\');$_TypeError=&$x124[0];list(,$WTypeError,$STypeError,$UTypeError)=$x124;$x125=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',84,8);$x126=$x125($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x126->class)&&$x126->class===\'Error\'){$x126->properties[\'file\']=\'<image>/01_global.js\';$x126->properties[\'line\']=84;$x126->properties[\'column\']=8;$x126->attributes[\'file\']=$x126->attributes[\'line\']=$x126->attributes[\'column\']=0;}throw new JSException($x126,84,8,\'<image>/01_global.js\');}$x122=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',84,8);$x123=$x122($global,$x114,$_NotImplementedError,array(\'encodedURI(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x115=$x123;if(is_object($x115)&&$x115!==JS::$undefined){$x114=$x115;}if(isset($x114->class)&&$x114->class===\'Error\'){$x114->properties[\'file\']=\'<image>/01_global.js\';$x114->properties[\'line\']=84;$x114->properties[\'column\']=2;$x114->attributes[\'file\']=$x114->attributes[\'line\']=$x114->attributes[\'column\']=0;}throw new JSException($x114,84,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x129 =& $scope->properties['arguments'];
$x129->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x129->properties[$i] = $args[$i];
$x129->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['uriComponent'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_uriComponent =& $scope->properties['uriComponent'];
$UuriComponent = FALSE;
$scope->properties['encodeURIComponent'] = $fn;
$_encodeURIComponent =& $scope->properties['encodeURIComponent'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x132 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'NotImplementedError', 88, 12, '<image>/01_global.js');
$_NotImplementedError =& $x132[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x132;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x133 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'ReferenceError', 88, 12, '<image>/01_global.js');
$_ReferenceError =& $x133[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x133;
$x134 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 88, 12);
$x135 = $x134($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x135->class) && $x135->class === 'Error') {$x135->properties['file'] = '<image>/01_global.js';$x135->properties['line'] = 88;$x135->properties['column'] = 12;$x135->attributes['file'] = $x135->attributes['line'] = $x135->attributes['column'] = 0; }
throw new JSException($x135, 88, 12, '<image>/01_global.js');
}
$x130 = clone JS::$objectTemplate;
unset($x136, $W136, $S136, $U136);
$x137 = _46540ec3caccbdb21a20f6e328b09f3c_3($global, $scope, $_NotImplementedError, (string) 'prototype', 88, 8, '<image>/01_global.js');
$x136 =& $x137[0]; list(,$W136,$S136,$U136) = $x137;
$x131 = $x136;
$x130->prototype = $x131;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x140 = _46540ec3caccbdb21a20f6e328b09f3c_2($global, $scope, $scope, (string) 'TypeError', 88, 8, '<image>/01_global.js');
$_TypeError =& $x140[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x140;
$x141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 88, 8);
$x142 = $x141($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x142->class) && $x142->class === 'Error') {$x142->properties['file'] = '<image>/01_global.js';$x142->properties['line'] = 88;$x142->properties['column'] = 8;$x142->attributes['file'] = $x142->attributes['line'] = $x142->attributes['column'] = 0; }
throw new JSException($x142, 88, 8, '<image>/01_global.js');
}
$x138 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 88, 8);
$x139 = $x138($global, $x130, $_NotImplementedError, array('encodeURIComponent(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x131 = $x139;
if (is_object($x131) && $x131 !== JS::$undefined) { $x130 = $x131; }
if (isset($x130->class) && $x130->class === 'Error') {$x130->properties['file'] = '<image>/01_global.js';$x130->properties['line'] = 88;$x130->properties['column'] = 2;$x130->attributes['file'] = $x130->attributes['line'] = $x130->attributes['column'] = 0; }
throw new JSException($x130, 88, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _46540ec3caccbdb21a20f6e328b09f3c_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x129=&$scope->properties[\'arguments\'];$x129->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x129->properties[$i]=$args[$i];$x129->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'uriComponent\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_uriComponent=&$scope->properties[\'uriComponent\'];$UuriComponent=FALSE;$scope->properties[\'encodeURIComponent\']=$fn;$_encodeURIComponent=&$scope->properties[\'encodeURIComponent\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x132=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'NotImplementedError\',88,12,\'<image>/01_global.js\');$_NotImplementedError=&$x132[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x132;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x133=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'ReferenceError\',88,12,\'<image>/01_global.js\');$_ReferenceError=&$x133[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x133;$x134=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',88,12);$x135=$x134($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x135->class)&&$x135->class===\'Error\'){$x135->properties[\'file\']=\'<image>/01_global.js\';$x135->properties[\'line\']=88;$x135->properties[\'column\']=12;$x135->attributes[\'file\']=$x135->attributes[\'line\']=$x135->attributes[\'column\']=0;}throw new JSException($x135,88,12,\'<image>/01_global.js\');}$x130=clone JS::$objectTemplate;unset($x136,$W136,$S136,$U136);$x137=_46540ec3caccbdb21a20f6e328b09f3c_3($global,$scope,$_NotImplementedError,(string)\'prototype\',88,8,\'<image>/01_global.js\');$x136=&$x137[0];list(,$W136,$S136,$U136)=$x137;$x131=$x136;$x130->prototype=$x131;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x140=_46540ec3caccbdb21a20f6e328b09f3c_2($global,$scope,$scope,(string)\'TypeError\',88,8,\'<image>/01_global.js\');$_TypeError=&$x140[0];list(,$WTypeError,$STypeError,$UTypeError)=$x140;$x141=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',88,8);$x142=$x141($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x142->class)&&$x142->class===\'Error\'){$x142->properties[\'file\']=\'<image>/01_global.js\';$x142->properties[\'line\']=88;$x142->properties[\'column\']=8;$x142->attributes[\'file\']=$x142->attributes[\'line\']=$x142->attributes[\'column\']=0;}throw new JSException($x142,88,8,\'<image>/01_global.js\');}$x138=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',88,8);$x139=$x138($global,$x130,$_NotImplementedError,array(\'encodeURIComponent(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x131=$x139;if(is_object($x131)&&$x131!==JS::$undefined){$x130=$x131;}if(isset($x130->class)&&$x130->class===\'Error\'){$x130->properties[\'file\']=\'<image>/01_global.js\';$x130->properties[\'line\']=88;$x130->properties[\'column\']=2;$x130->attributes[\'file\']=$x130->attributes[\'line\']=$x130->attributes[\'column\']=0;}throw new JSException($x130,88,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _46540ec3caccbdb21a20f6e328b09f3c_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/01_global.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/01_global.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_eval;
$_parseInt;
$_parseFloat;
$_isNaN;
$_isFinite;
$_decodeURI;
$_decodeURIComponent;
$_encodeURI;
$_encodeURIComponent;
$x32 = clone JS::$functionTemplate; $x32->call = '_46540ec3caccbdb21a20f6e328b09f3c_1'; $x32->parameters = array (
  0 => 'x',
); $x32->name = 'eval'; $x32->scope = $scope; $x32->properties['prototype'] = clone JS::$objectTemplate; $x32->attributes['prototype'] = JS::WRITABLE; $x32->properties['prototype']->properties['constructor'] = $x32; $x32->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x32->properties['length'] = 1; $x32->attributes['length'] = 0;
$scope->properties['eval'] = JS::$undefined; $_eval =& $scope->properties['eval'];
$Ueval = FALSE;
$_eval = $x32;
$x66 = clone JS::$functionTemplate; $x66->call = '_46540ec3caccbdb21a20f6e328b09f3c_4'; $x66->parameters = array (
  0 => 'string',
  1 => 'radix',
); $x66->name = 'parseInt'; $x66->scope = $scope; $x66->properties['prototype'] = clone JS::$objectTemplate; $x66->attributes['prototype'] = JS::WRITABLE; $x66->properties['prototype']->properties['constructor'] = $x66; $x66->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x66->properties['length'] = 2; $x66->attributes['length'] = 0;
$scope->properties['parseInt'] = JS::$undefined; $_parseInt =& $scope->properties['parseInt'];
$UparseInt = FALSE;
$_parseInt = $x66;
$x73 = clone JS::$functionTemplate; $x73->call = '_46540ec3caccbdb21a20f6e328b09f3c_5'; $x73->parameters = array (
  0 => 'string',
); $x73->name = 'parseFloat'; $x73->scope = $scope; $x73->properties['prototype'] = clone JS::$objectTemplate; $x73->attributes['prototype'] = JS::WRITABLE; $x73->properties['prototype']->properties['constructor'] = $x73; $x73->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x73->properties['length'] = 1; $x73->attributes['length'] = 0;
$scope->properties['parseFloat'] = JS::$undefined; $_parseFloat =& $scope->properties['parseFloat'];
$UparseFloat = FALSE;
$_parseFloat = $x73;
$x76 = clone JS::$functionTemplate; $x76->call = '_46540ec3caccbdb21a20f6e328b09f3c_6'; $x76->parameters = array (
  0 => 'number',
); $x76->name = 'isNaN'; $x76->scope = $scope; $x76->properties['prototype'] = clone JS::$objectTemplate; $x76->attributes['prototype'] = JS::WRITABLE; $x76->properties['prototype']->properties['constructor'] = $x76; $x76->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x76->properties['length'] = 1; $x76->attributes['length'] = 0;
$scope->properties['isNaN'] = JS::$undefined; $_isNaN =& $scope->properties['isNaN'];
$UisNaN = FALSE;
$_isNaN = $x76;
$x79 = clone JS::$functionTemplate; $x79->call = '_46540ec3caccbdb21a20f6e328b09f3c_7'; $x79->parameters = array (
  0 => 'number',
); $x79->name = 'isFinite'; $x79->scope = $scope; $x79->properties['prototype'] = clone JS::$objectTemplate; $x79->attributes['prototype'] = JS::WRITABLE; $x79->properties['prototype']->properties['constructor'] = $x79; $x79->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x79->properties['length'] = 1; $x79->attributes['length'] = 0;
$scope->properties['isFinite'] = JS::$undefined; $_isFinite =& $scope->properties['isFinite'];
$UisFinite = FALSE;
$_isFinite = $x79;
$x95 = clone JS::$functionTemplate; $x95->call = '_46540ec3caccbdb21a20f6e328b09f3c_8'; $x95->parameters = array (
  0 => 'encodedURI',
); $x95->name = 'decodeURI'; $x95->scope = $scope; $x95->properties['prototype'] = clone JS::$objectTemplate; $x95->attributes['prototype'] = JS::WRITABLE; $x95->properties['prototype']->properties['constructor'] = $x95; $x95->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x95->properties['length'] = 1; $x95->attributes['length'] = 0;
$scope->properties['decodeURI'] = JS::$undefined; $_decodeURI =& $scope->properties['decodeURI'];
$UdecodeURI = FALSE;
$_decodeURI = $x95;
$x111 = clone JS::$functionTemplate; $x111->call = '_46540ec3caccbdb21a20f6e328b09f3c_9'; $x111->parameters = array (
  0 => 'encodedURIComponent',
); $x111->name = 'decodeURIComponent'; $x111->scope = $scope; $x111->properties['prototype'] = clone JS::$objectTemplate; $x111->attributes['prototype'] = JS::WRITABLE; $x111->properties['prototype']->properties['constructor'] = $x111; $x111->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x111->properties['length'] = 1; $x111->attributes['length'] = 0;
$scope->properties['decodeURIComponent'] = JS::$undefined; $_decodeURIComponent =& $scope->properties['decodeURIComponent'];
$UdecodeURIComponent = FALSE;
$_decodeURIComponent = $x111;
$x127 = clone JS::$functionTemplate; $x127->call = '_46540ec3caccbdb21a20f6e328b09f3c_10'; $x127->parameters = array (
  0 => 'uri',
); $x127->name = 'encodeURI'; $x127->scope = $scope; $x127->properties['prototype'] = clone JS::$objectTemplate; $x127->attributes['prototype'] = JS::WRITABLE; $x127->properties['prototype']->properties['constructor'] = $x127; $x127->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x127->properties['length'] = 1; $x127->attributes['length'] = 0;
$scope->properties['encodeURI'] = JS::$undefined; $_encodeURI =& $scope->properties['encodeURI'];
$UencodeURI = FALSE;
$_encodeURI = $x127;
$x143 = clone JS::$functionTemplate; $x143->call = '_46540ec3caccbdb21a20f6e328b09f3c_11'; $x143->parameters = array (
  0 => 'uriComponent',
); $x143->name = 'encodeURIComponent'; $x143->scope = $scope; $x143->properties['prototype'] = clone JS::$objectTemplate; $x143->attributes['prototype'] = JS::WRITABLE; $x143->properties['prototype']->properties['constructor'] = $x143; $x143->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x143->properties['length'] = 1; $x143->attributes['length'] = 0;
$scope->properties['encodeURIComponent'] = JS::$undefined; $_encodeURIComponent =& $scope->properties['encodeURIComponent'];
$UencodeURIComponent = FALSE;
$_encodeURIComponent = $x143;
$scope->properties['NaN'] = JS::$undefined; $_NaN =& $scope->properties['NaN'];
$UNaN = FALSE;
$_NaN = NAN;
$scope->properties['Infinity'] = JS::$undefined; $_Infinity =& $scope->properties['Infinity'];
$UInfinity = FALSE;
$_Infinity = INF;
$scope->properties['undefined'] = JS::$undefined; $_undefined =& $scope->properties['undefined'];
$Uundefined = FALSE;
$_undefined = JS::$undefined;
;
return JS::$undefined;
}
