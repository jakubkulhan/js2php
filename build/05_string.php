function _61061ff9bcd94539f1393a26c97ae064_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
echo 'function _61061ff9bcd94539f1393a26c97ae064_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'String\']=$fn;$_String=&$scope->properties[\'String\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){return JS::toString($_value,$global);}$x3=clone JS::$objectTemplate;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=$x3;$_s->prototype=$_String->properties[\'prototype\'];$_s->class=\'String\';$_s->extensible=true;$_s->value=JS::toString($_value,$global);return$_s;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$base,$id,$line,$column,$file){$Warguments=$Sarguments=$Uarguments=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_arguments=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x8=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x9=$x8($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_arguments=$x9;}else{$_arguments=JS::$undefined;$Uarguments=TRUE;}return array(&$_arguments,$Warguments,$Sarguments,$Uarguments);}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x15 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_2($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x10 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'arguments', 19, 22, '<image>/05_string.js');
$_arguments =& $x10[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x10;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x11 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 19, 22, '<image>/05_string.js');
$_ReferenceError =& $x11[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x11;
$x12 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 19, 22);
$x13 = $x12($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error') {$x13->properties['file'] = '<image>/05_string.js';$x13->properties['line'] = 19;$x13->properties['column'] = 22;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 19, 22, '<image>/05_string.js');
}
unset($x14, $W14, $S14, $U14);
$x20 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_arguments, (string) 'length', 19, 31, '<image>/05_string.js');
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
$x28 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_arguments, (string) $_i, 20, 18, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'c\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=\'\';for($x7=0;;++$x7){if($x7===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x10=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'arguments\',19,22,\'<image>/05_string.js\');$_arguments=&$x10[0];list(,$Warguments,$Sarguments,$Uarguments)=$x10;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x11=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',19,22,\'<image>/05_string.js\');$_ReferenceError=&$x11[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x11;$x12=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',19,22);$x13=$x12($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'){$x13->properties[\'file\']=\'<image>/05_string.js\';$x13->properties[\'line\']=19;$x13->properties[\'column\']=22;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,19,22,\'<image>/05_string.js\');}unset($x14,$W14,$S14,$U14);$x20=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_arguments,(string)\'length\',19,31,\'<image>/05_string.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x14;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x7!==0){$x21=++$_i;}$x22=JS::toPrimitive($_i,$global);$x23=JS::toPrimitive($_l,$global);$x24=(is_string($x22)&&is_string($x23)?strcmp($x22,$x23)<0:(!is_nan($x25=JS::toNumber($x22,$global))&&!is_nan($x26=JS::toNumber($x23,$global))&&$x25<$x26));if(!JS::toBoolean($x24,$global)){break;}unset($x27,$W27,$S27,$U27);$x28=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_arguments,(string)$_i,20,18,\'<image>/05_string.js\');$x27=&$x28[0];list(,$W27,$S27,$U27)=$x28;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x27;if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$x29=JS::toPrimitive($_s,$global);$x30=JS::toPrimitive(chr(JS::toNumber($_arg,$global)),$global);$_s=(is_string($x29)||is_string($x30)?JS::toString($x29,$global).JS::toString($x30,$global):JS::toNumber($x29,$global)+JS::toNumber($x30,$global));}return$_s;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x36 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x36=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x36[0];list(,$WTypeError,$STypeError,$UTypeError)=$x36;$x37=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x38=$x37($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x38->class)&&$x38->class===\'Error\'){$x38->properties[\'file\']=$file;$x38->properties[\'line\']=$line;$x38->properties[\'column\']=$column;$x38->attributes[\'file\']=$x38->attributes[\'line\']=$x38->attributes[\'column\']=0;}throw new JSException($x38,$line,$column,$file);}$W35=$S35=$U35=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x35=&$lookup->properties[$id];$W35=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S35=$lookup->setters[$id];}else{$x35=JS::$undefined;$U35=TRUE;}return array(&$x35,$W35,$S35,$U35);}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x70 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 35, 13, '<image>/05_string.js');
$_TypeError =& $x70[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x70;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x71 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 35, 13, '<image>/05_string.js');
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
$x75 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_TypeError, (string) 'prototype', 35, 9, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x67=&$scope->properties[\'arguments\'];$x67->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x67->properties[$i]=$args[$i];$x67->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'String\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',35,13,\'<image>/05_string.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x71=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',35,13,\'<image>/05_string.js\');$_ReferenceError=&$x71[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x71;$x72=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,13);$x73=$x72($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'){$x73->properties[\'file\']=\'<image>/05_string.js\';$x73->properties[\'line\']=35;$x73->properties[\'column\']=13;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,35,13,\'<image>/05_string.js\');}$x68=clone JS::$objectTemplate;unset($x74,$W74,$S74,$U74);$x75=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_TypeError,(string)\'prototype\',35,9,\'<image>/05_string.js\');$x74=&$x75[0];list(,$W74,$S74,$U74)=$x75;$x69=$x74;$x68->prototype=$x69;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x78=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x79=$x78($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x79->class)&&$x79->class===\'Error\'){$x79->properties[\'file\']=\'<image>/05_string.js\';$x79->properties[\'line\']=35;$x79->properties[\'column\']=9;$x79->attributes[\'file\']=$x79->attributes[\'line\']=$x79->attributes[\'column\']=0;}throw new JSException($x79,35,9,\'<image>/05_string.js\');}$x76=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x77=$x76($global,$x68,$_TypeError,array(\'String.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x69=$x77;if(is_object($x69)&&$x69!==JS::$undefined){$x68=$x69;}if(isset($x68->class)&&$x68->class===\'Error\'){$x68->properties[\'file\']=\'<image>/05_string.js\';$x68->properties[\'line\']=35;$x68->properties[\'column\']=3;$x68->attributes[\'file\']=$x68->attributes[\'line\']=$x68->attributes[\'column\']=0;}throw new JSException($x68,35,3,\'<image>/05_string.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_7($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x117 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $leThis, (string) 'length', 46, 28, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x106=&$scope->properties[\'arguments\'];$x106->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x106->properties[$i]=$args[$i];$x106->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=JS::toNumber($_pos,$global);$x108=JS::toPrimitive($_pos,$global);$x109=JS::toPrimitive(0,$global);$x110=(is_string($x108)&&is_string($x109)?strcmp($x108,$x109)<0:(!is_nan($x111=JS::toNumber($x108,$global))&&!is_nan($x112=JS::toNumber($x109,$global))&&$x111<$x112));$x107=$x110;if(!JS::toBoolean($x107,$global)){unset($x116,$W116,$S116,$U116);$x117=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$leThis,(string)\'length\',46,28,\'<image>/05_string.js\');$x116=&$x117[0];list(,$W116,$S116,$U116)=$x117;$x113=JS::toPrimitive($_pos,$global);$x114=JS::toPrimitive($x116,$global);$x115=!(is_string($x113)&&is_string($x114)?strcmp($x113,$x114)<0:(!is_nan($x118=JS::toNumber($x113,$global))&&!is_nan($x119=JS::toNumber($x114,$global))&&$x118<$x119));$x107=$x115;}if(JS::toBoolean($x107,$global)){return\'\';}return(string)substr($leThis->value,$_pos,1);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x143 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $leThis, (string) 'length', 56, 28, '<image>/05_string.js');
$x142 =& $x143[0]; list(,$W142,$S142,$U142) = $x143;
$x139 = JS::toPrimitive($_pos, $global);
$x140 = JS::toPrimitive($x142, $global);
$x141 = !(is_string($x139) && is_string($x140) ? strcmp($x139, $x140) < 0 : (!is_nan($x144 = JS::toNumber($x139, $global)) && !is_nan($x145 = JS::toNumber($x140, $global)) && $x144 < $x145));
$x133 = $x141; }
if (JS::toBoolean($x133, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x146 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'NaN', 57, 10, '<image>/05_string.js');
$_NaN =& $x146[0]; list(,$WNaN,$SNaN,$UNaN) = $x146;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x147 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 57, 10, '<image>/05_string.js');
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
$x151 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 60, 21, '<image>/05_string.js');
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
$x155 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x150, (string) 'charAt', 60, 21, '<image>/05_string.js');
$x154 =& $x155[0]; list(,$W154,$S154,$U154) = $x155;
if (!(is_object($x154) && isset($x154->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x158 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 60, 21, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x132=&$scope->properties[\'arguments\'];$x132->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x132->properties[$i]=$args[$i];$x132->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=JS::toNumber($_pos,$global);$x134=JS::toPrimitive($_pos,$global);$x135=JS::toPrimitive(0,$global);$x136=(is_string($x134)&&is_string($x135)?strcmp($x134,$x135)<0:(!is_nan($x137=JS::toNumber($x134,$global))&&!is_nan($x138=JS::toNumber($x135,$global))&&$x137<$x138));$x133=$x136;if(!JS::toBoolean($x133,$global)){unset($x142,$W142,$S142,$U142);$x143=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$leThis,(string)\'length\',56,28,\'<image>/05_string.js\');$x142=&$x143[0];list(,$W142,$S142,$U142)=$x143;$x139=JS::toPrimitive($_pos,$global);$x140=JS::toPrimitive($x142,$global);$x141=!(is_string($x139)&&is_string($x140)?strcmp($x139,$x140)<0:(!is_nan($x144=JS::toNumber($x139,$global))&&!is_nan($x145=JS::toNumber($x140,$global))&&$x144<$x145));$x133=$x141;}if(JS::toBoolean($x133,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x146=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'NaN\',57,10,\'<image>/05_string.js\');$_NaN=&$x146[0];list(,$WNaN,$SNaN,$UNaN)=$x146;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x147=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',57,10,\'<image>/05_string.js\');$_ReferenceError=&$x147[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x147;$x148=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',57,10);$x149=$x148($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x149->class)&&$x149->class===\'Error\'){$x149->properties[\'file\']=\'<image>/05_string.js\';$x149->properties[\'line\']=57;$x149->properties[\'column\']=10;$x149->attributes[\'file\']=$x149->attributes[\'line\']=$x149->attributes[\'column\']=0;}throw new JSException($x149,57,10,\'<image>/05_string.js\');}return$_NaN;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x151=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',60,21,\'<image>/05_string.js\');$_TypeError=&$x151[0];list(,$WTypeError,$STypeError,$UTypeError)=$x151;$x152=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x153=$x152($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x153->class)&&$x153->class===\'Error\'){$x153->properties[\'file\']=\'<image>/05_string.js\';$x153->properties[\'line\']=60;$x153->properties[\'column\']=21;$x153->attributes[\'file\']=$x153->attributes[\'line\']=$x153->attributes[\'column\']=0;}throw new JSException($x153,60,21,\'<image>/05_string.js\');}$x150=JS::toObject($leThis,$global);unset($x154,$W154,$S154,$U154);$x155=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x150,(string)\'charAt\',60,21,\'<image>/05_string.js\');$x154=&$x155[0];list(,$W154,$S154,$U154)=$x155;if(!(is_object($x154)&&isset($x154->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x158=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',60,21,\'<image>/05_string.js\');$_TypeError=&$x158[0];list(,$WTypeError,$STypeError,$UTypeError)=$x158;$x159=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x160=$x159($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x160->class)&&$x160->class===\'Error\'){$x160->properties[\'file\']=\'<image>/05_string.js\';$x160->properties[\'line\']=60;$x160->properties[\'column\']=21;$x160->attributes[\'file\']=$x160->attributes[\'line\']=$x160->attributes[\'column\']=0;}throw new JSException($x160,60,21,\'<image>/05_string.js\');}$x156=$x154->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x157=$x156($global,$x150,$x154,array($_pos),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=$x157;return ord($_c);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_9($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x175 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'arguments', 68, 22, '<image>/05_string.js');
$_arguments =& $x175[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x175;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x176 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 68, 22, '<image>/05_string.js');
$_ReferenceError =& $x176[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x176;
$x177 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 68, 22);
$x178 = $x177($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error') {$x178->properties['file'] = '<image>/05_string.js';$x178->properties['line'] = 68;$x178->properties['column'] = 22;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 68, 22, '<image>/05_string.js');
}
unset($x179, $W179, $S179, $U179);
$x180 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_arguments, (string) 'length', 68, 31, '<image>/05_string.js');
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
$x188 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_arguments, (string) $_i, 69, 28, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x173=&$scope->properties[\'arguments\'];$x173->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x173->properties[$i]=$args[$i];$x173->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'returnString\']=JS::$undefined;$_returnString=&$scope->properties[\'returnString\'];$UreturnString=FALSE;$_returnString=$leThis->value;for($x174=0;;++$x174){if($x174===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x175=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'arguments\',68,22,\'<image>/05_string.js\');$_arguments=&$x175[0];list(,$Warguments,$Sarguments,$Uarguments)=$x175;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x176=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',68,22,\'<image>/05_string.js\');$_ReferenceError=&$x176[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x176;$x177=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',68,22);$x178=$x177($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x178->class)&&$x178->class===\'Error\'){$x178->properties[\'file\']=\'<image>/05_string.js\';$x178->properties[\'line\']=68;$x178->properties[\'column\']=22;$x178->attributes[\'file\']=$x178->attributes[\'line\']=$x178->attributes[\'column\']=0;}throw new JSException($x178,68,22,\'<image>/05_string.js\');}unset($x179,$W179,$S179,$U179);$x180=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_arguments,(string)\'length\',68,31,\'<image>/05_string.js\');$x179=&$x180[0];list(,$W179,$S179,$U179)=$x180;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x179;}if($x174!==0){$x181=++$_i;}$x182=JS::toPrimitive($_i,$global);$x183=JS::toPrimitive($_l,$global);$x184=(is_string($x182)&&is_string($x183)?strcmp($x182,$x183)<0:(!is_nan($x185=JS::toNumber($x182,$global))&&!is_nan($x186=JS::toNumber($x183,$global))&&$x185<$x186));if(!JS::toBoolean($x184,$global)){break;}unset($x187,$W187,$S187,$U187);$x188=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_arguments,(string)$_i,69,28,\'<image>/05_string.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;if($UreturnString){$global->properties[\'returnString\']=$_returnString;$_returnString=&$global->properties[\'returnString\'];}$x189=JS::toPrimitive($_returnString,$global);$x190=JS::toPrimitive($x187,$global);$_returnString=(is_string($x189)||is_string($x190)?JS::toString($x189,$global).JS::toString($x190,$global):JS::toNumber($x189,$global)+JS::toNumber($x190,$global));}return$_returnString;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_10($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x205 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Math', 80, 15, '<image>/05_string.js');
$_Math =& $x205[0]; list(,$WMath,$SMath,$UMath) = $x205;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x206 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 80, 15, '<image>/05_string.js');
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
$x210 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 80, 23, '<image>/05_string.js');
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
$x214 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x209, (string) 'min', 80, 23, '<image>/05_string.js');
$x213 =& $x214[0]; list(,$W213,$S213,$U213) = $x214;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x216 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 80, 32, '<image>/05_string.js');
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
$x220 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x215, (string) 'max', 80, 32, '<image>/05_string.js');
$x219 =& $x220[0]; list(,$W219,$S219,$U219) = $x220;
if (!(is_object($x219) && isset($x219->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x223 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 80, 32, '<image>/05_string.js');
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
$x228 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 80, 23, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x203=&$scope->properties[\'arguments\'];$x203->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x203->properties[$i]=$args[$i];$x203->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x204=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x204,$global)){if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=0;}unset($_Math,$WMath,$SMath,$UMath);$x205=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Math\',80,15,\'<image>/05_string.js\');$_Math=&$x205[0];list(,$WMath,$SMath,$UMath)=$x205;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x206=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',80,15,\'<image>/05_string.js\');$_ReferenceError=&$x206[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x206;$x207=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,15);$x208=$x207($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x208->class)&&$x208->class===\'Error\'){$x208->properties[\'file\']=\'<image>/05_string.js\';$x208->properties[\'line\']=80;$x208->properties[\'column\']=15;$x208->attributes[\'file\']=$x208->attributes[\'line\']=$x208->attributes[\'column\']=0;}throw new JSException($x208,80,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x210=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',80,23,\'<image>/05_string.js\');$_TypeError=&$x210[0];list(,$WTypeError,$STypeError,$UTypeError)=$x210;$x211=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x212=$x211($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x212->class)&&$x212->class===\'Error\'){$x212->properties[\'file\']=\'<image>/05_string.js\';$x212->properties[\'line\']=80;$x212->properties[\'column\']=23;$x212->attributes[\'file\']=$x212->attributes[\'line\']=$x212->attributes[\'column\']=0;}throw new JSException($x212,80,23,\'<image>/05_string.js\');}$x209=JS::toObject($_Math,$global);unset($x213,$W213,$S213,$U213);$x214=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x209,(string)\'min\',80,23,\'<image>/05_string.js\');$x213=&$x214[0];list(,$W213,$S213,$U213)=$x214;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x216=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',80,32,\'<image>/05_string.js\');$_TypeError=&$x216[0];list(,$WTypeError,$STypeError,$UTypeError)=$x216;$x217=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x218=$x217($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x218->class)&&$x218->class===\'Error\'){$x218->properties[\'file\']=\'<image>/05_string.js\';$x218->properties[\'line\']=80;$x218->properties[\'column\']=32;$x218->attributes[\'file\']=$x218->attributes[\'line\']=$x218->attributes[\'column\']=0;}throw new JSException($x218,80,32,\'<image>/05_string.js\');}$x215=JS::toObject($_Math,$global);unset($x219,$W219,$S219,$U219);$x220=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x215,(string)\'max\',80,32,\'<image>/05_string.js\');$x219=&$x220[0];list(,$W219,$S219,$U219)=$x220;if(!(is_object($x219)&&isset($x219->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x223=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',80,32,\'<image>/05_string.js\');$_TypeError=&$x223[0];list(,$WTypeError,$STypeError,$UTypeError)=$x223;$x224=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x225=$x224($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x225->class)&&$x225->class===\'Error\'){$x225->properties[\'file\']=\'<image>/05_string.js\';$x225->properties[\'line\']=80;$x225->properties[\'column\']=32;$x225->attributes[\'file\']=$x225->attributes[\'line\']=$x225->attributes[\'column\']=0;}throw new JSException($x225,80,32,\'<image>/05_string.js\');}$x221=$x219->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x222=$x221($global,$x215,$x219,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x213)&&isset($x213->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x228=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',80,23,\'<image>/05_string.js\');$_TypeError=&$x228[0];list(,$WTypeError,$STypeError,$UTypeError)=$x228;$x229=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x230=$x229($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x230->class)&&$x230->class===\'Error\'){$x230->properties[\'file\']=\'<image>/05_string.js\';$x230->properties[\'line\']=80;$x230->properties[\'column\']=23;$x230->attributes[\'file\']=$x230->attributes[\'line\']=$x230->attributes[\'column\']=0;}throw new JSException($x230,80,23,\'<image>/05_string.js\');}$x226=$x213->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x227=$x226($global,$x209,$x213,array($x222,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x227;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strpos($leThis->value,JS::toString($_search,$global),$_offset);$x231=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x231,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_11($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x246 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Math', 95, 15, '<image>/05_string.js');
$_Math =& $x246[0]; list(,$WMath,$SMath,$UMath) = $x246;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x247 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 95, 15, '<image>/05_string.js');
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
$x251 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 95, 23, '<image>/05_string.js');
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
$x255 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x250, (string) 'min', 95, 23, '<image>/05_string.js');
$x254 =& $x255[0]; list(,$W254,$S254,$U254) = $x255;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x257 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 95, 32, '<image>/05_string.js');
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
$x261 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x256, (string) 'max', 95, 32, '<image>/05_string.js');
$x260 =& $x261[0]; list(,$W260,$S260,$U260) = $x261;
if (!(is_object($x260) && isset($x260->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x264 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 95, 32, '<image>/05_string.js');
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
$x269 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 95, 23, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x244=&$scope->properties[\'arguments\'];$x244->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x244->properties[$i]=$args[$i];$x244->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x245=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x245,$global)){if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=0;}unset($_Math,$WMath,$SMath,$UMath);$x246=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Math\',95,15,\'<image>/05_string.js\');$_Math=&$x246[0];list(,$WMath,$SMath,$UMath)=$x246;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x247=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',95,15,\'<image>/05_string.js\');$_ReferenceError=&$x247[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x247;$x248=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,15);$x249=$x248($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x249->class)&&$x249->class===\'Error\'){$x249->properties[\'file\']=\'<image>/05_string.js\';$x249->properties[\'line\']=95;$x249->properties[\'column\']=15;$x249->attributes[\'file\']=$x249->attributes[\'line\']=$x249->attributes[\'column\']=0;}throw new JSException($x249,95,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x251=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',95,23,\'<image>/05_string.js\');$_TypeError=&$x251[0];list(,$WTypeError,$STypeError,$UTypeError)=$x251;$x252=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x253=$x252($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x253->class)&&$x253->class===\'Error\'){$x253->properties[\'file\']=\'<image>/05_string.js\';$x253->properties[\'line\']=95;$x253->properties[\'column\']=23;$x253->attributes[\'file\']=$x253->attributes[\'line\']=$x253->attributes[\'column\']=0;}throw new JSException($x253,95,23,\'<image>/05_string.js\');}$x250=JS::toObject($_Math,$global);unset($x254,$W254,$S254,$U254);$x255=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x250,(string)\'min\',95,23,\'<image>/05_string.js\');$x254=&$x255[0];list(,$W254,$S254,$U254)=$x255;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x257=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',95,32,\'<image>/05_string.js\');$_TypeError=&$x257[0];list(,$WTypeError,$STypeError,$UTypeError)=$x257;$x258=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x259=$x258($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x259->class)&&$x259->class===\'Error\'){$x259->properties[\'file\']=\'<image>/05_string.js\';$x259->properties[\'line\']=95;$x259->properties[\'column\']=32;$x259->attributes[\'file\']=$x259->attributes[\'line\']=$x259->attributes[\'column\']=0;}throw new JSException($x259,95,32,\'<image>/05_string.js\');}$x256=JS::toObject($_Math,$global);unset($x260,$W260,$S260,$U260);$x261=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x256,(string)\'max\',95,32,\'<image>/05_string.js\');$x260=&$x261[0];list(,$W260,$S260,$U260)=$x261;if(!(is_object($x260)&&isset($x260->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x264=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',95,32,\'<image>/05_string.js\');$_TypeError=&$x264[0];list(,$WTypeError,$STypeError,$UTypeError)=$x264;$x265=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x266=$x265($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x266->class)&&$x266->class===\'Error\'){$x266->properties[\'file\']=\'<image>/05_string.js\';$x266->properties[\'line\']=95;$x266->properties[\'column\']=32;$x266->attributes[\'file\']=$x266->attributes[\'line\']=$x266->attributes[\'column\']=0;}throw new JSException($x266,95,32,\'<image>/05_string.js\');}$x262=$x260->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x263=$x262($global,$x256,$x260,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x254)&&isset($x254->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x269=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',95,23,\'<image>/05_string.js\');$_TypeError=&$x269[0];list(,$WTypeError,$STypeError,$UTypeError)=$x269;$x270=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x271=$x270($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x271->class)&&$x271->class===\'Error\'){$x271->properties[\'file\']=\'<image>/05_string.js\';$x271->properties[\'line\']=95;$x271->properties[\'column\']=23;$x271->attributes[\'file\']=$x271->attributes[\'line\']=$x271->attributes[\'column\']=0;}throw new JSException($x271,95,23,\'<image>/05_string.js\');}$x267=$x254->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x268=$x267($global,$x250,$x254,array($x263,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x268;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strrpos($leThis->value,JS::toString($_search,$global),$_offset);$x272=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x272,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_12($global, $leThis, $fn, $args, $constructor = FALSE) {

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
echo 'function _61061ff9bcd94539f1393a26c97ae064_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x285=&$scope->properties[\'arguments\'];$x285->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x285->properties[$i]=$args[$i];$x285->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'that\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_that=&$scope->properties[\'that\'];$Uthat=FALSE;$global->scope[++$global->scope_sp]=$scope;return$leThis->value===JS::toString($_that,$global);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_13($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x301 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'RegExp', 111, 16, '<image>/05_string.js');
$_RegExp =& $x301[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x301;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x302 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 111, 16, '<image>/05_string.js');
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
$x306 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_RegExp, (string) 'prototype', 111, 12, '<image>/05_string.js');
$x305 =& $x306[0]; list(,$W305,$S305,$U305) = $x306;
$x300 = $x305;
$x299->prototype = $x300;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x309 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 111, 12, '<image>/05_string.js');
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
$x313 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_regexp, (string) 'global', 114, 13, '<image>/05_string.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
if (JS::toBoolean((!JS::toBoolean($x312, $global)), $global)) {
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x315 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 115, 21, '<image>/05_string.js');
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
$x319 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x314, (string) 'exec', 115, 21, '<image>/05_string.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
if (!(is_object($x318) && isset($x318->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x322 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 115, 21, '<image>/05_string.js');
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
$x326 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 120, 19, '<image>/05_string.js');
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
$x330 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $_regexp, (string) 'lastIndex', 120, 19, '<image>/05_string.js');
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
$x337 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 123, 22, '<image>/05_string.js');
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
$x341 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x336, (string) 'exec', 123, 22, '<image>/05_string.js');
$x340 =& $x341[0]; list(,$W340,$S340,$U340) = $x341;
if (!(is_object($x340) && isset($x340->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x344 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 123, 22, '<image>/05_string.js');
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
$x349 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_regexp, (string) 'lastIndex', 127, 14, '<image>/05_string.js');
$x348 =& $x349[0]; list(,$W348,$S348,$U348) = $x349;
$x347 = (((gettype($x348) === gettype($_previousLastIndex) && $x348 === $_previousLastIndex))|| (((is_float($x348) || is_int($x348)) && (is_float($_previousLastIndex) || is_int($_previousLastIndex))) && $x348 == $_previousLastIndex));
if (JS::toBoolean($x347, $global)) {
unset($x352, $W352, $S352, $U352);
$x353 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_regexp, (string) 'lastIndex', 128, 50, '<image>/05_string.js');
$x352 =& $x353[0]; list(,$W352,$S352,$U352) = $x353;
$x350 = JS::toPrimitive($x352, $global);
$x351 = JS::toPrimitive(1, $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x354 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 128, 42, '<image>/05_string.js');
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
$x358 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $_regexp, (string) 'lastIndex', 128, 42, '<image>/05_string.js');
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
$x363 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_regexp, (string) 'lastIndex', 130, 31, '<image>/05_string.js');
$x362 =& $x363[0]; list(,$W362,$S362,$U362) = $x363;
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x362;;
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x365 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 133, 20, '<image>/05_string.js');
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
$x369 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x364, (string) 'push', 133, 20, '<image>/05_string.js');
$x368 =& $x369[0]; list(,$W368,$S368,$U368) = $x369;
unset($x370, $W370, $S370, $U370);
$x371 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 0, 133, 26, '<image>/05_string.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if (!(is_object($x368) && isset($x368->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x374 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 133, 20, '<image>/05_string.js');
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
echo 'function _61061ff9bcd94539f1393a26c97ae064_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x298=&$scope->properties[\'arguments\'];$x298->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x298->properties[$i]=$args[$i];$x298->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'regexp\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_regexp=&$scope->properties[\'regexp\'];$Uregexp=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_regexp)&&isset($_regexp->class)&&$_regexp->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x301=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'RegExp\',111,16,\'<image>/05_string.js\');$_RegExp=&$x301[0];list(,$WRegExp,$SRegExp,$URegExp)=$x301;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x302=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',111,16,\'<image>/05_string.js\');$_ReferenceError=&$x302[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x302;$x303=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,16);$x304=$x303($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x304->class)&&$x304->class===\'Error\'){$x304->properties[\'file\']=\'<image>/05_string.js\';$x304->properties[\'line\']=111;$x304->properties[\'column\']=16;$x304->attributes[\'file\']=$x304->attributes[\'line\']=$x304->attributes[\'column\']=0;}throw new JSException($x304,111,16,\'<image>/05_string.js\');}$x299=clone JS::$objectTemplate;unset($x305,$W305,$S305,$U305);$x306=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_RegExp,(string)\'prototype\',111,12,\'<image>/05_string.js\');$x305=&$x306[0];list(,$W305,$S305,$U305)=$x306;$x300=$x305;$x299->prototype=$x300;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x309=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',111,12,\'<image>/05_string.js\');$_TypeError=&$x309[0];list(,$WTypeError,$STypeError,$UTypeError)=$x309;$x310=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x311=$x310($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x311->class)&&$x311->class===\'Error\'){$x311->properties[\'file\']=\'<image>/05_string.js\';$x311->properties[\'line\']=111;$x311->properties[\'column\']=12;$x311->attributes[\'file\']=$x311->attributes[\'line\']=$x311->attributes[\'column\']=0;}throw new JSException($x311,111,12,\'<image>/05_string.js\');}$x307=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x308=$x307($global,$x299,$_RegExp,array($_regexp),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x300=$x308;if(is_object($x300)&&$x300!==JS::$undefined){$x299=$x300;}if($Uregexp){$global->properties[\'regexp\']=$_regexp;$_regexp=&$global->properties[\'regexp\'];}$_regexp=$x299;}unset($x312,$W312,$S312,$U312);$x313=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_regexp,(string)\'global\',114,13,\'<image>/05_string.js\');$x312=&$x313[0];list(,$W312,$S312,$U312)=$x313;if(JS::toBoolean((!JS::toBoolean($x312,$global)),$global)){if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x315=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',115,21,\'<image>/05_string.js\');$_TypeError=&$x315[0];list(,$WTypeError,$STypeError,$UTypeError)=$x315;$x316=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x317=$x316($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x317->class)&&$x317->class===\'Error\'){$x317->properties[\'file\']=\'<image>/05_string.js\';$x317->properties[\'line\']=115;$x317->properties[\'column\']=21;$x317->attributes[\'file\']=$x317->attributes[\'line\']=$x317->attributes[\'column\']=0;}throw new JSException($x317,115,21,\'<image>/05_string.js\');}$x314=JS::toObject($_regexp,$global);unset($x318,$W318,$S318,$U318);$x319=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x314,(string)\'exec\',115,21,\'<image>/05_string.js\');$x318=&$x319[0];list(,$W318,$S318,$U318)=$x319;if(!(is_object($x318)&&isset($x318->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x322=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',115,21,\'<image>/05_string.js\');$_TypeError=&$x322[0];list(,$WTypeError,$STypeError,$UTypeError)=$x322;$x323=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x324=$x323($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x324->class)&&$x324->class===\'Error\'){$x324->properties[\'file\']=\'<image>/05_string.js\';$x324->properties[\'line\']=115;$x324->properties[\'column\']=21;$x324->attributes[\'file\']=$x324->attributes[\'line\']=$x324->attributes[\'column\']=0;}throw new JSException($x324,115,21,\'<image>/05_string.js\');}$x320=$x318->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x321=$x320($global,$x314,$x318,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x321;}$x325=clone JS::$arrayTemplate;$x325->properties[\'length\']=0;$x325->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x325;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=0;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'currentLastIndex\']=JS::$undefined;$_currentLastIndex=&$scope->properties[\'currentLastIndex\'];$UcurrentLastIndex=FALSE;$_currentLastIndex=JS::$undefined;if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x326=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',120,19,\'<image>/05_string.js\');$_TypeError=&$x326[0];list(,$WTypeError,$STypeError,$UTypeError)=$x326;$x327=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x328=$x327($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x328->class)&&$x328->class===\'Error\'){$x328->properties[\'file\']=\'<image>/05_string.js\';$x328->properties[\'line\']=120;$x328->properties[\'column\']=19;$x328->attributes[\'file\']=$x328->attributes[\'line\']=$x328->attributes[\'column\']=0;}throw new JSException($x328,120,19,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x329,$W329,$S329,$U329);$x330=_61061ff9bcd94539f1393a26c97ae064_5($global,$scope,$_regexp,(string)\'lastIndex\',120,19,\'<image>/05_string.js\');$x329=&$x330[0];list(,$W329,$S329,$U329)=$x330;if($U329&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[\'lastIndex\']=$x329;$x329=&$_regexp->properties[\'lastIndex\'];$_regexp->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U329=FALSE;$W329=TRUE;}if(isset($S329)){$x332=$S329->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x333=$x332($global,$_regexp,$S329,array(0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x331=$x333;}else{if(!$U329){$x331=0;if($W329){$x329=0;}}else{$x331=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}for($x334=0;;++$x334){if($x334===0){$scope->properties[\'previousLastIndex\']=JS::$undefined;$_previousLastIndex=&$scope->properties[\'previousLastIndex\'];$UpreviousLastIndex=FALSE;$_previousLastIndex=0;$scope->properties[\'lastMatch\']=JS::$undefined;$_lastMatch=&$scope->properties[\'lastMatch\'];$UlastMatch=FALSE;$_lastMatch=true;}if($x334!==0){$x335=++$_n;}if(!JS::toBoolean($_lastMatch,$global)){break;}if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x337=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',123,22,\'<image>/05_string.js\');$_TypeError=&$x337[0];list(,$WTypeError,$STypeError,$UTypeError)=$x337;$x338=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x339=$x338($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x339->class)&&$x339->class===\'Error\'){$x339->properties[\'file\']=\'<image>/05_string.js\';$x339->properties[\'line\']=123;$x339->properties[\'column\']=22;$x339->attributes[\'file\']=$x339->attributes[\'line\']=$x339->attributes[\'column\']=0;}throw new JSException($x339,123,22,\'<image>/05_string.js\');}$x336=JS::toObject($_regexp,$global);unset($x340,$W340,$S340,$U340);$x341=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x336,(string)\'exec\',123,22,\'<image>/05_string.js\');$x340=&$x341[0];list(,$W340,$S340,$U340)=$x341;if(!(is_object($x340)&&isset($x340->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x344=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',123,22,\'<image>/05_string.js\');$_TypeError=&$x344[0];list(,$WTypeError,$STypeError,$UTypeError)=$x344;$x345=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x346=$x345($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x346->class)&&$x346->class===\'Error\'){$x346->properties[\'file\']=\'<image>/05_string.js\';$x346->properties[\'line\']=123;$x346->properties[\'column\']=22;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,123,22,\'<image>/05_string.js\');}$x342=$x340->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x343=$x342($global,$x336,$x340,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x343;if($UlastMatch){$global->properties[\'lastMatch\']=$_lastMatch;$_lastMatch=&$global->properties[\'lastMatch\'];}$_lastMatch=(!JS::toBoolean((!JS::toBoolean($_match,$global)),$global));if(JS::toBoolean($_match,$global)){unset($x348,$W348,$S348,$U348);$x349=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_regexp,(string)\'lastIndex\',127,14,\'<image>/05_string.js\');$x348=&$x349[0];list(,$W348,$S348,$U348)=$x349;$x347=(((gettype($x348)===gettype($_previousLastIndex)&&$x348===$_previousLastIndex))||(((is_float($x348)||is_int($x348))&&(is_float($_previousLastIndex)||is_int($_previousLastIndex)))&&$x348==$_previousLastIndex));if(JS::toBoolean($x347,$global)){unset($x352,$W352,$S352,$U352);$x353=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_regexp,(string)\'lastIndex\',128,50,\'<image>/05_string.js\');$x352=&$x353[0];list(,$W352,$S352,$U352)=$x353;$x350=JS::toPrimitive($x352,$global);$x351=JS::toPrimitive(1,$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x354=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',128,42,\'<image>/05_string.js\');$_TypeError=&$x354[0];list(,$WTypeError,$STypeError,$UTypeError)=$x354;$x355=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x356=$x355($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x356->class)&&$x356->class===\'Error\'){$x356->properties[\'file\']=\'<image>/05_string.js\';$x356->properties[\'line\']=128;$x356->properties[\'column\']=42;$x356->attributes[\'file\']=$x356->attributes[\'line\']=$x356->attributes[\'column\']=0;}throw new JSException($x356,128,42,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x357,$W357,$S357,$U357);$x358=_61061ff9bcd94539f1393a26c97ae064_5($global,$scope,$_regexp,(string)\'lastIndex\',128,42,\'<image>/05_string.js\');$x357=&$x358[0];list(,$W357,$S357,$U357)=$x358;if($U357&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[\'lastIndex\']=$x357;$x357=&$_regexp->properties[\'lastIndex\'];$_regexp->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U357=FALSE;$W357=TRUE;}if(isset($S357)){$x360=$S357->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x361=$x360($global,$_regexp,$S357,array((is_string($x350)||is_string($x351)?JS::toString($x350,$global).JS::toString($x351,$global):JS::toNumber($x350,$global)+JS::toNumber($x351,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x359=$x361;}else{if(!$U357){$x359=(is_string($x350)||is_string($x351)?JS::toString($x350,$global).JS::toString($x351,$global):JS::toNumber($x350,$global)+JS::toNumber($x351,$global));if($W357){$x357=(is_string($x350)||is_string($x351)?JS::toString($x350,$global).JS::toString($x351,$global):JS::toNumber($x350,$global)+JS::toNumber($x351,$global));}}else{$x359=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x359;}else{unset($x362,$W362,$S362,$U362);$x363=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_regexp,(string)\'lastIndex\',130,31,\'<image>/05_string.js\');$x362=&$x363[0];list(,$W362,$S362,$U362)=$x363;if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x362;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x365=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',133,20,\'<image>/05_string.js\');$_TypeError=&$x365[0];list(,$WTypeError,$STypeError,$UTypeError)=$x365;$x366=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x367=$x366($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x367->class)&&$x367->class===\'Error\'){$x367->properties[\'file\']=\'<image>/05_string.js\';$x367->properties[\'line\']=133;$x367->properties[\'column\']=20;$x367->attributes[\'file\']=$x367->attributes[\'line\']=$x367->attributes[\'column\']=0;}throw new JSException($x367,133,20,\'<image>/05_string.js\');}$x364=JS::toObject($_returnArray,$global);unset($x368,$W368,$S368,$U368);$x369=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x364,(string)\'push\',133,20,\'<image>/05_string.js\');$x368=&$x369[0];list(,$W368,$S368,$U368)=$x369;unset($x370,$W370,$S370,$U370);$x371=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)0,133,26,\'<image>/05_string.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;if(!(is_object($x368)&&isset($x368->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x374=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',133,20,\'<image>/05_string.js\');$_TypeError=&$x374[0];list(,$WTypeError,$STypeError,$UTypeError)=$x374;$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x376=$x375($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x376->class)&&$x376->class===\'Error\'){$x376->properties[\'file\']=\'<image>/05_string.js\';$x376->properties[\'line\']=133;$x376->properties[\'column\']=20;$x376->attributes[\'file\']=$x376->attributes[\'line\']=$x376->attributes[\'column\']=0;}throw new JSException($x376,133,20,\'<image>/05_string.js\');}$x372=$x368->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x373=$x372($global,$x364,$x368,array($x370),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}$x377=(((gettype($_n)===gettype(0)&&$_n===0))||(((is_float($_n)||is_int($_n))&&(is_float(0)||is_int(0)))&&$_n==0));if(JS::toBoolean($x377,$global)){return NULL;}return$_returnArray;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x511 =& $scope->properties['arguments'];
$x511->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x511->properties[$i] = $args[$i];
$x511->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['_'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$___ =& $scope->properties['_'];
$U__ = FALSE;
$scope->properties['c'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x512 = (((gettype($_c) === gettype('$') && $_c === '$'))|| (((is_float($_c) || is_int($_c)) && (is_float('$') || is_int('$'))) && $_c == '$'));
if (JS::toBoolean($x512, $global)) {

return '$';;
}
else {
$x513 = (((gettype($_c) === gettype('&') && $_c === '&'))|| (((is_float($_c) || is_int($_c)) && (is_float('&') || is_int('&'))) && $_c == '&'));
if (JS::toBoolean($x513, $global)) {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x514 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'match', 171, 13, '<image>/05_string.js');
$_match =& $x514[0]; list(,$Wmatch,$Smatch,$Umatch) = $x514;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x515 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 171, 13, '<image>/05_string.js');
$_ReferenceError =& $x515[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x515;
$x516 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 171, 13);
$x517 = $x516($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x517->class) && $x517->class === 'Error') {$x517->properties['file'] = '<image>/05_string.js';$x517->properties['line'] = 171;$x517->properties['column'] = 13;$x517->attributes['file'] = $x517->attributes['line'] = $x517->attributes['column'] = 0; }
throw new JSException($x517, 171, 13, '<image>/05_string.js');
}
unset($x518, $W518, $S518, $U518);
$x519 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 0, 171, 18, '<image>/05_string.js');
$x518 =& $x519[0]; list(,$W518,$S518,$U518) = $x519;
return $x518;;
}
else {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x520 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'match', 174, 13, '<image>/05_string.js');
$_match =& $x520[0]; list(,$Wmatch,$Smatch,$Umatch) = $x520;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x521 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 174, 13, '<image>/05_string.js');
$_ReferenceError =& $x521[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x521;
$x522 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 13);
$x523 = $x522($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x523->class) && $x523->class === 'Error') {$x523->properties['file'] = '<image>/05_string.js';$x523->properties['line'] = 174;$x523->properties['column'] = 13;$x523->attributes['file'] = $x523->attributes['line'] = $x523->attributes['column'] = 0; }
throw new JSException($x523, 174, 13, '<image>/05_string.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x524 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Number', 174, 19, '<image>/05_string.js');
$_Number =& $x524[0]; list(,$WNumber,$SNumber,$UNumber) = $x524;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x525 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 174, 19, '<image>/05_string.js');
$_ReferenceError =& $x525[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x525;
$x526 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 19);
$x527 = $x526($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x527->class) && $x527->class === 'Error') {$x527->properties['file'] = '<image>/05_string.js';$x527->properties['line'] = 174;$x527->properties['column'] = 19;$x527->attributes['file'] = $x527->attributes['line'] = $x527->attributes['column'] = 0; }
throw new JSException($x527, 174, 19, '<image>/05_string.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x530 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 174, 25, '<image>/05_string.js');
$_TypeError =& $x530[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x530;
$x531 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x532 = $x531($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x532->class) && $x532->class === 'Error') {$x532->properties['file'] = '<image>/05_string.js';$x532->properties['line'] = 174;$x532->properties['column'] = 25;$x532->attributes['file'] = $x532->attributes['line'] = $x532->attributes['column'] = 0; }
throw new JSException($x532, 174, 25, '<image>/05_string.js');
}
$x528 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x529 = $x528($global, $global, $_Number, array($_c), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x533, $W533, $S533, $U533);
$x534 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) $x529, 174, 18, '<image>/05_string.js');
$x533 =& $x534[0]; list(,$W533,$S533,$U533) = $x534;
return $x533;;
};
}
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x511=&$scope->properties[\'arguments\'];$x511->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x511->properties[$i]=$args[$i];$x511->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'_\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$___=&$scope->properties[\'_\'];$U__=FALSE;$scope->properties[\'c\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$x512=(((gettype($_c)===gettype(\'$\')&&$_c===\'$\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'$\')||is_int(\'$\')))&&$_c==\'$\'));if(JS::toBoolean($x512,$global)){return\'$\';}else{$x513=(((gettype($_c)===gettype(\'&\')&&$_c===\'&\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'&\')||is_int(\'&\')))&&$_c==\'&\'));if(JS::toBoolean($x513,$global)){unset($_match,$Wmatch,$Smatch,$Umatch);$x514=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'match\',171,13,\'<image>/05_string.js\');$_match=&$x514[0];list(,$Wmatch,$Smatch,$Umatch)=$x514;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x515=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',171,13,\'<image>/05_string.js\');$_ReferenceError=&$x515[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x515;$x516=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',171,13);$x517=$x516($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x517->class)&&$x517->class===\'Error\'){$x517->properties[\'file\']=\'<image>/05_string.js\';$x517->properties[\'line\']=171;$x517->properties[\'column\']=13;$x517->attributes[\'file\']=$x517->attributes[\'line\']=$x517->attributes[\'column\']=0;}throw new JSException($x517,171,13,\'<image>/05_string.js\');}unset($x518,$W518,$S518,$U518);$x519=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)0,171,18,\'<image>/05_string.js\');$x518=&$x519[0];list(,$W518,$S518,$U518)=$x519;return$x518;}else{unset($_match,$Wmatch,$Smatch,$Umatch);$x520=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'match\',174,13,\'<image>/05_string.js\');$_match=&$x520[0];list(,$Wmatch,$Smatch,$Umatch)=$x520;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x521=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',174,13,\'<image>/05_string.js\');$_ReferenceError=&$x521[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x521;$x522=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,13);$x523=$x522($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x523->class)&&$x523->class===\'Error\'){$x523->properties[\'file\']=\'<image>/05_string.js\';$x523->properties[\'line\']=174;$x523->properties[\'column\']=13;$x523->attributes[\'file\']=$x523->attributes[\'line\']=$x523->attributes[\'column\']=0;}throw new JSException($x523,174,13,\'<image>/05_string.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x524=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Number\',174,19,\'<image>/05_string.js\');$_Number=&$x524[0];list(,$WNumber,$SNumber,$UNumber)=$x524;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x525=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',174,19,\'<image>/05_string.js\');$_ReferenceError=&$x525[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x525;$x526=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,19);$x527=$x526($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x527->class)&&$x527->class===\'Error\'){$x527->properties[\'file\']=\'<image>/05_string.js\';$x527->properties[\'line\']=174;$x527->properties[\'column\']=19;$x527->attributes[\'file\']=$x527->attributes[\'line\']=$x527->attributes[\'column\']=0;}throw new JSException($x527,174,19,\'<image>/05_string.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x530=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',174,25,\'<image>/05_string.js\');$_TypeError=&$x530[0];list(,$WTypeError,$STypeError,$UTypeError)=$x530;$x531=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x532=$x531($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x532->class)&&$x532->class===\'Error\'){$x532->properties[\'file\']=\'<image>/05_string.js\';$x532->properties[\'line\']=174;$x532->properties[\'column\']=25;$x532->attributes[\'file\']=$x532->attributes[\'line\']=$x532->attributes[\'column\']=0;}throw new JSException($x532,174,25,\'<image>/05_string.js\');}$x528=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x529=$x528($global,$global,$_Number,array($_c),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x533,$W533,$S533,$U533);$x534=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)$x529,174,18,\'<image>/05_string.js\');$x533=&$x534[0];list(,$W533,$S533,$U533)=$x534;return$x533;}}return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_14($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x392 = $_search;
$x392 = ($x392 === JS::$undefined ? 'undefined' : (is_int($x392) || is_float($x392) ? 'number' : (is_bool($x392) ? 'boolean' : (is_string($x392) ? 'string' : (is_object($x392) && isset($x392->call) ? 'function' : 'object')))));
$x391 = (((gettype($x392) === gettype('string') && $x392 === 'string'))|| (((is_float($x392) || is_int($x392)) && (is_float('string') || is_int('string'))) && $x392 == 'string'));
if (JS::toBoolean($x391, $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x395 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'RegExp', 146, 16, '<image>/05_string.js');
$_RegExp =& $x395[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x395;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x396 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 146, 16, '<image>/05_string.js');
$_ReferenceError =& $x396[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x396;
$x397 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 16);
$x398 = $x397($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x398->class) && $x398->class === 'Error') {$x398->properties['file'] = '<image>/05_string.js';$x398->properties['line'] = 146;$x398->properties['column'] = 16;$x398->attributes['file'] = $x398->attributes['line'] = $x398->attributes['column'] = 0; }
throw new JSException($x398, 146, 16, '<image>/05_string.js');
}
$x393 = clone JS::$objectTemplate;
unset($x399, $W399, $S399, $U399);
$x400 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_RegExp, (string) 'prototype', 146, 12, '<image>/05_string.js');
$x399 =& $x400[0]; list(,$W399,$S399,$U399) = $x400;
$x394 = $x399;
$x393->prototype = $x394;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x403 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 146, 12, '<image>/05_string.js');
$_TypeError =& $x403[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x403;
$x404 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x405 = $x404($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x405->class) && $x405->class === 'Error') {$x405->properties['file'] = '<image>/05_string.js';$x405->properties['line'] = 146;$x405->properties['column'] = 12;$x405->attributes['file'] = $x405->attributes['line'] = $x405->attributes['column'] = 0; }
throw new JSException($x405, 146, 12, '<image>/05_string.js');
}
$x401 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x402 = $x401($global, $x393, $_RegExp, array(preg_quote($_search, '/')), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x394 = $x402;
if (is_object($x394) && $x394 !== JS::$undefined) { $x393 = $x394; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x393;;
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
$x408 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 152, 29, '<image>/05_string.js');
$_TypeError =& $x408[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x408;
$x409 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x410 = $x409($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x410->class) && $x410->class === 'Error') {$x410->properties['file'] = '<image>/05_string.js';$x410->properties['line'] = 152;$x410->properties['column'] = 29;$x410->attributes['file'] = $x410->attributes['line'] = $x410->attributes['column'] = 0; }
throw new JSException($x410, 152, 29, '<image>/05_string.js');
}
$x407 = JS::toObject($_search, $global);
unset($x411, $W411, $S411, $U411);
$x412 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x407, (string) 'exec', 152, 29, '<image>/05_string.js');
$x411 =& $x412[0]; list(,$W411,$S411,$U411) = $x412;
if (!(is_object($x411) && isset($x411->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x415 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 152, 29, '<image>/05_string.js');
$_TypeError =& $x415[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x415;
$x416 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x417 = $x416($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x417->class) && $x417->class === 'Error') {$x417->properties['file'] = '<image>/05_string.js';$x417->properties['line'] = 152;$x417->properties['column'] = 29;$x417->attributes['file'] = $x417->attributes['line'] = $x417->attributes['column'] = 0; }
throw new JSException($x417, 152, 29, '<image>/05_string.js');
}
$x413 = $x411->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x414 = $x413($global, $x407, $x411, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x414;
$x406 = !(((gettype($_match) === gettype(NULL) && $_match === NULL))|| (((is_float($_match) || is_int($_match)) && (is_float(NULL) || is_int(NULL))) && $_match == NULL));
if (!JS::toBoolean($x406, $global)) { break; }

unset($x418, $W418, $S418, $U418);
$x419 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'index', 153, 16, '<image>/05_string.js');
$x418 =& $x419[0]; list(,$W418,$S418,$U418) = $x419;
if ($Uindex) {$global->properties['index'] = $_index; $_index =& $global->properties['index']; }
$_index = $x418;
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x421 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 154, 40, '<image>/05_string.js');
$_TypeError =& $x421[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x421;
$x422 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x423 = $x422($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x423->class) && $x423->class === 'Error') {$x423->properties['file'] = '<image>/05_string.js';$x423->properties['line'] = 154;$x423->properties['column'] = 40;$x423->attributes['file'] = $x423->attributes['line'] = $x423->attributes['column'] = 0; }
throw new JSException($x423, 154, 40, '<image>/05_string.js');
}
$x420 = JS::toObject($_thisString, $global);
unset($x424, $W424, $S424, $U424);
$x425 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x420, (string) 'substring', 154, 40, '<image>/05_string.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
if (!(is_object($x424) && isset($x424->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x428 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 154, 40, '<image>/05_string.js');
$_TypeError =& $x428[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x428;
$x429 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x430 = $x429($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x430->class) && $x430->class === 'Error') {$x430->properties['file'] = '<image>/05_string.js';$x430->properties['line'] = 154;$x430->properties['column'] = 40;$x430->attributes['file'] = $x430->attributes['line'] = $x430->attributes['column'] = 0; }
throw new JSException($x430, 154, 40, '<image>/05_string.js');
}
$x426 = $x424->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x427 = $x426($global, $x420, $x424, array($_lastIndex, $_index), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x427;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x431 = JS::toPrimitive($_newString, $global);
$x432 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x431) || is_string($x432) ? JS::toString($x431, $global) . JS::toString($x432, $global) : JS::toNumber($x431, $global) + JS::toNumber($x432, $global));
unset($x435, $W435, $S435, $U435);
$x436 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 0, 155, 28, '<image>/05_string.js');
$x435 =& $x436[0]; list(,$W435,$S435,$U435) = $x436;
unset($x437, $W437, $S437, $U437);
$x438 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x435, (string) 'length', 155, 31, '<image>/05_string.js');
$x437 =& $x438[0]; list(,$W437,$S437,$U437) = $x438;
$x433 = JS::toPrimitive($_index, $global);
$x434 = JS::toPrimitive($x437, $global);
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = (is_string($x433) || is_string($x434) ? JS::toString($x433, $global) . JS::toString($x434, $global) : JS::toNumber($x433, $global) + JS::toNumber($x434, $global));
$x440 = $_replace;
$x440 = ($x440 === JS::$undefined ? 'undefined' : (is_int($x440) || is_float($x440) ? 'number' : (is_bool($x440) ? 'boolean' : (is_string($x440) ? 'string' : (is_object($x440) && isset($x440->call) ? 'function' : 'object')))));
$x439 = (((gettype($x440) === gettype('function') && $x440 === 'function'))|| (((is_float($x440) || is_int($x440)) && (is_float('function') || is_int('function'))) && $x440 == 'function'));
if (JS::toBoolean($x439, $global)) {
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x442 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 158, 14, '<image>/05_string.js');
$_TypeError =& $x442[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x442;
$x443 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x444 = $x443($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x444->class) && $x444->class === 'Error') {$x444->properties['file'] = '<image>/05_string.js';$x444->properties['line'] = 158;$x444->properties['column'] = 14;$x444->attributes['file'] = $x444->attributes['line'] = $x444->attributes['column'] = 0; }
throw new JSException($x444, 158, 14, '<image>/05_string.js');
}
$x441 = JS::toObject($_match, $global);
unset($x445, $W445, $S445, $U445);
$x446 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x441, (string) 'push', 158, 14, '<image>/05_string.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
unset($x447, $W447, $S447, $U447);
$x448 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'index', 158, 20, '<image>/05_string.js');
$x447 =& $x448[0]; list(,$W447,$S447,$U447) = $x448;
if (!(is_object($x445) && isset($x445->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x451 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 158, 14, '<image>/05_string.js');
$_TypeError =& $x451[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x451;
$x452 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x453 = $x452($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x453->class) && $x453->class === 'Error') {$x453->properties['file'] = '<image>/05_string.js';$x453->properties['line'] = 158;$x453->properties['column'] = 14;$x453->attributes['file'] = $x453->attributes['line'] = $x453->attributes['column'] = 0; }
throw new JSException($x453, 158, 14, '<image>/05_string.js');
}
$x449 = $x445->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x450 = $x449($global, $x441, $x445, array($x447), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x455 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 159, 14, '<image>/05_string.js');
$_TypeError =& $x455[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x455;
$x456 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x457 = $x456($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x457->class) && $x457->class === 'Error') {$x457->properties['file'] = '<image>/05_string.js';$x457->properties['line'] = 159;$x457->properties['column'] = 14;$x457->attributes['file'] = $x457->attributes['line'] = $x457->attributes['column'] = 0; }
throw new JSException($x457, 159, 14, '<image>/05_string.js');
}
$x454 = JS::toObject($_match, $global);
unset($x458, $W458, $S458, $U458);
$x459 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x454, (string) 'push', 159, 14, '<image>/05_string.js');
$x458 =& $x459[0]; list(,$W458,$S458,$U458) = $x459;
unset($x460, $W460, $S460, $U460);
$x461 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'input', 159, 20, '<image>/05_string.js');
$x460 =& $x461[0]; list(,$W460,$S460,$U460) = $x461;
if (!(is_object($x458) && isset($x458->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x464 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 159, 14, '<image>/05_string.js');
$_TypeError =& $x464[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x464;
$x465 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x466 = $x465($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x466->class) && $x466->class === 'Error') {$x466->properties['file'] = '<image>/05_string.js';$x466->properties['line'] = 159;$x466->properties['column'] = 14;$x466->attributes['file'] = $x466->attributes['line'] = $x466->attributes['column'] = 0; }
throw new JSException($x466, 159, 14, '<image>/05_string.js');
}
$x462 = $x458->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x463 = $x462($global, $x454, $x458, array($x460), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!array_key_exists('index', $_match->attributes)) { unset($_match->properties['index']); $x467 = TRUE; }
else if ($_match->attributes['index'] & JS::CONFIGURABLE) { unset($_match->properties['index'], $_match->attributes['index'], $_match->getters['index'], $_match->setters['index']); $x467 = TRUE; }
else { $x467 = FALSE; };
if (!array_key_exists('input', $_match->attributes)) { unset($_match->properties['input']); $x468 = TRUE; }
else if ($_match->attributes['input'] & JS::CONFIGURABLE) { unset($_match->properties['input'], $_match->attributes['input'], $_match->getters['input'], $_match->setters['input']); $x468 = TRUE; }
else { $x468 = FALSE; };
unset($_String, $WString, $SString, $UString);
$x469 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'String', 163, 21, '<image>/05_string.js');
$_String =& $x469[0]; list(,$WString,$SString,$UString) = $x469;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x470 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 163, 21, '<image>/05_string.js');
$_ReferenceError =& $x470[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x470;
$x471 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 21);
$x472 = $x471($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x472->class) && $x472->class === 'Error') {$x472->properties['file'] = '<image>/05_string.js';$x472->properties['line'] = 163;$x472->properties['column'] = 21;$x472->attributes['file'] = $x472->attributes['line'] = $x472->attributes['column'] = 0; }
throw new JSException($x472, 163, 21, '<image>/05_string.js');
}
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x474 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 163, 41, '<image>/05_string.js');
$_TypeError =& $x474[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x474;
$x475 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x476 = $x475($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x476->class) && $x476->class === 'Error') {$x476->properties['file'] = '<image>/05_string.js';$x476->properties['line'] = 163;$x476->properties['column'] = 41;$x476->attributes['file'] = $x476->attributes['line'] = $x476->attributes['column'] = 0; }
throw new JSException($x476, 163, 41, '<image>/05_string.js');
}
$x473 = JS::toObject($_replace, $global);
unset($x477, $W477, $S477, $U477);
$x478 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x473, (string) 'apply', 163, 41, '<image>/05_string.js');
$x477 =& $x478[0]; list(,$W477,$S477,$U477) = $x478;
if (!(is_object($x477) && isset($x477->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x481 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 163, 41, '<image>/05_string.js');
$_TypeError =& $x481[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x481;
$x482 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x483 = $x482($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x483->class) && $x483->class === 'Error') {$x483->properties['file'] = '<image>/05_string.js';$x483->properties['line'] = 163;$x483->properties['column'] = 41;$x483->attributes['file'] = $x483->attributes['line'] = $x483->attributes['column'] = 0; }
throw new JSException($x483, 163, 41, '<image>/05_string.js');
}
$x479 = $x477->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x480 = $x479($global, $x473, $x477, array(JS::$undefined, $_match), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x486 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 163, 27, '<image>/05_string.js');
$_TypeError =& $x486[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x486;
$x487 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x488 = $x487($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x488->class) && $x488->class === 'Error') {$x488->properties['file'] = '<image>/05_string.js';$x488->properties['line'] = 163;$x488->properties['column'] = 27;$x488->attributes['file'] = $x488->attributes['line'] = $x488->attributes['column'] = 0; }
throw new JSException($x488, 163, 27, '<image>/05_string.js');
}
$x484 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x485 = $x484($global, $global, $_String, array($x480), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x485;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x489 = JS::toPrimitive($_newString, $global);
$x490 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x489) || is_string($x490) ? JS::toString($x489, $global) . JS::toString($x490, $global) : JS::toNumber($x489, $global) + JS::toNumber($x490, $global));;
}
else {
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x492 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 166, 32, '<image>/05_string.js');
$_TypeError =& $x492[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x492;
$x493 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x494 = $x493($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x494->class) && $x494->class === 'Error') {$x494->properties['file'] = '<image>/05_string.js';$x494->properties['line'] = 166;$x494->properties['column'] = 32;$x494->attributes['file'] = $x494->attributes['line'] = $x494->attributes['column'] = 0; }
throw new JSException($x494, 166, 32, '<image>/05_string.js');
}
$x491 = JS::toObject($_replace, $global);
unset($x495, $W495, $S495, $U495);
$x496 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x491, (string) 'replace', 166, 32, '<image>/05_string.js');
$x495 =& $x496[0]; list(,$W495,$S495,$U495) = $x496;
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x499 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'RegExp', 166, 33, '<image>/05_string.js');
$_RegExp =& $x499[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x499;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x500 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 166, 33, '<image>/05_string.js');
$_ReferenceError =& $x500[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x500;
$x501 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x502 = $x501($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x502->class) && $x502->class === 'Error') {$x502->properties['file'] = '<image>/05_string.js';$x502->properties['line'] = 166;$x502->properties['column'] = 33;$x502->attributes['file'] = $x502->attributes['line'] = $x502->attributes['column'] = 0; }
throw new JSException($x502, 166, 33, '<image>/05_string.js');
}
$x497 = clone JS::$objectTemplate;
unset($x503, $W503, $S503, $U503);
$x504 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_RegExp, (string) 'prototype', 166, 33, '<image>/05_string.js');
$x503 =& $x504[0]; list(,$W503,$S503,$U503) = $x504;
$x498 = $x503;
$x497->prototype = $x498;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x507 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 166, 33, '<image>/05_string.js');
$_TypeError =& $x507[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x507;
$x508 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x509 = $x508($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x509->class) && $x509->class === 'Error') {$x509->properties['file'] = '<image>/05_string.js';$x509->properties['line'] = 166;$x509->properties['column'] = 33;$x509->attributes['file'] = $x509->attributes['line'] = $x509->attributes['column'] = 0; }
throw new JSException($x509, 166, 33, '<image>/05_string.js');
}
$x505 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x506 = $x505($global, $x497, $_RegExp, array('\\$([$&]|[0-9]|[0-9][0-9])', 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x498 = $x506;
if (is_object($x498) && $x498 !== JS::$undefined) { $x497 = $x498; }
$x535 = clone JS::$functionTemplate; $x535->call = '_61061ff9bcd94539f1393a26c97ae064_15'; $x535->parameters = array (
  0 => '_',
  1 => 'c',
); $x535->scope = $scope; $x535->properties['prototype'] = clone JS::$objectTemplate; $x535->attributes['prototype'] = JS::WRITABLE; $x535->properties['prototype']->properties['constructor'] = $x535; $x535->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x535->properties['length'] = 2; $x535->attributes['length'] = 0;
if (!(is_object($x495) && isset($x495->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x538 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 166, 32, '<image>/05_string.js');
$_TypeError =& $x538[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x538;
$x539 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x540 = $x539($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x540->class) && $x540->class === 'Error') {$x540->properties['file'] = '<image>/05_string.js';$x540->properties['line'] = 166;$x540->properties['column'] = 32;$x540->attributes['file'] = $x540->attributes['line'] = $x540->attributes['column'] = 0; }
throw new JSException($x540, 166, 32, '<image>/05_string.js');
}
$x536 = $x495->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x537 = $x536($global, $x491, $x495, array($x497, $x535), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x541 = JS::toPrimitive($_newString, $global);
$x542 = JS::toPrimitive($x537, $global);
$_newString = (is_string($x541) || is_string($x542) ? JS::toString($x541, $global) . JS::toString($x542, $global) : JS::toNumber($x541, $global) + JS::toNumber($x542, $global));;
};
unset($x543, $W543, $S543, $U543);
$x544 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_search, (string) 'global', 179, 14, '<image>/05_string.js');
$x543 =& $x544[0]; list(,$W543,$S543,$U543) = $x544;
if (JS::toBoolean((!JS::toBoolean($x543, $global)), $global)) {
break;;
};;
};
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x546 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 184, 35, '<image>/05_string.js');
$_TypeError =& $x546[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x546;
$x547 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x548 = $x547($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x548->class) && $x548->class === 'Error') {$x548->properties['file'] = '<image>/05_string.js';$x548->properties['line'] = 184;$x548->properties['column'] = 35;$x548->attributes['file'] = $x548->attributes['line'] = $x548->attributes['column'] = 0; }
throw new JSException($x548, 184, 35, '<image>/05_string.js');
}
$x545 = JS::toObject($_thisString, $global);
unset($x549, $W549, $S549, $U549);
$x550 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x545, (string) 'substring', 184, 35, '<image>/05_string.js');
$x549 =& $x550[0]; list(,$W549,$S549,$U549) = $x550;
unset($x551, $W551, $S551, $U551);
$x552 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_thisString, (string) 'length', 184, 57, '<image>/05_string.js');
$x551 =& $x552[0]; list(,$W551,$S551,$U551) = $x552;
if (!(is_object($x549) && isset($x549->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x555 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 184, 35, '<image>/05_string.js');
$_TypeError =& $x555[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x555;
$x556 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x557 = $x556($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x557->class) && $x557->class === 'Error') {$x557->properties['file'] = '<image>/05_string.js';$x557->properties['line'] = 184;$x557->properties['column'] = 35;$x557->attributes['file'] = $x557->attributes['line'] = $x557->attributes['column'] = 0; }
throw new JSException($x557, 184, 35, '<image>/05_string.js');
}
$x553 = $x549->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x554 = $x553($global, $x545, $x549, array($_lastIndex, $x551), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x558 = JS::toPrimitive($_newString, $global);
$x559 = JS::toPrimitive($x554, $global);
$_newString = (is_string($x558) || is_string($x559) ? JS::toString($x558, $global) . JS::toString($x559, $global) : JS::toNumber($x558, $global) + JS::toNumber($x559, $global));
return $_newString;
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x390=&$scope->properties[\'arguments\'];$x390->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x390->properties[$i]=$args[$i];$x390->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'replace\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replace=&$scope->properties[\'replace\'];$Ureplace=FALSE;$global->scope[++$global->scope_sp]=$scope;$x392=$_search;$x392=($x392===JS::$undefined?\'undefined\':(is_int($x392)||is_float($x392)?\'number\':(is_bool($x392)?\'boolean\':(is_string($x392)?\'string\':(is_object($x392)&&isset($x392->call)?\'function\':\'object\')))));$x391=(((gettype($x392)===gettype(\'string\')&&$x392===\'string\'))||(((is_float($x392)||is_int($x392))&&(is_float(\'string\')||is_int(\'string\')))&&$x392==\'string\'));if(JS::toBoolean($x391,$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x395=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'RegExp\',146,16,\'<image>/05_string.js\');$_RegExp=&$x395[0];list(,$WRegExp,$SRegExp,$URegExp)=$x395;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x396=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',146,16,\'<image>/05_string.js\');$_ReferenceError=&$x396[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x396;$x397=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,16);$x398=$x397($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x398->class)&&$x398->class===\'Error\'){$x398->properties[\'file\']=\'<image>/05_string.js\';$x398->properties[\'line\']=146;$x398->properties[\'column\']=16;$x398->attributes[\'file\']=$x398->attributes[\'line\']=$x398->attributes[\'column\']=0;}throw new JSException($x398,146,16,\'<image>/05_string.js\');}$x393=clone JS::$objectTemplate;unset($x399,$W399,$S399,$U399);$x400=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_RegExp,(string)\'prototype\',146,12,\'<image>/05_string.js\');$x399=&$x400[0];list(,$W399,$S399,$U399)=$x400;$x394=$x399;$x393->prototype=$x394;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x403=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',146,12,\'<image>/05_string.js\');$_TypeError=&$x403[0];list(,$WTypeError,$STypeError,$UTypeError)=$x403;$x404=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x405=$x404($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x405->class)&&$x405->class===\'Error\'){$x405->properties[\'file\']=\'<image>/05_string.js\';$x405->properties[\'line\']=146;$x405->properties[\'column\']=12;$x405->attributes[\'file\']=$x405->attributes[\'line\']=$x405->attributes[\'column\']=0;}throw new JSException($x405,146,12,\'<image>/05_string.js\');}$x401=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x402=$x401($global,$x393,$_RegExp,array(preg_quote($_search,\'/\')),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x394=$x402;if(is_object($x394)&&$x394!==JS::$undefined){$x393=$x394;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x393;}$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;$scope->properties[\'newString\']=JS::$undefined;$_newString=&$scope->properties[\'newString\'];$UnewString=FALSE;$_newString=\'\';$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=JS::$undefined;for(;;){if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x408=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',152,29,\'<image>/05_string.js\');$_TypeError=&$x408[0];list(,$WTypeError,$STypeError,$UTypeError)=$x408;$x409=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x410=$x409($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x410->class)&&$x410->class===\'Error\'){$x410->properties[\'file\']=\'<image>/05_string.js\';$x410->properties[\'line\']=152;$x410->properties[\'column\']=29;$x410->attributes[\'file\']=$x410->attributes[\'line\']=$x410->attributes[\'column\']=0;}throw new JSException($x410,152,29,\'<image>/05_string.js\');}$x407=JS::toObject($_search,$global);unset($x411,$W411,$S411,$U411);$x412=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x407,(string)\'exec\',152,29,\'<image>/05_string.js\');$x411=&$x412[0];list(,$W411,$S411,$U411)=$x412;if(!(is_object($x411)&&isset($x411->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x415=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',152,29,\'<image>/05_string.js\');$_TypeError=&$x415[0];list(,$WTypeError,$STypeError,$UTypeError)=$x415;$x416=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x417=$x416($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x417->class)&&$x417->class===\'Error\'){$x417->properties[\'file\']=\'<image>/05_string.js\';$x417->properties[\'line\']=152;$x417->properties[\'column\']=29;$x417->attributes[\'file\']=$x417->attributes[\'line\']=$x417->attributes[\'column\']=0;}throw new JSException($x417,152,29,\'<image>/05_string.js\');}$x413=$x411->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x414=$x413($global,$x407,$x411,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x414;$x406=!(((gettype($_match)===gettype(NULL)&&$_match===NULL))||(((is_float($_match)||is_int($_match))&&(is_float(NULL)||is_int(NULL)))&&$_match==NULL));if(!JS::toBoolean($x406,$global)){break;}unset($x418,$W418,$S418,$U418);$x419=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'index\',153,16,\'<image>/05_string.js\');$x418=&$x419[0];list(,$W418,$S418,$U418)=$x419;if($Uindex){$global->properties[\'index\']=$_index;$_index=&$global->properties[\'index\'];}$_index=$x418;if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x421=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',154,40,\'<image>/05_string.js\');$_TypeError=&$x421[0];list(,$WTypeError,$STypeError,$UTypeError)=$x421;$x422=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x423=$x422($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x423->class)&&$x423->class===\'Error\'){$x423->properties[\'file\']=\'<image>/05_string.js\';$x423->properties[\'line\']=154;$x423->properties[\'column\']=40;$x423->attributes[\'file\']=$x423->attributes[\'line\']=$x423->attributes[\'column\']=0;}throw new JSException($x423,154,40,\'<image>/05_string.js\');}$x420=JS::toObject($_thisString,$global);unset($x424,$W424,$S424,$U424);$x425=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x420,(string)\'substring\',154,40,\'<image>/05_string.js\');$x424=&$x425[0];list(,$W424,$S424,$U424)=$x425;if(!(is_object($x424)&&isset($x424->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x428=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',154,40,\'<image>/05_string.js\');$_TypeError=&$x428[0];list(,$WTypeError,$STypeError,$UTypeError)=$x428;$x429=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x430=$x429($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x430->class)&&$x430->class===\'Error\'){$x430->properties[\'file\']=\'<image>/05_string.js\';$x430->properties[\'line\']=154;$x430->properties[\'column\']=40;$x430->attributes[\'file\']=$x430->attributes[\'line\']=$x430->attributes[\'column\']=0;}throw new JSException($x430,154,40,\'<image>/05_string.js\');}$x426=$x424->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x427=$x426($global,$x420,$x424,array($_lastIndex,$_index),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x427;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x431=JS::toPrimitive($_newString,$global);$x432=JS::toPrimitive($_s,$global);$_newString=(is_string($x431)||is_string($x432)?JS::toString($x431,$global).JS::toString($x432,$global):JS::toNumber($x431,$global)+JS::toNumber($x432,$global));unset($x435,$W435,$S435,$U435);$x436=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)0,155,28,\'<image>/05_string.js\');$x435=&$x436[0];list(,$W435,$S435,$U435)=$x436;unset($x437,$W437,$S437,$U437);$x438=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x435,(string)\'length\',155,31,\'<image>/05_string.js\');$x437=&$x438[0];list(,$W437,$S437,$U437)=$x438;$x433=JS::toPrimitive($_index,$global);$x434=JS::toPrimitive($x437,$global);if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=(is_string($x433)||is_string($x434)?JS::toString($x433,$global).JS::toString($x434,$global):JS::toNumber($x433,$global)+JS::toNumber($x434,$global));$x440=$_replace;$x440=($x440===JS::$undefined?\'undefined\':(is_int($x440)||is_float($x440)?\'number\':(is_bool($x440)?\'boolean\':(is_string($x440)?\'string\':(is_object($x440)&&isset($x440->call)?\'function\':\'object\')))));$x439=(((gettype($x440)===gettype(\'function\')&&$x440===\'function\'))||(((is_float($x440)||is_int($x440))&&(is_float(\'function\')||is_int(\'function\')))&&$x440==\'function\'));if(JS::toBoolean($x439,$global)){if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x442=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',158,14,\'<image>/05_string.js\');$_TypeError=&$x442[0];list(,$WTypeError,$STypeError,$UTypeError)=$x442;$x443=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x444=$x443($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x444->class)&&$x444->class===\'Error\'){$x444->properties[\'file\']=\'<image>/05_string.js\';$x444->properties[\'line\']=158;$x444->properties[\'column\']=14;$x444->attributes[\'file\']=$x444->attributes[\'line\']=$x444->attributes[\'column\']=0;}throw new JSException($x444,158,14,\'<image>/05_string.js\');}$x441=JS::toObject($_match,$global);unset($x445,$W445,$S445,$U445);$x446=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x441,(string)\'push\',158,14,\'<image>/05_string.js\');$x445=&$x446[0];list(,$W445,$S445,$U445)=$x446;unset($x447,$W447,$S447,$U447);$x448=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'index\',158,20,\'<image>/05_string.js\');$x447=&$x448[0];list(,$W447,$S447,$U447)=$x448;if(!(is_object($x445)&&isset($x445->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x451=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',158,14,\'<image>/05_string.js\');$_TypeError=&$x451[0];list(,$WTypeError,$STypeError,$UTypeError)=$x451;$x452=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x453=$x452($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x453->class)&&$x453->class===\'Error\'){$x453->properties[\'file\']=\'<image>/05_string.js\';$x453->properties[\'line\']=158;$x453->properties[\'column\']=14;$x453->attributes[\'file\']=$x453->attributes[\'line\']=$x453->attributes[\'column\']=0;}throw new JSException($x453,158,14,\'<image>/05_string.js\');}$x449=$x445->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x450=$x449($global,$x441,$x445,array($x447),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x455=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',159,14,\'<image>/05_string.js\');$_TypeError=&$x455[0];list(,$WTypeError,$STypeError,$UTypeError)=$x455;$x456=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x457=$x456($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x457->class)&&$x457->class===\'Error\'){$x457->properties[\'file\']=\'<image>/05_string.js\';$x457->properties[\'line\']=159;$x457->properties[\'column\']=14;$x457->attributes[\'file\']=$x457->attributes[\'line\']=$x457->attributes[\'column\']=0;}throw new JSException($x457,159,14,\'<image>/05_string.js\');}$x454=JS::toObject($_match,$global);unset($x458,$W458,$S458,$U458);$x459=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x454,(string)\'push\',159,14,\'<image>/05_string.js\');$x458=&$x459[0];list(,$W458,$S458,$U458)=$x459;unset($x460,$W460,$S460,$U460);$x461=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'input\',159,20,\'<image>/05_string.js\');$x460=&$x461[0];list(,$W460,$S460,$U460)=$x461;if(!(is_object($x458)&&isset($x458->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x464=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',159,14,\'<image>/05_string.js\');$_TypeError=&$x464[0];list(,$WTypeError,$STypeError,$UTypeError)=$x464;$x465=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x466=$x465($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x466->class)&&$x466->class===\'Error\'){$x466->properties[\'file\']=\'<image>/05_string.js\';$x466->properties[\'line\']=159;$x466->properties[\'column\']=14;$x466->attributes[\'file\']=$x466->attributes[\'line\']=$x466->attributes[\'column\']=0;}throw new JSException($x466,159,14,\'<image>/05_string.js\');}$x462=$x458->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x463=$x462($global,$x454,$x458,array($x460),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!array_key_exists(\'index\',$_match->attributes)){unset($_match->properties[\'index\']);$x467=TRUE;}else if($_match->attributes[\'index\']&JS::CONFIGURABLE){unset($_match->properties[\'index\'],$_match->attributes[\'index\'],$_match->getters[\'index\'],$_match->setters[\'index\']);$x467=TRUE;}else{$x467=FALSE;}if(!array_key_exists(\'input\',$_match->attributes)){unset($_match->properties[\'input\']);$x468=TRUE;}else if($_match->attributes[\'input\']&JS::CONFIGURABLE){unset($_match->properties[\'input\'],$_match->attributes[\'input\'],$_match->getters[\'input\'],$_match->setters[\'input\']);$x468=TRUE;}else{$x468=FALSE;}unset($_String,$WString,$SString,$UString);$x469=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'String\',163,21,\'<image>/05_string.js\');$_String=&$x469[0];list(,$WString,$SString,$UString)=$x469;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x470=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',163,21,\'<image>/05_string.js\');$_ReferenceError=&$x470[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x470;$x471=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,21);$x472=$x471($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x472->class)&&$x472->class===\'Error\'){$x472->properties[\'file\']=\'<image>/05_string.js\';$x472->properties[\'line\']=163;$x472->properties[\'column\']=21;$x472->attributes[\'file\']=$x472->attributes[\'line\']=$x472->attributes[\'column\']=0;}throw new JSException($x472,163,21,\'<image>/05_string.js\');}if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x474=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',163,41,\'<image>/05_string.js\');$_TypeError=&$x474[0];list(,$WTypeError,$STypeError,$UTypeError)=$x474;$x475=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x476=$x475($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x476->class)&&$x476->class===\'Error\'){$x476->properties[\'file\']=\'<image>/05_string.js\';$x476->properties[\'line\']=163;$x476->properties[\'column\']=41;$x476->attributes[\'file\']=$x476->attributes[\'line\']=$x476->attributes[\'column\']=0;}throw new JSException($x476,163,41,\'<image>/05_string.js\');}$x473=JS::toObject($_replace,$global);unset($x477,$W477,$S477,$U477);$x478=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x473,(string)\'apply\',163,41,\'<image>/05_string.js\');$x477=&$x478[0];list(,$W477,$S477,$U477)=$x478;if(!(is_object($x477)&&isset($x477->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x481=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',163,41,\'<image>/05_string.js\');$_TypeError=&$x481[0];list(,$WTypeError,$STypeError,$UTypeError)=$x481;$x482=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x483=$x482($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x483->class)&&$x483->class===\'Error\'){$x483->properties[\'file\']=\'<image>/05_string.js\';$x483->properties[\'line\']=163;$x483->properties[\'column\']=41;$x483->attributes[\'file\']=$x483->attributes[\'line\']=$x483->attributes[\'column\']=0;}throw new JSException($x483,163,41,\'<image>/05_string.js\');}$x479=$x477->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x480=$x479($global,$x473,$x477,array(JS::$undefined,$_match),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x486=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',163,27,\'<image>/05_string.js\');$_TypeError=&$x486[0];list(,$WTypeError,$STypeError,$UTypeError)=$x486;$x487=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x488=$x487($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x488->class)&&$x488->class===\'Error\'){$x488->properties[\'file\']=\'<image>/05_string.js\';$x488->properties[\'line\']=163;$x488->properties[\'column\']=27;$x488->attributes[\'file\']=$x488->attributes[\'line\']=$x488->attributes[\'column\']=0;}throw new JSException($x488,163,27,\'<image>/05_string.js\');}$x484=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x485=$x484($global,$global,$_String,array($x480),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x485;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x489=JS::toPrimitive($_newString,$global);$x490=JS::toPrimitive($_s,$global);$_newString=(is_string($x489)||is_string($x490)?JS::toString($x489,$global).JS::toString($x490,$global):JS::toNumber($x489,$global)+JS::toNumber($x490,$global));}else{if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x492=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',166,32,\'<image>/05_string.js\');$_TypeError=&$x492[0];list(,$WTypeError,$STypeError,$UTypeError)=$x492;$x493=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x494=$x493($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x494->class)&&$x494->class===\'Error\'){$x494->properties[\'file\']=\'<image>/05_string.js\';$x494->properties[\'line\']=166;$x494->properties[\'column\']=32;$x494->attributes[\'file\']=$x494->attributes[\'line\']=$x494->attributes[\'column\']=0;}throw new JSException($x494,166,32,\'<image>/05_string.js\');}$x491=JS::toObject($_replace,$global);unset($x495,$W495,$S495,$U495);$x496=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x491,(string)\'replace\',166,32,\'<image>/05_string.js\');$x495=&$x496[0];list(,$W495,$S495,$U495)=$x496;unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x499=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'RegExp\',166,33,\'<image>/05_string.js\');$_RegExp=&$x499[0];list(,$WRegExp,$SRegExp,$URegExp)=$x499;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x500=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',166,33,\'<image>/05_string.js\');$_ReferenceError=&$x500[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x500;$x501=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x502=$x501($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x502->class)&&$x502->class===\'Error\'){$x502->properties[\'file\']=\'<image>/05_string.js\';$x502->properties[\'line\']=166;$x502->properties[\'column\']=33;$x502->attributes[\'file\']=$x502->attributes[\'line\']=$x502->attributes[\'column\']=0;}throw new JSException($x502,166,33,\'<image>/05_string.js\');}$x497=clone JS::$objectTemplate;unset($x503,$W503,$S503,$U503);$x504=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_RegExp,(string)\'prototype\',166,33,\'<image>/05_string.js\');$x503=&$x504[0];list(,$W503,$S503,$U503)=$x504;$x498=$x503;$x497->prototype=$x498;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x507=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',166,33,\'<image>/05_string.js\');$_TypeError=&$x507[0];list(,$WTypeError,$STypeError,$UTypeError)=$x507;$x508=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x509=$x508($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x509->class)&&$x509->class===\'Error\'){$x509->properties[\'file\']=\'<image>/05_string.js\';$x509->properties[\'line\']=166;$x509->properties[\'column\']=33;$x509->attributes[\'file\']=$x509->attributes[\'line\']=$x509->attributes[\'column\']=0;}throw new JSException($x509,166,33,\'<image>/05_string.js\');}$x505=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x506=$x505($global,$x497,$_RegExp,array(\'\\\\$([$&]|[0-9]|[0-9][0-9])\',\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x498=$x506;if(is_object($x498)&&$x498!==JS::$undefined){$x497=$x498;}$x535=clone JS::$functionTemplate;$x535->call=\'_61061ff9bcd94539f1393a26c97ae064_15\';$x535->parameters=array(0=>\'_\',1=>\'c\',);$x535->scope=$scope;$x535->properties[\'prototype\']=clone JS::$objectTemplate;$x535->attributes[\'prototype\']=JS::WRITABLE;$x535->properties[\'prototype\']->properties[\'constructor\']=$x535;$x535->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x535->properties[\'length\']=2;$x535->attributes[\'length\']=0;if(!(is_object($x495)&&isset($x495->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x538=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',166,32,\'<image>/05_string.js\');$_TypeError=&$x538[0];list(,$WTypeError,$STypeError,$UTypeError)=$x538;$x539=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x540=$x539($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x540->class)&&$x540->class===\'Error\'){$x540->properties[\'file\']=\'<image>/05_string.js\';$x540->properties[\'line\']=166;$x540->properties[\'column\']=32;$x540->attributes[\'file\']=$x540->attributes[\'line\']=$x540->attributes[\'column\']=0;}throw new JSException($x540,166,32,\'<image>/05_string.js\');}$x536=$x495->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x537=$x536($global,$x491,$x495,array($x497,$x535),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x541=JS::toPrimitive($_newString,$global);$x542=JS::toPrimitive($x537,$global);$_newString=(is_string($x541)||is_string($x542)?JS::toString($x541,$global).JS::toString($x542,$global):JS::toNumber($x541,$global)+JS::toNumber($x542,$global));}unset($x543,$W543,$S543,$U543);$x544=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_search,(string)\'global\',179,14,\'<image>/05_string.js\');$x543=&$x544[0];list(,$W543,$S543,$U543)=$x544;if(JS::toBoolean((!JS::toBoolean($x543,$global)),$global)){break;}}if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x546=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',184,35,\'<image>/05_string.js\');$_TypeError=&$x546[0];list(,$WTypeError,$STypeError,$UTypeError)=$x546;$x547=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x548=$x547($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x548->class)&&$x548->class===\'Error\'){$x548->properties[\'file\']=\'<image>/05_string.js\';$x548->properties[\'line\']=184;$x548->properties[\'column\']=35;$x548->attributes[\'file\']=$x548->attributes[\'line\']=$x548->attributes[\'column\']=0;}throw new JSException($x548,184,35,\'<image>/05_string.js\');}$x545=JS::toObject($_thisString,$global);unset($x549,$W549,$S549,$U549);$x550=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x545,(string)\'substring\',184,35,\'<image>/05_string.js\');$x549=&$x550[0];list(,$W549,$S549,$U549)=$x550;unset($x551,$W551,$S551,$U551);$x552=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_thisString,(string)\'length\',184,57,\'<image>/05_string.js\');$x551=&$x552[0];list(,$W551,$S551,$U551)=$x552;if(!(is_object($x549)&&isset($x549->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x555=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',184,35,\'<image>/05_string.js\');$_TypeError=&$x555[0];list(,$WTypeError,$STypeError,$UTypeError)=$x555;$x556=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x557=$x556($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x557->class)&&$x557->class===\'Error\'){$x557->properties[\'file\']=\'<image>/05_string.js\';$x557->properties[\'line\']=184;$x557->properties[\'column\']=35;$x557->attributes[\'file\']=$x557->attributes[\'line\']=$x557->attributes[\'column\']=0;}throw new JSException($x557,184,35,\'<image>/05_string.js\');}$x553=$x549->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x554=$x553($global,$x545,$x549,array($_lastIndex,$x551),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x558=JS::toPrimitive($_newString,$global);$x559=JS::toPrimitive($x554,$global);$_newString=(is_string($x558)||is_string($x559)?JS::toString($x558,$global).JS::toString($x559,$global):JS::toNumber($x558,$global)+JS::toNumber($x559,$global));return$_newString;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x572 =& $scope->properties['arguments'];
$x572->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x572->properties[$i] = $args[$i];
$x572->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_search) && isset($_search->class) &&$_search->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x575 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'RegExp', 191, 16, '<image>/05_string.js');
$_RegExp =& $x575[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x575;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x576 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 191, 16, '<image>/05_string.js');
$_ReferenceError =& $x576[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x576;
$x577 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 16);
$x578 = $x577($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x578->class) && $x578->class === 'Error') {$x578->properties['file'] = '<image>/05_string.js';$x578->properties['line'] = 191;$x578->properties['column'] = 16;$x578->attributes['file'] = $x578->attributes['line'] = $x578->attributes['column'] = 0; }
throw new JSException($x578, 191, 16, '<image>/05_string.js');
}
$x573 = clone JS::$objectTemplate;
unset($x579, $W579, $S579, $U579);
$x580 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_RegExp, (string) 'prototype', 191, 12, '<image>/05_string.js');
$x579 =& $x580[0]; list(,$W579,$S579,$U579) = $x580;
$x574 = $x579;
$x573->prototype = $x574;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x583 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 191, 12, '<image>/05_string.js');
$_TypeError =& $x583[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x583;
$x584 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x585 = $x584($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x585->class) && $x585->class === 'Error') {$x585->properties['file'] = '<image>/05_string.js';$x585->properties['line'] = 191;$x585->properties['column'] = 12;$x585->attributes['file'] = $x585->attributes['line'] = $x585->attributes['column'] = 0; }
throw new JSException($x585, 191, 12, '<image>/05_string.js');
}
$x581 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x582 = $x581($global, $x573, $_RegExp, array($_search), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x574 = $x582;
if (is_object($x574) && $x574 !== JS::$undefined) { $x573 = $x574; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x573;;
};
unset($x586, $W586, $S586, $U586);
$x587 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_search, (string) 'lastIndex', 194, 29, '<image>/05_string.js');
$x586 =& $x587[0]; list(,$W586,$S586,$U586) = $x587;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x586;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x589 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 195, 22, '<image>/05_string.js');
$_TypeError =& $x589[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x589;
$x590 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x591 = $x590($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x591->class) && $x591->class === 'Error') {$x591->properties['file'] = '<image>/05_string.js';$x591->properties['line'] = 195;$x591->properties['column'] = 22;$x591->attributes['file'] = $x591->attributes['line'] = $x591->attributes['column'] = 0; }
throw new JSException($x591, 195, 22, '<image>/05_string.js');
}
$x588 = JS::toObject($_search, $global);
unset($x592, $W592, $S592, $U592);
$x593 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x588, (string) 'exec', 195, 22, '<image>/05_string.js');
$x592 =& $x593[0]; list(,$W592,$S592,$U592) = $x593;
if (!(is_object($x592) && isset($x592->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x596 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 195, 22, '<image>/05_string.js');
$_TypeError =& $x596[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x596;
$x597 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x598 = $x597($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x598->class) && $x598->class === 'Error') {$x598->properties['file'] = '<image>/05_string.js';$x598->properties['line'] = 195;$x598->properties['column'] = 22;$x598->attributes['file'] = $x598->attributes['line'] = $x598->attributes['column'] = 0; }
throw new JSException($x598, 195, 22, '<image>/05_string.js');
}
$x594 = $x592->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x595 = $x594($global, $x588, $x592, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = $x595;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x599 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 197, 21, '<image>/05_string.js');
$_TypeError =& $x599[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x599;
$x600 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x601 = $x600($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x601->class) && $x601->class === 'Error') {$x601->properties['file'] = '<image>/05_string.js';$x601->properties['line'] = 197;$x601->properties['column'] = 21;$x601->attributes['file'] = $x601->attributes['line'] = $x601->attributes['column'] = 0; }
throw new JSException($x601, 197, 21, '<image>/05_string.js');
}
$_search = JS::toObject($_search, $global);
unset($x602, $W602, $S602, $U602);
$x603 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $_search, (string) 'lastIndexOf', 197, 21, '<image>/05_string.js');
$x602 =& $x603[0]; list(,$W602,$S602,$U602) = $x603;
if ($U602 && (!isset($_search->extensible) || $_search->extensible)) {$_search->properties['lastIndexOf'] = $x602; $x602 =& $_search->properties['lastIndexOf']; $_search->attributes['lastIndexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U602 = FALSE; $W602 = TRUE; }
if (isset($S602)) {
$x605 = $S602->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x606 = $x605($global, $_search, $S602, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x604 = $x606;
} else {
if (!$U602) {$x604 = $_savedLastIndex;if ($W602) { $x602 = $_savedLastIndex; }  }
else { $x604 = JS::$undefined; }
}
if (isset($_search->class) && $_search->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $_search->properties['length']) { $_search->properties['length'] = 'lastIndexOf' + 1; };
if (JS::toBoolean($_match, $global)) {
unset($x607, $W607, $S607, $U607);
$x608 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'index', 200, 15, '<image>/05_string.js');
$x607 =& $x608[0]; list(,$W607,$S607,$U607) = $x608;
return $x607;;
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x572=&$scope->properties[\'arguments\'];$x572->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x572->properties[$i]=$args[$i];$x572->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_search)&&isset($_search->class)&&$_search->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x575=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'RegExp\',191,16,\'<image>/05_string.js\');$_RegExp=&$x575[0];list(,$WRegExp,$SRegExp,$URegExp)=$x575;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x576=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',191,16,\'<image>/05_string.js\');$_ReferenceError=&$x576[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x576;$x577=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,16);$x578=$x577($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x578->class)&&$x578->class===\'Error\'){$x578->properties[\'file\']=\'<image>/05_string.js\';$x578->properties[\'line\']=191;$x578->properties[\'column\']=16;$x578->attributes[\'file\']=$x578->attributes[\'line\']=$x578->attributes[\'column\']=0;}throw new JSException($x578,191,16,\'<image>/05_string.js\');}$x573=clone JS::$objectTemplate;unset($x579,$W579,$S579,$U579);$x580=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_RegExp,(string)\'prototype\',191,12,\'<image>/05_string.js\');$x579=&$x580[0];list(,$W579,$S579,$U579)=$x580;$x574=$x579;$x573->prototype=$x574;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x583=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',191,12,\'<image>/05_string.js\');$_TypeError=&$x583[0];list(,$WTypeError,$STypeError,$UTypeError)=$x583;$x584=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x585=$x584($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x585->class)&&$x585->class===\'Error\'){$x585->properties[\'file\']=\'<image>/05_string.js\';$x585->properties[\'line\']=191;$x585->properties[\'column\']=12;$x585->attributes[\'file\']=$x585->attributes[\'line\']=$x585->attributes[\'column\']=0;}throw new JSException($x585,191,12,\'<image>/05_string.js\');}$x581=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x582=$x581($global,$x573,$_RegExp,array($_search),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x574=$x582;if(is_object($x574)&&$x574!==JS::$undefined){$x573=$x574;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x573;}unset($x586,$W586,$S586,$U586);$x587=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_search,(string)\'lastIndex\',194,29,\'<image>/05_string.js\');$x586=&$x587[0];list(,$W586,$S586,$U586)=$x587;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x586;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x589=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',195,22,\'<image>/05_string.js\');$_TypeError=&$x589[0];list(,$WTypeError,$STypeError,$UTypeError)=$x589;$x590=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x591=$x590($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x591->class)&&$x591->class===\'Error\'){$x591->properties[\'file\']=\'<image>/05_string.js\';$x591->properties[\'line\']=195;$x591->properties[\'column\']=22;$x591->attributes[\'file\']=$x591->attributes[\'line\']=$x591->attributes[\'column\']=0;}throw new JSException($x591,195,22,\'<image>/05_string.js\');}$x588=JS::toObject($_search,$global);unset($x592,$W592,$S592,$U592);$x593=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x588,(string)\'exec\',195,22,\'<image>/05_string.js\');$x592=&$x593[0];list(,$W592,$S592,$U592)=$x593;if(!(is_object($x592)&&isset($x592->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x596=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',195,22,\'<image>/05_string.js\');$_TypeError=&$x596[0];list(,$WTypeError,$STypeError,$UTypeError)=$x596;$x597=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x598=$x597($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x598->class)&&$x598->class===\'Error\'){$x598->properties[\'file\']=\'<image>/05_string.js\';$x598->properties[\'line\']=195;$x598->properties[\'column\']=22;$x598->attributes[\'file\']=$x598->attributes[\'line\']=$x598->attributes[\'column\']=0;}throw new JSException($x598,195,22,\'<image>/05_string.js\');}$x594=$x592->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x595=$x594($global,$x588,$x592,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=$x595;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x599=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',197,21,\'<image>/05_string.js\');$_TypeError=&$x599[0];list(,$WTypeError,$STypeError,$UTypeError)=$x599;$x600=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x601=$x600($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x601->class)&&$x601->class===\'Error\'){$x601->properties[\'file\']=\'<image>/05_string.js\';$x601->properties[\'line\']=197;$x601->properties[\'column\']=21;$x601->attributes[\'file\']=$x601->attributes[\'line\']=$x601->attributes[\'column\']=0;}throw new JSException($x601,197,21,\'<image>/05_string.js\');}$_search=JS::toObject($_search,$global);unset($x602,$W602,$S602,$U602);$x603=_61061ff9bcd94539f1393a26c97ae064_5($global,$scope,$_search,(string)\'lastIndexOf\',197,21,\'<image>/05_string.js\');$x602=&$x603[0];list(,$W602,$S602,$U602)=$x603;if($U602&&(!isset($_search->extensible)||$_search->extensible)){$_search->properties[\'lastIndexOf\']=$x602;$x602=&$_search->properties[\'lastIndexOf\'];$_search->attributes[\'lastIndexOf\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U602=FALSE;$W602=TRUE;}if(isset($S602)){$x605=$S602->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x606=$x605($global,$_search,$S602,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x604=$x606;}else{if(!$U602){$x604=$_savedLastIndex;if($W602){$x602=$_savedLastIndex;}}else{$x604=JS::$undefined;}}if(isset($_search->class)&&$_search->class===\'Array\'&&is_int(\'lastIndexOf\')&&\'lastIndexOf\'>=$_search->properties[\'length\']){$_search->properties[\'length\']=\'lastIndexOf\'+1;}if(JS::toBoolean($_match,$global)){unset($x607,$W607,$S607,$U607);$x608=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'index\',200,15,\'<image>/05_string.js\');$x607=&$x608[0];list(,$W607,$S607,$U607)=$x608;return$x607;}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x621 =& $scope->properties['arguments'];
$x621->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x621->properties[$i] = $args[$i];
$x621->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x622 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x622, $global)) {
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = 0;;
};
$x623 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x623, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x624 = JS::toPrimitive($_start, $global);
$x625 = JS::toPrimitive(0, $global);
$x626 = (is_string($x624) && is_string($x625) ? strcmp($x624, $x625) < 0 : (!is_nan($x627 = JS::toNumber($x624, $global)) && !is_nan($x628 = JS::toNumber($x625, $global)) && $x627 < $x628));
if (JS::toBoolean($x626, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x629 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Math', 218, 11, '<image>/05_string.js');
$_Math =& $x629[0]; list(,$WMath,$SMath,$UMath) = $x629;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x630 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 218, 11, '<image>/05_string.js');
$_ReferenceError =& $x630[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x630;
$x631 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 11);
$x632 = $x631($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x632->class) && $x632->class === 'Error') {$x632->properties['file'] = '<image>/05_string.js';$x632->properties['line'] = 218;$x632->properties['column'] = 11;$x632->attributes['file'] = $x632->attributes['line'] = $x632->attributes['column'] = 0; }
throw new JSException($x632, 218, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x634 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 218, 19, '<image>/05_string.js');
$_TypeError =& $x634[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x634;
$x635 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x636 = $x635($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x636->class) && $x636->class === 'Error') {$x636->properties['file'] = '<image>/05_string.js';$x636->properties['line'] = 218;$x636->properties['column'] = 19;$x636->attributes['file'] = $x636->attributes['line'] = $x636->attributes['column'] = 0; }
throw new JSException($x636, 218, 19, '<image>/05_string.js');
}
$x633 = JS::toObject($_Math, $global);
unset($x637, $W637, $S637, $U637);
$x638 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x633, (string) 'max', 218, 19, '<image>/05_string.js');
$x637 =& $x638[0]; list(,$W637,$S637,$U637) = $x638;
$x639 = JS::toPrimitive($_start, $global);
$x640 = JS::toPrimitive($_length, $global);
if (!(is_object($x637) && isset($x637->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x643 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 218, 19, '<image>/05_string.js');
$_TypeError =& $x643[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x643;
$x644 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x645 = $x644($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x645->class) && $x645->class === 'Error') {$x645->properties['file'] = '<image>/05_string.js';$x645->properties['line'] = 218;$x645->properties['column'] = 19;$x645->attributes['file'] = $x645->attributes['line'] = $x645->attributes['column'] = 0; }
throw new JSException($x645, 218, 19, '<image>/05_string.js');
}
$x641 = $x637->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x642 = $x641($global, $x633, $x637, array((is_string($x639) || is_string($x640) ? JS::toString($x639, $global) . JS::toString($x640, $global) : JS::toNumber($x639, $global) + JS::toNumber($x640, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x642;;
};
$x646 = JS::toPrimitive($_end, $global);
$x647 = JS::toPrimitive(0, $global);
$x648 = (is_string($x646) && is_string($x647) ? strcmp($x646, $x647) < 0 : (!is_nan($x649 = JS::toNumber($x646, $global)) && !is_nan($x650 = JS::toNumber($x647, $global)) && $x649 < $x650));
if (JS::toBoolean($x648, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x651 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Math', 222, 9, '<image>/05_string.js');
$_Math =& $x651[0]; list(,$WMath,$SMath,$UMath) = $x651;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x652 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 222, 9, '<image>/05_string.js');
$_ReferenceError =& $x652[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x652;
$x653 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 9);
$x654 = $x653($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x654->class) && $x654->class === 'Error') {$x654->properties['file'] = '<image>/05_string.js';$x654->properties['line'] = 222;$x654->properties['column'] = 9;$x654->attributes['file'] = $x654->attributes['line'] = $x654->attributes['column'] = 0; }
throw new JSException($x654, 222, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x656 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 222, 17, '<image>/05_string.js');
$_TypeError =& $x656[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x656;
$x657 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x658 = $x657($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x658->class) && $x658->class === 'Error') {$x658->properties['file'] = '<image>/05_string.js';$x658->properties['line'] = 222;$x658->properties['column'] = 17;$x658->attributes['file'] = $x658->attributes['line'] = $x658->attributes['column'] = 0; }
throw new JSException($x658, 222, 17, '<image>/05_string.js');
}
$x655 = JS::toObject($_Math, $global);
unset($x659, $W659, $S659, $U659);
$x660 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x655, (string) 'max', 222, 17, '<image>/05_string.js');
$x659 =& $x660[0]; list(,$W659,$S659,$U659) = $x660;
$x661 = JS::toPrimitive($_end, $global);
$x662 = JS::toPrimitive($_length, $global);
if (!(is_object($x659) && isset($x659->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x665 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 222, 17, '<image>/05_string.js');
$_TypeError =& $x665[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x665;
$x666 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x667 = $x666($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x667->class) && $x667->class === 'Error') {$x667->properties['file'] = '<image>/05_string.js';$x667->properties['line'] = 222;$x667->properties['column'] = 17;$x667->attributes['file'] = $x667->attributes['line'] = $x667->attributes['column'] = 0; }
throw new JSException($x667, 222, 17, '<image>/05_string.js');
}
$x663 = $x659->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x664 = $x663($global, $x655, $x659, array((is_string($x661) || is_string($x662) ? JS::toString($x661, $global) . JS::toString($x662, $global) : JS::toNumber($x661, $global) + JS::toNumber($x662, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x664;;
};
return (string) substr($leThis->value,$_start, max($_end-$_start, 0));
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x621=&$scope->properties[\'arguments\'];$x621->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x621->properties[$i]=$args[$i];$x621->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x622=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x622,$global)){if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=0;}$x623=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x623,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x624=JS::toPrimitive($_start,$global);$x625=JS::toPrimitive(0,$global);$x626=(is_string($x624)&&is_string($x625)?strcmp($x624,$x625)<0:(!is_nan($x627=JS::toNumber($x624,$global))&&!is_nan($x628=JS::toNumber($x625,$global))&&$x627<$x628));if(JS::toBoolean($x626,$global)){unset($_Math,$WMath,$SMath,$UMath);$x629=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Math\',218,11,\'<image>/05_string.js\');$_Math=&$x629[0];list(,$WMath,$SMath,$UMath)=$x629;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x630=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',218,11,\'<image>/05_string.js\');$_ReferenceError=&$x630[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x630;$x631=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,11);$x632=$x631($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x632->class)&&$x632->class===\'Error\'){$x632->properties[\'file\']=\'<image>/05_string.js\';$x632->properties[\'line\']=218;$x632->properties[\'column\']=11;$x632->attributes[\'file\']=$x632->attributes[\'line\']=$x632->attributes[\'column\']=0;}throw new JSException($x632,218,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x634=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',218,19,\'<image>/05_string.js\');$_TypeError=&$x634[0];list(,$WTypeError,$STypeError,$UTypeError)=$x634;$x635=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x636=$x635($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x636->class)&&$x636->class===\'Error\'){$x636->properties[\'file\']=\'<image>/05_string.js\';$x636->properties[\'line\']=218;$x636->properties[\'column\']=19;$x636->attributes[\'file\']=$x636->attributes[\'line\']=$x636->attributes[\'column\']=0;}throw new JSException($x636,218,19,\'<image>/05_string.js\');}$x633=JS::toObject($_Math,$global);unset($x637,$W637,$S637,$U637);$x638=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x633,(string)\'max\',218,19,\'<image>/05_string.js\');$x637=&$x638[0];list(,$W637,$S637,$U637)=$x638;$x639=JS::toPrimitive($_start,$global);$x640=JS::toPrimitive($_length,$global);if(!(is_object($x637)&&isset($x637->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x643=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',218,19,\'<image>/05_string.js\');$_TypeError=&$x643[0];list(,$WTypeError,$STypeError,$UTypeError)=$x643;$x644=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x645=$x644($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x645->class)&&$x645->class===\'Error\'){$x645->properties[\'file\']=\'<image>/05_string.js\';$x645->properties[\'line\']=218;$x645->properties[\'column\']=19;$x645->attributes[\'file\']=$x645->attributes[\'line\']=$x645->attributes[\'column\']=0;}throw new JSException($x645,218,19,\'<image>/05_string.js\');}$x641=$x637->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x642=$x641($global,$x633,$x637,array((is_string($x639)||is_string($x640)?JS::toString($x639,$global).JS::toString($x640,$global):JS::toNumber($x639,$global)+JS::toNumber($x640,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x642;}$x646=JS::toPrimitive($_end,$global);$x647=JS::toPrimitive(0,$global);$x648=(is_string($x646)&&is_string($x647)?strcmp($x646,$x647)<0:(!is_nan($x649=JS::toNumber($x646,$global))&&!is_nan($x650=JS::toNumber($x647,$global))&&$x649<$x650));if(JS::toBoolean($x648,$global)){unset($_Math,$WMath,$SMath,$UMath);$x651=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Math\',222,9,\'<image>/05_string.js\');$_Math=&$x651[0];list(,$WMath,$SMath,$UMath)=$x651;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x652=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',222,9,\'<image>/05_string.js\');$_ReferenceError=&$x652[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x652;$x653=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,9);$x654=$x653($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x654->class)&&$x654->class===\'Error\'){$x654->properties[\'file\']=\'<image>/05_string.js\';$x654->properties[\'line\']=222;$x654->properties[\'column\']=9;$x654->attributes[\'file\']=$x654->attributes[\'line\']=$x654->attributes[\'column\']=0;}throw new JSException($x654,222,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x656=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',222,17,\'<image>/05_string.js\');$_TypeError=&$x656[0];list(,$WTypeError,$STypeError,$UTypeError)=$x656;$x657=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x658=$x657($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x658->class)&&$x658->class===\'Error\'){$x658->properties[\'file\']=\'<image>/05_string.js\';$x658->properties[\'line\']=222;$x658->properties[\'column\']=17;$x658->attributes[\'file\']=$x658->attributes[\'line\']=$x658->attributes[\'column\']=0;}throw new JSException($x658,222,17,\'<image>/05_string.js\');}$x655=JS::toObject($_Math,$global);unset($x659,$W659,$S659,$U659);$x660=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x655,(string)\'max\',222,17,\'<image>/05_string.js\');$x659=&$x660[0];list(,$W659,$S659,$U659)=$x660;$x661=JS::toPrimitive($_end,$global);$x662=JS::toPrimitive($_length,$global);if(!(is_object($x659)&&isset($x659->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x665=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',222,17,\'<image>/05_string.js\');$_TypeError=&$x665[0];list(,$WTypeError,$STypeError,$UTypeError)=$x665;$x666=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x667=$x666($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x667->class)&&$x667->class===\'Error\'){$x667->properties[\'file\']=\'<image>/05_string.js\';$x667->properties[\'line\']=222;$x667->properties[\'column\']=17;$x667->attributes[\'file\']=$x667->attributes[\'line\']=$x667->attributes[\'column\']=0;}throw new JSException($x667,222,17,\'<image>/05_string.js\');}$x663=$x659->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x664=$x663($global,$x655,$x659,array((is_string($x661)||is_string($x662)?JS::toString($x661,$global).JS::toString($x662,$global):JS::toNumber($x661,$global)+JS::toNumber($x662,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x664;}return(string)substr($leThis->value,$_start,max($_end-$_start,0));return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x680 =& $scope->properties['arguments'];
$x680->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x680->properties[$i] = $args[$i];
$x680->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$scope->properties['limit'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_limit =& $scope->properties['limit'];
$Ulimit = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x681 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x681, $global)) {
$x682 = clone JS::$arrayTemplate;
$x682->properties['length'] = 1;
$x682->attributes['length'] = JS::WRITABLE;
$x682->properties[0] = $leThis->value;
$x682->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x682;;
};
$x683 = (((gettype($_separator) === gettype('') && $_separator === ''))|| (((is_float($_separator) || is_int($_separator)) && (is_float('') || is_int(''))) && $_separator == ''));
if (JS::toBoolean($x683, $global)) {
$x684 = clone JS::$arrayTemplate;
$x684->properties['length'] = 0;
$x684->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x684;
for ($x685 = 0;; ++$x685) {
if ($x685 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x686, $W686, $S686, $U686);
$x687 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $leThis, (string) 'length', 236, 27, '<image>/05_string.js');
$x686 =& $x687[0]; list(,$W686,$S686,$U686) = $x687;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x686;
}
if ($x685 !== 0) {
$x688 = ++$_i;
}
$x689 = JS::toPrimitive($_i, $global);
$x690 = JS::toPrimitive($_l, $global);
$x691 = (is_string($x689) && is_string($x690) ? strcmp($x689, $x690) < 0 : (!is_nan($x692 = JS::toNumber($x689, $global)) && !is_nan($x693 = JS::toNumber($x690, $global)) && $x692 < $x693));
if (!JS::toBoolean($x691, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x695 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 237, 20, '<image>/05_string.js');
$_TypeError =& $x695[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x695;
$x696 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x697 = $x696($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x697->class) && $x697->class === 'Error') {$x697->properties['file'] = '<image>/05_string.js';$x697->properties['line'] = 237;$x697->properties['column'] = 20;$x697->attributes['file'] = $x697->attributes['line'] = $x697->attributes['column'] = 0; }
throw new JSException($x697, 237, 20, '<image>/05_string.js');
}
$x694 = JS::toObject($_returnArray, $global);
unset($x698, $W698, $S698, $U698);
$x699 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x694, (string) 'push', 237, 20, '<image>/05_string.js');
$x698 =& $x699[0]; list(,$W698,$S698,$U698) = $x699;
if (!(is_object($x698) && isset($x698->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x702 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 237, 20, '<image>/05_string.js');
$_TypeError =& $x702[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x702;
$x703 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x704 = $x703($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x704->class) && $x704->class === 'Error') {$x704->properties['file'] = '<image>/05_string.js';$x704->properties['line'] = 237;$x704->properties['column'] = 20;$x704->attributes['file'] = $x704->attributes['line'] = $x704->attributes['column'] = 0; }
throw new JSException($x704, 237, 20, '<image>/05_string.js');
}
$x700 = $x698->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x701 = $x700($global, $x694, $x698, array((string) substr($leThis->value,$_i, 1)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;;
};
$x706 = $_separator;
$x706 = ($x706 === JS::$undefined ? 'undefined' : (is_int($x706) || is_float($x706) ? 'number' : (is_bool($x706) ? 'boolean' : (is_string($x706) ? 'string' : (is_object($x706) && isset($x706->call) ? 'function' : 'object')))));
$x705 = (((gettype($x706) === gettype('string') && $x706 === 'string'))|| (((is_float($x706) || is_int($x706)) && (is_float('string') || is_int('string'))) && $x706 == 'string'));
if (JS::toBoolean($x705, $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x709 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'RegExp', 244, 19, '<image>/05_string.js');
$_RegExp =& $x709[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x709;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x710 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 244, 19, '<image>/05_string.js');
$_ReferenceError =& $x710[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x710;
$x711 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 19);
$x712 = $x711($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x712->class) && $x712->class === 'Error') {$x712->properties['file'] = '<image>/05_string.js';$x712->properties['line'] = 244;$x712->properties['column'] = 19;$x712->attributes['file'] = $x712->attributes['line'] = $x712->attributes['column'] = 0; }
throw new JSException($x712, 244, 19, '<image>/05_string.js');
}
$x707 = clone JS::$objectTemplate;
unset($x713, $W713, $S713, $U713);
$x714 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_RegExp, (string) 'prototype', 244, 15, '<image>/05_string.js');
$x713 =& $x714[0]; list(,$W713,$S713,$U713) = $x714;
$x708 = $x713;
$x707->prototype = $x708;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x717 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 244, 15, '<image>/05_string.js');
$_TypeError =& $x717[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x717;
$x718 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x719 = $x718($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x719->class) && $x719->class === 'Error') {$x719->properties['file'] = '<image>/05_string.js';$x719->properties['line'] = 244;$x719->properties['column'] = 15;$x719->attributes['file'] = $x719->attributes['line'] = $x719->attributes['column'] = 0; }
throw new JSException($x719, 244, 15, '<image>/05_string.js');
}
$x715 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x716 = $x715($global, $x707, $_RegExp, array(preg_quote(JS::toString($_separator, $global), '/'), 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x708 = $x716;
if (is_object($x708) && $x708 !== JS::$undefined) { $x707 = $x708; }
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x707;;
};
$x720 = clone JS::$arrayTemplate;
$x720->properties['length'] = 0;
$x720->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x720;
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
unset($x721, $W721, $S721, $U721);
$x722 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_separator, (string) 'lastIndex', 248, 29, '<image>/05_string.js');
$x721 =& $x722[0]; list(,$W721,$S721,$U721) = $x722;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x721;
unset($x723, $W723, $S723, $U723);
$x724 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_separator, (string) 'global', 248, 64, '<image>/05_string.js');
$x723 =& $x724[0]; list(,$W723,$S723,$U723) = $x724;
$scope->properties['savedGlobal'] = JS::$undefined; $_savedGlobal =& $scope->properties['savedGlobal'];
$UsavedGlobal = FALSE;
$_savedGlobal = $x723;
$_separator->properties['global'] = TRUE;
$x725 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x725, $global)) {
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x726 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Infinity', 253, 11, '<image>/05_string.js');
$_Infinity =& $x726[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x726;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x727 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 253, 11, '<image>/05_string.js');
$_ReferenceError =& $x727[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x727;
$x728 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 253, 11);
$x729 = $x728($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x729->class) && $x729->class === 'Error') {$x729->properties['file'] = '<image>/05_string.js';$x729->properties['line'] = 253;$x729->properties['column'] = 11;$x729->attributes['file'] = $x729->attributes['line'] = $x729->attributes['column'] = 0; }
throw new JSException($x729, 253, 11, '<image>/05_string.js');
}
if ($Ulimit) {$global->properties['limit'] = $_limit; $_limit =& $global->properties['limit']; }
$_limit = $_Infinity;;
};
for (;;) {
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x733 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 256, 32, '<image>/05_string.js');
$_TypeError =& $x733[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x733;
$x734 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x735 = $x734($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x735->class) && $x735->class === 'Error') {$x735->properties['file'] = '<image>/05_string.js';$x735->properties['line'] = 256;$x735->properties['column'] = 32;$x735->attributes['file'] = $x735->attributes['line'] = $x735->attributes['column'] = 0; }
throw new JSException($x735, 256, 32, '<image>/05_string.js');
}
$x732 = JS::toObject($_separator, $global);
unset($x736, $W736, $S736, $U736);
$x737 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x732, (string) 'exec', 256, 32, '<image>/05_string.js');
$x736 =& $x737[0]; list(,$W736,$S736,$U736) = $x737;
if (!(is_object($x736) && isset($x736->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x740 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 256, 32, '<image>/05_string.js');
$_TypeError =& $x740[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x740;
$x741 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x742 = $x741($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x742->class) && $x742->class === 'Error') {$x742->properties['file'] = '<image>/05_string.js';$x742->properties['line'] = 256;$x742->properties['column'] = 32;$x742->attributes['file'] = $x742->attributes['line'] = $x742->attributes['column'] = 0; }
throw new JSException($x742, 256, 32, '<image>/05_string.js');
}
$x738 = $x736->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x739 = $x738($global, $x732, $x736, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x739;
$x731 = $_match;
if (JS::toBoolean($x731, $global)) {
$x746 = --$_limit;
$x743 = JS::toPrimitive($x746, $global);
$x744 = JS::toPrimitive(0, $global);
$x745 = (is_string($x744) && is_string($x743) ? strcmp($x744, $x743) < 0 : (!is_nan($x747 = JS::toNumber($x744, $global)) && !is_nan($x748 = JS::toNumber($x743, $global)) && $x747 < $x748));
$x731 = $x745; }
$x730 = $x731;
if (JS::toBoolean($x730, $global)) {
unset($x752, $W752, $S752, $U752);
$x753 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $leThis, (string) 'length', 256, 80, '<image>/05_string.js');
$x752 =& $x753[0]; list(,$W752,$S752,$U752) = $x753;
$x749 = JS::toPrimitive($_lastIndex, $global);
$x750 = JS::toPrimitive($x752, $global);
$x751 = (is_string($x749) && is_string($x750) ? strcmp($x749, $x750) < 0 : (!is_nan($x754 = JS::toNumber($x749, $global)) && !is_nan($x755 = JS::toNumber($x750, $global)) && $x754 < $x755));
$x730 = $x751; }
if (!JS::toBoolean($x730, $global)) { break; }

unset($x758, $W758, $S758, $U758);
$x759 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 0, 257, 12, '<image>/05_string.js');
$x758 =& $x759[0]; list(,$W758,$S758,$U758) = $x759;
$x757 = (((gettype($x758) === gettype('') && $x758 === ''))|| (((is_float($x758) || is_int($x758)) && (is_float('') || is_int(''))) && $x758 == ''));
$x756 = $x757;
if (JS::toBoolean($x756, $global)) {
unset($x761, $W761, $S761, $U761);
$x762 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'index', 257, 31, '<image>/05_string.js');
$x761 =& $x762[0]; list(,$W761,$S761,$U761) = $x762;
$x760 = (((gettype($x761) === gettype($_lastIndex) && $x761 === $_lastIndex))|| (((is_float($x761) || is_int($x761)) && (is_float($_lastIndex) || is_int($_lastIndex))) && $x761 == $_lastIndex));
$x756 = $x760; }
if (JS::toBoolean($x756, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x764 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 258, 20, '<image>/05_string.js');
$_TypeError =& $x764[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x764;
$x765 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x766 = $x765($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x766->class) && $x766->class === 'Error') {$x766->properties['file'] = '<image>/05_string.js';$x766->properties['line'] = 258;$x766->properties['column'] = 20;$x766->attributes['file'] = $x766->attributes['line'] = $x766->attributes['column'] = 0; }
throw new JSException($x766, 258, 20, '<image>/05_string.js');
}
$x763 = JS::toObject($_returnArray, $global);
unset($x767, $W767, $S767, $U767);
$x768 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x763, (string) 'push', 258, 20, '<image>/05_string.js');
$x767 =& $x768[0]; list(,$W767,$S767,$U767) = $x768;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x770 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 258, 35, '<image>/05_string.js');
$_TypeError =& $x770[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x770;
$x771 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x772 = $x771($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x772->class) && $x772->class === 'Error') {$x772->properties['file'] = '<image>/05_string.js';$x772->properties['line'] = 258;$x772->properties['column'] = 35;$x772->attributes['file'] = $x772->attributes['line'] = $x772->attributes['column'] = 0; }
throw new JSException($x772, 258, 35, '<image>/05_string.js');
}
$x769 = JS::toObject($leThis, $global);
unset($x773, $W773, $S773, $U773);
$x774 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x769, (string) 'substring', 258, 35, '<image>/05_string.js');
$x773 =& $x774[0]; list(,$W773,$S773,$U773) = $x774;
$x775 = JS::toPrimitive($_lastIndex, $global);
$x776 = JS::toPrimitive(1, $global);
if (!(is_object($x773) && isset($x773->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x779 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 258, 35, '<image>/05_string.js');
$_TypeError =& $x779[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x779;
$x780 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x781 = $x780($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x781->class) && $x781->class === 'Error') {$x781->properties['file'] = '<image>/05_string.js';$x781->properties['line'] = 258;$x781->properties['column'] = 35;$x781->attributes['file'] = $x781->attributes['line'] = $x781->attributes['column'] = 0; }
throw new JSException($x781, 258, 35, '<image>/05_string.js');
}
$x777 = $x773->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x778 = $x777($global, $x769, $x773, array($_lastIndex, (is_string($x775) || is_string($x776) ? JS::toString($x775, $global) . JS::toString($x776, $global) : JS::toNumber($x775, $global) + JS::toNumber($x776, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x767) && isset($x767->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x784 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 258, 20, '<image>/05_string.js');
$_TypeError =& $x784[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x784;
$x785 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x786 = $x785($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x786->class) && $x786->class === 'Error') {$x786->properties['file'] = '<image>/05_string.js';$x786->properties['line'] = 258;$x786->properties['column'] = 20;$x786->attributes['file'] = $x786->attributes['line'] = $x786->attributes['column'] = 0; }
throw new JSException($x786, 258, 20, '<image>/05_string.js');
}
$x782 = $x767->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x783 = $x782($global, $x763, $x767, array($x778), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x787 = ++$_lastIndex;
unset($x788, $W788, $S788, $U788);
$x789 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_separator, (string) 'lastIndex', 260, 15, '<image>/05_string.js');
$x788 =& $x789[0]; list(,$W788,$S788,$U788) = $x789;
$x790 = ++$x788;;
}
else {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x792 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 263, 20, '<image>/05_string.js');
$_TypeError =& $x792[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x792;
$x793 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x794 = $x793($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x794->class) && $x794->class === 'Error') {$x794->properties['file'] = '<image>/05_string.js';$x794->properties['line'] = 263;$x794->properties['column'] = 20;$x794->attributes['file'] = $x794->attributes['line'] = $x794->attributes['column'] = 0; }
throw new JSException($x794, 263, 20, '<image>/05_string.js');
}
$x791 = JS::toObject($_returnArray, $global);
unset($x795, $W795, $S795, $U795);
$x796 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x791, (string) 'push', 263, 20, '<image>/05_string.js');
$x795 =& $x796[0]; list(,$W795,$S795,$U795) = $x796;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x798 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 263, 35, '<image>/05_string.js');
$_TypeError =& $x798[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x798;
$x799 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x800 = $x799($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x800->class) && $x800->class === 'Error') {$x800->properties['file'] = '<image>/05_string.js';$x800->properties['line'] = 263;$x800->properties['column'] = 35;$x800->attributes['file'] = $x800->attributes['line'] = $x800->attributes['column'] = 0; }
throw new JSException($x800, 263, 35, '<image>/05_string.js');
}
$x797 = JS::toObject($leThis, $global);
unset($x801, $W801, $S801, $U801);
$x802 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x797, (string) 'substring', 263, 35, '<image>/05_string.js');
$x801 =& $x802[0]; list(,$W801,$S801,$U801) = $x802;
unset($x803, $W803, $S803, $U803);
$x804 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'index', 263, 52, '<image>/05_string.js');
$x803 =& $x804[0]; list(,$W803,$S803,$U803) = $x804;
if (!(is_object($x801) && isset($x801->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x807 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 263, 35, '<image>/05_string.js');
$_TypeError =& $x807[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x807;
$x808 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x809 = $x808($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x809->class) && $x809->class === 'Error') {$x809->properties['file'] = '<image>/05_string.js';$x809->properties['line'] = 263;$x809->properties['column'] = 35;$x809->attributes['file'] = $x809->attributes['line'] = $x809->attributes['column'] = 0; }
throw new JSException($x809, 263, 35, '<image>/05_string.js');
}
$x805 = $x801->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x806 = $x805($global, $x797, $x801, array($_lastIndex, $x803), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x795) && isset($x795->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x812 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 263, 20, '<image>/05_string.js');
$_TypeError =& $x812[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x812;
$x813 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x814 = $x813($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x814->class) && $x814->class === 'Error') {$x814->properties['file'] = '<image>/05_string.js';$x814->properties['line'] = 263;$x814->properties['column'] = 20;$x814->attributes['file'] = $x814->attributes['line'] = $x814->attributes['column'] = 0; }
throw new JSException($x814, 263, 20, '<image>/05_string.js');
}
$x810 = $x795->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x811 = $x810($global, $x791, $x795, array($x806), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
for ($x815 = 0;; ++$x815) {
if ($x815 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x816, $W816, $S816, $U816);
$x817 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'length', 265, 29, '<image>/05_string.js');
$x816 =& $x817[0]; list(,$W816,$S816,$U816) = $x817;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x816;
}
if ($x815 !== 0) {
$x818 = ++$_i;
}
$x819 = JS::toPrimitive($_i, $global);
$x820 = JS::toPrimitive($_l, $global);
$x821 = (is_string($x819) && is_string($x820) ? strcmp($x819, $x820) < 0 : (!is_nan($x822 = JS::toNumber($x819, $global)) && !is_nan($x823 = JS::toNumber($x820, $global)) && $x822 < $x823));
if (!JS::toBoolean($x821, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x825 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 266, 21, '<image>/05_string.js');
$_TypeError =& $x825[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x825;
$x826 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x827 = $x826($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x827->class) && $x827->class === 'Error') {$x827->properties['file'] = '<image>/05_string.js';$x827->properties['line'] = 266;$x827->properties['column'] = 21;$x827->attributes['file'] = $x827->attributes['line'] = $x827->attributes['column'] = 0; }
throw new JSException($x827, 266, 21, '<image>/05_string.js');
}
$x824 = JS::toObject($_returnArray, $global);
unset($x828, $W828, $S828, $U828);
$x829 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x824, (string) 'push', 266, 21, '<image>/05_string.js');
$x828 =& $x829[0]; list(,$W828,$S828,$U828) = $x829;
unset($x830, $W830, $S830, $U830);
$x831 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) $_i, 266, 27, '<image>/05_string.js');
$x830 =& $x831[0]; list(,$W830,$S830,$U830) = $x831;
if (!(is_object($x828) && isset($x828->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x834 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 266, 21, '<image>/05_string.js');
$_TypeError =& $x834[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x834;
$x835 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x836 = $x835($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x836->class) && $x836->class === 'Error') {$x836->properties['file'] = '<image>/05_string.js';$x836->properties['line'] = 266;$x836->properties['column'] = 21;$x836->attributes['file'] = $x836->attributes['line'] = $x836->attributes['column'] = 0; }
throw new JSException($x836, 266, 21, '<image>/05_string.js');
}
$x832 = $x828->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x833 = $x832($global, $x824, $x828, array($x830), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x839, $W839, $S839, $U839);
$x840 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 'index', 269, 21, '<image>/05_string.js');
$x839 =& $x840[0]; list(,$W839,$S839,$U839) = $x840;
unset($x841, $W841, $S841, $U841);
$x842 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_match, (string) 0, 269, 35, '<image>/05_string.js');
$x841 =& $x842[0]; list(,$W841,$S841,$U841) = $x842;
unset($x843, $W843, $S843, $U843);
$x844 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x841, (string) 'length', 269, 38, '<image>/05_string.js');
$x843 =& $x844[0]; list(,$W843,$S843,$U843) = $x844;
$x837 = JS::toPrimitive($x839, $global);
$x838 = JS::toPrimitive($x843, $global);
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = (is_string($x837) || is_string($x838) ? JS::toString($x837, $global) . JS::toString($x838, $global) : JS::toNumber($x837, $global) + JS::toNumber($x838, $global));;
};
};
unset($x848, $W848, $S848, $U848);
$x849 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $leThis, (string) 'length', 273, 22, '<image>/05_string.js');
$x848 =& $x849[0]; list(,$W848,$S848,$U848) = $x849;
$x845 = JS::toPrimitive($_lastIndex, $global);
$x846 = JS::toPrimitive($x848, $global);
$x847 = (is_string($x845) && is_string($x846) ? strcmp($x845, $x846) < 0 : (!is_nan($x850 = JS::toNumber($x845, $global)) && !is_nan($x851 = JS::toNumber($x846, $global)) && $x850 < $x851));
if (JS::toBoolean($x847, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x853 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 274, 19, '<image>/05_string.js');
$_TypeError =& $x853[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x853;
$x854 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x855 = $x854($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x855->class) && $x855->class === 'Error') {$x855->properties['file'] = '<image>/05_string.js';$x855->properties['line'] = 274;$x855->properties['column'] = 19;$x855->attributes['file'] = $x855->attributes['line'] = $x855->attributes['column'] = 0; }
throw new JSException($x855, 274, 19, '<image>/05_string.js');
}
$x852 = JS::toObject($_returnArray, $global);
unset($x856, $W856, $S856, $U856);
$x857 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x852, (string) 'push', 274, 19, '<image>/05_string.js');
$x856 =& $x857[0]; list(,$W856,$S856,$U856) = $x857;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x859 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 274, 34, '<image>/05_string.js');
$_TypeError =& $x859[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x859;
$x860 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x861 = $x860($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x861->class) && $x861->class === 'Error') {$x861->properties['file'] = '<image>/05_string.js';$x861->properties['line'] = 274;$x861->properties['column'] = 34;$x861->attributes['file'] = $x861->attributes['line'] = $x861->attributes['column'] = 0; }
throw new JSException($x861, 274, 34, '<image>/05_string.js');
}
$x858 = JS::toObject($leThis, $global);
unset($x862, $W862, $S862, $U862);
$x863 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x858, (string) 'substring', 274, 34, '<image>/05_string.js');
$x862 =& $x863[0]; list(,$W862,$S862,$U862) = $x863;
unset($x864, $W864, $S864, $U864);
$x865 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $leThis, (string) 'length', 274, 50, '<image>/05_string.js');
$x864 =& $x865[0]; list(,$W864,$S864,$U864) = $x865;
if (!(is_object($x862) && isset($x862->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x868 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 274, 34, '<image>/05_string.js');
$_TypeError =& $x868[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x868;
$x869 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x870 = $x869($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x870->class) && $x870->class === 'Error') {$x870->properties['file'] = '<image>/05_string.js';$x870->properties['line'] = 274;$x870->properties['column'] = 34;$x870->attributes['file'] = $x870->attributes['line'] = $x870->attributes['column'] = 0; }
throw new JSException($x870, 274, 34, '<image>/05_string.js');
}
$x866 = $x862->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x867 = $x866($global, $x858, $x862, array($_lastIndex, $x864), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x856) && isset($x856->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x873 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 274, 19, '<image>/05_string.js');
$_TypeError =& $x873[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x873;
$x874 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x875 = $x874($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x875->class) && $x875->class === 'Error') {$x875->properties['file'] = '<image>/05_string.js';$x875->properties['line'] = 274;$x875->properties['column'] = 19;$x875->attributes['file'] = $x875->attributes['line'] = $x875->attributes['column'] = 0; }
throw new JSException($x875, 274, 19, '<image>/05_string.js');
}
$x871 = $x856->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x872 = $x871($global, $x852, $x856, array($x867), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
$_separator->properties['global'] =$_savedGlobal;
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x876 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 278, 22, '<image>/05_string.js');
$_TypeError =& $x876[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x876;
$x877 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x878 = $x877($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x878->class) && $x878->class === 'Error') {$x878->properties['file'] = '<image>/05_string.js';$x878->properties['line'] = 278;$x878->properties['column'] = 22;$x878->attributes['file'] = $x878->attributes['line'] = $x878->attributes['column'] = 0; }
throw new JSException($x878, 278, 22, '<image>/05_string.js');
}
$_separator = JS::toObject($_separator, $global);
unset($x879, $W879, $S879, $U879);
$x880 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $_separator, (string) 'lastIndex', 278, 22, '<image>/05_string.js');
$x879 =& $x880[0]; list(,$W879,$S879,$U879) = $x880;
if ($U879 && (!isset($_separator->extensible) || $_separator->extensible)) {$_separator->properties['lastIndex'] = $x879; $x879 =& $_separator->properties['lastIndex']; $_separator->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U879 = FALSE; $W879 = TRUE; }
if (isset($S879)) {
$x882 = $S879->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x883 = $x882($global, $_separator, $S879, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x881 = $x883;
} else {
if (!$U879) {$x881 = $_savedLastIndex;if ($W879) { $x879 = $_savedLastIndex; }  }
else { $x881 = JS::$undefined; }
}
if (isset($_separator->class) && $_separator->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_separator->properties['length']) { $_separator->properties['length'] = 'lastIndex' + 1; };
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x680=&$scope->properties[\'arguments\'];$x680->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x680->properties[$i]=$args[$i];$x680->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$scope->properties[\'limit\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_limit=&$scope->properties[\'limit\'];$Ulimit=FALSE;$global->scope[++$global->scope_sp]=$scope;$x681=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x681,$global)){$x682=clone JS::$arrayTemplate;$x682->properties[\'length\']=1;$x682->attributes[\'length\']=JS::WRITABLE;$x682->properties[0]=$leThis->value;$x682->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x682;}$x683=(((gettype($_separator)===gettype(\'\')&&$_separator===\'\'))||(((is_float($_separator)||is_int($_separator))&&(is_float(\'\')||is_int(\'\')))&&$_separator==\'\'));if(JS::toBoolean($x683,$global)){$x684=clone JS::$arrayTemplate;$x684->properties[\'length\']=0;$x684->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x684;for($x685=0;;++$x685){if($x685===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x686,$W686,$S686,$U686);$x687=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$leThis,(string)\'length\',236,27,\'<image>/05_string.js\');$x686=&$x687[0];list(,$W686,$S686,$U686)=$x687;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x686;}if($x685!==0){$x688=++$_i;}$x689=JS::toPrimitive($_i,$global);$x690=JS::toPrimitive($_l,$global);$x691=(is_string($x689)&&is_string($x690)?strcmp($x689,$x690)<0:(!is_nan($x692=JS::toNumber($x689,$global))&&!is_nan($x693=JS::toNumber($x690,$global))&&$x692<$x693));if(!JS::toBoolean($x691,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x695=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',237,20,\'<image>/05_string.js\');$_TypeError=&$x695[0];list(,$WTypeError,$STypeError,$UTypeError)=$x695;$x696=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x697=$x696($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x697->class)&&$x697->class===\'Error\'){$x697->properties[\'file\']=\'<image>/05_string.js\';$x697->properties[\'line\']=237;$x697->properties[\'column\']=20;$x697->attributes[\'file\']=$x697->attributes[\'line\']=$x697->attributes[\'column\']=0;}throw new JSException($x697,237,20,\'<image>/05_string.js\');}$x694=JS::toObject($_returnArray,$global);unset($x698,$W698,$S698,$U698);$x699=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x694,(string)\'push\',237,20,\'<image>/05_string.js\');$x698=&$x699[0];list(,$W698,$S698,$U698)=$x699;if(!(is_object($x698)&&isset($x698->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x702=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',237,20,\'<image>/05_string.js\');$_TypeError=&$x702[0];list(,$WTypeError,$STypeError,$UTypeError)=$x702;$x703=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x704=$x703($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x704->class)&&$x704->class===\'Error\'){$x704->properties[\'file\']=\'<image>/05_string.js\';$x704->properties[\'line\']=237;$x704->properties[\'column\']=20;$x704->attributes[\'file\']=$x704->attributes[\'line\']=$x704->attributes[\'column\']=0;}throw new JSException($x704,237,20,\'<image>/05_string.js\');}$x700=$x698->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x701=$x700($global,$x694,$x698,array((string)substr($leThis->value,$_i,1)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;}$x706=$_separator;$x706=($x706===JS::$undefined?\'undefined\':(is_int($x706)||is_float($x706)?\'number\':(is_bool($x706)?\'boolean\':(is_string($x706)?\'string\':(is_object($x706)&&isset($x706->call)?\'function\':\'object\')))));$x705=(((gettype($x706)===gettype(\'string\')&&$x706===\'string\'))||(((is_float($x706)||is_int($x706))&&(is_float(\'string\')||is_int(\'string\')))&&$x706==\'string\'));if(JS::toBoolean($x705,$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x709=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'RegExp\',244,19,\'<image>/05_string.js\');$_RegExp=&$x709[0];list(,$WRegExp,$SRegExp,$URegExp)=$x709;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x710=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',244,19,\'<image>/05_string.js\');$_ReferenceError=&$x710[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x710;$x711=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,19);$x712=$x711($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x712->class)&&$x712->class===\'Error\'){$x712->properties[\'file\']=\'<image>/05_string.js\';$x712->properties[\'line\']=244;$x712->properties[\'column\']=19;$x712->attributes[\'file\']=$x712->attributes[\'line\']=$x712->attributes[\'column\']=0;}throw new JSException($x712,244,19,\'<image>/05_string.js\');}$x707=clone JS::$objectTemplate;unset($x713,$W713,$S713,$U713);$x714=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_RegExp,(string)\'prototype\',244,15,\'<image>/05_string.js\');$x713=&$x714[0];list(,$W713,$S713,$U713)=$x714;$x708=$x713;$x707->prototype=$x708;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x717=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',244,15,\'<image>/05_string.js\');$_TypeError=&$x717[0];list(,$WTypeError,$STypeError,$UTypeError)=$x717;$x718=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x719=$x718($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x719->class)&&$x719->class===\'Error\'){$x719->properties[\'file\']=\'<image>/05_string.js\';$x719->properties[\'line\']=244;$x719->properties[\'column\']=15;$x719->attributes[\'file\']=$x719->attributes[\'line\']=$x719->attributes[\'column\']=0;}throw new JSException($x719,244,15,\'<image>/05_string.js\');}$x715=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x716=$x715($global,$x707,$_RegExp,array(preg_quote(JS::toString($_separator,$global),\'/\'),\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x708=$x716;if(is_object($x708)&&$x708!==JS::$undefined){$x707=$x708;}if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x707;}$x720=clone JS::$arrayTemplate;$x720->properties[\'length\']=0;$x720->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x720;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;unset($x721,$W721,$S721,$U721);$x722=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_separator,(string)\'lastIndex\',248,29,\'<image>/05_string.js\');$x721=&$x722[0];list(,$W721,$S721,$U721)=$x722;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x721;unset($x723,$W723,$S723,$U723);$x724=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_separator,(string)\'global\',248,64,\'<image>/05_string.js\');$x723=&$x724[0];list(,$W723,$S723,$U723)=$x724;$scope->properties[\'savedGlobal\']=JS::$undefined;$_savedGlobal=&$scope->properties[\'savedGlobal\'];$UsavedGlobal=FALSE;$_savedGlobal=$x723;$_separator->properties[\'global\']=TRUE;$x725=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x725,$global)){unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x726=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Infinity\',253,11,\'<image>/05_string.js\');$_Infinity=&$x726[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x726;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x727=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',253,11,\'<image>/05_string.js\');$_ReferenceError=&$x727[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x727;$x728=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',253,11);$x729=$x728($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x729->class)&&$x729->class===\'Error\'){$x729->properties[\'file\']=\'<image>/05_string.js\';$x729->properties[\'line\']=253;$x729->properties[\'column\']=11;$x729->attributes[\'file\']=$x729->attributes[\'line\']=$x729->attributes[\'column\']=0;}throw new JSException($x729,253,11,\'<image>/05_string.js\');}if($Ulimit){$global->properties[\'limit\']=$_limit;$_limit=&$global->properties[\'limit\'];}$_limit=$_Infinity;}for(;;){if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x733=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',256,32,\'<image>/05_string.js\');$_TypeError=&$x733[0];list(,$WTypeError,$STypeError,$UTypeError)=$x733;$x734=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x735=$x734($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x735->class)&&$x735->class===\'Error\'){$x735->properties[\'file\']=\'<image>/05_string.js\';$x735->properties[\'line\']=256;$x735->properties[\'column\']=32;$x735->attributes[\'file\']=$x735->attributes[\'line\']=$x735->attributes[\'column\']=0;}throw new JSException($x735,256,32,\'<image>/05_string.js\');}$x732=JS::toObject($_separator,$global);unset($x736,$W736,$S736,$U736);$x737=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x732,(string)\'exec\',256,32,\'<image>/05_string.js\');$x736=&$x737[0];list(,$W736,$S736,$U736)=$x737;if(!(is_object($x736)&&isset($x736->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x740=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',256,32,\'<image>/05_string.js\');$_TypeError=&$x740[0];list(,$WTypeError,$STypeError,$UTypeError)=$x740;$x741=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x742=$x741($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x742->class)&&$x742->class===\'Error\'){$x742->properties[\'file\']=\'<image>/05_string.js\';$x742->properties[\'line\']=256;$x742->properties[\'column\']=32;$x742->attributes[\'file\']=$x742->attributes[\'line\']=$x742->attributes[\'column\']=0;}throw new JSException($x742,256,32,\'<image>/05_string.js\');}$x738=$x736->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x739=$x738($global,$x732,$x736,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x739;$x731=$_match;if(JS::toBoolean($x731,$global)){$x746=--$_limit;$x743=JS::toPrimitive($x746,$global);$x744=JS::toPrimitive(0,$global);$x745=(is_string($x744)&&is_string($x743)?strcmp($x744,$x743)<0:(!is_nan($x747=JS::toNumber($x744,$global))&&!is_nan($x748=JS::toNumber($x743,$global))&&$x747<$x748));$x731=$x745;}$x730=$x731;if(JS::toBoolean($x730,$global)){unset($x752,$W752,$S752,$U752);$x753=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$leThis,(string)\'length\',256,80,\'<image>/05_string.js\');$x752=&$x753[0];list(,$W752,$S752,$U752)=$x753;$x749=JS::toPrimitive($_lastIndex,$global);$x750=JS::toPrimitive($x752,$global);$x751=(is_string($x749)&&is_string($x750)?strcmp($x749,$x750)<0:(!is_nan($x754=JS::toNumber($x749,$global))&&!is_nan($x755=JS::toNumber($x750,$global))&&$x754<$x755));$x730=$x751;}if(!JS::toBoolean($x730,$global)){break;}unset($x758,$W758,$S758,$U758);$x759=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)0,257,12,\'<image>/05_string.js\');$x758=&$x759[0];list(,$W758,$S758,$U758)=$x759;$x757=(((gettype($x758)===gettype(\'\')&&$x758===\'\'))||(((is_float($x758)||is_int($x758))&&(is_float(\'\')||is_int(\'\')))&&$x758==\'\'));$x756=$x757;if(JS::toBoolean($x756,$global)){unset($x761,$W761,$S761,$U761);$x762=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'index\',257,31,\'<image>/05_string.js\');$x761=&$x762[0];list(,$W761,$S761,$U761)=$x762;$x760=(((gettype($x761)===gettype($_lastIndex)&&$x761===$_lastIndex))||(((is_float($x761)||is_int($x761))&&(is_float($_lastIndex)||is_int($_lastIndex)))&&$x761==$_lastIndex));$x756=$x760;}if(JS::toBoolean($x756,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x764=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',258,20,\'<image>/05_string.js\');$_TypeError=&$x764[0];list(,$WTypeError,$STypeError,$UTypeError)=$x764;$x765=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x766=$x765($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x766->class)&&$x766->class===\'Error\'){$x766->properties[\'file\']=\'<image>/05_string.js\';$x766->properties[\'line\']=258;$x766->properties[\'column\']=20;$x766->attributes[\'file\']=$x766->attributes[\'line\']=$x766->attributes[\'column\']=0;}throw new JSException($x766,258,20,\'<image>/05_string.js\');}$x763=JS::toObject($_returnArray,$global);unset($x767,$W767,$S767,$U767);$x768=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x763,(string)\'push\',258,20,\'<image>/05_string.js\');$x767=&$x768[0];list(,$W767,$S767,$U767)=$x768;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x770=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',258,35,\'<image>/05_string.js\');$_TypeError=&$x770[0];list(,$WTypeError,$STypeError,$UTypeError)=$x770;$x771=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x772=$x771($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x772->class)&&$x772->class===\'Error\'){$x772->properties[\'file\']=\'<image>/05_string.js\';$x772->properties[\'line\']=258;$x772->properties[\'column\']=35;$x772->attributes[\'file\']=$x772->attributes[\'line\']=$x772->attributes[\'column\']=0;}throw new JSException($x772,258,35,\'<image>/05_string.js\');}$x769=JS::toObject($leThis,$global);unset($x773,$W773,$S773,$U773);$x774=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x769,(string)\'substring\',258,35,\'<image>/05_string.js\');$x773=&$x774[0];list(,$W773,$S773,$U773)=$x774;$x775=JS::toPrimitive($_lastIndex,$global);$x776=JS::toPrimitive(1,$global);if(!(is_object($x773)&&isset($x773->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x779=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',258,35,\'<image>/05_string.js\');$_TypeError=&$x779[0];list(,$WTypeError,$STypeError,$UTypeError)=$x779;$x780=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x781=$x780($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x781->class)&&$x781->class===\'Error\'){$x781->properties[\'file\']=\'<image>/05_string.js\';$x781->properties[\'line\']=258;$x781->properties[\'column\']=35;$x781->attributes[\'file\']=$x781->attributes[\'line\']=$x781->attributes[\'column\']=0;}throw new JSException($x781,258,35,\'<image>/05_string.js\');}$x777=$x773->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x778=$x777($global,$x769,$x773,array($_lastIndex,(is_string($x775)||is_string($x776)?JS::toString($x775,$global).JS::toString($x776,$global):JS::toNumber($x775,$global)+JS::toNumber($x776,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x767)&&isset($x767->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x784=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',258,20,\'<image>/05_string.js\');$_TypeError=&$x784[0];list(,$WTypeError,$STypeError,$UTypeError)=$x784;$x785=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x786=$x785($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x786->class)&&$x786->class===\'Error\'){$x786->properties[\'file\']=\'<image>/05_string.js\';$x786->properties[\'line\']=258;$x786->properties[\'column\']=20;$x786->attributes[\'file\']=$x786->attributes[\'line\']=$x786->attributes[\'column\']=0;}throw new JSException($x786,258,20,\'<image>/05_string.js\');}$x782=$x767->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x783=$x782($global,$x763,$x767,array($x778),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x787=++$_lastIndex;unset($x788,$W788,$S788,$U788);$x789=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_separator,(string)\'lastIndex\',260,15,\'<image>/05_string.js\');$x788=&$x789[0];list(,$W788,$S788,$U788)=$x789;$x790=++$x788;}else{if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x792=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',263,20,\'<image>/05_string.js\');$_TypeError=&$x792[0];list(,$WTypeError,$STypeError,$UTypeError)=$x792;$x793=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x794=$x793($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x794->class)&&$x794->class===\'Error\'){$x794->properties[\'file\']=\'<image>/05_string.js\';$x794->properties[\'line\']=263;$x794->properties[\'column\']=20;$x794->attributes[\'file\']=$x794->attributes[\'line\']=$x794->attributes[\'column\']=0;}throw new JSException($x794,263,20,\'<image>/05_string.js\');}$x791=JS::toObject($_returnArray,$global);unset($x795,$W795,$S795,$U795);$x796=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x791,(string)\'push\',263,20,\'<image>/05_string.js\');$x795=&$x796[0];list(,$W795,$S795,$U795)=$x796;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x798=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',263,35,\'<image>/05_string.js\');$_TypeError=&$x798[0];list(,$WTypeError,$STypeError,$UTypeError)=$x798;$x799=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x800=$x799($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x800->class)&&$x800->class===\'Error\'){$x800->properties[\'file\']=\'<image>/05_string.js\';$x800->properties[\'line\']=263;$x800->properties[\'column\']=35;$x800->attributes[\'file\']=$x800->attributes[\'line\']=$x800->attributes[\'column\']=0;}throw new JSException($x800,263,35,\'<image>/05_string.js\');}$x797=JS::toObject($leThis,$global);unset($x801,$W801,$S801,$U801);$x802=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x797,(string)\'substring\',263,35,\'<image>/05_string.js\');$x801=&$x802[0];list(,$W801,$S801,$U801)=$x802;unset($x803,$W803,$S803,$U803);$x804=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'index\',263,52,\'<image>/05_string.js\');$x803=&$x804[0];list(,$W803,$S803,$U803)=$x804;if(!(is_object($x801)&&isset($x801->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x807=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',263,35,\'<image>/05_string.js\');$_TypeError=&$x807[0];list(,$WTypeError,$STypeError,$UTypeError)=$x807;$x808=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x809=$x808($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x809->class)&&$x809->class===\'Error\'){$x809->properties[\'file\']=\'<image>/05_string.js\';$x809->properties[\'line\']=263;$x809->properties[\'column\']=35;$x809->attributes[\'file\']=$x809->attributes[\'line\']=$x809->attributes[\'column\']=0;}throw new JSException($x809,263,35,\'<image>/05_string.js\');}$x805=$x801->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x806=$x805($global,$x797,$x801,array($_lastIndex,$x803),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x795)&&isset($x795->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x812=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',263,20,\'<image>/05_string.js\');$_TypeError=&$x812[0];list(,$WTypeError,$STypeError,$UTypeError)=$x812;$x813=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x814=$x813($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x814->class)&&$x814->class===\'Error\'){$x814->properties[\'file\']=\'<image>/05_string.js\';$x814->properties[\'line\']=263;$x814->properties[\'column\']=20;$x814->attributes[\'file\']=$x814->attributes[\'line\']=$x814->attributes[\'column\']=0;}throw new JSException($x814,263,20,\'<image>/05_string.js\');}$x810=$x795->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x811=$x810($global,$x791,$x795,array($x806),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);for($x815=0;;++$x815){if($x815===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x816,$W816,$S816,$U816);$x817=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'length\',265,29,\'<image>/05_string.js\');$x816=&$x817[0];list(,$W816,$S816,$U816)=$x817;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x816;}if($x815!==0){$x818=++$_i;}$x819=JS::toPrimitive($_i,$global);$x820=JS::toPrimitive($_l,$global);$x821=(is_string($x819)&&is_string($x820)?strcmp($x819,$x820)<0:(!is_nan($x822=JS::toNumber($x819,$global))&&!is_nan($x823=JS::toNumber($x820,$global))&&$x822<$x823));if(!JS::toBoolean($x821,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x825=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',266,21,\'<image>/05_string.js\');$_TypeError=&$x825[0];list(,$WTypeError,$STypeError,$UTypeError)=$x825;$x826=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x827=$x826($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x827->class)&&$x827->class===\'Error\'){$x827->properties[\'file\']=\'<image>/05_string.js\';$x827->properties[\'line\']=266;$x827->properties[\'column\']=21;$x827->attributes[\'file\']=$x827->attributes[\'line\']=$x827->attributes[\'column\']=0;}throw new JSException($x827,266,21,\'<image>/05_string.js\');}$x824=JS::toObject($_returnArray,$global);unset($x828,$W828,$S828,$U828);$x829=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x824,(string)\'push\',266,21,\'<image>/05_string.js\');$x828=&$x829[0];list(,$W828,$S828,$U828)=$x829;unset($x830,$W830,$S830,$U830);$x831=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)$_i,266,27,\'<image>/05_string.js\');$x830=&$x831[0];list(,$W830,$S830,$U830)=$x831;if(!(is_object($x828)&&isset($x828->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x834=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',266,21,\'<image>/05_string.js\');$_TypeError=&$x834[0];list(,$WTypeError,$STypeError,$UTypeError)=$x834;$x835=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x836=$x835($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x836->class)&&$x836->class===\'Error\'){$x836->properties[\'file\']=\'<image>/05_string.js\';$x836->properties[\'line\']=266;$x836->properties[\'column\']=21;$x836->attributes[\'file\']=$x836->attributes[\'line\']=$x836->attributes[\'column\']=0;}throw new JSException($x836,266,21,\'<image>/05_string.js\');}$x832=$x828->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x833=$x832($global,$x824,$x828,array($x830),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x839,$W839,$S839,$U839);$x840=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)\'index\',269,21,\'<image>/05_string.js\');$x839=&$x840[0];list(,$W839,$S839,$U839)=$x840;unset($x841,$W841,$S841,$U841);$x842=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$_match,(string)0,269,35,\'<image>/05_string.js\');$x841=&$x842[0];list(,$W841,$S841,$U841)=$x842;unset($x843,$W843,$S843,$U843);$x844=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x841,(string)\'length\',269,38,\'<image>/05_string.js\');$x843=&$x844[0];list(,$W843,$S843,$U843)=$x844;$x837=JS::toPrimitive($x839,$global);$x838=JS::toPrimitive($x843,$global);if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=(is_string($x837)||is_string($x838)?JS::toString($x837,$global).JS::toString($x838,$global):JS::toNumber($x837,$global)+JS::toNumber($x838,$global));}}unset($x848,$W848,$S848,$U848);$x849=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$leThis,(string)\'length\',273,22,\'<image>/05_string.js\');$x848=&$x849[0];list(,$W848,$S848,$U848)=$x849;$x845=JS::toPrimitive($_lastIndex,$global);$x846=JS::toPrimitive($x848,$global);$x847=(is_string($x845)&&is_string($x846)?strcmp($x845,$x846)<0:(!is_nan($x850=JS::toNumber($x845,$global))&&!is_nan($x851=JS::toNumber($x846,$global))&&$x850<$x851));if(JS::toBoolean($x847,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x853=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',274,19,\'<image>/05_string.js\');$_TypeError=&$x853[0];list(,$WTypeError,$STypeError,$UTypeError)=$x853;$x854=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x855=$x854($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x855->class)&&$x855->class===\'Error\'){$x855->properties[\'file\']=\'<image>/05_string.js\';$x855->properties[\'line\']=274;$x855->properties[\'column\']=19;$x855->attributes[\'file\']=$x855->attributes[\'line\']=$x855->attributes[\'column\']=0;}throw new JSException($x855,274,19,\'<image>/05_string.js\');}$x852=JS::toObject($_returnArray,$global);unset($x856,$W856,$S856,$U856);$x857=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x852,(string)\'push\',274,19,\'<image>/05_string.js\');$x856=&$x857[0];list(,$W856,$S856,$U856)=$x857;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x859=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',274,34,\'<image>/05_string.js\');$_TypeError=&$x859[0];list(,$WTypeError,$STypeError,$UTypeError)=$x859;$x860=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x861=$x860($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x861->class)&&$x861->class===\'Error\'){$x861->properties[\'file\']=\'<image>/05_string.js\';$x861->properties[\'line\']=274;$x861->properties[\'column\']=34;$x861->attributes[\'file\']=$x861->attributes[\'line\']=$x861->attributes[\'column\']=0;}throw new JSException($x861,274,34,\'<image>/05_string.js\');}$x858=JS::toObject($leThis,$global);unset($x862,$W862,$S862,$U862);$x863=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x858,(string)\'substring\',274,34,\'<image>/05_string.js\');$x862=&$x863[0];list(,$W862,$S862,$U862)=$x863;unset($x864,$W864,$S864,$U864);$x865=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$leThis,(string)\'length\',274,50,\'<image>/05_string.js\');$x864=&$x865[0];list(,$W864,$S864,$U864)=$x865;if(!(is_object($x862)&&isset($x862->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x868=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',274,34,\'<image>/05_string.js\');$_TypeError=&$x868[0];list(,$WTypeError,$STypeError,$UTypeError)=$x868;$x869=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x870=$x869($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x870->class)&&$x870->class===\'Error\'){$x870->properties[\'file\']=\'<image>/05_string.js\';$x870->properties[\'line\']=274;$x870->properties[\'column\']=34;$x870->attributes[\'file\']=$x870->attributes[\'line\']=$x870->attributes[\'column\']=0;}throw new JSException($x870,274,34,\'<image>/05_string.js\');}$x866=$x862->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x867=$x866($global,$x858,$x862,array($_lastIndex,$x864),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x856)&&isset($x856->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x873=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',274,19,\'<image>/05_string.js\');$_TypeError=&$x873[0];list(,$WTypeError,$STypeError,$UTypeError)=$x873;$x874=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x875=$x874($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x875->class)&&$x875->class===\'Error\'){$x875->properties[\'file\']=\'<image>/05_string.js\';$x875->properties[\'line\']=274;$x875->properties[\'column\']=19;$x875->attributes[\'file\']=$x875->attributes[\'line\']=$x875->attributes[\'column\']=0;}throw new JSException($x875,274,19,\'<image>/05_string.js\');}$x871=$x856->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x872=$x871($global,$x852,$x856,array($x867),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}$_separator->properties[\'global\']=$_savedGlobal;if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x876=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',278,22,\'<image>/05_string.js\');$_TypeError=&$x876[0];list(,$WTypeError,$STypeError,$UTypeError)=$x876;$x877=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x878=$x877($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x878->class)&&$x878->class===\'Error\'){$x878->properties[\'file\']=\'<image>/05_string.js\';$x878->properties[\'line\']=278;$x878->properties[\'column\']=22;$x878->attributes[\'file\']=$x878->attributes[\'line\']=$x878->attributes[\'column\']=0;}throw new JSException($x878,278,22,\'<image>/05_string.js\');}$_separator=JS::toObject($_separator,$global);unset($x879,$W879,$S879,$U879);$x880=_61061ff9bcd94539f1393a26c97ae064_5($global,$scope,$_separator,(string)\'lastIndex\',278,22,\'<image>/05_string.js\');$x879=&$x880[0];list(,$W879,$S879,$U879)=$x880;if($U879&&(!isset($_separator->extensible)||$_separator->extensible)){$_separator->properties[\'lastIndex\']=$x879;$x879=&$_separator->properties[\'lastIndex\'];$_separator->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U879=FALSE;$W879=TRUE;}if(isset($S879)){$x882=$S879->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x883=$x882($global,$_separator,$S879,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x881=$x883;}else{if(!$U879){$x881=$_savedLastIndex;if($W879){$x879=$_savedLastIndex;}}else{$x881=JS::$undefined;}}if(isset($_separator->class)&&$_separator->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_separator->properties[\'length\']){$_separator->properties[\'length\']=\'lastIndex\'+1;}return$_returnArray;return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x896 =& $scope->properties['arguments'];
$x896->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x896->properties[$i] = $args[$i];
$x896->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x897 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x897, $global)) {
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = 0;;
};
$x898 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x898, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x899 = JS::toPrimitive($_start, $global);
$x900 = JS::toPrimitive(0, $global);
$x901 = (is_string($x899) && is_string($x900) ? strcmp($x899, $x900) < 0 : (!is_nan($x902 = JS::toNumber($x899, $global)) && !is_nan($x903 = JS::toNumber($x900, $global)) && $x902 < $x903));
if (JS::toBoolean($x901, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x904 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Math', 295, 11, '<image>/05_string.js');
$_Math =& $x904[0]; list(,$WMath,$SMath,$UMath) = $x904;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x905 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 295, 11, '<image>/05_string.js');
$_ReferenceError =& $x905[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x905;
$x906 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 11);
$x907 = $x906($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x907->class) && $x907->class === 'Error') {$x907->properties['file'] = '<image>/05_string.js';$x907->properties['line'] = 295;$x907->properties['column'] = 11;$x907->attributes['file'] = $x907->attributes['line'] = $x907->attributes['column'] = 0; }
throw new JSException($x907, 295, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x909 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 295, 19, '<image>/05_string.js');
$_TypeError =& $x909[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x909;
$x910 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x911 = $x910($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x911->class) && $x911->class === 'Error') {$x911->properties['file'] = '<image>/05_string.js';$x911->properties['line'] = 295;$x911->properties['column'] = 19;$x911->attributes['file'] = $x911->attributes['line'] = $x911->attributes['column'] = 0; }
throw new JSException($x911, 295, 19, '<image>/05_string.js');
}
$x908 = JS::toObject($_Math, $global);
unset($x912, $W912, $S912, $U912);
$x913 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x908, (string) 'max', 295, 19, '<image>/05_string.js');
$x912 =& $x913[0]; list(,$W912,$S912,$U912) = $x913;
$x914 = JS::toPrimitive($_start, $global);
$x915 = JS::toPrimitive($_length, $global);
if (!(is_object($x912) && isset($x912->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x918 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 295, 19, '<image>/05_string.js');
$_TypeError =& $x918[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x918;
$x919 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x920 = $x919($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x920->class) && $x920->class === 'Error') {$x920->properties['file'] = '<image>/05_string.js';$x920->properties['line'] = 295;$x920->properties['column'] = 19;$x920->attributes['file'] = $x920->attributes['line'] = $x920->attributes['column'] = 0; }
throw new JSException($x920, 295, 19, '<image>/05_string.js');
}
$x916 = $x912->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x917 = $x916($global, $x908, $x912, array((is_string($x914) || is_string($x915) ? JS::toString($x914, $global) . JS::toString($x915, $global) : JS::toNumber($x914, $global) + JS::toNumber($x915, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x917;;
};
$x921 = JS::toPrimitive($_end, $global);
$x922 = JS::toPrimitive(0, $global);
$x923 = (is_string($x921) && is_string($x922) ? strcmp($x921, $x922) < 0 : (!is_nan($x924 = JS::toNumber($x921, $global)) && !is_nan($x925 = JS::toNumber($x922, $global)) && $x924 < $x925));
if (JS::toBoolean($x923, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x926 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Math', 299, 9, '<image>/05_string.js');
$_Math =& $x926[0]; list(,$WMath,$SMath,$UMath) = $x926;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x927 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 299, 9, '<image>/05_string.js');
$_ReferenceError =& $x927[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x927;
$x928 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 9);
$x929 = $x928($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x929->class) && $x929->class === 'Error') {$x929->properties['file'] = '<image>/05_string.js';$x929->properties['line'] = 299;$x929->properties['column'] = 9;$x929->attributes['file'] = $x929->attributes['line'] = $x929->attributes['column'] = 0; }
throw new JSException($x929, 299, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x931 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 299, 17, '<image>/05_string.js');
$_TypeError =& $x931[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x931;
$x932 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x933 = $x932($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x933->class) && $x933->class === 'Error') {$x933->properties['file'] = '<image>/05_string.js';$x933->properties['line'] = 299;$x933->properties['column'] = 17;$x933->attributes['file'] = $x933->attributes['line'] = $x933->attributes['column'] = 0; }
throw new JSException($x933, 299, 17, '<image>/05_string.js');
}
$x930 = JS::toObject($_Math, $global);
unset($x934, $W934, $S934, $U934);
$x935 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x930, (string) 'max', 299, 17, '<image>/05_string.js');
$x934 =& $x935[0]; list(,$W934,$S934,$U934) = $x935;
$x936 = JS::toPrimitive($_end, $global);
$x937 = JS::toPrimitive($_length, $global);
if (!(is_object($x934) && isset($x934->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x940 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 299, 17, '<image>/05_string.js');
$_TypeError =& $x940[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x940;
$x941 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x942 = $x941($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x942->class) && $x942->class === 'Error') {$x942->properties['file'] = '<image>/05_string.js';$x942->properties['line'] = 299;$x942->properties['column'] = 17;$x942->attributes['file'] = $x942->attributes['line'] = $x942->attributes['column'] = 0; }
throw new JSException($x942, 299, 17, '<image>/05_string.js');
}
$x938 = $x934->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x939 = $x938($global, $x930, $x934, array((is_string($x936) || is_string($x937) ? JS::toString($x936, $global) . JS::toString($x937, $global) : JS::toNumber($x936, $global) + JS::toNumber($x937, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x939;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x943 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Math', 302, 10, '<image>/05_string.js');
$_Math =& $x943[0]; list(,$WMath,$SMath,$UMath) = $x943;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x944 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 302, 10, '<image>/05_string.js');
$_ReferenceError =& $x944[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x944;
$x945 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 10);
$x946 = $x945($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x946->class) && $x946->class === 'Error') {$x946->properties['file'] = '<image>/05_string.js';$x946->properties['line'] = 302;$x946->properties['column'] = 10;$x946->attributes['file'] = $x946->attributes['line'] = $x946->attributes['column'] = 0; }
throw new JSException($x946, 302, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x948 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 302, 18, '<image>/05_string.js');
$_TypeError =& $x948[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x948;
$x949 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x950 = $x949($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x950->class) && $x950->class === 'Error') {$x950->properties['file'] = '<image>/05_string.js';$x950->properties['line'] = 302;$x950->properties['column'] = 18;$x950->attributes['file'] = $x950->attributes['line'] = $x950->attributes['column'] = 0; }
throw new JSException($x950, 302, 18, '<image>/05_string.js');
}
$x947 = JS::toObject($_Math, $global);
unset($x951, $W951, $S951, $U951);
$x952 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x947, (string) 'min', 302, 18, '<image>/05_string.js');
$x951 =& $x952[0]; list(,$W951,$S951,$U951) = $x952;
if (!(is_object($x951) && isset($x951->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x955 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 302, 18, '<image>/05_string.js');
$_TypeError =& $x955[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x955;
$x956 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x957 = $x956($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x957->class) && $x957->class === 'Error') {$x957->properties['file'] = '<image>/05_string.js';$x957->properties['line'] = 302;$x957->properties['column'] = 18;$x957->attributes['file'] = $x957->attributes['line'] = $x957->attributes['column'] = 0; }
throw new JSException($x957, 302, 18, '<image>/05_string.js');
}
$x953 = $x951->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x954 = $x953($global, $x947, $x951, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x954;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x959 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 303, 16, '<image>/05_string.js');
$_TypeError =& $x959[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x959;
$x960 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x961 = $x960($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x961->class) && $x961->class === 'Error') {$x961->properties['file'] = '<image>/05_string.js';$x961->properties['line'] = 303;$x961->properties['column'] = 16;$x961->attributes['file'] = $x961->attributes['line'] = $x961->attributes['column'] = 0; }
throw new JSException($x961, 303, 16, '<image>/05_string.js');
}
$x958 = JS::toObject($_Math, $global);
unset($x962, $W962, $S962, $U962);
$x963 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x958, (string) 'min', 303, 16, '<image>/05_string.js');
$x962 =& $x963[0]; list(,$W962,$S962,$U962) = $x963;
if (!(is_object($x962) && isset($x962->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x966 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 303, 16, '<image>/05_string.js');
$_TypeError =& $x966[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x966;
$x967 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x968 = $x967($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x968->class) && $x968->class === 'Error') {$x968->properties['file'] = '<image>/05_string.js';$x968->properties['line'] = 303;$x968->properties['column'] = 16;$x968->attributes['file'] = $x968->attributes['line'] = $x968->attributes['column'] = 0; }
throw new JSException($x968, 303, 16, '<image>/05_string.js');
}
$x964 = $x962->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x965 = $x964($global, $x958, $x962, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x965;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x970 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 305, 21, '<image>/05_string.js');
$_TypeError =& $x970[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x970;
$x971 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x972 = $x971($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x972->class) && $x972->class === 'Error') {$x972->properties['file'] = '<image>/05_string.js';$x972->properties['line'] = 305;$x972->properties['column'] = 21;$x972->attributes['file'] = $x972->attributes['line'] = $x972->attributes['column'] = 0; }
throw new JSException($x972, 305, 21, '<image>/05_string.js');
}
$x969 = JS::toObject($_Math, $global);
unset($x973, $W973, $S973, $U973);
$x974 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x969, (string) 'min', 305, 21, '<image>/05_string.js');
$x973 =& $x974[0]; list(,$W973,$S973,$U973) = $x974;
if (!(is_object($x973) && isset($x973->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x977 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 305, 21, '<image>/05_string.js');
$_TypeError =& $x977[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x977;
$x978 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x979 = $x978($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x979->class) && $x979->class === 'Error') {$x979->properties['file'] = '<image>/05_string.js';$x979->properties['line'] = 305;$x979->properties['column'] = 21;$x979->attributes['file'] = $x979->attributes['line'] = $x979->attributes['column'] = 0; }
throw new JSException($x979, 305, 21, '<image>/05_string.js');
}
$x975 = $x973->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x976 = $x975($global, $x969, $x973, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x976;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x981 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 305, 48, '<image>/05_string.js');
$_TypeError =& $x981[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x981;
$x982 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x983 = $x982($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x983->class) && $x983->class === 'Error') {$x983->properties['file'] = '<image>/05_string.js';$x983->properties['line'] = 305;$x983->properties['column'] = 48;$x983->attributes['file'] = $x983->attributes['line'] = $x983->attributes['column'] = 0; }
throw new JSException($x983, 305, 48, '<image>/05_string.js');
}
$x980 = JS::toObject($_Math, $global);
unset($x984, $W984, $S984, $U984);
$x985 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x980, (string) 'max', 305, 48, '<image>/05_string.js');
$x984 =& $x985[0]; list(,$W984,$S984,$U984) = $x985;
if (!(is_object($x984) && isset($x984->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x988 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 305, 48, '<image>/05_string.js');
$_TypeError =& $x988[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x988;
$x989 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x990 = $x989($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x990->class) && $x990->class === 'Error') {$x990->properties['file'] = '<image>/05_string.js';$x990->properties['line'] = 305;$x990->properties['column'] = 48;$x990->attributes['file'] = $x990->attributes['line'] = $x990->attributes['column'] = 0; }
throw new JSException($x990, 305, 48, '<image>/05_string.js');
}
$x986 = $x984->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x987 = $x986($global, $x980, $x984, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x987;
return (string) substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x896=&$scope->properties[\'arguments\'];$x896->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x896->properties[$i]=$args[$i];$x896->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x897=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x897,$global)){if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=0;}$x898=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x898,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x899=JS::toPrimitive($_start,$global);$x900=JS::toPrimitive(0,$global);$x901=(is_string($x899)&&is_string($x900)?strcmp($x899,$x900)<0:(!is_nan($x902=JS::toNumber($x899,$global))&&!is_nan($x903=JS::toNumber($x900,$global))&&$x902<$x903));if(JS::toBoolean($x901,$global)){unset($_Math,$WMath,$SMath,$UMath);$x904=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Math\',295,11,\'<image>/05_string.js\');$_Math=&$x904[0];list(,$WMath,$SMath,$UMath)=$x904;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x905=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',295,11,\'<image>/05_string.js\');$_ReferenceError=&$x905[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x905;$x906=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,11);$x907=$x906($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x907->class)&&$x907->class===\'Error\'){$x907->properties[\'file\']=\'<image>/05_string.js\';$x907->properties[\'line\']=295;$x907->properties[\'column\']=11;$x907->attributes[\'file\']=$x907->attributes[\'line\']=$x907->attributes[\'column\']=0;}throw new JSException($x907,295,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x909=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',295,19,\'<image>/05_string.js\');$_TypeError=&$x909[0];list(,$WTypeError,$STypeError,$UTypeError)=$x909;$x910=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x911=$x910($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x911->class)&&$x911->class===\'Error\'){$x911->properties[\'file\']=\'<image>/05_string.js\';$x911->properties[\'line\']=295;$x911->properties[\'column\']=19;$x911->attributes[\'file\']=$x911->attributes[\'line\']=$x911->attributes[\'column\']=0;}throw new JSException($x911,295,19,\'<image>/05_string.js\');}$x908=JS::toObject($_Math,$global);unset($x912,$W912,$S912,$U912);$x913=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x908,(string)\'max\',295,19,\'<image>/05_string.js\');$x912=&$x913[0];list(,$W912,$S912,$U912)=$x913;$x914=JS::toPrimitive($_start,$global);$x915=JS::toPrimitive($_length,$global);if(!(is_object($x912)&&isset($x912->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x918=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',295,19,\'<image>/05_string.js\');$_TypeError=&$x918[0];list(,$WTypeError,$STypeError,$UTypeError)=$x918;$x919=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x920=$x919($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x920->class)&&$x920->class===\'Error\'){$x920->properties[\'file\']=\'<image>/05_string.js\';$x920->properties[\'line\']=295;$x920->properties[\'column\']=19;$x920->attributes[\'file\']=$x920->attributes[\'line\']=$x920->attributes[\'column\']=0;}throw new JSException($x920,295,19,\'<image>/05_string.js\');}$x916=$x912->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x917=$x916($global,$x908,$x912,array((is_string($x914)||is_string($x915)?JS::toString($x914,$global).JS::toString($x915,$global):JS::toNumber($x914,$global)+JS::toNumber($x915,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x917;}$x921=JS::toPrimitive($_end,$global);$x922=JS::toPrimitive(0,$global);$x923=(is_string($x921)&&is_string($x922)?strcmp($x921,$x922)<0:(!is_nan($x924=JS::toNumber($x921,$global))&&!is_nan($x925=JS::toNumber($x922,$global))&&$x924<$x925));if(JS::toBoolean($x923,$global)){unset($_Math,$WMath,$SMath,$UMath);$x926=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Math\',299,9,\'<image>/05_string.js\');$_Math=&$x926[0];list(,$WMath,$SMath,$UMath)=$x926;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x927=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',299,9,\'<image>/05_string.js\');$_ReferenceError=&$x927[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x927;$x928=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,9);$x929=$x928($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x929->class)&&$x929->class===\'Error\'){$x929->properties[\'file\']=\'<image>/05_string.js\';$x929->properties[\'line\']=299;$x929->properties[\'column\']=9;$x929->attributes[\'file\']=$x929->attributes[\'line\']=$x929->attributes[\'column\']=0;}throw new JSException($x929,299,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x931=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',299,17,\'<image>/05_string.js\');$_TypeError=&$x931[0];list(,$WTypeError,$STypeError,$UTypeError)=$x931;$x932=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x933=$x932($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x933->class)&&$x933->class===\'Error\'){$x933->properties[\'file\']=\'<image>/05_string.js\';$x933->properties[\'line\']=299;$x933->properties[\'column\']=17;$x933->attributes[\'file\']=$x933->attributes[\'line\']=$x933->attributes[\'column\']=0;}throw new JSException($x933,299,17,\'<image>/05_string.js\');}$x930=JS::toObject($_Math,$global);unset($x934,$W934,$S934,$U934);$x935=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x930,(string)\'max\',299,17,\'<image>/05_string.js\');$x934=&$x935[0];list(,$W934,$S934,$U934)=$x935;$x936=JS::toPrimitive($_end,$global);$x937=JS::toPrimitive($_length,$global);if(!(is_object($x934)&&isset($x934->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x940=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',299,17,\'<image>/05_string.js\');$_TypeError=&$x940[0];list(,$WTypeError,$STypeError,$UTypeError)=$x940;$x941=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x942=$x941($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x942->class)&&$x942->class===\'Error\'){$x942->properties[\'file\']=\'<image>/05_string.js\';$x942->properties[\'line\']=299;$x942->properties[\'column\']=17;$x942->attributes[\'file\']=$x942->attributes[\'line\']=$x942->attributes[\'column\']=0;}throw new JSException($x942,299,17,\'<image>/05_string.js\');}$x938=$x934->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x939=$x938($global,$x930,$x934,array((is_string($x936)||is_string($x937)?JS::toString($x936,$global).JS::toString($x937,$global):JS::toNumber($x936,$global)+JS::toNumber($x937,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x939;}unset($_Math,$WMath,$SMath,$UMath);$x943=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'Math\',302,10,\'<image>/05_string.js\');$_Math=&$x943[0];list(,$WMath,$SMath,$UMath)=$x943;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x944=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'ReferenceError\',302,10,\'<image>/05_string.js\');$_ReferenceError=&$x944[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x944;$x945=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,10);$x946=$x945($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x946->class)&&$x946->class===\'Error\'){$x946->properties[\'file\']=\'<image>/05_string.js\';$x946->properties[\'line\']=302;$x946->properties[\'column\']=10;$x946->attributes[\'file\']=$x946->attributes[\'line\']=$x946->attributes[\'column\']=0;}throw new JSException($x946,302,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x948=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',302,18,\'<image>/05_string.js\');$_TypeError=&$x948[0];list(,$WTypeError,$STypeError,$UTypeError)=$x948;$x949=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x950=$x949($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x950->class)&&$x950->class===\'Error\'){$x950->properties[\'file\']=\'<image>/05_string.js\';$x950->properties[\'line\']=302;$x950->properties[\'column\']=18;$x950->attributes[\'file\']=$x950->attributes[\'line\']=$x950->attributes[\'column\']=0;}throw new JSException($x950,302,18,\'<image>/05_string.js\');}$x947=JS::toObject($_Math,$global);unset($x951,$W951,$S951,$U951);$x952=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x947,(string)\'min\',302,18,\'<image>/05_string.js\');$x951=&$x952[0];list(,$W951,$S951,$U951)=$x952;if(!(is_object($x951)&&isset($x951->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x955=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',302,18,\'<image>/05_string.js\');$_TypeError=&$x955[0];list(,$WTypeError,$STypeError,$UTypeError)=$x955;$x956=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x957=$x956($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x957->class)&&$x957->class===\'Error\'){$x957->properties[\'file\']=\'<image>/05_string.js\';$x957->properties[\'line\']=302;$x957->properties[\'column\']=18;$x957->attributes[\'file\']=$x957->attributes[\'line\']=$x957->attributes[\'column\']=0;}throw new JSException($x957,302,18,\'<image>/05_string.js\');}$x953=$x951->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x954=$x953($global,$x947,$x951,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x954;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x959=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',303,16,\'<image>/05_string.js\');$_TypeError=&$x959[0];list(,$WTypeError,$STypeError,$UTypeError)=$x959;$x960=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x961=$x960($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x961->class)&&$x961->class===\'Error\'){$x961->properties[\'file\']=\'<image>/05_string.js\';$x961->properties[\'line\']=303;$x961->properties[\'column\']=16;$x961->attributes[\'file\']=$x961->attributes[\'line\']=$x961->attributes[\'column\']=0;}throw new JSException($x961,303,16,\'<image>/05_string.js\');}$x958=JS::toObject($_Math,$global);unset($x962,$W962,$S962,$U962);$x963=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x958,(string)\'min\',303,16,\'<image>/05_string.js\');$x962=&$x963[0];list(,$W962,$S962,$U962)=$x963;if(!(is_object($x962)&&isset($x962->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x966=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',303,16,\'<image>/05_string.js\');$_TypeError=&$x966[0];list(,$WTypeError,$STypeError,$UTypeError)=$x966;$x967=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x968=$x967($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x968->class)&&$x968->class===\'Error\'){$x968->properties[\'file\']=\'<image>/05_string.js\';$x968->properties[\'line\']=303;$x968->properties[\'column\']=16;$x968->attributes[\'file\']=$x968->attributes[\'line\']=$x968->attributes[\'column\']=0;}throw new JSException($x968,303,16,\'<image>/05_string.js\');}$x964=$x962->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x965=$x964($global,$x958,$x962,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x965;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x970=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',305,21,\'<image>/05_string.js\');$_TypeError=&$x970[0];list(,$WTypeError,$STypeError,$UTypeError)=$x970;$x971=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x972=$x971($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x972->class)&&$x972->class===\'Error\'){$x972->properties[\'file\']=\'<image>/05_string.js\';$x972->properties[\'line\']=305;$x972->properties[\'column\']=21;$x972->attributes[\'file\']=$x972->attributes[\'line\']=$x972->attributes[\'column\']=0;}throw new JSException($x972,305,21,\'<image>/05_string.js\');}$x969=JS::toObject($_Math,$global);unset($x973,$W973,$S973,$U973);$x974=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x969,(string)\'min\',305,21,\'<image>/05_string.js\');$x973=&$x974[0];list(,$W973,$S973,$U973)=$x974;if(!(is_object($x973)&&isset($x973->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x977=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',305,21,\'<image>/05_string.js\');$_TypeError=&$x977[0];list(,$WTypeError,$STypeError,$UTypeError)=$x977;$x978=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x979=$x978($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x979->class)&&$x979->class===\'Error\'){$x979->properties[\'file\']=\'<image>/05_string.js\';$x979->properties[\'line\']=305;$x979->properties[\'column\']=21;$x979->attributes[\'file\']=$x979->attributes[\'line\']=$x979->attributes[\'column\']=0;}throw new JSException($x979,305,21,\'<image>/05_string.js\');}$x975=$x973->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x976=$x975($global,$x969,$x973,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x976;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x981=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',305,48,\'<image>/05_string.js\');$_TypeError=&$x981[0];list(,$WTypeError,$STypeError,$UTypeError)=$x981;$x982=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x983=$x982($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x983->class)&&$x983->class===\'Error\'){$x983->properties[\'file\']=\'<image>/05_string.js\';$x983->properties[\'line\']=305;$x983->properties[\'column\']=48;$x983->attributes[\'file\']=$x983->attributes[\'line\']=$x983->attributes[\'column\']=0;}throw new JSException($x983,305,48,\'<image>/05_string.js\');}$x980=JS::toObject($_Math,$global);unset($x984,$W984,$S984,$U984);$x985=_61061ff9bcd94539f1393a26c97ae064_4($global,$scope,$x980,(string)\'max\',305,48,\'<image>/05_string.js\');$x984=&$x985[0];list(,$W984,$S984,$U984)=$x985;if(!(is_object($x984)&&isset($x984->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x988=_61061ff9bcd94539f1393a26c97ae064_3($global,$scope,$scope,(string)\'TypeError\',305,48,\'<image>/05_string.js\');$_TypeError=&$x988[0];list(,$WTypeError,$STypeError,$UTypeError)=$x988;$x989=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x990=$x989($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x990->class)&&$x990->class===\'Error\'){$x990->properties[\'file\']=\'<image>/05_string.js\';$x990->properties[\'line\']=305;$x990->properties[\'column\']=48;$x990->attributes[\'file\']=$x990->attributes[\'line\']=$x990->attributes[\'column\']=0;}throw new JSException($x990,305,48,\'<image>/05_string.js\');}$x986=$x984->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x987=$x986($global,$x980,$x984,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x987;return(string)substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1003 =& $scope->properties['arguments'];
$x1003->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1003->properties[$i] = $args[$i];
$x1003->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['length'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1004 = (((gettype($_length) === gettype(JS::$undefined) && $_length === JS::$undefined))|| (((is_float($_length) || is_int($_length)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_length == JS::$undefined));
if (JS::toBoolean($x1004, $global)) {

return substr($leThis->value,$_start);;
};
return (string) substr($leThis->value,$_start,$_length);
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1003=&$scope->properties[\'arguments\'];$x1003->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1003->properties[$i]=$args[$i];$x1003->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'length\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1004=(((gettype($_length)===gettype(JS::$undefined)&&$_length===JS::$undefined))||(((is_float($_length)||is_int($_length))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_length==JS::$undefined));if(JS::toBoolean($x1004,$global)){return substr($leThis->value,$_start);}return(string)substr($leThis->value,$_start,$_length);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1017 =& $scope->properties['arguments'];
$x1017->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1017->properties[$i] = $args[$i];
$x1017->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtolower($leThis->value);
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1017=&$scope->properties[\'arguments\'];$x1017->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1017->properties[$i]=$args[$i];$x1017->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtolower($leThis->value);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1044 =& $scope->properties['arguments'];
$x1044->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1044->properties[$i] = $args[$i];
$x1044->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtoupper($leThis->value);
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1044=&$scope->properties[\'arguments\'];$x1044->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1044->properties[$i]=$args[$i];$x1044->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtoupper($leThis->value);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1071 =& $scope->properties['arguments'];
$x1071->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1071->properties[$i] = $args[$i];
$x1071->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return trim($leThis->value);
;
return JS::$undefined;
}
echo 'function _61061ff9bcd94539f1393a26c97ae064_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1071=&$scope->properties[\'arguments\'];$x1071->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1071->properties[$i]=$args[$i];$x1071->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return trim($leThis->value);return JS::$undefined;}', "\n";
function _61061ff9bcd94539f1393a26c97ae064_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/05_string.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/05_string.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_String;
$x4 = clone JS::$functionTemplate; $x4->call = '_61061ff9bcd94539f1393a26c97ae064_1'; $x4->parameters = array (
  0 => 'value',
); $x4->name = 'String'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$scope->properties['String'] = JS::$undefined; $_String =& $scope->properties['String'];
$UString = FALSE;
$_String = $x4;
$x31 = clone JS::$functionTemplate; $x31->call = '_61061ff9bcd94539f1393a26c97ae064_2'; $x31->parameters = array (
  0 => 'c',
); $x31->scope = $scope; $x31->properties['prototype'] = clone JS::$objectTemplate; $x31->attributes['prototype'] = JS::WRITABLE; $x31->properties['prototype']->properties['constructor'] = $x31; $x31->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x31->properties['length'] = 1; $x31->attributes['length'] = 0;
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x32 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 16, 21, '<image>/05_string.js');
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
$x39 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $_String, (string) 'fromCharCode', 16, 21, '<image>/05_string.js');
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
$x44 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 27, 18, '<image>/05_string.js');
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
$x48 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $_String, (string) 'prototype', 27, 18, '<image>/05_string.js');
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
$x52 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'Object', 28, 51, '<image>/05_string.js');
$_Object =& $x52[0]; list(,$WObject,$SObject,$UObject) = $x52;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x53 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'ReferenceError', 28, 51, '<image>/05_string.js');
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
$x57 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 31, 7, '<image>/05_string.js');
$x56 =& $x57[0]; list(,$W56,$S56,$U56) = $x57;
if ($x56 === JS::$undefined || $x56 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 31, 30, '<image>/05_string.js');
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
$x62 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x56, (string) 'constructor', 31, 30, '<image>/05_string.js');
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
$x80 = clone JS::$functionTemplate; $x80->call = '_61061ff9bcd94539f1393a26c97ae064_6'; $x80->parameters = array (
); $x80->scope = $scope; $x80->properties['prototype'] = clone JS::$objectTemplate; $x80->attributes['prototype'] = JS::WRITABLE; $x80->properties['prototype']->properties['constructor'] = $x80; $x80->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x80->properties['length'] = 0; $x80->attributes['length'] = 0;
unset($x81, $W81, $S81, $U81);
$x82 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 33, 7, '<image>/05_string.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
if ($x81 === JS::$undefined || $x81 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x83 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 33, 27, '<image>/05_string.js');
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
$x87 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x81, (string) 'toString', 33, 27, '<image>/05_string.js');
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
$x92 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 41, 34, '<image>/05_string.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
unset($x93, $W93, $S93, $U93);
$x94 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x91, (string) 'toString', 41, 44, '<image>/05_string.js');
$x93 =& $x94[0]; list(,$W93,$S93,$U93) = $x94;
unset($x95, $W95, $S95, $U95);
$x96 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 41, 7, '<image>/05_string.js');
$x95 =& $x96[0]; list(,$W95,$S95,$U95) = $x96;
if ($x95 === JS::$undefined || $x95 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x97 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 41, 26, '<image>/05_string.js');
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
$x101 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x95, (string) 'valueOf', 41, 26, '<image>/05_string.js');
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
$x120 = clone JS::$functionTemplate; $x120->call = '_61061ff9bcd94539f1393a26c97ae064_7'; $x120->parameters = array (
  0 => 'pos',
); $x120->scope = $scope; $x120->properties['prototype'] = clone JS::$objectTemplate; $x120->attributes['prototype'] = JS::WRITABLE; $x120->properties['prototype']->properties['constructor'] = $x120; $x120->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x120->properties['length'] = 1; $x120->attributes['length'] = 0;
unset($x121, $W121, $S121, $U121);
$x122 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 43, 7, '<image>/05_string.js');
$x121 =& $x122[0]; list(,$W121,$S121,$U121) = $x122;
if ($x121 === JS::$undefined || $x121 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x123 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 43, 25, '<image>/05_string.js');
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
$x127 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x121, (string) 'charAt', 43, 25, '<image>/05_string.js');
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
$x161 = clone JS::$functionTemplate; $x161->call = '_61061ff9bcd94539f1393a26c97ae064_8'; $x161->parameters = array (
  0 => 'pos',
); $x161->scope = $scope; $x161->properties['prototype'] = clone JS::$objectTemplate; $x161->attributes['prototype'] = JS::WRITABLE; $x161->properties['prototype']->properties['constructor'] = $x161; $x161->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x161->properties['length'] = 1; $x161->attributes['length'] = 0;
unset($x162, $W162, $S162, $U162);
$x163 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 53, 7, '<image>/05_string.js');
$x162 =& $x163[0]; list(,$W162,$S162,$U162) = $x163;
if ($x162 === JS::$undefined || $x162 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x164 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 53, 29, '<image>/05_string.js');
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
$x168 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x162, (string) 'charCodeAt', 53, 29, '<image>/05_string.js');
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
$x191 = clone JS::$functionTemplate; $x191->call = '_61061ff9bcd94539f1393a26c97ae064_9'; $x191->parameters = array (
  0 => 'string',
); $x191->scope = $scope; $x191->properties['prototype'] = clone JS::$objectTemplate; $x191->attributes['prototype'] = JS::WRITABLE; $x191->properties['prototype']->properties['constructor'] = $x191; $x191->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x191->properties['length'] = 1; $x191->attributes['length'] = 0;
unset($x192, $W192, $S192, $U192);
$x193 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 65, 7, '<image>/05_string.js');
$x192 =& $x193[0]; list(,$W192,$S192,$U192) = $x193;
if ($x192 === JS::$undefined || $x192 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x194 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 65, 25, '<image>/05_string.js');
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
$x198 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x192, (string) 'concat', 65, 25, '<image>/05_string.js');
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
$x232 = clone JS::$functionTemplate; $x232->call = '_61061ff9bcd94539f1393a26c97ae064_10'; $x232->parameters = array (
  0 => 'search',
  1 => 'position',
); $x232->scope = $scope; $x232->properties['prototype'] = clone JS::$objectTemplate; $x232->attributes['prototype'] = JS::WRITABLE; $x232->properties['prototype']->properties['constructor'] = $x232; $x232->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x232->properties['length'] = 2; $x232->attributes['length'] = 0;
unset($x233, $W233, $S233, $U233);
$x234 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 75, 7, '<image>/05_string.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
if ($x233 === JS::$undefined || $x233 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x235 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 75, 26, '<image>/05_string.js');
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
$x239 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x233, (string) 'indexOf', 75, 26, '<image>/05_string.js');
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
$x273 = clone JS::$functionTemplate; $x273->call = '_61061ff9bcd94539f1393a26c97ae064_11'; $x273->parameters = array (
  0 => 'search',
  1 => 'position',
); $x273->scope = $scope; $x273->properties['prototype'] = clone JS::$objectTemplate; $x273->attributes['prototype'] = JS::WRITABLE; $x273->properties['prototype']->properties['constructor'] = $x273; $x273->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x273->properties['length'] = 2; $x273->attributes['length'] = 0;
unset($x274, $W274, $S274, $U274);
$x275 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 90, 7, '<image>/05_string.js');
$x274 =& $x275[0]; list(,$W274,$S274,$U274) = $x275;
if ($x274 === JS::$undefined || $x274 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x276 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 90, 30, '<image>/05_string.js');
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
$x280 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x274, (string) 'lastIndexOf', 90, 30, '<image>/05_string.js');
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
$x286 = clone JS::$functionTemplate; $x286->call = '_61061ff9bcd94539f1393a26c97ae064_12'; $x286->parameters = array (
  0 => 'that',
); $x286->scope = $scope; $x286->properties['prototype'] = clone JS::$objectTemplate; $x286->attributes['prototype'] = JS::WRITABLE; $x286->properties['prototype']->properties['constructor'] = $x286; $x286->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x286->properties['length'] = 1; $x286->attributes['length'] = 0;
unset($x287, $W287, $S287, $U287);
$x288 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 105, 7, '<image>/05_string.js');
$x287 =& $x288[0]; list(,$W287,$S287,$U287) = $x288;
if ($x287 === JS::$undefined || $x287 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x289 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 105, 32, '<image>/05_string.js');
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
$x293 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x287, (string) 'localeCompare', 105, 32, '<image>/05_string.js');
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
$x378 = clone JS::$functionTemplate; $x378->call = '_61061ff9bcd94539f1393a26c97ae064_13'; $x378->parameters = array (
  0 => 'regexp',
); $x378->scope = $scope; $x378->properties['prototype'] = clone JS::$objectTemplate; $x378->attributes['prototype'] = JS::WRITABLE; $x378->properties['prototype']->properties['constructor'] = $x378; $x378->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x378->properties['length'] = 1; $x378->attributes['length'] = 0;
unset($x379, $W379, $S379, $U379);
$x380 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 109, 7, '<image>/05_string.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
if ($x379 === JS::$undefined || $x379 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x381 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 109, 24, '<image>/05_string.js');
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
$x385 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x379, (string) 'match', 109, 24, '<image>/05_string.js');
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
$x560 = clone JS::$functionTemplate; $x560->call = '_61061ff9bcd94539f1393a26c97ae064_14'; $x560->parameters = array (
  0 => 'search',
  1 => 'replace',
); $x560->scope = $scope; $x560->properties['prototype'] = clone JS::$objectTemplate; $x560->attributes['prototype'] = JS::WRITABLE; $x560->properties['prototype']->properties['constructor'] = $x560; $x560->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x560->properties['length'] = 2; $x560->attributes['length'] = 0;
unset($x561, $W561, $S561, $U561);
$x562 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 144, 7, '<image>/05_string.js');
$x561 =& $x562[0]; list(,$W561,$S561,$U561) = $x562;
if ($x561 === JS::$undefined || $x561 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x563 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 144, 26, '<image>/05_string.js');
$_TypeError =& $x563[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x563;
$x564 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x565 = $x564($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x565->class) && $x565->class === 'Error') {$x565->properties['file'] = '<image>/05_string.js';$x565->properties['line'] = 144;$x565->properties['column'] = 26;$x565->attributes['file'] = $x565->attributes['line'] = $x565->attributes['column'] = 0; }
throw new JSException($x565, 144, 26, '<image>/05_string.js');
}
$x561 = JS::toObject($x561, $global);
unset($x566, $W566, $S566, $U566);
$x567 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x561, (string) 'replace', 144, 26, '<image>/05_string.js');
$x566 =& $x567[0]; list(,$W566,$S566,$U566) = $x567;
if ($U566 && (!isset($x561->extensible) || $x561->extensible)) {$x561->properties['replace'] = $x566; $x566 =& $x561->properties['replace']; $x561->attributes['replace'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U566 = FALSE; $W566 = TRUE; }
if (isset($S566)) {
$x569 = $S566->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x570 = $x569($global, $x561, $S566, array($x560), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x568 = $x570;
} else {
if (!$U566) {$x568 = $x560;if ($W566) { $x566 = $x560; }  }
else { $x568 = JS::$undefined; }
}
if (isset($x561->class) && $x561->class === 'Array' &&  is_int('replace') && 'replace' >= $x561->properties['length']) { $x561->properties['length'] = 'replace' + 1; };
$x609 = clone JS::$functionTemplate; $x609->call = '_61061ff9bcd94539f1393a26c97ae064_16'; $x609->parameters = array (
  0 => 'search',
); $x609->scope = $scope; $x609->properties['prototype'] = clone JS::$objectTemplate; $x609->attributes['prototype'] = JS::WRITABLE; $x609->properties['prototype']->properties['constructor'] = $x609; $x609->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x609->properties['length'] = 1; $x609->attributes['length'] = 0;
unset($x610, $W610, $S610, $U610);
$x611 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 189, 7, '<image>/05_string.js');
$x610 =& $x611[0]; list(,$W610,$S610,$U610) = $x611;
if ($x610 === JS::$undefined || $x610 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x612 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 189, 25, '<image>/05_string.js');
$_TypeError =& $x612[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x612;
$x613 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x614 = $x613($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x614->class) && $x614->class === 'Error') {$x614->properties['file'] = '<image>/05_string.js';$x614->properties['line'] = 189;$x614->properties['column'] = 25;$x614->attributes['file'] = $x614->attributes['line'] = $x614->attributes['column'] = 0; }
throw new JSException($x614, 189, 25, '<image>/05_string.js');
}
$x610 = JS::toObject($x610, $global);
unset($x615, $W615, $S615, $U615);
$x616 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x610, (string) 'search', 189, 25, '<image>/05_string.js');
$x615 =& $x616[0]; list(,$W615,$S615,$U615) = $x616;
if ($U615 && (!isset($x610->extensible) || $x610->extensible)) {$x610->properties['search'] = $x615; $x615 =& $x610->properties['search']; $x610->attributes['search'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U615 = FALSE; $W615 = TRUE; }
if (isset($S615)) {
$x618 = $S615->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x619 = $x618($global, $x610, $S615, array($x609), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x617 = $x619;
} else {
if (!$U615) {$x617 = $x609;if ($W615) { $x615 = $x609; }  }
else { $x617 = JS::$undefined; }
}
if (isset($x610->class) && $x610->class === 'Array' &&  is_int('search') && 'search' >= $x610->properties['length']) { $x610->properties['length'] = 'search' + 1; };
$x668 = clone JS::$functionTemplate; $x668->call = '_61061ff9bcd94539f1393a26c97ae064_17'; $x668->parameters = array (
  0 => 'start',
  1 => 'end',
); $x668->scope = $scope; $x668->properties['prototype'] = clone JS::$objectTemplate; $x668->attributes['prototype'] = JS::WRITABLE; $x668->properties['prototype']->properties['constructor'] = $x668; $x668->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x668->properties['length'] = 2; $x668->attributes['length'] = 0;
unset($x669, $W669, $S669, $U669);
$x670 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 206, 7, '<image>/05_string.js');
$x669 =& $x670[0]; list(,$W669,$S669,$U669) = $x670;
if ($x669 === JS::$undefined || $x669 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x671 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 206, 24, '<image>/05_string.js');
$_TypeError =& $x671[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x671;
$x672 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x673 = $x672($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x673->class) && $x673->class === 'Error') {$x673->properties['file'] = '<image>/05_string.js';$x673->properties['line'] = 206;$x673->properties['column'] = 24;$x673->attributes['file'] = $x673->attributes['line'] = $x673->attributes['column'] = 0; }
throw new JSException($x673, 206, 24, '<image>/05_string.js');
}
$x669 = JS::toObject($x669, $global);
unset($x674, $W674, $S674, $U674);
$x675 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x669, (string) 'slice', 206, 24, '<image>/05_string.js');
$x674 =& $x675[0]; list(,$W674,$S674,$U674) = $x675;
if ($U674 && (!isset($x669->extensible) || $x669->extensible)) {$x669->properties['slice'] = $x674; $x674 =& $x669->properties['slice']; $x669->attributes['slice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U674 = FALSE; $W674 = TRUE; }
if (isset($S674)) {
$x677 = $S674->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x678 = $x677($global, $x669, $S674, array($x668), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x676 = $x678;
} else {
if (!$U674) {$x676 = $x668;if ($W674) { $x674 = $x668; }  }
else { $x676 = JS::$undefined; }
}
if (isset($x669->class) && $x669->class === 'Array' &&  is_int('slice') && 'slice' >= $x669->properties['length']) { $x669->properties['length'] = 'slice' + 1; };
$x884 = clone JS::$functionTemplate; $x884->call = '_61061ff9bcd94539f1393a26c97ae064_18'; $x884->parameters = array (
  0 => 'separator',
  1 => 'limit',
); $x884->scope = $scope; $x884->properties['prototype'] = clone JS::$objectTemplate; $x884->attributes['prototype'] = JS::WRITABLE; $x884->properties['prototype']->properties['constructor'] = $x884; $x884->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x884->properties['length'] = 2; $x884->attributes['length'] = 0;
unset($x885, $W885, $S885, $U885);
$x886 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 228, 7, '<image>/05_string.js');
$x885 =& $x886[0]; list(,$W885,$S885,$U885) = $x886;
if ($x885 === JS::$undefined || $x885 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x887 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 228, 24, '<image>/05_string.js');
$_TypeError =& $x887[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x887;
$x888 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x889 = $x888($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x889->class) && $x889->class === 'Error') {$x889->properties['file'] = '<image>/05_string.js';$x889->properties['line'] = 228;$x889->properties['column'] = 24;$x889->attributes['file'] = $x889->attributes['line'] = $x889->attributes['column'] = 0; }
throw new JSException($x889, 228, 24, '<image>/05_string.js');
}
$x885 = JS::toObject($x885, $global);
unset($x890, $W890, $S890, $U890);
$x891 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x885, (string) 'split', 228, 24, '<image>/05_string.js');
$x890 =& $x891[0]; list(,$W890,$S890,$U890) = $x891;
if ($U890 && (!isset($x885->extensible) || $x885->extensible)) {$x885->properties['split'] = $x890; $x890 =& $x885->properties['split']; $x885->attributes['split'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U890 = FALSE; $W890 = TRUE; }
if (isset($S890)) {
$x893 = $S890->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x894 = $x893($global, $x885, $S890, array($x884), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x892 = $x894;
} else {
if (!$U890) {$x892 = $x884;if ($W890) { $x890 = $x884; }  }
else { $x892 = JS::$undefined; }
}
if (isset($x885->class) && $x885->class === 'Array' &&  is_int('split') && 'split' >= $x885->properties['length']) { $x885->properties['length'] = 'split' + 1; };
$x991 = clone JS::$functionTemplate; $x991->call = '_61061ff9bcd94539f1393a26c97ae064_19'; $x991->parameters = array (
  0 => 'start',
  1 => 'end',
); $x991->scope = $scope; $x991->properties['prototype'] = clone JS::$objectTemplate; $x991->attributes['prototype'] = JS::WRITABLE; $x991->properties['prototype']->properties['constructor'] = $x991; $x991->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x991->properties['length'] = 2; $x991->attributes['length'] = 0;
unset($x992, $W992, $S992, $U992);
$x993 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 283, 7, '<image>/05_string.js');
$x992 =& $x993[0]; list(,$W992,$S992,$U992) = $x993;
if ($x992 === JS::$undefined || $x992 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x994 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 283, 28, '<image>/05_string.js');
$_TypeError =& $x994[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x994;
$x995 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x996 = $x995($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x996->class) && $x996->class === 'Error') {$x996->properties['file'] = '<image>/05_string.js';$x996->properties['line'] = 283;$x996->properties['column'] = 28;$x996->attributes['file'] = $x996->attributes['line'] = $x996->attributes['column'] = 0; }
throw new JSException($x996, 283, 28, '<image>/05_string.js');
}
$x992 = JS::toObject($x992, $global);
unset($x997, $W997, $S997, $U997);
$x998 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x992, (string) 'substring', 283, 28, '<image>/05_string.js');
$x997 =& $x998[0]; list(,$W997,$S997,$U997) = $x998;
if ($U997 && (!isset($x992->extensible) || $x992->extensible)) {$x992->properties['substring'] = $x997; $x997 =& $x992->properties['substring']; $x992->attributes['substring'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U997 = FALSE; $W997 = TRUE; }
if (isset($S997)) {
$x1000 = $S997->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x1001 = $x1000($global, $x992, $S997, array($x991), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x999 = $x1001;
} else {
if (!$U997) {$x999 = $x991;if ($W997) { $x997 = $x991; }  }
else { $x999 = JS::$undefined; }
}
if (isset($x992->class) && $x992->class === 'Array' &&  is_int('substring') && 'substring' >= $x992->properties['length']) { $x992->properties['length'] = 'substring' + 1; };
$x1005 = clone JS::$functionTemplate; $x1005->call = '_61061ff9bcd94539f1393a26c97ae064_20'; $x1005->parameters = array (
  0 => 'start',
  1 => 'length',
); $x1005->scope = $scope; $x1005->properties['prototype'] = clone JS::$objectTemplate; $x1005->attributes['prototype'] = JS::WRITABLE; $x1005->properties['prototype']->properties['constructor'] = $x1005; $x1005->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1005->properties['length'] = 2; $x1005->attributes['length'] = 0;
unset($x1006, $W1006, $S1006, $U1006);
$x1007 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 311, 7, '<image>/05_string.js');
$x1006 =& $x1007[0]; list(,$W1006,$S1006,$U1006) = $x1007;
if ($x1006 === JS::$undefined || $x1006 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1008 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 311, 25, '<image>/05_string.js');
$_TypeError =& $x1008[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1008;
$x1009 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1010 = $x1009($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1010->class) && $x1010->class === 'Error') {$x1010->properties['file'] = '<image>/05_string.js';$x1010->properties['line'] = 311;$x1010->properties['column'] = 25;$x1010->attributes['file'] = $x1010->attributes['line'] = $x1010->attributes['column'] = 0; }
throw new JSException($x1010, 311, 25, '<image>/05_string.js');
}
$x1006 = JS::toObject($x1006, $global);
unset($x1011, $W1011, $S1011, $U1011);
$x1012 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x1006, (string) 'substr', 311, 25, '<image>/05_string.js');
$x1011 =& $x1012[0]; list(,$W1011,$S1011,$U1011) = $x1012;
if ($U1011 && (!isset($x1006->extensible) || $x1006->extensible)) {$x1006->properties['substr'] = $x1011; $x1011 =& $x1006->properties['substr']; $x1006->attributes['substr'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1011 = FALSE; $W1011 = TRUE; }
if (isset($S1011)) {
$x1014 = $S1011->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1015 = $x1014($global, $x1006, $S1011, array($x1005), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1013 = $x1015;
} else {
if (!$U1011) {$x1013 = $x1005;if ($W1011) { $x1011 = $x1005; }  }
else { $x1013 = JS::$undefined; }
}
if (isset($x1006->class) && $x1006->class === 'Array' &&  is_int('substr') && 'substr' >= $x1006->properties['length']) { $x1006->properties['length'] = 'substr' + 1; };
$x1018 = clone JS::$functionTemplate; $x1018->call = '_61061ff9bcd94539f1393a26c97ae064_21'; $x1018->parameters = array (
); $x1018->scope = $scope; $x1018->properties['prototype'] = clone JS::$objectTemplate; $x1018->attributes['prototype'] = JS::WRITABLE; $x1018->properties['prototype']->properties['constructor'] = $x1018; $x1018->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1018->properties['length'] = 0; $x1018->attributes['length'] = 0;
unset($x1019, $W1019, $S1019, $U1019);
$x1020 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 319, 7, '<image>/05_string.js');
$x1019 =& $x1020[0]; list(,$W1019,$S1019,$U1019) = $x1020;
if ($x1019 === JS::$undefined || $x1019 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1021 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 319, 30, '<image>/05_string.js');
$_TypeError =& $x1021[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1021;
$x1022 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1023 = $x1022($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1023->class) && $x1023->class === 'Error') {$x1023->properties['file'] = '<image>/05_string.js';$x1023->properties['line'] = 319;$x1023->properties['column'] = 30;$x1023->attributes['file'] = $x1023->attributes['line'] = $x1023->attributes['column'] = 0; }
throw new JSException($x1023, 319, 30, '<image>/05_string.js');
}
$x1019 = JS::toObject($x1019, $global);
unset($x1024, $W1024, $S1024, $U1024);
$x1025 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x1019, (string) 'toLowerCase', 319, 30, '<image>/05_string.js');
$x1024 =& $x1025[0]; list(,$W1024,$S1024,$U1024) = $x1025;
if ($U1024 && (!isset($x1019->extensible) || $x1019->extensible)) {$x1019->properties['toLowerCase'] = $x1024; $x1024 =& $x1019->properties['toLowerCase']; $x1019->attributes['toLowerCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1024 = FALSE; $W1024 = TRUE; }
if (isset($S1024)) {
$x1027 = $S1024->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1028 = $x1027($global, $x1019, $S1024, array($x1018), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1026 = $x1028;
} else {
if (!$U1024) {$x1026 = $x1018;if ($W1024) { $x1024 = $x1018; }  }
else { $x1026 = JS::$undefined; }
}
if (isset($x1019->class) && $x1019->class === 'Array' &&  is_int('toLowerCase') && 'toLowerCase' >= $x1019->properties['length']) { $x1019->properties['length'] = 'toLowerCase' + 1; };
unset($x1029, $W1029, $S1029, $U1029);
$x1030 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 323, 44, '<image>/05_string.js');
$x1029 =& $x1030[0]; list(,$W1029,$S1029,$U1029) = $x1030;
unset($x1031, $W1031, $S1031, $U1031);
$x1032 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x1029, (string) 'toLowerCase', 323, 54, '<image>/05_string.js');
$x1031 =& $x1032[0]; list(,$W1031,$S1031,$U1031) = $x1032;
unset($x1033, $W1033, $S1033, $U1033);
$x1034 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 323, 7, '<image>/05_string.js');
$x1033 =& $x1034[0]; list(,$W1033,$S1033,$U1033) = $x1034;
if ($x1033 === JS::$undefined || $x1033 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1035 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 323, 36, '<image>/05_string.js');
$_TypeError =& $x1035[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1035;
$x1036 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1037 = $x1036($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1037->class) && $x1037->class === 'Error') {$x1037->properties['file'] = '<image>/05_string.js';$x1037->properties['line'] = 323;$x1037->properties['column'] = 36;$x1037->attributes['file'] = $x1037->attributes['line'] = $x1037->attributes['column'] = 0; }
throw new JSException($x1037, 323, 36, '<image>/05_string.js');
}
$x1033 = JS::toObject($x1033, $global);
unset($x1038, $W1038, $S1038, $U1038);
$x1039 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x1033, (string) 'toLocaleLowerCase', 323, 36, '<image>/05_string.js');
$x1038 =& $x1039[0]; list(,$W1038,$S1038,$U1038) = $x1039;
if ($U1038 && (!isset($x1033->extensible) || $x1033->extensible)) {$x1033->properties['toLocaleLowerCase'] = $x1038; $x1038 =& $x1033->properties['toLocaleLowerCase']; $x1033->attributes['toLocaleLowerCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1038 = FALSE; $W1038 = TRUE; }
if (isset($S1038)) {
$x1041 = $S1038->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1042 = $x1041($global, $x1033, $S1038, array($x1031), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1040 = $x1042;
} else {
if (!$U1038) {$x1040 = $x1031;if ($W1038) { $x1038 = $x1031; }  }
else { $x1040 = JS::$undefined; }
}
if (isset($x1033->class) && $x1033->class === 'Array' &&  is_int('toLocaleLowerCase') && 'toLocaleLowerCase' >= $x1033->properties['length']) { $x1033->properties['length'] = 'toLocaleLowerCase' + 1; };
$x1045 = clone JS::$functionTemplate; $x1045->call = '_61061ff9bcd94539f1393a26c97ae064_22'; $x1045->parameters = array (
); $x1045->scope = $scope; $x1045->properties['prototype'] = clone JS::$objectTemplate; $x1045->attributes['prototype'] = JS::WRITABLE; $x1045->properties['prototype']->properties['constructor'] = $x1045; $x1045->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1045->properties['length'] = 0; $x1045->attributes['length'] = 0;
unset($x1046, $W1046, $S1046, $U1046);
$x1047 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 325, 7, '<image>/05_string.js');
$x1046 =& $x1047[0]; list(,$W1046,$S1046,$U1046) = $x1047;
if ($x1046 === JS::$undefined || $x1046 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1048 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 325, 30, '<image>/05_string.js');
$_TypeError =& $x1048[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1048;
$x1049 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1050 = $x1049($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1050->class) && $x1050->class === 'Error') {$x1050->properties['file'] = '<image>/05_string.js';$x1050->properties['line'] = 325;$x1050->properties['column'] = 30;$x1050->attributes['file'] = $x1050->attributes['line'] = $x1050->attributes['column'] = 0; }
throw new JSException($x1050, 325, 30, '<image>/05_string.js');
}
$x1046 = JS::toObject($x1046, $global);
unset($x1051, $W1051, $S1051, $U1051);
$x1052 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x1046, (string) 'toUpperCase', 325, 30, '<image>/05_string.js');
$x1051 =& $x1052[0]; list(,$W1051,$S1051,$U1051) = $x1052;
if ($U1051 && (!isset($x1046->extensible) || $x1046->extensible)) {$x1046->properties['toUpperCase'] = $x1051; $x1051 =& $x1046->properties['toUpperCase']; $x1046->attributes['toUpperCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1051 = FALSE; $W1051 = TRUE; }
if (isset($S1051)) {
$x1054 = $S1051->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1055 = $x1054($global, $x1046, $S1051, array($x1045), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1053 = $x1055;
} else {
if (!$U1051) {$x1053 = $x1045;if ($W1051) { $x1051 = $x1045; }  }
else { $x1053 = JS::$undefined; }
}
if (isset($x1046->class) && $x1046->class === 'Array' &&  is_int('toUpperCase') && 'toUpperCase' >= $x1046->properties['length']) { $x1046->properties['length'] = 'toUpperCase' + 1; };
unset($x1056, $W1056, $S1056, $U1056);
$x1057 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 329, 44, '<image>/05_string.js');
$x1056 =& $x1057[0]; list(,$W1056,$S1056,$U1056) = $x1057;
unset($x1058, $W1058, $S1058, $U1058);
$x1059 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $x1056, (string) 'toUpperCase', 329, 54, '<image>/05_string.js');
$x1058 =& $x1059[0]; list(,$W1058,$S1058,$U1058) = $x1059;
unset($x1060, $W1060, $S1060, $U1060);
$x1061 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 329, 7, '<image>/05_string.js');
$x1060 =& $x1061[0]; list(,$W1060,$S1060,$U1060) = $x1061;
if ($x1060 === JS::$undefined || $x1060 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1062 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 329, 36, '<image>/05_string.js');
$_TypeError =& $x1062[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1062;
$x1063 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1064 = $x1063($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1064->class) && $x1064->class === 'Error') {$x1064->properties['file'] = '<image>/05_string.js';$x1064->properties['line'] = 329;$x1064->properties['column'] = 36;$x1064->attributes['file'] = $x1064->attributes['line'] = $x1064->attributes['column'] = 0; }
throw new JSException($x1064, 329, 36, '<image>/05_string.js');
}
$x1060 = JS::toObject($x1060, $global);
unset($x1065, $W1065, $S1065, $U1065);
$x1066 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x1060, (string) 'toLocaleUpperCase', 329, 36, '<image>/05_string.js');
$x1065 =& $x1066[0]; list(,$W1065,$S1065,$U1065) = $x1066;
if ($U1065 && (!isset($x1060->extensible) || $x1060->extensible)) {$x1060->properties['toLocaleUpperCase'] = $x1065; $x1065 =& $x1060->properties['toLocaleUpperCase']; $x1060->attributes['toLocaleUpperCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1065 = FALSE; $W1065 = TRUE; }
if (isset($S1065)) {
$x1068 = $S1065->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1069 = $x1068($global, $x1060, $S1065, array($x1058), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1067 = $x1069;
} else {
if (!$U1065) {$x1067 = $x1058;if ($W1065) { $x1065 = $x1058; }  }
else { $x1067 = JS::$undefined; }
}
if (isset($x1060->class) && $x1060->class === 'Array' &&  is_int('toLocaleUpperCase') && 'toLocaleUpperCase' >= $x1060->properties['length']) { $x1060->properties['length'] = 'toLocaleUpperCase' + 1; };
$x1072 = clone JS::$functionTemplate; $x1072->call = '_61061ff9bcd94539f1393a26c97ae064_23'; $x1072->parameters = array (
); $x1072->scope = $scope; $x1072->properties['prototype'] = clone JS::$objectTemplate; $x1072->attributes['prototype'] = JS::WRITABLE; $x1072->properties['prototype']->properties['constructor'] = $x1072; $x1072->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1072->properties['length'] = 0; $x1072->attributes['length'] = 0;
unset($x1073, $W1073, $S1073, $U1073);
$x1074 = _61061ff9bcd94539f1393a26c97ae064_4($global, $scope, $_String, (string) 'prototype', 331, 7, '<image>/05_string.js');
$x1073 =& $x1074[0]; list(,$W1073,$S1073,$U1073) = $x1074;
if ($x1073 === JS::$undefined || $x1073 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1075 = _61061ff9bcd94539f1393a26c97ae064_3($global, $scope, $scope, (string) 'TypeError', 331, 23, '<image>/05_string.js');
$_TypeError =& $x1075[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1075;
$x1076 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1077 = $x1076($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1077->class) && $x1077->class === 'Error') {$x1077->properties['file'] = '<image>/05_string.js';$x1077->properties['line'] = 331;$x1077->properties['column'] = 23;$x1077->attributes['file'] = $x1077->attributes['line'] = $x1077->attributes['column'] = 0; }
throw new JSException($x1077, 331, 23, '<image>/05_string.js');
}
$x1073 = JS::toObject($x1073, $global);
unset($x1078, $W1078, $S1078, $U1078);
$x1079 = _61061ff9bcd94539f1393a26c97ae064_5($global, $scope, $x1073, (string) 'trim', 331, 23, '<image>/05_string.js');
$x1078 =& $x1079[0]; list(,$W1078,$S1078,$U1078) = $x1079;
if ($U1078 && (!isset($x1073->extensible) || $x1073->extensible)) {$x1073->properties['trim'] = $x1078; $x1078 =& $x1073->properties['trim']; $x1073->attributes['trim'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1078 = FALSE; $W1078 = TRUE; }
if (isset($S1078)) {
$x1081 = $S1078->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1082 = $x1081($global, $x1073, $S1078, array($x1072), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1080 = $x1082;
} else {
if (!$U1078) {$x1080 = $x1072;if ($W1078) { $x1078 = $x1072; }  }
else { $x1080 = JS::$undefined; }
}
if (isset($x1073->class) && $x1073->class === 'Array' &&  is_int('trim') && 'trim' >= $x1073->properties['length']) { $x1073->properties['length'] = 'trim' + 1; };
;
return JS::$undefined;
}
