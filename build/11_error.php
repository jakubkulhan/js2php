function _89174112e855facd9d2f6198b727df5b_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x4 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x5 = $x4($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x5; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _89174112e855facd9d2f6198b727df5b_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x4=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x5=$x4($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x5;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _89174112e855facd9d2f6198b727df5b_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x10 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
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
if (array_key_exists($id, $lookup->properties)) { $x9 =& $lookup->properties[$id]; $W9 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S9 = $lookup->setters[$id]; }
else { $x9 = JS::$undefined; $U9 = TRUE; }
return array(&$x9, $W9, $S9, $U9);
}
echo 'function _89174112e855facd9d2f6198b727df5b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];$W9=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S9=$lookup->setters[$id];}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
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
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x6 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 5, 13, '<image>/11_error.js');
$_TypeError =& $x6[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x6;
$x7 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 5, 13);
$x8 = $x7($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x8->class) && $x8->class === 'Error') {$x8->properties['file'] = '<image>/11_error.js';$x8->properties['line'] = 5;$x8->properties['column'] = 13;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
throw new JSException($x8, 5, 13, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x9, $W9, $S9, $U9);
$x13 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'message', 5, 13, '<image>/11_error.js');
$x9 =& $x13[0]; list(,$W9,$S9,$U9) = $x13;
if ($U9 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['message'] = $x9; $x9 =& $_e->properties['message']; $_e->attributes['message'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U9 = FALSE; $W9 = TRUE; }
if (isset($S9)) {
$x15 = $S9->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 5, 13);
$x16 = $x15($global, $_e, $S9, array($_message), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x14 = $x16;
} else {
if (!$U9) {$x14 = $_message;if ($W9) { $x9 = $_message; }  }
else { $x14 = JS::$undefined; }
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
echo 'function _89174112e855facd9d2f6198b727df5b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'Error\']=$fn;$_Error=&$scope->properties[\'Error\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x2;$x3=!(((gettype($_message)===gettype(JS::$undefined)&&$_message===JS::$undefined))||(((is_float($_message)||is_int($_message))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_message==JS::$undefined));if(JS::toBoolean($x3,$global)){if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x6=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',5,13,\'<image>/11_error.js\');$_TypeError=&$x6[0];list(,$WTypeError,$STypeError,$UTypeError)=$x6;$x7=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x8=$x7($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'){$x8->properties[\'file\']=\'<image>/11_error.js\';$x8->properties[\'line\']=5;$x8->properties[\'column\']=13;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,5,13,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x9,$W9,$S9,$U9);$x13=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'message\',5,13,\'<image>/11_error.js\');$x9=&$x13[0];list(,$W9,$S9,$U9)=$x13;if($U9&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'message\']=$x9;$x9=&$_e->properties[\'message\'];$_e->attributes[\'message\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U9=FALSE;$W9=TRUE;}if(isset($S9)){$x15=$S9->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x16=$x15($global,$_e,$S9,array($_message),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x16;}else{if(!$U9){$x14=$_message;if($W9){$x9=$_message;}}else{$x14=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'message\')&&\'message\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'message\'+1;}}$_e->prototype=$_Error->properties[\'prototype\'];$_e->class=\'Error\';$_e->extensible=TRUE;return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x27 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x27[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x27;
$x28 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x29 = $x28($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x29->class) && $x29->class === 'Error') {$x29->properties['file'] = $file;$x29->properties['line'] = $line;$x29->properties['column'] = $column;$x29->attributes['file'] = $x29->attributes['line'] = $x29->attributes['column'] = 0; }
throw new JSException($x29, $line, $column, $file);
}
$W26 = $S26 = $U26 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x26 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x30 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x31 = $x30($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x26 = $x31; }
else { $x26 = JS::$undefined; $U26 = TRUE; }
return array(&$x26, $W26, $S26, $U26);
}
echo 'function _89174112e855facd9d2f6198b727df5b_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x27=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x27[0];list(,$WTypeError,$STypeError,$UTypeError)=$x27;$x28=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x29=$x28($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x29->class)&&$x29->class===\'Error\'){$x29->properties[\'file\']=$file;$x29->properties[\'line\']=$line;$x29->properties[\'column\']=$column;$x29->attributes[\'file\']=$x29->attributes[\'line\']=$x29->attributes[\'column\']=0;}throw new JSException($x29,$line,$column,$file);}$W26=$S26=$U26=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x26=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x30=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x31=$x30($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x26=$x31;}else{$x26=JS::$undefined;$U26=TRUE;}return array(&$x26,$W26,$S26,$U26);}', "\n";
function _89174112e855facd9d2f6198b727df5b_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x19 =& $scope->properties['arguments'];
$x19->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x19->properties[$i] = $args[$i];
$x19->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['RangeError'] = $fn;
$_RangeError =& $scope->properties['RangeError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x22 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 52, 14, '<image>/11_error.js');
$_Error =& $x22[0]; list(,$WError,$SError,$UError) = $x22;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x23 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'ReferenceError', 52, 14, '<image>/11_error.js');
$_ReferenceError =& $x23[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x23;
$x24 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 14);
$x25 = $x24($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x25->class) && $x25->class === 'Error') {$x25->properties['file'] = '<image>/11_error.js';$x25->properties['line'] = 52;$x25->properties['column'] = 14;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
throw new JSException($x25, 52, 14, '<image>/11_error.js');
}
$x20 = clone JS::$objectTemplate;
unset($x26, $W26, $S26, $U26);
$x32 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 52, 10, '<image>/11_error.js');
$x26 =& $x32[0]; list(,$W26,$S26,$U26) = $x32;
$x21 = $x26;
$x20->prototype = $x21;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 52, 10, '<image>/11_error.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 10);
$x37 = $x36($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error') {$x37->properties['file'] = '<image>/11_error.js';$x37->properties['line'] = 52;$x37->properties['column'] = 10;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 52, 10, '<image>/11_error.js');
}
$x33 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 10);
$x34 = $x33($global, $x20, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x21 = $x34;
if (is_object($x21) && $x21 !== JS::$undefined) { $x20 = $x21; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x20;
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x38 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 53, 9, '<image>/11_error.js');
$_TypeError =& $x38[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x38;
$x39 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x40 = $x39($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x40->class) && $x40->class === 'Error') {$x40->properties['file'] = '<image>/11_error.js';$x40->properties['line'] = 53;$x40->properties['column'] = 9;$x40->attributes['file'] = $x40->attributes['line'] = $x40->attributes['column'] = 0; }
throw new JSException($x40, 53, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x41, $W41, $S41, $U41);
$x42 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 53, 9, '<image>/11_error.js');
$x41 =& $x42[0]; list(,$W41,$S41,$U41) = $x42;
if ($U41 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x41; $x41 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U41 = FALSE; $W41 = TRUE; }
if (isset($S41)) {
$x44 = $S41->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x45 = $x44($global, $_e, $S41, array('RangeError'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x43 = $x45;
} else {
if (!$U41) {$x43 = 'RangeError';if ($W41) { $x41 = 'RangeError'; }  }
else { $x43 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_RangeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x19=&$scope->properties[\'arguments\'];$x19->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x19->properties[$i]=$args[$i];$x19->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'RangeError\']=$fn;$_RangeError=&$scope->properties[\'RangeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x22=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',52,14,\'<image>/11_error.js\');$_Error=&$x22[0];list(,$WError,$SError,$UError)=$x22;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x23=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',52,14,\'<image>/11_error.js\');$_ReferenceError=&$x23[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x23;$x24=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,14);$x25=$x24($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'){$x25->properties[\'file\']=\'<image>/11_error.js\';$x25->properties[\'line\']=52;$x25->properties[\'column\']=14;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,52,14,\'<image>/11_error.js\');}$x20=clone JS::$objectTemplate;unset($x26,$W26,$S26,$U26);$x32=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',52,10,\'<image>/11_error.js\');$x26=&$x32[0];list(,$W26,$S26,$U26)=$x32;$x21=$x26;$x20->prototype=$x21;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',52,10,\'<image>/11_error.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x37=$x36($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'){$x37->properties[\'file\']=\'<image>/11_error.js\';$x37->properties[\'line\']=52;$x37->properties[\'column\']=10;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,52,10,\'<image>/11_error.js\');}$x33=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x34=$x33($global,$x20,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x21=$x34;if(is_object($x21)&&$x21!==JS::$undefined){$x20=$x21;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x20;if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x38=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',53,9,\'<image>/11_error.js\');$_TypeError=&$x38[0];list(,$WTypeError,$STypeError,$UTypeError)=$x38;$x39=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x40=$x39($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x40->class)&&$x40->class===\'Error\'){$x40->properties[\'file\']=\'<image>/11_error.js\';$x40->properties[\'line\']=53;$x40->properties[\'column\']=9;$x40->attributes[\'file\']=$x40->attributes[\'line\']=$x40->attributes[\'column\']=0;}throw new JSException($x40,53,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x41,$W41,$S41,$U41);$x42=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',53,9,\'<image>/11_error.js\');$x41=&$x42[0];list(,$W41,$S41,$U41)=$x42;if($U41&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x41;$x41=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U41=FALSE;$W41=TRUE;}if(isset($S41)){$x44=$S41->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x45=$x44($global,$_e,$S41,array(\'RangeError\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x43=$x45;}else{if(!$U41){$x43=\'RangeError\';if($W41){$x41=\'RangeError\';}}else{$x43=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_RangeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x48 =& $scope->properties['arguments'];
$x48->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x48->properties[$i] = $args[$i];
$x48->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['ReferenceError'] = $fn;
$_ReferenceError =& $scope->properties['ReferenceError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x51 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 61, 14, '<image>/11_error.js');
$_Error =& $x51[0]; list(,$WError,$SError,$UError) = $x51;
if ($UError) {
$x52 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 14);
$x53 = $x52($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x53->class) && $x53->class === 'Error') {$x53->properties['file'] = '<image>/11_error.js';$x53->properties['line'] = 61;$x53->properties['column'] = 14;$x53->attributes['file'] = $x53->attributes['line'] = $x53->attributes['column'] = 0; }
throw new JSException($x53, 61, 14, '<image>/11_error.js');
}
$x49 = clone JS::$objectTemplate;
unset($x54, $W54, $S54, $U54);
$x55 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 61, 10, '<image>/11_error.js');
$x54 =& $x55[0]; list(,$W54,$S54,$U54) = $x55;
$x50 = $x54;
$x49->prototype = $x50;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 61, 10, '<image>/11_error.js');
$_TypeError =& $x58[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x58;
$x59 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x60 = $x59($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error') {$x60->properties['file'] = '<image>/11_error.js';$x60->properties['line'] = 61;$x60->properties['column'] = 10;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 61, 10, '<image>/11_error.js');
}
$x56 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x57 = $x56($global, $x49, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x50 = $x57;
if (is_object($x50) && $x50 !== JS::$undefined) { $x49 = $x50; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x49;
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x61 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 62, 9, '<image>/11_error.js');
$_TypeError =& $x61[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x61;
$x62 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x63 = $x62($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x63->class) && $x63->class === 'Error') {$x63->properties['file'] = '<image>/11_error.js';$x63->properties['line'] = 62;$x63->properties['column'] = 9;$x63->attributes['file'] = $x63->attributes['line'] = $x63->attributes['column'] = 0; }
throw new JSException($x63, 62, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x64, $W64, $S64, $U64);
$x65 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 62, 9, '<image>/11_error.js');
$x64 =& $x65[0]; list(,$W64,$S64,$U64) = $x65;
if ($U64 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x64; $x64 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U64 = FALSE; $W64 = TRUE; }
if (isset($S64)) {
$x67 = $S64->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x68 = $x67($global, $_e, $S64, array('ReferenceError'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x66 = $x68;
} else {
if (!$U64) {$x66 = 'ReferenceError';if ($W64) { $x64 = 'ReferenceError'; }  }
else { $x66 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_ReferenceError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x48=&$scope->properties[\'arguments\'];$x48->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x48->properties[$i]=$args[$i];$x48->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'ReferenceError\']=$fn;$_ReferenceError=&$scope->properties[\'ReferenceError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x51=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',61,14,\'<image>/11_error.js\');$_Error=&$x51[0];list(,$WError,$SError,$UError)=$x51;if($UError){$x52=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,14);$x53=$x52($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x53->class)&&$x53->class===\'Error\'){$x53->properties[\'file\']=\'<image>/11_error.js\';$x53->properties[\'line\']=61;$x53->properties[\'column\']=14;$x53->attributes[\'file\']=$x53->attributes[\'line\']=$x53->attributes[\'column\']=0;}throw new JSException($x53,61,14,\'<image>/11_error.js\');}$x49=clone JS::$objectTemplate;unset($x54,$W54,$S54,$U54);$x55=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',61,10,\'<image>/11_error.js\');$x54=&$x55[0];list(,$W54,$S54,$U54)=$x55;$x50=$x54;$x49->prototype=$x50;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x58=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',61,10,\'<image>/11_error.js\');$_TypeError=&$x58[0];list(,$WTypeError,$STypeError,$UTypeError)=$x58;$x59=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x60=$x59($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'){$x60->properties[\'file\']=\'<image>/11_error.js\';$x60->properties[\'line\']=61;$x60->properties[\'column\']=10;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,61,10,\'<image>/11_error.js\');}$x56=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x57=$x56($global,$x49,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x50=$x57;if(is_object($x50)&&$x50!==JS::$undefined){$x49=$x50;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x49;if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x61=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',62,9,\'<image>/11_error.js\');$_TypeError=&$x61[0];list(,$WTypeError,$STypeError,$UTypeError)=$x61;$x62=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x63=$x62($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x63->class)&&$x63->class===\'Error\'){$x63->properties[\'file\']=\'<image>/11_error.js\';$x63->properties[\'line\']=62;$x63->properties[\'column\']=9;$x63->attributes[\'file\']=$x63->attributes[\'line\']=$x63->attributes[\'column\']=0;}throw new JSException($x63,62,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x64,$W64,$S64,$U64);$x65=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',62,9,\'<image>/11_error.js\');$x64=&$x65[0];list(,$W64,$S64,$U64)=$x65;if($U64&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x64;$x64=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U64=FALSE;$W64=TRUE;}if(isset($S64)){$x67=$S64->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x68=$x67($global,$_e,$S64,array(\'ReferenceError\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x66=$x68;}else{if(!$U64){$x66=\'ReferenceError\';if($W64){$x64=\'ReferenceError\';}}else{$x66=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_ReferenceError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x71 =& $scope->properties['arguments'];
$x71->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x71->properties[$i] = $args[$i];
$x71->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['SyntaxError'] = $fn;
$_SyntaxError =& $scope->properties['SyntaxError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x74 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 70, 14, '<image>/11_error.js');
$_Error =& $x74[0]; list(,$WError,$SError,$UError) = $x74;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x75 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'ReferenceError', 70, 14, '<image>/11_error.js');
$_ReferenceError =& $x75[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x75;
$x76 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 14);
$x77 = $x76($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error') {$x77->properties['file'] = '<image>/11_error.js';$x77->properties['line'] = 70;$x77->properties['column'] = 14;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, 70, 14, '<image>/11_error.js');
}
$x72 = clone JS::$objectTemplate;
unset($x78, $W78, $S78, $U78);
$x79 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 70, 10, '<image>/11_error.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
$x73 = $x78;
$x72->prototype = $x73;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x82 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 70, 10, '<image>/11_error.js');
$_TypeError =& $x82[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x82;
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x84 = $x83($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x84->class) && $x84->class === 'Error') {$x84->properties['file'] = '<image>/11_error.js';$x84->properties['line'] = 70;$x84->properties['column'] = 10;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 70, 10, '<image>/11_error.js');
}
$x80 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x81 = $x80($global, $x72, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x73 = $x81;
if (is_object($x73) && $x73 !== JS::$undefined) { $x72 = $x73; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x72;
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x85 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 71, 9, '<image>/11_error.js');
$_TypeError =& $x85[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x85;
$x86 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x87 = $x86($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x87->class) && $x87->class === 'Error') {$x87->properties['file'] = '<image>/11_error.js';$x87->properties['line'] = 71;$x87->properties['column'] = 9;$x87->attributes['file'] = $x87->attributes['line'] = $x87->attributes['column'] = 0; }
throw new JSException($x87, 71, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x88, $W88, $S88, $U88);
$x89 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 71, 9, '<image>/11_error.js');
$x88 =& $x89[0]; list(,$W88,$S88,$U88) = $x89;
if ($U88 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x88; $x88 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U88 = FALSE; $W88 = TRUE; }
if (isset($S88)) {
$x91 = $S88->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x92 = $x91($global, $_e, $S88, array('SyntaxError'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x90 = $x92;
} else {
if (!$U88) {$x90 = 'SyntaxError';if ($W88) { $x88 = 'SyntaxError'; }  }
else { $x90 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_SyntaxError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x71=&$scope->properties[\'arguments\'];$x71->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x71->properties[$i]=$args[$i];$x71->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'SyntaxError\']=$fn;$_SyntaxError=&$scope->properties[\'SyntaxError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x74=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',70,14,\'<image>/11_error.js\');$_Error=&$x74[0];list(,$WError,$SError,$UError)=$x74;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x75=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',70,14,\'<image>/11_error.js\');$_ReferenceError=&$x75[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x75;$x76=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,14);$x77=$x76($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x77->class)&&$x77->class===\'Error\'){$x77->properties[\'file\']=\'<image>/11_error.js\';$x77->properties[\'line\']=70;$x77->properties[\'column\']=14;$x77->attributes[\'file\']=$x77->attributes[\'line\']=$x77->attributes[\'column\']=0;}throw new JSException($x77,70,14,\'<image>/11_error.js\');}$x72=clone JS::$objectTemplate;unset($x78,$W78,$S78,$U78);$x79=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',70,10,\'<image>/11_error.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;$x73=$x78;$x72->prototype=$x73;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x82=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',70,10,\'<image>/11_error.js\');$_TypeError=&$x82[0];list(,$WTypeError,$STypeError,$UTypeError)=$x82;$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x84=$x83($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'){$x84->properties[\'file\']=\'<image>/11_error.js\';$x84->properties[\'line\']=70;$x84->properties[\'column\']=10;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,70,10,\'<image>/11_error.js\');}$x80=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x81=$x80($global,$x72,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x73=$x81;if(is_object($x73)&&$x73!==JS::$undefined){$x72=$x73;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x72;if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x85=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',71,9,\'<image>/11_error.js\');$_TypeError=&$x85[0];list(,$WTypeError,$STypeError,$UTypeError)=$x85;$x86=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x87=$x86($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x87->class)&&$x87->class===\'Error\'){$x87->properties[\'file\']=\'<image>/11_error.js\';$x87->properties[\'line\']=71;$x87->properties[\'column\']=9;$x87->attributes[\'file\']=$x87->attributes[\'line\']=$x87->attributes[\'column\']=0;}throw new JSException($x87,71,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x88,$W88,$S88,$U88);$x89=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',71,9,\'<image>/11_error.js\');$x88=&$x89[0];list(,$W88,$S88,$U88)=$x89;if($U88&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x88;$x88=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U88=FALSE;$W88=TRUE;}if(isset($S88)){$x91=$S88->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x92=$x91($global,$_e,$S88,array(\'SyntaxError\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x90=$x92;}else{if(!$U88){$x90=\'SyntaxError\';if($W88){$x88=\'SyntaxError\';}}else{$x90=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_SyntaxError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x95 =& $scope->properties['arguments'];
$x95->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x95->properties[$i] = $args[$i];
$x95->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['TypeError'] = $fn;
$_TypeError =& $scope->properties['TypeError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x98 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 79, 14, '<image>/11_error.js');
$_Error =& $x98[0]; list(,$WError,$SError,$UError) = $x98;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x99 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'ReferenceError', 79, 14, '<image>/11_error.js');
$_ReferenceError =& $x99[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x99;
$x100 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 14);
$x101 = $x100($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x101->class) && $x101->class === 'Error') {$x101->properties['file'] = '<image>/11_error.js';$x101->properties['line'] = 79;$x101->properties['column'] = 14;$x101->attributes['file'] = $x101->attributes['line'] = $x101->attributes['column'] = 0; }
throw new JSException($x101, 79, 14, '<image>/11_error.js');
}
$x96 = clone JS::$objectTemplate;
unset($x102, $W102, $S102, $U102);
$x103 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 79, 10, '<image>/11_error.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
$x97 = $x102;
$x96->prototype = $x97;
if (!(is_object($_Error) && isset($_Error->call))) { 
$x106 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x107 = $x106($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x107->class) && $x107->class === 'Error') {$x107->properties['file'] = '<image>/11_error.js';$x107->properties['line'] = 79;$x107->properties['column'] = 10;$x107->attributes['file'] = $x107->attributes['line'] = $x107->attributes['column'] = 0; }
throw new JSException($x107, 79, 10, '<image>/11_error.js');
}
$x104 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x105 = $x104($global, $x96, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x97 = $x105;
if (is_object($x97) && $x97 !== JS::$undefined) { $x96 = $x97; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x96;
if ($_e === JS::$undefined || $_e === NULL) {
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x109 = $x108($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error') {$x109->properties['file'] = '<image>/11_error.js';$x109->properties['line'] = 80;$x109->properties['column'] = 9;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 80, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x110, $W110, $S110, $U110);
$x111 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 80, 9, '<image>/11_error.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
if ($U110 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x110; $x110 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U110 = FALSE; $W110 = TRUE; }
if (isset($S110)) {
$x113 = $S110->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x114 = $x113($global, $_e, $S110, array('TypeError'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x112 = $x114;
} else {
if (!$U110) {$x112 = 'TypeError';if ($W110) { $x110 = 'TypeError'; }  }
else { $x112 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_TypeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x95=&$scope->properties[\'arguments\'];$x95->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x95->properties[$i]=$args[$i];$x95->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'TypeError\']=$fn;$_TypeError=&$scope->properties[\'TypeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x98=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',79,14,\'<image>/11_error.js\');$_Error=&$x98[0];list(,$WError,$SError,$UError)=$x98;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x99=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',79,14,\'<image>/11_error.js\');$_ReferenceError=&$x99[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x99;$x100=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,14);$x101=$x100($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x101->class)&&$x101->class===\'Error\'){$x101->properties[\'file\']=\'<image>/11_error.js\';$x101->properties[\'line\']=79;$x101->properties[\'column\']=14;$x101->attributes[\'file\']=$x101->attributes[\'line\']=$x101->attributes[\'column\']=0;}throw new JSException($x101,79,14,\'<image>/11_error.js\');}$x96=clone JS::$objectTemplate;unset($x102,$W102,$S102,$U102);$x103=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',79,10,\'<image>/11_error.js\');$x102=&$x103[0];list(,$W102,$S102,$U102)=$x103;$x97=$x102;$x96->prototype=$x97;if(!(is_object($_Error)&&isset($_Error->call))){$x106=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x107=$x106($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x107->class)&&$x107->class===\'Error\'){$x107->properties[\'file\']=\'<image>/11_error.js\';$x107->properties[\'line\']=79;$x107->properties[\'column\']=10;$x107->attributes[\'file\']=$x107->attributes[\'line\']=$x107->attributes[\'column\']=0;}throw new JSException($x107,79,10,\'<image>/11_error.js\');}$x104=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x105=$x104($global,$x96,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x97=$x105;if(is_object($x97)&&$x97!==JS::$undefined){$x96=$x97;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x96;if($_e===JS::$undefined||$_e===NULL){$x108=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x109=$x108($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x109->class)&&$x109->class===\'Error\'){$x109->properties[\'file\']=\'<image>/11_error.js\';$x109->properties[\'line\']=80;$x109->properties[\'column\']=9;$x109->attributes[\'file\']=$x109->attributes[\'line\']=$x109->attributes[\'column\']=0;}throw new JSException($x109,80,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x110,$W110,$S110,$U110);$x111=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',80,9,\'<image>/11_error.js\');$x110=&$x111[0];list(,$W110,$S110,$U110)=$x111;if($U110&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x110;$x110=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U110=FALSE;$W110=TRUE;}if(isset($S110)){$x113=$S110->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x114=$x113($global,$_e,$S110,array(\'TypeError\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x112=$x114;}else{if(!$U110){$x112=\'TypeError\';if($W110){$x110=\'TypeError\';}}else{$x112=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_TypeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['NotImplementedError'] = $fn;
$_NotImplementedError =& $scope->properties['NotImplementedError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x120 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 89, 14, '<image>/11_error.js');
$_Error =& $x120[0]; list(,$WError,$SError,$UError) = $x120;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x121 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'ReferenceError', 89, 14, '<image>/11_error.js');
$_ReferenceError =& $x121[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x121;
$x122 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 14);
$x123 = $x122($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x123->class) && $x123->class === 'Error') {$x123->properties['file'] = '<image>/11_error.js';$x123->properties['line'] = 89;$x123->properties['column'] = 14;$x123->attributes['file'] = $x123->attributes['line'] = $x123->attributes['column'] = 0; }
throw new JSException($x123, 89, 14, '<image>/11_error.js');
}
$x118 = clone JS::$objectTemplate;
unset($x124, $W124, $S124, $U124);
$x125 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 89, 10, '<image>/11_error.js');
$x124 =& $x125[0]; list(,$W124,$S124,$U124) = $x125;
$x119 = $x124;
$x118->prototype = $x119;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x128 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 89, 10, '<image>/11_error.js');
$_TypeError =& $x128[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x128;
$x129 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x130 = $x129($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x130->class) && $x130->class === 'Error') {$x130->properties['file'] = '<image>/11_error.js';$x130->properties['line'] = 89;$x130->properties['column'] = 10;$x130->attributes['file'] = $x130->attributes['line'] = $x130->attributes['column'] = 0; }
throw new JSException($x130, 89, 10, '<image>/11_error.js');
}
$x126 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x127 = $x126($global, $x118, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x119 = $x127;
if (is_object($x119) && $x119 !== JS::$undefined) { $x118 = $x119; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x118;
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x131 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 90, 9, '<image>/11_error.js');
$_TypeError =& $x131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x131;
$x132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x133 = $x132($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x133->class) && $x133->class === 'Error') {$x133->properties['file'] = '<image>/11_error.js';$x133->properties['line'] = 90;$x133->properties['column'] = 9;$x133->attributes['file'] = $x133->attributes['line'] = $x133->attributes['column'] = 0; }
throw new JSException($x133, 90, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x134, $W134, $S134, $U134);
$x135 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 90, 9, '<image>/11_error.js');
$x134 =& $x135[0]; list(,$W134,$S134,$U134) = $x135;
if ($U134 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x134; $x134 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U134 = FALSE; $W134 = TRUE; }
if (isset($S134)) {
$x137 = $S134->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x138 = $x137($global, $_e, $S134, array('NotImplementedError'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x136 = $x138;
} else {
if (!$U134) {$x136 = 'NotImplementedError';if ($W134) { $x134 = 'NotImplementedError'; }  }
else { $x136 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_NotImplementedError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'NotImplementedError\']=$fn;$_NotImplementedError=&$scope->properties[\'NotImplementedError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x120=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',89,14,\'<image>/11_error.js\');$_Error=&$x120[0];list(,$WError,$SError,$UError)=$x120;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x121=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',89,14,\'<image>/11_error.js\');$_ReferenceError=&$x121[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x121;$x122=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,14);$x123=$x122($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x123->class)&&$x123->class===\'Error\'){$x123->properties[\'file\']=\'<image>/11_error.js\';$x123->properties[\'line\']=89;$x123->properties[\'column\']=14;$x123->attributes[\'file\']=$x123->attributes[\'line\']=$x123->attributes[\'column\']=0;}throw new JSException($x123,89,14,\'<image>/11_error.js\');}$x118=clone JS::$objectTemplate;unset($x124,$W124,$S124,$U124);$x125=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',89,10,\'<image>/11_error.js\');$x124=&$x125[0];list(,$W124,$S124,$U124)=$x125;$x119=$x124;$x118->prototype=$x119;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x128=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',89,10,\'<image>/11_error.js\');$_TypeError=&$x128[0];list(,$WTypeError,$STypeError,$UTypeError)=$x128;$x129=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x130=$x129($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x130->class)&&$x130->class===\'Error\'){$x130->properties[\'file\']=\'<image>/11_error.js\';$x130->properties[\'line\']=89;$x130->properties[\'column\']=10;$x130->attributes[\'file\']=$x130->attributes[\'line\']=$x130->attributes[\'column\']=0;}throw new JSException($x130,89,10,\'<image>/11_error.js\');}$x126=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x127=$x126($global,$x118,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x119=$x127;if(is_object($x119)&&$x119!==JS::$undefined){$x118=$x119;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x118;if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x131=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',90,9,\'<image>/11_error.js\');$_TypeError=&$x131[0];list(,$WTypeError,$STypeError,$UTypeError)=$x131;$x132=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x133=$x132($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x133->class)&&$x133->class===\'Error\'){$x133->properties[\'file\']=\'<image>/11_error.js\';$x133->properties[\'line\']=90;$x133->properties[\'column\']=9;$x133->attributes[\'file\']=$x133->attributes[\'line\']=$x133->attributes[\'column\']=0;}throw new JSException($x133,90,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x134,$W134,$S134,$U134);$x135=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',90,9,\'<image>/11_error.js\');$x134=&$x135[0];list(,$W134,$S134,$U134)=$x135;if($U134&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x134;$x134=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U134=FALSE;$W134=TRUE;}if(isset($S134)){$x137=$S134->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x138=$x137($global,$_e,$S134,array(\'NotImplementedError\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x136=$x138;}else{if(!$U134){$x136=\'NotImplementedError\';if($W134){$x134=\'NotImplementedError\';}}else{$x136=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_NotImplementedError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x179 =& $scope->properties['arguments'];
$x179->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x179->properties[$i] = $args[$i];
$x179->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x180, $W180, $S180, $U180);
$x181 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, (string) 'name', 26, 17, '<image>/11_error.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
$scope->properties['name'] = JS::$undefined; $_name =& $scope->properties['name'];
$Uname = FALSE;
$_name = $x180;
unset($x182, $W182, $S182, $U182);
$x183 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, (string) 'message', 26, 34, '<image>/11_error.js');
$x182 =& $x183[0]; list(,$W182,$S182,$U182) = $x183;
$scope->properties['msg'] = JS::$undefined; $_msg =& $scope->properties['msg'];
$Umsg = FALSE;
$_msg = $x182;
$x184 = (((gettype($_name) === gettype(JS::$undefined) && $_name === JS::$undefined))|| (((is_float($_name) || is_int($_name)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_name == JS::$undefined));
if (JS::toBoolean($x184, $global)) {
if ($Uname) {$global->properties['name'] = $_name; $_name =& $global->properties['name']; }
$_name = '';;
};
$x185 = (((gettype($_msg) === gettype(JS::$undefined) && $_msg === JS::$undefined))|| (((is_float($_msg) || is_int($_msg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_msg == JS::$undefined));
if (JS::toBoolean($x185, $global)) {
if ($Umsg) {$global->properties['msg'] = $_msg; $_msg =& $global->properties['msg']; }
$_msg = '';;
};
$x187 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
$x186 = $x187;
if (JS::toBoolean($x186, $global)) {
$x188 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
$x186 = $x188; }
if (JS::toBoolean($x186, $global)) {

return 'Error';;
};
$x189 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
if (JS::toBoolean($x189, $global)) {

return $_msg;;
};
$x190 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
if (JS::toBoolean($x190, $global)) {

return $_name;;
};
$x193 = JS::toPrimitive($_name, $global);
$x194 = JS::toPrimitive(': ', $global);
$x191 = JS::toPrimitive((is_string($x193) || is_string($x194) ? JS::toString($x193, $global) . JS::toString($x194, $global) : JS::toNumber($x193, $global) + JS::toNumber($x194, $global)), $global);
$x192 = JS::toPrimitive($_msg, $global);
return (is_string($x191) || is_string($x192) ? JS::toString($x191, $global) . JS::toString($x192, $global) : JS::toNumber($x191, $global) + JS::toNumber($x192, $global));
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x179=&$scope->properties[\'arguments\'];$x179->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x179->properties[$i]=$args[$i];$x179->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x180,$W180,$S180,$U180);$x181=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,(string)\'name\',26,17,\'<image>/11_error.js\');$x180=&$x181[0];list(,$W180,$S180,$U180)=$x181;$scope->properties[\'name\']=JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$_name=$x180;unset($x182,$W182,$S182,$U182);$x183=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,(string)\'message\',26,34,\'<image>/11_error.js\');$x182=&$x183[0];list(,$W182,$S182,$U182)=$x183;$scope->properties[\'msg\']=JS::$undefined;$_msg=&$scope->properties[\'msg\'];$Umsg=FALSE;$_msg=$x182;$x184=(((gettype($_name)===gettype(JS::$undefined)&&$_name===JS::$undefined))||(((is_float($_name)||is_int($_name))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_name==JS::$undefined));if(JS::toBoolean($x184,$global)){if($Uname){$global->properties[\'name\']=$_name;$_name=&$global->properties[\'name\'];}$_name=\'\';}$x185=(((gettype($_msg)===gettype(JS::$undefined)&&$_msg===JS::$undefined))||(((is_float($_msg)||is_int($_msg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_msg==JS::$undefined));if(JS::toBoolean($x185,$global)){if($Umsg){$global->properties[\'msg\']=$_msg;$_msg=&$global->properties[\'msg\'];}$_msg=\'\';}$x187=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));$x186=$x187;if(JS::toBoolean($x186,$global)){$x188=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));$x186=$x188;}if(JS::toBoolean($x186,$global)){return\'Error\';}$x189=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));if(JS::toBoolean($x189,$global)){return$_msg;}$x190=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));if(JS::toBoolean($x190,$global)){return$_name;}$x193=JS::toPrimitive($_name,$global);$x194=JS::toPrimitive(\': \',$global);$x191=JS::toPrimitive((is_string($x193)||is_string($x194)?JS::toString($x193,$global).JS::toString($x194,$global):JS::toNumber($x193,$global)+JS::toNumber($x194,$global)),$global);$x192=JS::toPrimitive($_msg,$global);return(is_string($x191)||is_string($x192)?JS::toString($x191,$global).JS::toString($x192,$global):JS::toNumber($x191,$global)+JS::toNumber($x192,$global));return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/11_error.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/11_error.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Error;
$_RangeError;
$_ReferenceError;
$_SyntaxError;
$_TypeError;
$_NotImplementedError;
$x17 = clone JS::$functionTemplate; $x17->call = '_89174112e855facd9d2f6198b727df5b_1'; $x17->parameters = array (
  0 => 'message',
); $x17->name = 'Error'; $x17->scope = $scope; $x17->properties['prototype'] = clone JS::$objectTemplate; $x17->attributes['prototype'] = JS::WRITABLE; $x17->properties['prototype']->properties['constructor'] = $x17; $x17->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x17->properties['length'] = 1; $x17->attributes['length'] = 0;
$scope->properties['Error'] = JS::$undefined; $_Error =& $scope->properties['Error'];
$UError = FALSE;
$_Error = $x17;
$x46 = clone JS::$functionTemplate; $x46->call = '_89174112e855facd9d2f6198b727df5b_4'; $x46->parameters = array (
  0 => 'message',
); $x46->name = 'RangeError'; $x46->scope = $scope; $x46->properties['prototype'] = clone JS::$objectTemplate; $x46->attributes['prototype'] = JS::WRITABLE; $x46->properties['prototype']->properties['constructor'] = $x46; $x46->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x46->properties['length'] = 1; $x46->attributes['length'] = 0;
$scope->properties['RangeError'] = JS::$undefined; $_RangeError =& $scope->properties['RangeError'];
$URangeError = FALSE;
$_RangeError = $x46;
$x69 = clone JS::$functionTemplate; $x69->call = '_89174112e855facd9d2f6198b727df5b_6'; $x69->parameters = array (
  0 => 'message',
); $x69->name = 'ReferenceError'; $x69->scope = $scope; $x69->properties['prototype'] = clone JS::$objectTemplate; $x69->attributes['prototype'] = JS::WRITABLE; $x69->properties['prototype']->properties['constructor'] = $x69; $x69->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x69->properties['length'] = 1; $x69->attributes['length'] = 0;
$scope->properties['ReferenceError'] = JS::$undefined; $_ReferenceError =& $scope->properties['ReferenceError'];
$UReferenceError = FALSE;
$_ReferenceError = $x69;
$x93 = clone JS::$functionTemplate; $x93->call = '_89174112e855facd9d2f6198b727df5b_7'; $x93->parameters = array (
  0 => 'message',
); $x93->name = 'SyntaxError'; $x93->scope = $scope; $x93->properties['prototype'] = clone JS::$objectTemplate; $x93->attributes['prototype'] = JS::WRITABLE; $x93->properties['prototype']->properties['constructor'] = $x93; $x93->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x93->properties['length'] = 1; $x93->attributes['length'] = 0;
$scope->properties['SyntaxError'] = JS::$undefined; $_SyntaxError =& $scope->properties['SyntaxError'];
$USyntaxError = FALSE;
$_SyntaxError = $x93;
$x115 = clone JS::$functionTemplate; $x115->call = '_89174112e855facd9d2f6198b727df5b_8'; $x115->parameters = array (
  0 => 'message',
); $x115->name = 'TypeError'; $x115->scope = $scope; $x115->properties['prototype'] = clone JS::$objectTemplate; $x115->attributes['prototype'] = JS::WRITABLE; $x115->properties['prototype']->properties['constructor'] = $x115; $x115->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x115->properties['length'] = 1; $x115->attributes['length'] = 0;
$scope->properties['TypeError'] = JS::$undefined; $_TypeError =& $scope->properties['TypeError'];
$UTypeError = FALSE;
$_TypeError = $x115;
$x139 = clone JS::$functionTemplate; $x139->call = '_89174112e855facd9d2f6198b727df5b_9'; $x139->parameters = array (
  0 => 'message',
); $x139->name = 'NotImplementedError'; $x139->scope = $scope; $x139->properties['prototype'] = clone JS::$objectTemplate; $x139->attributes['prototype'] = JS::WRITABLE; $x139->properties['prototype']->properties['constructor'] = $x139; $x139->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x139->properties['length'] = 1; $x139->attributes['length'] = 0;
$scope->properties['NotImplementedError'] = JS::$undefined; $_NotImplementedError =& $scope->properties['NotImplementedError'];
$UNotImplementedError = FALSE;
$_NotImplementedError = $x139;
$x140 = clone JS::$objectTemplate;
if ($_Error === JS::$undefined || $_Error === NULL) {
$x141 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x142 = $x141($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x142->class) && $x142->class === 'Error') {$x142->properties['file'] = '<image>/11_error.js';$x142->properties['line'] = 15;$x142->properties['column'] = 17;$x142->attributes['file'] = $x142->attributes['line'] = $x142->attributes['column'] = 0; }
throw new JSException($x142, 15, 17, '<image>/11_error.js');
}
$_Error = JS::toObject($_Error, $global);
unset($x143, $W143, $S143, $U143);
$x144 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_Error, (string) 'prototype', 15, 17, '<image>/11_error.js');
$x143 =& $x144[0]; list(,$W143,$S143,$U143) = $x144;
if ($U143 && (!isset($_Error->extensible) || $_Error->extensible)) {$_Error->properties['prototype'] = $x143; $x143 =& $_Error->properties['prototype']; $_Error->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U143 = FALSE; $W143 = TRUE; }
if (isset($S143)) {
$x146 = $S143->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x147 = $x146($global, $_Error, $S143, array($x140), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x145 = $x147;
} else {
if (!$U143) {$x145 = $x140;if ($W143) { $x143 = $x140; }  }
else { $x145 = JS::$undefined; }
}
if (isset($_Error->class) && $_Error->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Error->properties['length']) { $_Error->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x148 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Object', 16, 50, '<image>/11_error.js');
$_Object =& $x148[0]; list(,$WObject,$SObject,$UObject) = $x148;
if ($UObject) {
$x149 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 16, 50);
$x150 = $x149($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x150->class) && $x150->class === 'Error') {$x150->properties['file'] = '<image>/11_error.js';$x150->properties['line'] = 16;$x150->properties['column'] = 50;$x150->attributes['file'] = $x150->attributes['line'] = $x150->attributes['column'] = 0; }
throw new JSException($x150, 16, 50, '<image>/11_error.js');
}
$_Error->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Error->properties['prototype']->class = 'Error';
$_Error->properties['prototype']->extensible = TRUE;
unset($x151, $W151, $S151, $U151);
$x152 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 19, 6, '<image>/11_error.js');
$x151 =& $x152[0]; list(,$W151,$S151,$U151) = $x152;
if ($x151 === JS::$undefined || $x151 === NULL) {
$x153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x154 = $x153($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x154->class) && $x154->class === 'Error') {$x154->properties['file'] = '<image>/11_error.js';$x154->properties['line'] = 19;$x154->properties['column'] = 29;$x154->attributes['file'] = $x154->attributes['line'] = $x154->attributes['column'] = 0; }
throw new JSException($x154, 19, 29, '<image>/11_error.js');
}
$x151 = JS::toObject($x151, $global);
unset($x155, $W155, $S155, $U155);
$x156 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x151, (string) 'constructor', 19, 29, '<image>/11_error.js');
$x155 =& $x156[0]; list(,$W155,$S155,$U155) = $x156;
if ($U155 && (!isset($x151->extensible) || $x151->extensible)) {$x151->properties['constructor'] = $x155; $x155 =& $x151->properties['constructor']; $x151->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U155 = FALSE; $W155 = TRUE; }
if (isset($S155)) {
$x158 = $S155->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x159 = $x158($global, $x151, $S155, array($_Error), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x157 = $x159;
} else {
if (!$U155) {$x157 = $_Error;if ($W155) { $x155 = $_Error; }  }
else { $x157 = JS::$undefined; }
}
if (isset($x151->class) && $x151->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x151->properties['length']) { $x151->properties['length'] = 'constructor' + 1; };
unset($x160, $W160, $S160, $U160);
$x161 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 21, 6, '<image>/11_error.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
if ($x160 === JS::$undefined || $x160 === NULL) {
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x163 = $x162($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error') {$x163->properties['file'] = '<image>/11_error.js';$x163->properties['line'] = 21;$x163->properties['column'] = 22;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 21, 22, '<image>/11_error.js');
}
$x160 = JS::toObject($x160, $global);
unset($x164, $W164, $S164, $U164);
$x165 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x160, (string) 'name', 21, 22, '<image>/11_error.js');
$x164 =& $x165[0]; list(,$W164,$S164,$U164) = $x165;
if ($U164 && (!isset($x160->extensible) || $x160->extensible)) {$x160->properties['name'] = $x164; $x164 =& $x160->properties['name']; $x160->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U164 = FALSE; $W164 = TRUE; }
if (isset($S164)) {
$x167 = $S164->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x168 = $x167($global, $x160, $S164, array('Error'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x166 = $x168;
} else {
if (!$U164) {$x166 = 'Error';if ($W164) { $x164 = 'Error'; }  }
else { $x166 = JS::$undefined; }
}
if (isset($x160->class) && $x160->class === 'Array' &&  is_int('name') && 'name' >= $x160->properties['length']) { $x160->properties['length'] = 'name' + 1; };
unset($x169, $W169, $S169, $U169);
$x170 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 23, 6, '<image>/11_error.js');
$x169 =& $x170[0]; list(,$W169,$S169,$U169) = $x170;
if ($x169 === JS::$undefined || $x169 === NULL) {
$x171 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x172 = $x171($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x172->class) && $x172->class === 'Error') {$x172->properties['file'] = '<image>/11_error.js';$x172->properties['line'] = 23;$x172->properties['column'] = 25;$x172->attributes['file'] = $x172->attributes['line'] = $x172->attributes['column'] = 0; }
throw new JSException($x172, 23, 25, '<image>/11_error.js');
}
$x169 = JS::toObject($x169, $global);
unset($x173, $W173, $S173, $U173);
$x174 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x169, (string) 'message', 23, 25, '<image>/11_error.js');
$x173 =& $x174[0]; list(,$W173,$S173,$U173) = $x174;
if ($U173 && (!isset($x169->extensible) || $x169->extensible)) {$x169->properties['message'] = $x173; $x173 =& $x169->properties['message']; $x169->attributes['message'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U173 = FALSE; $W173 = TRUE; }
if (isset($S173)) {
$x176 = $S173->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x177 = $x176($global, $x169, $S173, array(''), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x175 = $x177;
} else {
if (!$U173) {$x175 = '';if ($W173) { $x173 = ''; }  }
else { $x175 = JS::$undefined; }
}
if (isset($x169->class) && $x169->class === 'Array' &&  is_int('message') && 'message' >= $x169->properties['length']) { $x169->properties['length'] = 'message' + 1; };
$x195 = clone JS::$functionTemplate; $x195->call = '_89174112e855facd9d2f6198b727df5b_10'; $x195->parameters = array (
); $x195->scope = $scope; $x195->properties['prototype'] = clone JS::$objectTemplate; $x195->attributes['prototype'] = JS::WRITABLE; $x195->properties['prototype']->properties['constructor'] = $x195; $x195->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x195->properties['length'] = 0; $x195->attributes['length'] = 0;
unset($x196, $W196, $S196, $U196);
$x197 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 25, 6, '<image>/11_error.js');
$x196 =& $x197[0]; list(,$W196,$S196,$U196) = $x197;
if ($x196 === JS::$undefined || $x196 === NULL) {
$x198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x199 = $x198($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x199->class) && $x199->class === 'Error') {$x199->properties['file'] = '<image>/11_error.js';$x199->properties['line'] = 25;$x199->properties['column'] = 26;$x199->attributes['file'] = $x199->attributes['line'] = $x199->attributes['column'] = 0; }
throw new JSException($x199, 25, 26, '<image>/11_error.js');
}
$x196 = JS::toObject($x196, $global);
unset($x200, $W200, $S200, $U200);
$x201 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x196, (string) 'toString', 25, 26, '<image>/11_error.js');
$x200 =& $x201[0]; list(,$W200,$S200,$U200) = $x201;
if ($U200 && (!isset($x196->extensible) || $x196->extensible)) {$x196->properties['toString'] = $x200; $x200 =& $x196->properties['toString']; $x196->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U200 = FALSE; $W200 = TRUE; }
if (isset($S200)) {
$x203 = $S200->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x204 = $x203($global, $x196, $S200, array($x195), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x202 = $x204;
} else {
if (!$U200) {$x202 = $x195;if ($W200) { $x200 = $x195; }  }
else { $x202 = JS::$undefined; }
}
if (isset($x196->class) && $x196->class === 'Array' &&  is_int('toString') && 'toString' >= $x196->properties['length']) { $x196->properties['length'] = 'toString' + 1; };
$_RangeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_ReferenceError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_SyntaxError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_TypeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_NotImplementedError->properties['prototype']->prototype =$_Error->properties['prototype'];
;
return JS::$undefined;
}
