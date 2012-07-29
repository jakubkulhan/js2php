function _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $base, $id, $line, $column, $file) {
$WNotImplementedError = $SNotImplementedError = $UNotImplementedError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_NotImplementedError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x9 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x10 = $x9($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_NotImplementedError = $x10; }
else { $_NotImplementedError = JS::$undefined; $UNotImplementedError = TRUE; }
return array(&$_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$base,$id,$line,$column,$file){$WNotImplementedError=$SNotImplementedError=$UNotImplementedError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_NotImplementedError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x9=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x10=$x9($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_NotImplementedError=$x10;}else{$_NotImplementedError=JS::$undefined;$UNotImplementedError=TRUE;}return array(&$_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x16 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x16=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x16[0];list(,$WTypeError,$STypeError,$UTypeError)=$x16;$x17=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x18=$x17($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x18->class)&&$x18->class===\'Error\'&&!isset($x18->properties[\'file\'])&&!isset($x18->properties[\'line\'])&&!isset($x18->properties[\'column\'])){$x18->properties[\'file\']=$file;$x18->properties[\'line\']=$line;$x18->properties[\'column\']=$column;$x18->attributes[\'file\']=$x18->attributes[\'line\']=$x18->attributes[\'column\']=0;}throw new JSException($x18,$line,$column,$file);}$W15=$S15=$U15=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x15=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x19=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x20=$x19($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x20;}else{$x15=JS::$undefined;$U15=TRUE;}return array(&$x15,$W15,$S15,$U15);}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x6 =& $scope->properties['arguments'];
$x6->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x6->properties[$i] = $args[$i];
$x6->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['data'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_data =& $scope->properties['data'];
$Udata = FALSE;
$scope->properties['inputEncoding'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_inputEncoding =& $scope->properties['inputEncoding'];
$UinputEncoding = FALSE;
$scope->properties['update'] = $fn;
$_update =& $scope->properties['update'];
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean($_inputEncoding, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x11 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('NotImplementedError', $global), 7, 17, '<image>/17_crypto.js');
$_NotImplementedError =& $x11[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x11;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x12 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 7, 17, '<image>/17_crypto.js');
$_ReferenceError =& $x12[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x12;
$x13 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 7, 17);
$x14 = $x13($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x14->class) && $x14->class === 'Error' && !isset($x14->properties['file']) && !isset($x14->properties['line']) && !isset($x14->properties['column'])) {$x14->properties['file'] = '<image>/17_crypto.js';$x14->properties['line'] = 7;$x14->properties['column'] = 17;$x14->attributes['file'] = $x14->attributes['line'] = $x14->attributes['column'] = 0; }
throw new JSException($x14, 7, 17, '<image>/17_crypto.js');
}
$x7 = clone JS::$objectTemplate;
unset($x15, $W15, $S15, $U15);
$x21 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 7, 13, '<image>/17_crypto.js');
$x15 =& $x21[0]; list(,$W15,$S15,$U15) = $x21;
$x8 = $x15;
$x7->prototype = $x8;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x24 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 7, 13, '<image>/17_crypto.js');
$_TypeError =& $x24[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x24;
$x25 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 7, 13);
$x26 = $x25($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x26->class) && $x26->class === 'Error' && !isset($x26->properties['file']) && !isset($x26->properties['line']) && !isset($x26->properties['column'])) {$x26->properties['file'] = '<image>/17_crypto.js';$x26->properties['line'] = 7;$x26->properties['column'] = 13;$x26->attributes['file'] = $x26->attributes['line'] = $x26->attributes['column'] = 0; }
throw new JSException($x26, 7, 13, '<image>/17_crypto.js');
}
$x22 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 7, 13);
$x23 = $x22($global, $x7, $_NotImplementedError, array('Hash.update(): inputEncoding ignored'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x8 = $x23;
if (is_object($x8) && $x8 !== JS::$undefined) { $x7 = $x8; }
if (isset($x7->class) && $x7->class === 'Error' && !isset($x7->properties['file']) && !isset($x7->properties['line']) && !isset($x7->properties['column'])) {$x7->properties['file'] = '<image>/17_crypto.js';$x7->properties['line'] = 7;$x7->properties['column'] = 7;$x7->attributes['file'] = $x7->attributes['line'] = $x7->attributes['column'] = 0; }
throw new JSException($x7, 7, 7, '<image>/17_crypto.js');;
};
hash_update($leThis->ctx, JS::toString($_data, $global));
return $leThis;
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$scope->properties[\'inputEncoding\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_inputEncoding=&$scope->properties[\'inputEncoding\'];$UinputEncoding=FALSE;$scope->properties[\'update\']=$fn;$_update=&$scope->properties[\'update\'];$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean($_inputEncoding,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x11=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),7,17,\'<image>/17_crypto.js\');$_NotImplementedError=&$x11[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x11;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x12=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),7,17,\'<image>/17_crypto.js\');$_ReferenceError=&$x12[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x12;$x13=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',7,17);$x14=$x13($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x14->class)&&$x14->class===\'Error\'&&!isset($x14->properties[\'file\'])&&!isset($x14->properties[\'line\'])&&!isset($x14->properties[\'column\'])){$x14->properties[\'file\']=\'<image>/17_crypto.js\';$x14->properties[\'line\']=7;$x14->properties[\'column\']=17;$x14->attributes[\'file\']=$x14->attributes[\'line\']=$x14->attributes[\'column\']=0;}throw new JSException($x14,7,17,\'<image>/17_crypto.js\');}$x7=clone JS::$objectTemplate;unset($x15,$W15,$S15,$U15);$x21=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),7,13,\'<image>/17_crypto.js\');$x15=&$x21[0];list(,$W15,$S15,$U15)=$x21;$x8=$x15;$x7->prototype=$x8;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x24=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),7,13,\'<image>/17_crypto.js\');$_TypeError=&$x24[0];list(,$WTypeError,$STypeError,$UTypeError)=$x24;$x25=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',7,13);$x26=$x25($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'&&!isset($x26->properties[\'file\'])&&!isset($x26->properties[\'line\'])&&!isset($x26->properties[\'column\'])){$x26->properties[\'file\']=\'<image>/17_crypto.js\';$x26->properties[\'line\']=7;$x26->properties[\'column\']=13;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,7,13,\'<image>/17_crypto.js\');}$x22=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',7,13);$x23=$x22($global,$x7,$_NotImplementedError,array(\'Hash.update(): inputEncoding ignored\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x8=$x23;if(is_object($x8)&&$x8!==JS::$undefined){$x7=$x8;}if(isset($x7->class)&&$x7->class===\'Error\'&&!isset($x7->properties[\'file\'])&&!isset($x7->properties[\'line\'])&&!isset($x7->properties[\'column\'])){$x7->properties[\'file\']=\'<image>/17_crypto.js\';$x7->properties[\'line\']=7;$x7->properties[\'column\']=7;$x7->attributes[\'file\']=$x7->attributes[\'line\']=$x7->attributes[\'column\']=0;}throw new JSException($x7,7,7,\'<image>/17_crypto.js\');}hash_update($leThis->ctx,JS::toString($_data,$global));return$leThis;return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x29 =& $scope->properties['arguments'];
$x29->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x29->properties[$i] = $args[$i];
$x29->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['encoding'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_encoding =& $scope->properties['encoding'];
$Uencoding = FALSE;
$scope->properties['digest'] = $fn;
$_digest =& $scope->properties['digest'];
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['output'] = JS::$undefined; $_output =& $scope->properties['output'];
$Uoutput = FALSE;
$_output = hash_final($leThis->ctx, TRUE);;
$x30 = $_encoding;
if (!JS::toBoolean($x30, $global)) {
$x30 = 'binary'; }
if ($Uencoding) {$global->properties['encoding'] = $_encoding; $_encoding =& $global->properties['encoding']; }
$_encoding = $x30;
switch ($_encoding) {
case 'binary':


return $_output;;
case 'hex':


return bin2hex($_output);;
case 'base64':


return base64_encode($_output);;
default:

unset($_Error, $WError, $SError, $UError);
$x33 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('Error', $global), 30, 18, '<image>/17_crypto.js');
$_Error =& $x33[0]; list(,$WError,$SError,$UError) = $x33;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x34 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 30, 18, '<image>/17_crypto.js');
$_ReferenceError =& $x34[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x34;
$x35 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 30, 18);
$x36 = $x35($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x36->class) && $x36->class === 'Error' && !isset($x36->properties['file']) && !isset($x36->properties['line']) && !isset($x36->properties['column'])) {$x36->properties['file'] = '<image>/17_crypto.js';$x36->properties['line'] = 30;$x36->properties['column'] = 18;$x36->attributes['file'] = $x36->attributes['line'] = $x36->attributes['column'] = 0; }
throw new JSException($x36, 30, 18, '<image>/17_crypto.js');
}
$x37 = JS::toPrimitive('Hash.digest(): unknown encoding ', $global);
$x38 = JS::toPrimitive($_encoding, $global);
$x31 = clone JS::$objectTemplate;
unset($x39, $W39, $S39, $U39);
$x40 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $_Error, JS::toString('prototype', $global), 30, 14, '<image>/17_crypto.js');
$x39 =& $x40[0]; list(,$W39,$S39,$U39) = $x40;
$x32 = $x39;
$x31->prototype = $x32;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x43 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 30, 14, '<image>/17_crypto.js');
$_TypeError =& $x43[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x43;
$x44 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 30, 14);
$x45 = $x44($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x45->class) && $x45->class === 'Error' && !isset($x45->properties['file']) && !isset($x45->properties['line']) && !isset($x45->properties['column'])) {$x45->properties['file'] = '<image>/17_crypto.js';$x45->properties['line'] = 30;$x45->properties['column'] = 14;$x45->attributes['file'] = $x45->attributes['line'] = $x45->attributes['column'] = 0; }
throw new JSException($x45, 30, 14, '<image>/17_crypto.js');
}
$x41 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 30, 14);
$x42 = $x41($global, $x31, $_Error, array((is_string($x37) || is_string($x38) ? JS::toString($x37, $global) . JS::toString($x38, $global) : JS::toNumber($x37, $global) + JS::toNumber($x38, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x32 = $x42;
if (is_object($x32) && $x32 !== JS::$undefined) { $x31 = $x32; }
if (isset($x31->class) && $x31->class === 'Error' && !isset($x31->properties['file']) && !isset($x31->properties['line']) && !isset($x31->properties['column'])) {$x31->properties['file'] = '<image>/17_crypto.js';$x31->properties['line'] = 30;$x31->properties['column'] = 8;$x31->attributes['file'] = $x31->attributes['line'] = $x31->attributes['column'] = 0; }
throw new JSException($x31, 30, 8, '<image>/17_crypto.js');;
};
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x29=&$scope->properties[\'arguments\'];$x29->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x29->properties[$i]=$args[$i];$x29->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'encoding\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_encoding=&$scope->properties[\'encoding\'];$Uencoding=FALSE;$scope->properties[\'digest\']=$fn;$_digest=&$scope->properties[\'digest\'];$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'output\']=JS::$undefined;$_output=&$scope->properties[\'output\'];$Uoutput=FALSE;$_output=hash_final($leThis->ctx,TRUE);$x30=$_encoding;if(!JS::toBoolean($x30,$global)){$x30=\'binary\';}if($Uencoding){$global->properties[\'encoding\']=$_encoding;$_encoding=&$global->properties[\'encoding\'];}$_encoding=$x30;switch($_encoding){case\'binary\':return$_output;case\'hex\':return bin2hex($_output);case\'base64\':return base64_encode($_output);default:unset($_Error,$WError,$SError,$UError);$x33=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'Error\',$global),30,18,\'<image>/17_crypto.js\');$_Error=&$x33[0];list(,$WError,$SError,$UError)=$x33;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x34=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),30,18,\'<image>/17_crypto.js\');$_ReferenceError=&$x34[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x34;$x35=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',30,18);$x36=$x35($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x36->class)&&$x36->class===\'Error\'&&!isset($x36->properties[\'file\'])&&!isset($x36->properties[\'line\'])&&!isset($x36->properties[\'column\'])){$x36->properties[\'file\']=\'<image>/17_crypto.js\';$x36->properties[\'line\']=30;$x36->properties[\'column\']=18;$x36->attributes[\'file\']=$x36->attributes[\'line\']=$x36->attributes[\'column\']=0;}throw new JSException($x36,30,18,\'<image>/17_crypto.js\');}$x37=JS::toPrimitive(\'Hash.digest(): unknown encoding \',$global);$x38=JS::toPrimitive($_encoding,$global);$x31=clone JS::$objectTemplate;unset($x39,$W39,$S39,$U39);$x40=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$_Error,JS::toString(\'prototype\',$global),30,14,\'<image>/17_crypto.js\');$x39=&$x40[0];list(,$W39,$S39,$U39)=$x40;$x32=$x39;$x31->prototype=$x32;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x43=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),30,14,\'<image>/17_crypto.js\');$_TypeError=&$x43[0];list(,$WTypeError,$STypeError,$UTypeError)=$x43;$x44=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',30,14);$x45=$x44($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x45->class)&&$x45->class===\'Error\'&&!isset($x45->properties[\'file\'])&&!isset($x45->properties[\'line\'])&&!isset($x45->properties[\'column\'])){$x45->properties[\'file\']=\'<image>/17_crypto.js\';$x45->properties[\'line\']=30;$x45->properties[\'column\']=14;$x45->attributes[\'file\']=$x45->attributes[\'line\']=$x45->attributes[\'column\']=0;}throw new JSException($x45,30,14,\'<image>/17_crypto.js\');}$x41=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',30,14);$x42=$x41($global,$x31,$_Error,array((is_string($x37)||is_string($x38)?JS::toString($x37,$global).JS::toString($x38,$global):JS::toNumber($x37,$global)+JS::toNumber($x38,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x32=$x42;if(is_object($x32)&&$x32!==JS::$undefined){$x31=$x32;}if(isset($x31->class)&&$x31->class===\'Error\'&&!isset($x31->properties[\'file\'])&&!isset($x31->properties[\'line\'])&&!isset($x31->properties[\'column\'])){$x31->properties[\'file\']=\'<image>/17_crypto.js\';$x31->properties[\'line\']=30;$x31->properties[\'column\']=8;$x31->attributes[\'file\']=$x31->attributes[\'line\']=$x31->attributes[\'column\']=0;}throw new JSException($x31,30,8,\'<image>/17_crypto.js\');}return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_1($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x3 =& $scope->properties['arguments'];
$x3->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x3->properties[$i] = $args[$i];
$x3->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['algorithm'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_algorithm =& $scope->properties['algorithm'];
$Ualgorithm = FALSE;
$scope->properties['createHash'] = $fn;
$_createHash =& $scope->properties['createHash'];
$global->scope[++$global->scope_sp] = $scope;
$x4 = clone JS::$objectTemplate;
$x27 = clone JS::$functionTemplate; $x27->call = '_f004d8b1515b13f36d85248542abfcb6_2'; $x27->parameters = array (
  0 => 'data',
  1 => 'inputEncoding',
); $x27->name = 'update'; $x27->scope = $scope; $x27->properties['prototype'] = clone JS::$objectTemplate; $x27->attributes['prototype'] = JS::WRITABLE; $x27->properties['prototype']->properties['constructor'] = $x27; $x27->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x27->properties['length'] = 2; $x27->attributes['length'] = 0;
$x4->properties['update'] = $x27;
$x4->attributes['update'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x46 = clone JS::$functionTemplate; $x46->call = '_f004d8b1515b13f36d85248542abfcb6_5'; $x46->parameters = array (
  0 => 'encoding',
); $x46->name = 'digest'; $x46->scope = $scope; $x46->properties['prototype'] = clone JS::$objectTemplate; $x46->attributes['prototype'] = JS::WRITABLE; $x46->properties['prototype']->properties['constructor'] = $x46; $x46->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x46->properties['length'] = 1; $x46->attributes['length'] = 0;
$x4->properties['digest'] = $x46;
$x4->attributes['digest'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['hash'] = JS::$undefined; $_hash =& $scope->properties['hash'];
$Uhash = FALSE;
$_hash = $x4;
$_hash->ctx = hash_init($_algorithm);
return $_hash;
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'algorithm\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_algorithm=&$scope->properties[\'algorithm\'];$Ualgorithm=FALSE;$scope->properties[\'createHash\']=$fn;$_createHash=&$scope->properties[\'createHash\'];$global->scope[++$global->scope_sp]=$scope;$x4=clone JS::$objectTemplate;$x27=clone JS::$functionTemplate;$x27->call=\'_f004d8b1515b13f36d85248542abfcb6_2\';$x27->parameters=array(0=>\'data\',1=>\'inputEncoding\',);$x27->name=\'update\';$x27->scope=$scope;$x27->properties[\'prototype\']=clone JS::$objectTemplate;$x27->attributes[\'prototype\']=JS::WRITABLE;$x27->properties[\'prototype\']->properties[\'constructor\']=$x27;$x27->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x27->properties[\'length\']=2;$x27->attributes[\'length\']=0;$x4->properties[\'update\']=$x27;$x4->attributes[\'update\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x46=clone JS::$functionTemplate;$x46->call=\'_f004d8b1515b13f36d85248542abfcb6_5\';$x46->parameters=array(0=>\'encoding\',);$x46->name=\'digest\';$x46->scope=$scope;$x46->properties[\'prototype\']=clone JS::$objectTemplate;$x46->attributes[\'prototype\']=JS::WRITABLE;$x46->properties[\'prototype\']->properties[\'constructor\']=$x46;$x46->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x46->properties[\'length\']=1;$x46->attributes[\'length\']=0;$x4->properties[\'digest\']=$x46;$x4->attributes[\'digest\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$scope->properties[\'hash\']=JS::$undefined;$_hash=&$scope->properties[\'hash\'];$Uhash=FALSE;$_hash=$x4;$_hash->ctx=hash_init($_algorithm);return$_hash;return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x52 =& $scope->properties['arguments'];
$x52->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x52->properties[$i] = $args[$i];
$x52->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['data'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_data =& $scope->properties['data'];
$Udata = FALSE;
$scope->properties['inputEncoding'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_inputEncoding =& $scope->properties['inputEncoding'];
$UinputEncoding = FALSE;
$scope->properties['update'] = $fn;
$_update =& $scope->properties['update'];
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean($_inputEncoding, $global)) {
unset($_NotImplementedError, $WNotImplementedError, $SNotImplementedError, $UNotImplementedError);
$x55 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('NotImplementedError', $global), 44, 17, '<image>/17_crypto.js');
$_NotImplementedError =& $x55[0]; list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError) = $x55;
if ($UNotImplementedError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x56 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 44, 17, '<image>/17_crypto.js');
$_ReferenceError =& $x56[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x56;
$x57 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 44, 17);
$x58 = $x57($global, $global, $_ReferenceError, array('NotImplementedError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x58->class) && $x58->class === 'Error' && !isset($x58->properties['file']) && !isset($x58->properties['line']) && !isset($x58->properties['column'])) {$x58->properties['file'] = '<image>/17_crypto.js';$x58->properties['line'] = 44;$x58->properties['column'] = 17;$x58->attributes['file'] = $x58->attributes['line'] = $x58->attributes['column'] = 0; }
throw new JSException($x58, 44, 17, '<image>/17_crypto.js');
}
$x53 = clone JS::$objectTemplate;
unset($x59, $W59, $S59, $U59);
$x60 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $_NotImplementedError, JS::toString('prototype', $global), 44, 13, '<image>/17_crypto.js');
$x59 =& $x60[0]; list(,$W59,$S59,$U59) = $x60;
$x54 = $x59;
$x53->prototype = $x54;
if (!(is_object($_NotImplementedError) && isset($_NotImplementedError->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x63 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 44, 13, '<image>/17_crypto.js');
$_TypeError =& $x63[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x63;
$x64 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 44, 13);
$x65 = $x64($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x65->class) && $x65->class === 'Error' && !isset($x65->properties['file']) && !isset($x65->properties['line']) && !isset($x65->properties['column'])) {$x65->properties['file'] = '<image>/17_crypto.js';$x65->properties['line'] = 44;$x65->properties['column'] = 13;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, 44, 13, '<image>/17_crypto.js');
}
$x61 = $_NotImplementedError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 44, 13);
$x62 = $x61($global, $x53, $_NotImplementedError, array('Hmac.update(): inputEncoding ignored'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x54 = $x62;
if (is_object($x54) && $x54 !== JS::$undefined) { $x53 = $x54; }
if (isset($x53->class) && $x53->class === 'Error' && !isset($x53->properties['file']) && !isset($x53->properties['line']) && !isset($x53->properties['column'])) {$x53->properties['file'] = '<image>/17_crypto.js';$x53->properties['line'] = 44;$x53->properties['column'] = 7;$x53->attributes['file'] = $x53->attributes['line'] = $x53->attributes['column'] = 0; }
throw new JSException($x53, 44, 7, '<image>/17_crypto.js');;
};
hash_update($leThis->ctx, JS::toString($_data, $global));
return $leThis;
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x52=&$scope->properties[\'arguments\'];$x52->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x52->properties[$i]=$args[$i];$x52->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$scope->properties[\'inputEncoding\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_inputEncoding=&$scope->properties[\'inputEncoding\'];$UinputEncoding=FALSE;$scope->properties[\'update\']=$fn;$_update=&$scope->properties[\'update\'];$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean($_inputEncoding,$global)){unset($_NotImplementedError,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError);$x55=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'NotImplementedError\',$global),44,17,\'<image>/17_crypto.js\');$_NotImplementedError=&$x55[0];list(,$WNotImplementedError,$SNotImplementedError,$UNotImplementedError)=$x55;if($UNotImplementedError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x56=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),44,17,\'<image>/17_crypto.js\');$_ReferenceError=&$x56[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x56;$x57=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',44,17);$x58=$x57($global,$global,$_ReferenceError,array(\'NotImplementedError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x58->class)&&$x58->class===\'Error\'&&!isset($x58->properties[\'file\'])&&!isset($x58->properties[\'line\'])&&!isset($x58->properties[\'column\'])){$x58->properties[\'file\']=\'<image>/17_crypto.js\';$x58->properties[\'line\']=44;$x58->properties[\'column\']=17;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,44,17,\'<image>/17_crypto.js\');}$x53=clone JS::$objectTemplate;unset($x59,$W59,$S59,$U59);$x60=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$_NotImplementedError,JS::toString(\'prototype\',$global),44,13,\'<image>/17_crypto.js\');$x59=&$x60[0];list(,$W59,$S59,$U59)=$x60;$x54=$x59;$x53->prototype=$x54;if(!(is_object($_NotImplementedError)&&isset($_NotImplementedError->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),44,13,\'<image>/17_crypto.js\');$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',44,13);$x65=$x64($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'&&!isset($x65->properties[\'file\'])&&!isset($x65->properties[\'line\'])&&!isset($x65->properties[\'column\'])){$x65->properties[\'file\']=\'<image>/17_crypto.js\';$x65->properties[\'line\']=44;$x65->properties[\'column\']=13;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,44,13,\'<image>/17_crypto.js\');}$x61=$_NotImplementedError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',44,13);$x62=$x61($global,$x53,$_NotImplementedError,array(\'Hmac.update(): inputEncoding ignored\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x54=$x62;if(is_object($x54)&&$x54!==JS::$undefined){$x53=$x54;}if(isset($x53->class)&&$x53->class===\'Error\'&&!isset($x53->properties[\'file\'])&&!isset($x53->properties[\'line\'])&&!isset($x53->properties[\'column\'])){$x53->properties[\'file\']=\'<image>/17_crypto.js\';$x53->properties[\'line\']=44;$x53->properties[\'column\']=7;$x53->attributes[\'file\']=$x53->attributes[\'line\']=$x53->attributes[\'column\']=0;}throw new JSException($x53,44,7,\'<image>/17_crypto.js\');}hash_update($leThis->ctx,JS::toString($_data,$global));return$leThis;return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x68 =& $scope->properties['arguments'];
$x68->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x68->properties[$i] = $args[$i];
$x68->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['encoding'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_encoding =& $scope->properties['encoding'];
$Uencoding = FALSE;
$scope->properties['digest'] = $fn;
$_digest =& $scope->properties['digest'];
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['output'] = JS::$undefined; $_output =& $scope->properties['output'];
$Uoutput = FALSE;
$_output = hash_final($leThis->ctx, TRUE);;
$x69 = $_encoding;
if (!JS::toBoolean($x69, $global)) {
$x69 = 'binary'; }
if ($Uencoding) {$global->properties['encoding'] = $_encoding; $_encoding =& $global->properties['encoding']; }
$_encoding = $x69;
switch ($_encoding) {
case 'binary':


return $_output;;
case 'hex':


return bin2hex($_output);;
case 'base64':


return base64_encode($_output);;
default:

unset($_Error, $WError, $SError, $UError);
$x72 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('Error', $global), 67, 18, '<image>/17_crypto.js');
$_Error =& $x72[0]; list(,$WError,$SError,$UError) = $x72;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x73 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 67, 18, '<image>/17_crypto.js');
$_ReferenceError =& $x73[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x73;
$x74 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 67, 18);
$x75 = $x74($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x75->class) && $x75->class === 'Error' && !isset($x75->properties['file']) && !isset($x75->properties['line']) && !isset($x75->properties['column'])) {$x75->properties['file'] = '<image>/17_crypto.js';$x75->properties['line'] = 67;$x75->properties['column'] = 18;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 67, 18, '<image>/17_crypto.js');
}
$x76 = JS::toPrimitive('Hmac.digest(): unknown encoding ', $global);
$x77 = JS::toPrimitive($_encoding, $global);
$x70 = clone JS::$objectTemplate;
unset($x78, $W78, $S78, $U78);
$x79 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $_Error, JS::toString('prototype', $global), 67, 14, '<image>/17_crypto.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
$x71 = $x78;
$x70->prototype = $x71;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x82 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 67, 14, '<image>/17_crypto.js');
$_TypeError =& $x82[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x82;
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 67, 14);
$x84 = $x83($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x84->class) && $x84->class === 'Error' && !isset($x84->properties['file']) && !isset($x84->properties['line']) && !isset($x84->properties['column'])) {$x84->properties['file'] = '<image>/17_crypto.js';$x84->properties['line'] = 67;$x84->properties['column'] = 14;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 67, 14, '<image>/17_crypto.js');
}
$x80 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 67, 14);
$x81 = $x80($global, $x70, $_Error, array((is_string($x76) || is_string($x77) ? JS::toString($x76, $global) . JS::toString($x77, $global) : JS::toNumber($x76, $global) + JS::toNumber($x77, $global))), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x71 = $x81;
if (is_object($x71) && $x71 !== JS::$undefined) { $x70 = $x71; }
if (isset($x70->class) && $x70->class === 'Error' && !isset($x70->properties['file']) && !isset($x70->properties['line']) && !isset($x70->properties['column'])) {$x70->properties['file'] = '<image>/17_crypto.js';$x70->properties['line'] = 67;$x70->properties['column'] = 8;$x70->attributes['file'] = $x70->attributes['line'] = $x70->attributes['column'] = 0; }
throw new JSException($x70, 67, 8, '<image>/17_crypto.js');;
};
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x68=&$scope->properties[\'arguments\'];$x68->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x68->properties[$i]=$args[$i];$x68->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'encoding\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_encoding=&$scope->properties[\'encoding\'];$Uencoding=FALSE;$scope->properties[\'digest\']=$fn;$_digest=&$scope->properties[\'digest\'];$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'output\']=JS::$undefined;$_output=&$scope->properties[\'output\'];$Uoutput=FALSE;$_output=hash_final($leThis->ctx,TRUE);$x69=$_encoding;if(!JS::toBoolean($x69,$global)){$x69=\'binary\';}if($Uencoding){$global->properties[\'encoding\']=$_encoding;$_encoding=&$global->properties[\'encoding\'];}$_encoding=$x69;switch($_encoding){case\'binary\':return$_output;case\'hex\':return bin2hex($_output);case\'base64\':return base64_encode($_output);default:unset($_Error,$WError,$SError,$UError);$x72=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'Error\',$global),67,18,\'<image>/17_crypto.js\');$_Error=&$x72[0];list(,$WError,$SError,$UError)=$x72;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x73=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),67,18,\'<image>/17_crypto.js\');$_ReferenceError=&$x73[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x73;$x74=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',67,18);$x75=$x74($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x75->class)&&$x75->class===\'Error\'&&!isset($x75->properties[\'file\'])&&!isset($x75->properties[\'line\'])&&!isset($x75->properties[\'column\'])){$x75->properties[\'file\']=\'<image>/17_crypto.js\';$x75->properties[\'line\']=67;$x75->properties[\'column\']=18;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,67,18,\'<image>/17_crypto.js\');}$x76=JS::toPrimitive(\'Hmac.digest(): unknown encoding \',$global);$x77=JS::toPrimitive($_encoding,$global);$x70=clone JS::$objectTemplate;unset($x78,$W78,$S78,$U78);$x79=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$_Error,JS::toString(\'prototype\',$global),67,14,\'<image>/17_crypto.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;$x71=$x78;$x70->prototype=$x71;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x82=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),67,14,\'<image>/17_crypto.js\');$_TypeError=&$x82[0];list(,$WTypeError,$STypeError,$UTypeError)=$x82;$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',67,14);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'&&!isset($x84->properties[\'file\'])&&!isset($x84->properties[\'line\'])&&!isset($x84->properties[\'column\'])){$x84->properties[\'file\']=\'<image>/17_crypto.js\';$x84->properties[\'line\']=67;$x84->properties[\'column\']=14;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,67,14,\'<image>/17_crypto.js\');}$x80=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',67,14);$x81=$x80($global,$x70,$_Error,array((is_string($x76)||is_string($x77)?JS::toString($x76,$global).JS::toString($x77,$global):JS::toNumber($x76,$global)+JS::toNumber($x77,$global))),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x71=$x81;if(is_object($x71)&&$x71!==JS::$undefined){$x70=$x71;}if(isset($x70->class)&&$x70->class===\'Error\'&&!isset($x70->properties[\'file\'])&&!isset($x70->properties[\'line\'])&&!isset($x70->properties[\'column\'])){$x70->properties[\'file\']=\'<image>/17_crypto.js\';$x70->properties[\'line\']=67;$x70->properties[\'column\']=8;$x70->attributes[\'file\']=$x70->attributes[\'line\']=$x70->attributes[\'column\']=0;}throw new JSException($x70,67,8,\'<image>/17_crypto.js\');}return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x49 =& $scope->properties['arguments'];
$x49->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x49->properties[$i] = $args[$i];
$x49->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['algorithm'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_algorithm =& $scope->properties['algorithm'];
$Ualgorithm = FALSE;
$scope->properties['key'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_key =& $scope->properties['key'];
$Ukey = FALSE;
$scope->properties['createHmac'] = $fn;
$_createHmac =& $scope->properties['createHmac'];
$global->scope[++$global->scope_sp] = $scope;
$x50 = clone JS::$objectTemplate;
$x66 = clone JS::$functionTemplate; $x66->call = '_f004d8b1515b13f36d85248542abfcb6_7'; $x66->parameters = array (
  0 => 'data',
  1 => 'inputEncoding',
); $x66->name = 'update'; $x66->scope = $scope; $x66->properties['prototype'] = clone JS::$objectTemplate; $x66->attributes['prototype'] = JS::WRITABLE; $x66->properties['prototype']->properties['constructor'] = $x66; $x66->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x66->properties['length'] = 2; $x66->attributes['length'] = 0;
$x50->properties['update'] = $x66;
$x50->attributes['update'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x85 = clone JS::$functionTemplate; $x85->call = '_f004d8b1515b13f36d85248542abfcb6_8'; $x85->parameters = array (
  0 => 'encoding',
); $x85->name = 'digest'; $x85->scope = $scope; $x85->properties['prototype'] = clone JS::$objectTemplate; $x85->attributes['prototype'] = JS::WRITABLE; $x85->properties['prototype']->properties['constructor'] = $x85; $x85->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x85->properties['length'] = 1; $x85->attributes['length'] = 0;
$x50->properties['digest'] = $x85;
$x50->attributes['digest'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$scope->properties['hash'] = JS::$undefined; $_hash =& $scope->properties['hash'];
$Uhash = FALSE;
$_hash = $x50;
$_hash->ctx = hash_init($_algorithm, HASH_HMAC,$_key);
return $_hash;
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x49=&$scope->properties[\'arguments\'];$x49->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x49->properties[$i]=$args[$i];$x49->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'algorithm\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_algorithm=&$scope->properties[\'algorithm\'];$Ualgorithm=FALSE;$scope->properties[\'key\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_key=&$scope->properties[\'key\'];$Ukey=FALSE;$scope->properties[\'createHmac\']=$fn;$_createHmac=&$scope->properties[\'createHmac\'];$global->scope[++$global->scope_sp]=$scope;$x50=clone JS::$objectTemplate;$x66=clone JS::$functionTemplate;$x66->call=\'_f004d8b1515b13f36d85248542abfcb6_7\';$x66->parameters=array(0=>\'data\',1=>\'inputEncoding\',);$x66->name=\'update\';$x66->scope=$scope;$x66->properties[\'prototype\']=clone JS::$objectTemplate;$x66->attributes[\'prototype\']=JS::WRITABLE;$x66->properties[\'prototype\']->properties[\'constructor\']=$x66;$x66->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x66->properties[\'length\']=2;$x66->attributes[\'length\']=0;$x50->properties[\'update\']=$x66;$x50->attributes[\'update\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x85=clone JS::$functionTemplate;$x85->call=\'_f004d8b1515b13f36d85248542abfcb6_8\';$x85->parameters=array(0=>\'encoding\',);$x85->name=\'digest\';$x85->scope=$scope;$x85->properties[\'prototype\']=clone JS::$objectTemplate;$x85->attributes[\'prototype\']=JS::WRITABLE;$x85->properties[\'prototype\']->properties[\'constructor\']=$x85;$x85->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x85->properties[\'length\']=1;$x85->attributes[\'length\']=0;$x50->properties[\'digest\']=$x85;$x50->attributes[\'digest\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$scope->properties[\'hash\']=JS::$undefined;$_hash=&$scope->properties[\'hash\'];$Uhash=FALSE;$_hash=$x50;$_hash->ctx=hash_init($_algorithm,HASH_HMAC,$_key);return$_hash;return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x88 =& $scope->properties['arguments'];
$x88->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x88->properties[$i] = $args[$i];
$x88->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['data'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_data =& $scope->properties['data'];
$Udata = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x89 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('require', $global), 78, 11, '<image>/17_crypto.js');
$_require =& $x89[0]; list(,$Wrequire,$Srequire,$Urequire) = $x89;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x90 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 78, 11, '<image>/17_crypto.js');
$_ReferenceError =& $x90[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x90;
$x91 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 11);
$x92 = $x91($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x92->class) && $x92->class === 'Error' && !isset($x92->properties['file']) && !isset($x92->properties['line']) && !isset($x92->properties['column'])) {$x92->properties['file'] = '<image>/17_crypto.js';$x92->properties['line'] = 78;$x92->properties['column'] = 11;$x92->attributes['file'] = $x92->attributes['line'] = $x92->attributes['column'] = 0; }
throw new JSException($x92, 78, 11, '<image>/17_crypto.js');
}
unset($x93, $W93, $S93, $U93);
$x94 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $_require, JS::toString('modules', $global), 78, 18, '<image>/17_crypto.js');
$x93 =& $x94[0]; list(,$W93,$S93,$U93) = $x94;
unset($x95, $W95, $S95, $U95);
$x96 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x93, JS::toString('crypto', $global), 78, 26, '<image>/17_crypto.js');
$x95 =& $x96[0]; list(,$W95,$S95,$U95) = $x96;
unset($x97, $W97, $S97, $U97);
$x98 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x95, JS::toString('exports', $global), 78, 33, '<image>/17_crypto.js');
$x97 =& $x98[0]; list(,$W97,$S97,$U97) = $x98;
if ($x97 === JS::$undefined || $x97 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x100 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 52, '<image>/17_crypto.js');
$_TypeError =& $x100[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x100;
$x101 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 52);
$x102 = $x101($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x102->class) && $x102->class === 'Error' && !isset($x102->properties['file']) && !isset($x102->properties['line']) && !isset($x102->properties['column'])) {$x102->properties['file'] = '<image>/17_crypto.js';$x102->properties['line'] = 78;$x102->properties['column'] = 52;$x102->attributes['file'] = $x102->attributes['line'] = $x102->attributes['column'] = 0; }
throw new JSException($x102, 78, 52, '<image>/17_crypto.js');
}
$x99 = JS::toObject($x97, $global);
unset($x103, $W103, $S103, $U103);
$x104 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x99, JS::toString('createHash', $global), 78, 52, '<image>/17_crypto.js');
$x103 =& $x104[0]; list(,$W103,$S103,$U103) = $x104;
if (!(is_object($x103) && isset($x103->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 52, '<image>/17_crypto.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 52);
$x109 = $x108($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/17_crypto.js';$x109->properties['line'] = 78;$x109->properties['column'] = 52;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 78, 52, '<image>/17_crypto.js');
}
$x105 = $x103->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 52);
$x106 = $x105($global, $x99, $x103, array('md5'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x106 === JS::$undefined || $x106 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x111 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 66, '<image>/17_crypto.js');
$_TypeError =& $x111[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x111;
$x112 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 66);
$x113 = $x112($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x113->class) && $x113->class === 'Error' && !isset($x113->properties['file']) && !isset($x113->properties['line']) && !isset($x113->properties['column'])) {$x113->properties['file'] = '<image>/17_crypto.js';$x113->properties['line'] = 78;$x113->properties['column'] = 66;$x113->attributes['file'] = $x113->attributes['line'] = $x113->attributes['column'] = 0; }
throw new JSException($x113, 78, 66, '<image>/17_crypto.js');
}
$x110 = JS::toObject($x106, $global);
unset($x114, $W114, $S114, $U114);
$x115 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x110, JS::toString('update', $global), 78, 66, '<image>/17_crypto.js');
$x114 =& $x115[0]; list(,$W114,$S114,$U114) = $x115;
if (!(is_object($x114) && isset($x114->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x118 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 66, '<image>/17_crypto.js');
$_TypeError =& $x118[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x118;
$x119 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 66);
$x120 = $x119($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x120->class) && $x120->class === 'Error' && !isset($x120->properties['file']) && !isset($x120->properties['line']) && !isset($x120->properties['column'])) {$x120->properties['file'] = '<image>/17_crypto.js';$x120->properties['line'] = 78;$x120->properties['column'] = 66;$x120->attributes['file'] = $x120->attributes['line'] = $x120->attributes['column'] = 0; }
throw new JSException($x120, 78, 66, '<image>/17_crypto.js');
}
$x116 = $x114->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 66);
$x117 = $x116($global, $x110, $x114, array($_data), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x117 === JS::$undefined || $x117 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x122 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 79, '<image>/17_crypto.js');
$_TypeError =& $x122[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x122;
$x123 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 79);
$x124 = $x123($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x124->class) && $x124->class === 'Error' && !isset($x124->properties['file']) && !isset($x124->properties['line']) && !isset($x124->properties['column'])) {$x124->properties['file'] = '<image>/17_crypto.js';$x124->properties['line'] = 78;$x124->properties['column'] = 79;$x124->attributes['file'] = $x124->attributes['line'] = $x124->attributes['column'] = 0; }
throw new JSException($x124, 78, 79, '<image>/17_crypto.js');
}
$x121 = JS::toObject($x117, $global);
unset($x125, $W125, $S125, $U125);
$x126 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x121, JS::toString('digest', $global), 78, 79, '<image>/17_crypto.js');
$x125 =& $x126[0]; list(,$W125,$S125,$U125) = $x126;
if (!(is_object($x125) && isset($x125->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x129 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 79, '<image>/17_crypto.js');
$_TypeError =& $x129[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x129;
$x130 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 79);
$x131 = $x130($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x131->class) && $x131->class === 'Error' && !isset($x131->properties['file']) && !isset($x131->properties['line']) && !isset($x131->properties['column'])) {$x131->properties['file'] = '<image>/17_crypto.js';$x131->properties['line'] = 78;$x131->properties['column'] = 79;$x131->attributes['file'] = $x131->attributes['line'] = $x131->attributes['column'] = 0; }
throw new JSException($x131, 78, 79, '<image>/17_crypto.js');
}
$x127 = $x125->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 78, 79);
$x128 = $x127($global, $x121, $x125, array('hex'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x128;
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x88=&$scope->properties[\'arguments\'];$x88->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x88->properties[$i]=$args[$i];$x88->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_require,$Wrequire,$Srequire,$Urequire);$x89=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'require\',$global),78,11,\'<image>/17_crypto.js\');$_require=&$x89[0];list(,$Wrequire,$Srequire,$Urequire)=$x89;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x90=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),78,11,\'<image>/17_crypto.js\');$_ReferenceError=&$x90[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x90;$x91=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,11);$x92=$x91($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x92->class)&&$x92->class===\'Error\'&&!isset($x92->properties[\'file\'])&&!isset($x92->properties[\'line\'])&&!isset($x92->properties[\'column\'])){$x92->properties[\'file\']=\'<image>/17_crypto.js\';$x92->properties[\'line\']=78;$x92->properties[\'column\']=11;$x92->attributes[\'file\']=$x92->attributes[\'line\']=$x92->attributes[\'column\']=0;}throw new JSException($x92,78,11,\'<image>/17_crypto.js\');}unset($x93,$W93,$S93,$U93);$x94=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$_require,JS::toString(\'modules\',$global),78,18,\'<image>/17_crypto.js\');$x93=&$x94[0];list(,$W93,$S93,$U93)=$x94;unset($x95,$W95,$S95,$U95);$x96=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x93,JS::toString(\'crypto\',$global),78,26,\'<image>/17_crypto.js\');$x95=&$x96[0];list(,$W95,$S95,$U95)=$x96;unset($x97,$W97,$S97,$U97);$x98=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x95,JS::toString(\'exports\',$global),78,33,\'<image>/17_crypto.js\');$x97=&$x98[0];list(,$W97,$S97,$U97)=$x98;if($x97===JS::$undefined||$x97===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x100=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),78,52,\'<image>/17_crypto.js\');$_TypeError=&$x100[0];list(,$WTypeError,$STypeError,$UTypeError)=$x100;$x101=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,52);$x102=$x101($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x102->class)&&$x102->class===\'Error\'&&!isset($x102->properties[\'file\'])&&!isset($x102->properties[\'line\'])&&!isset($x102->properties[\'column\'])){$x102->properties[\'file\']=\'<image>/17_crypto.js\';$x102->properties[\'line\']=78;$x102->properties[\'column\']=52;$x102->attributes[\'file\']=$x102->attributes[\'line\']=$x102->attributes[\'column\']=0;}throw new JSException($x102,78,52,\'<image>/17_crypto.js\');}$x99=JS::toObject($x97,$global);unset($x103,$W103,$S103,$U103);$x104=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x99,JS::toString(\'createHash\',$global),78,52,\'<image>/17_crypto.js\');$x103=&$x104[0];list(,$W103,$S103,$U103)=$x104;if(!(is_object($x103)&&isset($x103->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x107=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),78,52,\'<image>/17_crypto.js\');$_TypeError=&$x107[0];list(,$WTypeError,$STypeError,$UTypeError)=$x107;$x108=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,52);$x109=$x108($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x109->class)&&$x109->class===\'Error\'&&!isset($x109->properties[\'file\'])&&!isset($x109->properties[\'line\'])&&!isset($x109->properties[\'column\'])){$x109->properties[\'file\']=\'<image>/17_crypto.js\';$x109->properties[\'line\']=78;$x109->properties[\'column\']=52;$x109->attributes[\'file\']=$x109->attributes[\'line\']=$x109->attributes[\'column\']=0;}throw new JSException($x109,78,52,\'<image>/17_crypto.js\');}$x105=$x103->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,52);$x106=$x105($global,$x99,$x103,array(\'md5\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x106===JS::$undefined||$x106===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x111=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),78,66,\'<image>/17_crypto.js\');$_TypeError=&$x111[0];list(,$WTypeError,$STypeError,$UTypeError)=$x111;$x112=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,66);$x113=$x112($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x113->class)&&$x113->class===\'Error\'&&!isset($x113->properties[\'file\'])&&!isset($x113->properties[\'line\'])&&!isset($x113->properties[\'column\'])){$x113->properties[\'file\']=\'<image>/17_crypto.js\';$x113->properties[\'line\']=78;$x113->properties[\'column\']=66;$x113->attributes[\'file\']=$x113->attributes[\'line\']=$x113->attributes[\'column\']=0;}throw new JSException($x113,78,66,\'<image>/17_crypto.js\');}$x110=JS::toObject($x106,$global);unset($x114,$W114,$S114,$U114);$x115=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x110,JS::toString(\'update\',$global),78,66,\'<image>/17_crypto.js\');$x114=&$x115[0];list(,$W114,$S114,$U114)=$x115;if(!(is_object($x114)&&isset($x114->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x118=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),78,66,\'<image>/17_crypto.js\');$_TypeError=&$x118[0];list(,$WTypeError,$STypeError,$UTypeError)=$x118;$x119=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,66);$x120=$x119($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x120->class)&&$x120->class===\'Error\'&&!isset($x120->properties[\'file\'])&&!isset($x120->properties[\'line\'])&&!isset($x120->properties[\'column\'])){$x120->properties[\'file\']=\'<image>/17_crypto.js\';$x120->properties[\'line\']=78;$x120->properties[\'column\']=66;$x120->attributes[\'file\']=$x120->attributes[\'line\']=$x120->attributes[\'column\']=0;}throw new JSException($x120,78,66,\'<image>/17_crypto.js\');}$x116=$x114->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,66);$x117=$x116($global,$x110,$x114,array($_data),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x117===JS::$undefined||$x117===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x122=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),78,79,\'<image>/17_crypto.js\');$_TypeError=&$x122[0];list(,$WTypeError,$STypeError,$UTypeError)=$x122;$x123=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,79);$x124=$x123($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x124->class)&&$x124->class===\'Error\'&&!isset($x124->properties[\'file\'])&&!isset($x124->properties[\'line\'])&&!isset($x124->properties[\'column\'])){$x124->properties[\'file\']=\'<image>/17_crypto.js\';$x124->properties[\'line\']=78;$x124->properties[\'column\']=79;$x124->attributes[\'file\']=$x124->attributes[\'line\']=$x124->attributes[\'column\']=0;}throw new JSException($x124,78,79,\'<image>/17_crypto.js\');}$x121=JS::toObject($x117,$global);unset($x125,$W125,$S125,$U125);$x126=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x121,JS::toString(\'digest\',$global),78,79,\'<image>/17_crypto.js\');$x125=&$x126[0];list(,$W125,$S125,$U125)=$x126;if(!(is_object($x125)&&isset($x125->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x129=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),78,79,\'<image>/17_crypto.js\');$_TypeError=&$x129[0];list(,$WTypeError,$STypeError,$UTypeError)=$x129;$x130=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,79);$x131=$x130($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x131->class)&&$x131->class===\'Error\'&&!isset($x131->properties[\'file\'])&&!isset($x131->properties[\'line\'])&&!isset($x131->properties[\'column\'])){$x131->properties[\'file\']=\'<image>/17_crypto.js\';$x131->properties[\'line\']=78;$x131->properties[\'column\']=79;$x131->attributes[\'file\']=$x131->attributes[\'line\']=$x131->attributes[\'column\']=0;}throw new JSException($x131,78,79,\'<image>/17_crypto.js\');}$x127=$x125->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',78,79);$x128=$x127($global,$x121,$x125,array(\'hex\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x128;return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x134 =& $scope->properties['arguments'];
$x134->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x134->properties[$i] = $args[$i];
$x134->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['data'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_data =& $scope->properties['data'];
$Udata = FALSE;
$global->scope[++$global->scope_sp] = $scope;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x135 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('require', $global), 82, 11, '<image>/17_crypto.js');
$_require =& $x135[0]; list(,$Wrequire,$Srequire,$Urequire) = $x135;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x136 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 82, 11, '<image>/17_crypto.js');
$_ReferenceError =& $x136[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x136;
$x137 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 11);
$x138 = $x137($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/17_crypto.js';$x138->properties['line'] = 82;$x138->properties['column'] = 11;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 82, 11, '<image>/17_crypto.js');
}
unset($x139, $W139, $S139, $U139);
$x140 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $_require, JS::toString('modules', $global), 82, 18, '<image>/17_crypto.js');
$x139 =& $x140[0]; list(,$W139,$S139,$U139) = $x140;
unset($x141, $W141, $S141, $U141);
$x142 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x139, JS::toString('crypto', $global), 82, 26, '<image>/17_crypto.js');
$x141 =& $x142[0]; list(,$W141,$S141,$U141) = $x142;
unset($x143, $W143, $S143, $U143);
$x144 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x141, JS::toString('exports', $global), 82, 33, '<image>/17_crypto.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if ($x143 === JS::$undefined || $x143 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x146 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 52, '<image>/17_crypto.js');
$_TypeError =& $x146[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x146;
$x147 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 52);
$x148 = $x147($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x148->class) && $x148->class === 'Error' && !isset($x148->properties['file']) && !isset($x148->properties['line']) && !isset($x148->properties['column'])) {$x148->properties['file'] = '<image>/17_crypto.js';$x148->properties['line'] = 82;$x148->properties['column'] = 52;$x148->attributes['file'] = $x148->attributes['line'] = $x148->attributes['column'] = 0; }
throw new JSException($x148, 82, 52, '<image>/17_crypto.js');
}
$x145 = JS::toObject($x143, $global);
unset($x149, $W149, $S149, $U149);
$x150 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x145, JS::toString('createHash', $global), 82, 52, '<image>/17_crypto.js');
$x149 =& $x150[0]; list(,$W149,$S149,$U149) = $x150;
if (!(is_object($x149) && isset($x149->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x153 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 52, '<image>/17_crypto.js');
$_TypeError =& $x153[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x153;
$x154 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 52);
$x155 = $x154($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x155->class) && $x155->class === 'Error' && !isset($x155->properties['file']) && !isset($x155->properties['line']) && !isset($x155->properties['column'])) {$x155->properties['file'] = '<image>/17_crypto.js';$x155->properties['line'] = 82;$x155->properties['column'] = 52;$x155->attributes['file'] = $x155->attributes['line'] = $x155->attributes['column'] = 0; }
throw new JSException($x155, 82, 52, '<image>/17_crypto.js');
}
$x151 = $x149->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 52);
$x152 = $x151($global, $x145, $x149, array('sha1'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x152 === JS::$undefined || $x152 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 67, '<image>/17_crypto.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 67);
$x159 = $x158($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error' && !isset($x159->properties['file']) && !isset($x159->properties['line']) && !isset($x159->properties['column'])) {$x159->properties['file'] = '<image>/17_crypto.js';$x159->properties['line'] = 82;$x159->properties['column'] = 67;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 82, 67, '<image>/17_crypto.js');
}
$x156 = JS::toObject($x152, $global);
unset($x160, $W160, $S160, $U160);
$x161 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x156, JS::toString('update', $global), 82, 67, '<image>/17_crypto.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
if (!(is_object($x160) && isset($x160->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x164 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 67, '<image>/17_crypto.js');
$_TypeError =& $x164[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x164;
$x165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 67);
$x166 = $x165($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x166->class) && $x166->class === 'Error' && !isset($x166->properties['file']) && !isset($x166->properties['line']) && !isset($x166->properties['column'])) {$x166->properties['file'] = '<image>/17_crypto.js';$x166->properties['line'] = 82;$x166->properties['column'] = 67;$x166->attributes['file'] = $x166->attributes['line'] = $x166->attributes['column'] = 0; }
throw new JSException($x166, 82, 67, '<image>/17_crypto.js');
}
$x162 = $x160->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 67);
$x163 = $x162($global, $x156, $x160, array($_data), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($x163 === JS::$undefined || $x163 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x168 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 80, '<image>/17_crypto.js');
$_TypeError =& $x168[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x168;
$x169 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 80);
$x170 = $x169($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x170->class) && $x170->class === 'Error' && !isset($x170->properties['file']) && !isset($x170->properties['line']) && !isset($x170->properties['column'])) {$x170->properties['file'] = '<image>/17_crypto.js';$x170->properties['line'] = 82;$x170->properties['column'] = 80;$x170->attributes['file'] = $x170->attributes['line'] = $x170->attributes['column'] = 0; }
throw new JSException($x170, 82, 80, '<image>/17_crypto.js');
}
$x167 = JS::toObject($x163, $global);
unset($x171, $W171, $S171, $U171);
$x172 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $x167, JS::toString('digest', $global), 82, 80, '<image>/17_crypto.js');
$x171 =& $x172[0]; list(,$W171,$S171,$U171) = $x172;
if (!(is_object($x171) && isset($x171->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x175 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 82, 80, '<image>/17_crypto.js');
$_TypeError =& $x175[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x175;
$x176 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 80);
$x177 = $x176($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x177->class) && $x177->class === 'Error' && !isset($x177->properties['file']) && !isset($x177->properties['line']) && !isset($x177->properties['column'])) {$x177->properties['file'] = '<image>/17_crypto.js';$x177->properties['line'] = 82;$x177->properties['column'] = 80;$x177->attributes['file'] = $x177->attributes['line'] = $x177->attributes['column'] = 0; }
throw new JSException($x177, 82, 80, '<image>/17_crypto.js');
}
$x173 = $x171->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 82, 80);
$x174 = $x173($global, $x167, $x171, array('hex'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x174;
;
return JS::$undefined;
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x134=&$scope->properties[\'arguments\'];$x134->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x134->properties[$i]=$args[$i];$x134->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'data\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_data=&$scope->properties[\'data\'];$Udata=FALSE;$global->scope[++$global->scope_sp]=$scope;unset($_require,$Wrequire,$Srequire,$Urequire);$x135=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'require\',$global),82,11,\'<image>/17_crypto.js\');$_require=&$x135[0];list(,$Wrequire,$Srequire,$Urequire)=$x135;if($Urequire){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x136=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),82,11,\'<image>/17_crypto.js\');$_ReferenceError=&$x136[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x136;$x137=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,11);$x138=$x137($global,$global,$_ReferenceError,array(\'require is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x138->class)&&$x138->class===\'Error\'&&!isset($x138->properties[\'file\'])&&!isset($x138->properties[\'line\'])&&!isset($x138->properties[\'column\'])){$x138->properties[\'file\']=\'<image>/17_crypto.js\';$x138->properties[\'line\']=82;$x138->properties[\'column\']=11;$x138->attributes[\'file\']=$x138->attributes[\'line\']=$x138->attributes[\'column\']=0;}throw new JSException($x138,82,11,\'<image>/17_crypto.js\');}unset($x139,$W139,$S139,$U139);$x140=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$_require,JS::toString(\'modules\',$global),82,18,\'<image>/17_crypto.js\');$x139=&$x140[0];list(,$W139,$S139,$U139)=$x140;unset($x141,$W141,$S141,$U141);$x142=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x139,JS::toString(\'crypto\',$global),82,26,\'<image>/17_crypto.js\');$x141=&$x142[0];list(,$W141,$S141,$U141)=$x142;unset($x143,$W143,$S143,$U143);$x144=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x141,JS::toString(\'exports\',$global),82,33,\'<image>/17_crypto.js\');$x143=&$x144[0];list(,$W143,$S143,$U143)=$x144;if($x143===JS::$undefined||$x143===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x146=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),82,52,\'<image>/17_crypto.js\');$_TypeError=&$x146[0];list(,$WTypeError,$STypeError,$UTypeError)=$x146;$x147=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,52);$x148=$x147($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x148->class)&&$x148->class===\'Error\'&&!isset($x148->properties[\'file\'])&&!isset($x148->properties[\'line\'])&&!isset($x148->properties[\'column\'])){$x148->properties[\'file\']=\'<image>/17_crypto.js\';$x148->properties[\'line\']=82;$x148->properties[\'column\']=52;$x148->attributes[\'file\']=$x148->attributes[\'line\']=$x148->attributes[\'column\']=0;}throw new JSException($x148,82,52,\'<image>/17_crypto.js\');}$x145=JS::toObject($x143,$global);unset($x149,$W149,$S149,$U149);$x150=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x145,JS::toString(\'createHash\',$global),82,52,\'<image>/17_crypto.js\');$x149=&$x150[0];list(,$W149,$S149,$U149)=$x150;if(!(is_object($x149)&&isset($x149->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x153=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),82,52,\'<image>/17_crypto.js\');$_TypeError=&$x153[0];list(,$WTypeError,$STypeError,$UTypeError)=$x153;$x154=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,52);$x155=$x154($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x155->class)&&$x155->class===\'Error\'&&!isset($x155->properties[\'file\'])&&!isset($x155->properties[\'line\'])&&!isset($x155->properties[\'column\'])){$x155->properties[\'file\']=\'<image>/17_crypto.js\';$x155->properties[\'line\']=82;$x155->properties[\'column\']=52;$x155->attributes[\'file\']=$x155->attributes[\'line\']=$x155->attributes[\'column\']=0;}throw new JSException($x155,82,52,\'<image>/17_crypto.js\');}$x151=$x149->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,52);$x152=$x151($global,$x145,$x149,array(\'sha1\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x152===JS::$undefined||$x152===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x157=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),82,67,\'<image>/17_crypto.js\');$_TypeError=&$x157[0];list(,$WTypeError,$STypeError,$UTypeError)=$x157;$x158=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,67);$x159=$x158($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x159->class)&&$x159->class===\'Error\'&&!isset($x159->properties[\'file\'])&&!isset($x159->properties[\'line\'])&&!isset($x159->properties[\'column\'])){$x159->properties[\'file\']=\'<image>/17_crypto.js\';$x159->properties[\'line\']=82;$x159->properties[\'column\']=67;$x159->attributes[\'file\']=$x159->attributes[\'line\']=$x159->attributes[\'column\']=0;}throw new JSException($x159,82,67,\'<image>/17_crypto.js\');}$x156=JS::toObject($x152,$global);unset($x160,$W160,$S160,$U160);$x161=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x156,JS::toString(\'update\',$global),82,67,\'<image>/17_crypto.js\');$x160=&$x161[0];list(,$W160,$S160,$U160)=$x161;if(!(is_object($x160)&&isset($x160->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x164=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),82,67,\'<image>/17_crypto.js\');$_TypeError=&$x164[0];list(,$WTypeError,$STypeError,$UTypeError)=$x164;$x165=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,67);$x166=$x165($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x166->class)&&$x166->class===\'Error\'&&!isset($x166->properties[\'file\'])&&!isset($x166->properties[\'line\'])&&!isset($x166->properties[\'column\'])){$x166->properties[\'file\']=\'<image>/17_crypto.js\';$x166->properties[\'line\']=82;$x166->properties[\'column\']=67;$x166->attributes[\'file\']=$x166->attributes[\'line\']=$x166->attributes[\'column\']=0;}throw new JSException($x166,82,67,\'<image>/17_crypto.js\');}$x162=$x160->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,67);$x163=$x162($global,$x156,$x160,array($_data),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($x163===JS::$undefined||$x163===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x168=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),82,80,\'<image>/17_crypto.js\');$_TypeError=&$x168[0];list(,$WTypeError,$STypeError,$UTypeError)=$x168;$x169=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,80);$x170=$x169($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x170->class)&&$x170->class===\'Error\'&&!isset($x170->properties[\'file\'])&&!isset($x170->properties[\'line\'])&&!isset($x170->properties[\'column\'])){$x170->properties[\'file\']=\'<image>/17_crypto.js\';$x170->properties[\'line\']=82;$x170->properties[\'column\']=80;$x170->attributes[\'file\']=$x170->attributes[\'line\']=$x170->attributes[\'column\']=0;}throw new JSException($x170,82,80,\'<image>/17_crypto.js\');}$x167=JS::toObject($x163,$global);unset($x171,$W171,$S171,$U171);$x172=_f004d8b1515b13f36d85248542abfcb6_4($global,$scope,$x167,JS::toString(\'digest\',$global),82,80,\'<image>/17_crypto.js\');$x171=&$x172[0];list(,$W171,$S171,$U171)=$x172;if(!(is_object($x171)&&isset($x171->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x175=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),82,80,\'<image>/17_crypto.js\');$_TypeError=&$x175[0];list(,$WTypeError,$STypeError,$UTypeError)=$x175;$x176=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,80);$x177=$x176($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x177->class)&&$x177->class===\'Error\'&&!isset($x177->properties[\'file\'])&&!isset($x177->properties[\'line\'])&&!isset($x177->properties[\'column\'])){$x177->properties[\'file\']=\'<image>/17_crypto.js\';$x177->properties[\'line\']=82;$x177->properties[\'column\']=80;$x177->attributes[\'file\']=$x177->attributes[\'line\']=$x177->attributes[\'column\']=0;}throw new JSException($x177,82,80,\'<image>/17_crypto.js\');}$x173=$x171->call;$global->trace[++$global->trace_sp]=array(\'<image>/17_crypto.js\',82,80);$x174=$x173($global,$x167,$x171,array(\'hex\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x174;return JS::$undefined;}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_11($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x190 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x190[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x190;
$x191 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x192 = $x191($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x192->class) && $x192->class === 'Error' && !isset($x192->properties['file']) && !isset($x192->properties['line']) && !isset($x192->properties['column'])) {$x192->properties['file'] = $file;$x192->properties['line'] = $line;$x192->properties['column'] = $column;$x192->attributes['file'] = $x192->attributes['line'] = $x192->attributes['column'] = 0; }
throw new JSException($x192, $line, $column, $file);
}
$W189 = $S189 = $U189 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x189 =& $lookup->properties[$id]; $W189 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S189 = $lookup->setters[$id]; }
else { $x189 = JS::$undefined; $U189 = TRUE; }
return array(&$x189, $W189, $S189, $U189);
}
echo 'function _f004d8b1515b13f36d85248542abfcb6_11($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x190=_f004d8b1515b13f36d85248542abfcb6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x190[0];list(,$WTypeError,$STypeError,$UTypeError)=$x190;$x191=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x192=$x191($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x192->class)&&$x192->class===\'Error\'&&!isset($x192->properties[\'file\'])&&!isset($x192->properties[\'line\'])&&!isset($x192->properties[\'column\'])){$x192->properties[\'file\']=$file;$x192->properties[\'line\']=$line;$x192->properties[\'column\']=$column;$x192->attributes[\'file\']=$x192->attributes[\'line\']=$x192->attributes[\'column\']=0;}throw new JSException($x192,$line,$column,$file);}$W189=$S189=$U189=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x189=&$lookup->properties[$id];$W189=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S189=$lookup->setters[$id];}else{$x189=JS::$undefined;$U189=TRUE;}return array(&$x189,$W189,$S189,$U189);}', "\n";
function _f004d8b1515b13f36d85248542abfcb6_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/17_crypto.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/17_crypto.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x0 = clone JS::$objectTemplate;
$x1 = clone JS::$objectTemplate;
$x47 = clone JS::$functionTemplate; $x47->call = '_f004d8b1515b13f36d85248542abfcb6_1'; $x47->parameters = array (
  0 => 'algorithm',
); $x47->name = 'createHash'; $x47->scope = $scope; $x47->properties['prototype'] = clone JS::$objectTemplate; $x47->attributes['prototype'] = JS::WRITABLE; $x47->properties['prototype']->properties['constructor'] = $x47; $x47->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x47->properties['length'] = 1; $x47->attributes['length'] = 0;
$x1->properties['createHash'] = $x47;
$x1->attributes['createHash'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x86 = clone JS::$functionTemplate; $x86->call = '_f004d8b1515b13f36d85248542abfcb6_6'; $x86->parameters = array (
  0 => 'algorithm',
  1 => 'key',
); $x86->name = 'createHmac'; $x86->scope = $scope; $x86->properties['prototype'] = clone JS::$objectTemplate; $x86->attributes['prototype'] = JS::WRITABLE; $x86->properties['prototype']->properties['constructor'] = $x86; $x86->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x86->properties['length'] = 2; $x86->attributes['length'] = 0;
$x1->properties['createHmac'] = $x86;
$x1->attributes['createHmac'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x132 = clone JS::$functionTemplate; $x132->call = '_f004d8b1515b13f36d85248542abfcb6_9'; $x132->parameters = array (
  0 => 'data',
); $x132->scope = $scope; $x132->properties['prototype'] = clone JS::$objectTemplate; $x132->attributes['prototype'] = JS::WRITABLE; $x132->properties['prototype']->properties['constructor'] = $x132; $x132->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x132->properties['length'] = 1; $x132->attributes['length'] = 0;
$x1->properties['md5'] = $x132;
$x1->attributes['md5'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x178 = clone JS::$functionTemplate; $x178->call = '_f004d8b1515b13f36d85248542abfcb6_10'; $x178->parameters = array (
  0 => 'data',
); $x178->scope = $scope; $x178->properties['prototype'] = clone JS::$objectTemplate; $x178->attributes['prototype'] = JS::WRITABLE; $x178->properties['prototype']->properties['constructor'] = $x178; $x178->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x178->properties['length'] = 1; $x178->attributes['length'] = 0;
$x1->properties['sha1'] = $x178;
$x1->attributes['sha1'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x0->properties['exports'] = $x1;
$x0->attributes['exports'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
unset($_require, $Wrequire, $Srequire, $Urequire);
$x179 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('require', $global), 1, 1, '<image>/17_crypto.js');
$_require =& $x179[0]; list(,$Wrequire,$Srequire,$Urequire) = $x179;
if ($Urequire) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x180 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 1, 1, '<image>/17_crypto.js');
$_ReferenceError =& $x180[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x180;
$x181 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 1, 1);
$x182 = $x181($global, $global, $_ReferenceError, array('require is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x182->class) && $x182->class === 'Error' && !isset($x182->properties['file']) && !isset($x182->properties['line']) && !isset($x182->properties['column'])) {$x182->properties['file'] = '<image>/17_crypto.js';$x182->properties['line'] = 1;$x182->properties['column'] = 1;$x182->attributes['file'] = $x182->attributes['line'] = $x182->attributes['column'] = 0; }
throw new JSException($x182, 1, 1, '<image>/17_crypto.js');
}
unset($x183, $W183, $S183, $U183);
$x184 = _f004d8b1515b13f36d85248542abfcb6_4($global, $scope, $_require, JS::toString('modules', $global), 1, 8, '<image>/17_crypto.js');
$x183 =& $x184[0]; list(,$W183,$S183,$U183) = $x184;
$x185 = JS::toString('crypto', $global);
if ($x183 === JS::$undefined || $x183 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x186 = _f004d8b1515b13f36d85248542abfcb6_3($global, $scope, $scope, JS::toString('TypeError', $global), 1, 24, '<image>/17_crypto.js');
$_TypeError =& $x186[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x186;
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 1, 24);
$x188 = $x187($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/17_crypto.js';$x188->properties['line'] = 1;$x188->properties['column'] = 24;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 1, 24, '<image>/17_crypto.js');
}
$x183 = JS::toObject($x183, $global);
unset($x189, $W189, $S189, $U189);
$x193 = _f004d8b1515b13f36d85248542abfcb6_11($global, $scope, $x183, JS::toString($x185, $global), 1, 24, '<image>/17_crypto.js');
$x189 =& $x193[0]; list(,$W189,$S189,$U189) = $x193;
if ($U189 && (!isset($x183->extensible) || $x183->extensible)) {$x183->properties[$x185] = $x189; $x189 =& $x183->properties[$x185]; $x183->attributes[$x185] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U189 = FALSE; $W189 = TRUE; }
if (isset($x183->class) && $x183->class === 'Array') {  if (isset($x183->properties['length']) && $x183->properties['length'] !== JS::$undefined) { $x195 = $x183->properties['length']; }  else { $x195 = 0; } }
if (isset($S189)) {
$x196 = $S189->call;
$global->trace[++$global->trace_sp] = array('<image>/17_crypto.js', 1, 24);
$x197 = $x196($global, $x183, $S189, array($x0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x194 = $x197;
} else {
if (!$U189) {$x194 = $x0;if ($W189) { $x189 = $x0; }  }
else { $x194 = JS::$undefined; }
}
if (isset($x183->class) && $x183->class === 'Array') {if (is_int('crypto') && 'crypto' >= $x183->properties['length']) { $x183->properties['length'] = 'crypto' + 1; }else if ($x185 === 'length' && is_int($x0) && $x195 > $x0) {  for ($i = $x0; $i < $x195; ++$i) {  unset($x183->properties[$i], $x183->attributes[$i]); }}}
;
return JS::$undefined;
}
