function _df932a1aa7b121505041b273c0152b53_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _df932a1aa7b121505041b273c0152b53_2($global,$scope,$base,$id,$line,$column,$file){$WSyntaxError=$SSyntaxError=$USyntaxError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_SyntaxError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x4=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x5=$x4($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_SyntaxError=$x5;}else{$_SyntaxError=JS::$undefined;$USyntaxError=TRUE;}return array(&$_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);}', "\n";
function _df932a1aa7b121505041b273c0152b53_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x21 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x21[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x21;
$x22 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x23 = $x22($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x23->class) && $x23->class === 'Error' && !isset($x23->properties['file']) && !isset($x23->properties['line']) && !isset($x23->properties['column'])) {$x23->properties['file'] = $file;$x23->properties['line'] = $line;$x23->properties['column'] = $column;$x23->attributes['file'] = $x23->attributes['line'] = $x23->attributes['column'] = 0; }
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
echo 'function _df932a1aa7b121505041b273c0152b53_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x21=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x21[0];list(,$WTypeError,$STypeError,$UTypeError)=$x21;$x22=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x23=$x22($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x23->class)&&$x23->class===\'Error\'&&!isset($x23->properties[\'file\'])&&!isset($x23->properties[\'line\'])&&!isset($x23->properties[\'column\'])){$x23->properties[\'file\']=$file;$x23->properties[\'line\']=$line;$x23->properties[\'column\']=$column;$x23->attributes[\'file\']=$x23->attributes[\'line\']=$x23->attributes[\'column\']=0;}throw new JSException($x23,$line,$column,$file);}$W20=$S20=$U20=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x20=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x24=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x25=$x24($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x20=$x25;}else{$x20=JS::$undefined;$U20=TRUE;}return array(&$x20,$W20,$S20,$U20);}', "\n";
function _df932a1aa7b121505041b273c0152b53_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x6 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'SyntaxError', 12, 14, '<image>/01_global.js');
$_SyntaxError =& $x6[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x6;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x7 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 12, 14, '<image>/01_global.js');
$_ReferenceError =& $x7[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x7;
$x8 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 12, 14);
$x9 = $x8($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error' && !isset($x9->properties['file']) && !isset($x9->properties['line']) && !isset($x9->properties['column'])) {$x9->properties['file'] = '<image>/01_global.js';$x9->properties['line'] = 12;$x9->properties['column'] = 14;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
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
$x26 = _df932a1aa7b121505041b273c0152b53_3($global, $scope, $_SyntaxError, (string) 'prototype', 12, 10, '<image>/01_global.js');
$x20 =& $x26[0]; list(,$W20,$S20,$U20) = $x26;
$x3 = $x20;
$x2->prototype = $x3;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x29 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'TypeError', 12, 10, '<image>/01_global.js');
$_TypeError =& $x29[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x29;
$x30 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 12, 10);
$x31 = $x30($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x31->class) && $x31->class === 'Error' && !isset($x31->properties['file']) && !isset($x31->properties['line']) && !isset($x31->properties['column'])) {$x31->properties['file'] = '<image>/01_global.js';$x31->properties['line'] = 12;$x31->properties['column'] = 10;$x31->attributes['file'] = $x31->attributes['line'] = $x31->attributes['column'] = 0; }
throw new JSException($x31, 12, 10, '<image>/01_global.js');
}
$x27 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 12, 10);
$x28 = $x27($global, $x2, $_SyntaxError, array((is_string($x10) || is_string($x11) ? JS::toString($x10, $global) . JS::toString($x11, $global) : JS::toNumber($x10, $global) + JS::toNumber($x11, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x3 = $x28;
if (is_object($x3) && $x3 !== JS::$undefined) { $x2 = $x3; }
if (isset($x2->class) && $x2->class === 'Error' && !isset($x2->properties['file']) && !isset($x2->properties['line']) && !isset($x2->properties['column'])) {$x2->properties['file'] = '<image>/01_global.js';$x2->properties['line'] = 12;$x2->properties['column'] = 4;$x2->attributes['file'] = $x2->attributes['line'] = $x2->attributes['column'] = 0; }
throw new JSException($x2, 12, 4, '<image>/01_global.js');
}

		$compiler = new JSCompiler;
		$code = $compiler->__invoke($ast, array('loader' => JS::$loader));
		$entryPoint = eval($code);
		return $entryPoint($global, $global->scope[$global->scope_sp - 1]);
;
return JS::$undefined;
}
echo 'function _df932a1aa7b121505041b273c0152b53_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'x\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_x=&$scope->properties[\'x\'];$Ux=FALSE;$scope->properties[\'eval\']=$fn;$_eval=&$scope->properties[\'eval\'];$global->scope[++$global->scope_sp]=$scope;$parser=new JSParser;list($ok,$ast,$error)=$parser->__invoke(JS::toString($_x,$global),array(\'file\'=>\'<eval>\'));if(!$ok){;unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x6=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'SyntaxError\',12,14,\'<image>/01_global.js\');$_SyntaxError=&$x6[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x6;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x7=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',12,14,\'<image>/01_global.js\');$_ReferenceError=&$x7[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x7;$x8=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',12,14);$x9=$x8($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/01_global.js\';$x9->properties[\'line\']=12;$x9->properties[\'column\']=14;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,12,14,\'<image>/01_global.js\');}$x18=JS::toPrimitive(\'eval(): syntax error at \',$global);$x19=JS::toPrimitive($error->line,$global);$x16=JS::toPrimitive((is_string($x18)||is_string($x19)?JS::toString($x18,$global).JS::toString($x19,$global):JS::toNumber($x18,$global)+JS::toNumber($x19,$global)),$global);$x17=JS::toPrimitive(\':\',$global);$x14=JS::toPrimitive((is_string($x16)||is_string($x17)?JS::toString($x16,$global).JS::toString($x17,$global):JS::toNumber($x16,$global)+JS::toNumber($x17,$global)),$global);$x15=JS::toPrimitive($error->column,$global);$x12=JS::toPrimitive((is_string($x14)||is_string($x15)?JS::toString($x14,$global).JS::toString($x15,$global):JS::toNumber($x14,$global)+JS::toNumber($x15,$global)),$global);$x13=JS::toPrimitive(\', expected \',$global);$x10=JS::toPrimitive((is_string($x12)||is_string($x13)?JS::toString($x12,$global).JS::toString($x13,$global):JS::toNumber($x12,$global)+JS::toNumber($x13,$global)),$global);$x11=JS::toPrimitive(implode(\', \',$error->expected),$global);$x2=clone JS::$objectTemplate;unset($x20,$W20,$S20,$U20);$x26=_df932a1aa7b121505041b273c0152b53_3($global,$scope,$_SyntaxError,(string)\'prototype\',12,10,\'<image>/01_global.js\');$x20=&$x26[0];list(,$W20,$S20,$U20)=$x26;$x3=$x20;$x2->prototype=$x3;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x29=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'TypeError\',12,10,\'<image>/01_global.js\');$_TypeError=&$x29[0];list(,$WTypeError,$STypeError,$UTypeError)=$x29;$x30=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',12,10);$x31=$x30($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x31->class)&&$x31->class===\'Error\'&&!isset($x31->properties[\'file\'])&&!isset($x31->properties[\'line\'])&&!isset($x31->properties[\'column\'])){$x31->properties[\'file\']=\'<image>/01_global.js\';$x31->properties[\'line\']=12;$x31->properties[\'column\']=10;$x31->attributes[\'file\']=$x31->attributes[\'line\']=$x31->attributes[\'column\']=0;}throw new JSException($x31,12,10,\'<image>/01_global.js\');}$x27=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',12,10);$x28=$x27($global,$x2,$_SyntaxError,array((is_string($x10)||is_string($x11)?JS::toString($x10,$global).JS::toString($x11,$global):JS::toNumber($x10,$global)+JS::toNumber($x11,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x3=$x28;if(is_object($x3)&&$x3!==JS::$undefined){$x2=$x3;}if(isset($x2->class)&&$x2->class===\'Error\'&&!isset($x2->properties[\'file\'])&&!isset($x2->properties[\'line\'])&&!isset($x2->properties[\'column\'])){$x2->properties[\'file\']=\'<image>/01_global.js\';$x2->properties[\'line\']=12;$x2->properties[\'column\']=4;$x2->attributes[\'file\']=$x2->attributes[\'line\']=$x2->attributes[\'column\']=0;}throw new JSException($x2,12,4,\'<image>/01_global.js\');}$compiler=new JSCompiler;$code=$compiler->__invoke($ast,array(\'loader\'=>JS::$loader));$entryPoint=eval($code);return$entryPoint($global,$global->scope[$global->scope_sp-1]);return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_4($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x48 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NaN', 26, 10, '<image>/01_global.js');
$_NaN =& $x48[0]; list(,$WNaN,$SNaN,$UNaN) = $x48;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x49 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 26, 10, '<image>/01_global.js');
$_ReferenceError =& $x49[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x49;
$x50 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 26, 10);
$x51 = $x50($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x51->class) && $x51->class === 'Error' && !isset($x51->properties['file']) && !isset($x51->properties['line']) && !isset($x51->properties['column'])) {$x51->properties['file'] = '<image>/01_global.js';$x51->properties['line'] = 26;$x51->properties['column'] = 10;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
throw new JSException($x51, 26, 10, '<image>/01_global.js');
}
return $_NaN;;
};
$x52 = !(((gettype($_radix) === gettype(JS::$undefined) && $_radix === JS::$undefined))|| (((is_float($_radix) || is_int($_radix)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_radix == JS::$undefined));
if (JS::toBoolean($x52, $global)) {

return intval(JS::toString($_string, $global), (int) JS::toNumber($_radix, $global));;
};
$x53 = JS::toString($_string, $global);
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x53;
if (JS::toBoolean(empty($_string), $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x54 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NaN', 36, 10, '<image>/01_global.js');
$_NaN =& $x54[0]; list(,$WNaN,$SNaN,$UNaN) = $x54;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x55 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 36, 10, '<image>/01_global.js');
$_ReferenceError =& $x55[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x55;
$x56 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 36, 10);
$x57 = $x56($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x57->class) && $x57->class === 'Error' && !isset($x57->properties['file']) && !isset($x57->properties['line']) && !isset($x57->properties['column'])) {$x57->properties['file'] = '<image>/01_global.js';$x57->properties['line'] = 36;$x57->properties['column'] = 10;$x57->attributes['file'] = $x57->attributes['line'] = $x57->attributes['column'] = 0; }
throw new JSException($x57, 36, 10, '<image>/01_global.js');
}
return $_NaN;;
};
if (JS::toBoolean($_string[0] === '0' && isset($_string[1]) && ($_string[1] === 'x' ||$_string[1] === 'X'), $global)) {
if (!(is_object($_parseInt) && isset($_parseInt->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x60 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'TypeError', 40, 18, '<image>/01_global.js');
$_TypeError =& $x60[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x60;
$x61 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 40, 18);
$x62 = $x61($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x62->class) && $x62->class === 'Error' && !isset($x62->properties['file']) && !isset($x62->properties['line']) && !isset($x62->properties['column'])) {$x62->properties['file'] = '<image>/01_global.js';$x62->properties['line'] = 40;$x62->properties['column'] = 18;$x62->attributes['file'] = $x62->attributes['line'] = $x62->attributes['column'] = 0; }
throw new JSException($x62, 40, 18, '<image>/01_global.js');
}
$x58 = $_parseInt->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 40, 18);
$x59 = $x58($global, $global, $_parseInt, array(substr($_string, 2), 16), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x59;;
};
if (JS::toBoolean($_string[0] === '0' && isset($_string[1]), $global)) {

return intval($_string, 8);;
};
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = intval($_string);
if (JS::toBoolean(((string)$_i) !==$_string, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x63 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NaN', 50, 10, '<image>/01_global.js');
$_NaN =& $x63[0]; list(,$WNaN,$SNaN,$UNaN) = $x63;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x64 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 50, 10, '<image>/01_global.js');
$_ReferenceError =& $x64[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x64;
$x65 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 50, 10);
$x66 = $x65($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x66->class) && $x66->class === 'Error' && !isset($x66->properties['file']) && !isset($x66->properties['line']) && !isset($x66->properties['column'])) {$x66->properties['file'] = '<image>/01_global.js';$x66->properties['line'] = 50;$x66->properties['column'] = 10;$x66->attributes['file'] = $x66->attributes['line'] = $x66->attributes['column'] = 0; }
throw new JSException($x66, 50, 10, '<image>/01_global.js');
}
return $_NaN;;
};
return $_i;
;
return JS::$undefined;
}
echo 'function _df932a1aa7b121505041b273c0152b53_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x34=&$scope->properties[\'arguments\'];$x34->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x34->properties[$i]=$args[$i];$x34->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'radix\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_radix=&$scope->properties[\'radix\'];$Uradix=FALSE;$scope->properties[\'parseInt\']=$fn;$_parseInt=&$scope->properties[\'parseInt\'];$global->scope[++$global->scope_sp]=$scope;$x36=!(((gettype($_radix)===gettype(JS::$undefined)&&$_radix===JS::$undefined))||(((is_float($_radix)||is_int($_radix))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_radix==JS::$undefined));$x35=$x36;if(JS::toBoolean($x35,$global)){$x38=JS::toPrimitive($_radix,$global);$x39=JS::toPrimitive(2,$global);$x40=(is_string($x38)&&is_string($x39)?strcmp($x38,$x39)<0:(!is_nan($x41=JS::toNumber($x38,$global))&&!is_nan($x42=JS::toNumber($x39,$global))&&$x41<$x42));$x37=$x40;if(!JS::toBoolean($x37,$global)){$x43=JS::toPrimitive($_radix,$global);$x44=JS::toPrimitive(36,$global);$x45=(is_string($x44)&&is_string($x43)?strcmp($x44,$x43)<0:(!is_nan($x46=JS::toNumber($x44,$global))&&!is_nan($x47=JS::toNumber($x43,$global))&&$x46<$x47));$x37=$x45;}$x35=$x37;}if(JS::toBoolean($x35,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x48=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NaN\',26,10,\'<image>/01_global.js\');$_NaN=&$x48[0];list(,$WNaN,$SNaN,$UNaN)=$x48;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x49=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',26,10,\'<image>/01_global.js\');$_ReferenceError=&$x49[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x49;$x50=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',26,10);$x51=$x50($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'&&!isset($x51->properties[\'file\'])&&!isset($x51->properties[\'line\'])&&!isset($x51->properties[\'column\'])){$x51->properties[\'file\']=\'<image>/01_global.js\';$x51->properties[\'line\']=26;$x51->properties[\'column\']=10;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,26,10,\'<image>/01_global.js\');}return$_NaN;}$x52=!(((gettype($_radix)===gettype(JS::$undefined)&&$_radix===JS::$undefined))||(((is_float($_radix)||is_int($_radix))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_radix==JS::$undefined));if(JS::toBoolean($x52,$global)){return intval(JS::toString($_string,$global),(int)JS::toNumber($_radix,$global));}$x53=JS::toString($_string,$global);if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x53;if(JS::toBoolean(empty($_string),$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x54=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NaN\',36,10,\'<image>/01_global.js\');$_NaN=&$x54[0];list(,$WNaN,$SNaN,$UNaN)=$x54;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x55=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',36,10,\'<image>/01_global.js\');$_ReferenceError=&$x55[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x55;$x56=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',36,10);$x57=$x56($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x57->class)&&$x57->class===\'Error\'&&!isset($x57->properties[\'file\'])&&!isset($x57->properties[\'line\'])&&!isset($x57->properties[\'column\'])){$x57->properties[\'file\']=\'<image>/01_global.js\';$x57->properties[\'line\']=36;$x57->properties[\'column\']=10;$x57->attributes[\'file\']=$x57->attributes[\'line\']=$x57->attributes[\'column\']=0;}throw new JSException($x57,36,10,\'<image>/01_global.js\');}return$_NaN;}if(JS::toBoolean($_string[0]===\'0\'&&isset($_string[1])&&($_string[1]===\'x\'||$_string[1]===\'X\'),$global)){if(!(is_object($_parseInt)&&isset($_parseInt->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x60=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'TypeError\',40,18,\'<image>/01_global.js\');$_TypeError=&$x60[0];list(,$WTypeError,$STypeError,$UTypeError)=$x60;$x61=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',40,18);$x62=$x61($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x62->class)&&$x62->class===\'Error\'&&!isset($x62->properties[\'file\'])&&!isset($x62->properties[\'line\'])&&!isset($x62->properties[\'column\'])){$x62->properties[\'file\']=\'<image>/01_global.js\';$x62->properties[\'line\']=40;$x62->properties[\'column\']=18;$x62->attributes[\'file\']=$x62->attributes[\'line\']=$x62->attributes[\'column\']=0;}throw new JSException($x62,40,18,\'<image>/01_global.js\');}$x58=$_parseInt->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',40,18);$x59=$x58($global,$global,$_parseInt,array(substr($_string,2),16),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x59;}if(JS::toBoolean($_string[0]===\'0\'&&isset($_string[1]),$global)){return intval($_string,8);}$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=intval($_string);if(JS::toBoolean(((string)$_i)!==$_string,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x63=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NaN\',50,10,\'<image>/01_global.js\');$_NaN=&$x63[0];list(,$WNaN,$SNaN,$UNaN)=$x63;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x64=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',50,10,\'<image>/01_global.js\');$_ReferenceError=&$x64[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x64;$x65=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',50,10);$x66=$x65($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x66->class)&&$x66->class===\'Error\'&&!isset($x66->properties[\'file\'])&&!isset($x66->properties[\'line\'])&&!isset($x66->properties[\'column\'])){$x66->properties[\'file\']=\'<image>/01_global.js\';$x66->properties[\'line\']=50;$x66->properties[\'column\']=10;$x66->attributes[\'file\']=$x66->attributes[\'line\']=$x66->attributes[\'column\']=0;}throw new JSException($x66,50,10,\'<image>/01_global.js\');}return$_NaN;}return$_i;return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x69 =& $scope->properties['arguments'];
$x69->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x69->properties[$i] = $args[$i];
$x69->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$scope->properties['parseFloat'] = $fn;
$_parseFloat =& $scope->properties['parseFloat'];
$global->scope[++$global->scope_sp] = $scope;
$x70 = ltrim(JS::toString($_string, $global));
if ($Ustring) {$global->properties['string'] = $_string; $_string =& $global->properties['string']; }
$_string = $x70;
$scope->properties['f'] = JS::$undefined; $_f =& $scope->properties['f'];
$Uf = FALSE;
$_f = floatval($_string);
if (JS::toBoolean(empty($_string) || ((string)$_f) === '0' &&$_string[0] !== '0', $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x71 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NaN', 61, 10, '<image>/01_global.js');
$_NaN =& $x71[0]; list(,$WNaN,$SNaN,$UNaN) = $x71;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x72 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 61, 10, '<image>/01_global.js');
$_ReferenceError =& $x72[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x72;
$x73 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 61, 10);
$x74 = $x73($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x74->class) && $x74->class === 'Error' && !isset($x74->properties['file']) && !isset($x74->properties['line']) && !isset($x74->properties['column'])) {$x74->properties['file'] = '<image>/01_global.js';$x74->properties['line'] = 61;$x74->properties['column'] = 10;$x74->attributes['file'] = $x74->attributes['line'] = $x74->attributes['column'] = 0; }
throw new JSException($x74, 61, 10, '<image>/01_global.js');
}
return $_NaN;;
};
return $_f;
;
return JS::$undefined;
}
echo 'function _df932a1aa7b121505041b273c0152b53_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x69=&$scope->properties[\'arguments\'];$x69->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x69->properties[$i]=$args[$i];$x69->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$scope->properties[\'parseFloat\']=$fn;$_parseFloat=&$scope->properties[\'parseFloat\'];$global->scope[++$global->scope_sp]=$scope;$x70=ltrim(JS::toString($_string,$global));if($Ustring){$global->properties[\'string\']=$_string;$_string=&$global->properties[\'string\'];}$_string=$x70;$scope->properties[\'f\']=JS::$undefined;$_f=&$scope->properties[\'f\'];$Uf=FALSE;$_f=floatval($_string);if(JS::toBoolean(empty($_string)||((string)$_f)===\'0\'&&$_string[0]!==\'0\',$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x71=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NaN\',61,10,\'<image>/01_global.js\');$_NaN=&$x71[0];list(,$WNaN,$SNaN,$UNaN)=$x71;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x72=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',61,10,\'<image>/01_global.js\');$_ReferenceError=&$x72[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x72;$x73=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',61,10);$x74=$x73($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x74->class)&&$x74->class===\'Error\'&&!isset($x74->properties[\'file\'])&&!isset($x74->properties[\'line\'])&&!isset($x74->properties[\'column\'])){$x74->properties[\'file\']=\'<image>/01_global.js\';$x74->properties[\'line\']=61;$x74->properties[\'column\']=10;$x74->attributes[\'file\']=$x74->attributes[\'line\']=$x74->attributes[\'column\']=0;}throw new JSException($x74,61,10,\'<image>/01_global.js\');}return$_NaN;}return$_f;return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x77 =& $scope->properties['arguments'];
$x77->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x77->properties[$i] = $args[$i];
$x77->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _df932a1aa7b121505041b273c0152b53_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x77=&$scope->properties[\'arguments\'];$x77->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x77->properties[$i]=$args[$i];$x77->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'number\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_number=&$scope->properties[\'number\'];$Unumber=FALSE;$scope->properties[\'isNaN\']=$fn;$_isNaN=&$scope->properties[\'isNaN\'];$global->scope[++$global->scope_sp]=$scope;return is_nan(JS::toNumber($_number,$global));return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x80 =& $scope->properties['arguments'];
$x80->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x80->properties[$i] = $args[$i];
$x80->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _df932a1aa7b121505041b273c0152b53_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x80=&$scope->properties[\'arguments\'];$x80->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x80->properties[$i]=$args[$i];$x80->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'number\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_number=&$scope->properties[\'number\'];$Unumber=FALSE;$scope->properties[\'isFinite\']=$fn;$_isFinite=&$scope->properties[\'isFinite\'];$global->scope[++$global->scope_sp]=$scope;return is_finite(JS::toNumber($_number,$global));return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x83 =& $scope->properties['arguments'];
$x83->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x83->properties[$i] = $args[$i];
$x83->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['encodedURI'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_encodedURI =& $scope->properties['encodedURI'];
$UencodedURI = FALSE;
$scope->properties['decodeURI'] = $fn;
$_decodeURI =& $scope->properties['decodeURI'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x86 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NotImplementedError', 76, 12, '<image>/01_global.js');
$_NotImplementedError =& $x86[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x86;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x87 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 76, 12, '<image>/01_global.js');
$_ReferenceError =& $x87[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x87;
$x88 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 76, 12);
$x89 = $x88($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error' && !isset($x89->properties['file']) && !isset($x89->properties['line']) && !isset($x89->properties['column'])) {$x89->properties['file'] = '<image>/01_global.js';$x89->properties['line'] = 76;$x89->properties['column'] = 12;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, 76, 12, '<image>/01_global.js');
}
$x84 = clone JS::$objectTemplate;
unset($x90, $W90, $S90, $U90);
$x91 = _df932a1aa7b121505041b273c0152b53_3($global, $scope, $_NotImplementedError, (string) 'prototype', 76, 8, '<image>/01_global.js');
$x90 =& $x91[0]; list(,$W90,$S90,$U90) = $x91;
$x85 = $x90;
$x84->prototype = $x85;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x94 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'TypeError', 76, 8, '<image>/01_global.js');
$_TypeError =& $x94[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x94;
$x95 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 76, 8);
$x96 = $x95($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x96->class) && $x96->class === 'Error' && !isset($x96->properties['file']) && !isset($x96->properties['line']) && !isset($x96->properties['column'])) {$x96->properties['file'] = '<image>/01_global.js';$x96->properties['line'] = 76;$x96->properties['column'] = 8;$x96->attributes['file'] = $x96->attributes['line'] = $x96->attributes['column'] = 0; }
throw new JSException($x96, 76, 8, '<image>/01_global.js');
}
$x92 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 76, 8);
$x93 = $x92($global, $x84, $_NotImplementedError, array('decodeURI(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x85 = $x93;
if (is_object($x85) && $x85 !== JS::$undefined) { $x84 = $x85; }
if (isset($x84->class) && $x84->class === 'Error' && !isset($x84->properties['file']) && !isset($x84->properties['line']) && !isset($x84->properties['column'])) {$x84->properties['file'] = '<image>/01_global.js';$x84->properties['line'] = 76;$x84->properties['column'] = 2;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 76, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _df932a1aa7b121505041b273c0152b53_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x83=&$scope->properties[\'arguments\'];$x83->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x83->properties[$i]=$args[$i];$x83->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'encodedURI\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_encodedURI=&$scope->properties[\'encodedURI\'];$UencodedURI=FALSE;$scope->properties[\'decodeURI\']=$fn;$_decodeURI=&$scope->properties[\'decodeURI\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x86=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NotImplementedError\',76,12,\'<image>/01_global.js\');$_NotImplementedError=&$x86[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x86;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x87=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',76,12,\'<image>/01_global.js\');$_ReferenceError=&$x87[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x87;$x88=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',76,12);$x89=$x88($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x89->class)&&$x89->class===\'Error\'&&!isset($x89->properties[\'file\'])&&!isset($x89->properties[\'line\'])&&!isset($x89->properties[\'column\'])){$x89->properties[\'file\']=\'<image>/01_global.js\';$x89->properties[\'line\']=76;$x89->properties[\'column\']=12;$x89->attributes[\'file\']=$x89->attributes[\'line\']=$x89->attributes[\'column\']=0;}throw new JSException($x89,76,12,\'<image>/01_global.js\');}$x84=clone JS::$objectTemplate;unset($x90,$W90,$S90,$U90);$x91=_df932a1aa7b121505041b273c0152b53_3($global,$scope,$_NotImplementedError,(string)\'prototype\',76,8,\'<image>/01_global.js\');$x90=&$x91[0];list(,$W90,$S90,$U90)=$x91;$x85=$x90;$x84->prototype=$x85;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x94=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'TypeError\',76,8,\'<image>/01_global.js\');$_TypeError=&$x94[0];list(,$WTypeError,$STypeError,$UTypeError)=$x94;$x95=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',76,8);$x96=$x95($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x96->class)&&$x96->class===\'Error\'&&!isset($x96->properties[\'file\'])&&!isset($x96->properties[\'line\'])&&!isset($x96->properties[\'column\'])){$x96->properties[\'file\']=\'<image>/01_global.js\';$x96->properties[\'line\']=76;$x96->properties[\'column\']=8;$x96->attributes[\'file\']=$x96->attributes[\'line\']=$x96->attributes[\'column\']=0;}throw new JSException($x96,76,8,\'<image>/01_global.js\');}$x92=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',76,8);$x93=$x92($global,$x84,$_NotImplementedError,array(\'decodeURI(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x85=$x93;if(is_object($x85)&&$x85!==JS::$undefined){$x84=$x85;}if(isset($x84->class)&&$x84->class===\'Error\'&&!isset($x84->properties[\'file\'])&&!isset($x84->properties[\'line\'])&&!isset($x84->properties[\'column\'])){$x84->properties[\'file\']=\'<image>/01_global.js\';$x84->properties[\'line\']=76;$x84->properties[\'column\']=2;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,76,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['encodedURIComponent'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_encodedURIComponent =& $scope->properties['encodedURIComponent'];
$UencodedURIComponent = FALSE;
$scope->properties['decodeURIComponent'] = $fn;
$_decodeURIComponent =& $scope->properties['decodeURIComponent'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x102 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NotImplementedError', 80, 12, '<image>/01_global.js');
$_NotImplementedError =& $x102[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x102;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x103 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 80, 12, '<image>/01_global.js');
$_ReferenceError =& $x103[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x103;
$x104 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 80, 12);
$x105 = $x104($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x105->class) && $x105->class === 'Error' && !isset($x105->properties['file']) && !isset($x105->properties['line']) && !isset($x105->properties['column'])) {$x105->properties['file'] = '<image>/01_global.js';$x105->properties['line'] = 80;$x105->properties['column'] = 12;$x105->attributes['file'] = $x105->attributes['line'] = $x105->attributes['column'] = 0; }
throw new JSException($x105, 80, 12, '<image>/01_global.js');
}
$x100 = clone JS::$objectTemplate;
unset($x106, $W106, $S106, $U106);
$x107 = _df932a1aa7b121505041b273c0152b53_3($global, $scope, $_NotImplementedError, (string) 'prototype', 80, 8, '<image>/01_global.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
$x101 = $x106;
$x100->prototype = $x101;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x110 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'TypeError', 80, 8, '<image>/01_global.js');
$_TypeError =& $x110[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x110;
$x111 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 80, 8);
$x112 = $x111($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x112->class) && $x112->class === 'Error' && !isset($x112->properties['file']) && !isset($x112->properties['line']) && !isset($x112->properties['column'])) {$x112->properties['file'] = '<image>/01_global.js';$x112->properties['line'] = 80;$x112->properties['column'] = 8;$x112->attributes['file'] = $x112->attributes['line'] = $x112->attributes['column'] = 0; }
throw new JSException($x112, 80, 8, '<image>/01_global.js');
}
$x108 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 80, 8);
$x109 = $x108($global, $x100, $_NotImplementedError, array('decodeURIComponent(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x101 = $x109;
if (is_object($x101) && $x101 !== JS::$undefined) { $x100 = $x101; }
if (isset($x100->class) && $x100->class === 'Error' && !isset($x100->properties['file']) && !isset($x100->properties['line']) && !isset($x100->properties['column'])) {$x100->properties['file'] = '<image>/01_global.js';$x100->properties['line'] = 80;$x100->properties['column'] = 2;$x100->attributes['file'] = $x100->attributes['line'] = $x100->attributes['column'] = 0; }
throw new JSException($x100, 80, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _df932a1aa7b121505041b273c0152b53_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x99=&$scope->properties[\'arguments\'];$x99->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x99->properties[$i]=$args[$i];$x99->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'encodedURIComponent\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_encodedURIComponent=&$scope->properties[\'encodedURIComponent\'];$UencodedURIComponent=FALSE;$scope->properties[\'decodeURIComponent\']=$fn;$_decodeURIComponent=&$scope->properties[\'decodeURIComponent\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x102=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NotImplementedError\',80,12,\'<image>/01_global.js\');$_NotImplementedError=&$x102[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x102;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x103=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',80,12,\'<image>/01_global.js\');$_ReferenceError=&$x103[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x103;$x104=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',80,12);$x105=$x104($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x105->class)&&$x105->class===\'Error\'&&!isset($x105->properties[\'file\'])&&!isset($x105->properties[\'line\'])&&!isset($x105->properties[\'column\'])){$x105->properties[\'file\']=\'<image>/01_global.js\';$x105->properties[\'line\']=80;$x105->properties[\'column\']=12;$x105->attributes[\'file\']=$x105->attributes[\'line\']=$x105->attributes[\'column\']=0;}throw new JSException($x105,80,12,\'<image>/01_global.js\');}$x100=clone JS::$objectTemplate;unset($x106,$W106,$S106,$U106);$x107=_df932a1aa7b121505041b273c0152b53_3($global,$scope,$_NotImplementedError,(string)\'prototype\',80,8,\'<image>/01_global.js\');$x106=&$x107[0];list(,$W106,$S106,$U106)=$x107;$x101=$x106;$x100->prototype=$x101;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x110=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'TypeError\',80,8,\'<image>/01_global.js\');$_TypeError=&$x110[0];list(,$WTypeError,$STypeError,$UTypeError)=$x110;$x111=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',80,8);$x112=$x111($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x112->class)&&$x112->class===\'Error\'&&!isset($x112->properties[\'file\'])&&!isset($x112->properties[\'line\'])&&!isset($x112->properties[\'column\'])){$x112->properties[\'file\']=\'<image>/01_global.js\';$x112->properties[\'line\']=80;$x112->properties[\'column\']=8;$x112->attributes[\'file\']=$x112->attributes[\'line\']=$x112->attributes[\'column\']=0;}throw new JSException($x112,80,8,\'<image>/01_global.js\');}$x108=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',80,8);$x109=$x108($global,$x100,$_NotImplementedError,array(\'decodeURIComponent(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x101=$x109;if(is_object($x101)&&$x101!==JS::$undefined){$x100=$x101;}if(isset($x100->class)&&$x100->class===\'Error\'&&!isset($x100->properties[\'file\'])&&!isset($x100->properties[\'line\'])&&!isset($x100->properties[\'column\'])){$x100->properties[\'file\']=\'<image>/01_global.js\';$x100->properties[\'line\']=80;$x100->properties[\'column\']=2;$x100->attributes[\'file\']=$x100->attributes[\'line\']=$x100->attributes[\'column\']=0;}throw new JSException($x100,80,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x115 =& $scope->properties['arguments'];
$x115->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x115->properties[$i] = $args[$i];
$x115->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['uri'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_uri =& $scope->properties['uri'];
$Uuri = FALSE;
$scope->properties['encodeURI'] = $fn;
$_encodeURI =& $scope->properties['encodeURI'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x118 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NotImplementedError', 84, 12, '<image>/01_global.js');
$_NotImplementedError =& $x118[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x118;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x119 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 84, 12, '<image>/01_global.js');
$_ReferenceError =& $x119[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x119;
$x120 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 84, 12);
$x121 = $x120($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x121->class) && $x121->class === 'Error' && !isset($x121->properties['file']) && !isset($x121->properties['line']) && !isset($x121->properties['column'])) {$x121->properties['file'] = '<image>/01_global.js';$x121->properties['line'] = 84;$x121->properties['column'] = 12;$x121->attributes['file'] = $x121->attributes['line'] = $x121->attributes['column'] = 0; }
throw new JSException($x121, 84, 12, '<image>/01_global.js');
}
$x116 = clone JS::$objectTemplate;
unset($x122, $W122, $S122, $U122);
$x123 = _df932a1aa7b121505041b273c0152b53_3($global, $scope, $_NotImplementedError, (string) 'prototype', 84, 8, '<image>/01_global.js');
$x122 =& $x123[0]; list(,$W122,$S122,$U122) = $x123;
$x117 = $x122;
$x116->prototype = $x117;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x126 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'TypeError', 84, 8, '<image>/01_global.js');
$_TypeError =& $x126[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x126;
$x127 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 84, 8);
$x128 = $x127($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x128->class) && $x128->class === 'Error' && !isset($x128->properties['file']) && !isset($x128->properties['line']) && !isset($x128->properties['column'])) {$x128->properties['file'] = '<image>/01_global.js';$x128->properties['line'] = 84;$x128->properties['column'] = 8;$x128->attributes['file'] = $x128->attributes['line'] = $x128->attributes['column'] = 0; }
throw new JSException($x128, 84, 8, '<image>/01_global.js');
}
$x124 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 84, 8);
$x125 = $x124($global, $x116, $_NotImplementedError, array('encodedURI(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x117 = $x125;
if (is_object($x117) && $x117 !== JS::$undefined) { $x116 = $x117; }
if (isset($x116->class) && $x116->class === 'Error' && !isset($x116->properties['file']) && !isset($x116->properties['line']) && !isset($x116->properties['column'])) {$x116->properties['file'] = '<image>/01_global.js';$x116->properties['line'] = 84;$x116->properties['column'] = 2;$x116->attributes['file'] = $x116->attributes['line'] = $x116->attributes['column'] = 0; }
throw new JSException($x116, 84, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _df932a1aa7b121505041b273c0152b53_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x115=&$scope->properties[\'arguments\'];$x115->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x115->properties[$i]=$args[$i];$x115->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'uri\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_uri=&$scope->properties[\'uri\'];$Uuri=FALSE;$scope->properties[\'encodeURI\']=$fn;$_encodeURI=&$scope->properties[\'encodeURI\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x118=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NotImplementedError\',84,12,\'<image>/01_global.js\');$_NotImplementedError=&$x118[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x118;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x119=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',84,12,\'<image>/01_global.js\');$_ReferenceError=&$x119[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x119;$x120=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',84,12);$x121=$x120($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x121->class)&&$x121->class===\'Error\'&&!isset($x121->properties[\'file\'])&&!isset($x121->properties[\'line\'])&&!isset($x121->properties[\'column\'])){$x121->properties[\'file\']=\'<image>/01_global.js\';$x121->properties[\'line\']=84;$x121->properties[\'column\']=12;$x121->attributes[\'file\']=$x121->attributes[\'line\']=$x121->attributes[\'column\']=0;}throw new JSException($x121,84,12,\'<image>/01_global.js\');}$x116=clone JS::$objectTemplate;unset($x122,$W122,$S122,$U122);$x123=_df932a1aa7b121505041b273c0152b53_3($global,$scope,$_NotImplementedError,(string)\'prototype\',84,8,\'<image>/01_global.js\');$x122=&$x123[0];list(,$W122,$S122,$U122)=$x123;$x117=$x122;$x116->prototype=$x117;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x126=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'TypeError\',84,8,\'<image>/01_global.js\');$_TypeError=&$x126[0];list(,$WTypeError,$STypeError,$UTypeError)=$x126;$x127=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',84,8);$x128=$x127($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x128->class)&&$x128->class===\'Error\'&&!isset($x128->properties[\'file\'])&&!isset($x128->properties[\'line\'])&&!isset($x128->properties[\'column\'])){$x128->properties[\'file\']=\'<image>/01_global.js\';$x128->properties[\'line\']=84;$x128->properties[\'column\']=8;$x128->attributes[\'file\']=$x128->attributes[\'line\']=$x128->attributes[\'column\']=0;}throw new JSException($x128,84,8,\'<image>/01_global.js\');}$x124=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',84,8);$x125=$x124($global,$x116,$_NotImplementedError,array(\'encodedURI(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x117=$x125;if(is_object($x117)&&$x117!==JS::$undefined){$x116=$x117;}if(isset($x116->class)&&$x116->class===\'Error\'&&!isset($x116->properties[\'file\'])&&!isset($x116->properties[\'line\'])&&!isset($x116->properties[\'column\'])){$x116->properties[\'file\']=\'<image>/01_global.js\';$x116->properties[\'line\']=84;$x116->properties[\'column\']=2;$x116->attributes[\'file\']=$x116->attributes[\'line\']=$x116->attributes[\'column\']=0;}throw new JSException($x116,84,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x131 =& $scope->properties['arguments'];
$x131->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x131->properties[$i] = $args[$i];
$x131->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['uriComponent'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_uriComponent =& $scope->properties['uriComponent'];
$UuriComponent = FALSE;
$scope->properties['encodeURIComponent'] = $fn;
$_encodeURIComponent =& $scope->properties['encodeURIComponent'];
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x134 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'NotImplementedError', 88, 12, '<image>/01_global.js');
$_NotImplementedError =& $x134[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x134;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x135 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'ReferenceError', 88, 12, '<image>/01_global.js');
$_ReferenceError =& $x135[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x135;
$x136 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 88, 12);
$x137 = $x136($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x137->class) && $x137->class === 'Error' && !isset($x137->properties['file']) && !isset($x137->properties['line']) && !isset($x137->properties['column'])) {$x137->properties['file'] = '<image>/01_global.js';$x137->properties['line'] = 88;$x137->properties['column'] = 12;$x137->attributes['file'] = $x137->attributes['line'] = $x137->attributes['column'] = 0; }
throw new JSException($x137, 88, 12, '<image>/01_global.js');
}
$x132 = clone JS::$objectTemplate;
unset($x138, $W138, $S138, $U138);
$x139 = _df932a1aa7b121505041b273c0152b53_3($global, $scope, $_NotImplementedError, (string) 'prototype', 88, 8, '<image>/01_global.js');
$x138 =& $x139[0]; list(,$W138,$S138,$U138) = $x139;
$x133 = $x138;
$x132->prototype = $x133;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x142 = _df932a1aa7b121505041b273c0152b53_2($global, $scope, $scope, (string) 'TypeError', 88, 8, '<image>/01_global.js');
$_TypeError =& $x142[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x142;
$x143 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 88, 8);
$x144 = $x143($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error' && !isset($x144->properties['file']) && !isset($x144->properties['line']) && !isset($x144->properties['column'])) {$x144->properties['file'] = '<image>/01_global.js';$x144->properties['line'] = 88;$x144->properties['column'] = 8;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 88, 8, '<image>/01_global.js');
}
$x140 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/01_global.js', 88, 8);
$x141 = $x140($global, $x132, $_NotImplementedError, array('encodeURIComponent(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x133 = $x141;
if (is_object($x133) && $x133 !== JS::$undefined) { $x132 = $x133; }
if (isset($x132->class) && $x132->class === 'Error' && !isset($x132->properties['file']) && !isset($x132->properties['line']) && !isset($x132->properties['column'])) {$x132->properties['file'] = '<image>/01_global.js';$x132->properties['line'] = 88;$x132->properties['column'] = 2;$x132->attributes['file'] = $x132->attributes['line'] = $x132->attributes['column'] = 0; }
throw new JSException($x132, 88, 2, '<image>/01_global.js');
;
return JS::$undefined;
}
echo 'function _df932a1aa7b121505041b273c0152b53_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x131=&$scope->properties[\'arguments\'];$x131->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x131->properties[$i]=$args[$i];$x131->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'uriComponent\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_uriComponent=&$scope->properties[\'uriComponent\'];$UuriComponent=FALSE;$scope->properties[\'encodeURIComponent\']=$fn;$_encodeURIComponent=&$scope->properties[\'encodeURIComponent\'];$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x134=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'NotImplementedError\',88,12,\'<image>/01_global.js\');$_NotImplementedError=&$x134[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x134;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x135=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'ReferenceError\',88,12,\'<image>/01_global.js\');$_ReferenceError=&$x135[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x135;$x136=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',88,12);$x137=$x136($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x137->class)&&$x137->class===\'Error\'&&!isset($x137->properties[\'file\'])&&!isset($x137->properties[\'line\'])&&!isset($x137->properties[\'column\'])){$x137->properties[\'file\']=\'<image>/01_global.js\';$x137->properties[\'line\']=88;$x137->properties[\'column\']=12;$x137->attributes[\'file\']=$x137->attributes[\'line\']=$x137->attributes[\'column\']=0;}throw new JSException($x137,88,12,\'<image>/01_global.js\');}$x132=clone JS::$objectTemplate;unset($x138,$W138,$S138,$U138);$x139=_df932a1aa7b121505041b273c0152b53_3($global,$scope,$_NotImplementedError,(string)\'prototype\',88,8,\'<image>/01_global.js\');$x138=&$x139[0];list(,$W138,$S138,$U138)=$x139;$x133=$x138;$x132->prototype=$x133;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x142=_df932a1aa7b121505041b273c0152b53_2($global,$scope,$scope,(string)\'TypeError\',88,8,\'<image>/01_global.js\');$_TypeError=&$x142[0];list(,$WTypeError,$STypeError,$UTypeError)=$x142;$x143=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',88,8);$x144=$x143($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x144->class)&&$x144->class===\'Error\'&&!isset($x144->properties[\'file\'])&&!isset($x144->properties[\'line\'])&&!isset($x144->properties[\'column\'])){$x144->properties[\'file\']=\'<image>/01_global.js\';$x144->properties[\'line\']=88;$x144->properties[\'column\']=8;$x144->attributes[\'file\']=$x144->attributes[\'line\']=$x144->attributes[\'column\']=0;}throw new JSException($x144,88,8,\'<image>/01_global.js\');}$x140=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/01_global.js\',88,8);$x141=$x140($global,$x132,$_NotImplementedError,array(\'encodeURIComponent(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x133=$x141;if(is_object($x133)&&$x133!==JS::$undefined){$x132=$x133;}if(isset($x132->class)&&$x132->class===\'Error\'&&!isset($x132->properties[\'file\'])&&!isset($x132->properties[\'line\'])&&!isset($x132->properties[\'column\'])){$x132->properties[\'file\']=\'<image>/01_global.js\';$x132->properties[\'line\']=88;$x132->properties[\'column\']=2;$x132->attributes[\'file\']=$x132->attributes[\'line\']=$x132->attributes[\'column\']=0;}throw new JSException($x132,88,2,\'<image>/01_global.js\');return JS::$undefined;}', "\n";
function _df932a1aa7b121505041b273c0152b53_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/01_global.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/01_global.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
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
$x32 = clone JS::$functionTemplate; $x32->call = '_df932a1aa7b121505041b273c0152b53_1'; $x32->parameters = array (
  0 => 'x',
); $x32->name = 'eval'; $x32->scope = $scope; $x32->properties['prototype'] = clone JS::$objectTemplate; $x32->attributes['prototype'] = JS::WRITABLE; $x32->properties['prototype']->properties['constructor'] = $x32; $x32->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x32->properties['length'] = 1; $x32->attributes['length'] = 0;
$scope->properties['eval'] = JS::$undefined; $_eval =& $scope->properties['eval'];
$Ueval = FALSE;
$_eval = $x32;
$x67 = clone JS::$functionTemplate; $x67->call = '_df932a1aa7b121505041b273c0152b53_4'; $x67->parameters = array (
  0 => 'string',
  1 => 'radix',
); $x67->name = 'parseInt'; $x67->scope = $scope; $x67->properties['prototype'] = clone JS::$objectTemplate; $x67->attributes['prototype'] = JS::WRITABLE; $x67->properties['prototype']->properties['constructor'] = $x67; $x67->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x67->properties['length'] = 2; $x67->attributes['length'] = 0;
$scope->properties['parseInt'] = JS::$undefined; $_parseInt =& $scope->properties['parseInt'];
$UparseInt = FALSE;
$_parseInt = $x67;
$x75 = clone JS::$functionTemplate; $x75->call = '_df932a1aa7b121505041b273c0152b53_5'; $x75->parameters = array (
  0 => 'string',
); $x75->name = 'parseFloat'; $x75->scope = $scope; $x75->properties['prototype'] = clone JS::$objectTemplate; $x75->attributes['prototype'] = JS::WRITABLE; $x75->properties['prototype']->properties['constructor'] = $x75; $x75->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x75->properties['length'] = 1; $x75->attributes['length'] = 0;
$scope->properties['parseFloat'] = JS::$undefined; $_parseFloat =& $scope->properties['parseFloat'];
$UparseFloat = FALSE;
$_parseFloat = $x75;
$x78 = clone JS::$functionTemplate; $x78->call = '_df932a1aa7b121505041b273c0152b53_6'; $x78->parameters = array (
  0 => 'number',
); $x78->name = 'isNaN'; $x78->scope = $scope; $x78->properties['prototype'] = clone JS::$objectTemplate; $x78->attributes['prototype'] = JS::WRITABLE; $x78->properties['prototype']->properties['constructor'] = $x78; $x78->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x78->properties['length'] = 1; $x78->attributes['length'] = 0;
$scope->properties['isNaN'] = JS::$undefined; $_isNaN =& $scope->properties['isNaN'];
$UisNaN = FALSE;
$_isNaN = $x78;
$x81 = clone JS::$functionTemplate; $x81->call = '_df932a1aa7b121505041b273c0152b53_7'; $x81->parameters = array (
  0 => 'number',
); $x81->name = 'isFinite'; $x81->scope = $scope; $x81->properties['prototype'] = clone JS::$objectTemplate; $x81->attributes['prototype'] = JS::WRITABLE; $x81->properties['prototype']->properties['constructor'] = $x81; $x81->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x81->properties['length'] = 1; $x81->attributes['length'] = 0;
$scope->properties['isFinite'] = JS::$undefined; $_isFinite =& $scope->properties['isFinite'];
$UisFinite = FALSE;
$_isFinite = $x81;
$x97 = clone JS::$functionTemplate; $x97->call = '_df932a1aa7b121505041b273c0152b53_8'; $x97->parameters = array (
  0 => 'encodedURI',
); $x97->name = 'decodeURI'; $x97->scope = $scope; $x97->properties['prototype'] = clone JS::$objectTemplate; $x97->attributes['prototype'] = JS::WRITABLE; $x97->properties['prototype']->properties['constructor'] = $x97; $x97->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x97->properties['length'] = 1; $x97->attributes['length'] = 0;
$scope->properties['decodeURI'] = JS::$undefined; $_decodeURI =& $scope->properties['decodeURI'];
$UdecodeURI = FALSE;
$_decodeURI = $x97;
$x113 = clone JS::$functionTemplate; $x113->call = '_df932a1aa7b121505041b273c0152b53_9'; $x113->parameters = array (
  0 => 'encodedURIComponent',
); $x113->name = 'decodeURIComponent'; $x113->scope = $scope; $x113->properties['prototype'] = clone JS::$objectTemplate; $x113->attributes['prototype'] = JS::WRITABLE; $x113->properties['prototype']->properties['constructor'] = $x113; $x113->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x113->properties['length'] = 1; $x113->attributes['length'] = 0;
$scope->properties['decodeURIComponent'] = JS::$undefined; $_decodeURIComponent =& $scope->properties['decodeURIComponent'];
$UdecodeURIComponent = FALSE;
$_decodeURIComponent = $x113;
$x129 = clone JS::$functionTemplate; $x129->call = '_df932a1aa7b121505041b273c0152b53_10'; $x129->parameters = array (
  0 => 'uri',
); $x129->name = 'encodeURI'; $x129->scope = $scope; $x129->properties['prototype'] = clone JS::$objectTemplate; $x129->attributes['prototype'] = JS::WRITABLE; $x129->properties['prototype']->properties['constructor'] = $x129; $x129->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x129->properties['length'] = 1; $x129->attributes['length'] = 0;
$scope->properties['encodeURI'] = JS::$undefined; $_encodeURI =& $scope->properties['encodeURI'];
$UencodeURI = FALSE;
$_encodeURI = $x129;
$x145 = clone JS::$functionTemplate; $x145->call = '_df932a1aa7b121505041b273c0152b53_11'; $x145->parameters = array (
  0 => 'uriComponent',
); $x145->name = 'encodeURIComponent'; $x145->scope = $scope; $x145->properties['prototype'] = clone JS::$objectTemplate; $x145->attributes['prototype'] = JS::WRITABLE; $x145->properties['prototype']->properties['constructor'] = $x145; $x145->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x145->properties['length'] = 1; $x145->attributes['length'] = 0;
$scope->properties['encodeURIComponent'] = JS::$undefined; $_encodeURIComponent =& $scope->properties['encodeURIComponent'];
$UencodeURIComponent = FALSE;
$_encodeURIComponent = $x145;
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
