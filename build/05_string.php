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
$x15 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
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
echo 'function _465e5538fcb402e27559db40bec8addd_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x15=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x15[0];list(,$WTypeError,$STypeError,$UTypeError)=$x15;$x16=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x17->class)&&$x17->class===\'Error\'&&!isset($x17->properties[\'file\'])&&!isset($x17->properties[\'line\'])&&!isset($x17->properties[\'column\'])){$x17->properties[\'file\']=$file;$x17->properties[\'line\']=$line;$x17->properties[\'column\']=$column;$x17->attributes[\'file\']=$x17->attributes[\'line\']=$x17->attributes[\'column\']=0;}throw new JSException($x17,$line,$column,$file);}$W14=$S14=$U14=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x14=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14=$x19;}else{$x14=JS::$undefined;$U14=TRUE;}return array(&$x14,$W14,$S14,$U14);}', "\n";
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
$x10 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('arguments', $global), 19, 22, '<image>/05_string.js');
$_arguments =& $x10[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x10;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x11 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 22, '<image>/05_string.js');
$_ReferenceError =& $x11[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x11;
$x12 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 19, 22);
$x13 = $x12($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x13->class) && $x13->class === 'Error' && !isset($x13->properties['file']) && !isset($x13->properties['line']) && !isset($x13->properties['column'])) {$x13->properties['file'] = '<image>/05_string.js';$x13->properties['line'] = 19;$x13->properties['column'] = 22;$x13->attributes['file'] = $x13->attributes['line'] = $x13->attributes['column'] = 0; }
throw new JSException($x13, 19, 22, '<image>/05_string.js');
}
unset($x14, $W14, $S14, $U14);
$x20 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, JS::toString('length', $global), 19, 31, '<image>/05_string.js');
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
$x28 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, JS::toString($_i, $global), 20, 18, '<image>/05_string.js');
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
echo 'function _465e5538fcb402e27559db40bec8addd_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x6=&$scope->properties[\'arguments\'];$x6->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x6->properties[$i]=$args[$i];$x6->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'c\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=\'\';for($x7=0;;++$x7){if($x7===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x10=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'arguments\',$global),19,22,\'<image>/05_string.js\');$_arguments=&$x10[0];list(,$Warguments,$Sarguments,$Uarguments)=$x10;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x11=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),19,22,\'<image>/05_string.js\');$_ReferenceError=&$x11[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x11;$x12=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',19,22);$x13=$x12($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x13->class)&&$x13->class===\'Error\'&&!isset($x13->properties[\'file\'])&&!isset($x13->properties[\'line\'])&&!isset($x13->properties[\'column\'])){$x13->properties[\'file\']=\'<image>/05_string.js\';$x13->properties[\'line\']=19;$x13->properties[\'column\']=22;$x13->attributes[\'file\']=$x13->attributes[\'line\']=$x13->attributes[\'column\']=0;}throw new JSException($x13,19,22,\'<image>/05_string.js\');}unset($x14,$W14,$S14,$U14);$x20=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,JS::toString(\'length\',$global),19,31,\'<image>/05_string.js\');$x14=&$x20[0];list(,$W14,$S14,$U14)=$x20;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x14;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x7!==0){$x21=++$_i;}$x22=JS::toPrimitive($_i,$global);$x23=JS::toPrimitive($_l,$global);$x24=(is_string($x22)&&is_string($x23)?strcmp($x22,$x23)<0:(!is_nan($x25=JS::toNumber($x22,$global))&&!is_nan($x26=JS::toNumber($x23,$global))&&$x25<$x26));if(!JS::toBoolean($x24,$global)){break;}unset($x27,$W27,$S27,$U27);$x28=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,JS::toString($_i,$global),20,18,\'<image>/05_string.js\');$x27=&$x28[0];list(,$W27,$S27,$U27)=$x28;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x27;$x29=chr(JS::toNumber($_arg,$global));if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$x30=JS::toPrimitive($_s,$global);$x31=JS::toPrimitive($x29,$global);$_s=(is_string($x30)||is_string($x31)?JS::toString($x30,$global).JS::toString($x31,$global):JS::toNumber($x30,$global)+JS::toNumber($x31,$global));}return$_s;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x38 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x38[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x38;
$x39 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x40 = $x39($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x40->class) && $x40->class === 'Error' && !isset($x40->properties['file']) && !isset($x40->properties['line']) && !isset($x40->properties['column'])) {$x40->properties['file'] = $file;$x40->properties['line'] = $line;$x40->properties['column'] = $column;$x40->attributes['file'] = $x40->attributes['line'] = $x40->attributes['column'] = 0; }
throw new JSException($x40, $line, $column, $file);
}
$W37 = $S37 = $U37 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x37 =& $lookup->properties[$id]; $W37 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S37 = $lookup->setters[$id]; }
else { $x37 = JS::$undefined; $U37 = TRUE; }
return array(&$x37, $W37, $S37, $U37);
}
echo 'function _465e5538fcb402e27559db40bec8addd_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x38=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x38[0];list(,$WTypeError,$STypeError,$UTypeError)=$x38;$x39=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x40=$x39($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x40->class)&&$x40->class===\'Error\'&&!isset($x40->properties[\'file\'])&&!isset($x40->properties[\'line\'])&&!isset($x40->properties[\'column\'])){$x40->properties[\'file\']=$file;$x40->properties[\'line\']=$line;$x40->properties[\'column\']=$column;$x40->attributes[\'file\']=$x40->attributes[\'line\']=$x40->attributes[\'column\']=0;}throw new JSException($x40,$line,$column,$file);}$W37=$S37=$U37=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x37=&$lookup->properties[$id];$W37=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S37=$lookup->setters[$id];}else{$x37=JS::$undefined;$U37=TRUE;}return array(&$x37,$W37,$S37,$U37);}', "\n";
function _465e5538fcb402e27559db40bec8addd_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'String', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x74 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 35, 13, '<image>/05_string.js');
$_TypeError =& $x74[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x74;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x75 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 35, 13, '<image>/05_string.js');
$_ReferenceError =& $x75[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x75;
$x76 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 13);
$x77 = $x76($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x77->class) && $x77->class === 'Error' && !isset($x77->properties['file']) && !isset($x77->properties['line']) && !isset($x77->properties['column'])) {$x77->properties['file'] = '<image>/05_string.js';$x77->properties['line'] = 35;$x77->properties['column'] = 13;$x77->attributes['file'] = $x77->attributes['line'] = $x77->attributes['column'] = 0; }
throw new JSException($x77, 35, 13, '<image>/05_string.js');
}
$x72 = clone JS::$objectTemplate;
unset($x78, $W78, $S78, $U78);
$x79 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 35, 9, '<image>/05_string.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
$x73 = $x78;
$x72->prototype = $x73;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x82 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x83 = $x82($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x83->class) && $x83->class === 'Error' && !isset($x83->properties['file']) && !isset($x83->properties['line']) && !isset($x83->properties['column'])) {$x83->properties['file'] = '<image>/05_string.js';$x83->properties['line'] = 35;$x83->properties['column'] = 9;$x83->attributes['file'] = $x83->attributes['line'] = $x83->attributes['column'] = 0; }
throw new JSException($x83, 35, 9, '<image>/05_string.js');
}
$x80 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x81 = $x80($global, $x72, $_TypeError, array('String.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x73 = $x81;
if (is_object($x73) && $x73 !== JS::$undefined) { $x72 = $x73; }
if (isset($x72->class) && $x72->class === 'Error' && !isset($x72->properties['file']) && !isset($x72->properties['line']) && !isset($x72->properties['column'])) {$x72->properties['file'] = '<image>/05_string.js';$x72->properties['line'] = 35;$x72->properties['column'] = 3;$x72->attributes['file'] = $x72->attributes['line'] = $x72->attributes['column'] = 0; }
throw new JSException($x72, 35, 3, '<image>/05_string.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x71=&$scope->properties[\'arguments\'];$x71->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x71->properties[$i]=$args[$i];$x71->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'String\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x74=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,13,\'<image>/05_string.js\');$_TypeError=&$x74[0];list(,$WTypeError,$STypeError,$UTypeError)=$x74;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x75=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),35,13,\'<image>/05_string.js\');$_ReferenceError=&$x75[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x75;$x76=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,13);$x77=$x76($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x77->class)&&$x77->class===\'Error\'&&!isset($x77->properties[\'file\'])&&!isset($x77->properties[\'line\'])&&!isset($x77->properties[\'column\'])){$x77->properties[\'file\']=\'<image>/05_string.js\';$x77->properties[\'line\']=35;$x77->properties[\'column\']=13;$x77->attributes[\'file\']=$x77->attributes[\'line\']=$x77->attributes[\'column\']=0;}throw new JSException($x77,35,13,\'<image>/05_string.js\');}$x72=clone JS::$objectTemplate;unset($x78,$W78,$S78,$U78);$x79=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),35,9,\'<image>/05_string.js\');$x78=&$x79[0];list(,$W78,$S78,$U78)=$x79;$x73=$x78;$x72->prototype=$x73;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x82=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x83=$x82($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x83->class)&&$x83->class===\'Error\'&&!isset($x83->properties[\'file\'])&&!isset($x83->properties[\'line\'])&&!isset($x83->properties[\'column\'])){$x83->properties[\'file\']=\'<image>/05_string.js\';$x83->properties[\'line\']=35;$x83->properties[\'column\']=9;$x83->attributes[\'file\']=$x83->attributes[\'line\']=$x83->attributes[\'column\']=0;}throw new JSException($x83,35,9,\'<image>/05_string.js\');}$x80=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x81=$x80($global,$x72,$_TypeError,array(\'String.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x73=$x81;if(is_object($x73)&&$x73!==JS::$undefined){$x72=$x73;}if(isset($x72->class)&&$x72->class===\'Error\'&&!isset($x72->properties[\'file\'])&&!isset($x72->properties[\'line\'])&&!isset($x72->properties[\'column\'])){$x72->properties[\'file\']=\'<image>/05_string.js\';$x72->properties[\'line\']=35;$x72->properties[\'column\']=3;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,35,3,\'<image>/05_string.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x112 =& $scope->properties['arguments'];
$x112->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x112->properties[$i] = $args[$i];
$x112->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x113 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x113;
$x115 = JS::toPrimitive($_pos, $global);
$x116 = JS::toPrimitive(0, $global);
$x117 = (is_string($x115) && is_string($x116) ? strcmp($x115, $x116) < 0 : (!is_nan($x118 = JS::toNumber($x115, $global)) && !is_nan($x119 = JS::toNumber($x116, $global)) && $x118 < $x119));
$x114 = $x117;
if (!JS::toBoolean($x114, $global)) {
unset($x123, $W123, $S123, $U123);
$x124 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 46, 28, '<image>/05_string.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
$x120 = JS::toPrimitive($_pos, $global);
$x121 = JS::toPrimitive($x123, $global);
$x122 = !(is_string($x120) && is_string($x121) ? strcmp($x120, $x121) < 0 : (!is_nan($x125 = JS::toNumber($x120, $global)) && !is_nan($x126 = JS::toNumber($x121, $global)) && $x125 < $x126));
$x114 = $x122; }
if (JS::toBoolean($x114, $global)) {

return '';;
};
return (string) substr($leThis->value,$_pos, 1);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x112=&$scope->properties[\'arguments\'];$x112->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x112->properties[$i]=$args[$i];$x112->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x113=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x113;$x115=JS::toPrimitive($_pos,$global);$x116=JS::toPrimitive(0,$global);$x117=(is_string($x115)&&is_string($x116)?strcmp($x115,$x116)<0:(!is_nan($x118=JS::toNumber($x115,$global))&&!is_nan($x119=JS::toNumber($x116,$global))&&$x118<$x119));$x114=$x117;if(!JS::toBoolean($x114,$global)){unset($x123,$W123,$S123,$U123);$x124=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),46,28,\'<image>/05_string.js\');$x123=&$x124[0];list(,$W123,$S123,$U123)=$x124;$x120=JS::toPrimitive($_pos,$global);$x121=JS::toPrimitive($x123,$global);$x122=!(is_string($x120)&&is_string($x121)?strcmp($x120,$x121)<0:(!is_nan($x125=JS::toNumber($x120,$global))&&!is_nan($x126=JS::toNumber($x121,$global))&&$x125<$x126));$x114=$x122;}if(JS::toBoolean($x114,$global)){return\'\';}return(string)substr($leThis->value,$_pos,1);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x140 =& $scope->properties['arguments'];
$x140->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x140->properties[$i] = $args[$i];
$x140->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x141 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x141;
$x143 = JS::toPrimitive($_pos, $global);
$x144 = JS::toPrimitive(0, $global);
$x145 = (is_string($x143) && is_string($x144) ? strcmp($x143, $x144) < 0 : (!is_nan($x146 = JS::toNumber($x143, $global)) && !is_nan($x147 = JS::toNumber($x144, $global)) && $x146 < $x147));
$x142 = $x145;
if (!JS::toBoolean($x142, $global)) {
unset($x151, $W151, $S151, $U151);
$x152 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 56, 28, '<image>/05_string.js');
$x151 =& $x152[0]; list(,$W151,$S151,$U151) = $x152;
$x148 = JS::toPrimitive($_pos, $global);
$x149 = JS::toPrimitive($x151, $global);
$x150 = !(is_string($x148) && is_string($x149) ? strcmp($x148, $x149) < 0 : (!is_nan($x153 = JS::toNumber($x148, $global)) && !is_nan($x154 = JS::toNumber($x149, $global)) && $x153 < $x154));
$x142 = $x150; }
if (JS::toBoolean($x142, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x155 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('NaN', $global), 57, 10, '<image>/05_string.js');
$_NaN =& $x155[0]; list(,$WNaN,$SNaN,$UNaN) = $x155;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x156 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 57, 10, '<image>/05_string.js');
$_ReferenceError =& $x156[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x156;
$x157 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 57, 10);
$x158 = $x157($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x158->class) && $x158->class === 'Error' && !isset($x158->properties['file']) && !isset($x158->properties['line']) && !isset($x158->properties['column'])) {$x158->properties['file'] = '<image>/05_string.js';$x158->properties['line'] = 57;$x158->properties['column'] = 10;$x158->attributes['file'] = $x158->attributes['line'] = $x158->attributes['column'] = 0; }
throw new JSException($x158, 57, 10, '<image>/05_string.js');
}
return $_NaN;;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x160 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
$_TypeError =& $x160[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x160;
$x161 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x162 = $x161($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x162->class) && $x162->class === 'Error' && !isset($x162->properties['file']) && !isset($x162->properties['line']) && !isset($x162->properties['column'])) {$x162->properties['file'] = '<image>/05_string.js';$x162->properties['line'] = 60;$x162->properties['column'] = 21;$x162->attributes['file'] = $x162->attributes['line'] = $x162->attributes['column'] = 0; }
throw new JSException($x162, 60, 21, '<image>/05_string.js');
}
$x159 = JS::toObject($leThis, $global);
unset($x163, $W163, $S163, $U163);
$x164 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x159, JS::toString('charAt', $global), 60, 21, '<image>/05_string.js');
$x163 =& $x164[0]; list(,$W163,$S163,$U163) = $x164;
if (!(is_object($x163) && isset($x163->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x167 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
$_TypeError =& $x167[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x167;
$x168 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x169 = $x168($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x169->class) && $x169->class === 'Error' && !isset($x169->properties['file']) && !isset($x169->properties['line']) && !isset($x169->properties['column'])) {$x169->properties['file'] = '<image>/05_string.js';$x169->properties['line'] = 60;$x169->properties['column'] = 21;$x169->attributes['file'] = $x169->attributes['line'] = $x169->attributes['column'] = 0; }
throw new JSException($x169, 60, 21, '<image>/05_string.js');
}
$x165 = $x163->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x166 = $x165($global, $x159, $x163, array($_pos), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['c'] = JS::$undefined; $_c =& $scope->properties['c'];
$Uc = FALSE;
$_c = $x166;
return ord($_c);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x140=&$scope->properties[\'arguments\'];$x140->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x140->properties[$i]=$args[$i];$x140->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x141=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x141;$x143=JS::toPrimitive($_pos,$global);$x144=JS::toPrimitive(0,$global);$x145=(is_string($x143)&&is_string($x144)?strcmp($x143,$x144)<0:(!is_nan($x146=JS::toNumber($x143,$global))&&!is_nan($x147=JS::toNumber($x144,$global))&&$x146<$x147));$x142=$x145;if(!JS::toBoolean($x142,$global)){unset($x151,$W151,$S151,$U151);$x152=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),56,28,\'<image>/05_string.js\');$x151=&$x152[0];list(,$W151,$S151,$U151)=$x152;$x148=JS::toPrimitive($_pos,$global);$x149=JS::toPrimitive($x151,$global);$x150=!(is_string($x148)&&is_string($x149)?strcmp($x148,$x149)<0:(!is_nan($x153=JS::toNumber($x148,$global))&&!is_nan($x154=JS::toNumber($x149,$global))&&$x153<$x154));$x142=$x150;}if(JS::toBoolean($x142,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x155=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'NaN\',$global),57,10,\'<image>/05_string.js\');$_NaN=&$x155[0];list(,$WNaN,$SNaN,$UNaN)=$x155;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x156=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),57,10,\'<image>/05_string.js\');$_ReferenceError=&$x156[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x156;$x157=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',57,10);$x158=$x157($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x158->class)&&$x158->class===\'Error\'&&!isset($x158->properties[\'file\'])&&!isset($x158->properties[\'line\'])&&!isset($x158->properties[\'column\'])){$x158->properties[\'file\']=\'<image>/05_string.js\';$x158->properties[\'line\']=57;$x158->properties[\'column\']=10;$x158->attributes[\'file\']=$x158->attributes[\'line\']=$x158->attributes[\'column\']=0;}throw new JSException($x158,57,10,\'<image>/05_string.js\');}return$_NaN;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x160=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x160[0];list(,$WTypeError,$STypeError,$UTypeError)=$x160;$x161=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x162=$x161($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x162->class)&&$x162->class===\'Error\'&&!isset($x162->properties[\'file\'])&&!isset($x162->properties[\'line\'])&&!isset($x162->properties[\'column\'])){$x162->properties[\'file\']=\'<image>/05_string.js\';$x162->properties[\'line\']=60;$x162->properties[\'column\']=21;$x162->attributes[\'file\']=$x162->attributes[\'line\']=$x162->attributes[\'column\']=0;}throw new JSException($x162,60,21,\'<image>/05_string.js\');}$x159=JS::toObject($leThis,$global);unset($x163,$W163,$S163,$U163);$x164=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x159,JS::toString(\'charAt\',$global),60,21,\'<image>/05_string.js\');$x163=&$x164[0];list(,$W163,$S163,$U163)=$x164;if(!(is_object($x163)&&isset($x163->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x167=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x167[0];list(,$WTypeError,$STypeError,$UTypeError)=$x167;$x168=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x169=$x168($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x169->class)&&$x169->class===\'Error\'&&!isset($x169->properties[\'file\'])&&!isset($x169->properties[\'line\'])&&!isset($x169->properties[\'column\'])){$x169->properties[\'file\']=\'<image>/05_string.js\';$x169->properties[\'line\']=60;$x169->properties[\'column\']=21;$x169->attributes[\'file\']=$x169->attributes[\'line\']=$x169->attributes[\'column\']=0;}throw new JSException($x169,60,21,\'<image>/05_string.js\');}$x165=$x163->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x166=$x165($global,$x159,$x163,array($_pos),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=$x166;return ord($_c);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x183 =& $scope->properties['arguments'];
$x183->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x183->properties[$i] = $args[$i];
$x183->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['returnString'] = JS::$undefined; $_returnString =& $scope->properties['returnString'];
$UreturnString = FALSE;
$_returnString = $leThis->value;
for ($x184 = 0;; ++$x184) {
if ($x184 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x185 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('arguments', $global), 68, 22, '<image>/05_string.js');
$_arguments =& $x185[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x185;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x186 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 68, 22, '<image>/05_string.js');
$_ReferenceError =& $x186[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x186;
$x187 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 68, 22);
$x188 = $x187($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/05_string.js';$x188->properties['line'] = 68;$x188->properties['column'] = 22;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 68, 22, '<image>/05_string.js');
}
unset($x189, $W189, $S189, $U189);
$x190 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, JS::toString('length', $global), 68, 31, '<image>/05_string.js');
$x189 =& $x190[0]; list(,$W189,$S189,$U189) = $x190;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x189;
}
if ($x184 !== 0) {
$x191 = ++$_i;
}
$x192 = JS::toPrimitive($_i, $global);
$x193 = JS::toPrimitive($_l, $global);
$x194 = (is_string($x192) && is_string($x193) ? strcmp($x192, $x193) < 0 : (!is_nan($x195 = JS::toNumber($x192, $global)) && !is_nan($x196 = JS::toNumber($x193, $global)) && $x195 < $x196));
if (!JS::toBoolean($x194, $global)) { break; }

unset($x197, $W197, $S197, $U197);
$x198 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, JS::toString($_i, $global), 69, 28, '<image>/05_string.js');
$x197 =& $x198[0]; list(,$W197,$S197,$U197) = $x198;
if ($UreturnString) {$global->properties['returnString'] = $_returnString; $_returnString =& $global->properties['returnString']; }
$x199 = JS::toPrimitive($_returnString, $global);
$x200 = JS::toPrimitive($x197, $global);
$_returnString = (is_string($x199) || is_string($x200) ? JS::toString($x199, $global) . JS::toString($x200, $global) : JS::toNumber($x199, $global) + JS::toNumber($x200, $global));;
};
return $_returnString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x183=&$scope->properties[\'arguments\'];$x183->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x183->properties[$i]=$args[$i];$x183->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'returnString\']=JS::$undefined;$_returnString=&$scope->properties[\'returnString\'];$UreturnString=FALSE;$_returnString=$leThis->value;for($x184=0;;++$x184){if($x184===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x185=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'arguments\',$global),68,22,\'<image>/05_string.js\');$_arguments=&$x185[0];list(,$Warguments,$Sarguments,$Uarguments)=$x185;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x186=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),68,22,\'<image>/05_string.js\');$_ReferenceError=&$x186[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x186;$x187=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',68,22);$x188=$x187($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x188->class)&&$x188->class===\'Error\'&&!isset($x188->properties[\'file\'])&&!isset($x188->properties[\'line\'])&&!isset($x188->properties[\'column\'])){$x188->properties[\'file\']=\'<image>/05_string.js\';$x188->properties[\'line\']=68;$x188->properties[\'column\']=22;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,68,22,\'<image>/05_string.js\');}unset($x189,$W189,$S189,$U189);$x190=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,JS::toString(\'length\',$global),68,31,\'<image>/05_string.js\');$x189=&$x190[0];list(,$W189,$S189,$U189)=$x190;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x189;}if($x184!==0){$x191=++$_i;}$x192=JS::toPrimitive($_i,$global);$x193=JS::toPrimitive($_l,$global);$x194=(is_string($x192)&&is_string($x193)?strcmp($x192,$x193)<0:(!is_nan($x195=JS::toNumber($x192,$global))&&!is_nan($x196=JS::toNumber($x193,$global))&&$x195<$x196));if(!JS::toBoolean($x194,$global)){break;}unset($x197,$W197,$S197,$U197);$x198=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,JS::toString($_i,$global),69,28,\'<image>/05_string.js\');$x197=&$x198[0];list(,$W197,$S197,$U197)=$x198;if($UreturnString){$global->properties[\'returnString\']=$_returnString;$_returnString=&$global->properties[\'returnString\'];}$x199=JS::toPrimitive($_returnString,$global);$x200=JS::toPrimitive($x197,$global);$_returnString=(is_string($x199)||is_string($x200)?JS::toString($x199,$global).JS::toString($x200,$global):JS::toNumber($x199,$global)+JS::toNumber($x200,$global));}return$_returnString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x214 =& $scope->properties['arguments'];
$x214->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x214->properties[$i] = $args[$i];
$x214->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x215 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x215, $global)) {
$x216 = 0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x216;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x217 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 80, 15, '<image>/05_string.js');
$_Math =& $x217[0]; list(,$WMath,$SMath,$UMath) = $x217;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x218 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 80, 15, '<image>/05_string.js');
$_ReferenceError =& $x218[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x218;
$x219 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 15);
$x220 = $x219($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x220->class) && $x220->class === 'Error' && !isset($x220->properties['file']) && !isset($x220->properties['line']) && !isset($x220->properties['column'])) {$x220->properties['file'] = '<image>/05_string.js';$x220->properties['line'] = 80;$x220->properties['column'] = 15;$x220->attributes['file'] = $x220->attributes['line'] = $x220->attributes['column'] = 0; }
throw new JSException($x220, 80, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x222 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
$_TypeError =& $x222[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x222;
$x223 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x224 = $x223($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x224->class) && $x224->class === 'Error' && !isset($x224->properties['file']) && !isset($x224->properties['line']) && !isset($x224->properties['column'])) {$x224->properties['file'] = '<image>/05_string.js';$x224->properties['line'] = 80;$x224->properties['column'] = 23;$x224->attributes['file'] = $x224->attributes['line'] = $x224->attributes['column'] = 0; }
throw new JSException($x224, 80, 23, '<image>/05_string.js');
}
$x221 = JS::toObject($_Math, $global);
unset($x225, $W225, $S225, $U225);
$x226 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x221, JS::toString('min', $global), 80, 23, '<image>/05_string.js');
$x225 =& $x226[0]; list(,$W225,$S225,$U225) = $x226;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x228 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
$_TypeError =& $x228[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x228;
$x229 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x230 = $x229($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x230->class) && $x230->class === 'Error' && !isset($x230->properties['file']) && !isset($x230->properties['line']) && !isset($x230->properties['column'])) {$x230->properties['file'] = '<image>/05_string.js';$x230->properties['line'] = 80;$x230->properties['column'] = 32;$x230->attributes['file'] = $x230->attributes['line'] = $x230->attributes['column'] = 0; }
throw new JSException($x230, 80, 32, '<image>/05_string.js');
}
$x227 = JS::toObject($_Math, $global);
unset($x231, $W231, $S231, $U231);
$x232 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x227, JS::toString('max', $global), 80, 32, '<image>/05_string.js');
$x231 =& $x232[0]; list(,$W231,$S231,$U231) = $x232;
if (!(is_object($x231) && isset($x231->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x235 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
$_TypeError =& $x235[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x235;
$x236 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x237 = $x236($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x237->class) && $x237->class === 'Error' && !isset($x237->properties['file']) && !isset($x237->properties['line']) && !isset($x237->properties['column'])) {$x237->properties['file'] = '<image>/05_string.js';$x237->properties['line'] = 80;$x237->properties['column'] = 32;$x237->attributes['file'] = $x237->attributes['line'] = $x237->attributes['column'] = 0; }
throw new JSException($x237, 80, 32, '<image>/05_string.js');
}
$x233 = $x231->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x234 = $x233($global, $x227, $x231, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x225) && isset($x225->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x240 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
$_TypeError =& $x240[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x240;
$x241 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x242 = $x241($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x242->class) && $x242->class === 'Error' && !isset($x242->properties['file']) && !isset($x242->properties['line']) && !isset($x242->properties['column'])) {$x242->properties['file'] = '<image>/05_string.js';$x242->properties['line'] = 80;$x242->properties['column'] = 23;$x242->attributes['file'] = $x242->attributes['line'] = $x242->attributes['column'] = 0; }
throw new JSException($x242, 80, 23, '<image>/05_string.js');
}
$x238 = $x225->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x239 = $x238($global, $x221, $x225, array($x234, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x239;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strpos($leThis->value, JS::toString($_search, $global),$_offset);
$x243 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x243, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x214=&$scope->properties[\'arguments\'];$x214->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x214->properties[$i]=$args[$i];$x214->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x215=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x215,$global)){$x216=0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x216;}unset($_Math,$WMath,$SMath,$UMath);$x217=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),80,15,\'<image>/05_string.js\');$_Math=&$x217[0];list(,$WMath,$SMath,$UMath)=$x217;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x218=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),80,15,\'<image>/05_string.js\');$_ReferenceError=&$x218[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x218;$x219=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,15);$x220=$x219($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x220->class)&&$x220->class===\'Error\'&&!isset($x220->properties[\'file\'])&&!isset($x220->properties[\'line\'])&&!isset($x220->properties[\'column\'])){$x220->properties[\'file\']=\'<image>/05_string.js\';$x220->properties[\'line\']=80;$x220->properties[\'column\']=15;$x220->attributes[\'file\']=$x220->attributes[\'line\']=$x220->attributes[\'column\']=0;}throw new JSException($x220,80,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x222=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x222[0];list(,$WTypeError,$STypeError,$UTypeError)=$x222;$x223=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x224=$x223($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x224->class)&&$x224->class===\'Error\'&&!isset($x224->properties[\'file\'])&&!isset($x224->properties[\'line\'])&&!isset($x224->properties[\'column\'])){$x224->properties[\'file\']=\'<image>/05_string.js\';$x224->properties[\'line\']=80;$x224->properties[\'column\']=23;$x224->attributes[\'file\']=$x224->attributes[\'line\']=$x224->attributes[\'column\']=0;}throw new JSException($x224,80,23,\'<image>/05_string.js\');}$x221=JS::toObject($_Math,$global);unset($x225,$W225,$S225,$U225);$x226=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x221,JS::toString(\'min\',$global),80,23,\'<image>/05_string.js\');$x225=&$x226[0];list(,$W225,$S225,$U225)=$x226;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x228=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x228[0];list(,$WTypeError,$STypeError,$UTypeError)=$x228;$x229=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x230=$x229($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x230->class)&&$x230->class===\'Error\'&&!isset($x230->properties[\'file\'])&&!isset($x230->properties[\'line\'])&&!isset($x230->properties[\'column\'])){$x230->properties[\'file\']=\'<image>/05_string.js\';$x230->properties[\'line\']=80;$x230->properties[\'column\']=32;$x230->attributes[\'file\']=$x230->attributes[\'line\']=$x230->attributes[\'column\']=0;}throw new JSException($x230,80,32,\'<image>/05_string.js\');}$x227=JS::toObject($_Math,$global);unset($x231,$W231,$S231,$U231);$x232=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x227,JS::toString(\'max\',$global),80,32,\'<image>/05_string.js\');$x231=&$x232[0];list(,$W231,$S231,$U231)=$x232;if(!(is_object($x231)&&isset($x231->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x235=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x235[0];list(,$WTypeError,$STypeError,$UTypeError)=$x235;$x236=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x237=$x236($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x237->class)&&$x237->class===\'Error\'&&!isset($x237->properties[\'file\'])&&!isset($x237->properties[\'line\'])&&!isset($x237->properties[\'column\'])){$x237->properties[\'file\']=\'<image>/05_string.js\';$x237->properties[\'line\']=80;$x237->properties[\'column\']=32;$x237->attributes[\'file\']=$x237->attributes[\'line\']=$x237->attributes[\'column\']=0;}throw new JSException($x237,80,32,\'<image>/05_string.js\');}$x233=$x231->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x234=$x233($global,$x227,$x231,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x225)&&isset($x225->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x240=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x240[0];list(,$WTypeError,$STypeError,$UTypeError)=$x240;$x241=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x242=$x241($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x242->class)&&$x242->class===\'Error\'&&!isset($x242->properties[\'file\'])&&!isset($x242->properties[\'line\'])&&!isset($x242->properties[\'column\'])){$x242->properties[\'file\']=\'<image>/05_string.js\';$x242->properties[\'line\']=80;$x242->properties[\'column\']=23;$x242->attributes[\'file\']=$x242->attributes[\'line\']=$x242->attributes[\'column\']=0;}throw new JSException($x242,80,23,\'<image>/05_string.js\');}$x238=$x225->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x239=$x238($global,$x221,$x225,array($x234,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x239;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strpos($leThis->value,JS::toString($_search,$global),$_offset);$x243=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x243,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x257 =& $scope->properties['arguments'];
$x257->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x257->properties[$i] = $args[$i];
$x257->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x258 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x258, $global)) {
$x259 = 0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x259;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x260 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 95, 15, '<image>/05_string.js');
$_Math =& $x260[0]; list(,$WMath,$SMath,$UMath) = $x260;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x261 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 95, 15, '<image>/05_string.js');
$_ReferenceError =& $x261[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x261;
$x262 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 15);
$x263 = $x262($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x263->class) && $x263->class === 'Error' && !isset($x263->properties['file']) && !isset($x263->properties['line']) && !isset($x263->properties['column'])) {$x263->properties['file'] = '<image>/05_string.js';$x263->properties['line'] = 95;$x263->properties['column'] = 15;$x263->attributes['file'] = $x263->attributes['line'] = $x263->attributes['column'] = 0; }
throw new JSException($x263, 95, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x265 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
$_TypeError =& $x265[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x265;
$x266 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x267 = $x266($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x267->class) && $x267->class === 'Error' && !isset($x267->properties['file']) && !isset($x267->properties['line']) && !isset($x267->properties['column'])) {$x267->properties['file'] = '<image>/05_string.js';$x267->properties['line'] = 95;$x267->properties['column'] = 23;$x267->attributes['file'] = $x267->attributes['line'] = $x267->attributes['column'] = 0; }
throw new JSException($x267, 95, 23, '<image>/05_string.js');
}
$x264 = JS::toObject($_Math, $global);
unset($x268, $W268, $S268, $U268);
$x269 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x264, JS::toString('min', $global), 95, 23, '<image>/05_string.js');
$x268 =& $x269[0]; list(,$W268,$S268,$U268) = $x269;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x271 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
$_TypeError =& $x271[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x271;
$x272 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x273 = $x272($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x273->class) && $x273->class === 'Error' && !isset($x273->properties['file']) && !isset($x273->properties['line']) && !isset($x273->properties['column'])) {$x273->properties['file'] = '<image>/05_string.js';$x273->properties['line'] = 95;$x273->properties['column'] = 32;$x273->attributes['file'] = $x273->attributes['line'] = $x273->attributes['column'] = 0; }
throw new JSException($x273, 95, 32, '<image>/05_string.js');
}
$x270 = JS::toObject($_Math, $global);
unset($x274, $W274, $S274, $U274);
$x275 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x270, JS::toString('max', $global), 95, 32, '<image>/05_string.js');
$x274 =& $x275[0]; list(,$W274,$S274,$U274) = $x275;
if (!(is_object($x274) && isset($x274->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x278 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
$_TypeError =& $x278[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x278;
$x279 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x280 = $x279($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x280->class) && $x280->class === 'Error' && !isset($x280->properties['file']) && !isset($x280->properties['line']) && !isset($x280->properties['column'])) {$x280->properties['file'] = '<image>/05_string.js';$x280->properties['line'] = 95;$x280->properties['column'] = 32;$x280->attributes['file'] = $x280->attributes['line'] = $x280->attributes['column'] = 0; }
throw new JSException($x280, 95, 32, '<image>/05_string.js');
}
$x276 = $x274->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x277 = $x276($global, $x270, $x274, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x268) && isset($x268->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x283 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
$_TypeError =& $x283[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x283;
$x284 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x285 = $x284($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x285->class) && $x285->class === 'Error' && !isset($x285->properties['file']) && !isset($x285->properties['line']) && !isset($x285->properties['column'])) {$x285->properties['file'] = '<image>/05_string.js';$x285->properties['line'] = 95;$x285->properties['column'] = 23;$x285->attributes['file'] = $x285->attributes['line'] = $x285->attributes['column'] = 0; }
throw new JSException($x285, 95, 23, '<image>/05_string.js');
}
$x281 = $x268->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x282 = $x281($global, $x264, $x268, array($x277, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x282;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strrpos($leThis->value, JS::toString($_search, $global),$_offset);
$x286 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x286, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x257=&$scope->properties[\'arguments\'];$x257->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x257->properties[$i]=$args[$i];$x257->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x258=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x258,$global)){$x259=0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x259;}unset($_Math,$WMath,$SMath,$UMath);$x260=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),95,15,\'<image>/05_string.js\');$_Math=&$x260[0];list(,$WMath,$SMath,$UMath)=$x260;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x261=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),95,15,\'<image>/05_string.js\');$_ReferenceError=&$x261[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x261;$x262=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,15);$x263=$x262($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x263->class)&&$x263->class===\'Error\'&&!isset($x263->properties[\'file\'])&&!isset($x263->properties[\'line\'])&&!isset($x263->properties[\'column\'])){$x263->properties[\'file\']=\'<image>/05_string.js\';$x263->properties[\'line\']=95;$x263->properties[\'column\']=15;$x263->attributes[\'file\']=$x263->attributes[\'line\']=$x263->attributes[\'column\']=0;}throw new JSException($x263,95,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x265=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x265[0];list(,$WTypeError,$STypeError,$UTypeError)=$x265;$x266=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x267=$x266($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x267->class)&&$x267->class===\'Error\'&&!isset($x267->properties[\'file\'])&&!isset($x267->properties[\'line\'])&&!isset($x267->properties[\'column\'])){$x267->properties[\'file\']=\'<image>/05_string.js\';$x267->properties[\'line\']=95;$x267->properties[\'column\']=23;$x267->attributes[\'file\']=$x267->attributes[\'line\']=$x267->attributes[\'column\']=0;}throw new JSException($x267,95,23,\'<image>/05_string.js\');}$x264=JS::toObject($_Math,$global);unset($x268,$W268,$S268,$U268);$x269=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x264,JS::toString(\'min\',$global),95,23,\'<image>/05_string.js\');$x268=&$x269[0];list(,$W268,$S268,$U268)=$x269;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x271=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x271[0];list(,$WTypeError,$STypeError,$UTypeError)=$x271;$x272=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x273=$x272($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x273->class)&&$x273->class===\'Error\'&&!isset($x273->properties[\'file\'])&&!isset($x273->properties[\'line\'])&&!isset($x273->properties[\'column\'])){$x273->properties[\'file\']=\'<image>/05_string.js\';$x273->properties[\'line\']=95;$x273->properties[\'column\']=32;$x273->attributes[\'file\']=$x273->attributes[\'line\']=$x273->attributes[\'column\']=0;}throw new JSException($x273,95,32,\'<image>/05_string.js\');}$x270=JS::toObject($_Math,$global);unset($x274,$W274,$S274,$U274);$x275=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x270,JS::toString(\'max\',$global),95,32,\'<image>/05_string.js\');$x274=&$x275[0];list(,$W274,$S274,$U274)=$x275;if(!(is_object($x274)&&isset($x274->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x278=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x278[0];list(,$WTypeError,$STypeError,$UTypeError)=$x278;$x279=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x280=$x279($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x280->class)&&$x280->class===\'Error\'&&!isset($x280->properties[\'file\'])&&!isset($x280->properties[\'line\'])&&!isset($x280->properties[\'column\'])){$x280->properties[\'file\']=\'<image>/05_string.js\';$x280->properties[\'line\']=95;$x280->properties[\'column\']=32;$x280->attributes[\'file\']=$x280->attributes[\'line\']=$x280->attributes[\'column\']=0;}throw new JSException($x280,95,32,\'<image>/05_string.js\');}$x276=$x274->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x277=$x276($global,$x270,$x274,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x268)&&isset($x268->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x283=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x283[0];list(,$WTypeError,$STypeError,$UTypeError)=$x283;$x284=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x285=$x284($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x285->class)&&$x285->class===\'Error\'&&!isset($x285->properties[\'file\'])&&!isset($x285->properties[\'line\'])&&!isset($x285->properties[\'column\'])){$x285->properties[\'file\']=\'<image>/05_string.js\';$x285->properties[\'line\']=95;$x285->properties[\'column\']=23;$x285->attributes[\'file\']=$x285->attributes[\'line\']=$x285->attributes[\'column\']=0;}throw new JSException($x285,95,23,\'<image>/05_string.js\');}$x281=$x268->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x282=$x281($global,$x264,$x268,array($x277,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x282;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strrpos($leThis->value,JS::toString($_search,$global),$_offset);$x286=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x286,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x300 =& $scope->properties['arguments'];
$x300->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x300->properties[$i] = $args[$i];
$x300->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['that'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_that =& $scope->properties['that'];
$Uthat = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value === JS::toString($_that, $global);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x300=&$scope->properties[\'arguments\'];$x300->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x300->properties[$i]=$args[$i];$x300->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'that\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_that=&$scope->properties[\'that\'];$Uthat=FALSE;$global->scope[++$global->scope_sp]=$scope;return$leThis->value===JS::toString($_that,$global);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x314 =& $scope->properties['arguments'];
$x314->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x314->properties[$i] = $args[$i];
$x314->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['regexp'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_regexp =& $scope->properties['regexp'];
$Uregexp = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_regexp) && isset($_regexp->class) &&$_regexp->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x317 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 111, 16, '<image>/05_string.js');
$_RegExp =& $x317[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x317;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x318 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 111, 16, '<image>/05_string.js');
$_ReferenceError =& $x318[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x318;
$x319 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 16);
$x320 = $x319($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x320->class) && $x320->class === 'Error' && !isset($x320->properties['file']) && !isset($x320->properties['line']) && !isset($x320->properties['column'])) {$x320->properties['file'] = '<image>/05_string.js';$x320->properties['line'] = 111;$x320->properties['column'] = 16;$x320->attributes['file'] = $x320->attributes['line'] = $x320->attributes['column'] = 0; }
throw new JSException($x320, 111, 16, '<image>/05_string.js');
}
$x315 = clone JS::$objectTemplate;
unset($x321, $W321, $S321, $U321);
$x322 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 111, 12, '<image>/05_string.js');
$x321 =& $x322[0]; list(,$W321,$S321,$U321) = $x322;
$x316 = $x321;
$x315->prototype = $x316;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x325 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 111, 12, '<image>/05_string.js');
$_TypeError =& $x325[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x325;
$x326 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x327 = $x326($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x327->class) && $x327->class === 'Error' && !isset($x327->properties['file']) && !isset($x327->properties['line']) && !isset($x327->properties['column'])) {$x327->properties['file'] = '<image>/05_string.js';$x327->properties['line'] = 111;$x327->properties['column'] = 12;$x327->attributes['file'] = $x327->attributes['line'] = $x327->attributes['column'] = 0; }
throw new JSException($x327, 111, 12, '<image>/05_string.js');
}
$x323 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x324 = $x323($global, $x315, $_RegExp, array($_regexp), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x316 = $x324;
if (is_object($x316) && $x316 !== JS::$undefined) { $x315 = $x316; }
if ($Uregexp) {$global->properties['regexp'] = $_regexp; $_regexp =& $global->properties['regexp']; }
$_regexp = $x315;;
};
unset($x328, $W328, $S328, $U328);
$x329 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('global', $global), 114, 13, '<image>/05_string.js');
$x328 =& $x329[0]; list(,$W328,$S328,$U328) = $x329;
if (JS::toBoolean((!JS::toBoolean($x328, $global)), $global)) {
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x331 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
$_TypeError =& $x331[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x331;
$x332 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x333 = $x332($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x333->class) && $x333->class === 'Error' && !isset($x333->properties['file']) && !isset($x333->properties['line']) && !isset($x333->properties['column'])) {$x333->properties['file'] = '<image>/05_string.js';$x333->properties['line'] = 115;$x333->properties['column'] = 21;$x333->attributes['file'] = $x333->attributes['line'] = $x333->attributes['column'] = 0; }
throw new JSException($x333, 115, 21, '<image>/05_string.js');
}
$x330 = JS::toObject($_regexp, $global);
unset($x334, $W334, $S334, $U334);
$x335 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x330, JS::toString('exec', $global), 115, 21, '<image>/05_string.js');
$x334 =& $x335[0]; list(,$W334,$S334,$U334) = $x335;
if (!(is_object($x334) && isset($x334->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x338 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
$_TypeError =& $x338[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x338;
$x339 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x340 = $x339($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x340->class) && $x340->class === 'Error' && !isset($x340->properties['file']) && !isset($x340->properties['line']) && !isset($x340->properties['column'])) {$x340->properties['file'] = '<image>/05_string.js';$x340->properties['line'] = 115;$x340->properties['column'] = 21;$x340->attributes['file'] = $x340->attributes['line'] = $x340->attributes['column'] = 0; }
throw new JSException($x340, 115, 21, '<image>/05_string.js');
}
$x336 = $x334->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x337 = $x336($global, $x330, $x334, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x337;;
};
$x341 = clone JS::$arrayTemplate;
$x341->properties['length'] = 0;
$x341->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x341;
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = 0;
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['currentLastIndex'] = JS::$undefined; $_currentLastIndex =& $scope->properties['currentLastIndex'];
$UcurrentLastIndex = FALSE;
$_currentLastIndex = JS::$undefined;
$x342 = 0;
$x343 = JS::toString('lastIndex', $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x344 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 120, 19, '<image>/05_string.js');
$_TypeError =& $x344[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x344;
$x345 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x346 = $x345($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x346->class) && $x346->class === 'Error' && !isset($x346->properties['file']) && !isset($x346->properties['line']) && !isset($x346->properties['column'])) {$x346->properties['file'] = '<image>/05_string.js';$x346->properties['line'] = 120;$x346->properties['column'] = 19;$x346->attributes['file'] = $x346->attributes['line'] = $x346->attributes['column'] = 0; }
throw new JSException($x346, 120, 19, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x347, $W347, $S347, $U347);
$x348 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, JS::toString($x343, $global), 120, 19, '<image>/05_string.js');
$x347 =& $x348[0]; list(,$W347,$S347,$U347) = $x348;
if ($U347 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties[$x343] = $x347; $x347 =& $_regexp->properties[$x343]; $_regexp->attributes[$x343] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U347 = FALSE; $W347 = TRUE; }
if (isset($S347)) {
$x350 = $S347->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x351 = $x350($global, $_regexp, $S347, array($x342), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x349 = $x351;
} else {
if (!$U347) {$x349 = $x342;if ($W347) { $x347 = $x342; }  }
else { $x349 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; };
for ($x352 = 0;; ++$x352) {
if ($x352 === 0) {
$scope->properties['previousLastIndex'] = JS::$undefined; $_previousLastIndex =& $scope->properties['previousLastIndex'];
$UpreviousLastIndex = FALSE;
$_previousLastIndex = 0;
$scope->properties['lastMatch'] = JS::$undefined; $_lastMatch =& $scope->properties['lastMatch'];
$UlastMatch = FALSE;
$_lastMatch = true;
}
if ($x352 !== 0) {
$x353 = ++$_n;
}

if (!JS::toBoolean($_lastMatch, $global)) { break; }

if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x355 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
$_TypeError =& $x355[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x355;
$x356 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x357 = $x356($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x357->class) && $x357->class === 'Error' && !isset($x357->properties['file']) && !isset($x357->properties['line']) && !isset($x357->properties['column'])) {$x357->properties['file'] = '<image>/05_string.js';$x357->properties['line'] = 123;$x357->properties['column'] = 22;$x357->attributes['file'] = $x357->attributes['line'] = $x357->attributes['column'] = 0; }
throw new JSException($x357, 123, 22, '<image>/05_string.js');
}
$x354 = JS::toObject($_regexp, $global);
unset($x358, $W358, $S358, $U358);
$x359 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x354, JS::toString('exec', $global), 123, 22, '<image>/05_string.js');
$x358 =& $x359[0]; list(,$W358,$S358,$U358) = $x359;
if (!(is_object($x358) && isset($x358->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x362 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
$_TypeError =& $x362[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x362;
$x363 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x364 = $x363($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x364->class) && $x364->class === 'Error' && !isset($x364->properties['file']) && !isset($x364->properties['line']) && !isset($x364->properties['column'])) {$x364->properties['file'] = '<image>/05_string.js';$x364->properties['line'] = 123;$x364->properties['column'] = 22;$x364->attributes['file'] = $x364->attributes['line'] = $x364->attributes['column'] = 0; }
throw new JSException($x364, 123, 22, '<image>/05_string.js');
}
$x360 = $x358->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x361 = $x360($global, $x354, $x358, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x361;
$x365 = (!JS::toBoolean((!JS::toBoolean($_match, $global)), $global));
if ($UlastMatch) {$global->properties['lastMatch'] = $_lastMatch; $_lastMatch =& $global->properties['lastMatch']; }
$_lastMatch = $x365;
if (JS::toBoolean($_match, $global)) {
unset($x367, $W367, $S367, $U367);
$x368 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 127, 14, '<image>/05_string.js');
$x367 =& $x368[0]; list(,$W367,$S367,$U367) = $x368;
$x366 = (((gettype($x367) === gettype($_previousLastIndex) && $x367 === $_previousLastIndex))|| (((is_float($x367) || is_int($x367)) && (is_float($_previousLastIndex) || is_int($_previousLastIndex))) && $x367 == $_previousLastIndex));
if (JS::toBoolean($x366, $global)) {
unset($x371, $W371, $S371, $U371);
$x372 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 128, 50, '<image>/05_string.js');
$x371 =& $x372[0]; list(,$W371,$S371,$U371) = $x372;
$x369 = JS::toPrimitive($x371, $global);
$x370 = JS::toPrimitive(1, $global);
$x373 = (is_string($x369) || is_string($x370) ? JS::toString($x369, $global) . JS::toString($x370, $global) : JS::toNumber($x369, $global) + JS::toNumber($x370, $global));
$x374 = JS::toString('lastIndex', $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x375 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 128, 42, '<image>/05_string.js');
$_TypeError =& $x375[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x375;
$x376 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x377 = $x376($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x377->class) && $x377->class === 'Error' && !isset($x377->properties['file']) && !isset($x377->properties['line']) && !isset($x377->properties['column'])) {$x377->properties['file'] = '<image>/05_string.js';$x377->properties['line'] = 128;$x377->properties['column'] = 42;$x377->attributes['file'] = $x377->attributes['line'] = $x377->attributes['column'] = 0; }
throw new JSException($x377, 128, 42, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x378, $W378, $S378, $U378);
$x379 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, JS::toString($x374, $global), 128, 42, '<image>/05_string.js');
$x378 =& $x379[0]; list(,$W378,$S378,$U378) = $x379;
if ($U378 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties[$x374] = $x378; $x378 =& $_regexp->properties[$x374]; $_regexp->attributes[$x374] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U378 = FALSE; $W378 = TRUE; }
if (isset($S378)) {
$x381 = $S378->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x382 = $x381($global, $_regexp, $S378, array($x373), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x380 = $x382;
} else {
if (!$U378) {$x380 = $x373;if ($W378) { $x378 = $x373; }  }
else { $x380 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; }
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x380;;
}
else {
unset($x383, $W383, $S383, $U383);
$x384 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 130, 31, '<image>/05_string.js');
$x383 =& $x384[0]; list(,$W383,$S383,$U383) = $x384;
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x383;;
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x386 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
$_TypeError =& $x386[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x386;
$x387 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x388 = $x387($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x388->class) && $x388->class === 'Error' && !isset($x388->properties['file']) && !isset($x388->properties['line']) && !isset($x388->properties['column'])) {$x388->properties['file'] = '<image>/05_string.js';$x388->properties['line'] = 133;$x388->properties['column'] = 20;$x388->attributes['file'] = $x388->attributes['line'] = $x388->attributes['column'] = 0; }
throw new JSException($x388, 133, 20, '<image>/05_string.js');
}
$x385 = JS::toObject($_returnArray, $global);
unset($x389, $W389, $S389, $U389);
$x390 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x385, JS::toString('push', $global), 133, 20, '<image>/05_string.js');
$x389 =& $x390[0]; list(,$W389,$S389,$U389) = $x390;
unset($x391, $W391, $S391, $U391);
$x392 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 133, 26, '<image>/05_string.js');
$x391 =& $x392[0]; list(,$W391,$S391,$U391) = $x392;
if (!(is_object($x389) && isset($x389->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x395 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
$_TypeError =& $x395[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x395;
$x396 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x397 = $x396($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x397->class) && $x397->class === 'Error' && !isset($x397->properties['file']) && !isset($x397->properties['line']) && !isset($x397->properties['column'])) {$x397->properties['file'] = '<image>/05_string.js';$x397->properties['line'] = 133;$x397->properties['column'] = 20;$x397->attributes['file'] = $x397->attributes['line'] = $x397->attributes['column'] = 0; }
throw new JSException($x397, 133, 20, '<image>/05_string.js');
}
$x393 = $x389->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x394 = $x393($global, $x385, $x389, array($x391), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};;
};
$x398 = (((gettype($_n) === gettype(0) && $_n === 0))|| (((is_float($_n) || is_int($_n)) && (is_float(0) || is_int(0))) && $_n == 0));
if (JS::toBoolean($x398, $global)) {

return NULL;;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x314=&$scope->properties[\'arguments\'];$x314->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x314->properties[$i]=$args[$i];$x314->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'regexp\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_regexp=&$scope->properties[\'regexp\'];$Uregexp=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_regexp)&&isset($_regexp->class)&&$_regexp->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x317=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),111,16,\'<image>/05_string.js\');$_RegExp=&$x317[0];list(,$WRegExp,$SRegExp,$URegExp)=$x317;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x318=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),111,16,\'<image>/05_string.js\');$_ReferenceError=&$x318[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x318;$x319=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,16);$x320=$x319($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x320->class)&&$x320->class===\'Error\'&&!isset($x320->properties[\'file\'])&&!isset($x320->properties[\'line\'])&&!isset($x320->properties[\'column\'])){$x320->properties[\'file\']=\'<image>/05_string.js\';$x320->properties[\'line\']=111;$x320->properties[\'column\']=16;$x320->attributes[\'file\']=$x320->attributes[\'line\']=$x320->attributes[\'column\']=0;}throw new JSException($x320,111,16,\'<image>/05_string.js\');}$x315=clone JS::$objectTemplate;unset($x321,$W321,$S321,$U321);$x322=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),111,12,\'<image>/05_string.js\');$x321=&$x322[0];list(,$W321,$S321,$U321)=$x322;$x316=$x321;$x315->prototype=$x316;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x325=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),111,12,\'<image>/05_string.js\');$_TypeError=&$x325[0];list(,$WTypeError,$STypeError,$UTypeError)=$x325;$x326=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x327=$x326($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x327->class)&&$x327->class===\'Error\'&&!isset($x327->properties[\'file\'])&&!isset($x327->properties[\'line\'])&&!isset($x327->properties[\'column\'])){$x327->properties[\'file\']=\'<image>/05_string.js\';$x327->properties[\'line\']=111;$x327->properties[\'column\']=12;$x327->attributes[\'file\']=$x327->attributes[\'line\']=$x327->attributes[\'column\']=0;}throw new JSException($x327,111,12,\'<image>/05_string.js\');}$x323=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x324=$x323($global,$x315,$_RegExp,array($_regexp),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x316=$x324;if(is_object($x316)&&$x316!==JS::$undefined){$x315=$x316;}if($Uregexp){$global->properties[\'regexp\']=$_regexp;$_regexp=&$global->properties[\'regexp\'];}$_regexp=$x315;}unset($x328,$W328,$S328,$U328);$x329=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'global\',$global),114,13,\'<image>/05_string.js\');$x328=&$x329[0];list(,$W328,$S328,$U328)=$x329;if(JS::toBoolean((!JS::toBoolean($x328,$global)),$global)){if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x331=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x331[0];list(,$WTypeError,$STypeError,$UTypeError)=$x331;$x332=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x333=$x332($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x333->class)&&$x333->class===\'Error\'&&!isset($x333->properties[\'file\'])&&!isset($x333->properties[\'line\'])&&!isset($x333->properties[\'column\'])){$x333->properties[\'file\']=\'<image>/05_string.js\';$x333->properties[\'line\']=115;$x333->properties[\'column\']=21;$x333->attributes[\'file\']=$x333->attributes[\'line\']=$x333->attributes[\'column\']=0;}throw new JSException($x333,115,21,\'<image>/05_string.js\');}$x330=JS::toObject($_regexp,$global);unset($x334,$W334,$S334,$U334);$x335=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x330,JS::toString(\'exec\',$global),115,21,\'<image>/05_string.js\');$x334=&$x335[0];list(,$W334,$S334,$U334)=$x335;if(!(is_object($x334)&&isset($x334->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x338=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x338[0];list(,$WTypeError,$STypeError,$UTypeError)=$x338;$x339=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x340=$x339($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x340->class)&&$x340->class===\'Error\'&&!isset($x340->properties[\'file\'])&&!isset($x340->properties[\'line\'])&&!isset($x340->properties[\'column\'])){$x340->properties[\'file\']=\'<image>/05_string.js\';$x340->properties[\'line\']=115;$x340->properties[\'column\']=21;$x340->attributes[\'file\']=$x340->attributes[\'line\']=$x340->attributes[\'column\']=0;}throw new JSException($x340,115,21,\'<image>/05_string.js\');}$x336=$x334->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x337=$x336($global,$x330,$x334,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x337;}$x341=clone JS::$arrayTemplate;$x341->properties[\'length\']=0;$x341->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x341;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=0;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'currentLastIndex\']=JS::$undefined;$_currentLastIndex=&$scope->properties[\'currentLastIndex\'];$UcurrentLastIndex=FALSE;$_currentLastIndex=JS::$undefined;$x342=0;$x343=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x344=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),120,19,\'<image>/05_string.js\');$_TypeError=&$x344[0];list(,$WTypeError,$STypeError,$UTypeError)=$x344;$x345=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x346=$x345($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x346->class)&&$x346->class===\'Error\'&&!isset($x346->properties[\'file\'])&&!isset($x346->properties[\'line\'])&&!isset($x346->properties[\'column\'])){$x346->properties[\'file\']=\'<image>/05_string.js\';$x346->properties[\'line\']=120;$x346->properties[\'column\']=19;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,120,19,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x347,$W347,$S347,$U347);$x348=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,JS::toString($x343,$global),120,19,\'<image>/05_string.js\');$x347=&$x348[0];list(,$W347,$S347,$U347)=$x348;if($U347&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x343]=$x347;$x347=&$_regexp->properties[$x343];$_regexp->attributes[$x343]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U347=FALSE;$W347=TRUE;}if(isset($S347)){$x350=$S347->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x351=$x350($global,$_regexp,$S347,array($x342),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x349=$x351;}else{if(!$U347){$x349=$x342;if($W347){$x347=$x342;}}else{$x349=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}for($x352=0;;++$x352){if($x352===0){$scope->properties[\'previousLastIndex\']=JS::$undefined;$_previousLastIndex=&$scope->properties[\'previousLastIndex\'];$UpreviousLastIndex=FALSE;$_previousLastIndex=0;$scope->properties[\'lastMatch\']=JS::$undefined;$_lastMatch=&$scope->properties[\'lastMatch\'];$UlastMatch=FALSE;$_lastMatch=true;}if($x352!==0){$x353=++$_n;}if(!JS::toBoolean($_lastMatch,$global)){break;}if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x355=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x355[0];list(,$WTypeError,$STypeError,$UTypeError)=$x355;$x356=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x357=$x356($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x357->class)&&$x357->class===\'Error\'&&!isset($x357->properties[\'file\'])&&!isset($x357->properties[\'line\'])&&!isset($x357->properties[\'column\'])){$x357->properties[\'file\']=\'<image>/05_string.js\';$x357->properties[\'line\']=123;$x357->properties[\'column\']=22;$x357->attributes[\'file\']=$x357->attributes[\'line\']=$x357->attributes[\'column\']=0;}throw new JSException($x357,123,22,\'<image>/05_string.js\');}$x354=JS::toObject($_regexp,$global);unset($x358,$W358,$S358,$U358);$x359=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x354,JS::toString(\'exec\',$global),123,22,\'<image>/05_string.js\');$x358=&$x359[0];list(,$W358,$S358,$U358)=$x359;if(!(is_object($x358)&&isset($x358->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x362=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x362[0];list(,$WTypeError,$STypeError,$UTypeError)=$x362;$x363=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x364=$x363($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x364->class)&&$x364->class===\'Error\'&&!isset($x364->properties[\'file\'])&&!isset($x364->properties[\'line\'])&&!isset($x364->properties[\'column\'])){$x364->properties[\'file\']=\'<image>/05_string.js\';$x364->properties[\'line\']=123;$x364->properties[\'column\']=22;$x364->attributes[\'file\']=$x364->attributes[\'line\']=$x364->attributes[\'column\']=0;}throw new JSException($x364,123,22,\'<image>/05_string.js\');}$x360=$x358->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x361=$x360($global,$x354,$x358,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x361;$x365=(!JS::toBoolean((!JS::toBoolean($_match,$global)),$global));if($UlastMatch){$global->properties[\'lastMatch\']=$_lastMatch;$_lastMatch=&$global->properties[\'lastMatch\'];}$_lastMatch=$x365;if(JS::toBoolean($_match,$global)){unset($x367,$W367,$S367,$U367);$x368=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),127,14,\'<image>/05_string.js\');$x367=&$x368[0];list(,$W367,$S367,$U367)=$x368;$x366=(((gettype($x367)===gettype($_previousLastIndex)&&$x367===$_previousLastIndex))||(((is_float($x367)||is_int($x367))&&(is_float($_previousLastIndex)||is_int($_previousLastIndex)))&&$x367==$_previousLastIndex));if(JS::toBoolean($x366,$global)){unset($x371,$W371,$S371,$U371);$x372=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),128,50,\'<image>/05_string.js\');$x371=&$x372[0];list(,$W371,$S371,$U371)=$x372;$x369=JS::toPrimitive($x371,$global);$x370=JS::toPrimitive(1,$global);$x373=(is_string($x369)||is_string($x370)?JS::toString($x369,$global).JS::toString($x370,$global):JS::toNumber($x369,$global)+JS::toNumber($x370,$global));$x374=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x375=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),128,42,\'<image>/05_string.js\');$_TypeError=&$x375[0];list(,$WTypeError,$STypeError,$UTypeError)=$x375;$x376=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x377=$x376($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x377->class)&&$x377->class===\'Error\'&&!isset($x377->properties[\'file\'])&&!isset($x377->properties[\'line\'])&&!isset($x377->properties[\'column\'])){$x377->properties[\'file\']=\'<image>/05_string.js\';$x377->properties[\'line\']=128;$x377->properties[\'column\']=42;$x377->attributes[\'file\']=$x377->attributes[\'line\']=$x377->attributes[\'column\']=0;}throw new JSException($x377,128,42,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x378,$W378,$S378,$U378);$x379=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,JS::toString($x374,$global),128,42,\'<image>/05_string.js\');$x378=&$x379[0];list(,$W378,$S378,$U378)=$x379;if($U378&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x374]=$x378;$x378=&$_regexp->properties[$x374];$_regexp->attributes[$x374]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U378=FALSE;$W378=TRUE;}if(isset($S378)){$x381=$S378->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x382=$x381($global,$_regexp,$S378,array($x373),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x380=$x382;}else{if(!$U378){$x380=$x373;if($W378){$x378=$x373;}}else{$x380=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x380;}else{unset($x383,$W383,$S383,$U383);$x384=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),130,31,\'<image>/05_string.js\');$x383=&$x384[0];list(,$W383,$S383,$U383)=$x384;if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x383;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x386=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x386[0];list(,$WTypeError,$STypeError,$UTypeError)=$x386;$x387=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x388=$x387($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x388->class)&&$x388->class===\'Error\'&&!isset($x388->properties[\'file\'])&&!isset($x388->properties[\'line\'])&&!isset($x388->properties[\'column\'])){$x388->properties[\'file\']=\'<image>/05_string.js\';$x388->properties[\'line\']=133;$x388->properties[\'column\']=20;$x388->attributes[\'file\']=$x388->attributes[\'line\']=$x388->attributes[\'column\']=0;}throw new JSException($x388,133,20,\'<image>/05_string.js\');}$x385=JS::toObject($_returnArray,$global);unset($x389,$W389,$S389,$U389);$x390=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x385,JS::toString(\'push\',$global),133,20,\'<image>/05_string.js\');$x389=&$x390[0];list(,$W389,$S389,$U389)=$x390;unset($x391,$W391,$S391,$U391);$x392=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),133,26,\'<image>/05_string.js\');$x391=&$x392[0];list(,$W391,$S391,$U391)=$x392;if(!(is_object($x389)&&isset($x389->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x395=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x395[0];list(,$WTypeError,$STypeError,$UTypeError)=$x395;$x396=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x397=$x396($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x397->class)&&$x397->class===\'Error\'&&!isset($x397->properties[\'file\'])&&!isset($x397->properties[\'line\'])&&!isset($x397->properties[\'column\'])){$x397->properties[\'file\']=\'<image>/05_string.js\';$x397->properties[\'line\']=133;$x397->properties[\'column\']=20;$x397->attributes[\'file\']=$x397->attributes[\'line\']=$x397->attributes[\'column\']=0;}throw new JSException($x397,133,20,\'<image>/05_string.js\');}$x393=$x389->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x394=$x393($global,$x385,$x389,array($x391),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}$x398=(((gettype($_n)===gettype(0)&&$_n===0))||(((is_float($_n)||is_int($_n))&&(is_float(0)||is_int(0)))&&$_n==0));if(JS::toBoolean($x398,$global)){return NULL;}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x532 =& $scope->properties['arguments'];
$x532->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x532->properties[$i] = $args[$i];
$x532->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['_'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$___ =& $scope->properties['_'];
$U__ = FALSE;
$scope->properties['c'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x533 = (((gettype($_c) === gettype('$') && $_c === '$'))|| (((is_float($_c) || is_int($_c)) && (is_float('$') || is_int('$'))) && $_c == '$'));
if (JS::toBoolean($x533, $global)) {

return '$';;
}
else {
$x534 = (((gettype($_c) === gettype('&') && $_c === '&'))|| (((is_float($_c) || is_int($_c)) && (is_float('&') || is_int('&'))) && $_c == '&'));
if (JS::toBoolean($x534, $global)) {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x535 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('match', $global), 171, 13, '<image>/05_string.js');
$_match =& $x535[0]; list(,$Wmatch,$Smatch,$Umatch) = $x535;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x536 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 171, 13, '<image>/05_string.js');
$_ReferenceError =& $x536[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x536;
$x537 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 171, 13);
$x538 = $x537($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x538->class) && $x538->class === 'Error' && !isset($x538->properties['file']) && !isset($x538->properties['line']) && !isset($x538->properties['column'])) {$x538->properties['file'] = '<image>/05_string.js';$x538->properties['line'] = 171;$x538->properties['column'] = 13;$x538->attributes['file'] = $x538->attributes['line'] = $x538->attributes['column'] = 0; }
throw new JSException($x538, 171, 13, '<image>/05_string.js');
}
unset($x539, $W539, $S539, $U539);
$x540 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 171, 18, '<image>/05_string.js');
$x539 =& $x540[0]; list(,$W539,$S539,$U539) = $x540;
return $x539;;
}
else {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x541 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('match', $global), 174, 13, '<image>/05_string.js');
$_match =& $x541[0]; list(,$Wmatch,$Smatch,$Umatch) = $x541;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x542 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 174, 13, '<image>/05_string.js');
$_ReferenceError =& $x542[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x542;
$x543 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 13);
$x544 = $x543($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x544->class) && $x544->class === 'Error' && !isset($x544->properties['file']) && !isset($x544->properties['line']) && !isset($x544->properties['column'])) {$x544->properties['file'] = '<image>/05_string.js';$x544->properties['line'] = 174;$x544->properties['column'] = 13;$x544->attributes['file'] = $x544->attributes['line'] = $x544->attributes['column'] = 0; }
throw new JSException($x544, 174, 13, '<image>/05_string.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x545 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Number', $global), 174, 19, '<image>/05_string.js');
$_Number =& $x545[0]; list(,$WNumber,$SNumber,$UNumber) = $x545;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x546 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 174, 19, '<image>/05_string.js');
$_ReferenceError =& $x546[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x546;
$x547 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 19);
$x548 = $x547($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x548->class) && $x548->class === 'Error' && !isset($x548->properties['file']) && !isset($x548->properties['line']) && !isset($x548->properties['column'])) {$x548->properties['file'] = '<image>/05_string.js';$x548->properties['line'] = 174;$x548->properties['column'] = 19;$x548->attributes['file'] = $x548->attributes['line'] = $x548->attributes['column'] = 0; }
throw new JSException($x548, 174, 19, '<image>/05_string.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x551 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 174, 25, '<image>/05_string.js');
$_TypeError =& $x551[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x551;
$x552 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x553 = $x552($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x553->class) && $x553->class === 'Error' && !isset($x553->properties['file']) && !isset($x553->properties['line']) && !isset($x553->properties['column'])) {$x553->properties['file'] = '<image>/05_string.js';$x553->properties['line'] = 174;$x553->properties['column'] = 25;$x553->attributes['file'] = $x553->attributes['line'] = $x553->attributes['column'] = 0; }
throw new JSException($x553, 174, 25, '<image>/05_string.js');
}
$x549 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x550 = $x549($global, $global, $_Number, array($_c), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x554, $W554, $S554, $U554);
$x555 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString($x550, $global), 174, 18, '<image>/05_string.js');
$x554 =& $x555[0]; list(,$W554,$S554,$U554) = $x555;
return $x554;;
};
}
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x532=&$scope->properties[\'arguments\'];$x532->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x532->properties[$i]=$args[$i];$x532->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'_\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$___=&$scope->properties[\'_\'];$U__=FALSE;$scope->properties[\'c\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$x533=(((gettype($_c)===gettype(\'$\')&&$_c===\'$\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'$\')||is_int(\'$\')))&&$_c==\'$\'));if(JS::toBoolean($x533,$global)){return\'$\';}else{$x534=(((gettype($_c)===gettype(\'&\')&&$_c===\'&\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'&\')||is_int(\'&\')))&&$_c==\'&\'));if(JS::toBoolean($x534,$global)){unset($_match,$Wmatch,$Smatch,$Umatch);$x535=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'match\',$global),171,13,\'<image>/05_string.js\');$_match=&$x535[0];list(,$Wmatch,$Smatch,$Umatch)=$x535;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x536=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),171,13,\'<image>/05_string.js\');$_ReferenceError=&$x536[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x536;$x537=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',171,13);$x538=$x537($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x538->class)&&$x538->class===\'Error\'&&!isset($x538->properties[\'file\'])&&!isset($x538->properties[\'line\'])&&!isset($x538->properties[\'column\'])){$x538->properties[\'file\']=\'<image>/05_string.js\';$x538->properties[\'line\']=171;$x538->properties[\'column\']=13;$x538->attributes[\'file\']=$x538->attributes[\'line\']=$x538->attributes[\'column\']=0;}throw new JSException($x538,171,13,\'<image>/05_string.js\');}unset($x539,$W539,$S539,$U539);$x540=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),171,18,\'<image>/05_string.js\');$x539=&$x540[0];list(,$W539,$S539,$U539)=$x540;return$x539;}else{unset($_match,$Wmatch,$Smatch,$Umatch);$x541=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'match\',$global),174,13,\'<image>/05_string.js\');$_match=&$x541[0];list(,$Wmatch,$Smatch,$Umatch)=$x541;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x542=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),174,13,\'<image>/05_string.js\');$_ReferenceError=&$x542[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x542;$x543=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,13);$x544=$x543($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x544->class)&&$x544->class===\'Error\'&&!isset($x544->properties[\'file\'])&&!isset($x544->properties[\'line\'])&&!isset($x544->properties[\'column\'])){$x544->properties[\'file\']=\'<image>/05_string.js\';$x544->properties[\'line\']=174;$x544->properties[\'column\']=13;$x544->attributes[\'file\']=$x544->attributes[\'line\']=$x544->attributes[\'column\']=0;}throw new JSException($x544,174,13,\'<image>/05_string.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x545=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Number\',$global),174,19,\'<image>/05_string.js\');$_Number=&$x545[0];list(,$WNumber,$SNumber,$UNumber)=$x545;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x546=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),174,19,\'<image>/05_string.js\');$_ReferenceError=&$x546[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x546;$x547=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,19);$x548=$x547($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x548->class)&&$x548->class===\'Error\'&&!isset($x548->properties[\'file\'])&&!isset($x548->properties[\'line\'])&&!isset($x548->properties[\'column\'])){$x548->properties[\'file\']=\'<image>/05_string.js\';$x548->properties[\'line\']=174;$x548->properties[\'column\']=19;$x548->attributes[\'file\']=$x548->attributes[\'line\']=$x548->attributes[\'column\']=0;}throw new JSException($x548,174,19,\'<image>/05_string.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x551=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),174,25,\'<image>/05_string.js\');$_TypeError=&$x551[0];list(,$WTypeError,$STypeError,$UTypeError)=$x551;$x552=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x553=$x552($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x553->class)&&$x553->class===\'Error\'&&!isset($x553->properties[\'file\'])&&!isset($x553->properties[\'line\'])&&!isset($x553->properties[\'column\'])){$x553->properties[\'file\']=\'<image>/05_string.js\';$x553->properties[\'line\']=174;$x553->properties[\'column\']=25;$x553->attributes[\'file\']=$x553->attributes[\'line\']=$x553->attributes[\'column\']=0;}throw new JSException($x553,174,25,\'<image>/05_string.js\');}$x549=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x550=$x549($global,$global,$_Number,array($_c),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x554,$W554,$S554,$U554);$x555=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString($x550,$global),174,18,\'<image>/05_string.js\');$x554=&$x555[0];list(,$W554,$S554,$U554)=$x555;return$x554;}}return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x412 =& $scope->properties['arguments'];
$x412->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x412->properties[$i] = $args[$i];
$x412->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x415 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 146, 16, '<image>/05_string.js');
$_RegExp =& $x415[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x415;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x416 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 146, 16, '<image>/05_string.js');
$_ReferenceError =& $x416[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x416;
$x417 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 16);
$x418 = $x417($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x418->class) && $x418->class === 'Error' && !isset($x418->properties['file']) && !isset($x418->properties['line']) && !isset($x418->properties['column'])) {$x418->properties['file'] = '<image>/05_string.js';$x418->properties['line'] = 146;$x418->properties['column'] = 16;$x418->attributes['file'] = $x418->attributes['line'] = $x418->attributes['column'] = 0; }
throw new JSException($x418, 146, 16, '<image>/05_string.js');
}
$x413 = clone JS::$objectTemplate;
unset($x419, $W419, $S419, $U419);
$x420 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 146, 12, '<image>/05_string.js');
$x419 =& $x420[0]; list(,$W419,$S419,$U419) = $x420;
$x414 = $x419;
$x413->prototype = $x414;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x423 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 146, 12, '<image>/05_string.js');
$_TypeError =& $x423[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x423;
$x424 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x425 = $x424($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x425->class) && $x425->class === 'Error' && !isset($x425->properties['file']) && !isset($x425->properties['line']) && !isset($x425->properties['column'])) {$x425->properties['file'] = '<image>/05_string.js';$x425->properties['line'] = 146;$x425->properties['column'] = 12;$x425->attributes['file'] = $x425->attributes['line'] = $x425->attributes['column'] = 0; }
throw new JSException($x425, 146, 12, '<image>/05_string.js');
}
$x421 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x422 = $x421($global, $x413, $_RegExp, array(preg_quote(JS::toString($_search, $global), '/')), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x414 = $x422;
if (is_object($x414) && $x414 !== JS::$undefined) { $x413 = $x414; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x413;;
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
$x428 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
$_TypeError =& $x428[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x428;
$x429 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x430 = $x429($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x430->class) && $x430->class === 'Error' && !isset($x430->properties['file']) && !isset($x430->properties['line']) && !isset($x430->properties['column'])) {$x430->properties['file'] = '<image>/05_string.js';$x430->properties['line'] = 152;$x430->properties['column'] = 29;$x430->attributes['file'] = $x430->attributes['line'] = $x430->attributes['column'] = 0; }
throw new JSException($x430, 152, 29, '<image>/05_string.js');
}
$x427 = JS::toObject($_search, $global);
unset($x431, $W431, $S431, $U431);
$x432 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x427, JS::toString('exec', $global), 152, 29, '<image>/05_string.js');
$x431 =& $x432[0]; list(,$W431,$S431,$U431) = $x432;
if (!(is_object($x431) && isset($x431->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x435 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
$_TypeError =& $x435[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x435;
$x436 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x437 = $x436($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x437->class) && $x437->class === 'Error' && !isset($x437->properties['file']) && !isset($x437->properties['line']) && !isset($x437->properties['column'])) {$x437->properties['file'] = '<image>/05_string.js';$x437->properties['line'] = 152;$x437->properties['column'] = 29;$x437->attributes['file'] = $x437->attributes['line'] = $x437->attributes['column'] = 0; }
throw new JSException($x437, 152, 29, '<image>/05_string.js');
}
$x433 = $x431->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x434 = $x433($global, $x427, $x431, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x434;
$x426 = !(((gettype($_match) === gettype(NULL) && $_match === NULL))|| (((is_float($_match) || is_int($_match)) && (is_float(NULL) || is_int(NULL))) && $_match == NULL));
if (!JS::toBoolean($x426, $global)) { break; }

unset($x438, $W438, $S438, $U438);
$x439 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 153, 16, '<image>/05_string.js');
$x438 =& $x439[0]; list(,$W438,$S438,$U438) = $x439;
if ($Uindex) {$global->properties['index'] = $_index; $_index =& $global->properties['index']; }
$_index = $x438;
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x441 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 154, 40, '<image>/05_string.js');
$_TypeError =& $x441[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x441;
$x442 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x443 = $x442($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x443->class) && $x443->class === 'Error' && !isset($x443->properties['file']) && !isset($x443->properties['line']) && !isset($x443->properties['column'])) {$x443->properties['file'] = '<image>/05_string.js';$x443->properties['line'] = 154;$x443->properties['column'] = 40;$x443->attributes['file'] = $x443->attributes['line'] = $x443->attributes['column'] = 0; }
throw new JSException($x443, 154, 40, '<image>/05_string.js');
}
$x440 = JS::toObject($_thisString, $global);
unset($x444, $W444, $S444, $U444);
$x445 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x440, JS::toString('substring', $global), 154, 40, '<image>/05_string.js');
$x444 =& $x445[0]; list(,$W444,$S444,$U444) = $x445;
if (!(is_object($x444) && isset($x444->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x448 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 154, 40, '<image>/05_string.js');
$_TypeError =& $x448[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x448;
$x449 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x450 = $x449($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x450->class) && $x450->class === 'Error' && !isset($x450->properties['file']) && !isset($x450->properties['line']) && !isset($x450->properties['column'])) {$x450->properties['file'] = '<image>/05_string.js';$x450->properties['line'] = 154;$x450->properties['column'] = 40;$x450->attributes['file'] = $x450->attributes['line'] = $x450->attributes['column'] = 0; }
throw new JSException($x450, 154, 40, '<image>/05_string.js');
}
$x446 = $x444->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x447 = $x446($global, $x440, $x444, array($_lastIndex, $_index), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x447;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x451 = JS::toPrimitive($_newString, $global);
$x452 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x451) || is_string($x452) ? JS::toString($x451, $global) . JS::toString($x452, $global) : JS::toNumber($x451, $global) + JS::toNumber($x452, $global));
unset($x455, $W455, $S455, $U455);
$x456 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 155, 28, '<image>/05_string.js');
$x455 =& $x456[0]; list(,$W455,$S455,$U455) = $x456;
unset($x457, $W457, $S457, $U457);
$x458 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x455, JS::toString('length', $global), 155, 31, '<image>/05_string.js');
$x457 =& $x458[0]; list(,$W457,$S457,$U457) = $x458;
$x453 = JS::toPrimitive($_index, $global);
$x454 = JS::toPrimitive($x457, $global);
$x459 = (is_string($x453) || is_string($x454) ? JS::toString($x453, $global) . JS::toString($x454, $global) : JS::toNumber($x453, $global) + JS::toNumber($x454, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x459;
$x461 = $_replace;
$x461 = ($x461 === JS::$undefined ? 'undefined' : (is_int($x461) || is_float($x461) ? 'number' : (is_bool($x461) ? 'boolean' : (is_string($x461) ? 'string' : (is_object($x461) && isset($x461->call) ? 'function' : 'object')))));
$x460 = (((gettype($x461) === gettype('function') && $x461 === 'function'))|| (((is_float($x461) || is_int($x461)) && (is_float('function') || is_int('function'))) && $x461 == 'function'));
if (JS::toBoolean($x460, $global)) {
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x463 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 158, 14, '<image>/05_string.js');
$_TypeError =& $x463[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x463;
$x464 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x465 = $x464($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x465->class) && $x465->class === 'Error' && !isset($x465->properties['file']) && !isset($x465->properties['line']) && !isset($x465->properties['column'])) {$x465->properties['file'] = '<image>/05_string.js';$x465->properties['line'] = 158;$x465->properties['column'] = 14;$x465->attributes['file'] = $x465->attributes['line'] = $x465->attributes['column'] = 0; }
throw new JSException($x465, 158, 14, '<image>/05_string.js');
}
$x462 = JS::toObject($_match, $global);
unset($x466, $W466, $S466, $U466);
$x467 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x462, JS::toString('push', $global), 158, 14, '<image>/05_string.js');
$x466 =& $x467[0]; list(,$W466,$S466,$U466) = $x467;
unset($x468, $W468, $S468, $U468);
$x469 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 158, 20, '<image>/05_string.js');
$x468 =& $x469[0]; list(,$W468,$S468,$U468) = $x469;
if (!(is_object($x466) && isset($x466->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x472 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 158, 14, '<image>/05_string.js');
$_TypeError =& $x472[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x472;
$x473 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x474 = $x473($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x474->class) && $x474->class === 'Error' && !isset($x474->properties['file']) && !isset($x474->properties['line']) && !isset($x474->properties['column'])) {$x474->properties['file'] = '<image>/05_string.js';$x474->properties['line'] = 158;$x474->properties['column'] = 14;$x474->attributes['file'] = $x474->attributes['line'] = $x474->attributes['column'] = 0; }
throw new JSException($x474, 158, 14, '<image>/05_string.js');
}
$x470 = $x466->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x471 = $x470($global, $x462, $x466, array($x468), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x476 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
$_TypeError =& $x476[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x476;
$x477 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x478 = $x477($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x478->class) && $x478->class === 'Error' && !isset($x478->properties['file']) && !isset($x478->properties['line']) && !isset($x478->properties['column'])) {$x478->properties['file'] = '<image>/05_string.js';$x478->properties['line'] = 159;$x478->properties['column'] = 14;$x478->attributes['file'] = $x478->attributes['line'] = $x478->attributes['column'] = 0; }
throw new JSException($x478, 159, 14, '<image>/05_string.js');
}
$x475 = JS::toObject($_match, $global);
unset($x479, $W479, $S479, $U479);
$x480 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x475, JS::toString('push', $global), 159, 14, '<image>/05_string.js');
$x479 =& $x480[0]; list(,$W479,$S479,$U479) = $x480;
unset($x481, $W481, $S481, $U481);
$x482 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('input', $global), 159, 20, '<image>/05_string.js');
$x481 =& $x482[0]; list(,$W481,$S481,$U481) = $x482;
if (!(is_object($x479) && isset($x479->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x485 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
$_TypeError =& $x485[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x485;
$x486 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x487 = $x486($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x487->class) && $x487->class === 'Error' && !isset($x487->properties['file']) && !isset($x487->properties['line']) && !isset($x487->properties['column'])) {$x487->properties['file'] = '<image>/05_string.js';$x487->properties['line'] = 159;$x487->properties['column'] = 14;$x487->attributes['file'] = $x487->attributes['line'] = $x487->attributes['column'] = 0; }
throw new JSException($x487, 159, 14, '<image>/05_string.js');
}
$x483 = $x479->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x484 = $x483($global, $x475, $x479, array($x481), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!array_key_exists('index', $_match->attributes)) { unset($_match->properties['index']); $x488 = TRUE; }
else if ($_match->attributes['index'] & JS::CONFIGURABLE) { unset($_match->properties['index'], $_match->attributes['index'], $_match->getters['index'], $_match->setters['index']); $x488 = TRUE; }
else { $x488 = FALSE; };
if (!array_key_exists('input', $_match->attributes)) { unset($_match->properties['input']); $x489 = TRUE; }
else if ($_match->attributes['input'] & JS::CONFIGURABLE) { unset($_match->properties['input'], $_match->attributes['input'], $_match->getters['input'], $_match->setters['input']); $x489 = TRUE; }
else { $x489 = FALSE; };
unset($_String, $WString, $SString, $UString);
$x490 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('String', $global), 163, 21, '<image>/05_string.js');
$_String =& $x490[0]; list(,$WString,$SString,$UString) = $x490;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x491 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 163, 21, '<image>/05_string.js');
$_ReferenceError =& $x491[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x491;
$x492 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 21);
$x493 = $x492($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x493->class) && $x493->class === 'Error' && !isset($x493->properties['file']) && !isset($x493->properties['line']) && !isset($x493->properties['column'])) {$x493->properties['file'] = '<image>/05_string.js';$x493->properties['line'] = 163;$x493->properties['column'] = 21;$x493->attributes['file'] = $x493->attributes['line'] = $x493->attributes['column'] = 0; }
throw new JSException($x493, 163, 21, '<image>/05_string.js');
}
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x495 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 163, 41, '<image>/05_string.js');
$_TypeError =& $x495[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x495;
$x496 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x497 = $x496($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x497->class) && $x497->class === 'Error' && !isset($x497->properties['file']) && !isset($x497->properties['line']) && !isset($x497->properties['column'])) {$x497->properties['file'] = '<image>/05_string.js';$x497->properties['line'] = 163;$x497->properties['column'] = 41;$x497->attributes['file'] = $x497->attributes['line'] = $x497->attributes['column'] = 0; }
throw new JSException($x497, 163, 41, '<image>/05_string.js');
}
$x494 = JS::toObject($_replace, $global);
unset($x498, $W498, $S498, $U498);
$x499 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x494, JS::toString('apply', $global), 163, 41, '<image>/05_string.js');
$x498 =& $x499[0]; list(,$W498,$S498,$U498) = $x499;
if (!(is_object($x498) && isset($x498->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x502 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 163, 41, '<image>/05_string.js');
$_TypeError =& $x502[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x502;
$x503 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x504 = $x503($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x504->class) && $x504->class === 'Error' && !isset($x504->properties['file']) && !isset($x504->properties['line']) && !isset($x504->properties['column'])) {$x504->properties['file'] = '<image>/05_string.js';$x504->properties['line'] = 163;$x504->properties['column'] = 41;$x504->attributes['file'] = $x504->attributes['line'] = $x504->attributes['column'] = 0; }
throw new JSException($x504, 163, 41, '<image>/05_string.js');
}
$x500 = $x498->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x501 = $x500($global, $x494, $x498, array(JS::$undefined, $_match), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x507 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 163, 27, '<image>/05_string.js');
$_TypeError =& $x507[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x507;
$x508 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x509 = $x508($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x509->class) && $x509->class === 'Error' && !isset($x509->properties['file']) && !isset($x509->properties['line']) && !isset($x509->properties['column'])) {$x509->properties['file'] = '<image>/05_string.js';$x509->properties['line'] = 163;$x509->properties['column'] = 27;$x509->attributes['file'] = $x509->attributes['line'] = $x509->attributes['column'] = 0; }
throw new JSException($x509, 163, 27, '<image>/05_string.js');
}
$x505 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x506 = $x505($global, $global, $_String, array($x501), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x506;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x510 = JS::toPrimitive($_newString, $global);
$x511 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x510) || is_string($x511) ? JS::toString($x510, $global) . JS::toString($x511, $global) : JS::toNumber($x510, $global) + JS::toNumber($x511, $global));;
}
else {
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x513 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 32, '<image>/05_string.js');
$_TypeError =& $x513[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x513;
$x514 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x515 = $x514($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x515->class) && $x515->class === 'Error' && !isset($x515->properties['file']) && !isset($x515->properties['line']) && !isset($x515->properties['column'])) {$x515->properties['file'] = '<image>/05_string.js';$x515->properties['line'] = 166;$x515->properties['column'] = 32;$x515->attributes['file'] = $x515->attributes['line'] = $x515->attributes['column'] = 0; }
throw new JSException($x515, 166, 32, '<image>/05_string.js');
}
$x512 = JS::toObject($_replace, $global);
unset($x516, $W516, $S516, $U516);
$x517 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x512, JS::toString('replace', $global), 166, 32, '<image>/05_string.js');
$x516 =& $x517[0]; list(,$W516,$S516,$U516) = $x517;
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x520 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 166, 33, '<image>/05_string.js');
$_RegExp =& $x520[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x520;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x521 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 166, 33, '<image>/05_string.js');
$_ReferenceError =& $x521[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x521;
$x522 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x523 = $x522($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x523->class) && $x523->class === 'Error' && !isset($x523->properties['file']) && !isset($x523->properties['line']) && !isset($x523->properties['column'])) {$x523->properties['file'] = '<image>/05_string.js';$x523->properties['line'] = 166;$x523->properties['column'] = 33;$x523->attributes['file'] = $x523->attributes['line'] = $x523->attributes['column'] = 0; }
throw new JSException($x523, 166, 33, '<image>/05_string.js');
}
$x518 = clone JS::$objectTemplate;
unset($x524, $W524, $S524, $U524);
$x525 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 166, 33, '<image>/05_string.js');
$x524 =& $x525[0]; list(,$W524,$S524,$U524) = $x525;
$x519 = $x524;
$x518->prototype = $x519;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x528 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 33, '<image>/05_string.js');
$_TypeError =& $x528[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x528;
$x529 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x530 = $x529($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x530->class) && $x530->class === 'Error' && !isset($x530->properties['file']) && !isset($x530->properties['line']) && !isset($x530->properties['column'])) {$x530->properties['file'] = '<image>/05_string.js';$x530->properties['line'] = 166;$x530->properties['column'] = 33;$x530->attributes['file'] = $x530->attributes['line'] = $x530->attributes['column'] = 0; }
throw new JSException($x530, 166, 33, '<image>/05_string.js');
}
$x526 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x527 = $x526($global, $x518, $_RegExp, array('\\$([$&]|[0-9]|[0-9][0-9])', 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x519 = $x527;
if (is_object($x519) && $x519 !== JS::$undefined) { $x518 = $x519; }
$x556 = clone JS::$functionTemplate; $x556->call = '_465e5538fcb402e27559db40bec8addd_15'; $x556->parameters = array (
  0 => '_',
  1 => 'c',
); $x556->scope = $scope; $x556->properties['prototype'] = clone JS::$objectTemplate; $x556->attributes['prototype'] = JS::WRITABLE; $x556->properties['prototype']->properties['constructor'] = $x556; $x556->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x556->properties['length'] = 2; $x556->attributes['length'] = 0;
if (!(is_object($x516) && isset($x516->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x559 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 32, '<image>/05_string.js');
$_TypeError =& $x559[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x559;
$x560 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x561 = $x560($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x561->class) && $x561->class === 'Error' && !isset($x561->properties['file']) && !isset($x561->properties['line']) && !isset($x561->properties['column'])) {$x561->properties['file'] = '<image>/05_string.js';$x561->properties['line'] = 166;$x561->properties['column'] = 32;$x561->attributes['file'] = $x561->attributes['line'] = $x561->attributes['column'] = 0; }
throw new JSException($x561, 166, 32, '<image>/05_string.js');
}
$x557 = $x516->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x558 = $x557($global, $x512, $x516, array($x518, $x556), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x562 = JS::toPrimitive($_newString, $global);
$x563 = JS::toPrimitive($x558, $global);
$_newString = (is_string($x562) || is_string($x563) ? JS::toString($x562, $global) . JS::toString($x563, $global) : JS::toNumber($x562, $global) + JS::toNumber($x563, $global));;
};
unset($x564, $W564, $S564, $U564);
$x565 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, JS::toString('global', $global), 179, 14, '<image>/05_string.js');
$x564 =& $x565[0]; list(,$W564,$S564,$U564) = $x565;
if (JS::toBoolean((!JS::toBoolean($x564, $global)), $global)) {
break;;
};;
};
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x567 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 35, '<image>/05_string.js');
$_TypeError =& $x567[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x567;
$x568 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x569 = $x568($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x569->class) && $x569->class === 'Error' && !isset($x569->properties['file']) && !isset($x569->properties['line']) && !isset($x569->properties['column'])) {$x569->properties['file'] = '<image>/05_string.js';$x569->properties['line'] = 184;$x569->properties['column'] = 35;$x569->attributes['file'] = $x569->attributes['line'] = $x569->attributes['column'] = 0; }
throw new JSException($x569, 184, 35, '<image>/05_string.js');
}
$x566 = JS::toObject($_thisString, $global);
unset($x570, $W570, $S570, $U570);
$x571 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x566, JS::toString('substring', $global), 184, 35, '<image>/05_string.js');
$x570 =& $x571[0]; list(,$W570,$S570,$U570) = $x571;
unset($x572, $W572, $S572, $U572);
$x573 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_thisString, JS::toString('length', $global), 184, 57, '<image>/05_string.js');
$x572 =& $x573[0]; list(,$W572,$S572,$U572) = $x573;
if (!(is_object($x570) && isset($x570->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x576 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 35, '<image>/05_string.js');
$_TypeError =& $x576[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x576;
$x577 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x578 = $x577($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x578->class) && $x578->class === 'Error' && !isset($x578->properties['file']) && !isset($x578->properties['line']) && !isset($x578->properties['column'])) {$x578->properties['file'] = '<image>/05_string.js';$x578->properties['line'] = 184;$x578->properties['column'] = 35;$x578->attributes['file'] = $x578->attributes['line'] = $x578->attributes['column'] = 0; }
throw new JSException($x578, 184, 35, '<image>/05_string.js');
}
$x574 = $x570->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x575 = $x574($global, $x566, $x570, array($_lastIndex, $x572), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x579 = JS::toPrimitive($_newString, $global);
$x580 = JS::toPrimitive($x575, $global);
$_newString = (is_string($x579) || is_string($x580) ? JS::toString($x579, $global) . JS::toString($x580, $global) : JS::toNumber($x579, $global) + JS::toNumber($x580, $global));
return $_newString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x412=&$scope->properties[\'arguments\'];$x412->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x412->properties[$i]=$args[$i];$x412->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'replace\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replace=&$scope->properties[\'replace\'];$Ureplace=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!is_object($_search)||!isset($_search->class)||$_search->class!==\'RegExp\',$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x415=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),146,16,\'<image>/05_string.js\');$_RegExp=&$x415[0];list(,$WRegExp,$SRegExp,$URegExp)=$x415;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x416=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),146,16,\'<image>/05_string.js\');$_ReferenceError=&$x416[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x416;$x417=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,16);$x418=$x417($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x418->class)&&$x418->class===\'Error\'&&!isset($x418->properties[\'file\'])&&!isset($x418->properties[\'line\'])&&!isset($x418->properties[\'column\'])){$x418->properties[\'file\']=\'<image>/05_string.js\';$x418->properties[\'line\']=146;$x418->properties[\'column\']=16;$x418->attributes[\'file\']=$x418->attributes[\'line\']=$x418->attributes[\'column\']=0;}throw new JSException($x418,146,16,\'<image>/05_string.js\');}$x413=clone JS::$objectTemplate;unset($x419,$W419,$S419,$U419);$x420=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),146,12,\'<image>/05_string.js\');$x419=&$x420[0];list(,$W419,$S419,$U419)=$x420;$x414=$x419;$x413->prototype=$x414;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x423=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),146,12,\'<image>/05_string.js\');$_TypeError=&$x423[0];list(,$WTypeError,$STypeError,$UTypeError)=$x423;$x424=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x425=$x424($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x425->class)&&$x425->class===\'Error\'&&!isset($x425->properties[\'file\'])&&!isset($x425->properties[\'line\'])&&!isset($x425->properties[\'column\'])){$x425->properties[\'file\']=\'<image>/05_string.js\';$x425->properties[\'line\']=146;$x425->properties[\'column\']=12;$x425->attributes[\'file\']=$x425->attributes[\'line\']=$x425->attributes[\'column\']=0;}throw new JSException($x425,146,12,\'<image>/05_string.js\');}$x421=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x422=$x421($global,$x413,$_RegExp,array(preg_quote(JS::toString($_search,$global),\'/\')),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x414=$x422;if(is_object($x414)&&$x414!==JS::$undefined){$x413=$x414;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x413;}$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;$scope->properties[\'newString\']=JS::$undefined;$_newString=&$scope->properties[\'newString\'];$UnewString=FALSE;$_newString=\'\';$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=JS::$undefined;for(;;){if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x428=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x428[0];list(,$WTypeError,$STypeError,$UTypeError)=$x428;$x429=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x430=$x429($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x430->class)&&$x430->class===\'Error\'&&!isset($x430->properties[\'file\'])&&!isset($x430->properties[\'line\'])&&!isset($x430->properties[\'column\'])){$x430->properties[\'file\']=\'<image>/05_string.js\';$x430->properties[\'line\']=152;$x430->properties[\'column\']=29;$x430->attributes[\'file\']=$x430->attributes[\'line\']=$x430->attributes[\'column\']=0;}throw new JSException($x430,152,29,\'<image>/05_string.js\');}$x427=JS::toObject($_search,$global);unset($x431,$W431,$S431,$U431);$x432=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x427,JS::toString(\'exec\',$global),152,29,\'<image>/05_string.js\');$x431=&$x432[0];list(,$W431,$S431,$U431)=$x432;if(!(is_object($x431)&&isset($x431->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x435=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x435[0];list(,$WTypeError,$STypeError,$UTypeError)=$x435;$x436=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x437=$x436($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x437->class)&&$x437->class===\'Error\'&&!isset($x437->properties[\'file\'])&&!isset($x437->properties[\'line\'])&&!isset($x437->properties[\'column\'])){$x437->properties[\'file\']=\'<image>/05_string.js\';$x437->properties[\'line\']=152;$x437->properties[\'column\']=29;$x437->attributes[\'file\']=$x437->attributes[\'line\']=$x437->attributes[\'column\']=0;}throw new JSException($x437,152,29,\'<image>/05_string.js\');}$x433=$x431->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x434=$x433($global,$x427,$x431,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x434;$x426=!(((gettype($_match)===gettype(NULL)&&$_match===NULL))||(((is_float($_match)||is_int($_match))&&(is_float(NULL)||is_int(NULL)))&&$_match==NULL));if(!JS::toBoolean($x426,$global)){break;}unset($x438,$W438,$S438,$U438);$x439=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),153,16,\'<image>/05_string.js\');$x438=&$x439[0];list(,$W438,$S438,$U438)=$x439;if($Uindex){$global->properties[\'index\']=$_index;$_index=&$global->properties[\'index\'];}$_index=$x438;if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x441=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),154,40,\'<image>/05_string.js\');$_TypeError=&$x441[0];list(,$WTypeError,$STypeError,$UTypeError)=$x441;$x442=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x443=$x442($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x443->class)&&$x443->class===\'Error\'&&!isset($x443->properties[\'file\'])&&!isset($x443->properties[\'line\'])&&!isset($x443->properties[\'column\'])){$x443->properties[\'file\']=\'<image>/05_string.js\';$x443->properties[\'line\']=154;$x443->properties[\'column\']=40;$x443->attributes[\'file\']=$x443->attributes[\'line\']=$x443->attributes[\'column\']=0;}throw new JSException($x443,154,40,\'<image>/05_string.js\');}$x440=JS::toObject($_thisString,$global);unset($x444,$W444,$S444,$U444);$x445=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x440,JS::toString(\'substring\',$global),154,40,\'<image>/05_string.js\');$x444=&$x445[0];list(,$W444,$S444,$U444)=$x445;if(!(is_object($x444)&&isset($x444->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x448=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),154,40,\'<image>/05_string.js\');$_TypeError=&$x448[0];list(,$WTypeError,$STypeError,$UTypeError)=$x448;$x449=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x450=$x449($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x450->class)&&$x450->class===\'Error\'&&!isset($x450->properties[\'file\'])&&!isset($x450->properties[\'line\'])&&!isset($x450->properties[\'column\'])){$x450->properties[\'file\']=\'<image>/05_string.js\';$x450->properties[\'line\']=154;$x450->properties[\'column\']=40;$x450->attributes[\'file\']=$x450->attributes[\'line\']=$x450->attributes[\'column\']=0;}throw new JSException($x450,154,40,\'<image>/05_string.js\');}$x446=$x444->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x447=$x446($global,$x440,$x444,array($_lastIndex,$_index),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x447;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x451=JS::toPrimitive($_newString,$global);$x452=JS::toPrimitive($_s,$global);$_newString=(is_string($x451)||is_string($x452)?JS::toString($x451,$global).JS::toString($x452,$global):JS::toNumber($x451,$global)+JS::toNumber($x452,$global));unset($x455,$W455,$S455,$U455);$x456=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),155,28,\'<image>/05_string.js\');$x455=&$x456[0];list(,$W455,$S455,$U455)=$x456;unset($x457,$W457,$S457,$U457);$x458=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x455,JS::toString(\'length\',$global),155,31,\'<image>/05_string.js\');$x457=&$x458[0];list(,$W457,$S457,$U457)=$x458;$x453=JS::toPrimitive($_index,$global);$x454=JS::toPrimitive($x457,$global);$x459=(is_string($x453)||is_string($x454)?JS::toString($x453,$global).JS::toString($x454,$global):JS::toNumber($x453,$global)+JS::toNumber($x454,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x459;$x461=$_replace;$x461=($x461===JS::$undefined?\'undefined\':(is_int($x461)||is_float($x461)?\'number\':(is_bool($x461)?\'boolean\':(is_string($x461)?\'string\':(is_object($x461)&&isset($x461->call)?\'function\':\'object\')))));$x460=(((gettype($x461)===gettype(\'function\')&&$x461===\'function\'))||(((is_float($x461)||is_int($x461))&&(is_float(\'function\')||is_int(\'function\')))&&$x461==\'function\'));if(JS::toBoolean($x460,$global)){if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x463=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),158,14,\'<image>/05_string.js\');$_TypeError=&$x463[0];list(,$WTypeError,$STypeError,$UTypeError)=$x463;$x464=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x465=$x464($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x465->class)&&$x465->class===\'Error\'&&!isset($x465->properties[\'file\'])&&!isset($x465->properties[\'line\'])&&!isset($x465->properties[\'column\'])){$x465->properties[\'file\']=\'<image>/05_string.js\';$x465->properties[\'line\']=158;$x465->properties[\'column\']=14;$x465->attributes[\'file\']=$x465->attributes[\'line\']=$x465->attributes[\'column\']=0;}throw new JSException($x465,158,14,\'<image>/05_string.js\');}$x462=JS::toObject($_match,$global);unset($x466,$W466,$S466,$U466);$x467=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x462,JS::toString(\'push\',$global),158,14,\'<image>/05_string.js\');$x466=&$x467[0];list(,$W466,$S466,$U466)=$x467;unset($x468,$W468,$S468,$U468);$x469=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),158,20,\'<image>/05_string.js\');$x468=&$x469[0];list(,$W468,$S468,$U468)=$x469;if(!(is_object($x466)&&isset($x466->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x472=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),158,14,\'<image>/05_string.js\');$_TypeError=&$x472[0];list(,$WTypeError,$STypeError,$UTypeError)=$x472;$x473=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x474=$x473($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x474->class)&&$x474->class===\'Error\'&&!isset($x474->properties[\'file\'])&&!isset($x474->properties[\'line\'])&&!isset($x474->properties[\'column\'])){$x474->properties[\'file\']=\'<image>/05_string.js\';$x474->properties[\'line\']=158;$x474->properties[\'column\']=14;$x474->attributes[\'file\']=$x474->attributes[\'line\']=$x474->attributes[\'column\']=0;}throw new JSException($x474,158,14,\'<image>/05_string.js\');}$x470=$x466->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x471=$x470($global,$x462,$x466,array($x468),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x476=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x476[0];list(,$WTypeError,$STypeError,$UTypeError)=$x476;$x477=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x478=$x477($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x478->class)&&$x478->class===\'Error\'&&!isset($x478->properties[\'file\'])&&!isset($x478->properties[\'line\'])&&!isset($x478->properties[\'column\'])){$x478->properties[\'file\']=\'<image>/05_string.js\';$x478->properties[\'line\']=159;$x478->properties[\'column\']=14;$x478->attributes[\'file\']=$x478->attributes[\'line\']=$x478->attributes[\'column\']=0;}throw new JSException($x478,159,14,\'<image>/05_string.js\');}$x475=JS::toObject($_match,$global);unset($x479,$W479,$S479,$U479);$x480=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x475,JS::toString(\'push\',$global),159,14,\'<image>/05_string.js\');$x479=&$x480[0];list(,$W479,$S479,$U479)=$x480;unset($x481,$W481,$S481,$U481);$x482=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'input\',$global),159,20,\'<image>/05_string.js\');$x481=&$x482[0];list(,$W481,$S481,$U481)=$x482;if(!(is_object($x479)&&isset($x479->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x485=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x485[0];list(,$WTypeError,$STypeError,$UTypeError)=$x485;$x486=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x487=$x486($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x487->class)&&$x487->class===\'Error\'&&!isset($x487->properties[\'file\'])&&!isset($x487->properties[\'line\'])&&!isset($x487->properties[\'column\'])){$x487->properties[\'file\']=\'<image>/05_string.js\';$x487->properties[\'line\']=159;$x487->properties[\'column\']=14;$x487->attributes[\'file\']=$x487->attributes[\'line\']=$x487->attributes[\'column\']=0;}throw new JSException($x487,159,14,\'<image>/05_string.js\');}$x483=$x479->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x484=$x483($global,$x475,$x479,array($x481),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!array_key_exists(\'index\',$_match->attributes)){unset($_match->properties[\'index\']);$x488=TRUE;}else if($_match->attributes[\'index\']&JS::CONFIGURABLE){unset($_match->properties[\'index\'],$_match->attributes[\'index\'],$_match->getters[\'index\'],$_match->setters[\'index\']);$x488=TRUE;}else{$x488=FALSE;}if(!array_key_exists(\'input\',$_match->attributes)){unset($_match->properties[\'input\']);$x489=TRUE;}else if($_match->attributes[\'input\']&JS::CONFIGURABLE){unset($_match->properties[\'input\'],$_match->attributes[\'input\'],$_match->getters[\'input\'],$_match->setters[\'input\']);$x489=TRUE;}else{$x489=FALSE;}unset($_String,$WString,$SString,$UString);$x490=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'String\',$global),163,21,\'<image>/05_string.js\');$_String=&$x490[0];list(,$WString,$SString,$UString)=$x490;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x491=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),163,21,\'<image>/05_string.js\');$_ReferenceError=&$x491[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x491;$x492=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,21);$x493=$x492($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x493->class)&&$x493->class===\'Error\'&&!isset($x493->properties[\'file\'])&&!isset($x493->properties[\'line\'])&&!isset($x493->properties[\'column\'])){$x493->properties[\'file\']=\'<image>/05_string.js\';$x493->properties[\'line\']=163;$x493->properties[\'column\']=21;$x493->attributes[\'file\']=$x493->attributes[\'line\']=$x493->attributes[\'column\']=0;}throw new JSException($x493,163,21,\'<image>/05_string.js\');}if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x495=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),163,41,\'<image>/05_string.js\');$_TypeError=&$x495[0];list(,$WTypeError,$STypeError,$UTypeError)=$x495;$x496=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x497=$x496($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x497->class)&&$x497->class===\'Error\'&&!isset($x497->properties[\'file\'])&&!isset($x497->properties[\'line\'])&&!isset($x497->properties[\'column\'])){$x497->properties[\'file\']=\'<image>/05_string.js\';$x497->properties[\'line\']=163;$x497->properties[\'column\']=41;$x497->attributes[\'file\']=$x497->attributes[\'line\']=$x497->attributes[\'column\']=0;}throw new JSException($x497,163,41,\'<image>/05_string.js\');}$x494=JS::toObject($_replace,$global);unset($x498,$W498,$S498,$U498);$x499=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x494,JS::toString(\'apply\',$global),163,41,\'<image>/05_string.js\');$x498=&$x499[0];list(,$W498,$S498,$U498)=$x499;if(!(is_object($x498)&&isset($x498->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x502=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),163,41,\'<image>/05_string.js\');$_TypeError=&$x502[0];list(,$WTypeError,$STypeError,$UTypeError)=$x502;$x503=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x504=$x503($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x504->class)&&$x504->class===\'Error\'&&!isset($x504->properties[\'file\'])&&!isset($x504->properties[\'line\'])&&!isset($x504->properties[\'column\'])){$x504->properties[\'file\']=\'<image>/05_string.js\';$x504->properties[\'line\']=163;$x504->properties[\'column\']=41;$x504->attributes[\'file\']=$x504->attributes[\'line\']=$x504->attributes[\'column\']=0;}throw new JSException($x504,163,41,\'<image>/05_string.js\');}$x500=$x498->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x501=$x500($global,$x494,$x498,array(JS::$undefined,$_match),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x507=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),163,27,\'<image>/05_string.js\');$_TypeError=&$x507[0];list(,$WTypeError,$STypeError,$UTypeError)=$x507;$x508=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x509=$x508($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x509->class)&&$x509->class===\'Error\'&&!isset($x509->properties[\'file\'])&&!isset($x509->properties[\'line\'])&&!isset($x509->properties[\'column\'])){$x509->properties[\'file\']=\'<image>/05_string.js\';$x509->properties[\'line\']=163;$x509->properties[\'column\']=27;$x509->attributes[\'file\']=$x509->attributes[\'line\']=$x509->attributes[\'column\']=0;}throw new JSException($x509,163,27,\'<image>/05_string.js\');}$x505=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x506=$x505($global,$global,$_String,array($x501),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x506;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x510=JS::toPrimitive($_newString,$global);$x511=JS::toPrimitive($_s,$global);$_newString=(is_string($x510)||is_string($x511)?JS::toString($x510,$global).JS::toString($x511,$global):JS::toNumber($x510,$global)+JS::toNumber($x511,$global));}else{if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x513=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,32,\'<image>/05_string.js\');$_TypeError=&$x513[0];list(,$WTypeError,$STypeError,$UTypeError)=$x513;$x514=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x515=$x514($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x515->class)&&$x515->class===\'Error\'&&!isset($x515->properties[\'file\'])&&!isset($x515->properties[\'line\'])&&!isset($x515->properties[\'column\'])){$x515->properties[\'file\']=\'<image>/05_string.js\';$x515->properties[\'line\']=166;$x515->properties[\'column\']=32;$x515->attributes[\'file\']=$x515->attributes[\'line\']=$x515->attributes[\'column\']=0;}throw new JSException($x515,166,32,\'<image>/05_string.js\');}$x512=JS::toObject($_replace,$global);unset($x516,$W516,$S516,$U516);$x517=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x512,JS::toString(\'replace\',$global),166,32,\'<image>/05_string.js\');$x516=&$x517[0];list(,$W516,$S516,$U516)=$x517;unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x520=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),166,33,\'<image>/05_string.js\');$_RegExp=&$x520[0];list(,$WRegExp,$SRegExp,$URegExp)=$x520;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x521=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),166,33,\'<image>/05_string.js\');$_ReferenceError=&$x521[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x521;$x522=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x523=$x522($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x523->class)&&$x523->class===\'Error\'&&!isset($x523->properties[\'file\'])&&!isset($x523->properties[\'line\'])&&!isset($x523->properties[\'column\'])){$x523->properties[\'file\']=\'<image>/05_string.js\';$x523->properties[\'line\']=166;$x523->properties[\'column\']=33;$x523->attributes[\'file\']=$x523->attributes[\'line\']=$x523->attributes[\'column\']=0;}throw new JSException($x523,166,33,\'<image>/05_string.js\');}$x518=clone JS::$objectTemplate;unset($x524,$W524,$S524,$U524);$x525=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),166,33,\'<image>/05_string.js\');$x524=&$x525[0];list(,$W524,$S524,$U524)=$x525;$x519=$x524;$x518->prototype=$x519;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x528=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,33,\'<image>/05_string.js\');$_TypeError=&$x528[0];list(,$WTypeError,$STypeError,$UTypeError)=$x528;$x529=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x530=$x529($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x530->class)&&$x530->class===\'Error\'&&!isset($x530->properties[\'file\'])&&!isset($x530->properties[\'line\'])&&!isset($x530->properties[\'column\'])){$x530->properties[\'file\']=\'<image>/05_string.js\';$x530->properties[\'line\']=166;$x530->properties[\'column\']=33;$x530->attributes[\'file\']=$x530->attributes[\'line\']=$x530->attributes[\'column\']=0;}throw new JSException($x530,166,33,\'<image>/05_string.js\');}$x526=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x527=$x526($global,$x518,$_RegExp,array(\'\\\\$([$&]|[0-9]|[0-9][0-9])\',\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x519=$x527;if(is_object($x519)&&$x519!==JS::$undefined){$x518=$x519;}$x556=clone JS::$functionTemplate;$x556->call=\'_465e5538fcb402e27559db40bec8addd_15\';$x556->parameters=array(0=>\'_\',1=>\'c\',);$x556->scope=$scope;$x556->properties[\'prototype\']=clone JS::$objectTemplate;$x556->attributes[\'prototype\']=JS::WRITABLE;$x556->properties[\'prototype\']->properties[\'constructor\']=$x556;$x556->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x556->properties[\'length\']=2;$x556->attributes[\'length\']=0;if(!(is_object($x516)&&isset($x516->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x559=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,32,\'<image>/05_string.js\');$_TypeError=&$x559[0];list(,$WTypeError,$STypeError,$UTypeError)=$x559;$x560=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x561=$x560($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x561->class)&&$x561->class===\'Error\'&&!isset($x561->properties[\'file\'])&&!isset($x561->properties[\'line\'])&&!isset($x561->properties[\'column\'])){$x561->properties[\'file\']=\'<image>/05_string.js\';$x561->properties[\'line\']=166;$x561->properties[\'column\']=32;$x561->attributes[\'file\']=$x561->attributes[\'line\']=$x561->attributes[\'column\']=0;}throw new JSException($x561,166,32,\'<image>/05_string.js\');}$x557=$x516->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x558=$x557($global,$x512,$x516,array($x518,$x556),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x562=JS::toPrimitive($_newString,$global);$x563=JS::toPrimitive($x558,$global);$_newString=(is_string($x562)||is_string($x563)?JS::toString($x562,$global).JS::toString($x563,$global):JS::toNumber($x562,$global)+JS::toNumber($x563,$global));}unset($x564,$W564,$S564,$U564);$x565=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,JS::toString(\'global\',$global),179,14,\'<image>/05_string.js\');$x564=&$x565[0];list(,$W564,$S564,$U564)=$x565;if(JS::toBoolean((!JS::toBoolean($x564,$global)),$global)){break;}}if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x567=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,35,\'<image>/05_string.js\');$_TypeError=&$x567[0];list(,$WTypeError,$STypeError,$UTypeError)=$x567;$x568=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x569=$x568($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x569->class)&&$x569->class===\'Error\'&&!isset($x569->properties[\'file\'])&&!isset($x569->properties[\'line\'])&&!isset($x569->properties[\'column\'])){$x569->properties[\'file\']=\'<image>/05_string.js\';$x569->properties[\'line\']=184;$x569->properties[\'column\']=35;$x569->attributes[\'file\']=$x569->attributes[\'line\']=$x569->attributes[\'column\']=0;}throw new JSException($x569,184,35,\'<image>/05_string.js\');}$x566=JS::toObject($_thisString,$global);unset($x570,$W570,$S570,$U570);$x571=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x566,JS::toString(\'substring\',$global),184,35,\'<image>/05_string.js\');$x570=&$x571[0];list(,$W570,$S570,$U570)=$x571;unset($x572,$W572,$S572,$U572);$x573=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_thisString,JS::toString(\'length\',$global),184,57,\'<image>/05_string.js\');$x572=&$x573[0];list(,$W572,$S572,$U572)=$x573;if(!(is_object($x570)&&isset($x570->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x576=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,35,\'<image>/05_string.js\');$_TypeError=&$x576[0];list(,$WTypeError,$STypeError,$UTypeError)=$x576;$x577=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x578=$x577($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x578->class)&&$x578->class===\'Error\'&&!isset($x578->properties[\'file\'])&&!isset($x578->properties[\'line\'])&&!isset($x578->properties[\'column\'])){$x578->properties[\'file\']=\'<image>/05_string.js\';$x578->properties[\'line\']=184;$x578->properties[\'column\']=35;$x578->attributes[\'file\']=$x578->attributes[\'line\']=$x578->attributes[\'column\']=0;}throw new JSException($x578,184,35,\'<image>/05_string.js\');}$x574=$x570->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x575=$x574($global,$x566,$x570,array($_lastIndex,$x572),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x579=JS::toPrimitive($_newString,$global);$x580=JS::toPrimitive($x575,$global);$_newString=(is_string($x579)||is_string($x580)?JS::toString($x579,$global).JS::toString($x580,$global):JS::toNumber($x579,$global)+JS::toNumber($x580,$global));return$_newString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x594 =& $scope->properties['arguments'];
$x594->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x594->properties[$i] = $args[$i];
$x594->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_search) && isset($_search->class) &&$_search->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x597 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 191, 16, '<image>/05_string.js');
$_RegExp =& $x597[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x597;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x598 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 191, 16, '<image>/05_string.js');
$_ReferenceError =& $x598[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x598;
$x599 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 16);
$x600 = $x599($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x600->class) && $x600->class === 'Error' && !isset($x600->properties['file']) && !isset($x600->properties['line']) && !isset($x600->properties['column'])) {$x600->properties['file'] = '<image>/05_string.js';$x600->properties['line'] = 191;$x600->properties['column'] = 16;$x600->attributes['file'] = $x600->attributes['line'] = $x600->attributes['column'] = 0; }
throw new JSException($x600, 191, 16, '<image>/05_string.js');
}
$x595 = clone JS::$objectTemplate;
unset($x601, $W601, $S601, $U601);
$x602 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 191, 12, '<image>/05_string.js');
$x601 =& $x602[0]; list(,$W601,$S601,$U601) = $x602;
$x596 = $x601;
$x595->prototype = $x596;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x605 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 191, 12, '<image>/05_string.js');
$_TypeError =& $x605[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x605;
$x606 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x607 = $x606($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x607->class) && $x607->class === 'Error' && !isset($x607->properties['file']) && !isset($x607->properties['line']) && !isset($x607->properties['column'])) {$x607->properties['file'] = '<image>/05_string.js';$x607->properties['line'] = 191;$x607->properties['column'] = 12;$x607->attributes['file'] = $x607->attributes['line'] = $x607->attributes['column'] = 0; }
throw new JSException($x607, 191, 12, '<image>/05_string.js');
}
$x603 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x604 = $x603($global, $x595, $_RegExp, array($_search), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x596 = $x604;
if (is_object($x596) && $x596 !== JS::$undefined) { $x595 = $x596; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x595;;
};
unset($x608, $W608, $S608, $U608);
$x609 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, JS::toString('lastIndex', $global), 194, 29, '<image>/05_string.js');
$x608 =& $x609[0]; list(,$W608,$S608,$U608) = $x609;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x608;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x611 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 195, 22, '<image>/05_string.js');
$_TypeError =& $x611[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x611;
$x612 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x613 = $x612($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x613->class) && $x613->class === 'Error' && !isset($x613->properties['file']) && !isset($x613->properties['line']) && !isset($x613->properties['column'])) {$x613->properties['file'] = '<image>/05_string.js';$x613->properties['line'] = 195;$x613->properties['column'] = 22;$x613->attributes['file'] = $x613->attributes['line'] = $x613->attributes['column'] = 0; }
throw new JSException($x613, 195, 22, '<image>/05_string.js');
}
$x610 = JS::toObject($_search, $global);
unset($x614, $W614, $S614, $U614);
$x615 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x610, JS::toString('exec', $global), 195, 22, '<image>/05_string.js');
$x614 =& $x615[0]; list(,$W614,$S614,$U614) = $x615;
if (!(is_object($x614) && isset($x614->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x618 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 195, 22, '<image>/05_string.js');
$_TypeError =& $x618[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x618;
$x619 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x620 = $x619($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x620->class) && $x620->class === 'Error' && !isset($x620->properties['file']) && !isset($x620->properties['line']) && !isset($x620->properties['column'])) {$x620->properties['file'] = '<image>/05_string.js';$x620->properties['line'] = 195;$x620->properties['column'] = 22;$x620->attributes['file'] = $x620->attributes['line'] = $x620->attributes['column'] = 0; }
throw new JSException($x620, 195, 22, '<image>/05_string.js');
}
$x616 = $x614->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x617 = $x616($global, $x610, $x614, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = $x617;
$x621 = JS::toString('lastIndexOf', $global);
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x622 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 197, 21, '<image>/05_string.js');
$_TypeError =& $x622[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x622;
$x623 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x624 = $x623($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x624->class) && $x624->class === 'Error' && !isset($x624->properties['file']) && !isset($x624->properties['line']) && !isset($x624->properties['column'])) {$x624->properties['file'] = '<image>/05_string.js';$x624->properties['line'] = 197;$x624->properties['column'] = 21;$x624->attributes['file'] = $x624->attributes['line'] = $x624->attributes['column'] = 0; }
throw new JSException($x624, 197, 21, '<image>/05_string.js');
}
$_search = JS::toObject($_search, $global);
unset($x625, $W625, $S625, $U625);
$x626 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_search, JS::toString($x621, $global), 197, 21, '<image>/05_string.js');
$x625 =& $x626[0]; list(,$W625,$S625,$U625) = $x626;
if ($U625 && (!isset($_search->extensible) || $_search->extensible)) {$_search->properties[$x621] = $x625; $x625 =& $_search->properties[$x621]; $_search->attributes[$x621] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U625 = FALSE; $W625 = TRUE; }
if (isset($S625)) {
$x628 = $S625->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x629 = $x628($global, $_search, $S625, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x627 = $x629;
} else {
if (!$U625) {$x627 = $_savedLastIndex;if ($W625) { $x625 = $_savedLastIndex; }  }
else { $x627 = JS::$undefined; }
}
if (isset($_search->class) && $_search->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $_search->properties['length']) { $_search->properties['length'] = 'lastIndexOf' + 1; };
if (JS::toBoolean($_match, $global)) {
unset($x630, $W630, $S630, $U630);
$x631 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 200, 15, '<image>/05_string.js');
$x630 =& $x631[0]; list(,$W630,$S630,$U630) = $x631;
return $x630;;
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x594=&$scope->properties[\'arguments\'];$x594->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x594->properties[$i]=$args[$i];$x594->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_search)&&isset($_search->class)&&$_search->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x597=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),191,16,\'<image>/05_string.js\');$_RegExp=&$x597[0];list(,$WRegExp,$SRegExp,$URegExp)=$x597;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x598=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),191,16,\'<image>/05_string.js\');$_ReferenceError=&$x598[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x598;$x599=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,16);$x600=$x599($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x600->class)&&$x600->class===\'Error\'&&!isset($x600->properties[\'file\'])&&!isset($x600->properties[\'line\'])&&!isset($x600->properties[\'column\'])){$x600->properties[\'file\']=\'<image>/05_string.js\';$x600->properties[\'line\']=191;$x600->properties[\'column\']=16;$x600->attributes[\'file\']=$x600->attributes[\'line\']=$x600->attributes[\'column\']=0;}throw new JSException($x600,191,16,\'<image>/05_string.js\');}$x595=clone JS::$objectTemplate;unset($x601,$W601,$S601,$U601);$x602=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),191,12,\'<image>/05_string.js\');$x601=&$x602[0];list(,$W601,$S601,$U601)=$x602;$x596=$x601;$x595->prototype=$x596;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x605=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),191,12,\'<image>/05_string.js\');$_TypeError=&$x605[0];list(,$WTypeError,$STypeError,$UTypeError)=$x605;$x606=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x607=$x606($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x607->class)&&$x607->class===\'Error\'&&!isset($x607->properties[\'file\'])&&!isset($x607->properties[\'line\'])&&!isset($x607->properties[\'column\'])){$x607->properties[\'file\']=\'<image>/05_string.js\';$x607->properties[\'line\']=191;$x607->properties[\'column\']=12;$x607->attributes[\'file\']=$x607->attributes[\'line\']=$x607->attributes[\'column\']=0;}throw new JSException($x607,191,12,\'<image>/05_string.js\');}$x603=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x604=$x603($global,$x595,$_RegExp,array($_search),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x596=$x604;if(is_object($x596)&&$x596!==JS::$undefined){$x595=$x596;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x595;}unset($x608,$W608,$S608,$U608);$x609=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,JS::toString(\'lastIndex\',$global),194,29,\'<image>/05_string.js\');$x608=&$x609[0];list(,$W608,$S608,$U608)=$x609;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x608;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x611=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),195,22,\'<image>/05_string.js\');$_TypeError=&$x611[0];list(,$WTypeError,$STypeError,$UTypeError)=$x611;$x612=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x613=$x612($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x613->class)&&$x613->class===\'Error\'&&!isset($x613->properties[\'file\'])&&!isset($x613->properties[\'line\'])&&!isset($x613->properties[\'column\'])){$x613->properties[\'file\']=\'<image>/05_string.js\';$x613->properties[\'line\']=195;$x613->properties[\'column\']=22;$x613->attributes[\'file\']=$x613->attributes[\'line\']=$x613->attributes[\'column\']=0;}throw new JSException($x613,195,22,\'<image>/05_string.js\');}$x610=JS::toObject($_search,$global);unset($x614,$W614,$S614,$U614);$x615=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x610,JS::toString(\'exec\',$global),195,22,\'<image>/05_string.js\');$x614=&$x615[0];list(,$W614,$S614,$U614)=$x615;if(!(is_object($x614)&&isset($x614->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x618=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),195,22,\'<image>/05_string.js\');$_TypeError=&$x618[0];list(,$WTypeError,$STypeError,$UTypeError)=$x618;$x619=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x620=$x619($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x620->class)&&$x620->class===\'Error\'&&!isset($x620->properties[\'file\'])&&!isset($x620->properties[\'line\'])&&!isset($x620->properties[\'column\'])){$x620->properties[\'file\']=\'<image>/05_string.js\';$x620->properties[\'line\']=195;$x620->properties[\'column\']=22;$x620->attributes[\'file\']=$x620->attributes[\'line\']=$x620->attributes[\'column\']=0;}throw new JSException($x620,195,22,\'<image>/05_string.js\');}$x616=$x614->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x617=$x616($global,$x610,$x614,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=$x617;$x621=JS::toString(\'lastIndexOf\',$global);if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x622=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),197,21,\'<image>/05_string.js\');$_TypeError=&$x622[0];list(,$WTypeError,$STypeError,$UTypeError)=$x622;$x623=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x624=$x623($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x624->class)&&$x624->class===\'Error\'&&!isset($x624->properties[\'file\'])&&!isset($x624->properties[\'line\'])&&!isset($x624->properties[\'column\'])){$x624->properties[\'file\']=\'<image>/05_string.js\';$x624->properties[\'line\']=197;$x624->properties[\'column\']=21;$x624->attributes[\'file\']=$x624->attributes[\'line\']=$x624->attributes[\'column\']=0;}throw new JSException($x624,197,21,\'<image>/05_string.js\');}$_search=JS::toObject($_search,$global);unset($x625,$W625,$S625,$U625);$x626=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_search,JS::toString($x621,$global),197,21,\'<image>/05_string.js\');$x625=&$x626[0];list(,$W625,$S625,$U625)=$x626;if($U625&&(!isset($_search->extensible)||$_search->extensible)){$_search->properties[$x621]=$x625;$x625=&$_search->properties[$x621];$_search->attributes[$x621]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U625=FALSE;$W625=TRUE;}if(isset($S625)){$x628=$S625->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x629=$x628($global,$_search,$S625,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x627=$x629;}else{if(!$U625){$x627=$_savedLastIndex;if($W625){$x625=$_savedLastIndex;}}else{$x627=JS::$undefined;}}if(isset($_search->class)&&$_search->class===\'Array\'&&is_int(\'lastIndexOf\')&&\'lastIndexOf\'>=$_search->properties[\'length\']){$_search->properties[\'length\']=\'lastIndexOf\'+1;}if(JS::toBoolean($_match,$global)){unset($x630,$W630,$S630,$U630);$x631=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),200,15,\'<image>/05_string.js\');$x630=&$x631[0];list(,$W630,$S630,$U630)=$x631;return$x630;}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x645 =& $scope->properties['arguments'];
$x645->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x645->properties[$i] = $args[$i];
$x645->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x646 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x646, $global)) {
$x647 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x647;;
};
$x648 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x648, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x649 = JS::toPrimitive($_start, $global);
$x650 = JS::toPrimitive(0, $global);
$x651 = (is_string($x649) && is_string($x650) ? strcmp($x649, $x650) < 0 : (!is_nan($x652 = JS::toNumber($x649, $global)) && !is_nan($x653 = JS::toNumber($x650, $global)) && $x652 < $x653));
if (JS::toBoolean($x651, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x654 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 218, 11, '<image>/05_string.js');
$_Math =& $x654[0]; list(,$WMath,$SMath,$UMath) = $x654;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x655 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 218, 11, '<image>/05_string.js');
$_ReferenceError =& $x655[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x655;
$x656 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 11);
$x657 = $x656($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x657->class) && $x657->class === 'Error' && !isset($x657->properties['file']) && !isset($x657->properties['line']) && !isset($x657->properties['column'])) {$x657->properties['file'] = '<image>/05_string.js';$x657->properties['line'] = 218;$x657->properties['column'] = 11;$x657->attributes['file'] = $x657->attributes['line'] = $x657->attributes['column'] = 0; }
throw new JSException($x657, 218, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x659 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 19, '<image>/05_string.js');
$_TypeError =& $x659[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x659;
$x660 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x661 = $x660($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x661->class) && $x661->class === 'Error' && !isset($x661->properties['file']) && !isset($x661->properties['line']) && !isset($x661->properties['column'])) {$x661->properties['file'] = '<image>/05_string.js';$x661->properties['line'] = 218;$x661->properties['column'] = 19;$x661->attributes['file'] = $x661->attributes['line'] = $x661->attributes['column'] = 0; }
throw new JSException($x661, 218, 19, '<image>/05_string.js');
}
$x658 = JS::toObject($_Math, $global);
unset($x662, $W662, $S662, $U662);
$x663 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x658, JS::toString('max', $global), 218, 19, '<image>/05_string.js');
$x662 =& $x663[0]; list(,$W662,$S662,$U662) = $x663;
$x664 = JS::toPrimitive($_start, $global);
$x665 = JS::toPrimitive($_length, $global);
if (!(is_object($x662) && isset($x662->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x668 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 19, '<image>/05_string.js');
$_TypeError =& $x668[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x668;
$x669 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x670 = $x669($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x670->class) && $x670->class === 'Error' && !isset($x670->properties['file']) && !isset($x670->properties['line']) && !isset($x670->properties['column'])) {$x670->properties['file'] = '<image>/05_string.js';$x670->properties['line'] = 218;$x670->properties['column'] = 19;$x670->attributes['file'] = $x670->attributes['line'] = $x670->attributes['column'] = 0; }
throw new JSException($x670, 218, 19, '<image>/05_string.js');
}
$x666 = $x662->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x667 = $x666($global, $x658, $x662, array((is_string($x664) || is_string($x665) ? JS::toString($x664, $global) . JS::toString($x665, $global) : JS::toNumber($x664, $global) + JS::toNumber($x665, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x667;;
};
$x671 = JS::toPrimitive($_end, $global);
$x672 = JS::toPrimitive(0, $global);
$x673 = (is_string($x671) && is_string($x672) ? strcmp($x671, $x672) < 0 : (!is_nan($x674 = JS::toNumber($x671, $global)) && !is_nan($x675 = JS::toNumber($x672, $global)) && $x674 < $x675));
if (JS::toBoolean($x673, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x676 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 222, 9, '<image>/05_string.js');
$_Math =& $x676[0]; list(,$WMath,$SMath,$UMath) = $x676;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x677 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 222, 9, '<image>/05_string.js');
$_ReferenceError =& $x677[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x677;
$x678 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 9);
$x679 = $x678($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x679->class) && $x679->class === 'Error' && !isset($x679->properties['file']) && !isset($x679->properties['line']) && !isset($x679->properties['column'])) {$x679->properties['file'] = '<image>/05_string.js';$x679->properties['line'] = 222;$x679->properties['column'] = 9;$x679->attributes['file'] = $x679->attributes['line'] = $x679->attributes['column'] = 0; }
throw new JSException($x679, 222, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x681 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 17, '<image>/05_string.js');
$_TypeError =& $x681[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x681;
$x682 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x683 = $x682($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x683->class) && $x683->class === 'Error' && !isset($x683->properties['file']) && !isset($x683->properties['line']) && !isset($x683->properties['column'])) {$x683->properties['file'] = '<image>/05_string.js';$x683->properties['line'] = 222;$x683->properties['column'] = 17;$x683->attributes['file'] = $x683->attributes['line'] = $x683->attributes['column'] = 0; }
throw new JSException($x683, 222, 17, '<image>/05_string.js');
}
$x680 = JS::toObject($_Math, $global);
unset($x684, $W684, $S684, $U684);
$x685 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x680, JS::toString('max', $global), 222, 17, '<image>/05_string.js');
$x684 =& $x685[0]; list(,$W684,$S684,$U684) = $x685;
$x686 = JS::toPrimitive($_end, $global);
$x687 = JS::toPrimitive($_length, $global);
if (!(is_object($x684) && isset($x684->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x690 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 17, '<image>/05_string.js');
$_TypeError =& $x690[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x690;
$x691 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x692 = $x691($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x692->class) && $x692->class === 'Error' && !isset($x692->properties['file']) && !isset($x692->properties['line']) && !isset($x692->properties['column'])) {$x692->properties['file'] = '<image>/05_string.js';$x692->properties['line'] = 222;$x692->properties['column'] = 17;$x692->attributes['file'] = $x692->attributes['line'] = $x692->attributes['column'] = 0; }
throw new JSException($x692, 222, 17, '<image>/05_string.js');
}
$x688 = $x684->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x689 = $x688($global, $x680, $x684, array((is_string($x686) || is_string($x687) ? JS::toString($x686, $global) . JS::toString($x687, $global) : JS::toNumber($x686, $global) + JS::toNumber($x687, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x689;;
};
return (string) substr($leThis->value,$_start, max($_end-$_start, 0));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x645=&$scope->properties[\'arguments\'];$x645->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x645->properties[$i]=$args[$i];$x645->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x646=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x646,$global)){$x647=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x647;}$x648=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x648,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x649=JS::toPrimitive($_start,$global);$x650=JS::toPrimitive(0,$global);$x651=(is_string($x649)&&is_string($x650)?strcmp($x649,$x650)<0:(!is_nan($x652=JS::toNumber($x649,$global))&&!is_nan($x653=JS::toNumber($x650,$global))&&$x652<$x653));if(JS::toBoolean($x651,$global)){unset($_Math,$WMath,$SMath,$UMath);$x654=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),218,11,\'<image>/05_string.js\');$_Math=&$x654[0];list(,$WMath,$SMath,$UMath)=$x654;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x655=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),218,11,\'<image>/05_string.js\');$_ReferenceError=&$x655[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x655;$x656=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,11);$x657=$x656($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x657->class)&&$x657->class===\'Error\'&&!isset($x657->properties[\'file\'])&&!isset($x657->properties[\'line\'])&&!isset($x657->properties[\'column\'])){$x657->properties[\'file\']=\'<image>/05_string.js\';$x657->properties[\'line\']=218;$x657->properties[\'column\']=11;$x657->attributes[\'file\']=$x657->attributes[\'line\']=$x657->attributes[\'column\']=0;}throw new JSException($x657,218,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x659=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,19,\'<image>/05_string.js\');$_TypeError=&$x659[0];list(,$WTypeError,$STypeError,$UTypeError)=$x659;$x660=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x661=$x660($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x661->class)&&$x661->class===\'Error\'&&!isset($x661->properties[\'file\'])&&!isset($x661->properties[\'line\'])&&!isset($x661->properties[\'column\'])){$x661->properties[\'file\']=\'<image>/05_string.js\';$x661->properties[\'line\']=218;$x661->properties[\'column\']=19;$x661->attributes[\'file\']=$x661->attributes[\'line\']=$x661->attributes[\'column\']=0;}throw new JSException($x661,218,19,\'<image>/05_string.js\');}$x658=JS::toObject($_Math,$global);unset($x662,$W662,$S662,$U662);$x663=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x658,JS::toString(\'max\',$global),218,19,\'<image>/05_string.js\');$x662=&$x663[0];list(,$W662,$S662,$U662)=$x663;$x664=JS::toPrimitive($_start,$global);$x665=JS::toPrimitive($_length,$global);if(!(is_object($x662)&&isset($x662->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x668=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,19,\'<image>/05_string.js\');$_TypeError=&$x668[0];list(,$WTypeError,$STypeError,$UTypeError)=$x668;$x669=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x670=$x669($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x670->class)&&$x670->class===\'Error\'&&!isset($x670->properties[\'file\'])&&!isset($x670->properties[\'line\'])&&!isset($x670->properties[\'column\'])){$x670->properties[\'file\']=\'<image>/05_string.js\';$x670->properties[\'line\']=218;$x670->properties[\'column\']=19;$x670->attributes[\'file\']=$x670->attributes[\'line\']=$x670->attributes[\'column\']=0;}throw new JSException($x670,218,19,\'<image>/05_string.js\');}$x666=$x662->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x667=$x666($global,$x658,$x662,array((is_string($x664)||is_string($x665)?JS::toString($x664,$global).JS::toString($x665,$global):JS::toNumber($x664,$global)+JS::toNumber($x665,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x667;}$x671=JS::toPrimitive($_end,$global);$x672=JS::toPrimitive(0,$global);$x673=(is_string($x671)&&is_string($x672)?strcmp($x671,$x672)<0:(!is_nan($x674=JS::toNumber($x671,$global))&&!is_nan($x675=JS::toNumber($x672,$global))&&$x674<$x675));if(JS::toBoolean($x673,$global)){unset($_Math,$WMath,$SMath,$UMath);$x676=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),222,9,\'<image>/05_string.js\');$_Math=&$x676[0];list(,$WMath,$SMath,$UMath)=$x676;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x677=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),222,9,\'<image>/05_string.js\');$_ReferenceError=&$x677[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x677;$x678=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,9);$x679=$x678($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x679->class)&&$x679->class===\'Error\'&&!isset($x679->properties[\'file\'])&&!isset($x679->properties[\'line\'])&&!isset($x679->properties[\'column\'])){$x679->properties[\'file\']=\'<image>/05_string.js\';$x679->properties[\'line\']=222;$x679->properties[\'column\']=9;$x679->attributes[\'file\']=$x679->attributes[\'line\']=$x679->attributes[\'column\']=0;}throw new JSException($x679,222,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x681=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,17,\'<image>/05_string.js\');$_TypeError=&$x681[0];list(,$WTypeError,$STypeError,$UTypeError)=$x681;$x682=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x683=$x682($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x683->class)&&$x683->class===\'Error\'&&!isset($x683->properties[\'file\'])&&!isset($x683->properties[\'line\'])&&!isset($x683->properties[\'column\'])){$x683->properties[\'file\']=\'<image>/05_string.js\';$x683->properties[\'line\']=222;$x683->properties[\'column\']=17;$x683->attributes[\'file\']=$x683->attributes[\'line\']=$x683->attributes[\'column\']=0;}throw new JSException($x683,222,17,\'<image>/05_string.js\');}$x680=JS::toObject($_Math,$global);unset($x684,$W684,$S684,$U684);$x685=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x680,JS::toString(\'max\',$global),222,17,\'<image>/05_string.js\');$x684=&$x685[0];list(,$W684,$S684,$U684)=$x685;$x686=JS::toPrimitive($_end,$global);$x687=JS::toPrimitive($_length,$global);if(!(is_object($x684)&&isset($x684->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x690=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,17,\'<image>/05_string.js\');$_TypeError=&$x690[0];list(,$WTypeError,$STypeError,$UTypeError)=$x690;$x691=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x692=$x691($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x692->class)&&$x692->class===\'Error\'&&!isset($x692->properties[\'file\'])&&!isset($x692->properties[\'line\'])&&!isset($x692->properties[\'column\'])){$x692->properties[\'file\']=\'<image>/05_string.js\';$x692->properties[\'line\']=222;$x692->properties[\'column\']=17;$x692->attributes[\'file\']=$x692->attributes[\'line\']=$x692->attributes[\'column\']=0;}throw new JSException($x692,222,17,\'<image>/05_string.js\');}$x688=$x684->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x689=$x688($global,$x680,$x684,array((is_string($x686)||is_string($x687)?JS::toString($x686,$global).JS::toString($x687,$global):JS::toNumber($x686,$global)+JS::toNumber($x687,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x689;}return(string)substr($leThis->value,$_start,max($_end-$_start,0));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x706 =& $scope->properties['arguments'];
$x706->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x706->properties[$i] = $args[$i];
$x706->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$scope->properties['limit'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_limit =& $scope->properties['limit'];
$Ulimit = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x707 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x707, $global)) {
$x708 = clone JS::$arrayTemplate;
$x708->properties['length'] = 1;
$x708->attributes['length'] = JS::WRITABLE;
$x708->properties[0] = $leThis->value;
$x708->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x708;;
};
$x709 = (((gettype($_separator) === gettype('') && $_separator === ''))|| (((is_float($_separator) || is_int($_separator)) && (is_float('') || is_int(''))) && $_separator == ''));
if (JS::toBoolean($x709, $global)) {
$x710 = clone JS::$arrayTemplate;
$x710->properties['length'] = 0;
$x710->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x710;
for ($x711 = 0;; ++$x711) {
if ($x711 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x712, $W712, $S712, $U712);
$x713 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 236, 27, '<image>/05_string.js');
$x712 =& $x713[0]; list(,$W712,$S712,$U712) = $x713;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x712;
}
if ($x711 !== 0) {
$x714 = ++$_i;
}
$x715 = JS::toPrimitive($_i, $global);
$x716 = JS::toPrimitive($_l, $global);
$x717 = (is_string($x715) && is_string($x716) ? strcmp($x715, $x716) < 0 : (!is_nan($x718 = JS::toNumber($x715, $global)) && !is_nan($x719 = JS::toNumber($x716, $global)) && $x718 < $x719));
if (!JS::toBoolean($x717, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x721 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 20, '<image>/05_string.js');
$_TypeError =& $x721[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x721;
$x722 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x723 = $x722($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x723->class) && $x723->class === 'Error' && !isset($x723->properties['file']) && !isset($x723->properties['line']) && !isset($x723->properties['column'])) {$x723->properties['file'] = '<image>/05_string.js';$x723->properties['line'] = 237;$x723->properties['column'] = 20;$x723->attributes['file'] = $x723->attributes['line'] = $x723->attributes['column'] = 0; }
throw new JSException($x723, 237, 20, '<image>/05_string.js');
}
$x720 = JS::toObject($_returnArray, $global);
unset($x724, $W724, $S724, $U724);
$x725 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x720, JS::toString('push', $global), 237, 20, '<image>/05_string.js');
$x724 =& $x725[0]; list(,$W724,$S724,$U724) = $x725;
if (!(is_object($x724) && isset($x724->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x728 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 20, '<image>/05_string.js');
$_TypeError =& $x728[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x728;
$x729 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x730 = $x729($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x730->class) && $x730->class === 'Error' && !isset($x730->properties['file']) && !isset($x730->properties['line']) && !isset($x730->properties['column'])) {$x730->properties['file'] = '<image>/05_string.js';$x730->properties['line'] = 237;$x730->properties['column'] = 20;$x730->attributes['file'] = $x730->attributes['line'] = $x730->attributes['column'] = 0; }
throw new JSException($x730, 237, 20, '<image>/05_string.js');
}
$x726 = $x724->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x727 = $x726($global, $x720, $x724, array((string) substr($leThis->value,$_i, 1)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;;
};
$x732 = $_separator;
$x732 = ($x732 === JS::$undefined ? 'undefined' : (is_int($x732) || is_float($x732) ? 'number' : (is_bool($x732) ? 'boolean' : (is_string($x732) ? 'string' : (is_object($x732) && isset($x732->call) ? 'function' : 'object')))));
$x731 = (((gettype($x732) === gettype('string') && $x732 === 'string'))|| (((is_float($x732) || is_int($x732)) && (is_float('string') || is_int('string'))) && $x732 == 'string'));
if (JS::toBoolean($x731, $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x735 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 244, 19, '<image>/05_string.js');
$_RegExp =& $x735[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x735;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x736 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 244, 19, '<image>/05_string.js');
$_ReferenceError =& $x736[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x736;
$x737 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 19);
$x738 = $x737($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x738->class) && $x738->class === 'Error' && !isset($x738->properties['file']) && !isset($x738->properties['line']) && !isset($x738->properties['column'])) {$x738->properties['file'] = '<image>/05_string.js';$x738->properties['line'] = 244;$x738->properties['column'] = 19;$x738->attributes['file'] = $x738->attributes['line'] = $x738->attributes['column'] = 0; }
throw new JSException($x738, 244, 19, '<image>/05_string.js');
}
$x733 = clone JS::$objectTemplate;
unset($x739, $W739, $S739, $U739);
$x740 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 244, 15, '<image>/05_string.js');
$x739 =& $x740[0]; list(,$W739,$S739,$U739) = $x740;
$x734 = $x739;
$x733->prototype = $x734;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x743 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 15, '<image>/05_string.js');
$_TypeError =& $x743[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x743;
$x744 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x745 = $x744($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x745->class) && $x745->class === 'Error' && !isset($x745->properties['file']) && !isset($x745->properties['line']) && !isset($x745->properties['column'])) {$x745->properties['file'] = '<image>/05_string.js';$x745->properties['line'] = 244;$x745->properties['column'] = 15;$x745->attributes['file'] = $x745->attributes['line'] = $x745->attributes['column'] = 0; }
throw new JSException($x745, 244, 15, '<image>/05_string.js');
}
$x741 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x742 = $x741($global, $x733, $_RegExp, array(preg_quote(JS::toString($_separator, $global), '/'), 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x734 = $x742;
if (is_object($x734) && $x734 !== JS::$undefined) { $x733 = $x734; }
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x733;;
};
$x746 = clone JS::$arrayTemplate;
$x746->properties['length'] = 0;
$x746->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x746;
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
unset($x747, $W747, $S747, $U747);
$x748 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, JS::toString('lastIndex', $global), 248, 29, '<image>/05_string.js');
$x747 =& $x748[0]; list(,$W747,$S747,$U747) = $x748;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x747;
unset($x749, $W749, $S749, $U749);
$x750 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, JS::toString('global', $global), 248, 64, '<image>/05_string.js');
$x749 =& $x750[0]; list(,$W749,$S749,$U749) = $x750;
$scope->properties['savedGlobal'] = JS::$undefined; $_savedGlobal =& $scope->properties['savedGlobal'];
$UsavedGlobal = FALSE;
$_savedGlobal = $x749;
$_separator->properties['global'] = TRUE;
$x751 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x751, $global)) {
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x752 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Infinity', $global), 253, 11, '<image>/05_string.js');
$_Infinity =& $x752[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x752;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x753 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 253, 11, '<image>/05_string.js');
$_ReferenceError =& $x753[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x753;
$x754 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 253, 11);
$x755 = $x754($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x755->class) && $x755->class === 'Error' && !isset($x755->properties['file']) && !isset($x755->properties['line']) && !isset($x755->properties['column'])) {$x755->properties['file'] = '<image>/05_string.js';$x755->properties['line'] = 253;$x755->properties['column'] = 11;$x755->attributes['file'] = $x755->attributes['line'] = $x755->attributes['column'] = 0; }
throw new JSException($x755, 253, 11, '<image>/05_string.js');
}
if ($Ulimit) {$global->properties['limit'] = $_limit; $_limit =& $global->properties['limit']; }
$_limit = $_Infinity;;
};
for (;;) {
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x759 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 32, '<image>/05_string.js');
$_TypeError =& $x759[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x759;
$x760 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x761 = $x760($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x761->class) && $x761->class === 'Error' && !isset($x761->properties['file']) && !isset($x761->properties['line']) && !isset($x761->properties['column'])) {$x761->properties['file'] = '<image>/05_string.js';$x761->properties['line'] = 256;$x761->properties['column'] = 32;$x761->attributes['file'] = $x761->attributes['line'] = $x761->attributes['column'] = 0; }
throw new JSException($x761, 256, 32, '<image>/05_string.js');
}
$x758 = JS::toObject($_separator, $global);
unset($x762, $W762, $S762, $U762);
$x763 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x758, JS::toString('exec', $global), 256, 32, '<image>/05_string.js');
$x762 =& $x763[0]; list(,$W762,$S762,$U762) = $x763;
if (!(is_object($x762) && isset($x762->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x766 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 32, '<image>/05_string.js');
$_TypeError =& $x766[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x766;
$x767 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x768 = $x767($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x768->class) && $x768->class === 'Error' && !isset($x768->properties['file']) && !isset($x768->properties['line']) && !isset($x768->properties['column'])) {$x768->properties['file'] = '<image>/05_string.js';$x768->properties['line'] = 256;$x768->properties['column'] = 32;$x768->attributes['file'] = $x768->attributes['line'] = $x768->attributes['column'] = 0; }
throw new JSException($x768, 256, 32, '<image>/05_string.js');
}
$x764 = $x762->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x765 = $x764($global, $x758, $x762, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x765;
$x757 = $_match;
if (JS::toBoolean($x757, $global)) {
$x772 = --$_limit;
$x769 = JS::toPrimitive($x772, $global);
$x770 = JS::toPrimitive(0, $global);
$x771 = (is_string($x770) && is_string($x769) ? strcmp($x770, $x769) < 0 : (!is_nan($x773 = JS::toNumber($x770, $global)) && !is_nan($x774 = JS::toNumber($x769, $global)) && $x773 < $x774));
$x757 = $x771; }
$x756 = $x757;
if (JS::toBoolean($x756, $global)) {
unset($x778, $W778, $S778, $U778);
$x779 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 256, 80, '<image>/05_string.js');
$x778 =& $x779[0]; list(,$W778,$S778,$U778) = $x779;
$x775 = JS::toPrimitive($_lastIndex, $global);
$x776 = JS::toPrimitive($x778, $global);
$x777 = (is_string($x775) && is_string($x776) ? strcmp($x775, $x776) < 0 : (!is_nan($x780 = JS::toNumber($x775, $global)) && !is_nan($x781 = JS::toNumber($x776, $global)) && $x780 < $x781));
$x756 = $x777; }
if (!JS::toBoolean($x756, $global)) { break; }

unset($x784, $W784, $S784, $U784);
$x785 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 257, 12, '<image>/05_string.js');
$x784 =& $x785[0]; list(,$W784,$S784,$U784) = $x785;
$x783 = (((gettype($x784) === gettype('') && $x784 === ''))|| (((is_float($x784) || is_int($x784)) && (is_float('') || is_int(''))) && $x784 == ''));
$x782 = $x783;
if (JS::toBoolean($x782, $global)) {
unset($x787, $W787, $S787, $U787);
$x788 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 257, 31, '<image>/05_string.js');
$x787 =& $x788[0]; list(,$W787,$S787,$U787) = $x788;
$x786 = (((gettype($x787) === gettype($_lastIndex) && $x787 === $_lastIndex))|| (((is_float($x787) || is_int($x787)) && (is_float($_lastIndex) || is_int($_lastIndex))) && $x787 == $_lastIndex));
$x782 = $x786; }
if (JS::toBoolean($x782, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x790 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 20, '<image>/05_string.js');
$_TypeError =& $x790[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x790;
$x791 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x792 = $x791($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x792->class) && $x792->class === 'Error' && !isset($x792->properties['file']) && !isset($x792->properties['line']) && !isset($x792->properties['column'])) {$x792->properties['file'] = '<image>/05_string.js';$x792->properties['line'] = 258;$x792->properties['column'] = 20;$x792->attributes['file'] = $x792->attributes['line'] = $x792->attributes['column'] = 0; }
throw new JSException($x792, 258, 20, '<image>/05_string.js');
}
$x789 = JS::toObject($_returnArray, $global);
unset($x793, $W793, $S793, $U793);
$x794 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x789, JS::toString('push', $global), 258, 20, '<image>/05_string.js');
$x793 =& $x794[0]; list(,$W793,$S793,$U793) = $x794;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x796 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 35, '<image>/05_string.js');
$_TypeError =& $x796[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x796;
$x797 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x798 = $x797($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x798->class) && $x798->class === 'Error' && !isset($x798->properties['file']) && !isset($x798->properties['line']) && !isset($x798->properties['column'])) {$x798->properties['file'] = '<image>/05_string.js';$x798->properties['line'] = 258;$x798->properties['column'] = 35;$x798->attributes['file'] = $x798->attributes['line'] = $x798->attributes['column'] = 0; }
throw new JSException($x798, 258, 35, '<image>/05_string.js');
}
$x795 = JS::toObject($leThis, $global);
unset($x799, $W799, $S799, $U799);
$x800 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x795, JS::toString('substring', $global), 258, 35, '<image>/05_string.js');
$x799 =& $x800[0]; list(,$W799,$S799,$U799) = $x800;
$x801 = JS::toPrimitive($_lastIndex, $global);
$x802 = JS::toPrimitive(1, $global);
if (!(is_object($x799) && isset($x799->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x805 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 35, '<image>/05_string.js');
$_TypeError =& $x805[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x805;
$x806 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x807 = $x806($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x807->class) && $x807->class === 'Error' && !isset($x807->properties['file']) && !isset($x807->properties['line']) && !isset($x807->properties['column'])) {$x807->properties['file'] = '<image>/05_string.js';$x807->properties['line'] = 258;$x807->properties['column'] = 35;$x807->attributes['file'] = $x807->attributes['line'] = $x807->attributes['column'] = 0; }
throw new JSException($x807, 258, 35, '<image>/05_string.js');
}
$x803 = $x799->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x804 = $x803($global, $x795, $x799, array($_lastIndex, (is_string($x801) || is_string($x802) ? JS::toString($x801, $global) . JS::toString($x802, $global) : JS::toNumber($x801, $global) + JS::toNumber($x802, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x793) && isset($x793->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x810 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 20, '<image>/05_string.js');
$_TypeError =& $x810[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x810;
$x811 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x812 = $x811($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x812->class) && $x812->class === 'Error' && !isset($x812->properties['file']) && !isset($x812->properties['line']) && !isset($x812->properties['column'])) {$x812->properties['file'] = '<image>/05_string.js';$x812->properties['line'] = 258;$x812->properties['column'] = 20;$x812->attributes['file'] = $x812->attributes['line'] = $x812->attributes['column'] = 0; }
throw new JSException($x812, 258, 20, '<image>/05_string.js');
}
$x808 = $x793->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x809 = $x808($global, $x789, $x793, array($x804), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x813 = ++$_lastIndex;
unset($x814, $W814, $S814, $U814);
$x815 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, JS::toString('lastIndex', $global), 260, 15, '<image>/05_string.js');
$x814 =& $x815[0]; list(,$W814,$S814,$U814) = $x815;
$x816 = ++$x814;;
}
else {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x818 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 20, '<image>/05_string.js');
$_TypeError =& $x818[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x818;
$x819 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x820 = $x819($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x820->class) && $x820->class === 'Error' && !isset($x820->properties['file']) && !isset($x820->properties['line']) && !isset($x820->properties['column'])) {$x820->properties['file'] = '<image>/05_string.js';$x820->properties['line'] = 263;$x820->properties['column'] = 20;$x820->attributes['file'] = $x820->attributes['line'] = $x820->attributes['column'] = 0; }
throw new JSException($x820, 263, 20, '<image>/05_string.js');
}
$x817 = JS::toObject($_returnArray, $global);
unset($x821, $W821, $S821, $U821);
$x822 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x817, JS::toString('push', $global), 263, 20, '<image>/05_string.js');
$x821 =& $x822[0]; list(,$W821,$S821,$U821) = $x822;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x824 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 35, '<image>/05_string.js');
$_TypeError =& $x824[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x824;
$x825 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x826 = $x825($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x826->class) && $x826->class === 'Error' && !isset($x826->properties['file']) && !isset($x826->properties['line']) && !isset($x826->properties['column'])) {$x826->properties['file'] = '<image>/05_string.js';$x826->properties['line'] = 263;$x826->properties['column'] = 35;$x826->attributes['file'] = $x826->attributes['line'] = $x826->attributes['column'] = 0; }
throw new JSException($x826, 263, 35, '<image>/05_string.js');
}
$x823 = JS::toObject($leThis, $global);
unset($x827, $W827, $S827, $U827);
$x828 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x823, JS::toString('substring', $global), 263, 35, '<image>/05_string.js');
$x827 =& $x828[0]; list(,$W827,$S827,$U827) = $x828;
unset($x829, $W829, $S829, $U829);
$x830 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 263, 52, '<image>/05_string.js');
$x829 =& $x830[0]; list(,$W829,$S829,$U829) = $x830;
if (!(is_object($x827) && isset($x827->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x833 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 35, '<image>/05_string.js');
$_TypeError =& $x833[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x833;
$x834 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x835 = $x834($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x835->class) && $x835->class === 'Error' && !isset($x835->properties['file']) && !isset($x835->properties['line']) && !isset($x835->properties['column'])) {$x835->properties['file'] = '<image>/05_string.js';$x835->properties['line'] = 263;$x835->properties['column'] = 35;$x835->attributes['file'] = $x835->attributes['line'] = $x835->attributes['column'] = 0; }
throw new JSException($x835, 263, 35, '<image>/05_string.js');
}
$x831 = $x827->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x832 = $x831($global, $x823, $x827, array($_lastIndex, $x829), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x821) && isset($x821->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x838 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 20, '<image>/05_string.js');
$_TypeError =& $x838[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x838;
$x839 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x840 = $x839($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x840->class) && $x840->class === 'Error' && !isset($x840->properties['file']) && !isset($x840->properties['line']) && !isset($x840->properties['column'])) {$x840->properties['file'] = '<image>/05_string.js';$x840->properties['line'] = 263;$x840->properties['column'] = 20;$x840->attributes['file'] = $x840->attributes['line'] = $x840->attributes['column'] = 0; }
throw new JSException($x840, 263, 20, '<image>/05_string.js');
}
$x836 = $x821->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x837 = $x836($global, $x817, $x821, array($x832), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
for ($x841 = 0;; ++$x841) {
if ($x841 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x842, $W842, $S842, $U842);
$x843 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('length', $global), 265, 29, '<image>/05_string.js');
$x842 =& $x843[0]; list(,$W842,$S842,$U842) = $x843;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x842;
}
if ($x841 !== 0) {
$x844 = ++$_i;
}
$x845 = JS::toPrimitive($_i, $global);
$x846 = JS::toPrimitive($_l, $global);
$x847 = (is_string($x845) && is_string($x846) ? strcmp($x845, $x846) < 0 : (!is_nan($x848 = JS::toNumber($x845, $global)) && !is_nan($x849 = JS::toNumber($x846, $global)) && $x848 < $x849));
if (!JS::toBoolean($x847, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x851 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 266, 21, '<image>/05_string.js');
$_TypeError =& $x851[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x851;
$x852 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x853 = $x852($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x853->class) && $x853->class === 'Error' && !isset($x853->properties['file']) && !isset($x853->properties['line']) && !isset($x853->properties['column'])) {$x853->properties['file'] = '<image>/05_string.js';$x853->properties['line'] = 266;$x853->properties['column'] = 21;$x853->attributes['file'] = $x853->attributes['line'] = $x853->attributes['column'] = 0; }
throw new JSException($x853, 266, 21, '<image>/05_string.js');
}
$x850 = JS::toObject($_returnArray, $global);
unset($x854, $W854, $S854, $U854);
$x855 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x850, JS::toString('push', $global), 266, 21, '<image>/05_string.js');
$x854 =& $x855[0]; list(,$W854,$S854,$U854) = $x855;
unset($x856, $W856, $S856, $U856);
$x857 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString($_i, $global), 266, 27, '<image>/05_string.js');
$x856 =& $x857[0]; list(,$W856,$S856,$U856) = $x857;
if (!(is_object($x854) && isset($x854->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x860 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 266, 21, '<image>/05_string.js');
$_TypeError =& $x860[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x860;
$x861 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x862 = $x861($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x862->class) && $x862->class === 'Error' && !isset($x862->properties['file']) && !isset($x862->properties['line']) && !isset($x862->properties['column'])) {$x862->properties['file'] = '<image>/05_string.js';$x862->properties['line'] = 266;$x862->properties['column'] = 21;$x862->attributes['file'] = $x862->attributes['line'] = $x862->attributes['column'] = 0; }
throw new JSException($x862, 266, 21, '<image>/05_string.js');
}
$x858 = $x854->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x859 = $x858($global, $x850, $x854, array($x856), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x865, $W865, $S865, $U865);
$x866 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 269, 21, '<image>/05_string.js');
$x865 =& $x866[0]; list(,$W865,$S865,$U865) = $x866;
unset($x867, $W867, $S867, $U867);
$x868 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 269, 35, '<image>/05_string.js');
$x867 =& $x868[0]; list(,$W867,$S867,$U867) = $x868;
unset($x869, $W869, $S869, $U869);
$x870 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x867, JS::toString('length', $global), 269, 38, '<image>/05_string.js');
$x869 =& $x870[0]; list(,$W869,$S869,$U869) = $x870;
$x863 = JS::toPrimitive($x865, $global);
$x864 = JS::toPrimitive($x869, $global);
$x871 = (is_string($x863) || is_string($x864) ? JS::toString($x863, $global) . JS::toString($x864, $global) : JS::toNumber($x863, $global) + JS::toNumber($x864, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x871;;
};
};
unset($x875, $W875, $S875, $U875);
$x876 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 273, 22, '<image>/05_string.js');
$x875 =& $x876[0]; list(,$W875,$S875,$U875) = $x876;
$x872 = JS::toPrimitive($_lastIndex, $global);
$x873 = JS::toPrimitive($x875, $global);
$x874 = (is_string($x872) && is_string($x873) ? strcmp($x872, $x873) < 0 : (!is_nan($x877 = JS::toNumber($x872, $global)) && !is_nan($x878 = JS::toNumber($x873, $global)) && $x877 < $x878));
if (JS::toBoolean($x874, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x880 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 19, '<image>/05_string.js');
$_TypeError =& $x880[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x880;
$x881 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x882 = $x881($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x882->class) && $x882->class === 'Error' && !isset($x882->properties['file']) && !isset($x882->properties['line']) && !isset($x882->properties['column'])) {$x882->properties['file'] = '<image>/05_string.js';$x882->properties['line'] = 274;$x882->properties['column'] = 19;$x882->attributes['file'] = $x882->attributes['line'] = $x882->attributes['column'] = 0; }
throw new JSException($x882, 274, 19, '<image>/05_string.js');
}
$x879 = JS::toObject($_returnArray, $global);
unset($x883, $W883, $S883, $U883);
$x884 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x879, JS::toString('push', $global), 274, 19, '<image>/05_string.js');
$x883 =& $x884[0]; list(,$W883,$S883,$U883) = $x884;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x886 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 34, '<image>/05_string.js');
$_TypeError =& $x886[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x886;
$x887 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x888 = $x887($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x888->class) && $x888->class === 'Error' && !isset($x888->properties['file']) && !isset($x888->properties['line']) && !isset($x888->properties['column'])) {$x888->properties['file'] = '<image>/05_string.js';$x888->properties['line'] = 274;$x888->properties['column'] = 34;$x888->attributes['file'] = $x888->attributes['line'] = $x888->attributes['column'] = 0; }
throw new JSException($x888, 274, 34, '<image>/05_string.js');
}
$x885 = JS::toObject($leThis, $global);
unset($x889, $W889, $S889, $U889);
$x890 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x885, JS::toString('substring', $global), 274, 34, '<image>/05_string.js');
$x889 =& $x890[0]; list(,$W889,$S889,$U889) = $x890;
unset($x891, $W891, $S891, $U891);
$x892 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 274, 50, '<image>/05_string.js');
$x891 =& $x892[0]; list(,$W891,$S891,$U891) = $x892;
if (!(is_object($x889) && isset($x889->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x895 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 34, '<image>/05_string.js');
$_TypeError =& $x895[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x895;
$x896 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x897 = $x896($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x897->class) && $x897->class === 'Error' && !isset($x897->properties['file']) && !isset($x897->properties['line']) && !isset($x897->properties['column'])) {$x897->properties['file'] = '<image>/05_string.js';$x897->properties['line'] = 274;$x897->properties['column'] = 34;$x897->attributes['file'] = $x897->attributes['line'] = $x897->attributes['column'] = 0; }
throw new JSException($x897, 274, 34, '<image>/05_string.js');
}
$x893 = $x889->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x894 = $x893($global, $x885, $x889, array($_lastIndex, $x891), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x883) && isset($x883->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x900 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 19, '<image>/05_string.js');
$_TypeError =& $x900[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x900;
$x901 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x902 = $x901($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x902->class) && $x902->class === 'Error' && !isset($x902->properties['file']) && !isset($x902->properties['line']) && !isset($x902->properties['column'])) {$x902->properties['file'] = '<image>/05_string.js';$x902->properties['line'] = 274;$x902->properties['column'] = 19;$x902->attributes['file'] = $x902->attributes['line'] = $x902->attributes['column'] = 0; }
throw new JSException($x902, 274, 19, '<image>/05_string.js');
}
$x898 = $x883->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x899 = $x898($global, $x879, $x883, array($x894), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
$_separator->properties['global'] =$_savedGlobal;
$x903 = JS::toString('lastIndex', $global);
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x904 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 278, 22, '<image>/05_string.js');
$_TypeError =& $x904[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x904;
$x905 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x906 = $x905($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x906->class) && $x906->class === 'Error' && !isset($x906->properties['file']) && !isset($x906->properties['line']) && !isset($x906->properties['column'])) {$x906->properties['file'] = '<image>/05_string.js';$x906->properties['line'] = 278;$x906->properties['column'] = 22;$x906->attributes['file'] = $x906->attributes['line'] = $x906->attributes['column'] = 0; }
throw new JSException($x906, 278, 22, '<image>/05_string.js');
}
$_separator = JS::toObject($_separator, $global);
unset($x907, $W907, $S907, $U907);
$x908 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_separator, JS::toString($x903, $global), 278, 22, '<image>/05_string.js');
$x907 =& $x908[0]; list(,$W907,$S907,$U907) = $x908;
if ($U907 && (!isset($_separator->extensible) || $_separator->extensible)) {$_separator->properties[$x903] = $x907; $x907 =& $_separator->properties[$x903]; $_separator->attributes[$x903] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U907 = FALSE; $W907 = TRUE; }
if (isset($S907)) {
$x910 = $S907->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x911 = $x910($global, $_separator, $S907, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x909 = $x911;
} else {
if (!$U907) {$x909 = $_savedLastIndex;if ($W907) { $x907 = $_savedLastIndex; }  }
else { $x909 = JS::$undefined; }
}
if (isset($_separator->class) && $_separator->class === 'Array' &&  is_int('lastIndex') && 'lastIndex' >= $_separator->properties['length']) { $_separator->properties['length'] = 'lastIndex' + 1; };
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x706=&$scope->properties[\'arguments\'];$x706->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x706->properties[$i]=$args[$i];$x706->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$scope->properties[\'limit\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_limit=&$scope->properties[\'limit\'];$Ulimit=FALSE;$global->scope[++$global->scope_sp]=$scope;$x707=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x707,$global)){$x708=clone JS::$arrayTemplate;$x708->properties[\'length\']=1;$x708->attributes[\'length\']=JS::WRITABLE;$x708->properties[0]=$leThis->value;$x708->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x708;}$x709=(((gettype($_separator)===gettype(\'\')&&$_separator===\'\'))||(((is_float($_separator)||is_int($_separator))&&(is_float(\'\')||is_int(\'\')))&&$_separator==\'\'));if(JS::toBoolean($x709,$global)){$x710=clone JS::$arrayTemplate;$x710->properties[\'length\']=0;$x710->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x710;for($x711=0;;++$x711){if($x711===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x712,$W712,$S712,$U712);$x713=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),236,27,\'<image>/05_string.js\');$x712=&$x713[0];list(,$W712,$S712,$U712)=$x713;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x712;}if($x711!==0){$x714=++$_i;}$x715=JS::toPrimitive($_i,$global);$x716=JS::toPrimitive($_l,$global);$x717=(is_string($x715)&&is_string($x716)?strcmp($x715,$x716)<0:(!is_nan($x718=JS::toNumber($x715,$global))&&!is_nan($x719=JS::toNumber($x716,$global))&&$x718<$x719));if(!JS::toBoolean($x717,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x721=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,20,\'<image>/05_string.js\');$_TypeError=&$x721[0];list(,$WTypeError,$STypeError,$UTypeError)=$x721;$x722=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x723=$x722($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x723->class)&&$x723->class===\'Error\'&&!isset($x723->properties[\'file\'])&&!isset($x723->properties[\'line\'])&&!isset($x723->properties[\'column\'])){$x723->properties[\'file\']=\'<image>/05_string.js\';$x723->properties[\'line\']=237;$x723->properties[\'column\']=20;$x723->attributes[\'file\']=$x723->attributes[\'line\']=$x723->attributes[\'column\']=0;}throw new JSException($x723,237,20,\'<image>/05_string.js\');}$x720=JS::toObject($_returnArray,$global);unset($x724,$W724,$S724,$U724);$x725=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x720,JS::toString(\'push\',$global),237,20,\'<image>/05_string.js\');$x724=&$x725[0];list(,$W724,$S724,$U724)=$x725;if(!(is_object($x724)&&isset($x724->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x728=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,20,\'<image>/05_string.js\');$_TypeError=&$x728[0];list(,$WTypeError,$STypeError,$UTypeError)=$x728;$x729=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x730=$x729($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x730->class)&&$x730->class===\'Error\'&&!isset($x730->properties[\'file\'])&&!isset($x730->properties[\'line\'])&&!isset($x730->properties[\'column\'])){$x730->properties[\'file\']=\'<image>/05_string.js\';$x730->properties[\'line\']=237;$x730->properties[\'column\']=20;$x730->attributes[\'file\']=$x730->attributes[\'line\']=$x730->attributes[\'column\']=0;}throw new JSException($x730,237,20,\'<image>/05_string.js\');}$x726=$x724->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x727=$x726($global,$x720,$x724,array((string)substr($leThis->value,$_i,1)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;}$x732=$_separator;$x732=($x732===JS::$undefined?\'undefined\':(is_int($x732)||is_float($x732)?\'number\':(is_bool($x732)?\'boolean\':(is_string($x732)?\'string\':(is_object($x732)&&isset($x732->call)?\'function\':\'object\')))));$x731=(((gettype($x732)===gettype(\'string\')&&$x732===\'string\'))||(((is_float($x732)||is_int($x732))&&(is_float(\'string\')||is_int(\'string\')))&&$x732==\'string\'));if(JS::toBoolean($x731,$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x735=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),244,19,\'<image>/05_string.js\');$_RegExp=&$x735[0];list(,$WRegExp,$SRegExp,$URegExp)=$x735;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x736=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),244,19,\'<image>/05_string.js\');$_ReferenceError=&$x736[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x736;$x737=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,19);$x738=$x737($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x738->class)&&$x738->class===\'Error\'&&!isset($x738->properties[\'file\'])&&!isset($x738->properties[\'line\'])&&!isset($x738->properties[\'column\'])){$x738->properties[\'file\']=\'<image>/05_string.js\';$x738->properties[\'line\']=244;$x738->properties[\'column\']=19;$x738->attributes[\'file\']=$x738->attributes[\'line\']=$x738->attributes[\'column\']=0;}throw new JSException($x738,244,19,\'<image>/05_string.js\');}$x733=clone JS::$objectTemplate;unset($x739,$W739,$S739,$U739);$x740=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),244,15,\'<image>/05_string.js\');$x739=&$x740[0];list(,$W739,$S739,$U739)=$x740;$x734=$x739;$x733->prototype=$x734;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x743=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,15,\'<image>/05_string.js\');$_TypeError=&$x743[0];list(,$WTypeError,$STypeError,$UTypeError)=$x743;$x744=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x745=$x744($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x745->class)&&$x745->class===\'Error\'&&!isset($x745->properties[\'file\'])&&!isset($x745->properties[\'line\'])&&!isset($x745->properties[\'column\'])){$x745->properties[\'file\']=\'<image>/05_string.js\';$x745->properties[\'line\']=244;$x745->properties[\'column\']=15;$x745->attributes[\'file\']=$x745->attributes[\'line\']=$x745->attributes[\'column\']=0;}throw new JSException($x745,244,15,\'<image>/05_string.js\');}$x741=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x742=$x741($global,$x733,$_RegExp,array(preg_quote(JS::toString($_separator,$global),\'/\'),\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x734=$x742;if(is_object($x734)&&$x734!==JS::$undefined){$x733=$x734;}if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x733;}$x746=clone JS::$arrayTemplate;$x746->properties[\'length\']=0;$x746->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x746;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;unset($x747,$W747,$S747,$U747);$x748=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,JS::toString(\'lastIndex\',$global),248,29,\'<image>/05_string.js\');$x747=&$x748[0];list(,$W747,$S747,$U747)=$x748;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x747;unset($x749,$W749,$S749,$U749);$x750=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,JS::toString(\'global\',$global),248,64,\'<image>/05_string.js\');$x749=&$x750[0];list(,$W749,$S749,$U749)=$x750;$scope->properties[\'savedGlobal\']=JS::$undefined;$_savedGlobal=&$scope->properties[\'savedGlobal\'];$UsavedGlobal=FALSE;$_savedGlobal=$x749;$_separator->properties[\'global\']=TRUE;$x751=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x751,$global)){unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x752=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Infinity\',$global),253,11,\'<image>/05_string.js\');$_Infinity=&$x752[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x752;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x753=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),253,11,\'<image>/05_string.js\');$_ReferenceError=&$x753[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x753;$x754=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',253,11);$x755=$x754($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x755->class)&&$x755->class===\'Error\'&&!isset($x755->properties[\'file\'])&&!isset($x755->properties[\'line\'])&&!isset($x755->properties[\'column\'])){$x755->properties[\'file\']=\'<image>/05_string.js\';$x755->properties[\'line\']=253;$x755->properties[\'column\']=11;$x755->attributes[\'file\']=$x755->attributes[\'line\']=$x755->attributes[\'column\']=0;}throw new JSException($x755,253,11,\'<image>/05_string.js\');}if($Ulimit){$global->properties[\'limit\']=$_limit;$_limit=&$global->properties[\'limit\'];}$_limit=$_Infinity;}for(;;){if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x759=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,32,\'<image>/05_string.js\');$_TypeError=&$x759[0];list(,$WTypeError,$STypeError,$UTypeError)=$x759;$x760=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x761=$x760($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x761->class)&&$x761->class===\'Error\'&&!isset($x761->properties[\'file\'])&&!isset($x761->properties[\'line\'])&&!isset($x761->properties[\'column\'])){$x761->properties[\'file\']=\'<image>/05_string.js\';$x761->properties[\'line\']=256;$x761->properties[\'column\']=32;$x761->attributes[\'file\']=$x761->attributes[\'line\']=$x761->attributes[\'column\']=0;}throw new JSException($x761,256,32,\'<image>/05_string.js\');}$x758=JS::toObject($_separator,$global);unset($x762,$W762,$S762,$U762);$x763=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x758,JS::toString(\'exec\',$global),256,32,\'<image>/05_string.js\');$x762=&$x763[0];list(,$W762,$S762,$U762)=$x763;if(!(is_object($x762)&&isset($x762->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x766=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,32,\'<image>/05_string.js\');$_TypeError=&$x766[0];list(,$WTypeError,$STypeError,$UTypeError)=$x766;$x767=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x768=$x767($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x768->class)&&$x768->class===\'Error\'&&!isset($x768->properties[\'file\'])&&!isset($x768->properties[\'line\'])&&!isset($x768->properties[\'column\'])){$x768->properties[\'file\']=\'<image>/05_string.js\';$x768->properties[\'line\']=256;$x768->properties[\'column\']=32;$x768->attributes[\'file\']=$x768->attributes[\'line\']=$x768->attributes[\'column\']=0;}throw new JSException($x768,256,32,\'<image>/05_string.js\');}$x764=$x762->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x765=$x764($global,$x758,$x762,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x765;$x757=$_match;if(JS::toBoolean($x757,$global)){$x772=--$_limit;$x769=JS::toPrimitive($x772,$global);$x770=JS::toPrimitive(0,$global);$x771=(is_string($x770)&&is_string($x769)?strcmp($x770,$x769)<0:(!is_nan($x773=JS::toNumber($x770,$global))&&!is_nan($x774=JS::toNumber($x769,$global))&&$x773<$x774));$x757=$x771;}$x756=$x757;if(JS::toBoolean($x756,$global)){unset($x778,$W778,$S778,$U778);$x779=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),256,80,\'<image>/05_string.js\');$x778=&$x779[0];list(,$W778,$S778,$U778)=$x779;$x775=JS::toPrimitive($_lastIndex,$global);$x776=JS::toPrimitive($x778,$global);$x777=(is_string($x775)&&is_string($x776)?strcmp($x775,$x776)<0:(!is_nan($x780=JS::toNumber($x775,$global))&&!is_nan($x781=JS::toNumber($x776,$global))&&$x780<$x781));$x756=$x777;}if(!JS::toBoolean($x756,$global)){break;}unset($x784,$W784,$S784,$U784);$x785=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),257,12,\'<image>/05_string.js\');$x784=&$x785[0];list(,$W784,$S784,$U784)=$x785;$x783=(((gettype($x784)===gettype(\'\')&&$x784===\'\'))||(((is_float($x784)||is_int($x784))&&(is_float(\'\')||is_int(\'\')))&&$x784==\'\'));$x782=$x783;if(JS::toBoolean($x782,$global)){unset($x787,$W787,$S787,$U787);$x788=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),257,31,\'<image>/05_string.js\');$x787=&$x788[0];list(,$W787,$S787,$U787)=$x788;$x786=(((gettype($x787)===gettype($_lastIndex)&&$x787===$_lastIndex))||(((is_float($x787)||is_int($x787))&&(is_float($_lastIndex)||is_int($_lastIndex)))&&$x787==$_lastIndex));$x782=$x786;}if(JS::toBoolean($x782,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x790=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,20,\'<image>/05_string.js\');$_TypeError=&$x790[0];list(,$WTypeError,$STypeError,$UTypeError)=$x790;$x791=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x792=$x791($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x792->class)&&$x792->class===\'Error\'&&!isset($x792->properties[\'file\'])&&!isset($x792->properties[\'line\'])&&!isset($x792->properties[\'column\'])){$x792->properties[\'file\']=\'<image>/05_string.js\';$x792->properties[\'line\']=258;$x792->properties[\'column\']=20;$x792->attributes[\'file\']=$x792->attributes[\'line\']=$x792->attributes[\'column\']=0;}throw new JSException($x792,258,20,\'<image>/05_string.js\');}$x789=JS::toObject($_returnArray,$global);unset($x793,$W793,$S793,$U793);$x794=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x789,JS::toString(\'push\',$global),258,20,\'<image>/05_string.js\');$x793=&$x794[0];list(,$W793,$S793,$U793)=$x794;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x796=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,35,\'<image>/05_string.js\');$_TypeError=&$x796[0];list(,$WTypeError,$STypeError,$UTypeError)=$x796;$x797=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x798=$x797($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x798->class)&&$x798->class===\'Error\'&&!isset($x798->properties[\'file\'])&&!isset($x798->properties[\'line\'])&&!isset($x798->properties[\'column\'])){$x798->properties[\'file\']=\'<image>/05_string.js\';$x798->properties[\'line\']=258;$x798->properties[\'column\']=35;$x798->attributes[\'file\']=$x798->attributes[\'line\']=$x798->attributes[\'column\']=0;}throw new JSException($x798,258,35,\'<image>/05_string.js\');}$x795=JS::toObject($leThis,$global);unset($x799,$W799,$S799,$U799);$x800=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x795,JS::toString(\'substring\',$global),258,35,\'<image>/05_string.js\');$x799=&$x800[0];list(,$W799,$S799,$U799)=$x800;$x801=JS::toPrimitive($_lastIndex,$global);$x802=JS::toPrimitive(1,$global);if(!(is_object($x799)&&isset($x799->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x805=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,35,\'<image>/05_string.js\');$_TypeError=&$x805[0];list(,$WTypeError,$STypeError,$UTypeError)=$x805;$x806=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x807=$x806($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x807->class)&&$x807->class===\'Error\'&&!isset($x807->properties[\'file\'])&&!isset($x807->properties[\'line\'])&&!isset($x807->properties[\'column\'])){$x807->properties[\'file\']=\'<image>/05_string.js\';$x807->properties[\'line\']=258;$x807->properties[\'column\']=35;$x807->attributes[\'file\']=$x807->attributes[\'line\']=$x807->attributes[\'column\']=0;}throw new JSException($x807,258,35,\'<image>/05_string.js\');}$x803=$x799->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x804=$x803($global,$x795,$x799,array($_lastIndex,(is_string($x801)||is_string($x802)?JS::toString($x801,$global).JS::toString($x802,$global):JS::toNumber($x801,$global)+JS::toNumber($x802,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x793)&&isset($x793->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x810=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,20,\'<image>/05_string.js\');$_TypeError=&$x810[0];list(,$WTypeError,$STypeError,$UTypeError)=$x810;$x811=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x812=$x811($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x812->class)&&$x812->class===\'Error\'&&!isset($x812->properties[\'file\'])&&!isset($x812->properties[\'line\'])&&!isset($x812->properties[\'column\'])){$x812->properties[\'file\']=\'<image>/05_string.js\';$x812->properties[\'line\']=258;$x812->properties[\'column\']=20;$x812->attributes[\'file\']=$x812->attributes[\'line\']=$x812->attributes[\'column\']=0;}throw new JSException($x812,258,20,\'<image>/05_string.js\');}$x808=$x793->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x809=$x808($global,$x789,$x793,array($x804),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x813=++$_lastIndex;unset($x814,$W814,$S814,$U814);$x815=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,JS::toString(\'lastIndex\',$global),260,15,\'<image>/05_string.js\');$x814=&$x815[0];list(,$W814,$S814,$U814)=$x815;$x816=++$x814;}else{if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x818=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,20,\'<image>/05_string.js\');$_TypeError=&$x818[0];list(,$WTypeError,$STypeError,$UTypeError)=$x818;$x819=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x820=$x819($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x820->class)&&$x820->class===\'Error\'&&!isset($x820->properties[\'file\'])&&!isset($x820->properties[\'line\'])&&!isset($x820->properties[\'column\'])){$x820->properties[\'file\']=\'<image>/05_string.js\';$x820->properties[\'line\']=263;$x820->properties[\'column\']=20;$x820->attributes[\'file\']=$x820->attributes[\'line\']=$x820->attributes[\'column\']=0;}throw new JSException($x820,263,20,\'<image>/05_string.js\');}$x817=JS::toObject($_returnArray,$global);unset($x821,$W821,$S821,$U821);$x822=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x817,JS::toString(\'push\',$global),263,20,\'<image>/05_string.js\');$x821=&$x822[0];list(,$W821,$S821,$U821)=$x822;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x824=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,35,\'<image>/05_string.js\');$_TypeError=&$x824[0];list(,$WTypeError,$STypeError,$UTypeError)=$x824;$x825=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x826=$x825($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x826->class)&&$x826->class===\'Error\'&&!isset($x826->properties[\'file\'])&&!isset($x826->properties[\'line\'])&&!isset($x826->properties[\'column\'])){$x826->properties[\'file\']=\'<image>/05_string.js\';$x826->properties[\'line\']=263;$x826->properties[\'column\']=35;$x826->attributes[\'file\']=$x826->attributes[\'line\']=$x826->attributes[\'column\']=0;}throw new JSException($x826,263,35,\'<image>/05_string.js\');}$x823=JS::toObject($leThis,$global);unset($x827,$W827,$S827,$U827);$x828=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x823,JS::toString(\'substring\',$global),263,35,\'<image>/05_string.js\');$x827=&$x828[0];list(,$W827,$S827,$U827)=$x828;unset($x829,$W829,$S829,$U829);$x830=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),263,52,\'<image>/05_string.js\');$x829=&$x830[0];list(,$W829,$S829,$U829)=$x830;if(!(is_object($x827)&&isset($x827->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x833=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,35,\'<image>/05_string.js\');$_TypeError=&$x833[0];list(,$WTypeError,$STypeError,$UTypeError)=$x833;$x834=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x835=$x834($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x835->class)&&$x835->class===\'Error\'&&!isset($x835->properties[\'file\'])&&!isset($x835->properties[\'line\'])&&!isset($x835->properties[\'column\'])){$x835->properties[\'file\']=\'<image>/05_string.js\';$x835->properties[\'line\']=263;$x835->properties[\'column\']=35;$x835->attributes[\'file\']=$x835->attributes[\'line\']=$x835->attributes[\'column\']=0;}throw new JSException($x835,263,35,\'<image>/05_string.js\');}$x831=$x827->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x832=$x831($global,$x823,$x827,array($_lastIndex,$x829),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x821)&&isset($x821->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x838=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,20,\'<image>/05_string.js\');$_TypeError=&$x838[0];list(,$WTypeError,$STypeError,$UTypeError)=$x838;$x839=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x840=$x839($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x840->class)&&$x840->class===\'Error\'&&!isset($x840->properties[\'file\'])&&!isset($x840->properties[\'line\'])&&!isset($x840->properties[\'column\'])){$x840->properties[\'file\']=\'<image>/05_string.js\';$x840->properties[\'line\']=263;$x840->properties[\'column\']=20;$x840->attributes[\'file\']=$x840->attributes[\'line\']=$x840->attributes[\'column\']=0;}throw new JSException($x840,263,20,\'<image>/05_string.js\');}$x836=$x821->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x837=$x836($global,$x817,$x821,array($x832),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);for($x841=0;;++$x841){if($x841===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x842,$W842,$S842,$U842);$x843=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'length\',$global),265,29,\'<image>/05_string.js\');$x842=&$x843[0];list(,$W842,$S842,$U842)=$x843;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x842;}if($x841!==0){$x844=++$_i;}$x845=JS::toPrimitive($_i,$global);$x846=JS::toPrimitive($_l,$global);$x847=(is_string($x845)&&is_string($x846)?strcmp($x845,$x846)<0:(!is_nan($x848=JS::toNumber($x845,$global))&&!is_nan($x849=JS::toNumber($x846,$global))&&$x848<$x849));if(!JS::toBoolean($x847,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x851=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),266,21,\'<image>/05_string.js\');$_TypeError=&$x851[0];list(,$WTypeError,$STypeError,$UTypeError)=$x851;$x852=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x853=$x852($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x853->class)&&$x853->class===\'Error\'&&!isset($x853->properties[\'file\'])&&!isset($x853->properties[\'line\'])&&!isset($x853->properties[\'column\'])){$x853->properties[\'file\']=\'<image>/05_string.js\';$x853->properties[\'line\']=266;$x853->properties[\'column\']=21;$x853->attributes[\'file\']=$x853->attributes[\'line\']=$x853->attributes[\'column\']=0;}throw new JSException($x853,266,21,\'<image>/05_string.js\');}$x850=JS::toObject($_returnArray,$global);unset($x854,$W854,$S854,$U854);$x855=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x850,JS::toString(\'push\',$global),266,21,\'<image>/05_string.js\');$x854=&$x855[0];list(,$W854,$S854,$U854)=$x855;unset($x856,$W856,$S856,$U856);$x857=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString($_i,$global),266,27,\'<image>/05_string.js\');$x856=&$x857[0];list(,$W856,$S856,$U856)=$x857;if(!(is_object($x854)&&isset($x854->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x860=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),266,21,\'<image>/05_string.js\');$_TypeError=&$x860[0];list(,$WTypeError,$STypeError,$UTypeError)=$x860;$x861=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x862=$x861($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x862->class)&&$x862->class===\'Error\'&&!isset($x862->properties[\'file\'])&&!isset($x862->properties[\'line\'])&&!isset($x862->properties[\'column\'])){$x862->properties[\'file\']=\'<image>/05_string.js\';$x862->properties[\'line\']=266;$x862->properties[\'column\']=21;$x862->attributes[\'file\']=$x862->attributes[\'line\']=$x862->attributes[\'column\']=0;}throw new JSException($x862,266,21,\'<image>/05_string.js\');}$x858=$x854->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x859=$x858($global,$x850,$x854,array($x856),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x865,$W865,$S865,$U865);$x866=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),269,21,\'<image>/05_string.js\');$x865=&$x866[0];list(,$W865,$S865,$U865)=$x866;unset($x867,$W867,$S867,$U867);$x868=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),269,35,\'<image>/05_string.js\');$x867=&$x868[0];list(,$W867,$S867,$U867)=$x868;unset($x869,$W869,$S869,$U869);$x870=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x867,JS::toString(\'length\',$global),269,38,\'<image>/05_string.js\');$x869=&$x870[0];list(,$W869,$S869,$U869)=$x870;$x863=JS::toPrimitive($x865,$global);$x864=JS::toPrimitive($x869,$global);$x871=(is_string($x863)||is_string($x864)?JS::toString($x863,$global).JS::toString($x864,$global):JS::toNumber($x863,$global)+JS::toNumber($x864,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x871;}}unset($x875,$W875,$S875,$U875);$x876=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),273,22,\'<image>/05_string.js\');$x875=&$x876[0];list(,$W875,$S875,$U875)=$x876;$x872=JS::toPrimitive($_lastIndex,$global);$x873=JS::toPrimitive($x875,$global);$x874=(is_string($x872)&&is_string($x873)?strcmp($x872,$x873)<0:(!is_nan($x877=JS::toNumber($x872,$global))&&!is_nan($x878=JS::toNumber($x873,$global))&&$x877<$x878));if(JS::toBoolean($x874,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x880=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,19,\'<image>/05_string.js\');$_TypeError=&$x880[0];list(,$WTypeError,$STypeError,$UTypeError)=$x880;$x881=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x882=$x881($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x882->class)&&$x882->class===\'Error\'&&!isset($x882->properties[\'file\'])&&!isset($x882->properties[\'line\'])&&!isset($x882->properties[\'column\'])){$x882->properties[\'file\']=\'<image>/05_string.js\';$x882->properties[\'line\']=274;$x882->properties[\'column\']=19;$x882->attributes[\'file\']=$x882->attributes[\'line\']=$x882->attributes[\'column\']=0;}throw new JSException($x882,274,19,\'<image>/05_string.js\');}$x879=JS::toObject($_returnArray,$global);unset($x883,$W883,$S883,$U883);$x884=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x879,JS::toString(\'push\',$global),274,19,\'<image>/05_string.js\');$x883=&$x884[0];list(,$W883,$S883,$U883)=$x884;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x886=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,34,\'<image>/05_string.js\');$_TypeError=&$x886[0];list(,$WTypeError,$STypeError,$UTypeError)=$x886;$x887=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x888=$x887($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x888->class)&&$x888->class===\'Error\'&&!isset($x888->properties[\'file\'])&&!isset($x888->properties[\'line\'])&&!isset($x888->properties[\'column\'])){$x888->properties[\'file\']=\'<image>/05_string.js\';$x888->properties[\'line\']=274;$x888->properties[\'column\']=34;$x888->attributes[\'file\']=$x888->attributes[\'line\']=$x888->attributes[\'column\']=0;}throw new JSException($x888,274,34,\'<image>/05_string.js\');}$x885=JS::toObject($leThis,$global);unset($x889,$W889,$S889,$U889);$x890=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x885,JS::toString(\'substring\',$global),274,34,\'<image>/05_string.js\');$x889=&$x890[0];list(,$W889,$S889,$U889)=$x890;unset($x891,$W891,$S891,$U891);$x892=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),274,50,\'<image>/05_string.js\');$x891=&$x892[0];list(,$W891,$S891,$U891)=$x892;if(!(is_object($x889)&&isset($x889->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x895=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,34,\'<image>/05_string.js\');$_TypeError=&$x895[0];list(,$WTypeError,$STypeError,$UTypeError)=$x895;$x896=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x897=$x896($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x897->class)&&$x897->class===\'Error\'&&!isset($x897->properties[\'file\'])&&!isset($x897->properties[\'line\'])&&!isset($x897->properties[\'column\'])){$x897->properties[\'file\']=\'<image>/05_string.js\';$x897->properties[\'line\']=274;$x897->properties[\'column\']=34;$x897->attributes[\'file\']=$x897->attributes[\'line\']=$x897->attributes[\'column\']=0;}throw new JSException($x897,274,34,\'<image>/05_string.js\');}$x893=$x889->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x894=$x893($global,$x885,$x889,array($_lastIndex,$x891),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x883)&&isset($x883->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x900=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,19,\'<image>/05_string.js\');$_TypeError=&$x900[0];list(,$WTypeError,$STypeError,$UTypeError)=$x900;$x901=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x902=$x901($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x902->class)&&$x902->class===\'Error\'&&!isset($x902->properties[\'file\'])&&!isset($x902->properties[\'line\'])&&!isset($x902->properties[\'column\'])){$x902->properties[\'file\']=\'<image>/05_string.js\';$x902->properties[\'line\']=274;$x902->properties[\'column\']=19;$x902->attributes[\'file\']=$x902->attributes[\'line\']=$x902->attributes[\'column\']=0;}throw new JSException($x902,274,19,\'<image>/05_string.js\');}$x898=$x883->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x899=$x898($global,$x879,$x883,array($x894),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}$_separator->properties[\'global\']=$_savedGlobal;$x903=JS::toString(\'lastIndex\',$global);if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x904=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),278,22,\'<image>/05_string.js\');$_TypeError=&$x904[0];list(,$WTypeError,$STypeError,$UTypeError)=$x904;$x905=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x906=$x905($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x906->class)&&$x906->class===\'Error\'&&!isset($x906->properties[\'file\'])&&!isset($x906->properties[\'line\'])&&!isset($x906->properties[\'column\'])){$x906->properties[\'file\']=\'<image>/05_string.js\';$x906->properties[\'line\']=278;$x906->properties[\'column\']=22;$x906->attributes[\'file\']=$x906->attributes[\'line\']=$x906->attributes[\'column\']=0;}throw new JSException($x906,278,22,\'<image>/05_string.js\');}$_separator=JS::toObject($_separator,$global);unset($x907,$W907,$S907,$U907);$x908=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_separator,JS::toString($x903,$global),278,22,\'<image>/05_string.js\');$x907=&$x908[0];list(,$W907,$S907,$U907)=$x908;if($U907&&(!isset($_separator->extensible)||$_separator->extensible)){$_separator->properties[$x903]=$x907;$x907=&$_separator->properties[$x903];$_separator->attributes[$x903]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U907=FALSE;$W907=TRUE;}if(isset($S907)){$x910=$S907->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x911=$x910($global,$_separator,$S907,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x909=$x911;}else{if(!$U907){$x909=$_savedLastIndex;if($W907){$x907=$_savedLastIndex;}}else{$x909=JS::$undefined;}}if(isset($_separator->class)&&$_separator->class===\'Array\'&&is_int(\'lastIndex\')&&\'lastIndex\'>=$_separator->properties[\'length\']){$_separator->properties[\'length\']=\'lastIndex\'+1;}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x925 =& $scope->properties['arguments'];
$x925->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x925->properties[$i] = $args[$i];
$x925->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x926 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x926, $global)) {
$x927 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x927;;
};
$x928 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x928, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x929 = JS::toPrimitive($_start, $global);
$x930 = JS::toPrimitive(0, $global);
$x931 = (is_string($x929) && is_string($x930) ? strcmp($x929, $x930) < 0 : (!is_nan($x932 = JS::toNumber($x929, $global)) && !is_nan($x933 = JS::toNumber($x930, $global)) && $x932 < $x933));
if (JS::toBoolean($x931, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x934 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 295, 11, '<image>/05_string.js');
$_Math =& $x934[0]; list(,$WMath,$SMath,$UMath) = $x934;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x935 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 295, 11, '<image>/05_string.js');
$_ReferenceError =& $x935[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x935;
$x936 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 11);
$x937 = $x936($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x937->class) && $x937->class === 'Error' && !isset($x937->properties['file']) && !isset($x937->properties['line']) && !isset($x937->properties['column'])) {$x937->properties['file'] = '<image>/05_string.js';$x937->properties['line'] = 295;$x937->properties['column'] = 11;$x937->attributes['file'] = $x937->attributes['line'] = $x937->attributes['column'] = 0; }
throw new JSException($x937, 295, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x939 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 295, 19, '<image>/05_string.js');
$_TypeError =& $x939[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x939;
$x940 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x941 = $x940($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x941->class) && $x941->class === 'Error' && !isset($x941->properties['file']) && !isset($x941->properties['line']) && !isset($x941->properties['column'])) {$x941->properties['file'] = '<image>/05_string.js';$x941->properties['line'] = 295;$x941->properties['column'] = 19;$x941->attributes['file'] = $x941->attributes['line'] = $x941->attributes['column'] = 0; }
throw new JSException($x941, 295, 19, '<image>/05_string.js');
}
$x938 = JS::toObject($_Math, $global);
unset($x942, $W942, $S942, $U942);
$x943 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x938, JS::toString('max', $global), 295, 19, '<image>/05_string.js');
$x942 =& $x943[0]; list(,$W942,$S942,$U942) = $x943;
$x944 = JS::toPrimitive($_start, $global);
$x945 = JS::toPrimitive($_length, $global);
if (!(is_object($x942) && isset($x942->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x948 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 295, 19, '<image>/05_string.js');
$_TypeError =& $x948[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x948;
$x949 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x950 = $x949($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x950->class) && $x950->class === 'Error' && !isset($x950->properties['file']) && !isset($x950->properties['line']) && !isset($x950->properties['column'])) {$x950->properties['file'] = '<image>/05_string.js';$x950->properties['line'] = 295;$x950->properties['column'] = 19;$x950->attributes['file'] = $x950->attributes['line'] = $x950->attributes['column'] = 0; }
throw new JSException($x950, 295, 19, '<image>/05_string.js');
}
$x946 = $x942->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x947 = $x946($global, $x938, $x942, array((is_string($x944) || is_string($x945) ? JS::toString($x944, $global) . JS::toString($x945, $global) : JS::toNumber($x944, $global) + JS::toNumber($x945, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x947;;
};
$x951 = JS::toPrimitive($_end, $global);
$x952 = JS::toPrimitive(0, $global);
$x953 = (is_string($x951) && is_string($x952) ? strcmp($x951, $x952) < 0 : (!is_nan($x954 = JS::toNumber($x951, $global)) && !is_nan($x955 = JS::toNumber($x952, $global)) && $x954 < $x955));
if (JS::toBoolean($x953, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x956 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 299, 9, '<image>/05_string.js');
$_Math =& $x956[0]; list(,$WMath,$SMath,$UMath) = $x956;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x957 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 299, 9, '<image>/05_string.js');
$_ReferenceError =& $x957[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x957;
$x958 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 9);
$x959 = $x958($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x959->class) && $x959->class === 'Error' && !isset($x959->properties['file']) && !isset($x959->properties['line']) && !isset($x959->properties['column'])) {$x959->properties['file'] = '<image>/05_string.js';$x959->properties['line'] = 299;$x959->properties['column'] = 9;$x959->attributes['file'] = $x959->attributes['line'] = $x959->attributes['column'] = 0; }
throw new JSException($x959, 299, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x961 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 299, 17, '<image>/05_string.js');
$_TypeError =& $x961[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x961;
$x962 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x963 = $x962($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x963->class) && $x963->class === 'Error' && !isset($x963->properties['file']) && !isset($x963->properties['line']) && !isset($x963->properties['column'])) {$x963->properties['file'] = '<image>/05_string.js';$x963->properties['line'] = 299;$x963->properties['column'] = 17;$x963->attributes['file'] = $x963->attributes['line'] = $x963->attributes['column'] = 0; }
throw new JSException($x963, 299, 17, '<image>/05_string.js');
}
$x960 = JS::toObject($_Math, $global);
unset($x964, $W964, $S964, $U964);
$x965 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x960, JS::toString('max', $global), 299, 17, '<image>/05_string.js');
$x964 =& $x965[0]; list(,$W964,$S964,$U964) = $x965;
$x966 = JS::toPrimitive($_end, $global);
$x967 = JS::toPrimitive($_length, $global);
if (!(is_object($x964) && isset($x964->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x970 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 299, 17, '<image>/05_string.js');
$_TypeError =& $x970[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x970;
$x971 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x972 = $x971($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x972->class) && $x972->class === 'Error' && !isset($x972->properties['file']) && !isset($x972->properties['line']) && !isset($x972->properties['column'])) {$x972->properties['file'] = '<image>/05_string.js';$x972->properties['line'] = 299;$x972->properties['column'] = 17;$x972->attributes['file'] = $x972->attributes['line'] = $x972->attributes['column'] = 0; }
throw new JSException($x972, 299, 17, '<image>/05_string.js');
}
$x968 = $x964->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x969 = $x968($global, $x960, $x964, array((is_string($x966) || is_string($x967) ? JS::toString($x966, $global) . JS::toString($x967, $global) : JS::toNumber($x966, $global) + JS::toNumber($x967, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x969;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x973 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 302, 10, '<image>/05_string.js');
$_Math =& $x973[0]; list(,$WMath,$SMath,$UMath) = $x973;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x974 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 302, 10, '<image>/05_string.js');
$_ReferenceError =& $x974[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x974;
$x975 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 10);
$x976 = $x975($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x976->class) && $x976->class === 'Error' && !isset($x976->properties['file']) && !isset($x976->properties['line']) && !isset($x976->properties['column'])) {$x976->properties['file'] = '<image>/05_string.js';$x976->properties['line'] = 302;$x976->properties['column'] = 10;$x976->attributes['file'] = $x976->attributes['line'] = $x976->attributes['column'] = 0; }
throw new JSException($x976, 302, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x978 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 18, '<image>/05_string.js');
$_TypeError =& $x978[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x978;
$x979 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x980 = $x979($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x980->class) && $x980->class === 'Error' && !isset($x980->properties['file']) && !isset($x980->properties['line']) && !isset($x980->properties['column'])) {$x980->properties['file'] = '<image>/05_string.js';$x980->properties['line'] = 302;$x980->properties['column'] = 18;$x980->attributes['file'] = $x980->attributes['line'] = $x980->attributes['column'] = 0; }
throw new JSException($x980, 302, 18, '<image>/05_string.js');
}
$x977 = JS::toObject($_Math, $global);
unset($x981, $W981, $S981, $U981);
$x982 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x977, JS::toString('min', $global), 302, 18, '<image>/05_string.js');
$x981 =& $x982[0]; list(,$W981,$S981,$U981) = $x982;
if (!(is_object($x981) && isset($x981->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x985 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 18, '<image>/05_string.js');
$_TypeError =& $x985[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x985;
$x986 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x987 = $x986($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x987->class) && $x987->class === 'Error' && !isset($x987->properties['file']) && !isset($x987->properties['line']) && !isset($x987->properties['column'])) {$x987->properties['file'] = '<image>/05_string.js';$x987->properties['line'] = 302;$x987->properties['column'] = 18;$x987->attributes['file'] = $x987->attributes['line'] = $x987->attributes['column'] = 0; }
throw new JSException($x987, 302, 18, '<image>/05_string.js');
}
$x983 = $x981->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x984 = $x983($global, $x977, $x981, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x984;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x989 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 303, 16, '<image>/05_string.js');
$_TypeError =& $x989[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x989;
$x990 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x991 = $x990($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x991->class) && $x991->class === 'Error' && !isset($x991->properties['file']) && !isset($x991->properties['line']) && !isset($x991->properties['column'])) {$x991->properties['file'] = '<image>/05_string.js';$x991->properties['line'] = 303;$x991->properties['column'] = 16;$x991->attributes['file'] = $x991->attributes['line'] = $x991->attributes['column'] = 0; }
throw new JSException($x991, 303, 16, '<image>/05_string.js');
}
$x988 = JS::toObject($_Math, $global);
unset($x992, $W992, $S992, $U992);
$x993 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x988, JS::toString('min', $global), 303, 16, '<image>/05_string.js');
$x992 =& $x993[0]; list(,$W992,$S992,$U992) = $x993;
if (!(is_object($x992) && isset($x992->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x996 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 303, 16, '<image>/05_string.js');
$_TypeError =& $x996[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x996;
$x997 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x998 = $x997($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x998->class) && $x998->class === 'Error' && !isset($x998->properties['file']) && !isset($x998->properties['line']) && !isset($x998->properties['column'])) {$x998->properties['file'] = '<image>/05_string.js';$x998->properties['line'] = 303;$x998->properties['column'] = 16;$x998->attributes['file'] = $x998->attributes['line'] = $x998->attributes['column'] = 0; }
throw new JSException($x998, 303, 16, '<image>/05_string.js');
}
$x994 = $x992->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x995 = $x994($global, $x988, $x992, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x995;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1000 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 21, '<image>/05_string.js');
$_TypeError =& $x1000[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1000;
$x1001 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x1002 = $x1001($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1002->class) && $x1002->class === 'Error' && !isset($x1002->properties['file']) && !isset($x1002->properties['line']) && !isset($x1002->properties['column'])) {$x1002->properties['file'] = '<image>/05_string.js';$x1002->properties['line'] = 305;$x1002->properties['column'] = 21;$x1002->attributes['file'] = $x1002->attributes['line'] = $x1002->attributes['column'] = 0; }
throw new JSException($x1002, 305, 21, '<image>/05_string.js');
}
$x999 = JS::toObject($_Math, $global);
unset($x1003, $W1003, $S1003, $U1003);
$x1004 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x999, JS::toString('min', $global), 305, 21, '<image>/05_string.js');
$x1003 =& $x1004[0]; list(,$W1003,$S1003,$U1003) = $x1004;
if (!(is_object($x1003) && isset($x1003->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1007 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 21, '<image>/05_string.js');
$_TypeError =& $x1007[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1007;
$x1008 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x1009 = $x1008($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1009->class) && $x1009->class === 'Error' && !isset($x1009->properties['file']) && !isset($x1009->properties['line']) && !isset($x1009->properties['column'])) {$x1009->properties['file'] = '<image>/05_string.js';$x1009->properties['line'] = 305;$x1009->properties['column'] = 21;$x1009->attributes['file'] = $x1009->attributes['line'] = $x1009->attributes['column'] = 0; }
throw new JSException($x1009, 305, 21, '<image>/05_string.js');
}
$x1005 = $x1003->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x1006 = $x1005($global, $x999, $x1003, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x1006;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1011 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 48, '<image>/05_string.js');
$_TypeError =& $x1011[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1011;
$x1012 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x1013 = $x1012($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1013->class) && $x1013->class === 'Error' && !isset($x1013->properties['file']) && !isset($x1013->properties['line']) && !isset($x1013->properties['column'])) {$x1013->properties['file'] = '<image>/05_string.js';$x1013->properties['line'] = 305;$x1013->properties['column'] = 48;$x1013->attributes['file'] = $x1013->attributes['line'] = $x1013->attributes['column'] = 0; }
throw new JSException($x1013, 305, 48, '<image>/05_string.js');
}
$x1010 = JS::toObject($_Math, $global);
unset($x1014, $W1014, $S1014, $U1014);
$x1015 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1010, JS::toString('max', $global), 305, 48, '<image>/05_string.js');
$x1014 =& $x1015[0]; list(,$W1014,$S1014,$U1014) = $x1015;
if (!(is_object($x1014) && isset($x1014->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1018 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 48, '<image>/05_string.js');
$_TypeError =& $x1018[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1018;
$x1019 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x1020 = $x1019($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1020->class) && $x1020->class === 'Error' && !isset($x1020->properties['file']) && !isset($x1020->properties['line']) && !isset($x1020->properties['column'])) {$x1020->properties['file'] = '<image>/05_string.js';$x1020->properties['line'] = 305;$x1020->properties['column'] = 48;$x1020->attributes['file'] = $x1020->attributes['line'] = $x1020->attributes['column'] = 0; }
throw new JSException($x1020, 305, 48, '<image>/05_string.js');
}
$x1016 = $x1014->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x1017 = $x1016($global, $x1010, $x1014, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x1017;
return (string) substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x925=&$scope->properties[\'arguments\'];$x925->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x925->properties[$i]=$args[$i];$x925->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x926=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x926,$global)){$x927=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x927;}$x928=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x928,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x929=JS::toPrimitive($_start,$global);$x930=JS::toPrimitive(0,$global);$x931=(is_string($x929)&&is_string($x930)?strcmp($x929,$x930)<0:(!is_nan($x932=JS::toNumber($x929,$global))&&!is_nan($x933=JS::toNumber($x930,$global))&&$x932<$x933));if(JS::toBoolean($x931,$global)){unset($_Math,$WMath,$SMath,$UMath);$x934=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),295,11,\'<image>/05_string.js\');$_Math=&$x934[0];list(,$WMath,$SMath,$UMath)=$x934;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x935=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),295,11,\'<image>/05_string.js\');$_ReferenceError=&$x935[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x935;$x936=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,11);$x937=$x936($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x937->class)&&$x937->class===\'Error\'&&!isset($x937->properties[\'file\'])&&!isset($x937->properties[\'line\'])&&!isset($x937->properties[\'column\'])){$x937->properties[\'file\']=\'<image>/05_string.js\';$x937->properties[\'line\']=295;$x937->properties[\'column\']=11;$x937->attributes[\'file\']=$x937->attributes[\'line\']=$x937->attributes[\'column\']=0;}throw new JSException($x937,295,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x939=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),295,19,\'<image>/05_string.js\');$_TypeError=&$x939[0];list(,$WTypeError,$STypeError,$UTypeError)=$x939;$x940=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x941=$x940($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x941->class)&&$x941->class===\'Error\'&&!isset($x941->properties[\'file\'])&&!isset($x941->properties[\'line\'])&&!isset($x941->properties[\'column\'])){$x941->properties[\'file\']=\'<image>/05_string.js\';$x941->properties[\'line\']=295;$x941->properties[\'column\']=19;$x941->attributes[\'file\']=$x941->attributes[\'line\']=$x941->attributes[\'column\']=0;}throw new JSException($x941,295,19,\'<image>/05_string.js\');}$x938=JS::toObject($_Math,$global);unset($x942,$W942,$S942,$U942);$x943=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x938,JS::toString(\'max\',$global),295,19,\'<image>/05_string.js\');$x942=&$x943[0];list(,$W942,$S942,$U942)=$x943;$x944=JS::toPrimitive($_start,$global);$x945=JS::toPrimitive($_length,$global);if(!(is_object($x942)&&isset($x942->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x948=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),295,19,\'<image>/05_string.js\');$_TypeError=&$x948[0];list(,$WTypeError,$STypeError,$UTypeError)=$x948;$x949=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x950=$x949($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x950->class)&&$x950->class===\'Error\'&&!isset($x950->properties[\'file\'])&&!isset($x950->properties[\'line\'])&&!isset($x950->properties[\'column\'])){$x950->properties[\'file\']=\'<image>/05_string.js\';$x950->properties[\'line\']=295;$x950->properties[\'column\']=19;$x950->attributes[\'file\']=$x950->attributes[\'line\']=$x950->attributes[\'column\']=0;}throw new JSException($x950,295,19,\'<image>/05_string.js\');}$x946=$x942->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x947=$x946($global,$x938,$x942,array((is_string($x944)||is_string($x945)?JS::toString($x944,$global).JS::toString($x945,$global):JS::toNumber($x944,$global)+JS::toNumber($x945,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x947;}$x951=JS::toPrimitive($_end,$global);$x952=JS::toPrimitive(0,$global);$x953=(is_string($x951)&&is_string($x952)?strcmp($x951,$x952)<0:(!is_nan($x954=JS::toNumber($x951,$global))&&!is_nan($x955=JS::toNumber($x952,$global))&&$x954<$x955));if(JS::toBoolean($x953,$global)){unset($_Math,$WMath,$SMath,$UMath);$x956=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),299,9,\'<image>/05_string.js\');$_Math=&$x956[0];list(,$WMath,$SMath,$UMath)=$x956;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x957=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),299,9,\'<image>/05_string.js\');$_ReferenceError=&$x957[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x957;$x958=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,9);$x959=$x958($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x959->class)&&$x959->class===\'Error\'&&!isset($x959->properties[\'file\'])&&!isset($x959->properties[\'line\'])&&!isset($x959->properties[\'column\'])){$x959->properties[\'file\']=\'<image>/05_string.js\';$x959->properties[\'line\']=299;$x959->properties[\'column\']=9;$x959->attributes[\'file\']=$x959->attributes[\'line\']=$x959->attributes[\'column\']=0;}throw new JSException($x959,299,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x961=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),299,17,\'<image>/05_string.js\');$_TypeError=&$x961[0];list(,$WTypeError,$STypeError,$UTypeError)=$x961;$x962=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x963=$x962($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x963->class)&&$x963->class===\'Error\'&&!isset($x963->properties[\'file\'])&&!isset($x963->properties[\'line\'])&&!isset($x963->properties[\'column\'])){$x963->properties[\'file\']=\'<image>/05_string.js\';$x963->properties[\'line\']=299;$x963->properties[\'column\']=17;$x963->attributes[\'file\']=$x963->attributes[\'line\']=$x963->attributes[\'column\']=0;}throw new JSException($x963,299,17,\'<image>/05_string.js\');}$x960=JS::toObject($_Math,$global);unset($x964,$W964,$S964,$U964);$x965=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x960,JS::toString(\'max\',$global),299,17,\'<image>/05_string.js\');$x964=&$x965[0];list(,$W964,$S964,$U964)=$x965;$x966=JS::toPrimitive($_end,$global);$x967=JS::toPrimitive($_length,$global);if(!(is_object($x964)&&isset($x964->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x970=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),299,17,\'<image>/05_string.js\');$_TypeError=&$x970[0];list(,$WTypeError,$STypeError,$UTypeError)=$x970;$x971=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x972=$x971($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x972->class)&&$x972->class===\'Error\'&&!isset($x972->properties[\'file\'])&&!isset($x972->properties[\'line\'])&&!isset($x972->properties[\'column\'])){$x972->properties[\'file\']=\'<image>/05_string.js\';$x972->properties[\'line\']=299;$x972->properties[\'column\']=17;$x972->attributes[\'file\']=$x972->attributes[\'line\']=$x972->attributes[\'column\']=0;}throw new JSException($x972,299,17,\'<image>/05_string.js\');}$x968=$x964->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x969=$x968($global,$x960,$x964,array((is_string($x966)||is_string($x967)?JS::toString($x966,$global).JS::toString($x967,$global):JS::toNumber($x966,$global)+JS::toNumber($x967,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x969;}unset($_Math,$WMath,$SMath,$UMath);$x973=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),302,10,\'<image>/05_string.js\');$_Math=&$x973[0];list(,$WMath,$SMath,$UMath)=$x973;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x974=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),302,10,\'<image>/05_string.js\');$_ReferenceError=&$x974[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x974;$x975=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,10);$x976=$x975($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x976->class)&&$x976->class===\'Error\'&&!isset($x976->properties[\'file\'])&&!isset($x976->properties[\'line\'])&&!isset($x976->properties[\'column\'])){$x976->properties[\'file\']=\'<image>/05_string.js\';$x976->properties[\'line\']=302;$x976->properties[\'column\']=10;$x976->attributes[\'file\']=$x976->attributes[\'line\']=$x976->attributes[\'column\']=0;}throw new JSException($x976,302,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x978=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,18,\'<image>/05_string.js\');$_TypeError=&$x978[0];list(,$WTypeError,$STypeError,$UTypeError)=$x978;$x979=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x980=$x979($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x980->class)&&$x980->class===\'Error\'&&!isset($x980->properties[\'file\'])&&!isset($x980->properties[\'line\'])&&!isset($x980->properties[\'column\'])){$x980->properties[\'file\']=\'<image>/05_string.js\';$x980->properties[\'line\']=302;$x980->properties[\'column\']=18;$x980->attributes[\'file\']=$x980->attributes[\'line\']=$x980->attributes[\'column\']=0;}throw new JSException($x980,302,18,\'<image>/05_string.js\');}$x977=JS::toObject($_Math,$global);unset($x981,$W981,$S981,$U981);$x982=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x977,JS::toString(\'min\',$global),302,18,\'<image>/05_string.js\');$x981=&$x982[0];list(,$W981,$S981,$U981)=$x982;if(!(is_object($x981)&&isset($x981->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x985=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,18,\'<image>/05_string.js\');$_TypeError=&$x985[0];list(,$WTypeError,$STypeError,$UTypeError)=$x985;$x986=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x987=$x986($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x987->class)&&$x987->class===\'Error\'&&!isset($x987->properties[\'file\'])&&!isset($x987->properties[\'line\'])&&!isset($x987->properties[\'column\'])){$x987->properties[\'file\']=\'<image>/05_string.js\';$x987->properties[\'line\']=302;$x987->properties[\'column\']=18;$x987->attributes[\'file\']=$x987->attributes[\'line\']=$x987->attributes[\'column\']=0;}throw new JSException($x987,302,18,\'<image>/05_string.js\');}$x983=$x981->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x984=$x983($global,$x977,$x981,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x984;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x989=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),303,16,\'<image>/05_string.js\');$_TypeError=&$x989[0];list(,$WTypeError,$STypeError,$UTypeError)=$x989;$x990=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x991=$x990($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x991->class)&&$x991->class===\'Error\'&&!isset($x991->properties[\'file\'])&&!isset($x991->properties[\'line\'])&&!isset($x991->properties[\'column\'])){$x991->properties[\'file\']=\'<image>/05_string.js\';$x991->properties[\'line\']=303;$x991->properties[\'column\']=16;$x991->attributes[\'file\']=$x991->attributes[\'line\']=$x991->attributes[\'column\']=0;}throw new JSException($x991,303,16,\'<image>/05_string.js\');}$x988=JS::toObject($_Math,$global);unset($x992,$W992,$S992,$U992);$x993=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x988,JS::toString(\'min\',$global),303,16,\'<image>/05_string.js\');$x992=&$x993[0];list(,$W992,$S992,$U992)=$x993;if(!(is_object($x992)&&isset($x992->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x996=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),303,16,\'<image>/05_string.js\');$_TypeError=&$x996[0];list(,$WTypeError,$STypeError,$UTypeError)=$x996;$x997=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x998=$x997($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x998->class)&&$x998->class===\'Error\'&&!isset($x998->properties[\'file\'])&&!isset($x998->properties[\'line\'])&&!isset($x998->properties[\'column\'])){$x998->properties[\'file\']=\'<image>/05_string.js\';$x998->properties[\'line\']=303;$x998->properties[\'column\']=16;$x998->attributes[\'file\']=$x998->attributes[\'line\']=$x998->attributes[\'column\']=0;}throw new JSException($x998,303,16,\'<image>/05_string.js\');}$x994=$x992->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x995=$x994($global,$x988,$x992,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x995;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1000=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,21,\'<image>/05_string.js\');$_TypeError=&$x1000[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1000;$x1001=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x1002=$x1001($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1002->class)&&$x1002->class===\'Error\'&&!isset($x1002->properties[\'file\'])&&!isset($x1002->properties[\'line\'])&&!isset($x1002->properties[\'column\'])){$x1002->properties[\'file\']=\'<image>/05_string.js\';$x1002->properties[\'line\']=305;$x1002->properties[\'column\']=21;$x1002->attributes[\'file\']=$x1002->attributes[\'line\']=$x1002->attributes[\'column\']=0;}throw new JSException($x1002,305,21,\'<image>/05_string.js\');}$x999=JS::toObject($_Math,$global);unset($x1003,$W1003,$S1003,$U1003);$x1004=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x999,JS::toString(\'min\',$global),305,21,\'<image>/05_string.js\');$x1003=&$x1004[0];list(,$W1003,$S1003,$U1003)=$x1004;if(!(is_object($x1003)&&isset($x1003->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1007=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,21,\'<image>/05_string.js\');$_TypeError=&$x1007[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1007;$x1008=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x1009=$x1008($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1009->class)&&$x1009->class===\'Error\'&&!isset($x1009->properties[\'file\'])&&!isset($x1009->properties[\'line\'])&&!isset($x1009->properties[\'column\'])){$x1009->properties[\'file\']=\'<image>/05_string.js\';$x1009->properties[\'line\']=305;$x1009->properties[\'column\']=21;$x1009->attributes[\'file\']=$x1009->attributes[\'line\']=$x1009->attributes[\'column\']=0;}throw new JSException($x1009,305,21,\'<image>/05_string.js\');}$x1005=$x1003->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x1006=$x1005($global,$x999,$x1003,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x1006;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1011=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,48,\'<image>/05_string.js\');$_TypeError=&$x1011[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1011;$x1012=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x1013=$x1012($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1013->class)&&$x1013->class===\'Error\'&&!isset($x1013->properties[\'file\'])&&!isset($x1013->properties[\'line\'])&&!isset($x1013->properties[\'column\'])){$x1013->properties[\'file\']=\'<image>/05_string.js\';$x1013->properties[\'line\']=305;$x1013->properties[\'column\']=48;$x1013->attributes[\'file\']=$x1013->attributes[\'line\']=$x1013->attributes[\'column\']=0;}throw new JSException($x1013,305,48,\'<image>/05_string.js\');}$x1010=JS::toObject($_Math,$global);unset($x1014,$W1014,$S1014,$U1014);$x1015=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x1010,JS::toString(\'max\',$global),305,48,\'<image>/05_string.js\');$x1014=&$x1015[0];list(,$W1014,$S1014,$U1014)=$x1015;if(!(is_object($x1014)&&isset($x1014->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1018=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,48,\'<image>/05_string.js\');$_TypeError=&$x1018[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1018;$x1019=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x1020=$x1019($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1020->class)&&$x1020->class===\'Error\'&&!isset($x1020->properties[\'file\'])&&!isset($x1020->properties[\'line\'])&&!isset($x1020->properties[\'column\'])){$x1020->properties[\'file\']=\'<image>/05_string.js\';$x1020->properties[\'line\']=305;$x1020->properties[\'column\']=48;$x1020->attributes[\'file\']=$x1020->attributes[\'line\']=$x1020->attributes[\'column\']=0;}throw new JSException($x1020,305,48,\'<image>/05_string.js\');}$x1016=$x1014->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x1017=$x1016($global,$x1010,$x1014,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x1017;return(string)substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1034 =& $scope->properties['arguments'];
$x1034->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1034->properties[$i] = $args[$i];
$x1034->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['length'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1035 = (((gettype($_length) === gettype(JS::$undefined) && $_length === JS::$undefined))|| (((is_float($_length) || is_int($_length)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_length == JS::$undefined));
if (JS::toBoolean($x1035, $global)) {

return substr($leThis->value,$_start);;
};
return (string) substr($leThis->value,$_start,$_length);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1034=&$scope->properties[\'arguments\'];$x1034->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1034->properties[$i]=$args[$i];$x1034->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'length\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1035=(((gettype($_length)===gettype(JS::$undefined)&&$_length===JS::$undefined))||(((is_float($_length)||is_int($_length))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_length==JS::$undefined));if(JS::toBoolean($x1035,$global)){return substr($leThis->value,$_start);}return(string)substr($leThis->value,$_start,$_length);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1049 =& $scope->properties['arguments'];
$x1049->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1049->properties[$i] = $args[$i];
$x1049->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtolower($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1049=&$scope->properties[\'arguments\'];$x1049->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1049->properties[$i]=$args[$i];$x1049->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtolower($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1078 =& $scope->properties['arguments'];
$x1078->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1078->properties[$i] = $args[$i];
$x1078->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtoupper($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1078=&$scope->properties[\'arguments\'];$x1078->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1078->properties[$i]=$args[$i];$x1078->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtoupper($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1107 =& $scope->properties['arguments'];
$x1107->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1107->properties[$i] = $args[$i];
$x1107->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return trim($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1107=&$scope->properties[\'arguments\'];$x1107->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1107->properties[$i]=$args[$i];$x1107->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return trim($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/05_string.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/05_string.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
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
$x33 = JS::toString('fromCharCode', $global);
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x34 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 16, 21, '<image>/05_string.js');
$_TypeError =& $x34[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x34;
$x35 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x36 = $x35($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x36->class) && $x36->class === 'Error' && !isset($x36->properties['file']) && !isset($x36->properties['line']) && !isset($x36->properties['column'])) {$x36->properties['file'] = '<image>/05_string.js';$x36->properties['line'] = 16;$x36->properties['column'] = 21;$x36->attributes['file'] = $x36->attributes['line'] = $x36->attributes['column'] = 0; }
throw new JSException($x36, 16, 21, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x37, $W37, $S37, $U37);
$x41 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_String, JS::toString($x33, $global), 16, 21, '<image>/05_string.js');
$x37 =& $x41[0]; list(,$W37,$S37,$U37) = $x41;
if ($U37 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties[$x33] = $x37; $x37 =& $_String->properties[$x33]; $_String->attributes[$x33] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U37 = FALSE; $W37 = TRUE; }
if (isset($S37)) {
$x43 = $S37->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x44 = $x43($global, $_String, $S37, array($x32), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x42 = $x44;
} else {
if (!$U37) {$x42 = $x32;if ($W37) { $x37 = $x32; }  }
else { $x42 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array' &&  is_int('fromCharCode') && 'fromCharCode' >= $_String->properties['length']) { $_String->properties['length'] = 'fromCharCode' + 1; };
$x45 = clone JS::$objectTemplate;
$x46 = JS::toString('prototype', $global);
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x47 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 27, 18, '<image>/05_string.js');
$_TypeError =& $x47[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x47;
$x48 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x49 = $x48($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x49->class) && $x49->class === 'Error' && !isset($x49->properties['file']) && !isset($x49->properties['line']) && !isset($x49->properties['column'])) {$x49->properties['file'] = '<image>/05_string.js';$x49->properties['line'] = 27;$x49->properties['column'] = 18;$x49->attributes['file'] = $x49->attributes['line'] = $x49->attributes['column'] = 0; }
throw new JSException($x49, 27, 18, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x50, $W50, $S50, $U50);
$x51 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_String, JS::toString($x46, $global), 27, 18, '<image>/05_string.js');
$x50 =& $x51[0]; list(,$W50,$S50,$U50) = $x51;
if ($U50 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties[$x46] = $x50; $x50 =& $_String->properties[$x46]; $_String->attributes[$x46] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U50 = FALSE; $W50 = TRUE; }
if (isset($S50)) {
$x53 = $S50->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x54 = $x53($global, $_String, $S50, array($x45), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x52 = $x54;
} else {
if (!$U50) {$x52 = $x45;if ($W50) { $x50 = $x45; }  }
else { $x52 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_String->properties['length']) { $_String->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x55 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Object', $global), 28, 51, '<image>/05_string.js');
$_Object =& $x55[0]; list(,$WObject,$SObject,$UObject) = $x55;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x56 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 28, 51, '<image>/05_string.js');
$_ReferenceError =& $x56[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x56;
$x57 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 28, 51);
$x58 = $x57($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x58->class) && $x58->class === 'Error' && !isset($x58->properties['file']) && !isset($x58->properties['line']) && !isset($x58->properties['column'])) {$x58->properties['file'] = '<image>/05_string.js';$x58->properties['line'] = 28;$x58->properties['column'] = 51;$x58->attributes['file'] = $x58->attributes['line'] = $x58->attributes['column'] = 0; }
throw new JSException($x58, 28, 51, '<image>/05_string.js');
}
$_String->properties['prototype']->prototype =$_Object->properties['prototype'];
$_String->properties['prototype']->class = 'String';
$_String->properties['prototype']->extensible = TRUE;
unset($x59, $W59, $S59, $U59);
$x60 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 31, 7, '<image>/05_string.js');
$x59 =& $x60[0]; list(,$W59,$S59,$U59) = $x60;
$x61 = JS::toString('constructor', $global);
if ($x59 === JS::$undefined || $x59 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x62 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 31, 30, '<image>/05_string.js');
$_TypeError =& $x62[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x62;
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x64 = $x63($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x64->class) && $x64->class === 'Error' && !isset($x64->properties['file']) && !isset($x64->properties['line']) && !isset($x64->properties['column'])) {$x64->properties['file'] = '<image>/05_string.js';$x64->properties['line'] = 31;$x64->properties['column'] = 30;$x64->attributes['file'] = $x64->attributes['line'] = $x64->attributes['column'] = 0; }
throw new JSException($x64, 31, 30, '<image>/05_string.js');
}
$x59 = JS::toObject($x59, $global);
unset($x65, $W65, $S65, $U65);
$x66 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x59, JS::toString($x61, $global), 31, 30, '<image>/05_string.js');
$x65 =& $x66[0]; list(,$W65,$S65,$U65) = $x66;
if ($U65 && (!isset($x59->extensible) || $x59->extensible)) {$x59->properties[$x61] = $x65; $x65 =& $x59->properties[$x61]; $x59->attributes[$x61] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U65 = FALSE; $W65 = TRUE; }
if (isset($S65)) {
$x68 = $S65->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x69 = $x68($global, $x59, $S65, array($_String), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x67 = $x69;
} else {
if (!$U65) {$x67 = $_String;if ($W65) { $x65 = $_String; }  }
else { $x67 = JS::$undefined; }
}
if (isset($x59->class) && $x59->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x59->properties['length']) { $x59->properties['length'] = 'constructor' + 1; };
$x84 = clone JS::$functionTemplate; $x84->call = '_465e5538fcb402e27559db40bec8addd_6'; $x84->parameters = array (
); $x84->scope = $scope; $x84->properties['prototype'] = clone JS::$objectTemplate; $x84->attributes['prototype'] = JS::WRITABLE; $x84->properties['prototype']->properties['constructor'] = $x84; $x84->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x84->properties['length'] = 0; $x84->attributes['length'] = 0;
unset($x85, $W85, $S85, $U85);
$x86 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 33, 7, '<image>/05_string.js');
$x85 =& $x86[0]; list(,$W85,$S85,$U85) = $x86;
$x87 = JS::toString('toString', $global);
if ($x85 === JS::$undefined || $x85 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x88 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 33, 27, '<image>/05_string.js');
$_TypeError =& $x88[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x88;
$x89 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x90 = $x89($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x90->class) && $x90->class === 'Error' && !isset($x90->properties['file']) && !isset($x90->properties['line']) && !isset($x90->properties['column'])) {$x90->properties['file'] = '<image>/05_string.js';$x90->properties['line'] = 33;$x90->properties['column'] = 27;$x90->attributes['file'] = $x90->attributes['line'] = $x90->attributes['column'] = 0; }
throw new JSException($x90, 33, 27, '<image>/05_string.js');
}
$x85 = JS::toObject($x85, $global);
unset($x91, $W91, $S91, $U91);
$x92 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x85, JS::toString($x87, $global), 33, 27, '<image>/05_string.js');
$x91 =& $x92[0]; list(,$W91,$S91,$U91) = $x92;
if ($U91 && (!isset($x85->extensible) || $x85->extensible)) {$x85->properties[$x87] = $x91; $x91 =& $x85->properties[$x87]; $x85->attributes[$x87] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U91 = FALSE; $W91 = TRUE; }
if (isset($S91)) {
$x94 = $S91->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x95 = $x94($global, $x85, $S91, array($x84), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x93 = $x95;
} else {
if (!$U91) {$x93 = $x84;if ($W91) { $x91 = $x84; }  }
else { $x93 = JS::$undefined; }
}
if (isset($x85->class) && $x85->class === 'Array' &&  is_int('toString') && 'toString' >= $x85->properties['length']) { $x85->properties['length'] = 'toString' + 1; };
unset($x96, $W96, $S96, $U96);
$x97 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 34, '<image>/05_string.js');
$x96 =& $x97[0]; list(,$W96,$S96,$U96) = $x97;
unset($x98, $W98, $S98, $U98);
$x99 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x96, JS::toString('toString', $global), 41, 44, '<image>/05_string.js');
$x98 =& $x99[0]; list(,$W98,$S98,$U98) = $x99;
unset($x100, $W100, $S100, $U100);
$x101 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 7, '<image>/05_string.js');
$x100 =& $x101[0]; list(,$W100,$S100,$U100) = $x101;
$x102 = JS::toString('valueOf', $global);
if ($x100 === JS::$undefined || $x100 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x103 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 41, 26, '<image>/05_string.js');
$_TypeError =& $x103[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x103;
$x104 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x105 = $x104($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x105->class) && $x105->class === 'Error' && !isset($x105->properties['file']) && !isset($x105->properties['line']) && !isset($x105->properties['column'])) {$x105->properties['file'] = '<image>/05_string.js';$x105->properties['line'] = 41;$x105->properties['column'] = 26;$x105->attributes['file'] = $x105->attributes['line'] = $x105->attributes['column'] = 0; }
throw new JSException($x105, 41, 26, '<image>/05_string.js');
}
$x100 = JS::toObject($x100, $global);
unset($x106, $W106, $S106, $U106);
$x107 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x100, JS::toString($x102, $global), 41, 26, '<image>/05_string.js');
$x106 =& $x107[0]; list(,$W106,$S106,$U106) = $x107;
if ($U106 && (!isset($x100->extensible) || $x100->extensible)) {$x100->properties[$x102] = $x106; $x106 =& $x100->properties[$x102]; $x100->attributes[$x102] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U106 = FALSE; $W106 = TRUE; }
if (isset($S106)) {
$x109 = $S106->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x110 = $x109($global, $x100, $S106, array($x98), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x108 = $x110;
} else {
if (!$U106) {$x108 = $x98;if ($W106) { $x106 = $x98; }  }
else { $x108 = JS::$undefined; }
}
if (isset($x100->class) && $x100->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x100->properties['length']) { $x100->properties['length'] = 'valueOf' + 1; };
$x127 = clone JS::$functionTemplate; $x127->call = '_465e5538fcb402e27559db40bec8addd_7'; $x127->parameters = array (
  0 => 'pos',
); $x127->scope = $scope; $x127->properties['prototype'] = clone JS::$objectTemplate; $x127->attributes['prototype'] = JS::WRITABLE; $x127->properties['prototype']->properties['constructor'] = $x127; $x127->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x127->properties['length'] = 1; $x127->attributes['length'] = 0;
unset($x128, $W128, $S128, $U128);
$x129 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 43, 7, '<image>/05_string.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
$x130 = JS::toString('charAt', $global);
if ($x128 === JS::$undefined || $x128 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x131 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 25, '<image>/05_string.js');
$_TypeError =& $x131[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x131;
$x132 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x133 = $x132($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x133->class) && $x133->class === 'Error' && !isset($x133->properties['file']) && !isset($x133->properties['line']) && !isset($x133->properties['column'])) {$x133->properties['file'] = '<image>/05_string.js';$x133->properties['line'] = 43;$x133->properties['column'] = 25;$x133->attributes['file'] = $x133->attributes['line'] = $x133->attributes['column'] = 0; }
throw new JSException($x133, 43, 25, '<image>/05_string.js');
}
$x128 = JS::toObject($x128, $global);
unset($x134, $W134, $S134, $U134);
$x135 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x128, JS::toString($x130, $global), 43, 25, '<image>/05_string.js');
$x134 =& $x135[0]; list(,$W134,$S134,$U134) = $x135;
if ($U134 && (!isset($x128->extensible) || $x128->extensible)) {$x128->properties[$x130] = $x134; $x134 =& $x128->properties[$x130]; $x128->attributes[$x130] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U134 = FALSE; $W134 = TRUE; }
if (isset($S134)) {
$x137 = $S134->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x138 = $x137($global, $x128, $S134, array($x127), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x136 = $x138;
} else {
if (!$U134) {$x136 = $x127;if ($W134) { $x134 = $x127; }  }
else { $x136 = JS::$undefined; }
}
if (isset($x128->class) && $x128->class === 'Array' &&  is_int('charAt') && 'charAt' >= $x128->properties['length']) { $x128->properties['length'] = 'charAt' + 1; };
$x170 = clone JS::$functionTemplate; $x170->call = '_465e5538fcb402e27559db40bec8addd_8'; $x170->parameters = array (
  0 => 'pos',
); $x170->scope = $scope; $x170->properties['prototype'] = clone JS::$objectTemplate; $x170->attributes['prototype'] = JS::WRITABLE; $x170->properties['prototype']->properties['constructor'] = $x170; $x170->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x170->properties['length'] = 1; $x170->attributes['length'] = 0;
unset($x171, $W171, $S171, $U171);
$x172 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 53, 7, '<image>/05_string.js');
$x171 =& $x172[0]; list(,$W171,$S171,$U171) = $x172;
$x173 = JS::toString('charCodeAt', $global);
if ($x171 === JS::$undefined || $x171 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x174 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 53, 29, '<image>/05_string.js');
$_TypeError =& $x174[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x174;
$x175 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x176 = $x175($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x176->class) && $x176->class === 'Error' && !isset($x176->properties['file']) && !isset($x176->properties['line']) && !isset($x176->properties['column'])) {$x176->properties['file'] = '<image>/05_string.js';$x176->properties['line'] = 53;$x176->properties['column'] = 29;$x176->attributes['file'] = $x176->attributes['line'] = $x176->attributes['column'] = 0; }
throw new JSException($x176, 53, 29, '<image>/05_string.js');
}
$x171 = JS::toObject($x171, $global);
unset($x177, $W177, $S177, $U177);
$x178 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x171, JS::toString($x173, $global), 53, 29, '<image>/05_string.js');
$x177 =& $x178[0]; list(,$W177,$S177,$U177) = $x178;
if ($U177 && (!isset($x171->extensible) || $x171->extensible)) {$x171->properties[$x173] = $x177; $x177 =& $x171->properties[$x173]; $x171->attributes[$x173] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U177 = FALSE; $W177 = TRUE; }
if (isset($S177)) {
$x180 = $S177->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x181 = $x180($global, $x171, $S177, array($x170), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x179 = $x181;
} else {
if (!$U177) {$x179 = $x170;if ($W177) { $x177 = $x170; }  }
else { $x179 = JS::$undefined; }
}
if (isset($x171->class) && $x171->class === 'Array' &&  is_int('charCodeAt') && 'charCodeAt' >= $x171->properties['length']) { $x171->properties['length'] = 'charCodeAt' + 1; };
$x201 = clone JS::$functionTemplate; $x201->call = '_465e5538fcb402e27559db40bec8addd_9'; $x201->parameters = array (
  0 => 'string',
); $x201->scope = $scope; $x201->properties['prototype'] = clone JS::$objectTemplate; $x201->attributes['prototype'] = JS::WRITABLE; $x201->properties['prototype']->properties['constructor'] = $x201; $x201->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x201->properties['length'] = 1; $x201->attributes['length'] = 0;
unset($x202, $W202, $S202, $U202);
$x203 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 65, 7, '<image>/05_string.js');
$x202 =& $x203[0]; list(,$W202,$S202,$U202) = $x203;
$x204 = JS::toString('concat', $global);
if ($x202 === JS::$undefined || $x202 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x205 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 65, 25, '<image>/05_string.js');
$_TypeError =& $x205[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x205;
$x206 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x207 = $x206($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x207->class) && $x207->class === 'Error' && !isset($x207->properties['file']) && !isset($x207->properties['line']) && !isset($x207->properties['column'])) {$x207->properties['file'] = '<image>/05_string.js';$x207->properties['line'] = 65;$x207->properties['column'] = 25;$x207->attributes['file'] = $x207->attributes['line'] = $x207->attributes['column'] = 0; }
throw new JSException($x207, 65, 25, '<image>/05_string.js');
}
$x202 = JS::toObject($x202, $global);
unset($x208, $W208, $S208, $U208);
$x209 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x202, JS::toString($x204, $global), 65, 25, '<image>/05_string.js');
$x208 =& $x209[0]; list(,$W208,$S208,$U208) = $x209;
if ($U208 && (!isset($x202->extensible) || $x202->extensible)) {$x202->properties[$x204] = $x208; $x208 =& $x202->properties[$x204]; $x202->attributes[$x204] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U208 = FALSE; $W208 = TRUE; }
if (isset($S208)) {
$x211 = $S208->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x212 = $x211($global, $x202, $S208, array($x201), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x210 = $x212;
} else {
if (!$U208) {$x210 = $x201;if ($W208) { $x208 = $x201; }  }
else { $x210 = JS::$undefined; }
}
if (isset($x202->class) && $x202->class === 'Array' &&  is_int('concat') && 'concat' >= $x202->properties['length']) { $x202->properties['length'] = 'concat' + 1; };
$x244 = clone JS::$functionTemplate; $x244->call = '_465e5538fcb402e27559db40bec8addd_10'; $x244->parameters = array (
  0 => 'search',
  1 => 'position',
); $x244->scope = $scope; $x244->properties['prototype'] = clone JS::$objectTemplate; $x244->attributes['prototype'] = JS::WRITABLE; $x244->properties['prototype']->properties['constructor'] = $x244; $x244->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x244->properties['length'] = 2; $x244->attributes['length'] = 0;
unset($x245, $W245, $S245, $U245);
$x246 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 75, 7, '<image>/05_string.js');
$x245 =& $x246[0]; list(,$W245,$S245,$U245) = $x246;
$x247 = JS::toString('indexOf', $global);
if ($x245 === JS::$undefined || $x245 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x248 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 75, 26, '<image>/05_string.js');
$_TypeError =& $x248[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x248;
$x249 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x250 = $x249($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x250->class) && $x250->class === 'Error' && !isset($x250->properties['file']) && !isset($x250->properties['line']) && !isset($x250->properties['column'])) {$x250->properties['file'] = '<image>/05_string.js';$x250->properties['line'] = 75;$x250->properties['column'] = 26;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 75, 26, '<image>/05_string.js');
}
$x245 = JS::toObject($x245, $global);
unset($x251, $W251, $S251, $U251);
$x252 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x245, JS::toString($x247, $global), 75, 26, '<image>/05_string.js');
$x251 =& $x252[0]; list(,$W251,$S251,$U251) = $x252;
if ($U251 && (!isset($x245->extensible) || $x245->extensible)) {$x245->properties[$x247] = $x251; $x251 =& $x245->properties[$x247]; $x245->attributes[$x247] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U251 = FALSE; $W251 = TRUE; }
if (isset($S251)) {
$x254 = $S251->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x255 = $x254($global, $x245, $S251, array($x244), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x253 = $x255;
} else {
if (!$U251) {$x253 = $x244;if ($W251) { $x251 = $x244; }  }
else { $x253 = JS::$undefined; }
}
if (isset($x245->class) && $x245->class === 'Array' &&  is_int('indexOf') && 'indexOf' >= $x245->properties['length']) { $x245->properties['length'] = 'indexOf' + 1; };
$x287 = clone JS::$functionTemplate; $x287->call = '_465e5538fcb402e27559db40bec8addd_11'; $x287->parameters = array (
  0 => 'search',
  1 => 'position',
); $x287->scope = $scope; $x287->properties['prototype'] = clone JS::$objectTemplate; $x287->attributes['prototype'] = JS::WRITABLE; $x287->properties['prototype']->properties['constructor'] = $x287; $x287->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x287->properties['length'] = 2; $x287->attributes['length'] = 0;
unset($x288, $W288, $S288, $U288);
$x289 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 90, 7, '<image>/05_string.js');
$x288 =& $x289[0]; list(,$W288,$S288,$U288) = $x289;
$x290 = JS::toString('lastIndexOf', $global);
if ($x288 === JS::$undefined || $x288 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x291 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 90, 30, '<image>/05_string.js');
$_TypeError =& $x291[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x291;
$x292 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x293 = $x292($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x293->class) && $x293->class === 'Error' && !isset($x293->properties['file']) && !isset($x293->properties['line']) && !isset($x293->properties['column'])) {$x293->properties['file'] = '<image>/05_string.js';$x293->properties['line'] = 90;$x293->properties['column'] = 30;$x293->attributes['file'] = $x293->attributes['line'] = $x293->attributes['column'] = 0; }
throw new JSException($x293, 90, 30, '<image>/05_string.js');
}
$x288 = JS::toObject($x288, $global);
unset($x294, $W294, $S294, $U294);
$x295 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x288, JS::toString($x290, $global), 90, 30, '<image>/05_string.js');
$x294 =& $x295[0]; list(,$W294,$S294,$U294) = $x295;
if ($U294 && (!isset($x288->extensible) || $x288->extensible)) {$x288->properties[$x290] = $x294; $x294 =& $x288->properties[$x290]; $x288->attributes[$x290] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U294 = FALSE; $W294 = TRUE; }
if (isset($S294)) {
$x297 = $S294->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x298 = $x297($global, $x288, $S294, array($x287), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x296 = $x298;
} else {
if (!$U294) {$x296 = $x287;if ($W294) { $x294 = $x287; }  }
else { $x296 = JS::$undefined; }
}
if (isset($x288->class) && $x288->class === 'Array' &&  is_int('lastIndexOf') && 'lastIndexOf' >= $x288->properties['length']) { $x288->properties['length'] = 'lastIndexOf' + 1; };
$x301 = clone JS::$functionTemplate; $x301->call = '_465e5538fcb402e27559db40bec8addd_12'; $x301->parameters = array (
  0 => 'that',
); $x301->scope = $scope; $x301->properties['prototype'] = clone JS::$objectTemplate; $x301->attributes['prototype'] = JS::WRITABLE; $x301->properties['prototype']->properties['constructor'] = $x301; $x301->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x301->properties['length'] = 1; $x301->attributes['length'] = 0;
unset($x302, $W302, $S302, $U302);
$x303 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 105, 7, '<image>/05_string.js');
$x302 =& $x303[0]; list(,$W302,$S302,$U302) = $x303;
$x304 = JS::toString('localeCompare', $global);
if ($x302 === JS::$undefined || $x302 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x305 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 32, '<image>/05_string.js');
$_TypeError =& $x305[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x305;
$x306 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x307 = $x306($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x307->class) && $x307->class === 'Error' && !isset($x307->properties['file']) && !isset($x307->properties['line']) && !isset($x307->properties['column'])) {$x307->properties['file'] = '<image>/05_string.js';$x307->properties['line'] = 105;$x307->properties['column'] = 32;$x307->attributes['file'] = $x307->attributes['line'] = $x307->attributes['column'] = 0; }
throw new JSException($x307, 105, 32, '<image>/05_string.js');
}
$x302 = JS::toObject($x302, $global);
unset($x308, $W308, $S308, $U308);
$x309 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x302, JS::toString($x304, $global), 105, 32, '<image>/05_string.js');
$x308 =& $x309[0]; list(,$W308,$S308,$U308) = $x309;
if ($U308 && (!isset($x302->extensible) || $x302->extensible)) {$x302->properties[$x304] = $x308; $x308 =& $x302->properties[$x304]; $x302->attributes[$x304] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U308 = FALSE; $W308 = TRUE; }
if (isset($S308)) {
$x311 = $S308->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x312 = $x311($global, $x302, $S308, array($x301), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x310 = $x312;
} else {
if (!$U308) {$x310 = $x301;if ($W308) { $x308 = $x301; }  }
else { $x310 = JS::$undefined; }
}
if (isset($x302->class) && $x302->class === 'Array' &&  is_int('localeCompare') && 'localeCompare' >= $x302->properties['length']) { $x302->properties['length'] = 'localeCompare' + 1; };
$x399 = clone JS::$functionTemplate; $x399->call = '_465e5538fcb402e27559db40bec8addd_13'; $x399->parameters = array (
  0 => 'regexp',
); $x399->scope = $scope; $x399->properties['prototype'] = clone JS::$objectTemplate; $x399->attributes['prototype'] = JS::WRITABLE; $x399->properties['prototype']->properties['constructor'] = $x399; $x399->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x399->properties['length'] = 1; $x399->attributes['length'] = 0;
unset($x400, $W400, $S400, $U400);
$x401 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 109, 7, '<image>/05_string.js');
$x400 =& $x401[0]; list(,$W400,$S400,$U400) = $x401;
$x402 = JS::toString('match', $global);
if ($x400 === JS::$undefined || $x400 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x403 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 24, '<image>/05_string.js');
$_TypeError =& $x403[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x403;
$x404 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x405 = $x404($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x405->class) && $x405->class === 'Error' && !isset($x405->properties['file']) && !isset($x405->properties['line']) && !isset($x405->properties['column'])) {$x405->properties['file'] = '<image>/05_string.js';$x405->properties['line'] = 109;$x405->properties['column'] = 24;$x405->attributes['file'] = $x405->attributes['line'] = $x405->attributes['column'] = 0; }
throw new JSException($x405, 109, 24, '<image>/05_string.js');
}
$x400 = JS::toObject($x400, $global);
unset($x406, $W406, $S406, $U406);
$x407 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x400, JS::toString($x402, $global), 109, 24, '<image>/05_string.js');
$x406 =& $x407[0]; list(,$W406,$S406,$U406) = $x407;
if ($U406 && (!isset($x400->extensible) || $x400->extensible)) {$x400->properties[$x402] = $x406; $x406 =& $x400->properties[$x402]; $x400->attributes[$x402] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U406 = FALSE; $W406 = TRUE; }
if (isset($S406)) {
$x409 = $S406->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x410 = $x409($global, $x400, $S406, array($x399), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x408 = $x410;
} else {
if (!$U406) {$x408 = $x399;if ($W406) { $x406 = $x399; }  }
else { $x408 = JS::$undefined; }
}
if (isset($x400->class) && $x400->class === 'Array' &&  is_int('match') && 'match' >= $x400->properties['length']) { $x400->properties['length'] = 'match' + 1; };
$x581 = clone JS::$functionTemplate; $x581->call = '_465e5538fcb402e27559db40bec8addd_14'; $x581->parameters = array (
  0 => 'search',
  1 => 'replace',
); $x581->scope = $scope; $x581->properties['prototype'] = clone JS::$objectTemplate; $x581->attributes['prototype'] = JS::WRITABLE; $x581->properties['prototype']->properties['constructor'] = $x581; $x581->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x581->properties['length'] = 2; $x581->attributes['length'] = 0;
unset($x582, $W582, $S582, $U582);
$x583 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 144, 7, '<image>/05_string.js');
$x582 =& $x583[0]; list(,$W582,$S582,$U582) = $x583;
$x584 = JS::toString('replace', $global);
if ($x582 === JS::$undefined || $x582 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x585 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 144, 26, '<image>/05_string.js');
$_TypeError =& $x585[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x585;
$x586 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x587 = $x586($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x587->class) && $x587->class === 'Error' && !isset($x587->properties['file']) && !isset($x587->properties['line']) && !isset($x587->properties['column'])) {$x587->properties['file'] = '<image>/05_string.js';$x587->properties['line'] = 144;$x587->properties['column'] = 26;$x587->attributes['file'] = $x587->attributes['line'] = $x587->attributes['column'] = 0; }
throw new JSException($x587, 144, 26, '<image>/05_string.js');
}
$x582 = JS::toObject($x582, $global);
unset($x588, $W588, $S588, $U588);
$x589 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x582, JS::toString($x584, $global), 144, 26, '<image>/05_string.js');
$x588 =& $x589[0]; list(,$W588,$S588,$U588) = $x589;
if ($U588 && (!isset($x582->extensible) || $x582->extensible)) {$x582->properties[$x584] = $x588; $x588 =& $x582->properties[$x584]; $x582->attributes[$x584] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U588 = FALSE; $W588 = TRUE; }
if (isset($S588)) {
$x591 = $S588->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x592 = $x591($global, $x582, $S588, array($x581), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x590 = $x592;
} else {
if (!$U588) {$x590 = $x581;if ($W588) { $x588 = $x581; }  }
else { $x590 = JS::$undefined; }
}
if (isset($x582->class) && $x582->class === 'Array' &&  is_int('replace') && 'replace' >= $x582->properties['length']) { $x582->properties['length'] = 'replace' + 1; };
$x632 = clone JS::$functionTemplate; $x632->call = '_465e5538fcb402e27559db40bec8addd_16'; $x632->parameters = array (
  0 => 'search',
); $x632->scope = $scope; $x632->properties['prototype'] = clone JS::$objectTemplate; $x632->attributes['prototype'] = JS::WRITABLE; $x632->properties['prototype']->properties['constructor'] = $x632; $x632->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x632->properties['length'] = 1; $x632->attributes['length'] = 0;
unset($x633, $W633, $S633, $U633);
$x634 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 189, 7, '<image>/05_string.js');
$x633 =& $x634[0]; list(,$W633,$S633,$U633) = $x634;
$x635 = JS::toString('search', $global);
if ($x633 === JS::$undefined || $x633 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x636 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 189, 25, '<image>/05_string.js');
$_TypeError =& $x636[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x636;
$x637 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x638 = $x637($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x638->class) && $x638->class === 'Error' && !isset($x638->properties['file']) && !isset($x638->properties['line']) && !isset($x638->properties['column'])) {$x638->properties['file'] = '<image>/05_string.js';$x638->properties['line'] = 189;$x638->properties['column'] = 25;$x638->attributes['file'] = $x638->attributes['line'] = $x638->attributes['column'] = 0; }
throw new JSException($x638, 189, 25, '<image>/05_string.js');
}
$x633 = JS::toObject($x633, $global);
unset($x639, $W639, $S639, $U639);
$x640 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x633, JS::toString($x635, $global), 189, 25, '<image>/05_string.js');
$x639 =& $x640[0]; list(,$W639,$S639,$U639) = $x640;
if ($U639 && (!isset($x633->extensible) || $x633->extensible)) {$x633->properties[$x635] = $x639; $x639 =& $x633->properties[$x635]; $x633->attributes[$x635] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U639 = FALSE; $W639 = TRUE; }
if (isset($S639)) {
$x642 = $S639->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x643 = $x642($global, $x633, $S639, array($x632), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x641 = $x643;
} else {
if (!$U639) {$x641 = $x632;if ($W639) { $x639 = $x632; }  }
else { $x641 = JS::$undefined; }
}
if (isset($x633->class) && $x633->class === 'Array' &&  is_int('search') && 'search' >= $x633->properties['length']) { $x633->properties['length'] = 'search' + 1; };
$x693 = clone JS::$functionTemplate; $x693->call = '_465e5538fcb402e27559db40bec8addd_17'; $x693->parameters = array (
  0 => 'start',
  1 => 'end',
); $x693->scope = $scope; $x693->properties['prototype'] = clone JS::$objectTemplate; $x693->attributes['prototype'] = JS::WRITABLE; $x693->properties['prototype']->properties['constructor'] = $x693; $x693->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x693->properties['length'] = 2; $x693->attributes['length'] = 0;
unset($x694, $W694, $S694, $U694);
$x695 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 206, 7, '<image>/05_string.js');
$x694 =& $x695[0]; list(,$W694,$S694,$U694) = $x695;
$x696 = JS::toString('slice', $global);
if ($x694 === JS::$undefined || $x694 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x697 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 206, 24, '<image>/05_string.js');
$_TypeError =& $x697[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x697;
$x698 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x699 = $x698($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x699->class) && $x699->class === 'Error' && !isset($x699->properties['file']) && !isset($x699->properties['line']) && !isset($x699->properties['column'])) {$x699->properties['file'] = '<image>/05_string.js';$x699->properties['line'] = 206;$x699->properties['column'] = 24;$x699->attributes['file'] = $x699->attributes['line'] = $x699->attributes['column'] = 0; }
throw new JSException($x699, 206, 24, '<image>/05_string.js');
}
$x694 = JS::toObject($x694, $global);
unset($x700, $W700, $S700, $U700);
$x701 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x694, JS::toString($x696, $global), 206, 24, '<image>/05_string.js');
$x700 =& $x701[0]; list(,$W700,$S700,$U700) = $x701;
if ($U700 && (!isset($x694->extensible) || $x694->extensible)) {$x694->properties[$x696] = $x700; $x700 =& $x694->properties[$x696]; $x694->attributes[$x696] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U700 = FALSE; $W700 = TRUE; }
if (isset($S700)) {
$x703 = $S700->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x704 = $x703($global, $x694, $S700, array($x693), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x702 = $x704;
} else {
if (!$U700) {$x702 = $x693;if ($W700) { $x700 = $x693; }  }
else { $x702 = JS::$undefined; }
}
if (isset($x694->class) && $x694->class === 'Array' &&  is_int('slice') && 'slice' >= $x694->properties['length']) { $x694->properties['length'] = 'slice' + 1; };
$x912 = clone JS::$functionTemplate; $x912->call = '_465e5538fcb402e27559db40bec8addd_18'; $x912->parameters = array (
  0 => 'separator',
  1 => 'limit',
); $x912->scope = $scope; $x912->properties['prototype'] = clone JS::$objectTemplate; $x912->attributes['prototype'] = JS::WRITABLE; $x912->properties['prototype']->properties['constructor'] = $x912; $x912->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x912->properties['length'] = 2; $x912->attributes['length'] = 0;
unset($x913, $W913, $S913, $U913);
$x914 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 228, 7, '<image>/05_string.js');
$x913 =& $x914[0]; list(,$W913,$S913,$U913) = $x914;
$x915 = JS::toString('split', $global);
if ($x913 === JS::$undefined || $x913 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x916 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 228, 24, '<image>/05_string.js');
$_TypeError =& $x916[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x916;
$x917 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x918 = $x917($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x918->class) && $x918->class === 'Error' && !isset($x918->properties['file']) && !isset($x918->properties['line']) && !isset($x918->properties['column'])) {$x918->properties['file'] = '<image>/05_string.js';$x918->properties['line'] = 228;$x918->properties['column'] = 24;$x918->attributes['file'] = $x918->attributes['line'] = $x918->attributes['column'] = 0; }
throw new JSException($x918, 228, 24, '<image>/05_string.js');
}
$x913 = JS::toObject($x913, $global);
unset($x919, $W919, $S919, $U919);
$x920 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x913, JS::toString($x915, $global), 228, 24, '<image>/05_string.js');
$x919 =& $x920[0]; list(,$W919,$S919,$U919) = $x920;
if ($U919 && (!isset($x913->extensible) || $x913->extensible)) {$x913->properties[$x915] = $x919; $x919 =& $x913->properties[$x915]; $x913->attributes[$x915] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U919 = FALSE; $W919 = TRUE; }
if (isset($S919)) {
$x922 = $S919->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x923 = $x922($global, $x913, $S919, array($x912), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x921 = $x923;
} else {
if (!$U919) {$x921 = $x912;if ($W919) { $x919 = $x912; }  }
else { $x921 = JS::$undefined; }
}
if (isset($x913->class) && $x913->class === 'Array' &&  is_int('split') && 'split' >= $x913->properties['length']) { $x913->properties['length'] = 'split' + 1; };
$x1021 = clone JS::$functionTemplate; $x1021->call = '_465e5538fcb402e27559db40bec8addd_19'; $x1021->parameters = array (
  0 => 'start',
  1 => 'end',
); $x1021->scope = $scope; $x1021->properties['prototype'] = clone JS::$objectTemplate; $x1021->attributes['prototype'] = JS::WRITABLE; $x1021->properties['prototype']->properties['constructor'] = $x1021; $x1021->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1021->properties['length'] = 2; $x1021->attributes['length'] = 0;
unset($x1022, $W1022, $S1022, $U1022);
$x1023 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 283, 7, '<image>/05_string.js');
$x1022 =& $x1023[0]; list(,$W1022,$S1022,$U1022) = $x1023;
$x1024 = JS::toString('substring', $global);
if ($x1022 === JS::$undefined || $x1022 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1025 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 283, 28, '<image>/05_string.js');
$_TypeError =& $x1025[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1025;
$x1026 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x1027 = $x1026($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1027->class) && $x1027->class === 'Error' && !isset($x1027->properties['file']) && !isset($x1027->properties['line']) && !isset($x1027->properties['column'])) {$x1027->properties['file'] = '<image>/05_string.js';$x1027->properties['line'] = 283;$x1027->properties['column'] = 28;$x1027->attributes['file'] = $x1027->attributes['line'] = $x1027->attributes['column'] = 0; }
throw new JSException($x1027, 283, 28, '<image>/05_string.js');
}
$x1022 = JS::toObject($x1022, $global);
unset($x1028, $W1028, $S1028, $U1028);
$x1029 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1022, JS::toString($x1024, $global), 283, 28, '<image>/05_string.js');
$x1028 =& $x1029[0]; list(,$W1028,$S1028,$U1028) = $x1029;
if ($U1028 && (!isset($x1022->extensible) || $x1022->extensible)) {$x1022->properties[$x1024] = $x1028; $x1028 =& $x1022->properties[$x1024]; $x1022->attributes[$x1024] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1028 = FALSE; $W1028 = TRUE; }
if (isset($S1028)) {
$x1031 = $S1028->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x1032 = $x1031($global, $x1022, $S1028, array($x1021), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1030 = $x1032;
} else {
if (!$U1028) {$x1030 = $x1021;if ($W1028) { $x1028 = $x1021; }  }
else { $x1030 = JS::$undefined; }
}
if (isset($x1022->class) && $x1022->class === 'Array' &&  is_int('substring') && 'substring' >= $x1022->properties['length']) { $x1022->properties['length'] = 'substring' + 1; };
$x1036 = clone JS::$functionTemplate; $x1036->call = '_465e5538fcb402e27559db40bec8addd_20'; $x1036->parameters = array (
  0 => 'start',
  1 => 'length',
); $x1036->scope = $scope; $x1036->properties['prototype'] = clone JS::$objectTemplate; $x1036->attributes['prototype'] = JS::WRITABLE; $x1036->properties['prototype']->properties['constructor'] = $x1036; $x1036->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1036->properties['length'] = 2; $x1036->attributes['length'] = 0;
unset($x1037, $W1037, $S1037, $U1037);
$x1038 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 311, 7, '<image>/05_string.js');
$x1037 =& $x1038[0]; list(,$W1037,$S1037,$U1037) = $x1038;
$x1039 = JS::toString('substr', $global);
if ($x1037 === JS::$undefined || $x1037 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1040 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 311, 25, '<image>/05_string.js');
$_TypeError =& $x1040[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1040;
$x1041 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1042 = $x1041($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1042->class) && $x1042->class === 'Error' && !isset($x1042->properties['file']) && !isset($x1042->properties['line']) && !isset($x1042->properties['column'])) {$x1042->properties['file'] = '<image>/05_string.js';$x1042->properties['line'] = 311;$x1042->properties['column'] = 25;$x1042->attributes['file'] = $x1042->attributes['line'] = $x1042->attributes['column'] = 0; }
throw new JSException($x1042, 311, 25, '<image>/05_string.js');
}
$x1037 = JS::toObject($x1037, $global);
unset($x1043, $W1043, $S1043, $U1043);
$x1044 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1037, JS::toString($x1039, $global), 311, 25, '<image>/05_string.js');
$x1043 =& $x1044[0]; list(,$W1043,$S1043,$U1043) = $x1044;
if ($U1043 && (!isset($x1037->extensible) || $x1037->extensible)) {$x1037->properties[$x1039] = $x1043; $x1043 =& $x1037->properties[$x1039]; $x1037->attributes[$x1039] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1043 = FALSE; $W1043 = TRUE; }
if (isset($S1043)) {
$x1046 = $S1043->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1047 = $x1046($global, $x1037, $S1043, array($x1036), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1045 = $x1047;
} else {
if (!$U1043) {$x1045 = $x1036;if ($W1043) { $x1043 = $x1036; }  }
else { $x1045 = JS::$undefined; }
}
if (isset($x1037->class) && $x1037->class === 'Array' &&  is_int('substr') && 'substr' >= $x1037->properties['length']) { $x1037->properties['length'] = 'substr' + 1; };
$x1050 = clone JS::$functionTemplate; $x1050->call = '_465e5538fcb402e27559db40bec8addd_21'; $x1050->parameters = array (
); $x1050->scope = $scope; $x1050->properties['prototype'] = clone JS::$objectTemplate; $x1050->attributes['prototype'] = JS::WRITABLE; $x1050->properties['prototype']->properties['constructor'] = $x1050; $x1050->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1050->properties['length'] = 0; $x1050->attributes['length'] = 0;
unset($x1051, $W1051, $S1051, $U1051);
$x1052 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 319, 7, '<image>/05_string.js');
$x1051 =& $x1052[0]; list(,$W1051,$S1051,$U1051) = $x1052;
$x1053 = JS::toString('toLowerCase', $global);
if ($x1051 === JS::$undefined || $x1051 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1054 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 319, 30, '<image>/05_string.js');
$_TypeError =& $x1054[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1054;
$x1055 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1056 = $x1055($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1056->class) && $x1056->class === 'Error' && !isset($x1056->properties['file']) && !isset($x1056->properties['line']) && !isset($x1056->properties['column'])) {$x1056->properties['file'] = '<image>/05_string.js';$x1056->properties['line'] = 319;$x1056->properties['column'] = 30;$x1056->attributes['file'] = $x1056->attributes['line'] = $x1056->attributes['column'] = 0; }
throw new JSException($x1056, 319, 30, '<image>/05_string.js');
}
$x1051 = JS::toObject($x1051, $global);
unset($x1057, $W1057, $S1057, $U1057);
$x1058 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1051, JS::toString($x1053, $global), 319, 30, '<image>/05_string.js');
$x1057 =& $x1058[0]; list(,$W1057,$S1057,$U1057) = $x1058;
if ($U1057 && (!isset($x1051->extensible) || $x1051->extensible)) {$x1051->properties[$x1053] = $x1057; $x1057 =& $x1051->properties[$x1053]; $x1051->attributes[$x1053] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1057 = FALSE; $W1057 = TRUE; }
if (isset($S1057)) {
$x1060 = $S1057->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1061 = $x1060($global, $x1051, $S1057, array($x1050), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1059 = $x1061;
} else {
if (!$U1057) {$x1059 = $x1050;if ($W1057) { $x1057 = $x1050; }  }
else { $x1059 = JS::$undefined; }
}
if (isset($x1051->class) && $x1051->class === 'Array' &&  is_int('toLowerCase') && 'toLowerCase' >= $x1051->properties['length']) { $x1051->properties['length'] = 'toLowerCase' + 1; };
unset($x1062, $W1062, $S1062, $U1062);
$x1063 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 323, 44, '<image>/05_string.js');
$x1062 =& $x1063[0]; list(,$W1062,$S1062,$U1062) = $x1063;
unset($x1064, $W1064, $S1064, $U1064);
$x1065 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1062, JS::toString('toLowerCase', $global), 323, 54, '<image>/05_string.js');
$x1064 =& $x1065[0]; list(,$W1064,$S1064,$U1064) = $x1065;
unset($x1066, $W1066, $S1066, $U1066);
$x1067 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 323, 7, '<image>/05_string.js');
$x1066 =& $x1067[0]; list(,$W1066,$S1066,$U1066) = $x1067;
$x1068 = JS::toString('toLocaleLowerCase', $global);
if ($x1066 === JS::$undefined || $x1066 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1069 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 323, 36, '<image>/05_string.js');
$_TypeError =& $x1069[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1069;
$x1070 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1071 = $x1070($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1071->class) && $x1071->class === 'Error' && !isset($x1071->properties['file']) && !isset($x1071->properties['line']) && !isset($x1071->properties['column'])) {$x1071->properties['file'] = '<image>/05_string.js';$x1071->properties['line'] = 323;$x1071->properties['column'] = 36;$x1071->attributes['file'] = $x1071->attributes['line'] = $x1071->attributes['column'] = 0; }
throw new JSException($x1071, 323, 36, '<image>/05_string.js');
}
$x1066 = JS::toObject($x1066, $global);
unset($x1072, $W1072, $S1072, $U1072);
$x1073 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1066, JS::toString($x1068, $global), 323, 36, '<image>/05_string.js');
$x1072 =& $x1073[0]; list(,$W1072,$S1072,$U1072) = $x1073;
if ($U1072 && (!isset($x1066->extensible) || $x1066->extensible)) {$x1066->properties[$x1068] = $x1072; $x1072 =& $x1066->properties[$x1068]; $x1066->attributes[$x1068] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1072 = FALSE; $W1072 = TRUE; }
if (isset($S1072)) {
$x1075 = $S1072->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1076 = $x1075($global, $x1066, $S1072, array($x1064), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1074 = $x1076;
} else {
if (!$U1072) {$x1074 = $x1064;if ($W1072) { $x1072 = $x1064; }  }
else { $x1074 = JS::$undefined; }
}
if (isset($x1066->class) && $x1066->class === 'Array' &&  is_int('toLocaleLowerCase') && 'toLocaleLowerCase' >= $x1066->properties['length']) { $x1066->properties['length'] = 'toLocaleLowerCase' + 1; };
$x1079 = clone JS::$functionTemplate; $x1079->call = '_465e5538fcb402e27559db40bec8addd_22'; $x1079->parameters = array (
); $x1079->scope = $scope; $x1079->properties['prototype'] = clone JS::$objectTemplate; $x1079->attributes['prototype'] = JS::WRITABLE; $x1079->properties['prototype']->properties['constructor'] = $x1079; $x1079->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1079->properties['length'] = 0; $x1079->attributes['length'] = 0;
unset($x1080, $W1080, $S1080, $U1080);
$x1081 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 325, 7, '<image>/05_string.js');
$x1080 =& $x1081[0]; list(,$W1080,$S1080,$U1080) = $x1081;
$x1082 = JS::toString('toUpperCase', $global);
if ($x1080 === JS::$undefined || $x1080 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1083 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 325, 30, '<image>/05_string.js');
$_TypeError =& $x1083[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1083;
$x1084 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1085 = $x1084($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1085->class) && $x1085->class === 'Error' && !isset($x1085->properties['file']) && !isset($x1085->properties['line']) && !isset($x1085->properties['column'])) {$x1085->properties['file'] = '<image>/05_string.js';$x1085->properties['line'] = 325;$x1085->properties['column'] = 30;$x1085->attributes['file'] = $x1085->attributes['line'] = $x1085->attributes['column'] = 0; }
throw new JSException($x1085, 325, 30, '<image>/05_string.js');
}
$x1080 = JS::toObject($x1080, $global);
unset($x1086, $W1086, $S1086, $U1086);
$x1087 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1080, JS::toString($x1082, $global), 325, 30, '<image>/05_string.js');
$x1086 =& $x1087[0]; list(,$W1086,$S1086,$U1086) = $x1087;
if ($U1086 && (!isset($x1080->extensible) || $x1080->extensible)) {$x1080->properties[$x1082] = $x1086; $x1086 =& $x1080->properties[$x1082]; $x1080->attributes[$x1082] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1086 = FALSE; $W1086 = TRUE; }
if (isset($S1086)) {
$x1089 = $S1086->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1090 = $x1089($global, $x1080, $S1086, array($x1079), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1088 = $x1090;
} else {
if (!$U1086) {$x1088 = $x1079;if ($W1086) { $x1086 = $x1079; }  }
else { $x1088 = JS::$undefined; }
}
if (isset($x1080->class) && $x1080->class === 'Array' &&  is_int('toUpperCase') && 'toUpperCase' >= $x1080->properties['length']) { $x1080->properties['length'] = 'toUpperCase' + 1; };
unset($x1091, $W1091, $S1091, $U1091);
$x1092 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 329, 44, '<image>/05_string.js');
$x1091 =& $x1092[0]; list(,$W1091,$S1091,$U1091) = $x1092;
unset($x1093, $W1093, $S1093, $U1093);
$x1094 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1091, JS::toString('toUpperCase', $global), 329, 54, '<image>/05_string.js');
$x1093 =& $x1094[0]; list(,$W1093,$S1093,$U1093) = $x1094;
unset($x1095, $W1095, $S1095, $U1095);
$x1096 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 329, 7, '<image>/05_string.js');
$x1095 =& $x1096[0]; list(,$W1095,$S1095,$U1095) = $x1096;
$x1097 = JS::toString('toLocaleUpperCase', $global);
if ($x1095 === JS::$undefined || $x1095 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1098 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 329, 36, '<image>/05_string.js');
$_TypeError =& $x1098[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1098;
$x1099 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1100 = $x1099($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1100->class) && $x1100->class === 'Error' && !isset($x1100->properties['file']) && !isset($x1100->properties['line']) && !isset($x1100->properties['column'])) {$x1100->properties['file'] = '<image>/05_string.js';$x1100->properties['line'] = 329;$x1100->properties['column'] = 36;$x1100->attributes['file'] = $x1100->attributes['line'] = $x1100->attributes['column'] = 0; }
throw new JSException($x1100, 329, 36, '<image>/05_string.js');
}
$x1095 = JS::toObject($x1095, $global);
unset($x1101, $W1101, $S1101, $U1101);
$x1102 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1095, JS::toString($x1097, $global), 329, 36, '<image>/05_string.js');
$x1101 =& $x1102[0]; list(,$W1101,$S1101,$U1101) = $x1102;
if ($U1101 && (!isset($x1095->extensible) || $x1095->extensible)) {$x1095->properties[$x1097] = $x1101; $x1101 =& $x1095->properties[$x1097]; $x1095->attributes[$x1097] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1101 = FALSE; $W1101 = TRUE; }
if (isset($S1101)) {
$x1104 = $S1101->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1105 = $x1104($global, $x1095, $S1101, array($x1093), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1103 = $x1105;
} else {
if (!$U1101) {$x1103 = $x1093;if ($W1101) { $x1101 = $x1093; }  }
else { $x1103 = JS::$undefined; }
}
if (isset($x1095->class) && $x1095->class === 'Array' &&  is_int('toLocaleUpperCase') && 'toLocaleUpperCase' >= $x1095->properties['length']) { $x1095->properties['length'] = 'toLocaleUpperCase' + 1; };
$x1108 = clone JS::$functionTemplate; $x1108->call = '_465e5538fcb402e27559db40bec8addd_23'; $x1108->parameters = array (
); $x1108->scope = $scope; $x1108->properties['prototype'] = clone JS::$objectTemplate; $x1108->attributes['prototype'] = JS::WRITABLE; $x1108->properties['prototype']->properties['constructor'] = $x1108; $x1108->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1108->properties['length'] = 0; $x1108->attributes['length'] = 0;
unset($x1109, $W1109, $S1109, $U1109);
$x1110 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 331, 7, '<image>/05_string.js');
$x1109 =& $x1110[0]; list(,$W1109,$S1109,$U1109) = $x1110;
$x1111 = JS::toString('trim', $global);
if ($x1109 === JS::$undefined || $x1109 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1112 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 331, 23, '<image>/05_string.js');
$_TypeError =& $x1112[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1112;
$x1113 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1114 = $x1113($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1114->class) && $x1114->class === 'Error' && !isset($x1114->properties['file']) && !isset($x1114->properties['line']) && !isset($x1114->properties['column'])) {$x1114->properties['file'] = '<image>/05_string.js';$x1114->properties['line'] = 331;$x1114->properties['column'] = 23;$x1114->attributes['file'] = $x1114->attributes['line'] = $x1114->attributes['column'] = 0; }
throw new JSException($x1114, 331, 23, '<image>/05_string.js');
}
$x1109 = JS::toObject($x1109, $global);
unset($x1115, $W1115, $S1115, $U1115);
$x1116 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1109, JS::toString($x1111, $global), 331, 23, '<image>/05_string.js');
$x1115 =& $x1116[0]; list(,$W1115,$S1115,$U1115) = $x1116;
if ($U1115 && (!isset($x1109->extensible) || $x1109->extensible)) {$x1109->properties[$x1111] = $x1115; $x1115 =& $x1109->properties[$x1111]; $x1109->attributes[$x1111] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1115 = FALSE; $W1115 = TRUE; }
if (isset($S1115)) {
$x1118 = $S1115->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1119 = $x1118($global, $x1109, $S1115, array($x1108), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1117 = $x1119;
} else {
if (!$U1115) {$x1117 = $x1108;if ($W1115) { $x1115 = $x1108; }  }
else { $x1117 = JS::$undefined; }
}
if (isset($x1109->class) && $x1109->class === 'Array' &&  is_int('trim') && 'trim' >= $x1109->properties['length']) { $x1109->properties['length'] = 'trim' + 1; };
;
return JS::$undefined;
}
