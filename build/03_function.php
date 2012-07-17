function _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $base, $id, $line, $column, $file) {
$Warguments = $Sarguments = $Uarguments = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_arguments =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x3 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x4 = $x3($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_arguments = $x4; }
else { $_arguments = JS::$undefined; $Uarguments = TRUE; }
return array(&$_arguments, $Warguments, $Sarguments, $Uarguments);
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x3=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x4=$x3($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x4;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x10[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x10;
$x11 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x12 = $x11($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x12->class) && $x12->class === 'Error') {$x12->properties['file'] = $file;$x12->properties['line'] = $line;$x12->properties['column'] = $column;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
throw new JSException($x12, $line, $column, $file);
}
$W9 = $S9 = $U9 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x9 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x13 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x14 = $x13($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x9 = $x14; }
else { $x9 = JS::$undefined; $U9 = TRUE; }
return array(&$x9, $W9, $S9, $U9);
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x9=$x14;}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['Function'] = $fn;
$_Function =& $scope->properties['Function'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = clone JS::$arrayTemplate;
$x2->properties['length'] = 0;
$x2->attributes['length'] = JS::WRITABLE;
$scope->properties['args'] = JS::$undefined; $_args =& $scope->properties['args'];
$Uargs = FALSE;
$_args = $x2;
$scope->properties['body'] = JS::$undefined; $_body =& $scope->properties['body'];
$Ubody = FALSE;
$_body = '';
$scope->properties['fn'] = JS::$undefined; $_fn =& $scope->properties['fn'];
$Ufn = FALSE;
$_fn = JS::$undefined;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x5 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'arguments', 4, 6, '<image>/03_function.js');
$_arguments =& $x5[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x5;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x6 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 4, 6, '<image>/03_function.js');
$_ReferenceError =& $x6[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x6;
$x7 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 4, 6);
$x8 = $x7($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x8->class) && $x8->class === 'Error') {$x8->properties['file'] = '<image>/03_function.js';$x8->properties['line'] = 4;$x8->properties['column'] = 6;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
throw new JSException($x8, 4, 6, '<image>/03_function.js');
}
unset($x9, $W9, $S9, $U9);
$x15 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) 'length', 4, 15, '<image>/03_function.js');
$x9 =& $x15[0]; list(,$W9,$S9,$U9) = $x15;
if (JS::toBoolean($x9, $global)) {
for ($x16 = 0;; ++$x16) {
if ($x16 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
}
if ($x16 !== 0) {
$x17 = ++$_i;
}
unset($x21, $W21, $S21, $U21);
$x22 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) 'length', 5, 32, '<image>/03_function.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
$x18 = JS::toPrimitive($_i, $global);
$x19 = JS::toPrimitive((JS::toNumber($x21, $global) - JS::toNumber(1, $global)), $global);
$x20 = (is_string($x18) && is_string($x19) ? strcmp($x18, $x19) < 0 : (!is_nan($x23 = JS::toNumber($x18, $global)) && !is_nan($x24 = JS::toNumber($x19, $global)) && $x23 < $x24));
if (!JS::toBoolean($x20, $global)) { break; }

if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x26 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 6, 13, '<image>/03_function.js');
$_TypeError =& $x26[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x26;
$x27 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 6, 13);
$x28 = $x27($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x28->class) && $x28->class === 'Error') {$x28->properties['file'] = '<image>/03_function.js';$x28->properties['line'] = 6;$x28->properties['column'] = 13;$x28->attributes['file'] = $x28->attributes['line'] = $x28->attributes['column'] = 0; }
throw new JSException($x28, 6, 13, '<image>/03_function.js');
}
$x25 = JS::toObject($_args, $global);
unset($x29, $W29, $S29, $U29);
$x30 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $x25, (string) 'push', 6, 13, '<image>/03_function.js');
$x29 =& $x30[0]; list(,$W29,$S29,$U29) = $x30;
unset($x31, $W31, $S31, $U31);
$x32 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) $_i, 6, 23, '<image>/03_function.js');
$x31 =& $x32[0]; list(,$W31,$S31,$U31) = $x32;
if (!(is_object($x29) && isset($x29->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 6, 13, '<image>/03_function.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 6, 13);
$x37 = $x36($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error') {$x37->properties['file'] = '<image>/03_function.js';$x37->properties['line'] = 6;$x37->properties['column'] = 13;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 6, 13, '<image>/03_function.js');
}
$x33 = $x29->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 6, 13);
$x34 = $x33($global, $x25, $x29, array($x31), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x38, $W38, $S38, $U38);
$x39 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) 'length', 9, 29, '<image>/03_function.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
unset($x40, $W40, $S40, $U40);
$x41 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) (JS::toNumber($x38, $global) - JS::toNumber(1, $global)), 9, 19, '<image>/03_function.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
if ($Ubody) {$global->properties['body'] = $_body; $_body =& $global->properties['body']; }
$_body = $x40;;
};
if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x43 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 12, 18, '<image>/03_function.js');
$_TypeError =& $x43[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x43;
$x44 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 12, 18);
$x45 = $x44($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x45->class) && $x45->class === 'Error') {$x45->properties['file'] = '<image>/03_function.js';$x45->properties['line'] = 12;$x45->properties['column'] = 18;$x45->attributes['file'] = $x45->attributes['line'] = $x45->attributes['column'] = 0; }
throw new JSException($x45, 12, 18, '<image>/03_function.js');
}
$x42 = JS::toObject($_args, $global);
unset($x46, $W46, $S46, $U46);
$x47 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $x42, (string) 'join', 12, 18, '<image>/03_function.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
if (!(is_object($x46) && isset($x46->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x50 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 12, 18, '<image>/03_function.js');
$_TypeError =& $x50[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x50;
$x51 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 12, 18);
$x52 = $x51($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x52->class) && $x52->class === 'Error') {$x52->properties['file'] = '<image>/03_function.js';$x52->properties['line'] = 12;$x52->properties['column'] = 18;$x52->attributes['file'] = $x52->attributes['line'] = $x52->attributes['column'] = 0; }
throw new JSException($x52, 12, 18, '<image>/03_function.js');
}
$x48 = $x46->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 12, 18);
$x49 = $x48($global, $x42, $x46, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uargs) {$global->properties['args'] = $_args; $_args =& $global->properties['args']; }
$_args = $x49;
$x59 = JS::toPrimitive('return function(', $global);
$x60 = JS::toPrimitive($_args, $global);
$x57 = JS::toPrimitive((is_string($x59) || is_string($x60) ? JS::toString($x59, $global) . JS::toString($x60, $global) : JS::toNumber($x59, $global) + JS::toNumber($x60, $global)), $global);
$x58 = JS::toPrimitive('){', $global);
$x55 = JS::toPrimitive((is_string($x57) || is_string($x58) ? JS::toString($x57, $global) . JS::toString($x58, $global) : JS::toNumber($x57, $global) + JS::toNumber($x58, $global)), $global);
$x56 = JS::toPrimitive($_body, $global);
$x53 = JS::toPrimitive((is_string($x55) || is_string($x56) ? JS::toString($x55, $global) . JS::toString($x56, $global) : JS::toNumber($x55, $global) + JS::toNumber($x56, $global)), $global);
$x54 = JS::toPrimitive('};', $global);
if ($Ufn) {$global->properties['fn'] = $_fn; $_fn =& $global->properties['fn']; }
$_fn = (is_string($x53) || is_string($x54) ? JS::toString($x53, $global) . JS::toString($x54, $global) : JS::toNumber($x53, $global) + JS::toNumber($x54, $global));
$parser = new JSParser;

		list($ok, $ast, $error) = $parser->__invoke(JS::toString($_fn, $global), array('file' => '<Function>'));

		if (!$ok) {;
unset($_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
$x63 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'SyntaxError', 21, 14, '<image>/03_function.js');
$_SyntaxError =& $x63[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x63;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x64 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 21, 14, '<image>/03_function.js');
$_ReferenceError =& $x64[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x64;
$x65 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 14);
$x66 = $x65($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x66->class) && $x66->class === 'Error') {$x66->properties['file'] = '<image>/03_function.js';$x66->properties['line'] = 21;$x66->properties['column'] = 14;$x66->attributes['file'] = $x66->attributes['line'] = $x66->attributes['column'] = 0; }
throw new JSException($x66, 21, 14, '<image>/03_function.js');
}
$x75 = JS::toPrimitive('Function(): syntax error at ', $global);
$x76 = JS::toPrimitive($error->line, $global);
$x73 = JS::toPrimitive((is_string($x75) || is_string($x76) ? JS::toString($x75, $global) . JS::toString($x76, $global) : JS::toNumber($x75, $global) + JS::toNumber($x76, $global)), $global);
$x74 = JS::toPrimitive(':', $global);
$x71 = JS::toPrimitive((is_string($x73) || is_string($x74) ? JS::toString($x73, $global) . JS::toString($x74, $global) : JS::toNumber($x73, $global) + JS::toNumber($x74, $global)), $global);
$x72 = JS::toPrimitive($error->column, $global);
$x69 = JS::toPrimitive((is_string($x71) || is_string($x72) ? JS::toString($x71, $global) . JS::toString($x72, $global) : JS::toNumber($x71, $global) + JS::toNumber($x72, $global)), $global);
$x70 = JS::toPrimitive(', expected ', $global);
$x67 = JS::toPrimitive((is_string($x69) || is_string($x70) ? JS::toString($x69, $global) . JS::toString($x70, $global) : JS::toNumber($x69, $global) + JS::toNumber($x70, $global)), $global);
$x68 = JS::toPrimitive(implode(', ', $error->expected), $global);
$x61 = clone JS::$objectTemplate;
unset($x77, $W77, $S77, $U77);
$x78 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_SyntaxError, (string) 'prototype', 21, 10, '<image>/03_function.js');
$x77 =& $x78[0]; list(,$W77,$S77,$U77) = $x78;
$x62 = $x77;
$x61->prototype = $x62;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x81 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 21, 10, '<image>/03_function.js');
$_TypeError =& $x81[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x81;
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 10);
$x83 = $x82($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error') {$x83->properties['file'] = '<image>/03_function.js';$x83->properties['line'] = 21;$x83->properties['column'] = 10;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, 21, 10, '<image>/03_function.js');
}
$x79 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 10);
$x80 = $x79($global, $x61, $_SyntaxError, array((is_string($x67) || is_string($x68) ? JS::toString($x67, $global) . JS::toString($x68, $global) : JS::toNumber($x67, $global) + JS::toNumber($x68, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x62 = $x80;
if (is_object($x62) && $x62 !== JS::$undefined) { $x61 = $x62; }
if (isset($x61->class) && $x61->class === 'Error') {$x61->properties['file'] = '<image>/03_function.js';$x61->properties['line'] = 21;$x61->properties['column'] = 4;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 21, 4, '<image>/03_function.js');
}

		$compiler = new JSCompiler;
		$code = $compiler->__invoke($ast);

		$entryPoint = eval($code);
		$fn = $entryPoint();

		$fn->scope = $global->scope[$global->scope_sp - 1];

		return $fn;
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Function\']=$fn;$_Function=&$scope->properties[\'Function\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$arrayTemplate;$x2->properties[\'length\']=0;$x2->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'args\']=JS::$undefined;$_args=&$scope->properties[\'args\'];$Uargs=FALSE;$_args=$x2;$scope->properties[\'body\']=JS::$undefined;$_body=&$scope->properties[\'body\'];$Ubody=FALSE;$_body=\'\';$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x5=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'arguments\',4,6,\'<image>/03_function.js\');$_arguments=&$x5[0];list(,$Warguments,$Sarguments,$Uarguments)=$x5;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x6=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',4,6,\'<image>/03_function.js\');$_ReferenceError=&$x6[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x6;$x7=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',4,6);$x8=$x7($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'){$x8->properties[\'file\']=\'<image>/03_function.js\';$x8->properties[\'line\']=4;$x8->properties[\'column\']=6;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,4,6,\'<image>/03_function.js\');}unset($x9,$W9,$S9,$U9);$x15=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)\'length\',4,15,\'<image>/03_function.js\');$x9=&$x15[0];list(,$W9,$S9,$U9)=$x15;if(JS::toBoolean($x9,$global)){for($x16=0;;++$x16){if($x16===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x16!==0){$x17=++$_i;}unset($x21,$W21,$S21,$U21);$x22=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)\'length\',5,32,\'<image>/03_function.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;$x18=JS::toPrimitive($_i,$global);$x19=JS::toPrimitive((JS::toNumber($x21,$global)-JS::toNumber(1,$global)),$global);$x20=(is_string($x18)&&is_string($x19)?strcmp($x18,$x19)<0:(!is_nan($x23=JS::toNumber($x18,$global))&&!is_nan($x24=JS::toNumber($x19,$global))&&$x23<$x24));if(!JS::toBoolean($x20,$global)){break;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x26=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',6,13,\'<image>/03_function.js\');$_TypeError=&$x26[0];list(,$WTypeError,$STypeError,$UTypeError)=$x26;$x27=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x28=$x27($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x28->class)&&$x28->class===\'Error\'){$x28->properties[\'file\']=\'<image>/03_function.js\';$x28->properties[\'line\']=6;$x28->properties[\'column\']=13;$x28->attributes[\'file\']=$x28->attributes[\'line\']=$x28->attributes[\'column\']=0;}throw new JSException($x28,6,13,\'<image>/03_function.js\');}$x25=JS::toObject($_args,$global);unset($x29,$W29,$S29,$U29);$x30=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$x25,(string)\'push\',6,13,\'<image>/03_function.js\');$x29=&$x30[0];list(,$W29,$S29,$U29)=$x30;unset($x31,$W31,$S31,$U31);$x32=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)$_i,6,23,\'<image>/03_function.js\');$x31=&$x32[0];list(,$W31,$S31,$U31)=$x32;if(!(is_object($x29)&&isset($x29->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',6,13,\'<image>/03_function.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x37=$x36($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'){$x37->properties[\'file\']=\'<image>/03_function.js\';$x37->properties[\'line\']=6;$x37->properties[\'column\']=13;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,6,13,\'<image>/03_function.js\');}$x33=$x29->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x34=$x33($global,$x25,$x29,array($x31),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x38,$W38,$S38,$U38);$x39=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)\'length\',9,29,\'<image>/03_function.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;unset($x40,$W40,$S40,$U40);$x41=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)(JS::toNumber($x38,$global)-JS::toNumber(1,$global)),9,19,\'<image>/03_function.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;if($Ubody){$global->properties[\'body\']=$_body;$_body=&$global->properties[\'body\'];}$_body=$x40;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x43=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',12,18,\'<image>/03_function.js\');$_TypeError=&$x43[0];list(,$WTypeError,$STypeError,$UTypeError)=$x43;$x44=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x45=$x44($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x45->class)&&$x45->class===\'Error\'){$x45->properties[\'file\']=\'<image>/03_function.js\';$x45->properties[\'line\']=12;$x45->properties[\'column\']=18;$x45->attributes[\'file\']=$x45->attributes[\'line\']=$x45->attributes[\'column\']=0;}throw new JSException($x45,12,18,\'<image>/03_function.js\');}$x42=JS::toObject($_args,$global);unset($x46,$W46,$S46,$U46);$x47=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$x42,(string)\'join\',12,18,\'<image>/03_function.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;if(!(is_object($x46)&&isset($x46->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x50=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',12,18,\'<image>/03_function.js\');$_TypeError=&$x50[0];list(,$WTypeError,$STypeError,$UTypeError)=$x50;$x51=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x52=$x51($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x52->class)&&$x52->class===\'Error\'){$x52->properties[\'file\']=\'<image>/03_function.js\';$x52->properties[\'line\']=12;$x52->properties[\'column\']=18;$x52->attributes[\'file\']=$x52->attributes[\'line\']=$x52->attributes[\'column\']=0;}throw new JSException($x52,12,18,\'<image>/03_function.js\');}$x48=$x46->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x49=$x48($global,$x42,$x46,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uargs){$global->properties[\'args\']=$_args;$_args=&$global->properties[\'args\'];}$_args=$x49;$x59=JS::toPrimitive(\'return function(\',$global);$x60=JS::toPrimitive($_args,$global);$x57=JS::toPrimitive((is_string($x59)||is_string($x60)?JS::toString($x59,$global).JS::toString($x60,$global):JS::toNumber($x59,$global)+JS::toNumber($x60,$global)),$global);$x58=JS::toPrimitive(\'){\',$global);$x55=JS::toPrimitive((is_string($x57)||is_string($x58)?JS::toString($x57,$global).JS::toString($x58,$global):JS::toNumber($x57,$global)+JS::toNumber($x58,$global)),$global);$x56=JS::toPrimitive($_body,$global);$x53=JS::toPrimitive((is_string($x55)||is_string($x56)?JS::toString($x55,$global).JS::toString($x56,$global):JS::toNumber($x55,$global)+JS::toNumber($x56,$global)),$global);$x54=JS::toPrimitive(\'};\',$global);if($Ufn){$global->properties[\'fn\']=$_fn;$_fn=&$global->properties[\'fn\'];}$_fn=(is_string($x53)||is_string($x54)?JS::toString($x53,$global).JS::toString($x54,$global):JS::toNumber($x53,$global)+JS::toNumber($x54,$global));$parser=new JSParser;list($ok,$ast,$error)=$parser->__invoke(JS::toString($_fn,$global),array(\'file\'=>\'<Function>\'));if(!$ok){;unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x63=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'SyntaxError\',21,14,\'<image>/03_function.js\');$_SyntaxError=&$x63[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x63;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x64=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',21,14,\'<image>/03_function.js\');$_ReferenceError=&$x64[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x64;$x65=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,14);$x66=$x65($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x66->class)&&$x66->class===\'Error\'){$x66->properties[\'file\']=\'<image>/03_function.js\';$x66->properties[\'line\']=21;$x66->properties[\'column\']=14;$x66->attributes[\'file\']=$x66->attributes[\'line\']=$x66->attributes[\'column\']=0;}throw new JSException($x66,21,14,\'<image>/03_function.js\');}$x75=JS::toPrimitive(\'Function(): syntax error at \',$global);$x76=JS::toPrimitive($error->line,$global);$x73=JS::toPrimitive((is_string($x75)||is_string($x76)?JS::toString($x75,$global).JS::toString($x76,$global):JS::toNumber($x75,$global)+JS::toNumber($x76,$global)),$global);$x74=JS::toPrimitive(\':\',$global);$x71=JS::toPrimitive((is_string($x73)||is_string($x74)?JS::toString($x73,$global).JS::toString($x74,$global):JS::toNumber($x73,$global)+JS::toNumber($x74,$global)),$global);$x72=JS::toPrimitive($error->column,$global);$x69=JS::toPrimitive((is_string($x71)||is_string($x72)?JS::toString($x71,$global).JS::toString($x72,$global):JS::toNumber($x71,$global)+JS::toNumber($x72,$global)),$global);$x70=JS::toPrimitive(\', expected \',$global);$x67=JS::toPrimitive((is_string($x69)||is_string($x70)?JS::toString($x69,$global).JS::toString($x70,$global):JS::toNumber($x69,$global)+JS::toNumber($x70,$global)),$global);$x68=JS::toPrimitive(implode(\', \',$error->expected),$global);$x61=clone JS::$objectTemplate;unset($x77,$W77,$S77,$U77);$x78=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_SyntaxError,(string)\'prototype\',21,10,\'<image>/03_function.js\');$x77=&$x78[0];list(,$W77,$S77,$U77)=$x78;$x62=$x77;$x61->prototype=$x62;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x81=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',21,10,\'<image>/03_function.js\');$_TypeError=&$x81[0];list(,$WTypeError,$STypeError,$UTypeError)=$x81;$x82=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x83=$x82($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x83->class)&&$x83->class===\'Error\'){$x83->properties[\'file\']=\'<image>/03_function.js\';$x83->properties[\'line\']=21;$x83->properties[\'column\']=10;$x83->attributes[\'file\']=$x83->attributes[\'line\']=$x83->attributes[\'column\']=0;}throw new JSException($x83,21,10,\'<image>/03_function.js\');}$x79=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x80=$x79($global,$x61,$_SyntaxError,array((is_string($x67)||is_string($x68)?JS::toString($x67,$global).JS::toString($x68,$global):JS::toNumber($x67,$global)+JS::toNumber($x68,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x62=$x80;if(is_object($x62)&&$x62!==JS::$undefined){$x61=$x62;}if(isset($x61->class)&&$x61->class===\'Error\'){$x61->properties[\'file\']=\'<image>/03_function.js\';$x61->properties[\'line\']=21;$x61->properties[\'column\']=4;$x61->attributes[\'file\']=$x61->attributes[\'line\']=$x61->attributes[\'column\']=0;}throw new JSException($x61,21,4,\'<image>/03_function.js\');}$compiler=new JSCompiler;$code=$compiler->__invoke($ast);$entryPoint=eval($code);$fn=$entryPoint();$fn->scope=$global->scope[$global->scope_sp-1];return$fn;return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x86 =& $scope->properties['arguments'];
$x86->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x86->properties[$i] = $args[$i];
$x86->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['F'] = $fn;
$_F =& $scope->properties['F'];
$global->scope[++$global->scope_sp] = $scope;
return JS::$undefined;
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x86=&$scope->properties[\'arguments\'];$x86->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x86->properties[$i]=$args[$i];$x86->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'F\']=$fn;$_F=&$scope->properties[\'F\'];$global->scope[++$global->scope_sp]=$scope;return JS::$undefined;return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x92 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x92[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x92;
$x93 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x94 = $x93($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x94->class) && $x94->class === 'Error') {$x94->properties['file'] = $file;$x94->properties['line'] = $line;$x94->properties['column'] = $column;$x94->attributes['file'] = $x94->attributes['line'] = $x94->attributes['column'] = 0; }
throw new JSException($x94, $line, $column, $file);
}
$W91 = $S91 = $U91 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x91 =& $lookup->properties[$id]; $W91 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S91 = $lookup->setters[$id]; }
else { $x91 = JS::$undefined; $U91 = TRUE; }
return array(&$x91, $W91, $S91, $U91);
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x92=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x92[0];list(,$WTypeError,$STypeError,$UTypeError)=$x92;$x93=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x94=$x93($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x94->class)&&$x94->class===\'Error\'){$x94->properties[\'file\']=$file;$x94->properties[\'line\']=$line;$x94->properties[\'column\']=$column;$x94->attributes[\'file\']=$x94->attributes[\'line\']=$x94->attributes[\'column\']=0;}throw new JSException($x94,$line,$column,$file);}$W91=$S91=$U91=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x91=&$lookup->properties[$id];$W91=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S91=$lookup->setters[$id];}else{$x91=JS::$undefined;$U91=TRUE;}return array(&$x91,$W91,$S91,$U91);}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x118 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'NotImplementedError', 55, 12, '<image>/03_function.js');
$_NotImplementedError =& $x118[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x118;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x119 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 55, 12, '<image>/03_function.js');
$_ReferenceError =& $x119[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x119;
$x120 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 12);
$x121 = $x120($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x121->class) && $x121->class === 'Error') {$x121->properties['file'] = '<image>/03_function.js';$x121->properties['line'] = 55;$x121->properties['column'] = 12;$x121->attributes['file'] = $x121->attributes['line'] = $x121->attributes['column'] = 0; }
throw new JSException($x121, 55, 12, '<image>/03_function.js');
}
$x116 = clone JS::$objectTemplate;
unset($x122, $W122, $S122, $U122);
$x123 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_NotImplementedError, (string) 'prototype', 55, 8, '<image>/03_function.js');
$x122 =& $x123[0]; list(,$W122,$S122,$U122) = $x123;
$x117 = $x122;
$x116->prototype = $x117;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x126 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 55, 8, '<image>/03_function.js');
$_TypeError =& $x126[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x126;
$x127 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 8);
$x128 = $x127($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x128->class) && $x128->class === 'Error') {$x128->properties['file'] = '<image>/03_function.js';$x128->properties['line'] = 55;$x128->properties['column'] = 8;$x128->attributes['file'] = $x128->attributes['line'] = $x128->attributes['column'] = 0; }
throw new JSException($x128, 55, 8, '<image>/03_function.js');
}
$x124 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 8);
$x125 = $x124($global, $x116, $_NotImplementedError, array('Function.prototype.toString(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x117 = $x125;
if (is_object($x117) && $x117 !== JS::$undefined) { $x116 = $x117; }
if (isset($x116->class) && $x116->class === 'Error') {$x116->properties['file'] = '<image>/03_function.js';$x116->properties['line'] = 55;$x116->properties['column'] = 2;$x116->attributes['file'] = $x116->attributes['line'] = $x116->attributes['column'] = 0; }
throw new JSException($x116, 55, 2, '<image>/03_function.js');
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x115=&$scope->properties[\'arguments\'];$x115->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x115->properties[$i]=$args[$i];$x115->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x118=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'NotImplementedError\',55,12,\'<image>/03_function.js\');$_NotImplementedError=&$x118[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x118;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x119=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',55,12,\'<image>/03_function.js\');$_ReferenceError=&$x119[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x119;$x120=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,12);$x121=$x120($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x121->class)&&$x121->class===\'Error\'){$x121->properties[\'file\']=\'<image>/03_function.js\';$x121->properties[\'line\']=55;$x121->properties[\'column\']=12;$x121->attributes[\'file\']=$x121->attributes[\'line\']=$x121->attributes[\'column\']=0;}throw new JSException($x121,55,12,\'<image>/03_function.js\');}$x116=clone JS::$objectTemplate;unset($x122,$W122,$S122,$U122);$x123=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_NotImplementedError,(string)\'prototype\',55,8,\'<image>/03_function.js\');$x122=&$x123[0];list(,$W122,$S122,$U122)=$x123;$x117=$x122;$x116->prototype=$x117;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x126=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',55,8,\'<image>/03_function.js\');$_TypeError=&$x126[0];list(,$WTypeError,$STypeError,$UTypeError)=$x126;$x127=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,8);$x128=$x127($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x128->class)&&$x128->class===\'Error\'){$x128->properties[\'file\']=\'<image>/03_function.js\';$x128->properties[\'line\']=55;$x128->properties[\'column\']=8;$x128->attributes[\'file\']=$x128->attributes[\'line\']=$x128->attributes[\'column\']=0;}throw new JSException($x128,55,8,\'<image>/03_function.js\');}$x124=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,8);$x125=$x124($global,$x116,$_NotImplementedError,array(\'Function.prototype.toString(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x117=$x125;if(is_object($x117)&&$x117!==JS::$undefined){$x116=$x117;}if(isset($x116->class)&&$x116->class===\'Error\'){$x116->properties[\'file\']=\'<image>/03_function.js\';$x116->properties[\'line\']=55;$x116->properties[\'column\']=2;$x116->attributes[\'file\']=$x116->attributes[\'line\']=$x116->attributes[\'column\']=0;}throw new JSException($x116,55,2,\'<image>/03_function.js\');return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x141 =& $scope->properties['arguments'];
$x141->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x141->properties[$i] = $args[$i];
$x141->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['thisArg'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$scope->properties['argArray'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_argArray =& $scope->properties['argArray'];
$UargArray = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['fn'] = JS::$undefined; $_fn =& $scope->properties['fn'];
$Ufn = FALSE;
$_fn = $leThis;
$scope->properties['call'] = JS::$undefined; $_call =& $scope->properties['call'];
$Ucall = FALSE;
$_call = $_fn->call;
$x142 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x142, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x145 = $_thisArg;
$x145 = ($x145 === JS::$undefined ? 'undefined' : (is_int($x145) || is_float($x145) ? 'number' : (is_bool($x145) ? 'boolean' : (is_string($x145) ? 'string' : (is_object($x145) && isset($x145->call) ? 'function' : 'object')))));
$x144 = !(((gettype($x145) === gettype('object') && $x145 === 'object'))|| (((is_float($x145) || is_int($x145)) && (is_float('object') || is_int('object'))) && $x145 == 'object'));
$x143 = $x144;
if (JS::toBoolean($x143, $global)) {
$x147 = $_thisArg;
$x147 = ($x147 === JS::$undefined ? 'undefined' : (is_int($x147) || is_float($x147) ? 'number' : (is_bool($x147) ? 'boolean' : (is_string($x147) ? 'string' : (is_object($x147) && isset($x147->call) ? 'function' : 'object')))));
$x146 = !(((gettype($x147) === gettype('function') && $x147 === 'function'))|| (((is_float($x147) || is_int($x147)) && (is_float('function') || is_int('function'))) && $x147 == 'function'));
$x143 = $x146; }
if (JS::toBoolean($x143, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = JS::toObject($_thisArg, $global);;
};
};
$x148 = $_argArray;
if (!JS::toBoolean($x148, $global)) {
$x149 = clone JS::$arrayTemplate;
$x149->properties['length'] = 0;
$x149->attributes['length'] = JS::WRITABLE;
$x148 = $x149; }
if ($UargArray) {$global->properties['argArray'] = $_argArray; $_argArray =& $global->properties['argArray']; }
$_argArray = $x148;
$passArgs = array();
for ($x150 = 0;; ++$x150) {
if ($x150 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x151, $W151, $S151, $U151);
$x152 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_argArray, (string) 'length', 70, 30, '<image>/03_function.js');
$x151 =& $x152[0]; list(,$W151,$S151,$U151) = $x152;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x151;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x150 !== 0) {
$x153 = ++$_i;
}
$x154 = JS::toPrimitive($_i, $global);
$x155 = JS::toPrimitive($_l, $global);
$x156 = (is_string($x154) && is_string($x155) ? strcmp($x154, $x155) < 0 : (!is_nan($x157 = JS::toNumber($x154, $global)) && !is_nan($x158 = JS::toNumber($x155, $global)) && $x157 < $x158));
if (!JS::toBoolean($x156, $global)) { break; }

unset($x159, $W159, $S159, $U159);
$x160 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_argArray, (string) $_i, 71, 17, '<image>/03_function.js');
$x159 =& $x160[0]; list(,$W159,$S159,$U159) = $x160;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x159;
$passArgs[] =$_arg;;
};
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x141=&$scope->properties[\'arguments\'];$x141->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x141->properties[$i]=$args[$i];$x141->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$scope->properties[\'argArray\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_argArray=&$scope->properties[\'argArray\'];$UargArray=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x142=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x142,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x145=$_thisArg;$x145=($x145===JS::$undefined?\'undefined\':(is_int($x145)||is_float($x145)?\'number\':(is_bool($x145)?\'boolean\':(is_string($x145)?\'string\':(is_object($x145)&&isset($x145->call)?\'function\':\'object\')))));$x144=!(((gettype($x145)===gettype(\'object\')&&$x145===\'object\'))||(((is_float($x145)||is_int($x145))&&(is_float(\'object\')||is_int(\'object\')))&&$x145==\'object\'));$x143=$x144;if(JS::toBoolean($x143,$global)){$x147=$_thisArg;$x147=($x147===JS::$undefined?\'undefined\':(is_int($x147)||is_float($x147)?\'number\':(is_bool($x147)?\'boolean\':(is_string($x147)?\'string\':(is_object($x147)&&isset($x147->call)?\'function\':\'object\')))));$x146=!(((gettype($x147)===gettype(\'function\')&&$x147===\'function\'))||(((is_float($x147)||is_int($x147))&&(is_float(\'function\')||is_int(\'function\')))&&$x147==\'function\'));$x143=$x146;}if(JS::toBoolean($x143,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=JS::toObject($_thisArg,$global);}}$x148=$_argArray;if(!JS::toBoolean($x148,$global)){$x149=clone JS::$arrayTemplate;$x149->properties[\'length\']=0;$x149->attributes[\'length\']=JS::WRITABLE;$x148=$x149;}if($UargArray){$global->properties[\'argArray\']=$_argArray;$_argArray=&$global->properties[\'argArray\'];}$_argArray=$x148;$passArgs=array();for($x150=0;;++$x150){if($x150===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x151,$W151,$S151,$U151);$x152=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_argArray,(string)\'length\',70,30,\'<image>/03_function.js\');$x151=&$x152[0];list(,$W151,$S151,$U151)=$x152;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x151;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x150!==0){$x153=++$_i;}$x154=JS::toPrimitive($_i,$global);$x155=JS::toPrimitive($_l,$global);$x156=(is_string($x154)&&is_string($x155)?strcmp($x154,$x155)<0:(!is_nan($x157=JS::toNumber($x154,$global))&&!is_nan($x158=JS::toNumber($x155,$global))&&$x157<$x158));if(!JS::toBoolean($x156,$global)){break;}unset($x159,$W159,$S159,$U159);$x160=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_argArray,(string)$_i,71,17,\'<image>/03_function.js\');$x159=&$x160[0];list(,$W159,$S159,$U159)=$x160;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x159;$passArgs[]=$_arg;}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['thisArg'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['fn'] = JS::$undefined; $_fn =& $scope->properties['fn'];
$Ufn = FALSE;
$_fn = $leThis;
$scope->properties['call'] = JS::$undefined; $_call =& $scope->properties['call'];
$Ucall = FALSE;
$_call = $_fn->call;
$x174 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x174, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x177 = $_thisArg;
$x177 = ($x177 === JS::$undefined ? 'undefined' : (is_int($x177) || is_float($x177) ? 'number' : (is_bool($x177) ? 'boolean' : (is_string($x177) ? 'string' : (is_object($x177) && isset($x177->call) ? 'function' : 'object')))));
$x176 = !(((gettype($x177) === gettype('object') && $x177 === 'object'))|| (((is_float($x177) || is_int($x177)) && (is_float('object') || is_int('object'))) && $x177 == 'object'));
$x175 = $x176;
if (JS::toBoolean($x175, $global)) {
$x179 = $_thisArg;
$x179 = ($x179 === JS::$undefined ? 'undefined' : (is_int($x179) || is_float($x179) ? 'number' : (is_bool($x179) ? 'boolean' : (is_string($x179) ? 'string' : (is_object($x179) && isset($x179->call) ? 'function' : 'object')))));
$x178 = !(((gettype($x179) === gettype('function') && $x179 === 'function'))|| (((is_float($x179) || is_int($x179)) && (is_float('function') || is_int('function'))) && $x179 == 'function'));
$x175 = $x178; }
if (JS::toBoolean($x175, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = JS::toObject($_thisArg, $global);;
};
};
$passArgs = array();
for ($x180 = 0;; ++$x180) {
if ($x180 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x181 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'arguments', 89, 22, '<image>/03_function.js');
$_arguments =& $x181[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x181;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x182 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 89, 22, '<image>/03_function.js');
$_ReferenceError =& $x182[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x182;
$x183 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 89, 22);
$x184 = $x183($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x184->class) && $x184->class === 'Error') {$x184->properties['file'] = '<image>/03_function.js';$x184->properties['line'] = 89;$x184->properties['column'] = 22;$x184->attributes['file'] = $x184->attributes['line'] = $x184->attributes['column'] = 0; }
throw new JSException($x184, 89, 22, '<image>/03_function.js');
}
unset($x185, $W185, $S185, $U185);
$x186 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) 'length', 89, 31, '<image>/03_function.js');
$x185 =& $x186[0]; list(,$W185,$S185,$U185) = $x186;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x185;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x180 !== 0) {
$x187 = ++$_i;
}
$x188 = JS::toPrimitive($_i, $global);
$x189 = JS::toPrimitive($_l, $global);
$x190 = (is_string($x188) && is_string($x189) ? strcmp($x188, $x189) < 0 : (!is_nan($x191 = JS::toNumber($x188, $global)) && !is_nan($x192 = JS::toNumber($x189, $global)) && $x191 < $x192));
if (!JS::toBoolean($x190, $global)) { break; }

unset($x193, $W193, $S193, $U193);
$x194 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) $_i, 90, 18, '<image>/03_function.js');
$x193 =& $x194[0]; list(,$W193,$S193,$U193) = $x194;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x193;
$passArgs[] =$_arg;;
};
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x173=&$scope->properties[\'arguments\'];$x173->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x173->properties[$i]=$args[$i];$x173->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x174=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x174,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x177=$_thisArg;$x177=($x177===JS::$undefined?\'undefined\':(is_int($x177)||is_float($x177)?\'number\':(is_bool($x177)?\'boolean\':(is_string($x177)?\'string\':(is_object($x177)&&isset($x177->call)?\'function\':\'object\')))));$x176=!(((gettype($x177)===gettype(\'object\')&&$x177===\'object\'))||(((is_float($x177)||is_int($x177))&&(is_float(\'object\')||is_int(\'object\')))&&$x177==\'object\'));$x175=$x176;if(JS::toBoolean($x175,$global)){$x179=$_thisArg;$x179=($x179===JS::$undefined?\'undefined\':(is_int($x179)||is_float($x179)?\'number\':(is_bool($x179)?\'boolean\':(is_string($x179)?\'string\':(is_object($x179)&&isset($x179->call)?\'function\':\'object\')))));$x178=!(((gettype($x179)===gettype(\'function\')&&$x179===\'function\'))||(((is_float($x179)||is_int($x179))&&(is_float(\'function\')||is_int(\'function\')))&&$x179==\'function\'));$x175=$x178;}if(JS::toBoolean($x175,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=JS::toObject($_thisArg,$global);}}$passArgs=array();for($x180=0;;++$x180){if($x180===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x181=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'arguments\',89,22,\'<image>/03_function.js\');$_arguments=&$x181[0];list(,$Warguments,$Sarguments,$Uarguments)=$x181;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x182=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',89,22,\'<image>/03_function.js\');$_ReferenceError=&$x182[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x182;$x183=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',89,22);$x184=$x183($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x184->class)&&$x184->class===\'Error\'){$x184->properties[\'file\']=\'<image>/03_function.js\';$x184->properties[\'line\']=89;$x184->properties[\'column\']=22;$x184->attributes[\'file\']=$x184->attributes[\'line\']=$x184->attributes[\'column\']=0;}throw new JSException($x184,89,22,\'<image>/03_function.js\');}unset($x185,$W185,$S185,$U185);$x186=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)\'length\',89,31,\'<image>/03_function.js\');$x185=&$x186[0];list(,$W185,$S185,$U185)=$x186;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x185;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x180!==0){$x187=++$_i;}$x188=JS::toPrimitive($_i,$global);$x189=JS::toPrimitive($_l,$global);$x190=(is_string($x188)&&is_string($x189)?strcmp($x188,$x189)<0:(!is_nan($x191=JS::toNumber($x188,$global))&&!is_nan($x192=JS::toNumber($x189,$global))&&$x191<$x192));if(!JS::toBoolean($x190,$global)){break;}unset($x193,$W193,$S193,$U193);$x194=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)$_i,90,18,\'<image>/03_function.js\');$x193=&$x194[0];list(,$W193,$S193,$U193)=$x194;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x193;$passArgs[]=$_arg;}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x207 =& $scope->properties['arguments'];
$x207->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x207->properties[$i] = $args[$i];
$x207->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['thisArg'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_thisArg =& $scope->properties['thisArg'];
$UthisArg = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['newFn'] = JS::$undefined; $_newFn =& $scope->properties['newFn'];
$UnewFn = FALSE;
$_newFn = clone $leThis;
$_newFn->boundThis =$_thisArg;
$boundArgs = isset($_newFn->boundArgs) ?$_newFn->boundArgs : array();
for ($x208 = 0;; ++$x208) {
if ($x208 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x209 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'arguments', 103, 22, '<image>/03_function.js');
$_arguments =& $x209[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x209;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x210 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 103, 22, '<image>/03_function.js');
$_ReferenceError =& $x210[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x210;
$x211 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 103, 22);
$x212 = $x211($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x212->class) && $x212->class === 'Error') {$x212->properties['file'] = '<image>/03_function.js';$x212->properties['line'] = 103;$x212->properties['column'] = 22;$x212->attributes['file'] = $x212->attributes['line'] = $x212->attributes['column'] = 0; }
throw new JSException($x212, 103, 22, '<image>/03_function.js');
}
unset($x213, $W213, $S213, $U213);
$x214 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) 'length', 103, 31, '<image>/03_function.js');
$x213 =& $x214[0]; list(,$W213,$S213,$U213) = $x214;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x213;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x208 !== 0) {
$x215 = ++$_i;
}
$x216 = JS::toPrimitive($_i, $global);
$x217 = JS::toPrimitive($_l, $global);
$x218 = (is_string($x216) && is_string($x217) ? strcmp($x216, $x217) < 0 : (!is_nan($x219 = JS::toNumber($x216, $global)) && !is_nan($x220 = JS::toNumber($x217, $global)) && $x219 < $x220));
if (!JS::toBoolean($x218, $global)) { break; }

unset($x221, $W221, $S221, $U221);
$x222 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) $_i, 104, 18, '<image>/03_function.js');
$x221 =& $x222[0]; list(,$W221,$S221,$U221) = $x222;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x221;
$boundArgs[] =$_arg;
unset($x223, $W223, $S223, $U223);
$x224 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_newFn, (string) 'length', 106, 10, '<image>/03_function.js');
$x223 =& $x224[0]; list(,$W223,$S223,$U223) = $x224;
$x225 = --$x223;;
};
$_newFn->boundArgs = $boundArgs;
return $_newFn;
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x207=&$scope->properties[\'arguments\'];$x207->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x207->properties[$i]=$args[$i];$x207->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'newFn\']=JS::$undefined;$_newFn=&$scope->properties[\'newFn\'];$UnewFn=FALSE;$_newFn=clone$leThis;$_newFn->boundThis=$_thisArg;$boundArgs=isset($_newFn->boundArgs)?$_newFn->boundArgs:array();for($x208=0;;++$x208){if($x208===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x209=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'arguments\',103,22,\'<image>/03_function.js\');$_arguments=&$x209[0];list(,$Warguments,$Sarguments,$Uarguments)=$x209;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x210=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',103,22,\'<image>/03_function.js\');$_ReferenceError=&$x210[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x210;$x211=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',103,22);$x212=$x211($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x212->class)&&$x212->class===\'Error\'){$x212->properties[\'file\']=\'<image>/03_function.js\';$x212->properties[\'line\']=103;$x212->properties[\'column\']=22;$x212->attributes[\'file\']=$x212->attributes[\'line\']=$x212->attributes[\'column\']=0;}throw new JSException($x212,103,22,\'<image>/03_function.js\');}unset($x213,$W213,$S213,$U213);$x214=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)\'length\',103,31,\'<image>/03_function.js\');$x213=&$x214[0];list(,$W213,$S213,$U213)=$x214;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x213;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x208!==0){$x215=++$_i;}$x216=JS::toPrimitive($_i,$global);$x217=JS::toPrimitive($_l,$global);$x218=(is_string($x216)&&is_string($x217)?strcmp($x216,$x217)<0:(!is_nan($x219=JS::toNumber($x216,$global))&&!is_nan($x220=JS::toNumber($x217,$global))&&$x219<$x220));if(!JS::toBoolean($x218,$global)){break;}unset($x221,$W221,$S221,$U221);$x222=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)$_i,104,18,\'<image>/03_function.js\');$x221=&$x222[0];list(,$W221,$S221,$U221)=$x222;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x221;$boundArgs[]=$_arg;unset($x223,$W223,$S223,$U223);$x224=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_newFn,(string)\'length\',106,10,\'<image>/03_function.js\');$x223=&$x224[0];list(,$W223,$S223,$U223)=$x224;$x225=--$x223;}$_newFn->boundArgs=$boundArgs;return$_newFn;return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/03_function.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/03_function.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Function;
$_F;
$x84 = clone JS::$functionTemplate; $x84->call = '_da83e0eb0e2ad4eacd51c71584617646_1'; $x84->parameters = array (
); $x84->name = 'Function'; $x84->scope = $scope; $x84->properties['prototype'] = clone JS::$objectTemplate; $x84->attributes['prototype'] = JS::WRITABLE; $x84->properties['prototype']->properties['constructor'] = $x84; $x84->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x84->properties['length'] = 0; $x84->attributes['length'] = 0;
$scope->properties['Function'] = JS::$undefined; $_Function =& $scope->properties['Function'];
$UFunction = FALSE;
$_Function = $x84;
$x87 = clone JS::$functionTemplate; $x87->call = '_da83e0eb0e2ad4eacd51c71584617646_4'; $x87->parameters = array (
); $x87->name = 'F'; $x87->scope = $scope; $x87->properties['prototype'] = clone JS::$objectTemplate; $x87->attributes['prototype'] = JS::WRITABLE; $x87->properties['prototype']->properties['constructor'] = $x87; $x87->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x87->properties['length'] = 0; $x87->attributes['length'] = 0;
$scope->properties['F'] = JS::$undefined; $_F =& $scope->properties['F'];
$UF = FALSE;
$_F = $x87;
$_Function->class = 'Function';
if ($_Function === JS::$undefined || $_Function === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 40, 20, '<image>/03_function.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x90 = $x89($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error') {$x90->properties['file'] = '<image>/03_function.js';$x90->properties['line'] = 40;$x90->properties['column'] = 20;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 40, 20, '<image>/03_function.js');
}
$_Function = JS::toObject($_Function, $global);
unset($x91, $W91, $S91, $U91);
$x95 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $_Function, (string) 'prototype', 40, 20, '<image>/03_function.js');
$x91 =& $x95[0]; list(,$W91,$S91,$U91) = $x95;
if ($U91 && (!isset($_Function->extensible) || $_Function->extensible)) {$_Function->properties['prototype'] = $x91; $x91 =& $_Function->properties['prototype']; $_Function->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U91 = FALSE; $W91 = TRUE; }
if (isset($S91)) {
$x97 = $S91->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x98 = $x97($global, $_Function, $S91, array($_Function->prototype), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x96 = $x98;
} else {
if (!$U91) {$x96 = $_Function->prototype;if ($W91) { $x91 = $_Function->prototype; }  }
else { $x96 = JS::$undefined; }
}
if (isset($_Function->class) && $_Function->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Function->properties['length']) { $_Function->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x99 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'Object', 41, 53, '<image>/03_function.js');
$_Object =& $x99[0]; list(,$WObject,$SObject,$UObject) = $x99;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x100 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 41, 53, '<image>/03_function.js');
$_ReferenceError =& $x100[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x100;
$x101 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 41, 53);
$x102 = $x101($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x102->class) && $x102->class === 'Error') {$x102->properties['file'] = '<image>/03_function.js';$x102->properties['line'] = 41;$x102->properties['column'] = 53;$x102->attributes['file'] = $x102->attributes['line'] = $x102->attributes['column'] = 0; }
throw new JSException($x102, 41, 53, '<image>/03_function.js');
}
$_Function->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Function->properties['prototype']->class = 'Function';
$_Function->properties['prototype']->extensible = TRUE;
unset($x103, $W103, $S103, $U103);
$x104 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 44, 9, '<image>/03_function.js');
$x103 =& $x104[0]; list(,$W103,$S103,$U103) = $x104;
if ($x103 === JS::$undefined || $x103 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x105 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 44, 32, '<image>/03_function.js');
$_TypeError =& $x105[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x105;
$x106 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x107 = $x106($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x107->class) && $x107->class === 'Error') {$x107->properties['file'] = '<image>/03_function.js';$x107->properties['line'] = 44;$x107->properties['column'] = 32;$x107->attributes['file'] = $x107->attributes['line'] = $x107->attributes['column'] = 0; }
throw new JSException($x107, 44, 32, '<image>/03_function.js');
}
$x103 = JS::toObject($x103, $global);
unset($x108, $W108, $S108, $U108);
$x109 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x103, (string) 'constructor', 44, 32, '<image>/03_function.js');
$x108 =& $x109[0]; list(,$W108,$S108,$U108) = $x109;
if ($U108 && (!isset($x103->extensible) || $x103->extensible)) {$x103->properties['constructor'] = $x108; $x108 =& $x103->properties['constructor']; $x103->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U108 = FALSE; $W108 = TRUE; }
if (isset($S108)) {
$x111 = $S108->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x112 = $x111($global, $x103, $S108, array($_Function), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x110 = $x112;
} else {
if (!$U108) {$x110 = $_Function;if ($W108) { $x108 = $_Function; }  }
else { $x110 = JS::$undefined; }
}
if (isset($x103->class) && $x103->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x103->properties['length']) { $x103->properties['length'] = 'constructor' + 1; };
$_Function->prototype->call =$_F->call;
if (!array_key_exists('F', $scope->attributes)) { unset($scope->properties['F'], $_F); $x113 = TRUE; }
else if ($scope->attributes['F'] & JS::CONFIGURABLE) { unset($scope->properties['F'], $scope->attributes['F'], $scope->getters['F'], $scope->setters['F'], $_F); $x113 = TRUE; }
else { $x113 = FALSE; };
$x129 = clone JS::$functionTemplate; $x129->call = '_da83e0eb0e2ad4eacd51c71584617646_6'; $x129->parameters = array (
); $x129->scope = $scope; $x129->properties['prototype'] = clone JS::$objectTemplate; $x129->attributes['prototype'] = JS::WRITABLE; $x129->properties['prototype']->properties['constructor'] = $x129; $x129->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x129->properties['length'] = 0; $x129->attributes['length'] = 0;
unset($x130, $W130, $S130, $U130);
$x131 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 54, 9, '<image>/03_function.js');
$x130 =& $x131[0]; list(,$W130,$S130,$U130) = $x131;
if ($x130 === JS::$undefined || $x130 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x132 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 54, 29, '<image>/03_function.js');
$_TypeError =& $x132[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x132;
$x133 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x134 = $x133($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x134->class) && $x134->class === 'Error') {$x134->properties['file'] = '<image>/03_function.js';$x134->properties['line'] = 54;$x134->properties['column'] = 29;$x134->attributes['file'] = $x134->attributes['line'] = $x134->attributes['column'] = 0; }
throw new JSException($x134, 54, 29, '<image>/03_function.js');
}
$x130 = JS::toObject($x130, $global);
unset($x135, $W135, $S135, $U135);
$x136 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x130, (string) 'toString', 54, 29, '<image>/03_function.js');
$x135 =& $x136[0]; list(,$W135,$S135,$U135) = $x136;
if ($U135 && (!isset($x130->extensible) || $x130->extensible)) {$x130->properties['toString'] = $x135; $x135 =& $x130->properties['toString']; $x130->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U135 = FALSE; $W135 = TRUE; }
if (isset($S135)) {
$x138 = $S135->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x139 = $x138($global, $x130, $S135, array($x129), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x137 = $x139;
} else {
if (!$U135) {$x137 = $x129;if ($W135) { $x135 = $x129; }  }
else { $x137 = JS::$undefined; }
}
if (isset($x130->class) && $x130->class === 'Array' &&  is_int('toString') && 'toString' >= $x130->properties['length']) { $x130->properties['length'] = 'toString' + 1; };
$x161 = clone JS::$functionTemplate; $x161->call = '_da83e0eb0e2ad4eacd51c71584617646_7'; $x161->parameters = array (
  0 => 'thisArg',
  1 => 'argArray',
); $x161->scope = $scope; $x161->properties['prototype'] = clone JS::$objectTemplate; $x161->attributes['prototype'] = JS::WRITABLE; $x161->properties['prototype']->properties['constructor'] = $x161; $x161->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x161->properties['length'] = 2; $x161->attributes['length'] = 0;
unset($x162, $W162, $S162, $U162);
$x163 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 58, 9, '<image>/03_function.js');
$x162 =& $x163[0]; list(,$W162,$S162,$U162) = $x163;
if ($x162 === JS::$undefined || $x162 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x164 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 58, 26, '<image>/03_function.js');
$_TypeError =& $x164[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x164;
$x165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 58, 26);
$x166 = $x165($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x166->class) && $x166->class === 'Error') {$x166->properties['file'] = '<image>/03_function.js';$x166->properties['line'] = 58;$x166->properties['column'] = 26;$x166->attributes['file'] = $x166->attributes['line'] = $x166->attributes['column'] = 0; }
throw new JSException($x166, 58, 26, '<image>/03_function.js');
}
$x162 = JS::toObject($x162, $global);
unset($x167, $W167, $S167, $U167);
$x168 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x162, (string) 'apply', 58, 26, '<image>/03_function.js');
$x167 =& $x168[0]; list(,$W167,$S167,$U167) = $x168;
if ($U167 && (!isset($x162->extensible) || $x162->extensible)) {$x162->properties['apply'] = $x167; $x167 =& $x162->properties['apply']; $x162->attributes['apply'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U167 = FALSE; $W167 = TRUE; }
if (isset($S167)) {
$x170 = $S167->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 58, 26);
$x171 = $x170($global, $x162, $S167, array($x161), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x169 = $x171;
} else {
if (!$U167) {$x169 = $x161;if ($W167) { $x167 = $x161; }  }
else { $x169 = JS::$undefined; }
}
if (isset($x162->class) && $x162->class === 'Array' &&  is_int('apply') && 'apply' >= $x162->properties['length']) { $x162->properties['length'] = 'apply' + 1; };
$x195 = clone JS::$functionTemplate; $x195->call = '_da83e0eb0e2ad4eacd51c71584617646_8'; $x195->parameters = array (
  0 => 'thisArg',
); $x195->scope = $scope; $x195->properties['prototype'] = clone JS::$objectTemplate; $x195->attributes['prototype'] = JS::WRITABLE; $x195->properties['prototype']->properties['constructor'] = $x195; $x195->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x195->properties['length'] = 1; $x195->attributes['length'] = 0;
unset($x196, $W196, $S196, $U196);
$x197 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 78, 9, '<image>/03_function.js');
$x196 =& $x197[0]; list(,$W196,$S196,$U196) = $x197;
if ($x196 === JS::$undefined || $x196 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x198 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 78, 25, '<image>/03_function.js');
$_TypeError =& $x198[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x198;
$x199 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 78, 25);
$x200 = $x199($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x200->class) && $x200->class === 'Error') {$x200->properties['file'] = '<image>/03_function.js';$x200->properties['line'] = 78;$x200->properties['column'] = 25;$x200->attributes['file'] = $x200->attributes['line'] = $x200->attributes['column'] = 0; }
throw new JSException($x200, 78, 25, '<image>/03_function.js');
}
$x196 = JS::toObject($x196, $global);
unset($x201, $W201, $S201, $U201);
$x202 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x196, (string) 'call', 78, 25, '<image>/03_function.js');
$x201 =& $x202[0]; list(,$W201,$S201,$U201) = $x202;
if ($U201 && (!isset($x196->extensible) || $x196->extensible)) {$x196->properties['call'] = $x201; $x201 =& $x196->properties['call']; $x196->attributes['call'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U201 = FALSE; $W201 = TRUE; }
if (isset($S201)) {
$x204 = $S201->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 78, 25);
$x205 = $x204($global, $x196, $S201, array($x195), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x203 = $x205;
} else {
if (!$U201) {$x203 = $x195;if ($W201) { $x201 = $x195; }  }
else { $x203 = JS::$undefined; }
}
if (isset($x196->class) && $x196->class === 'Array' &&  is_int('call') && 'call' >= $x196->properties['length']) { $x196->properties['length'] = 'call' + 1; };
$x226 = clone JS::$functionTemplate; $x226->call = '_da83e0eb0e2ad4eacd51c71584617646_9'; $x226->parameters = array (
  0 => 'thisArg',
); $x226->scope = $scope; $x226->properties['prototype'] = clone JS::$objectTemplate; $x226->attributes['prototype'] = JS::WRITABLE; $x226->properties['prototype']->properties['constructor'] = $x226; $x226->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x226->properties['length'] = 1; $x226->attributes['length'] = 0;
unset($x227, $W227, $S227, $U227);
$x228 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 97, 9, '<image>/03_function.js');
$x227 =& $x228[0]; list(,$W227,$S227,$U227) = $x228;
if ($x227 === JS::$undefined || $x227 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x229 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 97, 25, '<image>/03_function.js');
$_TypeError =& $x229[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x229;
$x230 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 97, 25);
$x231 = $x230($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x231->class) && $x231->class === 'Error') {$x231->properties['file'] = '<image>/03_function.js';$x231->properties['line'] = 97;$x231->properties['column'] = 25;$x231->attributes['file'] = $x231->attributes['line'] = $x231->attributes['column'] = 0; }
throw new JSException($x231, 97, 25, '<image>/03_function.js');
}
$x227 = JS::toObject($x227, $global);
unset($x232, $W232, $S232, $U232);
$x233 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x227, (string) 'bind', 97, 25, '<image>/03_function.js');
$x232 =& $x233[0]; list(,$W232,$S232,$U232) = $x233;
if ($U232 && (!isset($x227->extensible) || $x227->extensible)) {$x227->properties['bind'] = $x232; $x232 =& $x227->properties['bind']; $x227->attributes['bind'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U232 = FALSE; $W232 = TRUE; }
if (isset($S232)) {
$x235 = $S232->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 97, 25);
$x236 = $x235($global, $x227, $S232, array($x226), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x234 = $x236;
} else {
if (!$U232) {$x234 = $x226;if ($W232) { $x232 = $x226; }  }
else { $x234 = JS::$undefined; }
}
if (isset($x227->class) && $x227->class === 'Array' &&  is_int('bind') && 'bind' >= $x227->properties['length']) { $x227->properties['length'] = 'bind' + 1; };
;
return JS::$undefined;
}
