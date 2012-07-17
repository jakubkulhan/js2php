function _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $base, $id, $line, $column, $file) {
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
echo 'function _61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$base,$id,$line,$column,$file){$WTypeError=$STypeError=$UTypeError=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->up);$lookup=$lookup->up);if(array_key_exists($id,$lookup->properties)){$_TypeError=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x16=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x17=$x16($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$_TypeError=$x17;}else{$_TypeError=JS::$undefined;$UTypeError=TRUE;}return array(&$_TypeError,$WTypeError,$STypeError,$UTypeError);}', "\n";
function _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $base, $id, $line, $column, $file) {
if ($base === JS::$undefined || $base === NULL) {
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x22 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'TypeError', $line, $column, $file);
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
echo 'function _61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$base,$id,$line,$column,$file){if($base===JS::$undefined||$base===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x22=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'TypeError\',$line,$column,$file);$_TypeError=&$x22[0];list(,$WTypeError,$STypeError,$UTypeError)=$x22;$x23=$_TypeError->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x24=$x23($global,$global,$_TypeError,array(\'Cannot lookup property of undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x24->class)&&$x24->class===\'Error\'){$x24->properties[\'file\']=$file;$x24->properties[\'line\']=$line;$x24->properties[\'column\']=$column;$x24->attributes[\'file\']=$x24->attributes[\'line\']=$x24->attributes[\'column\']=0;}throw new JSException($x24,$line,$column,$file);}$W21=$S21=$U21=NULL;$lookup=JS::toObject($base,$global);for(;$lookup&&!(array_key_exists($id,$lookup->properties)||isset($lookup->attributes[$id]))&&isset($lookup->prototype);$lookup=$lookup->prototype);if(array_key_exists($id,$lookup->properties)){$x21=&$lookup->properties[$id];}else if(isset($lookup->attributes[$id])&&$lookup->attributes[$id]&JS::HAS_GETTER){$x25=$lookup->getters[$id]->call;$global->trace[++$global->trace_sp]=array($file,$line,$column);$x26=$x25($global,$lookup,$lookup->getters[$id],array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x21=$x26;}else{$x21=JS::$undefined;$U21=TRUE;}return array(&$x21,$W21,$S21,$U21);}', "\n";
function _61326d45b87acb9e959cc1abde5a78d0_2($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x18 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'TypeError', 11, 47, '<image>/14_dump.js');
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
$x27 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $x15, (string) 'toString', 11, 47, '<image>/14_dump.js');
$x21 =& $x27[0]; list(,$W21,$S21,$U21) = $x27;
if (!(is_object($x21) && isset($x21->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x30 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'TypeError', 11, 47, '<image>/14_dump.js');
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
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = 0;
}
if ($x42 !== 0) {
$x43 = ++$_i;
}
unset($x47, $W47, $S47, $U47);
$x48 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_v, (string) 'length', 30, 22, '<image>/14_dump.js');
$x47 =& $x48[0]; list(,$W47,$S47,$U47) = $x48;
$x44 = JS::toPrimitive($_i, $global);
$x45 = JS::toPrimitive($x47, $global);
$x46 = (is_string($x44) && is_string($x45) ? strcmp($x44, $x45) < 0 : (!is_nan($x49 = JS::toNumber($x44, $global)) && !is_nan($x50 = JS::toNumber($x45, $global)) && $x49 < $x50));
if (!JS::toBoolean($x46, $global)) { break; }

unset($x51, $W51, $S51, $U51);
$x52 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_v, (string) $_i, 31, 23, '<image>/14_dump.js');
$x51 =& $x52[0]; list(,$W51,$S51,$U51) = $x52;
$x53 = JS::toPrimitive($_indent, $global);
$x54 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x57 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'TypeError', 31, 21, '<image>/14_dump.js');
$_TypeError =& $x57[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x57;
$x58 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 31, 21);
$x59 = $x58($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x59->class) && $x59->class === 'Error') {$x59->properties['file'] = '<image>/14_dump.js';$x59->properties['line'] = 31;$x59->properties['column'] = 21;$x59->attributes['file'] = $x59->attributes['line'] = $x59->attributes['column'] = 0; }
throw new JSException($x59, 31, 21, '<image>/14_dump.js');
}
$x55 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 31, 21);
$x56 = $x55($global, $global, $_dumper, array($x51, (is_string($x53) || is_string($x54) ? JS::toString($x53, $global) . JS::toString($x54, $global) : JS::toNumber($x53, $global) + JS::toNumber($x54, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x56;
unset($x60, $W60, $S60, $U60);
$x61 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_d, (string) 'multiline', 31, 43, '<image>/14_dump.js');
$x60 =& $x61[0]; list(,$W60,$S60,$U60) = $x61;
if (JS::toBoolean($x60, $global)) {
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = true;;
};
unset($x62, $W62, $S62, $U62);
$x63 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_d, (string) 'dump', 35, 11, '<image>/14_dump.js');
$x62 =& $x63[0]; list(,$W62,$S62,$U62) = $x63;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x62;
$values[] =$_d;;
};
}
else {


if ($_v !== JS::$undefined && $_v !== NULL) {
for ($x64 = JS::toObject($_v, $global); $x64; $x64 = $x64->prototype) {
foreach ($x64->attributes as $property => $attributes) {
if (!($attributes & JS::ENUMERABLE)) { continue; }
$_k = $property;

unset($x65, $W65, $S65, $U65);
$x66 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_v, (string) $_k, 42, 23, '<image>/14_dump.js');
$x65 =& $x66[0]; list(,$W65,$S65,$U65) = $x66;
$x67 = JS::toPrimitive($_indent, $global);
$x68 = JS::toPrimitive('  ', $global);
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x71 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'TypeError', 42, 21, '<image>/14_dump.js');
$_TypeError =& $x71[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x71;
$x72 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 42, 21);
$x73 = $x72($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x73->class) && $x73->class === 'Error') {$x73->properties['file'] = '<image>/14_dump.js';$x73->properties['line'] = 42;$x73->properties['column'] = 21;$x73->attributes['file'] = $x73->attributes['line'] = $x73->attributes['column'] = 0; }
throw new JSException($x73, 42, 21, '<image>/14_dump.js');
}
$x69 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 42, 21);
$x70 = $x69($global, $global, $_dumper, array($x65, (is_string($x67) || is_string($x68) ? JS::toString($x67, $global) . JS::toString($x68, $global) : JS::toNumber($x67, $global) + JS::toNumber($x68, $global))), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x70;
unset($x74, $W74, $S74, $U74);
$x75 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_d, (string) 'multiline', 42, 43, '<image>/14_dump.js');
$x74 =& $x75[0]; list(,$W74,$S74,$U74) = $x75;
if (JS::toBoolean($x74, $global)) {
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = true;;
};
unset($x76, $W76, $S76, $U76);
$x77 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_d, (string) 'dump', 46, 11, '<image>/14_dump.js');
$x76 =& $x77[0]; list(,$W76,$S76,$U76) = $x77;
if ($Ud) {$global->properties['d'] = $_d; $_d =& $global->properties['d']; }
$_d = $x76;
$values[] = (preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k) ?$_k: json_encode($_k)) . ": " .$_d;;
}
}
};
};
if (JS::toBoolean(empty($values), $global)) {
$x78 = clone JS::$objectTemplate;
$x78->properties['multiline'] = false;
$x78->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x79 = '[]';
} else {
$x79 = '{}';
}
$x78->properties['dump'] = $x79;
$x78->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x78;;
};
if (JS::toBoolean(count($values) > 5, $global)) {
if ($Umultiline) {$global->properties['multiline'] = $_multiline; $_multiline =& $global->properties['multiline']; }
$_multiline = true;;
};
$x80 = clone JS::$objectTemplate;
$x80->properties['multiline'] = $_multiline;
$x80->attributes['multiline'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
if (JS::toBoolean($_isArray, $global)) {
$x85 = '[ ';
} else {
$x85 = '{ ';
}
$x83 = JS::toPrimitive($x85, $global);
$x84 = JS::toPrimitive(implode(!$_multiline? ", " : ",\n" .$_indent. "  ", $values), $global);
if (JS::toBoolean($_isArray, $global)) {
$x86 = ' ]';
} else {
$x86 = ' }';
}
$x81 = JS::toPrimitive((is_string($x83) || is_string($x84) ? JS::toString($x83, $global) . JS::toString($x84, $global) : JS::toNumber($x83, $global) + JS::toNumber($x84, $global)), $global);
$x82 = JS::toPrimitive($x86, $global);
$x80->properties['dump'] = (is_string($x81) || is_string($x82) ? JS::toString($x81, $global) . JS::toString($x82, $global) : JS::toNumber($x81, $global) + JS::toNumber($x82, $global));
$x80->attributes['dump'] = JS::WRITABLE | JS::ENUMERABLE | JS::CONFIGURABLE;
return $x80;;
};
};
};
};
};
;
return JS::$undefined;
}
echo 'function _61326d45b87acb9e959cc1abde5a78d0_2($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x3=&$scope->properties[\'arguments\'];$x3->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x3->properties[$i]=$args[$i];$x3->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'v\']=array_key_exists(0,$args)?$args[0]:JS::$undefined;$_v=&$scope->properties[\'v\'];$Uv=FALSE;$scope->properties[\'indent\']=array_key_exists(1,$args)?$args[1]:JS::$undefined;$_indent=&$scope->properties[\'indent\'];$Uindent=FALSE;$scope->properties[\'dumper\']=$fn;$_dumper=&$scope->properties[\'dumper\'];$global->scope[++$global->scope_sp]=$scope;$x4=$_indent;if(!JS::toBoolean($x4,$global)){$x4=\'\';}if($Uindent){$global->properties[\'indent\']=$_indent;$_indent=&$global->properties[\'indent\'];}$_indent=$x4;$x5=(((gettype($_v)===gettype(JS::$undefined)&&$_v===JS::$undefined))||(((is_float($_v)||is_int($_v))&&(is_float(JS::$undefined)||is_int(JS::$undefined)))&&$_v==JS::$undefined));if(JS::toBoolean($x5,$global)){$x6=clone JS::$objectTemplate;$x6->properties[\'multiline\']=false;$x6->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x6->properties[\'dump\']=\'undefined\';$x6->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x6;}else{$x8=(((gettype($_v)===gettype(NULL)&&$_v===NULL))||(((is_float($_v)||is_int($_v))&&(is_float(NULL)||is_int(NULL)))&&$_v==NULL));$x7=$x8;if(!JS::toBoolean($x7,$global)){$x10=$_v;$x10=($x10===JS::$undefined?\'undefined\':(is_int($x10)||is_float($x10)?\'number\':(is_bool($x10)?\'boolean\':(is_string($x10)?\'string\':(is_object($x10)&&isset($x10->call)?\'function\':\'object\')))));$x9=(((gettype($x10)===gettype(\'boolean\')&&$x10===\'boolean\'))||(((is_float($x10)||is_int($x10))&&(is_float(\'boolean\')||is_int(\'boolean\')))&&$x10==\'boolean\'));$x7=$x9;}if(JS::toBoolean($x7,$global)){$x11=clone JS::$objectTemplate;$x11->properties[\'multiline\']=false;$x11->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x11->properties[\'dump\']=json_encode($_v);$x11->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x11;}else{$x13=$_v;$x13=($x13===JS::$undefined?\'undefined\':(is_int($x13)||is_float($x13)?\'number\':(is_bool($x13)?\'boolean\':(is_string($x13)?\'string\':(is_object($x13)&&isset($x13->call)?\'function\':\'object\')))));$x12=(((gettype($x13)===gettype(\'number\')&&$x13===\'number\'))||(((is_float($x13)||is_int($x13))&&(is_float(\'number\')||is_int(\'number\')))&&$x13==\'number\'));if(JS::toBoolean($x12,$global)){$x14=clone JS::$objectTemplate;$x14->properties[\'multiline\']=false;$x14->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if($_v===JS::$undefined||$_v===NULL){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x18=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x18[0];list(,$WTypeError,$STypeError,$UTypeError)=$x18;$x19=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x20=$x19($global,$global,$_TypeError,array(\'Cannot call function on undefined/null.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x20->class)&&$x20->class===\'Error\'){$x20->properties[\'file\']=\'<image>/14_dump.js\';$x20->properties[\'line\']=11;$x20->properties[\'column\']=47;$x20->attributes[\'file\']=$x20->attributes[\'line\']=$x20->attributes[\'column\']=0;}throw new JSException($x20,11,47,\'<image>/14_dump.js\');}$x15=JS::toObject($_v,$global);unset($x21,$W21,$S21,$U21);$x27=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$x15,(string)\'toString\',11,47,\'<image>/14_dump.js\');$x21=&$x27[0];list(,$W21,$S21,$U21)=$x27;if(!(is_object($x21)&&isset($x21->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x30=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'TypeError\',11,47,\'<image>/14_dump.js\');$_TypeError=&$x30[0];list(,$WTypeError,$STypeError,$UTypeError)=$x30;$x31=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x32=$x31($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x32->class)&&$x32->class===\'Error\'){$x32->properties[\'file\']=\'<image>/14_dump.js\';$x32->properties[\'line\']=11;$x32->properties[\'column\']=47;$x32->attributes[\'file\']=$x32->attributes[\'line\']=$x32->attributes[\'column\']=0;}throw new JSException($x32,11,47,\'<image>/14_dump.js\');}$x28=$x21->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',11,47);$x29=$x28($global,$x15,$x21,array(),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);$x14->properties[\'dump\']=$x29;$x14->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x14;}else{$x34=$_v;$x34=($x34===JS::$undefined?\'undefined\':(is_int($x34)||is_float($x34)?\'number\':(is_bool($x34)?\'boolean\':(is_string($x34)?\'string\':(is_object($x34)&&isset($x34->call)?\'function\':\'object\')))));$x33=(((gettype($x34)===gettype(\'string\')&&$x34===\'string\'))||(((is_float($x34)||is_int($x34))&&(is_float(\'string\')||is_int(\'string\')))&&$x34==\'string\'));if(JS::toBoolean($x33,$global)){if(JS::toBoolean(strlen($_v)>70,$global)){$x35=clone JS::$objectTemplate;$x35->properties[\'multiline\']=true;$x35->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x35->properties[\'dump\']=str_replace("\\\\/","/",json_encode(substr($_v,0,70)))."...";$x35->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x35;}else{$x36=clone JS::$objectTemplate;$x36->properties[\'multiline\']=false;$x36->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x36->properties[\'dump\']=str_replace("\\\\/","/",json_encode($_v));$x36->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x36;}}else{if(JS::toBoolean(isset($_v->call),$global)){$x37=clone JS::$objectTemplate;$x37->properties[\'multiline\']=false;$x37->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;$x40=JS::toPrimitive(\'[function\',$global);$x41=JS::toPrimitive((isset($_v->name)?" ".$_v->name:""),$global);$x38=JS::toPrimitive((is_string($x40)||is_string($x41)?JS::toString($x40,$global).JS::toString($x41,$global):JS::toNumber($x40,$global)+JS::toNumber($x41,$global)),$global);$x39=JS::toPrimitive(\']\',$global);$x37->properties[\'dump\']=(is_string($x38)||is_string($x39)?JS::toString($x38,$global).JS::toString($x39,$global):JS::toNumber($x38,$global)+JS::toNumber($x39,$global));$x37->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x37;}else{$scope->properties[\'multiline\']=JS::$undefined;$_multiline=&$scope->properties[\'multiline\'];$Umultiline=FALSE;$_multiline=false;$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=JS::$undefined;$scope->properties[\'k\']=JS::$undefined;$_k=&$scope->properties[\'k\'];$Uk=FALSE;$_k=JS::$undefined;$scope->properties[\'d\']=JS::$undefined;$_d=&$scope->properties[\'d\'];$Ud=FALSE;$_d=JS::$undefined;$scope->properties[\'isArray\']=JS::$undefined;$_isArray=&$scope->properties[\'isArray\'];$UisArray=FALSE;$_isArray=isset($_v->class)&&$_v->class==="Array";$values=array();if(JS::toBoolean($_isArray,$global)){for($x42=0;;++$x42){if($x42===0){if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=0;}if($x42!==0){$x43=++$_i;}unset($x47,$W47,$S47,$U47);$x48=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_v,(string)\'length\',30,22,\'<image>/14_dump.js\');$x47=&$x48[0];list(,$W47,$S47,$U47)=$x48;$x44=JS::toPrimitive($_i,$global);$x45=JS::toPrimitive($x47,$global);$x46=(is_string($x44)&&is_string($x45)?strcmp($x44,$x45)<0:(!is_nan($x49=JS::toNumber($x44,$global))&&!is_nan($x50=JS::toNumber($x45,$global))&&$x49<$x50));if(!JS::toBoolean($x46,$global)){break;}unset($x51,$W51,$S51,$U51);$x52=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_v,(string)$_i,31,23,\'<image>/14_dump.js\');$x51=&$x52[0];list(,$W51,$S51,$U51)=$x52;$x53=JS::toPrimitive($_indent,$global);$x54=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x57=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'TypeError\',31,21,\'<image>/14_dump.js\');$_TypeError=&$x57[0];list(,$WTypeError,$STypeError,$UTypeError)=$x57;$x58=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',31,21);$x59=$x58($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x59->class)&&$x59->class===\'Error\'){$x59->properties[\'file\']=\'<image>/14_dump.js\';$x59->properties[\'line\']=31;$x59->properties[\'column\']=21;$x59->attributes[\'file\']=$x59->attributes[\'line\']=$x59->attributes[\'column\']=0;}throw new JSException($x59,31,21,\'<image>/14_dump.js\');}$x55=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',31,21);$x56=$x55($global,$global,$_dumper,array($x51,(is_string($x53)||is_string($x54)?JS::toString($x53,$global).JS::toString($x54,$global):JS::toNumber($x53,$global)+JS::toNumber($x54,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x56;unset($x60,$W60,$S60,$U60);$x61=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_d,(string)\'multiline\',31,43,\'<image>/14_dump.js\');$x60=&$x61[0];list(,$W60,$S60,$U60)=$x61;if(JS::toBoolean($x60,$global)){if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=true;}unset($x62,$W62,$S62,$U62);$x63=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_d,(string)\'dump\',35,11,\'<image>/14_dump.js\');$x62=&$x63[0];list(,$W62,$S62,$U62)=$x63;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x62;$values[]=$_d;}}else{if($_v!==JS::$undefined&&$_v!==NULL){for($x64=JS::toObject($_v,$global);$x64;$x64=$x64->prototype){foreach($x64->attributes as$property=>$attributes){if(!($attributes&JS::ENUMERABLE)){continue;}$_k=$property;unset($x65,$W65,$S65,$U65);$x66=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_v,(string)$_k,42,23,\'<image>/14_dump.js\');$x65=&$x66[0];list(,$W65,$S65,$U65)=$x66;$x67=JS::toPrimitive($_indent,$global);$x68=JS::toPrimitive(\'  \',$global);if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x71=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'TypeError\',42,21,\'<image>/14_dump.js\');$_TypeError=&$x71[0];list(,$WTypeError,$STypeError,$UTypeError)=$x71;$x72=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',42,21);$x73=$x72($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x73->class)&&$x73->class===\'Error\'){$x73->properties[\'file\']=\'<image>/14_dump.js\';$x73->properties[\'line\']=42;$x73->properties[\'column\']=21;$x73->attributes[\'file\']=$x73->attributes[\'line\']=$x73->attributes[\'column\']=0;}throw new JSException($x73,42,21,\'<image>/14_dump.js\');}$x69=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',42,21);$x70=$x69($global,$global,$_dumper,array($x65,(is_string($x67)||is_string($x68)?JS::toString($x67,$global).JS::toString($x68,$global):JS::toNumber($x67,$global)+JS::toNumber($x68,$global))),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x70;unset($x74,$W74,$S74,$U74);$x75=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_d,(string)\'multiline\',42,43,\'<image>/14_dump.js\');$x74=&$x75[0];list(,$W74,$S74,$U74)=$x75;if(JS::toBoolean($x74,$global)){if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=true;}unset($x76,$W76,$S76,$U76);$x77=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_d,(string)\'dump\',46,11,\'<image>/14_dump.js\');$x76=&$x77[0];list(,$W76,$S76,$U76)=$x77;if($Ud){$global->properties[\'d\']=$_d;$_d=&$global->properties[\'d\'];}$_d=$x76;$values[]=(preg_match("~^[A-Za-z][A-Za-z0-9]*$~",$_k)?$_k:json_encode($_k)).": ".$_d;}}}}if(JS::toBoolean(empty($values),$global)){$x78=clone JS::$objectTemplate;$x78->properties[\'multiline\']=false;$x78->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x79=\'[]\';}else{$x79=\'{}\';}$x78->properties[\'dump\']=$x79;$x78->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x78;}if(JS::toBoolean(count($values)>5,$global)){if($Umultiline){$global->properties[\'multiline\']=$_multiline;$_multiline=&$global->properties[\'multiline\'];}$_multiline=true;}$x80=clone JS::$objectTemplate;$x80->properties[\'multiline\']=$_multiline;$x80->attributes[\'multiline\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;if(JS::toBoolean($_isArray,$global)){$x85=\'[ \';}else{$x85=\'{ \';}$x83=JS::toPrimitive($x85,$global);$x84=JS::toPrimitive(implode(!$_multiline?", ":",\\n".$_indent."  ",$values),$global);if(JS::toBoolean($_isArray,$global)){$x86=\' ]\';}else{$x86=\' }\';}$x81=JS::toPrimitive((is_string($x83)||is_string($x84)?JS::toString($x83,$global).JS::toString($x84,$global):JS::toNumber($x83,$global)+JS::toNumber($x84,$global)),$global);$x82=JS::toPrimitive($x86,$global);$x80->properties[\'dump\']=(is_string($x81)||is_string($x82)?JS::toString($x81,$global).JS::toString($x82,$global):JS::toNumber($x81,$global)+JS::toNumber($x82,$global));$x80->attributes[\'dump\']=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;return$x80;}}}}}return JS::$undefined;}', "\n";
function _61326d45b87acb9e959cc1abde5a78d0_1($global, $leThis, $fn, $args, $constructor = FALSE) {

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
$x87 = clone JS::$functionTemplate; $x87->call = '_61326d45b87acb9e959cc1abde5a78d0_2'; $x87->parameters = array (
  0 => 'v',
  1 => 'indent',
); $x87->name = 'dumper'; $x87->scope = $scope; $x87->properties['prototype'] = clone JS::$objectTemplate; $x87->attributes['prototype'] = JS::WRITABLE; $x87->properties['prototype']->properties['constructor'] = $x87; $x87->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x87->properties['length'] = 2; $x87->attributes['length'] = 0;
$scope->properties['dumper'] = JS::$undefined; $_dumper =& $scope->properties['dumper'];
$Udumper = FALSE;
$_dumper = $x87;
for ($x88 = 0;; ++$x88) {
if ($x88 === 0) {
$scope->properties['i'] = JS::$undefined; $_i =& $scope->properties['i'];
$Ui = FALSE;
$_i = 0;
unset($_arguments, $Warguments, $Sarguments, $Uarguments);
$x89 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'arguments', 67, 22, '<image>/14_dump.js');
$_arguments =& $x89[0]; list(,$Warguments,$Sarguments,$Uarguments) = $x89;
if ($Uarguments) {
unset($_ReferenceError, $WReferenceError, $SReferenceError, $UReferenceError);
$x90 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'ReferenceError', 67, 22, '<image>/14_dump.js');
$_ReferenceError =& $x90[0]; list(,$WReferenceError,$SReferenceError,$UReferenceError) = $x90;
$x91 = $_ReferenceError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 67, 22);
$x92 = $x91($global, $global, $_ReferenceError, array('arguments is not defined'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x92->class) && $x92->class === 'Error') {$x92->properties['file'] = '<image>/14_dump.js';$x92->properties['line'] = 67;$x92->properties['column'] = 22;$x92->attributes['file'] = $x92->attributes['line'] = $x92->attributes['column'] = 0; }
throw new JSException($x92, 67, 22, '<image>/14_dump.js');
}
unset($x93, $W93, $S93, $U93);
$x94 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_arguments, (string) 'length', 67, 31, '<image>/14_dump.js');
$x93 =& $x94[0]; list(,$W93,$S93,$U93) = $x94;
$scope->properties['l'] = JS::$undefined; $_l =& $scope->properties['l'];
$Ul = FALSE;
$_l = $x93;
$scope->properties['arg'] = JS::$undefined; $_arg =& $scope->properties['arg'];
$Uarg = FALSE;
$_arg = JS::$undefined;
}
if ($x88 !== 0) {
$x95 = JS::toPrimitive($_i, $global);
$x96 = JS::toPrimitive(1, $global);
if ($Ui) {$global->properties['i'] = $_i; $_i =& $global->properties['i']; }
$_i = (is_string($x95) || is_string($x96) ? JS::toString($x95, $global) . JS::toString($x96, $global) : JS::toNumber($x95, $global) + JS::toNumber($x96, $global));
}
$x97 = JS::toPrimitive($_i, $global);
$x98 = JS::toPrimitive($_l, $global);
$x99 = (is_string($x97) && is_string($x98) ? strcmp($x97, $x98) < 0 : (!is_nan($x100 = JS::toNumber($x97, $global)) && !is_nan($x101 = JS::toNumber($x98, $global)) && $x100 < $x101));
if (!JS::toBoolean($x99, $global)) { break; }

unset($x102, $W102, $S102, $U102);
$x103 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $_arguments, (string) $_i, 68, 25, '<image>/14_dump.js');
$x102 =& $x103[0]; list(,$W102,$S102,$U102) = $x103;
if (!(is_object($_dumper) && isset($_dumper->call))) { 
unset($_TypeError, $WTypeError, $STypeError, $UTypeError);
$x106 = _61326d45b87acb9e959cc1abde5a78d0_3($global, $scope, $scope, (string) 'TypeError', 68, 15, '<image>/14_dump.js');
$_TypeError =& $x106[0]; list(,$WTypeError,$STypeError,$UTypeError) = $x106;
$x107 = $_TypeError->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 68, 15);
$x108 = $x107($global, $global, $_TypeError, array('Trying to call what is not a function.'), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
if (isset($x108->class) && $x108->class === 'Error') {$x108->properties['file'] = '<image>/14_dump.js';$x108->properties['line'] = 68;$x108->properties['column'] = 15;$x108->attributes['file'] = $x108->attributes['line'] = $x108->attributes['column'] = 0; }
throw new JSException($x108, 68, 15, '<image>/14_dump.js');
}
$x104 = $_dumper->call;
$global->trace[++$global->trace_sp] = array('<image>/14_dump.js', 68, 15);
$x105 = $x104($global, $global, $_dumper, array($x102), false);
unset($global->trace[$global->trace_sp--], $global->scope[$global->scope_sp--]);
unset($x109, $W109, $S109, $U109);
$x110 = _61326d45b87acb9e959cc1abde5a78d0_4($global, $scope, $x105, (string) 'dump', 68, 29, '<image>/14_dump.js');
$x109 =& $x110[0]; list(,$W109,$S109,$U109) = $x110;
if ($Uarg) {$global->properties['arg'] = $_arg; $_arg =& $global->properties['arg']; }
$_arg = $x109;
echo$_arg. "\n";;
};
;
return JS::$undefined;
}
echo 'function _61326d45b87acb9e959cc1abde5a78d0_1($global,$leThis,$fn,$args,$constructor=FALSE){if(isset($fn->boundThis)&&!$constructor){$leThis=$fn->boundThis;}if(isset($fn->boundArgs)){$args=array_merge($fn->boundArgs,$args);}$scope=clone JS::$emptyScope;$scope->up=$fn->scope;$scope->properties[\'arguments\']=clone JS::$argumentsTemplate;$x1=&$scope->properties[\'arguments\'];$x1->properties[\'length\']=count($args);foreach($args as$i=>$arg){$x1->properties[$i]=$args[$i];$x1->attributes[$i]=JS::WRITABLE|JS::ENUMERABLE|JS::CONFIGURABLE;}$scope->properties[\'dump\']=$fn;$_dump=&$scope->properties[\'dump\'];$global->scope[++$global->scope_sp]=$scope;$x87=clone JS::$functionTemplate;$x87->call=\'_61326d45b87acb9e959cc1abde5a78d0_2\';$x87->parameters=array(0=>\'v\',1=>\'indent\',);$x87->name=\'dumper\';$x87->scope=$scope;$x87->properties[\'prototype\']=clone JS::$objectTemplate;$x87->attributes[\'prototype\']=JS::WRITABLE;$x87->properties[\'prototype\']->properties[\'constructor\']=$x87;$x87->properties[\'prototype\']->attributes[\'constructor\']=JS::WRITABLE|JS::CONFIGURABLE;$x87->properties[\'length\']=2;$x87->attributes[\'length\']=0;$scope->properties[\'dumper\']=JS::$undefined;$_dumper=&$scope->properties[\'dumper\'];$Udumper=FALSE;$_dumper=$x87;for($x88=0;;++$x88){if($x88===0){$scope->properties[\'i\']=JS::$undefined;$_i=&$scope->properties[\'i\'];$Ui=FALSE;$_i=0;unset($_arguments,$Warguments,$Sarguments,$Uarguments);$x89=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'arguments\',67,22,\'<image>/14_dump.js\');$_arguments=&$x89[0];list(,$Warguments,$Sarguments,$Uarguments)=$x89;if($Uarguments){unset($_ReferenceError,$WReferenceError,$SReferenceError,$UReferenceError);$x90=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'ReferenceError\',67,22,\'<image>/14_dump.js\');$_ReferenceError=&$x90[0];list(,$WReferenceError,$SReferenceError,$UReferenceError)=$x90;$x91=$_ReferenceError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',67,22);$x92=$x91($global,$global,$_ReferenceError,array(\'arguments is not defined\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x92->class)&&$x92->class===\'Error\'){$x92->properties[\'file\']=\'<image>/14_dump.js\';$x92->properties[\'line\']=67;$x92->properties[\'column\']=22;$x92->attributes[\'file\']=$x92->attributes[\'line\']=$x92->attributes[\'column\']=0;}throw new JSException($x92,67,22,\'<image>/14_dump.js\');}unset($x93,$W93,$S93,$U93);$x94=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_arguments,(string)\'length\',67,31,\'<image>/14_dump.js\');$x93=&$x94[0];list(,$W93,$S93,$U93)=$x94;$scope->properties[\'l\']=JS::$undefined;$_l=&$scope->properties[\'l\'];$Ul=FALSE;$_l=$x93;$scope->properties[\'arg\']=JS::$undefined;$_arg=&$scope->properties[\'arg\'];$Uarg=FALSE;$_arg=JS::$undefined;}if($x88!==0){$x95=JS::toPrimitive($_i,$global);$x96=JS::toPrimitive(1,$global);if($Ui){$global->properties[\'i\']=$_i;$_i=&$global->properties[\'i\'];}$_i=(is_string($x95)||is_string($x96)?JS::toString($x95,$global).JS::toString($x96,$global):JS::toNumber($x95,$global)+JS::toNumber($x96,$global));}$x97=JS::toPrimitive($_i,$global);$x98=JS::toPrimitive($_l,$global);$x99=(is_string($x97)&&is_string($x98)?strcmp($x97,$x98)<0:(!is_nan($x100=JS::toNumber($x97,$global))&&!is_nan($x101=JS::toNumber($x98,$global))&&$x100<$x101));if(!JS::toBoolean($x99,$global)){break;}unset($x102,$W102,$S102,$U102);$x103=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$_arguments,(string)$_i,68,25,\'<image>/14_dump.js\');$x102=&$x103[0];list(,$W102,$S102,$U102)=$x103;if(!(is_object($_dumper)&&isset($_dumper->call))){unset($_TypeError,$WTypeError,$STypeError,$UTypeError);$x106=_61326d45b87acb9e959cc1abde5a78d0_3($global,$scope,$scope,(string)\'TypeError\',68,15,\'<image>/14_dump.js\');$_TypeError=&$x106[0];list(,$WTypeError,$STypeError,$UTypeError)=$x106;$x107=$_TypeError->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',68,15);$x108=$x107($global,$global,$_TypeError,array(\'Trying to call what is not a function.\'),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);if(isset($x108->class)&&$x108->class===\'Error\'){$x108->properties[\'file\']=\'<image>/14_dump.js\';$x108->properties[\'line\']=68;$x108->properties[\'column\']=15;$x108->attributes[\'file\']=$x108->attributes[\'line\']=$x108->attributes[\'column\']=0;}throw new JSException($x108,68,15,\'<image>/14_dump.js\');}$x104=$_dumper->call;$global->trace[++$global->trace_sp]=array(\'<image>/14_dump.js\',68,15);$x105=$x104($global,$global,$_dumper,array($x102),false);unset($global->trace[$global->trace_sp--],$global->scope[$global->scope_sp--]);unset($x109,$W109,$S109,$U109);$x110=_61326d45b87acb9e959cc1abde5a78d0_4($global,$scope,$x105,(string)\'dump\',68,29,\'<image>/14_dump.js\');$x109=&$x110[0];list(,$W109,$S109,$U109)=$x110;if($Uarg){$global->properties[\'arg\']=$_arg;$_arg=&$global->properties[\'arg\'];}$_arg=$x109;echo$_arg."\\n";}return JS::$undefined;}', "\n";
function _61326d45b87acb9e959cc1abde5a78d0_0($global = NULL, $scope = NULL) {
if (!is_object($global)) {$global = (object) array('properties' => array(),'attributes' => array(),'getters' => array(),'setters' => array(),'prototype' => NULL,'up' => NULL,);$set_scope = TRUE;$global->trace = array(array('<image>/14_dump.js', NULL, NULL)); $global->trace_sp = 0;}
if ($scope === NULL) {$scope = (object) array('properties' => array(), 'attributes' => array(), 'up' => $global);$scope->properties['global'] = $global;$scope->properties['__filename'] = '<image>/14_dump.js';$scope->properties['__dirname'] = '<image>';}
if (isset($set_scope)) { $global->scope = array($scope); $global->scope_sp = 0; }
$leThis = $global;
$x111 = clone JS::$functionTemplate; $x111->call = '_61326d45b87acb9e959cc1abde5a78d0_1'; $x111->parameters = array (
); $x111->name = 'dump'; $x111->scope = $scope; $x111->properties['prototype'] = clone JS::$objectTemplate; $x111->attributes['prototype'] = JS::WRITABLE; $x111->properties['prototype']->properties['constructor'] = $x111; $x111->properties['prototype']->attributes['constructor'] = JS::WRITABLE | JS::CONFIGURABLE; $x111->properties['length'] = 0; $x111->attributes['length'] = 0;
$scope->properties['dump'] = JS::$undefined; $_dump =& $scope->properties['dump'];
$Udump = FALSE;
$_dump = $x111;
$_dump;
;
return JS::$undefined;
}
