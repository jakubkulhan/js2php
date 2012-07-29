function _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x3=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x4=$x3($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x4;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'&&!isset($x12->properties[\'file\'])&&!isset($x12->properties[\'line\'])&&!isset($x12->properties[\'column\'])){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x13=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x9=$x14;}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x5 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('arguments', $global), 4, 6, '<image>/03_function.js');
$_arguments =& $x5[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x5;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x6 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 4, 6, '<image>/03_function.js');
$_ReferenceError =& $x6[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x6;
$x7 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 4, 6);
$x8 = $x7($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x8->class) && $x8->class === 'Error' && !isset($x8->properties['file']) && !isset($x8->properties['line']) && !isset($x8->properties['column'])) {$x8->properties['file'] = '<image>/03_function.js';$x8->properties['line'] = 4;$x8->properties['column'] = 6;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
throw new JSException($x8, 4, 6, '<image>/03_function.js');
}
unset($x9, $W9, $S9, $U9);
$x15 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString('length', $global), 4, 15, '<image>/03_function.js');
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
$x22 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString('length', $global), 5, 32, '<image>/03_function.js');
$x21 =& $x22[0]; list(,$W21,$S21,$U21) = $x22;
$x18 = JS::toPrimitive($_i, $global);
$x19 = JS::toPrimitive((JS::toNumber($x21, $global) - JS::toNumber(1, $global)), $global);
$x20 = (is_string($x18) && is_string($x19) ? strcmp($x18, $x19) < 0 : (!is_nan($x23 = JS::toNumber($x18, $global)) && !is_nan($x24 = JS::toNumber($x19, $global)) && $x23 < $x24));
if (!JS::toBoolean($x20, $global)) { break; }

if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x26 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 6, 13, '<image>/03_function.js');
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
$x30 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $x25, JS::toString('push', $global), 6, 13, '<image>/03_function.js');
$x29 =& $x30[0]; list(,$W29,$S29,$U29) = $x30;
unset($x31, $W31, $S31, $U31);
$x32 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString($_i, $global), 6, 23, '<image>/03_function.js');
$x31 =& $x32[0]; list(,$W31,$S31,$U31) = $x32;
if (!(is_object($x29) && isset($x29->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 6, 13, '<image>/03_function.js');
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
$x39 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString('length', $global), 9, 29, '<image>/03_function.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
unset($x40, $W40, $S40, $U40);
$x41 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString((JS::toNumber($x38, $global) - JS::toNumber(1, $global)), $global), 9, 19, '<image>/03_function.js');
$x40 =& $x41[0]; list(,$W40,$S40,$U40) = $x41;
if ($Ubody) {$global->properties['body'] = $_body; $_body =& $global->properties['body']; }
$_body = $x40;;
};
if ($_args === JS::$undefined || $_args === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x43 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 12, 18, '<image>/03_function.js');
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
$x47 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $x42, JS::toString('join', $global), 12, 18, '<image>/03_function.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
if (!(is_object($x46) && isset($x46->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x50 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 12, 18, '<image>/03_function.js');
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
$x64 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('SyntaxError', $global), 21, 14, '<image>/03_function.js');
$_SyntaxError =& $x64[0]; list(,$WSyntaxError,$SSyntaxError,$USyntaxError) = $x64;
if ($USyntaxError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x65 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 21, 14, '<image>/03_function.js');
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
$x79 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_SyntaxError, JS::toString('prototype', $global), 21, 10, '<image>/03_function.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
$x63 = $x78;
$x62->prototype = $x63;
if (!(is_object($_SyntaxError) && isset($_SyntaxError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x82 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 21, 10, '<image>/03_function.js');
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
		$code = $compiler->__invoke($ast, array('loader' => JS::$loader));

		$entryPoint = eval($code);
		$fn = $entryPoint();

		$fn->scope = $global->scope[$global->scope_sp - 1];

		return $fn;
;
return JS::$undefined;
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'Function\']=$fn;$_Function=&$scope->properties[\'Function\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$arrayTemplate;$x2->properties[\'length\']=0;$x2->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'args\']=JS::$undefined;$_args=&$scope->properties[\'args\'];$Uargs=FALSE;$_args=$x2;$scope->properties[\'body\']=JS::$undefined;$_body=&$scope->properties[\'body\'];$Ubody=FALSE;$_body=\'\';$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=JS::$undefined;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x5=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'arguments\',$global),4,6,\'<image>/03_function.js\');$_arguments=&$x5[0];list(,$Warguments,$Sarguments,$Uarguments)=$x5;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x6=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),4,6,\'<image>/03_function.js\');$_ReferenceError=&$x6[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x6;$x7=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',4,6);$x8=$x7($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'&&!isset($x8->properties[\'file\'])&&!isset($x8->properties[\'line\'])&&!isset($x8->properties[\'column\'])){$x8->properties[\'file\']=\'<image>/03_function.js\';$x8->properties[\'line\']=4;$x8->properties[\'column\']=6;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,4,6,\'<image>/03_function.js\');}unset($x9,$W9,$S9,$U9);$x15=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString(\'length\',$global),4,15,\'<image>/03_function.js\');$x9=&$x15[0];list(,$W9,$S9,$U9)=$x15;if(JS::toBoolean($x9,$global)){for($x16=0;;++$x16){if($x16===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;}if($x16!==0){$x17=++$_i;}unset($x21,$W21,$S21,$U21);$x22=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString(\'length\',$global),5,32,\'<image>/03_function.js\');$x21=&$x22[0];list(,$W21,$S21,$U21)=$x22;$x18=JS::toPrimitive($_i,$global);$x19=JS::toPrimitive((JS::toNumber($x21,$global)-JS::toNumber(1,$global)),$global);$x20=(is_string($x18)&&is_string($x19)?strcmp($x18,$x19)<0:(!is_nan($x23=JS::toNumber($x18,$global))&&!is_nan($x24=JS::toNumber($x19,$global))&&$x23<$x24));if(!JS::toBoolean($x20,$global)){break;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x26=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),6,13,\'<image>/03_function.js\');$_TypeError=&$x26[0];list(,$WTypeError,$STypeError,$UTypeError)=$x26;$x27=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x28=$x27($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x28->class)&&$x28->class===\'Error\'&&!isset($x28->properties[\'file\'])&&!isset($x28->properties[\'line\'])&&!isset($x28->properties[\'column\'])){$x28->properties[\'file\']=\'<image>/03_function.js\';$x28->properties[\'line\']=6;$x28->properties[\'column\']=13;$x28->attributes[\'file\']=$x28->attributes[\'line\']=$x28->attributes[\'column\']=0;}throw new JSException($x28,6,13,\'<image>/03_function.js\');}$x25=JS::toObject($_args,$global);unset($x29,$W29,$S29,$U29);$x30=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$x25,JS::toString(\'push\',$global),6,13,\'<image>/03_function.js\');$x29=&$x30[0];list(,$W29,$S29,$U29)=$x30;unset($x31,$W31,$S31,$U31);$x32=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString($_i,$global),6,23,\'<image>/03_function.js\');$x31=&$x32[0];list(,$W31,$S31,$U31)=$x32;if(!(is_object($x29)&&isset($x29->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),6,13,\'<image>/03_function.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x37=$x36($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'&&!isset($x37->properties[\'file\'])&&!isset($x37->properties[\'line\'])&&!isset($x37->properties[\'column\'])){$x37->properties[\'file\']=\'<image>/03_function.js\';$x37->properties[\'line\']=6;$x37->properties[\'column\']=13;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,6,13,\'<image>/03_function.js\');}$x33=$x29->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',6,13);$x34=$x33($global,$x25,$x29,array($x31),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x38,$W38,$S38,$U38);$x39=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString(\'length\',$global),9,29,\'<image>/03_function.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;unset($x40,$W40,$S40,$U40);$x41=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString((JS::toNumber($x38,$global)-JS::toNumber(1,$global)),$global),9,19,\'<image>/03_function.js\');$x40=&$x41[0];list(,$W40,$S40,$U40)=$x41;if($Ubody){$global->properties[\'body\']=$_body;$_body=&$global->properties[\'body\'];}$_body=$x40;}if($_args===JS::$undefined||$_args===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x43=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,18,\'<image>/03_function.js\');$_TypeError=&$x43[0];list(,$WTypeError,$STypeError,$UTypeError)=$x43;$x44=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x45=$x44($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x45->class)&&$x45->class===\'Error\'&&!isset($x45->properties[\'file\'])&&!isset($x45->properties[\'line\'])&&!isset($x45->properties[\'column\'])){$x45->properties[\'file\']=\'<image>/03_function.js\';$x45->properties[\'line\']=12;$x45->properties[\'column\']=18;$x45->attributes[\'file\']=$x45->attributes[\'line\']=$x45->attributes[\'column\']=0;}throw new JSException($x45,12,18,\'<image>/03_function.js\');}$x42=JS::toObject($_args,$global);unset($x46,$W46,$S46,$U46);$x47=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$x42,JS::toString(\'join\',$global),12,18,\'<image>/03_function.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;if(!(is_object($x46)&&isset($x46->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x50=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,18,\'<image>/03_function.js\');$_TypeError=&$x50[0];list(,$WTypeError,$STypeError,$UTypeError)=$x50;$x51=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x52=$x51($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x52->class)&&$x52->class===\'Error\'&&!isset($x52->properties[\'file\'])&&!isset($x52->properties[\'line\'])&&!isset($x52->properties[\'column\'])){$x52->properties[\'file\']=\'<image>/03_function.js\';$x52->properties[\'line\']=12;$x52->properties[\'column\']=18;$x52->attributes[\'file\']=$x52->attributes[\'line\']=$x52->attributes[\'column\']=0;}throw new JSException($x52,12,18,\'<image>/03_function.js\');}$x48=$x46->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',12,18);$x49=$x48($global,$x42,$x46,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uargs){$global->properties[\'args\']=$_args;$_args=&$global->properties[\'args\'];}$_args=$x49;$x59=JS::toPrimitive(\'return function(\',$global);$x60=JS::toPrimitive($_args,$global);$x57=JS::toPrimitive((is_string($x59)||is_string($x60)?JS::toString($x59,$global).JS::toString($x60,$global):JS::toNumber($x59,$global)+JS::toNumber($x60,$global)),$global);$x58=JS::toPrimitive(\'){\',$global);$x55=JS::toPrimitive((is_string($x57)||is_string($x58)?JS::toString($x57,$global).JS::toString($x58,$global):JS::toNumber($x57,$global)+JS::toNumber($x58,$global)),$global);$x56=JS::toPrimitive($_body,$global);$x53=JS::toPrimitive((is_string($x55)||is_string($x56)?JS::toString($x55,$global).JS::toString($x56,$global):JS::toNumber($x55,$global)+JS::toNumber($x56,$global)),$global);$x54=JS::toPrimitive(\'};\',$global);$x61=(is_string($x53)||is_string($x54)?JS::toString($x53,$global).JS::toString($x54,$global):JS::toNumber($x53,$global)+JS::toNumber($x54,$global));if($Ufn){$global->properties[\'fn\']=$_fn;$_fn=&$global->properties[\'fn\'];}$_fn=$x61;$parser=new JSParser;list($ok,$ast,$error)=$parser->__invoke(JS::toString($_fn,$global),array(\'file\'=>\'<Function>\'));if(!$ok){;unset($_SyntaxError,$WSyntaxError,$SSyntaxError,$USyntaxError);$x64=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'SyntaxError\',$global),21,14,\'<image>/03_function.js\');$_SyntaxError=&$x64[0];list(,$WSyntaxError,$SSyntaxError,$USyntaxError)=$x64;if($USyntaxError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x65=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),21,14,\'<image>/03_function.js\');$_ReferenceError=&$x65[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x65;$x66=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,14);$x67=$x66($global,$global,$_ReferenceError,array(\'SyntaxError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x67->class)&&$x67->class===\'Error\'&&!isset($x67->properties[\'file\'])&&!isset($x67->properties[\'line\'])&&!isset($x67->properties[\'column\'])){$x67->properties[\'file\']=\'<image>/03_function.js\';$x67->properties[\'line\']=21;$x67->properties[\'column\']=14;$x67->attributes[\'file\']=$x67->attributes[\'line\']=$x67->attributes[\'column\']=0;}throw new JSException($x67,21,14,\'<image>/03_function.js\');}$x76=JS::toPrimitive(\'Function(): syntax error at \',$global);$x77=JS::toPrimitive($error->line,$global);$x74=JS::toPrimitive((is_string($x76)||is_string($x77)?JS::toString($x76,$global).JS::toString($x77,$global):JS::toNumber($x76,$global)+JS::toNumber($x77,$global)),$global);$x75=JS::toPrimitive(\':\',$global);$x72=JS::toPrimitive((is_string($x74)||is_string($x75)?JS::toString($x74,$global).JS::toString($x75,$global):JS::toNumber($x74,$global)+JS::toNumber($x75,$global)),$global);$x73=JS::toPrimitive($error->column,$global);$x70=JS::toPrimitive((is_string($x72)||is_string($x73)?JS::toString($x72,$global).JS::toString($x73,$global):JS::toNumber($x72,$global)+JS::toNumber($x73,$global)),$global);$x71=JS::toPrimitive(\', expected \',$global);$x68=JS::toPrimitive((is_string($x70)||is_string($x71)?JS::toString($x70,$global).JS::toString($x71,$global):JS::toNumber($x70,$global)+JS::toNumber($x71,$global)),$global);$x69=JS::toPrimitive(implode(\', \',$error->expected),$global);$x62=clone JS::$objectTemplate;unset($x78,$W78,$S78,$U78);$x79=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_SyntaxError,JS::toString(\'prototype\',$global),21,10,\'<image>/03_function.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;$x63=$x78;$x62->prototype=$x63;if(!(is_object($_SyntaxError)&&isset($_SyntaxError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x82=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),21,10,\'<image>/03_function.js\');$_TypeError=&$x82[0];list(,$WTypeError,$STypeError,$UTypeError)=$x82;$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'&&!isset($x84->properties[\'file\'])&&!isset($x84->properties[\'line\'])&&!isset($x84->properties[\'column\'])){$x84->properties[\'file\']=\'<image>/03_function.js\';$x84->properties[\'line\']=21;$x84->properties[\'column\']=10;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,21,10,\'<image>/03_function.js\');}$x80=$_SyntaxError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',21,10);$x81=$x80($global,$x62,$_SyntaxError,array((is_string($x68)||is_string($x69)?JS::toString($x68,$global).JS::toString($x69,$global):JS::toNumber($x68,$global)+JS::toNumber($x69,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x63=$x81;if(is_object($x63)&&$x63!==JS::$undefined){$x62=$x63;}if(isset($x62->class)&&$x62->class===\'Error\'&&!isset($x62->properties[\'file\'])&&!isset($x62->properties[\'line\'])&&!isset($x62->properties[\'column\'])){$x62->properties[\'file\']=\'<image>/03_function.js\';$x62->properties[\'line\']=21;$x62->properties[\'column\']=4;$x62->attributes[\'file\']=$x62->attributes[\'line\']=$x62->attributes[\'column\']=0;}throw new JSException($x62,21,4,\'<image>/03_function.js\');}$compiler=new JSCompiler;$code=$compiler->__invoke($ast,array(\'loader\'=>JS::$loader));$entryPoint=eval($code);$fn=$entryPoint();$fn->scope=$global->scope[$global->scope_sp-1];return$fn;return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_4($global, $leThis, $fn, $args, $constructor = FALSE) {

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
echo 'function _8cc783701129b82efc0bf45cf12c568e_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x87=&$scope->properties[\'arguments\'];$x87->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x87->properties[$i]=$args[$i];$x87->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'F\']=$fn;$_F=&$scope->properties[\'F\'];$global->scope[++$global->scope_sp]=$scope;return JS::$undefined;return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x94 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x94[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x94;
$x95 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x96 = $x95($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x96->class) && $x96->class === 'Error' && !isset($x96->properties['file']) && !isset($x96->properties['line']) && !isset($x96->properties['column'])) {$x96->properties['file'] = $file;$x96->properties['line'] = $line;$x96->properties['column'] = $column;$x96->attributes['file'] = $x96->attributes['line'] = $x96->attributes['column'] = 0; }
throw new JSException($x96, $line, $column, $file);
}
$W93 = $S93 = $U93 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x93 =& $lookup->properties[$id]; $W93 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S93 = $lookup->setters[$id]; }
else { $x93 = JS::$undefined; $U93 = TRUE; }
return array(&$x93, $W93, $S93, $U93);
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x94=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x94[0];list(,$WTypeError,$STypeError,$UTypeError)=$x94;$x95=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x96=$x95($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x96->class)&&$x96->class===\'Error\'&&!isset($x96->properties[\'file\'])&&!isset($x96->properties[\'line\'])&&!isset($x96->properties[\'column\'])){$x96->properties[\'file\']=$file;$x96->properties[\'line\']=$line;$x96->properties[\'column\']=$column;$x96->attributes[\'file\']=$x96->attributes[\'line\']=$x96->attributes[\'column\']=0;}throw new JSException($x96,$line,$column,$file);}$W93=$S93=$U93=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x93=&$lookup->properties[$id];$W93=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S93=$lookup->setters[$id];}else{$x93=JS::$undefined;$U93=TRUE;}return array(&$x93,$W93,$S93,$U93);}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x119 =& $scope->properties['arguments'];
$x119->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x119->properties[$i] = $args[$i];
$x119->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _8cc783701129b82efc0bf45cf12c568e_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x119=&$scope->properties[\'arguments\'];$x119->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x119->properties[$i]=$args[$i];$x119->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(isset($leThis->string),$global)){return$leThis->string;}return"function ".(isset($leThis->name)?$leThis->name:"")."(".implode(",",$leThis->parameters)."){ [native code] }";return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x133 =& $scope->properties['arguments'];
$x133->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x133->properties[$i] = $args[$i];
$x133->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x134 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x134, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x137 = $_thisArg;
$x137 = ($x137 === JS::$undefined ? 'undefined' : (is_int($x137) || is_float($x137) ? 'number' : (is_bool($x137) ? 'boolean' : (is_string($x137) ? 'string' : (is_object($x137) && isset($x137->call) ? 'function' : 'object')))));
$x136 = !(((gettype($x137) === gettype('object') && $x137 === 'object'))|| (((is_float($x137) || is_int($x137)) && (is_float('object') || is_int('object'))) && $x137 == 'object'));
$x135 = $x136;
if (JS::toBoolean($x135, $global)) {
$x139 = $_thisArg;
$x139 = ($x139 === JS::$undefined ? 'undefined' : (is_int($x139) || is_float($x139) ? 'number' : (is_bool($x139) ? 'boolean' : (is_string($x139) ? 'string' : (is_object($x139) && isset($x139->call) ? 'function' : 'object')))));
$x138 = !(((gettype($x139) === gettype('function') && $x139 === 'function'))|| (((is_float($x139) || is_int($x139)) && (is_float('function') || is_int('function'))) && $x139 == 'function'));
$x135 = $x138; }
if (JS::toBoolean($x135, $global)) {
$x140 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x140;;
};
};
$x141 = $_argArray;
if (!JS::toBoolean($x141, $global)) {
$x142 = clone JS::$arrayTemplate;
$x142->properties['length'] = 0;
$x142->attributes['length'] = JS::WRITABLE;
$x141 = $x142; }
if ($UargArray) {$global->properties['argArray'] = $_argArray; $_argArray =& $global->properties['argArray']; }
$_argArray = $x141;
$passArgs = array();
for ($x143 = 0;; ++$x143) {
if ($x143 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x144, $W144, $S144, $U144);
$x145 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_argArray, JS::toString('length', $global), 76, 30, '<image>/03_function.js');
$x144 =& $x145[0]; list(,$W144,$S144,$U144) = $x145;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x144;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x143 !== 0) {
$x146 = ++$_i;
}
$x147 = JS::toPrimitive($_i, $global);
$x148 = JS::toPrimitive($_l, $global);
$x149 = (is_string($x147) && is_string($x148) ? strcmp($x147, $x148) < 0 : (!is_nan($x150 = JS::toNumber($x147, $global)) && !is_nan($x151 = JS::toNumber($x148, $global)) && $x150 < $x151));
if (!JS::toBoolean($x149, $global)) { break; }

unset($x152, $W152, $S152, $U152);
$x153 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_argArray, JS::toString($_i, $global), 77, 17, '<image>/03_function.js');
$x152 =& $x153[0]; list(,$W152,$S152,$U152) = $x153;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x152;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x133=&$scope->properties[\'arguments\'];$x133->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x133->properties[$i]=$args[$i];$x133->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$scope->properties[\'argArray\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_argArray=&$scope->properties[\'argArray\'];$UargArray=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x134=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x134,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x137=$_thisArg;$x137=($x137===JS::$undefined?\'undefined\':(is_int($x137)||is_float($x137)?\'number\':(is_bool($x137)?\'boolean\':(is_string($x137)?\'string\':(is_object($x137)&&isset($x137->call)?\'function\':\'object\')))));$x136=!(((gettype($x137)===gettype(\'object\')&&$x137===\'object\'))||(((is_float($x137)||is_int($x137))&&(is_float(\'object\')||is_int(\'object\')))&&$x137==\'object\'));$x135=$x136;if(JS::toBoolean($x135,$global)){$x139=$_thisArg;$x139=($x139===JS::$undefined?\'undefined\':(is_int($x139)||is_float($x139)?\'number\':(is_bool($x139)?\'boolean\':(is_string($x139)?\'string\':(is_object($x139)&&isset($x139->call)?\'function\':\'object\')))));$x138=!(((gettype($x139)===gettype(\'function\')&&$x139===\'function\'))||(((is_float($x139)||is_int($x139))&&(is_float(\'function\')||is_int(\'function\')))&&$x139==\'function\'));$x135=$x138;}if(JS::toBoolean($x135,$global)){$x140=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x140;}}$x141=$_argArray;if(!JS::toBoolean($x141,$global)){$x142=clone JS::$arrayTemplate;$x142->properties[\'length\']=0;$x142->attributes[\'length\']=JS::WRITABLE;$x141=$x142;}if($UargArray){$global->properties[\'argArray\']=$_argArray;$_argArray=&$global->properties[\'argArray\'];}$_argArray=$x141;$passArgs=array();for($x143=0;;++$x143){if($x143===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x144,$W144,$S144,$U144);$x145=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_argArray,JS::toString(\'length\',$global),76,30,\'<image>/03_function.js\');$x144=&$x145[0];list(,$W144,$S144,$U144)=$x145;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x144;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x143!==0){$x146=++$_i;}$x147=JS::toPrimitive($_i,$global);$x148=JS::toPrimitive($_l,$global);$x149=(is_string($x147)&&is_string($x148)?strcmp($x147,$x148)<0:(!is_nan($x150=JS::toNumber($x147,$global))&&!is_nan($x151=JS::toNumber($x148,$global))&&$x150<$x151));if(!JS::toBoolean($x149,$global)){break;}unset($x152,$W152,$S152,$U152);$x153=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_argArray,JS::toString($_i,$global),77,17,\'<image>/03_function.js\');$x152=&$x153[0];list(,$W152,$S152,$U152)=$x153;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x152;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x167 =& $scope->properties['arguments'];
$x167->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x167->properties[$i] = $args[$i];
$x167->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x168 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x168, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x171 = $_thisArg;
$x171 = ($x171 === JS::$undefined ? 'undefined' : (is_int($x171) || is_float($x171) ? 'number' : (is_bool($x171) ? 'boolean' : (is_string($x171) ? 'string' : (is_object($x171) && isset($x171->call) ? 'function' : 'object')))));
$x170 = !(((gettype($x171) === gettype('object') && $x171 === 'object'))|| (((is_float($x171) || is_int($x171)) && (is_float('object') || is_int('object'))) && $x171 == 'object'));
$x169 = $x170;
if (JS::toBoolean($x169, $global)) {
$x173 = $_thisArg;
$x173 = ($x173 === JS::$undefined ? 'undefined' : (is_int($x173) || is_float($x173) ? 'number' : (is_bool($x173) ? 'boolean' : (is_string($x173) ? 'string' : (is_object($x173) && isset($x173->call) ? 'function' : 'object')))));
$x172 = !(((gettype($x173) === gettype('function') && $x173 === 'function'))|| (((is_float($x173) || is_int($x173)) && (is_float('function') || is_int('function'))) && $x173 == 'function'));
$x169 = $x172; }
if (JS::toBoolean($x169, $global)) {
$x174 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x174;;
};
};
$passArgs = array();
for ($x175 = 0;; ++$x175) {
if ($x175 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x176 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('arguments', $global), 96, 22, '<image>/03_function.js');
$_arguments =& $x176[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x176;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x177 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 96, 22, '<image>/03_function.js');
$_ReferenceError =& $x177[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x177;
$x178 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 96, 22);
$x179 = $x178($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x179->class) && $x179->class === 'Error' && !isset($x179->properties['file']) && !isset($x179->properties['line']) && !isset($x179->properties['column'])) {$x179->properties['file'] = '<image>/03_function.js';$x179->properties['line'] = 96;$x179->properties['column'] = 22;$x179->attributes['file'] = $x179->attributes['line'] = $x179->attributes['column'] = 0; }
throw new JSException($x179, 96, 22, '<image>/03_function.js');
}
unset($x180, $W180, $S180, $U180);
$x181 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString('length', $global), 96, 31, '<image>/03_function.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x180;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x175 !== 0) {
$x182 = ++$_i;
}
$x183 = JS::toPrimitive($_i, $global);
$x184 = JS::toPrimitive($_l, $global);
$x185 = (is_string($x183) && is_string($x184) ? strcmp($x183, $x184) < 0 : (!is_nan($x186 = JS::toNumber($x183, $global)) && !is_nan($x187 = JS::toNumber($x184, $global)) && $x186 < $x187));
if (!JS::toBoolean($x185, $global)) { break; }

unset($x188, $W188, $S188, $U188);
$x189 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString($_i, $global), 97, 18, '<image>/03_function.js');
$x188 =& $x189[0]; list(,$W188,$S188,$U188) = $x189;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x188;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x167=&$scope->properties[\'arguments\'];$x167->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x167->properties[$i]=$args[$i];$x167->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x168=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x168,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x171=$_thisArg;$x171=($x171===JS::$undefined?\'undefined\':(is_int($x171)||is_float($x171)?\'number\':(is_bool($x171)?\'boolean\':(is_string($x171)?\'string\':(is_object($x171)&&isset($x171->call)?\'function\':\'object\')))));$x170=!(((gettype($x171)===gettype(\'object\')&&$x171===\'object\'))||(((is_float($x171)||is_int($x171))&&(is_float(\'object\')||is_int(\'object\')))&&$x171==\'object\'));$x169=$x170;if(JS::toBoolean($x169,$global)){$x173=$_thisArg;$x173=($x173===JS::$undefined?\'undefined\':(is_int($x173)||is_float($x173)?\'number\':(is_bool($x173)?\'boolean\':(is_string($x173)?\'string\':(is_object($x173)&&isset($x173->call)?\'function\':\'object\')))));$x172=!(((gettype($x173)===gettype(\'function\')&&$x173===\'function\'))||(((is_float($x173)||is_int($x173))&&(is_float(\'function\')||is_int(\'function\')))&&$x173==\'function\'));$x169=$x172;}if(JS::toBoolean($x169,$global)){$x174=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x174;}}$passArgs=array();for($x175=0;;++$x175){if($x175===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x176=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'arguments\',$global),96,22,\'<image>/03_function.js\');$_arguments=&$x176[0];list(,$Warguments,$Sarguments,$Uarguments)=$x176;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x177=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),96,22,\'<image>/03_function.js\');$_ReferenceError=&$x177[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x177;$x178=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',96,22);$x179=$x178($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x179->class)&&$x179->class===\'Error\'&&!isset($x179->properties[\'file\'])&&!isset($x179->properties[\'line\'])&&!isset($x179->properties[\'column\'])){$x179->properties[\'file\']=\'<image>/03_function.js\';$x179->properties[\'line\']=96;$x179->properties[\'column\']=22;$x179->attributes[\'file\']=$x179->attributes[\'line\']=$x179->attributes[\'column\']=0;}throw new JSException($x179,96,22,\'<image>/03_function.js\');}unset($x180,$W180,$S180,$U180);$x181=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString(\'length\',$global),96,31,\'<image>/03_function.js\');$x180=&$x181[0];list(,$W180,$S180,$U180)=$x181;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x180;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x175!==0){$x182=++$_i;}$x183=JS::toPrimitive($_i,$global);$x184=JS::toPrimitive($_l,$global);$x185=(is_string($x183)&&is_string($x184)?strcmp($x183,$x184)<0:(!is_nan($x186=JS::toNumber($x183,$global))&&!is_nan($x187=JS::toNumber($x184,$global))&&$x186<$x187));if(!JS::toBoolean($x185,$global)){break;}unset($x188,$W188,$S188,$U188);$x189=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString($_i,$global),97,18,\'<image>/03_function.js\');$x188=&$x189[0];list(,$W188,$S188,$U188)=$x189;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x188;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x203 =& $scope->properties['arguments'];
$x203->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x203->properties[$i] = $args[$i];
$x203->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
for ($x204 = 0;; ++$x204) {
if ($x204 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x205 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('arguments', $global), 111, 22, '<image>/03_function.js');
$_arguments =& $x205[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x205;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x206 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 111, 22, '<image>/03_function.js');
$_ReferenceError =& $x206[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x206;
$x207 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 111, 22);
$x208 = $x207($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x208->class) && $x208->class === 'Error' && !isset($x208->properties['file']) && !isset($x208->properties['line']) && !isset($x208->properties['column'])) {$x208->properties['file'] = '<image>/03_function.js';$x208->properties['line'] = 111;$x208->properties['column'] = 22;$x208->attributes['file'] = $x208->attributes['line'] = $x208->attributes['column'] = 0; }
throw new JSException($x208, 111, 22, '<image>/03_function.js');
}
unset($x209, $W209, $S209, $U209);
$x210 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString('length', $global), 111, 31, '<image>/03_function.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x209;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x204 !== 0) {
$x211 = ++$_i;
}
$x212 = JS::toPrimitive($_i, $global);
$x213 = JS::toPrimitive($_l, $global);
$x214 = (is_string($x212) && is_string($x213) ? strcmp($x212, $x213) < 0 : (!is_nan($x215 = JS::toNumber($x212, $global)) && !is_nan($x216 = JS::toNumber($x213, $global)) && $x215 < $x216));
if (!JS::toBoolean($x214, $global)) { break; }

unset($x217, $W217, $S217, $U217);
$x218 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString($_i, $global), 112, 18, '<image>/03_function.js');
$x217 =& $x218[0]; list(,$W217,$S217,$U217) = $x218;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x217;
$boundArgs[] =$_arg;
unset($x219, $W219, $S219, $U219);
$x220 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_newFn, JS::toString('length', $global), 114, 10, '<image>/03_function.js');
$x219 =& $x220[0]; list(,$W219,$S219,$U219) = $x220;
$x221 = --$x219;;
};
$_newFn->boundArgs = $boundArgs;
return $_newFn;
;
return JS::$undefined;
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x203=&$scope->properties[\'arguments\'];$x203->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x203->properties[$i]=$args[$i];$x203->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'newFn\']=JS::$undefined;$_newFn=&$scope->properties[\'newFn\'];$UnewFn=FALSE;$_newFn=clone$leThis;$_newFn->boundThis=$_thisArg;$boundArgs=isset($_newFn->boundArgs)?$_newFn->boundArgs:array();for($x204=0;;++$x204){if($x204===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x205=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'arguments\',$global),111,22,\'<image>/03_function.js\');$_arguments=&$x205[0];list(,$Warguments,$Sarguments,$Uarguments)=$x205;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x206=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),111,22,\'<image>/03_function.js\');$_ReferenceError=&$x206[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x206;$x207=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',111,22);$x208=$x207($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x208->class)&&$x208->class===\'Error\'&&!isset($x208->properties[\'file\'])&&!isset($x208->properties[\'line\'])&&!isset($x208->properties[\'column\'])){$x208->properties[\'file\']=\'<image>/03_function.js\';$x208->properties[\'line\']=111;$x208->properties[\'column\']=22;$x208->attributes[\'file\']=$x208->attributes[\'line\']=$x208->attributes[\'column\']=0;}throw new JSException($x208,111,22,\'<image>/03_function.js\');}unset($x209,$W209,$S209,$U209);$x210=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString(\'length\',$global),111,31,\'<image>/03_function.js\');$x209=&$x210[0];list(,$W209,$S209,$U209)=$x210;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x209;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x204!==0){$x211=++$_i;}$x212=JS::toPrimitive($_i,$global);$x213=JS::toPrimitive($_l,$global);$x214=(is_string($x212)&&is_string($x213)?strcmp($x212,$x213)<0:(!is_nan($x215=JS::toNumber($x212,$global))&&!is_nan($x216=JS::toNumber($x213,$global))&&$x215<$x216));if(!JS::toBoolean($x214,$global)){break;}unset($x217,$W217,$S217,$U217);$x218=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString($_i,$global),112,18,\'<image>/03_function.js\');$x217=&$x218[0];list(,$W217,$S217,$U217)=$x218;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x217;$boundArgs[]=$_arg;unset($x219,$W219,$S219,$U219);$x220=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_newFn,JS::toString(\'length\',$global),114,10,\'<image>/03_function.js\');$x219=&$x220[0];list(,$W219,$S219,$U219)=$x220;$x221=--$x219;}$_newFn->boundArgs=$boundArgs;return$_newFn;return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/03_function.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/03_function.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Function;
$_F;
$x85 = clone JS::$functionTemplate; $x85->call = '_8cc783701129b82efc0bf45cf12c568e_1'; $x85->parameters = array (
); $x85->name = 'Function'; $x85->scope = $scope; $x85->properties['prototype'] = clone JS::$objectTemplate; $x85->attributes['prototype'] = JS::WRITABLE; $x85->properties['prototype']->properties['constructor'] = $x85; $x85->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x85->properties['length'] = 0; $x85->attributes['length'] = 0;
$scope->properties['Function'] = JS::$undefined; $_Function =& $scope->properties['Function'];
$UFunction = FALSE;
$_Function = $x85;
$x88 = clone JS::$functionTemplate; $x88->call = '_8cc783701129b82efc0bf45cf12c568e_4'; $x88->parameters = array (
); $x88->name = 'F'; $x88->scope = $scope; $x88->properties['prototype'] = clone JS::$objectTemplate; $x88->attributes['prototype'] = JS::WRITABLE; $x88->properties['prototype']->properties['constructor'] = $x88; $x88->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x88->properties['length'] = 0; $x88->attributes['length'] = 0;
$scope->properties['F'] = JS::$undefined; $_F =& $scope->properties['F'];
$UF = FALSE;
$_F = $x88;
$_Function->class = 'Function';
$x89 = JS::toString('prototype', $global);
if ($_Function === JS::$undefined || $_Function === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x90 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 40, 20, '<image>/03_function.js');
$_TypeError =& $x90[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x90;
$x91 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x92 = $x91($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x92->class) && $x92->class === 'Error' && !isset($x92->properties['file']) && !isset($x92->properties['line']) && !isset($x92->properties['column'])) {$x92->properties['file'] = '<image>/03_function.js';$x92->properties['line'] = 40;$x92->properties['column'] = 20;$x92->attributes['file'] = $x92->attributes['line'] = $x92->attributes['column'] = 0; }
throw new JSException($x92, 40, 20, '<image>/03_function.js');
}
$_Function = JS::toObject($_Function, $global);
unset($x93, $W93, $S93, $U93);
$x97 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $_Function, JS::toString($x89, $global), 40, 20, '<image>/03_function.js');
$x93 =& $x97[0]; list(,$W93,$S93,$U93) = $x97;
if ($U93 && (!isset($_Function->extensible) || $_Function->extensible)) {$_Function->properties[$x89] = $x93; $x93 =& $_Function->properties[$x89]; $_Function->attributes[$x89] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U93 = FALSE; $W93 = TRUE; }
if (isset($S93)) {
$x99 = $S93->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x100 = $x99($global, $_Function, $S93, array($_Function->prototype), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x98 = $x100;
} else {
if (!$U93) {$x98 = $_Function->prototype;if ($W93) { $x93 = $_Function->prototype; }  }
else { $x98 = JS::$undefined; }
}
if (isset($_Function->class) && $_Function->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Function->properties['length']) { $_Function->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x101 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('Object', $global), 41, 53, '<image>/03_function.js');
$_Object =& $x101[0]; list(,$WObject,$SObject,$UObject) = $x101;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x102 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 41, 53, '<image>/03_function.js');
$_ReferenceError =& $x102[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x102;
$x103 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 41, 53);
$x104 = $x103($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/03_function.js';$x104->properties['line'] = 41;$x104->properties['column'] = 53;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 41, 53, '<image>/03_function.js');
}
$_Function->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Function->properties['prototype']->class = 'Function';
$_Function->properties['prototype']->extensible = TRUE;
unset($x105, $W105, $S105, $U105);
$x106 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 44, 9, '<image>/03_function.js');
$x105 =& $x106[0]; list(,$W105,$S105,$U105) = $x106;
$x107 = JS::toString('constructor', $global);
if ($x105 === JS::$undefined || $x105 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x108 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 44, 32, '<image>/03_function.js');
$_TypeError =& $x108[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x108;
$x109 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x110 = $x109($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x110->class) && $x110->class === 'Error' && !isset($x110->properties['file']) && !isset($x110->properties['line']) && !isset($x110->properties['column'])) {$x110->properties['file'] = '<image>/03_function.js';$x110->properties['line'] = 44;$x110->properties['column'] = 32;$x110->attributes['file'] = $x110->attributes['line'] = $x110->attributes['column'] = 0; }
throw new JSException($x110, 44, 32, '<image>/03_function.js');
}
$x105 = JS::toObject($x105, $global);
unset($x111, $W111, $S111, $U111);
$x112 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x105, JS::toString($x107, $global), 44, 32, '<image>/03_function.js');
$x111 =& $x112[0]; list(,$W111,$S111,$U111) = $x112;
if ($U111 && (!isset($x105->extensible) || $x105->extensible)) {$x105->properties[$x107] = $x111; $x111 =& $x105->properties[$x107]; $x105->attributes[$x107] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U111 = FALSE; $W111 = TRUE; }
if (isset($S111)) {
$x114 = $S111->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x115 = $x114($global, $x105, $S111, array($_Function), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x113 = $x115;
} else {
if (!$U111) {$x113 = $_Function;if ($W111) { $x111 = $_Function; }  }
else { $x113 = JS::$undefined; }
}
if (isset($x105->class) && $x105->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x105->properties['length']) { $x105->properties['length'] = 'constructor' + 1; };
$_Function->prototype->call =$_F->call;
for ($x117 = $scope; $x117 && $x117->up && !array_key_exists('F', $x117->attributes) && !array_key_exists('F', $x117->properties); $x117 = $x117->up);
if (!array_key_exists('F', $x117->attributes)) { unset($x117->properties['F'], $_F); $x116 = TRUE; }
else if ($x117->attributes['F'] & JS::CONFIGURABLE) { unset($x117->properties['F'], $x117->attributes['F'], $x117->getters['F'], $x117->setters['F'], $_F); $x116 = TRUE; }
else { $x116 = FALSE; };
$x120 = clone JS::$functionTemplate; $x120->call = '_8cc783701129b82efc0bf45cf12c568e_6'; $x120->parameters = array (
); $x120->scope = $scope; $x120->properties['prototype'] = clone JS::$objectTemplate; $x120->attributes['prototype'] = JS::WRITABLE; $x120->properties['prototype']->properties['constructor'] = $x120; $x120->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x120->properties['length'] = 0; $x120->attributes['length'] = 0;
unset($x121, $W121, $S121, $U121);
$x122 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 54, 9, '<image>/03_function.js');
$x121 =& $x122[0]; list(,$W121,$S121,$U121) = $x122;
$x123 = JS::toString('toString', $global);
if ($x121 === JS::$undefined || $x121 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x124 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 54, 29, '<image>/03_function.js');
$_TypeError =& $x124[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x124;
$x125 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x126 = $x125($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x126->class) && $x126->class === 'Error' && !isset($x126->properties['file']) && !isset($x126->properties['line']) && !isset($x126->properties['column'])) {$x126->properties['file'] = '<image>/03_function.js';$x126->properties['line'] = 54;$x126->properties['column'] = 29;$x126->attributes['file'] = $x126->attributes['line'] = $x126->attributes['column'] = 0; }
throw new JSException($x126, 54, 29, '<image>/03_function.js');
}
$x121 = JS::toObject($x121, $global);
unset($x127, $W127, $S127, $U127);
$x128 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x121, JS::toString($x123, $global), 54, 29, '<image>/03_function.js');
$x127 =& $x128[0]; list(,$W127,$S127,$U127) = $x128;
if ($U127 && (!isset($x121->extensible) || $x121->extensible)) {$x121->properties[$x123] = $x127; $x127 =& $x121->properties[$x123]; $x121->attributes[$x123] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U127 = FALSE; $W127 = TRUE; }
if (isset($S127)) {
$x130 = $S127->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x131 = $x130($global, $x121, $S127, array($x120), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x129 = $x131;
} else {
if (!$U127) {$x129 = $x120;if ($W127) { $x127 = $x120; }  }
else { $x129 = JS::$undefined; }
}
if (isset($x121->class) && $x121->class === 'Array' &&  is_int('toString') && 'toString' >= $x121->properties['length']) { $x121->properties['length'] = 'toString' + 1; };
$x154 = clone JS::$functionTemplate; $x154->call = '_8cc783701129b82efc0bf45cf12c568e_7'; $x154->parameters = array (
  0 => 'thisArg',
  1 => 'argArray',
); $x154->scope = $scope; $x154->properties['prototype'] = clone JS::$objectTemplate; $x154->attributes['prototype'] = JS::WRITABLE; $x154->properties['prototype']->properties['constructor'] = $x154; $x154->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x154->properties['length'] = 2; $x154->attributes['length'] = 0;
unset($x155, $W155, $S155, $U155);
$x156 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 64, 9, '<image>/03_function.js');
$x155 =& $x156[0]; list(,$W155,$S155,$U155) = $x156;
$x157 = JS::toString('apply', $global);
if ($x155 === JS::$undefined || $x155 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x158 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 64, 26, '<image>/03_function.js');
$_TypeError =& $x158[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x158;
$x159 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 64, 26);
$x160 = $x159($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x160->class) && $x160->class === 'Error' && !isset($x160->properties['file']) && !isset($x160->properties['line']) && !isset($x160->properties['column'])) {$x160->properties['file'] = '<image>/03_function.js';$x160->properties['line'] = 64;$x160->properties['column'] = 26;$x160->attributes['file'] = $x160->attributes['line'] = $x160->attributes['column'] = 0; }
throw new JSException($x160, 64, 26, '<image>/03_function.js');
}
$x155 = JS::toObject($x155, $global);
unset($x161, $W161, $S161, $U161);
$x162 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x155, JS::toString($x157, $global), 64, 26, '<image>/03_function.js');
$x161 =& $x162[0]; list(,$W161,$S161,$U161) = $x162;
if ($U161 && (!isset($x155->extensible) || $x155->extensible)) {$x155->properties[$x157] = $x161; $x161 =& $x155->properties[$x157]; $x155->attributes[$x157] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U161 = FALSE; $W161 = TRUE; }
if (isset($S161)) {
$x164 = $S161->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 64, 26);
$x165 = $x164($global, $x155, $S161, array($x154), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x163 = $x165;
} else {
if (!$U161) {$x163 = $x154;if ($W161) { $x161 = $x154; }  }
else { $x163 = JS::$undefined; }
}
if (isset($x155->class) && $x155->class === 'Array' &&  is_int('apply') && 'apply' >= $x155->properties['length']) { $x155->properties['length'] = 'apply' + 1; };
$x190 = clone JS::$functionTemplate; $x190->call = '_8cc783701129b82efc0bf45cf12c568e_8'; $x190->parameters = array (
  0 => 'thisArg',
); $x190->scope = $scope; $x190->properties['prototype'] = clone JS::$objectTemplate; $x190->attributes['prototype'] = JS::WRITABLE; $x190->properties['prototype']->properties['constructor'] = $x190; $x190->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x190->properties['length'] = 1; $x190->attributes['length'] = 0;
unset($x191, $W191, $S191, $U191);
$x192 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 85, 9, '<image>/03_function.js');
$x191 =& $x192[0]; list(,$W191,$S191,$U191) = $x192;
$x193 = JS::toString('call', $global);
if ($x191 === JS::$undefined || $x191 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x194 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 85, 25, '<image>/03_function.js');
$_TypeError =& $x194[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x194;
$x195 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 85, 25);
$x196 = $x195($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x196->class) && $x196->class === 'Error' && !isset($x196->properties['file']) && !isset($x196->properties['line']) && !isset($x196->properties['column'])) {$x196->properties['file'] = '<image>/03_function.js';$x196->properties['line'] = 85;$x196->properties['column'] = 25;$x196->attributes['file'] = $x196->attributes['line'] = $x196->attributes['column'] = 0; }
throw new JSException($x196, 85, 25, '<image>/03_function.js');
}
$x191 = JS::toObject($x191, $global);
unset($x197, $W197, $S197, $U197);
$x198 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x191, JS::toString($x193, $global), 85, 25, '<image>/03_function.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if ($U197 && (!isset($x191->extensible) || $x191->extensible)) {$x191->properties[$x193] = $x197; $x197 =& $x191->properties[$x193]; $x191->attributes[$x193] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U197 = FALSE; $W197 = TRUE; }
if (isset($S197)) {
$x200 = $S197->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 85, 25);
$x201 = $x200($global, $x191, $S197, array($x190), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x199 = $x201;
} else {
if (!$U197) {$x199 = $x190;if ($W197) { $x197 = $x190; }  }
else { $x199 = JS::$undefined; }
}
if (isset($x191->class) && $x191->class === 'Array' &&  is_int('call') && 'call' >= $x191->properties['length']) { $x191->properties['length'] = 'call' + 1; };
$x222 = clone JS::$functionTemplate; $x222->call = '_8cc783701129b82efc0bf45cf12c568e_9'; $x222->parameters = array (
  0 => 'thisArg',
); $x222->scope = $scope; $x222->properties['prototype'] = clone JS::$objectTemplate; $x222->attributes['prototype'] = JS::WRITABLE; $x222->properties['prototype']->properties['constructor'] = $x222; $x222->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x222->properties['length'] = 1; $x222->attributes['length'] = 0;
unset($x223, $W223, $S223, $U223);
$x224 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 105, 9, '<image>/03_function.js');
$x223 =& $x224[0]; list(,$W223,$S223,$U223) = $x224;
$x225 = JS::toString('bind', $global);
if ($x223 === JS::$undefined || $x223 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x226 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 105, 25, '<image>/03_function.js');
$_TypeError =& $x226[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x226;
$x227 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 105, 25);
$x228 = $x227($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x228->class) && $x228->class === 'Error' && !isset($x228->properties['file']) && !isset($x228->properties['line']) && !isset($x228->properties['column'])) {$x228->properties['file'] = '<image>/03_function.js';$x228->properties['line'] = 105;$x228->properties['column'] = 25;$x228->attributes['file'] = $x228->attributes['line'] = $x228->attributes['column'] = 0; }
throw new JSException($x228, 105, 25, '<image>/03_function.js');
}
$x223 = JS::toObject($x223, $global);
unset($x229, $W229, $S229, $U229);
$x230 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x223, JS::toString($x225, $global), 105, 25, '<image>/03_function.js');
$x229 =& $x230[0]; list(,$W229,$S229,$U229) = $x230;
if ($U229 && (!isset($x223->extensible) || $x223->extensible)) {$x223->properties[$x225] = $x229; $x229 =& $x223->properties[$x225]; $x223->attributes[$x225] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U229 = FALSE; $W229 = TRUE; }
if (isset($S229)) {
$x232 = $S229->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 105, 25);
$x233 = $x232($global, $x223, $S229, array($x222), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x231 = $x233;
} else {
if (!$U229) {$x231 = $x222;if ($W229) { $x229 = $x222; }  }
else { $x231 = JS::$undefined; }
}
if (isset($x223->class) && $x223->class === 'Array' &&  is_int('bind') && 'bind' >= $x223->properties['length']) { $x223->properties['length'] = 'bind' + 1; };
;
return JS::$undefined;
}
