function _89174112e855facd9d2f6198b727df5b_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x5 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x6 = $x5($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x6; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _89174112e855facd9d2f6198b727df5b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x5=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x6=$x5($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x6;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _89174112e855facd9d2f6198b727df5b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x11 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x11[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x11;
$x12 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x13 = $x12($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = $file;$x13->properties['line'] = $line;$x13->properties['column'] = $column;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, $line, $column, $file);
}
$W10 = $S10 = $U10 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x10 =& $lookup->properties[$id]; $W10 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S10 = $lookup->setters[$id]; }
else { $x10 = JS::$undefined; $U10 = TRUE; }
return array(&$x10, $W10, $S10, $U10);
}
echo 'function _89174112e855facd9d2f6198b727df5b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x11=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x11[0];list(,$WTypeError,$STypeError,$UTypeError)=$x11;$x12=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x13=$x12($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=$file;$x13->properties[\'line\']=$line;$x13->properties[\'column\']=$column;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,$line,$column,$file);}$W10=$S10=$U10=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x10=&$lookup->properties[$id];$W10=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S10=$lookup->setters[$id];}else{$x10=JS::$undefined;$U10=TRUE;}return array(&$x10,$W10,$S10,$U10);}', "\n";
function _89174112e855facd9d2f6198b727df5b_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['Error'] = $fn;
$_Error =& $scope->properties['Error'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = clone JS::$objectTemplate;
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x2;
$x3 = !(((gettype($_message) === gettype(JS::$undefined) && $_message === JS::$undefined))|| (((is_float($_message) || is_int($_message)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_message == JS::$undefined));
if (JS::toBoolean($x3, $global)) {
$x4 = JS::toString('message', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x7 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 5, 13, '<image>/11_error.js');
$_TypeError =& $x7[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x7;
$x8 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 5, 13);
$x9 = $x8($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x9->class) && $x9->class === 'Error' && !isset($x9->properties['file']) && !isset($x9->properties['line']) && !isset($x9->properties['column'])) {$x9->properties['file'] = '<image>/11_error.js';$x9->properties['line'] = 5;$x9->properties['column'] = 13;$x9->attributes['file'] = $x9->attributes['line'] = $x9->attributes['column'] = 0; }
throw new JSException($x9, 5, 13, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x10, $W10, $S10, $U10);
$x14 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x4, $global), 5, 13, '<image>/11_error.js');
$x10 =& $x14[0]; list(,$W10,$S10,$U10) = $x14;
if ($U10 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x4] = $x10; $x10 =& $_e->properties[$x4]; $_e->attributes[$x4] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U10 = FALSE; $W10 = TRUE; }
if (isset($S10)) {
$x16 = $S10->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 5, 13);
$x17 = $x16($global, $_e, $S10, array($_message), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x17;
} else {
if (!$U10) {$x15 = $_message;if ($W10) { $x10 = $_message; }  }
else { $x15 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('message') && 'message' >= $_e->properties['length']) { $_e->properties['length'] = 'message' + 1; };
};
$_e->prototype =$_Error->properties['prototype'];
$_e->class = 'Error';
$_e->extensible = TRUE;
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'Error\']=$fn;$_Error=&$scope->properties[\'Error\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x2;$x3=!(((gettype($_message)===gettype(JS::$undefined)&&$_message===JS::$undefined))||(((is_float($_message)||is_int($_message))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_message==JS::$undefined));if(JS::toBoolean($x3,$global)){$x4=JS::toString(\'message\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x7=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),5,13,\'<image>/11_error.js\');$_TypeError=&$x7[0];list(,$WTypeError,$STypeError,$UTypeError)=$x7;$x8=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x9=$x8($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/11_error.js\';$x9->properties[\'line\']=5;$x9->properties[\'column\']=13;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,5,13,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x10,$W10,$S10,$U10);$x14=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x4,$global),5,13,\'<image>/11_error.js\');$x10=&$x14[0];list(,$W10,$S10,$U10)=$x14;if($U10&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x4]=$x10;$x10=&$_e->properties[$x4];$_e->attributes[$x4]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U10=FALSE;$W10=TRUE;}if(isset($S10)){$x16=$S10->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x17=$x16($global,$_e,$S10,array($_message),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x17;}else{if(!$U10){$x15=$_message;if($W10){$x10=$_message;}}else{$x15=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'message\')&&\'message\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'message\'+1;}}$_e->prototype=$_Error->properties[\'prototype\'];$_e->class=\'Error\';$_e->extensible=TRUE;return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x28 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x28[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x28;
$x29 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x30 = $x29($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x30->class) && $x30->class === 'Error' && !isset($x30->properties['file']) && !isset($x30->properties['line']) && !isset($x30->properties['column'])) {$x30->properties['file'] = $file;$x30->properties['line'] = $line;$x30->properties['column'] = $column;$x30->attributes['file'] = $x30->attributes['line'] = $x30->attributes['column'] = 0; }
throw new JSException($x30, $line, $column, $file);
}
$W27 = $S27 = $U27 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x27 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x31 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x32 = $x31($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x27 = $x32; }
else { $x27 = JS::$undefined; $U27 = TRUE; }
return array(&$x27, $W27, $S27, $U27);
}
echo 'function _89174112e855facd9d2f6198b727df5b_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x28=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x28[0];list(,$WTypeError,$STypeError,$UTypeError)=$x28;$x29=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x30=$x29($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x30->class)&&$x30->class===\'Error\'&&!isset($x30->properties[\'file\'])&&!isset($x30->properties[\'line\'])&&!isset($x30->properties[\'column\'])){$x30->properties[\'file\']=$file;$x30->properties[\'line\']=$line;$x30->properties[\'column\']=$column;$x30->attributes[\'file\']=$x30->attributes[\'line\']=$x30->attributes[\'column\']=0;}throw new JSException($x30,$line,$column,$file);}$W27=$S27=$U27=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x27=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x31=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x32=$x31($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x27=$x32;}else{$x27=JS::$undefined;$U27=TRUE;}return array(&$x27,$W27,$S27,$U27);}', "\n";
function _89174112e855facd9d2f6198b727df5b_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x20 =& $scope->properties['arguments'];
$x20->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x20->properties[$i] = $args[$i];
$x20->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['RangeError'] = $fn;
$_RangeError =& $scope->properties['RangeError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x23 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 52, 14, '<image>/11_error.js');
$_Error =& $x23[0]; list(,$WError,$SError,$UError) = $x23;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x24 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 52, 14, '<image>/11_error.js');
$_ReferenceError =& $x24[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x24;
$x25 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 14);
$x26 = $x25($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x26->class) && $x26->class === 'Error' && !isset($x26->properties['file']) && !isset($x26->properties['line']) && !isset($x26->properties['column'])) {$x26->properties['file'] = '<image>/11_error.js';$x26->properties['line'] = 52;$x26->properties['column'] = 14;$x26->attributes['file'] = $x26->attributes['line'] = $x26->attributes['column'] = 0; }
throw new JSException($x26, 52, 14, '<image>/11_error.js');
}
$x21 = clone JS::$objectTemplate;
unset($x27, $W27, $S27, $U27);
$x33 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 52, 10, '<image>/11_error.js');
$x27 =& $x33[0]; list(,$W27,$S27,$U27) = $x33;
$x22 = $x27;
$x21->prototype = $x22;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x36 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 52, 10, '<image>/11_error.js');
$_TypeError =& $x36[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x36;
$x37 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 10);
$x38 = $x37($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x38->class) && $x38->class === 'Error' && !isset($x38->properties['file']) && !isset($x38->properties['line']) && !isset($x38->properties['column'])) {$x38->properties['file'] = '<image>/11_error.js';$x38->properties['line'] = 52;$x38->properties['column'] = 10;$x38->attributes['file'] = $x38->attributes['line'] = $x38->attributes['column'] = 0; }
throw new JSException($x38, 52, 10, '<image>/11_error.js');
}
$x34 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 10);
$x35 = $x34($global, $x21, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x22 = $x35;
if (is_object($x22) && $x22 !== JS::$undefined) { $x21 = $x22; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x21;
$x39 = 'RangeError';
$x40 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x41 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 53, 9, '<image>/11_error.js');
$_TypeError =& $x41[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x41;
$x42 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x43 = $x42($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x43->class) && $x43->class === 'Error' && !isset($x43->properties['file']) && !isset($x43->properties['line']) && !isset($x43->properties['column'])) {$x43->properties['file'] = '<image>/11_error.js';$x43->properties['line'] = 53;$x43->properties['column'] = 9;$x43->attributes['file'] = $x43->attributes['line'] = $x43->attributes['column'] = 0; }
throw new JSException($x43, 53, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x44, $W44, $S44, $U44);
$x45 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x40, $global), 53, 9, '<image>/11_error.js');
$x44 =& $x45[0]; list(,$W44,$S44,$U44) = $x45;
if ($U44 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x40] = $x44; $x44 =& $_e->properties[$x40]; $_e->attributes[$x40] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U44 = FALSE; $W44 = TRUE; }
if (isset($S44)) {
$x47 = $S44->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x48 = $x47($global, $_e, $S44, array($x39), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x46 = $x48;
} else {
if (!$U44) {$x46 = $x39;if ($W44) { $x44 = $x39; }  }
else { $x46 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_RangeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x20=&$scope->properties[\'arguments\'];$x20->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x20->properties[$i]=$args[$i];$x20->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'RangeError\']=$fn;$_RangeError=&$scope->properties[\'RangeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x23=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),52,14,\'<image>/11_error.js\');$_Error=&$x23[0];list(,$WError,$SError,$UError)=$x23;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x24=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),52,14,\'<image>/11_error.js\');$_ReferenceError=&$x24[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x24;$x25=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,14);$x26=$x25($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'&&!isset($x26->properties[\'file\'])&&!isset($x26->properties[\'line\'])&&!isset($x26->properties[\'column\'])){$x26->properties[\'file\']=\'<image>/11_error.js\';$x26->properties[\'line\']=52;$x26->properties[\'column\']=14;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,52,14,\'<image>/11_error.js\');}$x21=clone JS::$objectTemplate;unset($x27,$W27,$S27,$U27);$x33=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),52,10,\'<image>/11_error.js\');$x27=&$x33[0];list(,$W27,$S27,$U27)=$x33;$x22=$x27;$x21->prototype=$x22;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x36=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),52,10,\'<image>/11_error.js\');$_TypeError=&$x36[0];list(,$WTypeError,$STypeError,$UTypeError)=$x36;$x37=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x38=$x37($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x38->class)&&$x38->class===\'Error\'&&!isset($x38->properties[\'file\'])&&!isset($x38->properties[\'line\'])&&!isset($x38->properties[\'column\'])){$x38->properties[\'file\']=\'<image>/11_error.js\';$x38->properties[\'line\']=52;$x38->properties[\'column\']=10;$x38->attributes[\'file\']=$x38->attributes[\'line\']=$x38->attributes[\'column\']=0;}throw new JSException($x38,52,10,\'<image>/11_error.js\');}$x34=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x35=$x34($global,$x21,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x22=$x35;if(is_object($x22)&&$x22!==JS::$undefined){$x21=$x22;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x21;$x39=\'RangeError\';$x40=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x41=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),53,9,\'<image>/11_error.js\');$_TypeError=&$x41[0];list(,$WTypeError,$STypeError,$UTypeError)=$x41;$x42=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x43=$x42($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x43->class)&&$x43->class===\'Error\'&&!isset($x43->properties[\'file\'])&&!isset($x43->properties[\'line\'])&&!isset($x43->properties[\'column\'])){$x43->properties[\'file\']=\'<image>/11_error.js\';$x43->properties[\'line\']=53;$x43->properties[\'column\']=9;$x43->attributes[\'file\']=$x43->attributes[\'line\']=$x43->attributes[\'column\']=0;}throw new JSException($x43,53,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x44,$W44,$S44,$U44);$x45=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x40,$global),53,9,\'<image>/11_error.js\');$x44=&$x45[0];list(,$W44,$S44,$U44)=$x45;if($U44&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x40]=$x44;$x44=&$_e->properties[$x40];$_e->attributes[$x40]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U44=FALSE;$W44=TRUE;}if(isset($S44)){$x47=$S44->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x48=$x47($global,$_e,$S44,array($x39),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x46=$x48;}else{if(!$U44){$x46=$x39;if($W44){$x44=$x39;}}else{$x46=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_RangeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x51 =& $scope->properties['arguments'];
$x51->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x51->properties[$i] = $args[$i];
$x51->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['ReferenceError'] = $fn;
$_ReferenceError =& $scope->properties['ReferenceError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x54 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 61, 14, '<image>/11_error.js');
$_Error =& $x54[0]; list(,$WError,$SError,$UError) = $x54;
if ($UError) {
$x55 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 14);
$x56 = $x55($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x56->class) && $x56->class === 'Error' && !isset($x56->properties['file']) && !isset($x56->properties['line']) && !isset($x56->properties['column'])) {$x56->properties['file'] = '<image>/11_error.js';$x56->properties['line'] = 61;$x56->properties['column'] = 14;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
throw new JSException($x56, 61, 14, '<image>/11_error.js');
}
$x52 = clone JS::$objectTemplate;
unset($x57, $W57, $S57, $U57);
$x58 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 61, 10, '<image>/11_error.js');
$x57 =& $x58[0]; list(,$W57,$S57,$U57) = $x58;
$x53 = $x57;
$x52->prototype = $x53;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x61 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 61, 10, '<image>/11_error.js');
$_TypeError =& $x61[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x61;
$x62 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x63 = $x62($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x63->class) && $x63->class === 'Error' && !isset($x63->properties['file']) && !isset($x63->properties['line']) && !isset($x63->properties['column'])) {$x63->properties['file'] = '<image>/11_error.js';$x63->properties['line'] = 61;$x63->properties['column'] = 10;$x63->attributes['file'] = $x63->attributes['line'] = $x63->attributes['column'] = 0; }
throw new JSException($x63, 61, 10, '<image>/11_error.js');
}
$x59 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x60 = $x59($global, $x52, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x53 = $x60;
if (is_object($x53) && $x53 !== JS::$undefined) { $x52 = $x53; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x52;
$x64 = 'ReferenceError';
$x65 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x66 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 9, '<image>/11_error.js');
$_TypeError =& $x66[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x66;
$x67 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x68 = $x67($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x68->class) && $x68->class === 'Error' && !isset($x68->properties['file']) && !isset($x68->properties['line']) && !isset($x68->properties['column'])) {$x68->properties['file'] = '<image>/11_error.js';$x68->properties['line'] = 62;$x68->properties['column'] = 9;$x68->attributes['file'] = $x68->attributes['line'] = $x68->attributes['column'] = 0; }
throw new JSException($x68, 62, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x69, $W69, $S69, $U69);
$x70 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x65, $global), 62, 9, '<image>/11_error.js');
$x69 =& $x70[0]; list(,$W69,$S69,$U69) = $x70;
if ($U69 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x65] = $x69; $x69 =& $_e->properties[$x65]; $_e->attributes[$x65] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U69 = FALSE; $W69 = TRUE; }
if (isset($S69)) {
$x72 = $S69->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x73 = $x72($global, $_e, $S69, array($x64), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x71 = $x73;
} else {
if (!$U69) {$x71 = $x64;if ($W69) { $x69 = $x64; }  }
else { $x71 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_ReferenceError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x51=&$scope->properties[\'arguments\'];$x51->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x51->properties[$i]=$args[$i];$x51->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'ReferenceError\']=$fn;$_ReferenceError=&$scope->properties[\'ReferenceError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x54=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),61,14,\'<image>/11_error.js\');$_Error=&$x54[0];list(,$WError,$SError,$UError)=$x54;if($UError){$x55=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,14);$x56=$x55($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/11_error.js\';$x56->properties[\'line\']=61;$x56->properties[\'column\']=14;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,61,14,\'<image>/11_error.js\');}$x52=clone JS::$objectTemplate;unset($x57,$W57,$S57,$U57);$x58=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),61,10,\'<image>/11_error.js\');$x57=&$x58[0];list(,$W57,$S57,$U57)=$x58;$x53=$x57;$x52->prototype=$x53;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x61=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),61,10,\'<image>/11_error.js\');$_TypeError=&$x61[0];list(,$WTypeError,$STypeError,$UTypeError)=$x61;$x62=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x63=$x62($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'&&!isset($x63->properties[\'file\'])&&!isset($x63->properties[\'line\'])&&!isset($x63->properties[\'column\'])){$x63->properties[\'file\']=\'<image>/11_error.js\';$x63->properties[\'line\']=61;$x63->properties[\'column\']=10;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,61,10,\'<image>/11_error.js\');}$x59=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x60=$x59($global,$x52,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x53=$x60;if(is_object($x53)&&$x53!==JS::$undefined){$x52=$x53;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x52;$x64=\'ReferenceError\';$x65=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x66=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,9,\'<image>/11_error.js\');$_TypeError=&$x66[0];list(,$WTypeError,$STypeError,$UTypeError)=$x66;$x67=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x68=$x67($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x68->class)&&$x68->class===\'Error\'&&!isset($x68->properties[\'file\'])&&!isset($x68->properties[\'line\'])&&!isset($x68->properties[\'column\'])){$x68->properties[\'file\']=\'<image>/11_error.js\';$x68->properties[\'line\']=62;$x68->properties[\'column\']=9;$x68->attributes[\'file\']=$x68->attributes[\'line\']=$x68->attributes[\'column\']=0;}throw new JSException($x68,62,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x69,$W69,$S69,$U69);$x70=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x65,$global),62,9,\'<image>/11_error.js\');$x69=&$x70[0];list(,$W69,$S69,$U69)=$x70;if($U69&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x65]=$x69;$x69=&$_e->properties[$x65];$_e->attributes[$x65]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U69=FALSE;$W69=TRUE;}if(isset($S69)){$x72=$S69->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x73=$x72($global,$_e,$S69,array($x64),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x71=$x73;}else{if(!$U69){$x71=$x64;if($W69){$x69=$x64;}}else{$x71=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_ReferenceError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x76 =& $scope->properties['arguments'];
$x76->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x76->properties[$i] = $args[$i];
$x76->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['SyntaxError'] = $fn;
$_SyntaxError =& $scope->properties['SyntaxError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x79 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 70, 14, '<image>/11_error.js');
$_Error =& $x79[0]; list(,$WError,$SError,$UError) = $x79;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x80 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 70, 14, '<image>/11_error.js');
$_ReferenceError =& $x80[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x80;
$x81 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 14);
$x82 = $x81($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x82->class) && $x82->class === 'Error' && !isset($x82->properties['file']) && !isset($x82->properties['line']) && !isset($x82->properties['column'])) {$x82->properties['file'] = '<image>/11_error.js';$x82->properties['line'] = 70;$x82->properties['column'] = 14;$x82->attributes['file'] = $x82->attributes['line'] = $x82->attributes['column'] = 0; }
throw new JSException($x82, 70, 14, '<image>/11_error.js');
}
$x77 = clone JS::$objectTemplate;
unset($x83, $W83, $S83, $U83);
$x84 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 70, 10, '<image>/11_error.js');
$x83 =& $x84[0]; list(,$W83,$S83,$U83) = $x84;
$x78 = $x83;
$x77->prototype = $x78;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x87 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 70, 10, '<image>/11_error.js');
$_TypeError =& $x87[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x87;
$x88 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x89 = $x88($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error' && !isset($x89->properties['file']) && !isset($x89->properties['line']) && !isset($x89->properties['column'])) {$x89->properties['file'] = '<image>/11_error.js';$x89->properties['line'] = 70;$x89->properties['column'] = 10;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, 70, 10, '<image>/11_error.js');
}
$x85 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x86 = $x85($global, $x77, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x78 = $x86;
if (is_object($x78) && $x78 !== JS::$undefined) { $x77 = $x78; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x77;
$x90 = 'SyntaxError';
$x91 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x92 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 71, 9, '<image>/11_error.js');
$_TypeError =& $x92[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x92;
$x93 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x94 = $x93($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x94->class) && $x94->class === 'Error' && !isset($x94->properties['file']) && !isset($x94->properties['line']) && !isset($x94->properties['column'])) {$x94->properties['file'] = '<image>/11_error.js';$x94->properties['line'] = 71;$x94->properties['column'] = 9;$x94->attributes['file'] = $x94->attributes['line'] = $x94->attributes['column'] = 0; }
throw new JSException($x94, 71, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x95, $W95, $S95, $U95);
$x96 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x91, $global), 71, 9, '<image>/11_error.js');
$x95 =& $x96[0]; list(,$W95,$S95,$U95) = $x96;
if ($U95 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x91] = $x95; $x95 =& $_e->properties[$x91]; $_e->attributes[$x91] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U95 = FALSE; $W95 = TRUE; }
if (isset($S95)) {
$x98 = $S95->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x99 = $x98($global, $_e, $S95, array($x90), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x97 = $x99;
} else {
if (!$U95) {$x97 = $x90;if ($W95) { $x95 = $x90; }  }
else { $x97 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_SyntaxError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x76=&$scope->properties[\'arguments\'];$x76->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x76->properties[$i]=$args[$i];$x76->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'SyntaxError\']=$fn;$_SyntaxError=&$scope->properties[\'SyntaxError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x79=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),70,14,\'<image>/11_error.js\');$_Error=&$x79[0];list(,$WError,$SError,$UError)=$x79;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x80=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),70,14,\'<image>/11_error.js\');$_ReferenceError=&$x80[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x80;$x81=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,14);$x82=$x81($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x82->class)&&$x82->class===\'Error\'&&!isset($x82->properties[\'file\'])&&!isset($x82->properties[\'line\'])&&!isset($x82->properties[\'column\'])){$x82->properties[\'file\']=\'<image>/11_error.js\';$x82->properties[\'line\']=70;$x82->properties[\'column\']=14;$x82->attributes[\'file\']=$x82->attributes[\'line\']=$x82->attributes[\'column\']=0;}throw new JSException($x82,70,14,\'<image>/11_error.js\');}$x77=clone JS::$objectTemplate;unset($x83,$W83,$S83,$U83);$x84=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),70,10,\'<image>/11_error.js\');$x83=&$x84[0];list(,$W83,$S83,$U83)=$x84;$x78=$x83;$x77->prototype=$x78;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x87=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),70,10,\'<image>/11_error.js\');$_TypeError=&$x87[0];list(,$WTypeError,$STypeError,$UTypeError)=$x87;$x88=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x89=$x88($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x89->class)&&$x89->class===\'Error\'&&!isset($x89->properties[\'file\'])&&!isset($x89->properties[\'line\'])&&!isset($x89->properties[\'column\'])){$x89->properties[\'file\']=\'<image>/11_error.js\';$x89->properties[\'line\']=70;$x89->properties[\'column\']=10;$x89->attributes[\'file\']=$x89->attributes[\'line\']=$x89->attributes[\'column\']=0;}throw new JSException($x89,70,10,\'<image>/11_error.js\');}$x85=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x86=$x85($global,$x77,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x78=$x86;if(is_object($x78)&&$x78!==JS::$undefined){$x77=$x78;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x77;$x90=\'SyntaxError\';$x91=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x92=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),71,9,\'<image>/11_error.js\');$_TypeError=&$x92[0];list(,$WTypeError,$STypeError,$UTypeError)=$x92;$x93=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x94=$x93($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x94->class)&&$x94->class===\'Error\'&&!isset($x94->properties[\'file\'])&&!isset($x94->properties[\'line\'])&&!isset($x94->properties[\'column\'])){$x94->properties[\'file\']=\'<image>/11_error.js\';$x94->properties[\'line\']=71;$x94->properties[\'column\']=9;$x94->attributes[\'file\']=$x94->attributes[\'line\']=$x94->attributes[\'column\']=0;}throw new JSException($x94,71,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x95,$W95,$S95,$U95);$x96=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x91,$global),71,9,\'<image>/11_error.js\');$x95=&$x96[0];list(,$W95,$S95,$U95)=$x96;if($U95&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x91]=$x95;$x95=&$_e->properties[$x91];$_e->attributes[$x91]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U95=FALSE;$W95=TRUE;}if(isset($S95)){$x98=$S95->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x99=$x98($global,$_e,$S95,array($x90),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x97=$x99;}else{if(!$U95){$x97=$x90;if($W95){$x95=$x90;}}else{$x97=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_SyntaxError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x102 =& $scope->properties['arguments'];
$x102->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x102->properties[$i] = $args[$i];
$x102->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['TypeError'] = $fn;
$_TypeError =& $scope->properties['TypeError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x105 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 79, 14, '<image>/11_error.js');
$_Error =& $x105[0]; list(,$WError,$SError,$UError) = $x105;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x106 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 79, 14, '<image>/11_error.js');
$_ReferenceError =& $x106[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x106;
$x107 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 14);
$x108 = $x107($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x108->class) && $x108->class === 'Error' && !isset($x108->properties['file']) && !isset($x108->properties['line']) && !isset($x108->properties['column'])) {$x108->properties['file'] = '<image>/11_error.js';$x108->properties['line'] = 79;$x108->properties['column'] = 14;$x108->attributes['file'] = $x108->attributes['line'] = $x108->attributes['column'] = 0; }
throw new JSException($x108, 79, 14, '<image>/11_error.js');
}
$x103 = clone JS::$objectTemplate;
unset($x109, $W109, $S109, $U109);
$x110 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 79, 10, '<image>/11_error.js');
$x109 =& $x110[0]; list(,$W109,$S109,$U109) = $x110;
$x104 = $x109;
$x103->prototype = $x104;
if (!(is_object($_Error) && isset($_Error->call))) { 
$x113 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x114 = $x113($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x114->class) && $x114->class === 'Error' && !isset($x114->properties['file']) && !isset($x114->properties['line']) && !isset($x114->properties['column'])) {$x114->properties['file'] = '<image>/11_error.js';$x114->properties['line'] = 79;$x114->properties['column'] = 10;$x114->attributes['file'] = $x114->attributes['line'] = $x114->attributes['column'] = 0; }
throw new JSException($x114, 79, 10, '<image>/11_error.js');
}
$x111 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x112 = $x111($global, $x103, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x104 = $x112;
if (is_object($x104) && $x104 !== JS::$undefined) { $x103 = $x104; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x103;
$x115 = 'TypeError';
$x116 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
$x117 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x118 = $x117($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x118->class) && $x118->class === 'Error' && !isset($x118->properties['file']) && !isset($x118->properties['line']) && !isset($x118->properties['column'])) {$x118->properties['file'] = '<image>/11_error.js';$x118->properties['line'] = 80;$x118->properties['column'] = 9;$x118->attributes['file'] = $x118->attributes['line'] = $x118->attributes['column'] = 0; }
throw new JSException($x118, 80, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x119, $W119, $S119, $U119);
$x120 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x116, $global), 80, 9, '<image>/11_error.js');
$x119 =& $x120[0]; list(,$W119,$S119,$U119) = $x120;
if ($U119 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x116] = $x119; $x119 =& $_e->properties[$x116]; $_e->attributes[$x116] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U119 = FALSE; $W119 = TRUE; }
if (isset($S119)) {
$x122 = $S119->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x123 = $x122($global, $_e, $S119, array($x115), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x121 = $x123;
} else {
if (!$U119) {$x121 = $x115;if ($W119) { $x119 = $x115; }  }
else { $x121 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_TypeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x102=&$scope->properties[\'arguments\'];$x102->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x102->properties[$i]=$args[$i];$x102->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'TypeError\']=$fn;$_TypeError=&$scope->properties[\'TypeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x105=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),79,14,\'<image>/11_error.js\');$_Error=&$x105[0];list(,$WError,$SError,$UError)=$x105;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x106=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),79,14,\'<image>/11_error.js\');$_ReferenceError=&$x106[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x106;$x107=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,14);$x108=$x107($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x108->class)&&$x108->class===\'Error\'&&!isset($x108->properties[\'file\'])&&!isset($x108->properties[\'line\'])&&!isset($x108->properties[\'column\'])){$x108->properties[\'file\']=\'<image>/11_error.js\';$x108->properties[\'line\']=79;$x108->properties[\'column\']=14;$x108->attributes[\'file\']=$x108->attributes[\'line\']=$x108->attributes[\'column\']=0;}throw new JSException($x108,79,14,\'<image>/11_error.js\');}$x103=clone JS::$objectTemplate;unset($x109,$W109,$S109,$U109);$x110=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),79,10,\'<image>/11_error.js\');$x109=&$x110[0];list(,$W109,$S109,$U109)=$x110;$x104=$x109;$x103->prototype=$x104;if(!(is_object($_Error)&&isset($_Error->call))){$x113=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x114=$x113($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x114->class)&&$x114->class===\'Error\'&&!isset($x114->properties[\'file\'])&&!isset($x114->properties[\'line\'])&&!isset($x114->properties[\'column\'])){$x114->properties[\'file\']=\'<image>/11_error.js\';$x114->properties[\'line\']=79;$x114->properties[\'column\']=10;$x114->attributes[\'file\']=$x114->attributes[\'line\']=$x114->attributes[\'column\']=0;}throw new JSException($x114,79,10,\'<image>/11_error.js\');}$x111=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x112=$x111($global,$x103,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x104=$x112;if(is_object($x104)&&$x104!==JS::$undefined){$x103=$x104;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x103;$x115=\'TypeError\';$x116=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){$x117=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x118=$x117($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x118->class)&&$x118->class===\'Error\'&&!isset($x118->properties[\'file\'])&&!isset($x118->properties[\'line\'])&&!isset($x118->properties[\'column\'])){$x118->properties[\'file\']=\'<image>/11_error.js\';$x118->properties[\'line\']=80;$x118->properties[\'column\']=9;$x118->attributes[\'file\']=$x118->attributes[\'line\']=$x118->attributes[\'column\']=0;}throw new JSException($x118,80,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x119,$W119,$S119,$U119);$x120=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x116,$global),80,9,\'<image>/11_error.js\');$x119=&$x120[0];list(,$W119,$S119,$U119)=$x120;if($U119&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x116]=$x119;$x119=&$_e->properties[$x116];$_e->attributes[$x116]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U119=FALSE;$W119=TRUE;}if(isset($S119)){$x122=$S119->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x123=$x122($global,$_e,$S119,array($x115),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x121=$x123;}else{if(!$U119){$x121=$x115;if($W119){$x119=$x115;}}else{$x121=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_TypeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x126 =& $scope->properties['arguments'];
$x126->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x126->properties[$i] = $args[$i];
$x126->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['NotImplementedError'] = $fn;
$_NotImplementedError =& $scope->properties['NotImplementedError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x129 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 89, 14, '<image>/11_error.js');
$_Error =& $x129[0]; list(,$WError,$SError,$UError) = $x129;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x130 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 89, 14, '<image>/11_error.js');
$_ReferenceError =& $x130[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x130;
$x131 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 14);
$x132 = $x131($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x132->class) && $x132->class === 'Error' && !isset($x132->properties['file']) && !isset($x132->properties['line']) && !isset($x132->properties['column'])) {$x132->properties['file'] = '<image>/11_error.js';$x132->properties['line'] = 89;$x132->properties['column'] = 14;$x132->attributes['file'] = $x132->attributes['line'] = $x132->attributes['column'] = 0; }
throw new JSException($x132, 89, 14, '<image>/11_error.js');
}
$x127 = clone JS::$objectTemplate;
unset($x133, $W133, $S133, $U133);
$x134 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 89, 10, '<image>/11_error.js');
$x133 =& $x134[0]; list(,$W133,$S133,$U133) = $x134;
$x128 = $x133;
$x127->prototype = $x128;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x137 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 89, 10, '<image>/11_error.js');
$_TypeError =& $x137[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x137;
$x138 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x139 = $x138($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x139->class) && $x139->class === 'Error' && !isset($x139->properties['file']) && !isset($x139->properties['line']) && !isset($x139->properties['column'])) {$x139->properties['file'] = '<image>/11_error.js';$x139->properties['line'] = 89;$x139->properties['column'] = 10;$x139->attributes['file'] = $x139->attributes['line'] = $x139->attributes['column'] = 0; }
throw new JSException($x139, 89, 10, '<image>/11_error.js');
}
$x135 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x136 = $x135($global, $x127, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x128 = $x136;
if (is_object($x128) && $x128 !== JS::$undefined) { $x127 = $x128; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x127;
$x140 = 'NotImplementedError';
$x141 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x142 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 90, 9, '<image>/11_error.js');
$_TypeError =& $x142[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x142;
$x143 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x144 = $x143($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error' && !isset($x144->properties['file']) && !isset($x144->properties['line']) && !isset($x144->properties['column'])) {$x144->properties['file'] = '<image>/11_error.js';$x144->properties['line'] = 90;$x144->properties['column'] = 9;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 90, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x145, $W145, $S145, $U145);
$x146 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x141, $global), 90, 9, '<image>/11_error.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
if ($U145 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x141] = $x145; $x145 =& $_e->properties[$x141]; $_e->attributes[$x141] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U145 = FALSE; $W145 = TRUE; }
if (isset($S145)) {
$x148 = $S145->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x149 = $x148($global, $_e, $S145, array($x140), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x147 = $x149;
} else {
if (!$U145) {$x147 = $x140;if ($W145) { $x145 = $x140; }  }
else { $x147 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_NotImplementedError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x126=&$scope->properties[\'arguments\'];$x126->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x126->properties[$i]=$args[$i];$x126->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'NotImplementedError\']=$fn;$_NotImplementedError=&$scope->properties[\'NotImplementedError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x129=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),89,14,\'<image>/11_error.js\');$_Error=&$x129[0];list(,$WError,$SError,$UError)=$x129;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x130=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),89,14,\'<image>/11_error.js\');$_ReferenceError=&$x130[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x130;$x131=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,14);$x132=$x131($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x132->class)&&$x132->class===\'Error\'&&!isset($x132->properties[\'file\'])&&!isset($x132->properties[\'line\'])&&!isset($x132->properties[\'column\'])){$x132->properties[\'file\']=\'<image>/11_error.js\';$x132->properties[\'line\']=89;$x132->properties[\'column\']=14;$x132->attributes[\'file\']=$x132->attributes[\'line\']=$x132->attributes[\'column\']=0;}throw new JSException($x132,89,14,\'<image>/11_error.js\');}$x127=clone JS::$objectTemplate;unset($x133,$W133,$S133,$U133);$x134=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),89,10,\'<image>/11_error.js\');$x133=&$x134[0];list(,$W133,$S133,$U133)=$x134;$x128=$x133;$x127->prototype=$x128;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x137=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),89,10,\'<image>/11_error.js\');$_TypeError=&$x137[0];list(,$WTypeError,$STypeError,$UTypeError)=$x137;$x138=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x139=$x138($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x139->class)&&$x139->class===\'Error\'&&!isset($x139->properties[\'file\'])&&!isset($x139->properties[\'line\'])&&!isset($x139->properties[\'column\'])){$x139->properties[\'file\']=\'<image>/11_error.js\';$x139->properties[\'line\']=89;$x139->properties[\'column\']=10;$x139->attributes[\'file\']=$x139->attributes[\'line\']=$x139->attributes[\'column\']=0;}throw new JSException($x139,89,10,\'<image>/11_error.js\');}$x135=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x136=$x135($global,$x127,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x128=$x136;if(is_object($x128)&&$x128!==JS::$undefined){$x127=$x128;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x127;$x140=\'NotImplementedError\';$x141=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x142=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),90,9,\'<image>/11_error.js\');$_TypeError=&$x142[0];list(,$WTypeError,$STypeError,$UTypeError)=$x142;$x143=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x144=$x143($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x144->class)&&$x144->class===\'Error\'&&!isset($x144->properties[\'file\'])&&!isset($x144->properties[\'line\'])&&!isset($x144->properties[\'column\'])){$x144->properties[\'file\']=\'<image>/11_error.js\';$x144->properties[\'line\']=90;$x144->properties[\'column\']=9;$x144->attributes[\'file\']=$x144->attributes[\'line\']=$x144->attributes[\'column\']=0;}throw new JSException($x144,90,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x145,$W145,$S145,$U145);$x146=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x141,$global),90,9,\'<image>/11_error.js\');$x145=&$x146[0];list(,$W145,$S145,$U145)=$x146;if($U145&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x141]=$x145;$x145=&$_e->properties[$x141];$_e->attributes[$x141]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U145=FALSE;$W145=TRUE;}if(isset($S145)){$x148=$S145->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x149=$x148($global,$_e,$S145,array($x140),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x147=$x149;}else{if(!$U145){$x147=$x140;if($W145){$x145=$x140;}}else{$x147=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_NotImplementedError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x196 =& $scope->properties['arguments'];
$x196->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x196->properties[$i] = $args[$i];
$x196->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x197, $W197, $S197, $U197);
$x198 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, JS::toString('name', $global), 26, 17, '<image>/11_error.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
$scope->properties['name'] = JS::$undefined; $_name =& $scope->properties['name'];
$Uname = FALSE;
$_name = $x197;
unset($x199, $W199, $S199, $U199);
$x200 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, JS::toString('message', $global), 26, 34, '<image>/11_error.js');
$x199 =& $x200[0]; list(,$W199,$S199,$U199) = $x200;
$scope->properties['msg'] = JS::$undefined; $_msg =& $scope->properties['msg'];
$Umsg = FALSE;
$_msg = $x199;
$x201 = (((gettype($_name) === gettype(JS::$undefined) && $_name === JS::$undefined))|| (((is_float($_name) || is_int($_name)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_name == JS::$undefined));
if (JS::toBoolean($x201, $global)) {
$x202 = '';
if ($Uname) {$global->properties['name'] = $_name; $_name =& $global->properties['name']; }
$_name = $x202;;
};
$x203 = (((gettype($_msg) === gettype(JS::$undefined) && $_msg === JS::$undefined))|| (((is_float($_msg) || is_int($_msg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_msg == JS::$undefined));
if (JS::toBoolean($x203, $global)) {
$x204 = '';
if ($Umsg) {$global->properties['msg'] = $_msg; $_msg =& $global->properties['msg']; }
$_msg = $x204;;
};
$x206 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
$x205 = $x206;
if (JS::toBoolean($x205, $global)) {
$x207 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
$x205 = $x207; }
if (JS::toBoolean($x205, $global)) {

return 'Error';;
};
$x208 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
if (JS::toBoolean($x208, $global)) {

return $_msg;;
};
$x209 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
if (JS::toBoolean($x209, $global)) {

return $_name;;
};
$x212 = JS::toPrimitive($_name, $global);
$x213 = JS::toPrimitive(': ', $global);
$x210 = JS::toPrimitive((is_string($x212) || is_string($x213) ? JS::toString($x212, $global) . JS::toString($x213, $global) : JS::toNumber($x212, $global) + JS::toNumber($x213, $global)), $global);
$x211 = JS::toPrimitive($_msg, $global);
return (is_string($x210) || is_string($x211) ? JS::toString($x210, $global) . JS::toString($x211, $global) : JS::toNumber($x210, $global) + JS::toNumber($x211, $global));
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x196=&$scope->properties[\'arguments\'];$x196->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x196->properties[$i]=$args[$i];$x196->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x197,$W197,$S197,$U197);$x198=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,JS::toString(\'name\',$global),26,17,\'<image>/11_error.js\');$x197=&$x198[0];list(,$W197,$S197,$U197)=$x198;$scope->properties[\'name\']=JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$_name=$x197;unset($x199,$W199,$S199,$U199);$x200=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,JS::toString(\'message\',$global),26,34,\'<image>/11_error.js\');$x199=&$x200[0];list(,$W199,$S199,$U199)=$x200;$scope->properties[\'msg\']=JS::$undefined;$_msg=&$scope->properties[\'msg\'];$Umsg=FALSE;$_msg=$x199;$x201=(((gettype($_name)===gettype(JS::$undefined)&&$_name===JS::$undefined))||(((is_float($_name)||is_int($_name))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_name==JS::$undefined));if(JS::toBoolean($x201,$global)){$x202=\'\';if($Uname){$global->properties[\'name\']=$_name;$_name=&$global->properties[\'name\'];}$_name=$x202;}$x203=(((gettype($_msg)===gettype(JS::$undefined)&&$_msg===JS::$undefined))||(((is_float($_msg)||is_int($_msg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_msg==JS::$undefined));if(JS::toBoolean($x203,$global)){$x204=\'\';if($Umsg){$global->properties[\'msg\']=$_msg;$_msg=&$global->properties[\'msg\'];}$_msg=$x204;}$x206=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));$x205=$x206;if(JS::toBoolean($x205,$global)){$x207=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));$x205=$x207;}if(JS::toBoolean($x205,$global)){return\'Error\';}$x208=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));if(JS::toBoolean($x208,$global)){return$_msg;}$x209=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));if(JS::toBoolean($x209,$global)){return$_name;}$x212=JS::toPrimitive($_name,$global);$x213=JS::toPrimitive(\': \',$global);$x210=JS::toPrimitive((is_string($x212)||is_string($x213)?JS::toString($x212,$global).JS::toString($x213,$global):JS::toNumber($x212,$global)+JS::toNumber($x213,$global)),$global);$x211=JS::toPrimitive($_msg,$global);return(is_string($x210)||is_string($x211)?JS::toString($x210,$global).JS::toString($x211,$global):JS::toNumber($x210,$global)+JS::toNumber($x211,$global));return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/11_error.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/11_error.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Error;
$_RangeError;
$_ReferenceError;
$_SyntaxError;
$_TypeError;
$_NotImplementedError;
$x18 = clone JS::$functionTemplate; $x18->call = '_89174112e855facd9d2f6198b727df5b_1'; $x18->parameters = array (
  0 => 'message',
); $x18->name = 'Error'; $x18->scope = $scope; $x18->properties['prototype'] = clone JS::$objectTemplate; $x18->attributes['prototype'] = JS::WRITABLE; $x18->properties['prototype']->properties['constructor'] = $x18; $x18->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x18->properties['length'] = 1; $x18->attributes['length'] = 0;
$scope->properties['Error'] = JS::$undefined; $_Error =& $scope->properties['Error'];
$UError = FALSE;
$_Error = $x18;
$x49 = clone JS::$functionTemplate; $x49->call = '_89174112e855facd9d2f6198b727df5b_4'; $x49->parameters = array (
  0 => 'message',
); $x49->name = 'RangeError'; $x49->scope = $scope; $x49->properties['prototype'] = clone JS::$objectTemplate; $x49->attributes['prototype'] = JS::WRITABLE; $x49->properties['prototype']->properties['constructor'] = $x49; $x49->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x49->properties['length'] = 1; $x49->attributes['length'] = 0;
$scope->properties['RangeError'] = JS::$undefined; $_RangeError =& $scope->properties['RangeError'];
$URangeError = FALSE;
$_RangeError = $x49;
$x74 = clone JS::$functionTemplate; $x74->call = '_89174112e855facd9d2f6198b727df5b_6'; $x74->parameters = array (
  0 => 'message',
); $x74->name = 'ReferenceError'; $x74->scope = $scope; $x74->properties['prototype'] = clone JS::$objectTemplate; $x74->attributes['prototype'] = JS::WRITABLE; $x74->properties['prototype']->properties['constructor'] = $x74; $x74->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x74->properties['length'] = 1; $x74->attributes['length'] = 0;
$scope->properties['ReferenceError'] = JS::$undefined; $_ReferenceError =& $scope->properties['ReferenceError'];
$UReferenceError = FALSE;
$_ReferenceError = $x74;
$x100 = clone JS::$functionTemplate; $x100->call = '_89174112e855facd9d2f6198b727df5b_7'; $x100->parameters = array (
  0 => 'message',
); $x100->name = 'SyntaxError'; $x100->scope = $scope; $x100->properties['prototype'] = clone JS::$objectTemplate; $x100->attributes['prototype'] = JS::WRITABLE; $x100->properties['prototype']->properties['constructor'] = $x100; $x100->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x100->properties['length'] = 1; $x100->attributes['length'] = 0;
$scope->properties['SyntaxError'] = JS::$undefined; $_SyntaxError =& $scope->properties['SyntaxError'];
$USyntaxError = FALSE;
$_SyntaxError = $x100;
$x124 = clone JS::$functionTemplate; $x124->call = '_89174112e855facd9d2f6198b727df5b_8'; $x124->parameters = array (
  0 => 'message',
); $x124->name = 'TypeError'; $x124->scope = $scope; $x124->properties['prototype'] = clone JS::$objectTemplate; $x124->attributes['prototype'] = JS::WRITABLE; $x124->properties['prototype']->properties['constructor'] = $x124; $x124->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x124->properties['length'] = 1; $x124->attributes['length'] = 0;
$scope->properties['TypeError'] = JS::$undefined; $_TypeError =& $scope->properties['TypeError'];
$UTypeError = FALSE;
$_TypeError = $x124;
$x150 = clone JS::$functionTemplate; $x150->call = '_89174112e855facd9d2f6198b727df5b_9'; $x150->parameters = array (
  0 => 'message',
); $x150->name = 'NotImplementedError'; $x150->scope = $scope; $x150->properties['prototype'] = clone JS::$objectTemplate; $x150->attributes['prototype'] = JS::WRITABLE; $x150->properties['prototype']->properties['constructor'] = $x150; $x150->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x150->properties['length'] = 1; $x150->attributes['length'] = 0;
$scope->properties['NotImplementedError'] = JS::$undefined; $_NotImplementedError =& $scope->properties['NotImplementedError'];
$UNotImplementedError = FALSE;
$_NotImplementedError = $x150;
$x151 = clone JS::$objectTemplate;
$x152 = JS::toString('prototype', $global);
if ($_Error === JS::$undefined || $_Error === NULL) {
$x153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x154 = $x153($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x154->class) && $x154->class === 'Error' && !isset($x154->properties['file']) && !isset($x154->properties['line']) && !isset($x154->properties['column'])) {$x154->properties['file'] = '<image>/11_error.js';$x154->properties['line'] = 15;$x154->properties['column'] = 17;$x154->attributes['file'] = $x154->attributes['line'] = $x154->attributes['column'] = 0; }
throw new JSException($x154, 15, 17, '<image>/11_error.js');
}
$_Error = JS::toObject($_Error, $global);
unset($x155, $W155, $S155, $U155);
$x156 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_Error, JS::toString($x152, $global), 15, 17, '<image>/11_error.js');
$x155 =& $x156[0]; list(,$W155,$S155,$U155) = $x156;
if ($U155 && (!isset($_Error->extensible) || $_Error->extensible)) {$_Error->properties[$x152] = $x155; $x155 =& $_Error->properties[$x152]; $_Error->attributes[$x152] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U155 = FALSE; $W155 = TRUE; }
if (isset($S155)) {
$x158 = $S155->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x159 = $x158($global, $_Error, $S155, array($x151), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x157 = $x159;
} else {
if (!$U155) {$x157 = $x151;if ($W155) { $x155 = $x151; }  }
else { $x157 = JS::$undefined; }
}
if (isset($_Error->class) && $_Error->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Error->properties['length']) { $_Error->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x160 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Object', $global), 16, 50, '<image>/11_error.js');
$_Object =& $x160[0]; list(,$WObject,$SObject,$UObject) = $x160;
if ($UObject) {
$x161 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 16, 50);
$x162 = $x161($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x162->class) && $x162->class === 'Error' && !isset($x162->properties['file']) && !isset($x162->properties['line']) && !isset($x162->properties['column'])) {$x162->properties['file'] = '<image>/11_error.js';$x162->properties['line'] = 16;$x162->properties['column'] = 50;$x162->attributes['file'] = $x162->attributes['line'] = $x162->attributes['column'] = 0; }
throw new JSException($x162, 16, 50, '<image>/11_error.js');
}
$_Error->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Error->properties['prototype']->class = 'Error';
$_Error->properties['prototype']->extensible = TRUE;
unset($x163, $W163, $S163, $U163);
$x164 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 19, 6, '<image>/11_error.js');
$x163 =& $x164[0]; list(,$W163,$S163,$U163) = $x164;
$x165 = JS::toString('constructor', $global);
if ($x163 === JS::$undefined || $x163 === NULL) {
$x166 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x167 = $x166($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x167->class) && $x167->class === 'Error' && !isset($x167->properties['file']) && !isset($x167->properties['line']) && !isset($x167->properties['column'])) {$x167->properties['file'] = '<image>/11_error.js';$x167->properties['line'] = 19;$x167->properties['column'] = 29;$x167->attributes['file'] = $x167->attributes['line'] = $x167->attributes['column'] = 0; }
throw new JSException($x167, 19, 29, '<image>/11_error.js');
}
$x163 = JS::toObject($x163, $global);
unset($x168, $W168, $S168, $U168);
$x169 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x163, JS::toString($x165, $global), 19, 29, '<image>/11_error.js');
$x168 =& $x169[0]; list(,$W168,$S168,$U168) = $x169;
if ($U168 && (!isset($x163->extensible) || $x163->extensible)) {$x163->properties[$x165] = $x168; $x168 =& $x163->properties[$x165]; $x163->attributes[$x165] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U168 = FALSE; $W168 = TRUE; }
if (isset($S168)) {
$x171 = $S168->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x172 = $x171($global, $x163, $S168, array($_Error), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x170 = $x172;
} else {
if (!$U168) {$x170 = $_Error;if ($W168) { $x168 = $_Error; }  }
else { $x170 = JS::$undefined; }
}
if (isset($x163->class) && $x163->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x163->properties['length']) { $x163->properties['length'] = 'constructor' + 1; };
$x173 = 'Error';
unset($x174, $W174, $S174, $U174);
$x175 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 21, 6, '<image>/11_error.js');
$x174 =& $x175[0]; list(,$W174,$S174,$U174) = $x175;
$x176 = JS::toString('name', $global);
if ($x174 === JS::$undefined || $x174 === NULL) {
$x177 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x178 = $x177($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error' && !isset($x178->properties['file']) && !isset($x178->properties['line']) && !isset($x178->properties['column'])) {$x178->properties['file'] = '<image>/11_error.js';$x178->properties['line'] = 21;$x178->properties['column'] = 22;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 21, 22, '<image>/11_error.js');
}
$x174 = JS::toObject($x174, $global);
unset($x179, $W179, $S179, $U179);
$x180 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x174, JS::toString($x176, $global), 21, 22, '<image>/11_error.js');
$x179 =& $x180[0]; list(,$W179,$S179,$U179) = $x180;
if ($U179 && (!isset($x174->extensible) || $x174->extensible)) {$x174->properties[$x176] = $x179; $x179 =& $x174->properties[$x176]; $x174->attributes[$x176] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U179 = FALSE; $W179 = TRUE; }
if (isset($S179)) {
$x182 = $S179->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x183 = $x182($global, $x174, $S179, array($x173), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x181 = $x183;
} else {
if (!$U179) {$x181 = $x173;if ($W179) { $x179 = $x173; }  }
else { $x181 = JS::$undefined; }
}
if (isset($x174->class) && $x174->class === 'Array' &&  is_int('name') && 'name' >= $x174->properties['length']) { $x174->properties['length'] = 'name' + 1; };
$x184 = '';
unset($x185, $W185, $S185, $U185);
$x186 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 23, 6, '<image>/11_error.js');
$x185 =& $x186[0]; list(,$W185,$S185,$U185) = $x186;
$x187 = JS::toString('message', $global);
if ($x185 === JS::$undefined || $x185 === NULL) {
$x188 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x189 = $x188($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x189->class) && $x189->class === 'Error' && !isset($x189->properties['file']) && !isset($x189->properties['line']) && !isset($x189->properties['column'])) {$x189->properties['file'] = '<image>/11_error.js';$x189->properties['line'] = 23;$x189->properties['column'] = 25;$x189->attributes['file'] = $x189->attributes['line'] = $x189->attributes['column'] = 0; }
throw new JSException($x189, 23, 25, '<image>/11_error.js');
}
$x185 = JS::toObject($x185, $global);
unset($x190, $W190, $S190, $U190);
$x191 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x185, JS::toString($x187, $global), 23, 25, '<image>/11_error.js');
$x190 =& $x191[0]; list(,$W190,$S190,$U190) = $x191;
if ($U190 && (!isset($x185->extensible) || $x185->extensible)) {$x185->properties[$x187] = $x190; $x190 =& $x185->properties[$x187]; $x185->attributes[$x187] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U190 = FALSE; $W190 = TRUE; }
if (isset($S190)) {
$x193 = $S190->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x194 = $x193($global, $x185, $S190, array($x184), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x192 = $x194;
} else {
if (!$U190) {$x192 = $x184;if ($W190) { $x190 = $x184; }  }
else { $x192 = JS::$undefined; }
}
if (isset($x185->class) && $x185->class === 'Array' &&  is_int('message') && 'message' >= $x185->properties['length']) { $x185->properties['length'] = 'message' + 1; };
$x214 = clone JS::$functionTemplate; $x214->call = '_89174112e855facd9d2f6198b727df5b_10'; $x214->parameters = array (
); $x214->scope = $scope; $x214->properties['prototype'] = clone JS::$objectTemplate; $x214->attributes['prototype'] = JS::WRITABLE; $x214->properties['prototype']->properties['constructor'] = $x214; $x214->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x214->properties['length'] = 0; $x214->attributes['length'] = 0;
unset($x215, $W215, $S215, $U215);
$x216 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 25, 6, '<image>/11_error.js');
$x215 =& $x216[0]; list(,$W215,$S215,$U215) = $x216;
$x217 = JS::toString('toString', $global);
if ($x215 === JS::$undefined || $x215 === NULL) {
$x218 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x219 = $x218($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x219->class) && $x219->class === 'Error' && !isset($x219->properties['file']) && !isset($x219->properties['line']) && !isset($x219->properties['column'])) {$x219->properties['file'] = '<image>/11_error.js';$x219->properties['line'] = 25;$x219->properties['column'] = 26;$x219->attributes['file'] = $x219->attributes['line'] = $x219->attributes['column'] = 0; }
throw new JSException($x219, 25, 26, '<image>/11_error.js');
}
$x215 = JS::toObject($x215, $global);
unset($x220, $W220, $S220, $U220);
$x221 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x215, JS::toString($x217, $global), 25, 26, '<image>/11_error.js');
$x220 =& $x221[0]; list(,$W220,$S220,$U220) = $x221;
if ($U220 && (!isset($x215->extensible) || $x215->extensible)) {$x215->properties[$x217] = $x220; $x220 =& $x215->properties[$x217]; $x215->attributes[$x217] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U220 = FALSE; $W220 = TRUE; }
if (isset($S220)) {
$x223 = $S220->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x224 = $x223($global, $x215, $S220, array($x214), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x222 = $x224;
} else {
if (!$U220) {$x222 = $x214;if ($W220) { $x220 = $x214; }  }
else { $x222 = JS::$undefined; }
}
if (isset($x215->class) && $x215->class === 'Array' &&  is_int('toString') && 'toString' >= $x215->properties['length']) { $x215->properties['length'] = 'toString' + 1; };
$_RangeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_ReferenceError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_SyntaxError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_TypeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_NotImplementedError->properties['prototype']->prototype =$_Error->properties['prototype'];
;
return JS::$undefined;
}
