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
if (isset($_e->class) && $_e->class === 'Array') {  if (isset($_e->properties['length']) && $_e->properties['length'] !== JS::$undefined) { $x16 = $_e->properties['length']; }  else { $x16 = 0; } }
if (isset($S10)) {
$x17 = $S10->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 5, 13);
$x18 = $x17($global, $_e, $S10, array($_message), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x15 = $x18;
} else {
if (!$U10) {$x15 = $_message;if ($W10) { $x10 = $_message; }  }
else { $x15 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array') {if (is_int('message') && 'message' >= $_e->properties['length']) { $_e->properties['length'] = 'message' + 1; }else if ($x4 === 'length' && is_int($_message) && $x16 > $_message) {  for ($i = $_message; $i < $x16; ++$i) {  unset($_e->properties[$i], $_e->attributes[$i]); }}};
};
$_e->prototype =$_Error->properties['prototype'];
$_e->class = 'Error';
$_e->extensible = TRUE;
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'Error\']=$fn;$_Error=&$scope->properties[\'Error\'];$global->scope[++$global->scope_sp]=$scope;$x2=clone JS::$objectTemplate;$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x2;$x3=!(((gettype($_message)===gettype(JS::$undefined)&&$_message===JS::$undefined))||(((is_float($_message)||is_int($_message))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_message==JS::$undefined));if(JS::toBoolean($x3,$global)){$x4=JS::toString(\'message\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x7=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),5,13,\'<image>/11_error.js\');$_TypeError=&$x7[0];list(,$WTypeError,$STypeError,$UTypeError)=$x7;$x8=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x9=$x8($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x9->class)&&$x9->class===\'Error\'&&!isset($x9->properties[\'file\'])&&!isset($x9->properties[\'line\'])&&!isset($x9->properties[\'column\'])){$x9->properties[\'file\']=\'<image>/11_error.js\';$x9->properties[\'line\']=5;$x9->properties[\'column\']=13;$x9->attributes[\'file\']=$x9->attributes[\'line\']=$x9->attributes[\'column\']=0;}throw new JSException($x9,5,13,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x10,$W10,$S10,$U10);$x14=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x4,$global),5,13,\'<image>/11_error.js\');$x10=&$x14[0];list(,$W10,$S10,$U10)=$x14;if($U10&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x4]=$x10;$x10=&$_e->properties[$x4];$_e->attributes[$x4]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U10=FALSE;$W10=TRUE;}if(isset($_e->class)&&$_e->class===\'Array\'){if(isset($_e->properties[\'length\'])&&$_e->properties[\'length\']!==JS::$undefined){$x16=$_e->properties[\'length\'];}else{$x16=0;}}if(isset($S10)){$x17=$S10->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',5,13);$x18=$x17($global,$_e,$S10,array($_message),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x15=$x18;}else{if(!$U10){$x15=$_message;if($W10){$x10=$_message;}}else{$x15=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'){if(is_int(\'message\')&&\'message\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'message\'+1;}else if($x4===\'length\'&&is_int($_message)&&$x16>$_message){for($i=$_message;$i<$x16;++$i){unset($_e->properties[$i],$_e->attributes[$i]);}}}}$_e->prototype=$_Error->properties[\'prototype\'];$_e->class=\'Error\';$_e->extensible=TRUE;return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x29 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x29[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x29;
$x30 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x31 = $x30($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x31->class) && $x31->class === 'Error' && !isset($x31->properties['file']) && !isset($x31->properties['line']) && !isset($x31->properties['column'])) {$x31->properties['file'] = $file;$x31->properties['line'] = $line;$x31->properties['column'] = $column;$x31->attributes['file'] = $x31->attributes['line'] = $x31->attributes['column'] = 0; }
throw new JSException($x31, $line, $column, $file);
}
$W28 = $S28 = $U28 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x28 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x32 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x33 = $x32($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x28 = $x33; }
else { $x28 = JS::$undefined; $U28 = TRUE; }
return array(&$x28, $W28, $S28, $U28);
}
echo 'function _89174112e855facd9d2f6198b727df5b_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x29=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x29[0];list(,$WTypeError,$STypeError,$UTypeError)=$x29;$x30=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x31=$x30($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x31->class)&&$x31->class===\'Error\'&&!isset($x31->properties[\'file\'])&&!isset($x31->properties[\'line\'])&&!isset($x31->properties[\'column\'])){$x31->properties[\'file\']=$file;$x31->properties[\'line\']=$line;$x31->properties[\'column\']=$column;$x31->attributes[\'file\']=$x31->attributes[\'line\']=$x31->attributes[\'column\']=0;}throw new JSException($x31,$line,$column,$file);}$W28=$S28=$U28=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x28=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x32=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x33=$x32($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x28=$x33;}else{$x28=JS::$undefined;$U28=TRUE;}return array(&$x28,$W28,$S28,$U28);}', "\n";
function _89174112e855facd9d2f6198b727df5b_4($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x21 =& $scope->properties['arguments'];
$x21->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x21->properties[$i] = $args[$i];
$x21->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['RangeError'] = $fn;
$_RangeError =& $scope->properties['RangeError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x24 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 52, 14, '<image>/11_error.js');
$_Error =& $x24[0]; list(,$WError,$SError,$UError) = $x24;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x25 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 52, 14, '<image>/11_error.js');
$_ReferenceError =& $x25[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x25;
$x26 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 14);
$x27 = $x26($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x27->class) && $x27->class === 'Error' && !isset($x27->properties['file']) && !isset($x27->properties['line']) && !isset($x27->properties['column'])) {$x27->properties['file'] = '<image>/11_error.js';$x27->properties['line'] = 52;$x27->properties['column'] = 14;$x27->attributes['file'] = $x27->attributes['line'] = $x27->attributes['column'] = 0; }
throw new JSException($x27, 52, 14, '<image>/11_error.js');
}
$x22 = clone JS::$objectTemplate;
unset($x28, $W28, $S28, $U28);
$x34 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 52, 10, '<image>/11_error.js');
$x28 =& $x34[0]; list(,$W28,$S28,$U28) = $x34;
$x23 = $x28;
$x22->prototype = $x23;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x37 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 52, 10, '<image>/11_error.js');
$_TypeError =& $x37[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x37;
$x38 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 10);
$x39 = $x38($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x39->class) && $x39->class === 'Error' && !isset($x39->properties['file']) && !isset($x39->properties['line']) && !isset($x39->properties['column'])) {$x39->properties['file'] = '<image>/11_error.js';$x39->properties['line'] = 52;$x39->properties['column'] = 10;$x39->attributes['file'] = $x39->attributes['line'] = $x39->attributes['column'] = 0; }
throw new JSException($x39, 52, 10, '<image>/11_error.js');
}
$x35 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 52, 10);
$x36 = $x35($global, $x22, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x23 = $x36;
if (is_object($x23) && $x23 !== JS::$undefined) { $x22 = $x23; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x22;
$x40 = 'RangeError';
$x41 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x42 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 53, 9, '<image>/11_error.js');
$_TypeError =& $x42[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x42;
$x43 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x44 = $x43($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x44->class) && $x44->class === 'Error' && !isset($x44->properties['file']) && !isset($x44->properties['line']) && !isset($x44->properties['column'])) {$x44->properties['file'] = '<image>/11_error.js';$x44->properties['line'] = 53;$x44->properties['column'] = 9;$x44->attributes['file'] = $x44->attributes['line'] = $x44->attributes['column'] = 0; }
throw new JSException($x44, 53, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x45, $W45, $S45, $U45);
$x46 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x41, $global), 53, 9, '<image>/11_error.js');
$x45 =& $x46[0]; list(,$W45,$S45,$U45) = $x46;
if ($U45 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x41] = $x45; $x45 =& $_e->properties[$x41]; $_e->attributes[$x41] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U45 = FALSE; $W45 = TRUE; }
if (isset($_e->class) && $_e->class === 'Array') {  if (isset($_e->properties['length']) && $_e->properties['length'] !== JS::$undefined) { $x48 = $_e->properties['length']; }  else { $x48 = 0; } }
if (isset($S45)) {
$x49 = $S45->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 53, 9);
$x50 = $x49($global, $_e, $S45, array($x40), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x47 = $x50;
} else {
if (!$U45) {$x47 = $x40;if ($W45) { $x45 = $x40; }  }
else { $x47 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array') {if (is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; }else if ($x41 === 'length' && is_int($x40) && $x48 > $x40) {  for ($i = $x40; $i < $x48; ++$i) {  unset($_e->properties[$i], $_e->attributes[$i]); }}};
$_e->prototype =$_RangeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_4($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x21=&$scope->properties[\'arguments\'];$x21->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x21->properties[$i]=$args[$i];$x21->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'RangeError\']=$fn;$_RangeError=&$scope->properties[\'RangeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x24=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),52,14,\'<image>/11_error.js\');$_Error=&$x24[0];list(,$WError,$SError,$UError)=$x24;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x25=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),52,14,\'<image>/11_error.js\');$_ReferenceError=&$x25[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x25;$x26=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,14);$x27=$x26($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x27->class)&&$x27->class===\'Error\'&&!isset($x27->properties[\'file\'])&&!isset($x27->properties[\'line\'])&&!isset($x27->properties[\'column\'])){$x27->properties[\'file\']=\'<image>/11_error.js\';$x27->properties[\'line\']=52;$x27->properties[\'column\']=14;$x27->attributes[\'file\']=$x27->attributes[\'line\']=$x27->attributes[\'column\']=0;}throw new JSException($x27,52,14,\'<image>/11_error.js\');}$x22=clone JS::$objectTemplate;unset($x28,$W28,$S28,$U28);$x34=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),52,10,\'<image>/11_error.js\');$x28=&$x34[0];list(,$W28,$S28,$U28)=$x34;$x23=$x28;$x22->prototype=$x23;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x37=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),52,10,\'<image>/11_error.js\');$_TypeError=&$x37[0];list(,$WTypeError,$STypeError,$UTypeError)=$x37;$x38=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x39=$x38($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x39->class)&&$x39->class===\'Error\'&&!isset($x39->properties[\'file\'])&&!isset($x39->properties[\'line\'])&&!isset($x39->properties[\'column\'])){$x39->properties[\'file\']=\'<image>/11_error.js\';$x39->properties[\'line\']=52;$x39->properties[\'column\']=10;$x39->attributes[\'file\']=$x39->attributes[\'line\']=$x39->attributes[\'column\']=0;}throw new JSException($x39,52,10,\'<image>/11_error.js\');}$x35=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',52,10);$x36=$x35($global,$x22,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x23=$x36;if(is_object($x23)&&$x23!==JS::$undefined){$x22=$x23;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x22;$x40=\'RangeError\';$x41=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x42=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),53,9,\'<image>/11_error.js\');$_TypeError=&$x42[0];list(,$WTypeError,$STypeError,$UTypeError)=$x42;$x43=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x44=$x43($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x44->class)&&$x44->class===\'Error\'&&!isset($x44->properties[\'file\'])&&!isset($x44->properties[\'line\'])&&!isset($x44->properties[\'column\'])){$x44->properties[\'file\']=\'<image>/11_error.js\';$x44->properties[\'line\']=53;$x44->properties[\'column\']=9;$x44->attributes[\'file\']=$x44->attributes[\'line\']=$x44->attributes[\'column\']=0;}throw new JSException($x44,53,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x45,$W45,$S45,$U45);$x46=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x41,$global),53,9,\'<image>/11_error.js\');$x45=&$x46[0];list(,$W45,$S45,$U45)=$x46;if($U45&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x41]=$x45;$x45=&$_e->properties[$x41];$_e->attributes[$x41]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U45=FALSE;$W45=TRUE;}if(isset($_e->class)&&$_e->class===\'Array\'){if(isset($_e->properties[\'length\'])&&$_e->properties[\'length\']!==JS::$undefined){$x48=$_e->properties[\'length\'];}else{$x48=0;}}if(isset($S45)){$x49=$S45->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',53,9);$x50=$x49($global,$_e,$S45,array($x40),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x47=$x50;}else{if(!$U45){$x47=$x40;if($W45){$x45=$x40;}}else{$x47=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'){if(is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}else if($x41===\'length\'&&is_int($x40)&&$x48>$x40){for($i=$x40;$i<$x48;++$i){unset($_e->properties[$i],$_e->attributes[$i]);}}}$_e->prototype=$_RangeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x53 =& $scope->properties['arguments'];
$x53->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x53->properties[$i] = $args[$i];
$x53->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['ReferenceError'] = $fn;
$_ReferenceError =& $scope->properties['ReferenceError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x56 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 61, 14, '<image>/11_error.js');
$_Error =& $x56[0]; list(,$WError,$SError,$UError) = $x56;
if ($UError) {
$x57 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 14);
$x58 = $x57($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x58->class) && $x58->class === 'Error' && !isset($x58->properties['file']) && !isset($x58->properties['line']) && !isset($x58->properties['column'])) {$x58->properties['file'] = '<image>/11_error.js';$x58->properties['line'] = 61;$x58->properties['column'] = 14;$x58->attributes['file'] = $x58->attributes['line'] = $x58->attributes['column'] = 0; }
throw new JSException($x58, 61, 14, '<image>/11_error.js');
}
$x54 = clone JS::$objectTemplate;
unset($x59, $W59, $S59, $U59);
$x60 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 61, 10, '<image>/11_error.js');
$x59 =& $x60[0]; list(,$W59,$S59,$U59) = $x60;
$x55 = $x59;
$x54->prototype = $x55;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x63 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 61, 10, '<image>/11_error.js');
$_TypeError =& $x63[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x63;
$x64 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x65 = $x64($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x65->class) && $x65->class === 'Error' && !isset($x65->properties['file']) && !isset($x65->properties['line']) && !isset($x65->properties['column'])) {$x65->properties['file'] = '<image>/11_error.js';$x65->properties['line'] = 61;$x65->properties['column'] = 10;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, 61, 10, '<image>/11_error.js');
}
$x61 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 61, 10);
$x62 = $x61($global, $x54, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x55 = $x62;
if (is_object($x55) && $x55 !== JS::$undefined) { $x54 = $x55; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x54;
$x66 = 'ReferenceError';
$x67 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x68 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 62, 9, '<image>/11_error.js');
$_TypeError =& $x68[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x68;
$x69 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x70 = $x69($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x70->class) && $x70->class === 'Error' && !isset($x70->properties['file']) && !isset($x70->properties['line']) && !isset($x70->properties['column'])) {$x70->properties['file'] = '<image>/11_error.js';$x70->properties['line'] = 62;$x70->properties['column'] = 9;$x70->attributes['file'] = $x70->attributes['line'] = $x70->attributes['column'] = 0; }
throw new JSException($x70, 62, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x71, $W71, $S71, $U71);
$x72 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x67, $global), 62, 9, '<image>/11_error.js');
$x71 =& $x72[0]; list(,$W71,$S71,$U71) = $x72;
if ($U71 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x67] = $x71; $x71 =& $_e->properties[$x67]; $_e->attributes[$x67] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U71 = FALSE; $W71 = TRUE; }
if (isset($_e->class) && $_e->class === 'Array') {  if (isset($_e->properties['length']) && $_e->properties['length'] !== JS::$undefined) { $x74 = $_e->properties['length']; }  else { $x74 = 0; } }
if (isset($S71)) {
$x75 = $S71->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 62, 9);
$x76 = $x75($global, $_e, $S71, array($x66), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x73 = $x76;
} else {
if (!$U71) {$x73 = $x66;if ($W71) { $x71 = $x66; }  }
else { $x73 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array') {if (is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; }else if ($x67 === 'length' && is_int($x66) && $x74 > $x66) {  for ($i = $x66; $i < $x74; ++$i) {  unset($_e->properties[$i], $_e->attributes[$i]); }}};
$_e->prototype =$_ReferenceError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x53=&$scope->properties[\'arguments\'];$x53->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x53->properties[$i]=$args[$i];$x53->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'ReferenceError\']=$fn;$_ReferenceError=&$scope->properties[\'ReferenceError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x56=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),61,14,\'<image>/11_error.js\');$_Error=&$x56[0];list(,$WError,$SError,$UError)=$x56;if($UError){$x57=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,14);$x58=$x57($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x58->class)&&$x58->class===\'Error\'&&!isset($x58->properties[\'file\'])&&!isset($x58->properties[\'line\'])&&!isset($x58->properties[\'column\'])){$x58->properties[\'file\']=\'<image>/11_error.js\';$x58->properties[\'line\']=61;$x58->properties[\'column\']=14;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,61,14,\'<image>/11_error.js\');}$x54=clone JS::$objectTemplate;unset($x59,$W59,$S59,$U59);$x60=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),61,10,\'<image>/11_error.js\');$x59=&$x60[0];list(,$W59,$S59,$U59)=$x60;$x55=$x59;$x54->prototype=$x55;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x63=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),61,10,\'<image>/11_error.js\');$_TypeError=&$x63[0];list(,$WTypeError,$STypeError,$UTypeError)=$x63;$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x65=$x64($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x65->class)&&$x65->class===\'Error\'&&!isset($x65->properties[\'file\'])&&!isset($x65->properties[\'line\'])&&!isset($x65->properties[\'column\'])){$x65->properties[\'file\']=\'<image>/11_error.js\';$x65->properties[\'line\']=61;$x65->properties[\'column\']=10;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,61,10,\'<image>/11_error.js\');}$x61=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',61,10);$x62=$x61($global,$x54,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x55=$x62;if(is_object($x55)&&$x55!==JS::$undefined){$x54=$x55;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x54;$x66=\'ReferenceError\';$x67=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x68=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),62,9,\'<image>/11_error.js\');$_TypeError=&$x68[0];list(,$WTypeError,$STypeError,$UTypeError)=$x68;$x69=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x70=$x69($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x70->class)&&$x70->class===\'Error\'&&!isset($x70->properties[\'file\'])&&!isset($x70->properties[\'line\'])&&!isset($x70->properties[\'column\'])){$x70->properties[\'file\']=\'<image>/11_error.js\';$x70->properties[\'line\']=62;$x70->properties[\'column\']=9;$x70->attributes[\'file\']=$x70->attributes[\'line\']=$x70->attributes[\'column\']=0;}throw new JSException($x70,62,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x71,$W71,$S71,$U71);$x72=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x67,$global),62,9,\'<image>/11_error.js\');$x71=&$x72[0];list(,$W71,$S71,$U71)=$x72;if($U71&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x67]=$x71;$x71=&$_e->properties[$x67];$_e->attributes[$x67]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U71=FALSE;$W71=TRUE;}if(isset($_e->class)&&$_e->class===\'Array\'){if(isset($_e->properties[\'length\'])&&$_e->properties[\'length\']!==JS::$undefined){$x74=$_e->properties[\'length\'];}else{$x74=0;}}if(isset($S71)){$x75=$S71->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',62,9);$x76=$x75($global,$_e,$S71,array($x66),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x73=$x76;}else{if(!$U71){$x73=$x66;if($W71){$x71=$x66;}}else{$x73=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'){if(is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}else if($x67===\'length\'&&is_int($x66)&&$x74>$x66){for($i=$x66;$i<$x74;++$i){unset($_e->properties[$i],$_e->attributes[$i]);}}}$_e->prototype=$_ReferenceError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x79 =& $scope->properties['arguments'];
$x79->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x79->properties[$i] = $args[$i];
$x79->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['SyntaxError'] = $fn;
$_SyntaxError =& $scope->properties['SyntaxError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x82 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 70, 14, '<image>/11_error.js');
$_Error =& $x82[0]; list(,$WError,$SError,$UError) = $x82;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x83 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 70, 14, '<image>/11_error.js');
$_ReferenceError =& $x83[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x83;
$x84 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 14);
$x85 = $x84($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x85->class) && $x85->class === 'Error' && !isset($x85->properties['file']) && !isset($x85->properties['line']) && !isset($x85->properties['column'])) {$x85->properties['file'] = '<image>/11_error.js';$x85->properties['line'] = 70;$x85->properties['column'] = 14;$x85->attributes['file'] = $x85->attributes['line'] = $x85->attributes['column'] = 0; }
throw new JSException($x85, 70, 14, '<image>/11_error.js');
}
$x80 = clone JS::$objectTemplate;
unset($x86, $W86, $S86, $U86);
$x87 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 70, 10, '<image>/11_error.js');
$x86 =& $x87[0]; list(,$W86,$S86,$U86) = $x87;
$x81 = $x86;
$x80->prototype = $x81;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x90 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 70, 10, '<image>/11_error.js');
$_TypeError =& $x90[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x90;
$x91 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x92 = $x91($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x92->class) && $x92->class === 'Error' && !isset($x92->properties['file']) && !isset($x92->properties['line']) && !isset($x92->properties['column'])) {$x92->properties['file'] = '<image>/11_error.js';$x92->properties['line'] = 70;$x92->properties['column'] = 10;$x92->attributes['file'] = $x92->attributes['line'] = $x92->attributes['column'] = 0; }
throw new JSException($x92, 70, 10, '<image>/11_error.js');
}
$x88 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 70, 10);
$x89 = $x88($global, $x80, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x81 = $x89;
if (is_object($x81) && $x81 !== JS::$undefined) { $x80 = $x81; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x80;
$x93 = 'SyntaxError';
$x94 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x95 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 71, 9, '<image>/11_error.js');
$_TypeError =& $x95[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x95;
$x96 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x97 = $x96($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error' && !isset($x97->properties['file']) && !isset($x97->properties['line']) && !isset($x97->properties['column'])) {$x97->properties['file'] = '<image>/11_error.js';$x97->properties['line'] = 71;$x97->properties['column'] = 9;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 71, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x98, $W98, $S98, $U98);
$x99 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x94, $global), 71, 9, '<image>/11_error.js');
$x98 =& $x99[0]; list(,$W98,$S98,$U98) = $x99;
if ($U98 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x94] = $x98; $x98 =& $_e->properties[$x94]; $_e->attributes[$x94] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U98 = FALSE; $W98 = TRUE; }
if (isset($_e->class) && $_e->class === 'Array') {  if (isset($_e->properties['length']) && $_e->properties['length'] !== JS::$undefined) { $x101 = $_e->properties['length']; }  else { $x101 = 0; } }
if (isset($S98)) {
$x102 = $S98->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 71, 9);
$x103 = $x102($global, $_e, $S98, array($x93), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x100 = $x103;
} else {
if (!$U98) {$x100 = $x93;if ($W98) { $x98 = $x93; }  }
else { $x100 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array') {if (is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; }else if ($x94 === 'length' && is_int($x93) && $x101 > $x93) {  for ($i = $x93; $i < $x101; ++$i) {  unset($_e->properties[$i], $_e->attributes[$i]); }}};
$_e->prototype =$_SyntaxError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x79=&$scope->properties[\'arguments\'];$x79->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x79->properties[$i]=$args[$i];$x79->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'SyntaxError\']=$fn;$_SyntaxError=&$scope->properties[\'SyntaxError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x82=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),70,14,\'<image>/11_error.js\');$_Error=&$x82[0];list(,$WError,$SError,$UError)=$x82;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x83=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),70,14,\'<image>/11_error.js\');$_ReferenceError=&$x83[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x83;$x84=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,14);$x85=$x84($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x85->class)&&$x85->class===\'Error\'&&!isset($x85->properties[\'file\'])&&!isset($x85->properties[\'line\'])&&!isset($x85->properties[\'column\'])){$x85->properties[\'file\']=\'<image>/11_error.js\';$x85->properties[\'line\']=70;$x85->properties[\'column\']=14;$x85->attributes[\'file\']=$x85->attributes[\'line\']=$x85->attributes[\'column\']=0;}throw new JSException($x85,70,14,\'<image>/11_error.js\');}$x80=clone JS::$objectTemplate;unset($x86,$W86,$S86,$U86);$x87=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),70,10,\'<image>/11_error.js\');$x86=&$x87[0];list(,$W86,$S86,$U86)=$x87;$x81=$x86;$x80->prototype=$x81;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x90=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),70,10,\'<image>/11_error.js\');$_TypeError=&$x90[0];list(,$WTypeError,$STypeError,$UTypeError)=$x90;$x91=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x92=$x91($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x92->class)&&$x92->class===\'Error\'&&!isset($x92->properties[\'file\'])&&!isset($x92->properties[\'line\'])&&!isset($x92->properties[\'column\'])){$x92->properties[\'file\']=\'<image>/11_error.js\';$x92->properties[\'line\']=70;$x92->properties[\'column\']=10;$x92->attributes[\'file\']=$x92->attributes[\'line\']=$x92->attributes[\'column\']=0;}throw new JSException($x92,70,10,\'<image>/11_error.js\');}$x88=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',70,10);$x89=$x88($global,$x80,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x81=$x89;if(is_object($x81)&&$x81!==JS::$undefined){$x80=$x81;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x80;$x93=\'SyntaxError\';$x94=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x95=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),71,9,\'<image>/11_error.js\');$_TypeError=&$x95[0];list(,$WTypeError,$STypeError,$UTypeError)=$x95;$x96=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x97=$x96($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'&&!isset($x97->properties[\'file\'])&&!isset($x97->properties[\'line\'])&&!isset($x97->properties[\'column\'])){$x97->properties[\'file\']=\'<image>/11_error.js\';$x97->properties[\'line\']=71;$x97->properties[\'column\']=9;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,71,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x98,$W98,$S98,$U98);$x99=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x94,$global),71,9,\'<image>/11_error.js\');$x98=&$x99[0];list(,$W98,$S98,$U98)=$x99;if($U98&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x94]=$x98;$x98=&$_e->properties[$x94];$_e->attributes[$x94]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U98=FALSE;$W98=TRUE;}if(isset($_e->class)&&$_e->class===\'Array\'){if(isset($_e->properties[\'length\'])&&$_e->properties[\'length\']!==JS::$undefined){$x101=$_e->properties[\'length\'];}else{$x101=0;}}if(isset($S98)){$x102=$S98->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',71,9);$x103=$x102($global,$_e,$S98,array($x93),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x100=$x103;}else{if(!$U98){$x100=$x93;if($W98){$x98=$x93;}}else{$x100=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'){if(is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}else if($x94===\'length\'&&is_int($x93)&&$x101>$x93){for($i=$x93;$i<$x101;++$i){unset($_e->properties[$i],$_e->attributes[$i]);}}}$_e->prototype=$_SyntaxError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x106 =& $scope->properties['arguments'];
$x106->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x106->properties[$i] = $args[$i];
$x106->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['TypeError'] = $fn;
$_TypeError =& $scope->properties['TypeError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x109 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 79, 14, '<image>/11_error.js');
$_Error =& $x109[0]; list(,$WError,$SError,$UError) = $x109;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x110 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 79, 14, '<image>/11_error.js');
$_ReferenceError =& $x110[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x110;
$x111 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 14);
$x112 = $x111($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x112->class) && $x112->class === 'Error' && !isset($x112->properties['file']) && !isset($x112->properties['line']) && !isset($x112->properties['column'])) {$x112->properties['file'] = '<image>/11_error.js';$x112->properties['line'] = 79;$x112->properties['column'] = 14;$x112->attributes['file'] = $x112->attributes['line'] = $x112->attributes['column'] = 0; }
throw new JSException($x112, 79, 14, '<image>/11_error.js');
}
$x107 = clone JS::$objectTemplate;
unset($x113, $W113, $S113, $U113);
$x114 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 79, 10, '<image>/11_error.js');
$x113 =& $x114[0]; list(,$W113,$S113,$U113) = $x114;
$x108 = $x113;
$x107->prototype = $x108;
if (!(is_object($_Error) && isset($_Error->call))) { 
$x117 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x118 = $x117($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x118->class) && $x118->class === 'Error' && !isset($x118->properties['file']) && !isset($x118->properties['line']) && !isset($x118->properties['column'])) {$x118->properties['file'] = '<image>/11_error.js';$x118->properties['line'] = 79;$x118->properties['column'] = 10;$x118->attributes['file'] = $x118->attributes['line'] = $x118->attributes['column'] = 0; }
throw new JSException($x118, 79, 10, '<image>/11_error.js');
}
$x115 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 79, 10);
$x116 = $x115($global, $x107, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x108 = $x116;
if (is_object($x108) && $x108 !== JS::$undefined) { $x107 = $x108; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x107;
$x119 = 'TypeError';
$x120 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
$x121 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x122 = $x121($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x122->class) && $x122->class === 'Error' && !isset($x122->properties['file']) && !isset($x122->properties['line']) && !isset($x122->properties['column'])) {$x122->properties['file'] = '<image>/11_error.js';$x122->properties['line'] = 80;$x122->properties['column'] = 9;$x122->attributes['file'] = $x122->attributes['line'] = $x122->attributes['column'] = 0; }
throw new JSException($x122, 80, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x123, $W123, $S123, $U123);
$x124 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x120, $global), 80, 9, '<image>/11_error.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
if ($U123 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x120] = $x123; $x123 =& $_e->properties[$x120]; $_e->attributes[$x120] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U123 = FALSE; $W123 = TRUE; }
if (isset($_e->class) && $_e->class === 'Array') {  if (isset($_e->properties['length']) && $_e->properties['length'] !== JS::$undefined) { $x126 = $_e->properties['length']; }  else { $x126 = 0; } }
if (isset($S123)) {
$x127 = $S123->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 80, 9);
$x128 = $x127($global, $_e, $S123, array($x119), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x125 = $x128;
} else {
if (!$U123) {$x125 = $x119;if ($W123) { $x123 = $x119; }  }
else { $x125 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array') {if (is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; }else if ($x120 === 'length' && is_int($x119) && $x126 > $x119) {  for ($i = $x119; $i < $x126; ++$i) {  unset($_e->properties[$i], $_e->attributes[$i]); }}};
$_e->prototype =$_TypeError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x106=&$scope->properties[\'arguments\'];$x106->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x106->properties[$i]=$args[$i];$x106->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'TypeError\']=$fn;$_TypeError=&$scope->properties[\'TypeError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x109=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),79,14,\'<image>/11_error.js\');$_Error=&$x109[0];list(,$WError,$SError,$UError)=$x109;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x110=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),79,14,\'<image>/11_error.js\');$_ReferenceError=&$x110[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x110;$x111=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,14);$x112=$x111($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x112->class)&&$x112->class===\'Error\'&&!isset($x112->properties[\'file\'])&&!isset($x112->properties[\'line\'])&&!isset($x112->properties[\'column\'])){$x112->properties[\'file\']=\'<image>/11_error.js\';$x112->properties[\'line\']=79;$x112->properties[\'column\']=14;$x112->attributes[\'file\']=$x112->attributes[\'line\']=$x112->attributes[\'column\']=0;}throw new JSException($x112,79,14,\'<image>/11_error.js\');}$x107=clone JS::$objectTemplate;unset($x113,$W113,$S113,$U113);$x114=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),79,10,\'<image>/11_error.js\');$x113=&$x114[0];list(,$W113,$S113,$U113)=$x114;$x108=$x113;$x107->prototype=$x108;if(!(is_object($_Error)&&isset($_Error->call))){$x117=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x118=$x117($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x118->class)&&$x118->class===\'Error\'&&!isset($x118->properties[\'file\'])&&!isset($x118->properties[\'line\'])&&!isset($x118->properties[\'column\'])){$x118->properties[\'file\']=\'<image>/11_error.js\';$x118->properties[\'line\']=79;$x118->properties[\'column\']=10;$x118->attributes[\'file\']=$x118->attributes[\'line\']=$x118->attributes[\'column\']=0;}throw new JSException($x118,79,10,\'<image>/11_error.js\');}$x115=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',79,10);$x116=$x115($global,$x107,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x108=$x116;if(is_object($x108)&&$x108!==JS::$undefined){$x107=$x108;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x107;$x119=\'TypeError\';$x120=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){$x121=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x122=$x121($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x122->class)&&$x122->class===\'Error\'&&!isset($x122->properties[\'file\'])&&!isset($x122->properties[\'line\'])&&!isset($x122->properties[\'column\'])){$x122->properties[\'file\']=\'<image>/11_error.js\';$x122->properties[\'line\']=80;$x122->properties[\'column\']=9;$x122->attributes[\'file\']=$x122->attributes[\'line\']=$x122->attributes[\'column\']=0;}throw new JSException($x122,80,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x123,$W123,$S123,$U123);$x124=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x120,$global),80,9,\'<image>/11_error.js\');$x123=&$x124[0];list(,$W123,$S123,$U123)=$x124;if($U123&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x120]=$x123;$x123=&$_e->properties[$x120];$_e->attributes[$x120]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U123=FALSE;$W123=TRUE;}if(isset($_e->class)&&$_e->class===\'Array\'){if(isset($_e->properties[\'length\'])&&$_e->properties[\'length\']!==JS::$undefined){$x126=$_e->properties[\'length\'];}else{$x126=0;}}if(isset($S123)){$x127=$S123->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',80,9);$x128=$x127($global,$_e,$S123,array($x119),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x125=$x128;}else{if(!$U123){$x125=$x119;if($W123){$x123=$x119;}}else{$x125=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'){if(is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}else if($x120===\'length\'&&is_int($x119)&&$x126>$x119){for($i=$x119;$i<$x126;++$i){unset($_e->properties[$i],$_e->attributes[$i]);}}}$_e->prototype=$_TypeError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x131 =& $scope->properties['arguments'];
$x131->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x131->properties[$i] = $args[$i];
$x131->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['message'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_message =& $scope->properties['message'];
$Umessage = FALSE;
$scope->properties['NotImplementedError'] = $fn;
$_NotImplementedError =& $scope->properties['NotImplementedError'];
$global->scope[++$global->scope_sp] = $scope;
unset($_Error, $WError, $SError, $UError);
$x134 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Error', $global), 89, 14, '<image>/11_error.js');
$_Error =& $x134[0]; list(,$WError,$SError,$UError) = $x134;
if ($UError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x135 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('ReferenceError', $global), 89, 14, '<image>/11_error.js');
$_ReferenceError =& $x135[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x135;
$x136 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 14);
$x137 = $x136($global, $global, $_ReferenceError, array('Error is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x137->class) && $x137->class === 'Error' && !isset($x137->properties['file']) && !isset($x137->properties['line']) && !isset($x137->properties['column'])) {$x137->properties['file'] = '<image>/11_error.js';$x137->properties['line'] = 89;$x137->properties['column'] = 14;$x137->attributes['file'] = $x137->attributes['line'] = $x137->attributes['column'] = 0; }
throw new JSException($x137, 89, 14, '<image>/11_error.js');
}
$x132 = clone JS::$objectTemplate;
unset($x138, $W138, $S138, $U138);
$x139 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 89, 10, '<image>/11_error.js');
$x138 =& $x139[0]; list(,$W138,$S138,$U138) = $x139;
$x133 = $x138;
$x132->prototype = $x133;
if (!(is_object($_Error) && isset($_Error->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x142 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 89, 10, '<image>/11_error.js');
$_TypeError =& $x142[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x142;
$x143 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x144 = $x143($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error' && !isset($x144->properties['file']) && !isset($x144->properties['line']) && !isset($x144->properties['column'])) {$x144->properties['file'] = '<image>/11_error.js';$x144->properties['line'] = 89;$x144->properties['column'] = 10;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 89, 10, '<image>/11_error.js');
}
$x140 = $_Error->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 89, 10);
$x141 = $x140($global, $x132, $_Error, array($_message), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x133 = $x141;
if (is_object($x133) && $x133 !== JS::$undefined) { $x132 = $x133; }
$scope->properties['e'] = JS::$undefined; $_e =& $scope->properties['e'];
$Ue = FALSE;
$_e = $x132;
$x145 = 'NotImplementedError';
$x146 = JS::toString('name', $global);
if ($_e === JS::$undefined || $_e === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x147 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('TypeError', $global), 90, 9, '<image>/11_error.js');
$_TypeError =& $x147[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x147;
$x148 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x149 = $x148($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x149->class) && $x149->class === 'Error' && !isset($x149->properties['file']) && !isset($x149->properties['line']) && !isset($x149->properties['column'])) {$x149->properties['file'] = '<image>/11_error.js';$x149->properties['line'] = 90;$x149->properties['column'] = 9;$x149->attributes['file'] = $x149->attributes['line'] = $x149->attributes['column'] = 0; }
throw new JSException($x149, 90, 9, '<image>/11_error.js');
}
$_e = JS::toObject($_e, $global);
unset($x150, $W150, $S150, $U150);
$x151 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_e, JS::toString($x146, $global), 90, 9, '<image>/11_error.js');
$x150 =& $x151[0]; list(,$W150,$S150,$U150) = $x151;
if ($U150 && (!isset($_e->extensible) || $_e->extensible)) {$_e->properties[$x146] = $x150; $x150 =& $_e->properties[$x146]; $_e->attributes[$x146] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U150 = FALSE; $W150 = TRUE; }
if (isset($_e->class) && $_e->class === 'Array') {  if (isset($_e->properties['length']) && $_e->properties['length'] !== JS::$undefined) { $x153 = $_e->properties['length']; }  else { $x153 = 0; } }
if (isset($S150)) {
$x154 = $S150->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 90, 9);
$x155 = $x154($global, $_e, $S150, array($x145), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x152 = $x155;
} else {
if (!$U150) {$x152 = $x145;if ($W150) { $x150 = $x145; }  }
else { $x152 = JS::$undefined; }
}
if (isset($_e->class) && $_e->class === 'Array') {if (is_int('name') && 'name' >= $_e->properties['length']) { $_e->properties['length'] = 'name' + 1; }else if ($x146 === 'length' && is_int($x145) && $x153 > $x145) {  for ($i = $x145; $i < $x153; ++$i) {  unset($_e->properties[$i], $_e->attributes[$i]); }}};
$_e->prototype =$_NotImplementedError->properties['prototype'];
return $_e;
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x131=&$scope->properties[\'arguments\'];$x131->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x131->properties[$i]=$args[$i];$x131->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'message\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_message=&$scope->properties[\'message\'];$Umessage=FALSE;$scope->properties[\'NotImplementedError\']=$fn;$_NotImplementedError=&$scope->properties[\'NotImplementedError\'];$global->scope[++$global->scope_sp]=$scope;unset($_Error,$WError,$SError,$UError);$x134=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'Error\',$global),89,14,\'<image>/11_error.js\');$_Error=&$x134[0];list(,$WError,$SError,$UError)=$x134;if($UError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x135=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),89,14,\'<image>/11_error.js\');$_ReferenceError=&$x135[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x135;$x136=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,14);$x137=$x136($global,$global,$_ReferenceError,array(\'Error is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x137->class)&&$x137->class===\'Error\'&&!isset($x137->properties[\'file\'])&&!isset($x137->properties[\'line\'])&&!isset($x137->properties[\'column\'])){$x137->properties[\'file\']=\'<image>/11_error.js\';$x137->properties[\'line\']=89;$x137->properties[\'column\']=14;$x137->attributes[\'file\']=$x137->attributes[\'line\']=$x137->attributes[\'column\']=0;}throw new JSException($x137,89,14,\'<image>/11_error.js\');}$x132=clone JS::$objectTemplate;unset($x138,$W138,$S138,$U138);$x139=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$_Error,JS::toString(\'prototype\',$global),89,10,\'<image>/11_error.js\');$x138=&$x139[0];list(,$W138,$S138,$U138)=$x139;$x133=$x138;$x132->prototype=$x133;if(!(is_object($_Error)&&isset($_Error->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x142=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),89,10,\'<image>/11_error.js\');$_TypeError=&$x142[0];list(,$WTypeError,$STypeError,$UTypeError)=$x142;$x143=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x144=$x143($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x144->class)&&$x144->class===\'Error\'&&!isset($x144->properties[\'file\'])&&!isset($x144->properties[\'line\'])&&!isset($x144->properties[\'column\'])){$x144->properties[\'file\']=\'<image>/11_error.js\';$x144->properties[\'line\']=89;$x144->properties[\'column\']=10;$x144->attributes[\'file\']=$x144->attributes[\'line\']=$x144->attributes[\'column\']=0;}throw new JSException($x144,89,10,\'<image>/11_error.js\');}$x140=$_Error->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',89,10);$x141=$x140($global,$x132,$_Error,array($_message),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x133=$x141;if(is_object($x133)&&$x133!==JS::$undefined){$x132=$x133;}$scope->properties[\'e\']=JS::$undefined;$_e=&$scope->properties[\'e\'];$Ue=FALSE;$_e=$x132;$x145=\'NotImplementedError\';$x146=JS::toString(\'name\',$global);if($_e===JS::$undefined||$_e===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x147=_89174112e855facd9d2f6198b727df5b_2($global,$scope,$scope,JS::toString(\'TypeError\',$global),90,9,\'<image>/11_error.js\');$_TypeError=&$x147[0];list(,$WTypeError,$STypeError,$UTypeError)=$x147;$x148=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x149=$x148($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x149->class)&&$x149->class===\'Error\'&&!isset($x149->properties[\'file\'])&&!isset($x149->properties[\'line\'])&&!isset($x149->properties[\'column\'])){$x149->properties[\'file\']=\'<image>/11_error.js\';$x149->properties[\'line\']=90;$x149->properties[\'column\']=9;$x149->attributes[\'file\']=$x149->attributes[\'line\']=$x149->attributes[\'column\']=0;}throw new JSException($x149,90,9,\'<image>/11_error.js\');}$_e=JS::toObject($_e,$global);unset($x150,$W150,$S150,$U150);$x151=_89174112e855facd9d2f6198b727df5b_3($global,$scope,$_e,JS::toString($x146,$global),90,9,\'<image>/11_error.js\');$x150=&$x151[0];list(,$W150,$S150,$U150)=$x151;if($U150&&(!isset($_e->extensible)||$_e->extensible)){$_e->properties[$x146]=$x150;$x150=&$_e->properties[$x146];$_e->attributes[$x146]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U150=FALSE;$W150=TRUE;}if(isset($_e->class)&&$_e->class===\'Array\'){if(isset($_e->properties[\'length\'])&&$_e->properties[\'length\']!==JS::$undefined){$x153=$_e->properties[\'length\'];}else{$x153=0;}}if(isset($S150)){$x154=$S150->call;$global->trace[++$global->trace_sp]=array(\'<image>/11_error.js\',90,9);$x155=$x154($global,$_e,$S150,array($x145),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x152=$x155;}else{if(!$U150){$x152=$x145;if($W150){$x150=$x145;}}else{$x152=JS::$undefined;}}if(isset($_e->class)&&$_e->class===\'Array\'){if(is_int(\'name\')&&\'name\'>=$_e->properties[\'length\']){$_e->properties[\'length\']=\'name\'+1;}else if($x146===\'length\'&&is_int($x145)&&$x153>$x145){for($i=$x145;$i<$x153;++$i){unset($_e->properties[$i],$_e->attributes[$i]);}}}$_e->prototype=$_NotImplementedError->properties[\'prototype\'];return$_e;return JS::$undefined;}', "\n";
function _89174112e855facd9d2f6198b727df5b_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x206 =& $scope->properties['arguments'];
$x206->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x206->properties[$i] = $args[$i];
$x206->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
unset($x207, $W207, $S207, $U207);
$x208 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, JS::toString('name', $global), 26, 17, '<image>/11_error.js');
$x207 =& $x208[0]; list(,$W207,$S207,$U207) = $x208;
$scope->properties['name'] = JS::$undefined; $_name =& $scope->properties['name'];
$Uname = FALSE;
$_name = $x207;
unset($x209, $W209, $S209, $U209);
$x210 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $leThis, JS::toString('message', $global), 26, 34, '<image>/11_error.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
$scope->properties['msg'] = JS::$undefined; $_msg =& $scope->properties['msg'];
$Umsg = FALSE;
$_msg = $x209;
$x211 = (((gettype($_name) === gettype(JS::$undefined) && $_name === JS::$undefined))|| (((is_float($_name) || is_int($_name)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_name == JS::$undefined));
if (JS::toBoolean($x211, $global)) {
$x212 = '';
if ($Uname) {$global->properties['name'] = $_name; $_name =& $global->properties['name']; }
$_name = $x212;;
};
$x213 = (((gettype($_msg) === gettype(JS::$undefined) && $_msg === JS::$undefined))|| (((is_float($_msg) || is_int($_msg)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_msg == JS::$undefined));
if (JS::toBoolean($x213, $global)) {
$x214 = '';
if ($Umsg) {$global->properties['msg'] = $_msg; $_msg =& $global->properties['msg']; }
$_msg = $x214;;
};
$x216 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
$x215 = $x216;
if (JS::toBoolean($x215, $global)) {
$x217 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
$x215 = $x217; }
if (JS::toBoolean($x215, $global)) {

return 'Error';;
};
$x218 = (((gettype($_name) === gettype('') && $_name === ''))|| (((is_float($_name) || is_int($_name)) && (is_float('') || is_int(''))) && $_name == ''));
if (JS::toBoolean($x218, $global)) {

return $_msg;;
};
$x219 = (((gettype($_msg) === gettype('') && $_msg === ''))|| (((is_float($_msg) || is_int($_msg)) && (is_float('') || is_int(''))) && $_msg == ''));
if (JS::toBoolean($x219, $global)) {

return $_name;;
};
$x222 = JS::toPrimitive($_name, $global);
$x223 = JS::toPrimitive(': ', $global);
$x220 = JS::toPrimitive((is_string($x222) || is_string($x223) ? JS::toString($x222, $global) . JS::toString($x223, $global) : JS::toNumber($x222, $global) + JS::toNumber($x223, $global)), $global);
$x221 = JS::toPrimitive($_msg, $global);
return (is_string($x220) || is_string($x221) ? JS::toString($x220, $global) . JS::toString($x221, $global) : JS::toNumber($x220, $global) + JS::toNumber($x221, $global));
;
return JS::$undefined;
}
echo 'function _89174112e855facd9d2f6198b727df5b_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x206=&$scope->properties[\'arguments\'];$x206->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x206->properties[$i]=$args[$i];$x206->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;unset($x207,$W207,$S207,$U207);$x208=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,JS::toString(\'name\',$global),26,17,\'<image>/11_error.js\');$x207=&$x208[0];list(,$W207,$S207,$U207)=$x208;$scope->properties[\'name\']=JS::$undefined;$_name=&$scope->properties[\'name\'];$Uname=FALSE;$_name=$x207;unset($x209,$W209,$S209,$U209);$x210=_89174112e855facd9d2f6198b727df5b_5($global,$scope,$leThis,JS::toString(\'message\',$global),26,34,\'<image>/11_error.js\');$x209=&$x210[0];list(,$W209,$S209,$U209)=$x210;$scope->properties[\'msg\']=JS::$undefined;$_msg=&$scope->properties[\'msg\'];$Umsg=FALSE;$_msg=$x209;$x211=(((gettype($_name)===gettype(JS::$undefined)&&$_name===JS::$undefined))||(((is_float($_name)||is_int($_name))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_name==JS::$undefined));if(JS::toBoolean($x211,$global)){$x212=\'\';if($Uname){$global->properties[\'name\']=$_name;$_name=&$global->properties[\'name\'];}$_name=$x212;}$x213=(((gettype($_msg)===gettype(JS::$undefined)&&$_msg===JS::$undefined))||(((is_float($_msg)||is_int($_msg))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_msg==JS::$undefined));if(JS::toBoolean($x213,$global)){$x214=\'\';if($Umsg){$global->properties[\'msg\']=$_msg;$_msg=&$global->properties[\'msg\'];}$_msg=$x214;}$x216=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));$x215=$x216;if(JS::toBoolean($x215,$global)){$x217=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));$x215=$x217;}if(JS::toBoolean($x215,$global)){return\'Error\';}$x218=(((gettype($_name)===gettype(\'\')&&$_name===\'\'))||(((is_float($_name)||is_int($_name))&&(is_float(\'\')||is_int(\'\')))&&$_name==\'\'));if(JS::toBoolean($x218,$global)){return$_msg;}$x219=(((gettype($_msg)===gettype(\'\')&&$_msg===\'\'))||(((is_float($_msg)||is_int($_msg))&&(is_float(\'\')||is_int(\'\')))&&$_msg==\'\'));if(JS::toBoolean($x219,$global)){return$_name;}$x222=JS::toPrimitive($_name,$global);$x223=JS::toPrimitive(\': \',$global);$x220=JS::toPrimitive((is_string($x222)||is_string($x223)?JS::toString($x222,$global).JS::toString($x223,$global):JS::toNumber($x222,$global)+JS::toNumber($x223,$global)),$global);$x221=JS::toPrimitive($_msg,$global);return(is_string($x220)||is_string($x221)?JS::toString($x220,$global).JS::toString($x221,$global):JS::toNumber($x220,$global)+JS::toNumber($x221,$global));return JS::$undefined;}', "\n";
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
$x19 = clone JS::$functionTemplate; $x19->call = '_89174112e855facd9d2f6198b727df5b_1'; $x19->parameters = array (
  0 => 'message',
); $x19->name = 'Error'; $x19->scope = $scope; $x19->properties['prototype'] = clone JS::$objectTemplate; $x19->attributes['prototype'] = JS::WRITABLE; $x19->properties['prototype']->properties['constructor'] = $x19; $x19->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x19->properties['length'] = 1; $x19->attributes['length'] = 0;
$scope->properties['Error'] = JS::$undefined; $_Error =& $scope->properties['Error'];
$UError = FALSE;
$_Error = $x19;
$x51 = clone JS::$functionTemplate; $x51->call = '_89174112e855facd9d2f6198b727df5b_4'; $x51->parameters = array (
  0 => 'message',
); $x51->name = 'RangeError'; $x51->scope = $scope; $x51->properties['prototype'] = clone JS::$objectTemplate; $x51->attributes['prototype'] = JS::WRITABLE; $x51->properties['prototype']->properties['constructor'] = $x51; $x51->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x51->properties['length'] = 1; $x51->attributes['length'] = 0;
$scope->properties['RangeError'] = JS::$undefined; $_RangeError =& $scope->properties['RangeError'];
$URangeError = FALSE;
$_RangeError = $x51;
$x77 = clone JS::$functionTemplate; $x77->call = '_89174112e855facd9d2f6198b727df5b_6'; $x77->parameters = array (
  0 => 'message',
); $x77->name = 'ReferenceError'; $x77->scope = $scope; $x77->properties['prototype'] = clone JS::$objectTemplate; $x77->attributes['prototype'] = JS::WRITABLE; $x77->properties['prototype']->properties['constructor'] = $x77; $x77->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x77->properties['length'] = 1; $x77->attributes['length'] = 0;
$scope->properties['ReferenceError'] = JS::$undefined; $_ReferenceError =& $scope->properties['ReferenceError'];
$UReferenceError = FALSE;
$_ReferenceError = $x77;
$x104 = clone JS::$functionTemplate; $x104->call = '_89174112e855facd9d2f6198b727df5b_7'; $x104->parameters = array (
  0 => 'message',
); $x104->name = 'SyntaxError'; $x104->scope = $scope; $x104->properties['prototype'] = clone JS::$objectTemplate; $x104->attributes['prototype'] = JS::WRITABLE; $x104->properties['prototype']->properties['constructor'] = $x104; $x104->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x104->properties['length'] = 1; $x104->attributes['length'] = 0;
$scope->properties['SyntaxError'] = JS::$undefined; $_SyntaxError =& $scope->properties['SyntaxError'];
$USyntaxError = FALSE;
$_SyntaxError = $x104;
$x129 = clone JS::$functionTemplate; $x129->call = '_89174112e855facd9d2f6198b727df5b_8'; $x129->parameters = array (
  0 => 'message',
); $x129->name = 'TypeError'; $x129->scope = $scope; $x129->properties['prototype'] = clone JS::$objectTemplate; $x129->attributes['prototype'] = JS::WRITABLE; $x129->properties['prototype']->properties['constructor'] = $x129; $x129->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x129->properties['length'] = 1; $x129->attributes['length'] = 0;
$scope->properties['TypeError'] = JS::$undefined; $_TypeError =& $scope->properties['TypeError'];
$UTypeError = FALSE;
$_TypeError = $x129;
$x156 = clone JS::$functionTemplate; $x156->call = '_89174112e855facd9d2f6198b727df5b_9'; $x156->parameters = array (
  0 => 'message',
); $x156->name = 'NotImplementedError'; $x156->scope = $scope; $x156->properties['prototype'] = clone JS::$objectTemplate; $x156->attributes['prototype'] = JS::WRITABLE; $x156->properties['prototype']->properties['constructor'] = $x156; $x156->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x156->properties['length'] = 1; $x156->attributes['length'] = 0;
$scope->properties['NotImplementedError'] = JS::$undefined; $_NotImplementedError =& $scope->properties['NotImplementedError'];
$UNotImplementedError = FALSE;
$_NotImplementedError = $x156;
$x157 = clone JS::$objectTemplate;
$x158 = JS::toString('prototype', $global);
if ($_Error === JS::$undefined || $_Error === NULL) {
$x159 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x160 = $x159($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x160->class) && $x160->class === 'Error' && !isset($x160->properties['file']) && !isset($x160->properties['line']) && !isset($x160->properties['column'])) {$x160->properties['file'] = '<image>/11_error.js';$x160->properties['line'] = 15;$x160->properties['column'] = 17;$x160->attributes['file'] = $x160->attributes['line'] = $x160->attributes['column'] = 0; }
throw new JSException($x160, 15, 17, '<image>/11_error.js');
}
$_Error = JS::toObject($_Error, $global);
unset($x161, $W161, $S161, $U161);
$x162 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $_Error, JS::toString($x158, $global), 15, 17, '<image>/11_error.js');
$x161 =& $x162[0]; list(,$W161,$S161,$U161) = $x162;
if ($U161 && (!isset($_Error->extensible) || $_Error->extensible)) {$_Error->properties[$x158] = $x161; $x161 =& $_Error->properties[$x158]; $_Error->attributes[$x158] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U161 = FALSE; $W161 = TRUE; }
if (isset($_Error->class) && $_Error->class === 'Array') {  if (isset($_Error->properties['length']) && $_Error->properties['length'] !== JS::$undefined) { $x164 = $_Error->properties['length']; }  else { $x164 = 0; } }
if (isset($S161)) {
$x165 = $S161->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 15, 17);
$x166 = $x165($global, $_Error, $S161, array($x157), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x163 = $x166;
} else {
if (!$U161) {$x163 = $x157;if ($W161) { $x161 = $x157; }  }
else { $x163 = JS::$undefined; }
}
if (isset($_Error->class) && $_Error->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_Error->properties['length']) { $_Error->properties['length'] = 'prototype' + 1; }else if ($x158 === 'length' && is_int($x157) && $x164 > $x157) {  for ($i = $x157; $i < $x164; ++$i) {  unset($_Error->properties[$i], $_Error->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x167 = _89174112e855facd9d2f6198b727df5b_2($global, $scope, $scope, JS::toString('Object', $global), 16, 50, '<image>/11_error.js');
$_Object =& $x167[0]; list(,$WObject,$SObject,$UObject) = $x167;
if ($UObject) {
$x168 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 16, 50);
$x169 = $x168($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/11_error.js';$x169->properties['line'] = 16;$x169->properties['column'] = 50;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 16, 50, '<image>/11_error.js');
}
$_Error->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Error->properties['prototype']->class = 'Error';
$_Error->properties['prototype']->extensible = TRUE;
unset($x170, $W170, $S170, $U170);
$x171 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 19, 6, '<image>/11_error.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
$x172 = JS::toString('constructor', $global);
if ($x170 === JS::$undefined || $x170 === NULL) {
$x173 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x174 = $x173($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x174->class) && $x174->class === 'Error' && !isset($x174->properties['file']) && !isset($x174->properties['line']) && !isset($x174->properties['column'])) {$x174->properties['file'] = '<image>/11_error.js';$x174->properties['line'] = 19;$x174->properties['column'] = 29;$x174->attributes['file'] = $x174->attributes['line'] = $x174->attributes['column'] = 0; }
throw new JSException($x174, 19, 29, '<image>/11_error.js');
}
$x170 = JS::toObject($x170, $global);
unset($x175, $W175, $S175, $U175);
$x176 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x170, JS::toString($x172, $global), 19, 29, '<image>/11_error.js');
$x175 =& $x176[0]; list(,$W175,$S175,$U175) = $x176;
if ($U175 && (!isset($x170->extensible) || $x170->extensible)) {$x170->properties[$x172] = $x175; $x175 =& $x170->properties[$x172]; $x170->attributes[$x172] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U175 = FALSE; $W175 = TRUE; }
if (isset($x170->class) && $x170->class === 'Array') {  if (isset($x170->properties['length']) && $x170->properties['length'] !== JS::$undefined) { $x178 = $x170->properties['length']; }  else { $x178 = 0; } }
if (isset($S175)) {
$x179 = $S175->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 19, 29);
$x180 = $x179($global, $x170, $S175, array($_Error), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x177 = $x180;
} else {
if (!$U175) {$x177 = $_Error;if ($W175) { $x175 = $_Error; }  }
else { $x177 = JS::$undefined; }
}
if (isset($x170->class) && $x170->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x170->properties['length']) { $x170->properties['length'] = 'constructor' + 1; }else if ($x172 === 'length' && is_int($_Error) && $x178 > $_Error) {  for ($i = $_Error; $i < $x178; ++$i) {  unset($x170->properties[$i], $x170->attributes[$i]); }}};
$x181 = 'Error';
unset($x182, $W182, $S182, $U182);
$x183 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 21, 6, '<image>/11_error.js');
$x182 =& $x183[0]; list(,$W182,$S182,$U182) = $x183;
$x184 = JS::toString('name', $global);
if ($x182 === JS::$undefined || $x182 === NULL) {
$x185 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x186 = $x185($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x186->class) && $x186->class === 'Error' && !isset($x186->properties['file']) && !isset($x186->properties['line']) && !isset($x186->properties['column'])) {$x186->properties['file'] = '<image>/11_error.js';$x186->properties['line'] = 21;$x186->properties['column'] = 22;$x186->attributes['file'] = $x186->attributes['line'] = $x186->attributes['column'] = 0; }
throw new JSException($x186, 21, 22, '<image>/11_error.js');
}
$x182 = JS::toObject($x182, $global);
unset($x187, $W187, $S187, $U187);
$x188 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x182, JS::toString($x184, $global), 21, 22, '<image>/11_error.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
if ($U187 && (!isset($x182->extensible) || $x182->extensible)) {$x182->properties[$x184] = $x187; $x187 =& $x182->properties[$x184]; $x182->attributes[$x184] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U187 = FALSE; $W187 = TRUE; }
if (isset($x182->class) && $x182->class === 'Array') {  if (isset($x182->properties['length']) && $x182->properties['length'] !== JS::$undefined) { $x190 = $x182->properties['length']; }  else { $x190 = 0; } }
if (isset($S187)) {
$x191 = $S187->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 21, 22);
$x192 = $x191($global, $x182, $S187, array($x181), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x189 = $x192;
} else {
if (!$U187) {$x189 = $x181;if ($W187) { $x187 = $x181; }  }
else { $x189 = JS::$undefined; }
}
if (isset($x182->class) && $x182->class === 'Array') {if (is_int('name') && 'name' >= $x182->properties['length']) { $x182->properties['length'] = 'name' + 1; }else if ($x184 === 'length' && is_int($x181) && $x190 > $x181) {  for ($i = $x181; $i < $x190; ++$i) {  unset($x182->properties[$i], $x182->attributes[$i]); }}};
$x193 = '';
unset($x194, $W194, $S194, $U194);
$x195 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 23, 6, '<image>/11_error.js');
$x194 =& $x195[0]; list(,$W194,$S194,$U194) = $x195;
$x196 = JS::toString('message', $global);
if ($x194 === JS::$undefined || $x194 === NULL) {
$x197 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x198 = $x197($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x198->class) && $x198->class === 'Error' && !isset($x198->properties['file']) && !isset($x198->properties['line']) && !isset($x198->properties['column'])) {$x198->properties['file'] = '<image>/11_error.js';$x198->properties['line'] = 23;$x198->properties['column'] = 25;$x198->attributes['file'] = $x198->attributes['line'] = $x198->attributes['column'] = 0; }
throw new JSException($x198, 23, 25, '<image>/11_error.js');
}
$x194 = JS::toObject($x194, $global);
unset($x199, $W199, $S199, $U199);
$x200 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x194, JS::toString($x196, $global), 23, 25, '<image>/11_error.js');
$x199 =& $x200[0]; list(,$W199,$S199,$U199) = $x200;
if ($U199 && (!isset($x194->extensible) || $x194->extensible)) {$x194->properties[$x196] = $x199; $x199 =& $x194->properties[$x196]; $x194->attributes[$x196] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U199 = FALSE; $W199 = TRUE; }
if (isset($x194->class) && $x194->class === 'Array') {  if (isset($x194->properties['length']) && $x194->properties['length'] !== JS::$undefined) { $x202 = $x194->properties['length']; }  else { $x202 = 0; } }
if (isset($S199)) {
$x203 = $S199->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 23, 25);
$x204 = $x203($global, $x194, $S199, array($x193), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x201 = $x204;
} else {
if (!$U199) {$x201 = $x193;if ($W199) { $x199 = $x193; }  }
else { $x201 = JS::$undefined; }
}
if (isset($x194->class) && $x194->class === 'Array') {if (is_int('message') && 'message' >= $x194->properties['length']) { $x194->properties['length'] = 'message' + 1; }else if ($x196 === 'length' && is_int($x193) && $x202 > $x193) {  for ($i = $x193; $i < $x202; ++$i) {  unset($x194->properties[$i], $x194->attributes[$i]); }}};
$x224 = clone JS::$functionTemplate; $x224->call = '_89174112e855facd9d2f6198b727df5b_10'; $x224->parameters = array (
); $x224->scope = $scope; $x224->properties['prototype'] = clone JS::$objectTemplate; $x224->attributes['prototype'] = JS::WRITABLE; $x224->properties['prototype']->properties['constructor'] = $x224; $x224->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x224->properties['length'] = 0; $x224->attributes['length'] = 0;
unset($x225, $W225, $S225, $U225);
$x226 = _89174112e855facd9d2f6198b727df5b_5($global, $scope, $_Error, JS::toString('prototype', $global), 25, 6, '<image>/11_error.js');
$x225 =& $x226[0]; list(,$W225,$S225,$U225) = $x226;
$x227 = JS::toString('toString', $global);
if ($x225 === JS::$undefined || $x225 === NULL) {
$x228 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x229 = $x228($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x229->class) && $x229->class === 'Error' && !isset($x229->properties['file']) && !isset($x229->properties['line']) && !isset($x229->properties['column'])) {$x229->properties['file'] = '<image>/11_error.js';$x229->properties['line'] = 25;$x229->properties['column'] = 26;$x229->attributes['file'] = $x229->attributes['line'] = $x229->attributes['column'] = 0; }
throw new JSException($x229, 25, 26, '<image>/11_error.js');
}
$x225 = JS::toObject($x225, $global);
unset($x230, $W230, $S230, $U230);
$x231 = _89174112e855facd9d2f6198b727df5b_3($global, $scope, $x225, JS::toString($x227, $global), 25, 26, '<image>/11_error.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
if ($U230 && (!isset($x225->extensible) || $x225->extensible)) {$x225->properties[$x227] = $x230; $x230 =& $x225->properties[$x227]; $x225->attributes[$x227] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U230 = FALSE; $W230 = TRUE; }
if (isset($x225->class) && $x225->class === 'Array') {  if (isset($x225->properties['length']) && $x225->properties['length'] !== JS::$undefined) { $x233 = $x225->properties['length']; }  else { $x233 = 0; } }
if (isset($S230)) {
$x234 = $S230->call;
$global->trace[++$global->trace_sp] = array('<image>/11_error.js', 25, 26);
$x235 = $x234($global, $x225, $S230, array($x224), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x232 = $x235;
} else {
if (!$U230) {$x232 = $x224;if ($W230) { $x230 = $x224; }  }
else { $x232 = JS::$undefined; }
}
if (isset($x225->class) && $x225->class === 'Array') {if (is_int('toString') && 'toString' >= $x225->properties['length']) { $x225->properties['length'] = 'toString' + 1; }else if ($x227 === 'length' && is_int($x224) && $x233 > $x224) {  for ($i = $x224; $i < $x233; ++$i) {  unset($x225->properties[$i], $x225->attributes[$i]); }}};
$_RangeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_ReferenceError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_SyntaxError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_TypeError->properties['prototype']->prototype =$_Error->properties['prototype'];
$_NotImplementedError->properties['prototype']->prototype =$_Error->properties['prototype'];
;
return JS::$undefined;
}
