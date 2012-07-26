function _f5a3c4832dbaf51c9bc86fdffdc142bb_1($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x2 =& $scope->properties['arguments'];
$x2->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x2->properties[$i] = $args[$i];
$x2->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['fd'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_fd =& $scope->properties['fd'];
$Ufd = FALSE;
$scope->properties['s'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_s =& $scope->properties['s'];
$Us = FALSE;
$global->scope[++$global->scope_sp] = $scope;
fwrite($_fd,$_s. "\n");
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x2=&$scope->properties[\'arguments\'];$x2->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x2->properties[$i]=$args[$i];$x2->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fd\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fd=&$scope->properties[\'fd\'];$Ufd=FALSE;$scope->properties[\'s\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$global->scope[++$global->scope_sp]=$scope;fwrite($_fd,$_s."\\n");return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $base, $id, $line, $column, $file) {
$Warguments = $Sarguments = $Uarguments = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_arguments =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x9 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x10 = $x9($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_arguments = $x10; }
else { $_arguments = JS::$undefined; $Uarguments = TRUE; }
return array(&$_arguments, $Warguments, $Sarguments, $Uarguments);
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x9=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x10;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x16 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x16[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x16;
$x17 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x18 = $x17($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x18->class) && $x18->class === 'Error' && !isset($x18->properties['file']) && !isset($x18->properties['line']) && !isset($x18->properties['column'])) {$x18->properties['file'] = $file;$x18->properties['line'] = $line;$x18->properties['column'] = $column;$x18->attributes['file'] = $x18->attributes['line'] = $x18->attributes['column'] = 0; }
throw new JSException($x18, $line, $column, $file);
}
$W15 = $S15 = $U15 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x15 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x19 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x20 = $x19($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x20; }
else { $x15 = JS::$undefined; $U15 = TRUE; }
return array(&$x15, $W15, $S15, $U15);
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x16=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x16[0];list(,$WTypeError,$STypeError,$UTypeError)=$x16;$x17=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x18=$x17($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x18->class)&&$x18->class===\'Error\'&&!isset($x18->properties[\'file\'])&&!isset($x18->properties[\'line\'])&&!isset($x18->properties[\'column\'])){$x18->properties[\'file\']=$file;$x18->properties[\'line\']=$line;$x18->properties[\'column\']=$column;$x18->attributes[\'file\']=$x18->attributes[\'line\']=$x18->attributes[\'column\']=0;}throw new JSException($x18,$line,$column,$file);}$W15=$S15=$U15=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x15=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x19=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x20=$x19($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x20;}else{$x15=JS::$undefined;$U15=TRUE;}return array(&$x15,$W15,$S15,$U15);}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x5 =& $scope->properties['arguments'];
$x5->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x5->properties[$i] = $args[$i];
$x5->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['data'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_data =& $scope->properties['data'];
$Udata = FALSE;
$global->scope[++$global->scope_sp] = $scope;
static $out; if ($out === NULL) { $out = defined('STDOUT') ? STDOUT : fopen('php://stdout', 'w'); };
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x11 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'arguments', 9, 7, '<image>/16_console.js');
$_arguments =& $x11[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x11;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x12 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 9, 7, '<image>/16_console.js');
$_ReferenceError =& $x12[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x12;
$x13 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 9, 7);
$x14 = $x13($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x14->class) && $x14->class === 'Error' && !isset($x14->properties['file']) && !isset($x14->properties['line']) && !isset($x14->properties['column'])) {$x14->properties['file'] = '<image>/16_console.js';$x14->properties['line'] = 9;$x14->properties['column'] = 7;$x14->attributes['file'] = $x14->attributes['line'] = $x14->attributes['column'] = 0; }
throw new JSException($x14, 9, 7, '<image>/16_console.js');
}
unset($x15, $W15, $S15, $U15);
$x21 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_arguments, (string) 'length', 9, 16, '<image>/16_console.js');
$x15 =& $x21[0]; list(,$W15,$S15,$U15) = $x21;
$x6 = JS::toPrimitive($x15, $global);
$x7 = JS::toPrimitive(1, $global);
$x8 = (is_string($x7) && is_string($x6) ? strcmp($x7, $x6) < 0 : (!is_nan($x22 = JS::toNumber($x7, $global)) && !is_nan($x23 = JS::toNumber($x6, $global)) && $x22 < $x23));
if (JS::toBoolean($x8, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x25 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 10, 10, '<image>/16_console.js');
$_TypeError =& $x25[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x25;
$x26 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 10);
$x27 = $x26($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x27->class) && $x27->class === 'Error' && !isset($x27->properties['file']) && !isset($x27->properties['line']) && !isset($x27->properties['column'])) {$x27->properties['file'] = '<image>/16_console.js';$x27->properties['line'] = 10;$x27->properties['column'] = 10;$x27->attributes['file'] = $x27->attributes['line'] = $x27->attributes['column'] = 0; }
throw new JSException($x27, 10, 10, '<image>/16_console.js');
}
$x24 = JS::toObject($leThis, $global);
unset($x28, $W28, $S28, $U28);
$x29 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x24, (string) 'p', 10, 10, '<image>/16_console.js');
$x28 =& $x29[0]; list(,$W28,$S28,$U28) = $x29;
unset($_PHP, $WPHP, $SPHP, $UPHP);
$x30 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'PHP', 10, 23, '<image>/16_console.js');
$_PHP =& $x30[0]; list(,$WPHP,$SPHP,$UPHP) = $x30;
if ($UPHP) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x31 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 10, 23, '<image>/16_console.js');
$_ReferenceError =& $x31[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x31;
$x32 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 23);
$x33 = $x32($global, $global, $_ReferenceError, array('PHP is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x33->class) && $x33->class === 'Error' && !isset($x33->properties['file']) && !isset($x33->properties['line']) && !isset($x33->properties['column'])) {$x33->properties['file'] = '<image>/16_console.js';$x33->properties['line'] = 10;$x33->properties['column'] = 23;$x33->attributes['file'] = $x33->attributes['line'] = $x33->attributes['column'] = 0; }
throw new JSException($x33, 10, 23, '<image>/16_console.js');
}
if ($_PHP === JS::$undefined || $_PHP === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 10, 29, '<image>/16_console.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 29);
$x37 = $x36($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error' && !isset($x37->properties['file']) && !isset($x37->properties['line']) && !isset($x37->properties['column'])) {$x37->properties['file'] = '<image>/16_console.js';$x37->properties['line'] = 10;$x37->properties['column'] = 29;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 10, 29, '<image>/16_console.js');
}
$x34 = JS::toObject($_PHP, $global);
unset($x38, $W38, $S38, $U38);
$x39 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x34, (string) 'fn', 10, 29, '<image>/16_console.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
if (!(is_object($x38) && isset($x38->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x42 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 10, 29, '<image>/16_console.js');
$_TypeError =& $x42[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x42;
$x43 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 29);
$x44 = $x43($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x44->class) && $x44->class === 'Error' && !isset($x44->properties['file']) && !isset($x44->properties['line']) && !isset($x44->properties['column'])) {$x44->properties['file'] = '<image>/16_console.js';$x44->properties['line'] = 10;$x44->properties['column'] = 29;$x44->attributes['file'] = $x44->attributes['line'] = $x44->attributes['column'] = 0; }
throw new JSException($x44, 10, 29, '<image>/16_console.js');
}
$x40 = $x38->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 29);
$x41 = $x40($global, $x34, $x38, array('vsprintf'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($_Array, $WArray, $SArray, $UArray);
$x45 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'Array', 10, 48, '<image>/16_console.js');
$_Array =& $x45[0]; list(,$WArray,$SArray,$UArray) = $x45;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x46 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 10, 48, '<image>/16_console.js');
$_ReferenceError =& $x46[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x46;
$x47 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 48);
$x48 = $x47($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x48->class) && $x48->class === 'Error' && !isset($x48->properties['file']) && !isset($x48->properties['line']) && !isset($x48->properties['column'])) {$x48->properties['file'] = '<image>/16_console.js';$x48->properties['line'] = 10;$x48->properties['column'] = 48;$x48->attributes['file'] = $x48->attributes['line'] = $x48->attributes['column'] = 0; }
throw new JSException($x48, 10, 48, '<image>/16_console.js');
}
unset($x49, $W49, $S49, $U49);
$x50 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_Array, (string) 'prototype', 10, 53, '<image>/16_console.js');
$x49 =& $x50[0]; list(,$W49,$S49,$U49) = $x50;
unset($x51, $W51, $S51, $U51);
$x52 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x49, (string) 'slice', 10, 63, '<image>/16_console.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if ($x51 === JS::$undefined || $x51 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x54 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 10, 74, '<image>/16_console.js');
$_TypeError =& $x54[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x54;
$x55 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 74);
$x56 = $x55($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x56->class) && $x56->class === 'Error' && !isset($x56->properties['file']) && !isset($x56->properties['line']) && !isset($x56->properties['column'])) {$x56->properties['file'] = '<image>/16_console.js';$x56->properties['line'] = 10;$x56->properties['column'] = 74;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
throw new JSException($x56, 10, 74, '<image>/16_console.js');
}
$x53 = JS::toObject($x51, $global);
unset($x57, $W57, $S57, $U57);
$x58 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x53, (string) 'call', 10, 74, '<image>/16_console.js');
$x57 =& $x58[0]; list(,$W57,$S57,$U57) = $x58;
if (!(is_object($x57) && isset($x57->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x61 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 10, 74, '<image>/16_console.js');
$_TypeError =& $x61[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x61;
$x62 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 74);
$x63 = $x62($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x63->class) && $x63->class === 'Error' && !isset($x63->properties['file']) && !isset($x63->properties['line']) && !isset($x63->properties['column'])) {$x63->properties['file'] = '<image>/16_console.js';$x63->properties['line'] = 10;$x63->properties['column'] = 74;$x63->attributes['file'] = $x63->attributes['line'] = $x63->attributes['column'] = 0; }
throw new JSException($x63, 10, 74, '<image>/16_console.js');
}
$x59 = $x57->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 74);
$x60 = $x59($global, $x53, $x57, array($_arguments, 1), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x41) && isset($x41->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x66 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 10, 41, '<image>/16_console.js');
$_TypeError =& $x66[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x66;
$x67 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 41);
$x68 = $x67($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x68->class) && $x68->class === 'Error' && !isset($x68->properties['file']) && !isset($x68->properties['line']) && !isset($x68->properties['column'])) {$x68->properties['file'] = '<image>/16_console.js';$x68->properties['line'] = 10;$x68->properties['column'] = 41;$x68->attributes['file'] = $x68->attributes['line'] = $x68->attributes['column'] = 0; }
throw new JSException($x68, 10, 41, '<image>/16_console.js');
}
$x64 = $x41->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 41);
$x65 = $x64($global, $global, $x41, array($_data, $x60), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x28) && isset($x28->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x71 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 10, 10, '<image>/16_console.js');
$_TypeError =& $x71[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x71;
$x72 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 10);
$x73 = $x72($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error' && !isset($x73->properties['file']) && !isset($x73->properties['line']) && !isset($x73->properties['column'])) {$x73->properties['file'] = '<image>/16_console.js';$x73->properties['line'] = 10;$x73->properties['column'] = 10;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 10, 10, '<image>/16_console.js');
}
$x69 = $x28->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 10);
$x70 = $x69($global, $x24, $x28, array($out, $x65), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x75 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 13, 9, '<image>/16_console.js');
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 13, 9);
$x77 = $x76($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error' && !isset($x77->properties['file']) && !isset($x77->properties['line']) && !isset($x77->properties['column'])) {$x77->properties['file'] = '<image>/16_console.js';$x77->properties['line'] = 13;$x77->properties['column'] = 9;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, 13, 9, '<image>/16_console.js');
}
$x74 = JS::toObject($leThis, $global);
unset($x78, $W78, $S78, $U78);
$x79 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x74, (string) 'p', 13, 9, '<image>/16_console.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x81 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 13, 34, '<image>/16_console.js');
$_TypeError =& $x81[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x81;
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 13, 34);
$x83 = $x82($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error' && !isset($x83->properties['file']) && !isset($x83->properties['line']) && !isset($x83->properties['column'])) {$x83->properties['file'] = '<image>/16_console.js';$x83->properties['line'] = 13;$x83->properties['column'] = 34;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, 13, 34, '<image>/16_console.js');
}
$x80 = JS::toObject($leThis, $global);
unset($x84, $W84, $S84, $U84);
$x85 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x80, (string) 'inspect', 13, 34, '<image>/16_console.js');
$x84 =& $x85[0]; list(,$W84,$S84,$U84) = $x85;
if (!(is_object($x84) && isset($x84->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 13, 34, '<image>/16_console.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 13, 34);
$x90 = $x89($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error' && !isset($x90->properties['file']) && !isset($x90->properties['line']) && !isset($x90->properties['column'])) {$x90->properties['file'] = '<image>/16_console.js';$x90->properties['line'] = 13;$x90->properties['column'] = 34;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 13, 34, '<image>/16_console.js');
}
$x86 = $x84->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 13, 34);
$x87 = $x86($global, $x80, $x84, array($_data), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x78) && isset($x78->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 13, 9, '<image>/16_console.js');
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
$x94 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 13, 9);
$x95 = $x94($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x95->class) && $x95->class === 'Error' && !isset($x95->properties['file']) && !isset($x95->properties['line']) && !isset($x95->properties['column'])) {$x95->properties['file'] = '<image>/16_console.js';$x95->properties['line'] = 13;$x95->properties['column'] = 9;$x95->attributes['file'] = $x95->attributes['line'] = $x95->attributes['column'] = 0; }
throw new JSException($x95, 13, 9, '<image>/16_console.js');
}
$x91 = $x78->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 13, 9);
$x92 = $x91($global, $x74, $x78, array($out, $x87), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x5=&$scope->properties[\'arguments\'];$x5->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x5->properties[$i]=$args[$i];$x5->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$global->scope[++$global->scope_sp]=$scope;static$out;if($out===NULL){$out=defined(\'STDOUT\')?STDOUT:fopen(\'php://stdout\',\'w\');}unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x11=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'arguments\',9,7,\'<image>/16_console.js\');$_arguments=&$x11[0];list(,$Warguments,$Sarguments,$Uarguments)=$x11;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x12=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',9,7,\'<image>/16_console.js\');$_ReferenceError=&$x12[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x12;$x13=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',9,7);$x14=$x13($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x14->class)&&$x14->class===\'Error\'&&!isset($x14->properties[\'file\'])&&!isset($x14->properties[\'line\'])&&!isset($x14->properties[\'column\'])){$x14->properties[\'file\']=\'<image>/16_console.js\';$x14->properties[\'line\']=9;$x14->properties[\'column\']=7;$x14->attributes[\'file\']=$x14->attributes[\'line\']=$x14->attributes[\'column\']=0;}throw new JSException($x14,9,7,\'<image>/16_console.js\');}unset($x15,$W15,$S15,$U15);$x21=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_arguments,(string)\'length\',9,16,\'<image>/16_console.js\');$x15=&$x21[0];list(,$W15,$S15,$U15)=$x21;$x6=JS::toPrimitive($x15,$global);$x7=JS::toPrimitive(1,$global);$x8=(is_string($x7)&&is_string($x6)?strcmp($x7,$x6)<0:(!is_nan($x22=JS::toNumber($x7,$global))&&!is_nan($x23=JS::toNumber($x6,$global))&&$x22<$x23));if(JS::toBoolean($x8,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x25=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',10,10,\'<image>/16_console.js\');$_TypeError=&$x25[0];list(,$WTypeError,$STypeError,$UTypeError)=$x25;$x26=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,10);$x27=$x26($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=\'<image>/16_console.js\';$x27->properties[\'line\']=10;$x27->properties[\'column\']=10;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,10,10,\'<image>/16_console.js\');}$x24=JS::toObject($leThis,$global);unset($x28,$W28,$S28,$U28);$x29=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x24,(string)\'p\',10,10,\'<image>/16_console.js\');$x28=&$x29[0];list(,$W28,$S28,$U28)=$x29;unset($_PHP,$WPHP,$SPHP,$UPHP);$x30=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'PHP\',10,23,\'<image>/16_console.js\');$_PHP=&$x30[0];list(,$WPHP,$SPHP,$UPHP)=$x30;if($UPHP){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x31=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',10,23,\'<image>/16_console.js\');$_ReferenceError=&$x31[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x31;$x32=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,23);$x33=$x32($global,$global,$_ReferenceError,array(\'PHP is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x33->class)&&$x33->class===\'Error\'&&!isset($x33->properties[\'file\'])&&!isset($x33->properties[\'line\'])&&!isset($x33->properties[\'column\'])){$x33->properties[\'file\']=\'<image>/16_console.js\';$x33->properties[\'line\']=10;$x33->properties[\'column\']=23;$x33->attributes[\'file\']=$x33->attributes[\'line\']=$x33->attributes[\'column\']=0;}throw new JSException($x33,10,23,\'<image>/16_console.js\');}if($_PHP===JS::$undefined||$_PHP===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',10,29,\'<image>/16_console.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,29);$x37=$x36($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'&&!isset($x37->properties[\'file\'])&&!isset($x37->properties[\'line\'])&&!isset($x37->properties[\'column\'])){$x37->properties[\'file\']=\'<image>/16_console.js\';$x37->properties[\'line\']=10;$x37->properties[\'column\']=29;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,10,29,\'<image>/16_console.js\');}$x34=JS::toObject($_PHP,$global);unset($x38,$W38,$S38,$U38);$x39=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x34,(string)\'fn\',10,29,\'<image>/16_console.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;if(!(is_object($x38)&&isset($x38->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x42=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',10,29,\'<image>/16_console.js\');$_TypeError=&$x42[0];list(,$WTypeError,$STypeError,$UTypeError)=$x42;$x43=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,29);$x44=$x43($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x44->class)&&$x44->class===\'Error\'&&!isset($x44->properties[\'file\'])&&!isset($x44->properties[\'line\'])&&!isset($x44->properties[\'column\'])){$x44->properties[\'file\']=\'<image>/16_console.js\';$x44->properties[\'line\']=10;$x44->properties[\'column\']=29;$x44->attributes[\'file\']=$x44->attributes[\'line\']=$x44->attributes[\'column\']=0;}throw new JSException($x44,10,29,\'<image>/16_console.js\');}$x40=$x38->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,29);$x41=$x40($global,$x34,$x38,array(\'vsprintf\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($_Array,$WArray,$SArray,$UArray);$x45=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'Array\',10,48,\'<image>/16_console.js\');$_Array=&$x45[0];list(,$WArray,$SArray,$UArray)=$x45;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x46=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',10,48,\'<image>/16_console.js\');$_ReferenceError=&$x46[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x46;$x47=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,48);$x48=$x47($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x48->class)&&$x48->class===\'Error\'&&!isset($x48->properties[\'file\'])&&!isset($x48->properties[\'line\'])&&!isset($x48->properties[\'column\'])){$x48->properties[\'file\']=\'<image>/16_console.js\';$x48->properties[\'line\']=10;$x48->properties[\'column\']=48;$x48->attributes[\'file\']=$x48->attributes[\'line\']=$x48->attributes[\'column\']=0;}throw new JSException($x48,10,48,\'<image>/16_console.js\');}unset($x49,$W49,$S49,$U49);$x50=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_Array,(string)\'prototype\',10,53,\'<image>/16_console.js\');$x49=&$x50[0];list(,$W49,$S49,$U49)=$x50;unset($x51,$W51,$S51,$U51);$x52=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x49,(string)\'slice\',10,63,\'<image>/16_console.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;if($x51===JS::$undefined||$x51===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x54=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',10,74,\'<image>/16_console.js\');$_TypeError=&$x54[0];list(,$WTypeError,$STypeError,$UTypeError)=$x54;$x55=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,74);$x56=$x55($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/16_console.js\';$x56->properties[\'line\']=10;$x56->properties[\'column\']=74;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,10,74,\'<image>/16_console.js\');}$x53=JS::toObject($x51,$global);unset($x57,$W57,$S57,$U57);$x58=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x53,(string)\'call\',10,74,\'<image>/16_console.js\');$x57=&$x58[0];list(,$W57,$S57,$U57)=$x58;if(!(is_object($x57)&&isset($x57->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x61=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',10,74,\'<image>/16_console.js\');$_TypeError=&$x61[0];list(,$WTypeError,$STypeError,$UTypeError)=$x61;$x62=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,74);$x63=$x62($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'&&!isset($x63->properties[\'file\'])&&!isset($x63->properties[\'line\'])&&!isset($x63->properties[\'column\'])){$x63->properties[\'file\']=\'<image>/16_console.js\';$x63->properties[\'line\']=10;$x63->properties[\'column\']=74;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,10,74,\'<image>/16_console.js\');}$x59=$x57->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,74);$x60=$x59($global,$x53,$x57,array($_arguments,1),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x41)&&isset($x41->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x66=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',10,41,\'<image>/16_console.js\');$_TypeError=&$x66[0];list(,$WTypeError,$STypeError,$UTypeError)=$x66;$x67=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,41);$x68=$x67($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x68->class)&&$x68->class===\'Error\'&&!isset($x68->properties[\'file\'])&&!isset($x68->properties[\'line\'])&&!isset($x68->properties[\'column\'])){$x68->properties[\'file\']=\'<image>/16_console.js\';$x68->properties[\'line\']=10;$x68->properties[\'column\']=41;$x68->attributes[\'file\']=$x68->attributes[\'line\']=$x68->attributes[\'column\']=0;}throw new JSException($x68,10,41,\'<image>/16_console.js\');}$x64=$x41->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,41);$x65=$x64($global,$global,$x41,array($_data,$x60),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x28)&&isset($x28->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x71=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',10,10,\'<image>/16_console.js\');$_TypeError=&$x71[0];list(,$WTypeError,$STypeError,$UTypeError)=$x71;$x72=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,10);$x73=$x72($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'&&!isset($x73->properties[\'file\'])&&!isset($x73->properties[\'line\'])&&!isset($x73->properties[\'column\'])){$x73->properties[\'file\']=\'<image>/16_console.js\';$x73->properties[\'line\']=10;$x73->properties[\'column\']=10;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,10,10,\'<image>/16_console.js\');}$x69=$x28->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,10);$x70=$x69($global,$x24,$x28,array($out,$x65),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',13,9,\'<image>/16_console.js\');$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',13,9);$x77=$x76($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x77->class)&&$x77->class===\'Error\'&&!isset($x77->properties[\'file\'])&&!isset($x77->properties[\'line\'])&&!isset($x77->properties[\'column\'])){$x77->properties[\'file\']=\'<image>/16_console.js\';$x77->properties[\'line\']=13;$x77->properties[\'column\']=9;$x77->attributes[\'file\']=$x77->attributes[\'line\']=$x77->attributes[\'column\']=0;}throw new JSException($x77,13,9,\'<image>/16_console.js\');}$x74=JS::toObject($leThis,$global);unset($x78,$W78,$S78,$U78);$x79=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x74,(string)\'p\',13,9,\'<image>/16_console.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x81=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',13,34,\'<image>/16_console.js\');$_TypeError=&$x81[0];list(,$WTypeError,$STypeError,$UTypeError)=$x81;$x82=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',13,34);$x83=$x82($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x83->class)&&$x83->class===\'Error\'&&!isset($x83->properties[\'file\'])&&!isset($x83->properties[\'line\'])&&!isset($x83->properties[\'column\'])){$x83->properties[\'file\']=\'<image>/16_console.js\';$x83->properties[\'line\']=13;$x83->properties[\'column\']=34;$x83->attributes[\'file\']=$x83->attributes[\'line\']=$x83->attributes[\'column\']=0;}throw new JSException($x83,13,34,\'<image>/16_console.js\');}$x80=JS::toObject($leThis,$global);unset($x84,$W84,$S84,$U84);$x85=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x80,(string)\'inspect\',13,34,\'<image>/16_console.js\');$x84=&$x85[0];list(,$W84,$S84,$U84)=$x85;if(!(is_object($x84)&&isset($x84->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x88=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',13,34,\'<image>/16_console.js\');$_TypeError=&$x88[0];list(,$WTypeError,$STypeError,$UTypeError)=$x88;$x89=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',13,34);$x90=$x89($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x90->class)&&$x90->class===\'Error\'&&!isset($x90->properties[\'file\'])&&!isset($x90->properties[\'line\'])&&!isset($x90->properties[\'column\'])){$x90->properties[\'file\']=\'<image>/16_console.js\';$x90->properties[\'line\']=13;$x90->properties[\'column\']=34;$x90->attributes[\'file\']=$x90->attributes[\'line\']=$x90->attributes[\'column\']=0;}throw new JSException($x90,13,34,\'<image>/16_console.js\');}$x86=$x84->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',13,34);$x87=$x86($global,$x80,$x84,array($_data),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x78)&&isset($x78->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x93=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',13,9,\'<image>/16_console.js\');$_TypeError=&$x93[0];list(,$WTypeError,$STypeError,$UTypeError)=$x93;$x94=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',13,9);$x95=$x94($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x95->class)&&$x95->class===\'Error\'&&!isset($x95->properties[\'file\'])&&!isset($x95->properties[\'line\'])&&!isset($x95->properties[\'column\'])){$x95->properties[\'file\']=\'<image>/16_console.js\';$x95->properties[\'line\']=13;$x95->properties[\'column\']=9;$x95->attributes[\'file\']=$x95->attributes[\'line\']=$x95->attributes[\'column\']=0;}throw new JSException($x95,13,9,\'<image>/16_console.js\');}$x91=$x78->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',13,9);$x92=$x91($global,$x74,$x78,array($out,$x87),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x98 =& $scope->properties['arguments'];
$x98->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x98->properties[$i] = $args[$i];
$x98->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['data'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_data =& $scope->properties['data'];
$Udata = FALSE;
$global->scope[++$global->scope_sp] = $scope;
static $err; if ($err === NULL) { $err = defined('STDERR') ? STDERR : fopen('php://stderr', 'w'); };
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x102 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'arguments', 19, 7, '<image>/16_console.js');
$_arguments =& $x102[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x102;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x103 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 19, 7, '<image>/16_console.js');
$_ReferenceError =& $x103[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x103;
$x104 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 19, 7);
$x105 = $x104($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x105->class) && $x105->class === 'Error' && !isset($x105->properties['file']) && !isset($x105->properties['line']) && !isset($x105->properties['column'])) {$x105->properties['file'] = '<image>/16_console.js';$x105->properties['line'] = 19;$x105->properties['column'] = 7;$x105->attributes['file'] = $x105->attributes['line'] = $x105->attributes['column'] = 0; }
throw new JSException($x105, 19, 7, '<image>/16_console.js');
}
unset($x106, $W106, $S106, $U106);
$x107 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_arguments, (string) 'length', 19, 16, '<image>/16_console.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
$x99 = JS::toPrimitive($x106, $global);
$x100 = JS::toPrimitive(1, $global);
$x101 = (is_string($x100) && is_string($x99) ? strcmp($x100, $x99) < 0 : (!is_nan($x108 = JS::toNumber($x100, $global)) && !is_nan($x109 = JS::toNumber($x99, $global)) && $x108 < $x109));
if (JS::toBoolean($x101, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x111 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 20, 10, '<image>/16_console.js');
$_TypeError =& $x111[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x111;
$x112 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 10);
$x113 = $x112($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x113->class) && $x113->class === 'Error' && !isset($x113->properties['file']) && !isset($x113->properties['line']) && !isset($x113->properties['column'])) {$x113->properties['file'] = '<image>/16_console.js';$x113->properties['line'] = 20;$x113->properties['column'] = 10;$x113->attributes['file'] = $x113->attributes['line'] = $x113->attributes['column'] = 0; }
throw new JSException($x113, 20, 10, '<image>/16_console.js');
}
$x110 = JS::toObject($leThis, $global);
unset($x114, $W114, $S114, $U114);
$x115 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x110, (string) 'p', 20, 10, '<image>/16_console.js');
$x114 =& $x115[0]; list(,$W114,$S114,$U114) = $x115;
unset($_PHP, $WPHP, $SPHP, $UPHP);
$x116 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'PHP', 20, 23, '<image>/16_console.js');
$_PHP =& $x116[0]; list(,$WPHP,$SPHP,$UPHP) = $x116;
if ($UPHP) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x117 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 20, 23, '<image>/16_console.js');
$_ReferenceError =& $x117[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x117;
$x118 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 23);
$x119 = $x118($global, $global, $_ReferenceError, array('PHP is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x119->class) && $x119->class === 'Error' && !isset($x119->properties['file']) && !isset($x119->properties['line']) && !isset($x119->properties['column'])) {$x119->properties['file'] = '<image>/16_console.js';$x119->properties['line'] = 20;$x119->properties['column'] = 23;$x119->attributes['file'] = $x119->attributes['line'] = $x119->attributes['column'] = 0; }
throw new JSException($x119, 20, 23, '<image>/16_console.js');
}
if ($_PHP === JS::$undefined || $_PHP === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x121 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 20, 29, '<image>/16_console.js');
$_TypeError =& $x121[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x121;
$x122 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 29);
$x123 = $x122($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x123->class) && $x123->class === 'Error' && !isset($x123->properties['file']) && !isset($x123->properties['line']) && !isset($x123->properties['column'])) {$x123->properties['file'] = '<image>/16_console.js';$x123->properties['line'] = 20;$x123->properties['column'] = 29;$x123->attributes['file'] = $x123->attributes['line'] = $x123->attributes['column'] = 0; }
throw new JSException($x123, 20, 29, '<image>/16_console.js');
}
$x120 = JS::toObject($_PHP, $global);
unset($x124, $W124, $S124, $U124);
$x125 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x120, (string) 'fn', 20, 29, '<image>/16_console.js');
$x124 =& $x125[0]; list(,$W124,$S124,$U124) = $x125;
if (!(is_object($x124) && isset($x124->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x128 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 20, 29, '<image>/16_console.js');
$_TypeError =& $x128[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x128;
$x129 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 29);
$x130 = $x129($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x130->class) && $x130->class === 'Error' && !isset($x130->properties['file']) && !isset($x130->properties['line']) && !isset($x130->properties['column'])) {$x130->properties['file'] = '<image>/16_console.js';$x130->properties['line'] = 20;$x130->properties['column'] = 29;$x130->attributes['file'] = $x130->attributes['line'] = $x130->attributes['column'] = 0; }
throw new JSException($x130, 20, 29, '<image>/16_console.js');
}
$x126 = $x124->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 29);
$x127 = $x126($global, $x120, $x124, array('vsprintf'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($_Array, $WArray, $SArray, $UArray);
$x131 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'Array', 20, 48, '<image>/16_console.js');
$_Array =& $x131[0]; list(,$WArray,$SArray,$UArray) = $x131;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x132 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 20, 48, '<image>/16_console.js');
$_ReferenceError =& $x132[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x132;
$x133 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 48);
$x134 = $x133($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x134->class) && $x134->class === 'Error' && !isset($x134->properties['file']) && !isset($x134->properties['line']) && !isset($x134->properties['column'])) {$x134->properties['file'] = '<image>/16_console.js';$x134->properties['line'] = 20;$x134->properties['column'] = 48;$x134->attributes['file'] = $x134->attributes['line'] = $x134->attributes['column'] = 0; }
throw new JSException($x134, 20, 48, '<image>/16_console.js');
}
unset($x135, $W135, $S135, $U135);
$x136 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_Array, (string) 'prototype', 20, 53, '<image>/16_console.js');
$x135 =& $x136[0]; list(,$W135,$S135,$U135) = $x136;
unset($x137, $W137, $S137, $U137);
$x138 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x135, (string) 'slice', 20, 63, '<image>/16_console.js');
$x137 =& $x138[0]; list(,$W137,$S137,$U137) = $x138;
if ($x137 === JS::$undefined || $x137 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x140 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 20, 74, '<image>/16_console.js');
$_TypeError =& $x140[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x140;
$x141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 74);
$x142 = $x141($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x142->class) && $x142->class === 'Error' && !isset($x142->properties['file']) && !isset($x142->properties['line']) && !isset($x142->properties['column'])) {$x142->properties['file'] = '<image>/16_console.js';$x142->properties['line'] = 20;$x142->properties['column'] = 74;$x142->attributes['file'] = $x142->attributes['line'] = $x142->attributes['column'] = 0; }
throw new JSException($x142, 20, 74, '<image>/16_console.js');
}
$x139 = JS::toObject($x137, $global);
unset($x143, $W143, $S143, $U143);
$x144 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x139, (string) 'call', 20, 74, '<image>/16_console.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if (!(is_object($x143) && isset($x143->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x147 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 20, 74, '<image>/16_console.js');
$_TypeError =& $x147[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x147;
$x148 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 74);
$x149 = $x148($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x149->class) && $x149->class === 'Error' && !isset($x149->properties['file']) && !isset($x149->properties['line']) && !isset($x149->properties['column'])) {$x149->properties['file'] = '<image>/16_console.js';$x149->properties['line'] = 20;$x149->properties['column'] = 74;$x149->attributes['file'] = $x149->attributes['line'] = $x149->attributes['column'] = 0; }
throw new JSException($x149, 20, 74, '<image>/16_console.js');
}
$x145 = $x143->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 74);
$x146 = $x145($global, $x139, $x143, array($_arguments, 1), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x127) && isset($x127->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x152 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 20, 41, '<image>/16_console.js');
$_TypeError =& $x152[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x152;
$x153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 41);
$x154 = $x153($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x154->class) && $x154->class === 'Error' && !isset($x154->properties['file']) && !isset($x154->properties['line']) && !isset($x154->properties['column'])) {$x154->properties['file'] = '<image>/16_console.js';$x154->properties['line'] = 20;$x154->properties['column'] = 41;$x154->attributes['file'] = $x154->attributes['line'] = $x154->attributes['column'] = 0; }
throw new JSException($x154, 20, 41, '<image>/16_console.js');
}
$x150 = $x127->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 41);
$x151 = $x150($global, $global, $x127, array($_data, $x146), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x114) && isset($x114->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 20, 10, '<image>/16_console.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 10);
$x159 = $x158($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error' && !isset($x159->properties['file']) && !isset($x159->properties['line']) && !isset($x159->properties['column'])) {$x159->properties['file'] = '<image>/16_console.js';$x159->properties['line'] = 20;$x159->properties['column'] = 10;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 20, 10, '<image>/16_console.js');
}
$x155 = $x114->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 10);
$x156 = $x155($global, $x110, $x114, array($err, $x151), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x161 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 23, 9, '<image>/16_console.js');
$_TypeError =& $x161[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x161;
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 23, 9);
$x163 = $x162($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error' && !isset($x163->properties['file']) && !isset($x163->properties['line']) && !isset($x163->properties['column'])) {$x163->properties['file'] = '<image>/16_console.js';$x163->properties['line'] = 23;$x163->properties['column'] = 9;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 23, 9, '<image>/16_console.js');
}
$x160 = JS::toObject($leThis, $global);
unset($x164, $W164, $S164, $U164);
$x165 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x160, (string) 'p', 23, 9, '<image>/16_console.js');
$x164 =& $x165[0]; list(,$W164,$S164,$U164) = $x165;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x167 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 23, 34, '<image>/16_console.js');
$_TypeError =& $x167[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x167;
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 23, 34);
$x169 = $x168($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/16_console.js';$x169->properties['line'] = 23;$x169->properties['column'] = 34;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 23, 34, '<image>/16_console.js');
}
$x166 = JS::toObject($leThis, $global);
unset($x170, $W170, $S170, $U170);
$x171 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x166, (string) 'inspect', 23, 34, '<image>/16_console.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
if (!(is_object($x170) && isset($x170->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x174 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 23, 34, '<image>/16_console.js');
$_TypeError =& $x174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x174;
$x175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 23, 34);
$x176 = $x175($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x176->class) && $x176->class === 'Error' && !isset($x176->properties['file']) && !isset($x176->properties['line']) && !isset($x176->properties['column'])) {$x176->properties['file'] = '<image>/16_console.js';$x176->properties['line'] = 23;$x176->properties['column'] = 34;$x176->attributes['file'] = $x176->attributes['line'] = $x176->attributes['column'] = 0; }
throw new JSException($x176, 23, 34, '<image>/16_console.js');
}
$x172 = $x170->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 23, 34);
$x173 = $x172($global, $x166, $x170, array($_data), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x164) && isset($x164->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x179 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 23, 9, '<image>/16_console.js');
$_TypeError =& $x179[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x179;
$x180 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 23, 9);
$x181 = $x180($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x181->class) && $x181->class === 'Error' && !isset($x181->properties['file']) && !isset($x181->properties['line']) && !isset($x181->properties['column'])) {$x181->properties['file'] = '<image>/16_console.js';$x181->properties['line'] = 23;$x181->properties['column'] = 9;$x181->attributes['file'] = $x181->attributes['line'] = $x181->attributes['column'] = 0; }
throw new JSException($x181, 23, 9, '<image>/16_console.js');
}
$x177 = $x164->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 23, 9);
$x178 = $x177($global, $x160, $x164, array($err, $x173), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x98=&$scope->properties[\'arguments\'];$x98->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x98->properties[$i]=$args[$i];$x98->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$global->scope[++$global->scope_sp]=$scope;static$err;if($err===NULL){$err=defined(\'STDERR\')?STDERR:fopen(\'php://stderr\',\'w\');}unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x102=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'arguments\',19,7,\'<image>/16_console.js\');$_arguments=&$x102[0];list(,$Warguments,$Sarguments,$Uarguments)=$x102;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x103=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',19,7,\'<image>/16_console.js\');$_ReferenceError=&$x103[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x103;$x104=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',19,7);$x105=$x104($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x105->class)&&$x105->class===\'Error\'&&!isset($x105->properties[\'file\'])&&!isset($x105->properties[\'line\'])&&!isset($x105->properties[\'column\'])){$x105->properties[\'file\']=\'<image>/16_console.js\';$x105->properties[\'line\']=19;$x105->properties[\'column\']=7;$x105->attributes[\'file\']=$x105->attributes[\'line\']=$x105->attributes[\'column\']=0;}throw new JSException($x105,19,7,\'<image>/16_console.js\');}unset($x106,$W106,$S106,$U106);$x107=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_arguments,(string)\'length\',19,16,\'<image>/16_console.js\');$x106=&$x107[0];list(,$W106,$S106,$U106)=$x107;$x99=JS::toPrimitive($x106,$global);$x100=JS::toPrimitive(1,$global);$x101=(is_string($x100)&&is_string($x99)?strcmp($x100,$x99)<0:(!is_nan($x108=JS::toNumber($x100,$global))&&!is_nan($x109=JS::toNumber($x99,$global))&&$x108<$x109));if(JS::toBoolean($x101,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x111=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',20,10,\'<image>/16_console.js\');$_TypeError=&$x111[0];list(,$WTypeError,$STypeError,$UTypeError)=$x111;$x112=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,10);$x113=$x112($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x113->class)&&$x113->class===\'Error\'&&!isset($x113->properties[\'file\'])&&!isset($x113->properties[\'line\'])&&!isset($x113->properties[\'column\'])){$x113->properties[\'file\']=\'<image>/16_console.js\';$x113->properties[\'line\']=20;$x113->properties[\'column\']=10;$x113->attributes[\'file\']=$x113->attributes[\'line\']=$x113->attributes[\'column\']=0;}throw new JSException($x113,20,10,\'<image>/16_console.js\');}$x110=JS::toObject($leThis,$global);unset($x114,$W114,$S114,$U114);$x115=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x110,(string)\'p\',20,10,\'<image>/16_console.js\');$x114=&$x115[0];list(,$W114,$S114,$U114)=$x115;unset($_PHP,$WPHP,$SPHP,$UPHP);$x116=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'PHP\',20,23,\'<image>/16_console.js\');$_PHP=&$x116[0];list(,$WPHP,$SPHP,$UPHP)=$x116;if($UPHP){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x117=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',20,23,\'<image>/16_console.js\');$_ReferenceError=&$x117[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x117;$x118=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,23);$x119=$x118($global,$global,$_ReferenceError,array(\'PHP is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x119->class)&&$x119->class===\'Error\'&&!isset($x119->properties[\'file\'])&&!isset($x119->properties[\'line\'])&&!isset($x119->properties[\'column\'])){$x119->properties[\'file\']=\'<image>/16_console.js\';$x119->properties[\'line\']=20;$x119->properties[\'column\']=23;$x119->attributes[\'file\']=$x119->attributes[\'line\']=$x119->attributes[\'column\']=0;}throw new JSException($x119,20,23,\'<image>/16_console.js\');}if($_PHP===JS::$undefined||$_PHP===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x121=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',20,29,\'<image>/16_console.js\');$_TypeError=&$x121[0];list(,$WTypeError,$STypeError,$UTypeError)=$x121;$x122=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,29);$x123=$x122($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x123->class)&&$x123->class===\'Error\'&&!isset($x123->properties[\'file\'])&&!isset($x123->properties[\'line\'])&&!isset($x123->properties[\'column\'])){$x123->properties[\'file\']=\'<image>/16_console.js\';$x123->properties[\'line\']=20;$x123->properties[\'column\']=29;$x123->attributes[\'file\']=$x123->attributes[\'line\']=$x123->attributes[\'column\']=0;}throw new JSException($x123,20,29,\'<image>/16_console.js\');}$x120=JS::toObject($_PHP,$global);unset($x124,$W124,$S124,$U124);$x125=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x120,(string)\'fn\',20,29,\'<image>/16_console.js\');$x124=&$x125[0];list(,$W124,$S124,$U124)=$x125;if(!(is_object($x124)&&isset($x124->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x128=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',20,29,\'<image>/16_console.js\');$_TypeError=&$x128[0];list(,$WTypeError,$STypeError,$UTypeError)=$x128;$x129=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,29);$x130=$x129($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x130->class)&&$x130->class===\'Error\'&&!isset($x130->properties[\'file\'])&&!isset($x130->properties[\'line\'])&&!isset($x130->properties[\'column\'])){$x130->properties[\'file\']=\'<image>/16_console.js\';$x130->properties[\'line\']=20;$x130->properties[\'column\']=29;$x130->attributes[\'file\']=$x130->attributes[\'line\']=$x130->attributes[\'column\']=0;}throw new JSException($x130,20,29,\'<image>/16_console.js\');}$x126=$x124->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,29);$x127=$x126($global,$x120,$x124,array(\'vsprintf\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($_Array,$WArray,$SArray,$UArray);$x131=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'Array\',20,48,\'<image>/16_console.js\');$_Array=&$x131[0];list(,$WArray,$SArray,$UArray)=$x131;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x132=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',20,48,\'<image>/16_console.js\');$_ReferenceError=&$x132[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x132;$x133=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,48);$x134=$x133($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x134->class)&&$x134->class===\'Error\'&&!isset($x134->properties[\'file\'])&&!isset($x134->properties[\'line\'])&&!isset($x134->properties[\'column\'])){$x134->properties[\'file\']=\'<image>/16_console.js\';$x134->properties[\'line\']=20;$x134->properties[\'column\']=48;$x134->attributes[\'file\']=$x134->attributes[\'line\']=$x134->attributes[\'column\']=0;}throw new JSException($x134,20,48,\'<image>/16_console.js\');}unset($x135,$W135,$S135,$U135);$x136=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_Array,(string)\'prototype\',20,53,\'<image>/16_console.js\');$x135=&$x136[0];list(,$W135,$S135,$U135)=$x136;unset($x137,$W137,$S137,$U137);$x138=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x135,(string)\'slice\',20,63,\'<image>/16_console.js\');$x137=&$x138[0];list(,$W137,$S137,$U137)=$x138;if($x137===JS::$undefined||$x137===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x140=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',20,74,\'<image>/16_console.js\');$_TypeError=&$x140[0];list(,$WTypeError,$STypeError,$UTypeError)=$x140;$x141=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,74);$x142=$x141($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x142->class)&&$x142->class===\'Error\'&&!isset($x142->properties[\'file\'])&&!isset($x142->properties[\'line\'])&&!isset($x142->properties[\'column\'])){$x142->properties[\'file\']=\'<image>/16_console.js\';$x142->properties[\'line\']=20;$x142->properties[\'column\']=74;$x142->attributes[\'file\']=$x142->attributes[\'line\']=$x142->attributes[\'column\']=0;}throw new JSException($x142,20,74,\'<image>/16_console.js\');}$x139=JS::toObject($x137,$global);unset($x143,$W143,$S143,$U143);$x144=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x139,(string)\'call\',20,74,\'<image>/16_console.js\');$x143=&$x144[0];list(,$W143,$S143,$U143)=$x144;if(!(is_object($x143)&&isset($x143->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x147=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',20,74,\'<image>/16_console.js\');$_TypeError=&$x147[0];list(,$WTypeError,$STypeError,$UTypeError)=$x147;$x148=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,74);$x149=$x148($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x149->class)&&$x149->class===\'Error\'&&!isset($x149->properties[\'file\'])&&!isset($x149->properties[\'line\'])&&!isset($x149->properties[\'column\'])){$x149->properties[\'file\']=\'<image>/16_console.js\';$x149->properties[\'line\']=20;$x149->properties[\'column\']=74;$x149->attributes[\'file\']=$x149->attributes[\'line\']=$x149->attributes[\'column\']=0;}throw new JSException($x149,20,74,\'<image>/16_console.js\');}$x145=$x143->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,74);$x146=$x145($global,$x139,$x143,array($_arguments,1),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x127)&&isset($x127->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x152=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',20,41,\'<image>/16_console.js\');$_TypeError=&$x152[0];list(,$WTypeError,$STypeError,$UTypeError)=$x152;$x153=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,41);$x154=$x153($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x154->class)&&$x154->class===\'Error\'&&!isset($x154->properties[\'file\'])&&!isset($x154->properties[\'line\'])&&!isset($x154->properties[\'column\'])){$x154->properties[\'file\']=\'<image>/16_console.js\';$x154->properties[\'line\']=20;$x154->properties[\'column\']=41;$x154->attributes[\'file\']=$x154->attributes[\'line\']=$x154->attributes[\'column\']=0;}throw new JSException($x154,20,41,\'<image>/16_console.js\');}$x150=$x127->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,41);$x151=$x150($global,$global,$x127,array($_data,$x146),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x114)&&isset($x114->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x157=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',20,10,\'<image>/16_console.js\');$_TypeError=&$x157[0];list(,$WTypeError,$STypeError,$UTypeError)=$x157;$x158=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,10);$x159=$x158($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x159->class)&&$x159->class===\'Error\'&&!isset($x159->properties[\'file\'])&&!isset($x159->properties[\'line\'])&&!isset($x159->properties[\'column\'])){$x159->properties[\'file\']=\'<image>/16_console.js\';$x159->properties[\'line\']=20;$x159->properties[\'column\']=10;$x159->attributes[\'file\']=$x159->attributes[\'line\']=$x159->attributes[\'column\']=0;}throw new JSException($x159,20,10,\'<image>/16_console.js\');}$x155=$x114->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,10);$x156=$x155($global,$x110,$x114,array($err,$x151),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x161=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',23,9,\'<image>/16_console.js\');$_TypeError=&$x161[0];list(,$WTypeError,$STypeError,$UTypeError)=$x161;$x162=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',23,9);$x163=$x162($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x163->class)&&$x163->class===\'Error\'&&!isset($x163->properties[\'file\'])&&!isset($x163->properties[\'line\'])&&!isset($x163->properties[\'column\'])){$x163->properties[\'file\']=\'<image>/16_console.js\';$x163->properties[\'line\']=23;$x163->properties[\'column\']=9;$x163->attributes[\'file\']=$x163->attributes[\'line\']=$x163->attributes[\'column\']=0;}throw new JSException($x163,23,9,\'<image>/16_console.js\');}$x160=JS::toObject($leThis,$global);unset($x164,$W164,$S164,$U164);$x165=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x160,(string)\'p\',23,9,\'<image>/16_console.js\');$x164=&$x165[0];list(,$W164,$S164,$U164)=$x165;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x167=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',23,34,\'<image>/16_console.js\');$_TypeError=&$x167[0];list(,$WTypeError,$STypeError,$UTypeError)=$x167;$x168=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',23,34);$x169=$x168($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x169->class)&&$x169->class===\'Error\'&&!isset($x169->properties[\'file\'])&&!isset($x169->properties[\'line\'])&&!isset($x169->properties[\'column\'])){$x169->properties[\'file\']=\'<image>/16_console.js\';$x169->properties[\'line\']=23;$x169->properties[\'column\']=34;$x169->attributes[\'file\']=$x169->attributes[\'line\']=$x169->attributes[\'column\']=0;}throw new JSException($x169,23,34,\'<image>/16_console.js\');}$x166=JS::toObject($leThis,$global);unset($x170,$W170,$S170,$U170);$x171=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x166,(string)\'inspect\',23,34,\'<image>/16_console.js\');$x170=&$x171[0];list(,$W170,$S170,$U170)=$x171;if(!(is_object($x170)&&isset($x170->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x174=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',23,34,\'<image>/16_console.js\');$_TypeError=&$x174[0];list(,$WTypeError,$STypeError,$UTypeError)=$x174;$x175=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',23,34);$x176=$x175($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x176->class)&&$x176->class===\'Error\'&&!isset($x176->properties[\'file\'])&&!isset($x176->properties[\'line\'])&&!isset($x176->properties[\'column\'])){$x176->properties[\'file\']=\'<image>/16_console.js\';$x176->properties[\'line\']=23;$x176->properties[\'column\']=34;$x176->attributes[\'file\']=$x176->attributes[\'line\']=$x176->attributes[\'column\']=0;}throw new JSException($x176,23,34,\'<image>/16_console.js\');}$x172=$x170->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',23,34);$x173=$x172($global,$x166,$x170,array($_data),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x164)&&isset($x164->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x179=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',23,9,\'<image>/16_console.js\');$_TypeError=&$x179[0];list(,$WTypeError,$STypeError,$UTypeError)=$x179;$x180=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',23,9);$x181=$x180($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x181->class)&&$x181->class===\'Error\'&&!isset($x181->properties[\'file\'])&&!isset($x181->properties[\'line\'])&&!isset($x181->properties[\'column\'])){$x181->properties[\'file\']=\'<image>/16_console.js\';$x181->properties[\'line\']=23;$x181->properties[\'column\']=9;$x181->attributes[\'file\']=$x181->attributes[\'line\']=$x181->attributes[\'column\']=0;}throw new JSException($x181,23,9,\'<image>/16_console.js\');}$x177=$x164->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',23,9);$x178=$x177($global,$x160,$x164,array($err,$x173),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x184 =& $scope->properties['arguments'];
$x184->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x184->properties[$i] = $args[$i];
$x184->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['object'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_object =& $scope->properties['object'];
$Uobject = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x186 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 27, 18, '<image>/16_console.js');
$_TypeError =& $x186[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x186;
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 27, 18);
$x188 = $x187($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/16_console.js';$x188->properties['line'] = 27;$x188->properties['column'] = 18;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 27, 18, '<image>/16_console.js');
}
$x185 = JS::toObject($leThis, $global);
unset($x189, $W189, $S189, $U189);
$x190 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x185, (string) 'log', 27, 18, '<image>/16_console.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
if (!(is_object($x189) && isset($x189->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x193 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 27, 18, '<image>/16_console.js');
$_TypeError =& $x193[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x193;
$x194 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 27, 18);
$x195 = $x194($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error' && !isset($x195->properties['file']) && !isset($x195->properties['line']) && !isset($x195->properties['column'])) {$x195->properties['file'] = '<image>/16_console.js';$x195->properties['line'] = 27;$x195->properties['column'] = 18;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 27, 18, '<image>/16_console.js');
}
$x191 = $x189->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 27, 18);
$x192 = $x191($global, $x185, $x189, array($_object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x192;
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x184=&$scope->properties[\'arguments\'];$x184->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x184->properties[$i]=$args[$i];$x184->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'object\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_object=&$scope->properties[\'object\'];$Uobject=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x186=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',27,18,\'<image>/16_console.js\');$_TypeError=&$x186[0];list(,$WTypeError,$STypeError,$UTypeError)=$x186;$x187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',27,18);$x188=$x187($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x188->class)&&$x188->class===\'Error\'&&!isset($x188->properties[\'file\'])&&!isset($x188->properties[\'line\'])&&!isset($x188->properties[\'column\'])){$x188->properties[\'file\']=\'<image>/16_console.js\';$x188->properties[\'line\']=27;$x188->properties[\'column\']=18;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,27,18,\'<image>/16_console.js\');}$x185=JS::toObject($leThis,$global);unset($x189,$W189,$S189,$U189);$x190=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x185,(string)\'log\',27,18,\'<image>/16_console.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;if(!(is_object($x189)&&isset($x189->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x193=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',27,18,\'<image>/16_console.js\');$_TypeError=&$x193[0];list(,$WTypeError,$STypeError,$UTypeError)=$x193;$x194=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',27,18);$x195=$x194($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/16_console.js\';$x195->properties[\'line\']=27;$x195->properties[\'column\']=18;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,27,18,\'<image>/16_console.js\');}$x191=$x189->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',27,18);$x192=$x191($global,$x185,$x189,array($_object),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x192;return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_8($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x207 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x207[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x207;
$x208 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x209 = $x208($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x209->class) && $x209->class === 'Error' && !isset($x209->properties['file']) && !isset($x209->properties['line']) && !isset($x209->properties['column'])) {$x209->properties['file'] = $file;$x209->properties['line'] = $line;$x209->properties['column'] = $column;$x209->attributes['file'] = $x209->attributes['line'] = $x209->attributes['column'] = 0; }
throw new JSException($x209, $line, $column, $file);
}
$W206 = $S206 = $U206 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x206 =& $lookup->properties[$id]; $W206 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S206 = $lookup->setters[$id]; }
else { $x206 = JS::$undefined; $U206 = TRUE; }
return array(&$x206, $W206, $S206, $U206);
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_8($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x207=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x207[0];list(,$WTypeError,$STypeError,$UTypeError)=$x207;$x208=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x209=$x208($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x209->class)&&$x209->class===\'Error\'&&!isset($x209->properties[\'file\'])&&!isset($x209->properties[\'line\'])&&!isset($x209->properties[\'column\'])){$x209->properties[\'file\']=$file;$x209->properties[\'line\']=$line;$x209->properties[\'column\']=$column;$x209->attributes[\'file\']=$x209->attributes[\'line\']=$x209->attributes[\'column\']=0;}throw new JSException($x209,$line,$column,$file);}$W206=$S206=$U206=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x206=&$lookup->properties[$id];$W206=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S206=$lookup->setters[$id];}else{$x206=JS::$undefined;$U206=TRUE;}return array(&$x206,$W206,$S206,$U206);}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x199 =& $scope->properties['arguments'];
$x199->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x199->properties[$i] = $args[$i];
$x199->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['label'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_label =& $scope->properties['label'];
$Ulabel = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x200 = microtime(TRUE);
unset($x201, $W201, $S201, $U201);
$x202 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $leThis, (string) '_times', 33, 7, '<image>/16_console.js');
$x201 =& $x202[0]; list(,$W201,$S201,$U201) = $x202;
if ($x201 === JS::$undefined || $x201 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x203 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 33, 22, '<image>/16_console.js');
$_TypeError =& $x203[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x203;
$x204 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 33, 22);
$x205 = $x204($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x205->class) && $x205->class === 'Error' && !isset($x205->properties['file']) && !isset($x205->properties['line']) && !isset($x205->properties['column'])) {$x205->properties['file'] = '<image>/16_console.js';$x205->properties['line'] = 33;$x205->properties['column'] = 22;$x205->attributes['file'] = $x205->attributes['line'] = $x205->attributes['column'] = 0; }
throw new JSException($x205, 33, 22, '<image>/16_console.js');
}
$x201 = JS::toObject($x201, $global);
unset($x206, $W206, $S206, $U206);
$x210 = _f5a3c4832dbaf51c9bc86fdffdc142bb_8($global, $scope, $x201, (string) $_label, 33, 22, '<image>/16_console.js');
$x206 =& $x210[0]; list(,$W206,$S206,$U206) = $x210;
if ($U206 && (!isset($x201->extensible) || $x201->extensible)) {$x201->properties[$_label] = $x206; $x206 =& $x201->properties[$_label]; $x201->attributes[$_label] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U206 = FALSE; $W206 = TRUE; }
if (isset($S206)) {
$x212 = $S206->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 33, 22);
$x213 = $x212($global, $x201, $S206, array($x200), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x211 = $x213;
} else {
if (!$U206) {$x211 = $x200;if ($W206) { $x206 = $x200; }  }
else { $x211 = JS::$undefined; }
}
if (isset($x201->class) && $x201->class === 'Array' &&  is_int($_label) && $_label >= $x201->properties['length']) { $x201->properties['length'] = $_label + 1; }
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x199=&$scope->properties[\'arguments\'];$x199->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x199->properties[$i]=$args[$i];$x199->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'label\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_label=&$scope->properties[\'label\'];$Ulabel=FALSE;$global->scope[++$global->scope_sp]=$scope;$x200=microtime(TRUE);unset($x201,$W201,$S201,$U201);$x202=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$leThis,(string)\'_times\',33,7,\'<image>/16_console.js\');$x201=&$x202[0];list(,$W201,$S201,$U201)=$x202;if($x201===JS::$undefined||$x201===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x203=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',33,22,\'<image>/16_console.js\');$_TypeError=&$x203[0];list(,$WTypeError,$STypeError,$UTypeError)=$x203;$x204=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',33,22);$x205=$x204($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x205->class)&&$x205->class===\'Error\'&&!isset($x205->properties[\'file\'])&&!isset($x205->properties[\'line\'])&&!isset($x205->properties[\'column\'])){$x205->properties[\'file\']=\'<image>/16_console.js\';$x205->properties[\'line\']=33;$x205->properties[\'column\']=22;$x205->attributes[\'file\']=$x205->attributes[\'line\']=$x205->attributes[\'column\']=0;}throw new JSException($x205,33,22,\'<image>/16_console.js\');}$x201=JS::toObject($x201,$global);unset($x206,$W206,$S206,$U206);$x210=_f5a3c4832dbaf51c9bc86fdffdc142bb_8($global,$scope,$x201,(string)$_label,33,22,\'<image>/16_console.js\');$x206=&$x210[0];list(,$W206,$S206,$U206)=$x210;if($U206&&(!isset($x201->extensible)||$x201->extensible)){$x201->properties[$_label]=$x206;$x206=&$x201->properties[$_label];$x201->attributes[$_label]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U206=FALSE;$W206=TRUE;}if(isset($S206)){$x212=$S206->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',33,22);$x213=$x212($global,$x201,$S206,array($x200),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x211=$x213;}else{if(!$U206){$x211=$x200;if($W206){$x206=$x200;}}else{$x211=JS::$undefined;}}if(isset($x201->class)&&$x201->class===\'Array\'&&is_int($_label)&&$_label>=$x201->properties[\'length\']){$x201->properties[\'length\']=$_label+1;}return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x216 =& $scope->properties['arguments'];
$x216->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x216->properties[$i] = $args[$i];
$x216->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['label'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_label =& $scope->properties['label'];
$Ulabel = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['t'] = JS::$undefined; $_t =& $scope->properties['t'];
$Ut = FALSE;
$_t = microtime(TRUE);
unset($x218, $W218, $S218, $U218);
$x219 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $leThis, (string) '_times', 39, 11, '<image>/16_console.js');
$x218 =& $x219[0]; list(,$W218,$S218,$U218) = $x219;
unset($x220, $W220, $S220, $U220);
$x221 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x218, (string) $_label, 39, 18, '<image>/16_console.js');
$x220 =& $x221[0]; list(,$W220,$S220,$U220) = $x221;
$x217 = (((gettype($x220) === gettype(JS::$undefined) && $x220 === JS::$undefined))|| (((is_float($x220) || is_int($x220)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x220 == JS::$undefined));
if (JS::toBoolean($x217, $global)) {
unset($_Error, $WError, $SError, $UError);
$x224 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'Error', 40, 14, '<image>/16_console.js');
$_Error =& $x224[0]; list(,$WError,$SError,$UError) = $x224;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x225 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 40, 14, '<image>/16_console.js');
$_ReferenceError =& $x225[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x225;
$x226 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 14);
$x227 = $x226($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x227->class) && $x227->class === 'Error' && !isset($x227->properties['file']) && !isset($x227->properties['line']) && !isset($x227->properties['column'])) {$x227->properties['file'] = '<image>/16_console.js';$x227->properties['line'] = 40;$x227->properties['column'] = 14;$x227->attributes['file'] = $x227->attributes['line'] = $x227->attributes['column'] = 0; }
throw new JSException($x227, 40, 14, '<image>/16_console.js');
}
$x230 = JS::toPrimitive('Label ', $global);
$x231 = JS::toPrimitive($_label, $global);
$x228 = JS::toPrimitive((is_string($x230) || is_string($x231) ? JS::toString($x230, $global) . JS::toString($x231, $global) : JS::toNumber($x230, $global) + JS::toNumber($x231, $global)), $global);
$x229 = JS::toPrimitive(' not defined.', $global);
$x222 = clone JS::$objectTemplate;
unset($x232, $W232, $S232, $U232);
$x233 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_Error, (string) 'prototype', 40, 10, '<image>/16_console.js');
$x232 =& $x233[0]; list(,$W232,$S232,$U232) = $x233;
$x223 = $x232;
$x222->prototype = $x223;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x236 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 40, 10, '<image>/16_console.js');
$_TypeError =& $x236[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x236;
$x237 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 10);
$x238 = $x237($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x238->class) && $x238->class === 'Error' && !isset($x238->properties['file']) && !isset($x238->properties['line']) && !isset($x238->properties['column'])) {$x238->properties['file'] = '<image>/16_console.js';$x238->properties['line'] = 40;$x238->properties['column'] = 10;$x238->attributes['file'] = $x238->attributes['line'] = $x238->attributes['column'] = 0; }
throw new JSException($x238, 40, 10, '<image>/16_console.js');
}
$x234 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 10);
$x235 = $x234($global, $x222, $_Error, array((is_string($x228) || is_string($x229) ? JS::toString($x228, $global) . JS::toString($x229, $global) : JS::toNumber($x228, $global) + JS::toNumber($x229, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x223 = $x235;
if (is_object($x223) && $x223 !== JS::$undefined) { $x222 = $x223; }
if (isset($x222->class) && $x222->class === 'Error' && !isset($x222->properties['file']) && !isset($x222->properties['line']) && !isset($x222->properties['column'])) {$x222->properties['file'] = '<image>/16_console.js';$x222->properties['line'] = 40;$x222->properties['column'] = 4;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 40, 4, '<image>/16_console.js');;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x240 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 43, 11, '<image>/16_console.js');
$_TypeError =& $x240[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x240;
$x241 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x242 = $x241($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x242->class) && $x242->class === 'Error' && !isset($x242->properties['file']) && !isset($x242->properties['line']) && !isset($x242->properties['column'])) {$x242->properties['file'] = '<image>/16_console.js';$x242->properties['line'] = 43;$x242->properties['column'] = 11;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 43, 11, '<image>/16_console.js');
}
$x239 = JS::toObject($leThis, $global);
unset($x243, $W243, $S243, $U243);
$x244 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x239, (string) 'log', 43, 11, '<image>/16_console.js');
$x243 =& $x244[0]; list(,$W243,$S243,$U243) = $x244;
unset($x245, $W245, $S245, $U245);
$x246 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $leThis, (string) '_times', 43, 37, '<image>/16_console.js');
$x245 =& $x246[0]; list(,$W245,$S245,$U245) = $x246;
unset($x247, $W247, $S247, $U247);
$x248 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x245, (string) $_label, 43, 44, '<image>/16_console.js');
$x247 =& $x248[0]; list(,$W247,$S247,$U247) = $x248;
if (!(is_object($x243) && isset($x243->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x251 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 43, 11, '<image>/16_console.js');
$_TypeError =& $x251[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x251;
$x252 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x253 = $x252($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x253->class) && $x253->class === 'Error' && !isset($x253->properties['file']) && !isset($x253->properties['line']) && !isset($x253->properties['column'])) {$x253->properties['file'] = '<image>/16_console.js';$x253->properties['line'] = 43;$x253->properties['column'] = 11;$x253->attributes['file'] = $x253->attributes['line'] = $x253->attributes['column'] = 0; }
throw new JSException($x253, 43, 11, '<image>/16_console.js');
}
$x249 = $x243->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x250 = $x249($global, $x239, $x243, array('%s: %f', $_label, (JS::toNumber($_t, $global) - JS::toNumber($x247, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x255, $W255, $S255, $U255);
$x256 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $leThis, (string) '_times', 44, 14, '<image>/16_console.js');
$x255 =& $x256[0]; list(,$W255,$S255,$U255) = $x256;
if (!array_key_exists($_label, $x255->attributes)) { unset($x255->properties[$_label]); $x254 = TRUE; }
else if ($x255->attributes[$_label] & JS::CONFIGURABLE) { unset($x255->properties[$_label], $x255->attributes[$_label], $x255->getters[$_label], $x255->setters[$_label]); $x254 = TRUE; }
else { $x254 = FALSE; };
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x216=&$scope->properties[\'arguments\'];$x216->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x216->properties[$i]=$args[$i];$x216->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'label\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_label=&$scope->properties[\'label\'];$Ulabel=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'t\']=JS::$undefined;$_t=&$scope->properties[\'t\'];$Ut=FALSE;$_t=microtime(TRUE);unset($x218,$W218,$S218,$U218);$x219=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$leThis,(string)\'_times\',39,11,\'<image>/16_console.js\');$x218=&$x219[0];list(,$W218,$S218,$U218)=$x219;unset($x220,$W220,$S220,$U220);$x221=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x218,(string)$_label,39,18,\'<image>/16_console.js\');$x220=&$x221[0];list(,$W220,$S220,$U220)=$x221;$x217=(((gettype($x220)===gettype(JS::$undefined)&&$x220===JS::$undefined))||(((is_float($x220)||is_int($x220))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x220==JS::$undefined));if(JS::toBoolean($x217,$global)){unset($_Error,$WError,$SError,$UError);$x224=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'Error\',40,14,\'<image>/16_console.js\');$_Error=&$x224[0];list(,$WError,$SError,$UError)=$x224;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x225=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',40,14,\'<image>/16_console.js\');$_ReferenceError=&$x225[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x225;$x226=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,14);$x227=$x226($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x227->class)&&$x227->class===\'Error\'&&!isset($x227->properties[\'file\'])&&!isset($x227->properties[\'line\'])&&!isset($x227->properties[\'column\'])){$x227->properties[\'file\']=\'<image>/16_console.js\';$x227->properties[\'line\']=40;$x227->properties[\'column\']=14;$x227->attributes[\'file\']=$x227->attributes[\'line\']=$x227->attributes[\'column\']=0;}throw new JSException($x227,40,14,\'<image>/16_console.js\');}$x230=JS::toPrimitive(\'Label \',$global);$x231=JS::toPrimitive($_label,$global);$x228=JS::toPrimitive((is_string($x230)||is_string($x231)?JS::toString($x230,$global).JS::toString($x231,$global):JS::toNumber($x230,$global)+JS::toNumber($x231,$global)),$global);$x229=JS::toPrimitive(\' not defined.\',$global);$x222=clone JS::$objectTemplate;unset($x232,$W232,$S232,$U232);$x233=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_Error,(string)\'prototype\',40,10,\'<image>/16_console.js\');$x232=&$x233[0];list(,$W232,$S232,$U232)=$x233;$x223=$x232;$x222->prototype=$x223;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x236=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',40,10,\'<image>/16_console.js\');$_TypeError=&$x236[0];list(,$WTypeError,$STypeError,$UTypeError)=$x236;$x237=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,10);$x238=$x237($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x238->class)&&$x238->class===\'Error\'&&!isset($x238->properties[\'file\'])&&!isset($x238->properties[\'line\'])&&!isset($x238->properties[\'column\'])){$x238->properties[\'file\']=\'<image>/16_console.js\';$x238->properties[\'line\']=40;$x238->properties[\'column\']=10;$x238->attributes[\'file\']=$x238->attributes[\'line\']=$x238->attributes[\'column\']=0;}throw new JSException($x238,40,10,\'<image>/16_console.js\');}$x234=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,10);$x235=$x234($global,$x222,$_Error,array((is_string($x228)||is_string($x229)?JS::toString($x228,$global).JS::toString($x229,$global):JS::toNumber($x228,$global)+JS::toNumber($x229,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x223=$x235;if(is_object($x223)&&$x223!==JS::$undefined){$x222=$x223;}if(isset($x222->class)&&$x222->class===\'Error\'&&!isset($x222->properties[\'file\'])&&!isset($x222->properties[\'line\'])&&!isset($x222->properties[\'column\'])){$x222->properties[\'file\']=\'<image>/16_console.js\';$x222->properties[\'line\']=40;$x222->properties[\'column\']=4;$x222->attributes[\'file\']=$x222->attributes[\'line\']=$x222->attributes[\'column\']=0;}throw new JSException($x222,40,4,\'<image>/16_console.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x240=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',43,11,\'<image>/16_console.js\');$_TypeError=&$x240[0];list(,$WTypeError,$STypeError,$UTypeError)=$x240;$x241=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x242=$x241($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x242->class)&&$x242->class===\'Error\'&&!isset($x242->properties[\'file\'])&&!isset($x242->properties[\'line\'])&&!isset($x242->properties[\'column\'])){$x242->properties[\'file\']=\'<image>/16_console.js\';$x242->properties[\'line\']=43;$x242->properties[\'column\']=11;$x242->attributes[\'file\']=$x242->attributes[\'line\']=$x242->attributes[\'column\']=0;}throw new JSException($x242,43,11,\'<image>/16_console.js\');}$x239=JS::toObject($leThis,$global);unset($x243,$W243,$S243,$U243);$x244=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x239,(string)\'log\',43,11,\'<image>/16_console.js\');$x243=&$x244[0];list(,$W243,$S243,$U243)=$x244;unset($x245,$W245,$S245,$U245);$x246=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$leThis,(string)\'_times\',43,37,\'<image>/16_console.js\');$x245=&$x246[0];list(,$W245,$S245,$U245)=$x246;unset($x247,$W247,$S247,$U247);$x248=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x245,(string)$_label,43,44,\'<image>/16_console.js\');$x247=&$x248[0];list(,$W247,$S247,$U247)=$x248;if(!(is_object($x243)&&isset($x243->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x251=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',43,11,\'<image>/16_console.js\');$_TypeError=&$x251[0];list(,$WTypeError,$STypeError,$UTypeError)=$x251;$x252=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x253=$x252($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x253->class)&&$x253->class===\'Error\'&&!isset($x253->properties[\'file\'])&&!isset($x253->properties[\'line\'])&&!isset($x253->properties[\'column\'])){$x253->properties[\'file\']=\'<image>/16_console.js\';$x253->properties[\'line\']=43;$x253->properties[\'column\']=11;$x253->attributes[\'file\']=$x253->attributes[\'line\']=$x253->attributes[\'column\']=0;}throw new JSException($x253,43,11,\'<image>/16_console.js\');}$x249=$x243->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x250=$x249($global,$x239,$x243,array(\'%s: %f\',$_label,(JS::toNumber($_t,$global)-JS::toNumber($x247,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x255,$W255,$S255,$U255);$x256=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$leThis,(string)\'_times\',44,14,\'<image>/16_console.js\');$x255=&$x256[0];list(,$W255,$S255,$U255)=$x256;if(!array_key_exists($_label,$x255->attributes)){unset($x255->properties[$_label]);$x254=TRUE;}else if($x255->attributes[$_label]&JS::CONFIGURABLE){unset($x255->properties[$_label],$x255->attributes[$_label],$x255->getters[$_label],$x255->setters[$_label]);$x254=TRUE;}else{$x254=FALSE;}return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x261 =& $scope->properties['arguments'];
$x261->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x261->properties[$i] = $args[$i];
$x261->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$scope->properties['indent'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_indent =& $scope->properties['indent'];
$Uindent = FALSE;
$scope->properties['dumper'] = $fn;
$_dumper =& $scope->properties['dumper'];
$global->scope[++$global->scope_sp] = $scope;
$x262 = $_indent;
if (!JS::toBoolean($x262, $global)) {
$x262 = ''; }
if ($Uindent) {$global->properties['indent'] = $_indent; $_indent =& $global->properties['indent']; }
$_indent = $x262;
$x263 = (((gettype($_v) === gettype(JS::$undefined) && $_v === JS::$undefined))|| (((is_float($_v) || is_int($_v)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_v == JS::$undefined));
if (JS::toBoolean($x263, $global)) {
$x264 = clone JS::$objectTemplate;
$x264->properties['multiline'] = false;
$x264->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x264->properties['dump'] = 'undefined';
$x264->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x264;;
}
else {
$x266 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x265 = $x266;
if (!JS::toBoolean($x265, $global)) {
$x268 = $_v;
$x268 = ($x268 === JS::$undefined ? 'undefined' : (is_int($x268) || is_float($x268) ? 'number' : (is_bool($x268) ? 'boolean' : (is_string($x268) ? 'string' : (is_object($x268) && isset($x268->call) ? 'function' : 'object')))));
$x267 = (((gettype($x268) === gettype('boolean') && $x268 === 'boolean'))|| (((is_float($x268) || is_int($x268)) && (is_float('boolean') || is_int('boolean'))) && $x268 == 'boolean'));
$x265 = $x267; }
if (JS::toBoolean($x265, $global)) {
$x269 = clone JS::$objectTemplate;
$x269->properties['multiline'] = false;
$x269->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x269->properties['dump'] = json_encode($_v);
$x269->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x269;;
}
else {
$x271 = $_v;
$x271 = ($x271 === JS::$undefined ? 'undefined' : (is_int($x271) || is_float($x271) ? 'number' : (is_bool($x271) ? 'boolean' : (is_string($x271) ? 'string' : (is_object($x271) && isset($x271->call) ? 'function' : 'object')))));
$x270 = (((gettype($x271) === gettype('number') && $x271 === 'number'))|| (((is_float($x271) || is_int($x271)) && (is_float('number') || is_int('number'))) && $x271 == 'number'));
if (JS::toBoolean($x270, $global)) {
$x272 = clone JS::$objectTemplate;
$x272->properties['multiline'] = false;
$x272->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x274 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 57, 48, '<image>/16_console.js');
$_TypeError =& $x274[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x274;
$x275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x276 = $x275($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x276->class) && $x276->class === 'Error' && !isset($x276->properties['file']) && !isset($x276->properties['line']) && !isset($x276->properties['column'])) {$x276->properties['file'] = '<image>/16_console.js';$x276->properties['line'] = 57;$x276->properties['column'] = 48;$x276->attributes['file'] = $x276->attributes['line'] = $x276->attributes['column'] = 0; }
throw new JSException($x276, 57, 48, '<image>/16_console.js');
}
$x273 = JS::toObject($_v, $global);
unset($x277, $W277, $S277, $U277);
$x278 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x273, (string) 'toString', 57, 48, '<image>/16_console.js');
$x277 =& $x278[0]; list(,$W277,$S277,$U277) = $x278;
if (!(is_object($x277) && isset($x277->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x281 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 57, 48, '<image>/16_console.js');
$_TypeError =& $x281[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x281;
$x282 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x283 = $x282($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x283->class) && $x283->class === 'Error' && !isset($x283->properties['file']) && !isset($x283->properties['line']) && !isset($x283->properties['column'])) {$x283->properties['file'] = '<image>/16_console.js';$x283->properties['line'] = 57;$x283->properties['column'] = 48;$x283->attributes['file'] = $x283->attributes['line'] = $x283->attributes['column'] = 0; }
throw new JSException($x283, 57, 48, '<image>/16_console.js');
}
$x279 = $x277->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x280 = $x279($global, $x273, $x277, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x272->properties['dump'] = $x280;
$x272->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x272;;
}
else {
$x285 = $_v;
$x285 = ($x285 === JS::$undefined ? 'undefined' : (is_int($x285) || is_float($x285) ? 'number' : (is_bool($x285) ? 'boolean' : (is_string($x285) ? 'string' : (is_object($x285) && isset($x285->call) ? 'function' : 'object')))));
$x284 = (((gettype($x285) === gettype('string') && $x285 === 'string'))|| (((is_float($x285) || is_int($x285)) && (is_float('string') || is_int('string'))) && $x285 == 'string'));
if (JS::toBoolean($x284, $global)) {
$x286 = clone JS::$objectTemplate;
$x286->properties['multiline'] = false;
$x286->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x286->properties['dump'] = str_replace("\\/", "/", json_encode($_v));
$x286->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x286;;
}
else {

if (JS::toBoolean(isset($_v->call), $global)) {
$x287 = clone JS::$objectTemplate;
$scope->properties['o'] = JS::$undefined; $_o =& $scope->properties['o'];
$Uo = FALSE;
$_o = $x287;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x289 = array(), $x288 = JS::toObject($_v, $global); $x288; $x288 = $x288->prototype) {
foreach ($x288->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x289[$property])) { continue; }
$x289[$property] = TRUE;
$_k = $property;

unset($x290, $W290, $S290, $U290);
$x291 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_v, (string) $_k, 66, 14, '<image>/16_console.js');
$x290 =& $x291[0]; list(,$W290,$S290,$U290) = $x291;
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x292 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 66, 11, '<image>/16_console.js');
$_TypeError =& $x292[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x292;
$x293 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 66, 11);
$x294 = $x293($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x294->class) && $x294->class === 'Error' && !isset($x294->properties['file']) && !isset($x294->properties['line']) && !isset($x294->properties['column'])) {$x294->properties['file'] = '<image>/16_console.js';$x294->properties['line'] = 66;$x294->properties['column'] = 11;$x294->attributes['file'] = $x294->attributes['line'] = $x294->attributes['column'] = 0; }
throw new JSException($x294, 66, 11, '<image>/16_console.js');
}
$_o = JS::toObject($_o, $global);
unset($x295, $W295, $S295, $U295);
$x296 = _f5a3c4832dbaf51c9bc86fdffdc142bb_8($global, $scope, $_o, (string) $_k, 66, 11, '<image>/16_console.js');
$x295 =& $x296[0]; list(,$W295,$S295,$U295) = $x296;
if ($U295 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties[$_k] = $x295; $x295 =& $_o->properties[$_k]; $_o->attributes[$_k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U295 = FALSE; $W295 = TRUE; }
if (isset($S295)) {
$x298 = $S295->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 66, 11);
$x299 = $x298($global, $_o, $S295, array($x290), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x297 = $x299;
} else {
if (!$U295) {$x297 = $x290;if ($W295) { $x295 = $x290; }  }
else { $x297 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array' &&  is_int($_k) && $_k >= $_o->properties['length']) { $_o->properties['length'] = $_k + 1; };
}
}
};
unset($_Object, $WObject, $SObject, $UObject);
$x303 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'Object', 69, 9, '<image>/16_console.js');
$_Object =& $x303[0]; list(,$WObject,$SObject,$UObject) = $x303;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x304 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 69, 9, '<image>/16_console.js');
$_ReferenceError =& $x304[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x304;
$x305 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 9);
$x306 = $x305($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x306->class) && $x306->class === 'Error' && !isset($x306->properties['file']) && !isset($x306->properties['line']) && !isset($x306->properties['column'])) {$x306->properties['file'] = '<image>/16_console.js';$x306->properties['line'] = 69;$x306->properties['column'] = 9;$x306->attributes['file'] = $x306->attributes['line'] = $x306->attributes['column'] = 0; }
throw new JSException($x306, 69, 9, '<image>/16_console.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x308 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 69, 35, '<image>/16_console.js');
$_TypeError =& $x308[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x308;
$x309 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 35);
$x310 = $x309($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x310->class) && $x310->class === 'Error' && !isset($x310->properties['file']) && !isset($x310->properties['line']) && !isset($x310->properties['column'])) {$x310->properties['file'] = '<image>/16_console.js';$x310->properties['line'] = 69;$x310->properties['column'] = 35;$x310->attributes['file'] = $x310->attributes['line'] = $x310->attributes['column'] = 0; }
throw new JSException($x310, 69, 35, '<image>/16_console.js');
}
$x307 = JS::toObject($_Object, $global);
unset($x311, $W311, $S311, $U311);
$x312 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x307, (string) 'getOwnPropertyNames', 69, 35, '<image>/16_console.js');
$x311 =& $x312[0]; list(,$W311,$S311,$U311) = $x312;
if (!(is_object($x311) && isset($x311->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x315 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 69, 35, '<image>/16_console.js');
$_TypeError =& $x315[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x315;
$x316 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 35);
$x317 = $x316($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x317->class) && $x317->class === 'Error' && !isset($x317->properties['file']) && !isset($x317->properties['line']) && !isset($x317->properties['column'])) {$x317->properties['file'] = '<image>/16_console.js';$x317->properties['line'] = 69;$x317->properties['column'] = 35;$x317->attributes['file'] = $x317->attributes['line'] = $x317->attributes['column'] = 0; }
throw new JSException($x317, 69, 35, '<image>/16_console.js');
}
$x313 = $x311->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 35);
$x314 = $x313($global, $x307, $x311, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x318, $W318, $S318, $U318);
$x319 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x314, (string) 'length', 69, 38, '<image>/16_console.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
$x300 = JS::toPrimitive($x318, $global);
$x301 = JS::toPrimitive(0, $global);
$x302 = (is_string($x301) && is_string($x300) ? strcmp($x301, $x300) < 0 : (!is_nan($x320 = JS::toNumber($x301, $global)) && !is_nan($x321 = JS::toNumber($x300, $global)) && $x320 < $x321));
if (JS::toBoolean($x302, $global)) {
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x324 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 70, 16, '<image>/16_console.js');
$_TypeError =& $x324[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x324;
$x325 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 70, 16);
$x326 = $x325($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x326->class) && $x326->class === 'Error' && !isset($x326->properties['file']) && !isset($x326->properties['line']) && !isset($x326->properties['column'])) {$x326->properties['file'] = '<image>/16_console.js';$x326->properties['line'] = 70;$x326->properties['column'] = 16;$x326->attributes['file'] = $x326->attributes['line'] = $x326->attributes['column'] = 0; }
throw new JSException($x326, 70, 16, '<image>/16_console.js');
}
$x322 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 70, 16);
$x323 = $x322($global, $global, $_dumper, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x323;
unset($x329, $W329, $S329, $U329);
$x330 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_o, (string) 'dump', 71, 22, '<image>/16_console.js');
$x329 =& $x330[0]; list(,$W329,$S329,$U329) = $x330;
$x327 = JS::toPrimitive(' ', $global);
$x328 = JS::toPrimitive($x329, $global);
$x331 = (is_string($x327) || is_string($x328) ? JS::toString($x327, $global) . JS::toString($x328, $global) : JS::toNumber($x327, $global) + JS::toNumber($x328, $global));
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x332 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 71, 13, '<image>/16_console.js');
$_TypeError =& $x332[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x332;
$x333 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 71, 13);
$x334 = $x333($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x334->class) && $x334->class === 'Error' && !isset($x334->properties['file']) && !isset($x334->properties['line']) && !isset($x334->properties['column'])) {$x334->properties['file'] = '<image>/16_console.js';$x334->properties['line'] = 71;$x334->properties['column'] = 13;$x334->attributes['file'] = $x334->attributes['line'] = $x334->attributes['column'] = 0; }
throw new JSException($x334, 71, 13, '<image>/16_console.js');
}
$_o = JS::toObject($_o, $global);
unset($x335, $W335, $S335, $U335);
$x336 = _f5a3c4832dbaf51c9bc86fdffdc142bb_8($global, $scope, $_o, (string) 'dump', 71, 13, '<image>/16_console.js');
$x335 =& $x336[0]; list(,$W335,$S335,$U335) = $x336;
if ($U335 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties['dump'] = $x335; $x335 =& $_o->properties['dump']; $_o->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U335 = FALSE; $W335 = TRUE; }
if (isset($S335)) {
$x338 = $S335->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 71, 13);
$x339 = $x338($global, $_o, $S335, array($x331), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x337 = $x339;
} else {
if (!$U335) {$x337 = $x331;if ($W335) { $x335 = $x331; }  }
else { $x337 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array' &&  is_int('dump') && 'dump' >= $_o->properties['length']) { $_o->properties['length'] = 'dump' + 1; };;
}
else {
$x340 = clone JS::$objectTemplate;
$x340->properties['multiline'] = false;
$x340->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x340->properties['dump'] = '';
$x340->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x340;;
};
$x341 = clone JS::$objectTemplate;
unset($x342, $W342, $S342, $U342);
$x343 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_o, (string) 'multiline', 77, 26, '<image>/16_console.js');
$x342 =& $x343[0]; list(,$W342,$S342,$U342) = $x343;
$x341->properties['multiline'] = $x342;
$x341->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x348 = JS::toPrimitive('[function', $global);
$x349 = JS::toPrimitive((isset($_v->name) ? " " .$_v->name : ""), $global);
unset($x350, $W350, $S350, $U350);
$x351 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_o, (string) 'dump', 81, 10, '<image>/16_console.js');
$x350 =& $x351[0]; list(,$W350,$S350,$U350) = $x351;
$x346 = JS::toPrimitive((is_string($x348) || is_string($x349) ? JS::toString($x348, $global) . JS::toString($x349, $global) : JS::toNumber($x348, $global) + JS::toNumber($x349, $global)), $global);
$x347 = JS::toPrimitive($x350, $global);
$x344 = JS::toPrimitive((is_string($x346) || is_string($x347) ? JS::toString($x346, $global) . JS::toString($x347, $global) : JS::toNumber($x346, $global) + JS::toNumber($x347, $global)), $global);
$x345 = JS::toPrimitive(']', $global);
$x341->properties['dump'] = (is_string($x344) || is_string($x345) ? JS::toString($x344, $global) . JS::toString($x345, $global) : JS::toNumber($x344, $global) + JS::toNumber($x345, $global));
$x341->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x341;;
}
else {
$scope->properties['multiline'] = JS::$undefined; $_multiline =& $scope->properties['multiline'];
$Umultiline = FALSE;
$_multiline = false;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
$scope->properties['d'] = JS::$undefined; $_d =& $scope->properties['d'];
$Ud = FALSE;
$_d = JS::$undefined;
$scope->properties['isArray'] = JS::$undefined; $_isArray =& $scope->properties['isArray'];
$UisArray = FALSE;
$_isArray = isset($_v->class) &&$_v->class === "Array";
$values = array();
if (JS::toBoolean($_isArray, $global)) {
for ($x352 = 0;; ++$x352) {
if ($x352 === 0) {
$x353 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x353;
}
if ($x352 !== 0) {
$x354 = ++$_i;
}
unset($x358, $W358, $S358, $U358);
$x359 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_v, (string) 'length', 89, 23, '<image>/16_console.js');
$x358 =& $x359[0]; list(,$W358,$S358,$U358) = $x359;
$x355 = JS::toPrimitive($_i, $global);
$x356 = JS::toPrimitive($x358, $global);
$x357 = (is_string($x355) && is_string($x356) ? strcmp($x355, $x356) < 0 : (!is_nan($x360 = JS::toNumber($x355, $global)) && !is_nan($x361 = JS::toNumber($x356, $global)) && $x360 < $x361));
if (!JS::toBoolean($x357, $global)) { break; }

unset($x363, $W363, $S363, $U363);
$x364 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_v, (string) $_i, 90, 24, '<image>/16_console.js');
$x363 =& $x364[0]; list(,$W363,$S363,$U363) = $x364;
$x365 = JS::toPrimitive($_indent, $global);
$x366 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x369 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 90, 22, '<image>/16_console.js');
$_TypeError =& $x369[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x369;
$x370 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 90, 22);
$x371 = $x370($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x371->class) && $x371->class === 'Error' && !isset($x371->properties['file']) && !isset($x371->properties['line']) && !isset($x371->properties['column'])) {$x371->properties['file'] = '<image>/16_console.js';$x371->properties['line'] = 90;$x371->properties['column'] = 22;$x371->attributes['file'] = $x371->attributes['line'] = $x371->attributes['column'] = 0; }
throw new JSException($x371, 90, 22, '<image>/16_console.js');
}
$x367 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 90, 22);
$x368 = $x367($global, $global, $_dumper, array($x363, (is_string($x365) || is_string($x366) ? JS::toString($x365, $global) . JS::toString($x366, $global) : JS::toNumber($x365, $global) + JS::toNumber($x366, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x368;
unset($x372, $W372, $S372, $U372);
$x373 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_d, (string) 'multiline', 90, 44, '<image>/16_console.js');
$x372 =& $x373[0]; list(,$W372,$S372,$U372) = $x373;
$x362 = $x372;
if (!JS::toBoolean($x362, $global)) {
unset($x377, $W377, $S377, $U377);
$x378 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_d, (string) 'dump', 90, 59, '<image>/16_console.js');
$x377 =& $x378[0]; list(,$W377,$S377,$U377) = $x378;
unset($x379, $W379, $S379, $U379);
$x380 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x377, (string) 'length', 90, 64, '<image>/16_console.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
$x374 = JS::toPrimitive($x379, $global);
$x375 = JS::toPrimitive(40, $global);
$x376 = (is_string($x375) && is_string($x374) ? strcmp($x375, $x374) < 0 : (!is_nan($x381 = JS::toNumber($x375, $global)) && !is_nan($x382 = JS::toNumber($x374, $global)) && $x381 < $x382));
$x362 = $x376; }
if (JS::toBoolean($x362, $global)) {
$x383 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x383;;
};
unset($x384, $W384, $S384, $U384);
$x385 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_d, (string) 'dump', 94, 12, '<image>/16_console.js');
$x384 =& $x385[0]; list(,$W384,$S384,$U384) = $x385;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x384;
$values[] =$_d;;
};
};
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x387 = array(), $x386 = JS::toObject($_v, $global); $x386; $x386 = $x386->prototype) {
foreach ($x386->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x387[$property])) { continue; }
$x387[$property] = TRUE;
$_k = $property;

$x388 = $_isArray;
if (JS::toBoolean($x388, $global)) {
unset($_String, $WString, $SString, $UString);
$x390 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'String', 102, 21, '<image>/16_console.js');
$_String =& $x390[0]; list(,$WString,$SString,$UString) = $x390;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x391 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 102, 21, '<image>/16_console.js');
$_ReferenceError =& $x391[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x391;
$x392 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 21);
$x393 = $x392($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x393->class) && $x393->class === 'Error' && !isset($x393->properties['file']) && !isset($x393->properties['line']) && !isset($x393->properties['column'])) {$x393->properties['file'] = '<image>/16_console.js';$x393->properties['line'] = 102;$x393->properties['column'] = 21;$x393->attributes['file'] = $x393->attributes['line'] = $x393->attributes['column'] = 0; }
throw new JSException($x393, 102, 21, '<image>/16_console.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x394 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'Number', 102, 28, '<image>/16_console.js');
$_Number =& $x394[0]; list(,$WNumber,$SNumber,$UNumber) = $x394;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x395 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'ReferenceError', 102, 28, '<image>/16_console.js');
$_ReferenceError =& $x395[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x395;
$x396 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 28);
$x397 = $x396($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x397->class) && $x397->class === 'Error' && !isset($x397->properties['file']) && !isset($x397->properties['line']) && !isset($x397->properties['column'])) {$x397->properties['file'] = '<image>/16_console.js';$x397->properties['line'] = 102;$x397->properties['column'] = 28;$x397->attributes['file'] = $x397->attributes['line'] = $x397->attributes['column'] = 0; }
throw new JSException($x397, 102, 28, '<image>/16_console.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x400 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 102, 34, '<image>/16_console.js');
$_TypeError =& $x400[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x400;
$x401 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 34);
$x402 = $x401($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x402->class) && $x402->class === 'Error' && !isset($x402->properties['file']) && !isset($x402->properties['line']) && !isset($x402->properties['column'])) {$x402->properties['file'] = '<image>/16_console.js';$x402->properties['line'] = 102;$x402->properties['column'] = 34;$x402->attributes['file'] = $x402->attributes['line'] = $x402->attributes['column'] = 0; }
throw new JSException($x402, 102, 34, '<image>/16_console.js');
}
$x398 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 34);
$x399 = $x398($global, $global, $_Number, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x405 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 102, 27, '<image>/16_console.js');
$_TypeError =& $x405[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x405;
$x406 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 27);
$x407 = $x406($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x407->class) && $x407->class === 'Error' && !isset($x407->properties['file']) && !isset($x407->properties['line']) && !isset($x407->properties['column'])) {$x407->properties['file'] = '<image>/16_console.js';$x407->properties['line'] = 102;$x407->properties['column'] = 27;$x407->attributes['file'] = $x407->attributes['line'] = $x407->attributes['column'] = 0; }
throw new JSException($x407, 102, 27, '<image>/16_console.js');
}
$x403 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 27);
$x404 = $x403($global, $global, $_String, array($x399), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x410 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 102, 49, '<image>/16_console.js');
$_TypeError =& $x410[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x410;
$x411 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 49);
$x412 = $x411($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x412->class) && $x412->class === 'Error' && !isset($x412->properties['file']) && !isset($x412->properties['line']) && !isset($x412->properties['column'])) {$x412->properties['file'] = '<image>/16_console.js';$x412->properties['line'] = 102;$x412->properties['column'] = 49;$x412->attributes['file'] = $x412->attributes['line'] = $x412->attributes['column'] = 0; }
throw new JSException($x412, 102, 49, '<image>/16_console.js');
}
$x408 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 102, 49);
$x409 = $x408($global, $global, $_String, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x389 = (((gettype($x404) === gettype($x409) && $x404 === $x409))|| (((is_float($x404) || is_int($x404)) && (is_float($x409) || is_int($x409))) && $x404 == $x409));
$x388 = $x389; }
if (JS::toBoolean($x388, $global)) {
continue;;
};
unset($x414, $W414, $S414, $U414);
$x415 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_v, (string) $_k, 104, 23, '<image>/16_console.js');
$x414 =& $x415[0]; list(,$W414,$S414,$U414) = $x415;
$x416 = JS::toPrimitive($_indent, $global);
$x417 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x420 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 104, 21, '<image>/16_console.js');
$_TypeError =& $x420[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x420;
$x421 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 104, 21);
$x422 = $x421($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x422->class) && $x422->class === 'Error' && !isset($x422->properties['file']) && !isset($x422->properties['line']) && !isset($x422->properties['column'])) {$x422->properties['file'] = '<image>/16_console.js';$x422->properties['line'] = 104;$x422->properties['column'] = 21;$x422->attributes['file'] = $x422->attributes['line'] = $x422->attributes['column'] = 0; }
throw new JSException($x422, 104, 21, '<image>/16_console.js');
}
$x418 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 104, 21);
$x419 = $x418($global, $global, $_dumper, array($x414, (is_string($x416) || is_string($x417) ? JS::toString($x416, $global) . JS::toString($x417, $global) : JS::toNumber($x416, $global) + JS::toNumber($x417, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x419;
unset($x423, $W423, $S423, $U423);
$x424 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_d, (string) 'multiline', 104, 43, '<image>/16_console.js');
$x423 =& $x424[0]; list(,$W423,$S423,$U423) = $x424;
$x413 = $x423;
if (!JS::toBoolean($x413, $global)) {
unset($x428, $W428, $S428, $U428);
$x429 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_d, (string) 'dump', 104, 58, '<image>/16_console.js');
$x428 =& $x429[0]; list(,$W428,$S428,$U428) = $x429;
unset($x430, $W430, $S430, $U430);
$x431 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x428, (string) 'length', 104, 63, '<image>/16_console.js');
$x430 =& $x431[0]; list(,$W430,$S430,$U430) = $x431;
$x425 = JS::toPrimitive($x430, $global);
$x426 = JS::toPrimitive(40, $global);
$x427 = (is_string($x426) && is_string($x425) ? strcmp($x426, $x425) < 0 : (!is_nan($x432 = JS::toNumber($x426, $global)) && !is_nan($x433 = JS::toNumber($x425, $global)) && $x432 < $x433));
$x413 = $x427; }
if (JS::toBoolean($x413, $global)) {
$x434 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x434;;
};
unset($x435, $W435, $S435, $U435);
$x436 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_d, (string) 'dump', 108, 11, '<image>/16_console.js');
$x435 =& $x436[0]; list(,$W435,$S435,$U435) = $x436;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x435;
$values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)
							?$_k: str_replace("\\/", "/", json_encode($_k))) . ": " .$_d;;
}
}
};
if (JS::toBoolean(empty($values), $global)) {
$x437 = clone JS::$objectTemplate;
$x437->properties['multiline'] = false;
$x437->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x438 = '[]';
} else {
$x438 = '{}';
}
$x437->properties['dump'] = $x438;
$x437->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x437;;
};
if (JS::toBoolean(count($values) > 5, $global)) {
$x439 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x439;;
};
$x440 = clone JS::$objectTemplate;
$x440->properties['multiline'] = $_multiline;
$x440->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x445 = '[ ';
} else {
$x445 = '{ ';
}
$x443 = JS::toPrimitive($x445, $global);
$x444 = JS::toPrimitive(implode(!$_multiline? ", " : ",\n" .$_indent. "  ", $values), $global);
if (JS::toBoolean($_isArray, $global)) {
$x446 = ' ]';
} else {
$x446 = ' }';
}
$x441 = JS::toPrimitive((is_string($x443) || is_string($x444) ? JS::toString($x443, $global) . JS::toString($x444, $global) : JS::toNumber($x443, $global) + JS::toNumber($x444, $global)), $global);
$x442 = JS::toPrimitive($x446, $global);
$x440->properties['dump'] = (is_string($x441) || is_string($x442) ? JS::toString($x441, $global) . JS::toString($x442, $global) : JS::toNumber($x441, $global) + JS::toNumber($x442, $global));
$x440->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x440;;
};
};
};
};
};
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x261=&$scope->properties[\'arguments\'];$x261->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x261->properties[$i]=$args[$i];$x261->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$scope->properties[\'indent\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_indent=&$scope->properties[\'indent\'];$Uindent=FALSE;$scope->properties[\'dumper\']=$fn;$_dumper=&$scope->properties[\'dumper\'];$global->scope[++$global->scope_sp]=$scope;$x262=$_indent;if(!JS::toBoolean($x262,$global)){$x262=\'\';}if($Uindent){$global->properties[\'indent\']=$_indent;$_indent=&$global->properties[\'indent\'];}$_indent=$x262;$x263=(((gettype($_v)===gettype(JS::$undefined)&&$_v===JS::$undefined))||(((is_float($_v)||is_int($_v))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_v==JS::$undefined));if(JS::toBoolean($x263,$global)){$x264=clone JS::$objectTemplate;$x264->properties[\'multiline\']=false;$x264->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x264->properties[\'dump\']=\'undefined\';$x264->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x264;}else{$x266=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x265=$x266;if(!JS::toBoolean($x265,$global)){$x268=$_v;$x268=($x268===JS::$undefined?\'undefined\':(is_int($x268)||is_float($x268)?\'number\':(is_bool($x268)?\'boolean\':(is_string($x268)?\'string\':(is_object($x268)&&isset($x268->call)?\'function\':\'object\')))));$x267=(((gettype($x268)===gettype(\'boolean\')&&$x268===\'boolean\'))||(((is_float($x268)||is_int($x268))&&(is_float(\'boolean\')||is_int(\'boolean\')))&&$x268==\'boolean\'));$x265=$x267;}if(JS::toBoolean($x265,$global)){$x269=clone JS::$objectTemplate;$x269->properties[\'multiline\']=false;$x269->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x269->properties[\'dump\']=json_encode($_v);$x269->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x269;}else{$x271=$_v;$x271=($x271===JS::$undefined?\'undefined\':(is_int($x271)||is_float($x271)?\'number\':(is_bool($x271)?\'boolean\':(is_string($x271)?\'string\':(is_object($x271)&&isset($x271->call)?\'function\':\'object\')))));$x270=(((gettype($x271)===gettype(\'number\')&&$x271===\'number\'))||(((is_float($x271)||is_int($x271))&&(is_float(\'number\')||is_int(\'number\')))&&$x271==\'number\'));if(JS::toBoolean($x270,$global)){$x272=clone JS::$objectTemplate;$x272->properties[\'multiline\']=false;$x272->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x274=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',57,48,\'<image>/16_console.js\');$_TypeError=&$x274[0];list(,$WTypeError,$STypeError,$UTypeError)=$x274;$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x276=$x275($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'&&!isset($x276->properties[\'file\'])&&!isset($x276->properties[\'line\'])&&!isset($x276->properties[\'column\'])){$x276->properties[\'file\']=\'<image>/16_console.js\';$x276->properties[\'line\']=57;$x276->properties[\'column\']=48;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,57,48,\'<image>/16_console.js\');}$x273=JS::toObject($_v,$global);unset($x277,$W277,$S277,$U277);$x278=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x273,(string)\'toString\',57,48,\'<image>/16_console.js\');$x277=&$x278[0];list(,$W277,$S277,$U277)=$x278;if(!(is_object($x277)&&isset($x277->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x281=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',57,48,\'<image>/16_console.js\');$_TypeError=&$x281[0];list(,$WTypeError,$STypeError,$UTypeError)=$x281;$x282=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x283=$x282($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x283->class)&&$x283->class===\'Error\'&&!isset($x283->properties[\'file\'])&&!isset($x283->properties[\'line\'])&&!isset($x283->properties[\'column\'])){$x283->properties[\'file\']=\'<image>/16_console.js\';$x283->properties[\'line\']=57;$x283->properties[\'column\']=48;$x283->attributes[\'file\']=$x283->attributes[\'line\']=$x283->attributes[\'column\']=0;}throw new JSException($x283,57,48,\'<image>/16_console.js\');}$x279=$x277->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x280=$x279($global,$x273,$x277,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x272->properties[\'dump\']=$x280;$x272->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x272;}else{$x285=$_v;$x285=($x285===JS::$undefined?\'undefined\':(is_int($x285)||is_float($x285)?\'number\':(is_bool($x285)?\'boolean\':(is_string($x285)?\'string\':(is_object($x285)&&isset($x285->call)?\'function\':\'object\')))));$x284=(((gettype($x285)===gettype(\'string\')&&$x285===\'string\'))||(((is_float($x285)||is_int($x285))&&(is_float(\'string\')||is_int(\'string\')))&&$x285==\'string\'));if(JS::toBoolean($x284,$global)){$x286=clone JS::$objectTemplate;$x286->properties[\'multiline\']=false;$x286->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x286->properties[\'dump\']=str_replace("\\\\/","/",json_encode($_v));$x286->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x286;}else{if(JS::toBoolean(isset($_v->call),$global)){$x287=clone JS::$objectTemplate;$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=$x287;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x289=array(),$x288=JS::toObject($_v,$global);$x288;$x288=$x288->prototype){foreach($x288->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x289[$property])){continue;}$x289[$property]=TRUE;$_k=$property;unset($x290,$W290,$S290,$U290);$x291=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_v,(string)$_k,66,14,\'<image>/16_console.js\');$x290=&$x291[0];list(,$W290,$S290,$U290)=$x291;if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x292=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',66,11,\'<image>/16_console.js\');$_TypeError=&$x292[0];list(,$WTypeError,$STypeError,$UTypeError)=$x292;$x293=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',66,11);$x294=$x293($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x294->class)&&$x294->class===\'Error\'&&!isset($x294->properties[\'file\'])&&!isset($x294->properties[\'line\'])&&!isset($x294->properties[\'column\'])){$x294->properties[\'file\']=\'<image>/16_console.js\';$x294->properties[\'line\']=66;$x294->properties[\'column\']=11;$x294->attributes[\'file\']=$x294->attributes[\'line\']=$x294->attributes[\'column\']=0;}throw new JSException($x294,66,11,\'<image>/16_console.js\');}$_o=JS::toObject($_o,$global);unset($x295,$W295,$S295,$U295);$x296=_f5a3c4832dbaf51c9bc86fdffdc142bb_8($global,$scope,$_o,(string)$_k,66,11,\'<image>/16_console.js\');$x295=&$x296[0];list(,$W295,$S295,$U295)=$x296;if($U295&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[$_k]=$x295;$x295=&$_o->properties[$_k];$_o->attributes[$_k]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U295=FALSE;$W295=TRUE;}if(isset($S295)){$x298=$S295->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',66,11);$x299=$x298($global,$_o,$S295,array($x290),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x297=$x299;}else{if(!$U295){$x297=$x290;if($W295){$x295=$x290;}}else{$x297=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'&&is_int($_k)&&$_k>=$_o->properties[\'length\']){$_o->properties[\'length\']=$_k+1;}}}}unset($_Object,$WObject,$SObject,$UObject);$x303=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'Object\',69,9,\'<image>/16_console.js\');$_Object=&$x303[0];list(,$WObject,$SObject,$UObject)=$x303;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x304=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',69,9,\'<image>/16_console.js\');$_ReferenceError=&$x304[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x304;$x305=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,9);$x306=$x305($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x306->class)&&$x306->class===\'Error\'&&!isset($x306->properties[\'file\'])&&!isset($x306->properties[\'line\'])&&!isset($x306->properties[\'column\'])){$x306->properties[\'file\']=\'<image>/16_console.js\';$x306->properties[\'line\']=69;$x306->properties[\'column\']=9;$x306->attributes[\'file\']=$x306->attributes[\'line\']=$x306->attributes[\'column\']=0;}throw new JSException($x306,69,9,\'<image>/16_console.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x308=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',69,35,\'<image>/16_console.js\');$_TypeError=&$x308[0];list(,$WTypeError,$STypeError,$UTypeError)=$x308;$x309=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,35);$x310=$x309($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x310->class)&&$x310->class===\'Error\'&&!isset($x310->properties[\'file\'])&&!isset($x310->properties[\'line\'])&&!isset($x310->properties[\'column\'])){$x310->properties[\'file\']=\'<image>/16_console.js\';$x310->properties[\'line\']=69;$x310->properties[\'column\']=35;$x310->attributes[\'file\']=$x310->attributes[\'line\']=$x310->attributes[\'column\']=0;}throw new JSException($x310,69,35,\'<image>/16_console.js\');}$x307=JS::toObject($_Object,$global);unset($x311,$W311,$S311,$U311);$x312=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x307,(string)\'getOwnPropertyNames\',69,35,\'<image>/16_console.js\');$x311=&$x312[0];list(,$W311,$S311,$U311)=$x312;if(!(is_object($x311)&&isset($x311->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x315=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',69,35,\'<image>/16_console.js\');$_TypeError=&$x315[0];list(,$WTypeError,$STypeError,$UTypeError)=$x315;$x316=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,35);$x317=$x316($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x317->class)&&$x317->class===\'Error\'&&!isset($x317->properties[\'file\'])&&!isset($x317->properties[\'line\'])&&!isset($x317->properties[\'column\'])){$x317->properties[\'file\']=\'<image>/16_console.js\';$x317->properties[\'line\']=69;$x317->properties[\'column\']=35;$x317->attributes[\'file\']=$x317->attributes[\'line\']=$x317->attributes[\'column\']=0;}throw new JSException($x317,69,35,\'<image>/16_console.js\');}$x313=$x311->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,35);$x314=$x313($global,$x307,$x311,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x318,$W318,$S318,$U318);$x319=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x314,(string)\'length\',69,38,\'<image>/16_console.js\');$x318=&$x319[0];list(,$W318,$S318,$U318)=$x319;$x300=JS::toPrimitive($x318,$global);$x301=JS::toPrimitive(0,$global);$x302=(is_string($x301)&&is_string($x300)?strcmp($x301,$x300)<0:(!is_nan($x320=JS::toNumber($x301,$global))&&!is_nan($x321=JS::toNumber($x300,$global))&&$x320<$x321));if(JS::toBoolean($x302,$global)){if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x324=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',70,16,\'<image>/16_console.js\');$_TypeError=&$x324[0];list(,$WTypeError,$STypeError,$UTypeError)=$x324;$x325=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',70,16);$x326=$x325($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x326->class)&&$x326->class===\'Error\'&&!isset($x326->properties[\'file\'])&&!isset($x326->properties[\'line\'])&&!isset($x326->properties[\'column\'])){$x326->properties[\'file\']=\'<image>/16_console.js\';$x326->properties[\'line\']=70;$x326->properties[\'column\']=16;$x326->attributes[\'file\']=$x326->attributes[\'line\']=$x326->attributes[\'column\']=0;}throw new JSException($x326,70,16,\'<image>/16_console.js\');}$x322=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',70,16);$x323=$x322($global,$global,$_dumper,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x323;unset($x329,$W329,$S329,$U329);$x330=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_o,(string)\'dump\',71,22,\'<image>/16_console.js\');$x329=&$x330[0];list(,$W329,$S329,$U329)=$x330;$x327=JS::toPrimitive(\' \',$global);$x328=JS::toPrimitive($x329,$global);$x331=(is_string($x327)||is_string($x328)?JS::toString($x327,$global).JS::toString($x328,$global):JS::toNumber($x327,$global)+JS::toNumber($x328,$global));if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x332=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',71,13,\'<image>/16_console.js\');$_TypeError=&$x332[0];list(,$WTypeError,$STypeError,$UTypeError)=$x332;$x333=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',71,13);$x334=$x333($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x334->class)&&$x334->class===\'Error\'&&!isset($x334->properties[\'file\'])&&!isset($x334->properties[\'line\'])&&!isset($x334->properties[\'column\'])){$x334->properties[\'file\']=\'<image>/16_console.js\';$x334->properties[\'line\']=71;$x334->properties[\'column\']=13;$x334->attributes[\'file\']=$x334->attributes[\'line\']=$x334->attributes[\'column\']=0;}throw new JSException($x334,71,13,\'<image>/16_console.js\');}$_o=JS::toObject($_o,$global);unset($x335,$W335,$S335,$U335);$x336=_f5a3c4832dbaf51c9bc86fdffdc142bb_8($global,$scope,$_o,(string)\'dump\',71,13,\'<image>/16_console.js\');$x335=&$x336[0];list(,$W335,$S335,$U335)=$x336;if($U335&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[\'dump\']=$x335;$x335=&$_o->properties[\'dump\'];$_o->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U335=FALSE;$W335=TRUE;}if(isset($S335)){$x338=$S335->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',71,13);$x339=$x338($global,$_o,$S335,array($x331),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x337=$x339;}else{if(!$U335){$x337=$x331;if($W335){$x335=$x331;}}else{$x337=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'&&is_int(\'dump\')&&\'dump\'>=$_o->properties[\'length\']){$_o->properties[\'length\']=\'dump\'+1;}}else{$x340=clone JS::$objectTemplate;$x340->properties[\'multiline\']=false;$x340->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x340->properties[\'dump\']=\'\';$x340->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x340;}$x341=clone JS::$objectTemplate;unset($x342,$W342,$S342,$U342);$x343=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_o,(string)\'multiline\',77,26,\'<image>/16_console.js\');$x342=&$x343[0];list(,$W342,$S342,$U342)=$x343;$x341->properties[\'multiline\']=$x342;$x341->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x348=JS::toPrimitive(\'[function\',$global);$x349=JS::toPrimitive((isset($_v->name)?" ".$_v->name:""),$global);unset($x350,$W350,$S350,$U350);$x351=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_o,(string)\'dump\',81,10,\'<image>/16_console.js\');$x350=&$x351[0];list(,$W350,$S350,$U350)=$x351;$x346=JS::toPrimitive((is_string($x348)||is_string($x349)?JS::toString($x348,$global).JS::toString($x349,$global):JS::toNumber($x348,$global)+JS::toNumber($x349,$global)),$global);$x347=JS::toPrimitive($x350,$global);$x344=JS::toPrimitive((is_string($x346)||is_string($x347)?JS::toString($x346,$global).JS::toString($x347,$global):JS::toNumber($x346,$global)+JS::toNumber($x347,$global)),$global);$x345=JS::toPrimitive(\']\',$global);$x341->properties[\'dump\']=(is_string($x344)||is_string($x345)?JS::toString($x344,$global).JS::toString($x345,$global):JS::toNumber($x344,$global)+JS::toNumber($x345,$global));$x341->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x341;}else{$scope->properties[\'multiline\']=JS::$undefined;$_multiline=&$scope->properties[\'multiline\'];$Umultiline=FALSE;$_multiline=false;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::$undefined;$scope->properties[\'isArray\']=JS::$undefined;$_isArray=&$scope->properties[\'isArray\'];$UisArray=FALSE;$_isArray=isset($_v->class)&&$_v->class==="Array";$values=array();if(JS::toBoolean($_isArray,$global)){for($x352=0;;++$x352){if($x352===0){$x353=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x353;}if($x352!==0){$x354=++$_i;}unset($x358,$W358,$S358,$U358);$x359=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_v,(string)\'length\',89,23,\'<image>/16_console.js\');$x358=&$x359[0];list(,$W358,$S358,$U358)=$x359;$x355=JS::toPrimitive($_i,$global);$x356=JS::toPrimitive($x358,$global);$x357=(is_string($x355)&&is_string($x356)?strcmp($x355,$x356)<0:(!is_nan($x360=JS::toNumber($x355,$global))&&!is_nan($x361=JS::toNumber($x356,$global))&&$x360<$x361));if(!JS::toBoolean($x357,$global)){break;}unset($x363,$W363,$S363,$U363);$x364=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_v,(string)$_i,90,24,\'<image>/16_console.js\');$x363=&$x364[0];list(,$W363,$S363,$U363)=$x364;$x365=JS::toPrimitive($_indent,$global);$x366=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x369=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',90,22,\'<image>/16_console.js\');$_TypeError=&$x369[0];list(,$WTypeError,$STypeError,$UTypeError)=$x369;$x370=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',90,22);$x371=$x370($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x371->class)&&$x371->class===\'Error\'&&!isset($x371->properties[\'file\'])&&!isset($x371->properties[\'line\'])&&!isset($x371->properties[\'column\'])){$x371->properties[\'file\']=\'<image>/16_console.js\';$x371->properties[\'line\']=90;$x371->properties[\'column\']=22;$x371->attributes[\'file\']=$x371->attributes[\'line\']=$x371->attributes[\'column\']=0;}throw new JSException($x371,90,22,\'<image>/16_console.js\');}$x367=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',90,22);$x368=$x367($global,$global,$_dumper,array($x363,(is_string($x365)||is_string($x366)?JS::toString($x365,$global).JS::toString($x366,$global):JS::toNumber($x365,$global)+JS::toNumber($x366,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x368;unset($x372,$W372,$S372,$U372);$x373=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_d,(string)\'multiline\',90,44,\'<image>/16_console.js\');$x372=&$x373[0];list(,$W372,$S372,$U372)=$x373;$x362=$x372;if(!JS::toBoolean($x362,$global)){unset($x377,$W377,$S377,$U377);$x378=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_d,(string)\'dump\',90,59,\'<image>/16_console.js\');$x377=&$x378[0];list(,$W377,$S377,$U377)=$x378;unset($x379,$W379,$S379,$U379);$x380=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x377,(string)\'length\',90,64,\'<image>/16_console.js\');$x379=&$x380[0];list(,$W379,$S379,$U379)=$x380;$x374=JS::toPrimitive($x379,$global);$x375=JS::toPrimitive(40,$global);$x376=(is_string($x375)&&is_string($x374)?strcmp($x375,$x374)<0:(!is_nan($x381=JS::toNumber($x375,$global))&&!is_nan($x382=JS::toNumber($x374,$global))&&$x381<$x382));$x362=$x376;}if(JS::toBoolean($x362,$global)){$x383=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x383;}unset($x384,$W384,$S384,$U384);$x385=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_d,(string)\'dump\',94,12,\'<image>/16_console.js\');$x384=&$x385[0];list(,$W384,$S384,$U384)=$x385;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x384;$values[]=$_d;}}if($_v!==JS::$undefined&&$_v!==NULL){for($x387=array(),$x386=JS::toObject($_v,$global);$x386;$x386=$x386->prototype){foreach($x386->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x387[$property])){continue;}$x387[$property]=TRUE;$_k=$property;$x388=$_isArray;if(JS::toBoolean($x388,$global)){unset($_String,$WString,$SString,$UString);$x390=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'String\',102,21,\'<image>/16_console.js\');$_String=&$x390[0];list(,$WString,$SString,$UString)=$x390;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x391=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',102,21,\'<image>/16_console.js\');$_ReferenceError=&$x391[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x391;$x392=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,21);$x393=$x392($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x393->class)&&$x393->class===\'Error\'&&!isset($x393->properties[\'file\'])&&!isset($x393->properties[\'line\'])&&!isset($x393->properties[\'column\'])){$x393->properties[\'file\']=\'<image>/16_console.js\';$x393->properties[\'line\']=102;$x393->properties[\'column\']=21;$x393->attributes[\'file\']=$x393->attributes[\'line\']=$x393->attributes[\'column\']=0;}throw new JSException($x393,102,21,\'<image>/16_console.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x394=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'Number\',102,28,\'<image>/16_console.js\');$_Number=&$x394[0];list(,$WNumber,$SNumber,$UNumber)=$x394;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x395=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'ReferenceError\',102,28,\'<image>/16_console.js\');$_ReferenceError=&$x395[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x395;$x396=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,28);$x397=$x396($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x397->class)&&$x397->class===\'Error\'&&!isset($x397->properties[\'file\'])&&!isset($x397->properties[\'line\'])&&!isset($x397->properties[\'column\'])){$x397->properties[\'file\']=\'<image>/16_console.js\';$x397->properties[\'line\']=102;$x397->properties[\'column\']=28;$x397->attributes[\'file\']=$x397->attributes[\'line\']=$x397->attributes[\'column\']=0;}throw new JSException($x397,102,28,\'<image>/16_console.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x400=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',102,34,\'<image>/16_console.js\');$_TypeError=&$x400[0];list(,$WTypeError,$STypeError,$UTypeError)=$x400;$x401=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,34);$x402=$x401($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x402->class)&&$x402->class===\'Error\'&&!isset($x402->properties[\'file\'])&&!isset($x402->properties[\'line\'])&&!isset($x402->properties[\'column\'])){$x402->properties[\'file\']=\'<image>/16_console.js\';$x402->properties[\'line\']=102;$x402->properties[\'column\']=34;$x402->attributes[\'file\']=$x402->attributes[\'line\']=$x402->attributes[\'column\']=0;}throw new JSException($x402,102,34,\'<image>/16_console.js\');}$x398=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,34);$x399=$x398($global,$global,$_Number,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x405=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',102,27,\'<image>/16_console.js\');$_TypeError=&$x405[0];list(,$WTypeError,$STypeError,$UTypeError)=$x405;$x406=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,27);$x407=$x406($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x407->class)&&$x407->class===\'Error\'&&!isset($x407->properties[\'file\'])&&!isset($x407->properties[\'line\'])&&!isset($x407->properties[\'column\'])){$x407->properties[\'file\']=\'<image>/16_console.js\';$x407->properties[\'line\']=102;$x407->properties[\'column\']=27;$x407->attributes[\'file\']=$x407->attributes[\'line\']=$x407->attributes[\'column\']=0;}throw new JSException($x407,102,27,\'<image>/16_console.js\');}$x403=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,27);$x404=$x403($global,$global,$_String,array($x399),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x410=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',102,49,\'<image>/16_console.js\');$_TypeError=&$x410[0];list(,$WTypeError,$STypeError,$UTypeError)=$x410;$x411=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,49);$x412=$x411($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x412->class)&&$x412->class===\'Error\'&&!isset($x412->properties[\'file\'])&&!isset($x412->properties[\'line\'])&&!isset($x412->properties[\'column\'])){$x412->properties[\'file\']=\'<image>/16_console.js\';$x412->properties[\'line\']=102;$x412->properties[\'column\']=49;$x412->attributes[\'file\']=$x412->attributes[\'line\']=$x412->attributes[\'column\']=0;}throw new JSException($x412,102,49,\'<image>/16_console.js\');}$x408=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',102,49);$x409=$x408($global,$global,$_String,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x389=(((gettype($x404)===gettype($x409)&&$x404===$x409))||(((is_float($x404)||is_int($x404))&&(is_float($x409)||is_int($x409)))&&$x404==$x409));$x388=$x389;}if(JS::toBoolean($x388,$global)){continue;}unset($x414,$W414,$S414,$U414);$x415=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_v,(string)$_k,104,23,\'<image>/16_console.js\');$x414=&$x415[0];list(,$W414,$S414,$U414)=$x415;$x416=JS::toPrimitive($_indent,$global);$x417=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x420=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',104,21,\'<image>/16_console.js\');$_TypeError=&$x420[0];list(,$WTypeError,$STypeError,$UTypeError)=$x420;$x421=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',104,21);$x422=$x421($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x422->class)&&$x422->class===\'Error\'&&!isset($x422->properties[\'file\'])&&!isset($x422->properties[\'line\'])&&!isset($x422->properties[\'column\'])){$x422->properties[\'file\']=\'<image>/16_console.js\';$x422->properties[\'line\']=104;$x422->properties[\'column\']=21;$x422->attributes[\'file\']=$x422->attributes[\'line\']=$x422->attributes[\'column\']=0;}throw new JSException($x422,104,21,\'<image>/16_console.js\');}$x418=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',104,21);$x419=$x418($global,$global,$_dumper,array($x414,(is_string($x416)||is_string($x417)?JS::toString($x416,$global).JS::toString($x417,$global):JS::toNumber($x416,$global)+JS::toNumber($x417,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x419;unset($x423,$W423,$S423,$U423);$x424=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_d,(string)\'multiline\',104,43,\'<image>/16_console.js\');$x423=&$x424[0];list(,$W423,$S423,$U423)=$x424;$x413=$x423;if(!JS::toBoolean($x413,$global)){unset($x428,$W428,$S428,$U428);$x429=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_d,(string)\'dump\',104,58,\'<image>/16_console.js\');$x428=&$x429[0];list(,$W428,$S428,$U428)=$x429;unset($x430,$W430,$S430,$U430);$x431=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x428,(string)\'length\',104,63,\'<image>/16_console.js\');$x430=&$x431[0];list(,$W430,$S430,$U430)=$x431;$x425=JS::toPrimitive($x430,$global);$x426=JS::toPrimitive(40,$global);$x427=(is_string($x426)&&is_string($x425)?strcmp($x426,$x425)<0:(!is_nan($x432=JS::toNumber($x426,$global))&&!is_nan($x433=JS::toNumber($x425,$global))&&$x432<$x433));$x413=$x427;}if(JS::toBoolean($x413,$global)){$x434=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x434;}unset($x435,$W435,$S435,$U435);$x436=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$_d,(string)\'dump\',108,11,\'<image>/16_console.js\');$x435=&$x436[0];list(,$W435,$S435,$U435)=$x436;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x435;$values[]=(preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)?$_k:str_replace("\\\\/","/",json_encode($_k))).": ".$_d;}}}if(JS::toBoolean(empty($values),$global)){$x437=clone JS::$objectTemplate;$x437->properties[\'multiline\']=false;$x437->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x438=\'[]\';}else{$x438=\'{}\';}$x437->properties[\'dump\']=$x438;$x437->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x437;}if(JS::toBoolean(count($values)>5,$global)){$x439=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x439;}$x440=clone JS::$objectTemplate;$x440->properties[\'multiline\']=$_multiline;$x440->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x445=\'[ \';}else{$x445=\'{ \';}$x443=JS::toPrimitive($x445,$global);$x444=JS::toPrimitive(implode(!$_multiline?", ":",\\n".$_indent."  ",$values),$global);if(JS::toBoolean($_isArray,$global)){$x446=\' ]\';}else{$x446=\' }\';}$x441=JS::toPrimitive((is_string($x443)||is_string($x444)?JS::toString($x443,$global).JS::toString($x444,$global):JS::toNumber($x443,$global)+JS::toNumber($x444,$global)),$global);$x442=JS::toPrimitive($x446,$global);$x440->properties[\'dump\']=(is_string($x441)||is_string($x442)?JS::toString($x441,$global).JS::toString($x442,$global):JS::toNumber($x441,$global)+JS::toNumber($x442,$global));$x440->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x440;}}}}}return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x259 =& $scope->properties['arguments'];
$x259->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x259->properties[$i] = $args[$i];
$x259->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['object'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_object =& $scope->properties['object'];
$Uobject = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x447 = clone JS::$functionTemplate; $x447->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_11'; $x447->parameters = array (
  0 => 'v',
  1 => 'indent',
); $x447->name = 'dumper'; $x447->scope = $scope; $x447->properties['prototype'] = clone JS::$objectTemplate; $x447->attributes['prototype'] = JS::WRITABLE; $x447->properties['prototype']->properties['constructor'] = $x447; $x447->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x447->properties['length'] = 2; $x447->attributes['length'] = 0;
$scope->properties['dumper'] = JS::$undefined; $_dumper =& $scope->properties['dumper'];
$Udumper = FALSE;
$_dumper = $x447;
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x450 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 130, 16, '<image>/16_console.js');
$_TypeError =& $x450[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x450;
$x451 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 130, 16);
$x452 = $x451($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x452->class) && $x452->class === 'Error' && !isset($x452->properties['file']) && !isset($x452->properties['line']) && !isset($x452->properties['column'])) {$x452->properties['file'] = '<image>/16_console.js';$x452->properties['line'] = 130;$x452->properties['column'] = 16;$x452->attributes['file'] = $x452->attributes['line'] = $x452->attributes['column'] = 0; }
throw new JSException($x452, 130, 16, '<image>/16_console.js');
}
$x448 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 130, 16);
$x449 = $x448($global, $global, $_dumper, array($_object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x453, $W453, $S453, $U453);
$x454 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $x449, (string) 'dump', 130, 24, '<image>/16_console.js');
$x453 =& $x454[0]; list(,$W453,$S453,$U453) = $x454;
return $x453;
;
return JS::$undefined;
}
echo 'function _f5a3c4832dbaf51c9bc86fdffdc142bb_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x259=&$scope->properties[\'arguments\'];$x259->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x259->properties[$i]=$args[$i];$x259->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'object\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_object=&$scope->properties[\'object\'];$Uobject=FALSE;$global->scope[++$global->scope_sp]=$scope;$x447=clone JS::$functionTemplate;$x447->call=\'_f5a3c4832dbaf51c9bc86fdffdc142bb_11\';$x447->parameters=array(0=>\'v\',1=>\'indent\',);$x447->name=\'dumper\';$x447->scope=$scope;$x447->properties[\'prototype\']=clone JS::$objectTemplate;$x447->attributes[\'prototype\']=JS::WRITABLE;$x447->properties[\'prototype\']->properties[\'constructor\']=$x447;$x447->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x447->properties[\'length\']=2;$x447->attributes[\'length\']=0;$scope->properties[\'dumper\']=JS::$undefined;$_dumper=&$scope->properties[\'dumper\'];$Udumper=FALSE;$_dumper=$x447;if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x450=_f5a3c4832dbaf51c9bc86fdffdc142bb_3($global,$scope,$scope,(string)\'TypeError\',130,16,\'<image>/16_console.js\');$_TypeError=&$x450[0];list(,$WTypeError,$STypeError,$UTypeError)=$x450;$x451=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',130,16);$x452=$x451($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x452->class)&&$x452->class===\'Error\'&&!isset($x452->properties[\'file\'])&&!isset($x452->properties[\'line\'])&&!isset($x452->properties[\'column\'])){$x452->properties[\'file\']=\'<image>/16_console.js\';$x452->properties[\'line\']=130;$x452->properties[\'column\']=16;$x452->attributes[\'file\']=$x452->attributes[\'line\']=$x452->attributes[\'column\']=0;}throw new JSException($x452,130,16,\'<image>/16_console.js\');}$x448=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',130,16);$x449=$x448($global,$global,$_dumper,array($_object),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x453,$W453,$S453,$U453);$x454=_f5a3c4832dbaf51c9bc86fdffdc142bb_4($global,$scope,$x449,(string)\'dump\',130,24,\'<image>/16_console.js\');$x453=&$x454[0];list(,$W453,$S453,$U453)=$x454;return$x453;return JS::$undefined;}', "\n";
function _f5a3c4832dbaf51c9bc86fdffdc142bb_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/16_console.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/16_console.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x3 = clone JS::$functionTemplate; $x3->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_1'; $x3->parameters = array (
  0 => 'fd',
  1 => 's',
); $x3->scope = $scope; $x3->properties['prototype'] = clone JS::$objectTemplate; $x3->attributes['prototype'] = JS::WRITABLE; $x3->properties['prototype']->properties['constructor'] = $x3; $x3->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x3->properties['length'] = 2; $x3->attributes['length'] = 0;
$x0->properties['p'] = $x3;
$x0->attributes['p'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x96 = clone JS::$functionTemplate; $x96->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_2'; $x96->parameters = array (
  0 => 'data',
); $x96->scope = $scope; $x96->properties['prototype'] = clone JS::$objectTemplate; $x96->attributes['prototype'] = JS::WRITABLE; $x96->properties['prototype']->properties['constructor'] = $x96; $x96->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x96->properties['length'] = 1; $x96->attributes['length'] = 0;
$x0->properties['log'] = $x96;
$x0->attributes['log'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x182 = clone JS::$functionTemplate; $x182->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_5'; $x182->parameters = array (
  0 => 'data',
); $x182->scope = $scope; $x182->properties['prototype'] = clone JS::$objectTemplate; $x182->attributes['prototype'] = JS::WRITABLE; $x182->properties['prototype']->properties['constructor'] = $x182; $x182->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x182->properties['length'] = 1; $x182->attributes['length'] = 0;
$x0->properties['error'] = $x182;
$x0->attributes['error'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x196 = clone JS::$functionTemplate; $x196->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_6'; $x196->parameters = array (
  0 => 'object',
); $x196->scope = $scope; $x196->properties['prototype'] = clone JS::$objectTemplate; $x196->attributes['prototype'] = JS::WRITABLE; $x196->properties['prototype']->properties['constructor'] = $x196; $x196->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x196->properties['length'] = 1; $x196->attributes['length'] = 0;
$x0->properties['dir'] = $x196;
$x0->attributes['dir'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x197 = clone JS::$objectTemplate;
$x0->properties['_times'] = $x197;
$x0->attributes['_times'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x214 = clone JS::$functionTemplate; $x214->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_7'; $x214->parameters = array (
  0 => 'label',
); $x214->scope = $scope; $x214->properties['prototype'] = clone JS::$objectTemplate; $x214->attributes['prototype'] = JS::WRITABLE; $x214->properties['prototype']->properties['constructor'] = $x214; $x214->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x214->properties['length'] = 1; $x214->attributes['length'] = 0;
$x0->properties['time'] = $x214;
$x0->attributes['time'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x257 = clone JS::$functionTemplate; $x257->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_9'; $x257->parameters = array (
  0 => 'label',
); $x257->scope = $scope; $x257->properties['prototype'] = clone JS::$objectTemplate; $x257->attributes['prototype'] = JS::WRITABLE; $x257->properties['prototype']->properties['constructor'] = $x257; $x257->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x257->properties['length'] = 1; $x257->attributes['length'] = 0;
$x0->properties['timeEnd'] = $x257;
$x0->attributes['timeEnd'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x455 = clone JS::$functionTemplate; $x455->call = '_f5a3c4832dbaf51c9bc86fdffdc142bb_10'; $x455->parameters = array (
  0 => 'object',
); $x455->scope = $scope; $x455->properties['prototype'] = clone JS::$objectTemplate; $x455->attributes['prototype'] = JS::WRITABLE; $x455->properties['prototype']->properties['constructor'] = $x455; $x455->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x455->properties['length'] = 1; $x455->attributes['length'] = 0;
$x0->properties['inspect'] = $x455;
$x0->attributes['inspect'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['console'] = JS::$undefined; $_console =& $scope->properties['console'];
$Uconsole = FALSE;
$_console = $x0;
unset($x456, $W456, $S456, $U456);
$x457 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_console, (string) 'log', 134, 23, '<image>/16_console.js');
$x456 =& $x457[0]; list(,$W456,$S456,$U456) = $x457;
if ($_console === JS::$undefined || $_console === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x458 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 134, 14, '<image>/16_console.js');
$_TypeError =& $x458[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x458;
$x459 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 134, 14);
$x460 = $x459($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x460->class) && $x460->class === 'Error' && !isset($x460->properties['file']) && !isset($x460->properties['line']) && !isset($x460->properties['column'])) {$x460->properties['file'] = '<image>/16_console.js';$x460->properties['line'] = 134;$x460->properties['column'] = 14;$x460->attributes['file'] = $x460->attributes['line'] = $x460->attributes['column'] = 0; }
throw new JSException($x460, 134, 14, '<image>/16_console.js');
}
$_console = JS::toObject($_console, $global);
unset($x461, $W461, $S461, $U461);
$x462 = _f5a3c4832dbaf51c9bc86fdffdc142bb_8($global, $scope, $_console, (string) 'info', 134, 14, '<image>/16_console.js');
$x461 =& $x462[0]; list(,$W461,$S461,$U461) = $x462;
if ($U461 && (!isset($_console->extensible) || $_console->extensible)) {$_console->properties['info'] = $x461; $x461 =& $_console->properties['info']; $_console->attributes['info'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U461 = FALSE; $W461 = TRUE; }
if (isset($S461)) {
$x464 = $S461->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 134, 14);
$x465 = $x464($global, $_console, $S461, array($x456), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x463 = $x465;
} else {
if (!$U461) {$x463 = $x456;if ($W461) { $x461 = $x456; }  }
else { $x463 = JS::$undefined; }
}
if (isset($_console->class) && $_console->class === 'Array' &&  is_int('info') && 'info' >= $_console->properties['length']) { $_console->properties['length'] = 'info' + 1; };
unset($x466, $W466, $S466, $U466);
$x467 = _f5a3c4832dbaf51c9bc86fdffdc142bb_4($global, $scope, $_console, (string) 'error', 135, 23, '<image>/16_console.js');
$x466 =& $x467[0]; list(,$W466,$S466,$U466) = $x467;
if ($_console === JS::$undefined || $_console === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x468 = _f5a3c4832dbaf51c9bc86fdffdc142bb_3($global, $scope, $scope, (string) 'TypeError', 135, 14, '<image>/16_console.js');
$_TypeError =& $x468[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x468;
$x469 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 135, 14);
$x470 = $x469($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x470->class) && $x470->class === 'Error' && !isset($x470->properties['file']) && !isset($x470->properties['line']) && !isset($x470->properties['column'])) {$x470->properties['file'] = '<image>/16_console.js';$x470->properties['line'] = 135;$x470->properties['column'] = 14;$x470->attributes['file'] = $x470->attributes['line'] = $x470->attributes['column'] = 0; }
throw new JSException($x470, 135, 14, '<image>/16_console.js');
}
$_console = JS::toObject($_console, $global);
unset($x471, $W471, $S471, $U471);
$x472 = _f5a3c4832dbaf51c9bc86fdffdc142bb_8($global, $scope, $_console, (string) 'warn', 135, 14, '<image>/16_console.js');
$x471 =& $x472[0]; list(,$W471,$S471,$U471) = $x472;
if ($U471 && (!isset($_console->extensible) || $_console->extensible)) {$_console->properties['warn'] = $x471; $x471 =& $_console->properties['warn']; $_console->attributes['warn'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U471 = FALSE; $W471 = TRUE; }
if (isset($S471)) {
$x474 = $S471->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 135, 14);
$x475 = $x474($global, $_console, $S471, array($x466), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x473 = $x475;
} else {
if (!$U471) {$x473 = $x466;if ($W471) { $x471 = $x466; }  }
else { $x473 = JS::$undefined; }
}
if (isset($_console->class) && $_console->class === 'Array' &&  is_int('warn') && 'warn' >= $_console->properties['length']) { $_console->properties['length'] = 'warn' + 1; };
;
return JS::$undefined;
}
