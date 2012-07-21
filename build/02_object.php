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
$x20 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 11, 13, '<image>/02_object.js');
$_TypeError =& $x20[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x20;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x21 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 11, 13, '<image>/02_object.js');
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
$x29 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 11, 9, '<image>/02_object.js');
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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x8=&$scope->properties[\'arguments\'];$x8->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x8->properties[$i]=$args[$i];$x8->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x10=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x9=$x10;if(!JS::toBoolean($x9,$global)){$x13=$_o;$x13=($x13===JS::$undefined?\'undefined\':(is_int($x13)||is_float($x13)?\'number\':(is_bool($x13)?\'boolean\':(is_string($x13)?\'string\':(is_object($x13)&&isset($x13->call)?\'function\':\'object\')))));$x12=!(((gettype($x13)===gettype(\'object\')&&$x13===\'object\'))||(((is_float($x13)||is_int($x13))&&(is_float(\'object\')||is_int(\'object\')))&&$x13==\'object\'));$x11=$x12;if(JS::toBoolean($x11,$global)){$x15=$_o;$x15=($x15===JS::$undefined?\'undefined\':(is_int($x15)||is_float($x15)?\'number\':(is_bool($x15)?\'boolean\':(is_string($x15)?\'string\':(is_object($x15)&&isset($x15->call)?\'function\':\'object\')))));$x14=!(((gettype($x15)===gettype(\'function\')&&$x15===\'function\'))||(((is_float($x15)||is_int($x15))&&(is_float(\'function\')||is_int(\'function\')))&&$x15==\'function\'));$x11=$x14;}$x9=$x11;}if(JS::toBoolean($x9,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x20=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',11,13,\'<image>/02_object.js\');$_TypeError=&$x20[0];list(,$WTypeError,$STypeError,$UTypeError)=$x20;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x21=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',11,13,\'<image>/02_object.js\');$_ReferenceError=&$x21[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x21;$x22=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,13);$x23=$x22($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x23->class)&&$x23->class===\'Error\'&&!isset($x23->properties[\'file\'])&&!isset($x23->properties[\'line\'])&&!isset($x23->properties[\'column\'])){$x23->properties[\'file\']=\'<image>/02_object.js\';$x23->properties[\'line\']=11;$x23->properties[\'column\']=13;$x23->attributes[\'file\']=$x23->attributes[\'line\']=$x23->attributes[\'column\']=0;}throw new JSException($x23,11,13,\'<image>/02_object.js\');}$x16=clone JS::$objectTemplate;unset($x24,$W24,$S24,$U24);$x29=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',11,9,\'<image>/02_object.js\');$x24=&$x29[0];list(,$W24,$S24,$U24)=$x29;$x17=$x24;$x16->prototype=$x17;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x32=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,9);$x33=$x32($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x33->class)&&$x33->class===\'Error\'&&!isset($x33->properties[\'file\'])&&!isset($x33->properties[\'line\'])&&!isset($x33->properties[\'column\'])){$x33->properties[\'file\']=\'<image>/02_object.js\';$x33->properties[\'line\']=11;$x33->properties[\'column\']=9;$x33->attributes[\'file\']=$x33->attributes[\'line\']=$x33->attributes[\'column\']=0;}throw new JSException($x33,11,9,\'<image>/02_object.js\');}$x30=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',11,9);$x31=$x30($global,$x16,$_TypeError,array(\'Object.getPrototyeOf(): Cannot get prototype of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x17=$x31;if(is_object($x17)&&$x17!==JS::$undefined){$x16=$x17;}if(isset($x16->class)&&$x16->class===\'Error\'&&!isset($x16->properties[\'file\'])&&!isset($x16->properties[\'line\'])&&!isset($x16->properties[\'column\'])){$x16->properties[\'file\']=\'<image>/02_object.js\';$x16->properties[\'line\']=11;$x16->properties[\'column\']=3;$x16->attributes[\'file\']=$x16->attributes[\'line\']=$x16->attributes[\'column\']=0;}throw new JSException($x16,11,3,\'<image>/02_object.js\');}return$_o->prototype;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x39 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x39[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x39;
$x40 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x41 = $x40($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x41->class) && $x41->class === 'Error' && !isset($x41->properties['file']) && !isset($x41->properties['line']) && !isset($x41->properties['column'])) {$x41->properties['file'] = $file;$x41->properties['line'] = $line;$x41->properties['column'] = $column;$x41->attributes['file'] = $x41->attributes['line'] = $x41->attributes['column'] = 0; }
throw new JSException($x41, $line, $column, $file);
}
$W38 = $S38 = $U38 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x38 =& $lookup->properties[$id]; $W38 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S38 = $lookup->setters[$id]; }
else { $x38 = JS::$undefined; $U38 = TRUE; }
return array(&$x38, $W38, $S38, $U38);
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x39=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x39[0];list(,$WTypeError,$STypeError,$UTypeError)=$x39;$x40=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x41=$x40($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x41->class)&&$x41->class===\'Error\'&&!isset($x41->properties[\'file\'])&&!isset($x41->properties[\'line\'])&&!isset($x41->properties[\'column\'])){$x41->properties[\'file\']=$file;$x41->properties[\'line\']=$line;$x41->properties[\'column\']=$column;$x41->attributes[\'file\']=$x41->attributes[\'line\']=$x41->attributes[\'column\']=0;}throw new JSException($x41,$line,$column,$file);}$W38=$S38=$U38=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x38=&$lookup->properties[$id];$W38=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S38=$lookup->setters[$id];}else{$x38=JS::$undefined;$U38=TRUE;}return array(&$x38,$W38,$S38,$U38);}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x47 =& $scope->properties['arguments'];
$x47->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x47->properties[$i] = $args[$i];
$x47->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['p'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x49 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x48 = $x49;
if (!JS::toBoolean($x48, $global)) {
$x52 = $_o;
$x52 = ($x52 === JS::$undefined ? 'undefined' : (is_int($x52) || is_float($x52) ? 'number' : (is_bool($x52) ? 'boolean' : (is_string($x52) ? 'string' : (is_object($x52) && isset($x52->call) ? 'function' : 'object')))));
$x51 = !(((gettype($x52) === gettype('object') && $x52 === 'object'))|| (((is_float($x52) || is_int($x52)) && (is_float('object') || is_int('object'))) && $x52 == 'object'));
$x50 = $x51;
if (JS::toBoolean($x50, $global)) {
$x54 = $_o;
$x54 = ($x54 === JS::$undefined ? 'undefined' : (is_int($x54) || is_float($x54) ? 'number' : (is_bool($x54) ? 'boolean' : (is_string($x54) ? 'string' : (is_object($x54) && isset($x54->call) ? 'function' : 'object')))));
$x53 = !(((gettype($x54) === gettype('function') && $x54 === 'function'))|| (((is_float($x54) || is_int($x54)) && (is_float('function') || is_int('function'))) && $x54 == 'function'));
$x50 = $x53; }
$x48 = $x50; }
if (JS::toBoolean($x48, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x57 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 19, 13, '<image>/02_object.js');
$_TypeError =& $x57[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x57;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x58 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 19, 13, '<image>/02_object.js');
$_ReferenceError =& $x58[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x58;
$x59 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 13);
$x60 = $x59($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error' && !isset($x60->properties['file']) && !isset($x60->properties['line']) && !isset($x60->properties['column'])) {$x60->properties['file'] = '<image>/02_object.js';$x60->properties['line'] = 19;$x60->properties['column'] = 13;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 19, 13, '<image>/02_object.js');
}
$x55 = clone JS::$objectTemplate;
unset($x61, $W61, $S61, $U61);
$x62 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 19, 9, '<image>/02_object.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
$x56 = $x61;
$x55->prototype = $x56;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x65 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x66 = $x65($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x66->class) && $x66->class === 'Error' && !isset($x66->properties['file']) && !isset($x66->properties['line']) && !isset($x66->properties['column'])) {$x66->properties['file'] = '<image>/02_object.js';$x66->properties['line'] = 19;$x66->properties['column'] = 9;$x66->attributes['file'] = $x66->attributes['line'] = $x66->attributes['column'] = 0; }
throw new JSException($x66, 19, 9, '<image>/02_object.js');
}
$x63 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 19, 9);
$x64 = $x63($global, $x55, $_TypeError, array('Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x56 = $x64;
if (is_object($x56) && $x56 !== JS::$undefined) { $x55 = $x56; }
if (isset($x55->class) && $x55->class === 'Error' && !isset($x55->properties['file']) && !isset($x55->properties['line']) && !isset($x55->properties['column'])) {$x55->properties['file'] = '<image>/02_object.js';$x55->properties['line'] = 19;$x55->properties['column'] = 3;$x55->attributes['file'] = $x55->attributes['line'] = $x55->attributes['column'] = 0; }
throw new JSException($x55, 19, 3, '<image>/02_object.js');;
};
if (JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties) || array_key_exists($_p,$_o->attributes), $global)), $global)) {

return JS::$undefined;;
};
$x67 = clone JS::$objectTemplate;
$scope->properties['desc'] = JS::$undefined; $_desc =& $scope->properties['desc'];
$Udesc = FALSE;
$_desc = $x67;
if (JS::toBoolean(array_key_exists($_p,$_o->properties), $global)) {
unset($x68, $W68, $S68, $U68);
$x69 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_o, (string) $_p, 29, 17, '<image>/02_object.js');
$x68 =& $x69[0]; list(,$W68,$S68,$U68) = $x69;
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x70 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 29, 14, '<image>/02_object.js');
$_TypeError =& $x70[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x70;
$x71 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x72 = $x71($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x72->class) && $x72->class === 'Error' && !isset($x72->properties['file']) && !isset($x72->properties['line']) && !isset($x72->properties['column'])) {$x72->properties['file'] = '<image>/02_object.js';$x72->properties['line'] = 29;$x72->properties['column'] = 14;$x72->attributes['file'] = $x72->attributes['line'] = $x72->attributes['column'] = 0; }
throw new JSException($x72, 29, 14, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x73, $W73, $S73, $U73);
$x74 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, (string) 'value', 29, 14, '<image>/02_object.js');
$x73 =& $x74[0]; list(,$W73,$S73,$U73) = $x74;
if ($U73 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['value'] = $x73; $x73 =& $_desc->properties['value']; $_desc->attributes['value'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U73 = FALSE; $W73 = TRUE; }
if (isset($S73)) {
$x76 = $S73->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 29, 14);
$x77 = $x76($global, $_desc, $S73, array($x68), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x75 = $x77;
} else {
if (!$U73) {$x75 = $x68;if ($W73) { $x73 = $x68; }  }
else { $x75 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('value') && 'value' >= $_desc->properties['length']) { $_desc->properties['length'] = 'value' + 1; };
$x78 = JS::toBoolean($_o->attributes[$_p] & JS::WRITABLE, $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x79 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 30, 17, '<image>/02_object.js');
$_TypeError =& $x79[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x79;
$x80 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x81 = $x80($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x81->class) && $x81->class === 'Error' && !isset($x81->properties['file']) && !isset($x81->properties['line']) && !isset($x81->properties['column'])) {$x81->properties['file'] = '<image>/02_object.js';$x81->properties['line'] = 30;$x81->properties['column'] = 17;$x81->attributes['file'] = $x81->attributes['line'] = $x81->attributes['column'] = 0; }
throw new JSException($x81, 30, 17, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x82, $W82, $S82, $U82);
$x83 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, (string) 'writable', 30, 17, '<image>/02_object.js');
$x82 =& $x83[0]; list(,$W82,$S82,$U82) = $x83;
if ($U82 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['writable'] = $x82; $x82 =& $_desc->properties['writable']; $_desc->attributes['writable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U82 = FALSE; $W82 = TRUE; }
if (isset($S82)) {
$x85 = $S82->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 30, 17);
$x86 = $x85($global, $_desc, $S82, array($x78), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x84 = $x86;
} else {
if (!$U82) {$x84 = $x78;if ($W82) { $x82 = $x78; }  }
else { $x84 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('writable') && 'writable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'writable' + 1; };;
}
else {
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_GETTER, $global)) {
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x87 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 34, 13, '<image>/02_object.js');
$_TypeError =& $x87[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x87;
$x88 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x89 = $x88($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x89->class) && $x89->class === 'Error' && !isset($x89->properties['file']) && !isset($x89->properties['line']) && !isset($x89->properties['column'])) {$x89->properties['file'] = '<image>/02_object.js';$x89->properties['line'] = 34;$x89->properties['column'] = 13;$x89->attributes['file'] = $x89->attributes['line'] = $x89->attributes['column'] = 0; }
throw new JSException($x89, 34, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x90, $W90, $S90, $U90);
$x91 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, (string) 'get', 34, 13, '<image>/02_object.js');
$x90 =& $x91[0]; list(,$W90,$S90,$U90) = $x91;
if ($U90 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['get'] = $x90; $x90 =& $_desc->properties['get']; $_desc->attributes['get'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U90 = FALSE; $W90 = TRUE; }
if (isset($S90)) {
$x93 = $S90->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 34, 13);
$x94 = $x93($global, $_desc, $S90, array($_o->getters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x92 = $x94;
} else {
if (!$U90) {$x92 = $_o->getters[$_p];if ($W90) { $x90 = $_o->getters[$_p]; }  }
else { $x92 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('get') && 'get' >= $_desc->properties['length']) { $_desc->properties['length'] = 'get' + 1; };
};
if (JS::toBoolean($_o->attributes[$_p] & JS::HAS_SETTER, $global)) {
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x95 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 38, 13, '<image>/02_object.js');
$_TypeError =& $x95[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x95;
$x96 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x97 = $x96($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error' && !isset($x97->properties['file']) && !isset($x97->properties['line']) && !isset($x97->properties['column'])) {$x97->properties['file'] = '<image>/02_object.js';$x97->properties['line'] = 38;$x97->properties['column'] = 13;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 38, 13, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x98, $W98, $S98, $U98);
$x99 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, (string) 'set', 38, 13, '<image>/02_object.js');
$x98 =& $x99[0]; list(,$W98,$S98,$U98) = $x99;
if ($U98 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['set'] = $x98; $x98 =& $_desc->properties['set']; $_desc->attributes['set'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U98 = FALSE; $W98 = TRUE; }
if (isset($S98)) {
$x101 = $S98->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 38, 13);
$x102 = $x101($global, $_desc, $S98, array($_o->setters[$_p]), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x100 = $x102;
} else {
if (!$U98) {$x100 = $_o->setters[$_p];if ($W98) { $x98 = $_o->setters[$_p]; }  }
else { $x100 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('set') && 'set' >= $_desc->properties['length']) { $_desc->properties['length'] = 'set' + 1; };
};;
};
$x103 = JS::toBoolean($_o->attributes[$_p] & JS::ENUMERABLE, $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x104 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 42, 18, '<image>/02_object.js');
$_TypeError =& $x104[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x104;
$x105 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x106 = $x105($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x106->class) && $x106->class === 'Error' && !isset($x106->properties['file']) && !isset($x106->properties['line']) && !isset($x106->properties['column'])) {$x106->properties['file'] = '<image>/02_object.js';$x106->properties['line'] = 42;$x106->properties['column'] = 18;$x106->attributes['file'] = $x106->attributes['line'] = $x106->attributes['column'] = 0; }
throw new JSException($x106, 42, 18, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x107, $W107, $S107, $U107);
$x108 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, (string) 'enumerable', 42, 18, '<image>/02_object.js');
$x107 =& $x108[0]; list(,$W107,$S107,$U107) = $x108;
if ($U107 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['enumerable'] = $x107; $x107 =& $_desc->properties['enumerable']; $_desc->attributes['enumerable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U107 = FALSE; $W107 = TRUE; }
if (isset($S107)) {
$x110 = $S107->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 42, 18);
$x111 = $x110($global, $_desc, $S107, array($x103), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x109 = $x111;
} else {
if (!$U107) {$x109 = $x103;if ($W107) { $x107 = $x103; }  }
else { $x109 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('enumerable') && 'enumerable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'enumerable' + 1; };
$x112 = JS::toBoolean($_o->attributes[$_p] & JS::CONFIGURABLE, $global);
if ($_desc === JS::$undefined || $_desc === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x113 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 43, 20, '<image>/02_object.js');
$_TypeError =& $x113[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x113;
$x114 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x115 = $x114($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x115->class) && $x115->class === 'Error' && !isset($x115->properties['file']) && !isset($x115->properties['line']) && !isset($x115->properties['column'])) {$x115->properties['file'] = '<image>/02_object.js';$x115->properties['line'] = 43;$x115->properties['column'] = 20;$x115->attributes['file'] = $x115->attributes['line'] = $x115->attributes['column'] = 0; }
throw new JSException($x115, 43, 20, '<image>/02_object.js');
}
$_desc = JS::toObject($_desc, $global);
unset($x116, $W116, $S116, $U116);
$x117 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_desc, (string) 'configurable', 43, 20, '<image>/02_object.js');
$x116 =& $x117[0]; list(,$W116,$S116,$U116) = $x117;
if ($U116 && (!isset($_desc->extensible) || $_desc->extensible)) {$_desc->properties['configurable'] = $x116; $x116 =& $_desc->properties['configurable']; $_desc->attributes['configurable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U116 = FALSE; $W116 = TRUE; }
if (isset($S116)) {
$x119 = $S116->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 43, 20);
$x120 = $x119($global, $_desc, $S116, array($x112), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x118 = $x120;
} else {
if (!$U116) {$x118 = $x112;if ($W116) { $x116 = $x112; }  }
else { $x118 = JS::$undefined; }
}
if (isset($_desc->class) && $_desc->class === 'Array' &&  is_int('configurable') && 'configurable' >= $_desc->properties['length']) { $_desc->properties['length'] = 'configurable' + 1; };
return $_desc;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x47=&$scope->properties[\'arguments\'];$x47->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x47->properties[$i]=$args[$i];$x47->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;$x49=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x48=$x49;if(!JS::toBoolean($x48,$global)){$x52=$_o;$x52=($x52===JS::$undefined?\'undefined\':(is_int($x52)||is_float($x52)?\'number\':(is_bool($x52)?\'boolean\':(is_string($x52)?\'string\':(is_object($x52)&&isset($x52->call)?\'function\':\'object\')))));$x51=!(((gettype($x52)===gettype(\'object\')&&$x52===\'object\'))||(((is_float($x52)||is_int($x52))&&(is_float(\'object\')||is_int(\'object\')))&&$x52==\'object\'));$x50=$x51;if(JS::toBoolean($x50,$global)){$x54=$_o;$x54=($x54===JS::$undefined?\'undefined\':(is_int($x54)||is_float($x54)?\'number\':(is_bool($x54)?\'boolean\':(is_string($x54)?\'string\':(is_object($x54)&&isset($x54->call)?\'function\':\'object\')))));$x53=!(((gettype($x54)===gettype(\'function\')&&$x54===\'function\'))||(((is_float($x54)||is_int($x54))&&(is_float(\'function\')||is_int(\'function\')))&&$x54==\'function\'));$x50=$x53;}$x48=$x50;}if(JS::toBoolean($x48,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x57=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',19,13,\'<image>/02_object.js\');$_TypeError=&$x57[0];list(,$WTypeError,$STypeError,$UTypeError)=$x57;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x58=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',19,13,\'<image>/02_object.js\');$_ReferenceError=&$x58[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x58;$x59=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,13);$x60=$x59($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'&&!isset($x60->properties[\'file\'])&&!isset($x60->properties[\'line\'])&&!isset($x60->properties[\'column\'])){$x60->properties[\'file\']=\'<image>/02_object.js\';$x60->properties[\'line\']=19;$x60->properties[\'column\']=13;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,19,13,\'<image>/02_object.js\');}$x55=clone JS::$objectTemplate;unset($x61,$W61,$S61,$U61);$x62=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',19,9,\'<image>/02_object.js\');$x61=&$x62[0];list(,$W61,$S61,$U61)=$x62;$x56=$x61;$x55->prototype=$x56;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x65=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x66=$x65($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x66->class)&&$x66->class===\'Error\'&&!isset($x66->properties[\'file\'])&&!isset($x66->properties[\'line\'])&&!isset($x66->properties[\'column\'])){$x66->properties[\'file\']=\'<image>/02_object.js\';$x66->properties[\'line\']=19;$x66->properties[\'column\']=9;$x66->attributes[\'file\']=$x66->attributes[\'line\']=$x66->attributes[\'column\']=0;}throw new JSException($x66,19,9,\'<image>/02_object.js\');}$x63=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',19,9);$x64=$x63($global,$x55,$_TypeError,array(\'Object.getOwnPropertyDescriptor(): Cannot get property descriptor of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x56=$x64;if(is_object($x56)&&$x56!==JS::$undefined){$x55=$x56;}if(isset($x55->class)&&$x55->class===\'Error\'&&!isset($x55->properties[\'file\'])&&!isset($x55->properties[\'line\'])&&!isset($x55->properties[\'column\'])){$x55->properties[\'file\']=\'<image>/02_object.js\';$x55->properties[\'line\']=19;$x55->properties[\'column\']=3;$x55->attributes[\'file\']=$x55->attributes[\'line\']=$x55->attributes[\'column\']=0;}throw new JSException($x55,19,3,\'<image>/02_object.js\');}if(JS::toBoolean((!JS::toBoolean(array_key_exists($_p,$_o->properties)||array_key_exists($_p,$_o->attributes),$global)),$global)){return JS::$undefined;}$x67=clone JS::$objectTemplate;$scope->properties[\'desc\']=JS::$undefined;$_desc=&$scope->properties[\'desc\'];$Udesc=FALSE;$_desc=$x67;if(JS::toBoolean(array_key_exists($_p,$_o->properties),$global)){unset($x68,$W68,$S68,$U68);$x69=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_o,(string)$_p,29,17,\'<image>/02_object.js\');$x68=&$x69[0];list(,$W68,$S68,$U68)=$x69;if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x70=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',29,14,\'<image>/02_object.js\');$_TypeError=&$x70[0];list(,$WTypeError,$STypeError,$UTypeError)=$x70;$x71=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x72=$x71($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x72->class)&&$x72->class===\'Error\'&&!isset($x72->properties[\'file\'])&&!isset($x72->properties[\'line\'])&&!isset($x72->properties[\'column\'])){$x72->properties[\'file\']=\'<image>/02_object.js\';$x72->properties[\'line\']=29;$x72->properties[\'column\']=14;$x72->attributes[\'file\']=$x72->attributes[\'line\']=$x72->attributes[\'column\']=0;}throw new JSException($x72,29,14,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x73,$W73,$S73,$U73);$x74=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,(string)\'value\',29,14,\'<image>/02_object.js\');$x73=&$x74[0];list(,$W73,$S73,$U73)=$x74;if($U73&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'value\']=$x73;$x73=&$_desc->properties[\'value\'];$_desc->attributes[\'value\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U73=FALSE;$W73=TRUE;}if(isset($S73)){$x76=$S73->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',29,14);$x77=$x76($global,$_desc,$S73,array($x68),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x75=$x77;}else{if(!$U73){$x75=$x68;if($W73){$x73=$x68;}}else{$x75=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'value\')&&\'value\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'value\'+1;}$x78=JS::toBoolean($_o->attributes[$_p]&JS::WRITABLE,$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x79=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',30,17,\'<image>/02_object.js\');$_TypeError=&$x79[0];list(,$WTypeError,$STypeError,$UTypeError)=$x79;$x80=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x81=$x80($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x81->class)&&$x81->class===\'Error\'&&!isset($x81->properties[\'file\'])&&!isset($x81->properties[\'line\'])&&!isset($x81->properties[\'column\'])){$x81->properties[\'file\']=\'<image>/02_object.js\';$x81->properties[\'line\']=30;$x81->properties[\'column\']=17;$x81->attributes[\'file\']=$x81->attributes[\'line\']=$x81->attributes[\'column\']=0;}throw new JSException($x81,30,17,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x82,$W82,$S82,$U82);$x83=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,(string)\'writable\',30,17,\'<image>/02_object.js\');$x82=&$x83[0];list(,$W82,$S82,$U82)=$x83;if($U82&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'writable\']=$x82;$x82=&$_desc->properties[\'writable\'];$_desc->attributes[\'writable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U82=FALSE;$W82=TRUE;}if(isset($S82)){$x85=$S82->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',30,17);$x86=$x85($global,$_desc,$S82,array($x78),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x84=$x86;}else{if(!$U82){$x84=$x78;if($W82){$x82=$x78;}}else{$x84=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'writable\')&&\'writable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'writable\'+1;}}else{if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_GETTER,$global)){if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x87=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',34,13,\'<image>/02_object.js\');$_TypeError=&$x87[0];list(,$WTypeError,$STypeError,$UTypeError)=$x87;$x88=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x89=$x88($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x89->class)&&$x89->class===\'Error\'&&!isset($x89->properties[\'file\'])&&!isset($x89->properties[\'line\'])&&!isset($x89->properties[\'column\'])){$x89->properties[\'file\']=\'<image>/02_object.js\';$x89->properties[\'line\']=34;$x89->properties[\'column\']=13;$x89->attributes[\'file\']=$x89->attributes[\'line\']=$x89->attributes[\'column\']=0;}throw new JSException($x89,34,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x90,$W90,$S90,$U90);$x91=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,(string)\'get\',34,13,\'<image>/02_object.js\');$x90=&$x91[0];list(,$W90,$S90,$U90)=$x91;if($U90&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'get\']=$x90;$x90=&$_desc->properties[\'get\'];$_desc->attributes[\'get\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U90=FALSE;$W90=TRUE;}if(isset($S90)){$x93=$S90->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',34,13);$x94=$x93($global,$_desc,$S90,array($_o->getters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x92=$x94;}else{if(!$U90){$x92=$_o->getters[$_p];if($W90){$x90=$_o->getters[$_p];}}else{$x92=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'get\')&&\'get\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'get\'+1;}}if(JS::toBoolean($_o->attributes[$_p]&JS::HAS_SETTER,$global)){if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x95=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',38,13,\'<image>/02_object.js\');$_TypeError=&$x95[0];list(,$WTypeError,$STypeError,$UTypeError)=$x95;$x96=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x97=$x96($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'&&!isset($x97->properties[\'file\'])&&!isset($x97->properties[\'line\'])&&!isset($x97->properties[\'column\'])){$x97->properties[\'file\']=\'<image>/02_object.js\';$x97->properties[\'line\']=38;$x97->properties[\'column\']=13;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,38,13,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x98,$W98,$S98,$U98);$x99=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,(string)\'set\',38,13,\'<image>/02_object.js\');$x98=&$x99[0];list(,$W98,$S98,$U98)=$x99;if($U98&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'set\']=$x98;$x98=&$_desc->properties[\'set\'];$_desc->attributes[\'set\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U98=FALSE;$W98=TRUE;}if(isset($S98)){$x101=$S98->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',38,13);$x102=$x101($global,$_desc,$S98,array($_o->setters[$_p]),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x100=$x102;}else{if(!$U98){$x100=$_o->setters[$_p];if($W98){$x98=$_o->setters[$_p];}}else{$x100=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'set\')&&\'set\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'set\'+1;}}}$x103=JS::toBoolean($_o->attributes[$_p]&JS::ENUMERABLE,$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x104=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',42,18,\'<image>/02_object.js\');$_TypeError=&$x104[0];list(,$WTypeError,$STypeError,$UTypeError)=$x104;$x105=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x106=$x105($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x106->class)&&$x106->class===\'Error\'&&!isset($x106->properties[\'file\'])&&!isset($x106->properties[\'line\'])&&!isset($x106->properties[\'column\'])){$x106->properties[\'file\']=\'<image>/02_object.js\';$x106->properties[\'line\']=42;$x106->properties[\'column\']=18;$x106->attributes[\'file\']=$x106->attributes[\'line\']=$x106->attributes[\'column\']=0;}throw new JSException($x106,42,18,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x107,$W107,$S107,$U107);$x108=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,(string)\'enumerable\',42,18,\'<image>/02_object.js\');$x107=&$x108[0];list(,$W107,$S107,$U107)=$x108;if($U107&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'enumerable\']=$x107;$x107=&$_desc->properties[\'enumerable\'];$_desc->attributes[\'enumerable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U107=FALSE;$W107=TRUE;}if(isset($S107)){$x110=$S107->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',42,18);$x111=$x110($global,$_desc,$S107,array($x103),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x109=$x111;}else{if(!$U107){$x109=$x103;if($W107){$x107=$x103;}}else{$x109=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'enumerable\')&&\'enumerable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'enumerable\'+1;}$x112=JS::toBoolean($_o->attributes[$_p]&JS::CONFIGURABLE,$global);if($_desc===JS::$undefined||$_desc===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x113=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',43,20,\'<image>/02_object.js\');$_TypeError=&$x113[0];list(,$WTypeError,$STypeError,$UTypeError)=$x113;$x114=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x115=$x114($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x115->class)&&$x115->class===\'Error\'&&!isset($x115->properties[\'file\'])&&!isset($x115->properties[\'line\'])&&!isset($x115->properties[\'column\'])){$x115->properties[\'file\']=\'<image>/02_object.js\';$x115->properties[\'line\']=43;$x115->properties[\'column\']=20;$x115->attributes[\'file\']=$x115->attributes[\'line\']=$x115->attributes[\'column\']=0;}throw new JSException($x115,43,20,\'<image>/02_object.js\');}$_desc=JS::toObject($_desc,$global);unset($x116,$W116,$S116,$U116);$x117=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global,$scope,$_desc,(string)\'configurable\',43,20,\'<image>/02_object.js\');$x116=&$x117[0];list(,$W116,$S116,$U116)=$x117;if($U116&&(!isset($_desc->extensible)||$_desc->extensible)){$_desc->properties[\'configurable\']=$x116;$x116=&$_desc->properties[\'configurable\'];$_desc->attributes[\'configurable\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U116=FALSE;$W116=TRUE;}if(isset($S116)){$x119=$S116->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',43,20);$x120=$x119($global,$_desc,$S116,array($x112),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x118=$x120;}else{if(!$U116){$x118=$x112;if($W116){$x116=$x112;}}else{$x118=JS::$undefined;}}if(isset($_desc->class)&&$_desc->class===\'Array\'&&is_int(\'configurable\')&&\'configurable\'>=$_desc->properties[\'length\']){$_desc->properties[\'length\']=\'configurable\'+1;}return$_desc;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x133 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x132 = $x133;
if (!JS::toBoolean($x132, $global)) {
$x136 = $_o;
$x136 = ($x136 === JS::$undefined ? 'undefined' : (is_int($x136) || is_float($x136) ? 'number' : (is_bool($x136) ? 'boolean' : (is_string($x136) ? 'string' : (is_object($x136) && isset($x136->call) ? 'function' : 'object')))));
$x135 = !(((gettype($x136) === gettype('object') && $x136 === 'object'))|| (((is_float($x136) || is_int($x136)) && (is_float('object') || is_int('object'))) && $x136 == 'object'));
$x134 = $x135;
if (JS::toBoolean($x134, $global)) {
$x138 = $_o;
$x138 = ($x138 === JS::$undefined ? 'undefined' : (is_int($x138) || is_float($x138) ? 'number' : (is_bool($x138) ? 'boolean' : (is_string($x138) ? 'string' : (is_object($x138) && isset($x138->call) ? 'function' : 'object')))));
$x137 = !(((gettype($x138) === gettype('function') && $x138 === 'function'))|| (((is_float($x138) || is_int($x138)) && (is_float('function') || is_int('function'))) && $x138 == 'function'));
$x134 = $x137; }
$x132 = $x134; }
if (JS::toBoolean($x132, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x141 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 50, 13, '<image>/02_object.js');
$_TypeError =& $x141[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x141;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x142 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 50, 13, '<image>/02_object.js');
$_ReferenceError =& $x142[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x142;
$x143 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 13);
$x144 = $x143($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x144->class) && $x144->class === 'Error' && !isset($x144->properties['file']) && !isset($x144->properties['line']) && !isset($x144->properties['column'])) {$x144->properties['file'] = '<image>/02_object.js';$x144->properties['line'] = 50;$x144->properties['column'] = 13;$x144->attributes['file'] = $x144->attributes['line'] = $x144->attributes['column'] = 0; }
throw new JSException($x144, 50, 13, '<image>/02_object.js');
}
$x139 = clone JS::$objectTemplate;
unset($x145, $W145, $S145, $U145);
$x146 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 50, 9, '<image>/02_object.js');
$x145 =& $x146[0]; list(,$W145,$S145,$U145) = $x146;
$x140 = $x145;
$x139->prototype = $x140;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x149 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x150 = $x149($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x150->class) && $x150->class === 'Error' && !isset($x150->properties['file']) && !isset($x150->properties['line']) && !isset($x150->properties['column'])) {$x150->properties['file'] = '<image>/02_object.js';$x150->properties['line'] = 50;$x150->properties['column'] = 9;$x150->attributes['file'] = $x150->attributes['line'] = $x150->attributes['column'] = 0; }
throw new JSException($x150, 50, 9, '<image>/02_object.js');
}
$x147 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 50, 9);
$x148 = $x147($global, $x139, $_TypeError, array('Object.getOwnPropertyNames(): Cannot get property names of non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x140 = $x148;
if (is_object($x140) && $x140 !== JS::$undefined) { $x139 = $x140; }
if (isset($x139->class) && $x139->class === 'Error' && !isset($x139->properties['file']) && !isset($x139->properties['line']) && !isset($x139->properties['column'])) {$x139->properties['file'] = '<image>/02_object.js';$x139->properties['line'] = 50;$x139->properties['column'] = 3;$x139->attributes['file'] = $x139->attributes['line'] = $x139->attributes['column'] = 0; }
throw new JSException($x139, 50, 3, '<image>/02_object.js');;
};
$x151 = clone JS::$arrayTemplate;
$x151->properties['length'] = 0;
$x151->attributes['length'] = JS::WRITABLE;
$scope->properties['names'] = JS::$undefined; $_names =& $scope->properties['names'];
$Unames = FALSE;
$_names = $x151;
foreach (array_unique(array_merge(array_keys($_o->properties), array_keys($_o->attributes))) as $i => $name) {;
if ($_names === JS::$undefined || $_names === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x153 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 56, 13, '<image>/02_object.js');
$_TypeError =& $x153[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x153;
$x154 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x155 = $x154($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x155->class) && $x155->class === 'Error' && !isset($x155->properties['file']) && !isset($x155->properties['line']) && !isset($x155->properties['column'])) {$x155->properties['file'] = '<image>/02_object.js';$x155->properties['line'] = 56;$x155->properties['column'] = 13;$x155->attributes['file'] = $x155->attributes['line'] = $x155->attributes['column'] = 0; }
throw new JSException($x155, 56, 13, '<image>/02_object.js');
}
$x152 = JS::toObject($_names, $global);
unset($x156, $W156, $S156, $U156);
$x157 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x152, (string) 'push', 56, 13, '<image>/02_object.js');
$x156 =& $x157[0]; list(,$W156,$S156,$U156) = $x157;
if (!(is_object($x156) && isset($x156->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x160 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 56, 13, '<image>/02_object.js');
$_TypeError =& $x160[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x160;
$x161 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x162 = $x161($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x162->class) && $x162->class === 'Error' && !isset($x162->properties['file']) && !isset($x162->properties['line']) && !isset($x162->properties['column'])) {$x162->properties['file'] = '<image>/02_object.js';$x162->properties['line'] = 56;$x162->properties['column'] = 13;$x162->attributes['file'] = $x162->attributes['line'] = $x162->attributes['column'] = 0; }
throw new JSException($x162, 56, 13, '<image>/02_object.js');
}
$x158 = $x156->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 56, 13);
$x159 = $x158($global, $x152, $x156, array($name), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
};
return $_names;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x131=&$scope->properties[\'arguments\'];$x131->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x131->properties[$i]=$args[$i];$x131->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x133=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x132=$x133;if(!JS::toBoolean($x132,$global)){$x136=$_o;$x136=($x136===JS::$undefined?\'undefined\':(is_int($x136)||is_float($x136)?\'number\':(is_bool($x136)?\'boolean\':(is_string($x136)?\'string\':(is_object($x136)&&isset($x136->call)?\'function\':\'object\')))));$x135=!(((gettype($x136)===gettype(\'object\')&&$x136===\'object\'))||(((is_float($x136)||is_int($x136))&&(is_float(\'object\')||is_int(\'object\')))&&$x136==\'object\'));$x134=$x135;if(JS::toBoolean($x134,$global)){$x138=$_o;$x138=($x138===JS::$undefined?\'undefined\':(is_int($x138)||is_float($x138)?\'number\':(is_bool($x138)?\'boolean\':(is_string($x138)?\'string\':(is_object($x138)&&isset($x138->call)?\'function\':\'object\')))));$x137=!(((gettype($x138)===gettype(\'function\')&&$x138===\'function\'))||(((is_float($x138)||is_int($x138))&&(is_float(\'function\')||is_int(\'function\')))&&$x138==\'function\'));$x134=$x137;}$x132=$x134;}if(JS::toBoolean($x132,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x141=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',50,13,\'<image>/02_object.js\');$_TypeError=&$x141[0];list(,$WTypeError,$STypeError,$UTypeError)=$x141;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x142=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',50,13,\'<image>/02_object.js\');$_ReferenceError=&$x142[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x142;$x143=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,13);$x144=$x143($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x144->class)&&$x144->class===\'Error\'&&!isset($x144->properties[\'file\'])&&!isset($x144->properties[\'line\'])&&!isset($x144->properties[\'column\'])){$x144->properties[\'file\']=\'<image>/02_object.js\';$x144->properties[\'line\']=50;$x144->properties[\'column\']=13;$x144->attributes[\'file\']=$x144->attributes[\'line\']=$x144->attributes[\'column\']=0;}throw new JSException($x144,50,13,\'<image>/02_object.js\');}$x139=clone JS::$objectTemplate;unset($x145,$W145,$S145,$U145);$x146=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',50,9,\'<image>/02_object.js\');$x145=&$x146[0];list(,$W145,$S145,$U145)=$x146;$x140=$x145;$x139->prototype=$x140;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x149=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x150=$x149($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x150->class)&&$x150->class===\'Error\'&&!isset($x150->properties[\'file\'])&&!isset($x150->properties[\'line\'])&&!isset($x150->properties[\'column\'])){$x150->properties[\'file\']=\'<image>/02_object.js\';$x150->properties[\'line\']=50;$x150->properties[\'column\']=9;$x150->attributes[\'file\']=$x150->attributes[\'line\']=$x150->attributes[\'column\']=0;}throw new JSException($x150,50,9,\'<image>/02_object.js\');}$x147=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',50,9);$x148=$x147($global,$x139,$_TypeError,array(\'Object.getOwnPropertyNames(): Cannot get property names of non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x140=$x148;if(is_object($x140)&&$x140!==JS::$undefined){$x139=$x140;}if(isset($x139->class)&&$x139->class===\'Error\'&&!isset($x139->properties[\'file\'])&&!isset($x139->properties[\'line\'])&&!isset($x139->properties[\'column\'])){$x139->properties[\'file\']=\'<image>/02_object.js\';$x139->properties[\'line\']=50;$x139->properties[\'column\']=3;$x139->attributes[\'file\']=$x139->attributes[\'line\']=$x139->attributes[\'column\']=0;}throw new JSException($x139,50,3,\'<image>/02_object.js\');}$x151=clone JS::$arrayTemplate;$x151->properties[\'length\']=0;$x151->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'names\']=JS::$undefined;$_names=&$scope->properties[\'names\'];$Unames=FALSE;$_names=$x151;foreach(array_unique(array_merge(array_keys($_o->properties),array_keys($_o->attributes)))as$i=>$name){;if($_names===JS::$undefined||$_names===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x153=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',56,13,\'<image>/02_object.js\');$_TypeError=&$x153[0];list(,$WTypeError,$STypeError,$UTypeError)=$x153;$x154=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x155=$x154($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x155->class)&&$x155->class===\'Error\'&&!isset($x155->properties[\'file\'])&&!isset($x155->properties[\'line\'])&&!isset($x155->properties[\'column\'])){$x155->properties[\'file\']=\'<image>/02_object.js\';$x155->properties[\'line\']=56;$x155->properties[\'column\']=13;$x155->attributes[\'file\']=$x155->attributes[\'line\']=$x155->attributes[\'column\']=0;}throw new JSException($x155,56,13,\'<image>/02_object.js\');}$x152=JS::toObject($_names,$global);unset($x156,$W156,$S156,$U156);$x157=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x152,(string)\'push\',56,13,\'<image>/02_object.js\');$x156=&$x157[0];list(,$W156,$S156,$U156)=$x157;if(!(is_object($x156)&&isset($x156->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x160=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',56,13,\'<image>/02_object.js\');$_TypeError=&$x160[0];list(,$WTypeError,$STypeError,$UTypeError)=$x160;$x161=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x162=$x161($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x162->class)&&$x162->class===\'Error\'&&!isset($x162->properties[\'file\'])&&!isset($x162->properties[\'line\'])&&!isset($x162->properties[\'column\'])){$x162->properties[\'file\']=\'<image>/02_object.js\';$x162->properties[\'line\']=56;$x162->properties[\'column\']=13;$x162->attributes[\'file\']=$x162->attributes[\'line\']=$x162->attributes[\'column\']=0;}throw new JSException($x162,56,13,\'<image>/02_object.js\');}$x158=$x156->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',56,13);$x159=$x158($global,$x152,$x156,array($name),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_names;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x176 = $_o;
$x176 = ($x176 === JS::$undefined ? 'undefined' : (is_int($x176) || is_float($x176) ? 'number' : (is_bool($x176) ? 'boolean' : (is_string($x176) ? 'string' : (is_object($x176) && isset($x176->call) ? 'function' : 'object')))));
$x175 = !(((gettype($x176) === gettype('object') && $x176 === 'object'))|| (((is_float($x176) || is_int($x176)) && (is_float('object') || is_int('object'))) && $x176 == 'object'));
$x174 = $x175;
if (JS::toBoolean($x174, $global)) {
$x178 = $_o;
$x178 = ($x178 === JS::$undefined ? 'undefined' : (is_int($x178) || is_float($x178) ? 'number' : (is_bool($x178) ? 'boolean' : (is_string($x178) ? 'string' : (is_object($x178) && isset($x178->call) ? 'function' : 'object')))));
$x177 = !(((gettype($x178) === gettype('function') && $x178 === 'function'))|| (((is_float($x178) || is_int($x178)) && (is_float('function') || is_int('function'))) && $x178 == 'function'));
$x174 = $x177; }
if (JS::toBoolean($x174, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x181 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 64, 13, '<image>/02_object.js');
$_TypeError =& $x181[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x181;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x182 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 64, 13, '<image>/02_object.js');
$_ReferenceError =& $x182[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x182;
$x183 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 13);
$x184 = $x183($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x184->class) && $x184->class === 'Error' && !isset($x184->properties['file']) && !isset($x184->properties['line']) && !isset($x184->properties['column'])) {$x184->properties['file'] = '<image>/02_object.js';$x184->properties['line'] = 64;$x184->properties['column'] = 13;$x184->attributes['file'] = $x184->attributes['line'] = $x184->attributes['column'] = 0; }
throw new JSException($x184, 64, 13, '<image>/02_object.js');
}
$x179 = clone JS::$objectTemplate;
unset($x185, $W185, $S185, $U185);
$x186 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 64, 9, '<image>/02_object.js');
$x185 =& $x186[0]; list(,$W185,$S185,$U185) = $x186;
$x180 = $x185;
$x179->prototype = $x180;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x189 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x190 = $x189($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x190->class) && $x190->class === 'Error' && !isset($x190->properties['file']) && !isset($x190->properties['line']) && !isset($x190->properties['column'])) {$x190->properties['file'] = '<image>/02_object.js';$x190->properties['line'] = 64;$x190->properties['column'] = 9;$x190->attributes['file'] = $x190->attributes['line'] = $x190->attributes['column'] = 0; }
throw new JSException($x190, 64, 9, '<image>/02_object.js');
}
$x187 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 64, 9);
$x188 = $x187($global, $x179, $_TypeError, array('Object.create(): Cannot create object with non-object prototype.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x180 = $x188;
if (is_object($x180) && $x180 !== JS::$undefined) { $x179 = $x180; }
if (isset($x179->class) && $x179->class === 'Error' && !isset($x179->properties['file']) && !isset($x179->properties['line']) && !isset($x179->properties['column'])) {$x179->properties['file'] = '<image>/02_object.js';$x179->properties['line'] = 64;$x179->properties['column'] = 3;$x179->attributes['file'] = $x179->attributes['line'] = $x179->attributes['column'] = 0; }
throw new JSException($x179, 64, 3, '<image>/02_object.js');;
};
$x191 = clone JS::$objectTemplate;
$scope->properties['newObject'] = JS::$undefined; $_newObject =& $scope->properties['newObject'];
$UnewObject = FALSE;
$_newObject = $x191;
$_newObject->prototype =$_o;
if (JS::toBoolean(is_object($_properties) &&$_properties!== JS::$undefined, $global)) {
unset($_Object, $WObject, $SObject, $UObject);
$x192 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'Object', 72, 3, '<image>/02_object.js');
$_Object =& $x192[0]; list(,$WObject,$SObject,$UObject) = $x192;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x193 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 72, 3, '<image>/02_object.js');
$_ReferenceError =& $x193[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x193;
$x194 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 3);
$x195 = $x194($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x195->class) && $x195->class === 'Error' && !isset($x195->properties['file']) && !isset($x195->properties['line']) && !isset($x195->properties['column'])) {$x195->properties['file'] = '<image>/02_object.js';$x195->properties['line'] = 72;$x195->properties['column'] = 3;$x195->attributes['file'] = $x195->attributes['line'] = $x195->attributes['column'] = 0; }
throw new JSException($x195, 72, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x197 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 72, 26, '<image>/02_object.js');
$_TypeError =& $x197[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x197;
$x198 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x199 = $x198($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x199->class) && $x199->class === 'Error' && !isset($x199->properties['file']) && !isset($x199->properties['line']) && !isset($x199->properties['column'])) {$x199->properties['file'] = '<image>/02_object.js';$x199->properties['line'] = 72;$x199->properties['column'] = 26;$x199->attributes['file'] = $x199->attributes['line'] = $x199->attributes['column'] = 0; }
throw new JSException($x199, 72, 26, '<image>/02_object.js');
}
$x196 = JS::toObject($_Object, $global);
unset($x200, $W200, $S200, $U200);
$x201 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x196, (string) 'defineProperties', 72, 26, '<image>/02_object.js');
$x200 =& $x201[0]; list(,$W200,$S200,$U200) = $x201;
if (!(is_object($x200) && isset($x200->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x204 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 72, 26, '<image>/02_object.js');
$_TypeError =& $x204[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x204;
$x205 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x206 = $x205($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x206->class) && $x206->class === 'Error' && !isset($x206->properties['file']) && !isset($x206->properties['line']) && !isset($x206->properties['column'])) {$x206->properties['file'] = '<image>/02_object.js';$x206->properties['line'] = 72;$x206->properties['column'] = 26;$x206->attributes['file'] = $x206->attributes['line'] = $x206->attributes['column'] = 0; }
throw new JSException($x206, 72, 26, '<image>/02_object.js');
}
$x202 = $x200->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 72, 26);
$x203 = $x202($global, $x196, $x200, array($_newObject, $_properties), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
};
return $_newObject;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x173=&$scope->properties[\'arguments\'];$x173->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x173->properties[$i]=$args[$i];$x173->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x176=$_o;$x176=($x176===JS::$undefined?\'undefined\':(is_int($x176)||is_float($x176)?\'number\':(is_bool($x176)?\'boolean\':(is_string($x176)?\'string\':(is_object($x176)&&isset($x176->call)?\'function\':\'object\')))));$x175=!(((gettype($x176)===gettype(\'object\')&&$x176===\'object\'))||(((is_float($x176)||is_int($x176))&&(is_float(\'object\')||is_int(\'object\')))&&$x176==\'object\'));$x174=$x175;if(JS::toBoolean($x174,$global)){$x178=$_o;$x178=($x178===JS::$undefined?\'undefined\':(is_int($x178)||is_float($x178)?\'number\':(is_bool($x178)?\'boolean\':(is_string($x178)?\'string\':(is_object($x178)&&isset($x178->call)?\'function\':\'object\')))));$x177=!(((gettype($x178)===gettype(\'function\')&&$x178===\'function\'))||(((is_float($x178)||is_int($x178))&&(is_float(\'function\')||is_int(\'function\')))&&$x178==\'function\'));$x174=$x177;}if(JS::toBoolean($x174,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x181=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',64,13,\'<image>/02_object.js\');$_TypeError=&$x181[0];list(,$WTypeError,$STypeError,$UTypeError)=$x181;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x182=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',64,13,\'<image>/02_object.js\');$_ReferenceError=&$x182[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x182;$x183=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,13);$x184=$x183($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x184->class)&&$x184->class===\'Error\'&&!isset($x184->properties[\'file\'])&&!isset($x184->properties[\'line\'])&&!isset($x184->properties[\'column\'])){$x184->properties[\'file\']=\'<image>/02_object.js\';$x184->properties[\'line\']=64;$x184->properties[\'column\']=13;$x184->attributes[\'file\']=$x184->attributes[\'line\']=$x184->attributes[\'column\']=0;}throw new JSException($x184,64,13,\'<image>/02_object.js\');}$x179=clone JS::$objectTemplate;unset($x185,$W185,$S185,$U185);$x186=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',64,9,\'<image>/02_object.js\');$x185=&$x186[0];list(,$W185,$S185,$U185)=$x186;$x180=$x185;$x179->prototype=$x180;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x189=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x190=$x189($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x190->class)&&$x190->class===\'Error\'&&!isset($x190->properties[\'file\'])&&!isset($x190->properties[\'line\'])&&!isset($x190->properties[\'column\'])){$x190->properties[\'file\']=\'<image>/02_object.js\';$x190->properties[\'line\']=64;$x190->properties[\'column\']=9;$x190->attributes[\'file\']=$x190->attributes[\'line\']=$x190->attributes[\'column\']=0;}throw new JSException($x190,64,9,\'<image>/02_object.js\');}$x187=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',64,9);$x188=$x187($global,$x179,$_TypeError,array(\'Object.create(): Cannot create object with non-object prototype.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x180=$x188;if(is_object($x180)&&$x180!==JS::$undefined){$x179=$x180;}if(isset($x179->class)&&$x179->class===\'Error\'&&!isset($x179->properties[\'file\'])&&!isset($x179->properties[\'line\'])&&!isset($x179->properties[\'column\'])){$x179->properties[\'file\']=\'<image>/02_object.js\';$x179->properties[\'line\']=64;$x179->properties[\'column\']=3;$x179->attributes[\'file\']=$x179->attributes[\'line\']=$x179->attributes[\'column\']=0;}throw new JSException($x179,64,3,\'<image>/02_object.js\');}$x191=clone JS::$objectTemplate;$scope->properties[\'newObject\']=JS::$undefined;$_newObject=&$scope->properties[\'newObject\'];$UnewObject=FALSE;$_newObject=$x191;$_newObject->prototype=$_o;if(JS::toBoolean(is_object($_properties)&&$_properties!==JS::$undefined,$global)){unset($_Object,$WObject,$SObject,$UObject);$x192=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'Object\',72,3,\'<image>/02_object.js\');$_Object=&$x192[0];list(,$WObject,$SObject,$UObject)=$x192;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x193=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',72,3,\'<image>/02_object.js\');$_ReferenceError=&$x193[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x193;$x194=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,3);$x195=$x194($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x195->class)&&$x195->class===\'Error\'&&!isset($x195->properties[\'file\'])&&!isset($x195->properties[\'line\'])&&!isset($x195->properties[\'column\'])){$x195->properties[\'file\']=\'<image>/02_object.js\';$x195->properties[\'line\']=72;$x195->properties[\'column\']=3;$x195->attributes[\'file\']=$x195->attributes[\'line\']=$x195->attributes[\'column\']=0;}throw new JSException($x195,72,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x197=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',72,26,\'<image>/02_object.js\');$_TypeError=&$x197[0];list(,$WTypeError,$STypeError,$UTypeError)=$x197;$x198=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x199=$x198($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x199->class)&&$x199->class===\'Error\'&&!isset($x199->properties[\'file\'])&&!isset($x199->properties[\'line\'])&&!isset($x199->properties[\'column\'])){$x199->properties[\'file\']=\'<image>/02_object.js\';$x199->properties[\'line\']=72;$x199->properties[\'column\']=26;$x199->attributes[\'file\']=$x199->attributes[\'line\']=$x199->attributes[\'column\']=0;}throw new JSException($x199,72,26,\'<image>/02_object.js\');}$x196=JS::toObject($_Object,$global);unset($x200,$W200,$S200,$U200);$x201=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x196,(string)\'defineProperties\',72,26,\'<image>/02_object.js\');$x200=&$x201[0];list(,$W200,$S200,$U200)=$x201;if(!(is_object($x200)&&isset($x200->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x204=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',72,26,\'<image>/02_object.js\');$_TypeError=&$x204[0];list(,$WTypeError,$STypeError,$UTypeError)=$x204;$x205=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x206=$x205($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x206->class)&&$x206->class===\'Error\'&&!isset($x206->properties[\'file\'])&&!isset($x206->properties[\'line\'])&&!isset($x206->properties[\'column\'])){$x206->properties[\'file\']=\'<image>/02_object.js\';$x206->properties[\'line\']=72;$x206->properties[\'column\']=26;$x206->attributes[\'file\']=$x206->attributes[\'line\']=$x206->attributes[\'column\']=0;}throw new JSException($x206,72,26,\'<image>/02_object.js\');}$x202=$x200->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',72,26);$x203=$x202($global,$x196,$x200,array($_newObject,$_properties),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}return$_newObject;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x217 =& $scope->properties['arguments'];
$x217->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x217->properties[$i] = $args[$i];
$x217->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
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
$x219 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x218 = $x219;
if (!JS::toBoolean($x218, $global)) {
$x222 = $_o;
$x222 = ($x222 === JS::$undefined ? 'undefined' : (is_int($x222) || is_float($x222) ? 'number' : (is_bool($x222) ? 'boolean' : (is_string($x222) ? 'string' : (is_object($x222) && isset($x222->call) ? 'function' : 'object')))));
$x221 = !(((gettype($x222) === gettype('object') && $x222 === 'object'))|| (((is_float($x222) || is_int($x222)) && (is_float('object') || is_int('object'))) && $x222 == 'object'));
$x220 = $x221;
if (JS::toBoolean($x220, $global)) {
$x224 = $_o;
$x224 = ($x224 === JS::$undefined ? 'undefined' : (is_int($x224) || is_float($x224) ? 'number' : (is_bool($x224) ? 'boolean' : (is_string($x224) ? 'string' : (is_object($x224) && isset($x224->call) ? 'function' : 'object')))));
$x223 = !(((gettype($x224) === gettype('function') && $x224 === 'function'))|| (((is_float($x224) || is_int($x224)) && (is_float('function') || is_int('function'))) && $x224 == 'function'));
$x220 = $x223; }
$x218 = $x220; }
if (JS::toBoolean($x218, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x227 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 80, 13, '<image>/02_object.js');
$_TypeError =& $x227[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x227;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x228 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 80, 13, '<image>/02_object.js');
$_ReferenceError =& $x228[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x228;
$x229 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 13);
$x230 = $x229($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x230->class) && $x230->class === 'Error' && !isset($x230->properties['file']) && !isset($x230->properties['line']) && !isset($x230->properties['column'])) {$x230->properties['file'] = '<image>/02_object.js';$x230->properties['line'] = 80;$x230->properties['column'] = 13;$x230->attributes['file'] = $x230->attributes['line'] = $x230->attributes['column'] = 0; }
throw new JSException($x230, 80, 13, '<image>/02_object.js');
}
$x225 = clone JS::$objectTemplate;
unset($x231, $W231, $S231, $U231);
$x232 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 80, 9, '<image>/02_object.js');
$x231 =& $x232[0]; list(,$W231,$S231,$U231) = $x232;
$x226 = $x231;
$x225->prototype = $x226;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x235 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x236 = $x235($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x236->class) && $x236->class === 'Error' && !isset($x236->properties['file']) && !isset($x236->properties['line']) && !isset($x236->properties['column'])) {$x236->properties['file'] = '<image>/02_object.js';$x236->properties['line'] = 80;$x236->properties['column'] = 9;$x236->attributes['file'] = $x236->attributes['line'] = $x236->attributes['column'] = 0; }
throw new JSException($x236, 80, 9, '<image>/02_object.js');
}
$x233 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 80, 9);
$x234 = $x233($global, $x225, $_TypeError, array('Object.defineProperty(): Cannot define property on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x226 = $x234;
if (is_object($x226) && $x226 !== JS::$undefined) { $x225 = $x226; }
if (isset($x225->class) && $x225->class === 'Error' && !isset($x225->properties['file']) && !isset($x225->properties['line']) && !isset($x225->properties['column'])) {$x225->properties['file'] = '<image>/02_object.js';$x225->properties['line'] = 80;$x225->properties['column'] = 3;$x225->attributes['file'] = $x225->attributes['line'] = $x225->attributes['column'] = 0; }
throw new JSException($x225, 80, 3, '<image>/02_object.js');;
};
unset($x239, $W239, $S239, $U239);
$x240 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'get', 83, 16, '<image>/02_object.js');
$x239 =& $x240[0]; list(,$W239,$S239,$U239) = $x240;
$x238 = !(((gettype($x239) === gettype(JS::$undefined) && $x239 === JS::$undefined))|| (((is_float($x239) || is_int($x239)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x239 == JS::$undefined));
$x237 = $x238;
if (JS::toBoolean($x237, $global)) {
unset($x242, $W242, $S242, $U242);
$x243 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'get', 83, 55, '<image>/02_object.js');
$x242 =& $x243[0]; list(,$W242,$S242,$U242) = $x243;
$x244 = $x242;
$x244 = ($x244 === JS::$undefined ? 'undefined' : (is_int($x244) || is_float($x244) ? 'number' : (is_bool($x244) ? 'boolean' : (is_string($x244) ? 'string' : (is_object($x244) && isset($x244->call) ? 'function' : 'object')))));
$x241 = !(((gettype($x244) === gettype('function') && $x244 === 'function'))|| (((is_float($x244) || is_int($x244)) && (is_float('function') || is_int('function'))) && $x244 == 'function'));
$x237 = $x241; }
if (JS::toBoolean($x237, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x247 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 84, 13, '<image>/02_object.js');
$_TypeError =& $x247[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x247;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x248 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 84, 13, '<image>/02_object.js');
$_ReferenceError =& $x248[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x248;
$x249 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 13);
$x250 = $x249($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x250->class) && $x250->class === 'Error' && !isset($x250->properties['file']) && !isset($x250->properties['line']) && !isset($x250->properties['column'])) {$x250->properties['file'] = '<image>/02_object.js';$x250->properties['line'] = 84;$x250->properties['column'] = 13;$x250->attributes['file'] = $x250->attributes['line'] = $x250->attributes['column'] = 0; }
throw new JSException($x250, 84, 13, '<image>/02_object.js');
}
$x245 = clone JS::$objectTemplate;
unset($x251, $W251, $S251, $U251);
$x252 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 84, 9, '<image>/02_object.js');
$x251 =& $x252[0]; list(,$W251,$S251,$U251) = $x252;
$x246 = $x251;
$x245->prototype = $x246;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x255 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x256 = $x255($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x256->class) && $x256->class === 'Error' && !isset($x256->properties['file']) && !isset($x256->properties['line']) && !isset($x256->properties['column'])) {$x256->properties['file'] = '<image>/02_object.js';$x256->properties['line'] = 84;$x256->properties['column'] = 9;$x256->attributes['file'] = $x256->attributes['line'] = $x256->attributes['column'] = 0; }
throw new JSException($x256, 84, 9, '<image>/02_object.js');
}
$x253 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 84, 9);
$x254 = $x253($global, $x245, $_TypeError, array('Object.defineProperty(): Given getter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x246 = $x254;
if (is_object($x246) && $x246 !== JS::$undefined) { $x245 = $x246; }
if (isset($x245->class) && $x245->class === 'Error' && !isset($x245->properties['file']) && !isset($x245->properties['line']) && !isset($x245->properties['column'])) {$x245->properties['file'] = '<image>/02_object.js';$x245->properties['line'] = 84;$x245->properties['column'] = 3;$x245->attributes['file'] = $x245->attributes['line'] = $x245->attributes['column'] = 0; }
throw new JSException($x245, 84, 3, '<image>/02_object.js');;
};
unset($x259, $W259, $S259, $U259);
$x260 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'set', 87, 16, '<image>/02_object.js');
$x259 =& $x260[0]; list(,$W259,$S259,$U259) = $x260;
$x258 = !(((gettype($x259) === gettype(JS::$undefined) && $x259 === JS::$undefined))|| (((is_float($x259) || is_int($x259)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $x259 == JS::$undefined));
$x257 = $x258;
if (JS::toBoolean($x257, $global)) {
unset($x262, $W262, $S262, $U262);
$x263 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'set', 87, 55, '<image>/02_object.js');
$x262 =& $x263[0]; list(,$W262,$S262,$U262) = $x263;
$x264 = $x262;
$x264 = ($x264 === JS::$undefined ? 'undefined' : (is_int($x264) || is_float($x264) ? 'number' : (is_bool($x264) ? 'boolean' : (is_string($x264) ? 'string' : (is_object($x264) && isset($x264->call) ? 'function' : 'object')))));
$x261 = !(((gettype($x264) === gettype('function') && $x264 === 'function'))|| (((is_float($x264) || is_int($x264)) && (is_float('function') || is_int('function'))) && $x264 == 'function'));
$x257 = $x261; }
if (JS::toBoolean($x257, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x267 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 88, 13, '<image>/02_object.js');
$_TypeError =& $x267[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x267;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x268 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 88, 13, '<image>/02_object.js');
$_ReferenceError =& $x268[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x268;
$x269 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 13);
$x270 = $x269($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x270->class) && $x270->class === 'Error' && !isset($x270->properties['file']) && !isset($x270->properties['line']) && !isset($x270->properties['column'])) {$x270->properties['file'] = '<image>/02_object.js';$x270->properties['line'] = 88;$x270->properties['column'] = 13;$x270->attributes['file'] = $x270->attributes['line'] = $x270->attributes['column'] = 0; }
throw new JSException($x270, 88, 13, '<image>/02_object.js');
}
$x265 = clone JS::$objectTemplate;
unset($x271, $W271, $S271, $U271);
$x272 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 88, 9, '<image>/02_object.js');
$x271 =& $x272[0]; list(,$W271,$S271,$U271) = $x272;
$x266 = $x271;
$x265->prototype = $x266;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x275 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x276 = $x275($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x276->class) && $x276->class === 'Error' && !isset($x276->properties['file']) && !isset($x276->properties['line']) && !isset($x276->properties['column'])) {$x276->properties['file'] = '<image>/02_object.js';$x276->properties['line'] = 88;$x276->properties['column'] = 9;$x276->attributes['file'] = $x276->attributes['line'] = $x276->attributes['column'] = 0; }
throw new JSException($x276, 88, 9, '<image>/02_object.js');
}
$x273 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 88, 9);
$x274 = $x273($global, $x265, $_TypeError, array('Object.defineProperty(): Given setter is not a function.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x266 = $x274;
if (is_object($x266) && $x266 !== JS::$undefined) { $x265 = $x266; }
if (isset($x265->class) && $x265->class === 'Error' && !isset($x265->properties['file']) && !isset($x265->properties['line']) && !isset($x265->properties['column'])) {$x265->properties['file'] = '<image>/02_object.js';$x265->properties['line'] = 88;$x265->properties['column'] = 3;$x265->attributes['file'] = $x265->attributes['line'] = $x265->attributes['column'] = 0; }
throw new JSException($x265, 88, 3, '<image>/02_object.js');;
};
$x277 = $_attributes;
if (!JS::toBoolean($x277, $global)) {
$x278 = clone JS::$objectTemplate;
$x277 = $x278; }
if ($Uattributes) {$global->properties['attributes'] = $_attributes; $_attributes =& $global->properties['attributes']; }
$_attributes = $x277;
$x279 = JS::toString($_p, $global);
if ($Up) {$global->properties['p'] = $_p; $_p =& $global->properties['p']; }
$_p = $x279;
unset($x280, $W280, $S280, $U280);
$x281 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'value', 94, 24, '<image>/02_object.js');
$x280 =& $x281[0]; list(,$W280,$S280,$U280) = $x281;
$scope->properties['value'] = JS::$undefined; $_value =& $scope->properties['value'];
$Uvalue = FALSE;
$_value = $x280;
unset($x282, $W282, $S282, $U282);
$x283 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'get', 95, 19, '<image>/02_object.js');
$x282 =& $x283[0]; list(,$W282,$S282,$U282) = $x283;
$scope->properties['get'] = JS::$undefined; $_get =& $scope->properties['get'];
$Uget = FALSE;
$_get = $x282;
unset($x284, $W284, $S284, $U284);
$x285 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'set', 96, 19, '<image>/02_object.js');
$x284 =& $x285[0]; list(,$W284,$S284,$U284) = $x285;
$scope->properties['set'] = JS::$undefined; $_set =& $scope->properties['set'];
$Uset = FALSE;
$_set = $x284;
$scope->properties['attrs'] = JS::$undefined; $_attrs =& $scope->properties['attrs'];
$Uattrs = FALSE;
$_attrs = 0;
$x287 = $_value;
$x287 = ($x287 === JS::$undefined ? 'undefined' : (is_int($x287) || is_float($x287) ? 'number' : (is_bool($x287) ? 'boolean' : (is_string($x287) ? 'string' : (is_object($x287) && isset($x287->call) ? 'function' : 'object')))));
$x286 = !(((gettype($x287) === gettype('undefined') && $x287 === 'undefined'))|| (((is_float($x287) || is_int($x287)) && (is_float('undefined') || is_int('undefined'))) && $x287 == 'undefined'));
if (JS::toBoolean($x286, $global)) {

$_o->properties[$_p] =$_value;;
};
if (JS::toBoolean($_get, $global)) {
$_o->getters[$_p] =$_get;
$x288 = JS::HAS_GETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x289 = JS::toNumber($_attrs, $global);
$x290 = JS::toNumber($x288, $global);
if (is_nan($x289)) { $x289 = 0; }
if (is_nan($x290)) { $x290 = 0; }
$x291 = $x289 | $x290;
$_attrs = $x291;;
};
if (JS::toBoolean($_set, $global)) {
$_o->setters[$_p] =$_set;
$x292 = JS::HAS_SETTER;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x293 = JS::toNumber($_attrs, $global);
$x294 = JS::toNumber($x292, $global);
if (is_nan($x293)) { $x293 = 0; }
if (is_nan($x294)) { $x294 = 0; }
$x295 = $x293 | $x294;
$_attrs = $x295;;
};
unset($x296, $W296, $S296, $U296);
$x297 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'writable', 113, 16, '<image>/02_object.js');
$x296 =& $x297[0]; list(,$W296,$S296,$U296) = $x297;
if (JS::toBoolean($x296, $global)) {
$x298 = JS::WRITABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x299 = JS::toNumber($_attrs, $global);
$x300 = JS::toNumber($x298, $global);
if (is_nan($x299)) { $x299 = 0; }
if (is_nan($x300)) { $x300 = 0; }
$x301 = $x299 | $x300;
$_attrs = $x301;;
};
unset($x302, $W302, $S302, $U302);
$x303 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'enumerable', 117, 16, '<image>/02_object.js');
$x302 =& $x303[0]; list(,$W302,$S302,$U302) = $x303;
if (JS::toBoolean($x302, $global)) {
$x304 = JS::ENUMERABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x305 = JS::toNumber($_attrs, $global);
$x306 = JS::toNumber($x304, $global);
if (is_nan($x305)) { $x305 = 0; }
if (is_nan($x306)) { $x306 = 0; }
$x307 = $x305 | $x306;
$_attrs = $x307;;
};
unset($x308, $W308, $S308, $U308);
$x309 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_attributes, (string) 'configurable', 121, 16, '<image>/02_object.js');
$x308 =& $x309[0]; list(,$W308,$S308,$U308) = $x309;
if (JS::toBoolean($x308, $global)) {
$x310 = JS::CONFIGURABLE;
if ($Uattrs) {$global->properties['attrs'] = $_attrs; $_attrs =& $global->properties['attrs']; }
$x311 = JS::toNumber($_attrs, $global);
$x312 = JS::toNumber($x310, $global);
if (is_nan($x311)) { $x311 = 0; }
if (is_nan($x312)) { $x312 = 0; }
$x313 = $x311 | $x312;
$_attrs = $x313;;
};
$_o->attributes[$_p] =$_attrs;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x217=&$scope->properties[\'arguments\'];$x217->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x217->properties[$i]=$args[$i];$x217->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'p\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$scope->properties[\'attributes\']=array_key_exists(2,$args)?$args[2]:JS::$undefined;$_attributes=&$scope->properties[\'attributes\'];$Uattributes=FALSE;$global->scope[++$global->scope_sp]=$scope;$x219=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x218=$x219;if(!JS::toBoolean($x218,$global)){$x222=$_o;$x222=($x222===JS::$undefined?\'undefined\':(is_int($x222)||is_float($x222)?\'number\':(is_bool($x222)?\'boolean\':(is_string($x222)?\'string\':(is_object($x222)&&isset($x222->call)?\'function\':\'object\')))));$x221=!(((gettype($x222)===gettype(\'object\')&&$x222===\'object\'))||(((is_float($x222)||is_int($x222))&&(is_float(\'object\')||is_int(\'object\')))&&$x222==\'object\'));$x220=$x221;if(JS::toBoolean($x220,$global)){$x224=$_o;$x224=($x224===JS::$undefined?\'undefined\':(is_int($x224)||is_float($x224)?\'number\':(is_bool($x224)?\'boolean\':(is_string($x224)?\'string\':(is_object($x224)&&isset($x224->call)?\'function\':\'object\')))));$x223=!(((gettype($x224)===gettype(\'function\')&&$x224===\'function\'))||(((is_float($x224)||is_int($x224))&&(is_float(\'function\')||is_int(\'function\')))&&$x224==\'function\'));$x220=$x223;}$x218=$x220;}if(JS::toBoolean($x218,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x227=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',80,13,\'<image>/02_object.js\');$_TypeError=&$x227[0];list(,$WTypeError,$STypeError,$UTypeError)=$x227;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x228=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',80,13,\'<image>/02_object.js\');$_ReferenceError=&$x228[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x228;$x229=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,13);$x230=$x229($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x230->class)&&$x230->class===\'Error\'&&!isset($x230->properties[\'file\'])&&!isset($x230->properties[\'line\'])&&!isset($x230->properties[\'column\'])){$x230->properties[\'file\']=\'<image>/02_object.js\';$x230->properties[\'line\']=80;$x230->properties[\'column\']=13;$x230->attributes[\'file\']=$x230->attributes[\'line\']=$x230->attributes[\'column\']=0;}throw new JSException($x230,80,13,\'<image>/02_object.js\');}$x225=clone JS::$objectTemplate;unset($x231,$W231,$S231,$U231);$x232=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',80,9,\'<image>/02_object.js\');$x231=&$x232[0];list(,$W231,$S231,$U231)=$x232;$x226=$x231;$x225->prototype=$x226;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x235=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x236=$x235($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x236->class)&&$x236->class===\'Error\'&&!isset($x236->properties[\'file\'])&&!isset($x236->properties[\'line\'])&&!isset($x236->properties[\'column\'])){$x236->properties[\'file\']=\'<image>/02_object.js\';$x236->properties[\'line\']=80;$x236->properties[\'column\']=9;$x236->attributes[\'file\']=$x236->attributes[\'line\']=$x236->attributes[\'column\']=0;}throw new JSException($x236,80,9,\'<image>/02_object.js\');}$x233=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',80,9);$x234=$x233($global,$x225,$_TypeError,array(\'Object.defineProperty(): Cannot define property on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x226=$x234;if(is_object($x226)&&$x226!==JS::$undefined){$x225=$x226;}if(isset($x225->class)&&$x225->class===\'Error\'&&!isset($x225->properties[\'file\'])&&!isset($x225->properties[\'line\'])&&!isset($x225->properties[\'column\'])){$x225->properties[\'file\']=\'<image>/02_object.js\';$x225->properties[\'line\']=80;$x225->properties[\'column\']=3;$x225->attributes[\'file\']=$x225->attributes[\'line\']=$x225->attributes[\'column\']=0;}throw new JSException($x225,80,3,\'<image>/02_object.js\');}unset($x239,$W239,$S239,$U239);$x240=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'get\',83,16,\'<image>/02_object.js\');$x239=&$x240[0];list(,$W239,$S239,$U239)=$x240;$x238=!(((gettype($x239)===gettype(JS::$undefined)&&$x239===JS::$undefined))||(((is_float($x239)||is_int($x239))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x239==JS::$undefined));$x237=$x238;if(JS::toBoolean($x237,$global)){unset($x242,$W242,$S242,$U242);$x243=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'get\',83,55,\'<image>/02_object.js\');$x242=&$x243[0];list(,$W242,$S242,$U242)=$x243;$x244=$x242;$x244=($x244===JS::$undefined?\'undefined\':(is_int($x244)||is_float($x244)?\'number\':(is_bool($x244)?\'boolean\':(is_string($x244)?\'string\':(is_object($x244)&&isset($x244->call)?\'function\':\'object\')))));$x241=!(((gettype($x244)===gettype(\'function\')&&$x244===\'function\'))||(((is_float($x244)||is_int($x244))&&(is_float(\'function\')||is_int(\'function\')))&&$x244==\'function\'));$x237=$x241;}if(JS::toBoolean($x237,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x247=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',84,13,\'<image>/02_object.js\');$_TypeError=&$x247[0];list(,$WTypeError,$STypeError,$UTypeError)=$x247;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x248=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',84,13,\'<image>/02_object.js\');$_ReferenceError=&$x248[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x248;$x249=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,13);$x250=$x249($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x250->class)&&$x250->class===\'Error\'&&!isset($x250->properties[\'file\'])&&!isset($x250->properties[\'line\'])&&!isset($x250->properties[\'column\'])){$x250->properties[\'file\']=\'<image>/02_object.js\';$x250->properties[\'line\']=84;$x250->properties[\'column\']=13;$x250->attributes[\'file\']=$x250->attributes[\'line\']=$x250->attributes[\'column\']=0;}throw new JSException($x250,84,13,\'<image>/02_object.js\');}$x245=clone JS::$objectTemplate;unset($x251,$W251,$S251,$U251);$x252=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',84,9,\'<image>/02_object.js\');$x251=&$x252[0];list(,$W251,$S251,$U251)=$x252;$x246=$x251;$x245->prototype=$x246;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x255=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x256=$x255($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x256->class)&&$x256->class===\'Error\'&&!isset($x256->properties[\'file\'])&&!isset($x256->properties[\'line\'])&&!isset($x256->properties[\'column\'])){$x256->properties[\'file\']=\'<image>/02_object.js\';$x256->properties[\'line\']=84;$x256->properties[\'column\']=9;$x256->attributes[\'file\']=$x256->attributes[\'line\']=$x256->attributes[\'column\']=0;}throw new JSException($x256,84,9,\'<image>/02_object.js\');}$x253=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',84,9);$x254=$x253($global,$x245,$_TypeError,array(\'Object.defineProperty(): Given getter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x246=$x254;if(is_object($x246)&&$x246!==JS::$undefined){$x245=$x246;}if(isset($x245->class)&&$x245->class===\'Error\'&&!isset($x245->properties[\'file\'])&&!isset($x245->properties[\'line\'])&&!isset($x245->properties[\'column\'])){$x245->properties[\'file\']=\'<image>/02_object.js\';$x245->properties[\'line\']=84;$x245->properties[\'column\']=3;$x245->attributes[\'file\']=$x245->attributes[\'line\']=$x245->attributes[\'column\']=0;}throw new JSException($x245,84,3,\'<image>/02_object.js\');}unset($x259,$W259,$S259,$U259);$x260=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'set\',87,16,\'<image>/02_object.js\');$x259=&$x260[0];list(,$W259,$S259,$U259)=$x260;$x258=!(((gettype($x259)===gettype(JS::$undefined)&&$x259===JS::$undefined))||(((is_float($x259)||is_int($x259))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$x259==JS::$undefined));$x257=$x258;if(JS::toBoolean($x257,$global)){unset($x262,$W262,$S262,$U262);$x263=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'set\',87,55,\'<image>/02_object.js\');$x262=&$x263[0];list(,$W262,$S262,$U262)=$x263;$x264=$x262;$x264=($x264===JS::$undefined?\'undefined\':(is_int($x264)||is_float($x264)?\'number\':(is_bool($x264)?\'boolean\':(is_string($x264)?\'string\':(is_object($x264)&&isset($x264->call)?\'function\':\'object\')))));$x261=!(((gettype($x264)===gettype(\'function\')&&$x264===\'function\'))||(((is_float($x264)||is_int($x264))&&(is_float(\'function\')||is_int(\'function\')))&&$x264==\'function\'));$x257=$x261;}if(JS::toBoolean($x257,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x267=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',88,13,\'<image>/02_object.js\');$_TypeError=&$x267[0];list(,$WTypeError,$STypeError,$UTypeError)=$x267;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x268=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',88,13,\'<image>/02_object.js\');$_ReferenceError=&$x268[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x268;$x269=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,13);$x270=$x269($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x270->class)&&$x270->class===\'Error\'&&!isset($x270->properties[\'file\'])&&!isset($x270->properties[\'line\'])&&!isset($x270->properties[\'column\'])){$x270->properties[\'file\']=\'<image>/02_object.js\';$x270->properties[\'line\']=88;$x270->properties[\'column\']=13;$x270->attributes[\'file\']=$x270->attributes[\'line\']=$x270->attributes[\'column\']=0;}throw new JSException($x270,88,13,\'<image>/02_object.js\');}$x265=clone JS::$objectTemplate;unset($x271,$W271,$S271,$U271);$x272=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',88,9,\'<image>/02_object.js\');$x271=&$x272[0];list(,$W271,$S271,$U271)=$x272;$x266=$x271;$x265->prototype=$x266;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x275=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x276=$x275($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x276->class)&&$x276->class===\'Error\'&&!isset($x276->properties[\'file\'])&&!isset($x276->properties[\'line\'])&&!isset($x276->properties[\'column\'])){$x276->properties[\'file\']=\'<image>/02_object.js\';$x276->properties[\'line\']=88;$x276->properties[\'column\']=9;$x276->attributes[\'file\']=$x276->attributes[\'line\']=$x276->attributes[\'column\']=0;}throw new JSException($x276,88,9,\'<image>/02_object.js\');}$x273=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',88,9);$x274=$x273($global,$x265,$_TypeError,array(\'Object.defineProperty(): Given setter is not a function.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x266=$x274;if(is_object($x266)&&$x266!==JS::$undefined){$x265=$x266;}if(isset($x265->class)&&$x265->class===\'Error\'&&!isset($x265->properties[\'file\'])&&!isset($x265->properties[\'line\'])&&!isset($x265->properties[\'column\'])){$x265->properties[\'file\']=\'<image>/02_object.js\';$x265->properties[\'line\']=88;$x265->properties[\'column\']=3;$x265->attributes[\'file\']=$x265->attributes[\'line\']=$x265->attributes[\'column\']=0;}throw new JSException($x265,88,3,\'<image>/02_object.js\');}$x277=$_attributes;if(!JS::toBoolean($x277,$global)){$x278=clone JS::$objectTemplate;$x277=$x278;}if($Uattributes){$global->properties[\'attributes\']=$_attributes;$_attributes=&$global->properties[\'attributes\'];}$_attributes=$x277;$x279=JS::toString($_p,$global);if($Up){$global->properties[\'p\']=$_p;$_p=&$global->properties[\'p\'];}$_p=$x279;unset($x280,$W280,$S280,$U280);$x281=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'value\',94,24,\'<image>/02_object.js\');$x280=&$x281[0];list(,$W280,$S280,$U280)=$x281;$scope->properties[\'value\']=JS::$undefined;$_value=&$scope->properties[\'value\'];$Uvalue=FALSE;$_value=$x280;unset($x282,$W282,$S282,$U282);$x283=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'get\',95,19,\'<image>/02_object.js\');$x282=&$x283[0];list(,$W282,$S282,$U282)=$x283;$scope->properties[\'get\']=JS::$undefined;$_get=&$scope->properties[\'get\'];$Uget=FALSE;$_get=$x282;unset($x284,$W284,$S284,$U284);$x285=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'set\',96,19,\'<image>/02_object.js\');$x284=&$x285[0];list(,$W284,$S284,$U284)=$x285;$scope->properties[\'set\']=JS::$undefined;$_set=&$scope->properties[\'set\'];$Uset=FALSE;$_set=$x284;$scope->properties[\'attrs\']=JS::$undefined;$_attrs=&$scope->properties[\'attrs\'];$Uattrs=FALSE;$_attrs=0;$x287=$_value;$x287=($x287===JS::$undefined?\'undefined\':(is_int($x287)||is_float($x287)?\'number\':(is_bool($x287)?\'boolean\':(is_string($x287)?\'string\':(is_object($x287)&&isset($x287->call)?\'function\':\'object\')))));$x286=!(((gettype($x287)===gettype(\'undefined\')&&$x287===\'undefined\'))||(((is_float($x287)||is_int($x287))&&(is_float(\'undefined\')||is_int(\'undefined\')))&&$x287==\'undefined\'));if(JS::toBoolean($x286,$global)){$_o->properties[$_p]=$_value;}if(JS::toBoolean($_get,$global)){$_o->getters[$_p]=$_get;$x288=JS::HAS_GETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x289=JS::toNumber($_attrs,$global);$x290=JS::toNumber($x288,$global);if(is_nan($x289)){$x289=0;}if(is_nan($x290)){$x290=0;}$x291=$x289|$x290;$_attrs=$x291;}if(JS::toBoolean($_set,$global)){$_o->setters[$_p]=$_set;$x292=JS::HAS_SETTER;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x293=JS::toNumber($_attrs,$global);$x294=JS::toNumber($x292,$global);if(is_nan($x293)){$x293=0;}if(is_nan($x294)){$x294=0;}$x295=$x293|$x294;$_attrs=$x295;}unset($x296,$W296,$S296,$U296);$x297=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'writable\',113,16,\'<image>/02_object.js\');$x296=&$x297[0];list(,$W296,$S296,$U296)=$x297;if(JS::toBoolean($x296,$global)){$x298=JS::WRITABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x299=JS::toNumber($_attrs,$global);$x300=JS::toNumber($x298,$global);if(is_nan($x299)){$x299=0;}if(is_nan($x300)){$x300=0;}$x301=$x299|$x300;$_attrs=$x301;}unset($x302,$W302,$S302,$U302);$x303=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'enumerable\',117,16,\'<image>/02_object.js\');$x302=&$x303[0];list(,$W302,$S302,$U302)=$x303;if(JS::toBoolean($x302,$global)){$x304=JS::ENUMERABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x305=JS::toNumber($_attrs,$global);$x306=JS::toNumber($x304,$global);if(is_nan($x305)){$x305=0;}if(is_nan($x306)){$x306=0;}$x307=$x305|$x306;$_attrs=$x307;}unset($x308,$W308,$S308,$U308);$x309=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_attributes,(string)\'configurable\',121,16,\'<image>/02_object.js\');$x308=&$x309[0];list(,$W308,$S308,$U308)=$x309;if(JS::toBoolean($x308,$global)){$x310=JS::CONFIGURABLE;if($Uattrs){$global->properties[\'attrs\']=$_attrs;$_attrs=&$global->properties[\'attrs\'];}$x311=JS::toNumber($_attrs,$global);$x312=JS::toNumber($x310,$global);if(is_nan($x311)){$x311=0;}if(is_nan($x312)){$x312=0;}$x313=$x311|$x312;$_attrs=$x313;}$_o->attributes[$_p]=$_attrs;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x324 =& $scope->properties['arguments'];
$x324->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x324->properties[$i] = $args[$i];
$x324->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$scope->properties['properties'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_properties =& $scope->properties['properties'];
$Uproperties = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x326 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x325 = $x326;
if (!JS::toBoolean($x325, $global)) {
$x329 = $_o;
$x329 = ($x329 === JS::$undefined ? 'undefined' : (is_int($x329) || is_float($x329) ? 'number' : (is_bool($x329) ? 'boolean' : (is_string($x329) ? 'string' : (is_object($x329) && isset($x329->call) ? 'function' : 'object')))));
$x328 = !(((gettype($x329) === gettype('object') && $x329 === 'object'))|| (((is_float($x329) || is_int($x329)) && (is_float('object') || is_int('object'))) && $x329 == 'object'));
$x327 = $x328;
if (JS::toBoolean($x327, $global)) {
$x331 = $_o;
$x331 = ($x331 === JS::$undefined ? 'undefined' : (is_int($x331) || is_float($x331) ? 'number' : (is_bool($x331) ? 'boolean' : (is_string($x331) ? 'string' : (is_object($x331) && isset($x331->call) ? 'function' : 'object')))));
$x330 = !(((gettype($x331) === gettype('function') && $x331 === 'function'))|| (((is_float($x331) || is_int($x331)) && (is_float('function') || is_int('function'))) && $x331 == 'function'));
$x327 = $x330; }
$x325 = $x327; }
if (JS::toBoolean($x325, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x334 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 132, 13, '<image>/02_object.js');
$_TypeError =& $x334[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x334;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x335 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 132, 13, '<image>/02_object.js');
$_ReferenceError =& $x335[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x335;
$x336 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 13);
$x337 = $x336($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x337->class) && $x337->class === 'Error' && !isset($x337->properties['file']) && !isset($x337->properties['line']) && !isset($x337->properties['column'])) {$x337->properties['file'] = '<image>/02_object.js';$x337->properties['line'] = 132;$x337->properties['column'] = 13;$x337->attributes['file'] = $x337->attributes['line'] = $x337->attributes['column'] = 0; }
throw new JSException($x337, 132, 13, '<image>/02_object.js');
}
$x332 = clone JS::$objectTemplate;
unset($x338, $W338, $S338, $U338);
$x339 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 132, 9, '<image>/02_object.js');
$x338 =& $x339[0]; list(,$W338,$S338,$U338) = $x339;
$x333 = $x338;
$x332->prototype = $x333;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x342 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x343 = $x342($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x343->class) && $x343->class === 'Error' && !isset($x343->properties['file']) && !isset($x343->properties['line']) && !isset($x343->properties['column'])) {$x343->properties['file'] = '<image>/02_object.js';$x343->properties['line'] = 132;$x343->properties['column'] = 9;$x343->attributes['file'] = $x343->attributes['line'] = $x343->attributes['column'] = 0; }
throw new JSException($x343, 132, 9, '<image>/02_object.js');
}
$x340 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 132, 9);
$x341 = $x340($global, $x332, $_TypeError, array('Object.defineProperties(): Cannot define properties on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x333 = $x341;
if (is_object($x333) && $x333 !== JS::$undefined) { $x332 = $x333; }
if (isset($x332->class) && $x332->class === 'Error' && !isset($x332->properties['file']) && !isset($x332->properties['line']) && !isset($x332->properties['column'])) {$x332->properties['file'] = '<image>/02_object.js';$x332->properties['line'] = 132;$x332->properties['column'] = 3;$x332->attributes['file'] = $x332->attributes['line'] = $x332->attributes['column'] = 0; }
throw new JSException($x332, 132, 3, '<image>/02_object.js');;
};
$x345 = $_properties;
$x345 = ($x345 === JS::$undefined ? 'undefined' : (is_int($x345) || is_float($x345) ? 'number' : (is_bool($x345) ? 'boolean' : (is_string($x345) ? 'string' : (is_object($x345) && isset($x345->call) ? 'function' : 'object')))));
$x344 = !(((gettype($x345) === gettype('object') && $x345 === 'object'))|| (((is_float($x345) || is_int($x345)) && (is_float('object') || is_int('object'))) && $x345 == 'object'));
if (JS::toBoolean($x344, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x348 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 136, 13, '<image>/02_object.js');
$_TypeError =& $x348[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x348;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x349 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 136, 13, '<image>/02_object.js');
$_ReferenceError =& $x349[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x349;
$x350 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 13);
$x351 = $x350($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x351->class) && $x351->class === 'Error' && !isset($x351->properties['file']) && !isset($x351->properties['line']) && !isset($x351->properties['column'])) {$x351->properties['file'] = '<image>/02_object.js';$x351->properties['line'] = 136;$x351->properties['column'] = 13;$x351->attributes['file'] = $x351->attributes['line'] = $x351->attributes['column'] = 0; }
throw new JSException($x351, 136, 13, '<image>/02_object.js');
}
$x346 = clone JS::$objectTemplate;
unset($x352, $W352, $S352, $U352);
$x353 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 136, 9, '<image>/02_object.js');
$x352 =& $x353[0]; list(,$W352,$S352,$U352) = $x353;
$x347 = $x352;
$x346->prototype = $x347;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x356 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x357 = $x356($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x357->class) && $x357->class === 'Error' && !isset($x357->properties['file']) && !isset($x357->properties['line']) && !isset($x357->properties['column'])) {$x357->properties['file'] = '<image>/02_object.js';$x357->properties['line'] = 136;$x357->properties['column'] = 9;$x357->attributes['file'] = $x357->attributes['line'] = $x357->attributes['column'] = 0; }
throw new JSException($x357, 136, 9, '<image>/02_object.js');
}
$x354 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 136, 9);
$x355 = $x354($global, $x346, $_TypeError, array('Object.defineProperties(): Given properties argument is not an object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x347 = $x355;
if (is_object($x347) && $x347 !== JS::$undefined) { $x346 = $x347; }
if (isset($x346->class) && $x346->class === 'Error' && !isset($x346->properties['file']) && !isset($x346->properties['line']) && !isset($x346->properties['column'])) {$x346->properties['file'] = '<image>/02_object.js';$x346->properties['line'] = 136;$x346->properties['column'] = 3;$x346->attributes['file'] = $x346->attributes['line'] = $x346->attributes['column'] = 0; }
throw new JSException($x346, 136, 3, '<image>/02_object.js');;
};
$scope->properties['p'] = JS::$undefined; $_p =& $scope->properties['p'];
$Up = FALSE;
$_p = JS::$undefined;
if ($_properties !== JS::$undefined && $_properties !== NULL) {
for ($x359 = array(), $x358 = JS::toObject($_properties, $global); $x358; $x358 = $x358->prototype) {
foreach ($x358->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x359[$property])) { continue; }
$x359[$property] = TRUE;
$_p = $property;

unset($_Object, $WObject, $SObject, $UObject);
$x360 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'Object', 140, 3, '<image>/02_object.js');
$_Object =& $x360[0]; list(,$WObject,$SObject,$UObject) = $x360;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x361 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 140, 3, '<image>/02_object.js');
$_ReferenceError =& $x361[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x361;
$x362 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 3);
$x363 = $x362($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x363->class) && $x363->class === 'Error' && !isset($x363->properties['file']) && !isset($x363->properties['line']) && !isset($x363->properties['column'])) {$x363->properties['file'] = '<image>/02_object.js';$x363->properties['line'] = 140;$x363->properties['column'] = 3;$x363->attributes['file'] = $x363->attributes['line'] = $x363->attributes['column'] = 0; }
throw new JSException($x363, 140, 3, '<image>/02_object.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x365 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x365[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x365;
$x366 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x367 = $x366($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x367->class) && $x367->class === 'Error' && !isset($x367->properties['file']) && !isset($x367->properties['line']) && !isset($x367->properties['column'])) {$x367->properties['file'] = '<image>/02_object.js';$x367->properties['line'] = 140;$x367->properties['column'] = 24;$x367->attributes['file'] = $x367->attributes['line'] = $x367->attributes['column'] = 0; }
throw new JSException($x367, 140, 24, '<image>/02_object.js');
}
$x364 = JS::toObject($_Object, $global);
unset($x368, $W368, $S368, $U368);
$x369 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x364, (string) 'defineProperty', 140, 24, '<image>/02_object.js');
$x368 =& $x369[0]; list(,$W368,$S368,$U368) = $x369;
unset($x370, $W370, $S370, $U370);
$x371 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_properties, (string) $_p, 140, 41, '<image>/02_object.js');
$x370 =& $x371[0]; list(,$W370,$S370,$U370) = $x371;
if (!(is_object($x368) && isset($x368->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x374 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 140, 24, '<image>/02_object.js');
$_TypeError =& $x374[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x374;
$x375 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x376 = $x375($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x376->class) && $x376->class === 'Error' && !isset($x376->properties['file']) && !isset($x376->properties['line']) && !isset($x376->properties['column'])) {$x376->properties['file'] = '<image>/02_object.js';$x376->properties['line'] = 140;$x376->properties['column'] = 24;$x376->attributes['file'] = $x376->attributes['line'] = $x376->attributes['column'] = 0; }
throw new JSException($x376, 140, 24, '<image>/02_object.js');
}
$x372 = $x368->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 140, 24);
$x373 = $x372($global, $x364, $x368, array($_o, $_p, $x370), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x324=&$scope->properties[\'arguments\'];$x324->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x324->properties[$i]=$args[$i];$x324->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$scope->properties[\'properties\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_properties=&$scope->properties[\'properties\'];$Uproperties=FALSE;$global->scope[++$global->scope_sp]=$scope;$x326=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x325=$x326;if(!JS::toBoolean($x325,$global)){$x329=$_o;$x329=($x329===JS::$undefined?\'undefined\':(is_int($x329)||is_float($x329)?\'number\':(is_bool($x329)?\'boolean\':(is_string($x329)?\'string\':(is_object($x329)&&isset($x329->call)?\'function\':\'object\')))));$x328=!(((gettype($x329)===gettype(\'object\')&&$x329===\'object\'))||(((is_float($x329)||is_int($x329))&&(is_float(\'object\')||is_int(\'object\')))&&$x329==\'object\'));$x327=$x328;if(JS::toBoolean($x327,$global)){$x331=$_o;$x331=($x331===JS::$undefined?\'undefined\':(is_int($x331)||is_float($x331)?\'number\':(is_bool($x331)?\'boolean\':(is_string($x331)?\'string\':(is_object($x331)&&isset($x331->call)?\'function\':\'object\')))));$x330=!(((gettype($x331)===gettype(\'function\')&&$x331===\'function\'))||(((is_float($x331)||is_int($x331))&&(is_float(\'function\')||is_int(\'function\')))&&$x331==\'function\'));$x327=$x330;}$x325=$x327;}if(JS::toBoolean($x325,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x334=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',132,13,\'<image>/02_object.js\');$_TypeError=&$x334[0];list(,$WTypeError,$STypeError,$UTypeError)=$x334;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x335=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',132,13,\'<image>/02_object.js\');$_ReferenceError=&$x335[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x335;$x336=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,13);$x337=$x336($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x337->class)&&$x337->class===\'Error\'&&!isset($x337->properties[\'file\'])&&!isset($x337->properties[\'line\'])&&!isset($x337->properties[\'column\'])){$x337->properties[\'file\']=\'<image>/02_object.js\';$x337->properties[\'line\']=132;$x337->properties[\'column\']=13;$x337->attributes[\'file\']=$x337->attributes[\'line\']=$x337->attributes[\'column\']=0;}throw new JSException($x337,132,13,\'<image>/02_object.js\');}$x332=clone JS::$objectTemplate;unset($x338,$W338,$S338,$U338);$x339=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',132,9,\'<image>/02_object.js\');$x338=&$x339[0];list(,$W338,$S338,$U338)=$x339;$x333=$x338;$x332->prototype=$x333;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x342=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x343=$x342($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x343->class)&&$x343->class===\'Error\'&&!isset($x343->properties[\'file\'])&&!isset($x343->properties[\'line\'])&&!isset($x343->properties[\'column\'])){$x343->properties[\'file\']=\'<image>/02_object.js\';$x343->properties[\'line\']=132;$x343->properties[\'column\']=9;$x343->attributes[\'file\']=$x343->attributes[\'line\']=$x343->attributes[\'column\']=0;}throw new JSException($x343,132,9,\'<image>/02_object.js\');}$x340=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',132,9);$x341=$x340($global,$x332,$_TypeError,array(\'Object.defineProperties(): Cannot define properties on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x333=$x341;if(is_object($x333)&&$x333!==JS::$undefined){$x332=$x333;}if(isset($x332->class)&&$x332->class===\'Error\'&&!isset($x332->properties[\'file\'])&&!isset($x332->properties[\'line\'])&&!isset($x332->properties[\'column\'])){$x332->properties[\'file\']=\'<image>/02_object.js\';$x332->properties[\'line\']=132;$x332->properties[\'column\']=3;$x332->attributes[\'file\']=$x332->attributes[\'line\']=$x332->attributes[\'column\']=0;}throw new JSException($x332,132,3,\'<image>/02_object.js\');}$x345=$_properties;$x345=($x345===JS::$undefined?\'undefined\':(is_int($x345)||is_float($x345)?\'number\':(is_bool($x345)?\'boolean\':(is_string($x345)?\'string\':(is_object($x345)&&isset($x345->call)?\'function\':\'object\')))));$x344=!(((gettype($x345)===gettype(\'object\')&&$x345===\'object\'))||(((is_float($x345)||is_int($x345))&&(is_float(\'object\')||is_int(\'object\')))&&$x345==\'object\'));if(JS::toBoolean($x344,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x348=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',136,13,\'<image>/02_object.js\');$_TypeError=&$x348[0];list(,$WTypeError,$STypeError,$UTypeError)=$x348;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x349=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',136,13,\'<image>/02_object.js\');$_ReferenceError=&$x349[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x349;$x350=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,13);$x351=$x350($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x351->class)&&$x351->class===\'Error\'&&!isset($x351->properties[\'file\'])&&!isset($x351->properties[\'line\'])&&!isset($x351->properties[\'column\'])){$x351->properties[\'file\']=\'<image>/02_object.js\';$x351->properties[\'line\']=136;$x351->properties[\'column\']=13;$x351->attributes[\'file\']=$x351->attributes[\'line\']=$x351->attributes[\'column\']=0;}throw new JSException($x351,136,13,\'<image>/02_object.js\');}$x346=clone JS::$objectTemplate;unset($x352,$W352,$S352,$U352);$x353=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',136,9,\'<image>/02_object.js\');$x352=&$x353[0];list(,$W352,$S352,$U352)=$x353;$x347=$x352;$x346->prototype=$x347;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x356=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x357=$x356($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x357->class)&&$x357->class===\'Error\'&&!isset($x357->properties[\'file\'])&&!isset($x357->properties[\'line\'])&&!isset($x357->properties[\'column\'])){$x357->properties[\'file\']=\'<image>/02_object.js\';$x357->properties[\'line\']=136;$x357->properties[\'column\']=9;$x357->attributes[\'file\']=$x357->attributes[\'line\']=$x357->attributes[\'column\']=0;}throw new JSException($x357,136,9,\'<image>/02_object.js\');}$x354=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',136,9);$x355=$x354($global,$x346,$_TypeError,array(\'Object.defineProperties(): Given properties argument is not an object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x347=$x355;if(is_object($x347)&&$x347!==JS::$undefined){$x346=$x347;}if(isset($x346->class)&&$x346->class===\'Error\'&&!isset($x346->properties[\'file\'])&&!isset($x346->properties[\'line\'])&&!isset($x346->properties[\'column\'])){$x346->properties[\'file\']=\'<image>/02_object.js\';$x346->properties[\'line\']=136;$x346->properties[\'column\']=3;$x346->attributes[\'file\']=$x346->attributes[\'line\']=$x346->attributes[\'column\']=0;}throw new JSException($x346,136,3,\'<image>/02_object.js\');}$scope->properties[\'p\']=JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$_p=JS::$undefined;if($_properties!==JS::$undefined&&$_properties!==NULL){for($x359=array(),$x358=JS::toObject($_properties,$global);$x358;$x358=$x358->prototype){foreach($x358->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x359[$property])){continue;}$x359[$property]=TRUE;$_p=$property;unset($_Object,$WObject,$SObject,$UObject);$x360=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'Object\',140,3,\'<image>/02_object.js\');$_Object=&$x360[0];list(,$WObject,$SObject,$UObject)=$x360;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x361=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',140,3,\'<image>/02_object.js\');$_ReferenceError=&$x361[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x361;$x362=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,3);$x363=$x362($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x363->class)&&$x363->class===\'Error\'&&!isset($x363->properties[\'file\'])&&!isset($x363->properties[\'line\'])&&!isset($x363->properties[\'column\'])){$x363->properties[\'file\']=\'<image>/02_object.js\';$x363->properties[\'line\']=140;$x363->properties[\'column\']=3;$x363->attributes[\'file\']=$x363->attributes[\'line\']=$x363->attributes[\'column\']=0;}throw new JSException($x363,140,3,\'<image>/02_object.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x365=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x365[0];list(,$WTypeError,$STypeError,$UTypeError)=$x365;$x366=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x367=$x366($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x367->class)&&$x367->class===\'Error\'&&!isset($x367->properties[\'file\'])&&!isset($x367->properties[\'line\'])&&!isset($x367->properties[\'column\'])){$x367->properties[\'file\']=\'<image>/02_object.js\';$x367->properties[\'line\']=140;$x367->properties[\'column\']=24;$x367->attributes[\'file\']=$x367->attributes[\'line\']=$x367->attributes[\'column\']=0;}throw new JSException($x367,140,24,\'<image>/02_object.js\');}$x364=JS::toObject($_Object,$global);unset($x368,$W368,$S368,$U368);$x369=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x364,(string)\'defineProperty\',140,24,\'<image>/02_object.js\');$x368=&$x369[0];list(,$W368,$S368,$U368)=$x369;unset($x370,$W370,$S370,$U370);$x371=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_properties,(string)$_p,140,41,\'<image>/02_object.js\');$x370=&$x371[0];list(,$W370,$S370,$U370)=$x371;if(!(is_object($x368)&&isset($x368->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x374=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',140,24,\'<image>/02_object.js\');$_TypeError=&$x374[0];list(,$WTypeError,$STypeError,$UTypeError)=$x374;$x375=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x376=$x375($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x376->class)&&$x376->class===\'Error\'&&!isset($x376->properties[\'file\'])&&!isset($x376->properties[\'line\'])&&!isset($x376->properties[\'column\'])){$x376->properties[\'file\']=\'<image>/02_object.js\';$x376->properties[\'line\']=140;$x376->properties[\'column\']=24;$x376->attributes[\'file\']=$x376->attributes[\'line\']=$x376->attributes[\'column\']=0;}throw new JSException($x376,140,24,\'<image>/02_object.js\');}$x372=$x368->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',140,24);$x373=$x372($global,$x364,$x368,array($_o,$_p,$x370),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x387 =& $scope->properties['arguments'];
$x387->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x387->properties[$i] = $args[$i];
$x387->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x389 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x388 = $x389;
if (!JS::toBoolean($x388, $global)) {
$x392 = $_o;
$x392 = ($x392 === JS::$undefined ? 'undefined' : (is_int($x392) || is_float($x392) ? 'number' : (is_bool($x392) ? 'boolean' : (is_string($x392) ? 'string' : (is_object($x392) && isset($x392->call) ? 'function' : 'object')))));
$x391 = !(((gettype($x392) === gettype('object') && $x392 === 'object'))|| (((is_float($x392) || is_int($x392)) && (is_float('object') || is_int('object'))) && $x392 == 'object'));
$x390 = $x391;
if (JS::toBoolean($x390, $global)) {
$x394 = $_o;
$x394 = ($x394 === JS::$undefined ? 'undefined' : (is_int($x394) || is_float($x394) ? 'number' : (is_bool($x394) ? 'boolean' : (is_string($x394) ? 'string' : (is_object($x394) && isset($x394->call) ? 'function' : 'object')))));
$x393 = !(((gettype($x394) === gettype('function') && $x394 === 'function'))|| (((is_float($x394) || is_int($x394)) && (is_float('function') || is_int('function'))) && $x394 == 'function'));
$x390 = $x393; }
$x388 = $x390; }
if (JS::toBoolean($x388, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x397 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 148, 13, '<image>/02_object.js');
$_TypeError =& $x397[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x397;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x398 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 148, 13, '<image>/02_object.js');
$_ReferenceError =& $x398[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x398;
$x399 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 13);
$x400 = $x399($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x400->class) && $x400->class === 'Error' && !isset($x400->properties['file']) && !isset($x400->properties['line']) && !isset($x400->properties['column'])) {$x400->properties['file'] = '<image>/02_object.js';$x400->properties['line'] = 148;$x400->properties['column'] = 13;$x400->attributes['file'] = $x400->attributes['line'] = $x400->attributes['column'] = 0; }
throw new JSException($x400, 148, 13, '<image>/02_object.js');
}
$x395 = clone JS::$objectTemplate;
unset($x401, $W401, $S401, $U401);
$x402 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 148, 9, '<image>/02_object.js');
$x401 =& $x402[0]; list(,$W401,$S401,$U401) = $x402;
$x396 = $x401;
$x395->prototype = $x396;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x405 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x406 = $x405($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x406->class) && $x406->class === 'Error' && !isset($x406->properties['file']) && !isset($x406->properties['line']) && !isset($x406->properties['column'])) {$x406->properties['file'] = '<image>/02_object.js';$x406->properties['line'] = 148;$x406->properties['column'] = 9;$x406->attributes['file'] = $x406->attributes['line'] = $x406->attributes['column'] = 0; }
throw new JSException($x406, 148, 9, '<image>/02_object.js');
}
$x403 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 148, 9);
$x404 = $x403($global, $x395, $_TypeError, array('Object.seal(): Cannot seal non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x396 = $x404;
if (is_object($x396) && $x396 !== JS::$undefined) { $x395 = $x396; }
if (isset($x395->class) && $x395->class === 'Error' && !isset($x395->properties['file']) && !isset($x395->properties['line']) && !isset($x395->properties['column'])) {$x395->properties['file'] = '<image>/02_object.js';$x395->properties['line'] = 148;$x395->properties['column'] = 3;$x395->attributes['file'] = $x395->attributes['line'] = $x395->attributes['column'] = 0; }
throw new JSException($x395, 148, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x387=&$scope->properties[\'arguments\'];$x387->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x387->properties[$i]=$args[$i];$x387->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x389=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x388=$x389;if(!JS::toBoolean($x388,$global)){$x392=$_o;$x392=($x392===JS::$undefined?\'undefined\':(is_int($x392)||is_float($x392)?\'number\':(is_bool($x392)?\'boolean\':(is_string($x392)?\'string\':(is_object($x392)&&isset($x392->call)?\'function\':\'object\')))));$x391=!(((gettype($x392)===gettype(\'object\')&&$x392===\'object\'))||(((is_float($x392)||is_int($x392))&&(is_float(\'object\')||is_int(\'object\')))&&$x392==\'object\'));$x390=$x391;if(JS::toBoolean($x390,$global)){$x394=$_o;$x394=($x394===JS::$undefined?\'undefined\':(is_int($x394)||is_float($x394)?\'number\':(is_bool($x394)?\'boolean\':(is_string($x394)?\'string\':(is_object($x394)&&isset($x394->call)?\'function\':\'object\')))));$x393=!(((gettype($x394)===gettype(\'function\')&&$x394===\'function\'))||(((is_float($x394)||is_int($x394))&&(is_float(\'function\')||is_int(\'function\')))&&$x394==\'function\'));$x390=$x393;}$x388=$x390;}if(JS::toBoolean($x388,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x397=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',148,13,\'<image>/02_object.js\');$_TypeError=&$x397[0];list(,$WTypeError,$STypeError,$UTypeError)=$x397;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x398=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',148,13,\'<image>/02_object.js\');$_ReferenceError=&$x398[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x398;$x399=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,13);$x400=$x399($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x400->class)&&$x400->class===\'Error\'&&!isset($x400->properties[\'file\'])&&!isset($x400->properties[\'line\'])&&!isset($x400->properties[\'column\'])){$x400->properties[\'file\']=\'<image>/02_object.js\';$x400->properties[\'line\']=148;$x400->properties[\'column\']=13;$x400->attributes[\'file\']=$x400->attributes[\'line\']=$x400->attributes[\'column\']=0;}throw new JSException($x400,148,13,\'<image>/02_object.js\');}$x395=clone JS::$objectTemplate;unset($x401,$W401,$S401,$U401);$x402=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',148,9,\'<image>/02_object.js\');$x401=&$x402[0];list(,$W401,$S401,$U401)=$x402;$x396=$x401;$x395->prototype=$x396;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x405=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x406=$x405($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x406->class)&&$x406->class===\'Error\'&&!isset($x406->properties[\'file\'])&&!isset($x406->properties[\'line\'])&&!isset($x406->properties[\'column\'])){$x406->properties[\'file\']=\'<image>/02_object.js\';$x406->properties[\'line\']=148;$x406->properties[\'column\']=9;$x406->attributes[\'file\']=$x406->attributes[\'line\']=$x406->attributes[\'column\']=0;}throw new JSException($x406,148,9,\'<image>/02_object.js\');}$x403=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',148,9);$x404=$x403($global,$x395,$_TypeError,array(\'Object.seal(): Cannot seal non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x396=$x404;if(is_object($x396)&&$x396!==JS::$undefined){$x395=$x396;}if(isset($x395->class)&&$x395->class===\'Error\'&&!isset($x395->properties[\'file\'])&&!isset($x395->properties[\'line\'])&&!isset($x395->properties[\'column\'])){$x395->properties[\'file\']=\'<image>/02_object.js\';$x395->properties[\'line\']=148;$x395->properties[\'column\']=3;$x395->attributes[\'file\']=$x395->attributes[\'line\']=$x395->attributes[\'column\']=0;}throw new JSException($x395,148,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x417 =& $scope->properties['arguments'];
$x417->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x417->properties[$i] = $args[$i];
$x417->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x419 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x418 = $x419;
if (!JS::toBoolean($x418, $global)) {
$x422 = $_o;
$x422 = ($x422 === JS::$undefined ? 'undefined' : (is_int($x422) || is_float($x422) ? 'number' : (is_bool($x422) ? 'boolean' : (is_string($x422) ? 'string' : (is_object($x422) && isset($x422->call) ? 'function' : 'object')))));
$x421 = !(((gettype($x422) === gettype('object') && $x422 === 'object'))|| (((is_float($x422) || is_int($x422)) && (is_float('object') || is_int('object'))) && $x422 == 'object'));
$x420 = $x421;
if (JS::toBoolean($x420, $global)) {
$x424 = $_o;
$x424 = ($x424 === JS::$undefined ? 'undefined' : (is_int($x424) || is_float($x424) ? 'number' : (is_bool($x424) ? 'boolean' : (is_string($x424) ? 'string' : (is_object($x424) && isset($x424->call) ? 'function' : 'object')))));
$x423 = !(((gettype($x424) === gettype('function') && $x424 === 'function'))|| (((is_float($x424) || is_int($x424)) && (is_float('function') || is_int('function'))) && $x424 == 'function'));
$x420 = $x423; }
$x418 = $x420; }
if (JS::toBoolean($x418, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x427 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 164, 13, '<image>/02_object.js');
$_TypeError =& $x427[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x427;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x428 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 164, 13, '<image>/02_object.js');
$_ReferenceError =& $x428[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x428;
$x429 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 13);
$x430 = $x429($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x430->class) && $x430->class === 'Error' && !isset($x430->properties['file']) && !isset($x430->properties['line']) && !isset($x430->properties['column'])) {$x430->properties['file'] = '<image>/02_object.js';$x430->properties['line'] = 164;$x430->properties['column'] = 13;$x430->attributes['file'] = $x430->attributes['line'] = $x430->attributes['column'] = 0; }
throw new JSException($x430, 164, 13, '<image>/02_object.js');
}
$x425 = clone JS::$objectTemplate;
unset($x431, $W431, $S431, $U431);
$x432 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 164, 9, '<image>/02_object.js');
$x431 =& $x432[0]; list(,$W431,$S431,$U431) = $x432;
$x426 = $x431;
$x425->prototype = $x426;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x435 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x436 = $x435($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x436->class) && $x436->class === 'Error' && !isset($x436->properties['file']) && !isset($x436->properties['line']) && !isset($x436->properties['column'])) {$x436->properties['file'] = '<image>/02_object.js';$x436->properties['line'] = 164;$x436->properties['column'] = 9;$x436->attributes['file'] = $x436->attributes['line'] = $x436->attributes['column'] = 0; }
throw new JSException($x436, 164, 9, '<image>/02_object.js');
}
$x433 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 164, 9);
$x434 = $x433($global, $x425, $_TypeError, array('Object.freeze(): Cannot freeze non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x426 = $x434;
if (is_object($x426) && $x426 !== JS::$undefined) { $x425 = $x426; }
if (isset($x425->class) && $x425->class === 'Error' && !isset($x425->properties['file']) && !isset($x425->properties['line']) && !isset($x425->properties['column'])) {$x425->properties['file'] = '<image>/02_object.js';$x425->properties['line'] = 164;$x425->properties['column'] = 3;$x425->attributes['file'] = $x425->attributes['line'] = $x425->attributes['column'] = 0; }
throw new JSException($x425, 164, 3, '<image>/02_object.js');;
};
foreach (array_keys($_o->attributes) as $property) {$_o->attributes[$property] &= ~JS::WRITABLE;$_o->attributes[$property] &= ~JS::CONFIGURABLE;
		}$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x417=&$scope->properties[\'arguments\'];$x417->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x417->properties[$i]=$args[$i];$x417->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x419=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x418=$x419;if(!JS::toBoolean($x418,$global)){$x422=$_o;$x422=($x422===JS::$undefined?\'undefined\':(is_int($x422)||is_float($x422)?\'number\':(is_bool($x422)?\'boolean\':(is_string($x422)?\'string\':(is_object($x422)&&isset($x422->call)?\'function\':\'object\')))));$x421=!(((gettype($x422)===gettype(\'object\')&&$x422===\'object\'))||(((is_float($x422)||is_int($x422))&&(is_float(\'object\')||is_int(\'object\')))&&$x422==\'object\'));$x420=$x421;if(JS::toBoolean($x420,$global)){$x424=$_o;$x424=($x424===JS::$undefined?\'undefined\':(is_int($x424)||is_float($x424)?\'number\':(is_bool($x424)?\'boolean\':(is_string($x424)?\'string\':(is_object($x424)&&isset($x424->call)?\'function\':\'object\')))));$x423=!(((gettype($x424)===gettype(\'function\')&&$x424===\'function\'))||(((is_float($x424)||is_int($x424))&&(is_float(\'function\')||is_int(\'function\')))&&$x424==\'function\'));$x420=$x423;}$x418=$x420;}if(JS::toBoolean($x418,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x427=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',164,13,\'<image>/02_object.js\');$_TypeError=&$x427[0];list(,$WTypeError,$STypeError,$UTypeError)=$x427;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x428=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',164,13,\'<image>/02_object.js\');$_ReferenceError=&$x428[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x428;$x429=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,13);$x430=$x429($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x430->class)&&$x430->class===\'Error\'&&!isset($x430->properties[\'file\'])&&!isset($x430->properties[\'line\'])&&!isset($x430->properties[\'column\'])){$x430->properties[\'file\']=\'<image>/02_object.js\';$x430->properties[\'line\']=164;$x430->properties[\'column\']=13;$x430->attributes[\'file\']=$x430->attributes[\'line\']=$x430->attributes[\'column\']=0;}throw new JSException($x430,164,13,\'<image>/02_object.js\');}$x425=clone JS::$objectTemplate;unset($x431,$W431,$S431,$U431);$x432=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',164,9,\'<image>/02_object.js\');$x431=&$x432[0];list(,$W431,$S431,$U431)=$x432;$x426=$x431;$x425->prototype=$x426;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x435=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x436=$x435($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x436->class)&&$x436->class===\'Error\'&&!isset($x436->properties[\'file\'])&&!isset($x436->properties[\'line\'])&&!isset($x436->properties[\'column\'])){$x436->properties[\'file\']=\'<image>/02_object.js\';$x436->properties[\'line\']=164;$x436->properties[\'column\']=9;$x436->attributes[\'file\']=$x436->attributes[\'line\']=$x436->attributes[\'column\']=0;}throw new JSException($x436,164,9,\'<image>/02_object.js\');}$x433=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',164,9);$x434=$x433($global,$x425,$_TypeError,array(\'Object.freeze(): Cannot freeze non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x426=$x434;if(is_object($x426)&&$x426!==JS::$undefined){$x425=$x426;}if(isset($x425->class)&&$x425->class===\'Error\'&&!isset($x425->properties[\'file\'])&&!isset($x425->properties[\'line\'])&&!isset($x425->properties[\'column\'])){$x425->properties[\'file\']=\'<image>/02_object.js\';$x425->properties[\'line\']=164;$x425->properties[\'column\']=3;$x425->attributes[\'file\']=$x425->attributes[\'line\']=$x425->attributes[\'column\']=0;}throw new JSException($x425,164,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){$_o->attributes[$property]&=~JS::WRITABLE;$_o->attributes[$property]&=~JS::CONFIGURABLE;}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x447 =& $scope->properties['arguments'];
$x447->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x447->properties[$i] = $args[$i];
$x447->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x449 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x448 = $x449;
if (!JS::toBoolean($x448, $global)) {
$x452 = $_o;
$x452 = ($x452 === JS::$undefined ? 'undefined' : (is_int($x452) || is_float($x452) ? 'number' : (is_bool($x452) ? 'boolean' : (is_string($x452) ? 'string' : (is_object($x452) && isset($x452->call) ? 'function' : 'object')))));
$x451 = !(((gettype($x452) === gettype('object') && $x452 === 'object'))|| (((is_float($x452) || is_int($x452)) && (is_float('object') || is_int('object'))) && $x452 == 'object'));
$x450 = $x451;
if (JS::toBoolean($x450, $global)) {
$x454 = $_o;
$x454 = ($x454 === JS::$undefined ? 'undefined' : (is_int($x454) || is_float($x454) ? 'number' : (is_bool($x454) ? 'boolean' : (is_string($x454) ? 'string' : (is_object($x454) && isset($x454->call) ? 'function' : 'object')))));
$x453 = !(((gettype($x454) === gettype('function') && $x454 === 'function'))|| (((is_float($x454) || is_int($x454)) && (is_float('function') || is_int('function'))) && $x454 == 'function'));
$x450 = $x453; }
$x448 = $x450; }
if (JS::toBoolean($x448, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x457 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 181, 13, '<image>/02_object.js');
$_TypeError =& $x457[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x457;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x458 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 181, 13, '<image>/02_object.js');
$_ReferenceError =& $x458[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x458;
$x459 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 13);
$x460 = $x459($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x460->class) && $x460->class === 'Error' && !isset($x460->properties['file']) && !isset($x460->properties['line']) && !isset($x460->properties['column'])) {$x460->properties['file'] = '<image>/02_object.js';$x460->properties['line'] = 181;$x460->properties['column'] = 13;$x460->attributes['file'] = $x460->attributes['line'] = $x460->attributes['column'] = 0; }
throw new JSException($x460, 181, 13, '<image>/02_object.js');
}
$x455 = clone JS::$objectTemplate;
unset($x461, $W461, $S461, $U461);
$x462 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 181, 9, '<image>/02_object.js');
$x461 =& $x462[0]; list(,$W461,$S461,$U461) = $x462;
$x456 = $x461;
$x455->prototype = $x456;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x465 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x466 = $x465($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x466->class) && $x466->class === 'Error' && !isset($x466->properties['file']) && !isset($x466->properties['line']) && !isset($x466->properties['column'])) {$x466->properties['file'] = '<image>/02_object.js';$x466->properties['line'] = 181;$x466->properties['column'] = 9;$x466->attributes['file'] = $x466->attributes['line'] = $x466->attributes['column'] = 0; }
throw new JSException($x466, 181, 9, '<image>/02_object.js');
}
$x463 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 181, 9);
$x464 = $x463($global, $x455, $_TypeError, array('Object.preventExtensions(): Cannot prevent extensions on non-object.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x456 = $x464;
if (is_object($x456) && $x456 !== JS::$undefined) { $x455 = $x456; }
if (isset($x455->class) && $x455->class === 'Error' && !isset($x455->properties['file']) && !isset($x455->properties['line']) && !isset($x455->properties['column'])) {$x455->properties['file'] = '<image>/02_object.js';$x455->properties['line'] = 181;$x455->properties['column'] = 3;$x455->attributes['file'] = $x455->attributes['line'] = $x455->attributes['column'] = 0; }
throw new JSException($x455, 181, 3, '<image>/02_object.js');;
};
$_o->extensible = FALSE;
return $_o;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x447=&$scope->properties[\'arguments\'];$x447->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x447->properties[$i]=$args[$i];$x447->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x449=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x448=$x449;if(!JS::toBoolean($x448,$global)){$x452=$_o;$x452=($x452===JS::$undefined?\'undefined\':(is_int($x452)||is_float($x452)?\'number\':(is_bool($x452)?\'boolean\':(is_string($x452)?\'string\':(is_object($x452)&&isset($x452->call)?\'function\':\'object\')))));$x451=!(((gettype($x452)===gettype(\'object\')&&$x452===\'object\'))||(((is_float($x452)||is_int($x452))&&(is_float(\'object\')||is_int(\'object\')))&&$x452==\'object\'));$x450=$x451;if(JS::toBoolean($x450,$global)){$x454=$_o;$x454=($x454===JS::$undefined?\'undefined\':(is_int($x454)||is_float($x454)?\'number\':(is_bool($x454)?\'boolean\':(is_string($x454)?\'string\':(is_object($x454)&&isset($x454->call)?\'function\':\'object\')))));$x453=!(((gettype($x454)===gettype(\'function\')&&$x454===\'function\'))||(((is_float($x454)||is_int($x454))&&(is_float(\'function\')||is_int(\'function\')))&&$x454==\'function\'));$x450=$x453;}$x448=$x450;}if(JS::toBoolean($x448,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x457=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',181,13,\'<image>/02_object.js\');$_TypeError=&$x457[0];list(,$WTypeError,$STypeError,$UTypeError)=$x457;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x458=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',181,13,\'<image>/02_object.js\');$_ReferenceError=&$x458[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x458;$x459=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,13);$x460=$x459($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x460->class)&&$x460->class===\'Error\'&&!isset($x460->properties[\'file\'])&&!isset($x460->properties[\'line\'])&&!isset($x460->properties[\'column\'])){$x460->properties[\'file\']=\'<image>/02_object.js\';$x460->properties[\'line\']=181;$x460->properties[\'column\']=13;$x460->attributes[\'file\']=$x460->attributes[\'line\']=$x460->attributes[\'column\']=0;}throw new JSException($x460,181,13,\'<image>/02_object.js\');}$x455=clone JS::$objectTemplate;unset($x461,$W461,$S461,$U461);$x462=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',181,9,\'<image>/02_object.js\');$x461=&$x462[0];list(,$W461,$S461,$U461)=$x462;$x456=$x461;$x455->prototype=$x456;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x465=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x466=$x465($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x466->class)&&$x466->class===\'Error\'&&!isset($x466->properties[\'file\'])&&!isset($x466->properties[\'line\'])&&!isset($x466->properties[\'column\'])){$x466->properties[\'file\']=\'<image>/02_object.js\';$x466->properties[\'line\']=181;$x466->properties[\'column\']=9;$x466->attributes[\'file\']=$x466->attributes[\'line\']=$x466->attributes[\'column\']=0;}throw new JSException($x466,181,9,\'<image>/02_object.js\');}$x463=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',181,9);$x464=$x463($global,$x455,$_TypeError,array(\'Object.preventExtensions(): Cannot prevent extensions on non-object.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x456=$x464;if(is_object($x456)&&$x456!==JS::$undefined){$x455=$x456;}if(isset($x455->class)&&$x455->class===\'Error\'&&!isset($x455->properties[\'file\'])&&!isset($x455->properties[\'line\'])&&!isset($x455->properties[\'column\'])){$x455->properties[\'file\']=\'<image>/02_object.js\';$x455->properties[\'line\']=181;$x455->properties[\'column\']=3;$x455->attributes[\'file\']=$x455->attributes[\'line\']=$x455->attributes[\'column\']=0;}throw new JSException($x455,181,3,\'<image>/02_object.js\');}$_o->extensible=FALSE;return$_o;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x477 =& $scope->properties['arguments'];
$x477->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x477->properties[$i] = $args[$i];
$x477->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x479 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x478 = $x479;
if (!JS::toBoolean($x478, $global)) {
$x482 = $_o;
$x482 = ($x482 === JS::$undefined ? 'undefined' : (is_int($x482) || is_float($x482) ? 'number' : (is_bool($x482) ? 'boolean' : (is_string($x482) ? 'string' : (is_object($x482) && isset($x482->call) ? 'function' : 'object')))));
$x481 = !(((gettype($x482) === gettype('object') && $x482 === 'object'))|| (((is_float($x482) || is_int($x482)) && (is_float('object') || is_int('object'))) && $x482 == 'object'));
$x480 = $x481;
if (JS::toBoolean($x480, $global)) {
$x484 = $_o;
$x484 = ($x484 === JS::$undefined ? 'undefined' : (is_int($x484) || is_float($x484) ? 'number' : (is_bool($x484) ? 'boolean' : (is_string($x484) ? 'string' : (is_object($x484) && isset($x484->call) ? 'function' : 'object')))));
$x483 = !(((gettype($x484) === gettype('function') && $x484 === 'function'))|| (((is_float($x484) || is_int($x484)) && (is_float('function') || is_int('function'))) && $x484 == 'function'));
$x480 = $x483; }
$x478 = $x480; }
if (JS::toBoolean($x478, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x487 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 191, 13, '<image>/02_object.js');
$_TypeError =& $x487[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x487;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x488 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 191, 13, '<image>/02_object.js');
$_ReferenceError =& $x488[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x488;
$x489 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 13);
$x490 = $x489($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x490->class) && $x490->class === 'Error' && !isset($x490->properties['file']) && !isset($x490->properties['line']) && !isset($x490->properties['column'])) {$x490->properties['file'] = '<image>/02_object.js';$x490->properties['line'] = 191;$x490->properties['column'] = 13;$x490->attributes['file'] = $x490->attributes['line'] = $x490->attributes['column'] = 0; }
throw new JSException($x490, 191, 13, '<image>/02_object.js');
}
$x485 = clone JS::$objectTemplate;
unset($x491, $W491, $S491, $U491);
$x492 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 191, 9, '<image>/02_object.js');
$x491 =& $x492[0]; list(,$W491,$S491,$U491) = $x492;
$x486 = $x491;
$x485->prototype = $x486;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x495 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x496 = $x495($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x496->class) && $x496->class === 'Error' && !isset($x496->properties['file']) && !isset($x496->properties['line']) && !isset($x496->properties['column'])) {$x496->properties['file'] = '<image>/02_object.js';$x496->properties['line'] = 191;$x496->properties['column'] = 9;$x496->attributes['file'] = $x496->attributes['line'] = $x496->attributes['column'] = 0; }
throw new JSException($x496, 191, 9, '<image>/02_object.js');
}
$x493 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 191, 9);
$x494 = $x493($global, $x485, $_TypeError, array('Object.isSealed(): Cannot return if sealed, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x486 = $x494;
if (is_object($x486) && $x486 !== JS::$undefined) { $x485 = $x486; }
if (isset($x485->class) && $x485->class === 'Error' && !isset($x485->properties['file']) && !isset($x485->properties['line']) && !isset($x485->properties['column'])) {$x485->properties['file'] = '<image>/02_object.js';$x485->properties['line'] = 191;$x485->properties['column'] = 3;$x485->attributes['file'] = $x485->attributes['line'] = $x485->attributes['column'] = 0; }
throw new JSException($x485, 191, 3, '<image>/02_object.js');;
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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x477=&$scope->properties[\'arguments\'];$x477->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x477->properties[$i]=$args[$i];$x477->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x479=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x478=$x479;if(!JS::toBoolean($x478,$global)){$x482=$_o;$x482=($x482===JS::$undefined?\'undefined\':(is_int($x482)||is_float($x482)?\'number\':(is_bool($x482)?\'boolean\':(is_string($x482)?\'string\':(is_object($x482)&&isset($x482->call)?\'function\':\'object\')))));$x481=!(((gettype($x482)===gettype(\'object\')&&$x482===\'object\'))||(((is_float($x482)||is_int($x482))&&(is_float(\'object\')||is_int(\'object\')))&&$x482==\'object\'));$x480=$x481;if(JS::toBoolean($x480,$global)){$x484=$_o;$x484=($x484===JS::$undefined?\'undefined\':(is_int($x484)||is_float($x484)?\'number\':(is_bool($x484)?\'boolean\':(is_string($x484)?\'string\':(is_object($x484)&&isset($x484->call)?\'function\':\'object\')))));$x483=!(((gettype($x484)===gettype(\'function\')&&$x484===\'function\'))||(((is_float($x484)||is_int($x484))&&(is_float(\'function\')||is_int(\'function\')))&&$x484==\'function\'));$x480=$x483;}$x478=$x480;}if(JS::toBoolean($x478,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x487=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',191,13,\'<image>/02_object.js\');$_TypeError=&$x487[0];list(,$WTypeError,$STypeError,$UTypeError)=$x487;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x488=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',191,13,\'<image>/02_object.js\');$_ReferenceError=&$x488[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x488;$x489=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,13);$x490=$x489($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x490->class)&&$x490->class===\'Error\'&&!isset($x490->properties[\'file\'])&&!isset($x490->properties[\'line\'])&&!isset($x490->properties[\'column\'])){$x490->properties[\'file\']=\'<image>/02_object.js\';$x490->properties[\'line\']=191;$x490->properties[\'column\']=13;$x490->attributes[\'file\']=$x490->attributes[\'line\']=$x490->attributes[\'column\']=0;}throw new JSException($x490,191,13,\'<image>/02_object.js\');}$x485=clone JS::$objectTemplate;unset($x491,$W491,$S491,$U491);$x492=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',191,9,\'<image>/02_object.js\');$x491=&$x492[0];list(,$W491,$S491,$U491)=$x492;$x486=$x491;$x485->prototype=$x486;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x495=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x496=$x495($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x496->class)&&$x496->class===\'Error\'&&!isset($x496->properties[\'file\'])&&!isset($x496->properties[\'line\'])&&!isset($x496->properties[\'column\'])){$x496->properties[\'file\']=\'<image>/02_object.js\';$x496->properties[\'line\']=191;$x496->properties[\'column\']=9;$x496->attributes[\'file\']=$x496->attributes[\'line\']=$x496->attributes[\'column\']=0;}throw new JSException($x496,191,9,\'<image>/02_object.js\');}$x493=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',191,9);$x494=$x493($global,$x485,$_TypeError,array(\'Object.isSealed(): Cannot return if sealed, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x486=$x494;if(is_object($x486)&&$x486!==JS::$undefined){$x485=$x486;}if(isset($x485->class)&&$x485->class===\'Error\'&&!isset($x485->properties[\'file\'])&&!isset($x485->properties[\'line\'])&&!isset($x485->properties[\'column\'])){$x485->properties[\'file\']=\'<image>/02_object.js\';$x485->properties[\'line\']=191;$x485->properties[\'column\']=3;$x485->attributes[\'file\']=$x485->attributes[\'line\']=$x485->attributes[\'column\']=0;}throw new JSException($x485,191,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&JS::CONFIGURABLE){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x517 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 207, 13, '<image>/02_object.js');
$_TypeError =& $x517[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x517;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x518 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 207, 13, '<image>/02_object.js');
$_ReferenceError =& $x518[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x518;
$x519 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 13);
$x520 = $x519($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x520->class) && $x520->class === 'Error' && !isset($x520->properties['file']) && !isset($x520->properties['line']) && !isset($x520->properties['column'])) {$x520->properties['file'] = '<image>/02_object.js';$x520->properties['line'] = 207;$x520->properties['column'] = 13;$x520->attributes['file'] = $x520->attributes['line'] = $x520->attributes['column'] = 0; }
throw new JSException($x520, 207, 13, '<image>/02_object.js');
}
$x515 = clone JS::$objectTemplate;
unset($x521, $W521, $S521, $U521);
$x522 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 207, 9, '<image>/02_object.js');
$x521 =& $x522[0]; list(,$W521,$S521,$U521) = $x522;
$x516 = $x521;
$x515->prototype = $x516;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x525 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x526 = $x525($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x526->class) && $x526->class === 'Error' && !isset($x526->properties['file']) && !isset($x526->properties['line']) && !isset($x526->properties['column'])) {$x526->properties['file'] = '<image>/02_object.js';$x526->properties['line'] = 207;$x526->properties['column'] = 9;$x526->attributes['file'] = $x526->attributes['line'] = $x526->attributes['column'] = 0; }
throw new JSException($x526, 207, 9, '<image>/02_object.js');
}
$x523 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 207, 9);
$x524 = $x523($global, $x515, $_TypeError, array('Object.isFrozen(): Cannot return if frozen, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x516 = $x524;
if (is_object($x516) && $x516 !== JS::$undefined) { $x515 = $x516; }
if (isset($x515->class) && $x515->class === 'Error' && !isset($x515->properties['file']) && !isset($x515->properties['line']) && !isset($x515->properties['column'])) {$x515->properties['file'] = '<image>/02_object.js';$x515->properties['line'] = 207;$x515->properties['column'] = 3;$x515->attributes['file'] = $x515->attributes['line'] = $x515->attributes['column'] = 0; }
throw new JSException($x515, 207, 3, '<image>/02_object.js');;
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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x507=&$scope->properties[\'arguments\'];$x507->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x507->properties[$i]=$args[$i];$x507->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x509=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x508=$x509;if(!JS::toBoolean($x508,$global)){$x512=$_o;$x512=($x512===JS::$undefined?\'undefined\':(is_int($x512)||is_float($x512)?\'number\':(is_bool($x512)?\'boolean\':(is_string($x512)?\'string\':(is_object($x512)&&isset($x512->call)?\'function\':\'object\')))));$x511=!(((gettype($x512)===gettype(\'object\')&&$x512===\'object\'))||(((is_float($x512)||is_int($x512))&&(is_float(\'object\')||is_int(\'object\')))&&$x512==\'object\'));$x510=$x511;if(JS::toBoolean($x510,$global)){$x514=$_o;$x514=($x514===JS::$undefined?\'undefined\':(is_int($x514)||is_float($x514)?\'number\':(is_bool($x514)?\'boolean\':(is_string($x514)?\'string\':(is_object($x514)&&isset($x514->call)?\'function\':\'object\')))));$x513=!(((gettype($x514)===gettype(\'function\')&&$x514===\'function\'))||(((is_float($x514)||is_int($x514))&&(is_float(\'function\')||is_int(\'function\')))&&$x514==\'function\'));$x510=$x513;}$x508=$x510;}if(JS::toBoolean($x508,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x517=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',207,13,\'<image>/02_object.js\');$_TypeError=&$x517[0];list(,$WTypeError,$STypeError,$UTypeError)=$x517;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x518=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',207,13,\'<image>/02_object.js\');$_ReferenceError=&$x518[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x518;$x519=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,13);$x520=$x519($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x520->class)&&$x520->class===\'Error\'&&!isset($x520->properties[\'file\'])&&!isset($x520->properties[\'line\'])&&!isset($x520->properties[\'column\'])){$x520->properties[\'file\']=\'<image>/02_object.js\';$x520->properties[\'line\']=207;$x520->properties[\'column\']=13;$x520->attributes[\'file\']=$x520->attributes[\'line\']=$x520->attributes[\'column\']=0;}throw new JSException($x520,207,13,\'<image>/02_object.js\');}$x515=clone JS::$objectTemplate;unset($x521,$W521,$S521,$U521);$x522=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',207,9,\'<image>/02_object.js\');$x521=&$x522[0];list(,$W521,$S521,$U521)=$x522;$x516=$x521;$x515->prototype=$x516;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x525=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x526=$x525($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x526->class)&&$x526->class===\'Error\'&&!isset($x526->properties[\'file\'])&&!isset($x526->properties[\'line\'])&&!isset($x526->properties[\'column\'])){$x526->properties[\'file\']=\'<image>/02_object.js\';$x526->properties[\'line\']=207;$x526->properties[\'column\']=9;$x526->attributes[\'file\']=$x526->attributes[\'line\']=$x526->attributes[\'column\']=0;}throw new JSException($x526,207,9,\'<image>/02_object.js\');}$x523=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',207,9);$x524=$x523($global,$x515,$_TypeError,array(\'Object.isFrozen(): Cannot return if frozen, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x516=$x524;if(is_object($x516)&&$x516!==JS::$undefined){$x515=$x516;}if(isset($x515->class)&&$x515->class===\'Error\'&&!isset($x515->properties[\'file\'])&&!isset($x515->properties[\'line\'])&&!isset($x515->properties[\'column\'])){$x515->properties[\'file\']=\'<image>/02_object.js\';$x515->properties[\'line\']=207;$x515->properties[\'column\']=3;$x515->attributes[\'file\']=$x515->attributes[\'line\']=$x515->attributes[\'column\']=0;}throw new JSException($x515,207,3,\'<image>/02_object.js\');}foreach(array_keys($_o->attributes)as$property){if($_o->attributes[$property]&(JS::CONFIGURABLE|JS::WRITABLE)){return FALSE;}}return!$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x537 =& $scope->properties['arguments'];
$x537->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x537->properties[$i] = $args[$i];
$x537->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x539 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x538 = $x539;
if (!JS::toBoolean($x538, $global)) {
$x542 = $_o;
$x542 = ($x542 === JS::$undefined ? 'undefined' : (is_int($x542) || is_float($x542) ? 'number' : (is_bool($x542) ? 'boolean' : (is_string($x542) ? 'string' : (is_object($x542) && isset($x542->call) ? 'function' : 'object')))));
$x541 = !(((gettype($x542) === gettype('object') && $x542 === 'object'))|| (((is_float($x542) || is_int($x542)) && (is_float('object') || is_int('object'))) && $x542 == 'object'));
$x540 = $x541;
if (JS::toBoolean($x540, $global)) {
$x544 = $_o;
$x544 = ($x544 === JS::$undefined ? 'undefined' : (is_int($x544) || is_float($x544) ? 'number' : (is_bool($x544) ? 'boolean' : (is_string($x544) ? 'string' : (is_object($x544) && isset($x544->call) ? 'function' : 'object')))));
$x543 = !(((gettype($x544) === gettype('function') && $x544 === 'function'))|| (((is_float($x544) || is_int($x544)) && (is_float('function') || is_int('function'))) && $x544 == 'function'));
$x540 = $x543; }
$x538 = $x540; }
if (JS::toBoolean($x538, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x547 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 223, 13, '<image>/02_object.js');
$_TypeError =& $x547[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x547;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x548 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 223, 13, '<image>/02_object.js');
$_ReferenceError =& $x548[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x548;
$x549 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 13);
$x550 = $x549($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x550->class) && $x550->class === 'Error' && !isset($x550->properties['file']) && !isset($x550->properties['line']) && !isset($x550->properties['column'])) {$x550->properties['file'] = '<image>/02_object.js';$x550->properties['line'] = 223;$x550->properties['column'] = 13;$x550->attributes['file'] = $x550->attributes['line'] = $x550->attributes['column'] = 0; }
throw new JSException($x550, 223, 13, '<image>/02_object.js');
}
$x545 = clone JS::$objectTemplate;
unset($x551, $W551, $S551, $U551);
$x552 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 223, 9, '<image>/02_object.js');
$x551 =& $x552[0]; list(,$W551,$S551,$U551) = $x552;
$x546 = $x551;
$x545->prototype = $x546;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x555 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x556 = $x555($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x556->class) && $x556->class === 'Error' && !isset($x556->properties['file']) && !isset($x556->properties['line']) && !isset($x556->properties['column'])) {$x556->properties['file'] = '<image>/02_object.js';$x556->properties['line'] = 223;$x556->properties['column'] = 9;$x556->attributes['file'] = $x556->attributes['line'] = $x556->attributes['column'] = 0; }
throw new JSException($x556, 223, 9, '<image>/02_object.js');
}
$x553 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 223, 9);
$x554 = $x553($global, $x545, $_TypeError, array('Object.isExtensible(): Cannot return if extensible, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x546 = $x554;
if (is_object($x546) && $x546 !== JS::$undefined) { $x545 = $x546; }
if (isset($x545->class) && $x545->class === 'Error' && !isset($x545->properties['file']) && !isset($x545->properties['line']) && !isset($x545->properties['column'])) {$x545->properties['file'] = '<image>/02_object.js';$x545->properties['line'] = 223;$x545->properties['column'] = 3;$x545->attributes['file'] = $x545->attributes['line'] = $x545->attributes['column'] = 0; }
throw new JSException($x545, 223, 3, '<image>/02_object.js');;
};
return$_o->extensible;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x537=&$scope->properties[\'arguments\'];$x537->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x537->properties[$i]=$args[$i];$x537->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x539=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x538=$x539;if(!JS::toBoolean($x538,$global)){$x542=$_o;$x542=($x542===JS::$undefined?\'undefined\':(is_int($x542)||is_float($x542)?\'number\':(is_bool($x542)?\'boolean\':(is_string($x542)?\'string\':(is_object($x542)&&isset($x542->call)?\'function\':\'object\')))));$x541=!(((gettype($x542)===gettype(\'object\')&&$x542===\'object\'))||(((is_float($x542)||is_int($x542))&&(is_float(\'object\')||is_int(\'object\')))&&$x542==\'object\'));$x540=$x541;if(JS::toBoolean($x540,$global)){$x544=$_o;$x544=($x544===JS::$undefined?\'undefined\':(is_int($x544)||is_float($x544)?\'number\':(is_bool($x544)?\'boolean\':(is_string($x544)?\'string\':(is_object($x544)&&isset($x544->call)?\'function\':\'object\')))));$x543=!(((gettype($x544)===gettype(\'function\')&&$x544===\'function\'))||(((is_float($x544)||is_int($x544))&&(is_float(\'function\')||is_int(\'function\')))&&$x544==\'function\'));$x540=$x543;}$x538=$x540;}if(JS::toBoolean($x538,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x547=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',223,13,\'<image>/02_object.js\');$_TypeError=&$x547[0];list(,$WTypeError,$STypeError,$UTypeError)=$x547;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x548=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',223,13,\'<image>/02_object.js\');$_ReferenceError=&$x548[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x548;$x549=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,13);$x550=$x549($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x550->class)&&$x550->class===\'Error\'&&!isset($x550->properties[\'file\'])&&!isset($x550->properties[\'line\'])&&!isset($x550->properties[\'column\'])){$x550->properties[\'file\']=\'<image>/02_object.js\';$x550->properties[\'line\']=223;$x550->properties[\'column\']=13;$x550->attributes[\'file\']=$x550->attributes[\'line\']=$x550->attributes[\'column\']=0;}throw new JSException($x550,223,13,\'<image>/02_object.js\');}$x545=clone JS::$objectTemplate;unset($x551,$W551,$S551,$U551);$x552=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',223,9,\'<image>/02_object.js\');$x551=&$x552[0];list(,$W551,$S551,$U551)=$x552;$x546=$x551;$x545->prototype=$x546;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x555=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x556=$x555($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x556->class)&&$x556->class===\'Error\'&&!isset($x556->properties[\'file\'])&&!isset($x556->properties[\'line\'])&&!isset($x556->properties[\'column\'])){$x556->properties[\'file\']=\'<image>/02_object.js\';$x556->properties[\'line\']=223;$x556->properties[\'column\']=9;$x556->attributes[\'file\']=$x556->attributes[\'line\']=$x556->attributes[\'column\']=0;}throw new JSException($x556,223,9,\'<image>/02_object.js\');}$x553=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',223,9);$x554=$x553($global,$x545,$_TypeError,array(\'Object.isExtensible(): Cannot return if extensible, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x546=$x554;if(is_object($x546)&&$x546!==JS::$undefined){$x545=$x546;}if(isset($x545->class)&&$x545->class===\'Error\'&&!isset($x545->properties[\'file\'])&&!isset($x545->properties[\'line\'])&&!isset($x545->properties[\'column\'])){$x545->properties[\'file\']=\'<image>/02_object.js\';$x545->properties[\'line\']=223;$x545->properties[\'column\']=3;$x545->attributes[\'file\']=$x545->attributes[\'line\']=$x545->attributes[\'column\']=0;}throw new JSException($x545,223,3,\'<image>/02_object.js\');}return$_o->extensible;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x567 =& $scope->properties['arguments'];
$x567->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x567->properties[$i] = $args[$i];
$x567->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['o'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_o =& $scope->properties['o'];
$Uo = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x569 = (((gettype($_o) === gettype(NULL) && $_o === NULL))|| (((is_float($_o) || is_int($_o)) && (is_float(NULL) || is_int(NULL))) && $_o == NULL));
$x568 = $x569;
if (!JS::toBoolean($x568, $global)) {
$x572 = $_o;
$x572 = ($x572 === JS::$undefined ? 'undefined' : (is_int($x572) || is_float($x572) ? 'number' : (is_bool($x572) ? 'boolean' : (is_string($x572) ? 'string' : (is_object($x572) && isset($x572->call) ? 'function' : 'object')))));
$x571 = !(((gettype($x572) === gettype('object') && $x572 === 'object'))|| (((is_float($x572) || is_int($x572)) && (is_float('object') || is_int('object'))) && $x572 == 'object'));
$x570 = $x571;
if (JS::toBoolean($x570, $global)) {
$x574 = $_o;
$x574 = ($x574 === JS::$undefined ? 'undefined' : (is_int($x574) || is_float($x574) ? 'number' : (is_bool($x574) ? 'boolean' : (is_string($x574) ? 'string' : (is_object($x574) && isset($x574->call) ? 'function' : 'object')))));
$x573 = !(((gettype($x574) === gettype('function') && $x574 === 'function'))|| (((is_float($x574) || is_int($x574)) && (is_float('function') || is_int('function'))) && $x574 == 'function'));
$x570 = $x573; }
$x568 = $x570; }
if (JS::toBoolean($x568, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x577 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 231, 13, '<image>/02_object.js');
$_TypeError =& $x577[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x577;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x578 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 231, 13, '<image>/02_object.js');
$_ReferenceError =& $x578[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x578;
$x579 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 13);
$x580 = $x579($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x580->class) && $x580->class === 'Error' && !isset($x580->properties['file']) && !isset($x580->properties['line']) && !isset($x580->properties['column'])) {$x580->properties['file'] = '<image>/02_object.js';$x580->properties['line'] = 231;$x580->properties['column'] = 13;$x580->attributes['file'] = $x580->attributes['line'] = $x580->attributes['column'] = 0; }
throw new JSException($x580, 231, 13, '<image>/02_object.js');
}
$x575 = clone JS::$objectTemplate;
unset($x581, $W581, $S581, $U581);
$x582 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 231, 9, '<image>/02_object.js');
$x581 =& $x582[0]; list(,$W581,$S581,$U581) = $x582;
$x576 = $x581;
$x575->prototype = $x576;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x585 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x586 = $x585($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x586->class) && $x586->class === 'Error' && !isset($x586->properties['file']) && !isset($x586->properties['line']) && !isset($x586->properties['column'])) {$x586->properties['file'] = '<image>/02_object.js';$x586->properties['line'] = 231;$x586->properties['column'] = 9;$x586->attributes['file'] = $x586->attributes['line'] = $x586->attributes['column'] = 0; }
throw new JSException($x586, 231, 9, '<image>/02_object.js');
}
$x583 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 231, 9);
$x584 = $x583($global, $x575, $_TypeError, array('Object.keys(): Cannot return keys, non-object given.'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x576 = $x584;
if (is_object($x576) && $x576 !== JS::$undefined) { $x575 = $x576; }
if (isset($x575->class) && $x575->class === 'Error' && !isset($x575->properties['file']) && !isset($x575->properties['line']) && !isset($x575->properties['column'])) {$x575->properties['file'] = '<image>/02_object.js';$x575->properties['line'] = 231;$x575->properties['column'] = 3;$x575->attributes['file'] = $x575->attributes['line'] = $x575->attributes['column'] = 0; }
throw new JSException($x575, 231, 3, '<image>/02_object.js');;
};
$x587 = clone JS::$arrayTemplate;
$x587->properties['length'] = 0;
$x587->attributes['length'] = JS::WRITABLE;
$scope->properties['keys'] = JS::$undefined; $_keys =& $scope->properties['keys'];
$Ukeys = FALSE;
$_keys = $x587;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_o !== JS::$undefined && $_o !== NULL) {
for ($x589 = array(), $x588 = JS::toObject($_o, $global); $x588; $x588 = $x588->prototype) {
foreach ($x588->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x589[$property])) { continue; }
$x589[$property] = TRUE;
$_k = $property;

if ($_keys === JS::$undefined || $_keys === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x591 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x591[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x591;
$x592 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x593 = $x592($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x593->class) && $x593->class === 'Error' && !isset($x593->properties['file']) && !isset($x593->properties['line']) && !isset($x593->properties['column'])) {$x593->properties['file'] = '<image>/02_object.js';$x593->properties['line'] = 237;$x593->properties['column'] = 12;$x593->attributes['file'] = $x593->attributes['line'] = $x593->attributes['column'] = 0; }
throw new JSException($x593, 237, 12, '<image>/02_object.js');
}
$x590 = JS::toObject($_keys, $global);
unset($x594, $W594, $S594, $U594);
$x595 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x590, (string) 'push', 237, 12, '<image>/02_object.js');
$x594 =& $x595[0]; list(,$W594,$S594,$U594) = $x595;
if (!(is_object($x594) && isset($x594->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x598 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 237, 12, '<image>/02_object.js');
$_TypeError =& $x598[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x598;
$x599 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x600 = $x599($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x600->class) && $x600->class === 'Error' && !isset($x600->properties['file']) && !isset($x600->properties['line']) && !isset($x600->properties['column'])) {$x600->properties['file'] = '<image>/02_object.js';$x600->properties['line'] = 237;$x600->properties['column'] = 12;$x600->attributes['file'] = $x600->attributes['line'] = $x600->attributes['column'] = 0; }
throw new JSException($x600, 237, 12, '<image>/02_object.js');
}
$x596 = $x594->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 237, 12);
$x597 = $x596($global, $x590, $x594, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);;
}
}
};
return $_keys;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x567=&$scope->properties[\'arguments\'];$x567->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x567->properties[$i]=$args[$i];$x567->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'o\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$global->scope[++$global->scope_sp]=$scope;$x569=(((gettype($_o)===gettype(NULL)&&$_o===NULL))||(((is_float($_o)||is_int($_o))&&(is_float(NULL)||is_int(NULL)))&&$_o==NULL));$x568=$x569;if(!JS::toBoolean($x568,$global)){$x572=$_o;$x572=($x572===JS::$undefined?\'undefined\':(is_int($x572)||is_float($x572)?\'number\':(is_bool($x572)?\'boolean\':(is_string($x572)?\'string\':(is_object($x572)&&isset($x572->call)?\'function\':\'object\')))));$x571=!(((gettype($x572)===gettype(\'object\')&&$x572===\'object\'))||(((is_float($x572)||is_int($x572))&&(is_float(\'object\')||is_int(\'object\')))&&$x572==\'object\'));$x570=$x571;if(JS::toBoolean($x570,$global)){$x574=$_o;$x574=($x574===JS::$undefined?\'undefined\':(is_int($x574)||is_float($x574)?\'number\':(is_bool($x574)?\'boolean\':(is_string($x574)?\'string\':(is_object($x574)&&isset($x574->call)?\'function\':\'object\')))));$x573=!(((gettype($x574)===gettype(\'function\')&&$x574===\'function\'))||(((is_float($x574)||is_int($x574))&&(is_float(\'function\')||is_int(\'function\')))&&$x574==\'function\'));$x570=$x573;}$x568=$x570;}if(JS::toBoolean($x568,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x577=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',231,13,\'<image>/02_object.js\');$_TypeError=&$x577[0];list(,$WTypeError,$STypeError,$UTypeError)=$x577;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x578=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',231,13,\'<image>/02_object.js\');$_ReferenceError=&$x578[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x578;$x579=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,13);$x580=$x579($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x580->class)&&$x580->class===\'Error\'&&!isset($x580->properties[\'file\'])&&!isset($x580->properties[\'line\'])&&!isset($x580->properties[\'column\'])){$x580->properties[\'file\']=\'<image>/02_object.js\';$x580->properties[\'line\']=231;$x580->properties[\'column\']=13;$x580->attributes[\'file\']=$x580->attributes[\'line\']=$x580->attributes[\'column\']=0;}throw new JSException($x580,231,13,\'<image>/02_object.js\');}$x575=clone JS::$objectTemplate;unset($x581,$W581,$S581,$U581);$x582=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',231,9,\'<image>/02_object.js\');$x581=&$x582[0];list(,$W581,$S581,$U581)=$x582;$x576=$x581;$x575->prototype=$x576;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x585=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x586=$x585($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x586->class)&&$x586->class===\'Error\'&&!isset($x586->properties[\'file\'])&&!isset($x586->properties[\'line\'])&&!isset($x586->properties[\'column\'])){$x586->properties[\'file\']=\'<image>/02_object.js\';$x586->properties[\'line\']=231;$x586->properties[\'column\']=9;$x586->attributes[\'file\']=$x586->attributes[\'line\']=$x586->attributes[\'column\']=0;}throw new JSException($x586,231,9,\'<image>/02_object.js\');}$x583=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',231,9);$x584=$x583($global,$x575,$_TypeError,array(\'Object.keys(): Cannot return keys, non-object given.\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x576=$x584;if(is_object($x576)&&$x576!==JS::$undefined){$x575=$x576;}if(isset($x575->class)&&$x575->class===\'Error\'&&!isset($x575->properties[\'file\'])&&!isset($x575->properties[\'line\'])&&!isset($x575->properties[\'column\'])){$x575->properties[\'file\']=\'<image>/02_object.js\';$x575->properties[\'line\']=231;$x575->properties[\'column\']=3;$x575->attributes[\'file\']=$x575->attributes[\'line\']=$x575->attributes[\'column\']=0;}throw new JSException($x575,231,3,\'<image>/02_object.js\');}$x587=clone JS::$arrayTemplate;$x587->properties[\'length\']=0;$x587->attributes[\'length\']=JS::WRITABLE;$scope->properties[\'keys\']=JS::$undefined;$_keys=&$scope->properties[\'keys\'];$Ukeys=FALSE;$_keys=$x587;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_o!==JS::$undefined&&$_o!==NULL){for($x589=array(),$x588=JS::toObject($_o,$global);$x588;$x588=$x588->prototype){foreach($x588->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x589[$property])){continue;}$x589[$property]=TRUE;$_k=$property;if($_keys===JS::$undefined||$_keys===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x591=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x591[0];list(,$WTypeError,$STypeError,$UTypeError)=$x591;$x592=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x593=$x592($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x593->class)&&$x593->class===\'Error\'&&!isset($x593->properties[\'file\'])&&!isset($x593->properties[\'line\'])&&!isset($x593->properties[\'column\'])){$x593->properties[\'file\']=\'<image>/02_object.js\';$x593->properties[\'line\']=237;$x593->properties[\'column\']=12;$x593->attributes[\'file\']=$x593->attributes[\'line\']=$x593->attributes[\'column\']=0;}throw new JSException($x593,237,12,\'<image>/02_object.js\');}$x590=JS::toObject($_keys,$global);unset($x594,$W594,$S594,$U594);$x595=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x590,(string)\'push\',237,12,\'<image>/02_object.js\');$x594=&$x595[0];list(,$W594,$S594,$U594)=$x595;if(!(is_object($x594)&&isset($x594->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x598=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',237,12,\'<image>/02_object.js\');$_TypeError=&$x598[0];list(,$WTypeError,$STypeError,$UTypeError)=$x598;$x599=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x600=$x599($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x600->class)&&$x600->class===\'Error\'&&!isset($x600->properties[\'file\'])&&!isset($x600->properties[\'line\'])&&!isset($x600->properties[\'column\'])){$x600->properties[\'file\']=\'<image>/02_object.js\';$x600->properties[\'line\']=237;$x600->properties[\'column\']=12;$x600->attributes[\'file\']=$x600->attributes[\'line\']=$x600->attributes[\'column\']=0;}throw new JSException($x600,237,12,\'<image>/02_object.js\');}$x596=$x594->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',237,12);$x597=$x596($global,$x590,$x594,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);}}}return$_keys;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x630 =& $scope->properties['arguments'];
$x630->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x630->properties[$i] = $args[$i];
$x630->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x631 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
if (JS::toBoolean($x631, $global)) {

return '[object Undefined]';;
}
else {
$x632 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
if (JS::toBoolean($x632, $global)) {

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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x630=&$scope->properties[\'arguments\'];$x630->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x630->properties[$i]=$args[$i];$x630->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x631=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));if(JS::toBoolean($x631,$global)){return\'[object Undefined]\';}else{$x632=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));if(JS::toBoolean($x632,$global)){return\'[object Null]\';}else{$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=JS::toObject($leThis,$global);if(JS::toBoolean(!isset($_o->class),$global)){return\'[object]\';}return"[object ".$_o->class."]";}}return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$global->scope[++$global->scope_sp] = $scope;
if ($leThis === JS::$undefined || $leThis === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x647 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x647[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x647;
$x648 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x649 = $x648($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x649->class) && $x649->class === 'Error' && !isset($x649->properties['file']) && !isset($x649->properties['line']) && !isset($x649->properties['column'])) {$x649->properties['file'] = '<image>/02_object.js';$x649->properties['line'] = 268;$x649->properties['column'] = 22;$x649->attributes['file'] = $x649->attributes['line'] = $x649->attributes['column'] = 0; }
throw new JSException($x649, 268, 22, '<image>/02_object.js');
}
$x646 = JS::toObject($leThis, $global);
unset($x650, $W650, $S650, $U650);
$x651 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $x646, (string) 'toString', 268, 22, '<image>/02_object.js');
$x650 =& $x651[0]; list(,$W650,$S650,$U650) = $x651;
if (!(is_object($x650) && isset($x650->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x654 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 268, 22, '<image>/02_object.js');
$_TypeError =& $x654[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x654;
$x655 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x656 = $x655($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x656->class) && $x656->class === 'Error' && !isset($x656->properties['file']) && !isset($x656->properties['line']) && !isset($x656->properties['column'])) {$x656->properties['file'] = '<image>/02_object.js';$x656->properties['line'] = 268;$x656->properties['column'] = 22;$x656->attributes['file'] = $x656->attributes['line'] = $x656->attributes['column'] = 0; }
throw new JSException($x656, 268, 22, '<image>/02_object.js');
}
$x652 = $x650->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 268, 22);
$x653 = $x652($global, $x646, $x650, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
return $x653;
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x645=&$scope->properties[\'arguments\'];$x645->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x645->properties[$i]=$args[$i];$x645->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;if($leThis===JS::$undefined||$leThis===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x647=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x647[0];list(,$WTypeError,$STypeError,$UTypeError)=$x647;$x648=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x649=$x648($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x649->class)&&$x649->class===\'Error\'&&!isset($x649->properties[\'file\'])&&!isset($x649->properties[\'line\'])&&!isset($x649->properties[\'column\'])){$x649->properties[\'file\']=\'<image>/02_object.js\';$x649->properties[\'line\']=268;$x649->properties[\'column\']=22;$x649->attributes[\'file\']=$x649->attributes[\'line\']=$x649->attributes[\'column\']=0;}throw new JSException($x649,268,22,\'<image>/02_object.js\');}$x646=JS::toObject($leThis,$global);unset($x650,$W650,$S650,$U650);$x651=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$x646,(string)\'toString\',268,22,\'<image>/02_object.js\');$x650=&$x651[0];list(,$W650,$S650,$U650)=$x651;if(!(is_object($x650)&&isset($x650->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x654=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',268,22,\'<image>/02_object.js\');$_TypeError=&$x654[0];list(,$WTypeError,$STypeError,$UTypeError)=$x654;$x655=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x656=$x655($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x656->class)&&$x656->class===\'Error\'&&!isset($x656->properties[\'file\'])&&!isset($x656->properties[\'line\'])&&!isset($x656->properties[\'column\'])){$x656->properties[\'file\']=\'<image>/02_object.js\';$x656->properties[\'line\']=268;$x656->properties[\'column\']=22;$x656->attributes[\'file\']=$x656->attributes[\'line\']=$x656->attributes[\'column\']=0;}throw new JSException($x656,268,22,\'<image>/02_object.js\');}$x652=$x650->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',268,22);$x653=$x652($global,$x646,$x650,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);return$x653;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x669 =& $scope->properties['arguments'];
$x669->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x669->properties[$i] = $args[$i];
$x669->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$global->scope[++$global->scope_sp] = $scope;
$x671 = (((gettype($leThis) === gettype(JS::$undefined) && $leThis === JS::$undefined))|| (((is_float($leThis) || is_int($leThis)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $leThis == JS::$undefined));
$x670 = $x671;
if (!JS::toBoolean($x670, $global)) {
$x672 = (((gettype($leThis) === gettype(NULL) && $leThis === NULL))|| (((is_float($leThis) || is_int($leThis)) && (is_float(NULL) || is_int(NULL))) && $leThis == NULL));
$x670 = $x672; }
if (JS::toBoolean($x670, $global)) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x675 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 273, 13, '<image>/02_object.js');
$_TypeError =& $x675[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x675;
if ($UTypeError) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x676 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'ReferenceError', 273, 13, '<image>/02_object.js');
$_ReferenceError =& $x676[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x676;
$x677 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 13);
$x678 = $x677($global, $global, $_ReferenceError, array('TypeError is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x678->class) && $x678->class === 'Error' && !isset($x678->properties['file']) && !isset($x678->properties['line']) && !isset($x678->properties['column'])) {$x678->properties['file'] = '<image>/02_object.js';$x678->properties['line'] = 273;$x678->properties['column'] = 13;$x678->attributes['file'] = $x678->attributes['line'] = $x678->attributes['column'] = 0; }
throw new JSException($x678, 273, 13, '<image>/02_object.js');
}
$x673 = clone JS::$objectTemplate;
unset($x679, $W679, $S679, $U679);
$x680 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_TypeError, (string) 'prototype', 273, 9, '<image>/02_object.js');
$x679 =& $x680[0]; list(,$W679,$S679,$U679) = $x680;
$x674 = $x679;
$x673->prototype = $x674;
if (!(is_object($_TypeError) && isset($_TypeError->call))) { 
$x683 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x684 = $x683($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x684->class) && $x684->class === 'Error' && !isset($x684->properties['file']) && !isset($x684->properties['line']) && !isset($x684->properties['column'])) {$x684->properties['file'] = '<image>/02_object.js';$x684->properties['line'] = 273;$x684->properties['column'] = 9;$x684->attributes['file'] = $x684->attributes['line'] = $x684->attributes['column'] = 0; }
throw new JSException($x684, 273, 9, '<image>/02_object.js');
}
$x681 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 273, 9);
$x682 = $x681($global, $x673, $_TypeError, array('Object.prototype.valueOf(): this is undefined or null'), true);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x674 = $x682;
if (is_object($x674) && $x674 !== JS::$undefined) { $x673 = $x674; }
if (isset($x673->class) && $x673->class === 'Error' && !isset($x673->properties['file']) && !isset($x673->properties['line']) && !isset($x673->properties['column'])) {$x673->properties['file'] = '<image>/02_object.js';$x673->properties['line'] = 273;$x673->properties['column'] = 3;$x673->attributes['file'] = $x673->attributes['line'] = $x673->attributes['column'] = 0; }
throw new JSException($x673, 273, 3, '<image>/02_object.js');;
};
return JS::toObject($leThis, $global);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x669=&$scope->properties[\'arguments\'];$x669->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x669->properties[$i]=$args[$i];$x669->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$global->scope[++$global->scope_sp]=$scope;$x671=(((gettype($leThis)===gettype(JS::$undefined)&&$leThis===JS::$undefined))||(((is_float($leThis)||is_int($leThis))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$leThis==JS::$undefined));$x670=$x671;if(!JS::toBoolean($x670,$global)){$x672=(((gettype($leThis)===gettype(NULL)&&$leThis===NULL))||(((is_float($leThis)||is_int($leThis))&&(is_float(NULL)||is_int(NULL)))&&$leThis==NULL));$x670=$x672;}if(JS::toBoolean($x670,$global)){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x675=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'TypeError\',273,13,\'<image>/02_object.js\');$_TypeError=&$x675[0];list(,$WTypeError,$STypeError,$UTypeError)=$x675;if($UTypeError){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x676=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global,$scope,$scope,(string)\'ReferenceError\',273,13,\'<image>/02_object.js\');$_ReferenceError=&$x676[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x676;$x677=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,13);$x678=$x677($global,$global,$_ReferenceError,array(\'TypeError is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x678->class)&&$x678->class===\'Error\'&&!isset($x678->properties[\'file\'])&&!isset($x678->properties[\'line\'])&&!isset($x678->properties[\'column\'])){$x678->properties[\'file\']=\'<image>/02_object.js\';$x678->properties[\'line\']=273;$x678->properties[\'column\']=13;$x678->attributes[\'file\']=$x678->attributes[\'line\']=$x678->attributes[\'column\']=0;}throw new JSException($x678,273,13,\'<image>/02_object.js\');}$x673=clone JS::$objectTemplate;unset($x679,$W679,$S679,$U679);$x680=_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global,$scope,$_TypeError,(string)\'prototype\',273,9,\'<image>/02_object.js\');$x679=&$x680[0];list(,$W679,$S679,$U679)=$x680;$x674=$x679;$x673->prototype=$x674;if(!(is_object($_TypeError)&&isset($_TypeError->call))){$x683=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x684=$x683($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x684->class)&&$x684->class===\'Error\'&&!isset($x684->properties[\'file\'])&&!isset($x684->properties[\'line\'])&&!isset($x684->properties[\'column\'])){$x684->properties[\'file\']=\'<image>/02_object.js\';$x684->properties[\'line\']=273;$x684->properties[\'column\']=9;$x684->attributes[\'file\']=$x684->attributes[\'line\']=$x684->attributes[\'column\']=0;}throw new JSException($x684,273,9,\'<image>/02_object.js\');}$x681=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/02_object.js\',273,9);$x682=$x681($global,$x673,$_TypeError,array(\'Object.prototype.valueOf(): this is undefined or null\'),true);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x674=$x682;if(is_object($x674)&&$x674!==JS::$undefined){$x673=$x674;}if(isset($x673->class)&&$x673->class===\'Error\'&&!isset($x673->properties[\'file\'])&&!isset($x673->properties[\'line\'])&&!isset($x673->properties[\'column\'])){$x673->properties[\'file\']=\'<image>/02_object.js\';$x673->properties[\'line\']=273;$x673->properties[\'column\']=3;$x673->attributes[\'file\']=$x673->attributes[\'line\']=$x673->attributes[\'column\']=0;}throw new JSException($x673,273,3,\'<image>/02_object.js\');}return JS::toObject($leThis,$global);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x697 =& $scope->properties['arguments'];
$x697->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x697->properties[$i] = $args[$i];
$x697->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return array_key_exists($_p, $leThis->properties) || isset($leThis->attributes[$_p]);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x697=&$scope->properties[\'arguments\'];$x697->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x697->properties[$i]=$args[$i];$x697->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return array_key_exists($_p,$leThis->properties)||isset($leThis->attributes[$_p]);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x710 =& $scope->properties['arguments'];
$x710->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x710->properties[$i] = $args[$i];
$x710->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$global->scope[++$global->scope_sp] = $scope;
$x712 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x711 = $x712;
if (!JS::toBoolean($x711, $global)) {
$x715 = $_v;
$x715 = ($x715 === JS::$undefined ? 'undefined' : (is_int($x715) || is_float($x715) ? 'number' : (is_bool($x715) ? 'boolean' : (is_string($x715) ? 'string' : (is_object($x715) && isset($x715->call) ? 'function' : 'object')))));
$x714 = !(((gettype($x715) === gettype('object') && $x715 === 'object'))|| (((is_float($x715) || is_int($x715)) && (is_float('object') || is_int('object'))) && $x715 == 'object'));
$x713 = $x714;
if (JS::toBoolean($x713, $global)) {
$x717 = $_v;
$x717 = ($x717 === JS::$undefined ? 'undefined' : (is_int($x717) || is_float($x717) ? 'number' : (is_bool($x717) ? 'boolean' : (is_string($x717) ? 'string' : (is_object($x717) && isset($x717->call) ? 'function' : 'object')))));
$x716 = !(((gettype($x717) === gettype('function') && $x717 === 'function'))|| (((is_float($x717) || is_int($x717)) && (is_float('function') || is_int('function'))) && $x717 == 'function'));
$x713 = $x716; }
$x711 = $x713; }
if (JS::toBoolean($x711, $global)) {

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
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x710=&$scope->properties[\'arguments\'];$x710->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x710->properties[$i]=$args[$i];$x710->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$global->scope[++$global->scope_sp]=$scope;$x712=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x711=$x712;if(!JS::toBoolean($x711,$global)){$x715=$_v;$x715=($x715===JS::$undefined?\'undefined\':(is_int($x715)||is_float($x715)?\'number\':(is_bool($x715)?\'boolean\':(is_string($x715)?\'string\':(is_object($x715)&&isset($x715->call)?\'function\':\'object\')))));$x714=!(((gettype($x715)===gettype(\'object\')&&$x715===\'object\'))||(((is_float($x715)||is_int($x715))&&(is_float(\'object\')||is_int(\'object\')))&&$x715==\'object\'));$x713=$x714;if(JS::toBoolean($x713,$global)){$x717=$_v;$x717=($x717===JS::$undefined?\'undefined\':(is_int($x717)||is_float($x717)?\'number\':(is_bool($x717)?\'boolean\':(is_string($x717)?\'string\':(is_object($x717)&&isset($x717->call)?\'function\':\'object\')))));$x716=!(((gettype($x717)===gettype(\'function\')&&$x717===\'function\'))||(((is_float($x717)||is_int($x717))&&(is_float(\'function\')||is_int(\'function\')))&&$x717==\'function\'));$x713=$x716;}$x711=$x713;}if(JS::toBoolean($x711,$global)){return false;}for($_v=$_v->prototype;$_v;$_v=$_v->prototype){if($_v===$leThis){return TRUE;}}return false;return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x730 =& $scope->properties['arguments'];
$x730->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x730->properties[$i] = $args[$i];
$x730->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['p'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_p =& $scope->properties['p'];
$Up = FALSE;
$global->scope[++$global->scope_sp] = $scope;
return JS::toBoolean(isset($leThis->attributes[$_p]) && ($leThis->attributes[$_p] & JS::ENUMERABLE), $global);
;
return JS::$undefined;
}
echo 'function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x730=&$scope->properties[\'arguments\'];$x730->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x730->properties[$i]=$args[$i];$x730->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'p\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_p=&$scope->properties[\'p\'];$Up=FALSE;$global->scope[++$global->scope_sp]=$scope;return JS::toBoolean(isset($leThis->attributes[$_p])&&($leThis->attributes[$_p]&JS::ENUMERABLE),$global);return JS::$undefined;}', "\n";
function _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/02_object.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/02_object.js';$scope->properties['__dirname'] = '<image>';}
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
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x35 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 9, 23, '<image>/02_object.js');
$_TypeError =& $x35[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x35;
$x36 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 9, 23);
$x37 = $x36($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x37->class) && $x37->class === 'Error' && !isset($x37->properties['file']) && !isset($x37->properties['line']) && !isset($x37->properties['column'])) {$x37->properties['file'] = '<image>/02_object.js';$x37->properties['line'] = 9;$x37->properties['column'] = 23;$x37->attributes['file'] = $x37->attributes['line'] = $x37->attributes['column'] = 0; }
throw new JSException($x37, 9, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x38, $W38, $S38, $U38);
$x42 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'getPrototypeOf', 9, 23, '<image>/02_object.js');
$x38 =& $x42[0]; list(,$W38,$S38,$U38) = $x42;
if ($U38 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getPrototypeOf'] = $x38; $x38 =& $_Object->properties['getPrototypeOf']; $_Object->attributes['getPrototypeOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U38 = FALSE; $W38 = TRUE; }
if (isset($S38)) {
$x44 = $S38->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 9, 23);
$x45 = $x44($global, $_Object, $S38, array($x34), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x43 = $x45;
} else {
if (!$U38) {$x43 = $x34;if ($W38) { $x38 = $x34; }  }
else { $x43 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getPrototypeOf') && 'getPrototypeOf' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getPrototypeOf' + 1; };
$x121 = clone JS::$functionTemplate; $x121->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_6'; $x121->parameters = array (
  0 => 'o',
  1 => 'p',
); $x121->scope = $scope; $x121->properties['prototype'] = clone JS::$objectTemplate; $x121->attributes['prototype'] = JS::WRITABLE; $x121->properties['prototype']->properties['constructor'] = $x121; $x121->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x121->properties['length'] = 2; $x121->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x122 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 17, 33, '<image>/02_object.js');
$_TypeError =& $x122[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x122;
$x123 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x124 = $x123($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x124->class) && $x124->class === 'Error' && !isset($x124->properties['file']) && !isset($x124->properties['line']) && !isset($x124->properties['column'])) {$x124->properties['file'] = '<image>/02_object.js';$x124->properties['line'] = 17;$x124->properties['column'] = 33;$x124->attributes['file'] = $x124->attributes['line'] = $x124->attributes['column'] = 0; }
throw new JSException($x124, 17, 33, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x125, $W125, $S125, $U125);
$x126 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'getOwnPropertyDescriptor', 17, 33, '<image>/02_object.js');
$x125 =& $x126[0]; list(,$W125,$S125,$U125) = $x126;
if ($U125 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getOwnPropertyDescriptor'] = $x125; $x125 =& $_Object->properties['getOwnPropertyDescriptor']; $_Object->attributes['getOwnPropertyDescriptor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U125 = FALSE; $W125 = TRUE; }
if (isset($S125)) {
$x128 = $S125->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 17, 33);
$x129 = $x128($global, $_Object, $S125, array($x121), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x127 = $x129;
} else {
if (!$U125) {$x127 = $x121;if ($W125) { $x125 = $x121; }  }
else { $x127 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyDescriptor') && 'getOwnPropertyDescriptor' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyDescriptor' + 1; };
$x163 = clone JS::$functionTemplate; $x163->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_7'; $x163->parameters = array (
  0 => 'o',
); $x163->scope = $scope; $x163->properties['prototype'] = clone JS::$objectTemplate; $x163->attributes['prototype'] = JS::WRITABLE; $x163->properties['prototype']->properties['constructor'] = $x163; $x163->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x163->properties['length'] = 1; $x163->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x164 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 48, 28, '<image>/02_object.js');
$_TypeError =& $x164[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x164;
$x165 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x166 = $x165($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x166->class) && $x166->class === 'Error' && !isset($x166->properties['file']) && !isset($x166->properties['line']) && !isset($x166->properties['column'])) {$x166->properties['file'] = '<image>/02_object.js';$x166->properties['line'] = 48;$x166->properties['column'] = 28;$x166->attributes['file'] = $x166->attributes['line'] = $x166->attributes['column'] = 0; }
throw new JSException($x166, 48, 28, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x167, $W167, $S167, $U167);
$x168 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'getOwnPropertyNames', 48, 28, '<image>/02_object.js');
$x167 =& $x168[0]; list(,$W167,$S167,$U167) = $x168;
if ($U167 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['getOwnPropertyNames'] = $x167; $x167 =& $_Object->properties['getOwnPropertyNames']; $_Object->attributes['getOwnPropertyNames'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U167 = FALSE; $W167 = TRUE; }
if (isset($S167)) {
$x170 = $S167->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 48, 28);
$x171 = $x170($global, $_Object, $S167, array($x163), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x169 = $x171;
} else {
if (!$U167) {$x169 = $x163;if ($W167) { $x167 = $x163; }  }
else { $x169 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('getOwnPropertyNames') && 'getOwnPropertyNames' >= $_Object->properties['length']) { $_Object->properties['length'] = 'getOwnPropertyNames' + 1; };
$x207 = clone JS::$functionTemplate; $x207->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_8'; $x207->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x207->scope = $scope; $x207->properties['prototype'] = clone JS::$objectTemplate; $x207->attributes['prototype'] = JS::WRITABLE; $x207->properties['prototype']->properties['constructor'] = $x207; $x207->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x207->properties['length'] = 2; $x207->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x208 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 62, 15, '<image>/02_object.js');
$_TypeError =& $x208[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x208;
$x209 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x210 = $x209($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x210->class) && $x210->class === 'Error' && !isset($x210->properties['file']) && !isset($x210->properties['line']) && !isset($x210->properties['column'])) {$x210->properties['file'] = '<image>/02_object.js';$x210->properties['line'] = 62;$x210->properties['column'] = 15;$x210->attributes['file'] = $x210->attributes['line'] = $x210->attributes['column'] = 0; }
throw new JSException($x210, 62, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x211, $W211, $S211, $U211);
$x212 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'create', 62, 15, '<image>/02_object.js');
$x211 =& $x212[0]; list(,$W211,$S211,$U211) = $x212;
if ($U211 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['create'] = $x211; $x211 =& $_Object->properties['create']; $_Object->attributes['create'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U211 = FALSE; $W211 = TRUE; }
if (isset($S211)) {
$x214 = $S211->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 62, 15);
$x215 = $x214($global, $_Object, $S211, array($x207), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x213 = $x215;
} else {
if (!$U211) {$x213 = $x207;if ($W211) { $x211 = $x207; }  }
else { $x213 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('create') && 'create' >= $_Object->properties['length']) { $_Object->properties['length'] = 'create' + 1; };
$x314 = clone JS::$functionTemplate; $x314->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_9'; $x314->parameters = array (
  0 => 'o',
  1 => 'p',
  2 => 'attributes',
); $x314->scope = $scope; $x314->properties['prototype'] = clone JS::$objectTemplate; $x314->attributes['prototype'] = JS::WRITABLE; $x314->properties['prototype']->properties['constructor'] = $x314; $x314->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x314->properties['length'] = 3; $x314->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x315 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 78, 23, '<image>/02_object.js');
$_TypeError =& $x315[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x315;
$x316 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x317 = $x316($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x317->class) && $x317->class === 'Error' && !isset($x317->properties['file']) && !isset($x317->properties['line']) && !isset($x317->properties['column'])) {$x317->properties['file'] = '<image>/02_object.js';$x317->properties['line'] = 78;$x317->properties['column'] = 23;$x317->attributes['file'] = $x317->attributes['line'] = $x317->attributes['column'] = 0; }
throw new JSException($x317, 78, 23, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x318, $W318, $S318, $U318);
$x319 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'defineProperty', 78, 23, '<image>/02_object.js');
$x318 =& $x319[0]; list(,$W318,$S318,$U318) = $x319;
if ($U318 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['defineProperty'] = $x318; $x318 =& $_Object->properties['defineProperty']; $_Object->attributes['defineProperty'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U318 = FALSE; $W318 = TRUE; }
if (isset($S318)) {
$x321 = $S318->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 78, 23);
$x322 = $x321($global, $_Object, $S318, array($x314), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x320 = $x322;
} else {
if (!$U318) {$x320 = $x314;if ($W318) { $x318 = $x314; }  }
else { $x320 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperty') && 'defineProperty' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperty' + 1; };
$x377 = clone JS::$functionTemplate; $x377->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_10'; $x377->parameters = array (
  0 => 'o',
  1 => 'properties',
); $x377->scope = $scope; $x377->properties['prototype'] = clone JS::$objectTemplate; $x377->attributes['prototype'] = JS::WRITABLE; $x377->properties['prototype']->properties['constructor'] = $x377; $x377->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x377->properties['length'] = 2; $x377->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x378 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 130, 25, '<image>/02_object.js');
$_TypeError =& $x378[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x378;
$x379 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x380 = $x379($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x380->class) && $x380->class === 'Error' && !isset($x380->properties['file']) && !isset($x380->properties['line']) && !isset($x380->properties['column'])) {$x380->properties['file'] = '<image>/02_object.js';$x380->properties['line'] = 130;$x380->properties['column'] = 25;$x380->attributes['file'] = $x380->attributes['line'] = $x380->attributes['column'] = 0; }
throw new JSException($x380, 130, 25, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x381, $W381, $S381, $U381);
$x382 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'defineProperties', 130, 25, '<image>/02_object.js');
$x381 =& $x382[0]; list(,$W381,$S381,$U381) = $x382;
if ($U381 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['defineProperties'] = $x381; $x381 =& $_Object->properties['defineProperties']; $_Object->attributes['defineProperties'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U381 = FALSE; $W381 = TRUE; }
if (isset($S381)) {
$x384 = $S381->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 130, 25);
$x385 = $x384($global, $_Object, $S381, array($x377), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x383 = $x385;
} else {
if (!$U381) {$x383 = $x377;if ($W381) { $x381 = $x377; }  }
else { $x383 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('defineProperties') && 'defineProperties' >= $_Object->properties['length']) { $_Object->properties['length'] = 'defineProperties' + 1; };
$x407 = clone JS::$functionTemplate; $x407->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_11'; $x407->parameters = array (
  0 => 'o',
); $x407->scope = $scope; $x407->properties['prototype'] = clone JS::$objectTemplate; $x407->attributes['prototype'] = JS::WRITABLE; $x407->properties['prototype']->properties['constructor'] = $x407; $x407->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x407->properties['length'] = 1; $x407->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x408 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 146, 13, '<image>/02_object.js');
$_TypeError =& $x408[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x408;
$x409 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x410 = $x409($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x410->class) && $x410->class === 'Error' && !isset($x410->properties['file']) && !isset($x410->properties['line']) && !isset($x410->properties['column'])) {$x410->properties['file'] = '<image>/02_object.js';$x410->properties['line'] = 146;$x410->properties['column'] = 13;$x410->attributes['file'] = $x410->attributes['line'] = $x410->attributes['column'] = 0; }
throw new JSException($x410, 146, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x411, $W411, $S411, $U411);
$x412 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'seal', 146, 13, '<image>/02_object.js');
$x411 =& $x412[0]; list(,$W411,$S411,$U411) = $x412;
if ($U411 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['seal'] = $x411; $x411 =& $_Object->properties['seal']; $_Object->attributes['seal'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U411 = FALSE; $W411 = TRUE; }
if (isset($S411)) {
$x414 = $S411->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 146, 13);
$x415 = $x414($global, $_Object, $S411, array($x407), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x413 = $x415;
} else {
if (!$U411) {$x413 = $x407;if ($W411) { $x411 = $x407; }  }
else { $x413 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('seal') && 'seal' >= $_Object->properties['length']) { $_Object->properties['length'] = 'seal' + 1; };
$x437 = clone JS::$functionTemplate; $x437->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_12'; $x437->parameters = array (
  0 => 'o',
); $x437->scope = $scope; $x437->properties['prototype'] = clone JS::$objectTemplate; $x437->attributes['prototype'] = JS::WRITABLE; $x437->properties['prototype']->properties['constructor'] = $x437; $x437->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x437->properties['length'] = 1; $x437->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x438 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 162, 15, '<image>/02_object.js');
$_TypeError =& $x438[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x438;
$x439 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x440 = $x439($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x440->class) && $x440->class === 'Error' && !isset($x440->properties['file']) && !isset($x440->properties['line']) && !isset($x440->properties['column'])) {$x440->properties['file'] = '<image>/02_object.js';$x440->properties['line'] = 162;$x440->properties['column'] = 15;$x440->attributes['file'] = $x440->attributes['line'] = $x440->attributes['column'] = 0; }
throw new JSException($x440, 162, 15, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x441, $W441, $S441, $U441);
$x442 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'freeze', 162, 15, '<image>/02_object.js');
$x441 =& $x442[0]; list(,$W441,$S441,$U441) = $x442;
if ($U441 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['freeze'] = $x441; $x441 =& $_Object->properties['freeze']; $_Object->attributes['freeze'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U441 = FALSE; $W441 = TRUE; }
if (isset($S441)) {
$x444 = $S441->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 162, 15);
$x445 = $x444($global, $_Object, $S441, array($x437), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x443 = $x445;
} else {
if (!$U441) {$x443 = $x437;if ($W441) { $x441 = $x437; }  }
else { $x443 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('freeze') && 'freeze' >= $_Object->properties['length']) { $_Object->properties['length'] = 'freeze' + 1; };
$x467 = clone JS::$functionTemplate; $x467->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_13'; $x467->parameters = array (
  0 => 'o',
); $x467->scope = $scope; $x467->properties['prototype'] = clone JS::$objectTemplate; $x467->attributes['prototype'] = JS::WRITABLE; $x467->properties['prototype']->properties['constructor'] = $x467; $x467->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x467->properties['length'] = 1; $x467->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x468 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 179, 26, '<image>/02_object.js');
$_TypeError =& $x468[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x468;
$x469 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x470 = $x469($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x470->class) && $x470->class === 'Error' && !isset($x470->properties['file']) && !isset($x470->properties['line']) && !isset($x470->properties['column'])) {$x470->properties['file'] = '<image>/02_object.js';$x470->properties['line'] = 179;$x470->properties['column'] = 26;$x470->attributes['file'] = $x470->attributes['line'] = $x470->attributes['column'] = 0; }
throw new JSException($x470, 179, 26, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x471, $W471, $S471, $U471);
$x472 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'preventExtensions', 179, 26, '<image>/02_object.js');
$x471 =& $x472[0]; list(,$W471,$S471,$U471) = $x472;
if ($U471 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['preventExtensions'] = $x471; $x471 =& $_Object->properties['preventExtensions']; $_Object->attributes['preventExtensions'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U471 = FALSE; $W471 = TRUE; }
if (isset($S471)) {
$x474 = $S471->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 179, 26);
$x475 = $x474($global, $_Object, $S471, array($x467), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x473 = $x475;
} else {
if (!$U471) {$x473 = $x467;if ($W471) { $x471 = $x467; }  }
else { $x473 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('preventExtensions') && 'preventExtensions' >= $_Object->properties['length']) { $_Object->properties['length'] = 'preventExtensions' + 1; };
$x497 = clone JS::$functionTemplate; $x497->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_14'; $x497->parameters = array (
  0 => 'o',
); $x497->scope = $scope; $x497->properties['prototype'] = clone JS::$objectTemplate; $x497->attributes['prototype'] = JS::WRITABLE; $x497->properties['prototype']->properties['constructor'] = $x497; $x497->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x497->properties['length'] = 1; $x497->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x498 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 189, 17, '<image>/02_object.js');
$_TypeError =& $x498[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x498;
$x499 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x500 = $x499($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x500->class) && $x500->class === 'Error' && !isset($x500->properties['file']) && !isset($x500->properties['line']) && !isset($x500->properties['column'])) {$x500->properties['file'] = '<image>/02_object.js';$x500->properties['line'] = 189;$x500->properties['column'] = 17;$x500->attributes['file'] = $x500->attributes['line'] = $x500->attributes['column'] = 0; }
throw new JSException($x500, 189, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x501, $W501, $S501, $U501);
$x502 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'isSealed', 189, 17, '<image>/02_object.js');
$x501 =& $x502[0]; list(,$W501,$S501,$U501) = $x502;
if ($U501 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isSealed'] = $x501; $x501 =& $_Object->properties['isSealed']; $_Object->attributes['isSealed'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U501 = FALSE; $W501 = TRUE; }
if (isset($S501)) {
$x504 = $S501->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 189, 17);
$x505 = $x504($global, $_Object, $S501, array($x497), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x503 = $x505;
} else {
if (!$U501) {$x503 = $x497;if ($W501) { $x501 = $x497; }  }
else { $x503 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isSealed') && 'isSealed' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isSealed' + 1; };
$x527 = clone JS::$functionTemplate; $x527->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_15'; $x527->parameters = array (
  0 => 'o',
); $x527->scope = $scope; $x527->properties['prototype'] = clone JS::$objectTemplate; $x527->attributes['prototype'] = JS::WRITABLE; $x527->properties['prototype']->properties['constructor'] = $x527; $x527->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x527->properties['length'] = 1; $x527->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x528 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 205, 17, '<image>/02_object.js');
$_TypeError =& $x528[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x528;
$x529 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x530 = $x529($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x530->class) && $x530->class === 'Error' && !isset($x530->properties['file']) && !isset($x530->properties['line']) && !isset($x530->properties['column'])) {$x530->properties['file'] = '<image>/02_object.js';$x530->properties['line'] = 205;$x530->properties['column'] = 17;$x530->attributes['file'] = $x530->attributes['line'] = $x530->attributes['column'] = 0; }
throw new JSException($x530, 205, 17, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x531, $W531, $S531, $U531);
$x532 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'isFrozen', 205, 17, '<image>/02_object.js');
$x531 =& $x532[0]; list(,$W531,$S531,$U531) = $x532;
if ($U531 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isFrozen'] = $x531; $x531 =& $_Object->properties['isFrozen']; $_Object->attributes['isFrozen'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U531 = FALSE; $W531 = TRUE; }
if (isset($S531)) {
$x534 = $S531->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 205, 17);
$x535 = $x534($global, $_Object, $S531, array($x527), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x533 = $x535;
} else {
if (!$U531) {$x533 = $x527;if ($W531) { $x531 = $x527; }  }
else { $x533 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isFrozen') && 'isFrozen' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isFrozen' + 1; };
$x557 = clone JS::$functionTemplate; $x557->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_16'; $x557->parameters = array (
  0 => 'o',
); $x557->scope = $scope; $x557->properties['prototype'] = clone JS::$objectTemplate; $x557->attributes['prototype'] = JS::WRITABLE; $x557->properties['prototype']->properties['constructor'] = $x557; $x557->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x557->properties['length'] = 1; $x557->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x558 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 221, 21, '<image>/02_object.js');
$_TypeError =& $x558[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x558;
$x559 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x560 = $x559($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x560->class) && $x560->class === 'Error' && !isset($x560->properties['file']) && !isset($x560->properties['line']) && !isset($x560->properties['column'])) {$x560->properties['file'] = '<image>/02_object.js';$x560->properties['line'] = 221;$x560->properties['column'] = 21;$x560->attributes['file'] = $x560->attributes['line'] = $x560->attributes['column'] = 0; }
throw new JSException($x560, 221, 21, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x561, $W561, $S561, $U561);
$x562 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'isExtensible', 221, 21, '<image>/02_object.js');
$x561 =& $x562[0]; list(,$W561,$S561,$U561) = $x562;
if ($U561 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['isExtensible'] = $x561; $x561 =& $_Object->properties['isExtensible']; $_Object->attributes['isExtensible'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U561 = FALSE; $W561 = TRUE; }
if (isset($S561)) {
$x564 = $S561->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 221, 21);
$x565 = $x564($global, $_Object, $S561, array($x557), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x563 = $x565;
} else {
if (!$U561) {$x563 = $x557;if ($W561) { $x561 = $x557; }  }
else { $x563 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('isExtensible') && 'isExtensible' >= $_Object->properties['length']) { $_Object->properties['length'] = 'isExtensible' + 1; };
$x601 = clone JS::$functionTemplate; $x601->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_17'; $x601->parameters = array (
  0 => 'o',
); $x601->scope = $scope; $x601->properties['prototype'] = clone JS::$objectTemplate; $x601->attributes['prototype'] = JS::WRITABLE; $x601->properties['prototype']->properties['constructor'] = $x601; $x601->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x601->properties['length'] = 1; $x601->attributes['length'] = 0;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x602 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 229, 13, '<image>/02_object.js');
$_TypeError =& $x602[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x602;
$x603 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x604 = $x603($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x604->class) && $x604->class === 'Error' && !isset($x604->properties['file']) && !isset($x604->properties['line']) && !isset($x604->properties['column'])) {$x604->properties['file'] = '<image>/02_object.js';$x604->properties['line'] = 229;$x604->properties['column'] = 13;$x604->attributes['file'] = $x604->attributes['line'] = $x604->attributes['column'] = 0; }
throw new JSException($x604, 229, 13, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x605, $W605, $S605, $U605);
$x606 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'keys', 229, 13, '<image>/02_object.js');
$x605 =& $x606[0]; list(,$W605,$S605,$U605) = $x606;
if ($U605 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['keys'] = $x605; $x605 =& $_Object->properties['keys']; $_Object->attributes['keys'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U605 = FALSE; $W605 = TRUE; }
if (isset($S605)) {
$x608 = $S605->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 229, 13);
$x609 = $x608($global, $_Object, $S605, array($x601), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x607 = $x609;
} else {
if (!$U605) {$x607 = $x601;if ($W605) { $x605 = $x601; }  }
else { $x607 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('keys') && 'keys' >= $_Object->properties['length']) { $_Object->properties['length'] = 'keys' + 1; };
$x610 = clone JS::$objectTemplate;
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x611 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 243, 18, '<image>/02_object.js');
$_TypeError =& $x611[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x611;
$x612 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x613 = $x612($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x613->class) && $x613->class === 'Error' && !isset($x613->properties['file']) && !isset($x613->properties['line']) && !isset($x613->properties['column'])) {$x613->properties['file'] = '<image>/02_object.js';$x613->properties['line'] = 243;$x613->properties['column'] = 18;$x613->attributes['file'] = $x613->attributes['line'] = $x613->attributes['column'] = 0; }
throw new JSException($x613, 243, 18, '<image>/02_object.js');
}
$_Object = JS::toObject($_Object, $global);
unset($x614, $W614, $S614, $U614);
$x615 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $_Object, (string) 'prototype', 243, 18, '<image>/02_object.js');
$x614 =& $x615[0]; list(,$W614,$S614,$U614) = $x615;
if ($U614 && (!isset($_Object->extensible) || $_Object->extensible)) {$_Object->properties['prototype'] = $x614; $x614 =& $_Object->properties['prototype']; $_Object->attributes['prototype'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U614 = FALSE; $W614 = TRUE; }
if (isset($S614)) {
$x617 = $S614->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 243, 18);
$x618 = $x617($global, $_Object, $S614, array($x610), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x616 = $x618;
} else {
if (!$U614) {$x616 = $x610;if ($W614) { $x614 = $x610; }  }
else { $x616 = JS::$undefined; }
}
if (isset($_Object->class) && $_Object->class === 'Array' &&  is_int('prototype') && 'prototype' >= $_Object->properties['length']) { $_Object->properties['length'] = 'prototype' + 1; };
$_Object->properties['prototype']->prototype = NULL;
$_Object->properties['prototype']->class = 'Object';
$_Object->properties['prototype']->extensible = TRUE;
unset($x619, $W619, $S619, $U619);
$x620 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, (string) 'prototype', 247, 7, '<image>/02_object.js');
$x619 =& $x620[0]; list(,$W619,$S619,$U619) = $x620;
if ($x619 === JS::$undefined || $x619 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x621 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 247, 30, '<image>/02_object.js');
$_TypeError =& $x621[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x621;
$x622 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x623 = $x622($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x623->class) && $x623->class === 'Error' && !isset($x623->properties['file']) && !isset($x623->properties['line']) && !isset($x623->properties['column'])) {$x623->properties['file'] = '<image>/02_object.js';$x623->properties['line'] = 247;$x623->properties['column'] = 30;$x623->attributes['file'] = $x623->attributes['line'] = $x623->attributes['column'] = 0; }
throw new JSException($x623, 247, 30, '<image>/02_object.js');
}
$x619 = JS::toObject($x619, $global);
unset($x624, $W624, $S624, $U624);
$x625 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x619, (string) 'constructor', 247, 30, '<image>/02_object.js');
$x624 =& $x625[0]; list(,$W624,$S624,$U624) = $x625;
if ($U624 && (!isset($x619->extensible) || $x619->extensible)) {$x619->properties['constructor'] = $x624; $x624 =& $x619->properties['constructor']; $x619->attributes['constructor'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U624 = FALSE; $W624 = TRUE; }
if (isset($S624)) {
$x627 = $S624->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 247, 30);
$x628 = $x627($global, $x619, $S624, array($_Object), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x626 = $x628;
} else {
if (!$U624) {$x626 = $_Object;if ($W624) { $x624 = $_Object; }  }
else { $x626 = JS::$undefined; }
}
if (isset($x619->class) && $x619->class === 'Array' &&  is_int('constructor') && 'constructor' >= $x619->properties['length']) { $x619->properties['length'] = 'constructor' + 1; };
$x633 = clone JS::$functionTemplate; $x633->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_18'; $x633->parameters = array (
); $x633->scope = $scope; $x633->properties['prototype'] = clone JS::$objectTemplate; $x633->attributes['prototype'] = JS::WRITABLE; $x633->properties['prototype']->properties['constructor'] = $x633; $x633->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x633->properties['length'] = 0; $x633->attributes['length'] = 0;
unset($x634, $W634, $S634, $U634);
$x635 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, (string) 'prototype', 249, 7, '<image>/02_object.js');
$x634 =& $x635[0]; list(,$W634,$S634,$U634) = $x635;
if ($x634 === JS::$undefined || $x634 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x636 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 249, 27, '<image>/02_object.js');
$_TypeError =& $x636[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x636;
$x637 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x638 = $x637($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x638->class) && $x638->class === 'Error' && !isset($x638->properties['file']) && !isset($x638->properties['line']) && !isset($x638->properties['column'])) {$x638->properties['file'] = '<image>/02_object.js';$x638->properties['line'] = 249;$x638->properties['column'] = 27;$x638->attributes['file'] = $x638->attributes['line'] = $x638->attributes['column'] = 0; }
throw new JSException($x638, 249, 27, '<image>/02_object.js');
}
$x634 = JS::toObject($x634, $global);
unset($x639, $W639, $S639, $U639);
$x640 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x634, (string) 'toString', 249, 27, '<image>/02_object.js');
$x639 =& $x640[0]; list(,$W639,$S639,$U639) = $x640;
if ($U639 && (!isset($x634->extensible) || $x634->extensible)) {$x634->properties['toString'] = $x639; $x639 =& $x634->properties['toString']; $x634->attributes['toString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U639 = FALSE; $W639 = TRUE; }
if (isset($S639)) {
$x642 = $S639->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 249, 27);
$x643 = $x642($global, $x634, $S639, array($x633), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x641 = $x643;
} else {
if (!$U639) {$x641 = $x633;if ($W639) { $x639 = $x633; }  }
else { $x641 = JS::$undefined; }
}
if (isset($x634->class) && $x634->class === 'Array' &&  is_int('toString') && 'toString' >= $x634->properties['length']) { $x634->properties['length'] = 'toString' + 1; };
$x657 = clone JS::$functionTemplate; $x657->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_19'; $x657->parameters = array (
); $x657->scope = $scope; $x657->properties['prototype'] = clone JS::$objectTemplate; $x657->attributes['prototype'] = JS::WRITABLE; $x657->properties['prototype']->properties['constructor'] = $x657; $x657->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x657->properties['length'] = 0; $x657->attributes['length'] = 0;
unset($x658, $W658, $S658, $U658);
$x659 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, (string) 'prototype', 267, 7, '<image>/02_object.js');
$x658 =& $x659[0]; list(,$W658,$S658,$U658) = $x659;
if ($x658 === JS::$undefined || $x658 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x660 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 267, 33, '<image>/02_object.js');
$_TypeError =& $x660[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x660;
$x661 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x662 = $x661($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x662->class) && $x662->class === 'Error' && !isset($x662->properties['file']) && !isset($x662->properties['line']) && !isset($x662->properties['column'])) {$x662->properties['file'] = '<image>/02_object.js';$x662->properties['line'] = 267;$x662->properties['column'] = 33;$x662->attributes['file'] = $x662->attributes['line'] = $x662->attributes['column'] = 0; }
throw new JSException($x662, 267, 33, '<image>/02_object.js');
}
$x658 = JS::toObject($x658, $global);
unset($x663, $W663, $S663, $U663);
$x664 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x658, (string) 'toLocaleString', 267, 33, '<image>/02_object.js');
$x663 =& $x664[0]; list(,$W663,$S663,$U663) = $x664;
if ($U663 && (!isset($x658->extensible) || $x658->extensible)) {$x658->properties['toLocaleString'] = $x663; $x663 =& $x658->properties['toLocaleString']; $x658->attributes['toLocaleString'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U663 = FALSE; $W663 = TRUE; }
if (isset($S663)) {
$x666 = $S663->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 267, 33);
$x667 = $x666($global, $x658, $S663, array($x657), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x665 = $x667;
} else {
if (!$U663) {$x665 = $x657;if ($W663) { $x663 = $x657; }  }
else { $x665 = JS::$undefined; }
}
if (isset($x658->class) && $x658->class === 'Array' &&  is_int('toLocaleString') && 'toLocaleString' >= $x658->properties['length']) { $x658->properties['length'] = 'toLocaleString' + 1; };
$x685 = clone JS::$functionTemplate; $x685->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_20'; $x685->parameters = array (
); $x685->scope = $scope; $x685->properties['prototype'] = clone JS::$objectTemplate; $x685->attributes['prototype'] = JS::WRITABLE; $x685->properties['prototype']->properties['constructor'] = $x685; $x685->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x685->properties['length'] = 0; $x685->attributes['length'] = 0;
unset($x686, $W686, $S686, $U686);
$x687 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, (string) 'prototype', 271, 7, '<image>/02_object.js');
$x686 =& $x687[0]; list(,$W686,$S686,$U686) = $x687;
if ($x686 === JS::$undefined || $x686 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x688 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 271, 26, '<image>/02_object.js');
$_TypeError =& $x688[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x688;
$x689 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x690 = $x689($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x690->class) && $x690->class === 'Error' && !isset($x690->properties['file']) && !isset($x690->properties['line']) && !isset($x690->properties['column'])) {$x690->properties['file'] = '<image>/02_object.js';$x690->properties['line'] = 271;$x690->properties['column'] = 26;$x690->attributes['file'] = $x690->attributes['line'] = $x690->attributes['column'] = 0; }
throw new JSException($x690, 271, 26, '<image>/02_object.js');
}
$x686 = JS::toObject($x686, $global);
unset($x691, $W691, $S691, $U691);
$x692 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x686, (string) 'valueOf', 271, 26, '<image>/02_object.js');
$x691 =& $x692[0]; list(,$W691,$S691,$U691) = $x692;
if ($U691 && (!isset($x686->extensible) || $x686->extensible)) {$x686->properties['valueOf'] = $x691; $x691 =& $x686->properties['valueOf']; $x686->attributes['valueOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U691 = FALSE; $W691 = TRUE; }
if (isset($S691)) {
$x694 = $S691->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 271, 26);
$x695 = $x694($global, $x686, $S691, array($x685), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x693 = $x695;
} else {
if (!$U691) {$x693 = $x685;if ($W691) { $x691 = $x685; }  }
else { $x693 = JS::$undefined; }
}
if (isset($x686->class) && $x686->class === 'Array' &&  is_int('valueOf') && 'valueOf' >= $x686->properties['length']) { $x686->properties['length'] = 'valueOf' + 1; };
$x698 = clone JS::$functionTemplate; $x698->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_21'; $x698->parameters = array (
  0 => 'p',
); $x698->scope = $scope; $x698->properties['prototype'] = clone JS::$objectTemplate; $x698->attributes['prototype'] = JS::WRITABLE; $x698->properties['prototype']->properties['constructor'] = $x698; $x698->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x698->properties['length'] = 1; $x698->attributes['length'] = 0;
unset($x699, $W699, $S699, $U699);
$x700 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, (string) 'prototype', 279, 7, '<image>/02_object.js');
$x699 =& $x700[0]; list(,$W699,$S699,$U699) = $x700;
if ($x699 === JS::$undefined || $x699 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x701 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 279, 33, '<image>/02_object.js');
$_TypeError =& $x701[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x701;
$x702 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x703 = $x702($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x703->class) && $x703->class === 'Error' && !isset($x703->properties['file']) && !isset($x703->properties['line']) && !isset($x703->properties['column'])) {$x703->properties['file'] = '<image>/02_object.js';$x703->properties['line'] = 279;$x703->properties['column'] = 33;$x703->attributes['file'] = $x703->attributes['line'] = $x703->attributes['column'] = 0; }
throw new JSException($x703, 279, 33, '<image>/02_object.js');
}
$x699 = JS::toObject($x699, $global);
unset($x704, $W704, $S704, $U704);
$x705 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x699, (string) 'hasOwnProperty', 279, 33, '<image>/02_object.js');
$x704 =& $x705[0]; list(,$W704,$S704,$U704) = $x705;
if ($U704 && (!isset($x699->extensible) || $x699->extensible)) {$x699->properties['hasOwnProperty'] = $x704; $x704 =& $x699->properties['hasOwnProperty']; $x699->attributes['hasOwnProperty'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U704 = FALSE; $W704 = TRUE; }
if (isset($S704)) {
$x707 = $S704->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 279, 33);
$x708 = $x707($global, $x699, $S704, array($x698), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x706 = $x708;
} else {
if (!$U704) {$x706 = $x698;if ($W704) { $x704 = $x698; }  }
else { $x706 = JS::$undefined; }
}
if (isset($x699->class) && $x699->class === 'Array' &&  is_int('hasOwnProperty') && 'hasOwnProperty' >= $x699->properties['length']) { $x699->properties['length'] = 'hasOwnProperty' + 1; };
$x718 = clone JS::$functionTemplate; $x718->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_22'; $x718->parameters = array (
  0 => 'v',
); $x718->scope = $scope; $x718->properties['prototype'] = clone JS::$objectTemplate; $x718->attributes['prototype'] = JS::WRITABLE; $x718->properties['prototype']->properties['constructor'] = $x718; $x718->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x718->properties['length'] = 1; $x718->attributes['length'] = 0;
unset($x719, $W719, $S719, $U719);
$x720 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, (string) 'prototype', 283, 7, '<image>/02_object.js');
$x719 =& $x720[0]; list(,$W719,$S719,$U719) = $x720;
if ($x719 === JS::$undefined || $x719 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x721 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 283, 32, '<image>/02_object.js');
$_TypeError =& $x721[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x721;
$x722 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x723 = $x722($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x723->class) && $x723->class === 'Error' && !isset($x723->properties['file']) && !isset($x723->properties['line']) && !isset($x723->properties['column'])) {$x723->properties['file'] = '<image>/02_object.js';$x723->properties['line'] = 283;$x723->properties['column'] = 32;$x723->attributes['file'] = $x723->attributes['line'] = $x723->attributes['column'] = 0; }
throw new JSException($x723, 283, 32, '<image>/02_object.js');
}
$x719 = JS::toObject($x719, $global);
unset($x724, $W724, $S724, $U724);
$x725 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x719, (string) 'isPrototypeOf', 283, 32, '<image>/02_object.js');
$x724 =& $x725[0]; list(,$W724,$S724,$U724) = $x725;
if ($U724 && (!isset($x719->extensible) || $x719->extensible)) {$x719->properties['isPrototypeOf'] = $x724; $x724 =& $x719->properties['isPrototypeOf']; $x719->attributes['isPrototypeOf'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U724 = FALSE; $W724 = TRUE; }
if (isset($S724)) {
$x727 = $S724->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 283, 32);
$x728 = $x727($global, $x719, $S724, array($x718), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x726 = $x728;
} else {
if (!$U724) {$x726 = $x718;if ($W724) { $x724 = $x718; }  }
else { $x726 = JS::$undefined; }
}
if (isset($x719->class) && $x719->class === 'Array' &&  is_int('isPrototypeOf') && 'isPrototypeOf' >= $x719->properties['length']) { $x719->properties['length'] = 'isPrototypeOf' + 1; };
$x731 = clone JS::$functionTemplate; $x731->call = '_d2fc1b5cf69cc3a8aba1d13b6a0b49c6_23'; $x731->parameters = array (
  0 => 'p',
); $x731->scope = $scope; $x731->properties['prototype'] = clone JS::$objectTemplate; $x731->attributes['prototype'] = JS::WRITABLE; $x731->properties['prototype']->properties['constructor'] = $x731; $x731->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x731->properties['length'] = 1; $x731->attributes['length'] = 0;
unset($x732, $W732, $S732, $U732);
$x733 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_4($global, $scope, $_Object, (string) 'prototype', 300, 7, '<image>/02_object.js');
$x732 =& $x733[0]; list(,$W732,$S732,$U732) = $x733;
if ($x732 === JS::$undefined || $x732 === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x734 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_3($global, $scope, $scope, (string) 'TypeError', 300, 39, '<image>/02_object.js');
$_TypeError =& $x734[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x734;
$x735 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x736 = $x735($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x736->class) && $x736->class === 'Error' && !isset($x736->properties['file']) && !isset($x736->properties['line']) && !isset($x736->properties['column'])) {$x736->properties['file'] = '<image>/02_object.js';$x736->properties['line'] = 300;$x736->properties['column'] = 39;$x736->attributes['file'] = $x736->attributes['line'] = $x736->attributes['column'] = 0; }
throw new JSException($x736, 300, 39, '<image>/02_object.js');
}
$x732 = JS::toObject($x732, $global);
unset($x737, $W737, $S737, $U737);
$x738 = _d2fc1b5cf69cc3a8aba1d13b6a0b49c6_5($global, $scope, $x732, (string) 'propertyIsEnumerable', 300, 39, '<image>/02_object.js');
$x737 =& $x738[0]; list(,$W737,$S737,$U737) = $x738;
if ($U737 && (!isset($x732->extensible) || $x732->extensible)) {$x732->properties['propertyIsEnumerable'] = $x737; $x737 =& $x732->properties['propertyIsEnumerable']; $x732->attributes['propertyIsEnumerable'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U737 = FALSE; $W737 = TRUE; }
if (isset($S737)) {
$x740 = $S737->call;
$global->trace[++$global->trace_sp] = array('<image>/02_object.js', 300, 39);
$x741 = $x740($global, $x732, $S737, array($x731), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x739 = $x741;
} else {
if (!$U737) {$x739 = $x731;if ($W737) { $x737 = $x731; }  }
else { $x739 = JS::$undefined; }
}
if (isset($x732->class) && $x732->class === 'Array' &&  is_int('propertyIsEnumerable') && 'propertyIsEnumerable' >= $x732->properties['length']) { $x732->properties['length'] = 'propertyIsEnumerable' + 1; };
;
return JS::$undefined;
}
