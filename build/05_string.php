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
$x74 =& $scope->properties['arguments'];
$x74->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x74->properties[$i] = $args[$i];
$x74->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'String', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x77 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 35, 13, '<image>/05_string.js');
$_TypeError =& $x77[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x77;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x78 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 35, 13, '<image>/05_string.js');
$_ReferenceError =& $x78[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x78;
$x79 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 13);
$x80 = $x79($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x80->class) && $x80->class === 'Error' && !isset($x80->properties['file']) && !isset($x80->properties['line']) && !isset($x80->properties['column'])) {$x80->properties['file'] = '<image>/05_string.js';$x80->properties['line'] = 35;$x80->properties['column'] = 13;$x80->attributes['file'] = $x80->attributes['line'] = $x80->attributes['column'] = 0; }
throw new JSException($x80, 35, 13, '<image>/05_string.js');
}
$x75 = clone JS::$objectTemplate;
unset($x81, $W81, $S81, $U81);
$x82 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 35, 9, '<image>/05_string.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
$x76 = $x81;
$x75->prototype = $x76;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x86 = $x85($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/05_string.js';$x86->properties['line'] = 35;$x86->properties['column'] = 9;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 35, 9, '<image>/05_string.js');
}
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 35, 9);
$x84 = $x83($global, $x75, $_TypeError, array('String.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x76 = $x84;
if (is_object($x76) && $x76 !== JS::$undefined) { $x75 = $x76; }
if (isset($x75->class) && $x75->class === 'Error' && !isset($x75->properties['file']) && !isset($x75->properties['line']) && !isset($x75->properties['column'])) {$x75->properties['file'] = '<image>/05_string.js';$x75->properties['line'] = 35;$x75->properties['column'] = 3;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 35, 3, '<image>/05_string.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x74=&$scope->properties[\'arguments\'];$x74->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x74->properties[$i]=$args[$i];$x74->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'String\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x77=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),35,13,\'<image>/05_string.js\');$_TypeError=&$x77[0];list(,$WTypeError,$STypeError,$UTypeError)=$x77;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x78=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),35,13,\'<image>/05_string.js\');$_ReferenceError=&$x78[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x78;$x79=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,13);$x80=$x79($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x80->class)&&$x80->class===\'Error\'&&!isset($x80->properties[\'file\'])&&!isset($x80->properties[\'line\'])&&!isset($x80->properties[\'column\'])){$x80->properties[\'file\']=\'<image>/05_string.js\';$x80->properties[\'line\']=35;$x80->properties[\'column\']=13;$x80->attributes[\'file\']=$x80->attributes[\'line\']=$x80->attributes[\'column\']=0;}throw new JSException($x80,35,13,\'<image>/05_string.js\');}$x75=clone JS::$objectTemplate;unset($x81,$W81,$S81,$U81);$x82=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),35,9,\'<image>/05_string.js\');$x81=&$x82[0];list(,$W81,$S81,$U81)=$x82;$x76=$x81;$x75->prototype=$x76;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x85=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x86=$x85($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x86->class)&&$x86->class===\'Error\'&&!isset($x86->properties[\'file\'])&&!isset($x86->properties[\'line\'])&&!isset($x86->properties[\'column\'])){$x86->properties[\'file\']=\'<image>/05_string.js\';$x86->properties[\'line\']=35;$x86->properties[\'column\']=9;$x86->attributes[\'file\']=$x86->attributes[\'line\']=$x86->attributes[\'column\']=0;}throw new JSException($x86,35,9,\'<image>/05_string.js\');}$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',35,9);$x84=$x83($global,$x75,$_TypeError,array(\'String.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x76=$x84;if(is_object($x76)&&$x76!==JS::$undefined){$x75=$x76;}if(isset($x75->class)&&$x75->class===\'Error\'&&!isset($x75->properties[\'file\'])&&!isset($x75->properties[\'line\'])&&!isset($x75->properties[\'column\'])){$x75->properties[\'file\']=\'<image>/05_string.js\';$x75->properties[\'line\']=35;$x75->properties[\'column\']=3;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,35,3,\'<image>/05_string.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_7($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x118 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x118;
$x120 = JS::toPrimitive($_pos, $global);
$x121 = JS::toPrimitive(0, $global);
$x122 = (is_string($x120) && is_string($x121) ? strcmp($x120, $x121) < 0 : (!is_nan($x123 = JS::toNumber($x120, $global)) && !is_nan($x124 = JS::toNumber($x121, $global)) && $x123 < $x124));
$x119 = $x122;
if (!JS::toBoolean($x119, $global)) {
unset($x128, $W128, $S128, $U128);
$x129 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 46, 28, '<image>/05_string.js');
$x128 =& $x129[0]; list(,$W128,$S128,$U128) = $x129;
$x125 = JS::toPrimitive($_pos, $global);
$x126 = JS::toPrimitive($x128, $global);
$x127 = !(is_string($x125) && is_string($x126) ? strcmp($x125, $x126) < 0 : (!is_nan($x130 = JS::toNumber($x125, $global)) && !is_nan($x131 = JS::toNumber($x126, $global)) && $x130 < $x131));
$x119 = $x127; }
if (JS::toBoolean($x119, $global)) {

return '';;
};
return (string) substr($leThis->value,$_pos, 1);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x117=&$scope->properties[\'arguments\'];$x117->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x117->properties[$i]=$args[$i];$x117->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x118=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x118;$x120=JS::toPrimitive($_pos,$global);$x121=JS::toPrimitive(0,$global);$x122=(is_string($x120)&&is_string($x121)?strcmp($x120,$x121)<0:(!is_nan($x123=JS::toNumber($x120,$global))&&!is_nan($x124=JS::toNumber($x121,$global))&&$x123<$x124));$x119=$x122;if(!JS::toBoolean($x119,$global)){unset($x128,$W128,$S128,$U128);$x129=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),46,28,\'<image>/05_string.js\');$x128=&$x129[0];list(,$W128,$S128,$U128)=$x129;$x125=JS::toPrimitive($_pos,$global);$x126=JS::toPrimitive($x128,$global);$x127=!(is_string($x125)&&is_string($x126)?strcmp($x125,$x126)<0:(!is_nan($x130=JS::toNumber($x125,$global))&&!is_nan($x131=JS::toNumber($x126,$global))&&$x130<$x131));$x119=$x127;}if(JS::toBoolean($x119,$global)){return\'\';}return(string)substr($leThis->value,$_pos,1);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x146 =& $scope->properties['arguments'];
$x146->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x146->properties[$i] = $args[$i];
$x146->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['pos'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_pos =& $scope->properties['pos'];
$Upos = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x147 = JS::toNumber($_pos, $global);
if ($Upos) {$global->properties['pos'] = $_pos; $_pos =& $global->properties['pos']; }
$_pos = $x147;
$x149 = JS::toPrimitive($_pos, $global);
$x150 = JS::toPrimitive(0, $global);
$x151 = (is_string($x149) && is_string($x150) ? strcmp($x149, $x150) < 0 : (!is_nan($x152 = JS::toNumber($x149, $global)) && !is_nan($x153 = JS::toNumber($x150, $global)) && $x152 < $x153));
$x148 = $x151;
if (!JS::toBoolean($x148, $global)) {
unset($x157, $W157, $S157, $U157);
$x158 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 56, 28, '<image>/05_string.js');
$x157 =& $x158[0]; list(,$W157,$S157,$U157) = $x158;
$x154 = JS::toPrimitive($_pos, $global);
$x155 = JS::toPrimitive($x157, $global);
$x156 = !(is_string($x154) && is_string($x155) ? strcmp($x154, $x155) < 0 : (!is_nan($x159 = JS::toNumber($x154, $global)) && !is_nan($x160 = JS::toNumber($x155, $global)) && $x159 < $x160));
$x148 = $x156; }
if (JS::toBoolean($x148, $global)) {
unset($_NaN, $WNaN, $SNaN, $UNaN);
$x161 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('NaN', $global), 57, 10, '<image>/05_string.js');
$_NaN =& $x161[0]; list(,$WNaN,$SNaN,$UNaN) = $x161;
if ($UNaN) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x162 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 57, 10, '<image>/05_string.js');
$_ReferenceError =& $x162[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x162;
$x163 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 57, 10);
$x164 = $x163($global, $global, $_ReferenceError, array('NaN is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x164->class) && $x164->class === 'Error' && !isset($x164->properties['file']) && !isset($x164->properties['line']) && !isset($x164->properties['column'])) {$x164->properties['file'] = '<image>/05_string.js';$x164->properties['line'] = 57;$x164->properties['column'] = 10;$x164->attributes['file'] = $x164->attributes['line'] = $x164->attributes['column'] = 0; }
throw new JSException($x164, 57, 10, '<image>/05_string.js');
}
return $_NaN;;
};
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x166 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
$_TypeError =& $x166[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x166;
$x167 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x168 = $x167($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x168->class) && $x168->class === 'Error' && !isset($x168->properties['file']) && !isset($x168->properties['line']) && !isset($x168->properties['column'])) {$x168->properties['file'] = '<image>/05_string.js';$x168->properties['line'] = 60;$x168->properties['column'] = 21;$x168->attributes['file'] = $x168->attributes['line'] = $x168->attributes['column'] = 0; }
throw new JSException($x168, 60, 21, '<image>/05_string.js');
}
$x165 = JS::toObject($leThis, $global);
unset($x169, $W169, $S169, $U169);
$x170 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x165, JS::toString('charAt', $global), 60, 21, '<image>/05_string.js');
$x169 =& $x170[0]; list(,$W169,$S169,$U169) = $x170;
if (!(is_object($x169) && isset($x169->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x173 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 60, 21, '<image>/05_string.js');
$_TypeError =& $x173[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x173;
$x174 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x175 = $x174($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x175->class) && $x175->class === 'Error' && !isset($x175->properties['file']) && !isset($x175->properties['line']) && !isset($x175->properties['column'])) {$x175->properties['file'] = '<image>/05_string.js';$x175->properties['line'] = 60;$x175->properties['column'] = 21;$x175->attributes['file'] = $x175->attributes['line'] = $x175->attributes['column'] = 0; }
throw new JSException($x175, 60, 21, '<image>/05_string.js');
}
$x171 = $x169->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 60, 21);
$x172 = $x171($global, $x165, $x169, array($_pos), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['c'] = JS::$undefined; $_c =& $scope->properties['c'];
$Uc = FALSE;
$_c = $x172;
return ord($_c);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x146=&$scope->properties[\'arguments\'];$x146->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x146->properties[$i]=$args[$i];$x146->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'pos\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_pos=&$scope->properties[\'pos\'];$Upos=FALSE;$global->scope[++$global->scope_sp]=$scope;$x147=JS::toNumber($_pos,$global);if($Upos){$global->properties[\'pos\']=$_pos;$_pos=&$global->properties[\'pos\'];}$_pos=$x147;$x149=JS::toPrimitive($_pos,$global);$x150=JS::toPrimitive(0,$global);$x151=(is_string($x149)&&is_string($x150)?strcmp($x149,$x150)<0:(!is_nan($x152=JS::toNumber($x149,$global))&&!is_nan($x153=JS::toNumber($x150,$global))&&$x152<$x153));$x148=$x151;if(!JS::toBoolean($x148,$global)){unset($x157,$W157,$S157,$U157);$x158=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),56,28,\'<image>/05_string.js\');$x157=&$x158[0];list(,$W157,$S157,$U157)=$x158;$x154=JS::toPrimitive($_pos,$global);$x155=JS::toPrimitive($x157,$global);$x156=!(is_string($x154)&&is_string($x155)?strcmp($x154,$x155)<0:(!is_nan($x159=JS::toNumber($x154,$global))&&!is_nan($x160=JS::toNumber($x155,$global))&&$x159<$x160));$x148=$x156;}if(JS::toBoolean($x148,$global)){unset($_NaN,$WNaN,$SNaN,$UNaN);$x161=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'NaN\',$global),57,10,\'<image>/05_string.js\');$_NaN=&$x161[0];list(,$WNaN,$SNaN,$UNaN)=$x161;if($UNaN){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x162=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),57,10,\'<image>/05_string.js\');$_ReferenceError=&$x162[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x162;$x163=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',57,10);$x164=$x163($global,$global,$_ReferenceError,array(\'NaN is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x164->class)&&$x164->class===\'Error\'&&!isset($x164->properties[\'file\'])&&!isset($x164->properties[\'line\'])&&!isset($x164->properties[\'column\'])){$x164->properties[\'file\']=\'<image>/05_string.js\';$x164->properties[\'line\']=57;$x164->properties[\'column\']=10;$x164->attributes[\'file\']=$x164->attributes[\'line\']=$x164->attributes[\'column\']=0;}throw new JSException($x164,57,10,\'<image>/05_string.js\');}return$_NaN;}if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x166=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x166[0];list(,$WTypeError,$STypeError,$UTypeError)=$x166;$x167=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x168=$x167($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x168->class)&&$x168->class===\'Error\'&&!isset($x168->properties[\'file\'])&&!isset($x168->properties[\'line\'])&&!isset($x168->properties[\'column\'])){$x168->properties[\'file\']=\'<image>/05_string.js\';$x168->properties[\'line\']=60;$x168->properties[\'column\']=21;$x168->attributes[\'file\']=$x168->attributes[\'line\']=$x168->attributes[\'column\']=0;}throw new JSException($x168,60,21,\'<image>/05_string.js\');}$x165=JS::toObject($leThis,$global);unset($x169,$W169,$S169,$U169);$x170=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x165,JS::toString(\'charAt\',$global),60,21,\'<image>/05_string.js\');$x169=&$x170[0];list(,$W169,$S169,$U169)=$x170;if(!(is_object($x169)&&isset($x169->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x173=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),60,21,\'<image>/05_string.js\');$_TypeError=&$x173[0];list(,$WTypeError,$STypeError,$UTypeError)=$x173;$x174=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x175=$x174($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x175->class)&&$x175->class===\'Error\'&&!isset($x175->properties[\'file\'])&&!isset($x175->properties[\'line\'])&&!isset($x175->properties[\'column\'])){$x175->properties[\'file\']=\'<image>/05_string.js\';$x175->properties[\'line\']=60;$x175->properties[\'column\']=21;$x175->attributes[\'file\']=$x175->attributes[\'line\']=$x175->attributes[\'column\']=0;}throw new JSException($x175,60,21,\'<image>/05_string.js\');}$x171=$x169->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',60,21);$x172=$x171($global,$x165,$x169,array($_pos),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'c\']=JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$_c=$x172;return ord($_c);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x190 =& $scope->properties['arguments'];
$x190->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x190->properties[$i] = $args[$i];
$x190->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['string'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_string =& $scope->properties['string'];
$Ustring = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$scope->properties['returnString'] = JS::$undefined; $_returnString =& $scope->properties['returnString'];
$UreturnString = FALSE;
$_returnString = $leThis->value;
for ($x191 = 0;; ++$x191) {
if ($x191 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x192 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('arguments', $global), 68, 22, '<image>/05_string.js');
$_arguments =& $x192[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x192;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x193 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 68, 22, '<image>/05_string.js');
$_ReferenceError =& $x193[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x193;
$x194 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 68, 22);
$x195 = $x194($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error' && !isset($x195->properties['file']) && !isset($x195->properties['line']) && !isset($x195->properties['column'])) {$x195->properties['file'] = '<image>/05_string.js';$x195->properties['line'] = 68;$x195->properties['column'] = 22;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 68, 22, '<image>/05_string.js');
}
unset($x196, $W196, $S196, $U196);
$x197 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, JS::toString('length', $global), 68, 31, '<image>/05_string.js');
$x196 =& $x197[0]; list(,$W196,$S196,$U196) = $x197;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x196;
}
if ($x191 !== 0) {
$x198 = ++$_i;
}
$x199 = JS::toPrimitive($_i, $global);
$x200 = JS::toPrimitive($_l, $global);
$x201 = (is_string($x199) && is_string($x200) ? strcmp($x199, $x200) < 0 : (!is_nan($x202 = JS::toNumber($x199, $global)) && !is_nan($x203 = JS::toNumber($x200, $global)) && $x202 < $x203));
if (!JS::toBoolean($x201, $global)) { break; }

unset($x204, $W204, $S204, $U204);
$x205 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_arguments, JS::toString($_i, $global), 69, 28, '<image>/05_string.js');
$x204 =& $x205[0]; list(,$W204,$S204,$U204) = $x205;
if ($UreturnString) {$global->properties['returnString'] = $_returnString; $_returnString =& $global->properties['returnString']; }
$x206 = JS::toPrimitive($_returnString, $global);
$x207 = JS::toPrimitive($x204, $global);
$_returnString = (is_string($x206) || is_string($x207) ? JS::toString($x206, $global) . JS::toString($x207, $global) : JS::toNumber($x206, $global) + JS::toNumber($x207, $global));;
};
return $_returnString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x190=&$scope->properties[\'arguments\'];$x190->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x190->properties[$i]=$args[$i];$x190->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'string\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_string=&$scope->properties[\'string\'];$Ustring=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'returnString\']=JS::$undefined;$_returnString=&$scope->properties[\'returnString\'];$UreturnString=FALSE;$_returnString=$leThis->value;for($x191=0;;++$x191){if($x191===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x192=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'arguments\',$global),68,22,\'<image>/05_string.js\');$_arguments=&$x192[0];list(,$Warguments,$Sarguments,$Uarguments)=$x192;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x193=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),68,22,\'<image>/05_string.js\');$_ReferenceError=&$x193[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x193;$x194=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',68,22);$x195=$x194($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/05_string.js\';$x195->properties[\'line\']=68;$x195->properties[\'column\']=22;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,68,22,\'<image>/05_string.js\');}unset($x196,$W196,$S196,$U196);$x197=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,JS::toString(\'length\',$global),68,31,\'<image>/05_string.js\');$x196=&$x197[0];list(,$W196,$S196,$U196)=$x197;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x196;}if($x191!==0){$x198=++$_i;}$x199=JS::toPrimitive($_i,$global);$x200=JS::toPrimitive($_l,$global);$x201=(is_string($x199)&&is_string($x200)?strcmp($x199,$x200)<0:(!is_nan($x202=JS::toNumber($x199,$global))&&!is_nan($x203=JS::toNumber($x200,$global))&&$x202<$x203));if(!JS::toBoolean($x201,$global)){break;}unset($x204,$W204,$S204,$U204);$x205=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_arguments,JS::toString($_i,$global),69,28,\'<image>/05_string.js\');$x204=&$x205[0];list(,$W204,$S204,$U204)=$x205;if($UreturnString){$global->properties[\'returnString\']=$_returnString;$_returnString=&$global->properties[\'returnString\'];}$x206=JS::toPrimitive($_returnString,$global);$x207=JS::toPrimitive($x204,$global);$_returnString=(is_string($x206)||is_string($x207)?JS::toString($x206,$global).JS::toString($x207,$global):JS::toNumber($x206,$global)+JS::toNumber($x207,$global));}return$_returnString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x222 =& $scope->properties['arguments'];
$x222->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x222->properties[$i] = $args[$i];
$x222->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x223 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x223, $global)) {
$x224 = 0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x224;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x225 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 80, 15, '<image>/05_string.js');
$_Math =& $x225[0]; list(,$WMath,$SMath,$UMath) = $x225;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x226 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 80, 15, '<image>/05_string.js');
$_ReferenceError =& $x226[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x226;
$x227 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 15);
$x228 = $x227($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x228->class) && $x228->class === 'Error' && !isset($x228->properties['file']) && !isset($x228->properties['line']) && !isset($x228->properties['column'])) {$x228->properties['file'] = '<image>/05_string.js';$x228->properties['line'] = 80;$x228->properties['column'] = 15;$x228->attributes['file'] = $x228->attributes['line'] = $x228->attributes['column'] = 0; }
throw new JSException($x228, 80, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x230 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
$_TypeError =& $x230[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x230;
$x231 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x232 = $x231($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x232->class) && $x232->class === 'Error' && !isset($x232->properties['file']) && !isset($x232->properties['line']) && !isset($x232->properties['column'])) {$x232->properties['file'] = '<image>/05_string.js';$x232->properties['line'] = 80;$x232->properties['column'] = 23;$x232->attributes['file'] = $x232->attributes['line'] = $x232->attributes['column'] = 0; }
throw new JSException($x232, 80, 23, '<image>/05_string.js');
}
$x229 = JS::toObject($_Math, $global);
unset($x233, $W233, $S233, $U233);
$x234 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x229, JS::toString('min', $global), 80, 23, '<image>/05_string.js');
$x233 =& $x234[0]; list(,$W233,$S233,$U233) = $x234;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x236 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
$_TypeError =& $x236[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x236;
$x237 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x238 = $x237($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x238->class) && $x238->class === 'Error' && !isset($x238->properties['file']) && !isset($x238->properties['line']) && !isset($x238->properties['column'])) {$x238->properties['file'] = '<image>/05_string.js';$x238->properties['line'] = 80;$x238->properties['column'] = 32;$x238->attributes['file'] = $x238->attributes['line'] = $x238->attributes['column'] = 0; }
throw new JSException($x238, 80, 32, '<image>/05_string.js');
}
$x235 = JS::toObject($_Math, $global);
unset($x239, $W239, $S239, $U239);
$x240 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x235, JS::toString('max', $global), 80, 32, '<image>/05_string.js');
$x239 =& $x240[0]; list(,$W239,$S239,$U239) = $x240;
if (!(is_object($x239) && isset($x239->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x243 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 32, '<image>/05_string.js');
$_TypeError =& $x243[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x243;
$x244 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x245 = $x244($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x245->class) && $x245->class === 'Error' && !isset($x245->properties['file']) && !isset($x245->properties['line']) && !isset($x245->properties['column'])) {$x245->properties['file'] = '<image>/05_string.js';$x245->properties['line'] = 80;$x245->properties['column'] = 32;$x245->attributes['file'] = $x245->attributes['line'] = $x245->attributes['column'] = 0; }
throw new JSException($x245, 80, 32, '<image>/05_string.js');
}
$x241 = $x239->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 32);
$x242 = $x241($global, $x235, $x239, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x233) && isset($x233->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x248 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 23, '<image>/05_string.js');
$_TypeError =& $x248[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x248;
$x249 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x250 = $x249($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x250->class) && $x250->class === 'Error' && !isset($x250->properties['file']) && !isset($x250->properties['line']) && !isset($x250->properties['column'])) {$x250->properties['file'] = '<image>/05_string.js';$x250->properties['line'] = 80;$x250->properties['column'] = 23;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 80, 23, '<image>/05_string.js');
}
$x246 = $x233->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 80, 23);
$x247 = $x246($global, $x229, $x233, array($x242, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x247;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strpos($leThis->value, JS::toString($_search, $global),$_offset);
$x251 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x251, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x222=&$scope->properties[\'arguments\'];$x222->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x222->properties[$i]=$args[$i];$x222->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x223=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x223,$global)){$x224=0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x224;}unset($_Math,$WMath,$SMath,$UMath);$x225=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),80,15,\'<image>/05_string.js\');$_Math=&$x225[0];list(,$WMath,$SMath,$UMath)=$x225;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x226=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),80,15,\'<image>/05_string.js\');$_ReferenceError=&$x226[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x226;$x227=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,15);$x228=$x227($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x228->class)&&$x228->class===\'Error\'&&!isset($x228->properties[\'file\'])&&!isset($x228->properties[\'line\'])&&!isset($x228->properties[\'column\'])){$x228->properties[\'file\']=\'<image>/05_string.js\';$x228->properties[\'line\']=80;$x228->properties[\'column\']=15;$x228->attributes[\'file\']=$x228->attributes[\'line\']=$x228->attributes[\'column\']=0;}throw new JSException($x228,80,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x230=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x230[0];list(,$WTypeError,$STypeError,$UTypeError)=$x230;$x231=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x232=$x231($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x232->class)&&$x232->class===\'Error\'&&!isset($x232->properties[\'file\'])&&!isset($x232->properties[\'line\'])&&!isset($x232->properties[\'column\'])){$x232->properties[\'file\']=\'<image>/05_string.js\';$x232->properties[\'line\']=80;$x232->properties[\'column\']=23;$x232->attributes[\'file\']=$x232->attributes[\'line\']=$x232->attributes[\'column\']=0;}throw new JSException($x232,80,23,\'<image>/05_string.js\');}$x229=JS::toObject($_Math,$global);unset($x233,$W233,$S233,$U233);$x234=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x229,JS::toString(\'min\',$global),80,23,\'<image>/05_string.js\');$x233=&$x234[0];list(,$W233,$S233,$U233)=$x234;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x236=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x236[0];list(,$WTypeError,$STypeError,$UTypeError)=$x236;$x237=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x238=$x237($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x238->class)&&$x238->class===\'Error\'&&!isset($x238->properties[\'file\'])&&!isset($x238->properties[\'line\'])&&!isset($x238->properties[\'column\'])){$x238->properties[\'file\']=\'<image>/05_string.js\';$x238->properties[\'line\']=80;$x238->properties[\'column\']=32;$x238->attributes[\'file\']=$x238->attributes[\'line\']=$x238->attributes[\'column\']=0;}throw new JSException($x238,80,32,\'<image>/05_string.js\');}$x235=JS::toObject($_Math,$global);unset($x239,$W239,$S239,$U239);$x240=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x235,JS::toString(\'max\',$global),80,32,\'<image>/05_string.js\');$x239=&$x240[0];list(,$W239,$S239,$U239)=$x240;if(!(is_object($x239)&&isset($x239->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x243=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,32,\'<image>/05_string.js\');$_TypeError=&$x243[0];list(,$WTypeError,$STypeError,$UTypeError)=$x243;$x244=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x245=$x244($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x245->class)&&$x245->class===\'Error\'&&!isset($x245->properties[\'file\'])&&!isset($x245->properties[\'line\'])&&!isset($x245->properties[\'column\'])){$x245->properties[\'file\']=\'<image>/05_string.js\';$x245->properties[\'line\']=80;$x245->properties[\'column\']=32;$x245->attributes[\'file\']=$x245->attributes[\'line\']=$x245->attributes[\'column\']=0;}throw new JSException($x245,80,32,\'<image>/05_string.js\');}$x241=$x239->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,32);$x242=$x241($global,$x235,$x239,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x233)&&isset($x233->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x248=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,23,\'<image>/05_string.js\');$_TypeError=&$x248[0];list(,$WTypeError,$STypeError,$UTypeError)=$x248;$x249=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x250=$x249($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x250->class)&&$x250->class===\'Error\'&&!isset($x250->properties[\'file\'])&&!isset($x250->properties[\'line\'])&&!isset($x250->properties[\'column\'])){$x250->properties[\'file\']=\'<image>/05_string.js\';$x250->properties[\'line\']=80;$x250->properties[\'column\']=23;$x250->attributes[\'file\']=$x250->attributes[\'line\']=$x250->attributes[\'column\']=0;}throw new JSException($x250,80,23,\'<image>/05_string.js\');}$x246=$x233->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',80,23);$x247=$x246($global,$x229,$x233,array($x242,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x247;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strpos($leThis->value,JS::toString($_search,$global),$_offset);$x251=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x251,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x266 =& $scope->properties['arguments'];
$x266->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x266->properties[$i] = $args[$i];
$x266->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$scope->properties['position'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_position =& $scope->properties['position'];
$Uposition = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x267 = (((gettype($_position) === gettype(JS::$undefined) && $_position === JS::$undefined))|| (((is_float($_position) || is_int($_position)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_position == JS::$undefined));
if (JS::toBoolean($x267, $global)) {
$x268 = 0;
if ($Uposition) {$global->properties['position'] = $_position; $_position =& $global->properties['position']; }
$_position = $x268;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x269 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 95, 15, '<image>/05_string.js');
$_Math =& $x269[0]; list(,$WMath,$SMath,$UMath) = $x269;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x270 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 95, 15, '<image>/05_string.js');
$_ReferenceError =& $x270[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x270;
$x271 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 15);
$x272 = $x271($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x272->class) && $x272->class === 'Error' && !isset($x272->properties['file']) && !isset($x272->properties['line']) && !isset($x272->properties['column'])) {$x272->properties['file'] = '<image>/05_string.js';$x272->properties['line'] = 95;$x272->properties['column'] = 15;$x272->attributes['file'] = $x272->attributes['line'] = $x272->attributes['column'] = 0; }
throw new JSException($x272, 95, 15, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x274 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
$_TypeError =& $x274[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x274;
$x275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x276 = $x275($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x276->class) && $x276->class === 'Error' && !isset($x276->properties['file']) && !isset($x276->properties['line']) && !isset($x276->properties['column'])) {$x276->properties['file'] = '<image>/05_string.js';$x276->properties['line'] = 95;$x276->properties['column'] = 23;$x276->attributes['file'] = $x276->attributes['line'] = $x276->attributes['column'] = 0; }
throw new JSException($x276, 95, 23, '<image>/05_string.js');
}
$x273 = JS::toObject($_Math, $global);
unset($x277, $W277, $S277, $U277);
$x278 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x273, JS::toString('min', $global), 95, 23, '<image>/05_string.js');
$x277 =& $x278[0]; list(,$W277,$S277,$U277) = $x278;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x280 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
$_TypeError =& $x280[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x280;
$x281 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x282 = $x281($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x282->class) && $x282->class === 'Error' && !isset($x282->properties['file']) && !isset($x282->properties['line']) && !isset($x282->properties['column'])) {$x282->properties['file'] = '<image>/05_string.js';$x282->properties['line'] = 95;$x282->properties['column'] = 32;$x282->attributes['file'] = $x282->attributes['line'] = $x282->attributes['column'] = 0; }
throw new JSException($x282, 95, 32, '<image>/05_string.js');
}
$x279 = JS::toObject($_Math, $global);
unset($x283, $W283, $S283, $U283);
$x284 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x279, JS::toString('max', $global), 95, 32, '<image>/05_string.js');
$x283 =& $x284[0]; list(,$W283,$S283,$U283) = $x284;
if (!(is_object($x283) && isset($x283->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x287 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 32, '<image>/05_string.js');
$_TypeError =& $x287[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x287;
$x288 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x289 = $x288($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x289->class) && $x289->class === 'Error' && !isset($x289->properties['file']) && !isset($x289->properties['line']) && !isset($x289->properties['column'])) {$x289->properties['file'] = '<image>/05_string.js';$x289->properties['line'] = 95;$x289->properties['column'] = 32;$x289->attributes['file'] = $x289->attributes['line'] = $x289->attributes['column'] = 0; }
throw new JSException($x289, 95, 32, '<image>/05_string.js');
}
$x285 = $x283->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 32);
$x286 = $x285($global, $x279, $x283, array($_position, 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x277) && isset($x277->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x292 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 95, 23, '<image>/05_string.js');
$_TypeError =& $x292[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x292;
$x293 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x294 = $x293($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x294->class) && $x294->class === 'Error' && !isset($x294->properties['file']) && !isset($x294->properties['line']) && !isset($x294->properties['column'])) {$x294->properties['file'] = '<image>/05_string.js';$x294->properties['line'] = 95;$x294->properties['column'] = 23;$x294->attributes['file'] = $x294->attributes['line'] = $x294->attributes['column'] = 0; }
throw new JSException($x294, 95, 23, '<image>/05_string.js');
}
$x290 = $x277->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 95, 23);
$x291 = $x290($global, $x273, $x277, array($x286, strlen($leThis->value)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['offset'] = JS::$undefined; $_offset =& $scope->properties['offset'];
$Uoffset = FALSE;
$_offset = $x291;
$scope->properties['ret'] = JS::$undefined; $_ret =& $scope->properties['ret'];
$Uret = FALSE;
$_ret = strrpos($leThis->value, JS::toString($_search, $global),$_offset);
$x295 = (((gettype($_ret) === gettype(false) && $_ret === false))|| (((is_float($_ret) || is_int($_ret)) && (is_float(false) || is_int(false))) && $_ret == false));
if (JS::toBoolean($x295, $global)) {

return (-1.0 * JS::toNumber(1, $global));;
};
return $_ret;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x266=&$scope->properties[\'arguments\'];$x266->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x266->properties[$i]=$args[$i];$x266->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'position\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_position=&$scope->properties[\'position\'];$Uposition=FALSE;$global->scope[++$global->scope_sp]=$scope;$x267=(((gettype($_position)===gettype(JS::$undefined)&&$_position===JS::$undefined))||(((is_float($_position)||is_int($_position))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_position==JS::$undefined));if(JS::toBoolean($x267,$global)){$x268=0;if($Uposition){$global->properties[\'position\']=$_position;$_position=&$global->properties[\'position\'];}$_position=$x268;}unset($_Math,$WMath,$SMath,$UMath);$x269=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),95,15,\'<image>/05_string.js\');$_Math=&$x269[0];list(,$WMath,$SMath,$UMath)=$x269;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x270=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),95,15,\'<image>/05_string.js\');$_ReferenceError=&$x270[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x270;$x271=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,15);$x272=$x271($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x272->class)&&$x272->class===\'Error\'&&!isset($x272->properties[\'file\'])&&!isset($x272->properties[\'line\'])&&!isset($x272->properties[\'column\'])){$x272->properties[\'file\']=\'<image>/05_string.js\';$x272->properties[\'line\']=95;$x272->properties[\'column\']=15;$x272->attributes[\'file\']=$x272->attributes[\'line\']=$x272->attributes[\'column\']=0;}throw new JSException($x272,95,15,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x274=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x274[0];list(,$WTypeError,$STypeError,$UTypeError)=$x274;$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x276=$x275($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'&&!isset($x276->properties[\'file\'])&&!isset($x276->properties[\'line\'])&&!isset($x276->properties[\'column\'])){$x276->properties[\'file\']=\'<image>/05_string.js\';$x276->properties[\'line\']=95;$x276->properties[\'column\']=23;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,95,23,\'<image>/05_string.js\');}$x273=JS::toObject($_Math,$global);unset($x277,$W277,$S277,$U277);$x278=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x273,JS::toString(\'min\',$global),95,23,\'<image>/05_string.js\');$x277=&$x278[0];list(,$W277,$S277,$U277)=$x278;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x280=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x280[0];list(,$WTypeError,$STypeError,$UTypeError)=$x280;$x281=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x282=$x281($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x282->class)&&$x282->class===\'Error\'&&!isset($x282->properties[\'file\'])&&!isset($x282->properties[\'line\'])&&!isset($x282->properties[\'column\'])){$x282->properties[\'file\']=\'<image>/05_string.js\';$x282->properties[\'line\']=95;$x282->properties[\'column\']=32;$x282->attributes[\'file\']=$x282->attributes[\'line\']=$x282->attributes[\'column\']=0;}throw new JSException($x282,95,32,\'<image>/05_string.js\');}$x279=JS::toObject($_Math,$global);unset($x283,$W283,$S283,$U283);$x284=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x279,JS::toString(\'max\',$global),95,32,\'<image>/05_string.js\');$x283=&$x284[0];list(,$W283,$S283,$U283)=$x284;if(!(is_object($x283)&&isset($x283->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x287=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,32,\'<image>/05_string.js\');$_TypeError=&$x287[0];list(,$WTypeError,$STypeError,$UTypeError)=$x287;$x288=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x289=$x288($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x289->class)&&$x289->class===\'Error\'&&!isset($x289->properties[\'file\'])&&!isset($x289->properties[\'line\'])&&!isset($x289->properties[\'column\'])){$x289->properties[\'file\']=\'<image>/05_string.js\';$x289->properties[\'line\']=95;$x289->properties[\'column\']=32;$x289->attributes[\'file\']=$x289->attributes[\'line\']=$x289->attributes[\'column\']=0;}throw new JSException($x289,95,32,\'<image>/05_string.js\');}$x285=$x283->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,32);$x286=$x285($global,$x279,$x283,array($_position,0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x277)&&isset($x277->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x292=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),95,23,\'<image>/05_string.js\');$_TypeError=&$x292[0];list(,$WTypeError,$STypeError,$UTypeError)=$x292;$x293=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x294=$x293($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x294->class)&&$x294->class===\'Error\'&&!isset($x294->properties[\'file\'])&&!isset($x294->properties[\'line\'])&&!isset($x294->properties[\'column\'])){$x294->properties[\'file\']=\'<image>/05_string.js\';$x294->properties[\'line\']=95;$x294->properties[\'column\']=23;$x294->attributes[\'file\']=$x294->attributes[\'line\']=$x294->attributes[\'column\']=0;}throw new JSException($x294,95,23,\'<image>/05_string.js\');}$x290=$x277->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',95,23);$x291=$x290($global,$x273,$x277,array($x286,strlen($leThis->value)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'offset\']=JS::$undefined;$_offset=&$scope->properties[\'offset\'];$Uoffset=FALSE;$_offset=$x291;$scope->properties[\'ret\']=JS::$undefined;$_ret=&$scope->properties[\'ret\'];$Uret=FALSE;$_ret=strrpos($leThis->value,JS::toString($_search,$global),$_offset);$x295=(((gettype($_ret)===gettype(false)&&$_ret===false))||(((is_float($_ret)||is_int($_ret))&&(is_float(false)||is_int(false)))&&$_ret==false));if(JS::toBoolean($x295,$global)){return(-1.0*JS::toNumber(1,$global));}return$_ret;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x310 =& $scope->properties['arguments'];
$x310->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x310->properties[$i] = $args[$i];
$x310->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['that'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_that =& $scope->properties['that'];
$Uthat = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return $leThis->value === JS::toString($_that, $global);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x310=&$scope->properties[\'arguments\'];$x310->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x310->properties[$i]=$args[$i];$x310->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'that\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_that=&$scope->properties[\'that\'];$Uthat=FALSE;$global->scope[++$global->scope_sp]=$scope;return$leThis->value===JS::toString($_that,$global);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x325 =& $scope->properties['arguments'];
$x325->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x325->properties[$i] = $args[$i];
$x325->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['regexp'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_regexp =& $scope->properties['regexp'];
$Uregexp = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_regexp) && isset($_regexp->class) &&$_regexp->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x328 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 111, 16, '<image>/05_string.js');
$_RegExp =& $x328[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x328;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x329 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 111, 16, '<image>/05_string.js');
$_ReferenceError =& $x329[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x329;
$x330 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 16);
$x331 = $x330($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x331->class) && $x331->class === 'Error' && !isset($x331->properties['file']) && !isset($x331->properties['line']) && !isset($x331->properties['column'])) {$x331->properties['file'] = '<image>/05_string.js';$x331->properties['line'] = 111;$x331->properties['column'] = 16;$x331->attributes['file'] = $x331->attributes['line'] = $x331->attributes['column'] = 0; }
throw new JSException($x331, 111, 16, '<image>/05_string.js');
}
$x326 = clone JS::$objectTemplate;
unset($x332, $W332, $S332, $U332);
$x333 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 111, 12, '<image>/05_string.js');
$x332 =& $x333[0]; list(,$W332,$S332,$U332) = $x333;
$x327 = $x332;
$x326->prototype = $x327;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x336 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 111, 12, '<image>/05_string.js');
$_TypeError =& $x336[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x336;
$x337 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x338 = $x337($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x338->class) && $x338->class === 'Error' && !isset($x338->properties['file']) && !isset($x338->properties['line']) && !isset($x338->properties['column'])) {$x338->properties['file'] = '<image>/05_string.js';$x338->properties['line'] = 111;$x338->properties['column'] = 12;$x338->attributes['file'] = $x338->attributes['line'] = $x338->attributes['column'] = 0; }
throw new JSException($x338, 111, 12, '<image>/05_string.js');
}
$x334 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 111, 12);
$x335 = $x334($global, $x326, $_RegExp, array($_regexp), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x327 = $x335;
if (is_object($x327) && $x327 !== JS::$undefined) { $x326 = $x327; }
if ($Uregexp) {$global->properties['regexp'] = $_regexp; $_regexp =& $global->properties['regexp']; }
$_regexp = $x326;;
};
unset($x339, $W339, $S339, $U339);
$x340 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('global', $global), 114, 13, '<image>/05_string.js');
$x339 =& $x340[0]; list(,$W339,$S339,$U339) = $x340;
if (JS::toBoolean((!JS::toBoolean($x339, $global)), $global)) {
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x342 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
$_TypeError =& $x342[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x342;
$x343 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x344 = $x343($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x344->class) && $x344->class === 'Error' && !isset($x344->properties['file']) && !isset($x344->properties['line']) && !isset($x344->properties['column'])) {$x344->properties['file'] = '<image>/05_string.js';$x344->properties['line'] = 115;$x344->properties['column'] = 21;$x344->attributes['file'] = $x344->attributes['line'] = $x344->attributes['column'] = 0; }
throw new JSException($x344, 115, 21, '<image>/05_string.js');
}
$x341 = JS::toObject($_regexp, $global);
unset($x345, $W345, $S345, $U345);
$x346 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x341, JS::toString('exec', $global), 115, 21, '<image>/05_string.js');
$x345 =& $x346[0]; list(,$W345,$S345,$U345) = $x346;
if (!(is_object($x345) && isset($x345->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x349 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 115, 21, '<image>/05_string.js');
$_TypeError =& $x349[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x349;
$x350 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x351 = $x350($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x351->class) && $x351->class === 'Error' && !isset($x351->properties['file']) && !isset($x351->properties['line']) && !isset($x351->properties['column'])) {$x351->properties['file'] = '<image>/05_string.js';$x351->properties['line'] = 115;$x351->properties['column'] = 21;$x351->attributes['file'] = $x351->attributes['line'] = $x351->attributes['column'] = 0; }
throw new JSException($x351, 115, 21, '<image>/05_string.js');
}
$x347 = $x345->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 115, 21);
$x348 = $x347($global, $x341, $x345, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x348;;
};
$x352 = clone JS::$arrayTemplate;
$x352->properties['length'] = 0;
$x352->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x352;
$scope->properties['n'] = JS::$undefined; $_n =& $scope->properties['n'];
$Un = FALSE;
$_n = 0;
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = JS::$undefined;
$scope->properties['currentLastIndex'] = JS::$undefined; $_currentLastIndex =& $scope->properties['currentLastIndex'];
$UcurrentLastIndex = FALSE;
$_currentLastIndex = JS::$undefined;
$x353 = 0;
$x354 = JS::toString('lastIndex', $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x355 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 120, 19, '<image>/05_string.js');
$_TypeError =& $x355[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x355;
$x356 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x357 = $x356($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x357->class) && $x357->class === 'Error' && !isset($x357->properties['file']) && !isset($x357->properties['line']) && !isset($x357->properties['column'])) {$x357->properties['file'] = '<image>/05_string.js';$x357->properties['line'] = 120;$x357->properties['column'] = 19;$x357->attributes['file'] = $x357->attributes['line'] = $x357->attributes['column'] = 0; }
throw new JSException($x357, 120, 19, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x358, $W358, $S358, $U358);
$x359 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, JS::toString($x354, $global), 120, 19, '<image>/05_string.js');
$x358 =& $x359[0]; list(,$W358,$S358,$U358) = $x359;
if ($U358 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties[$x354] = $x358; $x358 =& $_regexp->properties[$x354]; $_regexp->attributes[$x354] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U358 = FALSE; $W358 = TRUE; }
if (isset($_regexp->class) && $_regexp->class === 'Array') {  if (isset($_regexp->properties['length']) && $_regexp->properties['length'] !== JS::$undefined) { $x361 = $_regexp->properties['length']; }  else { $x361 = 0; } }
if (isset($S358)) {
$x362 = $S358->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 120, 19);
$x363 = $x362($global, $_regexp, $S358, array($x353), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x360 = $x363;
} else {
if (!$U358) {$x360 = $x353;if ($W358) { $x358 = $x353; }  }
else { $x360 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; }else if ($x354 === 'length' && is_int($x353) && $x361 > $x353) {  for ($i = $x353; $i < $x361; ++$i) {  unset($_regexp->properties[$i], $_regexp->attributes[$i]); }}};
for ($x364 = 0;; ++$x364) {
if ($x364 === 0) {
$scope->properties['previousLastIndex'] = JS::$undefined; $_previousLastIndex =& $scope->properties['previousLastIndex'];
$UpreviousLastIndex = FALSE;
$_previousLastIndex = 0;
$scope->properties['lastMatch'] = JS::$undefined; $_lastMatch =& $scope->properties['lastMatch'];
$UlastMatch = FALSE;
$_lastMatch = true;
}
if ($x364 !== 0) {
$x365 = ++$_n;
}

if (!JS::toBoolean($_lastMatch, $global)) { break; }

if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x367 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
$_TypeError =& $x367[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x367;
$x368 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x369 = $x368($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x369->class) && $x369->class === 'Error' && !isset($x369->properties['file']) && !isset($x369->properties['line']) && !isset($x369->properties['column'])) {$x369->properties['file'] = '<image>/05_string.js';$x369->properties['line'] = 123;$x369->properties['column'] = 22;$x369->attributes['file'] = $x369->attributes['line'] = $x369->attributes['column'] = 0; }
throw new JSException($x369, 123, 22, '<image>/05_string.js');
}
$x366 = JS::toObject($_regexp, $global);
unset($x370, $W370, $S370, $U370);
$x371 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x366, JS::toString('exec', $global), 123, 22, '<image>/05_string.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if (!(is_object($x370) && isset($x370->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x374 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 123, 22, '<image>/05_string.js');
$_TypeError =& $x374[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x374;
$x375 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x376 = $x375($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x376->class) && $x376->class === 'Error' && !isset($x376->properties['file']) && !isset($x376->properties['line']) && !isset($x376->properties['column'])) {$x376->properties['file'] = '<image>/05_string.js';$x376->properties['line'] = 123;$x376->properties['column'] = 22;$x376->attributes['file'] = $x376->attributes['line'] = $x376->attributes['column'] = 0; }
throw new JSException($x376, 123, 22, '<image>/05_string.js');
}
$x372 = $x370->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 123, 22);
$x373 = $x372($global, $x366, $x370, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x373;
$x377 = (!JS::toBoolean((!JS::toBoolean($_match, $global)), $global));
if ($UlastMatch) {$global->properties['lastMatch'] = $_lastMatch; $_lastMatch =& $global->properties['lastMatch']; }
$_lastMatch = $x377;
if (JS::toBoolean($_match, $global)) {
unset($x379, $W379, $S379, $U379);
$x380 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 127, 14, '<image>/05_string.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
$x378 = (((gettype($x379) === gettype($_previousLastIndex) && $x379 === $_previousLastIndex))|| (((is_float($x379) || is_int($x379)) && (is_float($_previousLastIndex) || is_int($_previousLastIndex))) && $x379 == $_previousLastIndex));
if (JS::toBoolean($x378, $global)) {
unset($x383, $W383, $S383, $U383);
$x384 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 128, 50, '<image>/05_string.js');
$x383 =& $x384[0]; list(,$W383,$S383,$U383) = $x384;
$x381 = JS::toPrimitive($x383, $global);
$x382 = JS::toPrimitive(1, $global);
$x385 = (is_string($x381) || is_string($x382) ? JS::toString($x381, $global) . JS::toString($x382, $global) : JS::toNumber($x381, $global) + JS::toNumber($x382, $global));
$x386 = JS::toString('lastIndex', $global);
if ($_regexp === JS::$undefined || $_regexp === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x387 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 128, 42, '<image>/05_string.js');
$_TypeError =& $x387[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x387;
$x388 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x389 = $x388($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x389->class) && $x389->class === 'Error' && !isset($x389->properties['file']) && !isset($x389->properties['line']) && !isset($x389->properties['column'])) {$x389->properties['file'] = '<image>/05_string.js';$x389->properties['line'] = 128;$x389->properties['column'] = 42;$x389->attributes['file'] = $x389->attributes['line'] = $x389->attributes['column'] = 0; }
throw new JSException($x389, 128, 42, '<image>/05_string.js');
}
$_regexp = JS::toObject($_regexp, $global);
unset($x390, $W390, $S390, $U390);
$x391 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_regexp, JS::toString($x386, $global), 128, 42, '<image>/05_string.js');
$x390 =& $x391[0]; list(,$W390,$S390,$U390) = $x391;
if ($U390 && (!isset($_regexp->extensible) || $_regexp->extensible)) {$_regexp->properties[$x386] = $x390; $x390 =& $_regexp->properties[$x386]; $_regexp->attributes[$x386] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U390 = FALSE; $W390 = TRUE; }
if (isset($_regexp->class) && $_regexp->class === 'Array') {  if (isset($_regexp->properties['length']) && $_regexp->properties['length'] !== JS::$undefined) { $x393 = $_regexp->properties['length']; }  else { $x393 = 0; } }
if (isset($S390)) {
$x394 = $S390->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 128, 42);
$x395 = $x394($global, $_regexp, $S390, array($x385), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x392 = $x395;
} else {
if (!$U390) {$x392 = $x385;if ($W390) { $x390 = $x385; }  }
else { $x392 = JS::$undefined; }
}
if (isset($_regexp->class) && $_regexp->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $_regexp->properties['length']) { $_regexp->properties['length'] = 'lastIndex' + 1; }else if ($x386 === 'length' && is_int($x385) && $x393 > $x385) {  for ($i = $x385; $i < $x393; ++$i) {  unset($_regexp->properties[$i], $_regexp->attributes[$i]); }}}
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x392;;
}
else {
unset($x396, $W396, $S396, $U396);
$x397 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_regexp, JS::toString('lastIndex', $global), 130, 31, '<image>/05_string.js');
$x396 =& $x397[0]; list(,$W396,$S396,$U396) = $x397;
if ($UpreviousLastIndex) {$global->properties['previousLastIndex'] = $_previousLastIndex; $_previousLastIndex =& $global->properties['previousLastIndex']; }
$_previousLastIndex = $x396;;
};
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x399 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
$_TypeError =& $x399[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x399;
$x400 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x401 = $x400($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x401->class) && $x401->class === 'Error' && !isset($x401->properties['file']) && !isset($x401->properties['line']) && !isset($x401->properties['column'])) {$x401->properties['file'] = '<image>/05_string.js';$x401->properties['line'] = 133;$x401->properties['column'] = 20;$x401->attributes['file'] = $x401->attributes['line'] = $x401->attributes['column'] = 0; }
throw new JSException($x401, 133, 20, '<image>/05_string.js');
}
$x398 = JS::toObject($_returnArray, $global);
unset($x402, $W402, $S402, $U402);
$x403 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x398, JS::toString('push', $global), 133, 20, '<image>/05_string.js');
$x402 =& $x403[0]; list(,$W402,$S402,$U402) = $x403;
unset($x404, $W404, $S404, $U404);
$x405 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 133, 26, '<image>/05_string.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
if (!(is_object($x402) && isset($x402->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x408 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 133, 20, '<image>/05_string.js');
$_TypeError =& $x408[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x408;
$x409 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x410 = $x409($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x410->class) && $x410->class === 'Error' && !isset($x410->properties['file']) && !isset($x410->properties['line']) && !isset($x410->properties['column'])) {$x410->properties['file'] = '<image>/05_string.js';$x410->properties['line'] = 133;$x410->properties['column'] = 20;$x410->attributes['file'] = $x410->attributes['line'] = $x410->attributes['column'] = 0; }
throw new JSException($x410, 133, 20, '<image>/05_string.js');
}
$x406 = $x402->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 133, 20);
$x407 = $x406($global, $x398, $x402, array($x404), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};;
};
$x411 = (((gettype($_n) === gettype(0) && $_n === 0))|| (((is_float($_n) || is_int($_n)) && (is_float(0) || is_int(0))) && $_n == 0));
if (JS::toBoolean($x411, $global)) {

return NULL;;
};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x325=&$scope->properties[\'arguments\'];$x325->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x325->properties[$i]=$args[$i];$x325->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'regexp\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_regexp=&$scope->properties[\'regexp\'];$Uregexp=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_regexp)&&isset($_regexp->class)&&$_regexp->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x328=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),111,16,\'<image>/05_string.js\');$_RegExp=&$x328[0];list(,$WRegExp,$SRegExp,$URegExp)=$x328;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x329=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),111,16,\'<image>/05_string.js\');$_ReferenceError=&$x329[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x329;$x330=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,16);$x331=$x330($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x331->class)&&$x331->class===\'Error\'&&!isset($x331->properties[\'file\'])&&!isset($x331->properties[\'line\'])&&!isset($x331->properties[\'column\'])){$x331->properties[\'file\']=\'<image>/05_string.js\';$x331->properties[\'line\']=111;$x331->properties[\'column\']=16;$x331->attributes[\'file\']=$x331->attributes[\'line\']=$x331->attributes[\'column\']=0;}throw new JSException($x331,111,16,\'<image>/05_string.js\');}$x326=clone JS::$objectTemplate;unset($x332,$W332,$S332,$U332);$x333=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),111,12,\'<image>/05_string.js\');$x332=&$x333[0];list(,$W332,$S332,$U332)=$x333;$x327=$x332;$x326->prototype=$x327;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x336=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),111,12,\'<image>/05_string.js\');$_TypeError=&$x336[0];list(,$WTypeError,$STypeError,$UTypeError)=$x336;$x337=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x338=$x337($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x338->class)&&$x338->class===\'Error\'&&!isset($x338->properties[\'file\'])&&!isset($x338->properties[\'line\'])&&!isset($x338->properties[\'column\'])){$x338->properties[\'file\']=\'<image>/05_string.js\';$x338->properties[\'line\']=111;$x338->properties[\'column\']=12;$x338->attributes[\'file\']=$x338->attributes[\'line\']=$x338->attributes[\'column\']=0;}throw new JSException($x338,111,12,\'<image>/05_string.js\');}$x334=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',111,12);$x335=$x334($global,$x326,$_RegExp,array($_regexp),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x327=$x335;if(is_object($x327)&&$x327!==JS::$undefined){$x326=$x327;}if($Uregexp){$global->properties[\'regexp\']=$_regexp;$_regexp=&$global->properties[\'regexp\'];}$_regexp=$x326;}unset($x339,$W339,$S339,$U339);$x340=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'global\',$global),114,13,\'<image>/05_string.js\');$x339=&$x340[0];list(,$W339,$S339,$U339)=$x340;if(JS::toBoolean((!JS::toBoolean($x339,$global)),$global)){if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x342=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x342[0];list(,$WTypeError,$STypeError,$UTypeError)=$x342;$x343=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x344=$x343($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x344->class)&&$x344->class===\'Error\'&&!isset($x344->properties[\'file\'])&&!isset($x344->properties[\'line\'])&&!isset($x344->properties[\'column\'])){$x344->properties[\'file\']=\'<image>/05_string.js\';$x344->properties[\'line\']=115;$x344->properties[\'column\']=21;$x344->attributes[\'file\']=$x344->attributes[\'line\']=$x344->attributes[\'column\']=0;}throw new JSException($x344,115,21,\'<image>/05_string.js\');}$x341=JS::toObject($_regexp,$global);unset($x345,$W345,$S345,$U345);$x346=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x341,JS::toString(\'exec\',$global),115,21,\'<image>/05_string.js\');$x345=&$x346[0];list(,$W345,$S345,$U345)=$x346;if(!(is_object($x345)&&isset($x345->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x349=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),115,21,\'<image>/05_string.js\');$_TypeError=&$x349[0];list(,$WTypeError,$STypeError,$UTypeError)=$x349;$x350=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x351=$x350($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x351->class)&&$x351->class===\'Error\'&&!isset($x351->properties[\'file\'])&&!isset($x351->properties[\'line\'])&&!isset($x351->properties[\'column\'])){$x351->properties[\'file\']=\'<image>/05_string.js\';$x351->properties[\'line\']=115;$x351->properties[\'column\']=21;$x351->attributes[\'file\']=$x351->attributes[\'line\']=$x351->attributes[\'column\']=0;}throw new JSException($x351,115,21,\'<image>/05_string.js\');}$x347=$x345->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',115,21);$x348=$x347($global,$x341,$x345,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x348;}$x352=clone JS::$arrayTemplate;$x352->properties[\'length\']=0;$x352->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x352;$scope->properties[\'n\']=JS::$undefined;$_n=&$scope->properties[\'n\'];$Un=FALSE;$_n=0;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'currentLastIndex\']=JS::$undefined;$_currentLastIndex=&$scope->properties[\'currentLastIndex\'];$UcurrentLastIndex=FALSE;$_currentLastIndex=JS::$undefined;$x353=0;$x354=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x355=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),120,19,\'<image>/05_string.js\');$_TypeError=&$x355[0];list(,$WTypeError,$STypeError,$UTypeError)=$x355;$x356=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x357=$x356($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x357->class)&&$x357->class===\'Error\'&&!isset($x357->properties[\'file\'])&&!isset($x357->properties[\'line\'])&&!isset($x357->properties[\'column\'])){$x357->properties[\'file\']=\'<image>/05_string.js\';$x357->properties[\'line\']=120;$x357->properties[\'column\']=19;$x357->attributes[\'file\']=$x357->attributes[\'line\']=$x357->attributes[\'column\']=0;}throw new JSException($x357,120,19,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x358,$W358,$S358,$U358);$x359=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,JS::toString($x354,$global),120,19,\'<image>/05_string.js\');$x358=&$x359[0];list(,$W358,$S358,$U358)=$x359;if($U358&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x354]=$x358;$x358=&$_regexp->properties[$x354];$_regexp->attributes[$x354]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U358=FALSE;$W358=TRUE;}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(isset($_regexp->properties[\'length\'])&&$_regexp->properties[\'length\']!==JS::$undefined){$x361=$_regexp->properties[\'length\'];}else{$x361=0;}}if(isset($S358)){$x362=$S358->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',120,19);$x363=$x362($global,$_regexp,$S358,array($x353),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x360=$x363;}else{if(!$U358){$x360=$x353;if($W358){$x358=$x353;}}else{$x360=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}else if($x354===\'length\'&&is_int($x353)&&$x361>$x353){for($i=$x353;$i<$x361;++$i){unset($_regexp->properties[$i],$_regexp->attributes[$i]);}}}for($x364=0;;++$x364){if($x364===0){$scope->properties[\'previousLastIndex\']=JS::$undefined;$_previousLastIndex=&$scope->properties[\'previousLastIndex\'];$UpreviousLastIndex=FALSE;$_previousLastIndex=0;$scope->properties[\'lastMatch\']=JS::$undefined;$_lastMatch=&$scope->properties[\'lastMatch\'];$UlastMatch=FALSE;$_lastMatch=true;}if($x364!==0){$x365=++$_n;}if(!JS::toBoolean($_lastMatch,$global)){break;}if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x367=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x367[0];list(,$WTypeError,$STypeError,$UTypeError)=$x367;$x368=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x369=$x368($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x369->class)&&$x369->class===\'Error\'&&!isset($x369->properties[\'file\'])&&!isset($x369->properties[\'line\'])&&!isset($x369->properties[\'column\'])){$x369->properties[\'file\']=\'<image>/05_string.js\';$x369->properties[\'line\']=123;$x369->properties[\'column\']=22;$x369->attributes[\'file\']=$x369->attributes[\'line\']=$x369->attributes[\'column\']=0;}throw new JSException($x369,123,22,\'<image>/05_string.js\');}$x366=JS::toObject($_regexp,$global);unset($x370,$W370,$S370,$U370);$x371=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x366,JS::toString(\'exec\',$global),123,22,\'<image>/05_string.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;if(!(is_object($x370)&&isset($x370->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x374=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),123,22,\'<image>/05_string.js\');$_TypeError=&$x374[0];list(,$WTypeError,$STypeError,$UTypeError)=$x374;$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x376=$x375($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x376->class)&&$x376->class===\'Error\'&&!isset($x376->properties[\'file\'])&&!isset($x376->properties[\'line\'])&&!isset($x376->properties[\'column\'])){$x376->properties[\'file\']=\'<image>/05_string.js\';$x376->properties[\'line\']=123;$x376->properties[\'column\']=22;$x376->attributes[\'file\']=$x376->attributes[\'line\']=$x376->attributes[\'column\']=0;}throw new JSException($x376,123,22,\'<image>/05_string.js\');}$x372=$x370->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',123,22);$x373=$x372($global,$x366,$x370,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x373;$x377=(!JS::toBoolean((!JS::toBoolean($_match,$global)),$global));if($UlastMatch){$global->properties[\'lastMatch\']=$_lastMatch;$_lastMatch=&$global->properties[\'lastMatch\'];}$_lastMatch=$x377;if(JS::toBoolean($_match,$global)){unset($x379,$W379,$S379,$U379);$x380=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),127,14,\'<image>/05_string.js\');$x379=&$x380[0];list(,$W379,$S379,$U379)=$x380;$x378=(((gettype($x379)===gettype($_previousLastIndex)&&$x379===$_previousLastIndex))||(((is_float($x379)||is_int($x379))&&(is_float($_previousLastIndex)||is_int($_previousLastIndex)))&&$x379==$_previousLastIndex));if(JS::toBoolean($x378,$global)){unset($x383,$W383,$S383,$U383);$x384=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),128,50,\'<image>/05_string.js\');$x383=&$x384[0];list(,$W383,$S383,$U383)=$x384;$x381=JS::toPrimitive($x383,$global);$x382=JS::toPrimitive(1,$global);$x385=(is_string($x381)||is_string($x382)?JS::toString($x381,$global).JS::toString($x382,$global):JS::toNumber($x381,$global)+JS::toNumber($x382,$global));$x386=JS::toString(\'lastIndex\',$global);if($_regexp===JS::$undefined||$_regexp===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x387=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),128,42,\'<image>/05_string.js\');$_TypeError=&$x387[0];list(,$WTypeError,$STypeError,$UTypeError)=$x387;$x388=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x389=$x388($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x389->class)&&$x389->class===\'Error\'&&!isset($x389->properties[\'file\'])&&!isset($x389->properties[\'line\'])&&!isset($x389->properties[\'column\'])){$x389->properties[\'file\']=\'<image>/05_string.js\';$x389->properties[\'line\']=128;$x389->properties[\'column\']=42;$x389->attributes[\'file\']=$x389->attributes[\'line\']=$x389->attributes[\'column\']=0;}throw new JSException($x389,128,42,\'<image>/05_string.js\');}$_regexp=JS::toObject($_regexp,$global);unset($x390,$W390,$S390,$U390);$x391=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_regexp,JS::toString($x386,$global),128,42,\'<image>/05_string.js\');$x390=&$x391[0];list(,$W390,$S390,$U390)=$x391;if($U390&&(!isset($_regexp->extensible)||$_regexp->extensible)){$_regexp->properties[$x386]=$x390;$x390=&$_regexp->properties[$x386];$_regexp->attributes[$x386]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U390=FALSE;$W390=TRUE;}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(isset($_regexp->properties[\'length\'])&&$_regexp->properties[\'length\']!==JS::$undefined){$x393=$_regexp->properties[\'length\'];}else{$x393=0;}}if(isset($S390)){$x394=$S390->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',128,42);$x395=$x394($global,$_regexp,$S390,array($x385),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x392=$x395;}else{if(!$U390){$x392=$x385;if($W390){$x390=$x385;}}else{$x392=JS::$undefined;}}if(isset($_regexp->class)&&$_regexp->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_regexp->properties[\'length\']){$_regexp->properties[\'length\']=\'lastIndex\'+1;}else if($x386===\'length\'&&is_int($x385)&&$x393>$x385){for($i=$x385;$i<$x393;++$i){unset($_regexp->properties[$i],$_regexp->attributes[$i]);}}}if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x392;}else{unset($x396,$W396,$S396,$U396);$x397=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_regexp,JS::toString(\'lastIndex\',$global),130,31,\'<image>/05_string.js\');$x396=&$x397[0];list(,$W396,$S396,$U396)=$x397;if($UpreviousLastIndex){$global->properties[\'previousLastIndex\']=$_previousLastIndex;$_previousLastIndex=&$global->properties[\'previousLastIndex\'];}$_previousLastIndex=$x396;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x399=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x399[0];list(,$WTypeError,$STypeError,$UTypeError)=$x399;$x400=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x401=$x400($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x401->class)&&$x401->class===\'Error\'&&!isset($x401->properties[\'file\'])&&!isset($x401->properties[\'line\'])&&!isset($x401->properties[\'column\'])){$x401->properties[\'file\']=\'<image>/05_string.js\';$x401->properties[\'line\']=133;$x401->properties[\'column\']=20;$x401->attributes[\'file\']=$x401->attributes[\'line\']=$x401->attributes[\'column\']=0;}throw new JSException($x401,133,20,\'<image>/05_string.js\');}$x398=JS::toObject($_returnArray,$global);unset($x402,$W402,$S402,$U402);$x403=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x398,JS::toString(\'push\',$global),133,20,\'<image>/05_string.js\');$x402=&$x403[0];list(,$W402,$S402,$U402)=$x403;unset($x404,$W404,$S404,$U404);$x405=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),133,26,\'<image>/05_string.js\');$x404=&$x405[0];list(,$W404,$S404,$U404)=$x405;if(!(is_object($x402)&&isset($x402->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x408=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),133,20,\'<image>/05_string.js\');$_TypeError=&$x408[0];list(,$WTypeError,$STypeError,$UTypeError)=$x408;$x409=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x410=$x409($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x410->class)&&$x410->class===\'Error\'&&!isset($x410->properties[\'file\'])&&!isset($x410->properties[\'line\'])&&!isset($x410->properties[\'column\'])){$x410->properties[\'file\']=\'<image>/05_string.js\';$x410->properties[\'line\']=133;$x410->properties[\'column\']=20;$x410->attributes[\'file\']=$x410->attributes[\'line\']=$x410->attributes[\'column\']=0;}throw new JSException($x410,133,20,\'<image>/05_string.js\');}$x406=$x402->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',133,20);$x407=$x406($global,$x398,$x402,array($x404),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}$x411=(((gettype($_n)===gettype(0)&&$_n===0))||(((is_float($_n)||is_int($_n))&&(is_float(0)||is_int(0)))&&$_n==0));if(JS::toBoolean($x411,$global)){return NULL;}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x546 =& $scope->properties['arguments'];
$x546->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x546->properties[$i] = $args[$i];
$x546->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['_'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$___ =& $scope->properties['_'];
$U__ = FALSE;
$scope->properties['c'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_c =& $scope->properties['c'];
$Uc = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x547 = (((gettype($_c) === gettype('$') && $_c === '$'))|| (((is_float($_c) || is_int($_c)) && (is_float('$') || is_int('$'))) && $_c == '$'));
if (JS::toBoolean($x547, $global)) {

return '$';;
}
else {
$x548 = (((gettype($_c) === gettype('&') && $_c === '&'))|| (((is_float($_c) || is_int($_c)) && (is_float('&') || is_int('&'))) && $_c == '&'));
if (JS::toBoolean($x548, $global)) {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x549 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('match', $global), 171, 13, '<image>/05_string.js');
$_match =& $x549[0]; list(,$Wmatch,$Smatch,$Umatch) = $x549;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x550 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 171, 13, '<image>/05_string.js');
$_ReferenceError =& $x550[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x550;
$x551 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 171, 13);
$x552 = $x551($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x552->class) && $x552->class === 'Error' && !isset($x552->properties['file']) && !isset($x552->properties['line']) && !isset($x552->properties['column'])) {$x552->properties['file'] = '<image>/05_string.js';$x552->properties['line'] = 171;$x552->properties['column'] = 13;$x552->attributes['file'] = $x552->attributes['line'] = $x552->attributes['column'] = 0; }
throw new JSException($x552, 171, 13, '<image>/05_string.js');
}
unset($x553, $W553, $S553, $U553);
$x554 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 171, 18, '<image>/05_string.js');
$x553 =& $x554[0]; list(,$W553,$S553,$U553) = $x554;
return $x553;;
}
else {
unset($_match, $Wmatch, $Smatch, $Umatch);
$x555 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('match', $global), 174, 13, '<image>/05_string.js');
$_match =& $x555[0]; list(,$Wmatch,$Smatch,$Umatch) = $x555;
if ($Umatch) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x556 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 174, 13, '<image>/05_string.js');
$_ReferenceError =& $x556[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x556;
$x557 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 13);
$x558 = $x557($global, $global, $_ReferenceError, array('match is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x558->class) && $x558->class === 'Error' && !isset($x558->properties['file']) && !isset($x558->properties['line']) && !isset($x558->properties['column'])) {$x558->properties['file'] = '<image>/05_string.js';$x558->properties['line'] = 174;$x558->properties['column'] = 13;$x558->attributes['file'] = $x558->attributes['line'] = $x558->attributes['column'] = 0; }
throw new JSException($x558, 174, 13, '<image>/05_string.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x559 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Number', $global), 174, 19, '<image>/05_string.js');
$_Number =& $x559[0]; list(,$WNumber,$SNumber,$UNumber) = $x559;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x560 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 174, 19, '<image>/05_string.js');
$_ReferenceError =& $x560[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x560;
$x561 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 19);
$x562 = $x561($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x562->class) && $x562->class === 'Error' && !isset($x562->properties['file']) && !isset($x562->properties['line']) && !isset($x562->properties['column'])) {$x562->properties['file'] = '<image>/05_string.js';$x562->properties['line'] = 174;$x562->properties['column'] = 19;$x562->attributes['file'] = $x562->attributes['line'] = $x562->attributes['column'] = 0; }
throw new JSException($x562, 174, 19, '<image>/05_string.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x565 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 174, 25, '<image>/05_string.js');
$_TypeError =& $x565[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x565;
$x566 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x567 = $x566($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x567->class) && $x567->class === 'Error' && !isset($x567->properties['file']) && !isset($x567->properties['line']) && !isset($x567->properties['column'])) {$x567->properties['file'] = '<image>/05_string.js';$x567->properties['line'] = 174;$x567->properties['column'] = 25;$x567->attributes['file'] = $x567->attributes['line'] = $x567->attributes['column'] = 0; }
throw new JSException($x567, 174, 25, '<image>/05_string.js');
}
$x563 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 174, 25);
$x564 = $x563($global, $global, $_Number, array($_c), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x568, $W568, $S568, $U568);
$x569 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString($x564, $global), 174, 18, '<image>/05_string.js');
$x568 =& $x569[0]; list(,$W568,$S568,$U568) = $x569;
return $x568;;
};
}
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x546=&$scope->properties[\'arguments\'];$x546->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x546->properties[$i]=$args[$i];$x546->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'_\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$___=&$scope->properties[\'_\'];$U__=FALSE;$scope->properties[\'c\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_c=&$scope->properties[\'c\'];$Uc=FALSE;$global->scope[++$global->scope_sp]=$scope;$x547=(((gettype($_c)===gettype(\'$\')&&$_c===\'$\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'$\')||is_int(\'$\')))&&$_c==\'$\'));if(JS::toBoolean($x547,$global)){return\'$\';}else{$x548=(((gettype($_c)===gettype(\'&\')&&$_c===\'&\'))||(((is_float($_c)||is_int($_c))&&(is_float(\'&\')||is_int(\'&\')))&&$_c==\'&\'));if(JS::toBoolean($x548,$global)){unset($_match,$Wmatch,$Smatch,$Umatch);$x549=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'match\',$global),171,13,\'<image>/05_string.js\');$_match=&$x549[0];list(,$Wmatch,$Smatch,$Umatch)=$x549;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x550=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),171,13,\'<image>/05_string.js\');$_ReferenceError=&$x550[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x550;$x551=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',171,13);$x552=$x551($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x552->class)&&$x552->class===\'Error\'&&!isset($x552->properties[\'file\'])&&!isset($x552->properties[\'line\'])&&!isset($x552->properties[\'column\'])){$x552->properties[\'file\']=\'<image>/05_string.js\';$x552->properties[\'line\']=171;$x552->properties[\'column\']=13;$x552->attributes[\'file\']=$x552->attributes[\'line\']=$x552->attributes[\'column\']=0;}throw new JSException($x552,171,13,\'<image>/05_string.js\');}unset($x553,$W553,$S553,$U553);$x554=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),171,18,\'<image>/05_string.js\');$x553=&$x554[0];list(,$W553,$S553,$U553)=$x554;return$x553;}else{unset($_match,$Wmatch,$Smatch,$Umatch);$x555=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'match\',$global),174,13,\'<image>/05_string.js\');$_match=&$x555[0];list(,$Wmatch,$Smatch,$Umatch)=$x555;if($Umatch){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x556=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),174,13,\'<image>/05_string.js\');$_ReferenceError=&$x556[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x556;$x557=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,13);$x558=$x557($global,$global,$_ReferenceError,array(\'match is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x558->class)&&$x558->class===\'Error\'&&!isset($x558->properties[\'file\'])&&!isset($x558->properties[\'line\'])&&!isset($x558->properties[\'column\'])){$x558->properties[\'file\']=\'<image>/05_string.js\';$x558->properties[\'line\']=174;$x558->properties[\'column\']=13;$x558->attributes[\'file\']=$x558->attributes[\'line\']=$x558->attributes[\'column\']=0;}throw new JSException($x558,174,13,\'<image>/05_string.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x559=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Number\',$global),174,19,\'<image>/05_string.js\');$_Number=&$x559[0];list(,$WNumber,$SNumber,$UNumber)=$x559;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x560=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),174,19,\'<image>/05_string.js\');$_ReferenceError=&$x560[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x560;$x561=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,19);$x562=$x561($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x562->class)&&$x562->class===\'Error\'&&!isset($x562->properties[\'file\'])&&!isset($x562->properties[\'line\'])&&!isset($x562->properties[\'column\'])){$x562->properties[\'file\']=\'<image>/05_string.js\';$x562->properties[\'line\']=174;$x562->properties[\'column\']=19;$x562->attributes[\'file\']=$x562->attributes[\'line\']=$x562->attributes[\'column\']=0;}throw new JSException($x562,174,19,\'<image>/05_string.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x565=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),174,25,\'<image>/05_string.js\');$_TypeError=&$x565[0];list(,$WTypeError,$STypeError,$UTypeError)=$x565;$x566=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x567=$x566($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x567->class)&&$x567->class===\'Error\'&&!isset($x567->properties[\'file\'])&&!isset($x567->properties[\'line\'])&&!isset($x567->properties[\'column\'])){$x567->properties[\'file\']=\'<image>/05_string.js\';$x567->properties[\'line\']=174;$x567->properties[\'column\']=25;$x567->attributes[\'file\']=$x567->attributes[\'line\']=$x567->attributes[\'column\']=0;}throw new JSException($x567,174,25,\'<image>/05_string.js\');}$x563=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',174,25);$x564=$x563($global,$global,$_Number,array($_c),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x568,$W568,$S568,$U568);$x569=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString($x564,$global),174,18,\'<image>/05_string.js\');$x568=&$x569[0];list(,$W568,$S568,$U568)=$x569;return$x568;}}return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x426 =& $scope->properties['arguments'];
$x426->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x426->properties[$i] = $args[$i];
$x426->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x429 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 146, 16, '<image>/05_string.js');
$_RegExp =& $x429[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x429;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x430 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 146, 16, '<image>/05_string.js');
$_ReferenceError =& $x430[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x430;
$x431 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 16);
$x432 = $x431($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x432->class) && $x432->class === 'Error' && !isset($x432->properties['file']) && !isset($x432->properties['line']) && !isset($x432->properties['column'])) {$x432->properties['file'] = '<image>/05_string.js';$x432->properties['line'] = 146;$x432->properties['column'] = 16;$x432->attributes['file'] = $x432->attributes['line'] = $x432->attributes['column'] = 0; }
throw new JSException($x432, 146, 16, '<image>/05_string.js');
}
$x427 = clone JS::$objectTemplate;
unset($x433, $W433, $S433, $U433);
$x434 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 146, 12, '<image>/05_string.js');
$x433 =& $x434[0]; list(,$W433,$S433,$U433) = $x434;
$x428 = $x433;
$x427->prototype = $x428;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x437 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 146, 12, '<image>/05_string.js');
$_TypeError =& $x437[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x437;
$x438 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x439 = $x438($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x439->class) && $x439->class === 'Error' && !isset($x439->properties['file']) && !isset($x439->properties['line']) && !isset($x439->properties['column'])) {$x439->properties['file'] = '<image>/05_string.js';$x439->properties['line'] = 146;$x439->properties['column'] = 12;$x439->attributes['file'] = $x439->attributes['line'] = $x439->attributes['column'] = 0; }
throw new JSException($x439, 146, 12, '<image>/05_string.js');
}
$x435 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 146, 12);
$x436 = $x435($global, $x427, $_RegExp, array(preg_quote(JS::toString($_search, $global), '/')), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x428 = $x436;
if (is_object($x428) && $x428 !== JS::$undefined) { $x427 = $x428; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x427;;
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
$x442 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
$_TypeError =& $x442[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x442;
$x443 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x444 = $x443($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x444->class) && $x444->class === 'Error' && !isset($x444->properties['file']) && !isset($x444->properties['line']) && !isset($x444->properties['column'])) {$x444->properties['file'] = '<image>/05_string.js';$x444->properties['line'] = 152;$x444->properties['column'] = 29;$x444->attributes['file'] = $x444->attributes['line'] = $x444->attributes['column'] = 0; }
throw new JSException($x444, 152, 29, '<image>/05_string.js');
}
$x441 = JS::toObject($_search, $global);
unset($x445, $W445, $S445, $U445);
$x446 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x441, JS::toString('exec', $global), 152, 29, '<image>/05_string.js');
$x445 =& $x446[0]; list(,$W445,$S445,$U445) = $x446;
if (!(is_object($x445) && isset($x445->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x449 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 152, 29, '<image>/05_string.js');
$_TypeError =& $x449[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x449;
$x450 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x451 = $x450($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x451->class) && $x451->class === 'Error' && !isset($x451->properties['file']) && !isset($x451->properties['line']) && !isset($x451->properties['column'])) {$x451->properties['file'] = '<image>/05_string.js';$x451->properties['line'] = 152;$x451->properties['column'] = 29;$x451->attributes['file'] = $x451->attributes['line'] = $x451->attributes['column'] = 0; }
throw new JSException($x451, 152, 29, '<image>/05_string.js');
}
$x447 = $x445->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 152, 29);
$x448 = $x447($global, $x441, $x445, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x448;
$x440 = !(((gettype($_match) === gettype(NULL) && $_match === NULL))|| (((is_float($_match) || is_int($_match)) && (is_float(NULL) || is_int(NULL))) && $_match == NULL));
if (!JS::toBoolean($x440, $global)) { break; }

unset($x452, $W452, $S452, $U452);
$x453 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 153, 16, '<image>/05_string.js');
$x452 =& $x453[0]; list(,$W452,$S452,$U452) = $x453;
if ($Uindex) {$global->properties['index'] = $_index; $_index =& $global->properties['index']; }
$_index = $x452;
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x455 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 154, 40, '<image>/05_string.js');
$_TypeError =& $x455[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x455;
$x456 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x457 = $x456($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x457->class) && $x457->class === 'Error' && !isset($x457->properties['file']) && !isset($x457->properties['line']) && !isset($x457->properties['column'])) {$x457->properties['file'] = '<image>/05_string.js';$x457->properties['line'] = 154;$x457->properties['column'] = 40;$x457->attributes['file'] = $x457->attributes['line'] = $x457->attributes['column'] = 0; }
throw new JSException($x457, 154, 40, '<image>/05_string.js');
}
$x454 = JS::toObject($_thisString, $global);
unset($x458, $W458, $S458, $U458);
$x459 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x454, JS::toString('substring', $global), 154, 40, '<image>/05_string.js');
$x458 =& $x459[0]; list(,$W458,$S458,$U458) = $x459;
if (!(is_object($x458) && isset($x458->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x462 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 154, 40, '<image>/05_string.js');
$_TypeError =& $x462[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x462;
$x463 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x464 = $x463($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x464->class) && $x464->class === 'Error' && !isset($x464->properties['file']) && !isset($x464->properties['line']) && !isset($x464->properties['column'])) {$x464->properties['file'] = '<image>/05_string.js';$x464->properties['line'] = 154;$x464->properties['column'] = 40;$x464->attributes['file'] = $x464->attributes['line'] = $x464->attributes['column'] = 0; }
throw new JSException($x464, 154, 40, '<image>/05_string.js');
}
$x460 = $x458->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 154, 40);
$x461 = $x460($global, $x454, $x458, array($_lastIndex, $_index), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x461;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x465 = JS::toPrimitive($_newString, $global);
$x466 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x465) || is_string($x466) ? JS::toString($x465, $global) . JS::toString($x466, $global) : JS::toNumber($x465, $global) + JS::toNumber($x466, $global));
unset($x469, $W469, $S469, $U469);
$x470 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 155, 28, '<image>/05_string.js');
$x469 =& $x470[0]; list(,$W469,$S469,$U469) = $x470;
unset($x471, $W471, $S471, $U471);
$x472 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x469, JS::toString('length', $global), 155, 31, '<image>/05_string.js');
$x471 =& $x472[0]; list(,$W471,$S471,$U471) = $x472;
$x467 = JS::toPrimitive($_index, $global);
$x468 = JS::toPrimitive($x471, $global);
$x473 = (is_string($x467) || is_string($x468) ? JS::toString($x467, $global) . JS::toString($x468, $global) : JS::toNumber($x467, $global) + JS::toNumber($x468, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x473;
$x475 = $_replace;
$x475 = ($x475 === JS::$undefined ? 'undefined' : (is_int($x475) || is_float($x475) ? 'number' : (is_bool($x475) ? 'boolean' : (is_string($x475) ? 'string' : (is_object($x475) && isset($x475->call) ? 'function' : 'object')))));
$x474 = (((gettype($x475) === gettype('function') && $x475 === 'function'))|| (((is_float($x475) || is_int($x475)) && (is_float('function') || is_int('function'))) && $x475 == 'function'));
if (JS::toBoolean($x474, $global)) {
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x477 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 158, 14, '<image>/05_string.js');
$_TypeError =& $x477[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x477;
$x478 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x479 = $x478($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x479->class) && $x479->class === 'Error' && !isset($x479->properties['file']) && !isset($x479->properties['line']) && !isset($x479->properties['column'])) {$x479->properties['file'] = '<image>/05_string.js';$x479->properties['line'] = 158;$x479->properties['column'] = 14;$x479->attributes['file'] = $x479->attributes['line'] = $x479->attributes['column'] = 0; }
throw new JSException($x479, 158, 14, '<image>/05_string.js');
}
$x476 = JS::toObject($_match, $global);
unset($x480, $W480, $S480, $U480);
$x481 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x476, JS::toString('push', $global), 158, 14, '<image>/05_string.js');
$x480 =& $x481[0]; list(,$W480,$S480,$U480) = $x481;
unset($x482, $W482, $S482, $U482);
$x483 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 158, 20, '<image>/05_string.js');
$x482 =& $x483[0]; list(,$W482,$S482,$U482) = $x483;
if (!(is_object($x480) && isset($x480->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x486 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 158, 14, '<image>/05_string.js');
$_TypeError =& $x486[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x486;
$x487 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x488 = $x487($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x488->class) && $x488->class === 'Error' && !isset($x488->properties['file']) && !isset($x488->properties['line']) && !isset($x488->properties['column'])) {$x488->properties['file'] = '<image>/05_string.js';$x488->properties['line'] = 158;$x488->properties['column'] = 14;$x488->attributes['file'] = $x488->attributes['line'] = $x488->attributes['column'] = 0; }
throw new JSException($x488, 158, 14, '<image>/05_string.js');
}
$x484 = $x480->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 158, 14);
$x485 = $x484($global, $x476, $x480, array($x482), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($_match === JS::$undefined || $_match === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x490 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
$_TypeError =& $x490[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x490;
$x491 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x492 = $x491($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x492->class) && $x492->class === 'Error' && !isset($x492->properties['file']) && !isset($x492->properties['line']) && !isset($x492->properties['column'])) {$x492->properties['file'] = '<image>/05_string.js';$x492->properties['line'] = 159;$x492->properties['column'] = 14;$x492->attributes['file'] = $x492->attributes['line'] = $x492->attributes['column'] = 0; }
throw new JSException($x492, 159, 14, '<image>/05_string.js');
}
$x489 = JS::toObject($_match, $global);
unset($x493, $W493, $S493, $U493);
$x494 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x489, JS::toString('push', $global), 159, 14, '<image>/05_string.js');
$x493 =& $x494[0]; list(,$W493,$S493,$U493) = $x494;
unset($x495, $W495, $S495, $U495);
$x496 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('input', $global), 159, 20, '<image>/05_string.js');
$x495 =& $x496[0]; list(,$W495,$S495,$U495) = $x496;
if (!(is_object($x493) && isset($x493->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x499 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 159, 14, '<image>/05_string.js');
$_TypeError =& $x499[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x499;
$x500 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x501 = $x500($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x501->class) && $x501->class === 'Error' && !isset($x501->properties['file']) && !isset($x501->properties['line']) && !isset($x501->properties['column'])) {$x501->properties['file'] = '<image>/05_string.js';$x501->properties['line'] = 159;$x501->properties['column'] = 14;$x501->attributes['file'] = $x501->attributes['line'] = $x501->attributes['column'] = 0; }
throw new JSException($x501, 159, 14, '<image>/05_string.js');
}
$x497 = $x493->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 159, 14);
$x498 = $x497($global, $x489, $x493, array($x495), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!array_key_exists('index', $_match->attributes)) { unset($_match->properties['index']); $x502 = TRUE; }
else if ($_match->attributes['index'] & JS::CONFIGURABLE) { unset($_match->properties['index'], $_match->attributes['index'], $_match->getters['index'], $_match->setters['index']); $x502 = TRUE; }
else { $x502 = FALSE; };
if (!array_key_exists('input', $_match->attributes)) { unset($_match->properties['input']); $x503 = TRUE; }
else if ($_match->attributes['input'] & JS::CONFIGURABLE) { unset($_match->properties['input'], $_match->attributes['input'], $_match->getters['input'], $_match->setters['input']); $x503 = TRUE; }
else { $x503 = FALSE; };
unset($_String, $WString, $SString, $UString);
$x504 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('String', $global), 163, 21, '<image>/05_string.js');
$_String =& $x504[0]; list(,$WString,$SString,$UString) = $x504;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x505 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 163, 21, '<image>/05_string.js');
$_ReferenceError =& $x505[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x505;
$x506 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 21);
$x507 = $x506($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x507->class) && $x507->class === 'Error' && !isset($x507->properties['file']) && !isset($x507->properties['line']) && !isset($x507->properties['column'])) {$x507->properties['file'] = '<image>/05_string.js';$x507->properties['line'] = 163;$x507->properties['column'] = 21;$x507->attributes['file'] = $x507->attributes['line'] = $x507->attributes['column'] = 0; }
throw new JSException($x507, 163, 21, '<image>/05_string.js');
}
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x509 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 163, 41, '<image>/05_string.js');
$_TypeError =& $x509[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x509;
$x510 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x511 = $x510($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x511->class) && $x511->class === 'Error' && !isset($x511->properties['file']) && !isset($x511->properties['line']) && !isset($x511->properties['column'])) {$x511->properties['file'] = '<image>/05_string.js';$x511->properties['line'] = 163;$x511->properties['column'] = 41;$x511->attributes['file'] = $x511->attributes['line'] = $x511->attributes['column'] = 0; }
throw new JSException($x511, 163, 41, '<image>/05_string.js');
}
$x508 = JS::toObject($_replace, $global);
unset($x512, $W512, $S512, $U512);
$x513 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x508, JS::toString('apply', $global), 163, 41, '<image>/05_string.js');
$x512 =& $x513[0]; list(,$W512,$S512,$U512) = $x513;
if (!(is_object($x512) && isset($x512->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x516 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 163, 41, '<image>/05_string.js');
$_TypeError =& $x516[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x516;
$x517 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x518 = $x517($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x518->class) && $x518->class === 'Error' && !isset($x518->properties['file']) && !isset($x518->properties['line']) && !isset($x518->properties['column'])) {$x518->properties['file'] = '<image>/05_string.js';$x518->properties['line'] = 163;$x518->properties['column'] = 41;$x518->attributes['file'] = $x518->attributes['line'] = $x518->attributes['column'] = 0; }
throw new JSException($x518, 163, 41, '<image>/05_string.js');
}
$x514 = $x512->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 41);
$x515 = $x514($global, $x508, $x512, array(JS::$undefined, $_match), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x521 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 163, 27, '<image>/05_string.js');
$_TypeError =& $x521[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x521;
$x522 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x523 = $x522($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x523->class) && $x523->class === 'Error' && !isset($x523->properties['file']) && !isset($x523->properties['line']) && !isset($x523->properties['column'])) {$x523->properties['file'] = '<image>/05_string.js';$x523->properties['line'] = 163;$x523->properties['column'] = 27;$x523->attributes['file'] = $x523->attributes['line'] = $x523->attributes['column'] = 0; }
throw new JSException($x523, 163, 27, '<image>/05_string.js');
}
$x519 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 163, 27);
$x520 = $x519($global, $global, $_String, array($x515), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Us) {$global->properties['s'] = $_s; $_s =& $global->properties['s']; }
$_s = $x520;
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x524 = JS::toPrimitive($_newString, $global);
$x525 = JS::toPrimitive($_s, $global);
$_newString = (is_string($x524) || is_string($x525) ? JS::toString($x524, $global) . JS::toString($x525, $global) : JS::toNumber($x524, $global) + JS::toNumber($x525, $global));;
}
else {
if ($_replace === JS::$undefined || $_replace === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x527 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 32, '<image>/05_string.js');
$_TypeError =& $x527[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x527;
$x528 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x529 = $x528($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x529->class) && $x529->class === 'Error' && !isset($x529->properties['file']) && !isset($x529->properties['line']) && !isset($x529->properties['column'])) {$x529->properties['file'] = '<image>/05_string.js';$x529->properties['line'] = 166;$x529->properties['column'] = 32;$x529->attributes['file'] = $x529->attributes['line'] = $x529->attributes['column'] = 0; }
throw new JSException($x529, 166, 32, '<image>/05_string.js');
}
$x526 = JS::toObject($_replace, $global);
unset($x530, $W530, $S530, $U530);
$x531 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x526, JS::toString('replace', $global), 166, 32, '<image>/05_string.js');
$x530 =& $x531[0]; list(,$W530,$S530,$U530) = $x531;
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x534 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 166, 33, '<image>/05_string.js');
$_RegExp =& $x534[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x534;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x535 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 166, 33, '<image>/05_string.js');
$_ReferenceError =& $x535[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x535;
$x536 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x537 = $x536($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x537->class) && $x537->class === 'Error' && !isset($x537->properties['file']) && !isset($x537->properties['line']) && !isset($x537->properties['column'])) {$x537->properties['file'] = '<image>/05_string.js';$x537->properties['line'] = 166;$x537->properties['column'] = 33;$x537->attributes['file'] = $x537->attributes['line'] = $x537->attributes['column'] = 0; }
throw new JSException($x537, 166, 33, '<image>/05_string.js');
}
$x532 = clone JS::$objectTemplate;
unset($x538, $W538, $S538, $U538);
$x539 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 166, 33, '<image>/05_string.js');
$x538 =& $x539[0]; list(,$W538,$S538,$U538) = $x539;
$x533 = $x538;
$x532->prototype = $x533;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x542 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 33, '<image>/05_string.js');
$_TypeError =& $x542[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x542;
$x543 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x544 = $x543($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x544->class) && $x544->class === 'Error' && !isset($x544->properties['file']) && !isset($x544->properties['line']) && !isset($x544->properties['column'])) {$x544->properties['file'] = '<image>/05_string.js';$x544->properties['line'] = 166;$x544->properties['column'] = 33;$x544->attributes['file'] = $x544->attributes['line'] = $x544->attributes['column'] = 0; }
throw new JSException($x544, 166, 33, '<image>/05_string.js');
}
$x540 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 33);
$x541 = $x540($global, $x532, $_RegExp, array('\\$([$&]|[0-9]|[0-9][0-9])', 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x533 = $x541;
if (is_object($x533) && $x533 !== JS::$undefined) { $x532 = $x533; }
$x570 = clone JS::$functionTemplate; $x570->call = '_465e5538fcb402e27559db40bec8addd_15'; $x570->parameters = array (
  0 => '_',
  1 => 'c',
); $x570->scope = $scope; $x570->properties['prototype'] = clone JS::$objectTemplate; $x570->attributes['prototype'] = JS::WRITABLE; $x570->properties['prototype']->properties['constructor'] = $x570; $x570->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x570->properties['length'] = 2; $x570->attributes['length'] = 0;
if (!(is_object($x530) && isset($x530->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x573 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 166, 32, '<image>/05_string.js');
$_TypeError =& $x573[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x573;
$x574 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x575 = $x574($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x575->class) && $x575->class === 'Error' && !isset($x575->properties['file']) && !isset($x575->properties['line']) && !isset($x575->properties['column'])) {$x575->properties['file'] = '<image>/05_string.js';$x575->properties['line'] = 166;$x575->properties['column'] = 32;$x575->attributes['file'] = $x575->attributes['line'] = $x575->attributes['column'] = 0; }
throw new JSException($x575, 166, 32, '<image>/05_string.js');
}
$x571 = $x530->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 166, 32);
$x572 = $x571($global, $x526, $x530, array($x532, $x570), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x576 = JS::toPrimitive($_newString, $global);
$x577 = JS::toPrimitive($x572, $global);
$_newString = (is_string($x576) || is_string($x577) ? JS::toString($x576, $global) . JS::toString($x577, $global) : JS::toNumber($x576, $global) + JS::toNumber($x577, $global));;
};
unset($x578, $W578, $S578, $U578);
$x579 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, JS::toString('global', $global), 179, 14, '<image>/05_string.js');
$x578 =& $x579[0]; list(,$W578,$S578,$U578) = $x579;
if (JS::toBoolean((!JS::toBoolean($x578, $global)), $global)) {
break;;
};;
};
if ($_thisString === JS::$undefined || $_thisString === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x581 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 35, '<image>/05_string.js');
$_TypeError =& $x581[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x581;
$x582 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x583 = $x582($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x583->class) && $x583->class === 'Error' && !isset($x583->properties['file']) && !isset($x583->properties['line']) && !isset($x583->properties['column'])) {$x583->properties['file'] = '<image>/05_string.js';$x583->properties['line'] = 184;$x583->properties['column'] = 35;$x583->attributes['file'] = $x583->attributes['line'] = $x583->attributes['column'] = 0; }
throw new JSException($x583, 184, 35, '<image>/05_string.js');
}
$x580 = JS::toObject($_thisString, $global);
unset($x584, $W584, $S584, $U584);
$x585 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x580, JS::toString('substring', $global), 184, 35, '<image>/05_string.js');
$x584 =& $x585[0]; list(,$W584,$S584,$U584) = $x585;
unset($x586, $W586, $S586, $U586);
$x587 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_thisString, JS::toString('length', $global), 184, 57, '<image>/05_string.js');
$x586 =& $x587[0]; list(,$W586,$S586,$U586) = $x587;
if (!(is_object($x584) && isset($x584->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x590 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 184, 35, '<image>/05_string.js');
$_TypeError =& $x590[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x590;
$x591 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x592 = $x591($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x592->class) && $x592->class === 'Error' && !isset($x592->properties['file']) && !isset($x592->properties['line']) && !isset($x592->properties['column'])) {$x592->properties['file'] = '<image>/05_string.js';$x592->properties['line'] = 184;$x592->properties['column'] = 35;$x592->attributes['file'] = $x592->attributes['line'] = $x592->attributes['column'] = 0; }
throw new JSException($x592, 184, 35, '<image>/05_string.js');
}
$x588 = $x584->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 184, 35);
$x589 = $x588($global, $x580, $x584, array($_lastIndex, $x586), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($UnewString) {$global->properties['newString'] = $_newString; $_newString =& $global->properties['newString']; }
$x593 = JS::toPrimitive($_newString, $global);
$x594 = JS::toPrimitive($x589, $global);
$_newString = (is_string($x593) || is_string($x594) ? JS::toString($x593, $global) . JS::toString($x594, $global) : JS::toNumber($x593, $global) + JS::toNumber($x594, $global));
return $_newString;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x426=&$scope->properties[\'arguments\'];$x426->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x426->properties[$i]=$args[$i];$x426->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$scope->properties[\'replace\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_replace=&$scope->properties[\'replace\'];$Ureplace=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!is_object($_search)||!isset($_search->class)||$_search->class!==\'RegExp\',$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x429=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),146,16,\'<image>/05_string.js\');$_RegExp=&$x429[0];list(,$WRegExp,$SRegExp,$URegExp)=$x429;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x430=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),146,16,\'<image>/05_string.js\');$_ReferenceError=&$x430[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x430;$x431=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,16);$x432=$x431($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x432->class)&&$x432->class===\'Error\'&&!isset($x432->properties[\'file\'])&&!isset($x432->properties[\'line\'])&&!isset($x432->properties[\'column\'])){$x432->properties[\'file\']=\'<image>/05_string.js\';$x432->properties[\'line\']=146;$x432->properties[\'column\']=16;$x432->attributes[\'file\']=$x432->attributes[\'line\']=$x432->attributes[\'column\']=0;}throw new JSException($x432,146,16,\'<image>/05_string.js\');}$x427=clone JS::$objectTemplate;unset($x433,$W433,$S433,$U433);$x434=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),146,12,\'<image>/05_string.js\');$x433=&$x434[0];list(,$W433,$S433,$U433)=$x434;$x428=$x433;$x427->prototype=$x428;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x437=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),146,12,\'<image>/05_string.js\');$_TypeError=&$x437[0];list(,$WTypeError,$STypeError,$UTypeError)=$x437;$x438=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x439=$x438($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x439->class)&&$x439->class===\'Error\'&&!isset($x439->properties[\'file\'])&&!isset($x439->properties[\'line\'])&&!isset($x439->properties[\'column\'])){$x439->properties[\'file\']=\'<image>/05_string.js\';$x439->properties[\'line\']=146;$x439->properties[\'column\']=12;$x439->attributes[\'file\']=$x439->attributes[\'line\']=$x439->attributes[\'column\']=0;}throw new JSException($x439,146,12,\'<image>/05_string.js\');}$x435=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',146,12);$x436=$x435($global,$x427,$_RegExp,array(preg_quote(JS::toString($_search,$global),\'/\')),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x428=$x436;if(is_object($x428)&&$x428!==JS::$undefined){$x427=$x428;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x427;}$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;$scope->properties[\'newString\']=JS::$undefined;$_newString=&$scope->properties[\'newString\'];$UnewString=FALSE;$_newString=\'\';$scope->properties[\'s\']=JS::$undefined;$_s=&$scope->properties[\'s\'];$Us=FALSE;$_s=JS::$undefined;for(;;){if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x442=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x442[0];list(,$WTypeError,$STypeError,$UTypeError)=$x442;$x443=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x444=$x443($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x444->class)&&$x444->class===\'Error\'&&!isset($x444->properties[\'file\'])&&!isset($x444->properties[\'line\'])&&!isset($x444->properties[\'column\'])){$x444->properties[\'file\']=\'<image>/05_string.js\';$x444->properties[\'line\']=152;$x444->properties[\'column\']=29;$x444->attributes[\'file\']=$x444->attributes[\'line\']=$x444->attributes[\'column\']=0;}throw new JSException($x444,152,29,\'<image>/05_string.js\');}$x441=JS::toObject($_search,$global);unset($x445,$W445,$S445,$U445);$x446=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x441,JS::toString(\'exec\',$global),152,29,\'<image>/05_string.js\');$x445=&$x446[0];list(,$W445,$S445,$U445)=$x446;if(!(is_object($x445)&&isset($x445->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x449=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),152,29,\'<image>/05_string.js\');$_TypeError=&$x449[0];list(,$WTypeError,$STypeError,$UTypeError)=$x449;$x450=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x451=$x450($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x451->class)&&$x451->class===\'Error\'&&!isset($x451->properties[\'file\'])&&!isset($x451->properties[\'line\'])&&!isset($x451->properties[\'column\'])){$x451->properties[\'file\']=\'<image>/05_string.js\';$x451->properties[\'line\']=152;$x451->properties[\'column\']=29;$x451->attributes[\'file\']=$x451->attributes[\'line\']=$x451->attributes[\'column\']=0;}throw new JSException($x451,152,29,\'<image>/05_string.js\');}$x447=$x445->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',152,29);$x448=$x447($global,$x441,$x445,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x448;$x440=!(((gettype($_match)===gettype(NULL)&&$_match===NULL))||(((is_float($_match)||is_int($_match))&&(is_float(NULL)||is_int(NULL)))&&$_match==NULL));if(!JS::toBoolean($x440,$global)){break;}unset($x452,$W452,$S452,$U452);$x453=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),153,16,\'<image>/05_string.js\');$x452=&$x453[0];list(,$W452,$S452,$U452)=$x453;if($Uindex){$global->properties[\'index\']=$_index;$_index=&$global->properties[\'index\'];}$_index=$x452;if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x455=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),154,40,\'<image>/05_string.js\');$_TypeError=&$x455[0];list(,$WTypeError,$STypeError,$UTypeError)=$x455;$x456=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x457=$x456($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x457->class)&&$x457->class===\'Error\'&&!isset($x457->properties[\'file\'])&&!isset($x457->properties[\'line\'])&&!isset($x457->properties[\'column\'])){$x457->properties[\'file\']=\'<image>/05_string.js\';$x457->properties[\'line\']=154;$x457->properties[\'column\']=40;$x457->attributes[\'file\']=$x457->attributes[\'line\']=$x457->attributes[\'column\']=0;}throw new JSException($x457,154,40,\'<image>/05_string.js\');}$x454=JS::toObject($_thisString,$global);unset($x458,$W458,$S458,$U458);$x459=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x454,JS::toString(\'substring\',$global),154,40,\'<image>/05_string.js\');$x458=&$x459[0];list(,$W458,$S458,$U458)=$x459;if(!(is_object($x458)&&isset($x458->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x462=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),154,40,\'<image>/05_string.js\');$_TypeError=&$x462[0];list(,$WTypeError,$STypeError,$UTypeError)=$x462;$x463=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x464=$x463($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x464->class)&&$x464->class===\'Error\'&&!isset($x464->properties[\'file\'])&&!isset($x464->properties[\'line\'])&&!isset($x464->properties[\'column\'])){$x464->properties[\'file\']=\'<image>/05_string.js\';$x464->properties[\'line\']=154;$x464->properties[\'column\']=40;$x464->attributes[\'file\']=$x464->attributes[\'line\']=$x464->attributes[\'column\']=0;}throw new JSException($x464,154,40,\'<image>/05_string.js\');}$x460=$x458->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',154,40);$x461=$x460($global,$x454,$x458,array($_lastIndex,$_index),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x461;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x465=JS::toPrimitive($_newString,$global);$x466=JS::toPrimitive($_s,$global);$_newString=(is_string($x465)||is_string($x466)?JS::toString($x465,$global).JS::toString($x466,$global):JS::toNumber($x465,$global)+JS::toNumber($x466,$global));unset($x469,$W469,$S469,$U469);$x470=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),155,28,\'<image>/05_string.js\');$x469=&$x470[0];list(,$W469,$S469,$U469)=$x470;unset($x471,$W471,$S471,$U471);$x472=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x469,JS::toString(\'length\',$global),155,31,\'<image>/05_string.js\');$x471=&$x472[0];list(,$W471,$S471,$U471)=$x472;$x467=JS::toPrimitive($_index,$global);$x468=JS::toPrimitive($x471,$global);$x473=(is_string($x467)||is_string($x468)?JS::toString($x467,$global).JS::toString($x468,$global):JS::toNumber($x467,$global)+JS::toNumber($x468,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x473;$x475=$_replace;$x475=($x475===JS::$undefined?\'undefined\':(is_int($x475)||is_float($x475)?\'number\':(is_bool($x475)?\'boolean\':(is_string($x475)?\'string\':(is_object($x475)&&isset($x475->call)?\'function\':\'object\')))));$x474=(((gettype($x475)===gettype(\'function\')&&$x475===\'function\'))||(((is_float($x475)||is_int($x475))&&(is_float(\'function\')||is_int(\'function\')))&&$x475==\'function\'));if(JS::toBoolean($x474,$global)){if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x477=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),158,14,\'<image>/05_string.js\');$_TypeError=&$x477[0];list(,$WTypeError,$STypeError,$UTypeError)=$x477;$x478=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x479=$x478($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x479->class)&&$x479->class===\'Error\'&&!isset($x479->properties[\'file\'])&&!isset($x479->properties[\'line\'])&&!isset($x479->properties[\'column\'])){$x479->properties[\'file\']=\'<image>/05_string.js\';$x479->properties[\'line\']=158;$x479->properties[\'column\']=14;$x479->attributes[\'file\']=$x479->attributes[\'line\']=$x479->attributes[\'column\']=0;}throw new JSException($x479,158,14,\'<image>/05_string.js\');}$x476=JS::toObject($_match,$global);unset($x480,$W480,$S480,$U480);$x481=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x476,JS::toString(\'push\',$global),158,14,\'<image>/05_string.js\');$x480=&$x481[0];list(,$W480,$S480,$U480)=$x481;unset($x482,$W482,$S482,$U482);$x483=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),158,20,\'<image>/05_string.js\');$x482=&$x483[0];list(,$W482,$S482,$U482)=$x483;if(!(is_object($x480)&&isset($x480->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x486=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),158,14,\'<image>/05_string.js\');$_TypeError=&$x486[0];list(,$WTypeError,$STypeError,$UTypeError)=$x486;$x487=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x488=$x487($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x488->class)&&$x488->class===\'Error\'&&!isset($x488->properties[\'file\'])&&!isset($x488->properties[\'line\'])&&!isset($x488->properties[\'column\'])){$x488->properties[\'file\']=\'<image>/05_string.js\';$x488->properties[\'line\']=158;$x488->properties[\'column\']=14;$x488->attributes[\'file\']=$x488->attributes[\'line\']=$x488->attributes[\'column\']=0;}throw new JSException($x488,158,14,\'<image>/05_string.js\');}$x484=$x480->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',158,14);$x485=$x484($global,$x476,$x480,array($x482),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($_match===JS::$undefined||$_match===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x490=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x490[0];list(,$WTypeError,$STypeError,$UTypeError)=$x490;$x491=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x492=$x491($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x492->class)&&$x492->class===\'Error\'&&!isset($x492->properties[\'file\'])&&!isset($x492->properties[\'line\'])&&!isset($x492->properties[\'column\'])){$x492->properties[\'file\']=\'<image>/05_string.js\';$x492->properties[\'line\']=159;$x492->properties[\'column\']=14;$x492->attributes[\'file\']=$x492->attributes[\'line\']=$x492->attributes[\'column\']=0;}throw new JSException($x492,159,14,\'<image>/05_string.js\');}$x489=JS::toObject($_match,$global);unset($x493,$W493,$S493,$U493);$x494=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x489,JS::toString(\'push\',$global),159,14,\'<image>/05_string.js\');$x493=&$x494[0];list(,$W493,$S493,$U493)=$x494;unset($x495,$W495,$S495,$U495);$x496=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'input\',$global),159,20,\'<image>/05_string.js\');$x495=&$x496[0];list(,$W495,$S495,$U495)=$x496;if(!(is_object($x493)&&isset($x493->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x499=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),159,14,\'<image>/05_string.js\');$_TypeError=&$x499[0];list(,$WTypeError,$STypeError,$UTypeError)=$x499;$x500=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x501=$x500($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x501->class)&&$x501->class===\'Error\'&&!isset($x501->properties[\'file\'])&&!isset($x501->properties[\'line\'])&&!isset($x501->properties[\'column\'])){$x501->properties[\'file\']=\'<image>/05_string.js\';$x501->properties[\'line\']=159;$x501->properties[\'column\']=14;$x501->attributes[\'file\']=$x501->attributes[\'line\']=$x501->attributes[\'column\']=0;}throw new JSException($x501,159,14,\'<image>/05_string.js\');}$x497=$x493->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',159,14);$x498=$x497($global,$x489,$x493,array($x495),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!array_key_exists(\'index\',$_match->attributes)){unset($_match->properties[\'index\']);$x502=TRUE;}else if($_match->attributes[\'index\']&JS::CONFIGURABLE){unset($_match->properties[\'index\'],$_match->attributes[\'index\'],$_match->getters[\'index\'],$_match->setters[\'index\']);$x502=TRUE;}else{$x502=FALSE;}if(!array_key_exists(\'input\',$_match->attributes)){unset($_match->properties[\'input\']);$x503=TRUE;}else if($_match->attributes[\'input\']&JS::CONFIGURABLE){unset($_match->properties[\'input\'],$_match->attributes[\'input\'],$_match->getters[\'input\'],$_match->setters[\'input\']);$x503=TRUE;}else{$x503=FALSE;}unset($_String,$WString,$SString,$UString);$x504=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'String\',$global),163,21,\'<image>/05_string.js\');$_String=&$x504[0];list(,$WString,$SString,$UString)=$x504;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x505=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),163,21,\'<image>/05_string.js\');$_ReferenceError=&$x505[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x505;$x506=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,21);$x507=$x506($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x507->class)&&$x507->class===\'Error\'&&!isset($x507->properties[\'file\'])&&!isset($x507->properties[\'line\'])&&!isset($x507->properties[\'column\'])){$x507->properties[\'file\']=\'<image>/05_string.js\';$x507->properties[\'line\']=163;$x507->properties[\'column\']=21;$x507->attributes[\'file\']=$x507->attributes[\'line\']=$x507->attributes[\'column\']=0;}throw new JSException($x507,163,21,\'<image>/05_string.js\');}if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x509=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),163,41,\'<image>/05_string.js\');$_TypeError=&$x509[0];list(,$WTypeError,$STypeError,$UTypeError)=$x509;$x510=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x511=$x510($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x511->class)&&$x511->class===\'Error\'&&!isset($x511->properties[\'file\'])&&!isset($x511->properties[\'line\'])&&!isset($x511->properties[\'column\'])){$x511->properties[\'file\']=\'<image>/05_string.js\';$x511->properties[\'line\']=163;$x511->properties[\'column\']=41;$x511->attributes[\'file\']=$x511->attributes[\'line\']=$x511->attributes[\'column\']=0;}throw new JSException($x511,163,41,\'<image>/05_string.js\');}$x508=JS::toObject($_replace,$global);unset($x512,$W512,$S512,$U512);$x513=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x508,JS::toString(\'apply\',$global),163,41,\'<image>/05_string.js\');$x512=&$x513[0];list(,$W512,$S512,$U512)=$x513;if(!(is_object($x512)&&isset($x512->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x516=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),163,41,\'<image>/05_string.js\');$_TypeError=&$x516[0];list(,$WTypeError,$STypeError,$UTypeError)=$x516;$x517=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x518=$x517($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x518->class)&&$x518->class===\'Error\'&&!isset($x518->properties[\'file\'])&&!isset($x518->properties[\'line\'])&&!isset($x518->properties[\'column\'])){$x518->properties[\'file\']=\'<image>/05_string.js\';$x518->properties[\'line\']=163;$x518->properties[\'column\']=41;$x518->attributes[\'file\']=$x518->attributes[\'line\']=$x518->attributes[\'column\']=0;}throw new JSException($x518,163,41,\'<image>/05_string.js\');}$x514=$x512->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,41);$x515=$x514($global,$x508,$x512,array(JS::$undefined,$_match),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x521=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),163,27,\'<image>/05_string.js\');$_TypeError=&$x521[0];list(,$WTypeError,$STypeError,$UTypeError)=$x521;$x522=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x523=$x522($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x523->class)&&$x523->class===\'Error\'&&!isset($x523->properties[\'file\'])&&!isset($x523->properties[\'line\'])&&!isset($x523->properties[\'column\'])){$x523->properties[\'file\']=\'<image>/05_string.js\';$x523->properties[\'line\']=163;$x523->properties[\'column\']=27;$x523->attributes[\'file\']=$x523->attributes[\'line\']=$x523->attributes[\'column\']=0;}throw new JSException($x523,163,27,\'<image>/05_string.js\');}$x519=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',163,27);$x520=$x519($global,$global,$_String,array($x515),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Us){$global->properties[\'s\']=$_s;$_s=&$global->properties[\'s\'];}$_s=$x520;if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x524=JS::toPrimitive($_newString,$global);$x525=JS::toPrimitive($_s,$global);$_newString=(is_string($x524)||is_string($x525)?JS::toString($x524,$global).JS::toString($x525,$global):JS::toNumber($x524,$global)+JS::toNumber($x525,$global));}else{if($_replace===JS::$undefined||$_replace===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x527=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,32,\'<image>/05_string.js\');$_TypeError=&$x527[0];list(,$WTypeError,$STypeError,$UTypeError)=$x527;$x528=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x529=$x528($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x529->class)&&$x529->class===\'Error\'&&!isset($x529->properties[\'file\'])&&!isset($x529->properties[\'line\'])&&!isset($x529->properties[\'column\'])){$x529->properties[\'file\']=\'<image>/05_string.js\';$x529->properties[\'line\']=166;$x529->properties[\'column\']=32;$x529->attributes[\'file\']=$x529->attributes[\'line\']=$x529->attributes[\'column\']=0;}throw new JSException($x529,166,32,\'<image>/05_string.js\');}$x526=JS::toObject($_replace,$global);unset($x530,$W530,$S530,$U530);$x531=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x526,JS::toString(\'replace\',$global),166,32,\'<image>/05_string.js\');$x530=&$x531[0];list(,$W530,$S530,$U530)=$x531;unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x534=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),166,33,\'<image>/05_string.js\');$_RegExp=&$x534[0];list(,$WRegExp,$SRegExp,$URegExp)=$x534;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x535=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),166,33,\'<image>/05_string.js\');$_ReferenceError=&$x535[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x535;$x536=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x537=$x536($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x537->class)&&$x537->class===\'Error\'&&!isset($x537->properties[\'file\'])&&!isset($x537->properties[\'line\'])&&!isset($x537->properties[\'column\'])){$x537->properties[\'file\']=\'<image>/05_string.js\';$x537->properties[\'line\']=166;$x537->properties[\'column\']=33;$x537->attributes[\'file\']=$x537->attributes[\'line\']=$x537->attributes[\'column\']=0;}throw new JSException($x537,166,33,\'<image>/05_string.js\');}$x532=clone JS::$objectTemplate;unset($x538,$W538,$S538,$U538);$x539=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),166,33,\'<image>/05_string.js\');$x538=&$x539[0];list(,$W538,$S538,$U538)=$x539;$x533=$x538;$x532->prototype=$x533;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x542=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,33,\'<image>/05_string.js\');$_TypeError=&$x542[0];list(,$WTypeError,$STypeError,$UTypeError)=$x542;$x543=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x544=$x543($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x544->class)&&$x544->class===\'Error\'&&!isset($x544->properties[\'file\'])&&!isset($x544->properties[\'line\'])&&!isset($x544->properties[\'column\'])){$x544->properties[\'file\']=\'<image>/05_string.js\';$x544->properties[\'line\']=166;$x544->properties[\'column\']=33;$x544->attributes[\'file\']=$x544->attributes[\'line\']=$x544->attributes[\'column\']=0;}throw new JSException($x544,166,33,\'<image>/05_string.js\');}$x540=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,33);$x541=$x540($global,$x532,$_RegExp,array(\'\\\\$([$&]|[0-9]|[0-9][0-9])\',\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x533=$x541;if(is_object($x533)&&$x533!==JS::$undefined){$x532=$x533;}$x570=clone JS::$functionTemplate;$x570->call=\'_465e5538fcb402e27559db40bec8addd_15\';$x570->parameters=array(0=>\'_\',1=>\'c\',);$x570->scope=$scope;$x570->properties[\'prototype\']=clone JS::$objectTemplate;$x570->attributes[\'prototype\']=JS::WRITABLE;$x570->properties[\'prototype\']->properties[\'constructor\']=$x570;$x570->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x570->properties[\'length\']=2;$x570->attributes[\'length\']=0;if(!(is_object($x530)&&isset($x530->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x573=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),166,32,\'<image>/05_string.js\');$_TypeError=&$x573[0];list(,$WTypeError,$STypeError,$UTypeError)=$x573;$x574=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x575=$x574($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x575->class)&&$x575->class===\'Error\'&&!isset($x575->properties[\'file\'])&&!isset($x575->properties[\'line\'])&&!isset($x575->properties[\'column\'])){$x575->properties[\'file\']=\'<image>/05_string.js\';$x575->properties[\'line\']=166;$x575->properties[\'column\']=32;$x575->attributes[\'file\']=$x575->attributes[\'line\']=$x575->attributes[\'column\']=0;}throw new JSException($x575,166,32,\'<image>/05_string.js\');}$x571=$x530->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',166,32);$x572=$x571($global,$x526,$x530,array($x532,$x570),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x576=JS::toPrimitive($_newString,$global);$x577=JS::toPrimitive($x572,$global);$_newString=(is_string($x576)||is_string($x577)?JS::toString($x576,$global).JS::toString($x577,$global):JS::toNumber($x576,$global)+JS::toNumber($x577,$global));}unset($x578,$W578,$S578,$U578);$x579=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,JS::toString(\'global\',$global),179,14,\'<image>/05_string.js\');$x578=&$x579[0];list(,$W578,$S578,$U578)=$x579;if(JS::toBoolean((!JS::toBoolean($x578,$global)),$global)){break;}}if($_thisString===JS::$undefined||$_thisString===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x581=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,35,\'<image>/05_string.js\');$_TypeError=&$x581[0];list(,$WTypeError,$STypeError,$UTypeError)=$x581;$x582=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x583=$x582($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x583->class)&&$x583->class===\'Error\'&&!isset($x583->properties[\'file\'])&&!isset($x583->properties[\'line\'])&&!isset($x583->properties[\'column\'])){$x583->properties[\'file\']=\'<image>/05_string.js\';$x583->properties[\'line\']=184;$x583->properties[\'column\']=35;$x583->attributes[\'file\']=$x583->attributes[\'line\']=$x583->attributes[\'column\']=0;}throw new JSException($x583,184,35,\'<image>/05_string.js\');}$x580=JS::toObject($_thisString,$global);unset($x584,$W584,$S584,$U584);$x585=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x580,JS::toString(\'substring\',$global),184,35,\'<image>/05_string.js\');$x584=&$x585[0];list(,$W584,$S584,$U584)=$x585;unset($x586,$W586,$S586,$U586);$x587=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_thisString,JS::toString(\'length\',$global),184,57,\'<image>/05_string.js\');$x586=&$x587[0];list(,$W586,$S586,$U586)=$x587;if(!(is_object($x584)&&isset($x584->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x590=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),184,35,\'<image>/05_string.js\');$_TypeError=&$x590[0];list(,$WTypeError,$STypeError,$UTypeError)=$x590;$x591=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x592=$x591($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x592->class)&&$x592->class===\'Error\'&&!isset($x592->properties[\'file\'])&&!isset($x592->properties[\'line\'])&&!isset($x592->properties[\'column\'])){$x592->properties[\'file\']=\'<image>/05_string.js\';$x592->properties[\'line\']=184;$x592->properties[\'column\']=35;$x592->attributes[\'file\']=$x592->attributes[\'line\']=$x592->attributes[\'column\']=0;}throw new JSException($x592,184,35,\'<image>/05_string.js\');}$x588=$x584->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',184,35);$x589=$x588($global,$x580,$x584,array($_lastIndex,$x586),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($UnewString){$global->properties[\'newString\']=$_newString;$_newString=&$global->properties[\'newString\'];}$x593=JS::toPrimitive($_newString,$global);$x594=JS::toPrimitive($x589,$global);$_newString=(is_string($x593)||is_string($x594)?JS::toString($x593,$global).JS::toString($x594,$global):JS::toNumber($x593,$global)+JS::toNumber($x594,$global));return$_newString;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x609 =& $scope->properties['arguments'];
$x609->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x609->properties[$i] = $args[$i];
$x609->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['search'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_search =& $scope->properties['search'];
$Usearch = FALSE;
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean((!JS::toBoolean((is_object($_search) && isset($_search->class) &&$_search->class === 'RegExp'), $global)), $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x612 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 191, 16, '<image>/05_string.js');
$_RegExp =& $x612[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x612;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x613 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 191, 16, '<image>/05_string.js');
$_ReferenceError =& $x613[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x613;
$x614 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 16);
$x615 = $x614($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x615->class) && $x615->class === 'Error' && !isset($x615->properties['file']) && !isset($x615->properties['line']) && !isset($x615->properties['column'])) {$x615->properties['file'] = '<image>/05_string.js';$x615->properties['line'] = 191;$x615->properties['column'] = 16;$x615->attributes['file'] = $x615->attributes['line'] = $x615->attributes['column'] = 0; }
throw new JSException($x615, 191, 16, '<image>/05_string.js');
}
$x610 = clone JS::$objectTemplate;
unset($x616, $W616, $S616, $U616);
$x617 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 191, 12, '<image>/05_string.js');
$x616 =& $x617[0]; list(,$W616,$S616,$U616) = $x617;
$x611 = $x616;
$x610->prototype = $x611;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x620 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 191, 12, '<image>/05_string.js');
$_TypeError =& $x620[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x620;
$x621 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x622 = $x621($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x622->class) && $x622->class === 'Error' && !isset($x622->properties['file']) && !isset($x622->properties['line']) && !isset($x622->properties['column'])) {$x622->properties['file'] = '<image>/05_string.js';$x622->properties['line'] = 191;$x622->properties['column'] = 12;$x622->attributes['file'] = $x622->attributes['line'] = $x622->attributes['column'] = 0; }
throw new JSException($x622, 191, 12, '<image>/05_string.js');
}
$x618 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 191, 12);
$x619 = $x618($global, $x610, $_RegExp, array($_search), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x611 = $x619;
if (is_object($x611) && $x611 !== JS::$undefined) { $x610 = $x611; }
if ($Usearch) {$global->properties['search'] = $_search; $_search =& $global->properties['search']; }
$_search = $x610;;
};
unset($x623, $W623, $S623, $U623);
$x624 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_search, JS::toString('lastIndex', $global), 194, 29, '<image>/05_string.js');
$x623 =& $x624[0]; list(,$W623,$S623,$U623) = $x624;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x623;
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x626 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 195, 22, '<image>/05_string.js');
$_TypeError =& $x626[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x626;
$x627 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x628 = $x627($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x628->class) && $x628->class === 'Error' && !isset($x628->properties['file']) && !isset($x628->properties['line']) && !isset($x628->properties['column'])) {$x628->properties['file'] = '<image>/05_string.js';$x628->properties['line'] = 195;$x628->properties['column'] = 22;$x628->attributes['file'] = $x628->attributes['line'] = $x628->attributes['column'] = 0; }
throw new JSException($x628, 195, 22, '<image>/05_string.js');
}
$x625 = JS::toObject($_search, $global);
unset($x629, $W629, $S629, $U629);
$x630 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x625, JS::toString('exec', $global), 195, 22, '<image>/05_string.js');
$x629 =& $x630[0]; list(,$W629,$S629,$U629) = $x630;
if (!(is_object($x629) && isset($x629->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x633 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 195, 22, '<image>/05_string.js');
$_TypeError =& $x633[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x633;
$x634 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x635 = $x634($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x635->class) && $x635->class === 'Error' && !isset($x635->properties['file']) && !isset($x635->properties['line']) && !isset($x635->properties['column'])) {$x635->properties['file'] = '<image>/05_string.js';$x635->properties['line'] = 195;$x635->properties['column'] = 22;$x635->attributes['file'] = $x635->attributes['line'] = $x635->attributes['column'] = 0; }
throw new JSException($x635, 195, 22, '<image>/05_string.js');
}
$x631 = $x629->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 195, 22);
$x632 = $x631($global, $x625, $x629, array($leThis->value), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['match'] = JS::$undefined; $_match =& $scope->properties['match'];
$Umatch = FALSE;
$_match = $x632;
$x636 = JS::toString('lastIndexOf', $global);
if ($_search === JS::$undefined || $_search === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x637 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 197, 21, '<image>/05_string.js');
$_TypeError =& $x637[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x637;
$x638 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x639 = $x638($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x639->class) && $x639->class === 'Error' && !isset($x639->properties['file']) && !isset($x639->properties['line']) && !isset($x639->properties['column'])) {$x639->properties['file'] = '<image>/05_string.js';$x639->properties['line'] = 197;$x639->properties['column'] = 21;$x639->attributes['file'] = $x639->attributes['line'] = $x639->attributes['column'] = 0; }
throw new JSException($x639, 197, 21, '<image>/05_string.js');
}
$_search = JS::toObject($_search, $global);
unset($x640, $W640, $S640, $U640);
$x641 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_search, JS::toString($x636, $global), 197, 21, '<image>/05_string.js');
$x640 =& $x641[0]; list(,$W640,$S640,$U640) = $x641;
if ($U640 && (!isset($_search->extensible) || $_search->extensible)) {$_search->properties[$x636] = $x640; $x640 =& $_search->properties[$x636]; $_search->attributes[$x636] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U640 = FALSE; $W640 = TRUE; }
if (isset($_search->class) && $_search->class === 'Array') {  if (isset($_search->properties['length']) && $_search->properties['length'] !== JS::$undefined) { $x643 = $_search->properties['length']; }  else { $x643 = 0; } }
if (isset($S640)) {
$x644 = $S640->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 197, 21);
$x645 = $x644($global, $_search, $S640, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x642 = $x645;
} else {
if (!$U640) {$x642 = $_savedLastIndex;if ($W640) { $x640 = $_savedLastIndex; }  }
else { $x642 = JS::$undefined; }
}
if (isset($_search->class) && $_search->class === 'Array') {if (is_int('lastIndexOf') && 'lastIndexOf' >= $_search->properties['length']) { $_search->properties['length'] = 'lastIndexOf' + 1; }else if ($x636 === 'length' && is_int($_savedLastIndex) && $x643 > $_savedLastIndex) {  for ($i = $_savedLastIndex; $i < $x643; ++$i) {  unset($_search->properties[$i], $_search->attributes[$i]); }}};
if (JS::toBoolean($_match, $global)) {
unset($x646, $W646, $S646, $U646);
$x647 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 200, 15, '<image>/05_string.js');
$x646 =& $x647[0]; list(,$W646,$S646,$U646) = $x647;
return $x646;;
};
return (-1.0 * JS::toNumber(1, $global));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x609=&$scope->properties[\'arguments\'];$x609->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x609->properties[$i]=$args[$i];$x609->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'search\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_search=&$scope->properties[\'search\'];$Usearch=FALSE;$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean((!JS::toBoolean((is_object($_search)&&isset($_search->class)&&$_search->class===\'RegExp\'),$global)),$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x612=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),191,16,\'<image>/05_string.js\');$_RegExp=&$x612[0];list(,$WRegExp,$SRegExp,$URegExp)=$x612;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x613=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),191,16,\'<image>/05_string.js\');$_ReferenceError=&$x613[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x613;$x614=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,16);$x615=$x614($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x615->class)&&$x615->class===\'Error\'&&!isset($x615->properties[\'file\'])&&!isset($x615->properties[\'line\'])&&!isset($x615->properties[\'column\'])){$x615->properties[\'file\']=\'<image>/05_string.js\';$x615->properties[\'line\']=191;$x615->properties[\'column\']=16;$x615->attributes[\'file\']=$x615->attributes[\'line\']=$x615->attributes[\'column\']=0;}throw new JSException($x615,191,16,\'<image>/05_string.js\');}$x610=clone JS::$objectTemplate;unset($x616,$W616,$S616,$U616);$x617=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),191,12,\'<image>/05_string.js\');$x616=&$x617[0];list(,$W616,$S616,$U616)=$x617;$x611=$x616;$x610->prototype=$x611;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x620=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),191,12,\'<image>/05_string.js\');$_TypeError=&$x620[0];list(,$WTypeError,$STypeError,$UTypeError)=$x620;$x621=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x622=$x621($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x622->class)&&$x622->class===\'Error\'&&!isset($x622->properties[\'file\'])&&!isset($x622->properties[\'line\'])&&!isset($x622->properties[\'column\'])){$x622->properties[\'file\']=\'<image>/05_string.js\';$x622->properties[\'line\']=191;$x622->properties[\'column\']=12;$x622->attributes[\'file\']=$x622->attributes[\'line\']=$x622->attributes[\'column\']=0;}throw new JSException($x622,191,12,\'<image>/05_string.js\');}$x618=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',191,12);$x619=$x618($global,$x610,$_RegExp,array($_search),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x611=$x619;if(is_object($x611)&&$x611!==JS::$undefined){$x610=$x611;}if($Usearch){$global->properties[\'search\']=$_search;$_search=&$global->properties[\'search\'];}$_search=$x610;}unset($x623,$W623,$S623,$U623);$x624=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_search,JS::toString(\'lastIndex\',$global),194,29,\'<image>/05_string.js\');$x623=&$x624[0];list(,$W623,$S623,$U623)=$x624;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x623;if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x626=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),195,22,\'<image>/05_string.js\');$_TypeError=&$x626[0];list(,$WTypeError,$STypeError,$UTypeError)=$x626;$x627=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x628=$x627($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x628->class)&&$x628->class===\'Error\'&&!isset($x628->properties[\'file\'])&&!isset($x628->properties[\'line\'])&&!isset($x628->properties[\'column\'])){$x628->properties[\'file\']=\'<image>/05_string.js\';$x628->properties[\'line\']=195;$x628->properties[\'column\']=22;$x628->attributes[\'file\']=$x628->attributes[\'line\']=$x628->attributes[\'column\']=0;}throw new JSException($x628,195,22,\'<image>/05_string.js\');}$x625=JS::toObject($_search,$global);unset($x629,$W629,$S629,$U629);$x630=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x625,JS::toString(\'exec\',$global),195,22,\'<image>/05_string.js\');$x629=&$x630[0];list(,$W629,$S629,$U629)=$x630;if(!(is_object($x629)&&isset($x629->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x633=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),195,22,\'<image>/05_string.js\');$_TypeError=&$x633[0];list(,$WTypeError,$STypeError,$UTypeError)=$x633;$x634=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x635=$x634($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x635->class)&&$x635->class===\'Error\'&&!isset($x635->properties[\'file\'])&&!isset($x635->properties[\'line\'])&&!isset($x635->properties[\'column\'])){$x635->properties[\'file\']=\'<image>/05_string.js\';$x635->properties[\'line\']=195;$x635->properties[\'column\']=22;$x635->attributes[\'file\']=$x635->attributes[\'line\']=$x635->attributes[\'column\']=0;}throw new JSException($x635,195,22,\'<image>/05_string.js\');}$x631=$x629->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',195,22);$x632=$x631($global,$x625,$x629,array($leThis->value),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=$x632;$x636=JS::toString(\'lastIndexOf\',$global);if($_search===JS::$undefined||$_search===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x637=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),197,21,\'<image>/05_string.js\');$_TypeError=&$x637[0];list(,$WTypeError,$STypeError,$UTypeError)=$x637;$x638=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x639=$x638($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x639->class)&&$x639->class===\'Error\'&&!isset($x639->properties[\'file\'])&&!isset($x639->properties[\'line\'])&&!isset($x639->properties[\'column\'])){$x639->properties[\'file\']=\'<image>/05_string.js\';$x639->properties[\'line\']=197;$x639->properties[\'column\']=21;$x639->attributes[\'file\']=$x639->attributes[\'line\']=$x639->attributes[\'column\']=0;}throw new JSException($x639,197,21,\'<image>/05_string.js\');}$_search=JS::toObject($_search,$global);unset($x640,$W640,$S640,$U640);$x641=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_search,JS::toString($x636,$global),197,21,\'<image>/05_string.js\');$x640=&$x641[0];list(,$W640,$S640,$U640)=$x641;if($U640&&(!isset($_search->extensible)||$_search->extensible)){$_search->properties[$x636]=$x640;$x640=&$_search->properties[$x636];$_search->attributes[$x636]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U640=FALSE;$W640=TRUE;}if(isset($_search->class)&&$_search->class===\'Array\'){if(isset($_search->properties[\'length\'])&&$_search->properties[\'length\']!==JS::$undefined){$x643=$_search->properties[\'length\'];}else{$x643=0;}}if(isset($S640)){$x644=$S640->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',197,21);$x645=$x644($global,$_search,$S640,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x642=$x645;}else{if(!$U640){$x642=$_savedLastIndex;if($W640){$x640=$_savedLastIndex;}}else{$x642=JS::$undefined;}}if(isset($_search->class)&&$_search->class===\'Array\'){if(is_int(\'lastIndexOf\')&&\'lastIndexOf\'>=$_search->properties[\'length\']){$_search->properties[\'length\']=\'lastIndexOf\'+1;}else if($x636===\'length\'&&is_int($_savedLastIndex)&&$x643>$_savedLastIndex){for($i=$_savedLastIndex;$i<$x643;++$i){unset($_search->properties[$i],$_search->attributes[$i]);}}}if(JS::toBoolean($_match,$global)){unset($x646,$W646,$S646,$U646);$x647=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),200,15,\'<image>/05_string.js\');$x646=&$x647[0];list(,$W646,$S646,$U646)=$x647;return$x646;}return(-1.0*JS::toNumber(1,$global));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x662 =& $scope->properties['arguments'];
$x662->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x662->properties[$i] = $args[$i];
$x662->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x663 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x663, $global)) {
$x664 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x664;;
};
$x665 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x665, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x666 = JS::toPrimitive($_start, $global);
$x667 = JS::toPrimitive(0, $global);
$x668 = (is_string($x666) && is_string($x667) ? strcmp($x666, $x667) < 0 : (!is_nan($x669 = JS::toNumber($x666, $global)) && !is_nan($x670 = JS::toNumber($x667, $global)) && $x669 < $x670));
if (JS::toBoolean($x668, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x671 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 218, 11, '<image>/05_string.js');
$_Math =& $x671[0]; list(,$WMath,$SMath,$UMath) = $x671;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x672 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 218, 11, '<image>/05_string.js');
$_ReferenceError =& $x672[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x672;
$x673 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 11);
$x674 = $x673($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x674->class) && $x674->class === 'Error' && !isset($x674->properties['file']) && !isset($x674->properties['line']) && !isset($x674->properties['column'])) {$x674->properties['file'] = '<image>/05_string.js';$x674->properties['line'] = 218;$x674->properties['column'] = 11;$x674->attributes['file'] = $x674->attributes['line'] = $x674->attributes['column'] = 0; }
throw new JSException($x674, 218, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x676 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 19, '<image>/05_string.js');
$_TypeError =& $x676[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x676;
$x677 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x678 = $x677($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x678->class) && $x678->class === 'Error' && !isset($x678->properties['file']) && !isset($x678->properties['line']) && !isset($x678->properties['column'])) {$x678->properties['file'] = '<image>/05_string.js';$x678->properties['line'] = 218;$x678->properties['column'] = 19;$x678->attributes['file'] = $x678->attributes['line'] = $x678->attributes['column'] = 0; }
throw new JSException($x678, 218, 19, '<image>/05_string.js');
}
$x675 = JS::toObject($_Math, $global);
unset($x679, $W679, $S679, $U679);
$x680 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x675, JS::toString('max', $global), 218, 19, '<image>/05_string.js');
$x679 =& $x680[0]; list(,$W679,$S679,$U679) = $x680;
$x681 = JS::toPrimitive($_start, $global);
$x682 = JS::toPrimitive($_length, $global);
if (!(is_object($x679) && isset($x679->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x685 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 218, 19, '<image>/05_string.js');
$_TypeError =& $x685[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x685;
$x686 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x687 = $x686($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x687->class) && $x687->class === 'Error' && !isset($x687->properties['file']) && !isset($x687->properties['line']) && !isset($x687->properties['column'])) {$x687->properties['file'] = '<image>/05_string.js';$x687->properties['line'] = 218;$x687->properties['column'] = 19;$x687->attributes['file'] = $x687->attributes['line'] = $x687->attributes['column'] = 0; }
throw new JSException($x687, 218, 19, '<image>/05_string.js');
}
$x683 = $x679->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 218, 19);
$x684 = $x683($global, $x675, $x679, array((is_string($x681) || is_string($x682) ? JS::toString($x681, $global) . JS::toString($x682, $global) : JS::toNumber($x681, $global) + JS::toNumber($x682, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x684;;
};
$x688 = JS::toPrimitive($_end, $global);
$x689 = JS::toPrimitive(0, $global);
$x690 = (is_string($x688) && is_string($x689) ? strcmp($x688, $x689) < 0 : (!is_nan($x691 = JS::toNumber($x688, $global)) && !is_nan($x692 = JS::toNumber($x689, $global)) && $x691 < $x692));
if (JS::toBoolean($x690, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x693 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 222, 9, '<image>/05_string.js');
$_Math =& $x693[0]; list(,$WMath,$SMath,$UMath) = $x693;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x694 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 222, 9, '<image>/05_string.js');
$_ReferenceError =& $x694[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x694;
$x695 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 9);
$x696 = $x695($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x696->class) && $x696->class === 'Error' && !isset($x696->properties['file']) && !isset($x696->properties['line']) && !isset($x696->properties['column'])) {$x696->properties['file'] = '<image>/05_string.js';$x696->properties['line'] = 222;$x696->properties['column'] = 9;$x696->attributes['file'] = $x696->attributes['line'] = $x696->attributes['column'] = 0; }
throw new JSException($x696, 222, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x698 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 17, '<image>/05_string.js');
$_TypeError =& $x698[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x698;
$x699 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x700 = $x699($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x700->class) && $x700->class === 'Error' && !isset($x700->properties['file']) && !isset($x700->properties['line']) && !isset($x700->properties['column'])) {$x700->properties['file'] = '<image>/05_string.js';$x700->properties['line'] = 222;$x700->properties['column'] = 17;$x700->attributes['file'] = $x700->attributes['line'] = $x700->attributes['column'] = 0; }
throw new JSException($x700, 222, 17, '<image>/05_string.js');
}
$x697 = JS::toObject($_Math, $global);
unset($x701, $W701, $S701, $U701);
$x702 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x697, JS::toString('max', $global), 222, 17, '<image>/05_string.js');
$x701 =& $x702[0]; list(,$W701,$S701,$U701) = $x702;
$x703 = JS::toPrimitive($_end, $global);
$x704 = JS::toPrimitive($_length, $global);
if (!(is_object($x701) && isset($x701->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x707 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 222, 17, '<image>/05_string.js');
$_TypeError =& $x707[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x707;
$x708 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x709 = $x708($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x709->class) && $x709->class === 'Error' && !isset($x709->properties['file']) && !isset($x709->properties['line']) && !isset($x709->properties['column'])) {$x709->properties['file'] = '<image>/05_string.js';$x709->properties['line'] = 222;$x709->properties['column'] = 17;$x709->attributes['file'] = $x709->attributes['line'] = $x709->attributes['column'] = 0; }
throw new JSException($x709, 222, 17, '<image>/05_string.js');
}
$x705 = $x701->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 222, 17);
$x706 = $x705($global, $x697, $x701, array((is_string($x703) || is_string($x704) ? JS::toString($x703, $global) . JS::toString($x704, $global) : JS::toNumber($x703, $global) + JS::toNumber($x704, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x706;;
};
return (string) substr($leThis->value,$_start, max($_end-$_start, 0));
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x662=&$scope->properties[\'arguments\'];$x662->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x662->properties[$i]=$args[$i];$x662->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x663=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x663,$global)){$x664=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x664;}$x665=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x665,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x666=JS::toPrimitive($_start,$global);$x667=JS::toPrimitive(0,$global);$x668=(is_string($x666)&&is_string($x667)?strcmp($x666,$x667)<0:(!is_nan($x669=JS::toNumber($x666,$global))&&!is_nan($x670=JS::toNumber($x667,$global))&&$x669<$x670));if(JS::toBoolean($x668,$global)){unset($_Math,$WMath,$SMath,$UMath);$x671=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),218,11,\'<image>/05_string.js\');$_Math=&$x671[0];list(,$WMath,$SMath,$UMath)=$x671;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x672=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),218,11,\'<image>/05_string.js\');$_ReferenceError=&$x672[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x672;$x673=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,11);$x674=$x673($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x674->class)&&$x674->class===\'Error\'&&!isset($x674->properties[\'file\'])&&!isset($x674->properties[\'line\'])&&!isset($x674->properties[\'column\'])){$x674->properties[\'file\']=\'<image>/05_string.js\';$x674->properties[\'line\']=218;$x674->properties[\'column\']=11;$x674->attributes[\'file\']=$x674->attributes[\'line\']=$x674->attributes[\'column\']=0;}throw new JSException($x674,218,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x676=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,19,\'<image>/05_string.js\');$_TypeError=&$x676[0];list(,$WTypeError,$STypeError,$UTypeError)=$x676;$x677=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x678=$x677($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x678->class)&&$x678->class===\'Error\'&&!isset($x678->properties[\'file\'])&&!isset($x678->properties[\'line\'])&&!isset($x678->properties[\'column\'])){$x678->properties[\'file\']=\'<image>/05_string.js\';$x678->properties[\'line\']=218;$x678->properties[\'column\']=19;$x678->attributes[\'file\']=$x678->attributes[\'line\']=$x678->attributes[\'column\']=0;}throw new JSException($x678,218,19,\'<image>/05_string.js\');}$x675=JS::toObject($_Math,$global);unset($x679,$W679,$S679,$U679);$x680=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x675,JS::toString(\'max\',$global),218,19,\'<image>/05_string.js\');$x679=&$x680[0];list(,$W679,$S679,$U679)=$x680;$x681=JS::toPrimitive($_start,$global);$x682=JS::toPrimitive($_length,$global);if(!(is_object($x679)&&isset($x679->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x685=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),218,19,\'<image>/05_string.js\');$_TypeError=&$x685[0];list(,$WTypeError,$STypeError,$UTypeError)=$x685;$x686=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x687=$x686($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x687->class)&&$x687->class===\'Error\'&&!isset($x687->properties[\'file\'])&&!isset($x687->properties[\'line\'])&&!isset($x687->properties[\'column\'])){$x687->properties[\'file\']=\'<image>/05_string.js\';$x687->properties[\'line\']=218;$x687->properties[\'column\']=19;$x687->attributes[\'file\']=$x687->attributes[\'line\']=$x687->attributes[\'column\']=0;}throw new JSException($x687,218,19,\'<image>/05_string.js\');}$x683=$x679->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',218,19);$x684=$x683($global,$x675,$x679,array((is_string($x681)||is_string($x682)?JS::toString($x681,$global).JS::toString($x682,$global):JS::toNumber($x681,$global)+JS::toNumber($x682,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x684;}$x688=JS::toPrimitive($_end,$global);$x689=JS::toPrimitive(0,$global);$x690=(is_string($x688)&&is_string($x689)?strcmp($x688,$x689)<0:(!is_nan($x691=JS::toNumber($x688,$global))&&!is_nan($x692=JS::toNumber($x689,$global))&&$x691<$x692));if(JS::toBoolean($x690,$global)){unset($_Math,$WMath,$SMath,$UMath);$x693=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),222,9,\'<image>/05_string.js\');$_Math=&$x693[0];list(,$WMath,$SMath,$UMath)=$x693;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x694=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),222,9,\'<image>/05_string.js\');$_ReferenceError=&$x694[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x694;$x695=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,9);$x696=$x695($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x696->class)&&$x696->class===\'Error\'&&!isset($x696->properties[\'file\'])&&!isset($x696->properties[\'line\'])&&!isset($x696->properties[\'column\'])){$x696->properties[\'file\']=\'<image>/05_string.js\';$x696->properties[\'line\']=222;$x696->properties[\'column\']=9;$x696->attributes[\'file\']=$x696->attributes[\'line\']=$x696->attributes[\'column\']=0;}throw new JSException($x696,222,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x698=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,17,\'<image>/05_string.js\');$_TypeError=&$x698[0];list(,$WTypeError,$STypeError,$UTypeError)=$x698;$x699=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x700=$x699($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x700->class)&&$x700->class===\'Error\'&&!isset($x700->properties[\'file\'])&&!isset($x700->properties[\'line\'])&&!isset($x700->properties[\'column\'])){$x700->properties[\'file\']=\'<image>/05_string.js\';$x700->properties[\'line\']=222;$x700->properties[\'column\']=17;$x700->attributes[\'file\']=$x700->attributes[\'line\']=$x700->attributes[\'column\']=0;}throw new JSException($x700,222,17,\'<image>/05_string.js\');}$x697=JS::toObject($_Math,$global);unset($x701,$W701,$S701,$U701);$x702=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x697,JS::toString(\'max\',$global),222,17,\'<image>/05_string.js\');$x701=&$x702[0];list(,$W701,$S701,$U701)=$x702;$x703=JS::toPrimitive($_end,$global);$x704=JS::toPrimitive($_length,$global);if(!(is_object($x701)&&isset($x701->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x707=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),222,17,\'<image>/05_string.js\');$_TypeError=&$x707[0];list(,$WTypeError,$STypeError,$UTypeError)=$x707;$x708=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x709=$x708($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x709->class)&&$x709->class===\'Error\'&&!isset($x709->properties[\'file\'])&&!isset($x709->properties[\'line\'])&&!isset($x709->properties[\'column\'])){$x709->properties[\'file\']=\'<image>/05_string.js\';$x709->properties[\'line\']=222;$x709->properties[\'column\']=17;$x709->attributes[\'file\']=$x709->attributes[\'line\']=$x709->attributes[\'column\']=0;}throw new JSException($x709,222,17,\'<image>/05_string.js\');}$x705=$x701->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',222,17);$x706=$x705($global,$x697,$x701,array((is_string($x703)||is_string($x704)?JS::toString($x703,$global).JS::toString($x704,$global):JS::toNumber($x703,$global)+JS::toNumber($x704,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x706;}return(string)substr($leThis->value,$_start,max($_end-$_start,0));return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x724 =& $scope->properties['arguments'];
$x724->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x724->properties[$i] = $args[$i];
$x724->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['separator'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_separator =& $scope->properties['separator'];
$Useparator = FALSE;
$scope->properties['limit'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_limit =& $scope->properties['limit'];
$Ulimit = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x725 = (((gettype($_separator) === gettype(JS::$undefined) && $_separator === JS::$undefined))|| (((is_float($_separator) || is_int($_separator)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_separator == JS::$undefined));
if (JS::toBoolean($x725, $global)) {
$x726 = clone JS::$arrayTemplate;
$x726->properties['length'] = 1;
$x726->attributes['length'] = JS::WRITABLE;
$x726->properties[0] = $leThis->value;
$x726->attributes[0] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x726;;
};
$x727 = (((gettype($_separator) === gettype('') && $_separator === ''))|| (((is_float($_separator) || is_int($_separator)) && (is_float('') || is_int(''))) && $_separator == ''));
if (JS::toBoolean($x727, $global)) {
$x728 = clone JS::$arrayTemplate;
$x728->properties['length'] = 0;
$x728->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x728;
for ($x729 = 0;; ++$x729) {
if ($x729 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($x730, $W730, $S730, $U730);
$x731 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 236, 27, '<image>/05_string.js');
$x730 =& $x731[0]; list(,$W730,$S730,$U730) = $x731;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x730;
}
if ($x729 !== 0) {
$x732 = ++$_i;
}
$x733 = JS::toPrimitive($_i, $global);
$x734 = JS::toPrimitive($_l, $global);
$x735 = (is_string($x733) && is_string($x734) ? strcmp($x733, $x734) < 0 : (!is_nan($x736 = JS::toNumber($x733, $global)) && !is_nan($x737 = JS::toNumber($x734, $global)) && $x736 < $x737));
if (!JS::toBoolean($x735, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x739 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 20, '<image>/05_string.js');
$_TypeError =& $x739[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x739;
$x740 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x741 = $x740($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x741->class) && $x741->class === 'Error' && !isset($x741->properties['file']) && !isset($x741->properties['line']) && !isset($x741->properties['column'])) {$x741->properties['file'] = '<image>/05_string.js';$x741->properties['line'] = 237;$x741->properties['column'] = 20;$x741->attributes['file'] = $x741->attributes['line'] = $x741->attributes['column'] = 0; }
throw new JSException($x741, 237, 20, '<image>/05_string.js');
}
$x738 = JS::toObject($_returnArray, $global);
unset($x742, $W742, $S742, $U742);
$x743 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x738, JS::toString('push', $global), 237, 20, '<image>/05_string.js');
$x742 =& $x743[0]; list(,$W742,$S742,$U742) = $x743;
if (!(is_object($x742) && isset($x742->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x746 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 20, '<image>/05_string.js');
$_TypeError =& $x746[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x746;
$x747 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x748 = $x747($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x748->class) && $x748->class === 'Error' && !isset($x748->properties['file']) && !isset($x748->properties['line']) && !isset($x748->properties['column'])) {$x748->properties['file'] = '<image>/05_string.js';$x748->properties['line'] = 237;$x748->properties['column'] = 20;$x748->attributes['file'] = $x748->attributes['line'] = $x748->attributes['column'] = 0; }
throw new JSException($x748, 237, 20, '<image>/05_string.js');
}
$x744 = $x742->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 237, 20);
$x745 = $x744($global, $x738, $x742, array((string) substr($leThis->value,$_i, 1)), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_returnArray;;
};
$x750 = $_separator;
$x750 = ($x750 === JS::$undefined ? 'undefined' : (is_int($x750) || is_float($x750) ? 'number' : (is_bool($x750) ? 'boolean' : (is_string($x750) ? 'string' : (is_object($x750) && isset($x750->call) ? 'function' : 'object')))));
$x749 = (((gettype($x750) === gettype('string') && $x750 === 'string'))|| (((is_float($x750) || is_int($x750)) && (is_float('string') || is_int('string'))) && $x750 == 'string'));
if (JS::toBoolean($x749, $global)) {
unset($_RegExp, $WRegExp, $SRegExp, $URegExp);
$x753 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('RegExp', $global), 244, 19, '<image>/05_string.js');
$_RegExp =& $x753[0]; list(,$WRegExp,$SRegExp,$URegExp) = $x753;
if ($URegExp) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x754 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 244, 19, '<image>/05_string.js');
$_ReferenceError =& $x754[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x754;
$x755 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 19);
$x756 = $x755($global, $global, $_ReferenceError, array('RegExp is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x756->class) && $x756->class === 'Error' && !isset($x756->properties['file']) && !isset($x756->properties['line']) && !isset($x756->properties['column'])) {$x756->properties['file'] = '<image>/05_string.js';$x756->properties['line'] = 244;$x756->properties['column'] = 19;$x756->attributes['file'] = $x756->attributes['line'] = $x756->attributes['column'] = 0; }
throw new JSException($x756, 244, 19, '<image>/05_string.js');
}
$x751 = clone JS::$objectTemplate;
unset($x757, $W757, $S757, $U757);
$x758 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_RegExp, JS::toString('prototype', $global), 244, 15, '<image>/05_string.js');
$x757 =& $x758[0]; list(,$W757,$S757,$U757) = $x758;
$x752 = $x757;
$x751->prototype = $x752;
if (!(is_object($_RegExp) && isset($_RegExp->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x761 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 244, 15, '<image>/05_string.js');
$_TypeError =& $x761[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x761;
$x762 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x763 = $x762($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x763->class) && $x763->class === 'Error' && !isset($x763->properties['file']) && !isset($x763->properties['line']) && !isset($x763->properties['column'])) {$x763->properties['file'] = '<image>/05_string.js';$x763->properties['line'] = 244;$x763->properties['column'] = 15;$x763->attributes['file'] = $x763->attributes['line'] = $x763->attributes['column'] = 0; }
throw new JSException($x763, 244, 15, '<image>/05_string.js');
}
$x759 = $_RegExp->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 244, 15);
$x760 = $x759($global, $x751, $_RegExp, array(preg_quote(JS::toString($_separator, $global), '/'), 'g'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x752 = $x760;
if (is_object($x752) && $x752 !== JS::$undefined) { $x751 = $x752; }
if ($Useparator) {$global->properties['separator'] = $_separator; $_separator =& $global->properties['separator']; }
$_separator = $x751;;
};
$x764 = clone JS::$arrayTemplate;
$x764->properties['length'] = 0;
$x764->attributes['length'] = JS::WRITABLE;
$scope->properties['returnArray'] = JS::$undefined; $_returnArray =& $scope->properties['returnArray'];
$UreturnArray = FALSE;
$_returnArray = $x764;
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
unset($x765, $W765, $S765, $U765);
$x766 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, JS::toString('lastIndex', $global), 248, 29, '<image>/05_string.js');
$x765 =& $x766[0]; list(,$W765,$S765,$U765) = $x766;
$scope->properties['savedLastIndex'] = JS::$undefined; $_savedLastIndex =& $scope->properties['savedLastIndex'];
$UsavedLastIndex = FALSE;
$_savedLastIndex = $x765;
unset($x767, $W767, $S767, $U767);
$x768 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, JS::toString('global', $global), 248, 64, '<image>/05_string.js');
$x767 =& $x768[0]; list(,$W767,$S767,$U767) = $x768;
$scope->properties['savedGlobal'] = JS::$undefined; $_savedGlobal =& $scope->properties['savedGlobal'];
$UsavedGlobal = FALSE;
$_savedGlobal = $x767;
$_separator->properties['global'] = TRUE;
$x769 = (((gettype($_limit) === gettype(JS::$undefined) && $_limit === JS::$undefined))|| (((is_float($_limit) || is_int($_limit)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_limit == JS::$undefined));
if (JS::toBoolean($x769, $global)) {
unset($_Infinity, $WInfinity, $SInfinity, $UInfinity);
$x770 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Infinity', $global), 253, 11, '<image>/05_string.js');
$_Infinity =& $x770[0]; list(,$WInfinity,$SInfinity,$UInfinity) = $x770;
if ($UInfinity) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x771 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 253, 11, '<image>/05_string.js');
$_ReferenceError =& $x771[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x771;
$x772 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 253, 11);
$x773 = $x772($global, $global, $_ReferenceError, array('Infinity is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x773->class) && $x773->class === 'Error' && !isset($x773->properties['file']) && !isset($x773->properties['line']) && !isset($x773->properties['column'])) {$x773->properties['file'] = '<image>/05_string.js';$x773->properties['line'] = 253;$x773->properties['column'] = 11;$x773->attributes['file'] = $x773->attributes['line'] = $x773->attributes['column'] = 0; }
throw new JSException($x773, 253, 11, '<image>/05_string.js');
}
if ($Ulimit) {$global->properties['limit'] = $_limit; $_limit =& $global->properties['limit']; }
$_limit = $_Infinity;;
};
for (;;) {
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x777 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 32, '<image>/05_string.js');
$_TypeError =& $x777[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x777;
$x778 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x779 = $x778($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x779->class) && $x779->class === 'Error' && !isset($x779->properties['file']) && !isset($x779->properties['line']) && !isset($x779->properties['column'])) {$x779->properties['file'] = '<image>/05_string.js';$x779->properties['line'] = 256;$x779->properties['column'] = 32;$x779->attributes['file'] = $x779->attributes['line'] = $x779->attributes['column'] = 0; }
throw new JSException($x779, 256, 32, '<image>/05_string.js');
}
$x776 = JS::toObject($_separator, $global);
unset($x780, $W780, $S780, $U780);
$x781 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x776, JS::toString('exec', $global), 256, 32, '<image>/05_string.js');
$x780 =& $x781[0]; list(,$W780,$S780,$U780) = $x781;
if (!(is_object($x780) && isset($x780->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x784 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 256, 32, '<image>/05_string.js');
$_TypeError =& $x784[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x784;
$x785 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x786 = $x785($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x786->class) && $x786->class === 'Error' && !isset($x786->properties['file']) && !isset($x786->properties['line']) && !isset($x786->properties['column'])) {$x786->properties['file'] = '<image>/05_string.js';$x786->properties['line'] = 256;$x786->properties['column'] = 32;$x786->attributes['file'] = $x786->attributes['line'] = $x786->attributes['column'] = 0; }
throw new JSException($x786, 256, 32, '<image>/05_string.js');
}
$x782 = $x780->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 256, 32);
$x783 = $x782($global, $x776, $x780, array($_thisString), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Umatch) {$global->properties['match'] = $_match; $_match =& $global->properties['match']; }
$_match = $x783;
$x775 = $_match;
if (JS::toBoolean($x775, $global)) {
$x790 = --$_limit;
$x787 = JS::toPrimitive($x790, $global);
$x788 = JS::toPrimitive(0, $global);
$x789 = (is_string($x788) && is_string($x787) ? strcmp($x788, $x787) < 0 : (!is_nan($x791 = JS::toNumber($x788, $global)) && !is_nan($x792 = JS::toNumber($x787, $global)) && $x791 < $x792));
$x775 = $x789; }
$x774 = $x775;
if (JS::toBoolean($x774, $global)) {
unset($x796, $W796, $S796, $U796);
$x797 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 256, 80, '<image>/05_string.js');
$x796 =& $x797[0]; list(,$W796,$S796,$U796) = $x797;
$x793 = JS::toPrimitive($_lastIndex, $global);
$x794 = JS::toPrimitive($x796, $global);
$x795 = (is_string($x793) && is_string($x794) ? strcmp($x793, $x794) < 0 : (!is_nan($x798 = JS::toNumber($x793, $global)) && !is_nan($x799 = JS::toNumber($x794, $global)) && $x798 < $x799));
$x774 = $x795; }
if (!JS::toBoolean($x774, $global)) { break; }

unset($x802, $W802, $S802, $U802);
$x803 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 257, 12, '<image>/05_string.js');
$x802 =& $x803[0]; list(,$W802,$S802,$U802) = $x803;
$x801 = (((gettype($x802) === gettype('') && $x802 === ''))|| (((is_float($x802) || is_int($x802)) && (is_float('') || is_int(''))) && $x802 == ''));
$x800 = $x801;
if (JS::toBoolean($x800, $global)) {
unset($x805, $W805, $S805, $U805);
$x806 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 257, 31, '<image>/05_string.js');
$x805 =& $x806[0]; list(,$W805,$S805,$U805) = $x806;
$x804 = (((gettype($x805) === gettype($_lastIndex) && $x805 === $_lastIndex))|| (((is_float($x805) || is_int($x805)) && (is_float($_lastIndex) || is_int($_lastIndex))) && $x805 == $_lastIndex));
$x800 = $x804; }
if (JS::toBoolean($x800, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x808 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 20, '<image>/05_string.js');
$_TypeError =& $x808[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x808;
$x809 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x810 = $x809($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x810->class) && $x810->class === 'Error' && !isset($x810->properties['file']) && !isset($x810->properties['line']) && !isset($x810->properties['column'])) {$x810->properties['file'] = '<image>/05_string.js';$x810->properties['line'] = 258;$x810->properties['column'] = 20;$x810->attributes['file'] = $x810->attributes['line'] = $x810->attributes['column'] = 0; }
throw new JSException($x810, 258, 20, '<image>/05_string.js');
}
$x807 = JS::toObject($_returnArray, $global);
unset($x811, $W811, $S811, $U811);
$x812 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x807, JS::toString('push', $global), 258, 20, '<image>/05_string.js');
$x811 =& $x812[0]; list(,$W811,$S811,$U811) = $x812;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x814 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 35, '<image>/05_string.js');
$_TypeError =& $x814[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x814;
$x815 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x816 = $x815($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x816->class) && $x816->class === 'Error' && !isset($x816->properties['file']) && !isset($x816->properties['line']) && !isset($x816->properties['column'])) {$x816->properties['file'] = '<image>/05_string.js';$x816->properties['line'] = 258;$x816->properties['column'] = 35;$x816->attributes['file'] = $x816->attributes['line'] = $x816->attributes['column'] = 0; }
throw new JSException($x816, 258, 35, '<image>/05_string.js');
}
$x813 = JS::toObject($leThis, $global);
unset($x817, $W817, $S817, $U817);
$x818 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x813, JS::toString('substring', $global), 258, 35, '<image>/05_string.js');
$x817 =& $x818[0]; list(,$W817,$S817,$U817) = $x818;
$x819 = JS::toPrimitive($_lastIndex, $global);
$x820 = JS::toPrimitive(1, $global);
if (!(is_object($x817) && isset($x817->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x823 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 35, '<image>/05_string.js');
$_TypeError =& $x823[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x823;
$x824 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x825 = $x824($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x825->class) && $x825->class === 'Error' && !isset($x825->properties['file']) && !isset($x825->properties['line']) && !isset($x825->properties['column'])) {$x825->properties['file'] = '<image>/05_string.js';$x825->properties['line'] = 258;$x825->properties['column'] = 35;$x825->attributes['file'] = $x825->attributes['line'] = $x825->attributes['column'] = 0; }
throw new JSException($x825, 258, 35, '<image>/05_string.js');
}
$x821 = $x817->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 35);
$x822 = $x821($global, $x813, $x817, array($_lastIndex, (is_string($x819) || is_string($x820) ? JS::toString($x819, $global) . JS::toString($x820, $global) : JS::toNumber($x819, $global) + JS::toNumber($x820, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x811) && isset($x811->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x828 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 258, 20, '<image>/05_string.js');
$_TypeError =& $x828[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x828;
$x829 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x830 = $x829($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x830->class) && $x830->class === 'Error' && !isset($x830->properties['file']) && !isset($x830->properties['line']) && !isset($x830->properties['column'])) {$x830->properties['file'] = '<image>/05_string.js';$x830->properties['line'] = 258;$x830->properties['column'] = 20;$x830->attributes['file'] = $x830->attributes['line'] = $x830->attributes['column'] = 0; }
throw new JSException($x830, 258, 20, '<image>/05_string.js');
}
$x826 = $x811->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 258, 20);
$x827 = $x826($global, $x807, $x811, array($x822), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x831 = ++$_lastIndex;
unset($x832, $W832, $S832, $U832);
$x833 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_separator, JS::toString('lastIndex', $global), 260, 15, '<image>/05_string.js');
$x832 =& $x833[0]; list(,$W832,$S832,$U832) = $x833;
$x834 = ++$x832;;
}
else {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x836 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 20, '<image>/05_string.js');
$_TypeError =& $x836[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x836;
$x837 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x838 = $x837($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x838->class) && $x838->class === 'Error' && !isset($x838->properties['file']) && !isset($x838->properties['line']) && !isset($x838->properties['column'])) {$x838->properties['file'] = '<image>/05_string.js';$x838->properties['line'] = 263;$x838->properties['column'] = 20;$x838->attributes['file'] = $x838->attributes['line'] = $x838->attributes['column'] = 0; }
throw new JSException($x838, 263, 20, '<image>/05_string.js');
}
$x835 = JS::toObject($_returnArray, $global);
unset($x839, $W839, $S839, $U839);
$x840 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x835, JS::toString('push', $global), 263, 20, '<image>/05_string.js');
$x839 =& $x840[0]; list(,$W839,$S839,$U839) = $x840;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x842 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 35, '<image>/05_string.js');
$_TypeError =& $x842[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x842;
$x843 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x844 = $x843($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x844->class) && $x844->class === 'Error' && !isset($x844->properties['file']) && !isset($x844->properties['line']) && !isset($x844->properties['column'])) {$x844->properties['file'] = '<image>/05_string.js';$x844->properties['line'] = 263;$x844->properties['column'] = 35;$x844->attributes['file'] = $x844->attributes['line'] = $x844->attributes['column'] = 0; }
throw new JSException($x844, 263, 35, '<image>/05_string.js');
}
$x841 = JS::toObject($leThis, $global);
unset($x845, $W845, $S845, $U845);
$x846 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x841, JS::toString('substring', $global), 263, 35, '<image>/05_string.js');
$x845 =& $x846[0]; list(,$W845,$S845,$U845) = $x846;
unset($x847, $W847, $S847, $U847);
$x848 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 263, 52, '<image>/05_string.js');
$x847 =& $x848[0]; list(,$W847,$S847,$U847) = $x848;
if (!(is_object($x845) && isset($x845->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x851 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 35, '<image>/05_string.js');
$_TypeError =& $x851[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x851;
$x852 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x853 = $x852($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x853->class) && $x853->class === 'Error' && !isset($x853->properties['file']) && !isset($x853->properties['line']) && !isset($x853->properties['column'])) {$x853->properties['file'] = '<image>/05_string.js';$x853->properties['line'] = 263;$x853->properties['column'] = 35;$x853->attributes['file'] = $x853->attributes['line'] = $x853->attributes['column'] = 0; }
throw new JSException($x853, 263, 35, '<image>/05_string.js');
}
$x849 = $x845->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 35);
$x850 = $x849($global, $x841, $x845, array($_lastIndex, $x847), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x839) && isset($x839->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x856 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 263, 20, '<image>/05_string.js');
$_TypeError =& $x856[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x856;
$x857 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x858 = $x857($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x858->class) && $x858->class === 'Error' && !isset($x858->properties['file']) && !isset($x858->properties['line']) && !isset($x858->properties['column'])) {$x858->properties['file'] = '<image>/05_string.js';$x858->properties['line'] = 263;$x858->properties['column'] = 20;$x858->attributes['file'] = $x858->attributes['line'] = $x858->attributes['column'] = 0; }
throw new JSException($x858, 263, 20, '<image>/05_string.js');
}
$x854 = $x839->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 263, 20);
$x855 = $x854($global, $x835, $x839, array($x850), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
for ($x859 = 0;; ++$x859) {
if ($x859 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 1;
unset($x860, $W860, $S860, $U860);
$x861 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('length', $global), 265, 29, '<image>/05_string.js');
$x860 =& $x861[0]; list(,$W860,$S860,$U860) = $x861;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x860;
}
if ($x859 !== 0) {
$x862 = ++$_i;
}
$x863 = JS::toPrimitive($_i, $global);
$x864 = JS::toPrimitive($_l, $global);
$x865 = (is_string($x863) && is_string($x864) ? strcmp($x863, $x864) < 0 : (!is_nan($x866 = JS::toNumber($x863, $global)) && !is_nan($x867 = JS::toNumber($x864, $global)) && $x866 < $x867));
if (!JS::toBoolean($x865, $global)) { break; }

if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x869 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 266, 21, '<image>/05_string.js');
$_TypeError =& $x869[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x869;
$x870 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x871 = $x870($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x871->class) && $x871->class === 'Error' && !isset($x871->properties['file']) && !isset($x871->properties['line']) && !isset($x871->properties['column'])) {$x871->properties['file'] = '<image>/05_string.js';$x871->properties['line'] = 266;$x871->properties['column'] = 21;$x871->attributes['file'] = $x871->attributes['line'] = $x871->attributes['column'] = 0; }
throw new JSException($x871, 266, 21, '<image>/05_string.js');
}
$x868 = JS::toObject($_returnArray, $global);
unset($x872, $W872, $S872, $U872);
$x873 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x868, JS::toString('push', $global), 266, 21, '<image>/05_string.js');
$x872 =& $x873[0]; list(,$W872,$S872,$U872) = $x873;
unset($x874, $W874, $S874, $U874);
$x875 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString($_i, $global), 266, 27, '<image>/05_string.js');
$x874 =& $x875[0]; list(,$W874,$S874,$U874) = $x875;
if (!(is_object($x872) && isset($x872->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x878 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 266, 21, '<image>/05_string.js');
$_TypeError =& $x878[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x878;
$x879 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x880 = $x879($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x880->class) && $x880->class === 'Error' && !isset($x880->properties['file']) && !isset($x880->properties['line']) && !isset($x880->properties['column'])) {$x880->properties['file'] = '<image>/05_string.js';$x880->properties['line'] = 266;$x880->properties['column'] = 21;$x880->attributes['file'] = $x880->attributes['line'] = $x880->attributes['column'] = 0; }
throw new JSException($x880, 266, 21, '<image>/05_string.js');
}
$x876 = $x872->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 266, 21);
$x877 = $x876($global, $x868, $x872, array($x874), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
unset($x883, $W883, $S883, $U883);
$x884 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString('index', $global), 269, 21, '<image>/05_string.js');
$x883 =& $x884[0]; list(,$W883,$S883,$U883) = $x884;
unset($x885, $W885, $S885, $U885);
$x886 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_match, JS::toString(0, $global), 269, 35, '<image>/05_string.js');
$x885 =& $x886[0]; list(,$W885,$S885,$U885) = $x886;
unset($x887, $W887, $S887, $U887);
$x888 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x885, JS::toString('length', $global), 269, 38, '<image>/05_string.js');
$x887 =& $x888[0]; list(,$W887,$S887,$U887) = $x888;
$x881 = JS::toPrimitive($x883, $global);
$x882 = JS::toPrimitive($x887, $global);
$x889 = (is_string($x881) || is_string($x882) ? JS::toString($x881, $global) . JS::toString($x882, $global) : JS::toNumber($x881, $global) + JS::toNumber($x882, $global));
if ($UlastIndex) {$global->properties['lastIndex'] = $_lastIndex; $_lastIndex =& $global->properties['lastIndex']; }
$_lastIndex = $x889;;
};
};
unset($x893, $W893, $S893, $U893);
$x894 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 273, 22, '<image>/05_string.js');
$x893 =& $x894[0]; list(,$W893,$S893,$U893) = $x894;
$x890 = JS::toPrimitive($_lastIndex, $global);
$x891 = JS::toPrimitive($x893, $global);
$x892 = (is_string($x890) && is_string($x891) ? strcmp($x890, $x891) < 0 : (!is_nan($x895 = JS::toNumber($x890, $global)) && !is_nan($x896 = JS::toNumber($x891, $global)) && $x895 < $x896));
if (JS::toBoolean($x892, $global)) {
if ($_returnArray === JS::$undefined || $_returnArray === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x898 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 19, '<image>/05_string.js');
$_TypeError =& $x898[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x898;
$x899 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x900 = $x899($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x900->class) && $x900->class === 'Error' && !isset($x900->properties['file']) && !isset($x900->properties['line']) && !isset($x900->properties['column'])) {$x900->properties['file'] = '<image>/05_string.js';$x900->properties['line'] = 274;$x900->properties['column'] = 19;$x900->attributes['file'] = $x900->attributes['line'] = $x900->attributes['column'] = 0; }
throw new JSException($x900, 274, 19, '<image>/05_string.js');
}
$x897 = JS::toObject($_returnArray, $global);
unset($x901, $W901, $S901, $U901);
$x902 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x897, JS::toString('push', $global), 274, 19, '<image>/05_string.js');
$x901 =& $x902[0]; list(,$W901,$S901,$U901) = $x902;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x904 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 34, '<image>/05_string.js');
$_TypeError =& $x904[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x904;
$x905 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x906 = $x905($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x906->class) && $x906->class === 'Error' && !isset($x906->properties['file']) && !isset($x906->properties['line']) && !isset($x906->properties['column'])) {$x906->properties['file'] = '<image>/05_string.js';$x906->properties['line'] = 274;$x906->properties['column'] = 34;$x906->attributes['file'] = $x906->attributes['line'] = $x906->attributes['column'] = 0; }
throw new JSException($x906, 274, 34, '<image>/05_string.js');
}
$x903 = JS::toObject($leThis, $global);
unset($x907, $W907, $S907, $U907);
$x908 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x903, JS::toString('substring', $global), 274, 34, '<image>/05_string.js');
$x907 =& $x908[0]; list(,$W907,$S907,$U907) = $x908;
unset($x909, $W909, $S909, $U909);
$x910 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $leThis, JS::toString('length', $global), 274, 50, '<image>/05_string.js');
$x909 =& $x910[0]; list(,$W909,$S909,$U909) = $x910;
if (!(is_object($x907) && isset($x907->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x913 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 34, '<image>/05_string.js');
$_TypeError =& $x913[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x913;
$x914 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x915 = $x914($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x915->class) && $x915->class === 'Error' && !isset($x915->properties['file']) && !isset($x915->properties['line']) && !isset($x915->properties['column'])) {$x915->properties['file'] = '<image>/05_string.js';$x915->properties['line'] = 274;$x915->properties['column'] = 34;$x915->attributes['file'] = $x915->attributes['line'] = $x915->attributes['column'] = 0; }
throw new JSException($x915, 274, 34, '<image>/05_string.js');
}
$x911 = $x907->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 34);
$x912 = $x911($global, $x903, $x907, array($_lastIndex, $x909), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($x901) && isset($x901->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x918 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 274, 19, '<image>/05_string.js');
$_TypeError =& $x918[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x918;
$x919 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x920 = $x919($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x920->class) && $x920->class === 'Error' && !isset($x920->properties['file']) && !isset($x920->properties['line']) && !isset($x920->properties['column'])) {$x920->properties['file'] = '<image>/05_string.js';$x920->properties['line'] = 274;$x920->properties['column'] = 19;$x920->attributes['file'] = $x920->attributes['line'] = $x920->attributes['column'] = 0; }
throw new JSException($x920, 274, 19, '<image>/05_string.js');
}
$x916 = $x901->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 274, 19);
$x917 = $x916($global, $x897, $x901, array($x912), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
$_separator->properties['global'] =$_savedGlobal;
$x921 = JS::toString('lastIndex', $global);
if ($_separator === JS::$undefined || $_separator === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x922 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 278, 22, '<image>/05_string.js');
$_TypeError =& $x922[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x922;
$x923 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x924 = $x923($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x924->class) && $x924->class === 'Error' && !isset($x924->properties['file']) && !isset($x924->properties['line']) && !isset($x924->properties['column'])) {$x924->properties['file'] = '<image>/05_string.js';$x924->properties['line'] = 278;$x924->properties['column'] = 22;$x924->attributes['file'] = $x924->attributes['line'] = $x924->attributes['column'] = 0; }
throw new JSException($x924, 278, 22, '<image>/05_string.js');
}
$_separator = JS::toObject($_separator, $global);
unset($x925, $W925, $S925, $U925);
$x926 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_separator, JS::toString($x921, $global), 278, 22, '<image>/05_string.js');
$x925 =& $x926[0]; list(,$W925,$S925,$U925) = $x926;
if ($U925 && (!isset($_separator->extensible) || $_separator->extensible)) {$_separator->properties[$x921] = $x925; $x925 =& $_separator->properties[$x921]; $_separator->attributes[$x921] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U925 = FALSE; $W925 = TRUE; }
if (isset($_separator->class) && $_separator->class === 'Array') {  if (isset($_separator->properties['length']) && $_separator->properties['length'] !== JS::$undefined) { $x928 = $_separator->properties['length']; }  else { $x928 = 0; } }
if (isset($S925)) {
$x929 = $S925->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 278, 22);
$x930 = $x929($global, $_separator, $S925, array($_savedLastIndex), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x927 = $x930;
} else {
if (!$U925) {$x927 = $_savedLastIndex;if ($W925) { $x925 = $_savedLastIndex; }  }
else { $x927 = JS::$undefined; }
}
if (isset($_separator->class) && $_separator->class === 'Array') {if (is_int('lastIndex') && 'lastIndex' >= $_separator->properties['length']) { $_separator->properties['length'] = 'lastIndex' + 1; }else if ($x921 === 'length' && is_int($_savedLastIndex) && $x928 > $_savedLastIndex) {  for ($i = $_savedLastIndex; $i < $x928; ++$i) {  unset($_separator->properties[$i], $_separator->attributes[$i]); }}};
return $_returnArray;
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x724=&$scope->properties[\'arguments\'];$x724->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x724->properties[$i]=$args[$i];$x724->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'separator\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_separator=&$scope->properties[\'separator\'];$Useparator=FALSE;$scope->properties[\'limit\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_limit=&$scope->properties[\'limit\'];$Ulimit=FALSE;$global->scope[++$global->scope_sp]=$scope;$x725=(((gettype($_separator)===gettype(JS::$undefined)&&$_separator===JS::$undefined))||(((is_float($_separator)||is_int($_separator))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_separator==JS::$undefined));if(JS::toBoolean($x725,$global)){$x726=clone JS::$arrayTemplate;$x726->properties[\'length\']=1;$x726->attributes[\'length\']=JS::WRITABLE;$x726->properties[0]=$leThis->value;$x726->attributes[0]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x726;}$x727=(((gettype($_separator)===gettype(\'\')&&$_separator===\'\'))||(((is_float($_separator)||is_int($_separator))&&(is_float(\'\')||is_int(\'\')))&&$_separator==\'\'));if(JS::toBoolean($x727,$global)){$x728=clone JS::$arrayTemplate;$x728->properties[\'length\']=0;$x728->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x728;for($x729=0;;++$x729){if($x729===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($x730,$W730,$S730,$U730);$x731=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),236,27,\'<image>/05_string.js\');$x730=&$x731[0];list(,$W730,$S730,$U730)=$x731;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x730;}if($x729!==0){$x732=++$_i;}$x733=JS::toPrimitive($_i,$global);$x734=JS::toPrimitive($_l,$global);$x735=(is_string($x733)&&is_string($x734)?strcmp($x733,$x734)<0:(!is_nan($x736=JS::toNumber($x733,$global))&&!is_nan($x737=JS::toNumber($x734,$global))&&$x736<$x737));if(!JS::toBoolean($x735,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x739=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,20,\'<image>/05_string.js\');$_TypeError=&$x739[0];list(,$WTypeError,$STypeError,$UTypeError)=$x739;$x740=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x741=$x740($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x741->class)&&$x741->class===\'Error\'&&!isset($x741->properties[\'file\'])&&!isset($x741->properties[\'line\'])&&!isset($x741->properties[\'column\'])){$x741->properties[\'file\']=\'<image>/05_string.js\';$x741->properties[\'line\']=237;$x741->properties[\'column\']=20;$x741->attributes[\'file\']=$x741->attributes[\'line\']=$x741->attributes[\'column\']=0;}throw new JSException($x741,237,20,\'<image>/05_string.js\');}$x738=JS::toObject($_returnArray,$global);unset($x742,$W742,$S742,$U742);$x743=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x738,JS::toString(\'push\',$global),237,20,\'<image>/05_string.js\');$x742=&$x743[0];list(,$W742,$S742,$U742)=$x743;if(!(is_object($x742)&&isset($x742->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x746=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,20,\'<image>/05_string.js\');$_TypeError=&$x746[0];list(,$WTypeError,$STypeError,$UTypeError)=$x746;$x747=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x748=$x747($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x748->class)&&$x748->class===\'Error\'&&!isset($x748->properties[\'file\'])&&!isset($x748->properties[\'line\'])&&!isset($x748->properties[\'column\'])){$x748->properties[\'file\']=\'<image>/05_string.js\';$x748->properties[\'line\']=237;$x748->properties[\'column\']=20;$x748->attributes[\'file\']=$x748->attributes[\'line\']=$x748->attributes[\'column\']=0;}throw new JSException($x748,237,20,\'<image>/05_string.js\');}$x744=$x742->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',237,20);$x745=$x744($global,$x738,$x742,array((string)substr($leThis->value,$_i,1)),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_returnArray;}$x750=$_separator;$x750=($x750===JS::$undefined?\'undefined\':(is_int($x750)||is_float($x750)?\'number\':(is_bool($x750)?\'boolean\':(is_string($x750)?\'string\':(is_object($x750)&&isset($x750->call)?\'function\':\'object\')))));$x749=(((gettype($x750)===gettype(\'string\')&&$x750===\'string\'))||(((is_float($x750)||is_int($x750))&&(is_float(\'string\')||is_int(\'string\')))&&$x750==\'string\'));if(JS::toBoolean($x749,$global)){unset($_RegExp,$WRegExp,$SRegExp,$URegExp);$x753=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'RegExp\',$global),244,19,\'<image>/05_string.js\');$_RegExp=&$x753[0];list(,$WRegExp,$SRegExp,$URegExp)=$x753;if($URegExp){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x754=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),244,19,\'<image>/05_string.js\');$_ReferenceError=&$x754[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x754;$x755=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,19);$x756=$x755($global,$global,$_ReferenceError,array(\'RegExp is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x756->class)&&$x756->class===\'Error\'&&!isset($x756->properties[\'file\'])&&!isset($x756->properties[\'line\'])&&!isset($x756->properties[\'column\'])){$x756->properties[\'file\']=\'<image>/05_string.js\';$x756->properties[\'line\']=244;$x756->properties[\'column\']=19;$x756->attributes[\'file\']=$x756->attributes[\'line\']=$x756->attributes[\'column\']=0;}throw new JSException($x756,244,19,\'<image>/05_string.js\');}$x751=clone JS::$objectTemplate;unset($x757,$W757,$S757,$U757);$x758=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_RegExp,JS::toString(\'prototype\',$global),244,15,\'<image>/05_string.js\');$x757=&$x758[0];list(,$W757,$S757,$U757)=$x758;$x752=$x757;$x751->prototype=$x752;if(!(is_object($_RegExp)&&isset($_RegExp->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x761=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),244,15,\'<image>/05_string.js\');$_TypeError=&$x761[0];list(,$WTypeError,$STypeError,$UTypeError)=$x761;$x762=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x763=$x762($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x763->class)&&$x763->class===\'Error\'&&!isset($x763->properties[\'file\'])&&!isset($x763->properties[\'line\'])&&!isset($x763->properties[\'column\'])){$x763->properties[\'file\']=\'<image>/05_string.js\';$x763->properties[\'line\']=244;$x763->properties[\'column\']=15;$x763->attributes[\'file\']=$x763->attributes[\'line\']=$x763->attributes[\'column\']=0;}throw new JSException($x763,244,15,\'<image>/05_string.js\');}$x759=$_RegExp->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',244,15);$x760=$x759($global,$x751,$_RegExp,array(preg_quote(JS::toString($_separator,$global),\'/\'),\'g\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x752=$x760;if(is_object($x752)&&$x752!==JS::$undefined){$x751=$x752;}if($Useparator){$global->properties[\'separator\']=$_separator;$_separator=&$global->properties[\'separator\'];}$_separator=$x751;}$x764=clone JS::$arrayTemplate;$x764->properties[\'length\']=0;$x764->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'returnArray\']=JS::$undefined;$_returnArray=&$scope->properties[\'returnArray\'];$UreturnArray=FALSE;$_returnArray=$x764;$scope->properties[\'match\']=JS::$undefined;$_match=&$scope->properties[\'match\'];$Umatch=FALSE;$_match=JS::$undefined;$scope->properties[\'lastIndex\']=JS::$undefined;$_lastIndex=&$scope->properties[\'lastIndex\'];$UlastIndex=FALSE;$_lastIndex=0;$scope->properties[\'index\']=JS::$undefined;$_index=&$scope->properties[\'index\'];$Uindex=FALSE;$_index=JS::$undefined;$scope->properties[\'thisString\']=JS::$undefined;$_thisString=&$scope->properties[\'thisString\'];$UthisString=FALSE;$_thisString=$leThis->value;unset($x765,$W765,$S765,$U765);$x766=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,JS::toString(\'lastIndex\',$global),248,29,\'<image>/05_string.js\');$x765=&$x766[0];list(,$W765,$S765,$U765)=$x766;$scope->properties[\'savedLastIndex\']=JS::$undefined;$_savedLastIndex=&$scope->properties[\'savedLastIndex\'];$UsavedLastIndex=FALSE;$_savedLastIndex=$x765;unset($x767,$W767,$S767,$U767);$x768=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,JS::toString(\'global\',$global),248,64,\'<image>/05_string.js\');$x767=&$x768[0];list(,$W767,$S767,$U767)=$x768;$scope->properties[\'savedGlobal\']=JS::$undefined;$_savedGlobal=&$scope->properties[\'savedGlobal\'];$UsavedGlobal=FALSE;$_savedGlobal=$x767;$_separator->properties[\'global\']=TRUE;$x769=(((gettype($_limit)===gettype(JS::$undefined)&&$_limit===JS::$undefined))||(((is_float($_limit)||is_int($_limit))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_limit==JS::$undefined));if(JS::toBoolean($x769,$global)){unset($_Infinity,$WInfinity,$SInfinity,$UInfinity);$x770=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Infinity\',$global),253,11,\'<image>/05_string.js\');$_Infinity=&$x770[0];list(,$WInfinity,$SInfinity,$UInfinity)=$x770;if($UInfinity){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x771=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),253,11,\'<image>/05_string.js\');$_ReferenceError=&$x771[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x771;$x772=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',253,11);$x773=$x772($global,$global,$_ReferenceError,array(\'Infinity is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x773->class)&&$x773->class===\'Error\'&&!isset($x773->properties[\'file\'])&&!isset($x773->properties[\'line\'])&&!isset($x773->properties[\'column\'])){$x773->properties[\'file\']=\'<image>/05_string.js\';$x773->properties[\'line\']=253;$x773->properties[\'column\']=11;$x773->attributes[\'file\']=$x773->attributes[\'line\']=$x773->attributes[\'column\']=0;}throw new JSException($x773,253,11,\'<image>/05_string.js\');}if($Ulimit){$global->properties[\'limit\']=$_limit;$_limit=&$global->properties[\'limit\'];}$_limit=$_Infinity;}for(;;){if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x777=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,32,\'<image>/05_string.js\');$_TypeError=&$x777[0];list(,$WTypeError,$STypeError,$UTypeError)=$x777;$x778=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x779=$x778($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x779->class)&&$x779->class===\'Error\'&&!isset($x779->properties[\'file\'])&&!isset($x779->properties[\'line\'])&&!isset($x779->properties[\'column\'])){$x779->properties[\'file\']=\'<image>/05_string.js\';$x779->properties[\'line\']=256;$x779->properties[\'column\']=32;$x779->attributes[\'file\']=$x779->attributes[\'line\']=$x779->attributes[\'column\']=0;}throw new JSException($x779,256,32,\'<image>/05_string.js\');}$x776=JS::toObject($_separator,$global);unset($x780,$W780,$S780,$U780);$x781=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x776,JS::toString(\'exec\',$global),256,32,\'<image>/05_string.js\');$x780=&$x781[0];list(,$W780,$S780,$U780)=$x781;if(!(is_object($x780)&&isset($x780->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x784=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),256,32,\'<image>/05_string.js\');$_TypeError=&$x784[0];list(,$WTypeError,$STypeError,$UTypeError)=$x784;$x785=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x786=$x785($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x786->class)&&$x786->class===\'Error\'&&!isset($x786->properties[\'file\'])&&!isset($x786->properties[\'line\'])&&!isset($x786->properties[\'column\'])){$x786->properties[\'file\']=\'<image>/05_string.js\';$x786->properties[\'line\']=256;$x786->properties[\'column\']=32;$x786->attributes[\'file\']=$x786->attributes[\'line\']=$x786->attributes[\'column\']=0;}throw new JSException($x786,256,32,\'<image>/05_string.js\');}$x782=$x780->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',256,32);$x783=$x782($global,$x776,$x780,array($_thisString),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Umatch){$global->properties[\'match\']=$_match;$_match=&$global->properties[\'match\'];}$_match=$x783;$x775=$_match;if(JS::toBoolean($x775,$global)){$x790=--$_limit;$x787=JS::toPrimitive($x790,$global);$x788=JS::toPrimitive(0,$global);$x789=(is_string($x788)&&is_string($x787)?strcmp($x788,$x787)<0:(!is_nan($x791=JS::toNumber($x788,$global))&&!is_nan($x792=JS::toNumber($x787,$global))&&$x791<$x792));$x775=$x789;}$x774=$x775;if(JS::toBoolean($x774,$global)){unset($x796,$W796,$S796,$U796);$x797=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),256,80,\'<image>/05_string.js\');$x796=&$x797[0];list(,$W796,$S796,$U796)=$x797;$x793=JS::toPrimitive($_lastIndex,$global);$x794=JS::toPrimitive($x796,$global);$x795=(is_string($x793)&&is_string($x794)?strcmp($x793,$x794)<0:(!is_nan($x798=JS::toNumber($x793,$global))&&!is_nan($x799=JS::toNumber($x794,$global))&&$x798<$x799));$x774=$x795;}if(!JS::toBoolean($x774,$global)){break;}unset($x802,$W802,$S802,$U802);$x803=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),257,12,\'<image>/05_string.js\');$x802=&$x803[0];list(,$W802,$S802,$U802)=$x803;$x801=(((gettype($x802)===gettype(\'\')&&$x802===\'\'))||(((is_float($x802)||is_int($x802))&&(is_float(\'\')||is_int(\'\')))&&$x802==\'\'));$x800=$x801;if(JS::toBoolean($x800,$global)){unset($x805,$W805,$S805,$U805);$x806=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),257,31,\'<image>/05_string.js\');$x805=&$x806[0];list(,$W805,$S805,$U805)=$x806;$x804=(((gettype($x805)===gettype($_lastIndex)&&$x805===$_lastIndex))||(((is_float($x805)||is_int($x805))&&(is_float($_lastIndex)||is_int($_lastIndex)))&&$x805==$_lastIndex));$x800=$x804;}if(JS::toBoolean($x800,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x808=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,20,\'<image>/05_string.js\');$_TypeError=&$x808[0];list(,$WTypeError,$STypeError,$UTypeError)=$x808;$x809=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x810=$x809($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x810->class)&&$x810->class===\'Error\'&&!isset($x810->properties[\'file\'])&&!isset($x810->properties[\'line\'])&&!isset($x810->properties[\'column\'])){$x810->properties[\'file\']=\'<image>/05_string.js\';$x810->properties[\'line\']=258;$x810->properties[\'column\']=20;$x810->attributes[\'file\']=$x810->attributes[\'line\']=$x810->attributes[\'column\']=0;}throw new JSException($x810,258,20,\'<image>/05_string.js\');}$x807=JS::toObject($_returnArray,$global);unset($x811,$W811,$S811,$U811);$x812=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x807,JS::toString(\'push\',$global),258,20,\'<image>/05_string.js\');$x811=&$x812[0];list(,$W811,$S811,$U811)=$x812;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x814=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,35,\'<image>/05_string.js\');$_TypeError=&$x814[0];list(,$WTypeError,$STypeError,$UTypeError)=$x814;$x815=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x816=$x815($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x816->class)&&$x816->class===\'Error\'&&!isset($x816->properties[\'file\'])&&!isset($x816->properties[\'line\'])&&!isset($x816->properties[\'column\'])){$x816->properties[\'file\']=\'<image>/05_string.js\';$x816->properties[\'line\']=258;$x816->properties[\'column\']=35;$x816->attributes[\'file\']=$x816->attributes[\'line\']=$x816->attributes[\'column\']=0;}throw new JSException($x816,258,35,\'<image>/05_string.js\');}$x813=JS::toObject($leThis,$global);unset($x817,$W817,$S817,$U817);$x818=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x813,JS::toString(\'substring\',$global),258,35,\'<image>/05_string.js\');$x817=&$x818[0];list(,$W817,$S817,$U817)=$x818;$x819=JS::toPrimitive($_lastIndex,$global);$x820=JS::toPrimitive(1,$global);if(!(is_object($x817)&&isset($x817->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x823=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,35,\'<image>/05_string.js\');$_TypeError=&$x823[0];list(,$WTypeError,$STypeError,$UTypeError)=$x823;$x824=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x825=$x824($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x825->class)&&$x825->class===\'Error\'&&!isset($x825->properties[\'file\'])&&!isset($x825->properties[\'line\'])&&!isset($x825->properties[\'column\'])){$x825->properties[\'file\']=\'<image>/05_string.js\';$x825->properties[\'line\']=258;$x825->properties[\'column\']=35;$x825->attributes[\'file\']=$x825->attributes[\'line\']=$x825->attributes[\'column\']=0;}throw new JSException($x825,258,35,\'<image>/05_string.js\');}$x821=$x817->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,35);$x822=$x821($global,$x813,$x817,array($_lastIndex,(is_string($x819)||is_string($x820)?JS::toString($x819,$global).JS::toString($x820,$global):JS::toNumber($x819,$global)+JS::toNumber($x820,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x811)&&isset($x811->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x828=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),258,20,\'<image>/05_string.js\');$_TypeError=&$x828[0];list(,$WTypeError,$STypeError,$UTypeError)=$x828;$x829=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x830=$x829($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x830->class)&&$x830->class===\'Error\'&&!isset($x830->properties[\'file\'])&&!isset($x830->properties[\'line\'])&&!isset($x830->properties[\'column\'])){$x830->properties[\'file\']=\'<image>/05_string.js\';$x830->properties[\'line\']=258;$x830->properties[\'column\']=20;$x830->attributes[\'file\']=$x830->attributes[\'line\']=$x830->attributes[\'column\']=0;}throw new JSException($x830,258,20,\'<image>/05_string.js\');}$x826=$x811->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',258,20);$x827=$x826($global,$x807,$x811,array($x822),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x831=++$_lastIndex;unset($x832,$W832,$S832,$U832);$x833=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_separator,JS::toString(\'lastIndex\',$global),260,15,\'<image>/05_string.js\');$x832=&$x833[0];list(,$W832,$S832,$U832)=$x833;$x834=++$x832;}else{if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x836=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,20,\'<image>/05_string.js\');$_TypeError=&$x836[0];list(,$WTypeError,$STypeError,$UTypeError)=$x836;$x837=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x838=$x837($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x838->class)&&$x838->class===\'Error\'&&!isset($x838->properties[\'file\'])&&!isset($x838->properties[\'line\'])&&!isset($x838->properties[\'column\'])){$x838->properties[\'file\']=\'<image>/05_string.js\';$x838->properties[\'line\']=263;$x838->properties[\'column\']=20;$x838->attributes[\'file\']=$x838->attributes[\'line\']=$x838->attributes[\'column\']=0;}throw new JSException($x838,263,20,\'<image>/05_string.js\');}$x835=JS::toObject($_returnArray,$global);unset($x839,$W839,$S839,$U839);$x840=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x835,JS::toString(\'push\',$global),263,20,\'<image>/05_string.js\');$x839=&$x840[0];list(,$W839,$S839,$U839)=$x840;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x842=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,35,\'<image>/05_string.js\');$_TypeError=&$x842[0];list(,$WTypeError,$STypeError,$UTypeError)=$x842;$x843=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x844=$x843($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x844->class)&&$x844->class===\'Error\'&&!isset($x844->properties[\'file\'])&&!isset($x844->properties[\'line\'])&&!isset($x844->properties[\'column\'])){$x844->properties[\'file\']=\'<image>/05_string.js\';$x844->properties[\'line\']=263;$x844->properties[\'column\']=35;$x844->attributes[\'file\']=$x844->attributes[\'line\']=$x844->attributes[\'column\']=0;}throw new JSException($x844,263,35,\'<image>/05_string.js\');}$x841=JS::toObject($leThis,$global);unset($x845,$W845,$S845,$U845);$x846=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x841,JS::toString(\'substring\',$global),263,35,\'<image>/05_string.js\');$x845=&$x846[0];list(,$W845,$S845,$U845)=$x846;unset($x847,$W847,$S847,$U847);$x848=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),263,52,\'<image>/05_string.js\');$x847=&$x848[0];list(,$W847,$S847,$U847)=$x848;if(!(is_object($x845)&&isset($x845->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x851=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,35,\'<image>/05_string.js\');$_TypeError=&$x851[0];list(,$WTypeError,$STypeError,$UTypeError)=$x851;$x852=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x853=$x852($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x853->class)&&$x853->class===\'Error\'&&!isset($x853->properties[\'file\'])&&!isset($x853->properties[\'line\'])&&!isset($x853->properties[\'column\'])){$x853->properties[\'file\']=\'<image>/05_string.js\';$x853->properties[\'line\']=263;$x853->properties[\'column\']=35;$x853->attributes[\'file\']=$x853->attributes[\'line\']=$x853->attributes[\'column\']=0;}throw new JSException($x853,263,35,\'<image>/05_string.js\');}$x849=$x845->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,35);$x850=$x849($global,$x841,$x845,array($_lastIndex,$x847),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x839)&&isset($x839->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x856=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),263,20,\'<image>/05_string.js\');$_TypeError=&$x856[0];list(,$WTypeError,$STypeError,$UTypeError)=$x856;$x857=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x858=$x857($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x858->class)&&$x858->class===\'Error\'&&!isset($x858->properties[\'file\'])&&!isset($x858->properties[\'line\'])&&!isset($x858->properties[\'column\'])){$x858->properties[\'file\']=\'<image>/05_string.js\';$x858->properties[\'line\']=263;$x858->properties[\'column\']=20;$x858->attributes[\'file\']=$x858->attributes[\'line\']=$x858->attributes[\'column\']=0;}throw new JSException($x858,263,20,\'<image>/05_string.js\');}$x854=$x839->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',263,20);$x855=$x854($global,$x835,$x839,array($x850),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);for($x859=0;;++$x859){if($x859===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=1;unset($x860,$W860,$S860,$U860);$x861=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'length\',$global),265,29,\'<image>/05_string.js\');$x860=&$x861[0];list(,$W860,$S860,$U860)=$x861;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x860;}if($x859!==0){$x862=++$_i;}$x863=JS::toPrimitive($_i,$global);$x864=JS::toPrimitive($_l,$global);$x865=(is_string($x863)&&is_string($x864)?strcmp($x863,$x864)<0:(!is_nan($x866=JS::toNumber($x863,$global))&&!is_nan($x867=JS::toNumber($x864,$global))&&$x866<$x867));if(!JS::toBoolean($x865,$global)){break;}if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x869=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),266,21,\'<image>/05_string.js\');$_TypeError=&$x869[0];list(,$WTypeError,$STypeError,$UTypeError)=$x869;$x870=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x871=$x870($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x871->class)&&$x871->class===\'Error\'&&!isset($x871->properties[\'file\'])&&!isset($x871->properties[\'line\'])&&!isset($x871->properties[\'column\'])){$x871->properties[\'file\']=\'<image>/05_string.js\';$x871->properties[\'line\']=266;$x871->properties[\'column\']=21;$x871->attributes[\'file\']=$x871->attributes[\'line\']=$x871->attributes[\'column\']=0;}throw new JSException($x871,266,21,\'<image>/05_string.js\');}$x868=JS::toObject($_returnArray,$global);unset($x872,$W872,$S872,$U872);$x873=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x868,JS::toString(\'push\',$global),266,21,\'<image>/05_string.js\');$x872=&$x873[0];list(,$W872,$S872,$U872)=$x873;unset($x874,$W874,$S874,$U874);$x875=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString($_i,$global),266,27,\'<image>/05_string.js\');$x874=&$x875[0];list(,$W874,$S874,$U874)=$x875;if(!(is_object($x872)&&isset($x872->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x878=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),266,21,\'<image>/05_string.js\');$_TypeError=&$x878[0];list(,$WTypeError,$STypeError,$UTypeError)=$x878;$x879=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x880=$x879($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x880->class)&&$x880->class===\'Error\'&&!isset($x880->properties[\'file\'])&&!isset($x880->properties[\'line\'])&&!isset($x880->properties[\'column\'])){$x880->properties[\'file\']=\'<image>/05_string.js\';$x880->properties[\'line\']=266;$x880->properties[\'column\']=21;$x880->attributes[\'file\']=$x880->attributes[\'line\']=$x880->attributes[\'column\']=0;}throw new JSException($x880,266,21,\'<image>/05_string.js\');}$x876=$x872->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',266,21);$x877=$x876($global,$x868,$x872,array($x874),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}unset($x883,$W883,$S883,$U883);$x884=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(\'index\',$global),269,21,\'<image>/05_string.js\');$x883=&$x884[0];list(,$W883,$S883,$U883)=$x884;unset($x885,$W885,$S885,$U885);$x886=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$_match,JS::toString(0,$global),269,35,\'<image>/05_string.js\');$x885=&$x886[0];list(,$W885,$S885,$U885)=$x886;unset($x887,$W887,$S887,$U887);$x888=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x885,JS::toString(\'length\',$global),269,38,\'<image>/05_string.js\');$x887=&$x888[0];list(,$W887,$S887,$U887)=$x888;$x881=JS::toPrimitive($x883,$global);$x882=JS::toPrimitive($x887,$global);$x889=(is_string($x881)||is_string($x882)?JS::toString($x881,$global).JS::toString($x882,$global):JS::toNumber($x881,$global)+JS::toNumber($x882,$global));if($UlastIndex){$global->properties[\'lastIndex\']=$_lastIndex;$_lastIndex=&$global->properties[\'lastIndex\'];}$_lastIndex=$x889;}}unset($x893,$W893,$S893,$U893);$x894=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),273,22,\'<image>/05_string.js\');$x893=&$x894[0];list(,$W893,$S893,$U893)=$x894;$x890=JS::toPrimitive($_lastIndex,$global);$x891=JS::toPrimitive($x893,$global);$x892=(is_string($x890)&&is_string($x891)?strcmp($x890,$x891)<0:(!is_nan($x895=JS::toNumber($x890,$global))&&!is_nan($x896=JS::toNumber($x891,$global))&&$x895<$x896));if(JS::toBoolean($x892,$global)){if($_returnArray===JS::$undefined||$_returnArray===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x898=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,19,\'<image>/05_string.js\');$_TypeError=&$x898[0];list(,$WTypeError,$STypeError,$UTypeError)=$x898;$x899=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x900=$x899($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x900->class)&&$x900->class===\'Error\'&&!isset($x900->properties[\'file\'])&&!isset($x900->properties[\'line\'])&&!isset($x900->properties[\'column\'])){$x900->properties[\'file\']=\'<image>/05_string.js\';$x900->properties[\'line\']=274;$x900->properties[\'column\']=19;$x900->attributes[\'file\']=$x900->attributes[\'line\']=$x900->attributes[\'column\']=0;}throw new JSException($x900,274,19,\'<image>/05_string.js\');}$x897=JS::toObject($_returnArray,$global);unset($x901,$W901,$S901,$U901);$x902=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x897,JS::toString(\'push\',$global),274,19,\'<image>/05_string.js\');$x901=&$x902[0];list(,$W901,$S901,$U901)=$x902;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x904=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,34,\'<image>/05_string.js\');$_TypeError=&$x904[0];list(,$WTypeError,$STypeError,$UTypeError)=$x904;$x905=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x906=$x905($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x906->class)&&$x906->class===\'Error\'&&!isset($x906->properties[\'file\'])&&!isset($x906->properties[\'line\'])&&!isset($x906->properties[\'column\'])){$x906->properties[\'file\']=\'<image>/05_string.js\';$x906->properties[\'line\']=274;$x906->properties[\'column\']=34;$x906->attributes[\'file\']=$x906->attributes[\'line\']=$x906->attributes[\'column\']=0;}throw new JSException($x906,274,34,\'<image>/05_string.js\');}$x903=JS::toObject($leThis,$global);unset($x907,$W907,$S907,$U907);$x908=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x903,JS::toString(\'substring\',$global),274,34,\'<image>/05_string.js\');$x907=&$x908[0];list(,$W907,$S907,$U907)=$x908;unset($x909,$W909,$S909,$U909);$x910=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$leThis,JS::toString(\'length\',$global),274,50,\'<image>/05_string.js\');$x909=&$x910[0];list(,$W909,$S909,$U909)=$x910;if(!(is_object($x907)&&isset($x907->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x913=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,34,\'<image>/05_string.js\');$_TypeError=&$x913[0];list(,$WTypeError,$STypeError,$UTypeError)=$x913;$x914=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x915=$x914($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x915->class)&&$x915->class===\'Error\'&&!isset($x915->properties[\'file\'])&&!isset($x915->properties[\'line\'])&&!isset($x915->properties[\'column\'])){$x915->properties[\'file\']=\'<image>/05_string.js\';$x915->properties[\'line\']=274;$x915->properties[\'column\']=34;$x915->attributes[\'file\']=$x915->attributes[\'line\']=$x915->attributes[\'column\']=0;}throw new JSException($x915,274,34,\'<image>/05_string.js\');}$x911=$x907->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,34);$x912=$x911($global,$x903,$x907,array($_lastIndex,$x909),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($x901)&&isset($x901->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x918=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),274,19,\'<image>/05_string.js\');$_TypeError=&$x918[0];list(,$WTypeError,$STypeError,$UTypeError)=$x918;$x919=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x920=$x919($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x920->class)&&$x920->class===\'Error\'&&!isset($x920->properties[\'file\'])&&!isset($x920->properties[\'line\'])&&!isset($x920->properties[\'column\'])){$x920->properties[\'file\']=\'<image>/05_string.js\';$x920->properties[\'line\']=274;$x920->properties[\'column\']=19;$x920->attributes[\'file\']=$x920->attributes[\'line\']=$x920->attributes[\'column\']=0;}throw new JSException($x920,274,19,\'<image>/05_string.js\');}$x916=$x901->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',274,19);$x917=$x916($global,$x897,$x901,array($x912),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}$_separator->properties[\'global\']=$_savedGlobal;$x921=JS::toString(\'lastIndex\',$global);if($_separator===JS::$undefined||$_separator===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x922=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),278,22,\'<image>/05_string.js\');$_TypeError=&$x922[0];list(,$WTypeError,$STypeError,$UTypeError)=$x922;$x923=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x924=$x923($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x924->class)&&$x924->class===\'Error\'&&!isset($x924->properties[\'file\'])&&!isset($x924->properties[\'line\'])&&!isset($x924->properties[\'column\'])){$x924->properties[\'file\']=\'<image>/05_string.js\';$x924->properties[\'line\']=278;$x924->properties[\'column\']=22;$x924->attributes[\'file\']=$x924->attributes[\'line\']=$x924->attributes[\'column\']=0;}throw new JSException($x924,278,22,\'<image>/05_string.js\');}$_separator=JS::toObject($_separator,$global);unset($x925,$W925,$S925,$U925);$x926=_465e5538fcb402e27559db40bec8addd_5($global,$scope,$_separator,JS::toString($x921,$global),278,22,\'<image>/05_string.js\');$x925=&$x926[0];list(,$W925,$S925,$U925)=$x926;if($U925&&(!isset($_separator->extensible)||$_separator->extensible)){$_separator->properties[$x921]=$x925;$x925=&$_separator->properties[$x921];$_separator->attributes[$x921]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U925=FALSE;$W925=TRUE;}if(isset($_separator->class)&&$_separator->class===\'Array\'){if(isset($_separator->properties[\'length\'])&&$_separator->properties[\'length\']!==JS::$undefined){$x928=$_separator->properties[\'length\'];}else{$x928=0;}}if(isset($S925)){$x929=$S925->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',278,22);$x930=$x929($global,$_separator,$S925,array($_savedLastIndex),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x927=$x930;}else{if(!$U925){$x927=$_savedLastIndex;if($W925){$x925=$_savedLastIndex;}}else{$x927=JS::$undefined;}}if(isset($_separator->class)&&$_separator->class===\'Array\'){if(is_int(\'lastIndex\')&&\'lastIndex\'>=$_separator->properties[\'length\']){$_separator->properties[\'length\']=\'lastIndex\'+1;}else if($x921===\'length\'&&is_int($_savedLastIndex)&&$x928>$_savedLastIndex){for($i=$_savedLastIndex;$i<$x928;++$i){unset($_separator->properties[$i],$_separator->attributes[$i]);}}}return$_returnArray;return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x945 =& $scope->properties['arguments'];
$x945->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x945->properties[$i] = $args[$i];
$x945->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x946 = (((gettype($_start) === gettype(JS::$undefined) && $_start === JS::$undefined))|| (((is_float($_start) || is_int($_start)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_start == JS::$undefined));
if (JS::toBoolean($x946, $global)) {
$x947 = 0;
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x947;;
};
$x948 = (((gettype($_end) === gettype(JS::$undefined) && $_end === JS::$undefined))|| (((is_float($_end) || is_int($_end)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_end == JS::$undefined));
if (JS::toBoolean($x948, $global)) {
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $_length;;
};
$x949 = JS::toPrimitive($_start, $global);
$x950 = JS::toPrimitive(0, $global);
$x951 = (is_string($x949) && is_string($x950) ? strcmp($x949, $x950) < 0 : (!is_nan($x952 = JS::toNumber($x949, $global)) && !is_nan($x953 = JS::toNumber($x950, $global)) && $x952 < $x953));
if (JS::toBoolean($x951, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x954 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 295, 11, '<image>/05_string.js');
$_Math =& $x954[0]; list(,$WMath,$SMath,$UMath) = $x954;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x955 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 295, 11, '<image>/05_string.js');
$_ReferenceError =& $x955[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x955;
$x956 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 11);
$x957 = $x956($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x957->class) && $x957->class === 'Error' && !isset($x957->properties['file']) && !isset($x957->properties['line']) && !isset($x957->properties['column'])) {$x957->properties['file'] = '<image>/05_string.js';$x957->properties['line'] = 295;$x957->properties['column'] = 11;$x957->attributes['file'] = $x957->attributes['line'] = $x957->attributes['column'] = 0; }
throw new JSException($x957, 295, 11, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x959 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 295, 19, '<image>/05_string.js');
$_TypeError =& $x959[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x959;
$x960 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x961 = $x960($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x961->class) && $x961->class === 'Error' && !isset($x961->properties['file']) && !isset($x961->properties['line']) && !isset($x961->properties['column'])) {$x961->properties['file'] = '<image>/05_string.js';$x961->properties['line'] = 295;$x961->properties['column'] = 19;$x961->attributes['file'] = $x961->attributes['line'] = $x961->attributes['column'] = 0; }
throw new JSException($x961, 295, 19, '<image>/05_string.js');
}
$x958 = JS::toObject($_Math, $global);
unset($x962, $W962, $S962, $U962);
$x963 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x958, JS::toString('max', $global), 295, 19, '<image>/05_string.js');
$x962 =& $x963[0]; list(,$W962,$S962,$U962) = $x963;
$x964 = JS::toPrimitive($_start, $global);
$x965 = JS::toPrimitive($_length, $global);
if (!(is_object($x962) && isset($x962->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x968 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 295, 19, '<image>/05_string.js');
$_TypeError =& $x968[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x968;
$x969 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x970 = $x969($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x970->class) && $x970->class === 'Error' && !isset($x970->properties['file']) && !isset($x970->properties['line']) && !isset($x970->properties['column'])) {$x970->properties['file'] = '<image>/05_string.js';$x970->properties['line'] = 295;$x970->properties['column'] = 19;$x970->attributes['file'] = $x970->attributes['line'] = $x970->attributes['column'] = 0; }
throw new JSException($x970, 295, 19, '<image>/05_string.js');
}
$x966 = $x962->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 295, 19);
$x967 = $x966($global, $x958, $x962, array((is_string($x964) || is_string($x965) ? JS::toString($x964, $global) . JS::toString($x965, $global) : JS::toNumber($x964, $global) + JS::toNumber($x965, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x967;;
};
$x971 = JS::toPrimitive($_end, $global);
$x972 = JS::toPrimitive(0, $global);
$x973 = (is_string($x971) && is_string($x972) ? strcmp($x971, $x972) < 0 : (!is_nan($x974 = JS::toNumber($x971, $global)) && !is_nan($x975 = JS::toNumber($x972, $global)) && $x974 < $x975));
if (JS::toBoolean($x973, $global)) {
unset($_Math, $WMath, $SMath, $UMath);
$x976 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 299, 9, '<image>/05_string.js');
$_Math =& $x976[0]; list(,$WMath,$SMath,$UMath) = $x976;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x977 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 299, 9, '<image>/05_string.js');
$_ReferenceError =& $x977[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x977;
$x978 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 9);
$x979 = $x978($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x979->class) && $x979->class === 'Error' && !isset($x979->properties['file']) && !isset($x979->properties['line']) && !isset($x979->properties['column'])) {$x979->properties['file'] = '<image>/05_string.js';$x979->properties['line'] = 299;$x979->properties['column'] = 9;$x979->attributes['file'] = $x979->attributes['line'] = $x979->attributes['column'] = 0; }
throw new JSException($x979, 299, 9, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x981 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 299, 17, '<image>/05_string.js');
$_TypeError =& $x981[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x981;
$x982 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x983 = $x982($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x983->class) && $x983->class === 'Error' && !isset($x983->properties['file']) && !isset($x983->properties['line']) && !isset($x983->properties['column'])) {$x983->properties['file'] = '<image>/05_string.js';$x983->properties['line'] = 299;$x983->properties['column'] = 17;$x983->attributes['file'] = $x983->attributes['line'] = $x983->attributes['column'] = 0; }
throw new JSException($x983, 299, 17, '<image>/05_string.js');
}
$x980 = JS::toObject($_Math, $global);
unset($x984, $W984, $S984, $U984);
$x985 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x980, JS::toString('max', $global), 299, 17, '<image>/05_string.js');
$x984 =& $x985[0]; list(,$W984,$S984,$U984) = $x985;
$x986 = JS::toPrimitive($_end, $global);
$x987 = JS::toPrimitive($_length, $global);
if (!(is_object($x984) && isset($x984->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x990 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 299, 17, '<image>/05_string.js');
$_TypeError =& $x990[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x990;
$x991 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x992 = $x991($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x992->class) && $x992->class === 'Error' && !isset($x992->properties['file']) && !isset($x992->properties['line']) && !isset($x992->properties['column'])) {$x992->properties['file'] = '<image>/05_string.js';$x992->properties['line'] = 299;$x992->properties['column'] = 17;$x992->attributes['file'] = $x992->attributes['line'] = $x992->attributes['column'] = 0; }
throw new JSException($x992, 299, 17, '<image>/05_string.js');
}
$x988 = $x984->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 299, 17);
$x989 = $x988($global, $x980, $x984, array((is_string($x986) || is_string($x987) ? JS::toString($x986, $global) . JS::toString($x987, $global) : JS::toNumber($x986, $global) + JS::toNumber($x987, $global)), 0), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x989;;
};
unset($_Math, $WMath, $SMath, $UMath);
$x993 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Math', $global), 302, 10, '<image>/05_string.js');
$_Math =& $x993[0]; list(,$WMath,$SMath,$UMath) = $x993;
if ($UMath) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x994 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 302, 10, '<image>/05_string.js');
$_ReferenceError =& $x994[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x994;
$x995 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 10);
$x996 = $x995($global, $global, $_ReferenceError, array('Math is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x996->class) && $x996->class === 'Error' && !isset($x996->properties['file']) && !isset($x996->properties['line']) && !isset($x996->properties['column'])) {$x996->properties['file'] = '<image>/05_string.js';$x996->properties['line'] = 302;$x996->properties['column'] = 10;$x996->attributes['file'] = $x996->attributes['line'] = $x996->attributes['column'] = 0; }
throw new JSException($x996, 302, 10, '<image>/05_string.js');
}
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x998 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 18, '<image>/05_string.js');
$_TypeError =& $x998[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x998;
$x999 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x1000 = $x999($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1000->class) && $x1000->class === 'Error' && !isset($x1000->properties['file']) && !isset($x1000->properties['line']) && !isset($x1000->properties['column'])) {$x1000->properties['file'] = '<image>/05_string.js';$x1000->properties['line'] = 302;$x1000->properties['column'] = 18;$x1000->attributes['file'] = $x1000->attributes['line'] = $x1000->attributes['column'] = 0; }
throw new JSException($x1000, 302, 18, '<image>/05_string.js');
}
$x997 = JS::toObject($_Math, $global);
unset($x1001, $W1001, $S1001, $U1001);
$x1002 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x997, JS::toString('min', $global), 302, 18, '<image>/05_string.js');
$x1001 =& $x1002[0]; list(,$W1001,$S1001,$U1001) = $x1002;
if (!(is_object($x1001) && isset($x1001->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1005 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 302, 18, '<image>/05_string.js');
$_TypeError =& $x1005[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1005;
$x1006 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x1007 = $x1006($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1007->class) && $x1007->class === 'Error' && !isset($x1007->properties['file']) && !isset($x1007->properties['line']) && !isset($x1007->properties['column'])) {$x1007->properties['file'] = '<image>/05_string.js';$x1007->properties['line'] = 302;$x1007->properties['column'] = 18;$x1007->attributes['file'] = $x1007->attributes['line'] = $x1007->attributes['column'] = 0; }
throw new JSException($x1007, 302, 18, '<image>/05_string.js');
}
$x1003 = $x1001->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 302, 18);
$x1004 = $x1003($global, $x997, $x1001, array($_start, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ustart) {$global->properties['start'] = $_start; $_start =& $global->properties['start']; }
$_start = $x1004;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1009 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 303, 16, '<image>/05_string.js');
$_TypeError =& $x1009[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1009;
$x1010 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x1011 = $x1010($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1011->class) && $x1011->class === 'Error' && !isset($x1011->properties['file']) && !isset($x1011->properties['line']) && !isset($x1011->properties['column'])) {$x1011->properties['file'] = '<image>/05_string.js';$x1011->properties['line'] = 303;$x1011->properties['column'] = 16;$x1011->attributes['file'] = $x1011->attributes['line'] = $x1011->attributes['column'] = 0; }
throw new JSException($x1011, 303, 16, '<image>/05_string.js');
}
$x1008 = JS::toObject($_Math, $global);
unset($x1012, $W1012, $S1012, $U1012);
$x1013 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1008, JS::toString('min', $global), 303, 16, '<image>/05_string.js');
$x1012 =& $x1013[0]; list(,$W1012,$S1012,$U1012) = $x1013;
if (!(is_object($x1012) && isset($x1012->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1016 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 303, 16, '<image>/05_string.js');
$_TypeError =& $x1016[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1016;
$x1017 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x1018 = $x1017($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1018->class) && $x1018->class === 'Error' && !isset($x1018->properties['file']) && !isset($x1018->properties['line']) && !isset($x1018->properties['column'])) {$x1018->properties['file'] = '<image>/05_string.js';$x1018->properties['line'] = 303;$x1018->properties['column'] = 16;$x1018->attributes['file'] = $x1018->attributes['line'] = $x1018->attributes['column'] = 0; }
throw new JSException($x1018, 303, 16, '<image>/05_string.js');
}
$x1014 = $x1012->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 303, 16);
$x1015 = $x1014($global, $x1008, $x1012, array($_end, $_length), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uend) {$global->properties['end'] = $_end; $_end =& $global->properties['end']; }
$_end = $x1015;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1020 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 21, '<image>/05_string.js');
$_TypeError =& $x1020[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1020;
$x1021 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x1022 = $x1021($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1022->class) && $x1022->class === 'Error' && !isset($x1022->properties['file']) && !isset($x1022->properties['line']) && !isset($x1022->properties['column'])) {$x1022->properties['file'] = '<image>/05_string.js';$x1022->properties['line'] = 305;$x1022->properties['column'] = 21;$x1022->attributes['file'] = $x1022->attributes['line'] = $x1022->attributes['column'] = 0; }
throw new JSException($x1022, 305, 21, '<image>/05_string.js');
}
$x1019 = JS::toObject($_Math, $global);
unset($x1023, $W1023, $S1023, $U1023);
$x1024 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1019, JS::toString('min', $global), 305, 21, '<image>/05_string.js');
$x1023 =& $x1024[0]; list(,$W1023,$S1023,$U1023) = $x1024;
if (!(is_object($x1023) && isset($x1023->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1027 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 21, '<image>/05_string.js');
$_TypeError =& $x1027[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1027;
$x1028 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x1029 = $x1028($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1029->class) && $x1029->class === 'Error' && !isset($x1029->properties['file']) && !isset($x1029->properties['line']) && !isset($x1029->properties['column'])) {$x1029->properties['file'] = '<image>/05_string.js';$x1029->properties['line'] = 305;$x1029->properties['column'] = 21;$x1029->attributes['file'] = $x1029->attributes['line'] = $x1029->attributes['column'] = 0; }
throw new JSException($x1029, 305, 21, '<image>/05_string.js');
}
$x1025 = $x1023->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 21);
$x1026 = $x1025($global, $x1019, $x1023, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['from'] = JS::$undefined; $_from =& $scope->properties['from'];
$Ufrom = FALSE;
$_from = $x1026;
if ($_Math === JS::$undefined || $_Math === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1031 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 48, '<image>/05_string.js');
$_TypeError =& $x1031[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1031;
$x1032 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x1033 = $x1032($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1033->class) && $x1033->class === 'Error' && !isset($x1033->properties['file']) && !isset($x1033->properties['line']) && !isset($x1033->properties['column'])) {$x1033->properties['file'] = '<image>/05_string.js';$x1033->properties['line'] = 305;$x1033->properties['column'] = 48;$x1033->attributes['file'] = $x1033->attributes['line'] = $x1033->attributes['column'] = 0; }
throw new JSException($x1033, 305, 48, '<image>/05_string.js');
}
$x1030 = JS::toObject($_Math, $global);
unset($x1034, $W1034, $S1034, $U1034);
$x1035 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1030, JS::toString('max', $global), 305, 48, '<image>/05_string.js');
$x1034 =& $x1035[0]; list(,$W1034,$S1034,$U1034) = $x1035;
if (!(is_object($x1034) && isset($x1034->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1038 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 305, 48, '<image>/05_string.js');
$_TypeError =& $x1038[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1038;
$x1039 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x1040 = $x1039($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1040->class) && $x1040->class === 'Error' && !isset($x1040->properties['file']) && !isset($x1040->properties['line']) && !isset($x1040->properties['column'])) {$x1040->properties['file'] = '<image>/05_string.js';$x1040->properties['line'] = 305;$x1040->properties['column'] = 48;$x1040->attributes['file'] = $x1040->attributes['line'] = $x1040->attributes['column'] = 0; }
throw new JSException($x1040, 305, 48, '<image>/05_string.js');
}
$x1036 = $x1034->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 305, 48);
$x1037 = $x1036($global, $x1030, $x1034, array($_start, $_end), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$scope->properties['to'] = JS::$undefined; $_to =& $scope->properties['to'];
$Uto = FALSE;
$_to = $x1037;
return (string) substr($leThis->value,$_from,$_to-$_from);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x945=&$scope->properties[\'arguments\'];$x945->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x945->properties[$i]=$args[$i];$x945->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'end\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_end=&$scope->properties[\'end\'];$Uend=FALSE;$global->scope[++$global->scope_sp]=$scope;$scope->properties[\'length\']=JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$_length=strlen($leThis->value);$x946=(((gettype($_start)===gettype(JS::$undefined)&&$_start===JS::$undefined))||(((is_float($_start)||is_int($_start))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_start==JS::$undefined));if(JS::toBoolean($x946,$global)){$x947=0;if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x947;}$x948=(((gettype($_end)===gettype(JS::$undefined)&&$_end===JS::$undefined))||(((is_float($_end)||is_int($_end))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_end==JS::$undefined));if(JS::toBoolean($x948,$global)){if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$_length;}$x949=JS::toPrimitive($_start,$global);$x950=JS::toPrimitive(0,$global);$x951=(is_string($x949)&&is_string($x950)?strcmp($x949,$x950)<0:(!is_nan($x952=JS::toNumber($x949,$global))&&!is_nan($x953=JS::toNumber($x950,$global))&&$x952<$x953));if(JS::toBoolean($x951,$global)){unset($_Math,$WMath,$SMath,$UMath);$x954=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),295,11,\'<image>/05_string.js\');$_Math=&$x954[0];list(,$WMath,$SMath,$UMath)=$x954;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x955=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),295,11,\'<image>/05_string.js\');$_ReferenceError=&$x955[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x955;$x956=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,11);$x957=$x956($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x957->class)&&$x957->class===\'Error\'&&!isset($x957->properties[\'file\'])&&!isset($x957->properties[\'line\'])&&!isset($x957->properties[\'column\'])){$x957->properties[\'file\']=\'<image>/05_string.js\';$x957->properties[\'line\']=295;$x957->properties[\'column\']=11;$x957->attributes[\'file\']=$x957->attributes[\'line\']=$x957->attributes[\'column\']=0;}throw new JSException($x957,295,11,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x959=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),295,19,\'<image>/05_string.js\');$_TypeError=&$x959[0];list(,$WTypeError,$STypeError,$UTypeError)=$x959;$x960=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x961=$x960($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x961->class)&&$x961->class===\'Error\'&&!isset($x961->properties[\'file\'])&&!isset($x961->properties[\'line\'])&&!isset($x961->properties[\'column\'])){$x961->properties[\'file\']=\'<image>/05_string.js\';$x961->properties[\'line\']=295;$x961->properties[\'column\']=19;$x961->attributes[\'file\']=$x961->attributes[\'line\']=$x961->attributes[\'column\']=0;}throw new JSException($x961,295,19,\'<image>/05_string.js\');}$x958=JS::toObject($_Math,$global);unset($x962,$W962,$S962,$U962);$x963=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x958,JS::toString(\'max\',$global),295,19,\'<image>/05_string.js\');$x962=&$x963[0];list(,$W962,$S962,$U962)=$x963;$x964=JS::toPrimitive($_start,$global);$x965=JS::toPrimitive($_length,$global);if(!(is_object($x962)&&isset($x962->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x968=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),295,19,\'<image>/05_string.js\');$_TypeError=&$x968[0];list(,$WTypeError,$STypeError,$UTypeError)=$x968;$x969=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x970=$x969($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x970->class)&&$x970->class===\'Error\'&&!isset($x970->properties[\'file\'])&&!isset($x970->properties[\'line\'])&&!isset($x970->properties[\'column\'])){$x970->properties[\'file\']=\'<image>/05_string.js\';$x970->properties[\'line\']=295;$x970->properties[\'column\']=19;$x970->attributes[\'file\']=$x970->attributes[\'line\']=$x970->attributes[\'column\']=0;}throw new JSException($x970,295,19,\'<image>/05_string.js\');}$x966=$x962->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',295,19);$x967=$x966($global,$x958,$x962,array((is_string($x964)||is_string($x965)?JS::toString($x964,$global).JS::toString($x965,$global):JS::toNumber($x964,$global)+JS::toNumber($x965,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x967;}$x971=JS::toPrimitive($_end,$global);$x972=JS::toPrimitive(0,$global);$x973=(is_string($x971)&&is_string($x972)?strcmp($x971,$x972)<0:(!is_nan($x974=JS::toNumber($x971,$global))&&!is_nan($x975=JS::toNumber($x972,$global))&&$x974<$x975));if(JS::toBoolean($x973,$global)){unset($_Math,$WMath,$SMath,$UMath);$x976=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),299,9,\'<image>/05_string.js\');$_Math=&$x976[0];list(,$WMath,$SMath,$UMath)=$x976;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x977=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),299,9,\'<image>/05_string.js\');$_ReferenceError=&$x977[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x977;$x978=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,9);$x979=$x978($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x979->class)&&$x979->class===\'Error\'&&!isset($x979->properties[\'file\'])&&!isset($x979->properties[\'line\'])&&!isset($x979->properties[\'column\'])){$x979->properties[\'file\']=\'<image>/05_string.js\';$x979->properties[\'line\']=299;$x979->properties[\'column\']=9;$x979->attributes[\'file\']=$x979->attributes[\'line\']=$x979->attributes[\'column\']=0;}throw new JSException($x979,299,9,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x981=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),299,17,\'<image>/05_string.js\');$_TypeError=&$x981[0];list(,$WTypeError,$STypeError,$UTypeError)=$x981;$x982=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x983=$x982($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x983->class)&&$x983->class===\'Error\'&&!isset($x983->properties[\'file\'])&&!isset($x983->properties[\'line\'])&&!isset($x983->properties[\'column\'])){$x983->properties[\'file\']=\'<image>/05_string.js\';$x983->properties[\'line\']=299;$x983->properties[\'column\']=17;$x983->attributes[\'file\']=$x983->attributes[\'line\']=$x983->attributes[\'column\']=0;}throw new JSException($x983,299,17,\'<image>/05_string.js\');}$x980=JS::toObject($_Math,$global);unset($x984,$W984,$S984,$U984);$x985=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x980,JS::toString(\'max\',$global),299,17,\'<image>/05_string.js\');$x984=&$x985[0];list(,$W984,$S984,$U984)=$x985;$x986=JS::toPrimitive($_end,$global);$x987=JS::toPrimitive($_length,$global);if(!(is_object($x984)&&isset($x984->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x990=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),299,17,\'<image>/05_string.js\');$_TypeError=&$x990[0];list(,$WTypeError,$STypeError,$UTypeError)=$x990;$x991=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x992=$x991($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x992->class)&&$x992->class===\'Error\'&&!isset($x992->properties[\'file\'])&&!isset($x992->properties[\'line\'])&&!isset($x992->properties[\'column\'])){$x992->properties[\'file\']=\'<image>/05_string.js\';$x992->properties[\'line\']=299;$x992->properties[\'column\']=17;$x992->attributes[\'file\']=$x992->attributes[\'line\']=$x992->attributes[\'column\']=0;}throw new JSException($x992,299,17,\'<image>/05_string.js\');}$x988=$x984->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',299,17);$x989=$x988($global,$x980,$x984,array((is_string($x986)||is_string($x987)?JS::toString($x986,$global).JS::toString($x987,$global):JS::toNumber($x986,$global)+JS::toNumber($x987,$global)),0),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x989;}unset($_Math,$WMath,$SMath,$UMath);$x993=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'Math\',$global),302,10,\'<image>/05_string.js\');$_Math=&$x993[0];list(,$WMath,$SMath,$UMath)=$x993;if($UMath){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x994=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),302,10,\'<image>/05_string.js\');$_ReferenceError=&$x994[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x994;$x995=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,10);$x996=$x995($global,$global,$_ReferenceError,array(\'Math is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x996->class)&&$x996->class===\'Error\'&&!isset($x996->properties[\'file\'])&&!isset($x996->properties[\'line\'])&&!isset($x996->properties[\'column\'])){$x996->properties[\'file\']=\'<image>/05_string.js\';$x996->properties[\'line\']=302;$x996->properties[\'column\']=10;$x996->attributes[\'file\']=$x996->attributes[\'line\']=$x996->attributes[\'column\']=0;}throw new JSException($x996,302,10,\'<image>/05_string.js\');}if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x998=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,18,\'<image>/05_string.js\');$_TypeError=&$x998[0];list(,$WTypeError,$STypeError,$UTypeError)=$x998;$x999=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x1000=$x999($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1000->class)&&$x1000->class===\'Error\'&&!isset($x1000->properties[\'file\'])&&!isset($x1000->properties[\'line\'])&&!isset($x1000->properties[\'column\'])){$x1000->properties[\'file\']=\'<image>/05_string.js\';$x1000->properties[\'line\']=302;$x1000->properties[\'column\']=18;$x1000->attributes[\'file\']=$x1000->attributes[\'line\']=$x1000->attributes[\'column\']=0;}throw new JSException($x1000,302,18,\'<image>/05_string.js\');}$x997=JS::toObject($_Math,$global);unset($x1001,$W1001,$S1001,$U1001);$x1002=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x997,JS::toString(\'min\',$global),302,18,\'<image>/05_string.js\');$x1001=&$x1002[0];list(,$W1001,$S1001,$U1001)=$x1002;if(!(is_object($x1001)&&isset($x1001->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1005=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),302,18,\'<image>/05_string.js\');$_TypeError=&$x1005[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1005;$x1006=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x1007=$x1006($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1007->class)&&$x1007->class===\'Error\'&&!isset($x1007->properties[\'file\'])&&!isset($x1007->properties[\'line\'])&&!isset($x1007->properties[\'column\'])){$x1007->properties[\'file\']=\'<image>/05_string.js\';$x1007->properties[\'line\']=302;$x1007->properties[\'column\']=18;$x1007->attributes[\'file\']=$x1007->attributes[\'line\']=$x1007->attributes[\'column\']=0;}throw new JSException($x1007,302,18,\'<image>/05_string.js\');}$x1003=$x1001->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',302,18);$x1004=$x1003($global,$x997,$x1001,array($_start,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ustart){$global->properties[\'start\']=$_start;$_start=&$global->properties[\'start\'];}$_start=$x1004;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1009=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),303,16,\'<image>/05_string.js\');$_TypeError=&$x1009[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1009;$x1010=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x1011=$x1010($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1011->class)&&$x1011->class===\'Error\'&&!isset($x1011->properties[\'file\'])&&!isset($x1011->properties[\'line\'])&&!isset($x1011->properties[\'column\'])){$x1011->properties[\'file\']=\'<image>/05_string.js\';$x1011->properties[\'line\']=303;$x1011->properties[\'column\']=16;$x1011->attributes[\'file\']=$x1011->attributes[\'line\']=$x1011->attributes[\'column\']=0;}throw new JSException($x1011,303,16,\'<image>/05_string.js\');}$x1008=JS::toObject($_Math,$global);unset($x1012,$W1012,$S1012,$U1012);$x1013=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x1008,JS::toString(\'min\',$global),303,16,\'<image>/05_string.js\');$x1012=&$x1013[0];list(,$W1012,$S1012,$U1012)=$x1013;if(!(is_object($x1012)&&isset($x1012->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1016=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),303,16,\'<image>/05_string.js\');$_TypeError=&$x1016[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1016;$x1017=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x1018=$x1017($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1018->class)&&$x1018->class===\'Error\'&&!isset($x1018->properties[\'file\'])&&!isset($x1018->properties[\'line\'])&&!isset($x1018->properties[\'column\'])){$x1018->properties[\'file\']=\'<image>/05_string.js\';$x1018->properties[\'line\']=303;$x1018->properties[\'column\']=16;$x1018->attributes[\'file\']=$x1018->attributes[\'line\']=$x1018->attributes[\'column\']=0;}throw new JSException($x1018,303,16,\'<image>/05_string.js\');}$x1014=$x1012->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',303,16);$x1015=$x1014($global,$x1008,$x1012,array($_end,$_length),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uend){$global->properties[\'end\']=$_end;$_end=&$global->properties[\'end\'];}$_end=$x1015;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1020=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,21,\'<image>/05_string.js\');$_TypeError=&$x1020[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1020;$x1021=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x1022=$x1021($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1022->class)&&$x1022->class===\'Error\'&&!isset($x1022->properties[\'file\'])&&!isset($x1022->properties[\'line\'])&&!isset($x1022->properties[\'column\'])){$x1022->properties[\'file\']=\'<image>/05_string.js\';$x1022->properties[\'line\']=305;$x1022->properties[\'column\']=21;$x1022->attributes[\'file\']=$x1022->attributes[\'line\']=$x1022->attributes[\'column\']=0;}throw new JSException($x1022,305,21,\'<image>/05_string.js\');}$x1019=JS::toObject($_Math,$global);unset($x1023,$W1023,$S1023,$U1023);$x1024=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x1019,JS::toString(\'min\',$global),305,21,\'<image>/05_string.js\');$x1023=&$x1024[0];list(,$W1023,$S1023,$U1023)=$x1024;if(!(is_object($x1023)&&isset($x1023->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1027=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,21,\'<image>/05_string.js\');$_TypeError=&$x1027[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1027;$x1028=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x1029=$x1028($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1029->class)&&$x1029->class===\'Error\'&&!isset($x1029->properties[\'file\'])&&!isset($x1029->properties[\'line\'])&&!isset($x1029->properties[\'column\'])){$x1029->properties[\'file\']=\'<image>/05_string.js\';$x1029->properties[\'line\']=305;$x1029->properties[\'column\']=21;$x1029->attributes[\'file\']=$x1029->attributes[\'line\']=$x1029->attributes[\'column\']=0;}throw new JSException($x1029,305,21,\'<image>/05_string.js\');}$x1025=$x1023->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,21);$x1026=$x1025($global,$x1019,$x1023,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'from\']=JS::$undefined;$_from=&$scope->properties[\'from\'];$Ufrom=FALSE;$_from=$x1026;if($_Math===JS::$undefined||$_Math===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1031=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,48,\'<image>/05_string.js\');$_TypeError=&$x1031[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1031;$x1032=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x1033=$x1032($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1033->class)&&$x1033->class===\'Error\'&&!isset($x1033->properties[\'file\'])&&!isset($x1033->properties[\'line\'])&&!isset($x1033->properties[\'column\'])){$x1033->properties[\'file\']=\'<image>/05_string.js\';$x1033->properties[\'line\']=305;$x1033->properties[\'column\']=48;$x1033->attributes[\'file\']=$x1033->attributes[\'line\']=$x1033->attributes[\'column\']=0;}throw new JSException($x1033,305,48,\'<image>/05_string.js\');}$x1030=JS::toObject($_Math,$global);unset($x1034,$W1034,$S1034,$U1034);$x1035=_465e5538fcb402e27559db40bec8addd_4($global,$scope,$x1030,JS::toString(\'max\',$global),305,48,\'<image>/05_string.js\');$x1034=&$x1035[0];list(,$W1034,$S1034,$U1034)=$x1035;if(!(is_object($x1034)&&isset($x1034->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x1038=_465e5538fcb402e27559db40bec8addd_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),305,48,\'<image>/05_string.js\');$_TypeError=&$x1038[0];list(,$WTypeError,$STypeError,$UTypeError)=$x1038;$x1039=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x1040=$x1039($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x1040->class)&&$x1040->class===\'Error\'&&!isset($x1040->properties[\'file\'])&&!isset($x1040->properties[\'line\'])&&!isset($x1040->properties[\'column\'])){$x1040->properties[\'file\']=\'<image>/05_string.js\';$x1040->properties[\'line\']=305;$x1040->properties[\'column\']=48;$x1040->attributes[\'file\']=$x1040->attributes[\'line\']=$x1040->attributes[\'column\']=0;}throw new JSException($x1040,305,48,\'<image>/05_string.js\');}$x1036=$x1034->call;$global->trace[++$global->trace_sp]=array(\'<image>/05_string.js\',305,48);$x1037=$x1036($global,$x1030,$x1034,array($_start,$_end),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$scope->properties[\'to\']=JS::$undefined;$_to=&$scope->properties[\'to\'];$Uto=FALSE;$_to=$x1037;return(string)substr($leThis->value,$_from,$_to-$_from);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1055 =& $scope->properties['arguments'];
$x1055->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1055->properties[$i] = $args[$i];
$x1055->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['start'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_start =& $scope->properties['start'];
$Ustart = FALSE;
$scope->properties['length'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_length =& $scope->properties['length'];
$Ulength = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x1056 = (((gettype($_length) === gettype(JS::$undefined) && $_length === JS::$undefined))|| (((is_float($_length) || is_int($_length)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_length == JS::$undefined));
if (JS::toBoolean($x1056, $global)) {

return substr($leThis->value,$_start);;
};
return (string) substr($leThis->value,$_start,$_length);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1055=&$scope->properties[\'arguments\'];$x1055->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1055->properties[$i]=$args[$i];$x1055->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'start\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_start=&$scope->properties[\'start\'];$Ustart=FALSE;$scope->properties[\'length\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_length=&$scope->properties[\'length\'];$Ulength=FALSE;$global->scope[++$global->scope_sp]=$scope;$x1056=(((gettype($_length)===gettype(JS::$undefined)&&$_length===JS::$undefined))||(((is_float($_length)||is_int($_length))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_length==JS::$undefined));if(JS::toBoolean($x1056,$global)){return substr($leThis->value,$_start);}return(string)substr($leThis->value,$_start,$_length);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_21($global, $leThis, $fn, $args, $constructor = FALSE) {

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
return strtolower($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1071=&$scope->properties[\'arguments\'];$x1071->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1071->properties[$i]=$args[$i];$x1071->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtolower($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1102 =& $scope->properties['arguments'];
$x1102->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1102->properties[$i] = $args[$i];
$x1102->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return strtoupper($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1102=&$scope->properties[\'arguments\'];$x1102->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1102->properties[$i]=$args[$i];$x1102->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return strtoupper($leThis->value);return JS::$undefined;}', "\n";
function _465e5538fcb402e27559db40bec8addd_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x1133 =& $scope->properties['arguments'];
$x1133->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x1133->properties[$i] = $args[$i];
$x1133->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
return trim($leThis->value);
;
return JS::$undefined;
}
echo 'function _465e5538fcb402e27559db40bec8addd_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1133=&$scope->properties[\'arguments\'];$x1133->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1133->properties[$i]=$args[$i];$x1133->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;return trim($leThis->value);return JS::$undefined;}', "\n";
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
if (isset($_String->class) && $_String->class === 'Array') {  if (isset($_String->properties['length']) && $_String->properties['length'] !== JS::$undefined) { $x43 = $_String->properties['length']; }  else { $x43 = 0; } }
if (isset($S37)) {
$x44 = $S37->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 16, 21);
$x45 = $x44($global, $_String, $S37, array($x32), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x42 = $x45;
} else {
if (!$U37) {$x42 = $x32;if ($W37) { $x37 = $x32; }  }
else { $x42 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array') {if (is_int('fromCharCode') && 'fromCharCode' >= $_String->properties['length']) { $_String->properties['length'] = 'fromCharCode' + 1; }else if ($x33 === 'length' && is_int($x32) && $x43 > $x32) {  for ($i = $x32; $i < $x43; ++$i) {  unset($_String->properties[$i], $_String->attributes[$i]); }}};
$x46 = clone JS::$objectTemplate;
$x47 = JS::toString('prototype', $global);
if ($_String === JS::$undefined || $_String === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x48 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 27, 18, '<image>/05_string.js');
$_TypeError =& $x48[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x48;
$x49 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x50 = $x49($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x50->class) && $x50->class === 'Error' && !isset($x50->properties['file']) && !isset($x50->properties['line']) && !isset($x50->properties['column'])) {$x50->properties['file'] = '<image>/05_string.js';$x50->properties['line'] = 27;$x50->properties['column'] = 18;$x50->attributes['file'] = $x50->attributes['line'] = $x50->attributes['column'] = 0; }
throw new JSException($x50, 27, 18, '<image>/05_string.js');
}
$_String = JS::toObject($_String, $global);
unset($x51, $W51, $S51, $U51);
$x52 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $_String, JS::toString($x47, $global), 27, 18, '<image>/05_string.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
if ($U51 && (!isset($_String->extensible) || $_String->extensible)) {$_String->properties[$x47] = $x51; $x51 =& $_String->properties[$x47]; $_String->attributes[$x47] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U51 = FALSE; $W51 = TRUE; }
if (isset($_String->class) && $_String->class === 'Array') {  if (isset($_String->properties['length']) && $_String->properties['length'] !== JS::$undefined) { $x54 = $_String->properties['length']; }  else { $x54 = 0; } }
if (isset($S51)) {
$x55 = $S51->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 27, 18);
$x56 = $x55($global, $_String, $S51, array($x46), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x53 = $x56;
} else {
if (!$U51) {$x53 = $x46;if ($W51) { $x51 = $x46; }  }
else { $x53 = JS::$undefined; }
}
if (isset($_String->class) && $_String->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_String->properties['length']) { $_String->properties['length'] = 'prototype' + 1; }else if ($x47 === 'length' && is_int($x46) && $x54 > $x46) {  for ($i = $x46; $i < $x54; ++$i) {  unset($_String->properties[$i], $_String->attributes[$i]); }}};
unset($_Object, $WObject, $SObject, $UObject);
$x57 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('Object', $global), 28, 51, '<image>/05_string.js');
$_Object =& $x57[0]; list(,$WObject,$SObject,$UObject) = $x57;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x58 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 28, 51, '<image>/05_string.js');
$_ReferenceError =& $x58[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x58;
$x59 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 28, 51);
$x60 = $x59($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error' && !isset($x60->properties['file']) && !isset($x60->properties['line']) && !isset($x60->properties['column'])) {$x60->properties['file'] = '<image>/05_string.js';$x60->properties['line'] = 28;$x60->properties['column'] = 51;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 28, 51, '<image>/05_string.js');
}
$_String->properties['prototype']->prototype =$_Object->properties['prototype'];
$_String->properties['prototype']->class = 'String';
$_String->properties['prototype']->extensible = TRUE;
unset($x61, $W61, $S61, $U61);
$x62 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 31, 7, '<image>/05_string.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
$x63 = JS::toString('constructor', $global);
if ($x61 === JS::$undefined || $x61 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x64 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 31, 30, '<image>/05_string.js');
$_TypeError =& $x64[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x64;
$x65 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x66 = $x65($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x66->class) && $x66->class === 'Error' && !isset($x66->properties['file']) && !isset($x66->properties['line']) && !isset($x66->properties['column'])) {$x66->properties['file'] = '<image>/05_string.js';$x66->properties['line'] = 31;$x66->properties['column'] = 30;$x66->attributes['file'] = $x66->attributes['line'] = $x66->attributes['column'] = 0; }
throw new JSException($x66, 31, 30, '<image>/05_string.js');
}
$x61 = JS::toObject($x61, $global);
unset($x67, $W67, $S67, $U67);
$x68 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x61, JS::toString($x63, $global), 31, 30, '<image>/05_string.js');
$x67 =& $x68[0]; list(,$W67,$S67,$U67) = $x68;
if ($U67 && (!isset($x61->extensible) || $x61->extensible)) {$x61->properties[$x63] = $x67; $x67 =& $x61->properties[$x63]; $x61->attributes[$x63] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U67 = FALSE; $W67 = TRUE; }
if (isset($x61->class) && $x61->class === 'Array') {  if (isset($x61->properties['length']) && $x61->properties['length'] !== JS::$undefined) { $x70 = $x61->properties['length']; }  else { $x70 = 0; } }
if (isset($S67)) {
$x71 = $S67->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 31, 30);
$x72 = $x71($global, $x61, $S67, array($_String), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x69 = $x72;
} else {
if (!$U67) {$x69 = $_String;if ($W67) { $x67 = $_String; }  }
else { $x69 = JS::$undefined; }
}
if (isset($x61->class) && $x61->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x61->properties['length']) { $x61->properties['length'] = 'constructor' + 1; }else if ($x63 === 'length' && is_int($_String) && $x70 > $_String) {  for ($i = $_String; $i < $x70; ++$i) {  unset($x61->properties[$i], $x61->attributes[$i]); }}};
$x87 = clone JS::$functionTemplate; $x87->call = '_465e5538fcb402e27559db40bec8addd_6'; $x87->parameters = array (
); $x87->scope = $scope; $x87->properties['prototype'] = clone JS::$objectTemplate; $x87->attributes['prototype'] = JS::WRITABLE; $x87->properties['prototype']->properties['constructor'] = $x87; $x87->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x87->properties['length'] = 0; $x87->attributes['length'] = 0;
unset($x88, $W88, $S88, $U88);
$x89 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 33, 7, '<image>/05_string.js');
$x88 =& $x89[0]; list(,$W88,$S88,$U88) = $x89;
$x90 = JS::toString('toString', $global);
if ($x88 === JS::$undefined || $x88 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 33, 27, '<image>/05_string.js');
$_TypeError =& $x91[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x91;
$x92 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x93 = $x92($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/05_string.js';$x93->properties['line'] = 33;$x93->properties['column'] = 27;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 33, 27, '<image>/05_string.js');
}
$x88 = JS::toObject($x88, $global);
unset($x94, $W94, $S94, $U94);
$x95 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x88, JS::toString($x90, $global), 33, 27, '<image>/05_string.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if ($U94 && (!isset($x88->extensible) || $x88->extensible)) {$x88->properties[$x90] = $x94; $x94 =& $x88->properties[$x90]; $x88->attributes[$x90] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U94 = FALSE; $W94 = TRUE; }
if (isset($x88->class) && $x88->class === 'Array') {  if (isset($x88->properties['length']) && $x88->properties['length'] !== JS::$undefined) { $x97 = $x88->properties['length']; }  else { $x97 = 0; } }
if (isset($S94)) {
$x98 = $S94->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 33, 27);
$x99 = $x98($global, $x88, $S94, array($x87), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x96 = $x99;
} else {
if (!$U94) {$x96 = $x87;if ($W94) { $x94 = $x87; }  }
else { $x96 = JS::$undefined; }
}
if (isset($x88->class) && $x88->class === 'Array') {if (is_int('toString') && 'toString' >= $x88->properties['length']) { $x88->properties['length'] = 'toString' + 1; }else if ($x90 === 'length' && is_int($x87) && $x97 > $x87) {  for ($i = $x87; $i < $x97; ++$i) {  unset($x88->properties[$i], $x88->attributes[$i]); }}};
unset($x100, $W100, $S100, $U100);
$x101 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 34, '<image>/05_string.js');
$x100 =& $x101[0]; list(,$W100,$S100,$U100) = $x101;
unset($x102, $W102, $S102, $U102);
$x103 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x100, JS::toString('toString', $global), 41, 44, '<image>/05_string.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
unset($x104, $W104, $S104, $U104);
$x105 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 41, 7, '<image>/05_string.js');
$x104 =& $x105[0]; list(,$W104,$S104,$U104) = $x105;
$x106 = JS::toString('valueOf', $global);
if ($x104 === JS::$undefined || $x104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x107 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 41, 26, '<image>/05_string.js');
$_TypeError =& $x107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x107;
$x108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x109 = $x108($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x109->class) && $x109->class === 'Error' && !isset($x109->properties['file']) && !isset($x109->properties['line']) && !isset($x109->properties['column'])) {$x109->properties['file'] = '<image>/05_string.js';$x109->properties['line'] = 41;$x109->properties['column'] = 26;$x109->attributes['file'] = $x109->attributes['line'] = $x109->attributes['column'] = 0; }
throw new JSException($x109, 41, 26, '<image>/05_string.js');
}
$x104 = JS::toObject($x104, $global);
unset($x110, $W110, $S110, $U110);
$x111 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x104, JS::toString($x106, $global), 41, 26, '<image>/05_string.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
if ($U110 && (!isset($x104->extensible) || $x104->extensible)) {$x104->properties[$x106] = $x110; $x110 =& $x104->properties[$x106]; $x104->attributes[$x106] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U110 = FALSE; $W110 = TRUE; }
if (isset($x104->class) && $x104->class === 'Array') {  if (isset($x104->properties['length']) && $x104->properties['length'] !== JS::$undefined) { $x113 = $x104->properties['length']; }  else { $x113 = 0; } }
if (isset($S110)) {
$x114 = $S110->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 41, 26);
$x115 = $x114($global, $x104, $S110, array($x102), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x112 = $x115;
} else {
if (!$U110) {$x112 = $x102;if ($W110) { $x110 = $x102; }  }
else { $x112 = JS::$undefined; }
}
if (isset($x104->class) && $x104->class === 'Array') {if (is_int('valueOf') && 'valueOf' >= $x104->properties['length']) { $x104->properties['length'] = 'valueOf' + 1; }else if ($x106 === 'length' && is_int($x102) && $x113 > $x102) {  for ($i = $x102; $i < $x113; ++$i) {  unset($x104->properties[$i], $x104->attributes[$i]); }}};
$x132 = clone JS::$functionTemplate; $x132->call = '_465e5538fcb402e27559db40bec8addd_7'; $x132->parameters = array (
  0 => 'pos',
); $x132->scope = $scope; $x132->properties['prototype'] = clone JS::$objectTemplate; $x132->attributes['prototype'] = JS::WRITABLE; $x132->properties['prototype']->properties['constructor'] = $x132; $x132->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x132->properties['length'] = 1; $x132->attributes['length'] = 0;
unset($x133, $W133, $S133, $U133);
$x134 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 43, 7, '<image>/05_string.js');
$x133 =& $x134[0]; list(,$W133,$S133,$U133) = $x134;
$x135 = JS::toString('charAt', $global);
if ($x133 === JS::$undefined || $x133 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x136 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 25, '<image>/05_string.js');
$_TypeError =& $x136[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x136;
$x137 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x138 = $x137($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x138->class) && $x138->class === 'Error' && !isset($x138->properties['file']) && !isset($x138->properties['line']) && !isset($x138->properties['column'])) {$x138->properties['file'] = '<image>/05_string.js';$x138->properties['line'] = 43;$x138->properties['column'] = 25;$x138->attributes['file'] = $x138->attributes['line'] = $x138->attributes['column'] = 0; }
throw new JSException($x138, 43, 25, '<image>/05_string.js');
}
$x133 = JS::toObject($x133, $global);
unset($x139, $W139, $S139, $U139);
$x140 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x133, JS::toString($x135, $global), 43, 25, '<image>/05_string.js');
$x139 =& $x140[0]; list(,$W139,$S139,$U139) = $x140;
if ($U139 && (!isset($x133->extensible) || $x133->extensible)) {$x133->properties[$x135] = $x139; $x139 =& $x133->properties[$x135]; $x133->attributes[$x135] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U139 = FALSE; $W139 = TRUE; }
if (isset($x133->class) && $x133->class === 'Array') {  if (isset($x133->properties['length']) && $x133->properties['length'] !== JS::$undefined) { $x142 = $x133->properties['length']; }  else { $x142 = 0; } }
if (isset($S139)) {
$x143 = $S139->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 43, 25);
$x144 = $x143($global, $x133, $S139, array($x132), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x141 = $x144;
} else {
if (!$U139) {$x141 = $x132;if ($W139) { $x139 = $x132; }  }
else { $x141 = JS::$undefined; }
}
if (isset($x133->class) && $x133->class === 'Array') {if (is_int('charAt') && 'charAt' >= $x133->properties['length']) { $x133->properties['length'] = 'charAt' + 1; }else if ($x135 === 'length' && is_int($x132) && $x142 > $x132) {  for ($i = $x132; $i < $x142; ++$i) {  unset($x133->properties[$i], $x133->attributes[$i]); }}};
$x176 = clone JS::$functionTemplate; $x176->call = '_465e5538fcb402e27559db40bec8addd_8'; $x176->parameters = array (
  0 => 'pos',
); $x176->scope = $scope; $x176->properties['prototype'] = clone JS::$objectTemplate; $x176->attributes['prototype'] = JS::WRITABLE; $x176->properties['prototype']->properties['constructor'] = $x176; $x176->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x176->properties['length'] = 1; $x176->attributes['length'] = 0;
unset($x177, $W177, $S177, $U177);
$x178 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 53, 7, '<image>/05_string.js');
$x177 =& $x178[0]; list(,$W177,$S177,$U177) = $x178;
$x179 = JS::toString('charCodeAt', $global);
if ($x177 === JS::$undefined || $x177 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x180 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 53, 29, '<image>/05_string.js');
$_TypeError =& $x180[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x180;
$x181 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x182 = $x181($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x182->class) && $x182->class === 'Error' && !isset($x182->properties['file']) && !isset($x182->properties['line']) && !isset($x182->properties['column'])) {$x182->properties['file'] = '<image>/05_string.js';$x182->properties['line'] = 53;$x182->properties['column'] = 29;$x182->attributes['file'] = $x182->attributes['line'] = $x182->attributes['column'] = 0; }
throw new JSException($x182, 53, 29, '<image>/05_string.js');
}
$x177 = JS::toObject($x177, $global);
unset($x183, $W183, $S183, $U183);
$x184 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x177, JS::toString($x179, $global), 53, 29, '<image>/05_string.js');
$x183 =& $x184[0]; list(,$W183,$S183,$U183) = $x184;
if ($U183 && (!isset($x177->extensible) || $x177->extensible)) {$x177->properties[$x179] = $x183; $x183 =& $x177->properties[$x179]; $x177->attributes[$x179] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U183 = FALSE; $W183 = TRUE; }
if (isset($x177->class) && $x177->class === 'Array') {  if (isset($x177->properties['length']) && $x177->properties['length'] !== JS::$undefined) { $x186 = $x177->properties['length']; }  else { $x186 = 0; } }
if (isset($S183)) {
$x187 = $S183->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 53, 29);
$x188 = $x187($global, $x177, $S183, array($x176), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x185 = $x188;
} else {
if (!$U183) {$x185 = $x176;if ($W183) { $x183 = $x176; }  }
else { $x185 = JS::$undefined; }
}
if (isset($x177->class) && $x177->class === 'Array') {if (is_int('charCodeAt') && 'charCodeAt' >= $x177->properties['length']) { $x177->properties['length'] = 'charCodeAt' + 1; }else if ($x179 === 'length' && is_int($x176) && $x186 > $x176) {  for ($i = $x176; $i < $x186; ++$i) {  unset($x177->properties[$i], $x177->attributes[$i]); }}};
$x208 = clone JS::$functionTemplate; $x208->call = '_465e5538fcb402e27559db40bec8addd_9'; $x208->parameters = array (
  0 => 'string',
); $x208->scope = $scope; $x208->properties['prototype'] = clone JS::$objectTemplate; $x208->attributes['prototype'] = JS::WRITABLE; $x208->properties['prototype']->properties['constructor'] = $x208; $x208->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x208->properties['length'] = 1; $x208->attributes['length'] = 0;
unset($x209, $W209, $S209, $U209);
$x210 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 65, 7, '<image>/05_string.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
$x211 = JS::toString('concat', $global);
if ($x209 === JS::$undefined || $x209 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x212 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 65, 25, '<image>/05_string.js');
$_TypeError =& $x212[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x212;
$x213 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x214 = $x213($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x214->class) && $x214->class === 'Error' && !isset($x214->properties['file']) && !isset($x214->properties['line']) && !isset($x214->properties['column'])) {$x214->properties['file'] = '<image>/05_string.js';$x214->properties['line'] = 65;$x214->properties['column'] = 25;$x214->attributes['file'] = $x214->attributes['line'] = $x214->attributes['column'] = 0; }
throw new JSException($x214, 65, 25, '<image>/05_string.js');
}
$x209 = JS::toObject($x209, $global);
unset($x215, $W215, $S215, $U215);
$x216 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x209, JS::toString($x211, $global), 65, 25, '<image>/05_string.js');
$x215 =& $x216[0]; list(,$W215,$S215,$U215) = $x216;
if ($U215 && (!isset($x209->extensible) || $x209->extensible)) {$x209->properties[$x211] = $x215; $x215 =& $x209->properties[$x211]; $x209->attributes[$x211] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U215 = FALSE; $W215 = TRUE; }
if (isset($x209->class) && $x209->class === 'Array') {  if (isset($x209->properties['length']) && $x209->properties['length'] !== JS::$undefined) { $x218 = $x209->properties['length']; }  else { $x218 = 0; } }
if (isset($S215)) {
$x219 = $S215->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 65, 25);
$x220 = $x219($global, $x209, $S215, array($x208), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x217 = $x220;
} else {
if (!$U215) {$x217 = $x208;if ($W215) { $x215 = $x208; }  }
else { $x217 = JS::$undefined; }
}
if (isset($x209->class) && $x209->class === 'Array') {if (is_int('concat') && 'concat' >= $x209->properties['length']) { $x209->properties['length'] = 'concat' + 1; }else if ($x211 === 'length' && is_int($x208) && $x218 > $x208) {  for ($i = $x208; $i < $x218; ++$i) {  unset($x209->properties[$i], $x209->attributes[$i]); }}};
$x252 = clone JS::$functionTemplate; $x252->call = '_465e5538fcb402e27559db40bec8addd_10'; $x252->parameters = array (
  0 => 'search',
  1 => 'position',
); $x252->scope = $scope; $x252->properties['prototype'] = clone JS::$objectTemplate; $x252->attributes['prototype'] = JS::WRITABLE; $x252->properties['prototype']->properties['constructor'] = $x252; $x252->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x252->properties['length'] = 2; $x252->attributes['length'] = 0;
unset($x253, $W253, $S253, $U253);
$x254 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 75, 7, '<image>/05_string.js');
$x253 =& $x254[0]; list(,$W253,$S253,$U253) = $x254;
$x255 = JS::toString('indexOf', $global);
if ($x253 === JS::$undefined || $x253 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x256 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 75, 26, '<image>/05_string.js');
$_TypeError =& $x256[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x256;
$x257 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x258 = $x257($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x258->class) && $x258->class === 'Error' && !isset($x258->properties['file']) && !isset($x258->properties['line']) && !isset($x258->properties['column'])) {$x258->properties['file'] = '<image>/05_string.js';$x258->properties['line'] = 75;$x258->properties['column'] = 26;$x258->attributes['file'] = $x258->attributes['line'] = $x258->attributes['column'] = 0; }
throw new JSException($x258, 75, 26, '<image>/05_string.js');
}
$x253 = JS::toObject($x253, $global);
unset($x259, $W259, $S259, $U259);
$x260 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x253, JS::toString($x255, $global), 75, 26, '<image>/05_string.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
if ($U259 && (!isset($x253->extensible) || $x253->extensible)) {$x253->properties[$x255] = $x259; $x259 =& $x253->properties[$x255]; $x253->attributes[$x255] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U259 = FALSE; $W259 = TRUE; }
if (isset($x253->class) && $x253->class === 'Array') {  if (isset($x253->properties['length']) && $x253->properties['length'] !== JS::$undefined) { $x262 = $x253->properties['length']; }  else { $x262 = 0; } }
if (isset($S259)) {
$x263 = $S259->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 75, 26);
$x264 = $x263($global, $x253, $S259, array($x252), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x261 = $x264;
} else {
if (!$U259) {$x261 = $x252;if ($W259) { $x259 = $x252; }  }
else { $x261 = JS::$undefined; }
}
if (isset($x253->class) && $x253->class === 'Array') {if (is_int('indexOf') && 'indexOf' >= $x253->properties['length']) { $x253->properties['length'] = 'indexOf' + 1; }else if ($x255 === 'length' && is_int($x252) && $x262 > $x252) {  for ($i = $x252; $i < $x262; ++$i) {  unset($x253->properties[$i], $x253->attributes[$i]); }}};
$x296 = clone JS::$functionTemplate; $x296->call = '_465e5538fcb402e27559db40bec8addd_11'; $x296->parameters = array (
  0 => 'search',
  1 => 'position',
); $x296->scope = $scope; $x296->properties['prototype'] = clone JS::$objectTemplate; $x296->attributes['prototype'] = JS::WRITABLE; $x296->properties['prototype']->properties['constructor'] = $x296; $x296->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x296->properties['length'] = 2; $x296->attributes['length'] = 0;
unset($x297, $W297, $S297, $U297);
$x298 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 90, 7, '<image>/05_string.js');
$x297 =& $x298[0]; list(,$W297,$S297,$U297) = $x298;
$x299 = JS::toString('lastIndexOf', $global);
if ($x297 === JS::$undefined || $x297 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x300 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 90, 30, '<image>/05_string.js');
$_TypeError =& $x300[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x300;
$x301 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x302 = $x301($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x302->class) && $x302->class === 'Error' && !isset($x302->properties['file']) && !isset($x302->properties['line']) && !isset($x302->properties['column'])) {$x302->properties['file'] = '<image>/05_string.js';$x302->properties['line'] = 90;$x302->properties['column'] = 30;$x302->attributes['file'] = $x302->attributes['line'] = $x302->attributes['column'] = 0; }
throw new JSException($x302, 90, 30, '<image>/05_string.js');
}
$x297 = JS::toObject($x297, $global);
unset($x303, $W303, $S303, $U303);
$x304 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x297, JS::toString($x299, $global), 90, 30, '<image>/05_string.js');
$x303 =& $x304[0]; list(,$W303,$S303,$U303) = $x304;
if ($U303 && (!isset($x297->extensible) || $x297->extensible)) {$x297->properties[$x299] = $x303; $x303 =& $x297->properties[$x299]; $x297->attributes[$x299] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U303 = FALSE; $W303 = TRUE; }
if (isset($x297->class) && $x297->class === 'Array') {  if (isset($x297->properties['length']) && $x297->properties['length'] !== JS::$undefined) { $x306 = $x297->properties['length']; }  else { $x306 = 0; } }
if (isset($S303)) {
$x307 = $S303->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 90, 30);
$x308 = $x307($global, $x297, $S303, array($x296), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x305 = $x308;
} else {
if (!$U303) {$x305 = $x296;if ($W303) { $x303 = $x296; }  }
else { $x305 = JS::$undefined; }
}
if (isset($x297->class) && $x297->class === 'Array') {if (is_int('lastIndexOf') && 'lastIndexOf' >= $x297->properties['length']) { $x297->properties['length'] = 'lastIndexOf' + 1; }else if ($x299 === 'length' && is_int($x296) && $x306 > $x296) {  for ($i = $x296; $i < $x306; ++$i) {  unset($x297->properties[$i], $x297->attributes[$i]); }}};
$x311 = clone JS::$functionTemplate; $x311->call = '_465e5538fcb402e27559db40bec8addd_12'; $x311->parameters = array (
  0 => 'that',
); $x311->scope = $scope; $x311->properties['prototype'] = clone JS::$objectTemplate; $x311->attributes['prototype'] = JS::WRITABLE; $x311->properties['prototype']->properties['constructor'] = $x311; $x311->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x311->properties['length'] = 1; $x311->attributes['length'] = 0;
unset($x312, $W312, $S312, $U312);
$x313 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 105, 7, '<image>/05_string.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
$x314 = JS::toString('localeCompare', $global);
if ($x312 === JS::$undefined || $x312 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x315 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 105, 32, '<image>/05_string.js');
$_TypeError =& $x315[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x315;
$x316 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x317 = $x316($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x317->class) && $x317->class === 'Error' && !isset($x317->properties['file']) && !isset($x317->properties['line']) && !isset($x317->properties['column'])) {$x317->properties['file'] = '<image>/05_string.js';$x317->properties['line'] = 105;$x317->properties['column'] = 32;$x317->attributes['file'] = $x317->attributes['line'] = $x317->attributes['column'] = 0; }
throw new JSException($x317, 105, 32, '<image>/05_string.js');
}
$x312 = JS::toObject($x312, $global);
unset($x318, $W318, $S318, $U318);
$x319 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x312, JS::toString($x314, $global), 105, 32, '<image>/05_string.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
if ($U318 && (!isset($x312->extensible) || $x312->extensible)) {$x312->properties[$x314] = $x318; $x318 =& $x312->properties[$x314]; $x312->attributes[$x314] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U318 = FALSE; $W318 = TRUE; }
if (isset($x312->class) && $x312->class === 'Array') {  if (isset($x312->properties['length']) && $x312->properties['length'] !== JS::$undefined) { $x321 = $x312->properties['length']; }  else { $x321 = 0; } }
if (isset($S318)) {
$x322 = $S318->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 105, 32);
$x323 = $x322($global, $x312, $S318, array($x311), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x320 = $x323;
} else {
if (!$U318) {$x320 = $x311;if ($W318) { $x318 = $x311; }  }
else { $x320 = JS::$undefined; }
}
if (isset($x312->class) && $x312->class === 'Array') {if (is_int('localeCompare') && 'localeCompare' >= $x312->properties['length']) { $x312->properties['length'] = 'localeCompare' + 1; }else if ($x314 === 'length' && is_int($x311) && $x321 > $x311) {  for ($i = $x311; $i < $x321; ++$i) {  unset($x312->properties[$i], $x312->attributes[$i]); }}};
$x412 = clone JS::$functionTemplate; $x412->call = '_465e5538fcb402e27559db40bec8addd_13'; $x412->parameters = array (
  0 => 'regexp',
); $x412->scope = $scope; $x412->properties['prototype'] = clone JS::$objectTemplate; $x412->attributes['prototype'] = JS::WRITABLE; $x412->properties['prototype']->properties['constructor'] = $x412; $x412->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x412->properties['length'] = 1; $x412->attributes['length'] = 0;
unset($x413, $W413, $S413, $U413);
$x414 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 109, 7, '<image>/05_string.js');
$x413 =& $x414[0]; list(,$W413,$S413,$U413) = $x414;
$x415 = JS::toString('match', $global);
if ($x413 === JS::$undefined || $x413 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x416 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 109, 24, '<image>/05_string.js');
$_TypeError =& $x416[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x416;
$x417 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x418 = $x417($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x418->class) && $x418->class === 'Error' && !isset($x418->properties['file']) && !isset($x418->properties['line']) && !isset($x418->properties['column'])) {$x418->properties['file'] = '<image>/05_string.js';$x418->properties['line'] = 109;$x418->properties['column'] = 24;$x418->attributes['file'] = $x418->attributes['line'] = $x418->attributes['column'] = 0; }
throw new JSException($x418, 109, 24, '<image>/05_string.js');
}
$x413 = JS::toObject($x413, $global);
unset($x419, $W419, $S419, $U419);
$x420 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x413, JS::toString($x415, $global), 109, 24, '<image>/05_string.js');
$x419 =& $x420[0]; list(,$W419,$S419,$U419) = $x420;
if ($U419 && (!isset($x413->extensible) || $x413->extensible)) {$x413->properties[$x415] = $x419; $x419 =& $x413->properties[$x415]; $x413->attributes[$x415] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U419 = FALSE; $W419 = TRUE; }
if (isset($x413->class) && $x413->class === 'Array') {  if (isset($x413->properties['length']) && $x413->properties['length'] !== JS::$undefined) { $x422 = $x413->properties['length']; }  else { $x422 = 0; } }
if (isset($S419)) {
$x423 = $S419->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 109, 24);
$x424 = $x423($global, $x413, $S419, array($x412), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x421 = $x424;
} else {
if (!$U419) {$x421 = $x412;if ($W419) { $x419 = $x412; }  }
else { $x421 = JS::$undefined; }
}
if (isset($x413->class) && $x413->class === 'Array') {if (is_int('match') && 'match' >= $x413->properties['length']) { $x413->properties['length'] = 'match' + 1; }else if ($x415 === 'length' && is_int($x412) && $x422 > $x412) {  for ($i = $x412; $i < $x422; ++$i) {  unset($x413->properties[$i], $x413->attributes[$i]); }}};
$x595 = clone JS::$functionTemplate; $x595->call = '_465e5538fcb402e27559db40bec8addd_14'; $x595->parameters = array (
  0 => 'search',
  1 => 'replace',
); $x595->scope = $scope; $x595->properties['prototype'] = clone JS::$objectTemplate; $x595->attributes['prototype'] = JS::WRITABLE; $x595->properties['prototype']->properties['constructor'] = $x595; $x595->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x595->properties['length'] = 2; $x595->attributes['length'] = 0;
unset($x596, $W596, $S596, $U596);
$x597 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 144, 7, '<image>/05_string.js');
$x596 =& $x597[0]; list(,$W596,$S596,$U596) = $x597;
$x598 = JS::toString('replace', $global);
if ($x596 === JS::$undefined || $x596 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x599 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 144, 26, '<image>/05_string.js');
$_TypeError =& $x599[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x599;
$x600 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x601 = $x600($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x601->class) && $x601->class === 'Error' && !isset($x601->properties['file']) && !isset($x601->properties['line']) && !isset($x601->properties['column'])) {$x601->properties['file'] = '<image>/05_string.js';$x601->properties['line'] = 144;$x601->properties['column'] = 26;$x601->attributes['file'] = $x601->attributes['line'] = $x601->attributes['column'] = 0; }
throw new JSException($x601, 144, 26, '<image>/05_string.js');
}
$x596 = JS::toObject($x596, $global);
unset($x602, $W602, $S602, $U602);
$x603 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x596, JS::toString($x598, $global), 144, 26, '<image>/05_string.js');
$x602 =& $x603[0]; list(,$W602,$S602,$U602) = $x603;
if ($U602 && (!isset($x596->extensible) || $x596->extensible)) {$x596->properties[$x598] = $x602; $x602 =& $x596->properties[$x598]; $x596->attributes[$x598] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U602 = FALSE; $W602 = TRUE; }
if (isset($x596->class) && $x596->class === 'Array') {  if (isset($x596->properties['length']) && $x596->properties['length'] !== JS::$undefined) { $x605 = $x596->properties['length']; }  else { $x605 = 0; } }
if (isset($S602)) {
$x606 = $S602->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 144, 26);
$x607 = $x606($global, $x596, $S602, array($x595), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x604 = $x607;
} else {
if (!$U602) {$x604 = $x595;if ($W602) { $x602 = $x595; }  }
else { $x604 = JS::$undefined; }
}
if (isset($x596->class) && $x596->class === 'Array') {if (is_int('replace') && 'replace' >= $x596->properties['length']) { $x596->properties['length'] = 'replace' + 1; }else if ($x598 === 'length' && is_int($x595) && $x605 > $x595) {  for ($i = $x595; $i < $x605; ++$i) {  unset($x596->properties[$i], $x596->attributes[$i]); }}};
$x648 = clone JS::$functionTemplate; $x648->call = '_465e5538fcb402e27559db40bec8addd_16'; $x648->parameters = array (
  0 => 'search',
); $x648->scope = $scope; $x648->properties['prototype'] = clone JS::$objectTemplate; $x648->attributes['prototype'] = JS::WRITABLE; $x648->properties['prototype']->properties['constructor'] = $x648; $x648->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x648->properties['length'] = 1; $x648->attributes['length'] = 0;
unset($x649, $W649, $S649, $U649);
$x650 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 189, 7, '<image>/05_string.js');
$x649 =& $x650[0]; list(,$W649,$S649,$U649) = $x650;
$x651 = JS::toString('search', $global);
if ($x649 === JS::$undefined || $x649 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x652 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 189, 25, '<image>/05_string.js');
$_TypeError =& $x652[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x652;
$x653 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x654 = $x653($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x654->class) && $x654->class === 'Error' && !isset($x654->properties['file']) && !isset($x654->properties['line']) && !isset($x654->properties['column'])) {$x654->properties['file'] = '<image>/05_string.js';$x654->properties['line'] = 189;$x654->properties['column'] = 25;$x654->attributes['file'] = $x654->attributes['line'] = $x654->attributes['column'] = 0; }
throw new JSException($x654, 189, 25, '<image>/05_string.js');
}
$x649 = JS::toObject($x649, $global);
unset($x655, $W655, $S655, $U655);
$x656 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x649, JS::toString($x651, $global), 189, 25, '<image>/05_string.js');
$x655 =& $x656[0]; list(,$W655,$S655,$U655) = $x656;
if ($U655 && (!isset($x649->extensible) || $x649->extensible)) {$x649->properties[$x651] = $x655; $x655 =& $x649->properties[$x651]; $x649->attributes[$x651] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U655 = FALSE; $W655 = TRUE; }
if (isset($x649->class) && $x649->class === 'Array') {  if (isset($x649->properties['length']) && $x649->properties['length'] !== JS::$undefined) { $x658 = $x649->properties['length']; }  else { $x658 = 0; } }
if (isset($S655)) {
$x659 = $S655->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 189, 25);
$x660 = $x659($global, $x649, $S655, array($x648), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x657 = $x660;
} else {
if (!$U655) {$x657 = $x648;if ($W655) { $x655 = $x648; }  }
else { $x657 = JS::$undefined; }
}
if (isset($x649->class) && $x649->class === 'Array') {if (is_int('search') && 'search' >= $x649->properties['length']) { $x649->properties['length'] = 'search' + 1; }else if ($x651 === 'length' && is_int($x648) && $x658 > $x648) {  for ($i = $x648; $i < $x658; ++$i) {  unset($x649->properties[$i], $x649->attributes[$i]); }}};
$x710 = clone JS::$functionTemplate; $x710->call = '_465e5538fcb402e27559db40bec8addd_17'; $x710->parameters = array (
  0 => 'start',
  1 => 'end',
); $x710->scope = $scope; $x710->properties['prototype'] = clone JS::$objectTemplate; $x710->attributes['prototype'] = JS::WRITABLE; $x710->properties['prototype']->properties['constructor'] = $x710; $x710->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x710->properties['length'] = 2; $x710->attributes['length'] = 0;
unset($x711, $W711, $S711, $U711);
$x712 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 206, 7, '<image>/05_string.js');
$x711 =& $x712[0]; list(,$W711,$S711,$U711) = $x712;
$x713 = JS::toString('slice', $global);
if ($x711 === JS::$undefined || $x711 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x714 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 206, 24, '<image>/05_string.js');
$_TypeError =& $x714[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x714;
$x715 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x716 = $x715($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x716->class) && $x716->class === 'Error' && !isset($x716->properties['file']) && !isset($x716->properties['line']) && !isset($x716->properties['column'])) {$x716->properties['file'] = '<image>/05_string.js';$x716->properties['line'] = 206;$x716->properties['column'] = 24;$x716->attributes['file'] = $x716->attributes['line'] = $x716->attributes['column'] = 0; }
throw new JSException($x716, 206, 24, '<image>/05_string.js');
}
$x711 = JS::toObject($x711, $global);
unset($x717, $W717, $S717, $U717);
$x718 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x711, JS::toString($x713, $global), 206, 24, '<image>/05_string.js');
$x717 =& $x718[0]; list(,$W717,$S717,$U717) = $x718;
if ($U717 && (!isset($x711->extensible) || $x711->extensible)) {$x711->properties[$x713] = $x717; $x717 =& $x711->properties[$x713]; $x711->attributes[$x713] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U717 = FALSE; $W717 = TRUE; }
if (isset($x711->class) && $x711->class === 'Array') {  if (isset($x711->properties['length']) && $x711->properties['length'] !== JS::$undefined) { $x720 = $x711->properties['length']; }  else { $x720 = 0; } }
if (isset($S717)) {
$x721 = $S717->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 206, 24);
$x722 = $x721($global, $x711, $S717, array($x710), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x719 = $x722;
} else {
if (!$U717) {$x719 = $x710;if ($W717) { $x717 = $x710; }  }
else { $x719 = JS::$undefined; }
}
if (isset($x711->class) && $x711->class === 'Array') {if (is_int('slice') && 'slice' >= $x711->properties['length']) { $x711->properties['length'] = 'slice' + 1; }else if ($x713 === 'length' && is_int($x710) && $x720 > $x710) {  for ($i = $x710; $i < $x720; ++$i) {  unset($x711->properties[$i], $x711->attributes[$i]); }}};
$x931 = clone JS::$functionTemplate; $x931->call = '_465e5538fcb402e27559db40bec8addd_18'; $x931->parameters = array (
  0 => 'separator',
  1 => 'limit',
); $x931->scope = $scope; $x931->properties['prototype'] = clone JS::$objectTemplate; $x931->attributes['prototype'] = JS::WRITABLE; $x931->properties['prototype']->properties['constructor'] = $x931; $x931->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x931->properties['length'] = 2; $x931->attributes['length'] = 0;
unset($x932, $W932, $S932, $U932);
$x933 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 228, 7, '<image>/05_string.js');
$x932 =& $x933[0]; list(,$W932,$S932,$U932) = $x933;
$x934 = JS::toString('split', $global);
if ($x932 === JS::$undefined || $x932 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x935 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 228, 24, '<image>/05_string.js');
$_TypeError =& $x935[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x935;
$x936 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x937 = $x936($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x937->class) && $x937->class === 'Error' && !isset($x937->properties['file']) && !isset($x937->properties['line']) && !isset($x937->properties['column'])) {$x937->properties['file'] = '<image>/05_string.js';$x937->properties['line'] = 228;$x937->properties['column'] = 24;$x937->attributes['file'] = $x937->attributes['line'] = $x937->attributes['column'] = 0; }
throw new JSException($x937, 228, 24, '<image>/05_string.js');
}
$x932 = JS::toObject($x932, $global);
unset($x938, $W938, $S938, $U938);
$x939 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x932, JS::toString($x934, $global), 228, 24, '<image>/05_string.js');
$x938 =& $x939[0]; list(,$W938,$S938,$U938) = $x939;
if ($U938 && (!isset($x932->extensible) || $x932->extensible)) {$x932->properties[$x934] = $x938; $x938 =& $x932->properties[$x934]; $x932->attributes[$x934] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U938 = FALSE; $W938 = TRUE; }
if (isset($x932->class) && $x932->class === 'Array') {  if (isset($x932->properties['length']) && $x932->properties['length'] !== JS::$undefined) { $x941 = $x932->properties['length']; }  else { $x941 = 0; } }
if (isset($S938)) {
$x942 = $S938->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 228, 24);
$x943 = $x942($global, $x932, $S938, array($x931), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x940 = $x943;
} else {
if (!$U938) {$x940 = $x931;if ($W938) { $x938 = $x931; }  }
else { $x940 = JS::$undefined; }
}
if (isset($x932->class) && $x932->class === 'Array') {if (is_int('split') && 'split' >= $x932->properties['length']) { $x932->properties['length'] = 'split' + 1; }else if ($x934 === 'length' && is_int($x931) && $x941 > $x931) {  for ($i = $x931; $i < $x941; ++$i) {  unset($x932->properties[$i], $x932->attributes[$i]); }}};
$x1041 = clone JS::$functionTemplate; $x1041->call = '_465e5538fcb402e27559db40bec8addd_19'; $x1041->parameters = array (
  0 => 'start',
  1 => 'end',
); $x1041->scope = $scope; $x1041->properties['prototype'] = clone JS::$objectTemplate; $x1041->attributes['prototype'] = JS::WRITABLE; $x1041->properties['prototype']->properties['constructor'] = $x1041; $x1041->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1041->properties['length'] = 2; $x1041->attributes['length'] = 0;
unset($x1042, $W1042, $S1042, $U1042);
$x1043 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 283, 7, '<image>/05_string.js');
$x1042 =& $x1043[0]; list(,$W1042,$S1042,$U1042) = $x1043;
$x1044 = JS::toString('substring', $global);
if ($x1042 === JS::$undefined || $x1042 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1045 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 283, 28, '<image>/05_string.js');
$_TypeError =& $x1045[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1045;
$x1046 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x1047 = $x1046($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1047->class) && $x1047->class === 'Error' && !isset($x1047->properties['file']) && !isset($x1047->properties['line']) && !isset($x1047->properties['column'])) {$x1047->properties['file'] = '<image>/05_string.js';$x1047->properties['line'] = 283;$x1047->properties['column'] = 28;$x1047->attributes['file'] = $x1047->attributes['line'] = $x1047->attributes['column'] = 0; }
throw new JSException($x1047, 283, 28, '<image>/05_string.js');
}
$x1042 = JS::toObject($x1042, $global);
unset($x1048, $W1048, $S1048, $U1048);
$x1049 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1042, JS::toString($x1044, $global), 283, 28, '<image>/05_string.js');
$x1048 =& $x1049[0]; list(,$W1048,$S1048,$U1048) = $x1049;
if ($U1048 && (!isset($x1042->extensible) || $x1042->extensible)) {$x1042->properties[$x1044] = $x1048; $x1048 =& $x1042->properties[$x1044]; $x1042->attributes[$x1044] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1048 = FALSE; $W1048 = TRUE; }
if (isset($x1042->class) && $x1042->class === 'Array') {  if (isset($x1042->properties['length']) && $x1042->properties['length'] !== JS::$undefined) { $x1051 = $x1042->properties['length']; }  else { $x1051 = 0; } }
if (isset($S1048)) {
$x1052 = $S1048->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 283, 28);
$x1053 = $x1052($global, $x1042, $S1048, array($x1041), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1050 = $x1053;
} else {
if (!$U1048) {$x1050 = $x1041;if ($W1048) { $x1048 = $x1041; }  }
else { $x1050 = JS::$undefined; }
}
if (isset($x1042->class) && $x1042->class === 'Array') {if (is_int('substring') && 'substring' >= $x1042->properties['length']) { $x1042->properties['length'] = 'substring' + 1; }else if ($x1044 === 'length' && is_int($x1041) && $x1051 > $x1041) {  for ($i = $x1041; $i < $x1051; ++$i) {  unset($x1042->properties[$i], $x1042->attributes[$i]); }}};
$x1057 = clone JS::$functionTemplate; $x1057->call = '_465e5538fcb402e27559db40bec8addd_20'; $x1057->parameters = array (
  0 => 'start',
  1 => 'length',
); $x1057->scope = $scope; $x1057->properties['prototype'] = clone JS::$objectTemplate; $x1057->attributes['prototype'] = JS::WRITABLE; $x1057->properties['prototype']->properties['constructor'] = $x1057; $x1057->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1057->properties['length'] = 2; $x1057->attributes['length'] = 0;
unset($x1058, $W1058, $S1058, $U1058);
$x1059 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 311, 7, '<image>/05_string.js');
$x1058 =& $x1059[0]; list(,$W1058,$S1058,$U1058) = $x1059;
$x1060 = JS::toString('substr', $global);
if ($x1058 === JS::$undefined || $x1058 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1061 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 311, 25, '<image>/05_string.js');
$_TypeError =& $x1061[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1061;
$x1062 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1063 = $x1062($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1063->class) && $x1063->class === 'Error' && !isset($x1063->properties['file']) && !isset($x1063->properties['line']) && !isset($x1063->properties['column'])) {$x1063->properties['file'] = '<image>/05_string.js';$x1063->properties['line'] = 311;$x1063->properties['column'] = 25;$x1063->attributes['file'] = $x1063->attributes['line'] = $x1063->attributes['column'] = 0; }
throw new JSException($x1063, 311, 25, '<image>/05_string.js');
}
$x1058 = JS::toObject($x1058, $global);
unset($x1064, $W1064, $S1064, $U1064);
$x1065 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1058, JS::toString($x1060, $global), 311, 25, '<image>/05_string.js');
$x1064 =& $x1065[0]; list(,$W1064,$S1064,$U1064) = $x1065;
if ($U1064 && (!isset($x1058->extensible) || $x1058->extensible)) {$x1058->properties[$x1060] = $x1064; $x1064 =& $x1058->properties[$x1060]; $x1058->attributes[$x1060] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1064 = FALSE; $W1064 = TRUE; }
if (isset($x1058->class) && $x1058->class === 'Array') {  if (isset($x1058->properties['length']) && $x1058->properties['length'] !== JS::$undefined) { $x1067 = $x1058->properties['length']; }  else { $x1067 = 0; } }
if (isset($S1064)) {
$x1068 = $S1064->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 311, 25);
$x1069 = $x1068($global, $x1058, $S1064, array($x1057), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1066 = $x1069;
} else {
if (!$U1064) {$x1066 = $x1057;if ($W1064) { $x1064 = $x1057; }  }
else { $x1066 = JS::$undefined; }
}
if (isset($x1058->class) && $x1058->class === 'Array') {if (is_int('substr') && 'substr' >= $x1058->properties['length']) { $x1058->properties['length'] = 'substr' + 1; }else if ($x1060 === 'length' && is_int($x1057) && $x1067 > $x1057) {  for ($i = $x1057; $i < $x1067; ++$i) {  unset($x1058->properties[$i], $x1058->attributes[$i]); }}};
$x1072 = clone JS::$functionTemplate; $x1072->call = '_465e5538fcb402e27559db40bec8addd_21'; $x1072->parameters = array (
); $x1072->scope = $scope; $x1072->properties['prototype'] = clone JS::$objectTemplate; $x1072->attributes['prototype'] = JS::WRITABLE; $x1072->properties['prototype']->properties['constructor'] = $x1072; $x1072->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1072->properties['length'] = 0; $x1072->attributes['length'] = 0;
unset($x1073, $W1073, $S1073, $U1073);
$x1074 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 319, 7, '<image>/05_string.js');
$x1073 =& $x1074[0]; list(,$W1073,$S1073,$U1073) = $x1074;
$x1075 = JS::toString('toLowerCase', $global);
if ($x1073 === JS::$undefined || $x1073 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1076 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 319, 30, '<image>/05_string.js');
$_TypeError =& $x1076[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1076;
$x1077 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1078 = $x1077($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1078->class) && $x1078->class === 'Error' && !isset($x1078->properties['file']) && !isset($x1078->properties['line']) && !isset($x1078->properties['column'])) {$x1078->properties['file'] = '<image>/05_string.js';$x1078->properties['line'] = 319;$x1078->properties['column'] = 30;$x1078->attributes['file'] = $x1078->attributes['line'] = $x1078->attributes['column'] = 0; }
throw new JSException($x1078, 319, 30, '<image>/05_string.js');
}
$x1073 = JS::toObject($x1073, $global);
unset($x1079, $W1079, $S1079, $U1079);
$x1080 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1073, JS::toString($x1075, $global), 319, 30, '<image>/05_string.js');
$x1079 =& $x1080[0]; list(,$W1079,$S1079,$U1079) = $x1080;
if ($U1079 && (!isset($x1073->extensible) || $x1073->extensible)) {$x1073->properties[$x1075] = $x1079; $x1079 =& $x1073->properties[$x1075]; $x1073->attributes[$x1075] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1079 = FALSE; $W1079 = TRUE; }
if (isset($x1073->class) && $x1073->class === 'Array') {  if (isset($x1073->properties['length']) && $x1073->properties['length'] !== JS::$undefined) { $x1082 = $x1073->properties['length']; }  else { $x1082 = 0; } }
if (isset($S1079)) {
$x1083 = $S1079->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 319, 30);
$x1084 = $x1083($global, $x1073, $S1079, array($x1072), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1081 = $x1084;
} else {
if (!$U1079) {$x1081 = $x1072;if ($W1079) { $x1079 = $x1072; }  }
else { $x1081 = JS::$undefined; }
}
if (isset($x1073->class) && $x1073->class === 'Array') {if (is_int('toLowerCase') && 'toLowerCase' >= $x1073->properties['length']) { $x1073->properties['length'] = 'toLowerCase' + 1; }else if ($x1075 === 'length' && is_int($x1072) && $x1082 > $x1072) {  for ($i = $x1072; $i < $x1082; ++$i) {  unset($x1073->properties[$i], $x1073->attributes[$i]); }}};
unset($x1085, $W1085, $S1085, $U1085);
$x1086 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 323, 44, '<image>/05_string.js');
$x1085 =& $x1086[0]; list(,$W1085,$S1085,$U1085) = $x1086;
unset($x1087, $W1087, $S1087, $U1087);
$x1088 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1085, JS::toString('toLowerCase', $global), 323, 54, '<image>/05_string.js');
$x1087 =& $x1088[0]; list(,$W1087,$S1087,$U1087) = $x1088;
unset($x1089, $W1089, $S1089, $U1089);
$x1090 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 323, 7, '<image>/05_string.js');
$x1089 =& $x1090[0]; list(,$W1089,$S1089,$U1089) = $x1090;
$x1091 = JS::toString('toLocaleLowerCase', $global);
if ($x1089 === JS::$undefined || $x1089 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1092 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 323, 36, '<image>/05_string.js');
$_TypeError =& $x1092[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1092;
$x1093 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1094 = $x1093($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1094->class) && $x1094->class === 'Error' && !isset($x1094->properties['file']) && !isset($x1094->properties['line']) && !isset($x1094->properties['column'])) {$x1094->properties['file'] = '<image>/05_string.js';$x1094->properties['line'] = 323;$x1094->properties['column'] = 36;$x1094->attributes['file'] = $x1094->attributes['line'] = $x1094->attributes['column'] = 0; }
throw new JSException($x1094, 323, 36, '<image>/05_string.js');
}
$x1089 = JS::toObject($x1089, $global);
unset($x1095, $W1095, $S1095, $U1095);
$x1096 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1089, JS::toString($x1091, $global), 323, 36, '<image>/05_string.js');
$x1095 =& $x1096[0]; list(,$W1095,$S1095,$U1095) = $x1096;
if ($U1095 && (!isset($x1089->extensible) || $x1089->extensible)) {$x1089->properties[$x1091] = $x1095; $x1095 =& $x1089->properties[$x1091]; $x1089->attributes[$x1091] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1095 = FALSE; $W1095 = TRUE; }
if (isset($x1089->class) && $x1089->class === 'Array') {  if (isset($x1089->properties['length']) && $x1089->properties['length'] !== JS::$undefined) { $x1098 = $x1089->properties['length']; }  else { $x1098 = 0; } }
if (isset($S1095)) {
$x1099 = $S1095->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 323, 36);
$x1100 = $x1099($global, $x1089, $S1095, array($x1087), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1097 = $x1100;
} else {
if (!$U1095) {$x1097 = $x1087;if ($W1095) { $x1095 = $x1087; }  }
else { $x1097 = JS::$undefined; }
}
if (isset($x1089->class) && $x1089->class === 'Array') {if (is_int('toLocaleLowerCase') && 'toLocaleLowerCase' >= $x1089->properties['length']) { $x1089->properties['length'] = 'toLocaleLowerCase' + 1; }else if ($x1091 === 'length' && is_int($x1087) && $x1098 > $x1087) {  for ($i = $x1087; $i < $x1098; ++$i) {  unset($x1089->properties[$i], $x1089->attributes[$i]); }}};
$x1103 = clone JS::$functionTemplate; $x1103->call = '_465e5538fcb402e27559db40bec8addd_22'; $x1103->parameters = array (
); $x1103->scope = $scope; $x1103->properties['prototype'] = clone JS::$objectTemplate; $x1103->attributes['prototype'] = JS::WRITABLE; $x1103->properties['prototype']->properties['constructor'] = $x1103; $x1103->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1103->properties['length'] = 0; $x1103->attributes['length'] = 0;
unset($x1104, $W1104, $S1104, $U1104);
$x1105 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 325, 7, '<image>/05_string.js');
$x1104 =& $x1105[0]; list(,$W1104,$S1104,$U1104) = $x1105;
$x1106 = JS::toString('toUpperCase', $global);
if ($x1104 === JS::$undefined || $x1104 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1107 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 325, 30, '<image>/05_string.js');
$_TypeError =& $x1107[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1107;
$x1108 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1109 = $x1108($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1109->class) && $x1109->class === 'Error' && !isset($x1109->properties['file']) && !isset($x1109->properties['line']) && !isset($x1109->properties['column'])) {$x1109->properties['file'] = '<image>/05_string.js';$x1109->properties['line'] = 325;$x1109->properties['column'] = 30;$x1109->attributes['file'] = $x1109->attributes['line'] = $x1109->attributes['column'] = 0; }
throw new JSException($x1109, 325, 30, '<image>/05_string.js');
}
$x1104 = JS::toObject($x1104, $global);
unset($x1110, $W1110, $S1110, $U1110);
$x1111 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1104, JS::toString($x1106, $global), 325, 30, '<image>/05_string.js');
$x1110 =& $x1111[0]; list(,$W1110,$S1110,$U1110) = $x1111;
if ($U1110 && (!isset($x1104->extensible) || $x1104->extensible)) {$x1104->properties[$x1106] = $x1110; $x1110 =& $x1104->properties[$x1106]; $x1104->attributes[$x1106] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1110 = FALSE; $W1110 = TRUE; }
if (isset($x1104->class) && $x1104->class === 'Array') {  if (isset($x1104->properties['length']) && $x1104->properties['length'] !== JS::$undefined) { $x1113 = $x1104->properties['length']; }  else { $x1113 = 0; } }
if (isset($S1110)) {
$x1114 = $S1110->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 325, 30);
$x1115 = $x1114($global, $x1104, $S1110, array($x1103), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1112 = $x1115;
} else {
if (!$U1110) {$x1112 = $x1103;if ($W1110) { $x1110 = $x1103; }  }
else { $x1112 = JS::$undefined; }
}
if (isset($x1104->class) && $x1104->class === 'Array') {if (is_int('toUpperCase') && 'toUpperCase' >= $x1104->properties['length']) { $x1104->properties['length'] = 'toUpperCase' + 1; }else if ($x1106 === 'length' && is_int($x1103) && $x1113 > $x1103) {  for ($i = $x1103; $i < $x1113; ++$i) {  unset($x1104->properties[$i], $x1104->attributes[$i]); }}};
unset($x1116, $W1116, $S1116, $U1116);
$x1117 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 329, 44, '<image>/05_string.js');
$x1116 =& $x1117[0]; list(,$W1116,$S1116,$U1116) = $x1117;
unset($x1118, $W1118, $S1118, $U1118);
$x1119 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $x1116, JS::toString('toUpperCase', $global), 329, 54, '<image>/05_string.js');
$x1118 =& $x1119[0]; list(,$W1118,$S1118,$U1118) = $x1119;
unset($x1120, $W1120, $S1120, $U1120);
$x1121 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 329, 7, '<image>/05_string.js');
$x1120 =& $x1121[0]; list(,$W1120,$S1120,$U1120) = $x1121;
$x1122 = JS::toString('toLocaleUpperCase', $global);
if ($x1120 === JS::$undefined || $x1120 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1123 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 329, 36, '<image>/05_string.js');
$_TypeError =& $x1123[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1123;
$x1124 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1125 = $x1124($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1125->class) && $x1125->class === 'Error' && !isset($x1125->properties['file']) && !isset($x1125->properties['line']) && !isset($x1125->properties['column'])) {$x1125->properties['file'] = '<image>/05_string.js';$x1125->properties['line'] = 329;$x1125->properties['column'] = 36;$x1125->attributes['file'] = $x1125->attributes['line'] = $x1125->attributes['column'] = 0; }
throw new JSException($x1125, 329, 36, '<image>/05_string.js');
}
$x1120 = JS::toObject($x1120, $global);
unset($x1126, $W1126, $S1126, $U1126);
$x1127 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1120, JS::toString($x1122, $global), 329, 36, '<image>/05_string.js');
$x1126 =& $x1127[0]; list(,$W1126,$S1126,$U1126) = $x1127;
if ($U1126 && (!isset($x1120->extensible) || $x1120->extensible)) {$x1120->properties[$x1122] = $x1126; $x1126 =& $x1120->properties[$x1122]; $x1120->attributes[$x1122] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1126 = FALSE; $W1126 = TRUE; }
if (isset($x1120->class) && $x1120->class === 'Array') {  if (isset($x1120->properties['length']) && $x1120->properties['length'] !== JS::$undefined) { $x1129 = $x1120->properties['length']; }  else { $x1129 = 0; } }
if (isset($S1126)) {
$x1130 = $S1126->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 329, 36);
$x1131 = $x1130($global, $x1120, $S1126, array($x1118), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1128 = $x1131;
} else {
if (!$U1126) {$x1128 = $x1118;if ($W1126) { $x1126 = $x1118; }  }
else { $x1128 = JS::$undefined; }
}
if (isset($x1120->class) && $x1120->class === 'Array') {if (is_int('toLocaleUpperCase') && 'toLocaleUpperCase' >= $x1120->properties['length']) { $x1120->properties['length'] = 'toLocaleUpperCase' + 1; }else if ($x1122 === 'length' && is_int($x1118) && $x1129 > $x1118) {  for ($i = $x1118; $i < $x1129; ++$i) {  unset($x1120->properties[$i], $x1120->attributes[$i]); }}};
$x1134 = clone JS::$functionTemplate; $x1134->call = '_465e5538fcb402e27559db40bec8addd_23'; $x1134->parameters = array (
); $x1134->scope = $scope; $x1134->properties['prototype'] = clone JS::$objectTemplate; $x1134->attributes['prototype'] = JS::WRITABLE; $x1134->properties['prototype']->properties['constructor'] = $x1134; $x1134->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x1134->properties['length'] = 0; $x1134->attributes['length'] = 0;
unset($x1135, $W1135, $S1135, $U1135);
$x1136 = _465e5538fcb402e27559db40bec8addd_4($global, $scope, $_String, JS::toString('prototype', $global), 331, 7, '<image>/05_string.js');
$x1135 =& $x1136[0]; list(,$W1135,$S1135,$U1135) = $x1136;
$x1137 = JS::toString('trim', $global);
if ($x1135 === JS::$undefined || $x1135 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x1138 = _465e5538fcb402e27559db40bec8addd_3($global, $scope, $scope, JS::toString('TypeError', $global), 331, 23, '<image>/05_string.js');
$_TypeError =& $x1138[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x1138;
$x1139 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1140 = $x1139($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x1140->class) && $x1140->class === 'Error' && !isset($x1140->properties['file']) && !isset($x1140->properties['line']) && !isset($x1140->properties['column'])) {$x1140->properties['file'] = '<image>/05_string.js';$x1140->properties['line'] = 331;$x1140->properties['column'] = 23;$x1140->attributes['file'] = $x1140->attributes['line'] = $x1140->attributes['column'] = 0; }
throw new JSException($x1140, 331, 23, '<image>/05_string.js');
}
$x1135 = JS::toObject($x1135, $global);
unset($x1141, $W1141, $S1141, $U1141);
$x1142 = _465e5538fcb402e27559db40bec8addd_5($global, $scope, $x1135, JS::toString($x1137, $global), 331, 23, '<image>/05_string.js');
$x1141 =& $x1142[0]; list(,$W1141,$S1141,$U1141) = $x1142;
if ($U1141 && (!isset($x1135->extensible) || $x1135->extensible)) {$x1135->properties[$x1137] = $x1141; $x1141 =& $x1135->properties[$x1137]; $x1135->attributes[$x1137] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U1141 = FALSE; $W1141 = TRUE; }
if (isset($x1135->class) && $x1135->class === 'Array') {  if (isset($x1135->properties['length']) && $x1135->properties['length'] !== JS::$undefined) { $x1144 = $x1135->properties['length']; }  else { $x1144 = 0; } }
if (isset($S1141)) {
$x1145 = $S1141->call;
$global->trace[++$global->trace_sp] = array('<image>/05_string.js', 331, 23);
$x1146 = $x1145($global, $x1135, $S1141, array($x1134), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x1143 = $x1146;
} else {
if (!$U1141) {$x1143 = $x1134;if ($W1141) { $x1141 = $x1134; }  }
else { $x1143 = JS::$undefined; }
}
if (isset($x1135->class) && $x1135->class === 'Array') {if (is_int('trim') && 'trim' >= $x1135->properties['length']) { $x1135->properties['length'] = 'trim' + 1; }else if ($x1137 === 'length' && is_int($x1134) && $x1144 > $x1134) {  for ($i = $x1134; $i < $x1144; ++$i) {  unset($x1135->properties[$i], $x1135->attributes[$i]); }}};
;
return JS::$undefined;
}
