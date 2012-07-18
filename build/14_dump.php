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
for ($x66 = JS::toObject($_v, $global); $x66; $x66 = $x66->prototype) {
foreach ($x66->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE)) { continue; }
$_k = $property;

unset($x67, $W67, $S67, $U67);
$x68 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_v, (string) $_k, 42, 23, '<image>/14_dump.js');
$x67 =& $x68[0]; list(,$W67,$S67,$U67) = $x68;
$x69 = JS::toPrimitive($_indent, $global);
$x70 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x73 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', 42, 21, '<image>/14_dump.js');
$_TypeError =& $x73[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x73;
$x74 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 42, 21);
$x75 = $x74($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x75->class) && $x75->class === 'Error') {$x75->properties['file'] = '<image>/14_dump.js';$x75->properties['line'] = 42;$x75->properties['column'] = 21;$x75->attributes['file'] = $x75->attributes['line'] = $x75->attributes['column'] = 0; }
throw new JSException($x75, 42, 21, '<image>/14_dump.js');
}
$x71 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 42, 21);
$x72 = $x71($global, $global, $_dumper, array($x67, (is_string($x69) || is_string($x70) ? JS::toString($x69, $global) . JS::toString($x70, $global) : JS::toNumber($x69, $global) + JS::toNumber($x70, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x72;
unset($x76, $W76, $S76, $U76);
$x77 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_d, (string) 'multiline', 42, 43, '<image>/14_dump.js');
$x76 =& $x77[0]; list(,$W76,$S76,$U76) = $x77;
if (JS::toBoolean($x76, $global)) {
$x78 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x78;;
};
unset($x79, $W79, $S79, $U79);
$x80 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_d, (string) 'dump', 46, 11, '<image>/14_dump.js');
$x79 =& $x80[0]; list(,$W79,$S79,$U79) = $x80;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x79;
$values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k) ?$_k: json_encode($_k)) . ": " .$_d;;
}
}
};
};
if (JS::toBoolean(empty($values), $global)) {
$x81 = clone JS::$objectTemplate;
$x81->properties['multiline'] = false;
$x81->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x82 = '[]';
} else {
$x82 = '{}';
}
$x81->properties['dump'] = $x82;
$x81->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x81;;
};
if (JS::toBoolean(count($values) > 5, $global)) {
$x83 = true;
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = $x83;;
};
$x84 = clone JS::$objectTemplate;
$x84->properties['multiline'] = $_multiline;
$x84->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x89 = '[ ';
} else {
$x89 = '{ ';
}
$x87 = JS::toPrimitive($x89, $global);
$x88 = JS::toPrimitive(implode(!$_multiline? ", " : ",\n" .$_indent. "  ", $values), $global);
if (JS::toBoolean($_isArray, $global)) {
$x90 = ' ]';
} else {
$x90 = ' }';
}
$x85 = JS::toPrimitive((is_string($x87) || is_string($x88) ? JS::toString($x87, $global) . JS::toString($x88, $global) : JS::toNumber($x87, $global) + JS::toNumber($x88, $global)), $global);
$x86 = JS::toPrimitive($x90, $global);
$x84->properties['dump'] = (is_string($x85) || is_string($x86) ? JS::toString($x85, $global) . JS::toString($x86, $global) : JS::toNumber($x85, $global) + JS::toNumber($x86, $global));
$x84->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x84;;
};
};
};
};
};
;
return JS::$undefined;
}
echo 'function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$scope->properties[\'indent\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_indent=&$scope->properties[\'indent\'];$Uindent=FALSE;$scope->properties[\'dumper\']=$fn;$_dumper=&$scope->properties[\'dumper\'];$global->scope[++$global->scope_sp]=$scope;$x4=$_indent;if(!JS::toBoolean($x4,$global)){$x4=\'\';}if($Uindent){$global->properties[\'indent\']=$_indent;$_indent=&$global->properties[\'indent\'];}$_indent=$x4;$x5=(((gettype($_v)===gettype(JS::$undefined)&&$_v===JS::$undefined))||(((is_float($_v)||is_int($_v))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_v==JS::$undefined));if(JS::toBoolean($x5,$global)){$x6=clone JS::$objectTemplate;$x6->properties[\'multiline\']=false;$x6->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'dump\']=\'undefined\';$x6->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x6;}else{$x8=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x7=$x8;if(!JS::toBoolean($x7,$global)){$x10=$_v;$x10=($x10===JS::$undefined?\'undefined\':(is_int($x10)||is_float($x10)?\'number\':(is_bool($x10)?\'boolean\':(is_string($x10)?\'string\':(is_object($x10)&&isset($x10->call)?\'function\':\'object\')))));$x9=(((gettype($x10)===gettype(\'boolean\')&&$x10===\'boolean\'))||(((is_float($x10)||is_int($x10))&&(is_float(\'boolean\')||is_int(\'boolean\')))&&$x10==\'boolean\'));$x7=$x9;}if(JS::toBoolean($x7,$global)){$x11=clone JS::$objectTemplate;$x11->properties[\'multiline\']=false;$x11->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x11->properties[\'dump\']=json_encode($_v);$x11->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x11;}else{$x13=$_v;$x13=($x13===JS::$undefined?\'undefined\':(is_int($x13)||is_float($x13)?\'number\':(is_bool($x13)?\'boolean\':(is_string($x13)?\'string\':(is_object($x13)&&isset($x13->call)?\'function\':\'object\')))));$x12=(((gettype($x13)===gettype(\'number\')&&$x13===\'number\'))||(((is_float($x13)||is_int($x13))&&(is_float(\'number\')||is_int(\'number\')))&&$x13==\'number\'));if(JS::toBoolean($x12,$global)){$x14=clone JS::$objectTemplate;$x14->properties[\'multiline\']=false;$x14->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x18=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x18[0];list(,$WTypeError,$STypeError,$UTypeError)=$x18;$x19=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x20=$x19($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x20->class)&&$x20->class===\'Error\'){$x20->properties[\'file\']=\'<image>/14_dump.js\';$x20->properties[\'line\']=11;$x20->properties[\'column\']=47;$x20->attributes[\'file\']=$x20->attributes[\'line\']=$x20->attributes[\'column\']=0;}throw new JSException($x20,11,47,\'<image>/14_dump.js\');}$x15=JS::toObject($_v,$global);unset($x21,$W21,$S21,$U21);$x27=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$x15,(string)\'toString\',11,47,\'<image>/14_dump.js\');$x21=&$x27[0];list(,$W21,$S21,$U21)=$x27;if(!(is_object($x21)&&isset($x21->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'){$x32->properties[\'file\']=\'<image>/14_dump.js\';$x32->properties[\'line\']=11;$x32->properties[\'column\']=47;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,11,47,\'<image>/14_dump.js\');}$x28=$x21->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x29=$x28($global,$x15,$x21,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14->properties[\'dump\']=$x29;$x14->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x14;}else{$x34=$_v;$x34=($x34===JS::$undefined?\'undefined\':(is_int($x34)||is_float($x34)?\'number\':(is_bool($x34)?\'boolean\':(is_string($x34)?\'string\':(is_object($x34)&&isset($x34->call)?\'function\':\'object\')))));$x33=(((gettype($x34)===gettype(\'string\')&&$x34===\'string\'))||(((is_float($x34)||is_int($x34))&&(is_float(\'string\')||is_int(\'string\')))&&$x34==\'string\'));if(JS::toBoolean($x33,$global)){if(JS::toBoolean(strlen($_v)>70,$global)){$x35=clone JS::$objectTemplate;$x35->properties[\'multiline\']=true;$x35->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x35->properties[\'dump\']=str_replace("\\\\/","/",json_encode(substr($_v,0,70)))."...";$x35->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x35;}else{$x36=clone JS::$objectTemplate;$x36->properties[\'multiline\']=false;$x36->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x36->properties[\'dump\']=str_replace("\\\\/","/",json_encode($_v));$x36->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x36;}}else{if(JS::toBoolean(isset($_v->call),$global)){$x37=clone JS::$objectTemplate;$x37->properties[\'multiline\']=false;$x37->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x40=JS::toPrimitive(\'[function\',$global);$x41=JS::toPrimitive((isset($_v->name)?" ".$_v->name:""),$global);$x38=JS::toPrimitive((is_string($x40)||is_string($x41)?JS::toString($x40,$global).JS::toString($x41,$global):JS::toNumber($x40,$global)+JS::toNumber($x41,$global)),$global);$x39=JS::toPrimitive(\']\',$global);$x37->properties[\'dump\']=(is_string($x38)||is_string($x39)?JS::toString($x38,$global).JS::toString($x39,$global):JS::toNumber($x38,$global)+JS::toNumber($x39,$global));$x37->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x37;}else{$scope->properties[\'multiline\']=JS::$undefined;$_multiline=&$scope->properties[\'multiline\'];$Umultiline=FALSE;$_multiline=false;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::$undefined;$scope->properties[\'isArray\']=JS::$undefined;$_isArray=&$scope->properties[\'isArray\'];$UisArray=FALSE;$_isArray=isset($_v->class)&&$_v->class==="Array";$values=array();if(JS::toBoolean($_isArray,$global)){for($x42=0;;++$x42){if($x42===0){$x43=0;if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x43;}if($x42!==0){$x44=++$_i;}unset($x48,$W48,$S48,$U48);$x49=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_v,(string)\'length\',30,22,\'<image>/14_dump.js\');$x48=&$x49[0];list(,$W48,$S48,$U48)=$x49;$x45=JS::toPrimitive($_i,$global);$x46=JS::toPrimitive($x48,$global);$x47=(is_string($x45)&&is_string($x46)?strcmp($x45,$x46)<0:(!is_nan($x50=JS::toNumber($x45,$global))&&!is_nan($x51=JS::toNumber($x46,$global))&&$x50<$x51));if(!JS::toBoolean($x47,$global)){break;}unset($x52,$W52,$S52,$U52);$x53=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_v,(string)$_i,31,23,\'<image>/14_dump.js\');$x52=&$x53[0];list(,$W52,$S52,$U52)=$x53;$x54=JS::toPrimitive($_indent,$global);$x55=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x58=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',31,21,\'<image>/14_dump.js\');$_TypeError=&$x58[0];list(,$WTypeError,$STypeError,$UTypeError)=$x58;$x59=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',31,21);$x60=$x59($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x60->class)&&$x60->class===\'Error\'){$x60->properties[\'file\']=\'<image>/14_dump.js\';$x60->properties[\'line\']=31;$x60->properties[\'column\']=21;$x60->attributes[\'file\']=$x60->attributes[\'line\']=$x60->attributes[\'column\']=0;}throw new JSException($x60,31,21,\'<image>/14_dump.js\');}$x56=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',31,21);$x57=$x56($global,$global,$_dumper,array($x52,(is_string($x54)||is_string($x55)?JS::toString($x54,$global).JS::toString($x55,$global):JS::toNumber($x54,$global)+JS::toNumber($x55,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x57;unset($x61,$W61,$S61,$U61);$x62=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'multiline\',31,43,\'<image>/14_dump.js\');$x61=&$x62[0];list(,$W61,$S61,$U61)=$x62;if(JS::toBoolean($x61,$global)){$x63=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x63;}unset($x64,$W64,$S64,$U64);$x65=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'dump\',35,11,\'<image>/14_dump.js\');$x64=&$x65[0];list(,$W64,$S64,$U64)=$x65;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x64;$values[]=$_d;}}else{if($_v!==JS::$undefined&&$_v!==NULL){for($x66=JS::toObject($_v,$global);$x66;$x66=$x66->prototype){foreach($x66->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)){continue;}$_k=$property;unset($x67,$W67,$S67,$U67);$x68=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_v,(string)$_k,42,23,\'<image>/14_dump.js\');$x67=&$x68[0];list(,$W67,$S67,$U67)=$x68;$x69=JS::toPrimitive($_indent,$global);$x70=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x73=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',42,21,\'<image>/14_dump.js\');$_TypeError=&$x73[0];list(,$WTypeError,$STypeError,$UTypeError)=$x73;$x74=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',42,21);$x75=$x74($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x75->class)&&$x75->class===\'Error\'){$x75->properties[\'file\']=\'<image>/14_dump.js\';$x75->properties[\'line\']=42;$x75->properties[\'column\']=21;$x75->attributes[\'file\']=$x75->attributes[\'line\']=$x75->attributes[\'column\']=0;}throw new JSException($x75,42,21,\'<image>/14_dump.js\');}$x71=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',42,21);$x72=$x71($global,$global,$_dumper,array($x67,(is_string($x69)||is_string($x70)?JS::toString($x69,$global).JS::toString($x70,$global):JS::toNumber($x69,$global)+JS::toNumber($x70,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x72;unset($x76,$W76,$S76,$U76);$x77=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'multiline\',42,43,\'<image>/14_dump.js\');$x76=&$x77[0];list(,$W76,$S76,$U76)=$x77;if(JS::toBoolean($x76,$global)){$x78=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x78;}unset($x79,$W79,$S79,$U79);$x80=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_d,(string)\'dump\',46,11,\'<image>/14_dump.js\');$x79=&$x80[0];list(,$W79,$S79,$U79)=$x80;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x79;$values[]=(preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)?$_k:json_encode($_k)).": ".$_d;}}}}if(JS::toBoolean(empty($values),$global)){$x81=clone JS::$objectTemplate;$x81->properties[\'multiline\']=false;$x81->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x82=\'[]\';}else{$x82=\'{}\';}$x81->properties[\'dump\']=$x82;$x81->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x81;}if(JS::toBoolean(count($values)>5,$global)){$x83=true;if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=$x83;}$x84=clone JS::$objectTemplate;$x84->properties[\'multiline\']=$_multiline;$x84->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x89=\'[ \';}else{$x89=\'{ \';}$x87=JS::toPrimitive($x89,$global);$x88=JS::toPrimitive(implode(!$_multiline?", ":",\\n".$_indent."  ",$values),$global);if(JS::toBoolean($_isArray,$global)){$x90=\' ]\';}else{$x90=\' }\';}$x85=JS::toPrimitive((is_string($x87)||is_string($x88)?JS::toString($x87,$global).JS::toString($x88,$global):JS::toNumber($x87,$global)+JS::toNumber($x88,$global)),$global);$x86=JS::toPrimitive($x90,$global);$x84->properties[\'dump\']=(is_string($x85)||is_string($x86)?JS::toString($x85,$global).JS::toString($x86,$global):JS::toNumber($x85,$global)+JS::toNumber($x86,$global));$x84->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x84;}}}}}return JS::$undefined;}', "\n";
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
$x91 = clone JS::$functionTemplate; $x91->call = '_c83e9377c6c0d7a8f5fa3f20ba99dd2e_2'; $x91->parameters = array (
  0 => 'v',
  1 => 'indent',
); $x91->name = 'dumper'; $x91->scope = $scope; $x91->properties['prototype'] = clone JS::$objectTemplate; $x91->attributes['prototype'] = JS::WRITABLE; $x91->properties['prototype']->properties['constructor'] = $x91; $x91->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x91->properties['length'] = 2; $x91->attributes['length'] = 0;
$scope->properties['dumper'] = JS::$undefined; $_dumper =& $scope->properties['dumper'];
$Udumper = FALSE;
$_dumper = $x91;
for ($x92 = 0;; ++$x92) {
if ($x92 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x93 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'arguments', 67, 22, '<image>/14_dump.js');
$_arguments =& $x93[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x93;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x94 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'ReferenceError', 67, 22, '<image>/14_dump.js');
$_ReferenceError =& $x94[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x94;
$x95 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 67, 22);
$x96 = $x95($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x96->class) && $x96->class === 'Error') {$x96->properties['file'] = '<image>/14_dump.js';$x96->properties['line'] = 67;$x96->properties['column'] = 22;$x96->attributes['file'] = $x96->attributes['line'] = $x96->attributes['column'] = 0; }
throw new JSException($x96, 67, 22, '<image>/14_dump.js');
}
unset($x97, $W97, $S97, $U97);
$x98 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_arguments, (string) 'length', 67, 31, '<image>/14_dump.js');
$x97 =& $x98[0]; list(,$W97,$S97,$U97) = $x98;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x97;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x92 !== 0) {
$x99 = JS::toPrimitive($_i, $global);
$x100 = JS::toPrimitive(1, $global);
$x101 = (is_string($x99) || is_string($x100) ? JS::toString($x99, $global) . JS::toString($x100, $global) : JS::toNumber($x99, $global) + JS::toNumber($x100, $global));
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = $x101;
}
$x102 = JS::toPrimitive($_i, $global);
$x103 = JS::toPrimitive($_l, $global);
$x104 = (is_string($x102) && is_string($x103) ? strcmp($x102, $x103) < 0 : (!is_nan($x105 = JS::toNumber($x102, $global)) && !is_nan($x106 = JS::toNumber($x103, $global)) && $x105 < $x106));
if (!JS::toBoolean($x104, $global)) { break; }

unset($x107, $W107, $S107, $U107);
$x108 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $_arguments, (string) $_i, 68, 25, '<image>/14_dump.js');
$x107 =& $x108[0]; list(,$W107,$S107,$U107) = $x108;
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x111 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global, $scope, $scope, (string) 'TypeError', 68, 15, '<image>/14_dump.js');
$_TypeError =& $x111[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x111;
$x112 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 68, 15);
$x113 = $x112($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x113->class) && $x113->class === 'Error') {$x113->properties['file'] = '<image>/14_dump.js';$x113->properties['line'] = 68;$x113->properties['column'] = 15;$x113->attributes['file'] = $x113->attributes['line'] = $x113->attributes['column'] = 0; }
throw new JSException($x113, 68, 15, '<image>/14_dump.js');
}
$x109 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 68, 15);
$x110 = $x109($global, $global, $_dumper, array($x107), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x114, $W114, $S114, $U114);
$x115 = _c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global, $scope, $x110, (string) 'dump', 68, 29, '<image>/14_dump.js');
$x114 =& $x115[0]; list(,$W114,$S114,$U114) = $x115;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x114;
echo$_arg. "\n";;
};
;
return JS::$undefined;
}
echo 'function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'dump\']=$fn;$_dump=&$scope->properties[\'dump\'];$global->scope[++$global->scope_sp]=$scope;$x91=clone JS::$functionTemplate;$x91->call=\'_c83e9377c6c0d7a8f5fa3f20ba99dd2e_2\';$x91->parameters=array(0=>\'v\',1=>\'indent\',);$x91->name=\'dumper\';$x91->scope=$scope;$x91->properties[\'prototype\']=clone JS::$objectTemplate;$x91->attributes[\'prototype\']=JS::WRITABLE;$x91->properties[\'prototype\']->properties[\'constructor\']=$x91;$x91->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x91->properties[\'length\']=2;$x91->attributes[\'length\']=0;$scope->properties[\'dumper\']=JS::$undefined;$_dumper=&$scope->properties[\'dumper\'];$Udumper=FALSE;$_dumper=$x91;for($x92=0;;++$x92){if($x92===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x93=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'arguments\',67,22,\'<image>/14_dump.js\');$_arguments=&$x93[0];list(,$Warguments,$Sarguments,$Uarguments)=$x93;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x94=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'ReferenceError\',67,22,\'<image>/14_dump.js\');$_ReferenceError=&$x94[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x94;$x95=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',67,22);$x96=$x95($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x96->class)&&$x96->class===\'Error\'){$x96->properties[\'file\']=\'<image>/14_dump.js\';$x96->properties[\'line\']=67;$x96->properties[\'column\']=22;$x96->attributes[\'file\']=$x96->attributes[\'line\']=$x96->attributes[\'column\']=0;}throw new JSException($x96,67,22,\'<image>/14_dump.js\');}unset($x97,$W97,$S97,$U97);$x98=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_arguments,(string)\'length\',67,31,\'<image>/14_dump.js\');$x97=&$x98[0];list(,$W97,$S97,$U97)=$x98;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x97;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x92!==0){$x99=JS::toPrimitive($_i,$global);$x100=JS::toPrimitive(1,$global);$x101=(is_string($x99)||is_string($x100)?JS::toString($x99,$global).JS::toString($x100,$global):JS::toNumber($x99,$global)+JS::toNumber($x100,$global));if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=$x101;}$x102=JS::toPrimitive($_i,$global);$x103=JS::toPrimitive($_l,$global);$x104=(is_string($x102)&&is_string($x103)?strcmp($x102,$x103)<0:(!is_nan($x105=JS::toNumber($x102,$global))&&!is_nan($x106=JS::toNumber($x103,$global))&&$x105<$x106));if(!JS::toBoolean($x104,$global)){break;}unset($x107,$W107,$S107,$U107);$x108=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$_arguments,(string)$_i,68,25,\'<image>/14_dump.js\');$x107=&$x108[0];list(,$W107,$S107,$U107)=$x108;if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x111=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_3($global,$scope,$scope,(string)\'TypeError\',68,15,\'<image>/14_dump.js\');$_TypeError=&$x111[0];list(,$WTypeError,$STypeError,$UTypeError)=$x111;$x112=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',68,15);$x113=$x112($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x113->class)&&$x113->class===\'Error\'){$x113->properties[\'file\']=\'<image>/14_dump.js\';$x113->properties[\'line\']=68;$x113->properties[\'column\']=15;$x113->attributes[\'file\']=$x113->attributes[\'line\']=$x113->attributes[\'column\']=0;}throw new JSException($x113,68,15,\'<image>/14_dump.js\');}$x109=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',68,15);$x110=$x109($global,$global,$_dumper,array($x107),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x114,$W114,$S114,$U114);$x115=_c83e9377c6c0d7a8f5fa3f20ba99dd2e_4($global,$scope,$x110,(string)\'dump\',68,29,\'<image>/14_dump.js\');$x114=&$x115[0];list(,$W114,$S114,$U114)=$x115;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x114;echo$_arg."\\n";}return JS::$undefined;}', "\n";
function _c83e9377c6c0d7a8f5fa3f20ba99dd2e_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/14_dump.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/14_dump.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x116 = clone JS::$functionTemplate; $x116->call = '_c83e9377c6c0d7a8f5fa3f20ba99dd2e_1'; $x116->parameters = array (
); $x116->name = 'dump'; $x116->scope = $scope; $x116->properties['prototype'] = clone JS::$objectTemplate; $x116->attributes['prototype'] = JS::WRITABLE; $x116->properties['prototype']->properties['constructor'] = $x116; $x116->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x116->properties['length'] = 0; $x116->attributes['length'] = 0;
$scope->properties['dump'] = JS::$undefined; $_dump =& $scope->properties['dump'];
$Udump = FALSE;
$_dump = $x116;
$_dump;
;
return JS::$undefined;
}
