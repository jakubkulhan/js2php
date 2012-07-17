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
$x116 =& $scope->properties['arguments'];
$x116->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x116->properties[$i] = $args[$i];
$x116->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x119 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'NotImplementedError', 55, 12, '<image>/03_function.js');
$_NotImplementedError =& $x119[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x119;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x120 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 55, 12, '<image>/03_function.js');
$_ReferenceError =& $x120[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x120;
$x121 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 12);
$x122 = $x121($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x122->class) && $x122->class === 'Error') {$x122->properties['file'] = '<image>/03_function.js';$x122->properties['line'] = 55;$x122->properties['column'] = 12;$x122->attributes['file'] = $x122->attributes['line'] = $x122->attributes['column'] = 0; }
throw new JSException($x122, 55, 12, '<image>/03_function.js');
}
$x117 = clone JS::$objectTemplate;
unset($x123, $W123, $S123, $U123);
$x124 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_NotImplementedError, (string) 'prototype', 55, 8, '<image>/03_function.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
$x118 = $x123;
$x117->prototype = $x118;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x127 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 55, 8, '<image>/03_function.js');
$_TypeError =& $x127[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x127;
$x128 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 8);
$x129 = $x128($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x129->class) && $x129->class === 'Error') {$x129->properties['file'] = '<image>/03_function.js';$x129->properties['line'] = 55;$x129->properties['column'] = 8;$x129->attributes['file'] = $x129->attributes['line'] = $x129->attributes['column'] = 0; }
throw new JSException($x129, 55, 8, '<image>/03_function.js');
}
$x125 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 8);
$x126 = $x125($global, $x117, $_NotImplementedError, array('Function.prototype.toString(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x118 = $x126;
if (is_object($x118) && $x118 !== JS::$undefined) { $x117 = $x118; }
if (isset($x117->class) && $x117->class === 'Error') {$x117->properties['file'] = '<image>/03_function.js';$x117->properties['line'] = 55;$x117->properties['column'] = 2;$x117->attributes['file'] = $x117->attributes['line'] = $x117->attributes['column'] = 0; }
throw new JSException($x117, 55, 2, '<image>/03_function.js');
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x116=&$scope->properties[\'arguments\'];$x116->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x116->properties[$i]=$args[$i];$x116->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x119=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'NotImplementedError\',55,12,\'<image>/03_function.js\');$_NotImplementedError=&$x119[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x119;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x120=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',55,12,\'<image>/03_function.js\');$_ReferenceError=&$x120[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x120;$x121=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,12);$x122=$x121($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x122->class)&&$x122->class===\'Error\'){$x122->properties[\'file\']=\'<image>/03_function.js\';$x122->properties[\'line\']=55;$x122->properties[\'column\']=12;$x122->attributes[\'file\']=$x122->attributes[\'line\']=$x122->attributes[\'column\']=0;}throw new JSException($x122,55,12,\'<image>/03_function.js\');}$x117=clone JS::$objectTemplate;unset($x123,$W123,$S123,$U123);$x124=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_NotImplementedError,(string)\'prototype\',55,8,\'<image>/03_function.js\');$x123=&$x124[0];list(,$W123,$S123,$U123)=$x124;$x118=$x123;$x117->prototype=$x118;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x127=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'TypeError\',55,8,\'<image>/03_function.js\');$_TypeError=&$x127[0];list(,$WTypeError,$STypeError,$UTypeError)=$x127;$x128=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,8);$x129=$x128($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x129->class)&&$x129->class===\'Error\'){$x129->properties[\'file\']=\'<image>/03_function.js\';$x129->properties[\'line\']=55;$x129->properties[\'column\']=8;$x129->attributes[\'file\']=$x129->attributes[\'line\']=$x129->attributes[\'column\']=0;}throw new JSException($x129,55,8,\'<image>/03_function.js\');}$x125=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,8);$x126=$x125($global,$x117,$_NotImplementedError,array(\'Function.prototype.toString(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x118=$x126;if(is_object($x118)&&$x118!==JS::$undefined){$x117=$x118;}if(isset($x117->class)&&$x117->class===\'Error\'){$x117->properties[\'file\']=\'<image>/03_function.js\';$x117->properties[\'line\']=55;$x117->properties[\'column\']=2;$x117->attributes[\'file\']=$x117->attributes[\'line\']=$x117->attributes[\'column\']=0;}throw new JSException($x117,55,2,\'<image>/03_function.js\');return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x142 =& $scope->properties['arguments'];
$x142->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x142->properties[$i] = $args[$i];
$x142->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x143 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x143, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x146 = $_thisArg;
$x146 = ($x146 === JS::$undefined ? 'undefined' : (is_int($x146) || is_float($x146) ? 'number' : (is_bool($x146) ? 'boolean' : (is_string($x146) ? 'string' : (is_object($x146) && isset($x146->call) ? 'function' : 'object')))));
$x145 = !(((gettype($x146) === gettype('object') && $x146 === 'object'))|| (((is_float($x146) || is_int($x146)) && (is_float('object') || is_int('object'))) && $x146 == 'object'));
$x144 = $x145;
if (JS::toBoolean($x144, $global)) {
$x148 = $_thisArg;
$x148 = ($x148 === JS::$undefined ? 'undefined' : (is_int($x148) || is_float($x148) ? 'number' : (is_bool($x148) ? 'boolean' : (is_string($x148) ? 'string' : (is_object($x148) && isset($x148->call) ? 'function' : 'object')))));
$x147 = !(((gettype($x148) === gettype('function') && $x148 === 'function'))|| (((is_float($x148) || is_int($x148)) && (is_float('function') || is_int('function'))) && $x148 == 'function'));
$x144 = $x147; }
if (JS::toBoolean($x144, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = JS::toObject($_thisArg, $global);;
};
};
$x149 = $_argArray;
if (!JS::toBoolean($x149, $global)) {
$x150 = clone JS::$arrayTemplate;
$x150->properties['length'] = 0;
$x150->attributes['length'] = JS::WRITABLE;
$x149 = $x150; }
if ($UargArray) {$global->properties['argArray'] = $_argArray; $_argArray =& $global->properties['argArray']; }
$_argArray = $x149;
$passArgs = array();
for ($x151 = 0;; ++$x151) {
if ($x151 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x152, $W152, $S152, $U152);
$x153 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_argArray, (string) 'length', 70, 30, '<image>/03_function.js');
$x152 =& $x153[0]; list(,$W152,$S152,$U152) = $x153;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x152;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x151 !== 0) {
$x154 = ++$_i;
}
$x155 = JS::toPrimitive($_i, $global);
$x156 = JS::toPrimitive($_l, $global);
$x157 = (is_string($x155) && is_string($x156) ? strcmp($x155, $x156) < 0 : (!is_nan($x158 = JS::toNumber($x155, $global)) && !is_nan($x159 = JS::toNumber($x156, $global)) && $x158 < $x159));
if (!JS::toBoolean($x157, $global)) { break; }

unset($x160, $W160, $S160, $U160);
$x161 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_argArray, (string) $_i, 71, 17, '<image>/03_function.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x160;
$passArgs[] =$_arg;;
};
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x142=&$scope->properties[\'arguments\'];$x142->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x142->properties[$i]=$args[$i];$x142->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$scope->properties[\'argArray\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_argArray=&$scope->properties[\'argArray\'];$UargArray=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x143=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x143,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x146=$_thisArg;$x146=($x146===JS::$undefined?\'undefined\':(is_int($x146)||is_float($x146)?\'number\':(is_bool($x146)?\'boolean\':(is_string($x146)?\'string\':(is_object($x146)&&isset($x146->call)?\'function\':\'object\')))));$x145=!(((gettype($x146)===gettype(\'object\')&&$x146===\'object\'))||(((is_float($x146)||is_int($x146))&&(is_float(\'object\')||is_int(\'object\')))&&$x146==\'object\'));$x144=$x145;if(JS::toBoolean($x144,$global)){$x148=$_thisArg;$x148=($x148===JS::$undefined?\'undefined\':(is_int($x148)||is_float($x148)?\'number\':(is_bool($x148)?\'boolean\':(is_string($x148)?\'string\':(is_object($x148)&&isset($x148->call)?\'function\':\'object\')))));$x147=!(((gettype($x148)===gettype(\'function\')&&$x148===\'function\'))||(((is_float($x148)||is_int($x148))&&(is_float(\'function\')||is_int(\'function\')))&&$x148==\'function\'));$x144=$x147;}if(JS::toBoolean($x144,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=JS::toObject($_thisArg,$global);}}$x149=$_argArray;if(!JS::toBoolean($x149,$global)){$x150=clone JS::$arrayTemplate;$x150->properties[\'length\']=0;$x150->attributes[\'length\']=JS::WRITABLE;$x149=$x150;}if($UargArray){$global->properties[\'argArray\']=$_argArray;$_argArray=&$global->properties[\'argArray\'];}$_argArray=$x149;$passArgs=array();for($x151=0;;++$x151){if($x151===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x152,$W152,$S152,$U152);$x153=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_argArray,(string)\'length\',70,30,\'<image>/03_function.js\');$x152=&$x153[0];list(,$W152,$S152,$U152)=$x153;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x152;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x151!==0){$x154=++$_i;}$x155=JS::toPrimitive($_i,$global);$x156=JS::toPrimitive($_l,$global);$x157=(is_string($x155)&&is_string($x156)?strcmp($x155,$x156)<0:(!is_nan($x158=JS::toNumber($x155,$global))&&!is_nan($x159=JS::toNumber($x156,$global))&&$x158<$x159));if(!JS::toBoolean($x157,$global)){break;}unset($x160,$W160,$S160,$U160);$x161=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_argArray,(string)$_i,71,17,\'<image>/03_function.js\');$x160=&$x161[0];list(,$W160,$S160,$U160)=$x161;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x160;$passArgs[]=$_arg;}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x174 =& $scope->properties['arguments'];
$x174->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x174->properties[$i] = $args[$i];
$x174->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x175 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x175, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x178 = $_thisArg;
$x178 = ($x178 === JS::$undefined ? 'undefined' : (is_int($x178) || is_float($x178) ? 'number' : (is_bool($x178) ? 'boolean' : (is_string($x178) ? 'string' : (is_object($x178) && isset($x178->call) ? 'function' : 'object')))));
$x177 = !(((gettype($x178) === gettype('object') && $x178 === 'object'))|| (((is_float($x178) || is_int($x178)) && (is_float('object') || is_int('object'))) && $x178 == 'object'));
$x176 = $x177;
if (JS::toBoolean($x176, $global)) {
$x180 = $_thisArg;
$x180 = ($x180 === JS::$undefined ? 'undefined' : (is_int($x180) || is_float($x180) ? 'number' : (is_bool($x180) ? 'boolean' : (is_string($x180) ? 'string' : (is_object($x180) && isset($x180->call) ? 'function' : 'object')))));
$x179 = !(((gettype($x180) === gettype('function') && $x180 === 'function'))|| (((is_float($x180) || is_int($x180)) && (is_float('function') || is_int('function'))) && $x180 == 'function'));
$x176 = $x179; }
if (JS::toBoolean($x176, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = JS::toObject($_thisArg, $global);;
};
};
$passArgs = array();
for ($x181 = 0;; ++$x181) {
if ($x181 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x182 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'arguments', 89, 22, '<image>/03_function.js');
$_arguments =& $x182[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x182;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x183 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 89, 22, '<image>/03_function.js');
$_ReferenceError =& $x183[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x183;
$x184 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 89, 22);
$x185 = $x184($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x185->class) && $x185->class === 'Error') {$x185->properties['file'] = '<image>/03_function.js';$x185->properties['line'] = 89;$x185->properties['column'] = 22;$x185->attributes['file'] = $x185->attributes['line'] = $x185->attributes['column'] = 0; }
throw new JSException($x185, 89, 22, '<image>/03_function.js');
}
unset($x186, $W186, $S186, $U186);
$x187 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) 'length', 89, 31, '<image>/03_function.js');
$x186 =& $x187[0]; list(,$W186,$S186,$U186) = $x187;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x186;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x181 !== 0) {
$x188 = ++$_i;
}
$x189 = JS::toPrimitive($_i, $global);
$x190 = JS::toPrimitive($_l, $global);
$x191 = (is_string($x189) && is_string($x190) ? strcmp($x189, $x190) < 0 : (!is_nan($x192 = JS::toNumber($x189, $global)) && !is_nan($x193 = JS::toNumber($x190, $global)) && $x192 < $x193));
if (!JS::toBoolean($x191, $global)) { break; }

unset($x194, $W194, $S194, $U194);
$x195 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) $_i, 90, 18, '<image>/03_function.js');
$x194 =& $x195[0]; list(,$W194,$S194,$U194) = $x195;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x194;
$passArgs[] =$_arg;;
};
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x174=&$scope->properties[\'arguments\'];$x174->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x174->properties[$i]=$args[$i];$x174->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x175=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x175,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x178=$_thisArg;$x178=($x178===JS::$undefined?\'undefined\':(is_int($x178)||is_float($x178)?\'number\':(is_bool($x178)?\'boolean\':(is_string($x178)?\'string\':(is_object($x178)&&isset($x178->call)?\'function\':\'object\')))));$x177=!(((gettype($x178)===gettype(\'object\')&&$x178===\'object\'))||(((is_float($x178)||is_int($x178))&&(is_float(\'object\')||is_int(\'object\')))&&$x178==\'object\'));$x176=$x177;if(JS::toBoolean($x176,$global)){$x180=$_thisArg;$x180=($x180===JS::$undefined?\'undefined\':(is_int($x180)||is_float($x180)?\'number\':(is_bool($x180)?\'boolean\':(is_string($x180)?\'string\':(is_object($x180)&&isset($x180->call)?\'function\':\'object\')))));$x179=!(((gettype($x180)===gettype(\'function\')&&$x180===\'function\'))||(((is_float($x180)||is_int($x180))&&(is_float(\'function\')||is_int(\'function\')))&&$x180==\'function\'));$x176=$x179;}if(JS::toBoolean($x176,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=JS::toObject($_thisArg,$global);}}$passArgs=array();for($x181=0;;++$x181){if($x181===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x182=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'arguments\',89,22,\'<image>/03_function.js\');$_arguments=&$x182[0];list(,$Warguments,$Sarguments,$Uarguments)=$x182;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x183=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',89,22,\'<image>/03_function.js\');$_ReferenceError=&$x183[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x183;$x184=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',89,22);$x185=$x184($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x185->class)&&$x185->class===\'Error\'){$x185->properties[\'file\']=\'<image>/03_function.js\';$x185->properties[\'line\']=89;$x185->properties[\'column\']=22;$x185->attributes[\'file\']=$x185->attributes[\'line\']=$x185->attributes[\'column\']=0;}throw new JSException($x185,89,22,\'<image>/03_function.js\');}unset($x186,$W186,$S186,$U186);$x187=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)\'length\',89,31,\'<image>/03_function.js\');$x186=&$x187[0];list(,$W186,$S186,$U186)=$x187;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x186;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x181!==0){$x188=++$_i;}$x189=JS::toPrimitive($_i,$global);$x190=JS::toPrimitive($_l,$global);$x191=(is_string($x189)&&is_string($x190)?strcmp($x189,$x190)<0:(!is_nan($x192=JS::toNumber($x189,$global))&&!is_nan($x193=JS::toNumber($x190,$global))&&$x192<$x193));if(!JS::toBoolean($x191,$global)){break;}unset($x194,$W194,$S194,$U194);$x195=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)$_i,90,18,\'<image>/03_function.js\');$x194=&$x195[0];list(,$W194,$S194,$U194)=$x195;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x194;$passArgs[]=$_arg;}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _da83e0eb0e2ad4eacd51c71584617646_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x208 =& $scope->properties['arguments'];
$x208->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x208->properties[$i] = $args[$i];
$x208->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
for ($x209 = 0;; ++$x209) {
if ($x209 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x210 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'arguments', 103, 22, '<image>/03_function.js');
$_arguments =& $x210[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x210;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x211 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'ReferenceError', 103, 22, '<image>/03_function.js');
$_ReferenceError =& $x211[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x211;
$x212 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 103, 22);
$x213 = $x212($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x213->class) && $x213->class === 'Error') {$x213->properties['file'] = '<image>/03_function.js';$x213->properties['line'] = 103;$x213->properties['column'] = 22;$x213->attributes['file'] = $x213->attributes['line'] = $x213->attributes['column'] = 0; }
throw new JSException($x213, 103, 22, '<image>/03_function.js');
}
unset($x214, $W214, $S214, $U214);
$x215 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) 'length', 103, 31, '<image>/03_function.js');
$x214 =& $x215[0]; list(,$W214,$S214,$U214) = $x215;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x214;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x209 !== 0) {
$x216 = ++$_i;
}
$x217 = JS::toPrimitive($_i, $global);
$x218 = JS::toPrimitive($_l, $global);
$x219 = (is_string($x217) && is_string($x218) ? strcmp($x217, $x218) < 0 : (!is_nan($x220 = JS::toNumber($x217, $global)) && !is_nan($x221 = JS::toNumber($x218, $global)) && $x220 < $x221));
if (!JS::toBoolean($x219, $global)) { break; }

unset($x222, $W222, $S222, $U222);
$x223 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_arguments, (string) $_i, 104, 18, '<image>/03_function.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x222;
$boundArgs[] =$_arg;
unset($x224, $W224, $S224, $U224);
$x225 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_newFn, (string) 'length', 106, 10, '<image>/03_function.js');
$x224 =& $x225[0]; list(,$W224,$S224,$U224) = $x225;
$x226 = --$x224;;
};
$_newFn->boundArgs = $boundArgs;
return $_newFn;
;
return JS::$undefined;
}
echo 'function _da83e0eb0e2ad4eacd51c71584617646_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x208=&$scope->properties[\'arguments\'];$x208->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x208->properties[$i]=$args[$i];$x208->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'newFn\']=JS::$undefined;$_newFn=&$scope->properties[\'newFn\'];$UnewFn=FALSE;$_newFn=clone$leThis;$_newFn->boundThis=$_thisArg;$boundArgs=isset($_newFn->boundArgs)?$_newFn->boundArgs:array();for($x209=0;;++$x209){if($x209===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x210=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'arguments\',103,22,\'<image>/03_function.js\');$_arguments=&$x210[0];list(,$Warguments,$Sarguments,$Uarguments)=$x210;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x211=_da83e0eb0e2ad4eacd51c71584617646_2($global,$scope,$scope,(string)\'ReferenceError\',103,22,\'<image>/03_function.js\');$_ReferenceError=&$x211[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x211;$x212=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',103,22);$x213=$x212($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x213->class)&&$x213->class===\'Error\'){$x213->properties[\'file\']=\'<image>/03_function.js\';$x213->properties[\'line\']=103;$x213->properties[\'column\']=22;$x213->attributes[\'file\']=$x213->attributes[\'line\']=$x213->attributes[\'column\']=0;}throw new JSException($x213,103,22,\'<image>/03_function.js\');}unset($x214,$W214,$S214,$U214);$x215=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)\'length\',103,31,\'<image>/03_function.js\');$x214=&$x215[0];list(,$W214,$S214,$U214)=$x215;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x214;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x209!==0){$x216=++$_i;}$x217=JS::toPrimitive($_i,$global);$x218=JS::toPrimitive($_l,$global);$x219=(is_string($x217)&&is_string($x218)?strcmp($x217,$x218)<0:(!is_nan($x220=JS::toNumber($x217,$global))&&!is_nan($x221=JS::toNumber($x218,$global))&&$x220<$x221));if(!JS::toBoolean($x219,$global)){break;}unset($x222,$W222,$S222,$U222);$x223=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_arguments,(string)$_i,104,18,\'<image>/03_function.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x222;$boundArgs[]=$_arg;unset($x224,$W224,$S224,$U224);$x225=_da83e0eb0e2ad4eacd51c71584617646_3($global,$scope,$_newFn,(string)\'length\',106,10,\'<image>/03_function.js\');$x224=&$x225[0];list(,$W224,$S224,$U224)=$x225;$x226=--$x224;}$_newFn->boundArgs=$boundArgs;return$_newFn;return JS::$undefined;}', "\n";
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
for ($x114 = $scope; $x114 && $x114->up && !array_key_exists('F', $x114->attributes) && !array_key_exists('F', $x114->properties); $x114 = $x114->up);
if (!array_key_exists('F', $x114->attributes)) { unset($x114->properties['F'], $_F); $x113 = TRUE; }
else if ($x114->attributes['F'] & JS::CONFIGURABLE) { unset($x114->properties['F'], $x114->attributes['F'], $x114->getters['F'], $x114->setters['F'], $_F); $x113 = TRUE; }
else { $x113 = FALSE; };
$x130 = clone JS::$functionTemplate; $x130->call = '_da83e0eb0e2ad4eacd51c71584617646_6'; $x130->parameters = array (
); $x130->scope = $scope; $x130->properties['prototype'] = clone JS::$objectTemplate; $x130->attributes['prototype'] = JS::WRITABLE; $x130->properties['prototype']->properties['constructor'] = $x130; $x130->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x130->properties['length'] = 0; $x130->attributes['length'] = 0;
unset($x131, $W131, $S131, $U131);
$x132 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 54, 9, '<image>/03_function.js');
$x131 =& $x132[0]; list(,$W131,$S131,$U131) = $x132;
if ($x131 === JS::$undefined || $x131 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x133 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 54, 29, '<image>/03_function.js');
$_TypeError =& $x133[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x133;
$x134 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x135 = $x134($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x135->class) && $x135->class === 'Error') {$x135->properties['file'] = '<image>/03_function.js';$x135->properties['line'] = 54;$x135->properties['column'] = 29;$x135->attributes['file'] = $x135->attributes['line'] = $x135->attributes['column'] = 0; }
throw new JSException($x135, 54, 29, '<image>/03_function.js');
}
$x131 = JS::toObject($x131, $global);
unset($x136, $W136, $S136, $U136);
$x137 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x131, (string) 'toString', 54, 29, '<image>/03_function.js');
$x136 =& $x137[0]; list(,$W136,$S136,$U136) = $x137;
if ($U136 && (!isset($x131->extensible) || $x131->extensible)) {$x131->properties['toString'] = $x136; $x136 =& $x131->properties['toString']; $x131->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U136 = FALSE; $W136 = TRUE; }
if (isset($S136)) {
$x139 = $S136->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x140 = $x139($global, $x131, $S136, array($x130), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x138 = $x140;
} else {
if (!$U136) {$x138 = $x130;if ($W136) { $x136 = $x130; }  }
else { $x138 = JS::$undefined; }
}
if (isset($x131->class) && $x131->class === 'Array' &&  is_int('toString') && 'toString' >= $x131->properties['length']) { $x131->properties['length'] = 'toString' + 1; };
$x162 = clone JS::$functionTemplate; $x162->call = '_da83e0eb0e2ad4eacd51c71584617646_7'; $x162->parameters = array (
  0 => 'thisArg',
  1 => 'argArray',
); $x162->scope = $scope; $x162->properties['prototype'] = clone JS::$objectTemplate; $x162->attributes['prototype'] = JS::WRITABLE; $x162->properties['prototype']->properties['constructor'] = $x162; $x162->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x162->properties['length'] = 2; $x162->attributes['length'] = 0;
unset($x163, $W163, $S163, $U163);
$x164 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 58, 9, '<image>/03_function.js');
$x163 =& $x164[0]; list(,$W163,$S163,$U163) = $x164;
if ($x163 === JS::$undefined || $x163 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x165 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 58, 26, '<image>/03_function.js');
$_TypeError =& $x165[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x165;
$x166 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 58, 26);
$x167 = $x166($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x167->class) && $x167->class === 'Error') {$x167->properties['file'] = '<image>/03_function.js';$x167->properties['line'] = 58;$x167->properties['column'] = 26;$x167->attributes['file'] = $x167->attributes['line'] = $x167->attributes['column'] = 0; }
throw new JSException($x167, 58, 26, '<image>/03_function.js');
}
$x163 = JS::toObject($x163, $global);
unset($x168, $W168, $S168, $U168);
$x169 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x163, (string) 'apply', 58, 26, '<image>/03_function.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
if ($U168 && (!isset($x163->extensible) || $x163->extensible)) {$x163->properties['apply'] = $x168; $x168 =& $x163->properties['apply']; $x163->attributes['apply'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U168 = FALSE; $W168 = TRUE; }
if (isset($S168)) {
$x171 = $S168->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 58, 26);
$x172 = $x171($global, $x163, $S168, array($x162), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x170 = $x172;
} else {
if (!$U168) {$x170 = $x162;if ($W168) { $x168 = $x162; }  }
else { $x170 = JS::$undefined; }
}
if (isset($x163->class) && $x163->class === 'Array' &&  is_int('apply') && 'apply' >= $x163->properties['length']) { $x163->properties['length'] = 'apply' + 1; };
$x196 = clone JS::$functionTemplate; $x196->call = '_da83e0eb0e2ad4eacd51c71584617646_8'; $x196->parameters = array (
  0 => 'thisArg',
); $x196->scope = $scope; $x196->properties['prototype'] = clone JS::$objectTemplate; $x196->attributes['prototype'] = JS::WRITABLE; $x196->properties['prototype']->properties['constructor'] = $x196; $x196->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x196->properties['length'] = 1; $x196->attributes['length'] = 0;
unset($x197, $W197, $S197, $U197);
$x198 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 78, 9, '<image>/03_function.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if ($x197 === JS::$undefined || $x197 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x199 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 78, 25, '<image>/03_function.js');
$_TypeError =& $x199[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x199;
$x200 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 78, 25);
$x201 = $x200($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x201->class) && $x201->class === 'Error') {$x201->properties['file'] = '<image>/03_function.js';$x201->properties['line'] = 78;$x201->properties['column'] = 25;$x201->attributes['file'] = $x201->attributes['line'] = $x201->attributes['column'] = 0; }
throw new JSException($x201, 78, 25, '<image>/03_function.js');
}
$x197 = JS::toObject($x197, $global);
unset($x202, $W202, $S202, $U202);
$x203 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x197, (string) 'call', 78, 25, '<image>/03_function.js');
$x202 =& $x203[0]; list(,$W202,$S202,$U202) = $x203;
if ($U202 && (!isset($x197->extensible) || $x197->extensible)) {$x197->properties['call'] = $x202; $x202 =& $x197->properties['call']; $x197->attributes['call'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U202 = FALSE; $W202 = TRUE; }
if (isset($S202)) {
$x205 = $S202->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 78, 25);
$x206 = $x205($global, $x197, $S202, array($x196), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x204 = $x206;
} else {
if (!$U202) {$x204 = $x196;if ($W202) { $x202 = $x196; }  }
else { $x204 = JS::$undefined; }
}
if (isset($x197->class) && $x197->class === 'Array' &&  is_int('call') && 'call' >= $x197->properties['length']) { $x197->properties['length'] = 'call' + 1; };
$x227 = clone JS::$functionTemplate; $x227->call = '_da83e0eb0e2ad4eacd51c71584617646_9'; $x227->parameters = array (
  0 => 'thisArg',
); $x227->scope = $scope; $x227->properties['prototype'] = clone JS::$objectTemplate; $x227->attributes['prototype'] = JS::WRITABLE; $x227->properties['prototype']->properties['constructor'] = $x227; $x227->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x227->properties['length'] = 1; $x227->attributes['length'] = 0;
unset($x228, $W228, $S228, $U228);
$x229 = _da83e0eb0e2ad4eacd51c71584617646_3($global, $scope, $_Function, (string) 'prototype', 97, 9, '<image>/03_function.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
if ($x228 === JS::$undefined || $x228 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x230 = _da83e0eb0e2ad4eacd51c71584617646_2($global, $scope, $scope, (string) 'TypeError', 97, 25, '<image>/03_function.js');
$_TypeError =& $x230[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x230;
$x231 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 97, 25);
$x232 = $x231($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x232->class) && $x232->class === 'Error') {$x232->properties['file'] = '<image>/03_function.js';$x232->properties['line'] = 97;$x232->properties['column'] = 25;$x232->attributes['file'] = $x232->attributes['line'] = $x232->attributes['column'] = 0; }
throw new JSException($x232, 97, 25, '<image>/03_function.js');
}
$x228 = JS::toObject($x228, $global);
unset($x233, $W233, $S233, $U233);
$x234 = _da83e0eb0e2ad4eacd51c71584617646_5($global, $scope, $x228, (string) 'bind', 97, 25, '<image>/03_function.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
if ($U233 && (!isset($x228->extensible) || $x228->extensible)) {$x228->properties['bind'] = $x233; $x233 =& $x228->properties['bind']; $x228->attributes['bind'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U233 = FALSE; $W233 = TRUE; }
if (isset($S233)) {
$x236 = $S233->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 97, 25);
$x237 = $x236($global, $x228, $S233, array($x227), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x235 = $x237;
} else {
if (!$U233) {$x235 = $x227;if ($W233) { $x233 = $x227; }  }
else { $x235 = JS::$undefined; }
}
if (isset($x228->class) && $x228->class === 'Array' &&  is_int('bind') && 'bind' >= $x228->properties['length']) { $x228->properties['length'] = 'bind' + 1; };
;
return JS::$undefined;
}
