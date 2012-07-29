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
if (isset($x201->class) && $x201->class === 'Array') {  if (isset($x201->properties['length']) && $x201->properties['length'] !== JS::$undefined) { $x213 = $x201->properties['length']; }  else { $x213 = 0; } }
if (isset($S207)) {
$x214 = $S207->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 33, 22);
$x215 = $x214($global, $x201, $S207, array($x200), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x212 = $x215;
} else {
if (!$U207) {$x212 = $x200;if ($W207) { $x207 = $x200; }  }
else { $x212 = JS::$undefined; }
}
if (isset($x201->class) && $x201->class === 'Array') {if (is_int($_label) && $_label >= $x201->properties['length']) { $x201->properties['length'] = $_label + 1; }else if ($x203 === 'length' && is_int($x200) && $x213 > $x200) {  for ($i = $x200; $i < $x213; ++$i) {  unset($x201->properties[$i], $x201->attributes[$i]); }}}
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x199=&$scope->properties[\'arguments\'];$x199->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x199->properties[$i]=$args[$i];$x199->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'label\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_label=&$scope->properties[\'label\'];$Ulabel=FALSE;$global->scope[++$global->scope_sp]=$scope;$x200=microtime(TRUE);unset($x201,$W201,$S201,$U201);$x202=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),33,7,\'<image>/16_console.js\');$x201=&$x202[0];list(,$W201,$S201,$U201)=$x202;$x203=JS::toString($_label,$global);if($x201===JS::$undefined||$x201===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x204=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),33,22,\'<image>/16_console.js\');$_TypeError=&$x204[0];list(,$WTypeError,$STypeError,$UTypeError)=$x204;$x205=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',33,22);$x206=$x205($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x206->class)&&$x206->class===\'Error\'&&!isset($x206->properties[\'file\'])&&!isset($x206->properties[\'line\'])&&!isset($x206->properties[\'column\'])){$x206->properties[\'file\']=\'<image>/16_console.js\';$x206->properties[\'line\']=33;$x206->properties[\'column\']=22;$x206->attributes[\'file\']=$x206->attributes[\'line\']=$x206->attributes[\'column\']=0;}throw new JSException($x206,33,22,\'<image>/16_console.js\');}$x201=JS::toObject($x201,$global);unset($x207,$W207,$S207,$U207);$x211=_ef60fce145dac950f813cdc5f2be6b9c_8($global,$scope,$x201,JS::toString($x203,$global),33,22,\'<image>/16_console.js\');$x207=&$x211[0];list(,$W207,$S207,$U207)=$x211;if($U207&&(!isset($x201->extensible)||$x201->extensible)){$x201->properties[$x203]=$x207;$x207=&$x201->properties[$x203];$x201->attributes[$x203]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U207=FALSE;$W207=TRUE;}if(isset($x201->class)&&$x201->class===\'Array\'){if(isset($x201->properties[\'length\'])&&$x201->properties[\'length\']!==JS::$undefined){$x213=$x201->properties[\'length\'];}else{$x213=0;}}if(isset($S207)){$x214=$S207->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',33,22);$x215=$x214($global,$x201,$S207,array($x200),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x212=$x215;}else{if(!$U207){$x212=$x200;if($W207){$x207=$x200;}}else{$x212=JS::$undefined;}}if(isset($x201->class)&&$x201->class===\'Array\'){if(is_int($_label)&&$_label>=$x201->properties[\'length\']){$x201->properties[\'length\']=$_label+1;}else if($x203===\'length\'&&is_int($x200)&&$x213>$x200){for($i=$x200;$i<$x213;++$i){unset($x201->properties[$i],$x201->attributes[$i]);}}}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x218 =& $scope->properties['arguments'];
$x218->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x218->properties[$i] = $args[$i];
$x218->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['label'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_label =& $scope->properties['label'];
$Ulabel = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['t'] = JS::$undefined; $_t =& $scope->properties['t'];
$Ut = FALSE;
$_t = microtime(TRUE);
unset($x220, $W220, $S220, $U220);
$x221 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $leThis, JS::toString('_times', $global), 39, 11, '<image>/16_console.js');
$x220 =& $x221[0]; list(,$W220,$S220,$U220) = $x221;
unset($x222, $W222, $S222, $U222);
$x223 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x220, JS::toString($_label, $global), 39, 18, '<image>/16_console.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
$x219 = (((gettype($x222) === gettype(JS::$undefined) && $x222 === JS::$undefined))|| (((is_float($x222) || is_int($x222)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x222 == JS::$undefined));
if (JS::toBoolean($x219, $global)) {
unset($_Error, $WError, $SError, $UError);
$x226 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Error', $global), 40, 14, '<image>/16_console.js');
$_Error =& $x226[0]; list(,$WError,$SError,$UError) = $x226;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x227 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 40, 14, '<image>/16_console.js');
$_ReferenceError =& $x227[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x227;
$x228 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 14);
$x229 = $x228($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x229->class) && $x229->class === 'Error' && !isset($x229->properties['file']) && !isset($x229->properties['line']) && !isset($x229->properties['column'])) {$x229->properties['file'] = '<image>/16_console.js';$x229->properties['line'] = 40;$x229->properties['column'] = 14;$x229->attributes['file'] = $x229->attributes['line'] = $x229->attributes['column'] = 0; }
throw new JSException($x229, 40, 14, '<image>/16_console.js');
}
$x232 = JS::toPrimitive('Label ', $global);
$x233 = JS::toPrimitive($_label, $global);
$x230 = JS::toPrimitive((is_string($x232) || is_string($x233) ? JS::toString($x232, $global) . JS::toString($x233, $global) : JS::toNumber($x232, $global) + JS::toNumber($x233, $global)), $global);
$x231 = JS::toPrimitive(' not defined.', $global);
$x224 = clone JS::$objectTemplate;
unset($x234, $W234, $S234, $U234);
$x235 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_Error, JS::toString('prototype', $global), 40, 10, '<image>/16_console.js');
$x234 =& $x235[0]; list(,$W234,$S234,$U234) = $x235;
$x225 = $x234;
$x224->prototype = $x225;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x238 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 40, 10, '<image>/16_console.js');
$_TypeError =& $x238[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x238;
$x239 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 10);
$x240 = $x239($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x240->class) && $x240->class === 'Error' && !isset($x240->properties['file']) && !isset($x240->properties['line']) && !isset($x240->properties['column'])) {$x240->properties['file'] = '<image>/16_console.js';$x240->properties['line'] = 40;$x240->properties['column'] = 10;$x240->attributes['file'] = $x240->attributes['line'] = $x240->attributes['column'] = 0; }
throw new JSException($x240, 40, 10, '<image>/16_console.js');
}
$x236 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 40, 10);
$x237 = $x236($global, $x224, $_Error, array((is_string($x230) || is_string($x231) ? JS::toString($x230, $global) . JS::toString($x231, $global) : JS::toNumber($x230, $global) + JS::toNumber($x231, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x225 = $x237;
if (is_object($x225) && $x225 !== JS::$undefined) { $x224 = $x225; }
if (isset($x224->class) && $x224->class === 'Error' && !isset($x224->properties['file']) && !isset($x224->properties['line']) && !isset($x224->properties['column'])) {$x224->properties['file'] = '<image>/16_console.js';$x224->properties['line'] = 40;$x224->properties['column'] = 4;$x224->attributes['file'] = $x224->attributes['line'] = $x224->attributes['column'] = 0; }
throw new JSException($x224, 40, 4, '<image>/16_console.js');;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x242 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 11, '<image>/16_console.js');
$_TypeError =& $x242[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x242;
$x243 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x244 = $x243($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x244->class) && $x244->class === 'Error' && !isset($x244->properties['file']) && !isset($x244->properties['line']) && !isset($x244->properties['column'])) {$x244->properties['file'] = '<image>/16_console.js';$x244->properties['line'] = 43;$x244->properties['column'] = 11;$x244->attributes['file'] = $x244->attributes['line'] = $x244->attributes['column'] = 0; }
throw new JSException($x244, 43, 11, '<image>/16_console.js');
}
$x241 = JS::toObject($leThis, $global);
unset($x245, $W245, $S245, $U245);
$x246 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x241, JS::toString('log', $global), 43, 11, '<image>/16_console.js');
$x245 =& $x246[0]; list(,$W245,$S245,$U245) = $x246;
unset($x247, $W247, $S247, $U247);
$x248 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $leThis, JS::toString('_times', $global), 43, 37, '<image>/16_console.js');
$x247 =& $x248[0]; list(,$W247,$S247,$U247) = $x248;
unset($x249, $W249, $S249, $U249);
$x250 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x247, JS::toString($_label, $global), 43, 44, '<image>/16_console.js');
$x249 =& $x250[0]; list(,$W249,$S249,$U249) = $x250;
if (!(is_object($x245) && isset($x245->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x253 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 11, '<image>/16_console.js');
$_TypeError =& $x253[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x253;
$x254 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x255 = $x254($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x255->class) && $x255->class === 'Error' && !isset($x255->properties['file']) && !isset($x255->properties['line']) && !isset($x255->properties['column'])) {$x255->properties['file'] = '<image>/16_console.js';$x255->properties['line'] = 43;$x255->properties['column'] = 11;$x255->attributes['file'] = $x255->attributes['line'] = $x255->attributes['column'] = 0; }
throw new JSException($x255, 43, 11, '<image>/16_console.js');
}
$x251 = $x245->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 43, 11);
$x252 = $x251($global, $x241, $x245, array('%s: %f', $_label, (JS::toNumber($_t, $global) - JS::toNumber($x249, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x257, $W257, $S257, $U257);
$x258 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $leThis, JS::toString('_times', $global), 44, 14, '<image>/16_console.js');
$x257 =& $x258[0]; list(,$W257,$S257,$U257) = $x258;
if (!array_key_exists($_label, $x257->attributes)) { unset($x257->properties[$_label]); $x256 = TRUE; }
else if ($x257->attributes[$_label] & JS::CONFIGURABLE) { unset($x257->properties[$_label], $x257->attributes[$_label], $x257->getters[$_label], $x257->setters[$_label]); $x256 = TRUE; }
else { $x256 = FALSE; };
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x218=&$scope->properties[\'arguments\'];$x218->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x218->properties[$i]=$args[$i];$x218->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'label\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_label=&$scope->properties[\'label\'];$Ulabel=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'t\']=JS::$undefined;$_t=&$scope->properties[\'t\'];$Ut=FALSE;$_t=microtime(TRUE);unset($x220,$W220,$S220,$U220);$x221=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),39,11,\'<image>/16_console.js\');$x220=&$x221[0];list(,$W220,$S220,$U220)=$x221;unset($x222,$W222,$S222,$U222);$x223=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x220,JS::toString($_label,$global),39,18,\'<image>/16_console.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;$x219=(((gettype($x222)===gettype(JS::$undefined)&&$x222===JS::$undefined))||(((is_float($x222)||is_int($x222))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x222==JS::$undefined));if(JS::toBoolean($x219,$global)){unset($_Error,$WError,$SError,$UError);$x226=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Error\',$global),40,14,\'<image>/16_console.js\');$_Error=&$x226[0];list(,$WError,$SError,$UError)=$x226;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x227=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),40,14,\'<image>/16_console.js\');$_ReferenceError=&$x227[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x227;$x228=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,14);$x229=$x228($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x229->class)&&$x229->class===\'Error\'&&!isset($x229->properties[\'file\'])&&!isset($x229->properties[\'line\'])&&!isset($x229->properties[\'column\'])){$x229->properties[\'file\']=\'<image>/16_console.js\';$x229->properties[\'line\']=40;$x229->properties[\'column\']=14;$x229->attributes[\'file\']=$x229->attributes[\'line\']=$x229->attributes[\'column\']=0;}throw new JSException($x229,40,14,\'<image>/16_console.js\');}$x232=JS::toPrimitive(\'Label \',$global);$x233=JS::toPrimitive($_label,$global);$x230=JS::toPrimitive((is_string($x232)||is_string($x233)?JS::toString($x232,$global).JS::toString($x233,$global):JS::toNumber($x232,$global)+JS::toNumber($x233,$global)),$global);$x231=JS::toPrimitive(\' not defined.\',$global);$x224=clone JS::$objectTemplate;unset($x234,$W234,$S234,$U234);$x235=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_Error,JS::toString(\'prototype\',$global),40,10,\'<image>/16_console.js\');$x234=&$x235[0];list(,$W234,$S234,$U234)=$x235;$x225=$x234;$x224->prototype=$x225;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x238=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),40,10,\'<image>/16_console.js\');$_TypeError=&$x238[0];list(,$WTypeError,$STypeError,$UTypeError)=$x238;$x239=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,10);$x240=$x239($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x240->class)&&$x240->class===\'Error\'&&!isset($x240->properties[\'file\'])&&!isset($x240->properties[\'line\'])&&!isset($x240->properties[\'column\'])){$x240->properties[\'file\']=\'<image>/16_console.js\';$x240->properties[\'line\']=40;$x240->properties[\'column\']=10;$x240->attributes[\'file\']=$x240->attributes[\'line\']=$x240->attributes[\'column\']=0;}throw new JSException($x240,40,10,\'<image>/16_console.js\');}$x236=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',40,10);$x237=$x236($global,$x224,$_Error,array((is_string($x230)||is_string($x231)?JS::toString($x230,$global).JS::toString($x231,$global):JS::toNumber($x230,$global)+JS::toNumber($x231,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x225=$x237;if(is_object($x225)&&$x225!==JS::$undefined){$x224=$x225;}if(isset($x224->class)&&$x224->class===\'Error\'&&!isset($x224->properties[\'file\'])&&!isset($x224->properties[\'line\'])&&!isset($x224->properties[\'column\'])){$x224->properties[\'file\']=\'<image>/16_console.js\';$x224->properties[\'line\']=40;$x224->properties[\'column\']=4;$x224->attributes[\'file\']=$x224->attributes[\'line\']=$x224->attributes[\'column\']=0;}throw new JSException($x224,40,4,\'<image>/16_console.js\');}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x242=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,11,\'<image>/16_console.js\');$_TypeError=&$x242[0];list(,$WTypeError,$STypeError,$UTypeError)=$x242;$x243=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x244=$x243($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x244->class)&&$x244->class===\'Error\'&&!isset($x244->properties[\'file\'])&&!isset($x244->properties[\'line\'])&&!isset($x244->properties[\'column\'])){$x244->properties[\'file\']=\'<image>/16_console.js\';$x244->properties[\'line\']=43;$x244->properties[\'column\']=11;$x244->attributes[\'file\']=$x244->attributes[\'line\']=$x244->attributes[\'column\']=0;}throw new JSException($x244,43,11,\'<image>/16_console.js\');}$x241=JS::toObject($leThis,$global);unset($x245,$W245,$S245,$U245);$x246=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x241,JS::toString(\'log\',$global),43,11,\'<image>/16_console.js\');$x245=&$x246[0];list(,$W245,$S245,$U245)=$x246;unset($x247,$W247,$S247,$U247);$x248=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),43,37,\'<image>/16_console.js\');$x247=&$x248[0];list(,$W247,$S247,$U247)=$x248;unset($x249,$W249,$S249,$U249);$x250=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x247,JS::toString($_label,$global),43,44,\'<image>/16_console.js\');$x249=&$x250[0];list(,$W249,$S249,$U249)=$x250;if(!(is_object($x245)&&isset($x245->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x253=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,11,\'<image>/16_console.js\');$_TypeError=&$x253[0];list(,$WTypeError,$STypeError,$UTypeError)=$x253;$x254=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x255=$x254($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x255->class)&&$x255->class===\'Error\'&&!isset($x255->properties[\'file\'])&&!isset($x255->properties[\'line\'])&&!isset($x255->properties[\'column\'])){$x255->properties[\'file\']=\'<image>/16_console.js\';$x255->properties[\'line\']=43;$x255->properties[\'column\']=11;$x255->attributes[\'file\']=$x255->attributes[\'line\']=$x255->attributes[\'column\']=0;}throw new JSException($x255,43,11,\'<image>/16_console.js\');}$x251=$x245->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',43,11);$x252=$x251($global,$x241,$x245,array(\'%s: %f\',$_label,(JS::toNumber($_t,$global)-JS::toNumber($x249,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x257,$W257,$S257,$U257);$x258=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$leThis,JS::toString(\'_times\',$global),44,14,\'<image>/16_console.js\');$x257=&$x258[0];list(,$W257,$S257,$U257)=$x258;if(!array_key_exists($_label,$x257->attributes)){unset($x257->properties[$_label]);$x256=TRUE;}else if($x257->attributes[$_label]&JS::CONFIGURABLE){unset($x257->properties[$_label],$x257->attributes[$_label],$x257->getters[$_label],$x257->setters[$_label]);$x256=TRUE;}else{$x256=FALSE;}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x263 =& $scope->properties['arguments'];
$x263->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x263->properties[$i] = $args[$i];
$x263->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x264 = $_indent;
if (!JS::toBoolean($x264, $global)) {
$x264 = ''; }
if ($Uindent) {$global->properties['indent'] = $_indent; $_indent =& $global->properties['indent']; }
$_indent = $x264;
$x265 = (((gettype($_v) === gettype(JS::$undefined) && $_v === JS::$undefined))|| (((is_float($_v) || is_int($_v)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_v == JS::$undefined));
if (JS::toBoolean($x265, $global)) {
$x266 = clone JS::$objectTemplate;
$x266->properties['multiline'] = false;
$x266->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x266->properties['dump'] = 'undefined';
$x266->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x266;;
}
else {
$x268 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x267 = $x268;
if (!JS::toBoolean($x267, $global)) {
$x270 = $_v;
$x270 = ($x270 === JS::$undefined ? 'undefined' : (is_int($x270) || is_float($x270) ? 'number' : (is_bool($x270) ? 'boolean' : (is_string($x270) ? 'string' : (is_object($x270) && isset($x270->call) ? 'function' : 'object')))));
$x269 = (((gettype($x270) === gettype('boolean') && $x270 === 'boolean'))|| (((is_float($x270) || is_int($x270)) && (is_float('boolean') || is_int('boolean'))) && $x270 == 'boolean'));
$x267 = $x269; }
if (JS::toBoolean($x267, $global)) {
$x271 = clone JS::$objectTemplate;
$x271->properties['multiline'] = false;
$x271->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x271->properties['dump'] = json_encode($_v);
$x271->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x271;;
}
else {
$x273 = $_v;
$x273 = ($x273 === JS::$undefined ? 'undefined' : (is_int($x273) || is_float($x273) ? 'number' : (is_bool($x273) ? 'boolean' : (is_string($x273) ? 'string' : (is_object($x273) && isset($x273->call) ? 'function' : 'object')))));
$x272 = (((gettype($x273) === gettype('number') && $x273 === 'number'))|| (((is_float($x273) || is_int($x273)) && (is_float('number') || is_int('number'))) && $x273 == 'number'));
if (JS::toBoolean($x272, $global)) {
$x274 = clone JS::$objectTemplate;
$x274->properties['multiline'] = false;
$x274->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x276 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 57, 48, '<image>/16_console.js');
$_TypeError =& $x276[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x276;
$x277 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x278 = $x277($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x278->class) && $x278->class === 'Error' && !isset($x278->properties['file']) && !isset($x278->properties['line']) && !isset($x278->properties['column'])) {$x278->properties['file'] = '<image>/16_console.js';$x278->properties['line'] = 57;$x278->properties['column'] = 48;$x278->attributes['file'] = $x278->attributes['line'] = $x278->attributes['column'] = 0; }
throw new JSException($x278, 57, 48, '<image>/16_console.js');
}
$x275 = JS::toObject($_v, $global);
unset($x279, $W279, $S279, $U279);
$x280 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x275, JS::toString('toString', $global), 57, 48, '<image>/16_console.js');
$x279 =& $x280[0]; list(,$W279,$S279,$U279) = $x280;
if (!(is_object($x279) && isset($x279->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x283 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 57, 48, '<image>/16_console.js');
$_TypeError =& $x283[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x283;
$x284 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x285 = $x284($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x285->class) && $x285->class === 'Error' && !isset($x285->properties['file']) && !isset($x285->properties['line']) && !isset($x285->properties['column'])) {$x285->properties['file'] = '<image>/16_console.js';$x285->properties['line'] = 57;$x285->properties['column'] = 48;$x285->attributes['file'] = $x285->attributes['line'] = $x285->attributes['column'] = 0; }
throw new JSException($x285, 57, 48, '<image>/16_console.js');
}
$x281 = $x279->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 57, 48);
$x282 = $x281($global, $x275, $x279, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x274->properties['dump'] = $x282;
$x274->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x274;;
}
else {
$x287 = $_v;
$x287 = ($x287 === JS::$undefined ? 'undefined' : (is_int($x287) || is_float($x287) ? 'number' : (is_bool($x287) ? 'boolean' : (is_string($x287) ? 'string' : (is_object($x287) && isset($x287->call) ? 'function' : 'object')))));
$x286 = (((gettype($x287) === gettype('string') && $x287 === 'string'))|| (((is_float($x287) || is_int($x287)) && (is_float('string') || is_int('string'))) && $x287 == 'string'));
if (JS::toBoolean($x286, $global)) {
$x288 = clone JS::$objectTemplate;
$x288->properties['multiline'] = false;
$x288->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x288->properties['dump'] = str_replace("\\/", "/", json_encode($_v));
$x288->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x288;;
}
else {

if (JS::toBoolean(isset($_v->class) &&$_v->class === 'Date', $global)) {
$x289 = clone JS::$objectTemplate;
$x289->properties['multiline'] = false;
$x289->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x295 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 63, 59, '<image>/16_console.js');
$_TypeError =& $x295[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x295;
$x296 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 63, 59);
$x297 = $x296($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x297->class) && $x297->class === 'Error' && !isset($x297->properties['file']) && !isset($x297->properties['line']) && !isset($x297->properties['column'])) {$x297->properties['file'] = '<image>/16_console.js';$x297->properties['line'] = 63;$x297->properties['column'] = 59;$x297->attributes['file'] = $x297->attributes['line'] = $x297->attributes['column'] = 0; }
throw new JSException($x297, 63, 59, '<image>/16_console.js');
}
$x294 = JS::toObject($_v, $global);
unset($x298, $W298, $S298, $U298);
$x299 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x294, JS::toString('toString', $global), 63, 59, '<image>/16_console.js');
$x298 =& $x299[0]; list(,$W298,$S298,$U298) = $x299;
if (!(is_object($x298) && isset($x298->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x302 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 63, 59, '<image>/16_console.js');
$_TypeError =& $x302[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x302;
$x303 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 63, 59);
$x304 = $x303($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x304->class) && $x304->class === 'Error' && !isset($x304->properties['file']) && !isset($x304->properties['line']) && !isset($x304->properties['column'])) {$x304->properties['file'] = '<image>/16_console.js';$x304->properties['line'] = 63;$x304->properties['column'] = 59;$x304->attributes['file'] = $x304->attributes['line'] = $x304->attributes['column'] = 0; }
throw new JSException($x304, 63, 59, '<image>/16_console.js');
}
$x300 = $x298->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 63, 59);
$x301 = $x300($global, $x294, $x298, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x292 = JS::toPrimitive('[date ', $global);
$x293 = JS::toPrimitive($x301, $global);
$x290 = JS::toPrimitive((is_string($x292) || is_string($x293) ? JS::toString($x292, $global) . JS::toString($x293, $global) : JS::toNumber($x292, $global) + JS::toNumber($x293, $global)), $global);
$x291 = JS::toPrimitive(']', $global);
$x289->properties['dump'] = (is_string($x290) || is_string($x291) ? JS::toString($x290, $global) . JS::toString($x291, $global) : JS::toNumber($x290, $global) + JS::toNumber($x291, $global));
$x289->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x289;;
}
else {

if (JS::toBoolean(isset($_v->call), $global)) {
$x305 = clone JS::$objectTemplate;
$scope->properties['o'] = JS::$undefined; $_o =& $scope->properties['o'];
$Uo = FALSE;
$_o = $x305;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x307 = array(), $x306 = JS::toObject($_v, $global); $x306; $x306 = $x306->prototype) {
foreach ($x306->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x307[$property])) { continue; }
$x307[$property] = TRUE;
$_k = $property;

unset($x308, $W308, $S308, $U308);
$x309 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString($_k, $global), 69, 14, '<image>/16_console.js');
$x308 =& $x309[0]; list(,$W308,$S308,$U308) = $x309;
$x310 = JS::toString($_k, $global);
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x311 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 69, 11, '<image>/16_console.js');
$_TypeError =& $x311[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x311;
$x312 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 11);
$x313 = $x312($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x313->class) && $x313->class === 'Error' && !isset($x313->properties['file']) && !isset($x313->properties['line']) && !isset($x313->properties['column'])) {$x313->properties['file'] = '<image>/16_console.js';$x313->properties['line'] = 69;$x313->properties['column'] = 11;$x313->attributes['file'] = $x313->attributes['line'] = $x313->attributes['column'] = 0; }
throw new JSException($x313, 69, 11, '<image>/16_console.js');
}
$_o = JS::toObject($_o, $global);
unset($x314, $W314, $S314, $U314);
$x315 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_o, JS::toString($x310, $global), 69, 11, '<image>/16_console.js');
$x314 =& $x315[0]; list(,$W314,$S314,$U314) = $x315;
if ($U314 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties[$x310] = $x314; $x314 =& $_o->properties[$x310]; $_o->attributes[$x310] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U314 = FALSE; $W314 = TRUE; }
if (isset($_o->class) && $_o->class === 'Array') {  if (isset($_o->properties['length']) && $_o->properties['length'] !== JS::$undefined) { $x317 = $_o->properties['length']; }  else { $x317 = 0; } }
if (isset($S314)) {
$x318 = $S314->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 69, 11);
$x319 = $x318($global, $_o, $S314, array($x308), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x316 = $x319;
} else {
if (!$U314) {$x316 = $x308;if ($W314) { $x314 = $x308; }  }
else { $x316 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array') {if (is_int($_k) && $_k >= $_o->properties['length']) { $_o->properties['length'] = $_k + 1; }else if ($x310 === 'length' && is_int($x308) && $x317 > $x308) {  for ($i = $x308; $i < $x317; ++$i) {  unset($_o->properties[$i], $_o->attributes[$i]); }}};
}
}
};
unset($_Object, $WObject, $SObject, $UObject);
$x323 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Object', $global), 72, 9, '<image>/16_console.js');
$_Object =& $x323[0]; list(,$WObject,$SObject,$UObject) = $x323;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x324 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 9, '<image>/16_console.js');
$_ReferenceError =& $x324[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x324;
$x325 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 9);
$x326 = $x325($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x326->class) && $x326->class === 'Error' && !isset($x326->properties['file']) && !isset($x326->properties['line']) && !isset($x326->properties['column'])) {$x326->properties['file'] = '<image>/16_console.js';$x326->properties['line'] = 72;$x326->properties['column'] = 9;$x326->attributes['file'] = $x326->attributes['line'] = $x326->attributes['column'] = 0; }
throw new JSException($x326, 72, 9, '<image>/16_console.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x328 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 35, '<image>/16_console.js');
$_TypeError =& $x328[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x328;
$x329 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 35);
$x330 = $x329($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x330->class) && $x330->class === 'Error' && !isset($x330->properties['file']) && !isset($x330->properties['line']) && !isset($x330->properties['column'])) {$x330->properties['file'] = '<image>/16_console.js';$x330->properties['line'] = 72;$x330->properties['column'] = 35;$x330->attributes['file'] = $x330->attributes['line'] = $x330->attributes['column'] = 0; }
throw new JSException($x330, 72, 35, '<image>/16_console.js');
}
$x327 = JS::toObject($_Object, $global);
unset($x331, $W331, $S331, $U331);
$x332 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x327, JS::toString('getOwnPropertyNames', $global), 72, 35, '<image>/16_console.js');
$x331 =& $x332[0]; list(,$W331,$S331,$U331) = $x332;
if (!(is_object($x331) && isset($x331->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x335 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 35, '<image>/16_console.js');
$_TypeError =& $x335[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x335;
$x336 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 35);
$x337 = $x336($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x337->class) && $x337->class === 'Error' && !isset($x337->properties['file']) && !isset($x337->properties['line']) && !isset($x337->properties['column'])) {$x337->properties['file'] = '<image>/16_console.js';$x337->properties['line'] = 72;$x337->properties['column'] = 35;$x337->attributes['file'] = $x337->attributes['line'] = $x337->attributes['column'] = 0; }
throw new JSException($x337, 72, 35, '<image>/16_console.js');
}
$x333 = $x331->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 72, 35);
$x334 = $x333($global, $x327, $x331, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x338, $W338, $S338, $U338);
$x339 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x334, JS::toString('length', $global), 72, 38, '<image>/16_console.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
$x320 = JS::toPrimitive($x338, $global);
$x321 = JS::toPrimitive(0, $global);
$x322 = (is_string($x321) && is_string($x320) ? strcmp($x321, $x320) < 0 : (!is_nan($x340 = JS::toNumber($x321, $global)) && !is_nan($x341 = JS::toNumber($x320, $global)) && $x340 < $x341));
if (JS::toBoolean($x322, $global)) {
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x344 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 73, 16, '<image>/16_console.js');
$_TypeError =& $x344[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x344;
$x345 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 73, 16);
$x346 = $x345($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x346->class) && $x346->class === 'Error' && !isset($x346->properties['file']) && !isset($x346->properties['line']) && !isset($x346->properties['column'])) {$x346->properties['file'] = '<image>/16_console.js';$x346->properties['line'] = 73;$x346->properties['column'] = 16;$x346->attributes['file'] = $x346->attributes['line'] = $x346->attributes['column'] = 0; }
throw new JSException($x346, 73, 16, '<image>/16_console.js');
}
$x342 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 73, 16);
$x343 = $x342($global, $global, $_dumper, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x343;
unset($x349, $W349, $S349, $U349);
$x350 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_o, JS::toString('dump', $global), 74, 22, '<image>/16_console.js');
$x349 =& $x350[0]; list(,$W349,$S349,$U349) = $x350;
$x347 = JS::toPrimitive(' ', $global);
$x348 = JS::toPrimitive($x349, $global);
$x351 = (is_string($x347) || is_string($x348) ? JS::toString($x347, $global) . JS::toString($x348, $global) : JS::toNumber($x347, $global) + JS::toNumber($x348, $global));
$x352 = JS::toString('dump', $global);
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x353 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 74, 13, '<image>/16_console.js');
$_TypeError =& $x353[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x353;
$x354 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 74, 13);
$x355 = $x354($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x355->class) && $x355->class === 'Error' && !isset($x355->properties['file']) && !isset($x355->properties['line']) && !isset($x355->properties['column'])) {$x355->properties['file'] = '<image>/16_console.js';$x355->properties['line'] = 74;$x355->properties['column'] = 13;$x355->attributes['file'] = $x355->attributes['line'] = $x355->attributes['column'] = 0; }
throw new JSException($x355, 74, 13, '<image>/16_console.js');
}
$_o = JS::toObject($_o, $global);
unset($x356, $W356, $S356, $U356);
$x357 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_o, JS::toString($x352, $global), 74, 13, '<image>/16_console.js');
$x356 =& $x357[0]; list(,$W356,$S356,$U356) = $x357;
if ($U356 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties[$x352] = $x356; $x356 =& $_o->properties[$x352]; $_o->attributes[$x352] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U356 = FALSE; $W356 = TRUE; }
if (isset($_o->class) && $_o->class === 'Array') {  if (isset($_o->properties['length']) && $_o->properties['length'] !== JS::$undefined) { $x359 = $_o->properties['length']; }  else { $x359 = 0; } }
if (isset($S356)) {
$x360 = $S356->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 74, 13);
$x361 = $x360($global, $_o, $S356, array($x351), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x358 = $x361;
} else {
if (!$U356) {$x358 = $x351;if ($W356) { $x356 = $x351; }  }
else { $x358 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array') {if (is_int('dump') && 'dump' >= $_o->properties['length']) { $_o->properties['length'] = 'dump' + 1; }else if ($x352 === 'length' && is_int($x351) && $x359 > $x351) {  for ($i = $x351; $i < $x359; ++$i) {  unset($_o->properties[$i], $_o->attributes[$i]); }}};;
}
else {
$x362 = clone JS::$objectTemplate;
$x362->properties['multiline'] = false;
$x362->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x362->properties['dump'] = '';
$x362->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x362;;
};
$x363 = clone JS::$objectTemplate;
unset($x364, $W364, $S364, $U364);
$x365 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_o, JS::toString('multiline', $global), 80, 26, '<image>/16_console.js');
$x364 =& $x365[0]; list(,$W364,$S364,$U364) = $x365;
$x363->properties['multiline'] = $x364;
$x363->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x370 = JS::toPrimitive('[function', $global);
$x371 = JS::toPrimitive((isset($_v->name) ? " " .$_v->name : ""), $global);
unset($x372, $W372, $S372, $U372);
$x373 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_o, JS::toString('dump', $global), 84, 10, '<image>/16_console.js');
$x372 =& $x373[0]; list(,$W372,$S372,$U372) = $x373;
$x368 = JS::toPrimitive((is_string($x370) || is_string($x371) ? JS::toString($x370, $global) . JS::toString($x371, $global) : JS::toNumber($x370, $global) + JS::toNumber($x371, $global)), $global);
$x369 = JS::toPrimitive($x372, $global);
$x366 = JS::toPrimitive((is_string($x368) || is_string($x369) ? JS::toString($x368, $global) . JS::toString($x369, $global) : JS::toNumber($x368, $global) + JS::toNumber($x369, $global)), $global);
$x367 = JS::toPrimitive(']', $global);
$x363->properties['dump'] = (is_string($x366) || is_string($x367) ? JS::toString($x366, $global) . JS::toString($x367, $global) : JS::toNumber($x366, $global) + JS::toNumber($x367, $global));
$x363->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x363;;
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
for ($x374 = 0;; ++$x374) {
if ($x374 === 0) {
$x375 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x375;
}
if ($x374 !== 0) {
$x376 = ++$_i;
}
unset($x380, $W380, $S380, $U380);
$x381 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString('length', $global), 92, 23, '<image>/16_console.js');
$x380 =& $x381[0]; list(,$W380,$S380,$U380) = $x381;
$x377 = JS::toPrimitive($_i, $global);
$x378 = JS::toPrimitive($x380, $global);
$x379 = (is_string($x377) && is_string($x378) ? strcmp($x377, $x378) < 0 : (!is_nan($x382 = JS::toNumber($x377, $global)) && !is_nan($x383 = JS::toNumber($x378, $global)) && $x382 < $x383));
if (!JS::toBoolean($x379, $global)) { break; }

unset($x385, $W385, $S385, $U385);
$x386 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString($_i, $global), 93, 24, '<image>/16_console.js');
$x385 =& $x386[0]; list(,$W385,$S385,$U385) = $x386;
$x387 = JS::toPrimitive($_indent, $global);
$x388 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x391 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 93, 22, '<image>/16_console.js');
$_TypeError =& $x391[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x391;
$x392 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 93, 22);
$x393 = $x392($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x393->class) && $x393->class === 'Error' && !isset($x393->properties['file']) && !isset($x393->properties['line']) && !isset($x393->properties['column'])) {$x393->properties['file'] = '<image>/16_console.js';$x393->properties['line'] = 93;$x393->properties['column'] = 22;$x393->attributes['file'] = $x393->attributes['line'] = $x393->attributes['column'] = 0; }
throw new JSException($x393, 93, 22, '<image>/16_console.js');
}
$x389 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 93, 22);
$x390 = $x389($global, $global, $_dumper, array($x385, (is_string($x387) || is_string($x388) ? JS::toString($x387, $global) . JS::toString($x388, $global) : JS::toNumber($x387, $global) + JS::toNumber($x388, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x390;
unset($x394, $W394, $S394, $U394);
$x395 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('multiline', $global), 93, 44, '<image>/16_console.js');
$x394 =& $x395[0]; list(,$W394,$S394,$U394) = $x395;
$x384 = $x394;
if (!JS::toBoolean($x384, $global)) {
unset($x399, $W399, $S399, $U399);
$x400 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 93, 59, '<image>/16_console.js');
$x399 =& $x400[0]; list(,$W399,$S399,$U399) = $x400;
unset($x401, $W401, $S401, $U401);
$x402 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x399, JS::toString('length', $global), 93, 64, '<image>/16_console.js');
$x401 =& $x402[0]; list(,$W401,$S401,$U401) = $x402;
$x396 = JS::toPrimitive($x401, $global);
$x397 = JS::toPrimitive(40, $global);
$x398 = (is_string($x397) && is_string($x396) ? strcmp($x397, $x396) < 0 : (!is_nan($x403 = JS::toNumber($x397, $global)) && !is_nan($x404 = JS::toNumber($x396, $global)) && $x403 < $x404));
$x384 = $x398; }
if (JS::toBoolean($x384, $global)) {
$x405 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x405;;
};
unset($x406, $W406, $S406, $U406);
$x407 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 97, 12, '<image>/16_console.js');
$x406 =& $x407[0]; list(,$W406,$S406,$U406) = $x407;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x406;
$values[] =$_d;;
};
};
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x409 = array(), $x408 = JS::toObject($_v, $global); $x408; $x408 = $x408->prototype) {
foreach ($x408->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x409[$property])) { continue; }
$x409[$property] = TRUE;
$_k = $property;

$x410 = $_isArray;
if (JS::toBoolean($x410, $global)) {
unset($_String, $WString, $SString, $UString);
$x412 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('String', $global), 105, 21, '<image>/16_console.js');
$_String =& $x412[0]; list(,$WString,$SString,$UString) = $x412;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x413 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 105, 21, '<image>/16_console.js');
$_ReferenceError =& $x413[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x413;
$x414 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 21);
$x415 = $x414($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x415->class) && $x415->class === 'Error' && !isset($x415->properties['file']) && !isset($x415->properties['line']) && !isset($x415->properties['column'])) {$x415->properties['file'] = '<image>/16_console.js';$x415->properties['line'] = 105;$x415->properties['column'] = 21;$x415->attributes['file'] = $x415->attributes['line'] = $x415->attributes['column'] = 0; }
throw new JSException($x415, 105, 21, '<image>/16_console.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x416 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('Number', $global), 105, 28, '<image>/16_console.js');
$_Number =& $x416[0]; list(,$WNumber,$SNumber,$UNumber) = $x416;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x417 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 105, 28, '<image>/16_console.js');
$_ReferenceError =& $x417[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x417;
$x418 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 28);
$x419 = $x418($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x419->class) && $x419->class === 'Error' && !isset($x419->properties['file']) && !isset($x419->properties['line']) && !isset($x419->properties['column'])) {$x419->properties['file'] = '<image>/16_console.js';$x419->properties['line'] = 105;$x419->properties['column'] = 28;$x419->attributes['file'] = $x419->attributes['line'] = $x419->attributes['column'] = 0; }
throw new JSException($x419, 105, 28, '<image>/16_console.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x422 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 34, '<image>/16_console.js');
$_TypeError =& $x422[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x422;
$x423 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 34);
$x424 = $x423($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x424->class) && $x424->class === 'Error' && !isset($x424->properties['file']) && !isset($x424->properties['line']) && !isset($x424->properties['column'])) {$x424->properties['file'] = '<image>/16_console.js';$x424->properties['line'] = 105;$x424->properties['column'] = 34;$x424->attributes['file'] = $x424->attributes['line'] = $x424->attributes['column'] = 0; }
throw new JSException($x424, 105, 34, '<image>/16_console.js');
}
$x420 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 34);
$x421 = $x420($global, $global, $_Number, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x427 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 27, '<image>/16_console.js');
$_TypeError =& $x427[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x427;
$x428 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 27);
$x429 = $x428($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x429->class) && $x429->class === 'Error' && !isset($x429->properties['file']) && !isset($x429->properties['line']) && !isset($x429->properties['column'])) {$x429->properties['file'] = '<image>/16_console.js';$x429->properties['line'] = 105;$x429->properties['column'] = 27;$x429->attributes['file'] = $x429->attributes['line'] = $x429->attributes['column'] = 0; }
throw new JSException($x429, 105, 27, '<image>/16_console.js');
}
$x425 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 27);
$x426 = $x425($global, $global, $_String, array($x421), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x432 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 49, '<image>/16_console.js');
$_TypeError =& $x432[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x432;
$x433 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 49);
$x434 = $x433($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x434->class) && $x434->class === 'Error' && !isset($x434->properties['file']) && !isset($x434->properties['line']) && !isset($x434->properties['column'])) {$x434->properties['file'] = '<image>/16_console.js';$x434->properties['line'] = 105;$x434->properties['column'] = 49;$x434->attributes['file'] = $x434->attributes['line'] = $x434->attributes['column'] = 0; }
throw new JSException($x434, 105, 49, '<image>/16_console.js');
}
$x430 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 105, 49);
$x431 = $x430($global, $global, $_String, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x411 = (((gettype($x426) === gettype($x431) && $x426 === $x431))|| (((is_float($x426) || is_int($x426)) && (is_float($x431) || is_int($x431))) && $x426 == $x431));
$x410 = $x411; }
if (JS::toBoolean($x410, $global)) {
continue;;
};
unset($x436, $W436, $S436, $U436);
$x437 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_v, JS::toString($_k, $global), 107, 23, '<image>/16_console.js');
$x436 =& $x437[0]; list(,$W436,$S436,$U436) = $x437;
$x438 = JS::toPrimitive($_indent, $global);
$x439 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x442 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 107, 21, '<image>/16_console.js');
$_TypeError =& $x442[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x442;
$x443 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 107, 21);
$x444 = $x443($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x444->class) && $x444->class === 'Error' && !isset($x444->properties['file']) && !isset($x444->properties['line']) && !isset($x444->properties['column'])) {$x444->properties['file'] = '<image>/16_console.js';$x444->properties['line'] = 107;$x444->properties['column'] = 21;$x444->attributes['file'] = $x444->attributes['line'] = $x444->attributes['column'] = 0; }
throw new JSException($x444, 107, 21, '<image>/16_console.js');
}
$x440 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 107, 21);
$x441 = $x440($global, $global, $_dumper, array($x436, (is_string($x438) || is_string($x439) ? JS::toString($x438, $global) . JS::toString($x439, $global) : JS::toNumber($x438, $global) + JS::toNumber($x439, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x441;
unset($x445, $W445, $S445, $U445);
$x446 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('multiline', $global), 107, 43, '<image>/16_console.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
$x435 = $x445;
if (!JS::toBoolean($x435, $global)) {
unset($x450, $W450, $S450, $U450);
$x451 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 107, 58, '<image>/16_console.js');
$x450 =& $x451[0]; list(,$W450,$S450,$U450) = $x451;
unset($x452, $W452, $S452, $U452);
$x453 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x450, JS::toString('length', $global), 107, 63, '<image>/16_console.js');
$x452 =& $x453[0]; list(,$W452,$S452,$U452) = $x453;
$x447 = JS::toPrimitive($x452, $global);
$x448 = JS::toPrimitive(40, $global);
$x449 = (is_string($x448) && is_string($x447) ? strcmp($x448, $x447) < 0 : (!is_nan($x454 = JS::toNumber($x448, $global)) && !is_nan($x455 = JS::toNumber($x447, $global)) && $x454 < $x455));
$x435 = $x449; }
if (JS::toBoolean($x435, $global)) {
$x456 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x456;;
};
unset($x457, $W457, $S457, $U457);
$x458 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_d, JS::toString('dump', $global), 111, 11, '<image>/16_console.js');
$x457 =& $x458[0]; list(,$W457,$S457,$U457) = $x458;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x457;
$values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)
							?$_k: str_replace("\\/", "/", json_encode($_k))) . ": " .$_d;;
}
}
};
if (JS::toBoolean(empty($values), $global)) {
$x459 = clone JS::$objectTemplate;
$x459->properties['multiline'] = false;
$x459->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x460 = '[]';
} else {
$x460 = '{}';
}
$x459->properties['dump'] = $x460;
$x459->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x459;;
};
if (JS::toBoolean(count($values) > 5, $global)) {
$x461 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x461;;
};
$x462 = clone JS::$objectTemplate;
$x462->properties['multiline'] = $_multiline;
$x462->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x467 = '[ ';
} else {
$x467 = '{ ';
}
$x465 = JS::toPrimitive($x467, $global);
$x466 = JS::toPrimitive(implode(!$_multiline? ", " : ",\n" .$_indent. "  ", $values), $global);
if (JS::toBoolean($_isArray, $global)) {
$x468 = ' ]';
} else {
$x468 = ' }';
}
$x463 = JS::toPrimitive((is_string($x465) || is_string($x466) ? JS::toString($x465, $global) . JS::toString($x466, $global) : JS::toNumber($x465, $global) + JS::toNumber($x466, $global)), $global);
$x464 = JS::toPrimitive($x468, $global);
$x462->properties['dump'] = (is_string($x463) || is_string($x464) ? JS::toString($x463, $global) . JS::toString($x464, $global) : JS::toNumber($x463, $global) + JS::toNumber($x464, $global));
$x462->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x462;;
};
};
};
};
};
};
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x263=&$scope->properties[\'arguments\'];$x263->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x263->properties[$i]=$args[$i];$x263->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$scope->properties[\'indent\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_indent=&$scope->properties[\'indent\'];$Uindent=FALSE;$scope->properties[\'dumper\']=$fn;$_dumper=&$scope->properties[\'dumper\'];$global->scope[++$global->scope_sp]=$scope;$x264=$_indent;if(!JS::toBoolean($x264,$global)){$x264=\'\';}if($Uindent){$global->properties[\'indent\']=$_indent;$_indent=&$global->properties[\'indent\'];}$_indent=$x264;$x265=(((gettype($_v)===gettype(JS::$undefined)&&$_v===JS::$undefined))||(((is_float($_v)||is_int($_v))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_v==JS::$undefined));if(JS::toBoolean($x265,$global)){$x266=clone JS::$objectTemplate;$x266->properties[\'multiline\']=false;$x266->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x266->properties[\'dump\']=\'undefined\';$x266->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x266;}else{$x268=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x267=$x268;if(!JS::toBoolean($x267,$global)){$x270=$_v;$x270=($x270===JS::$undefined?\'undefined\':(is_int($x270)||is_float($x270)?\'number\':(is_bool($x270)?\'boolean\':(is_string($x270)?\'string\':(is_object($x270)&&isset($x270->call)?\'function\':\'object\')))));$x269=(((gettype($x270)===gettype(\'boolean\')&&$x270===\'boolean\'))||(((is_float($x270)||is_int($x270))&&(is_float(\'boolean\')||is_int(\'boolean\')))&&$x270==\'boolean\'));$x267=$x269;}if(JS::toBoolean($x267,$global)){$x271=clone JS::$objectTemplate;$x271->properties[\'multiline\']=false;$x271->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x271->properties[\'dump\']=json_encode($_v);$x271->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x271;}else{$x273=$_v;$x273=($x273===JS::$undefined?\'undefined\':(is_int($x273)||is_float($x273)?\'number\':(is_bool($x273)?\'boolean\':(is_string($x273)?\'string\':(is_object($x273)&&isset($x273->call)?\'function\':\'object\')))));$x272=(((gettype($x273)===gettype(\'number\')&&$x273===\'number\'))||(((is_float($x273)||is_int($x273))&&(is_float(\'number\')||is_int(\'number\')))&&$x273==\'number\'));if(JS::toBoolean($x272,$global)){$x274=clone JS::$objectTemplate;$x274->properties[\'multiline\']=false;$x274->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x276=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),57,48,\'<image>/16_console.js\');$_TypeError=&$x276[0];list(,$WTypeError,$STypeError,$UTypeError)=$x276;$x277=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x278=$x277($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x278->class)&&$x278->class===\'Error\'&&!isset($x278->properties[\'file\'])&&!isset($x278->properties[\'line\'])&&!isset($x278->properties[\'column\'])){$x278->properties[\'file\']=\'<image>/16_console.js\';$x278->properties[\'line\']=57;$x278->properties[\'column\']=48;$x278->attributes[\'file\']=$x278->attributes[\'line\']=$x278->attributes[\'column\']=0;}throw new JSException($x278,57,48,\'<image>/16_console.js\');}$x275=JS::toObject($_v,$global);unset($x279,$W279,$S279,$U279);$x280=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x275,JS::toString(\'toString\',$global),57,48,\'<image>/16_console.js\');$x279=&$x280[0];list(,$W279,$S279,$U279)=$x280;if(!(is_object($x279)&&isset($x279->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x283=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),57,48,\'<image>/16_console.js\');$_TypeError=&$x283[0];list(,$WTypeError,$STypeError,$UTypeError)=$x283;$x284=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x285=$x284($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x285->class)&&$x285->class===\'Error\'&&!isset($x285->properties[\'file\'])&&!isset($x285->properties[\'line\'])&&!isset($x285->properties[\'column\'])){$x285->properties[\'file\']=\'<image>/16_console.js\';$x285->properties[\'line\']=57;$x285->properties[\'column\']=48;$x285->attributes[\'file\']=$x285->attributes[\'line\']=$x285->attributes[\'column\']=0;}throw new JSException($x285,57,48,\'<image>/16_console.js\');}$x281=$x279->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',57,48);$x282=$x281($global,$x275,$x279,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x274->properties[\'dump\']=$x282;$x274->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x274;}else{$x287=$_v;$x287=($x287===JS::$undefined?\'undefined\':(is_int($x287)||is_float($x287)?\'number\':(is_bool($x287)?\'boolean\':(is_string($x287)?\'string\':(is_object($x287)&&isset($x287->call)?\'function\':\'object\')))));$x286=(((gettype($x287)===gettype(\'string\')&&$x287===\'string\'))||(((is_float($x287)||is_int($x287))&&(is_float(\'string\')||is_int(\'string\')))&&$x287==\'string\'));if(JS::toBoolean($x286,$global)){$x288=clone JS::$objectTemplate;$x288->properties[\'multiline\']=false;$x288->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x288->properties[\'dump\']=str_replace("\\\\/","/",json_encode($_v));$x288->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x288;}else{if(JS::toBoolean(isset($_v->class)&&$_v->class===\'Date\',$global)){$x289=clone JS::$objectTemplate;$x289->properties[\'multiline\']=false;$x289->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x295=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),63,59,\'<image>/16_console.js\');$_TypeError=&$x295[0];list(,$WTypeError,$STypeError,$UTypeError)=$x295;$x296=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',63,59);$x297=$x296($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x297->class)&&$x297->class===\'Error\'&&!isset($x297->properties[\'file\'])&&!isset($x297->properties[\'line\'])&&!isset($x297->properties[\'column\'])){$x297->properties[\'file\']=\'<image>/16_console.js\';$x297->properties[\'line\']=63;$x297->properties[\'column\']=59;$x297->attributes[\'file\']=$x297->attributes[\'line\']=$x297->attributes[\'column\']=0;}throw new JSException($x297,63,59,\'<image>/16_console.js\');}$x294=JS::toObject($_v,$global);unset($x298,$W298,$S298,$U298);$x299=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x294,JS::toString(\'toString\',$global),63,59,\'<image>/16_console.js\');$x298=&$x299[0];list(,$W298,$S298,$U298)=$x299;if(!(is_object($x298)&&isset($x298->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x302=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),63,59,\'<image>/16_console.js\');$_TypeError=&$x302[0];list(,$WTypeError,$STypeError,$UTypeError)=$x302;$x303=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',63,59);$x304=$x303($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x304->class)&&$x304->class===\'Error\'&&!isset($x304->properties[\'file\'])&&!isset($x304->properties[\'line\'])&&!isset($x304->properties[\'column\'])){$x304->properties[\'file\']=\'<image>/16_console.js\';$x304->properties[\'line\']=63;$x304->properties[\'column\']=59;$x304->attributes[\'file\']=$x304->attributes[\'line\']=$x304->attributes[\'column\']=0;}throw new JSException($x304,63,59,\'<image>/16_console.js\');}$x300=$x298->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',63,59);$x301=$x300($global,$x294,$x298,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x292=JS::toPrimitive(\'[date \',$global);$x293=JS::toPrimitive($x301,$global);$x290=JS::toPrimitive((is_string($x292)||is_string($x293)?JS::toString($x292,$global).JS::toString($x293,$global):JS::toNumber($x292,$global)+JS::toNumber($x293,$global)),$global);$x291=JS::toPrimitive(\']\',$global);$x289->properties[\'dump\']=(is_string($x290)||is_string($x291)?JS::toString($x290,$global).JS::toString($x291,$global):JS::toNumber($x290,$global)+JS::toNumber($x291,$global));$x289->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x289;}else{if(JS::toBoolean(isset($_v->call),$global)){$x305=clone JS::$objectTemplate;$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=$x305;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x307=array(),$x306=JS::toObject($_v,$global);$x306;$x306=$x306->prototype){foreach($x306->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x307[$property])){continue;}$x307[$property]=TRUE;$_k=$property;unset($x308,$W308,$S308,$U308);$x309=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString($_k,$global),69,14,\'<image>/16_console.js\');$x308=&$x309[0];list(,$W308,$S308,$U308)=$x309;$x310=JS::toString($_k,$global);if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x311=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),69,11,\'<image>/16_console.js\');$_TypeError=&$x311[0];list(,$WTypeError,$STypeError,$UTypeError)=$x311;$x312=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,11);$x313=$x312($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x313->class)&&$x313->class===\'Error\'&&!isset($x313->properties[\'file\'])&&!isset($x313->properties[\'line\'])&&!isset($x313->properties[\'column\'])){$x313->properties[\'file\']=\'<image>/16_console.js\';$x313->properties[\'line\']=69;$x313->properties[\'column\']=11;$x313->attributes[\'file\']=$x313->attributes[\'line\']=$x313->attributes[\'column\']=0;}throw new JSException($x313,69,11,\'<image>/16_console.js\');}$_o=JS::toObject($_o,$global);unset($x314,$W314,$S314,$U314);$x315=_ef60fce145dac950f813cdc5f2be6b9c_8($global,$scope,$_o,JS::toString($x310,$global),69,11,\'<image>/16_console.js\');$x314=&$x315[0];list(,$W314,$S314,$U314)=$x315;if($U314&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[$x310]=$x314;$x314=&$_o->properties[$x310];$_o->attributes[$x310]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U314=FALSE;$W314=TRUE;}if(isset($_o->class)&&$_o->class===\'Array\'){if(isset($_o->properties[\'length\'])&&$_o->properties[\'length\']!==JS::$undefined){$x317=$_o->properties[\'length\'];}else{$x317=0;}}if(isset($S314)){$x318=$S314->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',69,11);$x319=$x318($global,$_o,$S314,array($x308),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x316=$x319;}else{if(!$U314){$x316=$x308;if($W314){$x314=$x308;}}else{$x316=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'){if(is_int($_k)&&$_k>=$_o->properties[\'length\']){$_o->properties[\'length\']=$_k+1;}else if($x310===\'length\'&&is_int($x308)&&$x317>$x308){for($i=$x308;$i<$x317;++$i){unset($_o->properties[$i],$_o->attributes[$i]);}}}}}}unset($_Object,$WObject,$SObject,$UObject);$x323=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Object\',$global),72,9,\'<image>/16_console.js\');$_Object=&$x323[0];list(,$WObject,$SObject,$UObject)=$x323;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x324=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),72,9,\'<image>/16_console.js\');$_ReferenceError=&$x324[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x324;$x325=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,9);$x326=$x325($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x326->class)&&$x326->class===\'Error\'&&!isset($x326->properties[\'file\'])&&!isset($x326->properties[\'line\'])&&!isset($x326->properties[\'column\'])){$x326->properties[\'file\']=\'<image>/16_console.js\';$x326->properties[\'line\']=72;$x326->properties[\'column\']=9;$x326->attributes[\'file\']=$x326->attributes[\'line\']=$x326->attributes[\'column\']=0;}throw new JSException($x326,72,9,\'<image>/16_console.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x328=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,35,\'<image>/16_console.js\');$_TypeError=&$x328[0];list(,$WTypeError,$STypeError,$UTypeError)=$x328;$x329=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,35);$x330=$x329($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x330->class)&&$x330->class===\'Error\'&&!isset($x330->properties[\'file\'])&&!isset($x330->properties[\'line\'])&&!isset($x330->properties[\'column\'])){$x330->properties[\'file\']=\'<image>/16_console.js\';$x330->properties[\'line\']=72;$x330->properties[\'column\']=35;$x330->attributes[\'file\']=$x330->attributes[\'line\']=$x330->attributes[\'column\']=0;}throw new JSException($x330,72,35,\'<image>/16_console.js\');}$x327=JS::toObject($_Object,$global);unset($x331,$W331,$S331,$U331);$x332=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x327,JS::toString(\'getOwnPropertyNames\',$global),72,35,\'<image>/16_console.js\');$x331=&$x332[0];list(,$W331,$S331,$U331)=$x332;if(!(is_object($x331)&&isset($x331->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x335=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,35,\'<image>/16_console.js\');$_TypeError=&$x335[0];list(,$WTypeError,$STypeError,$UTypeError)=$x335;$x336=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,35);$x337=$x336($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x337->class)&&$x337->class===\'Error\'&&!isset($x337->properties[\'file\'])&&!isset($x337->properties[\'line\'])&&!isset($x337->properties[\'column\'])){$x337->properties[\'file\']=\'<image>/16_console.js\';$x337->properties[\'line\']=72;$x337->properties[\'column\']=35;$x337->attributes[\'file\']=$x337->attributes[\'line\']=$x337->attributes[\'column\']=0;}throw new JSException($x337,72,35,\'<image>/16_console.js\');}$x333=$x331->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',72,35);$x334=$x333($global,$x327,$x331,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x338,$W338,$S338,$U338);$x339=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x334,JS::toString(\'length\',$global),72,38,\'<image>/16_console.js\');$x338=&$x339[0];list(,$W338,$S338,$U338)=$x339;$x320=JS::toPrimitive($x338,$global);$x321=JS::toPrimitive(0,$global);$x322=(is_string($x321)&&is_string($x320)?strcmp($x321,$x320)<0:(!is_nan($x340=JS::toNumber($x321,$global))&&!is_nan($x341=JS::toNumber($x320,$global))&&$x340<$x341));if(JS::toBoolean($x322,$global)){if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x344=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),73,16,\'<image>/16_console.js\');$_TypeError=&$x344[0];list(,$WTypeError,$STypeError,$UTypeError)=$x344;$x345=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',73,16);$x346=$x345($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x346->class)&&$x346->class===\'Error\'&&!isset($x346->properties[\'file\'])&&!isset($x346->properties[\'line\'])&&!isset($x346->properties[\'column\'])){$x346->properties[\'file\']=\'<image>/16_console.js\';$x346->properties[\'line\']=73;$x346->properties[\'column\']=16;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,73,16,\'<image>/16_console.js\');}$x342=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',73,16);$x343=$x342($global,$global,$_dumper,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x343;unset($x349,$W349,$S349,$U349);$x350=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_o,JS::toString(\'dump\',$global),74,22,\'<image>/16_console.js\');$x349=&$x350[0];list(,$W349,$S349,$U349)=$x350;$x347=JS::toPrimitive(\' \',$global);$x348=JS::toPrimitive($x349,$global);$x351=(is_string($x347)||is_string($x348)?JS::toString($x347,$global).JS::toString($x348,$global):JS::toNumber($x347,$global)+JS::toNumber($x348,$global));$x352=JS::toString(\'dump\',$global);if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x353=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),74,13,\'<image>/16_console.js\');$_TypeError=&$x353[0];list(,$WTypeError,$STypeError,$UTypeError)=$x353;$x354=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',74,13);$x355=$x354($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x355->class)&&$x355->class===\'Error\'&&!isset($x355->properties[\'file\'])&&!isset($x355->properties[\'line\'])&&!isset($x355->properties[\'column\'])){$x355->properties[\'file\']=\'<image>/16_console.js\';$x355->properties[\'line\']=74;$x355->properties[\'column\']=13;$x355->attributes[\'file\']=$x355->attributes[\'line\']=$x355->attributes[\'column\']=0;}throw new JSException($x355,74,13,\'<image>/16_console.js\');}$_o=JS::toObject($_o,$global);unset($x356,$W356,$S356,$U356);$x357=_ef60fce145dac950f813cdc5f2be6b9c_8($global,$scope,$_o,JS::toString($x352,$global),74,13,\'<image>/16_console.js\');$x356=&$x357[0];list(,$W356,$S356,$U356)=$x357;if($U356&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[$x352]=$x356;$x356=&$_o->properties[$x352];$_o->attributes[$x352]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U356=FALSE;$W356=TRUE;}if(isset($_o->class)&&$_o->class===\'Array\'){if(isset($_o->properties[\'length\'])&&$_o->properties[\'length\']!==JS::$undefined){$x359=$_o->properties[\'length\'];}else{$x359=0;}}if(isset($S356)){$x360=$S356->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',74,13);$x361=$x360($global,$_o,$S356,array($x351),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x358=$x361;}else{if(!$U356){$x358=$x351;if($W356){$x356=$x351;}}else{$x358=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'){if(is_int(\'dump\')&&\'dump\'>=$_o->properties[\'length\']){$_o->properties[\'length\']=\'dump\'+1;}else if($x352===\'length\'&&is_int($x351)&&$x359>$x351){for($i=$x351;$i<$x359;++$i){unset($_o->properties[$i],$_o->attributes[$i]);}}}}else{$x362=clone JS::$objectTemplate;$x362->properties[\'multiline\']=false;$x362->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x362->properties[\'dump\']=\'\';$x362->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x362;}$x363=clone JS::$objectTemplate;unset($x364,$W364,$S364,$U364);$x365=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_o,JS::toString(\'multiline\',$global),80,26,\'<image>/16_console.js\');$x364=&$x365[0];list(,$W364,$S364,$U364)=$x365;$x363->properties[\'multiline\']=$x364;$x363->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x370=JS::toPrimitive(\'[function\',$global);$x371=JS::toPrimitive((isset($_v->name)?" ".$_v->name:""),$global);unset($x372,$W372,$S372,$U372);$x373=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_o,JS::toString(\'dump\',$global),84,10,\'<image>/16_console.js\');$x372=&$x373[0];list(,$W372,$S372,$U372)=$x373;$x368=JS::toPrimitive((is_string($x370)||is_string($x371)?JS::toString($x370,$global).JS::toString($x371,$global):JS::toNumber($x370,$global)+JS::toNumber($x371,$global)),$global);$x369=JS::toPrimitive($x372,$global);$x366=JS::toPrimitive((is_string($x368)||is_string($x369)?JS::toString($x368,$global).JS::toString($x369,$global):JS::toNumber($x368,$global)+JS::toNumber($x369,$global)),$global);$x367=JS::toPrimitive(\']\',$global);$x363->properties[\'dump\']=(is_string($x366)||is_string($x367)?JS::toString($x366,$global).JS::toString($x367,$global):JS::toNumber($x366,$global)+JS::toNumber($x367,$global));$x363->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x363;}else{$scope->properties[\'multiline\']=JS::$undefined;$_multiline=&$scope->properties[\'multiline\'];$Umultiline=FALSE;$_multiline=false;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::$undefined;$scope->properties[\'isArray\']=JS::$undefined;$_isArray=&$scope->properties[\'isArray\'];$UisArray=FALSE;$_isArray=isset($_v->class)&&$_v->class==="Array";$values=array();if(JS::toBoolean($_isArray,$global)){for($x374=0;;++$x374){if($x374===0){$x375=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x375;}if($x374!==0){$x376=++$_i;}unset($x380,$W380,$S380,$U380);$x381=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString(\'length\',$global),92,23,\'<image>/16_console.js\');$x380=&$x381[0];list(,$W380,$S380,$U380)=$x381;$x377=JS::toPrimitive($_i,$global);$x378=JS::toPrimitive($x380,$global);$x379=(is_string($x377)&&is_string($x378)?strcmp($x377,$x378)<0:(!is_nan($x382=JS::toNumber($x377,$global))&&!is_nan($x383=JS::toNumber($x378,$global))&&$x382<$x383));if(!JS::toBoolean($x379,$global)){break;}unset($x385,$W385,$S385,$U385);$x386=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString($_i,$global),93,24,\'<image>/16_console.js\');$x385=&$x386[0];list(,$W385,$S385,$U385)=$x386;$x387=JS::toPrimitive($_indent,$global);$x388=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x391=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),93,22,\'<image>/16_console.js\');$_TypeError=&$x391[0];list(,$WTypeError,$STypeError,$UTypeError)=$x391;$x392=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',93,22);$x393=$x392($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x393->class)&&$x393->class===\'Error\'&&!isset($x393->properties[\'file\'])&&!isset($x393->properties[\'line\'])&&!isset($x393->properties[\'column\'])){$x393->properties[\'file\']=\'<image>/16_console.js\';$x393->properties[\'line\']=93;$x393->properties[\'column\']=22;$x393->attributes[\'file\']=$x393->attributes[\'line\']=$x393->attributes[\'column\']=0;}throw new JSException($x393,93,22,\'<image>/16_console.js\');}$x389=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',93,22);$x390=$x389($global,$global,$_dumper,array($x385,(is_string($x387)||is_string($x388)?JS::toString($x387,$global).JS::toString($x388,$global):JS::toNumber($x387,$global)+JS::toNumber($x388,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x390;unset($x394,$W394,$S394,$U394);$x395=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'multiline\',$global),93,44,\'<image>/16_console.js\');$x394=&$x395[0];list(,$W394,$S394,$U394)=$x395;$x384=$x394;if(!JS::toBoolean($x384,$global)){unset($x399,$W399,$S399,$U399);$x400=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),93,59,\'<image>/16_console.js\');$x399=&$x400[0];list(,$W399,$S399,$U399)=$x400;unset($x401,$W401,$S401,$U401);$x402=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x399,JS::toString(\'length\',$global),93,64,\'<image>/16_console.js\');$x401=&$x402[0];list(,$W401,$S401,$U401)=$x402;$x396=JS::toPrimitive($x401,$global);$x397=JS::toPrimitive(40,$global);$x398=(is_string($x397)&&is_string($x396)?strcmp($x397,$x396)<0:(!is_nan($x403=JS::toNumber($x397,$global))&&!is_nan($x404=JS::toNumber($x396,$global))&&$x403<$x404));$x384=$x398;}if(JS::toBoolean($x384,$global)){$x405=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x405;}unset($x406,$W406,$S406,$U406);$x407=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),97,12,\'<image>/16_console.js\');$x406=&$x407[0];list(,$W406,$S406,$U406)=$x407;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x406;$values[]=$_d;}}if($_v!==JS::$undefined&&$_v!==NULL){for($x409=array(),$x408=JS::toObject($_v,$global);$x408;$x408=$x408->prototype){foreach($x408->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x409[$property])){continue;}$x409[$property]=TRUE;$_k=$property;$x410=$_isArray;if(JS::toBoolean($x410,$global)){unset($_String,$WString,$SString,$UString);$x412=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'String\',$global),105,21,\'<image>/16_console.js\');$_String=&$x412[0];list(,$WString,$SString,$UString)=$x412;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x413=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),105,21,\'<image>/16_console.js\');$_ReferenceError=&$x413[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x413;$x414=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,21);$x415=$x414($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x415->class)&&$x415->class===\'Error\'&&!isset($x415->properties[\'file\'])&&!isset($x415->properties[\'line\'])&&!isset($x415->properties[\'column\'])){$x415->properties[\'file\']=\'<image>/16_console.js\';$x415->properties[\'line\']=105;$x415->properties[\'column\']=21;$x415->attributes[\'file\']=$x415->attributes[\'line\']=$x415->attributes[\'column\']=0;}throw new JSException($x415,105,21,\'<image>/16_console.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x416=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'Number\',$global),105,28,\'<image>/16_console.js\');$_Number=&$x416[0];list(,$WNumber,$SNumber,$UNumber)=$x416;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x417=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),105,28,\'<image>/16_console.js\');$_ReferenceError=&$x417[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x417;$x418=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,28);$x419=$x418($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x419->class)&&$x419->class===\'Error\'&&!isset($x419->properties[\'file\'])&&!isset($x419->properties[\'line\'])&&!isset($x419->properties[\'column\'])){$x419->properties[\'file\']=\'<image>/16_console.js\';$x419->properties[\'line\']=105;$x419->properties[\'column\']=28;$x419->attributes[\'file\']=$x419->attributes[\'line\']=$x419->attributes[\'column\']=0;}throw new JSException($x419,105,28,\'<image>/16_console.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x422=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,34,\'<image>/16_console.js\');$_TypeError=&$x422[0];list(,$WTypeError,$STypeError,$UTypeError)=$x422;$x423=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,34);$x424=$x423($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x424->class)&&$x424->class===\'Error\'&&!isset($x424->properties[\'file\'])&&!isset($x424->properties[\'line\'])&&!isset($x424->properties[\'column\'])){$x424->properties[\'file\']=\'<image>/16_console.js\';$x424->properties[\'line\']=105;$x424->properties[\'column\']=34;$x424->attributes[\'file\']=$x424->attributes[\'line\']=$x424->attributes[\'column\']=0;}throw new JSException($x424,105,34,\'<image>/16_console.js\');}$x420=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,34);$x421=$x420($global,$global,$_Number,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x427=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,27,\'<image>/16_console.js\');$_TypeError=&$x427[0];list(,$WTypeError,$STypeError,$UTypeError)=$x427;$x428=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,27);$x429=$x428($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x429->class)&&$x429->class===\'Error\'&&!isset($x429->properties[\'file\'])&&!isset($x429->properties[\'line\'])&&!isset($x429->properties[\'column\'])){$x429->properties[\'file\']=\'<image>/16_console.js\';$x429->properties[\'line\']=105;$x429->properties[\'column\']=27;$x429->attributes[\'file\']=$x429->attributes[\'line\']=$x429->attributes[\'column\']=0;}throw new JSException($x429,105,27,\'<image>/16_console.js\');}$x425=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,27);$x426=$x425($global,$global,$_String,array($x421),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x432=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),105,49,\'<image>/16_console.js\');$_TypeError=&$x432[0];list(,$WTypeError,$STypeError,$UTypeError)=$x432;$x433=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,49);$x434=$x433($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x434->class)&&$x434->class===\'Error\'&&!isset($x434->properties[\'file\'])&&!isset($x434->properties[\'line\'])&&!isset($x434->properties[\'column\'])){$x434->properties[\'file\']=\'<image>/16_console.js\';$x434->properties[\'line\']=105;$x434->properties[\'column\']=49;$x434->attributes[\'file\']=$x434->attributes[\'line\']=$x434->attributes[\'column\']=0;}throw new JSException($x434,105,49,\'<image>/16_console.js\');}$x430=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',105,49);$x431=$x430($global,$global,$_String,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x411=(((gettype($x426)===gettype($x431)&&$x426===$x431))||(((is_float($x426)||is_int($x426))&&(is_float($x431)||is_int($x431)))&&$x426==$x431));$x410=$x411;}if(JS::toBoolean($x410,$global)){continue;}unset($x436,$W436,$S436,$U436);$x437=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_v,JS::toString($_k,$global),107,23,\'<image>/16_console.js\');$x436=&$x437[0];list(,$W436,$S436,$U436)=$x437;$x438=JS::toPrimitive($_indent,$global);$x439=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x442=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),107,21,\'<image>/16_console.js\');$_TypeError=&$x442[0];list(,$WTypeError,$STypeError,$UTypeError)=$x442;$x443=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',107,21);$x444=$x443($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x444->class)&&$x444->class===\'Error\'&&!isset($x444->properties[\'file\'])&&!isset($x444->properties[\'line\'])&&!isset($x444->properties[\'column\'])){$x444->properties[\'file\']=\'<image>/16_console.js\';$x444->properties[\'line\']=107;$x444->properties[\'column\']=21;$x444->attributes[\'file\']=$x444->attributes[\'line\']=$x444->attributes[\'column\']=0;}throw new JSException($x444,107,21,\'<image>/16_console.js\');}$x440=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',107,21);$x441=$x440($global,$global,$_dumper,array($x436,(is_string($x438)||is_string($x439)?JS::toString($x438,$global).JS::toString($x439,$global):JS::toNumber($x438,$global)+JS::toNumber($x439,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x441;unset($x445,$W445,$S445,$U445);$x446=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'multiline\',$global),107,43,\'<image>/16_console.js\');$x445=&$x446[0];list(,$W445,$S445,$U445)=$x446;$x435=$x445;if(!JS::toBoolean($x435,$global)){unset($x450,$W450,$S450,$U450);$x451=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),107,58,\'<image>/16_console.js\');$x450=&$x451[0];list(,$W450,$S450,$U450)=$x451;unset($x452,$W452,$S452,$U452);$x453=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x450,JS::toString(\'length\',$global),107,63,\'<image>/16_console.js\');$x452=&$x453[0];list(,$W452,$S452,$U452)=$x453;$x447=JS::toPrimitive($x452,$global);$x448=JS::toPrimitive(40,$global);$x449=(is_string($x448)&&is_string($x447)?strcmp($x448,$x447)<0:(!is_nan($x454=JS::toNumber($x448,$global))&&!is_nan($x455=JS::toNumber($x447,$global))&&$x454<$x455));$x435=$x449;}if(JS::toBoolean($x435,$global)){$x456=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x456;}unset($x457,$W457,$S457,$U457);$x458=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$_d,JS::toString(\'dump\',$global),111,11,\'<image>/16_console.js\');$x457=&$x458[0];list(,$W457,$S457,$U457)=$x458;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x457;$values[]=(preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)?$_k:str_replace("\\\\/","/",json_encode($_k))).": ".$_d;}}}if(JS::toBoolean(empty($values),$global)){$x459=clone JS::$objectTemplate;$x459->properties[\'multiline\']=false;$x459->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x460=\'[]\';}else{$x460=\'{}\';}$x459->properties[\'dump\']=$x460;$x459->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x459;}if(JS::toBoolean(count($values)>5,$global)){$x461=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x461;}$x462=clone JS::$objectTemplate;$x462->properties[\'multiline\']=$_multiline;$x462->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x467=\'[ \';}else{$x467=\'{ \';}$x465=JS::toPrimitive($x467,$global);$x466=JS::toPrimitive(implode(!$_multiline?", ":",\\n".$_indent."  ",$values),$global);if(JS::toBoolean($_isArray,$global)){$x468=\' ]\';}else{$x468=\' }\';}$x463=JS::toPrimitive((is_string($x465)||is_string($x466)?JS::toString($x465,$global).JS::toString($x466,$global):JS::toNumber($x465,$global)+JS::toNumber($x466,$global)),$global);$x464=JS::toPrimitive($x468,$global);$x462->properties[\'dump\']=(is_string($x463)||is_string($x464)?JS::toString($x463,$global).JS::toString($x464,$global):JS::toNumber($x463,$global)+JS::toNumber($x464,$global));$x462->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x462;}}}}}}return JS::$undefined;}', "\n";
function _ef60fce145dac950f813cdc5f2be6b9c_10($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['object'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_object =& $scope->properties['object'];
$Uobject = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x469 = clone JS::$functionTemplate; $x469->call = '_ef60fce145dac950f813cdc5f2be6b9c_11'; $x469->parameters = array (
  0 => 'v',
  1 => 'indent',
); $x469->name = 'dumper'; $x469->scope = $scope; $x469->properties['prototype'] = clone JS::$objectTemplate; $x469->attributes['prototype'] = JS::WRITABLE; $x469->properties['prototype']->properties['constructor'] = $x469; $x469->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x469->properties['length'] = 2; $x469->attributes['length'] = 0;
$scope->properties['dumper'] = JS::$undefined; $_dumper =& $scope->properties['dumper'];
$Udumper = FALSE;
$_dumper = $x469;
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x472 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 16, '<image>/16_console.js');
$_TypeError =& $x472[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x472;
$x473 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 133, 16);
$x474 = $x473($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x474->class) && $x474->class === 'Error' && !isset($x474->properties['file']) && !isset($x474->properties['line']) && !isset($x474->properties['column'])) {$x474->properties['file'] = '<image>/16_console.js';$x474->properties['line'] = 133;$x474->properties['column'] = 16;$x474->attributes['file'] = $x474->attributes['line'] = $x474->attributes['column'] = 0; }
throw new JSException($x474, 133, 16, '<image>/16_console.js');
}
$x470 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 133, 16);
$x471 = $x470($global, $global, $_dumper, array($_object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x475, $W475, $S475, $U475);
$x476 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $x471, JS::toString('dump', $global), 133, 24, '<image>/16_console.js');
$x475 =& $x476[0]; list(,$W475,$S475,$U475) = $x476;
return $x475;
;
return JS::$undefined;
}
echo 'function _ef60fce145dac950f813cdc5f2be6b9c_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x261=&$scope->properties[\'arguments\'];$x261->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x261->properties[$i]=$args[$i];$x261->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'object\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_object=&$scope->properties[\'object\'];$Uobject=FALSE;$global->scope[++$global->scope_sp]=$scope;$x469=clone JS::$functionTemplate;$x469->call=\'_ef60fce145dac950f813cdc5f2be6b9c_11\';$x469->parameters=array(0=>\'v\',1=>\'indent\',);$x469->name=\'dumper\';$x469->scope=$scope;$x469->properties[\'prototype\']=clone JS::$objectTemplate;$x469->attributes[\'prototype\']=JS::WRITABLE;$x469->properties[\'prototype\']->properties[\'constructor\']=$x469;$x469->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x469->properties[\'length\']=2;$x469->attributes[\'length\']=0;$scope->properties[\'dumper\']=JS::$undefined;$_dumper=&$scope->properties[\'dumper\'];$Udumper=FALSE;$_dumper=$x469;if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x472=_ef60fce145dac950f813cdc5f2be6b9c_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,16,\'<image>/16_console.js\');$_TypeError=&$x472[0];list(,$WTypeError,$STypeError,$UTypeError)=$x472;$x473=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',133,16);$x474=$x473($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x474->class)&&$x474->class===\'Error\'&&!isset($x474->properties[\'file\'])&&!isset($x474->properties[\'line\'])&&!isset($x474->properties[\'column\'])){$x474->properties[\'file\']=\'<image>/16_console.js\';$x474->properties[\'line\']=133;$x474->properties[\'column\']=16;$x474->attributes[\'file\']=$x474->attributes[\'line\']=$x474->attributes[\'column\']=0;}throw new JSException($x474,133,16,\'<image>/16_console.js\');}$x470=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/16_console.js\',133,16);$x471=$x470($global,$global,$_dumper,array($_object),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x475,$W475,$S475,$U475);$x476=_ef60fce145dac950f813cdc5f2be6b9c_4($global,$scope,$x471,JS::toString(\'dump\',$global),133,24,\'<image>/16_console.js\');$x475=&$x476[0];list(,$W475,$S475,$U475)=$x476;return$x475;return JS::$undefined;}', "\n";
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
$x216 = clone JS::$functionTemplate; $x216->call = '_ef60fce145dac950f813cdc5f2be6b9c_7'; $x216->parameters = array (
  0 => 'label',
); $x216->scope = $scope; $x216->properties['prototype'] = clone JS::$objectTemplate; $x216->attributes['prototype'] = JS::WRITABLE; $x216->properties['prototype']->properties['constructor'] = $x216; $x216->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x216->properties['length'] = 1; $x216->attributes['length'] = 0;
$x0->properties['time'] = $x216;
$x0->attributes['time'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x259 = clone JS::$functionTemplate; $x259->call = '_ef60fce145dac950f813cdc5f2be6b9c_9'; $x259->parameters = array (
  0 => 'label',
); $x259->scope = $scope; $x259->properties['prototype'] = clone JS::$objectTemplate; $x259->attributes['prototype'] = JS::WRITABLE; $x259->properties['prototype']->properties['constructor'] = $x259; $x259->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x259->properties['length'] = 1; $x259->attributes['length'] = 0;
$x0->properties['timeEnd'] = $x259;
$x0->attributes['timeEnd'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x477 = clone JS::$functionTemplate; $x477->call = '_ef60fce145dac950f813cdc5f2be6b9c_10'; $x477->parameters = array (
  0 => 'object',
); $x477->scope = $scope; $x477->properties['prototype'] = clone JS::$objectTemplate; $x477->attributes['prototype'] = JS::WRITABLE; $x477->properties['prototype']->properties['constructor'] = $x477; $x477->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x477->properties['length'] = 1; $x477->attributes['length'] = 0;
$x0->properties['inspect'] = $x477;
$x0->attributes['inspect'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['console'] = JS::$undefined; $_console =& $scope->properties['console'];
$Uconsole = FALSE;
$_console = $x0;
unset($x478, $W478, $S478, $U478);
$x479 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_console, JS::toString('log', $global), 137, 23, '<image>/16_console.js');
$x478 =& $x479[0]; list(,$W478,$S478,$U478) = $x479;
$x480 = JS::toString('info', $global);
if ($_console === JS::$undefined || $_console === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x481 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 137, 14, '<image>/16_console.js');
$_TypeError =& $x481[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x481;
$x482 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 137, 14);
$x483 = $x482($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x483->class) && $x483->class === 'Error' && !isset($x483->properties['file']) && !isset($x483->properties['line']) && !isset($x483->properties['column'])) {$x483->properties['file'] = '<image>/16_console.js';$x483->properties['line'] = 137;$x483->properties['column'] = 14;$x483->attributes['file'] = $x483->attributes['line'] = $x483->attributes['column'] = 0; }
throw new JSException($x483, 137, 14, '<image>/16_console.js');
}
$_console = JS::toObject($_console, $global);
unset($x484, $W484, $S484, $U484);
$x485 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_console, JS::toString($x480, $global), 137, 14, '<image>/16_console.js');
$x484 =& $x485[0]; list(,$W484,$S484,$U484) = $x485;
if ($U484 && (!isset($_console->extensible) || $_console->extensible)) {$_console->properties[$x480] = $x484; $x484 =& $_console->properties[$x480]; $_console->attributes[$x480] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U484 = FALSE; $W484 = TRUE; }
if (isset($_console->class) && $_console->class === 'Array') {  if (isset($_console->properties['length']) && $_console->properties['length'] !== JS::$undefined) { $x487 = $_console->properties['length']; }  else { $x487 = 0; } }
if (isset($S484)) {
$x488 = $S484->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 137, 14);
$x489 = $x488($global, $_console, $S484, array($x478), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x486 = $x489;
} else {
if (!$U484) {$x486 = $x478;if ($W484) { $x484 = $x478; }  }
else { $x486 = JS::$undefined; }
}
if (isset($_console->class) && $_console->class === 'Array') {if (is_int('info') && 'info' >= $_console->properties['length']) { $_console->properties['length'] = 'info' + 1; }else if ($x480 === 'length' && is_int($x478) && $x487 > $x478) {  for ($i = $x478; $i < $x487; ++$i) {  unset($_console->properties[$i], $_console->attributes[$i]); }}};
unset($x490, $W490, $S490, $U490);
$x491 = _ef60fce145dac950f813cdc5f2be6b9c_4($global, $scope, $_console, JS::toString('error', $global), 138, 23, '<image>/16_console.js');
$x490 =& $x491[0]; list(,$W490,$S490,$U490) = $x491;
$x492 = JS::toString('warn', $global);
if ($_console === JS::$undefined || $_console === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x493 = _ef60fce145dac950f813cdc5f2be6b9c_3($global, $scope, $scope, JS::toString('TypeError', $global), 138, 14, '<image>/16_console.js');
$_TypeError =& $x493[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x493;
$x494 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 138, 14);
$x495 = $x494($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x495->class) && $x495->class === 'Error' && !isset($x495->properties['file']) && !isset($x495->properties['line']) && !isset($x495->properties['column'])) {$x495->properties['file'] = '<image>/16_console.js';$x495->properties['line'] = 138;$x495->properties['column'] = 14;$x495->attributes['file'] = $x495->attributes['line'] = $x495->attributes['column'] = 0; }
throw new JSException($x495, 138, 14, '<image>/16_console.js');
}
$_console = JS::toObject($_console, $global);
unset($x496, $W496, $S496, $U496);
$x497 = _ef60fce145dac950f813cdc5f2be6b9c_8($global, $scope, $_console, JS::toString($x492, $global), 138, 14, '<image>/16_console.js');
$x496 =& $x497[0]; list(,$W496,$S496,$U496) = $x497;
if ($U496 && (!isset($_console->extensible) || $_console->extensible)) {$_console->properties[$x492] = $x496; $x496 =& $_console->properties[$x492]; $_console->attributes[$x492] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U496 = FALSE; $W496 = TRUE; }
if (isset($_console->class) && $_console->class === 'Array') {  if (isset($_console->properties['length']) && $_console->properties['length'] !== JS::$undefined) { $x499 = $_console->properties['length']; }  else { $x499 = 0; } }
if (isset($S496)) {
$x500 = $S496->call;
$global->trace[++$global->trace_sp] = array('<image>/16_console.js', 138, 14);
$x501 = $x500($global, $_console, $S496, array($x490), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x498 = $x501;
} else {
if (!$U496) {$x498 = $x490;if ($W496) { $x496 = $x490; }  }
else { $x498 = JS::$undefined; }
}
if (isset($_console->class) && $_console->class === 'Array') {if (is_int('warn') && 'warn' >= $_console->properties['length']) { $_console->properties['length'] = 'warn' + 1; }else if ($x492 === 'length' && is_int($x490) && $x499 > $x490) {  for ($i = $x490; $i < $x499; ++$i) {  unset($_console->properties[$i], $_console->attributes[$i]); }}};
;
return JS::$undefined;
}
