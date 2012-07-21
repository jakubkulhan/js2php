function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x16=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x17;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x22 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
$_TypeError =& $x22[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x22;
$x23 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array($file, $line, $column);
$x24 = $x23($global, $global, $_TypeError, array('Cannot lookup property of undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x24->class) && $x24->class === 'Error') {$x24->properties['file'] = $file;$x24->properties['line'] = $line;$x24->properties['column'] = $column;$x24->attributes['file'] = $x24->attributes['line'] = $x24->attributes['column'] = 0; }
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
echo 'function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x22=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x22[0];list(,$WTypeError,$STypeError,$UTypeError)=$x22;$x23=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x24=$x23($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x24->class)&&$x24->class===\'Error\'){$x24->properties[\'file\']=$file;$x24->properties[\'line\']=$line;$x24->properties[\'column\']=$column;$x24->attributes[\'file\']=$x24->attributes[\'line\']=$x24->attributes[\'column\']=0;}throw new JSException($x24,$line,$column,$file);}$W21=$S21=$U21=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x21=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x25=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x26=$x25($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x21=$x26;}else{$x21=JS::$undefined;$U21=TRUE;}return array(&$x21,$W21,$S21,$U21);}', "\n";
function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_2($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x18 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', 11, 47, '<image>/14_dump.js');
$_TypeError =& $x18[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x18;
$x19 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 11, 47);
$x20 = $x19($global, $global, $_TypeError, array('Cannot call function on undefined/null.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x20->class) && $x20->class === 'Error') {$x20->properties['file'] = '<image>/14_dump.js';$x20->properties['line'] = 11;$x20->properties['column'] = 47;$x20->attributes['file'] = $x20->attributes['line'] = $x20->attributes['column'] = 0; }
throw new JSException($x20, 11, 47, '<image>/14_dump.js');
}
$x15 = JS::toObject($_v, $global);
unset($x21, $W21, $S21, $U21);
$x27 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $x15, (string) 'toString', 11, 47, '<image>/14_dump.js');
$x21 =& $x27[0]; list(,$W21,$S21,$U21) = $x27;
if (!(is_object($x21) && isset($x21->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', 11, 47, '<image>/14_dump.js');
$_TypeError =& $x30[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x30;
$x31 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 11, 47);
$x32 = $x31($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x32->class) && $x32->class === 'Error') {$x32->properties['file'] = '<image>/14_dump.js';$x32->properties['line'] = 11;$x32->properties['column'] = 47;$x32->attributes['file'] = $x32->attributes['line'] = $x32->attributes['column'] = 0; }
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

if (JS::toBoolean(strlen($_v) > 70, $global)) {
$x35 = clone JS::$objectTemplate;
$x35->properties['multiline'] = true;
$x35->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x35->properties['dump'] = str_replace("\\/", "/", json_encode(substr($_v, 0, 70))) . "...";
$x35->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x35;;
}
else {
$x36 = clone JS::$objectTemplate;
$x36->properties['multiline'] = false;
$x36->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x36->properties['dump'] = str_replace("\\/", "/", json_encode($_v));
$x36->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x36;;
};
}
else {

if (JS::toBoolean(isset($_v->call), $global)) {
$x37 = clone JS::$objectTemplate;
$x37->properties['multiline'] = false;
$x37->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
$x40 = JS::toPrimitive('[function', $global);
$x41 = JS::toPrimitive((isset($_v->name) ? " " .$_v->name : ""), $global);
$x38 = JS::toPrimitive((is_string($x40) || is_string($x41) ? JS::toString($x40, $global) . JS::toString($x41, $global) : JS::toNumber($x40, $global) + JS::toNumber($x41, $global)), $global);
$x39 = JS::toPrimitive(']', $global);
$x37->properties['dump'] = (is_string($x38) || is_string($x39) ? JS::toString($x38, $global) . JS::toString($x39, $global) : JS::toNumber($x38, $global) + JS::toNumber($x39, $global));
$x37->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x37;;
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
for ($x42 = 0;; ++$x42) {
if ($x42 === 0) {
$x43 = 0;
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x43;
}
if ($x42 !== 0) {
$x44 = ++$_i;
}
unset($x48, $W48, $S48, $U48);
$x49 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_v, (string) 'length', 30, 22, '<image>/14_dump.js');
$x48 =& $x49[0]; list(,$W48,$S48,$U48) = $x49;
$x45 = JS::toPrimitive($_i, $global);
$x46 = JS::toPrimitive($x48, $global);
$x47 = (is_string($x45) && is_string($x46) ? strcmp($x45, $x46) < 0 : (!is_nan($x50 = JS::toNumber($x45, $global)) && !is_nan($x51 = JS::toNumber($x46, $global)) && $x50 < $x51));
if (!JS::toBoolean($x47, $global)) { break; }

unset($x52, $W52, $S52, $U52);
$x53 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_v, (string) $_i, 31, 23, '<image>/14_dump.js');
$x52 =& $x53[0]; list(,$W52,$S52,$U52) = $x53;
$x54 = JS::toPrimitive($_indent, $global);
$x55 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x58 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', 31, 21, '<image>/14_dump.js');
$_TypeError =& $x58[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x58;
$x59 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 31, 21);
$x60 = $x59($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x60->class) && $x60->class === 'Error') {$x60->properties['file'] = '<image>/14_dump.js';$x60->properties['line'] = 31;$x60->properties['column'] = 21;$x60->attributes['file'] = $x60->attributes['line'] = $x60->attributes['column'] = 0; }
throw new JSException($x60, 31, 21, '<image>/14_dump.js');
}
$x56 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 31, 21);
$x57 = $x56($global, $global, $_dumper, array($x52, (is_string($x54) || is_string($x55) ? JS::toString($x54, $global) . JS::toString($x55, $global) : JS::toNumber($x54, $global) + JS::toNumber($x55, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x57;
unset($x61, $W61, $S61, $U61);
$x62 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_d, (string) 'multiline', 31, 43, '<image>/14_dump.js');
$x61 =& $x62[0]; list(,$W61,$S61,$U61) = $x62;
if (JS::toBoolean($x61, $global)) {
$x63 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x63;;
};
unset($x64, $W64, $S64, $U64);
$x65 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_d, (string) 'dump', 35, 11, '<image>/14_dump.js');
$x64 =& $x65[0]; list(,$W64,$S64,$U64) = $x65;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x64;
$values[] =$_d;;
};
}
else {


if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x67 = array(), $x66 = JS::toObject($_v, $global); $x66; $x66 = $x66->prototype) {
foreach ($x66->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE) || isset($x67[$property])) { continue; }
$x67[$property] = TRUE;
$_k = $property;

unset($x68, $W68, $S68, $U68);
$x69 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_v, (string) $_k, 42, 23, '<image>/14_dump.js');
$x68 =& $x69[0]; list(,$W68,$S68,$U68) = $x69;
$x70 = JS::toPrimitive($_indent, $global);
$x71 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x74 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', 42, 21, '<image>/14_dump.js');
$_TypeError =& $x74[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x74;
$x75 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 42, 21);
$x76 = $x75($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x76->class) && $x76->class === 'Error') {$x76->properties['file'] = '<image>/14_dump.js';$x76->properties['line'] = 42;$x76->properties['column'] = 21;$x76->attributes['file'] = $x76->attributes['line'] = $x76->attributes['column'] = 0; }
throw new JSException($x76, 42, 21, '<image>/14_dump.js');
}
$x72 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 42, 21);
$x73 = $x72($global, $global, $_dumper, array($x68, (is_string($x70) || is_string($x71) ? JS::toString($x70, $global) . JS::toString($x71, $global) : JS::toNumber($x70, $global) + JS::toNumber($x71, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x73;
unset($x77, $W77, $S77, $U77);
$x78 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_d, (string) 'multiline', 42, 43, '<image>/14_dump.js');
$x77 =& $x78[0]; list(,$W77,$S77,$U77) = $x78;
if (JS::toBoolean($x77, $global)) {
$x79 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x79;;
};
unset($x80, $W80, $S80, $U80);
$x81 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_d, (string) 'dump', 46, 11, '<image>/14_dump.js');
$x80 =& $x81[0]; list(,$W80,$S80,$U80) = $x81;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x80;
$values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k) ?$_k: json_encode($_k)) . ": " .$_d;;
}
}
};
};
if (JS::toBoolean(empty($values), $global)) {
$x82 = clone JS::$objectTemplate;
$x82->properties['multiline'] = false;
$x82->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x83 = '[]';
} else {
$x83 = '{}';
}
$x82->properties['dump'] = $x83;
$x82->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x82;;
};
if (JS::toBoolean(count($values) > 5, $global)) {
$x84 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x84;;
};
$x85 = clone JS::$objectTemplate;
$x85->properties['multiline'] = $_multiline;
$x85->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x90 = '[ ';
} else {
$x90 = '{ ';
}
$x88 = JS::toPrimitive($x90, $global);
$x89 = JS::toPrimitive(implode(!$_multiline? ", " : ",\n" .$_indent. "  ", $values), $global);
if (JS::toBoolean($_isArray, $global)) {
$x91 = ' ]';
} else {
$x91 = ' }';
}
$x86 = JS::toPrimitive((is_string($x88) || is_string($x89) ? JS::toString($x88, $global) . JS::toString($x89, $global) : JS::toNumber($x88, $global) + JS::toNumber($x89, $global)), $global);
$x87 = JS::toPrimitive($x91, $global);
$x85->properties['dump'] = (is_string($x86) || is_string($x87) ? JS::toString($x86, $global) . JS::toString($x87, $global) : JS::toNumber($x86, $global) + JS::toNumber($x87, $global));
$x85->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x85;;
};
};
};
};
};
;
return JS::$undefined;
}
echo 'function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$scope->properties[\'indent\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_indent=&$scope->properties[\'indent\'];$Uindent=FALSE;$scope->properties[\'dumper\']=$fn;$_dumper=&$scope->properties[\'dumper\'];$global->scope[++$global->scope_sp]=$scope;$x4=$_indent;if(!JS::toBoolean($x4,$global)){$x4=\'\';}if($Uindent){$global->properties[\'indent\']=$_indent;$_indent=&$global->properties[\'indent\'];}$_indent=$x4;$x5=(((gettype($_v)===gettype(JS::$undefined)&&$_v===JS::$undefined))||(((is_float($_v)||is_int($_v))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_v==JS::$undefined));if(JS::toBoolean($x5,$global)){$x6=clone JS::$objectTemplate;$x6->properties[\'multiline\']=false;$x6->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'dump\']=\'undefined\';$x6->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x6;}else{$x8=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x7=$x8;if(!JS::toBoolean($x7,$global)){$x10=$_v;$x10=($x10===JS::$undefined?\'undefined\':(is_int($x10)||is_float($x10)?\'number\':(is_bool($x10)?\'boolean\':(is_string($x10)?\'string\':(is_object($x10)&&isset($x10->call)?\'function\':\'object\')))));$x9=(((gettype($x10)===gettype(\'boolean\')&&$x10===\'boolean\'))||(((is_float($x10)||is_int($x10))&&(is_float(\'boolean\')||is_int(\'boolean\')))&&$x10==\'boolean\'));$x7=$x9;}if(JS::toBoolean($x7,$global)){$x11=clone JS::$objectTemplate;$x11->properties[\'multiline\']=false;$x11->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x11->properties[\'dump\']=json_encode($_v);$x11->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x11;}else{$x13=$_v;$x13=($x13===JS::$undefined?\'undefined\':(is_int($x13)||is_float($x13)?\'number\':(is_bool($x13)?\'boolean\':(is_string($x13)?\'string\':(is_object($x13)&&isset($x13->call)?\'function\':\'object\')))));$x12=(((gettype($x13)===gettype(\'number\')&&$x13===\'number\'))||(((is_float($x13)||is_int($x13))&&(is_float(\'number\')||is_int(\'number\')))&&$x13==\'number\'));if(JS::toBoolean($x12,$global)){$x14=clone JS::$objectTemplate;$x14->properties[\'multiline\']=false;$x14->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x18=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x18[0];list(,$WTypeError,$STypeError,$UTypeError)=$x18;$x19=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x20=$x19($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x20->class)&&$x20->class===\'Error\'){$x20->properties[\'file\']=\'<image>/14_dump.js\';$x20->properties[\'line\']=11;$x20->properties[\'column\']=47;$x20->attributes[\'file\']=$x20->attributes[\'line\']=$x20->attributes[\'column\']=0;}throw new JSException($x20,11,47,\'<image>/14_dump.js\');}$x15=JS::toObject($_v,$global);unset($x21,$W21,$S21,$U21);$x27=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$x15,(string)\'toString\',11,47,\'<image>/14_dump.js\');$x21=&$x27[0];list(,$W21,$S21,$U21)=$x27;if(!(is_object($x21)&&isset($x21->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'){$x32->properties[\'file\']=\'<image>/14_dump.js\';$x32->properties[\'line\']=11;$x32->properties[\'column\']=47;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,11,47,\'<image>/14_dump.js\');}$x28=$x21->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x29=$x28($global,$x15,$x21,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14->properties[\'dump\']=$x29;$x14->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x14;}else{$x34=$_v;$x34=($x34===JS::$undefined?\'undefined\':(is_int($x34)||is_float($x34)?\'number\':(is_bool($x34)?\'boolean\':(is_string($x34)?\'string\':(is_object($x34)&&isset($x34->call)?\'function\':\'object\')))));$x33=(((gettype($x34)===gettype(\'string\')&&$x34===\'string\'))||(((is_float($x34)||is_int($x34))&&(is_float(\'string\')||is_int(\'string\')))&&$x34==\'string\'));if(JS::toBoolean($x33,$global)){if(JS::toBoolean(strlen($_v)>70,$global)){$x35=clone JS::$objectTemplate;$x35->properties[\'multiline\']=true;$x35->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x35->properties[\'dump\']=str_replace("\\\\/","/",json_encode(substr($_v,0,70)))."...";$x35->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x35;}else{$x36=clone JS::$objectTemplate;$x36->properties[\'multiline\']=false;$x36->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x36->properties[\'dump\']=str_replace("\\\\/","/",json_encode($_v));$x36->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x36;}}else{if(JS::toBoolean(isset($_v->call),$global)){$x37=clone JS::$objectTemplate;$x37->properties[\'multiline\']=false;$x37->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x40=JS::toPrimitive(\'[function\',$global);$x41=JS::toPrimitive((isset($_v->name)?" ".$_v->name:""),$global);$x38=JS::toPrimitive((is_string($x40)||is_string($x41)?JS::toString($x40,$global).JS::toString($x41,$global):JS::toNumber($x40,$global)+JS::toNumber($x41,$global)),$global);$x39=JS::toPrimitive(\']\',$global);$x37->properties[\'dump\']=(is_string($x38)||is_string($x39)?JS::toString($x38,$global).JS::toString($x39,$global):JS::toNumber($x38,$global)+JS::toNumber($x39,$global));$x37->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x37;}else{$scope->properties[\'multiline\']=JS::$undefined;$_multiline=&$scope->properties[\'multiline\'];$Umultiline=FALSE;$_multiline=false;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::$undefined;$scope->properties[\'isArray\']=JS::$undefined;$_isArray=&$scope->properties[\'isArray\'];$UisArray=FALSE;$_isArray=isset($_v->class)&&$_v->class==="Array";$values=array();if(JS::toBoolean($_isArray,$global)){for($x42=0;;++$x42){if($x42===0){$x43=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x43;}if($x42!==0){$x44=++$_i;}unset($x48,$W48,$S48,$U48);$x49=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_v,(string)\'length\',30,22,\'<image>/14_dump.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;$x45=JS::toPrimitive($_i,$global);$x46=JS::toPrimitive($x48,$global);$x47=(is_string($x45)&&is_string($x46)?strcmp($x45,$x46)<0:(!is_nan($x50=JS::toNumber($x45,$global))&&!is_nan($x51=JS::toNumber($x46,$global))&&$x50<$x51));if(!JS::toBoolean($x47,$global)){break;}unset($x52,$W52,$S52,$U52);$x53=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_v,(string)$_i,31,23,\'<image>/14_dump.js\');$x52=&$x53[0];list(,$W52,$S52,$U52)=$x53;$x54=JS::toPrimitive($_indent,$global);$x55=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x58=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',31,21,\'<image>/14_dump.js\');$_TypeError=&$x58[0];list(,$WTypeError,$STypeError,$UTypeError)=$x58;$x59=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',31,21);$x60=$x59($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'){$x60->properties[\'file\']=\'<image>/14_dump.js\';$x60->properties[\'line\']=31;$x60->properties[\'column\']=21;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,31,21,\'<image>/14_dump.js\');}$x56=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',31,21);$x57=$x56($global,$global,$_dumper,array($x52,(is_string($x54)||is_string($x55)?JS::toString($x54,$global).JS::toString($x55,$global):JS::toNumber($x54,$global)+JS::toNumber($x55,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x57;unset($x61,$W61,$S61,$U61);$x62=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'multiline\',31,43,\'<image>/14_dump.js\');$x61=&$x62[0];list(,$W61,$S61,$U61)=$x62;if(JS::toBoolean($x61,$global)){$x63=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x63;}unset($x64,$W64,$S64,$U64);$x65=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'dump\',35,11,\'<image>/14_dump.js\');$x64=&$x65[0];list(,$W64,$S64,$U64)=$x65;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x64;$values[]=$_d;}}else{if($_v!==JS::$undefined&&$_v!==NULL){for($x67=array(),$x66=JS::toObject($_v,$global);$x66;$x66=$x66->prototype){foreach($x66->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)||isset($x67[$property])){continue;}$x67[$property]=TRUE;$_k=$property;unset($x68,$W68,$S68,$U68);$x69=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_v,(string)$_k,42,23,\'<image>/14_dump.js\');$x68=&$x69[0];list(,$W68,$S68,$U68)=$x69;$x70=JS::toPrimitive($_indent,$global);$x71=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x74=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',42,21,\'<image>/14_dump.js\');$_TypeError=&$x74[0];list(,$WTypeError,$STypeError,$UTypeError)=$x74;$x75=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',42,21);$x76=$x75($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x76->class)&&$x76->class===\'Error\'){$x76->properties[\'file\']=\'<image>/14_dump.js\';$x76->properties[\'line\']=42;$x76->properties[\'column\']=21;$x76->attributes[\'file\']=$x76->attributes[\'line\']=$x76->attributes[\'column\']=0;}throw new JSException($x76,42,21,\'<image>/14_dump.js\');}$x72=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',42,21);$x73=$x72($global,$global,$_dumper,array($x68,(is_string($x70)||is_string($x71)?JS::toString($x70,$global).JS::toString($x71,$global):JS::toNumber($x70,$global)+JS::toNumber($x71,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x73;unset($x77,$W77,$S77,$U77);$x78=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'multiline\',42,43,\'<image>/14_dump.js\');$x77=&$x78[0];list(,$W77,$S77,$U77)=$x78;if(JS::toBoolean($x77,$global)){$x79=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x79;}unset($x80,$W80,$S80,$U80);$x81=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'dump\',46,11,\'<image>/14_dump.js\');$x80=&$x81[0];list(,$W80,$S80,$U80)=$x81;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x80;$values[]=(preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)?$_k:json_encode($_k)).": ".$_d;}}}}if(JS::toBoolean(empty($values),$global)){$x82=clone JS::$objectTemplate;$x82->properties[\'multiline\']=false;$x82->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x83=\'[]\';}else{$x83=\'{}\';}$x82->properties[\'dump\']=$x83;$x82->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x82;}if(JS::toBoolean(count($values)>5,$global)){$x84=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x84;}$x85=clone JS::$objectTemplate;$x85->properties[\'multiline\']=$_multiline;$x85->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x90=\'[ \';}else{$x90=\'{ \';}$x88=JS::toPrimitive($x90,$global);$x89=JS::toPrimitive(implode(!$_multiline?", ":",\\n".$_indent."  ",$values),$global);if(JS::toBoolean($_isArray,$global)){$x91=\' ]\';}else{$x91=\' }\';}$x86=JS::toPrimitive((is_string($x88)||is_string($x89)?JS::toString($x88,$global).JS::toString($x89,$global):JS::toNumber($x88,$global)+JS::toNumber($x89,$global)),$global);$x87=JS::toPrimitive($x91,$global);$x85->properties[\'dump\']=(is_string($x86)||is_string($x87)?JS::toString($x86,$global).JS::toString($x87,$global):JS::toNumber($x86,$global)+JS::toNumber($x87,$global));$x85->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x85;}}}}}return JS::$undefined;}', "\n";
function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x92 = clone JS::$functionTemplate; $x92->call = '_c83e9377c6c0d7a8f5fa3f20ba99dd2e_2'; $x92->parameters = array (
  0 => 'v',
  1 => 'indent',
); $x92->name = 'dumper'; $x92->scope = $scope; $x92->properties['prototype'] = clone JS::$objectTemplate; $x92->attributes['prototype'] = JS::WRITABLE; $x92->properties['prototype']->properties['constructor'] = $x92; $x92->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x92->properties['length'] = 2; $x92->attributes['length'] = 0;
$scope->properties['dumper'] = JS::$undefined; $_dumper =& $scope->properties['dumper'];
$Udumper = FALSE;
$_dumper = $x92;
for ($x93 = 0;; ++$x93) {
if ($x93 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x94 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'arguments', 67, 22, '<image>/14_dump.js');
$_arguments =& $x94[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x94;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x95 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'ReferenceError', 67, 22, '<image>/14_dump.js');
$_ReferenceError =& $x95[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x95;
$x96 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 67, 22);
$x97 = $x96($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x97->class) && $x97->class === 'Error') {$x97->properties['file'] = '<image>/14_dump.js';$x97->properties['line'] = 67;$x97->properties['column'] = 22;$x97->attributes['file'] = $x97->attributes['line'] = $x97->attributes['column'] = 0; }
throw new JSException($x97, 67, 22, '<image>/14_dump.js');
}
unset($x98, $W98, $S98, $U98);
$x99 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_arguments, (string) 'length', 67, 31, '<image>/14_dump.js');
$x98 =& $x99[0]; list(,$W98,$S98,$U98) = $x99;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x98;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x93 !== 0) {
$x100 = JS::toPrimitive($_i, $global);
$x101 = JS::toPrimitive(1, $global);
$x102 = (is_string($x100) || is_string($x101) ? JS::toString($x100, $global) . JS::toString($x101, $global) : JS::toNumber($x100, $global) + JS::toNumber($x101, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x102;
}
$x103 = JS::toPrimitive($_i, $global);
$x104 = JS::toPrimitive($_l, $global);
$x105 = (is_string($x103) && is_string($x104) ? strcmp($x103, $x104) < 0 : (!is_nan($x106 = JS::toNumber($x103, $global)) && !is_nan($x107 = JS::toNumber($x104, $global)) && $x106 < $x107));
if (!JS::toBoolean($x105, $global)) { break; }

unset($x108, $W108, $S108, $U108);
$x109 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_arguments, (string) $_i, 68, 25, '<image>/14_dump.js');
$x108 =& $x109[0]; list(,$W108,$S108,$U108) = $x109;
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x112 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', 68, 15, '<image>/14_dump.js');
$_TypeError =& $x112[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x112;
$x113 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 68, 15);
$x114 = $x113($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x114->class) && $x114->class === 'Error') {$x114->properties['file'] = '<image>/14_dump.js';$x114->properties['line'] = 68;$x114->properties['column'] = 15;$x114->attributes['file'] = $x114->attributes['line'] = $x114->attributes['column'] = 0; }
throw new JSException($x114, 68, 15, '<image>/14_dump.js');
}
$x110 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 68, 15);
$x111 = $x110($global, $global, $_dumper, array($x108), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x115, $W115, $S115, $U115);
$x116 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $x111, (string) 'dump', 68, 29, '<image>/14_dump.js');
$x115 =& $x116[0]; list(,$W115,$S115,$U115) = $x116;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x115;
echo$_arg. "\n";;
};
;
return JS::$undefined;
}
echo 'function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'dump\']=$fn;$_dump=&$scope->properties[\'dump\'];$global->scope[++$global->scope_sp]=$scope;$x92=clone JS::$functionTemplate;$x92->call=\'_c83e9377c6c0d7a8f5fa3f20ba99dd2e_2\';$x92->parameters=array(0=>\'v\',1=>\'indent\',);$x92->name=\'dumper\';$x92->scope=$scope;$x92->properties[\'prototype\']=clone JS::$objectTemplate;$x92->attributes[\'prototype\']=JS::WRITABLE;$x92->properties[\'prototype\']->properties[\'constructor\']=$x92;$x92->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x92->properties[\'length\']=2;$x92->attributes[\'length\']=0;$scope->properties[\'dumper\']=JS::$undefined;$_dumper=&$scope->properties[\'dumper\'];$Udumper=FALSE;$_dumper=$x92;for($x93=0;;++$x93){if($x93===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x94=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'arguments\',67,22,\'<image>/14_dump.js\');$_arguments=&$x94[0];list(,$Warguments,$Sarguments,$Uarguments)=$x94;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x95=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'ReferenceError\',67,22,\'<image>/14_dump.js\');$_ReferenceError=&$x95[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x95;$x96=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',67,22);$x97=$x96($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x97->class)&&$x97->class===\'Error\'){$x97->properties[\'file\']=\'<image>/14_dump.js\';$x97->properties[\'line\']=67;$x97->properties[\'column\']=22;$x97->attributes[\'file\']=$x97->attributes[\'line\']=$x97->attributes[\'column\']=0;}throw new JSException($x97,67,22,\'<image>/14_dump.js\');}unset($x98,$W98,$S98,$U98);$x99=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_arguments,(string)\'length\',67,31,\'<image>/14_dump.js\');$x98=&$x99[0];list(,$W98,$S98,$U98)=$x99;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x98;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x93!==0){$x100=JS::toPrimitive($_i,$global);$x101=JS::toPrimitive(1,$global);$x102=(is_string($x100)||is_string($x101)?JS::toString($x100,$global).JS::toString($x101,$global):JS::toNumber($x100,$global)+JS::toNumber($x101,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x102;}$x103=JS::toPrimitive($_i,$global);$x104=JS::toPrimitive($_l,$global);$x105=(is_string($x103)&&is_string($x104)?strcmp($x103,$x104)<0:(!is_nan($x106=JS::toNumber($x103,$global))&&!is_nan($x107=JS::toNumber($x104,$global))&&$x106<$x107));if(!JS::toBoolean($x105,$global)){break;}unset($x108,$W108,$S108,$U108);$x109=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_arguments,(string)$_i,68,25,\'<image>/14_dump.js\');$x108=&$x109[0];list(,$W108,$S108,$U108)=$x109;if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x112=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',68,15,\'<image>/14_dump.js\');$_TypeError=&$x112[0];list(,$WTypeError,$STypeError,$UTypeError)=$x112;$x113=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',68,15);$x114=$x113($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x114->class)&&$x114->class===\'Error\'){$x114->properties[\'file\']=\'<image>/14_dump.js\';$x114->properties[\'line\']=68;$x114->properties[\'column\']=15;$x114->attributes[\'file\']=$x114->attributes[\'line\']=$x114->attributes[\'column\']=0;}throw new JSException($x114,68,15,\'<image>/14_dump.js\');}$x110=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',68,15);$x111=$x110($global,$global,$_dumper,array($x108),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x115,$W115,$S115,$U115);$x116=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$x111,(string)\'dump\',68,29,\'<image>/14_dump.js\');$x115=&$x116[0];list(,$W115,$S115,$U115)=$x116;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x115;echo$_arg."\\n";}return JS::$undefined;}', "\n";
function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/14_dump.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/14_dump.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x117 = clone JS::$functionTemplate; $x117->call = '_c83e9377c6c0d7a8f5fa3f20ba99dd2e_1'; $x117->parameters = array (
); $x117->name = 'dump'; $x117->scope = $scope; $x117->properties['prototype'] = clone JS::$objectTemplate; $x117->attributes['prototype'] = JS::WRITABLE; $x117->properties['prototype']->properties['constructor'] = $x117; $x117->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x117->properties['length'] = 0; $x117->attributes['length'] = 0;
$scope->properties['dump'] = JS::$undefined; $_dump =& $scope->properties['dump'];
$Udump = FALSE;
$_dump = $x117;
$_dump;
;
return JS::$undefined;
}
