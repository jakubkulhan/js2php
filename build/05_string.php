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
if (isset($x17->class) && $x17->class === 'Error' && !isset($x17->properties['file']) && !isset($x17->properties['line']) && !isset($x17->properties['column'])) {$x17->properties['file'] = $file;$x17->properties['line'] = $line;$x17->properties['column'] = $column;$x17->attributes['file'] = $x17->attributes['line'] = $x17->attributes['column'] = 0; }
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
echo 'function _465e5538fcb402e27559db40bec8addd_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'&&!isset($x17->properties[\'file\'])&&!isset($x17->properties[\'line\'])&&!isset($x17->properties[\'column\'])){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
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
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = '<image>/05_string.js';$x13->properties['line'] = 19;$x13->properties['column'] = 22;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
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
$x29 = chr(JS::toNumber($_arg, $global));
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$x30 = JS::toPrimitive($_s, $global);
$x31 = JS::toPrimitive($x29, $global);
$_s = (is_string($x30) || is_string($x31) ? JS::toString($x30, $global) . JS::toString($x31, $global) : JS::toNumber($x30, $global) + JS::toNumber($x31, $global));;
};
return $_s;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'c\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=\'\';for($x7=0;;++$x7){if($x7===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x10=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'arguments\',19,22,\'<image>/05_string.js\');$_arguments=&$x10[0];list(,$Warguments,$Sarguments,$Uarguments)=$x10;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x11=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',19,22,\'<image>/05_string.js\');$_ReferenceError=&$x11[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x11;$x12=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',19,22);$x13=$x12($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/05_string.js\';$x13->properties[\'line\']=19;$x13->properties[\'column\']=22;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,19,22,\'<image>/05_string.js\');}unset($x14,$W14,$S14,$U14);$x20=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)\'length\',19,31,\'<image>/05_string.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x14;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x7!==0){$x21=++$_i;}$x22=JS::toPrimitive($_i,$global);$x23=JS::toPrimitive($_l,$global);$x24=(is_string($x22)&&is_string($x23)?strcmp($x22,$x23)<0:(!is_nan($x25=JS::toNumber($x22,$global))&&!is_nan($x26=JS::toNumber($x23,$global))&&$x25<$x26));if(!JS::toBoolean($x24,$global)){break;}unset($x27,$W27,$S27,$U27);$x28=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)$_i,20,18,\'<image>/05_string.js\');$x27=&$x28[0];list(,$W27,$S27,$U27)=$x28;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x27;$x29=chr(JS::toNumber($_arg,$global));if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$x30=JS::toPrimitive($_s,$global);$x31=JS::toPrimitive($x29,$global);$_s=(is_string($x30)||is_string($x31)?JS::toString($x30,$global).JS::toString($x31,$global):JS::toNumber($x30,$global)+JS::toNumber($x31,$global));}return$_s;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x37 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x37[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x37;
$x38 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x39 = $x38($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x39->class) && $x39->class === 'Error' && !isset($x39->properties['file']) && !isset($x39->properties['line']) && !isset($x39->properties['column'])) {$x39->properties['file'] = $file;$x39->properties['line'] = $line;$x39->properties['column'] = $column;$x39->attributes['file'] = $x39->attributes['line'] = $x39->attributes['column'] = 0; }
throw new JSException($x39, $line, $column, $file);
}
$W36 = $S36 = $U36 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x36 =& $lookup->properties[$id]; $W36 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S36 = $lookup->setters[$id]; }
else { $x36 = JS::$undefined; $U36 = TRUE; }
return array(&$x36, $W36, $S36, $U36);
}
echo 'function _465e5538fcb402e27559db40bec8addd_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x37=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x37[0];list(,$WTypeError,$STypeError,$UTypeError)=$x37;$x38=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x39=$x38($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x39->class)&&$x39->class===\'Error\'&&!isset($x39->properties[\'file\'])&&!isset($x39->properties[\'line\'])&&!isset($x39->properties[\'column\'])){$x39->properties[\'file\']=$file;$x39->properties[\'line\']=$line;$x39->properties[\'column\']=$column;$x39->attributes[\'file\']=$x39->attributes[\'line\']=$x39->attributes[\'column\']=0;}throw new JSException($x39,$line,$column,$file);}$W36=$S36=$U36=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x36=&$lookup->properties[$id];$W36=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S36=$lookup->setters[$id];}else{$x36=JS::$undefined;$U36=TRUE;}return array(&$x36,$W36,$S36,$U36);}', "\n";
function _465e5538fcb402e27559db40bec8addd_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'String', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x71 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 35, 13, '<image>/05_string.js');
$_TypeError =& $x71[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x71;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x72 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 35, 13, '<image>/05_string.js');
$_ReferenceError =& $x72[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x72;
$x73 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 13);
$x74 = $x73($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x74->class) && $x74->class === 'Error' && !isset($x74->properties['file']) && !isset($x74->properties['line']) && !isset($x74->properties['column'])) {$x74->properties['file'] = '<image>/05_string.js';$x74->properties['line'] = 35;$x74->properties['column'] = 13;$x74->attributes['file'] = $x74->attributes['line'] = $x74->attributes['column'] = 0; }
throw new JSException($x74, 35, 13, '<image>/05_string.js');
}
$x69 = clone JS::$objectTemplate;
unset($x75, $W75, $S75, $U75);
$x76 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_TypeError, (string) 'prototype', 35, 9, '<image>/05_string.js');
$x75 =& $x76[0]; list(,$W75,$S75,$U75) = $x76;
$x70 = $x75;
$x69->prototype = $x70;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x79 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x80 = $x79($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x80->class) && $x80->class === 'Error' && !isset($x80->properties['file']) && !isset($x80->properties['line']) && !isset($x80->properties['column'])) {$x80->properties['file'] = '<image>/05_string.js';$x80->properties['line'] = 35;$x80->properties['column'] = 9;$x80->attributes['file'] = $x80->attributes['line'] = $x80->attributes['column'] = 0; }
throw new JSException($x80, 35, 9, '<image>/05_string.js');
}
$x77 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x78 = $x77($global, $x69, $_TypeError, array('String.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x70 = $x78;
if (is_object($x70) && $x70 !== JS::$undefined) { $x69 = $x70; }
if (isset($x69->class) && $x69->class === 'Error' && !isset($x69->properties['file']) && !isset($x69->properties['line']) && !isset($x69->properties['column'])) {$x69->properties['file'] = '<image>/05_string.js';$x69->properties['line'] = 35;$x69->properties['column'] = 3;$x69->attributes['file'] = $x69->attributes['line'] = $x69->attributes['column'] = 0; }
throw new JSException($x69, 35, 3, '<image>/05_string.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x68=&$scope->properties[\'arguments\'];$x68->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x68->properties[$i]=$args[$i];$x68->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'String\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x71=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',35,13,\'<image>/05_string.js\');$_TypeError=&$x71[0];list(,$WTypeError,$STypeError,$UTypeError)=$x71;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x72=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',35,13,\'<image>/05_string.js\');$_ReferenceError=&$x72[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x72;$x73=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,13);$x74=$x73($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x74->class)&&$x74->class===\'Error\'&&!isset($x74->properties[\'file\'])&&!isset($x74->properties[\'line\'])&&!isset($x74->properties[\'column\'])){$x74->properties[\'file\']=\'<image>/05_string.js\';$x74->properties[\'line\']=35;$x74->properties[\'column\']=13;$x74->attributes[\'file\']=$x74->attributes[\'line\']=$x74->attributes[\'column\']=0;}throw new JSException($x74,35,13,\'<image>/05_string.js\');}$x69=clone JS::$objectTemplate;unset($x75,$W75,$S75,$U75);$x76=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_TypeError,(string)\'prototype\',35,9,\'<image>/05_string.js\');$x75=&$x76[0];list(,$W75,$S75,$U75)=$x76;$x70=$x75;$x69->prototype=$x70;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x79=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x80=$x79($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x80->class)&&$x80->class===\'Error\'&&!isset($x80->properties[\'file\'])&&!isset($x80->properties[\'line\'])&&!isset($x80->properties[\'column\'])){$x80->properties[\'file\']=\'<image>/05_string.js\';$x80->properties[\'line\']=35;$x80->properties[\'column\']=9;$x80->attributes[\'file\']=$x80->attributes[\'line\']=$x80->attributes[\'column\']=0;}throw new JSException($x80,35,9,\'<image>/05_string.js\');}$x77=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x78=$x77($global,$x69,$_TypeError,array(\'String.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x70=$x78;if(is_object($x70)&&$x70!==JS::$undefined){$x69=$x70;}if(isset($x69->class)&&$x69->class===\'Error\'&&!isset($x69->properties[\'file\'])&&!isset($x69->properties[\'line\'])&&!isset($x69->properties[\'column\'])){$x69->properties[\'file\']=\'<image>/05_string.js\';$x69->properties[\'line\']=35;$x69->properties[\'column\']=3;$x69->attributes[\'file\']=$x69->attributes[\'line\']=$x69->attributes[\'column\']=0;}throw new JSException($x69,35,3,\'<image>/05_string.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x107 =& $scope->properties['arguments'];
$x107->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x107->properties[$i] = $args[$i];
$x107->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x108 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x108;
$x110 = JS::toPrimitive($_pos, $global);
$x111 = JS::toPrimitive(0, $global);
$x112 = (is_string($x110) && is_string($x111) ? strcmp($x110, $x111) < 0 : (!is_nan($x113 = JS::toNumber($x110, $global)) && !is_nan($x114 = JS::toNumber($x111, $global)) && $x113 < $x114));
$x109 = $x112;
if (!JS::toBoolean($x109, $global)) {
unset($x118, $W118, $S118, $U118);
$x119 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 46, 28, '<image>/05_string.js');
$x118 =& $x119[0]; list(,$W118,$S118,$U118) = $x119;
$x115 = JS::toPrimitive($_pos, $global);
$x116 = JS::toPrimitive($x118, $global);
$x117 = !(is_string($x115) && is_string($x116) ? strcmp($x115, $x116) < 0 : (!is_nan($x120 = JS::toNumber($x115, $global)) && !is_nan($x121 = JS::toNumber($x116, $global)) && $x120 < $x121));
$x109 = $x117; }
if (JS::toBoolean($x109, $global)) {

return '';;
};
return (string) substr($leThis->value,$_pos, 1);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x107=&$scope->properties[\'arguments\'];$x107->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x107->properties[$i]=$args[$i];$x107->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x108=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x108;$x110=JS::toPrimitive($_pos,$global);$x111=JS::toPrimitive(0,$global);$x112=(is_string($x110)&&is_string($x111)?strcmp($x110,$x111)<0:(!is_nan($x113=JS::toNumber($x110,$global))&&!is_nan($x114=JS::toNumber($x111,$global))&&$x113<$x114));$x109=$x112;if(!JS::toBoolean($x109,$global)){unset($x118,$W118,$S118,$U118);$x119=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',46,28,\'<image>/05_string.js\');$x118=&$x119[0];list(,$W118,$S118,$U118)=$x119;$x115=JS::toPrimitive($_pos,$global);$x116=JS::toPrimitive($x118,$global);$x117=!(is_string($x115)&&is_string($x116)?strcmp($x115,$x116)<0:(!is_nan($x120=JS::toNumber($x115,$global))&&!is_nan($x121=JS::toNumber($x116,$global))&&$x120<$x121));$x109=$x117;}if(JS::toBoolean($x109,$global)){return\'\';}return(string)substr($leThis->value,$_pos,1);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x135 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x135;
$x137 = JS::toPrimitive($_pos, $global);
$x138 = JS::toPrimitive(0, $global);
$x139 = (is_string($x137) && is_string($x138) ? strcmp($x137, $x138) < 0 : (!is_nan($x140 = JS::toNumber($x137, $global)) && !is_nan($x141 = JS::toNumber($x138, $global)) && $x140 < $x141));
$x136 = $x139;
if (!JS::toBoolean($x136, $global)) {
unset($x145, $W145, $S145, $U145);
$x146 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 56, 28, '<image>/05_string.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
$x142 = JS::toPrimitive($_pos, $global);
$x143 = JS::toPrimitive($x145, $global);
$x144 = !(is_string($x142) && is_string($x143) ? strcmp($x142, $x143) < 0 : (!is_nan($x147 = JS::toNumber($x142, $global)) && !is_nan($x148 = JS::toNumber($x143, $global)) && $x147 < $x148));
$x136 = $x144; }
if (JS::toBoolean($x136, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x149 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'NaN', 57, 10, '<image>/05_string.js');
$_NaN =& $x149[0]; list(,$WNaN,$SNaN,$UNaN) = $x149;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x150 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 57, 10, '<image>/05_string.js');
$_ReferenceError =& $x150[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x150;
$x151 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 57, 10);
$x152 = $x151($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x152->class) && $x152->class === 'Error' && !isset($x152->properties['file']) && !isset($x152->properties['line']) && !isset($x152->properties['column'])) {$x152->properties['file'] = '<image>/05_string.js';$x152->properties['line'] = 57;$x152->properties['column'] = 10;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 57, 10, '<image>/05_string.js');
}
return $_NaN;;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x154 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 60, 21, '<image>/05_string.js');
$_TypeError =& $x154[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x154;
$x155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x156 = $x155($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x156->class) && $x156->class === 'Error' && !isset($x156->properties['file']) && !isset($x156->properties['line']) && !isset($x156->properties['column'])) {$x156->properties['file'] = '<image>/05_string.js';$x156->properties['line'] = 60;$x156->properties['column'] = 21;$x156->attributes['file'] = $x156->attributes['line'] = $x156->attributes['column'] = 0; }
throw new JSException($x156, 60, 21, '<image>/05_string.js');
}
$x153 = JS::toObject($leThis, $global);
unset($x157, $W157, $S157, $U157);
$x158 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x153, (string) 'charAt', 60, 21, '<image>/05_string.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
if (!(is_object($x157) && isset($x157->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x161 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 60, 21, '<image>/05_string.js');
$_TypeError =& $x161[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x161;
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x163 = $x162($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error' && !isset($x163->properties['file']) && !isset($x163->properties['line']) && !isset($x163->properties['column'])) {$x163->properties['file'] = '<image>/05_string.js';$x163->properties['line'] = 60;$x163->properties['column'] = 21;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 60, 21, '<image>/05_string.js');
}
$x159 = $x157->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x160 = $x159($global, $x153, $x157, array($_pos), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['c'] = JS::$undefined; $_c =& $scope->properties['c'];
$Uc = FALSE;
$_c = $x160;
return ord($_c);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x134=&$scope->properties[\'arguments\'];$x134->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x134->properties[$i]=$args[$i];$x134->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x135=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x135;$x137=JS::toPrimitive($_pos,$global);$x138=JS::toPrimitive(0,$global);$x139=(is_string($x137)&&is_string($x138)?strcmp($x137,$x138)<0:(!is_nan($x140=JS::toNumber($x137,$global))&&!is_nan($x141=JS::toNumber($x138,$global))&&$x140<$x141));$x136=$x139;if(!JS::toBoolean($x136,$global)){unset($x145,$W145,$S145,$U145);$x146=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',56,28,\'<image>/05_string.js\');$x145=&$x146[0];list(,$W145,$S145,$U145)=$x146;$x142=JS::toPrimitive($_pos,$global);$x143=JS::toPrimitive($x145,$global);$x144=!(is_string($x142)&&is_string($x143)?strcmp($x142,$x143)<0:(!is_nan($x147=JS::toNumber($x142,$global))&&!is_nan($x148=JS::toNumber($x143,$global))&&$x147<$x148));$x136=$x144;}if(JS::toBoolean($x136,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x149=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'NaN\',57,10,\'<image>/05_string.js\');$_NaN=&$x149[0];list(,$WNaN,$SNaN,$UNaN)=$x149;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x150=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',57,10,\'<image>/05_string.js\');$_ReferenceError=&$x150[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x150;$x151=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',57,10);$x152=$x151($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x152->class)&&$x152->class===\'Error\'&&!isset($x152->properties[\'file\'])&&!isset($x152->properties[\'line\'])&&!isset($x152->properties[\'column\'])){$x152->properties[\'file\']=\'<image>/05_string.js\';$x152->properties[\'line\']=57;$x152->properties[\'column\']=10;$x152->attributes[\'file\']=$x152->attributes[\'line\']=$x152->attributes[\'column\']=0;}throw new JSException($x152,57,10,\'<image>/05_string.js\');}return$_NaN;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x154=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',60,21,\'<image>/05_string.js\');$_TypeError=&$x154[0];list(,$WTypeError,$STypeError,$UTypeError)=$x154;$x155=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x156=$x155($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x156->class)&&$x156->class===\'Error\'&&!isset($x156->properties[\'file\'])&&!isset($x156->properties[\'line\'])&&!isset($x156->properties[\'column\'])){$x156->properties[\'file\']=\'<image>/05_string.js\';$x156->properties[\'line\']=60;$x156->properties[\'column\']=21;$x156->attributes[\'file\']=$x156->attributes[\'line\']=$x156->attributes[\'column\']=0;}throw new JSException($x156,60,21,\'<image>/05_string.js\');}$x153=JS::toObject($leThis,$global);unset($x157,$W157,$S157,$U157);$x158=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x153,(string)\'charAt\',60,21,\'<image>/05_string.js\');$x157=&$x158[0];list(,$W157,$S157,$U157)=$x158;if(!(is_object($x157)&&isset($x157->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x161=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',60,21,\'<image>/05_string.js\');$_TypeError=&$x161[0];list(,$WTypeError,$STypeError,$UTypeError)=$x161;$x162=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x163=$x162($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x163->class)&&$x163->class===\'Error\'&&!isset($x163->properties[\'file\'])&&!isset($x163->properties[\'line\'])&&!isset($x163->properties[\'column\'])){$x163->properties[\'file\']=\'<image>/05_string.js\';$x163->properties[\'line\']=60;$x163->properties[\'column\']=21;$x163->attributes[\'file\']=$x163->attributes[\'line\']=$x163->attributes[\'column\']=0;}throw new JSException($x163,60,21,\'<image>/05_string.js\');}$x159=$x157->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x160=$x159($global,$x153,$x157,array($_pos),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=$x160;return ord($_c);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x176 =& $scope->properties['arguments'];
$x176->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x176->properties[$i] = $args[$i];
$x176->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['returnString'] = JS::$undefined; $_returnString =& $scope->properties['returnString'];
$UreturnString = FALSE;
$_returnString = $leThis->value;
for ($x177 = 0;; ++$x177) {
if ($x177 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x178 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'arguments', 68, 22, '<image>/05_string.js');
$_arguments =& $x178[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x178;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x179 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 68, 22, '<image>/05_string.js');
$_ReferenceError =& $x179[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x179;
$x180 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 68, 22);
$x181 = $x180($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x181->class) && $x181->class === 'Error' && !isset($x181->properties['file']) && !isset($x181->properties['line']) && !isset($x181->properties['column'])) {$x181->properties['file'] = '<image>/05_string.js';$x181->properties['line'] = 68;$x181->properties['column'] = 22;$x181->attributes['file'] = $x181->attributes['line'] = $x181->attributes['column'] = 0; }
throw new JSException($x181, 68, 22, '<image>/05_string.js');
}
unset($x182, $W182, $S182, $U182);
$x183 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, (string) 'length', 68, 31, '<image>/05_string.js');
$x182 =& $x183[0]; list(,$W182,$S182,$U182) = $x183;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x182;
}
if ($x177 !== 0) {
$x184 = ++$_i;
}
$x185 = JS::toPrimitive($_i, $global);
$x186 = JS::toPrimitive($_l, $global);
$x187 = (is_string($x185) && is_string($x186) ? strcmp($x185, $x186) < 0 : (!is_nan($x188 = JS::toNumber($x185, $global)) && !is_nan($x189 = JS::toNumber($x186, $global)) && $x188 < $x189));
if (!JS::toBoolean($x187, $global)) { break; }

unset($x190, $W190, $S190, $U190);
$x191 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, (string) $_i, 69, 28, '<image>/05_string.js');
$x190 =& $x191[0]; list(,$W190,$S190,$U190) = $x191;
if ($UreturnString) {$global->properties['returnString'] = $_returnString; $_returnString =& $global->properties['returnString']; }
$x192 = JS::toPrimitive($_returnString, $global);
$x193 = JS::toPrimitive($x190, $global);
$_returnString = (is_string($x192) || is_string($x193) ? JS::toString($x192, $global) . JS::toString($x193, $global) : JS::toNumber($x192, $global) + JS::toNumber($x193, $global));;
};
return $_returnString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x176=&$scope->properties[\'arguments\'];$x176->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x176->properties[$i]=$args[$i];$x176->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'returnString\']=JS::$undefined;$_returnString=&$scope->properties[\'returnString\'];$UreturnString=FALSE;$_returnString=$leThis->value;for($x177=0;;++$x177){if($x177===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x178=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'arguments\',68,22,\'<image>/05_string.js\');$_arguments=&$x178[0];list(,$Warguments,$Sarguments,$Uarguments)=$x178;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x179=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',68,22,\'<image>/05_string.js\');$_ReferenceError=&$x179[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x179;$x180=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',68,22);$x181=$x180($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x181->class)&&$x181->class===\'Error\'&&!isset($x181->properties[\'file\'])&&!isset($x181->properties[\'line\'])&&!isset($x181->properties[\'column\'])){$x181->properties[\'file\']=\'<image>/05_string.js\';$x181->properties[\'line\']=68;$x181->properties[\'column\']=22;$x181->attributes[\'file\']=$x181->attributes[\'line\']=$x181->attributes[\'column\']=0;}throw new JSException($x181,68,22,\'<image>/05_string.js\');}unset($x182,$W182,$S182,$U182);$x183=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)\'length\',68,31,\'<image>/05_string.js\');$x182=&$x183[0];list(,$W182,$S182,$U182)=$x183;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x182;}if($x177!==0){$x184=++$_i;}$x185=JS::toPrimitive($_i,$global);$x186=JS::toPrimitive($_l,$global);$x187=(is_string($x185)&&is_string($x186)?strcmp($x185,$x186)<0:(!is_nan($x188=JS::toNumber($x185,$global))&&!is_nan($x189=JS::toNumber($x186,$global))&&$x188<$x189));if(!JS::toBoolean($x187,$global)){break;}unset($x190,$W190,$S190,$U190);$x191=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,(string)$_i,69,28,\'<image>/05_string.js\');$x190=&$x191[0];list(,$W190,$S190,$U190)=$x191;if($UreturnString){$global->properties[\'returnString\']=$_returnString;$_returnString=&$global->properties[\'returnString\'];}$x192=JS::toPrimitive($_returnString,$global);$x193=JS::toPrimitive($x190,$global);$_returnString=(is_string($x192)||is_string($x193)?JS::toString($x192,$global).JS::toString($x193,$global):JS::toNumber($x192,$global)+JS::toNumber($x193,$global));}return$_returnString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_10($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x207 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x207, $global)) {
$x208 = 0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x208;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x209 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 80, 15, '<image>/05_string.js');
$_Math =& $x209[0]; list(,$WMath,$SMath,$UMath) = $x209;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x210 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 80, 15, '<image>/05_string.js');
$_ReferenceError =& $x210[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x210;
$x211 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 15);
$x212 = $x211($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x212->class) && $x212->class === 'Error' && !isset($x212->properties['file']) && !isset($x212->properties['line']) && !isset($x212->properties['column'])) {$x212->properties['file'] = '<image>/05_string.js';$x212->properties['line'] = 80;$x212->properties['column'] = 15;$x212->attributes['file'] = $x212->attributes['line'] = $x212->attributes['column'] = 0; }
throw new JSException($x212, 80, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x214 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 23, '<image>/05_string.js');
$_TypeError =& $x214[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x214;
$x215 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x216 = $x215($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x216->class) && $x216->class === 'Error' && !isset($x216->properties['file']) && !isset($x216->properties['line']) && !isset($x216->properties['column'])) {$x216->properties['file'] = '<image>/05_string.js';$x216->properties['line'] = 80;$x216->properties['column'] = 23;$x216->attributes['file'] = $x216->attributes['line'] = $x216->attributes['column'] = 0; }
throw new JSException($x216, 80, 23, '<image>/05_string.js');
}
$x213 = JS::toObject($_Math, $global);
unset($x217, $W217, $S217, $U217);
$x218 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x213, (string) 'min', 80, 23, '<image>/05_string.js');
$x217 =& $x218[0]; list(,$W217,$S217,$U217) = $x218;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x220 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 32, '<image>/05_string.js');
$_TypeError =& $x220[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x220;
$x221 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x222 = $x221($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x222->class) && $x222->class === 'Error' && !isset($x222->properties['file']) && !isset($x222->properties['line']) && !isset($x222->properties['column'])) {$x222->properties['file'] = '<image>/05_string.js';$x222->properties['line'] = 80;$x222->properties['column'] = 32;$x222->attributes['file'] = $x222->attributes['line'] = $x222->attributes['column'] = 0; }
throw new JSException($x222, 80, 32, '<image>/05_string.js');
}
$x219 = JS::toObject($_Math, $global);
unset($x223, $W223, $S223, $U223);
$x224 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x219, (string) 'max', 80, 32, '<image>/05_string.js');
$x223 =& $x224[0]; list(,$W223,$S223,$U223) = $x224;
if (!(is_object($x223) && isset($x223->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x227 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 32, '<image>/05_string.js');
$_TypeError =& $x227[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x227;
$x228 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x229 = $x228($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x229->class) && $x229->class === 'Error' && !isset($x229->properties['file']) && !isset($x229->properties['line']) && !isset($x229->properties['column'])) {$x229->properties['file'] = '<image>/05_string.js';$x229->properties['line'] = 80;$x229->properties['column'] = 32;$x229->attributes['file'] = $x229->attributes['line'] = $x229->attributes['column'] = 0; }
throw new JSException($x229, 80, 32, '<image>/05_string.js');
}
$x225 = $x223->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x226 = $x225($global, $x219, $x223, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x217) && isset($x217->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x232 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 80, 23, '<image>/05_string.js');
$_TypeError =& $x232[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x232;
$x233 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x234 = $x233($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x234->class) && $x234->class === 'Error' && !isset($x234->properties['file']) && !isset($x234->properties['line']) && !isset($x234->properties['column'])) {$x234->properties['file'] = '<image>/05_string.js';$x234->properties['line'] = 80;$x234->properties['column'] = 23;$x234->attributes['file'] = $x234->attributes['line'] = $x234->attributes['column'] = 0; }
throw new JSException($x234, 80, 23, '<image>/05_string.js');
}
$x230 = $x217->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x231 = $x230($global, $x213, $x217, array($x226, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x231;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strpos($leThis->value, JS::toString($_search, $global),$_offset);
$x235 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x235, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x206=&$scope->properties[\'arguments\'];$x206->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x206->properties[$i]=$args[$i];$x206->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x207=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x207,$global)){$x208=0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x208;}unset($_Math,$WMath,$SMath,$UMath);$x209=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',80,15,\'<image>/05_string.js\');$_Math=&$x209[0];list(,$WMath,$SMath,$UMath)=$x209;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x210=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',80,15,\'<image>/05_string.js\');$_ReferenceError=&$x210[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x210;$x211=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,15);$x212=$x211($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x212->class)&&$x212->class===\'Error\'&&!isset($x212->properties[\'file\'])&&!isset($x212->properties[\'line\'])&&!isset($x212->properties[\'column\'])){$x212->properties[\'file\']=\'<image>/05_string.js\';$x212->properties[\'line\']=80;$x212->properties[\'column\']=15;$x212->attributes[\'file\']=$x212->attributes[\'line\']=$x212->attributes[\'column\']=0;}throw new JSException($x212,80,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x214=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,23,\'<image>/05_string.js\');$_TypeError=&$x214[0];list(,$WTypeError,$STypeError,$UTypeError)=$x214;$x215=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x216=$x215($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x216->class)&&$x216->class===\'Error\'&&!isset($x216->properties[\'file\'])&&!isset($x216->properties[\'line\'])&&!isset($x216->properties[\'column\'])){$x216->properties[\'file\']=\'<image>/05_string.js\';$x216->properties[\'line\']=80;$x216->properties[\'column\']=23;$x216->attributes[\'file\']=$x216->attributes[\'line\']=$x216->attributes[\'column\']=0;}throw new JSException($x216,80,23,\'<image>/05_string.js\');}$x213=JS::toObject($_Math,$global);unset($x217,$W217,$S217,$U217);$x218=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x213,(string)\'min\',80,23,\'<image>/05_string.js\');$x217=&$x218[0];list(,$W217,$S217,$U217)=$x218;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x220=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,32,\'<image>/05_string.js\');$_TypeError=&$x220[0];list(,$WTypeError,$STypeError,$UTypeError)=$x220;$x221=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x222=$x221($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x222->class)&&$x222->class===\'Error\'&&!isset($x222->properties[\'file\'])&&!isset($x222->properties[\'line\'])&&!isset($x222->properties[\'column\'])){$x222->properties[\'file\']=\'<image>/05_string.js\';$x222->properties[\'line\']=80;$x222->properties[\'column\']=32;$x222->attributes[\'file\']=$x222->attributes[\'line\']=$x222->attributes[\'column\']=0;}throw new JSException($x222,80,32,\'<image>/05_string.js\');}$x219=JS::toObject($_Math,$global);unset($x223,$W223,$S223,$U223);$x224=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x219,(string)\'max\',80,32,\'<image>/05_string.js\');$x223=&$x224[0];list(,$W223,$S223,$U223)=$x224;if(!(is_object($x223)&&isset($x223->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x227=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,32,\'<image>/05_string.js\');$_TypeError=&$x227[0];list(,$WTypeError,$STypeError,$UTypeError)=$x227;$x228=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x229=$x228($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x229->class)&&$x229->class===\'Error\'&&!isset($x229->properties[\'file\'])&&!isset($x229->properties[\'line\'])&&!isset($x229->properties[\'column\'])){$x229->properties[\'file\']=\'<image>/05_string.js\';$x229->properties[\'line\']=80;$x229->properties[\'column\']=32;$x229->attributes[\'file\']=$x229->attributes[\'line\']=$x229->attributes[\'column\']=0;}throw new JSException($x229,80,32,\'<image>/05_string.js\');}$x225=$x223->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x226=$x225($global,$x219,$x223,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x217)&&isset($x217->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x232=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',80,23,\'<image>/05_string.js\');$_TypeError=&$x232[0];list(,$WTypeError,$STypeError,$UTypeError)=$x232;$x233=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x234=$x233($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x234->class)&&$x234->class===\'Error\'&&!isset($x234->properties[\'file\'])&&!isset($x234->properties[\'line\'])&&!isset($x234->properties[\'column\'])){$x234->properties[\'file\']=\'<image>/05_string.js\';$x234->properties[\'line\']=80;$x234->properties[\'column\']=23;$x234->attributes[\'file\']=$x234->attributes[\'line\']=$x234->attributes[\'column\']=0;}throw new JSException($x234,80,23,\'<image>/05_string.js\');}$x230=$x217->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x231=$x230($global,$x213,$x217,array($x226,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x231;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strpos($leThis->value,JS::toString($_search,$global),$_offset);$x235=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x235,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x248 =& $scope->properties['arguments'];
$x248->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x248->properties[$i] = $args[$i];
$x248->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x249 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x249, $global)) {
$x250 = 0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x250;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x251 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 95, 15, '<image>/05_string.js');
$_Math =& $x251[0]; list(,$WMath,$SMath,$UMath) = $x251;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x252 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 95, 15, '<image>/05_string.js');
$_ReferenceError =& $x252[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x252;
$x253 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 15);
$x254 = $x253($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x254->class) && $x254->class === 'Error' && !isset($x254->properties['file']) && !isset($x254->properties['line']) && !isset($x254->properties['column'])) {$x254->properties['file'] = '<image>/05_string.js';$x254->properties['line'] = 95;$x254->properties['column'] = 15;$x254->attributes['file'] = $x254->attributes['line'] = $x254->attributes['column'] = 0; }
throw new JSException($x254, 95, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x256 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 23, '<image>/05_string.js');
$_TypeError =& $x256[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x256;
$x257 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x258 = $x257($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x258->class) && $x258->class === 'Error' && !isset($x258->properties['file']) && !isset($x258->properties['line']) && !isset($x258->properties['column'])) {$x258->properties['file'] = '<image>/05_string.js';$x258->properties['line'] = 95;$x258->properties['column'] = 23;$x258->attributes['file'] = $x258->attributes['line'] = $x258->attributes['column'] = 0; }
throw new JSException($x258, 95, 23, '<image>/05_string.js');
}
$x255 = JS::toObject($_Math, $global);
unset($x259, $W259, $S259, $U259);
$x260 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x255, (string) 'min', 95, 23, '<image>/05_string.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x262 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 32, '<image>/05_string.js');
$_TypeError =& $x262[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x262;
$x263 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x264 = $x263($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x264->class) && $x264->class === 'Error' && !isset($x264->properties['file']) && !isset($x264->properties['line']) && !isset($x264->properties['column'])) {$x264->properties['file'] = '<image>/05_string.js';$x264->properties['line'] = 95;$x264->properties['column'] = 32;$x264->attributes['file'] = $x264->attributes['line'] = $x264->attributes['column'] = 0; }
throw new JSException($x264, 95, 32, '<image>/05_string.js');
}
$x261 = JS::toObject($_Math, $global);
unset($x265, $W265, $S265, $U265);
$x266 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x261, (string) 'max', 95, 32, '<image>/05_string.js');
$x265 =& $x266[0]; list(,$W265,$S265,$U265) = $x266;
if (!(is_object($x265) && isset($x265->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x269 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 32, '<image>/05_string.js');
$_TypeError =& $x269[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x269;
$x270 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x271 = $x270($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x271->class) && $x271->class === 'Error' && !isset($x271->properties['file']) && !isset($x271->properties['line']) && !isset($x271->properties['column'])) {$x271->properties['file'] = '<image>/05_string.js';$x271->properties['line'] = 95;$x271->properties['column'] = 32;$x271->attributes['file'] = $x271->attributes['line'] = $x271->attributes['column'] = 0; }
throw new JSException($x271, 95, 32, '<image>/05_string.js');
}
$x267 = $x265->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x268 = $x267($global, $x261, $x265, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x259) && isset($x259->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x274 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 95, 23, '<image>/05_string.js');
$_TypeError =& $x274[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x274;
$x275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x276 = $x275($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x276->class) && $x276->class === 'Error' && !isset($x276->properties['file']) && !isset($x276->properties['line']) && !isset($x276->properties['column'])) {$x276->properties['file'] = '<image>/05_string.js';$x276->properties['line'] = 95;$x276->properties['column'] = 23;$x276->attributes['file'] = $x276->attributes['line'] = $x276->attributes['column'] = 0; }
throw new JSException($x276, 95, 23, '<image>/05_string.js');
}
$x272 = $x259->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x273 = $x272($global, $x255, $x259, array($x268, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x273;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strrpos($leThis->value, JS::toString($_search, $global),$_offset);
$x277 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x277, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x248=&$scope->properties[\'arguments\'];$x248->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x248->properties[$i]=$args[$i];$x248->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x249=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x249,$global)){$x250=0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x250;}unset($_Math,$WMath,$SMath,$UMath);$x251=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',95,15,\'<image>/05_string.js\');$_Math=&$x251[0];list(,$WMath,$SMath,$UMath)=$x251;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x252=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',95,15,\'<image>/05_string.js\');$_ReferenceError=&$x252[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x252;$x253=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,15);$x254=$x253($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x254->class)&&$x254->class===\'Error\'&&!isset($x254->properties[\'file\'])&&!isset($x254->properties[\'line\'])&&!isset($x254->properties[\'column\'])){$x254->properties[\'file\']=\'<image>/05_string.js\';$x254->properties[\'line\']=95;$x254->properties[\'column\']=15;$x254->attributes[\'file\']=$x254->attributes[\'line\']=$x254->attributes[\'column\']=0;}throw new JSException($x254,95,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x256=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,23,\'<image>/05_string.js\');$_TypeError=&$x256[0];list(,$WTypeError,$STypeError,$UTypeError)=$x256;$x257=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x258=$x257($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x258->class)&&$x258->class===\'Error\'&&!isset($x258->properties[\'file\'])&&!isset($x258->properties[\'line\'])&&!isset($x258->properties[\'column\'])){$x258->properties[\'file\']=\'<image>/05_string.js\';$x258->properties[\'line\']=95;$x258->properties[\'column\']=23;$x258->attributes[\'file\']=$x258->attributes[\'line\']=$x258->attributes[\'column\']=0;}throw new JSException($x258,95,23,\'<image>/05_string.js\');}$x255=JS::toObject($_Math,$global);unset($x259,$W259,$S259,$U259);$x260=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x255,(string)\'min\',95,23,\'<image>/05_string.js\');$x259=&$x260[0];list(,$W259,$S259,$U259)=$x260;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x262=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,32,\'<image>/05_string.js\');$_TypeError=&$x262[0];list(,$WTypeError,$STypeError,$UTypeError)=$x262;$x263=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x264=$x263($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x264->class)&&$x264->class===\'Error\'&&!isset($x264->properties[\'file\'])&&!isset($x264->properties[\'line\'])&&!isset($x264->properties[\'column\'])){$x264->properties[\'file\']=\'<image>/05_string.js\';$x264->properties[\'line\']=95;$x264->properties[\'column\']=32;$x264->attributes[\'file\']=$x264->attributes[\'line\']=$x264->attributes[\'column\']=0;}throw new JSException($x264,95,32,\'<image>/05_string.js\');}$x261=JS::toObject($_Math,$global);unset($x265,$W265,$S265,$U265);$x266=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x261,(string)\'max\',95,32,\'<image>/05_string.js\');$x265=&$x266[0];list(,$W265,$S265,$U265)=$x266;if(!(is_object($x265)&&isset($x265->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x269=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,32,\'<image>/05_string.js\');$_TypeError=&$x269[0];list(,$WTypeError,$STypeError,$UTypeError)=$x269;$x270=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x271=$x270($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x271->class)&&$x271->class===\'Error\'&&!isset($x271->properties[\'file\'])&&!isset($x271->properties[\'line\'])&&!isset($x271->properties[\'column\'])){$x271->properties[\'file\']=\'<image>/05_string.js\';$x271->properties[\'line\']=95;$x271->properties[\'column\']=32;$x271->attributes[\'file\']=$x271->attributes[\'line\']=$x271->attributes[\'column\']=0;}throw new JSException($x271,95,32,\'<image>/05_string.js\');}$x267=$x265->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x268=$x267($global,$x261,$x265,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x259)&&isset($x259->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x274=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',95,23,\'<image>/05_string.js\');$_TypeError=&$x274[0];list(,$WTypeError,$STypeError,$UTypeError)=$x274;$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x276=$x275($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'&&!isset($x276->properties[\'file\'])&&!isset($x276->properties[\'line\'])&&!isset($x276->properties[\'column\'])){$x276->properties[\'file\']=\'<image>/05_string.js\';$x276->properties[\'line\']=95;$x276->properties[\'column\']=23;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,95,23,\'<image>/05_string.js\');}$x272=$x259->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x273=$x272($global,$x255,$x259,array($x268,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x273;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strrpos($leThis->value,JS::toString($_search,$global),$_offset);$x277=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x277,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x290 =& $scope->properties['arguments'];
$x290->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x290->properties[$i] = $args[$i];
$x290->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['that'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_that =& $scope->properties['that'];
$Uthat = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value === JS::toString($_that, $global);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x290=&$scope->properties[\'arguments\'];$x290->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x290->properties[$i]=$args[$i];$x290->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'that\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_that=&$scope->properties[\'that\'];$Uthat=FALSE;$global->scope[++$global->scope_sp]=$scope;return$leThis->value===JS::toString($_that,$global);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x303 =& $scope->properties['arguments'];
$x303->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x303->properties[$i] = $args[$i];
$x303->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['regexp'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_regexp =& $scope->properties['regexp'];
$Uregexp = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_regexp) && isset($_regexp->class) &&$_regexp->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x306 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 111, 16, '<image>/05_string.js');
$_RegExp =& $x306[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x306;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x307 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 111, 16, '<image>/05_string.js');
$_ReferenceError =& $x307[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x307;
$x308 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 16);
$x309 = $x308($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x309->class) && $x309->class === 'Error' && !isset($x309->properties['file']) && !isset($x309->properties['line']) && !isset($x309->properties['column'])) {$x309->properties['file'] = '<image>/05_string.js';$x309->properties['line'] = 111;$x309->properties['column'] = 16;$x309->attributes['file'] = $x309->attributes['line'] = $x309->attributes['column'] = 0; }
throw new JSException($x309, 111, 16, '<image>/05_string.js');
}
$x304 = clone JS::$objectTemplate;
unset($x310, $W310, $S310, $U310);
$x311 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 111, 12, '<image>/05_string.js');
$x310 =& $x311[0]; list(,$W310,$S310,$U310) = $x311;
$x305 = $x310;
$x304->prototype = $x305;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x314 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 111, 12, '<image>/05_string.js');
$_TypeError =& $x314[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x314;
$x315 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x316 = $x315($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x316->class) && $x316->class === 'Error' && !isset($x316->properties['file']) && !isset($x316->properties['line']) && !isset($x316->properties['column'])) {$x316->properties['file'] = '<image>/05_string.js';$x316->properties['line'] = 111;$x316->properties['column'] = 12;$x316->attributes['file'] = $x316->attributes['line'] = $x316->attributes['column'] = 0; }
throw new JSException($x316, 111, 12, '<image>/05_string.js');
}
$x312 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x313 = $x312($global, $x304, $_RegExp, array($_regexp), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x305 = $x313;
if (is_object($x305) && $x305 !== JS::$undefined) { $x304 = $x305; }
if ($Uregexp) {$global->properties['regexp'] = $_regexp; $_regexp =& $global->properties['regexp']; }
$_regexp = $x304;;
};
unset($x317, $W317, $S317, $U317);
$x318 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'global', 114, 13, '<image>/05_string.js');
$x317 =& $x318[0]; list(,$W317,$S317,$U317) = $x318;
if (JS::toBoolean((!JS::toBoolean($x317, $global)), $global)) {
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x320 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 115, 21, '<image>/05_string.js');
$_TypeError =& $x320[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x320;
$x321 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x322 = $x321($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x322->class) && $x322->class === 'Error' && !isset($x322->properties['file']) && !isset($x322->properties['line']) && !isset($x322->properties['column'])) {$x322->properties['file'] = '<image>/05_string.js';$x322->properties['line'] = 115;$x322->properties['column'] = 21;$x322->attributes['file'] = $x322->attributes['line'] = $x322->attributes['column'] = 0; }
throw new JSException($x322, 115, 21, '<image>/05_string.js');
}
$x319 = JS::toObject($_regexp, $global);
unset($x323, $W323, $S323, $U323);
$x324 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x319, (string) 'exec', 115, 21, '<image>/05_string.js');
$x323 =& $x324[0]; list(,$W323,$S323,$U323) = $x324;
if (!(is_object($x323) && isset($x323->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x327 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 115, 21, '<image>/05_string.js');
$_TypeError =& $x327[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x327;
$x328 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x329 = $x328($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x329->class) && $x329->class === 'Error' && !isset($x329->properties['file']) && !isset($x329->properties['line']) && !isset($x329->properties['column'])) {$x329->properties['file'] = '<image>/05_string.js';$x329->properties['line'] = 115;$x329->properties['column'] = 21;$x329->attributes['file'] = $x329->attributes['line'] = $x329->attributes['column'] = 0; }
throw new JSException($x329, 115, 21, '<image>/05_string.js');
}
$x325 = $x323->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x326 = $x325($global, $x319, $x323, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x326;;
};
$x330 = clone JS::$arrayTemplate;
$x330->properties['length'] = 0;
$x330->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x330;
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = 0;
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['currentLastIndex'] = JS::$undefined; $_currentLastIndex =& $scope->properties['currentLastIndex'];
$UcurrentLastIndex = FALSE;
$_currentLastIndex = JS::$undefined;
$x331 = 0;
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x332 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 120, 19, '<image>/05_string.js');
$_TypeError =& $x332[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x332;
$x333 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x334 = $x333($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x334->class) && $x334->class === 'Error' && !isset($x334->properties['file']) && !isset($x334->properties['line']) && !isset($x334->properties['column'])) {$x334->properties['file'] = '<image>/05_string.js';$x334->properties['line'] = 120;$x334->properties['column'] = 19;$x334->attributes['file'] = $x334->attributes['line'] = $x334->attributes['column'] = 0; }
throw new JSException($x334, 120, 19, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x335, $W335, $S335, $U335);
$x336 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, (string) 'lastIndex', 120, 19, '<image>/05_string.js');
$x335 =& $x336[0]; list(,$W335,$S335,$U335) = $x336;
if ($U335 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties['lastIndex'] = $x335; $x335 =& $_regexp->properties['lastIndex']; $_regexp->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U335 = FALSE; $W335 = TRUE; }
if (isset($S335)) {
$x338 = $S335->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x339 = $x338($global, $_regexp, $S335, array($x331), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x337 = $x339;
} else {
if (!$U335) {$x337 = $x331;if ($W335) { $x335 = $x331; }  }
else { $x337 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; };
for ($x340 = 0;; ++$x340) {
if ($x340 === 0) {
$scope->properties['previousLastIndex'] = JS::$undefined; $_previousLastIndex =& $scope->properties['previousLastIndex'];
$UpreviousLastIndex = FALSE;
$_previousLastIndex = 0;
$scope->properties['lastMatch'] = JS::$undefined; $_lastMatch =& $scope->properties['lastMatch'];
$UlastMatch = FALSE;
$_lastMatch = true;
}
if ($x340 !== 0) {
$x341 = ++$_n;
}

if (!JS::toBoolean($_lastMatch, $global)) { break; }

if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x343 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 123, 22, '<image>/05_string.js');
$_TypeError =& $x343[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x343;
$x344 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x345 = $x344($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x345->class) && $x345->class === 'Error' && !isset($x345->properties['file']) && !isset($x345->properties['line']) && !isset($x345->properties['column'])) {$x345->properties['file'] = '<image>/05_string.js';$x345->properties['line'] = 123;$x345->properties['column'] = 22;$x345->attributes['file'] = $x345->attributes['line'] = $x345->attributes['column'] = 0; }
throw new JSException($x345, 123, 22, '<image>/05_string.js');
}
$x342 = JS::toObject($_regexp, $global);
unset($x346, $W346, $S346, $U346);
$x347 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x342, (string) 'exec', 123, 22, '<image>/05_string.js');
$x346 =& $x347[0]; list(,$W346,$S346,$U346) = $x347;
if (!(is_object($x346) && isset($x346->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x350 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 123, 22, '<image>/05_string.js');
$_TypeError =& $x350[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x350;
$x351 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x352 = $x351($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x352->class) && $x352->class === 'Error' && !isset($x352->properties['file']) && !isset($x352->properties['line']) && !isset($x352->properties['column'])) {$x352->properties['file'] = '<image>/05_string.js';$x352->properties['line'] = 123;$x352->properties['column'] = 22;$x352->attributes['file'] = $x352->attributes['line'] = $x352->attributes['column'] = 0; }
throw new JSException($x352, 123, 22, '<image>/05_string.js');
}
$x348 = $x346->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x349 = $x348($global, $x342, $x346, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x349;
$x353 = (!JS::toBoolean((!JS::toBoolean($_match, $global)), $global));
if ($UlastMatch) {$global->properties['lastMatch'] = $_lastMatch; $_lastMatch =& $global->properties['lastMatch']; }
$_lastMatch = $x353;
if (JS::toBoolean($_match, $global)) {
unset($x355, $W355, $S355, $U355);
$x356 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'lastIndex', 127, 14, '<image>/05_string.js');
$x355 =& $x356[0]; list(,$W355,$S355,$U355) = $x356;
$x354 = (((gettype($x355) === gettype($_previousLastIndex) && $x355 === $_previousLastIndex))|| (((is_float($x355) || is_int($x355)) && (is_float($_previousLastIndex) || is_int($_previousLastIndex))) && $x355 == $_previousLastIndex));
if (JS::toBoolean($x354, $global)) {
unset($x359, $W359, $S359, $U359);
$x360 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'lastIndex', 128, 50, '<image>/05_string.js');
$x359 =& $x360[0]; list(,$W359,$S359,$U359) = $x360;
$x357 = JS::toPrimitive($x359, $global);
$x358 = JS::toPrimitive(1, $global);
$x361 = (is_string($x357) || is_string($x358) ? JS::toString($x357, $global) . JS::toString($x358, $global) : JS::toNumber($x357, $global) + JS::toNumber($x358, $global));
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x362 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 128, 42, '<image>/05_string.js');
$_TypeError =& $x362[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x362;
$x363 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x364 = $x363($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x364->class) && $x364->class === 'Error' && !isset($x364->properties['file']) && !isset($x364->properties['line']) && !isset($x364->properties['column'])) {$x364->properties['file'] = '<image>/05_string.js';$x364->properties['line'] = 128;$x364->properties['column'] = 42;$x364->attributes['file'] = $x364->attributes['line'] = $x364->attributes['column'] = 0; }
throw new JSException($x364, 128, 42, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x365, $W365, $S365, $U365);
$x366 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, (string) 'lastIndex', 128, 42, '<image>/05_string.js');
$x365 =& $x366[0]; list(,$W365,$S365,$U365) = $x366;
if ($U365 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties['lastIndex'] = $x365; $x365 =& $_regexp->properties['lastIndex']; $_regexp->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U365 = FALSE; $W365 = TRUE; }
if (isset($S365)) {
$x368 = $S365->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x369 = $x368($global, $_regexp, $S365, array($x361), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x367 = $x369;
} else {
if (!$U365) {$x367 = $x361;if ($W365) { $x365 = $x361; }  }
else { $x367 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; }
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x367;;
}
else {
unset($x370, $W370, $S370, $U370);
$x371 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, (string) 'lastIndex', 130, 31, '<image>/05_string.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x370;;
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x373 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 133, 20, '<image>/05_string.js');
$_TypeError =& $x373[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x373;
$x374 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x375 = $x374($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x375->class) && $x375->class === 'Error' && !isset($x375->properties['file']) && !isset($x375->properties['line']) && !isset($x375->properties['column'])) {$x375->properties['file'] = '<image>/05_string.js';$x375->properties['line'] = 133;$x375->properties['column'] = 20;$x375->attributes['file'] = $x375->attributes['line'] = $x375->attributes['column'] = 0; }
throw new JSException($x375, 133, 20, '<image>/05_string.js');
}
$x372 = JS::toObject($_returnArray, $global);
unset($x376, $W376, $S376, $U376);
$x377 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x372, (string) 'push', 133, 20, '<image>/05_string.js');
$x376 =& $x377[0]; list(,$W376,$S376,$U376) = $x377;
unset($x378, $W378, $S378, $U378);
$x379 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 133, 26, '<image>/05_string.js');
$x378 =& $x379[0]; list(,$W378,$S378,$U378) = $x379;
if (!(is_object($x376) && isset($x376->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x382 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 133, 20, '<image>/05_string.js');
$_TypeError =& $x382[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x382;
$x383 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x384 = $x383($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x384->class) && $x384->class === 'Error' && !isset($x384->properties['file']) && !isset($x384->properties['line']) && !isset($x384->properties['column'])) {$x384->properties['file'] = '<image>/05_string.js';$x384->properties['line'] = 133;$x384->properties['column'] = 20;$x384->attributes['file'] = $x384->attributes['line'] = $x384->attributes['column'] = 0; }
throw new JSException($x384, 133, 20, '<image>/05_string.js');
}
$x380 = $x376->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x381 = $x380($global, $x372, $x376, array($x378), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};;
};
$x385 = (((gettype($_n) === gettype(0) && $_n === 0))|| (((is_float($_n) || is_int($_n)) && (is_float(0) || is_int(0))) && $_n == 0));
if (JS::toBoolean($x385, $global)) {

return NULL;;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x303=&$scope->properties[\'arguments\'];$x303->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x303->properties[$i]=$args[$i];$x303->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'regexp\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_regexp=&$scope->properties[\'regexp\'];$Uregexp=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_regexp)&&isset($_regexp->class)&&$_regexp->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x306=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',111,16,\'<image>/05_string.js\');$_RegExp=&$x306[0];list(,$WRegExp,$SRegExp,$URegExp)=$x306;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x307=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',111,16,\'<image>/05_string.js\');$_ReferenceError=&$x307[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x307;$x308=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,16);$x309=$x308($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x309->class)&&$x309->class===\'Error\'&&!isset($x309->properties[\'file\'])&&!isset($x309->properties[\'line\'])&&!isset($x309->properties[\'column\'])){$x309->properties[\'file\']=\'<image>/05_string.js\';$x309->properties[\'line\']=111;$x309->properties[\'column\']=16;$x309->attributes[\'file\']=$x309->attributes[\'line\']=$x309->attributes[\'column\']=0;}throw new JSException($x309,111,16,\'<image>/05_string.js\');}$x304=clone JS::$objectTemplate;unset($x310,$W310,$S310,$U310);$x311=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',111,12,\'<image>/05_string.js\');$x310=&$x311[0];list(,$W310,$S310,$U310)=$x311;$x305=$x310;$x304->prototype=$x305;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x314=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',111,12,\'<image>/05_string.js\');$_TypeError=&$x314[0];list(,$WTypeError,$STypeError,$UTypeError)=$x314;$x315=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x316=$x315($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x316->class)&&$x316->class===\'Error\'&&!isset($x316->properties[\'file\'])&&!isset($x316->properties[\'line\'])&&!isset($x316->properties[\'column\'])){$x316->properties[\'file\']=\'<image>/05_string.js\';$x316->properties[\'line\']=111;$x316->properties[\'column\']=12;$x316->attributes[\'file\']=$x316->attributes[\'line\']=$x316->attributes[\'column\']=0;}throw new JSException($x316,111,12,\'<image>/05_string.js\');}$x312=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x313=$x312($global,$x304,$_RegExp,array($_regexp),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x305=$x313;if(is_object($x305)&&$x305!==JS::$undefined){$x304=$x305;}if($Uregexp){$global->properties[\'regexp\']=$_regexp;$_regexp=&$global->properties[\'regexp\'];}$_regexp=$x304;}unset($x317,$W317,$S317,$U317);$x318=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'global\',114,13,\'<image>/05_string.js\');$x317=&$x318[0];list(,$W317,$S317,$U317)=$x318;if(JS::toBoolean((!JS::toBoolean($x317,$global)),$global)){if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x320=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',115,21,\'<image>/05_string.js\');$_TypeError=&$x320[0];list(,$WTypeError,$STypeError,$UTypeError)=$x320;$x321=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x322=$x321($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x322->class)&&$x322->class===\'Error\'&&!isset($x322->properties[\'file\'])&&!isset($x322->properties[\'line\'])&&!isset($x322->properties[\'column\'])){$x322->properties[\'file\']=\'<image>/05_string.js\';$x322->properties[\'line\']=115;$x322->properties[\'column\']=21;$x322->attributes[\'file\']=$x322->attributes[\'line\']=$x322->attributes[\'column\']=0;}throw new JSException($x322,115,21,\'<image>/05_string.js\');}$x319=JS::toObject($_regexp,$global);unset($x323,$W323,$S323,$U323);$x324=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x319,(string)\'exec\',115,21,\'<image>/05_string.js\');$x323=&$x324[0];list(,$W323,$S323,$U323)=$x324;if(!(is_object($x323)&&isset($x323->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x327=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',115,21,\'<image>/05_string.js\');$_TypeError=&$x327[0];list(,$WTypeError,$STypeError,$UTypeError)=$x327;$x328=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x329=$x328($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x329->class)&&$x329->class===\'Error\'&&!isset($x329->properties[\'file\'])&&!isset($x329->properties[\'line\'])&&!isset($x329->properties[\'column\'])){$x329->properties[\'file\']=\'<image>/05_string.js\';$x329->properties[\'line\']=115;$x329->properties[\'column\']=21;$x329->attributes[\'file\']=$x329->attributes[\'line\']=$x329->attributes[\'column\']=0;}throw new JSException($x329,115,21,\'<image>/05_string.js\');}$x325=$x323->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x326=$x325($global,$x319,$x323,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x326;}$x330=clone JS::$arrayTemplate;$x330->properties[\'length\']=0;$x330->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x330;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=0;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'currentLastIndex\']=JS::$undefined;$_currentLastIndex=&$scope->properties[\'currentLastIndex\'];$UcurrentLastIndex=FALSE;$_currentLastIndex=JS::$undefined;$x331=0;if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x332=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',120,19,\'<image>/05_string.js\');$_TypeError=&$x332[0];list(,$WTypeError,$STypeError,$UTypeError)=$x332;$x333=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x334=$x333($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x334->class)&&$x334->class===\'Error\'&&!isset($x334->properties[\'file\'])&&!isset($x334->properties[\'line\'])&&!isset($x334->properties[\'column\'])){$x334->properties[\'file\']=\'<image>/05_string.js\';$x334->properties[\'line\']=120;$x334->properties[\'column\']=19;$x334->attributes[\'file\']=$x334->attributes[\'line\']=$x334->attributes[\'column\']=0;}throw new JSException($x334,120,19,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x335,$W335,$S335,$U335);$x336=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,(string)\'lastIndex\',120,19,\'<image>/05_string.js\');$x335=&$x336[0];list(,$W335,$S335,$U335)=$x336;if($U335&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[\'lastIndex\']=$x335;$x335=&$_regexp->properties[\'lastIndex\'];$_regexp->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U335=FALSE;$W335=TRUE;}if(isset($S335)){$x338=$S335->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x339=$x338($global,$_regexp,$S335,array($x331),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x337=$x339;}else{if(!$U335){$x337=$x331;if($W335){$x335=$x331;}}else{$x337=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}for($x340=0;;++$x340){if($x340===0){$scope->properties[\'previousLastIndex\']=JS::$undefined;$_previousLastIndex=&$scope->properties[\'previousLastIndex\'];$UpreviousLastIndex=FALSE;$_previousLastIndex=0;$scope->properties[\'lastMatch\']=JS::$undefined;$_lastMatch=&$scope->properties[\'lastMatch\'];$UlastMatch=FALSE;$_lastMatch=true;}if($x340!==0){$x341=++$_n;}if(!JS::toBoolean($_lastMatch,$global)){break;}if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x343=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',123,22,\'<image>/05_string.js\');$_TypeError=&$x343[0];list(,$WTypeError,$STypeError,$UTypeError)=$x343;$x344=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x345=$x344($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x345->class)&&$x345->class===\'Error\'&&!isset($x345->properties[\'file\'])&&!isset($x345->properties[\'line\'])&&!isset($x345->properties[\'column\'])){$x345->properties[\'file\']=\'<image>/05_string.js\';$x345->properties[\'line\']=123;$x345->properties[\'column\']=22;$x345->attributes[\'file\']=$x345->attributes[\'line\']=$x345->attributes[\'column\']=0;}throw new JSException($x345,123,22,\'<image>/05_string.js\');}$x342=JS::toObject($_regexp,$global);unset($x346,$W346,$S346,$U346);$x347=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x342,(string)\'exec\',123,22,\'<image>/05_string.js\');$x346=&$x347[0];list(,$W346,$S346,$U346)=$x347;if(!(is_object($x346)&&isset($x346->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x350=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',123,22,\'<image>/05_string.js\');$_TypeError=&$x350[0];list(,$WTypeError,$STypeError,$UTypeError)=$x350;$x351=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x352=$x351($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x352->class)&&$x352->class===\'Error\'&&!isset($x352->properties[\'file\'])&&!isset($x352->properties[\'line\'])&&!isset($x352->properties[\'column\'])){$x352->properties[\'file\']=\'<image>/05_string.js\';$x352->properties[\'line\']=123;$x352->properties[\'column\']=22;$x352->attributes[\'file\']=$x352->attributes[\'line\']=$x352->attributes[\'column\']=0;}throw new JSException($x352,123,22,\'<image>/05_string.js\');}$x348=$x346->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x349=$x348($global,$x342,$x346,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x349;$x353=(!JS::toBoolean((!JS::toBoolean($_match,$global)),$global));if($UlastMatch){$global->properties[\'lastMatch\']=$_lastMatch;$_lastMatch=&$global->properties[\'lastMatch\'];}$_lastMatch=$x353;if(JS::toBoolean($_match,$global)){unset($x355,$W355,$S355,$U355);$x356=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'lastIndex\',127,14,\'<image>/05_string.js\');$x355=&$x356[0];list(,$W355,$S355,$U355)=$x356;$x354=(((gettype($x355)===gettype($_previousLastIndex)&&$x355===$_previousLastIndex))||(((is_float($x355)||is_int($x355))&&(is_float($_previousLastIndex)||is_int($_previousLastIndex)))&&$x355==$_previousLastIndex));if(JS::toBoolean($x354,$global)){unset($x359,$W359,$S359,$U359);$x360=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'lastIndex\',128,50,\'<image>/05_string.js\');$x359=&$x360[0];list(,$W359,$S359,$U359)=$x360;$x357=JS::toPrimitive($x359,$global);$x358=JS::toPrimitive(1,$global);$x361=(is_string($x357)||is_string($x358)?JS::toString($x357,$global).JS::toString($x358,$global):JS::toNumber($x357,$global)+JS::toNumber($x358,$global));if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x362=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',128,42,\'<image>/05_string.js\');$_TypeError=&$x362[0];list(,$WTypeError,$STypeError,$UTypeError)=$x362;$x363=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x364=$x363($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x364->class)&&$x364->class===\'Error\'&&!isset($x364->properties[\'file\'])&&!isset($x364->properties[\'line\'])&&!isset($x364->properties[\'column\'])){$x364->properties[\'file\']=\'<image>/05_string.js\';$x364->properties[\'line\']=128;$x364->properties[\'column\']=42;$x364->attributes[\'file\']=$x364->attributes[\'line\']=$x364->attributes[\'column\']=0;}throw new JSException($x364,128,42,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x365,$W365,$S365,$U365);$x366=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,(string)\'lastIndex\',128,42,\'<image>/05_string.js\');$x365=&$x366[0];list(,$W365,$S365,$U365)=$x366;if($U365&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[\'lastIndex\']=$x365;$x365=&$_regexp->properties[\'lastIndex\'];$_regexp->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U365=FALSE;$W365=TRUE;}if(isset($S365)){$x368=$S365->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x369=$x368($global,$_regexp,$S365,array($x361),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x367=$x369;}else{if(!$U365){$x367=$x361;if($W365){$x365=$x361;}}else{$x367=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x367;}else{unset($x370,$W370,$S370,$U370);$x371=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,(string)\'lastIndex\',130,31,\'<image>/05_string.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x370;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x373=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',133,20,\'<image>/05_string.js\');$_TypeError=&$x373[0];list(,$WTypeError,$STypeError,$UTypeError)=$x373;$x374=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x375=$x374($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x375->class)&&$x375->class===\'Error\'&&!isset($x375->properties[\'file\'])&&!isset($x375->properties[\'line\'])&&!isset($x375->properties[\'column\'])){$x375->properties[\'file\']=\'<image>/05_string.js\';$x375->properties[\'line\']=133;$x375->properties[\'column\']=20;$x375->attributes[\'file\']=$x375->attributes[\'line\']=$x375->attributes[\'column\']=0;}throw new JSException($x375,133,20,\'<image>/05_string.js\');}$x372=JS::toObject($_returnArray,$global);unset($x376,$W376,$S376,$U376);$x377=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x372,(string)\'push\',133,20,\'<image>/05_string.js\');$x376=&$x377[0];list(,$W376,$S376,$U376)=$x377;unset($x378,$W378,$S378,$U378);$x379=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,133,26,\'<image>/05_string.js\');$x378=&$x379[0];list(,$W378,$S378,$U378)=$x379;if(!(is_object($x376)&&isset($x376->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x382=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',133,20,\'<image>/05_string.js\');$_TypeError=&$x382[0];list(,$WTypeError,$STypeError,$UTypeError)=$x382;$x383=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x384=$x383($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x384->class)&&$x384->class===\'Error\'&&!isset($x384->properties[\'file\'])&&!isset($x384->properties[\'line\'])&&!isset($x384->properties[\'column\'])){$x384->properties[\'file\']=\'<image>/05_string.js\';$x384->properties[\'line\']=133;$x384->properties[\'column\']=20;$x384->attributes[\'file\']=$x384->attributes[\'line\']=$x384->attributes[\'column\']=0;}throw new JSException($x384,133,20,\'<image>/05_string.js\');}$x380=$x376->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x381=$x380($global,$x372,$x376,array($x378),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}$x385=(((gettype($_n)===gettype(0)&&$_n===0))||(((is_float($_n)||is_int($_n))&&(is_float(0)||is_int(0)))&&$_n==0));if(JS::toBoolean($x385,$global)){return NULL;}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x518 =& $scope->properties['arguments'];
$x518->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x518->properties[$i] = $args[$i];
$x518->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['_'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$___ =& $scope->properties['_'];
$U__ = FALSE;
$scope->properties['c'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x519 = (((gettype($_c) === gettype('$') && $_c === '$'))|| (((is_float($_c) || is_int($_c)) && (is_float('$') || is_int('$'))) && $_c == '$'));
if (JS::toBoolean($x519, $global)) {

return '$';;
}
else {
$x520 = (((gettype($_c) === gettype('&') && $_c === '&'))|| (((is_float($_c) || is_int($_c)) && (is_float('&') || is_int('&'))) && $_c == '&'));
if (JS::toBoolean($x520, $global)) {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x521 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'match', 171, 13, '<image>/05_string.js');
$_match =& $x521[0]; list(,$Wmatch,$Smatch,$Umatch) = $x521;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x522 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 171, 13, '<image>/05_string.js');
$_ReferenceError =& $x522[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x522;
$x523 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 171, 13);
$x524 = $x523($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x524->class) && $x524->class === 'Error' && !isset($x524->properties['file']) && !isset($x524->properties['line']) && !isset($x524->properties['column'])) {$x524->properties['file'] = '<image>/05_string.js';$x524->properties['line'] = 171;$x524->properties['column'] = 13;$x524->attributes['file'] = $x524->attributes['line'] = $x524->attributes['column'] = 0; }
throw new JSException($x524, 171, 13, '<image>/05_string.js');
}
unset($x525, $W525, $S525, $U525);
$x526 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 171, 18, '<image>/05_string.js');
$x525 =& $x526[0]; list(,$W525,$S525,$U525) = $x526;
return $x525;;
}
else {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x527 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'match', 174, 13, '<image>/05_string.js');
$_match =& $x527[0]; list(,$Wmatch,$Smatch,$Umatch) = $x527;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x528 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 174, 13, '<image>/05_string.js');
$_ReferenceError =& $x528[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x528;
$x529 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 13);
$x530 = $x529($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x530->class) && $x530->class === 'Error' && !isset($x530->properties['file']) && !isset($x530->properties['line']) && !isset($x530->properties['column'])) {$x530->properties['file'] = '<image>/05_string.js';$x530->properties['line'] = 174;$x530->properties['column'] = 13;$x530->attributes['file'] = $x530->attributes['line'] = $x530->attributes['column'] = 0; }
throw new JSException($x530, 174, 13, '<image>/05_string.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x531 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Number', 174, 19, '<image>/05_string.js');
$_Number =& $x531[0]; list(,$WNumber,$SNumber,$UNumber) = $x531;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x532 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 174, 19, '<image>/05_string.js');
$_ReferenceError =& $x532[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x532;
$x533 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 19);
$x534 = $x533($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x534->class) && $x534->class === 'Error' && !isset($x534->properties['file']) && !isset($x534->properties['line']) && !isset($x534->properties['column'])) {$x534->properties['file'] = '<image>/05_string.js';$x534->properties['line'] = 174;$x534->properties['column'] = 19;$x534->attributes['file'] = $x534->attributes['line'] = $x534->attributes['column'] = 0; }
throw new JSException($x534, 174, 19, '<image>/05_string.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x537 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 174, 25, '<image>/05_string.js');
$_TypeError =& $x537[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x537;
$x538 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x539 = $x538($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x539->class) && $x539->class === 'Error' && !isset($x539->properties['file']) && !isset($x539->properties['line']) && !isset($x539->properties['column'])) {$x539->properties['file'] = '<image>/05_string.js';$x539->properties['line'] = 174;$x539->properties['column'] = 25;$x539->attributes['file'] = $x539->attributes['line'] = $x539->attributes['column'] = 0; }
throw new JSException($x539, 174, 25, '<image>/05_string.js');
}
$x535 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x536 = $x535($global, $global, $_Number, array($_c), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x540, $W540, $S540, $U540);
$x541 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) $x536, 174, 18, '<image>/05_string.js');
$x540 =& $x541[0]; list(,$W540,$S540,$U540) = $x541;
return $x540;;
};
}
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x518=&$scope->properties[\'arguments\'];$x518->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x518->properties[$i]=$args[$i];$x518->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'_\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$___=&$scope->properties[\'_\'];$U__=FALSE;$scope->properties[\'c\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$x519=(((gettype($_c)===gettype(\'$\')&&$_c===\'$\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'$\')||is_int(\'$\')))&&$_c==\'$\'));if(JS::toBoolean($x519,$global)){return\'$\';}else{$x520=(((gettype($_c)===gettype(\'&\')&&$_c===\'&\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'&\')||is_int(\'&\')))&&$_c==\'&\'));if(JS::toBoolean($x520,$global)){unset($_match,$Wmatch,$Smatch,$Umatch);$x521=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'match\',171,13,\'<image>/05_string.js\');$_match=&$x521[0];list(,$Wmatch,$Smatch,$Umatch)=$x521;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x522=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',171,13,\'<image>/05_string.js\');$_ReferenceError=&$x522[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x522;$x523=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',171,13);$x524=$x523($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x524->class)&&$x524->class===\'Error\'&&!isset($x524->properties[\'file\'])&&!isset($x524->properties[\'line\'])&&!isset($x524->properties[\'column\'])){$x524->properties[\'file\']=\'<image>/05_string.js\';$x524->properties[\'line\']=171;$x524->properties[\'column\']=13;$x524->attributes[\'file\']=$x524->attributes[\'line\']=$x524->attributes[\'column\']=0;}throw new JSException($x524,171,13,\'<image>/05_string.js\');}unset($x525,$W525,$S525,$U525);$x526=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,171,18,\'<image>/05_string.js\');$x525=&$x526[0];list(,$W525,$S525,$U525)=$x526;return$x525;}else{unset($_match,$Wmatch,$Smatch,$Umatch);$x527=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'match\',174,13,\'<image>/05_string.js\');$_match=&$x527[0];list(,$Wmatch,$Smatch,$Umatch)=$x527;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x528=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',174,13,\'<image>/05_string.js\');$_ReferenceError=&$x528[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x528;$x529=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,13);$x530=$x529($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x530->class)&&$x530->class===\'Error\'&&!isset($x530->properties[\'file\'])&&!isset($x530->properties[\'line\'])&&!isset($x530->properties[\'column\'])){$x530->properties[\'file\']=\'<image>/05_string.js\';$x530->properties[\'line\']=174;$x530->properties[\'column\']=13;$x530->attributes[\'file\']=$x530->attributes[\'line\']=$x530->attributes[\'column\']=0;}throw new JSException($x530,174,13,\'<image>/05_string.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x531=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Number\',174,19,\'<image>/05_string.js\');$_Number=&$x531[0];list(,$WNumber,$SNumber,$UNumber)=$x531;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x532=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',174,19,\'<image>/05_string.js\');$_ReferenceError=&$x532[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x532;$x533=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,19);$x534=$x533($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x534->class)&&$x534->class===\'Error\'&&!isset($x534->properties[\'file\'])&&!isset($x534->properties[\'line\'])&&!isset($x534->properties[\'column\'])){$x534->properties[\'file\']=\'<image>/05_string.js\';$x534->properties[\'line\']=174;$x534->properties[\'column\']=19;$x534->attributes[\'file\']=$x534->attributes[\'line\']=$x534->attributes[\'column\']=0;}throw new JSException($x534,174,19,\'<image>/05_string.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x537=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',174,25,\'<image>/05_string.js\');$_TypeError=&$x537[0];list(,$WTypeError,$STypeError,$UTypeError)=$x537;$x538=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x539=$x538($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x539->class)&&$x539->class===\'Error\'&&!isset($x539->properties[\'file\'])&&!isset($x539->properties[\'line\'])&&!isset($x539->properties[\'column\'])){$x539->properties[\'file\']=\'<image>/05_string.js\';$x539->properties[\'line\']=174;$x539->properties[\'column\']=25;$x539->attributes[\'file\']=$x539->attributes[\'line\']=$x539->attributes[\'column\']=0;}throw new JSException($x539,174,25,\'<image>/05_string.js\');}$x535=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x536=$x535($global,$global,$_Number,array($_c),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x540,$W540,$S540,$U540);$x541=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)$x536,174,18,\'<image>/05_string.js\');$x540=&$x541[0];list(,$W540,$S540,$U540)=$x541;return$x540;}}return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x398 =& $scope->properties['arguments'];
$x398->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x398->properties[$i] = $args[$i];
$x398->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x401 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 146, 16, '<image>/05_string.js');
$_RegExp =& $x401[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x401;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x402 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 146, 16, '<image>/05_string.js');
$_ReferenceError =& $x402[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x402;
$x403 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 16);
$x404 = $x403($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x404->class) && $x404->class === 'Error' && !isset($x404->properties['file']) && !isset($x404->properties['line']) && !isset($x404->properties['column'])) {$x404->properties['file'] = '<image>/05_string.js';$x404->properties['line'] = 146;$x404->properties['column'] = 16;$x404->attributes['file'] = $x404->attributes['line'] = $x404->attributes['column'] = 0; }
throw new JSException($x404, 146, 16, '<image>/05_string.js');
}
$x399 = clone JS::$objectTemplate;
unset($x405, $W405, $S405, $U405);
$x406 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 146, 12, '<image>/05_string.js');
$x405 =& $x406[0]; list(,$W405,$S405,$U405) = $x406;
$x400 = $x405;
$x399->prototype = $x400;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x409 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 146, 12, '<image>/05_string.js');
$_TypeError =& $x409[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x409;
$x410 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x411 = $x410($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x411->class) && $x411->class === 'Error' && !isset($x411->properties['file']) && !isset($x411->properties['line']) && !isset($x411->properties['column'])) {$x411->properties['file'] = '<image>/05_string.js';$x411->properties['line'] = 146;$x411->properties['column'] = 12;$x411->attributes['file'] = $x411->attributes['line'] = $x411->attributes['column'] = 0; }
throw new JSException($x411, 146, 12, '<image>/05_string.js');
}
$x407 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x408 = $x407($global, $x399, $_RegExp, array(preg_quote(JS::toString($_search, $global), '/')), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x400 = $x408;
if (is_object($x400) && $x400 !== JS::$undefined) { $x399 = $x400; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x399;;
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
$x414 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 152, 29, '<image>/05_string.js');
$_TypeError =& $x414[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x414;
$x415 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x416 = $x415($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x416->class) && $x416->class === 'Error' && !isset($x416->properties['file']) && !isset($x416->properties['line']) && !isset($x416->properties['column'])) {$x416->properties['file'] = '<image>/05_string.js';$x416->properties['line'] = 152;$x416->properties['column'] = 29;$x416->attributes['file'] = $x416->attributes['line'] = $x416->attributes['column'] = 0; }
throw new JSException($x416, 152, 29, '<image>/05_string.js');
}
$x413 = JS::toObject($_search, $global);
unset($x417, $W417, $S417, $U417);
$x418 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x413, (string) 'exec', 152, 29, '<image>/05_string.js');
$x417 =& $x418[0]; list(,$W417,$S417,$U417) = $x418;
if (!(is_object($x417) && isset($x417->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x421 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 152, 29, '<image>/05_string.js');
$_TypeError =& $x421[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x421;
$x422 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x423 = $x422($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x423->class) && $x423->class === 'Error' && !isset($x423->properties['file']) && !isset($x423->properties['line']) && !isset($x423->properties['column'])) {$x423->properties['file'] = '<image>/05_string.js';$x423->properties['line'] = 152;$x423->properties['column'] = 29;$x423->attributes['file'] = $x423->attributes['line'] = $x423->attributes['column'] = 0; }
throw new JSException($x423, 152, 29, '<image>/05_string.js');
}
$x419 = $x417->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x420 = $x419($global, $x413, $x417, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x420;
$x412 = !(((gettype($_match) === gettype(NULL) && $_match === NULL))|| (((is_float($_match) || is_int($_match)) && (is_float(NULL) || is_int(NULL))) && $_match == NULL));
if (!JS::toBoolean($x412, $global)) { break; }

unset($x424, $W424, $S424, $U424);
$x425 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 153, 16, '<image>/05_string.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
if ($Uindex) {$global->properties['index'] = $_index; $_index =& $global->properties['index']; }
$_index = $x424;
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x427 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 154, 40, '<image>/05_string.js');
$_TypeError =& $x427[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x427;
$x428 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x429 = $x428($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x429->class) && $x429->class === 'Error' && !isset($x429->properties['file']) && !isset($x429->properties['line']) && !isset($x429->properties['column'])) {$x429->properties['file'] = '<image>/05_string.js';$x429->properties['line'] = 154;$x429->properties['column'] = 40;$x429->attributes['file'] = $x429->attributes['line'] = $x429->attributes['column'] = 0; }
throw new JSException($x429, 154, 40, '<image>/05_string.js');
}
$x426 = JS::toObject($_thisString, $global);
unset($x430, $W430, $S430, $U430);
$x431 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x426, (string) 'substring', 154, 40, '<image>/05_string.js');
$x430 =& $x431[0]; list(,$W430,$S430,$U430) = $x431;
if (!(is_object($x430) && isset($x430->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x434 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 154, 40, '<image>/05_string.js');
$_TypeError =& $x434[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x434;
$x435 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x436 = $x435($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x436->class) && $x436->class === 'Error' && !isset($x436->properties['file']) && !isset($x436->properties['line']) && !isset($x436->properties['column'])) {$x436->properties['file'] = '<image>/05_string.js';$x436->properties['line'] = 154;$x436->properties['column'] = 40;$x436->attributes['file'] = $x436->attributes['line'] = $x436->attributes['column'] = 0; }
throw new JSException($x436, 154, 40, '<image>/05_string.js');
}
$x432 = $x430->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x433 = $x432($global, $x426, $x430, array($_lastIndex, $_index), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x433;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x437 = JS::toPrimitive($_newString, $global);
$x438 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x437) || is_string($x438) ? JS::toString($x437, $global) . JS::toString($x438, $global) : JS::toNumber($x437, $global) + JS::toNumber($x438, $global));
unset($x441, $W441, $S441, $U441);
$x442 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 155, 28, '<image>/05_string.js');
$x441 =& $x442[0]; list(,$W441,$S441,$U441) = $x442;
unset($x443, $W443, $S443, $U443);
$x444 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x441, (string) 'length', 155, 31, '<image>/05_string.js');
$x443 =& $x444[0]; list(,$W443,$S443,$U443) = $x444;
$x439 = JS::toPrimitive($_index, $global);
$x440 = JS::toPrimitive($x443, $global);
$x445 = (is_string($x439) || is_string($x440) ? JS::toString($x439, $global) . JS::toString($x440, $global) : JS::toNumber($x439, $global) + JS::toNumber($x440, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x445;
$x447 = $_replace;
$x447 = ($x447 === JS::$undefined ? 'undefined' : (is_int($x447) || is_float($x447) ? 'number' : (is_bool($x447) ? 'boolean' : (is_string($x447) ? 'string' : (is_object($x447) && isset($x447->call) ? 'function' : 'object')))));
$x446 = (((gettype($x447) === gettype('function') && $x447 === 'function'))|| (((is_float($x447) || is_int($x447)) && (is_float('function') || is_int('function'))) && $x447 == 'function'));
if (JS::toBoolean($x446, $global)) {
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x449 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 158, 14, '<image>/05_string.js');
$_TypeError =& $x449[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x449;
$x450 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x451 = $x450($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x451->class) && $x451->class === 'Error' && !isset($x451->properties['file']) && !isset($x451->properties['line']) && !isset($x451->properties['column'])) {$x451->properties['file'] = '<image>/05_string.js';$x451->properties['line'] = 158;$x451->properties['column'] = 14;$x451->attributes['file'] = $x451->attributes['line'] = $x451->attributes['column'] = 0; }
throw new JSException($x451, 158, 14, '<image>/05_string.js');
}
$x448 = JS::toObject($_match, $global);
unset($x452, $W452, $S452, $U452);
$x453 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x448, (string) 'push', 158, 14, '<image>/05_string.js');
$x452 =& $x453[0]; list(,$W452,$S452,$U452) = $x453;
unset($x454, $W454, $S454, $U454);
$x455 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 158, 20, '<image>/05_string.js');
$x454 =& $x455[0]; list(,$W454,$S454,$U454) = $x455;
if (!(is_object($x452) && isset($x452->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x458 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 158, 14, '<image>/05_string.js');
$_TypeError =& $x458[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x458;
$x459 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x460 = $x459($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x460->class) && $x460->class === 'Error' && !isset($x460->properties['file']) && !isset($x460->properties['line']) && !isset($x460->properties['column'])) {$x460->properties['file'] = '<image>/05_string.js';$x460->properties['line'] = 158;$x460->properties['column'] = 14;$x460->attributes['file'] = $x460->attributes['line'] = $x460->attributes['column'] = 0; }
throw new JSException($x460, 158, 14, '<image>/05_string.js');
}
$x456 = $x452->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x457 = $x456($global, $x448, $x452, array($x454), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x462 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 159, 14, '<image>/05_string.js');
$_TypeError =& $x462[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x462;
$x463 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x464 = $x463($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x464->class) && $x464->class === 'Error' && !isset($x464->properties['file']) && !isset($x464->properties['line']) && !isset($x464->properties['column'])) {$x464->properties['file'] = '<image>/05_string.js';$x464->properties['line'] = 159;$x464->properties['column'] = 14;$x464->attributes['file'] = $x464->attributes['line'] = $x464->attributes['column'] = 0; }
throw new JSException($x464, 159, 14, '<image>/05_string.js');
}
$x461 = JS::toObject($_match, $global);
unset($x465, $W465, $S465, $U465);
$x466 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x461, (string) 'push', 159, 14, '<image>/05_string.js');
$x465 =& $x466[0]; list(,$W465,$S465,$U465) = $x466;
unset($x467, $W467, $S467, $U467);
$x468 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'input', 159, 20, '<image>/05_string.js');
$x467 =& $x468[0]; list(,$W467,$S467,$U467) = $x468;
if (!(is_object($x465) && isset($x465->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x471 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 159, 14, '<image>/05_string.js');
$_TypeError =& $x471[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x471;
$x472 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x473 = $x472($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x473->class) && $x473->class === 'Error' && !isset($x473->properties['file']) && !isset($x473->properties['line']) && !isset($x473->properties['column'])) {$x473->properties['file'] = '<image>/05_string.js';$x473->properties['line'] = 159;$x473->properties['column'] = 14;$x473->attributes['file'] = $x473->attributes['line'] = $x473->attributes['column'] = 0; }
throw new JSException($x473, 159, 14, '<image>/05_string.js');
}
$x469 = $x465->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x470 = $x469($global, $x461, $x465, array($x467), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!array_key_exists('index', $_match->attributes)) { unset($_match->properties['index']); $x474 = TRUE; }
else if ($_match->attributes['index'] & JS::CONFIGURABLE) { unset($_match->properties['index'], $_match->attributes['index'], $_match->getters['index'], $_match->setters['index']); $x474 = TRUE; }
else { $x474 = FALSE; };
if (!array_key_exists('input', $_match->attributes)) { unset($_match->properties['input']); $x475 = TRUE; }
else if ($_match->attributes['input'] & JS::CONFIGURABLE) { unset($_match->properties['input'], $_match->attributes['input'], $_match->getters['input'], $_match->setters['input']); $x475 = TRUE; }
else { $x475 = FALSE; };
unset($_String, $WString, $SString, $UString);
$x476 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'String', 163, 21, '<image>/05_string.js');
$_String =& $x476[0]; list(,$WString,$SString,$UString) = $x476;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x477 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 163, 21, '<image>/05_string.js');
$_ReferenceError =& $x477[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x477;
$x478 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 21);
$x479 = $x478($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x479->class) && $x479->class === 'Error' && !isset($x479->properties['file']) && !isset($x479->properties['line']) && !isset($x479->properties['column'])) {$x479->properties['file'] = '<image>/05_string.js';$x479->properties['line'] = 163;$x479->properties['column'] = 21;$x479->attributes['file'] = $x479->attributes['line'] = $x479->attributes['column'] = 0; }
throw new JSException($x479, 163, 21, '<image>/05_string.js');
}
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x481 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 163, 41, '<image>/05_string.js');
$_TypeError =& $x481[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x481;
$x482 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x483 = $x482($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x483->class) && $x483->class === 'Error' && !isset($x483->properties['file']) && !isset($x483->properties['line']) && !isset($x483->properties['column'])) {$x483->properties['file'] = '<image>/05_string.js';$x483->properties['line'] = 163;$x483->properties['column'] = 41;$x483->attributes['file'] = $x483->attributes['line'] = $x483->attributes['column'] = 0; }
throw new JSException($x483, 163, 41, '<image>/05_string.js');
}
$x480 = JS::toObject($_replace, $global);
unset($x484, $W484, $S484, $U484);
$x485 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x480, (string) 'apply', 163, 41, '<image>/05_string.js');
$x484 =& $x485[0]; list(,$W484,$S484,$U484) = $x485;
if (!(is_object($x484) && isset($x484->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x488 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 163, 41, '<image>/05_string.js');
$_TypeError =& $x488[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x488;
$x489 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x490 = $x489($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x490->class) && $x490->class === 'Error' && !isset($x490->properties['file']) && !isset($x490->properties['line']) && !isset($x490->properties['column'])) {$x490->properties['file'] = '<image>/05_string.js';$x490->properties['line'] = 163;$x490->properties['column'] = 41;$x490->attributes['file'] = $x490->attributes['line'] = $x490->attributes['column'] = 0; }
throw new JSException($x490, 163, 41, '<image>/05_string.js');
}
$x486 = $x484->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x487 = $x486($global, $x480, $x484, array(JS::$undefined, $_match), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x493 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 163, 27, '<image>/05_string.js');
$_TypeError =& $x493[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x493;
$x494 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x495 = $x494($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x495->class) && $x495->class === 'Error' && !isset($x495->properties['file']) && !isset($x495->properties['line']) && !isset($x495->properties['column'])) {$x495->properties['file'] = '<image>/05_string.js';$x495->properties['line'] = 163;$x495->properties['column'] = 27;$x495->attributes['file'] = $x495->attributes['line'] = $x495->attributes['column'] = 0; }
throw new JSException($x495, 163, 27, '<image>/05_string.js');
}
$x491 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x492 = $x491($global, $global, $_String, array($x487), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x492;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x496 = JS::toPrimitive($_newString, $global);
$x497 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x496) || is_string($x497) ? JS::toString($x496, $global) . JS::toString($x497, $global) : JS::toNumber($x496, $global) + JS::toNumber($x497, $global));;
}
else {
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x499 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 166, 32, '<image>/05_string.js');
$_TypeError =& $x499[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x499;
$x500 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x501 = $x500($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x501->class) && $x501->class === 'Error' && !isset($x501->properties['file']) && !isset($x501->properties['line']) && !isset($x501->properties['column'])) {$x501->properties['file'] = '<image>/05_string.js';$x501->properties['line'] = 166;$x501->properties['column'] = 32;$x501->attributes['file'] = $x501->attributes['line'] = $x501->attributes['column'] = 0; }
throw new JSException($x501, 166, 32, '<image>/05_string.js');
}
$x498 = JS::toObject($_replace, $global);
unset($x502, $W502, $S502, $U502);
$x503 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x498, (string) 'replace', 166, 32, '<image>/05_string.js');
$x502 =& $x503[0]; list(,$W502,$S502,$U502) = $x503;
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x506 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 166, 33, '<image>/05_string.js');
$_RegExp =& $x506[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x506;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x507 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 166, 33, '<image>/05_string.js');
$_ReferenceError =& $x507[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x507;
$x508 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x509 = $x508($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x509->class) && $x509->class === 'Error' && !isset($x509->properties['file']) && !isset($x509->properties['line']) && !isset($x509->properties['column'])) {$x509->properties['file'] = '<image>/05_string.js';$x509->properties['line'] = 166;$x509->properties['column'] = 33;$x509->attributes['file'] = $x509->attributes['line'] = $x509->attributes['column'] = 0; }
throw new JSException($x509, 166, 33, '<image>/05_string.js');
}
$x504 = clone JS::$objectTemplate;
unset($x510, $W510, $S510, $U510);
$x511 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 166, 33, '<image>/05_string.js');
$x510 =& $x511[0]; list(,$W510,$S510,$U510) = $x511;
$x505 = $x510;
$x504->prototype = $x505;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x514 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 166, 33, '<image>/05_string.js');
$_TypeError =& $x514[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x514;
$x515 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x516 = $x515($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x516->class) && $x516->class === 'Error' && !isset($x516->properties['file']) && !isset($x516->properties['line']) && !isset($x516->properties['column'])) {$x516->properties['file'] = '<image>/05_string.js';$x516->properties['line'] = 166;$x516->properties['column'] = 33;$x516->attributes['file'] = $x516->attributes['line'] = $x516->attributes['column'] = 0; }
throw new JSException($x516, 166, 33, '<image>/05_string.js');
}
$x512 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x513 = $x512($global, $x504, $_RegExp, array('\\$([$&]|[0-9]|[0-9][0-9])', 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x505 = $x513;
if (is_object($x505) && $x505 !== JS::$undefined) { $x504 = $x505; }
$x542 = clone JS::$functionTemplate; $x542->call = '_465e5538fcb402e27559db40bec8addd_15'; $x542->parameters = array (
  0 => '_',
  1 => 'c',
); $x542->scope = $scope; $x542->properties['prototype'] = clone JS::$objectTemplate; $x542->attributes['prototype'] = JS::WRITABLE; $x542->properties['prototype']->properties['constructor'] = $x542; $x542->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x542->properties['length'] = 2; $x542->attributes['length'] = 0;
if (!(is_object($x502) && isset($x502->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x545 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 166, 32, '<image>/05_string.js');
$_TypeError =& $x545[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x545;
$x546 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x547 = $x546($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x547->class) && $x547->class === 'Error' && !isset($x547->properties['file']) && !isset($x547->properties['line']) && !isset($x547->properties['column'])) {$x547->properties['file'] = '<image>/05_string.js';$x547->properties['line'] = 166;$x547->properties['column'] = 32;$x547->attributes['file'] = $x547->attributes['line'] = $x547->attributes['column'] = 0; }
throw new JSException($x547, 166, 32, '<image>/05_string.js');
}
$x543 = $x502->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x544 = $x543($global, $x498, $x502, array($x504, $x542), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x548 = JS::toPrimitive($_newString, $global);
$x549 = JS::toPrimitive($x544, $global);
$_newString = (is_string($x548) || is_string($x549) ? JS::toString($x548, $global) . JS::toString($x549, $global) : JS::toNumber($x548, $global) + JS::toNumber($x549, $global));;
};
unset($x550, $W550, $S550, $U550);
$x551 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, (string) 'global', 179, 14, '<image>/05_string.js');
$x550 =& $x551[0]; list(,$W550,$S550,$U550) = $x551;
if (JS::toBoolean((!JS::toBoolean($x550, $global)), $global)) {
break;;
};;
};
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x553 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 184, 35, '<image>/05_string.js');
$_TypeError =& $x553[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x553;
$x554 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x555 = $x554($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x555->class) && $x555->class === 'Error' && !isset($x555->properties['file']) && !isset($x555->properties['line']) && !isset($x555->properties['column'])) {$x555->properties['file'] = '<image>/05_string.js';$x555->properties['line'] = 184;$x555->properties['column'] = 35;$x555->attributes['file'] = $x555->attributes['line'] = $x555->attributes['column'] = 0; }
throw new JSException($x555, 184, 35, '<image>/05_string.js');
}
$x552 = JS::toObject($_thisString, $global);
unset($x556, $W556, $S556, $U556);
$x557 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x552, (string) 'substring', 184, 35, '<image>/05_string.js');
$x556 =& $x557[0]; list(,$W556,$S556,$U556) = $x557;
unset($x558, $W558, $S558, $U558);
$x559 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_thisString, (string) 'length', 184, 57, '<image>/05_string.js');
$x558 =& $x559[0]; list(,$W558,$S558,$U558) = $x559;
if (!(is_object($x556) && isset($x556->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x562 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 184, 35, '<image>/05_string.js');
$_TypeError =& $x562[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x562;
$x563 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x564 = $x563($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x564->class) && $x564->class === 'Error' && !isset($x564->properties['file']) && !isset($x564->properties['line']) && !isset($x564->properties['column'])) {$x564->properties['file'] = '<image>/05_string.js';$x564->properties['line'] = 184;$x564->properties['column'] = 35;$x564->attributes['file'] = $x564->attributes['line'] = $x564->attributes['column'] = 0; }
throw new JSException($x564, 184, 35, '<image>/05_string.js');
}
$x560 = $x556->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x561 = $x560($global, $x552, $x556, array($_lastIndex, $x558), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x565 = JS::toPrimitive($_newString, $global);
$x566 = JS::toPrimitive($x561, $global);
$_newString = (is_string($x565) || is_string($x566) ? JS::toString($x565, $global) . JS::toString($x566, $global) : JS::toNumber($x565, $global) + JS::toNumber($x566, $global));
return $_newString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x398=&$scope->properties[\'arguments\'];$x398->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x398->properties[$i]=$args[$i];$x398->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'replace\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replace=&$scope->properties[\'replace\'];$Ureplace=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!is_object($_search)||!isset($_search->class)||$_search->class!==\'RegExp\',$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x401=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',146,16,\'<image>/05_string.js\');$_RegExp=&$x401[0];list(,$WRegExp,$SRegExp,$URegExp)=$x401;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x402=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',146,16,\'<image>/05_string.js\');$_ReferenceError=&$x402[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x402;$x403=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,16);$x404=$x403($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x404->class)&&$x404->class===\'Error\'&&!isset($x404->properties[\'file\'])&&!isset($x404->properties[\'line\'])&&!isset($x404->properties[\'column\'])){$x404->properties[\'file\']=\'<image>/05_string.js\';$x404->properties[\'line\']=146;$x404->properties[\'column\']=16;$x404->attributes[\'file\']=$x404->attributes[\'line\']=$x404->attributes[\'column\']=0;}throw new JSException($x404,146,16,\'<image>/05_string.js\');}$x399=clone JS::$objectTemplate;unset($x405,$W405,$S405,$U405);$x406=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',146,12,\'<image>/05_string.js\');$x405=&$x406[0];list(,$W405,$S405,$U405)=$x406;$x400=$x405;$x399->prototype=$x400;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x409=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',146,12,\'<image>/05_string.js\');$_TypeError=&$x409[0];list(,$WTypeError,$STypeError,$UTypeError)=$x409;$x410=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x411=$x410($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x411->class)&&$x411->class===\'Error\'&&!isset($x411->properties[\'file\'])&&!isset($x411->properties[\'line\'])&&!isset($x411->properties[\'column\'])){$x411->properties[\'file\']=\'<image>/05_string.js\';$x411->properties[\'line\']=146;$x411->properties[\'column\']=12;$x411->attributes[\'file\']=$x411->attributes[\'line\']=$x411->attributes[\'column\']=0;}throw new JSException($x411,146,12,\'<image>/05_string.js\');}$x407=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x408=$x407($global,$x399,$_RegExp,array(preg_quote(JS::toString($_search,$global),\'/\')),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x400=$x408;if(is_object($x400)&&$x400!==JS::$undefined){$x399=$x400;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x399;}$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;$scope->properties[\'newString\']=JS::$undefined;$_newString=&$scope->properties[\'newString\'];$UnewString=FALSE;$_newString=\'\';$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=JS::$undefined;for(;;){if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x414=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',152,29,\'<image>/05_string.js\');$_TypeError=&$x414[0];list(,$WTypeError,$STypeError,$UTypeError)=$x414;$x415=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x416=$x415($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x416->class)&&$x416->class===\'Error\'&&!isset($x416->properties[\'file\'])&&!isset($x416->properties[\'line\'])&&!isset($x416->properties[\'column\'])){$x416->properties[\'file\']=\'<image>/05_string.js\';$x416->properties[\'line\']=152;$x416->properties[\'column\']=29;$x416->attributes[\'file\']=$x416->attributes[\'line\']=$x416->attributes[\'column\']=0;}throw new JSException($x416,152,29,\'<image>/05_string.js\');}$x413=JS::toObject($_search,$global);unset($x417,$W417,$S417,$U417);$x418=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x413,(string)\'exec\',152,29,\'<image>/05_string.js\');$x417=&$x418[0];list(,$W417,$S417,$U417)=$x418;if(!(is_object($x417)&&isset($x417->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x421=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',152,29,\'<image>/05_string.js\');$_TypeError=&$x421[0];list(,$WTypeError,$STypeError,$UTypeError)=$x421;$x422=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x423=$x422($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x423->class)&&$x423->class===\'Error\'&&!isset($x423->properties[\'file\'])&&!isset($x423->properties[\'line\'])&&!isset($x423->properties[\'column\'])){$x423->properties[\'file\']=\'<image>/05_string.js\';$x423->properties[\'line\']=152;$x423->properties[\'column\']=29;$x423->attributes[\'file\']=$x423->attributes[\'line\']=$x423->attributes[\'column\']=0;}throw new JSException($x423,152,29,\'<image>/05_string.js\');}$x419=$x417->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x420=$x419($global,$x413,$x417,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x420;$x412=!(((gettype($_match)===gettype(NULL)&&$_match===NULL))||(((is_float($_match)||is_int($_match))&&(is_float(NULL)||is_int(NULL)))&&$_match==NULL));if(!JS::toBoolean($x412,$global)){break;}unset($x424,$W424,$S424,$U424);$x425=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',153,16,\'<image>/05_string.js\');$x424=&$x425[0];list(,$W424,$S424,$U424)=$x425;if($Uindex){$global->properties[\'index\']=$_index;$_index=&$global->properties[\'index\'];}$_index=$x424;if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x427=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',154,40,\'<image>/05_string.js\');$_TypeError=&$x427[0];list(,$WTypeError,$STypeError,$UTypeError)=$x427;$x428=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x429=$x428($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x429->class)&&$x429->class===\'Error\'&&!isset($x429->properties[\'file\'])&&!isset($x429->properties[\'line\'])&&!isset($x429->properties[\'column\'])){$x429->properties[\'file\']=\'<image>/05_string.js\';$x429->properties[\'line\']=154;$x429->properties[\'column\']=40;$x429->attributes[\'file\']=$x429->attributes[\'line\']=$x429->attributes[\'column\']=0;}throw new JSException($x429,154,40,\'<image>/05_string.js\');}$x426=JS::toObject($_thisString,$global);unset($x430,$W430,$S430,$U430);$x431=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x426,(string)\'substring\',154,40,\'<image>/05_string.js\');$x430=&$x431[0];list(,$W430,$S430,$U430)=$x431;if(!(is_object($x430)&&isset($x430->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x434=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',154,40,\'<image>/05_string.js\');$_TypeError=&$x434[0];list(,$WTypeError,$STypeError,$UTypeError)=$x434;$x435=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x436=$x435($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x436->class)&&$x436->class===\'Error\'&&!isset($x436->properties[\'file\'])&&!isset($x436->properties[\'line\'])&&!isset($x436->properties[\'column\'])){$x436->properties[\'file\']=\'<image>/05_string.js\';$x436->properties[\'line\']=154;$x436->properties[\'column\']=40;$x436->attributes[\'file\']=$x436->attributes[\'line\']=$x436->attributes[\'column\']=0;}throw new JSException($x436,154,40,\'<image>/05_string.js\');}$x432=$x430->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x433=$x432($global,$x426,$x430,array($_lastIndex,$_index),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x433;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x437=JS::toPrimitive($_newString,$global);$x438=JS::toPrimitive($_s,$global);$_newString=(is_string($x437)||is_string($x438)?JS::toString($x437,$global).JS::toString($x438,$global):JS::toNumber($x437,$global)+JS::toNumber($x438,$global));unset($x441,$W441,$S441,$U441);$x442=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,155,28,\'<image>/05_string.js\');$x441=&$x442[0];list(,$W441,$S441,$U441)=$x442;unset($x443,$W443,$S443,$U443);$x444=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x441,(string)\'length\',155,31,\'<image>/05_string.js\');$x443=&$x444[0];list(,$W443,$S443,$U443)=$x444;$x439=JS::toPrimitive($_index,$global);$x440=JS::toPrimitive($x443,$global);$x445=(is_string($x439)||is_string($x440)?JS::toString($x439,$global).JS::toString($x440,$global):JS::toNumber($x439,$global)+JS::toNumber($x440,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x445;$x447=$_replace;$x447=($x447===JS::$undefined?\'undefined\':(is_int($x447)||is_float($x447)?\'number\':(is_bool($x447)?\'boolean\':(is_string($x447)?\'string\':(is_object($x447)&&isset($x447->call)?\'function\':\'object\')))));$x446=(((gettype($x447)===gettype(\'function\')&&$x447===\'function\'))||(((is_float($x447)||is_int($x447))&&(is_float(\'function\')||is_int(\'function\')))&&$x447==\'function\'));if(JS::toBoolean($x446,$global)){if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x449=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',158,14,\'<image>/05_string.js\');$_TypeError=&$x449[0];list(,$WTypeError,$STypeError,$UTypeError)=$x449;$x450=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x451=$x450($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x451->class)&&$x451->class===\'Error\'&&!isset($x451->properties[\'file\'])&&!isset($x451->properties[\'line\'])&&!isset($x451->properties[\'column\'])){$x451->properties[\'file\']=\'<image>/05_string.js\';$x451->properties[\'line\']=158;$x451->properties[\'column\']=14;$x451->attributes[\'file\']=$x451->attributes[\'line\']=$x451->attributes[\'column\']=0;}throw new JSException($x451,158,14,\'<image>/05_string.js\');}$x448=JS::toObject($_match,$global);unset($x452,$W452,$S452,$U452);$x453=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x448,(string)\'push\',158,14,\'<image>/05_string.js\');$x452=&$x453[0];list(,$W452,$S452,$U452)=$x453;unset($x454,$W454,$S454,$U454);$x455=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',158,20,\'<image>/05_string.js\');$x454=&$x455[0];list(,$W454,$S454,$U454)=$x455;if(!(is_object($x452)&&isset($x452->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x458=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',158,14,\'<image>/05_string.js\');$_TypeError=&$x458[0];list(,$WTypeError,$STypeError,$UTypeError)=$x458;$x459=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x460=$x459($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x460->class)&&$x460->class===\'Error\'&&!isset($x460->properties[\'file\'])&&!isset($x460->properties[\'line\'])&&!isset($x460->properties[\'column\'])){$x460->properties[\'file\']=\'<image>/05_string.js\';$x460->properties[\'line\']=158;$x460->properties[\'column\']=14;$x460->attributes[\'file\']=$x460->attributes[\'line\']=$x460->attributes[\'column\']=0;}throw new JSException($x460,158,14,\'<image>/05_string.js\');}$x456=$x452->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x457=$x456($global,$x448,$x452,array($x454),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x462=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',159,14,\'<image>/05_string.js\');$_TypeError=&$x462[0];list(,$WTypeError,$STypeError,$UTypeError)=$x462;$x463=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x464=$x463($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x464->class)&&$x464->class===\'Error\'&&!isset($x464->properties[\'file\'])&&!isset($x464->properties[\'line\'])&&!isset($x464->properties[\'column\'])){$x464->properties[\'file\']=\'<image>/05_string.js\';$x464->properties[\'line\']=159;$x464->properties[\'column\']=14;$x464->attributes[\'file\']=$x464->attributes[\'line\']=$x464->attributes[\'column\']=0;}throw new JSException($x464,159,14,\'<image>/05_string.js\');}$x461=JS::toObject($_match,$global);unset($x465,$W465,$S465,$U465);$x466=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x461,(string)\'push\',159,14,\'<image>/05_string.js\');$x465=&$x466[0];list(,$W465,$S465,$U465)=$x466;unset($x467,$W467,$S467,$U467);$x468=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'input\',159,20,\'<image>/05_string.js\');$x467=&$x468[0];list(,$W467,$S467,$U467)=$x468;if(!(is_object($x465)&&isset($x465->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x471=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',159,14,\'<image>/05_string.js\');$_TypeError=&$x471[0];list(,$WTypeError,$STypeError,$UTypeError)=$x471;$x472=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x473=$x472($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x473->class)&&$x473->class===\'Error\'&&!isset($x473->properties[\'file\'])&&!isset($x473->properties[\'line\'])&&!isset($x473->properties[\'column\'])){$x473->properties[\'file\']=\'<image>/05_string.js\';$x473->properties[\'line\']=159;$x473->properties[\'column\']=14;$x473->attributes[\'file\']=$x473->attributes[\'line\']=$x473->attributes[\'column\']=0;}throw new JSException($x473,159,14,\'<image>/05_string.js\');}$x469=$x465->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x470=$x469($global,$x461,$x465,array($x467),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!array_key_exists(\'index\',$_match->attributes)){unset($_match->properties[\'index\']);$x474=TRUE;}else if($_match->attributes[\'index\']&JS::CONFIGURABLE){unset($_match->properties[\'index\'],$_match->attributes[\'index\'],$_match->getters[\'index\'],$_match->setters[\'index\']);$x474=TRUE;}else{$x474=FALSE;}if(!array_key_exists(\'input\',$_match->attributes)){unset($_match->properties[\'input\']);$x475=TRUE;}else if($_match->attributes[\'input\']&JS::CONFIGURABLE){unset($_match->properties[\'input\'],$_match->attributes[\'input\'],$_match->getters[\'input\'],$_match->setters[\'input\']);$x475=TRUE;}else{$x475=FALSE;}unset($_String,$WString,$SString,$UString);$x476=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'String\',163,21,\'<image>/05_string.js\');$_String=&$x476[0];list(,$WString,$SString,$UString)=$x476;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x477=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',163,21,\'<image>/05_string.js\');$_ReferenceError=&$x477[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x477;$x478=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,21);$x479=$x478($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x479->class)&&$x479->class===\'Error\'&&!isset($x479->properties[\'file\'])&&!isset($x479->properties[\'line\'])&&!isset($x479->properties[\'column\'])){$x479->properties[\'file\']=\'<image>/05_string.js\';$x479->properties[\'line\']=163;$x479->properties[\'column\']=21;$x479->attributes[\'file\']=$x479->attributes[\'line\']=$x479->attributes[\'column\']=0;}throw new JSException($x479,163,21,\'<image>/05_string.js\');}if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x481=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',163,41,\'<image>/05_string.js\');$_TypeError=&$x481[0];list(,$WTypeError,$STypeError,$UTypeError)=$x481;$x482=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x483=$x482($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x483->class)&&$x483->class===\'Error\'&&!isset($x483->properties[\'file\'])&&!isset($x483->properties[\'line\'])&&!isset($x483->properties[\'column\'])){$x483->properties[\'file\']=\'<image>/05_string.js\';$x483->properties[\'line\']=163;$x483->properties[\'column\']=41;$x483->attributes[\'file\']=$x483->attributes[\'line\']=$x483->attributes[\'column\']=0;}throw new JSException($x483,163,41,\'<image>/05_string.js\');}$x480=JS::toObject($_replace,$global);unset($x484,$W484,$S484,$U484);$x485=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x480,(string)\'apply\',163,41,\'<image>/05_string.js\');$x484=&$x485[0];list(,$W484,$S484,$U484)=$x485;if(!(is_object($x484)&&isset($x484->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x488=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',163,41,\'<image>/05_string.js\');$_TypeError=&$x488[0];list(,$WTypeError,$STypeError,$UTypeError)=$x488;$x489=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x490=$x489($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x490->class)&&$x490->class===\'Error\'&&!isset($x490->properties[\'file\'])&&!isset($x490->properties[\'line\'])&&!isset($x490->properties[\'column\'])){$x490->properties[\'file\']=\'<image>/05_string.js\';$x490->properties[\'line\']=163;$x490->properties[\'column\']=41;$x490->attributes[\'file\']=$x490->attributes[\'line\']=$x490->attributes[\'column\']=0;}throw new JSException($x490,163,41,\'<image>/05_string.js\');}$x486=$x484->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x487=$x486($global,$x480,$x484,array(JS::$undefined,$_match),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x493=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',163,27,\'<image>/05_string.js\');$_TypeError=&$x493[0];list(,$WTypeError,$STypeError,$UTypeError)=$x493;$x494=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x495=$x494($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x495->class)&&$x495->class===\'Error\'&&!isset($x495->properties[\'file\'])&&!isset($x495->properties[\'line\'])&&!isset($x495->properties[\'column\'])){$x495->properties[\'file\']=\'<image>/05_string.js\';$x495->properties[\'line\']=163;$x495->properties[\'column\']=27;$x495->attributes[\'file\']=$x495->attributes[\'line\']=$x495->attributes[\'column\']=0;}throw new JSException($x495,163,27,\'<image>/05_string.js\');}$x491=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x492=$x491($global,$global,$_String,array($x487),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x492;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x496=JS::toPrimitive($_newString,$global);$x497=JS::toPrimitive($_s,$global);$_newString=(is_string($x496)||is_string($x497)?JS::toString($x496,$global).JS::toString($x497,$global):JS::toNumber($x496,$global)+JS::toNumber($x497,$global));}else{if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x499=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',166,32,\'<image>/05_string.js\');$_TypeError=&$x499[0];list(,$WTypeError,$STypeError,$UTypeError)=$x499;$x500=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x501=$x500($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x501->class)&&$x501->class===\'Error\'&&!isset($x501->properties[\'file\'])&&!isset($x501->properties[\'line\'])&&!isset($x501->properties[\'column\'])){$x501->properties[\'file\']=\'<image>/05_string.js\';$x501->properties[\'line\']=166;$x501->properties[\'column\']=32;$x501->attributes[\'file\']=$x501->attributes[\'line\']=$x501->attributes[\'column\']=0;}throw new JSException($x501,166,32,\'<image>/05_string.js\');}$x498=JS::toObject($_replace,$global);unset($x502,$W502,$S502,$U502);$x503=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x498,(string)\'replace\',166,32,\'<image>/05_string.js\');$x502=&$x503[0];list(,$W502,$S502,$U502)=$x503;unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x506=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',166,33,\'<image>/05_string.js\');$_RegExp=&$x506[0];list(,$WRegExp,$SRegExp,$URegExp)=$x506;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x507=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',166,33,\'<image>/05_string.js\');$_ReferenceError=&$x507[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x507;$x508=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x509=$x508($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x509->class)&&$x509->class===\'Error\'&&!isset($x509->properties[\'file\'])&&!isset($x509->properties[\'line\'])&&!isset($x509->properties[\'column\'])){$x509->properties[\'file\']=\'<image>/05_string.js\';$x509->properties[\'line\']=166;$x509->properties[\'column\']=33;$x509->attributes[\'file\']=$x509->attributes[\'line\']=$x509->attributes[\'column\']=0;}throw new JSException($x509,166,33,\'<image>/05_string.js\');}$x504=clone JS::$objectTemplate;unset($x510,$W510,$S510,$U510);$x511=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',166,33,\'<image>/05_string.js\');$x510=&$x511[0];list(,$W510,$S510,$U510)=$x511;$x505=$x510;$x504->prototype=$x505;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x514=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',166,33,\'<image>/05_string.js\');$_TypeError=&$x514[0];list(,$WTypeError,$STypeError,$UTypeError)=$x514;$x515=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x516=$x515($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x516->class)&&$x516->class===\'Error\'&&!isset($x516->properties[\'file\'])&&!isset($x516->properties[\'line\'])&&!isset($x516->properties[\'column\'])){$x516->properties[\'file\']=\'<image>/05_string.js\';$x516->properties[\'line\']=166;$x516->properties[\'column\']=33;$x516->attributes[\'file\']=$x516->attributes[\'line\']=$x516->attributes[\'column\']=0;}throw new JSException($x516,166,33,\'<image>/05_string.js\');}$x512=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x513=$x512($global,$x504,$_RegExp,array(\'\\\\$([$&]|[0-9]|[0-9][0-9])\',\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x505=$x513;if(is_object($x505)&&$x505!==JS::$undefined){$x504=$x505;}$x542=clone JS::$functionTemplate;$x542->call=\'_465e5538fcb402e27559db40bec8addd_15\';$x542->parameters=array(0=>\'_\',1=>\'c\',);$x542->scope=$scope;$x542->properties[\'prototype\']=clone JS::$objectTemplate;$x542->attributes[\'prototype\']=JS::WRITABLE;$x542->properties[\'prototype\']->properties[\'constructor\']=$x542;$x542->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x542->properties[\'length\']=2;$x542->attributes[\'length\']=0;if(!(is_object($x502)&&isset($x502->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x545=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',166,32,\'<image>/05_string.js\');$_TypeError=&$x545[0];list(,$WTypeError,$STypeError,$UTypeError)=$x545;$x546=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x547=$x546($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x547->class)&&$x547->class===\'Error\'&&!isset($x547->properties[\'file\'])&&!isset($x547->properties[\'line\'])&&!isset($x547->properties[\'column\'])){$x547->properties[\'file\']=\'<image>/05_string.js\';$x547->properties[\'line\']=166;$x547->properties[\'column\']=32;$x547->attributes[\'file\']=$x547->attributes[\'line\']=$x547->attributes[\'column\']=0;}throw new JSException($x547,166,32,\'<image>/05_string.js\');}$x543=$x502->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x544=$x543($global,$x498,$x502,array($x504,$x542),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x548=JS::toPrimitive($_newString,$global);$x549=JS::toPrimitive($x544,$global);$_newString=(is_string($x548)||is_string($x549)?JS::toString($x548,$global).JS::toString($x549,$global):JS::toNumber($x548,$global)+JS::toNumber($x549,$global));}unset($x550,$W550,$S550,$U550);$x551=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,(string)\'global\',179,14,\'<image>/05_string.js\');$x550=&$x551[0];list(,$W550,$S550,$U550)=$x551;if(JS::toBoolean((!JS::toBoolean($x550,$global)),$global)){break;}}if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x553=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',184,35,\'<image>/05_string.js\');$_TypeError=&$x553[0];list(,$WTypeError,$STypeError,$UTypeError)=$x553;$x554=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x555=$x554($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x555->class)&&$x555->class===\'Error\'&&!isset($x555->properties[\'file\'])&&!isset($x555->properties[\'line\'])&&!isset($x555->properties[\'column\'])){$x555->properties[\'file\']=\'<image>/05_string.js\';$x555->properties[\'line\']=184;$x555->properties[\'column\']=35;$x555->attributes[\'file\']=$x555->attributes[\'line\']=$x555->attributes[\'column\']=0;}throw new JSException($x555,184,35,\'<image>/05_string.js\');}$x552=JS::toObject($_thisString,$global);unset($x556,$W556,$S556,$U556);$x557=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x552,(string)\'substring\',184,35,\'<image>/05_string.js\');$x556=&$x557[0];list(,$W556,$S556,$U556)=$x557;unset($x558,$W558,$S558,$U558);$x559=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_thisString,(string)\'length\',184,57,\'<image>/05_string.js\');$x558=&$x559[0];list(,$W558,$S558,$U558)=$x559;if(!(is_object($x556)&&isset($x556->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x562=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',184,35,\'<image>/05_string.js\');$_TypeError=&$x562[0];list(,$WTypeError,$STypeError,$UTypeError)=$x562;$x563=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x564=$x563($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x564->class)&&$x564->class===\'Error\'&&!isset($x564->properties[\'file\'])&&!isset($x564->properties[\'line\'])&&!isset($x564->properties[\'column\'])){$x564->properties[\'file\']=\'<image>/05_string.js\';$x564->properties[\'line\']=184;$x564->properties[\'column\']=35;$x564->attributes[\'file\']=$x564->attributes[\'line\']=$x564->attributes[\'column\']=0;}throw new JSException($x564,184,35,\'<image>/05_string.js\');}$x560=$x556->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x561=$x560($global,$x552,$x556,array($_lastIndex,$x558),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x565=JS::toPrimitive($_newString,$global);$x566=JS::toPrimitive($x561,$global);$_newString=(is_string($x565)||is_string($x566)?JS::toString($x565,$global).JS::toString($x566,$global):JS::toNumber($x565,$global)+JS::toNumber($x566,$global));return$_newString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x579 =& $scope->properties['arguments'];
$x579->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x579->properties[$i] = $args[$i];
$x579->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_search) && isset($_search->class) &&$_search->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x582 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 191, 16, '<image>/05_string.js');
$_RegExp =& $x582[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x582;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x583 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 191, 16, '<image>/05_string.js');
$_ReferenceError =& $x583[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x583;
$x584 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 16);
$x585 = $x584($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x585->class) && $x585->class === 'Error' && !isset($x585->properties['file']) && !isset($x585->properties['line']) && !isset($x585->properties['column'])) {$x585->properties['file'] = '<image>/05_string.js';$x585->properties['line'] = 191;$x585->properties['column'] = 16;$x585->attributes['file'] = $x585->attributes['line'] = $x585->attributes['column'] = 0; }
throw new JSException($x585, 191, 16, '<image>/05_string.js');
}
$x580 = clone JS::$objectTemplate;
unset($x586, $W586, $S586, $U586);
$x587 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 191, 12, '<image>/05_string.js');
$x586 =& $x587[0]; list(,$W586,$S586,$U586) = $x587;
$x581 = $x586;
$x580->prototype = $x581;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x590 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 191, 12, '<image>/05_string.js');
$_TypeError =& $x590[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x590;
$x591 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x592 = $x591($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x592->class) && $x592->class === 'Error' && !isset($x592->properties['file']) && !isset($x592->properties['line']) && !isset($x592->properties['column'])) {$x592->properties['file'] = '<image>/05_string.js';$x592->properties['line'] = 191;$x592->properties['column'] = 12;$x592->attributes['file'] = $x592->attributes['line'] = $x592->attributes['column'] = 0; }
throw new JSException($x592, 191, 12, '<image>/05_string.js');
}
$x588 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x589 = $x588($global, $x580, $_RegExp, array($_search), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x581 = $x589;
if (is_object($x581) && $x581 !== JS::$undefined) { $x580 = $x581; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x580;;
};
unset($x593, $W593, $S593, $U593);
$x594 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, (string) 'lastIndex', 194, 29, '<image>/05_string.js');
$x593 =& $x594[0]; list(,$W593,$S593,$U593) = $x594;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x593;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x596 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 195, 22, '<image>/05_string.js');
$_TypeError =& $x596[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x596;
$x597 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x598 = $x597($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x598->class) && $x598->class === 'Error' && !isset($x598->properties['file']) && !isset($x598->properties['line']) && !isset($x598->properties['column'])) {$x598->properties['file'] = '<image>/05_string.js';$x598->properties['line'] = 195;$x598->properties['column'] = 22;$x598->attributes['file'] = $x598->attributes['line'] = $x598->attributes['column'] = 0; }
throw new JSException($x598, 195, 22, '<image>/05_string.js');
}
$x595 = JS::toObject($_search, $global);
unset($x599, $W599, $S599, $U599);
$x600 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x595, (string) 'exec', 195, 22, '<image>/05_string.js');
$x599 =& $x600[0]; list(,$W599,$S599,$U599) = $x600;
if (!(is_object($x599) && isset($x599->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x603 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 195, 22, '<image>/05_string.js');
$_TypeError =& $x603[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x603;
$x604 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x605 = $x604($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x605->class) && $x605->class === 'Error' && !isset($x605->properties['file']) && !isset($x605->properties['line']) && !isset($x605->properties['column'])) {$x605->properties['file'] = '<image>/05_string.js';$x605->properties['line'] = 195;$x605->properties['column'] = 22;$x605->attributes['file'] = $x605->attributes['line'] = $x605->attributes['column'] = 0; }
throw new JSException($x605, 195, 22, '<image>/05_string.js');
}
$x601 = $x599->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x602 = $x601($global, $x595, $x599, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = $x602;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x606 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 197, 21, '<image>/05_string.js');
$_TypeError =& $x606[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x606;
$x607 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x608 = $x607($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x608->class) && $x608->class === 'Error' && !isset($x608->properties['file']) && !isset($x608->properties['line']) && !isset($x608->properties['column'])) {$x608->properties['file'] = '<image>/05_string.js';$x608->properties['line'] = 197;$x608->properties['column'] = 21;$x608->attributes['file'] = $x608->attributes['line'] = $x608->attributes['column'] = 0; }
throw new JSException($x608, 197, 21, '<image>/05_string.js');
}
$_search = JS::toObject($_search, $global);
unset($x609, $W609, $S609, $U609);
$x610 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_search, (string) 'lastIndexOf', 197, 21, '<image>/05_string.js');
$x609 =& $x610[0]; list(,$W609,$S609,$U609) = $x610;
if ($U609 && (!isset($_search->extensible) || $_search->extensible)) {$_search->properties['lastIndexOf'] = $x609; $x609 =& $_search->properties['lastIndexOf']; $_search->attributes['lastIndexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U609 = FALSE; $W609 = TRUE; }
if (isset($S609)) {
$x612 = $S609->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x613 = $x612($global, $_search, $S609, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x611 = $x613;
} else {
if (!$U609) {$x611 = $_savedLastIndex;if ($W609) { $x609 = $_savedLastIndex; }  }
else { $x611 = JS::$undefined; }
}
if (isset($_search->class) && $_search->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $_search->properties['length']) { $_search->properties['length'] = 'lastIndexOf' + 1; };
if (JS::toBoolean($_match, $global)) {
unset($x614, $W614, $S614, $U614);
$x615 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 200, 15, '<image>/05_string.js');
$x614 =& $x615[0]; list(,$W614,$S614,$U614) = $x615;
return $x614;;
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x579=&$scope->properties[\'arguments\'];$x579->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x579->properties[$i]=$args[$i];$x579->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_search)&&isset($_search->class)&&$_search->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x582=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',191,16,\'<image>/05_string.js\');$_RegExp=&$x582[0];list(,$WRegExp,$SRegExp,$URegExp)=$x582;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x583=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',191,16,\'<image>/05_string.js\');$_ReferenceError=&$x583[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x583;$x584=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,16);$x585=$x584($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x585->class)&&$x585->class===\'Error\'&&!isset($x585->properties[\'file\'])&&!isset($x585->properties[\'line\'])&&!isset($x585->properties[\'column\'])){$x585->properties[\'file\']=\'<image>/05_string.js\';$x585->properties[\'line\']=191;$x585->properties[\'column\']=16;$x585->attributes[\'file\']=$x585->attributes[\'line\']=$x585->attributes[\'column\']=0;}throw new JSException($x585,191,16,\'<image>/05_string.js\');}$x580=clone JS::$objectTemplate;unset($x586,$W586,$S586,$U586);$x587=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',191,12,\'<image>/05_string.js\');$x586=&$x587[0];list(,$W586,$S586,$U586)=$x587;$x581=$x586;$x580->prototype=$x581;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x590=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',191,12,\'<image>/05_string.js\');$_TypeError=&$x590[0];list(,$WTypeError,$STypeError,$UTypeError)=$x590;$x591=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x592=$x591($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x592->class)&&$x592->class===\'Error\'&&!isset($x592->properties[\'file\'])&&!isset($x592->properties[\'line\'])&&!isset($x592->properties[\'column\'])){$x592->properties[\'file\']=\'<image>/05_string.js\';$x592->properties[\'line\']=191;$x592->properties[\'column\']=12;$x592->attributes[\'file\']=$x592->attributes[\'line\']=$x592->attributes[\'column\']=0;}throw new JSException($x592,191,12,\'<image>/05_string.js\');}$x588=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x589=$x588($global,$x580,$_RegExp,array($_search),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x581=$x589;if(is_object($x581)&&$x581!==JS::$undefined){$x580=$x581;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x580;}unset($x593,$W593,$S593,$U593);$x594=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,(string)\'lastIndex\',194,29,\'<image>/05_string.js\');$x593=&$x594[0];list(,$W593,$S593,$U593)=$x594;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x593;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x596=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',195,22,\'<image>/05_string.js\');$_TypeError=&$x596[0];list(,$WTypeError,$STypeError,$UTypeError)=$x596;$x597=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x598=$x597($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x598->class)&&$x598->class===\'Error\'&&!isset($x598->properties[\'file\'])&&!isset($x598->properties[\'line\'])&&!isset($x598->properties[\'column\'])){$x598->properties[\'file\']=\'<image>/05_string.js\';$x598->properties[\'line\']=195;$x598->properties[\'column\']=22;$x598->attributes[\'file\']=$x598->attributes[\'line\']=$x598->attributes[\'column\']=0;}throw new JSException($x598,195,22,\'<image>/05_string.js\');}$x595=JS::toObject($_search,$global);unset($x599,$W599,$S599,$U599);$x600=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x595,(string)\'exec\',195,22,\'<image>/05_string.js\');$x599=&$x600[0];list(,$W599,$S599,$U599)=$x600;if(!(is_object($x599)&&isset($x599->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x603=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',195,22,\'<image>/05_string.js\');$_TypeError=&$x603[0];list(,$WTypeError,$STypeError,$UTypeError)=$x603;$x604=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x605=$x604($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x605->class)&&$x605->class===\'Error\'&&!isset($x605->properties[\'file\'])&&!isset($x605->properties[\'line\'])&&!isset($x605->properties[\'column\'])){$x605->properties[\'file\']=\'<image>/05_string.js\';$x605->properties[\'line\']=195;$x605->properties[\'column\']=22;$x605->attributes[\'file\']=$x605->attributes[\'line\']=$x605->attributes[\'column\']=0;}throw new JSException($x605,195,22,\'<image>/05_string.js\');}$x601=$x599->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x602=$x601($global,$x595,$x599,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=$x602;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x606=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',197,21,\'<image>/05_string.js\');$_TypeError=&$x606[0];list(,$WTypeError,$STypeError,$UTypeError)=$x606;$x607=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x608=$x607($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x608->class)&&$x608->class===\'Error\'&&!isset($x608->properties[\'file\'])&&!isset($x608->properties[\'line\'])&&!isset($x608->properties[\'column\'])){$x608->properties[\'file\']=\'<image>/05_string.js\';$x608->properties[\'line\']=197;$x608->properties[\'column\']=21;$x608->attributes[\'file\']=$x608->attributes[\'line\']=$x608->attributes[\'column\']=0;}throw new JSException($x608,197,21,\'<image>/05_string.js\');}$_search=JS::toObject($_search,$global);unset($x609,$W609,$S609,$U609);$x610=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_search,(string)\'lastIndexOf\',197,21,\'<image>/05_string.js\');$x609=&$x610[0];list(,$W609,$S609,$U609)=$x610;if($U609&&(!isset($_search->extensible)||$_search->extensible)){$_search->properties[\'lastIndexOf\']=$x609;$x609=&$_search->properties[\'lastIndexOf\'];$_search->attributes[\'lastIndexOf\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U609=FALSE;$W609=TRUE;}if(isset($S609)){$x612=$S609->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x613=$x612($global,$_search,$S609,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x611=$x613;}else{if(!$U609){$x611=$_savedLastIndex;if($W609){$x609=$_savedLastIndex;}}else{$x611=JS::$undefined;}}if(isset($_search->class)&&$_search->class===\'Array\'&&is_int(\'lastIndexOf\')&&\'lastIndexOf\'>=$_search->properties[\'length\']){$_search->properties[\'length\']=\'lastIndexOf\'+1;}if(JS::toBoolean($_match,$global)){unset($x614,$W614,$S614,$U614);$x615=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',200,15,\'<image>/05_string.js\');$x614=&$x615[0];list(,$W614,$S614,$U614)=$x615;return$x614;}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x628 =& $scope->properties['arguments'];
$x628->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x628->properties[$i] = $args[$i];
$x628->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x629 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x629, $global)) {
$x630 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x630;;
};
$x631 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x631, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x632 = JS::toPrimitive($_start, $global);
$x633 = JS::toPrimitive(0, $global);
$x634 = (is_string($x632) && is_string($x633) ? strcmp($x632, $x633) < 0 : (!is_nan($x635 = JS::toNumber($x632, $global)) && !is_nan($x636 = JS::toNumber($x633, $global)) && $x635 < $x636));
if (JS::toBoolean($x634, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x637 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 218, 11, '<image>/05_string.js');
$_Math =& $x637[0]; list(,$WMath,$SMath,$UMath) = $x637;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x638 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 218, 11, '<image>/05_string.js');
$_ReferenceError =& $x638[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x638;
$x639 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 11);
$x640 = $x639($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x640->class) && $x640->class === 'Error' && !isset($x640->properties['file']) && !isset($x640->properties['line']) && !isset($x640->properties['column'])) {$x640->properties['file'] = '<image>/05_string.js';$x640->properties['line'] = 218;$x640->properties['column'] = 11;$x640->attributes['file'] = $x640->attributes['line'] = $x640->attributes['column'] = 0; }
throw new JSException($x640, 218, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x642 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 218, 19, '<image>/05_string.js');
$_TypeError =& $x642[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x642;
$x643 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x644 = $x643($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x644->class) && $x644->class === 'Error' && !isset($x644->properties['file']) && !isset($x644->properties['line']) && !isset($x644->properties['column'])) {$x644->properties['file'] = '<image>/05_string.js';$x644->properties['line'] = 218;$x644->properties['column'] = 19;$x644->attributes['file'] = $x644->attributes['line'] = $x644->attributes['column'] = 0; }
throw new JSException($x644, 218, 19, '<image>/05_string.js');
}
$x641 = JS::toObject($_Math, $global);
unset($x645, $W645, $S645, $U645);
$x646 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x641, (string) 'max', 218, 19, '<image>/05_string.js');
$x645 =& $x646[0]; list(,$W645,$S645,$U645) = $x646;
$x647 = JS::toPrimitive($_start, $global);
$x648 = JS::toPrimitive($_length, $global);
if (!(is_object($x645) && isset($x645->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x651 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 218, 19, '<image>/05_string.js');
$_TypeError =& $x651[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x651;
$x652 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x653 = $x652($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x653->class) && $x653->class === 'Error' && !isset($x653->properties['file']) && !isset($x653->properties['line']) && !isset($x653->properties['column'])) {$x653->properties['file'] = '<image>/05_string.js';$x653->properties['line'] = 218;$x653->properties['column'] = 19;$x653->attributes['file'] = $x653->attributes['line'] = $x653->attributes['column'] = 0; }
throw new JSException($x653, 218, 19, '<image>/05_string.js');
}
$x649 = $x645->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x650 = $x649($global, $x641, $x645, array((is_string($x647) || is_string($x648) ? JS::toString($x647, $global) . JS::toString($x648, $global) : JS::toNumber($x647, $global) + JS::toNumber($x648, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x650;;
};
$x654 = JS::toPrimitive($_end, $global);
$x655 = JS::toPrimitive(0, $global);
$x656 = (is_string($x654) && is_string($x655) ? strcmp($x654, $x655) < 0 : (!is_nan($x657 = JS::toNumber($x654, $global)) && !is_nan($x658 = JS::toNumber($x655, $global)) && $x657 < $x658));
if (JS::toBoolean($x656, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x659 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 222, 9, '<image>/05_string.js');
$_Math =& $x659[0]; list(,$WMath,$SMath,$UMath) = $x659;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x660 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 222, 9, '<image>/05_string.js');
$_ReferenceError =& $x660[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x660;
$x661 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 9);
$x662 = $x661($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x662->class) && $x662->class === 'Error' && !isset($x662->properties['file']) && !isset($x662->properties['line']) && !isset($x662->properties['column'])) {$x662->properties['file'] = '<image>/05_string.js';$x662->properties['line'] = 222;$x662->properties['column'] = 9;$x662->attributes['file'] = $x662->attributes['line'] = $x662->attributes['column'] = 0; }
throw new JSException($x662, 222, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x664 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 222, 17, '<image>/05_string.js');
$_TypeError =& $x664[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x664;
$x665 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x666 = $x665($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x666->class) && $x666->class === 'Error' && !isset($x666->properties['file']) && !isset($x666->properties['line']) && !isset($x666->properties['column'])) {$x666->properties['file'] = '<image>/05_string.js';$x666->properties['line'] = 222;$x666->properties['column'] = 17;$x666->attributes['file'] = $x666->attributes['line'] = $x666->attributes['column'] = 0; }
throw new JSException($x666, 222, 17, '<image>/05_string.js');
}
$x663 = JS::toObject($_Math, $global);
unset($x667, $W667, $S667, $U667);
$x668 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x663, (string) 'max', 222, 17, '<image>/05_string.js');
$x667 =& $x668[0]; list(,$W667,$S667,$U667) = $x668;
$x669 = JS::toPrimitive($_end, $global);
$x670 = JS::toPrimitive($_length, $global);
if (!(is_object($x667) && isset($x667->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x673 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 222, 17, '<image>/05_string.js');
$_TypeError =& $x673[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x673;
$x674 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x675 = $x674($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x675->class) && $x675->class === 'Error' && !isset($x675->properties['file']) && !isset($x675->properties['line']) && !isset($x675->properties['column'])) {$x675->properties['file'] = '<image>/05_string.js';$x675->properties['line'] = 222;$x675->properties['column'] = 17;$x675->attributes['file'] = $x675->attributes['line'] = $x675->attributes['column'] = 0; }
throw new JSException($x675, 222, 17, '<image>/05_string.js');
}
$x671 = $x667->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x672 = $x671($global, $x663, $x667, array((is_string($x669) || is_string($x670) ? JS::toString($x669, $global) . JS::toString($x670, $global) : JS::toNumber($x669, $global) + JS::toNumber($x670, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x672;;
};
return (string) substr($leThis->value,$_start, max($_end-$_start, 0));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x628=&$scope->properties[\'arguments\'];$x628->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x628->properties[$i]=$args[$i];$x628->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x629=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x629,$global)){$x630=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x630;}$x631=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x631,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x632=JS::toPrimitive($_start,$global);$x633=JS::toPrimitive(0,$global);$x634=(is_string($x632)&&is_string($x633)?strcmp($x632,$x633)<0:(!is_nan($x635=JS::toNumber($x632,$global))&&!is_nan($x636=JS::toNumber($x633,$global))&&$x635<$x636));if(JS::toBoolean($x634,$global)){unset($_Math,$WMath,$SMath,$UMath);$x637=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',218,11,\'<image>/05_string.js\');$_Math=&$x637[0];list(,$WMath,$SMath,$UMath)=$x637;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x638=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',218,11,\'<image>/05_string.js\');$_ReferenceError=&$x638[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x638;$x639=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,11);$x640=$x639($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x640->class)&&$x640->class===\'Error\'&&!isset($x640->properties[\'file\'])&&!isset($x640->properties[\'line\'])&&!isset($x640->properties[\'column\'])){$x640->properties[\'file\']=\'<image>/05_string.js\';$x640->properties[\'line\']=218;$x640->properties[\'column\']=11;$x640->attributes[\'file\']=$x640->attributes[\'line\']=$x640->attributes[\'column\']=0;}throw new JSException($x640,218,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x642=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',218,19,\'<image>/05_string.js\');$_TypeError=&$x642[0];list(,$WTypeError,$STypeError,$UTypeError)=$x642;$x643=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x644=$x643($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x644->class)&&$x644->class===\'Error\'&&!isset($x644->properties[\'file\'])&&!isset($x644->properties[\'line\'])&&!isset($x644->properties[\'column\'])){$x644->properties[\'file\']=\'<image>/05_string.js\';$x644->properties[\'line\']=218;$x644->properties[\'column\']=19;$x644->attributes[\'file\']=$x644->attributes[\'line\']=$x644->attributes[\'column\']=0;}throw new JSException($x644,218,19,\'<image>/05_string.js\');}$x641=JS::toObject($_Math,$global);unset($x645,$W645,$S645,$U645);$x646=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x641,(string)\'max\',218,19,\'<image>/05_string.js\');$x645=&$x646[0];list(,$W645,$S645,$U645)=$x646;$x647=JS::toPrimitive($_start,$global);$x648=JS::toPrimitive($_length,$global);if(!(is_object($x645)&&isset($x645->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x651=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',218,19,\'<image>/05_string.js\');$_TypeError=&$x651[0];list(,$WTypeError,$STypeError,$UTypeError)=$x651;$x652=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x653=$x652($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x653->class)&&$x653->class===\'Error\'&&!isset($x653->properties[\'file\'])&&!isset($x653->properties[\'line\'])&&!isset($x653->properties[\'column\'])){$x653->properties[\'file\']=\'<image>/05_string.js\';$x653->properties[\'line\']=218;$x653->properties[\'column\']=19;$x653->attributes[\'file\']=$x653->attributes[\'line\']=$x653->attributes[\'column\']=0;}throw new JSException($x653,218,19,\'<image>/05_string.js\');}$x649=$x645->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x650=$x649($global,$x641,$x645,array((is_string($x647)||is_string($x648)?JS::toString($x647,$global).JS::toString($x648,$global):JS::toNumber($x647,$global)+JS::toNumber($x648,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x650;}$x654=JS::toPrimitive($_end,$global);$x655=JS::toPrimitive(0,$global);$x656=(is_string($x654)&&is_string($x655)?strcmp($x654,$x655)<0:(!is_nan($x657=JS::toNumber($x654,$global))&&!is_nan($x658=JS::toNumber($x655,$global))&&$x657<$x658));if(JS::toBoolean($x656,$global)){unset($_Math,$WMath,$SMath,$UMath);$x659=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',222,9,\'<image>/05_string.js\');$_Math=&$x659[0];list(,$WMath,$SMath,$UMath)=$x659;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x660=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',222,9,\'<image>/05_string.js\');$_ReferenceError=&$x660[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x660;$x661=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,9);$x662=$x661($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x662->class)&&$x662->class===\'Error\'&&!isset($x662->properties[\'file\'])&&!isset($x662->properties[\'line\'])&&!isset($x662->properties[\'column\'])){$x662->properties[\'file\']=\'<image>/05_string.js\';$x662->properties[\'line\']=222;$x662->properties[\'column\']=9;$x662->attributes[\'file\']=$x662->attributes[\'line\']=$x662->attributes[\'column\']=0;}throw new JSException($x662,222,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x664=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',222,17,\'<image>/05_string.js\');$_TypeError=&$x664[0];list(,$WTypeError,$STypeError,$UTypeError)=$x664;$x665=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x666=$x665($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x666->class)&&$x666->class===\'Error\'&&!isset($x666->properties[\'file\'])&&!isset($x666->properties[\'line\'])&&!isset($x666->properties[\'column\'])){$x666->properties[\'file\']=\'<image>/05_string.js\';$x666->properties[\'line\']=222;$x666->properties[\'column\']=17;$x666->attributes[\'file\']=$x666->attributes[\'line\']=$x666->attributes[\'column\']=0;}throw new JSException($x666,222,17,\'<image>/05_string.js\');}$x663=JS::toObject($_Math,$global);unset($x667,$W667,$S667,$U667);$x668=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x663,(string)\'max\',222,17,\'<image>/05_string.js\');$x667=&$x668[0];list(,$W667,$S667,$U667)=$x668;$x669=JS::toPrimitive($_end,$global);$x670=JS::toPrimitive($_length,$global);if(!(is_object($x667)&&isset($x667->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x673=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',222,17,\'<image>/05_string.js\');$_TypeError=&$x673[0];list(,$WTypeError,$STypeError,$UTypeError)=$x673;$x674=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x675=$x674($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x675->class)&&$x675->class===\'Error\'&&!isset($x675->properties[\'file\'])&&!isset($x675->properties[\'line\'])&&!isset($x675->properties[\'column\'])){$x675->properties[\'file\']=\'<image>/05_string.js\';$x675->properties[\'line\']=222;$x675->properties[\'column\']=17;$x675->attributes[\'file\']=$x675->attributes[\'line\']=$x675->attributes[\'column\']=0;}throw new JSException($x675,222,17,\'<image>/05_string.js\');}$x671=$x667->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x672=$x671($global,$x663,$x667,array((is_string($x669)||is_string($x670)?JS::toString($x669,$global).JS::toString($x670,$global):JS::toNumber($x669,$global)+JS::toNumber($x670,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x672;}return(string)substr($leThis->value,$_start,max($_end-$_start,0));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x688 =& $scope->properties['arguments'];
$x688->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x688->properties[$i] = $args[$i];
$x688->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$scope->properties['limit'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_limit =& $scope->properties['limit'];
$Ulimit = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x689 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x689, $global)) {
$x690 = clone JS::$arrayTemplate;
$x690->properties['length'] = 1;
$x690->attributes['length'] = JS::WRITABLE;
$x690->properties[0] = $leThis->value;
$x690->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x690;;
};
$x691 = (((gettype($_separator) === gettype('') && $_separator === ''))|| (((is_float($_separator) || is_int($_separator)) && (is_float('') || is_int(''))) && $_separator == ''));
if (JS::toBoolean($x691, $global)) {
$x692 = clone JS::$arrayTemplate;
$x692->properties['length'] = 0;
$x692->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x692;
for ($x693 = 0;; ++$x693) {
if ($x693 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x694, $W694, $S694, $U694);
$x695 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 236, 27, '<image>/05_string.js');
$x694 =& $x695[0]; list(,$W694,$S694,$U694) = $x695;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x694;
}
if ($x693 !== 0) {
$x696 = ++$_i;
}
$x697 = JS::toPrimitive($_i, $global);
$x698 = JS::toPrimitive($_l, $global);
$x699 = (is_string($x697) && is_string($x698) ? strcmp($x697, $x698) < 0 : (!is_nan($x700 = JS::toNumber($x697, $global)) && !is_nan($x701 = JS::toNumber($x698, $global)) && $x700 < $x701));
if (!JS::toBoolean($x699, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x703 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 237, 20, '<image>/05_string.js');
$_TypeError =& $x703[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x703;
$x704 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x705 = $x704($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x705->class) && $x705->class === 'Error' && !isset($x705->properties['file']) && !isset($x705->properties['line']) && !isset($x705->properties['column'])) {$x705->properties['file'] = '<image>/05_string.js';$x705->properties['line'] = 237;$x705->properties['column'] = 20;$x705->attributes['file'] = $x705->attributes['line'] = $x705->attributes['column'] = 0; }
throw new JSException($x705, 237, 20, '<image>/05_string.js');
}
$x702 = JS::toObject($_returnArray, $global);
unset($x706, $W706, $S706, $U706);
$x707 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x702, (string) 'push', 237, 20, '<image>/05_string.js');
$x706 =& $x707[0]; list(,$W706,$S706,$U706) = $x707;
if (!(is_object($x706) && isset($x706->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x710 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 237, 20, '<image>/05_string.js');
$_TypeError =& $x710[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x710;
$x711 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x712 = $x711($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x712->class) && $x712->class === 'Error' && !isset($x712->properties['file']) && !isset($x712->properties['line']) && !isset($x712->properties['column'])) {$x712->properties['file'] = '<image>/05_string.js';$x712->properties['line'] = 237;$x712->properties['column'] = 20;$x712->attributes['file'] = $x712->attributes['line'] = $x712->attributes['column'] = 0; }
throw new JSException($x712, 237, 20, '<image>/05_string.js');
}
$x708 = $x706->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x709 = $x708($global, $x702, $x706, array((string) substr($leThis->value,$_i, 1)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;;
};
$x714 = $_separator;
$x714 = ($x714 === JS::$undefined ? 'undefined' : (is_int($x714) || is_float($x714) ? 'number' : (is_bool($x714) ? 'boolean' : (is_string($x714) ? 'string' : (is_object($x714) && isset($x714->call) ? 'function' : 'object')))));
$x713 = (((gettype($x714) === gettype('string') && $x714 === 'string'))|| (((is_float($x714) || is_int($x714)) && (is_float('string') || is_int('string'))) && $x714 == 'string'));
if (JS::toBoolean($x713, $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x717 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'RegExp', 244, 19, '<image>/05_string.js');
$_RegExp =& $x717[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x717;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x718 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 244, 19, '<image>/05_string.js');
$_ReferenceError =& $x718[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x718;
$x719 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 19);
$x720 = $x719($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x720->class) && $x720->class === 'Error' && !isset($x720->properties['file']) && !isset($x720->properties['line']) && !isset($x720->properties['column'])) {$x720->properties['file'] = '<image>/05_string.js';$x720->properties['line'] = 244;$x720->properties['column'] = 19;$x720->attributes['file'] = $x720->attributes['line'] = $x720->attributes['column'] = 0; }
throw new JSException($x720, 244, 19, '<image>/05_string.js');
}
$x715 = clone JS::$objectTemplate;
unset($x721, $W721, $S721, $U721);
$x722 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, (string) 'prototype', 244, 15, '<image>/05_string.js');
$x721 =& $x722[0]; list(,$W721,$S721,$U721) = $x722;
$x716 = $x721;
$x715->prototype = $x716;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x725 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 244, 15, '<image>/05_string.js');
$_TypeError =& $x725[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x725;
$x726 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x727 = $x726($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x727->class) && $x727->class === 'Error' && !isset($x727->properties['file']) && !isset($x727->properties['line']) && !isset($x727->properties['column'])) {$x727->properties['file'] = '<image>/05_string.js';$x727->properties['line'] = 244;$x727->properties['column'] = 15;$x727->attributes['file'] = $x727->attributes['line'] = $x727->attributes['column'] = 0; }
throw new JSException($x727, 244, 15, '<image>/05_string.js');
}
$x723 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x724 = $x723($global, $x715, $_RegExp, array(preg_quote(JS::toString($_separator, $global), '/'), 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x716 = $x724;
if (is_object($x716) && $x716 !== JS::$undefined) { $x715 = $x716; }
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x715;;
};
$x728 = clone JS::$arrayTemplate;
$x728->properties['length'] = 0;
$x728->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x728;
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
unset($x729, $W729, $S729, $U729);
$x730 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, (string) 'lastIndex', 248, 29, '<image>/05_string.js');
$x729 =& $x730[0]; list(,$W729,$S729,$U729) = $x730;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x729;
unset($x731, $W731, $S731, $U731);
$x732 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, (string) 'global', 248, 64, '<image>/05_string.js');
$x731 =& $x732[0]; list(,$W731,$S731,$U731) = $x732;
$scope->properties['savedGlobal'] = JS::$undefined; $_savedGlobal =& $scope->properties['savedGlobal'];
$UsavedGlobal = FALSE;
$_savedGlobal = $x731;
$_separator->properties['global'] = TRUE;
$x733 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x733, $global)) {
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x734 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Infinity', 253, 11, '<image>/05_string.js');
$_Infinity =& $x734[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x734;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x735 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 253, 11, '<image>/05_string.js');
$_ReferenceError =& $x735[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x735;
$x736 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 253, 11);
$x737 = $x736($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x737->class) && $x737->class === 'Error' && !isset($x737->properties['file']) && !isset($x737->properties['line']) && !isset($x737->properties['column'])) {$x737->properties['file'] = '<image>/05_string.js';$x737->properties['line'] = 253;$x737->properties['column'] = 11;$x737->attributes['file'] = $x737->attributes['line'] = $x737->attributes['column'] = 0; }
throw new JSException($x737, 253, 11, '<image>/05_string.js');
}
if ($Ulimit) {$global->properties['limit'] = $_limit; $_limit =& $global->properties['limit']; }
$_limit = $_Infinity;;
};
for (;;) {
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x741 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 256, 32, '<image>/05_string.js');
$_TypeError =& $x741[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x741;
$x742 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x743 = $x742($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x743->class) && $x743->class === 'Error' && !isset($x743->properties['file']) && !isset($x743->properties['line']) && !isset($x743->properties['column'])) {$x743->properties['file'] = '<image>/05_string.js';$x743->properties['line'] = 256;$x743->properties['column'] = 32;$x743->attributes['file'] = $x743->attributes['line'] = $x743->attributes['column'] = 0; }
throw new JSException($x743, 256, 32, '<image>/05_string.js');
}
$x740 = JS::toObject($_separator, $global);
unset($x744, $W744, $S744, $U744);
$x745 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x740, (string) 'exec', 256, 32, '<image>/05_string.js');
$x744 =& $x745[0]; list(,$W744,$S744,$U744) = $x745;
if (!(is_object($x744) && isset($x744->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x748 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 256, 32, '<image>/05_string.js');
$_TypeError =& $x748[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x748;
$x749 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x750 = $x749($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x750->class) && $x750->class === 'Error' && !isset($x750->properties['file']) && !isset($x750->properties['line']) && !isset($x750->properties['column'])) {$x750->properties['file'] = '<image>/05_string.js';$x750->properties['line'] = 256;$x750->properties['column'] = 32;$x750->attributes['file'] = $x750->attributes['line'] = $x750->attributes['column'] = 0; }
throw new JSException($x750, 256, 32, '<image>/05_string.js');
}
$x746 = $x744->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x747 = $x746($global, $x740, $x744, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x747;
$x739 = $_match;
if (JS::toBoolean($x739, $global)) {
$x754 = --$_limit;
$x751 = JS::toPrimitive($x754, $global);
$x752 = JS::toPrimitive(0, $global);
$x753 = (is_string($x752) && is_string($x751) ? strcmp($x752, $x751) < 0 : (!is_nan($x755 = JS::toNumber($x752, $global)) && !is_nan($x756 = JS::toNumber($x751, $global)) && $x755 < $x756));
$x739 = $x753; }
$x738 = $x739;
if (JS::toBoolean($x738, $global)) {
unset($x760, $W760, $S760, $U760);
$x761 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 256, 80, '<image>/05_string.js');
$x760 =& $x761[0]; list(,$W760,$S760,$U760) = $x761;
$x757 = JS::toPrimitive($_lastIndex, $global);
$x758 = JS::toPrimitive($x760, $global);
$x759 = (is_string($x757) && is_string($x758) ? strcmp($x757, $x758) < 0 : (!is_nan($x762 = JS::toNumber($x757, $global)) && !is_nan($x763 = JS::toNumber($x758, $global)) && $x762 < $x763));
$x738 = $x759; }
if (!JS::toBoolean($x738, $global)) { break; }

unset($x766, $W766, $S766, $U766);
$x767 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 257, 12, '<image>/05_string.js');
$x766 =& $x767[0]; list(,$W766,$S766,$U766) = $x767;
$x765 = (((gettype($x766) === gettype('') && $x766 === ''))|| (((is_float($x766) || is_int($x766)) && (is_float('') || is_int(''))) && $x766 == ''));
$x764 = $x765;
if (JS::toBoolean($x764, $global)) {
unset($x769, $W769, $S769, $U769);
$x770 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 257, 31, '<image>/05_string.js');
$x769 =& $x770[0]; list(,$W769,$S769,$U769) = $x770;
$x768 = (((gettype($x769) === gettype($_lastIndex) && $x769 === $_lastIndex))|| (((is_float($x769) || is_int($x769)) && (is_float($_lastIndex) || is_int($_lastIndex))) && $x769 == $_lastIndex));
$x764 = $x768; }
if (JS::toBoolean($x764, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x772 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 20, '<image>/05_string.js');
$_TypeError =& $x772[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x772;
$x773 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x774 = $x773($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x774->class) && $x774->class === 'Error' && !isset($x774->properties['file']) && !isset($x774->properties['line']) && !isset($x774->properties['column'])) {$x774->properties['file'] = '<image>/05_string.js';$x774->properties['line'] = 258;$x774->properties['column'] = 20;$x774->attributes['file'] = $x774->attributes['line'] = $x774->attributes['column'] = 0; }
throw new JSException($x774, 258, 20, '<image>/05_string.js');
}
$x771 = JS::toObject($_returnArray, $global);
unset($x775, $W775, $S775, $U775);
$x776 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x771, (string) 'push', 258, 20, '<image>/05_string.js');
$x775 =& $x776[0]; list(,$W775,$S775,$U775) = $x776;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x778 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 35, '<image>/05_string.js');
$_TypeError =& $x778[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x778;
$x779 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x780 = $x779($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x780->class) && $x780->class === 'Error' && !isset($x780->properties['file']) && !isset($x780->properties['line']) && !isset($x780->properties['column'])) {$x780->properties['file'] = '<image>/05_string.js';$x780->properties['line'] = 258;$x780->properties['column'] = 35;$x780->attributes['file'] = $x780->attributes['line'] = $x780->attributes['column'] = 0; }
throw new JSException($x780, 258, 35, '<image>/05_string.js');
}
$x777 = JS::toObject($leThis, $global);
unset($x781, $W781, $S781, $U781);
$x782 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x777, (string) 'substring', 258, 35, '<image>/05_string.js');
$x781 =& $x782[0]; list(,$W781,$S781,$U781) = $x782;
$x783 = JS::toPrimitive($_lastIndex, $global);
$x784 = JS::toPrimitive(1, $global);
if (!(is_object($x781) && isset($x781->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x787 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 35, '<image>/05_string.js');
$_TypeError =& $x787[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x787;
$x788 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x789 = $x788($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x789->class) && $x789->class === 'Error' && !isset($x789->properties['file']) && !isset($x789->properties['line']) && !isset($x789->properties['column'])) {$x789->properties['file'] = '<image>/05_string.js';$x789->properties['line'] = 258;$x789->properties['column'] = 35;$x789->attributes['file'] = $x789->attributes['line'] = $x789->attributes['column'] = 0; }
throw new JSException($x789, 258, 35, '<image>/05_string.js');
}
$x785 = $x781->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x786 = $x785($global, $x777, $x781, array($_lastIndex, (is_string($x783) || is_string($x784) ? JS::toString($x783, $global) . JS::toString($x784, $global) : JS::toNumber($x783, $global) + JS::toNumber($x784, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x775) && isset($x775->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x792 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 258, 20, '<image>/05_string.js');
$_TypeError =& $x792[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x792;
$x793 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x794 = $x793($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x794->class) && $x794->class === 'Error' && !isset($x794->properties['file']) && !isset($x794->properties['line']) && !isset($x794->properties['column'])) {$x794->properties['file'] = '<image>/05_string.js';$x794->properties['line'] = 258;$x794->properties['column'] = 20;$x794->attributes['file'] = $x794->attributes['line'] = $x794->attributes['column'] = 0; }
throw new JSException($x794, 258, 20, '<image>/05_string.js');
}
$x790 = $x775->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x791 = $x790($global, $x771, $x775, array($x786), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x795 = ++$_lastIndex;
unset($x796, $W796, $S796, $U796);
$x797 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, (string) 'lastIndex', 260, 15, '<image>/05_string.js');
$x796 =& $x797[0]; list(,$W796,$S796,$U796) = $x797;
$x798 = ++$x796;;
}
else {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x800 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 20, '<image>/05_string.js');
$_TypeError =& $x800[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x800;
$x801 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x802 = $x801($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x802->class) && $x802->class === 'Error' && !isset($x802->properties['file']) && !isset($x802->properties['line']) && !isset($x802->properties['column'])) {$x802->properties['file'] = '<image>/05_string.js';$x802->properties['line'] = 263;$x802->properties['column'] = 20;$x802->attributes['file'] = $x802->attributes['line'] = $x802->attributes['column'] = 0; }
throw new JSException($x802, 263, 20, '<image>/05_string.js');
}
$x799 = JS::toObject($_returnArray, $global);
unset($x803, $W803, $S803, $U803);
$x804 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x799, (string) 'push', 263, 20, '<image>/05_string.js');
$x803 =& $x804[0]; list(,$W803,$S803,$U803) = $x804;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x806 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 35, '<image>/05_string.js');
$_TypeError =& $x806[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x806;
$x807 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x808 = $x807($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x808->class) && $x808->class === 'Error' && !isset($x808->properties['file']) && !isset($x808->properties['line']) && !isset($x808->properties['column'])) {$x808->properties['file'] = '<image>/05_string.js';$x808->properties['line'] = 263;$x808->properties['column'] = 35;$x808->attributes['file'] = $x808->attributes['line'] = $x808->attributes['column'] = 0; }
throw new JSException($x808, 263, 35, '<image>/05_string.js');
}
$x805 = JS::toObject($leThis, $global);
unset($x809, $W809, $S809, $U809);
$x810 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x805, (string) 'substring', 263, 35, '<image>/05_string.js');
$x809 =& $x810[0]; list(,$W809,$S809,$U809) = $x810;
unset($x811, $W811, $S811, $U811);
$x812 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 263, 52, '<image>/05_string.js');
$x811 =& $x812[0]; list(,$W811,$S811,$U811) = $x812;
if (!(is_object($x809) && isset($x809->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x815 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 35, '<image>/05_string.js');
$_TypeError =& $x815[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x815;
$x816 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x817 = $x816($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x817->class) && $x817->class === 'Error' && !isset($x817->properties['file']) && !isset($x817->properties['line']) && !isset($x817->properties['column'])) {$x817->properties['file'] = '<image>/05_string.js';$x817->properties['line'] = 263;$x817->properties['column'] = 35;$x817->attributes['file'] = $x817->attributes['line'] = $x817->attributes['column'] = 0; }
throw new JSException($x817, 263, 35, '<image>/05_string.js');
}
$x813 = $x809->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x814 = $x813($global, $x805, $x809, array($_lastIndex, $x811), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x803) && isset($x803->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x820 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 263, 20, '<image>/05_string.js');
$_TypeError =& $x820[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x820;
$x821 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x822 = $x821($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x822->class) && $x822->class === 'Error' && !isset($x822->properties['file']) && !isset($x822->properties['line']) && !isset($x822->properties['column'])) {$x822->properties['file'] = '<image>/05_string.js';$x822->properties['line'] = 263;$x822->properties['column'] = 20;$x822->attributes['file'] = $x822->attributes['line'] = $x822->attributes['column'] = 0; }
throw new JSException($x822, 263, 20, '<image>/05_string.js');
}
$x818 = $x803->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x819 = $x818($global, $x799, $x803, array($x814), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
for ($x823 = 0;; ++$x823) {
if ($x823 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x824, $W824, $S824, $U824);
$x825 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'length', 265, 29, '<image>/05_string.js');
$x824 =& $x825[0]; list(,$W824,$S824,$U824) = $x825;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x824;
}
if ($x823 !== 0) {
$x826 = ++$_i;
}
$x827 = JS::toPrimitive($_i, $global);
$x828 = JS::toPrimitive($_l, $global);
$x829 = (is_string($x827) && is_string($x828) ? strcmp($x827, $x828) < 0 : (!is_nan($x830 = JS::toNumber($x827, $global)) && !is_nan($x831 = JS::toNumber($x828, $global)) && $x830 < $x831));
if (!JS::toBoolean($x829, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x833 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 266, 21, '<image>/05_string.js');
$_TypeError =& $x833[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x833;
$x834 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x835 = $x834($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x835->class) && $x835->class === 'Error' && !isset($x835->properties['file']) && !isset($x835->properties['line']) && !isset($x835->properties['column'])) {$x835->properties['file'] = '<image>/05_string.js';$x835->properties['line'] = 266;$x835->properties['column'] = 21;$x835->attributes['file'] = $x835->attributes['line'] = $x835->attributes['column'] = 0; }
throw new JSException($x835, 266, 21, '<image>/05_string.js');
}
$x832 = JS::toObject($_returnArray, $global);
unset($x836, $W836, $S836, $U836);
$x837 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x832, (string) 'push', 266, 21, '<image>/05_string.js');
$x836 =& $x837[0]; list(,$W836,$S836,$U836) = $x837;
unset($x838, $W838, $S838, $U838);
$x839 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) $_i, 266, 27, '<image>/05_string.js');
$x838 =& $x839[0]; list(,$W838,$S838,$U838) = $x839;
if (!(is_object($x836) && isset($x836->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x842 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 266, 21, '<image>/05_string.js');
$_TypeError =& $x842[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x842;
$x843 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x844 = $x843($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x844->class) && $x844->class === 'Error' && !isset($x844->properties['file']) && !isset($x844->properties['line']) && !isset($x844->properties['column'])) {$x844->properties['file'] = '<image>/05_string.js';$x844->properties['line'] = 266;$x844->properties['column'] = 21;$x844->attributes['file'] = $x844->attributes['line'] = $x844->attributes['column'] = 0; }
throw new JSException($x844, 266, 21, '<image>/05_string.js');
}
$x840 = $x836->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x841 = $x840($global, $x832, $x836, array($x838), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x847, $W847, $S847, $U847);
$x848 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 'index', 269, 21, '<image>/05_string.js');
$x847 =& $x848[0]; list(,$W847,$S847,$U847) = $x848;
unset($x849, $W849, $S849, $U849);
$x850 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, (string) 0, 269, 35, '<image>/05_string.js');
$x849 =& $x850[0]; list(,$W849,$S849,$U849) = $x850;
unset($x851, $W851, $S851, $U851);
$x852 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x849, (string) 'length', 269, 38, '<image>/05_string.js');
$x851 =& $x852[0]; list(,$W851,$S851,$U851) = $x852;
$x845 = JS::toPrimitive($x847, $global);
$x846 = JS::toPrimitive($x851, $global);
$x853 = (is_string($x845) || is_string($x846) ? JS::toString($x845, $global) . JS::toString($x846, $global) : JS::toNumber($x845, $global) + JS::toNumber($x846, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x853;;
};
};
unset($x857, $W857, $S857, $U857);
$x858 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 273, 22, '<image>/05_string.js');
$x857 =& $x858[0]; list(,$W857,$S857,$U857) = $x858;
$x854 = JS::toPrimitive($_lastIndex, $global);
$x855 = JS::toPrimitive($x857, $global);
$x856 = (is_string($x854) && is_string($x855) ? strcmp($x854, $x855) < 0 : (!is_nan($x859 = JS::toNumber($x854, $global)) && !is_nan($x860 = JS::toNumber($x855, $global)) && $x859 < $x860));
if (JS::toBoolean($x856, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x862 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 19, '<image>/05_string.js');
$_TypeError =& $x862[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x862;
$x863 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x864 = $x863($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x864->class) && $x864->class === 'Error' && !isset($x864->properties['file']) && !isset($x864->properties['line']) && !isset($x864->properties['column'])) {$x864->properties['file'] = '<image>/05_string.js';$x864->properties['line'] = 274;$x864->properties['column'] = 19;$x864->attributes['file'] = $x864->attributes['line'] = $x864->attributes['column'] = 0; }
throw new JSException($x864, 274, 19, '<image>/05_string.js');
}
$x861 = JS::toObject($_returnArray, $global);
unset($x865, $W865, $S865, $U865);
$x866 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x861, (string) 'push', 274, 19, '<image>/05_string.js');
$x865 =& $x866[0]; list(,$W865,$S865,$U865) = $x866;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x868 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 34, '<image>/05_string.js');
$_TypeError =& $x868[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x868;
$x869 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x870 = $x869($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x870->class) && $x870->class === 'Error' && !isset($x870->properties['file']) && !isset($x870->properties['line']) && !isset($x870->properties['column'])) {$x870->properties['file'] = '<image>/05_string.js';$x870->properties['line'] = 274;$x870->properties['column'] = 34;$x870->attributes['file'] = $x870->attributes['line'] = $x870->attributes['column'] = 0; }
throw new JSException($x870, 274, 34, '<image>/05_string.js');
}
$x867 = JS::toObject($leThis, $global);
unset($x871, $W871, $S871, $U871);
$x872 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x867, (string) 'substring', 274, 34, '<image>/05_string.js');
$x871 =& $x872[0]; list(,$W871,$S871,$U871) = $x872;
unset($x873, $W873, $S873, $U873);
$x874 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, (string) 'length', 274, 50, '<image>/05_string.js');
$x873 =& $x874[0]; list(,$W873,$S873,$U873) = $x874;
if (!(is_object($x871) && isset($x871->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x877 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 34, '<image>/05_string.js');
$_TypeError =& $x877[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x877;
$x878 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x879 = $x878($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x879->class) && $x879->class === 'Error' && !isset($x879->properties['file']) && !isset($x879->properties['line']) && !isset($x879->properties['column'])) {$x879->properties['file'] = '<image>/05_string.js';$x879->properties['line'] = 274;$x879->properties['column'] = 34;$x879->attributes['file'] = $x879->attributes['line'] = $x879->attributes['column'] = 0; }
throw new JSException($x879, 274, 34, '<image>/05_string.js');
}
$x875 = $x871->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x876 = $x875($global, $x867, $x871, array($_lastIndex, $x873), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x865) && isset($x865->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x882 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 274, 19, '<image>/05_string.js');
$_TypeError =& $x882[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x882;
$x883 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x884 = $x883($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x884->class) && $x884->class === 'Error' && !isset($x884->properties['file']) && !isset($x884->properties['line']) && !isset($x884->properties['column'])) {$x884->properties['file'] = '<image>/05_string.js';$x884->properties['line'] = 274;$x884->properties['column'] = 19;$x884->attributes['file'] = $x884->attributes['line'] = $x884->attributes['column'] = 0; }
throw new JSException($x884, 274, 19, '<image>/05_string.js');
}
$x880 = $x865->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x881 = $x880($global, $x861, $x865, array($x876), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
$_separator->properties['global'] =$_savedGlobal;
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x885 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 278, 22, '<image>/05_string.js');
$_TypeError =& $x885[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x885;
$x886 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x887 = $x886($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x887->class) && $x887->class === 'Error' && !isset($x887->properties['file']) && !isset($x887->properties['line']) && !isset($x887->properties['column'])) {$x887->properties['file'] = '<image>/05_string.js';$x887->properties['line'] = 278;$x887->properties['column'] = 22;$x887->attributes['file'] = $x887->attributes['line'] = $x887->attributes['column'] = 0; }
throw new JSException($x887, 278, 22, '<image>/05_string.js');
}
$_separator = JS::toObject($_separator, $global);
unset($x888, $W888, $S888, $U888);
$x889 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_separator, (string) 'lastIndex', 278, 22, '<image>/05_string.js');
$x888 =& $x889[0]; list(,$W888,$S888,$U888) = $x889;
if ($U888 && (!isset($_separator->extensible) || $_separator->extensible)) {$_separator->properties['lastIndex'] = $x888; $x888 =& $_separator->properties['lastIndex']; $_separator->attributes['lastIndex'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U888 = FALSE; $W888 = TRUE; }
if (isset($S888)) {
$x891 = $S888->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x892 = $x891($global, $_separator, $S888, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x890 = $x892;
} else {
if (!$U888) {$x890 = $_savedLastIndex;if ($W888) { $x888 = $_savedLastIndex; }  }
else { $x890 = JS::$undefined; }
}
if (isset($_separator->class) && $_separator->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_separator->properties['length']) { $_separator->properties['length'] = 'lastIndex' + 1; };
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x688=&$scope->properties[\'arguments\'];$x688->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x688->properties[$i]=$args[$i];$x688->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$scope->properties[\'limit\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_limit=&$scope->properties[\'limit\'];$Ulimit=FALSE;$global->scope[++$global->scope_sp]=$scope;$x689=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x689,$global)){$x690=clone JS::$arrayTemplate;$x690->properties[\'length\']=1;$x690->attributes[\'length\']=JS::WRITABLE;$x690->properties[0]=$leThis->value;$x690->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x690;}$x691=(((gettype($_separator)===gettype(\'\')&&$_separator===\'\'))||(((is_float($_separator)||is_int($_separator))&&(is_float(\'\')||is_int(\'\')))&&$_separator==\'\'));if(JS::toBoolean($x691,$global)){$x692=clone JS::$arrayTemplate;$x692->properties[\'length\']=0;$x692->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x692;for($x693=0;;++$x693){if($x693===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x694,$W694,$S694,$U694);$x695=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',236,27,\'<image>/05_string.js\');$x694=&$x695[0];list(,$W694,$S694,$U694)=$x695;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x694;}if($x693!==0){$x696=++$_i;}$x697=JS::toPrimitive($_i,$global);$x698=JS::toPrimitive($_l,$global);$x699=(is_string($x697)&&is_string($x698)?strcmp($x697,$x698)<0:(!is_nan($x700=JS::toNumber($x697,$global))&&!is_nan($x701=JS::toNumber($x698,$global))&&$x700<$x701));if(!JS::toBoolean($x699,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x703=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',237,20,\'<image>/05_string.js\');$_TypeError=&$x703[0];list(,$WTypeError,$STypeError,$UTypeError)=$x703;$x704=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x705=$x704($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x705->class)&&$x705->class===\'Error\'&&!isset($x705->properties[\'file\'])&&!isset($x705->properties[\'line\'])&&!isset($x705->properties[\'column\'])){$x705->properties[\'file\']=\'<image>/05_string.js\';$x705->properties[\'line\']=237;$x705->properties[\'column\']=20;$x705->attributes[\'file\']=$x705->attributes[\'line\']=$x705->attributes[\'column\']=0;}throw new JSException($x705,237,20,\'<image>/05_string.js\');}$x702=JS::toObject($_returnArray,$global);unset($x706,$W706,$S706,$U706);$x707=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x702,(string)\'push\',237,20,\'<image>/05_string.js\');$x706=&$x707[0];list(,$W706,$S706,$U706)=$x707;if(!(is_object($x706)&&isset($x706->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x710=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',237,20,\'<image>/05_string.js\');$_TypeError=&$x710[0];list(,$WTypeError,$STypeError,$UTypeError)=$x710;$x711=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x712=$x711($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x712->class)&&$x712->class===\'Error\'&&!isset($x712->properties[\'file\'])&&!isset($x712->properties[\'line\'])&&!isset($x712->properties[\'column\'])){$x712->properties[\'file\']=\'<image>/05_string.js\';$x712->properties[\'line\']=237;$x712->properties[\'column\']=20;$x712->attributes[\'file\']=$x712->attributes[\'line\']=$x712->attributes[\'column\']=0;}throw new JSException($x712,237,20,\'<image>/05_string.js\');}$x708=$x706->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x709=$x708($global,$x702,$x706,array((string)substr($leThis->value,$_i,1)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;}$x714=$_separator;$x714=($x714===JS::$undefined?\'undefined\':(is_int($x714)||is_float($x714)?\'number\':(is_bool($x714)?\'boolean\':(is_string($x714)?\'string\':(is_object($x714)&&isset($x714->call)?\'function\':\'object\')))));$x713=(((gettype($x714)===gettype(\'string\')&&$x714===\'string\'))||(((is_float($x714)||is_int($x714))&&(is_float(\'string\')||is_int(\'string\')))&&$x714==\'string\'));if(JS::toBoolean($x713,$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x717=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'RegExp\',244,19,\'<image>/05_string.js\');$_RegExp=&$x717[0];list(,$WRegExp,$SRegExp,$URegExp)=$x717;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x718=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',244,19,\'<image>/05_string.js\');$_ReferenceError=&$x718[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x718;$x719=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,19);$x720=$x719($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x720->class)&&$x720->class===\'Error\'&&!isset($x720->properties[\'file\'])&&!isset($x720->properties[\'line\'])&&!isset($x720->properties[\'column\'])){$x720->properties[\'file\']=\'<image>/05_string.js\';$x720->properties[\'line\']=244;$x720->properties[\'column\']=19;$x720->attributes[\'file\']=$x720->attributes[\'line\']=$x720->attributes[\'column\']=0;}throw new JSException($x720,244,19,\'<image>/05_string.js\');}$x715=clone JS::$objectTemplate;unset($x721,$W721,$S721,$U721);$x722=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,(string)\'prototype\',244,15,\'<image>/05_string.js\');$x721=&$x722[0];list(,$W721,$S721,$U721)=$x722;$x716=$x721;$x715->prototype=$x716;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x725=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',244,15,\'<image>/05_string.js\');$_TypeError=&$x725[0];list(,$WTypeError,$STypeError,$UTypeError)=$x725;$x726=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x727=$x726($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x727->class)&&$x727->class===\'Error\'&&!isset($x727->properties[\'file\'])&&!isset($x727->properties[\'line\'])&&!isset($x727->properties[\'column\'])){$x727->properties[\'file\']=\'<image>/05_string.js\';$x727->properties[\'line\']=244;$x727->properties[\'column\']=15;$x727->attributes[\'file\']=$x727->attributes[\'line\']=$x727->attributes[\'column\']=0;}throw new JSException($x727,244,15,\'<image>/05_string.js\');}$x723=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x724=$x723($global,$x715,$_RegExp,array(preg_quote(JS::toString($_separator,$global),\'/\'),\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x716=$x724;if(is_object($x716)&&$x716!==JS::$undefined){$x715=$x716;}if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x715;}$x728=clone JS::$arrayTemplate;$x728->properties[\'length\']=0;$x728->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x728;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;unset($x729,$W729,$S729,$U729);$x730=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,(string)\'lastIndex\',248,29,\'<image>/05_string.js\');$x729=&$x730[0];list(,$W729,$S729,$U729)=$x730;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x729;unset($x731,$W731,$S731,$U731);$x732=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,(string)\'global\',248,64,\'<image>/05_string.js\');$x731=&$x732[0];list(,$W731,$S731,$U731)=$x732;$scope->properties[\'savedGlobal\']=JS::$undefined;$_savedGlobal=&$scope->properties[\'savedGlobal\'];$UsavedGlobal=FALSE;$_savedGlobal=$x731;$_separator->properties[\'global\']=TRUE;$x733=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x733,$global)){unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x734=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Infinity\',253,11,\'<image>/05_string.js\');$_Infinity=&$x734[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x734;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x735=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',253,11,\'<image>/05_string.js\');$_ReferenceError=&$x735[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x735;$x736=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',253,11);$x737=$x736($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x737->class)&&$x737->class===\'Error\'&&!isset($x737->properties[\'file\'])&&!isset($x737->properties[\'line\'])&&!isset($x737->properties[\'column\'])){$x737->properties[\'file\']=\'<image>/05_string.js\';$x737->properties[\'line\']=253;$x737->properties[\'column\']=11;$x737->attributes[\'file\']=$x737->attributes[\'line\']=$x737->attributes[\'column\']=0;}throw new JSException($x737,253,11,\'<image>/05_string.js\');}if($Ulimit){$global->properties[\'limit\']=$_limit;$_limit=&$global->properties[\'limit\'];}$_limit=$_Infinity;}for(;;){if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x741=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',256,32,\'<image>/05_string.js\');$_TypeError=&$x741[0];list(,$WTypeError,$STypeError,$UTypeError)=$x741;$x742=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x743=$x742($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x743->class)&&$x743->class===\'Error\'&&!isset($x743->properties[\'file\'])&&!isset($x743->properties[\'line\'])&&!isset($x743->properties[\'column\'])){$x743->properties[\'file\']=\'<image>/05_string.js\';$x743->properties[\'line\']=256;$x743->properties[\'column\']=32;$x743->attributes[\'file\']=$x743->attributes[\'line\']=$x743->attributes[\'column\']=0;}throw new JSException($x743,256,32,\'<image>/05_string.js\');}$x740=JS::toObject($_separator,$global);unset($x744,$W744,$S744,$U744);$x745=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x740,(string)\'exec\',256,32,\'<image>/05_string.js\');$x744=&$x745[0];list(,$W744,$S744,$U744)=$x745;if(!(is_object($x744)&&isset($x744->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x748=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',256,32,\'<image>/05_string.js\');$_TypeError=&$x748[0];list(,$WTypeError,$STypeError,$UTypeError)=$x748;$x749=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x750=$x749($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x750->class)&&$x750->class===\'Error\'&&!isset($x750->properties[\'file\'])&&!isset($x750->properties[\'line\'])&&!isset($x750->properties[\'column\'])){$x750->properties[\'file\']=\'<image>/05_string.js\';$x750->properties[\'line\']=256;$x750->properties[\'column\']=32;$x750->attributes[\'file\']=$x750->attributes[\'line\']=$x750->attributes[\'column\']=0;}throw new JSException($x750,256,32,\'<image>/05_string.js\');}$x746=$x744->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x747=$x746($global,$x740,$x744,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x747;$x739=$_match;if(JS::toBoolean($x739,$global)){$x754=--$_limit;$x751=JS::toPrimitive($x754,$global);$x752=JS::toPrimitive(0,$global);$x753=(is_string($x752)&&is_string($x751)?strcmp($x752,$x751)<0:(!is_nan($x755=JS::toNumber($x752,$global))&&!is_nan($x756=JS::toNumber($x751,$global))&&$x755<$x756));$x739=$x753;}$x738=$x739;if(JS::toBoolean($x738,$global)){unset($x760,$W760,$S760,$U760);$x761=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',256,80,\'<image>/05_string.js\');$x760=&$x761[0];list(,$W760,$S760,$U760)=$x761;$x757=JS::toPrimitive($_lastIndex,$global);$x758=JS::toPrimitive($x760,$global);$x759=(is_string($x757)&&is_string($x758)?strcmp($x757,$x758)<0:(!is_nan($x762=JS::toNumber($x757,$global))&&!is_nan($x763=JS::toNumber($x758,$global))&&$x762<$x763));$x738=$x759;}if(!JS::toBoolean($x738,$global)){break;}unset($x766,$W766,$S766,$U766);$x767=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,257,12,\'<image>/05_string.js\');$x766=&$x767[0];list(,$W766,$S766,$U766)=$x767;$x765=(((gettype($x766)===gettype(\'\')&&$x766===\'\'))||(((is_float($x766)||is_int($x766))&&(is_float(\'\')||is_int(\'\')))&&$x766==\'\'));$x764=$x765;if(JS::toBoolean($x764,$global)){unset($x769,$W769,$S769,$U769);$x770=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',257,31,\'<image>/05_string.js\');$x769=&$x770[0];list(,$W769,$S769,$U769)=$x770;$x768=(((gettype($x769)===gettype($_lastIndex)&&$x769===$_lastIndex))||(((is_float($x769)||is_int($x769))&&(is_float($_lastIndex)||is_int($_lastIndex)))&&$x769==$_lastIndex));$x764=$x768;}if(JS::toBoolean($x764,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x772=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,20,\'<image>/05_string.js\');$_TypeError=&$x772[0];list(,$WTypeError,$STypeError,$UTypeError)=$x772;$x773=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x774=$x773($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x774->class)&&$x774->class===\'Error\'&&!isset($x774->properties[\'file\'])&&!isset($x774->properties[\'line\'])&&!isset($x774->properties[\'column\'])){$x774->properties[\'file\']=\'<image>/05_string.js\';$x774->properties[\'line\']=258;$x774->properties[\'column\']=20;$x774->attributes[\'file\']=$x774->attributes[\'line\']=$x774->attributes[\'column\']=0;}throw new JSException($x774,258,20,\'<image>/05_string.js\');}$x771=JS::toObject($_returnArray,$global);unset($x775,$W775,$S775,$U775);$x776=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x771,(string)\'push\',258,20,\'<image>/05_string.js\');$x775=&$x776[0];list(,$W775,$S775,$U775)=$x776;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x778=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,35,\'<image>/05_string.js\');$_TypeError=&$x778[0];list(,$WTypeError,$STypeError,$UTypeError)=$x778;$x779=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x780=$x779($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x780->class)&&$x780->class===\'Error\'&&!isset($x780->properties[\'file\'])&&!isset($x780->properties[\'line\'])&&!isset($x780->properties[\'column\'])){$x780->properties[\'file\']=\'<image>/05_string.js\';$x780->properties[\'line\']=258;$x780->properties[\'column\']=35;$x780->attributes[\'file\']=$x780->attributes[\'line\']=$x780->attributes[\'column\']=0;}throw new JSException($x780,258,35,\'<image>/05_string.js\');}$x777=JS::toObject($leThis,$global);unset($x781,$W781,$S781,$U781);$x782=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x777,(string)\'substring\',258,35,\'<image>/05_string.js\');$x781=&$x782[0];list(,$W781,$S781,$U781)=$x782;$x783=JS::toPrimitive($_lastIndex,$global);$x784=JS::toPrimitive(1,$global);if(!(is_object($x781)&&isset($x781->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x787=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,35,\'<image>/05_string.js\');$_TypeError=&$x787[0];list(,$WTypeError,$STypeError,$UTypeError)=$x787;$x788=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x789=$x788($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x789->class)&&$x789->class===\'Error\'&&!isset($x789->properties[\'file\'])&&!isset($x789->properties[\'line\'])&&!isset($x789->properties[\'column\'])){$x789->properties[\'file\']=\'<image>/05_string.js\';$x789->properties[\'line\']=258;$x789->properties[\'column\']=35;$x789->attributes[\'file\']=$x789->attributes[\'line\']=$x789->attributes[\'column\']=0;}throw new JSException($x789,258,35,\'<image>/05_string.js\');}$x785=$x781->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x786=$x785($global,$x777,$x781,array($_lastIndex,(is_string($x783)||is_string($x784)?JS::toString($x783,$global).JS::toString($x784,$global):JS::toNumber($x783,$global)+JS::toNumber($x784,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x775)&&isset($x775->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x792=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',258,20,\'<image>/05_string.js\');$_TypeError=&$x792[0];list(,$WTypeError,$STypeError,$UTypeError)=$x792;$x793=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x794=$x793($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x794->class)&&$x794->class===\'Error\'&&!isset($x794->properties[\'file\'])&&!isset($x794->properties[\'line\'])&&!isset($x794->properties[\'column\'])){$x794->properties[\'file\']=\'<image>/05_string.js\';$x794->properties[\'line\']=258;$x794->properties[\'column\']=20;$x794->attributes[\'file\']=$x794->attributes[\'line\']=$x794->attributes[\'column\']=0;}throw new JSException($x794,258,20,\'<image>/05_string.js\');}$x790=$x775->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x791=$x790($global,$x771,$x775,array($x786),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x795=++$_lastIndex;unset($x796,$W796,$S796,$U796);$x797=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,(string)\'lastIndex\',260,15,\'<image>/05_string.js\');$x796=&$x797[0];list(,$W796,$S796,$U796)=$x797;$x798=++$x796;}else{if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x800=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,20,\'<image>/05_string.js\');$_TypeError=&$x800[0];list(,$WTypeError,$STypeError,$UTypeError)=$x800;$x801=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x802=$x801($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x802->class)&&$x802->class===\'Error\'&&!isset($x802->properties[\'file\'])&&!isset($x802->properties[\'line\'])&&!isset($x802->properties[\'column\'])){$x802->properties[\'file\']=\'<image>/05_string.js\';$x802->properties[\'line\']=263;$x802->properties[\'column\']=20;$x802->attributes[\'file\']=$x802->attributes[\'line\']=$x802->attributes[\'column\']=0;}throw new JSException($x802,263,20,\'<image>/05_string.js\');}$x799=JS::toObject($_returnArray,$global);unset($x803,$W803,$S803,$U803);$x804=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x799,(string)\'push\',263,20,\'<image>/05_string.js\');$x803=&$x804[0];list(,$W803,$S803,$U803)=$x804;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x806=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,35,\'<image>/05_string.js\');$_TypeError=&$x806[0];list(,$WTypeError,$STypeError,$UTypeError)=$x806;$x807=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x808=$x807($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x808->class)&&$x808->class===\'Error\'&&!isset($x808->properties[\'file\'])&&!isset($x808->properties[\'line\'])&&!isset($x808->properties[\'column\'])){$x808->properties[\'file\']=\'<image>/05_string.js\';$x808->properties[\'line\']=263;$x808->properties[\'column\']=35;$x808->attributes[\'file\']=$x808->attributes[\'line\']=$x808->attributes[\'column\']=0;}throw new JSException($x808,263,35,\'<image>/05_string.js\');}$x805=JS::toObject($leThis,$global);unset($x809,$W809,$S809,$U809);$x810=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x805,(string)\'substring\',263,35,\'<image>/05_string.js\');$x809=&$x810[0];list(,$W809,$S809,$U809)=$x810;unset($x811,$W811,$S811,$U811);$x812=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',263,52,\'<image>/05_string.js\');$x811=&$x812[0];list(,$W811,$S811,$U811)=$x812;if(!(is_object($x809)&&isset($x809->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x815=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,35,\'<image>/05_string.js\');$_TypeError=&$x815[0];list(,$WTypeError,$STypeError,$UTypeError)=$x815;$x816=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x817=$x816($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x817->class)&&$x817->class===\'Error\'&&!isset($x817->properties[\'file\'])&&!isset($x817->properties[\'line\'])&&!isset($x817->properties[\'column\'])){$x817->properties[\'file\']=\'<image>/05_string.js\';$x817->properties[\'line\']=263;$x817->properties[\'column\']=35;$x817->attributes[\'file\']=$x817->attributes[\'line\']=$x817->attributes[\'column\']=0;}throw new JSException($x817,263,35,\'<image>/05_string.js\');}$x813=$x809->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x814=$x813($global,$x805,$x809,array($_lastIndex,$x811),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x803)&&isset($x803->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x820=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',263,20,\'<image>/05_string.js\');$_TypeError=&$x820[0];list(,$WTypeError,$STypeError,$UTypeError)=$x820;$x821=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x822=$x821($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x822->class)&&$x822->class===\'Error\'&&!isset($x822->properties[\'file\'])&&!isset($x822->properties[\'line\'])&&!isset($x822->properties[\'column\'])){$x822->properties[\'file\']=\'<image>/05_string.js\';$x822->properties[\'line\']=263;$x822->properties[\'column\']=20;$x822->attributes[\'file\']=$x822->attributes[\'line\']=$x822->attributes[\'column\']=0;}throw new JSException($x822,263,20,\'<image>/05_string.js\');}$x818=$x803->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x819=$x818($global,$x799,$x803,array($x814),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);for($x823=0;;++$x823){if($x823===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x824,$W824,$S824,$U824);$x825=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'length\',265,29,\'<image>/05_string.js\');$x824=&$x825[0];list(,$W824,$S824,$U824)=$x825;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x824;}if($x823!==0){$x826=++$_i;}$x827=JS::toPrimitive($_i,$global);$x828=JS::toPrimitive($_l,$global);$x829=(is_string($x827)&&is_string($x828)?strcmp($x827,$x828)<0:(!is_nan($x830=JS::toNumber($x827,$global))&&!is_nan($x831=JS::toNumber($x828,$global))&&$x830<$x831));if(!JS::toBoolean($x829,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x833=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',266,21,\'<image>/05_string.js\');$_TypeError=&$x833[0];list(,$WTypeError,$STypeError,$UTypeError)=$x833;$x834=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x835=$x834($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x835->class)&&$x835->class===\'Error\'&&!isset($x835->properties[\'file\'])&&!isset($x835->properties[\'line\'])&&!isset($x835->properties[\'column\'])){$x835->properties[\'file\']=\'<image>/05_string.js\';$x835->properties[\'line\']=266;$x835->properties[\'column\']=21;$x835->attributes[\'file\']=$x835->attributes[\'line\']=$x835->attributes[\'column\']=0;}throw new JSException($x835,266,21,\'<image>/05_string.js\');}$x832=JS::toObject($_returnArray,$global);unset($x836,$W836,$S836,$U836);$x837=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x832,(string)\'push\',266,21,\'<image>/05_string.js\');$x836=&$x837[0];list(,$W836,$S836,$U836)=$x837;unset($x838,$W838,$S838,$U838);$x839=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)$_i,266,27,\'<image>/05_string.js\');$x838=&$x839[0];list(,$W838,$S838,$U838)=$x839;if(!(is_object($x836)&&isset($x836->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x842=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',266,21,\'<image>/05_string.js\');$_TypeError=&$x842[0];list(,$WTypeError,$STypeError,$UTypeError)=$x842;$x843=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x844=$x843($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x844->class)&&$x844->class===\'Error\'&&!isset($x844->properties[\'file\'])&&!isset($x844->properties[\'line\'])&&!isset($x844->properties[\'column\'])){$x844->properties[\'file\']=\'<image>/05_string.js\';$x844->properties[\'line\']=266;$x844->properties[\'column\']=21;$x844->attributes[\'file\']=$x844->attributes[\'line\']=$x844->attributes[\'column\']=0;}throw new JSException($x844,266,21,\'<image>/05_string.js\');}$x840=$x836->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x841=$x840($global,$x832,$x836,array($x838),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x847,$W847,$S847,$U847);$x848=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)\'index\',269,21,\'<image>/05_string.js\');$x847=&$x848[0];list(,$W847,$S847,$U847)=$x848;unset($x849,$W849,$S849,$U849);$x850=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,(string)0,269,35,\'<image>/05_string.js\');$x849=&$x850[0];list(,$W849,$S849,$U849)=$x850;unset($x851,$W851,$S851,$U851);$x852=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x849,(string)\'length\',269,38,\'<image>/05_string.js\');$x851=&$x852[0];list(,$W851,$S851,$U851)=$x852;$x845=JS::toPrimitive($x847,$global);$x846=JS::toPrimitive($x851,$global);$x853=(is_string($x845)||is_string($x846)?JS::toString($x845,$global).JS::toString($x846,$global):JS::toNumber($x845,$global)+JS::toNumber($x846,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x853;}}unset($x857,$W857,$S857,$U857);$x858=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',273,22,\'<image>/05_string.js\');$x857=&$x858[0];list(,$W857,$S857,$U857)=$x858;$x854=JS::toPrimitive($_lastIndex,$global);$x855=JS::toPrimitive($x857,$global);$x856=(is_string($x854)&&is_string($x855)?strcmp($x854,$x855)<0:(!is_nan($x859=JS::toNumber($x854,$global))&&!is_nan($x860=JS::toNumber($x855,$global))&&$x859<$x860));if(JS::toBoolean($x856,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x862=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,19,\'<image>/05_string.js\');$_TypeError=&$x862[0];list(,$WTypeError,$STypeError,$UTypeError)=$x862;$x863=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x864=$x863($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x864->class)&&$x864->class===\'Error\'&&!isset($x864->properties[\'file\'])&&!isset($x864->properties[\'line\'])&&!isset($x864->properties[\'column\'])){$x864->properties[\'file\']=\'<image>/05_string.js\';$x864->properties[\'line\']=274;$x864->properties[\'column\']=19;$x864->attributes[\'file\']=$x864->attributes[\'line\']=$x864->attributes[\'column\']=0;}throw new JSException($x864,274,19,\'<image>/05_string.js\');}$x861=JS::toObject($_returnArray,$global);unset($x865,$W865,$S865,$U865);$x866=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x861,(string)\'push\',274,19,\'<image>/05_string.js\');$x865=&$x866[0];list(,$W865,$S865,$U865)=$x866;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x868=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,34,\'<image>/05_string.js\');$_TypeError=&$x868[0];list(,$WTypeError,$STypeError,$UTypeError)=$x868;$x869=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x870=$x869($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x870->class)&&$x870->class===\'Error\'&&!isset($x870->properties[\'file\'])&&!isset($x870->properties[\'line\'])&&!isset($x870->properties[\'column\'])){$x870->properties[\'file\']=\'<image>/05_string.js\';$x870->properties[\'line\']=274;$x870->properties[\'column\']=34;$x870->attributes[\'file\']=$x870->attributes[\'line\']=$x870->attributes[\'column\']=0;}throw new JSException($x870,274,34,\'<image>/05_string.js\');}$x867=JS::toObject($leThis,$global);unset($x871,$W871,$S871,$U871);$x872=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x867,(string)\'substring\',274,34,\'<image>/05_string.js\');$x871=&$x872[0];list(,$W871,$S871,$U871)=$x872;unset($x873,$W873,$S873,$U873);$x874=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,(string)\'length\',274,50,\'<image>/05_string.js\');$x873=&$x874[0];list(,$W873,$S873,$U873)=$x874;if(!(is_object($x871)&&isset($x871->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x877=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,34,\'<image>/05_string.js\');$_TypeError=&$x877[0];list(,$WTypeError,$STypeError,$UTypeError)=$x877;$x878=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x879=$x878($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x879->class)&&$x879->class===\'Error\'&&!isset($x879->properties[\'file\'])&&!isset($x879->properties[\'line\'])&&!isset($x879->properties[\'column\'])){$x879->properties[\'file\']=\'<image>/05_string.js\';$x879->properties[\'line\']=274;$x879->properties[\'column\']=34;$x879->attributes[\'file\']=$x879->attributes[\'line\']=$x879->attributes[\'column\']=0;}throw new JSException($x879,274,34,\'<image>/05_string.js\');}$x875=$x871->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x876=$x875($global,$x867,$x871,array($_lastIndex,$x873),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x865)&&isset($x865->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x882=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',274,19,\'<image>/05_string.js\');$_TypeError=&$x882[0];list(,$WTypeError,$STypeError,$UTypeError)=$x882;$x883=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x884=$x883($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x884->class)&&$x884->class===\'Error\'&&!isset($x884->properties[\'file\'])&&!isset($x884->properties[\'line\'])&&!isset($x884->properties[\'column\'])){$x884->properties[\'file\']=\'<image>/05_string.js\';$x884->properties[\'line\']=274;$x884->properties[\'column\']=19;$x884->attributes[\'file\']=$x884->attributes[\'line\']=$x884->attributes[\'column\']=0;}throw new JSException($x884,274,19,\'<image>/05_string.js\');}$x880=$x865->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x881=$x880($global,$x861,$x865,array($x876),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}$_separator->properties[\'global\']=$_savedGlobal;if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x885=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',278,22,\'<image>/05_string.js\');$_TypeError=&$x885[0];list(,$WTypeError,$STypeError,$UTypeError)=$x885;$x886=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x887=$x886($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x887->class)&&$x887->class===\'Error\'&&!isset($x887->properties[\'file\'])&&!isset($x887->properties[\'line\'])&&!isset($x887->properties[\'column\'])){$x887->properties[\'file\']=\'<image>/05_string.js\';$x887->properties[\'line\']=278;$x887->properties[\'column\']=22;$x887->attributes[\'file\']=$x887->attributes[\'line\']=$x887->attributes[\'column\']=0;}throw new JSException($x887,278,22,\'<image>/05_string.js\');}$_separator=JS::toObject($_separator,$global);unset($x888,$W888,$S888,$U888);$x889=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_separator,(string)\'lastIndex\',278,22,\'<image>/05_string.js\');$x888=&$x889[0];list(,$W888,$S888,$U888)=$x889;if($U888&&(!isset($_separator->extensible)||$_separator->extensible)){$_separator->properties[\'lastIndex\']=$x888;$x888=&$_separator->properties[\'lastIndex\'];$_separator->attributes[\'lastIndex\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U888=FALSE;$W888=TRUE;}if(isset($S888)){$x891=$S888->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x892=$x891($global,$_separator,$S888,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x890=$x892;}else{if(!$U888){$x890=$_savedLastIndex;if($W888){$x888=$_savedLastIndex;}}else{$x890=JS::$undefined;}}if(isset($_separator->class)&&$_separator->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_separator->properties[\'length\']){$_separator->properties[\'length\']=\'lastIndex\'+1;}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x905 =& $scope->properties['arguments'];
$x905->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x905->properties[$i] = $args[$i];
$x905->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x906 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x906, $global)) {
$x907 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x907;;
};
$x908 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x908, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x909 = JS::toPrimitive($_start, $global);
$x910 = JS::toPrimitive(0, $global);
$x911 = (is_string($x909) && is_string($x910) ? strcmp($x909, $x910) < 0 : (!is_nan($x912 = JS::toNumber($x909, $global)) && !is_nan($x913 = JS::toNumber($x910, $global)) && $x912 < $x913));
if (JS::toBoolean($x911, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x914 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 295, 11, '<image>/05_string.js');
$_Math =& $x914[0]; list(,$WMath,$SMath,$UMath) = $x914;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x915 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 295, 11, '<image>/05_string.js');
$_ReferenceError =& $x915[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x915;
$x916 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 11);
$x917 = $x916($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x917->class) && $x917->class === 'Error' && !isset($x917->properties['file']) && !isset($x917->properties['line']) && !isset($x917->properties['column'])) {$x917->properties['file'] = '<image>/05_string.js';$x917->properties['line'] = 295;$x917->properties['column'] = 11;$x917->attributes['file'] = $x917->attributes['line'] = $x917->attributes['column'] = 0; }
throw new JSException($x917, 295, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x919 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 295, 19, '<image>/05_string.js');
$_TypeError =& $x919[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x919;
$x920 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x921 = $x920($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x921->class) && $x921->class === 'Error' && !isset($x921->properties['file']) && !isset($x921->properties['line']) && !isset($x921->properties['column'])) {$x921->properties['file'] = '<image>/05_string.js';$x921->properties['line'] = 295;$x921->properties['column'] = 19;$x921->attributes['file'] = $x921->attributes['line'] = $x921->attributes['column'] = 0; }
throw new JSException($x921, 295, 19, '<image>/05_string.js');
}
$x918 = JS::toObject($_Math, $global);
unset($x922, $W922, $S922, $U922);
$x923 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x918, (string) 'max', 295, 19, '<image>/05_string.js');
$x922 =& $x923[0]; list(,$W922,$S922,$U922) = $x923;
$x924 = JS::toPrimitive($_start, $global);
$x925 = JS::toPrimitive($_length, $global);
if (!(is_object($x922) && isset($x922->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x928 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 295, 19, '<image>/05_string.js');
$_TypeError =& $x928[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x928;
$x929 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x930 = $x929($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x930->class) && $x930->class === 'Error' && !isset($x930->properties['file']) && !isset($x930->properties['line']) && !isset($x930->properties['column'])) {$x930->properties['file'] = '<image>/05_string.js';$x930->properties['line'] = 295;$x930->properties['column'] = 19;$x930->attributes['file'] = $x930->attributes['line'] = $x930->attributes['column'] = 0; }
throw new JSException($x930, 295, 19, '<image>/05_string.js');
}
$x926 = $x922->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x927 = $x926($global, $x918, $x922, array((is_string($x924) || is_string($x925) ? JS::toString($x924, $global) . JS::toString($x925, $global) : JS::toNumber($x924, $global) + JS::toNumber($x925, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x927;;
};
$x931 = JS::toPrimitive($_end, $global);
$x932 = JS::toPrimitive(0, $global);
$x933 = (is_string($x931) && is_string($x932) ? strcmp($x931, $x932) < 0 : (!is_nan($x934 = JS::toNumber($x931, $global)) && !is_nan($x935 = JS::toNumber($x932, $global)) && $x934 < $x935));
if (JS::toBoolean($x933, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x936 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 299, 9, '<image>/05_string.js');
$_Math =& $x936[0]; list(,$WMath,$SMath,$UMath) = $x936;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x937 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 299, 9, '<image>/05_string.js');
$_ReferenceError =& $x937[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x937;
$x938 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 9);
$x939 = $x938($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x939->class) && $x939->class === 'Error' && !isset($x939->properties['file']) && !isset($x939->properties['line']) && !isset($x939->properties['column'])) {$x939->properties['file'] = '<image>/05_string.js';$x939->properties['line'] = 299;$x939->properties['column'] = 9;$x939->attributes['file'] = $x939->attributes['line'] = $x939->attributes['column'] = 0; }
throw new JSException($x939, 299, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x941 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 299, 17, '<image>/05_string.js');
$_TypeError =& $x941[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x941;
$x942 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x943 = $x942($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x943->class) && $x943->class === 'Error' && !isset($x943->properties['file']) && !isset($x943->properties['line']) && !isset($x943->properties['column'])) {$x943->properties['file'] = '<image>/05_string.js';$x943->properties['line'] = 299;$x943->properties['column'] = 17;$x943->attributes['file'] = $x943->attributes['line'] = $x943->attributes['column'] = 0; }
throw new JSException($x943, 299, 17, '<image>/05_string.js');
}
$x940 = JS::toObject($_Math, $global);
unset($x944, $W944, $S944, $U944);
$x945 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x940, (string) 'max', 299, 17, '<image>/05_string.js');
$x944 =& $x945[0]; list(,$W944,$S944,$U944) = $x945;
$x946 = JS::toPrimitive($_end, $global);
$x947 = JS::toPrimitive($_length, $global);
if (!(is_object($x944) && isset($x944->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x950 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 299, 17, '<image>/05_string.js');
$_TypeError =& $x950[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x950;
$x951 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x952 = $x951($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x952->class) && $x952->class === 'Error' && !isset($x952->properties['file']) && !isset($x952->properties['line']) && !isset($x952->properties['column'])) {$x952->properties['file'] = '<image>/05_string.js';$x952->properties['line'] = 299;$x952->properties['column'] = 17;$x952->attributes['file'] = $x952->attributes['line'] = $x952->attributes['column'] = 0; }
throw new JSException($x952, 299, 17, '<image>/05_string.js');
}
$x948 = $x944->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x949 = $x948($global, $x940, $x944, array((is_string($x946) || is_string($x947) ? JS::toString($x946, $global) . JS::toString($x947, $global) : JS::toNumber($x946, $global) + JS::toNumber($x947, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x949;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x953 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Math', 302, 10, '<image>/05_string.js');
$_Math =& $x953[0]; list(,$WMath,$SMath,$UMath) = $x953;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x954 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 302, 10, '<image>/05_string.js');
$_ReferenceError =& $x954[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x954;
$x955 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 10);
$x956 = $x955($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x956->class) && $x956->class === 'Error' && !isset($x956->properties['file']) && !isset($x956->properties['line']) && !isset($x956->properties['column'])) {$x956->properties['file'] = '<image>/05_string.js';$x956->properties['line'] = 302;$x956->properties['column'] = 10;$x956->attributes['file'] = $x956->attributes['line'] = $x956->attributes['column'] = 0; }
throw new JSException($x956, 302, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x958 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 302, 18, '<image>/05_string.js');
$_TypeError =& $x958[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x958;
$x959 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x960 = $x959($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x960->class) && $x960->class === 'Error' && !isset($x960->properties['file']) && !isset($x960->properties['line']) && !isset($x960->properties['column'])) {$x960->properties['file'] = '<image>/05_string.js';$x960->properties['line'] = 302;$x960->properties['column'] = 18;$x960->attributes['file'] = $x960->attributes['line'] = $x960->attributes['column'] = 0; }
throw new JSException($x960, 302, 18, '<image>/05_string.js');
}
$x957 = JS::toObject($_Math, $global);
unset($x961, $W961, $S961, $U961);
$x962 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x957, (string) 'min', 302, 18, '<image>/05_string.js');
$x961 =& $x962[0]; list(,$W961,$S961,$U961) = $x962;
if (!(is_object($x961) && isset($x961->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x965 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 302, 18, '<image>/05_string.js');
$_TypeError =& $x965[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x965;
$x966 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x967 = $x966($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x967->class) && $x967->class === 'Error' && !isset($x967->properties['file']) && !isset($x967->properties['line']) && !isset($x967->properties['column'])) {$x967->properties['file'] = '<image>/05_string.js';$x967->properties['line'] = 302;$x967->properties['column'] = 18;$x967->attributes['file'] = $x967->attributes['line'] = $x967->attributes['column'] = 0; }
throw new JSException($x967, 302, 18, '<image>/05_string.js');
}
$x963 = $x961->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x964 = $x963($global, $x957, $x961, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x964;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x969 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 303, 16, '<image>/05_string.js');
$_TypeError =& $x969[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x969;
$x970 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x971 = $x970($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x971->class) && $x971->class === 'Error' && !isset($x971->properties['file']) && !isset($x971->properties['line']) && !isset($x971->properties['column'])) {$x971->properties['file'] = '<image>/05_string.js';$x971->properties['line'] = 303;$x971->properties['column'] = 16;$x971->attributes['file'] = $x971->attributes['line'] = $x971->attributes['column'] = 0; }
throw new JSException($x971, 303, 16, '<image>/05_string.js');
}
$x968 = JS::toObject($_Math, $global);
unset($x972, $W972, $S972, $U972);
$x973 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x968, (string) 'min', 303, 16, '<image>/05_string.js');
$x972 =& $x973[0]; list(,$W972,$S972,$U972) = $x973;
if (!(is_object($x972) && isset($x972->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x976 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 303, 16, '<image>/05_string.js');
$_TypeError =& $x976[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x976;
$x977 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x978 = $x977($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x978->class) && $x978->class === 'Error' && !isset($x978->properties['file']) && !isset($x978->properties['line']) && !isset($x978->properties['column'])) {$x978->properties['file'] = '<image>/05_string.js';$x978->properties['line'] = 303;$x978->properties['column'] = 16;$x978->attributes['file'] = $x978->attributes['line'] = $x978->attributes['column'] = 0; }
throw new JSException($x978, 303, 16, '<image>/05_string.js');
}
$x974 = $x972->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x975 = $x974($global, $x968, $x972, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x975;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x980 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 21, '<image>/05_string.js');
$_TypeError =& $x980[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x980;
$x981 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x982 = $x981($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x982->class) && $x982->class === 'Error' && !isset($x982->properties['file']) && !isset($x982->properties['line']) && !isset($x982->properties['column'])) {$x982->properties['file'] = '<image>/05_string.js';$x982->properties['line'] = 305;$x982->properties['column'] = 21;$x982->attributes['file'] = $x982->attributes['line'] = $x982->attributes['column'] = 0; }
throw new JSException($x982, 305, 21, '<image>/05_string.js');
}
$x979 = JS::toObject($_Math, $global);
unset($x983, $W983, $S983, $U983);
$x984 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x979, (string) 'min', 305, 21, '<image>/05_string.js');
$x983 =& $x984[0]; list(,$W983,$S983,$U983) = $x984;
if (!(is_object($x983) && isset($x983->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x987 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 21, '<image>/05_string.js');
$_TypeError =& $x987[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x987;
$x988 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x989 = $x988($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x989->class) && $x989->class === 'Error' && !isset($x989->properties['file']) && !isset($x989->properties['line']) && !isset($x989->properties['column'])) {$x989->properties['file'] = '<image>/05_string.js';$x989->properties['line'] = 305;$x989->properties['column'] = 21;$x989->attributes['file'] = $x989->attributes['line'] = $x989->attributes['column'] = 0; }
throw new JSException($x989, 305, 21, '<image>/05_string.js');
}
$x985 = $x983->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x986 = $x985($global, $x979, $x983, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x986;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x991 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 48, '<image>/05_string.js');
$_TypeError =& $x991[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x991;
$x992 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x993 = $x992($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x993->class) && $x993->class === 'Error' && !isset($x993->properties['file']) && !isset($x993->properties['line']) && !isset($x993->properties['column'])) {$x993->properties['file'] = '<image>/05_string.js';$x993->properties['line'] = 305;$x993->properties['column'] = 48;$x993->attributes['file'] = $x993->attributes['line'] = $x993->attributes['column'] = 0; }
throw new JSException($x993, 305, 48, '<image>/05_string.js');
}
$x990 = JS::toObject($_Math, $global);
unset($x994, $W994, $S994, $U994);
$x995 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x990, (string) 'max', 305, 48, '<image>/05_string.js');
$x994 =& $x995[0]; list(,$W994,$S994,$U994) = $x995;
if (!(is_object($x994) && isset($x994->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x998 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 305, 48, '<image>/05_string.js');
$_TypeError =& $x998[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x998;
$x999 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x1000 = $x999($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1000->class) && $x1000->class === 'Error' && !isset($x1000->properties['file']) && !isset($x1000->properties['line']) && !isset($x1000->properties['column'])) {$x1000->properties['file'] = '<image>/05_string.js';$x1000->properties['line'] = 305;$x1000->properties['column'] = 48;$x1000->attributes['file'] = $x1000->attributes['line'] = $x1000->attributes['column'] = 0; }
throw new JSException($x1000, 305, 48, '<image>/05_string.js');
}
$x996 = $x994->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x997 = $x996($global, $x990, $x994, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x997;
return (string) substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x905=&$scope->properties[\'arguments\'];$x905->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x905->properties[$i]=$args[$i];$x905->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x906=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x906,$global)){$x907=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x907;}$x908=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x908,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x909=JS::toPrimitive($_start,$global);$x910=JS::toPrimitive(0,$global);$x911=(is_string($x909)&&is_string($x910)?strcmp($x909,$x910)<0:(!is_nan($x912=JS::toNumber($x909,$global))&&!is_nan($x913=JS::toNumber($x910,$global))&&$x912<$x913));if(JS::toBoolean($x911,$global)){unset($_Math,$WMath,$SMath,$UMath);$x914=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',295,11,\'<image>/05_string.js\');$_Math=&$x914[0];list(,$WMath,$SMath,$UMath)=$x914;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x915=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',295,11,\'<image>/05_string.js\');$_ReferenceError=&$x915[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x915;$x916=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,11);$x917=$x916($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x917->class)&&$x917->class===\'Error\'&&!isset($x917->properties[\'file\'])&&!isset($x917->properties[\'line\'])&&!isset($x917->properties[\'column\'])){$x917->properties[\'file\']=\'<image>/05_string.js\';$x917->properties[\'line\']=295;$x917->properties[\'column\']=11;$x917->attributes[\'file\']=$x917->attributes[\'line\']=$x917->attributes[\'column\']=0;}throw new JSException($x917,295,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x919=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',295,19,\'<image>/05_string.js\');$_TypeError=&$x919[0];list(,$WTypeError,$STypeError,$UTypeError)=$x919;$x920=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x921=$x920($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x921->class)&&$x921->class===\'Error\'&&!isset($x921->properties[\'file\'])&&!isset($x921->properties[\'line\'])&&!isset($x921->properties[\'column\'])){$x921->properties[\'file\']=\'<image>/05_string.js\';$x921->properties[\'line\']=295;$x921->properties[\'column\']=19;$x921->attributes[\'file\']=$x921->attributes[\'line\']=$x921->attributes[\'column\']=0;}throw new JSException($x921,295,19,\'<image>/05_string.js\');}$x918=JS::toObject($_Math,$global);unset($x922,$W922,$S922,$U922);$x923=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x918,(string)\'max\',295,19,\'<image>/05_string.js\');$x922=&$x923[0];list(,$W922,$S922,$U922)=$x923;$x924=JS::toPrimitive($_start,$global);$x925=JS::toPrimitive($_length,$global);if(!(is_object($x922)&&isset($x922->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x928=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',295,19,\'<image>/05_string.js\');$_TypeError=&$x928[0];list(,$WTypeError,$STypeError,$UTypeError)=$x928;$x929=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x930=$x929($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x930->class)&&$x930->class===\'Error\'&&!isset($x930->properties[\'file\'])&&!isset($x930->properties[\'line\'])&&!isset($x930->properties[\'column\'])){$x930->properties[\'file\']=\'<image>/05_string.js\';$x930->properties[\'line\']=295;$x930->properties[\'column\']=19;$x930->attributes[\'file\']=$x930->attributes[\'line\']=$x930->attributes[\'column\']=0;}throw new JSException($x930,295,19,\'<image>/05_string.js\');}$x926=$x922->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x927=$x926($global,$x918,$x922,array((is_string($x924)||is_string($x925)?JS::toString($x924,$global).JS::toString($x925,$global):JS::toNumber($x924,$global)+JS::toNumber($x925,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x927;}$x931=JS::toPrimitive($_end,$global);$x932=JS::toPrimitive(0,$global);$x933=(is_string($x931)&&is_string($x932)?strcmp($x931,$x932)<0:(!is_nan($x934=JS::toNumber($x931,$global))&&!is_nan($x935=JS::toNumber($x932,$global))&&$x934<$x935));if(JS::toBoolean($x933,$global)){unset($_Math,$WMath,$SMath,$UMath);$x936=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',299,9,\'<image>/05_string.js\');$_Math=&$x936[0];list(,$WMath,$SMath,$UMath)=$x936;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x937=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',299,9,\'<image>/05_string.js\');$_ReferenceError=&$x937[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x937;$x938=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,9);$x939=$x938($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x939->class)&&$x939->class===\'Error\'&&!isset($x939->properties[\'file\'])&&!isset($x939->properties[\'line\'])&&!isset($x939->properties[\'column\'])){$x939->properties[\'file\']=\'<image>/05_string.js\';$x939->properties[\'line\']=299;$x939->properties[\'column\']=9;$x939->attributes[\'file\']=$x939->attributes[\'line\']=$x939->attributes[\'column\']=0;}throw new JSException($x939,299,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x941=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',299,17,\'<image>/05_string.js\');$_TypeError=&$x941[0];list(,$WTypeError,$STypeError,$UTypeError)=$x941;$x942=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x943=$x942($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x943->class)&&$x943->class===\'Error\'&&!isset($x943->properties[\'file\'])&&!isset($x943->properties[\'line\'])&&!isset($x943->properties[\'column\'])){$x943->properties[\'file\']=\'<image>/05_string.js\';$x943->properties[\'line\']=299;$x943->properties[\'column\']=17;$x943->attributes[\'file\']=$x943->attributes[\'line\']=$x943->attributes[\'column\']=0;}throw new JSException($x943,299,17,\'<image>/05_string.js\');}$x940=JS::toObject($_Math,$global);unset($x944,$W944,$S944,$U944);$x945=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x940,(string)\'max\',299,17,\'<image>/05_string.js\');$x944=&$x945[0];list(,$W944,$S944,$U944)=$x945;$x946=JS::toPrimitive($_end,$global);$x947=JS::toPrimitive($_length,$global);if(!(is_object($x944)&&isset($x944->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x950=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',299,17,\'<image>/05_string.js\');$_TypeError=&$x950[0];list(,$WTypeError,$STypeError,$UTypeError)=$x950;$x951=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x952=$x951($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x952->class)&&$x952->class===\'Error\'&&!isset($x952->properties[\'file\'])&&!isset($x952->properties[\'line\'])&&!isset($x952->properties[\'column\'])){$x952->properties[\'file\']=\'<image>/05_string.js\';$x952->properties[\'line\']=299;$x952->properties[\'column\']=17;$x952->attributes[\'file\']=$x952->attributes[\'line\']=$x952->attributes[\'column\']=0;}throw new JSException($x952,299,17,\'<image>/05_string.js\');}$x948=$x944->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x949=$x948($global,$x940,$x944,array((is_string($x946)||is_string($x947)?JS::toString($x946,$global).JS::toString($x947,$global):JS::toNumber($x946,$global)+JS::toNumber($x947,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x949;}unset($_Math,$WMath,$SMath,$UMath);$x953=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'Math\',302,10,\'<image>/05_string.js\');$_Math=&$x953[0];list(,$WMath,$SMath,$UMath)=$x953;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x954=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'ReferenceError\',302,10,\'<image>/05_string.js\');$_ReferenceError=&$x954[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x954;$x955=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,10);$x956=$x955($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x956->class)&&$x956->class===\'Error\'&&!isset($x956->properties[\'file\'])&&!isset($x956->properties[\'line\'])&&!isset($x956->properties[\'column\'])){$x956->properties[\'file\']=\'<image>/05_string.js\';$x956->properties[\'line\']=302;$x956->properties[\'column\']=10;$x956->attributes[\'file\']=$x956->attributes[\'line\']=$x956->attributes[\'column\']=0;}throw new JSException($x956,302,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x958=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',302,18,\'<image>/05_string.js\');$_TypeError=&$x958[0];list(,$WTypeError,$STypeError,$UTypeError)=$x958;$x959=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x960=$x959($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x960->class)&&$x960->class===\'Error\'&&!isset($x960->properties[\'file\'])&&!isset($x960->properties[\'line\'])&&!isset($x960->properties[\'column\'])){$x960->properties[\'file\']=\'<image>/05_string.js\';$x960->properties[\'line\']=302;$x960->properties[\'column\']=18;$x960->attributes[\'file\']=$x960->attributes[\'line\']=$x960->attributes[\'column\']=0;}throw new JSException($x960,302,18,\'<image>/05_string.js\');}$x957=JS::toObject($_Math,$global);unset($x961,$W961,$S961,$U961);$x962=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x957,(string)\'min\',302,18,\'<image>/05_string.js\');$x961=&$x962[0];list(,$W961,$S961,$U961)=$x962;if(!(is_object($x961)&&isset($x961->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x965=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',302,18,\'<image>/05_string.js\');$_TypeError=&$x965[0];list(,$WTypeError,$STypeError,$UTypeError)=$x965;$x966=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x967=$x966($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x967->class)&&$x967->class===\'Error\'&&!isset($x967->properties[\'file\'])&&!isset($x967->properties[\'line\'])&&!isset($x967->properties[\'column\'])){$x967->properties[\'file\']=\'<image>/05_string.js\';$x967->properties[\'line\']=302;$x967->properties[\'column\']=18;$x967->attributes[\'file\']=$x967->attributes[\'line\']=$x967->attributes[\'column\']=0;}throw new JSException($x967,302,18,\'<image>/05_string.js\');}$x963=$x961->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x964=$x963($global,$x957,$x961,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x964;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x969=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',303,16,\'<image>/05_string.js\');$_TypeError=&$x969[0];list(,$WTypeError,$STypeError,$UTypeError)=$x969;$x970=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x971=$x970($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x971->class)&&$x971->class===\'Error\'&&!isset($x971->properties[\'file\'])&&!isset($x971->properties[\'line\'])&&!isset($x971->properties[\'column\'])){$x971->properties[\'file\']=\'<image>/05_string.js\';$x971->properties[\'line\']=303;$x971->properties[\'column\']=16;$x971->attributes[\'file\']=$x971->attributes[\'line\']=$x971->attributes[\'column\']=0;}throw new JSException($x971,303,16,\'<image>/05_string.js\');}$x968=JS::toObject($_Math,$global);unset($x972,$W972,$S972,$U972);$x973=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x968,(string)\'min\',303,16,\'<image>/05_string.js\');$x972=&$x973[0];list(,$W972,$S972,$U972)=$x973;if(!(is_object($x972)&&isset($x972->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x976=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',303,16,\'<image>/05_string.js\');$_TypeError=&$x976[0];list(,$WTypeError,$STypeError,$UTypeError)=$x976;$x977=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x978=$x977($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x978->class)&&$x978->class===\'Error\'&&!isset($x978->properties[\'file\'])&&!isset($x978->properties[\'line\'])&&!isset($x978->properties[\'column\'])){$x978->properties[\'file\']=\'<image>/05_string.js\';$x978->properties[\'line\']=303;$x978->properties[\'column\']=16;$x978->attributes[\'file\']=$x978->attributes[\'line\']=$x978->attributes[\'column\']=0;}throw new JSException($x978,303,16,\'<image>/05_string.js\');}$x974=$x972->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x975=$x974($global,$x968,$x972,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x975;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x980=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,21,\'<image>/05_string.js\');$_TypeError=&$x980[0];list(,$WTypeError,$STypeError,$UTypeError)=$x980;$x981=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x982=$x981($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x982->class)&&$x982->class===\'Error\'&&!isset($x982->properties[\'file\'])&&!isset($x982->properties[\'line\'])&&!isset($x982->properties[\'column\'])){$x982->properties[\'file\']=\'<image>/05_string.js\';$x982->properties[\'line\']=305;$x982->properties[\'column\']=21;$x982->attributes[\'file\']=$x982->attributes[\'line\']=$x982->attributes[\'column\']=0;}throw new JSException($x982,305,21,\'<image>/05_string.js\');}$x979=JS::toObject($_Math,$global);unset($x983,$W983,$S983,$U983);$x984=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x979,(string)\'min\',305,21,\'<image>/05_string.js\');$x983=&$x984[0];list(,$W983,$S983,$U983)=$x984;if(!(is_object($x983)&&isset($x983->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x987=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,21,\'<image>/05_string.js\');$_TypeError=&$x987[0];list(,$WTypeError,$STypeError,$UTypeError)=$x987;$x988=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x989=$x988($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x989->class)&&$x989->class===\'Error\'&&!isset($x989->properties[\'file\'])&&!isset($x989->properties[\'line\'])&&!isset($x989->properties[\'column\'])){$x989->properties[\'file\']=\'<image>/05_string.js\';$x989->properties[\'line\']=305;$x989->properties[\'column\']=21;$x989->attributes[\'file\']=$x989->attributes[\'line\']=$x989->attributes[\'column\']=0;}throw new JSException($x989,305,21,\'<image>/05_string.js\');}$x985=$x983->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x986=$x985($global,$x979,$x983,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x986;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x991=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,48,\'<image>/05_string.js\');$_TypeError=&$x991[0];list(,$WTypeError,$STypeError,$UTypeError)=$x991;$x992=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x993=$x992($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x993->class)&&$x993->class===\'Error\'&&!isset($x993->properties[\'file\'])&&!isset($x993->properties[\'line\'])&&!isset($x993->properties[\'column\'])){$x993->properties[\'file\']=\'<image>/05_string.js\';$x993->properties[\'line\']=305;$x993->properties[\'column\']=48;$x993->attributes[\'file\']=$x993->attributes[\'line\']=$x993->attributes[\'column\']=0;}throw new JSException($x993,305,48,\'<image>/05_string.js\');}$x990=JS::toObject($_Math,$global);unset($x994,$W994,$S994,$U994);$x995=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x990,(string)\'max\',305,48,\'<image>/05_string.js\');$x994=&$x995[0];list(,$W994,$S994,$U994)=$x995;if(!(is_object($x994)&&isset($x994->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x998=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,(string)\'TypeError\',305,48,\'<image>/05_string.js\');$_TypeError=&$x998[0];list(,$WTypeError,$STypeError,$UTypeError)=$x998;$x999=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x1000=$x999($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1000->class)&&$x1000->class===\'Error\'&&!isset($x1000->properties[\'file\'])&&!isset($x1000->properties[\'line\'])&&!isset($x1000->properties[\'column\'])){$x1000->properties[\'file\']=\'<image>/05_string.js\';$x1000->properties[\'line\']=305;$x1000->properties[\'column\']=48;$x1000->attributes[\'file\']=$x1000->attributes[\'line\']=$x1000->attributes[\'column\']=0;}throw new JSException($x1000,305,48,\'<image>/05_string.js\');}$x996=$x994->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x997=$x996($global,$x990,$x994,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x997;return(string)substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1013 =& $scope->properties['arguments'];
$x1013->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1013->properties[$i] = $args[$i];
$x1013->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['length'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1014 = (((gettype($_length) === gettype(JS::$undefined) && $_length === JS::$undefined))|| (((is_float($_length) || is_int($_length)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_length == JS::$undefined));
if (JS::toBoolean($x1014, $global)) {

return substr($leThis->value,$_start);;
};
return (string) substr($leThis->value,$_start,$_length);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1013=&$scope->properties[\'arguments\'];$x1013->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1013->properties[$i]=$args[$i];$x1013->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'length\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1014=(((gettype($_length)===gettype(JS::$undefined)&&$_length===JS::$undefined))||(((is_float($_length)||is_int($_length))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_length==JS::$undefined));if(JS::toBoolean($x1014,$global)){return substr($leThis->value,$_start);}return(string)substr($leThis->value,$_start,$_length);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1027 =& $scope->properties['arguments'];
$x1027->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1027->properties[$i] = $args[$i];
$x1027->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtolower($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1027=&$scope->properties[\'arguments\'];$x1027->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1027->properties[$i]=$args[$i];$x1027->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtolower($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1054 =& $scope->properties['arguments'];
$x1054->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1054->properties[$i] = $args[$i];
$x1054->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtoupper($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1054=&$scope->properties[\'arguments\'];$x1054->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1054->properties[$i]=$args[$i];$x1054->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtoupper($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1081 =& $scope->properties['arguments'];
$x1081->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1081->properties[$i] = $args[$i];
$x1081->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return trim($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1081=&$scope->properties[\'arguments\'];$x1081->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1081->properties[$i]=$args[$i];$x1081->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return trim($leThis->value);return JS::$undefined;}', "\n";
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
$x32 = clone JS::$functionTemplate; $x32->call = '_465e5538fcb402e27559db40bec8addd_2'; $x32->parameters = array (
  0 => 'c',
); $x32->scope = $scope; $x32->properties['prototype'] = clone JS::$objectTemplate; $x32->attributes['prototype'] = JS::WRITABLE; $x32->properties['prototype']->properties['constructor'] = $x32; $x32->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x32->properties['length'] = 1; $x32->attributes['length'] = 0;
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x33 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 16, 21, '<image>/05_string.js');
$_TypeError =& $x33[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x33;
$x34 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x35 = $x34($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x35->class) && $x35->class === 'Error' && !isset($x35->properties['file']) && !isset($x35->properties['line']) && !isset($x35->properties['column'])) {$x35->properties['file'] = '<image>/05_string.js';$x35->properties['line'] = 16;$x35->properties['column'] = 21;$x35->attributes['file'] = $x35->attributes['line'] = $x35->attributes['column'] = 0; }
throw new JSException($x35, 16, 21, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x36, $W36, $S36, $U36);
$x40 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_String, (string) 'fromCharCode', 16, 21, '<image>/05_string.js');
$x36 =& $x40[0]; list(,$W36,$S36,$U36) = $x40;
if ($U36 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties['fromCharCode'] = $x36; $x36 =& $_String->properties['fromCharCode']; $_String->attributes['fromCharCode'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U36 = FALSE; $W36 = TRUE; }
if (isset($S36)) {
$x42 = $S36->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x43 = $x42($global, $_String, $S36, array($x32), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x41 = $x43;
} else {
if (!$U36) {$x41 = $x32;if ($W36) { $x36 = $x32; }  }
else { $x41 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array' &&  is_int('fromCharCode') && 'fromCharCode' >= $_String->properties['length']) { $_String->properties['length'] = 'fromCharCode' + 1; };
$x44 = clone JS::$objectTemplate;
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x45 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 27, 18, '<image>/05_string.js');
$_TypeError =& $x45[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x45;
$x46 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x47 = $x46($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x47->class) && $x47->class === 'Error' && !isset($x47->properties['file']) && !isset($x47->properties['line']) && !isset($x47->properties['column'])) {$x47->properties['file'] = '<image>/05_string.js';$x47->properties['line'] = 27;$x47->properties['column'] = 18;$x47->attributes['file'] = $x47->attributes['line'] = $x47->attributes['column'] = 0; }
throw new JSException($x47, 27, 18, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x48, $W48, $S48, $U48);
$x49 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_String, (string) 'prototype', 27, 18, '<image>/05_string.js');
$x48 =& $x49[0]; list(,$W48,$S48,$U48) = $x49;
if ($U48 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties['prototype'] = $x48; $x48 =& $_String->properties['prototype']; $_String->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U48 = FALSE; $W48 = TRUE; }
if (isset($S48)) {
$x51 = $S48->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x52 = $x51($global, $_String, $S48, array($x44), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x50 = $x52;
} else {
if (!$U48) {$x50 = $x44;if ($W48) { $x48 = $x44; }  }
else { $x50 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_String->properties['length']) { $_String->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x53 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'Object', 28, 51, '<image>/05_string.js');
$_Object =& $x53[0]; list(,$WObject,$SObject,$UObject) = $x53;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x54 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'ReferenceError', 28, 51, '<image>/05_string.js');
$_ReferenceError =& $x54[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x54;
$x55 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 28, 51);
$x56 = $x55($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x56->class) && $x56->class === 'Error' && !isset($x56->properties['file']) && !isset($x56->properties['line']) && !isset($x56->properties['column'])) {$x56->properties['file'] = '<image>/05_string.js';$x56->properties['line'] = 28;$x56->properties['column'] = 51;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
throw new JSException($x56, 28, 51, '<image>/05_string.js');
}
$_String->properties['prototype']->prototype =$_Object->properties['prototype'];
$_String->properties['prototype']->class = 'String';
$_String->properties['prototype']->extensible = TRUE;
unset($x57, $W57, $S57, $U57);
$x58 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 31, 7, '<image>/05_string.js');
$x57 =& $x58[0]; list(,$W57,$S57,$U57) = $x58;
if ($x57 === JS::$undefined || $x57 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x59 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 31, 30, '<image>/05_string.js');
$_TypeError =& $x59[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x59;
$x60 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x61 = $x60($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x61->class) && $x61->class === 'Error' && !isset($x61->properties['file']) && !isset($x61->properties['line']) && !isset($x61->properties['column'])) {$x61->properties['file'] = '<image>/05_string.js';$x61->properties['line'] = 31;$x61->properties['column'] = 30;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 31, 30, '<image>/05_string.js');
}
$x57 = JS::toObject($x57, $global);
unset($x62, $W62, $S62, $U62);
$x63 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x57, (string) 'constructor', 31, 30, '<image>/05_string.js');
$x62 =& $x63[0]; list(,$W62,$S62,$U62) = $x63;
if ($U62 && (!isset($x57->extensible) || $x57->extensible)) {$x57->properties['constructor'] = $x62; $x62 =& $x57->properties['constructor']; $x57->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U62 = FALSE; $W62 = TRUE; }
if (isset($S62)) {
$x65 = $S62->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x66 = $x65($global, $x57, $S62, array($_String), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x64 = $x66;
} else {
if (!$U62) {$x64 = $_String;if ($W62) { $x62 = $_String; }  }
else { $x64 = JS::$undefined; }
}
if (isset($x57->class) && $x57->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x57->properties['length']) { $x57->properties['length'] = 'constructor' + 1; };
$x81 = clone JS::$functionTemplate; $x81->call = '_465e5538fcb402e27559db40bec8addd_6'; $x81->parameters = array (
); $x81->scope = $scope; $x81->properties['prototype'] = clone JS::$objectTemplate; $x81->attributes['prototype'] = JS::WRITABLE; $x81->properties['prototype']->properties['constructor'] = $x81; $x81->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x81->properties['length'] = 0; $x81->attributes['length'] = 0;
unset($x82, $W82, $S82, $U82);
$x83 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 33, 7, '<image>/05_string.js');
$x82 =& $x83[0]; list(,$W82,$S82,$U82) = $x83;
if ($x82 === JS::$undefined || $x82 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x84 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 33, 27, '<image>/05_string.js');
$_TypeError =& $x84[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x84;
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x86 = $x85($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/05_string.js';$x86->properties['line'] = 33;$x86->properties['column'] = 27;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 33, 27, '<image>/05_string.js');
}
$x82 = JS::toObject($x82, $global);
unset($x87, $W87, $S87, $U87);
$x88 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x82, (string) 'toString', 33, 27, '<image>/05_string.js');
$x87 =& $x88[0]; list(,$W87,$S87,$U87) = $x88;
if ($U87 && (!isset($x82->extensible) || $x82->extensible)) {$x82->properties['toString'] = $x87; $x87 =& $x82->properties['toString']; $x82->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U87 = FALSE; $W87 = TRUE; }
if (isset($S87)) {
$x90 = $S87->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x91 = $x90($global, $x82, $S87, array($x81), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x89 = $x91;
} else {
if (!$U87) {$x89 = $x81;if ($W87) { $x87 = $x81; }  }
else { $x89 = JS::$undefined; }
}
if (isset($x82->class) && $x82->class === 'Array' &&  is_int('toString') && 'toString' >= $x82->properties['length']) { $x82->properties['length'] = 'toString' + 1; };
unset($x92, $W92, $S92, $U92);
$x93 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 41, 34, '<image>/05_string.js');
$x92 =& $x93[0]; list(,$W92,$S92,$U92) = $x93;
unset($x94, $W94, $S94, $U94);
$x95 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x92, (string) 'toString', 41, 44, '<image>/05_string.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
unset($x96, $W96, $S96, $U96);
$x97 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 41, 7, '<image>/05_string.js');
$x96 =& $x97[0]; list(,$W96,$S96,$U96) = $x97;
if ($x96 === JS::$undefined || $x96 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x98 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 41, 26, '<image>/05_string.js');
$_TypeError =& $x98[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x98;
$x99 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x100 = $x99($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x100->class) && $x100->class === 'Error' && !isset($x100->properties['file']) && !isset($x100->properties['line']) && !isset($x100->properties['column'])) {$x100->properties['file'] = '<image>/05_string.js';$x100->properties['line'] = 41;$x100->properties['column'] = 26;$x100->attributes['file'] = $x100->attributes['line'] = $x100->attributes['column'] = 0; }
throw new JSException($x100, 41, 26, '<image>/05_string.js');
}
$x96 = JS::toObject($x96, $global);
unset($x101, $W101, $S101, $U101);
$x102 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x96, (string) 'valueOf', 41, 26, '<image>/05_string.js');
$x101 =& $x102[0]; list(,$W101,$S101,$U101) = $x102;
if ($U101 && (!isset($x96->extensible) || $x96->extensible)) {$x96->properties['valueOf'] = $x101; $x101 =& $x96->properties['valueOf']; $x96->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U101 = FALSE; $W101 = TRUE; }
if (isset($S101)) {
$x104 = $S101->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x105 = $x104($global, $x96, $S101, array($x94), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x103 = $x105;
} else {
if (!$U101) {$x103 = $x94;if ($W101) { $x101 = $x94; }  }
else { $x103 = JS::$undefined; }
}
if (isset($x96->class) && $x96->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x96->properties['length']) { $x96->properties['length'] = 'valueOf' + 1; };
$x122 = clone JS::$functionTemplate; $x122->call = '_465e5538fcb402e27559db40bec8addd_7'; $x122->parameters = array (
  0 => 'pos',
); $x122->scope = $scope; $x122->properties['prototype'] = clone JS::$objectTemplate; $x122->attributes['prototype'] = JS::WRITABLE; $x122->properties['prototype']->properties['constructor'] = $x122; $x122->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x122->properties['length'] = 1; $x122->attributes['length'] = 0;
unset($x123, $W123, $S123, $U123);
$x124 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 43, 7, '<image>/05_string.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
if ($x123 === JS::$undefined || $x123 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x125 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 43, 25, '<image>/05_string.js');
$_TypeError =& $x125[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x125;
$x126 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x127 = $x126($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x127->class) && $x127->class === 'Error' && !isset($x127->properties['file']) && !isset($x127->properties['line']) && !isset($x127->properties['column'])) {$x127->properties['file'] = '<image>/05_string.js';$x127->properties['line'] = 43;$x127->properties['column'] = 25;$x127->attributes['file'] = $x127->attributes['line'] = $x127->attributes['column'] = 0; }
throw new JSException($x127, 43, 25, '<image>/05_string.js');
}
$x123 = JS::toObject($x123, $global);
unset($x128, $W128, $S128, $U128);
$x129 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x123, (string) 'charAt', 43, 25, '<image>/05_string.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
if ($U128 && (!isset($x123->extensible) || $x123->extensible)) {$x123->properties['charAt'] = $x128; $x128 =& $x123->properties['charAt']; $x123->attributes['charAt'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U128 = FALSE; $W128 = TRUE; }
if (isset($S128)) {
$x131 = $S128->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x132 = $x131($global, $x123, $S128, array($x122), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x130 = $x132;
} else {
if (!$U128) {$x130 = $x122;if ($W128) { $x128 = $x122; }  }
else { $x130 = JS::$undefined; }
}
if (isset($x123->class) && $x123->class === 'Array' &&  is_int('charAt') && 'charAt' >= $x123->properties['length']) { $x123->properties['length'] = 'charAt' + 1; };
$x164 = clone JS::$functionTemplate; $x164->call = '_465e5538fcb402e27559db40bec8addd_8'; $x164->parameters = array (
  0 => 'pos',
); $x164->scope = $scope; $x164->properties['prototype'] = clone JS::$objectTemplate; $x164->attributes['prototype'] = JS::WRITABLE; $x164->properties['prototype']->properties['constructor'] = $x164; $x164->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x164->properties['length'] = 1; $x164->attributes['length'] = 0;
unset($x165, $W165, $S165, $U165);
$x166 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 53, 7, '<image>/05_string.js');
$x165 =& $x166[0]; list(,$W165,$S165,$U165) = $x166;
if ($x165 === JS::$undefined || $x165 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x167 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 53, 29, '<image>/05_string.js');
$_TypeError =& $x167[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x167;
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x169 = $x168($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/05_string.js';$x169->properties['line'] = 53;$x169->properties['column'] = 29;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 53, 29, '<image>/05_string.js');
}
$x165 = JS::toObject($x165, $global);
unset($x170, $W170, $S170, $U170);
$x171 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x165, (string) 'charCodeAt', 53, 29, '<image>/05_string.js');
$x170 =& $x171[0]; list(,$W170,$S170,$U170) = $x171;
if ($U170 && (!isset($x165->extensible) || $x165->extensible)) {$x165->properties['charCodeAt'] = $x170; $x170 =& $x165->properties['charCodeAt']; $x165->attributes['charCodeAt'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U170 = FALSE; $W170 = TRUE; }
if (isset($S170)) {
$x173 = $S170->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x174 = $x173($global, $x165, $S170, array($x164), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x172 = $x174;
} else {
if (!$U170) {$x172 = $x164;if ($W170) { $x170 = $x164; }  }
else { $x172 = JS::$undefined; }
}
if (isset($x165->class) && $x165->class === 'Array' &&  is_int('charCodeAt') && 'charCodeAt' >= $x165->properties['length']) { $x165->properties['length'] = 'charCodeAt' + 1; };
$x194 = clone JS::$functionTemplate; $x194->call = '_465e5538fcb402e27559db40bec8addd_9'; $x194->parameters = array (
  0 => 'string',
); $x194->scope = $scope; $x194->properties['prototype'] = clone JS::$objectTemplate; $x194->attributes['prototype'] = JS::WRITABLE; $x194->properties['prototype']->properties['constructor'] = $x194; $x194->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x194->properties['length'] = 1; $x194->attributes['length'] = 0;
unset($x195, $W195, $S195, $U195);
$x196 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 65, 7, '<image>/05_string.js');
$x195 =& $x196[0]; list(,$W195,$S195,$U195) = $x196;
if ($x195 === JS::$undefined || $x195 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x197 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 65, 25, '<image>/05_string.js');
$_TypeError =& $x197[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x197;
$x198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x199 = $x198($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x199->class) && $x199->class === 'Error' && !isset($x199->properties['file']) && !isset($x199->properties['line']) && !isset($x199->properties['column'])) {$x199->properties['file'] = '<image>/05_string.js';$x199->properties['line'] = 65;$x199->properties['column'] = 25;$x199->attributes['file'] = $x199->attributes['line'] = $x199->attributes['column'] = 0; }
throw new JSException($x199, 65, 25, '<image>/05_string.js');
}
$x195 = JS::toObject($x195, $global);
unset($x200, $W200, $S200, $U200);
$x201 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x195, (string) 'concat', 65, 25, '<image>/05_string.js');
$x200 =& $x201[0]; list(,$W200,$S200,$U200) = $x201;
if ($U200 && (!isset($x195->extensible) || $x195->extensible)) {$x195->properties['concat'] = $x200; $x200 =& $x195->properties['concat']; $x195->attributes['concat'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U200 = FALSE; $W200 = TRUE; }
if (isset($S200)) {
$x203 = $S200->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x204 = $x203($global, $x195, $S200, array($x194), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x202 = $x204;
} else {
if (!$U200) {$x202 = $x194;if ($W200) { $x200 = $x194; }  }
else { $x202 = JS::$undefined; }
}
if (isset($x195->class) && $x195->class === 'Array' &&  is_int('concat') && 'concat' >= $x195->properties['length']) { $x195->properties['length'] = 'concat' + 1; };
$x236 = clone JS::$functionTemplate; $x236->call = '_465e5538fcb402e27559db40bec8addd_10'; $x236->parameters = array (
  0 => 'search',
  1 => 'position',
); $x236->scope = $scope; $x236->properties['prototype'] = clone JS::$objectTemplate; $x236->attributes['prototype'] = JS::WRITABLE; $x236->properties['prototype']->properties['constructor'] = $x236; $x236->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x236->properties['length'] = 2; $x236->attributes['length'] = 0;
unset($x237, $W237, $S237, $U237);
$x238 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 75, 7, '<image>/05_string.js');
$x237 =& $x238[0]; list(,$W237,$S237,$U237) = $x238;
if ($x237 === JS::$undefined || $x237 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x239 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 75, 26, '<image>/05_string.js');
$_TypeError =& $x239[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x239;
$x240 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x241 = $x240($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x241->class) && $x241->class === 'Error' && !isset($x241->properties['file']) && !isset($x241->properties['line']) && !isset($x241->properties['column'])) {$x241->properties['file'] = '<image>/05_string.js';$x241->properties['line'] = 75;$x241->properties['column'] = 26;$x241->attributes['file'] = $x241->attributes['line'] = $x241->attributes['column'] = 0; }
throw new JSException($x241, 75, 26, '<image>/05_string.js');
}
$x237 = JS::toObject($x237, $global);
unset($x242, $W242, $S242, $U242);
$x243 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x237, (string) 'indexOf', 75, 26, '<image>/05_string.js');
$x242 =& $x243[0]; list(,$W242,$S242,$U242) = $x243;
if ($U242 && (!isset($x237->extensible) || $x237->extensible)) {$x237->properties['indexOf'] = $x242; $x242 =& $x237->properties['indexOf']; $x237->attributes['indexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U242 = FALSE; $W242 = TRUE; }
if (isset($S242)) {
$x245 = $S242->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x246 = $x245($global, $x237, $S242, array($x236), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x244 = $x246;
} else {
if (!$U242) {$x244 = $x236;if ($W242) { $x242 = $x236; }  }
else { $x244 = JS::$undefined; }
}
if (isset($x237->class) && $x237->class === 'Array' &&  is_int('indexOf') && 'indexOf' >= $x237->properties['length']) { $x237->properties['length'] = 'indexOf' + 1; };
$x278 = clone JS::$functionTemplate; $x278->call = '_465e5538fcb402e27559db40bec8addd_11'; $x278->parameters = array (
  0 => 'search',
  1 => 'position',
); $x278->scope = $scope; $x278->properties['prototype'] = clone JS::$objectTemplate; $x278->attributes['prototype'] = JS::WRITABLE; $x278->properties['prototype']->properties['constructor'] = $x278; $x278->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x278->properties['length'] = 2; $x278->attributes['length'] = 0;
unset($x279, $W279, $S279, $U279);
$x280 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 90, 7, '<image>/05_string.js');
$x279 =& $x280[0]; list(,$W279,$S279,$U279) = $x280;
if ($x279 === JS::$undefined || $x279 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x281 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 90, 30, '<image>/05_string.js');
$_TypeError =& $x281[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x281;
$x282 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x283 = $x282($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x283->class) && $x283->class === 'Error' && !isset($x283->properties['file']) && !isset($x283->properties['line']) && !isset($x283->properties['column'])) {$x283->properties['file'] = '<image>/05_string.js';$x283->properties['line'] = 90;$x283->properties['column'] = 30;$x283->attributes['file'] = $x283->attributes['line'] = $x283->attributes['column'] = 0; }
throw new JSException($x283, 90, 30, '<image>/05_string.js');
}
$x279 = JS::toObject($x279, $global);
unset($x284, $W284, $S284, $U284);
$x285 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x279, (string) 'lastIndexOf', 90, 30, '<image>/05_string.js');
$x284 =& $x285[0]; list(,$W284,$S284,$U284) = $x285;
if ($U284 && (!isset($x279->extensible) || $x279->extensible)) {$x279->properties['lastIndexOf'] = $x284; $x284 =& $x279->properties['lastIndexOf']; $x279->attributes['lastIndexOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U284 = FALSE; $W284 = TRUE; }
if (isset($S284)) {
$x287 = $S284->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x288 = $x287($global, $x279, $S284, array($x278), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x286 = $x288;
} else {
if (!$U284) {$x286 = $x278;if ($W284) { $x284 = $x278; }  }
else { $x286 = JS::$undefined; }
}
if (isset($x279->class) && $x279->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $x279->properties['length']) { $x279->properties['length'] = 'lastIndexOf' + 1; };
$x291 = clone JS::$functionTemplate; $x291->call = '_465e5538fcb402e27559db40bec8addd_12'; $x291->parameters = array (
  0 => 'that',
); $x291->scope = $scope; $x291->properties['prototype'] = clone JS::$objectTemplate; $x291->attributes['prototype'] = JS::WRITABLE; $x291->properties['prototype']->properties['constructor'] = $x291; $x291->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x291->properties['length'] = 1; $x291->attributes['length'] = 0;
unset($x292, $W292, $S292, $U292);
$x293 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 105, 7, '<image>/05_string.js');
$x292 =& $x293[0]; list(,$W292,$S292,$U292) = $x293;
if ($x292 === JS::$undefined || $x292 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x294 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 105, 32, '<image>/05_string.js');
$_TypeError =& $x294[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x294;
$x295 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x296 = $x295($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x296->class) && $x296->class === 'Error' && !isset($x296->properties['file']) && !isset($x296->properties['line']) && !isset($x296->properties['column'])) {$x296->properties['file'] = '<image>/05_string.js';$x296->properties['line'] = 105;$x296->properties['column'] = 32;$x296->attributes['file'] = $x296->attributes['line'] = $x296->attributes['column'] = 0; }
throw new JSException($x296, 105, 32, '<image>/05_string.js');
}
$x292 = JS::toObject($x292, $global);
unset($x297, $W297, $S297, $U297);
$x298 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x292, (string) 'localeCompare', 105, 32, '<image>/05_string.js');
$x297 =& $x298[0]; list(,$W297,$S297,$U297) = $x298;
if ($U297 && (!isset($x292->extensible) || $x292->extensible)) {$x292->properties['localeCompare'] = $x297; $x297 =& $x292->properties['localeCompare']; $x292->attributes['localeCompare'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U297 = FALSE; $W297 = TRUE; }
if (isset($S297)) {
$x300 = $S297->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x301 = $x300($global, $x292, $S297, array($x291), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x299 = $x301;
} else {
if (!$U297) {$x299 = $x291;if ($W297) { $x297 = $x291; }  }
else { $x299 = JS::$undefined; }
}
if (isset($x292->class) && $x292->class === 'Array' &&  is_int('localeCompare') && 'localeCompare' >= $x292->properties['length']) { $x292->properties['length'] = 'localeCompare' + 1; };
$x386 = clone JS::$functionTemplate; $x386->call = '_465e5538fcb402e27559db40bec8addd_13'; $x386->parameters = array (
  0 => 'regexp',
); $x386->scope = $scope; $x386->properties['prototype'] = clone JS::$objectTemplate; $x386->attributes['prototype'] = JS::WRITABLE; $x386->properties['prototype']->properties['constructor'] = $x386; $x386->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x386->properties['length'] = 1; $x386->attributes['length'] = 0;
unset($x387, $W387, $S387, $U387);
$x388 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 109, 7, '<image>/05_string.js');
$x387 =& $x388[0]; list(,$W387,$S387,$U387) = $x388;
if ($x387 === JS::$undefined || $x387 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x389 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 109, 24, '<image>/05_string.js');
$_TypeError =& $x389[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x389;
$x390 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x391 = $x390($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x391->class) && $x391->class === 'Error' && !isset($x391->properties['file']) && !isset($x391->properties['line']) && !isset($x391->properties['column'])) {$x391->properties['file'] = '<image>/05_string.js';$x391->properties['line'] = 109;$x391->properties['column'] = 24;$x391->attributes['file'] = $x391->attributes['line'] = $x391->attributes['column'] = 0; }
throw new JSException($x391, 109, 24, '<image>/05_string.js');
}
$x387 = JS::toObject($x387, $global);
unset($x392, $W392, $S392, $U392);
$x393 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x387, (string) 'match', 109, 24, '<image>/05_string.js');
$x392 =& $x393[0]; list(,$W392,$S392,$U392) = $x393;
if ($U392 && (!isset($x387->extensible) || $x387->extensible)) {$x387->properties['match'] = $x392; $x392 =& $x387->properties['match']; $x387->attributes['match'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U392 = FALSE; $W392 = TRUE; }
if (isset($S392)) {
$x395 = $S392->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x396 = $x395($global, $x387, $S392, array($x386), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x394 = $x396;
} else {
if (!$U392) {$x394 = $x386;if ($W392) { $x392 = $x386; }  }
else { $x394 = JS::$undefined; }
}
if (isset($x387->class) && $x387->class === 'Array' &&  is_int('match') && 'match' >= $x387->properties['length']) { $x387->properties['length'] = 'match' + 1; };
$x567 = clone JS::$functionTemplate; $x567->call = '_465e5538fcb402e27559db40bec8addd_14'; $x567->parameters = array (
  0 => 'search',
  1 => 'replace',
); $x567->scope = $scope; $x567->properties['prototype'] = clone JS::$objectTemplate; $x567->attributes['prototype'] = JS::WRITABLE; $x567->properties['prototype']->properties['constructor'] = $x567; $x567->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x567->properties['length'] = 2; $x567->attributes['length'] = 0;
unset($x568, $W568, $S568, $U568);
$x569 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 144, 7, '<image>/05_string.js');
$x568 =& $x569[0]; list(,$W568,$S568,$U568) = $x569;
if ($x568 === JS::$undefined || $x568 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x570 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 144, 26, '<image>/05_string.js');
$_TypeError =& $x570[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x570;
$x571 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x572 = $x571($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x572->class) && $x572->class === 'Error' && !isset($x572->properties['file']) && !isset($x572->properties['line']) && !isset($x572->properties['column'])) {$x572->properties['file'] = '<image>/05_string.js';$x572->properties['line'] = 144;$x572->properties['column'] = 26;$x572->attributes['file'] = $x572->attributes['line'] = $x572->attributes['column'] = 0; }
throw new JSException($x572, 144, 26, '<image>/05_string.js');
}
$x568 = JS::toObject($x568, $global);
unset($x573, $W573, $S573, $U573);
$x574 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x568, (string) 'replace', 144, 26, '<image>/05_string.js');
$x573 =& $x574[0]; list(,$W573,$S573,$U573) = $x574;
if ($U573 && (!isset($x568->extensible) || $x568->extensible)) {$x568->properties['replace'] = $x573; $x573 =& $x568->properties['replace']; $x568->attributes['replace'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U573 = FALSE; $W573 = TRUE; }
if (isset($S573)) {
$x576 = $S573->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x577 = $x576($global, $x568, $S573, array($x567), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x575 = $x577;
} else {
if (!$U573) {$x575 = $x567;if ($W573) { $x573 = $x567; }  }
else { $x575 = JS::$undefined; }
}
if (isset($x568->class) && $x568->class === 'Array' &&  is_int('replace') && 'replace' >= $x568->properties['length']) { $x568->properties['length'] = 'replace' + 1; };
$x616 = clone JS::$functionTemplate; $x616->call = '_465e5538fcb402e27559db40bec8addd_16'; $x616->parameters = array (
  0 => 'search',
); $x616->scope = $scope; $x616->properties['prototype'] = clone JS::$objectTemplate; $x616->attributes['prototype'] = JS::WRITABLE; $x616->properties['prototype']->properties['constructor'] = $x616; $x616->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x616->properties['length'] = 1; $x616->attributes['length'] = 0;
unset($x617, $W617, $S617, $U617);
$x618 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 189, 7, '<image>/05_string.js');
$x617 =& $x618[0]; list(,$W617,$S617,$U617) = $x618;
if ($x617 === JS::$undefined || $x617 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x619 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 189, 25, '<image>/05_string.js');
$_TypeError =& $x619[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x619;
$x620 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x621 = $x620($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x621->class) && $x621->class === 'Error' && !isset($x621->properties['file']) && !isset($x621->properties['line']) && !isset($x621->properties['column'])) {$x621->properties['file'] = '<image>/05_string.js';$x621->properties['line'] = 189;$x621->properties['column'] = 25;$x621->attributes['file'] = $x621->attributes['line'] = $x621->attributes['column'] = 0; }
throw new JSException($x621, 189, 25, '<image>/05_string.js');
}
$x617 = JS::toObject($x617, $global);
unset($x622, $W622, $S622, $U622);
$x623 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x617, (string) 'search', 189, 25, '<image>/05_string.js');
$x622 =& $x623[0]; list(,$W622,$S622,$U622) = $x623;
if ($U622 && (!isset($x617->extensible) || $x617->extensible)) {$x617->properties['search'] = $x622; $x622 =& $x617->properties['search']; $x617->attributes['search'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U622 = FALSE; $W622 = TRUE; }
if (isset($S622)) {
$x625 = $S622->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x626 = $x625($global, $x617, $S622, array($x616), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x624 = $x626;
} else {
if (!$U622) {$x624 = $x616;if ($W622) { $x622 = $x616; }  }
else { $x624 = JS::$undefined; }
}
if (isset($x617->class) && $x617->class === 'Array' &&  is_int('search') && 'search' >= $x617->properties['length']) { $x617->properties['length'] = 'search' + 1; };
$x676 = clone JS::$functionTemplate; $x676->call = '_465e5538fcb402e27559db40bec8addd_17'; $x676->parameters = array (
  0 => 'start',
  1 => 'end',
); $x676->scope = $scope; $x676->properties['prototype'] = clone JS::$objectTemplate; $x676->attributes['prototype'] = JS::WRITABLE; $x676->properties['prototype']->properties['constructor'] = $x676; $x676->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x676->properties['length'] = 2; $x676->attributes['length'] = 0;
unset($x677, $W677, $S677, $U677);
$x678 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 206, 7, '<image>/05_string.js');
$x677 =& $x678[0]; list(,$W677,$S677,$U677) = $x678;
if ($x677 === JS::$undefined || $x677 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x679 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 206, 24, '<image>/05_string.js');
$_TypeError =& $x679[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x679;
$x680 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x681 = $x680($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x681->class) && $x681->class === 'Error' && !isset($x681->properties['file']) && !isset($x681->properties['line']) && !isset($x681->properties['column'])) {$x681->properties['file'] = '<image>/05_string.js';$x681->properties['line'] = 206;$x681->properties['column'] = 24;$x681->attributes['file'] = $x681->attributes['line'] = $x681->attributes['column'] = 0; }
throw new JSException($x681, 206, 24, '<image>/05_string.js');
}
$x677 = JS::toObject($x677, $global);
unset($x682, $W682, $S682, $U682);
$x683 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x677, (string) 'slice', 206, 24, '<image>/05_string.js');
$x682 =& $x683[0]; list(,$W682,$S682,$U682) = $x683;
if ($U682 && (!isset($x677->extensible) || $x677->extensible)) {$x677->properties['slice'] = $x682; $x682 =& $x677->properties['slice']; $x677->attributes['slice'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U682 = FALSE; $W682 = TRUE; }
if (isset($S682)) {
$x685 = $S682->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x686 = $x685($global, $x677, $S682, array($x676), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x684 = $x686;
} else {
if (!$U682) {$x684 = $x676;if ($W682) { $x682 = $x676; }  }
else { $x684 = JS::$undefined; }
}
if (isset($x677->class) && $x677->class === 'Array' &&  is_int('slice') && 'slice' >= $x677->properties['length']) { $x677->properties['length'] = 'slice' + 1; };
$x893 = clone JS::$functionTemplate; $x893->call = '_465e5538fcb402e27559db40bec8addd_18'; $x893->parameters = array (
  0 => 'separator',
  1 => 'limit',
); $x893->scope = $scope; $x893->properties['prototype'] = clone JS::$objectTemplate; $x893->attributes['prototype'] = JS::WRITABLE; $x893->properties['prototype']->properties['constructor'] = $x893; $x893->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x893->properties['length'] = 2; $x893->attributes['length'] = 0;
unset($x894, $W894, $S894, $U894);
$x895 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 228, 7, '<image>/05_string.js');
$x894 =& $x895[0]; list(,$W894,$S894,$U894) = $x895;
if ($x894 === JS::$undefined || $x894 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x896 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 228, 24, '<image>/05_string.js');
$_TypeError =& $x896[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x896;
$x897 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x898 = $x897($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x898->class) && $x898->class === 'Error' && !isset($x898->properties['file']) && !isset($x898->properties['line']) && !isset($x898->properties['column'])) {$x898->properties['file'] = '<image>/05_string.js';$x898->properties['line'] = 228;$x898->properties['column'] = 24;$x898->attributes['file'] = $x898->attributes['line'] = $x898->attributes['column'] = 0; }
throw new JSException($x898, 228, 24, '<image>/05_string.js');
}
$x894 = JS::toObject($x894, $global);
unset($x899, $W899, $S899, $U899);
$x900 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x894, (string) 'split', 228, 24, '<image>/05_string.js');
$x899 =& $x900[0]; list(,$W899,$S899,$U899) = $x900;
if ($U899 && (!isset($x894->extensible) || $x894->extensible)) {$x894->properties['split'] = $x899; $x899 =& $x894->properties['split']; $x894->attributes['split'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U899 = FALSE; $W899 = TRUE; }
if (isset($S899)) {
$x902 = $S899->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x903 = $x902($global, $x894, $S899, array($x893), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x901 = $x903;
} else {
if (!$U899) {$x901 = $x893;if ($W899) { $x899 = $x893; }  }
else { $x901 = JS::$undefined; }
}
if (isset($x894->class) && $x894->class === 'Array' &&  is_int('split') && 'split' >= $x894->properties['length']) { $x894->properties['length'] = 'split' + 1; };
$x1001 = clone JS::$functionTemplate; $x1001->call = '_465e5538fcb402e27559db40bec8addd_19'; $x1001->parameters = array (
  0 => 'start',
  1 => 'end',
); $x1001->scope = $scope; $x1001->properties['prototype'] = clone JS::$objectTemplate; $x1001->attributes['prototype'] = JS::WRITABLE; $x1001->properties['prototype']->properties['constructor'] = $x1001; $x1001->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1001->properties['length'] = 2; $x1001->attributes['length'] = 0;
unset($x1002, $W1002, $S1002, $U1002);
$x1003 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 283, 7, '<image>/05_string.js');
$x1002 =& $x1003[0]; list(,$W1002,$S1002,$U1002) = $x1003;
if ($x1002 === JS::$undefined || $x1002 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1004 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 283, 28, '<image>/05_string.js');
$_TypeError =& $x1004[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1004;
$x1005 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x1006 = $x1005($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1006->class) && $x1006->class === 'Error' && !isset($x1006->properties['file']) && !isset($x1006->properties['line']) && !isset($x1006->properties['column'])) {$x1006->properties['file'] = '<image>/05_string.js';$x1006->properties['line'] = 283;$x1006->properties['column'] = 28;$x1006->attributes['file'] = $x1006->attributes['line'] = $x1006->attributes['column'] = 0; }
throw new JSException($x1006, 283, 28, '<image>/05_string.js');
}
$x1002 = JS::toObject($x1002, $global);
unset($x1007, $W1007, $S1007, $U1007);
$x1008 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1002, (string) 'substring', 283, 28, '<image>/05_string.js');
$x1007 =& $x1008[0]; list(,$W1007,$S1007,$U1007) = $x1008;
if ($U1007 && (!isset($x1002->extensible) || $x1002->extensible)) {$x1002->properties['substring'] = $x1007; $x1007 =& $x1002->properties['substring']; $x1002->attributes['substring'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1007 = FALSE; $W1007 = TRUE; }
if (isset($S1007)) {
$x1010 = $S1007->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x1011 = $x1010($global, $x1002, $S1007, array($x1001), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1009 = $x1011;
} else {
if (!$U1007) {$x1009 = $x1001;if ($W1007) { $x1007 = $x1001; }  }
else { $x1009 = JS::$undefined; }
}
if (isset($x1002->class) && $x1002->class === 'Array' &&  is_int('substring') && 'substring' >= $x1002->properties['length']) { $x1002->properties['length'] = 'substring' + 1; };
$x1015 = clone JS::$functionTemplate; $x1015->call = '_465e5538fcb402e27559db40bec8addd_20'; $x1015->parameters = array (
  0 => 'start',
  1 => 'length',
); $x1015->scope = $scope; $x1015->properties['prototype'] = clone JS::$objectTemplate; $x1015->attributes['prototype'] = JS::WRITABLE; $x1015->properties['prototype']->properties['constructor'] = $x1015; $x1015->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1015->properties['length'] = 2; $x1015->attributes['length'] = 0;
unset($x1016, $W1016, $S1016, $U1016);
$x1017 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 311, 7, '<image>/05_string.js');
$x1016 =& $x1017[0]; list(,$W1016,$S1016,$U1016) = $x1017;
if ($x1016 === JS::$undefined || $x1016 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1018 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 311, 25, '<image>/05_string.js');
$_TypeError =& $x1018[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1018;
$x1019 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1020 = $x1019($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1020->class) && $x1020->class === 'Error' && !isset($x1020->properties['file']) && !isset($x1020->properties['line']) && !isset($x1020->properties['column'])) {$x1020->properties['file'] = '<image>/05_string.js';$x1020->properties['line'] = 311;$x1020->properties['column'] = 25;$x1020->attributes['file'] = $x1020->attributes['line'] = $x1020->attributes['column'] = 0; }
throw new JSException($x1020, 311, 25, '<image>/05_string.js');
}
$x1016 = JS::toObject($x1016, $global);
unset($x1021, $W1021, $S1021, $U1021);
$x1022 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1016, (string) 'substr', 311, 25, '<image>/05_string.js');
$x1021 =& $x1022[0]; list(,$W1021,$S1021,$U1021) = $x1022;
if ($U1021 && (!isset($x1016->extensible) || $x1016->extensible)) {$x1016->properties['substr'] = $x1021; $x1021 =& $x1016->properties['substr']; $x1016->attributes['substr'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1021 = FALSE; $W1021 = TRUE; }
if (isset($S1021)) {
$x1024 = $S1021->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1025 = $x1024($global, $x1016, $S1021, array($x1015), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1023 = $x1025;
} else {
if (!$U1021) {$x1023 = $x1015;if ($W1021) { $x1021 = $x1015; }  }
else { $x1023 = JS::$undefined; }
}
if (isset($x1016->class) && $x1016->class === 'Array' &&  is_int('substr') && 'substr' >= $x1016->properties['length']) { $x1016->properties['length'] = 'substr' + 1; };
$x1028 = clone JS::$functionTemplate; $x1028->call = '_465e5538fcb402e27559db40bec8addd_21'; $x1028->parameters = array (
); $x1028->scope = $scope; $x1028->properties['prototype'] = clone JS::$objectTemplate; $x1028->attributes['prototype'] = JS::WRITABLE; $x1028->properties['prototype']->properties['constructor'] = $x1028; $x1028->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1028->properties['length'] = 0; $x1028->attributes['length'] = 0;
unset($x1029, $W1029, $S1029, $U1029);
$x1030 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 319, 7, '<image>/05_string.js');
$x1029 =& $x1030[0]; list(,$W1029,$S1029,$U1029) = $x1030;
if ($x1029 === JS::$undefined || $x1029 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1031 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 319, 30, '<image>/05_string.js');
$_TypeError =& $x1031[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1031;
$x1032 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1033 = $x1032($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1033->class) && $x1033->class === 'Error' && !isset($x1033->properties['file']) && !isset($x1033->properties['line']) && !isset($x1033->properties['column'])) {$x1033->properties['file'] = '<image>/05_string.js';$x1033->properties['line'] = 319;$x1033->properties['column'] = 30;$x1033->attributes['file'] = $x1033->attributes['line'] = $x1033->attributes['column'] = 0; }
throw new JSException($x1033, 319, 30, '<image>/05_string.js');
}
$x1029 = JS::toObject($x1029, $global);
unset($x1034, $W1034, $S1034, $U1034);
$x1035 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1029, (string) 'toLowerCase', 319, 30, '<image>/05_string.js');
$x1034 =& $x1035[0]; list(,$W1034,$S1034,$U1034) = $x1035;
if ($U1034 && (!isset($x1029->extensible) || $x1029->extensible)) {$x1029->properties['toLowerCase'] = $x1034; $x1034 =& $x1029->properties['toLowerCase']; $x1029->attributes['toLowerCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1034 = FALSE; $W1034 = TRUE; }
if (isset($S1034)) {
$x1037 = $S1034->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1038 = $x1037($global, $x1029, $S1034, array($x1028), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1036 = $x1038;
} else {
if (!$U1034) {$x1036 = $x1028;if ($W1034) { $x1034 = $x1028; }  }
else { $x1036 = JS::$undefined; }
}
if (isset($x1029->class) && $x1029->class === 'Array' &&  is_int('toLowerCase') && 'toLowerCase' >= $x1029->properties['length']) { $x1029->properties['length'] = 'toLowerCase' + 1; };
unset($x1039, $W1039, $S1039, $U1039);
$x1040 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 323, 44, '<image>/05_string.js');
$x1039 =& $x1040[0]; list(,$W1039,$S1039,$U1039) = $x1040;
unset($x1041, $W1041, $S1041, $U1041);
$x1042 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1039, (string) 'toLowerCase', 323, 54, '<image>/05_string.js');
$x1041 =& $x1042[0]; list(,$W1041,$S1041,$U1041) = $x1042;
unset($x1043, $W1043, $S1043, $U1043);
$x1044 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 323, 7, '<image>/05_string.js');
$x1043 =& $x1044[0]; list(,$W1043,$S1043,$U1043) = $x1044;
if ($x1043 === JS::$undefined || $x1043 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1045 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 323, 36, '<image>/05_string.js');
$_TypeError =& $x1045[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1045;
$x1046 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1047 = $x1046($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1047->class) && $x1047->class === 'Error' && !isset($x1047->properties['file']) && !isset($x1047->properties['line']) && !isset($x1047->properties['column'])) {$x1047->properties['file'] = '<image>/05_string.js';$x1047->properties['line'] = 323;$x1047->properties['column'] = 36;$x1047->attributes['file'] = $x1047->attributes['line'] = $x1047->attributes['column'] = 0; }
throw new JSException($x1047, 323, 36, '<image>/05_string.js');
}
$x1043 = JS::toObject($x1043, $global);
unset($x1048, $W1048, $S1048, $U1048);
$x1049 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1043, (string) 'toLocaleLowerCase', 323, 36, '<image>/05_string.js');
$x1048 =& $x1049[0]; list(,$W1048,$S1048,$U1048) = $x1049;
if ($U1048 && (!isset($x1043->extensible) || $x1043->extensible)) {$x1043->properties['toLocaleLowerCase'] = $x1048; $x1048 =& $x1043->properties['toLocaleLowerCase']; $x1043->attributes['toLocaleLowerCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1048 = FALSE; $W1048 = TRUE; }
if (isset($S1048)) {
$x1051 = $S1048->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1052 = $x1051($global, $x1043, $S1048, array($x1041), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1050 = $x1052;
} else {
if (!$U1048) {$x1050 = $x1041;if ($W1048) { $x1048 = $x1041; }  }
else { $x1050 = JS::$undefined; }
}
if (isset($x1043->class) && $x1043->class === 'Array' &&  is_int('toLocaleLowerCase') && 'toLocaleLowerCase' >= $x1043->properties['length']) { $x1043->properties['length'] = 'toLocaleLowerCase' + 1; };
$x1055 = clone JS::$functionTemplate; $x1055->call = '_465e5538fcb402e27559db40bec8addd_22'; $x1055->parameters = array (
); $x1055->scope = $scope; $x1055->properties['prototype'] = clone JS::$objectTemplate; $x1055->attributes['prototype'] = JS::WRITABLE; $x1055->properties['prototype']->properties['constructor'] = $x1055; $x1055->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1055->properties['length'] = 0; $x1055->attributes['length'] = 0;
unset($x1056, $W1056, $S1056, $U1056);
$x1057 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 325, 7, '<image>/05_string.js');
$x1056 =& $x1057[0]; list(,$W1056,$S1056,$U1056) = $x1057;
if ($x1056 === JS::$undefined || $x1056 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1058 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 325, 30, '<image>/05_string.js');
$_TypeError =& $x1058[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1058;
$x1059 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1060 = $x1059($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1060->class) && $x1060->class === 'Error' && !isset($x1060->properties['file']) && !isset($x1060->properties['line']) && !isset($x1060->properties['column'])) {$x1060->properties['file'] = '<image>/05_string.js';$x1060->properties['line'] = 325;$x1060->properties['column'] = 30;$x1060->attributes['file'] = $x1060->attributes['line'] = $x1060->attributes['column'] = 0; }
throw new JSException($x1060, 325, 30, '<image>/05_string.js');
}
$x1056 = JS::toObject($x1056, $global);
unset($x1061, $W1061, $S1061, $U1061);
$x1062 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1056, (string) 'toUpperCase', 325, 30, '<image>/05_string.js');
$x1061 =& $x1062[0]; list(,$W1061,$S1061,$U1061) = $x1062;
if ($U1061 && (!isset($x1056->extensible) || $x1056->extensible)) {$x1056->properties['toUpperCase'] = $x1061; $x1061 =& $x1056->properties['toUpperCase']; $x1056->attributes['toUpperCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1061 = FALSE; $W1061 = TRUE; }
if (isset($S1061)) {
$x1064 = $S1061->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1065 = $x1064($global, $x1056, $S1061, array($x1055), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1063 = $x1065;
} else {
if (!$U1061) {$x1063 = $x1055;if ($W1061) { $x1061 = $x1055; }  }
else { $x1063 = JS::$undefined; }
}
if (isset($x1056->class) && $x1056->class === 'Array' &&  is_int('toUpperCase') && 'toUpperCase' >= $x1056->properties['length']) { $x1056->properties['length'] = 'toUpperCase' + 1; };
unset($x1066, $W1066, $S1066, $U1066);
$x1067 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 329, 44, '<image>/05_string.js');
$x1066 =& $x1067[0]; list(,$W1066,$S1066,$U1066) = $x1067;
unset($x1068, $W1068, $S1068, $U1068);
$x1069 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1066, (string) 'toUpperCase', 329, 54, '<image>/05_string.js');
$x1068 =& $x1069[0]; list(,$W1068,$S1068,$U1068) = $x1069;
unset($x1070, $W1070, $S1070, $U1070);
$x1071 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 329, 7, '<image>/05_string.js');
$x1070 =& $x1071[0]; list(,$W1070,$S1070,$U1070) = $x1071;
if ($x1070 === JS::$undefined || $x1070 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1072 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 329, 36, '<image>/05_string.js');
$_TypeError =& $x1072[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1072;
$x1073 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1074 = $x1073($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1074->class) && $x1074->class === 'Error' && !isset($x1074->properties['file']) && !isset($x1074->properties['line']) && !isset($x1074->properties['column'])) {$x1074->properties['file'] = '<image>/05_string.js';$x1074->properties['line'] = 329;$x1074->properties['column'] = 36;$x1074->attributes['file'] = $x1074->attributes['line'] = $x1074->attributes['column'] = 0; }
throw new JSException($x1074, 329, 36, '<image>/05_string.js');
}
$x1070 = JS::toObject($x1070, $global);
unset($x1075, $W1075, $S1075, $U1075);
$x1076 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1070, (string) 'toLocaleUpperCase', 329, 36, '<image>/05_string.js');
$x1075 =& $x1076[0]; list(,$W1075,$S1075,$U1075) = $x1076;
if ($U1075 && (!isset($x1070->extensible) || $x1070->extensible)) {$x1070->properties['toLocaleUpperCase'] = $x1075; $x1075 =& $x1070->properties['toLocaleUpperCase']; $x1070->attributes['toLocaleUpperCase'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1075 = FALSE; $W1075 = TRUE; }
if (isset($S1075)) {
$x1078 = $S1075->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1079 = $x1078($global, $x1070, $S1075, array($x1068), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1077 = $x1079;
} else {
if (!$U1075) {$x1077 = $x1068;if ($W1075) { $x1075 = $x1068; }  }
else { $x1077 = JS::$undefined; }
}
if (isset($x1070->class) && $x1070->class === 'Array' &&  is_int('toLocaleUpperCase') && 'toLocaleUpperCase' >= $x1070->properties['length']) { $x1070->properties['length'] = 'toLocaleUpperCase' + 1; };
$x1082 = clone JS::$functionTemplate; $x1082->call = '_465e5538fcb402e27559db40bec8addd_23'; $x1082->parameters = array (
); $x1082->scope = $scope; $x1082->properties['prototype'] = clone JS::$objectTemplate; $x1082->attributes['prototype'] = JS::WRITABLE; $x1082->properties['prototype']->properties['constructor'] = $x1082; $x1082->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1082->properties['length'] = 0; $x1082->attributes['length'] = 0;
unset($x1083, $W1083, $S1083, $U1083);
$x1084 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, (string) 'prototype', 331, 7, '<image>/05_string.js');
$x1083 =& $x1084[0]; list(,$W1083,$S1083,$U1083) = $x1084;
if ($x1083 === JS::$undefined || $x1083 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1085 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, (string) 'TypeError', 331, 23, '<image>/05_string.js');
$_TypeError =& $x1085[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1085;
$x1086 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1087 = $x1086($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1087->class) && $x1087->class === 'Error' && !isset($x1087->properties['file']) && !isset($x1087->properties['line']) && !isset($x1087->properties['column'])) {$x1087->properties['file'] = '<image>/05_string.js';$x1087->properties['line'] = 331;$x1087->properties['column'] = 23;$x1087->attributes['file'] = $x1087->attributes['line'] = $x1087->attributes['column'] = 0; }
throw new JSException($x1087, 331, 23, '<image>/05_string.js');
}
$x1083 = JS::toObject($x1083, $global);
unset($x1088, $W1088, $S1088, $U1088);
$x1089 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1083, (string) 'trim', 331, 23, '<image>/05_string.js');
$x1088 =& $x1089[0]; list(,$W1088,$S1088,$U1088) = $x1089;
if ($U1088 && (!isset($x1083->extensible) || $x1083->extensible)) {$x1083->properties['trim'] = $x1088; $x1088 =& $x1083->properties['trim']; $x1083->attributes['trim'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1088 = FALSE; $W1088 = TRUE; }
if (isset($S1088)) {
$x1091 = $S1088->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1092 = $x1091($global, $x1083, $S1088, array($x1082), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1090 = $x1092;
} else {
if (!$U1088) {$x1090 = $x1082;if ($W1088) { $x1088 = $x1082; }  }
else { $x1090 = JS::$undefined; }
}
if (isset($x1083->class) && $x1083->class === 'Array' &&  is_int('trim') && 'trim' >= $x1083->properties['length']) { $x1083->properties['length'] = 'trim' + 1; };
;
return JS::$undefined;
}
