function _b41eda56643ee8c6ef132899460f4000_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['Boolean'] = $fn;
$_Boolean =& $scope->properties['Boolean'];
$global->scope[++$global->scope_sp] = $scope;
$x2 = (((gettype($leThis) === gettype($global) && $leThis === $global))|| (((is_float($leThis) || is_int($leThis)) && (is_float($global) || is_int($global))) && $leThis == $global));
if (JS::toBoolean($x2, $global)) {

return JS::toBoolean($_value, $global);;
};
$x3 = clone JS::$objectTemplate;
$scope->properties['b'] = JS::$undefined; $_b =& $scope->properties['b'];
$Ub = FALSE;
$_b = $x3;
$_b->prototype =$_Boolean->properties['prototype'];
$_b->class = 'Boolean';
$_b->value = JS::toBoolean($_value, $global);
$_b->extensible = TRUE;
return $_b;
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'Boolean\']=$fn;$_Boolean=&$scope->properties[\'Boolean\'];$global->scope[++$global->scope_sp]=$scope;$x2=(((gettype($leThis)===gettype($global)&&$leThis===$global))||(((is_float($leThis)||is_int($leThis))&&(is_float($global)||is_int($global)))&&$leThis==$global));if(JS::toBoolean($x2,$global)){return JS::toBoolean($_value,$global);}$x3=clone JS::$objectTemplate;$scope->properties[\'b\']=JS::$undefined;$_b=&$scope->properties[\'b\'];$Ub=FALSE;$_b=$x3;$_b->prototype=$_Boolean->properties[\'prototype\'];$_b->class=\'Boolean\';$_b->value=JS::toBoolean($_value,$global);$_b->extensible=TRUE;return$_b;return JS::$undefined;}', "\n";
function _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x6 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x7 = $x6($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x7; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _b41eda56643ee8c6ef132899460f4000_2($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x6=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x7=$x6($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x7;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x12 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x12[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x12;
$x13 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x14 = $x13($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x14->class) && $x14->class === 'Error') {$x14->properties['file'] = $file;$x14->properties['line'] = $line;$x14->properties['column'] = $column;$x14->attributes['file'] = $x14->attributes['line'] = $x14->attributes['column'] = 0; }
throw new JSException($x14, $line, $column, $file);
}
$W11 = $S11 = $U11 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x11 =& $lookup->properties[$id]; $W11 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S11 = $lookup->setters[$id]; }
else { $x11 = JS::$undefined; $U11 = TRUE; }
return array(&$x11, $W11, $S11, $U11);
}
echo 'function _b41eda56643ee8c6ef132899460f4000_3($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x12=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x12[0];list(,$WTypeError,$STypeError,$UTypeError)=$x12;$x13=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x14=$x13($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x14->class)&&$x14->class===\'Error\'){$x14->properties[\'file\']=$file;$x14->properties[\'line\']=$line;$x14->properties[\'column\']=$column;$x14->attributes[\'file\']=$x14->attributes[\'line\']=$x14->attributes[\'column\']=0;}throw new JSException($x14,$line,$column,$file);}$W11=$S11=$U11=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x11=&$lookup->properties[$id];$W11=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S11=$lookup->setters[$id];}else{$x11=JS::$undefined;$U11=TRUE;}return array(&$x11,$W11,$S11,$U11);}', "\n";
function _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x24 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x24[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x24;
$x25 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x26 = $x25($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x26->class) && $x26->class === 'Error') {$x26->properties['file'] = $file;$x26->properties['line'] = $line;$x26->properties['column'] = $column;$x26->attributes['file'] = $x26->attributes['line'] = $x26->attributes['column'] = 0; }
throw new JSException($x26, $line, $column, $file);
}
$W23 = $S23 = $U23 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x23 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x27 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x28 = $x27($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x23 = $x28; }
else { $x23 = JS::$undefined; $U23 = TRUE; }
return array(&$x23, $W23, $S23, $U23);
}
echo 'function _b41eda56643ee8c6ef132899460f4000_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x24=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x24[0];list(,$WTypeError,$STypeError,$UTypeError)=$x24;$x25=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x26=$x25($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'){$x26->properties[\'file\']=$file;$x26->properties[\'line\']=$line;$x26->properties[\'column\']=$column;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,$line,$column,$file);}$W23=$S23=$U23=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x23=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x27=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x28=$x27($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x23=$x28;}else{$x23=JS::$undefined;$U23=TRUE;}return array(&$x23,$W23,$S23,$U23);}', "\n";
function _b41eda56643ee8c6ef132899460f4000_5($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x39 =& $scope->properties['arguments'];
$x39->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x39->properties[$i] = $args[$i];
$x39->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'Boolean', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x42 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', 23, 13, '<image>/06_boolean.js');
$_TypeError =& $x42[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x42;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x43 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'ReferenceError', 23, 13, '<image>/06_boolean.js');
$_ReferenceError =& $x43[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x43;
$x44 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 13);
$x45 = $x44($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x45->class) && $x45->class === 'Error') {$x45->properties['file'] = '<image>/06_boolean.js';$x45->properties['line'] = 23;$x45->properties['column'] = 13;$x45->attributes['file'] = $x45->attributes['line'] = $x45->attributes['column'] = 0; }
throw new JSException($x45, 23, 13, '<image>/06_boolean.js');
}
$x40 = clone JS::$objectTemplate;
unset($x46, $W46, $S46, $U46);
$x47 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_TypeError, (string) 'prototype', 23, 9, '<image>/06_boolean.js');
$x46 =& $x47[0]; list(,$W46,$S46,$U46) = $x47;
$x41 = $x46;
$x40->prototype = $x41;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x50 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 9);
$x51 = $x50($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x51->class) && $x51->class === 'Error') {$x51->properties['file'] = '<image>/06_boolean.js';$x51->properties['line'] = 23;$x51->properties['column'] = 9;$x51->attributes['file'] = $x51->attributes['line'] = $x51->attributes['column'] = 0; }
throw new JSException($x51, 23, 9, '<image>/06_boolean.js');
}
$x48 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 23, 9);
$x49 = $x48($global, $x40, $_TypeError, array('Boolean.prototype.toString(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x41 = $x49;
if (is_object($x41) && $x41 !== JS::$undefined) { $x40 = $x41; }
if (isset($x40->class) && $x40->class === 'Error') {$x40->properties['file'] = '<image>/06_boolean.js';$x40->properties['line'] = 23;$x40->properties['column'] = 3;$x40->attributes['file'] = $x40->attributes['line'] = $x40->attributes['column'] = 0; }
throw new JSException($x40, 23, 3, '<image>/06_boolean.js');;
};
if (JS::toBoolean($leThis->value, $global)) {

return 'true';;
};
return 'false';
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_5($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x39=&$scope->properties[\'arguments\'];$x39->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x39->properties[$i]=$args[$i];$x39->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'Boolean\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x42=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,(string)\'TypeError\',23,13,\'<image>/06_boolean.js\');$_TypeError=&$x42[0];list(,$WTypeError,$STypeError,$UTypeError)=$x42;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x43=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,(string)\'ReferenceError\',23,13,\'<image>/06_boolean.js\');$_ReferenceError=&$x43[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x43;$x44=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,13);$x45=$x44($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x45->class)&&$x45->class===\'Error\'){$x45->properties[\'file\']=\'<image>/06_boolean.js\';$x45->properties[\'line\']=23;$x45->properties[\'column\']=13;$x45->attributes[\'file\']=$x45->attributes[\'line\']=$x45->attributes[\'column\']=0;}throw new JSException($x45,23,13,\'<image>/06_boolean.js\');}$x40=clone JS::$objectTemplate;unset($x46,$W46,$S46,$U46);$x47=_b41eda56643ee8c6ef132899460f4000_4($global,$scope,$_TypeError,(string)\'prototype\',23,9,\'<image>/06_boolean.js\');$x46=&$x47[0];list(,$W46,$S46,$U46)=$x47;$x41=$x46;$x40->prototype=$x41;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x50=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,9);$x51=$x50($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x51->class)&&$x51->class===\'Error\'){$x51->properties[\'file\']=\'<image>/06_boolean.js\';$x51->properties[\'line\']=23;$x51->properties[\'column\']=9;$x51->attributes[\'file\']=$x51->attributes[\'line\']=$x51->attributes[\'column\']=0;}throw new JSException($x51,23,9,\'<image>/06_boolean.js\');}$x48=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',23,9);$x49=$x48($global,$x40,$_TypeError,array(\'Boolean.prototype.toString(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x41=$x49;if(is_object($x41)&&$x41!==JS::$undefined){$x40=$x41;}if(isset($x40->class)&&$x40->class===\'Error\'){$x40->properties[\'file\']=\'<image>/06_boolean.js\';$x40->properties[\'line\']=23;$x40->properties[\'column\']=3;$x40->attributes[\'file\']=$x40->attributes[\'line\']=$x40->attributes[\'column\']=0;}throw new JSException($x40,23,3,\'<image>/06_boolean.js\');}if(JS::toBoolean($leThis->value,$global)){return\'true\';}return\'false\';return JS::$undefined;}', "\n";
function _b41eda56643ee8c6ef132899460f4000_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x64 =& $scope->properties['arguments'];
$x64->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x64->properties[$i] = $args[$i];
$x64->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if (JS::toBoolean(!isset($leThis->class) || $leThis->class !== 'Boolean', $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x67 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', 35, 13, '<image>/06_boolean.js');
$_TypeError =& $x67[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x67;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x68 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'ReferenceError', 35, 13, '<image>/06_boolean.js');
$_ReferenceError =& $x68[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x68;
$x69 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 13);
$x70 = $x69($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x70->class) && $x70->class === 'Error') {$x70->properties['file'] = '<image>/06_boolean.js';$x70->properties['line'] = 35;$x70->properties['column'] = 13;$x70->attributes['file'] = $x70->attributes['line'] = $x70->attributes['column'] = 0; }
throw new JSException($x70, 35, 13, '<image>/06_boolean.js');
}
$x65 = clone JS::$objectTemplate;
unset($x71, $W71, $S71, $U71);
$x72 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_TypeError, (string) 'prototype', 35, 9, '<image>/06_boolean.js');
$x71 =& $x72[0]; list(,$W71,$S71,$U71) = $x72;
$x66 = $x71;
$x65->prototype = $x66;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x75 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 9);
$x76 = $x75($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x76->class) && $x76->class === 'Error') {$x76->properties['file'] = '<image>/06_boolean.js';$x76->properties['line'] = 35;$x76->properties['column'] = 9;$x76->attributes['file'] = $x76->attributes['line'] = $x76->attributes['column'] = 0; }
throw new JSException($x76, 35, 9, '<image>/06_boolean.js');
}
$x73 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 35, 9);
$x74 = $x73($global, $x65, $_TypeError, array('Boolean.prototype.valueOf(): not generic'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x66 = $x74;
if (is_object($x66) && $x66 !== JS::$undefined) { $x65 = $x66; }
if (isset($x65->class) && $x65->class === 'Error') {$x65->properties['file'] = '<image>/06_boolean.js';$x65->properties['line'] = 35;$x65->properties['column'] = 3;$x65->attributes['file'] = $x65->attributes['line'] = $x65->attributes['column'] = 0; }
throw new JSException($x65, 35, 3, '<image>/06_boolean.js');;
};
return $leThis->value;
;
return JS::$undefined;
}
echo 'function _b41eda56643ee8c6ef132899460f4000_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x64=&$scope->properties[\'arguments\'];$x64->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x64->properties[$i]=$args[$i];$x64->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if(JS::toBoolean(!isset($leThis->class)||$leThis->class!==\'Boolean\',$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x67=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,(string)\'TypeError\',35,13,\'<image>/06_boolean.js\');$_TypeError=&$x67[0];list(,$WTypeError,$STypeError,$UTypeError)=$x67;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x68=_b41eda56643ee8c6ef132899460f4000_2($global,$scope,$scope,(string)\'ReferenceError\',35,13,\'<image>/06_boolean.js\');$_ReferenceError=&$x68[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x68;$x69=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,13);$x70=$x69($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x70->class)&&$x70->class===\'Error\'){$x70->properties[\'file\']=\'<image>/06_boolean.js\';$x70->properties[\'line\']=35;$x70->properties[\'column\']=13;$x70->attributes[\'file\']=$x70->attributes[\'line\']=$x70->attributes[\'column\']=0;}throw new JSException($x70,35,13,\'<image>/06_boolean.js\');}$x65=clone JS::$objectTemplate;unset($x71,$W71,$S71,$U71);$x72=_b41eda56643ee8c6ef132899460f4000_4($global,$scope,$_TypeError,(string)\'prototype\',35,9,\'<image>/06_boolean.js\');$x71=&$x72[0];list(,$W71,$S71,$U71)=$x72;$x66=$x71;$x65->prototype=$x66;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x75=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,9);$x76=$x75($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x76->class)&&$x76->class===\'Error\'){$x76->properties[\'file\']=\'<image>/06_boolean.js\';$x76->properties[\'line\']=35;$x76->properties[\'column\']=9;$x76->attributes[\'file\']=$x76->attributes[\'line\']=$x76->attributes[\'column\']=0;}throw new JSException($x76,35,9,\'<image>/06_boolean.js\');}$x73=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/06_boolean.js\',35,9);$x74=$x73($global,$x65,$_TypeError,array(\'Boolean.prototype.valueOf(): not generic\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x66=$x74;if(is_object($x66)&&$x66!==JS::$undefined){$x65=$x66;}if(isset($x65->class)&&$x65->class===\'Error\'){$x65->properties[\'file\']=\'<image>/06_boolean.js\';$x65->properties[\'line\']=35;$x65->properties[\'column\']=3;$x65->attributes[\'file\']=$x65->attributes[\'line\']=$x65->attributes[\'column\']=0;}throw new JSException($x65,35,3,\'<image>/06_boolean.js\');}return$leThis->value;return JS::$undefined;}', "\n";
function _b41eda56643ee8c6ef132899460f4000_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/06_boolean.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/06_boolean.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Boolean;
$x4 = clone JS::$functionTemplate; $x4->call = '_b41eda56643ee8c6ef132899460f4000_1'; $x4->parameters = array (
  0 => 'value',
); $x4->name = 'Boolean'; $x4->scope = $scope; $x4->properties['prototype'] = clone JS::$objectTemplate; $x4->attributes['prototype'] = JS::WRITABLE; $x4->properties['prototype']->properties['constructor'] = $x4; $x4->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x4->properties['length'] = 1; $x4->attributes['length'] = 0;
$scope->properties['Boolean'] = JS::$undefined; $_Boolean =& $scope->properties['Boolean'];
$UBoolean = FALSE;
$_Boolean = $x4;
$x5 = clone JS::$objectTemplate;
if ($_Boolean === JS::$undefined || $_Boolean === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x8 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', 15, 19, '<image>/06_boolean.js');
$_TypeError =& $x8[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x8;
$x9 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 15, 19);
$x10 = $x9($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x10->class) && $x10->class === 'Error') {$x10->properties['file'] = '<image>/06_boolean.js';$x10->properties['line'] = 15;$x10->properties['column'] = 19;$x10->attributes['file'] = $x10->attributes['line'] = $x10->attributes['column'] = 0; }
throw new JSException($x10, 15, 19, '<image>/06_boolean.js');
}
$_Boolean = JS::toObject($_Boolean, $global);
unset($x11, $W11, $S11, $U11);
$x15 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $_Boolean, (string) 'prototype', 15, 19, '<image>/06_boolean.js');
$x11 =& $x15[0]; list(,$W11,$S11,$U11) = $x15;
if ($U11 && (!isset($_Boolean->extensible) || $_Boolean->extensible)) {$_Boolean->properties['prototype'] = $x11; $x11 =& $_Boolean->properties['prototype']; $_Boolean->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U11 = FALSE; $W11 = TRUE; }
if (isset($S11)) {
$x17 = $S11->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 15, 19);
$x18 = $x17($global, $_Boolean, $S11, array($x5), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x16 = $x18;
} else {
if (!$U11) {$x16 = $x5;if ($W11) { $x11 = $x5; }  }
else { $x16 = JS::$undefined; }
}
if (isset($_Boolean->class) && $_Boolean->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Boolean->properties['length']) { $_Boolean->properties['length'] = 'prototype' + 1; };
unset($_Object, $WObject, $SObject, $UObject);
$x19 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'Object', 16, 52, '<image>/06_boolean.js');
$_Object =& $x19[0]; list(,$WObject,$SObject,$UObject) = $x19;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x20 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'ReferenceError', 16, 52, '<image>/06_boolean.js');
$_ReferenceError =& $x20[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x20;
$x21 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 16, 52);
$x22 = $x21($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x22->class) && $x22->class === 'Error') {$x22->properties['file'] = '<image>/06_boolean.js';$x22->properties['line'] = 16;$x22->properties['column'] = 52;$x22->attributes['file'] = $x22->attributes['line'] = $x22->attributes['column'] = 0; }
throw new JSException($x22, 16, 52, '<image>/06_boolean.js');
}
$_Boolean->properties['prototype']->prototype =$_Object->properties['prototype'];
$_Boolean->properties['prototype']->class = 'Boolean';
$_Boolean->properties['prototype']->extensible = TRUE;
unset($x23, $W23, $S23, $U23);
$x29 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, (string) 'prototype', 19, 8, '<image>/06_boolean.js');
$x23 =& $x29[0]; list(,$W23,$S23,$U23) = $x29;
if ($x23 === JS::$undefined || $x23 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', 19, 31, '<image>/06_boolean.js');
$_TypeError =& $x30[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x30;
$x31 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 19, 31);
$x32 = $x31($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x32->class) && $x32->class === 'Error') {$x32->properties['file'] = '<image>/06_boolean.js';$x32->properties['line'] = 19;$x32->properties['column'] = 31;$x32->attributes['file'] = $x32->attributes['line'] = $x32->attributes['column'] = 0; }
throw new JSException($x32, 19, 31, '<image>/06_boolean.js');
}
$x23 = JS::toObject($x23, $global);
unset($x33, $W33, $S33, $U33);
$x34 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x23, (string) 'constructor', 19, 31, '<image>/06_boolean.js');
$x33 =& $x34[0]; list(,$W33,$S33,$U33) = $x34;
if ($U33 && (!isset($x23->extensible) || $x23->extensible)) {$x23->properties['constructor'] = $x33; $x33 =& $x23->properties['constructor']; $x23->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U33 = FALSE; $W33 = TRUE; }
if (isset($S33)) {
$x36 = $S33->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 19, 31);
$x37 = $x36($global, $x23, $S33, array($_Boolean), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x35 = $x37;
} else {
if (!$U33) {$x35 = $_Boolean;if ($W33) { $x33 = $_Boolean; }  }
else { $x35 = JS::$undefined; }
}
if (isset($x23->class) && $x23->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x23->properties['length']) { $x23->properties['length'] = 'constructor' + 1; };
$x52 = clone JS::$functionTemplate; $x52->call = '_b41eda56643ee8c6ef132899460f4000_5'; $x52->parameters = array (
); $x52->scope = $scope; $x52->properties['prototype'] = clone JS::$objectTemplate; $x52->attributes['prototype'] = JS::WRITABLE; $x52->properties['prototype']->properties['constructor'] = $x52; $x52->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x52->properties['length'] = 0; $x52->attributes['length'] = 0;
unset($x53, $W53, $S53, $U53);
$x54 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, (string) 'prototype', 21, 8, '<image>/06_boolean.js');
$x53 =& $x54[0]; list(,$W53,$S53,$U53) = $x54;
if ($x53 === JS::$undefined || $x53 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x55 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', 21, 28, '<image>/06_boolean.js');
$_TypeError =& $x55[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x55;
$x56 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 21, 28);
$x57 = $x56($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x57->class) && $x57->class === 'Error') {$x57->properties['file'] = '<image>/06_boolean.js';$x57->properties['line'] = 21;$x57->properties['column'] = 28;$x57->attributes['file'] = $x57->attributes['line'] = $x57->attributes['column'] = 0; }
throw new JSException($x57, 21, 28, '<image>/06_boolean.js');
}
$x53 = JS::toObject($x53, $global);
unset($x58, $W58, $S58, $U58);
$x59 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x53, (string) 'toString', 21, 28, '<image>/06_boolean.js');
$x58 =& $x59[0]; list(,$W58,$S58,$U58) = $x59;
if ($U58 && (!isset($x53->extensible) || $x53->extensible)) {$x53->properties['toString'] = $x58; $x58 =& $x53->properties['toString']; $x53->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U58 = FALSE; $W58 = TRUE; }
if (isset($S58)) {
$x61 = $S58->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 21, 28);
$x62 = $x61($global, $x53, $S58, array($x52), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x60 = $x62;
} else {
if (!$U58) {$x60 = $x52;if ($W58) { $x58 = $x52; }  }
else { $x60 = JS::$undefined; }
}
if (isset($x53->class) && $x53->class === 'Array' &&  is_int('toString') && 'toString' >= $x53->properties['length']) { $x53->properties['length'] = 'toString' + 1; };
$x77 = clone JS::$functionTemplate; $x77->call = '_b41eda56643ee8c6ef132899460f4000_6'; $x77->parameters = array (
); $x77->scope = $scope; $x77->properties['prototype'] = clone JS::$objectTemplate; $x77->attributes['prototype'] = JS::WRITABLE; $x77->properties['prototype']->properties['constructor'] = $x77; $x77->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x77->properties['length'] = 0; $x77->attributes['length'] = 0;
unset($x78, $W78, $S78, $U78);
$x79 = _b41eda56643ee8c6ef132899460f4000_4($global, $scope, $_Boolean, (string) 'prototype', 33, 8, '<image>/06_boolean.js');
$x78 =& $x79[0]; list(,$W78,$S78,$U78) = $x79;
if ($x78 === JS::$undefined || $x78 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x80 = _b41eda56643ee8c6ef132899460f4000_2($global, $scope, $scope, (string) 'TypeError', 33, 27, '<image>/06_boolean.js');
$_TypeError =& $x80[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x80;
$x81 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 33, 27);
$x82 = $x81($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x82->class) && $x82->class === 'Error') {$x82->properties['file'] = '<image>/06_boolean.js';$x82->properties['line'] = 33;$x82->properties['column'] = 27;$x82->attributes['file'] = $x82->attributes['line'] = $x82->attributes['column'] = 0; }
throw new JSException($x82, 33, 27, '<image>/06_boolean.js');
}
$x78 = JS::toObject($x78, $global);
unset($x83, $W83, $S83, $U83);
$x84 = _b41eda56643ee8c6ef132899460f4000_3($global, $scope, $x78, (string) 'valueOf', 33, 27, '<image>/06_boolean.js');
$x83 =& $x84[0]; list(,$W83,$S83,$U83) = $x84;
if ($U83 && (!isset($x78->extensible) || $x78->extensible)) {$x78->properties['valueOf'] = $x83; $x83 =& $x78->properties['valueOf']; $x78->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U83 = FALSE; $W83 = TRUE; }
if (isset($S83)) {
$x86 = $S83->call;
$global->trace[++$global->trace_sp] = array('<image>/06_boolean.js', 33, 27);
$x87 = $x86($global, $x78, $S83, array($x77), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x85 = $x87;
} else {
if (!$U83) {$x85 = $x77;if ($W83) { $x83 = $x77; }  }
else { $x85 = JS::$undefined; }
}
if (isset($x78->class) && $x78->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x78->properties['length']) { $x78->properties['length'] = 'valueOf' + 1; };
;
return JS::$undefined;
}
