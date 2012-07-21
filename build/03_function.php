function _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x3=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x4=$x3($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x4;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x10[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x10;
$x11 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x12 = $x11($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x12->class) && $x12->class === 'Error' && !isset($x12->properties['file']) && !isset($x12->properties['line']) && !isset($x12->properties['column'])) {$x12->properties['file'] = $file;$x12->properties['line'] = $line;$x12->properties['column'] = $column;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
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
echo 'function _93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'&&!isset($x12->properties[\'file\'])&&!isset($x12->properties[\'line\'])&&!isset($x12->properties[\'column\'])){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x9=$x14;}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x5 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'arguments', 4, 6, '<image>/03_function.js');
$_arguments =& $x5[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x5;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x6 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'ReferenceError', 4, 6, '<image>/03_function.js');
$_ReferenceError =& $x6[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x6;
$x7 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 4, 6);
$x8 = $x7($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x8->class) && $x8->class === 'Error' && !isset($x8->properties['file']) && !isset($x8->properties['line']) && !isset($x8->properties['column'])) {$x8->properties['file'] = '<image>/03_function.js';$x8->properties['line'] = 4;$x8->properties['column'] = 6;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
throw new JSException($x8, 4, 6, '<image>/03_function.js');
}
unset($x9, $W9, $S9, $U9);
$x15 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) 'length', 4, 15, '<image>/03_function.js');
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
$x22 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) 'length', 5, 32, '<image>/03_function.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
$x18 = JS::toPrimitive($_i, $global);
$x19 = JS::toPrimitive((JS::toNumber($x21, $global) - JS::toNumber(1, $global)), $global);
$x20 = (is_string($x18) && is_string($x19) ? strcmp($x18, $x19) < 0 : (!is_nan($x23 = JS::toNumber($x18, $global)) && !is_nan($x24 = JS::toNumber($x19, $global)) && $x23 < $x24));
if (!JS::toBoolean($x20, $global)) { break; }

if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x26 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 6, 13, '<image>/03_function.js');
$_TypeError =& $x26[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x26;
$x27 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 6, 13);
$x28 = $x27($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x28->class) && $x28->class === 'Error' && !isset($x28->properties['file']) && !isset($x28->properties['line']) && !isset($x28->properties['column'])) {$x28->properties['file'] = '<image>/03_function.js';$x28->properties['line'] = 6;$x28->properties['column'] = 13;$x28->attributes['file'] = $x28->attributes['line'] = $x28->attributes['column'] = 0; }
throw new JSException($x28, 6, 13, '<image>/03_function.js');
}
$x25 = JS::toObject($_args, $global);
unset($x29, $W29, $S29, $U29);
$x30 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $x25, (string) 'push', 6, 13, '<image>/03_function.js');
$x29 =& $x30[0]; list(,$W29,$S29,$U29) = $x30;
unset($x31, $W31, $S31, $U31);
$x32 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) $_i, 6, 23, '<image>/03_function.js');
$x31 =& $x32[0]; list(,$W31,$S31,$U31) = $x32;
if (!(is_object($x29) && isset($x29->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 6, 13, '<image>/03_function.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 6, 13);
$x37 = $x36($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error' && !isset($x37->properties['file']) && !isset($x37->properties['line']) && !isset($x37->properties['column'])) {$x37->properties['file'] = '<image>/03_function.js';$x37->properties['line'] = 6;$x37->properties['column'] = 13;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 6, 13, '<image>/03_function.js');
}
$x33 = $x29->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 6, 13);
$x34 = $x33($global, $x25, $x29, array($x31), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x38, $W38, $S38, $U38);
$x39 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) 'length', 9, 29, '<image>/03_function.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
unset($x40, $W40, $S40, $U40);
$x41 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) (JS::toNumber($x38, $global) - JS::toNumber(1, $global)), 9, 19, '<image>/03_function.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
if ($Ubody) {$global->properties['body'] = $_body; $_body =& $global->properties['body']; }
$_body = $x40;;
};
if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x43 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 12, 18, '<image>/03_function.js');
$_TypeError =& $x43[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x43;
$x44 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 12, 18);
$x45 = $x44($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x45->class) && $x45->class === 'Error' && !isset($x45->properties['file']) && !isset($x45->properties['line']) && !isset($x45->properties['column'])) {$x45->properties['file'] = '<image>/03_function.js';$x45->properties['line'] = 12;$x45->properties['column'] = 18;$x45->attributes['file'] = $x45->attributes['line'] = $x45->attributes['column'] = 0; }
throw new JSException($x45, 12, 18, '<image>/03_function.js');
}
$x42 = JS::toObject($_args, $global);
unset($x46, $W46, $S46, $U46);
$x47 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $x42, (string) 'join', 12, 18, '<image>/03_function.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
if (!(is_object($x46) && isset($x46->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x50 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 12, 18, '<image>/03_function.js');
$_TypeError =& $x50[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x50;
$x51 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 12, 18);
$x52 = $x51($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x52->class) && $x52->class === 'Error' && !isset($x52->properties['file']) && !isset($x52->properties['line']) && !isset($x52->properties['column'])) {$x52->properties['file'] = '<image>/03_function.js';$x52->properties['line'] = 12;$x52->properties['column'] = 18;$x52->attributes['file'] = $x52->attributes['line'] = $x52->attributes['column'] = 0; }
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
$x64 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'SyntaxError', 21, 14, '<image>/03_function.js');
$_SyntaxError =& $x64[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x64;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x65 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'ReferenceError', 21, 14, '<image>/03_function.js');
$_ReferenceError =& $x65[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x65;
$x66 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 14);
$x67 = $x66($global, $global, $_ReferenceError, array('SyntaxError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x67->class) && $x67->class === 'Error' && !isset($x67->properties['file']) && !isset($x67->properties['line']) && !isset($x67->properties['column'])) {$x67->properties['file'] = '<image>/03_function.js';$x67->properties['line'] = 21;$x67->properties['column'] = 14;$x67->attributes['file'] = $x67->attributes['line'] = $x67->attributes['column'] = 0; }
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
$x79 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_SyntaxError, (string) 'prototype', 21, 10, '<image>/03_function.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
$x63 = $x78;
$x62->prototype = $x63;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x82 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 21, 10, '<image>/03_function.js');
$_TypeError =& $x82[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x82;
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 10);
$x84 = $x83($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x84->class) && $x84->class === 'Error' && !isset($x84->properties['file']) && !isset($x84->properties['line']) && !isset($x84->properties['column'])) {$x84->properties['file'] = '<image>/03_function.js';$x84->properties['line'] = 21;$x84->properties['column'] = 10;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 21, 10, '<image>/03_function.js');
}
$x80 = $_SyntaxError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 21, 10);
$x81 = $x80($global, $x62, $_SyntaxError, array((is_string($x68) || is_string($x69) ? JS::toString($x68, $global) . JS::toString($x69, $global) : JS::toNumber($x68, $global) + JS::toNumber($x69, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x63 = $x81;
if (is_object($x63) && $x63 !== JS::$undefined) { $x62 = $x63; }
if (isset($x62->class) && $x62->class === 'Error' && !isset($x62->properties['file']) && !isset($x62->properties['line']) && !isset($x62->properties['column'])) {$x62->properties['file'] = '<image>/03_function.js';$x62->properties['line'] = 21;$x62->properties['column'] = 4;$x62->attributes['file'] = $x62->attributes['line'] = $x62->attributes['column'] = 0; }
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
echo 'function _93306f3f2028cf0b1ede983954079a9e_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Function\']=$fn;$_Function=&$scope->properties[\'Function\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$arrayTemplate;$x2->properties[\'length\']=0;$x2->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'args\']=JS::$undefined;$_args=&$scope->properties[\'args\'];$Uargs=FALSE;$_args=$x2;$scope->properties[\'body\']=JS::$undefined;$_body=&$scope->properties[\'body\'];$Ubody=FALSE;$_body=\'\';$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x5=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'arguments\',4,6,\'<image>/03_function.js\');$_arguments=&$x5[0];list(,$Warguments,$Sarguments,$Uarguments)=$x5;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x6=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'ReferenceError\',4,6,\'<image>/03_function.js\');$_ReferenceError=&$x6[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x6;$x7=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',4,6);$x8=$x7($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'&&!isset($x8->properties[\'file\'])&&!isset($x8->properties[\'line\'])&&!isset($x8->properties[\'column\'])){$x8->properties[\'file\']=\'<image>/03_function.js\';$x8->properties[\'line\']=4;$x8->properties[\'column\']=6;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,4,6,\'<image>/03_function.js\');}unset($x9,$W9,$S9,$U9);$x15=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)\'length\',4,15,\'<image>/03_function.js\');$x9=&$x15[0];list(,$W9,$S9,$U9)=$x15;if(JS::toBoolean($x9,$global)){for($x16=0;;++$x16){if($x16===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x16!==0){$x17=++$_i;}unset($x21,$W21,$S21,$U21);$x22=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)\'length\',5,32,\'<image>/03_function.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;$x18=JS::toPrimitive($_i,$global);$x19=JS::toPrimitive((JS::toNumber($x21,$global)-JS::toNumber(1,$global)),$global);$x20=(is_string($x18)&&is_string($x19)?strcmp($x18,$x19)<0:(!is_nan($x23=JS::toNumber($x18,$global))&&!is_nan($x24=JS::toNumber($x19,$global))&&$x23<$x24));if(!JS::toBoolean($x20,$global)){break;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x26=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'TypeError\',6,13,\'<image>/03_function.js\');$_TypeError=&$x26[0];list(,$WTypeError,$STypeError,$UTypeError)=$x26;$x27=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x28=$x27($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x28->class)&&$x28->class===\'Error\'&&!isset($x28->properties[\'file\'])&&!isset($x28->properties[\'line\'])&&!isset($x28->properties[\'column\'])){$x28->properties[\'file\']=\'<image>/03_function.js\';$x28->properties[\'line\']=6;$x28->properties[\'column\']=13;$x28->attributes[\'file\']=$x28->attributes[\'line\']=$x28->attributes[\'column\']=0;}throw new JSException($x28,6,13,\'<image>/03_function.js\');}$x25=JS::toObject($_args,$global);unset($x29,$W29,$S29,$U29);$x30=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$x25,(string)\'push\',6,13,\'<image>/03_function.js\');$x29=&$x30[0];list(,$W29,$S29,$U29)=$x30;unset($x31,$W31,$S31,$U31);$x32=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)$_i,6,23,\'<image>/03_function.js\');$x31=&$x32[0];list(,$W31,$S31,$U31)=$x32;if(!(is_object($x29)&&isset($x29->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'TypeError\',6,13,\'<image>/03_function.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x37=$x36($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'&&!isset($x37->properties[\'file\'])&&!isset($x37->properties[\'line\'])&&!isset($x37->properties[\'column\'])){$x37->properties[\'file\']=\'<image>/03_function.js\';$x37->properties[\'line\']=6;$x37->properties[\'column\']=13;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,6,13,\'<image>/03_function.js\');}$x33=$x29->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x34=$x33($global,$x25,$x29,array($x31),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x38,$W38,$S38,$U38);$x39=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)\'length\',9,29,\'<image>/03_function.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;unset($x40,$W40,$S40,$U40);$x41=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)(JS::toNumber($x38,$global)-JS::toNumber(1,$global)),9,19,\'<image>/03_function.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;if($Ubody){$global->properties[\'body\']=$_body;$_body=&$global->properties[\'body\'];}$_body=$x40;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x43=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'TypeError\',12,18,\'<image>/03_function.js\');$_TypeError=&$x43[0];list(,$WTypeError,$STypeError,$UTypeError)=$x43;$x44=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x45=$x44($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x45->class)&&$x45->class===\'Error\'&&!isset($x45->properties[\'file\'])&&!isset($x45->properties[\'line\'])&&!isset($x45->properties[\'column\'])){$x45->properties[\'file\']=\'<image>/03_function.js\';$x45->properties[\'line\']=12;$x45->properties[\'column\']=18;$x45->attributes[\'file\']=$x45->attributes[\'line\']=$x45->attributes[\'column\']=0;}throw new JSException($x45,12,18,\'<image>/03_function.js\');}$x42=JS::toObject($_args,$global);unset($x46,$W46,$S46,$U46);$x47=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$x42,(string)\'join\',12,18,\'<image>/03_function.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;if(!(is_object($x46)&&isset($x46->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x50=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'TypeError\',12,18,\'<image>/03_function.js\');$_TypeError=&$x50[0];list(,$WTypeError,$STypeError,$UTypeError)=$x50;$x51=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x52=$x51($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x52->class)&&$x52->class===\'Error\'&&!isset($x52->properties[\'file\'])&&!isset($x52->properties[\'line\'])&&!isset($x52->properties[\'column\'])){$x52->properties[\'file\']=\'<image>/03_function.js\';$x52->properties[\'line\']=12;$x52->properties[\'column\']=18;$x52->attributes[\'file\']=$x52->attributes[\'line\']=$x52->attributes[\'column\']=0;}throw new JSException($x52,12,18,\'<image>/03_function.js\');}$x48=$x46->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x49=$x48($global,$x42,$x46,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uargs){$global->properties[\'args\']=$_args;$_args=&$global->properties[\'args\'];}$_args=$x49;$x59=JS::toPrimitive(\'return function(\',$global);$x60=JS::toPrimitive($_args,$global);$x57=JS::toPrimitive((is_string($x59)||is_string($x60)?JS::toString($x59,$global).JS::toString($x60,$global):JS::toNumber($x59,$global)+JS::toNumber($x60,$global)),$global);$x58=JS::toPrimitive(\'){\',$global);$x55=JS::toPrimitive((is_string($x57)||is_string($x58)?JS::toString($x57,$global).JS::toString($x58,$global):JS::toNumber($x57,$global)+JS::toNumber($x58,$global)),$global);$x56=JS::toPrimitive($_body,$global);$x53=JS::toPrimitive((is_string($x55)||is_string($x56)?JS::toString($x55,$global).JS::toString($x56,$global):JS::toNumber($x55,$global)+JS::toNumber($x56,$global)),$global);$x54=JS::toPrimitive(\'};\',$global);$x61=(is_string($x53)||is_string($x54)?JS::toString($x53,$global).JS::toString($x54,$global):JS::toNumber($x53,$global)+JS::toNumber($x54,$global));if($Ufn){$global->properties[\'fn\']=$_fn;$_fn=&$global->properties[\'fn\'];}$_fn=$x61;$parser=new JSParser;list($ok,$ast,$error)=$parser->__invoke(JS::toString($_fn,$global),array(\'file\'=>\'<Function>\'));if(!$ok){;unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x64=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'SyntaxError\',21,14,\'<image>/03_function.js\');$_SyntaxError=&$x64[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x64;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x65=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'ReferenceError\',21,14,\'<image>/03_function.js\');$_ReferenceError=&$x65[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x65;$x66=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,14);$x67=$x66($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x67->class)&&$x67->class===\'Error\'&&!isset($x67->properties[\'file\'])&&!isset($x67->properties[\'line\'])&&!isset($x67->properties[\'column\'])){$x67->properties[\'file\']=\'<image>/03_function.js\';$x67->properties[\'line\']=21;$x67->properties[\'column\']=14;$x67->attributes[\'file\']=$x67->attributes[\'line\']=$x67->attributes[\'column\']=0;}throw new JSException($x67,21,14,\'<image>/03_function.js\');}$x76=JS::toPrimitive(\'Function(): syntax error at \',$global);$x77=JS::toPrimitive($error->line,$global);$x74=JS::toPrimitive((is_string($x76)||is_string($x77)?JS::toString($x76,$global).JS::toString($x77,$global):JS::toNumber($x76,$global)+JS::toNumber($x77,$global)),$global);$x75=JS::toPrimitive(\':\',$global);$x72=JS::toPrimitive((is_string($x74)||is_string($x75)?JS::toString($x74,$global).JS::toString($x75,$global):JS::toNumber($x74,$global)+JS::toNumber($x75,$global)),$global);$x73=JS::toPrimitive($error->column,$global);$x70=JS::toPrimitive((is_string($x72)||is_string($x73)?JS::toString($x72,$global).JS::toString($x73,$global):JS::toNumber($x72,$global)+JS::toNumber($x73,$global)),$global);$x71=JS::toPrimitive(\', expected \',$global);$x68=JS::toPrimitive((is_string($x70)||is_string($x71)?JS::toString($x70,$global).JS::toString($x71,$global):JS::toNumber($x70,$global)+JS::toNumber($x71,$global)),$global);$x69=JS::toPrimitive(implode(\', \',$error->expected),$global);$x62=clone JS::$objectTemplate;unset($x78,$W78,$S78,$U78);$x79=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_SyntaxError,(string)\'prototype\',21,10,\'<image>/03_function.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;$x63=$x78;$x62->prototype=$x63;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x82=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'TypeError\',21,10,\'<image>/03_function.js\');$_TypeError=&$x82[0];list(,$WTypeError,$STypeError,$UTypeError)=$x82;$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'&&!isset($x84->properties[\'file\'])&&!isset($x84->properties[\'line\'])&&!isset($x84->properties[\'column\'])){$x84->properties[\'file\']=\'<image>/03_function.js\';$x84->properties[\'line\']=21;$x84->properties[\'column\']=10;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,21,10,\'<image>/03_function.js\');}$x80=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x81=$x80($global,$x62,$_SyntaxError,array((is_string($x68)||is_string($x69)?JS::toString($x68,$global).JS::toString($x69,$global):JS::toNumber($x68,$global)+JS::toNumber($x69,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x63=$x81;if(is_object($x63)&&$x63!==JS::$undefined){$x62=$x63;}if(isset($x62->class)&&$x62->class===\'Error\'&&!isset($x62->properties[\'file\'])&&!isset($x62->properties[\'line\'])&&!isset($x62->properties[\'column\'])){$x62->properties[\'file\']=\'<image>/03_function.js\';$x62->properties[\'line\']=21;$x62->properties[\'column\']=4;$x62->attributes[\'file\']=$x62->attributes[\'line\']=$x62->attributes[\'column\']=0;}throw new JSException($x62,21,4,\'<image>/03_function.js\');}$compiler=new JSCompiler;$code=$compiler->__invoke($ast);$entryPoint=eval($code);$fn=$entryPoint();$fn->scope=$global->scope[$global->scope_sp-1];return$fn;return JS::$undefined;}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_4($global, $leThis, $fn, $args, $constructor = FALSE) {

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
echo 'function _93306f3f2028cf0b1ede983954079a9e_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x87=&$scope->properties[\'arguments\'];$x87->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x87->properties[$i]=$args[$i];$x87->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'F\']=$fn;$_F=&$scope->properties[\'F\'];$global->scope[++$global->scope_sp]=$scope;return JS::$undefined;return JS::$undefined;}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
$x94 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x95 = $x94($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x95->class) && $x95->class === 'Error' && !isset($x95->properties['file']) && !isset($x95->properties['line']) && !isset($x95->properties['column'])) {$x95->properties['file'] = $file;$x95->properties['line'] = $line;$x95->properties['column'] = $column;$x95->attributes['file'] = $x95->attributes['line'] = $x95->attributes['column'] = 0; }
throw new JSException($x95, $line, $column, $file);
}
$W92 = $S92 = $U92 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x92 =& $lookup->properties[$id]; $W92 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S92 = $lookup->setters[$id]; }
else { $x92 = JS::$undefined; $U92 = TRUE; }
return array(&$x92, $W92, $S92, $U92);
}
echo 'function _93306f3f2028cf0b1ede983954079a9e_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x93=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x93[0];list(,$WTypeError,$STypeError,$UTypeError)=$x93;$x94=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x95=$x94($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x95->class)&&$x95->class===\'Error\'&&!isset($x95->properties[\'file\'])&&!isset($x95->properties[\'line\'])&&!isset($x95->properties[\'column\'])){$x95->properties[\'file\']=$file;$x95->properties[\'line\']=$line;$x95->properties[\'column\']=$column;$x95->attributes[\'file\']=$x95->attributes[\'line\']=$x95->attributes[\'column\']=0;}throw new JSException($x95,$line,$column,$file);}$W92=$S92=$U92=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x92=&$lookup->properties[$id];$W92=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S92=$lookup->setters[$id];}else{$x92=JS::$undefined;$U92=TRUE;}return array(&$x92,$W92,$S92,$U92);}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
if (JS::toBoolean(isset($leThis->string), $global)) {

return $leThis->string;;
};
return "function " . (isset($leThis->name) ? $leThis->name : "") .
		"(" . implode(",", $leThis->parameters) . "){ [native code] }";
;
return JS::$undefined;
}
echo 'function _93306f3f2028cf0b1ede983954079a9e_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(isset($leThis->string),$global)){return$leThis->string;}return"function ".(isset($leThis->name)?$leThis->name:"")."(".implode(",",$leThis->parameters)."){ [native code] }";return JS::$undefined;}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x130 =& $scope->properties['arguments'];
$x130->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x130->properties[$i] = $args[$i];
$x130->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x131 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x131, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x134 = $_thisArg;
$x134 = ($x134 === JS::$undefined ? 'undefined' : (is_int($x134) || is_float($x134) ? 'number' : (is_bool($x134) ? 'boolean' : (is_string($x134) ? 'string' : (is_object($x134) && isset($x134->call) ? 'function' : 'object')))));
$x133 = !(((gettype($x134) === gettype('object') && $x134 === 'object'))|| (((is_float($x134) || is_int($x134)) && (is_float('object') || is_int('object'))) && $x134 == 'object'));
$x132 = $x133;
if (JS::toBoolean($x132, $global)) {
$x136 = $_thisArg;
$x136 = ($x136 === JS::$undefined ? 'undefined' : (is_int($x136) || is_float($x136) ? 'number' : (is_bool($x136) ? 'boolean' : (is_string($x136) ? 'string' : (is_object($x136) && isset($x136->call) ? 'function' : 'object')))));
$x135 = !(((gettype($x136) === gettype('function') && $x136 === 'function'))|| (((is_float($x136) || is_int($x136)) && (is_float('function') || is_int('function'))) && $x136 == 'function'));
$x132 = $x135; }
if (JS::toBoolean($x132, $global)) {
$x137 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x137;;
};
};
$x138 = $_argArray;
if (!JS::toBoolean($x138, $global)) {
$x139 = clone JS::$arrayTemplate;
$x139->properties['length'] = 0;
$x139->attributes['length'] = JS::WRITABLE;
$x138 = $x139; }
if ($UargArray) {$global->properties['argArray'] = $_argArray; $_argArray =& $global->properties['argArray']; }
$_argArray = $x138;
$passArgs = array();
for ($x140 = 0;; ++$x140) {
if ($x140 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x141, $W141, $S141, $U141);
$x142 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_argArray, (string) 'length', 76, 30, '<image>/03_function.js');
$x141 =& $x142[0]; list(,$W141,$S141,$U141) = $x142;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x141;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x140 !== 0) {
$x143 = ++$_i;
}
$x144 = JS::toPrimitive($_i, $global);
$x145 = JS::toPrimitive($_l, $global);
$x146 = (is_string($x144) && is_string($x145) ? strcmp($x144, $x145) < 0 : (!is_nan($x147 = JS::toNumber($x144, $global)) && !is_nan($x148 = JS::toNumber($x145, $global)) && $x147 < $x148));
if (!JS::toBoolean($x146, $global)) { break; }

unset($x149, $W149, $S149, $U149);
$x150 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_argArray, (string) $_i, 77, 17, '<image>/03_function.js');
$x149 =& $x150[0]; list(,$W149,$S149,$U149) = $x150;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x149;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _93306f3f2028cf0b1ede983954079a9e_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x130=&$scope->properties[\'arguments\'];$x130->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x130->properties[$i]=$args[$i];$x130->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$scope->properties[\'argArray\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_argArray=&$scope->properties[\'argArray\'];$UargArray=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x131=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x131,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x134=$_thisArg;$x134=($x134===JS::$undefined?\'undefined\':(is_int($x134)||is_float($x134)?\'number\':(is_bool($x134)?\'boolean\':(is_string($x134)?\'string\':(is_object($x134)&&isset($x134->call)?\'function\':\'object\')))));$x133=!(((gettype($x134)===gettype(\'object\')&&$x134===\'object\'))||(((is_float($x134)||is_int($x134))&&(is_float(\'object\')||is_int(\'object\')))&&$x134==\'object\'));$x132=$x133;if(JS::toBoolean($x132,$global)){$x136=$_thisArg;$x136=($x136===JS::$undefined?\'undefined\':(is_int($x136)||is_float($x136)?\'number\':(is_bool($x136)?\'boolean\':(is_string($x136)?\'string\':(is_object($x136)&&isset($x136->call)?\'function\':\'object\')))));$x135=!(((gettype($x136)===gettype(\'function\')&&$x136===\'function\'))||(((is_float($x136)||is_int($x136))&&(is_float(\'function\')||is_int(\'function\')))&&$x136==\'function\'));$x132=$x135;}if(JS::toBoolean($x132,$global)){$x137=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x137;}}$x138=$_argArray;if(!JS::toBoolean($x138,$global)){$x139=clone JS::$arrayTemplate;$x139->properties[\'length\']=0;$x139->attributes[\'length\']=JS::WRITABLE;$x138=$x139;}if($UargArray){$global->properties[\'argArray\']=$_argArray;$_argArray=&$global->properties[\'argArray\'];}$_argArray=$x138;$passArgs=array();for($x140=0;;++$x140){if($x140===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x141,$W141,$S141,$U141);$x142=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_argArray,(string)\'length\',76,30,\'<image>/03_function.js\');$x141=&$x142[0];list(,$W141,$S141,$U141)=$x142;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x141;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x140!==0){$x143=++$_i;}$x144=JS::toPrimitive($_i,$global);$x145=JS::toPrimitive($_l,$global);$x146=(is_string($x144)&&is_string($x145)?strcmp($x144,$x145)<0:(!is_nan($x147=JS::toNumber($x144,$global))&&!is_nan($x148=JS::toNumber($x145,$global))&&$x147<$x148));if(!JS::toBoolean($x146,$global)){break;}unset($x149,$W149,$S149,$U149);$x150=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_argArray,(string)$_i,77,17,\'<image>/03_function.js\');$x149=&$x150[0];list(,$W149,$S149,$U149)=$x150;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x149;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x164 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x164, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x167 = $_thisArg;
$x167 = ($x167 === JS::$undefined ? 'undefined' : (is_int($x167) || is_float($x167) ? 'number' : (is_bool($x167) ? 'boolean' : (is_string($x167) ? 'string' : (is_object($x167) && isset($x167->call) ? 'function' : 'object')))));
$x166 = !(((gettype($x167) === gettype('object') && $x167 === 'object'))|| (((is_float($x167) || is_int($x167)) && (is_float('object') || is_int('object'))) && $x167 == 'object'));
$x165 = $x166;
if (JS::toBoolean($x165, $global)) {
$x169 = $_thisArg;
$x169 = ($x169 === JS::$undefined ? 'undefined' : (is_int($x169) || is_float($x169) ? 'number' : (is_bool($x169) ? 'boolean' : (is_string($x169) ? 'string' : (is_object($x169) && isset($x169->call) ? 'function' : 'object')))));
$x168 = !(((gettype($x169) === gettype('function') && $x169 === 'function'))|| (((is_float($x169) || is_int($x169)) && (is_float('function') || is_int('function'))) && $x169 == 'function'));
$x165 = $x168; }
if (JS::toBoolean($x165, $global)) {
$x170 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x170;;
};
};
$passArgs = array();
for ($x171 = 0;; ++$x171) {
if ($x171 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x172 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'arguments', 96, 22, '<image>/03_function.js');
$_arguments =& $x172[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x172;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x173 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'ReferenceError', 96, 22, '<image>/03_function.js');
$_ReferenceError =& $x173[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x173;
$x174 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 96, 22);
$x175 = $x174($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x175->class) && $x175->class === 'Error' && !isset($x175->properties['file']) && !isset($x175->properties['line']) && !isset($x175->properties['column'])) {$x175->properties['file'] = '<image>/03_function.js';$x175->properties['line'] = 96;$x175->properties['column'] = 22;$x175->attributes['file'] = $x175->attributes['line'] = $x175->attributes['column'] = 0; }
throw new JSException($x175, 96, 22, '<image>/03_function.js');
}
unset($x176, $W176, $S176, $U176);
$x177 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) 'length', 96, 31, '<image>/03_function.js');
$x176 =& $x177[0]; list(,$W176,$S176,$U176) = $x177;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x176;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x171 !== 0) {
$x178 = ++$_i;
}
$x179 = JS::toPrimitive($_i, $global);
$x180 = JS::toPrimitive($_l, $global);
$x181 = (is_string($x179) && is_string($x180) ? strcmp($x179, $x180) < 0 : (!is_nan($x182 = JS::toNumber($x179, $global)) && !is_nan($x183 = JS::toNumber($x180, $global)) && $x182 < $x183));
if (!JS::toBoolean($x181, $global)) { break; }

unset($x184, $W184, $S184, $U184);
$x185 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) $_i, 97, 18, '<image>/03_function.js');
$x184 =& $x185[0]; list(,$W184,$S184,$U184) = $x185;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x184;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _93306f3f2028cf0b1ede983954079a9e_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x163=&$scope->properties[\'arguments\'];$x163->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x163->properties[$i]=$args[$i];$x163->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x164=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x164,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x167=$_thisArg;$x167=($x167===JS::$undefined?\'undefined\':(is_int($x167)||is_float($x167)?\'number\':(is_bool($x167)?\'boolean\':(is_string($x167)?\'string\':(is_object($x167)&&isset($x167->call)?\'function\':\'object\')))));$x166=!(((gettype($x167)===gettype(\'object\')&&$x167===\'object\'))||(((is_float($x167)||is_int($x167))&&(is_float(\'object\')||is_int(\'object\')))&&$x167==\'object\'));$x165=$x166;if(JS::toBoolean($x165,$global)){$x169=$_thisArg;$x169=($x169===JS::$undefined?\'undefined\':(is_int($x169)||is_float($x169)?\'number\':(is_bool($x169)?\'boolean\':(is_string($x169)?\'string\':(is_object($x169)&&isset($x169->call)?\'function\':\'object\')))));$x168=!(((gettype($x169)===gettype(\'function\')&&$x169===\'function\'))||(((is_float($x169)||is_int($x169))&&(is_float(\'function\')||is_int(\'function\')))&&$x169==\'function\'));$x165=$x168;}if(JS::toBoolean($x165,$global)){$x170=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x170;}}$passArgs=array();for($x171=0;;++$x171){if($x171===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x172=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'arguments\',96,22,\'<image>/03_function.js\');$_arguments=&$x172[0];list(,$Warguments,$Sarguments,$Uarguments)=$x172;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x173=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'ReferenceError\',96,22,\'<image>/03_function.js\');$_ReferenceError=&$x173[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x173;$x174=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',96,22);$x175=$x174($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x175->class)&&$x175->class===\'Error\'&&!isset($x175->properties[\'file\'])&&!isset($x175->properties[\'line\'])&&!isset($x175->properties[\'column\'])){$x175->properties[\'file\']=\'<image>/03_function.js\';$x175->properties[\'line\']=96;$x175->properties[\'column\']=22;$x175->attributes[\'file\']=$x175->attributes[\'line\']=$x175->attributes[\'column\']=0;}throw new JSException($x175,96,22,\'<image>/03_function.js\');}unset($x176,$W176,$S176,$U176);$x177=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)\'length\',96,31,\'<image>/03_function.js\');$x176=&$x177[0];list(,$W176,$S176,$U176)=$x177;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x176;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x171!==0){$x178=++$_i;}$x179=JS::toPrimitive($_i,$global);$x180=JS::toPrimitive($_l,$global);$x181=(is_string($x179)&&is_string($x180)?strcmp($x179,$x180)<0:(!is_nan($x182=JS::toNumber($x179,$global))&&!is_nan($x183=JS::toNumber($x180,$global))&&$x182<$x183));if(!JS::toBoolean($x181,$global)){break;}unset($x184,$W184,$S184,$U184);$x185=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)$_i,97,18,\'<image>/03_function.js\');$x184=&$x185[0];list(,$W184,$S184,$U184)=$x185;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x184;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x198 =& $scope->properties['arguments'];
$x198->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x198->properties[$i] = $args[$i];
$x198->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
for ($x199 = 0;; ++$x199) {
if ($x199 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x200 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'arguments', 111, 22, '<image>/03_function.js');
$_arguments =& $x200[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x200;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x201 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'ReferenceError', 111, 22, '<image>/03_function.js');
$_ReferenceError =& $x201[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x201;
$x202 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 111, 22);
$x203 = $x202($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x203->class) && $x203->class === 'Error' && !isset($x203->properties['file']) && !isset($x203->properties['line']) && !isset($x203->properties['column'])) {$x203->properties['file'] = '<image>/03_function.js';$x203->properties['line'] = 111;$x203->properties['column'] = 22;$x203->attributes['file'] = $x203->attributes['line'] = $x203->attributes['column'] = 0; }
throw new JSException($x203, 111, 22, '<image>/03_function.js');
}
unset($x204, $W204, $S204, $U204);
$x205 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) 'length', 111, 31, '<image>/03_function.js');
$x204 =& $x205[0]; list(,$W204,$S204,$U204) = $x205;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x204;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x199 !== 0) {
$x206 = ++$_i;
}
$x207 = JS::toPrimitive($_i, $global);
$x208 = JS::toPrimitive($_l, $global);
$x209 = (is_string($x207) && is_string($x208) ? strcmp($x207, $x208) < 0 : (!is_nan($x210 = JS::toNumber($x207, $global)) && !is_nan($x211 = JS::toNumber($x208, $global)) && $x210 < $x211));
if (!JS::toBoolean($x209, $global)) { break; }

unset($x212, $W212, $S212, $U212);
$x213 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_arguments, (string) $_i, 112, 18, '<image>/03_function.js');
$x212 =& $x213[0]; list(,$W212,$S212,$U212) = $x213;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x212;
$boundArgs[] =$_arg;
unset($x214, $W214, $S214, $U214);
$x215 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_newFn, (string) 'length', 114, 10, '<image>/03_function.js');
$x214 =& $x215[0]; list(,$W214,$S214,$U214) = $x215;
$x216 = --$x214;;
};
$_newFn->boundArgs = $boundArgs;
return $_newFn;
;
return JS::$undefined;
}
echo 'function _93306f3f2028cf0b1ede983954079a9e_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x198=&$scope->properties[\'arguments\'];$x198->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x198->properties[$i]=$args[$i];$x198->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'newFn\']=JS::$undefined;$_newFn=&$scope->properties[\'newFn\'];$UnewFn=FALSE;$_newFn=clone$leThis;$_newFn->boundThis=$_thisArg;$boundArgs=isset($_newFn->boundArgs)?$_newFn->boundArgs:array();for($x199=0;;++$x199){if($x199===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x200=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'arguments\',111,22,\'<image>/03_function.js\');$_arguments=&$x200[0];list(,$Warguments,$Sarguments,$Uarguments)=$x200;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x201=_93306f3f2028cf0b1ede983954079a9e_2($global,$scope,$scope,(string)\'ReferenceError\',111,22,\'<image>/03_function.js\');$_ReferenceError=&$x201[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x201;$x202=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',111,22);$x203=$x202($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x203->class)&&$x203->class===\'Error\'&&!isset($x203->properties[\'file\'])&&!isset($x203->properties[\'line\'])&&!isset($x203->properties[\'column\'])){$x203->properties[\'file\']=\'<image>/03_function.js\';$x203->properties[\'line\']=111;$x203->properties[\'column\']=22;$x203->attributes[\'file\']=$x203->attributes[\'line\']=$x203->attributes[\'column\']=0;}throw new JSException($x203,111,22,\'<image>/03_function.js\');}unset($x204,$W204,$S204,$U204);$x205=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)\'length\',111,31,\'<image>/03_function.js\');$x204=&$x205[0];list(,$W204,$S204,$U204)=$x205;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x204;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x199!==0){$x206=++$_i;}$x207=JS::toPrimitive($_i,$global);$x208=JS::toPrimitive($_l,$global);$x209=(is_string($x207)&&is_string($x208)?strcmp($x207,$x208)<0:(!is_nan($x210=JS::toNumber($x207,$global))&&!is_nan($x211=JS::toNumber($x208,$global))&&$x210<$x211));if(!JS::toBoolean($x209,$global)){break;}unset($x212,$W212,$S212,$U212);$x213=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_arguments,(string)$_i,112,18,\'<image>/03_function.js\');$x212=&$x213[0];list(,$W212,$S212,$U212)=$x213;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x212;$boundArgs[]=$_arg;unset($x214,$W214,$S214,$U214);$x215=_93306f3f2028cf0b1ede983954079a9e_3($global,$scope,$_newFn,(string)\'length\',114,10,\'<image>/03_function.js\');$x214=&$x215[0];list(,$W214,$S214,$U214)=$x215;$x216=--$x214;}$_newFn->boundArgs=$boundArgs;return$_newFn;return JS::$undefined;}', "\n";
function _93306f3f2028cf0b1ede983954079a9e_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/03_function.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/03_function.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Function;
$_F;
$x85 = clone JS::$functionTemplate; $x85->call = '_93306f3f2028cf0b1ede983954079a9e_1'; $x85->parameters = array (
); $x85->name = 'Function'; $x85->scope = $scope; $x85->properties['prototype'] = clone JS::$objectTemplate; $x85->attributes['prototype'] = JS::WRITABLE; $x85->properties['prototype']->properties['constructor'] = $x85; $x85->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x85->properties['length'] = 0; $x85->attributes['length'] = 0;
$scope->properties['Function'] = JS::$undefined; $_Function =& $scope->properties['Function'];
$UFunction = FALSE;
$_Function = $x85;
$x88 = clone JS::$functionTemplate; $x88->call = '_93306f3f2028cf0b1ede983954079a9e_4'; $x88->parameters = array (
); $x88->name = 'F'; $x88->scope = $scope; $x88->properties['prototype'] = clone JS::$objectTemplate; $x88->attributes['prototype'] = JS::WRITABLE; $x88->properties['prototype']->properties['constructor'] = $x88; $x88->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x88->properties['length'] = 0; $x88->attributes['length'] = 0;
$scope->properties['F'] = JS::$undefined; $_F =& $scope->properties['F'];
$UF = FALSE;
$_F = $x88;
$_Function->class = 'Function';
if ($_Function === JS::$undefined || $_Function === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x89 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 40, 20, '<image>/03_function.js');
$_TypeError =& $x89[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x89;
$x90 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x91 = $x90($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x91->class) && $x91->class === 'Error' && !isset($x91->properties['file']) && !isset($x91->properties['line']) && !isset($x91->properties['column'])) {$x91->properties['file'] = '<image>/03_function.js';$x91->properties['line'] = 40;$x91->properties['column'] = 20;$x91->attributes['file'] = $x91->attributes['line'] = $x91->attributes['column'] = 0; }
throw new JSException($x91, 40, 20, '<image>/03_function.js');
}
$_Function = JS::toObject($_Function, $global);
unset($x92, $W92, $S92, $U92);
$x96 = _93306f3f2028cf0b1ede983954079a9e_5($global, $scope, $_Function, (string) 'prototype', 40, 20, '<image>/03_function.js');
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
$x100 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'Object', 41, 53, '<image>/03_function.js');
$_Object =& $x100[0]; list(,$WObject,$SObject,$UObject) = $x100;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x101 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'ReferenceError', 41, 53, '<image>/03_function.js');
$_ReferenceError =& $x101[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x101;
$x102 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 41, 53);
$x103 = $x102($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x103->class) && $x103->class === 'Error' && !isset($x103->properties['file']) && !isset($x103->properties['line']) && !isset($x103->properties['column'])) {$x103->properties['file'] = '<image>/03_function.js';$x103->properties['line'] = 41;$x103->properties['column'] = 53;$x103->attributes['file'] = $x103->attributes['line'] = $x103->attributes['column'] = 0; }
throw new JSException($x103, 41, 53, '<image>/03_function.js');
}
$_Function->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Function->properties['prototype']->class = 'Function';
$_Function->properties['prototype']->extensible = TRUE;
unset($x104, $W104, $S104, $U104);
$x105 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_Function, (string) 'prototype', 44, 9, '<image>/03_function.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
if ($x104 === JS::$undefined || $x104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x106 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 44, 32, '<image>/03_function.js');
$_TypeError =& $x106[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x106;
$x107 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x108 = $x107($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x108->class) && $x108->class === 'Error' && !isset($x108->properties['file']) && !isset($x108->properties['line']) && !isset($x108->properties['column'])) {$x108->properties['file'] = '<image>/03_function.js';$x108->properties['line'] = 44;$x108->properties['column'] = 32;$x108->attributes['file'] = $x108->attributes['line'] = $x108->attributes['column'] = 0; }
throw new JSException($x108, 44, 32, '<image>/03_function.js');
}
$x104 = JS::toObject($x104, $global);
unset($x109, $W109, $S109, $U109);
$x110 = _93306f3f2028cf0b1ede983954079a9e_5($global, $scope, $x104, (string) 'constructor', 44, 32, '<image>/03_function.js');
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
$x118 = clone JS::$functionTemplate; $x118->call = '_93306f3f2028cf0b1ede983954079a9e_6'; $x118->parameters = array (
); $x118->scope = $scope; $x118->properties['prototype'] = clone JS::$objectTemplate; $x118->attributes['prototype'] = JS::WRITABLE; $x118->properties['prototype']->properties['constructor'] = $x118; $x118->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x118->properties['length'] = 0; $x118->attributes['length'] = 0;
unset($x119, $W119, $S119, $U119);
$x120 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_Function, (string) 'prototype', 54, 9, '<image>/03_function.js');
$x119 =& $x120[0]; list(,$W119,$S119,$U119) = $x120;
if ($x119 === JS::$undefined || $x119 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x121 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 54, 29, '<image>/03_function.js');
$_TypeError =& $x121[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x121;
$x122 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x123 = $x122($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x123->class) && $x123->class === 'Error' && !isset($x123->properties['file']) && !isset($x123->properties['line']) && !isset($x123->properties['column'])) {$x123->properties['file'] = '<image>/03_function.js';$x123->properties['line'] = 54;$x123->properties['column'] = 29;$x123->attributes['file'] = $x123->attributes['line'] = $x123->attributes['column'] = 0; }
throw new JSException($x123, 54, 29, '<image>/03_function.js');
}
$x119 = JS::toObject($x119, $global);
unset($x124, $W124, $S124, $U124);
$x125 = _93306f3f2028cf0b1ede983954079a9e_5($global, $scope, $x119, (string) 'toString', 54, 29, '<image>/03_function.js');
$x124 =& $x125[0]; list(,$W124,$S124,$U124) = $x125;
if ($U124 && (!isset($x119->extensible) || $x119->extensible)) {$x119->properties['toString'] = $x124; $x124 =& $x119->properties['toString']; $x119->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U124 = FALSE; $W124 = TRUE; }
if (isset($S124)) {
$x127 = $S124->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x128 = $x127($global, $x119, $S124, array($x118), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x126 = $x128;
} else {
if (!$U124) {$x126 = $x118;if ($W124) { $x124 = $x118; }  }
else { $x126 = JS::$undefined; }
}
if (isset($x119->class) && $x119->class === 'Array' &&  is_int('toString') && 'toString' >= $x119->properties['length']) { $x119->properties['length'] = 'toString' + 1; };
$x151 = clone JS::$functionTemplate; $x151->call = '_93306f3f2028cf0b1ede983954079a9e_7'; $x151->parameters = array (
  0 => 'thisArg',
  1 => 'argArray',
); $x151->scope = $scope; $x151->properties['prototype'] = clone JS::$objectTemplate; $x151->attributes['prototype'] = JS::WRITABLE; $x151->properties['prototype']->properties['constructor'] = $x151; $x151->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x151->properties['length'] = 2; $x151->attributes['length'] = 0;
unset($x152, $W152, $S152, $U152);
$x153 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_Function, (string) 'prototype', 64, 9, '<image>/03_function.js');
$x152 =& $x153[0]; list(,$W152,$S152,$U152) = $x153;
if ($x152 === JS::$undefined || $x152 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x154 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 64, 26, '<image>/03_function.js');
$_TypeError =& $x154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x154;
$x155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 64, 26);
$x156 = $x155($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x156->class) && $x156->class === 'Error' && !isset($x156->properties['file']) && !isset($x156->properties['line']) && !isset($x156->properties['column'])) {$x156->properties['file'] = '<image>/03_function.js';$x156->properties['line'] = 64;$x156->properties['column'] = 26;$x156->attributes['file'] = $x156->attributes['line'] = $x156->attributes['column'] = 0; }
throw new JSException($x156, 64, 26, '<image>/03_function.js');
}
$x152 = JS::toObject($x152, $global);
unset($x157, $W157, $S157, $U157);
$x158 = _93306f3f2028cf0b1ede983954079a9e_5($global, $scope, $x152, (string) 'apply', 64, 26, '<image>/03_function.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
if ($U157 && (!isset($x152->extensible) || $x152->extensible)) {$x152->properties['apply'] = $x157; $x157 =& $x152->properties['apply']; $x152->attributes['apply'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U157 = FALSE; $W157 = TRUE; }
if (isset($S157)) {
$x160 = $S157->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 64, 26);
$x161 = $x160($global, $x152, $S157, array($x151), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x159 = $x161;
} else {
if (!$U157) {$x159 = $x151;if ($W157) { $x157 = $x151; }  }
else { $x159 = JS::$undefined; }
}
if (isset($x152->class) && $x152->class === 'Array' &&  is_int('apply') && 'apply' >= $x152->properties['length']) { $x152->properties['length'] = 'apply' + 1; };
$x186 = clone JS::$functionTemplate; $x186->call = '_93306f3f2028cf0b1ede983954079a9e_8'; $x186->parameters = array (
  0 => 'thisArg',
); $x186->scope = $scope; $x186->properties['prototype'] = clone JS::$objectTemplate; $x186->attributes['prototype'] = JS::WRITABLE; $x186->properties['prototype']->properties['constructor'] = $x186; $x186->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x186->properties['length'] = 1; $x186->attributes['length'] = 0;
unset($x187, $W187, $S187, $U187);
$x188 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_Function, (string) 'prototype', 85, 9, '<image>/03_function.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
if ($x187 === JS::$undefined || $x187 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x189 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 85, 25, '<image>/03_function.js');
$_TypeError =& $x189[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x189;
$x190 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 85, 25);
$x191 = $x190($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x191->class) && $x191->class === 'Error' && !isset($x191->properties['file']) && !isset($x191->properties['line']) && !isset($x191->properties['column'])) {$x191->properties['file'] = '<image>/03_function.js';$x191->properties['line'] = 85;$x191->properties['column'] = 25;$x191->attributes['file'] = $x191->attributes['line'] = $x191->attributes['column'] = 0; }
throw new JSException($x191, 85, 25, '<image>/03_function.js');
}
$x187 = JS::toObject($x187, $global);
unset($x192, $W192, $S192, $U192);
$x193 = _93306f3f2028cf0b1ede983954079a9e_5($global, $scope, $x187, (string) 'call', 85, 25, '<image>/03_function.js');
$x192 =& $x193[0]; list(,$W192,$S192,$U192) = $x193;
if ($U192 && (!isset($x187->extensible) || $x187->extensible)) {$x187->properties['call'] = $x192; $x192 =& $x187->properties['call']; $x187->attributes['call'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U192 = FALSE; $W192 = TRUE; }
if (isset($S192)) {
$x195 = $S192->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 85, 25);
$x196 = $x195($global, $x187, $S192, array($x186), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x194 = $x196;
} else {
if (!$U192) {$x194 = $x186;if ($W192) { $x192 = $x186; }  }
else { $x194 = JS::$undefined; }
}
if (isset($x187->class) && $x187->class === 'Array' &&  is_int('call') && 'call' >= $x187->properties['length']) { $x187->properties['length'] = 'call' + 1; };
$x217 = clone JS::$functionTemplate; $x217->call = '_93306f3f2028cf0b1ede983954079a9e_9'; $x217->parameters = array (
  0 => 'thisArg',
); $x217->scope = $scope; $x217->properties['prototype'] = clone JS::$objectTemplate; $x217->attributes['prototype'] = JS::WRITABLE; $x217->properties['prototype']->properties['constructor'] = $x217; $x217->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x217->properties['length'] = 1; $x217->attributes['length'] = 0;
unset($x218, $W218, $S218, $U218);
$x219 = _93306f3f2028cf0b1ede983954079a9e_3($global, $scope, $_Function, (string) 'prototype', 105, 9, '<image>/03_function.js');
$x218 =& $x219[0]; list(,$W218,$S218,$U218) = $x219;
if ($x218 === JS::$undefined || $x218 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x220 = _93306f3f2028cf0b1ede983954079a9e_2($global, $scope, $scope, (string) 'TypeError', 105, 25, '<image>/03_function.js');
$_TypeError =& $x220[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x220;
$x221 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 105, 25);
$x222 = $x221($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x222->class) && $x222->class === 'Error' && !isset($x222->properties['file']) && !isset($x222->properties['line']) && !isset($x222->properties['column'])) {$x222->properties['file'] = '<image>/03_function.js';$x222->properties['line'] = 105;$x222->properties['column'] = 25;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 105, 25, '<image>/03_function.js');
}
$x218 = JS::toObject($x218, $global);
unset($x223, $W223, $S223, $U223);
$x224 = _93306f3f2028cf0b1ede983954079a9e_5($global, $scope, $x218, (string) 'bind', 105, 25, '<image>/03_function.js');
$x223 =& $x224[0]; list(,$W223,$S223,$U223) = $x224;
if ($U223 && (!isset($x218->extensible) || $x218->extensible)) {$x218->properties['bind'] = $x223; $x223 =& $x218->properties['bind']; $x218->attributes['bind'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U223 = FALSE; $W223 = TRUE; }
if (isset($S223)) {
$x226 = $S223->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 105, 25);
$x227 = $x226($global, $x218, $S223, array($x217), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x225 = $x227;
} else {
if (!$U223) {$x225 = $x217;if ($W223) { $x223 = $x217; }  }
else { $x225 = JS::$undefined; }
}
if (isset($x218->class) && $x218->class === 'Array' &&  is_int('bind') && 'bind' >= $x218->properties['length']) { $x218->properties['length'] = 'bind' + 1; };
;
return JS::$undefined;
}
