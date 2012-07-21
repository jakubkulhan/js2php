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
if (isset($x12->class) && $x12->class === 'Error' && !isset($x12->properties['file']) && !isset($x12->properties['line']) && !isset($x12->properties['column'])) {$x12->properties['file'] = $file;$x12->properties['line'] = $line;$x12->properties['column'] = $column;$x12->attributes['file'] = $x12->attributes['line'] = $x12->attributes['column'] = 0; }
throw new JSException($x12, $line, $column, $file);
}
$W9 = $S9 = $U9 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x9 =& $lookup->properties[$id]; $W9 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S9 = $lookup->setters[$id]; }
else { $x9 = JS::$undefined; $U9 = TRUE; }
return array(&$x9, $W9, $S9, $U9);
}
echo 'function _89174112e855facd9d2f6198b727df5b_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x10=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x10[0];list(,$WTypeError,$STypeError,$UTypeError)=$x10;$x11=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x12=$x11($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x12->class)&&$x12->class===\'Error\'&&!isset($x12->properties[\'file\'])&&!isset($x12->properties[\'line\'])&&!isset($x12->properties[\'column\'])){$x12->properties[\'file\']=$file;$x12->properties[\'line\']=$line;$x12->properties[\'column\']=$column;$x12->attributes[\'file\']=$x12->attributes[\'line\']=$x12->attributes[\'column\']=0;}throw new JSException($x12,$line,$column,$file);}$W9=$S9=$U9=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x9=&$lookup->properties[$id];$W9=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S9=$lookup->setters[$id];}else{$x9=JS::$undefined;$U9=TRUE;}return array(&$x9,$W9,$S9,$U9);}', "\n";
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
if (isset($x8->class) && $x8->class === 'Error' && !isset($x8->properties['file']) && !isset($x8->properties['line']) && !isset($x8->properties['column'])) {$x8->properties['file'] = '<image>/11_error.js';$x8->properties['line'] = 5;$x8->properties['column'] = 13;$x8->attributes['file'] = $x8->attributes['line'] = $x8->attributes['column'] = 0; }
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
echo 'function _89174112e855facd9d2f6198b727df5b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'Error\']=$fn;$_Error=&$scope->properties[\'Error\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x2;$x3=!(((gettype($_message)===gettype(JS::$undefined)&&$_message===JS::$undefined))||(((is_float($_message)||is_int($_message))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_message==JS::$undefined));if(JS::toBoolean($x3,$global)){if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x6=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',5,13,\'<image>/11_error.js\');$_TypeError=&$x6[0];list(,$WTypeError,$STypeError,$UTypeError)=$x6;$x7=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x8=$x7($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x8->class)&&$x8->class===\'Error\'&&!isset($x8->properties[\'file\'])&&!isset($x8->properties[\'line\'])&&!isset($x8->properties[\'column\'])){$x8->properties[\'file\']=\'<image>/11_error.js\';$x8->properties[\'line\']=5;$x8->properties[\'column\']=13;$x8->attributes[\'file\']=$x8->attributes[\'line\']=$x8->attributes[\'column\']=0;}throw new JSException($x8,5,13,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x9,$W9,$S9,$U9);$x13=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'message\',5,13,\'<image>/11_error.js\');$x9=&$x13[0];list(,$W9,$S9,$U9)=$x13;if($U9&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'message\']=$x9;$x9=&$_e->properties[\'message\'];$_e->attributes[\'message\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U9=FALSE;$W9=TRUE;}if(isset($S9)){$x15=$S9->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x16=$x15($global,$_e,$S9,array($_message),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x16;}else{if(!$U9){$x14=$_message;if($W9){$x9=$_message;}}else{$x14=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'message\')&&\'message\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'message\'+1;}}$_e->prototype=$_Error->properties[\'prototype\'];$_e->class=\'Error\';$_e->extensible=TRUE;return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x27 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x27[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x27;
$x28 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x29 = $x28($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x29->class) && $x29->class === 'Error' && !isset($x29->properties['file']) && !isset($x29->properties['line']) && !isset($x29->properties['column'])) {$x29->properties['file'] = $file;$x29->properties['line'] = $line;$x29->properties['column'] = $column;$x29->attributes['file'] = $x29->attributes['line'] = $x29->attributes['column'] = 0; }
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
echo 'function _89174112e855facd9d2f6198b727df5b_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x27=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x27[0];list(,$WTypeError,$STypeError,$UTypeError)=$x27;$x28=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x29=$x28($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x29->class)&&$x29->class===\'Error\'&&!isset($x29->properties[\'file\'])&&!isset($x29->properties[\'line\'])&&!isset($x29->properties[\'column\'])){$x29->properties[\'file\']=$file;$x29->properties[\'line\']=$line;$x29->properties[\'column\']=$column;$x29->attributes[\'file\']=$x29->attributes[\'line\']=$x29->attributes[\'column\']=0;}throw new JSException($x29,$line,$column,$file);}$W26=$S26=$U26=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x26=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x30=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x31=$x30($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x26=$x31;}else{$x26=JS::$undefined;$U26=TRUE;}return array(&$x26,$W26,$S26,$U26);}', "\n";
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
if (isset($x25->class) && $x25->class === 'Error' && !isset($x25->properties['file']) && !isset($x25->properties['line']) && !isset($x25->properties['column'])) {$x25->properties['file'] = '<image>/11_error.js';$x25->properties['line'] = 52;$x25->properties['column'] = 14;$x25->attributes['file'] = $x25->attributes['line'] = $x25->attributes['column'] = 0; }
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
if (isset($x37->class) && $x37->class === 'Error' && !isset($x37->properties['file']) && !isset($x37->properties['line']) && !isset($x37->properties['column'])) {$x37->properties['file'] = '<image>/11_error.js';$x37->properties['line'] = 52;$x37->properties['column'] = 10;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
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
$x38 = 'RangeError';
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x39 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 53, 9, '<image>/11_error.js');
$_TypeError =& $x39[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x39;
$x40 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x41 = $x40($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x41->class) && $x41->class === 'Error' && !isset($x41->properties['file']) && !isset($x41->properties['line']) && !isset($x41->properties['column'])) {$x41->properties['file'] = '<image>/11_error.js';$x41->properties['line'] = 53;$x41->properties['column'] = 9;$x41->attributes['file'] = $x41->attributes['line'] = $x41->attributes['column'] = 0; }
throw new JSException($x41, 53, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x42, $W42, $S42, $U42);
$x43 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 53, 9, '<image>/11_error.js');
$x42 =& $x43[0]; list(,$W42,$S42,$U42) = $x43;
if ($U42 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x42; $x42 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U42 = FALSE; $W42 = TRUE; }
if (isset($S42)) {
$x45 = $S42->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x46 = $x45($global, $_e, $S42, array($x38), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x44 = $x46;
} else {
if (!$U42) {$x44 = $x38;if ($W42) { $x42 = $x38; }  }
else { $x44 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_RangeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x19=&$scope->properties[\'arguments\'];$x19->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x19->properties[$i]=$args[$i];$x19->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'RangeError\']=$fn;$_RangeError=&$scope->properties[\'RangeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x22=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',52,14,\'<image>/11_error.js\');$_Error=&$x22[0];list(,$WError,$SError,$UError)=$x22;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x23=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',52,14,\'<image>/11_error.js\');$_ReferenceError=&$x23[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x23;$x24=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,14);$x25=$x24($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x25->class)&&$x25->class===\'Error\'&&!isset($x25->properties[\'file\'])&&!isset($x25->properties[\'line\'])&&!isset($x25->properties[\'column\'])){$x25->properties[\'file\']=\'<image>/11_error.js\';$x25->properties[\'line\']=52;$x25->properties[\'column\']=14;$x25->attributes[\'file\']=$x25->attributes[\'line\']=$x25->attributes[\'column\']=0;}throw new JSException($x25,52,14,\'<image>/11_error.js\');}$x20=clone JS::$objectTemplate;unset($x26,$W26,$S26,$U26);$x32=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',52,10,\'<image>/11_error.js\');$x26=&$x32[0];list(,$W26,$S26,$U26)=$x32;$x21=$x26;$x20->prototype=$x21;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x35=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',52,10,\'<image>/11_error.js\');$_TypeError=&$x35[0];list(,$WTypeError,$STypeError,$UTypeError)=$x35;$x36=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x37=$x36($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x37->class)&&$x37->class===\'Error\'&&!isset($x37->properties[\'file\'])&&!isset($x37->properties[\'line\'])&&!isset($x37->properties[\'column\'])){$x37->properties[\'file\']=\'<image>/11_error.js\';$x37->properties[\'line\']=52;$x37->properties[\'column\']=10;$x37->attributes[\'file\']=$x37->attributes[\'line\']=$x37->attributes[\'column\']=0;}throw new JSException($x37,52,10,\'<image>/11_error.js\');}$x33=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x34=$x33($global,$x20,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x21=$x34;if(is_object($x21)&&$x21!==JS::$undefined){$x20=$x21;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x20;$x38=\'RangeError\';if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x39=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',53,9,\'<image>/11_error.js\');$_TypeError=&$x39[0];list(,$WTypeError,$STypeError,$UTypeError)=$x39;$x40=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x41=$x40($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x41->class)&&$x41->class===\'Error\'&&!isset($x41->properties[\'file\'])&&!isset($x41->properties[\'line\'])&&!isset($x41->properties[\'column\'])){$x41->properties[\'file\']=\'<image>/11_error.js\';$x41->properties[\'line\']=53;$x41->properties[\'column\']=9;$x41->attributes[\'file\']=$x41->attributes[\'line\']=$x41->attributes[\'column\']=0;}throw new JSException($x41,53,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x42,$W42,$S42,$U42);$x43=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',53,9,\'<image>/11_error.js\');$x42=&$x43[0];list(,$W42,$S42,$U42)=$x43;if($U42&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x42;$x42=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U42=FALSE;$W42=TRUE;}if(isset($S42)){$x45=$S42->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x46=$x45($global,$_e,$S42,array($x38),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x44=$x46;}else{if(!$U42){$x44=$x38;if($W42){$x42=$x38;}}else{$x44=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_RangeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['ReferenceError'] = $fn;
$_ReferenceError =& $scope->properties['ReferenceError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x52 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 61, 14, '<image>/11_error.js');
$_Error =& $x52[0]; list(,$WError,$SError,$UError) = $x52;
if ($UError) {
$x53 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 14);
$x54 = $x53($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x54->class) && $x54->class === 'Error' && !isset($x54->properties['file']) && !isset($x54->properties['line']) && !isset($x54->properties['column'])) {$x54->properties['file'] = '<image>/11_error.js';$x54->properties['line'] = 61;$x54->properties['column'] = 14;$x54->attributes['file'] = $x54->attributes['line'] = $x54->attributes['column'] = 0; }
throw new JSException($x54, 61, 14, '<image>/11_error.js');
}
$x50 = clone JS::$objectTemplate;
unset($x55, $W55, $S55, $U55);
$x56 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 61, 10, '<image>/11_error.js');
$x55 =& $x56[0]; list(,$W55,$S55,$U55) = $x56;
$x51 = $x55;
$x50->prototype = $x51;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x59 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 61, 10, '<image>/11_error.js');
$_TypeError =& $x59[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x59;
$x60 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x61 = $x60($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x61->class) && $x61->class === 'Error' && !isset($x61->properties['file']) && !isset($x61->properties['line']) && !isset($x61->properties['column'])) {$x61->properties['file'] = '<image>/11_error.js';$x61->properties['line'] = 61;$x61->properties['column'] = 10;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 61, 10, '<image>/11_error.js');
}
$x57 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x58 = $x57($global, $x50, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x51 = $x58;
if (is_object($x51) && $x51 !== JS::$undefined) { $x50 = $x51; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x50;
$x62 = 'ReferenceError';
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x63 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 62, 9, '<image>/11_error.js');
$_TypeError =& $x63[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x63;
$x64 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x65 = $x64($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x65->class) && $x65->class === 'Error' && !isset($x65->properties['file']) && !isset($x65->properties['line']) && !isset($x65->properties['column'])) {$x65->properties['file'] = '<image>/11_error.js';$x65->properties['line'] = 62;$x65->properties['column'] = 9;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, 62, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x66, $W66, $S66, $U66);
$x67 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 62, 9, '<image>/11_error.js');
$x66 =& $x67[0]; list(,$W66,$S66,$U66) = $x67;
if ($U66 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x66; $x66 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U66 = FALSE; $W66 = TRUE; }
if (isset($S66)) {
$x69 = $S66->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x70 = $x69($global, $_e, $S66, array($x62), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x68 = $x70;
} else {
if (!$U66) {$x68 = $x62;if ($W66) { $x66 = $x62; }  }
else { $x68 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_ReferenceError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x49=&$scope->properties[\'arguments\'];$x49->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x49->properties[$i]=$args[$i];$x49->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'ReferenceError\']=$fn;$_ReferenceError=&$scope->properties[\'ReferenceError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x52=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',61,14,\'<image>/11_error.js\');$_Error=&$x52[0];list(,$WError,$SError,$UError)=$x52;if($UError){$x53=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,14);$x54=$x53($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x54->class)&&$x54->class===\'Error\'&&!isset($x54->properties[\'file\'])&&!isset($x54->properties[\'line\'])&&!isset($x54->properties[\'column\'])){$x54->properties[\'file\']=\'<image>/11_error.js\';$x54->properties[\'line\']=61;$x54->properties[\'column\']=14;$x54->attributes[\'file\']=$x54->attributes[\'line\']=$x54->attributes[\'column\']=0;}throw new JSException($x54,61,14,\'<image>/11_error.js\');}$x50=clone JS::$objectTemplate;unset($x55,$W55,$S55,$U55);$x56=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',61,10,\'<image>/11_error.js\');$x55=&$x56[0];list(,$W55,$S55,$U55)=$x56;$x51=$x55;$x50->prototype=$x51;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x59=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',61,10,\'<image>/11_error.js\');$_TypeError=&$x59[0];list(,$WTypeError,$STypeError,$UTypeError)=$x59;$x60=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x61=$x60($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x61->class)&&$x61->class===\'Error\'&&!isset($x61->properties[\'file\'])&&!isset($x61->properties[\'line\'])&&!isset($x61->properties[\'column\'])){$x61->properties[\'file\']=\'<image>/11_error.js\';$x61->properties[\'line\']=61;$x61->properties[\'column\']=10;$x61->attributes[\'file\']=$x61->attributes[\'line\']=$x61->attributes[\'column\']=0;}throw new JSException($x61,61,10,\'<image>/11_error.js\');}$x57=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x58=$x57($global,$x50,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x51=$x58;if(is_object($x51)&&$x51!==JS::$undefined){$x50=$x51;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x50;$x62=\'ReferenceError\';if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',62,9,\'<image>/11_error.js\');$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x65=$x64($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'&&!isset($x65->properties[\'file\'])&&!isset($x65->properties[\'line\'])&&!isset($x65->properties[\'column\'])){$x65->properties[\'file\']=\'<image>/11_error.js\';$x65->properties[\'line\']=62;$x65->properties[\'column\']=9;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,62,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x66,$W66,$S66,$U66);$x67=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',62,9,\'<image>/11_error.js\');$x66=&$x67[0];list(,$W66,$S66,$U66)=$x67;if($U66&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x66;$x66=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U66=FALSE;$W66=TRUE;}if(isset($S66)){$x69=$S66->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x70=$x69($global,$_e,$S66,array($x62),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x68=$x70;}else{if(!$U66){$x68=$x62;if($W66){$x66=$x62;}}else{$x68=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_ReferenceError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x73 =& $scope->properties['arguments'];
$x73->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x73->properties[$i] = $args[$i];
$x73->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['SyntaxError'] = $fn;
$_SyntaxError =& $scope->properties['SyntaxError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x76 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 70, 14, '<image>/11_error.js');
$_Error =& $x76[0]; list(,$WError,$SError,$UError) = $x76;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x77 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'ReferenceError', 70, 14, '<image>/11_error.js');
$_ReferenceError =& $x77[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x77;
$x78 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 14);
$x79 = $x78($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error' && !isset($x79->properties['file']) && !isset($x79->properties['line']) && !isset($x79->properties['column'])) {$x79->properties['file'] = '<image>/11_error.js';$x79->properties['line'] = 70;$x79->properties['column'] = 14;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, 70, 14, '<image>/11_error.js');
}
$x74 = clone JS::$objectTemplate;
unset($x80, $W80, $S80, $U80);
$x81 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 70, 10, '<image>/11_error.js');
$x80 =& $x81[0]; list(,$W80,$S80,$U80) = $x81;
$x75 = $x80;
$x74->prototype = $x75;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x84 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 70, 10, '<image>/11_error.js');
$_TypeError =& $x84[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x84;
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x86 = $x85($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/11_error.js';$x86->properties['line'] = 70;$x86->properties['column'] = 10;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 70, 10, '<image>/11_error.js');
}
$x82 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x83 = $x82($global, $x74, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x75 = $x83;
if (is_object($x75) && $x75 !== JS::$undefined) { $x74 = $x75; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x74;
$x87 = 'SyntaxError';
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 71, 9, '<image>/11_error.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x90 = $x89($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error' && !isset($x90->properties['file']) && !isset($x90->properties['line']) && !isset($x90->properties['column'])) {$x90->properties['file'] = '<image>/11_error.js';$x90->properties['line'] = 71;$x90->properties['column'] = 9;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 71, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x91, $W91, $S91, $U91);
$x92 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 71, 9, '<image>/11_error.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
if ($U91 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x91; $x91 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U91 = FALSE; $W91 = TRUE; }
if (isset($S91)) {
$x94 = $S91->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x95 = $x94($global, $_e, $S91, array($x87), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x93 = $x95;
} else {
if (!$U91) {$x93 = $x87;if ($W91) { $x91 = $x87; }  }
else { $x93 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_SyntaxError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x73=&$scope->properties[\'arguments\'];$x73->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x73->properties[$i]=$args[$i];$x73->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'SyntaxError\']=$fn;$_SyntaxError=&$scope->properties[\'SyntaxError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x76=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',70,14,\'<image>/11_error.js\');$_Error=&$x76[0];list(,$WError,$SError,$UError)=$x76;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x77=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',70,14,\'<image>/11_error.js\');$_ReferenceError=&$x77[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x77;$x78=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,14);$x79=$x78($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'&&!isset($x79->properties[\'file\'])&&!isset($x79->properties[\'line\'])&&!isset($x79->properties[\'column\'])){$x79->properties[\'file\']=\'<image>/11_error.js\';$x79->properties[\'line\']=70;$x79->properties[\'column\']=14;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,70,14,\'<image>/11_error.js\');}$x74=clone JS::$objectTemplate;unset($x80,$W80,$S80,$U80);$x81=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',70,10,\'<image>/11_error.js\');$x80=&$x81[0];list(,$W80,$S80,$U80)=$x81;$x75=$x80;$x74->prototype=$x75;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x84=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',70,10,\'<image>/11_error.js\');$_TypeError=&$x84[0];list(,$WTypeError,$STypeError,$UTypeError)=$x84;$x85=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x86=$x85($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x86->class)&&$x86->class===\'Error\'&&!isset($x86->properties[\'file\'])&&!isset($x86->properties[\'line\'])&&!isset($x86->properties[\'column\'])){$x86->properties[\'file\']=\'<image>/11_error.js\';$x86->properties[\'line\']=70;$x86->properties[\'column\']=10;$x86->attributes[\'file\']=$x86->attributes[\'line\']=$x86->attributes[\'column\']=0;}throw new JSException($x86,70,10,\'<image>/11_error.js\');}$x82=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x83=$x82($global,$x74,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x75=$x83;if(is_object($x75)&&$x75!==JS::$undefined){$x74=$x75;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x74;$x87=\'SyntaxError\';if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x88=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',71,9,\'<image>/11_error.js\');$_TypeError=&$x88[0];list(,$WTypeError,$STypeError,$UTypeError)=$x88;$x89=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x90=$x89($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x90->class)&&$x90->class===\'Error\'&&!isset($x90->properties[\'file\'])&&!isset($x90->properties[\'line\'])&&!isset($x90->properties[\'column\'])){$x90->properties[\'file\']=\'<image>/11_error.js\';$x90->properties[\'line\']=71;$x90->properties[\'column\']=9;$x90->attributes[\'file\']=$x90->attributes[\'line\']=$x90->attributes[\'column\']=0;}throw new JSException($x90,71,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x91,$W91,$S91,$U91);$x92=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',71,9,\'<image>/11_error.js\');$x91=&$x92[0];list(,$W91,$S91,$U91)=$x92;if($U91&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x91;$x91=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U91=FALSE;$W91=TRUE;}if(isset($S91)){$x94=$S91->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x95=$x94($global,$_e,$S91,array($x87),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x93=$x95;}else{if(!$U91){$x93=$x87;if($W91){$x91=$x87;}}else{$x93=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_SyntaxError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['TypeError'] = $fn;
$_TypeError =& $scope->properties['TypeError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x101 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 79, 14, '<image>/11_error.js');
$_Error =& $x101[0]; list(,$WError,$SError,$UError) = $x101;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x102 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'ReferenceError', 79, 14, '<image>/11_error.js');
$_ReferenceError =& $x102[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x102;
$x103 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 14);
$x104 = $x103($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x104->class) && $x104->class === 'Error' && !isset($x104->properties['file']) && !isset($x104->properties['line']) && !isset($x104->properties['column'])) {$x104->properties['file'] = '<image>/11_error.js';$x104->properties['line'] = 79;$x104->properties['column'] = 14;$x104->attributes['file'] = $x104->attributes['line'] = $x104->attributes['column'] = 0; }
throw new JSException($x104, 79, 14, '<image>/11_error.js');
}
$x99 = clone JS::$objectTemplate;
unset($x105, $W105, $S105, $U105);
$x106 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 79, 10, '<image>/11_error.js');
$x105 =& $x106[0]; list(,$W105,$S105,$U105) = $x106;
$x100 = $x105;
$x99->prototype = $x100;
if (!(is_object($_Error) && isset($_Error->call))) { 
$x109 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x110 = $x109($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x110->class) && $x110->class === 'Error' && !isset($x110->properties['file']) && !isset($x110->properties['line']) && !isset($x110->properties['column'])) {$x110->properties['file'] = '<image>/11_error.js';$x110->properties['line'] = 79;$x110->properties['column'] = 10;$x110->attributes['file'] = $x110->attributes['line'] = $x110->attributes['column'] = 0; }
throw new JSException($x110, 79, 10, '<image>/11_error.js');
}
$x107 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x108 = $x107($global, $x99, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x100 = $x108;
if (is_object($x100) && $x100 !== JS::$undefined) { $x99 = $x100; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x99;
$x111 = 'TypeError';
if ($_e === JS::$undefined || $_e === NULL) {
$x112 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x113 = $x112($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x113->class) && $x113->class === 'Error' && !isset($x113->properties['file']) && !isset($x113->properties['line']) && !isset($x113->properties['column'])) {$x113->properties['file'] = '<image>/11_error.js';$x113->properties['line'] = 80;$x113->properties['column'] = 9;$x113->attributes['file'] = $x113->attributes['line'] = $x113->attributes['column'] = 0; }
throw new JSException($x113, 80, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x114, $W114, $S114, $U114);
$x115 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 80, 9, '<image>/11_error.js');
$x114 =& $x115[0]; list(,$W114,$S114,$U114) = $x115;
if ($U114 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x114; $x114 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U114 = FALSE; $W114 = TRUE; }
if (isset($S114)) {
$x117 = $S114->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x118 = $x117($global, $_e, $S114, array($x111), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x116 = $x118;
} else {
if (!$U114) {$x116 = $x111;if ($W114) { $x114 = $x111; }  }
else { $x116 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_TypeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x98=&$scope->properties[\'arguments\'];$x98->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x98->properties[$i]=$args[$i];$x98->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'TypeError\']=$fn;$_TypeError=&$scope->properties[\'TypeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x101=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',79,14,\'<image>/11_error.js\');$_Error=&$x101[0];list(,$WError,$SError,$UError)=$x101;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x102=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',79,14,\'<image>/11_error.js\');$_ReferenceError=&$x102[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x102;$x103=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,14);$x104=$x103($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x104->class)&&$x104->class===\'Error\'&&!isset($x104->properties[\'file\'])&&!isset($x104->properties[\'line\'])&&!isset($x104->properties[\'column\'])){$x104->properties[\'file\']=\'<image>/11_error.js\';$x104->properties[\'line\']=79;$x104->properties[\'column\']=14;$x104->attributes[\'file\']=$x104->attributes[\'line\']=$x104->attributes[\'column\']=0;}throw new JSException($x104,79,14,\'<image>/11_error.js\');}$x99=clone JS::$objectTemplate;unset($x105,$W105,$S105,$U105);$x106=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',79,10,\'<image>/11_error.js\');$x105=&$x106[0];list(,$W105,$S105,$U105)=$x106;$x100=$x105;$x99->prototype=$x100;if(!(is_object($_Error)&&isset($_Error->call))){$x109=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x110=$x109($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x110->class)&&$x110->class===\'Error\'&&!isset($x110->properties[\'file\'])&&!isset($x110->properties[\'line\'])&&!isset($x110->properties[\'column\'])){$x110->properties[\'file\']=\'<image>/11_error.js\';$x110->properties[\'line\']=79;$x110->properties[\'column\']=10;$x110->attributes[\'file\']=$x110->attributes[\'line\']=$x110->attributes[\'column\']=0;}throw new JSException($x110,79,10,\'<image>/11_error.js\');}$x107=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x108=$x107($global,$x99,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x100=$x108;if(is_object($x100)&&$x100!==JS::$undefined){$x99=$x100;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x99;$x111=\'TypeError\';if($_e===JS::$undefined||$_e===NULL){$x112=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x113=$x112($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x113->class)&&$x113->class===\'Error\'&&!isset($x113->properties[\'file\'])&&!isset($x113->properties[\'line\'])&&!isset($x113->properties[\'column\'])){$x113->properties[\'file\']=\'<image>/11_error.js\';$x113->properties[\'line\']=80;$x113->properties[\'column\']=9;$x113->attributes[\'file\']=$x113->attributes[\'line\']=$x113->attributes[\'column\']=0;}throw new JSException($x113,80,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x114,$W114,$S114,$U114);$x115=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',80,9,\'<image>/11_error.js\');$x114=&$x115[0];list(,$W114,$S114,$U114)=$x115;if($U114&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x114;$x114=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U114=FALSE;$W114=TRUE;}if(isset($S114)){$x117=$S114->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x118=$x117($global,$_e,$S114,array($x111),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x116=$x118;}else{if(!$U114){$x116=$x111;if($W114){$x114=$x111;}}else{$x116=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_TypeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['NotImplementedError'] = $fn;
$_NotImplementedError =& $scope->properties['NotImplementedError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x124 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Error', 89, 14, '<image>/11_error.js');
$_Error =& $x124[0]; list(,$WError,$SError,$UError) = $x124;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x125 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'ReferenceError', 89, 14, '<image>/11_error.js');
$_ReferenceError =& $x125[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x125;
$x126 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 14);
$x127 = $x126($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x127->class) && $x127->class === 'Error' && !isset($x127->properties['file']) && !isset($x127->properties['line']) && !isset($x127->properties['column'])) {$x127->properties['file'] = '<image>/11_error.js';$x127->properties['line'] = 89;$x127->properties['column'] = 14;$x127->attributes['file'] = $x127->attributes['line'] = $x127->attributes['column'] = 0; }
throw new JSException($x127, 89, 14, '<image>/11_error.js');
}
$x122 = clone JS::$objectTemplate;
unset($x128, $W128, $S128, $U128);
$x129 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 89, 10, '<image>/11_error.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
$x123 = $x128;
$x122->prototype = $x123;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x132 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 89, 10, '<image>/11_error.js');
$_TypeError =& $x132[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x132;
$x133 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x134 = $x133($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x134->class) && $x134->class === 'Error' && !isset($x134->properties['file']) && !isset($x134->properties['line']) && !isset($x134->properties['column'])) {$x134->properties['file'] = '<image>/11_error.js';$x134->properties['line'] = 89;$x134->properties['column'] = 10;$x134->attributes['file'] = $x134->attributes['line'] = $x134->attributes['column'] = 0; }
throw new JSException($x134, 89, 10, '<image>/11_error.js');
}
$x130 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x131 = $x130($global, $x122, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x123 = $x131;
if (is_object($x123) && $x123 !== JS::$undefined) { $x122 = $x123; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x122;
$x135 = 'NotImplementedError';
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x136 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'TypeError', 90, 9, '<image>/11_error.js');
$_TypeError =& $x136[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x136;
$x137 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x138 = $x137($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/11_error.js';$x138->properties['line'] = 90;$x138->properties['column'] = 9;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 90, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x139, $W139, $S139, $U139);
$x140 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, (string) 'name', 90, 9, '<image>/11_error.js');
$x139 =& $x140[0]; list(,$W139,$S139,$U139) = $x140;
if ($U139 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties['name'] = $x139; $x139 =& $_e->properties['name']; $_e->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U139 = FALSE; $W139 = TRUE; }
if (isset($S139)) {
$x142 = $S139->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x143 = $x142($global, $_e, $S139, array($x135), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x141 = $x143;
} else {
if (!$U139) {$x141 = $x135;if ($W139) { $x139 = $x135; }  }
else { $x141 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array' &&  is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; };
$_e->prototype =$_NotImplementedError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x121=&$scope->properties[\'arguments\'];$x121->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x121->properties[$i]=$args[$i];$x121->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'NotImplementedError\']=$fn;$_NotImplementedError=&$scope->properties[\'NotImplementedError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x124=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'Error\',89,14,\'<image>/11_error.js\');$_Error=&$x124[0];list(,$WError,$SError,$UError)=$x124;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x125=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'ReferenceError\',89,14,\'<image>/11_error.js\');$_ReferenceError=&$x125[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x125;$x126=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,14);$x127=$x126($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x127->class)&&$x127->class===\'Error\'&&!isset($x127->properties[\'file\'])&&!isset($x127->properties[\'line\'])&&!isset($x127->properties[\'column\'])){$x127->properties[\'file\']=\'<image>/11_error.js\';$x127->properties[\'line\']=89;$x127->properties[\'column\']=14;$x127->attributes[\'file\']=$x127->attributes[\'line\']=$x127->attributes[\'column\']=0;}throw new JSException($x127,89,14,\'<image>/11_error.js\');}$x122=clone JS::$objectTemplate;unset($x128,$W128,$S128,$U128);$x129=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,(string)\'prototype\',89,10,\'<image>/11_error.js\');$x128=&$x129[0];list(,$W128,$S128,$U128)=$x129;$x123=$x128;$x122->prototype=$x123;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x132=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',89,10,\'<image>/11_error.js\');$_TypeError=&$x132[0];list(,$WTypeError,$STypeError,$UTypeError)=$x132;$x133=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x134=$x133($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x134->class)&&$x134->class===\'Error\'&&!isset($x134->properties[\'file\'])&&!isset($x134->properties[\'line\'])&&!isset($x134->properties[\'column\'])){$x134->properties[\'file\']=\'<image>/11_error.js\';$x134->properties[\'line\']=89;$x134->properties[\'column\']=10;$x134->attributes[\'file\']=$x134->attributes[\'line\']=$x134->attributes[\'column\']=0;}throw new JSException($x134,89,10,\'<image>/11_error.js\');}$x130=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x131=$x130($global,$x122,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x123=$x131;if(is_object($x123)&&$x123!==JS::$undefined){$x122=$x123;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x122;$x135=\'NotImplementedError\';if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x136=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,(string)\'TypeError\',90,9,\'<image>/11_error.js\');$_TypeError=&$x136[0];list(,$WTypeError,$STypeError,$UTypeError)=$x136;$x137=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x138=$x137($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x138->class)&&$x138->class===\'Error\'&&!isset($x138->properties[\'file\'])&&!isset($x138->properties[\'line\'])&&!isset($x138->properties[\'column\'])){$x138->properties[\'file\']=\'<image>/11_error.js\';$x138->properties[\'line\']=90;$x138->properties[\'column\']=9;$x138->attributes[\'file\']=$x138->attributes[\'line\']=$x138->attributes[\'column\']=0;}throw new JSException($x138,90,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x139,$W139,$S139,$U139);$x140=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,(string)\'name\',90,9,\'<image>/11_error.js\');$x139=&$x140[0];list(,$W139,$S139,$U139)=$x140;if($U139&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[\'name\']=$x139;$x139=&$_e->properties[\'name\'];$_e->attributes[\'name\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U139=FALSE;$W139=TRUE;}if(isset($S139)){$x142=$S139->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x143=$x142($global,$_e,$S139,array($x135),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x141=$x143;}else{if(!$U139){$x141=$x135;if($W139){$x139=$x135;}}else{$x141=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'&&is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}$_e->prototype=$_NotImplementedError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x186 =& $scope->properties['arguments'];
$x186->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x186->properties[$i] = $args[$i];
$x186->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x187, $W187, $S187, $U187);
$x188 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, (string) 'name', 26, 17, '<image>/11_error.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
$scope->properties['name'] = JS::$undefined; $_name =& $scope->properties['name'];
$Uname = FALSE;
$_name = $x187;
unset($x189, $W189, $S189, $U189);
$x190 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, (string) 'message', 26, 34, '<image>/11_error.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
$scope->properties['msg'] = JS::$undefined; $_msg =& $scope->properties['msg'];
$Umsg = FALSE;
$_msg = $x189;
$x191 = (((gettype($_name) === gettype(JS::$undefined) && $_name === JS::$undefined))|| (((is_float($_name) || is_int($_name)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_name == JS::$undefined));
if (JS::toBoolean($x191, $global)) {
$x192 = '';
if ($Uname) {$global->properties['name'] = $_name; $_name =& $global->properties['name']; }
$_name = $x192;;
};
$x193 = (((gettype($_msg) === gettype(JS::$undefined) && $_msg === JS::$undefined))|| (((is_float($_msg) || is_int($_msg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_msg == JS::$undefined));
if (JS::toBoolean($x193, $global)) {
$x194 = '';
if ($Umsg) {$global->properties['msg'] = $_msg; $_msg =& $global->properties['msg']; }
$_msg = $x194;;
};
$x196 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
$x195 = $x196;
if (JS::toBoolean($x195, $global)) {
$x197 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
$x195 = $x197; }
if (JS::toBoolean($x195, $global)) {

return 'Error';;
};
$x198 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
if (JS::toBoolean($x198, $global)) {

return $_msg;;
};
$x199 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
if (JS::toBoolean($x199, $global)) {

return $_name;;
};
$x202 = JS::toPrimitive($_name, $global);
$x203 = JS::toPrimitive(': ', $global);
$x200 = JS::toPrimitive((is_string($x202) || is_string($x203) ? JS::toString($x202, $global) . JS::toString($x203, $global) : JS::toNumber($x202, $global) + JS::toNumber($x203, $global)), $global);
$x201 = JS::toPrimitive($_msg, $global);
return (is_string($x200) || is_string($x201) ? JS::toString($x200, $global) . JS::toString($x201, $global) : JS::toNumber($x200, $global) + JS::toNumber($x201, $global));
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x186=&$scope->properties[\'arguments\'];$x186->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x186->properties[$i]=$args[$i];$x186->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x187,$W187,$S187,$U187);$x188=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,(string)\'name\',26,17,\'<image>/11_error.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;$scope->properties[\'name\']=JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$_name=$x187;unset($x189,$W189,$S189,$U189);$x190=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,(string)\'message\',26,34,\'<image>/11_error.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;$scope->properties[\'msg\']=JS::$undefined;$_msg=&$scope->properties[\'msg\'];$Umsg=FALSE;$_msg=$x189;$x191=(((gettype($_name)===gettype(JS::$undefined)&&$_name===JS::$undefined))||(((is_float($_name)||is_int($_name))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_name==JS::$undefined));if(JS::toBoolean($x191,$global)){$x192=\'\';if($Uname){$global->properties[\'name\']=$_name;$_name=&$global->properties[\'name\'];}$_name=$x192;}$x193=(((gettype($_msg)===gettype(JS::$undefined)&&$_msg===JS::$undefined))||(((is_float($_msg)||is_int($_msg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_msg==JS::$undefined));if(JS::toBoolean($x193,$global)){$x194=\'\';if($Umsg){$global->properties[\'msg\']=$_msg;$_msg=&$global->properties[\'msg\'];}$_msg=$x194;}$x196=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));$x195=$x196;if(JS::toBoolean($x195,$global)){$x197=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));$x195=$x197;}if(JS::toBoolean($x195,$global)){return\'Error\';}$x198=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));if(JS::toBoolean($x198,$global)){return$_msg;}$x199=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));if(JS::toBoolean($x199,$global)){return$_name;}$x202=JS::toPrimitive($_name,$global);$x203=JS::toPrimitive(\': \',$global);$x200=JS::toPrimitive((is_string($x202)||is_string($x203)?JS::toString($x202,$global).JS::toString($x203,$global):JS::toNumber($x202,$global)+JS::toNumber($x203,$global)),$global);$x201=JS::toPrimitive($_msg,$global);return(is_string($x200)||is_string($x201)?JS::toString($x200,$global).JS::toString($x201,$global):JS::toNumber($x200,$global)+JS::toNumber($x201,$global));return JS::$undefined;}', "\n";
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
$x47 = clone JS::$functionTemplate; $x47->call = '_89174112e855facd9d2f6198b727df5b_4'; $x47->parameters = array (
  0 => 'message',
); $x47->name = 'RangeError'; $x47->scope = $scope; $x47->properties['prototype'] = clone JS::$objectTemplate; $x47->attributes['prototype'] = JS::WRITABLE; $x47->properties['prototype']->properties['constructor'] = $x47; $x47->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x47->properties['length'] = 1; $x47->attributes['length'] = 0;
$scope->properties['RangeError'] = JS::$undefined; $_RangeError =& $scope->properties['RangeError'];
$URangeError = FALSE;
$_RangeError = $x47;
$x71 = clone JS::$functionTemplate; $x71->call = '_89174112e855facd9d2f6198b727df5b_6'; $x71->parameters = array (
  0 => 'message',
); $x71->name = 'ReferenceError'; $x71->scope = $scope; $x71->properties['prototype'] = clone JS::$objectTemplate; $x71->attributes['prototype'] = JS::WRITABLE; $x71->properties['prototype']->properties['constructor'] = $x71; $x71->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x71->properties['length'] = 1; $x71->attributes['length'] = 0;
$scope->properties['ReferenceError'] = JS::$undefined; $_ReferenceError =& $scope->properties['ReferenceError'];
$UReferenceError = FALSE;
$_ReferenceError = $x71;
$x96 = clone JS::$functionTemplate; $x96->call = '_89174112e855facd9d2f6198b727df5b_7'; $x96->parameters = array (
  0 => 'message',
); $x96->name = 'SyntaxError'; $x96->scope = $scope; $x96->properties['prototype'] = clone JS::$objectTemplate; $x96->attributes['prototype'] = JS::WRITABLE; $x96->properties['prototype']->properties['constructor'] = $x96; $x96->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x96->properties['length'] = 1; $x96->attributes['length'] = 0;
$scope->properties['SyntaxError'] = JS::$undefined; $_SyntaxError =& $scope->properties['SyntaxError'];
$USyntaxError = FALSE;
$_SyntaxError = $x96;
$x119 = clone JS::$functionTemplate; $x119->call = '_89174112e855facd9d2f6198b727df5b_8'; $x119->parameters = array (
  0 => 'message',
); $x119->name = 'TypeError'; $x119->scope = $scope; $x119->properties['prototype'] = clone JS::$objectTemplate; $x119->attributes['prototype'] = JS::WRITABLE; $x119->properties['prototype']->properties['constructor'] = $x119; $x119->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x119->properties['length'] = 1; $x119->attributes['length'] = 0;
$scope->properties['TypeError'] = JS::$undefined; $_TypeError =& $scope->properties['TypeError'];
$UTypeError = FALSE;
$_TypeError = $x119;
$x144 = clone JS::$functionTemplate; $x144->call = '_89174112e855facd9d2f6198b727df5b_9'; $x144->parameters = array (
  0 => 'message',
); $x144->name = 'NotImplementedError'; $x144->scope = $scope; $x144->properties['prototype'] = clone JS::$objectTemplate; $x144->attributes['prototype'] = JS::WRITABLE; $x144->properties['prototype']->properties['constructor'] = $x144; $x144->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x144->properties['length'] = 1; $x144->attributes['length'] = 0;
$scope->properties['NotImplementedError'] = JS::$undefined; $_NotImplementedError =& $scope->properties['NotImplementedError'];
$UNotImplementedError = FALSE;
$_NotImplementedError = $x144;
$x145 = clone JS::$objectTemplate;
if ($_Error === JS::$undefined || $_Error === NULL) {
$x146 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x147 = $x146($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x147->class) && $x147->class === 'Error' && !isset($x147->properties['file']) && !isset($x147->properties['line']) && !isset($x147->properties['column'])) {$x147->properties['file'] = '<image>/11_error.js';$x147->properties['line'] = 15;$x147->properties['column'] = 17;$x147->attributes['file'] = $x147->attributes['line'] = $x147->attributes['column'] = 0; }
throw new JSException($x147, 15, 17, '<image>/11_error.js');
}
$_Error = JS::toObject($_Error, $global);
unset($x148, $W148, $S148, $U148);
$x149 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_Error, (string) 'prototype', 15, 17, '<image>/11_error.js');
$x148 =& $x149[0]; list(,$W148,$S148,$U148) = $x149;
if ($U148 && (!isset($_Error->extensible) || $_Error->extensible)) {$_Error->properties['prototype'] = $x148; $x148 =& $_Error->properties['prototype']; $_Error->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U148 = FALSE; $W148 = TRUE; }
if (isset($S148)) {
$x151 = $S148->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x152 = $x151($global, $_Error, $S148, array($x145), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x150 = $x152;
} else {
if (!$U148) {$x150 = $x145;if ($W148) { $x148 = $x145; }  }
else { $x150 = JS::$undefined; }
}
if (isset($_Error->class) && $_Error->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Error->properties['length']) { $_Error->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x153 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, (string) 'Object', 16, 50, '<image>/11_error.js');
$_Object =& $x153[0]; list(,$WObject,$SObject,$UObject) = $x153;
if ($UObject) {
$x154 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 16, 50);
$x155 = $x154($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x155->class) && $x155->class === 'Error' && !isset($x155->properties['file']) && !isset($x155->properties['line']) && !isset($x155->properties['column'])) {$x155->properties['file'] = '<image>/11_error.js';$x155->properties['line'] = 16;$x155->properties['column'] = 50;$x155->attributes['file'] = $x155->attributes['line'] = $x155->attributes['column'] = 0; }
throw new JSException($x155, 16, 50, '<image>/11_error.js');
}
$_Error->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Error->properties['prototype']->class = 'Error';
$_Error->properties['prototype']->extensible = TRUE;
unset($x156, $W156, $S156, $U156);
$x157 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 19, 6, '<image>/11_error.js');
$x156 =& $x157[0]; list(,$W156,$S156,$U156) = $x157;
if ($x156 === JS::$undefined || $x156 === NULL) {
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x159 = $x158($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error' && !isset($x159->properties['file']) && !isset($x159->properties['line']) && !isset($x159->properties['column'])) {$x159->properties['file'] = '<image>/11_error.js';$x159->properties['line'] = 19;$x159->properties['column'] = 29;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 19, 29, '<image>/11_error.js');
}
$x156 = JS::toObject($x156, $global);
unset($x160, $W160, $S160, $U160);
$x161 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x156, (string) 'constructor', 19, 29, '<image>/11_error.js');
$x160 =& $x161[0]; list(,$W160,$S160,$U160) = $x161;
if ($U160 && (!isset($x156->extensible) || $x156->extensible)) {$x156->properties['constructor'] = $x160; $x160 =& $x156->properties['constructor']; $x156->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U160 = FALSE; $W160 = TRUE; }
if (isset($S160)) {
$x163 = $S160->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x164 = $x163($global, $x156, $S160, array($_Error), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x162 = $x164;
} else {
if (!$U160) {$x162 = $_Error;if ($W160) { $x160 = $_Error; }  }
else { $x162 = JS::$undefined; }
}
if (isset($x156->class) && $x156->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x156->properties['length']) { $x156->properties['length'] = 'constructor' + 1; };
$x165 = 'Error';
unset($x166, $W166, $S166, $U166);
$x167 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 21, 6, '<image>/11_error.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
if ($x166 === JS::$undefined || $x166 === NULL) {
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x169 = $x168($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/11_error.js';$x169->properties['line'] = 21;$x169->properties['column'] = 22;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 21, 22, '<image>/11_error.js');
}
$x166 = JS::toObject($x166, $global);
unset($x170, $W170, $S170, $U170);
$x171 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x166, (string) 'name', 21, 22, '<image>/11_error.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
if ($U170 && (!isset($x166->extensible) || $x166->extensible)) {$x166->properties['name'] = $x170; $x170 =& $x166->properties['name']; $x166->attributes['name'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U170 = FALSE; $W170 = TRUE; }
if (isset($S170)) {
$x173 = $S170->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x174 = $x173($global, $x166, $S170, array($x165), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x172 = $x174;
} else {
if (!$U170) {$x172 = $x165;if ($W170) { $x170 = $x165; }  }
else { $x172 = JS::$undefined; }
}
if (isset($x166->class) && $x166->class === 'Array' &&  is_int('name') && 'name' >= $x166->properties['length']) { $x166->properties['length'] = 'name' + 1; };
$x175 = '';
unset($x176, $W176, $S176, $U176);
$x177 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 23, 6, '<image>/11_error.js');
$x176 =& $x177[0]; list(,$W176,$S176,$U176) = $x177;
if ($x176 === JS::$undefined || $x176 === NULL) {
$x178 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x179 = $x178($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x179->class) && $x179->class === 'Error' && !isset($x179->properties['file']) && !isset($x179->properties['line']) && !isset($x179->properties['column'])) {$x179->properties['file'] = '<image>/11_error.js';$x179->properties['line'] = 23;$x179->properties['column'] = 25;$x179->attributes['file'] = $x179->attributes['line'] = $x179->attributes['column'] = 0; }
throw new JSException($x179, 23, 25, '<image>/11_error.js');
}
$x176 = JS::toObject($x176, $global);
unset($x180, $W180, $S180, $U180);
$x181 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x176, (string) 'message', 23, 25, '<image>/11_error.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
if ($U180 && (!isset($x176->extensible) || $x176->extensible)) {$x176->properties['message'] = $x180; $x180 =& $x176->properties['message']; $x176->attributes['message'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U180 = FALSE; $W180 = TRUE; }
if (isset($S180)) {
$x183 = $S180->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x184 = $x183($global, $x176, $S180, array($x175), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x182 = $x184;
} else {
if (!$U180) {$x182 = $x175;if ($W180) { $x180 = $x175; }  }
else { $x182 = JS::$undefined; }
}
if (isset($x176->class) && $x176->class === 'Array' &&  is_int('message') && 'message' >= $x176->properties['length']) { $x176->properties['length'] = 'message' + 1; };
$x204 = clone JS::$functionTemplate; $x204->call = '_89174112e855facd9d2f6198b727df5b_10'; $x204->parameters = array (
); $x204->scope = $scope; $x204->properties['prototype'] = clone JS::$objectTemplate; $x204->attributes['prototype'] = JS::WRITABLE; $x204->properties['prototype']->properties['constructor'] = $x204; $x204->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x204->properties['length'] = 0; $x204->attributes['length'] = 0;
unset($x205, $W205, $S205, $U205);
$x206 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, (string) 'prototype', 25, 6, '<image>/11_error.js');
$x205 =& $x206[0]; list(,$W205,$S205,$U205) = $x206;
if ($x205 === JS::$undefined || $x205 === NULL) {
$x207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x208 = $x207($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x208->class) && $x208->class === 'Error' && !isset($x208->properties['file']) && !isset($x208->properties['line']) && !isset($x208->properties['column'])) {$x208->properties['file'] = '<image>/11_error.js';$x208->properties['line'] = 25;$x208->properties['column'] = 26;$x208->attributes['file'] = $x208->attributes['line'] = $x208->attributes['column'] = 0; }
throw new JSException($x208, 25, 26, '<image>/11_error.js');
}
$x205 = JS::toObject($x205, $global);
unset($x209, $W209, $S209, $U209);
$x210 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x205, (string) 'toString', 25, 26, '<image>/11_error.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
if ($U209 && (!isset($x205->extensible) || $x205->extensible)) {$x205->properties['toString'] = $x209; $x209 =& $x205->properties['toString']; $x205->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U209 = FALSE; $W209 = TRUE; }
if (isset($S209)) {
$x212 = $S209->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x213 = $x212($global, $x205, $S209, array($x204), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x211 = $x213;
} else {
if (!$U209) {$x211 = $x204;if ($W209) { $x209 = $x204; }  }
else { $x211 = JS::$undefined; }
}
if (isset($x205->class) && $x205->class === 'Array' &&  is_int('toString') && 'toString' >= $x205->properties['length']) { $x205->properties['length'] = 'toString' + 1; };
$_RangeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_ReferenceError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_SyntaxError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_TypeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_NotImplementedError->properties['prototype']->prototype =$_Error->properties['prototype'];
;
return JS::$undefined;
}
