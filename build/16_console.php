function _ef60fce145dac950f813cdc5f2be6b9c_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x2=&$scope->properties[\'arguments\'];$x2->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x2->properties[$i]=$args[$i];$x2->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'fd\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_fd=&$scope->properties[\'fd\'];$Ufd=FALSE;$scope->properties[\'s\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$global->scope[++$global->scope_sp]=$scope;fwrite($_fd,$_s."\\n");return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x9=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x10;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x16 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x16=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x16[0];list(,$WTypeError,$STypeError,$UTypeError)=$x16;$x17=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x18=$x17($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x18->class)&&$x18->class===\'Error\'&&!isset($x18->properties[\'file\'])&&!isset($x18->properties[\'line\'])&&!isset($x18->properties[\'column\'])){$x18->properties[\'file\']=$file;$x18->properties[\'line\']=$line;$x18->properties[\'column\']=$column;$x18->attributes[\'file\']=$x18->attributes[\'line\']=$x18->attributes[\'column\']=0;}throw new JSException($x18,$line,$column,$file);}$W15=$S15=$U15=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x15=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x19=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x20=$x19($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x20;}else{$x15=JS::$undefined;$U15=TRUE;}return array(&$x15,$W15,$S15,$U15);}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_2($global, $leThis, $fn, $args, $constructor = FALSE) {

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
static $out; if ($out === NULL) { $out = defined('STDOUT') ? STDOUT : fopen('php://output', 'w'); };
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x11 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('arguments', $global), 9, 7, '<image>/16_console.js');
$_arguments =& $x11[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x11;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x12 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 9, 7, '<image>/16_console.js');
$_ReferenceError =& $x12[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x12;
$x13 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 9, 7);
$x14 = $x13($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x14->class) && $x14->class === 'Error' && !isset($x14->properties['file']) && !isset($x14->properties['line']) && !isset($x14->properties['column'])) {$x14->properties['file'] = '<image>/16_console.js';$x14->properties['line'] = 9;$x14->properties['column'] = 7;$x14->attributes['file'] = $x14->attributes['line'] = $x14->attributes['column'] = 0; }
throw new JSException($x14, 9, 7, '<image>/16_console.js');
}
unset($x15, $W15, $S15, $U15);
$x21 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_arguments, JS::toString('length', $global), 9, 16, '<image>/16_console.js');
$x15 =& $x21[0]; list(,$W15,$S15,$U15) = $x21;
$x6 = JS::toPrimitive($x15, $global);
$x7 = JS::toPrimitive(1, $global);
$x8 = (is_string($x7) && is_string($x6) ? strcmp($x7, $x6) < 0 : (!is_nan($x22 = JS::toNumber($x7, $global)) && !is_nan($x23 = JS::toNumber($x6, $global)) && $x22 < $x23));
if (JS::toBoolean($x8, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x25 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 10, 10, '<image>/16_console.js');
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
$x29 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x24, JS::toString('p', $global), 10, 10, '<image>/16_console.js');
$x28 =& $x29[0]; list(,$W28,$S28,$U28) = $x29;
unset($_PHP, $WPHP, $SPHP, $UPHP);
$x30 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('PHP', $global), 10, 23, '<image>/16_console.js');
$_PHP =& $x30[0]; list(,$WPHP,$SPHP,$UPHP) = $x30;
if ($UPHP) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x31 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 10, 23, '<image>/16_console.js');
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
$x35 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 10, 29, '<image>/16_console.js');
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
$x39 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x34, JS::toString('fn', $global), 10, 29, '<image>/16_console.js');
$x38 =& $x39[0]; list(,$W38,$S38,$U38) = $x39;
if (!(is_object($x38) && isset($x38->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x42 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 10, 29, '<image>/16_console.js');
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
$x45 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Array', $global), 10, 48, '<image>/16_console.js');
$_Array =& $x45[0]; list(,$WArray,$SArray,$UArray) = $x45;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x46 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 10, 48, '<image>/16_console.js');
$_ReferenceError =& $x46[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x46;
$x47 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 10, 48);
$x48 = $x47($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x48->class) && $x48->class === 'Error' && !isset($x48->properties['file']) && !isset($x48->properties['line']) && !isset($x48->properties['column'])) {$x48->properties['file'] = '<image>/16_console.js';$x48->properties['line'] = 10;$x48->properties['column'] = 48;$x48->attributes['file'] = $x48->attributes['line'] = $x48->attributes['column'] = 0; }
throw new JSException($x48, 10, 48, '<image>/16_console.js');
}
unset($x49, $W49, $S49, $U49);
$x50 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_Array, JS::toString('prototype', $global), 10, 53, '<image>/16_console.js');
$x49 =& $x50[0]; list(,$W49,$S49,$U49) = $x50;
unset($x51, $W51, $S51, $U51);
$x52 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x49, JS::toString('slice', $global), 10, 63, '<image>/16_console.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if ($x51 === JS::$undefined || $x51 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x54 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 10, 74, '<image>/16_console.js');
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
$x58 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x53, JS::toString('call', $global), 10, 74, '<image>/16_console.js');
$x57 =& $x58[0]; list(,$W57,$S57,$U57) = $x58;
if (!(is_object($x57) && isset($x57->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x61 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 10, 74, '<image>/16_console.js');
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
$x66 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 10, 41, '<image>/16_console.js');
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
$x71 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 10, 10, '<image>/16_console.js');
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
}
else {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x75 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 12, 10, '<image>/16_console.js');
$_TypeError =& $x75[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x75;
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 12, 10);
$x77 = $x76($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error' && !isset($x77->properties['file']) && !isset($x77->properties['line']) && !isset($x77->properties['column'])) {$x77->properties['file'] = '<image>/16_console.js';$x77->properties['line'] = 12;$x77->properties['column'] = 10;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, 12, 10, '<image>/16_console.js');
}
$x74 = JS::toObject($leThis, $global);
unset($x78, $W78, $S78, $U78);
$x79 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x74, JS::toString('p', $global), 12, 10, '<image>/16_console.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x81 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 12, 35, '<image>/16_console.js');
$_TypeError =& $x81[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x81;
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 12, 35);
$x83 = $x82($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error' && !isset($x83->properties['file']) && !isset($x83->properties['line']) && !isset($x83->properties['column'])) {$x83->properties['file'] = '<image>/16_console.js';$x83->properties['line'] = 12;$x83->properties['column'] = 35;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, 12, 35, '<image>/16_console.js');
}
$x80 = JS::toObject($leThis, $global);
unset($x84, $W84, $S84, $U84);
$x85 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x80, JS::toString('inspect', $global), 12, 35, '<image>/16_console.js');
$x84 =& $x85[0]; list(,$W84,$S84,$U84) = $x85;
if (!(is_object($x84) && isset($x84->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 12, 35, '<image>/16_console.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 12, 35);
$x90 = $x89($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error' && !isset($x90->properties['file']) && !isset($x90->properties['line']) && !isset($x90->properties['column'])) {$x90->properties['file'] = '<image>/16_console.js';$x90->properties['line'] = 12;$x90->properties['column'] = 35;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 12, 35, '<image>/16_console.js');
}
$x86 = $x84->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 12, 35);
$x87 = $x86($global, $x80, $x84, array($_data), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x78) && isset($x78->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x93 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 12, 10, '<image>/16_console.js');
$_TypeError =& $x93[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x93;
$x94 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 12, 10);
$x95 = $x94($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x95->class) && $x95->class === 'Error' && !isset($x95->properties['file']) && !isset($x95->properties['line']) && !isset($x95->properties['column'])) {$x95->properties['file'] = '<image>/16_console.js';$x95->properties['line'] = 12;$x95->properties['column'] = 10;$x95->attributes['file'] = $x95->attributes['line'] = $x95->attributes['column'] = 0; }
throw new JSException($x95, 12, 10, '<image>/16_console.js');
}
$x91 = $x78->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 12, 10);
$x92 = $x91($global, $x74, $x78, array($out, $x87), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x5=&$scope->properties[\'arguments\'];$x5->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x5->properties[$i]=$args[$i];$x5->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$global->scope[++$global->scope_sp]=$scope;static$out;if($out===NULL){$out=defined(\'STDOUT\')?STDOUT:fopen(\'php://output\',\'w\');}unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x11=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'arguments\',$global),9,7,\'<image>/16_console.js\');$_arguments=&$x11[0];list(,$Warguments,$Sarguments,$Uarguments)=$x11;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x12=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),9,7,\'<image>/16_console.js\');$_ReferenceError=&$x12[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x12;$x13=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',9,7);$x14=$x13($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x14->class)&&$x14->class===\'Error\'&&!isset($x14->properties[\'file\'])&&!isset($x14->properties[\'line\'])&&!isset($x14->properties[\'column\'])){$x14->properties[\'file\']=\'<image>/16_console.js\';$x14->properties[\'line\']=9;$x14->properties[\'column\']=7;$x14->attributes[\'file\']=$x14->attributes[\'line\']=$x14->attributes[\'column\']=0;}throw new JSException($x14,9,7,\'<image>/16_console.js\');}unset($x15,$W15,$S15,$U15);$x21=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_arguments,JS::toString(\'length\',$global),9,16,\'<image>/16_console.js\');$x15=&$x21[0];list(,$W15,$S15,$U15)=$x21;$x6=JS::toPrimitive($x15,$global);$x7=JS::toPrimitive(1,$global);$x8=(is_string($x7)&&is_string($x6)?strcmp($x7,$x6)<0:(!is_nan($x22=JS::toNumber($x7,$global))&&!is_nan($x23=JS::toNumber($x6,$global))&&$x22<$x23));if(JS::toBoolean($x8,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x25=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),10,10,\'<image>/16_console.js\');$_TypeError=&$x25[0];list(,$WTypeError,$STypeError,$UTypeError)=$x25;$x26=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,10);$x27=$x26($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=\'<image>/16_console.js\';$x27->properties[\'line\']=10;$x27->properties[\'column\']=10;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,10,10,\'<image>/16_console.js\');}$x24=JS::toObject($leThis,$global);unset($x28,$W28,$S28,$U28);$x29=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x24,JS::toString(\'p\',$global),10,10,\'<image>/16_console.js\');$x28=&$x29[0];list(,$W28,$S28,$U28)=$x29;unset($_PHP,$WPHP,$SPHP,$UPHP);$x30=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'PHP\',$global),10,23,\'<image>/16_console.js\');$_PHP=&$x30[0];list(,$WPHP,$SPHP,$UPHP)=$x30;if($UPHP){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x31=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),10,23,\'<image>/16_console.js\');$_ReferenceError=&$x31[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x31;$x32=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,23);$x33=$x32($global,$global,$_ReferenceError,array(\'PHP is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x33->class)&&$x33->class===\'Error\'&&!isset($x33->properties[\'file\'])&&!isset($x33->properties[\'line\'])&&!isset($x33->properties[\'column\'])){$x33->properties[\'file\']=\'<image>/16_console.js\';$x33->properties[\'line\']=10;$x33->properties[\'column\']=23;$x33->attributes[\'file\']=$x33->attributes[\'line\']=$x33->attributes[\'column\']=0;}throw new JSException($x33,10,23,\'<image>/16_console.js\');}if($_PHP===JS::$undefined||$_PHP===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),10,29,\'<image>/16_console.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,29);$x37=$x36($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'&&!isset($x37->properties[\'file\'])&&!isset($x37->properties[\'line\'])&&!isset($x37->properties[\'column\'])){$x37->properties[\'file\']=\'<image>/16_console.js\';$x37->properties[\'line\']=10;$x37->properties[\'column\']=29;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,10,29,\'<image>/16_console.js\');}$x34=JS::toObject($_PHP,$global);unset($x38,$W38,$S38,$U38);$x39=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x34,JS::toString(\'fn\',$global),10,29,\'<image>/16_console.js\');$x38=&$x39[0];list(,$W38,$S38,$U38)=$x39;if(!(is_object($x38)&&isset($x38->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x42=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),10,29,\'<image>/16_console.js\');$_TypeError=&$x42[0];list(,$WTypeError,$STypeError,$UTypeError)=$x42;$x43=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,29);$x44=$x43($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x44->class)&&$x44->class===\'Error\'&&!isset($x44->properties[\'file\'])&&!isset($x44->properties[\'line\'])&&!isset($x44->properties[\'column\'])){$x44->properties[\'file\']=\'<image>/16_console.js\';$x44->properties[\'line\']=10;$x44->properties[\'column\']=29;$x44->attributes[\'file\']=$x44->attributes[\'line\']=$x44->attributes[\'column\']=0;}throw new JSException($x44,10,29,\'<image>/16_console.js\');}$x40=$x38->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,29);$x41=$x40($global,$x34,$x38,array(\'vsprintf\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($_Array,$WArray,$SArray,$UArray);$x45=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Array\',$global),10,48,\'<image>/16_console.js\');$_Array=&$x45[0];list(,$WArray,$SArray,$UArray)=$x45;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x46=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),10,48,\'<image>/16_console.js\');$_ReferenceError=&$x46[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x46;$x47=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,48);$x48=$x47($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x48->class)&&$x48->class===\'Error\'&&!isset($x48->properties[\'file\'])&&!isset($x48->properties[\'line\'])&&!isset($x48->properties[\'column\'])){$x48->properties[\'file\']=\'<image>/16_console.js\';$x48->properties[\'line\']=10;$x48->properties[\'column\']=48;$x48->attributes[\'file\']=$x48->attributes[\'line\']=$x48->attributes[\'column\']=0;}throw new JSException($x48,10,48,\'<image>/16_console.js\');}unset($x49,$W49,$S49,$U49);$x50=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_Array,JS::toString(\'prototype\',$global),10,53,\'<image>/16_console.js\');$x49=&$x50[0];list(,$W49,$S49,$U49)=$x50;unset($x51,$W51,$S51,$U51);$x52=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x49,JS::toString(\'slice\',$global),10,63,\'<image>/16_console.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;if($x51===JS::$undefined||$x51===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x54=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),10,74,\'<image>/16_console.js\');$_TypeError=&$x54[0];list(,$WTypeError,$STypeError,$UTypeError)=$x54;$x55=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,74);$x56=$x55($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/16_console.js\';$x56->properties[\'line\']=10;$x56->properties[\'column\']=74;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,10,74,\'<image>/16_console.js\');}$x53=JS::toObject($x51,$global);unset($x57,$W57,$S57,$U57);$x58=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x53,JS::toString(\'call\',$global),10,74,\'<image>/16_console.js\');$x57=&$x58[0];list(,$W57,$S57,$U57)=$x58;if(!(is_object($x57)&&isset($x57->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x61=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),10,74,\'<image>/16_console.js\');$_TypeError=&$x61[0];list(,$WTypeError,$STypeError,$UTypeError)=$x61;$x62=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,74);$x63=$x62($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'&&!isset($x63->properties[\'file\'])&&!isset($x63->properties[\'line\'])&&!isset($x63->properties[\'column\'])){$x63->properties[\'file\']=\'<image>/16_console.js\';$x63->properties[\'line\']=10;$x63->properties[\'column\']=74;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,10,74,\'<image>/16_console.js\');}$x59=$x57->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,74);$x60=$x59($global,$x53,$x57,array($_arguments,1),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x41)&&isset($x41->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x66=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),10,41,\'<image>/16_console.js\');$_TypeError=&$x66[0];list(,$WTypeError,$STypeError,$UTypeError)=$x66;$x67=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,41);$x68=$x67($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x68->class)&&$x68->class===\'Error\'&&!isset($x68->properties[\'file\'])&&!isset($x68->properties[\'line\'])&&!isset($x68->properties[\'column\'])){$x68->properties[\'file\']=\'<image>/16_console.js\';$x68->properties[\'line\']=10;$x68->properties[\'column\']=41;$x68->attributes[\'file\']=$x68->attributes[\'line\']=$x68->attributes[\'column\']=0;}throw new JSException($x68,10,41,\'<image>/16_console.js\');}$x64=$x41->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,41);$x65=$x64($global,$global,$x41,array($_data,$x60),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x28)&&isset($x28->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x71=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),10,10,\'<image>/16_console.js\');$_TypeError=&$x71[0];list(,$WTypeError,$STypeError,$UTypeError)=$x71;$x72=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,10);$x73=$x72($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'&&!isset($x73->properties[\'file\'])&&!isset($x73->properties[\'line\'])&&!isset($x73->properties[\'column\'])){$x73->properties[\'file\']=\'<image>/16_console.js\';$x73->properties[\'line\']=10;$x73->properties[\'column\']=10;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,10,10,\'<image>/16_console.js\');}$x69=$x28->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',10,10);$x70=$x69($global,$x24,$x28,array($out,$x65),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x75=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,10,\'<image>/16_console.js\');$_TypeError=&$x75[0];list(,$WTypeError,$STypeError,$UTypeError)=$x75;$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',12,10);$x77=$x76($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x77->class)&&$x77->class===\'Error\'&&!isset($x77->properties[\'file\'])&&!isset($x77->properties[\'line\'])&&!isset($x77->properties[\'column\'])){$x77->properties[\'file\']=\'<image>/16_console.js\';$x77->properties[\'line\']=12;$x77->properties[\'column\']=10;$x77->attributes[\'file\']=$x77->attributes[\'line\']=$x77->attributes[\'column\']=0;}throw new JSException($x77,12,10,\'<image>/16_console.js\');}$x74=JS::toObject($leThis,$global);unset($x78,$W78,$S78,$U78);$x79=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x74,JS::toString(\'p\',$global),12,10,\'<image>/16_console.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x81=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,35,\'<image>/16_console.js\');$_TypeError=&$x81[0];list(,$WTypeError,$STypeError,$UTypeError)=$x81;$x82=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',12,35);$x83=$x82($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x83->class)&&$x83->class===\'Error\'&&!isset($x83->properties[\'file\'])&&!isset($x83->properties[\'line\'])&&!isset($x83->properties[\'column\'])){$x83->properties[\'file\']=\'<image>/16_console.js\';$x83->properties[\'line\']=12;$x83->properties[\'column\']=35;$x83->attributes[\'file\']=$x83->attributes[\'line\']=$x83->attributes[\'column\']=0;}throw new JSException($x83,12,35,\'<image>/16_console.js\');}$x80=JS::toObject($leThis,$global);unset($x84,$W84,$S84,$U84);$x85=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x80,JS::toString(\'inspect\',$global),12,35,\'<image>/16_console.js\');$x84=&$x85[0];list(,$W84,$S84,$U84)=$x85;if(!(is_object($x84)&&isset($x84->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x88=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,35,\'<image>/16_console.js\');$_TypeError=&$x88[0];list(,$WTypeError,$STypeError,$UTypeError)=$x88;$x89=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',12,35);$x90=$x89($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x90->class)&&$x90->class===\'Error\'&&!isset($x90->properties[\'file\'])&&!isset($x90->properties[\'line\'])&&!isset($x90->properties[\'column\'])){$x90->properties[\'file\']=\'<image>/16_console.js\';$x90->properties[\'line\']=12;$x90->properties[\'column\']=35;$x90->attributes[\'file\']=$x90->attributes[\'line\']=$x90->attributes[\'column\']=0;}throw new JSException($x90,12,35,\'<image>/16_console.js\');}$x86=$x84->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',12,35);$x87=$x86($global,$x80,$x84,array($_data),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x78)&&isset($x78->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x93=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),12,10,\'<image>/16_console.js\');$_TypeError=&$x93[0];list(,$WTypeError,$STypeError,$UTypeError)=$x93;$x94=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',12,10);$x95=$x94($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x95->class)&&$x95->class===\'Error\'&&!isset($x95->properties[\'file\'])&&!isset($x95->properties[\'line\'])&&!isset($x95->properties[\'column\'])){$x95->properties[\'file\']=\'<image>/16_console.js\';$x95->properties[\'line\']=12;$x95->properties[\'column\']=10;$x95->attributes[\'file\']=$x95->attributes[\'line\']=$x95->attributes[\'column\']=0;}throw new JSException($x95,12,10,\'<image>/16_console.js\');}$x91=$x78->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',12,10);$x92=$x91($global,$x74,$x78,array($out,$x87),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_5($global, $leThis, $fn, $args, $constructor = FALSE) {

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
static $err; if ($err === NULL) { $err = defined('STDERR') ? STDERR : fopen('php://output', 'w'); };
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x102 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('arguments', $global), 19, 7, '<image>/16_console.js');
$_arguments =& $x102[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x102;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x103 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 7, '<image>/16_console.js');
$_ReferenceError =& $x103[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x103;
$x104 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 19, 7);
$x105 = $x104($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x105->class) && $x105->class === 'Error' && !isset($x105->properties['file']) && !isset($x105->properties['line']) && !isset($x105->properties['column'])) {$x105->properties['file'] = '<image>/16_console.js';$x105->properties['line'] = 19;$x105->properties['column'] = 7;$x105->attributes['file'] = $x105->attributes['line'] = $x105->attributes['column'] = 0; }
throw new JSException($x105, 19, 7, '<image>/16_console.js');
}
unset($x106, $W106, $S106, $U106);
$x107 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_arguments, JS::toString('length', $global), 19, 16, '<image>/16_console.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
$x99 = JS::toPrimitive($x106, $global);
$x100 = JS::toPrimitive(1, $global);
$x101 = (is_string($x100) && is_string($x99) ? strcmp($x100, $x99) < 0 : (!is_nan($x108 = JS::toNumber($x100, $global)) && !is_nan($x109 = JS::toNumber($x99, $global)) && $x108 < $x109));
if (JS::toBoolean($x101, $global)) {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x111 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 20, 10, '<image>/16_console.js');
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
$x115 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x110, JS::toString('p', $global), 20, 10, '<image>/16_console.js');
$x114 =& $x115[0]; list(,$W114,$S114,$U114) = $x115;
unset($_PHP, $WPHP, $SPHP, $UPHP);
$x116 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('PHP', $global), 20, 23, '<image>/16_console.js');
$_PHP =& $x116[0]; list(,$WPHP,$SPHP,$UPHP) = $x116;
if ($UPHP) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x117 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 20, 23, '<image>/16_console.js');
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
$x121 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 20, 29, '<image>/16_console.js');
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
$x125 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x120, JS::toString('fn', $global), 20, 29, '<image>/16_console.js');
$x124 =& $x125[0]; list(,$W124,$S124,$U124) = $x125;
if (!(is_object($x124) && isset($x124->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x128 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 20, 29, '<image>/16_console.js');
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
$x131 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Array', $global), 20, 48, '<image>/16_console.js');
$_Array =& $x131[0]; list(,$WArray,$SArray,$UArray) = $x131;
if ($UArray) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x132 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 20, 48, '<image>/16_console.js');
$_ReferenceError =& $x132[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x132;
$x133 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 20, 48);
$x134 = $x133($global, $global, $_ReferenceError, array('Array is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x134->class) && $x134->class === 'Error' && !isset($x134->properties['file']) && !isset($x134->properties['line']) && !isset($x134->properties['column'])) {$x134->properties['file'] = '<image>/16_console.js';$x134->properties['line'] = 20;$x134->properties['column'] = 48;$x134->attributes['file'] = $x134->attributes['line'] = $x134->attributes['column'] = 0; }
throw new JSException($x134, 20, 48, '<image>/16_console.js');
}
unset($x135, $W135, $S135, $U135);
$x136 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_Array, JS::toString('prototype', $global), 20, 53, '<image>/16_console.js');
$x135 =& $x136[0]; list(,$W135,$S135,$U135) = $x136;
unset($x137, $W137, $S137, $U137);
$x138 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x135, JS::toString('slice', $global), 20, 63, '<image>/16_console.js');
$x137 =& $x138[0]; list(,$W137,$S137,$U137) = $x138;
if ($x137 === JS::$undefined || $x137 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x140 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 20, 74, '<image>/16_console.js');
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
$x144 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x139, JS::toString('call', $global), 20, 74, '<image>/16_console.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if (!(is_object($x143) && isset($x143->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x147 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 20, 74, '<image>/16_console.js');
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
$x152 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 20, 41, '<image>/16_console.js');
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
$x157 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 20, 10, '<image>/16_console.js');
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
}
else {
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x161 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 22, 10, '<image>/16_console.js');
$_TypeError =& $x161[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x161;
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 22, 10);
$x163 = $x162($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error' && !isset($x163->properties['file']) && !isset($x163->properties['line']) && !isset($x163->properties['column'])) {$x163->properties['file'] = '<image>/16_console.js';$x163->properties['line'] = 22;$x163->properties['column'] = 10;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 22, 10, '<image>/16_console.js');
}
$x160 = JS::toObject($leThis, $global);
unset($x164, $W164, $S164, $U164);
$x165 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x160, JS::toString('p', $global), 22, 10, '<image>/16_console.js');
$x164 =& $x165[0]; list(,$W164,$S164,$U164) = $x165;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x167 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 22, 35, '<image>/16_console.js');
$_TypeError =& $x167[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x167;
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 22, 35);
$x169 = $x168($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/16_console.js';$x169->properties['line'] = 22;$x169->properties['column'] = 35;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 22, 35, '<image>/16_console.js');
}
$x166 = JS::toObject($leThis, $global);
unset($x170, $W170, $S170, $U170);
$x171 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x166, JS::toString('inspect', $global), 22, 35, '<image>/16_console.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
if (!(is_object($x170) && isset($x170->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x174 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 22, 35, '<image>/16_console.js');
$_TypeError =& $x174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x174;
$x175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 22, 35);
$x176 = $x175($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x176->class) && $x176->class === 'Error' && !isset($x176->properties['file']) && !isset($x176->properties['line']) && !isset($x176->properties['column'])) {$x176->properties['file'] = '<image>/16_console.js';$x176->properties['line'] = 22;$x176->properties['column'] = 35;$x176->attributes['file'] = $x176->attributes['line'] = $x176->attributes['column'] = 0; }
throw new JSException($x176, 22, 35, '<image>/16_console.js');
}
$x172 = $x170->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 22, 35);
$x173 = $x172($global, $x166, $x170, array($_data), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x164) && isset($x164->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x179 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 22, 10, '<image>/16_console.js');
$_TypeError =& $x179[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x179;
$x180 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 22, 10);
$x181 = $x180($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x181->class) && $x181->class === 'Error' && !isset($x181->properties['file']) && !isset($x181->properties['line']) && !isset($x181->properties['column'])) {$x181->properties['file'] = '<image>/16_console.js';$x181->properties['line'] = 22;$x181->properties['column'] = 10;$x181->attributes['file'] = $x181->attributes['line'] = $x181->attributes['column'] = 0; }
throw new JSException($x181, 22, 10, '<image>/16_console.js');
}
$x177 = $x164->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 22, 10);
$x178 = $x177($global, $x160, $x164, array($err, $x173), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x98=&$scope->properties[\'arguments\'];$x98->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x98->properties[$i]=$args[$i];$x98->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$global->scope[++$global->scope_sp]=$scope;static$err;if($err===NULL){$err=defined(\'STDERR\')?STDERR:fopen(\'php://output\',\'w\');}unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x102=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'arguments\',$global),19,7,\'<image>/16_console.js\');$_arguments=&$x102[0];list(,$Warguments,$Sarguments,$Uarguments)=$x102;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x103=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),19,7,\'<image>/16_console.js\');$_ReferenceError=&$x103[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x103;$x104=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',19,7);$x105=$x104($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x105->class)&&$x105->class===\'Error\'&&!isset($x105->properties[\'file\'])&&!isset($x105->properties[\'line\'])&&!isset($x105->properties[\'column\'])){$x105->properties[\'file\']=\'<image>/16_console.js\';$x105->properties[\'line\']=19;$x105->properties[\'column\']=7;$x105->attributes[\'file\']=$x105->attributes[\'line\']=$x105->attributes[\'column\']=0;}throw new JSException($x105,19,7,\'<image>/16_console.js\');}unset($x106,$W106,$S106,$U106);$x107=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_arguments,JS::toString(\'length\',$global),19,16,\'<image>/16_console.js\');$x106=&$x107[0];list(,$W106,$S106,$U106)=$x107;$x99=JS::toPrimitive($x106,$global);$x100=JS::toPrimitive(1,$global);$x101=(is_string($x100)&&is_string($x99)?strcmp($x100,$x99)<0:(!is_nan($x108=JS::toNumber($x100,$global))&&!is_nan($x109=JS::toNumber($x99,$global))&&$x108<$x109));if(JS::toBoolean($x101,$global)){if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x111=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),20,10,\'<image>/16_console.js\');$_TypeError=&$x111[0];list(,$WTypeError,$STypeError,$UTypeError)=$x111;$x112=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,10);$x113=$x112($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x113->class)&&$x113->class===\'Error\'&&!isset($x113->properties[\'file\'])&&!isset($x113->properties[\'line\'])&&!isset($x113->properties[\'column\'])){$x113->properties[\'file\']=\'<image>/16_console.js\';$x113->properties[\'line\']=20;$x113->properties[\'column\']=10;$x113->attributes[\'file\']=$x113->attributes[\'line\']=$x113->attributes[\'column\']=0;}throw new JSException($x113,20,10,\'<image>/16_console.js\');}$x110=JS::toObject($leThis,$global);unset($x114,$W114,$S114,$U114);$x115=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x110,JS::toString(\'p\',$global),20,10,\'<image>/16_console.js\');$x114=&$x115[0];list(,$W114,$S114,$U114)=$x115;unset($_PHP,$WPHP,$SPHP,$UPHP);$x116=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'PHP\',$global),20,23,\'<image>/16_console.js\');$_PHP=&$x116[0];list(,$WPHP,$SPHP,$UPHP)=$x116;if($UPHP){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x117=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),20,23,\'<image>/16_console.js\');$_ReferenceError=&$x117[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x117;$x118=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,23);$x119=$x118($global,$global,$_ReferenceError,array(\'PHP is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x119->class)&&$x119->class===\'Error\'&&!isset($x119->properties[\'file\'])&&!isset($x119->properties[\'line\'])&&!isset($x119->properties[\'column\'])){$x119->properties[\'file\']=\'<image>/16_console.js\';$x119->properties[\'line\']=20;$x119->properties[\'column\']=23;$x119->attributes[\'file\']=$x119->attributes[\'line\']=$x119->attributes[\'column\']=0;}throw new JSException($x119,20,23,\'<image>/16_console.js\');}if($_PHP===JS::$undefined||$_PHP===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x121=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),20,29,\'<image>/16_console.js\');$_TypeError=&$x121[0];list(,$WTypeError,$STypeError,$UTypeError)=$x121;$x122=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,29);$x123=$x122($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x123->class)&&$x123->class===\'Error\'&&!isset($x123->properties[\'file\'])&&!isset($x123->properties[\'line\'])&&!isset($x123->properties[\'column\'])){$x123->properties[\'file\']=\'<image>/16_console.js\';$x123->properties[\'line\']=20;$x123->properties[\'column\']=29;$x123->attributes[\'file\']=$x123->attributes[\'line\']=$x123->attributes[\'column\']=0;}throw new JSException($x123,20,29,\'<image>/16_console.js\');}$x120=JS::toObject($_PHP,$global);unset($x124,$W124,$S124,$U124);$x125=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x120,JS::toString(\'fn\',$global),20,29,\'<image>/16_console.js\');$x124=&$x125[0];list(,$W124,$S124,$U124)=$x125;if(!(is_object($x124)&&isset($x124->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x128=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),20,29,\'<image>/16_console.js\');$_TypeError=&$x128[0];list(,$WTypeError,$STypeError,$UTypeError)=$x128;$x129=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,29);$x130=$x129($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x130->class)&&$x130->class===\'Error\'&&!isset($x130->properties[\'file\'])&&!isset($x130->properties[\'line\'])&&!isset($x130->properties[\'column\'])){$x130->properties[\'file\']=\'<image>/16_console.js\';$x130->properties[\'line\']=20;$x130->properties[\'column\']=29;$x130->attributes[\'file\']=$x130->attributes[\'line\']=$x130->attributes[\'column\']=0;}throw new JSException($x130,20,29,\'<image>/16_console.js\');}$x126=$x124->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,29);$x127=$x126($global,$x120,$x124,array(\'vsprintf\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($_Array,$WArray,$SArray,$UArray);$x131=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Array\',$global),20,48,\'<image>/16_console.js\');$_Array=&$x131[0];list(,$WArray,$SArray,$UArray)=$x131;if($UArray){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x132=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),20,48,\'<image>/16_console.js\');$_ReferenceError=&$x132[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x132;$x133=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,48);$x134=$x133($global,$global,$_ReferenceError,array(\'Array is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x134->class)&&$x134->class===\'Error\'&&!isset($x134->properties[\'file\'])&&!isset($x134->properties[\'line\'])&&!isset($x134->properties[\'column\'])){$x134->properties[\'file\']=\'<image>/16_console.js\';$x134->properties[\'line\']=20;$x134->properties[\'column\']=48;$x134->attributes[\'file\']=$x134->attributes[\'line\']=$x134->attributes[\'column\']=0;}throw new JSException($x134,20,48,\'<image>/16_console.js\');}unset($x135,$W135,$S135,$U135);$x136=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_Array,JS::toString(\'prototype\',$global),20,53,\'<image>/16_console.js\');$x135=&$x136[0];list(,$W135,$S135,$U135)=$x136;unset($x137,$W137,$S137,$U137);$x138=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x135,JS::toString(\'slice\',$global),20,63,\'<image>/16_console.js\');$x137=&$x138[0];list(,$W137,$S137,$U137)=$x138;if($x137===JS::$undefined||$x137===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x140=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),20,74,\'<image>/16_console.js\');$_TypeError=&$x140[0];list(,$WTypeError,$STypeError,$UTypeError)=$x140;$x141=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,74);$x142=$x141($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x142->class)&&$x142->class===\'Error\'&&!isset($x142->properties[\'file\'])&&!isset($x142->properties[\'line\'])&&!isset($x142->properties[\'column\'])){$x142->properties[\'file\']=\'<image>/16_console.js\';$x142->properties[\'line\']=20;$x142->properties[\'column\']=74;$x142->attributes[\'file\']=$x142->attributes[\'line\']=$x142->attributes[\'column\']=0;}throw new JSException($x142,20,74,\'<image>/16_console.js\');}$x139=JS::toObject($x137,$global);unset($x143,$W143,$S143,$U143);$x144=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x139,JS::toString(\'call\',$global),20,74,\'<image>/16_console.js\');$x143=&$x144[0];list(,$W143,$S143,$U143)=$x144;if(!(is_object($x143)&&isset($x143->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x147=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),20,74,\'<image>/16_console.js\');$_TypeError=&$x147[0];list(,$WTypeError,$STypeError,$UTypeError)=$x147;$x148=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,74);$x149=$x148($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x149->class)&&$x149->class===\'Error\'&&!isset($x149->properties[\'file\'])&&!isset($x149->properties[\'line\'])&&!isset($x149->properties[\'column\'])){$x149->properties[\'file\']=\'<image>/16_console.js\';$x149->properties[\'line\']=20;$x149->properties[\'column\']=74;$x149->attributes[\'file\']=$x149->attributes[\'line\']=$x149->attributes[\'column\']=0;}throw new JSException($x149,20,74,\'<image>/16_console.js\');}$x145=$x143->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,74);$x146=$x145($global,$x139,$x143,array($_arguments,1),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x127)&&isset($x127->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x152=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),20,41,\'<image>/16_console.js\');$_TypeError=&$x152[0];list(,$WTypeError,$STypeError,$UTypeError)=$x152;$x153=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,41);$x154=$x153($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x154->class)&&$x154->class===\'Error\'&&!isset($x154->properties[\'file\'])&&!isset($x154->properties[\'line\'])&&!isset($x154->properties[\'column\'])){$x154->properties[\'file\']=\'<image>/16_console.js\';$x154->properties[\'line\']=20;$x154->properties[\'column\']=41;$x154->attributes[\'file\']=$x154->attributes[\'line\']=$x154->attributes[\'column\']=0;}throw new JSException($x154,20,41,\'<image>/16_console.js\');}$x150=$x127->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,41);$x151=$x150($global,$global,$x127,array($_data,$x146),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x114)&&isset($x114->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x157=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),20,10,\'<image>/16_console.js\');$_TypeError=&$x157[0];list(,$WTypeError,$STypeError,$UTypeError)=$x157;$x158=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,10);$x159=$x158($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x159->class)&&$x159->class===\'Error\'&&!isset($x159->properties[\'file\'])&&!isset($x159->properties[\'line\'])&&!isset($x159->properties[\'column\'])){$x159->properties[\'file\']=\'<image>/16_console.js\';$x159->properties[\'line\']=20;$x159->properties[\'column\']=10;$x159->attributes[\'file\']=$x159->attributes[\'line\']=$x159->attributes[\'column\']=0;}throw new JSException($x159,20,10,\'<image>/16_console.js\');}$x155=$x114->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',20,10);$x156=$x155($global,$x110,$x114,array($err,$x151),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}else{if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x161=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),22,10,\'<image>/16_console.js\');$_TypeError=&$x161[0];list(,$WTypeError,$STypeError,$UTypeError)=$x161;$x162=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',22,10);$x163=$x162($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x163->class)&&$x163->class===\'Error\'&&!isset($x163->properties[\'file\'])&&!isset($x163->properties[\'line\'])&&!isset($x163->properties[\'column\'])){$x163->properties[\'file\']=\'<image>/16_console.js\';$x163->properties[\'line\']=22;$x163->properties[\'column\']=10;$x163->attributes[\'file\']=$x163->attributes[\'line\']=$x163->attributes[\'column\']=0;}throw new JSException($x163,22,10,\'<image>/16_console.js\');}$x160=JS::toObject($leThis,$global);unset($x164,$W164,$S164,$U164);$x165=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x160,JS::toString(\'p\',$global),22,10,\'<image>/16_console.js\');$x164=&$x165[0];list(,$W164,$S164,$U164)=$x165;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x167=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),22,35,\'<image>/16_console.js\');$_TypeError=&$x167[0];list(,$WTypeError,$STypeError,$UTypeError)=$x167;$x168=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',22,35);$x169=$x168($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x169->class)&&$x169->class===\'Error\'&&!isset($x169->properties[\'file\'])&&!isset($x169->properties[\'line\'])&&!isset($x169->properties[\'column\'])){$x169->properties[\'file\']=\'<image>/16_console.js\';$x169->properties[\'line\']=22;$x169->properties[\'column\']=35;$x169->attributes[\'file\']=$x169->attributes[\'line\']=$x169->attributes[\'column\']=0;}throw new JSException($x169,22,35,\'<image>/16_console.js\');}$x166=JS::toObject($leThis,$global);unset($x170,$W170,$S170,$U170);$x171=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x166,JS::toString(\'inspect\',$global),22,35,\'<image>/16_console.js\');$x170=&$x171[0];list(,$W170,$S170,$U170)=$x171;if(!(is_object($x170)&&isset($x170->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x174=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),22,35,\'<image>/16_console.js\');$_TypeError=&$x174[0];list(,$WTypeError,$STypeError,$UTypeError)=$x174;$x175=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',22,35);$x176=$x175($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x176->class)&&$x176->class===\'Error\'&&!isset($x176->properties[\'file\'])&&!isset($x176->properties[\'line\'])&&!isset($x176->properties[\'column\'])){$x176->properties[\'file\']=\'<image>/16_console.js\';$x176->properties[\'line\']=22;$x176->properties[\'column\']=35;$x176->attributes[\'file\']=$x176->attributes[\'line\']=$x176->attributes[\'column\']=0;}throw new JSException($x176,22,35,\'<image>/16_console.js\');}$x172=$x170->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',22,35);$x173=$x172($global,$x166,$x170,array($_data),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x164)&&isset($x164->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x179=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),22,10,\'<image>/16_console.js\');$_TypeError=&$x179[0];list(,$WTypeError,$STypeError,$UTypeError)=$x179;$x180=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',22,10);$x181=$x180($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x181->class)&&$x181->class===\'Error\'&&!isset($x181->properties[\'file\'])&&!isset($x181->properties[\'line\'])&&!isset($x181->properties[\'column\'])){$x181->properties[\'file\']=\'<image>/16_console.js\';$x181->properties[\'line\']=22;$x181->properties[\'column\']=10;$x181->attributes[\'file\']=$x181->attributes[\'line\']=$x181->attributes[\'column\']=0;}throw new JSException($x181,22,10,\'<image>/16_console.js\');}$x177=$x164->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',22,10);$x178=$x177($global,$x160,$x164,array($err,$x173),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x186 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 27, 18, '<image>/16_console.js');
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
$x190 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x185, JS::toString('log', $global), 27, 18, '<image>/16_console.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
if (!(is_object($x189) && isset($x189->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x193 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 27, 18, '<image>/16_console.js');
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
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x184=&$scope->properties[\'arguments\'];$x184->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x184->properties[$i]=$args[$i];$x184->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'object\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_object=&$scope->properties[\'object\'];$Uobject=FALSE;$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x186=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),27,18,\'<image>/16_console.js\');$_TypeError=&$x186[0];list(,$WTypeError,$STypeError,$UTypeError)=$x186;$x187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',27,18);$x188=$x187($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x188->class)&&$x188->class===\'Error\'&&!isset($x188->properties[\'file\'])&&!isset($x188->properties[\'line\'])&&!isset($x188->properties[\'column\'])){$x188->properties[\'file\']=\'<image>/16_console.js\';$x188->properties[\'line\']=27;$x188->properties[\'column\']=18;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,27,18,\'<image>/16_console.js\');}$x185=JS::toObject($leThis,$global);unset($x189,$W189,$S189,$U189);$x190=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x185,JS::toString(\'log\',$global),27,18,\'<image>/16_console.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;if(!(is_object($x189)&&isset($x189->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x193=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),27,18,\'<image>/16_console.js\');$_TypeError=&$x193[0];list(,$WTypeError,$STypeError,$UTypeError)=$x193;$x194=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',27,18);$x195=$x194($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/16_console.js\';$x195->properties[\'line\']=27;$x195->properties[\'column\']=18;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,27,18,\'<image>/16_console.js\');}$x191=$x189->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',27,18);$x192=$x191($global,$x185,$x189,array($_object),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x192;return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x208 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x208[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x208;
$x209 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x210 = $x209($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x210->class) && $x210->class === 'Error' && !isset($x210->properties['file']) && !isset($x210->properties['line']) && !isset($x210->properties['column'])) {$x210->properties['file'] = $file;$x210->properties['line'] = $line;$x210->properties['column'] = $column;$x210->attributes['file'] = $x210->attributes['line'] = $x210->attributes['column'] = 0; }
throw new JSException($x210, $line, $column, $file);
}
$W207 = $S207 = $U207 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x207 =& $lookup->properties[$id]; $W207 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S207 = $lookup->setters[$id]; }
else { $x207 = JS::$undefined; $U207 = TRUE; }
return array(&$x207, $W207, $S207, $U207);
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_8($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x208=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x208[0];list(,$WTypeError,$STypeError,$UTypeError)=$x208;$x209=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x210=$x209($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x210->class)&&$x210->class===\'Error\'&&!isset($x210->properties[\'file\'])&&!isset($x210->properties[\'line\'])&&!isset($x210->properties[\'column\'])){$x210->properties[\'file\']=$file;$x210->properties[\'line\']=$line;$x210->properties[\'column\']=$column;$x210->attributes[\'file\']=$x210->attributes[\'line\']=$x210->attributes[\'column\']=0;}throw new JSException($x210,$line,$column,$file);}$W207=$S207=$U207=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x207=&$lookup->properties[$id];$W207=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S207=$lookup->setters[$id];}else{$x207=JS::$undefined;$U207=TRUE;}return array(&$x207,$W207,$S207,$U207);}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_7($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x202 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $leThis, JS::toString('_times', $global), 33, 7, '<image>/16_console.js');
$x201 =& $x202[0]; list(,$W201,$S201,$U201) = $x202;
$x203 = JS::toString($_label, $global);
if ($x201 === JS::$undefined || $x201 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x204 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 33, 22, '<image>/16_console.js');
$_TypeError =& $x204[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x204;
$x205 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 33, 22);
$x206 = $x205($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x206->class) && $x206->class === 'Error' && !isset($x206->properties['file']) && !isset($x206->properties['line']) && !isset($x206->properties['column'])) {$x206->properties['file'] = '<image>/16_console.js';$x206->properties['line'] = 33;$x206->properties['column'] = 22;$x206->attributes['file'] = $x206->attributes['line'] = $x206->attributes['column'] = 0; }
throw new JSException($x206, 33, 22, '<image>/16_console.js');
}
$x201 = JS::toObject($x201, $global);
unset($x207, $W207, $S207, $U207);
$x211 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $x201, JS::toString($x203, $global), 33, 22, '<image>/16_console.js');
$x207 =& $x211[0]; list(,$W207,$S207,$U207) = $x211;
if ($U207 && (!isset($x201->extensible) || $x201->extensible)) {$x201->properties[$x203] = $x207; $x207 =& $x201->properties[$x203]; $x201->attributes[$x203] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U207 = FALSE; $W207 = TRUE; }
if (isset($S207)) {
$x213 = $S207->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 33, 22);
$x214 = $x213($global, $x201, $S207, array($x200), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x212 = $x214;
} else {
if (!$U207) {$x212 = $x200;if ($W207) { $x207 = $x200; }  }
else { $x212 = JS::$undefined; }
}
if (isset($x201->class) && $x201->class === 'Array' &&  is_int($_label) && $_label >= $x201->properties['length']) { $x201->properties['length'] = $_label + 1; }
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x199=&$scope->properties[\'arguments\'];$x199->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x199->properties[$i]=$args[$i];$x199->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'label\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_label=&$scope->properties[\'label\'];$Ulabel=FALSE;$global->scope[++$global->scope_sp]=$scope;$x200=microtime(TRUE);unset($x201,$W201,$S201,$U201);$x202=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),33,7,\'<image>/16_console.js\');$x201=&$x202[0];list(,$W201,$S201,$U201)=$x202;$x203=JS::toString($_label,$global);if($x201===JS::$undefined||$x201===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x204=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),33,22,\'<image>/16_console.js\');$_TypeError=&$x204[0];list(,$WTypeError,$STypeError,$UTypeError)=$x204;$x205=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',33,22);$x206=$x205($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x206->class)&&$x206->class===\'Error\'&&!isset($x206->properties[\'file\'])&&!isset($x206->properties[\'line\'])&&!isset($x206->properties[\'column\'])){$x206->properties[\'file\']=\'<image>/16_console.js\';$x206->properties[\'line\']=33;$x206->properties[\'column\']=22;$x206->attributes[\'file\']=$x206->attributes[\'line\']=$x206->attributes[\'column\']=0;}throw new JSException($x206,33,22,\'<image>/16_console.js\');}$x201=JS::toObject($x201,$global);unset($x207,$W207,$S207,$U207);$x211=_ef60fce145dac950f813cdc5f2be6b9c_8($global,$scope,$x201,JS::toString($x203,$global),33,22,\'<image>/16_console.js\');$x207=&$x211[0];list(,$W207,$S207,$U207)=$x211;if($U207&&(!isset($x201->extensible)||$x201->extensible)){$x201->properties[$x203]=$x207;$x207=&$x201->properties[$x203];$x201->attributes[$x203]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U207=FALSE;$W207=TRUE;}if(isset($S207)){$x213=$S207->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',33,22);$x214=$x213($global,$x201,$S207,array($x200),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x212=$x214;}else{if(!$U207){$x212=$x200;if($W207){$x207=$x200;}}else{$x212=JS::$undefined;}}if(isset($x201->class)&&$x201->class===\'Array\'&&is_int($_label)&&$_label>=$x201->properties[\'length\']){$x201->properties[\'length\']=$_label+1;}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x217 =& $scope->properties['arguments'];
$x217->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x217->properties[$i] = $args[$i];
$x217->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['label'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_label =& $scope->properties['label'];
$Ulabel = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['t'] = JS::$undefined; $_t =& $scope->properties['t'];
$Ut = FALSE;
$_t = microtime(TRUE);
unset($x219, $W219, $S219, $U219);
$x220 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $leThis, JS::toString('_times', $global), 39, 11, '<image>/16_console.js');
$x219 =& $x220[0]; list(,$W219,$S219,$U219) = $x220;
unset($x221, $W221, $S221, $U221);
$x222 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x219, JS::toString($_label, $global), 39, 18, '<image>/16_console.js');
$x221 =& $x222[0]; list(,$W221,$S221,$U221) = $x222;
$x218 = (((gettype($x221) === gettype(JS::$undefined) && $x221 === JS::$undefined))|| (((is_float($x221) || is_int($x221)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x221 == JS::$undefined));
if (JS::toBoolean($x218, $global)) {
unset($_Error, $WError, $SError, $UError);
$x225 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Error', $global), 40, 14, '<image>/16_console.js');
$_Error =& $x225[0]; list(,$WError,$SError,$UError) = $x225;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x226 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 40, 14, '<image>/16_console.js');
$_ReferenceError =& $x226[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x226;
$x227 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 14);
$x228 = $x227($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x228->class) && $x228->class === 'Error' && !isset($x228->properties['file']) && !isset($x228->properties['line']) && !isset($x228->properties['column'])) {$x228->properties['file'] = '<image>/16_console.js';$x228->properties['line'] = 40;$x228->properties['column'] = 14;$x228->attributes['file'] = $x228->attributes['line'] = $x228->attributes['column'] = 0; }
throw new JSException($x228, 40, 14, '<image>/16_console.js');
}
$x231 = JS::toPrimitive('Label ', $global);
$x232 = JS::toPrimitive($_label, $global);
$x229 = JS::toPrimitive((is_string($x231) || is_string($x232) ? JS::toString($x231, $global) . JS::toString($x232, $global) : JS::toNumber($x231, $global) + JS::toNumber($x232, $global)), $global);
$x230 = JS::toPrimitive(' not defined.', $global);
$x223 = clone JS::$objectTemplate;
unset($x233, $W233, $S233, $U233);
$x234 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_Error, JS::toString('prototype', $global), 40, 10, '<image>/16_console.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
$x224 = $x233;
$x223->prototype = $x224;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x237 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 40, 10, '<image>/16_console.js');
$_TypeError =& $x237[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x237;
$x238 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 10);
$x239 = $x238($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x239->class) && $x239->class === 'Error' && !isset($x239->properties['file']) && !isset($x239->properties['line']) && !isset($x239->properties['column'])) {$x239->properties['file'] = '<image>/16_console.js';$x239->properties['line'] = 40;$x239->properties['column'] = 10;$x239->attributes['file'] = $x239->attributes['line'] = $x239->attributes['column'] = 0; }
throw new JSException($x239, 40, 10, '<image>/16_console.js');
}
$x235 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 10);
$x236 = $x235($global, $x223, $_Error, array((is_string($x229) || is_string($x230) ? JS::toString($x229, $global) . JS::toString($x230, $global) : JS::toNumber($x229, $global) + JS::toNumber($x230, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x224 = $x236;
if (is_object($x224) && $x224 !== JS::$undefined) { $x223 = $x224; }
if (isset($x223->class) && $x223->class === 'Error' && !isset($x223->properties['file']) && !isset($x223->properties['line']) && !isset($x223->properties['column'])) {$x223->properties['file'] = '<image>/16_console.js';$x223->properties['line'] = 40;$x223->properties['column'] = 4;$x223->attributes['file'] = $x223->attributes['line'] = $x223->attributes['column'] = 0; }
throw new JSException($x223, 40, 4, '<image>/16_console.js');;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x241 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 11, '<image>/16_console.js');
$_TypeError =& $x241[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x241;
$x242 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x243 = $x242($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x243->class) && $x243->class === 'Error' && !isset($x243->properties['file']) && !isset($x243->properties['line']) && !isset($x243->properties['column'])) {$x243->properties['file'] = '<image>/16_console.js';$x243->properties['line'] = 43;$x243->properties['column'] = 11;$x243->attributes['file'] = $x243->attributes['line'] = $x243->attributes['column'] = 0; }
throw new JSException($x243, 43, 11, '<image>/16_console.js');
}
$x240 = JS::toObject($leThis, $global);
unset($x244, $W244, $S244, $U244);
$x245 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x240, JS::toString('log', $global), 43, 11, '<image>/16_console.js');
$x244 =& $x245[0]; list(,$W244,$S244,$U244) = $x245;
unset($x246, $W246, $S246, $U246);
$x247 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $leThis, JS::toString('_times', $global), 43, 37, '<image>/16_console.js');
$x246 =& $x247[0]; list(,$W246,$S246,$U246) = $x247;
unset($x248, $W248, $S248, $U248);
$x249 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x246, JS::toString($_label, $global), 43, 44, '<image>/16_console.js');
$x248 =& $x249[0]; list(,$W248,$S248,$U248) = $x249;
if (!(is_object($x244) && isset($x244->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x252 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 11, '<image>/16_console.js');
$_TypeError =& $x252[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x252;
$x253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x254 = $x253($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x254->class) && $x254->class === 'Error' && !isset($x254->properties['file']) && !isset($x254->properties['line']) && !isset($x254->properties['column'])) {$x254->properties['file'] = '<image>/16_console.js';$x254->properties['line'] = 43;$x254->properties['column'] = 11;$x254->attributes['file'] = $x254->attributes['line'] = $x254->attributes['column'] = 0; }
throw new JSException($x254, 43, 11, '<image>/16_console.js');
}
$x250 = $x244->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x251 = $x250($global, $x240, $x244, array('%s: %f', $_label, (JS::toNumber($_t, $global) - JS::toNumber($x248, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x256, $W256, $S256, $U256);
$x257 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $leThis, JS::toString('_times', $global), 44, 14, '<image>/16_console.js');
$x256 =& $x257[0]; list(,$W256,$S256,$U256) = $x257;
if (!array_key_exists($_label, $x256->attributes)) { unset($x256->properties[$_label]); $x255 = TRUE; }
else if ($x256->attributes[$_label] & JS::CONFIGURABLE) { unset($x256->properties[$_label], $x256->attributes[$_label], $x256->getters[$_label], $x256->setters[$_label]); $x255 = TRUE; }
else { $x255 = FALSE; };
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x217=&$scope->properties[\'arguments\'];$x217->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x217->properties[$i]=$args[$i];$x217->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'label\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_label=&$scope->properties[\'label\'];$Ulabel=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'t\']=JS::$undefined;$_t=&$scope->properties[\'t\'];$Ut=FALSE;$_t=microtime(TRUE);unset($x219,$W219,$S219,$U219);$x220=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),39,11,\'<image>/16_console.js\');$x219=&$x220[0];list(,$W219,$S219,$U219)=$x220;unset($x221,$W221,$S221,$U221);$x222=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x219,JS::toString($_label,$global),39,18,\'<image>/16_console.js\');$x221=&$x222[0];list(,$W221,$S221,$U221)=$x222;$x218=(((gettype($x221)===gettype(JS::$undefined)&&$x221===JS::$undefined))||(((is_float($x221)||is_int($x221))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x221==JS::$undefined));if(JS::toBoolean($x218,$global)){unset($_Error,$WError,$SError,$UError);$x225=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Error\',$global),40,14,\'<image>/16_console.js\');$_Error=&$x225[0];list(,$WError,$SError,$UError)=$x225;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x226=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),40,14,\'<image>/16_console.js\');$_ReferenceError=&$x226[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x226;$x227=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,14);$x228=$x227($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x228->class)&&$x228->class===\'Error\'&&!isset($x228->properties[\'file\'])&&!isset($x228->properties[\'line\'])&&!isset($x228->properties[\'column\'])){$x228->properties[\'file\']=\'<image>/16_console.js\';$x228->properties[\'line\']=40;$x228->properties[\'column\']=14;$x228->attributes[\'file\']=$x228->attributes[\'line\']=$x228->attributes[\'column\']=0;}throw new JSException($x228,40,14,\'<image>/16_console.js\');}$x231=JS::toPrimitive(\'Label \',$global);$x232=JS::toPrimitive($_label,$global);$x229=JS::toPrimitive((is_string($x231)||is_string($x232)?JS::toString($x231,$global).JS::toString($x232,$global):JS::toNumber($x231,$global)+JS::toNumber($x232,$global)),$global);$x230=JS::toPrimitive(\' not defined.\',$global);$x223=clone JS::$objectTemplate;unset($x233,$W233,$S233,$U233);$x234=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_Error,JS::toString(\'prototype\',$global),40,10,\'<image>/16_console.js\');$x233=&$x234[0];list(,$W233,$S233,$U233)=$x234;$x224=$x233;$x223->prototype=$x224;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x237=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),40,10,\'<image>/16_console.js\');$_TypeError=&$x237[0];list(,$WTypeError,$STypeError,$UTypeError)=$x237;$x238=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,10);$x239=$x238($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x239->class)&&$x239->class===\'Error\'&&!isset($x239->properties[\'file\'])&&!isset($x239->properties[\'line\'])&&!isset($x239->properties[\'column\'])){$x239->properties[\'file\']=\'<image>/16_console.js\';$x239->properties[\'line\']=40;$x239->properties[\'column\']=10;$x239->attributes[\'file\']=$x239->attributes[\'line\']=$x239->attributes[\'column\']=0;}throw new JSException($x239,40,10,\'<image>/16_console.js\');}$x235=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,10);$x236=$x235($global,$x223,$_Error,array((is_string($x229)||is_string($x230)?JS::toString($x229,$global).JS::toString($x230,$global):JS::toNumber($x229,$global)+JS::toNumber($x230,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x224=$x236;if(is_object($x224)&&$x224!==JS::$undefined){$x223=$x224;}if(isset($x223->class)&&$x223->class===\'Error\'&&!isset($x223->properties[\'file\'])&&!isset($x223->properties[\'line\'])&&!isset($x223->properties[\'column\'])){$x223->properties[\'file\']=\'<image>/16_console.js\';$x223->properties[\'line\']=40;$x223->properties[\'column\']=4;$x223->attributes[\'file\']=$x223->attributes[\'line\']=$x223->attributes[\'column\']=0;}throw new JSException($x223,40,4,\'<image>/16_console.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x241=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,11,\'<image>/16_console.js\');$_TypeError=&$x241[0];list(,$WTypeError,$STypeError,$UTypeError)=$x241;$x242=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x243=$x242($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x243->class)&&$x243->class===\'Error\'&&!isset($x243->properties[\'file\'])&&!isset($x243->properties[\'line\'])&&!isset($x243->properties[\'column\'])){$x243->properties[\'file\']=\'<image>/16_console.js\';$x243->properties[\'line\']=43;$x243->properties[\'column\']=11;$x243->attributes[\'file\']=$x243->attributes[\'line\']=$x243->attributes[\'column\']=0;}throw new JSException($x243,43,11,\'<image>/16_console.js\');}$x240=JS::toObject($leThis,$global);unset($x244,$W244,$S244,$U244);$x245=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x240,JS::toString(\'log\',$global),43,11,\'<image>/16_console.js\');$x244=&$x245[0];list(,$W244,$S244,$U244)=$x245;unset($x246,$W246,$S246,$U246);$x247=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),43,37,\'<image>/16_console.js\');$x246=&$x247[0];list(,$W246,$S246,$U246)=$x247;unset($x248,$W248,$S248,$U248);$x249=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x246,JS::toString($_label,$global),43,44,\'<image>/16_console.js\');$x248=&$x249[0];list(,$W248,$S248,$U248)=$x249;if(!(is_object($x244)&&isset($x244->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x252=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,11,\'<image>/16_console.js\');$_TypeError=&$x252[0];list(,$WTypeError,$STypeError,$UTypeError)=$x252;$x253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x254=$x253($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x254->class)&&$x254->class===\'Error\'&&!isset($x254->properties[\'file\'])&&!isset($x254->properties[\'line\'])&&!isset($x254->properties[\'column\'])){$x254->properties[\'file\']=\'<image>/16_console.js\';$x254->properties[\'line\']=43;$x254->properties[\'column\']=11;$x254->attributes[\'file\']=$x254->attributes[\'line\']=$x254->attributes[\'column\']=0;}throw new JSException($x254,43,11,\'<image>/16_console.js\');}$x250=$x244->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x251=$x250($global,$x240,$x244,array(\'%s: %f\',$_label,(JS::toNumber($_t,$global)-JS::toNumber($x248,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x256,$W256,$S256,$U256);$x257=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),44,14,\'<image>/16_console.js\');$x256=&$x257[0];list(,$W256,$S256,$U256)=$x257;if(!array_key_exists($_label,$x256->attributes)){unset($x256->properties[$_label]);$x255=TRUE;}else if($x256->attributes[$_label]&JS::CONFIGURABLE){unset($x256->properties[$_label],$x256->attributes[$_label],$x256->getters[$_label],$x256->setters[$_label]);$x255=TRUE;}else{$x255=FALSE;}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x262 =& $scope->properties['arguments'];
$x262->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x262->properties[$i] = $args[$i];
$x262->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x263 = $_indent;
if (!JS::toBoolean($x263, $global)) {
$x263 = ''; }
if ($Uindent) {$global->properties['indent'] = $_indent; $_indent =& $global->properties['indent']; }
$_indent = $x263;
$x264 = (((gettype($_v) === gettype(JS::$undefined) && $_v === JS::$undefined))|| (((is_float($_v) || is_int($_v)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_v == JS::$undefined));
if (JS::toBoolean($x264, $global)) {
$x265 = clone JS::$objectTemplate;
$x265->properties['multiline'] = false;
$x265->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x265->properties['dump'] = 'undefined';
$x265->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x265;;
}
else {
$x267 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x266 = $x267;
if (!JS::toBoolean($x266, $global)) {
$x269 = $_v;
$x269 = ($x269 === JS::$undefined ? 'undefined' : (is_int($x269) || is_float($x269) ? 'number' : (is_bool($x269) ? 'boolean' : (is_string($x269) ? 'string' : (is_object($x269) && isset($x269->call) ? 'function' : 'object')))));
$x268 = (((gettype($x269) === gettype('boolean') && $x269 === 'boolean'))|| (((is_float($x269) || is_int($x269)) && (is_float('boolean') || is_int('boolean'))) && $x269 == 'boolean'));
$x266 = $x268; }
if (JS::toBoolean($x266, $global)) {
$x270 = clone JS::$objectTemplate;
$x270->properties['multiline'] = false;
$x270->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x270->properties['dump'] = json_encode($_v);
$x270->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x270;;
}
else {
$x272 = $_v;
$x272 = ($x272 === JS::$undefined ? 'undefined' : (is_int($x272) || is_float($x272) ? 'number' : (is_bool($x272) ? 'boolean' : (is_string($x272) ? 'string' : (is_object($x272) && isset($x272->call) ? 'function' : 'object')))));
$x271 = (((gettype($x272) === gettype('number') && $x272 === 'number'))|| (((is_float($x272) || is_int($x272)) && (is_float('number') || is_int('number'))) && $x272 == 'number'));
if (JS::toBoolean($x271, $global)) {
$x273 = clone JS::$objectTemplate;
$x273->properties['multiline'] = false;
$x273->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x275 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 57, 48, '<image>/16_console.js');
$_TypeError =& $x275[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x275;
$x276 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x277 = $x276($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x277->class) && $x277->class === 'Error' && !isset($x277->properties['file']) && !isset($x277->properties['line']) && !isset($x277->properties['column'])) {$x277->properties['file'] = '<image>/16_console.js';$x277->properties['line'] = 57;$x277->properties['column'] = 48;$x277->attributes['file'] = $x277->attributes['line'] = $x277->attributes['column'] = 0; }
throw new JSException($x277, 57, 48, '<image>/16_console.js');
}
$x274 = JS::toObject($_v, $global);
unset($x278, $W278, $S278, $U278);
$x279 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x274, JS::toString('toString', $global), 57, 48, '<image>/16_console.js');
$x278 =& $x279[0]; list(,$W278,$S278,$U278) = $x279;
if (!(is_object($x278) && isset($x278->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x282 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 57, 48, '<image>/16_console.js');
$_TypeError =& $x282[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x282;
$x283 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x284 = $x283($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x284->class) && $x284->class === 'Error' && !isset($x284->properties['file']) && !isset($x284->properties['line']) && !isset($x284->properties['column'])) {$x284->properties['file'] = '<image>/16_console.js';$x284->properties['line'] = 57;$x284->properties['column'] = 48;$x284->attributes['file'] = $x284->attributes['line'] = $x284->attributes['column'] = 0; }
throw new JSException($x284, 57, 48, '<image>/16_console.js');
}
$x280 = $x278->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x281 = $x280($global, $x274, $x278, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x273->properties['dump'] = $x281;
$x273->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x273;;
}
else {
$x286 = $_v;
$x286 = ($x286 === JS::$undefined ? 'undefined' : (is_int($x286) || is_float($x286) ? 'number' : (is_bool($x286) ? 'boolean' : (is_string($x286) ? 'string' : (is_object($x286) && isset($x286->call) ? 'function' : 'object')))));
$x285 = (((gettype($x286) === gettype('string') && $x286 === 'string'))|| (((is_float($x286) || is_int($x286)) && (is_float('string') || is_int('string'))) && $x286 == 'string'));
if (JS::toBoolean($x285, $global)) {
$x287 = clone JS::$objectTemplate;
$x287->properties['multiline'] = false;
$x287->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x287->properties['dump'] = str_replace("\\/", "/", json_encode($_v));
$x287->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x287;;
}
else {

if (JS::toBoolean(isset($_v->class) &&$_v->class === 'Date', $global)) {
$x288 = clone JS::$objectTemplate;
$x288->properties['multiline'] = false;
$x288->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x294 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 63, 59, '<image>/16_console.js');
$_TypeError =& $x294[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x294;
$x295 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 63, 59);
$x296 = $x295($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x296->class) && $x296->class === 'Error' && !isset($x296->properties['file']) && !isset($x296->properties['line']) && !isset($x296->properties['column'])) {$x296->properties['file'] = '<image>/16_console.js';$x296->properties['line'] = 63;$x296->properties['column'] = 59;$x296->attributes['file'] = $x296->attributes['line'] = $x296->attributes['column'] = 0; }
throw new JSException($x296, 63, 59, '<image>/16_console.js');
}
$x293 = JS::toObject($_v, $global);
unset($x297, $W297, $S297, $U297);
$x298 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x293, JS::toString('toString', $global), 63, 59, '<image>/16_console.js');
$x297 =& $x298[0]; list(,$W297,$S297,$U297) = $x298;
if (!(is_object($x297) && isset($x297->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x301 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 63, 59, '<image>/16_console.js');
$_TypeError =& $x301[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x301;
$x302 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 63, 59);
$x303 = $x302($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x303->class) && $x303->class === 'Error' && !isset($x303->properties['file']) && !isset($x303->properties['line']) && !isset($x303->properties['column'])) {$x303->properties['file'] = '<image>/16_console.js';$x303->properties['line'] = 63;$x303->properties['column'] = 59;$x303->attributes['file'] = $x303->attributes['line'] = $x303->attributes['column'] = 0; }
throw new JSException($x303, 63, 59, '<image>/16_console.js');
}
$x299 = $x297->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 63, 59);
$x300 = $x299($global, $x293, $x297, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x291 = JS::toPrimitive('[date ', $global);
$x292 = JS::toPrimitive($x300, $global);
$x289 = JS::toPrimitive((is_string($x291) || is_string($x292) ? JS::toString($x291, $global) . JS::toString($x292, $global) : JS::toNumber($x291, $global) + JS::toNumber($x292, $global)), $global);
$x290 = JS::toPrimitive(']', $global);
$x288->properties['dump'] = (is_string($x289) || is_string($x290) ? JS::toString($x289, $global) . JS::toString($x290, $global) : JS::toNumber($x289, $global) + JS::toNumber($x290, $global));
$x288->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x288;;
}
else {

if (JS::toBoolean(isset($_v->call), $global)) {
$x304 = clone JS::$objectTemplate;
$scope->properties['o'] = JS::$undefined; $_o =& $scope->properties['o'];
$Uo = FALSE;
$_o = $x304;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x306 = array(), $x305 = JS::toObject($_v, $global); $x305; $x305 = $x305->prototype) {
foreach ($x305->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x306[$property])) { continue; }
$x306[$property] = TRUE;
$_k = $property;

unset($x307, $W307, $S307, $U307);
$x308 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString($_k, $global), 69, 14, '<image>/16_console.js');
$x307 =& $x308[0]; list(,$W307,$S307,$U307) = $x308;
$x309 = JS::toString($_k, $global);
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x310 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 69, 11, '<image>/16_console.js');
$_TypeError =& $x310[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x310;
$x311 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 11);
$x312 = $x311($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x312->class) && $x312->class === 'Error' && !isset($x312->properties['file']) && !isset($x312->properties['line']) && !isset($x312->properties['column'])) {$x312->properties['file'] = '<image>/16_console.js';$x312->properties['line'] = 69;$x312->properties['column'] = 11;$x312->attributes['file'] = $x312->attributes['line'] = $x312->attributes['column'] = 0; }
throw new JSException($x312, 69, 11, '<image>/16_console.js');
}
$_o = JS::toObject($_o, $global);
unset($x313, $W313, $S313, $U313);
$x314 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_o, JS::toString($x309, $global), 69, 11, '<image>/16_console.js');
$x313 =& $x314[0]; list(,$W313,$S313,$U313) = $x314;
if ($U313 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties[$x309] = $x313; $x313 =& $_o->properties[$x309]; $_o->attributes[$x309] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U313 = FALSE; $W313 = TRUE; }
if (isset($S313)) {
$x316 = $S313->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 11);
$x317 = $x316($global, $_o, $S313, array($x307), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x315 = $x317;
} else {
if (!$U313) {$x315 = $x307;if ($W313) { $x313 = $x307; }  }
else { $x315 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array' &&  is_int($_k) && $_k >= $_o->properties['length']) { $_o->properties['length'] = $_k + 1; };
}
}
};
unset($_Object, $WObject, $SObject, $UObject);
$x321 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Object', $global), 72, 9, '<image>/16_console.js');
$_Object =& $x321[0]; list(,$WObject,$SObject,$UObject) = $x321;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x322 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 9, '<image>/16_console.js');
$_ReferenceError =& $x322[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x322;
$x323 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 9);
$x324 = $x323($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x324->class) && $x324->class === 'Error' && !isset($x324->properties['file']) && !isset($x324->properties['line']) && !isset($x324->properties['column'])) {$x324->properties['file'] = '<image>/16_console.js';$x324->properties['line'] = 72;$x324->properties['column'] = 9;$x324->attributes['file'] = $x324->attributes['line'] = $x324->attributes['column'] = 0; }
throw new JSException($x324, 72, 9, '<image>/16_console.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x326 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 35, '<image>/16_console.js');
$_TypeError =& $x326[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x326;
$x327 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 35);
$x328 = $x327($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x328->class) && $x328->class === 'Error' && !isset($x328->properties['file']) && !isset($x328->properties['line']) && !isset($x328->properties['column'])) {$x328->properties['file'] = '<image>/16_console.js';$x328->properties['line'] = 72;$x328->properties['column'] = 35;$x328->attributes['file'] = $x328->attributes['line'] = $x328->attributes['column'] = 0; }
throw new JSException($x328, 72, 35, '<image>/16_console.js');
}
$x325 = JS::toObject($_Object, $global);
unset($x329, $W329, $S329, $U329);
$x330 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x325, JS::toString('getOwnPropertyNames', $global), 72, 35, '<image>/16_console.js');
$x329 =& $x330[0]; list(,$W329,$S329,$U329) = $x330;
if (!(is_object($x329) && isset($x329->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x333 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 35, '<image>/16_console.js');
$_TypeError =& $x333[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x333;
$x334 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 35);
$x335 = $x334($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x335->class) && $x335->class === 'Error' && !isset($x335->properties['file']) && !isset($x335->properties['line']) && !isset($x335->properties['column'])) {$x335->properties['file'] = '<image>/16_console.js';$x335->properties['line'] = 72;$x335->properties['column'] = 35;$x335->attributes['file'] = $x335->attributes['line'] = $x335->attributes['column'] = 0; }
throw new JSException($x335, 72, 35, '<image>/16_console.js');
}
$x331 = $x329->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 35);
$x332 = $x331($global, $x325, $x329, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x336, $W336, $S336, $U336);
$x337 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x332, JS::toString('length', $global), 72, 38, '<image>/16_console.js');
$x336 =& $x337[0]; list(,$W336,$S336,$U336) = $x337;
$x318 = JS::toPrimitive($x336, $global);
$x319 = JS::toPrimitive(0, $global);
$x320 = (is_string($x319) && is_string($x318) ? strcmp($x319, $x318) < 0 : (!is_nan($x338 = JS::toNumber($x319, $global)) && !is_nan($x339 = JS::toNumber($x318, $global)) && $x338 < $x339));
if (JS::toBoolean($x320, $global)) {
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x342 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 73, 16, '<image>/16_console.js');
$_TypeError =& $x342[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x342;
$x343 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 73, 16);
$x344 = $x343($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x344->class) && $x344->class === 'Error' && !isset($x344->properties['file']) && !isset($x344->properties['line']) && !isset($x344->properties['column'])) {$x344->properties['file'] = '<image>/16_console.js';$x344->properties['line'] = 73;$x344->properties['column'] = 16;$x344->attributes['file'] = $x344->attributes['line'] = $x344->attributes['column'] = 0; }
throw new JSException($x344, 73, 16, '<image>/16_console.js');
}
$x340 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 73, 16);
$x341 = $x340($global, $global, $_dumper, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x341;
unset($x347, $W347, $S347, $U347);
$x348 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_o, JS::toString('dump', $global), 74, 22, '<image>/16_console.js');
$x347 =& $x348[0]; list(,$W347,$S347,$U347) = $x348;
$x345 = JS::toPrimitive(' ', $global);
$x346 = JS::toPrimitive($x347, $global);
$x349 = (is_string($x345) || is_string($x346) ? JS::toString($x345, $global) . JS::toString($x346, $global) : JS::toNumber($x345, $global) + JS::toNumber($x346, $global));
$x350 = JS::toString('dump', $global);
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x351 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 74, 13, '<image>/16_console.js');
$_TypeError =& $x351[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x351;
$x352 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 74, 13);
$x353 = $x352($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x353->class) && $x353->class === 'Error' && !isset($x353->properties['file']) && !isset($x353->properties['line']) && !isset($x353->properties['column'])) {$x353->properties['file'] = '<image>/16_console.js';$x353->properties['line'] = 74;$x353->properties['column'] = 13;$x353->attributes['file'] = $x353->attributes['line'] = $x353->attributes['column'] = 0; }
throw new JSException($x353, 74, 13, '<image>/16_console.js');
}
$_o = JS::toObject($_o, $global);
unset($x354, $W354, $S354, $U354);
$x355 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_o, JS::toString($x350, $global), 74, 13, '<image>/16_console.js');
$x354 =& $x355[0]; list(,$W354,$S354,$U354) = $x355;
if ($U354 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties[$x350] = $x354; $x354 =& $_o->properties[$x350]; $_o->attributes[$x350] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U354 = FALSE; $W354 = TRUE; }
if (isset($S354)) {
$x357 = $S354->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 74, 13);
$x358 = $x357($global, $_o, $S354, array($x349), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x356 = $x358;
} else {
if (!$U354) {$x356 = $x349;if ($W354) { $x354 = $x349; }  }
else { $x356 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array' &&  is_int('dump') && 'dump' >= $_o->properties['length']) { $_o->properties['length'] = 'dump' + 1; };;
}
else {
$x359 = clone JS::$objectTemplate;
$x359->properties['multiline'] = false;
$x359->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x359->properties['dump'] = '';
$x359->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x359;;
};
$x360 = clone JS::$objectTemplate;
unset($x361, $W361, $S361, $U361);
$x362 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_o, JS::toString('multiline', $global), 80, 26, '<image>/16_console.js');
$x361 =& $x362[0]; list(,$W361,$S361,$U361) = $x362;
$x360->properties['multiline'] = $x361;
$x360->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x367 = JS::toPrimitive('[function', $global);
$x368 = JS::toPrimitive((isset($_v->name) ? " " .$_v->name : ""), $global);
unset($x369, $W369, $S369, $U369);
$x370 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_o, JS::toString('dump', $global), 84, 10, '<image>/16_console.js');
$x369 =& $x370[0]; list(,$W369,$S369,$U369) = $x370;
$x365 = JS::toPrimitive((is_string($x367) || is_string($x368) ? JS::toString($x367, $global) . JS::toString($x368, $global) : JS::toNumber($x367, $global) + JS::toNumber($x368, $global)), $global);
$x366 = JS::toPrimitive($x369, $global);
$x363 = JS::toPrimitive((is_string($x365) || is_string($x366) ? JS::toString($x365, $global) . JS::toString($x366, $global) : JS::toNumber($x365, $global) + JS::toNumber($x366, $global)), $global);
$x364 = JS::toPrimitive(']', $global);
$x360->properties['dump'] = (is_string($x363) || is_string($x364) ? JS::toString($x363, $global) . JS::toString($x364, $global) : JS::toNumber($x363, $global) + JS::toNumber($x364, $global));
$x360->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x360;;
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
for ($x371 = 0;; ++$x371) {
if ($x371 === 0) {
$x372 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x372;
}
if ($x371 !== 0) {
$x373 = ++$_i;
}
unset($x377, $W377, $S377, $U377);
$x378 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString('length', $global), 92, 23, '<image>/16_console.js');
$x377 =& $x378[0]; list(,$W377,$S377,$U377) = $x378;
$x374 = JS::toPrimitive($_i, $global);
$x375 = JS::toPrimitive($x377, $global);
$x376 = (is_string($x374) && is_string($x375) ? strcmp($x374, $x375) < 0 : (!is_nan($x379 = JS::toNumber($x374, $global)) && !is_nan($x380 = JS::toNumber($x375, $global)) && $x379 < $x380));
if (!JS::toBoolean($x376, $global)) { break; }

unset($x382, $W382, $S382, $U382);
$x383 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString($_i, $global), 93, 24, '<image>/16_console.js');
$x382 =& $x383[0]; list(,$W382,$S382,$U382) = $x383;
$x384 = JS::toPrimitive($_indent, $global);
$x385 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x388 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 93, 22, '<image>/16_console.js');
$_TypeError =& $x388[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x388;
$x389 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 93, 22);
$x390 = $x389($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x390->class) && $x390->class === 'Error' && !isset($x390->properties['file']) && !isset($x390->properties['line']) && !isset($x390->properties['column'])) {$x390->properties['file'] = '<image>/16_console.js';$x390->properties['line'] = 93;$x390->properties['column'] = 22;$x390->attributes['file'] = $x390->attributes['line'] = $x390->attributes['column'] = 0; }
throw new JSException($x390, 93, 22, '<image>/16_console.js');
}
$x386 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 93, 22);
$x387 = $x386($global, $global, $_dumper, array($x382, (is_string($x384) || is_string($x385) ? JS::toString($x384, $global) . JS::toString($x385, $global) : JS::toNumber($x384, $global) + JS::toNumber($x385, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x387;
unset($x391, $W391, $S391, $U391);
$x392 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('multiline', $global), 93, 44, '<image>/16_console.js');
$x391 =& $x392[0]; list(,$W391,$S391,$U391) = $x392;
$x381 = $x391;
if (!JS::toBoolean($x381, $global)) {
unset($x396, $W396, $S396, $U396);
$x397 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 93, 59, '<image>/16_console.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
unset($x398, $W398, $S398, $U398);
$x399 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x396, JS::toString('length', $global), 93, 64, '<image>/16_console.js');
$x398 =& $x399[0]; list(,$W398,$S398,$U398) = $x399;
$x393 = JS::toPrimitive($x398, $global);
$x394 = JS::toPrimitive(40, $global);
$x395 = (is_string($x394) && is_string($x393) ? strcmp($x394, $x393) < 0 : (!is_nan($x400 = JS::toNumber($x394, $global)) && !is_nan($x401 = JS::toNumber($x393, $global)) && $x400 < $x401));
$x381 = $x395; }
if (JS::toBoolean($x381, $global)) {
$x402 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x402;;
};
unset($x403, $W403, $S403, $U403);
$x404 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 97, 12, '<image>/16_console.js');
$x403 =& $x404[0]; list(,$W403,$S403,$U403) = $x404;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x403;
$values[] =$_d;;
};
};
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x406 = array(), $x405 = JS::toObject($_v, $global); $x405; $x405 = $x405->prototype) {
foreach ($x405->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x406[$property])) { continue; }
$x406[$property] = TRUE;
$_k = $property;

$x407 = $_isArray;
if (JS::toBoolean($x407, $global)) {
unset($_String, $WString, $SString, $UString);
$x409 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('String', $global), 105, 21, '<image>/16_console.js');
$_String =& $x409[0]; list(,$WString,$SString,$UString) = $x409;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x410 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 105, 21, '<image>/16_console.js');
$_ReferenceError =& $x410[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x410;
$x411 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 21);
$x412 = $x411($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x412->class) && $x412->class === 'Error' && !isset($x412->properties['file']) && !isset($x412->properties['line']) && !isset($x412->properties['column'])) {$x412->properties['file'] = '<image>/16_console.js';$x412->properties['line'] = 105;$x412->properties['column'] = 21;$x412->attributes['file'] = $x412->attributes['line'] = $x412->attributes['column'] = 0; }
throw new JSException($x412, 105, 21, '<image>/16_console.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x413 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Number', $global), 105, 28, '<image>/16_console.js');
$_Number =& $x413[0]; list(,$WNumber,$SNumber,$UNumber) = $x413;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x414 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 105, 28, '<image>/16_console.js');
$_ReferenceError =& $x414[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x414;
$x415 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 28);
$x416 = $x415($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x416->class) && $x416->class === 'Error' && !isset($x416->properties['file']) && !isset($x416->properties['line']) && !isset($x416->properties['column'])) {$x416->properties['file'] = '<image>/16_console.js';$x416->properties['line'] = 105;$x416->properties['column'] = 28;$x416->attributes['file'] = $x416->attributes['line'] = $x416->attributes['column'] = 0; }
throw new JSException($x416, 105, 28, '<image>/16_console.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x419 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 34, '<image>/16_console.js');
$_TypeError =& $x419[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x419;
$x420 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 34);
$x421 = $x420($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x421->class) && $x421->class === 'Error' && !isset($x421->properties['file']) && !isset($x421->properties['line']) && !isset($x421->properties['column'])) {$x421->properties['file'] = '<image>/16_console.js';$x421->properties['line'] = 105;$x421->properties['column'] = 34;$x421->attributes['file'] = $x421->attributes['line'] = $x421->attributes['column'] = 0; }
throw new JSException($x421, 105, 34, '<image>/16_console.js');
}
$x417 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 34);
$x418 = $x417($global, $global, $_Number, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x424 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 27, '<image>/16_console.js');
$_TypeError =& $x424[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x424;
$x425 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 27);
$x426 = $x425($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x426->class) && $x426->class === 'Error' && !isset($x426->properties['file']) && !isset($x426->properties['line']) && !isset($x426->properties['column'])) {$x426->properties['file'] = '<image>/16_console.js';$x426->properties['line'] = 105;$x426->properties['column'] = 27;$x426->attributes['file'] = $x426->attributes['line'] = $x426->attributes['column'] = 0; }
throw new JSException($x426, 105, 27, '<image>/16_console.js');
}
$x422 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 27);
$x423 = $x422($global, $global, $_String, array($x418), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x429 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 49, '<image>/16_console.js');
$_TypeError =& $x429[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x429;
$x430 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 49);
$x431 = $x430($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x431->class) && $x431->class === 'Error' && !isset($x431->properties['file']) && !isset($x431->properties['line']) && !isset($x431->properties['column'])) {$x431->properties['file'] = '<image>/16_console.js';$x431->properties['line'] = 105;$x431->properties['column'] = 49;$x431->attributes['file'] = $x431->attributes['line'] = $x431->attributes['column'] = 0; }
throw new JSException($x431, 105, 49, '<image>/16_console.js');
}
$x427 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 49);
$x428 = $x427($global, $global, $_String, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x408 = (((gettype($x423) === gettype($x428) && $x423 === $x428))|| (((is_float($x423) || is_int($x423)) && (is_float($x428) || is_int($x428))) && $x423 == $x428));
$x407 = $x408; }
if (JS::toBoolean($x407, $global)) {
continue;;
};
unset($x433, $W433, $S433, $U433);
$x434 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString($_k, $global), 107, 23, '<image>/16_console.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
$x435 = JS::toPrimitive($_indent, $global);
$x436 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x439 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 107, 21, '<image>/16_console.js');
$_TypeError =& $x439[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x439;
$x440 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 107, 21);
$x441 = $x440($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x441->class) && $x441->class === 'Error' && !isset($x441->properties['file']) && !isset($x441->properties['line']) && !isset($x441->properties['column'])) {$x441->properties['file'] = '<image>/16_console.js';$x441->properties['line'] = 107;$x441->properties['column'] = 21;$x441->attributes['file'] = $x441->attributes['line'] = $x441->attributes['column'] = 0; }
throw new JSException($x441, 107, 21, '<image>/16_console.js');
}
$x437 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 107, 21);
$x438 = $x437($global, $global, $_dumper, array($x433, (is_string($x435) || is_string($x436) ? JS::toString($x435, $global) . JS::toString($x436, $global) : JS::toNumber($x435, $global) + JS::toNumber($x436, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x438;
unset($x442, $W442, $S442, $U442);
$x443 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('multiline', $global), 107, 43, '<image>/16_console.js');
$x442 =& $x443[0]; list(,$W442,$S442,$U442) = $x443;
$x432 = $x442;
if (!JS::toBoolean($x432, $global)) {
unset($x447, $W447, $S447, $U447);
$x448 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 107, 58, '<image>/16_console.js');
$x447 =& $x448[0]; list(,$W447,$S447,$U447) = $x448;
unset($x449, $W449, $S449, $U449);
$x450 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x447, JS::toString('length', $global), 107, 63, '<image>/16_console.js');
$x449 =& $x450[0]; list(,$W449,$S449,$U449) = $x450;
$x444 = JS::toPrimitive($x449, $global);
$x445 = JS::toPrimitive(40, $global);
$x446 = (is_string($x445) && is_string($x444) ? strcmp($x445, $x444) < 0 : (!is_nan($x451 = JS::toNumber($x445, $global)) && !is_nan($x452 = JS::toNumber($x444, $global)) && $x451 < $x452));
$x432 = $x446; }
if (JS::toBoolean($x432, $global)) {
$x453 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x453;;
};
unset($x454, $W454, $S454, $U454);
$x455 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 111, 11, '<image>/16_console.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x454;
$values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)
							?$_k: str_replace("\\/", "/", json_encode($_k))) . ": " .$_d;;
}
}
};
if (JS::toBoolean(empty($values), $global)) {
$x456 = clone JS::$objectTemplate;
$x456->properties['multiline'] = false;
$x456->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x457 = '[]';
} else {
$x457 = '{}';
}
$x456->properties['dump'] = $x457;
$x456->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x456;;
};
if (JS::toBoolean(count($values) > 5, $global)) {
$x458 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x458;;
};
$x459 = clone JS::$objectTemplate;
$x459->properties['multiline'] = $_multiline;
$x459->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x464 = '[ ';
} else {
$x464 = '{ ';
}
$x462 = JS::toPrimitive($x464, $global);
$x463 = JS::toPrimitive(implode(!$_multiline? ", " : ",\n" .$_indent. "  ", $values), $global);
if (JS::toBoolean($_isArray, $global)) {
$x465 = ' ]';
} else {
$x465 = ' }';
}
$x460 = JS::toPrimitive((is_string($x462) || is_string($x463) ? JS::toString($x462, $global) . JS::toString($x463, $global) : JS::toNumber($x462, $global) + JS::toNumber($x463, $global)), $global);
$x461 = JS::toPrimitive($x465, $global);
$x459->properties['dump'] = (is_string($x460) || is_string($x461) ? JS::toString($x460, $global) . JS::toString($x461, $global) : JS::toNumber($x460, $global) + JS::toNumber($x461, $global));
$x459->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x459;;
};
};
};
};
};
};
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x262=&$scope->properties[\'arguments\'];$x262->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x262->properties[$i]=$args[$i];$x262->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$scope->properties[\'indent\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_indent=&$scope->properties[\'indent\'];$Uindent=FALSE;$scope->properties[\'dumper\']=$fn;$_dumper=&$scope->properties[\'dumper\'];$global->scope[++$global->scope_sp]=$scope;$x263=$_indent;if(!JS::toBoolean($x263,$global)){$x263=\'\';}if($Uindent){$global->properties[\'indent\']=$_indent;$_indent=&$global->properties[\'indent\'];}$_indent=$x263;$x264=(((gettype($_v)===gettype(JS::$undefined)&&$_v===JS::$undefined))||(((is_float($_v)||is_int($_v))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_v==JS::$undefined));if(JS::toBoolean($x264,$global)){$x265=clone JS::$objectTemplate;$x265->properties[\'multiline\']=false;$x265->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x265->properties[\'dump\']=\'undefined\';$x265->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x265;}else{$x267=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x266=$x267;if(!JS::toBoolean($x266,$global)){$x269=$_v;$x269=($x269===JS::$undefined?\'undefined\':(is_int($x269)||is_float($x269)?\'number\':(is_bool($x269)?\'boolean\':(is_string($x269)?\'string\':(is_object($x269)&&isset($x269->call)?\'function\':\'object\')))));$x268=(((gettype($x269)===gettype(\'boolean\')&&$x269===\'boolean\'))||(((is_float($x269)||is_int($x269))&&(is_float(\'boolean\')||is_int(\'boolean\')))&&$x269==\'boolean\'));$x266=$x268;}if(JS::toBoolean($x266,$global)){$x270=clone JS::$objectTemplate;$x270->properties[\'multiline\']=false;$x270->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x270->properties[\'dump\']=json_encode($_v);$x270->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x270;}else{$x272=$_v;$x272=($x272===JS::$undefined?\'undefined\':(is_int($x272)||is_float($x272)?\'number\':(is_bool($x272)?\'boolean\':(is_string($x272)?\'string\':(is_object($x272)&&isset($x272->call)?\'function\':\'object\')))));$x271=(((gettype($x272)===gettype(\'number\')&&$x272===\'number\'))||(((is_float($x272)||is_int($x272))&&(is_float(\'number\')||is_int(\'number\')))&&$x272==\'number\'));if(JS::toBoolean($x271,$global)){$x273=clone JS::$objectTemplate;$x273->properties[\'multiline\']=false;$x273->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x275=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),57,48,\'<image>/16_console.js\');$_TypeError=&$x275[0];list(,$WTypeError,$STypeError,$UTypeError)=$x275;$x276=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x277=$x276($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x277->class)&&$x277->class===\'Error\'&&!isset($x277->properties[\'file\'])&&!isset($x277->properties[\'line\'])&&!isset($x277->properties[\'column\'])){$x277->properties[\'file\']=\'<image>/16_console.js\';$x277->properties[\'line\']=57;$x277->properties[\'column\']=48;$x277->attributes[\'file\']=$x277->attributes[\'line\']=$x277->attributes[\'column\']=0;}throw new JSException($x277,57,48,\'<image>/16_console.js\');}$x274=JS::toObject($_v,$global);unset($x278,$W278,$S278,$U278);$x279=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x274,JS::toString(\'toString\',$global),57,48,\'<image>/16_console.js\');$x278=&$x279[0];list(,$W278,$S278,$U278)=$x279;if(!(is_object($x278)&&isset($x278->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x282=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),57,48,\'<image>/16_console.js\');$_TypeError=&$x282[0];list(,$WTypeError,$STypeError,$UTypeError)=$x282;$x283=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x284=$x283($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x284->class)&&$x284->class===\'Error\'&&!isset($x284->properties[\'file\'])&&!isset($x284->properties[\'line\'])&&!isset($x284->properties[\'column\'])){$x284->properties[\'file\']=\'<image>/16_console.js\';$x284->properties[\'line\']=57;$x284->properties[\'column\']=48;$x284->attributes[\'file\']=$x284->attributes[\'line\']=$x284->attributes[\'column\']=0;}throw new JSException($x284,57,48,\'<image>/16_console.js\');}$x280=$x278->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x281=$x280($global,$x274,$x278,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x273->properties[\'dump\']=$x281;$x273->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x273;}else{$x286=$_v;$x286=($x286===JS::$undefined?\'undefined\':(is_int($x286)||is_float($x286)?\'number\':(is_bool($x286)?\'boolean\':(is_string($x286)?\'string\':(is_object($x286)&&isset($x286->call)?\'function\':\'object\')))));$x285=(((gettype($x286)===gettype(\'string\')&&$x286===\'string\'))||(((is_float($x286)||is_int($x286))&&(is_float(\'string\')||is_int(\'string\')))&&$x286==\'string\'));if(JS::toBoolean($x285,$global)){$x287=clone JS::$objectTemplate;$x287->properties[\'multiline\']=false;$x287->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x287->properties[\'dump\']=str_replace("\\\\/","/",json_encode($_v));$x287->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x287;}else{if(JS::toBoolean(isset($_v->class)&&$_v->class===\'Date\',$global)){$x288=clone JS::$objectTemplate;$x288->properties[\'multiline\']=false;$x288->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x294=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),63,59,\'<image>/16_console.js\');$_TypeError=&$x294[0];list(,$WTypeError,$STypeError,$UTypeError)=$x294;$x295=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',63,59);$x296=$x295($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x296->class)&&$x296->class===\'Error\'&&!isset($x296->properties[\'file\'])&&!isset($x296->properties[\'line\'])&&!isset($x296->properties[\'column\'])){$x296->properties[\'file\']=\'<image>/16_console.js\';$x296->properties[\'line\']=63;$x296->properties[\'column\']=59;$x296->attributes[\'file\']=$x296->attributes[\'line\']=$x296->attributes[\'column\']=0;}throw new JSException($x296,63,59,\'<image>/16_console.js\');}$x293=JS::toObject($_v,$global);unset($x297,$W297,$S297,$U297);$x298=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x293,JS::toString(\'toString\',$global),63,59,\'<image>/16_console.js\');$x297=&$x298[0];list(,$W297,$S297,$U297)=$x298;if(!(is_object($x297)&&isset($x297->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x301=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),63,59,\'<image>/16_console.js\');$_TypeError=&$x301[0];list(,$WTypeError,$STypeError,$UTypeError)=$x301;$x302=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',63,59);$x303=$x302($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x303->class)&&$x303->class===\'Error\'&&!isset($x303->properties[\'file\'])&&!isset($x303->properties[\'line\'])&&!isset($x303->properties[\'column\'])){$x303->properties[\'file\']=\'<image>/16_console.js\';$x303->properties[\'line\']=63;$x303->properties[\'column\']=59;$x303->attributes[\'file\']=$x303->attributes[\'line\']=$x303->attributes[\'column\']=0;}throw new JSException($x303,63,59,\'<image>/16_console.js\');}$x299=$x297->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',63,59);$x300=$x299($global,$x293,$x297,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x291=JS::toPrimitive(\'[date \',$global);$x292=JS::toPrimitive($x300,$global);$x289=JS::toPrimitive((is_string($x291)||is_string($x292)?JS::toString($x291,$global).JS::toString($x292,$global):JS::toNumber($x291,$global)+JS::toNumber($x292,$global)),$global);$x290=JS::toPrimitive(\']\',$global);$x288->properties[\'dump\']=(is_string($x289)||is_string($x290)?JS::toString($x289,$global).JS::toString($x290,$global):JS::toNumber($x289,$global)+JS::toNumber($x290,$global));$x288->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x288;}else{if(JS::toBoolean(isset($_v->call),$global)){$x304=clone JS::$objectTemplate;$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=$x304;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x306=array(),$x305=JS::toObject($_v,$global);$x305;$x305=$x305->prototype){foreach($x305->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x306[$property])){continue;}$x306[$property]=TRUE;$_k=$property;unset($x307,$W307,$S307,$U307);$x308=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString($_k,$global),69,14,\'<image>/16_console.js\');$x307=&$x308[0];list(,$W307,$S307,$U307)=$x308;$x309=JS::toString($_k,$global);if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x310=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),69,11,\'<image>/16_console.js\');$_TypeError=&$x310[0];list(,$WTypeError,$STypeError,$UTypeError)=$x310;$x311=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,11);$x312=$x311($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x312->class)&&$x312->class===\'Error\'&&!isset($x312->properties[\'file\'])&&!isset($x312->properties[\'line\'])&&!isset($x312->properties[\'column\'])){$x312->properties[\'file\']=\'<image>/16_console.js\';$x312->properties[\'line\']=69;$x312->properties[\'column\']=11;$x312->attributes[\'file\']=$x312->attributes[\'line\']=$x312->attributes[\'column\']=0;}throw new JSException($x312,69,11,\'<image>/16_console.js\');}$_o=JS::toObject($_o,$global);unset($x313,$W313,$S313,$U313);$x314=_ef60fce145dac950f813cdc5f2be6b9c_8($global,$scope,$_o,JS::toString($x309,$global),69,11,\'<image>/16_console.js\');$x313=&$x314[0];list(,$W313,$S313,$U313)=$x314;if($U313&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[$x309]=$x313;$x313=&$_o->properties[$x309];$_o->attributes[$x309]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U313=FALSE;$W313=TRUE;}if(isset($S313)){$x316=$S313->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,11);$x317=$x316($global,$_o,$S313,array($x307),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x315=$x317;}else{if(!$U313){$x315=$x307;if($W313){$x313=$x307;}}else{$x315=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'&&is_int($_k)&&$_k>=$_o->properties[\'length\']){$_o->properties[\'length\']=$_k+1;}}}}unset($_Object,$WObject,$SObject,$UObject);$x321=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Object\',$global),72,9,\'<image>/16_console.js\');$_Object=&$x321[0];list(,$WObject,$SObject,$UObject)=$x321;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x322=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),72,9,\'<image>/16_console.js\');$_ReferenceError=&$x322[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x322;$x323=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,9);$x324=$x323($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x324->class)&&$x324->class===\'Error\'&&!isset($x324->properties[\'file\'])&&!isset($x324->properties[\'line\'])&&!isset($x324->properties[\'column\'])){$x324->properties[\'file\']=\'<image>/16_console.js\';$x324->properties[\'line\']=72;$x324->properties[\'column\']=9;$x324->attributes[\'file\']=$x324->attributes[\'line\']=$x324->attributes[\'column\']=0;}throw new JSException($x324,72,9,\'<image>/16_console.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x326=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,35,\'<image>/16_console.js\');$_TypeError=&$x326[0];list(,$WTypeError,$STypeError,$UTypeError)=$x326;$x327=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,35);$x328=$x327($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x328->class)&&$x328->class===\'Error\'&&!isset($x328->properties[\'file\'])&&!isset($x328->properties[\'line\'])&&!isset($x328->properties[\'column\'])){$x328->properties[\'file\']=\'<image>/16_console.js\';$x328->properties[\'line\']=72;$x328->properties[\'column\']=35;$x328->attributes[\'file\']=$x328->attributes[\'line\']=$x328->attributes[\'column\']=0;}throw new JSException($x328,72,35,\'<image>/16_console.js\');}$x325=JS::toObject($_Object,$global);unset($x329,$W329,$S329,$U329);$x330=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x325,JS::toString(\'getOwnPropertyNames\',$global),72,35,\'<image>/16_console.js\');$x329=&$x330[0];list(,$W329,$S329,$U329)=$x330;if(!(is_object($x329)&&isset($x329->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x333=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,35,\'<image>/16_console.js\');$_TypeError=&$x333[0];list(,$WTypeError,$STypeError,$UTypeError)=$x333;$x334=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,35);$x335=$x334($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x335->class)&&$x335->class===\'Error\'&&!isset($x335->properties[\'file\'])&&!isset($x335->properties[\'line\'])&&!isset($x335->properties[\'column\'])){$x335->properties[\'file\']=\'<image>/16_console.js\';$x335->properties[\'line\']=72;$x335->properties[\'column\']=35;$x335->attributes[\'file\']=$x335->attributes[\'line\']=$x335->attributes[\'column\']=0;}throw new JSException($x335,72,35,\'<image>/16_console.js\');}$x331=$x329->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,35);$x332=$x331($global,$x325,$x329,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x336,$W336,$S336,$U336);$x337=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x332,JS::toString(\'length\',$global),72,38,\'<image>/16_console.js\');$x336=&$x337[0];list(,$W336,$S336,$U336)=$x337;$x318=JS::toPrimitive($x336,$global);$x319=JS::toPrimitive(0,$global);$x320=(is_string($x319)&&is_string($x318)?strcmp($x319,$x318)<0:(!is_nan($x338=JS::toNumber($x319,$global))&&!is_nan($x339=JS::toNumber($x318,$global))&&$x338<$x339));if(JS::toBoolean($x320,$global)){if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x342=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),73,16,\'<image>/16_console.js\');$_TypeError=&$x342[0];list(,$WTypeError,$STypeError,$UTypeError)=$x342;$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',73,16);$x344=$x343($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x344->class)&&$x344->class===\'Error\'&&!isset($x344->properties[\'file\'])&&!isset($x344->properties[\'line\'])&&!isset($x344->properties[\'column\'])){$x344->properties[\'file\']=\'<image>/16_console.js\';$x344->properties[\'line\']=73;$x344->properties[\'column\']=16;$x344->attributes[\'file\']=$x344->attributes[\'line\']=$x344->attributes[\'column\']=0;}throw new JSException($x344,73,16,\'<image>/16_console.js\');}$x340=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',73,16);$x341=$x340($global,$global,$_dumper,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x341;unset($x347,$W347,$S347,$U347);$x348=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_o,JS::toString(\'dump\',$global),74,22,\'<image>/16_console.js\');$x347=&$x348[0];list(,$W347,$S347,$U347)=$x348;$x345=JS::toPrimitive(\' \',$global);$x346=JS::toPrimitive($x347,$global);$x349=(is_string($x345)||is_string($x346)?JS::toString($x345,$global).JS::toString($x346,$global):JS::toNumber($x345,$global)+JS::toNumber($x346,$global));$x350=JS::toString(\'dump\',$global);if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x351=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),74,13,\'<image>/16_console.js\');$_TypeError=&$x351[0];list(,$WTypeError,$STypeError,$UTypeError)=$x351;$x352=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',74,13);$x353=$x352($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x353->class)&&$x353->class===\'Error\'&&!isset($x353->properties[\'file\'])&&!isset($x353->properties[\'line\'])&&!isset($x353->properties[\'column\'])){$x353->properties[\'file\']=\'<image>/16_console.js\';$x353->properties[\'line\']=74;$x353->properties[\'column\']=13;$x353->attributes[\'file\']=$x353->attributes[\'line\']=$x353->attributes[\'column\']=0;}throw new JSException($x353,74,13,\'<image>/16_console.js\');}$_o=JS::toObject($_o,$global);unset($x354,$W354,$S354,$U354);$x355=_ef60fce145dac950f813cdc5f2be6b9c_8($global,$scope,$_o,JS::toString($x350,$global),74,13,\'<image>/16_console.js\');$x354=&$x355[0];list(,$W354,$S354,$U354)=$x355;if($U354&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[$x350]=$x354;$x354=&$_o->properties[$x350];$_o->attributes[$x350]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U354=FALSE;$W354=TRUE;}if(isset($S354)){$x357=$S354->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',74,13);$x358=$x357($global,$_o,$S354,array($x349),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x356=$x358;}else{if(!$U354){$x356=$x349;if($W354){$x354=$x349;}}else{$x356=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'&&is_int(\'dump\')&&\'dump\'>=$_o->properties[\'length\']){$_o->properties[\'length\']=\'dump\'+1;}}else{$x359=clone JS::$objectTemplate;$x359->properties[\'multiline\']=false;$x359->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x359->properties[\'dump\']=\'\';$x359->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x359;}$x360=clone JS::$objectTemplate;unset($x361,$W361,$S361,$U361);$x362=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_o,JS::toString(\'multiline\',$global),80,26,\'<image>/16_console.js\');$x361=&$x362[0];list(,$W361,$S361,$U361)=$x362;$x360->properties[\'multiline\']=$x361;$x360->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x367=JS::toPrimitive(\'[function\',$global);$x368=JS::toPrimitive((isset($_v->name)?" ".$_v->name:""),$global);unset($x369,$W369,$S369,$U369);$x370=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_o,JS::toString(\'dump\',$global),84,10,\'<image>/16_console.js\');$x369=&$x370[0];list(,$W369,$S369,$U369)=$x370;$x365=JS::toPrimitive((is_string($x367)||is_string($x368)?JS::toString($x367,$global).JS::toString($x368,$global):JS::toNumber($x367,$global)+JS::toNumber($x368,$global)),$global);$x366=JS::toPrimitive($x369,$global);$x363=JS::toPrimitive((is_string($x365)||is_string($x366)?JS::toString($x365,$global).JS::toString($x366,$global):JS::toNumber($x365,$global)+JS::toNumber($x366,$global)),$global);$x364=JS::toPrimitive(\']\',$global);$x360->properties[\'dump\']=(is_string($x363)||is_string($x364)?JS::toString($x363,$global).JS::toString($x364,$global):JS::toNumber($x363,$global)+JS::toNumber($x364,$global));$x360->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x360;}else{$scope->properties[\'multiline\']=JS::$undefined;$_multiline=&$scope->properties[\'multiline\'];$Umultiline=FALSE;$_multiline=false;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::$undefined;$scope->properties[\'isArray\']=JS::$undefined;$_isArray=&$scope->properties[\'isArray\'];$UisArray=FALSE;$_isArray=isset($_v->class)&&$_v->class==="Array";$values=array();if(JS::toBoolean($_isArray,$global)){for($x371=0;;++$x371){if($x371===0){$x372=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x372;}if($x371!==0){$x373=++$_i;}unset($x377,$W377,$S377,$U377);$x378=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString(\'length\',$global),92,23,\'<image>/16_console.js\');$x377=&$x378[0];list(,$W377,$S377,$U377)=$x378;$x374=JS::toPrimitive($_i,$global);$x375=JS::toPrimitive($x377,$global);$x376=(is_string($x374)&&is_string($x375)?strcmp($x374,$x375)<0:(!is_nan($x379=JS::toNumber($x374,$global))&&!is_nan($x380=JS::toNumber($x375,$global))&&$x379<$x380));if(!JS::toBoolean($x376,$global)){break;}unset($x382,$W382,$S382,$U382);$x383=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString($_i,$global),93,24,\'<image>/16_console.js\');$x382=&$x383[0];list(,$W382,$S382,$U382)=$x383;$x384=JS::toPrimitive($_indent,$global);$x385=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x388=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),93,22,\'<image>/16_console.js\');$_TypeError=&$x388[0];list(,$WTypeError,$STypeError,$UTypeError)=$x388;$x389=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',93,22);$x390=$x389($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x390->class)&&$x390->class===\'Error\'&&!isset($x390->properties[\'file\'])&&!isset($x390->properties[\'line\'])&&!isset($x390->properties[\'column\'])){$x390->properties[\'file\']=\'<image>/16_console.js\';$x390->properties[\'line\']=93;$x390->properties[\'column\']=22;$x390->attributes[\'file\']=$x390->attributes[\'line\']=$x390->attributes[\'column\']=0;}throw new JSException($x390,93,22,\'<image>/16_console.js\');}$x386=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',93,22);$x387=$x386($global,$global,$_dumper,array($x382,(is_string($x384)||is_string($x385)?JS::toString($x384,$global).JS::toString($x385,$global):JS::toNumber($x384,$global)+JS::toNumber($x385,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x387;unset($x391,$W391,$S391,$U391);$x392=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'multiline\',$global),93,44,\'<image>/16_console.js\');$x391=&$x392[0];list(,$W391,$S391,$U391)=$x392;$x381=$x391;if(!JS::toBoolean($x381,$global)){unset($x396,$W396,$S396,$U396);$x397=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),93,59,\'<image>/16_console.js\');$x396=&$x397[0];list(,$W396,$S396,$U396)=$x397;unset($x398,$W398,$S398,$U398);$x399=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x396,JS::toString(\'length\',$global),93,64,\'<image>/16_console.js\');$x398=&$x399[0];list(,$W398,$S398,$U398)=$x399;$x393=JS::toPrimitive($x398,$global);$x394=JS::toPrimitive(40,$global);$x395=(is_string($x394)&&is_string($x393)?strcmp($x394,$x393)<0:(!is_nan($x400=JS::toNumber($x394,$global))&&!is_nan($x401=JS::toNumber($x393,$global))&&$x400<$x401));$x381=$x395;}if(JS::toBoolean($x381,$global)){$x402=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x402;}unset($x403,$W403,$S403,$U403);$x404=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),97,12,\'<image>/16_console.js\');$x403=&$x404[0];list(,$W403,$S403,$U403)=$x404;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x403;$values[]=$_d;}}if($_v!==JS::$undefined&&$_v!==NULL){for($x406=array(),$x405=JS::toObject($_v,$global);$x405;$x405=$x405->prototype){foreach($x405->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x406[$property])){continue;}$x406[$property]=TRUE;$_k=$property;$x407=$_isArray;if(JS::toBoolean($x407,$global)){unset($_String,$WString,$SString,$UString);$x409=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'String\',$global),105,21,\'<image>/16_console.js\');$_String=&$x409[0];list(,$WString,$SString,$UString)=$x409;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x410=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),105,21,\'<image>/16_console.js\');$_ReferenceError=&$x410[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x410;$x411=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,21);$x412=$x411($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x412->class)&&$x412->class===\'Error\'&&!isset($x412->properties[\'file\'])&&!isset($x412->properties[\'line\'])&&!isset($x412->properties[\'column\'])){$x412->properties[\'file\']=\'<image>/16_console.js\';$x412->properties[\'line\']=105;$x412->properties[\'column\']=21;$x412->attributes[\'file\']=$x412->attributes[\'line\']=$x412->attributes[\'column\']=0;}throw new JSException($x412,105,21,\'<image>/16_console.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x413=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Number\',$global),105,28,\'<image>/16_console.js\');$_Number=&$x413[0];list(,$WNumber,$SNumber,$UNumber)=$x413;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x414=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),105,28,\'<image>/16_console.js\');$_ReferenceError=&$x414[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x414;$x415=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,28);$x416=$x415($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x416->class)&&$x416->class===\'Error\'&&!isset($x416->properties[\'file\'])&&!isset($x416->properties[\'line\'])&&!isset($x416->properties[\'column\'])){$x416->properties[\'file\']=\'<image>/16_console.js\';$x416->properties[\'line\']=105;$x416->properties[\'column\']=28;$x416->attributes[\'file\']=$x416->attributes[\'line\']=$x416->attributes[\'column\']=0;}throw new JSException($x416,105,28,\'<image>/16_console.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x419=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,34,\'<image>/16_console.js\');$_TypeError=&$x419[0];list(,$WTypeError,$STypeError,$UTypeError)=$x419;$x420=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,34);$x421=$x420($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x421->class)&&$x421->class===\'Error\'&&!isset($x421->properties[\'file\'])&&!isset($x421->properties[\'line\'])&&!isset($x421->properties[\'column\'])){$x421->properties[\'file\']=\'<image>/16_console.js\';$x421->properties[\'line\']=105;$x421->properties[\'column\']=34;$x421->attributes[\'file\']=$x421->attributes[\'line\']=$x421->attributes[\'column\']=0;}throw new JSException($x421,105,34,\'<image>/16_console.js\');}$x417=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,34);$x418=$x417($global,$global,$_Number,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x424=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,27,\'<image>/16_console.js\');$_TypeError=&$x424[0];list(,$WTypeError,$STypeError,$UTypeError)=$x424;$x425=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,27);$x426=$x425($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x426->class)&&$x426->class===\'Error\'&&!isset($x426->properties[\'file\'])&&!isset($x426->properties[\'line\'])&&!isset($x426->properties[\'column\'])){$x426->properties[\'file\']=\'<image>/16_console.js\';$x426->properties[\'line\']=105;$x426->properties[\'column\']=27;$x426->attributes[\'file\']=$x426->attributes[\'line\']=$x426->attributes[\'column\']=0;}throw new JSException($x426,105,27,\'<image>/16_console.js\');}$x422=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,27);$x423=$x422($global,$global,$_String,array($x418),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x429=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,49,\'<image>/16_console.js\');$_TypeError=&$x429[0];list(,$WTypeError,$STypeError,$UTypeError)=$x429;$x430=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,49);$x431=$x430($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x431->class)&&$x431->class===\'Error\'&&!isset($x431->properties[\'file\'])&&!isset($x431->properties[\'line\'])&&!isset($x431->properties[\'column\'])){$x431->properties[\'file\']=\'<image>/16_console.js\';$x431->properties[\'line\']=105;$x431->properties[\'column\']=49;$x431->attributes[\'file\']=$x431->attributes[\'line\']=$x431->attributes[\'column\']=0;}throw new JSException($x431,105,49,\'<image>/16_console.js\');}$x427=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,49);$x428=$x427($global,$global,$_String,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x408=(((gettype($x423)===gettype($x428)&&$x423===$x428))||(((is_float($x423)||is_int($x423))&&(is_float($x428)||is_int($x428)))&&$x423==$x428));$x407=$x408;}if(JS::toBoolean($x407,$global)){continue;}unset($x433,$W433,$S433,$U433);$x434=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString($_k,$global),107,23,\'<image>/16_console.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;$x435=JS::toPrimitive($_indent,$global);$x436=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x439=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),107,21,\'<image>/16_console.js\');$_TypeError=&$x439[0];list(,$WTypeError,$STypeError,$UTypeError)=$x439;$x440=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',107,21);$x441=$x440($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x441->class)&&$x441->class===\'Error\'&&!isset($x441->properties[\'file\'])&&!isset($x441->properties[\'line\'])&&!isset($x441->properties[\'column\'])){$x441->properties[\'file\']=\'<image>/16_console.js\';$x441->properties[\'line\']=107;$x441->properties[\'column\']=21;$x441->attributes[\'file\']=$x441->attributes[\'line\']=$x441->attributes[\'column\']=0;}throw new JSException($x441,107,21,\'<image>/16_console.js\');}$x437=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',107,21);$x438=$x437($global,$global,$_dumper,array($x433,(is_string($x435)||is_string($x436)?JS::toString($x435,$global).JS::toString($x436,$global):JS::toNumber($x435,$global)+JS::toNumber($x436,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x438;unset($x442,$W442,$S442,$U442);$x443=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'multiline\',$global),107,43,\'<image>/16_console.js\');$x442=&$x443[0];list(,$W442,$S442,$U442)=$x443;$x432=$x442;if(!JS::toBoolean($x432,$global)){unset($x447,$W447,$S447,$U447);$x448=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),107,58,\'<image>/16_console.js\');$x447=&$x448[0];list(,$W447,$S447,$U447)=$x448;unset($x449,$W449,$S449,$U449);$x450=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x447,JS::toString(\'length\',$global),107,63,\'<image>/16_console.js\');$x449=&$x450[0];list(,$W449,$S449,$U449)=$x450;$x444=JS::toPrimitive($x449,$global);$x445=JS::toPrimitive(40,$global);$x446=(is_string($x445)&&is_string($x444)?strcmp($x445,$x444)<0:(!is_nan($x451=JS::toNumber($x445,$global))&&!is_nan($x452=JS::toNumber($x444,$global))&&$x451<$x452));$x432=$x446;}if(JS::toBoolean($x432,$global)){$x453=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x453;}unset($x454,$W454,$S454,$U454);$x455=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),111,11,\'<image>/16_console.js\');$x454=&$x455[0];list(,$W454,$S454,$U454)=$x455;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x454;$values[]=(preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)?$_k:str_replace("\\\\/","/",json_encode($_k))).": ".$_d;}}}if(JS::toBoolean(empty($values),$global)){$x456=clone JS::$objectTemplate;$x456->properties[\'multiline\']=false;$x456->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x457=\'[]\';}else{$x457=\'{}\';}$x456->properties[\'dump\']=$x457;$x456->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x456;}if(JS::toBoolean(count($values)>5,$global)){$x458=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x458;}$x459=clone JS::$objectTemplate;$x459->properties[\'multiline\']=$_multiline;$x459->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x464=\'[ \';}else{$x464=\'{ \';}$x462=JS::toPrimitive($x464,$global);$x463=JS::toPrimitive(implode(!$_multiline?", ":",\\n".$_indent."  ",$values),$global);if(JS::toBoolean($_isArray,$global)){$x465=\' ]\';}else{$x465=\' }\';}$x460=JS::toPrimitive((is_string($x462)||is_string($x463)?JS::toString($x462,$global).JS::toString($x463,$global):JS::toNumber($x462,$global)+JS::toNumber($x463,$global)),$global);$x461=JS::toPrimitive($x465,$global);$x459->properties[\'dump\']=(is_string($x460)||is_string($x461)?JS::toString($x460,$global).JS::toString($x461,$global):JS::toNumber($x460,$global)+JS::toNumber($x461,$global));$x459->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x459;}}}}}}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x260 =& $scope->properties['arguments'];
$x260->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x260->properties[$i] = $args[$i];
$x260->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['object'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_object =& $scope->properties['object'];
$Uobject = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x466 = clone JS::$functionTemplate; $x466->call = '_ef60fce145dac950f813cdc5f2be6b9c_11'; $x466->parameters = array (
  0 => 'v',
  1 => 'indent',
); $x466->name = 'dumper'; $x466->scope = $scope; $x466->properties['prototype'] = clone JS::$objectTemplate; $x466->attributes['prototype'] = JS::WRITABLE; $x466->properties['prototype']->properties['constructor'] = $x466; $x466->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x466->properties['length'] = 2; $x466->attributes['length'] = 0;
$scope->properties['dumper'] = JS::$undefined; $_dumper =& $scope->properties['dumper'];
$Udumper = FALSE;
$_dumper = $x466;
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x469 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 16, '<image>/16_console.js');
$_TypeError =& $x469[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x469;
$x470 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 133, 16);
$x471 = $x470($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x471->class) && $x471->class === 'Error' && !isset($x471->properties['file']) && !isset($x471->properties['line']) && !isset($x471->properties['column'])) {$x471->properties['file'] = '<image>/16_console.js';$x471->properties['line'] = 133;$x471->properties['column'] = 16;$x471->attributes['file'] = $x471->attributes['line'] = $x471->attributes['column'] = 0; }
throw new JSException($x471, 133, 16, '<image>/16_console.js');
}
$x467 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 133, 16);
$x468 = $x467($global, $global, $_dumper, array($_object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x472, $W472, $S472, $U472);
$x473 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x468, JS::toString('dump', $global), 133, 24, '<image>/16_console.js');
$x472 =& $x473[0]; list(,$W472,$S472,$U472) = $x473;
return $x472;
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x260=&$scope->properties[\'arguments\'];$x260->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x260->properties[$i]=$args[$i];$x260->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'object\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_object=&$scope->properties[\'object\'];$Uobject=FALSE;$global->scope[++$global->scope_sp]=$scope;$x466=clone JS::$functionTemplate;$x466->call=\'_ef60fce145dac950f813cdc5f2be6b9c_11\';$x466->parameters=array(0=>\'v\',1=>\'indent\',);$x466->name=\'dumper\';$x466->scope=$scope;$x466->properties[\'prototype\']=clone JS::$objectTemplate;$x466->attributes[\'prototype\']=JS::WRITABLE;$x466->properties[\'prototype\']->properties[\'constructor\']=$x466;$x466->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x466->properties[\'length\']=2;$x466->attributes[\'length\']=0;$scope->properties[\'dumper\']=JS::$undefined;$_dumper=&$scope->properties[\'dumper\'];$Udumper=FALSE;$_dumper=$x466;if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x469=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,16,\'<image>/16_console.js\');$_TypeError=&$x469[0];list(,$WTypeError,$STypeError,$UTypeError)=$x469;$x470=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',133,16);$x471=$x470($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x471->class)&&$x471->class===\'Error\'&&!isset($x471->properties[\'file\'])&&!isset($x471->properties[\'line\'])&&!isset($x471->properties[\'column\'])){$x471->properties[\'file\']=\'<image>/16_console.js\';$x471->properties[\'line\']=133;$x471->properties[\'column\']=16;$x471->attributes[\'file\']=$x471->attributes[\'line\']=$x471->attributes[\'column\']=0;}throw new JSException($x471,133,16,\'<image>/16_console.js\');}$x467=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',133,16);$x468=$x467($global,$global,$_dumper,array($_object),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x472,$W472,$S472,$U472);$x473=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x468,JS::toString(\'dump\',$global),133,24,\'<image>/16_console.js\');$x472=&$x473[0];list(,$W472,$S472,$U472)=$x473;return$x472;return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/16_console.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/16_console.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x3 = clone JS::$functionTemplate; $x3->call = '_ef60fce145dac950f813cdc5f2be6b9c_1'; $x3->parameters = array (
  0 => 'fd',
  1 => 's',
); $x3->scope = $scope; $x3->properties['prototype'] = clone JS::$objectTemplate; $x3->attributes['prototype'] = JS::WRITABLE; $x3->properties['prototype']->properties['constructor'] = $x3; $x3->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x3->properties['length'] = 2; $x3->attributes['length'] = 0;
$x0->properties['p'] = $x3;
$x0->attributes['p'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x96 = clone JS::$functionTemplate; $x96->call = '_ef60fce145dac950f813cdc5f2be6b9c_2'; $x96->parameters = array (
  0 => 'data',
); $x96->scope = $scope; $x96->properties['prototype'] = clone JS::$objectTemplate; $x96->attributes['prototype'] = JS::WRITABLE; $x96->properties['prototype']->properties['constructor'] = $x96; $x96->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x96->properties['length'] = 1; $x96->attributes['length'] = 0;
$x0->properties['log'] = $x96;
$x0->attributes['log'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x182 = clone JS::$functionTemplate; $x182->call = '_ef60fce145dac950f813cdc5f2be6b9c_5'; $x182->parameters = array (
  0 => 'data',
); $x182->scope = $scope; $x182->properties['prototype'] = clone JS::$objectTemplate; $x182->attributes['prototype'] = JS::WRITABLE; $x182->properties['prototype']->properties['constructor'] = $x182; $x182->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x182->properties['length'] = 1; $x182->attributes['length'] = 0;
$x0->properties['error'] = $x182;
$x0->attributes['error'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x196 = clone JS::$functionTemplate; $x196->call = '_ef60fce145dac950f813cdc5f2be6b9c_6'; $x196->parameters = array (
  0 => 'object',
); $x196->scope = $scope; $x196->properties['prototype'] = clone JS::$objectTemplate; $x196->attributes['prototype'] = JS::WRITABLE; $x196->properties['prototype']->properties['constructor'] = $x196; $x196->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x196->properties['length'] = 1; $x196->attributes['length'] = 0;
$x0->properties['dir'] = $x196;
$x0->attributes['dir'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x197 = clone JS::$objectTemplate;
$x0->properties['_times'] = $x197;
$x0->attributes['_times'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x215 = clone JS::$functionTemplate; $x215->call = '_ef60fce145dac950f813cdc5f2be6b9c_7'; $x215->parameters = array (
  0 => 'label',
); $x215->scope = $scope; $x215->properties['prototype'] = clone JS::$objectTemplate; $x215->attributes['prototype'] = JS::WRITABLE; $x215->properties['prototype']->properties['constructor'] = $x215; $x215->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x215->properties['length'] = 1; $x215->attributes['length'] = 0;
$x0->properties['time'] = $x215;
$x0->attributes['time'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x258 = clone JS::$functionTemplate; $x258->call = '_ef60fce145dac950f813cdc5f2be6b9c_9'; $x258->parameters = array (
  0 => 'label',
); $x258->scope = $scope; $x258->properties['prototype'] = clone JS::$objectTemplate; $x258->attributes['prototype'] = JS::WRITABLE; $x258->properties['prototype']->properties['constructor'] = $x258; $x258->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x258->properties['length'] = 1; $x258->attributes['length'] = 0;
$x0->properties['timeEnd'] = $x258;
$x0->attributes['timeEnd'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x474 = clone JS::$functionTemplate; $x474->call = '_ef60fce145dac950f813cdc5f2be6b9c_10'; $x474->parameters = array (
  0 => 'object',
); $x474->scope = $scope; $x474->properties['prototype'] = clone JS::$objectTemplate; $x474->attributes['prototype'] = JS::WRITABLE; $x474->properties['prototype']->properties['constructor'] = $x474; $x474->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x474->properties['length'] = 1; $x474->attributes['length'] = 0;
$x0->properties['inspect'] = $x474;
$x0->attributes['inspect'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['console'] = JS::$undefined; $_console =& $scope->properties['console'];
$Uconsole = FALSE;
$_console = $x0;
unset($x475, $W475, $S475, $U475);
$x476 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_console, JS::toString('log', $global), 137, 23, '<image>/16_console.js');
$x475 =& $x476[0]; list(,$W475,$S475,$U475) = $x476;
$x477 = JS::toString('info', $global);
if ($_console === JS::$undefined || $_console === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x478 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 137, 14, '<image>/16_console.js');
$_TypeError =& $x478[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x478;
$x479 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 137, 14);
$x480 = $x479($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x480->class) && $x480->class === 'Error' && !isset($x480->properties['file']) && !isset($x480->properties['line']) && !isset($x480->properties['column'])) {$x480->properties['file'] = '<image>/16_console.js';$x480->properties['line'] = 137;$x480->properties['column'] = 14;$x480->attributes['file'] = $x480->attributes['line'] = $x480->attributes['column'] = 0; }
throw new JSException($x480, 137, 14, '<image>/16_console.js');
}
$_console = JS::toObject($_console, $global);
unset($x481, $W481, $S481, $U481);
$x482 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_console, JS::toString($x477, $global), 137, 14, '<image>/16_console.js');
$x481 =& $x482[0]; list(,$W481,$S481,$U481) = $x482;
if ($U481 && (!isset($_console->extensible) || $_console->extensible)) {$_console->properties[$x477] = $x481; $x481 =& $_console->properties[$x477]; $_console->attributes[$x477] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U481 = FALSE; $W481 = TRUE; }
if (isset($S481)) {
$x484 = $S481->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 137, 14);
$x485 = $x484($global, $_console, $S481, array($x475), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x483 = $x485;
} else {
if (!$U481) {$x483 = $x475;if ($W481) { $x481 = $x475; }  }
else { $x483 = JS::$undefined; }
}
if (isset($_console->class) && $_console->class === 'Array' &&  is_int('info') && 'info' >= $_console->properties['length']) { $_console->properties['length'] = 'info' + 1; };
unset($x486, $W486, $S486, $U486);
$x487 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_console, JS::toString('error', $global), 138, 23, '<image>/16_console.js');
$x486 =& $x487[0]; list(,$W486,$S486,$U486) = $x487;
$x488 = JS::toString('warn', $global);
if ($_console === JS::$undefined || $_console === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x489 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 138, 14, '<image>/16_console.js');
$_TypeError =& $x489[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x489;
$x490 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 138, 14);
$x491 = $x490($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x491->class) && $x491->class === 'Error' && !isset($x491->properties['file']) && !isset($x491->properties['line']) && !isset($x491->properties['column'])) {$x491->properties['file'] = '<image>/16_console.js';$x491->properties['line'] = 138;$x491->properties['column'] = 14;$x491->attributes['file'] = $x491->attributes['line'] = $x491->attributes['column'] = 0; }
throw new JSException($x491, 138, 14, '<image>/16_console.js');
}
$_console = JS::toObject($_console, $global);
unset($x492, $W492, $S492, $U492);
$x493 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_console, JS::toString($x488, $global), 138, 14, '<image>/16_console.js');
$x492 =& $x493[0]; list(,$W492,$S492,$U492) = $x493;
if ($U492 && (!isset($_console->extensible) || $_console->extensible)) {$_console->properties[$x488] = $x492; $x492 =& $_console->properties[$x488]; $_console->attributes[$x488] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U492 = FALSE; $W492 = TRUE; }
if (isset($S492)) {
$x495 = $S492->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 138, 14);
$x496 = $x495($global, $_console, $S492, array($x486), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x494 = $x496;
} else {
if (!$U492) {$x494 = $x486;if ($W492) { $x492 = $x486; }  }
else { $x494 = JS::$undefined; }
}
if (isset($_console->class) && $_console->class === 'Array' &&  is_int('warn') && 'warn' >= $_console->properties['length']) { $_console->properties['length'] = 'warn' + 1; };
;
return JS::$undefined;
}
