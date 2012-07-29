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
$x48 =& $scope->properties['arguments'];
$x48->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x48->properties[$i] = $args[$i];
$x48->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['p'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x50 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x49 = $x50;
if (!JS::toBoolean($x49, $global)) {
$x53 = $_o;
$x53 = ($x53 === JS::$undefined ? 'undefined' : (is_int($x53) || is_float($x53) ? 'number' : (is_bool($x53) ? 'boolean' : (is_string($x53) ? 'string' : (is_object($x53) && isset($x53->call) ? 'function' : 'object')))));
$x52 = !(((gettype($x53) === gettype('object') && $x53 === 'object'))|| (((is_float($x53) || is_int($x53)) && (is_float('object') || is_int('object'))) && $x53 == 'object'));
$x51 = $x52;
if (JS::toBoolean($x51, $global)) {
$x55 = $_o;
$x55 = ($x55 === JS::$undefined ? 'undefined' : (is_int($x55) || is_float($x55) ? 'number' : (is_bool($x55) ? 'boolean' : (is_string($x55) ? 'string' : (is_object($x55) && isset($x55->call) ? 'function' : 'object')))));
$x54 = !(((gettype($x55) === gettype('function') && $x55 === 'function'))|| (((is_float($x55) || is_int($x55)) && (is_float('function') || is_int('function'))) && $x55 == 'function'));
$x51 = $x54; }
$x49 = $x51; }
if (JS::toBoolean($x49, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 19, 13, '<image>/02_object.js');
$_TypeError =& $x58[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x58;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x59 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 19, 13, '<image>/02_object.js');
$_ReferenceError =& $x59[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x59;
$x60 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 13);
$x61 = $x60($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x61->class) && $x61->class === 'Error' && !isset($x61->properties['file']) && !isset($x61->properties['line']) && !isset($x61->properties['column'])) {$x61->properties['file'] = '<image>/02_object.js';$x61->properties['line'] = 19;$x61->properties['column'] = 13;$x61->attributes['file'] = $x61->attributes['line'] = $x61->attributes['column'] = 0; }
throw new JSException($x61, 19, 13, '<image>/02_object.js');
}
$x56 = clone JS::$objectTemplate;
unset($x62, $W62, $S62, $U62);
$x63 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 19, 9, '<image>/02_object.js');
$x62 =& $x63[0]; list(,$W62,$S62,$U62) = $x63;
$x57 = $x62;
$x56->prototype = $x57;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x66 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x67 = $x66($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x67->class) && $x67->class === 'Error' && !isset($x67->properties['file']) && !isset($x67->properties['line']) && !isset($x67->properties['column'])) {$x67->properties['file'] = '<image>/02_object.js';$x67->properties['line'] = 19;$x67->properties['column'] = 9;$x67->attributes['file'] = $x67->attributes['line'] = $x67->attributes['column'] = 0; }
throw new JSException($x67, 19, 9, '<image>/02_object.js');
}
$x64 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x65 = $x64($global, $x56, $_TypeError, array('Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x57 = $x65;
if (is_object($x57) && $x57 !== JS::$undefined) { $x56 = $x57; }
if (isset($x56->class) && $x56->class === 'Error' && !isset($x56->properties['file']) && !isset($x56->properties['line']) && !isset($x56->properties['column'])) {$x56->properties['file'] = '<image>/02_object.js';$x56->properties['line'] = 19;$x56->properties['column'] = 3;$x56->attributes['file'] = $x56->attributes['line'] = $x56->attributes['column'] = 0; }
throw new JSException($x56, 19, 3, '<image>/02_object.js');;
};
if (JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties) || array_key_exists($_p,$_o->attributes), $global)), $global)) {

return JS::$undefined;;
};
$x68 = clone JS::$objectTemplate;
$scope->properties['desc'] = JS::$undefined; $_desc =& $scope->properties['desc'];
$Udesc = FALSE;
$_desc = $x68;
if (JS::toBoolean(array_key_exists($_p,$_o->properties), $global)) {
unset($x69, $W69, $S69, $U69);
$x70 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_o, JS::toString($_p, $global), 29, 17, '<image>/02_object.js');
$x69 =& $x70[0]; list(,$W69,$S69,$U69) = $x70;
$x71 = JS::toString('value', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x72 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 29, 14, '<image>/02_object.js');
$_TypeError =& $x72[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x72;
$x73 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x74 = $x73($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x74->class) && $x74->class === 'Error' && !isset($x74->properties['file']) && !isset($x74->properties['line']) && !isset($x74->properties['column'])) {$x74->properties['file'] = '<image>/02_object.js';$x74->properties['line'] = 29;$x74->properties['column'] = 14;$x74->attributes['file'] = $x74->attributes['line'] = $x74->attributes['column'] = 0; }
throw new JSException($x74, 29, 14, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x75, $W75, $S75, $U75);
$x76 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x71, $global), 29, 14, '<image>/02_object.js');
$x75 =& $x76[0]; list(,$W75,$S75,$U75) = $x76;
if ($U75 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x71] = $x75; $x75 =& $_desc->properties[$x71]; $_desc->attributes[$x71] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U75 = FALSE; $W75 = TRUE; }
if (isset($S75)) {
$x78 = $S75->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x79 = $x78($global, $_desc, $S75, array($x69), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x77 = $x79;
} else {
if (!$U75) {$x77 = $x69;if ($W75) { $x75 = $x69; }  }
else { $x77 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('value') && 'value' >= $_desc->properties['length']) { $_desc->properties['length'] = 'value' + 1; };
$x80 = JS::toBoolean($_o->attributes[$_p] & JS::WRITABLE, $global);
$x81 = JS::toString('writable', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x82 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 30, 17, '<image>/02_object.js');
$_TypeError =& $x82[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x82;
$x83 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x84 = $x83($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x84->class) && $x84->class === 'Error' && !isset($x84->properties['file']) && !isset($x84->properties['line']) && !isset($x84->properties['column'])) {$x84->properties['file'] = '<image>/02_object.js';$x84->properties['line'] = 30;$x84->properties['column'] = 17;$x84->attributes['file'] = $x84->attributes['line'] = $x84->attributes['column'] = 0; }
throw new JSException($x84, 30, 17, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x85, $W85, $S85, $U85);
$x86 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x81, $global), 30, 17, '<image>/02_object.js');
$x85 =& $x86[0]; list(,$W85,$S85,$U85) = $x86;
if ($U85 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x81] = $x85; $x85 =& $_desc->properties[$x81]; $_desc->attributes[$x81] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U85 = FALSE; $W85 = TRUE; }
if (isset($S85)) {
$x88 = $S85->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x89 = $x88($global, $_desc, $S85, array($x80), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x87 = $x89;
} else {
if (!$U85) {$x87 = $x80;if ($W85) { $x85 = $x80; }  }
else { $x87 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('writable') && 'writable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'writable' + 1; };;
}
else {
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_GETTER, $global)) {
$x90 = JS::toString('get', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x91 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 34, 13, '<image>/02_object.js');
$_TypeError =& $x91[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x91;
$x92 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x93 = $x92($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x93->class) && $x93->class === 'Error' && !isset($x93->properties['file']) && !isset($x93->properties['line']) && !isset($x93->properties['column'])) {$x93->properties['file'] = '<image>/02_object.js';$x93->properties['line'] = 34;$x93->properties['column'] = 13;$x93->attributes['file'] = $x93->attributes['line'] = $x93->attributes['column'] = 0; }
throw new JSException($x93, 34, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x94, $W94, $S94, $U94);
$x95 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x90, $global), 34, 13, '<image>/02_object.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
if ($U94 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x90] = $x94; $x94 =& $_desc->properties[$x90]; $_desc->attributes[$x90] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U94 = FALSE; $W94 = TRUE; }
if (isset($S94)) {
$x97 = $S94->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x98 = $x97($global, $_desc, $S94, array($_o->getters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x96 = $x98;
} else {
if (!$U94) {$x96 = $_o->getters[$_p];if ($W94) { $x94 = $_o->getters[$_p]; }  }
else { $x96 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('get') && 'get' >= $_desc->properties['length']) { $_desc->properties['length'] = 'get' + 1; };
};
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_SETTER, $global)) {
$x99 = JS::toString('set', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x100 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 38, 13, '<image>/02_object.js');
$_TypeError =& $x100[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x100;
$x101 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x102 = $x101($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x102->class) && $x102->class === 'Error' && !isset($x102->properties['file']) && !isset($x102->properties['line']) && !isset($x102->properties['column'])) {$x102->properties['file'] = '<image>/02_object.js';$x102->properties['line'] = 38;$x102->properties['column'] = 13;$x102->attributes['file'] = $x102->attributes['line'] = $x102->attributes['column'] = 0; }
throw new JSException($x102, 38, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x103, $W103, $S103, $U103);
$x104 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x99, $global), 38, 13, '<image>/02_object.js');
$x103 =& $x104[0]; list(,$W103,$S103,$U103) = $x104;
if ($U103 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x99] = $x103; $x103 =& $_desc->properties[$x99]; $_desc->attributes[$x99] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U103 = FALSE; $W103 = TRUE; }
if (isset($S103)) {
$x106 = $S103->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x107 = $x106($global, $_desc, $S103, array($_o->setters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x105 = $x107;
} else {
if (!$U103) {$x105 = $_o->setters[$_p];if ($W103) { $x103 = $_o->setters[$_p]; }  }
else { $x105 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('set') && 'set' >= $_desc->properties['length']) { $_desc->properties['length'] = 'set' + 1; };
};;
};
$x108 = JS::toBoolean($_o->attributes[$_p] & JS::ENUMERABLE, $global);
$x109 = JS::toString('enumerable', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x110 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 42, 18, '<image>/02_object.js');
$_TypeError =& $x110[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x110;
$x111 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x112 = $x111($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x112->class) && $x112->class === 'Error' && !isset($x112->properties['file']) && !isset($x112->properties['line']) && !isset($x112->properties['column'])) {$x112->properties['file'] = '<image>/02_object.js';$x112->properties['line'] = 42;$x112->properties['column'] = 18;$x112->attributes['file'] = $x112->attributes['line'] = $x112->attributes['column'] = 0; }
throw new JSException($x112, 42, 18, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x113, $W113, $S113, $U113);
$x114 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x109, $global), 42, 18, '<image>/02_object.js');
$x113 =& $x114[0]; list(,$W113,$S113,$U113) = $x114;
if ($U113 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x109] = $x113; $x113 =& $_desc->properties[$x109]; $_desc->attributes[$x109] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U113 = FALSE; $W113 = TRUE; }
if (isset($S113)) {
$x116 = $S113->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x117 = $x116($global, $_desc, $S113, array($x108), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x115 = $x117;
} else {
if (!$U113) {$x115 = $x108;if ($W113) { $x113 = $x108; }  }
else { $x115 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('enumerable') && 'enumerable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'enumerable' + 1; };
$x118 = JS::toBoolean($_o->attributes[$_p] & JS::CONFIGURABLE, $global);
$x119 = JS::toString('configurable', $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x120 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 43, 20, '<image>/02_object.js');
$_TypeError =& $x120[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x120;
$x121 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x122 = $x121($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x122->class) && $x122->class === 'Error' && !isset($x122->properties['file']) && !isset($x122->properties['line']) && !isset($x122->properties['column'])) {$x122->properties['file'] = '<image>/02_object.js';$x122->properties['line'] = 43;$x122->properties['column'] = 20;$x122->attributes['file'] = $x122->attributes['line'] = $x122->attributes['column'] = 0; }
throw new JSException($x122, 43, 20, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x123, $W123, $S123, $U123);
$x124 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, JS::toString($x119, $global), 43, 20, '<image>/02_object.js');
$x123 =& $x124[0]; list(,$W123,$S123,$U123) = $x124;
if ($U123 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties[$x119] = $x123; $x123 =& $_desc->properties[$x119]; $_desc->attributes[$x119] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U123 = FALSE; $W123 = TRUE; }
if (isset($S123)) {
$x126 = $S123->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x127 = $x126($global, $_desc, $S123, array($x118), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x125 = $x127;
} else {
if (!$U123) {$x125 = $x118;if ($W123) { $x123 = $x118; }  }
else { $x125 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('configurable') && 'configurable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'configurable' + 1; };
return $_desc;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x48=&$scope->properties[\'arguments\'];$x48->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x48->properties[$i]=$args[$i];$x48->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;$x50=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x49=$x50;if(!JS::toBoolean($x49,$global)){$x53=$_o;$x53=($x53===JS::$undefined?\'undefined\':(is_int($x53)||is_float($x53)?\'number\':(is_bool($x53)?\'boolean\':(is_string($x53)?\'string\':(is_object($x53)&&isset($x53->call)?\'function\':\'object\')))));$x52=!(((gettype($x53)===gettype(\'object\')&&$x53===\'object\'))||(((is_float($x53)||is_int($x53))&&(is_float(\'object\')||is_int(\'object\')))&&$x53==\'object\'));$x51=$x52;if(JS::toBoolean($x51,$global)){$x55=$_o;$x55=($x55===JS::$undefined?\'undefined\':(is_int($x55)||is_float($x55)?\'number\':(is_bool($x55)?\'boolean\':(is_string($x55)?\'string\':(is_object($x55)&&isset($x55->call)?\'function\':\'object\')))));$x54=!(((gettype($x55)===gettype(\'function\')&&$x55===\'function\'))||(((is_float($x55)||is_int($x55))&&(is_float(\'function\')||is_int(\'function\')))&&$x55==\'function\'));$x51=$x54;}$x49=$x51;}if(JS::toBoolean($x49,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x58=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),19,13,\'<image>/02_object.js\');$_TypeError=&$x58[0];list(,$WTypeError,$STypeError,$UTypeError)=$x58;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x59=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),19,13,\'<image>/02_object.js\');$_ReferenceError=&$x59[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x59;$x60=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,13);$x61=$x60($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x61->class)&&$x61->class===\'Error\'&&!isset($x61->properties[\'file\'])&&!isset($x61->properties[\'line\'])&&!isset($x61->properties[\'column\'])){$x61->properties[\'file\']=\'<image>/02_object.js\';$x61->properties[\'line\']=19;$x61->properties[\'column\']=13;$x61->attributes[\'file\']=$x61->attributes[\'line\']=$x61->attributes[\'column\']=0;}throw new JSException($x61,19,13,\'<image>/02_object.js\');}$x56=clone JS::$objectTemplate;unset($x62,$W62,$S62,$U62);$x63=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),19,9,\'<image>/02_object.js\');$x62=&$x63[0];list(,$W62,$S62,$U62)=$x63;$x57=$x62;$x56->prototype=$x57;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x66=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x67=$x66($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x67->class)&&$x67->class===\'Error\'&&!isset($x67->properties[\'file\'])&&!isset($x67->properties[\'line\'])&&!isset($x67->properties[\'column\'])){$x67->properties[\'file\']=\'<image>/02_object.js\';$x67->properties[\'line\']=19;$x67->properties[\'column\']=9;$x67->attributes[\'file\']=$x67->attributes[\'line\']=$x67->attributes[\'column\']=0;}throw new JSException($x67,19,9,\'<image>/02_object.js\');}$x64=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x65=$x64($global,$x56,$_TypeError,array(\'Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x57=$x65;if(is_object($x57)&&$x57!==JS::$undefined){$x56=$x57;}if(isset($x56->class)&&$x56->class===\'Error\'&&!isset($x56->properties[\'file\'])&&!isset($x56->properties[\'line\'])&&!isset($x56->properties[\'column\'])){$x56->properties[\'file\']=\'<image>/02_object.js\';$x56->properties[\'line\']=19;$x56->properties[\'column\']=3;$x56->attributes[\'file\']=$x56->attributes[\'line\']=$x56->attributes[\'column\']=0;}throw new JSException($x56,19,3,\'<image>/02_object.js\');}if(JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties)||array_key_exists($_p,$_o->attributes),$global)),$global)){return JS::$undefined;}$x68=clone JS::$objectTemplate;$scope->properties[\'desc\']=JS::$undefined;$_desc=&$scope->properties[\'desc\'];$Udesc=FALSE;$_desc=$x68;if(JS::toBoolean(array_key_exists($_p,$_o->properties),$global)){unset($x69,$W69,$S69,$U69);$x70=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_o,JS::toString($_p,$global),29,17,\'<image>/02_object.js\');$x69=&$x70[0];list(,$W69,$S69,$U69)=$x70;$x71=JS::toString(\'value\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x72=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),29,14,\'<image>/02_object.js\');$_TypeError=&$x72[0];list(,$WTypeError,$STypeError,$UTypeError)=$x72;$x73=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x74=$x73($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x74->class)&&$x74->class===\'Error\'&&!isset($x74->properties[\'file\'])&&!isset($x74->properties[\'line\'])&&!isset($x74->properties[\'column\'])){$x74->properties[\'file\']=\'<image>/02_object.js\';$x74->properties[\'line\']=29;$x74->properties[\'column\']=14;$x74->attributes[\'file\']=$x74->attributes[\'line\']=$x74->attributes[\'column\']=0;}throw new JSException($x74,29,14,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x75,$W75,$S75,$U75);$x76=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x71,$global),29,14,\'<image>/02_object.js\');$x75=&$x76[0];list(,$W75,$S75,$U75)=$x76;if($U75&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x71]=$x75;$x75=&$_desc->properties[$x71];$_desc->attributes[$x71]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U75=FALSE;$W75=TRUE;}if(isset($S75)){$x78=$S75->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x79=$x78($global,$_desc,$S75,array($x69),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x77=$x79;}else{if(!$U75){$x77=$x69;if($W75){$x75=$x69;}}else{$x77=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'value\')&&\'value\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'value\'+1;}$x80=JS::toBoolean($_o->attributes[$_p]&JS::WRITABLE,$global);$x81=JS::toString(\'writable\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x82=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),30,17,\'<image>/02_object.js\');$_TypeError=&$x82[0];list(,$WTypeError,$STypeError,$UTypeError)=$x82;$x83=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x84=$x83($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x84->class)&&$x84->class===\'Error\'&&!isset($x84->properties[\'file\'])&&!isset($x84->properties[\'line\'])&&!isset($x84->properties[\'column\'])){$x84->properties[\'file\']=\'<image>/02_object.js\';$x84->properties[\'line\']=30;$x84->properties[\'column\']=17;$x84->attributes[\'file\']=$x84->attributes[\'line\']=$x84->attributes[\'column\']=0;}throw new JSException($x84,30,17,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x85,$W85,$S85,$U85);$x86=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x81,$global),30,17,\'<image>/02_object.js\');$x85=&$x86[0];list(,$W85,$S85,$U85)=$x86;if($U85&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x81]=$x85;$x85=&$_desc->properties[$x81];$_desc->attributes[$x81]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U85=FALSE;$W85=TRUE;}if(isset($S85)){$x88=$S85->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x89=$x88($global,$_desc,$S85,array($x80),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x87=$x89;}else{if(!$U85){$x87=$x80;if($W85){$x85=$x80;}}else{$x87=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'writable\')&&\'writable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'writable\'+1;}}else{if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_GETTER,$global)){$x90=JS::toString(\'get\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x91=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),34,13,\'<image>/02_object.js\');$_TypeError=&$x91[0];list(,$WTypeError,$STypeError,$UTypeError)=$x91;$x92=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x93=$x92($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x93->class)&&$x93->class===\'Error\'&&!isset($x93->properties[\'file\'])&&!isset($x93->properties[\'line\'])&&!isset($x93->properties[\'column\'])){$x93->properties[\'file\']=\'<image>/02_object.js\';$x93->properties[\'line\']=34;$x93->properties[\'column\']=13;$x93->attributes[\'file\']=$x93->attributes[\'line\']=$x93->attributes[\'column\']=0;}throw new JSException($x93,34,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x94,$W94,$S94,$U94);$x95=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x90,$global),34,13,\'<image>/02_object.js\');$x94=&$x95[0];list(,$W94,$S94,$U94)=$x95;if($U94&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x90]=$x94;$x94=&$_desc->properties[$x90];$_desc->attributes[$x90]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U94=FALSE;$W94=TRUE;}if(isset($S94)){$x97=$S94->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x98=$x97($global,$_desc,$S94,array($_o->getters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x96=$x98;}else{if(!$U94){$x96=$_o->getters[$_p];if($W94){$x94=$_o->getters[$_p];}}else{$x96=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'get\')&&\'get\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'get\'+1;}}if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_SETTER,$global)){$x99=JS::toString(\'set\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x100=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),38,13,\'<image>/02_object.js\');$_TypeError=&$x100[0];list(,$WTypeError,$STypeError,$UTypeError)=$x100;$x101=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x102=$x101($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x102->class)&&$x102->class===\'Error\'&&!isset($x102->properties[\'file\'])&&!isset($x102->properties[\'line\'])&&!isset($x102->properties[\'column\'])){$x102->properties[\'file\']=\'<image>/02_object.js\';$x102->properties[\'line\']=38;$x102->properties[\'column\']=13;$x102->attributes[\'file\']=$x102->attributes[\'line\']=$x102->attributes[\'column\']=0;}throw new JSException($x102,38,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x103,$W103,$S103,$U103);$x104=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x99,$global),38,13,\'<image>/02_object.js\');$x103=&$x104[0];list(,$W103,$S103,$U103)=$x104;if($U103&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x99]=$x103;$x103=&$_desc->properties[$x99];$_desc->attributes[$x99]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U103=FALSE;$W103=TRUE;}if(isset($S103)){$x106=$S103->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x107=$x106($global,$_desc,$S103,array($_o->setters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x105=$x107;}else{if(!$U103){$x105=$_o->setters[$_p];if($W103){$x103=$_o->setters[$_p];}}else{$x105=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'set\')&&\'set\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'set\'+1;}}}$x108=JS::toBoolean($_o->attributes[$_p]&JS::ENUMERABLE,$global);$x109=JS::toString(\'enumerable\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x110=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),42,18,\'<image>/02_object.js\');$_TypeError=&$x110[0];list(,$WTypeError,$STypeError,$UTypeError)=$x110;$x111=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x112=$x111($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x112->class)&&$x112->class===\'Error\'&&!isset($x112->properties[\'file\'])&&!isset($x112->properties[\'line\'])&&!isset($x112->properties[\'column\'])){$x112->properties[\'file\']=\'<image>/02_object.js\';$x112->properties[\'line\']=42;$x112->properties[\'column\']=18;$x112->attributes[\'file\']=$x112->attributes[\'line\']=$x112->attributes[\'column\']=0;}throw new JSException($x112,42,18,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x113,$W113,$S113,$U113);$x114=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x109,$global),42,18,\'<image>/02_object.js\');$x113=&$x114[0];list(,$W113,$S113,$U113)=$x114;if($U113&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x109]=$x113;$x113=&$_desc->properties[$x109];$_desc->attributes[$x109]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U113=FALSE;$W113=TRUE;}if(isset($S113)){$x116=$S113->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x117=$x116($global,$_desc,$S113,array($x108),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x115=$x117;}else{if(!$U113){$x115=$x108;if($W113){$x113=$x108;}}else{$x115=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'enumerable\')&&\'enumerable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'enumerable\'+1;}$x118=JS::toBoolean($_o->attributes[$_p]&JS::CONFIGURABLE,$global);$x119=JS::toString(\'configurable\',$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x120=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),43,20,\'<image>/02_object.js\');$_TypeError=&$x120[0];list(,$WTypeError,$STypeError,$UTypeError)=$x120;$x121=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x122=$x121($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x122->class)&&$x122->class===\'Error\'&&!isset($x122->properties[\'file\'])&&!isset($x122->properties[\'line\'])&&!isset($x122->properties[\'column\'])){$x122->properties[\'file\']=\'<image>/02_object.js\';$x122->properties[\'line\']=43;$x122->properties[\'column\']=20;$x122->attributes[\'file\']=$x122->attributes[\'line\']=$x122->attributes[\'column\']=0;}throw new JSException($x122,43,20,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x123,$W123,$S123,$U123);$x124=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,JS::toString($x119,$global),43,20,\'<image>/02_object.js\');$x123=&$x124[0];list(,$W123,$S123,$U123)=$x124;if($U123&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[$x119]=$x123;$x123=&$_desc->properties[$x119];$_desc->attributes[$x119]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U123=FALSE;$W123=TRUE;}if(isset($S123)){$x126=$S123->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x127=$x126($global,$_desc,$S123,array($x118),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x125=$x127;}else{if(!$U123){$x125=$x118;if($W123){$x123=$x118;}}else{$x125=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'configurable\')&&\'configurable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'configurable\'+1;}return$_desc;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x139 =& $scope->properties['arguments'];
$x139->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x139->properties[$i] = $args[$i];
$x139->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x141 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x140 = $x141;
if (!JS::toBoolean($x140, $global)) {
$x144 = $_o;
$x144 = ($x144 === JS::$undefined ? 'undefined' : (is_int($x144) || is_float($x144) ? 'number' : (is_bool($x144) ? 'boolean' : (is_string($x144) ? 'string' : (is_object($x144) && isset($x144->call) ? 'function' : 'object')))));
$x143 = !(((gettype($x144) === gettype('object') && $x144 === 'object'))|| (((is_float($x144) || is_int($x144)) && (is_float('object') || is_int('object'))) && $x144 == 'object'));
$x142 = $x143;
if (JS::toBoolean($x142, $global)) {
$x146 = $_o;
$x146 = ($x146 === JS::$undefined ? 'undefined' : (is_int($x146) || is_float($x146) ? 'number' : (is_bool($x146) ? 'boolean' : (is_string($x146) ? 'string' : (is_object($x146) && isset($x146->call) ? 'function' : 'object')))));
$x145 = !(((gettype($x146) === gettype('function') && $x146 === 'function'))|| (((is_float($x146) || is_int($x146)) && (is_float('function') || is_int('function'))) && $x146 == 'function'));
$x142 = $x145; }
$x140 = $x142; }
if (JS::toBoolean($x140, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x149 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 50, 13, '<image>/02_object.js');
$_TypeError =& $x149[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x149;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x150 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 50, 13, '<image>/02_object.js');
$_ReferenceError =& $x150[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x150;
$x151 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 13);
$x152 = $x151($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x152->class) && $x152->class === 'Error' && !isset($x152->properties['file']) && !isset($x152->properties['line']) && !isset($x152->properties['column'])) {$x152->properties['file'] = '<image>/02_object.js';$x152->properties['line'] = 50;$x152->properties['column'] = 13;$x152->attributes['file'] = $x152->attributes['line'] = $x152->attributes['column'] = 0; }
throw new JSException($x152, 50, 13, '<image>/02_object.js');
}
$x147 = clone JS::$objectTemplate;
unset($x153, $W153, $S153, $U153);
$x154 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 50, 9, '<image>/02_object.js');
$x153 =& $x154[0]; list(,$W153,$S153,$U153) = $x154;
$x148 = $x153;
$x147->prototype = $x148;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x157 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x158 = $x157($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x158->class) && $x158->class === 'Error' && !isset($x158->properties['file']) && !isset($x158->properties['line']) && !isset($x158->properties['column'])) {$x158->properties['file'] = '<image>/02_object.js';$x158->properties['line'] = 50;$x158->properties['column'] = 9;$x158->attributes['file'] = $x158->attributes['line'] = $x158->attributes['column'] = 0; }
throw new JSException($x158, 50, 9, '<image>/02_object.js');
}
$x155 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x156 = $x155($global, $x147, $_TypeError, array('Object.getOwnPropertyNames(): Cannot get property names of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x148 = $x156;
if (is_object($x148) && $x148 !== JS::$undefined) { $x147 = $x148; }
if (isset($x147->class) && $x147->class === 'Error' && !isset($x147->properties['file']) && !isset($x147->properties['line']) && !isset($x147->properties['column'])) {$x147->properties['file'] = '<image>/02_object.js';$x147->properties['line'] = 50;$x147->properties['column'] = 3;$x147->attributes['file'] = $x147->attributes['line'] = $x147->attributes['column'] = 0; }
throw new JSException($x147, 50, 3, '<image>/02_object.js');;
};
$x159 = clone JS::$arrayTemplate;
$x159->properties['length'] = 0;
$x159->attributes['length'] = JS::WRITABLE;
$scope->properties['names'] = JS::$undefined; $_names =& $scope->properties['names'];
$Unames = FALSE;
$_names = $x159;
foreach (array_unique(array_merge(array_keys($_o->properties), array_keys($_o->attributes))) as $i => $name) {;
if ($_names === JS::$undefined || $_names === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x161 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 56, 13, '<image>/02_object.js');
$_TypeError =& $x161[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x161;
$x162 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x163 = $x162($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x163->class) && $x163->class === 'Error' && !isset($x163->properties['file']) && !isset($x163->properties['line']) && !isset($x163->properties['column'])) {$x163->properties['file'] = '<image>/02_object.js';$x163->properties['line'] = 56;$x163->properties['column'] = 13;$x163->attributes['file'] = $x163->attributes['line'] = $x163->attributes['column'] = 0; }
throw new JSException($x163, 56, 13, '<image>/02_object.js');
}
$x160 = JS::toObject($_names, $global);
unset($x164, $W164, $S164, $U164);
$x165 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x160, JS::toString('push', $global), 56, 13, '<image>/02_object.js');
$x164 =& $x165[0]; list(,$W164,$S164,$U164) = $x165;
if (!(is_object($x164) && isset($x164->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x168 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 56, 13, '<image>/02_object.js');
$_TypeError =& $x168[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x168;
$x169 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x170 = $x169($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x170->class) && $x170->class === 'Error' && !isset($x170->properties['file']) && !isset($x170->properties['line']) && !isset($x170->properties['column'])) {$x170->properties['file'] = '<image>/02_object.js';$x170->properties['line'] = 56;$x170->properties['column'] = 13;$x170->attributes['file'] = $x170->attributes['line'] = $x170->attributes['column'] = 0; }
throw new JSException($x170, 56, 13, '<image>/02_object.js');
}
$x166 = $x164->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x167 = $x166($global, $x160, $x164, array($name), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_names;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x139=&$scope->properties[\'arguments\'];$x139->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x139->properties[$i]=$args[$i];$x139->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x141=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x140=$x141;if(!JS::toBoolean($x140,$global)){$x144=$_o;$x144=($x144===JS::$undefined?\'undefined\':(is_int($x144)||is_float($x144)?\'number\':(is_bool($x144)?\'boolean\':(is_string($x144)?\'string\':(is_object($x144)&&isset($x144->call)?\'function\':\'object\')))));$x143=!(((gettype($x144)===gettype(\'object\')&&$x144===\'object\'))||(((is_float($x144)||is_int($x144))&&(is_float(\'object\')||is_int(\'object\')))&&$x144==\'object\'));$x142=$x143;if(JS::toBoolean($x142,$global)){$x146=$_o;$x146=($x146===JS::$undefined?\'undefined\':(is_int($x146)||is_float($x146)?\'number\':(is_bool($x146)?\'boolean\':(is_string($x146)?\'string\':(is_object($x146)&&isset($x146->call)?\'function\':\'object\')))));$x145=!(((gettype($x146)===gettype(\'function\')&&$x146===\'function\'))||(((is_float($x146)||is_int($x146))&&(is_float(\'function\')||is_int(\'function\')))&&$x146==\'function\'));$x142=$x145;}$x140=$x142;}if(JS::toBoolean($x140,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x149=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),50,13,\'<image>/02_object.js\');$_TypeError=&$x149[0];list(,$WTypeError,$STypeError,$UTypeError)=$x149;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x150=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),50,13,\'<image>/02_object.js\');$_ReferenceError=&$x150[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x150;$x151=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,13);$x152=$x151($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x152->class)&&$x152->class===\'Error\'&&!isset($x152->properties[\'file\'])&&!isset($x152->properties[\'line\'])&&!isset($x152->properties[\'column\'])){$x152->properties[\'file\']=\'<image>/02_object.js\';$x152->properties[\'line\']=50;$x152->properties[\'column\']=13;$x152->attributes[\'file\']=$x152->attributes[\'line\']=$x152->attributes[\'column\']=0;}throw new JSException($x152,50,13,\'<image>/02_object.js\');}$x147=clone JS::$objectTemplate;unset($x153,$W153,$S153,$U153);$x154=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),50,9,\'<image>/02_object.js\');$x153=&$x154[0];list(,$W153,$S153,$U153)=$x154;$x148=$x153;$x147->prototype=$x148;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x157=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x158=$x157($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x158->class)&&$x158->class===\'Error\'&&!isset($x158->properties[\'file\'])&&!isset($x158->properties[\'line\'])&&!isset($x158->properties[\'column\'])){$x158->properties[\'file\']=\'<image>/02_object.js\';$x158->properties[\'line\']=50;$x158->properties[\'column\']=9;$x158->attributes[\'file\']=$x158->attributes[\'line\']=$x158->attributes[\'column\']=0;}throw new JSException($x158,50,9,\'<image>/02_object.js\');}$x155=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x156=$x155($global,$x147,$_TypeError,array(\'Object.getOwnPropertyNames(): Cannot get property names of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x148=$x156;if(is_object($x148)&&$x148!==JS::$undefined){$x147=$x148;}if(isset($x147->class)&&$x147->class===\'Error\'&&!isset($x147->properties[\'file\'])&&!isset($x147->properties[\'line\'])&&!isset($x147->properties[\'column\'])){$x147->properties[\'file\']=\'<image>/02_object.js\';$x147->properties[\'line\']=50;$x147->properties[\'column\']=3;$x147->attributes[\'file\']=$x147->attributes[\'line\']=$x147->attributes[\'column\']=0;}throw new JSException($x147,50,3,\'<image>/02_object.js\');}$x159=clone JS::$arrayTemplate;$x159->properties[\'length\']=0;$x159->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'names\']=JS::$undefined;$_names=&$scope->properties[\'names\'];$Unames=FALSE;$_names=$x159;foreach(array_unique(array_merge(array_keys($_o->properties),array_keys($_o->attributes)))as$i=>$name){;if($_names===JS::$undefined||$_names===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x161=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,13,\'<image>/02_object.js\');$_TypeError=&$x161[0];list(,$WTypeError,$STypeError,$UTypeError)=$x161;$x162=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x163=$x162($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x163->class)&&$x163->class===\'Error\'&&!isset($x163->properties[\'file\'])&&!isset($x163->properties[\'line\'])&&!isset($x163->properties[\'column\'])){$x163->properties[\'file\']=\'<image>/02_object.js\';$x163->properties[\'line\']=56;$x163->properties[\'column\']=13;$x163->attributes[\'file\']=$x163->attributes[\'line\']=$x163->attributes[\'column\']=0;}throw new JSException($x163,56,13,\'<image>/02_object.js\');}$x160=JS::toObject($_names,$global);unset($x164,$W164,$S164,$U164);$x165=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x160,JS::toString(\'push\',$global),56,13,\'<image>/02_object.js\');$x164=&$x165[0];list(,$W164,$S164,$U164)=$x165;if(!(is_object($x164)&&isset($x164->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x168=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),56,13,\'<image>/02_object.js\');$_TypeError=&$x168[0];list(,$WTypeError,$STypeError,$UTypeError)=$x168;$x169=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x170=$x169($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x170->class)&&$x170->class===\'Error\'&&!isset($x170->properties[\'file\'])&&!isset($x170->properties[\'line\'])&&!isset($x170->properties[\'column\'])){$x170->properties[\'file\']=\'<image>/02_object.js\';$x170->properties[\'line\']=56;$x170->properties[\'column\']=13;$x170->attributes[\'file\']=$x170->attributes[\'line\']=$x170->attributes[\'column\']=0;}throw new JSException($x170,56,13,\'<image>/02_object.js\');}$x166=$x164->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x167=$x166($global,$x160,$x164,array($name),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_names;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x182 =& $scope->properties['arguments'];
$x182->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x182->properties[$i] = $args[$i];
$x182->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x185 = $_o;
$x185 = ($x185 === JS::$undefined ? 'undefined' : (is_int($x185) || is_float($x185) ? 'number' : (is_bool($x185) ? 'boolean' : (is_string($x185) ? 'string' : (is_object($x185) && isset($x185->call) ? 'function' : 'object')))));
$x184 = !(((gettype($x185) === gettype('object') && $x185 === 'object'))|| (((is_float($x185) || is_int($x185)) && (is_float('object') || is_int('object'))) && $x185 == 'object'));
$x183 = $x184;
if (JS::toBoolean($x183, $global)) {
$x187 = $_o;
$x187 = ($x187 === JS::$undefined ? 'undefined' : (is_int($x187) || is_float($x187) ? 'number' : (is_bool($x187) ? 'boolean' : (is_string($x187) ? 'string' : (is_object($x187) && isset($x187->call) ? 'function' : 'object')))));
$x186 = !(((gettype($x187) === gettype('function') && $x187 === 'function'))|| (((is_float($x187) || is_int($x187)) && (is_float('function') || is_int('function'))) && $x187 == 'function'));
$x183 = $x186; }
if (JS::toBoolean($x183, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x190 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 64, 13, '<image>/02_object.js');
$_TypeError =& $x190[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x190;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x191 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 64, 13, '<image>/02_object.js');
$_ReferenceError =& $x191[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x191;
$x192 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 13);
$x193 = $x192($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x193->class) && $x193->class === 'Error' && !isset($x193->properties['file']) && !isset($x193->properties['line']) && !isset($x193->properties['column'])) {$x193->properties['file'] = '<image>/02_object.js';$x193->properties['line'] = 64;$x193->properties['column'] = 13;$x193->attributes['file'] = $x193->attributes['line'] = $x193->attributes['column'] = 0; }
throw new JSException($x193, 64, 13, '<image>/02_object.js');
}
$x188 = clone JS::$objectTemplate;
unset($x194, $W194, $S194, $U194);
$x195 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 64, 9, '<image>/02_object.js');
$x194 =& $x195[0]; list(,$W194,$S194,$U194) = $x195;
$x189 = $x194;
$x188->prototype = $x189;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x199 = $x198($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x199->class) && $x199->class === 'Error' && !isset($x199->properties['file']) && !isset($x199->properties['line']) && !isset($x199->properties['column'])) {$x199->properties['file'] = '<image>/02_object.js';$x199->properties['line'] = 64;$x199->properties['column'] = 9;$x199->attributes['file'] = $x199->attributes['line'] = $x199->attributes['column'] = 0; }
throw new JSException($x199, 64, 9, '<image>/02_object.js');
}
$x196 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x197 = $x196($global, $x188, $_TypeError, array('Object.create(): Cannot create object with non-object prototype.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x189 = $x197;
if (is_object($x189) && $x189 !== JS::$undefined) { $x188 = $x189; }
if (isset($x188->class) && $x188->class === 'Error' && !isset($x188->properties['file']) && !isset($x188->properties['line']) && !isset($x188->properties['column'])) {$x188->properties['file'] = '<image>/02_object.js';$x188->properties['line'] = 64;$x188->properties['column'] = 3;$x188->attributes['file'] = $x188->attributes['line'] = $x188->attributes['column'] = 0; }
throw new JSException($x188, 64, 3, '<image>/02_object.js');;
};
$x200 = clone JS::$objectTemplate;
$scope->properties['newObject'] = JS::$undefined; $_newObject =& $scope->properties['newObject'];
$UnewObject = FALSE;
$_newObject = $x200;
$_newObject->prototype =$_o;
if (JS::toBoolean(is_object($_properties) &&$_properties!== JS::$undefined, $global)) {
unset($_Object, $WObject, $SObject, $UObject);
$x201 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('Object', $global), 72, 3, '<image>/02_object.js');
$_Object =& $x201[0]; list(,$WObject,$SObject,$UObject) = $x201;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x202 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 72, 3, '<image>/02_object.js');
$_ReferenceError =& $x202[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x202;
$x203 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 3);
$x204 = $x203($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x204->class) && $x204->class === 'Error' && !isset($x204->properties['file']) && !isset($x204->properties['line']) && !isset($x204->properties['column'])) {$x204->properties['file'] = '<image>/02_object.js';$x204->properties['line'] = 72;$x204->properties['column'] = 3;$x204->attributes['file'] = $x204->attributes['line'] = $x204->attributes['column'] = 0; }
throw new JSException($x204, 72, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x206 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 26, '<image>/02_object.js');
$_TypeError =& $x206[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x206;
$x207 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x208 = $x207($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x208->class) && $x208->class === 'Error' && !isset($x208->properties['file']) && !isset($x208->properties['line']) && !isset($x208->properties['column'])) {$x208->properties['file'] = '<image>/02_object.js';$x208->properties['line'] = 72;$x208->properties['column'] = 26;$x208->attributes['file'] = $x208->attributes['line'] = $x208->attributes['column'] = 0; }
throw new JSException($x208, 72, 26, '<image>/02_object.js');
}
$x205 = JS::toObject($_Object, $global);
unset($x209, $W209, $S209, $U209);
$x210 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x205, JS::toString('defineProperties', $global), 72, 26, '<image>/02_object.js');
$x209 =& $x210[0]; list(,$W209,$S209,$U209) = $x210;
if (!(is_object($x209) && isset($x209->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x213 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 72, 26, '<image>/02_object.js');
$_TypeError =& $x213[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x213;
$x214 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x215 = $x214($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x215->class) && $x215->class === 'Error' && !isset($x215->properties['file']) && !isset($x215->properties['line']) && !isset($x215->properties['column'])) {$x215->properties['file'] = '<image>/02_object.js';$x215->properties['line'] = 72;$x215->properties['column'] = 26;$x215->attributes['file'] = $x215->attributes['line'] = $x215->attributes['column'] = 0; }
throw new JSException($x215, 72, 26, '<image>/02_object.js');
}
$x211 = $x209->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x212 = $x211($global, $x205, $x209, array($_newObject, $_properties), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newObject;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x182=&$scope->properties[\'arguments\'];$x182->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x182->properties[$i]=$args[$i];$x182->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x185=$_o;$x185=($x185===JS::$undefined?\'undefined\':(is_int($x185)||is_float($x185)?\'number\':(is_bool($x185)?\'boolean\':(is_string($x185)?\'string\':(is_object($x185)&&isset($x185->call)?\'function\':\'object\')))));$x184=!(((gettype($x185)===gettype(\'object\')&&$x185===\'object\'))||(((is_float($x185)||is_int($x185))&&(is_float(\'object\')||is_int(\'object\')))&&$x185==\'object\'));$x183=$x184;if(JS::toBoolean($x183,$global)){$x187=$_o;$x187=($x187===JS::$undefined?\'undefined\':(is_int($x187)||is_float($x187)?\'number\':(is_bool($x187)?\'boolean\':(is_string($x187)?\'string\':(is_object($x187)&&isset($x187->call)?\'function\':\'object\')))));$x186=!(((gettype($x187)===gettype(\'function\')&&$x187===\'function\'))||(((is_float($x187)||is_int($x187))&&(is_float(\'function\')||is_int(\'function\')))&&$x187==\'function\'));$x183=$x186;}if(JS::toBoolean($x183,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x190=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),64,13,\'<image>/02_object.js\');$_TypeError=&$x190[0];list(,$WTypeError,$STypeError,$UTypeError)=$x190;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x191=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),64,13,\'<image>/02_object.js\');$_ReferenceError=&$x191[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x191;$x192=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,13);$x193=$x192($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x193->class)&&$x193->class===\'Error\'&&!isset($x193->properties[\'file\'])&&!isset($x193->properties[\'line\'])&&!isset($x193->properties[\'column\'])){$x193->properties[\'file\']=\'<image>/02_object.js\';$x193->properties[\'line\']=64;$x193->properties[\'column\']=13;$x193->attributes[\'file\']=$x193->attributes[\'line\']=$x193->attributes[\'column\']=0;}throw new JSException($x193,64,13,\'<image>/02_object.js\');}$x188=clone JS::$objectTemplate;unset($x194,$W194,$S194,$U194);$x195=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),64,9,\'<image>/02_object.js\');$x194=&$x195[0];list(,$W194,$S194,$U194)=$x195;$x189=$x194;$x188->prototype=$x189;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x198=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x199=$x198($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x199->class)&&$x199->class===\'Error\'&&!isset($x199->properties[\'file\'])&&!isset($x199->properties[\'line\'])&&!isset($x199->properties[\'column\'])){$x199->properties[\'file\']=\'<image>/02_object.js\';$x199->properties[\'line\']=64;$x199->properties[\'column\']=9;$x199->attributes[\'file\']=$x199->attributes[\'line\']=$x199->attributes[\'column\']=0;}throw new JSException($x199,64,9,\'<image>/02_object.js\');}$x196=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x197=$x196($global,$x188,$_TypeError,array(\'Object.create(): Cannot create object with non-object prototype.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x189=$x197;if(is_object($x189)&&$x189!==JS::$undefined){$x188=$x189;}if(isset($x188->class)&&$x188->class===\'Error\'&&!isset($x188->properties[\'file\'])&&!isset($x188->properties[\'line\'])&&!isset($x188->properties[\'column\'])){$x188->properties[\'file\']=\'<image>/02_object.js\';$x188->properties[\'line\']=64;$x188->properties[\'column\']=3;$x188->attributes[\'file\']=$x188->attributes[\'line\']=$x188->attributes[\'column\']=0;}throw new JSException($x188,64,3,\'<image>/02_object.js\');}$x200=clone JS::$objectTemplate;$scope->properties[\'newObject\']=JS::$undefined;$_newObject=&$scope->properties[\'newObject\'];$UnewObject=FALSE;$_newObject=$x200;$_newObject->prototype=$_o;if(JS::toBoolean(is_object($_properties)&&$_properties!==JS::$undefined,$global)){unset($_Object,$WObject,$SObject,$UObject);$x201=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'Object\',$global),72,3,\'<image>/02_object.js\');$_Object=&$x201[0];list(,$WObject,$SObject,$UObject)=$x201;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x202=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),72,3,\'<image>/02_object.js\');$_ReferenceError=&$x202[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x202;$x203=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,3);$x204=$x203($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x204->class)&&$x204->class===\'Error\'&&!isset($x204->properties[\'file\'])&&!isset($x204->properties[\'line\'])&&!isset($x204->properties[\'column\'])){$x204->properties[\'file\']=\'<image>/02_object.js\';$x204->properties[\'line\']=72;$x204->properties[\'column\']=3;$x204->attributes[\'file\']=$x204->attributes[\'line\']=$x204->attributes[\'column\']=0;}throw new JSException($x204,72,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x206=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,26,\'<image>/02_object.js\');$_TypeError=&$x206[0];list(,$WTypeError,$STypeError,$UTypeError)=$x206;$x207=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x208=$x207($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x208->class)&&$x208->class===\'Error\'&&!isset($x208->properties[\'file\'])&&!isset($x208->properties[\'line\'])&&!isset($x208->properties[\'column\'])){$x208->properties[\'file\']=\'<image>/02_object.js\';$x208->properties[\'line\']=72;$x208->properties[\'column\']=26;$x208->attributes[\'file\']=$x208->attributes[\'line\']=$x208->attributes[\'column\']=0;}throw new JSException($x208,72,26,\'<image>/02_object.js\');}$x205=JS::toObject($_Object,$global);unset($x209,$W209,$S209,$U209);$x210=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x205,JS::toString(\'defineProperties\',$global),72,26,\'<image>/02_object.js\');$x209=&$x210[0];list(,$W209,$S209,$U209)=$x210;if(!(is_object($x209)&&isset($x209->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x213=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),72,26,\'<image>/02_object.js\');$_TypeError=&$x213[0];list(,$WTypeError,$STypeError,$UTypeError)=$x213;$x214=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x215=$x214($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x215->class)&&$x215->class===\'Error\'&&!isset($x215->properties[\'file\'])&&!isset($x215->properties[\'line\'])&&!isset($x215->properties[\'column\'])){$x215->properties[\'file\']=\'<image>/02_object.js\';$x215->properties[\'line\']=72;$x215->properties[\'column\']=26;$x215->attributes[\'file\']=$x215->attributes[\'line\']=$x215->attributes[\'column\']=0;}throw new JSException($x215,72,26,\'<image>/02_object.js\');}$x211=$x209->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x212=$x211($global,$x205,$x209,array($_newObject,$_properties),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newObject;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x227 =& $scope->properties['arguments'];
$x227->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x227->properties[$i] = $args[$i];
$x227->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x229 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x228 = $x229;
if (!JS::toBoolean($x228, $global)) {
$x232 = $_o;
$x232 = ($x232 === JS::$undefined ? 'undefined' : (is_int($x232) || is_float($x232) ? 'number' : (is_bool($x232) ? 'boolean' : (is_string($x232) ? 'string' : (is_object($x232) && isset($x232->call) ? 'function' : 'object')))));
$x231 = !(((gettype($x232) === gettype('object') && $x232 === 'object'))|| (((is_float($x232) || is_int($x232)) && (is_float('object') || is_int('object'))) && $x232 == 'object'));
$x230 = $x231;
if (JS::toBoolean($x230, $global)) {
$x234 = $_o;
$x234 = ($x234 === JS::$undefined ? 'undefined' : (is_int($x234) || is_float($x234) ? 'number' : (is_bool($x234) ? 'boolean' : (is_string($x234) ? 'string' : (is_object($x234) && isset($x234->call) ? 'function' : 'object')))));
$x233 = !(((gettype($x234) === gettype('function') && $x234 === 'function'))|| (((is_float($x234) || is_int($x234)) && (is_float('function') || is_int('function'))) && $x234 == 'function'));
$x230 = $x233; }
$x228 = $x230; }
if (JS::toBoolean($x228, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x237 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 80, 13, '<image>/02_object.js');
$_TypeError =& $x237[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x237;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x238 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 80, 13, '<image>/02_object.js');
$_ReferenceError =& $x238[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x238;
$x239 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 13);
$x240 = $x239($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x240->class) && $x240->class === 'Error' && !isset($x240->properties['file']) && !isset($x240->properties['line']) && !isset($x240->properties['column'])) {$x240->properties['file'] = '<image>/02_object.js';$x240->properties['line'] = 80;$x240->properties['column'] = 13;$x240->attributes['file'] = $x240->attributes['line'] = $x240->attributes['column'] = 0; }
throw new JSException($x240, 80, 13, '<image>/02_object.js');
}
$x235 = clone JS::$objectTemplate;
unset($x241, $W241, $S241, $U241);
$x242 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 80, 9, '<image>/02_object.js');
$x241 =& $x242[0]; list(,$W241,$S241,$U241) = $x242;
$x236 = $x241;
$x235->prototype = $x236;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x245 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x246 = $x245($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x246->class) && $x246->class === 'Error' && !isset($x246->properties['file']) && !isset($x246->properties['line']) && !isset($x246->properties['column'])) {$x246->properties['file'] = '<image>/02_object.js';$x246->properties['line'] = 80;$x246->properties['column'] = 9;$x246->attributes['file'] = $x246->attributes['line'] = $x246->attributes['column'] = 0; }
throw new JSException($x246, 80, 9, '<image>/02_object.js');
}
$x243 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x244 = $x243($global, $x235, $_TypeError, array('Object.defineProperty(): Cannot define property on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x236 = $x244;
if (is_object($x236) && $x236 !== JS::$undefined) { $x235 = $x236; }
if (isset($x235->class) && $x235->class === 'Error' && !isset($x235->properties['file']) && !isset($x235->properties['line']) && !isset($x235->properties['column'])) {$x235->properties['file'] = '<image>/02_object.js';$x235->properties['line'] = 80;$x235->properties['column'] = 3;$x235->attributes['file'] = $x235->attributes['line'] = $x235->attributes['column'] = 0; }
throw new JSException($x235, 80, 3, '<image>/02_object.js');;
};
unset($x249, $W249, $S249, $U249);
$x250 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('get', $global), 83, 16, '<image>/02_object.js');
$x249 =& $x250[0]; list(,$W249,$S249,$U249) = $x250;
$x248 = !(((gettype($x249) === gettype(JS::$undefined) && $x249 === JS::$undefined))|| (((is_float($x249) || is_int($x249)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x249 == JS::$undefined));
$x247 = $x248;
if (JS::toBoolean($x247, $global)) {
unset($x252, $W252, $S252, $U252);
$x253 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('get', $global), 83, 55, '<image>/02_object.js');
$x252 =& $x253[0]; list(,$W252,$S252,$U252) = $x253;
$x254 = $x252;
$x254 = ($x254 === JS::$undefined ? 'undefined' : (is_int($x254) || is_float($x254) ? 'number' : (is_bool($x254) ? 'boolean' : (is_string($x254) ? 'string' : (is_object($x254) && isset($x254->call) ? 'function' : 'object')))));
$x251 = !(((gettype($x254) === gettype('function') && $x254 === 'function'))|| (((is_float($x254) || is_int($x254)) && (is_float('function') || is_int('function'))) && $x254 == 'function'));
$x247 = $x251; }
if (JS::toBoolean($x247, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x257 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 84, 13, '<image>/02_object.js');
$_TypeError =& $x257[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x257;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x258 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 84, 13, '<image>/02_object.js');
$_ReferenceError =& $x258[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x258;
$x259 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 13);
$x260 = $x259($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x260->class) && $x260->class === 'Error' && !isset($x260->properties['file']) && !isset($x260->properties['line']) && !isset($x260->properties['column'])) {$x260->properties['file'] = '<image>/02_object.js';$x260->properties['line'] = 84;$x260->properties['column'] = 13;$x260->attributes['file'] = $x260->attributes['line'] = $x260->attributes['column'] = 0; }
throw new JSException($x260, 84, 13, '<image>/02_object.js');
}
$x255 = clone JS::$objectTemplate;
unset($x261, $W261, $S261, $U261);
$x262 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 84, 9, '<image>/02_object.js');
$x261 =& $x262[0]; list(,$W261,$S261,$U261) = $x262;
$x256 = $x261;
$x255->prototype = $x256;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x265 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x266 = $x265($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x266->class) && $x266->class === 'Error' && !isset($x266->properties['file']) && !isset($x266->properties['line']) && !isset($x266->properties['column'])) {$x266->properties['file'] = '<image>/02_object.js';$x266->properties['line'] = 84;$x266->properties['column'] = 9;$x266->attributes['file'] = $x266->attributes['line'] = $x266->attributes['column'] = 0; }
throw new JSException($x266, 84, 9, '<image>/02_object.js');
}
$x263 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x264 = $x263($global, $x255, $_TypeError, array('Object.defineProperty(): Given getter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x256 = $x264;
if (is_object($x256) && $x256 !== JS::$undefined) { $x255 = $x256; }
if (isset($x255->class) && $x255->class === 'Error' && !isset($x255->properties['file']) && !isset($x255->properties['line']) && !isset($x255->properties['column'])) {$x255->properties['file'] = '<image>/02_object.js';$x255->properties['line'] = 84;$x255->properties['column'] = 3;$x255->attributes['file'] = $x255->attributes['line'] = $x255->attributes['column'] = 0; }
throw new JSException($x255, 84, 3, '<image>/02_object.js');;
};
unset($x269, $W269, $S269, $U269);
$x270 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('set', $global), 87, 16, '<image>/02_object.js');
$x269 =& $x270[0]; list(,$W269,$S269,$U269) = $x270;
$x268 = !(((gettype($x269) === gettype(JS::$undefined) && $x269 === JS::$undefined))|| (((is_float($x269) || is_int($x269)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x269 == JS::$undefined));
$x267 = $x268;
if (JS::toBoolean($x267, $global)) {
unset($x272, $W272, $S272, $U272);
$x273 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('set', $global), 87, 55, '<image>/02_object.js');
$x272 =& $x273[0]; list(,$W272,$S272,$U272) = $x273;
$x274 = $x272;
$x274 = ($x274 === JS::$undefined ? 'undefined' : (is_int($x274) || is_float($x274) ? 'number' : (is_bool($x274) ? 'boolean' : (is_string($x274) ? 'string' : (is_object($x274) && isset($x274->call) ? 'function' : 'object')))));
$x271 = !(((gettype($x274) === gettype('function') && $x274 === 'function'))|| (((is_float($x274) || is_int($x274)) && (is_float('function') || is_int('function'))) && $x274 == 'function'));
$x267 = $x271; }
if (JS::toBoolean($x267, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x277 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 88, 13, '<image>/02_object.js');
$_TypeError =& $x277[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x277;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x278 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 88, 13, '<image>/02_object.js');
$_ReferenceError =& $x278[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x278;
$x279 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 13);
$x280 = $x279($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x280->class) && $x280->class === 'Error' && !isset($x280->properties['file']) && !isset($x280->properties['line']) && !isset($x280->properties['column'])) {$x280->properties['file'] = '<image>/02_object.js';$x280->properties['line'] = 88;$x280->properties['column'] = 13;$x280->attributes['file'] = $x280->attributes['line'] = $x280->attributes['column'] = 0; }
throw new JSException($x280, 88, 13, '<image>/02_object.js');
}
$x275 = clone JS::$objectTemplate;
unset($x281, $W281, $S281, $U281);
$x282 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 88, 9, '<image>/02_object.js');
$x281 =& $x282[0]; list(,$W281,$S281,$U281) = $x282;
$x276 = $x281;
$x275->prototype = $x276;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x285 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x286 = $x285($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x286->class) && $x286->class === 'Error' && !isset($x286->properties['file']) && !isset($x286->properties['line']) && !isset($x286->properties['column'])) {$x286->properties['file'] = '<image>/02_object.js';$x286->properties['line'] = 88;$x286->properties['column'] = 9;$x286->attributes['file'] = $x286->attributes['line'] = $x286->attributes['column'] = 0; }
throw new JSException($x286, 88, 9, '<image>/02_object.js');
}
$x283 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x284 = $x283($global, $x275, $_TypeError, array('Object.defineProperty(): Given setter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x276 = $x284;
if (is_object($x276) && $x276 !== JS::$undefined) { $x275 = $x276; }
if (isset($x275->class) && $x275->class === 'Error' && !isset($x275->properties['file']) && !isset($x275->properties['line']) && !isset($x275->properties['column'])) {$x275->properties['file'] = '<image>/02_object.js';$x275->properties['line'] = 88;$x275->properties['column'] = 3;$x275->attributes['file'] = $x275->attributes['line'] = $x275->attributes['column'] = 0; }
throw new JSException($x275, 88, 3, '<image>/02_object.js');;
};
$x287 = $_attributes;
if (!JS::toBoolean($x287, $global)) {
$x288 = clone JS::$objectTemplate;
$x287 = $x288; }
if ($Uattributes) {$global->properties['attributes'] = $_attributes; $_attributes =& $global->properties['attributes']; }
$_attributes = $x287;
$x289 = JS::toString($_p, $global);
if ($Up) {$global->properties['p'] = $_p; $_p =& $global->properties['p']; }
$_p = $x289;
unset($x290, $W290, $S290, $U290);
$x291 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('value', $global), 94, 24, '<image>/02_object.js');
$x290 =& $x291[0]; list(,$W290,$S290,$U290) = $x291;
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = $x290;
unset($x292, $W292, $S292, $U292);
$x293 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('get', $global), 95, 19, '<image>/02_object.js');
$x292 =& $x293[0]; list(,$W292,$S292,$U292) = $x293;
$scope->properties['get'] = JS::$undefined; $_get =& $scope->properties['get'];
$Uget = FALSE;
$_get = $x292;
unset($x294, $W294, $S294, $U294);
$x295 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('set', $global), 96, 19, '<image>/02_object.js');
$x294 =& $x295[0]; list(,$W294,$S294,$U294) = $x295;
$scope->properties['set'] = JS::$undefined; $_set =& $scope->properties['set'];
$Uset = FALSE;
$_set = $x294;
$scope->properties['attrs'] = JS::$undefined; $_attrs =& $scope->properties['attrs'];
$Uattrs = FALSE;
$_attrs = 0;
$x297 = $_value;
$x297 = ($x297 === JS::$undefined ? 'undefined' : (is_int($x297) || is_float($x297) ? 'number' : (is_bool($x297) ? 'boolean' : (is_string($x297) ? 'string' : (is_object($x297) && isset($x297->call) ? 'function' : 'object')))));
$x296 = !(((gettype($x297) === gettype('undefined') && $x297 === 'undefined'))|| (((is_float($x297) || is_int($x297)) && (is_float('undefined') || is_int('undefined'))) && $x297 == 'undefined'));
if (JS::toBoolean($x296, $global)) {

$_o->properties[$_p] =$_value;;
};
if (JS::toBoolean($_get, $global)) {
$_o->getters[$_p] =$_get;
$x298 = JS::HAS_GETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x299 = JS::toNumber($_attrs, $global);
$x300 = JS::toNumber($x298, $global);
if (is_nan($x299)) { $x299 = 0; }
if (is_nan($x300)) { $x300 = 0; }
$x301 = $x299 | $x300;
$_attrs = $x301;;
};
if (JS::toBoolean($_set, $global)) {
$_o->setters[$_p] =$_set;
$x302 = JS::HAS_SETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x303 = JS::toNumber($_attrs, $global);
$x304 = JS::toNumber($x302, $global);
if (is_nan($x303)) { $x303 = 0; }
if (is_nan($x304)) { $x304 = 0; }
$x305 = $x303 | $x304;
$_attrs = $x305;;
};
unset($x306, $W306, $S306, $U306);
$x307 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('writable', $global), 113, 16, '<image>/02_object.js');
$x306 =& $x307[0]; list(,$W306,$S306,$U306) = $x307;
if (JS::toBoolean($x306, $global)) {
$x308 = JS::WRITABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x309 = JS::toNumber($_attrs, $global);
$x310 = JS::toNumber($x308, $global);
if (is_nan($x309)) { $x309 = 0; }
if (is_nan($x310)) { $x310 = 0; }
$x311 = $x309 | $x310;
$_attrs = $x311;;
};
unset($x312, $W312, $S312, $U312);
$x313 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('enumerable', $global), 117, 16, '<image>/02_object.js');
$x312 =& $x313[0]; list(,$W312,$S312,$U312) = $x313;
if (JS::toBoolean($x312, $global)) {
$x314 = JS::ENUMERABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x315 = JS::toNumber($_attrs, $global);
$x316 = JS::toNumber($x314, $global);
if (is_nan($x315)) { $x315 = 0; }
if (is_nan($x316)) { $x316 = 0; }
$x317 = $x315 | $x316;
$_attrs = $x317;;
};
unset($x318, $W318, $S318, $U318);
$x319 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, JS::toString('configurable', $global), 121, 16, '<image>/02_object.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
if (JS::toBoolean($x318, $global)) {
$x320 = JS::CONFIGURABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x321 = JS::toNumber($_attrs, $global);
$x322 = JS::toNumber($x320, $global);
if (is_nan($x321)) { $x321 = 0; }
if (is_nan($x322)) { $x322 = 0; }
$x323 = $x321 | $x322;
$_attrs = $x323;;
};
$_o->attributes[$_p] =$_attrs;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x227=&$scope->properties[\'arguments\'];$x227->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x227->properties[$i]=$args[$i];$x227->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'attributes\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_attributes=&$scope->properties[\'attributes\'];$Uattributes=FALSE;$global->scope[++$global->scope_sp]=$scope;$x229=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x228=$x229;if(!JS::toBoolean($x228,$global)){$x232=$_o;$x232=($x232===JS::$undefined?\'undefined\':(is_int($x232)||is_float($x232)?\'number\':(is_bool($x232)?\'boolean\':(is_string($x232)?\'string\':(is_object($x232)&&isset($x232->call)?\'function\':\'object\')))));$x231=!(((gettype($x232)===gettype(\'object\')&&$x232===\'object\'))||(((is_float($x232)||is_int($x232))&&(is_float(\'object\')||is_int(\'object\')))&&$x232==\'object\'));$x230=$x231;if(JS::toBoolean($x230,$global)){$x234=$_o;$x234=($x234===JS::$undefined?\'undefined\':(is_int($x234)||is_float($x234)?\'number\':(is_bool($x234)?\'boolean\':(is_string($x234)?\'string\':(is_object($x234)&&isset($x234->call)?\'function\':\'object\')))));$x233=!(((gettype($x234)===gettype(\'function\')&&$x234===\'function\'))||(((is_float($x234)||is_int($x234))&&(is_float(\'function\')||is_int(\'function\')))&&$x234==\'function\'));$x230=$x233;}$x228=$x230;}if(JS::toBoolean($x228,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x237=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),80,13,\'<image>/02_object.js\');$_TypeError=&$x237[0];list(,$WTypeError,$STypeError,$UTypeError)=$x237;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x238=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),80,13,\'<image>/02_object.js\');$_ReferenceError=&$x238[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x238;$x239=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,13);$x240=$x239($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x240->class)&&$x240->class===\'Error\'&&!isset($x240->properties[\'file\'])&&!isset($x240->properties[\'line\'])&&!isset($x240->properties[\'column\'])){$x240->properties[\'file\']=\'<image>/02_object.js\';$x240->properties[\'line\']=80;$x240->properties[\'column\']=13;$x240->attributes[\'file\']=$x240->attributes[\'line\']=$x240->attributes[\'column\']=0;}throw new JSException($x240,80,13,\'<image>/02_object.js\');}$x235=clone JS::$objectTemplate;unset($x241,$W241,$S241,$U241);$x242=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),80,9,\'<image>/02_object.js\');$x241=&$x242[0];list(,$W241,$S241,$U241)=$x242;$x236=$x241;$x235->prototype=$x236;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x245=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x246=$x245($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x246->class)&&$x246->class===\'Error\'&&!isset($x246->properties[\'file\'])&&!isset($x246->properties[\'line\'])&&!isset($x246->properties[\'column\'])){$x246->properties[\'file\']=\'<image>/02_object.js\';$x246->properties[\'line\']=80;$x246->properties[\'column\']=9;$x246->attributes[\'file\']=$x246->attributes[\'line\']=$x246->attributes[\'column\']=0;}throw new JSException($x246,80,9,\'<image>/02_object.js\');}$x243=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x244=$x243($global,$x235,$_TypeError,array(\'Object.defineProperty(): Cannot define property on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x236=$x244;if(is_object($x236)&&$x236!==JS::$undefined){$x235=$x236;}if(isset($x235->class)&&$x235->class===\'Error\'&&!isset($x235->properties[\'file\'])&&!isset($x235->properties[\'line\'])&&!isset($x235->properties[\'column\'])){$x235->properties[\'file\']=\'<image>/02_object.js\';$x235->properties[\'line\']=80;$x235->properties[\'column\']=3;$x235->attributes[\'file\']=$x235->attributes[\'line\']=$x235->attributes[\'column\']=0;}throw new JSException($x235,80,3,\'<image>/02_object.js\');}unset($x249,$W249,$S249,$U249);$x250=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'get\',$global),83,16,\'<image>/02_object.js\');$x249=&$x250[0];list(,$W249,$S249,$U249)=$x250;$x248=!(((gettype($x249)===gettype(JS::$undefined)&&$x249===JS::$undefined))||(((is_float($x249)||is_int($x249))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x249==JS::$undefined));$x247=$x248;if(JS::toBoolean($x247,$global)){unset($x252,$W252,$S252,$U252);$x253=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'get\',$global),83,55,\'<image>/02_object.js\');$x252=&$x253[0];list(,$W252,$S252,$U252)=$x253;$x254=$x252;$x254=($x254===JS::$undefined?\'undefined\':(is_int($x254)||is_float($x254)?\'number\':(is_bool($x254)?\'boolean\':(is_string($x254)?\'string\':(is_object($x254)&&isset($x254->call)?\'function\':\'object\')))));$x251=!(((gettype($x254)===gettype(\'function\')&&$x254===\'function\'))||(((is_float($x254)||is_int($x254))&&(is_float(\'function\')||is_int(\'function\')))&&$x254==\'function\'));$x247=$x251;}if(JS::toBoolean($x247,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x257=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),84,13,\'<image>/02_object.js\');$_TypeError=&$x257[0];list(,$WTypeError,$STypeError,$UTypeError)=$x257;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x258=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),84,13,\'<image>/02_object.js\');$_ReferenceError=&$x258[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x258;$x259=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,13);$x260=$x259($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x260->class)&&$x260->class===\'Error\'&&!isset($x260->properties[\'file\'])&&!isset($x260->properties[\'line\'])&&!isset($x260->properties[\'column\'])){$x260->properties[\'file\']=\'<image>/02_object.js\';$x260->properties[\'line\']=84;$x260->properties[\'column\']=13;$x260->attributes[\'file\']=$x260->attributes[\'line\']=$x260->attributes[\'column\']=0;}throw new JSException($x260,84,13,\'<image>/02_object.js\');}$x255=clone JS::$objectTemplate;unset($x261,$W261,$S261,$U261);$x262=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),84,9,\'<image>/02_object.js\');$x261=&$x262[0];list(,$W261,$S261,$U261)=$x262;$x256=$x261;$x255->prototype=$x256;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x265=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x266=$x265($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x266->class)&&$x266->class===\'Error\'&&!isset($x266->properties[\'file\'])&&!isset($x266->properties[\'line\'])&&!isset($x266->properties[\'column\'])){$x266->properties[\'file\']=\'<image>/02_object.js\';$x266->properties[\'line\']=84;$x266->properties[\'column\']=9;$x266->attributes[\'file\']=$x266->attributes[\'line\']=$x266->attributes[\'column\']=0;}throw new JSException($x266,84,9,\'<image>/02_object.js\');}$x263=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x264=$x263($global,$x255,$_TypeError,array(\'Object.defineProperty(): Given getter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x256=$x264;if(is_object($x256)&&$x256!==JS::$undefined){$x255=$x256;}if(isset($x255->class)&&$x255->class===\'Error\'&&!isset($x255->properties[\'file\'])&&!isset($x255->properties[\'line\'])&&!isset($x255->properties[\'column\'])){$x255->properties[\'file\']=\'<image>/02_object.js\';$x255->properties[\'line\']=84;$x255->properties[\'column\']=3;$x255->attributes[\'file\']=$x255->attributes[\'line\']=$x255->attributes[\'column\']=0;}throw new JSException($x255,84,3,\'<image>/02_object.js\');}unset($x269,$W269,$S269,$U269);$x270=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'set\',$global),87,16,\'<image>/02_object.js\');$x269=&$x270[0];list(,$W269,$S269,$U269)=$x270;$x268=!(((gettype($x269)===gettype(JS::$undefined)&&$x269===JS::$undefined))||(((is_float($x269)||is_int($x269))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x269==JS::$undefined));$x267=$x268;if(JS::toBoolean($x267,$global)){unset($x272,$W272,$S272,$U272);$x273=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'set\',$global),87,55,\'<image>/02_object.js\');$x272=&$x273[0];list(,$W272,$S272,$U272)=$x273;$x274=$x272;$x274=($x274===JS::$undefined?\'undefined\':(is_int($x274)||is_float($x274)?\'number\':(is_bool($x274)?\'boolean\':(is_string($x274)?\'string\':(is_object($x274)&&isset($x274->call)?\'function\':\'object\')))));$x271=!(((gettype($x274)===gettype(\'function\')&&$x274===\'function\'))||(((is_float($x274)||is_int($x274))&&(is_float(\'function\')||is_int(\'function\')))&&$x274==\'function\'));$x267=$x271;}if(JS::toBoolean($x267,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x277=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),88,13,\'<image>/02_object.js\');$_TypeError=&$x277[0];list(,$WTypeError,$STypeError,$UTypeError)=$x277;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x278=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),88,13,\'<image>/02_object.js\');$_ReferenceError=&$x278[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x278;$x279=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,13);$x280=$x279($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x280->class)&&$x280->class===\'Error\'&&!isset($x280->properties[\'file\'])&&!isset($x280->properties[\'line\'])&&!isset($x280->properties[\'column\'])){$x280->properties[\'file\']=\'<image>/02_object.js\';$x280->properties[\'line\']=88;$x280->properties[\'column\']=13;$x280->attributes[\'file\']=$x280->attributes[\'line\']=$x280->attributes[\'column\']=0;}throw new JSException($x280,88,13,\'<image>/02_object.js\');}$x275=clone JS::$objectTemplate;unset($x281,$W281,$S281,$U281);$x282=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),88,9,\'<image>/02_object.js\');$x281=&$x282[0];list(,$W281,$S281,$U281)=$x282;$x276=$x281;$x275->prototype=$x276;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x285=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x286=$x285($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x286->class)&&$x286->class===\'Error\'&&!isset($x286->properties[\'file\'])&&!isset($x286->properties[\'line\'])&&!isset($x286->properties[\'column\'])){$x286->properties[\'file\']=\'<image>/02_object.js\';$x286->properties[\'line\']=88;$x286->properties[\'column\']=9;$x286->attributes[\'file\']=$x286->attributes[\'line\']=$x286->attributes[\'column\']=0;}throw new JSException($x286,88,9,\'<image>/02_object.js\');}$x283=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x284=$x283($global,$x275,$_TypeError,array(\'Object.defineProperty(): Given setter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x276=$x284;if(is_object($x276)&&$x276!==JS::$undefined){$x275=$x276;}if(isset($x275->class)&&$x275->class===\'Error\'&&!isset($x275->properties[\'file\'])&&!isset($x275->properties[\'line\'])&&!isset($x275->properties[\'column\'])){$x275->properties[\'file\']=\'<image>/02_object.js\';$x275->properties[\'line\']=88;$x275->properties[\'column\']=3;$x275->attributes[\'file\']=$x275->attributes[\'line\']=$x275->attributes[\'column\']=0;}throw new JSException($x275,88,3,\'<image>/02_object.js\');}$x287=$_attributes;if(!JS::toBoolean($x287,$global)){$x288=clone JS::$objectTemplate;$x287=$x288;}if($Uattributes){$global->properties[\'attributes\']=$_attributes;$_attributes=&$global->properties[\'attributes\'];}$_attributes=$x287;$x289=JS::toString($_p,$global);if($Up){$global->properties[\'p\']=$_p;$_p=&$global->properties[\'p\'];}$_p=$x289;unset($x290,$W290,$S290,$U290);$x291=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'value\',$global),94,24,\'<image>/02_object.js\');$x290=&$x291[0];list(,$W290,$S290,$U290)=$x291;$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x290;unset($x292,$W292,$S292,$U292);$x293=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'get\',$global),95,19,\'<image>/02_object.js\');$x292=&$x293[0];list(,$W292,$S292,$U292)=$x293;$scope->properties[\'get\']=JS::$undefined;$_get=&$scope->properties[\'get\'];$Uget=FALSE;$_get=$x292;unset($x294,$W294,$S294,$U294);$x295=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'set\',$global),96,19,\'<image>/02_object.js\');$x294=&$x295[0];list(,$W294,$S294,$U294)=$x295;$scope->properties[\'set\']=JS::$undefined;$_set=&$scope->properties[\'set\'];$Uset=FALSE;$_set=$x294;$scope->properties[\'attrs\']=JS::$undefined;$_attrs=&$scope->properties[\'attrs\'];$Uattrs=FALSE;$_attrs=0;$x297=$_value;$x297=($x297===JS::$undefined?\'undefined\':(is_int($x297)||is_float($x297)?\'number\':(is_bool($x297)?\'boolean\':(is_string($x297)?\'string\':(is_object($x297)&&isset($x297->call)?\'function\':\'object\')))));$x296=!(((gettype($x297)===gettype(\'undefined\')&&$x297===\'undefined\'))||(((is_float($x297)||is_int($x297))&&(is_float(\'undefined\')||is_int(\'undefined\')))&&$x297==\'undefined\'));if(JS::toBoolean($x296,$global)){$_o->properties[$_p]=$_value;}if(JS::toBoolean($_get,$global)){$_o->getters[$_p]=$_get;$x298=JS::HAS_GETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x299=JS::toNumber($_attrs,$global);$x300=JS::toNumber($x298,$global);if(is_nan($x299)){$x299=0;}if(is_nan($x300)){$x300=0;}$x301=$x299|$x300;$_attrs=$x301;}if(JS::toBoolean($_set,$global)){$_o->setters[$_p]=$_set;$x302=JS::HAS_SETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x303=JS::toNumber($_attrs,$global);$x304=JS::toNumber($x302,$global);if(is_nan($x303)){$x303=0;}if(is_nan($x304)){$x304=0;}$x305=$x303|$x304;$_attrs=$x305;}unset($x306,$W306,$S306,$U306);$x307=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'writable\',$global),113,16,\'<image>/02_object.js\');$x306=&$x307[0];list(,$W306,$S306,$U306)=$x307;if(JS::toBoolean($x306,$global)){$x308=JS::WRITABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x309=JS::toNumber($_attrs,$global);$x310=JS::toNumber($x308,$global);if(is_nan($x309)){$x309=0;}if(is_nan($x310)){$x310=0;}$x311=$x309|$x310;$_attrs=$x311;}unset($x312,$W312,$S312,$U312);$x313=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'enumerable\',$global),117,16,\'<image>/02_object.js\');$x312=&$x313[0];list(,$W312,$S312,$U312)=$x313;if(JS::toBoolean($x312,$global)){$x314=JS::ENUMERABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x315=JS::toNumber($_attrs,$global);$x316=JS::toNumber($x314,$global);if(is_nan($x315)){$x315=0;}if(is_nan($x316)){$x316=0;}$x317=$x315|$x316;$_attrs=$x317;}unset($x318,$W318,$S318,$U318);$x319=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,JS::toString(\'configurable\',$global),121,16,\'<image>/02_object.js\');$x318=&$x319[0];list(,$W318,$S318,$U318)=$x319;if(JS::toBoolean($x318,$global)){$x320=JS::CONFIGURABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x321=JS::toNumber($_attrs,$global);$x322=JS::toNumber($x320,$global);if(is_nan($x321)){$x321=0;}if(is_nan($x322)){$x322=0;}$x323=$x321|$x322;$_attrs=$x323;}$_o->attributes[$_p]=$_attrs;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x335 =& $scope->properties['arguments'];
$x335->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x335->properties[$i] = $args[$i];
$x335->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x337 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x336 = $x337;
if (!JS::toBoolean($x336, $global)) {
$x340 = $_o;
$x340 = ($x340 === JS::$undefined ? 'undefined' : (is_int($x340) || is_float($x340) ? 'number' : (is_bool($x340) ? 'boolean' : (is_string($x340) ? 'string' : (is_object($x340) && isset($x340->call) ? 'function' : 'object')))));
$x339 = !(((gettype($x340) === gettype('object') && $x340 === 'object'))|| (((is_float($x340) || is_int($x340)) && (is_float('object') || is_int('object'))) && $x340 == 'object'));
$x338 = $x339;
if (JS::toBoolean($x338, $global)) {
$x342 = $_o;
$x342 = ($x342 === JS::$undefined ? 'undefined' : (is_int($x342) || is_float($x342) ? 'number' : (is_bool($x342) ? 'boolean' : (is_string($x342) ? 'string' : (is_object($x342) && isset($x342->call) ? 'function' : 'object')))));
$x341 = !(((gettype($x342) === gettype('function') && $x342 === 'function'))|| (((is_float($x342) || is_int($x342)) && (is_float('function') || is_int('function'))) && $x342 == 'function'));
$x338 = $x341; }
$x336 = $x338; }
if (JS::toBoolean($x336, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x345 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 132, 13, '<image>/02_object.js');
$_TypeError =& $x345[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x345;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x346 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 132, 13, '<image>/02_object.js');
$_ReferenceError =& $x346[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x346;
$x347 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 13);
$x348 = $x347($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x348->class) && $x348->class === 'Error' && !isset($x348->properties['file']) && !isset($x348->properties['line']) && !isset($x348->properties['column'])) {$x348->properties['file'] = '<image>/02_object.js';$x348->properties['line'] = 132;$x348->properties['column'] = 13;$x348->attributes['file'] = $x348->attributes['line'] = $x348->attributes['column'] = 0; }
throw new JSException($x348, 132, 13, '<image>/02_object.js');
}
$x343 = clone JS::$objectTemplate;
unset($x349, $W349, $S349, $U349);
$x350 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 132, 9, '<image>/02_object.js');
$x349 =& $x350[0]; list(,$W349,$S349,$U349) = $x350;
$x344 = $x349;
$x343->prototype = $x344;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x353 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x354 = $x353($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x354->class) && $x354->class === 'Error' && !isset($x354->properties['file']) && !isset($x354->properties['line']) && !isset($x354->properties['column'])) {$x354->properties['file'] = '<image>/02_object.js';$x354->properties['line'] = 132;$x354->properties['column'] = 9;$x354->attributes['file'] = $x354->attributes['line'] = $x354->attributes['column'] = 0; }
throw new JSException($x354, 132, 9, '<image>/02_object.js');
}
$x351 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x352 = $x351($global, $x343, $_TypeError, array('Object.defineProperties(): Cannot define properties on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x344 = $x352;
if (is_object($x344) && $x344 !== JS::$undefined) { $x343 = $x344; }
if (isset($x343->class) && $x343->class === 'Error' && !isset($x343->properties['file']) && !isset($x343->properties['line']) && !isset($x343->properties['column'])) {$x343->properties['file'] = '<image>/02_object.js';$x343->properties['line'] = 132;$x343->properties['column'] = 3;$x343->attributes['file'] = $x343->attributes['line'] = $x343->attributes['column'] = 0; }
throw new JSException($x343, 132, 3, '<image>/02_object.js');;
};
$x356 = $_properties;
$x356 = ($x356 === JS::$undefined ? 'undefined' : (is_int($x356) || is_float($x356) ? 'number' : (is_bool($x356) ? 'boolean' : (is_string($x356) ? 'string' : (is_object($x356) && isset($x356->call) ? 'function' : 'object')))));
$x355 = !(((gettype($x356) === gettype('object') && $x356 === 'object'))|| (((is_float($x356) || is_int($x356)) && (is_float('object') || is_int('object'))) && $x356 == 'object'));
if (JS::toBoolean($x355, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x359 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 136, 13, '<image>/02_object.js');
$_TypeError =& $x359[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x359;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x360 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 136, 13, '<image>/02_object.js');
$_ReferenceError =& $x360[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x360;
$x361 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 13);
$x362 = $x361($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x362->class) && $x362->class === 'Error' && !isset($x362->properties['file']) && !isset($x362->properties['line']) && !isset($x362->properties['column'])) {$x362->properties['file'] = '<image>/02_object.js';$x362->properties['line'] = 136;$x362->properties['column'] = 13;$x362->attributes['file'] = $x362->attributes['line'] = $x362->attributes['column'] = 0; }
throw new JSException($x362, 136, 13, '<image>/02_object.js');
}
$x357 = clone JS::$objectTemplate;
unset($x363, $W363, $S363, $U363);
$x364 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 136, 9, '<image>/02_object.js');
$x363 =& $x364[0]; list(,$W363,$S363,$U363) = $x364;
$x358 = $x363;
$x357->prototype = $x358;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x367 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x368 = $x367($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x368->class) && $x368->class === 'Error' && !isset($x368->properties['file']) && !isset($x368->properties['line']) && !isset($x368->properties['column'])) {$x368->properties['file'] = '<image>/02_object.js';$x368->properties['line'] = 136;$x368->properties['column'] = 9;$x368->attributes['file'] = $x368->attributes['line'] = $x368->attributes['column'] = 0; }
throw new JSException($x368, 136, 9, '<image>/02_object.js');
}
$x365 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x366 = $x365($global, $x357, $_TypeError, array('Object.defineProperties(): Given properties argument is not an object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x358 = $x366;
if (is_object($x358) && $x358 !== JS::$undefined) { $x357 = $x358; }
if (isset($x357->class) && $x357->class === 'Error' && !isset($x357->properties['file']) && !isset($x357->properties['line']) && !isset($x357->properties['column'])) {$x357->properties['file'] = '<image>/02_object.js';$x357->properties['line'] = 136;$x357->properties['column'] = 3;$x357->attributes['file'] = $x357->attributes['line'] = $x357->attributes['column'] = 0; }
throw new JSException($x357, 136, 3, '<image>/02_object.js');;
};
$scope->properties['p'] = JS::$undefined; $_p =& $scope->properties['p'];
$Up = FALSE;
$_p = JS::$undefined;
if ($_properties !== JS::$undefined && $_properties !== NULL) {
for ($x370 = array(), $x369 = JS::toObject($_properties, $global); $x369; $x369 = $x369->prototype) {
foreach ($x369->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x370[$property])) { continue; }
$x370[$property] = TRUE;
$_p = $property;

unset($_Object, $WObject, $SObject, $UObject);
$x371 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('Object', $global), 140, 3, '<image>/02_object.js');
$_Object =& $x371[0]; list(,$WObject,$SObject,$UObject) = $x371;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x372 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 140, 3, '<image>/02_object.js');
$_ReferenceError =& $x372[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x372;
$x373 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 3);
$x374 = $x373($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x374->class) && $x374->class === 'Error' && !isset($x374->properties['file']) && !isset($x374->properties['line']) && !isset($x374->properties['column'])) {$x374->properties['file'] = '<image>/02_object.js';$x374->properties['line'] = 140;$x374->properties['column'] = 3;$x374->attributes['file'] = $x374->attributes['line'] = $x374->attributes['column'] = 0; }
throw new JSException($x374, 140, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x376 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 140, 24, '<image>/02_object.js');
$_TypeError =& $x376[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x376;
$x377 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x378 = $x377($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x378->class) && $x378->class === 'Error' && !isset($x378->properties['file']) && !isset($x378->properties['line']) && !isset($x378->properties['column'])) {$x378->properties['file'] = '<image>/02_object.js';$x378->properties['line'] = 140;$x378->properties['column'] = 24;$x378->attributes['file'] = $x378->attributes['line'] = $x378->attributes['column'] = 0; }
throw new JSException($x378, 140, 24, '<image>/02_object.js');
}
$x375 = JS::toObject($_Object, $global);
unset($x379, $W379, $S379, $U379);
$x380 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x375, JS::toString('defineProperty', $global), 140, 24, '<image>/02_object.js');
$x379 =& $x380[0]; list(,$W379,$S379,$U379) = $x380;
unset($x381, $W381, $S381, $U381);
$x382 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_properties, JS::toString($_p, $global), 140, 41, '<image>/02_object.js');
$x381 =& $x382[0]; list(,$W381,$S381,$U381) = $x382;
if (!(is_object($x379) && isset($x379->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x385 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 140, 24, '<image>/02_object.js');
$_TypeError =& $x385[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x385;
$x386 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x387 = $x386($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x387->class) && $x387->class === 'Error' && !isset($x387->properties['file']) && !isset($x387->properties['line']) && !isset($x387->properties['column'])) {$x387->properties['file'] = '<image>/02_object.js';$x387->properties['line'] = 140;$x387->properties['column'] = 24;$x387->attributes['file'] = $x387->attributes['line'] = $x387->attributes['column'] = 0; }
throw new JSException($x387, 140, 24, '<image>/02_object.js');
}
$x383 = $x379->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x384 = $x383($global, $x375, $x379, array($_o, $_p, $x381), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x335=&$scope->properties[\'arguments\'];$x335->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x335->properties[$i]=$args[$i];$x335->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x337=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x336=$x337;if(!JS::toBoolean($x336,$global)){$x340=$_o;$x340=($x340===JS::$undefined?\'undefined\':(is_int($x340)||is_float($x340)?\'number\':(is_bool($x340)?\'boolean\':(is_string($x340)?\'string\':(is_object($x340)&&isset($x340->call)?\'function\':\'object\')))));$x339=!(((gettype($x340)===gettype(\'object\')&&$x340===\'object\'))||(((is_float($x340)||is_int($x340))&&(is_float(\'object\')||is_int(\'object\')))&&$x340==\'object\'));$x338=$x339;if(JS::toBoolean($x338,$global)){$x342=$_o;$x342=($x342===JS::$undefined?\'undefined\':(is_int($x342)||is_float($x342)?\'number\':(is_bool($x342)?\'boolean\':(is_string($x342)?\'string\':(is_object($x342)&&isset($x342->call)?\'function\':\'object\')))));$x341=!(((gettype($x342)===gettype(\'function\')&&$x342===\'function\'))||(((is_float($x342)||is_int($x342))&&(is_float(\'function\')||is_int(\'function\')))&&$x342==\'function\'));$x338=$x341;}$x336=$x338;}if(JS::toBoolean($x336,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x345=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),132,13,\'<image>/02_object.js\');$_TypeError=&$x345[0];list(,$WTypeError,$STypeError,$UTypeError)=$x345;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x346=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),132,13,\'<image>/02_object.js\');$_ReferenceError=&$x346[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x346;$x347=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,13);$x348=$x347($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x348->class)&&$x348->class===\'Error\'&&!isset($x348->properties[\'file\'])&&!isset($x348->properties[\'line\'])&&!isset($x348->properties[\'column\'])){$x348->properties[\'file\']=\'<image>/02_object.js\';$x348->properties[\'line\']=132;$x348->properties[\'column\']=13;$x348->attributes[\'file\']=$x348->attributes[\'line\']=$x348->attributes[\'column\']=0;}throw new JSException($x348,132,13,\'<image>/02_object.js\');}$x343=clone JS::$objectTemplate;unset($x349,$W349,$S349,$U349);$x350=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),132,9,\'<image>/02_object.js\');$x349=&$x350[0];list(,$W349,$S349,$U349)=$x350;$x344=$x349;$x343->prototype=$x344;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x353=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x354=$x353($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x354->class)&&$x354->class===\'Error\'&&!isset($x354->properties[\'file\'])&&!isset($x354->properties[\'line\'])&&!isset($x354->properties[\'column\'])){$x354->properties[\'file\']=\'<image>/02_object.js\';$x354->properties[\'line\']=132;$x354->properties[\'column\']=9;$x354->attributes[\'file\']=$x354->attributes[\'line\']=$x354->attributes[\'column\']=0;}throw new JSException($x354,132,9,\'<image>/02_object.js\');}$x351=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x352=$x351($global,$x343,$_TypeError,array(\'Object.defineProperties(): Cannot define properties on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x344=$x352;if(is_object($x344)&&$x344!==JS::$undefined){$x343=$x344;}if(isset($x343->class)&&$x343->class===\'Error\'&&!isset($x343->properties[\'file\'])&&!isset($x343->properties[\'line\'])&&!isset($x343->properties[\'column\'])){$x343->properties[\'file\']=\'<image>/02_object.js\';$x343->properties[\'line\']=132;$x343->properties[\'column\']=3;$x343->attributes[\'file\']=$x343->attributes[\'line\']=$x343->attributes[\'column\']=0;}throw new JSException($x343,132,3,\'<image>/02_object.js\');}$x356=$_properties;$x356=($x356===JS::$undefined?\'undefined\':(is_int($x356)||is_float($x356)?\'number\':(is_bool($x356)?\'boolean\':(is_string($x356)?\'string\':(is_object($x356)&&isset($x356->call)?\'function\':\'object\')))));$x355=!(((gettype($x356)===gettype(\'object\')&&$x356===\'object\'))||(((is_float($x356)||is_int($x356))&&(is_float(\'object\')||is_int(\'object\')))&&$x356==\'object\'));if(JS::toBoolean($x355,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x359=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),136,13,\'<image>/02_object.js\');$_TypeError=&$x359[0];list(,$WTypeError,$STypeError,$UTypeError)=$x359;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x360=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),136,13,\'<image>/02_object.js\');$_ReferenceError=&$x360[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x360;$x361=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,13);$x362=$x361($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x362->class)&&$x362->class===\'Error\'&&!isset($x362->properties[\'file\'])&&!isset($x362->properties[\'line\'])&&!isset($x362->properties[\'column\'])){$x362->properties[\'file\']=\'<image>/02_object.js\';$x362->properties[\'line\']=136;$x362->properties[\'column\']=13;$x362->attributes[\'file\']=$x362->attributes[\'line\']=$x362->attributes[\'column\']=0;}throw new JSException($x362,136,13,\'<image>/02_object.js\');}$x357=clone JS::$objectTemplate;unset($x363,$W363,$S363,$U363);$x364=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),136,9,\'<image>/02_object.js\');$x363=&$x364[0];list(,$W363,$S363,$U363)=$x364;$x358=$x363;$x357->prototype=$x358;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x367=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x368=$x367($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x368->class)&&$x368->class===\'Error\'&&!isset($x368->properties[\'file\'])&&!isset($x368->properties[\'line\'])&&!isset($x368->properties[\'column\'])){$x368->properties[\'file\']=\'<image>/02_object.js\';$x368->properties[\'line\']=136;$x368->properties[\'column\']=9;$x368->attributes[\'file\']=$x368->attributes[\'line\']=$x368->attributes[\'column\']=0;}throw new JSException($x368,136,9,\'<image>/02_object.js\');}$x365=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x366=$x365($global,$x357,$_TypeError,array(\'Object.defineProperties(): Given properties argument is not an object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x358=$x366;if(is_object($x358)&&$x358!==JS::$undefined){$x357=$x358;}if(isset($x357->class)&&$x357->class===\'Error\'&&!isset($x357->properties[\'file\'])&&!isset($x357->properties[\'line\'])&&!isset($x357->properties[\'column\'])){$x357->properties[\'file\']=\'<image>/02_object.js\';$x357->properties[\'line\']=136;$x357->properties[\'column\']=3;$x357->attributes[\'file\']=$x357->attributes[\'line\']=$x357->attributes[\'column\']=0;}throw new JSException($x357,136,3,\'<image>/02_object.js\');}$scope->properties[\'p\']=JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$_p=JS::$undefined;if($_properties!==JS::$undefined&&$_properties!==NULL){for($x370=array(),$x369=JS::toObject($_properties,$global);$x369;$x369=$x369->prototype){foreach($x369->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x370[$property])){continue;}$x370[$property]=TRUE;$_p=$property;unset($_Object,$WObject,$SObject,$UObject);$x371=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'Object\',$global),140,3,\'<image>/02_object.js\');$_Object=&$x371[0];list(,$WObject,$SObject,$UObject)=$x371;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x372=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),140,3,\'<image>/02_object.js\');$_ReferenceError=&$x372[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x372;$x373=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,3);$x374=$x373($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x374->class)&&$x374->class===\'Error\'&&!isset($x374->properties[\'file\'])&&!isset($x374->properties[\'line\'])&&!isset($x374->properties[\'column\'])){$x374->properties[\'file\']=\'<image>/02_object.js\';$x374->properties[\'line\']=140;$x374->properties[\'column\']=3;$x374->attributes[\'file\']=$x374->attributes[\'line\']=$x374->attributes[\'column\']=0;}throw new JSException($x374,140,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x376=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),140,24,\'<image>/02_object.js\');$_TypeError=&$x376[0];list(,$WTypeError,$STypeError,$UTypeError)=$x376;$x377=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x378=$x377($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x378->class)&&$x378->class===\'Error\'&&!isset($x378->properties[\'file\'])&&!isset($x378->properties[\'line\'])&&!isset($x378->properties[\'column\'])){$x378->properties[\'file\']=\'<image>/02_object.js\';$x378->properties[\'line\']=140;$x378->properties[\'column\']=24;$x378->attributes[\'file\']=$x378->attributes[\'line\']=$x378->attributes[\'column\']=0;}throw new JSException($x378,140,24,\'<image>/02_object.js\');}$x375=JS::toObject($_Object,$global);unset($x379,$W379,$S379,$U379);$x380=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x375,JS::toString(\'defineProperty\',$global),140,24,\'<image>/02_object.js\');$x379=&$x380[0];list(,$W379,$S379,$U379)=$x380;unset($x381,$W381,$S381,$U381);$x382=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_properties,JS::toString($_p,$global),140,41,\'<image>/02_object.js\');$x381=&$x382[0];list(,$W381,$S381,$U381)=$x382;if(!(is_object($x379)&&isset($x379->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x385=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),140,24,\'<image>/02_object.js\');$_TypeError=&$x385[0];list(,$WTypeError,$STypeError,$UTypeError)=$x385;$x386=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x387=$x386($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x387->class)&&$x387->class===\'Error\'&&!isset($x387->properties[\'file\'])&&!isset($x387->properties[\'line\'])&&!isset($x387->properties[\'column\'])){$x387->properties[\'file\']=\'<image>/02_object.js\';$x387->properties[\'line\']=140;$x387->properties[\'column\']=24;$x387->attributes[\'file\']=$x387->attributes[\'line\']=$x387->attributes[\'column\']=0;}throw new JSException($x387,140,24,\'<image>/02_object.js\');}$x383=$x379->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x384=$x383($global,$x375,$x379,array($_o,$_p,$x381),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x399 =& $scope->properties['arguments'];
$x399->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x399->properties[$i] = $args[$i];
$x399->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x401 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x400 = $x401;
if (!JS::toBoolean($x400, $global)) {
$x404 = $_o;
$x404 = ($x404 === JS::$undefined ? 'undefined' : (is_int($x404) || is_float($x404) ? 'number' : (is_bool($x404) ? 'boolean' : (is_string($x404) ? 'string' : (is_object($x404) && isset($x404->call) ? 'function' : 'object')))));
$x403 = !(((gettype($x404) === gettype('object') && $x404 === 'object'))|| (((is_float($x404) || is_int($x404)) && (is_float('object') || is_int('object'))) && $x404 == 'object'));
$x402 = $x403;
if (JS::toBoolean($x402, $global)) {
$x406 = $_o;
$x406 = ($x406 === JS::$undefined ? 'undefined' : (is_int($x406) || is_float($x406) ? 'number' : (is_bool($x406) ? 'boolean' : (is_string($x406) ? 'string' : (is_object($x406) && isset($x406->call) ? 'function' : 'object')))));
$x405 = !(((gettype($x406) === gettype('function') && $x406 === 'function'))|| (((is_float($x406) || is_int($x406)) && (is_float('function') || is_int('function'))) && $x406 == 'function'));
$x402 = $x405; }
$x400 = $x402; }
if (JS::toBoolean($x400, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x409 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 148, 13, '<image>/02_object.js');
$_TypeError =& $x409[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x409;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x410 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 148, 13, '<image>/02_object.js');
$_ReferenceError =& $x410[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x410;
$x411 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 13);
$x412 = $x411($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x412->class) && $x412->class === 'Error' && !isset($x412->properties['file']) && !isset($x412->properties['line']) && !isset($x412->properties['column'])) {$x412->properties['file'] = '<image>/02_object.js';$x412->properties['line'] = 148;$x412->properties['column'] = 13;$x412->attributes['file'] = $x412->attributes['line'] = $x412->attributes['column'] = 0; }
throw new JSException($x412, 148, 13, '<image>/02_object.js');
}
$x407 = clone JS::$objectTemplate;
unset($x413, $W413, $S413, $U413);
$x414 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 148, 9, '<image>/02_object.js');
$x413 =& $x414[0]; list(,$W413,$S413,$U413) = $x414;
$x408 = $x413;
$x407->prototype = $x408;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x417 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x418 = $x417($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x418->class) && $x418->class === 'Error' && !isset($x418->properties['file']) && !isset($x418->properties['line']) && !isset($x418->properties['column'])) {$x418->properties['file'] = '<image>/02_object.js';$x418->properties['line'] = 148;$x418->properties['column'] = 9;$x418->attributes['file'] = $x418->attributes['line'] = $x418->attributes['column'] = 0; }
throw new JSException($x418, 148, 9, '<image>/02_object.js');
}
$x415 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x416 = $x415($global, $x407, $_TypeError, array('Object.seal(): Cannot seal non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x408 = $x416;
if (is_object($x408) && $x408 !== JS::$undefined) { $x407 = $x408; }
if (isset($x407->class) && $x407->class === 'Error' && !isset($x407->properties['file']) && !isset($x407->properties['line']) && !isset($x407->properties['column'])) {$x407->properties['file'] = '<image>/02_object.js';$x407->properties['line'] = 148;$x407->properties['column'] = 3;$x407->attributes['file'] = $x407->attributes['line'] = $x407->attributes['column'] = 0; }
throw new JSException($x407, 148, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x399=&$scope->properties[\'arguments\'];$x399->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x399->properties[$i]=$args[$i];$x399->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x401=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x400=$x401;if(!JS::toBoolean($x400,$global)){$x404=$_o;$x404=($x404===JS::$undefined?\'undefined\':(is_int($x404)||is_float($x404)?\'number\':(is_bool($x404)?\'boolean\':(is_string($x404)?\'string\':(is_object($x404)&&isset($x404->call)?\'function\':\'object\')))));$x403=!(((gettype($x404)===gettype(\'object\')&&$x404===\'object\'))||(((is_float($x404)||is_int($x404))&&(is_float(\'object\')||is_int(\'object\')))&&$x404==\'object\'));$x402=$x403;if(JS::toBoolean($x402,$global)){$x406=$_o;$x406=($x406===JS::$undefined?\'undefined\':(is_int($x406)||is_float($x406)?\'number\':(is_bool($x406)?\'boolean\':(is_string($x406)?\'string\':(is_object($x406)&&isset($x406->call)?\'function\':\'object\')))));$x405=!(((gettype($x406)===gettype(\'function\')&&$x406===\'function\'))||(((is_float($x406)||is_int($x406))&&(is_float(\'function\')||is_int(\'function\')))&&$x406==\'function\'));$x402=$x405;}$x400=$x402;}if(JS::toBoolean($x400,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x409=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),148,13,\'<image>/02_object.js\');$_TypeError=&$x409[0];list(,$WTypeError,$STypeError,$UTypeError)=$x409;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x410=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),148,13,\'<image>/02_object.js\');$_ReferenceError=&$x410[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x410;$x411=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,13);$x412=$x411($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x412->class)&&$x412->class===\'Error\'&&!isset($x412->properties[\'file\'])&&!isset($x412->properties[\'line\'])&&!isset($x412->properties[\'column\'])){$x412->properties[\'file\']=\'<image>/02_object.js\';$x412->properties[\'line\']=148;$x412->properties[\'column\']=13;$x412->attributes[\'file\']=$x412->attributes[\'line\']=$x412->attributes[\'column\']=0;}throw new JSException($x412,148,13,\'<image>/02_object.js\');}$x407=clone JS::$objectTemplate;unset($x413,$W413,$S413,$U413);$x414=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),148,9,\'<image>/02_object.js\');$x413=&$x414[0];list(,$W413,$S413,$U413)=$x414;$x408=$x413;$x407->prototype=$x408;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x417=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x418=$x417($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x418->class)&&$x418->class===\'Error\'&&!isset($x418->properties[\'file\'])&&!isset($x418->properties[\'line\'])&&!isset($x418->properties[\'column\'])){$x418->properties[\'file\']=\'<image>/02_object.js\';$x418->properties[\'line\']=148;$x418->properties[\'column\']=9;$x418->attributes[\'file\']=$x418->attributes[\'line\']=$x418->attributes[\'column\']=0;}throw new JSException($x418,148,9,\'<image>/02_object.js\');}$x415=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x416=$x415($global,$x407,$_TypeError,array(\'Object.seal(): Cannot seal non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x408=$x416;if(is_object($x408)&&$x408!==JS::$undefined){$x407=$x408;}if(isset($x407->class)&&$x407->class===\'Error\'&&!isset($x407->properties[\'file\'])&&!isset($x407->properties[\'line\'])&&!isset($x407->properties[\'column\'])){$x407->properties[\'file\']=\'<image>/02_object.js\';$x407->properties[\'line\']=148;$x407->properties[\'column\']=3;$x407->attributes[\'file\']=$x407->attributes[\'line\']=$x407->attributes[\'column\']=0;}throw new JSException($x407,148,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x430 =& $scope->properties['arguments'];
$x430->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x430->properties[$i] = $args[$i];
$x430->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x432 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x431 = $x432;
if (!JS::toBoolean($x431, $global)) {
$x435 = $_o;
$x435 = ($x435 === JS::$undefined ? 'undefined' : (is_int($x435) || is_float($x435) ? 'number' : (is_bool($x435) ? 'boolean' : (is_string($x435) ? 'string' : (is_object($x435) && isset($x435->call) ? 'function' : 'object')))));
$x434 = !(((gettype($x435) === gettype('object') && $x435 === 'object'))|| (((is_float($x435) || is_int($x435)) && (is_float('object') || is_int('object'))) && $x435 == 'object'));
$x433 = $x434;
if (JS::toBoolean($x433, $global)) {
$x437 = $_o;
$x437 = ($x437 === JS::$undefined ? 'undefined' : (is_int($x437) || is_float($x437) ? 'number' : (is_bool($x437) ? 'boolean' : (is_string($x437) ? 'string' : (is_object($x437) && isset($x437->call) ? 'function' : 'object')))));
$x436 = !(((gettype($x437) === gettype('function') && $x437 === 'function'))|| (((is_float($x437) || is_int($x437)) && (is_float('function') || is_int('function'))) && $x437 == 'function'));
$x433 = $x436; }
$x431 = $x433; }
if (JS::toBoolean($x431, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x440 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 164, 13, '<image>/02_object.js');
$_TypeError =& $x440[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x440;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x441 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 164, 13, '<image>/02_object.js');
$_ReferenceError =& $x441[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x441;
$x442 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 13);
$x443 = $x442($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x443->class) && $x443->class === 'Error' && !isset($x443->properties['file']) && !isset($x443->properties['line']) && !isset($x443->properties['column'])) {$x443->properties['file'] = '<image>/02_object.js';$x443->properties['line'] = 164;$x443->properties['column'] = 13;$x443->attributes['file'] = $x443->attributes['line'] = $x443->attributes['column'] = 0; }
throw new JSException($x443, 164, 13, '<image>/02_object.js');
}
$x438 = clone JS::$objectTemplate;
unset($x444, $W444, $S444, $U444);
$x445 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 164, 9, '<image>/02_object.js');
$x444 =& $x445[0]; list(,$W444,$S444,$U444) = $x445;
$x439 = $x444;
$x438->prototype = $x439;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x448 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x449 = $x448($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x449->class) && $x449->class === 'Error' && !isset($x449->properties['file']) && !isset($x449->properties['line']) && !isset($x449->properties['column'])) {$x449->properties['file'] = '<image>/02_object.js';$x449->properties['line'] = 164;$x449->properties['column'] = 9;$x449->attributes['file'] = $x449->attributes['line'] = $x449->attributes['column'] = 0; }
throw new JSException($x449, 164, 9, '<image>/02_object.js');
}
$x446 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x447 = $x446($global, $x438, $_TypeError, array('Object.freeze(): Cannot freeze non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x439 = $x447;
if (is_object($x439) && $x439 !== JS::$undefined) { $x438 = $x439; }
if (isset($x438->class) && $x438->class === 'Error' && !isset($x438->properties['file']) && !isset($x438->properties['line']) && !isset($x438->properties['column'])) {$x438->properties['file'] = '<image>/02_object.js';$x438->properties['line'] = 164;$x438->properties['column'] = 3;$x438->attributes['file'] = $x438->attributes['line'] = $x438->attributes['column'] = 0; }
throw new JSException($x438, 164, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::WRITABLE;$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x430=&$scope->properties[\'arguments\'];$x430->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x430->properties[$i]=$args[$i];$x430->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x432=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x431=$x432;if(!JS::toBoolean($x431,$global)){$x435=$_o;$x435=($x435===JS::$undefined?\'undefined\':(is_int($x435)||is_float($x435)?\'number\':(is_bool($x435)?\'boolean\':(is_string($x435)?\'string\':(is_object($x435)&&isset($x435->call)?\'function\':\'object\')))));$x434=!(((gettype($x435)===gettype(\'object\')&&$x435===\'object\'))||(((is_float($x435)||is_int($x435))&&(is_float(\'object\')||is_int(\'object\')))&&$x435==\'object\'));$x433=$x434;if(JS::toBoolean($x433,$global)){$x437=$_o;$x437=($x437===JS::$undefined?\'undefined\':(is_int($x437)||is_float($x437)?\'number\':(is_bool($x437)?\'boolean\':(is_string($x437)?\'string\':(is_object($x437)&&isset($x437->call)?\'function\':\'object\')))));$x436=!(((gettype($x437)===gettype(\'function\')&&$x437===\'function\'))||(((is_float($x437)||is_int($x437))&&(is_float(\'function\')||is_int(\'function\')))&&$x437==\'function\'));$x433=$x436;}$x431=$x433;}if(JS::toBoolean($x431,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x440=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),164,13,\'<image>/02_object.js\');$_TypeError=&$x440[0];list(,$WTypeError,$STypeError,$UTypeError)=$x440;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x441=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),164,13,\'<image>/02_object.js\');$_ReferenceError=&$x441[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x441;$x442=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,13);$x443=$x442($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x443->class)&&$x443->class===\'Error\'&&!isset($x443->properties[\'file\'])&&!isset($x443->properties[\'line\'])&&!isset($x443->properties[\'column\'])){$x443->properties[\'file\']=\'<image>/02_object.js\';$x443->properties[\'line\']=164;$x443->properties[\'column\']=13;$x443->attributes[\'file\']=$x443->attributes[\'line\']=$x443->attributes[\'column\']=0;}throw new JSException($x443,164,13,\'<image>/02_object.js\');}$x438=clone JS::$objectTemplate;unset($x444,$W444,$S444,$U444);$x445=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),164,9,\'<image>/02_object.js\');$x444=&$x445[0];list(,$W444,$S444,$U444)=$x445;$x439=$x444;$x438->prototype=$x439;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x448=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x449=$x448($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x449->class)&&$x449->class===\'Error\'&&!isset($x449->properties[\'file\'])&&!isset($x449->properties[\'line\'])&&!isset($x449->properties[\'column\'])){$x449->properties[\'file\']=\'<image>/02_object.js\';$x449->properties[\'line\']=164;$x449->properties[\'column\']=9;$x449->attributes[\'file\']=$x449->attributes[\'line\']=$x449->attributes[\'column\']=0;}throw new JSException($x449,164,9,\'<image>/02_object.js\');}$x446=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x447=$x446($global,$x438,$_TypeError,array(\'Object.freeze(): Cannot freeze non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x439=$x447;if(is_object($x439)&&$x439!==JS::$undefined){$x438=$x439;}if(isset($x438->class)&&$x438->class===\'Error\'&&!isset($x438->properties[\'file\'])&&!isset($x438->properties[\'line\'])&&!isset($x438->properties[\'column\'])){$x438->properties[\'file\']=\'<image>/02_object.js\';$x438->properties[\'line\']=164;$x438->properties[\'column\']=3;$x438->attributes[\'file\']=$x438->attributes[\'line\']=$x438->attributes[\'column\']=0;}throw new JSException($x438,164,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::WRITABLE;$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x461 =& $scope->properties['arguments'];
$x461->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x461->properties[$i] = $args[$i];
$x461->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x463 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x462 = $x463;
if (!JS::toBoolean($x462, $global)) {
$x466 = $_o;
$x466 = ($x466 === JS::$undefined ? 'undefined' : (is_int($x466) || is_float($x466) ? 'number' : (is_bool($x466) ? 'boolean' : (is_string($x466) ? 'string' : (is_object($x466) && isset($x466->call) ? 'function' : 'object')))));
$x465 = !(((gettype($x466) === gettype('object') && $x466 === 'object'))|| (((is_float($x466) || is_int($x466)) && (is_float('object') || is_int('object'))) && $x466 == 'object'));
$x464 = $x465;
if (JS::toBoolean($x464, $global)) {
$x468 = $_o;
$x468 = ($x468 === JS::$undefined ? 'undefined' : (is_int($x468) || is_float($x468) ? 'number' : (is_bool($x468) ? 'boolean' : (is_string($x468) ? 'string' : (is_object($x468) && isset($x468->call) ? 'function' : 'object')))));
$x467 = !(((gettype($x468) === gettype('function') && $x468 === 'function'))|| (((is_float($x468) || is_int($x468)) && (is_float('function') || is_int('function'))) && $x468 == 'function'));
$x464 = $x467; }
$x462 = $x464; }
if (JS::toBoolean($x462, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x471 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 181, 13, '<image>/02_object.js');
$_TypeError =& $x471[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x471;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x472 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 181, 13, '<image>/02_object.js');
$_ReferenceError =& $x472[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x472;
$x473 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 13);
$x474 = $x473($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x474->class) && $x474->class === 'Error' && !isset($x474->properties['file']) && !isset($x474->properties['line']) && !isset($x474->properties['column'])) {$x474->properties['file'] = '<image>/02_object.js';$x474->properties['line'] = 181;$x474->properties['column'] = 13;$x474->attributes['file'] = $x474->attributes['line'] = $x474->attributes['column'] = 0; }
throw new JSException($x474, 181, 13, '<image>/02_object.js');
}
$x469 = clone JS::$objectTemplate;
unset($x475, $W475, $S475, $U475);
$x476 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 181, 9, '<image>/02_object.js');
$x475 =& $x476[0]; list(,$W475,$S475,$U475) = $x476;
$x470 = $x475;
$x469->prototype = $x470;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x479 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x480 = $x479($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x480->class) && $x480->class === 'Error' && !isset($x480->properties['file']) && !isset($x480->properties['line']) && !isset($x480->properties['column'])) {$x480->properties['file'] = '<image>/02_object.js';$x480->properties['line'] = 181;$x480->properties['column'] = 9;$x480->attributes['file'] = $x480->attributes['line'] = $x480->attributes['column'] = 0; }
throw new JSException($x480, 181, 9, '<image>/02_object.js');
}
$x477 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x478 = $x477($global, $x469, $_TypeError, array('Object.preventExtensions(): Cannot prevent extensions on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x470 = $x478;
if (is_object($x470) && $x470 !== JS::$undefined) { $x469 = $x470; }
if (isset($x469->class) && $x469->class === 'Error' && !isset($x469->properties['file']) && !isset($x469->properties['line']) && !isset($x469->properties['column'])) {$x469->properties['file'] = '<image>/02_object.js';$x469->properties['line'] = 181;$x469->properties['column'] = 3;$x469->attributes['file'] = $x469->attributes['line'] = $x469->attributes['column'] = 0; }
throw new JSException($x469, 181, 3, '<image>/02_object.js');;
};
$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x461=&$scope->properties[\'arguments\'];$x461->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x461->properties[$i]=$args[$i];$x461->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x463=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x462=$x463;if(!JS::toBoolean($x462,$global)){$x466=$_o;$x466=($x466===JS::$undefined?\'undefined\':(is_int($x466)||is_float($x466)?\'number\':(is_bool($x466)?\'boolean\':(is_string($x466)?\'string\':(is_object($x466)&&isset($x466->call)?\'function\':\'object\')))));$x465=!(((gettype($x466)===gettype(\'object\')&&$x466===\'object\'))||(((is_float($x466)||is_int($x466))&&(is_float(\'object\')||is_int(\'object\')))&&$x466==\'object\'));$x464=$x465;if(JS::toBoolean($x464,$global)){$x468=$_o;$x468=($x468===JS::$undefined?\'undefined\':(is_int($x468)||is_float($x468)?\'number\':(is_bool($x468)?\'boolean\':(is_string($x468)?\'string\':(is_object($x468)&&isset($x468->call)?\'function\':\'object\')))));$x467=!(((gettype($x468)===gettype(\'function\')&&$x468===\'function\'))||(((is_float($x468)||is_int($x468))&&(is_float(\'function\')||is_int(\'function\')))&&$x468==\'function\'));$x464=$x467;}$x462=$x464;}if(JS::toBoolean($x462,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x471=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),181,13,\'<image>/02_object.js\');$_TypeError=&$x471[0];list(,$WTypeError,$STypeError,$UTypeError)=$x471;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x472=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),181,13,\'<image>/02_object.js\');$_ReferenceError=&$x472[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x472;$x473=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,13);$x474=$x473($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x474->class)&&$x474->class===\'Error\'&&!isset($x474->properties[\'file\'])&&!isset($x474->properties[\'line\'])&&!isset($x474->properties[\'column\'])){$x474->properties[\'file\']=\'<image>/02_object.js\';$x474->properties[\'line\']=181;$x474->properties[\'column\']=13;$x474->attributes[\'file\']=$x474->attributes[\'line\']=$x474->attributes[\'column\']=0;}throw new JSException($x474,181,13,\'<image>/02_object.js\');}$x469=clone JS::$objectTemplate;unset($x475,$W475,$S475,$U475);$x476=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),181,9,\'<image>/02_object.js\');$x475=&$x476[0];list(,$W475,$S475,$U475)=$x476;$x470=$x475;$x469->prototype=$x470;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x479=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x480=$x479($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x480->class)&&$x480->class===\'Error\'&&!isset($x480->properties[\'file\'])&&!isset($x480->properties[\'line\'])&&!isset($x480->properties[\'column\'])){$x480->properties[\'file\']=\'<image>/02_object.js\';$x480->properties[\'line\']=181;$x480->properties[\'column\']=9;$x480->attributes[\'file\']=$x480->attributes[\'line\']=$x480->attributes[\'column\']=0;}throw new JSException($x480,181,9,\'<image>/02_object.js\');}$x477=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x478=$x477($global,$x469,$_TypeError,array(\'Object.preventExtensions(): Cannot prevent extensions on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x470=$x478;if(is_object($x470)&&$x470!==JS::$undefined){$x469=$x470;}if(isset($x469->class)&&$x469->class===\'Error\'&&!isset($x469->properties[\'file\'])&&!isset($x469->properties[\'line\'])&&!isset($x469->properties[\'column\'])){$x469->properties[\'file\']=\'<image>/02_object.js\';$x469->properties[\'line\']=181;$x469->properties[\'column\']=3;$x469->attributes[\'file\']=$x469->attributes[\'line\']=$x469->attributes[\'column\']=0;}throw new JSException($x469,181,3,\'<image>/02_object.js\');}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x492 =& $scope->properties['arguments'];
$x492->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x492->properties[$i] = $args[$i];
$x492->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x494 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x493 = $x494;
if (!JS::toBoolean($x493, $global)) {
$x497 = $_o;
$x497 = ($x497 === JS::$undefined ? 'undefined' : (is_int($x497) || is_float($x497) ? 'number' : (is_bool($x497) ? 'boolean' : (is_string($x497) ? 'string' : (is_object($x497) && isset($x497->call) ? 'function' : 'object')))));
$x496 = !(((gettype($x497) === gettype('object') && $x497 === 'object'))|| (((is_float($x497) || is_int($x497)) && (is_float('object') || is_int('object'))) && $x497 == 'object'));
$x495 = $x496;
if (JS::toBoolean($x495, $global)) {
$x499 = $_o;
$x499 = ($x499 === JS::$undefined ? 'undefined' : (is_int($x499) || is_float($x499) ? 'number' : (is_bool($x499) ? 'boolean' : (is_string($x499) ? 'string' : (is_object($x499) && isset($x499->call) ? 'function' : 'object')))));
$x498 = !(((gettype($x499) === gettype('function') && $x499 === 'function'))|| (((is_float($x499) || is_int($x499)) && (is_float('function') || is_int('function'))) && $x499 == 'function'));
$x495 = $x498; }
$x493 = $x495; }
if (JS::toBoolean($x493, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x502 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 191, 13, '<image>/02_object.js');
$_TypeError =& $x502[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x502;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x503 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 191, 13, '<image>/02_object.js');
$_ReferenceError =& $x503[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x503;
$x504 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 13);
$x505 = $x504($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x505->class) && $x505->class === 'Error' && !isset($x505->properties['file']) && !isset($x505->properties['line']) && !isset($x505->properties['column'])) {$x505->properties['file'] = '<image>/02_object.js';$x505->properties['line'] = 191;$x505->properties['column'] = 13;$x505->attributes['file'] = $x505->attributes['line'] = $x505->attributes['column'] = 0; }
throw new JSException($x505, 191, 13, '<image>/02_object.js');
}
$x500 = clone JS::$objectTemplate;
unset($x506, $W506, $S506, $U506);
$x507 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 191, 9, '<image>/02_object.js');
$x506 =& $x507[0]; list(,$W506,$S506,$U506) = $x507;
$x501 = $x506;
$x500->prototype = $x501;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x510 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x511 = $x510($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x511->class) && $x511->class === 'Error' && !isset($x511->properties['file']) && !isset($x511->properties['line']) && !isset($x511->properties['column'])) {$x511->properties['file'] = '<image>/02_object.js';$x511->properties['line'] = 191;$x511->properties['column'] = 9;$x511->attributes['file'] = $x511->attributes['line'] = $x511->attributes['column'] = 0; }
throw new JSException($x511, 191, 9, '<image>/02_object.js');
}
$x508 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x509 = $x508($global, $x500, $_TypeError, array('Object.isSealed(): Cannot return if sealed, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x501 = $x509;
if (is_object($x501) && $x501 !== JS::$undefined) { $x500 = $x501; }
if (isset($x500->class) && $x500->class === 'Error' && !isset($x500->properties['file']) && !isset($x500->properties['line']) && !isset($x500->properties['column'])) {$x500->properties['file'] = '<image>/02_object.js';$x500->properties['line'] = 191;$x500->properties['column'] = 3;$x500->attributes['file'] = $x500->attributes['line'] = $x500->attributes['column'] = 0; }
throw new JSException($x500, 191, 3, '<image>/02_object.js');;
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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x492=&$scope->properties[\'arguments\'];$x492->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x492->properties[$i]=$args[$i];$x492->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x494=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x493=$x494;if(!JS::toBoolean($x493,$global)){$x497=$_o;$x497=($x497===JS::$undefined?\'undefined\':(is_int($x497)||is_float($x497)?\'number\':(is_bool($x497)?\'boolean\':(is_string($x497)?\'string\':(is_object($x497)&&isset($x497->call)?\'function\':\'object\')))));$x496=!(((gettype($x497)===gettype(\'object\')&&$x497===\'object\'))||(((is_float($x497)||is_int($x497))&&(is_float(\'object\')||is_int(\'object\')))&&$x497==\'object\'));$x495=$x496;if(JS::toBoolean($x495,$global)){$x499=$_o;$x499=($x499===JS::$undefined?\'undefined\':(is_int($x499)||is_float($x499)?\'number\':(is_bool($x499)?\'boolean\':(is_string($x499)?\'string\':(is_object($x499)&&isset($x499->call)?\'function\':\'object\')))));$x498=!(((gettype($x499)===gettype(\'function\')&&$x499===\'function\'))||(((is_float($x499)||is_int($x499))&&(is_float(\'function\')||is_int(\'function\')))&&$x499==\'function\'));$x495=$x498;}$x493=$x495;}if(JS::toBoolean($x493,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x502=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),191,13,\'<image>/02_object.js\');$_TypeError=&$x502[0];list(,$WTypeError,$STypeError,$UTypeError)=$x502;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x503=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),191,13,\'<image>/02_object.js\');$_ReferenceError=&$x503[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x503;$x504=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,13);$x505=$x504($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x505->class)&&$x505->class===\'Error\'&&!isset($x505->properties[\'file\'])&&!isset($x505->properties[\'line\'])&&!isset($x505->properties[\'column\'])){$x505->properties[\'file\']=\'<image>/02_object.js\';$x505->properties[\'line\']=191;$x505->properties[\'column\']=13;$x505->attributes[\'file\']=$x505->attributes[\'line\']=$x505->attributes[\'column\']=0;}throw new JSException($x505,191,13,\'<image>/02_object.js\');}$x500=clone JS::$objectTemplate;unset($x506,$W506,$S506,$U506);$x507=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),191,9,\'<image>/02_object.js\');$x506=&$x507[0];list(,$W506,$S506,$U506)=$x507;$x501=$x506;$x500->prototype=$x501;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x510=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x511=$x510($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x511->class)&&$x511->class===\'Error\'&&!isset($x511->properties[\'file\'])&&!isset($x511->properties[\'line\'])&&!isset($x511->properties[\'column\'])){$x511->properties[\'file\']=\'<image>/02_object.js\';$x511->properties[\'line\']=191;$x511->properties[\'column\']=9;$x511->attributes[\'file\']=$x511->attributes[\'line\']=$x511->attributes[\'column\']=0;}throw new JSException($x511,191,9,\'<image>/02_object.js\');}$x508=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x509=$x508($global,$x500,$_TypeError,array(\'Object.isSealed(): Cannot return if sealed, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x501=$x509;if(is_object($x501)&&$x501!==JS::$undefined){$x500=$x501;}if(isset($x500->class)&&$x500->class===\'Error\'&&!isset($x500->properties[\'file\'])&&!isset($x500->properties[\'line\'])&&!isset($x500->properties[\'column\'])){$x500->properties[\'file\']=\'<image>/02_object.js\';$x500->properties[\'line\']=191;$x500->properties[\'column\']=3;$x500->attributes[\'file\']=$x500->attributes[\'line\']=$x500->attributes[\'column\']=0;}throw new JSException($x500,191,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&JS::CONFIGURABLE){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x523 =& $scope->properties['arguments'];
$x523->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x523->properties[$i] = $args[$i];
$x523->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x525 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x524 = $x525;
if (!JS::toBoolean($x524, $global)) {
$x528 = $_o;
$x528 = ($x528 === JS::$undefined ? 'undefined' : (is_int($x528) || is_float($x528) ? 'number' : (is_bool($x528) ? 'boolean' : (is_string($x528) ? 'string' : (is_object($x528) && isset($x528->call) ? 'function' : 'object')))));
$x527 = !(((gettype($x528) === gettype('object') && $x528 === 'object'))|| (((is_float($x528) || is_int($x528)) && (is_float('object') || is_int('object'))) && $x528 == 'object'));
$x526 = $x527;
if (JS::toBoolean($x526, $global)) {
$x530 = $_o;
$x530 = ($x530 === JS::$undefined ? 'undefined' : (is_int($x530) || is_float($x530) ? 'number' : (is_bool($x530) ? 'boolean' : (is_string($x530) ? 'string' : (is_object($x530) && isset($x530->call) ? 'function' : 'object')))));
$x529 = !(((gettype($x530) === gettype('function') && $x530 === 'function'))|| (((is_float($x530) || is_int($x530)) && (is_float('function') || is_int('function'))) && $x530 == 'function'));
$x526 = $x529; }
$x524 = $x526; }
if (JS::toBoolean($x524, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x533 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 207, 13, '<image>/02_object.js');
$_TypeError =& $x533[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x533;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x534 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 207, 13, '<image>/02_object.js');
$_ReferenceError =& $x534[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x534;
$x535 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 13);
$x536 = $x535($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x536->class) && $x536->class === 'Error' && !isset($x536->properties['file']) && !isset($x536->properties['line']) && !isset($x536->properties['column'])) {$x536->properties['file'] = '<image>/02_object.js';$x536->properties['line'] = 207;$x536->properties['column'] = 13;$x536->attributes['file'] = $x536->attributes['line'] = $x536->attributes['column'] = 0; }
throw new JSException($x536, 207, 13, '<image>/02_object.js');
}
$x531 = clone JS::$objectTemplate;
unset($x537, $W537, $S537, $U537);
$x538 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 207, 9, '<image>/02_object.js');
$x537 =& $x538[0]; list(,$W537,$S537,$U537) = $x538;
$x532 = $x537;
$x531->prototype = $x532;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x541 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x542 = $x541($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x542->class) && $x542->class === 'Error' && !isset($x542->properties['file']) && !isset($x542->properties['line']) && !isset($x542->properties['column'])) {$x542->properties['file'] = '<image>/02_object.js';$x542->properties['line'] = 207;$x542->properties['column'] = 9;$x542->attributes['file'] = $x542->attributes['line'] = $x542->attributes['column'] = 0; }
throw new JSException($x542, 207, 9, '<image>/02_object.js');
}
$x539 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x540 = $x539($global, $x531, $_TypeError, array('Object.isFrozen(): Cannot return if frozen, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x532 = $x540;
if (is_object($x532) && $x532 !== JS::$undefined) { $x531 = $x532; }
if (isset($x531->class) && $x531->class === 'Error' && !isset($x531->properties['file']) && !isset($x531->properties['line']) && !isset($x531->properties['column'])) {$x531->properties['file'] = '<image>/02_object.js';$x531->properties['line'] = 207;$x531->properties['column'] = 3;$x531->attributes['file'] = $x531->attributes['line'] = $x531->attributes['column'] = 0; }
throw new JSException($x531, 207, 3, '<image>/02_object.js');;
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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x523=&$scope->properties[\'arguments\'];$x523->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x523->properties[$i]=$args[$i];$x523->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x525=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x524=$x525;if(!JS::toBoolean($x524,$global)){$x528=$_o;$x528=($x528===JS::$undefined?\'undefined\':(is_int($x528)||is_float($x528)?\'number\':(is_bool($x528)?\'boolean\':(is_string($x528)?\'string\':(is_object($x528)&&isset($x528->call)?\'function\':\'object\')))));$x527=!(((gettype($x528)===gettype(\'object\')&&$x528===\'object\'))||(((is_float($x528)||is_int($x528))&&(is_float(\'object\')||is_int(\'object\')))&&$x528==\'object\'));$x526=$x527;if(JS::toBoolean($x526,$global)){$x530=$_o;$x530=($x530===JS::$undefined?\'undefined\':(is_int($x530)||is_float($x530)?\'number\':(is_bool($x530)?\'boolean\':(is_string($x530)?\'string\':(is_object($x530)&&isset($x530->call)?\'function\':\'object\')))));$x529=!(((gettype($x530)===gettype(\'function\')&&$x530===\'function\'))||(((is_float($x530)||is_int($x530))&&(is_float(\'function\')||is_int(\'function\')))&&$x530==\'function\'));$x526=$x529;}$x524=$x526;}if(JS::toBoolean($x524,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x533=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),207,13,\'<image>/02_object.js\');$_TypeError=&$x533[0];list(,$WTypeError,$STypeError,$UTypeError)=$x533;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x534=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),207,13,\'<image>/02_object.js\');$_ReferenceError=&$x534[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x534;$x535=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,13);$x536=$x535($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x536->class)&&$x536->class===\'Error\'&&!isset($x536->properties[\'file\'])&&!isset($x536->properties[\'line\'])&&!isset($x536->properties[\'column\'])){$x536->properties[\'file\']=\'<image>/02_object.js\';$x536->properties[\'line\']=207;$x536->properties[\'column\']=13;$x536->attributes[\'file\']=$x536->attributes[\'line\']=$x536->attributes[\'column\']=0;}throw new JSException($x536,207,13,\'<image>/02_object.js\');}$x531=clone JS::$objectTemplate;unset($x537,$W537,$S537,$U537);$x538=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),207,9,\'<image>/02_object.js\');$x537=&$x538[0];list(,$W537,$S537,$U537)=$x538;$x532=$x537;$x531->prototype=$x532;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x541=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x542=$x541($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x542->class)&&$x542->class===\'Error\'&&!isset($x542->properties[\'file\'])&&!isset($x542->properties[\'line\'])&&!isset($x542->properties[\'column\'])){$x542->properties[\'file\']=\'<image>/02_object.js\';$x542->properties[\'line\']=207;$x542->properties[\'column\']=9;$x542->attributes[\'file\']=$x542->attributes[\'line\']=$x542->attributes[\'column\']=0;}throw new JSException($x542,207,9,\'<image>/02_object.js\');}$x539=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x540=$x539($global,$x531,$_TypeError,array(\'Object.isFrozen(): Cannot return if frozen, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x532=$x540;if(is_object($x532)&&$x532!==JS::$undefined){$x531=$x532;}if(isset($x531->class)&&$x531->class===\'Error\'&&!isset($x531->properties[\'file\'])&&!isset($x531->properties[\'line\'])&&!isset($x531->properties[\'column\'])){$x531->properties[\'file\']=\'<image>/02_object.js\';$x531->properties[\'line\']=207;$x531->properties[\'column\']=3;$x531->attributes[\'file\']=$x531->attributes[\'line\']=$x531->attributes[\'column\']=0;}throw new JSException($x531,207,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&(JS::CONFIGURABLE|JS::WRITABLE)){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x554 =& $scope->properties['arguments'];
$x554->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x554->properties[$i] = $args[$i];
$x554->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x556 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x555 = $x556;
if (!JS::toBoolean($x555, $global)) {
$x559 = $_o;
$x559 = ($x559 === JS::$undefined ? 'undefined' : (is_int($x559) || is_float($x559) ? 'number' : (is_bool($x559) ? 'boolean' : (is_string($x559) ? 'string' : (is_object($x559) && isset($x559->call) ? 'function' : 'object')))));
$x558 = !(((gettype($x559) === gettype('object') && $x559 === 'object'))|| (((is_float($x559) || is_int($x559)) && (is_float('object') || is_int('object'))) && $x559 == 'object'));
$x557 = $x558;
if (JS::toBoolean($x557, $global)) {
$x561 = $_o;
$x561 = ($x561 === JS::$undefined ? 'undefined' : (is_int($x561) || is_float($x561) ? 'number' : (is_bool($x561) ? 'boolean' : (is_string($x561) ? 'string' : (is_object($x561) && isset($x561->call) ? 'function' : 'object')))));
$x560 = !(((gettype($x561) === gettype('function') && $x561 === 'function'))|| (((is_float($x561) || is_int($x561)) && (is_float('function') || is_int('function'))) && $x561 == 'function'));
$x557 = $x560; }
$x555 = $x557; }
if (JS::toBoolean($x555, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x564 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 223, 13, '<image>/02_object.js');
$_TypeError =& $x564[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x564;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x565 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 223, 13, '<image>/02_object.js');
$_ReferenceError =& $x565[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x565;
$x566 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 13);
$x567 = $x566($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x567->class) && $x567->class === 'Error' && !isset($x567->properties['file']) && !isset($x567->properties['line']) && !isset($x567->properties['column'])) {$x567->properties['file'] = '<image>/02_object.js';$x567->properties['line'] = 223;$x567->properties['column'] = 13;$x567->attributes['file'] = $x567->attributes['line'] = $x567->attributes['column'] = 0; }
throw new JSException($x567, 223, 13, '<image>/02_object.js');
}
$x562 = clone JS::$objectTemplate;
unset($x568, $W568, $S568, $U568);
$x569 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 223, 9, '<image>/02_object.js');
$x568 =& $x569[0]; list(,$W568,$S568,$U568) = $x569;
$x563 = $x568;
$x562->prototype = $x563;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x572 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x573 = $x572($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x573->class) && $x573->class === 'Error' && !isset($x573->properties['file']) && !isset($x573->properties['line']) && !isset($x573->properties['column'])) {$x573->properties['file'] = '<image>/02_object.js';$x573->properties['line'] = 223;$x573->properties['column'] = 9;$x573->attributes['file'] = $x573->attributes['line'] = $x573->attributes['column'] = 0; }
throw new JSException($x573, 223, 9, '<image>/02_object.js');
}
$x570 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x571 = $x570($global, $x562, $_TypeError, array('Object.isExtensible(): Cannot return if extensible, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x563 = $x571;
if (is_object($x563) && $x563 !== JS::$undefined) { $x562 = $x563; }
if (isset($x562->class) && $x562->class === 'Error' && !isset($x562->properties['file']) && !isset($x562->properties['line']) && !isset($x562->properties['column'])) {$x562->properties['file'] = '<image>/02_object.js';$x562->properties['line'] = 223;$x562->properties['column'] = 3;$x562->attributes['file'] = $x562->attributes['line'] = $x562->attributes['column'] = 0; }
throw new JSException($x562, 223, 3, '<image>/02_object.js');;
};
return$_o->extensible;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x554=&$scope->properties[\'arguments\'];$x554->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x554->properties[$i]=$args[$i];$x554->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x556=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x555=$x556;if(!JS::toBoolean($x555,$global)){$x559=$_o;$x559=($x559===JS::$undefined?\'undefined\':(is_int($x559)||is_float($x559)?\'number\':(is_bool($x559)?\'boolean\':(is_string($x559)?\'string\':(is_object($x559)&&isset($x559->call)?\'function\':\'object\')))));$x558=!(((gettype($x559)===gettype(\'object\')&&$x559===\'object\'))||(((is_float($x559)||is_int($x559))&&(is_float(\'object\')||is_int(\'object\')))&&$x559==\'object\'));$x557=$x558;if(JS::toBoolean($x557,$global)){$x561=$_o;$x561=($x561===JS::$undefined?\'undefined\':(is_int($x561)||is_float($x561)?\'number\':(is_bool($x561)?\'boolean\':(is_string($x561)?\'string\':(is_object($x561)&&isset($x561->call)?\'function\':\'object\')))));$x560=!(((gettype($x561)===gettype(\'function\')&&$x561===\'function\'))||(((is_float($x561)||is_int($x561))&&(is_float(\'function\')||is_int(\'function\')))&&$x561==\'function\'));$x557=$x560;}$x555=$x557;}if(JS::toBoolean($x555,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x564=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),223,13,\'<image>/02_object.js\');$_TypeError=&$x564[0];list(,$WTypeError,$STypeError,$UTypeError)=$x564;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x565=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),223,13,\'<image>/02_object.js\');$_ReferenceError=&$x565[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x565;$x566=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,13);$x567=$x566($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x567->class)&&$x567->class===\'Error\'&&!isset($x567->properties[\'file\'])&&!isset($x567->properties[\'line\'])&&!isset($x567->properties[\'column\'])){$x567->properties[\'file\']=\'<image>/02_object.js\';$x567->properties[\'line\']=223;$x567->properties[\'column\']=13;$x567->attributes[\'file\']=$x567->attributes[\'line\']=$x567->attributes[\'column\']=0;}throw new JSException($x567,223,13,\'<image>/02_object.js\');}$x562=clone JS::$objectTemplate;unset($x568,$W568,$S568,$U568);$x569=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),223,9,\'<image>/02_object.js\');$x568=&$x569[0];list(,$W568,$S568,$U568)=$x569;$x563=$x568;$x562->prototype=$x563;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x572=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x573=$x572($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x573->class)&&$x573->class===\'Error\'&&!isset($x573->properties[\'file\'])&&!isset($x573->properties[\'line\'])&&!isset($x573->properties[\'column\'])){$x573->properties[\'file\']=\'<image>/02_object.js\';$x573->properties[\'line\']=223;$x573->properties[\'column\']=9;$x573->attributes[\'file\']=$x573->attributes[\'line\']=$x573->attributes[\'column\']=0;}throw new JSException($x573,223,9,\'<image>/02_object.js\');}$x570=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x571=$x570($global,$x562,$_TypeError,array(\'Object.isExtensible(): Cannot return if extensible, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x563=$x571;if(is_object($x563)&&$x563!==JS::$undefined){$x562=$x563;}if(isset($x562->class)&&$x562->class===\'Error\'&&!isset($x562->properties[\'file\'])&&!isset($x562->properties[\'line\'])&&!isset($x562->properties[\'column\'])){$x562->properties[\'file\']=\'<image>/02_object.js\';$x562->properties[\'line\']=223;$x562->properties[\'column\']=3;$x562->attributes[\'file\']=$x562->attributes[\'line\']=$x562->attributes[\'column\']=0;}throw new JSException($x562,223,3,\'<image>/02_object.js\');}return$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x585 =& $scope->properties['arguments'];
$x585->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x585->properties[$i] = $args[$i];
$x585->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x587 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x586 = $x587;
if (!JS::toBoolean($x586, $global)) {
$x590 = $_o;
$x590 = ($x590 === JS::$undefined ? 'undefined' : (is_int($x590) || is_float($x590) ? 'number' : (is_bool($x590) ? 'boolean' : (is_string($x590) ? 'string' : (is_object($x590) && isset($x590->call) ? 'function' : 'object')))));
$x589 = !(((gettype($x590) === gettype('object') && $x590 === 'object'))|| (((is_float($x590) || is_int($x590)) && (is_float('object') || is_int('object'))) && $x590 == 'object'));
$x588 = $x589;
if (JS::toBoolean($x588, $global)) {
$x592 = $_o;
$x592 = ($x592 === JS::$undefined ? 'undefined' : (is_int($x592) || is_float($x592) ? 'number' : (is_bool($x592) ? 'boolean' : (is_string($x592) ? 'string' : (is_object($x592) && isset($x592->call) ? 'function' : 'object')))));
$x591 = !(((gettype($x592) === gettype('function') && $x592 === 'function'))|| (((is_float($x592) || is_int($x592)) && (is_float('function') || is_int('function'))) && $x592 == 'function'));
$x588 = $x591; }
$x586 = $x588; }
if (JS::toBoolean($x586, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x595 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 231, 13, '<image>/02_object.js');
$_TypeError =& $x595[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x595;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x596 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 231, 13, '<image>/02_object.js');
$_ReferenceError =& $x596[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x596;
$x597 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 13);
$x598 = $x597($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x598->class) && $x598->class === 'Error' && !isset($x598->properties['file']) && !isset($x598->properties['line']) && !isset($x598->properties['column'])) {$x598->properties['file'] = '<image>/02_object.js';$x598->properties['line'] = 231;$x598->properties['column'] = 13;$x598->attributes['file'] = $x598->attributes['line'] = $x598->attributes['column'] = 0; }
throw new JSException($x598, 231, 13, '<image>/02_object.js');
}
$x593 = clone JS::$objectTemplate;
unset($x599, $W599, $S599, $U599);
$x600 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 231, 9, '<image>/02_object.js');
$x599 =& $x600[0]; list(,$W599,$S599,$U599) = $x600;
$x594 = $x599;
$x593->prototype = $x594;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x603 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x604 = $x603($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x604->class) && $x604->class === 'Error' && !isset($x604->properties['file']) && !isset($x604->properties['line']) && !isset($x604->properties['column'])) {$x604->properties['file'] = '<image>/02_object.js';$x604->properties['line'] = 231;$x604->properties['column'] = 9;$x604->attributes['file'] = $x604->attributes['line'] = $x604->attributes['column'] = 0; }
throw new JSException($x604, 231, 9, '<image>/02_object.js');
}
$x601 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x602 = $x601($global, $x593, $_TypeError, array('Object.keys(): Cannot return keys, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x594 = $x602;
if (is_object($x594) && $x594 !== JS::$undefined) { $x593 = $x594; }
if (isset($x593->class) && $x593->class === 'Error' && !isset($x593->properties['file']) && !isset($x593->properties['line']) && !isset($x593->properties['column'])) {$x593->properties['file'] = '<image>/02_object.js';$x593->properties['line'] = 231;$x593->properties['column'] = 3;$x593->attributes['file'] = $x593->attributes['line'] = $x593->attributes['column'] = 0; }
throw new JSException($x593, 231, 3, '<image>/02_object.js');;
};
$x605 = clone JS::$arrayTemplate;
$x605->properties['length'] = 0;
$x605->attributes['length'] = JS::WRITABLE;
$scope->properties['keys'] = JS::$undefined; $_keys =& $scope->properties['keys'];
$Ukeys = FALSE;
$_keys = $x605;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_o !== JS::$undefined && $_o !== NULL) {
for ($x607 = array(), $x606 = JS::toObject($_o, $global); $x606; $x606 = $x606->prototype) {
foreach ($x606->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x607[$property])) { continue; }
$x607[$property] = TRUE;
$_k = $property;

if ($_keys === JS::$undefined || $_keys === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x609 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 12, '<image>/02_object.js');
$_TypeError =& $x609[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x609;
$x610 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x611 = $x610($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x611->class) && $x611->class === 'Error' && !isset($x611->properties['file']) && !isset($x611->properties['line']) && !isset($x611->properties['column'])) {$x611->properties['file'] = '<image>/02_object.js';$x611->properties['line'] = 237;$x611->properties['column'] = 12;$x611->attributes['file'] = $x611->attributes['line'] = $x611->attributes['column'] = 0; }
throw new JSException($x611, 237, 12, '<image>/02_object.js');
}
$x608 = JS::toObject($_keys, $global);
unset($x612, $W612, $S612, $U612);
$x613 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x608, JS::toString('push', $global), 237, 12, '<image>/02_object.js');
$x612 =& $x613[0]; list(,$W612,$S612,$U612) = $x613;
if (!(is_object($x612) && isset($x612->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x616 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 237, 12, '<image>/02_object.js');
$_TypeError =& $x616[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x616;
$x617 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x618 = $x617($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x618->class) && $x618->class === 'Error' && !isset($x618->properties['file']) && !isset($x618->properties['line']) && !isset($x618->properties['column'])) {$x618->properties['file'] = '<image>/02_object.js';$x618->properties['line'] = 237;$x618->properties['column'] = 12;$x618->attributes['file'] = $x618->attributes['line'] = $x618->attributes['column'] = 0; }
throw new JSException($x618, 237, 12, '<image>/02_object.js');
}
$x614 = $x612->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x615 = $x614($global, $x608, $x612, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_keys;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x585=&$scope->properties[\'arguments\'];$x585->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x585->properties[$i]=$args[$i];$x585->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x587=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x586=$x587;if(!JS::toBoolean($x586,$global)){$x590=$_o;$x590=($x590===JS::$undefined?\'undefined\':(is_int($x590)||is_float($x590)?\'number\':(is_bool($x590)?\'boolean\':(is_string($x590)?\'string\':(is_object($x590)&&isset($x590->call)?\'function\':\'object\')))));$x589=!(((gettype($x590)===gettype(\'object\')&&$x590===\'object\'))||(((is_float($x590)||is_int($x590))&&(is_float(\'object\')||is_int(\'object\')))&&$x590==\'object\'));$x588=$x589;if(JS::toBoolean($x588,$global)){$x592=$_o;$x592=($x592===JS::$undefined?\'undefined\':(is_int($x592)||is_float($x592)?\'number\':(is_bool($x592)?\'boolean\':(is_string($x592)?\'string\':(is_object($x592)&&isset($x592->call)?\'function\':\'object\')))));$x591=!(((gettype($x592)===gettype(\'function\')&&$x592===\'function\'))||(((is_float($x592)||is_int($x592))&&(is_float(\'function\')||is_int(\'function\')))&&$x592==\'function\'));$x588=$x591;}$x586=$x588;}if(JS::toBoolean($x586,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x595=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),231,13,\'<image>/02_object.js\');$_TypeError=&$x595[0];list(,$WTypeError,$STypeError,$UTypeError)=$x595;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x596=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),231,13,\'<image>/02_object.js\');$_ReferenceError=&$x596[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x596;$x597=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,13);$x598=$x597($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x598->class)&&$x598->class===\'Error\'&&!isset($x598->properties[\'file\'])&&!isset($x598->properties[\'line\'])&&!isset($x598->properties[\'column\'])){$x598->properties[\'file\']=\'<image>/02_object.js\';$x598->properties[\'line\']=231;$x598->properties[\'column\']=13;$x598->attributes[\'file\']=$x598->attributes[\'line\']=$x598->attributes[\'column\']=0;}throw new JSException($x598,231,13,\'<image>/02_object.js\');}$x593=clone JS::$objectTemplate;unset($x599,$W599,$S599,$U599);$x600=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),231,9,\'<image>/02_object.js\');$x599=&$x600[0];list(,$W599,$S599,$U599)=$x600;$x594=$x599;$x593->prototype=$x594;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x603=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x604=$x603($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x604->class)&&$x604->class===\'Error\'&&!isset($x604->properties[\'file\'])&&!isset($x604->properties[\'line\'])&&!isset($x604->properties[\'column\'])){$x604->properties[\'file\']=\'<image>/02_object.js\';$x604->properties[\'line\']=231;$x604->properties[\'column\']=9;$x604->attributes[\'file\']=$x604->attributes[\'line\']=$x604->attributes[\'column\']=0;}throw new JSException($x604,231,9,\'<image>/02_object.js\');}$x601=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x602=$x601($global,$x593,$_TypeError,array(\'Object.keys(): Cannot return keys, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x594=$x602;if(is_object($x594)&&$x594!==JS::$undefined){$x593=$x594;}if(isset($x593->class)&&$x593->class===\'Error\'&&!isset($x593->properties[\'file\'])&&!isset($x593->properties[\'line\'])&&!isset($x593->properties[\'column\'])){$x593->properties[\'file\']=\'<image>/02_object.js\';$x593->properties[\'line\']=231;$x593->properties[\'column\']=3;$x593->attributes[\'file\']=$x593->attributes[\'line\']=$x593->attributes[\'column\']=0;}throw new JSException($x593,231,3,\'<image>/02_object.js\');}$x605=clone JS::$arrayTemplate;$x605->properties[\'length\']=0;$x605->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'keys\']=JS::$undefined;$_keys=&$scope->properties[\'keys\'];$Ukeys=FALSE;$_keys=$x605;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_o!==JS::$undefined&&$_o!==NULL){for($x607=array(),$x606=JS::toObject($_o,$global);$x606;$x606=$x606->prototype){foreach($x606->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x607[$property])){continue;}$x607[$property]=TRUE;$_k=$property;if($_keys===JS::$undefined||$_keys===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x609=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,12,\'<image>/02_object.js\');$_TypeError=&$x609[0];list(,$WTypeError,$STypeError,$UTypeError)=$x609;$x610=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x611=$x610($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x611->class)&&$x611->class===\'Error\'&&!isset($x611->properties[\'file\'])&&!isset($x611->properties[\'line\'])&&!isset($x611->properties[\'column\'])){$x611->properties[\'file\']=\'<image>/02_object.js\';$x611->properties[\'line\']=237;$x611->properties[\'column\']=12;$x611->attributes[\'file\']=$x611->attributes[\'line\']=$x611->attributes[\'column\']=0;}throw new JSException($x611,237,12,\'<image>/02_object.js\');}$x608=JS::toObject($_keys,$global);unset($x612,$W612,$S612,$U612);$x613=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x608,JS::toString(\'push\',$global),237,12,\'<image>/02_object.js\');$x612=&$x613[0];list(,$W612,$S612,$U612)=$x613;if(!(is_object($x612)&&isset($x612->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x616=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),237,12,\'<image>/02_object.js\');$_TypeError=&$x616[0];list(,$WTypeError,$STypeError,$UTypeError)=$x616;$x617=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x618=$x617($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x618->class)&&$x618->class===\'Error\'&&!isset($x618->properties[\'file\'])&&!isset($x618->properties[\'line\'])&&!isset($x618->properties[\'column\'])){$x618->properties[\'file\']=\'<image>/02_object.js\';$x618->properties[\'line\']=237;$x618->properties[\'column\']=12;$x618->attributes[\'file\']=$x618->attributes[\'line\']=$x618->attributes[\'column\']=0;}throw new JSException($x618,237,12,\'<image>/02_object.js\');}$x614=$x612->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x615=$x614($global,$x608,$x612,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_keys;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x651 =& $scope->properties['arguments'];
$x651->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x651->properties[$i] = $args[$i];
$x651->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x652 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
if (JS::toBoolean($x652, $global)) {

return '[object Undefined]';;
}
else {
$x653 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
if (JS::toBoolean($x653, $global)) {

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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x651=&$scope->properties[\'arguments\'];$x651->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x651->properties[$i]=$args[$i];$x651->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x652=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));if(JS::toBoolean($x652,$global)){return\'[object Undefined]\';}else{$x653=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));if(JS::toBoolean($x653,$global)){return\'[object Null]\';}else{$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=JS::toObject($leThis,$global);if(JS::toBoolean(!isset($_o->class),$global)){return\'[object]\';}return"[object ".$_o->class."]";}}return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x667 =& $scope->properties['arguments'];
$x667->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x667->properties[$i] = $args[$i];
$x667->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x669 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 268, 22, '<image>/02_object.js');
$_TypeError =& $x669[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x669;
$x670 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x671 = $x670($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x671->class) && $x671->class === 'Error' && !isset($x671->properties['file']) && !isset($x671->properties['line']) && !isset($x671->properties['column'])) {$x671->properties['file'] = '<image>/02_object.js';$x671->properties['line'] = 268;$x671->properties['column'] = 22;$x671->attributes['file'] = $x671->attributes['line'] = $x671->attributes['column'] = 0; }
throw new JSException($x671, 268, 22, '<image>/02_object.js');
}
$x668 = JS::toObject($leThis, $global);
unset($x672, $W672, $S672, $U672);
$x673 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x668, JS::toString('toString', $global), 268, 22, '<image>/02_object.js');
$x672 =& $x673[0]; list(,$W672,$S672,$U672) = $x673;
if (!(is_object($x672) && isset($x672->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x676 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 268, 22, '<image>/02_object.js');
$_TypeError =& $x676[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x676;
$x677 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x678 = $x677($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x678->class) && $x678->class === 'Error' && !isset($x678->properties['file']) && !isset($x678->properties['line']) && !isset($x678->properties['column'])) {$x678->properties['file'] = '<image>/02_object.js';$x678->properties['line'] = 268;$x678->properties['column'] = 22;$x678->attributes['file'] = $x678->attributes['line'] = $x678->attributes['column'] = 0; }
throw new JSException($x678, 268, 22, '<image>/02_object.js');
}
$x674 = $x672->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x675 = $x674($global, $x668, $x672, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x675;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x667=&$scope->properties[\'arguments\'];$x667->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x667->properties[$i]=$args[$i];$x667->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x669=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),268,22,\'<image>/02_object.js\');$_TypeError=&$x669[0];list(,$WTypeError,$STypeError,$UTypeError)=$x669;$x670=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x671=$x670($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x671->class)&&$x671->class===\'Error\'&&!isset($x671->properties[\'file\'])&&!isset($x671->properties[\'line\'])&&!isset($x671->properties[\'column\'])){$x671->properties[\'file\']=\'<image>/02_object.js\';$x671->properties[\'line\']=268;$x671->properties[\'column\']=22;$x671->attributes[\'file\']=$x671->attributes[\'line\']=$x671->attributes[\'column\']=0;}throw new JSException($x671,268,22,\'<image>/02_object.js\');}$x668=JS::toObject($leThis,$global);unset($x672,$W672,$S672,$U672);$x673=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x668,JS::toString(\'toString\',$global),268,22,\'<image>/02_object.js\');$x672=&$x673[0];list(,$W672,$S672,$U672)=$x673;if(!(is_object($x672)&&isset($x672->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x676=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),268,22,\'<image>/02_object.js\');$_TypeError=&$x676[0];list(,$WTypeError,$STypeError,$UTypeError)=$x676;$x677=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x678=$x677($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x678->class)&&$x678->class===\'Error\'&&!isset($x678->properties[\'file\'])&&!isset($x678->properties[\'line\'])&&!isset($x678->properties[\'column\'])){$x678->properties[\'file\']=\'<image>/02_object.js\';$x678->properties[\'line\']=268;$x678->properties[\'column\']=22;$x678->attributes[\'file\']=$x678->attributes[\'line\']=$x678->attributes[\'column\']=0;}throw new JSException($x678,268,22,\'<image>/02_object.js\');}$x674=$x672->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x675=$x674($global,$x668,$x672,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x675;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x692 =& $scope->properties['arguments'];
$x692->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x692->properties[$i] = $args[$i];
$x692->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x694 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
$x693 = $x694;
if (!JS::toBoolean($x693, $global)) {
$x695 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
$x693 = $x695; }
if (JS::toBoolean($x693, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x698 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 273, 13, '<image>/02_object.js');
$_TypeError =& $x698[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x698;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x699 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('ReferenceError', $global), 273, 13, '<image>/02_object.js');
$_ReferenceError =& $x699[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x699;
$x700 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 13);
$x701 = $x700($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x701->class) && $x701->class === 'Error' && !isset($x701->properties['file']) && !isset($x701->properties['line']) && !isset($x701->properties['column'])) {$x701->properties['file'] = '<image>/02_object.js';$x701->properties['line'] = 273;$x701->properties['column'] = 13;$x701->attributes['file'] = $x701->attributes['line'] = $x701->attributes['column'] = 0; }
throw new JSException($x701, 273, 13, '<image>/02_object.js');
}
$x696 = clone JS::$objectTemplate;
unset($x702, $W702, $S702, $U702);
$x703 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, JS::toString('prototype', $global), 273, 9, '<image>/02_object.js');
$x702 =& $x703[0]; list(,$W702,$S702,$U702) = $x703;
$x697 = $x702;
$x696->prototype = $x697;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x706 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x707 = $x706($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x707->class) && $x707->class === 'Error' && !isset($x707->properties['file']) && !isset($x707->properties['line']) && !isset($x707->properties['column'])) {$x707->properties['file'] = '<image>/02_object.js';$x707->properties['line'] = 273;$x707->properties['column'] = 9;$x707->attributes['file'] = $x707->attributes['line'] = $x707->attributes['column'] = 0; }
throw new JSException($x707, 273, 9, '<image>/02_object.js');
}
$x704 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x705 = $x704($global, $x696, $_TypeError, array('Object.prototype.valueOf(): this is undefined or null'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x697 = $x705;
if (is_object($x697) && $x697 !== JS::$undefined) { $x696 = $x697; }
if (isset($x696->class) && $x696->class === 'Error' && !isset($x696->properties['file']) && !isset($x696->properties['line']) && !isset($x696->properties['column'])) {$x696->properties['file'] = '<image>/02_object.js';$x696->properties['line'] = 273;$x696->properties['column'] = 3;$x696->attributes['file'] = $x696->attributes['line'] = $x696->attributes['column'] = 0; }
throw new JSException($x696, 273, 3, '<image>/02_object.js');;
};
return JS::toObject($leThis, $global);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x692=&$scope->properties[\'arguments\'];$x692->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x692->properties[$i]=$args[$i];$x692->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x694=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));$x693=$x694;if(!JS::toBoolean($x693,$global)){$x695=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));$x693=$x695;}if(JS::toBoolean($x693,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x698=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'TypeError\',$global),273,13,\'<image>/02_object.js\');$_TypeError=&$x698[0];list(,$WTypeError,$STypeError,$UTypeError)=$x698;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x699=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,JS::toString(\'ReferenceError\',$global),273,13,\'<image>/02_object.js\');$_ReferenceError=&$x699[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x699;$x700=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,13);$x701=$x700($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x701->class)&&$x701->class===\'Error\'&&!isset($x701->properties[\'file\'])&&!isset($x701->properties[\'line\'])&&!isset($x701->properties[\'column\'])){$x701->properties[\'file\']=\'<image>/02_object.js\';$x701->properties[\'line\']=273;$x701->properties[\'column\']=13;$x701->attributes[\'file\']=$x701->attributes[\'line\']=$x701->attributes[\'column\']=0;}throw new JSException($x701,273,13,\'<image>/02_object.js\');}$x696=clone JS::$objectTemplate;unset($x702,$W702,$S702,$U702);$x703=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,JS::toString(\'prototype\',$global),273,9,\'<image>/02_object.js\');$x702=&$x703[0];list(,$W702,$S702,$U702)=$x703;$x697=$x702;$x696->prototype=$x697;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x706=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x707=$x706($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x707->class)&&$x707->class===\'Error\'&&!isset($x707->properties[\'file\'])&&!isset($x707->properties[\'line\'])&&!isset($x707->properties[\'column\'])){$x707->properties[\'file\']=\'<image>/02_object.js\';$x707->properties[\'line\']=273;$x707->properties[\'column\']=9;$x707->attributes[\'file\']=$x707->attributes[\'line\']=$x707->attributes[\'column\']=0;}throw new JSException($x707,273,9,\'<image>/02_object.js\');}$x704=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x705=$x704($global,$x696,$_TypeError,array(\'Object.prototype.valueOf(): this is undefined or null\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x697=$x705;if(is_object($x697)&&$x697!==JS::$undefined){$x696=$x697;}if(isset($x696->class)&&$x696->class===\'Error\'&&!isset($x696->properties[\'file\'])&&!isset($x696->properties[\'line\'])&&!isset($x696->properties[\'column\'])){$x696->properties[\'file\']=\'<image>/02_object.js\';$x696->properties[\'line\']=273;$x696->properties[\'column\']=3;$x696->attributes[\'file\']=$x696->attributes[\'line\']=$x696->attributes[\'column\']=0;}throw new JSException($x696,273,3,\'<image>/02_object.js\');}return JS::toObject($leThis,$global);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x721 =& $scope->properties['arguments'];
$x721->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x721->properties[$i] = $args[$i];
$x721->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return array_key_exists($_p, $leThis->properties) || isset($leThis->attributes[$_p]);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x721=&$scope->properties[\'arguments\'];$x721->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x721->properties[$i]=$args[$i];$x721->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return array_key_exists($_p,$leThis->properties)||isset($leThis->attributes[$_p]);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x735 =& $scope->properties['arguments'];
$x735->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x735->properties[$i] = $args[$i];
$x735->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x737 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x736 = $x737;
if (!JS::toBoolean($x736, $global)) {
$x740 = $_v;
$x740 = ($x740 === JS::$undefined ? 'undefined' : (is_int($x740) || is_float($x740) ? 'number' : (is_bool($x740) ? 'boolean' : (is_string($x740) ? 'string' : (is_object($x740) && isset($x740->call) ? 'function' : 'object')))));
$x739 = !(((gettype($x740) === gettype('object') && $x740 === 'object'))|| (((is_float($x740) || is_int($x740)) && (is_float('object') || is_int('object'))) && $x740 == 'object'));
$x738 = $x739;
if (JS::toBoolean($x738, $global)) {
$x742 = $_v;
$x742 = ($x742 === JS::$undefined ? 'undefined' : (is_int($x742) || is_float($x742) ? 'number' : (is_bool($x742) ? 'boolean' : (is_string($x742) ? 'string' : (is_object($x742) && isset($x742->call) ? 'function' : 'object')))));
$x741 = !(((gettype($x742) === gettype('function') && $x742 === 'function'))|| (((is_float($x742) || is_int($x742)) && (is_float('function') || is_int('function'))) && $x742 == 'function'));
$x738 = $x741; }
$x736 = $x738; }
if (JS::toBoolean($x736, $global)) {

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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x735=&$scope->properties[\'arguments\'];$x735->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x735->properties[$i]=$args[$i];$x735->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$global->scope[++$global->scope_sp]=$scope;$x737=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x736=$x737;if(!JS::toBoolean($x736,$global)){$x740=$_v;$x740=($x740===JS::$undefined?\'undefined\':(is_int($x740)||is_float($x740)?\'number\':(is_bool($x740)?\'boolean\':(is_string($x740)?\'string\':(is_object($x740)&&isset($x740->call)?\'function\':\'object\')))));$x739=!(((gettype($x740)===gettype(\'object\')&&$x740===\'object\'))||(((is_float($x740)||is_int($x740))&&(is_float(\'object\')||is_int(\'object\')))&&$x740==\'object\'));$x738=$x739;if(JS::toBoolean($x738,$global)){$x742=$_v;$x742=($x742===JS::$undefined?\'undefined\':(is_int($x742)||is_float($x742)?\'number\':(is_bool($x742)?\'boolean\':(is_string($x742)?\'string\':(is_object($x742)&&isset($x742->call)?\'function\':\'object\')))));$x741=!(((gettype($x742)===gettype(\'function\')&&$x742===\'function\'))||(((is_float($x742)||is_int($x742))&&(is_float(\'function\')||is_int(\'function\')))&&$x742==\'function\'));$x738=$x741;}$x736=$x738;}if(JS::toBoolean($x736,$global)){return false;}for($_v=$_v->prototype;$_v;$_v=$_v->prototype){if($_v===$leThis){return TRUE;}}return false;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x756 =& $scope->properties['arguments'];
$x756->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x756->properties[$i] = $args[$i];
$x756->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return JS::toBoolean(isset($leThis->attributes[$_p]) && ($leThis->attributes[$_p] & JS::ENUMERABLE), $global);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x756=&$scope->properties[\'arguments\'];$x756->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x756->properties[$i]=$args[$i];$x756->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return JS::toBoolean(isset($leThis->attributes[$_p])&&($leThis->attributes[$_p]&JS::ENUMERABLE),$global);return JS::$undefined;}', "\n";
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
if (isset($S39)) {
$x45 = $S39->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 9, 23);
$x46 = $x45($global, $_Object, $S39, array($x34), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x44 = $x46;
} else {
if (!$U39) {$x44 = $x34;if ($W39) { $x39 = $x34; }  }
else { $x44 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getPrototypeOf') && 'getPrototypeOf' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getPrototypeOf' + 1; };
$x128 = clone JS::$functionTemplate; $x128->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6'; $x128->parameters = array (
  0 => 'o',
  1 => 'p',
); $x128->scope = $scope; $x128->properties['prototype'] = clone JS::$objectTemplate; $x128->attributes['prototype'] = JS::WRITABLE; $x128->properties['prototype']->properties['constructor'] = $x128; $x128->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x128->properties['length'] = 2; $x128->attributes['length'] = 0;
$x129 = JS::toString('getOwnPropertyDescriptor', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x130 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 17, 33, '<image>/02_object.js');
$_TypeError =& $x130[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x130;
$x131 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x132 = $x131($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x132->class) && $x132->class === 'Error' && !isset($x132->properties['file']) && !isset($x132->properties['line']) && !isset($x132->properties['column'])) {$x132->properties['file'] = '<image>/02_object.js';$x132->properties['line'] = 17;$x132->properties['column'] = 33;$x132->attributes['file'] = $x132->attributes['line'] = $x132->attributes['column'] = 0; }
throw new JSException($x132, 17, 33, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x133, $W133, $S133, $U133);
$x134 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x129, $global), 17, 33, '<image>/02_object.js');
$x133 =& $x134[0]; list(,$W133,$S133,$U133) = $x134;
if ($U133 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x129] = $x133; $x133 =& $_Object->properties[$x129]; $_Object->attributes[$x129] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U133 = FALSE; $W133 = TRUE; }
if (isset($S133)) {
$x136 = $S133->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x137 = $x136($global, $_Object, $S133, array($x128), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x135 = $x137;
} else {
if (!$U133) {$x135 = $x128;if ($W133) { $x133 = $x128; }  }
else { $x135 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyDescriptor') && 'getOwnPropertyDescriptor' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyDescriptor' + 1; };
$x171 = clone JS::$functionTemplate; $x171->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7'; $x171->parameters = array (
  0 => 'o',
); $x171->scope = $scope; $x171->properties['prototype'] = clone JS::$objectTemplate; $x171->attributes['prototype'] = JS::WRITABLE; $x171->properties['prototype']->properties['constructor'] = $x171; $x171->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x171->properties['length'] = 1; $x171->attributes['length'] = 0;
$x172 = JS::toString('getOwnPropertyNames', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x173 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 48, 28, '<image>/02_object.js');
$_TypeError =& $x173[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x173;
$x174 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x175 = $x174($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x175->class) && $x175->class === 'Error' && !isset($x175->properties['file']) && !isset($x175->properties['line']) && !isset($x175->properties['column'])) {$x175->properties['file'] = '<image>/02_object.js';$x175->properties['line'] = 48;$x175->properties['column'] = 28;$x175->attributes['file'] = $x175->attributes['line'] = $x175->attributes['column'] = 0; }
throw new JSException($x175, 48, 28, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x176, $W176, $S176, $U176);
$x177 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x172, $global), 48, 28, '<image>/02_object.js');
$x176 =& $x177[0]; list(,$W176,$S176,$U176) = $x177;
if ($U176 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x172] = $x176; $x176 =& $_Object->properties[$x172]; $_Object->attributes[$x172] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U176 = FALSE; $W176 = TRUE; }
if (isset($S176)) {
$x179 = $S176->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x180 = $x179($global, $_Object, $S176, array($x171), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x178 = $x180;
} else {
if (!$U176) {$x178 = $x171;if ($W176) { $x176 = $x171; }  }
else { $x178 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyNames') && 'getOwnPropertyNames' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyNames' + 1; };
$x216 = clone JS::$functionTemplate; $x216->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8'; $x216->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x216->scope = $scope; $x216->properties['prototype'] = clone JS::$objectTemplate; $x216->attributes['prototype'] = JS::WRITABLE; $x216->properties['prototype']->properties['constructor'] = $x216; $x216->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x216->properties['length'] = 2; $x216->attributes['length'] = 0;
$x217 = JS::toString('create', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x218 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 62, 15, '<image>/02_object.js');
$_TypeError =& $x218[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x218;
$x219 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x220 = $x219($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x220->class) && $x220->class === 'Error' && !isset($x220->properties['file']) && !isset($x220->properties['line']) && !isset($x220->properties['column'])) {$x220->properties['file'] = '<image>/02_object.js';$x220->properties['line'] = 62;$x220->properties['column'] = 15;$x220->attributes['file'] = $x220->attributes['line'] = $x220->attributes['column'] = 0; }
throw new JSException($x220, 62, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x221, $W221, $S221, $U221);
$x222 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x217, $global), 62, 15, '<image>/02_object.js');
$x221 =& $x222[0]; list(,$W221,$S221,$U221) = $x222;
if ($U221 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x217] = $x221; $x221 =& $_Object->properties[$x217]; $_Object->attributes[$x217] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U221 = FALSE; $W221 = TRUE; }
if (isset($S221)) {
$x224 = $S221->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x225 = $x224($global, $_Object, $S221, array($x216), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x223 = $x225;
} else {
if (!$U221) {$x223 = $x216;if ($W221) { $x221 = $x216; }  }
else { $x223 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('create') && 'create' >= $_Object->properties['length']) { $_Object->properties['length'] = 'create' + 1; };
$x324 = clone JS::$functionTemplate; $x324->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9'; $x324->parameters = array (
  0 => 'o',
  1 => 'p',
  2 => 'attributes',
); $x324->scope = $scope; $x324->properties['prototype'] = clone JS::$objectTemplate; $x324->attributes['prototype'] = JS::WRITABLE; $x324->properties['prototype']->properties['constructor'] = $x324; $x324->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x324->properties['length'] = 3; $x324->attributes['length'] = 0;
$x325 = JS::toString('defineProperty', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x326 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 78, 23, '<image>/02_object.js');
$_TypeError =& $x326[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x326;
$x327 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x328 = $x327($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x328->class) && $x328->class === 'Error' && !isset($x328->properties['file']) && !isset($x328->properties['line']) && !isset($x328->properties['column'])) {$x328->properties['file'] = '<image>/02_object.js';$x328->properties['line'] = 78;$x328->properties['column'] = 23;$x328->attributes['file'] = $x328->attributes['line'] = $x328->attributes['column'] = 0; }
throw new JSException($x328, 78, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x329, $W329, $S329, $U329);
$x330 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x325, $global), 78, 23, '<image>/02_object.js');
$x329 =& $x330[0]; list(,$W329,$S329,$U329) = $x330;
if ($U329 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x325] = $x329; $x329 =& $_Object->properties[$x325]; $_Object->attributes[$x325] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U329 = FALSE; $W329 = TRUE; }
if (isset($S329)) {
$x332 = $S329->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x333 = $x332($global, $_Object, $S329, array($x324), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x331 = $x333;
} else {
if (!$U329) {$x331 = $x324;if ($W329) { $x329 = $x324; }  }
else { $x331 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperty') && 'defineProperty' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperty' + 1; };
$x388 = clone JS::$functionTemplate; $x388->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10'; $x388->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x388->scope = $scope; $x388->properties['prototype'] = clone JS::$objectTemplate; $x388->attributes['prototype'] = JS::WRITABLE; $x388->properties['prototype']->properties['constructor'] = $x388; $x388->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x388->properties['length'] = 2; $x388->attributes['length'] = 0;
$x389 = JS::toString('defineProperties', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x390 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 130, 25, '<image>/02_object.js');
$_TypeError =& $x390[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x390;
$x391 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x392 = $x391($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x392->class) && $x392->class === 'Error' && !isset($x392->properties['file']) && !isset($x392->properties['line']) && !isset($x392->properties['column'])) {$x392->properties['file'] = '<image>/02_object.js';$x392->properties['line'] = 130;$x392->properties['column'] = 25;$x392->attributes['file'] = $x392->attributes['line'] = $x392->attributes['column'] = 0; }
throw new JSException($x392, 130, 25, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x393, $W393, $S393, $U393);
$x394 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x389, $global), 130, 25, '<image>/02_object.js');
$x393 =& $x394[0]; list(,$W393,$S393,$U393) = $x394;
if ($U393 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x389] = $x393; $x393 =& $_Object->properties[$x389]; $_Object->attributes[$x389] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U393 = FALSE; $W393 = TRUE; }
if (isset($S393)) {
$x396 = $S393->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x397 = $x396($global, $_Object, $S393, array($x388), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x395 = $x397;
} else {
if (!$U393) {$x395 = $x388;if ($W393) { $x393 = $x388; }  }
else { $x395 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperties') && 'defineProperties' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperties' + 1; };
$x419 = clone JS::$functionTemplate; $x419->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11'; $x419->parameters = array (
  0 => 'o',
); $x419->scope = $scope; $x419->properties['prototype'] = clone JS::$objectTemplate; $x419->attributes['prototype'] = JS::WRITABLE; $x419->properties['prototype']->properties['constructor'] = $x419; $x419->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x419->properties['length'] = 1; $x419->attributes['length'] = 0;
$x420 = JS::toString('seal', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x421 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 146, 13, '<image>/02_object.js');
$_TypeError =& $x421[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x421;
$x422 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x423 = $x422($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x423->class) && $x423->class === 'Error' && !isset($x423->properties['file']) && !isset($x423->properties['line']) && !isset($x423->properties['column'])) {$x423->properties['file'] = '<image>/02_object.js';$x423->properties['line'] = 146;$x423->properties['column'] = 13;$x423->attributes['file'] = $x423->attributes['line'] = $x423->attributes['column'] = 0; }
throw new JSException($x423, 146, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x424, $W424, $S424, $U424);
$x425 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x420, $global), 146, 13, '<image>/02_object.js');
$x424 =& $x425[0]; list(,$W424,$S424,$U424) = $x425;
if ($U424 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x420] = $x424; $x424 =& $_Object->properties[$x420]; $_Object->attributes[$x420] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U424 = FALSE; $W424 = TRUE; }
if (isset($S424)) {
$x427 = $S424->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x428 = $x427($global, $_Object, $S424, array($x419), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x426 = $x428;
} else {
if (!$U424) {$x426 = $x419;if ($W424) { $x424 = $x419; }  }
else { $x426 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('seal') && 'seal' >= $_Object->properties['length']) { $_Object->properties['length'] = 'seal' + 1; };
$x450 = clone JS::$functionTemplate; $x450->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12'; $x450->parameters = array (
  0 => 'o',
); $x450->scope = $scope; $x450->properties['prototype'] = clone JS::$objectTemplate; $x450->attributes['prototype'] = JS::WRITABLE; $x450->properties['prototype']->properties['constructor'] = $x450; $x450->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x450->properties['length'] = 1; $x450->attributes['length'] = 0;
$x451 = JS::toString('freeze', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x452 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 162, 15, '<image>/02_object.js');
$_TypeError =& $x452[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x452;
$x453 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x454 = $x453($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x454->class) && $x454->class === 'Error' && !isset($x454->properties['file']) && !isset($x454->properties['line']) && !isset($x454->properties['column'])) {$x454->properties['file'] = '<image>/02_object.js';$x454->properties['line'] = 162;$x454->properties['column'] = 15;$x454->attributes['file'] = $x454->attributes['line'] = $x454->attributes['column'] = 0; }
throw new JSException($x454, 162, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x455, $W455, $S455, $U455);
$x456 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x451, $global), 162, 15, '<image>/02_object.js');
$x455 =& $x456[0]; list(,$W455,$S455,$U455) = $x456;
if ($U455 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x451] = $x455; $x455 =& $_Object->properties[$x451]; $_Object->attributes[$x451] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U455 = FALSE; $W455 = TRUE; }
if (isset($S455)) {
$x458 = $S455->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x459 = $x458($global, $_Object, $S455, array($x450), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x457 = $x459;
} else {
if (!$U455) {$x457 = $x450;if ($W455) { $x455 = $x450; }  }
else { $x457 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('freeze') && 'freeze' >= $_Object->properties['length']) { $_Object->properties['length'] = 'freeze' + 1; };
$x481 = clone JS::$functionTemplate; $x481->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13'; $x481->parameters = array (
  0 => 'o',
); $x481->scope = $scope; $x481->properties['prototype'] = clone JS::$objectTemplate; $x481->attributes['prototype'] = JS::WRITABLE; $x481->properties['prototype']->properties['constructor'] = $x481; $x481->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x481->properties['length'] = 1; $x481->attributes['length'] = 0;
$x482 = JS::toString('preventExtensions', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x483 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 179, 26, '<image>/02_object.js');
$_TypeError =& $x483[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x483;
$x484 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x485 = $x484($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x485->class) && $x485->class === 'Error' && !isset($x485->properties['file']) && !isset($x485->properties['line']) && !isset($x485->properties['column'])) {$x485->properties['file'] = '<image>/02_object.js';$x485->properties['line'] = 179;$x485->properties['column'] = 26;$x485->attributes['file'] = $x485->attributes['line'] = $x485->attributes['column'] = 0; }
throw new JSException($x485, 179, 26, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x486, $W486, $S486, $U486);
$x487 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x482, $global), 179, 26, '<image>/02_object.js');
$x486 =& $x487[0]; list(,$W486,$S486,$U486) = $x487;
if ($U486 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x482] = $x486; $x486 =& $_Object->properties[$x482]; $_Object->attributes[$x482] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U486 = FALSE; $W486 = TRUE; }
if (isset($S486)) {
$x489 = $S486->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x490 = $x489($global, $_Object, $S486, array($x481), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x488 = $x490;
} else {
if (!$U486) {$x488 = $x481;if ($W486) { $x486 = $x481; }  }
else { $x488 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('preventExtensions') && 'preventExtensions' >= $_Object->properties['length']) { $_Object->properties['length'] = 'preventExtensions' + 1; };
$x512 = clone JS::$functionTemplate; $x512->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14'; $x512->parameters = array (
  0 => 'o',
); $x512->scope = $scope; $x512->properties['prototype'] = clone JS::$objectTemplate; $x512->attributes['prototype'] = JS::WRITABLE; $x512->properties['prototype']->properties['constructor'] = $x512; $x512->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x512->properties['length'] = 1; $x512->attributes['length'] = 0;
$x513 = JS::toString('isSealed', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x514 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 189, 17, '<image>/02_object.js');
$_TypeError =& $x514[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x514;
$x515 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x516 = $x515($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x516->class) && $x516->class === 'Error' && !isset($x516->properties['file']) && !isset($x516->properties['line']) && !isset($x516->properties['column'])) {$x516->properties['file'] = '<image>/02_object.js';$x516->properties['line'] = 189;$x516->properties['column'] = 17;$x516->attributes['file'] = $x516->attributes['line'] = $x516->attributes['column'] = 0; }
throw new JSException($x516, 189, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x517, $W517, $S517, $U517);
$x518 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x513, $global), 189, 17, '<image>/02_object.js');
$x517 =& $x518[0]; list(,$W517,$S517,$U517) = $x518;
if ($U517 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x513] = $x517; $x517 =& $_Object->properties[$x513]; $_Object->attributes[$x513] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U517 = FALSE; $W517 = TRUE; }
if (isset($S517)) {
$x520 = $S517->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x521 = $x520($global, $_Object, $S517, array($x512), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x519 = $x521;
} else {
if (!$U517) {$x519 = $x512;if ($W517) { $x517 = $x512; }  }
else { $x519 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isSealed') && 'isSealed' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isSealed' + 1; };
$x543 = clone JS::$functionTemplate; $x543->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15'; $x543->parameters = array (
  0 => 'o',
); $x543->scope = $scope; $x543->properties['prototype'] = clone JS::$objectTemplate; $x543->attributes['prototype'] = JS::WRITABLE; $x543->properties['prototype']->properties['constructor'] = $x543; $x543->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x543->properties['length'] = 1; $x543->attributes['length'] = 0;
$x544 = JS::toString('isFrozen', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x545 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 205, 17, '<image>/02_object.js');
$_TypeError =& $x545[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x545;
$x546 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x547 = $x546($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x547->class) && $x547->class === 'Error' && !isset($x547->properties['file']) && !isset($x547->properties['line']) && !isset($x547->properties['column'])) {$x547->properties['file'] = '<image>/02_object.js';$x547->properties['line'] = 205;$x547->properties['column'] = 17;$x547->attributes['file'] = $x547->attributes['line'] = $x547->attributes['column'] = 0; }
throw new JSException($x547, 205, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x548, $W548, $S548, $U548);
$x549 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x544, $global), 205, 17, '<image>/02_object.js');
$x548 =& $x549[0]; list(,$W548,$S548,$U548) = $x549;
if ($U548 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x544] = $x548; $x548 =& $_Object->properties[$x544]; $_Object->attributes[$x544] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U548 = FALSE; $W548 = TRUE; }
if (isset($S548)) {
$x551 = $S548->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x552 = $x551($global, $_Object, $S548, array($x543), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x550 = $x552;
} else {
if (!$U548) {$x550 = $x543;if ($W548) { $x548 = $x543; }  }
else { $x550 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isFrozen') && 'isFrozen' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isFrozen' + 1; };
$x574 = clone JS::$functionTemplate; $x574->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16'; $x574->parameters = array (
  0 => 'o',
); $x574->scope = $scope; $x574->properties['prototype'] = clone JS::$objectTemplate; $x574->attributes['prototype'] = JS::WRITABLE; $x574->properties['prototype']->properties['constructor'] = $x574; $x574->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x574->properties['length'] = 1; $x574->attributes['length'] = 0;
$x575 = JS::toString('isExtensible', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x576 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 221, 21, '<image>/02_object.js');
$_TypeError =& $x576[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x576;
$x577 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x578 = $x577($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x578->class) && $x578->class === 'Error' && !isset($x578->properties['file']) && !isset($x578->properties['line']) && !isset($x578->properties['column'])) {$x578->properties['file'] = '<image>/02_object.js';$x578->properties['line'] = 221;$x578->properties['column'] = 21;$x578->attributes['file'] = $x578->attributes['line'] = $x578->attributes['column'] = 0; }
throw new JSException($x578, 221, 21, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x579, $W579, $S579, $U579);
$x580 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x575, $global), 221, 21, '<image>/02_object.js');
$x579 =& $x580[0]; list(,$W579,$S579,$U579) = $x580;
if ($U579 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x575] = $x579; $x579 =& $_Object->properties[$x575]; $_Object->attributes[$x575] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U579 = FALSE; $W579 = TRUE; }
if (isset($S579)) {
$x582 = $S579->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x583 = $x582($global, $_Object, $S579, array($x574), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x581 = $x583;
} else {
if (!$U579) {$x581 = $x574;if ($W579) { $x579 = $x574; }  }
else { $x581 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isExtensible') && 'isExtensible' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isExtensible' + 1; };
$x619 = clone JS::$functionTemplate; $x619->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17'; $x619->parameters = array (
  0 => 'o',
); $x619->scope = $scope; $x619->properties['prototype'] = clone JS::$objectTemplate; $x619->attributes['prototype'] = JS::WRITABLE; $x619->properties['prototype']->properties['constructor'] = $x619; $x619->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x619->properties['length'] = 1; $x619->attributes['length'] = 0;
$x620 = JS::toString('keys', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x621 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 229, 13, '<image>/02_object.js');
$_TypeError =& $x621[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x621;
$x622 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x623 = $x622($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x623->class) && $x623->class === 'Error' && !isset($x623->properties['file']) && !isset($x623->properties['line']) && !isset($x623->properties['column'])) {$x623->properties['file'] = '<image>/02_object.js';$x623->properties['line'] = 229;$x623->properties['column'] = 13;$x623->attributes['file'] = $x623->attributes['line'] = $x623->attributes['column'] = 0; }
throw new JSException($x623, 229, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x624, $W624, $S624, $U624);
$x625 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x620, $global), 229, 13, '<image>/02_object.js');
$x624 =& $x625[0]; list(,$W624,$S624,$U624) = $x625;
if ($U624 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x620] = $x624; $x624 =& $_Object->properties[$x620]; $_Object->attributes[$x620] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U624 = FALSE; $W624 = TRUE; }
if (isset($S624)) {
$x627 = $S624->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x628 = $x627($global, $_Object, $S624, array($x619), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x626 = $x628;
} else {
if (!$U624) {$x626 = $x619;if ($W624) { $x624 = $x619; }  }
else { $x626 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('keys') && 'keys' >= $_Object->properties['length']) { $_Object->properties['length'] = 'keys' + 1; };
$x629 = clone JS::$objectTemplate;
$x630 = JS::toString('prototype', $global);
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x631 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 243, 18, '<image>/02_object.js');
$_TypeError =& $x631[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x631;
$x632 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x633 = $x632($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x633->class) && $x633->class === 'Error' && !isset($x633->properties['file']) && !isset($x633->properties['line']) && !isset($x633->properties['column'])) {$x633->properties['file'] = '<image>/02_object.js';$x633->properties['line'] = 243;$x633->properties['column'] = 18;$x633->attributes['file'] = $x633->attributes['line'] = $x633->attributes['column'] = 0; }
throw new JSException($x633, 243, 18, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x634, $W634, $S634, $U634);
$x635 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, JS::toString($x630, $global), 243, 18, '<image>/02_object.js');
$x634 =& $x635[0]; list(,$W634,$S634,$U634) = $x635;
if ($U634 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties[$x630] = $x634; $x634 =& $_Object->properties[$x630]; $_Object->attributes[$x630] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U634 = FALSE; $W634 = TRUE; }
if (isset($S634)) {
$x637 = $S634->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x638 = $x637($global, $_Object, $S634, array($x629), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x636 = $x638;
} else {
if (!$U634) {$x636 = $x629;if ($W634) { $x634 = $x629; }  }
else { $x636 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Object->properties['length']) { $_Object->properties['length'] = 'prototype' + 1; };
$_Object->properties['prototype']->prototype = NULL;
$_Object->properties['prototype']->class = 'Object';
$_Object->properties['prototype']->extensible = TRUE;
unset($x639, $W639, $S639, $U639);
$x640 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 247, 7, '<image>/02_object.js');
$x639 =& $x640[0]; list(,$W639,$S639,$U639) = $x640;
$x641 = JS::toString('constructor', $global);
if ($x639 === JS::$undefined || $x639 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x642 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 247, 30, '<image>/02_object.js');
$_TypeError =& $x642[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x642;
$x643 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x644 = $x643($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x644->class) && $x644->class === 'Error' && !isset($x644->properties['file']) && !isset($x644->properties['line']) && !isset($x644->properties['column'])) {$x644->properties['file'] = '<image>/02_object.js';$x644->properties['line'] = 247;$x644->properties['column'] = 30;$x644->attributes['file'] = $x644->attributes['line'] = $x644->attributes['column'] = 0; }
throw new JSException($x644, 247, 30, '<image>/02_object.js');
}
$x639 = JS::toObject($x639, $global);
unset($x645, $W645, $S645, $U645);
$x646 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x639, JS::toString($x641, $global), 247, 30, '<image>/02_object.js');
$x645 =& $x646[0]; list(,$W645,$S645,$U645) = $x646;
if ($U645 && (!isset($x639->extensible) || $x639->extensible)) {$x639->properties[$x641] = $x645; $x645 =& $x639->properties[$x641]; $x639->attributes[$x641] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U645 = FALSE; $W645 = TRUE; }
if (isset($S645)) {
$x648 = $S645->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x649 = $x648($global, $x639, $S645, array($_Object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x647 = $x649;
} else {
if (!$U645) {$x647 = $_Object;if ($W645) { $x645 = $_Object; }  }
else { $x647 = JS::$undefined; }
}
if (isset($x639->class) && $x639->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x639->properties['length']) { $x639->properties['length'] = 'constructor' + 1; };
$x654 = clone JS::$functionTemplate; $x654->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18'; $x654->parameters = array (
); $x654->scope = $scope; $x654->properties['prototype'] = clone JS::$objectTemplate; $x654->attributes['prototype'] = JS::WRITABLE; $x654->properties['prototype']->properties['constructor'] = $x654; $x654->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x654->properties['length'] = 0; $x654->attributes['length'] = 0;
unset($x655, $W655, $S655, $U655);
$x656 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 249, 7, '<image>/02_object.js');
$x655 =& $x656[0]; list(,$W655,$S655,$U655) = $x656;
$x657 = JS::toString('toString', $global);
if ($x655 === JS::$undefined || $x655 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x658 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 249, 27, '<image>/02_object.js');
$_TypeError =& $x658[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x658;
$x659 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x660 = $x659($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x660->class) && $x660->class === 'Error' && !isset($x660->properties['file']) && !isset($x660->properties['line']) && !isset($x660->properties['column'])) {$x660->properties['file'] = '<image>/02_object.js';$x660->properties['line'] = 249;$x660->properties['column'] = 27;$x660->attributes['file'] = $x660->attributes['line'] = $x660->attributes['column'] = 0; }
throw new JSException($x660, 249, 27, '<image>/02_object.js');
}
$x655 = JS::toObject($x655, $global);
unset($x661, $W661, $S661, $U661);
$x662 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x655, JS::toString($x657, $global), 249, 27, '<image>/02_object.js');
$x661 =& $x662[0]; list(,$W661,$S661,$U661) = $x662;
if ($U661 && (!isset($x655->extensible) || $x655->extensible)) {$x655->properties[$x657] = $x661; $x661 =& $x655->properties[$x657]; $x655->attributes[$x657] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U661 = FALSE; $W661 = TRUE; }
if (isset($S661)) {
$x664 = $S661->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x665 = $x664($global, $x655, $S661, array($x654), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x663 = $x665;
} else {
if (!$U661) {$x663 = $x654;if ($W661) { $x661 = $x654; }  }
else { $x663 = JS::$undefined; }
}
if (isset($x655->class) && $x655->class === 'Array' &&  is_int('toString') && 'toString' >= $x655->properties['length']) { $x655->properties['length'] = 'toString' + 1; };
$x679 = clone JS::$functionTemplate; $x679->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19'; $x679->parameters = array (
); $x679->scope = $scope; $x679->properties['prototype'] = clone JS::$objectTemplate; $x679->attributes['prototype'] = JS::WRITABLE; $x679->properties['prototype']->properties['constructor'] = $x679; $x679->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x679->properties['length'] = 0; $x679->attributes['length'] = 0;
unset($x680, $W680, $S680, $U680);
$x681 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 267, 7, '<image>/02_object.js');
$x680 =& $x681[0]; list(,$W680,$S680,$U680) = $x681;
$x682 = JS::toString('toLocaleString', $global);
if ($x680 === JS::$undefined || $x680 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x683 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 267, 33, '<image>/02_object.js');
$_TypeError =& $x683[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x683;
$x684 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x685 = $x684($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x685->class) && $x685->class === 'Error' && !isset($x685->properties['file']) && !isset($x685->properties['line']) && !isset($x685->properties['column'])) {$x685->properties['file'] = '<image>/02_object.js';$x685->properties['line'] = 267;$x685->properties['column'] = 33;$x685->attributes['file'] = $x685->attributes['line'] = $x685->attributes['column'] = 0; }
throw new JSException($x685, 267, 33, '<image>/02_object.js');
}
$x680 = JS::toObject($x680, $global);
unset($x686, $W686, $S686, $U686);
$x687 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x680, JS::toString($x682, $global), 267, 33, '<image>/02_object.js');
$x686 =& $x687[0]; list(,$W686,$S686,$U686) = $x687;
if ($U686 && (!isset($x680->extensible) || $x680->extensible)) {$x680->properties[$x682] = $x686; $x686 =& $x680->properties[$x682]; $x680->attributes[$x682] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U686 = FALSE; $W686 = TRUE; }
if (isset($S686)) {
$x689 = $S686->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x690 = $x689($global, $x680, $S686, array($x679), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x688 = $x690;
} else {
if (!$U686) {$x688 = $x679;if ($W686) { $x686 = $x679; }  }
else { $x688 = JS::$undefined; }
}
if (isset($x680->class) && $x680->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x680->properties['length']) { $x680->properties['length'] = 'toLocaleString' + 1; };
$x708 = clone JS::$functionTemplate; $x708->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20'; $x708->parameters = array (
); $x708->scope = $scope; $x708->properties['prototype'] = clone JS::$objectTemplate; $x708->attributes['prototype'] = JS::WRITABLE; $x708->properties['prototype']->properties['constructor'] = $x708; $x708->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x708->properties['length'] = 0; $x708->attributes['length'] = 0;
unset($x709, $W709, $S709, $U709);
$x710 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 271, 7, '<image>/02_object.js');
$x709 =& $x710[0]; list(,$W709,$S709,$U709) = $x710;
$x711 = JS::toString('valueOf', $global);
if ($x709 === JS::$undefined || $x709 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x712 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 271, 26, '<image>/02_object.js');
$_TypeError =& $x712[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x712;
$x713 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x714 = $x713($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x714->class) && $x714->class === 'Error' && !isset($x714->properties['file']) && !isset($x714->properties['line']) && !isset($x714->properties['column'])) {$x714->properties['file'] = '<image>/02_object.js';$x714->properties['line'] = 271;$x714->properties['column'] = 26;$x714->attributes['file'] = $x714->attributes['line'] = $x714->attributes['column'] = 0; }
throw new JSException($x714, 271, 26, '<image>/02_object.js');
}
$x709 = JS::toObject($x709, $global);
unset($x715, $W715, $S715, $U715);
$x716 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x709, JS::toString($x711, $global), 271, 26, '<image>/02_object.js');
$x715 =& $x716[0]; list(,$W715,$S715,$U715) = $x716;
if ($U715 && (!isset($x709->extensible) || $x709->extensible)) {$x709->properties[$x711] = $x715; $x715 =& $x709->properties[$x711]; $x709->attributes[$x711] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U715 = FALSE; $W715 = TRUE; }
if (isset($S715)) {
$x718 = $S715->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x719 = $x718($global, $x709, $S715, array($x708), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x717 = $x719;
} else {
if (!$U715) {$x717 = $x708;if ($W715) { $x715 = $x708; }  }
else { $x717 = JS::$undefined; }
}
if (isset($x709->class) && $x709->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x709->properties['length']) { $x709->properties['length'] = 'valueOf' + 1; };
$x722 = clone JS::$functionTemplate; $x722->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21'; $x722->parameters = array (
  0 => 'p',
); $x722->scope = $scope; $x722->properties['prototype'] = clone JS::$objectTemplate; $x722->attributes['prototype'] = JS::WRITABLE; $x722->properties['prototype']->properties['constructor'] = $x722; $x722->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x722->properties['length'] = 1; $x722->attributes['length'] = 0;
unset($x723, $W723, $S723, $U723);
$x724 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 279, 7, '<image>/02_object.js');
$x723 =& $x724[0]; list(,$W723,$S723,$U723) = $x724;
$x725 = JS::toString('hasOwnProperty', $global);
if ($x723 === JS::$undefined || $x723 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x726 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 279, 33, '<image>/02_object.js');
$_TypeError =& $x726[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x726;
$x727 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x728 = $x727($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x728->class) && $x728->class === 'Error' && !isset($x728->properties['file']) && !isset($x728->properties['line']) && !isset($x728->properties['column'])) {$x728->properties['file'] = '<image>/02_object.js';$x728->properties['line'] = 279;$x728->properties['column'] = 33;$x728->attributes['file'] = $x728->attributes['line'] = $x728->attributes['column'] = 0; }
throw new JSException($x728, 279, 33, '<image>/02_object.js');
}
$x723 = JS::toObject($x723, $global);
unset($x729, $W729, $S729, $U729);
$x730 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x723, JS::toString($x725, $global), 279, 33, '<image>/02_object.js');
$x729 =& $x730[0]; list(,$W729,$S729,$U729) = $x730;
if ($U729 && (!isset($x723->extensible) || $x723->extensible)) {$x723->properties[$x725] = $x729; $x729 =& $x723->properties[$x725]; $x723->attributes[$x725] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U729 = FALSE; $W729 = TRUE; }
if (isset($S729)) {
$x732 = $S729->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x733 = $x732($global, $x723, $S729, array($x722), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x731 = $x733;
} else {
if (!$U729) {$x731 = $x722;if ($W729) { $x729 = $x722; }  }
else { $x731 = JS::$undefined; }
}
if (isset($x723->class) && $x723->class === 'Array' &&  is_int('hasOwnProperty') && 'hasOwnProperty' >= $x723->properties['length']) { $x723->properties['length'] = 'hasOwnProperty' + 1; };
$x743 = clone JS::$functionTemplate; $x743->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22'; $x743->parameters = array (
  0 => 'v',
); $x743->scope = $scope; $x743->properties['prototype'] = clone JS::$objectTemplate; $x743->attributes['prototype'] = JS::WRITABLE; $x743->properties['prototype']->properties['constructor'] = $x743; $x743->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x743->properties['length'] = 1; $x743->attributes['length'] = 0;
unset($x744, $W744, $S744, $U744);
$x745 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 283, 7, '<image>/02_object.js');
$x744 =& $x745[0]; list(,$W744,$S744,$U744) = $x745;
$x746 = JS::toString('isPrototypeOf', $global);
if ($x744 === JS::$undefined || $x744 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x747 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 283, 32, '<image>/02_object.js');
$_TypeError =& $x747[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x747;
$x748 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x749 = $x748($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x749->class) && $x749->class === 'Error' && !isset($x749->properties['file']) && !isset($x749->properties['line']) && !isset($x749->properties['column'])) {$x749->properties['file'] = '<image>/02_object.js';$x749->properties['line'] = 283;$x749->properties['column'] = 32;$x749->attributes['file'] = $x749->attributes['line'] = $x749->attributes['column'] = 0; }
throw new JSException($x749, 283, 32, '<image>/02_object.js');
}
$x744 = JS::toObject($x744, $global);
unset($x750, $W750, $S750, $U750);
$x751 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x744, JS::toString($x746, $global), 283, 32, '<image>/02_object.js');
$x750 =& $x751[0]; list(,$W750,$S750,$U750) = $x751;
if ($U750 && (!isset($x744->extensible) || $x744->extensible)) {$x744->properties[$x746] = $x750; $x750 =& $x744->properties[$x746]; $x744->attributes[$x746] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U750 = FALSE; $W750 = TRUE; }
if (isset($S750)) {
$x753 = $S750->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x754 = $x753($global, $x744, $S750, array($x743), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x752 = $x754;
} else {
if (!$U750) {$x752 = $x743;if ($W750) { $x750 = $x743; }  }
else { $x752 = JS::$undefined; }
}
if (isset($x744->class) && $x744->class === 'Array' &&  is_int('isPrototypeOf') && 'isPrototypeOf' >= $x744->properties['length']) { $x744->properties['length'] = 'isPrototypeOf' + 1; };
$x757 = clone JS::$functionTemplate; $x757->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23'; $x757->parameters = array (
  0 => 'p',
); $x757->scope = $scope; $x757->properties['prototype'] = clone JS::$objectTemplate; $x757->attributes['prototype'] = JS::WRITABLE; $x757->properties['prototype']->properties['constructor'] = $x757; $x757->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x757->properties['length'] = 1; $x757->attributes['length'] = 0;
unset($x758, $W758, $S758, $U758);
$x759 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, JS::toString('prototype', $global), 300, 7, '<image>/02_object.js');
$x758 =& $x759[0]; list(,$W758,$S758,$U758) = $x759;
$x760 = JS::toString('propertyIsEnumerable', $global);
if ($x758 === JS::$undefined || $x758 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x761 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, JS::toString('TypeError', $global), 300, 39, '<image>/02_object.js');
$_TypeError =& $x761[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x761;
$x762 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x763 = $x762($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x763->class) && $x763->class === 'Error' && !isset($x763->properties['file']) && !isset($x763->properties['line']) && !isset($x763->properties['column'])) {$x763->properties['file'] = '<image>/02_object.js';$x763->properties['line'] = 300;$x763->properties['column'] = 39;$x763->attributes['file'] = $x763->attributes['line'] = $x763->attributes['column'] = 0; }
throw new JSException($x763, 300, 39, '<image>/02_object.js');
}
$x758 = JS::toObject($x758, $global);
unset($x764, $W764, $S764, $U764);
$x765 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x758, JS::toString($x760, $global), 300, 39, '<image>/02_object.js');
$x764 =& $x765[0]; list(,$W764,$S764,$U764) = $x765;
if ($U764 && (!isset($x758->extensible) || $x758->extensible)) {$x758->properties[$x760] = $x764; $x764 =& $x758->properties[$x760]; $x758->attributes[$x760] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U764 = FALSE; $W764 = TRUE; }
if (isset($S764)) {
$x767 = $S764->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x768 = $x767($global, $x758, $S764, array($x757), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x766 = $x768;
} else {
if (!$U764) {$x766 = $x757;if ($W764) { $x764 = $x757; }  }
else { $x766 = JS::$undefined; }
}
if (isset($x758->class) && $x758->class === 'Array' &&  is_int('propertyIsEnumerable') && 'propertyIsEnumerable' >= $x758->properties['length']) { $x758->properties['length'] = 'propertyIsEnumerable' + 1; };
;
return JS::$undefined;
}
