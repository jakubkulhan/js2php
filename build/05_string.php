function _465e5538fcb402e27559db40bec8addd_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['value'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_value =& $scope->properties['value'];
$Uvalue = FALSE;
$scope->properties['String'] = $fn;
$_String =& $scope->properties['String'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = (((gettype($leThis) === gettype($global) && $leThis === $global))|| (((is_float($leThis) || is_int($leThis)) && (is_float($global) || is_int($global))) && $leThis == $global));
if (JS::toBoolean($x2, $global)) {

return JS::toString($_value, $global);;
};
$x3 = clone JS::$objectTemplate;
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = $x3;
$_s->prototype =$_String->properties['prototype'];
$_s->class = 'String';
$_s->extensible = true;
$_s->value = JS::toString($_value, $global);
return $_s;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'String\']=$fn;$_String=&$scope->properties[\'String\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){return JS::toString($_value,$global);}$x3=clone JS::$objectTemplate;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=$x3;$_s->prototype=$_String->properties[\'prototype\'];$_s->class=\'String\';$_s->extensible=true;$_s->value=JS::toString($_value,$global);return$_s;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_3($global, $scope, $base, $id, $line, $column, $file) {
$Warguments = $Sarguments = $Uarguments = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_arguments =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x8 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x9 = $x8($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_arguments = $x9; }
else { $_arguments = JS::$undefined; $Uarguments = TRUE; }
return array(&$_arguments, $Warguments, $Sarguments, $Uarguments);
}
echo 'function _465e5538fcb402e27559db40bec8addd_3($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x8=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x9=$x8($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x9;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _465e5538fcb402e27559db40bec8addd_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x15 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x15[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x15;
$x16 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x17 = $x16($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x17->class) && $x17->class === 'Error') {$x17->properties['file'] = $file;$x17->properties['line'] = $line;$x17->properties['column'] = $column;$x17->attributes['file'] = $x17->attributes['line'] = $x17->attributes['column'] = 0; }
throw new JSException($x17, $line, $column, $file);
}
$W14 = $S14 = $U14 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x14 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x18 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x19 = $x18($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x14 = $x19; }
else { $x14 = JS::$undefined; $U14 = TRUE; }
return array(&$x14, $W14, $S14, $U14);
}
echo 'function _465e5538fcb402e27559db40bec8addd_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
function _465e5538fcb402e27559db40bec8addd_2($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['c'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = '';
for ($x7 = 0;; ++$x7) {
if ($x7 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x10 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'arguments', 19, 22, '<image>/05_string.js');
$_arguments =& $x10[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x10;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x11 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 19, 22, '<image>/05_string.js');
$_ReferenceError =& $x11[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x11;
$x12 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 19, 22);
$x13 = $x12($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error') {$x13->properties['file'] = '<image>/05_string.js';$x13->properties['line'] = 19;$x13->properties['column'] = 22;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 19, 22, '<image>/05_string.js');
}
unset($x14, $W14, $S14, $U14);
$x20 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, (string) 'length', 19, 31, '<image>/05_string.js');
$x14 =& $x20[0]; list(,$W14,$S14,$U14) = $x20;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x14;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x7 !== 0) {
$x21 = ++$_i;
}
$x22 = JS::toPrimitive($_i, $global);
$x23 = JS::toPrimitive($_l, $global);
$x24 = (is_string($x22) && is_string($x23) ? strcmp($x22, $x23) < 0 : (!is_nan($x25 = JS::toNumber($x22, $global)) && !is_nan($x26 = JS::toNumber($x23, $global)) && $x25 < $x26));
if (!JS::toBoolean($x24, $global)) { break; }

unset($x27, $W27, $S27, $U27);
$x28 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, (string) $_i, 20, 18, '<image>/05_string.js');
$x27 =& $x28[0]; list(,$W27,$S27,$U27) = $x28;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x27;
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$x29 = JS::toPrimitive($_s, $global);
$x30 = JS::toPrimitive(chr(JS::toNumber($_arg, $global)), $global);
$_s = (is_string($x29) || is_string($x30) ? JS::toString($x29, $global) . JS::toString($x30, $global) : JS::toNumber($x29, $global) + JS::toNumber($x30, $global));;
};
return $_s;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'c\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=\'\';for($x7=0;;++$x7){if($x7===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x10=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'arguments\',19,22,\'<image>/05_string.js\');$_arguments=&$x10[0];list(,$Warguments,$Sarguments,$Uarguments)=$x10;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x11=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',19,22,\'<image>/05_string.js\');$_ReferenceError=&$x11[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x11;$x12=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',19,22);$x13=$x12($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'){$x13->properties[\'file\']=\'<image>/05_string.js\';$x13->properties[\'line\']=19;$x13->properties[\'column\']=22;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,19,22,\'<image>/05_string.js\');}unset($x14,$W14,$S14,$U14);$x20=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)\'length\',19,31,\'<image>/05_string.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x14;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x7!==0){$x21=++$_i;}$x22=JS::toPrimitive($_i,$global);$x23=JS::toPrimitive($_l,$global);$x24=(is_string($x22)&&is_string($x23)?strcmp($x22,$x23)<0:(!is_nan($x25=JS::toNumber($x22,$global))&&!is_nan($x26=JS::toNumber($x23,$global))&&$x25<$x26));if(!JS::toBoolean($x24,$global)){break;}unset($x27,$W27,$S27,$U27);$x28=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)$_i,20,18,\'<image>/05_string.js\');$x27=&$x28[0];list(,$W27,$S27,$U27)=$x28;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x27;if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$x29=JS::toPrimitive($_s,$global);$x30=JS::toPrimitive(chr(JS::toNumber($_arg,$global)),$global);$_s=(is_string($x29)||is_string($x30)?JS::toString($x29,$global).JS::toString($x30,$global):JS::toNumber($x29,$global)+JS::toNumber($x30,$global));}return$_s;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x36 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x36[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x36;
$x37 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x38 = $x37($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x38->class) && $x38->class === 'Error') {$x38->properties['file'] = $file;$x38->properties['line'] = $line;$x38->properties['column'] = $column;$x38->attributes['file'] = $x38->attributes['line'] = $x38->attributes['column'] = 0; }
throw new JSException($x38, $line, $column, $file);
}
$W35 = $S35 = $U35 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x35 =& $lookup->properties[$id]; $W35 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S35 = $lookup->setters[$id]; }
else { $x35 = JS::$undefined; $U35 = TRUE; }
return array(&$x35, $W35, $S35, $U35);
}
echo 'function _465e5538fcb402e27559db40bec8addd_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x36=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x36[0];list(,$WTypeError,$STypeError,$UTypeError)=$x36;$x37=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x38=$x37($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x38->class)&&$x38->class===\'Error\'){$x38->properties[\'file\']=$file;$x38->properties[\'line\']=$line;$x38->properties[\'column\']=$column;$x38->attributes[\'file\']=$x38->attributes[\'line\']=$x38->attributes[\'column\']=0;}throw new JSException($x38,$line,$column,$file);}$W35=$S35=$U35=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x35=&$lookup->properties[$id];$W35=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S35=$lookup->setters[$id];}else{$x35=JS::$undefined;$U35=TRUE;}return array(&$x35,$W35,$S35,$U35);}', "\n";
function _465e5538fcb402e27559db40bec8addd_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x67 =& $scope->properties['arguments'];
$x67->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x67->properties[$i] = $args[$i];
$x67->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'String', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x70 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 35, 13, '<image>/05_string.js');
$_TypeError =& $x70[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x70;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x71 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 35, 13, '<image>/05_string.js');
$_ReferenceError =& $x71[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x71;
$x72 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 13);
$x73 = $x72($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error') {$x73->properties['file'] = '<image>/05_string.js';$x73->properties['line'] = 35;$x73->properties['column'] = 13;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 35, 13, '<image>/05_string.js');
}
$x68 = clone JS::$objectTemplate;
unset($x74, $W74, $S74, $U74);
$x75 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_TypeError, (string) 'prototype', 35, 9, '<image>/05_string.js');
$x74 =& $x75[0]; list(,$W74,$S74,$U74) = $x75;
$x69 = $x74;
$x68->prototype = $x69;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x78 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x79 = $x78($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x79->class) && $x79->class === 'Error') {$x79->properties['file'] = '<image>/05_string.js';$x79->properties['line'] = 35;$x79->properties['column'] = 9;$x79->attributes['file'] = $x79->attributes['line'] = $x79->attributes['column'] = 0; }
throw new JSException($x79, 35, 9, '<image>/05_string.js');
}
$x76 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x77 = $x76($global, $x68, $_TypeError, array('String.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x69 = $x77;
if (is_object($x69) && $x69 !== JS::$undefined) { $x68 = $x69; }
if (isset($x68->class) && $x68->class === 'Error') {$x68->properties['file'] = '<image>/05_string.js';$x68->properties['line'] = 35;$x68->properties['column'] = 3;$x68->attributes['file'] = $x68->attributes['line'] = $x68->attributes['column'] = 0; }
throw new JSException($x68, 35, 3, '<image>/05_string.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x67=&$scope->properties[\'arguments\'];$x67->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x67->properties[$i]=$args[$i];$x67->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'String\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',35,13,\'<image>/05_string.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x71=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',35,13,\'<image>/05_string.js\');$_ReferenceError=&$x71[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x71;$x72=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,13);$x73=$x72($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'){$x73->properties[\'file\']=\'<image>/05_string.js\';$x73->properties[\'line\']=35;$x73->properties[\'column\']=13;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,35,13,\'<image>/05_string.js\');}$x68=clone JS::$objectTemplate;unset($x74,$W74,$S74,$U74);$x75=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_TypeError,(string)\'prototype\',35,9,\'<image>/05_string.js\');$x74=&$x75[0];list(,$W74,$S74,$U74)=$x75;$x69=$x74;$x68->prototype=$x69;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x78=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x79=$x78($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'){$x79->properties[\'file\']=\'<image>/05_string.js\';$x79->properties[\'line\']=35;$x79->properties[\'column\']=9;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,35,9,\'<image>/05_string.js\');}$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x77=$x76($global,$x68,$_TypeError,array(\'String.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x69=$x77;if(is_object($x69)&&$x69!==JS::$undefined){$x68=$x69;}if(isset($x68->class)&&$x68->class===\'Error\'){$x68->properties[\'file\']=\'<image>/05_string.js\';$x68->properties[\'line\']=35;$x68->properties[\'column\']=3;$x68->attributes[\'file\']=$x68->attributes[\'line\']=$x68->attributes[\'column\']=0;}throw new JSException($x68,35,3,\'<image>/05_string.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_7($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = JS::toNumber($_pos, $global);
$x108 = JS::toPrimitive($_pos, $global);
$x109 = JS::toPrimitive(0, $global);
$x110 = (is_string($x108) && is_string($x109) ? strcmp($x108, $x109) < 0 : (!is_nan($x111 = JS::toNumber($x108, $global)) && !is_nan($x112 = JS::toNumber($x109, $global)) && $x111 < $x112));
$x107 = $x110;
if (!JS::toBoolean($x107, $global)) {
unset($x116, $W116, $S116, $U116);
$x117 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 46, 28, '<image>/05_string.js');
$x116 =& $x117[0]; list(,$W116,$S116,$U116) = $x117;
$x113 = JS::toPrimitive($_pos, $global);
$x114 = JS::toPrimitive($x116, $global);
$x115 = !(is_string($x113) && is_string($x114) ? strcmp($x113, $x114) < 0 : (!is_nan($x118 = JS::toNumber($x113, $global)) && !is_nan($x119 = JS::toNumber($x114, $global)) && $x118 < $x119));
$x107 = $x115; }
if (JS::toBoolean($x107, $global)) {

return '';;
};
return (string) substr($leThis->value,$_pos, 1);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x106=&$scope->properties[\'arguments\'];$x106->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x106->properties[$i]=$args[$i];$x106->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=JS::toNumber($_pos,$global);$x108=JS::toPrimitive($_pos,$global);$x109=JS::toPrimitive(0,$global);$x110=(is_string($x108)&&is_string($x109)?strcmp($x108,$x109)<0:(!is_nan($x111=JS::toNumber($x108,$global))&&!is_nan($x112=JS::toNumber($x109,$global))&&$x111<$x112));$x107=$x110;if(!JS::toBoolean($x107,$global)){unset($x116,$W116,$S116,$U116);$x117=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',46,28,\'<image>/05_string.js\');$x116=&$x117[0];list(,$W116,$S116,$U116)=$x117;$x113=JS::toPrimitive($_pos,$global);$x114=JS::toPrimitive($x116,$global);$x115=!(is_string($x113)&&is_string($x114)?strcmp($x113,$x114)<0:(!is_nan($x118=JS::toNumber($x113,$global))&&!is_nan($x119=JS::toNumber($x114,$global))&&$x118<$x119));$x107=$x115;}if(JS::toBoolean($x107,$global)){return\'\';}return(string)substr($leThis->value,$_pos,1);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x132 =& $scope->properties['arguments'];
$x132->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x132->properties[$i] = $args[$i];
$x132->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = JS::toNumber($_pos, $global);
$x134 = JS::toPrimitive($_pos, $global);
$x135 = JS::toPrimitive(0, $global);
$x136 = (is_string($x134) && is_string($x135) ? strcmp($x134, $x135) < 0 : (!is_nan($x137 = JS::toNumber($x134, $global)) && !is_nan($x138 = JS::toNumber($x135, $global)) && $x137 < $x138));
$x133 = $x136;
if (!JS::toBoolean($x133, $global)) {
unset($x142, $W142, $S142, $U142);
$x143 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 56, 28, '<image>/05_string.js');
$x142 =& $x143[0]; list(,$W142,$S142,$U142) = $x143;
$x139 = JS::toPrimitive($_pos, $global);
$x140 = JS::toPrimitive($x142, $global);
$x141 = !(is_string($x139) && is_string($x140) ? strcmp($x139, $x140) < 0 : (!is_nan($x144 = JS::toNumber($x139, $global)) && !is_nan($x145 = JS::toNumber($x140, $global)) && $x144 < $x145));
$x133 = $x141; }
if (JS::toBoolean($x133, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x146 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'NaN', 57, 10, '<image>/05_string.js');
$_NaN =& $x146[0]; list(,$WNaN,$SNaN,$UNaN) = $x146;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x147 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 57, 10, '<image>/05_string.js');
$_ReferenceError =& $x147[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x147;
$x148 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 57, 10);
$x149 = $x148($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x149->class) && $x149->class === 'Error') {$x149->properties['file'] = '<image>/05_string.js';$x149->properties['line'] = 57;$x149->properties['column'] = 10;$x149->attributes['file'] = $x149->attributes['line'] = $x149->attributes['column'] = 0; }
throw new JSException($x149, 57, 10, '<image>/05_string.js');
}
return $_NaN;;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x151 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 60, 21, '<image>/05_string.js');
$_TypeError =& $x151[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x151;
$x152 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x153 = $x152($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x153->class) && $x153->class === 'Error') {$x153->properties['file'] = '<image>/05_string.js';$x153->properties['line'] = 60;$x153->properties['column'] = 21;$x153->attributes['file'] = $x153->attributes['line'] = $x153->attributes['column'] = 0; }
throw new JSException($x153, 60, 21, '<image>/05_string.js');
}
$x150 = JS::toObject($leThis, $global);
unset($x154, $W154, $S154, $U154);
$x155 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x150, (string) 'charAt', 60, 21, '<image>/05_string.js');
$x154 =& $x155[0]; list(,$W154,$S154,$U154) = $x155;
if (!(is_object($x154) && isset($x154->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x158 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 60, 21, '<image>/05_string.js');
$_TypeError =& $x158[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x158;
$x159 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x160 = $x159($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x160->class) && $x160->class === 'Error') {$x160->properties['file'] = '<image>/05_string.js';$x160->properties['line'] = 60;$x160->properties['column'] = 21;$x160->attributes['file'] = $x160->attributes['line'] = $x160->attributes['column'] = 0; }
throw new JSException($x160, 60, 21, '<image>/05_string.js');
}
$x156 = $x154->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x157 = $x156($global, $x150, $x154, array($_pos), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['c'] = JS::$undefined; $_c =& $scope->properties['c'];
$Uc = FALSE;
$_c = $x157;
return ord($_c);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x132=&$scope->properties[\'arguments\'];$x132->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x132->properties[$i]=$args[$i];$x132->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=JS::toNumber($_pos,$global);$x134=JS::toPrimitive($_pos,$global);$x135=JS::toPrimitive(0,$global);$x136=(is_string($x134)&&is_string($x135)?strcmp($x134,$x135)<0:(!is_nan($x137=JS::toNumber($x134,$global))&&!is_nan($x138=JS::toNumber($x135,$global))&&$x137<$x138));$x133=$x136;if(!JS::toBoolean($x133,$global)){unset($x142,$W142,$S142,$U142);$x143=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',56,28,\'<image>/05_string.js\');$x142=&$x143[0];list(,$W142,$S142,$U142)=$x143;$x139=JS::toPrimitive($_pos,$global);$x140=JS::toPrimitive($x142,$global);$x141=!(is_string($x139)&&is_string($x140)?strcmp($x139,$x140)<0:(!is_nan($x144=JS::toNumber($x139,$global))&&!is_nan($x145=JS::toNumber($x140,$global))&&$x144<$x145));$x133=$x141;}if(JS::toBoolean($x133,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x146=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'NaN\',57,10,\'<image>/05_string.js\');$_NaN=&$x146[0];list(,$WNaN,$SNaN,$UNaN)=$x146;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x147=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',57,10,\'<image>/05_string.js\');$_ReferenceError=&$x147[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x147;$x148=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',57,10);$x149=$x148($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x149->class)&&$x149->class===\'Error\'){$x149->properties[\'file\']=\'<image>/05_string.js\';$x149->properties[\'line\']=57;$x149->properties[\'column\']=10;$x149->attributes[\'file\']=$x149->attributes[\'line\']=$x149->attributes[\'column\']=0;}throw new JSException($x149,57,10,\'<image>/05_string.js\');}return$_NaN;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x151=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',60,21,\'<image>/05_string.js\');$_TypeError=&$x151[0];list(,$WTypeError,$STypeError,$UTypeError)=$x151;$x152=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x153=$x152($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x153->class)&&$x153->class===\'Error\'){$x153->properties[\'file\']=\'<image>/05_string.js\';$x153->properties[\'line\']=60;$x153->properties[\'column\']=21;$x153->attributes[\'file\']=$x153->attributes[\'line\']=$x153->attributes[\'column\']=0;}throw new JSException($x153,60,21,\'<image>/05_string.js\');}$x150=JS::toObject($leThis,$global);unset($x154,$W154,$S154,$U154);$x155=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x150,(string)\'charAt\',60,21,\'<image>/05_string.js\');$x154=&$x155[0];list(,$W154,$S154,$U154)=$x155;if(!(is_object($x154)&&isset($x154->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x158=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',60,21,\'<image>/05_string.js\');$_TypeError=&$x158[0];list(,$WTypeError,$STypeError,$UTypeError)=$x158;$x159=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x160=$x159($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x160->class)&&$x160->class===\'Error\'){$x160->properties[\'file\']=\'<image>/05_string.js\';$x160->properties[\'line\']=60;$x160->properties[\'column\']=21;$x160->attributes[\'file\']=$x160->attributes[\'line\']=$x160->attributes[\'column\']=0;}throw new JSException($x160,60,21,\'<image>/05_string.js\');}$x156=$x154->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x157=$x156($global,$x150,$x154,array($_pos),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=$x157;return ord($_c);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x173 =& $scope->properties['arguments'];
$x173->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x173->properties[$i] = $args[$i];
$x173->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['returnString'] = JS::$undefined; $_returnString =& $scope->properties['returnString'];
$UreturnString = FALSE;
$_returnString = $leThis->value;
for ($x174 = 0;; ++$x174) {
if ($x174 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x175 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'arguments', 68, 22, '<image>/05_string.js');
$_arguments =& $x175[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x175;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x176 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 68, 22, '<image>/05_string.js');
$_ReferenceError =& $x176[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x176;
$x177 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 68, 22);
$x178 = $x177($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error') {$x178->properties['file'] = '<image>/05_string.js';$x178->properties['line'] = 68;$x178->properties['column'] = 22;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 68, 22, '<image>/05_string.js');
}
unset($x179, $W179, $S179, $U179);
$x180 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, (string) 'length', 68, 31, '<image>/05_string.js');
$x179 =& $x180[0]; list(,$W179,$S179,$U179) = $x180;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x179;
}
if ($x174 !== 0) {
$x181 = ++$_i;
}
$x182 = JS::toPrimitive($_i, $global);
$x183 = JS::toPrimitive($_l, $global);
$x184 = (is_string($x182) && is_string($x183) ? strcmp($x182, $x183) < 0 : (!is_nan($x185 = JS::toNumber($x182, $global)) && !is_nan($x186 = JS::toNumber($x183, $global)) && $x185 < $x186));
if (!JS::toBoolean($x184, $global)) { break; }

unset($x187, $W187, $S187, $U187);
$x188 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, (string) $_i, 69, 28, '<image>/05_string.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
if ($UreturnString) {$global->properties['returnString'] = $_returnString; $_returnString =& $global->properties['returnString']; }
$x189 = JS::toPrimitive($_returnString, $global);
$x190 = JS::toPrimitive($x187, $global);
$_returnString = (is_string($x189) || is_string($x190) ? JS::toString($x189, $global) . JS::toString($x190, $global) : JS::toNumber($x189, $global) + JS::toNumber($x190, $global));;
};
return $_returnString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x173=&$scope->properties[\'arguments\'];$x173->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x173->properties[$i]=$args[$i];$x173->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'returnString\']=JS::$undefined;$_returnString=&$scope->properties[\'returnString\'];$UreturnString=FALSE;$_returnString=$leThis->value;for($x174=0;;++$x174){if($x174===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x175=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'arguments\',68,22,\'<image>/05_string.js\');$_arguments=&$x175[0];list(,$Warguments,$Sarguments,$Uarguments)=$x175;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x176=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',68,22,\'<image>/05_string.js\');$_ReferenceError=&$x176[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x176;$x177=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',68,22);$x178=$x177($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x178->class)&&$x178->class===\'Error\'){$x178->properties[\'file\']=\'<image>/05_string.js\';$x178->properties[\'line\']=68;$x178->properties[\'column\']=22;$x178->attributes[\'file\']=$x178->attributes[\'line\']=$x178->attributes[\'column\']=0;}throw new JSException($x178,68,22,\'<image>/05_string.js\');}unset($x179,$W179,$S179,$U179);$x180=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)\'length\',68,31,\'<image>/05_string.js\');$x179=&$x180[0];list(,$W179,$S179,$U179)=$x180;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x179;}if($x174!==0){$x181=++$_i;}$x182=JS::toPrimitive($_i,$global);$x183=JS::toPrimitive($_l,$global);$x184=(is_string($x182)&&is_string($x183)?strcmp($x182,$x183)<0:(!is_nan($x185=JS::toNumber($x182,$global))&&!is_nan($x186=JS::toNumber($x183,$global))&&$x185<$x186));if(!JS::toBoolean($x184,$global)){break;}unset($x187,$W187,$S187,$U187);$x188=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)$_i,69,28,\'<image>/05_string.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;if($UreturnString){$global->properties[\'returnString\']=$_returnString;$_returnString=&$global->properties[\'returnString\'];}$x189=JS::toPrimitive($_returnString,$global);$x190=JS::toPrimitive($x187,$global);$_returnString=(is_string($x189)||is_string($x190)?JS::toString($x189,$global).JS::toString($x190,$global):JS::toNumber($x189,$global)+JS::toNumber($x190,$global));}return$_returnString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_10($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x204 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x204, $global)) {
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = 0;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x205 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 80, 15, '<image>/05_string.js');
$_Math =& $x205[0]; list(,$WMath,$SMath,$UMath) = $x205;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x206 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 80, 15, '<image>/05_string.js');
$_ReferenceError =& $x206[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x206;
$x207 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 15);
$x208 = $x207($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x208->class) && $x208->class === 'Error') {$x208->properties['file'] = '<image>/05_string.js';$x208->properties['line'] = 80;$x208->properties['column'] = 15;$x208->attributes['file'] = $x208->attributes['line'] = $x208->attributes['column'] = 0; }
throw new JSException($x208, 80, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x210 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 23, '<image>/05_string.js');
$_TypeError =& $x210[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x210;
$x211 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x212 = $x211($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x212->class) && $x212->class === 'Error') {$x212->properties['file'] = '<image>/05_string.js';$x212->properties['line'] = 80;$x212->properties['column'] = 23;$x212->attributes['file'] = $x212->attributes['line'] = $x212->attributes['column'] = 0; }
throw new JSException($x212, 80, 23, '<image>/05_string.js');
}
$x209 = JS::toObject($_Math, $global);
unset($x213, $W213, $S213, $U213);
$x214 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x209, (string) 'min', 80, 23, '<image>/05_string.js');
$x213 =& $x214[0]; list(,$W213,$S213,$U213) = $x214;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x216 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 32, '<image>/05_string.js');
$_TypeError =& $x216[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x216;
$x217 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x218 = $x217($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x218->class) && $x218->class === 'Error') {$x218->properties['file'] = '<image>/05_string.js';$x218->properties['line'] = 80;$x218->properties['column'] = 32;$x218->attributes['file'] = $x218->attributes['line'] = $x218->attributes['column'] = 0; }
throw new JSException($x218, 80, 32, '<image>/05_string.js');
}
$x215 = JS::toObject($_Math, $global);
unset($x219, $W219, $S219, $U219);
$x220 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x215, (string) 'max', 80, 32, '<image>/05_string.js');
$x219 =& $x220[0]; list(,$W219,$S219,$U219) = $x220;
if (!(is_object($x219) && isset($x219->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x223 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 32, '<image>/05_string.js');
$_TypeError =& $x223[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x223;
$x224 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x225 = $x224($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x225->class) && $x225->class === 'Error') {$x225->properties['file'] = '<image>/05_string.js';$x225->properties['line'] = 80;$x225->properties['column'] = 32;$x225->attributes['file'] = $x225->attributes['line'] = $x225->attributes['column'] = 0; }
throw new JSException($x225, 80, 32, '<image>/05_string.js');
}
$x221 = $x219->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x222 = $x221($global, $x215, $x219, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x213) && isset($x213->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x228 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 23, '<image>/05_string.js');
$_TypeError =& $x228[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x228;
$x229 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x230 = $x229($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x230->class) && $x230->class === 'Error') {$x230->properties['file'] = '<image>/05_string.js';$x230->properties['line'] = 80;$x230->properties['column'] = 23;$x230->attributes['file'] = $x230->attributes['line'] = $x230->attributes['column'] = 0; }
throw new JSException($x230, 80, 23, '<image>/05_string.js');
}
$x226 = $x213->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x227 = $x226($global, $x209, $x213, array($x222, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x227;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strpos($leThis->value, JS::toString($_search, $global),$_offset);
$x231 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x231, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x203=&$scope->properties[\'arguments\'];$x203->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x203->properties[$i]=$args[$i];$x203->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x204=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x204,$global)){if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=0;}unset($_Math,$WMath,$SMath,$UMath);$x205=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',80,15,\'<image>/05_string.js\');$_Math=&$x205[0];list(,$WMath,$SMath,$UMath)=$x205;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x206=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',80,15,\'<image>/05_string.js\');$_ReferenceError=&$x206[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x206;$x207=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,15);$x208=$x207($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x208->class)&&$x208->class===\'Error\'){$x208->properties[\'file\']=\'<image>/05_string.js\';$x208->properties[\'line\']=80;$x208->properties[\'column\']=15;$x208->attributes[\'file\']=$x208->attributes[\'line\']=$x208->attributes[\'column\']=0;}throw new JSException($x208,80,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x210=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,23,\'<image>/05_string.js\');$_TypeError=&$x210[0];list(,$WTypeError,$STypeError,$UTypeError)=$x210;$x211=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x212=$x211($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x212->class)&&$x212->class===\'Error\'){$x212->properties[\'file\']=\'<image>/05_string.js\';$x212->properties[\'line\']=80;$x212->properties[\'column\']=23;$x212->attributes[\'file\']=$x212->attributes[\'line\']=$x212->attributes[\'column\']=0;}throw new JSException($x212,80,23,\'<image>/05_string.js\');}$x209=JS::toObject($_Math,$global);unset($x213,$W213,$S213,$U213);$x214=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x209,(string)\'min\',80,23,\'<image>/05_string.js\');$x213=&$x214[0];list(,$W213,$S213,$U213)=$x214;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x216=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,32,\'<image>/05_string.js\');$_TypeError=&$x216[0];list(,$WTypeError,$STypeError,$UTypeError)=$x216;$x217=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x218=$x217($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x218->class)&&$x218->class===\'Error\'){$x218->properties[\'file\']=\'<image>/05_string.js\';$x218->properties[\'line\']=80;$x218->properties[\'column\']=32;$x218->attributes[\'file\']=$x218->attributes[\'line\']=$x218->attributes[\'column\']=0;}throw new JSException($x218,80,32,\'<image>/05_string.js\');}$x215=JS::toObject($_Math,$global);unset($x219,$W219,$S219,$U219);$x220=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x215,(string)\'max\',80,32,\'<image>/05_string.js\');$x219=&$x220[0];list(,$W219,$S219,$U219)=$x220;if(!(is_object($x219)&&isset($x219->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x223=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,32,\'<image>/05_string.js\');$_TypeError=&$x223[0];list(,$WTypeError,$STypeError,$UTypeError)=$x223;$x224=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x225=$x224($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x225->class)&&$x225->class===\'Error\'){$x225->properties[\'file\']=\'<image>/05_string.js\';$x225->properties[\'line\']=80;$x225->properties[\'column\']=32;$x225->attributes[\'file\']=$x225->attributes[\'line\']=$x225->attributes[\'column\']=0;}throw new JSException($x225,80,32,\'<image>/05_string.js\');}$x221=$x219->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x222=$x221($global,$x215,$x219,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x213)&&isset($x213->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x228=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,23,\'<image>/05_string.js\');$_TypeError=&$x228[0];list(,$WTypeError,$STypeError,$UTypeError)=$x228;$x229=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x230=$x229($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x230->class)&&$x230->class===\'Error\'){$x230->properties[\'file\']=\'<image>/05_string.js\';$x230->properties[\'line\']=80;$x230->properties[\'column\']=23;$x230->attributes[\'file\']=$x230->attributes[\'line\']=$x230->attributes[\'column\']=0;}throw new JSException($x230,80,23,\'<image>/05_string.js\');}$x226=$x213->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x227=$x226($global,$x209,$x213,array($x222,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x227;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strpos($leThis->value,JS::toString($_search,$global),$_offset);$x231=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x231,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x244 =& $scope->properties['arguments'];
$x244->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x244->properties[$i] = $args[$i];
$x244->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x245 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x245, $global)) {
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = 0;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x246 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 95, 15, '<image>/05_string.js');
$_Math =& $x246[0]; list(,$WMath,$SMath,$UMath) = $x246;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x247 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 95, 15, '<image>/05_string.js');
$_ReferenceError =& $x247[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x247;
$x248 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 15);
$x249 = $x248($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x249->class) && $x249->class === 'Error') {$x249->properties['file'] = '<image>/05_string.js';$x249->properties['line'] = 95;$x249->properties['column'] = 15;$x249->attributes['file'] = $x249->attributes['line'] = $x249->attributes['column'] = 0; }
throw new JSException($x249, 95, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x251 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 23, '<image>/05_string.js');
$_TypeError =& $x251[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x251;
$x252 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x253 = $x252($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x253->class) && $x253->class === 'Error') {$x253->properties['file'] = '<image>/05_string.js';$x253->properties['line'] = 95;$x253->properties['column'] = 23;$x253->attributes['file'] = $x253->attributes['line'] = $x253->attributes['column'] = 0; }
throw new JSException($x253, 95, 23, '<image>/05_string.js');
}
$x250 = JS::toObject($_Math, $global);
unset($x254, $W254, $S254, $U254);
$x255 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x250, (string) 'min', 95, 23, '<image>/05_string.js');
$x254 =& $x255[0]; list(,$W254,$S254,$U254) = $x255;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x257 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 32, '<image>/05_string.js');
$_TypeError =& $x257[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x257;
$x258 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x259 = $x258($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x259->class) && $x259->class === 'Error') {$x259->properties['file'] = '<image>/05_string.js';$x259->properties['line'] = 95;$x259->properties['column'] = 32;$x259->attributes['file'] = $x259->attributes['line'] = $x259->attributes['column'] = 0; }
throw new JSException($x259, 95, 32, '<image>/05_string.js');
}
$x256 = JS::toObject($_Math, $global);
unset($x260, $W260, $S260, $U260);
$x261 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x256, (string) 'max', 95, 32, '<image>/05_string.js');
$x260 =& $x261[0]; list(,$W260,$S260,$U260) = $x261;
if (!(is_object($x260) && isset($x260->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x264 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 32, '<image>/05_string.js');
$_TypeError =& $x264[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x264;
$x265 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x266 = $x265($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x266->class) && $x266->class === 'Error') {$x266->properties['file'] = '<image>/05_string.js';$x266->properties['line'] = 95;$x266->properties['column'] = 32;$x266->attributes['file'] = $x266->attributes['line'] = $x266->attributes['column'] = 0; }
throw new JSException($x266, 95, 32, '<image>/05_string.js');
}
$x262 = $x260->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x263 = $x262($global, $x256, $x260, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x254) && isset($x254->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x269 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 23, '<image>/05_string.js');
$_TypeError =& $x269[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x269;
$x270 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x271 = $x270($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x271->class) && $x271->class === 'Error') {$x271->properties['file'] = '<image>/05_string.js';$x271->properties['line'] = 95;$x271->properties['column'] = 23;$x271->attributes['file'] = $x271->attributes['line'] = $x271->attributes['column'] = 0; }
throw new JSException($x271, 95, 23, '<image>/05_string.js');
}
$x267 = $x254->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x268 = $x267($global, $x250, $x254, array($x263, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x268;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strrpos($leThis->value, JS::toString($_search, $global),$_offset);
$x272 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x272, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x244=&$scope->properties[\'arguments\'];$x244->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x244->properties[$i]=$args[$i];$x244->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x245=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x245,$global)){if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=0;}unset($_Math,$WMath,$SMath,$UMath);$x246=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',95,15,\'<image>/05_string.js\');$_Math=&$x246[0];list(,$WMath,$SMath,$UMath)=$x246;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x247=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',95,15,\'<image>/05_string.js\');$_ReferenceError=&$x247[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x247;$x248=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,15);$x249=$x248($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x249->class)&&$x249->class===\'Error\'){$x249->properties[\'file\']=\'<image>/05_string.js\';$x249->properties[\'line\']=95;$x249->properties[\'column\']=15;$x249->attributes[\'file\']=$x249->attributes[\'line\']=$x249->attributes[\'column\']=0;}throw new JSException($x249,95,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x251=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,23,\'<image>/05_string.js\');$_TypeError=&$x251[0];list(,$WTypeError,$STypeError,$UTypeError)=$x251;$x252=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x253=$x252($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x253->class)&&$x253->class===\'Error\'){$x253->properties[\'file\']=\'<image>/05_string.js\';$x253->properties[\'line\']=95;$x253->properties[\'column\']=23;$x253->attributes[\'file\']=$x253->attributes[\'line\']=$x253->attributes[\'column\']=0;}throw new JSException($x253,95,23,\'<image>/05_string.js\');}$x250=JS::toObject($_Math,$global);unset($x254,$W254,$S254,$U254);$x255=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x250,(string)\'min\',95,23,\'<image>/05_string.js\');$x254=&$x255[0];list(,$W254,$S254,$U254)=$x255;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x257=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,32,\'<image>/05_string.js\');$_TypeError=&$x257[0];list(,$WTypeError,$STypeError,$UTypeError)=$x257;$x258=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x259=$x258($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x259->class)&&$x259->class===\'Error\'){$x259->properties[\'file\']=\'<image>/05_string.js\';$x259->properties[\'line\']=95;$x259->properties[\'column\']=32;$x259->attributes[\'file\']=$x259->attributes[\'line\']=$x259->attributes[\'column\']=0;}throw new JSException($x259,95,32,\'<image>/05_string.js\');}$x256=JS::toObject($_Math,$global);unset($x260,$W260,$S260,$U260);$x261=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x256,(string)\'max\',95,32,\'<image>/05_string.js\');$x260=&$x261[0];list(,$W260,$S260,$U260)=$x261;if(!(is_object($x260)&&isset($x260->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x264=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,32,\'<image>/05_string.js\');$_TypeError=&$x264[0];list(,$WTypeError,$STypeError,$UTypeError)=$x264;$x265=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x266=$x265($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x266->class)&&$x266->class===\'Error\'){$x266->properties[\'file\']=\'<image>/05_string.js\';$x266->properties[\'line\']=95;$x266->properties[\'column\']=32;$x266->attributes[\'file\']=$x266->attributes[\'line\']=$x266->attributes[\'column\']=0;}throw new JSException($x266,95,32,\'<image>/05_string.js\');}$x262=$x260->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x263=$x262($global,$x256,$x260,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x254)&&isset($x254->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x269=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,23,\'<image>/05_string.js\');$_TypeError=&$x269[0];list(,$WTypeError,$STypeError,$UTypeError)=$x269;$x270=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x271=$x270($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x271->class)&&$x271->class===\'Error\'){$x271->properties[\'file\']=\'<image>/05_string.js\';$x271->properties[\'line\']=95;$x271->properties[\'column\']=23;$x271->attributes[\'file\']=$x271->attributes[\'line\']=$x271->attributes[\'column\']=0;}throw new JSException($x271,95,23,\'<image>/05_string.js\');}$x267=$x254->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x268=$x267($global,$x250,$x254,array($x263,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x268;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strrpos($leThis->value,JS::toString($_search,$global),$_offset);$x272=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x272,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x285 =& $scope->properties['arguments'];
$x285->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x285->properties[$i] = $args[$i];
$x285->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['that'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_that =& $scope->properties['that'];
$Uthat = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value === JS::toString($_that, $global);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x285=&$scope->properties[\'arguments\'];$x285->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x285->properties[$i]=$args[$i];$x285->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'that\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_that=&$scope->properties[\'that\'];$Uthat=FALSE;$global->scope[++$global->scope_sp]=$scope;return$leThis->value===JS::toString($_that,$global);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x298 =& $scope->properties['arguments'];
$x298->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x298->properties[$i] = $args[$i];
$x298->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['regexp'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_regexp =& $scope->properties['regexp'];
$Uregexp = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_regexp) && isset($_regexp->class) &&$_regexp->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x301 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 111, 16, '<image>/05_string.js');
$_RegExp =& $x301[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x301;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x302 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 111, 16, '<image>/05_string.js');
$_ReferenceError =& $x302[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x302;
$x303 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 16);
$x304 = $x303($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x304->class) && $x304->class === 'Error') {$x304->properties['file'] = '<image>/05_string.js';$x304->properties['line'] = 111;$x304->properties['column'] = 16;$x304->attributes['file'] = $x304->attributes['line'] = $x304->attributes['column'] = 0; }
throw new JSException($x304, 111, 16, '<image>/05_string.js');
}
$x299 = clone JS::$objectTemplate;
unset($x305, $W305, $S305, $U305);
$x306 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 111, 12, '<image>/05_string.js');
$x305 =& $x306[0]; list(,$W305,$S305,$U305) = $x306;
$x300 = $x305;
$x299->prototype = $x300;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x309 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 111, 12, '<image>/05_string.js');
$_TypeError =& $x309[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x309;
$x310 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x311 = $x310($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x311->class) && $x311->class === 'Error') {$x311->properties['file'] = '<image>/05_string.js';$x311->properties['line'] = 111;$x311->properties['column'] = 12;$x311->attributes['file'] = $x311->attributes['line'] = $x311->attributes['column'] = 0; }
throw new JSException($x311, 111, 12, '<image>/05_string.js');
}
$x307 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x308 = $x307($global, $x299, $_RegExp, array($_regexp), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x300 = $x308;
if (is_object($x300) && $x300 !== JS::$undefined) { $x299 = $x300; }
if ($Uregexp) {$global->properties['regexp'] = $_regexp; $_regexp =& $global->properties['regexp']; }
$_regexp = $x299;;
};
unset($x312, $W312, $S312, $U312);
$x313 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'global', 114, 13, '<image>/05_string.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
if (JS::toBoolean((!JS::toBoolean($x312, $global)), $global)) {
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x315 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 115, 21, '<image>/05_string.js');
$_TypeError =& $x315[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x315;
$x316 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x317 = $x316($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x317->class) && $x317->class === 'Error') {$x317->properties['file'] = '<image>/05_string.js';$x317->properties['line'] = 115;$x317->properties['column'] = 21;$x317->attributes['file'] = $x317->attributes['line'] = $x317->attributes['column'] = 0; }
throw new JSException($x317, 115, 21, '<image>/05_string.js');
}
$x314 = JS::toObject($_regexp, $global);
unset($x318, $W318, $S318, $U318);
$x319 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x314, (string) 'exec', 115, 21, '<image>/05_string.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
if (!(is_object($x318) && isset($x318->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x322 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 115, 21, '<image>/05_string.js');
$_TypeError =& $x322[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x322;
$x323 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x324 = $x323($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x324->class) && $x324->class === 'Error') {$x324->properties['file'] = '<image>/05_string.js';$x324->properties['line'] = 115;$x324->properties['column'] = 21;$x324->attributes['file'] = $x324->attributes['line'] = $x324->attributes['column'] = 0; }
throw new JSException($x324, 115, 21, '<image>/05_string.js');
}
$x320 = $x318->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x321 = $x320($global, $x314, $x318, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x321;;
};
$x325 = clone JS::$arrayTemplate;
$x325->properties['length'] = 0;
$x325->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x325;
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = 0;
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['currentLastIndex'] = JS::$undefined; $_currentLastIndex =& $scope->properties['currentLastIndex'];
$UcurrentLastIndex = FALSE;
$_currentLastIndex = JS::$undefined;
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x326 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 120, 19, '<image>/05_string.js');
$_TypeError =& $x326[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x326;
$x327 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x328 = $x327($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x328->class) && $x328->class === 'Error') {$x328->properties['file'] = '<image>/05_string.js';$x328->properties['line'] = 120;$x328->properties['column'] = 19;$x328->attributes['file'] = $x328->attributes['line'] = $x328->attributes['column'] = 0; }
throw new JSException($x328, 120, 19, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x329, $W329, $S329, $U329);
$x330 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, (string) 'lastIndex', 120, 19, '<image>/05_string.js');
$x329 =& $x330[0]; list(,$W329,$S329,$U329) = $x330;
if ($U329 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties['lastIndex'] = $x329; $x329 =& $_regexp->properties['lastIndex']; $_regexp->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U329 = FALSE; $W329 = TRUE; }
if (isset($S329)) {
$x332 = $S329->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x333 = $x332($global, $_regexp, $S329, array(0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x331 = $x333;
} else {
if (!$U329) {$x331 = 0;if ($W329) { $x329 = 0; }  }
else { $x331 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; };
for ($x334 = 0;; ++$x334) {
if ($x334 === 0) {
$scope->properties['previousLastIndex'] = JS::$undefined; $_previousLastIndex =& $scope->properties['previousLastIndex'];
$UpreviousLastIndex = FALSE;
$_previousLastIndex = 0;
$scope->properties['lastMatch'] = JS::$undefined; $_lastMatch =& $scope->properties['lastMatch'];
$UlastMatch = FALSE;
$_lastMatch = true;
}
if ($x334 !== 0) {
$x335 = ++$_n;
}

if (!JS::toBoolean($_lastMatch, $global)) { break; }

if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x337 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 123, 22, '<image>/05_string.js');
$_TypeError =& $x337[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x337;
$x338 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x339 = $x338($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x339->class) && $x339->class === 'Error') {$x339->properties['file'] = '<image>/05_string.js';$x339->properties['line'] = 123;$x339->properties['column'] = 22;$x339->attributes['file'] = $x339->attributes['line'] = $x339->attributes['column'] = 0; }
throw new JSException($x339, 123, 22, '<image>/05_string.js');
}
$x336 = JS::toObject($_regexp, $global);
unset($x340, $W340, $S340, $U340);
$x341 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x336, (string) 'exec', 123, 22, '<image>/05_string.js');
$x340 =& $x341[0]; list(,$W340,$S340,$U340) = $x341;
if (!(is_object($x340) && isset($x340->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x344 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 123, 22, '<image>/05_string.js');
$_TypeError =& $x344[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x344;
$x345 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x346 = $x345($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x346->class) && $x346->class === 'Error') {$x346->properties['file'] = '<image>/05_string.js';$x346->properties['line'] = 123;$x346->properties['column'] = 22;$x346->attributes['file'] = $x346->attributes['line'] = $x346->attributes['column'] = 0; }
throw new JSException($x346, 123, 22, '<image>/05_string.js');
}
$x342 = $x340->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x343 = $x342($global, $x336, $x340, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x343;
if ($UlastMatch) {$global->properties['lastMatch'] = $_lastMatch; $_lastMatch =& $global->properties['lastMatch']; }
$_lastMatch = (!JS::toBoolean((!JS::toBoolean($_match, $global)), $global));
if (JS::toBoolean($_match, $global)) {
unset($x348, $W348, $S348, $U348);
$x349 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'lastIndex', 127, 14, '<image>/05_string.js');
$x348 =& $x349[0]; list(,$W348,$S348,$U348) = $x349;
$x347 = (((gettype($x348) === gettype($_previousLastIndex) && $x348 === $_previousLastIndex))|| (((is_float($x348) || is_int($x348)) && (is_float($_previousLastIndex) || is_int($_previousLastIndex))) && $x348 == $_previousLastIndex));
if (JS::toBoolean($x347, $global)) {
unset($x352, $W352, $S352, $U352);
$x353 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'lastIndex', 128, 50, '<image>/05_string.js');
$x352 =& $x353[0]; list(,$W352,$S352,$U352) = $x353;
$x350 = JS::toPrimitive($x352, $global);
$x351 = JS::toPrimitive(1, $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x354 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 128, 42, '<image>/05_string.js');
$_TypeError =& $x354[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x354;
$x355 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x356 = $x355($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x356->class) && $x356->class === 'Error') {$x356->properties['file'] = '<image>/05_string.js';$x356->properties['line'] = 128;$x356->properties['column'] = 42;$x356->attributes['file'] = $x356->attributes['line'] = $x356->attributes['column'] = 0; }
throw new JSException($x356, 128, 42, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x357, $W357, $S357, $U357);
$x358 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, (string) 'lastIndex', 128, 42, '<image>/05_string.js');
$x357 =& $x358[0]; list(,$W357,$S357,$U357) = $x358;
if ($U357 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties['lastIndex'] = $x357; $x357 =& $_regexp->properties['lastIndex']; $_regexp->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U357 = FALSE; $W357 = TRUE; }
if (isset($S357)) {
$x360 = $S357->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x361 = $x360($global, $_regexp, $S357, array((is_string($x350) || is_string($x351) ? JS::toString($x350, $global) . JS::toString($x351, $global) : JS::toNumber($x350, $global) + JS::toNumber($x351, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x359 = $x361;
} else {
if (!$U357) {$x359 = (is_string($x350) || is_string($x351) ? JS::toString($x350, $global) . JS::toString($x351, $global) : JS::toNumber($x350, $global) + JS::toNumber($x351, $global));if ($W357) { $x357 = (is_string($x350) || is_string($x351) ? JS::toString($x350, $global) . JS::toString($x351, $global) : JS::toNumber($x350, $global) + JS::toNumber($x351, $global)); }  }
else { $x359 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; }
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x359;;
}
else {
unset($x362, $W362, $S362, $U362);
$x363 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'lastIndex', 130, 31, '<image>/05_string.js');
$x362 =& $x363[0]; list(,$W362,$S362,$U362) = $x363;
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x362;;
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x365 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 133, 20, '<image>/05_string.js');
$_TypeError =& $x365[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x365;
$x366 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x367 = $x366($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x367->class) && $x367->class === 'Error') {$x367->properties['file'] = '<image>/05_string.js';$x367->properties['line'] = 133;$x367->properties['column'] = 20;$x367->attributes['file'] = $x367->attributes['line'] = $x367->attributes['column'] = 0; }
throw new JSException($x367, 133, 20, '<image>/05_string.js');
}
$x364 = JS::toObject($_returnArray, $global);
unset($x368, $W368, $S368, $U368);
$x369 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x364, (string) 'push', 133, 20, '<image>/05_string.js');
$x368 =& $x369[0]; list(,$W368,$S368,$U368) = $x369;
unset($x370, $W370, $S370, $U370);
$x371 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 133, 26, '<image>/05_string.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if (!(is_object($x368) && isset($x368->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x374 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 133, 20, '<image>/05_string.js');
$_TypeError =& $x374[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x374;
$x375 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x376 = $x375($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x376->class) && $x376->class === 'Error') {$x376->properties['file'] = '<image>/05_string.js';$x376->properties['line'] = 133;$x376->properties['column'] = 20;$x376->attributes['file'] = $x376->attributes['line'] = $x376->attributes['column'] = 0; }
throw new JSException($x376, 133, 20, '<image>/05_string.js');
}
$x372 = $x368->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x373 = $x372($global, $x364, $x368, array($x370), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};;
};
$x377 = (((gettype($_n) === gettype(0) && $_n === 0))|| (((is_float($_n) || is_int($_n)) && (is_float(0) || is_int(0))) && $_n == 0));
if (JS::toBoolean($x377, $global)) {

return NULL;;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x298=&$scope->properties[\'arguments\'];$x298->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x298->properties[$i]=$args[$i];$x298->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'regexp\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_regexp=&$scope->properties[\'regexp\'];$Uregexp=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_regexp)&&isset($_regexp->class)&&$_regexp->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x301=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',111,16,\'<image>/05_string.js\');$_RegExp=&$x301[0];list(,$WRegExp,$SRegExp,$URegExp)=$x301;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x302=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',111,16,\'<image>/05_string.js\');$_ReferenceError=&$x302[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x302;$x303=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,16);$x304=$x303($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x304->class)&&$x304->class===\'Error\'){$x304->properties[\'file\']=\'<image>/05_string.js\';$x304->properties[\'line\']=111;$x304->properties[\'column\']=16;$x304->attributes[\'file\']=$x304->attributes[\'line\']=$x304->attributes[\'column\']=0;}throw new JSException($x304,111,16,\'<image>/05_string.js\');}$x299=clone JS::$objectTemplate;unset($x305,$W305,$S305,$U305);$x306=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',111,12,\'<image>/05_string.js\');$x305=&$x306[0];list(,$W305,$S305,$U305)=$x306;$x300=$x305;$x299->prototype=$x300;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x309=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',111,12,\'<image>/05_string.js\');$_TypeError=&$x309[0];list(,$WTypeError,$STypeError,$UTypeError)=$x309;$x310=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x311=$x310($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x311->class)&&$x311->class===\'Error\'){$x311->properties[\'file\']=\'<image>/05_string.js\';$x311->properties[\'line\']=111;$x311->properties[\'column\']=12;$x311->attributes[\'file\']=$x311->attributes[\'line\']=$x311->attributes[\'column\']=0;}throw new JSException($x311,111,12,\'<image>/05_string.js\');}$x307=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x308=$x307($global,$x299,$_RegExp,array($_regexp),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x300=$x308;if(is_object($x300)&&$x300!==JS::$undefined){$x299=$x300;}if($Uregexp){$global->properties[\'regexp\']=$_regexp;$_regexp=&$global->properties[\'regexp\'];}$_regexp=$x299;}unset($x312,$W312,$S312,$U312);$x313=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'global\',114,13,\'<image>/05_string.js\');$x312=&$x313[0];list(,$W312,$S312,$U312)=$x313;if(JS::toBoolean((!JS::toBoolean($x312,$global)),$global)){if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x315=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',115,21,\'<image>/05_string.js\');$_TypeError=&$x315[0];list(,$WTypeError,$STypeError,$UTypeError)=$x315;$x316=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x317=$x316($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x317->class)&&$x317->class===\'Error\'){$x317->properties[\'file\']=\'<image>/05_string.js\';$x317->properties[\'line\']=115;$x317->properties[\'column\']=21;$x317->attributes[\'file\']=$x317->attributes[\'line\']=$x317->attributes[\'column\']=0;}throw new JSException($x317,115,21,\'<image>/05_string.js\');}$x314=JS::toObject($_regexp,$global);unset($x318,$W318,$S318,$U318);$x319=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x314,(string)\'exec\',115,21,\'<image>/05_string.js\');$x318=&$x319[0];list(,$W318,$S318,$U318)=$x319;if(!(is_object($x318)&&isset($x318->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x322=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',115,21,\'<image>/05_string.js\');$_TypeError=&$x322[0];list(,$WTypeError,$STypeError,$UTypeError)=$x322;$x323=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x324=$x323($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x324->class)&&$x324->class===\'Error\'){$x324->properties[\'file\']=\'<image>/05_string.js\';$x324->properties[\'line\']=115;$x324->properties[\'column\']=21;$x324->attributes[\'file\']=$x324->attributes[\'line\']=$x324->attributes[\'column\']=0;}throw new JSException($x324,115,21,\'<image>/05_string.js\');}$x320=$x318->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x321=$x320($global,$x314,$x318,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x321;}$x325=clone JS::$arrayTemplate;$x325->properties[\'length\']=0;$x325->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x325;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=0;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'currentLastIndex\']=JS::$undefined;$_currentLastIndex=&$scope->properties[\'currentLastIndex\'];$UcurrentLastIndex=FALSE;$_currentLastIndex=JS::$undefined;if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x326=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',120,19,\'<image>/05_string.js\');$_TypeError=&$x326[0];list(,$WTypeError,$STypeError,$UTypeError)=$x326;$x327=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x328=$x327($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x328->class)&&$x328->class===\'Error\'){$x328->properties[\'file\']=\'<image>/05_string.js\';$x328->properties[\'line\']=120;$x328->properties[\'column\']=19;$x328->attributes[\'file\']=$x328->attributes[\'line\']=$x328->attributes[\'column\']=0;}throw new JSException($x328,120,19,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x329,$W329,$S329,$U329);$x330=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,(string)\'lastIndex\',120,19,\'<image>/05_string.js\');$x329=&$x330[0];list(,$W329,$S329,$U329)=$x330;if($U329&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[\'lastIndex\']=$x329;$x329=&$_regexp->properties[\'lastIndex\'];$_regexp->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U329=FALSE;$W329=TRUE;}if(isset($S329)){$x332=$S329->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x333=$x332($global,$_regexp,$S329,array(0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x331=$x333;}else{if(!$U329){$x331=0;if($W329){$x329=0;}}else{$x331=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}for($x334=0;;++$x334){if($x334===0){$scope->properties[\'previousLastIndex\']=JS::$undefined;$_previousLastIndex=&$scope->properties[\'previousLastIndex\'];$UpreviousLastIndex=FALSE;$_previousLastIndex=0;$scope->properties[\'lastMatch\']=JS::$undefined;$_lastMatch=&$scope->properties[\'lastMatch\'];$UlastMatch=FALSE;$_lastMatch=true;}if($x334!==0){$x335=++$_n;}if(!JS::toBoolean($_lastMatch,$global)){break;}if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x337=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',123,22,\'<image>/05_string.js\');$_TypeError=&$x337[0];list(,$WTypeError,$STypeError,$UTypeError)=$x337;$x338=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x339=$x338($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x339->class)&&$x339->class===\'Error\'){$x339->properties[\'file\']=\'<image>/05_string.js\';$x339->properties[\'line\']=123;$x339->properties[\'column\']=22;$x339->attributes[\'file\']=$x339->attributes[\'line\']=$x339->attributes[\'column\']=0;}throw new JSException($x339,123,22,\'<image>/05_string.js\');}$x336=JS::toObject($_regexp,$global);unset($x340,$W340,$S340,$U340);$x341=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x336,(string)\'exec\',123,22,\'<image>/05_string.js\');$x340=&$x341[0];list(,$W340,$S340,$U340)=$x341;if(!(is_object($x340)&&isset($x340->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x344=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',123,22,\'<image>/05_string.js\');$_TypeError=&$x344[0];list(,$WTypeError,$STypeError,$UTypeError)=$x344;$x345=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x346=$x345($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x346->class)&&$x346->class===\'Error\'){$x346->properties[\'file\']=\'<image>/05_string.js\';$x346->properties[\'line\']=123;$x346->properties[\'column\']=22;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,123,22,\'<image>/05_string.js\');}$x342=$x340->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x343=$x342($global,$x336,$x340,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x343;if($UlastMatch){$global->properties[\'lastMatch\']=$_lastMatch;$_lastMatch=&$global->properties[\'lastMatch\'];}$_lastMatch=(!JS::toBoolean((!JS::toBoolean($_match,$global)),$global));if(JS::toBoolean($_match,$global)){unset($x348,$W348,$S348,$U348);$x349=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'lastIndex\',127,14,\'<image>/05_string.js\');$x348=&$x349[0];list(,$W348,$S348,$U348)=$x349;$x347=(((gettype($x348)===gettype($_previousLastIndex)&&$x348===$_previousLastIndex))||(((is_float($x348)||is_int($x348))&&(is_float($_previousLastIndex)||is_int($_previousLastIndex)))&&$x348==$_previousLastIndex));if(JS::toBoolean($x347,$global)){unset($x352,$W352,$S352,$U352);$x353=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'lastIndex\',128,50,\'<image>/05_string.js\');$x352=&$x353[0];list(,$W352,$S352,$U352)=$x353;$x350=JS::toPrimitive($x352,$global);$x351=JS::toPrimitive(1,$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x354=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',128,42,\'<image>/05_string.js\');$_TypeError=&$x354[0];list(,$WTypeError,$STypeError,$UTypeError)=$x354;$x355=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x356=$x355($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x356->class)&&$x356->class===\'Error\'){$x356->properties[\'file\']=\'<image>/05_string.js\';$x356->properties[\'line\']=128;$x356->properties[\'column\']=42;$x356->attributes[\'file\']=$x356->attributes[\'line\']=$x356->attributes[\'column\']=0;}throw new JSException($x356,128,42,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x357,$W357,$S357,$U357);$x358=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,(string)\'lastIndex\',128,42,\'<image>/05_string.js\');$x357=&$x358[0];list(,$W357,$S357,$U357)=$x358;if($U357&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[\'lastIndex\']=$x357;$x357=&$_regexp->properties[\'lastIndex\'];$_regexp->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U357=FALSE;$W357=TRUE;}if(isset($S357)){$x360=$S357->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x361=$x360($global,$_regexp,$S357,array((is_string($x350)||is_string($x351)?JS::toString($x350,$global).JS::toString($x351,$global):JS::toNumber($x350,$global)+JS::toNumber($x351,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x359=$x361;}else{if(!$U357){$x359=(is_string($x350)||is_string($x351)?JS::toString($x350,$global).JS::toString($x351,$global):JS::toNumber($x350,$global)+JS::toNumber($x351,$global));if($W357){$x357=(is_string($x350)||is_string($x351)?JS::toString($x350,$global).JS::toString($x351,$global):JS::toNumber($x350,$global)+JS::toNumber($x351,$global));}}else{$x359=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x359;}else{unset($x362,$W362,$S362,$U362);$x363=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'lastIndex\',130,31,\'<image>/05_string.js\');$x362=&$x363[0];list(,$W362,$S362,$U362)=$x363;if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x362;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x365=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',133,20,\'<image>/05_string.js\');$_TypeError=&$x365[0];list(,$WTypeError,$STypeError,$UTypeError)=$x365;$x366=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x367=$x366($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x367->class)&&$x367->class===\'Error\'){$x367->properties[\'file\']=\'<image>/05_string.js\';$x367->properties[\'line\']=133;$x367->properties[\'column\']=20;$x367->attributes[\'file\']=$x367->attributes[\'line\']=$x367->attributes[\'column\']=0;}throw new JSException($x367,133,20,\'<image>/05_string.js\');}$x364=JS::toObject($_returnArray,$global);unset($x368,$W368,$S368,$U368);$x369=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x364,(string)\'push\',133,20,\'<image>/05_string.js\');$x368=&$x369[0];list(,$W368,$S368,$U368)=$x369;unset($x370,$W370,$S370,$U370);$x371=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,133,26,\'<image>/05_string.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;if(!(is_object($x368)&&isset($x368->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x374=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',133,20,\'<image>/05_string.js\');$_TypeError=&$x374[0];list(,$WTypeError,$STypeError,$UTypeError)=$x374;$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x376=$x375($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x376->class)&&$x376->class===\'Error\'){$x376->properties[\'file\']=\'<image>/05_string.js\';$x376->properties[\'line\']=133;$x376->properties[\'column\']=20;$x376->attributes[\'file\']=$x376->attributes[\'line\']=$x376->attributes[\'column\']=0;}throw new JSException($x376,133,20,\'<image>/05_string.js\');}$x372=$x368->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x373=$x372($global,$x364,$x368,array($x370),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}$x377=(((gettype($_n)===gettype(0)&&$_n===0))||(((is_float($_n)||is_int($_n))&&(is_float(0)||is_int(0)))&&$_n==0));if(JS::toBoolean($x377,$global)){return NULL;}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x509 =& $scope->properties['arguments'];
$x509->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x509->properties[$i] = $args[$i];
$x509->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['_'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$___ =& $scope->properties['_'];
$U__ = FALSE;
$scope->properties['c'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x510 = (((gettype($_c) === gettype('$') && $_c === '$'))|| (((is_float($_c) || is_int($_c)) && (is_float('$') || is_int('$'))) && $_c == '$'));
if (JS::toBoolean($x510, $global)) {

return '$';;
}
else {
$x511 = (((gettype($_c) === gettype('&') && $_c === '&'))|| (((is_float($_c) || is_int($_c)) && (is_float('&') || is_int('&'))) && $_c == '&'));
if (JS::toBoolean($x511, $global)) {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x512 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'match', 171, 13, '<image>/05_string.js');
$_match =& $x512[0]; list(,$Wmatch,$Smatch,$Umatch) = $x512;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x513 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 171, 13, '<image>/05_string.js');
$_ReferenceError =& $x513[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x513;
$x514 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 171, 13);
$x515 = $x514($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x515->class) && $x515->class === 'Error') {$x515->properties['file'] = '<image>/05_string.js';$x515->properties['line'] = 171;$x515->properties['column'] = 13;$x515->attributes['file'] = $x515->attributes['line'] = $x515->attributes['column'] = 0; }
throw new JSException($x515, 171, 13, '<image>/05_string.js');
}
unset($x516, $W516, $S516, $U516);
$x517 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 171, 18, '<image>/05_string.js');
$x516 =& $x517[0]; list(,$W516,$S516,$U516) = $x517;
return $x516;;
}
else {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x518 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'match', 174, 13, '<image>/05_string.js');
$_match =& $x518[0]; list(,$Wmatch,$Smatch,$Umatch) = $x518;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x519 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 174, 13, '<image>/05_string.js');
$_ReferenceError =& $x519[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x519;
$x520 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 13);
$x521 = $x520($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x521->class) && $x521->class === 'Error') {$x521->properties['file'] = '<image>/05_string.js';$x521->properties['line'] = 174;$x521->properties['column'] = 13;$x521->attributes['file'] = $x521->attributes['line'] = $x521->attributes['column'] = 0; }
throw new JSException($x521, 174, 13, '<image>/05_string.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x522 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Number', 174, 19, '<image>/05_string.js');
$_Number =& $x522[0]; list(,$WNumber,$SNumber,$UNumber) = $x522;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x523 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 174, 19, '<image>/05_string.js');
$_ReferenceError =& $x523[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x523;
$x524 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 19);
$x525 = $x524($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x525->class) && $x525->class === 'Error') {$x525->properties['file'] = '<image>/05_string.js';$x525->properties['line'] = 174;$x525->properties['column'] = 19;$x525->attributes['file'] = $x525->attributes['line'] = $x525->attributes['column'] = 0; }
throw new JSException($x525, 174, 19, '<image>/05_string.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x528 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 174, 25, '<image>/05_string.js');
$_TypeError =& $x528[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x528;
$x529 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x530 = $x529($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x530->class) && $x530->class === 'Error') {$x530->properties['file'] = '<image>/05_string.js';$x530->properties['line'] = 174;$x530->properties['column'] = 25;$x530->attributes['file'] = $x530->attributes['line'] = $x530->attributes['column'] = 0; }
throw new JSException($x530, 174, 25, '<image>/05_string.js');
}
$x526 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x527 = $x526($global, $global, $_Number, array($_c), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x531, $W531, $S531, $U531);
$x532 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) $x527, 174, 18, '<image>/05_string.js');
$x531 =& $x532[0]; list(,$W531,$S531,$U531) = $x532;
return $x531;;
};
}
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x509=&$scope->properties[\'arguments\'];$x509->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x509->properties[$i]=$args[$i];$x509->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'_\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$___=&$scope->properties[\'_\'];$U__=FALSE;$scope->properties[\'c\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$x510=(((gettype($_c)===gettype(\'$\')&&$_c===\'$\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'$\')||is_int(\'$\')))&&$_c==\'$\'));if(JS::toBoolean($x510,$global)){return\'$\';}else{$x511=(((gettype($_c)===gettype(\'&\')&&$_c===\'&\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'&\')||is_int(\'&\')))&&$_c==\'&\'));if(JS::toBoolean($x511,$global)){unset($_match,$Wmatch,$Smatch,$Umatch);$x512=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'match\',171,13,\'<image>/05_string.js\');$_match=&$x512[0];list(,$Wmatch,$Smatch,$Umatch)=$x512;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x513=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',171,13,\'<image>/05_string.js\');$_ReferenceError=&$x513[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x513;$x514=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',171,13);$x515=$x514($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x515->class)&&$x515->class===\'Error\'){$x515->properties[\'file\']=\'<image>/05_string.js\';$x515->properties[\'line\']=171;$x515->properties[\'column\']=13;$x515->attributes[\'file\']=$x515->attributes[\'line\']=$x515->attributes[\'column\']=0;}throw new JSException($x515,171,13,\'<image>/05_string.js\');}unset($x516,$W516,$S516,$U516);$x517=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,171,18,\'<image>/05_string.js\');$x516=&$x517[0];list(,$W516,$S516,$U516)=$x517;return$x516;}else{unset($_match,$Wmatch,$Smatch,$Umatch);$x518=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'match\',174,13,\'<image>/05_string.js\');$_match=&$x518[0];list(,$Wmatch,$Smatch,$Umatch)=$x518;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x519=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',174,13,\'<image>/05_string.js\');$_ReferenceError=&$x519[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x519;$x520=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,13);$x521=$x520($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x521->class)&&$x521->class===\'Error\'){$x521->properties[\'file\']=\'<image>/05_string.js\';$x521->properties[\'line\']=174;$x521->properties[\'column\']=13;$x521->attributes[\'file\']=$x521->attributes[\'line\']=$x521->attributes[\'column\']=0;}throw new JSException($x521,174,13,\'<image>/05_string.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x522=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Number\',174,19,\'<image>/05_string.js\');$_Number=&$x522[0];list(,$WNumber,$SNumber,$UNumber)=$x522;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x523=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',174,19,\'<image>/05_string.js\');$_ReferenceError=&$x523[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x523;$x524=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,19);$x525=$x524($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x525->class)&&$x525->class===\'Error\'){$x525->properties[\'file\']=\'<image>/05_string.js\';$x525->properties[\'line\']=174;$x525->properties[\'column\']=19;$x525->attributes[\'file\']=$x525->attributes[\'line\']=$x525->attributes[\'column\']=0;}throw new JSException($x525,174,19,\'<image>/05_string.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x528=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',174,25,\'<image>/05_string.js\');$_TypeError=&$x528[0];list(,$WTypeError,$STypeError,$UTypeError)=$x528;$x529=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x530=$x529($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x530->class)&&$x530->class===\'Error\'){$x530->properties[\'file\']=\'<image>/05_string.js\';$x530->properties[\'line\']=174;$x530->properties[\'column\']=25;$x530->attributes[\'file\']=$x530->attributes[\'line\']=$x530->attributes[\'column\']=0;}throw new JSException($x530,174,25,\'<image>/05_string.js\');}$x526=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x527=$x526($global,$global,$_Number,array($_c),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x531,$W531,$S531,$U531);$x532=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)$x527,174,18,\'<image>/05_string.js\');$x531=&$x532[0];list(,$W531,$S531,$U531)=$x532;return$x531;}}return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x390 =& $scope->properties['arguments'];
$x390->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x390->properties[$i] = $args[$i];
$x390->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['replace'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_replace =& $scope->properties['replace'];
$Ureplace = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!is_object($_search) || !isset($_search->class) ||$_search->class !== 'RegExp', $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x393 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 146, 16, '<image>/05_string.js');
$_RegExp =& $x393[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x393;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x394 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 146, 16, '<image>/05_string.js');
$_ReferenceError =& $x394[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x394;
$x395 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 16);
$x396 = $x395($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x396->class) && $x396->class === 'Error') {$x396->properties['file'] = '<image>/05_string.js';$x396->properties['line'] = 146;$x396->properties['column'] = 16;$x396->attributes['file'] = $x396->attributes['line'] = $x396->attributes['column'] = 0; }
throw new JSException($x396, 146, 16, '<image>/05_string.js');
}
$x391 = clone JS::$objectTemplate;
unset($x397, $W397, $S397, $U397);
$x398 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 146, 12, '<image>/05_string.js');
$x397 =& $x398[0]; list(,$W397,$S397,$U397) = $x398;
$x392 = $x397;
$x391->prototype = $x392;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x401 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 146, 12, '<image>/05_string.js');
$_TypeError =& $x401[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x401;
$x402 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x403 = $x402($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x403->class) && $x403->class === 'Error') {$x403->properties['file'] = '<image>/05_string.js';$x403->properties['line'] = 146;$x403->properties['column'] = 12;$x403->attributes['file'] = $x403->attributes['line'] = $x403->attributes['column'] = 0; }
throw new JSException($x403, 146, 12, '<image>/05_string.js');
}
$x399 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x400 = $x399($global, $x391, $_RegExp, array(preg_quote(JS::toString($_search, $global), '/')), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x392 = $x400;
if (is_object($x392) && $x392 !== JS::$undefined) { $x391 = $x392; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x391;;
};
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['index'] = JS::$undefined; $_index =& $scope->properties['index'];
$Uindex = FALSE;
$_index = JS::$undefined;
$scope->properties['lastIndex'] = JS::$undefined; $_lastIndex =& $scope->properties['lastIndex'];
$UlastIndex = FALSE;
$_lastIndex = 0;
$scope->properties['thisString'] = JS::$undefined; $_thisString =& $scope->properties['thisString'];
$UthisString = FALSE;
$_thisString = $leThis->value;
$scope->properties['newString'] = JS::$undefined; $_newString =& $scope->properties['newString'];
$UnewString = FALSE;
$_newString = '';
$scope->properties['s'] = JS::$undefined; $_s =& $scope->properties['s'];
$Us = FALSE;
$_s = JS::$undefined;
for (;;) {
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x406 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 152, 29, '<image>/05_string.js');
$_TypeError =& $x406[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x406;
$x407 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x408 = $x407($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x408->class) && $x408->class === 'Error') {$x408->properties['file'] = '<image>/05_string.js';$x408->properties['line'] = 152;$x408->properties['column'] = 29;$x408->attributes['file'] = $x408->attributes['line'] = $x408->attributes['column'] = 0; }
throw new JSException($x408, 152, 29, '<image>/05_string.js');
}
$x405 = JS::toObject($_search, $global);
unset($x409, $W409, $S409, $U409);
$x410 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x405, (string) 'exec', 152, 29, '<image>/05_string.js');
$x409 =& $x410[0]; list(,$W409,$S409,$U409) = $x410;
if (!(is_object($x409) && isset($x409->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x413 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 152, 29, '<image>/05_string.js');
$_TypeError =& $x413[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x413;
$x414 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x415 = $x414($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x415->class) && $x415->class === 'Error') {$x415->properties['file'] = '<image>/05_string.js';$x415->properties['line'] = 152;$x415->properties['column'] = 29;$x415->attributes['file'] = $x415->attributes['line'] = $x415->attributes['column'] = 0; }
throw new JSException($x415, 152, 29, '<image>/05_string.js');
}
$x411 = $x409->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x412 = $x411($global, $x405, $x409, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x412;
$x404 = !(((gettype($_match) === gettype(NULL) && $_match === NULL))|| (((is_float($_match) || is_int($_match)) && (is_float(NULL) || is_int(NULL))) && $_match == NULL));
if (!JS::toBoolean($x404, $global)) { break; }

unset($x416, $W416, $S416, $U416);
$x417 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 153, 16, '<image>/05_string.js');
$x416 =& $x417[0]; list(,$W416,$S416,$U416) = $x417;
if ($Uindex) {$global->properties['index'] = $_index; $_index =& $global->properties['index']; }
$_index = $x416;
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x419 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 154, 40, '<image>/05_string.js');
$_TypeError =& $x419[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x419;
$x420 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x421 = $x420($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x421->class) && $x421->class === 'Error') {$x421->properties['file'] = '<image>/05_string.js';$x421->properties['line'] = 154;$x421->properties['column'] = 40;$x421->attributes['file'] = $x421->attributes['line'] = $x421->attributes['column'] = 0; }
throw new JSException($x421, 154, 40, '<image>/05_string.js');
}
$x418 = JS::toObject($_thisString, $global);
unset($x422, $W422, $S422, $U422);
$x423 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x418, (string) 'substring', 154, 40, '<image>/05_string.js');
$x422 =& $x423[0]; list(,$W422,$S422,$U422) = $x423;
if (!(is_object($x422) && isset($x422->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x426 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 154, 40, '<image>/05_string.js');
$_TypeError =& $x426[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x426;
$x427 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x428 = $x427($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x428->class) && $x428->class === 'Error') {$x428->properties['file'] = '<image>/05_string.js';$x428->properties['line'] = 154;$x428->properties['column'] = 40;$x428->attributes['file'] = $x428->attributes['line'] = $x428->attributes['column'] = 0; }
throw new JSException($x428, 154, 40, '<image>/05_string.js');
}
$x424 = $x422->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x425 = $x424($global, $x418, $x422, array($_lastIndex, $_index), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x425;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x429 = JS::toPrimitive($_newString, $global);
$x430 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x429) || is_string($x430) ? JS::toString($x429, $global) . JS::toString($x430, $global) : JS::toNumber($x429, $global) + JS::toNumber($x430, $global));
unset($x433, $W433, $S433, $U433);
$x434 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 155, 28, '<image>/05_string.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
unset($x435, $W435, $S435, $U435);
$x436 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x433, (string) 'length', 155, 31, '<image>/05_string.js');
$x435 =& $x436[0]; list(,$W435,$S435,$U435) = $x436;
$x431 = JS::toPrimitive($_index, $global);
$x432 = JS::toPrimitive($x435, $global);
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = (is_string($x431) || is_string($x432) ? JS::toString($x431, $global) . JS::toString($x432, $global) : JS::toNumber($x431, $global) + JS::toNumber($x432, $global));
$x438 = $_replace;
$x438 = ($x438 === JS::$undefined ? 'undefined' : (is_int($x438) || is_float($x438) ? 'number' : (is_bool($x438) ? 'boolean' : (is_string($x438) ? 'string' : (is_object($x438) && isset($x438->call) ? 'function' : 'object')))));
$x437 = (((gettype($x438) === gettype('function') && $x438 === 'function'))|| (((is_float($x438) || is_int($x438)) && (is_float('function') || is_int('function'))) && $x438 == 'function'));
if (JS::toBoolean($x437, $global)) {
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x440 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 158, 14, '<image>/05_string.js');
$_TypeError =& $x440[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x440;
$x441 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x442 = $x441($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x442->class) && $x442->class === 'Error') {$x442->properties['file'] = '<image>/05_string.js';$x442->properties['line'] = 158;$x442->properties['column'] = 14;$x442->attributes['file'] = $x442->attributes['line'] = $x442->attributes['column'] = 0; }
throw new JSException($x442, 158, 14, '<image>/05_string.js');
}
$x439 = JS::toObject($_match, $global);
unset($x443, $W443, $S443, $U443);
$x444 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x439, (string) 'push', 158, 14, '<image>/05_string.js');
$x443 =& $x444[0]; list(,$W443,$S443,$U443) = $x444;
unset($x445, $W445, $S445, $U445);
$x446 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 158, 20, '<image>/05_string.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
if (!(is_object($x443) && isset($x443->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x449 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 158, 14, '<image>/05_string.js');
$_TypeError =& $x449[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x449;
$x450 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x451 = $x450($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x451->class) && $x451->class === 'Error') {$x451->properties['file'] = '<image>/05_string.js';$x451->properties['line'] = 158;$x451->properties['column'] = 14;$x451->attributes['file'] = $x451->attributes['line'] = $x451->attributes['column'] = 0; }
throw new JSException($x451, 158, 14, '<image>/05_string.js');
}
$x447 = $x443->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x448 = $x447($global, $x439, $x443, array($x445), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x453 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 159, 14, '<image>/05_string.js');
$_TypeError =& $x453[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x453;
$x454 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x455 = $x454($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x455->class) && $x455->class === 'Error') {$x455->properties['file'] = '<image>/05_string.js';$x455->properties['line'] = 159;$x455->properties['column'] = 14;$x455->attributes['file'] = $x455->attributes['line'] = $x455->attributes['column'] = 0; }
throw new JSException($x455, 159, 14, '<image>/05_string.js');
}
$x452 = JS::toObject($_match, $global);
unset($x456, $W456, $S456, $U456);
$x457 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x452, (string) 'push', 159, 14, '<image>/05_string.js');
$x456 =& $x457[0]; list(,$W456,$S456,$U456) = $x457;
unset($x458, $W458, $S458, $U458);
$x459 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'input', 159, 20, '<image>/05_string.js');
$x458 =& $x459[0]; list(,$W458,$S458,$U458) = $x459;
if (!(is_object($x456) && isset($x456->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x462 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 159, 14, '<image>/05_string.js');
$_TypeError =& $x462[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x462;
$x463 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x464 = $x463($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x464->class) && $x464->class === 'Error') {$x464->properties['file'] = '<image>/05_string.js';$x464->properties['line'] = 159;$x464->properties['column'] = 14;$x464->attributes['file'] = $x464->attributes['line'] = $x464->attributes['column'] = 0; }
throw new JSException($x464, 159, 14, '<image>/05_string.js');
}
$x460 = $x456->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x461 = $x460($global, $x452, $x456, array($x458), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!array_key_exists('index', $_match->attributes)) { unset($_match->properties['index']); $x465 = TRUE; }
else if ($_match->attributes['index'] & JS::CONFIGURABLE) { unset($_match->properties['index'], $_match->attributes['index'], $_match->getters['index'], $_match->setters['index']); $x465 = TRUE; }
else { $x465 = FALSE; };
if (!array_key_exists('input', $_match->attributes)) { unset($_match->properties['input']); $x466 = TRUE; }
else if ($_match->attributes['input'] & JS::CONFIGURABLE) { unset($_match->properties['input'], $_match->attributes['input'], $_match->getters['input'], $_match->setters['input']); $x466 = TRUE; }
else { $x466 = FALSE; };
unset($_String, $WString, $SString, $UString);
$x467 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'String', 163, 21, '<image>/05_string.js');
$_String =& $x467[0]; list(,$WString,$SString,$UString) = $x467;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x468 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 163, 21, '<image>/05_string.js');
$_ReferenceError =& $x468[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x468;
$x469 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 21);
$x470 = $x469($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x470->class) && $x470->class === 'Error') {$x470->properties['file'] = '<image>/05_string.js';$x470->properties['line'] = 163;$x470->properties['column'] = 21;$x470->attributes['file'] = $x470->attributes['line'] = $x470->attributes['column'] = 0; }
throw new JSException($x470, 163, 21, '<image>/05_string.js');
}
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x472 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 163, 41, '<image>/05_string.js');
$_TypeError =& $x472[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x472;
$x473 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x474 = $x473($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x474->class) && $x474->class === 'Error') {$x474->properties['file'] = '<image>/05_string.js';$x474->properties['line'] = 163;$x474->properties['column'] = 41;$x474->attributes['file'] = $x474->attributes['line'] = $x474->attributes['column'] = 0; }
throw new JSException($x474, 163, 41, '<image>/05_string.js');
}
$x471 = JS::toObject($_replace, $global);
unset($x475, $W475, $S475, $U475);
$x476 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x471, (string) 'apply', 163, 41, '<image>/05_string.js');
$x475 =& $x476[0]; list(,$W475,$S475,$U475) = $x476;
if (!(is_object($x475) && isset($x475->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x479 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 163, 41, '<image>/05_string.js');
$_TypeError =& $x479[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x479;
$x480 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x481 = $x480($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x481->class) && $x481->class === 'Error') {$x481->properties['file'] = '<image>/05_string.js';$x481->properties['line'] = 163;$x481->properties['column'] = 41;$x481->attributes['file'] = $x481->attributes['line'] = $x481->attributes['column'] = 0; }
throw new JSException($x481, 163, 41, '<image>/05_string.js');
}
$x477 = $x475->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x478 = $x477($global, $x471, $x475, array(JS::$undefined, $_match), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x484 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 163, 27, '<image>/05_string.js');
$_TypeError =& $x484[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x484;
$x485 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x486 = $x485($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x486->class) && $x486->class === 'Error') {$x486->properties['file'] = '<image>/05_string.js';$x486->properties['line'] = 163;$x486->properties['column'] = 27;$x486->attributes['file'] = $x486->attributes['line'] = $x486->attributes['column'] = 0; }
throw new JSException($x486, 163, 27, '<image>/05_string.js');
}
$x482 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x483 = $x482($global, $global, $_String, array($x478), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x483;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x487 = JS::toPrimitive($_newString, $global);
$x488 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x487) || is_string($x488) ? JS::toString($x487, $global) . JS::toString($x488, $global) : JS::toNumber($x487, $global) + JS::toNumber($x488, $global));;
}
else {
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x490 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 166, 32, '<image>/05_string.js');
$_TypeError =& $x490[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x490;
$x491 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x492 = $x491($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x492->class) && $x492->class === 'Error') {$x492->properties['file'] = '<image>/05_string.js';$x492->properties['line'] = 166;$x492->properties['column'] = 32;$x492->attributes['file'] = $x492->attributes['line'] = $x492->attributes['column'] = 0; }
throw new JSException($x492, 166, 32, '<image>/05_string.js');
}
$x489 = JS::toObject($_replace, $global);
unset($x493, $W493, $S493, $U493);
$x494 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x489, (string) 'replace', 166, 32, '<image>/05_string.js');
$x493 =& $x494[0]; list(,$W493,$S493,$U493) = $x494;
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x497 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 166, 33, '<image>/05_string.js');
$_RegExp =& $x497[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x497;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x498 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 166, 33, '<image>/05_string.js');
$_ReferenceError =& $x498[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x498;
$x499 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x500 = $x499($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x500->class) && $x500->class === 'Error') {$x500->properties['file'] = '<image>/05_string.js';$x500->properties['line'] = 166;$x500->properties['column'] = 33;$x500->attributes['file'] = $x500->attributes['line'] = $x500->attributes['column'] = 0; }
throw new JSException($x500, 166, 33, '<image>/05_string.js');
}
$x495 = clone JS::$objectTemplate;
unset($x501, $W501, $S501, $U501);
$x502 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 166, 33, '<image>/05_string.js');
$x501 =& $x502[0]; list(,$W501,$S501,$U501) = $x502;
$x496 = $x501;
$x495->prototype = $x496;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x505 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 166, 33, '<image>/05_string.js');
$_TypeError =& $x505[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x505;
$x506 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x507 = $x506($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x507->class) && $x507->class === 'Error') {$x507->properties['file'] = '<image>/05_string.js';$x507->properties['line'] = 166;$x507->properties['column'] = 33;$x507->attributes['file'] = $x507->attributes['line'] = $x507->attributes['column'] = 0; }
throw new JSException($x507, 166, 33, '<image>/05_string.js');
}
$x503 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x504 = $x503($global, $x495, $_RegExp, array('\\$([$&]|[0-9]|[0-9][0-9])', 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x496 = $x504;
if (is_object($x496) && $x496 !== JS::$undefined) { $x495 = $x496; }
$x533 = clone JS::$functionTemplate; $x533->call = '_465e5538fcb402e27559db40bec8addd_15'; $x533->parameters = array (
  0 => '_',
  1 => 'c',
); $x533->scope = $scope; $x533->properties['prototype'] = clone JS::$objectTemplate; $x533->attributes['prototype'] = JS::WRITABLE; $x533->properties['prototype']->properties['constructor'] = $x533; $x533->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x533->properties['length'] = 2; $x533->attributes['length'] = 0;
if (!(is_object($x493) && isset($x493->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x536 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 166, 32, '<image>/05_string.js');
$_TypeError =& $x536[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x536;
$x537 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x538 = $x537($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x538->class) && $x538->class === 'Error') {$x538->properties['file'] = '<image>/05_string.js';$x538->properties['line'] = 166;$x538->properties['column'] = 32;$x538->attributes['file'] = $x538->attributes['line'] = $x538->attributes['column'] = 0; }
throw new JSException($x538, 166, 32, '<image>/05_string.js');
}
$x534 = $x493->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x535 = $x534($global, $x489, $x493, array($x495, $x533), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x539 = JS::toPrimitive($_newString, $global);
$x540 = JS::toPrimitive($x535, $global);
$_newString = (is_string($x539) || is_string($x540) ? JS::toString($x539, $global) . JS::toString($x540, $global) : JS::toNumber($x539, $global) + JS::toNumber($x540, $global));;
};
unset($x541, $W541, $S541, $U541);
$x542 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, (string) 'global', 179, 14, '<image>/05_string.js');
$x541 =& $x542[0]; list(,$W541,$S541,$U541) = $x542;
if (JS::toBoolean((!JS::toBoolean($x541, $global)), $global)) {
break;;
};;
};
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x544 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 184, 35, '<image>/05_string.js');
$_TypeError =& $x544[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x544;
$x545 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x546 = $x545($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x546->class) && $x546->class === 'Error') {$x546->properties['file'] = '<image>/05_string.js';$x546->properties['line'] = 184;$x546->properties['column'] = 35;$x546->attributes['file'] = $x546->attributes['line'] = $x546->attributes['column'] = 0; }
throw new JSException($x546, 184, 35, '<image>/05_string.js');
}
$x543 = JS::toObject($_thisString, $global);
unset($x547, $W547, $S547, $U547);
$x548 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x543, (string) 'substring', 184, 35, '<image>/05_string.js');
$x547 =& $x548[0]; list(,$W547,$S547,$U547) = $x548;
unset($x549, $W549, $S549, $U549);
$x550 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_thisString, (string) 'length', 184, 57, '<image>/05_string.js');
$x549 =& $x550[0]; list(,$W549,$S549,$U549) = $x550;
if (!(is_object($x547) && isset($x547->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x553 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 184, 35, '<image>/05_string.js');
$_TypeError =& $x553[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x553;
$x554 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x555 = $x554($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x555->class) && $x555->class === 'Error') {$x555->properties['file'] = '<image>/05_string.js';$x555->properties['line'] = 184;$x555->properties['column'] = 35;$x555->attributes['file'] = $x555->attributes['line'] = $x555->attributes['column'] = 0; }
throw new JSException($x555, 184, 35, '<image>/05_string.js');
}
$x551 = $x547->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x552 = $x551($global, $x543, $x547, array($_lastIndex, $x549), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x556 = JS::toPrimitive($_newString, $global);
$x557 = JS::toPrimitive($x552, $global);
$_newString = (is_string($x556) || is_string($x557) ? JS::toString($x556, $global) . JS::toString($x557, $global) : JS::toNumber($x556, $global) + JS::toNumber($x557, $global));
return $_newString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x390=&$scope->properties[\'arguments\'];$x390->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x390->properties[$i]=$args[$i];$x390->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'replace\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replace=&$scope->properties[\'replace\'];$Ureplace=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!is_object($_search)||!isset($_search->class)||$_search->class!==\'RegExp\',$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x393=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',146,16,\'<image>/05_string.js\');$_RegExp=&$x393[0];list(,$WRegExp,$SRegExp,$URegExp)=$x393;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x394=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',146,16,\'<image>/05_string.js\');$_ReferenceError=&$x394[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x394;$x395=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,16);$x396=$x395($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x396->class)&&$x396->class===\'Error\'){$x396->properties[\'file\']=\'<image>/05_string.js\';$x396->properties[\'line\']=146;$x396->properties[\'column\']=16;$x396->attributes[\'file\']=$x396->attributes[\'line\']=$x396->attributes[\'column\']=0;}throw new JSException($x396,146,16,\'<image>/05_string.js\');}$x391=clone JS::$objectTemplate;unset($x397,$W397,$S397,$U397);$x398=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',146,12,\'<image>/05_string.js\');$x397=&$x398[0];list(,$W397,$S397,$U397)=$x398;$x392=$x397;$x391->prototype=$x392;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x401=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',146,12,\'<image>/05_string.js\');$_TypeError=&$x401[0];list(,$WTypeError,$STypeError,$UTypeError)=$x401;$x402=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x403=$x402($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x403->class)&&$x403->class===\'Error\'){$x403->properties[\'file\']=\'<image>/05_string.js\';$x403->properties[\'line\']=146;$x403->properties[\'column\']=12;$x403->attributes[\'file\']=$x403->attributes[\'line\']=$x403->attributes[\'column\']=0;}throw new JSException($x403,146,12,\'<image>/05_string.js\');}$x399=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x400=$x399($global,$x391,$_RegExp,array(preg_quote(JS::toString($_search,$global),\'/\')),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x392=$x400;if(is_object($x392)&&$x392!==JS::$undefined){$x391=$x392;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x391;}$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;$scope->properties[\'newString\']=JS::$undefined;$_newString=&$scope->properties[\'newString\'];$UnewString=FALSE;$_newString=\'\';$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=JS::$undefined;for(;;){if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x406=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',152,29,\'<image>/05_string.js\');$_TypeError=&$x406[0];list(,$WTypeError,$STypeError,$UTypeError)=$x406;$x407=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x408=$x407($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x408->class)&&$x408->class===\'Error\'){$x408->properties[\'file\']=\'<image>/05_string.js\';$x408->properties[\'line\']=152;$x408->properties[\'column\']=29;$x408->attributes[\'file\']=$x408->attributes[\'line\']=$x408->attributes[\'column\']=0;}throw new JSException($x408,152,29,\'<image>/05_string.js\');}$x405=JS::toObject($_search,$global);unset($x409,$W409,$S409,$U409);$x410=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x405,(string)\'exec\',152,29,\'<image>/05_string.js\');$x409=&$x410[0];list(,$W409,$S409,$U409)=$x410;if(!(is_object($x409)&&isset($x409->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x413=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',152,29,\'<image>/05_string.js\');$_TypeError=&$x413[0];list(,$WTypeError,$STypeError,$UTypeError)=$x413;$x414=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x415=$x414($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x415->class)&&$x415->class===\'Error\'){$x415->properties[\'file\']=\'<image>/05_string.js\';$x415->properties[\'line\']=152;$x415->properties[\'column\']=29;$x415->attributes[\'file\']=$x415->attributes[\'line\']=$x415->attributes[\'column\']=0;}throw new JSException($x415,152,29,\'<image>/05_string.js\');}$x411=$x409->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x412=$x411($global,$x405,$x409,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x412;$x404=!(((gettype($_match)===gettype(NULL)&&$_match===NULL))||(((is_float($_match)||is_int($_match))&&(is_float(NULL)||is_int(NULL)))&&$_match==NULL));if(!JS::toBoolean($x404,$global)){break;}unset($x416,$W416,$S416,$U416);$x417=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',153,16,\'<image>/05_string.js\');$x416=&$x417[0];list(,$W416,$S416,$U416)=$x417;if($Uindex){$global->properties[\'index\']=$_index;$_index=&$global->properties[\'index\'];}$_index=$x416;if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x419=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',154,40,\'<image>/05_string.js\');$_TypeError=&$x419[0];list(,$WTypeError,$STypeError,$UTypeError)=$x419;$x420=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x421=$x420($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x421->class)&&$x421->class===\'Error\'){$x421->properties[\'file\']=\'<image>/05_string.js\';$x421->properties[\'line\']=154;$x421->properties[\'column\']=40;$x421->attributes[\'file\']=$x421->attributes[\'line\']=$x421->attributes[\'column\']=0;}throw new JSException($x421,154,40,\'<image>/05_string.js\');}$x418=JS::toObject($_thisString,$global);unset($x422,$W422,$S422,$U422);$x423=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x418,(string)\'substring\',154,40,\'<image>/05_string.js\');$x422=&$x423[0];list(,$W422,$S422,$U422)=$x423;if(!(is_object($x422)&&isset($x422->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x426=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',154,40,\'<image>/05_string.js\');$_TypeError=&$x426[0];list(,$WTypeError,$STypeError,$UTypeError)=$x426;$x427=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x428=$x427($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x428->class)&&$x428->class===\'Error\'){$x428->properties[\'file\']=\'<image>/05_string.js\';$x428->properties[\'line\']=154;$x428->properties[\'column\']=40;$x428->attributes[\'file\']=$x428->attributes[\'line\']=$x428->attributes[\'column\']=0;}throw new JSException($x428,154,40,\'<image>/05_string.js\');}$x424=$x422->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x425=$x424($global,$x418,$x422,array($_lastIndex,$_index),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x425;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x429=JS::toPrimitive($_newString,$global);$x430=JS::toPrimitive($_s,$global);$_newString=(is_string($x429)||is_string($x430)?JS::toString($x429,$global).JS::toString($x430,$global):JS::toNumber($x429,$global)+JS::toNumber($x430,$global));unset($x433,$W433,$S433,$U433);$x434=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,155,28,\'<image>/05_string.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;unset($x435,$W435,$S435,$U435);$x436=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x433,(string)\'length\',155,31,\'<image>/05_string.js\');$x435=&$x436[0];list(,$W435,$S435,$U435)=$x436;$x431=JS::toPrimitive($_index,$global);$x432=JS::toPrimitive($x435,$global);if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=(is_string($x431)||is_string($x432)?JS::toString($x431,$global).JS::toString($x432,$global):JS::toNumber($x431,$global)+JS::toNumber($x432,$global));$x438=$_replace;$x438=($x438===JS::$undefined?\'undefined\':(is_int($x438)||is_float($x438)?\'number\':(is_bool($x438)?\'boolean\':(is_string($x438)?\'string\':(is_object($x438)&&isset($x438->call)?\'function\':\'object\')))));$x437=(((gettype($x438)===gettype(\'function\')&&$x438===\'function\'))||(((is_float($x438)||is_int($x438))&&(is_float(\'function\')||is_int(\'function\')))&&$x438==\'function\'));if(JS::toBoolean($x437,$global)){if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x440=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',158,14,\'<image>/05_string.js\');$_TypeError=&$x440[0];list(,$WTypeError,$STypeError,$UTypeError)=$x440;$x441=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x442=$x441($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x442->class)&&$x442->class===\'Error\'){$x442->properties[\'file\']=\'<image>/05_string.js\';$x442->properties[\'line\']=158;$x442->properties[\'column\']=14;$x442->attributes[\'file\']=$x442->attributes[\'line\']=$x442->attributes[\'column\']=0;}throw new JSException($x442,158,14,\'<image>/05_string.js\');}$x439=JS::toObject($_match,$global);unset($x443,$W443,$S443,$U443);$x444=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x439,(string)\'push\',158,14,\'<image>/05_string.js\');$x443=&$x444[0];list(,$W443,$S443,$U443)=$x444;unset($x445,$W445,$S445,$U445);$x446=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',158,20,\'<image>/05_string.js\');$x445=&$x446[0];list(,$W445,$S445,$U445)=$x446;if(!(is_object($x443)&&isset($x443->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x449=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',158,14,\'<image>/05_string.js\');$_TypeError=&$x449[0];list(,$WTypeError,$STypeError,$UTypeError)=$x449;$x450=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x451=$x450($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x451->class)&&$x451->class===\'Error\'){$x451->properties[\'file\']=\'<image>/05_string.js\';$x451->properties[\'line\']=158;$x451->properties[\'column\']=14;$x451->attributes[\'file\']=$x451->attributes[\'line\']=$x451->attributes[\'column\']=0;}throw new JSException($x451,158,14,\'<image>/05_string.js\');}$x447=$x443->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x448=$x447($global,$x439,$x443,array($x445),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x453=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',159,14,\'<image>/05_string.js\');$_TypeError=&$x453[0];list(,$WTypeError,$STypeError,$UTypeError)=$x453;$x454=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x455=$x454($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x455->class)&&$x455->class===\'Error\'){$x455->properties[\'file\']=\'<image>/05_string.js\';$x455->properties[\'line\']=159;$x455->properties[\'column\']=14;$x455->attributes[\'file\']=$x455->attributes[\'line\']=$x455->attributes[\'column\']=0;}throw new JSException($x455,159,14,\'<image>/05_string.js\');}$x452=JS::toObject($_match,$global);unset($x456,$W456,$S456,$U456);$x457=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x452,(string)\'push\',159,14,\'<image>/05_string.js\');$x456=&$x457[0];list(,$W456,$S456,$U456)=$x457;unset($x458,$W458,$S458,$U458);$x459=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'input\',159,20,\'<image>/05_string.js\');$x458=&$x459[0];list(,$W458,$S458,$U458)=$x459;if(!(is_object($x456)&&isset($x456->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x462=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',159,14,\'<image>/05_string.js\');$_TypeError=&$x462[0];list(,$WTypeError,$STypeError,$UTypeError)=$x462;$x463=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x464=$x463($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x464->class)&&$x464->class===\'Error\'){$x464->properties[\'file\']=\'<image>/05_string.js\';$x464->properties[\'line\']=159;$x464->properties[\'column\']=14;$x464->attributes[\'file\']=$x464->attributes[\'line\']=$x464->attributes[\'column\']=0;}throw new JSException($x464,159,14,\'<image>/05_string.js\');}$x460=$x456->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x461=$x460($global,$x452,$x456,array($x458),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!array_key_exists(\'index\',$_match->attributes)){unset($_match->properties[\'index\']);$x465=TRUE;}else if($_match->attributes[\'index\']&JS::CONFIGURABLE){unset($_match->properties[\'index\'],$_match->attributes[\'index\'],$_match->getters[\'index\'],$_match->setters[\'index\']);$x465=TRUE;}else{$x465=FALSE;}if(!array_key_exists(\'input\',$_match->attributes)){unset($_match->properties[\'input\']);$x466=TRUE;}else if($_match->attributes[\'input\']&JS::CONFIGURABLE){unset($_match->properties[\'input\'],$_match->attributes[\'input\'],$_match->getters[\'input\'],$_match->setters[\'input\']);$x466=TRUE;}else{$x466=FALSE;}unset($_String,$WString,$SString,$UString);$x467=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'String\',163,21,\'<image>/05_string.js\');$_String=&$x467[0];list(,$WString,$SString,$UString)=$x467;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x468=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',163,21,\'<image>/05_string.js\');$_ReferenceError=&$x468[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x468;$x469=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,21);$x470=$x469($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x470->class)&&$x470->class===\'Error\'){$x470->properties[\'file\']=\'<image>/05_string.js\';$x470->properties[\'line\']=163;$x470->properties[\'column\']=21;$x470->attributes[\'file\']=$x470->attributes[\'line\']=$x470->attributes[\'column\']=0;}throw new JSException($x470,163,21,\'<image>/05_string.js\');}if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x472=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',163,41,\'<image>/05_string.js\');$_TypeError=&$x472[0];list(,$WTypeError,$STypeError,$UTypeError)=$x472;$x473=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x474=$x473($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x474->class)&&$x474->class===\'Error\'){$x474->properties[\'file\']=\'<image>/05_string.js\';$x474->properties[\'line\']=163;$x474->properties[\'column\']=41;$x474->attributes[\'file\']=$x474->attributes[\'line\']=$x474->attributes[\'column\']=0;}throw new JSException($x474,163,41,\'<image>/05_string.js\');}$x471=JS::toObject($_replace,$global);unset($x475,$W475,$S475,$U475);$x476=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x471,(string)\'apply\',163,41,\'<image>/05_string.js\');$x475=&$x476[0];list(,$W475,$S475,$U475)=$x476;if(!(is_object($x475)&&isset($x475->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x479=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',163,41,\'<image>/05_string.js\');$_TypeError=&$x479[0];list(,$WTypeError,$STypeError,$UTypeError)=$x479;$x480=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x481=$x480($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x481->class)&&$x481->class===\'Error\'){$x481->properties[\'file\']=\'<image>/05_string.js\';$x481->properties[\'line\']=163;$x481->properties[\'column\']=41;$x481->attributes[\'file\']=$x481->attributes[\'line\']=$x481->attributes[\'column\']=0;}throw new JSException($x481,163,41,\'<image>/05_string.js\');}$x477=$x475->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x478=$x477($global,$x471,$x475,array(JS::$undefined,$_match),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x484=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',163,27,\'<image>/05_string.js\');$_TypeError=&$x484[0];list(,$WTypeError,$STypeError,$UTypeError)=$x484;$x485=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x486=$x485($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x486->class)&&$x486->class===\'Error\'){$x486->properties[\'file\']=\'<image>/05_string.js\';$x486->properties[\'line\']=163;$x486->properties[\'column\']=27;$x486->attributes[\'file\']=$x486->attributes[\'line\']=$x486->attributes[\'column\']=0;}throw new JSException($x486,163,27,\'<image>/05_string.js\');}$x482=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x483=$x482($global,$global,$_String,array($x478),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x483;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x487=JS::toPrimitive($_newString,$global);$x488=JS::toPrimitive($_s,$global);$_newString=(is_string($x487)||is_string($x488)?JS::toString($x487,$global).JS::toString($x488,$global):JS::toNumber($x487,$global)+JS::toNumber($x488,$global));}else{if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x490=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',166,32,\'<image>/05_string.js\');$_TypeError=&$x490[0];list(,$WTypeError,$STypeError,$UTypeError)=$x490;$x491=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x492=$x491($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x492->class)&&$x492->class===\'Error\'){$x492->properties[\'file\']=\'<image>/05_string.js\';$x492->properties[\'line\']=166;$x492->properties[\'column\']=32;$x492->attributes[\'file\']=$x492->attributes[\'line\']=$x492->attributes[\'column\']=0;}throw new JSException($x492,166,32,\'<image>/05_string.js\');}$x489=JS::toObject($_replace,$global);unset($x493,$W493,$S493,$U493);$x494=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x489,(string)\'replace\',166,32,\'<image>/05_string.js\');$x493=&$x494[0];list(,$W493,$S493,$U493)=$x494;unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x497=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',166,33,\'<image>/05_string.js\');$_RegExp=&$x497[0];list(,$WRegExp,$SRegExp,$URegExp)=$x497;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x498=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',166,33,\'<image>/05_string.js\');$_ReferenceError=&$x498[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x498;$x499=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x500=$x499($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x500->class)&&$x500->class===\'Error\'){$x500->properties[\'file\']=\'<image>/05_string.js\';$x500->properties[\'line\']=166;$x500->properties[\'column\']=33;$x500->attributes[\'file\']=$x500->attributes[\'line\']=$x500->attributes[\'column\']=0;}throw new JSException($x500,166,33,\'<image>/05_string.js\');}$x495=clone JS::$objectTemplate;unset($x501,$W501,$S501,$U501);$x502=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',166,33,\'<image>/05_string.js\');$x501=&$x502[0];list(,$W501,$S501,$U501)=$x502;$x496=$x501;$x495->prototype=$x496;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x505=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',166,33,\'<image>/05_string.js\');$_TypeError=&$x505[0];list(,$WTypeError,$STypeError,$UTypeError)=$x505;$x506=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x507=$x506($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x507->class)&&$x507->class===\'Error\'){$x507->properties[\'file\']=\'<image>/05_string.js\';$x507->properties[\'line\']=166;$x507->properties[\'column\']=33;$x507->attributes[\'file\']=$x507->attributes[\'line\']=$x507->attributes[\'column\']=0;}throw new JSException($x507,166,33,\'<image>/05_string.js\');}$x503=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x504=$x503($global,$x495,$_RegExp,array(\'\\\\$([$&]|[0-9]|[0-9][0-9])\',\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x496=$x504;if(is_object($x496)&&$x496!==JS::$undefined){$x495=$x496;}$x533=clone JS::$functionTemplate;$x533->call=\'_465e5538fcb402e27559db40bec8addd_15\';$x533->parameters=array(0=>\'_\',1=>\'c\',);$x533->scope=$scope;$x533->properties[\'prototype\']=clone JS::$objectTemplate;$x533->attributes[\'prototype\']=JS::WRITABLE;$x533->properties[\'prototype\']->properties[\'constructor\']=$x533;$x533->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x533->properties[\'length\']=2;$x533->attributes[\'length\']=0;if(!(is_object($x493)&&isset($x493->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x536=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',166,32,\'<image>/05_string.js\');$_TypeError=&$x536[0];list(,$WTypeError,$STypeError,$UTypeError)=$x536;$x537=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x538=$x537($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x538->class)&&$x538->class===\'Error\'){$x538->properties[\'file\']=\'<image>/05_string.js\';$x538->properties[\'line\']=166;$x538->properties[\'column\']=32;$x538->attributes[\'file\']=$x538->attributes[\'line\']=$x538->attributes[\'column\']=0;}throw new JSException($x538,166,32,\'<image>/05_string.js\');}$x534=$x493->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x535=$x534($global,$x489,$x493,array($x495,$x533),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x539=JS::toPrimitive($_newString,$global);$x540=JS::toPrimitive($x535,$global);$_newString=(is_string($x539)||is_string($x540)?JS::toString($x539,$global).JS::toString($x540,$global):JS::toNumber($x539,$global)+JS::toNumber($x540,$global));}unset($x541,$W541,$S541,$U541);$x542=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,(string)\'global\',179,14,\'<image>/05_string.js\');$x541=&$x542[0];list(,$W541,$S541,$U541)=$x542;if(JS::toBoolean((!JS::toBoolean($x541,$global)),$global)){break;}}if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x544=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',184,35,\'<image>/05_string.js\');$_TypeError=&$x544[0];list(,$WTypeError,$STypeError,$UTypeError)=$x544;$x545=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x546=$x545($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x546->class)&&$x546->class===\'Error\'){$x546->properties[\'file\']=\'<image>/05_string.js\';$x546->properties[\'line\']=184;$x546->properties[\'column\']=35;$x546->attributes[\'file\']=$x546->attributes[\'line\']=$x546->attributes[\'column\']=0;}throw new JSException($x546,184,35,\'<image>/05_string.js\');}$x543=JS::toObject($_thisString,$global);unset($x547,$W547,$S547,$U547);$x548=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x543,(string)\'substring\',184,35,\'<image>/05_string.js\');$x547=&$x548[0];list(,$W547,$S547,$U547)=$x548;unset($x549,$W549,$S549,$U549);$x550=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_thisString,(string)\'length\',184,57,\'<image>/05_string.js\');$x549=&$x550[0];list(,$W549,$S549,$U549)=$x550;if(!(is_object($x547)&&isset($x547->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x553=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',184,35,\'<image>/05_string.js\');$_TypeError=&$x553[0];list(,$WTypeError,$STypeError,$UTypeError)=$x553;$x554=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x555=$x554($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x555->class)&&$x555->class===\'Error\'){$x555->properties[\'file\']=\'<image>/05_string.js\';$x555->properties[\'line\']=184;$x555->properties[\'column\']=35;$x555->attributes[\'file\']=$x555->attributes[\'line\']=$x555->attributes[\'column\']=0;}throw new JSException($x555,184,35,\'<image>/05_string.js\');}$x551=$x547->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x552=$x551($global,$x543,$x547,array($_lastIndex,$x549),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x556=JS::toPrimitive($_newString,$global);$x557=JS::toPrimitive($x552,$global);$_newString=(is_string($x556)||is_string($x557)?JS::toString($x556,$global).JS::toString($x557,$global):JS::toNumber($x556,$global)+JS::toNumber($x557,$global));return$_newString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x570 =& $scope->properties['arguments'];
$x570->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x570->properties[$i] = $args[$i];
$x570->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_search) && isset($_search->class) &&$_search->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x573 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 191, 16, '<image>/05_string.js');
$_RegExp =& $x573[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x573;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x574 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 191, 16, '<image>/05_string.js');
$_ReferenceError =& $x574[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x574;
$x575 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 16);
$x576 = $x575($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x576->class) && $x576->class === 'Error') {$x576->properties['file'] = '<image>/05_string.js';$x576->properties['line'] = 191;$x576->properties['column'] = 16;$x576->attributes['file'] = $x576->attributes['line'] = $x576->attributes['column'] = 0; }
throw new JSException($x576, 191, 16, '<image>/05_string.js');
}
$x571 = clone JS::$objectTemplate;
unset($x577, $W577, $S577, $U577);
$x578 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 191, 12, '<image>/05_string.js');
$x577 =& $x578[0]; list(,$W577,$S577,$U577) = $x578;
$x572 = $x577;
$x571->prototype = $x572;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x581 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 191, 12, '<image>/05_string.js');
$_TypeError =& $x581[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x581;
$x582 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x583 = $x582($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x583->class) && $x583->class === 'Error') {$x583->properties['file'] = '<image>/05_string.js';$x583->properties['line'] = 191;$x583->properties['column'] = 12;$x583->attributes['file'] = $x583->attributes['line'] = $x583->attributes['column'] = 0; }
throw new JSException($x583, 191, 12, '<image>/05_string.js');
}
$x579 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x580 = $x579($global, $x571, $_RegExp, array($_search), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x572 = $x580;
if (is_object($x572) && $x572 !== JS::$undefined) { $x571 = $x572; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x571;;
};
unset($x584, $W584, $S584, $U584);
$x585 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, (string) 'lastIndex', 194, 29, '<image>/05_string.js');
$x584 =& $x585[0]; list(,$W584,$S584,$U584) = $x585;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x584;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x587 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 195, 22, '<image>/05_string.js');
$_TypeError =& $x587[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x587;
$x588 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x589 = $x588($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x589->class) && $x589->class === 'Error') {$x589->properties['file'] = '<image>/05_string.js';$x589->properties['line'] = 195;$x589->properties['column'] = 22;$x589->attributes['file'] = $x589->attributes['line'] = $x589->attributes['column'] = 0; }
throw new JSException($x589, 195, 22, '<image>/05_string.js');
}
$x586 = JS::toObject($_search, $global);
unset($x590, $W590, $S590, $U590);
$x591 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x586, (string) 'exec', 195, 22, '<image>/05_string.js');
$x590 =& $x591[0]; list(,$W590,$S590,$U590) = $x591;
if (!(is_object($x590) && isset($x590->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x594 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 195, 22, '<image>/05_string.js');
$_TypeError =& $x594[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x594;
$x595 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x596 = $x595($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x596->class) && $x596->class === 'Error') {$x596->properties['file'] = '<image>/05_string.js';$x596->properties['line'] = 195;$x596->properties['column'] = 22;$x596->attributes['file'] = $x596->attributes['line'] = $x596->attributes['column'] = 0; }
throw new JSException($x596, 195, 22, '<image>/05_string.js');
}
$x592 = $x590->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x593 = $x592($global, $x586, $x590, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = $x593;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x597 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 197, 21, '<image>/05_string.js');
$_TypeError =& $x597[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x597;
$x598 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x599 = $x598($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x599->class) && $x599->class === 'Error') {$x599->properties['file'] = '<image>/05_string.js';$x599->properties['line'] = 197;$x599->properties['column'] = 21;$x599->attributes['file'] = $x599->attributes['line'] = $x599->attributes['column'] = 0; }
throw new JSException($x599, 197, 21, '<image>/05_string.js');
}
$_search = JS::toObject($_search, $global);
unset($x600, $W600, $S600, $U600);
$x601 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_search, (string) 'lastIndexOf', 197, 21, '<image>/05_string.js');
$x600 =& $x601[0]; list(,$W600,$S600,$U600) = $x601;
if ($U600 && (!isset($_search->extensible) || $_search->extensible)) {$_search->properties['lastIndexOf'] = $x600; $x600 =& $_search->properties['lastIndexOf']; $_search->attributes['lastIndexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U600 = FALSE; $W600 = TRUE; }
if (isset($S600)) {
$x603 = $S600->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x604 = $x603($global, $_search, $S600, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x602 = $x604;
} else {
if (!$U600) {$x602 = $_savedLastIndex;if ($W600) { $x600 = $_savedLastIndex; }  }
else { $x602 = JS::$undefined; }
}
if (isset($_search->class) && $_search->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $_search->properties['length']) { $_search->properties['length'] = 'lastIndexOf' + 1; };
if (JS::toBoolean($_match, $global)) {
unset($x605, $W605, $S605, $U605);
$x606 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 200, 15, '<image>/05_string.js');
$x605 =& $x606[0]; list(,$W605,$S605,$U605) = $x606;
return $x605;;
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x570=&$scope->properties[\'arguments\'];$x570->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x570->properties[$i]=$args[$i];$x570->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_search)&&isset($_search->class)&&$_search->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x573=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',191,16,\'<image>/05_string.js\');$_RegExp=&$x573[0];list(,$WRegExp,$SRegExp,$URegExp)=$x573;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x574=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',191,16,\'<image>/05_string.js\');$_ReferenceError=&$x574[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x574;$x575=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,16);$x576=$x575($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x576->class)&&$x576->class===\'Error\'){$x576->properties[\'file\']=\'<image>/05_string.js\';$x576->properties[\'line\']=191;$x576->properties[\'column\']=16;$x576->attributes[\'file\']=$x576->attributes[\'line\']=$x576->attributes[\'column\']=0;}throw new JSException($x576,191,16,\'<image>/05_string.js\');}$x571=clone JS::$objectTemplate;unset($x577,$W577,$S577,$U577);$x578=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',191,12,\'<image>/05_string.js\');$x577=&$x578[0];list(,$W577,$S577,$U577)=$x578;$x572=$x577;$x571->prototype=$x572;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x581=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',191,12,\'<image>/05_string.js\');$_TypeError=&$x581[0];list(,$WTypeError,$STypeError,$UTypeError)=$x581;$x582=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x583=$x582($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x583->class)&&$x583->class===\'Error\'){$x583->properties[\'file\']=\'<image>/05_string.js\';$x583->properties[\'line\']=191;$x583->properties[\'column\']=12;$x583->attributes[\'file\']=$x583->attributes[\'line\']=$x583->attributes[\'column\']=0;}throw new JSException($x583,191,12,\'<image>/05_string.js\');}$x579=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x580=$x579($global,$x571,$_RegExp,array($_search),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x572=$x580;if(is_object($x572)&&$x572!==JS::$undefined){$x571=$x572;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x571;}unset($x584,$W584,$S584,$U584);$x585=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,(string)\'lastIndex\',194,29,\'<image>/05_string.js\');$x584=&$x585[0];list(,$W584,$S584,$U584)=$x585;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x584;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x587=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',195,22,\'<image>/05_string.js\');$_TypeError=&$x587[0];list(,$WTypeError,$STypeError,$UTypeError)=$x587;$x588=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x589=$x588($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x589->class)&&$x589->class===\'Error\'){$x589->properties[\'file\']=\'<image>/05_string.js\';$x589->properties[\'line\']=195;$x589->properties[\'column\']=22;$x589->attributes[\'file\']=$x589->attributes[\'line\']=$x589->attributes[\'column\']=0;}throw new JSException($x589,195,22,\'<image>/05_string.js\');}$x586=JS::toObject($_search,$global);unset($x590,$W590,$S590,$U590);$x591=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x586,(string)\'exec\',195,22,\'<image>/05_string.js\');$x590=&$x591[0];list(,$W590,$S590,$U590)=$x591;if(!(is_object($x590)&&isset($x590->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x594=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',195,22,\'<image>/05_string.js\');$_TypeError=&$x594[0];list(,$WTypeError,$STypeError,$UTypeError)=$x594;$x595=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x596=$x595($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x596->class)&&$x596->class===\'Error\'){$x596->properties[\'file\']=\'<image>/05_string.js\';$x596->properties[\'line\']=195;$x596->properties[\'column\']=22;$x596->attributes[\'file\']=$x596->attributes[\'line\']=$x596->attributes[\'column\']=0;}throw new JSException($x596,195,22,\'<image>/05_string.js\');}$x592=$x590->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x593=$x592($global,$x586,$x590,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=$x593;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x597=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',197,21,\'<image>/05_string.js\');$_TypeError=&$x597[0];list(,$WTypeError,$STypeError,$UTypeError)=$x597;$x598=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x599=$x598($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x599->class)&&$x599->class===\'Error\'){$x599->properties[\'file\']=\'<image>/05_string.js\';$x599->properties[\'line\']=197;$x599->properties[\'column\']=21;$x599->attributes[\'file\']=$x599->attributes[\'line\']=$x599->attributes[\'column\']=0;}throw new JSException($x599,197,21,\'<image>/05_string.js\');}$_search=JS::toObject($_search,$global);unset($x600,$W600,$S600,$U600);$x601=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_search,(string)\'lastIndexOf\',197,21,\'<image>/05_string.js\');$x600=&$x601[0];list(,$W600,$S600,$U600)=$x601;if($U600&&(!isset($_search->extensible)||$_search->extensible)){$_search->properties[\'lastIndexOf\']=$x600;$x600=&$_search->properties[\'lastIndexOf\'];$_search->attributes[\'lastIndexOf\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U600=FALSE;$W600=TRUE;}if(isset($S600)){$x603=$S600->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x604=$x603($global,$_search,$S600,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x602=$x604;}else{if(!$U600){$x602=$_savedLastIndex;if($W600){$x600=$_savedLastIndex;}}else{$x602=JS::$undefined;}}if(isset($_search->class)&&$_search->class===\'Array\'&&is_int(\'lastIndexOf\')&&\'lastIndexOf\'>=$_search->properties[\'length\']){$_search->properties[\'length\']=\'lastIndexOf\'+1;}if(JS::toBoolean($_match,$global)){unset($x605,$W605,$S605,$U605);$x606=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',200,15,\'<image>/05_string.js\');$x605=&$x606[0];list(,$W605,$S605,$U605)=$x606;return$x605;}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x619 =& $scope->properties['arguments'];
$x619->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x619->properties[$i] = $args[$i];
$x619->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = strlen($leThis->value);
$x620 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x620, $global)) {
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = 0;;
};
$x621 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x621, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x622 = JS::toPrimitive($_start, $global);
$x623 = JS::toPrimitive(0, $global);
$x624 = (is_string($x622) && is_string($x623) ? strcmp($x622, $x623) < 0 : (!is_nan($x625 = JS::toNumber($x622, $global)) && !is_nan($x626 = JS::toNumber($x623, $global)) && $x625 < $x626));
if (JS::toBoolean($x624, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x627 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 218, 11, '<image>/05_string.js');
$_Math =& $x627[0]; list(,$WMath,$SMath,$UMath) = $x627;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x628 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 218, 11, '<image>/05_string.js');
$_ReferenceError =& $x628[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x628;
$x629 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 11);
$x630 = $x629($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x630->class) && $x630->class === 'Error') {$x630->properties['file'] = '<image>/05_string.js';$x630->properties['line'] = 218;$x630->properties['column'] = 11;$x630->attributes['file'] = $x630->attributes['line'] = $x630->attributes['column'] = 0; }
throw new JSException($x630, 218, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x632 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 218, 19, '<image>/05_string.js');
$_TypeError =& $x632[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x632;
$x633 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x634 = $x633($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x634->class) && $x634->class === 'Error') {$x634->properties['file'] = '<image>/05_string.js';$x634->properties['line'] = 218;$x634->properties['column'] = 19;$x634->attributes['file'] = $x634->attributes['line'] = $x634->attributes['column'] = 0; }
throw new JSException($x634, 218, 19, '<image>/05_string.js');
}
$x631 = JS::toObject($_Math, $global);
unset($x635, $W635, $S635, $U635);
$x636 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x631, (string) 'max', 218, 19, '<image>/05_string.js');
$x635 =& $x636[0]; list(,$W635,$S635,$U635) = $x636;
$x637 = JS::toPrimitive($_start, $global);
$x638 = JS::toPrimitive($_length, $global);
if (!(is_object($x635) && isset($x635->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x641 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 218, 19, '<image>/05_string.js');
$_TypeError =& $x641[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x641;
$x642 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x643 = $x642($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x643->class) && $x643->class === 'Error') {$x643->properties['file'] = '<image>/05_string.js';$x643->properties['line'] = 218;$x643->properties['column'] = 19;$x643->attributes['file'] = $x643->attributes['line'] = $x643->attributes['column'] = 0; }
throw new JSException($x643, 218, 19, '<image>/05_string.js');
}
$x639 = $x635->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x640 = $x639($global, $x631, $x635, array((is_string($x637) || is_string($x638) ? JS::toString($x637, $global) . JS::toString($x638, $global) : JS::toNumber($x637, $global) + JS::toNumber($x638, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x640;;
};
$x644 = JS::toPrimitive($_end, $global);
$x645 = JS::toPrimitive(0, $global);
$x646 = (is_string($x644) && is_string($x645) ? strcmp($x644, $x645) < 0 : (!is_nan($x647 = JS::toNumber($x644, $global)) && !is_nan($x648 = JS::toNumber($x645, $global)) && $x647 < $x648));
if (JS::toBoolean($x646, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x649 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 222, 9, '<image>/05_string.js');
$_Math =& $x649[0]; list(,$WMath,$SMath,$UMath) = $x649;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x650 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 222, 9, '<image>/05_string.js');
$_ReferenceError =& $x650[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x650;
$x651 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 9);
$x652 = $x651($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x652->class) && $x652->class === 'Error') {$x652->properties['file'] = '<image>/05_string.js';$x652->properties['line'] = 222;$x652->properties['column'] = 9;$x652->attributes['file'] = $x652->attributes['line'] = $x652->attributes['column'] = 0; }
throw new JSException($x652, 222, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x654 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 222, 17, '<image>/05_string.js');
$_TypeError =& $x654[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x654;
$x655 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x656 = $x655($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x656->class) && $x656->class === 'Error') {$x656->properties['file'] = '<image>/05_string.js';$x656->properties['line'] = 222;$x656->properties['column'] = 17;$x656->attributes['file'] = $x656->attributes['line'] = $x656->attributes['column'] = 0; }
throw new JSException($x656, 222, 17, '<image>/05_string.js');
}
$x653 = JS::toObject($_Math, $global);
unset($x657, $W657, $S657, $U657);
$x658 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x653, (string) 'max', 222, 17, '<image>/05_string.js');
$x657 =& $x658[0]; list(,$W657,$S657,$U657) = $x658;
$x659 = JS::toPrimitive($_end, $global);
$x660 = JS::toPrimitive($_length, $global);
if (!(is_object($x657) && isset($x657->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x663 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 222, 17, '<image>/05_string.js');
$_TypeError =& $x663[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x663;
$x664 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x665 = $x664($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x665->class) && $x665->class === 'Error') {$x665->properties['file'] = '<image>/05_string.js';$x665->properties['line'] = 222;$x665->properties['column'] = 17;$x665->attributes['file'] = $x665->attributes['line'] = $x665->attributes['column'] = 0; }
throw new JSException($x665, 222, 17, '<image>/05_string.js');
}
$x661 = $x657->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x662 = $x661($global, $x653, $x657, array((is_string($x659) || is_string($x660) ? JS::toString($x659, $global) . JS::toString($x660, $global) : JS::toNumber($x659, $global) + JS::toNumber($x660, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x662;;
};
return (string) substr($leThis->value,$_start, max($_end-$_start, 0));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x619=&$scope->properties[\'arguments\'];$x619->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x619->properties[$i]=$args[$i];$x619->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x620=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x620,$global)){if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=0;}$x621=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x621,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x622=JS::toPrimitive($_start,$global);$x623=JS::toPrimitive(0,$global);$x624=(is_string($x622)&&is_string($x623)?strcmp($x622,$x623)<0:(!is_nan($x625=JS::toNumber($x622,$global))&&!is_nan($x626=JS::toNumber($x623,$global))&&$x625<$x626));if(JS::toBoolean($x624,$global)){unset($_Math,$WMath,$SMath,$UMath);$x627=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',218,11,\'<image>/05_string.js\');$_Math=&$x627[0];list(,$WMath,$SMath,$UMath)=$x627;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x628=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',218,11,\'<image>/05_string.js\');$_ReferenceError=&$x628[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x628;$x629=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,11);$x630=$x629($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x630->class)&&$x630->class===\'Error\'){$x630->properties[\'file\']=\'<image>/05_string.js\';$x630->properties[\'line\']=218;$x630->properties[\'column\']=11;$x630->attributes[\'file\']=$x630->attributes[\'line\']=$x630->attributes[\'column\']=0;}throw new JSException($x630,218,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x632=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',218,19,\'<image>/05_string.js\');$_TypeError=&$x632[0];list(,$WTypeError,$STypeError,$UTypeError)=$x632;$x633=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x634=$x633($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x634->class)&&$x634->class===\'Error\'){$x634->properties[\'file\']=\'<image>/05_string.js\';$x634->properties[\'line\']=218;$x634->properties[\'column\']=19;$x634->attributes[\'file\']=$x634->attributes[\'line\']=$x634->attributes[\'column\']=0;}throw new JSException($x634,218,19,\'<image>/05_string.js\');}$x631=JS::toObject($_Math,$global);unset($x635,$W635,$S635,$U635);$x636=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x631,(string)\'max\',218,19,\'<image>/05_string.js\');$x635=&$x636[0];list(,$W635,$S635,$U635)=$x636;$x637=JS::toPrimitive($_start,$global);$x638=JS::toPrimitive($_length,$global);if(!(is_object($x635)&&isset($x635->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x641=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',218,19,\'<image>/05_string.js\');$_TypeError=&$x641[0];list(,$WTypeError,$STypeError,$UTypeError)=$x641;$x642=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x643=$x642($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x643->class)&&$x643->class===\'Error\'){$x643->properties[\'file\']=\'<image>/05_string.js\';$x643->properties[\'line\']=218;$x643->properties[\'column\']=19;$x643->attributes[\'file\']=$x643->attributes[\'line\']=$x643->attributes[\'column\']=0;}throw new JSException($x643,218,19,\'<image>/05_string.js\');}$x639=$x635->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x640=$x639($global,$x631,$x635,array((is_string($x637)||is_string($x638)?JS::toString($x637,$global).JS::toString($x638,$global):JS::toNumber($x637,$global)+JS::toNumber($x638,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x640;}$x644=JS::toPrimitive($_end,$global);$x645=JS::toPrimitive(0,$global);$x646=(is_string($x644)&&is_string($x645)?strcmp($x644,$x645)<0:(!is_nan($x647=JS::toNumber($x644,$global))&&!is_nan($x648=JS::toNumber($x645,$global))&&$x647<$x648));if(JS::toBoolean($x646,$global)){unset($_Math,$WMath,$SMath,$UMath);$x649=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',222,9,\'<image>/05_string.js\');$_Math=&$x649[0];list(,$WMath,$SMath,$UMath)=$x649;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x650=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',222,9,\'<image>/05_string.js\');$_ReferenceError=&$x650[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x650;$x651=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,9);$x652=$x651($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x652->class)&&$x652->class===\'Error\'){$x652->properties[\'file\']=\'<image>/05_string.js\';$x652->properties[\'line\']=222;$x652->properties[\'column\']=9;$x652->attributes[\'file\']=$x652->attributes[\'line\']=$x652->attributes[\'column\']=0;}throw new JSException($x652,222,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x654=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',222,17,\'<image>/05_string.js\');$_TypeError=&$x654[0];list(,$WTypeError,$STypeError,$UTypeError)=$x654;$x655=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x656=$x655($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x656->class)&&$x656->class===\'Error\'){$x656->properties[\'file\']=\'<image>/05_string.js\';$x656->properties[\'line\']=222;$x656->properties[\'column\']=17;$x656->attributes[\'file\']=$x656->attributes[\'line\']=$x656->attributes[\'column\']=0;}throw new JSException($x656,222,17,\'<image>/05_string.js\');}$x653=JS::toObject($_Math,$global);unset($x657,$W657,$S657,$U657);$x658=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x653,(string)\'max\',222,17,\'<image>/05_string.js\');$x657=&$x658[0];list(,$W657,$S657,$U657)=$x658;$x659=JS::toPrimitive($_end,$global);$x660=JS::toPrimitive($_length,$global);if(!(is_object($x657)&&isset($x657->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x663=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',222,17,\'<image>/05_string.js\');$_TypeError=&$x663[0];list(,$WTypeError,$STypeError,$UTypeError)=$x663;$x664=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x665=$x664($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x665->class)&&$x665->class===\'Error\'){$x665->properties[\'file\']=\'<image>/05_string.js\';$x665->properties[\'line\']=222;$x665->properties[\'column\']=17;$x665->attributes[\'file\']=$x665->attributes[\'line\']=$x665->attributes[\'column\']=0;}throw new JSException($x665,222,17,\'<image>/05_string.js\');}$x661=$x657->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x662=$x661($global,$x653,$x657,array((is_string($x659)||is_string($x660)?JS::toString($x659,$global).JS::toString($x660,$global):JS::toNumber($x659,$global)+JS::toNumber($x660,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x662;}return(string)substr($leThis->value,$_start,max($_end-$_start,0));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x678 =& $scope->properties['arguments'];
$x678->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x678->properties[$i] = $args[$i];
$x678->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$scope->properties['limit'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_limit =& $scope->properties['limit'];
$Ulimit = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x679 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x679, $global)) {
$x680 = clone JS::$arrayTemplate;
$x680->properties['length'] = 1;
$x680->attributes['length'] = JS::WRITABLE;
$x680->properties[0] = $leThis->value;
$x680->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x680;;
};
$x681 = (((gettype($_separator) === gettype('') && $_separator === ''))|| (((is_float($_separator) || is_int($_separator)) && (is_float('') || is_int(''))) && $_separator == ''));
if (JS::toBoolean($x681, $global)) {
$x682 = clone JS::$arrayTemplate;
$x682->properties['length'] = 0;
$x682->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x682;
for ($x683 = 0;; ++$x683) {
if ($x683 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x684, $W684, $S684, $U684);
$x685 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 236, 27, '<image>/05_string.js');
$x684 =& $x685[0]; list(,$W684,$S684,$U684) = $x685;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x684;
}
if ($x683 !== 0) {
$x686 = ++$_i;
}
$x687 = JS::toPrimitive($_i, $global);
$x688 = JS::toPrimitive($_l, $global);
$x689 = (is_string($x687) && is_string($x688) ? strcmp($x687, $x688) < 0 : (!is_nan($x690 = JS::toNumber($x687, $global)) && !is_nan($x691 = JS::toNumber($x688, $global)) && $x690 < $x691));
if (!JS::toBoolean($x689, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x693 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 237, 20, '<image>/05_string.js');
$_TypeError =& $x693[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x693;
$x694 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x695 = $x694($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x695->class) && $x695->class === 'Error') {$x695->properties['file'] = '<image>/05_string.js';$x695->properties['line'] = 237;$x695->properties['column'] = 20;$x695->attributes['file'] = $x695->attributes['line'] = $x695->attributes['column'] = 0; }
throw new JSException($x695, 237, 20, '<image>/05_string.js');
}
$x692 = JS::toObject($_returnArray, $global);
unset($x696, $W696, $S696, $U696);
$x697 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x692, (string) 'push', 237, 20, '<image>/05_string.js');
$x696 =& $x697[0]; list(,$W696,$S696,$U696) = $x697;
if (!(is_object($x696) && isset($x696->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x700 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 237, 20, '<image>/05_string.js');
$_TypeError =& $x700[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x700;
$x701 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x702 = $x701($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x702->class) && $x702->class === 'Error') {$x702->properties['file'] = '<image>/05_string.js';$x702->properties['line'] = 237;$x702->properties['column'] = 20;$x702->attributes['file'] = $x702->attributes['line'] = $x702->attributes['column'] = 0; }
throw new JSException($x702, 237, 20, '<image>/05_string.js');
}
$x698 = $x696->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x699 = $x698($global, $x692, $x696, array((string) substr($leThis->value,$_i, 1)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;;
};
$x704 = $_separator;
$x704 = ($x704 === JS::$undefined ? 'undefined' : (is_int($x704) || is_float($x704) ? 'number' : (is_bool($x704) ? 'boolean' : (is_string($x704) ? 'string' : (is_object($x704) && isset($x704->call) ? 'function' : 'object')))));
$x703 = (((gettype($x704) === gettype('string') && $x704 === 'string'))|| (((is_float($x704) || is_int($x704)) && (is_float('string') || is_int('string'))) && $x704 == 'string'));
if (JS::toBoolean($x703, $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x707 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 244, 19, '<image>/05_string.js');
$_RegExp =& $x707[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x707;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x708 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 244, 19, '<image>/05_string.js');
$_ReferenceError =& $x708[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x708;
$x709 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 19);
$x710 = $x709($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x710->class) && $x710->class === 'Error') {$x710->properties['file'] = '<image>/05_string.js';$x710->properties['line'] = 244;$x710->properties['column'] = 19;$x710->attributes['file'] = $x710->attributes['line'] = $x710->attributes['column'] = 0; }
throw new JSException($x710, 244, 19, '<image>/05_string.js');
}
$x705 = clone JS::$objectTemplate;
unset($x711, $W711, $S711, $U711);
$x712 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 244, 15, '<image>/05_string.js');
$x711 =& $x712[0]; list(,$W711,$S711,$U711) = $x712;
$x706 = $x711;
$x705->prototype = $x706;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x715 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 244, 15, '<image>/05_string.js');
$_TypeError =& $x715[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x715;
$x716 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x717 = $x716($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x717->class) && $x717->class === 'Error') {$x717->properties['file'] = '<image>/05_string.js';$x717->properties['line'] = 244;$x717->properties['column'] = 15;$x717->attributes['file'] = $x717->attributes['line'] = $x717->attributes['column'] = 0; }
throw new JSException($x717, 244, 15, '<image>/05_string.js');
}
$x713 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x714 = $x713($global, $x705, $_RegExp, array(preg_quote(JS::toString($_separator, $global), '/'), 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x706 = $x714;
if (is_object($x706) && $x706 !== JS::$undefined) { $x705 = $x706; }
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x705;;
};
$x718 = clone JS::$arrayTemplate;
$x718->properties['length'] = 0;
$x718->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x718;
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['lastIndex'] = JS::$undefined; $_lastIndex =& $scope->properties['lastIndex'];
$UlastIndex = FALSE;
$_lastIndex = 0;
$scope->properties['index'] = JS::$undefined; $_index =& $scope->properties['index'];
$Uindex = FALSE;
$_index = JS::$undefined;
$scope->properties['thisString'] = JS::$undefined; $_thisString =& $scope->properties['thisString'];
$UthisString = FALSE;
$_thisString = $leThis->value;
unset($x719, $W719, $S719, $U719);
$x720 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, (string) 'lastIndex', 248, 29, '<image>/05_string.js');
$x719 =& $x720[0]; list(,$W719,$S719,$U719) = $x720;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x719;
unset($x721, $W721, $S721, $U721);
$x722 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, (string) 'global', 248, 64, '<image>/05_string.js');
$x721 =& $x722[0]; list(,$W721,$S721,$U721) = $x722;
$scope->properties['savedGlobal'] = JS::$undefined; $_savedGlobal =& $scope->properties['savedGlobal'];
$UsavedGlobal = FALSE;
$_savedGlobal = $x721;
$_separator->properties['global'] = TRUE;
$x723 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x723, $global)) {
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x724 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Infinity', 253, 11, '<image>/05_string.js');
$_Infinity =& $x724[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x724;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x725 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 253, 11, '<image>/05_string.js');
$_ReferenceError =& $x725[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x725;
$x726 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 253, 11);
$x727 = $x726($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x727->class) && $x727->class === 'Error') {$x727->properties['file'] = '<image>/05_string.js';$x727->properties['line'] = 253;$x727->properties['column'] = 11;$x727->attributes['file'] = $x727->attributes['line'] = $x727->attributes['column'] = 0; }
throw new JSException($x727, 253, 11, '<image>/05_string.js');
}
if ($Ulimit) {$global->properties['limit'] = $_limit; $_limit =& $global->properties['limit']; }
$_limit = $_Infinity;;
};
for (;;) {
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x731 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 256, 32, '<image>/05_string.js');
$_TypeError =& $x731[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x731;
$x732 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x733 = $x732($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x733->class) && $x733->class === 'Error') {$x733->properties['file'] = '<image>/05_string.js';$x733->properties['line'] = 256;$x733->properties['column'] = 32;$x733->attributes['file'] = $x733->attributes['line'] = $x733->attributes['column'] = 0; }
throw new JSException($x733, 256, 32, '<image>/05_string.js');
}
$x730 = JS::toObject($_separator, $global);
unset($x734, $W734, $S734, $U734);
$x735 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x730, (string) 'exec', 256, 32, '<image>/05_string.js');
$x734 =& $x735[0]; list(,$W734,$S734,$U734) = $x735;
if (!(is_object($x734) && isset($x734->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x738 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 256, 32, '<image>/05_string.js');
$_TypeError =& $x738[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x738;
$x739 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x740 = $x739($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x740->class) && $x740->class === 'Error') {$x740->properties['file'] = '<image>/05_string.js';$x740->properties['line'] = 256;$x740->properties['column'] = 32;$x740->attributes['file'] = $x740->attributes['line'] = $x740->attributes['column'] = 0; }
throw new JSException($x740, 256, 32, '<image>/05_string.js');
}
$x736 = $x734->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x737 = $x736($global, $x730, $x734, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x737;
$x729 = $_match;
if (JS::toBoolean($x729, $global)) {
$x744 = --$_limit;
$x741 = JS::toPrimitive($x744, $global);
$x742 = JS::toPrimitive(0, $global);
$x743 = (is_string($x742) && is_string($x741) ? strcmp($x742, $x741) < 0 : (!is_nan($x745 = JS::toNumber($x742, $global)) && !is_nan($x746 = JS::toNumber($x741, $global)) && $x745 < $x746));
$x729 = $x743; }
$x728 = $x729;
if (JS::toBoolean($x728, $global)) {
unset($x750, $W750, $S750, $U750);
$x751 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 256, 80, '<image>/05_string.js');
$x750 =& $x751[0]; list(,$W750,$S750,$U750) = $x751;
$x747 = JS::toPrimitive($_lastIndex, $global);
$x748 = JS::toPrimitive($x750, $global);
$x749 = (is_string($x747) && is_string($x748) ? strcmp($x747, $x748) < 0 : (!is_nan($x752 = JS::toNumber($x747, $global)) && !is_nan($x753 = JS::toNumber($x748, $global)) && $x752 < $x753));
$x728 = $x749; }
if (!JS::toBoolean($x728, $global)) { break; }

unset($x756, $W756, $S756, $U756);
$x757 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 257, 12, '<image>/05_string.js');
$x756 =& $x757[0]; list(,$W756,$S756,$U756) = $x757;
$x755 = (((gettype($x756) === gettype('') && $x756 === ''))|| (((is_float($x756) || is_int($x756)) && (is_float('') || is_int(''))) && $x756 == ''));
$x754 = $x755;
if (JS::toBoolean($x754, $global)) {
unset($x759, $W759, $S759, $U759);
$x760 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 257, 31, '<image>/05_string.js');
$x759 =& $x760[0]; list(,$W759,$S759,$U759) = $x760;
$x758 = (((gettype($x759) === gettype($_lastIndex) && $x759 === $_lastIndex))|| (((is_float($x759) || is_int($x759)) && (is_float($_lastIndex) || is_int($_lastIndex))) && $x759 == $_lastIndex));
$x754 = $x758; }
if (JS::toBoolean($x754, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x762 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 20, '<image>/05_string.js');
$_TypeError =& $x762[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x762;
$x763 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x764 = $x763($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x764->class) && $x764->class === 'Error') {$x764->properties['file'] = '<image>/05_string.js';$x764->properties['line'] = 258;$x764->properties['column'] = 20;$x764->attributes['file'] = $x764->attributes['line'] = $x764->attributes['column'] = 0; }
throw new JSException($x764, 258, 20, '<image>/05_string.js');
}
$x761 = JS::toObject($_returnArray, $global);
unset($x765, $W765, $S765, $U765);
$x766 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x761, (string) 'push', 258, 20, '<image>/05_string.js');
$x765 =& $x766[0]; list(,$W765,$S765,$U765) = $x766;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x768 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 35, '<image>/05_string.js');
$_TypeError =& $x768[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x768;
$x769 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x770 = $x769($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x770->class) && $x770->class === 'Error') {$x770->properties['file'] = '<image>/05_string.js';$x770->properties['line'] = 258;$x770->properties['column'] = 35;$x770->attributes['file'] = $x770->attributes['line'] = $x770->attributes['column'] = 0; }
throw new JSException($x770, 258, 35, '<image>/05_string.js');
}
$x767 = JS::toObject($leThis, $global);
unset($x771, $W771, $S771, $U771);
$x772 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x767, (string) 'substring', 258, 35, '<image>/05_string.js');
$x771 =& $x772[0]; list(,$W771,$S771,$U771) = $x772;
$x773 = JS::toPrimitive($_lastIndex, $global);
$x774 = JS::toPrimitive(1, $global);
if (!(is_object($x771) && isset($x771->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x777 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 35, '<image>/05_string.js');
$_TypeError =& $x777[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x777;
$x778 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x779 = $x778($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x779->class) && $x779->class === 'Error') {$x779->properties['file'] = '<image>/05_string.js';$x779->properties['line'] = 258;$x779->properties['column'] = 35;$x779->attributes['file'] = $x779->attributes['line'] = $x779->attributes['column'] = 0; }
throw new JSException($x779, 258, 35, '<image>/05_string.js');
}
$x775 = $x771->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x776 = $x775($global, $x767, $x771, array($_lastIndex, (is_string($x773) || is_string($x774) ? JS::toString($x773, $global) . JS::toString($x774, $global) : JS::toNumber($x773, $global) + JS::toNumber($x774, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x765) && isset($x765->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x782 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 20, '<image>/05_string.js');
$_TypeError =& $x782[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x782;
$x783 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x784 = $x783($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x784->class) && $x784->class === 'Error') {$x784->properties['file'] = '<image>/05_string.js';$x784->properties['line'] = 258;$x784->properties['column'] = 20;$x784->attributes['file'] = $x784->attributes['line'] = $x784->attributes['column'] = 0; }
throw new JSException($x784, 258, 20, '<image>/05_string.js');
}
$x780 = $x765->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x781 = $x780($global, $x761, $x765, array($x776), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x785 = ++$_lastIndex;
unset($x786, $W786, $S786, $U786);
$x787 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, (string) 'lastIndex', 260, 15, '<image>/05_string.js');
$x786 =& $x787[0]; list(,$W786,$S786,$U786) = $x787;
$x788 = ++$x786;;
}
else {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x790 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 20, '<image>/05_string.js');
$_TypeError =& $x790[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x790;
$x791 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x792 = $x791($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x792->class) && $x792->class === 'Error') {$x792->properties['file'] = '<image>/05_string.js';$x792->properties['line'] = 263;$x792->properties['column'] = 20;$x792->attributes['file'] = $x792->attributes['line'] = $x792->attributes['column'] = 0; }
throw new JSException($x792, 263, 20, '<image>/05_string.js');
}
$x789 = JS::toObject($_returnArray, $global);
unset($x793, $W793, $S793, $U793);
$x794 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x789, (string) 'push', 263, 20, '<image>/05_string.js');
$x793 =& $x794[0]; list(,$W793,$S793,$U793) = $x794;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x796 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 35, '<image>/05_string.js');
$_TypeError =& $x796[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x796;
$x797 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x798 = $x797($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x798->class) && $x798->class === 'Error') {$x798->properties['file'] = '<image>/05_string.js';$x798->properties['line'] = 263;$x798->properties['column'] = 35;$x798->attributes['file'] = $x798->attributes['line'] = $x798->attributes['column'] = 0; }
throw new JSException($x798, 263, 35, '<image>/05_string.js');
}
$x795 = JS::toObject($leThis, $global);
unset($x799, $W799, $S799, $U799);
$x800 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x795, (string) 'substring', 263, 35, '<image>/05_string.js');
$x799 =& $x800[0]; list(,$W799,$S799,$U799) = $x800;
unset($x801, $W801, $S801, $U801);
$x802 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 263, 52, '<image>/05_string.js');
$x801 =& $x802[0]; list(,$W801,$S801,$U801) = $x802;
if (!(is_object($x799) && isset($x799->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x805 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 35, '<image>/05_string.js');
$_TypeError =& $x805[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x805;
$x806 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x807 = $x806($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x807->class) && $x807->class === 'Error') {$x807->properties['file'] = '<image>/05_string.js';$x807->properties['line'] = 263;$x807->properties['column'] = 35;$x807->attributes['file'] = $x807->attributes['line'] = $x807->attributes['column'] = 0; }
throw new JSException($x807, 263, 35, '<image>/05_string.js');
}
$x803 = $x799->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x804 = $x803($global, $x795, $x799, array($_lastIndex, $x801), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x793) && isset($x793->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x810 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 20, '<image>/05_string.js');
$_TypeError =& $x810[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x810;
$x811 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x812 = $x811($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x812->class) && $x812->class === 'Error') {$x812->properties['file'] = '<image>/05_string.js';$x812->properties['line'] = 263;$x812->properties['column'] = 20;$x812->attributes['file'] = $x812->attributes['line'] = $x812->attributes['column'] = 0; }
throw new JSException($x812, 263, 20, '<image>/05_string.js');
}
$x808 = $x793->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x809 = $x808($global, $x789, $x793, array($x804), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
for ($x813 = 0;; ++$x813) {
if ($x813 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x814, $W814, $S814, $U814);
$x815 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'length', 265, 29, '<image>/05_string.js');
$x814 =& $x815[0]; list(,$W814,$S814,$U814) = $x815;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x814;
}
if ($x813 !== 0) {
$x816 = ++$_i;
}
$x817 = JS::toPrimitive($_i, $global);
$x818 = JS::toPrimitive($_l, $global);
$x819 = (is_string($x817) && is_string($x818) ? strcmp($x817, $x818) < 0 : (!is_nan($x820 = JS::toNumber($x817, $global)) && !is_nan($x821 = JS::toNumber($x818, $global)) && $x820 < $x821));
if (!JS::toBoolean($x819, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x823 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 266, 21, '<image>/05_string.js');
$_TypeError =& $x823[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x823;
$x824 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x825 = $x824($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x825->class) && $x825->class === 'Error') {$x825->properties['file'] = '<image>/05_string.js';$x825->properties['line'] = 266;$x825->properties['column'] = 21;$x825->attributes['file'] = $x825->attributes['line'] = $x825->attributes['column'] = 0; }
throw new JSException($x825, 266, 21, '<image>/05_string.js');
}
$x822 = JS::toObject($_returnArray, $global);
unset($x826, $W826, $S826, $U826);
$x827 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x822, (string) 'push', 266, 21, '<image>/05_string.js');
$x826 =& $x827[0]; list(,$W826,$S826,$U826) = $x827;
unset($x828, $W828, $S828, $U828);
$x829 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) $_i, 266, 27, '<image>/05_string.js');
$x828 =& $x829[0]; list(,$W828,$S828,$U828) = $x829;
if (!(is_object($x826) && isset($x826->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x832 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 266, 21, '<image>/05_string.js');
$_TypeError =& $x832[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x832;
$x833 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x834 = $x833($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x834->class) && $x834->class === 'Error') {$x834->properties['file'] = '<image>/05_string.js';$x834->properties['line'] = 266;$x834->properties['column'] = 21;$x834->attributes['file'] = $x834->attributes['line'] = $x834->attributes['column'] = 0; }
throw new JSException($x834, 266, 21, '<image>/05_string.js');
}
$x830 = $x826->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x831 = $x830($global, $x822, $x826, array($x828), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x837, $W837, $S837, $U837);
$x838 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 269, 21, '<image>/05_string.js');
$x837 =& $x838[0]; list(,$W837,$S837,$U837) = $x838;
unset($x839, $W839, $S839, $U839);
$x840 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 269, 35, '<image>/05_string.js');
$x839 =& $x840[0]; list(,$W839,$S839,$U839) = $x840;
unset($x841, $W841, $S841, $U841);
$x842 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x839, (string) 'length', 269, 38, '<image>/05_string.js');
$x841 =& $x842[0]; list(,$W841,$S841,$U841) = $x842;
$x835 = JS::toPrimitive($x837, $global);
$x836 = JS::toPrimitive($x841, $global);
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = (is_string($x835) || is_string($x836) ? JS::toString($x835, $global) . JS::toString($x836, $global) : JS::toNumber($x835, $global) + JS::toNumber($x836, $global));;
};
};
unset($x846, $W846, $S846, $U846);
$x847 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 273, 22, '<image>/05_string.js');
$x846 =& $x847[0]; list(,$W846,$S846,$U846) = $x847;
$x843 = JS::toPrimitive($_lastIndex, $global);
$x844 = JS::toPrimitive($x846, $global);
$x845 = (is_string($x843) && is_string($x844) ? strcmp($x843, $x844) < 0 : (!is_nan($x848 = JS::toNumber($x843, $global)) && !is_nan($x849 = JS::toNumber($x844, $global)) && $x848 < $x849));
if (JS::toBoolean($x845, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x851 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 19, '<image>/05_string.js');
$_TypeError =& $x851[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x851;
$x852 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x853 = $x852($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x853->class) && $x853->class === 'Error') {$x853->properties['file'] = '<image>/05_string.js';$x853->properties['line'] = 274;$x853->properties['column'] = 19;$x853->attributes['file'] = $x853->attributes['line'] = $x853->attributes['column'] = 0; }
throw new JSException($x853, 274, 19, '<image>/05_string.js');
}
$x850 = JS::toObject($_returnArray, $global);
unset($x854, $W854, $S854, $U854);
$x855 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x850, (string) 'push', 274, 19, '<image>/05_string.js');
$x854 =& $x855[0]; list(,$W854,$S854,$U854) = $x855;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x857 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 34, '<image>/05_string.js');
$_TypeError =& $x857[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x857;
$x858 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x859 = $x858($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x859->class) && $x859->class === 'Error') {$x859->properties['file'] = '<image>/05_string.js';$x859->properties['line'] = 274;$x859->properties['column'] = 34;$x859->attributes['file'] = $x859->attributes['line'] = $x859->attributes['column'] = 0; }
throw new JSException($x859, 274, 34, '<image>/05_string.js');
}
$x856 = JS::toObject($leThis, $global);
unset($x860, $W860, $S860, $U860);
$x861 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x856, (string) 'substring', 274, 34, '<image>/05_string.js');
$x860 =& $x861[0]; list(,$W860,$S860,$U860) = $x861;
unset($x862, $W862, $S862, $U862);
$x863 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 274, 50, '<image>/05_string.js');
$x862 =& $x863[0]; list(,$W862,$S862,$U862) = $x863;
if (!(is_object($x860) && isset($x860->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x866 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 34, '<image>/05_string.js');
$_TypeError =& $x866[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x866;
$x867 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x868 = $x867($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x868->class) && $x868->class === 'Error') {$x868->properties['file'] = '<image>/05_string.js';$x868->properties['line'] = 274;$x868->properties['column'] = 34;$x868->attributes['file'] = $x868->attributes['line'] = $x868->attributes['column'] = 0; }
throw new JSException($x868, 274, 34, '<image>/05_string.js');
}
$x864 = $x860->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x865 = $x864($global, $x856, $x860, array($_lastIndex, $x862), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x854) && isset($x854->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x871 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 19, '<image>/05_string.js');
$_TypeError =& $x871[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x871;
$x872 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x873 = $x872($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x873->class) && $x873->class === 'Error') {$x873->properties['file'] = '<image>/05_string.js';$x873->properties['line'] = 274;$x873->properties['column'] = 19;$x873->attributes['file'] = $x873->attributes['line'] = $x873->attributes['column'] = 0; }
throw new JSException($x873, 274, 19, '<image>/05_string.js');
}
$x869 = $x854->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x870 = $x869($global, $x850, $x854, array($x865), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
$_separator->properties['global'] =$_savedGlobal;
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x874 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 278, 22, '<image>/05_string.js');
$_TypeError =& $x874[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x874;
$x875 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x876 = $x875($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x876->class) && $x876->class === 'Error') {$x876->properties['file'] = '<image>/05_string.js';$x876->properties['line'] = 278;$x876->properties['column'] = 22;$x876->attributes['file'] = $x876->attributes['line'] = $x876->attributes['column'] = 0; }
throw new JSException($x876, 278, 22, '<image>/05_string.js');
}
$_separator = JS::toObject($_separator, $global);
unset($x877, $W877, $S877, $U877);
$x878 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_separator, (string) 'lastIndex', 278, 22, '<image>/05_string.js');
$x877 =& $x878[0]; list(,$W877,$S877,$U877) = $x878;
if ($U877 && (!isset($_separator->extensible) || $_separator->extensible)) {$_separator->properties['lastIndex'] = $x877; $x877 =& $_separator->properties['lastIndex']; $_separator->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U877 = FALSE; $W877 = TRUE; }
if (isset($S877)) {
$x880 = $S877->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x881 = $x880($global, $_separator, $S877, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x879 = $x881;
} else {
if (!$U877) {$x879 = $_savedLastIndex;if ($W877) { $x877 = $_savedLastIndex; }  }
else { $x879 = JS::$undefined; }
}
if (isset($_separator->class) && $_separator->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_separator->properties['length']) { $_separator->properties['length'] = 'lastIndex' + 1; };
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x678=&$scope->properties[\'arguments\'];$x678->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x678->properties[$i]=$args[$i];$x678->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$scope->properties[\'limit\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_limit=&$scope->properties[\'limit\'];$Ulimit=FALSE;$global->scope[++$global->scope_sp]=$scope;$x679=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x679,$global)){$x680=clone JS::$arrayTemplate;$x680->properties[\'length\']=1;$x680->attributes[\'length\']=JS::WRITABLE;$x680->properties[0]=$leThis->value;$x680->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x680;}$x681=(((gettype($_separator)===gettype(\'\')&&$_separator===\'\'))||(((is_float($_separator)||is_int($_separator))&&(is_float(\'\')||is_int(\'\')))&&$_separator==\'\'));if(JS::toBoolean($x681,$global)){$x682=clone JS::$arrayTemplate;$x682->properties[\'length\']=0;$x682->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x682;for($x683=0;;++$x683){if($x683===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x684,$W684,$S684,$U684);$x685=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',236,27,\'<image>/05_string.js\');$x684=&$x685[0];list(,$W684,$S684,$U684)=$x685;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x684;}if($x683!==0){$x686=++$_i;}$x687=JS::toPrimitive($_i,$global);$x688=JS::toPrimitive($_l,$global);$x689=(is_string($x687)&&is_string($x688)?strcmp($x687,$x688)<0:(!is_nan($x690=JS::toNumber($x687,$global))&&!is_nan($x691=JS::toNumber($x688,$global))&&$x690<$x691));if(!JS::toBoolean($x689,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x693=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',237,20,\'<image>/05_string.js\');$_TypeError=&$x693[0];list(,$WTypeError,$STypeError,$UTypeError)=$x693;$x694=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x695=$x694($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x695->class)&&$x695->class===\'Error\'){$x695->properties[\'file\']=\'<image>/05_string.js\';$x695->properties[\'line\']=237;$x695->properties[\'column\']=20;$x695->attributes[\'file\']=$x695->attributes[\'line\']=$x695->attributes[\'column\']=0;}throw new JSException($x695,237,20,\'<image>/05_string.js\');}$x692=JS::toObject($_returnArray,$global);unset($x696,$W696,$S696,$U696);$x697=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x692,(string)\'push\',237,20,\'<image>/05_string.js\');$x696=&$x697[0];list(,$W696,$S696,$U696)=$x697;if(!(is_object($x696)&&isset($x696->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x700=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',237,20,\'<image>/05_string.js\');$_TypeError=&$x700[0];list(,$WTypeError,$STypeError,$UTypeError)=$x700;$x701=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x702=$x701($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x702->class)&&$x702->class===\'Error\'){$x702->properties[\'file\']=\'<image>/05_string.js\';$x702->properties[\'line\']=237;$x702->properties[\'column\']=20;$x702->attributes[\'file\']=$x702->attributes[\'line\']=$x702->attributes[\'column\']=0;}throw new JSException($x702,237,20,\'<image>/05_string.js\');}$x698=$x696->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x699=$x698($global,$x692,$x696,array((string)substr($leThis->value,$_i,1)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;}$x704=$_separator;$x704=($x704===JS::$undefined?\'undefined\':(is_int($x704)||is_float($x704)?\'number\':(is_bool($x704)?\'boolean\':(is_string($x704)?\'string\':(is_object($x704)&&isset($x704->call)?\'function\':\'object\')))));$x703=(((gettype($x704)===gettype(\'string\')&&$x704===\'string\'))||(((is_float($x704)||is_int($x704))&&(is_float(\'string\')||is_int(\'string\')))&&$x704==\'string\'));if(JS::toBoolean($x703,$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x707=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',244,19,\'<image>/05_string.js\');$_RegExp=&$x707[0];list(,$WRegExp,$SRegExp,$URegExp)=$x707;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x708=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',244,19,\'<image>/05_string.js\');$_ReferenceError=&$x708[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x708;$x709=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,19);$x710=$x709($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x710->class)&&$x710->class===\'Error\'){$x710->properties[\'file\']=\'<image>/05_string.js\';$x710->properties[\'line\']=244;$x710->properties[\'column\']=19;$x710->attributes[\'file\']=$x710->attributes[\'line\']=$x710->attributes[\'column\']=0;}throw new JSException($x710,244,19,\'<image>/05_string.js\');}$x705=clone JS::$objectTemplate;unset($x711,$W711,$S711,$U711);$x712=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',244,15,\'<image>/05_string.js\');$x711=&$x712[0];list(,$W711,$S711,$U711)=$x712;$x706=$x711;$x705->prototype=$x706;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x715=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',244,15,\'<image>/05_string.js\');$_TypeError=&$x715[0];list(,$WTypeError,$STypeError,$UTypeError)=$x715;$x716=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x717=$x716($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x717->class)&&$x717->class===\'Error\'){$x717->properties[\'file\']=\'<image>/05_string.js\';$x717->properties[\'line\']=244;$x717->properties[\'column\']=15;$x717->attributes[\'file\']=$x717->attributes[\'line\']=$x717->attributes[\'column\']=0;}throw new JSException($x717,244,15,\'<image>/05_string.js\');}$x713=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x714=$x713($global,$x705,$_RegExp,array(preg_quote(JS::toString($_separator,$global),\'/\'),\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x706=$x714;if(is_object($x706)&&$x706!==JS::$undefined){$x705=$x706;}if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x705;}$x718=clone JS::$arrayTemplate;$x718->properties[\'length\']=0;$x718->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x718;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;unset($x719,$W719,$S719,$U719);$x720=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,(string)\'lastIndex\',248,29,\'<image>/05_string.js\');$x719=&$x720[0];list(,$W719,$S719,$U719)=$x720;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x719;unset($x721,$W721,$S721,$U721);$x722=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,(string)\'global\',248,64,\'<image>/05_string.js\');$x721=&$x722[0];list(,$W721,$S721,$U721)=$x722;$scope->properties[\'savedGlobal\']=JS::$undefined;$_savedGlobal=&$scope->properties[\'savedGlobal\'];$UsavedGlobal=FALSE;$_savedGlobal=$x721;$_separator->properties[\'global\']=TRUE;$x723=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x723,$global)){unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x724=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Infinity\',253,11,\'<image>/05_string.js\');$_Infinity=&$x724[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x724;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x725=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',253,11,\'<image>/05_string.js\');$_ReferenceError=&$x725[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x725;$x726=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',253,11);$x727=$x726($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x727->class)&&$x727->class===\'Error\'){$x727->properties[\'file\']=\'<image>/05_string.js\';$x727->properties[\'line\']=253;$x727->properties[\'column\']=11;$x727->attributes[\'file\']=$x727->attributes[\'line\']=$x727->attributes[\'column\']=0;}throw new JSException($x727,253,11,\'<image>/05_string.js\');}if($Ulimit){$global->properties[\'limit\']=$_limit;$_limit=&$global->properties[\'limit\'];}$_limit=$_Infinity;}for(;;){if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x731=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',256,32,\'<image>/05_string.js\');$_TypeError=&$x731[0];list(,$WTypeError,$STypeError,$UTypeError)=$x731;$x732=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x733=$x732($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x733->class)&&$x733->class===\'Error\'){$x733->properties[\'file\']=\'<image>/05_string.js\';$x733->properties[\'line\']=256;$x733->properties[\'column\']=32;$x733->attributes[\'file\']=$x733->attributes[\'line\']=$x733->attributes[\'column\']=0;}throw new JSException($x733,256,32,\'<image>/05_string.js\');}$x730=JS::toObject($_separator,$global);unset($x734,$W734,$S734,$U734);$x735=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x730,(string)\'exec\',256,32,\'<image>/05_string.js\');$x734=&$x735[0];list(,$W734,$S734,$U734)=$x735;if(!(is_object($x734)&&isset($x734->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x738=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',256,32,\'<image>/05_string.js\');$_TypeError=&$x738[0];list(,$WTypeError,$STypeError,$UTypeError)=$x738;$x739=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x740=$x739($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x740->class)&&$x740->class===\'Error\'){$x740->properties[\'file\']=\'<image>/05_string.js\';$x740->properties[\'line\']=256;$x740->properties[\'column\']=32;$x740->attributes[\'file\']=$x740->attributes[\'line\']=$x740->attributes[\'column\']=0;}throw new JSException($x740,256,32,\'<image>/05_string.js\');}$x736=$x734->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x737=$x736($global,$x730,$x734,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x737;$x729=$_match;if(JS::toBoolean($x729,$global)){$x744=--$_limit;$x741=JS::toPrimitive($x744,$global);$x742=JS::toPrimitive(0,$global);$x743=(is_string($x742)&&is_string($x741)?strcmp($x742,$x741)<0:(!is_nan($x745=JS::toNumber($x742,$global))&&!is_nan($x746=JS::toNumber($x741,$global))&&$x745<$x746));$x729=$x743;}$x728=$x729;if(JS::toBoolean($x728,$global)){unset($x750,$W750,$S750,$U750);$x751=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',256,80,\'<image>/05_string.js\');$x750=&$x751[0];list(,$W750,$S750,$U750)=$x751;$x747=JS::toPrimitive($_lastIndex,$global);$x748=JS::toPrimitive($x750,$global);$x749=(is_string($x747)&&is_string($x748)?strcmp($x747,$x748)<0:(!is_nan($x752=JS::toNumber($x747,$global))&&!is_nan($x753=JS::toNumber($x748,$global))&&$x752<$x753));$x728=$x749;}if(!JS::toBoolean($x728,$global)){break;}unset($x756,$W756,$S756,$U756);$x757=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,257,12,\'<image>/05_string.js\');$x756=&$x757[0];list(,$W756,$S756,$U756)=$x757;$x755=(((gettype($x756)===gettype(\'\')&&$x756===\'\'))||(((is_float($x756)||is_int($x756))&&(is_float(\'\')||is_int(\'\')))&&$x756==\'\'));$x754=$x755;if(JS::toBoolean($x754,$global)){unset($x759,$W759,$S759,$U759);$x760=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',257,31,\'<image>/05_string.js\');$x759=&$x760[0];list(,$W759,$S759,$U759)=$x760;$x758=(((gettype($x759)===gettype($_lastIndex)&&$x759===$_lastIndex))||(((is_float($x759)||is_int($x759))&&(is_float($_lastIndex)||is_int($_lastIndex)))&&$x759==$_lastIndex));$x754=$x758;}if(JS::toBoolean($x754,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x762=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,20,\'<image>/05_string.js\');$_TypeError=&$x762[0];list(,$WTypeError,$STypeError,$UTypeError)=$x762;$x763=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x764=$x763($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x764->class)&&$x764->class===\'Error\'){$x764->properties[\'file\']=\'<image>/05_string.js\';$x764->properties[\'line\']=258;$x764->properties[\'column\']=20;$x764->attributes[\'file\']=$x764->attributes[\'line\']=$x764->attributes[\'column\']=0;}throw new JSException($x764,258,20,\'<image>/05_string.js\');}$x761=JS::toObject($_returnArray,$global);unset($x765,$W765,$S765,$U765);$x766=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x761,(string)\'push\',258,20,\'<image>/05_string.js\');$x765=&$x766[0];list(,$W765,$S765,$U765)=$x766;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x768=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,35,\'<image>/05_string.js\');$_TypeError=&$x768[0];list(,$WTypeError,$STypeError,$UTypeError)=$x768;$x769=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x770=$x769($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x770->class)&&$x770->class===\'Error\'){$x770->properties[\'file\']=\'<image>/05_string.js\';$x770->properties[\'line\']=258;$x770->properties[\'column\']=35;$x770->attributes[\'file\']=$x770->attributes[\'line\']=$x770->attributes[\'column\']=0;}throw new JSException($x770,258,35,\'<image>/05_string.js\');}$x767=JS::toObject($leThis,$global);unset($x771,$W771,$S771,$U771);$x772=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x767,(string)\'substring\',258,35,\'<image>/05_string.js\');$x771=&$x772[0];list(,$W771,$S771,$U771)=$x772;$x773=JS::toPrimitive($_lastIndex,$global);$x774=JS::toPrimitive(1,$global);if(!(is_object($x771)&&isset($x771->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x777=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,35,\'<image>/05_string.js\');$_TypeError=&$x777[0];list(,$WTypeError,$STypeError,$UTypeError)=$x777;$x778=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x779=$x778($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x779->class)&&$x779->class===\'Error\'){$x779->properties[\'file\']=\'<image>/05_string.js\';$x779->properties[\'line\']=258;$x779->properties[\'column\']=35;$x779->attributes[\'file\']=$x779->attributes[\'line\']=$x779->attributes[\'column\']=0;}throw new JSException($x779,258,35,\'<image>/05_string.js\');}$x775=$x771->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x776=$x775($global,$x767,$x771,array($_lastIndex,(is_string($x773)||is_string($x774)?JS::toString($x773,$global).JS::toString($x774,$global):JS::toNumber($x773,$global)+JS::toNumber($x774,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x765)&&isset($x765->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x782=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,20,\'<image>/05_string.js\');$_TypeError=&$x782[0];list(,$WTypeError,$STypeError,$UTypeError)=$x782;$x783=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x784=$x783($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x784->class)&&$x784->class===\'Error\'){$x784->properties[\'file\']=\'<image>/05_string.js\';$x784->properties[\'line\']=258;$x784->properties[\'column\']=20;$x784->attributes[\'file\']=$x784->attributes[\'line\']=$x784->attributes[\'column\']=0;}throw new JSException($x784,258,20,\'<image>/05_string.js\');}$x780=$x765->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x781=$x780($global,$x761,$x765,array($x776),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x785=++$_lastIndex;unset($x786,$W786,$S786,$U786);$x787=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,(string)\'lastIndex\',260,15,\'<image>/05_string.js\');$x786=&$x787[0];list(,$W786,$S786,$U786)=$x787;$x788=++$x786;}else{if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x790=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,20,\'<image>/05_string.js\');$_TypeError=&$x790[0];list(,$WTypeError,$STypeError,$UTypeError)=$x790;$x791=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x792=$x791($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x792->class)&&$x792->class===\'Error\'){$x792->properties[\'file\']=\'<image>/05_string.js\';$x792->properties[\'line\']=263;$x792->properties[\'column\']=20;$x792->attributes[\'file\']=$x792->attributes[\'line\']=$x792->attributes[\'column\']=0;}throw new JSException($x792,263,20,\'<image>/05_string.js\');}$x789=JS::toObject($_returnArray,$global);unset($x793,$W793,$S793,$U793);$x794=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x789,(string)\'push\',263,20,\'<image>/05_string.js\');$x793=&$x794[0];list(,$W793,$S793,$U793)=$x794;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x796=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,35,\'<image>/05_string.js\');$_TypeError=&$x796[0];list(,$WTypeError,$STypeError,$UTypeError)=$x796;$x797=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x798=$x797($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x798->class)&&$x798->class===\'Error\'){$x798->properties[\'file\']=\'<image>/05_string.js\';$x798->properties[\'line\']=263;$x798->properties[\'column\']=35;$x798->attributes[\'file\']=$x798->attributes[\'line\']=$x798->attributes[\'column\']=0;}throw new JSException($x798,263,35,\'<image>/05_string.js\');}$x795=JS::toObject($leThis,$global);unset($x799,$W799,$S799,$U799);$x800=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x795,(string)\'substring\',263,35,\'<image>/05_string.js\');$x799=&$x800[0];list(,$W799,$S799,$U799)=$x800;unset($x801,$W801,$S801,$U801);$x802=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',263,52,\'<image>/05_string.js\');$x801=&$x802[0];list(,$W801,$S801,$U801)=$x802;if(!(is_object($x799)&&isset($x799->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x805=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,35,\'<image>/05_string.js\');$_TypeError=&$x805[0];list(,$WTypeError,$STypeError,$UTypeError)=$x805;$x806=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x807=$x806($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x807->class)&&$x807->class===\'Error\'){$x807->properties[\'file\']=\'<image>/05_string.js\';$x807->properties[\'line\']=263;$x807->properties[\'column\']=35;$x807->attributes[\'file\']=$x807->attributes[\'line\']=$x807->attributes[\'column\']=0;}throw new JSException($x807,263,35,\'<image>/05_string.js\');}$x803=$x799->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x804=$x803($global,$x795,$x799,array($_lastIndex,$x801),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x793)&&isset($x793->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x810=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,20,\'<image>/05_string.js\');$_TypeError=&$x810[0];list(,$WTypeError,$STypeError,$UTypeError)=$x810;$x811=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x812=$x811($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x812->class)&&$x812->class===\'Error\'){$x812->properties[\'file\']=\'<image>/05_string.js\';$x812->properties[\'line\']=263;$x812->properties[\'column\']=20;$x812->attributes[\'file\']=$x812->attributes[\'line\']=$x812->attributes[\'column\']=0;}throw new JSException($x812,263,20,\'<image>/05_string.js\');}$x808=$x793->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x809=$x808($global,$x789,$x793,array($x804),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);for($x813=0;;++$x813){if($x813===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x814,$W814,$S814,$U814);$x815=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'length\',265,29,\'<image>/05_string.js\');$x814=&$x815[0];list(,$W814,$S814,$U814)=$x815;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x814;}if($x813!==0){$x816=++$_i;}$x817=JS::toPrimitive($_i,$global);$x818=JS::toPrimitive($_l,$global);$x819=(is_string($x817)&&is_string($x818)?strcmp($x817,$x818)<0:(!is_nan($x820=JS::toNumber($x817,$global))&&!is_nan($x821=JS::toNumber($x818,$global))&&$x820<$x821));if(!JS::toBoolean($x819,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x823=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',266,21,\'<image>/05_string.js\');$_TypeError=&$x823[0];list(,$WTypeError,$STypeError,$UTypeError)=$x823;$x824=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x825=$x824($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x825->class)&&$x825->class===\'Error\'){$x825->properties[\'file\']=\'<image>/05_string.js\';$x825->properties[\'line\']=266;$x825->properties[\'column\']=21;$x825->attributes[\'file\']=$x825->attributes[\'line\']=$x825->attributes[\'column\']=0;}throw new JSException($x825,266,21,\'<image>/05_string.js\');}$x822=JS::toObject($_returnArray,$global);unset($x826,$W826,$S826,$U826);$x827=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x822,(string)\'push\',266,21,\'<image>/05_string.js\');$x826=&$x827[0];list(,$W826,$S826,$U826)=$x827;unset($x828,$W828,$S828,$U828);$x829=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)$_i,266,27,\'<image>/05_string.js\');$x828=&$x829[0];list(,$W828,$S828,$U828)=$x829;if(!(is_object($x826)&&isset($x826->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x832=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',266,21,\'<image>/05_string.js\');$_TypeError=&$x832[0];list(,$WTypeError,$STypeError,$UTypeError)=$x832;$x833=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x834=$x833($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x834->class)&&$x834->class===\'Error\'){$x834->properties[\'file\']=\'<image>/05_string.js\';$x834->properties[\'line\']=266;$x834->properties[\'column\']=21;$x834->attributes[\'file\']=$x834->attributes[\'line\']=$x834->attributes[\'column\']=0;}throw new JSException($x834,266,21,\'<image>/05_string.js\');}$x830=$x826->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x831=$x830($global,$x822,$x826,array($x828),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x837,$W837,$S837,$U837);$x838=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',269,21,\'<image>/05_string.js\');$x837=&$x838[0];list(,$W837,$S837,$U837)=$x838;unset($x839,$W839,$S839,$U839);$x840=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,269,35,\'<image>/05_string.js\');$x839=&$x840[0];list(,$W839,$S839,$U839)=$x840;unset($x841,$W841,$S841,$U841);$x842=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x839,(string)\'length\',269,38,\'<image>/05_string.js\');$x841=&$x842[0];list(,$W841,$S841,$U841)=$x842;$x835=JS::toPrimitive($x837,$global);$x836=JS::toPrimitive($x841,$global);if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=(is_string($x835)||is_string($x836)?JS::toString($x835,$global).JS::toString($x836,$global):JS::toNumber($x835,$global)+JS::toNumber($x836,$global));}}unset($x846,$W846,$S846,$U846);$x847=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',273,22,\'<image>/05_string.js\');$x846=&$x847[0];list(,$W846,$S846,$U846)=$x847;$x843=JS::toPrimitive($_lastIndex,$global);$x844=JS::toPrimitive($x846,$global);$x845=(is_string($x843)&&is_string($x844)?strcmp($x843,$x844)<0:(!is_nan($x848=JS::toNumber($x843,$global))&&!is_nan($x849=JS::toNumber($x844,$global))&&$x848<$x849));if(JS::toBoolean($x845,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x851=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,19,\'<image>/05_string.js\');$_TypeError=&$x851[0];list(,$WTypeError,$STypeError,$UTypeError)=$x851;$x852=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x853=$x852($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x853->class)&&$x853->class===\'Error\'){$x853->properties[\'file\']=\'<image>/05_string.js\';$x853->properties[\'line\']=274;$x853->properties[\'column\']=19;$x853->attributes[\'file\']=$x853->attributes[\'line\']=$x853->attributes[\'column\']=0;}throw new JSException($x853,274,19,\'<image>/05_string.js\');}$x850=JS::toObject($_returnArray,$global);unset($x854,$W854,$S854,$U854);$x855=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x850,(string)\'push\',274,19,\'<image>/05_string.js\');$x854=&$x855[0];list(,$W854,$S854,$U854)=$x855;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x857=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,34,\'<image>/05_string.js\');$_TypeError=&$x857[0];list(,$WTypeError,$STypeError,$UTypeError)=$x857;$x858=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x859=$x858($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x859->class)&&$x859->class===\'Error\'){$x859->properties[\'file\']=\'<image>/05_string.js\';$x859->properties[\'line\']=274;$x859->properties[\'column\']=34;$x859->attributes[\'file\']=$x859->attributes[\'line\']=$x859->attributes[\'column\']=0;}throw new JSException($x859,274,34,\'<image>/05_string.js\');}$x856=JS::toObject($leThis,$global);unset($x860,$W860,$S860,$U860);$x861=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x856,(string)\'substring\',274,34,\'<image>/05_string.js\');$x860=&$x861[0];list(,$W860,$S860,$U860)=$x861;unset($x862,$W862,$S862,$U862);$x863=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',274,50,\'<image>/05_string.js\');$x862=&$x863[0];list(,$W862,$S862,$U862)=$x863;if(!(is_object($x860)&&isset($x860->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x866=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,34,\'<image>/05_string.js\');$_TypeError=&$x866[0];list(,$WTypeError,$STypeError,$UTypeError)=$x866;$x867=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x868=$x867($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x868->class)&&$x868->class===\'Error\'){$x868->properties[\'file\']=\'<image>/05_string.js\';$x868->properties[\'line\']=274;$x868->properties[\'column\']=34;$x868->attributes[\'file\']=$x868->attributes[\'line\']=$x868->attributes[\'column\']=0;}throw new JSException($x868,274,34,\'<image>/05_string.js\');}$x864=$x860->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x865=$x864($global,$x856,$x860,array($_lastIndex,$x862),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x854)&&isset($x854->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x871=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,19,\'<image>/05_string.js\');$_TypeError=&$x871[0];list(,$WTypeError,$STypeError,$UTypeError)=$x871;$x872=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x873=$x872($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x873->class)&&$x873->class===\'Error\'){$x873->properties[\'file\']=\'<image>/05_string.js\';$x873->properties[\'line\']=274;$x873->properties[\'column\']=19;$x873->attributes[\'file\']=$x873->attributes[\'line\']=$x873->attributes[\'column\']=0;}throw new JSException($x873,274,19,\'<image>/05_string.js\');}$x869=$x854->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x870=$x869($global,$x850,$x854,array($x865),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}$_separator->properties[\'global\']=$_savedGlobal;if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x874=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',278,22,\'<image>/05_string.js\');$_TypeError=&$x874[0];list(,$WTypeError,$STypeError,$UTypeError)=$x874;$x875=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x876=$x875($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x876->class)&&$x876->class===\'Error\'){$x876->properties[\'file\']=\'<image>/05_string.js\';$x876->properties[\'line\']=278;$x876->properties[\'column\']=22;$x876->attributes[\'file\']=$x876->attributes[\'line\']=$x876->attributes[\'column\']=0;}throw new JSException($x876,278,22,\'<image>/05_string.js\');}$_separator=JS::toObject($_separator,$global);unset($x877,$W877,$S877,$U877);$x878=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_separator,(string)\'lastIndex\',278,22,\'<image>/05_string.js\');$x877=&$x878[0];list(,$W877,$S877,$U877)=$x878;if($U877&&(!isset($_separator->extensible)||$_separator->extensible)){$_separator->properties[\'lastIndex\']=$x877;$x877=&$_separator->properties[\'lastIndex\'];$_separator->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U877=FALSE;$W877=TRUE;}if(isset($S877)){$x880=$S877->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x881=$x880($global,$_separator,$S877,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x879=$x881;}else{if(!$U877){$x879=$_savedLastIndex;if($W877){$x877=$_savedLastIndex;}}else{$x879=JS::$undefined;}}if(isset($_separator->class)&&$_separator->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_separator->properties[\'length\']){$_separator->properties[\'length\']=\'lastIndex\'+1;}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x894 =& $scope->properties['arguments'];
$x894->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x894->properties[$i] = $args[$i];
$x894->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['end'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_end =& $scope->properties['end'];
$Uend = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['length'] = JS::$undefined; $_length =& $scope->properties['length'];
$Ulength = FALSE;
$_length = strlen($leThis->value);
$x895 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x895, $global)) {
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = 0;;
};
$x896 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x896, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x897 = JS::toPrimitive($_start, $global);
$x898 = JS::toPrimitive(0, $global);
$x899 = (is_string($x897) && is_string($x898) ? strcmp($x897, $x898) < 0 : (!is_nan($x900 = JS::toNumber($x897, $global)) && !is_nan($x901 = JS::toNumber($x898, $global)) && $x900 < $x901));
if (JS::toBoolean($x899, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x902 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 295, 11, '<image>/05_string.js');
$_Math =& $x902[0]; list(,$WMath,$SMath,$UMath) = $x902;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x903 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 295, 11, '<image>/05_string.js');
$_ReferenceError =& $x903[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x903;
$x904 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 11);
$x905 = $x904($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x905->class) && $x905->class === 'Error') {$x905->properties['file'] = '<image>/05_string.js';$x905->properties['line'] = 295;$x905->properties['column'] = 11;$x905->attributes['file'] = $x905->attributes['line'] = $x905->attributes['column'] = 0; }
throw new JSException($x905, 295, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x907 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 295, 19, '<image>/05_string.js');
$_TypeError =& $x907[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x907;
$x908 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x909 = $x908($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x909->class) && $x909->class === 'Error') {$x909->properties['file'] = '<image>/05_string.js';$x909->properties['line'] = 295;$x909->properties['column'] = 19;$x909->attributes['file'] = $x909->attributes['line'] = $x909->attributes['column'] = 0; }
throw new JSException($x909, 295, 19, '<image>/05_string.js');
}
$x906 = JS::toObject($_Math, $global);
unset($x910, $W910, $S910, $U910);
$x911 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x906, (string) 'max', 295, 19, '<image>/05_string.js');
$x910 =& $x911[0]; list(,$W910,$S910,$U910) = $x911;
$x912 = JS::toPrimitive($_start, $global);
$x913 = JS::toPrimitive($_length, $global);
if (!(is_object($x910) && isset($x910->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x916 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 295, 19, '<image>/05_string.js');
$_TypeError =& $x916[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x916;
$x917 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x918 = $x917($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x918->class) && $x918->class === 'Error') {$x918->properties['file'] = '<image>/05_string.js';$x918->properties['line'] = 295;$x918->properties['column'] = 19;$x918->attributes['file'] = $x918->attributes['line'] = $x918->attributes['column'] = 0; }
throw new JSException($x918, 295, 19, '<image>/05_string.js');
}
$x914 = $x910->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x915 = $x914($global, $x906, $x910, array((is_string($x912) || is_string($x913) ? JS::toString($x912, $global) . JS::toString($x913, $global) : JS::toNumber($x912, $global) + JS::toNumber($x913, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x915;;
};
$x919 = JS::toPrimitive($_end, $global);
$x920 = JS::toPrimitive(0, $global);
$x921 = (is_string($x919) && is_string($x920) ? strcmp($x919, $x920) < 0 : (!is_nan($x922 = JS::toNumber($x919, $global)) && !is_nan($x923 = JS::toNumber($x920, $global)) && $x922 < $x923));
if (JS::toBoolean($x921, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x924 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 299, 9, '<image>/05_string.js');
$_Math =& $x924[0]; list(,$WMath,$SMath,$UMath) = $x924;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x925 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 299, 9, '<image>/05_string.js');
$_ReferenceError =& $x925[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x925;
$x926 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 9);
$x927 = $x926($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x927->class) && $x927->class === 'Error') {$x927->properties['file'] = '<image>/05_string.js';$x927->properties['line'] = 299;$x927->properties['column'] = 9;$x927->attributes['file'] = $x927->attributes['line'] = $x927->attributes['column'] = 0; }
throw new JSException($x927, 299, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x929 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 299, 17, '<image>/05_string.js');
$_TypeError =& $x929[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x929;
$x930 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x931 = $x930($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x931->class) && $x931->class === 'Error') {$x931->properties['file'] = '<image>/05_string.js';$x931->properties['line'] = 299;$x931->properties['column'] = 17;$x931->attributes['file'] = $x931->attributes['line'] = $x931->attributes['column'] = 0; }
throw new JSException($x931, 299, 17, '<image>/05_string.js');
}
$x928 = JS::toObject($_Math, $global);
unset($x932, $W932, $S932, $U932);
$x933 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x928, (string) 'max', 299, 17, '<image>/05_string.js');
$x932 =& $x933[0]; list(,$W932,$S932,$U932) = $x933;
$x934 = JS::toPrimitive($_end, $global);
$x935 = JS::toPrimitive($_length, $global);
if (!(is_object($x932) && isset($x932->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x938 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 299, 17, '<image>/05_string.js');
$_TypeError =& $x938[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x938;
$x939 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x940 = $x939($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x940->class) && $x940->class === 'Error') {$x940->properties['file'] = '<image>/05_string.js';$x940->properties['line'] = 299;$x940->properties['column'] = 17;$x940->attributes['file'] = $x940->attributes['line'] = $x940->attributes['column'] = 0; }
throw new JSException($x940, 299, 17, '<image>/05_string.js');
}
$x936 = $x932->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x937 = $x936($global, $x928, $x932, array((is_string($x934) || is_string($x935) ? JS::toString($x934, $global) . JS::toString($x935, $global) : JS::toNumber($x934, $global) + JS::toNumber($x935, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x937;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x941 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 302, 10, '<image>/05_string.js');
$_Math =& $x941[0]; list(,$WMath,$SMath,$UMath) = $x941;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x942 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 302, 10, '<image>/05_string.js');
$_ReferenceError =& $x942[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x942;
$x943 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 10);
$x944 = $x943($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x944->class) && $x944->class === 'Error') {$x944->properties['file'] = '<image>/05_string.js';$x944->properties['line'] = 302;$x944->properties['column'] = 10;$x944->attributes['file'] = $x944->attributes['line'] = $x944->attributes['column'] = 0; }
throw new JSException($x944, 302, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x946 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 302, 18, '<image>/05_string.js');
$_TypeError =& $x946[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x946;
$x947 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x948 = $x947($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x948->class) && $x948->class === 'Error') {$x948->properties['file'] = '<image>/05_string.js';$x948->properties['line'] = 302;$x948->properties['column'] = 18;$x948->attributes['file'] = $x948->attributes['line'] = $x948->attributes['column'] = 0; }
throw new JSException($x948, 302, 18, '<image>/05_string.js');
}
$x945 = JS::toObject($_Math, $global);
unset($x949, $W949, $S949, $U949);
$x950 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x945, (string) 'min', 302, 18, '<image>/05_string.js');
$x949 =& $x950[0]; list(,$W949,$S949,$U949) = $x950;
if (!(is_object($x949) && isset($x949->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x953 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 302, 18, '<image>/05_string.js');
$_TypeError =& $x953[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x953;
$x954 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x955 = $x954($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x955->class) && $x955->class === 'Error') {$x955->properties['file'] = '<image>/05_string.js';$x955->properties['line'] = 302;$x955->properties['column'] = 18;$x955->attributes['file'] = $x955->attributes['line'] = $x955->attributes['column'] = 0; }
throw new JSException($x955, 302, 18, '<image>/05_string.js');
}
$x951 = $x949->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x952 = $x951($global, $x945, $x949, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x952;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x957 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 303, 16, '<image>/05_string.js');
$_TypeError =& $x957[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x957;
$x958 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x959 = $x958($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x959->class) && $x959->class === 'Error') {$x959->properties['file'] = '<image>/05_string.js';$x959->properties['line'] = 303;$x959->properties['column'] = 16;$x959->attributes['file'] = $x959->attributes['line'] = $x959->attributes['column'] = 0; }
throw new JSException($x959, 303, 16, '<image>/05_string.js');
}
$x956 = JS::toObject($_Math, $global);
unset($x960, $W960, $S960, $U960);
$x961 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x956, (string) 'min', 303, 16, '<image>/05_string.js');
$x960 =& $x961[0]; list(,$W960,$S960,$U960) = $x961;
if (!(is_object($x960) && isset($x960->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x964 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 303, 16, '<image>/05_string.js');
$_TypeError =& $x964[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x964;
$x965 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x966 = $x965($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x966->class) && $x966->class === 'Error') {$x966->properties['file'] = '<image>/05_string.js';$x966->properties['line'] = 303;$x966->properties['column'] = 16;$x966->attributes['file'] = $x966->attributes['line'] = $x966->attributes['column'] = 0; }
throw new JSException($x966, 303, 16, '<image>/05_string.js');
}
$x962 = $x960->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x963 = $x962($global, $x956, $x960, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x963;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x968 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 21, '<image>/05_string.js');
$_TypeError =& $x968[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x968;
$x969 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x970 = $x969($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x970->class) && $x970->class === 'Error') {$x970->properties['file'] = '<image>/05_string.js';$x970->properties['line'] = 305;$x970->properties['column'] = 21;$x970->attributes['file'] = $x970->attributes['line'] = $x970->attributes['column'] = 0; }
throw new JSException($x970, 305, 21, '<image>/05_string.js');
}
$x967 = JS::toObject($_Math, $global);
unset($x971, $W971, $S971, $U971);
$x972 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x967, (string) 'min', 305, 21, '<image>/05_string.js');
$x971 =& $x972[0]; list(,$W971,$S971,$U971) = $x972;
if (!(is_object($x971) && isset($x971->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x975 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 21, '<image>/05_string.js');
$_TypeError =& $x975[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x975;
$x976 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x977 = $x976($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x977->class) && $x977->class === 'Error') {$x977->properties['file'] = '<image>/05_string.js';$x977->properties['line'] = 305;$x977->properties['column'] = 21;$x977->attributes['file'] = $x977->attributes['line'] = $x977->attributes['column'] = 0; }
throw new JSException($x977, 305, 21, '<image>/05_string.js');
}
$x973 = $x971->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x974 = $x973($global, $x967, $x971, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x974;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x979 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 48, '<image>/05_string.js');
$_TypeError =& $x979[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x979;
$x980 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x981 = $x980($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x981->class) && $x981->class === 'Error') {$x981->properties['file'] = '<image>/05_string.js';$x981->properties['line'] = 305;$x981->properties['column'] = 48;$x981->attributes['file'] = $x981->attributes['line'] = $x981->attributes['column'] = 0; }
throw new JSException($x981, 305, 48, '<image>/05_string.js');
}
$x978 = JS::toObject($_Math, $global);
unset($x982, $W982, $S982, $U982);
$x983 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x978, (string) 'max', 305, 48, '<image>/05_string.js');
$x982 =& $x983[0]; list(,$W982,$S982,$U982) = $x983;
if (!(is_object($x982) && isset($x982->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x986 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 48, '<image>/05_string.js');
$_TypeError =& $x986[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x986;
$x987 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x988 = $x987($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x988->class) && $x988->class === 'Error') {$x988->properties['file'] = '<image>/05_string.js';$x988->properties['line'] = 305;$x988->properties['column'] = 48;$x988->attributes['file'] = $x988->attributes['line'] = $x988->attributes['column'] = 0; }
throw new JSException($x988, 305, 48, '<image>/05_string.js');
}
$x984 = $x982->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x985 = $x984($global, $x978, $x982, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x985;
return (string) substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x894=&$scope->properties[\'arguments\'];$x894->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x894->properties[$i]=$args[$i];$x894->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x895=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x895,$global)){if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=0;}$x896=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x896,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x897=JS::toPrimitive($_start,$global);$x898=JS::toPrimitive(0,$global);$x899=(is_string($x897)&&is_string($x898)?strcmp($x897,$x898)<0:(!is_nan($x900=JS::toNumber($x897,$global))&&!is_nan($x901=JS::toNumber($x898,$global))&&$x900<$x901));if(JS::toBoolean($x899,$global)){unset($_Math,$WMath,$SMath,$UMath);$x902=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',295,11,\'<image>/05_string.js\');$_Math=&$x902[0];list(,$WMath,$SMath,$UMath)=$x902;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x903=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',295,11,\'<image>/05_string.js\');$_ReferenceError=&$x903[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x903;$x904=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,11);$x905=$x904($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x905->class)&&$x905->class===\'Error\'){$x905->properties[\'file\']=\'<image>/05_string.js\';$x905->properties[\'line\']=295;$x905->properties[\'column\']=11;$x905->attributes[\'file\']=$x905->attributes[\'line\']=$x905->attributes[\'column\']=0;}throw new JSException($x905,295,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x907=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',295,19,\'<image>/05_string.js\');$_TypeError=&$x907[0];list(,$WTypeError,$STypeError,$UTypeError)=$x907;$x908=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x909=$x908($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x909->class)&&$x909->class===\'Error\'){$x909->properties[\'file\']=\'<image>/05_string.js\';$x909->properties[\'line\']=295;$x909->properties[\'column\']=19;$x909->attributes[\'file\']=$x909->attributes[\'line\']=$x909->attributes[\'column\']=0;}throw new JSException($x909,295,19,\'<image>/05_string.js\');}$x906=JS::toObject($_Math,$global);unset($x910,$W910,$S910,$U910);$x911=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x906,(string)\'max\',295,19,\'<image>/05_string.js\');$x910=&$x911[0];list(,$W910,$S910,$U910)=$x911;$x912=JS::toPrimitive($_start,$global);$x913=JS::toPrimitive($_length,$global);if(!(is_object($x910)&&isset($x910->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x916=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',295,19,\'<image>/05_string.js\');$_TypeError=&$x916[0];list(,$WTypeError,$STypeError,$UTypeError)=$x916;$x917=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x918=$x917($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x918->class)&&$x918->class===\'Error\'){$x918->properties[\'file\']=\'<image>/05_string.js\';$x918->properties[\'line\']=295;$x918->properties[\'column\']=19;$x918->attributes[\'file\']=$x918->attributes[\'line\']=$x918->attributes[\'column\']=0;}throw new JSException($x918,295,19,\'<image>/05_string.js\');}$x914=$x910->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x915=$x914($global,$x906,$x910,array((is_string($x912)||is_string($x913)?JS::toString($x912,$global).JS::toString($x913,$global):JS::toNumber($x912,$global)+JS::toNumber($x913,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x915;}$x919=JS::toPrimitive($_end,$global);$x920=JS::toPrimitive(0,$global);$x921=(is_string($x919)&&is_string($x920)?strcmp($x919,$x920)<0:(!is_nan($x922=JS::toNumber($x919,$global))&&!is_nan($x923=JS::toNumber($x920,$global))&&$x922<$x923));if(JS::toBoolean($x921,$global)){unset($_Math,$WMath,$SMath,$UMath);$x924=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',299,9,\'<image>/05_string.js\');$_Math=&$x924[0];list(,$WMath,$SMath,$UMath)=$x924;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x925=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',299,9,\'<image>/05_string.js\');$_ReferenceError=&$x925[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x925;$x926=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,9);$x927=$x926($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x927->class)&&$x927->class===\'Error\'){$x927->properties[\'file\']=\'<image>/05_string.js\';$x927->properties[\'line\']=299;$x927->properties[\'column\']=9;$x927->attributes[\'file\']=$x927->attributes[\'line\']=$x927->attributes[\'column\']=0;}throw new JSException($x927,299,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x929=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',299,17,\'<image>/05_string.js\');$_TypeError=&$x929[0];list(,$WTypeError,$STypeError,$UTypeError)=$x929;$x930=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x931=$x930($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x931->class)&&$x931->class===\'Error\'){$x931->properties[\'file\']=\'<image>/05_string.js\';$x931->properties[\'line\']=299;$x931->properties[\'column\']=17;$x931->attributes[\'file\']=$x931->attributes[\'line\']=$x931->attributes[\'column\']=0;}throw new JSException($x931,299,17,\'<image>/05_string.js\');}$x928=JS::toObject($_Math,$global);unset($x932,$W932,$S932,$U932);$x933=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x928,(string)\'max\',299,17,\'<image>/05_string.js\');$x932=&$x933[0];list(,$W932,$S932,$U932)=$x933;$x934=JS::toPrimitive($_end,$global);$x935=JS::toPrimitive($_length,$global);if(!(is_object($x932)&&isset($x932->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x938=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',299,17,\'<image>/05_string.js\');$_TypeError=&$x938[0];list(,$WTypeError,$STypeError,$UTypeError)=$x938;$x939=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x940=$x939($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x940->class)&&$x940->class===\'Error\'){$x940->properties[\'file\']=\'<image>/05_string.js\';$x940->properties[\'line\']=299;$x940->properties[\'column\']=17;$x940->attributes[\'file\']=$x940->attributes[\'line\']=$x940->attributes[\'column\']=0;}throw new JSException($x940,299,17,\'<image>/05_string.js\');}$x936=$x932->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x937=$x936($global,$x928,$x932,array((is_string($x934)||is_string($x935)?JS::toString($x934,$global).JS::toString($x935,$global):JS::toNumber($x934,$global)+JS::toNumber($x935,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x937;}unset($_Math,$WMath,$SMath,$UMath);$x941=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',302,10,\'<image>/05_string.js\');$_Math=&$x941[0];list(,$WMath,$SMath,$UMath)=$x941;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x942=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',302,10,\'<image>/05_string.js\');$_ReferenceError=&$x942[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x942;$x943=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,10);$x944=$x943($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x944->class)&&$x944->class===\'Error\'){$x944->properties[\'file\']=\'<image>/05_string.js\';$x944->properties[\'line\']=302;$x944->properties[\'column\']=10;$x944->attributes[\'file\']=$x944->attributes[\'line\']=$x944->attributes[\'column\']=0;}throw new JSException($x944,302,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x946=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',302,18,\'<image>/05_string.js\');$_TypeError=&$x946[0];list(,$WTypeError,$STypeError,$UTypeError)=$x946;$x947=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x948=$x947($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x948->class)&&$x948->class===\'Error\'){$x948->properties[\'file\']=\'<image>/05_string.js\';$x948->properties[\'line\']=302;$x948->properties[\'column\']=18;$x948->attributes[\'file\']=$x948->attributes[\'line\']=$x948->attributes[\'column\']=0;}throw new JSException($x948,302,18,\'<image>/05_string.js\');}$x945=JS::toObject($_Math,$global);unset($x949,$W949,$S949,$U949);$x950=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x945,(string)\'min\',302,18,\'<image>/05_string.js\');$x949=&$x950[0];list(,$W949,$S949,$U949)=$x950;if(!(is_object($x949)&&isset($x949->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x953=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',302,18,\'<image>/05_string.js\');$_TypeError=&$x953[0];list(,$WTypeError,$STypeError,$UTypeError)=$x953;$x954=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x955=$x954($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x955->class)&&$x955->class===\'Error\'){$x955->properties[\'file\']=\'<image>/05_string.js\';$x955->properties[\'line\']=302;$x955->properties[\'column\']=18;$x955->attributes[\'file\']=$x955->attributes[\'line\']=$x955->attributes[\'column\']=0;}throw new JSException($x955,302,18,\'<image>/05_string.js\');}$x951=$x949->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x952=$x951($global,$x945,$x949,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x952;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x957=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',303,16,\'<image>/05_string.js\');$_TypeError=&$x957[0];list(,$WTypeError,$STypeError,$UTypeError)=$x957;$x958=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x959=$x958($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x959->class)&&$x959->class===\'Error\'){$x959->properties[\'file\']=\'<image>/05_string.js\';$x959->properties[\'line\']=303;$x959->properties[\'column\']=16;$x959->attributes[\'file\']=$x959->attributes[\'line\']=$x959->attributes[\'column\']=0;}throw new JSException($x959,303,16,\'<image>/05_string.js\');}$x956=JS::toObject($_Math,$global);unset($x960,$W960,$S960,$U960);$x961=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x956,(string)\'min\',303,16,\'<image>/05_string.js\');$x960=&$x961[0];list(,$W960,$S960,$U960)=$x961;if(!(is_object($x960)&&isset($x960->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x964=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',303,16,\'<image>/05_string.js\');$_TypeError=&$x964[0];list(,$WTypeError,$STypeError,$UTypeError)=$x964;$x965=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x966=$x965($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x966->class)&&$x966->class===\'Error\'){$x966->properties[\'file\']=\'<image>/05_string.js\';$x966->properties[\'line\']=303;$x966->properties[\'column\']=16;$x966->attributes[\'file\']=$x966->attributes[\'line\']=$x966->attributes[\'column\']=0;}throw new JSException($x966,303,16,\'<image>/05_string.js\');}$x962=$x960->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x963=$x962($global,$x956,$x960,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x963;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x968=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,21,\'<image>/05_string.js\');$_TypeError=&$x968[0];list(,$WTypeError,$STypeError,$UTypeError)=$x968;$x969=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x970=$x969($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x970->class)&&$x970->class===\'Error\'){$x970->properties[\'file\']=\'<image>/05_string.js\';$x970->properties[\'line\']=305;$x970->properties[\'column\']=21;$x970->attributes[\'file\']=$x970->attributes[\'line\']=$x970->attributes[\'column\']=0;}throw new JSException($x970,305,21,\'<image>/05_string.js\');}$x967=JS::toObject($_Math,$global);unset($x971,$W971,$S971,$U971);$x972=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x967,(string)\'min\',305,21,\'<image>/05_string.js\');$x971=&$x972[0];list(,$W971,$S971,$U971)=$x972;if(!(is_object($x971)&&isset($x971->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x975=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,21,\'<image>/05_string.js\');$_TypeError=&$x975[0];list(,$WTypeError,$STypeError,$UTypeError)=$x975;$x976=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x977=$x976($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x977->class)&&$x977->class===\'Error\'){$x977->properties[\'file\']=\'<image>/05_string.js\';$x977->properties[\'line\']=305;$x977->properties[\'column\']=21;$x977->attributes[\'file\']=$x977->attributes[\'line\']=$x977->attributes[\'column\']=0;}throw new JSException($x977,305,21,\'<image>/05_string.js\');}$x973=$x971->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x974=$x973($global,$x967,$x971,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x974;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x979=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,48,\'<image>/05_string.js\');$_TypeError=&$x979[0];list(,$WTypeError,$STypeError,$UTypeError)=$x979;$x980=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x981=$x980($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x981->class)&&$x981->class===\'Error\'){$x981->properties[\'file\']=\'<image>/05_string.js\';$x981->properties[\'line\']=305;$x981->properties[\'column\']=48;$x981->attributes[\'file\']=$x981->attributes[\'line\']=$x981->attributes[\'column\']=0;}throw new JSException($x981,305,48,\'<image>/05_string.js\');}$x978=JS::toObject($_Math,$global);unset($x982,$W982,$S982,$U982);$x983=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x978,(string)\'max\',305,48,\'<image>/05_string.js\');$x982=&$x983[0];list(,$W982,$S982,$U982)=$x983;if(!(is_object($x982)&&isset($x982->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x986=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,48,\'<image>/05_string.js\');$_TypeError=&$x986[0];list(,$WTypeError,$STypeError,$UTypeError)=$x986;$x987=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x988=$x987($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x988->class)&&$x988->class===\'Error\'){$x988->properties[\'file\']=\'<image>/05_string.js\';$x988->properties[\'line\']=305;$x988->properties[\'column\']=48;$x988->attributes[\'file\']=$x988->attributes[\'line\']=$x988->attributes[\'column\']=0;}throw new JSException($x988,305,48,\'<image>/05_string.js\');}$x984=$x982->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x985=$x984($global,$x978,$x982,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x985;return(string)substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1001 =& $scope->properties['arguments'];
$x1001->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1001->properties[$i] = $args[$i];
$x1001->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['length'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1002 = (((gettype($_length) === gettype(JS::$undefined) && $_length === JS::$undefined))|| (((is_float($_length) || is_int($_length)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_length == JS::$undefined));
if (JS::toBoolean($x1002, $global)) {

return substr($leThis->value,$_start);;
};
return (string) substr($leThis->value,$_start,$_length);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1001=&$scope->properties[\'arguments\'];$x1001->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1001->properties[$i]=$args[$i];$x1001->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'length\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1002=(((gettype($_length)===gettype(JS::$undefined)&&$_length===JS::$undefined))||(((is_float($_length)||is_int($_length))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_length==JS::$undefined));if(JS::toBoolean($x1002,$global)){return substr($leThis->value,$_start);}return(string)substr($leThis->value,$_start,$_length);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1015 =& $scope->properties['arguments'];
$x1015->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1015->properties[$i] = $args[$i];
$x1015->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtolower($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1015=&$scope->properties[\'arguments\'];$x1015->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1015->properties[$i]=$args[$i];$x1015->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtolower($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1042 =& $scope->properties['arguments'];
$x1042->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1042->properties[$i] = $args[$i];
$x1042->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtoupper($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1042=&$scope->properties[\'arguments\'];$x1042->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1042->properties[$i]=$args[$i];$x1042->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtoupper($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1069 =& $scope->properties['arguments'];
$x1069->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1069->properties[$i] = $args[$i];
$x1069->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return trim($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1069=&$scope->properties[\'arguments\'];$x1069->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1069->properties[$i]=$args[$i];$x1069->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return trim($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/05_string.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/05_string.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_String;
$x4 = clone JS::$functionTemplate; $x4->call = '_465e5538fcb402e27559db40bec8addd_1'; $x4->parameters = array (
  0 => 'value',
); $x4->name = 'String'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$scope->properties['String'] = JS::$undefined; $_String =& $scope->properties['String'];
$UString = FALSE;
$_String = $x4;
$x31 = clone JS::$functionTemplate; $x31->call = '_465e5538fcb402e27559db40bec8addd_2'; $x31->parameters = array (
  0 => 'c',
); $x31->scope = $scope; $x31->properties['prototype'] = clone JS::$objectTemplate; $x31->attributes['prototype'] = JS::WRITABLE; $x31->properties['prototype']->properties['constructor'] = $x31; $x31->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x31->properties['length'] = 1; $x31->attributes['length'] = 0;
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x32 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 16, 21, '<image>/05_string.js');
$_TypeError =& $x32[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x32;
$x33 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x34 = $x33($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x34->class) && $x34->class === 'Error') {$x34->properties['file'] = '<image>/05_string.js';$x34->properties['line'] = 16;$x34->properties['column'] = 21;$x34->attributes['file'] = $x34->attributes['line'] = $x34->attributes['column'] = 0; }
throw new JSException($x34, 16, 21, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x35, $W35, $S35, $U35);
$x39 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_String, (string) 'fromCharCode', 16, 21, '<image>/05_string.js');
$x35 =& $x39[0]; list(,$W35,$S35,$U35) = $x39;
if ($U35 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties['fromCharCode'] = $x35; $x35 =& $_String->properties['fromCharCode']; $_String->attributes['fromCharCode'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U35 = FALSE; $W35 = TRUE; }
if (isset($S35)) {
$x41 = $S35->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x42 = $x41($global, $_String, $S35, array($x31), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x40 = $x42;
} else {
if (!$U35) {$x40 = $x31;if ($W35) { $x35 = $x31; }  }
else { $x40 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array' &&  is_int('fromCharCode') && 'fromCharCode' >= $_String->properties['length']) { $_String->properties['length'] = 'fromCharCode' + 1; };
$x43 = clone JS::$objectTemplate;
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x44 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 27, 18, '<image>/05_string.js');
$_TypeError =& $x44[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x44;
$x45 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x46 = $x45($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x46->class) && $x46->class === 'Error') {$x46->properties['file'] = '<image>/05_string.js';$x46->properties['line'] = 27;$x46->properties['column'] = 18;$x46->attributes['file'] = $x46->attributes['line'] = $x46->attributes['column'] = 0; }
throw new JSException($x46, 27, 18, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x47, $W47, $S47, $U47);
$x48 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_String, (string) 'prototype', 27, 18, '<image>/05_string.js');
$x47 =& $x48[0]; list(,$W47,$S47,$U47) = $x48;
if ($U47 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties['prototype'] = $x47; $x47 =& $_String->properties['prototype']; $_String->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U47 = FALSE; $W47 = TRUE; }
if (isset($S47)) {
$x50 = $S47->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x51 = $x50($global, $_String, $S47, array($x43), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x49 = $x51;
} else {
if (!$U47) {$x49 = $x43;if ($W47) { $x47 = $x43; }  }
else { $x49 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_String->properties['length']) { $_String->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x52 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Object', 28, 51, '<image>/05_string.js');
$_Object =& $x52[0]; list(,$WObject,$SObject,$UObject) = $x52;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x53 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 28, 51, '<image>/05_string.js');
$_ReferenceError =& $x53[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x53;
$x54 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 28, 51);
$x55 = $x54($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x55->class) && $x55->class === 'Error') {$x55->properties['file'] = '<image>/05_string.js';$x55->properties['line'] = 28;$x55->properties['column'] = 51;$x55->attributes['file'] = $x55->attributes['line'] = $x55->attributes['column'] = 0; }
throw new JSException($x55, 28, 51, '<image>/05_string.js');
}
$_String->properties['prototype']->prototype =$_Object->properties['prototype'];
$_String->properties['prototype']->class = 'String';
$_String->properties['prototype']->extensible = TRUE;
unset($x56, $W56, $S56, $U56);
$x57 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 31, 7, '<image>/05_string.js');
$x56 =& $x57[0]; list(,$W56,$S56,$U56) = $x57;
if ($x56 === JS::$undefined || $x56 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 31, 30, '<image>/05_string.js');
$_TypeError =& $x58[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x58;
$x59 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x60 = $x59($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error') {$x60->properties['file'] = '<image>/05_string.js';$x60->properties['line'] = 31;$x60->properties['column'] = 30;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 31, 30, '<image>/05_string.js');
}
$x56 = JS::toObject($x56, $global);
unset($x61, $W61, $S61, $U61);
$x62 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x56, (string) 'constructor', 31, 30, '<image>/05_string.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
if ($U61 && (!isset($x56->extensible) || $x56->extensible)) {$x56->properties['constructor'] = $x61; $x61 =& $x56->properties['constructor']; $x56->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U61 = FALSE; $W61 = TRUE; }
if (isset($S61)) {
$x64 = $S61->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x65 = $x64($global, $x56, $S61, array($_String), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x63 = $x65;
} else {
if (!$U61) {$x63 = $_String;if ($W61) { $x61 = $_String; }  }
else { $x63 = JS::$undefined; }
}
if (isset($x56->class) && $x56->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x56->properties['length']) { $x56->properties['length'] = 'constructor' + 1; };
$x80 = clone JS::$functionTemplate; $x80->call = '_465e5538fcb402e27559db40bec8addd_6'; $x80->parameters = array (
); $x80->scope = $scope; $x80->properties['prototype'] = clone JS::$objectTemplate; $x80->attributes['prototype'] = JS::WRITABLE; $x80->properties['prototype']->properties['constructor'] = $x80; $x80->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x80->properties['length'] = 0; $x80->attributes['length'] = 0;
unset($x81, $W81, $S81, $U81);
$x82 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 33, 7, '<image>/05_string.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
if ($x81 === JS::$undefined || $x81 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x83 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 33, 27, '<image>/05_string.js');
$_TypeError =& $x83[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x83;
$x84 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x85 = $x84($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x85->class) && $x85->class === 'Error') {$x85->properties['file'] = '<image>/05_string.js';$x85->properties['line'] = 33;$x85->properties['column'] = 27;$x85->attributes['file'] = $x85->attributes['line'] = $x85->attributes['column'] = 0; }
throw new JSException($x85, 33, 27, '<image>/05_string.js');
}
$x81 = JS::toObject($x81, $global);
unset($x86, $W86, $S86, $U86);
$x87 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x81, (string) 'toString', 33, 27, '<image>/05_string.js');
$x86 =& $x87[0]; list(,$W86,$S86,$U86) = $x87;
if ($U86 && (!isset($x81->extensible) || $x81->extensible)) {$x81->properties['toString'] = $x86; $x86 =& $x81->properties['toString']; $x81->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U86 = FALSE; $W86 = TRUE; }
if (isset($S86)) {
$x89 = $S86->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x90 = $x89($global, $x81, $S86, array($x80), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x88 = $x90;
} else {
if (!$U86) {$x88 = $x80;if ($W86) { $x86 = $x80; }  }
else { $x88 = JS::$undefined; }
}
if (isset($x81->class) && $x81->class === 'Array' &&  is_int('toString') && 'toString' >= $x81->properties['length']) { $x81->properties['length'] = 'toString' + 1; };
unset($x91, $W91, $S91, $U91);
$x92 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 41, 34, '<image>/05_string.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
unset($x93, $W93, $S93, $U93);
$x94 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x91, (string) 'toString', 41, 44, '<image>/05_string.js');
$x93 =& $x94[0]; list(,$W93,$S93,$U93) = $x94;
unset($x95, $W95, $S95, $U95);
$x96 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 41, 7, '<image>/05_string.js');
$x95 =& $x96[0]; list(,$W95,$S95,$U95) = $x96;
if ($x95 === JS::$undefined || $x95 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x97 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 41, 26, '<image>/05_string.js');
$_TypeError =& $x97[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x97;
$x98 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x99 = $x98($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x99->class) && $x99->class === 'Error') {$x99->properties['file'] = '<image>/05_string.js';$x99->properties['line'] = 41;$x99->properties['column'] = 26;$x99->attributes['file'] = $x99->attributes['line'] = $x99->attributes['column'] = 0; }
throw new JSException($x99, 41, 26, '<image>/05_string.js');
}
$x95 = JS::toObject($x95, $global);
unset($x100, $W100, $S100, $U100);
$x101 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x95, (string) 'valueOf', 41, 26, '<image>/05_string.js');
$x100 =& $x101[0]; list(,$W100,$S100,$U100) = $x101;
if ($U100 && (!isset($x95->extensible) || $x95->extensible)) {$x95->properties['valueOf'] = $x100; $x100 =& $x95->properties['valueOf']; $x95->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U100 = FALSE; $W100 = TRUE; }
if (isset($S100)) {
$x103 = $S100->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x104 = $x103($global, $x95, $S100, array($x93), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x102 = $x104;
} else {
if (!$U100) {$x102 = $x93;if ($W100) { $x100 = $x93; }  }
else { $x102 = JS::$undefined; }
}
if (isset($x95->class) && $x95->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x95->properties['length']) { $x95->properties['length'] = 'valueOf' + 1; };
$x120 = clone JS::$functionTemplate; $x120->call = '_465e5538fcb402e27559db40bec8addd_7'; $x120->parameters = array (
  0 => 'pos',
); $x120->scope = $scope; $x120->properties['prototype'] = clone JS::$objectTemplate; $x120->attributes['prototype'] = JS::WRITABLE; $x120->properties['prototype']->properties['constructor'] = $x120; $x120->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x120->properties['length'] = 1; $x120->attributes['length'] = 0;
unset($x121, $W121, $S121, $U121);
$x122 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 43, 7, '<image>/05_string.js');
$x121 =& $x122[0]; list(,$W121,$S121,$U121) = $x122;
if ($x121 === JS::$undefined || $x121 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x123 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 43, 25, '<image>/05_string.js');
$_TypeError =& $x123[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x123;
$x124 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x125 = $x124($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x125->class) && $x125->class === 'Error') {$x125->properties['file'] = '<image>/05_string.js';$x125->properties['line'] = 43;$x125->properties['column'] = 25;$x125->attributes['file'] = $x125->attributes['line'] = $x125->attributes['column'] = 0; }
throw new JSException($x125, 43, 25, '<image>/05_string.js');
}
$x121 = JS::toObject($x121, $global);
unset($x126, $W126, $S126, $U126);
$x127 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x121, (string) 'charAt', 43, 25, '<image>/05_string.js');
$x126 =& $x127[0]; list(,$W126,$S126,$U126) = $x127;
if ($U126 && (!isset($x121->extensible) || $x121->extensible)) {$x121->properties['charAt'] = $x126; $x126 =& $x121->properties['charAt']; $x121->attributes['charAt'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U126 = FALSE; $W126 = TRUE; }
if (isset($S126)) {
$x129 = $S126->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x130 = $x129($global, $x121, $S126, array($x120), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x128 = $x130;
} else {
if (!$U126) {$x128 = $x120;if ($W126) { $x126 = $x120; }  }
else { $x128 = JS::$undefined; }
}
if (isset($x121->class) && $x121->class === 'Array' &&  is_int('charAt') && 'charAt' >= $x121->properties['length']) { $x121->properties['length'] = 'charAt' + 1; };
$x161 = clone JS::$functionTemplate; $x161->call = '_465e5538fcb402e27559db40bec8addd_8'; $x161->parameters = array (
  0 => 'pos',
); $x161->scope = $scope; $x161->properties['prototype'] = clone JS::$objectTemplate; $x161->attributes['prototype'] = JS::WRITABLE; $x161->properties['prototype']->properties['constructor'] = $x161; $x161->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x161->properties['length'] = 1; $x161->attributes['length'] = 0;
unset($x162, $W162, $S162, $U162);
$x163 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 53, 7, '<image>/05_string.js');
$x162 =& $x163[0]; list(,$W162,$S162,$U162) = $x163;
if ($x162 === JS::$undefined || $x162 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x164 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 53, 29, '<image>/05_string.js');
$_TypeError =& $x164[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x164;
$x165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x166 = $x165($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x166->class) && $x166->class === 'Error') {$x166->properties['file'] = '<image>/05_string.js';$x166->properties['line'] = 53;$x166->properties['column'] = 29;$x166->attributes['file'] = $x166->attributes['line'] = $x166->attributes['column'] = 0; }
throw new JSException($x166, 53, 29, '<image>/05_string.js');
}
$x162 = JS::toObject($x162, $global);
unset($x167, $W167, $S167, $U167);
$x168 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x162, (string) 'charCodeAt', 53, 29, '<image>/05_string.js');
$x167 =& $x168[0]; list(,$W167,$S167,$U167) = $x168;
if ($U167 && (!isset($x162->extensible) || $x162->extensible)) {$x162->properties['charCodeAt'] = $x167; $x167 =& $x162->properties['charCodeAt']; $x162->attributes['charCodeAt'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U167 = FALSE; $W167 = TRUE; }
if (isset($S167)) {
$x170 = $S167->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x171 = $x170($global, $x162, $S167, array($x161), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x169 = $x171;
} else {
if (!$U167) {$x169 = $x161;if ($W167) { $x167 = $x161; }  }
else { $x169 = JS::$undefined; }
}
if (isset($x162->class) && $x162->class === 'Array' &&  is_int('charCodeAt') && 'charCodeAt' >= $x162->properties['length']) { $x162->properties['length'] = 'charCodeAt' + 1; };
$x191 = clone JS::$functionTemplate; $x191->call = '_465e5538fcb402e27559db40bec8addd_9'; $x191->parameters = array (
  0 => 'string',
); $x191->scope = $scope; $x191->properties['prototype'] = clone JS::$objectTemplate; $x191->attributes['prototype'] = JS::WRITABLE; $x191->properties['prototype']->properties['constructor'] = $x191; $x191->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x191->properties['length'] = 1; $x191->attributes['length'] = 0;
unset($x192, $W192, $S192, $U192);
$x193 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 65, 7, '<image>/05_string.js');
$x192 =& $x193[0]; list(,$W192,$S192,$U192) = $x193;
if ($x192 === JS::$undefined || $x192 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x194 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 65, 25, '<image>/05_string.js');
$_TypeError =& $x194[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x194;
$x195 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x196 = $x195($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x196->class) && $x196->class === 'Error') {$x196->properties['file'] = '<image>/05_string.js';$x196->properties['line'] = 65;$x196->properties['column'] = 25;$x196->attributes['file'] = $x196->attributes['line'] = $x196->attributes['column'] = 0; }
throw new JSException($x196, 65, 25, '<image>/05_string.js');
}
$x192 = JS::toObject($x192, $global);
unset($x197, $W197, $S197, $U197);
$x198 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x192, (string) 'concat', 65, 25, '<image>/05_string.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if ($U197 && (!isset($x192->extensible) || $x192->extensible)) {$x192->properties['concat'] = $x197; $x197 =& $x192->properties['concat']; $x192->attributes['concat'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U197 = FALSE; $W197 = TRUE; }
if (isset($S197)) {
$x200 = $S197->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x201 = $x200($global, $x192, $S197, array($x191), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x199 = $x201;
} else {
if (!$U197) {$x199 = $x191;if ($W197) { $x197 = $x191; }  }
else { $x199 = JS::$undefined; }
}
if (isset($x192->class) && $x192->class === 'Array' &&  is_int('concat') && 'concat' >= $x192->properties['length']) { $x192->properties['length'] = 'concat' + 1; };
$x232 = clone JS::$functionTemplate; $x232->call = '_465e5538fcb402e27559db40bec8addd_10'; $x232->parameters = array (
  0 => 'search',
  1 => 'position',
); $x232->scope = $scope; $x232->properties['prototype'] = clone JS::$objectTemplate; $x232->attributes['prototype'] = JS::WRITABLE; $x232->properties['prototype']->properties['constructor'] = $x232; $x232->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x232->properties['length'] = 2; $x232->attributes['length'] = 0;
unset($x233, $W233, $S233, $U233);
$x234 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 75, 7, '<image>/05_string.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
if ($x233 === JS::$undefined || $x233 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x235 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 75, 26, '<image>/05_string.js');
$_TypeError =& $x235[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x235;
$x236 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x237 = $x236($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x237->class) && $x237->class === 'Error') {$x237->properties['file'] = '<image>/05_string.js';$x237->properties['line'] = 75;$x237->properties['column'] = 26;$x237->attributes['file'] = $x237->attributes['line'] = $x237->attributes['column'] = 0; }
throw new JSException($x237, 75, 26, '<image>/05_string.js');
}
$x233 = JS::toObject($x233, $global);
unset($x238, $W238, $S238, $U238);
$x239 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x233, (string) 'indexOf', 75, 26, '<image>/05_string.js');
$x238 =& $x239[0]; list(,$W238,$S238,$U238) = $x239;
if ($U238 && (!isset($x233->extensible) || $x233->extensible)) {$x233->properties['indexOf'] = $x238; $x238 =& $x233->properties['indexOf']; $x233->attributes['indexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U238 = FALSE; $W238 = TRUE; }
if (isset($S238)) {
$x241 = $S238->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x242 = $x241($global, $x233, $S238, array($x232), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x240 = $x242;
} else {
if (!$U238) {$x240 = $x232;if ($W238) { $x238 = $x232; }  }
else { $x240 = JS::$undefined; }
}
if (isset($x233->class) && $x233->class === 'Array' &&  is_int('indexOf') && 'indexOf' >= $x233->properties['length']) { $x233->properties['length'] = 'indexOf' + 1; };
$x273 = clone JS::$functionTemplate; $x273->call = '_465e5538fcb402e27559db40bec8addd_11'; $x273->parameters = array (
  0 => 'search',
  1 => 'position',
); $x273->scope = $scope; $x273->properties['prototype'] = clone JS::$objectTemplate; $x273->attributes['prototype'] = JS::WRITABLE; $x273->properties['prototype']->properties['constructor'] = $x273; $x273->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x273->properties['length'] = 2; $x273->attributes['length'] = 0;
unset($x274, $W274, $S274, $U274);
$x275 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 90, 7, '<image>/05_string.js');
$x274 =& $x275[0]; list(,$W274,$S274,$U274) = $x275;
if ($x274 === JS::$undefined || $x274 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x276 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 90, 30, '<image>/05_string.js');
$_TypeError =& $x276[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x276;
$x277 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x278 = $x277($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x278->class) && $x278->class === 'Error') {$x278->properties['file'] = '<image>/05_string.js';$x278->properties['line'] = 90;$x278->properties['column'] = 30;$x278->attributes['file'] = $x278->attributes['line'] = $x278->attributes['column'] = 0; }
throw new JSException($x278, 90, 30, '<image>/05_string.js');
}
$x274 = JS::toObject($x274, $global);
unset($x279, $W279, $S279, $U279);
$x280 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x274, (string) 'lastIndexOf', 90, 30, '<image>/05_string.js');
$x279 =& $x280[0]; list(,$W279,$S279,$U279) = $x280;
if ($U279 && (!isset($x274->extensible) || $x274->extensible)) {$x274->properties['lastIndexOf'] = $x279; $x279 =& $x274->properties['lastIndexOf']; $x274->attributes['lastIndexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U279 = FALSE; $W279 = TRUE; }
if (isset($S279)) {
$x282 = $S279->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x283 = $x282($global, $x274, $S279, array($x273), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x281 = $x283;
} else {
if (!$U279) {$x281 = $x273;if ($W279) { $x279 = $x273; }  }
else { $x281 = JS::$undefined; }
}
if (isset($x274->class) && $x274->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $x274->properties['length']) { $x274->properties['length'] = 'lastIndexOf' + 1; };
$x286 = clone JS::$functionTemplate; $x286->call = '_465e5538fcb402e27559db40bec8addd_12'; $x286->parameters = array (
  0 => 'that',
); $x286->scope = $scope; $x286->properties['prototype'] = clone JS::$objectTemplate; $x286->attributes['prototype'] = JS::WRITABLE; $x286->properties['prototype']->properties['constructor'] = $x286; $x286->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x286->properties['length'] = 1; $x286->attributes['length'] = 0;
unset($x287, $W287, $S287, $U287);
$x288 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 105, 7, '<image>/05_string.js');
$x287 =& $x288[0]; list(,$W287,$S287,$U287) = $x288;
if ($x287 === JS::$undefined || $x287 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x289 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 105, 32, '<image>/05_string.js');
$_TypeError =& $x289[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x289;
$x290 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x291 = $x290($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x291->class) && $x291->class === 'Error') {$x291->properties['file'] = '<image>/05_string.js';$x291->properties['line'] = 105;$x291->properties['column'] = 32;$x291->attributes['file'] = $x291->attributes['line'] = $x291->attributes['column'] = 0; }
throw new JSException($x291, 105, 32, '<image>/05_string.js');
}
$x287 = JS::toObject($x287, $global);
unset($x292, $W292, $S292, $U292);
$x293 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x287, (string) 'localeCompare', 105, 32, '<image>/05_string.js');
$x292 =& $x293[0]; list(,$W292,$S292,$U292) = $x293;
if ($U292 && (!isset($x287->extensible) || $x287->extensible)) {$x287->properties['localeCompare'] = $x292; $x292 =& $x287->properties['localeCompare']; $x287->attributes['localeCompare'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U292 = FALSE; $W292 = TRUE; }
if (isset($S292)) {
$x295 = $S292->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x296 = $x295($global, $x287, $S292, array($x286), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x294 = $x296;
} else {
if (!$U292) {$x294 = $x286;if ($W292) { $x292 = $x286; }  }
else { $x294 = JS::$undefined; }
}
if (isset($x287->class) && $x287->class === 'Array' &&  is_int('localeCompare') && 'localeCompare' >= $x287->properties['length']) { $x287->properties['length'] = 'localeCompare' + 1; };
$x378 = clone JS::$functionTemplate; $x378->call = '_465e5538fcb402e27559db40bec8addd_13'; $x378->parameters = array (
  0 => 'regexp',
); $x378->scope = $scope; $x378->properties['prototype'] = clone JS::$objectTemplate; $x378->attributes['prototype'] = JS::WRITABLE; $x378->properties['prototype']->properties['constructor'] = $x378; $x378->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x378->properties['length'] = 1; $x378->attributes['length'] = 0;
unset($x379, $W379, $S379, $U379);
$x380 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 109, 7, '<image>/05_string.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
if ($x379 === JS::$undefined || $x379 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x381 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 109, 24, '<image>/05_string.js');
$_TypeError =& $x381[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x381;
$x382 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x383 = $x382($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x383->class) && $x383->class === 'Error') {$x383->properties['file'] = '<image>/05_string.js';$x383->properties['line'] = 109;$x383->properties['column'] = 24;$x383->attributes['file'] = $x383->attributes['line'] = $x383->attributes['column'] = 0; }
throw new JSException($x383, 109, 24, '<image>/05_string.js');
}
$x379 = JS::toObject($x379, $global);
unset($x384, $W384, $S384, $U384);
$x385 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x379, (string) 'match', 109, 24, '<image>/05_string.js');
$x384 =& $x385[0]; list(,$W384,$S384,$U384) = $x385;
if ($U384 && (!isset($x379->extensible) || $x379->extensible)) {$x379->properties['match'] = $x384; $x384 =& $x379->properties['match']; $x379->attributes['match'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U384 = FALSE; $W384 = TRUE; }
if (isset($S384)) {
$x387 = $S384->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x388 = $x387($global, $x379, $S384, array($x378), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x386 = $x388;
} else {
if (!$U384) {$x386 = $x378;if ($W384) { $x384 = $x378; }  }
else { $x386 = JS::$undefined; }
}
if (isset($x379->class) && $x379->class === 'Array' &&  is_int('match') && 'match' >= $x379->properties['length']) { $x379->properties['length'] = 'match' + 1; };
$x558 = clone JS::$functionTemplate; $x558->call = '_465e5538fcb402e27559db40bec8addd_14'; $x558->parameters = array (
  0 => 'search',
  1 => 'replace',
); $x558->scope = $scope; $x558->properties['prototype'] = clone JS::$objectTemplate; $x558->attributes['prototype'] = JS::WRITABLE; $x558->properties['prototype']->properties['constructor'] = $x558; $x558->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x558->properties['length'] = 2; $x558->attributes['length'] = 0;
unset($x559, $W559, $S559, $U559);
$x560 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 144, 7, '<image>/05_string.js');
$x559 =& $x560[0]; list(,$W559,$S559,$U559) = $x560;
if ($x559 === JS::$undefined || $x559 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x561 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 144, 26, '<image>/05_string.js');
$_TypeError =& $x561[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x561;
$x562 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x563 = $x562($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x563->class) && $x563->class === 'Error') {$x563->properties['file'] = '<image>/05_string.js';$x563->properties['line'] = 144;$x563->properties['column'] = 26;$x563->attributes['file'] = $x563->attributes['line'] = $x563->attributes['column'] = 0; }
throw new JSException($x563, 144, 26, '<image>/05_string.js');
}
$x559 = JS::toObject($x559, $global);
unset($x564, $W564, $S564, $U564);
$x565 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x559, (string) 'replace', 144, 26, '<image>/05_string.js');
$x564 =& $x565[0]; list(,$W564,$S564,$U564) = $x565;
if ($U564 && (!isset($x559->extensible) || $x559->extensible)) {$x559->properties['replace'] = $x564; $x564 =& $x559->properties['replace']; $x559->attributes['replace'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U564 = FALSE; $W564 = TRUE; }
if (isset($S564)) {
$x567 = $S564->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x568 = $x567($global, $x559, $S564, array($x558), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x566 = $x568;
} else {
if (!$U564) {$x566 = $x558;if ($W564) { $x564 = $x558; }  }
else { $x566 = JS::$undefined; }
}
if (isset($x559->class) && $x559->class === 'Array' &&  is_int('replace') && 'replace' >= $x559->properties['length']) { $x559->properties['length'] = 'replace' + 1; };
$x607 = clone JS::$functionTemplate; $x607->call = '_465e5538fcb402e27559db40bec8addd_16'; $x607->parameters = array (
  0 => 'search',
); $x607->scope = $scope; $x607->properties['prototype'] = clone JS::$objectTemplate; $x607->attributes['prototype'] = JS::WRITABLE; $x607->properties['prototype']->properties['constructor'] = $x607; $x607->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x607->properties['length'] = 1; $x607->attributes['length'] = 0;
unset($x608, $W608, $S608, $U608);
$x609 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 189, 7, '<image>/05_string.js');
$x608 =& $x609[0]; list(,$W608,$S608,$U608) = $x609;
if ($x608 === JS::$undefined || $x608 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x610 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 189, 25, '<image>/05_string.js');
$_TypeError =& $x610[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x610;
$x611 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x612 = $x611($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x612->class) && $x612->class === 'Error') {$x612->properties['file'] = '<image>/05_string.js';$x612->properties['line'] = 189;$x612->properties['column'] = 25;$x612->attributes['file'] = $x612->attributes['line'] = $x612->attributes['column'] = 0; }
throw new JSException($x612, 189, 25, '<image>/05_string.js');
}
$x608 = JS::toObject($x608, $global);
unset($x613, $W613, $S613, $U613);
$x614 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x608, (string) 'search', 189, 25, '<image>/05_string.js');
$x613 =& $x614[0]; list(,$W613,$S613,$U613) = $x614;
if ($U613 && (!isset($x608->extensible) || $x608->extensible)) {$x608->properties['search'] = $x613; $x613 =& $x608->properties['search']; $x608->attributes['search'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U613 = FALSE; $W613 = TRUE; }
if (isset($S613)) {
$x616 = $S613->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x617 = $x616($global, $x608, $S613, array($x607), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x615 = $x617;
} else {
if (!$U613) {$x615 = $x607;if ($W613) { $x613 = $x607; }  }
else { $x615 = JS::$undefined; }
}
if (isset($x608->class) && $x608->class === 'Array' &&  is_int('search') && 'search' >= $x608->properties['length']) { $x608->properties['length'] = 'search' + 1; };
$x666 = clone JS::$functionTemplate; $x666->call = '_465e5538fcb402e27559db40bec8addd_17'; $x666->parameters = array (
  0 => 'start',
  1 => 'end',
); $x666->scope = $scope; $x666->properties['prototype'] = clone JS::$objectTemplate; $x666->attributes['prototype'] = JS::WRITABLE; $x666->properties['prototype']->properties['constructor'] = $x666; $x666->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x666->properties['length'] = 2; $x666->attributes['length'] = 0;
unset($x667, $W667, $S667, $U667);
$x668 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 206, 7, '<image>/05_string.js');
$x667 =& $x668[0]; list(,$W667,$S667,$U667) = $x668;
if ($x667 === JS::$undefined || $x667 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x669 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 206, 24, '<image>/05_string.js');
$_TypeError =& $x669[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x669;
$x670 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x671 = $x670($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x671->class) && $x671->class === 'Error') {$x671->properties['file'] = '<image>/05_string.js';$x671->properties['line'] = 206;$x671->properties['column'] = 24;$x671->attributes['file'] = $x671->attributes['line'] = $x671->attributes['column'] = 0; }
throw new JSException($x671, 206, 24, '<image>/05_string.js');
}
$x667 = JS::toObject($x667, $global);
unset($x672, $W672, $S672, $U672);
$x673 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x667, (string) 'slice', 206, 24, '<image>/05_string.js');
$x672 =& $x673[0]; list(,$W672,$S672,$U672) = $x673;
if ($U672 && (!isset($x667->extensible) || $x667->extensible)) {$x667->properties['slice'] = $x672; $x672 =& $x667->properties['slice']; $x667->attributes['slice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U672 = FALSE; $W672 = TRUE; }
if (isset($S672)) {
$x675 = $S672->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x676 = $x675($global, $x667, $S672, array($x666), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x674 = $x676;
} else {
if (!$U672) {$x674 = $x666;if ($W672) { $x672 = $x666; }  }
else { $x674 = JS::$undefined; }
}
if (isset($x667->class) && $x667->class === 'Array' &&  is_int('slice') && 'slice' >= $x667->properties['length']) { $x667->properties['length'] = 'slice' + 1; };
$x882 = clone JS::$functionTemplate; $x882->call = '_465e5538fcb402e27559db40bec8addd_18'; $x882->parameters = array (
  0 => 'separator',
  1 => 'limit',
); $x882->scope = $scope; $x882->properties['prototype'] = clone JS::$objectTemplate; $x882->attributes['prototype'] = JS::WRITABLE; $x882->properties['prototype']->properties['constructor'] = $x882; $x882->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x882->properties['length'] = 2; $x882->attributes['length'] = 0;
unset($x883, $W883, $S883, $U883);
$x884 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 228, 7, '<image>/05_string.js');
$x883 =& $x884[0]; list(,$W883,$S883,$U883) = $x884;
if ($x883 === JS::$undefined || $x883 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x885 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 228, 24, '<image>/05_string.js');
$_TypeError =& $x885[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x885;
$x886 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x887 = $x886($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x887->class) && $x887->class === 'Error') {$x887->properties['file'] = '<image>/05_string.js';$x887->properties['line'] = 228;$x887->properties['column'] = 24;$x887->attributes['file'] = $x887->attributes['line'] = $x887->attributes['column'] = 0; }
throw new JSException($x887, 228, 24, '<image>/05_string.js');
}
$x883 = JS::toObject($x883, $global);
unset($x888, $W888, $S888, $U888);
$x889 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x883, (string) 'split', 228, 24, '<image>/05_string.js');
$x888 =& $x889[0]; list(,$W888,$S888,$U888) = $x889;
if ($U888 && (!isset($x883->extensible) || $x883->extensible)) {$x883->properties['split'] = $x888; $x888 =& $x883->properties['split']; $x883->attributes['split'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U888 = FALSE; $W888 = TRUE; }
if (isset($S888)) {
$x891 = $S888->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x892 = $x891($global, $x883, $S888, array($x882), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x890 = $x892;
} else {
if (!$U888) {$x890 = $x882;if ($W888) { $x888 = $x882; }  }
else { $x890 = JS::$undefined; }
}
if (isset($x883->class) && $x883->class === 'Array' &&  is_int('split') && 'split' >= $x883->properties['length']) { $x883->properties['length'] = 'split' + 1; };
$x989 = clone JS::$functionTemplate; $x989->call = '_465e5538fcb402e27559db40bec8addd_19'; $x989->parameters = array (
  0 => 'start',
  1 => 'end',
); $x989->scope = $scope; $x989->properties['prototype'] = clone JS::$objectTemplate; $x989->attributes['prototype'] = JS::WRITABLE; $x989->properties['prototype']->properties['constructor'] = $x989; $x989->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x989->properties['length'] = 2; $x989->attributes['length'] = 0;
unset($x990, $W990, $S990, $U990);
$x991 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 283, 7, '<image>/05_string.js');
$x990 =& $x991[0]; list(,$W990,$S990,$U990) = $x991;
if ($x990 === JS::$undefined || $x990 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x992 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 283, 28, '<image>/05_string.js');
$_TypeError =& $x992[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x992;
$x993 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x994 = $x993($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x994->class) && $x994->class === 'Error') {$x994->properties['file'] = '<image>/05_string.js';$x994->properties['line'] = 283;$x994->properties['column'] = 28;$x994->attributes['file'] = $x994->attributes['line'] = $x994->attributes['column'] = 0; }
throw new JSException($x994, 283, 28, '<image>/05_string.js');
}
$x990 = JS::toObject($x990, $global);
unset($x995, $W995, $S995, $U995);
$x996 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x990, (string) 'substring', 283, 28, '<image>/05_string.js');
$x995 =& $x996[0]; list(,$W995,$S995,$U995) = $x996;
if ($U995 && (!isset($x990->extensible) || $x990->extensible)) {$x990->properties['substring'] = $x995; $x995 =& $x990->properties['substring']; $x990->attributes['substring'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U995 = FALSE; $W995 = TRUE; }
if (isset($S995)) {
$x998 = $S995->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x999 = $x998($global, $x990, $S995, array($x989), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x997 = $x999;
} else {
if (!$U995) {$x997 = $x989;if ($W995) { $x995 = $x989; }  }
else { $x997 = JS::$undefined; }
}
if (isset($x990->class) && $x990->class === 'Array' &&  is_int('substring') && 'substring' >= $x990->properties['length']) { $x990->properties['length'] = 'substring' + 1; };
$x1003 = clone JS::$functionTemplate; $x1003->call = '_465e5538fcb402e27559db40bec8addd_20'; $x1003->parameters = array (
  0 => 'start',
  1 => 'length',
); $x1003->scope = $scope; $x1003->properties['prototype'] = clone JS::$objectTemplate; $x1003->attributes['prototype'] = JS::WRITABLE; $x1003->properties['prototype']->properties['constructor'] = $x1003; $x1003->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1003->properties['length'] = 2; $x1003->attributes['length'] = 0;
unset($x1004, $W1004, $S1004, $U1004);
$x1005 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 311, 7, '<image>/05_string.js');
$x1004 =& $x1005[0]; list(,$W1004,$S1004,$U1004) = $x1005;
if ($x1004 === JS::$undefined || $x1004 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1006 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 311, 25, '<image>/05_string.js');
$_TypeError =& $x1006[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1006;
$x1007 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1008 = $x1007($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1008->class) && $x1008->class === 'Error') {$x1008->properties['file'] = '<image>/05_string.js';$x1008->properties['line'] = 311;$x1008->properties['column'] = 25;$x1008->attributes['file'] = $x1008->attributes['line'] = $x1008->attributes['column'] = 0; }
throw new JSException($x1008, 311, 25, '<image>/05_string.js');
}
$x1004 = JS::toObject($x1004, $global);
unset($x1009, $W1009, $S1009, $U1009);
$x1010 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1004, (string) 'substr', 311, 25, '<image>/05_string.js');
$x1009 =& $x1010[0]; list(,$W1009,$S1009,$U1009) = $x1010;
if ($U1009 && (!isset($x1004->extensible) || $x1004->extensible)) {$x1004->properties['substr'] = $x1009; $x1009 =& $x1004->properties['substr']; $x1004->attributes['substr'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1009 = FALSE; $W1009 = TRUE; }
if (isset($S1009)) {
$x1012 = $S1009->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1013 = $x1012($global, $x1004, $S1009, array($x1003), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1011 = $x1013;
} else {
if (!$U1009) {$x1011 = $x1003;if ($W1009) { $x1009 = $x1003; }  }
else { $x1011 = JS::$undefined; }
}
if (isset($x1004->class) && $x1004->class === 'Array' &&  is_int('substr') && 'substr' >= $x1004->properties['length']) { $x1004->properties['length'] = 'substr' + 1; };
$x1016 = clone JS::$functionTemplate; $x1016->call = '_465e5538fcb402e27559db40bec8addd_21'; $x1016->parameters = array (
); $x1016->scope = $scope; $x1016->properties['prototype'] = clone JS::$objectTemplate; $x1016->attributes['prototype'] = JS::WRITABLE; $x1016->properties['prototype']->properties['constructor'] = $x1016; $x1016->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1016->properties['length'] = 0; $x1016->attributes['length'] = 0;
unset($x1017, $W1017, $S1017, $U1017);
$x1018 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 319, 7, '<image>/05_string.js');
$x1017 =& $x1018[0]; list(,$W1017,$S1017,$U1017) = $x1018;
if ($x1017 === JS::$undefined || $x1017 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1019 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 319, 30, '<image>/05_string.js');
$_TypeError =& $x1019[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1019;
$x1020 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1021 = $x1020($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1021->class) && $x1021->class === 'Error') {$x1021->properties['file'] = '<image>/05_string.js';$x1021->properties['line'] = 319;$x1021->properties['column'] = 30;$x1021->attributes['file'] = $x1021->attributes['line'] = $x1021->attributes['column'] = 0; }
throw new JSException($x1021, 319, 30, '<image>/05_string.js');
}
$x1017 = JS::toObject($x1017, $global);
unset($x1022, $W1022, $S1022, $U1022);
$x1023 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1017, (string) 'toLowerCase', 319, 30, '<image>/05_string.js');
$x1022 =& $x1023[0]; list(,$W1022,$S1022,$U1022) = $x1023;
if ($U1022 && (!isset($x1017->extensible) || $x1017->extensible)) {$x1017->properties['toLowerCase'] = $x1022; $x1022 =& $x1017->properties['toLowerCase']; $x1017->attributes['toLowerCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1022 = FALSE; $W1022 = TRUE; }
if (isset($S1022)) {
$x1025 = $S1022->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1026 = $x1025($global, $x1017, $S1022, array($x1016), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1024 = $x1026;
} else {
if (!$U1022) {$x1024 = $x1016;if ($W1022) { $x1022 = $x1016; }  }
else { $x1024 = JS::$undefined; }
}
if (isset($x1017->class) && $x1017->class === 'Array' &&  is_int('toLowerCase') && 'toLowerCase' >= $x1017->properties['length']) { $x1017->properties['length'] = 'toLowerCase' + 1; };
unset($x1027, $W1027, $S1027, $U1027);
$x1028 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 323, 44, '<image>/05_string.js');
$x1027 =& $x1028[0]; list(,$W1027,$S1027,$U1027) = $x1028;
unset($x1029, $W1029, $S1029, $U1029);
$x1030 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1027, (string) 'toLowerCase', 323, 54, '<image>/05_string.js');
$x1029 =& $x1030[0]; list(,$W1029,$S1029,$U1029) = $x1030;
unset($x1031, $W1031, $S1031, $U1031);
$x1032 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 323, 7, '<image>/05_string.js');
$x1031 =& $x1032[0]; list(,$W1031,$S1031,$U1031) = $x1032;
if ($x1031 === JS::$undefined || $x1031 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1033 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 323, 36, '<image>/05_string.js');
$_TypeError =& $x1033[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1033;
$x1034 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1035 = $x1034($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1035->class) && $x1035->class === 'Error') {$x1035->properties['file'] = '<image>/05_string.js';$x1035->properties['line'] = 323;$x1035->properties['column'] = 36;$x1035->attributes['file'] = $x1035->attributes['line'] = $x1035->attributes['column'] = 0; }
throw new JSException($x1035, 323, 36, '<image>/05_string.js');
}
$x1031 = JS::toObject($x1031, $global);
unset($x1036, $W1036, $S1036, $U1036);
$x1037 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1031, (string) 'toLocaleLowerCase', 323, 36, '<image>/05_string.js');
$x1036 =& $x1037[0]; list(,$W1036,$S1036,$U1036) = $x1037;
if ($U1036 && (!isset($x1031->extensible) || $x1031->extensible)) {$x1031->properties['toLocaleLowerCase'] = $x1036; $x1036 =& $x1031->properties['toLocaleLowerCase']; $x1031->attributes['toLocaleLowerCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1036 = FALSE; $W1036 = TRUE; }
if (isset($S1036)) {
$x1039 = $S1036->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1040 = $x1039($global, $x1031, $S1036, array($x1029), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1038 = $x1040;
} else {
if (!$U1036) {$x1038 = $x1029;if ($W1036) { $x1036 = $x1029; }  }
else { $x1038 = JS::$undefined; }
}
if (isset($x1031->class) && $x1031->class === 'Array' &&  is_int('toLocaleLowerCase') && 'toLocaleLowerCase' >= $x1031->properties['length']) { $x1031->properties['length'] = 'toLocaleLowerCase' + 1; };
$x1043 = clone JS::$functionTemplate; $x1043->call = '_465e5538fcb402e27559db40bec8addd_22'; $x1043->parameters = array (
); $x1043->scope = $scope; $x1043->properties['prototype'] = clone JS::$objectTemplate; $x1043->attributes['prototype'] = JS::WRITABLE; $x1043->properties['prototype']->properties['constructor'] = $x1043; $x1043->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1043->properties['length'] = 0; $x1043->attributes['length'] = 0;
unset($x1044, $W1044, $S1044, $U1044);
$x1045 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 325, 7, '<image>/05_string.js');
$x1044 =& $x1045[0]; list(,$W1044,$S1044,$U1044) = $x1045;
if ($x1044 === JS::$undefined || $x1044 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1046 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 325, 30, '<image>/05_string.js');
$_TypeError =& $x1046[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1046;
$x1047 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1048 = $x1047($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1048->class) && $x1048->class === 'Error') {$x1048->properties['file'] = '<image>/05_string.js';$x1048->properties['line'] = 325;$x1048->properties['column'] = 30;$x1048->attributes['file'] = $x1048->attributes['line'] = $x1048->attributes['column'] = 0; }
throw new JSException($x1048, 325, 30, '<image>/05_string.js');
}
$x1044 = JS::toObject($x1044, $global);
unset($x1049, $W1049, $S1049, $U1049);
$x1050 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1044, (string) 'toUpperCase', 325, 30, '<image>/05_string.js');
$x1049 =& $x1050[0]; list(,$W1049,$S1049,$U1049) = $x1050;
if ($U1049 && (!isset($x1044->extensible) || $x1044->extensible)) {$x1044->properties['toUpperCase'] = $x1049; $x1049 =& $x1044->properties['toUpperCase']; $x1044->attributes['toUpperCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1049 = FALSE; $W1049 = TRUE; }
if (isset($S1049)) {
$x1052 = $S1049->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1053 = $x1052($global, $x1044, $S1049, array($x1043), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1051 = $x1053;
} else {
if (!$U1049) {$x1051 = $x1043;if ($W1049) { $x1049 = $x1043; }  }
else { $x1051 = JS::$undefined; }
}
if (isset($x1044->class) && $x1044->class === 'Array' &&  is_int('toUpperCase') && 'toUpperCase' >= $x1044->properties['length']) { $x1044->properties['length'] = 'toUpperCase' + 1; };
unset($x1054, $W1054, $S1054, $U1054);
$x1055 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 329, 44, '<image>/05_string.js');
$x1054 =& $x1055[0]; list(,$W1054,$S1054,$U1054) = $x1055;
unset($x1056, $W1056, $S1056, $U1056);
$x1057 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1054, (string) 'toUpperCase', 329, 54, '<image>/05_string.js');
$x1056 =& $x1057[0]; list(,$W1056,$S1056,$U1056) = $x1057;
unset($x1058, $W1058, $S1058, $U1058);
$x1059 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 329, 7, '<image>/05_string.js');
$x1058 =& $x1059[0]; list(,$W1058,$S1058,$U1058) = $x1059;
if ($x1058 === JS::$undefined || $x1058 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1060 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 329, 36, '<image>/05_string.js');
$_TypeError =& $x1060[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1060;
$x1061 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1062 = $x1061($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1062->class) && $x1062->class === 'Error') {$x1062->properties['file'] = '<image>/05_string.js';$x1062->properties['line'] = 329;$x1062->properties['column'] = 36;$x1062->attributes['file'] = $x1062->attributes['line'] = $x1062->attributes['column'] = 0; }
throw new JSException($x1062, 329, 36, '<image>/05_string.js');
}
$x1058 = JS::toObject($x1058, $global);
unset($x1063, $W1063, $S1063, $U1063);
$x1064 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1058, (string) 'toLocaleUpperCase', 329, 36, '<image>/05_string.js');
$x1063 =& $x1064[0]; list(,$W1063,$S1063,$U1063) = $x1064;
if ($U1063 && (!isset($x1058->extensible) || $x1058->extensible)) {$x1058->properties['toLocaleUpperCase'] = $x1063; $x1063 =& $x1058->properties['toLocaleUpperCase']; $x1058->attributes['toLocaleUpperCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1063 = FALSE; $W1063 = TRUE; }
if (isset($S1063)) {
$x1066 = $S1063->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1067 = $x1066($global, $x1058, $S1063, array($x1056), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1065 = $x1067;
} else {
if (!$U1063) {$x1065 = $x1056;if ($W1063) { $x1063 = $x1056; }  }
else { $x1065 = JS::$undefined; }
}
if (isset($x1058->class) && $x1058->class === 'Array' &&  is_int('toLocaleUpperCase') && 'toLocaleUpperCase' >= $x1058->properties['length']) { $x1058->properties['length'] = 'toLocaleUpperCase' + 1; };
$x1070 = clone JS::$functionTemplate; $x1070->call = '_465e5538fcb402e27559db40bec8addd_23'; $x1070->parameters = array (
); $x1070->scope = $scope; $x1070->properties['prototype'] = clone JS::$objectTemplate; $x1070->attributes['prototype'] = JS::WRITABLE; $x1070->properties['prototype']->properties['constructor'] = $x1070; $x1070->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1070->properties['length'] = 0; $x1070->attributes['length'] = 0;
unset($x1071, $W1071, $S1071, $U1071);
$x1072 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 331, 7, '<image>/05_string.js');
$x1071 =& $x1072[0]; list(,$W1071,$S1071,$U1071) = $x1072;
if ($x1071 === JS::$undefined || $x1071 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1073 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 331, 23, '<image>/05_string.js');
$_TypeError =& $x1073[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1073;
$x1074 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1075 = $x1074($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1075->class) && $x1075->class === 'Error') {$x1075->properties['file'] = '<image>/05_string.js';$x1075->properties['line'] = 331;$x1075->properties['column'] = 23;$x1075->attributes['file'] = $x1075->attributes['line'] = $x1075->attributes['column'] = 0; }
throw new JSException($x1075, 331, 23, '<image>/05_string.js');
}
$x1071 = JS::toObject($x1071, $global);
unset($x1076, $W1076, $S1076, $U1076);
$x1077 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1071, (string) 'trim', 331, 23, '<image>/05_string.js');
$x1076 =& $x1077[0]; list(,$W1076,$S1076,$U1076) = $x1077;
if ($U1076 && (!isset($x1071->extensible) || $x1071->extensible)) {$x1071->properties['trim'] = $x1076; $x1076 =& $x1071->properties['trim']; $x1071->attributes['trim'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1076 = FALSE; $W1076 = TRUE; }
if (isset($S1076)) {
$x1079 = $S1076->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1080 = $x1079($global, $x1071, $S1076, array($x1070), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1078 = $x1080;
} else {
if (!$U1076) {$x1078 = $x1070;if ($W1076) { $x1076 = $x1070; }  }
else { $x1078 = JS::$undefined; }
}
if (isset($x1071->class) && $x1071->class === 'Array' &&  is_int('trim') && 'trim' >= $x1071->properties['length']) { $x1071->properties['length'] = 'trim' + 1; };
;
return JS::$undefined;
}
