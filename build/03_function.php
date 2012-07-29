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
$x121 =& $scope->properties['arguments'];
$x121->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x121->properties[$i] = $args[$i];
$x121->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
echo 'function _8cc783701129b82efc0bf45cf12c568e_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x121=&$scope->properties[\'arguments\'];$x121->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x121->properties[$i]=$args[$i];$x121->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(isset($leThis->string),$global)){return$leThis->string;}return"function ".(isset($leThis->name)?$leThis->name:"")."(".implode(",",$leThis->parameters)."){ [native code] }";return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x136 =& $scope->properties['arguments'];
$x136->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x136->properties[$i] = $args[$i];
$x136->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x137 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x137, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x140 = $_thisArg;
$x140 = ($x140 === JS::$undefined ? 'undefined' : (is_int($x140) || is_float($x140) ? 'number' : (is_bool($x140) ? 'boolean' : (is_string($x140) ? 'string' : (is_object($x140) && isset($x140->call) ? 'function' : 'object')))));
$x139 = !(((gettype($x140) === gettype('object') && $x140 === 'object'))|| (((is_float($x140) || is_int($x140)) && (is_float('object') || is_int('object'))) && $x140 == 'object'));
$x138 = $x139;
if (JS::toBoolean($x138, $global)) {
$x142 = $_thisArg;
$x142 = ($x142 === JS::$undefined ? 'undefined' : (is_int($x142) || is_float($x142) ? 'number' : (is_bool($x142) ? 'boolean' : (is_string($x142) ? 'string' : (is_object($x142) && isset($x142->call) ? 'function' : 'object')))));
$x141 = !(((gettype($x142) === gettype('function') && $x142 === 'function'))|| (((is_float($x142) || is_int($x142)) && (is_float('function') || is_int('function'))) && $x142 == 'function'));
$x138 = $x141; }
if (JS::toBoolean($x138, $global)) {
$x143 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x143;;
};
};
$x144 = $_argArray;
if (!JS::toBoolean($x144, $global)) {
$x145 = clone JS::$arrayTemplate;
$x145->properties['length'] = 0;
$x145->attributes['length'] = JS::WRITABLE;
$x144 = $x145; }
if ($UargArray) {$global->properties['argArray'] = $_argArray; $_argArray =& $global->properties['argArray']; }
$_argArray = $x144;
$passArgs = array();
for ($x146 = 0;; ++$x146) {
if ($x146 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x147, $W147, $S147, $U147);
$x148 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_argArray, JS::toString('length', $global), 76, 30, '<image>/03_function.js');
$x147 =& $x148[0]; list(,$W147,$S147,$U147) = $x148;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x147;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x146 !== 0) {
$x149 = ++$_i;
}
$x150 = JS::toPrimitive($_i, $global);
$x151 = JS::toPrimitive($_l, $global);
$x152 = (is_string($x150) && is_string($x151) ? strcmp($x150, $x151) < 0 : (!is_nan($x153 = JS::toNumber($x150, $global)) && !is_nan($x154 = JS::toNumber($x151, $global)) && $x153 < $x154));
if (!JS::toBoolean($x152, $global)) { break; }

unset($x155, $W155, $S155, $U155);
$x156 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_argArray, JS::toString($_i, $global), 77, 17, '<image>/03_function.js');
$x155 =& $x156[0]; list(,$W155,$S155,$U155) = $x156;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x155;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x136=&$scope->properties[\'arguments\'];$x136->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x136->properties[$i]=$args[$i];$x136->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$scope->properties[\'argArray\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_argArray=&$scope->properties[\'argArray\'];$UargArray=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x137=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x137,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x140=$_thisArg;$x140=($x140===JS::$undefined?\'undefined\':(is_int($x140)||is_float($x140)?\'number\':(is_bool($x140)?\'boolean\':(is_string($x140)?\'string\':(is_object($x140)&&isset($x140->call)?\'function\':\'object\')))));$x139=!(((gettype($x140)===gettype(\'object\')&&$x140===\'object\'))||(((is_float($x140)||is_int($x140))&&(is_float(\'object\')||is_int(\'object\')))&&$x140==\'object\'));$x138=$x139;if(JS::toBoolean($x138,$global)){$x142=$_thisArg;$x142=($x142===JS::$undefined?\'undefined\':(is_int($x142)||is_float($x142)?\'number\':(is_bool($x142)?\'boolean\':(is_string($x142)?\'string\':(is_object($x142)&&isset($x142->call)?\'function\':\'object\')))));$x141=!(((gettype($x142)===gettype(\'function\')&&$x142===\'function\'))||(((is_float($x142)||is_int($x142))&&(is_float(\'function\')||is_int(\'function\')))&&$x142==\'function\'));$x138=$x141;}if(JS::toBoolean($x138,$global)){$x143=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x143;}}$x144=$_argArray;if(!JS::toBoolean($x144,$global)){$x145=clone JS::$arrayTemplate;$x145->properties[\'length\']=0;$x145->attributes[\'length\']=JS::WRITABLE;$x144=$x145;}if($UargArray){$global->properties[\'argArray\']=$_argArray;$_argArray=&$global->properties[\'argArray\'];}$_argArray=$x144;$passArgs=array();for($x146=0;;++$x146){if($x146===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x147,$W147,$S147,$U147);$x148=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_argArray,JS::toString(\'length\',$global),76,30,\'<image>/03_function.js\');$x147=&$x148[0];list(,$W147,$S147,$U147)=$x148;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x147;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x146!==0){$x149=++$_i;}$x150=JS::toPrimitive($_i,$global);$x151=JS::toPrimitive($_l,$global);$x152=(is_string($x150)&&is_string($x151)?strcmp($x150,$x151)<0:(!is_nan($x153=JS::toNumber($x150,$global))&&!is_nan($x154=JS::toNumber($x151,$global))&&$x153<$x154));if(!JS::toBoolean($x152,$global)){break;}unset($x155,$W155,$S155,$U155);$x156=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_argArray,JS::toString($_i,$global),77,17,\'<image>/03_function.js\');$x155=&$x156[0];list(,$W155,$S155,$U155)=$x156;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x155;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x171 =& $scope->properties['arguments'];
$x171->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x171->properties[$i] = $args[$i];
$x171->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x172 = (((gettype($_thisArg) === gettype(JS::$undefined) && $_thisArg === JS::$undefined))|| (((is_float($_thisArg) || is_int($_thisArg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_thisArg == JS::$undefined));
if (JS::toBoolean($x172, $global)) {
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $global;;
}
else {
$x175 = $_thisArg;
$x175 = ($x175 === JS::$undefined ? 'undefined' : (is_int($x175) || is_float($x175) ? 'number' : (is_bool($x175) ? 'boolean' : (is_string($x175) ? 'string' : (is_object($x175) && isset($x175->call) ? 'function' : 'object')))));
$x174 = !(((gettype($x175) === gettype('object') && $x175 === 'object'))|| (((is_float($x175) || is_int($x175)) && (is_float('object') || is_int('object'))) && $x175 == 'object'));
$x173 = $x174;
if (JS::toBoolean($x173, $global)) {
$x177 = $_thisArg;
$x177 = ($x177 === JS::$undefined ? 'undefined' : (is_int($x177) || is_float($x177) ? 'number' : (is_bool($x177) ? 'boolean' : (is_string($x177) ? 'string' : (is_object($x177) && isset($x177->call) ? 'function' : 'object')))));
$x176 = !(((gettype($x177) === gettype('function') && $x177 === 'function'))|| (((is_float($x177) || is_int($x177)) && (is_float('function') || is_int('function'))) && $x177 == 'function'));
$x173 = $x176; }
if (JS::toBoolean($x173, $global)) {
$x178 = JS::toObject($_thisArg, $global);
if ($UthisArg) {$global->properties['thisArg'] = $_thisArg; $_thisArg =& $global->properties['thisArg']; }
$_thisArg = $x178;;
};
};
$passArgs = array();
for ($x179 = 0;; ++$x179) {
if ($x179 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x180 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('arguments', $global), 96, 22, '<image>/03_function.js');
$_arguments =& $x180[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x180;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x181 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 96, 22, '<image>/03_function.js');
$_ReferenceError =& $x181[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x181;
$x182 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 96, 22);
$x183 = $x182($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x183->class) && $x183->class === 'Error' && !isset($x183->properties['file']) && !isset($x183->properties['line']) && !isset($x183->properties['column'])) {$x183->properties['file'] = '<image>/03_function.js';$x183->properties['line'] = 96;$x183->properties['column'] = 22;$x183->attributes['file'] = $x183->attributes['line'] = $x183->attributes['column'] = 0; }
throw new JSException($x183, 96, 22, '<image>/03_function.js');
}
unset($x184, $W184, $S184, $U184);
$x185 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString('length', $global), 96, 31, '<image>/03_function.js');
$x184 =& $x185[0]; list(,$W184,$S184,$U184) = $x185;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x184;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x179 !== 0) {
$x186 = ++$_i;
}
$x187 = JS::toPrimitive($_i, $global);
$x188 = JS::toPrimitive($_l, $global);
$x189 = (is_string($x187) && is_string($x188) ? strcmp($x187, $x188) < 0 : (!is_nan($x190 = JS::toNumber($x187, $global)) && !is_nan($x191 = JS::toNumber($x188, $global)) && $x190 < $x191));
if (!JS::toBoolean($x189, $global)) { break; }

unset($x192, $W192, $S192, $U192);
$x193 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString($_i, $global), 97, 18, '<image>/03_function.js');
$x192 =& $x193[0]; list(,$W192,$S192,$U192) = $x193;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x192;
$passArgs[] =$_arg;;
};
if (JS::$loader !== NULL && !$leThis->loaded) { $l = JS::$loader; $l($leThis, $global); };
return $_call($global,$_thisArg, $leThis, $passArgs);
;
return JS::$undefined;
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x171=&$scope->properties[\'arguments\'];$x171->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x171->properties[$i]=$args[$i];$x171->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'fn\']=JS::$undefined;$_fn=&$scope->properties[\'fn\'];$Ufn=FALSE;$_fn=$leThis;$scope->properties[\'call\']=JS::$undefined;$_call=&$scope->properties[\'call\'];$Ucall=FALSE;$_call=$_fn->call;$x172=(((gettype($_thisArg)===gettype(JS::$undefined)&&$_thisArg===JS::$undefined))||(((is_float($_thisArg)||is_int($_thisArg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_thisArg==JS::$undefined));if(JS::toBoolean($x172,$global)){if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$global;}else{$x175=$_thisArg;$x175=($x175===JS::$undefined?\'undefined\':(is_int($x175)||is_float($x175)?\'number\':(is_bool($x175)?\'boolean\':(is_string($x175)?\'string\':(is_object($x175)&&isset($x175->call)?\'function\':\'object\')))));$x174=!(((gettype($x175)===gettype(\'object\')&&$x175===\'object\'))||(((is_float($x175)||is_int($x175))&&(is_float(\'object\')||is_int(\'object\')))&&$x175==\'object\'));$x173=$x174;if(JS::toBoolean($x173,$global)){$x177=$_thisArg;$x177=($x177===JS::$undefined?\'undefined\':(is_int($x177)||is_float($x177)?\'number\':(is_bool($x177)?\'boolean\':(is_string($x177)?\'string\':(is_object($x177)&&isset($x177->call)?\'function\':\'object\')))));$x176=!(((gettype($x177)===gettype(\'function\')&&$x177===\'function\'))||(((is_float($x177)||is_int($x177))&&(is_float(\'function\')||is_int(\'function\')))&&$x177==\'function\'));$x173=$x176;}if(JS::toBoolean($x173,$global)){$x178=JS::toObject($_thisArg,$global);if($UthisArg){$global->properties[\'thisArg\']=$_thisArg;$_thisArg=&$global->properties[\'thisArg\'];}$_thisArg=$x178;}}$passArgs=array();for($x179=0;;++$x179){if($x179===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x180=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'arguments\',$global),96,22,\'<image>/03_function.js\');$_arguments=&$x180[0];list(,$Warguments,$Sarguments,$Uarguments)=$x180;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x181=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),96,22,\'<image>/03_function.js\');$_ReferenceError=&$x181[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x181;$x182=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',96,22);$x183=$x182($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x183->class)&&$x183->class===\'Error\'&&!isset($x183->properties[\'file\'])&&!isset($x183->properties[\'line\'])&&!isset($x183->properties[\'column\'])){$x183->properties[\'file\']=\'<image>/03_function.js\';$x183->properties[\'line\']=96;$x183->properties[\'column\']=22;$x183->attributes[\'file\']=$x183->attributes[\'line\']=$x183->attributes[\'column\']=0;}throw new JSException($x183,96,22,\'<image>/03_function.js\');}unset($x184,$W184,$S184,$U184);$x185=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString(\'length\',$global),96,31,\'<image>/03_function.js\');$x184=&$x185[0];list(,$W184,$S184,$U184)=$x185;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x184;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x179!==0){$x186=++$_i;}$x187=JS::toPrimitive($_i,$global);$x188=JS::toPrimitive($_l,$global);$x189=(is_string($x187)&&is_string($x188)?strcmp($x187,$x188)<0:(!is_nan($x190=JS::toNumber($x187,$global))&&!is_nan($x191=JS::toNumber($x188,$global))&&$x190<$x191));if(!JS::toBoolean($x189,$global)){break;}unset($x192,$W192,$S192,$U192);$x193=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString($_i,$global),97,18,\'<image>/03_function.js\');$x192=&$x193[0];list(,$W192,$S192,$U192)=$x193;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x192;$passArgs[]=$_arg;}if(JS::$loader!==NULL&&!$leThis->loaded){$l=JS::$loader;$l($leThis,$global);}return$_call($global,$_thisArg,$leThis,$passArgs);return JS::$undefined;}', "\n";
function _8cc783701129b82efc0bf45cf12c568e_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x210 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('arguments', $global), 111, 22, '<image>/03_function.js');
$_arguments =& $x210[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x210;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x211 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 111, 22, '<image>/03_function.js');
$_ReferenceError =& $x211[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x211;
$x212 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 111, 22);
$x213 = $x212($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x213->class) && $x213->class === 'Error' && !isset($x213->properties['file']) && !isset($x213->properties['line']) && !isset($x213->properties['column'])) {$x213->properties['file'] = '<image>/03_function.js';$x213->properties['line'] = 111;$x213->properties['column'] = 22;$x213->attributes['file'] = $x213->attributes['line'] = $x213->attributes['column'] = 0; }
throw new JSException($x213, 111, 22, '<image>/03_function.js');
}
unset($x214, $W214, $S214, $U214);
$x215 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString('length', $global), 111, 31, '<image>/03_function.js');
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
$x223 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_arguments, JS::toString($_i, $global), 112, 18, '<image>/03_function.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x222;
$boundArgs[] =$_arg;
unset($x224, $W224, $S224, $U224);
$x225 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_newFn, JS::toString('length', $global), 114, 10, '<image>/03_function.js');
$x224 =& $x225[0]; list(,$W224,$S224,$U224) = $x225;
$x226 = --$x224;;
};
$_newFn->boundArgs = $boundArgs;
return $_newFn;
;
return JS::$undefined;
}
echo 'function _8cc783701129b82efc0bf45cf12c568e_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x208=&$scope->properties[\'arguments\'];$x208->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x208->properties[$i]=$args[$i];$x208->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'thisArg\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_thisArg=&$scope->properties[\'thisArg\'];$UthisArg=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'newFn\']=JS::$undefined;$_newFn=&$scope->properties[\'newFn\'];$UnewFn=FALSE;$_newFn=clone$leThis;$_newFn->boundThis=$_thisArg;$boundArgs=isset($_newFn->boundArgs)?$_newFn->boundArgs:array();for($x209=0;;++$x209){if($x209===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x210=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'arguments\',$global),111,22,\'<image>/03_function.js\');$_arguments=&$x210[0];list(,$Warguments,$Sarguments,$Uarguments)=$x210;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x211=_8cc783701129b82efc0bf45cf12c568e_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),111,22,\'<image>/03_function.js\');$_ReferenceError=&$x211[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x211;$x212=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/03_function.js\',111,22);$x213=$x212($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x213->class)&&$x213->class===\'Error\'&&!isset($x213->properties[\'file\'])&&!isset($x213->properties[\'line\'])&&!isset($x213->properties[\'column\'])){$x213->properties[\'file\']=\'<image>/03_function.js\';$x213->properties[\'line\']=111;$x213->properties[\'column\']=22;$x213->attributes[\'file\']=$x213->attributes[\'line\']=$x213->attributes[\'column\']=0;}throw new JSException($x213,111,22,\'<image>/03_function.js\');}unset($x214,$W214,$S214,$U214);$x215=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString(\'length\',$global),111,31,\'<image>/03_function.js\');$x214=&$x215[0];list(,$W214,$S214,$U214)=$x215;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x214;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x209!==0){$x216=++$_i;}$x217=JS::toPrimitive($_i,$global);$x218=JS::toPrimitive($_l,$global);$x219=(is_string($x217)&&is_string($x218)?strcmp($x217,$x218)<0:(!is_nan($x220=JS::toNumber($x217,$global))&&!is_nan($x221=JS::toNumber($x218,$global))&&$x220<$x221));if(!JS::toBoolean($x219,$global)){break;}unset($x222,$W222,$S222,$U222);$x223=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_arguments,JS::toString($_i,$global),112,18,\'<image>/03_function.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x222;$boundArgs[]=$_arg;unset($x224,$W224,$S224,$U224);$x225=_8cc783701129b82efc0bf45cf12c568e_3($global,$scope,$_newFn,JS::toString(\'length\',$global),114,10,\'<image>/03_function.js\');$x224=&$x225[0];list(,$W224,$S224,$U224)=$x225;$x226=--$x224;}$_newFn->boundArgs=$boundArgs;return$_newFn;return JS::$undefined;}', "\n";
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
if (isset($_Function->class) && $_Function->class === 'Array') {  if (isset($_Function->properties['length']) && $_Function->properties['length'] !== JS::$undefined) { $x99 = $_Function->properties['length']; }  else { $x99 = 0; } }
if (isset($S93)) {
$x100 = $S93->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 40, 20);
$x101 = $x100($global, $_Function, $S93, array($_Function->prototype), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x98 = $x101;
} else {
if (!$U93) {$x98 = $_Function->prototype;if ($W93) { $x93 = $_Function->prototype; }  }
else { $x98 = JS::$undefined; }
}
if (isset($_Function->class) && $_Function->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_Function->properties['length']) { $_Function->properties['length'] = 'prototype' + 1; }else if ($x89 === 'length' && is_int($_Function->prototype) && $x99 > $_Function->prototype) {  for ($i = $_Function->prototype; $i < $x99; ++$i) {  unset($_Function->properties[$i], $_Function->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x102 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('Object', $global), 41, 53, '<image>/03_function.js');
$_Object =& $x102[0]; list(,$WObject,$SObject,$UObject) = $x102;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x103 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 41, 53, '<image>/03_function.js');
$_ReferenceError =& $x103[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x103;
$x104 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 41, 53);
$x105 = $x104($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x105->class) && $x105->class === 'Error' && !isset($x105->properties['file']) && !isset($x105->properties['line']) && !isset($x105->properties['column'])) {$x105->properties['file'] = '<image>/03_function.js';$x105->properties['line'] = 41;$x105->properties['column'] = 53;$x105->attributes['file'] = $x105->attributes['line'] = $x105->attributes['column'] = 0; }
throw new JSException($x105, 41, 53, '<image>/03_function.js');
}
$_Function->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Function->properties['prototype']->class = 'Function';
$_Function->properties['prototype']->extensible = TRUE;
unset($x106, $W106, $S106, $U106);
$x107 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 44, 9, '<image>/03_function.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
$x108 = JS::toString('constructor', $global);
if ($x106 === JS::$undefined || $x106 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x109 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 44, 32, '<image>/03_function.js');
$_TypeError =& $x109[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x109;
$x110 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x111 = $x110($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x111->class) && $x111->class === 'Error' && !isset($x111->properties['file']) && !isset($x111->properties['line']) && !isset($x111->properties['column'])) {$x111->properties['file'] = '<image>/03_function.js';$x111->properties['line'] = 44;$x111->properties['column'] = 32;$x111->attributes['file'] = $x111->attributes['line'] = $x111->attributes['column'] = 0; }
throw new JSException($x111, 44, 32, '<image>/03_function.js');
}
$x106 = JS::toObject($x106, $global);
unset($x112, $W112, $S112, $U112);
$x113 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x106, JS::toString($x108, $global), 44, 32, '<image>/03_function.js');
$x112 =& $x113[0]; list(,$W112,$S112,$U112) = $x113;
if ($U112 && (!isset($x106->extensible) || $x106->extensible)) {$x106->properties[$x108] = $x112; $x112 =& $x106->properties[$x108]; $x106->attributes[$x108] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U112 = FALSE; $W112 = TRUE; }
if (isset($x106->class) && $x106->class === 'Array') {  if (isset($x106->properties['length']) && $x106->properties['length'] !== JS::$undefined) { $x115 = $x106->properties['length']; }  else { $x115 = 0; } }
if (isset($S112)) {
$x116 = $S112->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 44, 32);
$x117 = $x116($global, $x106, $S112, array($_Function), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x114 = $x117;
} else {
if (!$U112) {$x114 = $_Function;if ($W112) { $x112 = $_Function; }  }
else { $x114 = JS::$undefined; }
}
if (isset($x106->class) && $x106->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x106->properties['length']) { $x106->properties['length'] = 'constructor' + 1; }else if ($x108 === 'length' && is_int($_Function) && $x115 > $_Function) {  for ($i = $_Function; $i < $x115; ++$i) {  unset($x106->properties[$i], $x106->attributes[$i]); }}};
$_Function->prototype->call =$_F->call;
for ($x119 = $scope; $x119 && $x119->up && !array_key_exists('F', $x119->attributes) && !array_key_exists('F', $x119->properties); $x119 = $x119->up);
if (!array_key_exists('F', $x119->attributes)) { unset($x119->properties['F'], $_F); $x118 = TRUE; }
else if ($x119->attributes['F'] & JS::CONFIGURABLE) { unset($x119->properties['F'], $x119->attributes['F'], $x119->getters['F'], $x119->setters['F'], $_F); $x118 = TRUE; }
else { $x118 = FALSE; };
$x122 = clone JS::$functionTemplate; $x122->call = '_8cc783701129b82efc0bf45cf12c568e_6'; $x122->parameters = array (
); $x122->scope = $scope; $x122->properties['prototype'] = clone JS::$objectTemplate; $x122->attributes['prototype'] = JS::WRITABLE; $x122->properties['prototype']->properties['constructor'] = $x122; $x122->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x122->properties['length'] = 0; $x122->attributes['length'] = 0;
unset($x123, $W123, $S123, $U123);
$x124 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 54, 9, '<image>/03_function.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
$x125 = JS::toString('toString', $global);
if ($x123 === JS::$undefined || $x123 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x126 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 54, 29, '<image>/03_function.js');
$_TypeError =& $x126[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x126;
$x127 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x128 = $x127($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x128->class) && $x128->class === 'Error' && !isset($x128->properties['file']) && !isset($x128->properties['line']) && !isset($x128->properties['column'])) {$x128->properties['file'] = '<image>/03_function.js';$x128->properties['line'] = 54;$x128->properties['column'] = 29;$x128->attributes['file'] = $x128->attributes['line'] = $x128->attributes['column'] = 0; }
throw new JSException($x128, 54, 29, '<image>/03_function.js');
}
$x123 = JS::toObject($x123, $global);
unset($x129, $W129, $S129, $U129);
$x130 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x123, JS::toString($x125, $global), 54, 29, '<image>/03_function.js');
$x129 =& $x130[0]; list(,$W129,$S129,$U129) = $x130;
if ($U129 && (!isset($x123->extensible) || $x123->extensible)) {$x123->properties[$x125] = $x129; $x129 =& $x123->properties[$x125]; $x123->attributes[$x125] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U129 = FALSE; $W129 = TRUE; }
if (isset($x123->class) && $x123->class === 'Array') {  if (isset($x123->properties['length']) && $x123->properties['length'] !== JS::$undefined) { $x132 = $x123->properties['length']; }  else { $x132 = 0; } }
if (isset($S129)) {
$x133 = $S129->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 54, 29);
$x134 = $x133($global, $x123, $S129, array($x122), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x131 = $x134;
} else {
if (!$U129) {$x131 = $x122;if ($W129) { $x129 = $x122; }  }
else { $x131 = JS::$undefined; }
}
if (isset($x123->class) && $x123->class === 'Array') {if (is_int('toString') && 'toString' >= $x123->properties['length']) { $x123->properties['length'] = 'toString' + 1; }else if ($x125 === 'length' && is_int($x122) && $x132 > $x122) {  for ($i = $x122; $i < $x132; ++$i) {  unset($x123->properties[$i], $x123->attributes[$i]); }}};
$x157 = clone JS::$functionTemplate; $x157->call = '_8cc783701129b82efc0bf45cf12c568e_7'; $x157->parameters = array (
  0 => 'thisArg',
  1 => 'argArray',
); $x157->scope = $scope; $x157->properties['prototype'] = clone JS::$objectTemplate; $x157->attributes['prototype'] = JS::WRITABLE; $x157->properties['prototype']->properties['constructor'] = $x157; $x157->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x157->properties['length'] = 2; $x157->attributes['length'] = 0;
unset($x158, $W158, $S158, $U158);
$x159 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 64, 9, '<image>/03_function.js');
$x158 =& $x159[0]; list(,$W158,$S158,$U158) = $x159;
$x160 = JS::toString('apply', $global);
if ($x158 === JS::$undefined || $x158 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x161 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 64, 26, '<image>/03_function.js');
$_TypeError =& $x161[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x161;
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 64, 26);
$x163 = $x162($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error' && !isset($x163->properties['file']) && !isset($x163->properties['line']) && !isset($x163->properties['column'])) {$x163->properties['file'] = '<image>/03_function.js';$x163->properties['line'] = 64;$x163->properties['column'] = 26;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 64, 26, '<image>/03_function.js');
}
$x158 = JS::toObject($x158, $global);
unset($x164, $W164, $S164, $U164);
$x165 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x158, JS::toString($x160, $global), 64, 26, '<image>/03_function.js');
$x164 =& $x165[0]; list(,$W164,$S164,$U164) = $x165;
if ($U164 && (!isset($x158->extensible) || $x158->extensible)) {$x158->properties[$x160] = $x164; $x164 =& $x158->properties[$x160]; $x158->attributes[$x160] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U164 = FALSE; $W164 = TRUE; }
if (isset($x158->class) && $x158->class === 'Array') {  if (isset($x158->properties['length']) && $x158->properties['length'] !== JS::$undefined) { $x167 = $x158->properties['length']; }  else { $x167 = 0; } }
if (isset($S164)) {
$x168 = $S164->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 64, 26);
$x169 = $x168($global, $x158, $S164, array($x157), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x166 = $x169;
} else {
if (!$U164) {$x166 = $x157;if ($W164) { $x164 = $x157; }  }
else { $x166 = JS::$undefined; }
}
if (isset($x158->class) && $x158->class === 'Array') {if (is_int('apply') && 'apply' >= $x158->properties['length']) { $x158->properties['length'] = 'apply' + 1; }else if ($x160 === 'length' && is_int($x157) && $x167 > $x157) {  for ($i = $x157; $i < $x167; ++$i) {  unset($x158->properties[$i], $x158->attributes[$i]); }}};
$x194 = clone JS::$functionTemplate; $x194->call = '_8cc783701129b82efc0bf45cf12c568e_8'; $x194->parameters = array (
  0 => 'thisArg',
); $x194->scope = $scope; $x194->properties['prototype'] = clone JS::$objectTemplate; $x194->attributes['prototype'] = JS::WRITABLE; $x194->properties['prototype']->properties['constructor'] = $x194; $x194->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x194->properties['length'] = 1; $x194->attributes['length'] = 0;
unset($x195, $W195, $S195, $U195);
$x196 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 85, 9, '<image>/03_function.js');
$x195 =& $x196[0]; list(,$W195,$S195,$U195) = $x196;
$x197 = JS::toString('call', $global);
if ($x195 === JS::$undefined || $x195 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x198 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 85, 25, '<image>/03_function.js');
$_TypeError =& $x198[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x198;
$x199 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 85, 25);
$x200 = $x199($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x200->class) && $x200->class === 'Error' && !isset($x200->properties['file']) && !isset($x200->properties['line']) && !isset($x200->properties['column'])) {$x200->properties['file'] = '<image>/03_function.js';$x200->properties['line'] = 85;$x200->properties['column'] = 25;$x200->attributes['file'] = $x200->attributes['line'] = $x200->attributes['column'] = 0; }
throw new JSException($x200, 85, 25, '<image>/03_function.js');
}
$x195 = JS::toObject($x195, $global);
unset($x201, $W201, $S201, $U201);
$x202 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x195, JS::toString($x197, $global), 85, 25, '<image>/03_function.js');
$x201 =& $x202[0]; list(,$W201,$S201,$U201) = $x202;
if ($U201 && (!isset($x195->extensible) || $x195->extensible)) {$x195->properties[$x197] = $x201; $x201 =& $x195->properties[$x197]; $x195->attributes[$x197] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U201 = FALSE; $W201 = TRUE; }
if (isset($x195->class) && $x195->class === 'Array') {  if (isset($x195->properties['length']) && $x195->properties['length'] !== JS::$undefined) { $x204 = $x195->properties['length']; }  else { $x204 = 0; } }
if (isset($S201)) {
$x205 = $S201->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 85, 25);
$x206 = $x205($global, $x195, $S201, array($x194), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x203 = $x206;
} else {
if (!$U201) {$x203 = $x194;if ($W201) { $x201 = $x194; }  }
else { $x203 = JS::$undefined; }
}
if (isset($x195->class) && $x195->class === 'Array') {if (is_int('call') && 'call' >= $x195->properties['length']) { $x195->properties['length'] = 'call' + 1; }else if ($x197 === 'length' && is_int($x194) && $x204 > $x194) {  for ($i = $x194; $i < $x204; ++$i) {  unset($x195->properties[$i], $x195->attributes[$i]); }}};
$x227 = clone JS::$functionTemplate; $x227->call = '_8cc783701129b82efc0bf45cf12c568e_9'; $x227->parameters = array (
  0 => 'thisArg',
); $x227->scope = $scope; $x227->properties['prototype'] = clone JS::$objectTemplate; $x227->attributes['prototype'] = JS::WRITABLE; $x227->properties['prototype']->properties['constructor'] = $x227; $x227->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x227->properties['length'] = 1; $x227->attributes['length'] = 0;
unset($x228, $W228, $S228, $U228);
$x229 = _8cc783701129b82efc0bf45cf12c568e_3($global, $scope, $_Function, JS::toString('prototype', $global), 105, 9, '<image>/03_function.js');
$x228 =& $x229[0]; list(,$W228,$S228,$U228) = $x229;
$x230 = JS::toString('bind', $global);
if ($x228 === JS::$undefined || $x228 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x231 = _8cc783701129b82efc0bf45cf12c568e_2($global, $scope, $scope, JS::toString('TypeError', $global), 105, 25, '<image>/03_function.js');
$_TypeError =& $x231[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x231;
$x232 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 105, 25);
$x233 = $x232($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x233->class) && $x233->class === 'Error' && !isset($x233->properties['file']) && !isset($x233->properties['line']) && !isset($x233->properties['column'])) {$x233->properties['file'] = '<image>/03_function.js';$x233->properties['line'] = 105;$x233->properties['column'] = 25;$x233->attributes['file'] = $x233->attributes['line'] = $x233->attributes['column'] = 0; }
throw new JSException($x233, 105, 25, '<image>/03_function.js');
}
$x228 = JS::toObject($x228, $global);
unset($x234, $W234, $S234, $U234);
$x235 = _8cc783701129b82efc0bf45cf12c568e_5($global, $scope, $x228, JS::toString($x230, $global), 105, 25, '<image>/03_function.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
if ($U234 && (!isset($x228->extensible) || $x228->extensible)) {$x228->properties[$x230] = $x234; $x234 =& $x228->properties[$x230]; $x228->attributes[$x230] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U234 = FALSE; $W234 = TRUE; }
if (isset($x228->class) && $x228->class === 'Array') {  if (isset($x228->properties['length']) && $x228->properties['length'] !== JS::$undefined) { $x237 = $x228->properties['length']; }  else { $x237 = 0; } }
if (isset($S234)) {
$x238 = $S234->call;
$global->trace[++$global->trace_sp] = array('<image>/03_function.js', 105, 25);
$x239 = $x238($global, $x228, $S234, array($x227), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x236 = $x239;
} else {
if (!$U234) {$x236 = $x227;if ($W234) { $x234 = $x227; }  }
else { $x236 = JS::$undefined; }
}
if (isset($x228->class) && $x228->class === 'Array') {if (is_int('bind') && 'bind' >= $x228->properties['length']) { $x228->properties['length'] = 'bind' + 1; }else if ($x230 === 'length' && is_int($x227) && $x237 > $x227) {  for ($i = $x227; $i < $x237; ++$i) {  unset($x228->properties[$i], $x228->attributes[$i]); }}};
;
return JS::$undefined;
}
