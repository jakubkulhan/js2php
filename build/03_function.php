function _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x3=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x4=$x3($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x4;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
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
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x9=$x14;}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x5 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'arguments', 4, 6, '<image>/03_function.js');
$_arguments =& $x5[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x5;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x6 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'ReferenceError', 4, 6, '<image>/03_function.js');
$_ReferenceError =& $x6[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x6;
$x7 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 4, 6);
$x8 = $x7($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x8->class) && $x8->class === 'Error') {$x8->properties['file'] = '<image>/03_function.js';$x8->properties['line'] = 4;$x8->properties['column'] = 6;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
throw new JSException($x8, 4, 6, '<image>/03_function.js');
}
unset($x9, $W9, $S9, $U9);
$x15 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) 'length', 4, 15, '<image>/03_function.js');
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
$x22 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) 'length', 5, 32, '<image>/03_function.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
$x18 = JS::toPrimitive($_i, $global);
$x19 = JS::toPrimitive((JS::toNumber($x21, $global) - JS::toNumber(1, $global)), $global);
$x20 = (is_string($x18) && is_string($x19) ? strcmp($x18, $x19) < 0 : (!is_nan($x23 = JS::toNumber($x18, $global)) && !is_nan($x24 = JS::toNumber($x19, $global)) && $x23 < $x24));
if (!JS::toBoolean($x20, $global)) { break; }

if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x26 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 6, 13, '<image>/03_function.js');
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
$x30 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $x25, (string) 'push', 6, 13, '<image>/03_function.js');
$x29 =& $x30[0]; list(,$W29,$S29,$U29) = $x30;
unset($x31, $W31, $S31, $U31);
$x32 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) $_i, 6, 23, '<image>/03_function.js');
$x31 =& $x32[0]; list(,$W31,$S31,$U31) = $x32;
if (!(is_object($x29) && isset($x29->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 6, 13, '<image>/03_function.js');
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
$x39 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) 'length', 9, 29, '<image>/03_function.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
unset($x40, $W40, $S40, $U40);
$x41 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) (JS::toNumber($x38, $global) - JS::toNumber(1, $global)), 9, 19, '<image>/03_function.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
if ($Ubody) {$global->properties['body'] = $_body; $_body =& $global->properties['body']; }
$_body = $x40;;
};
if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x43 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 12, 18, '<image>/03_function.js');
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
$x47 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $x42, (string) 'join', 12, 18, '<image>/03_function.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
if (!(is_object($x46) && isset($x46->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x50 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 12, 18, '<image>/03_function.js');
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
$x61 = (is_string($x53) || is_string($x54) ? JS::toString($x53, $global) . JS::toString($x54, $global) : JS::toNumber($x53, $global) + JS::toNumber($x54, $global));
if ($Ufn) {$global->properties['fn'] = $_fn; $_fn =& $global->properties['fn']; }
$_fn = $x61;
$parser = new JSParser;

		list($ok, $ast, $error) = $parser->__invoke(JS::toString($_fn, $global), array('file' => '<Function>'));

		if (!$ok) {;
unset($_SyntaxError, $WSyntaxError, $SSyntaxError, $USyntaxError);
$x64 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'SyntaxError', 21, 14, '<image>/03_function.js');
$_SyntaxError =& $x64[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x64;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x65 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'ReferenceError', 21, 14, '<image>/03_function.js');
$_ReferenceError =& $x65[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x65;
$x66 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 14);
$x67 = $x66($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x67->class) && $x67->class === 'Error') {$x67->properties['file'] = '<image>/03_function.js';$x67->properties['line'] = 21;$x67->properties['column'] = 14;$x67->attributes['file'] = $x67->attributes['line'] = $x67->attributes['column'] = 0; }
throw new JSException($x67, 21, 14, '<image>/03_function.js');
}
$x76 = JS::toPrimitive('Function(): syntax error at ', $global);
$x77 = JS::toPrimitive($error->line, $global);
$x74 = JS::toPrimitive((is_string($x76) || is_string($x77) ? JS::toString($x76, $global) . JS::toString($x77, $global) : JS::toNumber($x76, $global) + JS::toNumber($x77, $global)), $global);
$x75 = JS::toPrimitive(':', $global);
$x72 = JS::toPrimitive((is_string($x74) || is_string($x75) ? JS::toString($x74, $global) . JS::toString($x75, $global) : JS::toNumber($x74, $global) + JS::toNumber($x75, $global)), $global);
$x73 = JS::toPrimitive($error->column, $global);
$x70 = JS::toPrimitive((is_string($x72) || is_string($x73) ? JS::toString($x72, $global) . JS::toString($x73, $global) : JS::toNumber($x72, $global) + JS::toNumber($x73, $global)), $global);
$x71 = JS::toPrimitive(', expected ', $global);
$x68 = JS::toPrimitive((is_string($x70) || is_string($x71) ? JS::toString($x70, $global) . JS::toString($x71, $global) : JS::toNumber($x70, $global) + JS::toNumber($x71, $global)), $global);
$x69 = JS::toPrimitive(implode(', ', $error->expected), $global);
$x62 = clone JS::$objectTemplate;
unset($x78, $W78, $S78, $U78);
$x79 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_SyntaxError, (string) 'prototype', 21, 10, '<image>/03_function.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
$x63 = $x78;
$x62->prototype = $x63;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x82 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 21, 10, '<image>/03_function.js');
$_TypeError =& $x82[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x82;
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 10);
$x84 = $x83($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x84->class) && $x84->class === 'Error') {$x84->properties['file'] = '<image>/03_function.js';$x84->properties['line'] = 21;$x84->properties['column'] = 10;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 21, 10, '<image>/03_function.js');
}
$x80 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 10);
$x81 = $x80($global, $x62, $_SyntaxError, array((is_string($x68) || is_string($x69) ? JS::toString($x68, $global) . JS::toString($x69, $global) : JS::toNumber($x68, $global) + JS::toNumber($x69, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x63 = $x81;
if (is_object($x63) && $x63 !== JS::$undefined) { $x62 = $x63; }
if (isset($x62->class) && $x62->class === 'Error') {$x62->properties['file'] = '<image>/03_function.js';$x62->properties['line'] = 21;$x62->properties['column'] = 4;$x62->attributes['file'] = $x62->attributes['line'] = $x62->attributes['column'] = 0; }
throw new JSException($x62, 21, 4, '<image>/03_function.js');
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
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Function\']=$fn;$_Function=&$scope->properties[\'Function\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$arrayTemplate;$x2->properties[\'length\']=0;$x2->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'args\']=JS::$undefined;$_args=&$scope->properties[\'args\'];$Uargs=FALSE;$_args=$x2;$scope->properties[\'body\']=JS::$undefined;$_body=&$scope->properties[\'body\'];$Ubody=FALSE;$_body=\'\';$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x5=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'arguments\',4,6,\'<image>/03_function.js\');$_arguments=&$x5[0];list(,$Warguments,$Sarguments,$Uarguments)=$x5;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x6=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'ReferenceError\',4,6,\'<image>/03_function.js\');$_ReferenceError=&$x6[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x6;$x7=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',4,6);$x8=$x7($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'){$x8->properties[\'file\']=\'<image>/03_function.js\';$x8->properties[\'line\']=4;$x8->properties[\'column\']=6;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,4,6,\'<image>/03_function.js\');}unset($x9,$W9,$S9,$U9);$x15=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)\'length\',4,15,\'<image>/03_function.js\');$x9=&$x15[0];list(,$W9,$S9,$U9)=$x15;if(JS::toBoolean($x9,$global)){for($x16=0;;++$x16){if($x16===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x16!==0){$x17=++$_i;}unset($x21,$W21,$S21,$U21);$x22=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)\'length\',5,32,\'<image>/03_function.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;$x18=JS::toPrimitive($_i,$global);$x19=JS::toPrimitive((JS::toNumber($x21,$global)-JS::toNumber(1,$global)),$global);$x20=(is_string($x18)&&is_string($x19)?strcmp($x18,$x19)<0:(!is_nan($x23=JS::toNumber($x18,$global))&&!is_nan($x24=JS::toNumber($x19,$global))&&$x23<$x24));if(!JS::toBoolean($x20,$global)){break;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x26=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',6,13,\'<image>/03_function.js\');$_TypeError=&$x26[0];list(,$WTypeError,$STypeError,$UTypeError)=$x26;$x27=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x28=$x27($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x28->class)&&$x28->class===\'Error\'){$x28->properties[\'file\']=\'<image>/03_function.js\';$x28->properties[\'line\']=6;$x28->properties[\'column\']=13;$x28->attributes[\'file\']=$x28->attributes[\'line\']=$x28->attributes[\'column\']=0;}throw new JSException($x28,6,13,\'<image>/03_function.js\');}$x25=JS::toObject($_args,$global);unset($x29,$W29,$S29,$U29);$x30=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$x25,(string)\'push\',6,13,\'<image>/03_function.js\');$x29=&$x30[0];list(,$W29,$S29,$U29)=$x30;unset($x31,$W31,$S31,$U31);$x32=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)$_i,6,23,\'<image>/03_function.js\');$x31=&$x32[0];list(,$W31,$S31,$U31)=$x32;if(!(is_object($x29)&&isset($x29->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',6,13,\'<image>/03_function.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x37=$x36($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'){$x37->properties[\'file\']=\'<image>/03_function.js\';$x37->properties[\'line\']=6;$x37->properties[\'column\']=13;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,6,13,\'<image>/03_function.js\');}$x33=$x29->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x34=$x33($global,$x25,$x29,array($x31),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x38,$W38,$S38,$U38);$x39=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)\'length\',9,29,\'<image>/03_function.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;unset($x40,$W40,$S40,$U40);$x41=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)(JS::toNumber($x38,$global)-JS::toNumber(1,$global)),9,19,\'<image>/03_function.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;if($Ubody){$global->properties[\'body\']=$_body;$_body=&$global->properties[\'body\'];}$_body=$x40;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x43=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',12,18,\'<image>/03_function.js\');$_TypeError=&$x43[0];list(,$WTypeError,$STypeError,$UTypeError)=$x43;$x44=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x45=$x44($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x45->class)&&$x45->class===\'Error\'){$x45->properties[\'file\']=\'<image>/03_function.js\';$x45->properties[\'line\']=12;$x45->properties[\'column\']=18;$x45->attributes[\'file\']=$x45->attributes[\'line\']=$x45->attributes[\'column\']=0;}throw new JSException($x45,12,18,\'<image>/03_function.js\');}$x42=JS::toObject($_args,$global);unset($x46,$W46,$S46,$U46);$x47=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$x42,(string)\'join\',12,18,\'<image>/03_function.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;if(!(is_object($x46)&&isset($x46->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x50=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',12,18,\'<image>/03_function.js\');$_TypeError=&$x50[0];list(,$WTypeError,$STypeError,$UTypeError)=$x50;$x51=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x52=$x51($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x52->class)&&$x52->class===\'Error\'){$x52->properties[\'file\']=\'<image>/03_function.js\';$x52->properties[\'line\']=12;$x52->properties[\'column\']=18;$x52->attributes[\'file\']=$x52->attributes[\'line\']=$x52->attributes[\'column\']=0;}throw new JSException($x52,12,18,\'<image>/03_function.js\');}$x48=$x46->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x49=$x48($global,$x42,$x46,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uargs){$global->properties[\'args\']=$_args;$_args=&$global->properties[\'args\'];}$_args=$x49;$x59=JS::toPrimitive(\'return function(\',$global);$x60=JS::toPrimitive($_args,$global);$x57=JS::toPrimitive((is_string($x59)||is_string($x60)?JS::toString($x59,$global).JS::toString($x60,$global):JS::toNumber($x59,$global)+JS::toNumber($x60,$global)),$global);$x58=JS::toPrimitive(\'){\',$global);$x55=JS::toPrimitive((is_string($x57)||is_string($x58)?JS::toString($x57,$global).JS::toString($x58,$global):JS::toNumber($x57,$global)+JS::toNumber($x58,$global)),$global);$x56=JS::toPrimitive($_body,$global);$x53=JS::toPrimitive((is_string($x55)||is_string($x56)?JS::toString($x55,$global).JS::toString($x56,$global):JS::toNumber($x55,$global)+JS::toNumber($x56,$global)),$global);$x54=JS::toPrimitive(\'};\',$global);$x61=(is_string($x53)||is_string($x54)?JS::toString($x53,$global).JS::toString($x54,$global):JS::toNumber($x53,$global)+JS::toNumber($x54,$global));if($Ufn){$global->properties[\'fn\']=$_fn;$_fn=&$global->properties[\'fn\'];}$_fn=$x61;$parser=new JSParser;list($ok,$ast,$error)=$parser->__invoke(JS::toString($_fn,$global),array(\'file\'=>\'<Function>\'));if(!$ok){;unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x64=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'SyntaxError\',21,14,\'<image>/03_function.js\');$_SyntaxError=&$x64[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x64;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x65=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'ReferenceError\',21,14,\'<image>/03_function.js\');$_ReferenceError=&$x65[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x65;$x66=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,14);$x67=$x66($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x67->class)&&$x67->class===\'Error\'){$x67->properties[\'file\']=\'<image>/03_function.js\';$x67->properties[\'line\']=21;$x67->properties[\'column\']=14;$x67->attributes[\'file\']=$x67->attributes[\'line\']=$x67->attributes[\'column\']=0;}throw new JSException($x67,21,14,\'<image>/03_function.js\');}$x76=JS::toPrimitive(\'Function(): syntax error at \',$global);$x77=JS::toPrimitive($error->line,$global);$x74=JS::toPrimitive((is_string($x76)||is_string($x77)?JS::toString($x76,$global).JS::toString($x77,$global):JS::toNumber($x76,$global)+JS::toNumber($x77,$global)),$global);$x75=JS::toPrimitive(\':\',$global);$x72=JS::toPrimitive((is_string($x74)||is_string($x75)?JS::toString($x74,$global).JS::toString($x75,$global):JS::toNumber($x74,$global)+JS::toNumber($x75,$global)),$global);$x73=JS::toPrimitive($error->column,$global);$x70=JS::toPrimitive((is_string($x72)||is_string($x73)?JS::toString($x72,$global).JS::toString($x73,$global):JS::toNumber($x72,$global)+JS::toNumber($x73,$global)),$global);$x71=JS::toPrimitive(\', expected \',$global);$x68=JS::toPrimitive((is_string($x70)||is_string($x71)?JS::toString($x70,$global).JS::toString($x71,$global):JS::toNumber($x70,$global)+JS::toNumber($x71,$global)),$global);$x69=JS::toPrimitive(implode(\', \',$error->expected),$global);$x62=clone JS::$objectTemplate;unset($x78,$W78,$S78,$U78);$x79=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_SyntaxError,(string)\'prototype\',21,10,\'<image>/03_function.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;$x63=$x78;$x62->prototype=$x63;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x82=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',21,10,\'<image>/03_function.js\');$_TypeError=&$x82[0];list(,$WTypeError,$STypeError,$UTypeError)=$x82;$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'){$x84->properties[\'file\']=\'<image>/03_function.js\';$x84->properties[\'line\']=21;$x84->properties[\'column\']=10;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,21,10,\'<image>/03_function.js\');}$x80=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x81=$x80($global,$x62,$_SyntaxError,array((is_string($x68)||is_string($x69)?JS::toString($x68,$global).JS::toString($x69,$global):JS::toNumber($x68,$global)+JS::toNumber($x69,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x63=$x81;if(is_object($x63)&&$x63!==JS::$undefined){$x62=$x63;}if(isset($x62->class)&&$x62->class===\'Error\'){$x62->properties[\'file\']=\'<image>/03_function.js\';$x62->properties[\'line\']=21;$x62->properties[\'column\']=4;$x62->attributes[\'file\']=$x62->attributes[\'line\']=$x62->attributes[\'column\']=0;}throw new JSException($x62,21,4,\'<image>/03_function.js\');}$compiler=new JSCompiler;$code=$compiler->__invoke($ast);$entryPoint=eval($code);$fn=$entryPoint();$fn->scope=$global->scope[$global->scope_sp-1];return$fn;return JS::$undefined;}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_4($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['F'] = $fn;
$_F =& $scope->properties['F'];
$global->scope[++$global->scope_sp] = $scope;
return JS::$undefined;
;
return JS::$undefined;
}
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x87=&$scope->properties[\'arguments\'];$x87->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x87->properties[$i]=$args[$i];$x87->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'F\']=$fn;$_F=&$scope->properties[\'F\'];$global->scope[++$global->scope_sp]=$scope;return JS::$undefined;return JS::$undefined;}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
$x94 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x95 = $x94($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x95->class) && $x95->class === 'Error') {$x95->properties['file'] = $file;$x95->properties['line'] = $line;$x95->properties['column'] = $column;$x95->attributes['file'] = $x95->attributes['line'] = $x95->attributes['column'] = 0; }
throw new JSException($x95, $line, $column, $file);
}
$W92 = $S92 = $U92 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x92 =& $lookup->properties[$id]; $W92 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S92 = $lookup->setters[$id]; }
else { $x92 = JS::$undefined; $U92 = TRUE; }
return array(&$x92, $W92, $S92, $U92);
}
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x93=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x93[0];list(,$WTypeError,$STypeError,$UTypeError)=$x93;$x94=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x95=$x94($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x95->class)&&$x95->class===\'Error\'){$x95->properties[\'file\']=$file;$x95->properties[\'line\']=$line;$x95->properties[\'column\']=$column;$x95->attributes[\'file\']=$x95->attributes[\'line\']=$x95->attributes[\'column\']=0;}throw new JSException($x95,$line,$column,$file);}$W92=$S92=$U92=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x92=&$lookup->properties[$id];$W92=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S92=$lookup->setters[$id];}else{$x92=JS::$undefined;$U92=TRUE;}return array(&$x92,$W92,$S92,$U92);}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x120 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'NotImplementedError', 55, 12, '<image>/03_function.js');
$_NotImplementedError =& $x120[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x120;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x121 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'ReferenceError', 55, 12, '<image>/03_function.js');
$_ReferenceError =& $x121[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x121;
$x122 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 12);
$x123 = $x122($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x123->class) && $x123->class === 'Error') {$x123->properties['file'] = '<image>/03_function.js';$x123->properties['line'] = 55;$x123->properties['column'] = 12;$x123->attributes['file'] = $x123->attributes['line'] = $x123->attributes['column'] = 0; }
throw new JSException($x123, 55, 12, '<image>/03_function.js');
}
$x118 = clone JS::$objectTemplate;
unset($x124, $W124, $S124, $U124);
$x125 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_NotImplementedError, (string) 'prototype', 55, 8, '<image>/03_function.js');
$x124 =& $x125[0]; list(,$W124,$S124,$U124) = $x125;
$x119 = $x124;
$x118->prototype = $x119;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x128 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 55, 8, '<image>/03_function.js');
$_TypeError =& $x128[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x128;
$x129 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 8);
$x130 = $x129($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x130->class) && $x130->class === 'Error') {$x130->properties['file'] = '<image>/03_function.js';$x130->properties['line'] = 55;$x130->properties['column'] = 8;$x130->attributes['file'] = $x130->attributes['line'] = $x130->attributes['column'] = 0; }
throw new JSException($x130, 55, 8, '<image>/03_function.js');
}
$x126 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 55, 8);
$x127 = $x126($global, $x118, $_NotImplementedError, array('Function.prototype.toString(): not implemented.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x119 = $x127;
if (is_object($x119) && $x119 !== JS::$undefined) { $x118 = $x119; }
if (isset($x118->class) && $x118->class === 'Error') {$x118->properties['file'] = '<image>/03_function.js';$x118->properties['line'] = 55;$x118->properties['column'] = 2;$x118->attributes['file'] = $x118->attributes['line'] = $x118->attributes['column'] = 0; }
throw new JSException($x118, 55, 2, '<image>/03_function.js');
;
return JS::$undefined;
}
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x120=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'NotImplementedError\',55,12,\'<image>/03_function.js\');$_NotImplementedError=&$x120[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x120;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x121=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'ReferenceError\',55,12,\'<image>/03_function.js\');$_ReferenceError=&$x121[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x121;$x122=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,12);$x123=$x122($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x123->class)&&$x123->class===\'Error\'){$x123->properties[\'file\']=\'<image>/03_function.js\';$x123->properties[\'line\']=55;$x123->properties[\'column\']=12;$x123->attributes[\'file\']=$x123->attributes[\'line\']=$x123->attributes[\'column\']=0;}throw new JSException($x123,55,12,\'<image>/03_function.js\');}$x118=clone JS::$objectTemplate;unset($x124,$W124,$S124,$U124);$x125=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_NotImplementedError,(string)\'prototype\',55,8,\'<image>/03_function.js\');$x124=&$x125[0];list(,$W124,$S124,$U124)=$x125;$x119=$x124;$x118->prototype=$x119;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x128=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'TypeError\',55,8,\'<image>/03_function.js\');$_TypeError=&$x128[0];list(,$WTypeError,$STypeError,$UTypeError)=$x128;$x129=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,8);$x130=$x129($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x130->class)&&$x130->class===\'Error\'){$x130->properties[\'file\']=\'<image>/03_function.js\';$x130->properties[\'line\']=55;$x130->properties[\'column\']=8;$x130->attributes[\'file\']=$x130->attributes[\'line\']=$x130->attributes[\'column\']=0;}throw new JSException($x130,55,8,\'<image>/03_function.js\');}$x126=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',55,8);$x127=$x126($global,$x118,$_NotImplementedError,array(\'Function.prototype.toString(): not implemented.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x119=$x127;if(is_object($x119)&&$x119!==JS::$undefined){$x118=$x119;}if(isset($x118->class)&&$x118->class===\'Error\'){$x118->properties[\'file\']=\'<image>/03_function.js\';$x118->properties[\'line\']=55;$x118->properties[\'column\']=2;$x118->attributes[\'file\']=$x118->attributes[\'line\']=$x118->attributes[\'column\']=0;}throw new JSException($x118,55,2,\'<image>/03_function.js\');return JS::$undefined;}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x143 =& $scope->properties['arguments'];
$x143->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x143->properties[$i] = $args[$i];
$x143->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x144 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x144, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x147 = $_thisArg;
$x147 = ($x147 === JS::$undefined ? 'undefined' : (is_int($x147) || is_float($x147) ? 'number' : (is_bool($x147) ? 'boolean' : (is_string($x147) ? 'string' : (is_object($x147) && isset($x147->call) ? 'function' : 'object')))));
$x146 = !(((gettype($x147) === gettype('object') && $x147 === 'object'))|| (((is_float($x147) || is_int($x147)) && (is_float('object') || is_int('object'))) && $x147 == 'object'));
$x145 = $x146;
if (JS::toBoolean($x145, $global)) {
$x149 = $_thisArg;
$x149 = ($x149 === JS::$undefined ? 'undefined' : (is_int($x149) || is_float($x149) ? 'number' : (is_bool($x149) ? 'boolean' : (is_string($x149) ? 'string' : (is_object($x149) && isset($x149->call) ? 'function' : 'object')))));
$x148 = !(((gettype($x149) === gettype('function') && $x149 === 'function'))|| (((is_float($x149) || is_int($x149)) && (is_float('function') || is_int('function'))) && $x149 == 'function'));
$x145 = $x148; }
if (JS::toBoolean($x145, $global)) {
$x150 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x150;;
};
};
$x151 = $_argArray;
if (!JS::toBoolean($x151, $global)) {
$x152 = clone JS::$arrayTemplate;
$x152->properties['length'] = 0;
$x152->attributes['length'] = JS::WRITABLE;
$x151 = $x152; }
if ($UargArray) {$global->properties['argArray'] = $_argArray; $_argArray =& $global->properties['argArray']; }
$_argArray = $x151;
$passArgs = array();
for ($x153 = 0;; ++$x153) {
if ($x153 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x154, $W154, $S154, $U154);
$x155 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_argArray, (string) 'length', 70, 30, '<image>/03_function.js');
$x154 =& $x155[0]; list(,$W154,$S154,$U154) = $x155;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x154;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x153 !== 0) {
$x156 = ++$_i;
}
$x157 = JS::toPrimitive($_i, $global);
$x158 = JS::toPrimitive($_l, $global);
$x159 = (is_string($x157) && is_string($x158) ? strcmp($x157, $x158) < 0 : (!is_nan($x160 = JS::toNumber($x157, $global)) && !is_nan($x161 = JS::toNumber($x158, $global)) && $x160 < $x161));
if (!JS::toBoolean($x159, $global)) { break; }

unset($x162, $W162, $S162, $U162);
$x163 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_argArray, (string) $_i, 71, 17, '<image>/03_function.js');
$x162 =& $x163[0]; list(,$W162,$S162,$U162) = $x163;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x162;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x143=&$scope->properties[\'arguments\'];$x143->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x143->properties[$i]=$args[$i];$x143->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$scope->properties[\'argArray\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_argArray=&$scope->properties[\'argArray\'];$UargArray=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x144=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x144,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x147=$_thisArg;$x147=($x147===JS::$undefined?\'undefined\':(is_int($x147)||is_float($x147)?\'number\':(is_bool($x147)?\'boolean\':(is_string($x147)?\'string\':(is_object($x147)&&isset($x147->call)?\'function\':\'object\')))));$x146=!(((gettype($x147)===gettype(\'object\')&&$x147===\'object\'))||(((is_float($x147)||is_int($x147))&&(is_float(\'object\')||is_int(\'object\')))&&$x147==\'object\'));$x145=$x146;if(JS::toBoolean($x145,$global)){$x149=$_thisArg;$x149=($x149===JS::$undefined?\'undefined\':(is_int($x149)||is_float($x149)?\'number\':(is_bool($x149)?\'boolean\':(is_string($x149)?\'string\':(is_object($x149)&&isset($x149->call)?\'function\':\'object\')))));$x148=!(((gettype($x149)===gettype(\'function\')&&$x149===\'function\'))||(((is_float($x149)||is_int($x149))&&(is_float(\'function\')||is_int(\'function\')))&&$x149==\'function\'));$x145=$x148;}if(JS::toBoolean($x145,$global)){$x150=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x150;}}$x151=$_argArray;if(!JS::toBoolean($x151,$global)){$x152=clone JS::$arrayTemplate;$x152->properties[\'length\']=0;$x152->attributes[\'length\']=JS::WRITABLE;$x151=$x152;}if($UargArray){$global->properties[\'argArray\']=$_argArray;$_argArray=&$global->properties[\'argArray\'];}$_argArray=$x151;$passArgs=array();for($x153=0;;++$x153){if($x153===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x154,$W154,$S154,$U154);$x155=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_argArray,(string)\'length\',70,30,\'<image>/03_function.js\');$x154=&$x155[0];list(,$W154,$S154,$U154)=$x155;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x154;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x153!==0){$x156=++$_i;}$x157=JS::toPrimitive($_i,$global);$x158=JS::toPrimitive($_l,$global);$x159=(is_string($x157)&&is_string($x158)?strcmp($x157,$x158)<0:(!is_nan($x160=JS::toNumber($x157,$global))&&!is_nan($x161=JS::toNumber($x158,$global))&&$x160<$x161));if(!JS::toBoolean($x159,$global)){break;}unset($x162,$W162,$S162,$U162);$x163=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_argArray,(string)$_i,71,17,\'<image>/03_function.js\');$x162=&$x163[0];list(,$W162,$S162,$U162)=$x163;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x162;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x177 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x177, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x180 = $_thisArg;
$x180 = ($x180 === JS::$undefined ? 'undefined' : (is_int($x180) || is_float($x180) ? 'number' : (is_bool($x180) ? 'boolean' : (is_string($x180) ? 'string' : (is_object($x180) && isset($x180->call) ? 'function' : 'object')))));
$x179 = !(((gettype($x180) === gettype('object') && $x180 === 'object'))|| (((is_float($x180) || is_int($x180)) && (is_float('object') || is_int('object'))) && $x180 == 'object'));
$x178 = $x179;
if (JS::toBoolean($x178, $global)) {
$x182 = $_thisArg;
$x182 = ($x182 === JS::$undefined ? 'undefined' : (is_int($x182) || is_float($x182) ? 'number' : (is_bool($x182) ? 'boolean' : (is_string($x182) ? 'string' : (is_object($x182) && isset($x182->call) ? 'function' : 'object')))));
$x181 = !(((gettype($x182) === gettype('function') && $x182 === 'function'))|| (((is_float($x182) || is_int($x182)) && (is_float('function') || is_int('function'))) && $x182 == 'function'));
$x178 = $x181; }
if (JS::toBoolean($x178, $global)) {
$x183 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x183;;
};
};
$passArgs = array();
for ($x184 = 0;; ++$x184) {
if ($x184 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x185 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'arguments', 90, 22, '<image>/03_function.js');
$_arguments =& $x185[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x185;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x186 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'ReferenceError', 90, 22, '<image>/03_function.js');
$_ReferenceError =& $x186[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x186;
$x187 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 90, 22);
$x188 = $x187($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error') {$x188->properties['file'] = '<image>/03_function.js';$x188->properties['line'] = 90;$x188->properties['column'] = 22;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 90, 22, '<image>/03_function.js');
}
unset($x189, $W189, $S189, $U189);
$x190 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) 'length', 90, 31, '<image>/03_function.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x189;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x184 !== 0) {
$x191 = ++$_i;
}
$x192 = JS::toPrimitive($_i, $global);
$x193 = JS::toPrimitive($_l, $global);
$x194 = (is_string($x192) && is_string($x193) ? strcmp($x192, $x193) < 0 : (!is_nan($x195 = JS::toNumber($x192, $global)) && !is_nan($x196 = JS::toNumber($x193, $global)) && $x195 < $x196));
if (!JS::toBoolean($x194, $global)) { break; }

unset($x197, $W197, $S197, $U197);
$x198 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) $_i, 91, 18, '<image>/03_function.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x197;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x176=&$scope->properties[\'arguments\'];$x176->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x176->properties[$i]=$args[$i];$x176->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x177=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x177,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x180=$_thisArg;$x180=($x180===JS::$undefined?\'undefined\':(is_int($x180)||is_float($x180)?\'number\':(is_bool($x180)?\'boolean\':(is_string($x180)?\'string\':(is_object($x180)&&isset($x180->call)?\'function\':\'object\')))));$x179=!(((gettype($x180)===gettype(\'object\')&&$x180===\'object\'))||(((is_float($x180)||is_int($x180))&&(is_float(\'object\')||is_int(\'object\')))&&$x180==\'object\'));$x178=$x179;if(JS::toBoolean($x178,$global)){$x182=$_thisArg;$x182=($x182===JS::$undefined?\'undefined\':(is_int($x182)||is_float($x182)?\'number\':(is_bool($x182)?\'boolean\':(is_string($x182)?\'string\':(is_object($x182)&&isset($x182->call)?\'function\':\'object\')))));$x181=!(((gettype($x182)===gettype(\'function\')&&$x182===\'function\'))||(((is_float($x182)||is_int($x182))&&(is_float(\'function\')||is_int(\'function\')))&&$x182==\'function\'));$x178=$x181;}if(JS::toBoolean($x178,$global)){$x183=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x183;}}$passArgs=array();for($x184=0;;++$x184){if($x184===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x185=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'arguments\',90,22,\'<image>/03_function.js\');$_arguments=&$x185[0];list(,$Warguments,$Sarguments,$Uarguments)=$x185;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x186=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'ReferenceError\',90,22,\'<image>/03_function.js\');$_ReferenceError=&$x186[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x186;$x187=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',90,22);$x188=$x187($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x188->class)&&$x188->class===\'Error\'){$x188->properties[\'file\']=\'<image>/03_function.js\';$x188->properties[\'line\']=90;$x188->properties[\'column\']=22;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,90,22,\'<image>/03_function.js\');}unset($x189,$W189,$S189,$U189);$x190=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)\'length\',90,31,\'<image>/03_function.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x189;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x184!==0){$x191=++$_i;}$x192=JS::toPrimitive($_i,$global);$x193=JS::toPrimitive($_l,$global);$x194=(is_string($x192)&&is_string($x193)?strcmp($x192,$x193)<0:(!is_nan($x195=JS::toNumber($x192,$global))&&!is_nan($x196=JS::toNumber($x193,$global))&&$x195<$x196));if(!JS::toBoolean($x194,$global)){break;}unset($x197,$W197,$S197,$U197);$x198=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)$_i,91,18,\'<image>/03_function.js\');$x197=&$x198[0];list(,$W197,$S197,$U197)=$x198;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x197;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x211 =& $scope->properties['arguments'];
$x211->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x211->properties[$i] = $args[$i];
$x211->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
for ($x212 = 0;; ++$x212) {
if ($x212 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x213 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'arguments', 105, 22, '<image>/03_function.js');
$_arguments =& $x213[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x213;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x214 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'ReferenceError', 105, 22, '<image>/03_function.js');
$_ReferenceError =& $x214[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x214;
$x215 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 105, 22);
$x216 = $x215($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x216->class) && $x216->class === 'Error') {$x216->properties['file'] = '<image>/03_function.js';$x216->properties['line'] = 105;$x216->properties['column'] = 22;$x216->attributes['file'] = $x216->attributes['line'] = $x216->attributes['column'] = 0; }
throw new JSException($x216, 105, 22, '<image>/03_function.js');
}
unset($x217, $W217, $S217, $U217);
$x218 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) 'length', 105, 31, '<image>/03_function.js');
$x217 =& $x218[0]; list(,$W217,$S217,$U217) = $x218;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x217;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x212 !== 0) {
$x219 = ++$_i;
}
$x220 = JS::toPrimitive($_i, $global);
$x221 = JS::toPrimitive($_l, $global);
$x222 = (is_string($x220) && is_string($x221) ? strcmp($x220, $x221) < 0 : (!is_nan($x223 = JS::toNumber($x220, $global)) && !is_nan($x224 = JS::toNumber($x221, $global)) && $x223 < $x224));
if (!JS::toBoolean($x222, $global)) { break; }

unset($x225, $W225, $S225, $U225);
$x226 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_arguments, (string) $_i, 106, 18, '<image>/03_function.js');
$x225 =& $x226[0]; list(,$W225,$S225,$U225) = $x226;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x225;
$boundArgs[] =$_arg;
unset($x227, $W227, $S227, $U227);
$x228 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_newFn, (string) 'length', 108, 10, '<image>/03_function.js');
$x227 =& $x228[0]; list(,$W227,$S227,$U227) = $x228;
$x229 = --$x227;;
};
$_newFn->boundArgs = $boundArgs;
return $_newFn;
;
return JS::$undefined;
}
echo 'function _214c3a55a69e575ec466cc235a0ef8f0_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x211=&$scope->properties[\'arguments\'];$x211->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x211->properties[$i]=$args[$i];$x211->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'newFn\']=JS::$undefined;$_newFn=&$scope->properties[\'newFn\'];$UnewFn=FALSE;$_newFn=clone$leThis;$_newFn->boundThis=$_thisArg;$boundArgs=isset($_newFn->boundArgs)?$_newFn->boundArgs:array();for($x212=0;;++$x212){if($x212===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x213=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'arguments\',105,22,\'<image>/03_function.js\');$_arguments=&$x213[0];list(,$Warguments,$Sarguments,$Uarguments)=$x213;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x214=_214c3a55a69e575ec466cc235a0ef8f0_2($global,$scope,$scope,(string)\'ReferenceError\',105,22,\'<image>/03_function.js\');$_ReferenceError=&$x214[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x214;$x215=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',105,22);$x216=$x215($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x216->class)&&$x216->class===\'Error\'){$x216->properties[\'file\']=\'<image>/03_function.js\';$x216->properties[\'line\']=105;$x216->properties[\'column\']=22;$x216->attributes[\'file\']=$x216->attributes[\'line\']=$x216->attributes[\'column\']=0;}throw new JSException($x216,105,22,\'<image>/03_function.js\');}unset($x217,$W217,$S217,$U217);$x218=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)\'length\',105,31,\'<image>/03_function.js\');$x217=&$x218[0];list(,$W217,$S217,$U217)=$x218;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x217;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x212!==0){$x219=++$_i;}$x220=JS::toPrimitive($_i,$global);$x221=JS::toPrimitive($_l,$global);$x222=(is_string($x220)&&is_string($x221)?strcmp($x220,$x221)<0:(!is_nan($x223=JS::toNumber($x220,$global))&&!is_nan($x224=JS::toNumber($x221,$global))&&$x223<$x224));if(!JS::toBoolean($x222,$global)){break;}unset($x225,$W225,$S225,$U225);$x226=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_arguments,(string)$_i,106,18,\'<image>/03_function.js\');$x225=&$x226[0];list(,$W225,$S225,$U225)=$x226;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x225;$boundArgs[]=$_arg;unset($x227,$W227,$S227,$U227);$x228=_214c3a55a69e575ec466cc235a0ef8f0_3($global,$scope,$_newFn,(string)\'length\',108,10,\'<image>/03_function.js\');$x227=&$x228[0];list(,$W227,$S227,$U227)=$x228;$x229=--$x227;}$_newFn->boundArgs=$boundArgs;return$_newFn;return JS::$undefined;}', "\n";
function _214c3a55a69e575ec466cc235a0ef8f0_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/03_function.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/03_function.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Function;
$_F;
$x85 = clone JS::$functionTemplate; $x85->call = '_214c3a55a69e575ec466cc235a0ef8f0_1'; $x85->parameters = array (
); $x85->name = 'Function'; $x85->scope = $scope; $x85->properties['prototype'] = clone JS::$objectTemplate; $x85->attributes['prototype'] = JS::WRITABLE; $x85->properties['prototype']->properties['constructor'] = $x85; $x85->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x85->properties['length'] = 0; $x85->attributes['length'] = 0;
$scope->properties['Function'] = JS::$undefined; $_Function =& $scope->properties['Function'];
$UFunction = FALSE;
$_Function = $x85;
$x88 = clone JS::$functionTemplate; $x88->call = '_214c3a55a69e575ec466cc235a0ef8f0_4'; $x88->parameters = array (
); $x88->name = 'F'; $x88->scope = $scope; $x88->properties['prototype'] = clone JS::$objectTemplate; $x88->attributes['prototype'] = JS::WRITABLE; $x88->properties['prototype']->properties['constructor'] = $x88; $x88->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x88->properties['length'] = 0; $x88->attributes['length'] = 0;
$scope->properties['F'] = JS::$undefined; $_F =& $scope->properties['F'];
$UF = FALSE;
$_F = $x88;
$_Function->class = 'Function';
if ($_Function === JS::$undefined || $_Function === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x89 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 40, 20, '<image>/03_function.js');
$_TypeError =& $x89[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x89;
$x90 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x91 = $x90($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x91->class) && $x91->class === 'Error') {$x91->properties['file'] = '<image>/03_function.js';$x91->properties['line'] = 40;$x91->properties['column'] = 20;$x91->attributes['file'] = $x91->attributes['line'] = $x91->attributes['column'] = 0; }
throw new JSException($x91, 40, 20, '<image>/03_function.js');
}
$_Function = JS::toObject($_Function, $global);
unset($x92, $W92, $S92, $U92);
$x96 = _214c3a55a69e575ec466cc235a0ef8f0_5($global, $scope, $_Function, (string) 'prototype', 40, 20, '<image>/03_function.js');
$x92 =& $x96[0]; list(,$W92,$S92,$U92) = $x96;
if ($U92 && (!isset($_Function->extensible) || $_Function->extensible)) {$_Function->properties['prototype'] = $x92; $x92 =& $_Function->properties['prototype']; $_Function->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U92 = FALSE; $W92 = TRUE; }
if (isset($S92)) {
$x98 = $S92->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x99 = $x98($global, $_Function, $S92, array($_Function->prototype), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x97 = $x99;
} else {
if (!$U92) {$x97 = $_Function->prototype;if ($W92) { $x92 = $_Function->prototype; }  }
else { $x97 = JS::$undefined; }
}
if (isset($_Function->class) && $_Function->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Function->properties['length']) { $_Function->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x100 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'Object', 41, 53, '<image>/03_function.js');
$_Object =& $x100[0]; list(,$WObject,$SObject,$UObject) = $x100;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x101 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'ReferenceError', 41, 53, '<image>/03_function.js');
$_ReferenceError =& $x101[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x101;
$x102 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 41, 53);
$x103 = $x102($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x103->class) && $x103->class === 'Error') {$x103->properties['file'] = '<image>/03_function.js';$x103->properties['line'] = 41;$x103->properties['column'] = 53;$x103->attributes['file'] = $x103->attributes['line'] = $x103->attributes['column'] = 0; }
throw new JSException($x103, 41, 53, '<image>/03_function.js');
}
$_Function->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Function->properties['prototype']->class = 'Function';
$_Function->properties['prototype']->extensible = TRUE;
unset($x104, $W104, $S104, $U104);
$x105 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_Function, (string) 'prototype', 44, 9, '<image>/03_function.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
if ($x104 === JS::$undefined || $x104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x106 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 44, 32, '<image>/03_function.js');
$_TypeError =& $x106[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x106;
$x107 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x108 = $x107($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x108->class) && $x108->class === 'Error') {$x108->properties['file'] = '<image>/03_function.js';$x108->properties['line'] = 44;$x108->properties['column'] = 32;$x108->attributes['file'] = $x108->attributes['line'] = $x108->attributes['column'] = 0; }
throw new JSException($x108, 44, 32, '<image>/03_function.js');
}
$x104 = JS::toObject($x104, $global);
unset($x109, $W109, $S109, $U109);
$x110 = _214c3a55a69e575ec466cc235a0ef8f0_5($global, $scope, $x104, (string) 'constructor', 44, 32, '<image>/03_function.js');
$x109 =& $x110[0]; list(,$W109,$S109,$U109) = $x110;
if ($U109 && (!isset($x104->extensible) || $x104->extensible)) {$x104->properties['constructor'] = $x109; $x109 =& $x104->properties['constructor']; $x104->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U109 = FALSE; $W109 = TRUE; }
if (isset($S109)) {
$x112 = $S109->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x113 = $x112($global, $x104, $S109, array($_Function), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x111 = $x113;
} else {
if (!$U109) {$x111 = $_Function;if ($W109) { $x109 = $_Function; }  }
else { $x111 = JS::$undefined; }
}
if (isset($x104->class) && $x104->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x104->properties['length']) { $x104->properties['length'] = 'constructor' + 1; };
$_Function->prototype->call =$_F->call;
for ($x115 = $scope; $x115 && $x115->up && !array_key_exists('F', $x115->attributes) && !array_key_exists('F', $x115->properties); $x115 = $x115->up);
if (!array_key_exists('F', $x115->attributes)) { unset($x115->properties['F'], $_F); $x114 = TRUE; }
else if ($x115->attributes['F'] & JS::CONFIGURABLE) { unset($x115->properties['F'], $x115->attributes['F'], $x115->getters['F'], $x115->setters['F'], $_F); $x114 = TRUE; }
else { $x114 = FALSE; };
$x131 = clone JS::$functionTemplate; $x131->call = '_214c3a55a69e575ec466cc235a0ef8f0_6'; $x131->parameters = array (
); $x131->scope = $scope; $x131->properties['prototype'] = clone JS::$objectTemplate; $x131->attributes['prototype'] = JS::WRITABLE; $x131->properties['prototype']->properties['constructor'] = $x131; $x131->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x131->properties['length'] = 0; $x131->attributes['length'] = 0;
unset($x132, $W132, $S132, $U132);
$x133 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_Function, (string) 'prototype', 54, 9, '<image>/03_function.js');
$x132 =& $x133[0]; list(,$W132,$S132,$U132) = $x133;
if ($x132 === JS::$undefined || $x132 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x134 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 54, 29, '<image>/03_function.js');
$_TypeError =& $x134[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x134;
$x135 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x136 = $x135($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x136->class) && $x136->class === 'Error') {$x136->properties['file'] = '<image>/03_function.js';$x136->properties['line'] = 54;$x136->properties['column'] = 29;$x136->attributes['file'] = $x136->attributes['line'] = $x136->attributes['column'] = 0; }
throw new JSException($x136, 54, 29, '<image>/03_function.js');
}
$x132 = JS::toObject($x132, $global);
unset($x137, $W137, $S137, $U137);
$x138 = _214c3a55a69e575ec466cc235a0ef8f0_5($global, $scope, $x132, (string) 'toString', 54, 29, '<image>/03_function.js');
$x137 =& $x138[0]; list(,$W137,$S137,$U137) = $x138;
if ($U137 && (!isset($x132->extensible) || $x132->extensible)) {$x132->properties['toString'] = $x137; $x137 =& $x132->properties['toString']; $x132->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U137 = FALSE; $W137 = TRUE; }
if (isset($S137)) {
$x140 = $S137->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x141 = $x140($global, $x132, $S137, array($x131), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x139 = $x141;
} else {
if (!$U137) {$x139 = $x131;if ($W137) { $x137 = $x131; }  }
else { $x139 = JS::$undefined; }
}
if (isset($x132->class) && $x132->class === 'Array' &&  is_int('toString') && 'toString' >= $x132->properties['length']) { $x132->properties['length'] = 'toString' + 1; };
$x164 = clone JS::$functionTemplate; $x164->call = '_214c3a55a69e575ec466cc235a0ef8f0_7'; $x164->parameters = array (
  0 => 'thisArg',
  1 => 'argArray',
); $x164->scope = $scope; $x164->properties['prototype'] = clone JS::$objectTemplate; $x164->attributes['prototype'] = JS::WRITABLE; $x164->properties['prototype']->properties['constructor'] = $x164; $x164->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x164->properties['length'] = 2; $x164->attributes['length'] = 0;
unset($x165, $W165, $S165, $U165);
$x166 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_Function, (string) 'prototype', 58, 9, '<image>/03_function.js');
$x165 =& $x166[0]; list(,$W165,$S165,$U165) = $x166;
if ($x165 === JS::$undefined || $x165 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x167 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 58, 26, '<image>/03_function.js');
$_TypeError =& $x167[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x167;
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 58, 26);
$x169 = $x168($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error') {$x169->properties['file'] = '<image>/03_function.js';$x169->properties['line'] = 58;$x169->properties['column'] = 26;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 58, 26, '<image>/03_function.js');
}
$x165 = JS::toObject($x165, $global);
unset($x170, $W170, $S170, $U170);
$x171 = _214c3a55a69e575ec466cc235a0ef8f0_5($global, $scope, $x165, (string) 'apply', 58, 26, '<image>/03_function.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
if ($U170 && (!isset($x165->extensible) || $x165->extensible)) {$x165->properties['apply'] = $x170; $x170 =& $x165->properties['apply']; $x165->attributes['apply'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U170 = FALSE; $W170 = TRUE; }
if (isset($S170)) {
$x173 = $S170->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 58, 26);
$x174 = $x173($global, $x165, $S170, array($x164), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x172 = $x174;
} else {
if (!$U170) {$x172 = $x164;if ($W170) { $x170 = $x164; }  }
else { $x172 = JS::$undefined; }
}
if (isset($x165->class) && $x165->class === 'Array' &&  is_int('apply') && 'apply' >= $x165->properties['length']) { $x165->properties['length'] = 'apply' + 1; };
$x199 = clone JS::$functionTemplate; $x199->call = '_214c3a55a69e575ec466cc235a0ef8f0_8'; $x199->parameters = array (
  0 => 'thisArg',
); $x199->scope = $scope; $x199->properties['prototype'] = clone JS::$objectTemplate; $x199->attributes['prototype'] = JS::WRITABLE; $x199->properties['prototype']->properties['constructor'] = $x199; $x199->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x199->properties['length'] = 1; $x199->attributes['length'] = 0;
unset($x200, $W200, $S200, $U200);
$x201 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_Function, (string) 'prototype', 79, 9, '<image>/03_function.js');
$x200 =& $x201[0]; list(,$W200,$S200,$U200) = $x201;
if ($x200 === JS::$undefined || $x200 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x202 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 79, 25, '<image>/03_function.js');
$_TypeError =& $x202[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x202;
$x203 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 79, 25);
$x204 = $x203($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x204->class) && $x204->class === 'Error') {$x204->properties['file'] = '<image>/03_function.js';$x204->properties['line'] = 79;$x204->properties['column'] = 25;$x204->attributes['file'] = $x204->attributes['line'] = $x204->attributes['column'] = 0; }
throw new JSException($x204, 79, 25, '<image>/03_function.js');
}
$x200 = JS::toObject($x200, $global);
unset($x205, $W205, $S205, $U205);
$x206 = _214c3a55a69e575ec466cc235a0ef8f0_5($global, $scope, $x200, (string) 'call', 79, 25, '<image>/03_function.js');
$x205 =& $x206[0]; list(,$W205,$S205,$U205) = $x206;
if ($U205 && (!isset($x200->extensible) || $x200->extensible)) {$x200->properties['call'] = $x205; $x205 =& $x200->properties['call']; $x200->attributes['call'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U205 = FALSE; $W205 = TRUE; }
if (isset($S205)) {
$x208 = $S205->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 79, 25);
$x209 = $x208($global, $x200, $S205, array($x199), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x207 = $x209;
} else {
if (!$U205) {$x207 = $x199;if ($W205) { $x205 = $x199; }  }
else { $x207 = JS::$undefined; }
}
if (isset($x200->class) && $x200->class === 'Array' &&  is_int('call') && 'call' >= $x200->properties['length']) { $x200->properties['length'] = 'call' + 1; };
$x230 = clone JS::$functionTemplate; $x230->call = '_214c3a55a69e575ec466cc235a0ef8f0_9'; $x230->parameters = array (
  0 => 'thisArg',
); $x230->scope = $scope; $x230->properties['prototype'] = clone JS::$objectTemplate; $x230->attributes['prototype'] = JS::WRITABLE; $x230->properties['prototype']->properties['constructor'] = $x230; $x230->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x230->properties['length'] = 1; $x230->attributes['length'] = 0;
unset($x231, $W231, $S231, $U231);
$x232 = _214c3a55a69e575ec466cc235a0ef8f0_3($global, $scope, $_Function, (string) 'prototype', 99, 9, '<image>/03_function.js');
$x231 =& $x232[0]; list(,$W231,$S231,$U231) = $x232;
if ($x231 === JS::$undefined || $x231 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x233 = _214c3a55a69e575ec466cc235a0ef8f0_2($global, $scope, $scope, (string) 'TypeError', 99, 25, '<image>/03_function.js');
$_TypeError =& $x233[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x233;
$x234 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 99, 25);
$x235 = $x234($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x235->class) && $x235->class === 'Error') {$x235->properties['file'] = '<image>/03_function.js';$x235->properties['line'] = 99;$x235->properties['column'] = 25;$x235->attributes['file'] = $x235->attributes['line'] = $x235->attributes['column'] = 0; }
throw new JSException($x235, 99, 25, '<image>/03_function.js');
}
$x231 = JS::toObject($x231, $global);
unset($x236, $W236, $S236, $U236);
$x237 = _214c3a55a69e575ec466cc235a0ef8f0_5($global, $scope, $x231, (string) 'bind', 99, 25, '<image>/03_function.js');
$x236 =& $x237[0]; list(,$W236,$S236,$U236) = $x237;
if ($U236 && (!isset($x231->extensible) || $x231->extensible)) {$x231->properties['bind'] = $x236; $x236 =& $x231->properties['bind']; $x231->attributes['bind'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U236 = FALSE; $W236 = TRUE; }
if (isset($S236)) {
$x239 = $S236->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 99, 25);
$x240 = $x239($global, $x231, $S236, array($x230), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x238 = $x240;
} else {
if (!$U236) {$x238 = $x230;if ($W236) { $x236 = $x230; }  }
else { $x238 = JS::$undefined; }
}
if (isset($x231->class) && $x231->class === 'Array' &&  is_int('bind') && 'bind' >= $x231->properties['length']) { $x231->properties['length'] = 'bind' + 1; };
;
return JS::$undefined;
}
