function _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $base, $id, $line, $column, $file) {
$WTypeError = $STypeError = $UTypeError = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->up); $lookup = $lookup->up);
if (array_key_exists($id, $lookup->properties)) { $_TypeError =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x16 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x17 = $x16($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$_TypeError = $x17; }
else { $_TypeError = JS::$undefined; $UTypeError = TRUE; }
return array(&$_TypeError, $WTypeError, $STypeError, $UTypeError);
}
echo 'function _d8d2f4d46f65faa836999607363aef73_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x16=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x17;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x22 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x22[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x22;
$x23 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x24 = $x23($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x24->class) && $x24->class === 'Error' && !isset($x24->properties['file']) && !isset($x24->properties['line']) && !isset($x24->properties['column'])) {$x24->properties['file'] = $file;$x24->properties['line'] = $line;$x24->properties['column'] = $column;$x24->attributes['file'] = $x24->attributes['line'] = $x24->attributes['column'] = 0; }
throw new JSException($x24, $line, $column, $file);
}
$W21 = $S21 = $U21 = NULL;
$lookup = JS::toObject($base, $global);
for (; $lookup && !(array_key_exists($id, $lookup->properties) || isset($lookup->attributes[$id])) && isset($lookup->prototype); $lookup = $lookup->prototype);
if (array_key_exists($id, $lookup->properties)) { $x21 =& $lookup->properties[$id]; }
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_GETTER) { 
$x25 = $lookup->getters[$id]->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x26 = $x25($global, $lookup, $lookup->getters[$id], array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x21 = $x26; }
else { $x21 = JS::$undefined; $U21 = TRUE; }
return array(&$x21, $W21, $S21, $U21);
}
echo 'function _d8d2f4d46f65faa836999607363aef73_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x22=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x22[0];list(,$WTypeError,$STypeError,$UTypeError)=$x22;$x23=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x24=$x23($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x24->class)&&$x24->class===\'Error\'&&!isset($x24->properties[\'file\'])&&!isset($x24->properties[\'line\'])&&!isset($x24->properties[\'column\'])){$x24->properties[\'file\']=$file;$x24->properties[\'line\']=$line;$x24->properties[\'column\']=$column;$x24->attributes[\'file\']=$x24->attributes[\'line\']=$x24->attributes[\'column\']=0;}throw new JSException($x24,$line,$column,$file);}$W21=$S21=$U21=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x21=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x25=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x26=$x25($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x21=$x26;}else{$x21=JS::$undefined;$U21=TRUE;}return array(&$x21,$W21,$S21,$U21);}', "\n";
function _d8d2f4d46f65faa836999607363aef73_5($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x45 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x45[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x45;
$x46 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x47 = $x46($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x47->class) && $x47->class === 'Error' && !isset($x47->properties['file']) && !isset($x47->properties['line']) && !isset($x47->properties['column'])) {$x47->properties['file'] = $file;$x47->properties['line'] = $line;$x47->properties['column'] = $column;$x47->attributes['file'] = $x47->attributes['line'] = $x47->attributes['column'] = 0; }
throw new JSException($x47, $line, $column, $file);
}
$W44 = $S44 = $U44 = NULL;
$lookup = JS::toObject($base, $global);
if (array_key_exists($id, $lookup->properties)) { $x44 =& $lookup->properties[$id]; $W44 = !isset($lookup->attributes[$id]) || ($lookup->attributes[$id] & JS::WRITABLE !== 0);}
else if (isset($lookup->attributes[$id]) && $lookup->attributes[$id] & JS::HAS_SETTER) { $S44 = $lookup->setters[$id]; }
else { $x44 = JS::$undefined; $U44 = TRUE; }
return array(&$x44, $W44, $S44, $U44);
}
echo 'function _d8d2f4d46f65faa836999607363aef73_5($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x45=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x45[0];list(,$WTypeError,$STypeError,$UTypeError)=$x45;$x46=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x47=$x46($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x47->class)&&$x47->class===\'Error\'&&!isset($x47->properties[\'file\'])&&!isset($x47->properties[\'line\'])&&!isset($x47->properties[\'column\'])){$x47->properties[\'file\']=$file;$x47->properties[\'line\']=$line;$x47->properties[\'column\']=$column;$x47->attributes[\'file\']=$x47->attributes[\'line\']=$x47->attributes[\'column\']=0;}throw new JSException($x47,$line,$column,$file);}$W44=$S44=$U44=NULL;$lookup=JS::toObject($base,$global);if(array_key_exists($id,$lookup->properties)){$x44=&$lookup->properties[$id];$W44=!isset($lookup->attributes[$id])||($lookup->attributes[$id]&JS::WRITABLE!==0);}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_SETTER){$S44=$lookup->setters[$id];}else{$x44=JS::$undefined;$U44=TRUE;}return array(&$x44,$W44,$S44,$U44);}', "\n";
function _d8d2f4d46f65faa836999607363aef73_2($global, $leThis, $fn, $args, $constructor = FALSE) {

if (isset($fn->boundThis) && !$constructor) { $leThis = $fn->boundThis; }
if (isset($fn->boundArgs)) { $args = array_merge($fn->boundArgs, $args); }
$scope = clone JS::$emptyScope;
$scope->up = $fn->scope;
$scope->properties['arguments'] = clone JS::$argumentsTemplate;
$x3 =& $scope->properties['arguments'];
$x3->properties['length'] = count($args);
foreach ($args as $i => $arg) {
$x3->properties[$i] = $args[$i];
$x3->attributes[$i] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
}
$scope->properties['v'] = array_key_exists(0, $args) ? $args[0] : JS::$undefined;
$_v =& $scope->properties['v'];
$Uv = FALSE;
$scope->properties['indent'] = array_key_exists(1, $args) ? $args[1] : JS::$undefined;
$_indent =& $scope->properties['indent'];
$Uindent = FALSE;
$scope->properties['dumper'] = $fn;
$_dumper =& $scope->properties['dumper'];
$global->scope[++$global->scope_sp] = $scope;
$x4 = $_indent;
if (!JS::toBoolean($x4, $global)) {
$x4 = ''; }
if ($Uindent) {$global->properties['indent'] = $_indent; $_indent =& $global->properties['indent']; }
$_indent = $x4;
$x5 = (((gettype($_v) === gettype(JS::$undefined) && $_v === JS::$undefined))|| (((is_float($_v) || is_int($_v)) && (is_float(JS::$undefined) || is_int(JS::$undefined))) && $_v == JS::$undefined));
if (JS::toBoolean($x5, $global)) {
$x6 = clone JS::$objectTemplate;
$x6->properties['multiline'] = false;
$x6->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x6->properties['dump'] = 'undefined';
$x6->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x6;;
}
else {
$x8 = (((gettype($_v) === gettype(NULL) && $_v === NULL))|| (((is_float($_v) || is_int($_v)) && (is_float(NULL) || is_int(NULL))) && $_v == NULL));
$x7 = $x8;
if (!JS::toBoolean($x7, $global)) {
$x10 = $_v;
$x10 = ($x10 === JS::$undefined ? 'undefined' : (is_int($x10) || is_float($x10) ? 'number' : (is_bool($x10) ? 'boolean' : (is_string($x10) ? 'string' : (is_object($x10) && isset($x10->call) ? 'function' : 'object')))));
$x9 = (((gettype($x10) === gettype('boolean') && $x10 === 'boolean'))|| (((is_float($x10) || is_int($x10)) && (is_float('boolean') || is_int('boolean'))) && $x10 == 'boolean'));
$x7 = $x9; }
if (JS::toBoolean($x7, $global)) {
$x11 = clone JS::$objectTemplate;
$x11->properties['multiline'] = false;
$x11->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x11->properties['dump'] = json_encode($_v);
$x11->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x11;;
}
else {
$x13 = $_v;
$x13 = ($x13 === JS::$undefined ? 'undefined' : (is_int($x13) || is_float($x13) ? 'number' : (is_bool($x13) ? 'boolean' : (is_string($x13) ? 'string' : (is_object($x13) && isset($x13->call) ? 'function' : 'object')))));
$x12 = (((gettype($x13) === gettype('number') && $x13 === 'number'))|| (((is_float($x13) || is_int($x13)) && (is_float('number') || is_int('number'))) && $x13 == 'number'));
if (JS::toBoolean($x12, $global)) {
$x14 = clone JS::$objectTemplate;
$x14->properties['multiline'] = false;
$x14->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($_v === JS::$undefined || $_v === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x18 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 11, 47, '<image>/14_dump.js');
$_TypeError =& $x18[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x18;
$x19 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 11, 47);
$x20 = $x19($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x20->class) && $x20->class === 'Error' && !isset($x20->properties['file']) && !isset($x20->properties['line']) && !isset($x20->properties['column'])) {$x20->properties['file'] = '<image>/14_dump.js';$x20->properties['line'] = 11;$x20->properties['column'] = 47;$x20->attributes['file'] = $x20->attributes['line'] = $x20->attributes['column'] = 0; }
throw new JSException($x20, 11, 47, '<image>/14_dump.js');
}
$x15 = JS::toObject($_v, $global);
unset($x21, $W21, $S21, $U21);
$x27 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $x15, (string) 'toString', 11, 47, '<image>/14_dump.js');
$x21 =& $x27[0]; list(,$W21,$S21,$U21) = $x27;
if (!(is_object($x21) && isset($x21->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 11, 47, '<image>/14_dump.js');
$_TypeError =& $x30[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x30;
$x31 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 11, 47);
$x32 = $x31($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x32->class) && $x32->class === 'Error' && !isset($x32->properties['file']) && !isset($x32->properties['line']) && !isset($x32->properties['column'])) {$x32->properties['file'] = '<image>/14_dump.js';$x32->properties['line'] = 11;$x32->properties['column'] = 47;$x32->attributes['file'] = $x32->attributes['line'] = $x32->attributes['column'] = 0; }
throw new JSException($x32, 11, 47, '<image>/14_dump.js');
}
$x28 = $x21->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 11, 47);
$x29 = $x28($global, $x15, $x21, array(), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x14->properties['dump'] = $x29;
$x14->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x14;;
}
else {
$x34 = $_v;
$x34 = ($x34 === JS::$undefined ? 'undefined' : (is_int($x34) || is_float($x34) ? 'number' : (is_bool($x34) ? 'boolean' : (is_string($x34) ? 'string' : (is_object($x34) && isset($x34->call) ? 'function' : 'object')))));
$x33 = (((gettype($x34) === gettype('string') && $x34 === 'string'))|| (((is_float($x34) || is_int($x34)) && (is_float('string') || is_int('string'))) && $x34 == 'string'));
if (JS::toBoolean($x33, $global)) {
$x35 = clone JS::$objectTemplate;
$x35->properties['multiline'] = false;
$x35->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x35->properties['dump'] = str_replace("\\/", "/", json_encode($_v));
$x35->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x35;;
}
else {

if (JS::toBoolean(isset($_v->call), $global)) {
$x36 = clone JS::$objectTemplate;
$scope->properties['o'] = JS::$undefined; $_o =& $scope->properties['o'];
$Uo = FALSE;
$_o = $x36;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x38 = array(), $x37 = JS::toObject($_v, $global); $x37; $x37 = $x37->prototype) {
foreach ($x37->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x38[$property])) { continue; }
$x38[$property] = TRUE;
$_k = $property;

unset($x39, $W39, $S39, $U39);
$x40 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_v, (string) $_k, 20, 13, '<image>/14_dump.js');
$x39 =& $x40[0]; list(,$W39,$S39,$U39) = $x40;
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x41 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 20, 10, '<image>/14_dump.js');
$_TypeError =& $x41[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x41;
$x42 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 20, 10);
$x43 = $x42($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x43->class) && $x43->class === 'Error' && !isset($x43->properties['file']) && !isset($x43->properties['line']) && !isset($x43->properties['column'])) {$x43->properties['file'] = '<image>/14_dump.js';$x43->properties['line'] = 20;$x43->properties['column'] = 10;$x43->attributes['file'] = $x43->attributes['line'] = $x43->attributes['column'] = 0; }
throw new JSException($x43, 20, 10, '<image>/14_dump.js');
}
$_o = JS::toObject($_o, $global);
unset($x44, $W44, $S44, $U44);
$x48 = _d8d2f4d46f65faa836999607363aef73_5($global, $scope, $_o, (string) $_k, 20, 10, '<image>/14_dump.js');
$x44 =& $x48[0]; list(,$W44,$S44,$U44) = $x48;
if ($U44 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties[$_k] = $x44; $x44 =& $_o->properties[$_k]; $_o->attributes[$_k] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U44 = FALSE; $W44 = TRUE; }
if (isset($S44)) {
$x50 = $S44->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 20, 10);
$x51 = $x50($global, $_o, $S44, array($x39), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x49 = $x51;
} else {
if (!$U44) {$x49 = $x39;if ($W44) { $x44 = $x39; }  }
else { $x49 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array' &&  is_int($_k) && $_k >= $_o->properties['length']) { $_o->properties['length'] = $_k + 1; };
}
}
};
unset($_Object, $WObject, $SObject, $UObject);
$x55 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'Object', 23, 8, '<image>/14_dump.js');
$_Object =& $x55[0]; list(,$WObject,$SObject,$UObject) = $x55;
if ($UObject) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x56 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'ReferenceError', 23, 8, '<image>/14_dump.js');
$_ReferenceError =& $x56[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x56;
$x57 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 23, 8);
$x58 = $x57($global, $global, $_ReferenceError, array('Object is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x58->class) && $x58->class === 'Error' && !isset($x58->properties['file']) && !isset($x58->properties['line']) && !isset($x58->properties['column'])) {$x58->properties['file'] = '<image>/14_dump.js';$x58->properties['line'] = 23;$x58->properties['column'] = 8;$x58->attributes['file'] = $x58->attributes['line'] = $x58->attributes['column'] = 0; }
throw new JSException($x58, 23, 8, '<image>/14_dump.js');
}
if ($_Object === JS::$undefined || $_Object === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x60 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 23, 34, '<image>/14_dump.js');
$_TypeError =& $x60[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x60;
$x61 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 23, 34);
$x62 = $x61($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x62->class) && $x62->class === 'Error' && !isset($x62->properties['file']) && !isset($x62->properties['line']) && !isset($x62->properties['column'])) {$x62->properties['file'] = '<image>/14_dump.js';$x62->properties['line'] = 23;$x62->properties['column'] = 34;$x62->attributes['file'] = $x62->attributes['line'] = $x62->attributes['column'] = 0; }
throw new JSException($x62, 23, 34, '<image>/14_dump.js');
}
$x59 = JS::toObject($_Object, $global);
unset($x63, $W63, $S63, $U63);
$x64 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $x59, (string) 'getOwnPropertyNames', 23, 34, '<image>/14_dump.js');
$x63 =& $x64[0]; list(,$W63,$S63,$U63) = $x64;
if (!(is_object($x63) && isset($x63->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x67 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 23, 34, '<image>/14_dump.js');
$_TypeError =& $x67[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x67;
$x68 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 23, 34);
$x69 = $x68($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x69->class) && $x69->class === 'Error' && !isset($x69->properties['file']) && !isset($x69->properties['line']) && !isset($x69->properties['column'])) {$x69->properties['file'] = '<image>/14_dump.js';$x69->properties['line'] = 23;$x69->properties['column'] = 34;$x69->attributes['file'] = $x69->attributes['line'] = $x69->attributes['column'] = 0; }
throw new JSException($x69, 23, 34, '<image>/14_dump.js');
}
$x65 = $x63->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 23, 34);
$x66 = $x65($global, $x59, $x63, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x70, $W70, $S70, $U70);
$x71 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $x66, (string) 'length', 23, 37, '<image>/14_dump.js');
$x70 =& $x71[0]; list(,$W70,$S70,$U70) = $x71;
$x52 = JS::toPrimitive($x70, $global);
$x53 = JS::toPrimitive(0, $global);
$x54 = (is_string($x53) && is_string($x52) ? strcmp($x53, $x52) < 0 : (!is_nan($x72 = JS::toNumber($x53, $global)) && !is_nan($x73 = JS::toNumber($x52, $global)) && $x72 < $x73));
if (JS::toBoolean($x54, $global)) {
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x76 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 24, 15, '<image>/14_dump.js');
$_TypeError =& $x76[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x76;
$x77 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 24, 15);
$x78 = $x77($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x78->class) && $x78->class === 'Error' && !isset($x78->properties['file']) && !isset($x78->properties['line']) && !isset($x78->properties['column'])) {$x78->properties['file'] = '<image>/14_dump.js';$x78->properties['line'] = 24;$x78->properties['column'] = 15;$x78->attributes['file'] = $x78->attributes['line'] = $x78->attributes['column'] = 0; }
throw new JSException($x78, 24, 15, '<image>/14_dump.js');
}
$x74 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 24, 15);
$x75 = $x74($global, $global, $_dumper, array($_o), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x75;
unset($x81, $W81, $S81, $U81);
$x82 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_o, (string) 'dump', 25, 21, '<image>/14_dump.js');
$x81 =& $x82[0]; list(,$W81,$S81,$U81) = $x82;
$x79 = JS::toPrimitive(' ', $global);
$x80 = JS::toPrimitive($x81, $global);
$x83 = (is_string($x79) || is_string($x80) ? JS::toString($x79, $global) . JS::toString($x80, $global) : JS::toNumber($x79, $global) + JS::toNumber($x80, $global));
if ($_o === JS::$undefined || $_o === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x84 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 25, 12, '<image>/14_dump.js');
$_TypeError =& $x84[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x84;
$x85 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 25, 12);
$x86 = $x85($global, $global, $_TypeError, array('Cannot assign property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x86->class) && $x86->class === 'Error' && !isset($x86->properties['file']) && !isset($x86->properties['line']) && !isset($x86->properties['column'])) {$x86->properties['file'] = '<image>/14_dump.js';$x86->properties['line'] = 25;$x86->properties['column'] = 12;$x86->attributes['file'] = $x86->attributes['line'] = $x86->attributes['column'] = 0; }
throw new JSException($x86, 25, 12, '<image>/14_dump.js');
}
$_o = JS::toObject($_o, $global);
unset($x87, $W87, $S87, $U87);
$x88 = _d8d2f4d46f65faa836999607363aef73_5($global, $scope, $_o, (string) 'dump', 25, 12, '<image>/14_dump.js');
$x87 =& $x88[0]; list(,$W87,$S87,$U87) = $x88;
if ($U87 && (!isset($_o->extensible) || $_o->extensible)) {$_o->properties['dump'] = $x87; $x87 =& $_o->properties['dump']; $_o->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE; $U87 = FALSE; $W87 = TRUE; }
if (isset($S87)) {
$x90 = $S87->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 25, 12);
$x91 = $x90($global, $_o, $S87, array($x83), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x89 = $x91;
} else {
if (!$U87) {$x89 = $x83;if ($W87) { $x87 = $x83; }  }
else { $x89 = JS::$undefined; }
}
if (isset($_o->class) && $_o->class === 'Array' &&  is_int('dump') && 'dump' >= $_o->properties['length']) { $_o->properties['length'] = 'dump' + 1; };;
}
else {
$x92 = clone JS::$objectTemplate;
$x92->properties['multiline'] = false;
$x92->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x92->properties['dump'] = '';
$x92->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if ($Uo) {$global->properties['o'] = $_o; $_o =& $global->properties['o']; }
$_o = $x92;;
};
$x93 = clone JS::$objectTemplate;
unset($x94, $W94, $S94, $U94);
$x95 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_o, (string) 'multiline', 31, 25, '<image>/14_dump.js');
$x94 =& $x95[0]; list(,$W94,$S94,$U94) = $x95;
$x93->properties['multiline'] = $x94;
$x93->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x100 = JS::toPrimitive('[function', $global);
$x101 = JS::toPrimitive((isset($_v->name) ? " " .$_v->name : ""), $global);
unset($x102, $W102, $S102, $U102);
$x103 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_o, (string) 'dump', 35, 9, '<image>/14_dump.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
$x98 = JS::toPrimitive((is_string($x100) || is_string($x101) ? JS::toString($x100, $global) . JS::toString($x101, $global) : JS::toNumber($x100, $global) + JS::toNumber($x101, $global)), $global);
$x99 = JS::toPrimitive($x102, $global);
$x96 = JS::toPrimitive((is_string($x98) || is_string($x99) ? JS::toString($x98, $global) . JS::toString($x99, $global) : JS::toNumber($x98, $global) + JS::toNumber($x99, $global)), $global);
$x97 = JS::toPrimitive(']', $global);
$x93->properties['dump'] = (is_string($x96) || is_string($x97) ? JS::toString($x96, $global) . JS::toString($x97, $global) : JS::toNumber($x96, $global) + JS::toNumber($x97, $global));
$x93->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x93;;
}
else {
$scope->properties['multiline'] = JS::$undefined; $_multiline =& $scope->properties['multiline'];
$Umultiline = FALSE;
$_multiline = false;
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = JS::$undefined;
$scope->properties['k'] = JS::$undefined; $_k =& $scope->properties['k'];
$Uk = FALSE;
$_k = JS::$undefined;
$scope->properties['d'] = JS::$undefined; $_d =& $scope->properties['d'];
$Ud = FALSE;
$_d = JS::$undefined;
$scope->properties['isArray'] = JS::$undefined; $_isArray =& $scope->properties['isArray'];
$UisArray = FALSE;
$_isArray = isset($_v->class) &&$_v->class === "Array";
$values = array();
if (JS::toBoolean($_isArray, $global)) {
for ($x104 = 0;; ++$x104) {
if ($x104 === 0) {
$x105 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x105;
}
if ($x104 !== 0) {
$x106 = ++$_i;
}
unset($x110, $W110, $S110, $U110);
$x111 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_v, (string) 'length', 43, 22, '<image>/14_dump.js');
$x110 =& $x111[0]; list(,$W110,$S110,$U110) = $x111;
$x107 = JS::toPrimitive($_i, $global);
$x108 = JS::toPrimitive($x110, $global);
$x109 = (is_string($x107) && is_string($x108) ? strcmp($x107, $x108) < 0 : (!is_nan($x112 = JS::toNumber($x107, $global)) && !is_nan($x113 = JS::toNumber($x108, $global)) && $x112 < $x113));
if (!JS::toBoolean($x109, $global)) { break; }

unset($x115, $W115, $S115, $U115);
$x116 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_v, (string) $_i, 44, 23, '<image>/14_dump.js');
$x115 =& $x116[0]; list(,$W115,$S115,$U115) = $x116;
$x117 = JS::toPrimitive($_indent, $global);
$x118 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x121 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 44, 21, '<image>/14_dump.js');
$_TypeError =& $x121[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x121;
$x122 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 44, 21);
$x123 = $x122($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x123->class) && $x123->class === 'Error' && !isset($x123->properties['file']) && !isset($x123->properties['line']) && !isset($x123->properties['column'])) {$x123->properties['file'] = '<image>/14_dump.js';$x123->properties['line'] = 44;$x123->properties['column'] = 21;$x123->attributes['file'] = $x123->attributes['line'] = $x123->attributes['column'] = 0; }
throw new JSException($x123, 44, 21, '<image>/14_dump.js');
}
$x119 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 44, 21);
$x120 = $x119($global, $global, $_dumper, array($x115, (is_string($x117) || is_string($x118) ? JS::toString($x117, $global) . JS::toString($x118, $global) : JS::toNumber($x117, $global) + JS::toNumber($x118, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x120;
unset($x124, $W124, $S124, $U124);
$x125 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_d, (string) 'multiline', 44, 43, '<image>/14_dump.js');
$x124 =& $x125[0]; list(,$W124,$S124,$U124) = $x125;
$x114 = $x124;
if (!JS::toBoolean($x114, $global)) {
unset($x129, $W129, $S129, $U129);
$x130 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_d, (string) 'dump', 44, 58, '<image>/14_dump.js');
$x129 =& $x130[0]; list(,$W129,$S129,$U129) = $x130;
unset($x131, $W131, $S131, $U131);
$x132 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $x129, (string) 'length', 44, 63, '<image>/14_dump.js');
$x131 =& $x132[0]; list(,$W131,$S131,$U131) = $x132;
$x126 = JS::toPrimitive($x131, $global);
$x127 = JS::toPrimitive(40, $global);
$x128 = (is_string($x127) && is_string($x126) ? strcmp($x127, $x126) < 0 : (!is_nan($x133 = JS::toNumber($x127, $global)) && !is_nan($x134 = JS::toNumber($x126, $global)) && $x133 < $x134));
$x114 = $x128; }
if (JS::toBoolean($x114, $global)) {
$x135 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x135;;
};
unset($x136, $W136, $S136, $U136);
$x137 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_d, (string) 'dump', 48, 11, '<image>/14_dump.js');
$x136 =& $x137[0]; list(,$W136,$S136,$U136) = $x137;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x136;
$values[] =$_d;;
};
};
if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x139 = array(), $x138 = JS::toObject($_v, $global); $x138; $x138 = $x138->prototype) {
foreach ($x138->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x139[$property])) { continue; }
$x139[$property] = TRUE;
$_k = $property;

$x140 = $_isArray;
if (JS::toBoolean($x140, $global)) {
unset($_String, $WString, $SString, $UString);
$x142 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'String', 56, 20, '<image>/14_dump.js');
$_String =& $x142[0]; list(,$WString,$SString,$UString) = $x142;
if ($UString) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x143 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'ReferenceError', 56, 20, '<image>/14_dump.js');
$_ReferenceError =& $x143[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x143;
$x144 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 20);
$x145 = $x144($global, $global, $_ReferenceError, array('String is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x145->class) && $x145->class === 'Error' && !isset($x145->properties['file']) && !isset($x145->properties['line']) && !isset($x145->properties['column'])) {$x145->properties['file'] = '<image>/14_dump.js';$x145->properties['line'] = 56;$x145->properties['column'] = 20;$x145->attributes['file'] = $x145->attributes['line'] = $x145->attributes['column'] = 0; }
throw new JSException($x145, 56, 20, '<image>/14_dump.js');
}
unset($_Number, $WNumber, $SNumber, $UNumber);
$x146 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'Number', 56, 27, '<image>/14_dump.js');
$_Number =& $x146[0]; list(,$WNumber,$SNumber,$UNumber) = $x146;
if ($UNumber) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x147 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'ReferenceError', 56, 27, '<image>/14_dump.js');
$_ReferenceError =& $x147[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x147;
$x148 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 27);
$x149 = $x148($global, $global, $_ReferenceError, array('Number is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x149->class) && $x149->class === 'Error' && !isset($x149->properties['file']) && !isset($x149->properties['line']) && !isset($x149->properties['column'])) {$x149->properties['file'] = '<image>/14_dump.js';$x149->properties['line'] = 56;$x149->properties['column'] = 27;$x149->attributes['file'] = $x149->attributes['line'] = $x149->attributes['column'] = 0; }
throw new JSException($x149, 56, 27, '<image>/14_dump.js');
}
if (!(is_object($_Number) && isset($_Number->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x152 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 56, 33, '<image>/14_dump.js');
$_TypeError =& $x152[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x152;
$x153 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 33);
$x154 = $x153($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x154->class) && $x154->class === 'Error' && !isset($x154->properties['file']) && !isset($x154->properties['line']) && !isset($x154->properties['column'])) {$x154->properties['file'] = '<image>/14_dump.js';$x154->properties['line'] = 56;$x154->properties['column'] = 33;$x154->attributes['file'] = $x154->attributes['line'] = $x154->attributes['column'] = 0; }
throw new JSException($x154, 56, 33, '<image>/14_dump.js');
}
$x150 = $_Number->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 33);
$x151 = $x150($global, $global, $_Number, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x157 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 56, 26, '<image>/14_dump.js');
$_TypeError =& $x157[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x157;
$x158 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 26);
$x159 = $x158($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x159->class) && $x159->class === 'Error' && !isset($x159->properties['file']) && !isset($x159->properties['line']) && !isset($x159->properties['column'])) {$x159->properties['file'] = '<image>/14_dump.js';$x159->properties['line'] = 56;$x159->properties['column'] = 26;$x159->attributes['file'] = $x159->attributes['line'] = $x159->attributes['column'] = 0; }
throw new JSException($x159, 56, 26, '<image>/14_dump.js');
}
$x155 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 26);
$x156 = $x155($global, $global, $_String, array($x151), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (!(is_object($_String) && isset($_String->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x162 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 56, 48, '<image>/14_dump.js');
$_TypeError =& $x162[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x162;
$x163 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 48);
$x164 = $x163($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x164->class) && $x164->class === 'Error' && !isset($x164->properties['file']) && !isset($x164->properties['line']) && !isset($x164->properties['column'])) {$x164->properties['file'] = '<image>/14_dump.js';$x164->properties['line'] = 56;$x164->properties['column'] = 48;$x164->attributes['file'] = $x164->attributes['line'] = $x164->attributes['column'] = 0; }
throw new JSException($x164, 56, 48, '<image>/14_dump.js');
}
$x160 = $_String->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 56, 48);
$x161 = $x160($global, $global, $_String, array($_k), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
$x141 = (((gettype($x156) === gettype($x161) && $x156 === $x161))|| (((is_float($x156) || is_int($x156)) && (is_float($x161) || is_int($x161))) && $x156 == $x161));
$x140 = $x141; }
if (JS::toBoolean($x140, $global)) {
continue;;
};
unset($x166, $W166, $S166, $U166);
$x167 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_v, (string) $_k, 58, 22, '<image>/14_dump.js');
$x166 =& $x167[0]; list(,$W166,$S166,$U166) = $x167;
$x168 = JS::toPrimitive($_indent, $global);
$x169 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x172 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 58, 20, '<image>/14_dump.js');
$_TypeError =& $x172[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x172;
$x173 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 58, 20);
$x174 = $x173($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x174->class) && $x174->class === 'Error' && !isset($x174->properties['file']) && !isset($x174->properties['line']) && !isset($x174->properties['column'])) {$x174->properties['file'] = '<image>/14_dump.js';$x174->properties['line'] = 58;$x174->properties['column'] = 20;$x174->attributes['file'] = $x174->attributes['line'] = $x174->attributes['column'] = 0; }
throw new JSException($x174, 58, 20, '<image>/14_dump.js');
}
$x170 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 58, 20);
$x171 = $x170($global, $global, $_dumper, array($x166, (is_string($x168) || is_string($x169) ? JS::toString($x168, $global) . JS::toString($x169, $global) : JS::toNumber($x168, $global) + JS::toNumber($x169, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x171;
unset($x175, $W175, $S175, $U175);
$x176 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_d, (string) 'multiline', 58, 42, '<image>/14_dump.js');
$x175 =& $x176[0]; list(,$W175,$S175,$U175) = $x176;
$x165 = $x175;
if (!JS::toBoolean($x165, $global)) {
unset($x180, $W180, $S180, $U180);
$x181 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_d, (string) 'dump', 58, 57, '<image>/14_dump.js');
$x180 =& $x181[0]; list(,$W180,$S180,$U180) = $x181;
unset($x182, $W182, $S182, $U182);
$x183 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $x180, (string) 'length', 58, 62, '<image>/14_dump.js');
$x182 =& $x183[0]; list(,$W182,$S182,$U182) = $x183;
$x177 = JS::toPrimitive($x182, $global);
$x178 = JS::toPrimitive(40, $global);
$x179 = (is_string($x178) && is_string($x177) ? strcmp($x178, $x177) < 0 : (!is_nan($x184 = JS::toNumber($x178, $global)) && !is_nan($x185 = JS::toNumber($x177, $global)) && $x184 < $x185));
$x165 = $x179; }
if (JS::toBoolean($x165, $global)) {
$x186 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x186;;
};
unset($x187, $W187, $S187, $U187);
$x188 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_d, (string) 'dump', 62, 10, '<image>/14_dump.js');
$x187 =& $x188[0]; list(,$W187,$S187,$U187) = $x188;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x187;
$values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)
						?$_k: str_replace("\\/", "/", json_encode($_k))) . ": " .$_d;;
}
}
};
if (JS::toBoolean(empty($values), $global)) {
$x189 = clone JS::$objectTemplate;
$x189->properties['multiline'] = false;
$x189->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x190 = '[]';
} else {
$x190 = '{}';
}
$x189->properties['dump'] = $x190;
$x189->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x189;;
};
if (JS::toBoolean(count($values) > 5, $global)) {
$x191 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x191;;
};
$x192 = clone JS::$objectTemplate;
$x192->properties['multiline'] = $_multiline;
$x192->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x197 = '[ ';
} else {
$x197 = '{ ';
}
$x195 = JS::toPrimitive($x197, $global);
$x196 = JS::toPrimitive(implode(!$_multiline? ", " : ",\n" .$_indent. "  ", $values), $global);
if (JS::toBoolean($_isArray, $global)) {
$x198 = ' ]';
} else {
$x198 = ' }';
}
$x193 = JS::toPrimitive((is_string($x195) || is_string($x196) ? JS::toString($x195, $global) . JS::toString($x196, $global) : JS::toNumber($x195, $global) + JS::toNumber($x196, $global)), $global);
$x194 = JS::toPrimitive($x198, $global);
$x192->properties['dump'] = (is_string($x193) || is_string($x194) ? JS::toString($x193, $global) . JS::toString($x194, $global) : JS::toNumber($x193, $global) + JS::toNumber($x194, $global));
$x192->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x192;;
};
};
};
};
};
;
return JS::$undefined;
}
echo 'function _d8d2f4d46f65faa836999607363aef73_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$scope->properties[\'indent\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_indent=&$scope->properties[\'indent\'];$Uindent=FALSE;$scope->properties[\'dumper\']=$fn;$_dumper=&$scope->properties[\'dumper\'];$global->scope[++$global->scope_sp]=$scope;$x4=$_indent;if(!JS::toBoolean($x4,$global)){$x4=\'\';}if($Uindent){$global->properties[\'indent\']=$_indent;$_indent=&$global->properties[\'indent\'];}$_indent=$x4;$x5=(((gettype($_v)===gettype(JS::$undefined)&&$_v===JS::$undefined))||(((is_float($_v)||is_int($_v))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_v==JS::$undefined));if(JS::toBoolean($x5,$global)){$x6=clone JS::$objectTemplate;$x6->properties[\'multiline\']=false;$x6->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'dump\']=\'undefined\';$x6->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x6;}else{$x8=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x7=$x8;if(!JS::toBoolean($x7,$global)){$x10=$_v;$x10=($x10===JS::$undefined?\'undefined\':(is_int($x10)||is_float($x10)?\'number\':(is_bool($x10)?\'boolean\':(is_string($x10)?\'string\':(is_object($x10)&&isset($x10->call)?\'function\':\'object\')))));$x9=(((gettype($x10)===gettype(\'boolean\')&&$x10===\'boolean\'))||(((is_float($x10)||is_int($x10))&&(is_float(\'boolean\')||is_int(\'boolean\')))&&$x10==\'boolean\'));$x7=$x9;}if(JS::toBoolean($x7,$global)){$x11=clone JS::$objectTemplate;$x11->properties[\'multiline\']=false;$x11->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x11->properties[\'dump\']=json_encode($_v);$x11->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x11;}else{$x13=$_v;$x13=($x13===JS::$undefined?\'undefined\':(is_int($x13)||is_float($x13)?\'number\':(is_bool($x13)?\'boolean\':(is_string($x13)?\'string\':(is_object($x13)&&isset($x13->call)?\'function\':\'object\')))));$x12=(((gettype($x13)===gettype(\'number\')&&$x13===\'number\'))||(((is_float($x13)||is_int($x13))&&(is_float(\'number\')||is_int(\'number\')))&&$x13==\'number\'));if(JS::toBoolean($x12,$global)){$x14=clone JS::$objectTemplate;$x14->properties[\'multiline\']=false;$x14->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x18=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x18[0];list(,$WTypeError,$STypeError,$UTypeError)=$x18;$x19=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x20=$x19($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x20->class)&&$x20->class===\'Error\'&&!isset($x20->properties[\'file\'])&&!isset($x20->properties[\'line\'])&&!isset($x20->properties[\'column\'])){$x20->properties[\'file\']=\'<image>/14_dump.js\';$x20->properties[\'line\']=11;$x20->properties[\'column\']=47;$x20->attributes[\'file\']=$x20->attributes[\'line\']=$x20->attributes[\'column\']=0;}throw new JSException($x20,11,47,\'<image>/14_dump.js\');}$x15=JS::toObject($_v,$global);unset($x21,$W21,$S21,$U21);$x27=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$x15,(string)\'toString\',11,47,\'<image>/14_dump.js\');$x21=&$x27[0];list(,$W21,$S21,$U21)=$x27;if(!(is_object($x21)&&isset($x21->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'&&!isset($x32->properties[\'file\'])&&!isset($x32->properties[\'line\'])&&!isset($x32->properties[\'column\'])){$x32->properties[\'file\']=\'<image>/14_dump.js\';$x32->properties[\'line\']=11;$x32->properties[\'column\']=47;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,11,47,\'<image>/14_dump.js\');}$x28=$x21->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x29=$x28($global,$x15,$x21,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14->properties[\'dump\']=$x29;$x14->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x14;}else{$x34=$_v;$x34=($x34===JS::$undefined?\'undefined\':(is_int($x34)||is_float($x34)?\'number\':(is_bool($x34)?\'boolean\':(is_string($x34)?\'string\':(is_object($x34)&&isset($x34->call)?\'function\':\'object\')))));$x33=(((gettype($x34)===gettype(\'string\')&&$x34===\'string\'))||(((is_float($x34)||is_int($x34))&&(is_float(\'string\')||is_int(\'string\')))&&$x34==\'string\'));if(JS::toBoolean($x33,$global)){$x35=clone JS::$objectTemplate;$x35->properties[\'multiline\']=false;$x35->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x35->properties[\'dump\']=str_replace("\\\\/","/",json_encode($_v));$x35->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x35;}else{if(JS::toBoolean(isset($_v->call),$global)){$x36=clone JS::$objectTemplate;$scope->properties[\'o\']=JS::$undefined;$_o=&$scope->properties[\'o\'];$Uo=FALSE;$_o=$x36;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;if($_v!==JS::$undefined&&$_v!==NULL){for($x38=array(),$x37=JS::toObject($_v,$global);$x37;$x37=$x37->prototype){foreach($x37->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x38[$property])){continue;}$x38[$property]=TRUE;$_k=$property;unset($x39,$W39,$S39,$U39);$x40=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_v,(string)$_k,20,13,\'<image>/14_dump.js\');$x39=&$x40[0];list(,$W39,$S39,$U39)=$x40;if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x41=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',20,10,\'<image>/14_dump.js\');$_TypeError=&$x41[0];list(,$WTypeError,$STypeError,$UTypeError)=$x41;$x42=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',20,10);$x43=$x42($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x43->class)&&$x43->class===\'Error\'&&!isset($x43->properties[\'file\'])&&!isset($x43->properties[\'line\'])&&!isset($x43->properties[\'column\'])){$x43->properties[\'file\']=\'<image>/14_dump.js\';$x43->properties[\'line\']=20;$x43->properties[\'column\']=10;$x43->attributes[\'file\']=$x43->attributes[\'line\']=$x43->attributes[\'column\']=0;}throw new JSException($x43,20,10,\'<image>/14_dump.js\');}$_o=JS::toObject($_o,$global);unset($x44,$W44,$S44,$U44);$x48=_d8d2f4d46f65faa836999607363aef73_5($global,$scope,$_o,(string)$_k,20,10,\'<image>/14_dump.js\');$x44=&$x48[0];list(,$W44,$S44,$U44)=$x48;if($U44&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[$_k]=$x44;$x44=&$_o->properties[$_k];$_o->attributes[$_k]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U44=FALSE;$W44=TRUE;}if(isset($S44)){$x50=$S44->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',20,10);$x51=$x50($global,$_o,$S44,array($x39),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x49=$x51;}else{if(!$U44){$x49=$x39;if($W44){$x44=$x39;}}else{$x49=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'&&is_int($_k)&&$_k>=$_o->properties[\'length\']){$_o->properties[\'length\']=$_k+1;}}}}unset($_Object,$WObject,$SObject,$UObject);$x55=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'Object\',23,8,\'<image>/14_dump.js\');$_Object=&$x55[0];list(,$WObject,$SObject,$UObject)=$x55;if($UObject){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x56=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'ReferenceError\',23,8,\'<image>/14_dump.js\');$_ReferenceError=&$x56[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x56;$x57=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',23,8);$x58=$x57($global,$global,$_ReferenceError,array(\'Object is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x58->class)&&$x58->class===\'Error\'&&!isset($x58->properties[\'file\'])&&!isset($x58->properties[\'line\'])&&!isset($x58->properties[\'column\'])){$x58->properties[\'file\']=\'<image>/14_dump.js\';$x58->properties[\'line\']=23;$x58->properties[\'column\']=8;$x58->attributes[\'file\']=$x58->attributes[\'line\']=$x58->attributes[\'column\']=0;}throw new JSException($x58,23,8,\'<image>/14_dump.js\');}if($_Object===JS::$undefined||$_Object===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x60=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',23,34,\'<image>/14_dump.js\');$_TypeError=&$x60[0];list(,$WTypeError,$STypeError,$UTypeError)=$x60;$x61=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',23,34);$x62=$x61($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x62->class)&&$x62->class===\'Error\'&&!isset($x62->properties[\'file\'])&&!isset($x62->properties[\'line\'])&&!isset($x62->properties[\'column\'])){$x62->properties[\'file\']=\'<image>/14_dump.js\';$x62->properties[\'line\']=23;$x62->properties[\'column\']=34;$x62->attributes[\'file\']=$x62->attributes[\'line\']=$x62->attributes[\'column\']=0;}throw new JSException($x62,23,34,\'<image>/14_dump.js\');}$x59=JS::toObject($_Object,$global);unset($x63,$W63,$S63,$U63);$x64=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$x59,(string)\'getOwnPropertyNames\',23,34,\'<image>/14_dump.js\');$x63=&$x64[0];list(,$W63,$S63,$U63)=$x64;if(!(is_object($x63)&&isset($x63->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x67=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',23,34,\'<image>/14_dump.js\');$_TypeError=&$x67[0];list(,$WTypeError,$STypeError,$UTypeError)=$x67;$x68=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',23,34);$x69=$x68($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x69->class)&&$x69->class===\'Error\'&&!isset($x69->properties[\'file\'])&&!isset($x69->properties[\'line\'])&&!isset($x69->properties[\'column\'])){$x69->properties[\'file\']=\'<image>/14_dump.js\';$x69->properties[\'line\']=23;$x69->properties[\'column\']=34;$x69->attributes[\'file\']=$x69->attributes[\'line\']=$x69->attributes[\'column\']=0;}throw new JSException($x69,23,34,\'<image>/14_dump.js\');}$x65=$x63->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',23,34);$x66=$x65($global,$x59,$x63,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x70,$W70,$S70,$U70);$x71=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$x66,(string)\'length\',23,37,\'<image>/14_dump.js\');$x70=&$x71[0];list(,$W70,$S70,$U70)=$x71;$x52=JS::toPrimitive($x70,$global);$x53=JS::toPrimitive(0,$global);$x54=(is_string($x53)&&is_string($x52)?strcmp($x53,$x52)<0:(!is_nan($x72=JS::toNumber($x53,$global))&&!is_nan($x73=JS::toNumber($x52,$global))&&$x72<$x73));if(JS::toBoolean($x54,$global)){if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x76=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',24,15,\'<image>/14_dump.js\');$_TypeError=&$x76[0];list(,$WTypeError,$STypeError,$UTypeError)=$x76;$x77=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',24,15);$x78=$x77($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x78->class)&&$x78->class===\'Error\'&&!isset($x78->properties[\'file\'])&&!isset($x78->properties[\'line\'])&&!isset($x78->properties[\'column\'])){$x78->properties[\'file\']=\'<image>/14_dump.js\';$x78->properties[\'line\']=24;$x78->properties[\'column\']=15;$x78->attributes[\'file\']=$x78->attributes[\'line\']=$x78->attributes[\'column\']=0;}throw new JSException($x78,24,15,\'<image>/14_dump.js\');}$x74=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',24,15);$x75=$x74($global,$global,$_dumper,array($_o),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x75;unset($x81,$W81,$S81,$U81);$x82=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_o,(string)\'dump\',25,21,\'<image>/14_dump.js\');$x81=&$x82[0];list(,$W81,$S81,$U81)=$x82;$x79=JS::toPrimitive(\' \',$global);$x80=JS::toPrimitive($x81,$global);$x83=(is_string($x79)||is_string($x80)?JS::toString($x79,$global).JS::toString($x80,$global):JS::toNumber($x79,$global)+JS::toNumber($x80,$global));if($_o===JS::$undefined||$_o===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x84=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',25,12,\'<image>/14_dump.js\');$_TypeError=&$x84[0];list(,$WTypeError,$STypeError,$UTypeError)=$x84;$x85=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',25,12);$x86=$x85($global,$global,$_TypeError,array(\'Cannot assign property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x86->class)&&$x86->class===\'Error\'&&!isset($x86->properties[\'file\'])&&!isset($x86->properties[\'line\'])&&!isset($x86->properties[\'column\'])){$x86->properties[\'file\']=\'<image>/14_dump.js\';$x86->properties[\'line\']=25;$x86->properties[\'column\']=12;$x86->attributes[\'file\']=$x86->attributes[\'line\']=$x86->attributes[\'column\']=0;}throw new JSException($x86,25,12,\'<image>/14_dump.js\');}$_o=JS::toObject($_o,$global);unset($x87,$W87,$S87,$U87);$x88=_d8d2f4d46f65faa836999607363aef73_5($global,$scope,$_o,(string)\'dump\',25,12,\'<image>/14_dump.js\');$x87=&$x88[0];list(,$W87,$S87,$U87)=$x88;if($U87&&(!isset($_o->extensible)||$_o->extensible)){$_o->properties[\'dump\']=$x87;$x87=&$_o->properties[\'dump\'];$_o->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$U87=FALSE;$W87=TRUE;}if(isset($S87)){$x90=$S87->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',25,12);$x91=$x90($global,$_o,$S87,array($x83),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x89=$x91;}else{if(!$U87){$x89=$x83;if($W87){$x87=$x83;}}else{$x89=JS::$undefined;}}if(isset($_o->class)&&$_o->class===\'Array\'&&is_int(\'dump\')&&\'dump\'>=$_o->properties[\'length\']){$_o->properties[\'length\']=\'dump\'+1;}}else{$x92=clone JS::$objectTemplate;$x92->properties[\'multiline\']=false;$x92->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x92->properties[\'dump\']=\'\';$x92->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($Uo){$global->properties[\'o\']=$_o;$_o=&$global->properties[\'o\'];}$_o=$x92;}$x93=clone JS::$objectTemplate;unset($x94,$W94,$S94,$U94);$x95=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_o,(string)\'multiline\',31,25,\'<image>/14_dump.js\');$x94=&$x95[0];list(,$W94,$S94,$U94)=$x95;$x93->properties[\'multiline\']=$x94;$x93->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x100=JS::toPrimitive(\'[function\',$global);$x101=JS::toPrimitive((isset($_v->name)?" ".$_v->name:""),$global);unset($x102,$W102,$S102,$U102);$x103=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_o,(string)\'dump\',35,9,\'<image>/14_dump.js\');$x102=&$x103[0];list(,$W102,$S102,$U102)=$x103;$x98=JS::toPrimitive((is_string($x100)||is_string($x101)?JS::toString($x100,$global).JS::toString($x101,$global):JS::toNumber($x100,$global)+JS::toNumber($x101,$global)),$global);$x99=JS::toPrimitive($x102,$global);$x96=JS::toPrimitive((is_string($x98)||is_string($x99)?JS::toString($x98,$global).JS::toString($x99,$global):JS::toNumber($x98,$global)+JS::toNumber($x99,$global)),$global);$x97=JS::toPrimitive(\']\',$global);$x93->properties[\'dump\']=(is_string($x96)||is_string($x97)?JS::toString($x96,$global).JS::toString($x97,$global):JS::toNumber($x96,$global)+JS::toNumber($x97,$global));$x93->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x93;}else{$scope->properties[\'multiline\']=JS::$undefined;$_multiline=&$scope->properties[\'multiline\'];$Umultiline=FALSE;$_multiline=false;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::$undefined;$scope->properties[\'isArray\']=JS::$undefined;$_isArray=&$scope->properties[\'isArray\'];$UisArray=FALSE;$_isArray=isset($_v->class)&&$_v->class==="Array";$values=array();if(JS::toBoolean($_isArray,$global)){for($x104=0;;++$x104){if($x104===0){$x105=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x105;}if($x104!==0){$x106=++$_i;}unset($x110,$W110,$S110,$U110);$x111=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_v,(string)\'length\',43,22,\'<image>/14_dump.js\');$x110=&$x111[0];list(,$W110,$S110,$U110)=$x111;$x107=JS::toPrimitive($_i,$global);$x108=JS::toPrimitive($x110,$global);$x109=(is_string($x107)&&is_string($x108)?strcmp($x107,$x108)<0:(!is_nan($x112=JS::toNumber($x107,$global))&&!is_nan($x113=JS::toNumber($x108,$global))&&$x112<$x113));if(!JS::toBoolean($x109,$global)){break;}unset($x115,$W115,$S115,$U115);$x116=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_v,(string)$_i,44,23,\'<image>/14_dump.js\');$x115=&$x116[0];list(,$W115,$S115,$U115)=$x116;$x117=JS::toPrimitive($_indent,$global);$x118=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x121=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',44,21,\'<image>/14_dump.js\');$_TypeError=&$x121[0];list(,$WTypeError,$STypeError,$UTypeError)=$x121;$x122=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',44,21);$x123=$x122($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x123->class)&&$x123->class===\'Error\'&&!isset($x123->properties[\'file\'])&&!isset($x123->properties[\'line\'])&&!isset($x123->properties[\'column\'])){$x123->properties[\'file\']=\'<image>/14_dump.js\';$x123->properties[\'line\']=44;$x123->properties[\'column\']=21;$x123->attributes[\'file\']=$x123->attributes[\'line\']=$x123->attributes[\'column\']=0;}throw new JSException($x123,44,21,\'<image>/14_dump.js\');}$x119=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',44,21);$x120=$x119($global,$global,$_dumper,array($x115,(is_string($x117)||is_string($x118)?JS::toString($x117,$global).JS::toString($x118,$global):JS::toNumber($x117,$global)+JS::toNumber($x118,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x120;unset($x124,$W124,$S124,$U124);$x125=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_d,(string)\'multiline\',44,43,\'<image>/14_dump.js\');$x124=&$x125[0];list(,$W124,$S124,$U124)=$x125;$x114=$x124;if(!JS::toBoolean($x114,$global)){unset($x129,$W129,$S129,$U129);$x130=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_d,(string)\'dump\',44,58,\'<image>/14_dump.js\');$x129=&$x130[0];list(,$W129,$S129,$U129)=$x130;unset($x131,$W131,$S131,$U131);$x132=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$x129,(string)\'length\',44,63,\'<image>/14_dump.js\');$x131=&$x132[0];list(,$W131,$S131,$U131)=$x132;$x126=JS::toPrimitive($x131,$global);$x127=JS::toPrimitive(40,$global);$x128=(is_string($x127)&&is_string($x126)?strcmp($x127,$x126)<0:(!is_nan($x133=JS::toNumber($x127,$global))&&!is_nan($x134=JS::toNumber($x126,$global))&&$x133<$x134));$x114=$x128;}if(JS::toBoolean($x114,$global)){$x135=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x135;}unset($x136,$W136,$S136,$U136);$x137=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_d,(string)\'dump\',48,11,\'<image>/14_dump.js\');$x136=&$x137[0];list(,$W136,$S136,$U136)=$x137;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x136;$values[]=$_d;}}if($_v!==JS::$undefined&&$_v!==NULL){for($x139=array(),$x138=JS::toObject($_v,$global);$x138;$x138=$x138->prototype){foreach($x138->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x139[$property])){continue;}$x139[$property]=TRUE;$_k=$property;$x140=$_isArray;if(JS::toBoolean($x140,$global)){unset($_String,$WString,$SString,$UString);$x142=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'String\',56,20,\'<image>/14_dump.js\');$_String=&$x142[0];list(,$WString,$SString,$UString)=$x142;if($UString){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x143=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'ReferenceError\',56,20,\'<image>/14_dump.js\');$_ReferenceError=&$x143[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x143;$x144=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,20);$x145=$x144($global,$global,$_ReferenceError,array(\'String is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x145->class)&&$x145->class===\'Error\'&&!isset($x145->properties[\'file\'])&&!isset($x145->properties[\'line\'])&&!isset($x145->properties[\'column\'])){$x145->properties[\'file\']=\'<image>/14_dump.js\';$x145->properties[\'line\']=56;$x145->properties[\'column\']=20;$x145->attributes[\'file\']=$x145->attributes[\'line\']=$x145->attributes[\'column\']=0;}throw new JSException($x145,56,20,\'<image>/14_dump.js\');}unset($_Number,$WNumber,$SNumber,$UNumber);$x146=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'Number\',56,27,\'<image>/14_dump.js\');$_Number=&$x146[0];list(,$WNumber,$SNumber,$UNumber)=$x146;if($UNumber){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x147=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'ReferenceError\',56,27,\'<image>/14_dump.js\');$_ReferenceError=&$x147[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x147;$x148=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,27);$x149=$x148($global,$global,$_ReferenceError,array(\'Number is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x149->class)&&$x149->class===\'Error\'&&!isset($x149->properties[\'file\'])&&!isset($x149->properties[\'line\'])&&!isset($x149->properties[\'column\'])){$x149->properties[\'file\']=\'<image>/14_dump.js\';$x149->properties[\'line\']=56;$x149->properties[\'column\']=27;$x149->attributes[\'file\']=$x149->attributes[\'line\']=$x149->attributes[\'column\']=0;}throw new JSException($x149,56,27,\'<image>/14_dump.js\');}if(!(is_object($_Number)&&isset($_Number->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x152=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',56,33,\'<image>/14_dump.js\');$_TypeError=&$x152[0];list(,$WTypeError,$STypeError,$UTypeError)=$x152;$x153=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,33);$x154=$x153($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x154->class)&&$x154->class===\'Error\'&&!isset($x154->properties[\'file\'])&&!isset($x154->properties[\'line\'])&&!isset($x154->properties[\'column\'])){$x154->properties[\'file\']=\'<image>/14_dump.js\';$x154->properties[\'line\']=56;$x154->properties[\'column\']=33;$x154->attributes[\'file\']=$x154->attributes[\'line\']=$x154->attributes[\'column\']=0;}throw new JSException($x154,56,33,\'<image>/14_dump.js\');}$x150=$_Number->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,33);$x151=$x150($global,$global,$_Number,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x157=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',56,26,\'<image>/14_dump.js\');$_TypeError=&$x157[0];list(,$WTypeError,$STypeError,$UTypeError)=$x157;$x158=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,26);$x159=$x158($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x159->class)&&$x159->class===\'Error\'&&!isset($x159->properties[\'file\'])&&!isset($x159->properties[\'line\'])&&!isset($x159->properties[\'column\'])){$x159->properties[\'file\']=\'<image>/14_dump.js\';$x159->properties[\'line\']=56;$x159->properties[\'column\']=26;$x159->attributes[\'file\']=$x159->attributes[\'line\']=$x159->attributes[\'column\']=0;}throw new JSException($x159,56,26,\'<image>/14_dump.js\');}$x155=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,26);$x156=$x155($global,$global,$_String,array($x151),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(!(is_object($_String)&&isset($_String->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x162=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',56,48,\'<image>/14_dump.js\');$_TypeError=&$x162[0];list(,$WTypeError,$STypeError,$UTypeError)=$x162;$x163=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,48);$x164=$x163($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x164->class)&&$x164->class===\'Error\'&&!isset($x164->properties[\'file\'])&&!isset($x164->properties[\'line\'])&&!isset($x164->properties[\'column\'])){$x164->properties[\'file\']=\'<image>/14_dump.js\';$x164->properties[\'line\']=56;$x164->properties[\'column\']=48;$x164->attributes[\'file\']=$x164->attributes[\'line\']=$x164->attributes[\'column\']=0;}throw new JSException($x164,56,48,\'<image>/14_dump.js\');}$x160=$_String->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',56,48);$x161=$x160($global,$global,$_String,array($_k),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x141=(((gettype($x156)===gettype($x161)&&$x156===$x161))||(((is_float($x156)||is_int($x156))&&(is_float($x161)||is_int($x161)))&&$x156==$x161));$x140=$x141;}if(JS::toBoolean($x140,$global)){continue;}unset($x166,$W166,$S166,$U166);$x167=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_v,(string)$_k,58,22,\'<image>/14_dump.js\');$x166=&$x167[0];list(,$W166,$S166,$U166)=$x167;$x168=JS::toPrimitive($_indent,$global);$x169=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x172=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',58,20,\'<image>/14_dump.js\');$_TypeError=&$x172[0];list(,$WTypeError,$STypeError,$UTypeError)=$x172;$x173=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',58,20);$x174=$x173($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x174->class)&&$x174->class===\'Error\'&&!isset($x174->properties[\'file\'])&&!isset($x174->properties[\'line\'])&&!isset($x174->properties[\'column\'])){$x174->properties[\'file\']=\'<image>/14_dump.js\';$x174->properties[\'line\']=58;$x174->properties[\'column\']=20;$x174->attributes[\'file\']=$x174->attributes[\'line\']=$x174->attributes[\'column\']=0;}throw new JSException($x174,58,20,\'<image>/14_dump.js\');}$x170=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',58,20);$x171=$x170($global,$global,$_dumper,array($x166,(is_string($x168)||is_string($x169)?JS::toString($x168,$global).JS::toString($x169,$global):JS::toNumber($x168,$global)+JS::toNumber($x169,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x171;unset($x175,$W175,$S175,$U175);$x176=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_d,(string)\'multiline\',58,42,\'<image>/14_dump.js\');$x175=&$x176[0];list(,$W175,$S175,$U175)=$x176;$x165=$x175;if(!JS::toBoolean($x165,$global)){unset($x180,$W180,$S180,$U180);$x181=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_d,(string)\'dump\',58,57,\'<image>/14_dump.js\');$x180=&$x181[0];list(,$W180,$S180,$U180)=$x181;unset($x182,$W182,$S182,$U182);$x183=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$x180,(string)\'length\',58,62,\'<image>/14_dump.js\');$x182=&$x183[0];list(,$W182,$S182,$U182)=$x183;$x177=JS::toPrimitive($x182,$global);$x178=JS::toPrimitive(40,$global);$x179=(is_string($x178)&&is_string($x177)?strcmp($x178,$x177)<0:(!is_nan($x184=JS::toNumber($x178,$global))&&!is_nan($x185=JS::toNumber($x177,$global))&&$x184<$x185));$x165=$x179;}if(JS::toBoolean($x165,$global)){$x186=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x186;}unset($x187,$W187,$S187,$U187);$x188=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_d,(string)\'dump\',62,10,\'<image>/14_dump.js\');$x187=&$x188[0];list(,$W187,$S187,$U187)=$x188;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x187;$values[]=(preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)?$_k:str_replace("\\\\/","/",json_encode($_k))).": ".$_d;}}}if(JS::toBoolean(empty($values),$global)){$x189=clone JS::$objectTemplate;$x189->properties[\'multiline\']=false;$x189->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x190=\'[]\';}else{$x190=\'{}\';}$x189->properties[\'dump\']=$x190;$x189->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x189;}if(JS::toBoolean(count($values)>5,$global)){$x191=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x191;}$x192=clone JS::$objectTemplate;$x192->properties[\'multiline\']=$_multiline;$x192->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x197=\'[ \';}else{$x197=\'{ \';}$x195=JS::toPrimitive($x197,$global);$x196=JS::toPrimitive(implode(!$_multiline?", ":",\\n".$_indent."  ",$values),$global);if(JS::toBoolean($_isArray,$global)){$x198=\' ]\';}else{$x198=\' }\';}$x193=JS::toPrimitive((is_string($x195)||is_string($x196)?JS::toString($x195,$global).JS::toString($x196,$global):JS::toNumber($x195,$global)+JS::toNumber($x196,$global)),$global);$x194=JS::toPrimitive($x198,$global);$x192->properties[\'dump\']=(is_string($x193)||is_string($x194)?JS::toString($x193,$global).JS::toString($x194,$global):JS::toNumber($x193,$global)+JS::toNumber($x194,$global));$x192->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x192;}}}}}return JS::$undefined;}', "\n";
function _d8d2f4d46f65faa836999607363aef73_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$scope->properties['dump'] = $fn;
$_dump =& $scope->properties['dump'];
$global->scope[++$global->scope_sp] = $scope;
$x199 = clone JS::$functionTemplate; $x199->call = '_d8d2f4d46f65faa836999607363aef73_2'; $x199->parameters = array (
  0 => 'v',
  1 => 'indent',
); $x199->name = 'dumper'; $x199->scope = $scope; $x199->properties['prototype'] = clone JS::$objectTemplate; $x199->attributes['prototype'] = JS::WRITABLE; $x199->properties['prototype']->properties['constructor'] = $x199; $x199->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x199->properties['length'] = 2; $x199->attributes['length'] = 0;
$scope->properties['dumper'] = JS::$undefined; $_dumper =& $scope->properties['dumper'];
$Udumper = FALSE;
$_dumper = $x199;
for ($x200 = 0;; ++$x200) {
if ($x200 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x201 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'arguments', 84, 22, '<image>/14_dump.js');
$_arguments =& $x201[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x201;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x202 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'ReferenceError', 84, 22, '<image>/14_dump.js');
$_ReferenceError =& $x202[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x202;
$x203 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 84, 22);
$x204 = $x203($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x204->class) && $x204->class === 'Error' && !isset($x204->properties['file']) && !isset($x204->properties['line']) && !isset($x204->properties['column'])) {$x204->properties['file'] = '<image>/14_dump.js';$x204->properties['line'] = 84;$x204->properties['column'] = 22;$x204->attributes['file'] = $x204->attributes['line'] = $x204->attributes['column'] = 0; }
throw new JSException($x204, 84, 22, '<image>/14_dump.js');
}
unset($x205, $W205, $S205, $U205);
$x206 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_arguments, (string) 'length', 84, 31, '<image>/14_dump.js');
$x205 =& $x206[0]; list(,$W205,$S205,$U205) = $x206;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x205;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x200 !== 0) {
$x207 = JS::toPrimitive($_i, $global);
$x208 = JS::toPrimitive(1, $global);
$x209 = (is_string($x207) || is_string($x208) ? JS::toString($x207, $global) . JS::toString($x208, $global) : JS::toNumber($x207, $global) + JS::toNumber($x208, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x209;
}
$x210 = JS::toPrimitive($_i, $global);
$x211 = JS::toPrimitive($_l, $global);
$x212 = (is_string($x210) && is_string($x211) ? strcmp($x210, $x211) < 0 : (!is_nan($x213 = JS::toNumber($x210, $global)) && !is_nan($x214 = JS::toNumber($x211, $global)) && $x213 < $x214));
if (!JS::toBoolean($x212, $global)) { break; }

unset($x215, $W215, $S215, $U215);
$x216 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $_arguments, (string) $_i, 85, 25, '<image>/14_dump.js');
$x215 =& $x216[0]; list(,$W215,$S215,$U215) = $x216;
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x219 = _d8d2f4d46f65faa836999607363aef73_3($global, $scope, $scope, (string) 'TypeError', 85, 15, '<image>/14_dump.js');
$_TypeError =& $x219[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x219;
$x220 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 85, 15);
$x221 = $x220($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x221->class) && $x221->class === 'Error' && !isset($x221->properties['file']) && !isset($x221->properties['line']) && !isset($x221->properties['column'])) {$x221->properties['file'] = '<image>/14_dump.js';$x221->properties['line'] = 85;$x221->properties['column'] = 15;$x221->attributes['file'] = $x221->attributes['line'] = $x221->attributes['column'] = 0; }
throw new JSException($x221, 85, 15, '<image>/14_dump.js');
}
$x217 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 85, 15);
$x218 = $x217($global, $global, $_dumper, array($x215), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x222, $W222, $S222, $U222);
$x223 = _d8d2f4d46f65faa836999607363aef73_4($global, $scope, $x218, (string) 'dump', 85, 29, '<image>/14_dump.js');
$x222 =& $x223[0]; list(,$W222,$S222,$U222) = $x223;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x222;
echo$_arg. "\n";;
};
;
return JS::$undefined;
}
echo 'function _d8d2f4d46f65faa836999607363aef73_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'dump\']=$fn;$_dump=&$scope->properties[\'dump\'];$global->scope[++$global->scope_sp]=$scope;$x199=clone JS::$functionTemplate;$x199->call=\'_d8d2f4d46f65faa836999607363aef73_2\';$x199->parameters=array(0=>\'v\',1=>\'indent\',);$x199->name=\'dumper\';$x199->scope=$scope;$x199->properties[\'prototype\']=clone JS::$objectTemplate;$x199->attributes[\'prototype\']=JS::WRITABLE;$x199->properties[\'prototype\']->properties[\'constructor\']=$x199;$x199->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x199->properties[\'length\']=2;$x199->attributes[\'length\']=0;$scope->properties[\'dumper\']=JS::$undefined;$_dumper=&$scope->properties[\'dumper\'];$Udumper=FALSE;$_dumper=$x199;for($x200=0;;++$x200){if($x200===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x201=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'arguments\',84,22,\'<image>/14_dump.js\');$_arguments=&$x201[0];list(,$Warguments,$Sarguments,$Uarguments)=$x201;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x202=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'ReferenceError\',84,22,\'<image>/14_dump.js\');$_ReferenceError=&$x202[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x202;$x203=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',84,22);$x204=$x203($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x204->class)&&$x204->class===\'Error\'&&!isset($x204->properties[\'file\'])&&!isset($x204->properties[\'line\'])&&!isset($x204->properties[\'column\'])){$x204->properties[\'file\']=\'<image>/14_dump.js\';$x204->properties[\'line\']=84;$x204->properties[\'column\']=22;$x204->attributes[\'file\']=$x204->attributes[\'line\']=$x204->attributes[\'column\']=0;}throw new JSException($x204,84,22,\'<image>/14_dump.js\');}unset($x205,$W205,$S205,$U205);$x206=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_arguments,(string)\'length\',84,31,\'<image>/14_dump.js\');$x205=&$x206[0];list(,$W205,$S205,$U205)=$x206;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x205;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x200!==0){$x207=JS::toPrimitive($_i,$global);$x208=JS::toPrimitive(1,$global);$x209=(is_string($x207)||is_string($x208)?JS::toString($x207,$global).JS::toString($x208,$global):JS::toNumber($x207,$global)+JS::toNumber($x208,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x209;}$x210=JS::toPrimitive($_i,$global);$x211=JS::toPrimitive($_l,$global);$x212=(is_string($x210)&&is_string($x211)?strcmp($x210,$x211)<0:(!is_nan($x213=JS::toNumber($x210,$global))&&!is_nan($x214=JS::toNumber($x211,$global))&&$x213<$x214));if(!JS::toBoolean($x212,$global)){break;}unset($x215,$W215,$S215,$U215);$x216=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$_arguments,(string)$_i,85,25,\'<image>/14_dump.js\');$x215=&$x216[0];list(,$W215,$S215,$U215)=$x216;if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x219=_d8d2f4d46f65faa836999607363aef73_3($global,$scope,$scope,(string)\'TypeError\',85,15,\'<image>/14_dump.js\');$_TypeError=&$x219[0];list(,$WTypeError,$STypeError,$UTypeError)=$x219;$x220=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',85,15);$x221=$x220($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x221->class)&&$x221->class===\'Error\'&&!isset($x221->properties[\'file\'])&&!isset($x221->properties[\'line\'])&&!isset($x221->properties[\'column\'])){$x221->properties[\'file\']=\'<image>/14_dump.js\';$x221->properties[\'line\']=85;$x221->properties[\'column\']=15;$x221->attributes[\'file\']=$x221->attributes[\'line\']=$x221->attributes[\'column\']=0;}throw new JSException($x221,85,15,\'<image>/14_dump.js\');}$x217=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',85,15);$x218=$x217($global,$global,$_dumper,array($x215),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x222,$W222,$S222,$U222);$x223=_d8d2f4d46f65faa836999607363aef73_4($global,$scope,$x218,(string)\'dump\',85,29,\'<image>/14_dump.js\');$x222=&$x223[0];list(,$W222,$S222,$U222)=$x223;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x222;echo$_arg."\\n";}return JS::$undefined;}', "\n";
function _d8d2f4d46f65faa836999607363aef73_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/14_dump.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/14_dump.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x224 = clone JS::$functionTemplate; $x224->call = '_d8d2f4d46f65faa836999607363aef73_1'; $x224->parameters = array (
); $x224->name = 'dump'; $x224->scope = $scope; $x224->properties['prototype'] = clone JS::$objectTemplate; $x224->attributes['prototype'] = JS::WRITABLE; $x224->properties['prototype']->properties['constructor'] = $x224; $x224->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x224->properties['length'] = 0; $x224->attributes['length'] = 0;
$scope->properties['dump'] = JS::$undefined; $_dump =& $scope->properties['dump'];
$Udump = FALSE;
$_dump = $x224;
$_dump;
;
return JS::$undefined;
}
