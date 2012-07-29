function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['Object'] = $fn;
$_Object =& $scope->properties['Object'];
$global->scope[++$global->scope_sp] = $scope;
$x3 = (((gettype($_value) === gettype(JS::$undefined) && $_value === JS::$undefined))|| (((is_float($_value) || is_int($_value)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_value == JS::$undefined));
$x2 = $x3;
if (!JS::toBoolean($x2, $global)) {
$x4 = (((gettype($_value) === gettype(NULL) && $_value === NULL))|| (((is_float($_value) || is_int($_value)) && (is_float(NULL) || is_int(NULL))) && $_value == NULL));
$x2 = $x4; }
if (JS::toBoolean($x2, $global)) {
$x5 = clone JS::$objectTemplate;
return $x5;;
};
return JS::toObject($_value, $global);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'value\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$scope->properties[\'Object\']=$fn;$_Object=&$scope->properties[\'Object\'];$global->scope[++$global->scope_sp]=$scope;$x3=(((gettype($_value)===gettype(JS::$undefined)&&$_value===JS::$undefined))||(((is_float($_value)||is_int($_value))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_value==JS::$undefined));$x2=$x3;if(!JS::toBoolean($x2,$global)){$x4=(((gettype($_value)===gettype(NULL)&&$_value===NULL))||(((is_float($_value)||is_int($_value))&&(is_float(NULL)||is_int(NULL)))&&$_value==NULL));$x2=$x4;}if(JS::toBoolean($x2,$global)){$x5=clone JS::$objectTemplate;return$x5;}return JS::toObject($_value,$global);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x18 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x19 = $x18($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x19; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x18=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x19=$x18($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x19;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
$x25 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x26 = $x25($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x26->class) && $x26->class === 'Error' && !isset($x26->properties['file']) && !isset($x26->properties['line']) && !isset($x26->properties['column'])) {$x26->properties['file'] = $file;$x26->properties['line'] = $line;$x26->properties['column'] = $column;$x26->attributes['file'] = $x26->attributes['line'] = $x26->attributes['column'] = 0; }
throw new JSException($x26, $line, $column, $file);
}
$W24 = $S24 = $U24 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x24 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x27 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x28 = $x27($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x24 = $x28; }
else { $x24 = JS::$undefined; $U24 = TRUE; }
return array(&$x24, $W24, $S24, $U24);
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){$x25=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x26=$x25($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x26->class)&&$x26->class===\'Error\'&&!isset($x26->properties[\'file\'])&&!isset($x26->properties[\'line\'])&&!isset($x26->properties[\'column\'])){$x26->properties[\'file\']=$file;$x26->properties[\'line\']=$line;$x26->properties[\'column\']=$column;$x26->attributes[\'file\']=$x26->attributes[\'line\']=$x26->attributes[\'column\']=0;}throw new JSException($x26,$line,$column,$file);}$W24=$S24=$U24=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x24=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x27=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x28=$x27($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x24=$x28;}else{$x24=JS::$undefined;$U24=TRUE;}return array(&$x24,$W24,$S24,$U24);}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x8 =& $scope->properties['arguments'];
$x8->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x8->properties[$i] = $args[$i];
$x8->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x10 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x9 = $x10;
if (!JS::toBoolean($x9, $global)) {
$x13 = $_o;
$x13 = ($x13 === JS::$undefined ? 'undefined' : (is_int($x13) || is_float($x13) ? 'number' : (is_bool($x13) ? 'boolean' : (is_string($x13) ? 'string' : (is_object($x13) && isset($x13->call) ? 'function' : 'object')))));
$x12 = !(((gettype($x13) === gettype('object') && $x13 === 'object'))|| (((is_float($x13) || is_int($x13)) && (is_float('object') || is_int('object'))) && $x13 == 'object'));
$x11 = $x12;
if (JS::toBoolean($x11, $global)) {
$x15 = $_o;
$x15 = ($x15 === JS::$undefined ? 'undefined' : (is_int($x15) || is_float($x15) ? 'number' : (is_bool($x15) ? 'boolean' : (is_string($x15) ? 'string' : (is_object($x15) && isset($x15->call) ? 'function' : 'object')))));
$x14 = !(((gettype($x15) === gettype('function') && $x15 === 'function'))|| (((is_float($x15) || is_int($x15)) && (is_float('function') || is_int('function'))) && $x15 == 'function'));
$x11 = $x14; }
$x9 = $x11; }
if (JS::toBoolean($x9, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x20 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 11, 13, '<image>/02_object.js');
$_TypeError =& $x20[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x20;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x21 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 11, 13, '<image>/02_object.js');
$_ReferenceError =& $x21[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x21;
$x22 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 11, 13);
$x23 = $x22($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x23->class) && $x23->class === 'Error' && !isset($x23->properties['file']) && !isset($x23->properties['line']) && !isset($x23->properties['column'])) {$x23->properties['file'] = '<image>/02_object.js';$x23->properties['line'] = 11;$x23->properties['column'] = 13;$x23->attributes['file'] = $x23->attributes['line'] = $x23->attributes['column'] = 0; }
throw new JSException($x23, 11, 13, '<image>/02_object.js');
}
$x16 = clone JS::$objectTemplate;
unset($x24, $W24, $S24, $U24);
$x29 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 11, 9, '<image>/02_object.js');
$x24 =& $x29[0]; list(,$W24,$S24,$U24) = $x29;
$x17 = $x24;
$x16->prototype = $x17;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x32 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 11, 9);
$x33 = $x32($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x33->class) && $x33->class === 'Error' && !isset($x33->properties['file']) && !isset($x33->properties['line']) && !isset($x33->properties['column'])) {$x33->properties['file'] = '<image>/02_object.js';$x33->properties['line'] = 11;$x33->properties['column'] = 9;$x33->attributes['file'] = $x33->attributes['line'] = $x33->attributes['column'] = 0; }
throw new JSException($x33, 11, 9, '<image>/02_object.js');
}
$x30 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 11, 9);
$x31 = $x30($global, $x16, $_TypeError, array('Object.getPrototyeOf(): Cannot get prototype of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x17 = $x31;
if (is_object($x17) && $x17 !== JS::$undefined) { $x16 = $x17; }
if (isset($x16->class) && $x16->class === 'Error' && !isset($x16->properties['file']) && !isset($x16->properties['line']) && !isset($x16->properties['column'])) {$x16->properties['file'] = '<image>/02_object.js';$x16->properties['line'] = 11;$x16->properties['column'] = 3;$x16->attributes['file'] = $x16->attributes['line'] = $x16->attributes['column'] = 0; }
throw new JSException($x16, 11, 3, '<image>/02_object.js');;
};
return $_o->prototype;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x8=&$scope->properties[\'arguments\'];$x8->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x8->properties[$i]=$args[$i];$x8->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x10=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x9=$x10;if(!JS::toBoolean($x9,$global)){$x13=$_o;$x13=($x13===JS::$undefined?\'undefined\':(is_int($x13)||is_float($x13)?\'number\':(is_bool($x13)?\'boolean\':(is_string($x13)?\'string\':(is_object($x13)&&isset($x13->call)?\'function\':\'object\')))));$x12=!(((gettype($x13)===gettype(\'object\')&&$x13===\'object\'))||(((is_float($x13)||is_int($x13))&&(is_float(\'object\')||is_int(\'object\')))&&$x13==\'object\'));$x11=$x12;if(JS::toBoolean($x11,$global)){$x15=$_o;$x15=($x15===JS::$undefined?\'undefined\':(is_int($x15)||is_float($x15)?\'number\':(is_bool($x15)?\'boolean\':(is_string($x15)?\'string\':(is_object($x15)&&isset($x15->call)?\'function\':\'object\')))));$x14=!(((gettype($x15)===gettype(\'function\')&&$x15===\'function\'))||(((is_float($x15)||is_int($x15))&&(is_float(\'function\')||is_int(\'function\')))&&$x15==\'function\'));$x11=$x14;}$x9=$x11;}if(JS::toBoolean($x9,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x20=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),11,13,\'<image>/02_object.js\');$_TypeError=&$x20[0];list(,$WTypeError,$STypeError,$UTypeError)=$x20;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x21=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),11,13,\'<image>/02_object.js\');$_ReferenceError=&$x21[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x21;$x22=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,13);$x23=$x22($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x23->class)&&$x23->class===\'Error\'&&!isset($x23->properties[\'file\'])&&!isset($x23->properties[\'line\'])&&!isset($x23->properties[\'column\'])){$x23->properties[\'file\']=\'<image>/02_object.js\';$x23->properties[\'line\']=11;$x23->properties[\'column\']=13;$x23->attributes[\'file\']=$x23->attributes[\'line\']=$x23->attributes[\'column\']=0;}throw new JSException($x23,11,13,\'<image>/02_object.js\');}$x16=clone JS::$objectTemplate;unset($x24,$W24,$S24,$U24);$x29=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),11,9,\'<image>/02_object.js\');$x24=&$x29[0];list(,$W24,$S24,$U24)=$x29;$x17=$x24;$x16->prototype=$x17;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x32=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,9);$x33=$x32($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x33->class)&&$x33->class===\'Error\'&&!isset($x33->properties[\'file\'])&&!isset($x33->properties[\'line\'])&&!isset($x33->properties[\'column\'])){$x33->properties[\'file\']=\'<image>/02_object.js\';$x33->properties[\'line\']=11;$x33->properties[\'column\']=9;$x33->attributes[\'file\']=$x33->attributes[\'line\']=$x33->attributes[\'column\']=0;}throw new JSException($x33,11,9,\'<image>/02_object.js\');}$x30=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,9);$x31=$x30($global,$x16,$_TypeError,array(\'Object.getPrototyeOf(): Cannot get prototype of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x17=$x31;if(is_object($x17)&&$x17!==JS::$undefined){$x16=$x17;}if(isset($x16->class)&&$x16->class===\'Error\'&&!isset($x16->properties[\'file\'])&&!isset($x16->properties[\'line\'])&&!isset($x16->properties[\'column\'])){$x16->properties[\'file\']=\'<image>/02_object.js\';$x16->properties[\'line\']=11;$x16->properties[\'column\']=3;$x16->attributes[\'file\']=$x16->attributes[\'line\']=$x16->attributes[\'column\']=0;}throw new JSException($x16,11,3,\'<image>/02_object.js\');}return$_o->prototype;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x40 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), $line, $column, $file);
$_TypeError =& $x40[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x40;
$x41 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x42 = $x41($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x42->class) && $x42->class === 'Error' && !isset($x42->properties['file']) && !isset($x42->properties['line']) && !isset($x42->properties['column'])) {$x42->properties['file'] = $file;$x42->properties['line'] = $line;$x42->properties['column'] = $column;$x42->attributes['file'] = $x42->attributes['line'] = $x42->attributes['column'] = 0; }
throw new JSException($x42, $line, $column, $file);
}
$W39 = $S39 = $U39 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x39 =& $lookup->properties[$id]; $W39 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S39 = $lookup->setters[$id]; }
else { $x39 = JS::$undefined; $U39 = TRUE; }
return array(&$x39, $W39, $S39, $U39);
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x40=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),$line,$column,$file);$_TypeError=&$x40[0];list(,$WTypeError,$STypeError,$UTypeError)=$x40;$x41=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x42=$x41($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x42->class)&&$x42->class===\'Error\'&&!isset($x42->properties[\'file\'])&&!isset($x42->properties[\'line\'])&&!isset($x42->properties[\'column\'])){$x42->properties[\'file\']=$file;$x42->properties[\'line\']=$line;$x42->properties[\'column\']=$column;$x42->attributes[\'file\']=$x42->attributes[\'line\']=$x42->attributes[\'column\']=0;}throw new JSException($x42,$line,$column,$file);}$W39=$S39=$U39=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x39=&$lookup->properties[$id];$W39=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S39=$lookup->setters[$id];}else{$x39=JS::$undefined;$U39=TRUE;}return array(&$x39,$W39,$S39,$U39);}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['p'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x51 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x50 = $x51;
if (!JS::toBoolean($x50, $global)) {
$x54 = $_o;
$x54 = ($x54 === JS::$undefined ? 'undefined' : (is_int($x54) || is_float($x54) ? 'number' : (is_bool($x54) ? 'boolean' : (is_string($x54) ? 'string' : (is_object($x54) && isset($x54->call) ? 'function' : 'object')))));
$x53 = !(((gettype($x54) === gettype('object') && $x54 === 'object'))|| (((is_float($x54) || is_int($x54)) && (is_float('object') || is_int('object'))) && $x54 == 'object'));
$x52 = $x53;
if (JS::toBoolean($x52, $global)) {
$x56 = $_o;
$x56 = ($x56 === JS::$undefined ? 'undefined' : (is_int($x56) || is_float($x56) ? 'number' : (is_bool($x56) ? 'boolean' : (is_string($x56) ? 'string' : (is_object($x56) && isset($x56->call) ? 'function' : 'object')))));
$x55 = !(((gettype($x56) === gettype('function') && $x56 === 'function'))|| (((is_float($x56) || is_int($x56)) && (is_float('function') || is_int('function'))) && $x56 == 'function'));
$x52 = $x55; }
$x50 = $x52; }
if (JS::toBoolean($x50, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x59 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 19, 13, '<image>/02_object.js');
$_TypeError =& $x59[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x59;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x60 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 13, '<image>/02_object.js');
$_ReferenceError =& $x60[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x60;
$x61 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 13);
$x62 = $x61($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x62->class) && $x62->class === 'Error' && !isset($x62->properties['file']) && !isset($x62->properties['line']) && !isset($x62->properties['column'])) {$x62->properties['file'] = '<image>/02_object.js';$x62->properties['line'] = 19;$x62->properties['column'] = 13;$x62->attributes['file'] = $x62->attributes['line'] = $x62->attributes['column'] = 0; }
throw new JSException($x62, 19, 13, '<image>/02_object.js');
}
$x57 = clone JS::$objectTemplate;
unset($x63, $W63, $S63, $U63);
$x64 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 19, 9, '<image>/02_object.js');
$x63 =& $x64[0]; list(,$W63,$S63,$U63) = $x64;
$x58 = $x63;
$x57->prototype = $x58;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x67 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x68 = $x67($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x68->class) && $x68->class === 'Error' && !isset($x68->properties['file']) && !isset($x68->properties['line']) && !isset($x68->properties['column'])) {$x68->properties['file'] = '<image>/02_object.js';$x68->properties['line'] = 19;$x68->properties['column'] = 9;$x68->attributes['file'] = $x68->attributes['line'] = $x68->attributes['column'] = 0; }
throw new JSException($x68, 19, 9, '<image>/02_object.js');
}
$x65 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x66 = $x65($global, $x57, $_TypeError, array('Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x58 = $x66;
if (is_object($x58) && $x58 !== JS::$undefined) { $x57 = $x58; }
if (isset($x57->class) && $x57->class === 'Error' && !isset($x57->properties['file']) && !isset($x57->properties['line']) && !isset($x57->properties['column'])) {$x57->properties['file'] = '<image>/02_object.js';$x57->properties['line'] = 19;$x57->properties['column'] = 3;$x57->attributes['file'] = $x57->attributes['line'] = $x57->attributes['column'] = 0; }
throw new JSException($x57, 19, 3, '<image>/02_object.js');;
};
if (JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties) || array_key_exists($_p,$_o->attributes), $global)), $global)) {

return JS::$undefined;;
};
$x69 = clone JS::$objectTemplate;
$scope->properties['desc'] = JS::$undefined; $_desc =& $scope->properties['desc'];
$Udesc = FALSE;
$_desc = $x69;
if (JS::toBoolean(array_key_exists($_p,$_o->properties), $global)) {
unset($x70, $W70, $S70, $U70);
$x71 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_o, JS::toString($_p, $global), 29, 17, '<image>/02_object.js');
$x70 =& $x71[0]; list(,$W70,$S70,$U70) = $x71;
$x72 = JS::toString('value', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x73 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 29, 14, '<image>/02_object.js');
$_TypeError =& $x73[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x73;
$x74 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x75 = $x74($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x75->class) && $x75->class === 'Error' && !isset($x75->properties['file']) && !isset($x75->properties['line']) && !isset($x75->properties['column'])) {$x75->properties['file'] = '<image>/02_object.js';$x75->properties['line'] = 29;$x75->properties['column'] = 14;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 29, 14, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x76, $W76, $S76, $U76);
$x77 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x72, $global), 29, 14, '<image>/02_object.js');
$x76 =& $x77[0]; list(,$W76,$S76,$U76) = $x77;
if ($U76 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x72] = $x76; $x76 =& $_desc->properties[$x72]; $_desc->attributes[$x72] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U76 = FALSE; $W76 = TRUE; }
if (isset($_desc->class) && $_desc->class === 'Array') {  if (isset($_desc->properties['length']) && $_desc->properties['length'] !== JS::$undefined) { $x79 = $_desc->properties['length']; }  else { $x79 = 0; } }
if (isset($S76)) {
$x80 = $S76->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x81 = $x80($global, $_desc, $S76, array($x70), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x78 = $x81;
} else {
if (!$U76) {$x78 = $x70;if ($W76) { $x76 = $x70; }  }
else { $x78 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array') {if (is_int('value') && 'value' >= $_desc->properties['length']) { $_desc->properties['length'] = 'value' + 1; }else if ($x72 === 'length' && is_int($x70) && $x79 > $x70) {  for ($i = $x70; $i < $x79; ++$i) {  unset($_desc->properties[$i], $_desc->attributes[$i]); }}};
$x82 = JS::toBoolean($_o->attributes[$_p] & JS::WRITABLE, $global);
$x83 = JS::toString('writable', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x84 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 30, 17, '<image>/02_object.js');
$_TypeError =& $x84[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x84;
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x86 = $x85($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/02_object.js';$x86->properties['line'] = 30;$x86->properties['column'] = 17;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 30, 17, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x87, $W87, $S87, $U87);
$x88 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x83, $global), 30, 17, '<image>/02_object.js');
$x87 =& $x88[0]; list(,$W87,$S87,$U87) = $x88;
if ($U87 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x83] = $x87; $x87 =& $_desc->properties[$x83]; $_desc->attributes[$x83] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U87 = FALSE; $W87 = TRUE; }
if (isset($_desc->class) && $_desc->class === 'Array') {  if (isset($_desc->properties['length']) && $_desc->properties['length'] !== JS::$undefined) { $x90 = $_desc->properties['length']; }  else { $x90 = 0; } }
if (isset($S87)) {
$x91 = $S87->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x92 = $x91($global, $_desc, $S87, array($x82), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x89 = $x92;
} else {
if (!$U87) {$x89 = $x82;if ($W87) { $x87 = $x82; }  }
else { $x89 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array') {if (is_int('writable') && 'writable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'writable' + 1; }else if ($x83 === 'length' && is_int($x82) && $x90 > $x82) {  for ($i = $x82; $i < $x90; ++$i) {  unset($_desc->properties[$i], $_desc->attributes[$i]); }}};;
}
else {
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_GETTER, $global)) {
$x93 = JS::toString('get', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x94 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 34, 13, '<image>/02_object.js');
$_TypeError =& $x94[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x94;
$x95 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x96 = $x95($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x96->class) && $x96->class === 'Error' && !isset($x96->properties['file']) && !isset($x96->properties['line']) && !isset($x96->properties['column'])) {$x96->properties['file'] = '<image>/02_object.js';$x96->properties['line'] = 34;$x96->properties['column'] = 13;$x96->attributes['file'] = $x96->attributes['line'] = $x96->attributes['column'] = 0; }
throw new JSException($x96, 34, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x97, $W97, $S97, $U97);
$x98 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x93, $global), 34, 13, '<image>/02_object.js');
$x97 =& $x98[0]; list(,$W97,$S97,$U97) = $x98;
if ($U97 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x93] = $x97; $x97 =& $_desc->properties[$x93]; $_desc->attributes[$x93] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U97 = FALSE; $W97 = TRUE; }
if (isset($_desc->class) && $_desc->class === 'Array') {  if (isset($_desc->properties['length']) && $_desc->properties['length'] !== JS::$undefined) { $x100 = $_desc->properties['length']; }  else { $x100 = 0; } }
if (isset($S97)) {
$x101 = $S97->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x102 = $x101($global, $_desc, $S97, array($_o->getters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x99 = $x102;
} else {
if (!$U97) {$x99 = $_o->getters[$_p];if ($W97) { $x97 = $_o->getters[$_p]; }  }
else { $x99 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array') {if (is_int('get') && 'get' >= $_desc->properties['length']) { $_desc->properties['length'] = 'get' + 1; }else if ($x93 === 'length' && is_int($_o->getters[$_p]) && $x100 > $_o->getters[$_p]) {  for ($i = $_o->getters[$_p]; $i < $x100; ++$i) {  unset($_desc->properties[$i], $_desc->attributes[$i]); }}};
};
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_SETTER, $global)) {
$x103 = JS::toString('set', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x104 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 38, 13, '<image>/02_object.js');
$_TypeError =& $x104[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x104;
$x105 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x106 = $x105($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x106->class) && $x106->class === 'Error' && !isset($x106->properties['file']) && !isset($x106->properties['line']) && !isset($x106->properties['column'])) {$x106->properties['file'] = '<image>/02_object.js';$x106->properties['line'] = 38;$x106->properties['column'] = 13;$x106->attributes['file'] = $x106->attributes['line'] = $x106->attributes['column'] = 0; }
throw new JSException($x106, 38, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x107, $W107, $S107, $U107);
$x108 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x103, $global), 38, 13, '<image>/02_object.js');
$x107 =& $x108[0]; list(,$W107,$S107,$U107) = $x108;
if ($U107 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x103] = $x107; $x107 =& $_desc->properties[$x103]; $_desc->attributes[$x103] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U107 = FALSE; $W107 = TRUE; }
if (isset($_desc->class) && $_desc->class === 'Array') {  if (isset($_desc->properties['length']) && $_desc->properties['length'] !== JS::$undefined) { $x110 = $_desc->properties['length']; }  else { $x110 = 0; } }
if (isset($S107)) {
$x111 = $S107->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x112 = $x111($global, $_desc, $S107, array($_o->setters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x109 = $x112;
} else {
if (!$U107) {$x109 = $_o->setters[$_p];if ($W107) { $x107 = $_o->setters[$_p]; }  }
else { $x109 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array') {if (is_int('set') && 'set' >= $_desc->properties['length']) { $_desc->properties['length'] = 'set' + 1; }else if ($x103 === 'length' && is_int($_o->setters[$_p]) && $x110 > $_o->setters[$_p]) {  for ($i = $_o->setters[$_p]; $i < $x110; ++$i) {  unset($_desc->properties[$i], $_desc->attributes[$i]); }}};
};;
};
$x113 = JS::toBoolean($_o->attributes[$_p] & JS::ENUMERABLE, $global);
$x114 = JS::toString('enumerable', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x115 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 42, 18, '<image>/02_object.js');
$_TypeError =& $x115[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x115;
$x116 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x117 = $x116($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x117->class) && $x117->class === 'Error' && !isset($x117->properties['file']) && !isset($x117->properties['line']) && !isset($x117->properties['column'])) {$x117->properties['file'] = '<image>/02_object.js';$x117->properties['line'] = 42;$x117->properties['column'] = 18;$x117->attributes['file'] = $x117->attributes['line'] = $x117->attributes['column'] = 0; }
throw new JSException($x117, 42, 18, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x118, $W118, $S118, $U118);
$x119 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x114, $global), 42, 18, '<image>/02_object.js');
$x118 =& $x119[0]; list(,$W118,$S118,$U118) = $x119;
if ($U118 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x114] = $x118; $x118 =& $_desc->properties[$x114]; $_desc->attributes[$x114] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U118 = FALSE; $W118 = TRUE; }
if (isset($_desc->class) && $_desc->class === 'Array') {  if (isset($_desc->properties['length']) && $_desc->properties['length'] !== JS::$undefined) { $x121 = $_desc->properties['length']; }  else { $x121 = 0; } }
if (isset($S118)) {
$x122 = $S118->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x123 = $x122($global, $_desc, $S118, array($x113), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x120 = $x123;
} else {
if (!$U118) {$x120 = $x113;if ($W118) { $x118 = $x113; }  }
else { $x120 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array') {if (is_int('enumerable') && 'enumerable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'enumerable' + 1; }else if ($x114 === 'length' && is_int($x113) && $x121 > $x113) {  for ($i = $x113; $i < $x121; ++$i) {  unset($_desc->properties[$i], $_desc->attributes[$i]); }}};
$x124 = JS::toBoolean($_o->attributes[$_p] & JS::CONFIGURABLE, $global);
$x125 = JS::toString('configurable', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x126 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 20, '<image>/02_object.js');
$_TypeError =& $x126[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x126;
$x127 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x128 = $x127($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x128->class) && $x128->class === 'Error' && !isset($x128->properties['file']) && !isset($x128->properties['line']) && !isset($x128->properties['column'])) {$x128->properties['file'] = '<image>/02_object.js';$x128->properties['line'] = 43;$x128->properties['column'] = 20;$x128->attributes['file'] = $x128->attributes['line'] = $x128->attributes['column'] = 0; }
throw new JSException($x128, 43, 20, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x129, $W129, $S129, $U129);
$x130 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x125, $global), 43, 20, '<image>/02_object.js');
$x129 =& $x130[0]; list(,$W129,$S129,$U129) = $x130;
if ($U129 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x125] = $x129; $x129 =& $_desc->properties[$x125]; $_desc->attributes[$x125] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U129 = FALSE; $W129 = TRUE; }
if (isset($_desc->class) && $_desc->class === 'Array') {  if (isset($_desc->properties['length']) && $_desc->properties['length'] !== JS::$undefined) { $x132 = $_desc->properties['length']; }  else { $x132 = 0; } }
if (isset($S129)) {
$x133 = $S129->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x134 = $x133($global, $_desc, $S129, array($x124), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x131 = $x134;
} else {
if (!$U129) {$x131 = $x124;if ($W129) { $x129 = $x124; }  }
else { $x131 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array') {if (is_int('configurable') && 'configurable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'configurable' + 1; }else if ($x125 === 'length' && is_int($x124) && $x132 > $x124) {  for ($i = $x124; $i < $x132; ++$i) {  unset($_desc->properties[$i], $_desc->attributes[$i]); }}};
return $_desc;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x49=&$scope->properties[\'arguments\'];$x49->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x49->properties[$i]=$args[$i];$x49->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;$x51=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x50=$x51;if(!JS::toBoolean($x50,$global)){$x54=$_o;$x54=($x54===JS::$undefined?\'undefined\':(is_int($x54)||is_float($x54)?\'number\':(is_bool($x54)?\'boolean\':(is_string($x54)?\'string\':(is_object($x54)&&isset($x54->call)?\'function\':\'object\')))));$x53=!(((gettype($x54)===gettype(\'object\')&&$x54===\'object\'))||(((is_float($x54)||is_int($x54))&&(is_float(\'object\')||is_int(\'object\')))&&$x54==\'object\'));$x52=$x53;if(JS::toBoolean($x52,$global)){$x56=$_o;$x56=($x56===JS::$undefined?\'undefined\':(is_int($x56)||is_float($x56)?\'number\':(is_bool($x56)?\'boolean\':(is_string($x56)?\'string\':(is_object($x56)&&isset($x56->call)?\'function\':\'object\')))));$x55=!(((gettype($x56)===gettype(\'function\')&&$x56===\'function\'))||(((is_float($x56)||is_int($x56))&&(is_float(\'function\')||is_int(\'function\')))&&$x56==\'function\'));$x52=$x55;}$x50=$x52;}if(JS::toBoolean($x50,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x59=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),19,13,\'<image>/02_object.js\');$_TypeError=&$x59[0];list(,$WTypeError,$STypeError,$UTypeError)=$x59;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x60=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),19,13,\'<image>/02_object.js\');$_ReferenceError=&$x60[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x60;$x61=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,13);$x62=$x61($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x62->class)&&$x62->class===\'Error\'&&!isset($x62->properties[\'file\'])&&!isset($x62->properties[\'line\'])&&!isset($x62->properties[\'column\'])){$x62->properties[\'file\']=\'<image>/02_object.js\';$x62->properties[\'line\']=19;$x62->properties[\'column\']=13;$x62->attributes[\'file\']=$x62->attributes[\'line\']=$x62->attributes[\'column\']=0;}throw new JSException($x62,19,13,\'<image>/02_object.js\');}$x57=clone JS::$objectTemplate;unset($x63,$W63,$S63,$U63);$x64=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),19,9,\'<image>/02_object.js\');$x63=&$x64[0];list(,$W63,$S63,$U63)=$x64;$x58=$x63;$x57->prototype=$x58;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x67=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x68=$x67($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x68->class)&&$x68->class===\'Error\'&&!isset($x68->properties[\'file\'])&&!isset($x68->properties[\'line\'])&&!isset($x68->properties[\'column\'])){$x68->properties[\'file\']=\'<image>/02_object.js\';$x68->properties[\'line\']=19;$x68->properties[\'column\']=9;$x68->attributes[\'file\']=$x68->attributes[\'line\']=$x68->attributes[\'column\']=0;}throw new JSException($x68,19,9,\'<image>/02_object.js\');}$x65=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x66=$x65($global,$x57,$_TypeError,array(\'Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x58=$x66;if(is_object($x58)&&$x58!==JS::$undefined){$x57=$x58;}if(isset($x57->class)&&$x57->class===\'Error\'&&!isset($x57->properties[\'file\'])&&!isset($x57->properties[\'line\'])&&!isset($x57->properties[\'column\'])){$x57->properties[\'file\']=\'<image>/02_object.js\';$x57->properties[\'line\']=19;$x57->properties[\'column\']=3;$x57->attributes[\'file\']=$x57->attributes[\'line\']=$x57->attributes[\'column\']=0;}throw new JSException($x57,19,3,\'<image>/02_object.js\');}if(JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties)||array_key_exists($_p,$_o->attributes),$global)),$global)){return JS::$undefined;}$x69=clone JS::$objectTemplate;$scope->properties[\'desc\']=JS::$undefined;$_desc=&$scope->properties[\'desc\'];$Udesc=FALSE;$_desc=$x69;if(JS::toBoolean(array_key_exists($_p,$_o->properties),$global)){unset($x70,$W70,$S70,$U70);$x71=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_o,JS::toString($_p,$global),29,17,\'<image>/02_object.js\');$x70=&$x71[0];list(,$W70,$S70,$U70)=$x71;$x72=JS::toString(\'value\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x73=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),29,14,\'<image>/02_object.js\');$_TypeError=&$x73[0];list(,$WTypeError,$STypeError,$UTypeError)=$x73;$x74=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x75=$x74($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x75->class)&&$x75->class===\'Error\'&&!isset($x75->properties[\'file\'])&&!isset($x75->properties[\'line\'])&&!isset($x75->properties[\'column\'])){$x75->properties[\'file\']=\'<image>/02_object.js\';$x75->properties[\'line\']=29;$x75->properties[\'column\']=14;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,29,14,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x76,$W76,$S76,$U76);$x77=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x72,$global),29,14,\'<image>/02_object.js\');$x76=&$x77[0];list(,$W76,$S76,$U76)=$x77;if($U76&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x72]=$x76;$x76=&$_desc->properties[$x72];$_desc->attributes[$x72]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U76=FALSE;$W76=TRUE;}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(isset($_desc->properties[\'length\'])&&$_desc->properties[\'length\']!==JS::$undefined){$x79=$_desc->properties[\'length\'];}else{$x79=0;}}if(isset($S76)){$x80=$S76->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x81=$x80($global,$_desc,$S76,array($x70),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x78=$x81;}else{if(!$U76){$x78=$x70;if($W76){$x76=$x70;}}else{$x78=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(is_int(\'value\')&&\'value\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'value\'+1;}else if($x72===\'length\'&&is_int($x70)&&$x79>$x70){for($i=$x70;$i<$x79;++$i){unset($_desc->properties[$i],$_desc->attributes[$i]);}}}$x82=JS::toBoolean($_o->attributes[$_p]&JS::WRITABLE,$global);$x83=JS::toString(\'writable\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x84=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),30,17,\'<image>/02_object.js\');$_TypeError=&$x84[0];list(,$WTypeError,$STypeError,$UTypeError)=$x84;$x85=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x86=$x85($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x86->class)&&$x86->class===\'Error\'&&!isset($x86->properties[\'file\'])&&!isset($x86->properties[\'line\'])&&!isset($x86->properties[\'column\'])){$x86->properties[\'file\']=\'<image>/02_object.js\';$x86->properties[\'line\']=30;$x86->properties[\'column\']=17;$x86->attributes[\'file\']=$x86->attributes[\'line\']=$x86->attributes[\'column\']=0;}throw new JSException($x86,30,17,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x87,$W87,$S87,$U87);$x88=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x83,$global),30,17,\'<image>/02_object.js\');$x87=&$x88[0];list(,$W87,$S87,$U87)=$x88;if($U87&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x83]=$x87;$x87=&$_desc->properties[$x83];$_desc->attributes[$x83]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U87=FALSE;$W87=TRUE;}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(isset($_desc->properties[\'length\'])&&$_desc->properties[\'length\']!==JS::$undefined){$x90=$_desc->properties[\'length\'];}else{$x90=0;}}if(isset($S87)){$x91=$S87->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x92=$x91($global,$_desc,$S87,array($x82),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x89=$x92;}else{if(!$U87){$x89=$x82;if($W87){$x87=$x82;}}else{$x89=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(is_int(\'writable\')&&\'writable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'writable\'+1;}else if($x83===\'length\'&&is_int($x82)&&$x90>$x82){for($i=$x82;$i<$x90;++$i){unset($_desc->properties[$i],$_desc->attributes[$i]);}}}}else{if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_GETTER,$global)){$x93=JS::toString(\'get\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x94=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),34,13,\'<image>/02_object.js\');$_TypeError=&$x94[0];list(,$WTypeError,$STypeError,$UTypeError)=$x94;$x95=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x96=$x95($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x96->class)&&$x96->class===\'Error\'&&!isset($x96->properties[\'file\'])&&!isset($x96->properties[\'line\'])&&!isset($x96->properties[\'column\'])){$x96->properties[\'file\']=\'<image>/02_object.js\';$x96->properties[\'line\']=34;$x96->properties[\'column\']=13;$x96->attributes[\'file\']=$x96->attributes[\'line\']=$x96->attributes[\'column\']=0;}throw new JSException($x96,34,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x97,$W97,$S97,$U97);$x98=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x93,$global),34,13,\'<image>/02_object.js\');$x97=&$x98[0];list(,$W97,$S97,$U97)=$x98;if($U97&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x93]=$x97;$x97=&$_desc->properties[$x93];$_desc->attributes[$x93]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U97=FALSE;$W97=TRUE;}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(isset($_desc->properties[\'length\'])&&$_desc->properties[\'length\']!==JS::$undefined){$x100=$_desc->properties[\'length\'];}else{$x100=0;}}if(isset($S97)){$x101=$S97->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x102=$x101($global,$_desc,$S97,array($_o->getters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x99=$x102;}else{if(!$U97){$x99=$_o->getters[$_p];if($W97){$x97=$_o->getters[$_p];}}else{$x99=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(is_int(\'get\')&&\'get\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'get\'+1;}else if($x93===\'length\'&&is_int($_o->getters[$_p])&&$x100>$_o->getters[$_p]){for($i=$_o->getters[$_p];$i<$x100;++$i){unset($_desc->properties[$i],$_desc->attributes[$i]);}}}}if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_SETTER,$global)){$x103=JS::toString(\'set\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x104=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),38,13,\'<image>/02_object.js\');$_TypeError=&$x104[0];list(,$WTypeError,$STypeError,$UTypeError)=$x104;$x105=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x106=$x105($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x106->class)&&$x106->class===\'Error\'&&!isset($x106->properties[\'file\'])&&!isset($x106->properties[\'line\'])&&!isset($x106->properties[\'column\'])){$x106->properties[\'file\']=\'<image>/02_object.js\';$x106->properties[\'line\']=38;$x106->properties[\'column\']=13;$x106->attributes[\'file\']=$x106->attributes[\'line\']=$x106->attributes[\'column\']=0;}throw new JSException($x106,38,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x107,$W107,$S107,$U107);$x108=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x103,$global),38,13,\'<image>/02_object.js\');$x107=&$x108[0];list(,$W107,$S107,$U107)=$x108;if($U107&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x103]=$x107;$x107=&$_desc->properties[$x103];$_desc->attributes[$x103]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U107=FALSE;$W107=TRUE;}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(isset($_desc->properties[\'length\'])&&$_desc->properties[\'length\']!==JS::$undefined){$x110=$_desc->properties[\'length\'];}else{$x110=0;}}if(isset($S107)){$x111=$S107->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x112=$x111($global,$_desc,$S107,array($_o->setters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x109=$x112;}else{if(!$U107){$x109=$_o->setters[$_p];if($W107){$x107=$_o->setters[$_p];}}else{$x109=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(is_int(\'set\')&&\'set\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'set\'+1;}else if($x103===\'length\'&&is_int($_o->setters[$_p])&&$x110>$_o->setters[$_p]){for($i=$_o->setters[$_p];$i<$x110;++$i){unset($_desc->properties[$i],$_desc->attributes[$i]);}}}}}$x113=JS::toBoolean($_o->attributes[$_p]&JS::ENUMERABLE,$global);$x114=JS::toString(\'enumerable\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x115=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),42,18,\'<image>/02_object.js\');$_TypeError=&$x115[0];list(,$WTypeError,$STypeError,$UTypeError)=$x115;$x116=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x117=$x116($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x117->class)&&$x117->class===\'Error\'&&!isset($x117->properties[\'file\'])&&!isset($x117->properties[\'line\'])&&!isset($x117->properties[\'column\'])){$x117->properties[\'file\']=\'<image>/02_object.js\';$x117->properties[\'line\']=42;$x117->properties[\'column\']=18;$x117->attributes[\'file\']=$x117->attributes[\'line\']=$x117->attributes[\'column\']=0;}throw new JSException($x117,42,18,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x118,$W118,$S118,$U118);$x119=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x114,$global),42,18,\'<image>/02_object.js\');$x118=&$x119[0];list(,$W118,$S118,$U118)=$x119;if($U118&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x114]=$x118;$x118=&$_desc->properties[$x114];$_desc->attributes[$x114]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U118=FALSE;$W118=TRUE;}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(isset($_desc->properties[\'length\'])&&$_desc->properties[\'length\']!==JS::$undefined){$x121=$_desc->properties[\'length\'];}else{$x121=0;}}if(isset($S118)){$x122=$S118->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x123=$x122($global,$_desc,$S118,array($x113),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x120=$x123;}else{if(!$U118){$x120=$x113;if($W118){$x118=$x113;}}else{$x120=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(is_int(\'enumerable\')&&\'enumerable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'enumerable\'+1;}else if($x114===\'length\'&&is_int($x113)&&$x121>$x113){for($i=$x113;$i<$x121;++$i){unset($_desc->properties[$i],$_desc->attributes[$i]);}}}$x124=JS::toBoolean($_o->attributes[$_p]&JS::CONFIGURABLE,$global);$x125=JS::toString(\'configurable\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x126=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,20,\'<image>/02_object.js\');$_TypeError=&$x126[0];list(,$WTypeError,$STypeError,$UTypeError)=$x126;$x127=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x128=$x127($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x128->class)&&$x128->class===\'Error\'&&!isset($x128->properties[\'file\'])&&!isset($x128->properties[\'line\'])&&!isset($x128->properties[\'column\'])){$x128->properties[\'file\']=\'<image>/02_object.js\';$x128->properties[\'line\']=43;$x128->properties[\'column\']=20;$x128->attributes[\'file\']=$x128->attributes[\'line\']=$x128->attributes[\'column\']=0;}throw new JSException($x128,43,20,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x129,$W129,$S129,$U129);$x130=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x125,$global),43,20,\'<image>/02_object.js\');$x129=&$x130[0];list(,$W129,$S129,$U129)=$x130;if($U129&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x125]=$x129;$x129=&$_desc->properties[$x125];$_desc->attributes[$x125]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U129=FALSE;$W129=TRUE;}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(isset($_desc->properties[\'length\'])&&$_desc->properties[\'length\']!==JS::$undefined){$x132=$_desc->properties[\'length\'];}else{$x132=0;}}if(isset($S129)){$x133=$S129->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x134=$x133($global,$_desc,$S129,array($x124),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x131=$x134;}else{if(!$U129){$x131=$x124;if($W129){$x129=$x124;}}else{$x131=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'){if(is_int(\'configurable\')&&\'configurable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'configurable\'+1;}else if($x125===\'length\'&&is_int($x124)&&$x132>$x124){for($i=$x124;$i<$x132;++$i){unset($_desc->properties[$i],$_desc->attributes[$i]);}}}return$_desc;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x147 =& $scope->properties['arguments'];
$x147->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x147->properties[$i] = $args[$i];
$x147->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x149 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x148 = $x149;
if (!JS::toBoolean($x148, $global)) {
$x152 = $_o;
$x152 = ($x152 === JS::$undefined ? 'undefined' : (is_int($x152) || is_float($x152) ? 'number' : (is_bool($x152) ? 'boolean' : (is_string($x152) ? 'string' : (is_object($x152) && isset($x152->call) ? 'function' : 'object')))));
$x151 = !(((gettype($x152) === gettype('object') && $x152 === 'object'))|| (((is_float($x152) || is_int($x152)) && (is_float('object') || is_int('object'))) && $x152 == 'object'));
$x150 = $x151;
if (JS::toBoolean($x150, $global)) {
$x154 = $_o;
$x154 = ($x154 === JS::$undefined ? 'undefined' : (is_int($x154) || is_float($x154) ? 'number' : (is_bool($x154) ? 'boolean' : (is_string($x154) ? 'string' : (is_object($x154) && isset($x154->call) ? 'function' : 'object')))));
$x153 = !(((gettype($x154) === gettype('function') && $x154 === 'function'))|| (((is_float($x154) || is_int($x154)) && (is_float('function') || is_int('function'))) && $x154 == 'function'));
$x150 = $x153; }
$x148 = $x150; }
if (JS::toBoolean($x148, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 50, 13, '<image>/02_object.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x158 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 50, 13, '<image>/02_object.js');
$_ReferenceError =& $x158[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x158;
$x159 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 13);
$x160 = $x159($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x160->class) && $x160->class === 'Error' && !isset($x160->properties['file']) && !isset($x160->properties['line']) && !isset($x160->properties['column'])) {$x160->properties['file'] = '<image>/02_object.js';$x160->properties['line'] = 50;$x160->properties['column'] = 13;$x160->attributes['file'] = $x160->attributes['line'] = $x160->attributes['column'] = 0; }
throw new JSException($x160, 50, 13, '<image>/02_object.js');
}
$x155 = clone JS::$objectTemplate;
unset($x161, $W161, $S161, $U161);
$x162 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 50, 9, '<image>/02_object.js');
$x161 =& $x162[0]; list(,$W161,$S161,$U161) = $x162;
$x156 = $x161;
$x155->prototype = $x156;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x166 = $x165($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x166->class) && $x166->class === 'Error' && !isset($x166->properties['file']) && !isset($x166->properties['line']) && !isset($x166->properties['column'])) {$x166->properties['file'] = '<image>/02_object.js';$x166->properties['line'] = 50;$x166->properties['column'] = 9;$x166->attributes['file'] = $x166->attributes['line'] = $x166->attributes['column'] = 0; }
throw new JSException($x166, 50, 9, '<image>/02_object.js');
}
$x163 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x164 = $x163($global, $x155, $_TypeError, array('Object.getOwnPropertyNames(): Cannot get property names of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x156 = $x164;
if (is_object($x156) && $x156 !== JS::$undefined) { $x155 = $x156; }
if (isset($x155->class) && $x155->class === 'Error' && !isset($x155->properties['file']) && !isset($x155->properties['line']) && !isset($x155->properties['column'])) {$x155->properties['file'] = '<image>/02_object.js';$x155->properties['line'] = 50;$x155->properties['column'] = 3;$x155->attributes['file'] = $x155->attributes['line'] = $x155->attributes['column'] = 0; }
throw new JSException($x155, 50, 3, '<image>/02_object.js');;
};
$x167 = clone JS::$arrayTemplate;
$x167->properties['length'] = 0;
$x167->attributes['length'] = JS::WRITABLE;
$scope->properties['names'] = JS::$undefined; $_names =& $scope->properties['names'];
$Unames = FALSE;
$_names = $x167;
foreach (array_unique(array_merge(array_keys($_o->properties), array_keys($_o->attributes))) as $i => $name) {;
if ($_names === JS::$undefined || $_names === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x169 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 56, 13, '<image>/02_object.js');
$_TypeError =& $x169[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x169;
$x170 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x171 = $x170($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x171->class) && $x171->class === 'Error' && !isset($x171->properties['file']) && !isset($x171->properties['line']) && !isset($x171->properties['column'])) {$x171->properties['file'] = '<image>/02_object.js';$x171->properties['line'] = 56;$x171->properties['column'] = 13;$x171->attributes['file'] = $x171->attributes['line'] = $x171->attributes['column'] = 0; }
throw new JSException($x171, 56, 13, '<image>/02_object.js');
}
$x168 = JS::toObject($_names, $global);
unset($x172, $W172, $S172, $U172);
$x173 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x168, JS::toString('push', $global), 56, 13, '<image>/02_object.js');
$x172 =& $x173[0]; list(,$W172,$S172,$U172) = $x173;
if (!(is_object($x172) && isset($x172->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x176 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 56, 13, '<image>/02_object.js');
$_TypeError =& $x176[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x176;
$x177 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x178 = $x177($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x178->class) && $x178->class === 'Error' && !isset($x178->properties['file']) && !isset($x178->properties['line']) && !isset($x178->properties['column'])) {$x178->properties['file'] = '<image>/02_object.js';$x178->properties['line'] = 56;$x178->properties['column'] = 13;$x178->attributes['file'] = $x178->attributes['line'] = $x178->attributes['column'] = 0; }
throw new JSException($x178, 56, 13, '<image>/02_object.js');
}
$x174 = $x172->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x175 = $x174($global, $x168, $x172, array($name), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_names;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x147=&$scope->properties[\'arguments\'];$x147->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x147->properties[$i]=$args[$i];$x147->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x149=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x148=$x149;if(!JS::toBoolean($x148,$global)){$x152=$_o;$x152=($x152===JS::$undefined?\'undefined\':(is_int($x152)||is_float($x152)?\'number\':(is_bool($x152)?\'boolean\':(is_string($x152)?\'string\':(is_object($x152)&&isset($x152->call)?\'function\':\'object\')))));$x151=!(((gettype($x152)===gettype(\'object\')&&$x152===\'object\'))||(((is_float($x152)||is_int($x152))&&(is_float(\'object\')||is_int(\'object\')))&&$x152==\'object\'));$x150=$x151;if(JS::toBoolean($x150,$global)){$x154=$_o;$x154=($x154===JS::$undefined?\'undefined\':(is_int($x154)||is_float($x154)?\'number\':(is_bool($x154)?\'boolean\':(is_string($x154)?\'string\':(is_object($x154)&&isset($x154->call)?\'function\':\'object\')))));$x153=!(((gettype($x154)===gettype(\'function\')&&$x154===\'function\'))||(((is_float($x154)||is_int($x154))&&(is_float(\'function\')||is_int(\'function\')))&&$x154==\'function\'));$x150=$x153;}$x148=$x150;}if(JS::toBoolean($x148,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x157=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),50,13,\'<image>/02_object.js\');$_TypeError=&$x157[0];list(,$WTypeError,$STypeError,$UTypeError)=$x157;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x158=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),50,13,\'<image>/02_object.js\');$_ReferenceError=&$x158[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x158;$x159=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,13);$x160=$x159($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x160->class)&&$x160->class===\'Error\'&&!isset($x160->properties[\'file\'])&&!isset($x160->properties[\'line\'])&&!isset($x160->properties[\'column\'])){$x160->properties[\'file\']=\'<image>/02_object.js\';$x160->properties[\'line\']=50;$x160->properties[\'column\']=13;$x160->attributes[\'file\']=$x160->attributes[\'line\']=$x160->attributes[\'column\']=0;}throw new JSException($x160,50,13,\'<image>/02_object.js\');}$x155=clone JS::$objectTemplate;unset($x161,$W161,$S161,$U161);$x162=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),50,9,\'<image>/02_object.js\');$x161=&$x162[0];list(,$W161,$S161,$U161)=$x162;$x156=$x161;$x155->prototype=$x156;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x165=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x166=$x165($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x166->class)&&$x166->class===\'Error\'&&!isset($x166->properties[\'file\'])&&!isset($x166->properties[\'line\'])&&!isset($x166->properties[\'column\'])){$x166->properties[\'file\']=\'<image>/02_object.js\';$x166->properties[\'line\']=50;$x166->properties[\'column\']=9;$x166->attributes[\'file\']=$x166->attributes[\'line\']=$x166->attributes[\'column\']=0;}throw new JSException($x166,50,9,\'<image>/02_object.js\');}$x163=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x164=$x163($global,$x155,$_TypeError,array(\'Object.getOwnPropertyNames(): Cannot get property names of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x156=$x164;if(is_object($x156)&&$x156!==JS::$undefined){$x155=$x156;}if(isset($x155->class)&&$x155->class===\'Error\'&&!isset($x155->properties[\'file\'])&&!isset($x155->properties[\'line\'])&&!isset($x155->properties[\'column\'])){$x155->properties[\'file\']=\'<image>/02_object.js\';$x155->properties[\'line\']=50;$x155->properties[\'column\']=3;$x155->attributes[\'file\']=$x155->attributes[\'line\']=$x155->attributes[\'column\']=0;}throw new JSException($x155,50,3,\'<image>/02_object.js\');}$x167=clone JS::$arrayTemplate;$x167->properties[\'length\']=0;$x167->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'names\']=JS::$undefined;$_names=&$scope->properties[\'names\'];$Unames=FALSE;$_names=$x167;foreach(array_unique(array_merge(array_keys($_o->properties),array_keys($_o->attributes)))as$i=>$name){;if($_names===JS::$undefined||$_names===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x169=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,13,\'<image>/02_object.js\');$_TypeError=&$x169[0];list(,$WTypeError,$STypeError,$UTypeError)=$x169;$x170=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x171=$x170($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x171->class)&&$x171->class===\'Error\'&&!isset($x171->properties[\'file\'])&&!isset($x171->properties[\'line\'])&&!isset($x171->properties[\'column\'])){$x171->properties[\'file\']=\'<image>/02_object.js\';$x171->properties[\'line\']=56;$x171->properties[\'column\']=13;$x171->attributes[\'file\']=$x171->attributes[\'line\']=$x171->attributes[\'column\']=0;}throw new JSException($x171,56,13,\'<image>/02_object.js\');}$x168=JS::toObject($_names,$global);unset($x172,$W172,$S172,$U172);$x173=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x168,JS::toString(\'push\',$global),56,13,\'<image>/02_object.js\');$x172=&$x173[0];list(,$W172,$S172,$U172)=$x173;if(!(is_object($x172)&&isset($x172->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x176=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,13,\'<image>/02_object.js\');$_TypeError=&$x176[0];list(,$WTypeError,$STypeError,$UTypeError)=$x176;$x177=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x178=$x177($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x178->class)&&$x178->class===\'Error\'&&!isset($x178->properties[\'file\'])&&!isset($x178->properties[\'line\'])&&!isset($x178->properties[\'column\'])){$x178->properties[\'file\']=\'<image>/02_object.js\';$x178->properties[\'line\']=56;$x178->properties[\'column\']=13;$x178->attributes[\'file\']=$x178->attributes[\'line\']=$x178->attributes[\'column\']=0;}throw new JSException($x178,56,13,\'<image>/02_object.js\');}$x174=$x172->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x175=$x174($global,$x168,$x172,array($name),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_names;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x191 =& $scope->properties['arguments'];
$x191->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x191->properties[$i] = $args[$i];
$x191->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x194 = $_o;
$x194 = ($x194 === JS::$undefined ? 'undefined' : (is_int($x194) || is_float($x194) ? 'number' : (is_bool($x194) ? 'boolean' : (is_string($x194) ? 'string' : (is_object($x194) && isset($x194->call) ? 'function' : 'object')))));
$x193 = !(((gettype($x194) === gettype('object') && $x194 === 'object'))|| (((is_float($x194) || is_int($x194)) && (is_float('object') || is_int('object'))) && $x194 == 'object'));
$x192 = $x193;
if (JS::toBoolean($x192, $global)) {
$x196 = $_o;
$x196 = ($x196 === JS::$undefined ? 'undefined' : (is_int($x196) || is_float($x196) ? 'number' : (is_bool($x196) ? 'boolean' : (is_string($x196) ? 'string' : (is_object($x196) && isset($x196->call) ? 'function' : 'object')))));
$x195 = !(((gettype($x196) === gettype('function') && $x196 === 'function'))|| (((is_float($x196) || is_int($x196)) && (is_float('function') || is_int('function'))) && $x196 == 'function'));
$x192 = $x195; }
if (JS::toBoolean($x192, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x199 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 64, 13, '<image>/02_object.js');
$_TypeError =& $x199[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x199;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x200 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 64, 13, '<image>/02_object.js');
$_ReferenceError =& $x200[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x200;
$x201 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 13);
$x202 = $x201($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x202->class) && $x202->class === 'Error' && !isset($x202->properties['file']) && !isset($x202->properties['line']) && !isset($x202->properties['column'])) {$x202->properties['file'] = '<image>/02_object.js';$x202->properties['line'] = 64;$x202->properties['column'] = 13;$x202->attributes['file'] = $x202->attributes['line'] = $x202->attributes['column'] = 0; }
throw new JSException($x202, 64, 13, '<image>/02_object.js');
}
$x197 = clone JS::$objectTemplate;
unset($x203, $W203, $S203, $U203);
$x204 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 64, 9, '<image>/02_object.js');
$x203 =& $x204[0]; list(,$W203,$S203,$U203) = $x204;
$x198 = $x203;
$x197->prototype = $x198;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x208 = $x207($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x208->class) && $x208->class === 'Error' && !isset($x208->properties['file']) && !isset($x208->properties['line']) && !isset($x208->properties['column'])) {$x208->properties['file'] = '<image>/02_object.js';$x208->properties['line'] = 64;$x208->properties['column'] = 9;$x208->attributes['file'] = $x208->attributes['line'] = $x208->attributes['column'] = 0; }
throw new JSException($x208, 64, 9, '<image>/02_object.js');
}
$x205 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x206 = $x205($global, $x197, $_TypeError, array('Object.create(): Cannot create object with non-object prototype.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x198 = $x206;
if (is_object($x198) && $x198 !== JS::$undefined) { $x197 = $x198; }
if (isset($x197->class) && $x197->class === 'Error' && !isset($x197->properties['file']) && !isset($x197->properties['line']) && !isset($x197->properties['column'])) {$x197->properties['file'] = '<image>/02_object.js';$x197->properties['line'] = 64;$x197->properties['column'] = 3;$x197->attributes['file'] = $x197->attributes['line'] = $x197->attributes['column'] = 0; }
throw new JSException($x197, 64, 3, '<image>/02_object.js');;
};
$x209 = clone JS::$objectTemplate;
$scope->properties['newObject'] = JS::$undefined; $_newObject =& $scope->properties['newObject'];
$UnewObject = FALSE;
$_newObject = $x209;
$_newObject->prototype =$_o;
if (JS::toBoolean(is_object($_properties) &&$_properties!== JS::$undefined, $global)) {
unset($_Object, $WObject, $SObject, $UObject);
$x210 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('Object', $global), 72, 3, '<image>/02_object.js');
$_Object =& $x210[0]; list(,$WObject,$SObject,$UObject) = $x210;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x211 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 3, '<image>/02_object.js');
$_ReferenceError =& $x211[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x211;
$x212 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 3);
$x213 = $x212($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x213->class) && $x213->class === 'Error' && !isset($x213->properties['file']) && !isset($x213->properties['line']) && !isset($x213->properties['column'])) {$x213->properties['file'] = '<image>/02_object.js';$x213->properties['line'] = 72;$x213->properties['column'] = 3;$x213->attributes['file'] = $x213->attributes['line'] = $x213->attributes['column'] = 0; }
throw new JSException($x213, 72, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x215 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 26, '<image>/02_object.js');
$_TypeError =& $x215[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x215;
$x216 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x217 = $x216($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x217->class) && $x217->class === 'Error' && !isset($x217->properties['file']) && !isset($x217->properties['line']) && !isset($x217->properties['column'])) {$x217->properties['file'] = '<image>/02_object.js';$x217->properties['line'] = 72;$x217->properties['column'] = 26;$x217->attributes['file'] = $x217->attributes['line'] = $x217->attributes['column'] = 0; }
throw new JSException($x217, 72, 26, '<image>/02_object.js');
}
$x214 = JS::toObject($_Object, $global);
unset($x218, $W218, $S218, $U218);
$x219 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x214, JS::toString('defineProperties', $global), 72, 26, '<image>/02_object.js');
$x218 =& $x219[0]; list(,$W218,$S218,$U218) = $x219;
if (!(is_object($x218) && isset($x218->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x222 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 26, '<image>/02_object.js');
$_TypeError =& $x222[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x222;
$x223 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x224 = $x223($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x224->class) && $x224->class === 'Error' && !isset($x224->properties['file']) && !isset($x224->properties['line']) && !isset($x224->properties['column'])) {$x224->properties['file'] = '<image>/02_object.js';$x224->properties['line'] = 72;$x224->properties['column'] = 26;$x224->attributes['file'] = $x224->attributes['line'] = $x224->attributes['column'] = 0; }
throw new JSException($x224, 72, 26, '<image>/02_object.js');
}
$x220 = $x218->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x221 = $x220($global, $x214, $x218, array($_newObject, $_properties), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newObject;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x191=&$scope->properties[\'arguments\'];$x191->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x191->properties[$i]=$args[$i];$x191->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x194=$_o;$x194=($x194===JS::$undefined?\'undefined\':(is_int($x194)||is_float($x194)?\'number\':(is_bool($x194)?\'boolean\':(is_string($x194)?\'string\':(is_object($x194)&&isset($x194->call)?\'function\':\'object\')))));$x193=!(((gettype($x194)===gettype(\'object\')&&$x194===\'object\'))||(((is_float($x194)||is_int($x194))&&(is_float(\'object\')||is_int(\'object\')))&&$x194==\'object\'));$x192=$x193;if(JS::toBoolean($x192,$global)){$x196=$_o;$x196=($x196===JS::$undefined?\'undefined\':(is_int($x196)||is_float($x196)?\'number\':(is_bool($x196)?\'boolean\':(is_string($x196)?\'string\':(is_object($x196)&&isset($x196->call)?\'function\':\'object\')))));$x195=!(((gettype($x196)===gettype(\'function\')&&$x196===\'function\'))||(((is_float($x196)||is_int($x196))&&(is_float(\'function\')||is_int(\'function\')))&&$x196==\'function\'));$x192=$x195;}if(JS::toBoolean($x192,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x199=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),64,13,\'<image>/02_object.js\');$_TypeError=&$x199[0];list(,$WTypeError,$STypeError,$UTypeError)=$x199;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x200=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),64,13,\'<image>/02_object.js\');$_ReferenceError=&$x200[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x200;$x201=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,13);$x202=$x201($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x202->class)&&$x202->class===\'Error\'&&!isset($x202->properties[\'file\'])&&!isset($x202->properties[\'line\'])&&!isset($x202->properties[\'column\'])){$x202->properties[\'file\']=\'<image>/02_object.js\';$x202->properties[\'line\']=64;$x202->properties[\'column\']=13;$x202->attributes[\'file\']=$x202->attributes[\'line\']=$x202->attributes[\'column\']=0;}throw new JSException($x202,64,13,\'<image>/02_object.js\');}$x197=clone JS::$objectTemplate;unset($x203,$W203,$S203,$U203);$x204=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),64,9,\'<image>/02_object.js\');$x203=&$x204[0];list(,$W203,$S203,$U203)=$x204;$x198=$x203;$x197->prototype=$x198;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x207=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x208=$x207($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x208->class)&&$x208->class===\'Error\'&&!isset($x208->properties[\'file\'])&&!isset($x208->properties[\'line\'])&&!isset($x208->properties[\'column\'])){$x208->properties[\'file\']=\'<image>/02_object.js\';$x208->properties[\'line\']=64;$x208->properties[\'column\']=9;$x208->attributes[\'file\']=$x208->attributes[\'line\']=$x208->attributes[\'column\']=0;}throw new JSException($x208,64,9,\'<image>/02_object.js\');}$x205=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x206=$x205($global,$x197,$_TypeError,array(\'Object.create(): Cannot create object with non-object prototype.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x198=$x206;if(is_object($x198)&&$x198!==JS::$undefined){$x197=$x198;}if(isset($x197->class)&&$x197->class===\'Error\'&&!isset($x197->properties[\'file\'])&&!isset($x197->properties[\'line\'])&&!isset($x197->properties[\'column\'])){$x197->properties[\'file\']=\'<image>/02_object.js\';$x197->properties[\'line\']=64;$x197->properties[\'column\']=3;$x197->attributes[\'file\']=$x197->attributes[\'line\']=$x197->attributes[\'column\']=0;}throw new JSException($x197,64,3,\'<image>/02_object.js\');}$x209=clone JS::$objectTemplate;$scope->properties[\'newObject\']=JS::$undefined;$_newObject=&$scope->properties[\'newObject\'];$UnewObject=FALSE;$_newObject=$x209;$_newObject->prototype=$_o;if(JS::toBoolean(is_object($_properties)&&$_properties!==JS::$undefined,$global)){unset($_Object,$WObject,$SObject,$UObject);$x210=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'Object\',$global),72,3,\'<image>/02_object.js\');$_Object=&$x210[0];list(,$WObject,$SObject,$UObject)=$x210;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x211=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),72,3,\'<image>/02_object.js\');$_ReferenceError=&$x211[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x211;$x212=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,3);$x213=$x212($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x213->class)&&$x213->class===\'Error\'&&!isset($x213->properties[\'file\'])&&!isset($x213->properties[\'line\'])&&!isset($x213->properties[\'column\'])){$x213->properties[\'file\']=\'<image>/02_object.js\';$x213->properties[\'line\']=72;$x213->properties[\'column\']=3;$x213->attributes[\'file\']=$x213->attributes[\'line\']=$x213->attributes[\'column\']=0;}throw new JSException($x213,72,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x215=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,26,\'<image>/02_object.js\');$_TypeError=&$x215[0];list(,$WTypeError,$STypeError,$UTypeError)=$x215;$x216=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x217=$x216($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x217->class)&&$x217->class===\'Error\'&&!isset($x217->properties[\'file\'])&&!isset($x217->properties[\'line\'])&&!isset($x217->properties[\'column\'])){$x217->properties[\'file\']=\'<image>/02_object.js\';$x217->properties[\'line\']=72;$x217->properties[\'column\']=26;$x217->attributes[\'file\']=$x217->attributes[\'line\']=$x217->attributes[\'column\']=0;}throw new JSException($x217,72,26,\'<image>/02_object.js\');}$x214=JS::toObject($_Object,$global);unset($x218,$W218,$S218,$U218);$x219=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x214,JS::toString(\'defineProperties\',$global),72,26,\'<image>/02_object.js\');$x218=&$x219[0];list(,$W218,$S218,$U218)=$x219;if(!(is_object($x218)&&isset($x218->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x222=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,26,\'<image>/02_object.js\');$_TypeError=&$x222[0];list(,$WTypeError,$STypeError,$UTypeError)=$x222;$x223=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x224=$x223($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x224->class)&&$x224->class===\'Error\'&&!isset($x224->properties[\'file\'])&&!isset($x224->properties[\'line\'])&&!isset($x224->properties[\'column\'])){$x224->properties[\'file\']=\'<image>/02_object.js\';$x224->properties[\'line\']=72;$x224->properties[\'column\']=26;$x224->attributes[\'file\']=$x224->attributes[\'line\']=$x224->attributes[\'column\']=0;}throw new JSException($x224,72,26,\'<image>/02_object.js\');}$x220=$x218->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x221=$x220($global,$x214,$x218,array($_newObject,$_properties),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newObject;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x237 =& $scope->properties['arguments'];
$x237->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x237->properties[$i] = $args[$i];
$x237->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['p'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$scope->properties['attributes'] = array_key_exists(2, $args) ? $args[2] : JS::$undefined;
$_attributes =& $scope->properties['attributes'];
$Uattributes = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x239 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x238 = $x239;
if (!JS::toBoolean($x238, $global)) {
$x242 = $_o;
$x242 = ($x242 === JS::$undefined ? 'undefined' : (is_int($x242) || is_float($x242) ? 'number' : (is_bool($x242) ? 'boolean' : (is_string($x242) ? 'string' : (is_object($x242) && isset($x242->call) ? 'function' : 'object')))));
$x241 = !(((gettype($x242) === gettype('object') && $x242 === 'object'))|| (((is_float($x242) || is_int($x242)) && (is_float('object') || is_int('object'))) && $x242 == 'object'));
$x240 = $x241;
if (JS::toBoolean($x240, $global)) {
$x244 = $_o;
$x244 = ($x244 === JS::$undefined ? 'undefined' : (is_int($x244) || is_float($x244) ? 'number' : (is_bool($x244) ? 'boolean' : (is_string($x244) ? 'string' : (is_object($x244) && isset($x244->call) ? 'function' : 'object')))));
$x243 = !(((gettype($x244) === gettype('function') && $x244 === 'function'))|| (((is_float($x244) || is_int($x244)) && (is_float('function') || is_int('function'))) && $x244 == 'function'));
$x240 = $x243; }
$x238 = $x240; }
if (JS::toBoolean($x238, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x247 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 13, '<image>/02_object.js');
$_TypeError =& $x247[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x247;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x248 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 80, 13, '<image>/02_object.js');
$_ReferenceError =& $x248[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x248;
$x249 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 13);
$x250 = $x249($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x250->class) && $x250->class === 'Error' && !isset($x250->properties['file']) && !isset($x250->properties['line']) && !isset($x250->properties['column'])) {$x250->properties['file'] = '<image>/02_object.js';$x250->properties['line'] = 80;$x250->properties['column'] = 13;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 80, 13, '<image>/02_object.js');
}
$x245 = clone JS::$objectTemplate;
unset($x251, $W251, $S251, $U251);
$x252 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 80, 9, '<image>/02_object.js');
$x251 =& $x252[0]; list(,$W251,$S251,$U251) = $x252;
$x246 = $x251;
$x245->prototype = $x246;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x255 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x256 = $x255($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x256->class) && $x256->class === 'Error' && !isset($x256->properties['file']) && !isset($x256->properties['line']) && !isset($x256->properties['column'])) {$x256->properties['file'] = '<image>/02_object.js';$x256->properties['line'] = 80;$x256->properties['column'] = 9;$x256->attributes['file'] = $x256->attributes['line'] = $x256->attributes['column'] = 0; }
throw new JSException($x256, 80, 9, '<image>/02_object.js');
}
$x253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x254 = $x253($global, $x245, $_TypeError, array('Object.defineProperty(): Cannot define property on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x246 = $x254;
if (is_object($x246) && $x246 !== JS::$undefined) { $x245 = $x246; }
if (isset($x245->class) && $x245->class === 'Error' && !isset($x245->properties['file']) && !isset($x245->properties['line']) && !isset($x245->properties['column'])) {$x245->properties['file'] = '<image>/02_object.js';$x245->properties['line'] = 80;$x245->properties['column'] = 3;$x245->attributes['file'] = $x245->attributes['line'] = $x245->attributes['column'] = 0; }
throw new JSException($x245, 80, 3, '<image>/02_object.js');;
};
unset($x259, $W259, $S259, $U259);
$x260 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('get', $global), 83, 16, '<image>/02_object.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
$x258 = !(((gettype($x259) === gettype(JS::$undefined) && $x259 === JS::$undefined))|| (((is_float($x259) || is_int($x259)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x259 == JS::$undefined));
$x257 = $x258;
if (JS::toBoolean($x257, $global)) {
unset($x262, $W262, $S262, $U262);
$x263 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('get', $global), 83, 55, '<image>/02_object.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
$x264 = $x262;
$x264 = ($x264 === JS::$undefined ? 'undefined' : (is_int($x264) || is_float($x264) ? 'number' : (is_bool($x264) ? 'boolean' : (is_string($x264) ? 'string' : (is_object($x264) && isset($x264->call) ? 'function' : 'object')))));
$x261 = !(((gettype($x264) === gettype('function') && $x264 === 'function'))|| (((is_float($x264) || is_int($x264)) && (is_float('function') || is_int('function'))) && $x264 == 'function'));
$x257 = $x261; }
if (JS::toBoolean($x257, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x267 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 84, 13, '<image>/02_object.js');
$_TypeError =& $x267[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x267;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x268 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 84, 13, '<image>/02_object.js');
$_ReferenceError =& $x268[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x268;
$x269 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 13);
$x270 = $x269($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x270->class) && $x270->class === 'Error' && !isset($x270->properties['file']) && !isset($x270->properties['line']) && !isset($x270->properties['column'])) {$x270->properties['file'] = '<image>/02_object.js';$x270->properties['line'] = 84;$x270->properties['column'] = 13;$x270->attributes['file'] = $x270->attributes['line'] = $x270->attributes['column'] = 0; }
throw new JSException($x270, 84, 13, '<image>/02_object.js');
}
$x265 = clone JS::$objectTemplate;
unset($x271, $W271, $S271, $U271);
$x272 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 84, 9, '<image>/02_object.js');
$x271 =& $x272[0]; list(,$W271,$S271,$U271) = $x272;
$x266 = $x271;
$x265->prototype = $x266;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x276 = $x275($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x276->class) && $x276->class === 'Error' && !isset($x276->properties['file']) && !isset($x276->properties['line']) && !isset($x276->properties['column'])) {$x276->properties['file'] = '<image>/02_object.js';$x276->properties['line'] = 84;$x276->properties['column'] = 9;$x276->attributes['file'] = $x276->attributes['line'] = $x276->attributes['column'] = 0; }
throw new JSException($x276, 84, 9, '<image>/02_object.js');
}
$x273 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x274 = $x273($global, $x265, $_TypeError, array('Object.defineProperty(): Given getter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x266 = $x274;
if (is_object($x266) && $x266 !== JS::$undefined) { $x265 = $x266; }
if (isset($x265->class) && $x265->class === 'Error' && !isset($x265->properties['file']) && !isset($x265->properties['line']) && !isset($x265->properties['column'])) {$x265->properties['file'] = '<image>/02_object.js';$x265->properties['line'] = 84;$x265->properties['column'] = 3;$x265->attributes['file'] = $x265->attributes['line'] = $x265->attributes['column'] = 0; }
throw new JSException($x265, 84, 3, '<image>/02_object.js');;
};
unset($x279, $W279, $S279, $U279);
$x280 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('set', $global), 87, 16, '<image>/02_object.js');
$x279 =& $x280[0]; list(,$W279,$S279,$U279) = $x280;
$x278 = !(((gettype($x279) === gettype(JS::$undefined) && $x279 === JS::$undefined))|| (((is_float($x279) || is_int($x279)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x279 == JS::$undefined));
$x277 = $x278;
if (JS::toBoolean($x277, $global)) {
unset($x282, $W282, $S282, $U282);
$x283 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('set', $global), 87, 55, '<image>/02_object.js');
$x282 =& $x283[0]; list(,$W282,$S282,$U282) = $x283;
$x284 = $x282;
$x284 = ($x284 === JS::$undefined ? 'undefined' : (is_int($x284) || is_float($x284) ? 'number' : (is_bool($x284) ? 'boolean' : (is_string($x284) ? 'string' : (is_object($x284) && isset($x284->call) ? 'function' : 'object')))));
$x281 = !(((gettype($x284) === gettype('function') && $x284 === 'function'))|| (((is_float($x284) || is_int($x284)) && (is_float('function') || is_int('function'))) && $x284 == 'function'));
$x277 = $x281; }
if (JS::toBoolean($x277, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x287 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 88, 13, '<image>/02_object.js');
$_TypeError =& $x287[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x287;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x288 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 88, 13, '<image>/02_object.js');
$_ReferenceError =& $x288[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x288;
$x289 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 13);
$x290 = $x289($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x290->class) && $x290->class === 'Error' && !isset($x290->properties['file']) && !isset($x290->properties['line']) && !isset($x290->properties['column'])) {$x290->properties['file'] = '<image>/02_object.js';$x290->properties['line'] = 88;$x290->properties['column'] = 13;$x290->attributes['file'] = $x290->attributes['line'] = $x290->attributes['column'] = 0; }
throw new JSException($x290, 88, 13, '<image>/02_object.js');
}
$x285 = clone JS::$objectTemplate;
unset($x291, $W291, $S291, $U291);
$x292 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 88, 9, '<image>/02_object.js');
$x291 =& $x292[0]; list(,$W291,$S291,$U291) = $x292;
$x286 = $x291;
$x285->prototype = $x286;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x295 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x296 = $x295($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x296->class) && $x296->class === 'Error' && !isset($x296->properties['file']) && !isset($x296->properties['line']) && !isset($x296->properties['column'])) {$x296->properties['file'] = '<image>/02_object.js';$x296->properties['line'] = 88;$x296->properties['column'] = 9;$x296->attributes['file'] = $x296->attributes['line'] = $x296->attributes['column'] = 0; }
throw new JSException($x296, 88, 9, '<image>/02_object.js');
}
$x293 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x294 = $x293($global, $x285, $_TypeError, array('Object.defineProperty(): Given setter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x286 = $x294;
if (is_object($x286) && $x286 !== JS::$undefined) { $x285 = $x286; }
if (isset($x285->class) && $x285->class === 'Error' && !isset($x285->properties['file']) && !isset($x285->properties['line']) && !isset($x285->properties['column'])) {$x285->properties['file'] = '<image>/02_object.js';$x285->properties['line'] = 88;$x285->properties['column'] = 3;$x285->attributes['file'] = $x285->attributes['line'] = $x285->attributes['column'] = 0; }
throw new JSException($x285, 88, 3, '<image>/02_object.js');;
};
$x297 = $_attributes;
if (!JS::toBoolean($x297, $global)) {
$x298 = clone JS::$objectTemplate;
$x297 = $x298; }
if ($Uattributes) {$global->properties['attributes'] = $_attributes; $_attributes =& $global->properties['attributes']; }
$_attributes = $x297;
$x299 = JS::toString($_p, $global);
if ($Up) {$global->properties['p'] = $_p; $_p =& $global->properties['p']; }
$_p = $x299;
unset($x300, $W300, $S300, $U300);
$x301 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('value', $global), 94, 24, '<image>/02_object.js');
$x300 =& $x301[0]; list(,$W300,$S300,$U300) = $x301;
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = $x300;
unset($x302, $W302, $S302, $U302);
$x303 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('get', $global), 95, 19, '<image>/02_object.js');
$x302 =& $x303[0]; list(,$W302,$S302,$U302) = $x303;
$scope->properties['get'] = JS::$undefined; $_get =& $scope->properties['get'];
$Uget = FALSE;
$_get = $x302;
unset($x304, $W304, $S304, $U304);
$x305 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('set', $global), 96, 19, '<image>/02_object.js');
$x304 =& $x305[0]; list(,$W304,$S304,$U304) = $x305;
$scope->properties['set'] = JS::$undefined; $_set =& $scope->properties['set'];
$Uset = FALSE;
$_set = $x304;
$scope->properties['attrs'] = JS::$undefined; $_attrs =& $scope->properties['attrs'];
$Uattrs = FALSE;
$_attrs = 0;
$x307 = $_value;
$x307 = ($x307 === JS::$undefined ? 'undefined' : (is_int($x307) || is_float($x307) ? 'number' : (is_bool($x307) ? 'boolean' : (is_string($x307) ? 'string' : (is_object($x307) && isset($x307->call) ? 'function' : 'object')))));
$x306 = !(((gettype($x307) === gettype('undefined') && $x307 === 'undefined'))|| (((is_float($x307) || is_int($x307)) && (is_float('undefined') || is_int('undefined'))) && $x307 == 'undefined'));
if (JS::toBoolean($x306, $global)) {

$_o->properties[$_p] =$_value;;
};
if (JS::toBoolean($_get, $global)) {
$_o->getters[$_p] =$_get;
$x308 = JS::HAS_GETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x309 = JS::toNumber($_attrs, $global);
$x310 = JS::toNumber($x308, $global);
if (is_nan($x309)) { $x309 = 0; }
if (is_nan($x310)) { $x310 = 0; }
$x311 = $x309 | $x310;
$_attrs = $x311;;
};
if (JS::toBoolean($_set, $global)) {
$_o->setters[$_p] =$_set;
$x312 = JS::HAS_SETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x313 = JS::toNumber($_attrs, $global);
$x314 = JS::toNumber($x312, $global);
if (is_nan($x313)) { $x313 = 0; }
if (is_nan($x314)) { $x314 = 0; }
$x315 = $x313 | $x314;
$_attrs = $x315;;
};
unset($x316, $W316, $S316, $U316);
$x317 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('writable', $global), 113, 16, '<image>/02_object.js');
$x316 =& $x317[0]; list(,$W316,$S316,$U316) = $x317;
if (JS::toBoolean($x316, $global)) {
$x318 = JS::WRITABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x319 = JS::toNumber($_attrs, $global);
$x320 = JS::toNumber($x318, $global);
if (is_nan($x319)) { $x319 = 0; }
if (is_nan($x320)) { $x320 = 0; }
$x321 = $x319 | $x320;
$_attrs = $x321;;
};
unset($x322, $W322, $S322, $U322);
$x323 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('enumerable', $global), 117, 16, '<image>/02_object.js');
$x322 =& $x323[0]; list(,$W322,$S322,$U322) = $x323;
if (JS::toBoolean($x322, $global)) {
$x324 = JS::ENUMERABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x325 = JS::toNumber($_attrs, $global);
$x326 = JS::toNumber($x324, $global);
if (is_nan($x325)) { $x325 = 0; }
if (is_nan($x326)) { $x326 = 0; }
$x327 = $x325 | $x326;
$_attrs = $x327;;
};
unset($x328, $W328, $S328, $U328);
$x329 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('configurable', $global), 121, 16, '<image>/02_object.js');
$x328 =& $x329[0]; list(,$W328,$S328,$U328) = $x329;
if (JS::toBoolean($x328, $global)) {
$x330 = JS::CONFIGURABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x331 = JS::toNumber($_attrs, $global);
$x332 = JS::toNumber($x330, $global);
if (is_nan($x331)) { $x331 = 0; }
if (is_nan($x332)) { $x332 = 0; }
$x333 = $x331 | $x332;
$_attrs = $x333;;
};
$_o->attributes[$_p] =$_attrs;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x237=&$scope->properties[\'arguments\'];$x237->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x237->properties[$i]=$args[$i];$x237->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'attributes\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_attributes=&$scope->properties[\'attributes\'];$Uattributes=FALSE;$global->scope[++$global->scope_sp]=$scope;$x239=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x238=$x239;if(!JS::toBoolean($x238,$global)){$x242=$_o;$x242=($x242===JS::$undefined?\'undefined\':(is_int($x242)||is_float($x242)?\'number\':(is_bool($x242)?\'boolean\':(is_string($x242)?\'string\':(is_object($x242)&&isset($x242->call)?\'function\':\'object\')))));$x241=!(((gettype($x242)===gettype(\'object\')&&$x242===\'object\'))||(((is_float($x242)||is_int($x242))&&(is_float(\'object\')||is_int(\'object\')))&&$x242==\'object\'));$x240=$x241;if(JS::toBoolean($x240,$global)){$x244=$_o;$x244=($x244===JS::$undefined?\'undefined\':(is_int($x244)||is_float($x244)?\'number\':(is_bool($x244)?\'boolean\':(is_string($x244)?\'string\':(is_object($x244)&&isset($x244->call)?\'function\':\'object\')))));$x243=!(((gettype($x244)===gettype(\'function\')&&$x244===\'function\'))||(((is_float($x244)||is_int($x244))&&(is_float(\'function\')||is_int(\'function\')))&&$x244==\'function\'));$x240=$x243;}$x238=$x240;}if(JS::toBoolean($x238,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x247=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,13,\'<image>/02_object.js\');$_TypeError=&$x247[0];list(,$WTypeError,$STypeError,$UTypeError)=$x247;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x248=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),80,13,\'<image>/02_object.js\');$_ReferenceError=&$x248[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x248;$x249=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,13);$x250=$x249($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x250->class)&&$x250->class===\'Error\'&&!isset($x250->properties[\'file\'])&&!isset($x250->properties[\'line\'])&&!isset($x250->properties[\'column\'])){$x250->properties[\'file\']=\'<image>/02_object.js\';$x250->properties[\'line\']=80;$x250->properties[\'column\']=13;$x250->attributes[\'file\']=$x250->attributes[\'line\']=$x250->attributes[\'column\']=0;}throw new JSException($x250,80,13,\'<image>/02_object.js\');}$x245=clone JS::$objectTemplate;unset($x251,$W251,$S251,$U251);$x252=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),80,9,\'<image>/02_object.js\');$x251=&$x252[0];list(,$W251,$S251,$U251)=$x252;$x246=$x251;$x245->prototype=$x246;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x255=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x256=$x255($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x256->class)&&$x256->class===\'Error\'&&!isset($x256->properties[\'file\'])&&!isset($x256->properties[\'line\'])&&!isset($x256->properties[\'column\'])){$x256->properties[\'file\']=\'<image>/02_object.js\';$x256->properties[\'line\']=80;$x256->properties[\'column\']=9;$x256->attributes[\'file\']=$x256->attributes[\'line\']=$x256->attributes[\'column\']=0;}throw new JSException($x256,80,9,\'<image>/02_object.js\');}$x253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x254=$x253($global,$x245,$_TypeError,array(\'Object.defineProperty(): Cannot define property on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x246=$x254;if(is_object($x246)&&$x246!==JS::$undefined){$x245=$x246;}if(isset($x245->class)&&$x245->class===\'Error\'&&!isset($x245->properties[\'file\'])&&!isset($x245->properties[\'line\'])&&!isset($x245->properties[\'column\'])){$x245->properties[\'file\']=\'<image>/02_object.js\';$x245->properties[\'line\']=80;$x245->properties[\'column\']=3;$x245->attributes[\'file\']=$x245->attributes[\'line\']=$x245->attributes[\'column\']=0;}throw new JSException($x245,80,3,\'<image>/02_object.js\');}unset($x259,$W259,$S259,$U259);$x260=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'get\',$global),83,16,\'<image>/02_object.js\');$x259=&$x260[0];list(,$W259,$S259,$U259)=$x260;$x258=!(((gettype($x259)===gettype(JS::$undefined)&&$x259===JS::$undefined))||(((is_float($x259)||is_int($x259))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x259==JS::$undefined));$x257=$x258;if(JS::toBoolean($x257,$global)){unset($x262,$W262,$S262,$U262);$x263=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'get\',$global),83,55,\'<image>/02_object.js\');$x262=&$x263[0];list(,$W262,$S262,$U262)=$x263;$x264=$x262;$x264=($x264===JS::$undefined?\'undefined\':(is_int($x264)||is_float($x264)?\'number\':(is_bool($x264)?\'boolean\':(is_string($x264)?\'string\':(is_object($x264)&&isset($x264->call)?\'function\':\'object\')))));$x261=!(((gettype($x264)===gettype(\'function\')&&$x264===\'function\'))||(((is_float($x264)||is_int($x264))&&(is_float(\'function\')||is_int(\'function\')))&&$x264==\'function\'));$x257=$x261;}if(JS::toBoolean($x257,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x267=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),84,13,\'<image>/02_object.js\');$_TypeError=&$x267[0];list(,$WTypeError,$STypeError,$UTypeError)=$x267;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x268=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),84,13,\'<image>/02_object.js\');$_ReferenceError=&$x268[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x268;$x269=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,13);$x270=$x269($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x270->class)&&$x270->class===\'Error\'&&!isset($x270->properties[\'file\'])&&!isset($x270->properties[\'line\'])&&!isset($x270->properties[\'column\'])){$x270->properties[\'file\']=\'<image>/02_object.js\';$x270->properties[\'line\']=84;$x270->properties[\'column\']=13;$x270->attributes[\'file\']=$x270->attributes[\'line\']=$x270->attributes[\'column\']=0;}throw new JSException($x270,84,13,\'<image>/02_object.js\');}$x265=clone JS::$objectTemplate;unset($x271,$W271,$S271,$U271);$x272=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),84,9,\'<image>/02_object.js\');$x271=&$x272[0];list(,$W271,$S271,$U271)=$x272;$x266=$x271;$x265->prototype=$x266;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x276=$x275($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'&&!isset($x276->properties[\'file\'])&&!isset($x276->properties[\'line\'])&&!isset($x276->properties[\'column\'])){$x276->properties[\'file\']=\'<image>/02_object.js\';$x276->properties[\'line\']=84;$x276->properties[\'column\']=9;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,84,9,\'<image>/02_object.js\');}$x273=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x274=$x273($global,$x265,$_TypeError,array(\'Object.defineProperty(): Given getter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x266=$x274;if(is_object($x266)&&$x266!==JS::$undefined){$x265=$x266;}if(isset($x265->class)&&$x265->class===\'Error\'&&!isset($x265->properties[\'file\'])&&!isset($x265->properties[\'line\'])&&!isset($x265->properties[\'column\'])){$x265->properties[\'file\']=\'<image>/02_object.js\';$x265->properties[\'line\']=84;$x265->properties[\'column\']=3;$x265->attributes[\'file\']=$x265->attributes[\'line\']=$x265->attributes[\'column\']=0;}throw new JSException($x265,84,3,\'<image>/02_object.js\');}unset($x279,$W279,$S279,$U279);$x280=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'set\',$global),87,16,\'<image>/02_object.js\');$x279=&$x280[0];list(,$W279,$S279,$U279)=$x280;$x278=!(((gettype($x279)===gettype(JS::$undefined)&&$x279===JS::$undefined))||(((is_float($x279)||is_int($x279))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x279==JS::$undefined));$x277=$x278;if(JS::toBoolean($x277,$global)){unset($x282,$W282,$S282,$U282);$x283=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'set\',$global),87,55,\'<image>/02_object.js\');$x282=&$x283[0];list(,$W282,$S282,$U282)=$x283;$x284=$x282;$x284=($x284===JS::$undefined?\'undefined\':(is_int($x284)||is_float($x284)?\'number\':(is_bool($x284)?\'boolean\':(is_string($x284)?\'string\':(is_object($x284)&&isset($x284->call)?\'function\':\'object\')))));$x281=!(((gettype($x284)===gettype(\'function\')&&$x284===\'function\'))||(((is_float($x284)||is_int($x284))&&(is_float(\'function\')||is_int(\'function\')))&&$x284==\'function\'));$x277=$x281;}if(JS::toBoolean($x277,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x287=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),88,13,\'<image>/02_object.js\');$_TypeError=&$x287[0];list(,$WTypeError,$STypeError,$UTypeError)=$x287;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x288=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),88,13,\'<image>/02_object.js\');$_ReferenceError=&$x288[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x288;$x289=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,13);$x290=$x289($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x290->class)&&$x290->class===\'Error\'&&!isset($x290->properties[\'file\'])&&!isset($x290->properties[\'line\'])&&!isset($x290->properties[\'column\'])){$x290->properties[\'file\']=\'<image>/02_object.js\';$x290->properties[\'line\']=88;$x290->properties[\'column\']=13;$x290->attributes[\'file\']=$x290->attributes[\'line\']=$x290->attributes[\'column\']=0;}throw new JSException($x290,88,13,\'<image>/02_object.js\');}$x285=clone JS::$objectTemplate;unset($x291,$W291,$S291,$U291);$x292=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),88,9,\'<image>/02_object.js\');$x291=&$x292[0];list(,$W291,$S291,$U291)=$x292;$x286=$x291;$x285->prototype=$x286;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x295=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x296=$x295($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x296->class)&&$x296->class===\'Error\'&&!isset($x296->properties[\'file\'])&&!isset($x296->properties[\'line\'])&&!isset($x296->properties[\'column\'])){$x296->properties[\'file\']=\'<image>/02_object.js\';$x296->properties[\'line\']=88;$x296->properties[\'column\']=9;$x296->attributes[\'file\']=$x296->attributes[\'line\']=$x296->attributes[\'column\']=0;}throw new JSException($x296,88,9,\'<image>/02_object.js\');}$x293=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x294=$x293($global,$x285,$_TypeError,array(\'Object.defineProperty(): Given setter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x286=$x294;if(is_object($x286)&&$x286!==JS::$undefined){$x285=$x286;}if(isset($x285->class)&&$x285->class===\'Error\'&&!isset($x285->properties[\'file\'])&&!isset($x285->properties[\'line\'])&&!isset($x285->properties[\'column\'])){$x285->properties[\'file\']=\'<image>/02_object.js\';$x285->properties[\'line\']=88;$x285->properties[\'column\']=3;$x285->attributes[\'file\']=$x285->attributes[\'line\']=$x285->attributes[\'column\']=0;}throw new JSException($x285,88,3,\'<image>/02_object.js\');}$x297=$_attributes;if(!JS::toBoolean($x297,$global)){$x298=clone JS::$objectTemplate;$x297=$x298;}if($Uattributes){$global->properties[\'attributes\']=$_attributes;$_attributes=&$global->properties[\'attributes\'];}$_attributes=$x297;$x299=JS::toString($_p,$global);if($Up){$global->properties[\'p\']=$_p;$_p=&$global->properties[\'p\'];}$_p=$x299;unset($x300,$W300,$S300,$U300);$x301=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'value\',$global),94,24,\'<image>/02_object.js\');$x300=&$x301[0];list(,$W300,$S300,$U300)=$x301;$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x300;unset($x302,$W302,$S302,$U302);$x303=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'get\',$global),95,19,\'<image>/02_object.js\');$x302=&$x303[0];list(,$W302,$S302,$U302)=$x303;$scope->properties[\'get\']=JS::$undefined;$_get=&$scope->properties[\'get\'];$Uget=FALSE;$_get=$x302;unset($x304,$W304,$S304,$U304);$x305=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'set\',$global),96,19,\'<image>/02_object.js\');$x304=&$x305[0];list(,$W304,$S304,$U304)=$x305;$scope->properties[\'set\']=JS::$undefined;$_set=&$scope->properties[\'set\'];$Uset=FALSE;$_set=$x304;$scope->properties[\'attrs\']=JS::$undefined;$_attrs=&$scope->properties[\'attrs\'];$Uattrs=FALSE;$_attrs=0;$x307=$_value;$x307=($x307===JS::$undefined?\'undefined\':(is_int($x307)||is_float($x307)?\'number\':(is_bool($x307)?\'boolean\':(is_string($x307)?\'string\':(is_object($x307)&&isset($x307->call)?\'function\':\'object\')))));$x306=!(((gettype($x307)===gettype(\'undefined\')&&$x307===\'undefined\'))||(((is_float($x307)||is_int($x307))&&(is_float(\'undefined\')||is_int(\'undefined\')))&&$x307==\'undefined\'));if(JS::toBoolean($x306,$global)){$_o->properties[$_p]=$_value;}if(JS::toBoolean($_get,$global)){$_o->getters[$_p]=$_get;$x308=JS::HAS_GETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x309=JS::toNumber($_attrs,$global);$x310=JS::toNumber($x308,$global);if(is_nan($x309)){$x309=0;}if(is_nan($x310)){$x310=0;}$x311=$x309|$x310;$_attrs=$x311;}if(JS::toBoolean($_set,$global)){$_o->setters[$_p]=$_set;$x312=JS::HAS_SETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x313=JS::toNumber($_attrs,$global);$x314=JS::toNumber($x312,$global);if(is_nan($x313)){$x313=0;}if(is_nan($x314)){$x314=0;}$x315=$x313|$x314;$_attrs=$x315;}unset($x316,$W316,$S316,$U316);$x317=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'writable\',$global),113,16,\'<image>/02_object.js\');$x316=&$x317[0];list(,$W316,$S316,$U316)=$x317;if(JS::toBoolean($x316,$global)){$x318=JS::WRITABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x319=JS::toNumber($_attrs,$global);$x320=JS::toNumber($x318,$global);if(is_nan($x319)){$x319=0;}if(is_nan($x320)){$x320=0;}$x321=$x319|$x320;$_attrs=$x321;}unset($x322,$W322,$S322,$U322);$x323=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'enumerable\',$global),117,16,\'<image>/02_object.js\');$x322=&$x323[0];list(,$W322,$S322,$U322)=$x323;if(JS::toBoolean($x322,$global)){$x324=JS::ENUMERABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x325=JS::toNumber($_attrs,$global);$x326=JS::toNumber($x324,$global);if(is_nan($x325)){$x325=0;}if(is_nan($x326)){$x326=0;}$x327=$x325|$x326;$_attrs=$x327;}unset($x328,$W328,$S328,$U328);$x329=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'configurable\',$global),121,16,\'<image>/02_object.js\');$x328=&$x329[0];list(,$W328,$S328,$U328)=$x329;if(JS::toBoolean($x328,$global)){$x330=JS::CONFIGURABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x331=JS::toNumber($_attrs,$global);$x332=JS::toNumber($x330,$global);if(is_nan($x331)){$x331=0;}if(is_nan($x332)){$x332=0;}$x333=$x331|$x332;$_attrs=$x333;}$_o->attributes[$_p]=$_attrs;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x346 =& $scope->properties['arguments'];
$x346->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x346->properties[$i] = $args[$i];
$x346->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x348 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x347 = $x348;
if (!JS::toBoolean($x347, $global)) {
$x351 = $_o;
$x351 = ($x351 === JS::$undefined ? 'undefined' : (is_int($x351) || is_float($x351) ? 'number' : (is_bool($x351) ? 'boolean' : (is_string($x351) ? 'string' : (is_object($x351) && isset($x351->call) ? 'function' : 'object')))));
$x350 = !(((gettype($x351) === gettype('object') && $x351 === 'object'))|| (((is_float($x351) || is_int($x351)) && (is_float('object') || is_int('object'))) && $x351 == 'object'));
$x349 = $x350;
if (JS::toBoolean($x349, $global)) {
$x353 = $_o;
$x353 = ($x353 === JS::$undefined ? 'undefined' : (is_int($x353) || is_float($x353) ? 'number' : (is_bool($x353) ? 'boolean' : (is_string($x353) ? 'string' : (is_object($x353) && isset($x353->call) ? 'function' : 'object')))));
$x352 = !(((gettype($x353) === gettype('function') && $x353 === 'function'))|| (((is_float($x353) || is_int($x353)) && (is_float('function') || is_int('function'))) && $x353 == 'function'));
$x349 = $x352; }
$x347 = $x349; }
if (JS::toBoolean($x347, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x356 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 132, 13, '<image>/02_object.js');
$_TypeError =& $x356[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x356;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x357 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 132, 13, '<image>/02_object.js');
$_ReferenceError =& $x357[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x357;
$x358 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 13);
$x359 = $x358($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x359->class) && $x359->class === 'Error' && !isset($x359->properties['file']) && !isset($x359->properties['line']) && !isset($x359->properties['column'])) {$x359->properties['file'] = '<image>/02_object.js';$x359->properties['line'] = 132;$x359->properties['column'] = 13;$x359->attributes['file'] = $x359->attributes['line'] = $x359->attributes['column'] = 0; }
throw new JSException($x359, 132, 13, '<image>/02_object.js');
}
$x354 = clone JS::$objectTemplate;
unset($x360, $W360, $S360, $U360);
$x361 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 132, 9, '<image>/02_object.js');
$x360 =& $x361[0]; list(,$W360,$S360,$U360) = $x361;
$x355 = $x360;
$x354->prototype = $x355;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x364 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x365 = $x364($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x365->class) && $x365->class === 'Error' && !isset($x365->properties['file']) && !isset($x365->properties['line']) && !isset($x365->properties['column'])) {$x365->properties['file'] = '<image>/02_object.js';$x365->properties['line'] = 132;$x365->properties['column'] = 9;$x365->attributes['file'] = $x365->attributes['line'] = $x365->attributes['column'] = 0; }
throw new JSException($x365, 132, 9, '<image>/02_object.js');
}
$x362 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x363 = $x362($global, $x354, $_TypeError, array('Object.defineProperties(): Cannot define properties on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x355 = $x363;
if (is_object($x355) && $x355 !== JS::$undefined) { $x354 = $x355; }
if (isset($x354->class) && $x354->class === 'Error' && !isset($x354->properties['file']) && !isset($x354->properties['line']) && !isset($x354->properties['column'])) {$x354->properties['file'] = '<image>/02_object.js';$x354->properties['line'] = 132;$x354->properties['column'] = 3;$x354->attributes['file'] = $x354->attributes['line'] = $x354->attributes['column'] = 0; }
throw new JSException($x354, 132, 3, '<image>/02_object.js');;
};
$x367 = $_properties;
$x367 = ($x367 === JS::$undefined ? 'undefined' : (is_int($x367) || is_float($x367) ? 'number' : (is_bool($x367) ? 'boolean' : (is_string($x367) ? 'string' : (is_object($x367) && isset($x367->call) ? 'function' : 'object')))));
$x366 = !(((gettype($x367) === gettype('object') && $x367 === 'object'))|| (((is_float($x367) || is_int($x367)) && (is_float('object') || is_int('object'))) && $x367 == 'object'));
if (JS::toBoolean($x366, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x370 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 136, 13, '<image>/02_object.js');
$_TypeError =& $x370[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x370;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x371 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 136, 13, '<image>/02_object.js');
$_ReferenceError =& $x371[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x371;
$x372 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 13);
$x373 = $x372($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x373->class) && $x373->class === 'Error' && !isset($x373->properties['file']) && !isset($x373->properties['line']) && !isset($x373->properties['column'])) {$x373->properties['file'] = '<image>/02_object.js';$x373->properties['line'] = 136;$x373->properties['column'] = 13;$x373->attributes['file'] = $x373->attributes['line'] = $x373->attributes['column'] = 0; }
throw new JSException($x373, 136, 13, '<image>/02_object.js');
}
$x368 = clone JS::$objectTemplate;
unset($x374, $W374, $S374, $U374);
$x375 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 136, 9, '<image>/02_object.js');
$x374 =& $x375[0]; list(,$W374,$S374,$U374) = $x375;
$x369 = $x374;
$x368->prototype = $x369;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x378 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x379 = $x378($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x379->class) && $x379->class === 'Error' && !isset($x379->properties['file']) && !isset($x379->properties['line']) && !isset($x379->properties['column'])) {$x379->properties['file'] = '<image>/02_object.js';$x379->properties['line'] = 136;$x379->properties['column'] = 9;$x379->attributes['file'] = $x379->attributes['line'] = $x379->attributes['column'] = 0; }
throw new JSException($x379, 136, 9, '<image>/02_object.js');
}
$x376 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x377 = $x376($global, $x368, $_TypeError, array('Object.defineProperties(): Given properties argument is not an object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x369 = $x377;
if (is_object($x369) && $x369 !== JS::$undefined) { $x368 = $x369; }
if (isset($x368->class) && $x368->class === 'Error' && !isset($x368->properties['file']) && !isset($x368->properties['line']) && !isset($x368->properties['column'])) {$x368->properties['file'] = '<image>/02_object.js';$x368->properties['line'] = 136;$x368->properties['column'] = 3;$x368->attributes['file'] = $x368->attributes['line'] = $x368->attributes['column'] = 0; }
throw new JSException($x368, 136, 3, '<image>/02_object.js');;
};
$scope->properties['p'] = JS::$undefined; $_p =& $scope->properties['p'];
$Up = FALSE;
$_p = JS::$undefined;
if ($_properties !== JS::$undefined && $_properties !== NULL) {
for ($x381 = array(), $x380 = JS::toObject($_properties, $global); $x380; $x380 = $x380->prototype) {
foreach ($x380->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x381[$property])) { continue; }
$x381[$property] = TRUE;
$_p = $property;

unset($_Object, $WObject, $SObject, $UObject);
$x382 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('Object', $global), 140, 3, '<image>/02_object.js');
$_Object =& $x382[0]; list(,$WObject,$SObject,$UObject) = $x382;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x383 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 140, 3, '<image>/02_object.js');
$_ReferenceError =& $x383[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x383;
$x384 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 3);
$x385 = $x384($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x385->class) && $x385->class === 'Error' && !isset($x385->properties['file']) && !isset($x385->properties['line']) && !isset($x385->properties['column'])) {$x385->properties['file'] = '<image>/02_object.js';$x385->properties['line'] = 140;$x385->properties['column'] = 3;$x385->attributes['file'] = $x385->attributes['line'] = $x385->attributes['column'] = 0; }
throw new JSException($x385, 140, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x387 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 140, 24, '<image>/02_object.js');
$_TypeError =& $x387[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x387;
$x388 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x389 = $x388($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x389->class) && $x389->class === 'Error' && !isset($x389->properties['file']) && !isset($x389->properties['line']) && !isset($x389->properties['column'])) {$x389->properties['file'] = '<image>/02_object.js';$x389->properties['line'] = 140;$x389->properties['column'] = 24;$x389->attributes['file'] = $x389->attributes['line'] = $x389->attributes['column'] = 0; }
throw new JSException($x389, 140, 24, '<image>/02_object.js');
}
$x386 = JS::toObject($_Object, $global);
unset($x390, $W390, $S390, $U390);
$x391 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x386, JS::toString('defineProperty', $global), 140, 24, '<image>/02_object.js');
$x390 =& $x391[0]; list(,$W390,$S390,$U390) = $x391;
unset($x392, $W392, $S392, $U392);
$x393 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_properties, JS::toString($_p, $global), 140, 41, '<image>/02_object.js');
$x392 =& $x393[0]; list(,$W392,$S392,$U392) = $x393;
if (!(is_object($x390) && isset($x390->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x396 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 140, 24, '<image>/02_object.js');
$_TypeError =& $x396[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x396;
$x397 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x398 = $x397($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x398->class) && $x398->class === 'Error' && !isset($x398->properties['file']) && !isset($x398->properties['line']) && !isset($x398->properties['column'])) {$x398->properties['file'] = '<image>/02_object.js';$x398->properties['line'] = 140;$x398->properties['column'] = 24;$x398->attributes['file'] = $x398->attributes['line'] = $x398->attributes['column'] = 0; }
throw new JSException($x398, 140, 24, '<image>/02_object.js');
}
$x394 = $x390->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x395 = $x394($global, $x386, $x390, array($_o, $_p, $x392), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x346=&$scope->properties[\'arguments\'];$x346->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x346->properties[$i]=$args[$i];$x346->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x348=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x347=$x348;if(!JS::toBoolean($x347,$global)){$x351=$_o;$x351=($x351===JS::$undefined?\'undefined\':(is_int($x351)||is_float($x351)?\'number\':(is_bool($x351)?\'boolean\':(is_string($x351)?\'string\':(is_object($x351)&&isset($x351->call)?\'function\':\'object\')))));$x350=!(((gettype($x351)===gettype(\'object\')&&$x351===\'object\'))||(((is_float($x351)||is_int($x351))&&(is_float(\'object\')||is_int(\'object\')))&&$x351==\'object\'));$x349=$x350;if(JS::toBoolean($x349,$global)){$x353=$_o;$x353=($x353===JS::$undefined?\'undefined\':(is_int($x353)||is_float($x353)?\'number\':(is_bool($x353)?\'boolean\':(is_string($x353)?\'string\':(is_object($x353)&&isset($x353->call)?\'function\':\'object\')))));$x352=!(((gettype($x353)===gettype(\'function\')&&$x353===\'function\'))||(((is_float($x353)||is_int($x353))&&(is_float(\'function\')||is_int(\'function\')))&&$x353==\'function\'));$x349=$x352;}$x347=$x349;}if(JS::toBoolean($x347,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x356=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),132,13,\'<image>/02_object.js\');$_TypeError=&$x356[0];list(,$WTypeError,$STypeError,$UTypeError)=$x356;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x357=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),132,13,\'<image>/02_object.js\');$_ReferenceError=&$x357[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x357;$x358=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,13);$x359=$x358($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x359->class)&&$x359->class===\'Error\'&&!isset($x359->properties[\'file\'])&&!isset($x359->properties[\'line\'])&&!isset($x359->properties[\'column\'])){$x359->properties[\'file\']=\'<image>/02_object.js\';$x359->properties[\'line\']=132;$x359->properties[\'column\']=13;$x359->attributes[\'file\']=$x359->attributes[\'line\']=$x359->attributes[\'column\']=0;}throw new JSException($x359,132,13,\'<image>/02_object.js\');}$x354=clone JS::$objectTemplate;unset($x360,$W360,$S360,$U360);$x361=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),132,9,\'<image>/02_object.js\');$x360=&$x361[0];list(,$W360,$S360,$U360)=$x361;$x355=$x360;$x354->prototype=$x355;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x364=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x365=$x364($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x365->class)&&$x365->class===\'Error\'&&!isset($x365->properties[\'file\'])&&!isset($x365->properties[\'line\'])&&!isset($x365->properties[\'column\'])){$x365->properties[\'file\']=\'<image>/02_object.js\';$x365->properties[\'line\']=132;$x365->properties[\'column\']=9;$x365->attributes[\'file\']=$x365->attributes[\'line\']=$x365->attributes[\'column\']=0;}throw new JSException($x365,132,9,\'<image>/02_object.js\');}$x362=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x363=$x362($global,$x354,$_TypeError,array(\'Object.defineProperties(): Cannot define properties on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x355=$x363;if(is_object($x355)&&$x355!==JS::$undefined){$x354=$x355;}if(isset($x354->class)&&$x354->class===\'Error\'&&!isset($x354->properties[\'file\'])&&!isset($x354->properties[\'line\'])&&!isset($x354->properties[\'column\'])){$x354->properties[\'file\']=\'<image>/02_object.js\';$x354->properties[\'line\']=132;$x354->properties[\'column\']=3;$x354->attributes[\'file\']=$x354->attributes[\'line\']=$x354->attributes[\'column\']=0;}throw new JSException($x354,132,3,\'<image>/02_object.js\');}$x367=$_properties;$x367=($x367===JS::$undefined?\'undefined\':(is_int($x367)||is_float($x367)?\'number\':(is_bool($x367)?\'boolean\':(is_string($x367)?\'string\':(is_object($x367)&&isset($x367->call)?\'function\':\'object\')))));$x366=!(((gettype($x367)===gettype(\'object\')&&$x367===\'object\'))||(((is_float($x367)||is_int($x367))&&(is_float(\'object\')||is_int(\'object\')))&&$x367==\'object\'));if(JS::toBoolean($x366,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x370=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),136,13,\'<image>/02_object.js\');$_TypeError=&$x370[0];list(,$WTypeError,$STypeError,$UTypeError)=$x370;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x371=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),136,13,\'<image>/02_object.js\');$_ReferenceError=&$x371[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x371;$x372=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,13);$x373=$x372($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x373->class)&&$x373->class===\'Error\'&&!isset($x373->properties[\'file\'])&&!isset($x373->properties[\'line\'])&&!isset($x373->properties[\'column\'])){$x373->properties[\'file\']=\'<image>/02_object.js\';$x373->properties[\'line\']=136;$x373->properties[\'column\']=13;$x373->attributes[\'file\']=$x373->attributes[\'line\']=$x373->attributes[\'column\']=0;}throw new JSException($x373,136,13,\'<image>/02_object.js\');}$x368=clone JS::$objectTemplate;unset($x374,$W374,$S374,$U374);$x375=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),136,9,\'<image>/02_object.js\');$x374=&$x375[0];list(,$W374,$S374,$U374)=$x375;$x369=$x374;$x368->prototype=$x369;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x378=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x379=$x378($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x379->class)&&$x379->class===\'Error\'&&!isset($x379->properties[\'file\'])&&!isset($x379->properties[\'line\'])&&!isset($x379->properties[\'column\'])){$x379->properties[\'file\']=\'<image>/02_object.js\';$x379->properties[\'line\']=136;$x379->properties[\'column\']=9;$x379->attributes[\'file\']=$x379->attributes[\'line\']=$x379->attributes[\'column\']=0;}throw new JSException($x379,136,9,\'<image>/02_object.js\');}$x376=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x377=$x376($global,$x368,$_TypeError,array(\'Object.defineProperties(): Given properties argument is not an object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x369=$x377;if(is_object($x369)&&$x369!==JS::$undefined){$x368=$x369;}if(isset($x368->class)&&$x368->class===\'Error\'&&!isset($x368->properties[\'file\'])&&!isset($x368->properties[\'line\'])&&!isset($x368->properties[\'column\'])){$x368->properties[\'file\']=\'<image>/02_object.js\';$x368->properties[\'line\']=136;$x368->properties[\'column\']=3;$x368->attributes[\'file\']=$x368->attributes[\'line\']=$x368->attributes[\'column\']=0;}throw new JSException($x368,136,3,\'<image>/02_object.js\');}$scope->properties[\'p\']=JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$_p=JS::$undefined;if($_properties!==JS::$undefined&&$_properties!==NULL){for($x381=array(),$x380=JS::toObject($_properties,$global);$x380;$x380=$x380->prototype){foreach($x380->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x381[$property])){continue;}$x381[$property]=TRUE;$_p=$property;unset($_Object,$WObject,$SObject,$UObject);$x382=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'Object\',$global),140,3,\'<image>/02_object.js\');$_Object=&$x382[0];list(,$WObject,$SObject,$UObject)=$x382;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x383=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),140,3,\'<image>/02_object.js\');$_ReferenceError=&$x383[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x383;$x384=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,3);$x385=$x384($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x385->class)&&$x385->class===\'Error\'&&!isset($x385->properties[\'file\'])&&!isset($x385->properties[\'line\'])&&!isset($x385->properties[\'column\'])){$x385->properties[\'file\']=\'<image>/02_object.js\';$x385->properties[\'line\']=140;$x385->properties[\'column\']=3;$x385->attributes[\'file\']=$x385->attributes[\'line\']=$x385->attributes[\'column\']=0;}throw new JSException($x385,140,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x387=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),140,24,\'<image>/02_object.js\');$_TypeError=&$x387[0];list(,$WTypeError,$STypeError,$UTypeError)=$x387;$x388=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x389=$x388($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x389->class)&&$x389->class===\'Error\'&&!isset($x389->properties[\'file\'])&&!isset($x389->properties[\'line\'])&&!isset($x389->properties[\'column\'])){$x389->properties[\'file\']=\'<image>/02_object.js\';$x389->properties[\'line\']=140;$x389->properties[\'column\']=24;$x389->attributes[\'file\']=$x389->attributes[\'line\']=$x389->attributes[\'column\']=0;}throw new JSException($x389,140,24,\'<image>/02_object.js\');}$x386=JS::toObject($_Object,$global);unset($x390,$W390,$S390,$U390);$x391=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x386,JS::toString(\'defineProperty\',$global),140,24,\'<image>/02_object.js\');$x390=&$x391[0];list(,$W390,$S390,$U390)=$x391;unset($x392,$W392,$S392,$U392);$x393=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_properties,JS::toString($_p,$global),140,41,\'<image>/02_object.js\');$x392=&$x393[0];list(,$W392,$S392,$U392)=$x393;if(!(is_object($x390)&&isset($x390->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x396=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),140,24,\'<image>/02_object.js\');$_TypeError=&$x396[0];list(,$WTypeError,$STypeError,$UTypeError)=$x396;$x397=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x398=$x397($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x398->class)&&$x398->class===\'Error\'&&!isset($x398->properties[\'file\'])&&!isset($x398->properties[\'line\'])&&!isset($x398->properties[\'column\'])){$x398->properties[\'file\']=\'<image>/02_object.js\';$x398->properties[\'line\']=140;$x398->properties[\'column\']=24;$x398->attributes[\'file\']=$x398->attributes[\'line\']=$x398->attributes[\'column\']=0;}throw new JSException($x398,140,24,\'<image>/02_object.js\');}$x394=$x390->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x395=$x394($global,$x386,$x390,array($_o,$_p,$x392),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x411 =& $scope->properties['arguments'];
$x411->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x411->properties[$i] = $args[$i];
$x411->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x413 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x412 = $x413;
if (!JS::toBoolean($x412, $global)) {
$x416 = $_o;
$x416 = ($x416 === JS::$undefined ? 'undefined' : (is_int($x416) || is_float($x416) ? 'number' : (is_bool($x416) ? 'boolean' : (is_string($x416) ? 'string' : (is_object($x416) && isset($x416->call) ? 'function' : 'object')))));
$x415 = !(((gettype($x416) === gettype('object') && $x416 === 'object'))|| (((is_float($x416) || is_int($x416)) && (is_float('object') || is_int('object'))) && $x416 == 'object'));
$x414 = $x415;
if (JS::toBoolean($x414, $global)) {
$x418 = $_o;
$x418 = ($x418 === JS::$undefined ? 'undefined' : (is_int($x418) || is_float($x418) ? 'number' : (is_bool($x418) ? 'boolean' : (is_string($x418) ? 'string' : (is_object($x418) && isset($x418->call) ? 'function' : 'object')))));
$x417 = !(((gettype($x418) === gettype('function') && $x418 === 'function'))|| (((is_float($x418) || is_int($x418)) && (is_float('function') || is_int('function'))) && $x418 == 'function'));
$x414 = $x417; }
$x412 = $x414; }
if (JS::toBoolean($x412, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x421 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 148, 13, '<image>/02_object.js');
$_TypeError =& $x421[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x421;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x422 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 148, 13, '<image>/02_object.js');
$_ReferenceError =& $x422[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x422;
$x423 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 13);
$x424 = $x423($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x424->class) && $x424->class === 'Error' && !isset($x424->properties['file']) && !isset($x424->properties['line']) && !isset($x424->properties['column'])) {$x424->properties['file'] = '<image>/02_object.js';$x424->properties['line'] = 148;$x424->properties['column'] = 13;$x424->attributes['file'] = $x424->attributes['line'] = $x424->attributes['column'] = 0; }
throw new JSException($x424, 148, 13, '<image>/02_object.js');
}
$x419 = clone JS::$objectTemplate;
unset($x425, $W425, $S425, $U425);
$x426 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 148, 9, '<image>/02_object.js');
$x425 =& $x426[0]; list(,$W425,$S425,$U425) = $x426;
$x420 = $x425;
$x419->prototype = $x420;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x429 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x430 = $x429($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x430->class) && $x430->class === 'Error' && !isset($x430->properties['file']) && !isset($x430->properties['line']) && !isset($x430->properties['column'])) {$x430->properties['file'] = '<image>/02_object.js';$x430->properties['line'] = 148;$x430->properties['column'] = 9;$x430->attributes['file'] = $x430->attributes['line'] = $x430->attributes['column'] = 0; }
throw new JSException($x430, 148, 9, '<image>/02_object.js');
}
$x427 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x428 = $x427($global, $x419, $_TypeError, array('Object.seal(): Cannot seal non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x420 = $x428;
if (is_object($x420) && $x420 !== JS::$undefined) { $x419 = $x420; }
if (isset($x419->class) && $x419->class === 'Error' && !isset($x419->properties['file']) && !isset($x419->properties['line']) && !isset($x419->properties['column'])) {$x419->properties['file'] = '<image>/02_object.js';$x419->properties['line'] = 148;$x419->properties['column'] = 3;$x419->attributes['file'] = $x419->attributes['line'] = $x419->attributes['column'] = 0; }
throw new JSException($x419, 148, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x411=&$scope->properties[\'arguments\'];$x411->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x411->properties[$i]=$args[$i];$x411->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x413=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x412=$x413;if(!JS::toBoolean($x412,$global)){$x416=$_o;$x416=($x416===JS::$undefined?\'undefined\':(is_int($x416)||is_float($x416)?\'number\':(is_bool($x416)?\'boolean\':(is_string($x416)?\'string\':(is_object($x416)&&isset($x416->call)?\'function\':\'object\')))));$x415=!(((gettype($x416)===gettype(\'object\')&&$x416===\'object\'))||(((is_float($x416)||is_int($x416))&&(is_float(\'object\')||is_int(\'object\')))&&$x416==\'object\'));$x414=$x415;if(JS::toBoolean($x414,$global)){$x418=$_o;$x418=($x418===JS::$undefined?\'undefined\':(is_int($x418)||is_float($x418)?\'number\':(is_bool($x418)?\'boolean\':(is_string($x418)?\'string\':(is_object($x418)&&isset($x418->call)?\'function\':\'object\')))));$x417=!(((gettype($x418)===gettype(\'function\')&&$x418===\'function\'))||(((is_float($x418)||is_int($x418))&&(is_float(\'function\')||is_int(\'function\')))&&$x418==\'function\'));$x414=$x417;}$x412=$x414;}if(JS::toBoolean($x412,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x421=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),148,13,\'<image>/02_object.js\');$_TypeError=&$x421[0];list(,$WTypeError,$STypeError,$UTypeError)=$x421;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x422=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),148,13,\'<image>/02_object.js\');$_ReferenceError=&$x422[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x422;$x423=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,13);$x424=$x423($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x424->class)&&$x424->class===\'Error\'&&!isset($x424->properties[\'file\'])&&!isset($x424->properties[\'line\'])&&!isset($x424->properties[\'column\'])){$x424->properties[\'file\']=\'<image>/02_object.js\';$x424->properties[\'line\']=148;$x424->properties[\'column\']=13;$x424->attributes[\'file\']=$x424->attributes[\'line\']=$x424->attributes[\'column\']=0;}throw new JSException($x424,148,13,\'<image>/02_object.js\');}$x419=clone JS::$objectTemplate;unset($x425,$W425,$S425,$U425);$x426=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),148,9,\'<image>/02_object.js\');$x425=&$x426[0];list(,$W425,$S425,$U425)=$x426;$x420=$x425;$x419->prototype=$x420;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x429=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x430=$x429($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x430->class)&&$x430->class===\'Error\'&&!isset($x430->properties[\'file\'])&&!isset($x430->properties[\'line\'])&&!isset($x430->properties[\'column\'])){$x430->properties[\'file\']=\'<image>/02_object.js\';$x430->properties[\'line\']=148;$x430->properties[\'column\']=9;$x430->attributes[\'file\']=$x430->attributes[\'line\']=$x430->attributes[\'column\']=0;}throw new JSException($x430,148,9,\'<image>/02_object.js\');}$x427=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x428=$x427($global,$x419,$_TypeError,array(\'Object.seal(): Cannot seal non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x420=$x428;if(is_object($x420)&&$x420!==JS::$undefined){$x419=$x420;}if(isset($x419->class)&&$x419->class===\'Error\'&&!isset($x419->properties[\'file\'])&&!isset($x419->properties[\'line\'])&&!isset($x419->properties[\'column\'])){$x419->properties[\'file\']=\'<image>/02_object.js\';$x419->properties[\'line\']=148;$x419->properties[\'column\']=3;$x419->attributes[\'file\']=$x419->attributes[\'line\']=$x419->attributes[\'column\']=0;}throw new JSException($x419,148,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x443 =& $scope->properties['arguments'];
$x443->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x443->properties[$i] = $args[$i];
$x443->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x445 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x444 = $x445;
if (!JS::toBoolean($x444, $global)) {
$x448 = $_o;
$x448 = ($x448 === JS::$undefined ? 'undefined' : (is_int($x448) || is_float($x448) ? 'number' : (is_bool($x448) ? 'boolean' : (is_string($x448) ? 'string' : (is_object($x448) && isset($x448->call) ? 'function' : 'object')))));
$x447 = !(((gettype($x448) === gettype('object') && $x448 === 'object'))|| (((is_float($x448) || is_int($x448)) && (is_float('object') || is_int('object'))) && $x448 == 'object'));
$x446 = $x447;
if (JS::toBoolean($x446, $global)) {
$x450 = $_o;
$x450 = ($x450 === JS::$undefined ? 'undefined' : (is_int($x450) || is_float($x450) ? 'number' : (is_bool($x450) ? 'boolean' : (is_string($x450) ? 'string' : (is_object($x450) && isset($x450->call) ? 'function' : 'object')))));
$x449 = !(((gettype($x450) === gettype('function') && $x450 === 'function'))|| (((is_float($x450) || is_int($x450)) && (is_float('function') || is_int('function'))) && $x450 == 'function'));
$x446 = $x449; }
$x444 = $x446; }
if (JS::toBoolean($x444, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x453 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 13, '<image>/02_object.js');
$_TypeError =& $x453[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x453;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x454 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 164, 13, '<image>/02_object.js');
$_ReferenceError =& $x454[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x454;
$x455 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 13);
$x456 = $x455($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x456->class) && $x456->class === 'Error' && !isset($x456->properties['file']) && !isset($x456->properties['line']) && !isset($x456->properties['column'])) {$x456->properties['file'] = '<image>/02_object.js';$x456->properties['line'] = 164;$x456->properties['column'] = 13;$x456->attributes['file'] = $x456->attributes['line'] = $x456->attributes['column'] = 0; }
throw new JSException($x456, 164, 13, '<image>/02_object.js');
}
$x451 = clone JS::$objectTemplate;
unset($x457, $W457, $S457, $U457);
$x458 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 164, 9, '<image>/02_object.js');
$x457 =& $x458[0]; list(,$W457,$S457,$U457) = $x458;
$x452 = $x457;
$x451->prototype = $x452;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x461 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x462 = $x461($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x462->class) && $x462->class === 'Error' && !isset($x462->properties['file']) && !isset($x462->properties['line']) && !isset($x462->properties['column'])) {$x462->properties['file'] = '<image>/02_object.js';$x462->properties['line'] = 164;$x462->properties['column'] = 9;$x462->attributes['file'] = $x462->attributes['line'] = $x462->attributes['column'] = 0; }
throw new JSException($x462, 164, 9, '<image>/02_object.js');
}
$x459 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x460 = $x459($global, $x451, $_TypeError, array('Object.freeze(): Cannot freeze non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x452 = $x460;
if (is_object($x452) && $x452 !== JS::$undefined) { $x451 = $x452; }
if (isset($x451->class) && $x451->class === 'Error' && !isset($x451->properties['file']) && !isset($x451->properties['line']) && !isset($x451->properties['column'])) {$x451->properties['file'] = '<image>/02_object.js';$x451->properties['line'] = 164;$x451->properties['column'] = 3;$x451->attributes['file'] = $x451->attributes['line'] = $x451->attributes['column'] = 0; }
throw new JSException($x451, 164, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::WRITABLE;$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x443=&$scope->properties[\'arguments\'];$x443->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x443->properties[$i]=$args[$i];$x443->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x445=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x444=$x445;if(!JS::toBoolean($x444,$global)){$x448=$_o;$x448=($x448===JS::$undefined?\'undefined\':(is_int($x448)||is_float($x448)?\'number\':(is_bool($x448)?\'boolean\':(is_string($x448)?\'string\':(is_object($x448)&&isset($x448->call)?\'function\':\'object\')))));$x447=!(((gettype($x448)===gettype(\'object\')&&$x448===\'object\'))||(((is_float($x448)||is_int($x448))&&(is_float(\'object\')||is_int(\'object\')))&&$x448==\'object\'));$x446=$x447;if(JS::toBoolean($x446,$global)){$x450=$_o;$x450=($x450===JS::$undefined?\'undefined\':(is_int($x450)||is_float($x450)?\'number\':(is_bool($x450)?\'boolean\':(is_string($x450)?\'string\':(is_object($x450)&&isset($x450->call)?\'function\':\'object\')))));$x449=!(((gettype($x450)===gettype(\'function\')&&$x450===\'function\'))||(((is_float($x450)||is_int($x450))&&(is_float(\'function\')||is_int(\'function\')))&&$x450==\'function\'));$x446=$x449;}$x444=$x446;}if(JS::toBoolean($x444,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x453=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,13,\'<image>/02_object.js\');$_TypeError=&$x453[0];list(,$WTypeError,$STypeError,$UTypeError)=$x453;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x454=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),164,13,\'<image>/02_object.js\');$_ReferenceError=&$x454[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x454;$x455=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,13);$x456=$x455($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x456->class)&&$x456->class===\'Error\'&&!isset($x456->properties[\'file\'])&&!isset($x456->properties[\'line\'])&&!isset($x456->properties[\'column\'])){$x456->properties[\'file\']=\'<image>/02_object.js\';$x456->properties[\'line\']=164;$x456->properties[\'column\']=13;$x456->attributes[\'file\']=$x456->attributes[\'line\']=$x456->attributes[\'column\']=0;}throw new JSException($x456,164,13,\'<image>/02_object.js\');}$x451=clone JS::$objectTemplate;unset($x457,$W457,$S457,$U457);$x458=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),164,9,\'<image>/02_object.js\');$x457=&$x458[0];list(,$W457,$S457,$U457)=$x458;$x452=$x457;$x451->prototype=$x452;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x461=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x462=$x461($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x462->class)&&$x462->class===\'Error\'&&!isset($x462->properties[\'file\'])&&!isset($x462->properties[\'line\'])&&!isset($x462->properties[\'column\'])){$x462->properties[\'file\']=\'<image>/02_object.js\';$x462->properties[\'line\']=164;$x462->properties[\'column\']=9;$x462->attributes[\'file\']=$x462->attributes[\'line\']=$x462->attributes[\'column\']=0;}throw new JSException($x462,164,9,\'<image>/02_object.js\');}$x459=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x460=$x459($global,$x451,$_TypeError,array(\'Object.freeze(): Cannot freeze non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x452=$x460;if(is_object($x452)&&$x452!==JS::$undefined){$x451=$x452;}if(isset($x451->class)&&$x451->class===\'Error\'&&!isset($x451->properties[\'file\'])&&!isset($x451->properties[\'line\'])&&!isset($x451->properties[\'column\'])){$x451->properties[\'file\']=\'<image>/02_object.js\';$x451->properties[\'line\']=164;$x451->properties[\'column\']=3;$x451->attributes[\'file\']=$x451->attributes[\'line\']=$x451->attributes[\'column\']=0;}throw new JSException($x451,164,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::WRITABLE;$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x475 =& $scope->properties['arguments'];
$x475->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x475->properties[$i] = $args[$i];
$x475->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x477 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x476 = $x477;
if (!JS::toBoolean($x476, $global)) {
$x480 = $_o;
$x480 = ($x480 === JS::$undefined ? 'undefined' : (is_int($x480) || is_float($x480) ? 'number' : (is_bool($x480) ? 'boolean' : (is_string($x480) ? 'string' : (is_object($x480) && isset($x480->call) ? 'function' : 'object')))));
$x479 = !(((gettype($x480) === gettype('object') && $x480 === 'object'))|| (((is_float($x480) || is_int($x480)) && (is_float('object') || is_int('object'))) && $x480 == 'object'));
$x478 = $x479;
if (JS::toBoolean($x478, $global)) {
$x482 = $_o;
$x482 = ($x482 === JS::$undefined ? 'undefined' : (is_int($x482) || is_float($x482) ? 'number' : (is_bool($x482) ? 'boolean' : (is_string($x482) ? 'string' : (is_object($x482) && isset($x482->call) ? 'function' : 'object')))));
$x481 = !(((gettype($x482) === gettype('function') && $x482 === 'function'))|| (((is_float($x482) || is_int($x482)) && (is_float('function') || is_int('function'))) && $x482 == 'function'));
$x478 = $x481; }
$x476 = $x478; }
if (JS::toBoolean($x476, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x485 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 181, 13, '<image>/02_object.js');
$_TypeError =& $x485[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x485;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x486 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 181, 13, '<image>/02_object.js');
$_ReferenceError =& $x486[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x486;
$x487 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 13);
$x488 = $x487($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x488->class) && $x488->class === 'Error' && !isset($x488->properties['file']) && !isset($x488->properties['line']) && !isset($x488->properties['column'])) {$x488->properties['file'] = '<image>/02_object.js';$x488->properties['line'] = 181;$x488->properties['column'] = 13;$x488->attributes['file'] = $x488->attributes['line'] = $x488->attributes['column'] = 0; }
throw new JSException($x488, 181, 13, '<image>/02_object.js');
}
$x483 = clone JS::$objectTemplate;
unset($x489, $W489, $S489, $U489);
$x490 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 181, 9, '<image>/02_object.js');
$x489 =& $x490[0]; list(,$W489,$S489,$U489) = $x490;
$x484 = $x489;
$x483->prototype = $x484;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x493 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x494 = $x493($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x494->class) && $x494->class === 'Error' && !isset($x494->properties['file']) && !isset($x494->properties['line']) && !isset($x494->properties['column'])) {$x494->properties['file'] = '<image>/02_object.js';$x494->properties['line'] = 181;$x494->properties['column'] = 9;$x494->attributes['file'] = $x494->attributes['line'] = $x494->attributes['column'] = 0; }
throw new JSException($x494, 181, 9, '<image>/02_object.js');
}
$x491 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x492 = $x491($global, $x483, $_TypeError, array('Object.preventExtensions(): Cannot prevent extensions on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x484 = $x492;
if (is_object($x484) && $x484 !== JS::$undefined) { $x483 = $x484; }
if (isset($x483->class) && $x483->class === 'Error' && !isset($x483->properties['file']) && !isset($x483->properties['line']) && !isset($x483->properties['column'])) {$x483->properties['file'] = '<image>/02_object.js';$x483->properties['line'] = 181;$x483->properties['column'] = 3;$x483->attributes['file'] = $x483->attributes['line'] = $x483->attributes['column'] = 0; }
throw new JSException($x483, 181, 3, '<image>/02_object.js');;
};
$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x475=&$scope->properties[\'arguments\'];$x475->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x475->properties[$i]=$args[$i];$x475->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x477=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x476=$x477;if(!JS::toBoolean($x476,$global)){$x480=$_o;$x480=($x480===JS::$undefined?\'undefined\':(is_int($x480)||is_float($x480)?\'number\':(is_bool($x480)?\'boolean\':(is_string($x480)?\'string\':(is_object($x480)&&isset($x480->call)?\'function\':\'object\')))));$x479=!(((gettype($x480)===gettype(\'object\')&&$x480===\'object\'))||(((is_float($x480)||is_int($x480))&&(is_float(\'object\')||is_int(\'object\')))&&$x480==\'object\'));$x478=$x479;if(JS::toBoolean($x478,$global)){$x482=$_o;$x482=($x482===JS::$undefined?\'undefined\':(is_int($x482)||is_float($x482)?\'number\':(is_bool($x482)?\'boolean\':(is_string($x482)?\'string\':(is_object($x482)&&isset($x482->call)?\'function\':\'object\')))));$x481=!(((gettype($x482)===gettype(\'function\')&&$x482===\'function\'))||(((is_float($x482)||is_int($x482))&&(is_float(\'function\')||is_int(\'function\')))&&$x482==\'function\'));$x478=$x481;}$x476=$x478;}if(JS::toBoolean($x476,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x485=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),181,13,\'<image>/02_object.js\');$_TypeError=&$x485[0];list(,$WTypeError,$STypeError,$UTypeError)=$x485;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x486=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),181,13,\'<image>/02_object.js\');$_ReferenceError=&$x486[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x486;$x487=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,13);$x488=$x487($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x488->class)&&$x488->class===\'Error\'&&!isset($x488->properties[\'file\'])&&!isset($x488->properties[\'line\'])&&!isset($x488->properties[\'column\'])){$x488->properties[\'file\']=\'<image>/02_object.js\';$x488->properties[\'line\']=181;$x488->properties[\'column\']=13;$x488->attributes[\'file\']=$x488->attributes[\'line\']=$x488->attributes[\'column\']=0;}throw new JSException($x488,181,13,\'<image>/02_object.js\');}$x483=clone JS::$objectTemplate;unset($x489,$W489,$S489,$U489);$x490=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),181,9,\'<image>/02_object.js\');$x489=&$x490[0];list(,$W489,$S489,$U489)=$x490;$x484=$x489;$x483->prototype=$x484;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x493=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x494=$x493($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x494->class)&&$x494->class===\'Error\'&&!isset($x494->properties[\'file\'])&&!isset($x494->properties[\'line\'])&&!isset($x494->properties[\'column\'])){$x494->properties[\'file\']=\'<image>/02_object.js\';$x494->properties[\'line\']=181;$x494->properties[\'column\']=9;$x494->attributes[\'file\']=$x494->attributes[\'line\']=$x494->attributes[\'column\']=0;}throw new JSException($x494,181,9,\'<image>/02_object.js\');}$x491=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x492=$x491($global,$x483,$_TypeError,array(\'Object.preventExtensions(): Cannot prevent extensions on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x484=$x492;if(is_object($x484)&&$x484!==JS::$undefined){$x483=$x484;}if(isset($x483->class)&&$x483->class===\'Error\'&&!isset($x483->properties[\'file\'])&&!isset($x483->properties[\'line\'])&&!isset($x483->properties[\'column\'])){$x483->properties[\'file\']=\'<image>/02_object.js\';$x483->properties[\'line\']=181;$x483->properties[\'column\']=3;$x483->attributes[\'file\']=$x483->attributes[\'line\']=$x483->attributes[\'column\']=0;}throw new JSException($x483,181,3,\'<image>/02_object.js\');}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x507 =& $scope->properties['arguments'];
$x507->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x507->properties[$i] = $args[$i];
$x507->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x509 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x508 = $x509;
if (!JS::toBoolean($x508, $global)) {
$x512 = $_o;
$x512 = ($x512 === JS::$undefined ? 'undefined' : (is_int($x512) || is_float($x512) ? 'number' : (is_bool($x512) ? 'boolean' : (is_string($x512) ? 'string' : (is_object($x512) && isset($x512->call) ? 'function' : 'object')))));
$x511 = !(((gettype($x512) === gettype('object') && $x512 === 'object'))|| (((is_float($x512) || is_int($x512)) && (is_float('object') || is_int('object'))) && $x512 == 'object'));
$x510 = $x511;
if (JS::toBoolean($x510, $global)) {
$x514 = $_o;
$x514 = ($x514 === JS::$undefined ? 'undefined' : (is_int($x514) || is_float($x514) ? 'number' : (is_bool($x514) ? 'boolean' : (is_string($x514) ? 'string' : (is_object($x514) && isset($x514->call) ? 'function' : 'object')))));
$x513 = !(((gettype($x514) === gettype('function') && $x514 === 'function'))|| (((is_float($x514) || is_int($x514)) && (is_float('function') || is_int('function'))) && $x514 == 'function'));
$x510 = $x513; }
$x508 = $x510; }
if (JS::toBoolean($x508, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x517 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 191, 13, '<image>/02_object.js');
$_TypeError =& $x517[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x517;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x518 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 191, 13, '<image>/02_object.js');
$_ReferenceError =& $x518[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x518;
$x519 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 13);
$x520 = $x519($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x520->class) && $x520->class === 'Error' && !isset($x520->properties['file']) && !isset($x520->properties['line']) && !isset($x520->properties['column'])) {$x520->properties['file'] = '<image>/02_object.js';$x520->properties['line'] = 191;$x520->properties['column'] = 13;$x520->attributes['file'] = $x520->attributes['line'] = $x520->attributes['column'] = 0; }
throw new JSException($x520, 191, 13, '<image>/02_object.js');
}
$x515 = clone JS::$objectTemplate;
unset($x521, $W521, $S521, $U521);
$x522 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 191, 9, '<image>/02_object.js');
$x521 =& $x522[0]; list(,$W521,$S521,$U521) = $x522;
$x516 = $x521;
$x515->prototype = $x516;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x525 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x526 = $x525($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x526->class) && $x526->class === 'Error' && !isset($x526->properties['file']) && !isset($x526->properties['line']) && !isset($x526->properties['column'])) {$x526->properties['file'] = '<image>/02_object.js';$x526->properties['line'] = 191;$x526->properties['column'] = 9;$x526->attributes['file'] = $x526->attributes['line'] = $x526->attributes['column'] = 0; }
throw new JSException($x526, 191, 9, '<image>/02_object.js');
}
$x523 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x524 = $x523($global, $x515, $_TypeError, array('Object.isSealed(): Cannot return if sealed, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x516 = $x524;
if (is_object($x516) && $x516 !== JS::$undefined) { $x515 = $x516; }
if (isset($x515->class) && $x515->class === 'Error' && !isset($x515->properties['file']) && !isset($x515->properties['line']) && !isset($x515->properties['column'])) {$x515->properties['file'] = '<image>/02_object.js';$x515->properties['line'] = 191;$x515->properties['column'] = 3;$x515->attributes['file'] = $x515->attributes['line'] = $x515->attributes['column'] = 0; }
throw new JSException($x515, 191, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {
			if ($_o->attributes[$property] & JS::CONFIGURABLE) {
				return FALSE;
			}
		}

		return !$_o->extensible;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x507=&$scope->properties[\'arguments\'];$x507->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x507->properties[$i]=$args[$i];$x507->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x509=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x508=$x509;if(!JS::toBoolean($x508,$global)){$x512=$_o;$x512=($x512===JS::$undefined?\'undefined\':(is_int($x512)||is_float($x512)?\'number\':(is_bool($x512)?\'boolean\':(is_string($x512)?\'string\':(is_object($x512)&&isset($x512->call)?\'function\':\'object\')))));$x511=!(((gettype($x512)===gettype(\'object\')&&$x512===\'object\'))||(((is_float($x512)||is_int($x512))&&(is_float(\'object\')||is_int(\'object\')))&&$x512==\'object\'));$x510=$x511;if(JS::toBoolean($x510,$global)){$x514=$_o;$x514=($x514===JS::$undefined?\'undefined\':(is_int($x514)||is_float($x514)?\'number\':(is_bool($x514)?\'boolean\':(is_string($x514)?\'string\':(is_object($x514)&&isset($x514->call)?\'function\':\'object\')))));$x513=!(((gettype($x514)===gettype(\'function\')&&$x514===\'function\'))||(((is_float($x514)||is_int($x514))&&(is_float(\'function\')||is_int(\'function\')))&&$x514==\'function\'));$x510=$x513;}$x508=$x510;}if(JS::toBoolean($x508,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x517=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),191,13,\'<image>/02_object.js\');$_TypeError=&$x517[0];list(,$WTypeError,$STypeError,$UTypeError)=$x517;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x518=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),191,13,\'<image>/02_object.js\');$_ReferenceError=&$x518[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x518;$x519=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,13);$x520=$x519($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x520->class)&&$x520->class===\'Error\'&&!isset($x520->properties[\'file\'])&&!isset($x520->properties[\'line\'])&&!isset($x520->properties[\'column\'])){$x520->properties[\'file\']=\'<image>/02_object.js\';$x520->properties[\'line\']=191;$x520->properties[\'column\']=13;$x520->attributes[\'file\']=$x520->attributes[\'line\']=$x520->attributes[\'column\']=0;}throw new JSException($x520,191,13,\'<image>/02_object.js\');}$x515=clone JS::$objectTemplate;unset($x521,$W521,$S521,$U521);$x522=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),191,9,\'<image>/02_object.js\');$x521=&$x522[0];list(,$W521,$S521,$U521)=$x522;$x516=$x521;$x515->prototype=$x516;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x525=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x526=$x525($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x526->class)&&$x526->class===\'Error\'&&!isset($x526->properties[\'file\'])&&!isset($x526->properties[\'line\'])&&!isset($x526->properties[\'column\'])){$x526->properties[\'file\']=\'<image>/02_object.js\';$x526->properties[\'line\']=191;$x526->properties[\'column\']=9;$x526->attributes[\'file\']=$x526->attributes[\'line\']=$x526->attributes[\'column\']=0;}throw new JSException($x526,191,9,\'<image>/02_object.js\');}$x523=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x524=$x523($global,$x515,$_TypeError,array(\'Object.isSealed(): Cannot return if sealed, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x516=$x524;if(is_object($x516)&&$x516!==JS::$undefined){$x515=$x516;}if(isset($x515->class)&&$x515->class===\'Error\'&&!isset($x515->properties[\'file\'])&&!isset($x515->properties[\'line\'])&&!isset($x515->properties[\'column\'])){$x515->properties[\'file\']=\'<image>/02_object.js\';$x515->properties[\'line\']=191;$x515->properties[\'column\']=3;$x515->attributes[\'file\']=$x515->attributes[\'line\']=$x515->attributes[\'column\']=0;}throw new JSException($x515,191,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&JS::CONFIGURABLE){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x539 =& $scope->properties['arguments'];
$x539->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x539->properties[$i] = $args[$i];
$x539->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x541 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x540 = $x541;
if (!JS::toBoolean($x540, $global)) {
$x544 = $_o;
$x544 = ($x544 === JS::$undefined ? 'undefined' : (is_int($x544) || is_float($x544) ? 'number' : (is_bool($x544) ? 'boolean' : (is_string($x544) ? 'string' : (is_object($x544) && isset($x544->call) ? 'function' : 'object')))));
$x543 = !(((gettype($x544) === gettype('object') && $x544 === 'object'))|| (((is_float($x544) || is_int($x544)) && (is_float('object') || is_int('object'))) && $x544 == 'object'));
$x542 = $x543;
if (JS::toBoolean($x542, $global)) {
$x546 = $_o;
$x546 = ($x546 === JS::$undefined ? 'undefined' : (is_int($x546) || is_float($x546) ? 'number' : (is_bool($x546) ? 'boolean' : (is_string($x546) ? 'string' : (is_object($x546) && isset($x546->call) ? 'function' : 'object')))));
$x545 = !(((gettype($x546) === gettype('function') && $x546 === 'function'))|| (((is_float($x546) || is_int($x546)) && (is_float('function') || is_int('function'))) && $x546 == 'function'));
$x542 = $x545; }
$x540 = $x542; }
if (JS::toBoolean($x540, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x549 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 207, 13, '<image>/02_object.js');
$_TypeError =& $x549[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x549;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x550 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 207, 13, '<image>/02_object.js');
$_ReferenceError =& $x550[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x550;
$x551 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 13);
$x552 = $x551($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x552->class) && $x552->class === 'Error' && !isset($x552->properties['file']) && !isset($x552->properties['line']) && !isset($x552->properties['column'])) {$x552->properties['file'] = '<image>/02_object.js';$x552->properties['line'] = 207;$x552->properties['column'] = 13;$x552->attributes['file'] = $x552->attributes['line'] = $x552->attributes['column'] = 0; }
throw new JSException($x552, 207, 13, '<image>/02_object.js');
}
$x547 = clone JS::$objectTemplate;
unset($x553, $W553, $S553, $U553);
$x554 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 207, 9, '<image>/02_object.js');
$x553 =& $x554[0]; list(,$W553,$S553,$U553) = $x554;
$x548 = $x553;
$x547->prototype = $x548;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x557 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x558 = $x557($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x558->class) && $x558->class === 'Error' && !isset($x558->properties['file']) && !isset($x558->properties['line']) && !isset($x558->properties['column'])) {$x558->properties['file'] = '<image>/02_object.js';$x558->properties['line'] = 207;$x558->properties['column'] = 9;$x558->attributes['file'] = $x558->attributes['line'] = $x558->attributes['column'] = 0; }
throw new JSException($x558, 207, 9, '<image>/02_object.js');
}
$x555 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x556 = $x555($global, $x547, $_TypeError, array('Object.isFrozen(): Cannot return if frozen, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x548 = $x556;
if (is_object($x548) && $x548 !== JS::$undefined) { $x547 = $x548; }
if (isset($x547->class) && $x547->class === 'Error' && !isset($x547->properties['file']) && !isset($x547->properties['line']) && !isset($x547->properties['column'])) {$x547->properties['file'] = '<image>/02_object.js';$x547->properties['line'] = 207;$x547->properties['column'] = 3;$x547->attributes['file'] = $x547->attributes['line'] = $x547->attributes['column'] = 0; }
throw new JSException($x547, 207, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {
			if ($_o->attributes[$property] & (JS::CONFIGURABLE | JS::WRITABLE)) {
				return FALSE;
			}
		}

		return !$_o->extensible;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x539=&$scope->properties[\'arguments\'];$x539->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x539->properties[$i]=$args[$i];$x539->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x541=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x540=$x541;if(!JS::toBoolean($x540,$global)){$x544=$_o;$x544=($x544===JS::$undefined?\'undefined\':(is_int($x544)||is_float($x544)?\'number\':(is_bool($x544)?\'boolean\':(is_string($x544)?\'string\':(is_object($x544)&&isset($x544->call)?\'function\':\'object\')))));$x543=!(((gettype($x544)===gettype(\'object\')&&$x544===\'object\'))||(((is_float($x544)||is_int($x544))&&(is_float(\'object\')||is_int(\'object\')))&&$x544==\'object\'));$x542=$x543;if(JS::toBoolean($x542,$global)){$x546=$_o;$x546=($x546===JS::$undefined?\'undefined\':(is_int($x546)||is_float($x546)?\'number\':(is_bool($x546)?\'boolean\':(is_string($x546)?\'string\':(is_object($x546)&&isset($x546->call)?\'function\':\'object\')))));$x545=!(((gettype($x546)===gettype(\'function\')&&$x546===\'function\'))||(((is_float($x546)||is_int($x546))&&(is_float(\'function\')||is_int(\'function\')))&&$x546==\'function\'));$x542=$x545;}$x540=$x542;}if(JS::toBoolean($x540,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x549=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),207,13,\'<image>/02_object.js\');$_TypeError=&$x549[0];list(,$WTypeError,$STypeError,$UTypeError)=$x549;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x550=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),207,13,\'<image>/02_object.js\');$_ReferenceError=&$x550[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x550;$x551=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,13);$x552=$x551($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x552->class)&&$x552->class===\'Error\'&&!isset($x552->properties[\'file\'])&&!isset($x552->properties[\'line\'])&&!isset($x552->properties[\'column\'])){$x552->properties[\'file\']=\'<image>/02_object.js\';$x552->properties[\'line\']=207;$x552->properties[\'column\']=13;$x552->attributes[\'file\']=$x552->attributes[\'line\']=$x552->attributes[\'column\']=0;}throw new JSException($x552,207,13,\'<image>/02_object.js\');}$x547=clone JS::$objectTemplate;unset($x553,$W553,$S553,$U553);$x554=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),207,9,\'<image>/02_object.js\');$x553=&$x554[0];list(,$W553,$S553,$U553)=$x554;$x548=$x553;$x547->prototype=$x548;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x557=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x558=$x557($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x558->class)&&$x558->class===\'Error\'&&!isset($x558->properties[\'file\'])&&!isset($x558->properties[\'line\'])&&!isset($x558->properties[\'column\'])){$x558->properties[\'file\']=\'<image>/02_object.js\';$x558->properties[\'line\']=207;$x558->properties[\'column\']=9;$x558->attributes[\'file\']=$x558->attributes[\'line\']=$x558->attributes[\'column\']=0;}throw new JSException($x558,207,9,\'<image>/02_object.js\');}$x555=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x556=$x555($global,$x547,$_TypeError,array(\'Object.isFrozen(): Cannot return if frozen, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x548=$x556;if(is_object($x548)&&$x548!==JS::$undefined){$x547=$x548;}if(isset($x547->class)&&$x547->class===\'Error\'&&!isset($x547->properties[\'file\'])&&!isset($x547->properties[\'line\'])&&!isset($x547->properties[\'column\'])){$x547->properties[\'file\']=\'<image>/02_object.js\';$x547->properties[\'line\']=207;$x547->properties[\'column\']=3;$x547->attributes[\'file\']=$x547->attributes[\'line\']=$x547->attributes[\'column\']=0;}throw new JSException($x547,207,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&(JS::CONFIGURABLE|JS::WRITABLE)){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x571 =& $scope->properties['arguments'];
$x571->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x571->properties[$i] = $args[$i];
$x571->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x573 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x572 = $x573;
if (!JS::toBoolean($x572, $global)) {
$x576 = $_o;
$x576 = ($x576 === JS::$undefined ? 'undefined' : (is_int($x576) || is_float($x576) ? 'number' : (is_bool($x576) ? 'boolean' : (is_string($x576) ? 'string' : (is_object($x576) && isset($x576->call) ? 'function' : 'object')))));
$x575 = !(((gettype($x576) === gettype('object') && $x576 === 'object'))|| (((is_float($x576) || is_int($x576)) && (is_float('object') || is_int('object'))) && $x576 == 'object'));
$x574 = $x575;
if (JS::toBoolean($x574, $global)) {
$x578 = $_o;
$x578 = ($x578 === JS::$undefined ? 'undefined' : (is_int($x578) || is_float($x578) ? 'number' : (is_bool($x578) ? 'boolean' : (is_string($x578) ? 'string' : (is_object($x578) && isset($x578->call) ? 'function' : 'object')))));
$x577 = !(((gettype($x578) === gettype('function') && $x578 === 'function'))|| (((is_float($x578) || is_int($x578)) && (is_float('function') || is_int('function'))) && $x578 == 'function'));
$x574 = $x577; }
$x572 = $x574; }
if (JS::toBoolean($x572, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x581 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 223, 13, '<image>/02_object.js');
$_TypeError =& $x581[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x581;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x582 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 223, 13, '<image>/02_object.js');
$_ReferenceError =& $x582[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x582;
$x583 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 13);
$x584 = $x583($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x584->class) && $x584->class === 'Error' && !isset($x584->properties['file']) && !isset($x584->properties['line']) && !isset($x584->properties['column'])) {$x584->properties['file'] = '<image>/02_object.js';$x584->properties['line'] = 223;$x584->properties['column'] = 13;$x584->attributes['file'] = $x584->attributes['line'] = $x584->attributes['column'] = 0; }
throw new JSException($x584, 223, 13, '<image>/02_object.js');
}
$x579 = clone JS::$objectTemplate;
unset($x585, $W585, $S585, $U585);
$x586 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 223, 9, '<image>/02_object.js');
$x585 =& $x586[0]; list(,$W585,$S585,$U585) = $x586;
$x580 = $x585;
$x579->prototype = $x580;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x589 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x590 = $x589($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x590->class) && $x590->class === 'Error' && !isset($x590->properties['file']) && !isset($x590->properties['line']) && !isset($x590->properties['column'])) {$x590->properties['file'] = '<image>/02_object.js';$x590->properties['line'] = 223;$x590->properties['column'] = 9;$x590->attributes['file'] = $x590->attributes['line'] = $x590->attributes['column'] = 0; }
throw new JSException($x590, 223, 9, '<image>/02_object.js');
}
$x587 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x588 = $x587($global, $x579, $_TypeError, array('Object.isExtensible(): Cannot return if extensible, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x580 = $x588;
if (is_object($x580) && $x580 !== JS::$undefined) { $x579 = $x580; }
if (isset($x579->class) && $x579->class === 'Error' && !isset($x579->properties['file']) && !isset($x579->properties['line']) && !isset($x579->properties['column'])) {$x579->properties['file'] = '<image>/02_object.js';$x579->properties['line'] = 223;$x579->properties['column'] = 3;$x579->attributes['file'] = $x579->attributes['line'] = $x579->attributes['column'] = 0; }
throw new JSException($x579, 223, 3, '<image>/02_object.js');;
};
return$_o->extensible;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x571=&$scope->properties[\'arguments\'];$x571->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x571->properties[$i]=$args[$i];$x571->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x573=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x572=$x573;if(!JS::toBoolean($x572,$global)){$x576=$_o;$x576=($x576===JS::$undefined?\'undefined\':(is_int($x576)||is_float($x576)?\'number\':(is_bool($x576)?\'boolean\':(is_string($x576)?\'string\':(is_object($x576)&&isset($x576->call)?\'function\':\'object\')))));$x575=!(((gettype($x576)===gettype(\'object\')&&$x576===\'object\'))||(((is_float($x576)||is_int($x576))&&(is_float(\'object\')||is_int(\'object\')))&&$x576==\'object\'));$x574=$x575;if(JS::toBoolean($x574,$global)){$x578=$_o;$x578=($x578===JS::$undefined?\'undefined\':(is_int($x578)||is_float($x578)?\'number\':(is_bool($x578)?\'boolean\':(is_string($x578)?\'string\':(is_object($x578)&&isset($x578->call)?\'function\':\'object\')))));$x577=!(((gettype($x578)===gettype(\'function\')&&$x578===\'function\'))||(((is_float($x578)||is_int($x578))&&(is_float(\'function\')||is_int(\'function\')))&&$x578==\'function\'));$x574=$x577;}$x572=$x574;}if(JS::toBoolean($x572,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x581=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),223,13,\'<image>/02_object.js\');$_TypeError=&$x581[0];list(,$WTypeError,$STypeError,$UTypeError)=$x581;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x582=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),223,13,\'<image>/02_object.js\');$_ReferenceError=&$x582[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x582;$x583=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,13);$x584=$x583($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x584->class)&&$x584->class===\'Error\'&&!isset($x584->properties[\'file\'])&&!isset($x584->properties[\'line\'])&&!isset($x584->properties[\'column\'])){$x584->properties[\'file\']=\'<image>/02_object.js\';$x584->properties[\'line\']=223;$x584->properties[\'column\']=13;$x584->attributes[\'file\']=$x584->attributes[\'line\']=$x584->attributes[\'column\']=0;}throw new JSException($x584,223,13,\'<image>/02_object.js\');}$x579=clone JS::$objectTemplate;unset($x585,$W585,$S585,$U585);$x586=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),223,9,\'<image>/02_object.js\');$x585=&$x586[0];list(,$W585,$S585,$U585)=$x586;$x580=$x585;$x579->prototype=$x580;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x589=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x590=$x589($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x590->class)&&$x590->class===\'Error\'&&!isset($x590->properties[\'file\'])&&!isset($x590->properties[\'line\'])&&!isset($x590->properties[\'column\'])){$x590->properties[\'file\']=\'<image>/02_object.js\';$x590->properties[\'line\']=223;$x590->properties[\'column\']=9;$x590->attributes[\'file\']=$x590->attributes[\'line\']=$x590->attributes[\'column\']=0;}throw new JSException($x590,223,9,\'<image>/02_object.js\');}$x587=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x588=$x587($global,$x579,$_TypeError,array(\'Object.isExtensible(): Cannot return if extensible, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x580=$x588;if(is_object($x580)&&$x580!==JS::$undefined){$x579=$x580;}if(isset($x579->class)&&$x579->class===\'Error\'&&!isset($x579->properties[\'file\'])&&!isset($x579->properties[\'line\'])&&!isset($x579->properties[\'column\'])){$x579->properties[\'file\']=\'<image>/02_object.js\';$x579->properties[\'line\']=223;$x579->properties[\'column\']=3;$x579->attributes[\'file\']=$x579->attributes[\'line\']=$x579->attributes[\'column\']=0;}throw new JSException($x579,223,3,\'<image>/02_object.js\');}return$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x603 =& $scope->properties['arguments'];
$x603->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x603->properties[$i] = $args[$i];
$x603->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x605 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x604 = $x605;
if (!JS::toBoolean($x604, $global)) {
$x608 = $_o;
$x608 = ($x608 === JS::$undefined ? 'undefined' : (is_int($x608) || is_float($x608) ? 'number' : (is_bool($x608) ? 'boolean' : (is_string($x608) ? 'string' : (is_object($x608) && isset($x608->call) ? 'function' : 'object')))));
$x607 = !(((gettype($x608) === gettype('object') && $x608 === 'object'))|| (((is_float($x608) || is_int($x608)) && (is_float('object') || is_int('object'))) && $x608 == 'object'));
$x606 = $x607;
if (JS::toBoolean($x606, $global)) {
$x610 = $_o;
$x610 = ($x610 === JS::$undefined ? 'undefined' : (is_int($x610) || is_float($x610) ? 'number' : (is_bool($x610) ? 'boolean' : (is_string($x610) ? 'string' : (is_object($x610) && isset($x610->call) ? 'function' : 'object')))));
$x609 = !(((gettype($x610) === gettype('function') && $x610 === 'function'))|| (((is_float($x610) || is_int($x610)) && (is_float('function') || is_int('function'))) && $x610 == 'function'));
$x606 = $x609; }
$x604 = $x606; }
if (JS::toBoolean($x604, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x613 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 231, 13, '<image>/02_object.js');
$_TypeError =& $x613[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x613;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x614 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 231, 13, '<image>/02_object.js');
$_ReferenceError =& $x614[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x614;
$x615 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 13);
$x616 = $x615($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x616->class) && $x616->class === 'Error' && !isset($x616->properties['file']) && !isset($x616->properties['line']) && !isset($x616->properties['column'])) {$x616->properties['file'] = '<image>/02_object.js';$x616->properties['line'] = 231;$x616->properties['column'] = 13;$x616->attributes['file'] = $x616->attributes['line'] = $x616->attributes['column'] = 0; }
throw new JSException($x616, 231, 13, '<image>/02_object.js');
}
$x611 = clone JS::$objectTemplate;
unset($x617, $W617, $S617, $U617);
$x618 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 231, 9, '<image>/02_object.js');
$x617 =& $x618[0]; list(,$W617,$S617,$U617) = $x618;
$x612 = $x617;
$x611->prototype = $x612;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x621 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x622 = $x621($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x622->class) && $x622->class === 'Error' && !isset($x622->properties['file']) && !isset($x622->properties['line']) && !isset($x622->properties['column'])) {$x622->properties['file'] = '<image>/02_object.js';$x622->properties['line'] = 231;$x622->properties['column'] = 9;$x622->attributes['file'] = $x622->attributes['line'] = $x622->attributes['column'] = 0; }
throw new JSException($x622, 231, 9, '<image>/02_object.js');
}
$x619 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x620 = $x619($global, $x611, $_TypeError, array('Object.keys(): Cannot return keys, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x612 = $x620;
if (is_object($x612) && $x612 !== JS::$undefined) { $x611 = $x612; }
if (isset($x611->class) && $x611->class === 'Error' && !isset($x611->properties['file']) && !isset($x611->properties['line']) && !isset($x611->properties['column'])) {$x611->properties['file'] = '<image>/02_object.js';$x611->properties['line'] = 231;$x611->properties['column'] = 3;$x611->attributes['file'] = $x611->attributes['line'] = $x611->attributes['column'] = 0; }
throw new JSException($x611, 231, 3, '<image>/02_object.js');;
};
$x623 = clone JS::$arrayTemplate;
$x623->properties['length'] = 0;
$x623->attributes['length'] = JS::WRITABLE;
$scope->properties['keys'] = JS::$undefined; $_keys =& $scope->properties['keys'];
$Ukeys = FALSE;
$_keys = $x623;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_o !== JS::$undefined && $_o !== NULL) {
for ($x625 = array(), $x624 = JS::toObject($_o, $global); $x624; $x624 = $x624->prototype) {
foreach ($x624->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x625[$property])) { continue; }
$x625[$property] = TRUE;
$_k = $property;

if ($_keys === JS::$undefined || $_keys === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x627 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 12, '<image>/02_object.js');
$_TypeError =& $x627[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x627;
$x628 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x629 = $x628($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x629->class) && $x629->class === 'Error' && !isset($x629->properties['file']) && !isset($x629->properties['line']) && !isset($x629->properties['column'])) {$x629->properties['file'] = '<image>/02_object.js';$x629->properties['line'] = 237;$x629->properties['column'] = 12;$x629->attributes['file'] = $x629->attributes['line'] = $x629->attributes['column'] = 0; }
throw new JSException($x629, 237, 12, '<image>/02_object.js');
}
$x626 = JS::toObject($_keys, $global);
unset($x630, $W630, $S630, $U630);
$x631 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x626, JS::toString('push', $global), 237, 12, '<image>/02_object.js');
$x630 =& $x631[0]; list(,$W630,$S630,$U630) = $x631;
if (!(is_object($x630) && isset($x630->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x634 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 12, '<image>/02_object.js');
$_TypeError =& $x634[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x634;
$x635 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x636 = $x635($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x636->class) && $x636->class === 'Error' && !isset($x636->properties['file']) && !isset($x636->properties['line']) && !isset($x636->properties['column'])) {$x636->properties['file'] = '<image>/02_object.js';$x636->properties['line'] = 237;$x636->properties['column'] = 12;$x636->attributes['file'] = $x636->attributes['line'] = $x636->attributes['column'] = 0; }
throw new JSException($x636, 237, 12, '<image>/02_object.js');
}
$x632 = $x630->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x633 = $x632($global, $x626, $x630, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_keys;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x603=&$scope->properties[\'arguments\'];$x603->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x603->properties[$i]=$args[$i];$x603->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x605=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x604=$x605;if(!JS::toBoolean($x604,$global)){$x608=$_o;$x608=($x608===JS::$undefined?\'undefined\':(is_int($x608)||is_float($x608)?\'number\':(is_bool($x608)?\'boolean\':(is_string($x608)?\'string\':(is_object($x608)&&isset($x608->call)?\'function\':\'object\')))));$x607=!(((gettype($x608)===gettype(\'object\')&&$x608===\'object\'))||(((is_float($x608)||is_int($x608))&&(is_float(\'object\')||is_int(\'object\')))&&$x608==\'object\'));$x606=$x607;if(JS::toBoolean($x606,$global)){$x610=$_o;$x610=($x610===JS::$undefined?\'undefined\':(is_int($x610)||is_float($x610)?\'number\':(is_bool($x610)?\'boolean\':(is_string($x610)?\'string\':(is_object($x610)&&isset($x610->call)?\'function\':\'object\')))));$x609=!(((gettype($x610)===gettype(\'function\')&&$x610===\'function\'))||(((is_float($x610)||is_int($x610))&&(is_float(\'function\')||is_int(\'function\')))&&$x610==\'function\'));$x606=$x609;}$x604=$x606;}if(JS::toBoolean($x604,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x613=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),231,13,\'<image>/02_object.js\');$_TypeError=&$x613[0];list(,$WTypeError,$STypeError,$UTypeError)=$x613;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x614=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),231,13,\'<image>/02_object.js\');$_ReferenceError=&$x614[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x614;$x615=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,13);$x616=$x615($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x616->class)&&$x616->class===\'Error\'&&!isset($x616->properties[\'file\'])&&!isset($x616->properties[\'line\'])&&!isset($x616->properties[\'column\'])){$x616->properties[\'file\']=\'<image>/02_object.js\';$x616->properties[\'line\']=231;$x616->properties[\'column\']=13;$x616->attributes[\'file\']=$x616->attributes[\'line\']=$x616->attributes[\'column\']=0;}throw new JSException($x616,231,13,\'<image>/02_object.js\');}$x611=clone JS::$objectTemplate;unset($x617,$W617,$S617,$U617);$x618=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),231,9,\'<image>/02_object.js\');$x617=&$x618[0];list(,$W617,$S617,$U617)=$x618;$x612=$x617;$x611->prototype=$x612;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x621=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x622=$x621($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x622->class)&&$x622->class===\'Error\'&&!isset($x622->properties[\'file\'])&&!isset($x622->properties[\'line\'])&&!isset($x622->properties[\'column\'])){$x622->properties[\'file\']=\'<image>/02_object.js\';$x622->properties[\'line\']=231;$x622->properties[\'column\']=9;$x622->attributes[\'file\']=$x622->attributes[\'line\']=$x622->attributes[\'column\']=0;}throw new JSException($x622,231,9,\'<image>/02_object.js\');}$x619=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x620=$x619($global,$x611,$_TypeError,array(\'Object.keys(): Cannot return keys, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x612=$x620;if(is_object($x612)&&$x612!==JS::$undefined){$x611=$x612;}if(isset($x611->class)&&$x611->class===\'Error\'&&!isset($x611->properties[\'file\'])&&!isset($x611->properties[\'line\'])&&!isset($x611->properties[\'column\'])){$x611->properties[\'file\']=\'<image>/02_object.js\';$x611->properties[\'line\']=231;$x611->properties[\'column\']=3;$x611->attributes[\'file\']=$x611->attributes[\'line\']=$x611->attributes[\'column\']=0;}throw new JSException($x611,231,3,\'<image>/02_object.js\');}$x623=clone JS::$arrayTemplate;$x623->properties[\'length\']=0;$x623->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'keys\']=JS::$undefined;$_keys=&$scope->properties[\'keys\'];$Ukeys=FALSE;$_keys=$x623;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_o!==JS::$undefined&&$_o!==NULL){for($x625=array(),$x624=JS::toObject($_o,$global);$x624;$x624=$x624->prototype){foreach($x624->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x625[$property])){continue;}$x625[$property]=TRUE;$_k=$property;if($_keys===JS::$undefined||$_keys===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x627=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,12,\'<image>/02_object.js\');$_TypeError=&$x627[0];list(,$WTypeError,$STypeError,$UTypeError)=$x627;$x628=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x629=$x628($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x629->class)&&$x629->class===\'Error\'&&!isset($x629->properties[\'file\'])&&!isset($x629->properties[\'line\'])&&!isset($x629->properties[\'column\'])){$x629->properties[\'file\']=\'<image>/02_object.js\';$x629->properties[\'line\']=237;$x629->properties[\'column\']=12;$x629->attributes[\'file\']=$x629->attributes[\'line\']=$x629->attributes[\'column\']=0;}throw new JSException($x629,237,12,\'<image>/02_object.js\');}$x626=JS::toObject($_keys,$global);unset($x630,$W630,$S630,$U630);$x631=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x626,JS::toString(\'push\',$global),237,12,\'<image>/02_object.js\');$x630=&$x631[0];list(,$W630,$S630,$U630)=$x631;if(!(is_object($x630)&&isset($x630->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x634=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,12,\'<image>/02_object.js\');$_TypeError=&$x634[0];list(,$WTypeError,$STypeError,$UTypeError)=$x634;$x635=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x636=$x635($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x636->class)&&$x636->class===\'Error\'&&!isset($x636->properties[\'file\'])&&!isset($x636->properties[\'line\'])&&!isset($x636->properties[\'column\'])){$x636->properties[\'file\']=\'<image>/02_object.js\';$x636->properties[\'line\']=237;$x636->properties[\'column\']=12;$x636->attributes[\'file\']=$x636->attributes[\'line\']=$x636->attributes[\'column\']=0;}throw new JSException($x636,237,12,\'<image>/02_object.js\');}$x632=$x630->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x633=$x632($global,$x626,$x630,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_keys;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x672 =& $scope->properties['arguments'];
$x672->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x672->properties[$i] = $args[$i];
$x672->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x673 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
if (JS::toBoolean($x673, $global)) {

return '[object Undefined]';;
}
else {
$x674 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
if (JS::toBoolean($x674, $global)) {

return '[object Null]';;
}
else {
$scope->properties['o'] = JS::$undefined; $_o =& $scope->properties['o'];
$Uo = FALSE;
$_o = JS::toObject($leThis, $global);
if (JS::toBoolean(!isset($_o->class), $global)) {

return '[object]';;
};
return "[object " .$_o->class . "]";;
};
}
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x672=&$scope->properties[\'arguments\'];$x672->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x672->properties[$i]=$args[$i];$x672->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x673=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));if(JS::toBoolean($x673,$global)){return\'[object Undefined]\';}else{$x674=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));if(JS::toBoolean($x674,$global)){return\'[object Null]\';}else{$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=JS::toObject($leThis,$global);if(JS::toBoolean(!isset($_o->class),$global)){return\'[object]\';}return"[object ".$_o->class."]";}}return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x689 =& $scope->properties['arguments'];
$x689->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x689->properties[$i] = $args[$i];
$x689->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x691 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 268, 22, '<image>/02_object.js');
$_TypeError =& $x691[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x691;
$x692 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x693 = $x692($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x693->class) && $x693->class === 'Error' && !isset($x693->properties['file']) && !isset($x693->properties['line']) && !isset($x693->properties['column'])) {$x693->properties['file'] = '<image>/02_object.js';$x693->properties['line'] = 268;$x693->properties['column'] = 22;$x693->attributes['file'] = $x693->attributes['line'] = $x693->attributes['column'] = 0; }
throw new JSException($x693, 268, 22, '<image>/02_object.js');
}
$x690 = JS::toObject($leThis, $global);
unset($x694, $W694, $S694, $U694);
$x695 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x690, JS::toString('toString', $global), 268, 22, '<image>/02_object.js');
$x694 =& $x695[0]; list(,$W694,$S694,$U694) = $x695;
if (!(is_object($x694) && isset($x694->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x698 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 268, 22, '<image>/02_object.js');
$_TypeError =& $x698[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x698;
$x699 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x700 = $x699($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x700->class) && $x700->class === 'Error' && !isset($x700->properties['file']) && !isset($x700->properties['line']) && !isset($x700->properties['column'])) {$x700->properties['file'] = '<image>/02_object.js';$x700->properties['line'] = 268;$x700->properties['column'] = 22;$x700->attributes['file'] = $x700->attributes['line'] = $x700->attributes['column'] = 0; }
throw new JSException($x700, 268, 22, '<image>/02_object.js');
}
$x696 = $x694->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x697 = $x696($global, $x690, $x694, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x697;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x689=&$scope->properties[\'arguments\'];$x689->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x689->properties[$i]=$args[$i];$x689->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x691=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),268,22,\'<image>/02_object.js\');$_TypeError=&$x691[0];list(,$WTypeError,$STypeError,$UTypeError)=$x691;$x692=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x693=$x692($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x693->class)&&$x693->class===\'Error\'&&!isset($x693->properties[\'file\'])&&!isset($x693->properties[\'line\'])&&!isset($x693->properties[\'column\'])){$x693->properties[\'file\']=\'<image>/02_object.js\';$x693->properties[\'line\']=268;$x693->properties[\'column\']=22;$x693->attributes[\'file\']=$x693->attributes[\'line\']=$x693->attributes[\'column\']=0;}throw new JSException($x693,268,22,\'<image>/02_object.js\');}$x690=JS::toObject($leThis,$global);unset($x694,$W694,$S694,$U694);$x695=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x690,JS::toString(\'toString\',$global),268,22,\'<image>/02_object.js\');$x694=&$x695[0];list(,$W694,$S694,$U694)=$x695;if(!(is_object($x694)&&isset($x694->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x698=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),268,22,\'<image>/02_object.js\');$_TypeError=&$x698[0];list(,$WTypeError,$STypeError,$UTypeError)=$x698;$x699=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x700=$x699($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x700->class)&&$x700->class===\'Error\'&&!isset($x700->properties[\'file\'])&&!isset($x700->properties[\'line\'])&&!isset($x700->properties[\'column\'])){$x700->properties[\'file\']=\'<image>/02_object.js\';$x700->properties[\'line\']=268;$x700->properties[\'column\']=22;$x700->attributes[\'file\']=$x700->attributes[\'line\']=$x700->attributes[\'column\']=0;}throw new JSException($x700,268,22,\'<image>/02_object.js\');}$x696=$x694->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x697=$x696($global,$x690,$x694,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x697;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x715 =& $scope->properties['arguments'];
$x715->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x715->properties[$i] = $args[$i];
$x715->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x717 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
$x716 = $x717;
if (!JS::toBoolean($x716, $global)) {
$x718 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
$x716 = $x718; }
if (JS::toBoolean($x716, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x721 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 273, 13, '<image>/02_object.js');
$_TypeError =& $x721[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x721;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x722 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 273, 13, '<image>/02_object.js');
$_ReferenceError =& $x722[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x722;
$x723 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 13);
$x724 = $x723($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x724->class) && $x724->class === 'Error' && !isset($x724->properties['file']) && !isset($x724->properties['line']) && !isset($x724->properties['column'])) {$x724->properties['file'] = '<image>/02_object.js';$x724->properties['line'] = 273;$x724->properties['column'] = 13;$x724->attributes['file'] = $x724->attributes['line'] = $x724->attributes['column'] = 0; }
throw new JSException($x724, 273, 13, '<image>/02_object.js');
}
$x719 = clone JS::$objectTemplate;
unset($x725, $W725, $S725, $U725);
$x726 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 273, 9, '<image>/02_object.js');
$x725 =& $x726[0]; list(,$W725,$S725,$U725) = $x726;
$x720 = $x725;
$x719->prototype = $x720;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x729 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x730 = $x729($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x730->class) && $x730->class === 'Error' && !isset($x730->properties['file']) && !isset($x730->properties['line']) && !isset($x730->properties['column'])) {$x730->properties['file'] = '<image>/02_object.js';$x730->properties['line'] = 273;$x730->properties['column'] = 9;$x730->attributes['file'] = $x730->attributes['line'] = $x730->attributes['column'] = 0; }
throw new JSException($x730, 273, 9, '<image>/02_object.js');
}
$x727 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x728 = $x727($global, $x719, $_TypeError, array('Object.prototype.valueOf(): this is undefined or null'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x720 = $x728;
if (is_object($x720) && $x720 !== JS::$undefined) { $x719 = $x720; }
if (isset($x719->class) && $x719->class === 'Error' && !isset($x719->properties['file']) && !isset($x719->properties['line']) && !isset($x719->properties['column'])) {$x719->properties['file'] = '<image>/02_object.js';$x719->properties['line'] = 273;$x719->properties['column'] = 3;$x719->attributes['file'] = $x719->attributes['line'] = $x719->attributes['column'] = 0; }
throw new JSException($x719, 273, 3, '<image>/02_object.js');;
};
return JS::toObject($leThis, $global);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x715=&$scope->properties[\'arguments\'];$x715->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x715->properties[$i]=$args[$i];$x715->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x717=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));$x716=$x717;if(!JS::toBoolean($x716,$global)){$x718=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));$x716=$x718;}if(JS::toBoolean($x716,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x721=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,13,\'<image>/02_object.js\');$_TypeError=&$x721[0];list(,$WTypeError,$STypeError,$UTypeError)=$x721;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x722=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),273,13,\'<image>/02_object.js\');$_ReferenceError=&$x722[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x722;$x723=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,13);$x724=$x723($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x724->class)&&$x724->class===\'Error\'&&!isset($x724->properties[\'file\'])&&!isset($x724->properties[\'line\'])&&!isset($x724->properties[\'column\'])){$x724->properties[\'file\']=\'<image>/02_object.js\';$x724->properties[\'line\']=273;$x724->properties[\'column\']=13;$x724->attributes[\'file\']=$x724->attributes[\'line\']=$x724->attributes[\'column\']=0;}throw new JSException($x724,273,13,\'<image>/02_object.js\');}$x719=clone JS::$objectTemplate;unset($x725,$W725,$S725,$U725);$x726=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),273,9,\'<image>/02_object.js\');$x725=&$x726[0];list(,$W725,$S725,$U725)=$x726;$x720=$x725;$x719->prototype=$x720;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x729=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x730=$x729($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x730->class)&&$x730->class===\'Error\'&&!isset($x730->properties[\'file\'])&&!isset($x730->properties[\'line\'])&&!isset($x730->properties[\'column\'])){$x730->properties[\'file\']=\'<image>/02_object.js\';$x730->properties[\'line\']=273;$x730->properties[\'column\']=9;$x730->attributes[\'file\']=$x730->attributes[\'line\']=$x730->attributes[\'column\']=0;}throw new JSException($x730,273,9,\'<image>/02_object.js\');}$x727=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x728=$x727($global,$x719,$_TypeError,array(\'Object.prototype.valueOf(): this is undefined or null\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x720=$x728;if(is_object($x720)&&$x720!==JS::$undefined){$x719=$x720;}if(isset($x719->class)&&$x719->class===\'Error\'&&!isset($x719->properties[\'file\'])&&!isset($x719->properties[\'line\'])&&!isset($x719->properties[\'column\'])){$x719->properties[\'file\']=\'<image>/02_object.js\';$x719->properties[\'line\']=273;$x719->properties[\'column\']=3;$x719->attributes[\'file\']=$x719->attributes[\'line\']=$x719->attributes[\'column\']=0;}throw new JSException($x719,273,3,\'<image>/02_object.js\');}return JS::toObject($leThis,$global);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x745 =& $scope->properties['arguments'];
$x745->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x745->properties[$i] = $args[$i];
$x745->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return array_key_exists($_p, $leThis->properties) || isset($leThis->attributes[$_p]);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x745=&$scope->properties[\'arguments\'];$x745->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x745->properties[$i]=$args[$i];$x745->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return array_key_exists($_p,$leThis->properties)||isset($leThis->attributes[$_p]);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x760 =& $scope->properties['arguments'];
$x760->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x760->properties[$i] = $args[$i];
$x760->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x762 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x761 = $x762;
if (!JS::toBoolean($x761, $global)) {
$x765 = $_v;
$x765 = ($x765 === JS::$undefined ? 'undefined' : (is_int($x765) || is_float($x765) ? 'number' : (is_bool($x765) ? 'boolean' : (is_string($x765) ? 'string' : (is_object($x765) && isset($x765->call) ? 'function' : 'object')))));
$x764 = !(((gettype($x765) === gettype('object') && $x765 === 'object'))|| (((is_float($x765) || is_int($x765)) && (is_float('object') || is_int('object'))) && $x765 == 'object'));
$x763 = $x764;
if (JS::toBoolean($x763, $global)) {
$x767 = $_v;
$x767 = ($x767 === JS::$undefined ? 'undefined' : (is_int($x767) || is_float($x767) ? 'number' : (is_bool($x767) ? 'boolean' : (is_string($x767) ? 'string' : (is_object($x767) && isset($x767->call) ? 'function' : 'object')))));
$x766 = !(((gettype($x767) === gettype('function') && $x767 === 'function'))|| (((is_float($x767) || is_int($x767)) && (is_float('function') || is_int('function'))) && $x767 == 'function'));
$x763 = $x766; }
$x761 = $x763; }
if (JS::toBoolean($x761, $global)) {

return false;;
};
for ($_v=$_v->prototype;$_v;$_v=$_v->prototype) {
			if ($_v=== $leThis) {
				return TRUE;
			}
		};
return false;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x760=&$scope->properties[\'arguments\'];$x760->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x760->properties[$i]=$args[$i];$x760->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$global->scope[++$global->scope_sp]=$scope;$x762=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x761=$x762;if(!JS::toBoolean($x761,$global)){$x765=$_v;$x765=($x765===JS::$undefined?\'undefined\':(is_int($x765)||is_float($x765)?\'number\':(is_bool($x765)?\'boolean\':(is_string($x765)?\'string\':(is_object($x765)&&isset($x765->call)?\'function\':\'object\')))));$x764=!(((gettype($x765)===gettype(\'object\')&&$x765===\'object\'))||(((is_float($x765)||is_int($x765))&&(is_float(\'object\')||is_int(\'object\')))&&$x765==\'object\'));$x763=$x764;if(JS::toBoolean($x763,$global)){$x767=$_v;$x767=($x767===JS::$undefined?\'undefined\':(is_int($x767)||is_float($x767)?\'number\':(is_bool($x767)?\'boolean\':(is_string($x767)?\'string\':(is_object($x767)&&isset($x767->call)?\'function\':\'object\')))));$x766=!(((gettype($x767)===gettype(\'function\')&&$x767===\'function\'))||(((is_float($x767)||is_int($x767))&&(is_float(\'function\')||is_int(\'function\')))&&$x767==\'function\'));$x763=$x766;}$x761=$x763;}if(JS::toBoolean($x761,$global)){return false;}for($_v=$_v->prototype;$_v;$_v=$_v->prototype){if($_v===$leThis){return TRUE;}}return false;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x782 =& $scope->properties['arguments'];
$x782->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x782->properties[$i] = $args[$i];
$x782->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return JS::toBoolean(isset($leThis->attributes[$_p]) && ($leThis->attributes[$_p] & JS::ENUMERABLE), $global);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x782=&$scope->properties[\'arguments\'];$x782->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x782->properties[$i]=$args[$i];$x782->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return JS::toBoolean(isset($leThis->attributes[$_p])&&($leThis->attributes[$_p]&JS::ENUMERABLE),$global);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/02_object.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/02_object.js';$scope->properties['__dirname'] = '<image>';}
if (isset($global->properties['require'])) {$global->properties['require']->properties['.'] = '<image>';$global->properties['require']->attributes['.'] = 0;}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$_Object;
$x6 = clone JS::$functionTemplate; $x6->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_1'; $x6->parameters = array (
  0 => 'value',
); $x6->name = 'Object'; $x6->scope = $scope; $x6->properties['prototype'] = clone JS::$objectTemplate; $x6->attributes['prototype'] = JS::WRITABLE; $x6->properties['prototype']->properties['constructor'] = $x6; $x6->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x6->properties['length'] = 1; $x6->attributes['length'] = 0;
$scope->properties['Object'] = JS::$undefined; $_Object =& $scope->properties['Object'];
$UObject = FALSE;
$_Object = $x6;
$x34 = clone JS::$functionTemplate; $x34->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_2'; $x34->parameters = array (
  0 => 'o',
); $x34->scope = $scope; $x34->properties['prototype'] = clone JS::$objectTemplate; $x34->attributes['prototype'] = JS::WRITABLE; $x34->properties['prototype']->properties['constructor'] = $x34; $x34->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x34->properties['length'] = 1; $x34->attributes['length'] = 0;
$x35 = JS::toString('getPrototypeOf', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x36 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 9, 23, '<image>/02_object.js');
$_TypeError =& $x36[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x36;
$x37 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 9, 23);
$x38 = $x37($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x38->class) && $x38->class === 'Error' && !isset($x38->properties['file']) && !isset($x38->properties['line']) && !isset($x38->properties['column'])) {$x38->properties['file'] = '<image>/02_object.js';$x38->properties['line'] = 9;$x38->properties['column'] = 23;$x38->attributes['file'] = $x38->attributes['line'] = $x38->attributes['column'] = 0; }
throw new JSException($x38, 9, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x39, $W39, $S39, $U39);
$x43 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x35, $global), 9, 23, '<image>/02_object.js');
$x39 =& $x43[0]; list(,$W39,$S39,$U39) = $x43;
if ($U39 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x35] = $x39; $x39 =& $_Object->properties[$x35]; $_Object->attributes[$x35] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U39 = FALSE; $W39 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x45 = $_Object->properties['length']; }  else { $x45 = 0; } }
if (isset($S39)) {
$x46 = $S39->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 9, 23);
$x47 = $x46($global, $_Object, $S39, array($x34), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x44 = $x47;
} else {
if (!$U39) {$x44 = $x34;if ($W39) { $x39 = $x34; }  }
else { $x44 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('getPrototypeOf') && 'getPrototypeOf' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getPrototypeOf' + 1; }else if ($x35 === 'length' && is_int($x34) && $x45 > $x34) {  for ($i = $x34; $i < $x45; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x135 = clone JS::$functionTemplate; $x135->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6'; $x135->parameters = array (
  0 => 'o',
  1 => 'p',
); $x135->scope = $scope; $x135->properties['prototype'] = clone JS::$objectTemplate; $x135->attributes['prototype'] = JS::WRITABLE; $x135->properties['prototype']->properties['constructor'] = $x135; $x135->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x135->properties['length'] = 2; $x135->attributes['length'] = 0;
$x136 = JS::toString('getOwnPropertyDescriptor', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x137 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 17, 33, '<image>/02_object.js');
$_TypeError =& $x137[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x137;
$x138 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x139 = $x138($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x139->class) && $x139->class === 'Error' && !isset($x139->properties['file']) && !isset($x139->properties['line']) && !isset($x139->properties['column'])) {$x139->properties['file'] = '<image>/02_object.js';$x139->properties['line'] = 17;$x139->properties['column'] = 33;$x139->attributes['file'] = $x139->attributes['line'] = $x139->attributes['column'] = 0; }
throw new JSException($x139, 17, 33, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x140, $W140, $S140, $U140);
$x141 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x136, $global), 17, 33, '<image>/02_object.js');
$x140 =& $x141[0]; list(,$W140,$S140,$U140) = $x141;
if ($U140 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x136] = $x140; $x140 =& $_Object->properties[$x136]; $_Object->attributes[$x136] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U140 = FALSE; $W140 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x143 = $_Object->properties['length']; }  else { $x143 = 0; } }
if (isset($S140)) {
$x144 = $S140->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x145 = $x144($global, $_Object, $S140, array($x135), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x142 = $x145;
} else {
if (!$U140) {$x142 = $x135;if ($W140) { $x140 = $x135; }  }
else { $x142 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('getOwnPropertyDescriptor') && 'getOwnPropertyDescriptor' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyDescriptor' + 1; }else if ($x136 === 'length' && is_int($x135) && $x143 > $x135) {  for ($i = $x135; $i < $x143; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x179 = clone JS::$functionTemplate; $x179->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7'; $x179->parameters = array (
  0 => 'o',
); $x179->scope = $scope; $x179->properties['prototype'] = clone JS::$objectTemplate; $x179->attributes['prototype'] = JS::WRITABLE; $x179->properties['prototype']->properties['constructor'] = $x179; $x179->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x179->properties['length'] = 1; $x179->attributes['length'] = 0;
$x180 = JS::toString('getOwnPropertyNames', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x181 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 48, 28, '<image>/02_object.js');
$_TypeError =& $x181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x181;
$x182 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x183 = $x182($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x183->class) && $x183->class === 'Error' && !isset($x183->properties['file']) && !isset($x183->properties['line']) && !isset($x183->properties['column'])) {$x183->properties['file'] = '<image>/02_object.js';$x183->properties['line'] = 48;$x183->properties['column'] = 28;$x183->attributes['file'] = $x183->attributes['line'] = $x183->attributes['column'] = 0; }
throw new JSException($x183, 48, 28, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x184, $W184, $S184, $U184);
$x185 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x180, $global), 48, 28, '<image>/02_object.js');
$x184 =& $x185[0]; list(,$W184,$S184,$U184) = $x185;
if ($U184 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x180] = $x184; $x184 =& $_Object->properties[$x180]; $_Object->attributes[$x180] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U184 = FALSE; $W184 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x187 = $_Object->properties['length']; }  else { $x187 = 0; } }
if (isset($S184)) {
$x188 = $S184->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x189 = $x188($global, $_Object, $S184, array($x179), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x186 = $x189;
} else {
if (!$U184) {$x186 = $x179;if ($W184) { $x184 = $x179; }  }
else { $x186 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('getOwnPropertyNames') && 'getOwnPropertyNames' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyNames' + 1; }else if ($x180 === 'length' && is_int($x179) && $x187 > $x179) {  for ($i = $x179; $i < $x187; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x225 = clone JS::$functionTemplate; $x225->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8'; $x225->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x225->scope = $scope; $x225->properties['prototype'] = clone JS::$objectTemplate; $x225->attributes['prototype'] = JS::WRITABLE; $x225->properties['prototype']->properties['constructor'] = $x225; $x225->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x225->properties['length'] = 2; $x225->attributes['length'] = 0;
$x226 = JS::toString('create', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x227 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 62, 15, '<image>/02_object.js');
$_TypeError =& $x227[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x227;
$x228 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x229 = $x228($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x229->class) && $x229->class === 'Error' && !isset($x229->properties['file']) && !isset($x229->properties['line']) && !isset($x229->properties['column'])) {$x229->properties['file'] = '<image>/02_object.js';$x229->properties['line'] = 62;$x229->properties['column'] = 15;$x229->attributes['file'] = $x229->attributes['line'] = $x229->attributes['column'] = 0; }
throw new JSException($x229, 62, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x230, $W230, $S230, $U230);
$x231 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x226, $global), 62, 15, '<image>/02_object.js');
$x230 =& $x231[0]; list(,$W230,$S230,$U230) = $x231;
if ($U230 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x226] = $x230; $x230 =& $_Object->properties[$x226]; $_Object->attributes[$x226] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U230 = FALSE; $W230 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x233 = $_Object->properties['length']; }  else { $x233 = 0; } }
if (isset($S230)) {
$x234 = $S230->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x235 = $x234($global, $_Object, $S230, array($x225), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x232 = $x235;
} else {
if (!$U230) {$x232 = $x225;if ($W230) { $x230 = $x225; }  }
else { $x232 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('create') && 'create' >= $_Object->properties['length']) { $_Object->properties['length'] = 'create' + 1; }else if ($x226 === 'length' && is_int($x225) && $x233 > $x225) {  for ($i = $x225; $i < $x233; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x334 = clone JS::$functionTemplate; $x334->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9'; $x334->parameters = array (
  0 => 'o',
  1 => 'p',
  2 => 'attributes',
); $x334->scope = $scope; $x334->properties['prototype'] = clone JS::$objectTemplate; $x334->attributes['prototype'] = JS::WRITABLE; $x334->properties['prototype']->properties['constructor'] = $x334; $x334->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x334->properties['length'] = 3; $x334->attributes['length'] = 0;
$x335 = JS::toString('defineProperty', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x336 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 23, '<image>/02_object.js');
$_TypeError =& $x336[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x336;
$x337 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x338 = $x337($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x338->class) && $x338->class === 'Error' && !isset($x338->properties['file']) && !isset($x338->properties['line']) && !isset($x338->properties['column'])) {$x338->properties['file'] = '<image>/02_object.js';$x338->properties['line'] = 78;$x338->properties['column'] = 23;$x338->attributes['file'] = $x338->attributes['line'] = $x338->attributes['column'] = 0; }
throw new JSException($x338, 78, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x339, $W339, $S339, $U339);
$x340 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x335, $global), 78, 23, '<image>/02_object.js');
$x339 =& $x340[0]; list(,$W339,$S339,$U339) = $x340;
if ($U339 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x335] = $x339; $x339 =& $_Object->properties[$x335]; $_Object->attributes[$x335] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U339 = FALSE; $W339 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x342 = $_Object->properties['length']; }  else { $x342 = 0; } }
if (isset($S339)) {
$x343 = $S339->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x344 = $x343($global, $_Object, $S339, array($x334), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x341 = $x344;
} else {
if (!$U339) {$x341 = $x334;if ($W339) { $x339 = $x334; }  }
else { $x341 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('defineProperty') && 'defineProperty' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperty' + 1; }else if ($x335 === 'length' && is_int($x334) && $x342 > $x334) {  for ($i = $x334; $i < $x342; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x399 = clone JS::$functionTemplate; $x399->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10'; $x399->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x399->scope = $scope; $x399->properties['prototype'] = clone JS::$objectTemplate; $x399->attributes['prototype'] = JS::WRITABLE; $x399->properties['prototype']->properties['constructor'] = $x399; $x399->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x399->properties['length'] = 2; $x399->attributes['length'] = 0;
$x400 = JS::toString('defineProperties', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x401 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 130, 25, '<image>/02_object.js');
$_TypeError =& $x401[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x401;
$x402 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x403 = $x402($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x403->class) && $x403->class === 'Error' && !isset($x403->properties['file']) && !isset($x403->properties['line']) && !isset($x403->properties['column'])) {$x403->properties['file'] = '<image>/02_object.js';$x403->properties['line'] = 130;$x403->properties['column'] = 25;$x403->attributes['file'] = $x403->attributes['line'] = $x403->attributes['column'] = 0; }
throw new JSException($x403, 130, 25, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x404, $W404, $S404, $U404);
$x405 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x400, $global), 130, 25, '<image>/02_object.js');
$x404 =& $x405[0]; list(,$W404,$S404,$U404) = $x405;
if ($U404 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x400] = $x404; $x404 =& $_Object->properties[$x400]; $_Object->attributes[$x400] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U404 = FALSE; $W404 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x407 = $_Object->properties['length']; }  else { $x407 = 0; } }
if (isset($S404)) {
$x408 = $S404->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x409 = $x408($global, $_Object, $S404, array($x399), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x406 = $x409;
} else {
if (!$U404) {$x406 = $x399;if ($W404) { $x404 = $x399; }  }
else { $x406 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('defineProperties') && 'defineProperties' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperties' + 1; }else if ($x400 === 'length' && is_int($x399) && $x407 > $x399) {  for ($i = $x399; $i < $x407; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x431 = clone JS::$functionTemplate; $x431->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11'; $x431->parameters = array (
  0 => 'o',
); $x431->scope = $scope; $x431->properties['prototype'] = clone JS::$objectTemplate; $x431->attributes['prototype'] = JS::WRITABLE; $x431->properties['prototype']->properties['constructor'] = $x431; $x431->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x431->properties['length'] = 1; $x431->attributes['length'] = 0;
$x432 = JS::toString('seal', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x433 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 146, 13, '<image>/02_object.js');
$_TypeError =& $x433[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x433;
$x434 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x435 = $x434($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x435->class) && $x435->class === 'Error' && !isset($x435->properties['file']) && !isset($x435->properties['line']) && !isset($x435->properties['column'])) {$x435->properties['file'] = '<image>/02_object.js';$x435->properties['line'] = 146;$x435->properties['column'] = 13;$x435->attributes['file'] = $x435->attributes['line'] = $x435->attributes['column'] = 0; }
throw new JSException($x435, 146, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x436, $W436, $S436, $U436);
$x437 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x432, $global), 146, 13, '<image>/02_object.js');
$x436 =& $x437[0]; list(,$W436,$S436,$U436) = $x437;
if ($U436 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x432] = $x436; $x436 =& $_Object->properties[$x432]; $_Object->attributes[$x432] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U436 = FALSE; $W436 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x439 = $_Object->properties['length']; }  else { $x439 = 0; } }
if (isset($S436)) {
$x440 = $S436->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x441 = $x440($global, $_Object, $S436, array($x431), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x438 = $x441;
} else {
if (!$U436) {$x438 = $x431;if ($W436) { $x436 = $x431; }  }
else { $x438 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('seal') && 'seal' >= $_Object->properties['length']) { $_Object->properties['length'] = 'seal' + 1; }else if ($x432 === 'length' && is_int($x431) && $x439 > $x431) {  for ($i = $x431; $i < $x439; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x463 = clone JS::$functionTemplate; $x463->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12'; $x463->parameters = array (
  0 => 'o',
); $x463->scope = $scope; $x463->properties['prototype'] = clone JS::$objectTemplate; $x463->attributes['prototype'] = JS::WRITABLE; $x463->properties['prototype']->properties['constructor'] = $x463; $x463->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x463->properties['length'] = 1; $x463->attributes['length'] = 0;
$x464 = JS::toString('freeze', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x465 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 162, 15, '<image>/02_object.js');
$_TypeError =& $x465[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x465;
$x466 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x467 = $x466($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x467->class) && $x467->class === 'Error' && !isset($x467->properties['file']) && !isset($x467->properties['line']) && !isset($x467->properties['column'])) {$x467->properties['file'] = '<image>/02_object.js';$x467->properties['line'] = 162;$x467->properties['column'] = 15;$x467->attributes['file'] = $x467->attributes['line'] = $x467->attributes['column'] = 0; }
throw new JSException($x467, 162, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x468, $W468, $S468, $U468);
$x469 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x464, $global), 162, 15, '<image>/02_object.js');
$x468 =& $x469[0]; list(,$W468,$S468,$U468) = $x469;
if ($U468 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x464] = $x468; $x468 =& $_Object->properties[$x464]; $_Object->attributes[$x464] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U468 = FALSE; $W468 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x471 = $_Object->properties['length']; }  else { $x471 = 0; } }
if (isset($S468)) {
$x472 = $S468->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x473 = $x472($global, $_Object, $S468, array($x463), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x470 = $x473;
} else {
if (!$U468) {$x470 = $x463;if ($W468) { $x468 = $x463; }  }
else { $x470 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('freeze') && 'freeze' >= $_Object->properties['length']) { $_Object->properties['length'] = 'freeze' + 1; }else if ($x464 === 'length' && is_int($x463) && $x471 > $x463) {  for ($i = $x463; $i < $x471; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x495 = clone JS::$functionTemplate; $x495->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13'; $x495->parameters = array (
  0 => 'o',
); $x495->scope = $scope; $x495->properties['prototype'] = clone JS::$objectTemplate; $x495->attributes['prototype'] = JS::WRITABLE; $x495->properties['prototype']->properties['constructor'] = $x495; $x495->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x495->properties['length'] = 1; $x495->attributes['length'] = 0;
$x496 = JS::toString('preventExtensions', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x497 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 179, 26, '<image>/02_object.js');
$_TypeError =& $x497[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x497;
$x498 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x499 = $x498($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x499->class) && $x499->class === 'Error' && !isset($x499->properties['file']) && !isset($x499->properties['line']) && !isset($x499->properties['column'])) {$x499->properties['file'] = '<image>/02_object.js';$x499->properties['line'] = 179;$x499->properties['column'] = 26;$x499->attributes['file'] = $x499->attributes['line'] = $x499->attributes['column'] = 0; }
throw new JSException($x499, 179, 26, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x500, $W500, $S500, $U500);
$x501 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x496, $global), 179, 26, '<image>/02_object.js');
$x500 =& $x501[0]; list(,$W500,$S500,$U500) = $x501;
if ($U500 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x496] = $x500; $x500 =& $_Object->properties[$x496]; $_Object->attributes[$x496] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U500 = FALSE; $W500 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x503 = $_Object->properties['length']; }  else { $x503 = 0; } }
if (isset($S500)) {
$x504 = $S500->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x505 = $x504($global, $_Object, $S500, array($x495), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x502 = $x505;
} else {
if (!$U500) {$x502 = $x495;if ($W500) { $x500 = $x495; }  }
else { $x502 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('preventExtensions') && 'preventExtensions' >= $_Object->properties['length']) { $_Object->properties['length'] = 'preventExtensions' + 1; }else if ($x496 === 'length' && is_int($x495) && $x503 > $x495) {  for ($i = $x495; $i < $x503; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x527 = clone JS::$functionTemplate; $x527->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14'; $x527->parameters = array (
  0 => 'o',
); $x527->scope = $scope; $x527->properties['prototype'] = clone JS::$objectTemplate; $x527->attributes['prototype'] = JS::WRITABLE; $x527->properties['prototype']->properties['constructor'] = $x527; $x527->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x527->properties['length'] = 1; $x527->attributes['length'] = 0;
$x528 = JS::toString('isSealed', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x529 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 189, 17, '<image>/02_object.js');
$_TypeError =& $x529[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x529;
$x530 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x531 = $x530($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x531->class) && $x531->class === 'Error' && !isset($x531->properties['file']) && !isset($x531->properties['line']) && !isset($x531->properties['column'])) {$x531->properties['file'] = '<image>/02_object.js';$x531->properties['line'] = 189;$x531->properties['column'] = 17;$x531->attributes['file'] = $x531->attributes['line'] = $x531->attributes['column'] = 0; }
throw new JSException($x531, 189, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x532, $W532, $S532, $U532);
$x533 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x528, $global), 189, 17, '<image>/02_object.js');
$x532 =& $x533[0]; list(,$W532,$S532,$U532) = $x533;
if ($U532 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x528] = $x532; $x532 =& $_Object->properties[$x528]; $_Object->attributes[$x528] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U532 = FALSE; $W532 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x535 = $_Object->properties['length']; }  else { $x535 = 0; } }
if (isset($S532)) {
$x536 = $S532->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x537 = $x536($global, $_Object, $S532, array($x527), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x534 = $x537;
} else {
if (!$U532) {$x534 = $x527;if ($W532) { $x532 = $x527; }  }
else { $x534 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('isSealed') && 'isSealed' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isSealed' + 1; }else if ($x528 === 'length' && is_int($x527) && $x535 > $x527) {  for ($i = $x527; $i < $x535; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x559 = clone JS::$functionTemplate; $x559->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15'; $x559->parameters = array (
  0 => 'o',
); $x559->scope = $scope; $x559->properties['prototype'] = clone JS::$objectTemplate; $x559->attributes['prototype'] = JS::WRITABLE; $x559->properties['prototype']->properties['constructor'] = $x559; $x559->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x559->properties['length'] = 1; $x559->attributes['length'] = 0;
$x560 = JS::toString('isFrozen', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x561 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 17, '<image>/02_object.js');
$_TypeError =& $x561[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x561;
$x562 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x563 = $x562($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x563->class) && $x563->class === 'Error' && !isset($x563->properties['file']) && !isset($x563->properties['line']) && !isset($x563->properties['column'])) {$x563->properties['file'] = '<image>/02_object.js';$x563->properties['line'] = 205;$x563->properties['column'] = 17;$x563->attributes['file'] = $x563->attributes['line'] = $x563->attributes['column'] = 0; }
throw new JSException($x563, 205, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x564, $W564, $S564, $U564);
$x565 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x560, $global), 205, 17, '<image>/02_object.js');
$x564 =& $x565[0]; list(,$W564,$S564,$U564) = $x565;
if ($U564 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x560] = $x564; $x564 =& $_Object->properties[$x560]; $_Object->attributes[$x560] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U564 = FALSE; $W564 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x567 = $_Object->properties['length']; }  else { $x567 = 0; } }
if (isset($S564)) {
$x568 = $S564->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x569 = $x568($global, $_Object, $S564, array($x559), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x566 = $x569;
} else {
if (!$U564) {$x566 = $x559;if ($W564) { $x564 = $x559; }  }
else { $x566 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('isFrozen') && 'isFrozen' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isFrozen' + 1; }else if ($x560 === 'length' && is_int($x559) && $x567 > $x559) {  for ($i = $x559; $i < $x567; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x591 = clone JS::$functionTemplate; $x591->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16'; $x591->parameters = array (
  0 => 'o',
); $x591->scope = $scope; $x591->properties['prototype'] = clone JS::$objectTemplate; $x591->attributes['prototype'] = JS::WRITABLE; $x591->properties['prototype']->properties['constructor'] = $x591; $x591->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x591->properties['length'] = 1; $x591->attributes['length'] = 0;
$x592 = JS::toString('isExtensible', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x593 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 221, 21, '<image>/02_object.js');
$_TypeError =& $x593[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x593;
$x594 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x595 = $x594($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x595->class) && $x595->class === 'Error' && !isset($x595->properties['file']) && !isset($x595->properties['line']) && !isset($x595->properties['column'])) {$x595->properties['file'] = '<image>/02_object.js';$x595->properties['line'] = 221;$x595->properties['column'] = 21;$x595->attributes['file'] = $x595->attributes['line'] = $x595->attributes['column'] = 0; }
throw new JSException($x595, 221, 21, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x596, $W596, $S596, $U596);
$x597 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x592, $global), 221, 21, '<image>/02_object.js');
$x596 =& $x597[0]; list(,$W596,$S596,$U596) = $x597;
if ($U596 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x592] = $x596; $x596 =& $_Object->properties[$x592]; $_Object->attributes[$x592] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U596 = FALSE; $W596 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x599 = $_Object->properties['length']; }  else { $x599 = 0; } }
if (isset($S596)) {
$x600 = $S596->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x601 = $x600($global, $_Object, $S596, array($x591), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x598 = $x601;
} else {
if (!$U596) {$x598 = $x591;if ($W596) { $x596 = $x591; }  }
else { $x598 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('isExtensible') && 'isExtensible' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isExtensible' + 1; }else if ($x592 === 'length' && is_int($x591) && $x599 > $x591) {  for ($i = $x591; $i < $x599; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x637 = clone JS::$functionTemplate; $x637->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17'; $x637->parameters = array (
  0 => 'o',
); $x637->scope = $scope; $x637->properties['prototype'] = clone JS::$objectTemplate; $x637->attributes['prototype'] = JS::WRITABLE; $x637->properties['prototype']->properties['constructor'] = $x637; $x637->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x637->properties['length'] = 1; $x637->attributes['length'] = 0;
$x638 = JS::toString('keys', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x639 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 229, 13, '<image>/02_object.js');
$_TypeError =& $x639[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x639;
$x640 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x641 = $x640($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x641->class) && $x641->class === 'Error' && !isset($x641->properties['file']) && !isset($x641->properties['line']) && !isset($x641->properties['column'])) {$x641->properties['file'] = '<image>/02_object.js';$x641->properties['line'] = 229;$x641->properties['column'] = 13;$x641->attributes['file'] = $x641->attributes['line'] = $x641->attributes['column'] = 0; }
throw new JSException($x641, 229, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x642, $W642, $S642, $U642);
$x643 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x638, $global), 229, 13, '<image>/02_object.js');
$x642 =& $x643[0]; list(,$W642,$S642,$U642) = $x643;
if ($U642 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x638] = $x642; $x642 =& $_Object->properties[$x638]; $_Object->attributes[$x638] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U642 = FALSE; $W642 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x645 = $_Object->properties['length']; }  else { $x645 = 0; } }
if (isset($S642)) {
$x646 = $S642->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x647 = $x646($global, $_Object, $S642, array($x637), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x644 = $x647;
} else {
if (!$U642) {$x644 = $x637;if ($W642) { $x642 = $x637; }  }
else { $x644 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('keys') && 'keys' >= $_Object->properties['length']) { $_Object->properties['length'] = 'keys' + 1; }else if ($x638 === 'length' && is_int($x637) && $x645 > $x637) {  for ($i = $x637; $i < $x645; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$x648 = clone JS::$objectTemplate;
$x649 = JS::toString('prototype', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x650 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 18, '<image>/02_object.js');
$_TypeError =& $x650[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x650;
$x651 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x652 = $x651($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x652->class) && $x652->class === 'Error' && !isset($x652->properties['file']) && !isset($x652->properties['line']) && !isset($x652->properties['column'])) {$x652->properties['file'] = '<image>/02_object.js';$x652->properties['line'] = 243;$x652->properties['column'] = 18;$x652->attributes['file'] = $x652->attributes['line'] = $x652->attributes['column'] = 0; }
throw new JSException($x652, 243, 18, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x653, $W653, $S653, $U653);
$x654 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x649, $global), 243, 18, '<image>/02_object.js');
$x653 =& $x654[0]; list(,$W653,$S653,$U653) = $x654;
if ($U653 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x649] = $x653; $x653 =& $_Object->properties[$x649]; $_Object->attributes[$x649] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U653 = FALSE; $W653 = TRUE; }
if (isset($_Object->class) && $_Object->class === 'Array') {  if (isset($_Object->properties['length']) && $_Object->properties['length'] !== JS::$undefined) { $x656 = $_Object->properties['length']; }  else { $x656 = 0; } }
if (isset($S653)) {
$x657 = $S653->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x658 = $x657($global, $_Object, $S653, array($x648), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x655 = $x658;
} else {
if (!$U653) {$x655 = $x648;if ($W653) { $x653 = $x648; }  }
else { $x655 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array') {if (is_int('prototype') && 'prototype' >= $_Object->properties['length']) { $_Object->properties['length'] = 'prototype' + 1; }else if ($x649 === 'length' && is_int($x648) && $x656 > $x648) {  for ($i = $x648; $i < $x656; ++$i) {  unset($_Object->properties[$i], $_Object->attributes[$i]); }}};
$_Object->properties['prototype']->prototype = NULL;
$_Object->properties['prototype']->class = 'Object';
$_Object->properties['prototype']->extensible = TRUE;
unset($x659, $W659, $S659, $U659);
$x660 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 247, 7, '<image>/02_object.js');
$x659 =& $x660[0]; list(,$W659,$S659,$U659) = $x660;
$x661 = JS::toString('constructor', $global);
if ($x659 === JS::$undefined || $x659 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x662 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 247, 30, '<image>/02_object.js');
$_TypeError =& $x662[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x662;
$x663 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x664 = $x663($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x664->class) && $x664->class === 'Error' && !isset($x664->properties['file']) && !isset($x664->properties['line']) && !isset($x664->properties['column'])) {$x664->properties['file'] = '<image>/02_object.js';$x664->properties['line'] = 247;$x664->properties['column'] = 30;$x664->attributes['file'] = $x664->attributes['line'] = $x664->attributes['column'] = 0; }
throw new JSException($x664, 247, 30, '<image>/02_object.js');
}
$x659 = JS::toObject($x659, $global);
unset($x665, $W665, $S665, $U665);
$x666 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x659, JS::toString($x661, $global), 247, 30, '<image>/02_object.js');
$x665 =& $x666[0]; list(,$W665,$S665,$U665) = $x666;
if ($U665 && (!isset($x659->extensible) || $x659->extensible)) {$x659->properties[$x661] = $x665; $x665 =& $x659->properties[$x661]; $x659->attributes[$x661] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U665 = FALSE; $W665 = TRUE; }
if (isset($x659->class) && $x659->class === 'Array') {  if (isset($x659->properties['length']) && $x659->properties['length'] !== JS::$undefined) { $x668 = $x659->properties['length']; }  else { $x668 = 0; } }
if (isset($S665)) {
$x669 = $S665->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x670 = $x669($global, $x659, $S665, array($_Object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x667 = $x670;
} else {
if (!$U665) {$x667 = $_Object;if ($W665) { $x665 = $_Object; }  }
else { $x667 = JS::$undefined; }
}
if (isset($x659->class) && $x659->class === 'Array') {if (is_int('constructor') && 'constructor' >= $x659->properties['length']) { $x659->properties['length'] = 'constructor' + 1; }else if ($x661 === 'length' && is_int($_Object) && $x668 > $_Object) {  for ($i = $_Object; $i < $x668; ++$i) {  unset($x659->properties[$i], $x659->attributes[$i]); }}};
$x675 = clone JS::$functionTemplate; $x675->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18'; $x675->parameters = array (
); $x675->scope = $scope; $x675->properties['prototype'] = clone JS::$objectTemplate; $x675->attributes['prototype'] = JS::WRITABLE; $x675->properties['prototype']->properties['constructor'] = $x675; $x675->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x675->properties['length'] = 0; $x675->attributes['length'] = 0;
unset($x676, $W676, $S676, $U676);
$x677 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 249, 7, '<image>/02_object.js');
$x676 =& $x677[0]; list(,$W676,$S676,$U676) = $x677;
$x678 = JS::toString('toString', $global);
if ($x676 === JS::$undefined || $x676 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x679 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 249, 27, '<image>/02_object.js');
$_TypeError =& $x679[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x679;
$x680 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x681 = $x680($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x681->class) && $x681->class === 'Error' && !isset($x681->properties['file']) && !isset($x681->properties['line']) && !isset($x681->properties['column'])) {$x681->properties['file'] = '<image>/02_object.js';$x681->properties['line'] = 249;$x681->properties['column'] = 27;$x681->attributes['file'] = $x681->attributes['line'] = $x681->attributes['column'] = 0; }
throw new JSException($x681, 249, 27, '<image>/02_object.js');
}
$x676 = JS::toObject($x676, $global);
unset($x682, $W682, $S682, $U682);
$x683 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x676, JS::toString($x678, $global), 249, 27, '<image>/02_object.js');
$x682 =& $x683[0]; list(,$W682,$S682,$U682) = $x683;
if ($U682 && (!isset($x676->extensible) || $x676->extensible)) {$x676->properties[$x678] = $x682; $x682 =& $x676->properties[$x678]; $x676->attributes[$x678] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U682 = FALSE; $W682 = TRUE; }
if (isset($x676->class) && $x676->class === 'Array') {  if (isset($x676->properties['length']) && $x676->properties['length'] !== JS::$undefined) { $x685 = $x676->properties['length']; }  else { $x685 = 0; } }
if (isset($S682)) {
$x686 = $S682->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x687 = $x686($global, $x676, $S682, array($x675), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x684 = $x687;
} else {
if (!$U682) {$x684 = $x675;if ($W682) { $x682 = $x675; }  }
else { $x684 = JS::$undefined; }
}
if (isset($x676->class) && $x676->class === 'Array') {if (is_int('toString') && 'toString' >= $x676->properties['length']) { $x676->properties['length'] = 'toString' + 1; }else if ($x678 === 'length' && is_int($x675) && $x685 > $x675) {  for ($i = $x675; $i < $x685; ++$i) {  unset($x676->properties[$i], $x676->attributes[$i]); }}};
$x701 = clone JS::$functionTemplate; $x701->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19'; $x701->parameters = array (
); $x701->scope = $scope; $x701->properties['prototype'] = clone JS::$objectTemplate; $x701->attributes['prototype'] = JS::WRITABLE; $x701->properties['prototype']->properties['constructor'] = $x701; $x701->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x701->properties['length'] = 0; $x701->attributes['length'] = 0;
unset($x702, $W702, $S702, $U702);
$x703 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 267, 7, '<image>/02_object.js');
$x702 =& $x703[0]; list(,$W702,$S702,$U702) = $x703;
$x704 = JS::toString('toLocaleString', $global);
if ($x702 === JS::$undefined || $x702 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x705 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 267, 33, '<image>/02_object.js');
$_TypeError =& $x705[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x705;
$x706 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x707 = $x706($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x707->class) && $x707->class === 'Error' && !isset($x707->properties['file']) && !isset($x707->properties['line']) && !isset($x707->properties['column'])) {$x707->properties['file'] = '<image>/02_object.js';$x707->properties['line'] = 267;$x707->properties['column'] = 33;$x707->attributes['file'] = $x707->attributes['line'] = $x707->attributes['column'] = 0; }
throw new JSException($x707, 267, 33, '<image>/02_object.js');
}
$x702 = JS::toObject($x702, $global);
unset($x708, $W708, $S708, $U708);
$x709 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x702, JS::toString($x704, $global), 267, 33, '<image>/02_object.js');
$x708 =& $x709[0]; list(,$W708,$S708,$U708) = $x709;
if ($U708 && (!isset($x702->extensible) || $x702->extensible)) {$x702->properties[$x704] = $x708; $x708 =& $x702->properties[$x704]; $x702->attributes[$x704] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U708 = FALSE; $W708 = TRUE; }
if (isset($x702->class) && $x702->class === 'Array') {  if (isset($x702->properties['length']) && $x702->properties['length'] !== JS::$undefined) { $x711 = $x702->properties['length']; }  else { $x711 = 0; } }
if (isset($S708)) {
$x712 = $S708->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x713 = $x712($global, $x702, $S708, array($x701), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x710 = $x713;
} else {
if (!$U708) {$x710 = $x701;if ($W708) { $x708 = $x701; }  }
else { $x710 = JS::$undefined; }
}
if (isset($x702->class) && $x702->class === 'Array') {if (is_int('toLocaleString') && 'toLocaleString' >= $x702->properties['length']) { $x702->properties['length'] = 'toLocaleString' + 1; }else if ($x704 === 'length' && is_int($x701) && $x711 > $x701) {  for ($i = $x701; $i < $x711; ++$i) {  unset($x702->properties[$i], $x702->attributes[$i]); }}};
$x731 = clone JS::$functionTemplate; $x731->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20'; $x731->parameters = array (
); $x731->scope = $scope; $x731->properties['prototype'] = clone JS::$objectTemplate; $x731->attributes['prototype'] = JS::WRITABLE; $x731->properties['prototype']->properties['constructor'] = $x731; $x731->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x731->properties['length'] = 0; $x731->attributes['length'] = 0;
unset($x732, $W732, $S732, $U732);
$x733 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 271, 7, '<image>/02_object.js');
$x732 =& $x733[0]; list(,$W732,$S732,$U732) = $x733;
$x734 = JS::toString('valueOf', $global);
if ($x732 === JS::$undefined || $x732 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x735 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 271, 26, '<image>/02_object.js');
$_TypeError =& $x735[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x735;
$x736 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x737 = $x736($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x737->class) && $x737->class === 'Error' && !isset($x737->properties['file']) && !isset($x737->properties['line']) && !isset($x737->properties['column'])) {$x737->properties['file'] = '<image>/02_object.js';$x737->properties['line'] = 271;$x737->properties['column'] = 26;$x737->attributes['file'] = $x737->attributes['line'] = $x737->attributes['column'] = 0; }
throw new JSException($x737, 271, 26, '<image>/02_object.js');
}
$x732 = JS::toObject($x732, $global);
unset($x738, $W738, $S738, $U738);
$x739 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x732, JS::toString($x734, $global), 271, 26, '<image>/02_object.js');
$x738 =& $x739[0]; list(,$W738,$S738,$U738) = $x739;
if ($U738 && (!isset($x732->extensible) || $x732->extensible)) {$x732->properties[$x734] = $x738; $x738 =& $x732->properties[$x734]; $x732->attributes[$x734] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U738 = FALSE; $W738 = TRUE; }
if (isset($x732->class) && $x732->class === 'Array') {  if (isset($x732->properties['length']) && $x732->properties['length'] !== JS::$undefined) { $x741 = $x732->properties['length']; }  else { $x741 = 0; } }
if (isset($S738)) {
$x742 = $S738->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x743 = $x742($global, $x732, $S738, array($x731), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x740 = $x743;
} else {
if (!$U738) {$x740 = $x731;if ($W738) { $x738 = $x731; }  }
else { $x740 = JS::$undefined; }
}
if (isset($x732->class) && $x732->class === 'Array') {if (is_int('valueOf') && 'valueOf' >= $x732->properties['length']) { $x732->properties['length'] = 'valueOf' + 1; }else if ($x734 === 'length' && is_int($x731) && $x741 > $x731) {  for ($i = $x731; $i < $x741; ++$i) {  unset($x732->properties[$i], $x732->attributes[$i]); }}};
$x746 = clone JS::$functionTemplate; $x746->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21'; $x746->parameters = array (
  0 => 'p',
); $x746->scope = $scope; $x746->properties['prototype'] = clone JS::$objectTemplate; $x746->attributes['prototype'] = JS::WRITABLE; $x746->properties['prototype']->properties['constructor'] = $x746; $x746->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x746->properties['length'] = 1; $x746->attributes['length'] = 0;
unset($x747, $W747, $S747, $U747);
$x748 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 279, 7, '<image>/02_object.js');
$x747 =& $x748[0]; list(,$W747,$S747,$U747) = $x748;
$x749 = JS::toString('hasOwnProperty', $global);
if ($x747 === JS::$undefined || $x747 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x750 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 279, 33, '<image>/02_object.js');
$_TypeError =& $x750[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x750;
$x751 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x752 = $x751($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x752->class) && $x752->class === 'Error' && !isset($x752->properties['file']) && !isset($x752->properties['line']) && !isset($x752->properties['column'])) {$x752->properties['file'] = '<image>/02_object.js';$x752->properties['line'] = 279;$x752->properties['column'] = 33;$x752->attributes['file'] = $x752->attributes['line'] = $x752->attributes['column'] = 0; }
throw new JSException($x752, 279, 33, '<image>/02_object.js');
}
$x747 = JS::toObject($x747, $global);
unset($x753, $W753, $S753, $U753);
$x754 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x747, JS::toString($x749, $global), 279, 33, '<image>/02_object.js');
$x753 =& $x754[0]; list(,$W753,$S753,$U753) = $x754;
if ($U753 && (!isset($x747->extensible) || $x747->extensible)) {$x747->properties[$x749] = $x753; $x753 =& $x747->properties[$x749]; $x747->attributes[$x749] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U753 = FALSE; $W753 = TRUE; }
if (isset($x747->class) && $x747->class === 'Array') {  if (isset($x747->properties['length']) && $x747->properties['length'] !== JS::$undefined) { $x756 = $x747->properties['length']; }  else { $x756 = 0; } }
if (isset($S753)) {
$x757 = $S753->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x758 = $x757($global, $x747, $S753, array($x746), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x755 = $x758;
} else {
if (!$U753) {$x755 = $x746;if ($W753) { $x753 = $x746; }  }
else { $x755 = JS::$undefined; }
}
if (isset($x747->class) && $x747->class === 'Array') {if (is_int('hasOwnProperty') && 'hasOwnProperty' >= $x747->properties['length']) { $x747->properties['length'] = 'hasOwnProperty' + 1; }else if ($x749 === 'length' && is_int($x746) && $x756 > $x746) {  for ($i = $x746; $i < $x756; ++$i) {  unset($x747->properties[$i], $x747->attributes[$i]); }}};
$x768 = clone JS::$functionTemplate; $x768->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22'; $x768->parameters = array (
  0 => 'v',
); $x768->scope = $scope; $x768->properties['prototype'] = clone JS::$objectTemplate; $x768->attributes['prototype'] = JS::WRITABLE; $x768->properties['prototype']->properties['constructor'] = $x768; $x768->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x768->properties['length'] = 1; $x768->attributes['length'] = 0;
unset($x769, $W769, $S769, $U769);
$x770 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 283, 7, '<image>/02_object.js');
$x769 =& $x770[0]; list(,$W769,$S769,$U769) = $x770;
$x771 = JS::toString('isPrototypeOf', $global);
if ($x769 === JS::$undefined || $x769 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x772 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 283, 32, '<image>/02_object.js');
$_TypeError =& $x772[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x772;
$x773 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x774 = $x773($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x774->class) && $x774->class === 'Error' && !isset($x774->properties['file']) && !isset($x774->properties['line']) && !isset($x774->properties['column'])) {$x774->properties['file'] = '<image>/02_object.js';$x774->properties['line'] = 283;$x774->properties['column'] = 32;$x774->attributes['file'] = $x774->attributes['line'] = $x774->attributes['column'] = 0; }
throw new JSException($x774, 283, 32, '<image>/02_object.js');
}
$x769 = JS::toObject($x769, $global);
unset($x775, $W775, $S775, $U775);
$x776 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x769, JS::toString($x771, $global), 283, 32, '<image>/02_object.js');
$x775 =& $x776[0]; list(,$W775,$S775,$U775) = $x776;
if ($U775 && (!isset($x769->extensible) || $x769->extensible)) {$x769->properties[$x771] = $x775; $x775 =& $x769->properties[$x771]; $x769->attributes[$x771] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U775 = FALSE; $W775 = TRUE; }
if (isset($x769->class) && $x769->class === 'Array') {  if (isset($x769->properties['length']) && $x769->properties['length'] !== JS::$undefined) { $x778 = $x769->properties['length']; }  else { $x778 = 0; } }
if (isset($S775)) {
$x779 = $S775->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x780 = $x779($global, $x769, $S775, array($x768), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x777 = $x780;
} else {
if (!$U775) {$x777 = $x768;if ($W775) { $x775 = $x768; }  }
else { $x777 = JS::$undefined; }
}
if (isset($x769->class) && $x769->class === 'Array') {if (is_int('isPrototypeOf') && 'isPrototypeOf' >= $x769->properties['length']) { $x769->properties['length'] = 'isPrototypeOf' + 1; }else if ($x771 === 'length' && is_int($x768) && $x778 > $x768) {  for ($i = $x768; $i < $x778; ++$i) {  unset($x769->properties[$i], $x769->attributes[$i]); }}};
$x783 = clone JS::$functionTemplate; $x783->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23'; $x783->parameters = array (
  0 => 'p',
); $x783->scope = $scope; $x783->properties['prototype'] = clone JS::$objectTemplate; $x783->attributes['prototype'] = JS::WRITABLE; $x783->properties['prototype']->properties['constructor'] = $x783; $x783->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x783->properties['length'] = 1; $x783->attributes['length'] = 0;
unset($x784, $W784, $S784, $U784);
$x785 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 300, 7, '<image>/02_object.js');
$x784 =& $x785[0]; list(,$W784,$S784,$U784) = $x785;
$x786 = JS::toString('propertyIsEnumerable', $global);
if ($x784 === JS::$undefined || $x784 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x787 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 300, 39, '<image>/02_object.js');
$_TypeError =& $x787[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x787;
$x788 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x789 = $x788($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x789->class) && $x789->class === 'Error' && !isset($x789->properties['file']) && !isset($x789->properties['line']) && !isset($x789->properties['column'])) {$x789->properties['file'] = '<image>/02_object.js';$x789->properties['line'] = 300;$x789->properties['column'] = 39;$x789->attributes['file'] = $x789->attributes['line'] = $x789->attributes['column'] = 0; }
throw new JSException($x789, 300, 39, '<image>/02_object.js');
}
$x784 = JS::toObject($x784, $global);
unset($x790, $W790, $S790, $U790);
$x791 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x784, JS::toString($x786, $global), 300, 39, '<image>/02_object.js');
$x790 =& $x791[0]; list(,$W790,$S790,$U790) = $x791;
if ($U790 && (!isset($x784->extensible) || $x784->extensible)) {$x784->properties[$x786] = $x790; $x790 =& $x784->properties[$x786]; $x784->attributes[$x786] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U790 = FALSE; $W790 = TRUE; }
if (isset($x784->class) && $x784->class === 'Array') {  if (isset($x784->properties['length']) && $x784->properties['length'] !== JS::$undefined) { $x793 = $x784->properties['length']; }  else { $x793 = 0; } }
if (isset($S790)) {
$x794 = $S790->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x795 = $x794($global, $x784, $S790, array($x783), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x792 = $x795;
} else {
if (!$U790) {$x792 = $x783;if ($W790) { $x790 = $x783; }  }
else { $x792 = JS::$undefined; }
}
if (isset($x784->class) && $x784->class === 'Array') {if (is_int('propertyIsEnumerable') && 'propertyIsEnumerable' >= $x784->properties['length']) { $x784->properties['length'] = 'propertyIsEnumerable' + 1; }else if ($x786 === 'length' && is_int($x783) && $x793 > $x783) {  for ($i = $x783; $i < $x793; ++$i) {  unset($x784->properties[$i], $x784->attributes[$i]); }}};
;
return JS::$undefined;
}
